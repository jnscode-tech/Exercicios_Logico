<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1> Exercício 07 </h1>

 <form action="" method="post">
    <label for="salario">Digite seu salário: </label>
    <input type="number" name="salario" required> <br><br>

    <input type="submit" value="Salário Atual">

 </form>

 <?php 

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $salario = $_POST["salario"]; // pegar informação do formulário
       

        $salarioAtual =  $salario * 1.30;

        echo "<h3> O salario acrescido de 30% é : $salarioAtual </h3>";
    }
 ?>

</div>
</body>
</html>