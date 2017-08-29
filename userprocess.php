<?php session_start()?>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
</html>
<?php
require_once 'userservice.php';
require_once 'user.class.php';
$userservice = new userservice();
$no = $_REQUEST['no'];
$pw = md5($_REQUEST['pw']);
$name = $_REQUEST['name'];
$birth = $_REQUEST['birth'];

$user = new user($no, $pw, $name, $birth);
$tag = $userservice->addUser($user);

if($tag == 1)?>
<script>
  alert("添加成功！");
</script>
<?php
header("location:main.php");
?>