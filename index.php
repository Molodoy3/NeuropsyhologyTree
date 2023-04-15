<?php /* Template name: index */ ?>
<?php get_header() ?>
<div class="main">
    <section class="about">
        <div class='about__container container'>
            <div class="about__body">
                <div class="about__col">
                    <h1 class="about__title title">Немного о нейростудии Древо
                        <img src='<?php bloginfo('template_url'); ?>/assets/img/about/logo.svg' alt='logo'>
                    </h1>
                    <div class="about__text text">
                        <p>
                            Lore ipsum dolor sit amet, <span>consectetur</span> adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation
                        </p>
                        <p>
                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            <span>Excepteur</span> sint occaecat cupidatat non <span>proident</span>, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus sit<span>error</span> voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                            inventore
                        </p>
                    </div>
                </div>
                <div class="about__col">
                    <div class="about__col_two">
                        <div class="about__title-list">Как может пригодится наш сайт?</div>
                        <ul class="about__list">
                            <li class="about__item">Sed ut perspiciatis unde omnis iste natus</li>
                            <li class="about__item">qui dolorem ipsum quia dolor sit amet</li>
                            <li class="about__item">avoids a pain that produces no resultant pleasure aut
                                perferendis doloribus asperiores repellat aut perferendis doloribus asperiores
                                repellat</li>
                            <li class="about__item">aut perferendis doloribus asperiores repellat</li>
                            <li class="about__item">Sed ut perspiciatis unde omnis iste natus</li>
                            <li class="about__item">qui dolorem ipsum quia dolor sit amet</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="questions">
        <div class='questions__container container'>
            <h2 class="questions__title title"><?php the_field('заголовок_для_вопросов'); ?>
            </h2>
            <div data-spollers class='questions__body'>
                <div class="questions__col">
                    <?php
                    global $post;
                    $post_quetions = get_posts([
                        'numberposts' => -1,
                        'post_type' => 'questions1',
                        'suppress_filters' => true
                    ]);
                    if ($post_quetions) {
                        foreach ($post_quetions as $post) {
                            setup_postdata($post); ?>
                            <div class='questions__item'>
                                <button data-spoller tabindex='-1' type='button' class='questions__question'>
                                    <?php the_title() ?>
                                </button>
                                <div class='questions__content'>
                                    <?php the_content() ?>
                                </div>
                            </div>
                    <?php
                        }
                    } ?>
                </div>
                <div class="questions__col">
                    <?php
                    global $post;
                    $post_quetions = get_posts([
                        'numberposts' => -1,
                        'post_type' => 'questions2',
                        'suppress_filters' => true
                    ]);
                    if ($post_quetions) {
                        foreach ($post_quetions as $post) {
                            setup_postdata($post); ?>
                            <div class='questions__item'>
                                <button data-spoller tabindex='-1' type='button' class='questions__question'>
                                    <?php the_title() ?>
                                </button>
                                <div class='questions__content'>
                                    <?php the_content() ?>
                                </div>
                            </div>
                    <?php
                        }
                    } ?>
                </div>
            </div>
        </div>
    </section>
    <section id="projects" class="projects">
        <div class='projects__container container'>
            <h2 class="projects__title title">Проекты</h2>
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
                                <div class="item-projects__labels">
                                    <div class="item-projects__label">Радостное</div>
                                    <div class="item-projects__label">2018</div>
                                </div>
                                <img src='<?php the_post_thumbnail_url(); ?>' alt='картинка проекта'>
                            </div>
                            <h4 class="item-projects__title"><?php the_title(); ?></h4>
                        </a>
                <?php
                    }
                } ?>

                <a href="" class="projects__item item-projects">
                    <div class="item-projects__image">
                        <div class="item-projects__labels">
                            <div class="item-projects__label">Радостное</div>
                            <div class="item-projects__label">2018</div>
                        </div>
                        <picture>
                            <source srcset='<?php bloginfo('template_url'); ?>/assets/img/articles/01.webp' type='image/webp'>
                            <img src='<?php bloginfo('template_url'); ?>/assets/img/articles/01.jpg' alt=''>
                        </picture>
                    </div>
                    <h4 class="item-projects__title">Какой-то классный проект</h4>
                </a>
                <a href="" class="projects__item item-projects">
                    <div class="item-projects__image">
                        <ul class="item-projects__labels">
                            <li class="item-projects__label">Грустное</li>
                            <li class="item-projects__label">2015</li>
                            <li class="item-projects__label">Растройство</li>
                        </ul>
                        <picture>
                            <source srcset='<?php bloginfo('template_url'); ?>/assets/img/articles/02.webp' type='image/webp'>
                            <img src='<?php bloginfo('template_url'); ?>/assets/img/articles/02.jpg' alt=''>
                        </picture>
                    </div>
                    <h4 class="item-projects__title">Какой-то классный проект</h4>
                </a>
                <a href="" class="projects__item item-projects">
                    <div class="item-projects__image">
                        <div class="item-projects__labels">
                            <div class="item-projects__label">2022</div>
                            <div class="item-projects__label">Самый долгий проект</div>
                        </div>
                        <picture>
                            <source srcset='<?php bloginfo('template_url'); ?>/assets/img/articles/03.webp' type='image/webp'>
                            <img src='<?php bloginfo('template_url'); ?>/assets/img/articles/03.jpg' alt=''>
                        </picture>
                    </div>
                    <h4 class="item-projects__title">Какой-то классный проект</h4>
                </a>
                <a href="" class="projects__item item-projects">
                    <div class="item-projects__image">
                        <div class="item-projects__labels">
                            <div class="item-projects__label">2012</div>
                        </div>
                        <picture>
                            <source srcset='<?php bloginfo('template_url'); ?>/assets/img/articles/01.webp' type='image/webp'>
                            <img src='<?php bloginfo('template_url'); ?>/assets/img/articles/01.jpg' alt=''>
                        </picture>
                    </div>
                    <h4 class="item-projects__title">Какой-то классный проект</h4>
                </a>
                <a href="" class="projects__item item-projects">
                    <div class="item-projects__image">
                        <div class="item-projects__labels">
                            <div class="item-projects__label">2002</div>
                            <div class="item-projects__label">Первый проект</div>
                        </div>
                        <picture>
                            <source srcset='<?php bloginfo('template_url'); ?>/assets/img/articles/02.webp' type='image/webp'>
                            <img src='<?php bloginfo('template_url'); ?>/assets/img/articles/02.jpg' alt=''>
                        </picture>
                    </div>
                    <h4 class="item-projects__title">Какой-то классный проект</h4>
                </a>
                <a href="" class="projects__item item-projects">
                    <div class="item-projects__image">
                        <div class="item-projects__labels">
                            <div class="item-projects__label">2002</div>
                            <div class="item-projects__label">Первый проект</div>
                        </div>
                        <picture>
                            <source srcset='<?php bloginfo('template_url'); ?>/assets/img/articles/03.webp' type='image/webp'>
                            <img src='<?php bloginfo('template_url'); ?>/assets/img/articles/03.jpg' alt=''>
                        </picture>
                    </div>
                    <h4 class="item-projects__title">Какой-то классный проект</h4>
                </a>
                <a href="" class="projects__item item-projects">
                    <div class="item-projects__image">
                        <div class="item-projects__labels">
                            <div class="item-projects__label">2002</div>
                            <div class="item-projects__label">Первый проект</div>
                        </div>
                        <picture>
                            <source srcset='<?php bloginfo('template_url'); ?>/assets/img/articles/01.webp' type='image/webp'>
                            <img src='<?php bloginfo('template_url'); ?>/assets/img/articles/01.jpg' alt=''>
                        </picture>
                    </div>
                    <h4 class="item-projects__title">Какой-то классный проект</h4>
                </a>
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
    <section class="gallery" id="gallery">
        <div class="gallery__container container">
            <h3 class="gallery__title title">Галерея</h3>
            <div class="gallery__body">
                <a data-fslightbox='gallery' href="<?php bloginfo('template_url'); ?>/assets/img/gallery/01.webp" class="gallery__item gallery__item_row">
                    <picture>
                        <source srcset='<?php bloginfo('template_url'); ?>/assets/img/gallery/01.webp' type='image/webp'>
                        <img src='<?php bloginfo('template_url'); ?>/assets/img/gallery/01.jpg' alt='gallery photo'>
                    </picture>
                </a>
                <a data-fslightbox='gallery' href="<?php bloginfo('template_url'); ?>/assets/img/gallery/02.webp" class="gallery__item">
                    <picture>
                        <source srcset='<?php bloginfo('template_url'); ?>/assets/img/gallery/02.webp' type='image/webp'>
                        <img src='<?php bloginfo('template_url'); ?>/assets/img/gallery/02.jpg' alt='gallery photo'>
                    </picture>
                </a>
                <a data-fslightbox='gallery' href="<?php bloginfo('template_url'); ?>/assets/img/gallery/03.webp" class="gallery__item">
                    <picture>
                        <source srcset='<?php bloginfo('template_url'); ?>/assets/img/gallery/03.webp' type='image/webp'>
                        <img src='<?php bloginfo('template_url'); ?>/assets/img/gallery/03.jpg' alt='gallery photo'>
                    </picture>
                </a>
                <a data-fslightbox='gallery' href="<?php bloginfo('template_url'); ?>/assets/img/gallery/04.webp" class="gallery__item">
                    <picture>
                        <source srcset='<?php bloginfo('template_url'); ?>/assets/img/gallery/04.webp' type='image/webp'>
                        <img src='<?php bloginfo('template_url'); ?>/assets/img/gallery/04.jpg' alt='gallery photo'>
                    </picture>
                </a>
                <a data-fslightbox='gallery' href="<?php bloginfo('template_url'); ?>/assets/img/gallery/05.webp" class="gallery__item">
                    <picture>
                        <source srcset='<?php bloginfo('template_url'); ?>/assets/img/gallery/05.webp' type='image/webp'>
                        <img src='<?php bloginfo('template_url'); ?>/assets/img/gallery/05.jpg' alt='gallery photo'>
                    </picture>
                </a>
                <a data-fslightbox='gallery' href="<?php bloginfo('template_url'); ?>/assets/img/gallery/06.webp" class="gallery__item ">
                    <picture>
                        <source srcset='<?php bloginfo('template_url'); ?>/assets/img/gallery/06.webp' type='image/webp'>
                        <img src='<?php bloginfo('template_url'); ?>/assets/img/gallery/06.jpg' alt='gallery photo'>
                    </picture>
                </a>
                <a data-fslightbox='gallery' href="<?php bloginfo('template_url'); ?>/assets/img/gallery/07.webp" class="gallery__item gallery__item_row">
                    <picture>
                        <source srcset='<?php bloginfo('template_url'); ?>/assets/img/gallery/07.webp' type='image/webp'>
                        <img src='<?php bloginfo('template_url'); ?>/assets/img/gallery/07.jpg' alt='gallery photo'>
                    </picture>
                </a>
                <a data-fslightbox='gallery' href="<?php bloginfo('template_url'); ?>/assets/img/gallery/08.webp" class="gallery__item gallery__item_row gallery__item_col">
                    <picture>
                        <source srcset='<?php bloginfo('template_url'); ?>/assets/img/gallery/08.webp' type='image/webp'>
                        <img src='<?php bloginfo('template_url'); ?>/assets/img/gallery/08.jpg' alt='gallery photo'>
                    </picture>
                </a>
                <a data-fslightbox='gallery' href="<?php bloginfo('template_url'); ?>/assets/img/gallery/01.webp" class="gallery__item">
                    <picture>
                        <source srcset='<?php bloginfo('template_url'); ?>/assets/img/gallery/01.webp' type='image/webp'>
                        <img src='<?php bloginfo('template_url'); ?>/assets/img/gallery/01.jpg' alt='gallery photo'>
                    </picture>
                </a>
                <a data-fslightbox='gallery' href="<?php bloginfo('template_url'); ?>/assets/img/gallery/01.webp" class="gallery__item">
                    <picture>
                        <source srcset='<?php bloginfo('template_url'); ?>/assets/img/gallery/01.webp' type='image/webp'>
                        <img src='<?php bloginfo('template_url'); ?>/assets/img/gallery/01.jpg' alt='gallery photo'>
                    </picture>
                </a>
                <a data-fslightbox='gallery' href="<?php bloginfo('template_url'); ?>/assets/img/gallery/01.webp" class="gallery__item ">
                    <picture>
                        <source srcset='<?php bloginfo('template_url'); ?>/assets/img/gallery/01.webp' type='image/webp'>
                        <img src='<?php bloginfo('template_url'); ?>/assets/img/gallery/01.jpg' alt='gallery photo'>
                    </picture>
                </a>
            </div>
        </div>
    </section>
    <section id="gallery-video" class="gallery-video">
        <div class='gallery-video__container container'>
            <div class="gallery-video__header">
                <h2 class="gallery-video__title title">Видео</h2>
                <div class="slider-video__navigation">
                    <div class="slider-video__arrow slider-video__prev"><img src='<?php bloginfo('template_url'); ?>/assets/img/icons/arrow.svg' alt='arrow'></div>
                    <div class="slider-video__arrow slider-video__next"><img src='<?php bloginfo('template_url'); ?>/assets/img/icons/arrow.svg' alt='arrow'></div>
                </div>
            </div>
            <div class="gallery-video__slider slider-video">
                <div class="slider-video__wrapper">
                    <div class="slider-video__slide">
                        <iframe loading="lazy" src="https://www.youtube.com/embed/8estgUZ9oRU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="slider-video__slide">
                        <iframe loading="lazy" src="https://www.youtube.com/embed/AqftN3Cd-bE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="slider-video__slide">
                        <iframe loading="lazy" src="https://www.youtube.com/embed/Q9Il1sPDW38" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="slider-video__slide">
                        <iframe loading="lazy" src="https://www.youtube.com/embed/oWZSX_jOK_0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="slider-video__slide">
                        <iframe loading="lazy" src="https://www.youtube.com/embed/4cLNLQNShqQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer() ?>