<?php
/*
 * Template name: СМИ
 */

get_header();

?>

    <main class="page-content">

        <section class="main-block main-block--fon-gray">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="breadcrumb__item"><a href="/">главная</a></li>
                    <li class="breadcrumb__item"><span>СМИ О НАС</span></li>
                </ul>
    
                <div class="page-item page-item--type2">
                    <div class="page-item__content">
                            <h1 class="page-item__title">СМИ О НАС</h1>
                    </div>
                    
                   
                    
                </div>
            </div>


        </section>


        <div class="news-list">
            <? get_template_part('template-parts/content', 'reviews'); ?>
        </div>

       



    </main>



<?php

get_footer();

?>