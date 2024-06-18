<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 13</title>
    <link rel="stylesheet" href="../estilos/style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $total = $_GET['total']??0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action=" <?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="total">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="total" id="total" value="<?=$total?>" step="1" required>
            <p style="font-size: 0,7em;"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <?php 

            $resto = $total;
            // Saque de R$100
            $tot100 = intdiv($resto, 100);
            $resto %= 100;
            
            // Saque de R$50
            $tot50 = intdiv($resto, 50);
            $resto %= 50;

            // Saque de R$20
            $tot20 = intdiv($resto, 20);
            $resto %= 20;

            // Saque de R$10
            $tot10 = intdiv($resto, 10);
            $resto %= 10;

            // Saque de R$5
            $tot5 = intdiv($resto, 5);
            $resto %= 5;

            // Saque de R$2
            $tot2 = intdiv($resto, 2);
            $resto %= 2;

            // Saque de R$1
            $tot1 = intdiv($resto, 1);
            $resto = $resto;
            
            echo "<h2>Saque R$". number_format($total, 2, ',', '.') ." realziado</h2>";
            echo"<p>O caixa eletrônico vai te entregar as seguintes notas:</p>";
            ?>
            <ul>
                <li><img src='imagens/100-reais.jpg' class="nota"> x<?=$tot100?></li>
                <li><img src='imagens/50-reais.jpg' class="nota"> x<?=$tot50?></li>
                <li><img src='imagens/10-reais.jpg' class="nota"> x<?=$tot10?></li>
                <li><img src='imagens/5-reais.jpg' class="nota"> x<?=$tot5?></li> 
                <li><img src='imagens/2-reais.jpg' class="nota"> x<?=$tot2?></li> 
                <li><img src='imagens/1-real.jpg' class="nota"> x<?=$tot1?></li> 
            </ul>
    </section>
</body>
</html>
