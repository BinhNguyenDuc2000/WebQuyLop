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
    <label for="MaLop">Mã Lớp</label> <br>
    <input type="MaLop" name="MaLop" class="form-control" id="MaLop"> <br>
  <div class="form-group">
    <label for="Khoa">Khóa</label> <br>
    <input type="Khoa" name="Khoa" class="form-control" id="Khoa"> <br>
  </div>
  <div class="form-group">
    <label for="SDT">Số điện thoại*</label> <br>
    <input type="number" name="SDT" class="form-control" id="SDT" aria-describedby="SDTHelp"> <br> 
    <small id="SDTHelp" class="form-text text-muted">Không bắt buộc</small> <br>
  </div>
  <div class="form-group">
    <label for="Email">Email*</label> <br>
    <input type="Email" name="Email" class="form-control" id="Email" aria-describedby="EmailHelp"> <br> 
    <small id="EmailHelp" class="form-text text-muted">Không bắt buộc</small> <br>
  </div>
  <div class="form-group">
    <label for="Pass">Password</label> <br>
    <input type="Pass" name="Pass" class="form-control" id="Pass"> <br>
  </div>
  <button type="btnRegister" name="btnRegister" class="btn-primary">Đăng Ký</button>
</form>