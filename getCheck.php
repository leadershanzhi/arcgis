<?php
require_once 'userservice.php';
$no = $_POST['str'];
if ($no == null) {
    $resp = "请输入";
} else {
    $userservice = new userservice();
    $count = $userservice->checkUnique($no);
    $resp = $count == 0 ? "可以使用" : "已存在";
}
echo $resp;
?>