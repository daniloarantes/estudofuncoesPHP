<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estudo Funções PHP</title>
</head>
<body>

<h1>Estudo Funções no PHP</h1>
<p><strong>Objetivo:</strong> consolidar a criação e uso de funções utilizando a linguagem PHP.</p>

<h2>Função simples</h2>

<form action="index.php">
    <label for="num">Número:</label>
    <input type="text" id="num" name="num">
    <button>Calcular</button>
</form>

<br><hr>
<br>

<?php
    if (isset($_GET['num'])) {
        $num = $_GET["num"];
    }

    // FUNÇÃO SIMPLES
    function olaMundo() {
        echo "Olá mundo!";
    }

    // FUNÇÃO SIMPLES COM ARGUMENTO
    function quadrado($num) {
        echo "$num ao quadrado é " . $num * $num;
    }

    // FUNÇÃO COM RETORNO
    function quadrado2($num) {
        return $num * $num;
    }

    // Arrow Function
    $num2 = fn($num) => $num * $num;

    // Chamando função simples
    olaMundo();

    echo "<br>";

    // Chamando Função simples com argumento
    quadrado($num);

    echo "<br>";

    // Chamando função com retorno
    echo "$num ao quadrado é " . quadrado2($num);

    echo "<br>";

    // Utilizando Arrow Function
    echo "$num ao quadrado é " . $num2($num);

?>

</body>
</html>