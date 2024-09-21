<?php
$db = new SQLite3('comments.db');
$db->exec('DELETE FROM comments');
echo "Histórico da base de dados limpo com sucesso.";
?>
