<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 04</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1>
        <?php 
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            $início = date("m-d-Y", strtotime("-7 days")) ;
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $início .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);
    
            $cotação = $dados["value"][0]["cotacaoCompra"];
    

            $reais = $_GET['reais'] ?? 0;
            $dolar = $reais / $cotação;
            
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
