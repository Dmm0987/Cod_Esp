<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    try{
        $HOST = "localhost";
        $BANCO = "esp32-mysql";
        $USUARIO = "root";
        $SENHA = "";

        $PDO = new PDO("mysql:host=" . $HOST . ";dbname=" . $BANCO . ";charset=utf8", $USUARIO, $SENHA);
    }catch(PDOException $erro){
        echo"Erro de conexão: " . $erro->getMessage();
    }
    
    ?>
</body>
</html>