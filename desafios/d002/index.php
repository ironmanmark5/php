<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 02</title>
    <link rel="stylesheet" href="../estilos/style.css">
</head>
<body>
    <main>
        <h1><strong>Trabalhando com números aleatórios</strong></h1>
        <?php
            $min = 0;
            $max = 1000;
            $num = mt_rand($min, $max);
            
            echo "<p>Gerando um número aleatório entre $min e $max... <br> 
            O valor gerado foi <strong>$num</strong></p>";
            
            // rand() = 1951 - Linear Congretial Generator
            // mt_rand() = 1997 - Mersenne Twister
            // A partir do PHP 7.1, rand() é um simples apontamento para mt_rand()
            // random_int() gera números aleatórios criptograficamente seguros
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>
</body>
</html>