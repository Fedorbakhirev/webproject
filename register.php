<?php
session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Register</title>
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
    <form action="signup.php" method="post" enctype="multipart/form-data" class="form">
        <label>Логин</label>
        <input type="text" name="username" placeholder="Введите свой логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите адрес своей почты">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit" class="form-button">Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href="login.php">авторизируйтесь</a>!
        </p>
        <?php
        if ($_SESSION['message']) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>
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