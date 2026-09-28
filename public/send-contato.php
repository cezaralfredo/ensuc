<?php
/**
 * send-contato.php — Endpoint de envio do formulário de contato da ENSUC
 * SMTP: mail.ensuc.com.br : 587 (STARTTLS + AUTH LOGIN) — sem dependências externas.
 */
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') { http_response_code(204); exit; }
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(['ok' => false, 'msg' => 'Método não permitido.']);
  exit;
}

/* ---------- Configuração SMTP ---------- */
const SMTP_HOST = 'mail.ensuc.com.br';
const SMTP_PORT = 587;
const SMTP_USER = 'contato@ensuc.com.br';
const SMTP_PASS = 'Credito@AJS#100';
const MAIL_TO   = 'contato@ensuc.com.br';
const MAIL_FROM = 'contato@ensuc.com.br';

/* ---------- Lê payload (JSON ou form-urlencoded) ---------- */
$raw  = file_get_contents('php://input');
$data = json_decode($raw, true);
if (!is_array($data)) $data = $_POST;

function clean($v): string { return trim(strip_tags((string)$v)); }
function cut(string $s, int $n): string { return function_exists('mb_substr') ? mb_substr($s, 0, $n) : substr($s, 0, $n); }

$nome      = cut(clean($data['nome'] ?? ''), 80);
$empresa   = cut(clean($data['empresa'] ?? ''), 80);
$email     = filter_var(clean($data['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$telefone  = cut(clean($data['telefone'] ?? ''), 24);
$setor     = cut(clean($data['setor'] ?? ''), 80);
$interesse = cut(clean($data['interesse'] ?? ''), 80);
$mensagem  = cut(clean($data['mensagem'] ?? ''), 2000);
$honeypot  = clean($data['website'] ?? '');

/* Honeypot: bots preenchem; resposta silenciosa de sucesso. */
if ($honeypot !== '') {
  echo json_encode(['ok' => true, 'msg' => 'Enviado.']);
  exit;
}

if ($email === false || $nome === '') {
  http_response_code(422);
  echo json_encode(['ok' => false, 'msg' => 'Preencha os campos obrigatórios com dados válidos.']);
  exit;
}

/* ---------- Monta a mensagem ---------- */
$subject = 'Novo contato no site — ' . $nome;
$body  = "NOVO CONTATO — ENSUC.COM.BR\r\n";
$body .= "====================================\r\n\r\n";
$body .= "Nome:      " . $nome . "\r\n";
$body .= "Empresa:   " . ($empresa !== '' ? $empresa : '—') . "\r\n";
$body .= "E-mail:    " . $email . "\r\n";
$body .= "Telefone:  " . ($telefone !== '' ? $telefone : '—') . "\r\n";
$body .= "Setor:     " . ($setor !== '' ? $setor : '—') . "\r\n";
$body .= "Interesse: " . ($interesse !== '' ? $interesse : '—') . "\r\n";
$body .= "Mensagem:\r\n" . ($mensagem !== '' ? $mensagem : '—') . "\r\n\r\n";
$body .= "====================================\r\n";
$body .= "Enviado em " . date('d/m/Y H:i:s') . " (BRT) — Página inicial / Contato.\r\n";

/* ---------- Funções SMTP ---------- */
function smtp_read($fp, string $expect, string $label): bool {
  $resp = '';
  while (true) {
    $line = fgets($fp, 1024);
    if ($line === false) { error_log("[ENSUC][$label] conexão encerrada: " . trim($resp)); return false; }
    $resp .= $line;
    if (strlen($line) >= 4 && $line[3] === ' ' && ctype_digit(substr($line, 0, 3))) break;
  }
  if (substr($resp, 0, 3) !== $expect) {
    error_log("[ENSUC][$label] resposta inesperada (" . $expect . " esperado): " . trim($resp));
    return false;
  }
  return true;
}

function smtp_cmd($fp, string $cmd, string $expect, string $label): bool {
  fwrite($fp, $cmd . "\r\n");
  return smtp_read($fp, $expect, $label);
}

function smtp_send(string $subject, string $body): array {
  $timeout = 20;
  $fp = @fsockopen(SMTP_HOST, SMTP_PORT, $errno, $errstr, $timeout);
  if (!$fp) {
    error_log("[ENSUC] conexão falhou: $errstr ($errno)");
    return ['ok' => false, 'msg' => 'Falha de conexão com o servidor de e-mail.'];
  }
  stream_set_timeout($fp, $timeout);

  if (!smtp_read($fp, '220', 'banner'))                          { fclose($fp); return ['ok' => false, 'msg' => 'Falha no servidor de e-mail.']; }
  $ehlo = 'EHLO ' . (isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'ensuc.com.br');
  if (!smtp_cmd($fp, $ehlo, '250', 'ehlo'))                      { fclose($fp); return ['ok' => false, 'msg' => 'Falha na negociação SMTP.']; }
  if (!smtp_cmd($fp, 'STARTTLS', '220', 'starttls'))             { fclose($fp); return ['ok' => false, 'msg' => 'Falha na criptografia.']; }
  if (!@stream_socket_enable_crypto($fp, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
    error_log('[ENSUC] falha ao ativar TLS');
    fclose($fp);
    return ['ok' => false, 'msg' => 'Falha na criptografia.'];
  }
  if (!smtp_cmd($fp, $ehlo, '250', 'ehlo2'))                     { fclose($fp); return ['ok' => false, 'msg' => 'Falha na negociação SMTP.']; }
  if (!smtp_cmd($fp, 'AUTH LOGIN', '334', 'auth'))               { fclose($fp); return ['ok' => false, 'msg' => 'Servidor não aceitou autenticação.']; }
  if (!smtp_cmd($fp, base64_encode(SMTP_USER), '334', 'authu'))  { fclose($fp); return ['ok' => false, 'msg' => 'Falha na autenticação.']; }
  if (!smtp_cmd($fp, base64_encode(SMTP_PASS), '235', 'authp'))  { fclose($fp); return ['ok' => false, 'msg' => 'Credenciais inválidas.']; }
  if (!smtp_cmd($fp, 'MAIL FROM:<' . MAIL_FROM . '>', '250', 'from')) { fclose($fp); return ['ok' => false, 'msg' => 'Falha ao iniciar o envio.']; }
  if (!smtp_cmd($fp, 'RCPT TO:<' . MAIL_TO . '>', '250', 'to'))   { fclose($fp); return ['ok' => false, 'msg' => 'Destinatário recusado.']; }
  if (!smtp_cmd($fp, 'DATA', '354', 'data'))                      { fclose($fp); return ['ok' => false, 'msg' => 'Falha ao preparar o envio.']; }

  $subjectEnc = '=?UTF-8?B?' . base64_encode($subject) . '?=';
  $headers  = "From: Site ENSUC <" . MAIL_FROM . ">\r\n";
  $headers .= "To: <" . MAIL_TO . ">\r\n";
  $headers .= "Reply-To: " . SMTP_USER . "\r\n";
  $headers .= "Subject: " . $subjectEnc . "\r\n";
  $headers .= "Date: " . date('r') . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
  $headers .= "Content-Transfer-Encoding: 8bit\r\n";
  $headers .= "X-Mailer: ENSUC-Contact/1.0\r\n";

  $msg  = $headers . "\r\n" . $body;
  $msg  = preg_replace('/^\./m', '..', $msg); /* dot-stuffing RFC 5321 */
  fwrite($fp, $msg . "\r\n.\r\n");

  if (!smtp_read($fp, '250', 'maildata')) { fclose($fp); return ['ok' => false, 'msg' => 'Falha ao enviar a mensagem.']; }
  fwrite($fp, "QUIT\r\n");
  fclose($fp);
  return ['ok' => true, 'msg' => 'Mensagem enviada!'];
}

/* ---------- Envia e responde ---------- */
$result = smtp_send($subject, $body);
if (!$result['ok']) http_response_code(500);
echo json_encode($result, JSON_UNESCAPED_UNICODE);