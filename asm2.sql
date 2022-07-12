-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 21, 2019 lúc 09:51 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `essence`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id_brand` int(4) UNSIGNED ZEROFILL NOT NULL,
  `name_brand` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_del` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id_brand`, `name_brand`, `detail`, `image`, `is_del`) VALUES
(0001, 'Topshop', 'Hãng với ước mơ lớn', 'brand1.png', 0),
(0002, 'Zara', 'Thương hiệu 30 năm\r\n', 'brand3.png', 0),
(0003, 'Mango', '', 'brand2.png', 0),
(0004, 'Asos', 'Thương hiệu Asos Hoa kỳ', 'brand5.png', 0),
(0005, 'asdasd', 'asdasd', '1.png', 1),
(0006, 'asdasd', 'asdasd', '1.png', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

CREATE TABLE `color` (
  `id_color` int(4) UNSIGNED ZEROFILL NOT NULL,
  `color` varchar(255) NOT NULL,
  `is_del` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(4) UNSIGNED ZEROFILL NOT NULL,
  `name_customer` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id_customer`, `name_customer`, `email`, `address`, `password`) VALUES
(0001, 'Nhân', 'nhannndp08237@gmail.com', '392 Cao Thắng, Quận 10', ''),
(0002, 'Hoàng Bùi', 'hoangbhps08080@gmail.com', '393 Nguyễn Kiệm, Quận Phú Nhuận', ''),
(0003, 'Hoàng Nguyễn', 'hoangnhps08082@gmail.com', '394 Nguyễn Kiệm, Quận Phú Nhuận', ''),
(0004, 'Minh Vũ', 'minhvh08308@gmail.com', '395 Lý Thường Kiệt, Quận 10', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `id_image` int(4) UNSIGNED ZEROFILL NOT NULL,
  `name_image` varchar(255) NOT NULL,
  `main` tinyint(2) NOT NULL DEFAULT '0',
  `thumbnail` tinyint(2) NOT NULL DEFAULT '0',
  `id_product` int(4) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`id_image`, `name_image`, `main`, `thumbnail`, `id_product`) VALUES
