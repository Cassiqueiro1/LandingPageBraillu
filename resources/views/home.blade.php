@extends('layouts.braillu')

@section('title', 'Braillu+ | Mentoria educacional, Braille e acessibilidade')

@section('meta_description', 'Mentoria educacional e curso em Sistema Braille, tecnologia assistiva e acessibilidade para educação presencial e a distância.')

@php
    $whatsappBase = 'https://wa.me/5512981020340?text=';

    $ctaAbertura = $whatsappBase . urlencode('Olá, vim pela sua página e quero tornar meu curso acessível para estudantes cegos.');
    $ctaBraille = $whatsappBase . urlencode('Preciso de orientação sobre o ensino do braille na minha prática pedagógica.');
    $ctaCursoMentoria = $whatsappBase . urlencode('Quero informações sobre o curso de braille e a mentoria.');
    $ctaMentoria = $whatsappBase . urlencode('Quero iniciar a mentoria em braille.');
@endphp

@section('content')
    <section class="braillu-hero-main" aria-labelledby="titulo-principal">
        <div class="braillu-container">
            <div class="braillu-hero-main-inner">
                <img
                    src="{{ asset('img/braillu-logo.jpeg') }}"
                    alt="Logo da Braillu+, com identidade em roxo, amarelo e laranja, pontos em Braille e a mensagem Multiplicando Ações Inclusivas."
                    class="braillu-hero-main-logo"
                >

                <p class="braillu-eyebrow">Braillu+ · Promovendo ações inclusivas</p>

                <h1 id="titulo-principal">
                    Mentoria educacional e curso em <span class="braillu-highlight-word">Sistema Braille</span>,
                    tecnologia assistiva e <span class="braillu-highlight-word">acessibilidade</span> para educação e EAD
                </h1>

                <p class="braillu-hero-lead">
                    Apoio escolas, universidades, professores e produtores de cursos a eliminarem barreiras
                    que impedem <span class="braillu-highlight-word">estudantes com deficiência visual</span>
                    de aprender com autonomia, qualidade e dignidade.
                </p>

                <p class="braillu-hero-support">
                    A maioria dos cursos e materiais educacionais ainda nasce com barreiras invisíveis para quem não enxerga.
                    Eu trabalho para que <span class="braillu-highlight-word">Braille</span>, tecnologia assistiva
                    e acessibilidade façam parte do planejamento pedagógico desde o início, garantindo que estudantes
                    com deficiência visual possam aprender com autonomia, participação e equidade, da educação básica
                    ao ensino superior.
                </p>

                <div class="braillu-actions braillu-actions-centered" aria-label="Ações principais">
                    <a
                        class="braillu-button braillu-button-primary"
                        href="{{ $ctaAbertura }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Quero tornar minha prática acessível. Inicia uma conversa no WhatsApp em nova aba."
                    >
                        Quero tornar minha prática acessível
                    </a>

                    <a class="braillu-button braillu-button-secondary" href="#servicos">
                        Conhecer os serviços
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="braillu-section braillu-problem-section" id="sobre-braille" aria-labelledby="titulo-problema-braille">
        <div class="braillu-container braillu-two-column">
            <div>
                <p class="braillu-section-kicker">O problema que quase ninguém enxerga</p>

                <h2 id="titulo-problema-braille">
                    O <span class="braillu-highlight-word">Braille</span> precisa estar no centro das decisões pedagógicas
                </h2>

                <div class="braillu-rich-text">
                    <p>
                        Em muitos contextos educacionais, o Braille ainda é deixado para depois.
                        Cursos, materiais e práticas pedagógicas são planejados sem que ele faça parte
                        das decisões desde o início.
                    </p>

                    <p>
                        Ao mesmo tempo, o Braille vem sendo substituído por promessas de soluções tecnológicas rápidas,
                        como se ouvir fosse equivalente a ler e escrever.
                    </p>

                    <p>
                        Quando o professor conhece Braille, algo muito especial acontece na sala de aula.
                        Ele passa a reconhecer a presença do <span class="braillu-highlight-word">estudante cego</span>,
                        suas formas próprias de ler, escrever, organizar o pensamento e participar das atividades.
                    </p>

                    <p class="braillu-emphasis">
                        O Braille é a porta de entrada da criança cega para a alfabetização.
                    </p>

                    <p>
                        É nesse ponto que meu trabalho atua: recolocando o Braille no centro das decisões pedagógicas
                        e articulando seu uso com a tecnologia assistiva e os materiais didáticos, desde o início
                        do processo educativo.
                    </p>
                </div>

                <a
                    class="braillu-button braillu-button-primary braillu-button-inline"
                    href="{{ $ctaBraille }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Quero orientação sobre Braille na minha prática pedagógica. Inicia uma conversa no WhatsApp em nova aba."
                >
                    Quero orientação sobre Braille na minha prática pedagógica
                </a>
            </div>

            <div class="braillu-braille-gallery" aria-label="Imagens de recursos e práticas de leitura e escrita em Braille">
                <figure class="braillu-gallery-card braillu-gallery-card-large">
                    <img
                        src="{{ asset('img/eventos/curso-ensinando-escrita-na-reglete.jpg') }}"
                        alt="Mãos utilizam punção e reglete metálica sobre folha presa em prancha para escrever em Braille."
                    >
                    <figcaption>Escrita em Braille com reglete e punção.</figcaption>
                </figure>

                <figure class="braillu-gallery-card">
                    <img
                        src="{{ asset('img/braille/maquina-perkins.png') }}"
                        alt="Máquina Perkins de escrever em Braille sobre tecido vermelho, com folha escrita em Braille inserida."
                    >
                    <figcaption>Máquina Perkins para produção de textos em Braille.</figcaption>
                </figure>

                <figure class="braillu-gallery-card">
                    <img
                        src="{{ asset('img/eventos/livro-ibc.jpg') }}"
                        alt="Livros do título A importância do Sistema Braille para a autonomia e independência da pessoa cega, em versões impressa e em Braille."
                    >
                    <figcaption>Publicação apresentada em versão impressa e em Braille.</figcaption>
                </figure>
            </div>
        </div>
    </section>

