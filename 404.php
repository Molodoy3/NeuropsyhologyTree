<?php /* Template name: 404 */ ?>
<?php $id_this_post = get_the_ID(); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__body container">
                <div class="header__row">
                    <a href="<?php bloginfo('url') ?>" class="header__logo logo">
                        <img src='<?php bloginfo('template_url'); ?>/assets/img/logo-picture.svg' alt='logo picture'>
                        <img src='<?php bloginfo('template_url'); ?>/assets/img/logo-name.svg' alt='logo name'>
                    </a>
                    <div class='header__menu menu'>
                        <div class='menu__icon'>
                            <span></span>
                        </div>
                        <nav data-spollers='992.98,max' class='menu__body'>
                            <?php wp_nav_menu([
                                'theme_location'  => 'top',
                                'container'       => null,
                                'menu_class'      => 'menu__list'
                            ]); ?>
                        </nav>
                    </div>
                    <div class="header__icons">
                        <button type="button" class="header__theme theme">
                            <span class="header__icon-theme header__icon-theme_light">
                                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.529 15.93C21.369 15.66 20.919 15.24 19.799 15.44C19.179 15.55 18.549 15.6 17.919 15.57C16.7954 15.519 15.6934 15.2432 14.6783 14.7588C13.6631 14.2745 12.7555 13.5914 12.009 12.75C10.709 11.3 9.909 9.40999 9.899 7.36999C9.899 6.22999 10.119 5.12999 10.569 4.08999C11.009 3.07999 10.699 2.54999 10.479 2.32999C10.249 2.09999 9.709 1.77999 8.649 2.21999C4.559 3.93999 2.029 8.03999 2.329 12.43C2.629 16.56 5.529 20.09 9.369 21.42C10.2999 21.7448 11.2738 21.9301 12.259 21.97C12.419 21.98 12.579 21.99 12.739 21.99C16.089 21.99 19.229 20.41 21.209 17.72C21.879 16.79 21.699 16.2 21.529 15.93Z" />
                                </svg>
                            </span>
                            <span class="header__icon-theme header__icon-theme_dark">
                                <svg width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 18C11.9193 18 12.8295 17.8189 13.6788 17.4672C14.5281 17.1154 15.2997 16.5998 15.9497 15.9497C16.5998 15.2997 17.1154 14.5281 17.4672 13.6788C17.8189 12.8295 18 11.9193 18 11C18 10.0807 17.8189 9.17049 17.4672 8.32122C17.1154 7.47194 16.5998 6.70026 15.9497 6.05025C15.2997 5.40024 14.5281 4.88463 13.6788 4.53284C12.8295 4.18106 11.9193 4 11 4C9.14348 4 7.36301 4.7375 6.05025 6.05025C4.7375 7.36301 4 9.14348 4 11C4 12.8565 4.7375 14.637 6.05025 15.9497C7.36301 17.2625 9.14348 18 11 18ZM11 21.96C10.45 21.96 10 21.55 10 21V20.92C10 20.37 10.45 19.92 11 19.92C11.55 19.92 12 20.37 12 20.92C12 21.47 11.55 21.96 11 21.96ZM18.14 19.14C17.88 19.14 17.63 19.04 17.43 18.85L17.3 18.72C17.2074 18.6274 17.134 18.5175 17.0839 18.3965C17.0338 18.2756 17.008 18.1459 17.008 18.015C17.008 17.8841 17.0338 17.7544 17.0839 17.6335C17.134 17.5125 17.2074 17.4026 17.3 17.31C17.3926 17.2174 17.5025 17.144 17.6235 17.0939C17.7444 17.0438 17.8741 17.018 18.005 17.018C18.1359 17.018 18.2656 17.0438 18.3865 17.0939C18.5075 17.144 18.6174 17.2174 18.71 17.31L18.84 17.44C18.9789 17.579 19.0736 17.7561 19.1122 17.9489C19.1507 18.1416 19.1313 18.3415 19.0564 18.5232C18.9816 18.705 18.8546 18.8606 18.6916 18.9703C18.5285 19.0801 18.3366 19.1391 18.14 19.14ZM3.86 19.14C3.6 19.14 3.35 19.04 3.15 18.85C3.0573 18.7575 2.98375 18.6476 2.93357 18.5266C2.88339 18.4057 2.85756 18.276 2.85756 18.145C2.85756 18.014 2.88339 17.8843 2.93357 17.7634C2.98375 17.6424 3.0573 17.5325 3.15 17.44L3.28 17.31C3.37258 17.2174 3.48249 17.144 3.60346 17.0939C3.72442 17.0438 3.85407 17.018 3.985 17.018C4.11593 17.018 4.24558 17.0438 4.36654 17.0939C4.48751 17.144 4.59742 17.2174 4.69 17.31C4.78258 17.4026 4.85602 17.5125 4.90613 17.6335C4.95623 17.7544 4.98202 17.8841 4.98202 18.015C4.98202 18.1459 4.95623 18.2756 4.90613 18.3965C4.85602 18.5175 4.78258 18.6274 4.69 18.72L4.56 18.85C4.37 19.04 4.11 19.14 3.86 19.14ZM21 12H20.92C20.37 12 19.92 11.55 19.92 11C19.92 10.45 20.37 10 20.92 10C21.47 10 21.96 10.45 21.96 11C21.96 11.55 21.55 12 21 12ZM1.08 12H1C0.45 12 0 11.55 0 11C0 10.45 0.45 10 1 10C1.55 10 2.04 10.45 2.04 11C2.04 11.55 1.63 12 1.08 12ZM18.01 4.99C17.75 4.99 17.5 4.89 17.3 4.7C17.2073 4.60749 17.1337 4.4976 17.0836 4.37662C17.0334 4.25565 17.0076 4.12597 17.0076 3.995C17.0076 3.86403 17.0334 3.73435 17.0836 3.61338C17.1337 3.4924 17.2073 3.38251 17.3 3.29L17.43 3.16C17.5226 3.06742 17.6325 2.99398 17.7535 2.94387C17.8744 2.89377 18.0041 2.86798 18.135 2.86798C18.2659 2.86798 18.3956 2.89377 18.5165 2.94387C18.6375 2.99398 18.7474 3.06742 18.84 3.16C18.9326 3.25258 19.006 3.36249 19.0561 3.48346C19.1062 3.60442 19.132 3.73407 19.132 3.865C19.132 3.99593 19.1062 4.12558 19.0561 4.24654C19.006 4.36751 18.9326 4.47742 18.84 4.57L18.71 4.7C18.52 4.89 18.27 4.99 18.01 4.99ZM3.99 4.99C3.73 4.99 3.48 4.89 3.28 4.7L3.15 4.56C3.05742 4.46742 2.98398 4.35751 2.93387 4.23654C2.88377 4.11558 2.85798 3.98593 2.85798 3.855C2.85798 3.72407 2.88377 3.59442 2.93387 3.47346C2.98398 3.35249 3.05742 3.24258 3.15 3.15C3.24258 3.05742 3.35249 2.98398 3.47346 2.93387C3.59442 2.88377 3.72407 2.85798 3.855 2.85798C3.98593 2.85798 4.11558 2.88377 4.23654 2.93387C4.35751 2.98398 4.46742 3.05742 4.56 3.15L4.69 3.28C5.08 3.67 5.08 4.3 4.69 4.69C4.5 4.89 4.24 4.99 3.99 4.99ZM11 2.04C10.45 2.04 10 1.63 10 1.08V1C10 0.45 10.45 0 11 0C11.55 0 12 0.45 12 1C12 1.55 11.55 2.04 11 2.04Z" />
                                </svg>
                            </span>
                        </button>
                        <div class="header__phone phone">
                            <div class="phone__link icon-phone">Связаться</div>
                            <div class="phone__popup popup-phone">
                                <div class="popup-phone__body">
                                    <div title="Скопировать" class="popup-phone__title">
                                        <span><?php the_field('номер_телефона'); ?></span>
                                        <div class="popup-phone__copy">Номер скопирован</div>
                                    </div>
                                    <div class="popup-phone__text">Вы можете позвонить Ксении, для того чтобы записаться на
                                        прием (или напишите на почту <a href="<?php the_field('адрес_электронной_почты') ?>"><?php the_field('адрес_электронной_почты') ?></a>)</div>
                                    <a href="tel:<?php the_field('номер_телефона_без__-_+_для_ссылки'); ?>" class="popup-phone__btn">Позвонить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="main">
            <div class="container">
                <h1 class="title" style="margin-top: 30px; margin-bottom: 50px;">Упс! Страница не найдена!</h1>
            </div>
            <section id="projects" class="projects">
                <div class='projects__container container'>
                    <h2 class="projects__title title">Проекты
                    </h2>
                    <div class="projects__items">
                        <?php
                        global $post;
                        $post_quetions = get_posts([
                            'numberposts' => -1,
                            'post_type' => 'projects',
                            'suppress_filters' => true
                        ]);
                        if ($post_quetions) {
                            foreach ($post_quetions as $post) {
                                setup_postdata($post); ?>
                                <a href="<?php the_permalink(); ?>" class="projects__item item-projects">
                                    <div class="item-projects__image">
                                        <?php the_field('список_категорий_проекта'); ?>
                                        <img src='<?php the_post_thumbnail_url(); ?>' alt='картинка проекта'>
                                    </div>
                                    <h4 class="item-projects__title"><?php the_title(); ?></h4>
                                </a>
                        <?php
                            }
                        } ?>
                    </div>
                </div>

            </section>
            <section id="articles" data-tabs class="articles">
                <div class='articles__container container'>
                    <h2 class="articles__title title">Статьи</h2>
                    <div class="articles__filter filter-articles">
                        <button data-filter="*" type="button" class="filter-articles__item active">Все</button>
                        <button data-filter="Нейропсихология" type="button" class="filter-articles__item">Нейропсихология</button>
                        <button data-filter="artpsychology" type="button" class="filter-articles__item">Арт
                            терапия</button>
                        <button data-filter="some" type="button" class="filter-articles__item">Еще какой-то
                            филтр</button>
                    </div>
                    <div class="articles__items">
                        <article data-filter-item="Нейропсихология" class="articles__article article-articles">
                            <a href="" class="article-articles__image">
                                <picture>
                                    <source srcset='<?php bloginfo('template_url'); ?>/assets/img/articles/01.webp' type='image/webp'>
                                    <img src='<?php bloginfo('template_url'); ?>/assets/img/articles/01.jpg' alt='article'>
                                </picture>
                            </a>
                            <div class="article-articles__info">
                                <div class="article-articles__date">12.03.2023</div>
                                <h4 class="article-articles__title">
                                    <a href="">Название статьи</a>
                                </h4>
                                <div class="article-articles__text">Небольшое описание сатьи</div>
                            </div>
                        </article>
                        <article data-filter-item="Нейропсихология" class="articles__article article-articles">
                            <a href="" class="article-articles__image">
                                <picture>
                                    <source srcset='<?php bloginfo('template_url'); ?>/assets/img/articles/02.webp' type='image/webp'>
                                    <img src='<?php bloginfo('template_url'); ?>/assets/img/articles/02.jpg' alt='article'>
                                </picture>
                            </a>
                            <div class="article-articles__info">
                                <div class="article-articles__date">12.03.2023</div>
                                <h4 class="article-articles__title">
                                    <a href="">Название статьи</a>
                                </h4>
                                <div class="article-articles__text">Небольшое описание сатьи</div>
                            </div>
                        </article>
                        <article data-filter-item="Нейропсихология" class="articles__article article-articles">
                            <a href="" class="article-articles__image">
                                <picture>
                                    <source srcset='<?php bloginfo('template_url'); ?>/assets/img/articles/06.webp' type='image/webp'>
                                    <img src='<?php bloginfo('template_url'); ?>/assets/img/articles/06.jfif' alt='article'>
                                </picture>
                            </a>
                            <div class="article-articles__info">
                                <div class="article-articles__date">12.03.2023</div>
                                <h4 class="article-articles__title">
                                    <a href="">Название статьи</a>
                                </h4>
                                <div class="article-articles__text">Небольшое описание сатьи</div>
                            </div>
                        </article>
                        <article data-filter-item="artpsychology" class="articles__article article-articles">
                            <a href="" class="article-articles__image">
                                <picture>
                                    <source srcset='<?php bloginfo('template_url'); ?>/assets/img/articles/07.webp' type='image/webp'>
                                    <img src='<?php bloginfo('template_url'); ?>/assets/img/articles/07.png' alt='article'>
                                </picture>
                            </a>
                            <div class="article-articles__info">
                                <div class="article-articles__date">12.03.2023</div>
                                <h4 class="article-articles__title">
                                    <a href="">Название статьи</a>
                                </h4>
                                <div class="article-articles__text">Небольшое описание сатьи</div>
                            </div>
                        </article>
                        <article data-filter-item="artpsychology" class="articles__article article-articles">
                            <a href="" class="article-articles__image">
                                <picture>
                                    <source srcset='<?php bloginfo('template_url'); ?>/assets/img/articles/01.webp' type='image/webp'>
                                    <img src='<?php bloginfo('template_url'); ?>/assets/img/articles/01.jpg' alt='article'>
                                </picture>
                            </a>
                            <div class="article-articles__info">
                                <div class="article-articles__date">12.03.2023</div>
                                <h4 class="article-articles__title">
                                    <a href="">Название статьи</a>
                                </h4>
                                <div class="article-articles__text">Небольшое описание сатьи</div>
                            </div>
                        </article>
                        <article data-filter-item="some" class="articles__article article-articles">
                            <a href="" class="article-articles__image">
                                <picture>
                                    <source srcset='<?php bloginfo('template_url'); ?>/assets/img/articles/06.webp' type='image/webp'>
                                    <img src='<?php bloginfo('template_url'); ?>/assets/img/articles/06.png' alt='article'>
                                </picture>
                            </a>
                            <div class="article-articles__info">
                                <div class="article-articles__date">12.03.2023</div>
                                <h4 class="article-articles__title">
                                    <a href="">Название статьи</a>
                                </h4>
                                <div class="article-articles__text">Небольшое описание сатьи</div>
                            </div>
                        </article>
                        <article data-filter-item="some" class="articles__article article-articles">
                            <a href="" class="article-articles__image">
                                <picture>
                                    <source srcset='<?php bloginfo('template_url'); ?>/assets/img/articles/01.webp' type='image/webp'>
                                    <img src='<?php bloginfo('template_url'); ?>/assets/img/articles/01.jpg' alt='article'>
                                </picture>
                            </a>
                            <div class="article-articles__info">
                                <div class="article-articles__date">12.03.2023</div>
                                <h4 class="article-articles__title">
                                    <a href="">Название статьи</a>
                                </h4>
                                <div class="article-articles__text">Небольшое описание сатьи</div>
                            </div>
                        </article>
                        <article data-filter-item="some" class="articles__article article-articles">
                            <a href="" class="article-articles__image">
                                <picture>
                                    <source srcset='<?php bloginfo('template_url'); ?>/assets/img/articles/07.webp' type='image/webp'>
                                    <img src='<?php bloginfo('template_url'); ?>/assets/img/articles/07.png' alt='article'>
                                </picture>
                            </a>
                            <div class="article-articles__info">
                                <div class="article-articles__date">12.03.2023</div>
                                <h4 class="article-articles__title">
                                    <a href="">Название статьи</a>
                                </h4>
                                <div class="article-articles__text">Небольшое описание сатьи</div>
                            </div>
                        </article>
                        <article data-filter-item="some" class="articles__article article-articles">
                            <a href="" class="article-articles__image">
                                <picture>
                                    <source srcset='<?php bloginfo('template_url'); ?>/assets/img/articles/01.webp' type='image/webp'>
                                    <img src='<?php bloginfo('template_url'); ?>/assets/img/articles/01.jpg' alt='article'>
                                </picture>
                            </a>
                            <div class="article-articles__info">
                                <div class="article-articles__date">12.03.2023</div>
                                <h4 class="article-articles__title">
                                    <a href="">Название статьи</a>
                                </h4>
                                <div class="article-articles__text">Небольшое описание сатьи</div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </div>
        <?php get_footer() ?>