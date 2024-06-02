<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes com Heredoc</title>
</head>
<body>
    <h1>Teste de Heredoc</h1>
    <?php 
        $canal = "Curso em Vídeo";
        $ano = date('Y');
        echo <<< TESTE
            Olá galera do $canal!
                    Tudo bem com vocês?
                Como está sendo esse ano de $ano?
            Abraços! \u{1F596}

        TESTE;

        // Realmente não parece muito útil, mas cai em concursos 
    ?>

</body>
</html> 

