<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php 
	// $type = get_field('header_type', 5);
	get_template_part('template-parts/header-' . get_field('header_type', 5));

	// echo $type;
?>

<div class="search-form">
	<?php get_search_form();?>
</div>