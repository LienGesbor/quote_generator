<?php
require ('connect.php');
$query = "SELECT id, quote, author FROM quotes ORDER BY RAND() LIMIT 1";

$getQuote = $connection->query($query);
?>