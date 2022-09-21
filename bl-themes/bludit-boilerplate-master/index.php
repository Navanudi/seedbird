<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
		<?php $loadtime = microtime(true); ?>
		<!--
			######################################################
			Bludit Boilerplate. No Bullshit. Build YOUR OWN theme.
			by Paul (hxii) Glushak
			######################################################
			https://paulglushak.com/bludit-boilerplate/
			######################################################
		-->

		<?php echo Theme::favicon('SeedBird.png'); ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

		<!-- CSS only -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"      
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="icon" href="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=">
		<?php echo Theme::metaTags( 'title' ); ?>
		<?php echo Theme::metaTags( 'description' ); ?>
		<?php echo Theme::css( 'css/style.min.css' ); ?>
		<?php echo Theme::javascript( 'javascript/main.js' );?>
		<?php  echo Theme::jquery();?>
		<?php Theme::plugins( 'siteHead' ) ?>
	</head>
	<body class="">
		<div class="container-fluid<?php echo ' template-'.$page->template(); ?>">
			<?php Theme::plugins( 'siteBodyBegin' ) ?>
			<?php include( 'inc/header.php' ); ?>
			<?php if ( $WHERE_AM_I === 'page' ) {
				if ( ! empty( $page->template() ) && file_exists( PATH_THEMES.$site->theme().'/inc/'.$page->template().'.php' ) ) {
					include( "inc/{$page->template()}.php" );
				} else {
					include( 'inc/page.php' );
				}
			} elseif ( $WHERE_AM_I === 'category' ) {
				include( 'inc/category.php' );
			} elseif ( $WHERE_AM_I === 'tag' ) {
				include ( 'inc/tag.php' );
			} elseif ( $WHERE_AM_I === 'about' ) {
				include('inc/about.php');
			} elseif ( $WHERE_AM_I === 'projects' ) {
				include('inc/projects.php');
			} elseif ( $WHERE_AM_I === 'journal' ) {
				include('inc/journal.php');
			}elseif ($WHERE_AM_I === 'donate') {
				include('inc/donate.php');
			}elseif ($WHERE_AM_I === 'get-involved') {
				include('inc/get-involved.php');
			}else {
				include( 'inc/home.php' );
			} ?>
			<!--Javascript-->

			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


			<?php include( 'inc/footer.php' ); ?>
			<?php echo Theme::plugins('siteBodyEnd') ?>
		</div>
	</body>

</html>
