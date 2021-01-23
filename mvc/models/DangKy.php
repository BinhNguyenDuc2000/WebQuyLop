<?php
// Thao tác đăng ký
class DangKy extends DB{
    public function Insert($MSSV,$HoTen,$Khoa,$SDT,$Email,$Pass){
        $query="Insert into SinhVien (MSSV,HoTen,Khoa,SDT,Email,Pass,TongSoTien) Values ('$MSSV',N'$HoTen','$Khoa','$SDT','$Email','$Pass',0)";  
                
        $con=$this->conn->prepare($query);
        {
        
            try
            {
                $con->execute();
            }
            catch(PDOException $e)
            {
                // In lỗi
                $e->getMessage();
                echo $e."<br>";
                return FALSE;
            }

        }
        return TRUE;
    }
    public function InsertDong($MSSV,$MaLop){
        $query="Insert into Dong Values ('$MSSV','$MaLop',0)";  
                
        $con=$this->conn->prepare($query);
        {
        
            try
            {
                $con->execute();
            }
            catch(PDOException $e)
            {
                // In lỗi
                $e->getMessage();
                echo $e."<br>";
                return FALSE;
            }

        }
        return TRUE;
    }
    public function InsertBiet($MSSV,$MaLop){
        $query="Insert into Biet Values ('$MSSV','$MaLop')";  
                
        $con=$this->conn->prepare($query);
        {
        
            try
            {
                $con->execute();
            }
            catch(PDOException $e)
            {
                // In lỗi
                $e->getMessage();
                echo $e."<br>";
                return FALSE;
            }

        }
        return TRUE;
    }
}
?>