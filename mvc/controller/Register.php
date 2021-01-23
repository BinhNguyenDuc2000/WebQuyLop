<?php
session_start();
// Trang đăng ký
class Register extends controller{
    // Gọi đến cơ sở dữ liệu và trang đăng ký
    protected $DangKy;
    public function __construct()
    {
        // Quay về trang chủ nếu đã đăng nhập
        if(isset($_SESSION["MSSV"]))
        {
            echo "Đã đăng nhập";
            $this->redirect("Home");
            exit;
        }
        $this->DangKy=$this->model("DangKy");
    }
    public function info()
    {
        $this->view("Standard0",["Page"=>"Register","Link"=>"Register","Database"=>""]);
    }
    // Hứng và xử lý dữ liệu nhận được từ trang đăng ký
    public function Reciever(){
        if (isset($_POST["btnRegister"]))
        {
            // Hứng dữ liệu
            $MSSV=$_POST["MSSV"];
            $HoTen=$_POST["HoTen"];
            $MaLop=$_POST["MaLop"];
            $Khoa=$_POST["Khoa"];
            $SDT=$_POST["SDT"];
            $Email=$_POST["Email"];
            $Pass=$_POST["Pass"];
            $Pass=password_hash($Pass,PASSWORD_DEFAULT);
            // Truyền dữ liệu và xử lí kết quả
            if($this->DangKy->Insert($MSSV,$HoTen,$Khoa,$SDT,$Email,$Pass))
            {
                if ($this->DangKy->InsertDong($MSSV,$MaLop))
                {
                    if ($this->DangKy->InsertBiet($MSSV,$MaLop))
                    {
                        $this->PopUp("Đăng ký thành công");
                        $this->redirect("Home");
                        exit;
                    }
                    else
                    {
                        $this->PopUp("Đăng ký thất bại do không thêm được bảng Biết");
                        $this->redirect("Register");
                        exit;
                    }
                }
                else 
                {
                    $this->PopUp("Đăng ký thất bại do không thêm được bảng Đóng");
                    $this->redirect("Register");
                    exit;
                }
            }

            else 
            {
                $this->PopUp("Đăng ký thất bại");
                $this->redirect("Register");
                exit;
            }     
        }
        else 
        {
            $this->PopUp("Chưa ấn đăng ký");
            $this->redirect("Register");
        }
    }
}
?>