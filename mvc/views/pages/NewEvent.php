<?php
$info=$data["Database"][$_SESSION["SuKien"]];
?>
<h2> Sự kiện của lớp </h2>
<table>
    <tr>
        <td class="EventImage"> 
        <?php 
        switch($info["GhiChu"])
        {
            case "Nhà Giáo":
                {
                    echo "<img src=\"./mvc/views/image/NhaGiao.jpg\" width=\"300\" height=\"200\">";  
                    break;
                }
            default:
             echo "<img src=\"./mvc/views/image/HoaHong.jpg\" width=\"300\" height=\"200\">";
        }
        ?> 
        </td>
        <td class="EventText">
        <?php
        echo $info["TenSK"]."</br>";
        echo "Thời gian tổ chức:".$info["Ngay"]."</br>";
        echo "Tình trạng sự kiện:";
        if ($info["TinhTrang"]==1)
        {
            echo "Đã đủ kinh phí </br>";
        }
        else 
        {
            echo "Chưa đủ kinh phí </br>";
        }
        // Kiểm tra xem có sự kiện nào được tổ chức trước đó không
        if (isset($data["Database"][$_SESSION["SuKien"]+1]))
        {
            echo "<a href=\"./Home/PreviousEvent\">Sự kiện trước</a> </br>";
        }
        // Kiểm tra xem có sự kiện nào được tổ chức sau đó không
        if (isset($data["Database"][$_SESSION["SuKien"]-1]))
        {
            echo "<a href=\"./Home/NextEvent\">Sự kiện sau</a> </br>";
        }
        ?>
        </td>
    </tr>