<?php
if(isset($_POST['email']) && !empty($_POST['email'])) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $phone = addslashes($_POST['phone']);
    $desc = addslashes($_POST['description']);
    
    if($desc == "") {
        $desc = "Não informado";
    }
    
    $to = "contato@asapdesigns.com.br";
    $subject = "Formulário de Contato - " . $nome;
    $body = "<strong>Nome</strong>: " . $nome . "<br/>".
            "<strong>Email</strong>: " . $email . "<br/>".
            "<strong>Telefone</strong>: " . $phone . "<br/>".
            "<strong>Descrição</strong>: " . $desc;
    $header = "From:contato@asapdesigns.com.br" . "\r\n".
              "Reply-To:" . $email . "\r\n".
              "Content-Type: text/html; charset=UTF-8" . "\r\n".
              "X-Mailer: PHP/" . phpversion();
              
    if(mail($to, $subject, $body, $header)) {
        $enviado = true;
    } else {
        $enviado = false;
    }
} else {
    $enviado = false;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title><?php if($enviado) { echo 'Seu email foi enviado!'; } else { echo 'Oops, um problema aconteceu';}?> - Asap Designs</title>

    <link rel="stylesheet" type="text/css" href="./css/send-page.css">
    <?php include('./components/head.php') ?>
    <meta name="description" content="Página de envio de email do formulário de contato.">
    <meta http-equiv="refresh" content="10; URL='/'"/>
</head>

<body>
    <?php include('./components/navbar.php') ?>
    
    <?php 
        if($enviado) {
    ?>
        <section class="send-container">
            <div class="send-contant container">
                <div class="col-md-12 send-col">
                    <img src="/img/undraw_well_done_i2wr.svg" alt="Sucesso" width="100%" height="auto">
                    <h1 class="send-mensage">Seu pedido foi enviado!</h1>
                </div>
            </div>
        </section>
    <?php } else { ?>
        <section class="send-container">
            <div class="send-contant container">
                <div class="col-md-12 send-col">
                    <img src="/img/error.svg" alt="Erro" width="100%" height="auto">
                    <h1 class="send-mensage">Oops, parece que aconteceu um problema!</h1>
                </div>
            </div>
        </section>
    <?php } ?>

    <script type="text/javascript">
        function disableF5(e) { if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) e.preventDefault(); };
        
        $(document).ready(function(){
             $(document).on("keydown", disableF5);
        });
        window.onbeforeunload = function(e) {
            // Turning off the event
            e.preventDefault();
        }
    </script>

    <?php include('./components/footer.php')?>
</body>
</body>