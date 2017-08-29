<?php session_start()?>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
</html>
<?php
require_once 'loginservice.php';
$loginservice = new loginservice();
$pw = md5($_POST['pw']);
$no = $_POST['no'];
$tag = $loginservice->check($no, $pw);
if ($tag == 1) {
    $_SESSION['no'] == $no;
    header("location:main.php");
} else {
    header("location:LoginRegister.php?t=1");
}
?>