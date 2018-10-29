<html>
<head>
    <title>Formulario</title>
 
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/blog.css" rel="stylesheet">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- Datepicker Files -->
    
    <script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}"></script>
    <!-- Languaje -->
    <script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
       
        <h2>Formulario de prueba</h2>
        <p class="lead">Este formulario autocompleta marca y modelo, solicita fecha de inicio y fecha de fin permite la seleccion multiple de KPI, solicita un valor numerico para la variable inversion y muestra un mensaje de alerta para diligenciar solamente valores en euros. </p>
      </div>

        <div class="col-md-12 order-md-1" align="center">
          <form action="/formulario" method="post">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="marca">Marca</label>
                <input type="text" class="form-control" id="tags2" placeholder="" name="tags2"  required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="proyecto">Proyecto</label>
                <input type="text" class="form-control" id="tags" placeholder="" name="tags" required>
                
              </div>
            </div>

            <div class="row">  

              <div class="col-md-6 mb-3">
                
                <label for="date1">Fecha Inicio</label>
                <input type="date" class="form-control datepicker" name="date1" id="date1" required>
              
              </div> 

              <div class="col-md-6 mb-3">
              
                <label for="date2">Fecha Fin</label>
                <input type="date" class="form-control datepicker" name="date2" id="date2" required>
              
              </div>
            
            </div>
            <hr class="mb-4">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="KPI">KPI</label>
                <select class="custom-select d-block w-100" id="KPI" name="KPI"required>
                  @foreach ($KPI as $kp)
                  <option>{{ $kp }}</option>
                  @endforeach
                </select>
              </div>

              <div class="col-md-6 mb-3">
                <label for="inversion">Inversion</label>
                <input type="text" class="form-control" id="inversion" placeholder=""  required  onclick="alert('Solo se diligencian valores en Euros')" name="inversion" required>              
              </div>
      
            </div>
            <hr class="mb-4">  
            <div class="form-group">
              <button class="btn btn-secondary btn-lg btn-block" type="submit">Enviar formulario</button>
            </div>
          </form>
    </div>
@include('layouts.errors')


<div class="row" align="center">
  <div class="col-md-12 mb-3">
 <a href="/" "back">Atras</a> 
</div>
</div>
</div>

   

  <script>
  $( function() {
    var availableTags = ['J-134','D-42','C-23','G-31','W-30','M-26','F-116','A-22','H-6' ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
  <script>
  $( function() {
    var availableTags2 = ['A-140', 'D-42', 'D-45', 'M-31', 'R-172'];
    $( "#tags2" ).autocomplete({
      source: availableTags2
    });
  } );
  </script>

  </body>
</html>

