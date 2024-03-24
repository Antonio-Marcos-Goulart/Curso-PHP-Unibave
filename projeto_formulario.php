<?php

    //var_dump($pessoa);

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $cidade = $_POST["cidade"];
    $cep = $_POST["cep"];
    $hobby = $_POST["hobby"];
    $curso = $_POST["curso"];

    $pessoa = [
        
        "Nome"=> $nome,
        "Idade" => $idade,
        "Cidade" => $cidade,
        "Cep" => $cep,
        "Hobby" => $hobby,
        "Curso" => $curso
];

    var_dump($pessoa);
?>