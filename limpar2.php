<?php
// Abre o banco de dados SQLite
$db = new SQLite3('feedbacks.db');

// Consulta para obter todos os nomes das tabelas
$results = $db->query("SELECT name FROM sqlite_master WHERE type='table' AND name NOT LIKE 'sqlite_%'");

while ($row = $results->fetchArray()) {
    $tableName = $row['name'];
    // Executa um comando DELETE para limpar cada tabela
    $db->exec("DELETE FROM $tableName");
    // Reinicia os índices das tabelas
    $db->exec("DELETE FROM sqlite_sequence WHERE name='$tableName'");
}

echo "Todas as tabelas foram limpas com sucesso.";
?>
