<?php

//хук событие, срабатывающие при загрузке скриптов и стилей
add_action('wp_enqueue_scripts', 'styles');
//хук, срабатывающий при подключении футера, обязательно в конце страницы перед body должен быть wp_footer();
add_action('wp_footer', 'scripts');
//функция, выполняемая при срабатываниии хука
add_action('after_setup_theme', 'menus');
//При загрузке виджетов создаем сайдбары, в которых могут находится виджеты
add_action('widgets_init', 'sidebars');
//При инициализации запускаем функцию регистрации типов записи
add_action('init', 'register_post_types');
//Стили, шрифты
function styles()
{
    //Подключение шрифтов
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com');
    wp_enqueue_style('fonts-gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap&_v=20230322211504" rel="stylesheet');
    //подключение файла с определением темы, является обязательно функцией
    wp_enqueue_style('style-theme', get_stylesheet_uri()); //get_stylesheet_uri() возвращает путь до файла style.css в корне темы
    //подключение главного файла стилей с использованием функции, возращающей путь к нашей теме
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/style.min.css?_v=20230330213456');
}
//Скрипты
function scripts()
{
    //Подключение файла js
    wp_enqueue_script('main-scripts', get_template_directory_uri() . '/assets/js/app.min.js?_v=20230330213456');
}
//Меню
function menus()
{
    register_nav_menu('top', 'меню в шапке');
    register_nav_menu('footer', 'меню в подвале');

    //Расширение возможностей записей, в данном случае добавляем возможность указываеть изображение для записи
    add_theme_support('post-thumbnails');
    //возможность изменять названия странциц
    add_theme_support('title-tag');
    //Добавление форматов записи, можно указывать опреедленные имена, например gellery, link и т.д
    add_theme_support('post-formats', array('article', 'project'));
    add_theme_support('custom-logo');
}
function sidebars()
{
    register_sidebar(array(
        'name'          => 'right sidebar',
        'id'            => "right_sidebar",
        'description'   => 'Тестовый сайдбар',
        'class'         => '',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    ));
}
//Регистрация типов записи
function register_post_types()
{
    //Статьи
    register_post_type('neuropsychology', [
        'label'  => null,
        'labels' => [
            'name'               => 'Статьи про нейропсихологию', // основное название для типа записи
            'singular_name'      => 'Статья про нейропсихологию', // название для одной записи этого типа
            'add_new'            => 'Добавить статью про нейропсихологию', // для добавления новой записи
            'add_new_item'       => 'Добавление заголовка', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование статьи про нейропсихологию', // для редактирования типа записи
            'new_item'           => 'Новое описание', // текст новой записи
            'view_item'          => 'Смотреть статью про нейропсихологию', // для просмотра записи этого типа.
            'search_items'       => 'Искать статью про нейропсихологию', // для поиска по этим типам записи
            'not_found'          => 'Не найдено статьи про нейропсихологию', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Статьи про нейропсихологию', // название меню
        ],
        'description'            => 'Здесь создаются, редактируются статьи про нейропсихологию',
        'public'                 => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'           => true, // показывать ли в меню админки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'post-formats', 'revisions'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ]);
    register_post_type('art_therapy', [
        'label'  => null,
        'labels' => [
            'name'               => 'Статьи про арт терапию', // основное название для типа записи
            'singular_name'      => 'Статья про арт терапию', // название для одной записи этого типа
            'add_new'            => 'Добавить статью про арт терапию', // для добавления новой записи
            'add_new_item'       => 'Добавление заголовка', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование статьи про арт терапию', // для редактирования типа записи
            'new_item'           => 'Новое описание', // текст новой записи
            'view_item'          => 'Смотреть статью про арт терапию', // для просмотра записи этого типа.
            'search_items'       => 'Искать статью про арт терапию', // для поиска по этим типам записи
            'not_found'          => 'Не найдено статьи про арт терапию', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Статьи про арт терапию', // название меню
        ],
        'description'            => 'Здесь создаются, редактируются статьи про арт терапию',
        'public'                 => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'           => true, // показывать ли в меню админки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 5,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'post-formats', 'revisions'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ]);
    //Проекты
    register_post_type('projects', [
        'label'  => null,
        'labels' => [
            'name'               => 'Проекты', // основное название для типа записи
            'singular_name'      => 'Проект', // название для одной записи этого типа
            'add_new'            => 'Добавить проект', // для добавления новой записи
            'add_new_item'       => 'Добавление заголовка', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование проекта', // для редактирования типа записи
            'new_item'           => 'Новое описание', // текст новой записи
            'view_item'          => 'Смотреть проект', // для просмотра записи этого типа.
            'search_items'       => 'Искать проект', // для поиска по этим типам записи
            'not_found'          => 'Не найдено проекта', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Проекты', // название меню
        ],
        'description'            => 'Здесь создаются, редактируются проекты',
        'public'                 => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'           => true, // показывать ли в меню админки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 6,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'post-formats', 'revisions'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => true,
    ]);
    //Вопросы в первой колонке
    register_post_type('questions1', [
        'label'  => null,
        'labels' => [
            'name'               => 'Вопросы в первой колонке', // основное название для типа записи
            'singular_name'      => 'Вопросы в первой колонке', // название для одной записи этого типа
            'add_new'            => 'Добавить вопрос в первой колонке', // для добавления новой записи
            'add_new_item'       => 'Добавление заголовка', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование вопроса в первой колонке', // для редактирования типа записи
            'new_item'           => 'Новое описание', // текст новой записи
            'view_item'          => 'Смотреть вопрос в первой колонке', // для просмотра записи этого типа.
            'search_items'       => 'Искать вопрос в первой колонке', // для поиска по этим типам записи
            'not_found'          => 'Не найдено вопроса в первой колонке', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Вопросы в первой колонке', // название меню
        ],
        'description'            => 'Здесь создаются, редактируются вопросы в первой колонке. Необходимо написать заголовок и ниже текст. Если нужны параграфы, необходимо писать через Enter',
        'public'                 => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'           => true, // показывать ли в меню админки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 7,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'post-formats', 'revisions'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ]);
    //Вопросы во второй колонке
    register_post_type('questions2', [
        'label'  => null,
        'labels' => [
            'name'               => 'Вопросы во второй колонке', // основное название для типа записи
            'singular_name'      => 'Вопрос во второй колонке', // название для одной записи этого типа
            'add_new'            => 'Добавить вопрос во второй колонке', // для добавления новой записи
            'add_new_item'       => 'Добавление заголовка', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование вопроса во второй колонке', // для редактирования типа записи
            'new_item'           => 'Новое описание', // текст новой записи
            'view_item'          => 'Смотреть вопрос во второй колонке', // для просмотра записи этого типа.
            'search_items'       => 'Искать вопрос во второй колонке', // для поиска по этим типам записи
            'not_found'          => 'Не найдено вопроса во второй колонке', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Вопросы во второй колонке', // название меню
        ],
        'description'            => 'Здесь создаются, редактируются вопросы во второй колонке. Необходимо написать заголовок и ниже текст. Если нужны параграфы, необходимо писать через Enter',
        'public'                 => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'           => true, // показывать ли в меню админки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 8,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'post-formats', 'revisions'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ]);
    register_post_type('videos', [
        'label'  => null,
        'labels' => [
            'name'               => 'Видео', // основное название для типа записи
            'singular_name'      => 'Видео', // название для одной записи этого типа
            'add_new'            => 'Добавить видео', // для добавления новой записи
            'add_new_item'       => 'Добавление заголовка', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование видео', // для редактирования типа записи
            'new_item'           => 'Новое описание', // текст новой записи
            'view_item'          => 'Смотреть видео', // для просмотра записи этого типа.
            'search_items'       => 'Искать видео', // для поиска по этим типам записи
            'not_found'          => 'Не найдено видео', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Видео на главной', // название меню
        ],
        'description'            => 'Здесь можно указывать видео для слайдера на главной странице',
        'public'                 => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'           => true, // показывать ли в меню админки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 9,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'post-formats', 'revisions'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ]);
    //Регистрация таксономии для проектов
    /*     register_taxonomy('categories', ['projects'], [
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => [
            'name'              => 'Категории',
            'singular_name'     => 'Категория',
            'search_items'      => 'Найти категорию',
            'all_items'         => 'Все категории',
            'view_item '        => 'Смотреть категорию',
            'parent_item'       => 'Родительская категория',
            'parent_item_colon' => 'Родительская категория',
            'edit_item'         => 'Изменить категорию',
            'update_item'       => 'Обновить категорию',
            'add_new_item'      => 'Добавить новую категорию',
            'new_item_name'     => 'Новое имя категории',
            'menu_name'         => 'Категории проектов',
            'back_to_items'     => '← Вернуться к категориюям',
        ],
        'description'           => 'Здесь можно создать категории проектов', // описание таксономии
        'public'                => true,
        // 'publicly_queryable'    => null, // равен аргументу public
        // 'show_in_nav_menus'     => true, // равен аргументу public
        // 'show_ui'               => true, // равен аргументу public
        // 'show_in_menu'          => true, // равен аргументу show_ui
        // 'show_tagcloud'         => true, // равен аргументу show_ui
        // 'show_in_quick_edit'    => null, // равен аргументу show_ui
        'hierarchical'          => true,
        'exclude_from_search' => false,

        'rewrite'               => true,
        //'query_var'             => $taxonomy, // название параметра запроса
        'capabilities'          => array(),
        'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
        'show_admin_column'     => true, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
        'show_in_rest'          => null, // добавить в REST API
        'rest_base'             => null, // $taxonomy
        // '_builtin'              => false,
        //'update_count_callback' => '_update_post_term_count',
    ]); */
}

//! Переделанная из инета функция для ограничения символов в строке
//! Аргументы: функция через get; число, на сколько надо ограничить; строка в конце
function title_limit($fun, $count, $after)
{
    if (mb_strlen($fun) > $count) $fun = mb_substr($fun, 0, $count);
    else $after = '';
    echo $fun . $after;
}

//!Ниже идет код чисто для добавление функции загрузки svg картинок и их отображения
add_filter('upload_mimes', 'svg_upload_allow');
# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow($mimes)
{
    $mimes['svg']  = 'image/svg+xml';

    return $mimes;
}
add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);
# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{

    // WP 5.1 +
    if (version_compare($GLOBALS['wp_version'], '5.1.0', '>=')) {
        $dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
    } else {
        $dosvg = ('.svg' === strtolower(substr($filename, -4)));
    }

    // mime тип был обнулен, поправим его
    // а также проверим право пользователя
    if ($dosvg) {

        // разрешим
        if (current_user_can('manage_options')) {

            $data['ext']  = 'svg';
            $data['type'] = 'image/svg+xml';
        }
        // запретим
        else {
            $data['ext']  = false;
            $data['type'] = false;
        }
    }
    return $data;
}
add_filter('wp_prepare_attachment_for_js', 'show_svg_in_media_library');

# Формирует данные для отображения SVG как изображения в медиабиблиотеке.
function show_svg_in_media_library($response)
{

    if ($response['mime'] === 'image/svg+xml') {

        // С выводом названия файла
        $response['image'] = [
            'src' => $response['url'],
        ];
    }

    return $response;
}
