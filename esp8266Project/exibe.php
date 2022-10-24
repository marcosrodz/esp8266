<html><head><link href="estilo.css" rel="stylesheet"/><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head></html>
<?php
    include 'conecta.php';
    $sqlUltimaTemp = "SELECT temperatura from controlador1 where id = (select max(id) from controlador1)";
    $sqlMedia = "SELECT AVG(temperatura) FROM controlador1";
    $sqlMax = "SELECT MAX(temperatura) FROM controlador1";
    $sqlMin = "SELECT MIN(temperatura) FROM controlador1";
    
    $consultaUltimaTemp = mysqli_query($conn, $sqlUltimaTemp);
    $resultadoUltimaTemp = mysqli_fetch_array($consultaUltimaTemp);
    // print '<br/><b>Ultima temperatura registrada: </b><br/>'.$resultadoUltimaTemp['temperatura'];

    $consultaMedia = mysqli_query($conn, $sqlMedia);
    $resultadoMedia = mysqli_fetch_array($consultaMedia);
    // print '<br/><b>Temperatura maxima registrada: </b><br/>'.$resultadoMedia['AVG(temperatura)'];

    $consultaMax = mysqli_query($conn, $sqlMax);
    $resultadoMax = mysqli_fetch_array($consultaMax);
    // print '<br/><b>Temperaturas minima registrada: </b><br/>'.$resultadoMax['MAX(temperatura)'];

    $consultaMin = mysqli_query($conn, $sqlMin);
    $resultadoMin = mysqli_fetch_array($consultaMin);
    // print '<br/><b>Media das temperaturas registradas: </b><br/>'.$resultadoMin['MIN(temperatura)'];

?>