<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['msg'];

$to = "7sightjr@gmail.com"; //alterar para o email de contato da AFN
$subject = "Contato - 7Sight";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email."\r\n".
        "Telefone: ".$telefone."\r\n".
        "Mensagem: ".$mensagem;

$header = "From:$email"."\r\n". //alterar o email - Esse email precisa pertencer ao dominio no qual o script ta rodando
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();
            
if(mail($to,$subject,$body,$header)){

    echo("<script>alert('Mensagem enviada com sucesso!'); location.href='./index.html';</script>");
}else{

    echo("<script>alert('Não foi possível enviar a mensagem, tente novamente.'); location.href='./index.html';</script>");
}

}

?>