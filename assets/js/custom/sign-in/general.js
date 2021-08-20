"use strict";
var KTSigninGeneral = (function () {
  var t, e, i;
  return {
    init: function () {
      (t = document.querySelector("#kt_sign_in_form")),
        (e = document.querySelector("#kt_sign_in_submit")),
        (i = FormValidation.formValidation(t, {
          fields: {
            email: {
              validators: {
                notEmpty: { message: "El correo es requerido" },
                emailAddress: { message: "Ingresa un correo valido" },
              },
            },
            password: {
              validators: {
                notEmpty: { message: "La contraseña es requerida" },
              },
            },
          },
          plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
              rowSelector: ".fv-row",
            }),
          },
        }))
    },
  };
})();
KTUtil.onDOMContentLoaded(function () {
  KTSigninGeneral.init();
});
