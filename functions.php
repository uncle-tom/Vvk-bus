<?php
// Include your functions files here
include('inc/enqueues.php');
// Add your theme support ( cf :  http://codex.wordpress.org/Function_Reference/add_theme_support )
function customThemeSupport() {
    global $wp_version;
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
    // let wordpress manage the title
    add_theme_support( 'title-tag' );
    //add_theme_support( 'custom-background', $args );
    //add_theme_support( 'custom-header', $args );
    // Automatic feed links compatibility
    if( version_compare( $wp_version, '3.0', '>=' ) ) {
        add_theme_support( 'automatic-feed-links' );
    } else {
        automatic_feed_links();
    }
}
add_action( 'after_setup_theme', 'customThemeSupport' );
// Content width
if( !isset( $content_width ) ) {
    // @TODO : edit the value for your own specifications
    $content_width = 960;
}
// Register menus, use wp_nav_menu() to display menu to your template ( cf : http://codex.wordpress.org/Function_Reference/wp_nav_menu )
register_nav_menus( array(
    'main_menu' => __( 'Menu principal', 'minimal-blank-theme' ) //@TODO : change i18n domain name to yours
) );

add_post_type_support( 'post', 'page-attributes' );

// Register sidebars
function registerThemeSidebars() {
    if( !function_exists( 'register_sidebar' ) ) {
        return;
    }
    register_sidebar( array(
        'name' => 'Main sidebar',
        'id' => 'main-sidebar',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'registerThemeSidebars' );
function addAdminEditorStyle() {
    add_editor_style( get_stylesheet_directory_uri() . 'css/editor-style.css' );
};
// подключаем файлы со стилями
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
    wp_enqueue_style( 'editor-style', get_stylesheet_directory_uri() . '/css/style.css' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_register_script( 'loadmore', get_stylesheet_directory_uri() . '/js/loadmore.js', array('jquery') );
 

    wp_localize_script( 'loadmore', 'loadmore_params', array(
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', 
        'posts' => json_encode( $wp_query->query_vars ), 
        'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
        'max_page' => $wp_query->max_num_pages
    ) );
 
    wp_enqueue_script( 'loadmore' );
};
function loadmore_ajax_handler(){
 
    // prepare our arguments for the query
    $args = json_decode( stripslashes( $_POST['query'] ), true );
    $args['paged'] = $_POST['page'] + 1; 
    $args['post_status'] = 'publish';
 
   
    query_posts( $args );
 
    if( have_posts() ) :
 
        
        while( have_posts() ): the_post();
            get_template_part( 'blocks/default/loop', 'default' );
        
        endwhile;
 
    endif;
    die; 
}

add_action('wp_ajax_loadmore', 'loadmore_ajax_handler'); 
add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_handler'); 


function create_post_type() {
  register_post_type( 'directions',
    array(
      'labels' => array(
        'name' => __( 'Направления' ),
        'singular_name' => __( 'Направление' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    )
  );
  register_post_type( 'buses',
    array(
      'labels' => array(
        'name' => __( 'Автобусы' ),
        'singular_name' => __( 'Автобус' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes' ),
    )
  );
};

add_action( 'init', 'create_post_type' );


function your_prefix_get_meta_box( $meta_boxes ) {
    $prefix = 'meta-';

    $meta_boxes[] = array(
        'id' => 'vvk-dir-popular',
        'title' => esc_html__( 'Дополнительная информация', 'vvk' ),
        'post_types' => array( 'directions' ),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => true,
        'fields' => array(
            array(
                'id' => $prefix . 'dir-popular',
                'type' => 'checkbox',
                'name' => esc_html__( 'Популярное направление?', 'vvk' ),
                'std'  => 0,
            ),
        )
    );

    $meta_boxes[] = array(
        'id' => 'vvk-price',
        'title' => esc_html__( 'Купить билет', 'vvk' ),
        'post_types' => array( 'directions' ),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => true,
        'fields' => array(
            array(
                'id' => $prefix . 'price',
                'type' => 'text',
                'name' => esc_html__( 'Цена', 'vvk' ),
            ),
            array(
                'id' => $prefix . 'dir-valuta',
                'name' => esc_html__( 'Валюта', 'vvk' ),
                'type'    => 'select',
                'multiple'        => false,
                // Options of checkboxes, in format 'value' => 'Label'
                'options' => array(
                    '&#8372;'       => 'Гривна',
                    'PLN' => 'Польский злотый',
                    '&#8381;'        => 'Рубль',
                ),
            ),
        ),
    );

    $meta_boxes[] = array(
        'id' => 'vvk-hours',
        'title' => esc_html__( 'Отправление', 'vvk' ),
        'post_types' => array( 'directions' ),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => true,
        'fields' => array(
            array(
                'id' => $prefix . 'hours',
                'type' => 'text',
                'name' => esc_html__( 'Часы', 'vvk' ),
            ),
            array(
                'id' => $prefix . 'minutes',
                'type' => 'text',
                'name' => esc_html__( 'Минуты', 'vvk' ),
            ),
        )
    );

    $meta_boxes[] = array(
        'id' => 'vvk-dirurl',
        'title' => esc_html__( 'Ссылка', 'vvk' ),
        'post_types' => array( 'directions' ),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => true,
        'fields' => array(
            array(
                'id' => $prefix . 'dirurl',
                'type' => 'text',
                'name' => esc_html__( 'Ссылка', 'vvk' ),
            ),
        )
    );

    $meta_boxes[] = array(
        'id' => 'vvk-buses',
        'title' => esc_html__( 'Информация', 'vvk' ),
        'post_types' => array( 'buses' ),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => true,
        'fields' => array(
            array(
                'id' => $prefix . 'quantity',
                'type' => 'number',
                'name' => esc_html__( 'Количество мест', 'vvk' ),
            ),
            array(
                'id' => $prefix . 'dop',
                'type' => 'textarea',
                'name' => esc_html__( 'Дополнительно', 'vvk' ),
            ),
            array(
                'id' => $prefix . 'salon',
                'type' => 'textarea',
                'name' => esc_html__( 'Салон', 'vvk' ),
            ),
            array(
                'id' => $prefix . 'images',
                'type' => 'image_advanced',
                'name' => esc_html__( 'Фото', 'vvk' ),
            ),
        )
    );

    return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'your_prefix_get_meta_box' );

function add_theme_menu_item() {
    add_menu_page("Мои настройки", "Мои настройки", "manage_options", "theme-panel", "theme_settings_page", null, 99);
    //register our settings
    //SOCIAL
    register_setting( 'my-settings-group', 'facebook_link' );
    register_setting( 'my-settings-group', 'vk_link' );
    register_setting( 'my-settings-group', 'instagram_link' );
    register_setting( 'my-settings-group', 'telegram_link' );
    //INFO
    register_setting( 'my-settings-group', 'logo_image' );
    register_setting( 'my-settings-group', 'phone' );
    register_setting( 'my-settings-group', 'phone_link' );
    register_setting( 'my-settings-group', 'email' );
}

add_action("admin_menu", "add_theme_menu_item");

function theme_settings_page() {
    include 'form-file.php';
}

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Vvk-bus';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(/wp-content/uploads/2018/09/komplogo.png);
        width:100%;
        height:55px;
        background-size: contain;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );