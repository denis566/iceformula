<?php

$slider_container = carbon_get_post_meta(get_the_ID(), 'crb_slider');
if (!$slider_container) {
    return;
}

echo '<section class="main-slider">';
echo '<div class="main-slider__container" data-slides-count="' . count($slider_container) . '">';

foreach ($slider_container as $slide) {
    $title = $slide['title'];
    $photo = $slide['photo'];
    $link = $slide['link'];
    $linkTitle = $slide['link-title'];
    $img = wp_get_attachment_image_src($photo, 'full')[0];

    echo '<div class="main-slider__slide" style="background-image: url(' . $img . ');">';
    echo '<div class="container main-slider__content">';

    if ($title) {
        echo '<p class="main-slider__title">';
        echo $title;
        echo '</p>';
    }

    echo '<div class="main-slider__footer">';

    if ($link && $linkTitle) {
        echo '<a class="main-slider__link" href="' . $link . '">';
        echo '<p>' . $linkTitle . '</p>';
        echo '</a>';
    }
    
    echo '</div>';

    echo '</div>';
    echo '</div>';
}

echo '</div>';
echo '<div class="main-slider__arrows">

<p class="slider-count">
<span class="slider-count-first"></span>
/
<span class="slider-count-second"></span>
</p>

<div class="slider-arrows">
    <div class="prev"></div>
    <div class="next"></div>
</div>

</div>';
echo '</section>';