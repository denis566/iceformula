<?php

$query = new WP_Query ([
    'post_type' => 'news',
    'order' => 'ASC',
]);

?>

<section class="news">
    <div class="container">
        <p class="section__title">Последние новости</p>
        <?php
        if ($query->have_posts()) {

            echo '<div class="news__items">';

            while ($query->have_posts()) {
                $query->the_post();
                $image = wp_get_attachment_image_src(carbon_get_the_post_meta('news-photo'), 'full')[0];

                echo '<div class="news-item" style="background-image:url(' . $image . ')">';
                echo '<a href="' . get_the_permalink() . '" class="news-item__link">';
                echo '<div class="news-item__content">';
                echo '<div class="news-item__content-top">';
                echo '<p class="news-item__date">' . get_the_date() . '</p>';
                echo '<h3 class="news-item__title">' . get_the_title() . '</h3>';
                echo '</div>';
                echo '<p class="news-item__text">Читать статью</p>';
                echo '</div>';
                echo '</a>';
                echo '</div>';

            }

            echo '</div>';
        }
        ?>

        <div class="news-bottom">
            <a class="news__external-link link" href="#">СМИ о нас</a>
            <a class="news__subscribe-link" href="#">Подписаться на новости</a>
            <div class="news__arrows">
                <div class="slider-count">
                    <span class="slider-count-first"></span>
                    /
                    <span class="slider-count-second"></span>
                </div>
                <div class="slider-arrows-black">
                    <div class="prev"></div>
                    <div class="next"></div>
                </div>
            </div>
        </div>
    </div>
</section>
