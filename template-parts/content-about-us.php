<?php

$about_title = carbon_get_the_post_meta('about-title');
$about_description = carbon_get_the_post_meta('about-description');
$about_link = carbon_get_the_post_meta('about-link');
$about_link_title = carbon_get_the_post_meta('about-link-title');

$achivements = carbon_get_the_post_meta('crb_about-achivements');

?>

<section class="about-us">
    <div class="container">
        <div class="about-us__container">
            <div class="about-us__content">
                <p class="section__title">
                    <?php echo $about_title; ?>
                </p>
                <p class="about-us__description">
                    <?php echo $about_description; ?>
                </p>
                <a class="about-us__link link" href="<?php echo $about_link; ?>">
                    <?php echo $about_link_title; ?>
                </a>
            </div>

            <div class="about-us-achivements__container">
                <?php
                foreach ($achivements as $achivement) {
                    $achivement_title_top = $achivement['achivement-title-top'];
                    $achivement_description_top = $achivement['achivement-description-top'];
                    $achivement_title_bottom = $achivement['achivement-title-bottom'];
                    $achivement_description_bottom = $achivement['achivement-description-bottom'];

                    echo '<div class="about-us-achivements__card">';

                    echo '<div class="about-us-achivements__item">';

                    echo '<p class="about-us-achivements__title">';
                    echo $achivement_title_top;
                    echo '</p>';

                    echo '<p class="about-us-achivements__description">';
                    echo $achivement_description_top;
                    echo '</p>';

                    echo '</div>';

                    echo '<div class="about-us-achivements__item">';

                    echo '<p class="about-us-achivements__title">';
                    echo $achivement_title_bottom;
                    echo '</p>';

                    echo '<p class="about-us-achivements__description">';
                    echo $achivement_description_bottom;
                    echo '</p>';

                    echo '</div>';

                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</section>
