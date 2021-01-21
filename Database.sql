create table [SinhVien] (
	[MSSV] int not null,
	[HoTen] nvarchar(50) not null,
	[TenLop] nvarchar(50) not null default N'Việt Nhật 4',
	[Khoa] int not null default 63,
	[SDT] int not null,
	[Email] varchar(100) Unique,
	[QuyenAdmin] int not null check(QuyenAdmin>=0 and QuyenAdmin<=2) default 1,
	[Pass] varchar(100) not null,
	[TongSoTien] int not null,
	primary key ([MSSV]));

create table [QuyLop] (
	[MaLop] int not null,
	[TenLop] varchar(50) not null,
	[TienQuy] int not null default 0,
	primary key ([MaLop]));

create table [SuKien] (
	[MaSK] int not null,
	[TenSK] varchar(100) not null,
	[Ngay] date not null,
	[GhiChu] varchar(1000) not null,
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
--Tăng tốc độ tìm gần nhất
create index Ngay_SuKien  on SuKien (Ngay Desc)
--Các trigger 
create trigger
--Nhập dữ liệu
insert into SuKien
values ('
--Thao tác cơ bản trên SinhVien
drop table SinhVien
insert into SinhVien
values ('1',N'1',N'1','1','1','1@1','1','1')
select * from SinhVien
delete from SinhVien
where MSSV=1

--Xóa các bảng
drop table Chi
drop table Dong
drop table QuyLop
drop table SuKien
drop table SinhVien

