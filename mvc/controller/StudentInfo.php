<?php
session_start();
// Trang hiển thị thông tin sinh viên
class StudentInfo extends controller{
    // Gọi đến cơ sở dữ liệu và hiển thị thông tin sinh viên
    protected $SinhVien;
    public function __construct()
    {
         // Quay về trang đăng nhập nếu đã đăng nhập
         if(!isset($_SESSION["MSSV"]))
         {
             $this->PopUp("chưa đăng nhập");
             $this->redirect("Login");
             exit;
         }
         $this->SinhVien=$this->model("SinhVien");
    }
    public function info()
    {
        $data=$this->SinhVien->GetSinhVien($_SESSION["MSSV"]);
        if(isset($data))
        {
            $this->view("Standard0",["Page"=>"StudentInfo","Link"=>"StudentInfo","Database"=>$data]);
        }
        else
        {
            $this->PopUp("Đã xảy ra lỗi");
            $this->redirect("Home");
            exit;
        }
    }
    // Hàm xóa tài khoản
    public function DeleteAccount()
    {
        if(isset($_POST["btnDelete"]))
        {
            $MSSV=$_SESSION["MSSV"];
            if($this->SinhVien->Delete($MSSV)){
                $this->PopUp("Xóa tài khoản thành công");
                $this->redirect("LogOut");
                exit;
            }
            else {
                $this->PopUp("Xóa tài khoản thất bại");
                $this->redirect("Home");
                exit;
            }
        }
    }
    
}
?>