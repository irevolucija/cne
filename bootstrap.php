<?php

require_once 'class/Connection.class.php';
require_once 'class/News.class.php';

$db = new Connection();
$conn = $db->connection();

$news = new News($conn);