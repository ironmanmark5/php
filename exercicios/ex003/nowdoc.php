<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes com Nowdoc</title>
</head>
<body>
    <h1>Teste de Nowdoc</h1>
    <?php 
        $canal = "Curso em Vídeo";
        $ano = date('Y');
        echo <<< 'TESTE'
            Olá galera do $canal!
                    Tudo bem com vocês?
                Como está sendo esse ano de $ano?
            Abraços! \u{1F596}

        TESTE;
        # No nowdoc usa aspas simples, logo não há interpretação.
        // Realmente não parece muito útil, mas cai em concursos 
    ?>

</body>
</html> 

