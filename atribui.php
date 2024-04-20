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

   
   
   $id_solicitacao = $_POST['solicitacao_id'];
   $nome = $_POST['nome'];
   $contato = $_POST['contato']; 
   
    

   $sql = "INSERT INTO recicle.servicos_abertos(solicitacao_id,nome,contato) VALUES ('$id_solicitacao','$nome','$contato')";
   $resultado = mysqli_query($conexao,$sql);
   echo"SOLICITAÇÃO EFETUADA<BR>";
   ?>

<a href="index.html">Voltar </a>