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
  
    // Muestra la pestaña "Registro" por defecto al cargar la página
    mostrarPestana('registro');
  });
});



const formContainer = document.getElementById("form-container");
const formSelector = document.getElementById("formSelector");
var newValue = ""; 
console.log("inicio");
const formTemplates = {
  form1: `
  <form id="form1" method="post" class="small-form" action="form1.php" data-form-id="1">
  <div class="row">
    <div class="col-md-3">
      <!-- Columna 1 -->
      <div class="form-group">
        <label for="no_empleado" class="small-label">NO_EMPLEADO:</label>
        <input type="text" class="form-control form-control-sm small-input" id="NO_EMPLEADO" name="NO_EMPLEADO" required> 
      </div>
    </div>  
    <div class="col-md-3">
      <!-- Columna 2 -->
      <div class="form-group">
        <label for="NOMBRE" class="small-label">NOMBRES (S):</label>
        <input type="text" class="form-control form-control-sm small-input" id="NOMBRE" name="NOMBRE" >
      </div>
      <!-- Agrega más campos aquí -->
    </div>
    <div class="col-md-3">
      <!-- Columna 3 -->
      <div class="form-group">
        <label for="AP" class="small-label">APELLIDO PATERNO:</label>
        <input type="text" class="form-control form-control-sm small-input" id="AP" name="AP" >
      </div>
      <!-- Agrega más campos aquí -->
    </div>
    <div class="col-md-3">
      <!-- Columna 4 -->
      <div class="form-group">
        <label for="AM" class="small-label">APELLIDO MATERNO:</label>
        <input type="text" class="form-control form-control-sm small-input" id="AM" name="AM" >
      </div>
      <!-- Agrega más campos aquí -->
    </div>
  </div>
  
  <!-- Fila 5 -->
  <div class="row">
    <div class="col-md-2">
      <!-- Columna 1 -->
      <div class="form-group">
        <label for="FN" class="small-label">FECHA DE NACIMIENTO:</label>
        <input type="date" class="form-control form-control-sm small-input" id="campo6" name="FN" >
      </div>
      <!-- Agrega más campos aquí -->
    </div>
    <div class="col-md-2">
      <!-- Columna 2 -->
      <div class="form-group">
        <label for="EDAD" class="small-label">EDAD:</label>
        <input type="text" class="form-control form-control-sm small-input" id="campo7" name="EDAD">
      </div>
    </div>
    <div class="col-md-2">
      <!-- Columna 3 -->
      <div class="form-group">
        <label for="SEXO" class="small-label">SEXO:</label>
        <select class="form-control form-control-sm small-input" id="SEXO" name="SEXO" required>
          <option value="M">M</option>
          <option value="F">F</option>
          <!-- Agrega más opciones según sea necesario -->
        </select>
      </div>
    </div>
    <div class="col-md-2">
      <!-- Columna 4 -->
      <div class="form-group">
        <label for="CORREO" class="small-label">CORREO:</label>
        <input type="text" class="form-control form-control-sm small-input" id="CORREO" name="CORREO" 
        pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" 
        title="Ingresa una dirección de correo electrónico válida"> 
      </div>
    </div>
    <div class="col-md-2">
      <!-- Columna 5 -->
      <div class="form-group">
        <label for="EC" class="small-label">ESTADO CIVIL:</label>
        <input type="text" class="form-control form-control-sm small-input" id="EC" name="EC" >
      </div>
    </div>
    <div class="col-md-2">
      <!-- Columna 6 -->
      <div class="form-group">
      <label for="SMN" class="small-label">CARTILLA SMN:</label>
      <input type="text" class="form-control form-control-sm small-input" id="SMN" name="SMN" 
      pattern="^([A-Z]{1}-[0-9]{7}|FEMENINO)" 
      title="Ingresa una clave de formato válido (por ejemplo, C-2359406 o FEMENINO)">
  </div>  
    </div>
  </div>
  
  <!-- Fila 6 -->
  <div class="row">
    <div class="col-md-2">
      <!-- Columna 1 -->
      <div class="form-group">
        <label for="licencia" class="small-label">LICENCIA:</label>
        <input type="text" class="form-control form-control-sm small-input" id="LICENCIA" name="LICENCIA" >
      </div>
    </div>
    <div class="col-md-2">
      <!-- Columna 2 -->
      <div class="form-group">
        <label for="IF" class="small-label">INE ENFRENTE:</label>
        <input type="text" class="form-control form-control-sm small-input" id="INEF" name="INEF" >
      </div>
    </div>
    <div class="col-md-2">
      <!-- Columna 3 -->
      <div class="form-group">
        <label for="IA" class="small-label">INE ATRAS:</label>
        <input type="text" class="form-control form-control-sm small-input" id="INEA" name="INEA" >
      </div>
    </div>
    <div class="col-md-2">
      <!-- Columna 4 -->
      <div class="form-group">
        <label for="LN" class="small-label">LUGAR DE NACIMIENTO:</label>
        <input type="text" class="form-control form-control-sm small-input" id="INEA" name="LN" >
      </div>
    </div>
    <div class="col-md-2">
      <!-- Columna 5 -->
      <div class="form-group">
        <label for="CALLE" class="small-label">CALLE:</label>
        <input type="text" class="form-control form-control-sm small-input" id="CALLE" name="CALLE" >
      </div>
    </div>
    <div class="col-md-2">
      <!-- Columna 6 -->
      <div class="form-group">
        <label for="No_int" class="small-label">NUMERO INTERIOR:</label>
        <input type="text" class="form-control form-control-sm small-input" id="No_int" name="No_int"
        pattern="[A-Za-z0-9]+" 
        title="Ingresa un número interior válido (letras y números)" >
      </div>
    </div>
  </div>
  
  <!-- Fila 7 -->
  <div class="row">
    <div class="col-md-2">
      <!-- Columna 1 -->
      <div class="form-group">
        <label for="No_ext" class="small-label">NUMERO EXTERIOR:</label>
        <input type="text" class="form-control form-control-sm small-input" id="No_ext" name="No_ext"
        pattern="[A-Za-z0-9]+" 
        title="Ingresa un número interior válido (letras y números)">
      </div>
    </div>
    <div class="col-md-2">
      <!-- Columna 2 -->
      <div class="form-group">
        <label for="colonia" class="small-label">COLONIA:</label>
        <input type="text" class="form-control form-control-sm small-input" id="COLONIA" name="COLONIA" >
      </div>
    </div>
    <div class="col-md-2">
      <!-- Columna 3 -->
      <div class="form-group">
        <label for="municipio" class="small-label">MUNICIPIO:</label>
        <input type="text" class="form-control form-control-sm small-input" id="MUNICIPIO" name="MUNICIPIO" >
      </div>
    </div>
    <div class="col-md-2">
      <!-- Columna 4 -->
      <div class="form-group">
        <label for="estado" class="small-label">ESTADO:</label>
        <input type="text" class="form-control form-control-sm small-input" id="ESTADO" name="ESTADO" >
      </div>
    </div>
    <div class="col-md-2">
      <!-- Columna 5 -->
      <div class="form-group">
        <label for="cp" class="small-label">CODIGO POSTAL:</label>
        <input type="text" class="form-control form-control-sm small-input" id="CP" name="CP"
        pattern="[0-9]{5}" 
        title="Ingresa un código postal válido de 5 dígitos" >
      </div>
    </div>
    <div class="col-md-2">
      <!-- Columna 6 -->
      <div class="form-group">
        <label for="CURP" class="small-label">CURP:</label>
        <input type="text" class="form-control form-control-sm small-input" id="CURP" name="CURP">
      </div>
    </div>
  </div>
  
  <div class="row mt-3">
    <div class="col-md-12 text-center">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>
  `,

  form2: `
  <form id="form2" method="post" class="small-form" action="form2.php" data-form-id="2">
  <div class="row">
    <div class="col-md-2">
      <!-- Columna 1 -->
      <div class="form-group">
        <label for="no_empleado" class="small-label">NO_EMPLEADO:</label>
        <input type="text" class="form-control form-control-sm small-input" id="NO_EMPLEADO_2" name="NO_EMPLEADO_2" required readonly> 
      </div>
    </div>

  <div class="col-md-2">
    <!-- Columna 3 -->
    <div class="form-group">
      <label for="TEL_CAS" class="small-label">TEL. CASA:</label>
      <input type="text" class="form-control form-control-sm small-input" id="campo89" name="TEL_CAS" >
    </div>
  </div>

  <div class="col-md-2">
    <!-- Columna 4 -->
    <div class="form-group">
      <label for="TEL_CEL" class="small-label">TEL. CEL:</label>
      <input type="text" class="form-control form-control-sm small-input" id="campo42" name="TEL_CEL" >
    </div>
  </div> 
  

    <!-- Fila 6 -->
      <div class="col-md-2">
        <!-- Columna 4 -->
        <div class="form-group">
          <label for="TS" class="small-label">TIPO DE SANGRE:</label>
          <input type="text" class="form-control form-control-sm small-input" id="campo36" name="TS" >
        </div>
      </div>
      <div class="col-md-2">
        <!-- Columna 5 -->
        <div class="form-group">
          <label for="IDIOMA" class="small-label">IDIOMA:</label>
          <input type="text" class="form-control form-control-sm small-input" id="campo37" name="IDIOMA" >
        </div>
      </div>
  
      <div class="col-md-2">
        <!-- Columna 6 -->
        <div class="form-group">
          <label for="ESCRITURA" class="small-label">ESCRITURA:</label>
          <input type="text" class="form-control form-control-sm small-input" id="campo38" name="ESCRITURA" >
        </div>
      </div>
  
      <div class="col-md-2">
        <!-- Columna 1 -->
        <div class="form-group">
          <label for="LECTURA" class="small-label">LECTURA:</label>
          <input type="text" class="form-control form-control-sm small-input" id="campo39" name="LECTURA" >
        </div>
      </div>
  
      <div class="col-md-2">
      <!-- Columna 1 -->
      <div class="form-group">
        <label for="DICCION" class="small-label">DICCIÓN:</label>
        <input type="text" class="form-control form-control-sm small-input" id="campo40" name="DICCION" >
      </div>
    </div>
  
    <div class="col-md-2">
    <!-- Columna 1 -->
    <div class="form-group">
      <label for="DIALECTO" class="small-label">DIALECTO:</label>
      <input type="text" class="form-control form-control-sm small-input" id="campo41" name="DIALECTO" >
    </div>
  </div>

  <div class="col-md-2">
  <!-- Columna 1 -->
  <div class="form-group">
    <label for="LDR" class="small-label">LUGAR DE RESIDENCIA:</label>
    <input type="text" class="form-control form-control-sm small-input" id="campo42" name="LDR" >
  </div>
</div>

    <div class="col-md-3">
      <!-- Columna 2 -->
      <div class="form-group">
        <label for="NDE" class="small-label">¿CUANTAS ESPOSAS TIENE?:</label>
        <select type="text" id="campo24" class="form-control form-control-sm small-input" name="NDE" >
        <option value="EUO">ELIGE UNA OPCIÓN</option>
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        </select>
      </div>
      <!-- Agrega más campos aquí -->
    </div>
  </div>

  <form class="small-form-name">
  <div id="lol" class="row">
    <div id="nom_esp" class="col-md-3">
      <!-- Columna 3 -->
      <div class="form-group">
        <label for="NES" class="small-label2">NOMBRE (S) DE ESPOSA:</label>
        <input type="text" class="form-control form-control-sm small-input2" id="campo25" name="NES" >
      </div>
      <!-- Agrega más campos aquí -->
    </div>

    <div class="col-md-3">
      <!-- Columna 4 -->
      <div class="form-group">
        <label for="APEA" class="small-label2">APELLIDO PATERNO :</label>
        <input type="text" class="form-control form-control-sm small-input2" id="campo26" name="APEA">
      </div>
      <!-- Agrega más campos aquí -->
    </div>

        <div class="col-md-2">
      <!-- Columna 1 -->
      <div class="form-group">
        <label for="AMEA" class="small-label2">APELLIDO MATERNO:</label>
        <input type="text" class="form-control form-control-sm small-input2" id="campo27" name="AMEA" >
      </div>
      <!-- Agrega más campos aquí -->
    </div>
  </div>
  


    <div class="col-md-2">
      <!-- Columna 3 -->
      <div class="form-group">
      <label for="NH" class="small-label">¿CUANTOS HIJOS TIENE?:</label>
      <select type="text" id="campo29" class="form-control form-control-sm small-input" name="NHS" required>
              <option value="EUO">ELIGE UNA OPCIÓN</option>
        <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      </select>
    </div>
    </div>
  </div>
  <div id="lol_b" class="row">
  <div class="col-md-2">
  <!-- Columna 4 -->
  <div class="form-group">
  <label for="NDH" class="small-label">NOMBRE (S) DE HIJO (S):</label>
  <input type="text" class="form-control form-control-sm small-input" id="campo30" name="NDH">
</div>
</div>
<div class="col-md-2">
  <!-- Columna 5 -->
  <div class="form-group">
    <label for="APDH" class="small-label">APELLIDO PATERNO:</label>
    <input type="text" class="form-control form-control-sm small-input" id="campo31" name="APDH" >
  </div>
</div>
<div class="col-md-2">
  <!-- Columna 6 -->
  <div class="form-group">
    <label for="AMDH" class="small-label">APELLIDO MATERNO:</label>
    <input type="text" class="form-control form-control-sm small-input" id="campo32" name="AMDH">
  </div>
</div>

<div class="col-md-2">
  <!-- Columna 1 -->
  <div class="form-group">
    <label for="SEXOH" class="small-label">SEXO:</label>
    <select class="form-control form-control-sm small-input" id="campo11" name="SEXOH">
      <option value="OP">ELIGE UNA OPCIÓN</option>
      <option value="M">M</option>
      <option value="F">F</option>
      <!-- Agrega más opciones según sea necesario -->
    </select>
  </div>
</div>

    <div class="col-md-2">
      <!-- Columna 2 -->
      <div class="form-group">
        <label for="FNH" class="small-label">FECHA DE NACIMIENTO:</label>
        <input type="date" class="form-control form-control-sm small-input" id="campo34" name="FNH">
      </div>
    </div>

    <div class="col-md-2">
      <!-- Columna 3 -->
      <div class="form-group">
      <label for="EDADH" class="small-label">EDAD:</label>
      <input type="text" class="form-control form-control-sm small-input" id="campo35" name="EDADH">
    </div>
    </div>
    </div>
    </div>

    <div class="row mt-3">
    <div class="col-md-12 text-center">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>
  `,

  form3: `
  <form id="form3" method="post" class="small-form" action="form3.php" data-form-id="3">
    <form class="small-form">
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-group">
          <label for="no_empleado" class="small-label">NO_EMPLEADO:</label>
          <input type="text" class="form-control form-control-sm small-input" id="NO_EMPLEADO_3" name="NO_EMPLEADO_3" required readonly> 
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="FUNCION">FUNCIÓN:</label>
            <input type="text" class="form-control" id="FUNCION" name="FUNCION" >
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="FE2022">FECHA DE EVALUACIÓN 2022:</label>
            <input type="date" class="form-control" id="FE2022" name="FE2022">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="CRP">Calificación Respecto a los Principios:</label>
            <input type="text" class="form-control" id="CRP" name="CRP">
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="CPD">Calificación Productividad:</label>
            <input type="text" class="form-control" id="CPD" name="CPD" >
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="ccap">Calificación Cualidades y Aptitudes Profesionales:</label>
            <input type="text" class="form-control" id="ccap" name="ccap">
          </div>
        </div>
      </div>

      <div class="row mt-3">
      <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </form>

  `,

  form4: `
  <form id="form4" method="post" class="small-form" action="form4.php" data-form-id="4">
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="NO_EMPLEADO" class="small-label">NO_EMPLEADO:</label>
        <input type="text" class="form-control form-control-sm small-input" id="NO_EMPLEADO_4" name="NO_EMPLEADO_4" required readonly>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="TDE" class="small-label">TERMINACION DE ESTUDIO:</label>
        <input type="text" class="form-control form-control-sm small-input" id="TDE" name="TDE" >
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="ESTUDIOS" class="small-label">ESTUDIOS:</label>
        <input type="text" class="form-control form-control-sm small-input" id="ESTUDIOS" name="ESTUDIOS" required>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="ESPECIALIDAD" class="small-label">ESPECIALIDAD:</label>
        <input type="text" class="form-control form-control-sm small-input" id="ESPECIALIDAD" name="ESPECIALIDAD" required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="DOCUMENTO" class="small-label">DOCUMENTO:</label>
        <input type="text" class="form-control form-control-sm small-input" id="DOCUMENTO" name="DOCUMENTO" required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="INSTITUTO" class="small-label">INSTITUTO:</label>
        <input type="text" class="form-control form-control-sm small-input" id="INSTITUTO" name="INSTITUTO">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="CFME" class="small-label">Curso Fuerza Metropolitana Estatal:</label>
        <input type="text" class="form-control form-control-sm small-input" id="CFME" name="CFME">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="GRUPO" class="small-label">GRUPO:</label>
        <input type="text" class="form-control form-control-sm small-input" id="GRUPO" name="GRUPO">
      </div>
    </div>
    <div class="col-md-4">
    <div class="form-group">
    <label for="CCAC" class="small-label">CUENTA CON ACADEMIA:</label>
    <select class="form-control form-control-sm small-input" id="CCAC" name="CCAC" >
      <option value="OP">ELIGE UNA OPCIÓN</option>
      <option value="OPERATIVA">OPERATIVA</option>
      <option value="ADMINISTRATIVA">ADMINISTRATIVA</option>
      <option value="NO_CURSADA">NO CURSADA</option>
      <option value="no_cuenta">NO CUENTA</option>
    </select>
  </div>
</div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="GENERACION" class="small-label">GENERACIÓN:</label>
        <input type="text" class="form-control form-control-sm small-input" id="GENERACION" name="GENERACION">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="TdG" class="small-label">Tipo de Grupo (A,B,ETC):</label>
        <input type="text" class="form-control form-control-sm small-input" id="TdG" name="TdG">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="DURACION" class="small-label">DURACIÓN:</label>
        <input type="text" class="form-control form-control-sm small-input" id="DURACION" name="DURACION" >
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="TDS" class="small-label">TIEMPO DE SERVICIO:</label>
        <input type="text" class="form-control form-control-sm small-input" id="TDS" name="TDS" >
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="CDAPT" class="small-label">CALIFICACION DE ARMAMENTO Y PRACTICAS DE TIRO:</label>
        <input type="text" class="form-control form-control-sm small-input" id="CDAPT" name="CDAPT" >
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="CPAF" class="small-label">CALIFICACION DE PUNTERIA AVANZADA (FUERZAS ESPECIALES):</label>
        <input type="text" class="form-control form-control-sm small-input" id="CPAF" name="CPAF" >
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="TallasDomicilios" class="small-label">Tallas y Domicilios Encuesta 2011:</label>
        <input type="text" class="form-control form-control-sm small-input" id="TallasDomicilios" name="TallasDomicilios" >
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="NDC" class="small-label">NIVEL DE CALIFICACIÓN:</label>
        <input type="text" class="form-control form-control-sm small-input" id="NDC" name="NDC"
         pattern="[A-Za-z0-9]+" title="Ingresa un número interior válido (letras y números)">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="REPROBO_EXAMEN" class="small-label">REPROBO EXAMEN:</label>
        <input type="text" class="form-control form-control-sm small-input" id="REPROBO_EXAMEN" name="REPROBO_EXAMEN" >
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="EDLC" class="small-label">EGRESADO DE LA ACADEMIA:</label>
        <input type="text" class="form-control form-control-sm small-input" id="EDLC" name="EDLC" >
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="PEAG" class="small-label">PERSONAL EGRESADO ACADEMIA GUARDIA CIVIL ESTATAL 1ERA GENERACION:</label>
        <input type="text" class="form-control form-control-sm small-input" id="PEAG" name="PEAG" >
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="CPC" class="small-label">CURSO PERITO CALIF:</label>
        <input type="text" class="form-control form-control-sm small-input" id="CPC" name="CPC" >
      </div>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-md-12 text-center">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>
  `,

  form5: `
  <form id="form5" method="post" class="small-form" action="form5.php" data-form-id="5">
    <form class="small-form">
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="NO_EMPLEADO">NO_EMPLEADO:</label>
            <input type="text" class="form-control" id="NO_EMPLEADO_5" name="NO_EMPLEADO_5" required readonly>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="EXMILITARES">EXMILITARES:</label>
            <input type="text" class="form-control" id="EXMILITARES" name="EXMILITARES" >
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="EXMILITAR">EXMILITAR:</label>
            <input type="text" class="form-control" id="EXMILITAR" name="EXMILITAR" >
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="GAS">Grado y Arma de Servicio:</label>
            <input type="text" class="form-control" id="GAS" name="GAS" >
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="FADS">FECHA ALTA DE SERVICIO :</label>
            <input type="date" class="form-control" id="FADS" name="FADS" >
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="FRBL">FECHA RETIRO BAJA/LICENCIA:</label>
            <input type="text" class="form-control" id="FRBL" name="FRBL">
          </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
          <label for="MB">MOTIVO BAJA:</label>
          <input type="text" class="form-control" id="MB" name="MB">
        </div>
      </div>
      </div>

      <div class="row mt-3">
      <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </form>

  `,

  form6: `
  <form id="form6" method="post" class="small-form" action="form6.php" data-form-id="6">
  <form class="small-form">
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="NO_EMPLEADO">NO_EMPLEADO:</label>
          <input type="text" class="form-control" id="NO_EMPLEADO_6" name="NO_EMPLEADO_6" required readonly>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="ACH">AFILIADOS CON HORARIO:</label>
          <input type="text" class="form-control" id="ACH" name="ACH" >
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="AD">AFILIADOS DESTACADOS:</label>
          <input type="text" class="form-control" id="AD" name="AD" >
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="DAS">DESISTIO AL SINDICATO:</label>
          <input type="text" class="form-control" id="DAS" name="DAS" >
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="PQL">PERSONAL QUE LE CORRESPONDE SEGURO MAYOR:</label>
          <input type="text" class="form-control" id="PQL" name="PQL" >
        </div>
      </div>
    </div>

    <div class="row mt-3">
    <div class="col-md-12 text-center">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>

  `,
  
  form7: `
  <form id="form7" method="post" class="small-form" action="form7.php" data-form-id="7">
  <form class="small-form">
    <div class="form-row">
      <div class="col-md-3">
        <!-- Columna 1 -->
        <div class="form-group">
          <label for="NO_EMPLEADO">NO_EMPLEADO:</label>
          <input type="text" class="form-control" id="NO_EMPLEADO_7" name="NO_EMPLEADO_7" required readonly>
        </div>
        <div class="form-group">
        <label for="DIRECCION_ACTUAL" class="small-label">DIRECCION ACTUAL:</label>
        <select class="form-control form-control-sm small-input" id="DIRECCION_ACTUAL" name="DIRECCION_ACTUAL" >
            <option value="OP">ELIGE UNA OPCIÓN</option>
            <option value="DIRECCION GENERAL DE SEGURIDAD PUBLICA DEL ESTADO">DIRECCION GENERAL DE SEGURIDAD PUBLICA DEL ESTADO</option>
            <option value="SECRETARIA DE SEGURIDAD Y PROTECCION CIUDADANA">SECRETARIA DE SEGURIDAD Y PROTECCION CIUDADANA</option>
            <option value="DIRECCION GENERAL DE TECNOLOGIA EN SEGURIDAD PUBLICA">DIRECCION GENERAL DE TECNOLOGIA EN SEGURIDAD PUBLICA</option>
        </select> 
    </div>    
    </div>
      <div class="col-md-3">
        <!-- Columna 2 -->
        <div class="form-group">
        <label for="AREA1" class="small-label">ÁREA:</label>
        <select class="form-control form-control-sm small-input" id="AREA1" name="AREA1" >
            <option value="OP">ELIGE UNA OPCIÓN</option>
            <option value="ADMINISTRACION DE POTENCIAL HUMANO">ADMINISTRACION DE POTENCIAL HUMANO</option>
            <option value="SECCION PRIMERA DE ESTADO MAYOR">SECCION PRIMERA DE ESTADO MAYOR</option>
            <option value="C5">C5</option>
            <option value="AGRUPAMIENTO CANINO K-9">AGRUPAMIENTO CANINO K-9</option>
            <option value="AHUALULCO">AHUALULCO</option>
            <option value="ALLENDE">ALLENDE</option>
            <option value="AQUISMON Y TANCANHUITZ DE SANTOS">AQUISMON Y TANCANHUITZ DE SANTOS</option>
            <option value="ARMAMENTO MUNICIONES Y LICENCIA OFICIAL COLECTIVA">ARMAMENTO MUNICIONES Y LICENCIA OFICIAL COLECTIVA</option>
            <option value="AXTLA DE TERRAZAS">AXTLA DE TERRAZAS</option>
            <option value="CARRANZA">CARRANZA</option>
            <option value="CD. DEL MAIZ">CD. DEL MAIZ</option>
            <option value="CD. VALLES">CD. VALLES</option>
            <option value="CERRITOS">CERRITOS</option>
            <option value="CHARCAS">CHARCAS</option>
            <option value="COMANDANCIA CIUDAD SATELITE">COMANDANCIA CIUDAD SATELITE</option>
            <option value="DEPARTAMENTO DE ENLACE Y EVALUACION">DEPARTAMENTO DE ENLACE Y EVALUACION</option>
            <option value="DEPARTAMENTO DE ENLACE DE EVALUACION Y GESTION DE CERTIFICACION POLICIAL">DEPARTAMENTO DE ENLACE DE EVALUACION Y GESTION DE CERTIFICACION POLICIAL</option>
            <option value="SECCION SEXTA DE ESTADO MAYOR (UNIDAD DE CONTROL Y CONFIANZA)">SECCION SEXTA DE ESTADO MAYOR (UNIDAD DE CONTROL Y CONFIANZA)</option>
            <option value="DEPARTAMENTO DE INFORMATICA">DEPARTAMENTO DE INFORMATICA</option>
            <option value="DIRECCION DE ENLACE ADMINISTRATIVO">DIRECCION DE ENLACE ADMINISTRATIVO</option>
            <option value="UNIDAD DE PLANEO Y OPERACIONES">UNIDAD DE PLANEO Y OPERACIONES</option>
            <option value="UNIDAD DE GUARDIA GENERAL Y REGISTRO NACIONAL DE DETENIDOS">UNIDAD DE GUARDIA GENERAL Y REGISTRO NACIONAL DE DETENIDOS</option>
            <option value="DIRECCION DE PLANEO Y OPERACIÓN">DIRECCION DE PLANEO Y OPERACIÓN</option>
            <option value="SECCION TERCERA DE ESTADO MAYOR">SECCION TERCERA DE ESTADO MAYOR</option>
            <option value="SECCION SEGUNDA DE ESTADO MAYOR">SECCION SEGUNDA DE ESTADO MAYOR</option>
            <option value="SECCION QUINTA DE ESTADO MAYOR">SECCION QUINTA DE ESTADO MAYOR</option>
            <option value="COMANDANCIA DE LA GUARDIA CIVIL ESTATAL">COMANDANCIA DE LA GUARDIA CIVIL ESTATAL</option>
            <option value="DIRECCION GENERAL">DIRECCION GENERAL</option>
            <option value="EBANO">EBANO</option>
            <option value="EL NARANJO">EL NARANJO</option>
            <option value="ENLACE JURIDICO">ENLACE JURIDICO</option>
            <option value="UNIDAD DE ASUNTOS JURIDICOS">UNIDAD DE ASUNTOS JURIDICOS</option>
            <option value="UNIDAD DE TRANSPARENCIA DE LA GUARDIA CIVIL ESTATAL">UNIDAD DE TRANSPARENCIA DE LA GUARDIA CIVIL ESTATAL</option>
            <option value="UNIDAD DE PLANES Y PROYECTOS">UNIDAD DE PLANES Y PROYECTOS</option>
            <option value="ESTADO MAYOR">ESTADO MAYOR</option>
            <option value="GABINETE MEDICO Y TRABAJO SOCIAL">GABINETE MEDICO Y TRABAJO SOCIAL</option>
            <option value="GRUPO DE OPERACIONES TACTICAS">GRUPO DE OPERACIONES TACTICAS</option>
            <option value="ITURBIDE">ITURBIDE</option>
            <option value="JEFATURA DE POLICIA DE REACCION ZONA CENTRO">JEFATURA DE POLICIA DE REACCION ZONA CENTRO</option>
            <option value="JEFATURA DE REGION CENTRO">JEFATURA DE REGION CENTRO</option>
            <option value="DIVISION FUERZA DE REACCION">DIVISION FUERZA DE REACCION</option>
            <option value="JUAREZ">JUAREZ</option>
            <option value="LA HINCADA">LA HINCADA</option>
            <option value="MADERO">MADERO</option>
            <option value="MARIANO MATAMOROS">MARIANO MATAMOROS</option>
            <option value="MATEHUALA">MATEHUALA</option>
            <option value="OBREGON">OBREGON</option>
            <option value="RAYON">RAYON</option>
            <option value="SECCION CUARTA DE ESTADO MAYOR (LOGISTICA)">SECCION CUARTA DE ESTADO MAYOR (LOGISTICA)</option>
            <option value="RECURSOS MATERIALES">RECURSOS MATERIALES</option>
            <option value="UNIDAD DE MANTENIMIENTO VEHICULAR">UNIDAD DE MANTENIMIENTO VEHICULAR</option>
            <option value="RIOVERDE">RIOVERDE</option>
            <option value="RUBI">RUBI</option>
            <option value="SALINAS DE HIDALGO">SALINAS DE HIDALGO</option>
            <option value="SECC. MOTOCICLISTAS">SECC. MOTOCICLISTAS</option>
            <option value="SECCION CAMINOS ESTATAL">SECCION CAMINOS ESTATAL</option>
            <option value="DIVISION CARRETERAS Y CAMINOS ESTATALES DE LA SECCION QUINTA DE ESTADO MAYOR">DIVISION CARRETERAS Y CAMINOS ESTATALES DE LA SECCION QUINTA DE ESTADO MAYOR</option>
            <option value="SERVICIOS DIVERSOS">SERVICIOS DIVERSOS</option>
            <option value="SERVICIOS ESPECIALES">SERVICIOS ESPECIALES</option>
            <option value="STA. MARIA DEL RIO">STA. MARIA DEL RIO</option>
            <option value="TIERRA NUEVA">TIERRA NUEVA</option>
            <option value="TAMASOPO">TAMASOPO</option>
            <option value="TAMAZUNCHALE">TAMAZUNCHALE</option>
            <option value="MATLAPA">MATLAPA</option>
            <option value="TAMUIN">TAMUIN</option>
            <option value="TAMUIN Y SAN VICENTE TANCUAYALAB">TAMUIN Y SAN VICENTE TANCUAYALAB</option>
            <option value="TANCANHUITZ DE SANTOS">TANCANHUITZ DE SANTOS</option>
            <option value="TANQUIAN DE ESCOBEDO">TANQUIAN DE ESCOBEDO</option>
            <option value="UNIDAD DE ANALISIS ESTRATEGICO">UNIDAD DE ANALISIS ESTRATEGICO</option>
            <option value="UNIDAD DE POLICIA PROCESAL">UNIDAD DE POLICIA PROCESAL</option>
            <option value="UNIDAD DE POLICIA Y TRANSITO DEL ESTADO">UNIDAD DE POLICIA Y TRANSITO DEL ESTADO</option>
            <option value="SECCION SEPTIMA DE ESTADO MAYOR">SECCION SEPTIMA DE ESTADO MAYOR</option>
            <option value="UNIDAD ESPECIALIZADA EN VIOLENCIA DE GENERO">UNIDAD ESPECIALIZADA EN VIOLENCIA DE GENERO</option>
            <option value="VILLA DE ARRIAGA">VILLA DE ARRIAGA</option>
            <option value="VILLA HIDALGO">VILLA HIDALGO</option>
        </select>
    </div>
        <div class="form-group">
          <label for="FUNCION">FUNCIÓN:</label>
          <input type="text" class="form-control" id="FUNCION" name="FUNCION" >
        </div>
        <!-- Agrega aquí más casillas de la Columna 2 -->
      </div>
      <div class="col-md-3">
        <!-- Columna 3 -->
        <div class="form-group">
        <label for="DDE" class="small-label">DESCRIPCION DEL ESTATUS:</label>
        <select class="form-control form-control-sm small-input" id="DDE" name="DDE" >
            <option value="OP">ELIGE UNA OPCIÓN</option>
            <option value="ACTIVO">ACTIVO</option>
            <option value="P/CONTROL INCAP. MEDICA CONTINUA">P/CONTROL INCAP. MEDICA CONTINUA</option>
            <option value="PERSONAL INCAPACITADO">PERSONAL INCAPACITADO</option>
            <option value="SE PRESENTAN DE INCAPACIDAD (PENDIENTES EN LA GUARDIA GENERAL)">SE PRESENTAN DE INCAPACIDAD (PENDIENTES EN LA GUARDIA GENERAL)</option>
            <option value="PERSONAL PENDIENTE DE DIFINIR SITUACION LABORAL POR ESTAR SUJETOS A PROCESO PENAL (MARZO 2023)">PERSONAL PENDIENTE DE DIFINIR SITUACION LABORAL POR ESTAR SUJETOS A PROCESO PENAL (MARZO 2023)</option>
            <option value="PERSONAL CON TRÁMITE (POR FALTAS CONTINUAS O DISCONTINUAS A SU SERVICIO SIN CAUSA JUSTIFICADA) ACTIVOS">PERSONAL CON TRÁMITE (POR FALTAS CONTINUAS O DISCONTINUAS A SU SERVICIO SIN CAUSA JUSTIFICADA) ACTIVOS</option>
            <option value="PERSONAL PARA CONTROL DE LA SECCION PRIMERA PENDIENTE DE ORDEN (AMPARO)">PERSONAL PARA CONTROL DE LA SECCION PRIMERA PENDIENTE DE ORDEN (AMPARO)</option>
            <option value="PERSONAL COMSIOMADO EN COMSIONADO (ASPE, C-4, SSP, CESESP, OTRAS DEPENDENCIAS)">PERSONAL COMSIOMADO EN COMSIONADO (ASPE, C-4, SSP, CESESP, OTRAS DEPENDENCIAS)</option>
            <option value="PERSONAL CON SUSPENSION POR INVALIDEZ TEMPORAL (CON MOVIMIENTO DE PERSONAL)">PERSONAL CON SUSPENSION POR INVALIDEZ TEMPORAL (CON MOVIMIENTO DE PERSONAL)</option>
            <option value="PERSONAL QUE SE PRESENTA DE SUSPENSION POR INVALIDEZ TEMPORAL (CON MOVIMIENTO DE PERSONAL)">PERSONAL QUE SE PRESENTA DE SUSPENSION POR INVALIDEZ TEMPORAL (CON MOVIMIENTO DE PERSONAL)</option>
            <option value="PERSONAL  POR INVALIDEZ TEMPORAL">PERSONAL  POR INVALIDEZ TEMPORAL</option>
            <option value="PERSONAL QUE SE PRESENTÓ POR TERMINO DE INVALIDEZ TEMPORAL (PENDIENTES EN LA GUARDIA GENERAL)">PERSONAL QUE SE PRESENTÓ POR TERMINO DE INVALIDEZ TEMPORAL (PENDIENTES EN LA GUARDIA GENERAL)</option>
            <option value="PERSONAL CON INVALIDEZ DEFINITIVO (PENDIENTE RESOLUCION DE PENSIONES)">PERSONAL CON INVALIDEZ DEFINITIVO (PENDIENTE RESOLUCION DE PENSIONES)</option>
            <option value="PERSONAL CON TRAMITE ANTE LA UNIDAD DE ASUNTOS INTERNOS POR FALTAS CONSECUTIVAS">PERSONAL CON TRAMITE ANTE LA UNIDAD DE ASUNTOS INTERNOS POR FALTAS CONSECUTIVAS</option>
            <option value="PERSONAL CON TRAMITE ANTE LA UNIDAD DE ASUNTOS INTERNOS POR FALTAS CONSECUTIVAS Y SUSPENSION DE LABORES">PERSONAL CON TRAMITE ANTE LA UNIDAD DE ASUNTOS INTERNOS POR FALTAS CONSECUTIVAS Y SUSPENSION DE LABORES</option>
            <option value="PERSONAL TURNADO A JURIDICO CON BLOQUEO DE SUELDO (NO FISICOS EN LA GUARDIA CIVIL  AFILIADOS)">PERSONAL TURNADO A JURIDICO CON BLOQUEO DE SUELDO (NO FISICOS EN LA GUARDIA CIVIL  AFILIADOS)</option>
            <option value="LICENCIA PREJUBILATORIA">LICENCIA PREJUBILATORIA</option>
            <option value="LICENCIA SIN GOCE DE SUELDO">LICENCIA SIN GOCE DE SUELDO</option>
            <option value="PERSONAL PENDIENTE DE DEFINIR SITUACION LABORAL (DESAPARECIDOS)">PERSONAL PENDIENTE DE DEFINIR SITUACION LABORAL (DESAPARECIDOS)</option>
            <option value="PERSONAL CON SUSPENSION POR TIEMPO DETERMINADO (SE ENCUENTRA DESAPARECIDO)">PERSONAL CON SUSPENSION POR TIEMPO DETERMINADO (SE ENCUENTRA DESAPARECIDO)</option>
            <option value="SUSPENSION TEMPORAL DE LABORES">SUSPENSION TEMPORAL DE LABORES</option>
            <option value="PENDIENTE MOVIMIENTO DE PERSONAL PARA ACTIVACION">PENDIENTE MOVIMIENTO DE PERSONAL PARA ACTIVACION</option>
            <option value="TERMINO DE SUSPENSION TEMPORAL DE LABORES">TERMINO DE SUSPENSION TEMPORAL DE LABORES</option>
            <option value="LA SSP ELABORO FORMATO DE SUSPENSION DE SUELDO CON MOTIVO DE ESTAR SUJETOS A PROCEDIMIENTO PENAL">LA SSP ELABORO FORMATO DE SUSPENSION DE SUELDO CON MOTIVO DE ESTAR SUJETOS A PROCEDIMIENTO PENAL</option>
            <option value="PERSONAL EGRESADO DE LA ACADEMIA DE LA GUARDIA CIVIL ESTATAL 1ERA GENERACION">PERSONAL EGRESADO DE LA ACADEMIA DE LA GUARDIA CIVIL ESTATAL 1ERA GENERACION</option>
            <option value="PERSONAL PENDIENTE DE MOVIMIENTO DE PERSONAL DE BAJA (LISTADO OTORGADO POR ELVIA DE LA SSP)">PERSONAL PENDIENTE DE MOVIMIENTO DE PERSONAL DE BAJA (LISTADO OTORGADO POR ELVIA DE LA SSP)</option>
            <option value="PERSONAL HONORARIOS ASIMILABLES">PERSONAL HONORARIOS ASIMILABLES</option>
            <option value="PERSONAL COMISIONADO DE OTRAS DEPENDENCIAS A LA DGSPE 'ACTIVOS' (No tomar en cuenta en Ningun Estado de Fuerza)">PERSONAL COMISIONADO DE OTRAS DEPENDENCIAS A LA DGSPE 'ACTIVOS' (No tomar en cuenta en Ningun Estado de Fuerza)</option>
            <option value="PERSONAL COMISIONADO DE OTRAS DEPENDENCIAS A LA DGSPE 'INACTIVOS' (No tomar en cuenta en Ningun Estado de Fuerza)">PERSONAL COMISIONADO DE OTRAS DEPENDENCIAS A LA DGSPE 'INACTIVOS' (No tomar en cuenta en Ningun Estado de Fuerza)</option>
            <option value="APARECE EN PLANTILLA DE OFICIALIA MAYOR Y NO LOS TENEMOS REGISTRADOS">APARECE EN PLANTILLA DE OFICIALIA MAYOR Y NO LOS TENEMOS REGISTRADOS</option>
            <option value="PERSONAL QUE CAUSA ALTA (PENDIENTE DE MOVIMIENTO DE ALTA) NO TOMAR EN CUENTA ESTADOS DE FUERZA">PERSONAL QUE CAUSA ALTA (PENDIENTE DE MOVIMIENTO DE ALTA) NO TOMAR EN CUENTA ESTADOS DE FUERZA</option>
            <option value="PERSONAL SINDICALIZADO A DISPOSICIÓN DE OFICIALÍA MAYOR QUE YA NO SALE EN NOMINA A PARTIR DEL 04/03/02 (NO TOMAR EN CUENTA PLAZAS)">PERSONAL SINDICALIZADO A DISPOSICIÓN DE OFICIALÍA MAYOR QUE YA NO SALE EN NOMINA A PARTIR DEL 04/03/02 (NO TOMAR EN CUENTA PLAZAS)</option>
            <option value="PERSONAL COMISIONADO DE OFICIALIA MAYOR  A LA DGPSV (TERMINO DE COMISION)">PERSONAL COMISIONADO DE OFICIALIA MAYOR  A LA DGPSV (TERMINO DE COMISION)</option>
            <option value="PLAZAS EN EL CONSEJO NO TOMAR EN CUENTA PARA NADA SOLO G.N.P.">PLAZAS EN EL CONSEJO NO TOMAR EN CUENTA PARA NADA SOLO G.N.P.</option>
            <option value="BAJAS CONSEJO (G.N.P.)">BAJAS CONSEJO (G.N.P.)</option>
            <option value="ALTAS PENDIENTES NO HICIERON CURSO DE POLICIA ACREDITABLE (NO TOMAR EN CUENTA EN NINGUN ESTADO DE FUERZA)">ALTAS PENDIENTES NO HICIERON CURSO DE POLICIA ACREDITABLE (NO TOMAR EN CUENTA EN NINGUN ESTADO DE FUERZA)</option>
            <option value="NINGUNO">NINGUNO</option>
        </select>
    </div>   
    <div class="form-group">
    <label for="PQCBDLC" class="small-label">PERSONAL QUE CAUSO BAJA DE LA CORPORACIÓN:</label>
    <select class="form-control form-control-sm small-input" id="PQCBDLC" name="PQCBDLC" >
        <option value="OP">ELIGE UNA OPCIÓN</option>
        <option value="BAJAS 2009">BAJAS 2009</option>
        <option value="BAJAS 2010">BAJAS 2010</option>
        <option value="BAJAS 2011">BAJAS 2011</option>
        <option value="PERSONAL QUE CAUSA BAJA EN 2012">PERSONAL QUE CAUSA BAJA EN 2012</option>
        <option value="PERSONAL QUE CAUSA BAJA EN 2013">PERSONAL QUE CAUSA BAJA EN 2013</option>
        <option value="PERSONAL QUE CAUSA BAJA EN 2014">PERSONAL QUE CAUSA BAJA EN 2014</option>
        <option value="PERSONAL QUE CAUSA BAJA EN 2015">PERSONAL QUE CAUSA BAJA EN 2015</option>
        <option value="BAJAS 2016">BAJAS 2016</option>
        <option value="PERSONAL QUE CAUSA BAJA EN 2017">PERSONAL QUE CAUSA BAJA EN 2017</option>
        <option value="BAJAS 2018">BAJAS 2018</option>
        <option value="BAJAS 2019">BAJAS 2019</option>
        <option value="BAJAS 2019 PERSONAL COMISIONADO EN LA DGSPE (NO ERAN DE LA PLANTILLA DE LA DIRECCION)">BAJAS 2019 PERSONAL COMISIONADO EN LA DGSPE (NO ERAN DE LA PLANTILLA DE LA DIRECCION)</option>
        <option value="BAJAS 2020">BAJAS 2020</option>
        <option value="BAJAS 2020 PERSONAL COMISIONADO EN LA DGSPE (NO ERAN DE LA PLANTILLA DE LA DIRECCION)">BAJAS 2020 PERSONAL COMISIONADO EN LA DGSPE (NO ERAN DE LA PLANTILLA DE LA DIRECCION)</option>
        <option value="BAJAS 2021">BAJAS 2021</option>
        <option value="BAJAS 2021 PERSONAL COMISIONADO EN LA DGSPE (SE REGRESO A LA ACADEMIA QUE ES SU ADSCRIPCION)">BAJAS 2021 PERSONAL COMISIONADO EN LA DGSPE (SE REGRESO A LA ACADEMIA QUE ES SU ADSCRIPCION)</option>
        <option value="BAJAS 2022">BAJAS 2022</option>
        <option value="BAJAS 2023">BAJAS 2023</option>
        <option value="PERSONAL DE HONORARIOS QUE CAUSA BAJA">PERSONAL DE HONORARIOS QUE CAUSA BAJA</option>
        <option value="PERSONAL PENDIENTE DE MOVIMIENTO DE PERSONAL DE BAJA">PERSONAL PENDIENTE DE MOVIMIENTO DE PERSONAL DE BAJA</option>
        <option value="NINGUNO">NINGUNO</option>
    </select>
</div>
        <div class="form-group">
          <label for="PERIODO">PERIODO:</label>
          <input type="text" class="form-control" id="PERIODO" name="PERIODO">
        </div>
        <!-- Agrega aquí más casillas de la Columna 3 -->
      </div>
      <div class="col-md-3">
        <!-- Columna 4 -->
        <div class="form-group">
          <label for="OBSERVACIONES">OBSERVACIONES:</label>
          <input type="text" class="form-control" id="OBSERVACIONES" name="OBSERVACIONES">
        </div>
        <div class="form-group">
          <label for="ID_EMPLEADO">ID EMPLEADO:</label>
          <input type="text" class="form-control" id="ID_EMPLEADO" name="ID_EMPLEADO">
        </div>
        <!-- Agrega aquí más casillas de la Columna 4 -->
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-3">
        <!-- Columna 5 -->
        <div class="form-group">
        <label for="CLASIF" class="small-label">CLASIF.:</label>
        <select class="form-control form-control-sm small-input" id="CLASIF" name="CLASIF" >
            <option value="OP">ELIGE UNA OPCIÓN</option>
            <option value="SIND.">SIND.</option>
            <option value="ADMVO.">ADMVO.</option>
            <option value="APOYO">APOYO</option>
            <option value="OPER.">OPER.</option>
        </select>
    </div>    
        <div class="form-group">
          <label for="FECHA_DE_INGRESO">FECHA DE INGRESO:</label>
          <input type="date" class="form-control" id="FECHA_DE_INGRESO" name="FECHA_DE_INGRESO">
        </div>
        <!-- Agrega aquí más casillas de la Columna 5 -->
      </div>
      <div class="col-md-3">
        <!-- Columna 6 -->
        <div class="form-group">
          <label for="CUIP">CUIP:</label>
          <input type="text" class="form-control" id="CUIP" name="CUIP">
        </div>
        <div class="form-group">
          <label for="CUP">CUP:</label>
          <input type="text" class="form-control" id="CUP" name="CUP">
        </div>
        <!-- Agrega aquí más casillas de la Columna 6 -->
      </div>
      <div class="col-md-3">
        <!-- Columna 7 -->
        <div class="form-group">
          <label for="NO_CLASIFICACION">NO_CLASIFICACIÓN:</label>
          <input type="text" class="form-control" id="NO_CLASIFICACION" name="NO_CLASIFICACION" >
        </div>
        <div class="form-group">
        <label for="CLASIFICACION" class="small-label">CLASIFICACIÓN.:</label>
        <select class="form-control form-control-sm small-input" id="CLASIFICACION" name="CLASIFICACION" >
            <option value="OP">ELIGE UNA OPCIÓN</option>
            <option value="SINDICALIZADO">SINDICALIZADO</option>
            <option value="DE CONFIANZA">DE CONFIANZA</option>
        </select>
    </div>
      </div>
      <div class="col-md-3">
        <!-- Columna 8 -->
        <div class="form-group">
          <label for="SINDICALIZADO">SINDICALIZADO (NO / NOMBRE DEL SINDICATO):</label>
          <input type="text" class="form-control" id="SINDICALIZADO" name="SINDICALIZADO">
        </div>
        <div class="form-group">
          <label for="ADSCRITO">ADSCRITO (NO / NOMBRE DEL SINDICATO) AFILIADO:</label>
          <input type="text" class="form-control" id="ADSCRITO" name="ADSCRITO">
        </div>
        <!-- Agrega aquí más casillas de la Columna 8 -->
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-3">
        <!-- Columna 9 -->
        <div class="form-group">
        <label for="DDOM" class="small-label">DIRECCION DE OFICIALIA MAYOR (AREA).:</label>
        <select class="form-control form-control-sm small-input" id="DDOM" name="DDOM" >
            <option value="OP">ELIGE UNA OPCIÓN</option>
            <option value="DIRECCION DE OPERACIÓN">DIRECCION DE OPERACIÓN</option>
            <option value="DIRECCION GENERAL DE SEGURIDAD PUBLICA DEL ESTADO">DIRECCION GENERAL DE SEGURIDAD PUBLICA DEL ESTADO</option>
            <option value="DIRECCION DE ESTADO MAYOR">DIRECCION DE ESTADO MAYOR</option>
            <option value="DIRECCION DE ZONA HUASTECA">DIRECCION DE ZONA HUASTECA</option>
            <option value="DIRECCION DE INSPECCION GENERAL">DIRECCION DE INSPECCION GENERAL</option>
        </select>
    </div>    
        <div class="form-group">
          <label for="IMSS">IMSS:</label>
          <input type="text" class="form-control" id="IMSS" name="IMSS">
        </div>
        <!-- Agrega aquí más casillas de la Columna 9 -->
      </div>
      <div class="col-md-3">
        <!-- Columna 10 -->
        <div class="form-group">
        <label for="CCLOC" class="small-label">CREDENCIAL CON LOC (SI/NO):</label>
        <select class="form-control form-control-sm small-input" id="CCLOC" name="CCLOC" >
            <option value="OP">ELIGE UNA OPCIÓN</option>
            <option value="SI">SI</option>
            <option value="NO">NO</option>
            <option value="NSS">NO SE SABE</option>
        </select>
    </div>    
        <div class="form-group">
          <label for="VENCIMIENTO_CREDENCIAL">VENCIMIENTO DE CREDENCIAL:</label>
          <input type="date" class="form-control" id="VENCIMIENTO_CREDENCIAL" name="VENCIMIENTO_CREDENCIAL">
        </div>
        <!-- Agrega aquí más casillas de la Columna 10 -->
      </div>
      <div class="col-md-3">
        <!-- Columna 11 -->
        <div class="form-group">
          <label for="FOLIO_CREDENCIAL">FOLIO DE LA CREDENCIAL:</label>
          <input type="text" class="form-control" id="FOLIO_CREDENCIAL" name="FOLIO_CREDENCIAL">
        </div>
        <div class="form-group">
          <label for="UBICACION_FISICA">UBICACIÓN FISICA:</label>
          <input type="text" class="form-control" id="UBICACION_FISICA" name="UBICACION_FISICA">
        </div>
        <!-- Agrega aquí más casillas de la Columna 11 -->
      </div>
      <div class="col-md-3">
        <!-- Columna 12 -->
        <div class="form-group">
        <label for="ZONA" class="small-label">ZONA:</label>
        <select class="form-control form-control-sm small-input" id="ZONA" name="ZONA" 
            <option value="OP">ELIGE UNA OPCIÓN</option>
            <option value="CENTRO">CENTRO</option>
            <option value="HUASTECA">HUASTECA</option>
            <option value="MEDIA">MEDIA</option>
            <option value="ALTIPLANO">ALTIPLANO</option>
        </select>
    </div> 
        <div class="form-group">
          <label for="FECHA_DE_INGRESO_2">FECHA DE INGRESO (2):</label>
          <input type="date" class="form-control" id="FECHA_DE_INGRESO_2" name="FECHA_DE_INGRESO_2">
        </div>
        <!-- Agrega aquí más casillas de la Columna 12 -->
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-3">
        <!-- Columna 13 -->
        <div class="form-group">
          <label for="FECHA_CONCLUSION">FECHA DE CONCLUSIÓN:</label>
          <input type="date" class="form-control" id="FECHA_CONCLUSION" name="FECHA_CONCLUSION">
        </div>
        <div class="form-group">
          <label for="FECHA_REINGRESO">FECHA DE REINGRESO:</label>
          <input type="date" class="form-control" id="FECHA_REINGRESO" name="FECHA_REINGRESO">
        </div>
        <!-- Agrega aquí más casillas de la Columna 13 -->
      </div>
      <div class="col-md-3">
        <!-- Columna 14 -->
        <div class="form-group">
          <label for="CAMBIO_DE_APOYO">CAMBIO DE APOYO A OPERATIVO:</label>
          <input type="text" class="form-control" id="CAMBIO_DE_APOYO" name="CAMBIO_DE_APOYO">
        </div>
        <div class="form-group">
          <label for="SUELDO_BASE">SUELDO BASE:</label>
          <input type="text" class="form-control" id="SUELDO_BASE" name="SUELDO_BASE">
        </div>
        <!-- Agrega aquí más casillas de la Columna 14 -->
      </div>
      <div class="col-md-3">
        <!-- Columna 15 -->
        <div class="form-group">
          <label for="PRESTACIONES">PRESTACIONES:</label>
          <input type="text" class="form-control" id="PRESTACIONES" name="PRESTACIONES">
        </div>
        <div class="form-group">
          <label for="COMPENSACION">COMPENSACION:</label>
          <input type="text" class="form-control" id="COMPENSACION" name="COMPENSACION">
        </div>
        <!-- Agrega aquí más casillas de la Columna 15 -->
      </div>
      <div class="col-md-3">
        <!-- Columna 16 -->
        <div class="form-group">
          <label for="NO_COMP">NO COMP.:</label>
          <input type="text" class="form-control" id="NO_COMP" name="NO_COMP">
        </div>
        <div class="form-group">
          <label for="ANTIGUEDAD_GRADO">ANTIGÜEDAD EN EL GRADO:</label>
          <input type="date" class="form-control" id="ANTIGUEDAD_GRADO" name="ANTIGUEDAD_GRADO">
        </div>
        <!-- Agrega aquí más casillas de la Columna 16 -->
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-3">
        <!-- Columna 17 -->
        <div class="form-group">
          <label for="COLUMNA_TEMPORAL">COLUMNA TEMPORAL:</label>
          <input type="text" class="form-control" id="COLUMNA_TEMPORAL" name="COLUMNA_TEMPORAL">
        </div>
        <div class="form-group">
          <label for="PROMOCION_2005">PROMOCION 2005:</label>
          <input type="text" class="form-control" id="PROMOCION_2005" name="PROMOCION_2005">
        </div>
        <!-- Agrega aquí más casillas de la Columna 17 -->
      </div>
      <div class="col-md-3">
        <!-- Columna 18 -->
        <div class="form-group">
          <label for="RFC">R.F.C.:</label>
          <input type="text" class="form-control" id="RFC" name="RFC">
        </div>
        <div class="form-group">
          <label for="HOMOCLAVE">HOMOCLAVE:</label>
          <input type="text" class="form-control" id="HOMOCLAVE" name="HOMOCLAVE">
        </div>
        <!-- Agrega aquí más casillas de la Columna 18 -->
      </div>
      <div class="col-md-3">
        <!-- Columna 19 -->
        <div class="form-group">
          <label for="NO_CUENTA_BANCO">No. CUENTA BANCO:</label>
          <input type="text" class="form-control" id="NO_CUENTA_BANCO" name="NO_CUENTA_BANCO">
        </div>
        <!-- Agrega aquí más casillas de la Columna 19 -->
      </div>
    </div>
  <div class="row mt-3">
    <div class="col-md-12 text-center">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>
`, 

form8: `
<form id="form8" method="post" class="small-form" action="form8.php" data-form-id="8">
    <form class="small-form">

        <!-- Fila 1 -->
        <div class="form-row">
        <div class="col-md-6">
        <div class="form-group">
          <label for="NO_EMPLEADO">NO_EMPLEADO:</label>
          <input type="text" class="form-control" id="NO_EMPLEADO_8" name="NO_EMPLEADO_8" required readonly>
        </div>
      </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="AREA_ADSCRIPCION">AREA DE ADSCRIPCION:</label>
                    <input type="text" class="form-control" id="AREA_ADSCRIPCION" name="AREA_ADSCRIPCION" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="TEL_OFICINA">TEL. DE OFICINA:</label>
                    <input type="text" class="form-control" id="TEL_OFICINA" name="TEL_OFICINA" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="DOMICILIO_OFICINA">DOMICILIO DE LA DEPENDENCIA U OFICINA:</label>
                    <input type="text" class="form-control" id="DOMICILIO_OFICINA" name="DOMICILIO_OFICINA" >
                </div>
            </div>
        </div>

        <!-- Fila 2 -->
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="CARGO_FUNCION">CARGO O FUNCION QUE DESEMPEÑA:</label>
                    <input type="text" class="form-control" id="CARGO_FUNCION" name="CARGO_FUNCION" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="JEFE_INMEDIATO">NOMBRE DEL JEFE INMEDIATO:</label>
                    <input type="text" class="form-control" id="JEFE_INMEDIATO" name="JEFE_INMEDIATO" >
                </div>
            </div>
        </div>

        <!-- Fila 3 -->
        <div class="form-row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="ACTUALIZACION">ACTUALIZACION:</label>
                    <input type="date" class="form-control" id="ACTUALIZACION" name="ACTUALIZACION" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="CVE_DIRECCION">CVE_DIRECCIÓN:</label>
                    <input type="text" class="form-control" id="CVE_DIRECCION" name="CVE_DIRECCION" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="DIRECCION">DIRECCIÓN:</label>
                    <input type="text" class="form-control" id="DIRECCION" name="DIRECCION" >
                </div>
            </div>
        </div>

        <!-- Fila 4 -->
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="CVE_AREA">CVE_AREA:</label>
                    <input type="text" class="form-control" id="CVE_AREA" name="CVE_AREA" >
                </div>
            </div>
        </div>

        <div class="row mt-3">
        <div class="col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </div>
    </form>
`, 
form9: `
<form id="form9" method="post" class="small-form" action="form9.php" data-form-id="9">
    <form class="small-form">

        <!-- Fila 1 -->
        <div class="form-row">
        <div class="col-md-6">
        <div class="form-group">
          <label for="NO_EMPLEADO">NO_EMPLEADO:</label>
          <input type="text" class="form-control" id="NO_EMPLEADO_9" name="NO_EMPLEADO_9" required readonly>
        </div>
      </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="PLAYERA">PLAYERA:</label>
                    <input type="text" class="form-control" id="PLAYERA" name="PLAYERA" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="CAMISA">CAMISA:</label>
                    <input type="text" class="form-control" id="CAMISA" name="CAMISA" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="PANTALON">PANTALON:</label>
                    <input type="text" class="form-control" id="PANTALON" name="PANTALON" >
                </div>
            </div>
        </div>

        <!-- Fila 2 -->
        <div class="form-row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="CALZADO">CALZADO:</label>
                    <input type="text" class="form-control" id="CALZADO" name="CALZADO" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="CHAMARRA">CHAMARRA:</label>
                    <input type="text" class="form-control" id="CHAMARRA" name="CHAMARRA" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="MC_ARTHUR">MC ARTHUR:</label>
                    <input type="text" class="form-control" id="MC_ARTHUR" name="MC_ARTHUR" >
                </div>
            </div>
        </div>

        <!-- Fila 3 -->
        <div class="form-row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="KEPI">KEPI:</label>
                    <input type="text" class="form-control" id="KEPI" name="KEPI" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="SOMBRERO">SOMBRERO:</label>
                    <input type="text" class="form-control" id="SOMBRERO" name="SOMBRERO" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="FALDA">FALDA:</label>
                    <input type="text" class="form-control" id="FALDA" name="FALDA" >
                </div>
            </div>
        </div>

        <!-- Fila 4 -->
        <div class="form-row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="FILIPINA">FILIPINA:</label>
                    <input type="text" class="form-control" id="FILIPINA" name="FILIPINA" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="OVEROL">OVEROL:</label>
                    <input type="text" class="form-control" id="OVEROL" name="OVEROL" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="BATA">BATA:</label>
                    <input type="text" class="form-control" id="BATA" name="BATA">
                </div>
            </div>
        </div>

        <div class="row mt-3">
        <div class="col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </div>
    </form>

`, 

form10: `
<form id="form10" method="post" class="small-form" action="form10.php" data-form-id="10">
  <form class="small-form">
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="NO_EMPLEADO">NO_EMPLEADO:</label>
          <input type="text" class="form-control" id="NO_EMPLEADO_10" name="NO_EMPLEADO_10" required readonly>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="CELP">COMISION EN LUGAR O PERSONA:</label>
          <input type="text" class="form-control" id="CELP" name="CELP" >
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="PERIODO">PERIODO:</label>
          <input type="text" class="form-control" id="PERIODO" name="PERIODO" >
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="FDIDC">FECHA DE INICIO DE COMISIÓN:</label>
          <input type="text" class="form-control" id="FDIDC" name="FDIDC" >
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="FDCDC">FECHA DE CONCLUSIÓN DE COMISIÓN:</label>
          <input type="text" class="form-control" id="FDCDC" name="FDCDC" >
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="OF_COMISIÓN">OF_COMISIÓN:</label>
          <input type="text" class="form-control" id="OF_COMISIÓN" name="OF_COMISIÓN" >
        </div>
      </div>
    </div>
    <div class="row mt-3">
    <div class="col-md-12 text-center">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>

`, 

form11: `
<form id="form11" method="post" class="small-form" action="form11.php" data-form-id="11">
  <form class="small-form">
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="NO_EMPLEADO">NO_EMPLEADO:</label>
          <input type="text" class="form-control" id="NO_EMPLEADO_11" name="NO_EMPLEADO_11" required readonly>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="fdr">Fecha de Recibido:</label>
          <input type="date" class="form-control" id="fdr" name="fdr" >
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="fdcc">Fecha de Cambio CAM.ADSC.:</label>
          <input type="date" class="form-control" id="fdcc" name="fdcc" >
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="pdc">se Presento de Cambio:</label>
          <input type="text" class="form-control" id="pdc" name="pdc" >
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6">
      <div class="form-group">
      <label for="ADC" class="small-label">Acuerdo de Computo:</label>
      <select class="form-control form-control-sm small-input" id="ADC" name="ADC" >
          <option value="OP">ELIGE UNA OPCIÓN</option>
          <option value="5B">5B</option>
          <option value="11">11</option>
          <option value="5">5</option>
          <option value="1">1</option>
          <option value="1B">1B</option>
          <option value="2">2</option>
          <option value="2B">2B</option>
          <option value="3">3</option>
          <option value="CAMBIO SSPC/GCE/EM/SPEM/CA/00435/2023">CAMBIO SSPC/GCE/EM/SPEM/CA/00435/2023</option>
          <option value="4">4</option>
          <option value="4B">4B</option>
          <option value="O5">O5</option>
          <option value="4A">4A</option>
          <option value="3B">3B</option>
      </select>
  </div>
  
  </div>
      <div class="col-md-6">
      <div class="form-group">
      <label for="ASS" class="small-label">Acuerdo SSP:</label>
      <select class="form-control form-control-sm small-input" id="ASS" name="ASS" >
          <option value="OP">ELIGE UNA OPCIÓN</option>
          <option value="SIND">SIND</option>
          <option value="ADMVO">ADMVO</option>
          <option value="S15">S15</option>
          <option value="K9">K9</option>
          <option value="AH">AH</option>
          <option value="A1">A1</option>
          <option value="T5">T5</option>
          <option value="LOC">LOC</option>
          <option value="A4">A4</option>
          <option value="C4">C4</option>
          <option value="C2">C2</option>
          <option value="C3">C3</option>
          <option value="C6">C6</option>
          <option value="C7">C7</option>
          <option value="C9">C9</option>
          <option value="DE">DE</option>
          <option value="D1">D1</option>
          <option value="D3">D3</option>
          <option value="D5">D5</option>
          <option value="SS">SS</option>
          <option value="CGCE">CGCE</option>
          <option value="D6">D6</option>
          <option value="E1">E1</option>
          <option value="E2">E2</option>
          <option value="D4">D4</option>
          <option value="AJ">AJ</option>
          <option value="UT">UT</option>
          <option value="UPT">UPT</option>
          <option value="EM">EM</option>
          <option value="S6">S6</option>
          <option value="GOT">GOT</option>
          <option value="I1">I1</option>
          <option value="C10">C10</option>
          <option value="DFR">DFR</option>
          <option value="J1">J1</option>
          <option value="LH">LH</option>
          <option value="M1">M1</option>
          <option value="M2">M2</option>
          <option value="M3">M3</option>
          <option value="O1">O1</option>
          <option value="R1">R1</option>
          <option value="S11">S11</option>
          <option value="R5">R5</option>
          <option value="H1">H1</option>
          <option value="S1">S1</option>
          <option value="S4">S4</option>
          <option value="S5">S5</option>
          <option value="S12">S12</option>
          <option value="SE">SE</option>
          <option value="S13">S13</option>
          <option value="TN">TN</option>
          <option value="T1">T1</option>
          <option value="T2">T2</option>
          <option value="T4">T4</option>
          <option value="T3">T3</option>
          <option value="T7">T7</option>
          <option value="U1">U1</option>
          <option value="UP1">UP1</option>
          <option value="S5TA">S5TA</option>
          <option value="U2">U2</option>
          <option value="UVG">UVG</option>
          <option value="V6">V6</option>
          <option value="V5">V5</option>
      </select>
  </div>
  
  </div>
    </div>
    <div class="row mt-3">
    <div class="col-md-12 text-center">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>

`, 

form12: `
<form id="form12" method="post" class="small-form" action="form12.php" data-form-id="12">
  <div class="row">
    <div class="col-md-2">
      <div class="form-group">
        <label for="NO_EMPLEADO" class="small-label">NO_EMPLEADO:</label>
        <input type="text" class="form-control form-control-sm small-input" id="NO_EMPLEADO_12" name="NO_EMPLEADO_12" required readonly>
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="NO" class="small-label">NO.:</label>
        <input type="text" class="form-control form-control-sm small-input" id="NO" name="NO" >
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="NA" class="small-label">NO. Archivo:</label>
        <input type="text" class="form-control form-control-sm small-input" id="NA" name="NA" >
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="NIVEL" class="small-label">NIVEL:</label>
        <input type="text" class="form-control form-control-sm small-input" id="NIVEL" name="NIVEL" >
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="CATEGORIA" class="small-label">CATEGORIA:</label>
        <input type="text" class="form-control form-control-sm small-input" id="CATEGORIA" name="CATEGORIA" >
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-2">
       <div class="form-group">
        <label for="GRADO_HOMOLOGADO" class="small-label">GRADO HOMOLOGADO:</label>
<select class="form-control form-control-sm small-input" id="GRADO_HOMOLOGADO" name="GRADO_HOMOLOGADO" >
  <option value="OP">ELIGE UNA OPCIÓN</option>
  <option value="JEFE DE GRUPO (SEGURIDAD Y CUSTODIA)">JEFE DE GRUPO (SEGURIDAD Y CUSTODIA)</option>
  <option value="POLICIA">POLICIA</option>
  <option value="SECRETARIA (O) CAPTURISTA">SECRETARIA (O) CAPTURISTA</option>
  <option value="OFICIAL ADMINISTRATIVO DE SEGURIDAD &quot;B&quot;">OFICIAL ADMINISTRATIVO DE SEGURIDAD "B"</option>
  <option value="JEFE DE GRUPO">JEFE DE GRUPO</option>
  <option value="OFICIAL DE PARTES">OFICIAL DE PARTES</option>
  <option value="POLICIA PRIMERO">POLICIA PRIMERO</option>
  <option value="SUBOFICIAL">SUBOFICIAL</option>
  <option value="AUXILIAR ADMINISTRATIVA (O)">AUXILIAR ADMINISTRATIVA (O)</option>
  <option value="ENCARGADO DE PROGRAMA">ENCARGADO DE PROGRAMA</option>
  <option value="TECNICO ESPECIALIZADO">TECNICO ESPECIALIZADO</option>
  <option value="ANALISTA JURIDICO">ANALISTA JURIDICO</option>
  <option value="ALMACENISTA">ALMACENISTA</option>
  <option value="OPERADOR DE FOTOCOPIADORA">OPERADOR DE FOTOCOPIADORA</option>
  <option value="OFICIAL">OFICIAL</option>
  <option value="AYUDANTE GENERAL">AYUDANTE GENERAL</option>
  <option value="CABO DE ORDENANZA">CABO DE ORDENANZA</option>
  <option value="ANALISTA DE SISTEMAS COMPUTACIONALES">ANALISTA DE SISTEMAS COMPUTACIONALES</option>
  <option value="CUSTODIO &quot;A&quot;">CUSTODIO "A"</option>
  <option value="SUBINSPECTOR">SUBINSPECTOR</option>
  <option value="PSICOLOGO">PSICOLOGO</option>
  <option value="RECEPCIONISTA">RECEPCIONISTA</option>
  <option value="AUXILIAR MEDICO">AUXILIAR MEDICO</option>
  <option value="MOZO DE OFICINA">MOZO DE OFICINA</option>
  <option value="MOZO DE ORDENANZA">MOZO DE ORDENANZA</option>
  <option value="TECNICO NO ESPECIALIZADO">TECNICO NO ESPECIALIZADO</option>
  <option value="MECANOGRAFA">MECANOGRAFA</option>
  <option value="DIRECTOR GENERAL">DIRECTOR GENERAL</option>
  <option value="INVESTIGADOR">INVESTIGADOR</option>
  <option value="JEFE DE GRUPO SEGURIDAD Y CUSTODIA">JEFE DE GRUPO SEGURIDAD Y CUSTODIA</option>
  <option value="JEFE DE TURNO">JEFE DE TURNO</option>
  <option value="SECRETARIA DE SECRETARIO">SECRETARIA DE SECRETARIO</option>
  <option value="JEFE DE GRUPO ADMVO DE SEGURIDAD">JEFE DE GRUPO ADMVO DE SEGURIDAD</option>
  <option value="SECRETARIA DE DIRECTOR">SECRETARIA DE DIRECTOR</option>
  <option value="APOYO ADMINISTRATIVA (O) DE SEGURIDAD">APOYO ADMINISTRATIVA (O) DE SEGURIDAD</option>
  <option value="ABOGADO (O) &quot;B&quot;">ABOGADO (O) "B"</option>
  <option value="ENFERMERA(O) SEGURIDAD Y CUSTODIA">ENFERMERA(O) SEGURIDAD Y CUSTODIA</option>
  <option value="ODONTOLOGO">ODONTOLOGO</option>
  <option value="ENFERMERA TITULADA">ENFERMERA TITULADA</option>
  <option value="PELUQUERO">PELUQUERO</option>
  <option value="JEFE DE DEPARTAMENTO">JEFE DE DEPARTAMENTO</option>
  <option value="MEDICO GENERAL">MEDICO GENERAL</option>
  <option value="JEFE DE OFICINA">JEFE DE OFICINA</option>
  <option value="SUPERVISOR">SUPERVISOR</option>
  <option value="CHOFER DE PRIMERA">CHOFER DE PRIMERA</option>
  <option value="TECNICA (O) NO ESPECIALIZADA (O)">TECNICA (O) NO ESPECIALIZADA (O)</option>
  <option value="AUXILIAR JURIDICO">AUXILIAR JURIDICO</option>
  <option value="VIGILANTE">VIGILANTE</option>
  <option value="CAPACITADOR">CAPACITADOR</option>
</select>
      </div>
    </div>
    <div class="col-md-2">
    <div class="form-group">
    <label for="GRADO" class="small-label">GRADO:</label>
    <select class="form-control form-control-sm small-input" id="GRADO" name="GRADO" >
      <option value="OP">ELIGE UNA OPCIÓN</option>
      <option value="CAPTURISTA">CAPTURISTA</option>
      <option value="AUXILIAR EN ADMINISTRACION">AUXILIAR EN ADMINISTRACION</option>
      <option value="ASISTENTE ADMINISTRATIVO">ASISTENTE ADMINISTRATIVO</option>
      <option value="JEFE DE SECCION">JEFE DE SECCION</option>
      <option value="ANALISTA ESPECIALIZADO">ANALISTA ESPECIALIZADO</option>
      <option value="SUBDIRECTOR">SUBDIRECTOR</option>
      <option value="OFICIAL ADMINISTRATIVO DE SEGURIDAD &quot;A&quot;">OFICIAL ADMINISTRATIVO DE SEGURIDAD "A"</option>
      <option value="POLICIA &quot;B&quot;">POLICIA "B"</option>
      <option value="POLICIA &quot;C&quot;">POLICIA "C"</option>
      <option value="JEFE DE GRUPO (SEGURIDAD Y CUSTODIA)">JEFE DE GRUPO (SEGURIDAD Y CUSTODIA)</option>
      <option value="POLICIA">POLICIA</option>
      <option value="POLICIA TERCERO">POLICIA TERCERO</option>
      <option value="SECRETARIA (O) CAPTURISTA">SECRETARIA (O) CAPTURISTA</option>
      <option value="OFICIAL ADMINISTRATIVO DE SEGURIDAD &quot;B&quot;">OFICIAL ADMINISTRATIVO DE SEGURIDAD "B"</option>
      <option value="JEFE DE GRUPO">JEFE DE GRUPO</option>
      <option value="OFICIAL DE PARTES">OFICIAL DE PARTES</option>
      <option value="POLICIA &quot;A&quot;">POLICIA "A"</option>
      <option value="SUBOFICIAL">SUBOFICIAL</option>
      <option value="AUXILIAR ADMINISTRATIVA (O)">AUXILIAR ADMINISTRATIVA (O)</option>
      <option value="ENCARGADO DE PROGRAMA">ENCARGADO DE PROGRAMA</option>
      <option value="TECNICO ESPECIALIZADO">TECNICO ESPECIALIZADO</option>
      <option value="ANALISTA JURIDICO">ANALISTA JURIDICO</option>
      <option value="VIGILANTE DE SEGURIDAD">VIGILANTE DE SEGURIDAD</option>
      <option value="ALMACENISTA">ALMACENISTA</option>
      <option value="OPERADOR DE FOTOCOPIADORA">OPERADOR DE FOTOCOPIADORA</option>
      <option value="OFICIAL">OFICIAL</option>
      <option value="POLICIA PRIMERO">POLICIA PRIMERO</option>
      <option value="AYUDANTE GENERAL">AYUDANTE GENERAL</option>
      <option value="POLICIA SEGUNDO">POLICIA SEGUNDO</option>
      <option value="CABO DE ORDENANZA">CABO DE ORDENANZA</option>
      <option value="ANALISTA DE SISTEMAS COMPUTACIONALES">ANALISTA DE SISTEMAS COMPUTACIONALES</option>
      <option value="CUSTODIO &quot;A&quot;">CUSTODIO "A"</option>
      <option value="PRIMER OFICIAL">PRIMER OFICIAL</option>
      <option value="PSICOLOGO">PSICOLOGO</option>
      <option value="RECEPCIONISTA">RECEPCIONISTA</option>
      <option value="AUXILIAR MEDICO">AUXILIAR MEDICO</option>
      <option value="MOZO DE OFICINA">MOZO DE OFICINA</option>
      <option value="MOZO DE ORDENANZA">MOZO DE ORDENANZA</option>
      <option value="TECNICO NO ESPECIALIZADO">TECNICO NO ESPECIALIZADO</option>
      <option value="MECANOGRAFA">MECANOGRAFA</option>
      <option value="DIRECTOR GENERAL">DIRECTOR GENERAL</option>
      <option value="INVESTIGADOR">INVESTIGADOR</option>
      <option value="JEFE DE GRUPO SEGURIDAD Y CUSTODIA">JEFE DE GRUPO SEGURIDAD Y CUSTODIA</option>
      <option value="JEFE DE TURNO">JEFE DE TURNO</option>
      <option value="SECRETARIA DE SECRETARIO">SECRETARIA DE SECRETARIO</option>
      <option value="JEFE DE GRUPO ADMVO DE SEGURIDAD">JEFE DE GRUPO ADMVO DE SEGURIDAD</option>
      <option value="SECRETARIA DE DIRECTOR">SECRETARIA DE DIRECTOR</option>
      <option value="APOYO ADMINISTRATIVA (O) DE SEGURIDAD">APOYO ADMINISTRATIVA (O) DE SEGURIDAD</option>
      <option value="ABOGADO (O) &quot;B&quot;">ABOGADO (O) "B"</option>
      <option value="ENFERMERA(O) SEGURIDAD Y CUSTODIA">ENFERMERA(O) SEGURIDAD Y CUSTODIA</option>
      <option value="ODONTOLOGO">ODONTOLOGO</option>
      <option value="ENFERMERA TITULADA">ENFERMERA TITULADA</option>
      <option value="PELUQUERO">PELUQUERO</option>
      <option value="JEFE DE DEPARTAMENTO">JEFE DE DEPARTAMENTO</option>
      <option value="MEDICO GENERAL">MEDICO GENERAL</option>
      <option value="JEFE DE OFICINA">JEFE DE OFICINA</option>
      <option value="SUPERVISOR">SUPERVISOR</option>
      <option value="CHOFER DE PRIMERA">CHOFER DE PRIMERA</option>
      <option value="TECNICA (O) NO ESPECIALIZADA (O)">TECNICA (O) NO ESPECIALIZADA (O)</option>
      <option value="AUXILIAR JURIDICO">AUXILIAR JURIDICO</option>
      <option value="VIGILANTE">VIGILANTE</option>
      <option value="CAPACITADOR">CAPACITADOR</option>
    </select>
  </div>  
</div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="NUMERO_ANTERIOR" class="small-label">NUMERO ANTERIOR:</label>
        <input type="text" class="form-control form-control-sm small-input" id="NUMERO_ANTERIOR" name="NUMERO_ANTERIOR">
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="NUMERO_NUEVO" class="small-label">NUMERO NUEVO:</label>
        <input type="text" class="form-control form-control-sm small-input" id="NUMERO_NUEVO" name="NUMERO_NUEVO" >
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="CCLA" class="small-label">CREDENCIAL CON LOC No. 196 (SI/NO) ACTUALIZADA 27/07/2022:</label>
        <input type="text" class="form-control form-control-sm small-input" id="CCLA" name="CCLA" >
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-2">
      <div class="form-group">
        <label for="ACTUALIZACION" class="small-label">ACTUALIZACIÓN 2016:</label>
        <input type="text" class="form-control form-control-sm small-input" id="ACTUALIZACION" name="ACTUALIZACION" >
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="VETTING" class="small-label">VETTING:</label>
        <input type="text" class="form-control form-control-sm small-input" id="VETTING" name="VETTING" >
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="OFICIALIA_MAYOR" class="small-label">OFICIALIA MAYOR:</label>
        <input type="text" class="form-control form-control-sm small-input" id="OFICIALIA_MAYOR" name="OFICIALIA_MAYOR" >
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="RNPSP" class="small-label">RNPSP:</label>
        <input type="text" class="form-control form-control-sm small-input" id="RNPSP" name="RNPSP" >
      </div>
    </div>
    <div class="col-md-2">
    <div class="form-group">
    <label for="AREA" class="small-label">AREA:</label>
    <select class="form-control form-control-sm small-input" id="AREA" name="AREA" >
      <option value="OP">ELIGE UNA OPCIÓN</option>
      <option value="SECCION PRIMERA DE ESTADO MAYOR">SECCION PRIMERA DE ESTADO MAYOR</option>
      <option value="GRUPO CANINO K-9">GRUPO CANINO K-9</option>
      <option value="AHUALULCO">AHUALULCO</option>
      <option value="ALLENDE">ALLENDE</option>
      <option value="AQUISMON Y TANCANHUITZ DE SANTOS">AQUISMON Y TANCANHUITZ DE SANTOS</option>
      <option value="UNIDAD DE ARMAMENTO, MUNICIONES Y LOC">UNIDAD DE ARMAMENTO, MUNICIONES Y LOC</option>
      <option value="AXTLA DE TERRAZAS">AXTLA DE TERRAZAS</option>
      <option value="CARRANZA">CARRANZA</option>
      <option value="CD. DEL MAIZ">CD. DEL MAIZ</option>
      <option value="CD. VALLES">CD. VALLES</option>
      <option value="CERRITOS">CERRITOS</option>
      <option value="CHARCAS">CHARCAS</option>
      <option value="COMANDANCIA CIUDAD SATELITE">COMANDANCIA CIUDAD SATELITE</option>
      <option value="DEPARTAMENTO DE ENLACE Y EVALUACION">DEPARTAMENTO DE ENLACE Y EVALUACION</option>
      <option value="DEPARTAMENTO DE ENLACE DE EVALUACION Y GESTION DE CERTIFICACION POLICIAL">DEPARTAMENTO DE ENLACE DE EVALUACION Y GESTION DE CERTIFICACION POLICIAL</option>
      <option value="UNIDAD DE CONTROL DE CONFIANZA">UNIDAD DE CONTROL DE CONFIANZA</option>
      <option value="UNIDAD DE INFORMATICA">UNIDAD DE INFORMATICA</option>
      <option value="UNIDAD DE ARCHIVO GENERAL">UNIDAD DE ARCHIVO GENERAL</option>
      <option value="UNIDAD DE GUARDIA GENERAL Y REGISTRO NACIONAL DE DETENIDOS">UNIDAD DE GUARDIA GENERAL Y REGISTRO NACIONAL DE DETENIDOS</option>
      <option value="UNIDAD DE INTELIGENCIA POLICIAL">UNIDAD DE INTELIGENCIA POLICIAL</option>
      <option value="UNIDAD DE ANALISIS TACTICO">UNIDAD DE ANALISIS TACTICO</option>
      <option value="UNIDAD DE MEDIDAS DE PROTECCION Y CAUTELARES">UNIDAD DE MEDIDAS DE PROTECCION Y CAUTELARES</option>
      <option value="UNIDAD DE PREVENCION DEL DELITO A TRAVES DE LA PARTICIPACION CIUDADANA">UNIDAD DE PREVENCION DEL DELITO A TRAVES DE LA PARTICIPACION CIUDADANA</option>
      <option value="SECCION TERCERA DE ESTADO MAYOR">SECCION TERCERA DE ESTADO MAYOR</option>
      <option value="COMANDANCIA G.C.E.">COMANDANCIA G.C.E.</option>
      <option value="CENTRO DE CAPTURA A PLATAFORMA MEXICO">CENTRO DE CAPTURA A PLATAFORMA MEXICO</option>
      <option value="SERVICIOS ESPECIALES G.C.E.">SERVICIOS ESPECIALES G.C.E.</option>
      <option value="EBANO">EBANO</option>
      <option value="EL NARANJO">EL NARANJO</option>
      <option value="UNIDAD DE ASUNTOS JURIDICOS">UNIDAD DE ASUNTOS JURIDICOS</option>
      <option value="UNIDAD DE TRANSPARENCIA">UNIDAD DE TRANSPARENCIA</option>
      <option value="UNIDAD DE PLANES Y PROYECTOS">UNIDAD DE PLANES Y PROYECTOS</option>
      <option value="ESTADO MAYOR">ESTADO MAYOR</option>
      <option value="UNIDAD DE GABINETE MEDICO Y TRABAJO SOCIAL">UNIDAD DE GABINETE MEDICO Y TRABAJO SOCIAL</option>
      <option value="GRUPO DE OPERACIONES TACTICAS">GRUPO DE OPERACIONES TACTICAS</option>
      <option value="ITURBIDE">ITURBIDE</option>
      <option value="JEFATURA DE REGION CENTRO">JEFATURA DE REGION CENTRO</option>
      <option value="UNIDAD DE POLICIA DE REACCION">UNIDAD DE POLICIA DE REACCION</option>
      <option value="JUAREZ">JUAREZ</option>
      <option value="LA HINCADA">LA HINCADA</option>
      <option value="MADERO">MADERO</option>
      <option value="MARIANO MATAMOROS">MARIANO MATAMOROS</option>
      <option value="MATEHUALA">MATEHUALA</option>
      <option value="OBREGON">OBREGON</option>
      <option value="RAYON">RAYON</option>
      <option value="SECCION CUARTA DE ESTADO MAYOR">SECCION CUARTA DE ESTADO MAYOR</option>
      <option value="UNIDAD DE MANTENIMIENTO VEHICULAR">UNIDAD DE MANTENIMIENTO VEHICULAR</option>
      <option value="RIOVERDE">RIOVERDE</option>
      <option value="RUBI">RUBI</option>
      <option value="SALINAS DE HIDALGO">SALINAS DE HIDALGO</option>
      <option value="GRUPO DE MOTOCICLISTAS">GRUPO DE MOTOCICLISTAS</option>
      <option value="DIVISION CARRETERAS Y CAMINOS ESTATALES">DIVISION CARRETERAS Y CAMINOS ESTATALES</option>
      <option value="UNIDAD DE SERVICIOS DIVERSOS">UNIDAD DE SERVICIOS DIVERSOS</option>
      <option value="STA. MARIA DEL RIO">STA. MARIA DEL RIO</option>
      <option value="TIERRA NUEVA">TIERRA NUEVA</option>
      <option value="TAMASOPO">TAMASOPO</option>
      <option value="TAMAZUNCHALE">TAMAZUNCHALE</option>
      <option value="TAMUIN">TAMUIN</option>
      <option value="TANCANHUITZ DE SANTOS">TANCANHUITZ DE SANTOS</option>
      <option value="TANQUIAN DE ESCOBEDO">TANQUIAN DE ESCOBEDO</option>
      <option value="UNIDAD DE ANALISIS ESTRATEGICO">UNIDAD DE ANALISIS ESTRATEGICO</option>
      <option value="UNIDAD DE POLICIA PROCESAL">UNIDAD DE POLICIA PROCESAL</option>
      <option value="UNIDAD DE POLICIA Y TRANSITO ESTATAL">UNIDAD DE POLICIA Y TRANSITO ESTATAL</option>
      <option value="SECCION QUINTA DE ESTADO MAYOR">SECCION QUINTA DE ESTADO MAYOR</option>
      <option value="UNIDAD DE RECOPILACION Y ANALISIS">UNIDAD DE RECOPILACION Y ANALISIS</option>
      <option value="UNIDAD ESPECIALIZADA EN ATENCION A VIOLENCIA DE GENERO">UNIDAD ESPECIALIZADA EN ATENCION A VIOLENCIA DE GENERO</option>
      <option value="VILLA DE ARRIAGA">VILLA DE ARRIAGA</option>
      <option value="VILLA HIDALGO">VILLA HIDALGO</option>
    </select>
  </div>
</div>
  </div>

  <div class="row">
    <div class="col-md-2">
    <div class="form-group">
    <label for="AGRUPAMIENTOS" class="small-label">AGRUPAMIENTOS:</label>
    <select class="form-control form-control-sm small-input" id="AGRUPAMIENTOS" name="AGRUPAMIENTOS" >
      <option value="OP">ELIGE UNA OPCIÓN</option>
      <option value="SECCION PRIMERA DE ESTADO MAYOR">SECCION PRIMERA DE ESTADO MAYOR</option>
      <option value="SECCION QUINTA DE ESTADO MAYOR">SECCION QUINTA DE ESTADO MAYOR</option>
      <option value="SECCION TERCERA DE ESTADO MAYOR">SECCION TERCERA DE ESTADO MAYOR</option>
      <option value="SECCION CUARTA DE ESTADO MAYOR">SECCION CUARTA DE ESTADO MAYOR</option>
      <option value="SECCION SEXTA DE ESTADO MAYOR">SECCION SEXTA DE ESTADO MAYOR</option>
      <option value="SECCION SEGUNDA DE ESTADO MAYOR">SECCION SEGUNDA DE ESTADO MAYOR</option>
      <option value="COMANDANCIA">COMANDANCIA</option>
      <option value="UNIDAD DE ASUNTOS JURIDICOS">UNIDAD DE ASUNTOS JURIDICOS</option>
      <option value="UNIDAD DE TRANSPARENCIA">UNIDAD DE TRANSPARENCIA</option>
      <option value="ESTADO MAYOR">ESTADO MAYOR</option>
      <option value="SECCION SEPTIMA DE ESTADO MAYOR">SECCION SEPTIMA DE ESTADO MAYOR</option>
    </select>
  </div>  
</div>
    <div class="col-md-2">
    <div class="form-group">
    <label for="DESCRIPCION" class="small-label">DESCRIPCIÓN:</label>
    <select class="form-control form-control-sm small-input" id="DESCRIPCION" name="DESCRIPCION" >
      <option value="OP">ELIGE UNA OPCIÓN</option>
      <option value="SECCION PRIMERA DE ESTADO MAYOR">SECCION PRIMERA DE ESTADO MAYOR</option>
      <option value="SECCION QUINTA DE ESTADO MAYOR">SECCION QUINTA DE ESTADO MAYOR</option>
      <option value="SECCION TERCERA DE ESTADO MAYOR">SECCION TERCERA DE ESTADO MAYOR</option>
      <option value="SECCION CUARTA DE ESTADO MAYOR">SECCION CUARTA DE ESTADO MAYOR</option>
      <option value="SECCION SEXTA DE ESTADO MAYOR">SECCION SEXTA DE ESTADO MAYOR</option>
      <option value="SECCION SEGUNDA DE ESTADO MAYOR">SECCION SEGUNDA DE ESTADO MAYOR</option>
      <option value="COMANDANCIA">COMANDANCIA</option>
      <option value="UNIDAD DE ASUNTOS JURIDICOS">UNIDAD DE ASUNTOS JURIDICOS</option>
      <option value="UNIDAD DE TRANSPARENCIA">UNIDAD DE TRANSPARENCIA</option>
      <option value="ESTADO MAYOR">ESTADO MAYOR</option>
      <option value="SECCION SEPTIMA DE ESTADO MAYOR">SECCION SEPTIMA DE ESTADO MAYOR</option>
    </select>
  </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="POM" class="small-label">POLIZA OF.MAYOR:</label>
        <input type="text" class="form-control form-control-sm small-input" id="POM" name="POM" >
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="PGNP" class="small-label">POLIZA G.N.P:</label>
        <input type="text" class="form-control form-control-sm small-input" id="PGNP" name="PGNP" >
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="FOLIO" class="small-label">FOLIO:</label>
        <input type="text" class="form-control form-control-sm small-input" id="FOLIO" name="FOLIO" >
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-2">
      <div class="form-group">
        <label for="CHYJ" class="small-label">COMISIÓN HONOR Y JUSTICIA:</label>
        <input type="text" class="form-control form-control-sm small-input" id="CHYJ" name="CHYJ" >
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="BECARIOS" class="small-label">BECARIOS:</label>
        <input type="text" class="form-control form-control-sm small-input" id="BECARIOS" name="BECARIOS" >
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="METROPOLITANA" class="small-label">METROPOLITANA:</label>
        <input type="text" class="form-control form-control-sm small-input" id="METROPOLITANA" name="METROPOLITANA" >
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="GDOT" class="small-label">GRUPOS DE OPERACIONES TÁCTICAS:</label>
        <input type="text" class="form-control form-control-sm small-input" id="GDOT" name="GDOT" >
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="sdC" class="small-label">2DA CERTIFICACION:</label>
        <input type="text" class="form-control form-control-sm small-input" id="sdC" name="sdC" >
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-2">
      <div class="form-group">
        <label for="FDPDE" class="small-label">FECHA DE PROCESO DE EVALUACIÓN:</label>
        <input type="date" class="form-control form-control-sm small-input" id="FDPDE" name="FDPDE" >
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="FDC" class="small-label">FECHA DE CONCLUSIÓN:</label>
        <input type="date" class="form-control form-control-sm small-input" id="FDC" name="FDC" >
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="FECB" class="small-label">FECHA DE EVALUACION COMPETENCIAS BASICAS:</label>
        <input type="date" class="form-control form-control-sm small-input" id="FECB" name="FECB" >
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="FDED" class="small-label">FECHA DE EVALUACION DESEMPEÑO:</label>
        <input type="date" class="form-control form-control-sm small-input" id="FDED" name="FDED" >
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label for="FDE" class="small-label">FECHA DE EMISION:</label>
        <input type="date" class="form-control form-control-sm small-input" id="FDE" name="FDE" >
      </div>
    </div>
  </div>

  <div class="row mt-3">
  <div class="col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</div>
</form>

`,

form13: `
<form id="form13" method="post" class="small-form" action="form13.php" data-form-id="13">
  <form class="small-form">
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="NO_EMPLEADO">NO_EMPLEADO:</label>
          <input type="text" class="form-control" id="NO_EMPLEADO_13" name="NO_EMPLEADO_13" required readonly>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="PUESTO">PUESTO:</label>
          <input type="text" class="form-control" id="PUESTO" name="PUESTO" >
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="FUNCION">FUNCIÓN:</label>
          <input type="text" class="form-control" id="FUNCION" name="FUNCION" >
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="ACTIVIDADES">ACTIVIDADES:</label>
          <input type="text" class="form-control" id="ACTIVIDADES" name="ACTIVIDADES" >
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="DDE">DESCRIPCIÓN DEL ESTATUS:</label>
          <input type="text" class="form-control" id="DDE" name="DDE" >
        </div>
      </div>
    </div>
    <div class="row mt-3">
    <div class="col-md-12 text-center">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
  </form>

`, 

form14: `
<form id="form14" method="post" class="small-form" action="form14.php" data-form-id="14">
  <form class="small-form">
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="NO_EMPLEADO">NO_EMPLEADO:</label>
          <input type="text" class="form-control" id="NO_EMPLEADO_14" name="NO_EMPLEADO_14" required readonly>
        </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
      <label for="GA" class="small-label">GRUPO ACREDITABLE:</label>
      <select class="form-control form-control-sm small-input" id="GA" name="GA" >
          <option value="OP">ELIGE UNA OPCIÓN</option>
          <option value="OPERACIONES">OPERACIONES</option>
          <option value="INVESTIGACION">INVESTIGACION</option>
          <option value="ANALISIS TACTICO">ANALISIS TACTICO</option>
          <option value="INVESTIGACION MANDO">INVESTIGACION MANDO</option>
          <option value="OPERACIONES MANDO">OPERACIONES MANDO</option>
          <option value="NINGUNO">NINGUNO</option>
      </select>
  </div>  
  </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label for="BLOQUE" class="small-label">BLOQUE:</label>
    <select class="form-control form-control-sm small-input" id="BLOQUE" name="BLOQUE" >
        <option value="OP">ELIGE UNA OPCIÓN</option>
        <option value="PB">PRIMER BLOQUE</option>
        <option value="SB">SEGUNDO BLOQUE</option>
        <option value="TB">TERCER BLOQUE</option>
        <option value="NINGUNO">NINGUNO</option>
    </select>
</div>  
</div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="CMI">CURSO MANEJO ICAT:</label>
          <input type="text" class="form-control" id="CMI" name="CMI" >
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="rpet">CURSO "REPLICADOR PARA EL TALLER DEL USO DE LA FUERZA Y ARMAS DE FUEGO EN SEGURIDAD PUBLICA" CON SEDE EN SONORA DEL 15 AL 22 DE OCTUBRE DE 2022:</label>
          <input type="text" class="form-control" id="rpet" name="rpet" >
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="CSPA">Curso Sistema Penal Acusatorio:</label>
          <input type="text" class="form-control" id="CSPA" name="CSPA" >
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="JAC">Juramento al Cargo:</label>
          <input type="text" class="form-control" id="JAC" name="JAC" >
        </div>
      </div>
      <div class="col-md-3">
      <!-- Columna 2 -->
      <div class="form-group">
        <label for="NDE" class="small-label">¿CUANTOS CURSOS TIENE?:</label>
        <select type="text" id="campo49" class="form-control form-control-sm small-input" name="NDE" required>
        <option value="EUO">ELIGE UNA OPCIÓN</option>
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</1option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</1option>
        <option value="32">32</option>
        <option value="33">33</option>
        <option value="34">34</option>
        <option value="35">35</option>
        <option value="36">36</option>
        <option value="37">37</option>
        <option value="38">38</option>
        <option value="39">39</option>
        <option value="40">40</option>
        <option value="41">41</option>
        <option value="42">42</option>
        <option value="43">43</option>
        <option value="44">44</option>
        <option value="45">45</option>
        <option value="46">46</option>
        <option value="47">47</option>
        <option value="48">48</option>
        <option value="49">49</option>
        <option value="50">50</option>
        <option value="51">51</1option>
        <option value="52">52</option>
        <option value="53">53</option>
        <option value="54">54</option>
        <option value="55">55</option>
        <option value="56">56</option>
        <option value="57">57</option>
        <option value="58">58</option>
        <option value="59">59</option>
        <option value="60">60</option>
        </select>
      </div>
      <!-- Agrega más campos aquí -->
    </div>
  </div>

  <form class="small-form-name">
  <div id="lol" class="row">
    <div id="nom_esp" class="col-md-3">
      <!-- Columna 3 -->
      <div class="form-group">
        <label for="FECHA1" class="small-label2">FECHA:</label>
        <input type="date" class="form-control form-control-sm small-input2" id="FECHA1" name="FECHA1" >
      </div>
      <!-- Agrega más campos aquí -->
    </div>

    <div class="col-md-3">
      <!-- Columna 4 -->
      <div class="form-group">
        <label for="CURSO" class="small-label2">CURSO :</label>
        <input type="text" class="form-control form-control-sm small-input2" id="CURSO" name="CURSO" >
      </div>
      <!-- Agrega más campos aquí -->
    </div>

        <div class="col-md-2">
      <!-- Columna 1 -->
      <div class="form-group">
        <label for="QE" class="small-label2">¿QUIEN EXPIDE?:</label>
        <input type="text" class="form-control form-control-sm small-input2" id="QE" name="QE" >
      </div>
      <!-- Agrega más campos aquí -->
    </div>
  </div>
  
  <div class="row mt-3">
  <div class="col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</div>
</form>
`, 

form15: `
<form id="form15" method="post" class="small-form" action="form15.php" data-form-id="15">
  <div class="row">
    <div class="col-md-6">
      <!-- Columna 1 -->
      <div class="form-group">
        <label for="NO_EMPLEADO" class="small-label">NO_EMPLEADO:</label>
        <input type="text" class="form-control form-control-sm small-input" id="NO_EMPLEADO_15" name="NO_EMPLEADO_15" required readonly>
      </div>
      <!-- Agrega más campos aquí -->
      
      <div class="form-group">
        <label for="campo2" class="small-label">FECHA DE INICIO DE PERSONAL INCAPACITADO:</label>
        <input type="date" class="form-control form-control-sm small-input" id="pi" name="pi" >
      </div>
      <!-- Agrega más campos aquí -->
      
    </div>
    <div class="col-md-6">
      <!-- Columna 2 -->
      <div class="form-group">
        <label for="campo3" class="small-label">OBSERVACIONES:</label>
        <input type="text" class="form-control form-control-sm small-input" id="OBS" name="OBS" >
      </div>
      <!-- Agrega más campos aquí -->
      
      <div class="form-group">
        <label for="campo4" class="small-label">FECHA DE TERMINACIÓN DE PERSONAL INCAPACITADO:</label>
        <input type="date" class="form-control form-control-sm small-input" id="FDTD" name="FDTD" >
      </div>
      <!-- Agrega más campos aquí -->
      
      <div class="form-group">
        <label for="campo5" class="small-label">INCAPACIDAD PENDIENTE GUARDIA GENERAL:</label>
        <input type="text" class="form-control form-control-sm small-input" id="IPGG" name="IPGG" >
      </div>  
  </div>
  <div class="row mt-3">
  <div class="col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</div>
</form>
`,
  // Agregar más plantillas de formularios según sea necesario
};


