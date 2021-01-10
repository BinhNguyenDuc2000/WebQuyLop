<?php
// in từ cơ sở dữ liệu
foreach ($data["Database"] as $row)
{
    echo $row["MSSV"]."<br>";
    echo $row["HoTen"]."<br>";
    echo $row["TenLop"]."<br>";
    echo $row["Khoa"]."<br>";
    echo $row["SDT"]."<br>";
    echo $row["Email"]."<br>";
}

?>