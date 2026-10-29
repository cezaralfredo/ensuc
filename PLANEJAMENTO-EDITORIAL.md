# Planejamento Editorial & Protocolo do Blog ENSUC

Este documento governa a esteira de pesquisa, redação, geração de imagens e publicação do Blog da ENSUC, garantindo rigor técnico, otimização para o Google Search Console (GSC) e **proteção ativa contra duplicidade e canibalização de conteúdo**.

---

## 1. Calendário e Frequência Editorial (Terças e Quintas-feiras)

A esteira de publicação no Blog da ENSUC opera em cadência bissemanal fixa, agrupando as 10 categorias oficiais em dois macro-eixos complementares:

| Dia da Semana | Macro-Eixo Editorial | Categorias Oficiais Vinculadas | Tópicos Prioritários & Tecnologias | Destinos de Conversão |
| :--- | :--- | :--- | :--- | :--- |
| **🗓️ Terça-feira** | **Finanças Climáticas, Mercado & Regulação** | `Mercado`, `Financiamento`, `Regulação & SBCE`, `ESG`, `Mercado Voluntário` | Cotação spot/futura tCO₂e, CRVEs, Green Bonds, CRAs Verdes, Fiagros sustentáveis, SBCE (Lei 15.042/2024), limites de 25k tCO₂e, CBAM e descarbonização corporativa. | [Simulador](/simulador), [Financiamento](/financiamento), [Marco Legal](/marco) e [Mercado](/mercado) |
| **🗓️ Quinta-feira** | **Campo, Biomas, Agro Regenerativo & Inovação Limpa** | `Guia Rural`, `Biomas`, `Agro Regenerativo`, `Tecnologia & Inovação`, `Biodiversidade & PSA` | Monetização de fazendas (PAA), regularização fundiária, preservação florestal (Cerrado, Caatinga, Pantanal, Mata Atlântica), carbono no solo, ILPF, SAF (aviação sustentável), Data Centers Verdes (ReData) e Blue Carbon. | [PAA - Projetos em Fazendas](/paa), [Biomas](/biomas), [Simulador](/simulador) e [/#contato](/#contato) |

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

| Data       | Slug                                                                                        | Palavra-Chave Primária                                                  | Título do Artigo                                                                                                                          | Categoria / Foco                  |
| :--------- | :------------------------------------------------------------------------------------------ | :---------------------------------------------------------------------- | :---------------------------------------------------------------------------------------------------------------------------------------- | :-------------------------------- |
| 2026-06-30 | `artigo-redd-panorama-biomas`                                                               | `REDD+ biomas brasileiros`                                              | REDD+ e o potencial dos biomas brasileiros                                                                                                | Biomas / Conservação              |
| 2026-07-14 | `artigo-esg-e-creditos-de-carbono-na-pratica`                                               | `ESG e créditos de carbono`                                             | ESG e créditos de carbono na prática: do inventário ao relatório                                                                          | ESG / Empresas                    |
| 2026-07-28 | `artigo-mercado-de-carbono-brasil-2026`                                                     | `mercado de carbono brasil 2026`                                        | Mercado de carbono no Brasil em 2026: o que mudou e o que esperar                                                                         | Mercado / SBCE                    |
| 2026-08-27 | `artigo-guia-mercado-credito-carbono-brasil`                                                | `guia crédito de carbono propriedades rurais`                           | Mercado de Crédito de Carbono: Guia para Propriedades Rurais                                                                              | Produtores / PAA                  |
| 2026-09-30 | `artigo-cotacao-credito-carbono-2026`<br>_(+ versões `-en` e `-es`)_                        | `cotação credito de carbono` / `carbon credit price` / `cotización`     | Cotação do Crédito de Carbono: Quanto Vale 1 tCO₂e em 2026? _(Trilíngue PT/EN/ES)_                                                        | Mercado / Cotação Global          |
| 2026-10-02 | `artigo-venda-de-carbono-propriedades-rurais-florestas`<br>_(+ versões `-en` e `-es`)_      | `venda de carbono` / `crédito de carbono propriedades rurais`           | Venda de Carbono em Áreas Rurais: Guia de Monetização Florestal _(Trilíngue PT/EN/ES)_                                                    | Produtores & Terras / PAA         |
| 2026-10-05 | `artigo-cra-verde-fiagro-sustentavel`<br>_(+ versões `-en` e `-es`)_                        | `cra verde carbono` / `fiagro sustentavel` / `financiamento verde agro` | CRA Verde e Fiagro: Como Financiar a Restauração com Juros Baixos _(Trilíngue PT/EN/ES)_                                                  | Financiamento / Títulos Verdes    |
| 2026-10-08 | `artigo-regulamentacao-sbce-mercado-regulado-carbono-brasil`<br>_(+ versões `-en` e `-es`)_ | `regulamentacao sbce` / `mercado regulado de carbono` / `lei 15042`     | Adeus ESG de Fachada: Como a Regulamentação do SBCE Obriga 17 Setores a Auditar Emissões _(Trilíngue PT/EN/ES - Cross-post Onda Conecta)_ | Regulação & SBCE / Link Building  |
| 2026-10-08 | `artigo-biomas-alem-amazonia-caatinga-cerrado-carbono`<br>_(+ versões `-en` e `-es`)_       | `credito de carbono caatinga cerrado` / `biomas alem da amazonia`       | Biomas Além da Amazônia: Por Que Caatinga e Cerrado São a Nova Fronteira do Carbono _(Trilíngue PT/EN/ES)_                                | Biomas / Floresta Invertida & PAA |
| 2026-10-12 | `artigo-green-bonds-titulos-verdes-b3-restauracao`<br>_(+ versões `-en` e `-es`)_          | `green bonds brasil` / `titulos verdes b3`                              | Green Bonds na B3: Captações para Restauração Florestal _(Trilíngue PT/EN/ES)_                                                             | Finanças Climáticas / Títulos B3  |
| 2026-10-19 | `artigo-crves-preco-conformidade-sbce-mercado-carbono`<br>_(+ versões `-en` e `-es`)_     | `crve mercado regulado` / `preco de conformidade sbce`                  | CRVEs e o Preço da Conformidade: O Valor do Carbono no SBCE _(Trilíngue PT/EN/ES)_                                                        | Mercado / Finanças Climáticas     |
| 2026-10-22 | `artigo-carbono-no-solo-plantio-direto-agro-regenerativo`<br>_(+ versões `-en` e `-es`)_ | `carbono no solo agronegocio` / `plantio direto carbono`                | Carbono no Solo: Como o Agro Monetiza Plantio Direto e Bioinsumos _(Trilíngue PT/EN/ES)_                                                  | Agro Regenerativo / Solo & VM0042 |
| 2026-10-27 | `artigo-sbce-empresas-25k-calendario-fiscalizacao-compliance`<br>_(+ versões `-en` e `-es`)_ | `compliance sbce 25k tco2e` / `mercado regulado de carbono` / `lei 15042` | Empresas Acima de 25k tCO₂e: Calendário e Compliance SBCE _(Trilíngue PT/EN/ES)_                                                          | Regulação & SBCE / Compliance     |
| 2026-10-29 | `artigo-carbono-azul-blue-carbon-manguezais-costas-brasil`<br>_(+ versões `-en` e `-es`)_ | `carbono azul brasil` / `blue carbon manguezais`         | Carbono Azul: A Nova Corrida Pelos Manguezais e Costas Brasileiras _(Trilíngue PT/EN/ES)_                                                 | Biomas / Blue Carbon Costeiro     |


---

## 4. Fila Expandida de Próximas Pautas (Radar de Alta Oportunidade)

| Prioridade  | Eixo Temático     | Palavra-Chave GSC Alvo                                   | Pauta Proposta & Ângulo Inédito                                                                                                                                                                                      | CTA de Conversão                |
| :---------- | :---------------- | :------------------------------------------------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | :------------------------------ |
| **Pauta 1** | Inovação & Indústria | `hidrogenio verde carbono brasil` / `h2v descarbonizacao` | **Hidrogênio Verde (H2V) e Descarbonização Industrial: O Brasil na Rota das Exportações Limpas**<br>_(Ângulo: regulação do marco legal do H2V, certificações de origem e sinergias com créditos de carbono)._    | `/simulador` e `/#contato`      |
| **Pauta 2** | Finanças Climáticas | `blend finance restauracao florestal` / `bndes fndct`     | **Blended Finance e Fundos Climáticos: Como Estruturar Capital Misto para Restauração em Larga Escala**<br>_(Ângulo: combinação de capital filantrópico, concessional e privado para viabilizar projetos florestais)._ | `/financiamento` e `/paa`       |
| **Pauta 3** | Mercados Globais & PAA | `creditos de biodiversidade brasil` / `nature credit`   | **Créditos de Biodiversidade e PSA Marinho: Além do Carbono na Valoração de Serviços Ecossistêmicos**<br>_(Ângulo: frameworks emergentes de medição de biodiversidade integrada a projetos de restauração)._     | `/biomas` e `/paa`              |

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
