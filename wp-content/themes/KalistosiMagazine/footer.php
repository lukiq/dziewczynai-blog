<div id="footer">
</div>
</div><!-- end topwrap -->
<?php
$code = get_option('swt_custom_analytics_code');
echo stripslashes($code);
?>
<?php wp_footer(); ?>
<?php
require_once 'footer/template.php'
?>
</body>
</html>