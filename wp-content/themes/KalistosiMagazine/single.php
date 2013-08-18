<?php get_header(); ?>

<div id="contentwrap" class="single">
<div class="inside">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				<div class="entry">
					<?php the_content(''); ?>
				</div>
				<div class="date added_post">
					Dodano: <?php echo get_the_time('d-m-Y'); ?>
				</div>
				<div class="clear">
				</div>
                <div class="meta">
                W kategorii: <?php the_category(', '); ?>
				<br />
				<?php the_tags('Tagi: '); ?>
                </div>

			</div>
            <div class="sep"></div>

            <?php comments_template(); ?>

		<?php endwhile; ?>

	<?php endif; ?>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
