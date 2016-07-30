<?php

$connection = new mysqli('localhost', 'root', '', 'random_quotes');

if ($connection->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ')'
    	. $mysqli->connect_error);
}
?>