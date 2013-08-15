<div id="sidebar">

<?php if (get_option('swt_fcats') == 'Hide') { ?>
<?php { echo ''; } ?>
<?php } else { include(TEMPLATEPATH . '/includes/featured-cats.php'); } ?>
<?php 

//if (get_option('swt_flickr') == 'Hide') 
//{ 
//	echo ''; 
//} 
//else 
//{ 
//	include(TEMPLATEPATH . '/includes/flickr.php'); 
//} 

//if (get_option('swt_feedburner') == 'Hide') { 
//echo ''; 
//} else { 
//include(TEMPLATEPATH . '/includes/feedburner.php'); } 
?>

    <?php if (!function_exists('dynamic_sidebar')
	|| !dynamic_sidebar()) : ?>

    <div class="side-widget">
    <h3>Pages</h3>
    <ul><?php wp_list_pages('title_li=' ); ?></ul>
    </div>

    <div class="side-widget">
    <h3>Categories</h3>
    <ul>
    <?php wp_list_categories('title_li=' ); ?>
    </ul>
    </div>

    <div class="side-widget">
    <h3>Recent Posts</h3>
    <ul>
    <?php wp_get_archives('title_li=&type=postbypost&limit=5'); ?>
    </ul>
    </div>

    <?php endif; ?>
</div>
<div style="clear:both"></div>
</div>

<div id="sb-wrap">
<div id="sidebar2">

<div id="footer1">
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>
<?php
/*
    <div class="widget">
      <h3>Customer Service</h3>
      <ul>
      <?php wp_list_bookmarks('title_li=&categorize=0');  ?>
      </ul>
   </div>
 * 
 */
?>

<?php endif; ?>
</div>

<div id="footer2">
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(3) ) : else : ?>
<?php 
/*
    <div class="widget">
    <h3>Informations</h3>
    <ul><?php wp_list_pages('title_li=&depth=1' ); ?></ul>
    </div>
*/
?>
<?php endif; ?>
</div>

<div id="footer3">

<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(4) ) : else : ?>
<?php
/*
    <div class="widget">
      <h3>Extras</h3>
      <ul>
      <?php wp_list_bookmarks('title_li=&categorize=0');  ?>
      </ul>
   </div>
*/
?>
<?php endif; ?>
</div>

<div id="footer4">
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(5) ) : else : ?>
<?php
/*
    <div class="widget">
    <h3>Text Widget</h3>
    <p>
    Aliquam ut tellus ligula. Nam blandit
massa nec neque rutrum a euismod t
ellus ultricies! Phasellus nulla tellus,
 fringilla quis tristique ornare, condi
mentum non erat. Aliquam congue or
nare varius.
    </p>
    </div>
*/
?>
<?php endif; ?>
</div>
</div></div>
