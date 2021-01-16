<?php
session_start();
// Trang chủ
class Home extends controller{
    function info(){
        if(!isset($_SESSION["MSSV"]))
        {
            $this->view("standard0",["Page"=>"AllInfo","Database"=>""]);
        }
        else 
        {
            $this->view("standard1",["Page"=>"AllInfo","Database"=>""]);
        }
    }
}
?>

