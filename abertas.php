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
    $sql = "SELECT * FROM solicitacao WHERE status = 'Aberta'";
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
<body class="p-3 m-1 border-0 ">
    <img src="logo.png" href="index.html">

    </nav>
    <h1 class="text-center font-weight-bold ">VEJA SOLICITAÇÕES EM ABERTO</h1>
    <p class="text-center font-weight-normal ">Escolha e Preecha o Formulario Abaixo com Identificador </p>



  <table class="table table-striped ">
    <tr>
        <th>IDENTIFICADOR</th>
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
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Atribuir Solicitação
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Atribuir Seu Id a Solicitação</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="atribui.php" method="POST"> 
            <label for="solicitacao_id" class="form-label">Identificador</label>
            <input type="text" class="form-control" id="solicitacao_id" required maxlength="10">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Seu Nome" required maxlength="100">
            <label for="contato" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="contato"  required>  
          <br><br>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
    
    <button type="reset" class="btn btn-danger" >Reset</button>
    <button onclick="window.location.href = 'index.html';" class="btn btn-info">Home</button>
    <br>

       




    
    
    
    
    
    
    
    <br>
    <footer class="bg-dark text-light py-4">
        <div class="container text-center">
            <p>&copy; PROJETO INTEGRADOR UNIVESP - 2024 </p>
        </div>
    </footer>

    
</body>  
</html> 