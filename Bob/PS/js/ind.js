$('#login-button').click(function(){
    $('#login-button').fadeOut("slow",function(){
      $("#container").fadeIn();
      TweenMax.from("#container", .4, { scale: 0, ease:Sine.easeInOut});
      TweenMax.to("#container", .4, { scale: 1, ease:Sine.easeInOut});
    });
  });
  
  $(".close-btn").click(function(){
    TweenMax.from("#container", .4, { scale: 1, ease:Sine.easeInOut});
    TweenMax.to("#container", .4, { left:"0px", scale: 0, ease:Sine.easeInOut});
    $("#container, #forgotten-container").fadeOut(800, function(){
      $("#login-button").fadeIn(800);
    });
  });
  
  /* Forgotten Password */
  $('#forgotten').click(function(){
    $("#container").fadeOut(function(){
      $("#forgotten-container").fadeIn();
    });
  });
  
// Función para mostrar el contenedor de registro
function showRegistrationContainer() {
  $("#container").fadeOut(function() {
    $("#register-container").fadeIn();
  });
}

// Función para ocultar el contenedor de registro
$(".close-btn").click(function(){
  TweenMax.from("#container", .4, { scale: 1, ease:Sine.easeInOut});
  TweenMax.to("#container", .4, { left:"0px", scale: 0, ease:Sine.easeInOut});
  $("#container, #register-container").fadeOut(800, function(){
    $("#login-button").fadeIn(800);
  });
});

// Mostrar u ocultar el contenedor de registro al hacer clic en el enlace "Registro"
$("#register").click(function(e) {
  e.preventDefault(); // Evitar que el enlace cambie de página
  if ($("#register-container").is(":visible")) {
    // Si el formulario de registro está visible, ciérralo
    hideRegistrationContainer();
  } else {
    // Si el formulario de registro no está visible, ábrelo
    showRegistrationContainer();
  }
});

// Ocultar el contenedor de registro al hacer clic en el botón de cierre dentro del formulario de registro
$("#register-container .close-btn").click(function() {
  hideRegistrationContainer();
});





   