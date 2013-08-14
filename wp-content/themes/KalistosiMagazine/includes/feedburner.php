<div class="side-widget">
<h3>Subscribe To Our Blog</h3>
<p class="subsc">Sign up to receive breaking news as well as receive other site updates!</p>
<form id="subscribet" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo get_option('swt_email'); ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
        <input type="text" value="Enter your email address..." id="subbox" onfocus="if (this.value == 'Enter your email address...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter your email address...';}" name="email"/>
        <input type="hidden" value="<?php echo get_option('swt_email'); ?>" name="uri"/>
        <input type="hidden" name="loc" value="en_US"/>
</form>
   <a class="rss" href="<?php bloginfo('rss2_url'); ?>">RSS Feed</a>
   <a class="rss fright" href="<?php bloginfo('comments_rss2_url'); ?>">Comments Feed</a>
</div>