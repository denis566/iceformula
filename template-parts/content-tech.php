<?php

$query = new WP_Query(array(
    'post_type' => 'tech',
    'order' => 'ASC',
    'posts_per_page' => 2
));

$title = carbon_get_post_meta(get_option('page_on_front'), 'tech-title');
$description = carbon_get_post_meta(get_option('page_on_front'), 'tech-description');

?>

<section class="tech">
    <div class="container">
        <div class="tech__container">
            <div class="tech__content">
                <p class="section__title"><?php echo $title; ?></p>
                <p class="tech__description"><?php echo $description; ?></p>
            </div>

            <?php
            if ($query->have_posts()) {

                echo '<div class="tech__items">';

                while ($query->have_posts()) {
                    $query->the_post();

                    echo '<div class="tech-item" style="background-image:url(' . get_the_post_thumbnail_url() . ')">';
                    echo '<a href="' . get_the_permalink() . '" class="tech-item__link">';
                    echo '<div class="tech-item__content">';
                    echo '<div class="tech-item__content-top">';
                    echo '<h3 class="tech-item__title">' . get_the_title() . '</h3>';
                    echo '</div>';
                    echo '<p class="tech-item__text">Подробнее</p>';
                    echo '</div>';
                    echo '</a>';
                    echo '</div>';
                }

                echo '</div>';
            }
            ?>
        </div>

        <div class="tech__bottom">
            <a class="tech__link link" href="#">Наши технологии</a>

            <div class="tech__arrows">
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
