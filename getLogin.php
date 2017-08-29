<?php
session_start();
require_once 'loginservice.php';
$no = $_POST['no'];
$pw = $_POST['pw'];
$loginservice = new loginservice();
$count = $loginservice->check($no, md5($pw));

if($count==1){
    unset($_SESSION['user']);
    $_SESSION['user']=$loginservice->showOneUser($no);
    echo "success";
}else{
    echo "failed";
}

?>