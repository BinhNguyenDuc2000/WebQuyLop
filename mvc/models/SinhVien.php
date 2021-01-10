<?php
// Thong tin ve sinh vien
class SinhVien extends DB{
    public function GetSinhVien(){
        $query="select * from SinhVien";
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
                $e->getMessage();
                echo $e;
                return NULL;
            }
        }
    }
}
?>