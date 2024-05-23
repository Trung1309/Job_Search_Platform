INSERT INTO `provinces`(`id_tinh_thanh`, `ten_tinh_thanh`, `created_at`, `updated_at`)
VALUES ('1','Đà Nẵng','[value-3]','[value-4]')

INSERT INTO `districts`(`id_quan_huyen`, `ten_quan_huyen`, `id_tinh_thanh`, `created_at`, `updated_at`)
VALUES 	('1','Hải Châu','1','[value-4]','[value-5]'),
	('2','Thanh Khê','1','[value-4]','[value-5]'),
	('3','Sơn Trà','1','[value-4]','[value-5]'),
	('4','Ngũ Hành Sơn','1','[value-4]','[value-5]'),
	('5','Liên Chiểu','1','[value-4]','[value-5]'),
	('6','Cẩm Lệ','1','[value-4]','[value-5]')

INSERT INTO `wards`(`ten_phuong_xa`, `id_quan_huyen`, `created_at`, `updated_at`)
VALUES
('Hòa Cường Bắc ', 1, '[value-4]', '[value-5]'),
('Hòa Cường Nam ', 1, '[value-4]', '[value-5]'),
('Hòa Thuận Đông ', 1, '[value-4]', '[value-5]'),
('Hòa Thuận Tây ', 1, '[value-4]', '[value-5]'),
('Hòa Minh ', 5, '[value-4]', '[value-5]'),
('Tam Thuận ', 2, '[value-4]', '[value-5]'),
('Thanh Khê Đông ', 2, '[value-4]', '[value-5]'),
('Thanh Khê Tây ', 2, '[value-4]', '[value-5]'),
('Xuân Hà ', 2, '[value-4]', '[value-5]'),
('An Hải Bắc', 3, '[value-4]', '[value-5]'),
('An Hải Tây ', 3, '[value-4]', '[value-5]'),
('Mân Thái ', 3, '[value-4]', '[value-5]'),
('An Hải Đông', 3, '[value-4]', '[value-5]'),
('An Hải Nam', 3, '[value-4]', '[value-5]'),
('An Hải Đông', 3, '[value-4]', '[value-5]'),
('Mỹ An', 4, '[value-4]', '[value-5]'),
('Khuê Mỹ', 4, '[value-4]', '[value-5]'),
('Hoà Quý', 4, '[value-4]', '[value-5]'),
('Hoà Hải ', 4, '[value-4]', '[value-5]'),
('Hòa Hiệp Bắc ', 5, '[value-4]', '[value-5]'),
('Hòa Hiệp Nam ', 5, '[value-4]', '[value-5]'),
('Hòa Khánh Bắc ', 5, '[value-4]', '[value-5]'),
('Hòa Khánh Nam', 5, '[value-4]', '[value-5]'),
('Hòa Minh ', 6, '[value-4]', '[value-5]'),
('Hòa Quý ', 6, '[value-4]', '[value-5]'),
('Hòa An ', 6, '[value-4]', '[value-5]'),
('Hòa Phát ', 6, '[value-4]', '[value-5]')
