jQuery(document).ready(function ($) {

    // Main slider
    let mainSlidesCount = $('.main-slider__slide').length;
    $('.main-slider__arrows .slider-count-first').text(1);
    $('.main-slider__arrows .slider-count-second').text(mainSlidesCount);

    $('.main-slider__container')
        .slick({
            infinite: false,
            speed: 200,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $('.main-slider__arrows .slider-arrows .prev'),
            nextArrow: $('.main-slider__arrows .slider-arrows .next'),
        })
        .on('afterChange', function (event, slick, currentSlide) {
            $('.main-slider__arrows .slider-count-first').text(currentSlide + 1);
            $('.main-slider__arrows .slider-count-second').text(mainSlidesCount);
        })

    // News on main slider
    let newsSlidesCount = $('.news__items .news-item').length;
    $('.news__arrows .slider-count-first').text(4);
    $('.news__arrows .slider-count-second').text(newsSlidesCount);

    $('.news__items')
        .slick({
            infinite: false,
            speed: 200,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $('.news__arrows .slider-arrows-black .prev'),
            nextArrow: $('.news__arrows .slider-arrows-black .next'),
        })
        .on('afterChange', function (event, slick, currentSlide) {
            $('.news__arrows .slider-count-first').text(currentSlide + 4);
            $('.news__arrows .slider-count-second').text(newsSlidesCount);
        })


    // Tech on main slider
    let techSlidesCount = $('.tech__items .tech-item').length;
    $('.tech__arrows .slider-count-first').text(2);
    $('.tech__arrows .slider-count-second').text(techSlidesCount);

    $('.tech__items')
        .slick({
            infinite: false,
            speed: 200,
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $('.tech__arrows .slider-arrows-black .prev'),
            nextArrow: $('.tech__arrows .slider-arrows-black .next'),
        })
        .on('afterChange', function (event, slick, currentSlide) {
            $('.tech__arrows .slider-count-first').text(currentSlide + 2);
            $('.tech__arrows .slider-count-second').text(techSlidesCount);
        })

    // Tech on main slider
    let reviewsSlidesCount = $('.reviews__items .review-item').length;
    $('.reviews__arrows .slider-count-first').text(2);
    $('.reviews__arrows .slider-count-second').text(reviewsSlidesCount);

    $('.reviews__items')
        .slick({
            infinite: false,
            speed: 200,
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $('.reviews__arrows .slider-arrows-black .prev'),
            nextArrow: $('.reviews__arrows .slider-arrows-black .next'),
        })
        .on('afterChange', function (event, slick, currentSlide) {
            $('.reviews__arrows .slider-count-first').text(currentSlide + 2);
            $('.reviews__arrows .slider-count-second').text(reviewsSlidesCount);
        })








        let reviewsSlidesCountPage = $('.reviews__item .review-item').length;
    $('.reviews__arrows .slider-count-first').text(2);
    $('.reviews__arrows .slider-count-second').text(reviewsSlidesCountPage);

    $('.reviews__item')
        .slick({
            infinite: false,
            speed: 200,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $('.reviews__arrows .slider-arrows-black .prev'),
            nextArrow: $('.reviews__arrows .slider-arrows-black .next'),
        })
        .on('afterChange', function (event, slick, currentSlide) {
            $('.reviews__arrows .slider-count-first').text(currentSlide + 2);
            $('.reviews__arrows .slider-count-second').text(reviewsSlidesCountPage);
        })


        $('.tech__items-slide-two')
        .slick({
            infinite: false,
            speed: 200,
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $('.reviews__arrows .slider-arrows-black .prev'),
            nextArrow: $('.reviews__arrows .slider-arrows-black .next'),
            responsive: [
            {
            breakpoint: 991,
                settings: {
                    
                    slidesToShow: 3
                }
            },
            {
            breakpoint: 670,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
        })

});

