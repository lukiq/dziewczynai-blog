<?php get_header(); ?>

<div id="contentwrap">
	<div class="inside" id="infinite-scroll-di">

<?php 

		require_once 'posts.php';
?>
	</div>
	<?php require_once 'navigation.php';?>
</div>
<?php
get_sidebar(); ?>
<?php get_footer(); ?>
