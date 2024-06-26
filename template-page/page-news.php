<?php

get_header();

$label = get_the_title();

?>

    <main class="page-content page-content--fon-gray">
        <?php // get_sidebar(); ?>
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb__item"><a href="/">главная</a></li>
                <li class="breadcrumb__item"><span>СМИ О НАС</span></li>
            </ul>

            <section class="page-item">
                <div class="page-item__content">
                    <div class="page-item__left">
                        <h1 class="page-item__title">СМИ О НАС</h1>
                    </div>
                  
                </div>
                
            </section>

            <?php

            $query = new WP_Query ([
                'post_type' => 'reviews',
                'order' => 'ASC',
            ]);

            ?>

            
            <?php
        if ($query->have_posts()) {

            echo '<div class="news-list">';

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
        <div class="pegination">
            <div class="pegination__page">
                <div class="pegination__current">01</div>
                <div class="pegination__count"><span>/</span> 10</div>
            </div>
            <div class="pegination__nav">
                <div class="pegination__arrows pegination__arrows--prev pegination__arrows--disabled"> </div>
                <a href="#" class="pegination__arrows pegination__arrows--next"> </a>
            </div>

        </div>
            
        </div>

     

          

         



      
    </main>

    <?php // get_template_part('template-parts/main-form'); ?>

<?php

get_footer();

?>