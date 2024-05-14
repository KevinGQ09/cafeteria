$(document).ready(function () {
  const rutaRaiz = "/Proyecto/";
  const rutaPlugins = '/Proyecto/';
  validarCampos("#nombre", 3, "#group-nombre", validarNombre);
  validarCampos("#paterno", 3, "#group-paterno", validarApellido);
  validarCampos("#materno", 3, "#group-materno", validarApellido);
  validarCampos("#correo", 4, "#group-correo", validarCorreo);
  validarCampos("#contraseña", 4, "#group-contraseña", validarContraseña);

  function validarCampos(selector, tamaño, idSpan, validar) {
    $(selector).blur(function (e) {
      e.preventDefault();
      let valorCampo = $(this).val();
      if (valorCampo.length >= tamaño) {
        if (validar(valorCampo)) {
          $(this).removeClass("border-danger is-invalid");
          $(this).addClass("border-success is-valid");
          $(idSpan).removeClass("span-color");
          $(idSpan).removeClass("group-danger");
          $(idSpan).addClass("group-success");
        } else {
          $(this).removeClass("border-success is-valid");
          $(this).addClass("border-danger is-invalid");
          $(idSpan).removeClass("span-color");
          $(idSpan).removeClass("group-success");
          $(idSpan).addClass("group-danger");
        }
      } else {
        $(this).removeClass("border-success is-valid");
        $(this).addClass("border-danger is-invalid");
        $(idSpan).removeClass("span-color");
        $(idSpan).removeClass("group-success");
        $(idSpan).addClass("group-danger");
      }
    });
  }

  //Expresiones Regulares
  function validarNombre(nombre) {
    var validar = /^[A-ZÁÉÍÓÚÑ][a-záéíóúñ]+(?:\s[A-ZÁÉÍÓÚÑ][a-záéíóúñ]+)*$/;
    return validar.test(nombre);
  }
  function validarApellido(apellido) {
    var validar = /^[A-ZÁÉÍÓÚÑ][a-záéíóúñ]+$/;
    return validar.test(apellido);
  }

  function validarCorreo(correo) {
    var validar = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return validar.test(correo);
  }

  function validarContraseña(contraseña) {
    var validar = /^[A-Z][0-9a-zA-Z]*[!@#$%^&*]$/;
    return validar.test(contraseña);
  }

  function resetearCampos() {
    // Restablecer campos de texto
    $("#nombre, #paterno, #materno, #correo, #contraseña").removeClass('border-success is-valid border-danger is-invalid');
    $("#nombre, #paterno, #materno, #correo, #contraseña").val('');
    $("#group-nombre, #group-paterno, #group-materno, #group-correo, #group-contraseña").removeClass("group-success");
    $("#group-nombre, #group-paterno, #group-materno, #group-correo, #group-contraseña").addClass("span-color")
    $("#exampleCheck1").prop("checked", false);
  }

  $("#registro").submit(function (e) {
    e.preventDefault();
    let nombre = $("#nombre").val();
    let paterno = $("#paterno").val();
    let materno = $("#materno").val();
    let correo = $("#correo").val();
    let contraseña = $("#contraseña").val();


    if (nombre !== "" && paterno !== "" && materno !== "" && correo !== "" && contraseña !== "") {
      if (validarNombre(nombre) && validarApellido(paterno) && validarApellido(materno) &&
        validarCorreo(correo) && validarContraseña(contraseña)) {
        if ($('input[type="checkbox"]').is(':checked')) {

          const datos = {
            nombre: nombre,
            paterno: paterno,
            materno: materno,
            correo: correo,
            contraseña: contraseña
          };

          $.ajax({
            type: "POST",
            url: rutaRaiz + "PHP/usuarios/registrar-usuarios.php",
            data: datos,
            success: function (response) {
              if (!response.error) {
                if (response == 5) {
                  VanillaToasts.create({
                    title: 'FELICIDADES!',
                    text: 'Usuario Registrado Correctamente',
                    type: 'success', //valores aceptados: success, warning, info, error
                    icon: rutaPlugins + 'plugins/toasts/icons/icon_success.png',
                    timeout: 3000, // visible 3 segundos
                  });
                } else if (response == 3) {
                  VanillaToasts.create({
                    title: 'ADVERTENCIA!',
                    text: 'Correo ya Existente',
                    type: 'error', //valores aceptados: success, warning, info, error
                    icon: rutaPlugins + 'plugins/toasts/icons/icon_error.png',
                    timeout: 3000, // visible 3 segundos
                  });
                }
                resetearCampos();

              }

            }
          });
        } else {
          VanillaToasts.create({
            title: 'ADVERTENCIA!',
            text: 'Acepta Terminos y Condiciones',
            type: 'info', //valores aceptados: success, warning, info, error
            icon: rutaPlugins + 'plugins/toasts/icons/icon_info.png',
            timeout: 3000, // visible 3 segundos
          });
        }

      } else {
        VanillaToasts.create({
          title: 'ADVERTENCIA!',
          text: 'Campos no Validos',
          type: 'warning', //valores aceptados: success, warning, info, error
          icon: rutaPlugins + 'plugins/toasts/icons/icon_warning.png',
          timeout: 3000, // visible 3 segundos
        });
      }
    } else {
      VanillaToasts.create({
        title: 'ADVERTENCIA!',
        text: 'Existen Campos Vacios',
        type: 'info', //valores aceptados: success, warning, info, error
        icon: rutaPlugins + 'plugins/toasts/icons/icon_info.png',
        timeout: 3000, // visible 3 segundos
      });
    }


  });

});
