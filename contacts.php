<?php
/*
 * Template name: Контакты
 */

get_header();
?>

    <main class="page-content">

        <section class="main-block main-block--fon-gray">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="breadcrumb__item"><a href="/">главная</a></li>
                    <li class="breadcrumb__item"><span>О компании</span></li>
                </ul>
    
                <div class="page-item page-item--type2">
                    <div class="page-item__content">
                        
                            <h1 class="page-item__title">Контакты</h1>
                            <p class="page-item__sub-title">Связаться с нами</p>
                            <div class="el-contact page-item__contact">
                                <div class="el-contact__group">
                                    <div class="el-contact__item">
                                        <span>Адрес:</span>
                                        <p>190 020, г. Санкт-Петербург, наб.Обводного канала, д. 150, к.1, лит.А, пом.248.01</p>
                                    </div>
                                </div>
                                <div class="el-contact__group">
                                    <div class="el-contact__item">
                                        <span>СПБ:</span>
                                        <a href="#">+7 (812) 409-36-50</a>
                                    </div>
                                    <div class="el-contact__item">
                                        <span>Москва:</span>
                                        <a href="#">+7 495 128-97-01</a>
                                    </div>
                                    <div class="el-contact__item">
                                        <span>E-mail:</span>
                                        <a href="#">info@iceformula.ru</a>
                                    </div>
                                </div>
                                
                                
                            </div>
                        
                        <div class="page-item__img">
                            <img src="/wp-content/themes/iceformula/assets/icons/fon-white.svg" alt="">
                        </div>
                    </div>
                    
                   
                    
                </div>
            </div>


        </section>
        <? get_template_part('template-parts/content', 'partners'); ?>



    </main>



<?php

get_footer();

?>