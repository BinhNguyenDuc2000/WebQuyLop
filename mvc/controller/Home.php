<?php
session_start();
// Trang chủ
class Home extends controller{
    function info(){
        if(!isset($_SESSION["MSSV"]))
        {
            $this->view("Standard0",["Page"=>"NewEvent","Link"=>"Home0","Database"=>""]);
        }
        else 
        {
            $this->view("Standard0",["Page"=>"NewEvent","Link"=>"Home1","Database"=>""]);
        }
    }
}
?>

