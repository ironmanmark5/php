<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 11</title>
    <link rel="stylesheet" href="../estilos/style.css">
</head>
<body>
    <?php 
        $porcentagem = $_POST['porcentagem']??50;
        $preço = $_POST['preço']??100;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action=" <?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="preço">Preço do Produto (R$)</label>
            <input type="number" name="preço" id="preço" step="0.01" value="<?=$preço?>">
            <label for="porcentagem">Qual será o percentual de reajuste? <strong>(<span id="p">?</span>%)</strong></label>
            <input type="range" name="porcentagem" id="porcentagem" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$porcentagem?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            $preço_final = $preço + ($preço * ($porcentagem / 100));
            $preço_final = number_format($preço_final, 2, ',', '.');
            $preço = number_format($preço, 2, ',', '.');

            echo"<p>O produto custava R$$preço. Com <strong>$porcentagem% de aumento</strong> vai passar a custar <strong>R$$preço_final</strong> a partir de agora.</p>";
        ?>

    </section>
    <script>
        mudaValor();

        function mudaValor() {
            p.innerText = porcentagem.value;
        }
    </script>
</body>
</html>
