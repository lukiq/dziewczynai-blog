<?php get_header(); ?>

<div id="contentwrap">
	<div class="inside" id="infinite-scroll-di">

<?php 

		require_once 'posts.php';
?>
	</div>
	<div class="navigation">
			<?php
			include('includes/wp-pagenavi.php');
			if (function_exists('wp_pagenavi'))
			{
				wp_pagenavi();
			}
			?>
	</div>
</div>
<?php
get_sidebar(); ?>
<?php get_footer(); ?>
