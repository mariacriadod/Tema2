<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../webroot/css/style.css">
    <title>Mi pagina principal</title>
</head>
<body>
    <header>
       Página de María
        <p id = "subtitulo">Variables en php</p>
    </header>
    <main>
        <?php
            //declamos una variable
            $variable = 7;
            //mostrar la variable
            echo "La variable es: " , $variable;
            echo " <br>Tipo de variable <br>";
            //tipo
            var_dump($variable);

            //el tipo de dato boolean
            $bolean = false ;
            echo "<br>la variable bolean es: " . gettype($bolean) . 
            " tiene el valor de " .$bolean; 
            echo "<br>";
            var_dump($bolean);
            echo "<br> Le pregunto con is_bool():";
            echo is_bool($bolean);

            //el tipo float
            $conpunto = 8.326;
            echo "<br>la variable conpunto es: " . gettype($conpunto) . 
            " tiene el valor de " .$conpunto; 
            echo "<br> Le pregunto con is_float():";
            echo is_float($bolean);
            
        ?>

    </main>
    <footer>&copy María Criado</footer>
</body>
</html>