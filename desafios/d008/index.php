<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 08</title>
    <link rel="stylesheet" href="../estilos/style.css">
</head>
<body>
    <main>
        <?php $num = $_POST['numero']??0; ?>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" step="0.01" placeholder="Digite um número" value="<?=$num?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
            function cbrt($num) {
                $num = $num ** (1/3);
                return $num;
            }

            $rq = sqrt($num);
            $rc = cbrt($num);

            $raizQuadrada = number_format($rq, 3, ',', '.');
            $raizCúbica = number_format($rc, 3, ',', '.');
            echo "<p>Analizando o <strong>número $num</strong>, temos:</p>
            <ul>
                <li>A sua raiz quadrada é <strong>$raizQuadrada</strong></li>
                <li>A sua raiz cúbica é <strong>$raizCúbica</strong></li>
            </ul>";
        ?>
    </section>
</body>
</html>
