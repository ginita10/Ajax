<?php 

if(!empty($_POST['nombre'])){

$nombre = $_POST['nombre'];
$grado = $_POST['grado'];
$valor = $_POST['valorBase'];
$opcion = $_POST['seleccionarCurso'];
$curso = $_POST['curso'];


if(($opcion == "PrimeroA") || ($opcion == "PrimeroB")  || ($opcion == "PrimeroC"))
$valor += 35000;

}elseif (($opcion == "SegundoA") || ($opcion == "SegundoC")) {
	$valor += 70000;
}

$porcentaje = 0;
if($curso == "Danzas"){
	$porcentaje = ($valor * 20)/100;
}elseif ($curso == "Teatro") {
	$porcentaje = ($valor * 25)/100;
}elseif ($curso == "Musica") {
	$porcentaje = ($valor * 30)/100;
}elseif ($curso == "Dibujo") {
	$porcentaje = ($valor * 35)/100;
}

$total = $valor + $porcentaje;

echo "El Estudiante: ".$nombre;
echo "<br>";
echo "Tiene un Costo Total de matricula de: ".$valor;


?>