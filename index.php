<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title data-translate="title">CodeSafe™</title>
    
    <meta name="description" content="Bem-vindo a Safe Code. Explore segurança e soluções digitais." data-translate="meta-description">
    <meta name="keywords" content="segurança, tecnologia, infinity, web, soluções" data-translate="meta-keywords">
    <meta name="author" content="Adriano Angioletto" data-translate="meta-author">

    <!-- Favicon -->
    <link rel="icon" href="./Public/images/bloqueado.png" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="./Public/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- JavaScript -->
    <script defer src="./Public/js/LanguageSwitcher.js"></script>
    <script defer src="./Public/js/ToggleMenu.js"></script>
</head>

<body>
    <!-- bandeiras para alterar idioma -->

    <div class="language-switcher">
        <a href="?lang=pt" class="language-link">
            <img src="./Public/images/flag_brasil.png" alt="Português" class="language-flag">
        </a>
        <a href="?lang=en" class="language-link">
            <img src="./Public/images/americanflag.png" alt="English" class="language-flag">
        </a>
    </div>

    <!-- Header -->
    <header>
        <nav>
            <div class="logo">
                <img class="cadeado logo-hero" src="./Public/images/logonav.png" alt="Logo Safe Code">
                <a style="color: white;" data-translate="header-logo">Code Safe</a>
            </div>
            <!-- Botão hamburguer -->
            <button class="menu-toggle" id="menu-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
            <!-- Menu de navegação -->
            <ul class="nav-links" id="nav-links">
                <li><a href="/"><i class="icon fas fa-home"></i> <span data-translate="nav-home">Home</span></a></li>
                <li><a href="/"><i class="icon fas fa-info-circle"></i> <span data-translate="nav-about">Sobre</span></a></li>
                <li><a href="/"><i class="icon fas fa-cogs"></i> <span data-translate="nav-services">Serviços</span></a></li>
                <li><a href="./App/Views/contato/contato.php"><i class="icon fas fa-envelope"></i> <span data-translate="nav-contact">Contato</span></a></li>
            </ul>
        </nav>
        <!-- Overlay escuro -->
        <div class="overlay" id="overlay"></div>
    </header>

    <!-- Main Content -->
    <main>
        <section id="hero">
            <div class="container text-overlay">
                <img class='cadeado' src="./Public/images/logonav.png" alt="Logo Safe Code">
                <h1 data-translate="hero-title">Bem-vindo ao Code Safe</h1>
                <p data-translate="hero-description-1">Soluções em segurança digital que você pode confiar.</p>
                <p data-translate="hero-description-2">Para empresas inteligentes que se preocupam com sua segurança e seus investimentos.</p>
                <a href="/services" class="btn" data-translate="hero-button">Saiba Mais</a>
            </div>
        </section>

        <!-- Team Cards -->
        <section id="team">
            <div class="container">
                <h2 data-translate="team-title">Nossa Equipe</h2>
                <div class="team-cards">
                    <div class="card">
                        <img src="./Public/images/rafael_founder.jpg" alt="Adriano Angioletto">
                        <h3 data-translate="team-rafael-name">Rafael Lima</h3>
                        <p data-translate="team-rafael-info">CEO | Especialista em Segurança | Founder | <a href="https://bughunters.google.com/profile/d545f001-6c5e-4188-8629-bfaa34ee3f5e"> BugHunterGoogle</a> - <a href="https://hackerone.com/lim4"> HackerOne</a></p>
                    </div>
                    <div class="card">
                        <img src="./Public/images/adriano_angioletto.jpg" alt="Especialista Dev">
                        <h3 data-translate="team-adriano-name">Adriano Angioletto</h3>
                        <p data-translate="team-adriano-info">Software Developer | Founder </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="features">
            <div class="container">
                <h2 data-translate="features-title">Nossas Soluções</h2>
                <div class="feature-list">
                    <div class="feature">
                        <h3 data-translate="feature-consulting-title">Consultoria em Segurança</h3>
                        <p data-translate="feature-consulting-description">Ajudamos sua empresa a se proteger contra ameaças digitais.</p>
                    </div>

                    <div class="feature">
                        <h3 data-translate="feature-pentest-title">Pentest</h3>
                        <p data-translate="feature-pentest-description">Quer saber como está o seu app? Feche as portas para os invasores!</p>
                    </div>

                    <div class="feature">
                        <h3 data-translate="feature-vulnerability-title">Análise de Vulnerabilidades</h3>
                        <p data-translate="feature-vulnerability-description">Identificamos os pontos fracos no seu sistema.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p data-translate="footer-copyright">&copy; 2025 Code Safe. Todos os direitos reservados.</p>
            <ul class="social-links">
                <li><a href="#" data-translate="footer-social-1">Facebook</a></li>
                <li><a href="#" data-translate="footer-social-2">Twitter</a></li>
                <li><a href="#" data-translate="footer-social-3">Instagram</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>