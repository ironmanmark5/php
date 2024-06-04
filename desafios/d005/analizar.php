<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 05</title>
    <link rel="stylesheet" href="../estilos/style.css">
</head>
<body>
    <main>
        <h1>Analisador de Números Reais</h1>
        <?php 
            $num = $_GET['num'] ?? 0;
            
            $int = floor($num);
            $fra = $num - $int;

            $num_formatado = number_format($num, 3, ',', '.');
            $inteira = number_format($int, 0, ',', '.');
            $fracionária = number_format($fra, 3, ',', '.');

            echo "<ul><p>Analisando o número <strong>$num_formatado</strong> informado pelo usuário:</p>
                <li>A parte inteira do número é <strong>$inteira</strong></li>
                <li>A parte fracionário do número é <strong>$fracionária</strong></li>
            </ul>";
    
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
