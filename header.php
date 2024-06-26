<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php the_title(); ?></title>

    <?php wp_head(); ?>
</head>
<body>

<header class="header">
    <div class="container">
        <div class="nav">
            <a class="logo" href="/"></a>

            <div class="nav__menu">
                <a class="mail contact__link" href="mailto:info@iceformula.ru">
                    <p>info@iceformula.ru</p>
                    <p>Написать нам</p>
                </a>

                <a class="phone contact__link" href="tel:+74951289701">
                    <p>+7 495 128 97 01</p>
                    <p>Москва</p>
                </a>

                <a class="phone contact__link" href="tel:+78124093650">
                    <p>+7 812 409 36 50</p>
                    <p>Санкт-Петербург</p>
                </a>

                <a class="request request__link" href="#">
                    <p>Оставить заявку</p>
                </a>
            </div>

        </div>

        <div class="menu">
            <?php
            wp_nav_menu(array(
                'menu_class' => 'menu-list',
                'theme_location' => 'top',
            ));
            ?>
        </div>
    </div>
</header>