<section class="braillu-section braillu-materials-section" aria-labelledby="titulo-materiais-braille">
    <div class="braillu-container">
        <p class="braillu-section-kicker">Braille em materiais, práticas e espaços</p>

        <h2 id="titulo-materiais-braille">
            Recursos concretos para ensinar, aprender e reconhecer o <span class="braillu-highlight-word">Braille</span>
        </h2>

        <p class="braillu-section-intro">
            O Sistema Braille se fortalece quando está presente nas práticas pedagógicas,
            nos materiais de alfabetização, nas experiências lúdicas e também nos espaços públicos.
            Esses recursos ampliam possibilidades de ensino, leitura, escrita e participação.
        </p>

        <div class="braillu-editorial-gallery braillu-editorial-gallery-braille">
            <figure class="braillu-editorial-card braillu-editorial-card-featured">
                <img
                    src="{{ asset('img/braille/braillete-02.jpg') }}"
                    alt="Brailletes azuis com os furos das celas Braille sobre fundo amarelo, com placas empilhadas e pinos metálicos soltos."
                >
                <figcaption>
                    Brailletes e pinos móveis como apoio à compreensão das combinações da cela Braille.
                </figcaption>
            </figure>

            <figure class="braillu-editorial-card">
                <img
                    src="{{ asset('img/braille/braillete-01.jpg') }}"
                    alt="Duas placas azuis de brailletes sobre fundo amarelo, com pinos metálicos encaixados formando palavras em Braille e vários pinos soltos ao redor."
                >
                <figcaption>
                    Montagem tátil para explorar letras, palavras e organização dos pontos.
                </figcaption>
            </figure>

            <figure class="braillu-editorial-card">
                <img
                    src="{{ asset('img/braille/jogos-e-bonecos-braille.png') }}"
                    alt="Cartaz colorido com dois bonecos de mãos dadas, cada um com uma cela Braille com pontos móveis no peito, sob o título Aprender Braille pode ser divertido e lúdico."
                >
                <figcaption>
                    Propostas lúdicas aproximam crianças e educadores do Sistema Braille.
                </figcaption>
            </figure>

            <figure class="braillu-editorial-card">
                <img
                    src="{{ asset('img/braille/reglete.jpg') }}"
                    alt="Conjunto de reglete de mesa e reglete de bolso metálicas com punção, sobre tecido vermelho, apoiadas em prancheta e estojo."
                >
                <figcaption>
                    Regletes e punção seguem essenciais para a escrita manual em Braille.
                </figcaption>
            </figure>

            <figure class="braillu-editorial-card">
                <img
                    src="{{ asset('img/braille/placa-braille-latinha-aluminio-sustentabilidade.jpg') }}"
                    alt="Placas de alumínio com escrita em Braille fixadas sobre base emborrachada preta, apoiadas em superfície clara."
                >
                <figcaption>
                    Acessibilidade também se constrói em sinalização, sustentabilidade e presença social.
                </figcaption>
            </figure>
        </div>
    </div>
</section>

    <section class="braillu-section" id="sobre" aria-labelledby="titulo-luciane">
        <div class="braillu-container braillu-profile-grid">
            <figure class="braillu-profile-photo-card">
                <img
                    src="{{ asset('img/luciane/luciane-foto-quem-sou-eu.png') }}"
                    alt="Luciane Molina sorrindo ao lado de painel do Memorial da Inclusão."
                    class="braillu-profile-photo"
                >
                <figcaption>Luciane Molina.</figcaption>
            </figure>

            <div>
                <p class="braillu-section-kicker">Quem conduz esse trabalho</p>

                <h2 id="titulo-luciane">
                    Luciane Molina
                </h2>

                <p class="braillu-profile-subtitle">
                    Doutora e Mestra em Educação · Mentora em Braille, tecnologia assistiva e acessibilidade educacional
                </p>

                <div class="braillu-rich-text">
                    <p>
                        Meu trabalho nasce do encontro entre vivência, pesquisa e prática pedagógica.
                    </p>

                    <p>
                        Sou uma pessoa com deficiência visual e atuo com Sistema Braille, tecnologia assistiva,
                        audiodescrição e acessibilidade educacional a partir de uma experiência concreta com a cegueira
                        e de uma trajetória dedicada à formação de professores, à análise de materiais didáticos
                        e à curadoria de acessibilidade para educação presencial e a distância.
                    </p>

                    <p>
                        Ao longo dos anos, acompanhei de perto as dificuldades de escolas, universidades e educadores
                        que desejam incluir, mas não encontram orientação específica sobre como ensinar Braille,
                        como articular seu uso com a tecnologia assistiva e como produzir materiais realmente utilizáveis
                        por estudantes cegos.
                    </p>

                    <p>
                        Essa atuação é sustentada por produção acadêmica, participação em pesquisas, publicações,
                        formações e projetos voltados à educação inclusiva e à acessibilidade para pessoas
                        com deficiência visual.
                    </p>
                </div>

                <a
                    class="braillu-text-link braillu-text-link-prominent"
                    href="http://lattes.cnpq.br/5778300198160920"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Ver currículo completo de Luciane Molina na Plataforma Lattes. Abre em nova aba."
                >
                    Ver currículo completo no Lattes
                </a>
            </div>
        </div>
    </section>

    <section class="braillu-section" id="servicos" aria-labelledby="titulo-servicos">
        <div class="braillu-container">
            <p class="braillu-section-kicker">Como posso apoiar você</p>

            <h2 id="titulo-servicos">
                Soluções para educadores, famílias, profissionais e instituições
            </h2>

            <p class="braillu-section-intro">
                Atendo educadores, familiares, profissionais e instituições que precisam de orientação segura
                sobre Sistema Braille, tecnologia assistiva e acessibilidade para estudantes com deficiência visual.
                Neste momento, ofereço de forma estruturada o curso de Braille, a mentoria educacional individual
                e a consultoria e análise de materiais.
            </p>

            <div class="braillu-service-grid">
                <article class="braillu-service-card">
                    <div class="braillu-card-icon" aria-hidden="true">01</div>
                    <h3>Curso Braille Descomplicado</h3>
                    <p class="braillu-card-subtitle">Semeando Leitores e Escritores Competentes</p>
                    <p>
                        Formação completa para quem precisa aprender Braille de forma pedagógica,
                        compreendendo seu papel na alfabetização, na autonomia e no desenvolvimento acadêmico
                        do estudante com cegueira.
                    </p>
                    <p class="braillu-card-small">
                        Indicado para professores, profissionais da educação, familiares e equipes pedagógicas.
                    </p>
                </article>

                <article class="braillu-service-card">
                    <div class="braillu-card-icon" aria-hidden="true">02</div>
                    <h3>Mentoria educacional individual</h3>
                    <p>
                        Acompanhamento personalizado para orientar práticas pedagógicas, escolhas de recursos,
                        organização de materiais e decisões relacionadas ao processo de escolarização
                        e/ou reabilitação do estudante com cegueira ou baixa visão de qualquer idade.
                    </p>
                </article>

                <article class="braillu-service-card">
                    <div class="braillu-card-icon" aria-hidden="true">03</div>
                    <h3>Avaliação de materiais didáticos</h3>
                    <p>
                        Análise técnica e pedagógica de PDFs, apostilas, apresentações, atividades,
                        imagens e recursos utilizados em cursos presenciais e online,
                        da educação básica ao ensino superior.
                    </p>
                </article>

                <article class="braillu-service-card">
                    <div class="braillu-card-icon" aria-hidden="true">04</div>
                    <h3>Consultorias, palestras e formações</h3>
                    <p>
                        Análises, orientações e formações sob demanda, organizadas conforme a realidade
                        da instituição, do curso ou da equipe.
                    </p>
                </article>
            </div>

            <div class="braillu-learning-gallery" aria-label="Materiais pedagógicos para o ensino do Braille">
                <figure class="braillu-learning-card">
                    <img
                        src="{{ asset('img/braille/alfabraille.png') }}"
                        alt="Conjunto de peças do alfabraille em vermelho e amarelo, com seis pontos em relevo representando células Braille."
                    >
                    <figcaption>Alfabraille como recurso concreto para o ensino.</figcaption>
                </figure>

                <figure class="braillu-learning-card">
                    <img
                        src="{{ asset('img/braille/livro-braille-bricks.jpg') }}"
                        alt="Blocos LEGO Braille Bricks coloridos espalhados sobre superfície clara, alguns com letras impressas."
                    >
                    <figcaption>Braille Bricks em proposta lúdica de alfabetização.</figcaption>
                </figure>

                <figure class="braillu-learning-card">
                    <img
                        src="{{ asset('img/luciane/luciane-mostrando-cela-braille-em-formacao.jpeg') }}"
                        alt="Luciane Molina segura um alfabraille gigante em sala de aula durante curso de formação."
                    >
                    <figcaption>Formação com materiais táteis e participação ativa.</figcaption>
                </figure>
            </div>

            <div class="braillu-section-cta">
                <a
                    class="braillu-button braillu-button-primary"
                    href="{{ $ctaCursoMentoria }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Quero informações sobre o curso de Braille e a mentoria. Inicia uma conversa no WhatsApp em nova aba."
                >
                    Quero informações sobre o curso de Braille e a mentoria
                </a>
            </div>
        </div>
    </section>

