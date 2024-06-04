<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 03</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            $reais = $_GET['reais'] ?? 0;
            $dolar = $reais / 5.27;
            
            $fmt_real = numfmt_format_currency($padrão, $reais, "BRL");
            $fmt_dolar = numfmt_format_currency($padrão, $dolar, "USD");

            echo "<p>Seus $fmt_real equivalem a <strong>$fmt_dolar</strong></p>";

            # Forma inicial que fiz o conversor
            // $formatado = number_format($dolar, 2, ',', '.');
            // echo "<p>Seus R$ $reais equivalem a <strong>US$ $formatado</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
