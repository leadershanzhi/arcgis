<?php

class DBUtil
{

    private $host = "localhost";

    private $user = "root";

    private $pw = "root";

    private $dbname = "caclab";

    private $conn = "";

    private $res = "";

    public function __construct()
    {
        $this->conn = mysql_connect($this->host, $this->user, $this->pw);
        if (! $this->conn) {
            die("connection fails" . mysql_errno());
        }
        mysql_query("set names utf8", $this->conn) or die("set code fails" . mysql_errno());
        mysql_select_db($this->dbname, $this->conn) or die("choose database fails" . mysql_errno());
    }

    public function excute($sql)
    {
        mysql_query($sql);
        mysql_close($this->conn);
    }

    public function instrusearch(&$pagebean)
    {
        $sql = "select * from instru ORDER BY id DESC limit " . ($pagebean->pnow - 1) * $pagebean->psize . "," . $pagebean->psize;
        $pagebean->rcount = $this->onedata("select count(*) from instru");
        $pagebean->pcount = ceil($pagebean->rcount / $pagebean->psize);
        $pagebean->row = mysql_query($sql);
    }

    public function executemore($sql)
    {
        $arr = array();
        $this->res = mysql_query($sql) or die("查询失败" . mysql_errno());
        $i = 0;
        while (@$row = mysql_fetch_assoc($this->res)) {
            $arr[$i ++] = $row;
        }
        $this->closeAll();
        return $arr;
    }

    public function onedata($sql)
    {
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result);
        $data = $row[0];
        return $data;
    }

    public function oneObject($sql){
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result);
        return $row;
    }
    public function closeAll()
    {
        if (! empty($this->res)) {
            mysql_free_result($this->res);
        }
        if (! empty($this->conn)) {
            mysql_close($this->conn);
        }
    }
}

?>
