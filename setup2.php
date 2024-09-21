<?php
$db = new SQLite3('contents.db');
$db->exec('CREATE TABLE contents (id INTEGER PRIMARY KEY, content TEXT)');
echo "Banco de dados configurado com sucesso.";
?>
