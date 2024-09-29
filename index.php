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

<?php
    if (isset($_GET['num'])) {
        $num = $_GET["num"];
    }

    // FUNÇÃO SIMPLES
    function quadrado($num) {
        echo "$num ao quadrado é " . $num * $num;
    }

    // Função simples
    quadrado($num);

?>

</body>
</html>