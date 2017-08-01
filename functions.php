<?php
ob_start();
include "setting/setting.php";
include "inc/color-category.php";
include "inc/custom-widget.php";
include "inc/panel.php";
include "inc/customizer.php";
include "inc/breadcumbs.php";
include "inc/meta.php";

if ( function_exists('register_sidebar') )
    register_sidebar(array(
    	'name' => 'Sidebar',
        'before_widget' => '<div id="right-slide" class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><div class="widget">',
        'after_widget' => '</div></div>',
        'before_title' => '<div class="widget-header">',
        'after_title' => '</div>',
    ));

add_filter( 'request', 'my_request_filter' );
function my_request_filter( $query_vars ) {
    if( isset( $_GET['s'] ) && empty( $_GET['s'] ) ) {
        $query_vars['s'] = " ";
    }
    return $query_vars;
}

function mynews_setup(){
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// Register image sizes
	add_image_size( 'mynews-featured-post-large', 508, 198, true );

	add_image_size( 'mynews-featured-post-small', 253, 180, true );

	add_image_size( 'mynews-featured-large1', 334, 194, true );

	add_image_size( 'mynews-featured-small1', 110, 96, true );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo',
			array(
					'flex-width' => true,
					'flex-height' => true,
			)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'main' => esc_html__( 'Primary', 'mynews' ),
		'social-icon' => esc_html__( 'Social Icon', 'mynews' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'custom-background' );
	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
	) );

}
add_action('after_setup_theme', 'mynews_setup');

/**
 * Register custom fonts.
 */
function mynews_fonts_url() {
	$fonts_url = '';

	/*
	 * Translators: If there are characters in your language that are not
	 * supported by Libre Franklin, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$libre_franklin = _x( 'on', 'Libre Franklin font: on or off', 'dhafagk-theme' );

	if ( 'off' !== $libre_franklin ) {
		$font_families = array();

		$font_families[] = 'Libre Franklin:300,300i,400,400i,600,600i,800,800i';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Enqueue scripts and styles.
 */
function mynews_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	// //Register font-awesome style
	// wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', false, '4.6.2' );

	// //Register responsive style
	// wp_enqueue_style( 'rainbownews-responsive', get_template_directory_uri() . '/css/responsive.css', false, '1.0.0' );

 //    //Register swiper
 //    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/css/swiper.css', false, '1.0.0' );

 //    //Register animate
 //    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', false, '3.5.1' );

 //    //Register swiper
 //    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.js', array( 'jquery' ), '3.3.1', true );

 //    //Register wow
 //    wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.js', array( 'jquery' ), '1.1.2', true );

	wp_register_script('mynews_scripts', get_template_directory_uri() . '/assets/js/BootLizeV3.min.js', array('jquery'), true);
	wp_enqueue_script('mynews_scripts');

	wp_enqueue_script( 'mynews-script', get_template_directory_uri() . 'assets/js/jquery-1.9.1.min.js', array( 'jquery' ), '1.9.1', true );

	// //Register main.js
	// wp_enqueue_script( 'rainbownews-main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.0', true );

	// wp_enqueue_script( 'rainbownews-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// wp_enqueue_script( 'rainbownews-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mynews_scripts', 999);

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function add_class_to_img_and_p_in_content($content) {

   $pattern ="/<img(.*?)class=\"(.*?)\"(.*?)>/i";
   $replacement = '<img$1class="$2 mynewsimg"$3>';

   $content = preg_replace($pattern, $replacement, $content);

   return $content;
}
add_filter('the_content', 'add_class_to_img_and_p_in_content',11);

function new_content($content) {

    $content = str_replace('<img','<img class="imgclass"', $content);

    return $content;
}

add_filter('the_content', 'my_addlightboxrel');
function my_addlightboxrel($content) {
   global $post;
   $pattern ="/<a(.*?)href=('|\")(.*?).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>/i";
   $replacement = '<a$1href=$2$3.$4$5 data-lity title="'.$post->post_title.'"$6>';
   $content = preg_replace($pattern, $replacement, $content);
   return $content;
}

if( ! function_exists( 'numinous_colored_category' ) ) :
/**
 * Colored category
*/
function numinous_colored_category(){
    $output = '';
    // Hide category for pages.
	if ( 'post' === get_post_type() ) {		
		$categories_list = get_the_category();
		if ( ! empty($categories_list) ) { 
			$color_code = get_theme_mod( 'numinous_category_color_' . $categories_list[0]->term_id );
			if ($color_code) {
				$output .= '<a href="' . esc_url( get_category_link( $categories_list[0]->term_id ) ) . '" style="background:' . esc_attr( $color_code ) . ' " rel="category tag">'. esc_html( $categories_list[0]->cat_name ) .'</a>';
			}else{
				$output .= '<a href="' . esc_url( get_category_link( $categories_list[0]->term_id ) ) . '"  rel="category tag">' . esc_html( $categories_list[0]->cat_name ) . '</a>';
			}
		 }else{
			echo "Uncategorized";
		} echo $output;
	}
}
endif;

add_action( 'show_user_profile', 'yoursite_extra_user_profile_fields' );
add_action( 'edit_user_profile', 'yoursite_extra_user_profile_fields' );
function yoursite_extra_user_profile_fields( $user ) {
?>
  <h3><?php _e("Social Media", "blank"); ?></h3>
  <table class="form-table">
    <tr>
      <th><label for="facebook"><?php _e("Facebook"); ?></label></th>
      <td>
        <input type="text" name="facebook" id="facebook" class="regular-text" 
            value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" /><br />
        <span class="description"><?php _e("Masukkan url facebook anda."); ?></span>
    </td>
    </tr>
    <tr>
      <th><label for="twitter"><?php _e("twitter"); ?></label></th>
      <td>
        <input type="text" name="twitter" id="twitter" class="regular-text" 
            value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" /><br />
        <span class="description"><?php _e("Masukkan url twitter anda."); ?></span>
    </td>
    </tr>
    <tr>
      <th><label for="google"><?php _e("google"); ?></label></th>
      <td>
        <input type="text" name="google" id="google" class="regular-text" 
            value="<?php echo esc_attr( get_the_author_meta( 'google', $user->ID ) ); ?>" /><br />
        <span class="description"><?php _e("Masukkan url google anda."); ?></span>
    </td>
    </tr>
  </table>
<?php
}

add_action( 'personal_options_update', 'yoursite_save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'yoursite_save_extra_user_profile_fields' );
function yoursite_save_extra_user_profile_fields( $user_id ) {
  $saved = false;
  if ( current_user_can( 'edit_user', $user_id ) ) {
    update_user_meta( $user_id, 'facebook', $_POST['facebook'] );
    update_user_meta( $user_id, 'twitter', $_POST['twitter'] );
    update_user_meta( $user_id, 'google', $_POST['google'] );
    $saved = true;
  }
  return true;
}



?>