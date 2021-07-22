<?php

	//Importar classes PHPMailer para o namespace global
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	
	// Carrega o autoloader do Composer e o arquivo de configuração do servidor
	require 'lib/vendor/autoload.php';
	
	//Instancioando o PHPMAILER e passando o parâmetro true para permitir exceções
	$mail = new PHPMailer(true);	
	
	//Configurações do servidor
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     //Ativa saída de depuração detalhada
    $mail->isSMTP();                                           //Envia usando SMTP
	$mail->Host       = 'mboxhosting.com';                     //Define o servidor de envio SMTP
    $mail->SMTPAuth   = true;                                  //Habitila a autenticação SMTP
    $mail->Username   = 'contato@henriquemiranda.dev.br';      //Usuário SMTP (normamlmente usa-se o próprio e-mail) 
    $mail->Password   = '6vaolava#';                          //Senha SMTP (senha do email)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;       //Ativa a criptografia TLS implícita
    $mail->Port       = 587;                                 //Porta TCP para conexão; use 587 se você definiu `SMTPSecure = PHPMailer :: ENCRYPTION_STARTTLS`
	
	//Destinatários
    $mail->setFrom('contato@henriquemiranda.dev.br', 'Teste Backup');
    $mail->addAddress('h.mirandacm@gmail.com', 'Henrique');     //Add a destinatário
	
	//Anexos
	$mail->addAttachment('/home/www/henriquemiranda.dev.br/backup/'.$filename); //Aqui estamos passando o arquivo de backup da base de dados gerado no início do código
	
	//Corpo do Email
    $mail->isHTML(true);                                  //Definir formato de e-mail para HTML
    $mail->Subject = 'Teste Backup';
    $mail->Body    = 'Olá! Aqui está o seu <b>backup</b> diário da sua base de dados';
    //$mail->AltBody = 'Olá! Aqui está o seu backup diário da sua base de dados';

	$mail->send();
	
?>