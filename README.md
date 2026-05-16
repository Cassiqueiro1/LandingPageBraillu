# Braillu+

Site institucional da **Braillu+**, iniciativa de Luciane Molina voltada à promoção de ações inclusivas por meio da educação, do Sistema Braille, da tecnologia assistiva e da acessibilidade educacional.

A landing page apresenta a atuação profissional de Luciane Molina, seus serviços, produção acadêmica, reconhecimentos, participações públicas e depoimentos de pessoas impactadas por seu trabalho.

---

## Identidade do projeto

**Nome:** Braillu+  
**Slogan:** Promovendo ações inclusivas.

**Propósito:**  
Apoiar escolas, universidades, professores, famílias, produtores de cursos e instituições na construção de práticas educacionais mais acessíveis para estudantes com deficiência visual, com especial atenção ao Sistema Braille, à tecnologia assistiva e à acessibilidade em ambientes presenciais e digitais.

---

## Domínios previstos

```text
https://braillu.com.br
https://www.braillu.com.br
```

Ambientes complementares da presença digital da Braillu+:

```text
https://curso.braillu.com.br
https://interativo.braillu.com.br
```

- `braillu.com.br`: site institucional.
- `curso.braillu.com.br`: ambiente Moodle para cursos.
- `interativo.braillu.com.br`: material interativo **Braille Descomplicado**.

---

## Tecnologias utilizadas

- Laravel
- PHP 8.4
- HTML semântico
- CSS próprio
- JavaScript vanilla
- Apache
- MariaDB
- Git

---

## Principais características da Home

A página inicial foi estruturada como uma landing page institucional completa, com foco em:

1. Apresentação da proposta da Braillu+;
2. Importância do Sistema Braille;
3. Apresentação de Luciane Molina;
4. Serviços oferecidos;
5. Etapas da mentoria e do acompanhamento;
6. Impacto e presença pública;
7. Produção acadêmica;
8. Premiações e reconhecimentos;
9. Lives, vídeos, participações e matérias;
10. Depoimentos em carrossel acessível;
11. Chamada final para contato;
12. Rodapé institucional com canais de contato e redes sociais.

---

## Estrutura de navegação

A navegação principal utiliza links âncora para seções da própria página:

```text
Braille
Luciane Molina
Serviços
Produção
Depoimentos
Contato
```

Foi criado um script dedicado para melhorar a experiência de navegação interna:

```text
public/js/braillu-anchor-navigation.js
```

Esse script:

- realiza a rolagem até a seção escolhida;
- atualiza o hash da URL;
- move o foco para a seção de destino;
- melhora a navegação por teclado e com leitor de tela.

---

## Acessibilidade

A acessibilidade foi tratada como requisito central do projeto, não como acabamento posterior.

### Recursos implementados

- Link de salto para o conteúdo principal;
- Estrutura semântica com `header`, `nav`, `main`, `section` e `footer`;
- Hierarquia consistente de títulos;
- Contraste visual elevado;
- Foco visível;
- Botões e links com rótulos claros;
- `aria-label` contextual em links repetidos;
- Descrições alternativas para imagens;
- Navegação principal funcional por teclado;
- Foco programático nas seções de destino da navegação;
- Carrossel de depoimentos sem autoplay;
- Região de status com `aria-live="polite"`;
- Botões do carrossel com nomes claros;
- Indicadores acessíveis, como:
  - “Ler depoimento de Eliane, 1 de 5”;
  - “Ler depoimento de Denyse Guedes, 2 de 5”.

---

## Carrossel de depoimentos

O carrossel foi desenvolvido em JavaScript puro, sem dependências externas.

Arquivo:

```text
public/js/braillu-testimonials-carousel.js
```

### Características

- Sem rotação automática;
- Um depoimento visível por vez;
- Botões:
  - Depoimento anterior;
  - Próximo depoimento;
- Indicadores para seleção direta;
- Atualização visual do item ativo;
- Anúncio acessível da mudança de depoimento;
- Conteúdo totalmente presente no HTML;
- Funcionamento progressivo com melhoria via JavaScript.

---

## Estrutura de arquivos relevante

