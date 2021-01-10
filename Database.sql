create table SinhVien(
 MSSV int not null primary key,
 HoTen nvarchar(30) not null,
 TenLop nvarchar(30) not null default N'Việt Nhật 4',
 Khoa int not null default 63,
 SDT varchar(15),
 Email varchar(30) Unique,
 QuyenAdmin int not null check(QuyenAdmin>=0 and QuyenAdmin<=2) default 1,
 Pass varchar(100) not null default '123456'
)
 drop table SinhVien
 insert into SinhVien
 values ('1',N'1',N'1','1','1','1@1','1','1')
  
select * from SinhVien

delete from SinhVien
where MSSV=1