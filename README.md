# lbarbosacipriani.github.io

Site pessoal estático sobre inteligência artificial, arquitetura de software, cloud e
engenharia de IA.

## Como executar

Não há etapa de build. Para visualizar localmente, sirva a pasta com um servidor HTTP:

```bash
python3 -m http.server 8000
```

Depois acesse `http://localhost:8000/`.

## Organização

O conteúdo editorial fica nos arquivos `index.html`, `artigos.html`, `artigo-*.html`,
`outros-textos.html` e `resenhas.html`. O estilo compartilhado está em `index.css`. As páginas antigas foram
mantidas para compatibilidade, mas novas páginas devem seguir a estrutura semântica das
páginas editoriais atuais.

Instruções para manutenção por agentes estão em [AGENTS.md](AGENTS.md).
