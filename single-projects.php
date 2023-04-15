<?php get_header('project') ?>
<div class="main">
    <div class="main__article article-main">
        <div class='article-main__container container'>
            <div class="article-main__body">
                <div class="bred-crumbs">
                    <ul class="bred-crumbs__list">
                        <li class="icon-arrowBredCrumbs"><a href="/#projects" class="bred-crumbs__link">Проекты</a></li>
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
                <article class="article">
                    <h1 class="article__title title"><?php the_title(); ?>
                    </h1>
                    <div class="article__labels">
                        <div class="article__label"><svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_162_2)">
                                    <path d="M15.2339 8C15.2339 11.68 12.1391 14.6667 8.32588 14.6667C4.51264 14.6667 1.41785 11.68 1.41785 8C1.41785 4.32 4.51264 1.33333 8.32588 1.33333C12.1391 1.33333 15.2339 4.32 15.2339 8Z" stroke="#797979" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.8888 10.12L8.7473 8.88667C8.37427 8.67333 8.07031 8.16 8.07031 7.74V5.00667" stroke="#797979" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_162_2">
                                        <rect width="16.5793" height="16" fill="white" transform="translate(0.0362549)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <?php the_time('j F Y'); ?></div>
                        <div class="article__label"> <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00992 7.99999C9.92599 7.99999 10.8045 7.64881 11.4523 7.02368C12.1 6.39856 12.4639 5.55072 12.4639 4.66666C12.4639 3.78261 12.1 2.93476 11.4523 2.30964C10.8045 1.68452 9.92599 1.33333 9.00992 1.33333C8.09386 1.33333 7.21532 1.68452 6.56757 2.30964C5.91981 2.93476 5.55591 3.78261 5.55591 4.66666C5.55591 5.55072 5.91981 6.39856 6.56757 7.02368C7.21532 7.64881 8.09386 7.99999 9.00992 7.99999V7.99999Z" stroke="#797979" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.9907 10.4933L11.5452 12.8533C11.4485 12.9467 11.3587 13.12 11.338 13.2467L11.2067 14.1467C11.1584 14.4733 11.3933 14.7 11.7318 14.6533L12.6643 14.5267C12.7956 14.5067 12.9821 14.42 13.0719 14.3267L15.5174 11.9667C15.9387 11.56 16.1391 11.0867 15.5174 10.4867C14.9025 9.89333 14.4121 10.0867 13.9907 10.4933V10.4933Z" stroke="#797979" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.6383 10.8333C13.8455 11.5533 14.4258 12.1133 15.1719 12.3133" stroke="#797979" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.07593 14.6667C3.07593 12.0867 5.73552 10 9.00993 10C9.72836 10 10.4192 10.1 11.0616 10.2867" stroke="#797979" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Автор: <?php the_author(); ?></div>
                    </div>
                    <?php the_field('вступительная_часть'); ?>
                    <div data-spollers class='article__spoller spoller-article'>
                        <button data-spoller tabindex='-1' type='button' class='spoller-article__title active icon-arrowSlider'>Содержание</button>
                        <div class='spoller-article__content'>
                            <?php the_field('содержание'); ?>
                        </div>
                    </div>
                    <?php the_content(); ?>

                </article>
            </div>
            <aside class="article-main__sidebar sidebar">
                <div class="sidebar__body">
                    <!-- <?php dynamic_sidebar('right_sidebar'); ?> -->
                    <h3 class="sidebar__title"><?php the_field('заголовок_для_похожихпопулярных_проектовстатей') ?></h3>
                    <div class="sidebar__articles articles-sidebar">
                        <?php
                        $id_article_1 = get_field('статья_1');
                        $id_article_2 = get_field('статья_2');
                        $id_article_3 = get_field('статья_3');
                        $id_article_4 = get_field('статья_4');
                        ?>
                        <?php if ($id_article_1) { ?>
                            <a href="<?php the_permalink($id_article_1); ?>" class="articles-sidebar__item">
                                <div class="articles-sidebar__image">
                                    <?php echo get_the_post_thumbnail($id_article_1); ?>
                                </div>
                                <div class="articles-sidebar__content">
                                    <h4 class="articles-sidebar__title"><?php title_limit(get_the_title($id_article_1), 35, '...'); ?></h4>
                                    <div class="articles-sidebar__text">
                                        <?php title_limit(get_the_excerpt($id_article_1), 70, '...'); ?>
                                    </div>
                                </div>
                            </a>
                        <?php } ?>
                        <?php if ($id_article_2) { ?>
                            <a href="<?php the_permalink($id_article_2); ?>" class="articles-sidebar__item">
                                <div class="articles-sidebar__image">
                                    <?php echo get_the_post_thumbnail($id_article_2); ?>
                                </div>
                                <div class="articles-sidebar__content">
                                    <h4 class="articles-sidebar__title"><?php title_limit(get_the_title($id_article_2), 35, '...'); ?></h4>
                                    <div class="articles-sidebar__text">
                                        <?php title_limit(get_the_excerpt($id_article_2), 70, '...'); ?>
                                    </div>
                                </div>
                            </a>
                        <?php } ?>
                        <?php if ($id_article_3) { ?>
                            <a href="<?php the_permalink($id_article_3); ?>" class="articles-sidebar__item">
                                <div class="articles-sidebar__image">
                                    <?php echo get_the_post_thumbnail($id_article_3); ?>
                                </div>
                                <div class="articles-sidebar__content">
                                    <h4 class="articles-sidebar__title"><?php title_limit(get_the_title($id_article_3), 35, '...'); ?></h4>
                                    <div class="articles-sidebar__text">
                                        <?php title_limit(get_the_excerpt($id_article_3), 70, '...'); ?>
                                    </div>
                                </div>
                            </a>
                        <?php } ?>
                        <?php if ($id_article_4) { ?>
                            <a href="<?php the_permalink($id_article_4); ?>" class="articles-sidebar__item">
                                <div class="articles-sidebar__image">
                                    <?php echo get_the_post_thumbnail($id_article_4); ?>
                                </div>
                                <div class="articles-sidebar__content">
                                    <h4 class="articles-sidebar__title"><?php title_limit(get_the_title($id_article_4), 35, '...'); ?></h4>
                                    <div class="articles-sidebar__text">
                                        <?php title_limit(get_the_excerpt($id_article_4), 70, '...'); ?>
                                    </div>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                    <!--                 <h3 class="sidebar__title">Наши авторы</h3>
                <div class="sidebar__authors authors-sidebar">
                    <a href="" class="authors-sidebar__item">
                        <div class="authors-sidebar__image">
                            <picture>
                                <source srcset='<?php bloginfo('template_url'); ?>/assets/img/sidebar/athors/01.webp' type='image/webp'>
                                <img src='<?php bloginfo('template_url'); ?>/assets/img/sidebar/athors/01.jpg' alt='author'>
                            </picture>
                        </div>
                        <div class="authors-sidebar__name">К. Полушина</div>
                    </a>
                    <a href="" class="authors-sidebar__item">
                        <div class="authors-sidebar__image">
                            <picture>
                                <source srcset='<?php bloginfo('template_url'); ?>/assets/img/sidebar/athors/02.webp' type='image/webp'>
                                <img src='<?php bloginfo('template_url'); ?>/assets/img/sidebar/athors/02.jpg' alt='author'>
                            </picture>
                        </div>
                        <div class="authors-sidebar__name">А.К Сапунов</div>
                    </a>
                    <a href="" class="authors-sidebar__item">
                        <div class="authors-sidebar__image">
                            <picture>
                                <source srcset='<?php bloginfo('template_url'); ?>/assets/img/sidebar/athors/01.webp' type='image/webp'>
                                <img src='<?php bloginfo('template_url'); ?>/assets/img/sidebar/athors/01.jpg' alt='author'>
                            </picture>
                        </div>
                        <div class="authors-sidebar__name">К. Полушина</div>
                    </a>
                    <a href="" class="authors-sidebar__item">
                        <div class="authors-sidebar__image">
                            <picture>
                                <source srcset='<?php bloginfo('template_url'); ?>/assets/img/sidebar/athors/02.webp' type='image/webp'>
                                <img src='<?php bloginfo('template_url'); ?>/assets/img/sidebar/athors/02.jpg' alt='author'>
                            </picture>
                        </div>
                        <div class="authors-sidebar__name">А.К Сапунов</div>
                    </a>
                </div> -->
                </div>
            </aside>
        </div>
    </div>
    <div class="main__comments">
        <div class='main__container container'>
            <script type="text/javascript">
                VK.init({
                    apiId: '51588161',
                    onlyWidgets: true
                });
            </script>
            <div id="vk_comments"></div>
            <script type="text/javascript">
                VK.Widgets.Comments('vk_comments');
            </script>
        </div>
    </div>
</div>
</div>
<?php get_footer() ?>