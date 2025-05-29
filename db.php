<?php
    // Configura o relatório de erros do MySQLi para facilitar a depuração
    mysqli_report(MYSQLI_REPORT_ERROR);
 
    // Estabelece a conexão com o banco de dados MySQL
    $con = new mysqli("localhost", "root", "", "loja_php");
 
    // Verifica se houve erro na conexão
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
 
?>
 