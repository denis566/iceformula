<?php

$post_type = get_post_type();

$obj = get_post_type_object($post_type);

// get post attachments
$post_attachments = get_posts(array(
    'post_type' => $post_type,
    'order' => 'ASC',
));

//echo '<pre>';
//var_dump($post_attachments);
//echo '</pre>';
?>

<aside class="sidebar sidebar-<?= $post_type ?>">
    <div class="sidebar-menu">
        <a class="sidebar-menu__title" href="<?= get_post_type_archive_link($post_type) ?>"><?= $obj->label ?></a>
        <ul class="sidebar-items">
            <?php foreach ($post_attachments as $attachment): ?>
                <li class="sidebar-item">
                    <a href="<?= get_permalink($attachment->ID) ?>"
                       class="sidebar-item__link <?php if (is_singular($post_type) && get_the_ID() === $attachment->ID): ?>active<?php endif; ?>">
                        <p class="sidebar-item__title"><?= $attachment->post_title ?></p>
                        <img class="sidebar-item__icon"
                             src="<?= get_template_directory_uri() . '/assets/icons/slider-next-black.svg' ?>" alt="">
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</aside>
