<?php

get_header();

$label = get_the_title();

?>

    <main class="content">
        <?php get_sidebar(); ?>
        <section class="page-single">
            <div class="page-single__container">
                <h1 class="page-single__title"><?= $label ?></h1>

                <div class="page-single__content">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    </main>

    <?php get_template_part('template-parts/main-form'); ?>

<?php

get_footer();

?>