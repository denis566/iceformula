<?php

get_header();

$label = get_the_title();

?>

    <main class="page-content">
        <?php // get_sidebar(); ?>
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb__item"><a href="/">главная</a></li>
                <li class="breadcrumb__item"><span>О компании</span></li>
            </ul>
            <section class="main-block">
            <div class="page-item">
                <div class="page-item__content">
                    <div class="page-item__left">
                        <h1 class="page-item__title">компания</h1>
                        <p class="page-item__sub-title">ООО «Формула Льда» зарекомендовала себя как профессиональная компания</p>
                    </div>
                    <div class="page-item__right">

                        <p>Мы специалируемся на разработке надёжных,<br> экономически выгодных технических решений.</p>
                        <p>Наш опыт сложился из огромного числа частных, корпоративных,<br> региональных и федеральных заказов, которые компания с успехом реализовывает по всей стране.</p>
                        <p>Мы строим современные, многофункциональные и профильные, искусственные ледовые катки, участвуем в разработке крупных спортивных комплексов, предлагаем универсальные решения для широкого круга заказчиков.</p>
                    </div>
                </div>
                
               
                
            </div>
            </section>
        </div>

        <section class="tech tech--type2 tech--fon-gray">
                <div class="container">
                    <div class="tech__container tech__container--btn">
                        <div class="tech__content">
                            <h2 class="section__title">ПРОЕКТНАЯ ДЕЯТЕЛЬНОСТЬ</h2>
                            <div class="tech__text">
                                <p>Разработка проектов – одно из ключевых направлений нашей деятельности. В компании трудятся высококлассные специалисты, способные грамотно и рационально рассчитать архитектурную и техническую планировку будущего объекта.</p>
                                <p> Если вы хотите построить ледовый каток, но не знаете с чего начать, ознакомьтесь с авторскими проектами, созданными в стенахООО «Формула Льда».</p>
                                <p>Наши идеи уже нашли воплощение, став отправной точкой для успешного развития и расширения бизнес-структур, помогают реализовывать общественные и коммерческие задачи.</p>
                            </div>
                        </div>
                        <?php

                        $query = new WP_Query ([
                            'post_type' => 'news',
                            'order' => 'ASC',
                        ]);

                        ?>

                <?php
                        if ($query->have_posts()) {

                            echo '<div class="tech__items-slide-two">';

                            while ($query->have_posts()) {
                                $query->the_post();
                                $image = wp_get_attachment_image_src(carbon_get_the_post_meta('news-photo'), 'full')[0];

                                echo '<div class="news-item" style="background-image:url(' . $image . ')">';
                                echo '<a href="' . get_the_permalink() . '" class="news-item__link">';
                                echo '<div class="news-item__content">';
                                echo '<div class="news-item__content-top">';
                                echo '<p class="news-item__date">' . get_the_date() . '</p>';
                                echo '<h3 class="news-item__title">' . get_the_title() . '</h3>';
                                echo '</div>';
                                echo '<p class="news-item__text">Читать статью</p>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';

                            }

                            echo '</div>';
                        }
                        ?>

            
                        
                        <div class="tech__bottom">
                            <a class="tech__link link" href="#">Смотреть авторские проекты</a>
                
                            <div class="tech__arrows">
                                <div class="slider-count">
                                    <span class="slider-count-first"></span>
                                    /
                                    <span class="slider-count-second"></span>
                                </div>
                                <div class="slider-arrows-black">
                                    <div class="prev"></div>
                                    <div class="next"></div>
                                </div>
                            </div>
                        </div>     
                    
                    </div>
            
                    
                </div>
            </section>

            <section class="tech tech--type2">
                <div class="container">
                    <div class="tech__container">
                        <div class="tech__content">
                            <h2 class="section__title">СТРОИТЕЛЬСТВО ЛЕДОВЫХ КАТКОВ</h2>
                            <div class="tech__text">
                                <p>Благодаря нашим техническим решениям использовать ледовые площадки можно не только зимой, но и летом. </p>
                                <p>Инновационные технологии, которыми активно пользуется ООО «Формула Льда», создавать искусственный лёд даже в регионахс тёплым климатом. </p>
                                <p>Открытые площадки, смонтированные на базе айс-матов и системы ICE GRID®, рассчитаны на круглогодичную эксплуатацию. Для их возведения и обслуживания не требуется больших инвестиций,  при этом затраты окупаются в течение одного года</p>
                            </div>
                        </div>
            
                        <div class="tech__items-slide-two">
                            <div class="tech-item" style="background-image:url(https://iceformula.roicontext.space/wp-content/uploads/2024/05/Group-1.jpg)"><a href="https://iceformula.roicontext.space/tech/%d1%82%d0%b5%d1%85%d0%bd%d0%be%d0%bb%d0%be%d0%b3%d0%b8%d1%8f-1/" class="tech-item__link"><div class="tech-item__content"><div class="tech-item__content-top"><h3 class="tech-item__title">Технология 1</h3></div><p class="tech-item__text">Подробнее</p></div></a></div>
                            <div class="tech-item" style="background-image:url(https://iceformula.roicontext.space/wp-content/uploads/2024/05/Group-1.jpg)"><a href="https://iceformula.roicontext.space/tech/%d1%82%d0%b5%d1%85%d0%bd%d0%be%d0%bb%d0%be%d0%b3%d0%b8%d1%8f-1/" class="tech-item__link"><div class="tech-item__content"><div class="tech-item__content-top"><h3 class="tech-item__title">Технология 1</h3></div><p class="tech-item__text">Подробнее</p></div></a></div>
                            <div class="tech-item" style="background-image:url(https://iceformula.roicontext.space/wp-content/uploads/2024/05/Group-1.jpg)"><a href="https://iceformula.roicontext.space/tech/%d1%82%d0%b5%d1%85%d0%bd%d0%be%d0%bb%d0%be%d0%b3%d0%b8%d1%8f-1/" class="tech-item__link"><div class="tech-item__content"><div class="tech-item__content-top"><h3 class="tech-item__title">Технология 1</h3></div><p class="tech-item__text">Подробнее</p></div></a></div>
                            
                            <div class="tech-item" style="background-image:url(https://iceformula.roicontext.space/wp-content/uploads/2024/05/Group-1.jpg)"><a href="https://iceformula.roicontext.space/tech/%d1%82%d0%b5%d1%85%d0%bd%d0%be%d0%bb%d0%be%d0%b3%d0%b8%d1%8f-1/" class="tech-item__link"><div class="tech-item__content"><div class="tech-item__content-top"><h3 class="tech-item__title">Технология 1</h3></div><p class="tech-item__text">Подробнее</p></div></a></div>
                            <div class="tech-item" style="background-image:url(https://iceformula.roicontext.space/wp-content/uploads/2024/05/Group-1.jpg)"><a href="https://iceformula.roicontext.space/tech/%d1%82%d0%b5%d1%85%d0%bd%d0%be%d0%bb%d0%be%d0%b3%d0%b8%d1%8f-1/" class="tech-item__link"><div class="tech-item__content"><div class="tech-item__content-top"><h3 class="tech-item__title">Технология 1</h3></div><p class="tech-item__text">Подробнее</p></div></a></div>
                            
            
                    
                </div>
            </section>

            <section class="tech tech--type2 tech--padding2 tech--fon-gray">
                <div class="container">
                    <div class="tech__container">
                        <div class="tech__content">
                            <h2 class="section__title">Общественная жизнь</h2>
                            <div class="tech__text">
                                <p>Мы активно участвуем в муниципальных и федеральных программах по развитию спорта, популяризации хоккея и фигурного катания, поэтому постоянно работаем над повышением профессионального уровня, модернизацией технических ресурсов.</p>
                                <p>Масштабные объекты, построенные нашей компанией, входят в число ведущих отечественных спортивных центров.</p>
                           
                                    
                           
                           
                           
                                </div>
                        </div>
            
                        <div class="reviews__item reviews__item--news">
                            <div class="review-item">
                                <a href="https://iceformula.roicontext.space/reviews/%d0%be%d1%82%d0%b7%d1%8b%d0%b2-1/" class="review-item__link">
                                    <div class="review-item__container">
                                        <div class="review-item__image" style="background-image:url(https://iceformula.roicontext.space/wp-content/uploads/2024/05/Mask-group.jpg)"></div>
                                        <div class="review-item__content">
                                            <div class="review-item__content-top">
                                                <p class="review-item__date">07.05.2024</p>
                                                <p class="review-item__title">Газпром Арена</p>
                                                <p class="review-item__text">«Добрый день! Хотелось бы поблагодарить строителей и всех кто принимал участие в строительстве ледовой арены в нашем городе…</p>
                                            </div>
                                            <p class="review-item__button">Читать отзыв</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="review-item">
                                <a href="https://iceformula.roicontext.space/reviews/%d0%be%d1%82%d0%b7%d1%8b%d0%b2-2/" class="review-item__link">
                                    <div class="review-item__container">
                                        <div class="review-item__image" style="background-image:url(https://iceformula.roicontext.space/wp-content/uploads/2024/05/Mask-group.jpg)"></div>
                                        <div class="review-item__content">
                                            <div class="review-item__content-top">
                                                <p class="review-item__date">07.05.2024</p>
                                                <p class="review-item__title">Газпром Арена 2</p>
                                                <p class="review-item__text">«Добрый день! Хотелось бы поблагодарить строителей и всех кто принимал участие в строительстве ледовой арены в нашем городе…</p>
                                            </div><p class="review-item__button">Читать отзыв</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="review-item">
                                <a href="https://iceformula.roicontext.space/reviews/%d0%be%d1%82%d0%b7%d1%8b%d0%b2-3/" class="review-item__link">
                                    <div class="review-item__container">
                                        <div class="review-item__image" style="background-image:url(https://iceformula.roicontext.space/wp-content/uploads/2024/05/Mask-group.jpg)"></div>
                                        <div class="review-item__content">
                                            <div class="review-item__content-top">
                                                <p class="review-item__date">07.05.2024</p>
                                                <p class="review-item__title">Отзыв 3</p>
                                                <p class="review-item__text">Тестовый отзыв 3</p>
                                            </div><p class="review-item__button">Читать отзыв</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="review-item">
                                <a href="https://iceformula.roicontext.space/reviews/%d0%be%d1%82%d0%b7%d1%8b%d0%b2-4/" class="review-item__link">
                                    <div class="review-item__container">
                                        <div class="review-item__image" style="background-image:url(https://iceformula.roicontext.space/wp-content/uploads/2024/05/Mask-group.jpg)"></div>
                                        <div class="review-item__content">
                                            <div class="review-item__content-top">
                                                <p class="review-item__date">07.05.2024</p>
                                                <p class="review-item__title">Отзыв 4</p>
                                                <p class="review-item__text">Тестовый отзыв 4</p>
                                            </div><p class="review-item__button">Читать отзыв</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="review-item">
                                <a href="https://iceformula.roicontext.space/reviews/%d0%be%d1%82%d0%b7%d1%8b%d0%b2-5/" class="review-item__link">
                                    <div class="review-item__container">
                                        <div class="review-item__image" style="background-image:url(https://iceformula.roicontext.space/wp-content/uploads/2024/05/Mask-group.jpg)"></div>
                                        <div class="review-item__content">
                                            <div class="review-item__content-top">
                                                <p class="review-item__date">07.05.2024</p>
                                                <p class="review-item__title">Отзыв 5</p>
                                                <p class="review-item__text">Тестовый отзыв 5</p>
                                            </div><p class="review-item__button">Читать отзыв</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
            
                    
                </div>
            </section>



       <section class="page-text-full">
            <div class="container">
                <div class="page-text-full__text">
                    <h2>ПРОДАЖА ЛЕДОВЫХ КАТКОВ</h2>
                    <div class="page-text-full__description">
                        <p>
                        Коммерческий статус объектов, вблизи или внутри которых расположены ледовые площадки, значительно повышается. <br> Чтобы поднять привлекательность зоны отдыха для туристов и горожан, увеличить поток покупателей, достаточно установить возле развлекательного или торгового комплекса открытый искусственный каток.</p>
    
                        <p>С нашей помощью вы сможете открыть специализированную спортивную школу, оснастить учебные и внешкольные учреждения самым современным оборудованием.</p>
    
                            <p> Каждый новый проект – это перспективное открытие своего бизнеса, эффективная реализация общественной политики.  </p>
                            <p>
                                Мы стремимся к созданию уникальных проектов, которые интересны и полезны людям любого социального и профессионального статуса.
    
                            </p>
                    </div>
                </div>
                <div class="page-text-full__img">
                    <img src="<?=get_template_directory() ?>/assets/icons/fon.svg" alt="">
                </div>
                
            </div>
       </section>
    </main>

    <?php // get_template_part('template-parts/main-form'); ?>

<?php

get_footer();

?>