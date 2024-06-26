<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options' ) )
        ->add_fields( array(
            Field::make( 'textarea', 'crb_site_address', 'Адрес' ),
            Field::make( 'text', 'crb_site_phone_msk', 'Телефон (МСК)' ),
            Field::make( 'text', 'crb_site_phone_spb', 'Телефон (СПБ)' ),
            Field::make( 'text', 'crb_site_email', 'Email' ),
        ) );
}

add_action('carbon_fields_register_fields', 'crb_attach_mainpage_fields');
function crb_attach_mainpage_fields()
{
    Container::make('post_meta', 'Слайдер')
        ->where('post_id', '=', get_option('page_on_front'))
        ->add_fields(array(
            Field::make('complex', 'crb_slider', __(''))
                ->add_fields(array(
                    Field::make('text', 'title', __('Текст на слайде')),
                    Field::make('text', 'link', __('Ссылка слайда')),
                    Field::make('text', 'link-title', __('Текст ссылки')),
                    Field::make('image', 'photo', __('Изображение для слайда')),
                ))
                ->set_layout('tabbed-horizontal')
        ));

    Container::make('post_meta', 'О нас')
        ->where('post_id', '=', get_option('page_on_front'))
        ->add_fields(array(
            Field::make('text', 'about-title', __('Заголовок')),
            Field::make('text', 'about-description', __('Описание')),
            Field::make('text', 'about-link', __('Ссылка')),
            Field::make('text', 'about-link-title', __('Текст ссылки')),
            Field::make('complex', 'crb_about-achivements', __('Достижения'))
                ->add_fields(array(
                    Field::make('text', 'achivement-title-top', __('Заголовок верхнего достижения')),
                    Field::make('text', 'achivement-description-top', __('Описание верхнего достижения')),
                    Field::make('text', 'achivement-title-bottom', __('Заголовок нижнего достижения')),
                    Field::make('text', 'achivement-description-bottom', __('Описание нижнего достижения')),
                ))
                ->set_max(2)
                ->set_layout('tabbed-horizontal')));

    Container::make('post_meta', 'Технологии')
        ->where('post_id', '=', get_option('page_on_front'))
        ->add_fields(array(
            Field::make('text', 'tech-title', __('Заголовок')),
            Field::make('text', 'tech-description', __('Описание')),
        ));
}

add_action('carbon_fields_register_fields', 'crb_attach_news_fields');
function crb_attach_news_fields()
{
    Container::make('post_meta', 'Превью новости')
        ->where('post_type', '=', 'news')
        ->add_fields(array(
            Field::make('image', 'news-photo', __('Изображение')),
            Field::make('textarea', 'news-description', __('Описание новости')),
        ));
}