<?php
session_start();
// Trang chủ
class Home extends controller{
    protected $SuKien;
    protected $data;
    public function __construct()
    {
         $this->SuKien=$this->model("SuKien");
    }
    function info()
    {
        // Khởi tạo sự kiện đang xem hiện tại
        if (!isset($_SESSION["SuKien"]))
        {
            $_SESSION["SuKien"]=0;
        }  
        $data=$this->SuKien->GetSuKien();
        if(!isset($data))
        {
           $this->PopUp("Đã xảy ra lỗi");
           $this->redirect("Login");
           exit;   
        }    
        if(!isset($_SESSION["MSSV"]))
        {
            $this->view("Standard0",["Page"=>"NewEvent","Link"=>"Home0","Database"=>$data]);
        }
        else 
        {
            $this->view("Standard0",["Page"=>"NewEvent","Link"=>"Home1","Database"=>$data]);
        }
    }
    function PreviousEvent()
    {
        if (!isset($_SESSION["SuKien"]))
        {
            $_SESSION["SuKien"]=0;
        }
        if(!isset($data))
        {
            $data=$this->SuKien->GetSuKien();
        }
        if (isset($data[$_SESSION["SuKien"]+1]))
        {
            $_SESSION["SuKien"]=$_SESSION["SuKien"]+1;
        }
        $this->redirect("Home");
    }
    function NextEvent()
    {
        if (!isset($_SESSION["SuKien"]))
        {
            $_SESSION["SuKien"]=0;
        }
        if(!isset($data))
        {
            $data=$this->SuKien->GetSuKien();
        }
        if (isset($data[$_SESSION["SuKien"]-1]))
        {
            $_SESSION["SuKien"]=$_SESSION["SuKien"]-1;
        }
        $this->redirect("Home");
    }
}
?>

