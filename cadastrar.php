<?php

if ( isset( $_POST[ 'btnCad' ] ) ) {
    include_once 'dbcom.php';

    $nome = $_POST[ 'nome' ];
    $email = $_POST[ 'email' ];
    $telefone = $_POST[ 'telefone' ];
    $mensagem = $_POST[ 'mensagem' ];

    //Executando o comando de inserçao no Banco de dados

    $conexao->query( "INSERT INTO cliente VALUES(null,'$nome', '$email', '$telefone', '$mensagem')" );
    
    echo "<div class='alert alert-success' role='alert'>Usuário cadastrado com sucesso!</div>";
}
