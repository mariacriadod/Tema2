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
        <p id = "subtitulo">Index del Tema 2</p>
    </header>
    <main>
        <a href=""></a>
        <?
           print "Hola" . " clase" . " de Daw
           <h1>  sdf</h1>"
        ?>

        <?php
            printf("%d", "17,999");
            echo "<br>";   
            //sin decirle cuantos decimales         
            printf("%f", "17.999");
            echo "<br>";
            //cuantos decimales queremos
            printf("%.4f", "17.9998");
            echo "<br>";
            printf("%s", "17,9998");

            echo "Var_dump<br>";
            echo var_dump("maria");
            echo "<br>";

            echo var_dump("maria",3.14);
        ?>
        <h2>Como antiguamente</h2>
        <a href="HolaMundo.php">Hola mundo antiguo</a>
        <h2>Hedoc</h2>    
        <?php
            echo <<< mitexto
            Estamos en clase de DWES
            y quiero escribir "con comillas"
            \n cosas raras 
            como balas de cañón <br> dfsg
            mitexto ;
        ?>

        <h2>variables</h2>
        <a href="Variables.php">Hola mundo antiguo</a>
       
   
    </main>
    <footer>&copy María Criado</footer>
</body>
</html>