<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Braillu+ | Promovendo ações inclusivas')</title>
    <meta
        name="description"
        content="@yield('meta_description', 'Braillu+ — Promovendo ações inclusivas por meio da educação, acessibilidade, tecnologia e formação especializada.')"
    >

    <link rel="stylesheet" href="{{ asset('css/braillu.css') }}">
</head>
<body>
    <a class="braillu-skip-link" href="#conteudo-principal">
        Ir para o conteúdo principal
    </a>

    <header class="braillu-header" role="banner">
        <div class="braillu-container braillu-header-inner">
            <a class="braillu-brand" href="{{ route('home') }}" aria-label="Braillu+, página inicial">
                <img
                    src="{{ asset('img/braillu-logo.jpeg') }}"
                    alt="Logo da Braillu+. O símbolo traz o nome Braillu, a expressão M.A.I.S. e a mensagem Multiplicando Ações Inclusivas."
                    class="braillu-brand-logo"
                >

                <span class="braillu-brand-text">
                    <strong>Braillu+</strong>
                    <span>Promovendo ações inclusivas.</span>
                </span>
            </a>

            <nav class="braillu-nav" aria-label="Navegação principal">
    <ul>
        <li><a href="#sobre-braille">Braille</a></li>
        <li><a href="#sobre">Luciane Molina</a></li>
        <li><a href="#servicos">Serviços</a></li>
        <li><a href="#producao">Produção</a></li>
        <li><a href="#depoimentos">Depoimentos</a></li>
        <li><a href="#contato">Contato</a></li>
    </ul>
