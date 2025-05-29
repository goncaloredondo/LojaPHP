<?php
require 'db.php'; // Inclui o arquivo de conexão com a base de dados

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepara a query para remover o produto da base de dados
    $sql = $con->prepare("DELETE FROM produtos WHERE id = ?");
    $sql->bind_param("i", $id);
    
    if ($sql->execute()) {
        // Redireciona para a área administrativa após a remoção
        header("Location: ../views/areaadmin2.php");
    } else {
        echo "Erro ao eliminar produto."; // Exibe mensagem de erro caso a operação falhe
    }
}
?>
