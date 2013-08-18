
<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

					<div class="date"><?php the_translateDate(); ?></div>

					<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

					<div class="clearfix"></div>

		<?php if (has_post_thumbnail())
		{ ?>
						<div class="alignright imgwrap">
			<?php if (function_exists('get_the_image'))
			{
				get_the_image(array('custom_key' => array('post_thumbnail'), 'default_size' => 'full', 'image_class' => 'alignright', 'width' => '163', 'height' => '135'));
			}
			?>
			                <a class="more-link" href="<?php the_permalink() ?>#more">Read More</a>
						</div>
		<?php } ?>

					<div class="entry excerpt">
					<?php the_excerpt(''); ?>
					<div class="more_link">
						<a rel="nofollow" href="<?php the_permalink() ?>">czytaj więcej</a>
					</div>
				</div>
<!--					<div class="entry">
		<?php 
		//the_content('');  
		/*?>
						
						<p><?php 
						
						truncate_post(400, true); ?>
						</p>
						* 
						*/?>
					</div>-->
					<?php
					/*
					<div class="meta">
						Posted by <?php the_author(); ?> &nbsp;
					<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;', 'comm'); ?>
					</div>
					
					*/?>

				</div>
				<div class="sep"></div>
	<?php endwhile; ?>
<?php endif; ?>