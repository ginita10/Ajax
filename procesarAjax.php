<?php 
$miSelect = $_POST["cursos"];
$primeroA = array("Danzas","Teatro","Dibujo");
$primeroB = array("Danzas","Musica");
$primeroC = array("Teatro","Dibujo","Musica");

$arrayDevolver;

$segundoA = array("Teatro","Dibujo");
$segundoC = array("Teatro","Musica");

$miCurso = "<strong> Seleccione el Curso </strong>";

if($miSelect == 'PrimeroA'){
	//console.log("Estoye en el if");
	$arrayDevolver = $primeroA;
}elseif ($miSelect == 'PrimeroB') {
	$arrayDevolver = $primeroB;
}elseif ($miSelect == 'PrimeroC') {
	$arrayDevolver = $primeroC;
}elseif ($miSelect = 'SegundoA') {
	$arrayDevolver = $segundoA;
}elseif ($arrayDevolver = 'segundoC') {
	$arrayDevolver = $segundoC;
}

$miCurso .= "<select id='curso' name='curso'>";
foreach ($arrayDevolver as $item) {
	$miCurso .= "<option value=".$item.">".$item."</option>";
}
$miCurso .="</select>";

echo $miCurso;
?>