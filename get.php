<?php

require_once 'loginservice.php';
$no = "cac1501";
$loginservice = new loginservice();

$array=$loginservice->showOneUser($no);
$name="user";
$arr=$loginservice->showAllUser($name);
echo count($arr);
/* while(@$row = $arr)
{
    $name=$row['name'];
    echo $name;
}  */
?>