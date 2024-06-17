<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6 PHP</title>
    <link rel="stylesheet" href="../estilos/style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['n1'] ?? 0;
        $divisor = $_GET['n2'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="n1">Dividendo</label>
            <input type="number" name="n1" id="n1" value="<?=$dividendo?>">
            <label for="n2">Divisor</label>
            <input type="number" name="n2" id="n2" value="<?=$divisor?>">
            <input type="submit" value="Analizar">
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        
        <?php 
            $quociente = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;
        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>