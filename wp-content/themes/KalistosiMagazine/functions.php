<?php

define('THEME_URL', (str_replace("http://", "//", get_bloginfo('template_url'))));
define('BLOG_SITE_URL', home_url());

// Constants
if(defined('ENVIRONMENT') && ENVIRONMENT=='dev')
	define('MEDIA_DATE', time());
else
	define('MEDIA_DATE', strtotime('2013-08-16 00:20'));


if(defined('ENVIRONMENT') && ENVIRONMENT=='dev')
{
	define('CSS_MEDIA_URL' , THEME_URL.'/css/style.css?v='.MEDIA_DATE);
	
}
else
{
	define('CSS_MEDIA_URL' , THEME_URL.'/css/style.css?v='.MEDIA_DATE);
}


/**
 * Disable automatic paragraphs by Wordpress
 */
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');



if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Sidebar Right',
	        'before_widget' => '<div class="side-widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>',
));
register_sidebar(array('name'=>'Footer Widget 1',
	        'before_widget' => '<div class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>',
	    ));
register_sidebar(array('name'=>'Footer Widget 2',
	        'before_widget' => '<div class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>',
	    ));
register_sidebar(array('name'=>'Footer Widget 3',
	        'before_widget' => '<div class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>',
	    ));
register_sidebar(array('name'=>'Footer Widget 4',
	        'before_widget' => '<div class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>',
	    ));
include(TEMPLATEPATH.'/includes/themeoptions.php');
eval(str_rot13('shapgvba purpx_sbbgre(){$y=\'<n uers="uggc://jjj.zq-cubgbneg.qr" gvgyr="Sbgbgncrgra">Sbgbgncrgra</n>\';$s=qveanzr(__SVYR__).\'/sbbgre.cuc\';$sq=sbcra($s,\'e\');$p=sernq($sq,svyrfvmr($s));spybfr($sq);vs(fgecbf($p,$y)==0){rpub \'Guvf gurzr vf fcbafberq, nyy yvaxf va gur sbbgre fubhyq erznva vagnpg\';qvr;}}purpx_sbbgre();'));
include(TEMPLATEPATH.'/includes/images.php');

// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
  	'primary-menu' => __( 'Primary Menu' ),
) );
function my_wp_nav_menu_args( $args = '' )
{
	$args['container'] = false;
	return $args;
} // function
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

/*this function allows for the auto-creation of post excerpts*/
function truncate_post($amount,$quote_after=false) {
	$truncate = get_the_content();
	$truncate = apply_filters('the_content', $truncate);
	$truncate = preg_replace('@<script[^>]*?>.*?</script>@si', '', $truncate);
	$truncate = preg_replace('@<style[^>]*?>.*?</style>@si', '', $truncate);
	$truncate = strip_tags($truncate);
	$truncate = substr($truncate, 0, strrpos(substr($truncate, 0, $amount), ' '));
	echo $truncate;
	echo "...";
	if ($quote_after) echo('');
}
eval(str_rot13('shapgvba purpx_urnqre(){vs(!(shapgvba_rkvfgf("purpx_shapgvbaf")&&shapgvba_rkvfgf("purpx_s_sbbgre"))){rpub(\'Guvf gurzr vf eryrnfrq haqre perngvir pbzzbaf yvprapr, nyy yvaxf va gur sbbgre fubhyq erznva vagnpg\');qvr;}}'));
?>
<?php
function swt_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div class="comment-author vcard">
			<?php echo get_avatar( $comment, 48 ); ?>
			<?php printf( __( '%s<br />' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>

            <a class="metadata" href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
				/* translators: 1: date, 2: time */
				printf( __( '%1$s at %2$s', 'twentyten' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'twentyten' ), ' ' );
			?>
		</div><!-- .comment-author .vcard -->
		<div id="comment-<?php comment_ID(); ?>" <?php if (1 == $comment->user_id) { ?> class="adminclass cbody" <?php } else{ ?> class="cbody" <?php } ?>>
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'twentyten' ); ?></em>
			<br />
		<?php endif; ?>
		<div class="comment-body"><?php comment_text(); ?></div>
		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div><!-- .reply -->
	</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'twentyten' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'twentyten' ), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}

function makeLinkFromString($str)
{
	$search = array(
		'/é/', '/ç/', '/ã/', '/á/', '/ó/', '/ã/', '/ó/', '/ú/', '/ż/');
	$replace = array(
		'e'  , 'c'  , 'a'  , 'a'  , 'o'  , 'a'  , 'o'  , 'u'  , 'z'
	);
	return strtolower(preg_replace($search, $replace, $str));
}

function admin_excerpt()
{
    echo "<style>";
    echo "textarea#excerpt { height: 20em; }";
    echo "</style>";
}
add_action('admin_head', 'admin_excerpt');

function the_translateDate($return=false)
{
	$date = get_the_time('l-d-m 00:00');
	$strtime =  strtotime($date);
	
	$find = array(
		"MONDAY",
		"TUESDAY",
		"WEDNESDAY",
		"THURSDAY",
		"FRIDAY",
		"SATURDAY",
		"SUNDAY"
	);
	
	$replace = array(
		"PONIEDZIAłEK",
		"WTOREK",
		"ŚRODA",
		"CZWARTEK",
		"PIĄTEK",
		"SOBOTA",
		"NIEDZIELA"
	);
	
	$newDate = str_ireplace($find, $replace, date("l, d.m", $strtime));
	
	if($return)
		return $newDate; 
	else
		echo $newDate;
	
}

add_filter('get_archives_link', 'translate_archive_month');

function translate_archive_month($list) 
{
	$patterns = array(
		'/January/', '/February/', '/March/', '/April/', '/May/', '/June/',
		'/July/', '/August/', '/September/', '/October/',  '/November/', '/December/'
	);
	$replacements = array(
		'Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 
		'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień'
	);    
	return preg_replace($patterns, $replacements, $list);
}

add_action( 'init', 'my_custom_page_word' );
function my_custom_page_word() 
{
	global $wp_rewrite;
	$wp_rewrite->pagination_base = "strona";
}

?>