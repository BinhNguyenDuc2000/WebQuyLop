<?php
// Trang chủ
class Home extends controller{
    function info(){
        if(!$_SESSION["MSSV"])
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

