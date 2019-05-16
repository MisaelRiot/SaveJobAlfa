<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Solicitud</title>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="paginaUsuario.css"> -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}
.bg{
    position: absolute;
    /* top: 7vh; */
    left: 0;
    width: 100%;
    height: 100vh;
    overflow-y: hidden;
    z-index:-1;

    /* height: 100vh; */

}

#regForm {
  background-color: #e1dbdb80;
  margin: 0;
  font-family: Raleway;
  padding: 40px;
  width: 40%;
  min-width: 300px;
  opacity: 0.9;
  position: fixed;
  top: 20%;
  left: 30%;
  border-radius: 51px;
}

h1 {
  text-align: center;
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">SaveJob</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Notificationes <span id="nota" style="  background-color: #fa3e3e; border-radius: 2px; color: white; padding: 1px 3px; font-size: 10px;">
             6</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
            <div class="" style="max-height:50px; overflow:auto;">
              <a class="dropdown-item" href="#">Notificación 1</a>
              <a class="dropdown-item" href="#">Notificación 2</a>
            </div>

            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Ver todas..</a>
          </div>



        </li>
        <li class="nav-item drop">
          <a class="nav-link" href="#">Editar perfil</a>
        </li>
      </ul>
    </div>
  </nav>

  <img src="{{ asset('user/img/menu/FondoPerfil.png') }}" class="bg" alt="">

<form id="regForm" action="{{ route('solicitudenvio')}}" method="post">
  @csrf
  <h1>Solicitar Tutoría:</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
    <h3></h3>
    <hr>
    <div class="form-group">
      <label for="inputAddress">Dirección</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="direccion">
    </div>
    <div class="form-group">
      <label for="inputDescripcion">Descripción</label>
      <input type="text" class="form-control" id="inputDescripcion" placeholder="Dale al prestador los detalles de tu solicitud..." name="descripcion">
    </div>
  </div>

  <div class="tab">
    <hr>
    <div class="form-row">
      <div class="form-group col-md-6">

        <div class="form-group">
          <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
              <input type="text" class="form-control datetimepicker-input" name="fecha" placeholder="Fecha" data-target="#datetimepicker4"/>
              <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
              </div>
          </div>
      </div>
      </div>

      <div class="form-group col-md-2">

      </div>

      <div class="form-group col-md-4">

        <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
              <input type="text" class="form-control datetimepicker-input center" name="time" placeholder="Hora" data-target="#datetimepicker3"/>
              @error('time')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="far fa-clock"></i></div>
              </div>
          </div>
      </div>

    </div>
  </div>

  <div class="tab">Asignatura:
    <div class="form-row">
      <div class="form-group col-md-12">

        <select id="inputState" class="form-control">
          <option selected>Universidad</option>
          <option>Universidad de los Andes</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
        </select>
      </div>
    </div>

    <div class="form-row">

      <div class="form-group col-md-6">

        <select id="inputState" class="form-control">
          <option selected>Facultad</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
        </select>
      </div>

      <div class="form-group col-md-6">

        <select id="inputState" class="form-control">
          <option selected>Carrera</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
        </select>
      </div>



    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <select id="inputState" class="form-control">
          <option selected>Semestre o Pensum</option>
          <option>Calculo I</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
        </select>

      </div>

      <div class="form-group col-md-6">

        <select id="inputState" class="form-control" name="asignatura">
          <option selected>Asignatura</option>
          <option value=1>Matematicas</option>
          <option value=2>Programación</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
        </select>
      </div>
    </div>


  </div>
  <div class="tab">
    <div class="form-group col-md-6">
      <label for="inputHoras">Numero de Horas</label>
      <select id="numerohoras" class="form-control" name="numerohoras">
        <option selected>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
      </select>

    </div>

    <div class="form-group col-md-6">
      <label id='precio2'></label>
    </div>

    <div class="form-group col-md-4">
      <button type="button" onclick="mostrarTarifa()" class="btn btn-primary col-md-12">Calcular Tarifa</button>
    </div>

  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Siguiente</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Confirmar";
  } else {
    document.getElementById("nextBtn").innerHTML = "Siguiente";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
<!-- Optional JavaScript -->
<script type="text/javascript">
  $(function () {
      $('#datetimepicker4').datetimepicker({
          format: 'L'
      });
  });
</script>
<script type="text/javascript">
        $(function () {
            $('#datetimepicker3').datetimepicker({
                format: 'LT'
            });
        });
</script>

<script type="text/javascript">
    function mostrarTarifa() {
    let precio =  parseInt(document.getElementById("numerohoras").value);
    let precioFinal =  17000*precio;
    console.log(precioFinal);
    document.getElementById("precio2").innerHTML='Tu tarifa es: $' + precioFinal + ' COP';
    }
</script>
</body>
</html>
