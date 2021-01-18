<?php
$info=$data["Database"][0];
?>
<h2>Thông Tin sinh viên</h2>
<table>
    <tr>
        <td class="left"> Họ và tên </td>
        <td class="right"> <?php echo $info["HoTen"];?> </td>
    </tr>
    <tr>
        <td class="left"> MSSV </td>
        <td class="right"> <?php echo $info["MSSV"];?> </td>
    </tr>
    <tr>
        <td class="left"> Tên Lớp </td>
        <td class="right"> <?php echo $info["TenLop"];?> </td>
    </tr>
    <tr>
        <td class="left"> Khóa </td>
        <td class="right"> <?php echo $info["Khoa"];?> </td>
    </tr>
    <tr>
        <td class="left"> Số điện thoại </td>
        <td class="right"> <?php if ($info["SDT"]!=""){ echo $info["SDT"]; } else { echo "Chưa có số điện thoại"; }?> </td>
    </tr>
    <tr>
    <td class="left"> Email </td>
        <td class="right"> <?php if ($info["Email"]!=""){ echo $info["Email"]; } else { echo "Chưa có email"; }?> </td>
    </tr>
</table>
<form action="./StudentInfo/DeleteAccount" method="POST">
<button type="btnDelete" name="btnDelete" class="btn-primary"> Xóa tài khoản </button>
</form>