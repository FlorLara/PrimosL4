
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>volver</title>

    <!-- Bootstrap css CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <!-- Google Fonts CDN -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Indie+Flower" type="text/css"  />
    <!-- CSS propio -->
    <link rel="stylesheet" href="style.css" />

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) CDN -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- jQueryUI CDN -->
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <!-- Bootstrap CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!-- Modernizr CDN -->
    <script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.7.2.js"></script>


   
  </head>
  <body>

    <div class="container">

        <div class="row">

            <div class="col-xs-12">
<?php 

$dividendo = $_POST["numero"];

function obtenerDivisores($dividendo){
    $conteo = 0;
    for ($divisor = 3; $divisor < $dividendo ; $divisor = $divisor + 2 ) { 

        $resto = $dividendo % $divisor;     

        if ( $resto == 0 ){
            printf("<p>%s es divisible entre %s, por lo tanto no es un número primo.</p>", $dividendo, $divisor);
            $conteo++;
        }  
    }
    if( $conteo < 1 ){
        printf("<p>%s es un número primo.</p>", $dividendo);
    }
}


if ( $dividendo % 2 == 0){
    echo "<p>Los números pares no pueden ser primos pues siempre serán divisibles entre 2.</p>";
} else {
    obtenerDivisores($dividendo);
}

?>

                <a href="index.php" class="btn btn-default">Volver</a>

            </div><!-- .col -->

        </div><!-- .row -->

    </div><!-- .container -->	
    
  </body>
</html>
