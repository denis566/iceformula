<?php

?>

<section class="map">
    <div class="container">
        <div class="map__container">

            <div class="map-info">
                <p class="map-info__title">География обьектов</p>
                <p class="map-info__text">Наши обьекты можно посмотреть в любом уголке России от Камчатки до Чукотки</p>
                <a class="map-info__link link" href="#">Все обьекты</a>
            </div>

            <div class="map-image">
                <img class="map-image__image"
                     src="<?php echo get_template_directory_uri(); ?>/assets/images/main-map.svg">
            </div>

            <div id="map-modal">
                <div class="map-modal__close"></div>
                <img class="map-modal__image" src="">
                <div class="map-modal__content">
                    <p class="map-modal__title"></p>
                    <p class="map-modal__location"></p>
                    <p class="map-modal__date"></p>
                    <p class="map-modal__description"></p>
                </div>
                <a class="map-modal__link" href="">Подробнее</a>
            </div>

        </div>
    </div>
</section>