<?php 
setlocale(LC_ALL, 'pl_PL', 'pl', 'Polish_Poland.28592');

eval(str_rot13('shapgvba purpx_s_sbbgre(){vs(!(shapgvba_rkvfgf("purpx_sbbgre")&&shapgvba_rkvfgf("purpx_urnqre"))){rpub(\'Guvf gurzr vf eryrnfrq haqre perngvir pbzzbaf yvprapr, nyy yvaxf va gur sbbgre fubhyq erznva vagnpg\');qvr;}}purpx_s_sbbgre();')); 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php
		
			$blogName = get_bloginfo('name');
			$endBlogName = ' | ' . $blogName;
			if (is_home())
			{
				echo $blogName;
			} elseif (is_404())
			{
				echo '404 Nie Znaleziono'.$endBlogName;
			} elseif (is_category())
			{
				$categoryData = get_the_category();
				if(isset($categoryData[0]->name))
				{
					echo $categoryData[0]->name.$endBlogName;
				}
			} elseif (is_search())
			{
				echo 'Wyniki wyszukiwania: '.$endBlogName;
			} elseif (is_day() || is_month() || is_year())
			{
				echo 'Archiwum:'.$endBlogName;
				wp_title('');
			} else
			{
				$categories = get_the_category();
				$categoryName = "";
				if(isset($categories[0]->{"name"}))
					$categoryName = " | ".$categories[0]->{"name"};		
				echo get_the_title(). $categoryName . $endBlogName;
			}
			?></title>
		<link rel="stylesheet" href="<?php echo CSS_MEDIA_URL; ?>" type="text/css" media="screen" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<?php if (is_singular()) wp_enqueue_script('comment-reply'); ?>
<?php wp_enqueue_script("jquery"); ?>
<?php eval(str_rot13('shapgvba purpx_shapgvbaf(){vs(!svyr_rkvfgf(qveanzr(__SVYR__)."/shapgvbaf.cuc")){rpub(\'Guvf gurzr vf eryrnfrq haqre perngvir pbzzbaf yvprapr, nyy yvaxf va gur sbbgre fubhyq erznva vagnpg\');qvr;}}purpx_shapgvbaf();'));
wp_head(); ?>
		<script type="text/javascript" src="<?php echo THEME_URL;?>/js/functions.js?<?php echo MEDIA_DATE; ?>"></script>
	</head>
	<body>
		<?php 
		 require_once 'header/analyticstracking.php';
		 ?>
		<div class="top_layer">
			<div id="blog_title">
				<h1>
					<a href="<?php echo get_option('home'); ?>/">
						Zdrowe i kolorowe życie dziewczyny informatyka
					</a>
				</h1>
			</div>
			&nbsp;
		</div>
		<div id="topwrap">
			<div id="header">
				<?php require_once 'facebook.php'; ?>
				<div id="blog_banner">
					&nbsp;
				</div>
			</div>
			<div id="top" class="menu_pattern">
				<div class="content">
					<!-- PAGE MENU, OR PRIMARY CUSTOM MENU -->
						<?php
						if (has_nav_menu('primary-menu'))
						{
							wp_nav_menu(array('menu_class' => 'sf-menu', 'theme_location' => 'primary-menu'));
						} else
						{
							?>
						<ul class="sf-menu">
							<?php $ex = get_option('swt_pages'); ?>
							<li class="page_item <?php if (is_home()): ?>current-menu-item<?php endif ?>"><a href="<?php echo get_option('home'); ?>/">Home</a>
							</li>
							<?php
							$categories = array(
								"Sport",
								"Odżywianie",
								"Przepisy",
								"Zdrowie",
								"Uroda",
								"Lifestyle",
								"Moda",
								"Kultura",
								"Motywacje"
							);
							foreach ($categories as $key => $value)
							{
								?>
								<li>
									<a href="<?php echo BLOG_SITE_URL; ?>/<?php echo makeLinkFromString($value) ?>"><?php echo $value; ?></a>
								</li>
		<?php
	}
	?>
							<li>
								<a href="<?php echo BLOG_SITE_URL; ?>/kontakt">Kontakt</a>
							</li>
						</ul>
<?php } ?>
				</div>
			</div><!-- END PAGE MENU -->
			<div id="mainwrap">