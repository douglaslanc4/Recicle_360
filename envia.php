
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'recicle';

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_errno) {
    die("Erro na conexão: " . $conn->connect_errno);
   }


    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $data_solicitacao = $_POST['data_solicitacao'];
    $descricao = $_POST['descricao'];

    // Query SQL para inserir os dados no banco de dados
    $sql = "INSERT INTO recicle.solicitacao (nome, endereco, telefone, email, data_solicitacao, descricao) VALUES ('$nome', '$endereco', '$telefone', '$email', '$data_solicitacao', '$descricao')";

    // Executa a query
    $resultado = mysqli_query($conn, $sql);



$conn->close();
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>RECICLE 360</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
<body>
    
<div class="alert alert-info" role="alert">
  Solicitação realizada com Sucesso! <a href="index.html" class="alert-link">Clique aqui</a> para retornar a pagina incial.
</div>
  
</body>
</html>