<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1> Exercício 08 </h1>

 <form action="" method="post">
    <label for="num">Digite um número inteiro: </label>
    <input type="number" name="num" required> <br><br>

    <input type="submit" value="Resultado">

 </form>

 <?php 

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $num = $_POST["num"]; // pegar informação do formulário
       
        $antecessor =  $num - 1;
        $sucessor =  $num + 1;

        echo "<h3> O antecessor do valor : $antecessor </h3>";
        echo "<h3> O sucessor do valor : $sucessor </h3>";
    }
 ?>

</div>
</body>
</html>