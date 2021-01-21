<?php
// Dữ liệu về sự kiện
class SuKien extends DB{
    // Hàm lấy dữ liệu về sinh viên
    public function GetSuKien(){
        $query="select * from SuKien order by Ngay desc";
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
}
?>