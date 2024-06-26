<?php

$site_address = carbon_get_theme_option('crb_site_address');
$site_phone_msk = carbon_get_theme_option('crb_site_phone_msk');
$site_phone_spb = carbon_get_theme_option('crb_site_phone_spb');
$site_email = carbon_get_theme_option('crb_site_email');

?>

<footer class="footer">

    <div class="container">
        <div class="footer__mob">
            <a class="footer__logo" href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.svg" alt="">
            </a>
            <a class="footer__show-form">Связаться с нами</a>
        </div>

        <div class="footer__container">
            <div class="footer-column">
                <div class="footer-links__container">
                    <a class="footer__link" href="#">Пользовательское соглашение</a>

                    <a class="footer__link" href="#">Политика конфиденциальности</a>

                    <p class="footer__copyright">© 1990 - 2024 Формула Льда <br> Все права защищены</p>

                    <p class="footer__link">Разработано в <a href="https://roicontext.com" target="_blank"
                                                             style="text-decoration: underline">Roicontext</a></p>
                </div>

                <a class="footer__logo footer__logo--pc" href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.svg" alt="">
                </a>
            </div>

            <div class="footer-column footer-center-column">
                <a class="footer__address" href="/"><?php echo $site_address; ?></a>

                <a class="footer__email" href="mailto:<?php echo $site_email; ?>">
                    <?php echo $site_email; ?>
                    <span class="footer__email-label">Написать нам</span>
                </a>

                <?php
                wp_nav_menu('footer-menu');
                ?>
            </div>

            <div class="footer-column">
                <div class="footer__phone-container">
                    <a class="footer__phone" href="tel:<?php echo $site_phone_msk; ?>">
                        <?php echo $site_phone_msk; ?>
                        <span class="footer__phone-label">Москва</span>
                    </a>
                    <a class="footer__phone" href="tel:<?php echo $site_phone_spb; ?>">
                        <?php echo $site_phone_spb; ?>
                        <span class="footer__phone-label">Санкт-Петербург</span>
                    </a>
                </div>
                <a class="footer__link-request link" href="#">Оставить заявку</a>
            </div>

        </div>
    </div>

</footer>


<?php wp_footer(); ?>
</body>
</html>