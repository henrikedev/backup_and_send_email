<br><br>
<h4 align="center"> 
	🚧  Aut.Backup & E-mail 🚧 Concluído 🚀 🚧
</h4>

<p align="center">
 <a href="#-sobre-o-projeto">Sobre</a> •
 <a href="#-funcionalidades">Funcionalidades</a> •
 <a href="#-como-executar-o-projeto">Como executar</a> • 
 <a href="#-tecnologias">Tecnologias</a> • 
 <a href="#-autor">Autor</a> • 
</p>


## 💻 Sobre o projeto <br>

♻️ Este script automatiza o processo de backup e envio, por e-mail, de bases de dados SQL tanto localmente quanto hospedados utilizando a biblioteca PHPmailer.<br>

--- <br><br><br>

## ⚙️ Funcionalidades<br>

- Backup automático da base de dados em qualquer pasta definida pelo usuário dentro do código.<br>
- Envio automático do arquivo para o e-mail definido pelo usuário dentro do código.<br>

---<br><br><br>

## 🚀 Como executar o projeto<br>

1 - Baixe o repositório e coloque no seu ambiente (produção ou testes). <br>
2 - Entre no arquivo confg.php e insira as informações do seu servidor de e-mail, destinatário, remetente e o que irá no assunto e corpo do e-mail.<br>
3 - Entre no arquivo index.php e configure as opções para exportar a base de dados. Para ambientes locais será necessário definir caminho  do mysqldump. <br>
Caso esteja trabalhando direto em uma hospedagem pode-se iniciar o comando direto com o mysqldump. Exemplo: <br><br>

<b>//Para ambientes locais, caso esteja trabalhando com o xampp, por exemplo, o comando ficará assim:</b><br>
shell_exec('C:\xampp\mysql\bin\mysqldump -u usuario_banco_de_dados -psenha_banco_de_dados nome_banco_de_dados >'.$filename);<br>
<b>//Caso esteja trabalhando com outro servidor local, basta setar a pasta onde se encontra o mysqldump</b><br><br>

<b>//O arquivo será salvo na mesma pasta do script. Caso deseje definir uma pasta diferente, basta setá-la antes do $filename como no exemplo abaixo</b></br>
shell_exec('C:\xampp\mysql\bin\mysqldump -u usuario_banco_de_dados -psenha_banco_de_dados nome_banco_de_dados >'.'C:\xampp\htdocs\EnviandoEmail\'.'.$filename);<br><br>

<b>Obs: para definir o nome do arquivo basta alterar o início do nome que se encontra na variável $filename. O nome está configurado de forma dinâmica para que </br>
seja salvo junto com a data atual do backup</b><br>

---<br><br><br>

## 🛠 Tecnologias<br>

As seguintes ferramentas foram usadas na construção do projeto:<br>

1 - Biblioteca PHPmailer<br>
2 - PHP<br>

---<br><br><br>

## 🦸 Autor<br>

<a href="https://www.henriquemiranda.dev.br">
 <img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/70604552?v=4" width="100px;" alt=""/>
 <br />
 <sub><b>Henrique Miranda</b></sub></a> <a href="https://www.henriquemiranda.dev.br">🚀</a>
 <br />

[![Linkedin Badge](https://img.shields.io/badge/-Henrique-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/henrique-miranda/)](https://www.linkedin.com/in/henrique-miranda/) 
[![Gmail Badge](https://img.shields.io/badge/-h.mirandacm@gmail.com-c14438?style=flat-square&logo=Gmail&logoColor=white&link=mailto:h.mirandacm@gmail.com)](mailto:h.mirandacm@gmail.com)

---
