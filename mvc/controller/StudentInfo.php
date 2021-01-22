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
    // Hứng và xử lý dữ liệu nhận được từ trang cập nhật
    public function Update()
    {
        if(isset($_POST["btnUpdate"]))
        {
            // Hứng dữ liệu
            $MSSV=$_POST["MSSV"];
            $HoTen=$_POST["HoTen"];
            $TenLop=$_POST["TenLop"];
            $Khoa=$_POST["Khoa"];
            if($_POST["SDT"]="Chưa có số điện thoại")
            {
                $SDT=0;
            }
            else 
            {
                $SDT=$_POST["SDT"];
            }
            if($_POST["Email"]="Chưa có email")
            {
                $Email="";
            }
            else
            {
                $Email=$_POST["Email"];
            }
            // Cập nhật
            if ($this->SinhVien->Update($MSSV,$HoTen,$TenLop,$Khoa,$SDT,$Email))
            {
                $_SESSION["MSSV"]=$MSSV;
                $this->PopUp("Cập nhật thành công");
                $this->redirect("StudentInfo");
                exit;
            }
            else
            {
                $this->PopUp("Cập Nhật thất bại");
                $this->redirect("StudentInfo");
                exit;
            }
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