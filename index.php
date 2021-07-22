<?php
	
	//Variável que define o nome como o arquivo será salvo. Neste caso está dinâmico salvando com a data atual do backup
	$filename='backup_hendev_'.date('d_m_y').'.sql';
	
	//Função que faz o backup do arquivo SQL
	shell_exec('mysqldump -u 3899487_pontualps -p 6vaolava# 3899487_pontualps > /home/www/henriquemiranda.dev.br/backup/'.$filename);
	
	require 'config.php';
	