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
        $num = $_GET['num'] ?? 0;

        function numAnte($num){
            $num = $num - 1;
            return $num;
        }

        function numSuce($num){
            $num = $num + 1;
            return $num;
        }

        echo "<p>O número escolhido foi <strong>$num</strong></p>";
        echo "<p>O seu <em>antecessor</em> é " . numAnte($num) . "</p>";
        echo "<p>O seu <em>sucessor</em> é " . numSuce($num) . "</p>";
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>

</body>
</html>
