<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Portfolio de Simon Malpel">
    <meta name="author" content="Simon Malpel">
    <title>Simon Malpel</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/unicons.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/css/tooplate-style.css">
  </head>
  <body>
    
    <?php if (isset($_DATAS_["components.headers"]) && $_DATAS_["components.headers"]): ?>
        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="container">
                <a class="navbar-brand" href="/"><i class='uil uil-user'></i> Simon Malpel<small class="d-block text-muted">#ApplicationDeveloper #DarkTeam</small></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href="#about" class="nav-link"><span data-hover="À propos"><i class="uil uil-info mr-2"></i>À propos</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#projects" class="nav-link"><span data-hover="Mes Projets"><i class="uil uil-books mr-2"></i>Mes Projets</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#resume" class="nav-link"><span data-hover="CV"><i class='uil uil-user mr-2'></i>CV</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link"><span data-hover="Contactez Moi"><i class="uil uil-message mr-2"></i>Contactez Moi</span></a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-lg-auto">
                        <div class="ml-lg-4">
                            <div class="color-mode d-lg-flex justify-content-center align-items-center">
                                <i class="uil uil-moon mr-2"></i>Dark Mode
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    <?php endif; ?>