<section class="braillu-section braillu-practice-section" aria-labelledby="titulo-pratica-luciane">
    <div class="braillu-container">
        <p class="braillu-section-kicker">Formação, pesquisa e prática</p>

        <h2 id="titulo-pratica-luciane">
            Uma atuação construída no ensino, na investigação e no contato direto com pessoas e instituições
        </h2>

        <p class="braillu-section-intro">
            A experiência de Luciane Molina atravessa salas de aula, cursos de formação,
            pesquisas acadêmicas, atividades práticas e espaços de memória e acessibilidade.
            Cada imagem revela uma parte desse trabalho contínuo em favor do Braille e da inclusão.
        </p>

        <div class="braillu-editorial-gallery braillu-editorial-gallery-practice">
            <figure class="braillu-editorial-card braillu-editorial-card-featured">
                <img
                    src="{{ asset('img/luciane/luciane-professora-em-curso.jpg') }}"
                    alt="Luciane sentada em sala de aula, lendo uma folha em Braille sobre a mesa."
                >
                <figcaption>
                    Ensino de Braille em contexto formativo.
                </figcaption>
            </figure>

            <figure class="braillu-editorial-card">
                <img
                    src="{{ asset('img/luciane/luciane-digitando-braille-na-maquina.jpg') }}"
                    alt="Duas mulheres em pé usando uma máquina de escrever em Braille sobre a mesa; Luciane digita enquanto outra pessoa observa."
                >
                <figcaption>
                    Demonstração do uso da máquina de escrever em Braille.
                </figcaption>
            </figure>

            <figure class="braillu-editorial-card">
                <img
                    src="{{ asset('img/braille/luciane-mostrando-reglete.jpg') }}"
                    alt="Quatro adultos em sala de aula ao redor de uma mesa com papéis, enquanto uma pessoa demonstra o uso de uma reglete aos demais."
                >
                <figcaption>
                    Formação prática com reglete e acompanhamento de participantes.
                </figcaption>
            </figure>

            <figure class="braillu-editorial-card">
                <img
                    src="{{ asset('img/eventos/curso-caragua.jpg') }}"
                    alt="Adultos sentados em carteiras escrevendo em cadernos; sobre uma mesa há material didático amarelo com peças circulares azuis para Braille."
                >
                <figcaption>
                    Curso com vivências concretas de escrita e aprendizagem.
                </figcaption>
            </figure>

            <figure class="braillu-editorial-card">
                <img
                    src="{{ asset('img/eventos/luciane-com-materiais-em-curso.jpg') }}"
                    alt="Luciane Molina em atividade de curso com materiais didáticos sobre a mesa."
                >
                <figcaption>
                    Materiais acessíveis organizados para apoio à formação.
                </figcaption>
            </figure>

            <figure class="braillu-editorial-card">
                <img
                    src="{{ asset('img/luciane/luciane-lendo-no-memorial-da-inclusao.jpg') }}"
                    alt="Luciane em perfil, tocando um painel expositivo com inscrições em Braille e relevo no Memorial da Inclusão."
                >
                <figcaption>
                    Experiência tátil e memória da acessibilidade.
                </figcaption>
            </figure>

            <figure class="braillu-editorial-card">
                <img
                    src="{{ asset('img/eventos/defesa-doutorado-usp.jpeg') }}"
                    alt="Duas capturas de videoconferência lado a lado da defesa do doutorado: à esquerda, slide Trajetória até o tema; à direita, grade com participantes."
                >
                <figcaption>
                    Defesa de doutorado e consolidação da trajetória acadêmica.
                </figcaption>
            </figure>

            <figure class="braillu-editorial-card">
                <img
                    src="{{ asset('img/eventos/luciane-apresentando-tcc-braille-unifei.jpg') }}"
                    alt="Luciane Molina em pé ao lado de mesa com dois notebooks, apresentando TCC diante de telão com slide sobre o Sistema Braille na formação de professores."
                >
                <figcaption>
                    Apresentação acadêmica sobre Braille e formação docente.
                </figcaption>
            </figure>
        </div>
    </div>
