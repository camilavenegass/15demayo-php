<!DOCTYPE html>
<html lang="es">
<?php
$title = "Memoria corporal a través del dolor";
$descripcion = "las marcas provocadas en el cuerpo a través del dolor (tortura/flajelación) evocan una memoria en las victimas.";
?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo($title);?></title>
<!--acá vamos a meter varios metadatos-->
<meta name="description" content="<?php echo($descripcion);?>">
<link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/style.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-10 col-sm-offset-1">
<header>
<div class="masthead clearfix">
<div class="inner">
<h1 class="masthead-brand"><?php echo($title);?></h1>
<nav>
<ul class="nav masthead-nav">
<li<?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?> class="active" <?php };?>><a href="index.php">Portada</a></li>
<li<?php if((basename($_SERVER['PHP_SELF']))=='datosamigos.php'){?> class="active" <?php };?>><a href="datosamigos.php">Datos amigos</a></li>
<li<?php if((basename($_SERVER['PHP_SELF']))=='about.php'){?> class="active" <?php };?>><a href="about.php">Sobre el proyecto</a></li>
</ul>
</nav>
</div>
</div>
</header>
