<footer class="footer">
    <div class="footer__social social-footer">
        <div class='container'>
            <div class="social-footer__body">
                <div class="social-footer__text">Мы есть в социальных сетях</div>
                <ul class="social-footer__list">
                    <li><a href="" class="social-footer__link icon-watsApp"></a></li>
                    <li><a href="" class="social-footer__link icon-vk"></a></li>
                    <li><a href="" class="social-footer__link icon-telegram"></a></li>
                    <li><a href="" class="social-footer__link icon-inst"></a></li>

                </ul>
            </div>
        </div>
    </div>
    <div class="footer__main">
        <div class='container'>
            <div class="footer__main_body">
                <div class="footer__about">
                    <div class="footer__title">О сайте</div>
                    <div class="footer__text"><?php the_field('краткое_описание_сайта', get_option('page_on_front')) ?></div>
                </div>
                <nav class="footer__menu menu-footer" data-spollers="767.98,max">
                    <?php wp_nav_menu([
                        'theme_location'  => 'footer',
                        'container'       => null,
                        'menu_class'      => 'menu-footer__list'
                    ]); ?>
                </nav>
            </div>
        </div>
    </div>
    <div class="footer__bottom bottom-footer">
        <div class='container'>
            <div class="bottom-footer__body">
                <div class="bottom-footer__text"><span><?php the_field('текст_для_прав', get_option('page_on_front')) ?></span> <a href="<?php bloginfo('url') ?>"><?php the_field('текст_ссылки_для_главной_страницы', get_option( 'page_on_front')) ?></a></div>
            </div>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>