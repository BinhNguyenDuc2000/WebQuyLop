create table [SinhVien] (
	[MSSV] int not null,
	[HoTen] nvarchar(50) not null,
	[MaLop] int not null,
	[Khoa] int not null default 63,
	[SDT] int ,
	[Email] varchar(100) Unique,
	-- Thể hiện quyền truy cập của tài khoản
	[QuyenAdmin] int not null check(QuyenAdmin>=0 and QuyenAdmin<=2) default 1,
	[Pass] varchar(100) not null,
	[TongSoTien] int not null,
	primary key ([MSSV]));

create table [QuyLop] (
	[MaLop] int not null,
	[TenLop] nvarchar(50) not null Unique,
	[TienQuy] int not null default 0,
	primary key ([MaLop]));

create table [SuKien] (
	[MaSK] int not null,
	[TenSK] nvarchar(100) not null,
	[Ngay] date not null,
	-- Thể hiện sự kiện đã được đóng hay chưa
	[TinhTrang] int not null default 0,
	-- Thể hiện cần ảnh như thế nào
	[GhiChu] nvarchar(1000) not null,
	primary key ([MaSK]));

create table [Dong] (
	[MSSV] int not null,
	[MaLop] int not null,
	[SoTien] int not null,
	primary key ([MSSV], [MaLop]),
	foreign key ([MSSV]) references [SinhVien]([MSSV]) on update cascade on delete cascade,
	foreign key ([MaLop]) references [QuyLop]([MaLop]) on update cascade on delete cascade );

create table [Chi] (
	[MaLop] int not null,
	[MaSK] int not null,
	[SoTienChi] int not null,
	primary key ([MaLop], [MaSK]),
	foreign key ([MaLop]) references [QuyLop]([MaLop]) on update cascade on delete cascade,
	foreign key ([MaSK]) references [SuKien]([MaSK]) on update cascade on delete cascade );
--Tăng tốc độ tìm 
create index Ngay_SuKien  on SuKien (Ngay Desc)
--Các trigger 
--Trigger Đóng tiền
create trigger Cap_Nhat_Tien_Quy 
on Dong
for Update 
as 
declare @Tien_Cu int , @Tien_Moi int,@Tong_Tien_Cu int,@Tong_Tien_Moi int
select @Tong_Tien_Cu = Sum(SoTien)
from deleted
select @Tien_Cu = SoTien
from deleted
select @Tong_Tien_Moi = Sum(SoTien)
from inserted
select @Tien_Moi = SoTien
from inserted
update QuyLop
set TienQuy=TienQuy+@Tong_Tien_Moi-@Tong_Tien_Cu
from QuyLop inner join deleted on QuyLop.MaLop=deleted.MaLop
update SinhVien
set TongSoTien=TongSoTien+@Tien_Moi-@Tien_Cu
from SinhVien inner join deleted on deleted.MSSV=SinhVien.MSSV

--Cập nhật chi tiêu
create trigger Cap_Nhat_Chi 
on Chi
for Update 
as 
declare @Tien_Cu int , @Tien_Moi int,@Tong_Tien_Cu int,@Tong_Tien_Moi int
select @Tong_Tien_Cu = Sum(SoTienChi)
from deleted
select @Tong_Tien_Moi = Sum(SoTienChi)
from inserted
update QuyLop
set TienQuy=TienQuy+@Tong_Tien_Cu-@Tong_Tien_Moi
from QuyLop inner join deleted on QuyLop.MaLop=deleted.MaLop
update SuKien
set TinhTrang=1
from SuKien inner join  deleted on SuKien.MaSK=deleted.MaSK
--Xóa các bảng
drop table Chi
drop table Dong
drop table QuyLop
drop table SuKien
drop table SinhVien

