<?php get_header(); ?>


<div id="contentwrap" class="archive-posts">
<div class="inside">

		<?php if(have_posts()): ?>
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		<?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">Posty dla kategorii '<?php single_cat_title(); ?>'</h2>
		<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">Posty oznaczone etykietą '<?php single_tag_title(); ?>'</h2>
		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Posty oznaczone datą <?php the_time('F jS, Y'); ?></h2>
		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Posty z miesiąca <?php the_time('F, Y'); ?></h2>
		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Posty z roku <?php the_time('Y'); ?></h2>
		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Posty autora</h2>
		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Archiwum bloga</h2>
		<?php } ?>
<?php 

		require_once 'posts.php';
?>

	<?php endif; ?>
</div>
	<?php require_once 'navigation.php';?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
