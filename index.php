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
    include("conexao.php");

    $umidade = $_GET['umidade'];
    $temperatura = $_GET['temperatura'];

    $sql = "INSERT INTO dados (umidade, temperatura) VALUES(:umidade, :temperatura);";

    $stmt = $PDO->prepare($sql);

    $stmt->bindParam(':umidade', $umidade);
    $stmt->bindParam(':temperatura', $temperatura);

    if($stmt->execute()){
        echo"Dados gravados com sucesso!";
    }else{
        echo"Erro ao gravar dados";
    }
    ?>
</body>
</html>