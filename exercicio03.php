<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
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
            color: #a30000ff;
        }
        h1{
            color: #a30000ff;
        }
</style>
    
</head>
<body>
    <div class="container">
    <h1> Exercício 03 </h1>

 <form action="" method="post">
    <label for="produto">Digite o valor do produto: </label>
    <input type="number" name="produto" required> <br><br>

    <input type="submit" value="Acréscimo de 20%">

 </form>

 <?php 

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $produto = $_POST["produto"]; // pegar informação do formulário
       

        $valorFinal =  $produto * 1.20;

        echo "<h3> O valor acrescido de 20% é : $valorFinal </h3>";
    }
 ?>

</div>
</body>
</html>