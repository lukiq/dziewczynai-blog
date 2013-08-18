<?php get_header(); ?>

<div id="contentwrap">
	<div class="inside" id="infinite-scroll-di">

<?php 

		require_once 'posts.php';
?>
	</div>
	<div class="navigation">
			<div class="previous navicont"><?php previous_posts_link('&laquo; Poprzednia strona<span>&nbsp;</span>') ?></div>
			<div class="next navicont"><?php next_posts_link('Następna strona &raquo;<span>&nbsp;</span>') ?></div>
			<?php
//			include('includes/wp-pagenavi.php');
//			if (function_exists('wp_pagenavi'))
//			{
//				wp_pagenavi();
//			}
			?>
	</div>
</div>
<?php
get_sidebar(); ?>
<?php get_footer(); ?>