function generateForm(formType) {
  formContainer.innerHTML = formTemplates[formType];
}

formSelector.addEventListener("change", function() {
  const selectedForm = formSelector.value;
  generateForm(selectedForm);
});

// Llamar a esta función cuando se inicie la página
generateForm(formSelector.value); // Generar el formulario inicial

//--------------------Edad-------------------------//
const fechaNacimientoInput = document.getElementById("campo6"); // Cambiar el ID aquí
const edadInput = document.getElementById("campo7");

  // Función para calcular la edad
  function calcularEdad(fechaNacimiento) {
    const fechaActual = new Date();
    const nacimiento = new Date(fechaNacimiento);
    let edad = fechaActual.getFullYear() - nacimiento.getFullYear();

    if (
      fechaActual.getMonth() < nacimiento.getMonth() ||
      (fechaActual.getMonth() === nacimiento.getMonth() &&
        fechaActual.getDate() < nacimiento.getDate())
    ) {
      edad--;  
    }
    return edad;
  }

  // Escuchar el evento de cambio en la fecha de nacimiento
  fechaNacimientoInput.addEventListener("change", () => {
    const fechaNacimiento = fechaNacimientoInput.value;
    const edad = calcularEdad(fechaNacimiento);
    edadInput.value = edad; // Mostrar la edad en la casilla correspondiente
  });

  const formularios = document.querySelectorAll(".formulario");

