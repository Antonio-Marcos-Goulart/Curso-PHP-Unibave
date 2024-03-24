<?php
session_start();
$acao = $_POST ? $_POST['acao']:null;

function salvarPessoa($pessoa)
{
    if (isset($_SESSION['pessoas']) && $_SESSION['pessoas']) {
        $count = count($_SESSION['pessoas']);
    }else{
        $count = 0;
    }
    $_SESSION['pessoas']['pessoa'. $count + 1] = $pessoa;
}

function recuperarPessoas()
{
    if (isset($_SESSION['pessoas']) && $_SESSION['pessoas']) {
        return $_SESSION['pessoas'];
    }
    return [];
}

function deletarPessoa($index)
{
    if (isset($_SESSION['pessoas']) && $_SESSION['pessoas']) {
        $_SESSION['pessoas'][$index] = null;
    }
}
function limparPessoas()
{
    $_SESSION['pessoas'] = [];
}
if ($_POST && $acao == "cadastrar") {

    var_dump($acao);

    $nome = $_POST ? $_POST['nome'] : null ;
    $idade = $_POST ?$_POST['idade'] :null;
    $cidade = $_POST ? $_POST['cidade'] :null;
    $cep = $_POST ? $_POST['cep'] :null;
    $hobby = $_POST ? $_POST['hobby'] :null;
    $curso = $_POST ? $_POST['curso'] :null;

    $pessoa = [
        
        "Nome"=> $nome,
        "Idade" => $idade,
        "Cidade" => $cidade,
        "Cep" => $cep,
        "Hobby" => $hobby,
        "Curso" => $curso
    ];


        salvarPessoa($pessoa);
        } elseif ($_POST && $acao == "limpar") {
            limparPessoas();
        } elseif ($_POST && $acao == "Deletar") {
            $index = $_POST["index"];
            deletarPessoa($index);
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Usuários</title>
    <style>
        /* Estilo para a navbar */
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
<!-- Navbar -->
<ul class="navbar">
    <li class="navbar-item"><a href="#">Listagem</a></li>
    <li class="navbar-item"><a href="formulario.php">Cadastro</a></li>
</ul>

<h1>Usuários Cadastrados</h1>

<table border="1">
    <thead>
    <tr>
        <th>Nome</th>
        <th>Idade</th>
        <th>Cidade</th>
        <th>CEP</th>
        <th>Hobby</th>
        <th>Curso</th>
        <th colspan="2">Ações</th>

    </tr>
    </thead>
    <tbody>
    <?php
        $listaDePessoas = recuperarPessoas();
        foreach ($listaDePessoas as $key => $pessoa) {
            if ($pessoa) {

    ?>
    <tr>
        <td><?php echo $pessoa['Nome']; ?></td>
        <td><?php echo $pessoa['Idade']; ?></td>
        <td><?php echo $pessoa['Cidade']; ?></td>
        <td><?php echo $pessoa['Cep']; ?></td>
        <td><?php echo $pessoa['Hobby']; ?></td>
        <td><?php echo $pessoa['Curso']; ?></td>
        <td>
            <form action="listagem.php" method="post">
                <input name="index" type="hidden" value="<?php echo $key; ?>" />
                <input name="acao" type="submit" value="Deletar" />
        </form>
    </td>
    <td>
        <form action="editar_pessoa.php" method="post">
            <input name="index" type="hidden" value="<?php echo $key; ?>" />
            <input name="acao" type="submit" value="Editar" />
        </form>
    </td>
</tr>
    <?php
            }
        }
    ?>
    </tbody>
</table>
<form action="listagem.php" method="post">
    <input name="acao" type="submit" id="acao" value="limpar" />
</form>

</body>

</html>