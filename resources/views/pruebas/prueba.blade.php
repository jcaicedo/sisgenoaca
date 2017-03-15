<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Radio button Jhoselin</title>
  <style>
  input, label {
    line-height: 1.5em;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<form>
  <div>
    <input type="radio" name="perfil" value="formacion" id="formacion">
    <label for="calculo">Perfil de Formación</label>
  </div>
  <div>
    <input type="radio" name="perfil" value="calculo" id="calculo">
    <label for="calculo">Perfil de Calculo</label>
  </div>
  <div>
    <input type="radio" name="perfil" value="nuevo" id="nuevo">
    <label for="nuevo">Crear Perfil</label>
  </div>
  <div id="log"></div>
</form>
 
<script>
$( "input" ).on( "click", function() {
	var check = $( "input:checked" ).val();

	switch(check)
	{
		case 'formacion':
		alert('Perfil de Formación');
		break;

		case 'calculo':
		alert('Perfil de Calculo');
		break;

		case 'nuevo':
		alert('Crear Perfil');
		break;
	}

	// console.log(check);
 //  $( "#log" ).html( $( "input:checked" ).val() + " is checked!" );
});
</script>
 
</body>
</html>