<?php
// Xử lí URL

class app{
    
    protected $controller="Home";
    protected $action="info";
    protected $param=[];
    function __construct()
    {
        $arr = $this->UrlProcess();
        // Xử lý controller 
        if (isset($arr[0])){
            if (file_exists("./mvc/controller/".$arr[0].".php")){
                $this->controller=$arr[0]; 
                unset($arr[0]);
            }
        }
    
        require_once "./mvc/controller/".$this->controller.".php";
        $this->controller = new $this->controller;
        // Xử lý controller
        if (isset($arr[1])) {
            if( method_exists ($this->controller, $arr[1])){
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }
        // Xử lý Param
        $this->param = $arr?array_values($arr):[];
        // Gọi hàm
        call_user_func_array(array($this->controller,$this->action),$this->param);    
    }
    // Trim url
    function UrlProcess(){
        if(isset($_GET["url"])) {
            return explode("/",filter_var(trim($_GET["url"],"/")));
        }
    }
}

?>