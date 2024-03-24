<?php
session_start();
include 'listagem.php';

function recuperarPessoaPorIndex($index) {
    $listaDePessoas = recuperarPessoas();
    return $listaDePessoas[$index];
}

$acao = $_POST ? $_POST['acao'] : null;

if ($_POST && $acao == "editar") {
    $index = $_POST['index'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep'];
    $hobby = $_POST['hobby'];
    $curso = $_POST['curso'];

    $pessoa = [
        "Nome" => $nome,
        "Idade" => $idade,
        "Cidade" => $cidade,
        "Cep" => $cep,
        "Hobby" => $hobby,
        "Curso" => $curso
    ];

    
    $listaDePessoas = recuperarPessoas();
    $listaDePessoas[$index] = $pessoa;
    $_SESSION['pessoas'] = $listaDePessoas;

   
    header("Location: listagem.php");
    exit();
}

$index = $_POST['index'];
$pessoa = recuperarPessoaPorIndex($index);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
<h1>Editar Usuário Cadastrado</h1>
<form action="editar_pessoa.php" method="post">
    <input type="hidden" name="index" value="<?php echo $index; ?>">
    <input type="hidden" name="acao" value="editar">
    
    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="<?php echo $pessoa['Nome']; ?>"><br>
    
    <label for="idade">Idade:</label>
    <input type="text" name="idade" value="<?php echo $pessoa['Idade']; ?>"><br>
    
    <label for="cidade">Cidade:</label>
    <input type="text" name="cidade" value="<?php echo $pessoa['Cidade']; ?>"><br>
    
    <label for="cep">CEP:</label>
    <input type="text" name="cep" value="<?php echo $pessoa['Cep']; ?>"><br>
    
    <label for="hobby">Hobby:</label>
    <input type="text" name="hobby" value="<?php echo $pessoa['Hobby']; ?>"><br>
    
    <label for="curso">Curso:</label>
    <input type="text" name="curso" value="<?php echo $pessoa['Curso']; ?>"><br>

    <input type="submit" value="Salvar Edições">
</form>
</body>
</html>
