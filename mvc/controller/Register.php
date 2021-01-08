<?php
// Trang chủ

class Register extends controller{
    function info(){
        $sinhvien=$this->model("SinhVien");
        $con=$sinhvien->GetSinhVien();
        $this->view("standard1",["Page"=>"Register","Database"=>$con]);
        
    }
}
?>