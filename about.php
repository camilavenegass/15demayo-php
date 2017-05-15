<?php include('cabeza.php');?>
<section>
<?php
$datos = array_map('str_getcsv', file('portafolio-academico.csv'));
// pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
array_walk($datos, function(&$a) use ($datos) {$a = array_combine($datos[0], $a);});
array_shift($datos);
?>
<h2>Sobre el proyecto</h2>
<p>“La herida es la memoria del cuerpo; memoriza la fragilidad, el dolor, es decir, su existencia real. Es una defensa en contra del objeto y de las prótesis mentales.” - Gina Pane
</p>
<p>Constitución de la memoria corporal a través del dolor</p>
<p>Tortura y violencia en Chile 1973-1990. </p>
<p>Proyecto de Investigación sobre como las marcas provocadas en el cuerpo a través del dolor (tortura/flajelación) evocan una memoria en las victimas de la dictadura en Chile.</p>

</section>
<?php include('pie.php');?>
