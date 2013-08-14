<div id="footer">
<!-- Please do not edit following code, it may cause your site to stop working! -->
<div class="alignleft">Copyright &copy; <?php echo date('Y'); ?>. All Rights Reserved. Designed by <a href="http://www.md-photoart.de" title="Fototapeten">Fototapeten</a></div>
</div>
</div><!-- end topwrap -->
<?php
 $code = get_option('swt_custom_analytics_code'); echo stripslashes($code);
?>
<?php wp_footer();?>
<?php require_once 'facebook.php'; ?>
</body>
</html>