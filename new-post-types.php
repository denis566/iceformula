<?php

add_action('init', 'register_post_types');

function register_post_types()
{

    register_post_type('news', [
        'label' => null,
        'labels' => [
            'name' => 'Новости', // основное название для типа записи
            'singular_name' => 'Новость', // название для одной записи этого типа
            'add_new' => 'Добавить новость', // для добавления новой записи
            'add_new_item' => 'Добавление новости', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование новости', // для редактирования типа записи
            'new_item' => 'Новая новость', // текст новой записи
            'view_item' => 'Смотреть новость', // для просмотра записи этого типа.
            'search_items' => 'Искать новость', // для поиска по этим типам записи
            'not_found' => 'Не найдено новости', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено новости в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Новости', // название меню
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => null, // показывать ли в меню админки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => null,
        'menu_icon' => 'dashicons-list-view',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => true,
        'supports' => ['title', 'editor', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);

    register_post_type('tech', [
        'label' => null,
        'labels' => [
            'name' => 'Технологии', // основное название для типа записи
            'singular_name' => 'Технология', // название для одной записи этого типа
            'add_new' => 'Добавить технологию', // для добавления новой записи
            'add_new_item' => 'Добавление технологии', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование технологии', // для редактирования типа записи
            'new_item' => 'Новая технология', // текст новой записи
            'view_item' => 'Смотреть технологию', // для просмотра записи этого типа.
            'search_items' => 'Искать технологию', // для поиска по этим типам записи
            'not_found' => 'Не найдено технологии', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено технологии в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Технологии', // название меню
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => null, // показывать ли в меню админки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => null,
        'menu_icon' => 'dashicons-admin-tools',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => true,
        'supports' => ['title', 'editor', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);

    register_post_type('reviews', [
        'label' => null,
        'labels' => [
            'name' => 'Отзывы', // основное название для типа записи
            'singular_name' => 'Отзыв', // название для одной записи этого типа
            'add_new' => 'Добавить отзыв', // для добавления новой записи
            'add_new_item' => 'Добавление отзыва', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование отзыва', // для редактирования типа записи
            'new_item' => 'Новая отзыва', // текст новой записи
            'view_item' => 'Смотреть отзыв', // для просмотра записи этого типа.
            'search_items' => 'Искать отзыв', // для поиска по этим типам записи
            'not_found' => 'Не найдено отзыва', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено отзыва в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Отзывы', // название меню
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => null, // показывать ли в меню админки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => null,
        'menu_icon' => 'dashicons-welcome-view-site',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => true,
        'supports' => ['title', 'editor', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);

    register_post_type('services', [
        'label' => null,
        'labels' => [
            'name' => 'Услуги', // основное название для типа записи
            'singular_name' => 'Услуга', // название для одной записи этого типа
            'add_new' => 'Добавить услугу', // для добавления новой записи
            'add_new_item' => 'Добавление услуги', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование услуги', // для редактирования типа записи
            'new_item' => 'Новая услуга', // текст новой записи
            'view_item' => 'Смотреть услугу', // для просмотра записи этого типа.
            'search_items' => 'Искать услугу', // для поиска по этим типам записи
            'not_found' => 'Не найдено услуг', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено услуг в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Услуги', // название меню
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => null, // показывать ли в меню админки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => null,
        'menu_icon' => 'dashicons-welcome-view-site',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => true,
        'supports' => ['title', 'editor', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);

    register_post_type('objects', [
        'label' => null,
        'labels' => [
            'name' => 'Объекты', // основное название для типа записи
            'singular_name' => 'Объект', // название для одной записи этого типа
            'add_new' => 'Добавить объект', // для добавления новой записи
            'add_new_item' => 'Добавление объекта', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование объекта', // для редактирования типа записи
            'new_item' => 'Новый объект', // текст новой записи
            'view_item' => 'Смотреть объект', // для просмотра записи этого типа.
            'search_items' => 'Искать объект', // для поиска по этим типам записи
            'not_found' => 'Не найдено объекта', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено объекта в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Объекты', // название меню
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => null, // показывать ли в меню админки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => null,
        'menu_icon' => 'dashicons-welcome-view-site',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => true,
        'supports' => ['title', 'editor', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);

}
