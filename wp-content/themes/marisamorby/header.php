<?php
/**
 * The default header template
 *
 * @package     WordPress
 * @subpackage  Hoverboard
 * @since       0.1.0
 */

// Sets a title for the site's home link
$title = esc_attr(get_bloginfo('name')) . ' &mdash; '
       . esc_attr(get_bloginfo('description'));

/* 
 * To override defaults, pass wp_nav_menu config options to this method as an array
 * For config options, see http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
$config = array('menu_class' => 'nav navbar-nav navbar-right');
$nav = Hoverboard::get_nav_menu($config);

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<title><?php wp_title('&rsaquo;'); ?></title>

<!-- Font Awesome link that makes the social icon buttons appear -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


<?php wp_head(); ?>

</head>

<body class="<?= Hoverboard::get_wrapper_class() ?>">

<div class="nav">
	<ul id="nav">
  		<li><a href="/">Home</a></li>
  		<li><a href="/blog/">Blog</a></li>
  		<li><a href="/about/">About</a></li>
	</ul>

	<div class="search">
  		<input type="search" placeholder="search..." />
	</div>
	
</div>
