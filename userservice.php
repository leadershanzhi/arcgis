<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
	<?php
require_once 'DBUtil.class.php';
require_once 'user.class.php';

class userservice
{

    public function addUser($user)
    {
        
        $no = $user->no;
        $name = $user->name;
        $pw = $user->pw;
        $birth = $user->birth;
        $sql = "INSERT INTO USER VALUES (NULL,'$no','$pw','$name','$birth')";
        $dbu = new DBUtil();
        return $dbu->excute($sql);
        
    }

    public function checkUnique($no)
    {
        $dbu = new DBUtil();
        $sql = "SELECT COUNT(*) FROM USER WHERE no='$no'";
        return $dbu->onedata($sql);
    }
}
?>
</html>