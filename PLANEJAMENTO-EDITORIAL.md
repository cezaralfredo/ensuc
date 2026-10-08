# Planejamento Editorial & Protocolo do Blog ENSUC

Este documento governa a esteira de pesquisa, redação, geração de imagens e publicação do Blog da ENSUC, garantindo rigor técnico, otimização para o Google Search Console (GSC) e **proteção ativa contra duplicidade e canibalização de conteúdo**.

---

## 1. Calendário e Frequência Editorial (Grade Temática Expandida)

| Eixo Editorial                                | Macro-Tema de Inteligência                              | Tópicos & Tecnologias Emergentes                                                                                                                 | Página de Conversão no Site                                          |
| :-------------------------------------------- | :------------------------------------------------------ | :----------------------------------------------------------------------------------------------------------------------------------------------- | :------------------------------------------------------------------- |
| **🗓️ Finanças Climáticas & Cotações**         | **Mercado Financeiro, Preços e Títulos Verdes**         | Cotação spot/futura tCO₂e, CRVEs, Green Bonds, CRAs Verdes, Fiagros sustentáveis, arbitragem e créditos de biodiversidade.                       | [Simulador de Carbono](/simulador) e [Financiamento](/financiamento) |
| **🗓️ Governança & Regulação (SBCE)**          | **Políticas Públicas, Compliance e Diretrizes Globais** | Lei 15.042/2024, limites acima de 25k tCO₂e, tributação, artigo 6 do Acordo de Paris, CBAM europeu e penalidades.                                | [Mercado](/mercado) e [Marco Legal](/marco)                          |
| **🗓️ Agronegócio & Monetização de Terras**    | **Propriedades Rurais, PAA e Serviços Ecossistêmicos**  | Contratos de longo prazo (20-30 anos), CAR, regularização fundiária, ILPF (Integração Lavoura-Pecuária-Floresta) e bioinsumos.                   | [PAA - Projetos em Fazendas](/paa) e [/#contato](/#contato)          |
| **🗓️ Tecnologia, Inovação & Indústria Limpa** | **Transição Energética, Redata, SAF e Carbono Azul**    | Combustíveis de aviação (SAF), data centers verdes movidos a energia limpa (Lei ReData), hidrogênio de baixa emissão e manguezais (Blue Carbon). | [Simulador](/simulador) e [/#contato](/#contato)                     |
| **🗓️ Biomas & Conservação Estratégica**       | **Geografia Ambiental e Preservação Além da Amazônia**  | Potencial inexplorado da Caatinga, Cerrado, Mata Atlântica e Pantanal, espécies endêmicas e restauração ecológica ARR.                           | [Biomas](/biomas)                                                    |

### 1.1 Categorias Oficiais do Blog (Taxonomia do Frontmatter)

Todo artigo publicado deve ter o campo `category` associado a uma das 10 categorias consolidadas:

|  #  | Categoria (`category`)      | Foco Editorial e Temático                                               | Destino Principal de Conversão |
| :-: | :-------------------------- | :---------------------------------------------------------------------- | :----------------------------- |
|  1  | **`Mercado`**               | Cotação global, preços e liquidez tCO₂e                                 | `/simulador`                   |
|  2  | **`Financiamento`**         | CRA Verde, Fiagro, BNDES, ABC Ambiental e fundos climáticos             | `/financiamento`               |
|  3  | **`Guia Rural`**            | PAA, regularização fundiária e geração de renda para fazendas           | `/paa`                         |
|  4  | **`ESG`**                   | Estratégia corporativa, descarbonização e relatórios auditados          | `/#contato`                    |
|  5  | **`Biomas`**                | Conservação florestal, REDD+ e restauração ecológica por bioma          | `/biomas`                      |
|  6  | **`Regulação & SBCE`**      | Marco regulatório, Lei nº 15.042/2024 e compliance                      | `/marco`                       |
|  7  | **`Agro Regenerativo`**     | Carbono no solo, ILPF, bioinsumos e pecuária sustentável                | `/paa`                         |
|  8  | **`Tecnologia & Inovação`** | SAF, Data Centers Verdes (ReData), hidrogênio e indústria limpa         | `/simulador`                   |
|  9  | **`Biodiversidade & PSA`**  | Créditos de biodiversidade, serviços ecossistêmicos e recursos hídricos | `/biomas`                      |
| 10  | **`Mercado Voluntário`**    | Verra, Gold Standard, ICVCM, integridade e compradores globais          | `/mercado`                     |

---

## 2. Protocolo Anti-Duplicidade e Anti-Canibalização (Obrigatório)

Para evitar conteúdo repetido e penalizações de SEO no Google:

1. **Varredura Prévia Obrigatória:** Antes de criar qualquer novo artigo, o agente DEVE listar e ler os títulos, palavras-chave e slugs já existentes em `src/content/blog/` e consultar a tabela de histórico abaixo.
2. **Palavra-Chave Primária Única:** Não podem existir dois artigos disputando a mesma palavra-chave exata como foco principal. Se a palavra principal já foi usada, o novo artigo deve obrigatoriamente focar em uma variação _long-tail_ ou ângulo derivado.
3. **Diferenciação de Ângulo Editorial:**
   - Se já existe um post sobre regulação geral, o próximo deve focar em um setor específico (ex: agronegócio, siderurgia) ou numa data/marco temporal novo.
   - Se já existe um post sobre cotação, o próximo deve comparar valores entre biomas ou metodologias (reflorestamento vs. conservação).
4. **Proteção de Slug:** O arquivo `.md` em `src/content/blog/` deve ter slug inédito (ex: `artigo-[tema-especifico]-[ano-ou-foco].md`).
5. **Atualização do Registro:** Assim que um artigo for publicado, ele deve ser imediatamente registrado na tabela abaixo.

---

## 3. Histórico de Publicações Realizadas

| Data       | Slug                                                                                   | Palavra-Chave Primária                                                  | Título do Artigo                                                                         | Categoria / Foco               |
| :--------- | :------------------------------------------------------------------------------------- | :---------------------------------------------------------------------- | :--------------------------------------------------------------------------------------- | :----------------------------- |
| 2026-06-30 | `artigo-redd-panorama-biomas`                                                          | `REDD+ biomas brasileiros`                                              | REDD+ e o potencial dos biomas brasileiros                                               | Biomas / Conservação           |
| 2026-07-14 | `artigo-esg-e-creditos-de-carbono-na-pratica`                                          | `ESG e créditos de carbono`                                             | ESG e créditos de carbono na prática: do inventário ao relatório                         | ESG / Empresas                 |
| 2026-07-28 | `artigo-mercado-de-carbono-brasil-2026`                                                | `mercado de carbono brasil 2026`                                        | Mercado de carbono no Brasil em 2026: o que mudou e o que esperar                        | Mercado / SBCE                 |
| 2026-08-27 | `artigo-guia-mercado-credito-carbono-brasil`                                           | `guia crédito de carbono propriedades rurais`                           | Mercado de Crédito de Carbono: Guia para Propriedades Rurais                             | Produtores / PAA               |
| 2026-09-30 | `artigo-cotacao-credito-carbono-2026`<br>_(+ versões `-en` e `-es`)_                   | `cotação credito de carbono` / `carbon credit price` / `cotización`     | Cotação do Crédito de Carbono: Quanto Vale 1 tCO₂e em 2026? _(Trilíngue PT/EN/ES)_       | Mercado / Cotação Global       |
| 2026-10-02 | `artigo-venda-de-carbono-propriedades-rurais-florestas`<br>_(+ versões `-en` e `-es`)_ | `venda de carbono` / `crédito de carbono propriedades rurais`           | Venda de Carbono em Áreas Rurais: Guia de Monetização Florestal _(Trilíngue PT/EN/ES)_   | Produtores & Terras / PAA      |
| 2026-10-05 | `artigo-cra-verde-fiagro-sustentavel`<br>_(+ versões `-en` e `-es`)_                   | `cra verde carbono` / `fiagro sustentavel` / `financiamento verde agro` | CRA Verde e Fiagro: Como Financiar a Restauração com Juros Baixos _(Trilíngue PT/EN/ES)_ | Financiamento / Títulos Verdes |
| 2026-10-08 | `artigo-biomas-alem-amazonia-caatinga-cerrado-carbono`<br>_(+ versões `-en` e `-es`)_ | `credito de carbono caatinga cerrado` / `biomas alem da amazonia`      | Biomas Além da Amazônia: Por Que Caatinga e Cerrado São a Nova Fronteira do Carbono _(Trilíngue PT/EN/ES)_ | Biomas / Floresta Invertida & PAA |

---

## 4. Fila Expandida de Próximas Pautas (Radar de Alta Oportunidade)

| Prioridade  | Eixo Temático        | Palavra-Chave GSC Alvo                                               | Pauta Proposta & Ângulo Inédito                                                                                                                                                                                      | CTA de Conversão                |
| :---------- | :------------------- | :------------------------------------------------------------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | :------------------------------ |
| **Pauta 1** | Regulação & SBCE     | `mercado regulado de carbono` / `lei 15042 sbce`                     | **Empresas Acima de 25k tCO₂e: O Calendário de Fiscalização do SBCE e Estratégias de Compliance Antecipado**<br>_(Ângulo: governança corporativa, penalidades de descumprimento e montagem de portfólio defensivo)._ | `/marco` e `/mercado`           |
| **Pauta 2** | Agro Regenerativo    | `carbono no solo agronegocio` / `plantio direto carbono`             | **Carbono no Solo: Como Práticas de Plantio Direto e Bioinsumos Criam Ativos Monetizáveis no Agro**<br>_(Ângulo: MRV com satélites e sensores de solo sem interromper a safra comercial)._                           | `/paa`                          |
| **Pauta 3** | Mercados Globais     | `carbono azul brasil` / `blue carbon manguezais`                     | **Carbono Azul (Blue Carbon): A Nova Corrida pelos Manguezais e Costas Brasileiras**<br>_(Ângulo: ecossistemas costeiros que estocam até 5x mais carbono por hectare que florestas terrestres)._                     | `/biomas`                       |
| **Pauta 4** | Finanças Verdes      | `green bonds brasil` / `titulos verdes b3`                           | **Emissões de Green Bonds e Debêntures Sustentáveis na B3: O Caminho para Grandes Captações de Restauração**<br>_(Ângulo: estruturação financeira, auditoria SPO e spreads atrativos)._                            | `/financiamento` e `/simulador` |

---

## 5. Portfólio de Fontes para Pesquisa

- **Regulação & Política:** Agência Senado, Agência Câmara, Diário Oficial da União, Ministério da Fazenda, Ministério do Meio Ambiente.
- **Mercado Nacional & Agro:** EPBR, Valor Econômico (ESG), Notícias Agrícolas, Canal Rural, CEBDS, FGVces, B3.
- **Padrões Globais & Preços:** Ecosystem Marketplace, Carbon Pulse, Verra (VCS), Gold Standard, BloombergNEF, S&P Global Platts.

---

## 6. Padrão Visual das Capas (Imagens)

- **Proporção:** 1200x630 pixels.
- **Armazenamento:** `public/images/blog/` com nome semântico (ex.: `cotacao-credito-carbono-2026.png`).
- **Estilo:** Imagem conceitual cinematográfica (dossel de florestas brasileiras em vista aérea, tons de verde escuro floresta `#060e09` e dourado `#c9a84c`, névoa matinal sutil, sem tipografia desenhada na imagem).
