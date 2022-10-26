<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?= $title; ?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <?= Asset::css('mdb.min.css')?>
    <!-- Custom styles -->
    <?= Asset::css('style.css')?>
</head>
<body>
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <!-- Navbar brand -->
            <div class="navbar-brand">
                <a href="/">Новости</a>
            </div>
            <div>
                <ul class="navbar-nav d-flex flex-row">
                    <!-- Icons -->
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#">
                            <i class="fab fa-github"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Jumbotron -->
    <div class="p-3 text-center bg-light">
        <h1 class="mb-3 h2">Управление новостями</h1>
        <a class="btn btn-primary m-2" href="/news/update/truncate/" role="button">Удалить все</a>
        <a class="btn btn-primary m-2" href="/news/update/">Загрузить новые</a>
    </div>
    <!-- Jumbotron -->
</header>

<!--Main layout-->
<main class="my-5">
    <div class="container">
        <?= $content; ?>
    </div>
</main>
<!--Main layout-->

<!--Footer-->
<footer class="bg-light text-lg-start">
    <hr class="m-0" />
    <div class="text-center py-4 align-items-center">
        <p class="p-0 m-0">Новости предоставлены порталом <a target="_blank" href="http://www.gazeta.ru/auto/">газета.ру</a></p>
        <p class="pt-2 m-0">Шаблон сайта - <a target="_blank" href="https://mdbootstrap.com/">MDBootstrap.com</a></p>
    </div>
</footer>
<!--Footer-->
<!-- MDB -->
<?= Asset::js('mdb.min.js')?>
</body>
</html>