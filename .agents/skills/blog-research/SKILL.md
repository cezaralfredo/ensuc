---
name: blog-research
description: Protocolo de pesquisa avançada na web e auditoria anti-duplicidade para fundamentar artigos do Blog ENSUC com dados recentes e integridade de conteúdo.
---

# Skill: Pesquisa Web & Auditoria Anti-Duplicidade para o Blog ENSUC

Esta skill estabelece o fluxo obrigatório de **pesquisa em fontes primárias na internet** e de **auditoria rigorosa contra duplicidade/canibalização**, garantindo autoridade técnica (E-E-A-T), dados recentes e integridade absoluta do repositório de artigos.

---

## Quando Executar Esta Skill

Sempre que:
1. Uma nova pauta for definida ou sugerida para o Blog ENSUC.
2. For necessário levantar dados regulatórios, cotações de mercado ou fatos recentes para enriquecer um artigo.
3. For necessário auditar temas e palavras-chave para assegurar que não haja sobreposição com publicações anteriores.

---

## 1. Protocolo de Auditoria Anti-Duplicidade e Integridade (Fase 1)

Antes de qualquer busca ou redação, o agente DEVE verificar a integridade da base existente:

1. **Varredura no Repositório Local:**
   * Inspecionar todos os arquivos em `src/content/blog/*.md`.
   * Ler a tabela de histórico e a fila de pautas em `PLANEJAMENTO-EDITORIAL.md`.
2. **Checagem de Canibalização de Palavras-Chave:**
   * A palavra-chave pretendida já é o foco principal de algum artigo publicado?
   * Se sim, **é proibido** repetir o mesmo termo como foco primário. O agente deve derivar para uma variação *long-tail* ou ângulo setorial inédito (ex: se já existe "mercado regulado geral", derivar para "impacto no agronegócio" ou "prazos de transição").
3. **Auditoria de Slugs e Nomenclatura:**
   * Garantir que o nome do arquivo `src/content/blog/artigo-[slug].md` seja estritamente único.
   * Verificar se não existem arquivos duplicados ou resíduos com o mesmo propósito.
4. **Verificação de Tríade Multilíngue:**
   * Confirmar se artigos existentes já possuem seus pares `-en.md` e `-es.md` para evitar inconsistências nos hreflangs do site.

---

## 2. Protocolo de Pesquisa na Web (Fase 2)

Após aprovar a pauta sem risco de duplicidade, realizar busca direcionada para enriquecer o texto com dados reais e recentes:

### Fontes-Alvo Prioritárias por Cluster:
* **Regulação e Políticas Públicas:** Agência Senado, Agência Câmara, Diário Oficial da União (DOU), Ministério da Fazenda, Ministério do Meio Ambiente e Mudança do Clima (MMA), CVM.
* **Mercado Financeiro, Títulos Verdes & Agro:** B3, ANBIMA, CEBDS, Valor Econômico (ESG), Notícias Agrícolas, Canal Rural, NovaCana, EPBR.
* **Pesquisa Agronômica & Solo:** Embrapa, Esalq/USP, IAC, Instituto Escolhas.
* **Padrões Globais, Preços e Carbono:** Ecosystem Marketplace, Carbon Pulse, Verra (VCS), Gold Standard, BloombergNEF, S&P Global Platts, IATA, Sylvera.
* **Inovação, Tech Verde & Blue Carbon:** ABES, Brasscom, Painel Brasileiro de Mudanças Climáticas (PBMC), IEA (International Energy Agency).

### Critérios de Extração de Dados:
* **Dados Numéricos e Cotações:** Buscar números recentes (preço por tCO₂e, metas percentuais, prazos legais, volumes de financiamento ou áreas em hectares).
* **Leis e Decretos Específicos:** Citar números exatos de leis (ex: Lei nº 15.042/2024 do SBCE, Lei do Combustível do Futuro), resoluções ou portarias em vigor.
* **Citações Externas com Links:** Selecionar de 2 a 3 fontes externas conceituadas para incluir links naturais no corpo do artigo, fortalecendo a autoridade perante o Google.
* **Jargão e Tendências Atuais:** Capturar a terminologia mais recente adotada pelos principais players do setor.

---

## 3. Checklist de Saída da Skill (Briefing Enriquecido)

Ao concluir a execução desta skill, o agente deve produzir um briefing estruturado contendo:

1. **Validação de Exclusividade:**
   * [x] Slug único confirmado: `artigo-[slug].md`
   * [x] Palavra-chave primária sem canibalização
   * [x] Ângulo editorial inédito em relação ao histórico existente
2. **Dados e Evidências Coletadas:**
   * Dados estatísticos ou métricas recentes
   * Leis/regulamentos e datas-chave
   * 2 a 3 links externos de fontes confiáveis
3. **Mapeamento de Links Internos da ENSUC:**
   * Indicação de 3+ páginas de conversão (`/simulador`, `/paa`, `/biomas`, `/marco`, `/mercado` ou `/#contato`).
