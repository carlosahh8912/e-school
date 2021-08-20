<!DOCTYPE html>
<html lang="<?php echo SITE_LANG; ?>">
<!--begin::Head-->

<head>
    <meta charset="utf-8" />
    <title><?php echo isset($d->title) ? $d->title . ' - ' . get_sitename() : 'Bienvenido - ' . get_sitename(); ?></title>
    <meta name="description" content="Jet admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="keywords" content="Jet theme, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon del sitio -->
	<?php echo get_favicon(); ?>
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="<?= asset('plugins/global/plugins.bundle.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= asset('css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="bg-white page-loading-enabled page-loading">