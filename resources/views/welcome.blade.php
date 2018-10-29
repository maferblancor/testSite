@extends('layouts.app')

@section('content')


<div class="container" align="left">
  <h4>Extraccion de la informacion</h4>
  <p>Para extraer la informacion de la data que se provee se utiliza el codigo del modulo 1 que sigue los siguientes pasos: </p><ul>
  	<li>Limpieza y formateo de datos</li>
  	<li>Apertura de conexion con base de datos</li>
  	<li>Envio de datos a base de datos MySQL en <a href="http://db4free.net">db4free</a> con usuario datatest0 y contrasena 00000000</li>
  	<li>Cierre de conexion con base datos</li>
  </ul>

 
  <div class="button" align="center">
  	<a class="btn btn-sm btn-outline-secondary" href="/module1">Modulo 1</a>		
  </div>	
  
</div>
     
<div class="container" align="left">
  <h4>Consulta de informacion</h4>
  <p>La informacion ahora se encuentra en la base de datos, ahora puede ser consultada por el codigo del modulo 2, respondiendo las siguientes solicitudes:</p>	

  <ol>
  	<li>Marcas disponibles en el informe y cantidad de registros por marca</li>
  	<li>Total de marcas por KPI</li>
  	<li>Resultados de cada marca por KPI</li>
  	<li>% de variación entre costos planeado y costo real </li>
  	<li>Proveedores, marcas y formatos con mayor inversion mes a mes</li>
  </ol>

  <p>Se proveen graficos para cada consulta.</p>

	<div class="button" align="center">
		<a class="btn btn-sm btn-outline-secondary" href="/module2">Modulo 2</a>	
	</div>
  
</div>

<div class="container" align="left">
  <h4>Formulario de datos</h4>
  <p>La informacion se encuentra en la base de datos de <a href="http://db4free.net">db4free</a> en esta parte debe hacer Sing In en esta pagina para llenar un formulario, los datos de acceso son:</p>	

  <ul>
  	<li>Email: user@test.com</li>
  	<li>Password: 00000000</li>
  </ul>

  <p>Los datos requeridos son: </p>

  <ol>
  	<li>La marca(autocompletado)</li>
  	<li>El proyecto(autocompletado)</li>
  	<li>Fecha de inicio</li>
  	<li>Fecha de fin</li>
  	<li>KPI (selecion)</li>
  	<li>Inversion</li>
  </ol>

  <p>Estos datos se guardan en otra base de datos de <a href="db4free.net" >db4free</a> con usuario respuesta_formu y contrasena 00000000.</p>

  <p>Se valida la obligatoriedad de todos los campos y el formato del campo inversion.</p>


	<div class="button" align="center">
		<a class="btn btn-sm btn-outline-secondary" href="/formulario">Formulario</a>	
	</div>
    
	<div class="container" align="left">
	  <h4>Analisis de informacion</h4>
	  <p>La informacion de la primera base de datos llamada datatest0, se extrae en el codigo del modulo 3 y se proceden a realizar algunos analisis, basados en graficos y regresiones lineales y polinomiales.</p>	

	  <ol>
	  	<li>Analisis 1: Por dispersion de grafico</li>
	  	<li>Analisis 2: Por regresion lineal en uno y dos argumentos</li>
	  	<li>Analisis 3: Por regresion polinomial en un arguemento</li>
	  </ol>

	  <p> Se asume que las variales de interes son: clics, views, interaccion e impresiones para este ejemplo y que las variables de estudio son las inversiones en USD y los formatos.</p>

	  <p>Se hicieron pruebas en el analisis de la variable clics, en comparacion con los valores de inversiones en USD y los formatos, sin embargo no se encontraron resultados concluyentes y las predicciones que se hacen no cumplen con un minimo de veracidad. Se concluye que para la variable clics y los valores de inversion en usd y formato no tienen una relacion lo suficientemente fuerte como para realizar alguna afirmacion, aunque se estima, que la falta de resultados tambien se puede deber al tamano de los datos proporcionados. </p>

	  <p>En el analisis realizado no se encontraron resultados concluyentes y las predicciones que se hacen no cumplen con un minimo de veracidad. </p>
	  
		<div class="button" align="center">
			<a class="btn btn-sm btn-outline-secondary" href="/module3">Modulo 3</a>	
		</div>
	  
	</div>
	<hr>
</div>
     
     
@endsection
