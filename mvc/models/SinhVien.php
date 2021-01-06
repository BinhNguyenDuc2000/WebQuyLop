<?php
// Thong tin ve sinh vien
class SinhVien extends DB{
    public function GetSinhVien(){
        $query="select * from SinhVien";
        $con=$this->conn->prepare($query);
        $con->setFetchMode(PDO::FETCH_ASSOC);
        $con->execute();
        return $con;
    }
}
?>