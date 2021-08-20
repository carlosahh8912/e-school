<!DOCTYPE html>
<html lang="<?php echo SITE_LANG; ?>">
<!--begin::Head-->

<head>
	<base href="<?php echo BASEPATH; ?>">
	<meta charset="utf-8" />
	<title><?php echo isset($d->title) ? $d->title . ' | ' . get_sitename() : get_sitename(); ?></title>
	<meta name="description" content="Jet admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
	<meta name="keywords" content="Jet theme, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
	<link rel="canonical" href="Https://preview.keenthemes.com/jet-free" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Favicon del sitio -->
	<?php echo get_favicon(); ?>

	<!-- inc_styles.php -->
	<?php require_once INCLUDES . 'inc_styles.php'; ?>

</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">

			<?php require_once INCLUDES . 'inc_aside.php'; ?>

			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

			<?php require_once INCLUDES . 'inc_nav.php'; ?>