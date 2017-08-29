<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
</html>
<?php
require_once 'DBUtil.class.php';

class NewsService
{
    public function showAllNews(){
        $dbu = new DBUtil();
        $sql = "SELECT * FROM news";
        $news = $dbu->executemore($sql);
        return $news;
    }
    public function addClick($id){
        $dbu = new DBUtil();
        $sql = "UPDATE news SET click=click+1 WHERE id='$id'";
        $dbu->excute($sql);    
    }
}
?>