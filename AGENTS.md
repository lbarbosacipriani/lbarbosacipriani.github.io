# AGENTS.md

## Visão geral

Este repositório contém o site pessoal estático de Leonardo Cipriani, publicado no
GitHub Pages em `https://lbarbosacipriani.github.io/`. O conteúdo principal é formado
por páginas HTML, uma folha de estilos compartilhada e pequenos scripts de apoio.

## Estrutura atual

- `index.html`: página inicial e navegação principal.
- `artigos.html`: índice editorial.
- `artigo-*.html`: páginas individuais dos artigos.
- `outros-textos.html`: índice de textos não técnicos.
- `resenhas.html`: índice de resenhas e notas de leitura sobre papers.
- `index.css`: estilos compartilhados por todas as páginas.
- `pegar_gps.js`: funcionalidade legada da página `links.html`.
- `links.html`, `quem_somos.html`, `menu_principal.html` e `tentativa.html`: páginas
  legadas mantidas por compatibilidade; não devem ser usadas como modelo para novas
  páginas.
- `sdv.PNG`: imagem legada usada nas páginas antigas.

## Convenções de implementação

- Escreva o conteúdo em português do Brasil e use `lang="pt-BR"` em novos documentos.
- Preserve os nomes e URLs existentes, pois o site é publicado como arquivos estáticos.
- Reutilize `index.css` e os componentes visuais existentes antes de criar estilos novos.
- Use HTML semântico, um único `h1` por página, links descritivos e estados de foco visíveis.
- Mantenha links externos com `rel="noopener noreferrer"` quando abrirem uma nova janela.
- Prefira JavaScript moderno, com `const`/`let`, modo estrito e tratamento explícito de erros.
- Não adicione dependências ou um processo de build sem necessidade: o site deve continuar
  funcionando abrindo os arquivos diretamente e no GitHub Pages.

## Verificação local

Antes de concluir alterações:

1. Verifique links e referências com `rg`.
2. Confirme que os arquivos HTML continuam apontando para recursos existentes.
3. Execute uma validação básica de sintaxe para scripts e PHP quando houver alterações.
4. Revise a renderização em viewport desktop e mobile quando houver mudança visual.

## Escopo e segurança

- Não coloque chaves, tokens, dados pessoais ou credenciais no repositório.
- O formulário atual usa `mailto:`; qualquer mudança para backend deve ser tratada como
  uma decisão separada e documentada.
- Não remova páginas legadas sem confirmar que os links públicos não são mais necessários.
