<?php
session_start();
// Trang đăng xuất
class LogOut extends controller{
    function info(){
        if(!isset($_SESSION["MSSV"]))
        {
            echo '<script>alert("Chưa đăng nhập")</script>';
            $this->redirect("Login");
            exit;
        }
        else 
        {
            session_unset();
            echo '<script>alert("Đăng xuất thàn công")</script>';
            $this->redirect("Login");
            exit;
        }
    }
}
?>
