<?php
// Trang chủ

class Home extends controller{
    function info(){
        $sinhvien=$this->model("SinhVien");
        $con=$sinhvien->GetSinhVien();
        $this->view("standard",["Database"=>$con]);
        
    }
}
?>

