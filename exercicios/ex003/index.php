<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal 0b = binário 0 = Octal
        // $num = 010;
        // echo "O valor da variável é $num";

        // $v = "Diogo";
        // var_dump($v);
        # Saída/Output: string(5) "Diogo"

        // $num = (integer) 3e2; // 3 x 10² coerçãp
        // echo "O valor é $num";
        # Saída/Output: O valor é 300

        $num = (double) "950";
        var_dump($num);

        
    ?>
</body>
</html>