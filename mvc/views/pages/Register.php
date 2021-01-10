<h2>Register</h2>
<!--Nội dung trang đăng nhập-->
<form action="./Register/Reciever" method="POST">
  <div class="form-group">
    <label for="MSSV">MSSV</label> <br>
    <input type="MSSV" name="MSSV" class="form-control" id="MSSV"> <br>
  </div>
  <div class="form-group">
    <label for="HoTen">Họ và tên</label> <br>
    <input type="HoTen" name="HoTen" class="form-control" id="HoTen"> <br>
  </div>
  <div class="form-group">
    <label for="TenLop">Tên lớp</label> <br>
    <input type="TenLop" name="TenLop" class="form-control" id="TenLop"> <br>
  </div>
  <div class="form-group">
    <label for="Khoa">Khóa</label> <br>
    <input type="Khoa" name="Khoa" class="form-control" id="Khoa"> <br>
  </div>
  <div class="form-group">
    <label for="SDT">Số điện thoại*</label> <br>
    <input type="number" name="SDT" class="form-control" id="SDT" aria-describedby="SDTHelp"> 
    <small id="SDTHelp" class="form-text text-muted">Không bắt buộc</small> <br>
  </div>
  <div class="form-group">
    <label for="Email">Email*</label> <br>
    <input type="Email" name="Email" class="form-control" id="Email" aria-describedby="EmailHelp"> 
    <small id="EmailHelp" class="form-text text-muted">Không bắt buộc</small> <br>
  </div>
  <div class="form-group">
    <label for="Pass">Password</label> <br>
    <input type="Pass" name="Pass" class="form-control" id="Pass"> <br>
  <button type="btnRegister" name="btnRegister" class="btn-primary">Đăng Ký</button>
</form>