<?php
session_start();
// Trang hiển thị thông tin sinh viên
class Login extends controller{
    // Gọi đến cơ sở dữ liệu và hiển thị thông tin sinh viên
    public $SinhVien;
    public function __construct()
    {
         // Quay về trang đăng nhập nếu đã đăng nhập
         if(!isset($_SESSION["MSSV"]))
         {
             echo "Chưa đăng nhập";
             $this->redirect("Login");
             exit;
         }
        $this->ThongTinSinhVien=$this->model("SinhVien");
    }
    public function info()
    {
        $this->view("Standard0",["Page"=>"StudentInfo","Link"=>"StudentInfo","Database"=>""]);
    }
    
}
?>