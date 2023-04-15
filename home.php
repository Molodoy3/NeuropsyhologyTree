<?php /* Template name: home */ ?>
<?php get_header() ?>
<?php $id_this_post = get_the_ID(); ?>
<div class="main">
    <section class="about">
        <div class='about__container container'>
            <div class="about__body">
                <div class="about__col">
                    <h1 class="about__title title"><?php the_field('главный_заголовок', $id_this_post) ?>
                        <img src='<?php bloginfo('template_url'); ?>/assets/img/about/logo.svg' alt='logo'>
                    </h1>
                    <div class="about__text text">
                        <?php the_field('описание', $id_this_post) ?>
                    </div>
                </div>
                <div class="about__col">
                    <div class="about__col_two">
                        <div class="about__title-list"><?php the_field('заголовок_для_списка', $id_this_post) ?></div>
                        <?php the_field('список', $id_this_post) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="questions">
        <div class='questions__container container'>
            <h2 class="questions__title title"><?php the_field('заголовок_для_вопросов', $id_this_post); ?>
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
            <h2 class="projects__title title"><?php the_field('заголовок_для_проектов', $id_this_post); ?>
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
            <h2 class="articles__title title"><?php the_field('заголовок_для_статей', $id_this_post); ?></h2>
            <div class="articles__filter filter-articles">
                <button data-filter="*" type="button" class="filter-articles__item active">Все</button>
                <button data-filter="Нейропсихология" type="button" class="filter-articles__item">Нейропсихология</button>
                <button data-filter="Арт терапия" type="button" class="filter-articles__item">Арт терапия</button>
            </div>
            <div class="articles__items">
                <?php
                global $post;
                $post_quetions = get_posts([
                    'numberposts' => -1,
                    'post_type' => 'neuropsychology',
                    'suppress_filters' => true
                ]);
                if ($post_quetions) {
                    foreach ($post_quetions as $post) {
                        setup_postdata($post); ?>
                        <article data-filter-item="Нейропсихология" class="articles__article article-articles">
                            <a href="<?php the_permalink() ?>" class="article-articles__image">
                                <img src='<?php the_post_thumbnail_url(); ?>' alt='Нейропсихология'>
                            </a>
                            <div class="article-articles__info">
                                <div class="article-articles__date"><?php the_date(); ?></div>
                                <h4 class="article-articles__title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h4>
                                <div class="article-articles__text"><?php the_excerpt(); ?></div>
                            </div>
                        </article>
                <?php
                    }
                } ?>
                <?php
                global $post;
                $post_quetions = get_posts([
                    'numberposts' => -1,
                    'post_type' => 'art_therapy',
                    'suppress_filters' => true
                ]);
                if ($post_quetions) {
                    foreach ($post_quetions as $post) {
                        setup_postdata($post); ?>
                        <article data-filter-item="Арт терапия" class="articles__article article-articles">
                            <a href="<?php the_permalink() ?>" class="article-articles__image">
                                <img src='<?php the_post_thumbnail_url(); ?>' alt='Арт терапия'>
                            </a>
                            <div class="article-articles__info">
                                <div class="article-articles__date"><?php the_date(); ?></div>
                                <h4 class="article-articles__title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h4>
                                <div class="article-articles__text"><?php the_excerpt(); ?></div>
                            </div>
                        </article>
                <?php
                    }
                } ?>
            </div>
        </div>
    </section>
    <section class="gallery" id="gallery">
        <div class="gallery__container container">
            <h3 class="gallery__title title"><?php the_field('заголовок_для_галереи', $id_this_post); ?></h3>
            <div class="gallery__body">
                <a data-fslightbox='gallery' href="<?php the_field('фото_1', $id_this_post) ?>" class="gallery__item gallery__item_row">
                    <img src='<?php the_field('фото_1', $id_this_post) ?>' alt='фото из галереи'>
                </a>
                <a data-fslightbox='gallery' href="<?php the_field('фото_2', $id_this_post) ?>" class="gallery__item">
                    <img src='<?php the_field('фото_2', $id_this_post) ?>' alt='фото из галереи'>
                </a>
                <a data-fslightbox='gallery' href="<?php the_field('фото_3', $id_this_post) ?>" class="gallery__item">
                    <img src='<?php the_field('фото_3', $id_this_post) ?>' alt='фото из галереи'>
                </a>
                <a data-fslightbox='gallery' href="<?php the_field('фото_4', $id_this_post) ?>" class="gallery__item">
                    <img src='<?php the_field('фото_4', $id_this_post) ?>' alt='фото из галереи'>
                </a>
                <a data-fslightbox='gallery' href="<?php the_field('фото_5', $id_this_post) ?>" class="gallery__item">
                    <img src='<?php the_field('фото_5', $id_this_post) ?>' alt='фото из галереи'>
                </a>
                <a data-fslightbox='gallery' href="<?php the_field('фото_6', $id_this_post) ?>" class="gallery__item">
                    <img src='<?php the_field('фото_6', $id_this_post) ?>' alt='фото из галереи'>
                </a>
                <a data-fslightbox='gallery' href="<?php the_field('фото_7', $id_this_post) ?>" class="gallery__item gallery__item_row">
                    <img src='<?php the_field('фото_7', $id_this_post) ?>' alt='фото из галереи'>
                </a>
                <a data-fslightbox='gallery' href="<?php the_field('фото_8', $id_this_post) ?>" class="gallery__item gallery__item_row gallery__item_col">
                    <img src='<?php the_field('фото_8', $id_this_post) ?>' alt='фото из галереи'>
                </a>
                <a data-fslightbox='gallery' href="<?php the_field('фото_9', $id_this_post) ?>" class="gallery__item">
                    <img src='<?php the_field('фото_9', $id_this_post) ?>' alt='фото из галереи'>
                </a>
                <a data-fslightbox='gallery' href="<?php the_field('фото_10', $id_this_post) ?>" class="gallery__item">
                    <img src='<?php the_field('фото_10', $id_this_post) ?>' alt='фото из галереи'>
                </a>
                <a data-fslightbox='gallery' href="<?php the_field('фото_11', $id_this_post) ?>" class="gallery__item">
                    <img src='<?php the_field('фото_11', $id_this_post) ?>' alt='фото из галереи'>
                </a>
            </div>
        </div>
    </section>
    <section id="gallery-video" class="gallery-video">
        <div class='gallery-video__container container'>
            <div class="gallery-video__header">
                <h2 class="gallery-video__title title"><?php the_field('заголовок_для_видео', $id_this_post); ?></h2>
                <div class="slider-video__navigation">
                    <div class="slider-video__arrow slider-video__prev"><img src='<?php bloginfo('template_url'); ?>/assets/img/icons/arrow.svg' alt='arrow'></div>
                    <div class="slider-video__arrow slider-video__next"><img src='<?php bloginfo('template_url'); ?>/assets/img/icons/arrow.svg' alt='arrow'></div>
                </div>
            </div>
            <div class="gallery-video__slider slider-video">
                <div class="slider-video__wrapper">
                    <?php
                    global $post;
                    $post_quetions = get_posts([
                        'numberposts' => -1,
                        'post_type' => 'videos',
                        'suppress_filters' => true
                    ]);
                    if ($post_quetions) {
                        foreach ($post_quetions as $post) {
                            setup_postdata($post); ?>
                            <div class="slider-video__slide">
                                <?php the_content(); ?>
                            </div>
                    <?php
                        }
                    } ?>
                    <!-- <div class="slider-video__slide">
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
                    </div> -->
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer() ?>