<?php
session_start();
$id = $_POST['newkey'];
require_once 'newsservice.php';
$newsservice = new NewsService();
$newsservice->addClick($id);
?>