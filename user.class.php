<?php

class user
{

    public $no;

    public $pw;

    public $name;

    public $birth;

    public function __construct($no, $pw, $name, $birth)
    {
        $this->no = $no;
        $this->pw = $pw;
        $this->name = $name;
        $this->birth = $birth;
    }
}
?>