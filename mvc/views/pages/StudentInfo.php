<?php
$info=$data["Database"][0];
?>
<h2>Thông Tin sinh viên</h2>
<form action="./StudentInfo/Update" method="POST">
<table>
    <tr>
        <td class="StudentSmall"> MSSV </td>
        <td class="StudentBig"> <input type="text" id="MSSV" name="MSSV" value='<?php echo $info["MSSV"];?>'> </td>
    </tr>
    <tr>
        <td class="StudentSmall"> Họ và tên </td>
        <td class="StudentBig"> <input type="text" id="HoTen" name="HoTen" value='<?php echo $info["HoTen"];?>' ></td>
    </tr>
    <tr>
        <td class="StudentSmall"> Khóa </td>
        <td class="StudentBig"> <input type="text" id="Khoa" name="Khoa" value='<?php echo $info["Khoa"];?>'> </td>
    </tr>
    <tr>
        <td class="StudentSmall"> Số điện thoại </td>
        <td class="StudentBig"> <input type="text" id="SDT" name="SDT" value='<?php if ($info["SDT"]!="0"){ echo $info["SDT"]; } else { echo "Chưa có số điện thoại"; }?>'> </td>
    </tr>
    <tr>
    <td class="StudentSmall"> Email </td>
        <td class="StudentBig"> <input type="text" id="Email" name="Email" value='<?php if ($info["Email"]!=""){ echo $info["Email"]; } else { echo "Chưa có email"; }?>'> </td>
    </tr>
    <tr>
        <td class="StudentSmall"> Tiền đã đóng </td>
        <td class="StudentBig"> <?php echo $info["TongSoTien"];?>

    </tr>
    <tr>
        <td class="StudentSmall"> Tiền quỹ lớp </td>
        <td class="StudentBig"> <?php echo $info["TienQuy"];?>

    </tr>
    <tr>
        <td class="StudentSmall"> Mã Lớp </td>
        <td class="StudentBig"> <?php echo $info["MaLop"];?> </td>
    </tr>
</table>
<button type="btnUpdate" name="btnUpdate" class="btn-primary"> Cập nhật tài khoản </button>
</form>
<form action="./StudentInfo/DeleteAccount" method="POST">
<button type="btnDelete" name="btnDelete" class="btn-primary"> Xóa tài khoản </button>
</form>