```text
resources/
└── views/
    ├── layouts/
    │   └── braillu.blade.php
    └── home.blade.php

public/
├── css/
│   └── braillu.css
├── js/
│   ├── braillu-anchor-navigation.js
│   └── braillu-testimonials-carousel.js
└── img/
    ├── braillu-logo.jpeg
    ├── braille/
    ├── depoimentos/
    ├── eventos/
    ├── luciane/
    └── premios/
```

---

## Organização das imagens

As imagens foram organizadas por contexto:

```text
public/img/braille
public/img/depoimentos
public/img/eventos
public/img/luciane
public/img/premios
```

### Exemplos de arquivos utilizados

#### Fotos da Luciane

```text
luciane-foto-quem-sou-eu.png
luciane-lendo-placa-braille-na-praca-sensorial.jpg
luciane-mostrando-cela-braille-em-formacao.jpeg
```

#### Recursos de Braille

```text
alfabraille.png
maquina-perkins.jpg
pecas-braille-bricks.jpg
regletes-e-puncao.jpg
```

#### Depoimentos

```text
depoimento-eliane.jpeg
depoimento-denyse-guedes.jpeg
depoimento-gisele-mae-ana.jpeg
depoimento-gisely.jpeg
depoimento-josi.jpeg
```

#### Premiações

```text
montagem-premios-luciane-molina.jpg
premiacao-projeto-tremembe.jpg
```

---

## Contatos e redes sociais

### E-mail

```text
contato@braillu.com.br
```

### WhatsApp

```text
+55 12 98102-0340
```

### Redes sociais

```text
https://facebook.com/braillu
https://www.instagram.com/braillu
https://www.linkedin.com/in/lucianemolina
```

### Currículo Lattes

```text
http://lattes.cnpq.br/5778300198160920
```

---

## Chamadas para WhatsApp

A landing page utiliza botões com mensagens pré-preenchidas, permitindo que cada chamada converta com contexto adequado.

Exemplos de mensagens:

```text
Olá, vim pela sua página e quero tornar meu curso acessível para estudantes cegos.
```

```text
Preciso de orientação sobre o ensino do braille na minha prática pedagógica.
```

```text
Quero informações sobre o curso de braille e a mentoria.
```

```text
Quero iniciar a mentoria em braille.
```

---

## Ambiente local

Após clonar o repositório:

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan optimize:clear
```

Configure o `.env` com os dados do ambiente local.

Exemplo de execução em desenvolvimento:

```bash
php artisan serve
```

---

## Ambiente de produção

O projeto foi preparado para rodar em servidor Apache com Laravel.

### Comandos úteis após deploy

```bash
php artisan optimize:clear
php artisan view:clear
php artisan config:clear
php artisan route:clear
```

### Permissões usuais

Verificar permissões de:

```text
storage/
bootstrap/cache/
```

---

## Git

Antes do primeiro commit, confirme que o `.env` não será versionado:

```bash
grep -n '^\.env$' .gitignore
```

Inicialização sugerida:

```bash
git init
git add .
git commit -m "Finaliza landing page institucional da Braillu+"
git branch -M main
git remote add origin URL_DO_REPOSITORIO
git push -u origin main
```

---

## Arquivos que não devem ser versionados

```text
.env
/vendor
/node_modules
/storage/*.key
/public/storage
```

O `.gitignore` padrão do Laravel cobre esses itens, mas é recomendável revisar antes do primeiro push.

---

## Próximas possibilidades de evolução

- Refinar o site conforme novas demandas institucionais;
- Criar páginas internas específicas para serviços;
- Integrar o site ao ambiente de cursos;
- Trabalhar identidade visual do Moodle;
- Criar área de notícias ou artigos;
- Adicionar metadados sociais completos para compartilhamento;
- Avaliar otimização adicional das imagens;
- Implementar monitoramento e analytics respeitando privacidade.

---

## Créditos

Projeto desenvolvido para a **Braillu+**.

**Luciane Molina**  
Mentoria educacional em Sistema Braille, tecnologia assistiva e acessibilidade educacional.

**Desenvolvimento web:**  
Cássio Santos.
