<?php
/** @var string $Title */
/** @var string $Content */

$this->Title = "Список вікі";
if (empty($Title))
    $Title = '';
if (empty($Content))
    $Content = '';

use models\Users;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title><?= $Title ?></title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">PERFECTRUN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/games/index">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <div class="header-global">
        <div class="logo-header">
            <div style="display: flex;align-items: center;justify-content: center;height: 100%">PERFECTRUN</div>
        </div>
        <div class="link-container">
            <a class="link-header" href="/perfectrun">Main Page </a>
            <a class="link-header" href="/games">Games </a>
            <a class="link-header" href="/users/profile">Profile </a>
            <a class="link-header" href="/favorites">Favorites </a>
            <a class="link-header" href="/categories">Categories</a>
            <a class="link-header" href="/community">Community</a>
            <?php
            if (Users::IsUserLogged())
                if (Users::UserName()['login'] == 'admin') :
                    ?>
                    <a class="link-header" href="/admin/index">admin</a>
                <?php endif; ?>
        </div>
        <?php if (!Users::IsUserLogged()) : ?>
            <a class="sign-in" href="/users/login">
                <div class="sign">
                    LOG IN
                </div>
            </a>
            <a class="sign-up" href="/users/register">
                <div class="sign">
                    REGISTER
                </div>
            </a>
        <?php else : ?>
            <a class="sign-up" href="/users/logout">
                <div class="sign">
                    Log Out
                </div>
            </a>
        <?php endif; ?>
    </div>
</header>
<main>
    <div class="Page">
        <?= $Content ?>
    </div>
</main>
<footer>
    <div class="footer">

        <div class="info">
            <p>PerfectRuns</p>
            <a class="footer-link" href="">link</a>
            <a class="footer-link" href="">link</a>
        </div>
        <div class="info">
            <p>PerfectRuns</p>
            <a class="footer-link" href="">link</a>
            <a class="footer-link" href="">link</a>
        </div>
        <div class="info">
            <p>PerfectRuns</p>
            <a class="footer-link" href="">link</a>
            <a class="footer-link" href="">link</a>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>