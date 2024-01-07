<?php
	$to = "coloque@seuemail.aqui"; //destinário que receberá o e-mail

	$assunto = "Formulário do site";

	$mensagem  = $_POST['mensagem']; 
	$mensagem .= "<hr>"; 
	$mensagem .= "Enviado por: ".$_POST['nome'];

	$email = $_POST['email']; //remetente

	$headers  = 'MIME-Version: 1.0';
	$headers .= 'Content-type: text/html; charset=iso-8859-1';
	$headers .= 'To: $to';
	$headers .= 'From: $email';
	$headers .= 'Reply-To: $email';
	$headers .= 'X-Mailer: PHP/' . phpversion();


	$status = mail($to, $assunto, $mensagem, $headers);

	if($status==true){
		echo "Mensagem foi enviada com sucesso!";
	}else{
		echo "Não foi possível enviar";
	}

  ?>
    