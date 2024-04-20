<?php
// Configurações do banco de dados
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'recicle';

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
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
} else {
    echo "Nenhum resultado encontrado.";
}

// Fecha a conexão com o banco de dados
$conn->close();

// Inclui a página HTML para exibir os dados
include 'recolhe.html';
?>