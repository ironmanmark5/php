<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 10</title>
    <link rel="stylesheet" href="../estilos/style.css">
</head>
<body>
    <?php 
        $anoAtual = date('Y');
        $anoNasc = $_GET['anoNasc']??2000;
        $previsao = $_GET['previsao']??$anoAtual;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action=" <?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="anoNasc">Em que ano você nasceu?</label>
            <input type="number" name="anoNasc" id="anoNasc" min="1900" max="<?=$anoAtual?>" value="<?=$anoNasc?>">
            <label for="previsao">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$anoAtual?></strong>)</label>
            <input type="number" name="previsao" id="previsao" min="1900" value="<?=$previsao?>">
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            $resultado = $previsao - $anoNasc;
            echo"<p>Quem nasceu em $anoNasc vai ter <strong>$resultado anos</strong> em $previsao!</p>";
        ?>

    </section>
</body>
</html>
