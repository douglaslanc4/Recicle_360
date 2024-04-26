<?php
// Configurações do banco de dados
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

// Consulta SQL para buscar os dados da tabela
    $sql = "SELECT * FROM solicitacao";
    $result = $conn->query($sql);

// Cria um array para armazenar os dados da tabela
    $dados = array();

// Verifica se há resultados
    if ($result->num_rows > 0) {
    // Itera sobre os resultados e armazena-os no array $dados
    while($row = $result->fetch_assoc()) {
        $dados[] = $row;
    }
    } 
    else {
    echo "Nenhum resultado encontrado.";
    }

// Fecha a conexão com o banco de dados
    $conn->close();

// Inclui a página HTML para exibir os dados
   
?>
<!doctype html>
<html lang="PT-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RECICLE 360</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <img src="logo.png" href="index.html">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
          <nav class="navbar col-12 m-auto  navbar-expand-lg bg-body-tertiary" style="z-index: 999;">
  <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
  </div>
    
</nav>
    <h1 class="text-center font-weight-bold ">VEJA QUEM SOLICITA</h1>
    <p class="text-center font-weight-normal ">Escolha e Preecha o Formulario Abaixo com Identificador </p>
    

    
      <table class="table table-striped ">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>ENDERECO</th>
            <th>TELEFONE</th>
            <th>EMAIL</th>
            <th>DATA</th>
            <th>DESCRIÇÃO</th>
            <th>STATUS</th>
        </tr>
          <?php
            foreach ($dados as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['endereco'] . "</td>";
            echo "<td>" . $row['telefone'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['data_solicitacao'] . "</td>";
            echo "<td>" . $row['descricao'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "</tr>";
            }
          ?>
      </table>
        <br><br>
        
        <button onclick="window.location.href = 'index.html';" class="btn btn-info m-2">Home</button>        
  </body>
  
  <footer class="bg-dark text-light py-4">
    <div class="container text-center">
        <p>&copy; PROJETO INTEGRADOR UNIVESP - 2024 </p>
    </div>
  </footer>

</html>