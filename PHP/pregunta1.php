<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <title>Document</title>
</head>
<body class="fondobatalla">
  

<form  method="get">
 <p>¿Cuál es el Pokémon inicial de tipo fuego en la región de Kanto?<p>
 <input type="radio" id="respuesta1" name="respuesta" value="a">
  <label for="respuesta1">a. Bulbasaur</label><br>
  <input type="radio" id="respuesta2" name="respuesta" value="b">
  <label for="respuesta2">b. Charmander</label><br>
  <input type="radio" id="respuesta3" name="respuesta" value="c">
  <label for="respuesta3">c.  Squirtle</label><br>
  <input type="radio" id="respuesta4" name="respuesta" value="d">
  <label for="respuesta4">d. Pikachu</label><br><br>
 <button class="bajo">Enviar</button>
</form>


<div>
  <img class="rival" src="../IMG/candelabro enemigo (de frente).gif">
</div>
<div>
  <img class="aliado" src="../IMG/umbreon_espaldas.gif">
</div>


<?php 

$respuesta_usuario=$_GET['respuesta'];  /*Recojo la respuesta del usuario*/

if($respuesta_usuario=="b"){
                                          /*Aquí pondré la barra de vida del rival a 0*/
  header("Location:../inicio.html");
}
/*Si la respuesta del usuario es la "b", lo enviará a la pantalla inicial*/
?>

<progress id="file" max="100" value="100">100%</progress>

<script>

var respuesta_usuario = document.querySelector('input[name="respuesta"]:checked').value;
var progressBar = document.getElementById("file");

if (respuesta_usuario == 'b') {
progressBar.value = 0;
}

</script>

</body>




<!-- <?php

session_start();







/*Estadísticas de nuestro pokémon*/

$pv=20;

$pd=4;

/*------------------------------------------------------------------------*/

/*Estadísticas de nuestro pokémon*/

$pv_rival=10;

$pd_rival=2;

/*------------------------------------------------------------------------*/






for($i=0;$i<1000000;$i++){         /*Se repetirá esta estructura hasta que uno de los dos se quede sin vida */


if($_GET['pregunta1.php'] != "respuesta_correcta"){

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

// header("location:../GAME_OVER.html");

$i=100000000000000;

}

if ($pv_rival<=0){


/*PASAR A LA SIGUIENTE PANTALLA*/

$_SESSION['tick_1']=1;


$i=1000000000000000;

header(location:inicio.html);
}

}/*Fin del for*/






?> -->

/*
<form>
<label>File progress:</label>
<?php 
   $a=10; 
?>

<progress  max="20" value=<?php "$a"; ?>>100%</progress>

</form>


*/











</body>
</html>