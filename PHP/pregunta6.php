<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <title>Document</title>
</head>
<body class="fondobatalla">
<link href="enlace nivel 6"><img src="imagen nivel 6">

<form method="get">
<p>¿Qué tipo de Pokémon es Gengar?<p>
<input type="radio" id="respuesta1" name="respuesta" value="a">
<label for="respuesta1">a. Fantasma/Veneno</label><br> correcta
<input type="radio" id="respuesta2" name="respuesta" value="b">
<label for="respuesta2">b. Siniestro/Fantasma</label><br>
<input type="radio" id="respuesta3" name="respuesta" value="c">
<label for="respuesta3">c.  Veneno</label><br>
<input type="radio" id="respuesta4" name="respuesta" value="d">
<label for="respuesta4">d. Fantasma</label><br><br>
<button>Enviar</button>
</form>  


<?php 

$respuesta_usuario=$_GET['respuesta'];  /*Recojo la respuesta del usuario*/

if($respuesta_usuario=="a"){

  header("Location:../inicio.html");
}
/*Si la respuesta del usuario es la "a", lo enviará a la pantalla inicial*/
?>

</body>

<?php

session_start();


if (empty($SESSION['tick_5'])){

$_SESSION['tramposo']=1;


}




/*Estadísticas de nuestro pokémon*/

$pv=20;

$pd=4;

/*------------------------------------------------------------------------*/

/*Estadísticas de nuestro pokémon*/

pv_rival=10;

$pd_rival=2;

/*------------------------------------------------------------------------*/






for(i=0;i<1000000;i++){         /*Se repetirá esta estructura hasta que uno de los dos se quede sin vida */


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

$_SESSION['tick_6']=1; /*Esto para la fase extra */

$i=1000000000000000;

}

}



session_destroy();


?>










































</body>
</html>