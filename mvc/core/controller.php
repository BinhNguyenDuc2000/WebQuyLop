<?php
// Kiếm soát xem trang nào được sử dụng và hiển thị

class Controller {
    public function model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }
    public function view($view,$data=[]){
        require_once "./mvc/views/".$view.".php";
    }
    // Sử dụng Javascript do php không cho phép in ki chuyển trang
    public function redirect($site){
        $link="http://".$_SERVER['HTTP_HOST']."/QuyLop/".$site;
        echo "<script>setTimeout(\"location.href = '$link';\",1500);</script>";
    }
}
?>