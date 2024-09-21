<?php
$db = new SQLite3('contents.db');
$db->exec('DELETE FROM comments');
echo "Histórico da base de dados limpo com sucesso.";
?>
