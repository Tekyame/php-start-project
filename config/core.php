<?php

/**
 * Arquivo de configuração sobre o ambiente geral de desenvolvimento.
 * Nome do projecto,versão
 */
    
#Inicia a sessao
 session_start();

 define("APP_URL","http://localhost:8000/");

 define("APP_NAME", "");

 define("APP_VERSION", 1.0);

 define("APP_COMPANY", "Seu nome");

 # Constates de Base de Ddaos
 define("DATA_USER",""); //User 

 define("DATA_NAME",""); // Nome da Base de dados

 define("DATA_PASS","");// Senha


 //Não precisa mecher nesta 
 define("APP_LENGTH",5);


  # Require as configuraçes da Rotas
  require_once 'router.php';

  # Require as configurações de Banco de Dados
  require_once 'orm.php';

  #Require as configuraçõs de Email
  require_once 'email.php';