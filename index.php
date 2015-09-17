<!DOCTYPE html>
<html lang="en">
<head >
<meta charset="UTF-8">
	<title>Ejercicio Ajax</title>
	<script src="js/jquery-1.11.3.js"></script>
</head>
<body>
<fieldset align="center">
	<legend>Por favor Registre Sus Datos</legend>
	
	<form action="calcular.php" method="POST">
	<br>
		<label font-family: "Times New Roman"><strong>Por favor escriba el nombre del estudiante</strong></label>
		<br>
		<input type="text" name="nombre" placeholder="Nombre Del Estudiante" required>
		<br>
		<label><strong>Por Favor Escriba El Curso Del Estudiante</strong></label>
		<br>
		<input type="text" name="grado" placeholder="Curso del estudiante" required>
		<br>
		<label><strong>Por Favor Escriba el Valor Base</strong></label>
		<br>
		<input type="number" name="valorBase" placeholder="Valor base de salario">
		<br>
		<select id="seleccionarCurso" name="seleccionarCurso">
			<option value="Seleccione">Seleccione Una Opcion</option>
			<option value="PrimeroA">Primero A</option>
			<option value="PrimeroB">Primero B</option>
			<option value="PrimeroC">Primero C</option>
			<option value="SegundoA">Segundo A</option>
			<option value="SegundoC">Segundo C</option>
		</select>
		<br>

		<div id="Resultado"></div>
		<input type="submit" value="Pulse para Evaluar">
	</form>

</fieldset>

	<script>

	$("#seleccionarCurso").change(function(){

		var seleccion = $("#seleccionarCurso").val();
		$.ajax({
			method:"POST",
			url:"procesarAjax.php",
			data: {cursos: seleccion}
		})
		.done(function( msg ){
			$("#Resultado").html(msg);
		});

	});


	</script>
</body>
</html>