</section>

    <section class="braillu-section braillu-process-section" aria-labelledby="titulo-processo">
        <div class="braillu-container">
            <p class="braillu-section-kicker">Como funciona o acompanhamento</p>

            <h2 id="titulo-processo">
                Escuta, análise e orientação aplicável à prática
            </h2>

            <p class="braillu-section-intro">
                Cada escola, profissional ou família chega com uma realidade diferente.
                Por isso, o trabalho começa sempre pela escuta e pela compreensão do contexto
                em que a pessoa com deficiência visual está inserida.
            </p>

            <ol class="braillu-process-list">
                <li class="braillu-process-card">
                    <span class="braillu-process-number" aria-hidden="true">1</span>
                    <div>
                        <h3>Diagnóstico da situação atual</h3>
                        <p>
                            Compreensão das necessidades, das dificuldades e dos recursos já utilizados.
                        </p>
                    </div>
                </li>

                <li class="braillu-process-card">
                    <span class="braillu-process-number" aria-hidden="true">2</span>
                    <div>
                        <h3>Análise pedagógica e técnica</h3>
                        <p>
                            Avaliação das práticas, dos materiais e das decisões relacionadas ao uso do Braille,
                            da tecnologia assistiva e da audiodescrição.
                        </p>
                    </div>
                </li>

                <li class="braillu-process-card">
                    <span class="braillu-process-number" aria-hidden="true">3</span>
                    <div>
                        <h3>Orientações personalizadas</h3>
                        <p>
                            Indicações práticas sobre ensino do Braille, organização de materiais,
                            escolhas de recursos e encaminhamentos pedagógicos.
                        </p>
                    </div>
                </li>

                <li class="braillu-process-card">
                    <span class="braillu-process-number" aria-hidden="true">4</span>
                    <div>
                        <h3>Acompanhamento</h3>
                        <p>
                            Espaço para tirar dúvidas, ajustar práticas e apoiar a implementação
                            das orientações no cotidiano.
                        </p>
                    </div>
                </li>
            </ol>

            <p class="braillu-emphasis braillu-process-closing">
                Esse processo garante que as decisões não sejam baseadas em tentativa e erro,
                mas em conhecimento específico sobre Braille, deficiência visual e educação.
            </p>

            <div class="braillu-section-cta">
                <a
                    class="braillu-button braillu-button-primary"
                    href="{{ $ctaMentoria }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Quero iniciar a mentoria em Braille. Inicia uma conversa no WhatsApp em nova aba."
                >
                    Quero iniciar a mentoria em Braille
                </a>
            </div>
        </div>
    </section>

    <section class="braillu-section braillu-impact-section" aria-labelledby="titulo-impacto">
        <div class="braillu-container">
            <p class="braillu-section-kicker">Impacto e presença pública</p>

            <h2 id="titulo-impacto">
                Pesquisa, reconhecimento e participação ativa na educação inclusiva
            </h2>

            <p class="braillu-section-intro">
                Uma trajetória construída entre formação, pesquisa, produção de conhecimento,
                acessibilidade e presença em iniciativas que ampliam o reconhecimento do Braille
                e da educação inclusiva.
            </p>

            <div class="braillu-impact-gallery">
                <figure class="braillu-impact-card braillu-impact-card-wide">
                    <img
                        src="{{ asset('img/premios/premiacao-projeto-tremembe.jpg') }}"
                        alt="Luciane Molina segura certificado Ações Inclusivas em moldura preta durante premiação."
                    >
                    <figcaption>Reconhecimento pelo projeto realizado em Tremembé.</figcaption>
                </figure>

                <figure class="braillu-impact-card">
                    <img
                        src="{{ asset('img/eventos/lancamento-livro-pocos-de-caldas-capitulo.jpg') }}"
                        alt="Luciane Molina ao lado de banner laranja do lançamento do livro Educação digital."
                    >
                    <figcaption>Lançamento de livro com capítulo de sua autoria.</figcaption>
                </figure>

                <figure class="braillu-impact-card">
                    <img
                        src="{{ asset('img/eventos/apresentacao-tcc-banner-braille-unesp.jpeg') }}"
                        alt="Luciane Molina sorri ao lado de banner do Atendimento Educacional Especializado enquanto lê texto em Braille no painel."
                    >
                    <figcaption>Pesquisa acadêmica apresentada em banner acessível.</figcaption>
                </figure>

                <figure class="braillu-impact-card">
                    <img
                        src="{{ asset('img/luciane/luciane-lendo-placa-braille-na-praca-sensorial.jpg') }}"
                        alt="Luciane Molina toca uma placa em Braille ao lado de uma floreira em praça sensorial."
                    >
                    <figcaption>Braille também ocupa os espaços públicos.</figcaption>
                </figure>
            </div>
        </div>
    </section>

    <section class="braillu-section" id="producao" aria-labelledby="titulo-producao">
        <div class="braillu-container">
            <p class="braillu-section-kicker">Produção acadêmica, reconhecimentos e participação pública</p>

            <h2 id="titulo-producao">
                Conhecimento construído em publicações, prêmios e presença no debate público
            </h2>

            <p class="braillu-section-intro">
                Minha atuação em Sistema Braille, tecnologia assistiva e acessibilidade educacional
                é sustentada por pesquisa, produção acadêmica e participação ativa em espaços
                de formação, debate e divulgação de conhecimento.
            </p>

            <div class="braillu-content-block">
                <h3>Artigos e capítulos publicados</h3>

                <div class="braillu-publication-grid">
                    <article class="braillu-resource-card">
                        <h4>Abordagem Construcionista, Contextualizada e Significativa</h4>
                        <p>Processos formativos de educadores para aprendizagem lúdica e inclusiva.</p>
                        <p class="braillu-meta">Pimenta Cultural · 2026</p>
                        <a
                            class="braillu-text-link"
                            href="https://doi.org/10.31560/pimentacultural/978-85-7221-628-9"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Ler publicação: Abordagem Construcionista, Contextualizada e Significativa. Abre em nova aba."
                        >
                            Ler publicação
                        </a>
                    </article>

                    <article class="braillu-resource-card">
                        <h4>A importância do Sistema Braille para a autonomia e independência da pessoa cega</h4>
                        <p>Pela visão dos dedos: o Braille, o sentido e o pertencimento na sociedade.</p>
                        <p class="braillu-meta">Instituto Benjamin Constant, GPESBRA · 2025</p>
                        <a
                            class="braillu-text-link"
                            href="https://www.gov.br/ibc/pt-br/pesquisa-e-tecnologia/publicacoes-do-ibc-1/livros_pdf/anexos/a-importancia-do-sistema-braille-para-a-autonomia-da-pessoa-cega_livro_2025.pdf"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Ler publicação: A importância do Sistema Braille para a autonomia e independência da pessoa cega. Abre em nova aba."
                        >
                            Ler publicação
                        </a>
                    </article>

                    <article class="braillu-resource-card">
                        <h4>Formação on-line de educadores de instituições especializadas em deficiência visual</h4>
                        <p>Programa Braille Bricks Brasil.</p>
                        <p class="braillu-meta">Research, Society and Development · 2022</p>
                        <a
                            class="braillu-text-link"
                            href="https://rsdjournal.org/rsd/article/download/31321/26705/355888"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Ler publicação: Formação on-line de educadores de instituições especializadas em deficiência visual no Programa Braille Bricks Brasil. Abre em nova aba."
                        >
                            Ler publicação
                        </a>
                    </article>

                    <article class="braillu-resource-card">
                        <h4>Braille e suas peculiaridades no ensino das pessoas com deficiência visual</h4>
                        <p class="braillu-meta">Revista Educação em Foco · 2022</p>
                        <a
                            class="braillu-text-link"
                            href="https://repositorio.usp.br/item/003124917"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Ler publicação: Braille e suas peculiaridades no ensino das pessoas com deficiência visual. Abre em nova aba."
                        >
                            Ler publicação
                        </a>
                    </article>

                    <article class="braillu-resource-card">
                        <h4>Teorias da Aprendizagem: Deficiência Visual</h4>
                        <p class="braillu-meta">Universidade Federal do ABC, CAPES, UAB · 2022</p>
                        <a
                            class="braillu-text-link"
                            href="https://servidor-conteudo.ufabc.edu.br/arquivos/2023071131ae2a2614646973900b3763e/Deficiencia_visual_.pdf"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Ler publicação: Teorias da Aprendizagem: Deficiência Visual. Abre em nova aba."
                        >
                            Ler publicação
                        </a>
                    </article>

                    <article class="braillu-resource-card">
                        <h4>Ao Vivo e a Cores</h4>
                        <p>Relatos de casos de audiodescrição de eventos ao vivo.</p>
                        <p class="braillu-meta">Amazon · 2021</p>
                        <a
                            class="braillu-text-link"
                            href="https://www.amazon.com.br/Ao-Vivo-Cores-relatos-audiodescri%C3%A7%C3%A3o-ebook/dp/B094R95MBM"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Ler publicação: Ao Vivo e a Cores, relatos de casos de audiodescrição de eventos ao vivo. Abre em nova aba."
                        >
                            Ler publicação
                        </a>
                    </article>

                    <article class="braillu-resource-card">
                        <h4>O Sistema Braille e a formação do professor</h4>
                        <p>O acesso à leitura e à escrita por pessoas cegas.</p>
                        <p class="braillu-meta">Revista do Núcleo de Educação a Distância da UNESP · 2019</p>
                        <a
                            class="braillu-text-link"
                            href="https://ojs2.ead.unesp.br/index.php/cdep3/article/view/InFor4603v5n12019"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Ler publicação: O Sistema Braille e a formação do professor: o acesso à leitura e à escrita por pessoas cegas. Abre em nova aba."
                        >
                            Ler publicação
                        </a>
                    </article>

                    <article class="braillu-resource-card">
                        <h4>As placas de sinalização em Braille na escola inclusiva</h4>
                        <p>Construindo espaços acessíveis na perspectiva da sustentabilidade.</p>
                        <p class="braillu-meta">Repositório Aberto, UAB · 2018</p>
                        <a
                            class="braillu-text-link"
                                href="{{ asset('docs/2018_portugal_placas_Braille.pdf') }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Ler publicação: As placas de sinalização em Braille na escola inclusiva: construindo espaços acessíveis na perspectiva da sustentabilidade. Abre em nova aba."
                        >
                            Ler publicação
                        </a>
                    </article>
                </div>
            </div>

            <div class="braillu-content-block">
                <h3>Premiações e reconhecimentos</h3>

