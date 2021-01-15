<?php
// Trang đăng nhập
class Login extends controller{
    // Gọi đến cơ sở dữ liệu và trang đăng nhập
    public $DangNhap;
    public function __construct()
    {
        $this->DangNhap=$this->model("DangNhap");
    }
    public function info()
    {
        $this->view("standard1",["Page"=>"Login","Database"=>""]);
    }
    // Hứng và xử lý dữ liệu nhận được từ trang đăng nhập
    public function Reciever()
    {
        if (isset($_POST["btnLogin"]))
        {
            // Hứng dữ liệu
            $MSSV=$_POST["MSSV"];
            $Pass=$_POST["Pass"];
            // Truyền dữ liệu và xử lí kết quả
            $QuyenAdmin=$this->DangNhap->Insert($MSSV,$Pass);
            if($QuyenAdmin!=0)
            {
                echo "Đăng Nhập thành công";
                $_SESSION["MSSV"]=$MSSV;
                $_SESSION["QuyenAdmin"]=$QuyenAdmin;
                header('Location: http://'.$_SERVER['HTTP_HOST'].'/QuyLop/Home');
                exit;
            }
            else 
            {
                echo "Đăng nhập thất bại";
            }
        }
    }
}
?>