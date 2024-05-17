INSERT INTO `provinces`(`id_tinh_thanh`, `ten_tinh_thanh`, `created_at`, `updated_at`) 
VALUES ('1','Thành phố Đà Nẵng','[value-3]','[value-4]')

INSERT INTO `districts`(`id_quan_huyen`, `ten_quan_huyen`, `id_tinh_thanh`, `created_at`, `updated_at`) 
VALUES 	('1','Quận Hải Châu','1','[value-4]','[value-5]'),
	('2','Quận Thanh Khê','1','[value-4]','[value-5]'),
	('3','Quận Sơn Trà','1','[value-4]','[value-5]'),
	('4','Quận Ngũ Hành Sơn','1','[value-4]','[value-5]'),
	('5','Quận Liên Chiểu','1','[value-4]','[value-5]'),
	('6','Quận Cẩm Lệ','1','[value-4]','[value-5]')

INSERT INTO `wards`(`ten_phuong_xa`, `id_quan_huyen`, `created_at`, `updated_at`)
VALUES
('Phường Hòa Cường Bắc ', 1, '[value-4]', '[value-5]'),
('Phường Hòa Cường Nam ', 1, '[value-4]', '[value-5]'),
('Phường Hòa Thuận Đông ', 1, '[value-4]', '[value-5]'),
('Phường Hòa Thuận Tây ', 1, '[value-4]', '[value-5]'),
('Phường Hòa Minh ', 5, '[value-4]', '[value-5]'),
('Phường Tam Thuận ', 2, '[value-4]', '[value-5]'),
('Phường Thanh Khê Đông ', 2, '[value-4]', '[value-5]'),
('Phường Thanh Khê Tây ', 2, '[value-4]', '[value-5]'),
('Phường Xuân Hà ', 2, '[value-4]', '[value-5]'),
('Phường An Hải Bắc', 3, '[value-4]', '[value-5]'),
('Phường An Hải Tây ', 3, '[value-4]', '[value-5]'),
('Phường Mân Thái ', 3, '[value-4]', '[value-5]'),
('Phường An Hải Đông', 3, '[value-4]', '[value-5]'),
('Phường An Hải Nam', 3, '[value-4]', '[value-5]'),
('Phường An Hải Đông', 3, '[value-4]', '[value-5]'),
('Phường Mỹ An', 4, '[value-4]', '[value-5]'),
('Phường Khuê Mỹ', 4, '[value-4]', '[value-5]'),
('Phường Hoà Quý', 4, '[value-4]', '[value-5]'),
('Phường Hoà Hải ', 4, '[value-4]', '[value-5]'),
('Phường Hòa Hiệp Bắc ', 5, '[value-4]', '[value-5]'),
('Phường Hòa Hiệp Nam ', 5, '[value-4]', '[value-5]'),
('Phường Hòa Khánh Bắc ', 5, '[value-4]', '[value-5]'),
('Phường Hòa Khánh Nam', 5, '[value-4]', '[value-5]'),
('Phường Hòa Minh ', 6, '[value-4]', '[value-5]'),
('Phường Hòa Quý ', 6, '[value-4]', '[value-5]'),
('Phường Hòa An ', 6, '[value-4]', '[value-5]'),
('Phường Hòa Phát ', 6, '[value-4]', '[value-5]'),
('Xã Hoà Châu ', 7, '[value-4]', '[value-5]'),
('Xã Hoà Tiến ', 7, '[value-4]', '[value-5]')