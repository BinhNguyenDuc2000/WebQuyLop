<?php
// Trang chủ
class Home extends controller{
    function info(){
        if(!$_SESSION["MSSV"])
        {
            header('Location: http://'.$_SERVER['HTTP_HOST'].'/QuyLop/Login');
            exit;
        }
        else 
        {
            $this->view("standard1",["Page"=>"AllInfo","Database"=>""]);
        }
    }
}
?>

