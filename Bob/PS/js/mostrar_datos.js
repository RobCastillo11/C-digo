document.addEventListener('DOMContentLoaded', () => {
    // Función para mostrar el contenido de una pestaña y ocultar las demás
    function mostrarPestana(pestanaId) {
        const pestanas = document.querySelectorAll('.pestaña');
        pestanas.forEach(pestana => {
            pestana.style.display = 'none';
        });

        const pestanaSeleccionada = document.getElementById(pestanaId);
        pestanaSeleccionada.style.display = 'block';
    }

    // Agrega un evento de escucha para cada enlace de pestaña
    document.addEventListener('DOMContentLoaded', () => {
        const enlacesPestanas = document.querySelectorAll('.pestanas a');
        enlacesPestanas.forEach(enlace => {
            enlace.addEventListener('click', e => {
                e.preventDefault();
                const pestanaId = e.target.getAttribute('href').substring(1);
                mostrarPestana(pestanaId);
            });
        });

        // Muestra la pestaña "Formulario 1" por defecto al cargar la página
        mostrarPestana('form1');
    });

    // Crear el contenido de los formularios
    const formContainer = document.getElementById("form-container");
    const formSelector = document.getElementById("formSelector");

    var newValue = ""; 
    console.log("inicio");
    const formTemplates = {
        form1: `
            <form id="form1" method="post" class="small-form" action="guardar_comentario.php"  data-form-id="1">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="NO_EMPLEADO" class="small-label">NO_EMPLEADO:</label>
                            <input type="text" class="form-control form-control-sm small-input" id="NO_EMPLEADO" name="NO_EMPLEADO" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="NOMBRE" class="small-label">NOMBRE(S):</label>
                            <input type="text" class="form-control form-control-sm small-input" id="NOMBRE" name="NOMBRE">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="AP" class="small-label">APELLIDO PATERNO:</label>
                            <input type="text" class="form-control form-control-sm small-input" id="AP" name="AP">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="AM" class="small-label">APELLIDO MATERNO:</label>
                            <input type="text" class="form-control form-control-sm small-input" id="AM" name="AM">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="FN" class="small-label">FECHA DE NACIMIENTO:</label>
                            <input type="date" class="form-control form-control-sm small-input" id="FN" name="FN">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="EDAD" class="small-label">EDAD:</label>
                            <input type="text" class="form-control form-control-sm small-input" id="EDAD" name="EDAD">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="SEXO" class="small-label">SEXO:</label>
                            <select class="form-control form-control-sm small-input" id="SEXO" name="SEXO" required>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="CORREO" class="small-label">CORREO:</label>
                            <input type="text" class="form-control form-control-sm small-input" id="CORREO" name="CORREO" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" title="Ingresa una dirección de correo electrónico válida">
                        </div>
                    </div>
                </div>

                <!-- Agrega más campos aquí siguiendo el mismo patrón -->
                
                <div class="row mt-3">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Guardar Comentario</button>
                    </div>
                </div>
            </form>
        `,
        form2: `
            <form id="form2" method="post" class="small-form" action="formulario2.php">
                <!-- Contenido del formulario 2 aquí -->
            </form>
        `,
        form3: `
            <form id="form3" method="post" class="small-form" action="formulario3.php">
                <!-- Contenido del formulario 3 aquí -->
            </form>
        `,
        // Agrega más formularios según sea necesario
    };

    function generateForm(formType) {
        formContainer.innerHTML = formTemplates[formType];
    }
    
    formSelector.addEventListener("change", function() {
        const selectedForm = formSelector.value;
        generateForm(selectedForm);
    });

    function opcionSeleccionada() {
        var selectElement = document.getElementById("formSelector");
        var selectedValue = selectElement.value;
        switch (selectedValue) {
        case "form1":
            funcionOpcion1();
            break;
        case "form2":
            funcionOpcion2();
        break;
        case "form3":
            funcionOpcion3();
        break;
          case "form4":
              funcionOpcion4();
              break;  
           case "form5":
                funcionOpcion5();
                break;
           case "form6":
                  funcionOpcion6();
                  break;
           case "form7":
                    funcionOpcion7();
                    break;
           case "form8":
                      funcionOpcion8();
                      break;
           case "form9":
               funcionOpcion9();
                        break;
           case "form10":
                 funcionOpcion10();
                          break;
           case "form11":
                funcionOpcion11();
                            break;
          case "form12":   
                 funcionOpcion12();
                              break;
          case "form13":
             funcionOpcion13();
                                break;
      
           case "form14":
                funcionOpcion14();
                break;
      
          case "form15":
                  funcionOpcion15();
                  break;
        }
        
      }

      

    // Llamar a esta función cuando se inicie la página
    generateForm(formSelector.value); // Generar el formulario inicial
    // Agregar el formulario predeterminado al contenedor
    formContainer.innerHTML = formTemplates.form1;
});
