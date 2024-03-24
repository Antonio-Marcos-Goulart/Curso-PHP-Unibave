<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
    <style>
        ul.navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li.navbar-item {
            float: left;
        }

        li.navbar-item a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li.navbar-item a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>
<ul class="navbar">
    <li class="navbar-item"><a href="listagem.php">Listagem</a></li>
    <li class="navbar-item"><a href="#">Cadastro</a></li>
</ul>

<h1>Cadastro de Pessoa</h1>
<form action="listagem.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br>

    <label for="idade">Idade:</label>
    <input type="number" id="idade" name="idade" required><br>

    <label for="cidade">Cidade:</label>
    <input type="text" id="cidade" name="cidade" required><br>

    <label for="cep">CEP:</label>
    <input type="text" id="cep" name="cep" required><br>

    <label for="hobby">Hobby:</label>
    <input type="text" id="hobby" name="hobby" required><br>

    <label for="curso">Curso que estuda:</label>
    <input type="text" id="curso" name="curso" required><br>

    <input name="acao" type="hidden" id="acao" value="cadastrar" />
    <input type="submit" value="Cadastrar">
</form>
</body>
</html>
