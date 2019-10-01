<html>
 <head>
  <title>Ejercicio 1</title>
 </head>
 <body>
    <?php
    
    include "N3P1_2_CristianGarcia.php";
    
    date_default_timezone_set('Europe/Madrid');
    $diaHoy = date('d');
    $diaAyer = $diaHoy-1;
    $ayer = date('l',$diaHoy);
        
    $mesPasado = strtotime('-1 month' , strtotime(date('F')));
    $mesPasado = date('F', $mesPasado);
    
    $diasDelMes = date('t');
    $dias = $diasDelMes - $diaHoy;
    
    $mesHoy = date('m');
    $meses = 12-$mesHoy;
    
    echo "<br/>";
    echo "<br/>";    
    echo "ayer fue ", $ayer;
    echo "<br/>";
    echo "el mes anterior fue ", $mesPasado;
    echo "<br/>";
    echo "quedan ", $dias, " dias para acabar el mes";
    echo "<br/>";
    echo "quedan ", $meses, " meses para acabar el año";
    
    
    //-------------------------------------------------------------------------------------------
    
    /*
     *  primavera -> del 01-03 al 31-05
     *  verano -> del 01-06 al 31-08
     *  otoño -> del 01-09 al 30-11
     *  invierno -> del 01-12 al 28-02
    */
   
    echo "<br/>";
    echo "<br/>"; 
    
    if($mesHoy>=3 && $mesHoy<=5){
        echo "<h1>FELIZ PRIMAVERA</h1>";
    }else if($mesHoy>=6 && $mesHoy<=8){
        echo "<h1>FELIZ VERANO</h1>";
    }else if($mesHoy>=9 && $mesHoy<=11){
        echo "<h1>FELIZ OTOÑO</h1>";    
    }else if($mesHoy>=12 && $mesHoy<=2){
        echo "<h1>FELIZ INVIERNO</h1>";
    }
    
    //-------------------------------------------------------------------------------------------
    
    $color=$_POST['color'];
    $texto=$_POST['texto'];
    $letra=$_POST['tipografia'];
    $tamanio=$_POST['tamanio'];

    echo "<font color=$color face=$letra size=$tamanio>";
    echo "<p>$texto</p>";
    echo "</font>";
  

    //-------------------------------------------------------------------------------------------
    
    
    if($_POST['cookie']==true){
        $valor="color:$color -> tipo de letra:$letra -> tamaño de letra:$tamanio -> texto:$texto";
        setcookie("valores",$valor,time()+10);
    }

    ?>
 </body>
</html>


