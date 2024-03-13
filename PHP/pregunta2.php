<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <title>Document</title>
</head>
<body class="fondobatalla">
<link href="enlace nivel 2"><img src="imagen nivel 2">

<form method="get">
<label>Pregunta 1:</label>
<input type="text" name="pregunta1">
<button>Enviar</button>
</form>

<?php


session_start();


if (empty($_SESSION['tick_1'])){

$_SESSION['tramposo']=1;

header(location:GAME_OVER.html)

}




/*Estadísticas de nuestro pokémon*/

$pv=20;

$pd=4;

/*------------------------------------------------------------------------*/

/*Estadísticas de nuestro pokémon*/

pv_rival=10;

$pd_rival=2;

/*------------------------------------------------------------------------*/






for($i=0;$i<1000000;$i++){         /*Se repetirá esta estructura hasta que uno de los dos se quede sin vida */


if($_SESSION['pregunta1.php'] != "respuesta_correcta"){

echo "Te has equivocado";


/* Recibir daño */

$pv= $pv - $pd_rival;

/* Si la vida llega a 0 salir del bucle y decir que has perdido el combate */


}else{


echo "Has acertado";

/*Hacer daño*/

$pv_rival= $pv_rival - $pd;



/* Si la vida del oponente llega a 0 pasamos a la siguiente pantalla */


}



if ($pv<=0){


/*GAME OVER*/

header(location:GAME_OVER);

$i=100000000000000;
}

if ($pv_rival<=0){


/*PASAR A LA SIGUIENTE PANTALLA*/
$_SESSION['tick_2']=1;

$i=1000000000000000;

}

}






?>