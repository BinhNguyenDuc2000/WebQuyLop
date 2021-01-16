<?php
// Thao tac dang nhap
class DangNhap extends DB{
    public function Insert($MSSV,$Pass){
        $query="Select * from SinhVien where MSSV='$MSSV'";
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
                return 0;
            }

        }
        $data=$con->fetch(PDO::FETCH_ASSOC);
        if(!$data)
        {
            return 0;
        }
        else
        {
            if (password_verify($Pass,$data['Pass']))
            {
                return $data['QuyenAdmin'];
            }
            {
                return 0;
            }
        }
        
    }
}
?>