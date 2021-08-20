<?php require_once INCLUDES . 'inc_header_min.php'; ?>

<!--begin::loader-->
<div class="page-loader flex-column">
  <img alt="Logo" class="max-h-75px" src="<?= get_logo() ?>" />
  <div class="d-flex align-items-center mt-5">
    <span class="spinner-border text-primary" role="status"></span>
    <span class="text-muted fs-6 fw-bold ms-5">Loading...</span>
  </div>
</div>
<!--end::Loader-->
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
  <style>
    html,
    body {
      padding: 0;
      margin: 0;
    }
  </style>

  <!--begin::Authentication - Sign-in -->
  <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(/jet-html-pro/assets/media/illustrations/progress-hd.png)">
    <!--begin::Content-->  
      <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
        <?php echo Flasher::flash(); ?>
        
      <!--begin::Logo-->
      <a href="#" class="mb-12">
        <img alt="Logo" src="<?= get_logo() ?>" class="h-150px" />
      </a>
      <!--end::Logo-->
      <!--begin::Wrapper-->
      <div class="w-lg-500px bg-white rounded shadow-sm p-10 p-lg-15 mx-auto">
        <!--begin::Form-->
        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"action="login/post_login" method="post">
          <?php echo insert_inputs(); ?>
          <!--begin::Heading-->
          <div class="text-center mb-8">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">Ingresa a E-School</h1>
            <!--end::Title-->
          </div>
          <!--begin::Heading-->
          <!--begin::Input group-->
          <div class="fv-row mb-8">
            <!--begin::Label-->
            <label class="form-label fs-6 fw-bolder text-dark">Correo</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input class="form-control form-control-lg form-control-solid" type="email" name="email" autocomplete="off" required/>
            <!--end::Input-->
          </div>
          <!--end::Input group-->
          <!--begin::Input group-->
          <div class="fv-row mb-10">
            <!--begin::Wrapper-->
            <div class="d-flex flex-stack mb-2">
              <!--begin::Label-->
              <label class="form-label fw-bolder text-dark fs-6 mb-0">Contraseña</label>
              <!--end::Label-->
              <!--begin::Link-->
              <a href="#" class="link-primary fs-6 fw-bolder">¿Olvidaste tu contraseña?</a>
              <!--end::Link-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Input-->
            <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" required/>
            <!--end::Input-->
          </div>
          <!--end::Input group-->
          <!--begin::Actions-->
          <div class="text-center">
            <!--begin::Submit button-->
            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
              <span class="indicator-label">Continuar</span>
              <span class="indicator-progress">Cargando...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <!--end::Submit button-->
            
          </div>
          <!--end::Actions-->
        </form>
        <!--end::Form-->
      </div>
      <!--end::Wrapper-->
    </div>
    <!--end::Content-->
    <?php require_once INCLUDES . 'inc_footer_min.php'; ?>