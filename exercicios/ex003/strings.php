<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes com Strings</title>
</head>
<body>
    <h1>Teste para concatenar strings</h1>
    <?php 
        $nom = "Rodrigo";
        $snom = "Nogueira";
        echo "$nom " . '"Minotauro"' . " $snom";
        # Com sequência de escape

        echo "$nom \"Minotauro\" $snom " 

        /* 
            \n - Nova linha
            \t - Tabulção horizontal
            \\ - Barra invertida
            \$ - Sinal de cifrão
            \u{} - Codepoint Unicode
        */
    ?>
</body>
</html> 