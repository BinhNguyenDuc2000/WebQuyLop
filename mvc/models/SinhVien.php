<?php
// Dữ liệu về sinh viên
class SinhVien extends DB{
    // Hàm lấy dữ liệu về sinh viên
    public function GetSinhVien($MSSV)
    {
        $query="select * from SinhVien,QuyLop where MSSV='$MSSV' and SinhVien.MaLop = QuyLop.MaLop";
        $con=$this->conn->prepare($query);
        $con->setFetchMode(PDO::FETCH_ASSOC);
        {
            try
            { 
                $con->execute();
                $data=$con->fetchAll();
                return $data;
            }
            catch(PDOException $e)
            {
                // bắt lỗi
                $e->getMessage();
                echo $e;
                return NULL;
            }
        }
    }
    // Hàm cập nhật tài khoản Sinh Viên
    public function Update($MSSV,$HoTen,$TenLop,$Khoa,$SDT,$Email)
    {
        $query="Update SinhVien Set MSSV='$MSSV',HoTen=N'$HoTen',TenLop=N'$TenLop',Khoa='$Khoa',SDT='$SDT',Email='$Email' where MSSV=".$_SESSION["MSSV"];
        $con=$this->conn->prepare($query);
        {
            try
            {
                $con->execute();
                return TRUE;
            }
            catch(PDOException $e)
            {
                // bắt lỗi
                $e->getMessage();
                echo $e;
                return FALSE;
            }
        }
    }
    // Hàm xóa tài khoản của sinh viên
    public function Delete($MSSV){
        $query="delete from SinhVien where MSSV='$MSSV'";
        $con=$this->conn->prepare($query);
        {
            try
            {
                $con->execute();
                return TRUE;
            }
            catch(PDOException $e)
            {
                // bắt lỗi
                $e->getMessage();
                echo $e;
                return FALSE;
            }
        }
    }
}
?>