<?php

session_start();
$_SESSION['numero'];

$_POST['color'];
$_POST['tipografia'];
$_POST['tamanio'];
$_POST['texto'];
$_POST['cookie'];

include "N3P1_2_CristianGarcia.php";
?>

<html>
 <head>
  <title>formato de texto</title>
 </head>
 <body>
    <form method="post" action="N3P1_1_CristianGarcia.php">
       <p>Selecciona el color del texto: 
        <input type="color" name="color"/>
       </p>
       <p>selecciona la tipografia que quieres:
        <select name="tipografia">

            <option>Verdana</option>
            <option>Arial</option>
            <option>impact</option>
               
        </select>
       </p>
       <p>selecciona el tamaño de letra: 
        <input type="text" name="tamanio"/>
       </p>
       <p>introduce el texto:</p>
        <textarea type="text" name="texto" rows="10" cols="40">Escribe aquí el texto a mandar</textarea>     
       <p>quieres guardar los valores?: 
        <input type="checkbox" name="cookie"/>
       </p>
        <br/>
        <br/>
        <input type="submit" name="enviar" value="Enviar"/>
    </form>  
    
    <?php

    $valor_cookie=empty($_COOKIE["valores"] ? false:true);
    if($valor_cookie==true){
        echo "<br/> los valores de la cookie son: <br/>";
        echo $_COOKIE["valores"];
    }else{
        echo "no hay cookie guardada";
    }
    
    
    //---------------------------------------------------------------------------------------------------------------
    
    
    if(isset($_SESSION['numero'])){
        
        if(empty($_SESSION['numero'])){
            $_SESSION['numero']=0;
        }else{
            $_SESSION['numero']=$_SESSION['numero']+1;
        }

    }
    echo "<br/><br/>";
    echo "veces en las que se han iniciado sesion: ";
    echo $_SESSION['numero'];
    
    ?>
    
 </body>
</html>
