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
    <header >

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Temperatura</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </header>
    <br><br><br><br><br>
    <section>
        <div >
        
        
        <form method="POST" text-center class="container">
            
                <div class="col">
                    <input type="text" class="form-control mr-sm-2" placeholder="Ingrese la temperatura minima" name="TemperaturaMinima">
                </div>
                <br>
                
                <div class="col">
                    <input type="text" class="form-control mr-sm-2" placeholder="Ingrese la temperatura maxima" name="TemperaturaMaxima">
                </div>
            <br>
            <center><button type="submit" class="btn btn-primary" name="BotonResultado"> Resultado</button></center>
        </form>
        
        <?php
             
             if (isset($_POST["BotonResultado"])){

            $TemperaturaMinima=$_POST["TemperaturaMinima"];
            $TemperaturaMaxima=$_POST["TemperaturaMaxima"];

            $TemperauraMedia=$TemperaturaMinima+ $TemperaturaMaxima/2; 

             echo ('La temperatura media es:'.$TemperauraMedia);

           
             }
            
        ?>

    </section>


    <br><br> <br><br><br><br><br>
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