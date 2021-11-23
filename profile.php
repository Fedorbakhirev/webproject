<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Main Page</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <img src="img/logo.png" alt="logo">
                <nav class="nav">
                    <ul class="navigation__list">
                        <li class="navigation__item">
                            <a href="/">Главная</a>
                        </li>
                        <?php
                        if (!$_SESSION['user']) {
                            echo '<li class="navigation__item">
                                <a href="login.php">Вход</a>
                            </li>
                            <li class="navigation__item">
                                <a href="register.php">Регистрация</a>
                            </li>';
                        } else {
                            echo '<li class="navigation__item">
                                <a href="login.php">Добро пожаловать, ' . $_SESSION['user']['username'] . '</a>
                            </li>';
                        }
                        ?>

                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main class="container">
        <div class="profile">
            <h1>Добро пожаловать, <?= $_SESSION['user']['username'] ?></h1>
            <p>Номер аккаунта: <?= $_SESSION['user']['id'] ?></p>
            <p>Ваша почта <?= $_SESSION['user']['email'] ?></p>
            <a href="logout.php" class="logout">Выход</a>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer__main">
                <div class="footer__logo-wrapper">
                    <img src="img/logo-blue.png" alt="logo">
                    <div class="footer__logo-text">
                        ONE PAGE PSD TEMPLATE
                    </div>
                </div>
                <div>
                    <ul class="contacts">
                        <li class="contacts__item">
                            <div class="contacts__item-icon">
                                <img src="img/icon-home.png" alt="icon-home">
                            </div>
                            <div class="contacts__item-text">
                                13/2 Elizabeth Street Melbourne<br>
                                VIC 3000, Australia
                            </div>
                        </li>
                        <li class="contacts__item">
                            <div class="contacts__item-icon">
                                <img src="img/icon-phone.png" alt="icon-phone">
                            </div>
                            <div class="contacts__item-text">
                                +(00)1247 457893<br>
                                mail.example@legngth.com
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer__copyright">
                Copyright ©2019 All Rights Reserved. Designer By Sabbir Hossein
            </div>
        </div>
    </footer>
</body>

</html>