<figure class="braillu-awards-feature">
    <img
        src="{{ asset('img/premios/montagem-premios-luciane-molina.jpg') }}"
        alt="Montagem com fotos, certificados e troféus de premiações e homenagens recebidas por Luciane Molina em acessibilidade, educação e inclusão."
        class="braillu-awards-feature-image"
    >
    <figcaption>
        Reconhecimentos recebidos por Luciane Molina em acessibilidade, educação inclusiva
        e valorização do Sistema Braille.
    </figcaption>
</figure>

                <div class="braillu-publication-grid">
                    <article class="braillu-resource-card">
                        <h4>Líderes de Acessibilidade</h4>
                        <p>Categoria Profissionais de Acessibilidade.</p>
                        <p class="braillu-meta">Hand Talk · 2024</p>
                    </article>

                    <article class="braillu-resource-card">
                        <h4>Experiência Sensorial da nova logo do Itaú</h4>
                        <p class="braillu-meta">Design for a Better World · 2024</p>
                        <a
                            class="braillu-text-link"
                            href="https://dfbwaward.com/premiado/logo-tatil-em-fachada-acessivel-itau-lab/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Ver reconhecimento: Experiência Sensorial da nova logo do Itaú. Abre em nova aba."
                        >
                            Ver reconhecimento
                        </a>
                    </article>

                    <article class="braillu-resource-card">
                        <h4>Menção Honrosa à profissional da inclusão e acessibilidade</h4>
                        <p class="braillu-meta">Academia Internacional da União Cultural · 2020</p>
                    </article>

                    <article class="braillu-resource-card">
                        <h4>Consultora em audiodescrição do curta Aluga-se um Destino</h4>
                        <p class="braillu-meta">V Festival VerOuvindo, Júri Popular · 2019</p>
                    </article>

                    <article class="braillu-resource-card">
                        <h4>IV Ações Inclusivas</h4>
                        <p class="braillu-meta">Secretaria de Estado da Pessoa com Deficiência de São Paulo · 2013</p>
                    </article>

                    <article class="braillu-resource-card">
                        <h4>IV Prêmio Sentidos</h4>
                        <p class="braillu-meta">Revista Sentidos e SEDPcD · 2011</p>
                        <a
                            class="braillu-text-link"
                            href="https://salaimprensa.com.br/imprensa/4o-premio-sentidos-homenageia-historias-de-superacao-de-pessoas-com-deficiencia/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Ver reconhecimento: IV Prêmio Sentidos. Abre em nova aba."
                        >
                            Ver reconhecimento
                        </a>
                    </article>
                </div>
            </div>

            <div class="braillu-content-block">
                <h3>Lives, vídeos e participações</h3>

                <div class="braillu-publication-grid">
                    <article class="braillu-resource-card">
                        <h4>Braille e inclusão na prática com especialista e histórias reais</h4>
                        <p class="braillu-meta">TV Aparecida · 2026</p>
                        <a
                            class="braillu-text-link"
                            href="https://www.youtube.com/watch?v=ttFtbiOB9sQ"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Assistir: Braille e inclusão na prática com especialista e histórias reais, da TV Aparecida. Abre em nova aba."
                        >
                            Assistir
                        </a>
                    </article>

                    <article class="braillu-resource-card">
                        <h4>Ponto de vista na Rádio Frei Galvão</h4>
                        <p>Dia Mundial do Braille.</p>
                        <p class="braillu-meta">Rádio Frei Galvão · 2026</p>
                        <a
                            class="braillu-text-link"
                            href="https://www.youtube.com/watch?v=9CnR7oph3Ic&t=3s"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Assistir: Ponto de vista na Rádio Frei Galvão sobre o Dia Mundial do Braille. Abre em nova aba."
                        >
                            Assistir
                        </a>
                    </article>

                    <article class="braillu-resource-card">
                        <h4>PCD em Foco #07 com Luciane Molina Barbosa</h4>
                        <p class="braillu-meta">TV SISEMUG · 2025</p>
                        <a
                            class="braillu-text-link"
                            href="https://www.youtube.com/live/HCXbFtzeyxg"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Assistir: PCD em Foco número 7 com Luciane Molina Barbosa, da TV SISEMUG. Abre em nova aba."
                        >
                            Assistir
                        </a>
                    </article>

                    <article class="braillu-resource-card">
                        <h4>Alfabetização de alunos cegos</h4>
                        <p class="braillu-meta">Conexão Futura, TV Futura · 2021</p>
                        <a
                            class="braillu-text-link"
                            href="https://www.youtube.com/watch?v=IahoQPzgM8w"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Assistir: Alfabetização de alunos cegos, no programa Conexão Futura da TV Futura. Abre em nova aba."
                        >
                            Assistir
                        </a>
                    </article>

                    <article class="braillu-resource-card">
                        <h4>Destaque Dia dos Professores</h4>
                        <p class="braillu-meta">Link Vanguarda, G1 Vanguarda · 2017</p>
                        <a
                            class="braillu-text-link"
                            href="https://globoplay.globo.com/v/8003973/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Assistir: Destaque Dia dos Professores, exibido no Link Vanguarda. Abre em nova aba."
                        >
                            Assistir
                        </a>
                    </article>

                    <article class="braillu-resource-card">
                        <h4>Alunos e professores aprendem Libras e Braille em Tremembé</h4>
                        <p class="braillu-meta">G1 Vanguarda · 2014</p>
                        <a
                            class="braillu-text-link"
                            href="https://globoplay.globo.com/v/3543441/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Assistir: Alunos e professores aprendem Libras e Braille em Tremembé, reportagem do G1 Vanguarda. Abre em nova aba."
                        >
                            Assistir
                        </a>
                    </article>
                </div>

                <p class="braillu-after-grid-link">
                    <a
                        class="braillu-button braillu-button-secondary"
                        href="https://www.youtube.com/channel/UCxuvTg5gqFBK8_zXAV91TLw"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Acessar o canal de Luciane Molina no YouTube. Abre em nova aba."
                    >
                        Acessar meu canal no YouTube
                    </a>
                </p>
            </div>

            <div class="braillu-content-block">
                <h3>Entrevistas e matérias</h3>

                <div class="braillu-publication-grid">
                    <article class="braillu-resource-card">
                        <h4>Como a inteligência artificial tem ampliado a autonomia de pessoas com deficiência no digital</h4>
                        <p class="braillu-meta">Web para Todos, Spiral Interativa · 2026</p>
                        <a
                            class="braillu-text-link"
                            href="https://mwpt.com.br/como-a-inteligencia-artificial-tem-ampliado-a-autonomia-de-pessoas-com-deficiencia-no-digital/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Ler matéria: Como a inteligência artificial tem ampliado a autonomia de pessoas com deficiência no digital. Abre em nova aba."
                        >
                            Ler matéria
                        </a>
                    </article>

                    <article class="braillu-resource-card">
                        <h4>A importância de uma internet com acessibilidade e inclusão</h4>
                        <p class="braillu-meta">Vida Simples · 2024</p>
                        <a
                            class="braillu-text-link"
                            href="https://vidasimples.co/ouvindo-vida-simples/a-importancia-de-uma-internet-com-acessibilidade-e-inclusao/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Ler matéria: A importância de uma internet com acessibilidade e inclusão. Abre em nova aba."
                        >
                            Ler matéria
                        </a>
                    </article>

                    <article class="braillu-resource-card">
                        <h4>Braille e espaços públicos: onde o sistema ainda faz falta?</h4>
                        <p class="braillu-meta">Instituto Claro · 2021</p>
                        <a
                            class="braillu-text-link"
                            href="https://www.institutoclaro.org.br/cidadania/nossas-novidades/reportagens/braille-e-espacos-publicos-onde-o-sistema-ainda-faz-falta/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Ler matéria: Braille e espaços públicos: onde o sistema ainda faz falta?, publicada pelo Instituto Claro. Abre em nova aba."
                        >
                            Ler matéria
                        </a>
                    </article>

                    <article class="braillu-resource-card">
                        <h4>Luta das pessoas com deficiência: audiodescrição significa “os olhos emprestados”</h4>
                        <p class="braillu-meta">Jornal de Brasília · 2020</p>
                        <a
                            class="braillu-text-link"
                            href="https://jornaldebrasilia.com.br/brasilia/luta-das-pessoas-com-deficiencia-audiodescricao-significa-os-olhos-emprestados/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Ler matéria: Luta das pessoas com deficiência: audiodescrição significa os olhos emprestados. Abre em nova aba."
                        >
                            Ler matéria
                        </a>
                    </article>

                    <article class="braillu-resource-card">
                        <h4>Professora cega atua para trazer mais inclusão à educação</h4>
                        <p class="braillu-meta">Universidade de Taubaté, UNITAU · 2019</p>
                        <a
                            class="braillu-text-link"
                            href="https://unitau.br/noticias/detalhes/2528/professora-cega-atua-para-trazer-mais-inclusao-a-educacao/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Ler matéria: Professora cega atua para trazer mais inclusão à educação. Abre em nova aba."
                        >
                            Ler matéria
                        </a>
                    </article>

                    <article class="braillu-resource-card">
                        <h4>“Escrevi a primeira carta em 15 anos graças à professora”, diz internauta</h4>
                        <p class="braillu-meta">G1 · 2013</p>
                        <a
                            class="braillu-text-link"
                            href="https://g1.globo.com/vc-no-g1/noticia/2013/10/escrevi-primeira-carta-em-15-anos-gracas-professora-diz-internauta.html"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Ler matéria: Escrevi a primeira carta em 15 anos graças à professora, diz internauta. Abre em nova aba."
                        >
                            Ler matéria
                        </a>
                    </article>
                </div>

                <p class="braillu-after-grid-link">
                    <a
                        class="braillu-button braillu-button-secondary"
                        href="https://profalumolina.wixsite.com/lumolina"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Ver a produção completa de Luciane Molina. Abre em nova aba."
                    >
                        Ver produção completa
                    </a>
                </p>
            </div>

            <div class="braillu-after-grid-link">
                <a
                    class="braillu-button braillu-button-primary"
                    href="http://lattes.cnpq.br/5778300198160920"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Acessar o currículo Lattes completo de Luciane Molina. Abre em nova aba."
                >
                    Acessar meu currículo Lattes
                </a>
            </div>
        </div>
    </section>

    <section
        class="braillu-section braillu-testimonials-section"
        id="depoimentos"
        aria-labelledby="titulo-depoimentos"
    >
        <div class="braillu-container">
            <p class="braillu-section-kicker">Depoimentos</p>

            <h2 id="titulo-depoimentos">
                A experiência de quem já foi orientado
            </h2>

            <p class="braillu-section-intro">
                A experiência de quem já participou da mentoria e do curso de Braille mostra, na prática,
                como a orientação transforma o trabalho pedagógico e a segurança de professores, famílias
                e instituições.
            </p>

            <div
                class="braillu-testimonial-carousel"
                data-testimonial-carousel
                role="region"
                aria-roledescription="carrossel"
                aria-label="Depoimentos de participantes e familiares"
            >
                <p class="braillu-sr-only" aria-live="polite" data-carousel-status>
                    Depoimento de Eliane, 1 de 5.
                </p>

                <div class="braillu-testimonial-slides" data-carousel-slides>
                    <article
                        class="braillu-testimonial-slide is-active"
                        data-carousel-slide
                        data-name="Eliane"
                        aria-labelledby="depoimento-eliane-titulo"
                    >
                        <div class="braillu-testimonial-inner">
                            <img
                                src="{{ asset('img/depoimentos/depoimento-eliane.jpeg') }}"
                                alt="Foto de Eliane."
                                class="braillu-testimonial-photo"
                            >

                            <div class="braillu-testimonial-content">
                                <h3 id="depoimento-eliane-titulo">Depoimento de Eliane</h3>

                                <p class="braillu-testimonial-meta">
                                    Professora do Centro de Apoio ao Deficiente Visual, CADV · Mossoró, RN
                                </p>

                                <blockquote>
                                    <p>
                                        Ser aluna de Luciane Molina, em 2021, no Curso de Braille, foi muito gratificante
                                        para minha vida profissional. As aulas on-line foram muito dinâmicas e produtivas.
                                        A metodologia utilizada e o material disponibilizado ajudaram-me, sobremaneira,
                                        a ressignificar minha prática pedagógica no ensino do Sistema Braille.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </article>

                    <article
                        class="braillu-testimonial-slide"
                        data-carousel-slide
                        data-name="Denyse Guedes"
                        aria-labelledby="depoimento-denyse-titulo"
                    >
                        <div class="braillu-testimonial-inner">
                            <img
                                src="{{ asset('img/depoimentos/depoimento-denyse-guedes.jpeg') }}"
                                alt="Foto de Denyse Guedes."
                                class="braillu-testimonial-photo"
                            >

                            <div class="braillu-testimonial-content">
                                <h3 id="depoimento-denyse-titulo">Depoimento de Denyse Guedes</h3>

                                <p class="braillu-testimonial-meta">
                                    Assistente social, advogada e professora universitária · Santos, SP
                                </p>

                                <blockquote>
                                    <p>
                                        Quero registrar minha alegria e satisfação por ter sido alfabetizada em Braille
                                        pela professora Luciane Molina. Mesmo não sendo professora da educação básica,
                                        sempre tive interesse em conhecer esse alfabeto, e a professora, com sua didática
                                        maravilhosa, criativa e por vezes divertida, ensinou o que eu achava impossível:
                                        o conhecimento das combinações dos pontos.
                                    </p>

                                    <p>
                                        Foi uma emoção muito grande. Cabe ressaltar o método mnemônico que ela usou
                                        para ensinar várias letras. Suas aulas foram maravilhosas e serão inesquecíveis.
                                        Em todos os lugares que encontro textos em Braille, procuro verificar o que ali está escrito.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </article>

                    <article
                        class="braillu-testimonial-slide"
                        data-carousel-slide
                        data-name="Gisele Teixeira"
                        aria-labelledby="depoimento-gisele-titulo"
                    >
                        <div class="braillu-testimonial-inner">
                            <img
                                src="{{ asset('img/depoimentos/depoimento-gisele-mae-ana.jpeg') }}"
                                alt="Foto de Gisele Teixeira ao lado de sua filha Ana."
                                class="braillu-testimonial-photo"
                            >

                            <div class="braillu-testimonial-content">
                                <h3 id="depoimento-gisele-titulo">Depoimento de Gisele Teixeira</h3>

                                <p class="braillu-testimonial-meta">
                                    Enfermeira e mãe da Ana · São José dos Campos, SP
                                </p>

                                <blockquote>
                                    <p>
                                        A professora Luciane foi uma pessoa muito especial em um dos momentos mais difíceis
                                        das nossas vidas, quando a Ana perdeu a visão na infância. Tenho uma gratidão enorme
                                        por tudo o que ela fez por nós. Deus concedeu a ela um dom maravilhoso de ensinar,
                                        acolher e transformar vidas através da inclusão e do amor ao próximo.
                                    </p>

                                    <p>
                                        Vejo a professora Luciane como uma grande referência no Braille e na educação inclusiva.
                                        Sua dedicação, paciência e profissionalismo fizeram toda a diferença em nossa caminhada.
                                        Sua formação e experiência refletem não apenas conhecimento, mas também humanidade
                                        e compromisso com cada aluno. Somos eternamente gratos por todo cuidado,
                                        apoio e ensinamentos que ela nos proporcionou.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </article>

                    <article
                        class="braillu-testimonial-slide"
                        data-carousel-slide
                        data-name="Gisely Mafra"
                        aria-labelledby="depoimento-gisely-titulo"
                    >
                        <div class="braillu-testimonial-inner">
                            <img
                                src="{{ asset('img/depoimentos/depoimento-gisely.jpeg') }}"
                                alt="Foto de Gisely Mafra."
                                class="braillu-testimonial-photo"
                            >

                            <div class="braillu-testimonial-content">
                                <h3 id="depoimento-gisely-titulo">Depoimento de Gisely Mafra</h3>

                                <p class="braillu-testimonial-meta">
                                    Pedagoga, pessoa com cegueira · Cachoeira Paulista, SP
                                </p>

                                <blockquote>
                                    <p>
                                        Fui aluna da professora Luciane Molina e me desenvolvi muito no aprendizado do Braille.
                                        Com o tempo tomei gosto pela área, me apaixonando pela profissão e me formando pedagoga.
                                        Em 2013 fiz o curso presencial de formação de professores em Grafia Braille da Luciane,
                                        para me qualificar ainda mais.
                                    </p>

                                    <p>
                                        Esse curso foi fundamental para enriquecer minha bagagem e abrir novas portas na carreira
                                        de professora. Hoje eu trabalho com muita dedicação ensinando e transformando a vida
                                        de pessoas com deficiência visual.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </article>

                    <article
                        class="braillu-testimonial-slide"
                        data-carousel-slide
                        data-name="Josiane Lima"
                        aria-labelledby="depoimento-josiane-titulo"
                    >
                        <div class="braillu-testimonial-inner">
                            <img
                                src="{{ asset('img/depoimentos/depoimento-josi.jpeg') }}"
                                alt="Foto de Josiane Lima."
                                class="braillu-testimonial-photo"
                            >

                            <div class="braillu-testimonial-content">
                                <h3 id="depoimento-josiane-titulo">Depoimento de Josiane Lima</h3>

                                <p class="braillu-testimonial-meta">
                                    Professora · Caraguatatuba, SP
                                </p>

                                <blockquote>
                                    <p>
                                        Tive o privilégio de participar de uma mentoria em Braille com a professora Luciane Molina.
                                        Com muito carinho, paciência e dedicação, ela compartilhou ensinamentos que marcaram
                                        minha caminhada e fizeram toda diferença no meu aprendizado.
                                    </p>

                                    <p>
                                        Aprendi não apenas sobre o Sistema Braille, mas também sobre sensibilidade, inclusão
                                        e a importância de olhar cada criança com amor e respeito às suas necessidades.
                                        Tudo o que ela ensinou foi muito significativo e foi utilizado para auxiliar
                                        uma criança com deficiência visual de maneira mais humana, acolhedora e eficiente.
                                    </p>

                                    <p>
                                        Sou muito grata por cada orientação, incentivo e cuidado. Sua mentoria deixou marcas
                                        lindas no meu coração e também na vida da criança que pôde ser alcançada
                                        através desse aprendizado.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="braillu-carousel-controls">
                    <button
                        type="button"
                        class="braillu-carousel-button"
                        data-carousel-prev
                    >
                        Depoimento anterior
                    </button>

                    <button
                        type="button"
                        class="braillu-carousel-button"
                        data-carousel-next
                    >
                        Próximo depoimento
                    </button>
                </div>

                <div class="braillu-carousel-indicators" role="group" aria-label="Selecionar depoimento">
                    <button
                        type="button"
                        class="braillu-carousel-indicator is-active"
                        data-carousel-indicator="0"
                        aria-current="true"
                        aria-label="Ler depoimento de Eliane, 1 de 5"
                    >
                        Eliane
                    </button>

                    <button
                        type="button"
                        class="braillu-carousel-indicator"
                        data-carousel-indicator="1"
                        aria-label="Ler depoimento de Denyse Guedes, 2 de 5"
                    >
                        Denyse
                    </button>

                    <button
                        type="button"
                        class="braillu-carousel-indicator"
                        data-carousel-indicator="2"
                        aria-label="Ler depoimento de Gisele Teixeira, 3 de 5"
                    >
                        Gisele
                    </button>

                    <button
                        type="button"
                        class="braillu-carousel-indicator"
                        data-carousel-indicator="3"
                        aria-label="Ler depoimento de Gisely Mafra, 4 de 5"
                    >
                        Gisely
                    </button>

                    <button
                        type="button"
                        class="braillu-carousel-indicator"
                        data-carousel-indicator="4"
                        aria-label="Ler depoimento de Josiane Lima, 5 de 5"
                    >
                        Josiane
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="braillu-final-cta" aria-labelledby="titulo-cta-final">
        <div class="braillu-container braillu-final-cta-inner">
            <p class="braillu-section-kicker">Próximo passo</p>

            <h2 id="titulo-cta-final">
                Está na hora de transformar intenção inclusiva em prática acessível
            </h2>

            <p>
                Se você chegou até aqui, provavelmente também sente que precisa de orientação segura
                sobre o ensino do Braille, o uso da tecnologia assistiva e a organização de práticas realmente
                acessíveis para estudantes com deficiência visual. Estou pronta para apoiar você nesse processo.
            </p>

            <div class="braillu-actions braillu-actions-centered">
                <a
                    class="braillu-button braillu-button-primary"
                    href="{{ $ctaMentoria }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Quero iniciar a mentoria em Braille. Inicia uma conversa no WhatsApp em nova aba."
                >
                    Quero iniciar a mentoria em Braille
                </a>

                <a
                    class="braillu-button braillu-button-secondary"
                    href="{{ $ctaCursoMentoria }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Quero informações sobre o curso de Braille. Inicia uma conversa no WhatsApp em nova aba."
                >
                    Quero informações sobre o curso de Braille
                </a>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/braillu-testimonials-carousel.js') }}"></script>
@endpush