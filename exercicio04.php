<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>

 <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
            width: 320px;
        }

        form {
            display: flex;
            flex-direction: column;
            text-align: left;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="number"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #0077cc;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            font-size: 18px;
        }

        input[type="submit"]:hover {
            background-color: #005fa3;
        }

        h3 {
            margin-top: 15px;
            color: #005fA3;
        }
        h1{
            color: #005fA3;
        }
</style>

</head>
<body>

<div class="container">
    <h1> Exercício 04 </h1>

 <form action="" method="post">

    <label for="num01">Digite o primeiro número: </label>
    <input type="number" name="num01" required> <br><br>

    <label for="num02">Digite o segundo número: </label>
    <input type="number" name="num02" required> <br><br>

    <label for="num03">Digite o terceiro número: </label>
    <input type="number" name="num03" required> <br><br>


    <input type="submit" value="Menor">

 </form>

 <?php 

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $num01 = $_POST["num01"]; // pegar informação do formulário
        $num02 = $_POST["num02"]; // pegar informação do formulário
        $num03 = $_POST["num03"]; // pegar informação do formulário
    
       

        if ($num01 < $num02 && $num01 < $num03){
            
            $menor=$num01;

        }
        else if ($num02 < $num03){
            $menor=$num02;
        }
        else {
            $menor=$num03;
        }

    }
        echo "<h3> O menor número entre os digitados é: $menor </h3>";
 ?>
    </div>
</body>
</html>