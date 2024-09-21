<?php
$db = new SQLite3('feedbacks.db');
$db->exec('CREATE TABLE feedbacks (id INTEGER PRIMARY KEY, feedback TEXT)');
echo "Banco de dados configurado com sucesso.";
?>
