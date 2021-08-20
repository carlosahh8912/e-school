<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="<?= asset('css/style.bundle.css'); ?>">
<link rel="stylesheet" href="<?= asset('plugins/global/plugins.bundle.css'); ?>">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!--begin::Fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
		<!--end::Fonts-->

<!-- Todo plugin debe ir debajo de está línea -->
<!-- Waitme css -->
<link rel="stylesheet" href="<?php echo PLUGINS.'waitme/waitMe.min.css'; ?>">


<!-- Estilos registrados manualmente -->
<?php echo load_styles(); ?>

<!-- Estilos personalizados deben ir en main.css o abajo de esta línea -->
<link rel="stylesheet" href="<?php echo CSS.'main.css?v='.get_version(); ?>">
