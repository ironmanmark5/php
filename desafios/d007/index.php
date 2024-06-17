<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 07</title>
    <link rel="stylesheet" href="../estilos/style.css">
</head>
<body>
    <main>
        <h1>Informe seu salário</h1>
        <?php 
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $salário = filter_input(INPUT_POST, 'salario', FILTER_VALIDATE_FLOAT) ?? SAL;

            if ($salário === false) {
                echo "<p style='color:red;'>Por favor, insira um valor válido.</p>";
                $salário = 0;
            }

            $fmt_sal = numfmt_format_currency($padrão, 1412, "BRL");
            $salário_final = numfmt_format_currency($padrão, $salário, "BRL");
        ?>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" step="0.01" placeholder="Digite seu salário">
            <p>Considerando o salário mínimo de <strong><?=$fmt_sal?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php
            const SAL = 1412;
            $numSal = intdiv($salário, SAL);
            $restoSal = $salário % SAL;
            $restoSal_formatado = numfmt_format_currency($padrão, $restoSal, "BRL");

            echo "<p>Quem recebe um salário de $salário_final ganha <strong>$numSal salários mínimos</strong> + $restoSal_formatado.</p>";
        ?>
    </section>
</body>
</html>
