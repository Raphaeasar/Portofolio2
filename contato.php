<!DOCTYPE html>
<html>

<head>
<?php

include( 'assets/head.php' );

?>
</head>

<body>
<!--Menu-->
<header>
<section class = 'menu cid-s48OLK6784' once = 'menu' id = 'menu1-h'>

<?php

include( 'assets/header.php' );

?>

</section>

</header>

<!--Menu-->

<!--Formulário 1-->

<section class = 'slider1 cid-suKRXZny0V' id = 'slider1-o'>

<div class = 'container'>
<div class = 'row justify-content-center'>
<div class = 'title col-12 col-lg-8'><br><br>
<h1 class = 'mbr-section-title align-center pb-3 mbr-fonts-style display-2'>
CONTATO
</h1>
<h2 class = 'mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5'>

ENTRE EM CONTATO COM A CASARINI GAMES<br>

</h2>
<p class = 'mbr-section-subtitle align-center'>comercial@casarinigames.com.br </p>
</div>

<span id = 'msgAlerta'></span>
</div>
</div>
<div class = 'container'>
<div class = 'row justify-content-center'>
<div class = 'media-container-column col-lg-8' data-form-type = 'formoid'>
<form action = '' id = 'cad-usuario-form' method = 'POST' class = 'mbr-form form-with-styler' data-form-title = 'Mobirise Form'>
    <input type = 'hidden' name = 'email' data-form-email = 'true' value = 'YOpUpN18QuhHNYFMBmSnEBk8ucWVGvaP2GpjfQJWhrgqo0mHvfpCqDPV+giFb4svDc4qt1a3uY3Uwh5ZlAokGyULMd4KEBhNxkYCHOsLzeKyCs98JSf5d51X3imGP43e'>

<div class = 'row'>
<div hidden = 'hidden' data-form-alert = '' class = 'alert alert-success col-12'>Obrigado, mensagem enviada!!</div>
<div hidden = 'hidden' data-form-alert-danger = '' class = 'alert alert-danger col-12'>
<span id = 'msgAlerta'></span>
<span id = 'msgAlertaErroCad'></span>

</div>
</div>
<div class = 'dragArea row'>
<div class = 'col-md-4  form-group' data-for = 'nome'>
<label for = 'name-form1-v' class = 'form-control-label mbr-fonts-style display-7'>Nome</label>
<input type = 'text' name = 'nome' data-form-field = 'Name' class = 'form-control display-7' id = 'nome'>
</div>
<div class = 'col-md-4  form-group' data-for = 'email'>
<label for = 'email-form1-v' class = 'form-control-label mbr-fonts-style display-7'>Email</label>
<input type = 'email' name = 'email' data-form-field = 'Email'  class = 'form-control display-7' id = 'email'>
</div>
<div data-for = 'phone' class = 'col-md-4  form-group'>
<label for = 'phone-form1-v' class = 'form-control-label mbr-fonts-style display-7'>Telefone</label>
<input type = 'tel' name = 'telefone' data-form-field = 'Phone' class = 'form-control display-7' id = 'telefone'>
</div>
<div data-for = 'mensagem' class = 'col-md-12 form-group'>
<label for = 'message-form1-v' class = 'form-control-label mbr-fonts-style display-7'>Mensagem</label>
<textarea name = 'mensagem' data-form-field = 'Message' class = 'form-control display-7' id = 'mensagem'></textarea>
</div>
<div class = 'col-md-12 input-group-btn align-center'>
<button type = 'submit' class = 'btn btn-primary btn-form display-4' name = 'btnCad' id = 'btnCad'>Enviar</button><br>
</div>
</div>
</form>

<?php

if ( isset( $_POST[ 'btnCad' ] ) ) {
    include_once 'database/dbcom.php';

    $dados = filter_input_array( INPUT_POST, FILTER_DEFAULT );

    if ( empty( $dados[ 'nome' ] ) ) {
        $retorna = [ 'erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo nome!</div>" ];
    }else {

        $nome = $_POST[ 'nome' ];
        $email = $_POST[ 'email' ];
        $telefone = $_POST[ 'telefone' ];
        $mensagem = $_POST[ 'mensagem' ];

        //Executando o comando de inserçao no Banco de dados

        $conexao->query( "INSERT INTO cliente VALUES(null,'$nome', '$email', '$telefone', '$mensagem')" );

        echo "<div class='alert alert-success' role='alert'>Usuário cadastrado com sucesso!</div>";
    }
}
?>

</div>
</div>
</div>

</section>

<!--Formulário 1-->

<!--Footer-->

<section class = 'footer1 cid-suKVe9Tm42' once = 'footers' id = 'footer1-p'>

<?php

//Footer foi separado e se encontra no arquivo footer.php
include( 'assets/footer.php' );

?>

</section>

<!--Footer-->

<script src = 'js/custom.js'></script>

</body>

</html>