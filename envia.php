<?php
   $servername = 'localhost';
   $username = 'root';
   $password = '';
   $database = 'recicle';
   
   // Conexão com o banco de dados
   $conexao = new mysqli($servername, $username, $password, $database);
   
   // Verifica a conexão
   if ($conexao->connect_errno) {
       
      echo"NÃO CONECTADO AO BANCO";
   }
   echo"CONETADO AO BANCO DE DADOS> > > > > > > >";

   
   
   $nome = $_POST['nome'];
   $endereco = $_POST['endereco'];
   $telefone = $_POST['telefone']; 
   $email = $_POST['email'];
   $data_solicitacao = $_POST['data'];
   $descricao = $_POST['descricao'];
    

   $sql = "INSERT INTO recicle.solicitacao (nome,endereco,telefone,email,data_solicitacao,descricao) VALUES ('$nome','$endereco','$telefone','$email','$data_solicitacao','$descricao')";
   $resultado = mysqli_query($conexao,$sql);
   echo"SOLICITAÇÃO EFETUADA<BR>";
   ?>

<a href="index.html">Voltar </a>