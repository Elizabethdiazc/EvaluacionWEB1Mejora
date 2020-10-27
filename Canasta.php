<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="index.php">

</head>
<body>
    <header class="container">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Canasta</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </header>
    <br>
    <main method="POST" text-center>
    
    
    <form method="POST" text-center>
            <div class="container">
                <div class="col">
                    <div class="col-xs-2" text-center>
                    <center>
                        <label for="disabledTextInput">PRODUCTO 1</label>
                        <input type="text" id="disabledTextInput" class="form-control mr-sm-2" placeholder="Nombre-1" name="nombre1">
                        <br>
                        <input type="text" id="disabledTextInput" class="form-control mr-sm-2" placeholder="Cantidad-1" name="cantidad1">
                        <br>
                        <input type="text" id="disabledTextInput" class="form-control mr-sm-2" placeholder="Precio-1" name="precio1">
                        
                        <br><br>
                        
                        <label for="disabledTextInput">PRODUCTO 2</label>
                        <input type="text" id="disabledTextInput" class="form-control mr-sm-2" placeholder="Nombre-2" name="nombre2">
                        <br>
                        <input type="text" id="disabledTextInput" class="form-control mr-sm-2" placeholder="Cantidad-2" name="cantidad2">
                        <br>
                        <input type="text" id="disabledTextInput" class="form-control mr-sm-2" placeholder="Precio-2" name="precio2">

                        <br><br>

                        <label for="disabledTextInput">PRODUCTO 3</label>
                        <input type="text" id="disabledTextInput" class="form-control mr-sm-2" placeholder="Nombre-3" name="nombre3">
                        <br>
                        <input type="text" id="disabledTextInput" class="form-control mr-sm-2" placeholder="Cantidad-3" name="cantidad3">
                        <br>
                        <input type="text" id="disabledTextInput" class="form-control mr-sm-2" placeholder="Precio-3" name="precio3">

                        <br><br>

                        <label for="disabledTextInput">PRODUCTO 4</label>
                        <input type="text" id="disabledTextInput" class="form-control mr-sm-2" placeholder="Nombre-4" name="nombre4">
                        <br>
                        <input type="text" id="disabledTextInput" class="form-control mr-sm-2" placeholder="Cantidad-4" name="cantidad4">
                        <br>
                        <input type="text" id="disabledTextInput" class="form-control mr-sm-2" placeholder="Precio-4" name="precio4">

                        <br><br>

                        <label for="disabledTextInput">PRODUCTO 5</label>
                        <input type="text" id="disabledTextInput" class="form-control mr-sm-2" placeholder="Nombre-5" name="nombre5">
                        <br>
                        <input type="text" id="disabledTextInput" class="form-control mr-sm-2" placeholder="Cantidad-5" name="cantidad5">
                        <br>
                        <input type="text" id="disabledTextInput" class="form-control mr-sm-2" placeholder="Precio-5" name="precio5">
                        </center>
                    </div>
                </div>
                <br>
               <center> <button type="submit" class="btn btn-primary" name="botonCalcular">Resultado</button></center>
    </form>
    
    <?php

    if (isset($_POST["botonCalcular"])){

    $Nombre1=$_POST["nombre1"];
    $Cantidad1=$_POST["cantidad1"];
    $Precio1=$_POST["precio1"];
    $Total1=$Cantidad1*$Precio1;  

    $Nombre2=$_POST["nombre2"];
    $Cantidad2=$_POST["cantidad2"];
    $Precio2=$_POST["precio2"];
    $Total2=$Cantidad2*$Precio2; 
    
    $Nombre3=$_POST["nombre3"];
    $Cantidad3=$_POST["cantidad3"];
    $Precio3=$_POST["precio3"];
    $Total3=$Cantidad3*$Precio3;  

    $Nombre4=$_POST["nombre3"];
    $Cantidad4=$_POST["cantidad3"];
    $Precio4=$_POST["precio3"];
    $Total4=$Cantidad4*$Precio4;
    
    $Nombre5=$_POST["nombre3"];
    $Cantidad5=$_POST["cantidad3"];
    $Precio5=$_POST["precio3"];
    $Total5=$Cantidad5*$Precio5;  


    $TotalFinal=$Total1 + $Total2 + $Total3 + $Total4 + $Total5 * 0.19;

     echo ('El total a pagar por todos sus productos es:' . $TotalFinal);

   
    }

    ?> 
    </main>

    <br><br> <br><br><br><br><br><br><br><br>
    <footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
        </div>
        <div class="card-body">
            <h5 class="card-title"> &copy; Create by EDC     </h5>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

    </footer>

</body>
</html>

<?php




?> 


