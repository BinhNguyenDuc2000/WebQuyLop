<?php 
// Xử lý kết nối đến cơ sở dữ liệu

class DB { 
    public $conn;
    protected $serverName = "AS-VAIO\SQLTRUE"; 
    protected $uid = "QuyLop";   
    protected $pwd = "1234";  
    protected $databaseName = "QuyLop"; 
    function __construct()
    {    
        try
        {
            $this->conn = new PDO("sqlsrv:Server=$this->serverName;Database=$this->databaseName", $this->uid, $this->pwd);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    catch(PDOException $e)
    {
        $e->getMessage();
        echo $e;
    }

}
}
?>  