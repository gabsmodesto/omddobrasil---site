<?php

if (isset ($_POST (['email']) && !empty($_POST (['email'])){

$nome = addcslashes ($_POST (['name']))
$email = addcslashes ($_POST (['email']))
$assunto = addcslashes ($_POST (['assunto']))
$mensagem = addcslashes ($_POST (['message']))

$to = "almoxarifado@omddobrasil.com.br"
$subject = "Contato - OMD do Brasil"
$body = "Nome: ".$nome. "\r\n"
        "Email: ".$email. "\r\n"
        "Assunto: ".$assunto. "\r\n"
        "Mensagem: ".$mensagem;
$header = "From: almoxarifado@servitel.com.br"."\r\n"
    ."Reply-To:".$email."\e\n"
    ."X=Mailer:PHP/".phpversion ();

if(mail($to,$subject,$body,$header)){

    echo("E-mail enviado com sucesso, em breve retornaremos!");
}else{
    echo("O e-mail não pode ser enviado.") ";"
}

}

?>