</nav>
        </div>
    </header>

    <main id="conteudo-principal" tabindex="-1">
        @yield('content')
    </main>

    <footer class="braillu-footer" id="contato" role="contentinfo">
    <div class="braillu-container braillu-footer-grid">
        <section aria-labelledby="rodape-marca">
            <h2 id="rodape-marca">Luciane Molina</h2>

            <p class="braillu-footer-intro">
                Mentoria educacional em sistema Braille, tecnologia assistiva e acessibilidade educacional.
            </p>

            <p class="braillu-footer-highlight">
                Incluir a pessoa cega começa pelo reconhecimento do Braille na prática pedagógica.
            </p>
        </section>

        <section aria-labelledby="rodape-contato">
            <h2 id="rodape-contato">Contato</h2>

            <ul class="braillu-footer-link-list">
                <li>
                    <a class="braillu-footer-link" href="mailto:contato@braillu.com.br">
                        <span class="braillu-footer-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" focusable="false">
                                <path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Zm0 4.25-8 5-8-5V6l8 5 8-5v2.25Z"/>
                            </svg>
                        </span>
                        <span>contato@braillu.com.br</span>
                    </a>
                </li>

                <li>
                    <a
                        class="braillu-footer-link"
                        href="https://wa.me/5512981020340"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Conversar com Luciane Molina pelo WhatsApp. Abre em nova aba."
                    >
                        <span class="braillu-footer-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" focusable="false">
                                <path d="M19.05 4.94A9.88 9.88 0 0 0 12.04 2C6.58 2 2.14 6.43 2.14 11.89c0 1.74.46 3.44 1.34 4.94L2 22l5.31-1.39a9.84 9.84 0 0 0 4.73 1.2h.01c5.45 0 9.89-4.43 9.89-9.89a9.8 9.8 0 0 0-2.89-6.98ZM12.05 20.14h-.01a8.17 8.17 0 0 1-4.16-1.14l-.3-.18-3.15.82.84-3.07-.2-.31a8.18 8.18 0 1 1 6.98 3.88Zm4.49-6.13c-.25-.12-1.48-.73-1.71-.81-.23-.08-.4-.12-.57.12-.17.25-.65.81-.8.98-.15.16-.3.19-.55.06-.25-.12-1.05-.39-2-1.24-.74-.66-1.24-1.47-1.39-1.72-.15-.25-.02-.38.11-.5.11-.11.25-.29.37-.43.12-.14.16-.25.25-.41.08-.16.04-.31-.02-.43-.06-.12-.57-1.37-.78-1.88-.2-.48-.41-.42-.57-.43h-.48c-.16 0-.43.06-.65.31-.22.25-.85.83-.85 2.03s.87 2.36.99 2.52c.12.16 1.71 2.62 4.15 3.67.58.25 1.03.4 1.38.51.58.18 1.1.16 1.52.1.46-.07 1.48-.6 1.69-1.18.21-.58.21-1.08.15-1.18-.06-.1-.22-.16-.47-.28Z"/>
                            </svg>
                        </span>
                        <span>WhatsApp: +55 12 98102-0340</span>
                    </a>
                </li>
            </ul>
        </section>

        <section aria-labelledby="rodape-redes">
            <h2 id="rodape-redes">Redes sociais</h2>

            <ul class="braillu-footer-link-list">
                <li>
                    <a
                        class="braillu-footer-link"
                        href="https://facebook.com/braillu"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Acessar a página da Luciane no Facebook. Abre em nova aba."
                    >
                        <span class="braillu-footer-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" focusable="false">
                                <path d="M13.5 21v-8h2.75l.41-3H13.5V8.08c0-.87.24-1.46 1.49-1.46H16.8V3.94A24.11 24.11 0 0 0 14.42 3c-2.35 0-3.96 1.44-3.96 4.08V10H7.8v3h2.66v8h3.04Z"/>
                            </svg>
                        </span>
                        <span>Facebook</span>
                    </a>
                </li>

                <li>
                    <a
                        class="braillu-footer-link"
                        href="https://www.instagram.com/braillu"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Acessar o Instagram da Luciane. Abre em nova aba."
                    >
                        <span class="braillu-footer-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" focusable="false">
                                <path d="M7.5 2h9A5.51 5.51 0 0 1 22 7.5v9a5.51 5.51 0 0 1-5.5 5.5h-9A5.51 5.51 0 0 1 2 16.5v-9A5.51 5.51 0 0 1 7.5 2Zm0 2A3.5 3.5 0 0 0 4 7.5v9A3.5 3.5 0 0 0 7.5 20h9a3.5 3.5 0 0 0 3.5-3.5v-9A3.5 3.5 0 0 0 16.5 4h-9Zm10.25 1.5a1.25 1.25 0 1 1-1.25 1.25 1.25 1.25 0 0 1 1.25-1.25ZM12 7a5 5 0 1 1-5 5 5 5 0 0 1 5-5Zm0 2a3 3 0 1 0 3 3 3 3 0 0 0-3-3Z"/>
                            </svg>
                        </span>
                        <span>Instagram</span>
                    </a>
                </li>

                <li>
                    <a
                        class="braillu-footer-link"
                        href="https://www.linkedin.com/in/lucianemolina"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Acessar o perfil profissional de Luciane Molina no LinkedIn. Abre em nova aba."
                    >
                        <span class="braillu-footer-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" focusable="false">
                                <path d="M6.94 8.5H3.56V20h3.38V8.5ZM5.25 3A1.96 1.96 0 1 0 5.25 6.92 1.96 1.96 0 0 0 5.25 3ZM20.44 13.41c0-3.47-1.85-5.09-4.32-5.09a3.74 3.74 0 0 0-3.37 1.86V8.5H9.38V20h3.37v-5.69c0-1.5.28-2.95 2.14-2.95 1.83 0 1.86 1.71 1.86 3.05V20h3.37v-6.59Z"/>
                            </svg>
                        </span>
                        <span>LinkedIn</span>
                    </a>
                </li>
            </ul>
        </section>
    </div>

    <div class="braillu-footer-bottom">
        <div class="braillu-container">
            <p>© {{ date('Y') }} Braillu+. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>


<script src="{{ asset('js/braillu-anchor-navigation.js') }}?v=20260516-2"></script>
@stack('scripts')

</body>
</html>