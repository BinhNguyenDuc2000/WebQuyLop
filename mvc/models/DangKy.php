<?php
// Thao tac dang ky
class DangKy extends DB{
    public function Insert($MSSV,$HoTen,$TenLop,$Khoa,$SDT,$Email,$Pass){
        $query="Insert into SinhVien Values ('$MSSV',N'$HoTen',N'$TenLop','$Khoa','$SDT','$Email',1,'$Pass')";
        $con=$this->conn->prepare($query);
        {
        
            try
            {
                $con->execute();
            }
            catch(PDOException $e)
            {
                // In lỗi
                // $e->getMessage();
                // echo $e."<br>";
                return FALSE;
            }

        }
        return TRUE;
    }
}
?>