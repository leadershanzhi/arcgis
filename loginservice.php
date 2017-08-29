<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
</html>
<?php
require_once 'DBUtil.class.php';

class loginservice
{

    public function check($no, $pw)
    {
        $dbu = new DBUtil();
        $sql = "SELECT COUNT(*) FROM user WHERE NO='$no' AND pw='$pw'";
        $tag = $dbu->onedata($sql);
        return $tag;
    }
    public function showOneUser($no){
        $dbu = new DBUtil();
        $sql = "SELECT * FROM USER WHERE NO='$no'";
        $user = $dbu->oneObject($sql);
        return $user;
    }
    public function showAll($tablename){
        $dbu = new DBUtil();
        $sql = "SELECT * FROM $tablename";
        $user = $dbu->executemore($sql);
        return $user;
    }
}
?>