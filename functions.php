<?php
    /*-----------------------------------------------------------------------------------*/
    /* This file will be referenced every time a template/page loads on your Wordpress site
    /* This is the place to define custom fxns and specialty code
    /*-----------------------------------------------------------------------------------*/

// Define the version so we can easily replace it throughout the theme
define( 'NAKED_VERSION', 1.0 );

/*-----------------------------------------------------------------------------------*/
/*  Set the maximum allowed width for any content in the theme
/*-----------------------------------------------------------------------------------*/
if ( ! isset( $content_width ) ) $content_width = 900;

/*-----------------------------------------------------------------------------------*/
/* Add Rss feed support to Head section
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );

/*-----------------------------------------------------------------------------------*/
/* Add post thumbnail/featured image support
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );

/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
add_theme_support('menus');
register_nav_menus(
    array(  
            'Top-menu' => 'Top area',
            'Left-menu'	=>	'Left area', // Register the Primary menu
            // Copy and paste the line above right here if you want to make another menu,
            // just change the 'primary' to another name
    )
);


/*-----------------------------------------------------------------------------------*/
/* Activate sidebar for Wordpress use
/*-----------------------------------------------------------------------------------*/
function naked_register_sidebars() {
    register_sidebar(array(				// Start a series of sidebars to register
            'id' => 'sidebar', 					// Make an ID
            'name' => 'Sidebar',				// Name it
            'description' => 'Take it on the side...', // Dumb description for the admin side
            'before_widget' => '<div>',	// What to display before each widget
            'after_widget' => '</div>',	// What to display following each widget
            'before_title' => '<h3 class="side-title">',	// What to display before each widget's title
            'after_title' => '</h3>',		// What to display following each widget's title
            'empty_title'=> '',					// What to display in the case of no title defined for a widget
            // Copy and paste the lines above right here if you want to make another sidebar,
            // just change the values of id and name to another word/name
    ));
}
// adding sidebars to Wordpress (these are created in functions.php)
add_action( 'widgets_init', 'naked_register_sidebars' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function naked_scripts()  {

    // get the theme directory style.css and link to it in the header
    wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');

    // add fitvid
    // wp_enqueue_script( 'naked-fitvid', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), NAKED_VERSION, true );

    // add theme scripts
    // wp_enqueue_script( 'naked', get_template_directory_uri() . '/js/theme.min.js', array(), NAKED_VERSION, true );

}
// add_action( 'wp_enqueue_scripts', 'naked_scripts' ); // Register this fxn and allow Wordpress to call it automatcally in the header
add_filter('show_admin_bar', '__return_false'); // отключить

/*add_theme_support('menus');
register_nav_menus([
	'header-menu' => 'Верхняя область',
	'footer-menu' => 'Нижняя область',
	]);*/




if( 'Исполняемый PHP код в контенте' ){

	add_filter( 'the_content', 'content_exec_php', 0 );

	function content_exec_php( $content ){
		return preg_replace_callback( '/\[exec( off)?\](.+?)\[\/exec\]/s', '_content_exec_php', $content );
	}

	function _content_exec_php( $matches ){

		if( ' off' === $matches[1] ){
			return "\n\n<".'pre>'. htmlspecialchars( $matches[2] ) .'</pre'.">\n\n";
		}
		else {
			eval( "ob_start(); {$matches[2]}; \$exec_php_out = ob_get_clean();" );
			return $exec_php_out;
		}

	}

}

/*ADD-COLUMN-ID*/
function add_column( $columns ){
	$columns['post_id_clmn'] = 'ID'; // $columns['Column ID'] = 'Column Title';
	return $columns;
}
add_filter('manage_posts_columns', 'add_column', 5);

function column_content( $column, $id ){
	if( $column === 'post_id_clmn')
		echo $id;
}
add_action('manage_posts_custom_column', 'column_content', 5, 2);
/*ADD-COLUMN-ID-END*/



/*WP-LOGO-STYLE*/
function alter_login_headerurl() {
return ''; //Если оставить поле пустым, то ссылка будет вести на саму себя, то есть на текущую страницу.
}
add_action('login_headerurl','alter_login_headerurl');


function alter_login_headertitle() {
return 'Tallinna Pae Gümnaasium'; //здесь изменяем на свой title
}
add_action('login_headertitle','alter_login_headertitle');


function my_login_logo() { ?>
<style type="text/css">
    #login {padding:7%!important}
    .login h1 a {height:115px!important; margin:0 auto 45px!important}
    .login form {padding:30px!important; border:2px solid #002959!important; box-shadow:none!important}
    .login form, .login #login_error, .login .message, .login .success {border-radius:15px}
    body.login div#login h1 a {background-image:url(<?php echo get_bloginfo('template_directory'); ?>/img/logo.svg)!important; background-size:auto; width:auto}
    .wp-core-ui .button-primary {background:#002959!important; color:#fff!important; border-color:#002959!important; transition:all.3s}
    .button-primary:focus {box-shadow: 0 0 0 1px #fff,0 0 0 3px #002959!important}
    .wp-core-ui .button-primary:hover {background:#d77a06!important; border-color:#d77a06!important; transition:all.3s}
    body {background:#fff!important}
    .wp-core-ui .button-secondary {color:#002959!important}
    .wp-core-ui .button-secondary:hover{color:#d77a06!important}
    .login .button.wp-hide-pw:focus {border-color:#002959!important; box-shadow:0 0 0 1px #002959!important}
    input[type="checkbox"]:focus, input[type="color"]:focus, input[type="date"]:focus, input[type="datetime-local"]:focus, input[type="datetime"]:focus, input[type="email"]:focus, input[type="month"]:focus, input[type="number"]:focus, input[type="password"]:focus, input[type="radio"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="text"]:focus, input[type="time"]:focus, input[type="url"]:focus, input[type="week"]:focus, select:focus, textarea:focus {border-color:#002959!important; box-shadow: 0 0 0 1px #002959!important}
    .login #backtoblog a, .login #nav a {padding:2px; border-radius:5px; background-color:snow}
    .login label {font-size:16px!important}
    .login #backtoblog a, .login #nav a {background:transparent!important}
    .login #login_error, .login .message, .login .success {background:#002959!important; color:#fff!important; border:none!important; box-shadow:0 50px 100px -30px rgba(0,0,0,.5)!important; padding:15px!important}
    
    .login #backtoblog a:hover, .login #nav a:hover, .login h1 a:hover {color:#002959!important; transition:all.3s!important}
    .login #backtoblog a:focus, .login #nav a:focus, .login h1 a:focus {color:#002959!important}
    .login #backtoblog a, .login #nav a {color:#444!important}
    a:focus {box-shadow:0 0 0 1px #002959,0 0 2px 1px #002959!important}
    
    /*#wp-auth-check-wrap #wp-auth-check {padding:0!important}
    #wp-auth-check-wrap #wp-auth-check-form {overflow:hidden}*/
    
</style>

<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
/*WP-LOGO-STYLE-END*/
/*function wp_corenavi() {
  global $wp_query;
  $total = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;
  $a['total'] = $total;
  $a['mid_size'] = 3; // сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; // сколько ссылок показывать в начале и в конце
  $a['prev_text'] = '&laquo;'; // текст ссылки "Предыдущая страница"
  $a['next_text'] = '&raquo;'; // текст ссылки "Следующая страница"

  if ( $total > 1 ) echo '<nav class="pagination">';
  echo paginate_links( $a );
  if ( $total > 1 ) echo '</nav>';
}

add_filter('excerpt_more', function($more) {
	return '...';
});*/