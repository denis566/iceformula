<?php

get_header();

$post_type = get_query_var('post_type');

$label = get_post_type_object($post_type)->label;

$header_image = '';

if ($post_type === 'tech') {
    $header_image = get_template_directory_uri() . '/assets/images/tech-archive.jpg';
}

if ($post_type === 'objects') {
    $header_image = get_template_directory_uri() . '/assets/images/objects-archive.jpg';
}

if ($post_type === 'services') {
    $header_image = get_template_directory_uri() . '/assets/images/tech-archive.jpg';
}

?>

    <main class="content">
        <?php get_sidebar(); ?>
        <section class="page-archive">
            <div class="page-archive__header"
                 style="background-image: url(<?= $header_image ?>)">
                <div class="page-archive__breadcrumbs">
                    <a href="/">Главная</a>
                    <span>-</span>
                    <a href="/page-tech.php"><?= $label ?></a>
                </div>
                <h1 class="page-archive__title"><?= $label ?></h1>
            </div>

            <div class="page-archive__container">
                <p class="page-archive__subtitle">С какими объектами мы работем</p>
                <div class="page-archive__text">
                    <p>Ледовый каток представляет собой сложную инженерную конструкцию, которая разрабатывается в
                        зависимости от её назначения.</p>

                    <p>Технические возможности нашей компании позволяют сооружать мобильные и стационарные искусственные
                        поля, организовывать крытые и открытые площадки для отдыха и профессионального спорта.</p>
        </section>
    </main>

<?php

get_footer();

?>