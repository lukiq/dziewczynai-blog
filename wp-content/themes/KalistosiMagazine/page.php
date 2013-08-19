<?php get_header(); ?>

<div id="contentwrap">
<div class="inside page">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">

				<h1 class="title"><?php the_title(); ?></h1>

				<div class="entry">
					<?php the_content(''); ?>
				</div>
			</div>
            <div class="sep"></div>

            <?php //comments_template(); ?>

		<?php endwhile; ?>

	<?php endif; ?>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
