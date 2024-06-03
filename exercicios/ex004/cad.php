<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
           #var_dump($_REQUEST); // $_GET $_POST $_COOKIES, é uma junção das 3
           $name = $_REQUEST["nome"] ?? "sem nome";
           $lname = $_REQUEST["sobrenome"] ?? "desconhecido";
           echo "<p>É um prazer te conhecer, <strong>$name $lname</strong>! Este é o meu site.</p>"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>