(0001, 'pro1_1.jpg', 1, 1, 0002),
(0002, 'pro1_2.jpg', 0, 0, 0002),
(0003, 'pro2_1.jpg', 1, 1, 0003),
(0004, 'pro2_2.jpg', 0, 0, 0003),
(0005, 'pro3_1.jpg', 1, 0, 0004),
(0006, 'pro4_1.jpg', 1, 0, 0005),
(0015, 'sdvv1.jpg', 0, 1, 0056),
(0016, 'sss.PNG', 0, 0, 0056),
(0017, 'South-Sea-Island-france.jpg', 0, 1, 0057),
(0018, '64829.jpg', 0, 0, 0057),
(0019, 'South-Sea-Island-france.jpg', 0, 1, 0058),
(0020, '64829.jpg', 1, 0, 0058),
(0021, '64829.jpg', 0, 1, 0059),
(0022, 'banner.jpg', 0, 0, 0059);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` int(4) UNSIGNED ZEROFILL NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `price` double(9,2) NOT NULL DEFAULT '0.00',
  `discount` double(9,1) NOT NULL DEFAULT '0.0',
  `detail` text NOT NULL,
  `special` tinyint(2) NOT NULL DEFAULT '0',
  `size` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `image9` varchar(255) NOT NULL,
  `id_type` int(4) UNSIGNED ZEROFILL NOT NULL,
  `id_brand` int(4) UNSIGNED ZEROFILL NOT NULL,
  `id_color` int(4) UNSIGNED ZEROFILL NOT NULL,
  `is_del` tinyint(2) NOT NULL DEFAULT '0',
  `date_input` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `price`, `discount`, `detail`, `special`, `size`, `quantity`, `image9`, `id_type`, `id_brand`, `id_color`, `is_del`, `date_input`) VALUES
(0002, 'AUSTIN Polka Dot Print Angel Sleeve Midi Dress', 1005.00, 30.0, 'The Austin has landed, this time in an all over pretty polka dot design. Part of our on-trend Topshop Loves collection, this dress embraces pattern in bold style. Made with angelic angel sleeves, stylish split front and chic open back, making it the ultimate must-have for days or evenings out. 100% Polyester. Machine wash.', 1, 'M', 30, 'pro1_0.jpg', 0004, 0001, 0000, 0, '2019-06-12 03:20:31'),
(0003, 'Pleat Tiered Midaxi Dress', 1300.00, 0.0, 'This pleated tiered midaxi length dress is the perfect spring summer dress to own. Feminine, flattering and fabulous, this ensemble looks great whatever the occasion. 100% Polyester. Machine wash.', 1, 'M', 30, 'pro2_0.jpg\r\n', 0004, 0001, 0000, 0, '2019-06-12 03:20:40'),
(0004, 'Black Ribbed Raffia Midi Dress', 650.00, 0.0, 'Every girl needs a black midi summer dress with elevated detailing. This piece is designed with a raffia belt and splits at the front, creating a flowy and stylish impact. 66% Polyester, 28% Viscose, 6% Elastane. Machine wash.', 1, 'M', 30, 'pro3_0.jpg', 0004, 0001, 0000, 0, '2019-06-12 03:21:03'),
(0005, 'Ruched Mini Slip Dress', 1005.00, 0.0, 'This mini slip dress in rose pink will create evening-ready style with elegance. Designed with ruched detailing, you\'ll be sure to create a feminine and fabulous look. 95% Polyester, 5% Elastane. Machine wash.', 1, 'L', 30, 'pro4_0.jpg', 0004, 0001, 0000, 0, '2019-06-12 03:21:20'),
(0045, 'Quan tay', 2800.00, 0.0, 'cap nhat 1', 0, 'm', 8, 'pro1_0.jpg', 0001, 0004, 0002, 1, '2019-06-13'),
(0046, 'Quan tay', 2800.00, 0.0, 'cap nhat 1', 0, 'm', 8, 'pro1_0.jpg', 0001, 0004, 0002, 1, '2019-06-13'),
(0047, 'AAAA', 3000.00, 30.0, 'bbbb', 0, 'm', 5, 'pro1_0.jpg', 0001, 0004, 0002, 1, '2019-06-19'),
(0052, 'adasdsa', 0.00, 0.0, '', 0, 'm', 1, 'sdvv1.jpg', 0007, 0004, 0002, 1, '2019-06-21'),
(0053, 'adasdsa', 0.00, 0.0, '', 0, 'm', 1, 'sdvv1.jpg', 0007, 0004, 0002, 1, '2019-06-21'),
(0054, 'adasdsa', 0.00, 0.0, '', 0, 'm', 1, 'sdvv1.jpg', 0007, 0004, 0002, 1, '2019-06-21'),
(0056, '', 0.00, 0.0, '', 0, 'm', 1, 'SharedScreenshot.jpg', 0007, 0004, 0002, 1, '2019-06-21'),
(0057, 'Leopard jacket', 2500.00, 0.0, 'Mix with color of leopard skin 2222', 1, 'm', 15, '64774.jpg', 0010, 0002, 0003, 0, '2019-06-21'),
(0058, 'Pa Pa ra ji', 2500.00, 0.0, 'Color grap with new paper', 0, 'm', 1, 'banner.jpg', 0010, 0002, 0003, 1, '2019-06-21'),
(0059, 'Ao so mi Trang', 2500.00, 50.0, 'Quan Quận ', 1, 'm', 5200, 'South-Sea-Island-france.jpg', 0010, 0002, 0002, 0, '2019-06-21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type`
--

CREATE TABLE `type` (
  `id_type` int(4) UNSIGNED ZEROFILL NOT NULL,
  `name_type` varchar(255) NOT NULL,
  `gender` tinyint(2) NOT NULL DEFAULT '0',
  `detail` varchar(255) NOT NULL,
  `is_del` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `type`
--

INSERT INTO `type` (`id_type`, `name_type`, `gender`, `detail`, `is_del`) VALUES
(0001, 'Blouses', 0, '', 0),
(0002, 'Shirts', 0, '', 0),
(0003, 'T-shirts', 0, '', 0),
(0004, 'Dresses', 0, '', 0),
(0005, 'Romper', 0, '', 0),
(0006, 'Bras & Panties', 0, '', 0),
(0007, 'T-shirts', 1, '', 0),
(0008, 'Polo', 1, '', 0),
(0009, 'Shirts', 1, '', 0),
(0010, 'Jackets', 1, '', 0),
(0011, 'Trench', 1, '', 0),
(0014, 'Trousers', 0, '', 1),
(0015, '', 0, '0', 1),
(0016, '', 0, '0', 1),
(0017, '', 0, '0', 1),
(0018, '', 0, '0', 1),
(0019, '', 0, '0', 1),
(0020, '', 0, '1', 1),
(0021, '', 1, 'sadasd', 1),
(0022, '', 1, 'aaaaa', 1),
(0023, '', 1, 'aaaaa', 1),
(0024, 'sdsdasda', 1, 'aaaaa', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id_color`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `pr_product_re_image` (`id_product`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_type` (`id_type`),
  ADD KEY `id_color` (`id_color`),
  ADD KEY `id_brand` (`id_brand`);

--
-- Chỉ mục cho bảng `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id_brand` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `color`
--
ALTER TABLE `color`
  MODIFY `id_color` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `pr_product_re_image` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `pr_brand_re_product` FOREIGN KEY (`id_brand`) REFERENCES `brand` (`id_brand`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pr_type_re_product` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
