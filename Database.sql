create table [SinhVien] (
	[MSSV] int not null,
	[HoTen] nvarchar(50) not null,
	[Lop] nvarchar(20) not null default N'Việt Nhật 4',
	[Khoa] int not null default 63,
	[NgaySinh] date not null,
	[SoDienThoai] int not null,
	[DiaChi] varchar(40) not null,
	[Email] varchar(100) Unique,
	[QuyenAdmin] int not null check(QuyenAdmin>=0 and QuyenAdmin<=2) default 1,
	[Pass] varchar(30) not null default '123456',
	primary key ([MSSV]));

create table [QuyLop] (
	[MaLop] int not null,
	[TenLop] varchar(20) not null,
	[TienQuy] int not null,
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
	foreign key ([MSSV]) references [SinhVien]([MSSV]),
	foreign key ([MaLop]) references [QuyLop]([MaLop]));

create table [Chi] (
	[MaLop] int not null,
	[MaSK] int not null,
	[SoTienChi] int not null,
	primary key ([MaLop], [MaSK]),
	foreign key ([MaLop]) references [QuyLop]([MaLop]),
	foreign key ([MaSK]) references [SuKien]([MaSK]));
drop table SinhVien
 insert into SinhVien
 values ('1',N'1',N'1','1','1','1@1','1','1')
  
select * from SinhVien

delete from SinhVien
where MSSV=1