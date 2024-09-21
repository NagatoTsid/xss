<?php
$db = new SQLite3('comments.db');
$db->exec('CREATE TABLE comments (id INTEGER PRIMARY KEY, comment TEXT)');
echo "Banco de dados configurado com sucesso.";
?>
