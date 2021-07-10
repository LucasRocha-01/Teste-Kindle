
<!doctype html>
<head>
	<?php wp_head(); ?>
	<link rel="icon" type="image/png" href="https://image.flaticon.com/icons/png/512/1032/1032917.png"/>
	<? echo "<link rel=”stylesheet” type=”text/css” href=”style.css” />"?>
	<title><?php wp_title() ?></title>
</head>

<div class="global-menu-container">
	<div>
		<li><a href="<?php get_option('home') ?>" class="menu-item"><img  class="global-logo" src="https://image.flaticon.com/icons/png/512/1032/1032917.png" alt="logo" srcset=""></a></li>
	</div>
	<div class="global-links">
		<ul class="menu-links pz">
			<?php wp_nav_menu() ?>
		</ul>
	</div>
	<div class="menu-search">
		<?php get_search_form(); ?>
	</div>
</div> 