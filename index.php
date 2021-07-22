<?php
	//Importar classes PHPMailer para o namespace global
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	
	// Carrega o autoloader do Composer e o arquivo de configuração do servidor
	require '/lib/vendor/autoload.php';
	require 'config.php';

	//Variável que define o nome como o arquivo será salvo. Neste caso está dinâmico salvando com a data atual do backup
	$filename='backup_hendev_'.date('d_m_y').'.sql';
	
	//Função que faz o backup do arquivo SQL
	shell_exec('mysqldump -u 3899487_pontualps -p 6vaolava# 3899487_pontualps > /home/www/henriquemiranda.dev.br/backup/'.$filename);

	//Instancioando o PHPMAILER e passando o parâmetro true para permitir exceções
	$mail = new PHPMailer(true);	
	
	//Destinatários
    $mail->setFrom('contato@henriquemiranda.dev.br', 'Teste Backup');
    $mail->addAddress('Teste Backup', 'Henrique');     //Add a destinatário
	
	//Anexos
	$mail->addAttachment('/home/www/henriquemiranda.dev.br/backup/'.$filename); //Aqui estamos passando o arquivo de backup da base de dados gerado no início do código
	
	//Corpo do Email
    $mail->isHTML(true);                                  //Definir formato de e-mail para HTML
    $mail->Subject = 'Teste Backup';
    //$mail->Body    = 'Olá! Aqui está o seu <b>backup</b> diário da sua base de dados;
    $mail->AltBody = 'Olá! Aqui está o seu backup diário da sua base de dados';

	$mail->send();
	