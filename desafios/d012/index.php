<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 12</title>
    <link rel="stylesheet" href="../estilos/style.css">
</head>
<body>
    <?php 
        $total = $_GET['total']??60;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action=" <?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="total">Qual é o total de segundos?</label>
            <input type="number" name="total" id="total" value="<?=$total?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>
        <?php 
            /*

            1 min  = 60 segundos
            1 hora = 3600 segundos
            1 dia  = 86400 segundos
            1 sem  = 604800 segundos

            */
            $sobra = $total;
            // Total de Semanas
            $semanas = intdiv($sobra, 604800);
            $sobra = $sobra % 604800;
            
            // Total de Dias
            $dias = intdiv($sobra, 86400);
            $sobra = $sobra % 86400;

            // Total de Horas
            $horas = intdiv($sobra, 3600);
            $sobra = $sobra % 3600;

            // Total de Minutos e Segundos
            $minutos = intdiv($sobra, 60);
            $segundos = $sobra % 60;
            

            echo"<p>Analisando o valor que você digitou, <strong>$total segundos</strong> equivalem a um total de:</p>
            <ul>
                <li>$semanas semanas</li>
                <li>$dias dias</li>
                <li>$horas horas</li>
                <li>$minutos minutos</li>
                <li>$segundos segundos</li>
            </ul>";
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