formularios.forEach((formulario) => {
  formulario.addEventListener("submit", function(event) {
    event.preventDefault();
    
    const formId = formulario.getAttribute("data-form-id");
    const mensajeResultado = document.getElementById(`mensajeResultado${formId}`);

    const formData = new FormData(formulario);

    fetch(`form${formId}.php`, {
      method: "POST",
      body: formData,
    })
      .then(response => response.text())
      .then(data => {
        if (data === "Registro exitoso.") {
          mensajeResultado.innerHTML = "<p style='color: green;'>Registro exitoso.</p>";
          setTimeout(function() {
            mensajeResultado.innerHTML = ""; // Elimina el mensaje después de 5 segundos (puedes ajustar el tiempo)
          }, 5000); // 5000 milisegundos = 5 segundos
        } else {
          mensajeResultado.innerHTML = "<p style='color: red;'>Error al insertar datos: " + data + "</p>";
        }
      })
      .catch(error => {
        mensajeResultado.innerHTML = "<p style='color: red;'>Error al comunicarse con el servidor.</p>";
        console.error(error);
      });
  });
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

  function no_empleado (ni){
    const inputElement = document.getElementById(ni);
    function handleInputChange(event) {
      newValue = event.target.value;
    }
    inputElement.addEventListener("input", handleInputChange);
  }
  no_empleado("NO_EMPLEADO");

function funcionOpcion1() {
    //asignar valor al No de empleadp
    const inputElement = document.getElementById("NO_EMPLEADO");
    inputElement.value = newValue ;
    no_empleado("NO_EMPLEADO");


  const fechaNacimientoInput = document.getElementById("campo6");
  const edadInput = document.getElementById("campo7");
  fechaNacimientoInput.addEventListener("change", () => {
    const fechaNacimiento = fechaNacimientoInput.value;
    const edad = calcularEdad(fechaNacimiento);
    edadInput.value = edad;
  });

}

function funcionOpcion2() {
  //asignar valor al No de empleadp
  const inputElement = document.getElementById("NO_EMPLEADO_2");
  inputElement.value = newValue ;
  no_empleado("NO_EMPLEADO_2");
  //
  const miSelect = document.getElementById("campo24");
  const formularioOriginal = document.getElementById("lol");
  const contenedorFormularios = formularioOriginal.parentNode;

  const miSelect2 = document.getElementById("campo29");
  const formularioOriginal2 = document.getElementById("lol_b");
  const contenedorFormularios2 = formularioOriginal.parentNode;

  miSelect.addEventListener("change", function() {
    const selectedValue = miSelect.value;
    console.log(selectedValue);

    // Eliminar los formularios clonados existentes
    const formulariosClonados = contenedorFormularios.querySelectorAll(".formulario-clonado");
    formulariosClonados.forEach(function(formularioClonado) {
      contenedorFormularios.removeChild(formularioClonado);
    });

    // Clonar y agregar nuevos formularios
    for (let i = 0; i < selectedValue - 1; i++) {
      const formularioClonado = formularioOriginal.cloneNode(true);
      formularioClonado.classList.add("formulario-clonado");
      contenedorFormularios.insertBefore(formularioClonado, formularioOriginal.nextSibling);
    
      // Obtener las IDs de los elementos dentro del formulario clonado
      const elementosClonados = formularioClonado.querySelectorAll("input[id]");
      elementosClonados.forEach(function(elementoClonado, index) {
        const nuevoId = elementoClonado.id + "_clon" + (i + 1);
        elementoClonado.id = nuevoId;
        console.log("Nuevo ID:", nuevoId);
      });
    }    
  });

  miSelect2.addEventListener("change", function() {
    const selectedValue = miSelect2.value;
    console.log(selectedValue);

    // Eliminar los formularios clonados existentes
    const formulariosClonados = contenedorFormularios2.querySelectorAll(".formulario-clonado");
    formulariosClonados.forEach(function(formularioClonado) {
      contenedorFormularios2.removeChild(formularioClonado);
    });

    for (let i = 0; i < selectedValue - 1; i++) {
      const formularioClonado = formularioOriginal2.cloneNode(true);
      formularioClonado.classList.add("formulario-clonado");
      contenedorFormularios2.insertBefore(formularioClonado, formularioOriginal2.nextSibling);
    
      // Obtener las IDs de los elementos dentro del formulario clonado
      const elementosClonados = formularioClonado.querySelectorAll("input[id]");
      elementosClonados.forEach(function(elementoClonado, index) {
        const nuevoId = elementoClonado.id + "_clon" + (i + 1);
        elementoClonado.id = nuevoId;
        console.log("Nuevo ID:", nuevoId);
      });

      const fechaNacimientoInput = document.getElementById("campo34"+ "_clon" + (i + 1));
      const edadInput = document.getElementById("campo35"+ "_clon" + (i + 1));
      fechaNacimientoInput.addEventListener("change", () => {
        const fechaNacimiento = fechaNacimientoInput.value;
        const edad = calcularEdad(fechaNacimiento);
        edadInput.value = edad; // Mostrar la edad en la casilla correspondiente
      });
      
    } 

  });

  const fechaNacimientoInput = document.getElementById("campo34");
  const edadInput = document.getElementById("campo35");
  fechaNacimientoInput.addEventListener("change", () => {
    const fechaNacimiento = fechaNacimientoInput.value;
    const edad = calcularEdad(fechaNacimiento);
    edadInput.value = edad; // Mostrar la edad en la casilla correspondiente
  });

  miSelect.addEventListener("change", function() {
    const selectedValue = miSelect.value;
    console.log(selectedValue);
  
    // Ocultar los campos y etiquetas campo25, campo26 y campo27 si la selección en campo24 es "0"
    const campos24aOcultar = document.querySelectorAll("#campo25, #campo26, #campo27");
    campos24aOcultar.forEach(function(campo) {
      if (selectedValue === "0") {
        campo.style.display = "none";
        const label = campo.previousElementSibling; // Obtener la etiqueta del campo
        if (label && label.tagName === "LABEL") {
          label.style.display = "none"; // Ocultar la etiqueta
        }
      } else {
        campo.style.display = "block";
        const label = campo.previousElementSibling; // Obtener la etiqueta del campo
        if (label && label.tagName === "LABEL") {
          label.style.display = "block"; // Mostrar la etiqueta
        }
      }
    });
  
  });
  
  miSelect2.addEventListener("change", function() {
    const selectedValue = miSelect2.value;
    console.log(selectedValue);
  
    // Ocultar los campos y etiquetas ampo30, ampo31, ampo32, SEXOH, campo34, campo35, si la selección en campo29 es "0"
    const campos29aOcultar = document.querySelectorAll("#campo30, #campo31, #campo32, #campo11, #campo34, #campo35");
    campos29aOcultar.forEach(function(campo) {
      if (selectedValue === "0") {
        campo.style.display = "none";
        const label = campo.previousElementSibling; // Obtener la etiqueta del campo
        if (label && label.tagName === "LABEL") {
          label.style.display = "none"; // Ocultar la etiqueta
        }
      } else {
        campo.style.display = "block";
        const label = campo.previousElementSibling; // Obtener la etiqueta del campo
        if (label && label.tagName === "LABEL") {
          label.style.display = "block"; // Mostrar la etiqueta
        }
      }
    });

  });
}


function funcionOpcion3() {
  //asignar valor al No de empleado
  const inputElement = document.getElementById("NO_EMPLEADO_3");
  inputElement.value = newValue ;
  no_empleado("NO_EMPLEADO_3");
  //
}

function funcionOpcion4() {
 //asignar valor al No de empleadp
 const inputElement = document.getElementById("NO_EMPLEADO_4");
 inputElement.value = newValue ;
 no_empleado("NO_EMPLEADO_4");
}

function funcionOpcion5() {
  //asignar valor al No de empleadp
  const inputElement = document.getElementById("NO_EMPLEADO_5");
  inputElement.value = newValue ;
  no_empleado("NO_EMPLEADO_5");
}

function funcionOpcion6() {
   //asignar valor al No de empleadp
   const inputElement = document.getElementById("NO_EMPLEADO_6");
   inputElement.value = newValue ;
   no_empleado("NO_EMPLEADO_6");
}

function funcionOpcion7() {
   //asignar valor al No de empleadp
   const inputElement = document.getElementById("NO_EMPLEADO_7");
   inputElement.value = newValue ;
   no_empleado("NO_EMPLEADO_7");
}

function funcionOpcion8() {
   //asignar valor al No de empleadp
   const inputElement = document.getElementById("NO_EMPLEADO_8");
   inputElement.value = newValue ;
   no_empleado("NO_EMPLEADO_8");
}

function funcionOpcion9() {
  //asignar valor al No de empleadp
  const inputElement = document.getElementById("NO_EMPLEADO_9");
  inputElement.value = newValue ;
  no_empleado("NO_EMPLEADO_9");
}

function funcionOpcion10() {
  //asignar valor al No de empleadp
  const inputElement = document.getElementById("NO_EMPLEADO_10");
  inputElement.value = newValue ;
  no_empleado("NO_EMPLEADO_10");
}

function funcionOpcion11() {
  //asignar valor al No de empleadp
  const inputElement = document.getElementById("NO_EMPLEADO_11");
  inputElement.value = newValue ;
  no_empleado("NO_EMPLEADO_11");
}

function funcionOpcion12() {
  //asignar valor al No de empleadp
  const inputElement = document.getElementById("NO_EMPLEADO_12");
  inputElement.value = newValue ;
  no_empleado("NO_EMPLEADO_12");
}

function funcionOpcion13() {
  //asignar valor al No de empleadp
  const inputElement = document.getElementById("NO_EMPLEADO_13");
  inputElement.value = newValue ;
  no_empleado("NO_EMPLEADO_13");
}


function funcionOpcion14() {

    //asignar valor al No de empleadp
    const inputElement = document.getElementById("NO_EMPLEADO_14");
    inputElement.value = newValue ;
    no_empleado("NO_EMPLEADO_14");

  const miSelect = document.getElementById("campo49");
  const formularioOriginal = document.getElementById("lol");
  const contenedorFormularios = formularioOriginal.parentNode;


  miSelect.addEventListener("change", function() {
    const selectedValue = miSelect.value;
    console.log(selectedValue);

    // Eliminar los formularios clonados existentes
    const formulariosClonados = contenedorFormularios.querySelectorAll(".formulario-clonado");
    formulariosClonados.forEach(function(formularioClonado) {
      contenedorFormularios.removeChild(formularioClonado);
    });

    // Clonar y agregar nuevos formularios
    for (let i = 0; i < selectedValue - 1; i++) {
      const formularioClonado = formularioOriginal.cloneNode(true);
      formularioClonado.classList.add("formulario-clonado");
      contenedorFormularios.insertBefore(formularioClonado, formularioOriginal.nextSibling);
    
      // Obtener las IDs de los elementos dentro del formulario clonado
      const elementosClonados = formularioClonado.querySelectorAll("input[id]");
      elementosClonados.forEach(function(elementoClonado, index) {
        const nuevoId = elementoClonado.id + "_clon" + (i + 1);
        elementoClonado.id = nuevoId;
        console.log("Nuevo ID:", nuevoId);
      });
    }    
  });
; 

// Obtener los elementos del formulario
const campo49 = document.getElementById("campo49");
const camposOcultarForm14 = document.querySelectorAll("#campo50, #campo51, #campo52");

campo49.addEventListener("change", function() {
  const selectedValueCampo49 = campo49.value;
  console.log(selectedValueCampo49);

  // Ocultar los campos si la selección es "0"
  camposOcultarForm14.forEach(function(campo) {
    if (selectedValueCampo49 === "0") {
      campo.style.display = "none";
      const label = campo.previousElementSibling; // Obtener la etiqueta del campo
      if (label && label.tagName === "LABEL") {
        label.style.display = "none"; // Ocultar la etiqueta
      }
    } else {
      campo.style.display = "block";
      const label = campo.previousElementSibling; // Obtener la etiqueta del campo
      if (label && label.tagName === "LABEL") {
        label.style.display = "block"; // Mostrar la etiqueta
      }
    }
  });
});
}

function funcionOpcion15() {
  //asignar valor al No de empleadp
  const inputElement = document.getElementById("NO_EMPLEADO_15");
  inputElement.value = newValue ;
  no_empleado("NO_EMPLEADO_15");
}
  
var selectElement = document.getElementById("formSelector");
selectElement.addEventListener("change", opcionSeleccionada);

 




