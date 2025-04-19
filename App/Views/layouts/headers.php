<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $pageTitle ?? 'CodeSafe™'; ?></title>
    
    <meta name="description" content="Bem-vindo a Safe Code. Explore segurança e soluções digitais.">
    <meta name="keywords" content="segurança, tecnologia, infinity, web, soluções">
    <meta name="author" content="Adriano Angioletto">

    <!-- Favicon -->
    <link rel="icon" href="/Public/images/bloqueado.png" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="/Public/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- JavaScript -->
    <script defer src="/Public/js/LanguageSwitcher.js"></script>
    <script defer src="/Public/js/ToggleMenu.js"></script>
</head>
<body>
    <!-- Bandeiras para trocar idioma -->
    <div class="language-switcher">
        <a href="?lang=pt" class="language-link">
            <img src="/Public/images/flag_brasil.png" alt="Português" class="language-flag">
        </a>
        <a href="?lang=en" class="language-link">
            <img src="/Public/images/americanflag.png" alt="English" class="language-flag">
        </a>
    </div>

    <!-- Header -->
    <header>
        <nav>
            <div class="logo">
                <img class="cadeado logo-hero" src="/Public/images/logonav.png" alt="Logo Safe Code">
                <a style="color: white;">Code Safe</a>
            </div>
            <!-- Botão hamburguer -->
            <button class="menu-toggle" id="menu-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
            <!-- Menu de navegação -->
            <ul class="nav-links" id="nav-links">
                <li><a href="/"><i class="icon fas fa-home"></i> Home</a></li>
                <li><a href="/"><i class="icon fas fa-info-circle"></i> Sobre</a></li>
                <li><a href="/"><i class="icon fas fa-cogs"></i> Serviços</a></li>
                <li><a href="/App/Views/contato/contato.php"><i class="icon fas fa-envelope"></i> Contato</a></li>
            </ul>
        </nav>
        <!-- Overlay escuro -->
        <div class="overlay" id="overlay"></div>
    </header>