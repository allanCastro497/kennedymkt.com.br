<?php
   //Variáveis que recebem os dados digitados no formulário pelo id atribuído nos input
   $nome = $POST[nome]; 
   $email = $POST[email];
   $assunto = $POST[assunto];
   $mensagem = $POST[mensagem];

mail (
    "kennedy.allan.domingos@gmail.com", //Endereço que vai receber a mensagem
    "Nome: $nome
     Email: $email
     Assunto: $assunto
     Mensagem: $mensagem", "FROM:$nome<$email>");
?>