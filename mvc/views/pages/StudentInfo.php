<?php
$info=$data["Database"][0];
?>
<h2>Thông Tin sinh viên</h2>
<table>
    <tr>
        <td class="StudentSmall"> Họ và tên </td>
        <td class="StudentBig"> <?php echo $info["HoTen"];?> </td>
    </tr>
    <tr>
        <td class="StudentSmall"> MSSV </td>
        <td class="StudentBig"> <?php echo $info["MSSV"];?> </td>
    </tr>
    <tr>
        <td class="StudentSmall"> Tên Lớp </td>
        <td class="StudentBig"> <?php echo $info["TenLop"];?> </td>
    </tr>
    <tr>
        <td class="StudentSmall"> Khóa </td>
        <td class="StudentBig"> <?php echo $info["Khoa"];?> </td>
    </tr>
    <tr>
        <td class="StudentSmall"> Số điện thoại </td>
        <td class="StudentBig"> <?php if ($info["SDT"]!="0"){ echo $info["SDT"]; } else { echo "Chưa có số điện thoại"; }?> </td>
    </tr>
    <tr>
    <td class="StudentSmall"> Email </td>
        <td class="StudentBig"> <?php if ($info["Email"]!=""){ echo $info["Email"]; } else { echo "Chưa có email"; }?> </td>
    </tr>
</table>
<form action="./StudentInfo/DeleteAccount" method="POST">
<button type="btnDelete" name="btnDelete" class="btn-primary"> Xóa tài khoản </button>
</form>