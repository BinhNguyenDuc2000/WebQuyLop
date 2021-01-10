<?php
// Trang đăng ký

class Register extends controller{
    // Gọi đến cơ sở dữ liệu và trang đăng ký
    public $DangKy;
    public function __construct()
    {
        $this->DangKy=$this->model("DangKy");
    }
    public function info()
    {
        $this->view("standard1",["Page"=>"Register","Database"=>""]);
    }
    // Hứng và xử lý dữ liệu nhận được từ trang đăng ký
    public function Reciever(){
        if (isset($_POST["btnRegister"])){
            // Hứng dữ liệu
            $MSSV=$_POST["MSSV"];
            $HoTen=$_POST["HoTen"];
            $TenLop=$_POST["TenLop"];
            $Khoa=$_POST["Khoa"];
            $SDT=$_POST["SDT"];
            $Email=$_POST["Email"];
            $Pass=$_POST["Pass"];
            $Pass=password_hash($Pass,PASSWORD_DEFAULT);
            // Truyền dữ liệu
            if($this->DangKy->Insert($MSSV,$HoTen,$TenLop,$Khoa,$SDT,$Email,$Pass))
            {
                echo "Đăng ký thành công";
            }
            else 
            {
                echo "Đăng ký thất bại";
            }     
        }
    }
}
?>