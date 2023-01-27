<?php

if ( isset( $_POST[ 'btnCad' ] ) ) {
    include( 'dbcom.php' );

    $nome = $_POST[ 'nome' ];
    $email = $_POST[ 'email' ];
    $telefone = $_POST[ 'telefone' ];
    $mensagem = $_POST[ 'mensagem' ];

    // Array de erros
    $erros = [];

    // Sanitizar limpeza ( dos dados )
    $nome = filter_input( INPUT_POST, 'nome',
    FILTER_SANITIZE_SPECIA0L_CHARS );

    $email = filter_input( INPUT_POST, 'email',
    FILTER_SANITIZE_EMAIL );

    $telefone = filter_input( INPUT_POST, 'telefone',
    FILTER_SANITIZE_NUMBER_INT );

    $mensagem = filter_input( INPUT_POST, 'mensagem',
    FILTER_SANITIZE_SPECIAL_CHARS );

    echo "<p>Nome : $nome </p>";
    echo "<p>Email : $email </p>";
    echo "<p>Telefone : $telefone </p>";
    echo "<p>Mensagem : $mensagem </p>";

    //Filtros
    if ( !$email = filter_input( INPUT_POST, 'email',
    FILTER_VALIDATE_EMAIL ) ) {
        $erros[] = 'E-mail inválido';
    }

    if ( !empty( $erros ) ) {
        foreach ( $erros as $erro ) {
            echo "<li>$erro</li>";
        }

    } else {
        echo '<p>Dados corretos.</p>';
    }

}

?>