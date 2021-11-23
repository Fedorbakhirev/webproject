<?php
    session_start();
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
                            }
                            else{
                                echo '<li class="navigation__item">
                                <a href="login.php">Добро пожаловать, '. $_SESSION['user']['username'] .'</a>
                            </li>';
                            }
                        ?>

                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main class="main">
        <section class="hero">
            <div class="container">
                <div class="hero__inner">
                    <h1 class="heading-1 hero_title">Photography Web templates</h1>
                    <a href="#" class="btn-secondary">Read more</a>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="about">
                <div class="about__image">
                    <img src="img/about-image.png" alt="My photo">
                </div>
                <div class="about__content">
                    <h2 class="heading-2">About Us</h2>
                    <div class="about__text">
                        <p class="paragraph">
                            This is Photoshop's version of Lorem Ipsum. Proin gravida nibg vel velit auctor aliquet.
                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit
                        </p>
                        <p class="paragraph">
                            Consequat ipsum, nec sagittis sem nibg id elit. Duis sed odio sit amet nibh vulputat
                            cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt
                            auctornare odio. Sed non mauris vitae erat
                        </p>
                    </div>
                    <a href="" class="btn-primary">Read more</a>
                </div>
            </div>
        </section>
        <section class="portfolio">
            <div class="container">
                <div class="portfolio__head">
                    <h2 class="heading-2 portfolio__title">Portfolio</h2>
                    <div class="portfolio__paragraph">
                        <p class="portfolio_paragraph paragraph">This is Photoshop's version of Lorem Ipsum. Proin
                            gravida nibg vel velit
                            auctor aliquet.
                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit</p>
                    </div>
                </div>
                <div class="gallery">
                    <ul class="gallery__list clearfix">
                        <li class="gallery__item">
                            <img src="img/gallery-1.png" alt="gallery__photo" class="gallery__img">
                        </li>
                        <li class="gallery__item">
                            <img src="img/gallery-2.png" alt="gallery__photo" class="gallery__img">
                        </li>
                        <li class="gallery__item">
                            <img src="img/gallery-3.png" alt="gallery__photo" class="gallery__img">
                        </li>
                        <li class="gallery__item">
                            <img src="img/gallery-4.png" alt="gallery__photo" class="gallery__img">
                        </li>
                    </ul>
                </div>
            </div>
        </section>
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