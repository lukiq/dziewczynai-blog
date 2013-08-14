<div id="contentwrap">
<div class="inside">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

                <div class="date"><?php the_translateDate(); ?></div>

				<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

                <div class="clearfix"></div>

                <?php if ( has_post_thumbnail() ) { ?>
                <div class="alignright imgwrap">
                <?php if ( function_exists( 'get_the_image' ) ) {
                get_the_image( array( 'custom_key' => array( 'post_thumbnail' ), 'default_size' => 'full', 'image_class' => 'alignright', 'width' => '163', 'height' => '135' ) ); } ?>
                <a class="more-link" href="<?php the_permalink() ?>#more">Read More</a>
                </div>
                <?php } ?>

				<div class="entry excerpt">
					<?php the_excerpt(''); ?>
				</div>
                <div class="meta">
                 <?php 
				 /*
				 comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;', 'comm'); 
				  * 
				  */ ?>
                </div>

			</div>
            <div class="sep"></div>
		<?php endwhile; ?>

		<div class="navigation">
        <?php
            include('includes/wp-pagenavi.php');
            if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
        ?>
		</div>

	<?php endif; ?>
</div>
</div>