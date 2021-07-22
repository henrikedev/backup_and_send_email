<?php
	
	//Configurações do servidor
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Ativa saída de depuração detalhada
    $mail->isSMTP();                                            //Envia usando SMTP
    $mail->Host       = 'mboxhosting.com';                     //Define o servidor de envio SMTP
    $mail->SMTPAuth   = true;                                   //Habitila a autenticação SMTP
    $mail->Username   = 'contato@henriquemiranda.dev.br';                     //Usuário SMTP (normamlmente usa-se o próprio e-mail) 
    $mail->Password   = '6vaolava#';                               //Senha SMTP (senha do email)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Ativa a criptografia TLS implícita
    $mail->Port       = 587;                                    //Porta TCP para conexão; use 587 se você definiu `SMTPSecure = PHPMailer :: ENCRYPTION_STARTTLS`
	
?>