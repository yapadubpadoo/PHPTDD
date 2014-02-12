<?php
$db = new PDO('mysql:host=localhost;dbname=access_log;charset=utf8', 'root', 'password');
$db->query("DELETE FROM api_log WHERE id = 1");
?>