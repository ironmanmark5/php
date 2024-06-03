<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1><strong>Resultado Final</strong></h1>
        <?php 
        $num = $_GET['num'];
        $numAnte = $num - 1;
        $numSuce = $num + 1;

        echo "<p>O número escolhido foi <strong>$num</strong></p>";
        echo "<p>O seu antecessor é $numAnte</p>";
        echo "<p>O seu sucessor é $numSuce</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>

</body>
</html>
