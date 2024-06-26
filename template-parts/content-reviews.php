<?php

$query = new WP_Query ([
    'post_type' => 'reviews',
    'order' => 'ASC',
]);

?>

<section class="news">
    <div class="container">
        <p class="section__title">Отзывы</p>
        <?php
        if ($query->have_posts()) {

            echo '<div class="reviews__items">';

            while ($query->have_posts()) {
                $query->the_post();
                $image = get_the_post_thumbnail_url();

                echo '<div class="review-item">';
                echo '<a href="' . get_the_permalink() . '" class="review-item__link">';
                echo '<div class="review-item__container">';
                echo '<div class="review-item__image" style="background-image:url(' . $image . ')">';
                echo '</div>';
                echo '<div class="review-item__content">';
                echo '<div class="review-item__content-top">';
                echo '<p class="review-item__date">' . get_the_date() . '</p>';
                echo '<p class="review-item__title">' . get_the_title() . '</p>';
                echo '<p class="review-item__text">' . get_the_excerpt() . '</p>';
                echo '</div>';
                echo '<p class="review-item__button">Читать отзыв</p>';
                echo '</div>';
                echo '</div>';
                echo '</a>';
                echo '</div>';

            }

            echo '</div>';
        }
        ?>

        <div class="review-bottom">
            <a class="reviews__external-link link" href="#">Читать все отзывы</a>
            <div class="reviews__arrows">
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
