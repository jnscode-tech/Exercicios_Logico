<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1> Exercício 09 </h1>

 <form action="" method="post">
    <label for="num01">Digite um número inteiro: </label>
    <input type="number" name="num01" required> <br><br>

    <label for="num02">Digite um número inteiro: </label>
    <input type="number" name="num02" required> <br><br>

    <input type="submit" value="Resultado">

 </form>

 <?php 

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $num01 = $_POST["num01"]; // pegar informação do formulário
        $num02 = $_POST["num02"]; // pegar informação do formulário
       
        $produto = $num01 * $num02;

        echo "<h3> O produto dos valores : $produto </h3>";

    }
 ?>

</div>
</body>
</html>