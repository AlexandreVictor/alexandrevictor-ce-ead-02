<?php
         $nomebanda =  $_POST['nomebanda'];
         $nmintegrante0 = $_POST['nmintegrante0'];
         $datanascimento0 = $_POST['datanascimento0'];
         $instrumento0 = $_POST['instrumento0'];
         $imagembanda = $_POST['imagembanda'];
         $cordefundo = $_POST['cordefundo'];
         $cordotexto = $_POST['cordotexto'];

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/Estilo.css">
    <title>Formulario - Banda</title>
</head>
    <body class=<?php echo $cordefundo ?>>
        <h2><?php echo $nomebanda ?></h2>
        <img src=<?php echo $imagembanda ?> alt="imagem da banda">
        <?php echo $cordefundo ?>


    </body>
</html>