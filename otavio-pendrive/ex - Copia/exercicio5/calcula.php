<!--
Data: 10/03/2026
Autor: Otávio Giovanelli Biazzi e Pedro Henrique Miranda
Objetivo:

Exercício 5 - Somatório de Fatoriais
Leia 5 números inteiros e mostre a soma dos fatoriais desses números.
-->

<?php
    function fatorial($n){
        $resultado = 1;
        $i = 1;
    while($i <= $n){
        $resultado = $resultado * $i;
        $i++;
    }
    return $resultado;
    }
    if(isset($_POST["n1"])){

    $numero1 = $_POST["n1"];
    $numero2 = $_POST["n2"];
    $numero3 = $_POST["n3"];
    $numero4 = $_POST["n4"];
    $numero5 = $_POST["n5"];

    $resultado =
        fatorial($numero1) +
        fatorial($numero2) +
        fatorial($numero3) +
        fatorial($numero4) +
        fatorial($numero5);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Soma dos Fatoriais</h1>

    <form method="post">
        Digite o primeiro número: 
        <input type="number" name="n1"><br><br>
        Digite o segundo número: 
        <input type="number" name="n2"><br><br>
        Digite o terceiro número: 
        <input type="number" name="n3"><br><br>
        Digite o quarto número: 
        <input type="number" name="n4"><br><br>
        Digite o quinto número: 
        <input type="number" name="n5"><br><br>
        <button type="submit">Calcular</button>
    </form>
    
    <?php echo "<h2>Resultado: $resultado</h2>"; ?>
</body>
</html>