-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3309
-- Thời gian đã tạo: Th6 22, 2021 lúc 06:45 AM
-- Phiên bản máy phục vụ: 5.7.31-log
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom9`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufactures`
--

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE IF NOT EXISTS `manufactures` (
  `manu_id` int(11) NOT NULL AUTO_INCREMENT,
  `manu_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`manu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`) VALUES
(1, 'Apple'),
(2, 'OPPO'),
(3, 'Vivo'),
(4, 'SamSung'),
(5, 'Xiaomi'),
(6, 'redmi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `pro_image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `pro_image`, `description`, `feature`, `created_at`) VALUES
(1, 'Điện thoại iPhone SE 256GB gsdfsdac', 1, 1, 16690000, 'macbook-pro-13-og-202011 (2).jpg', 'iPhone SE 256GB 2020 cuối cùng đã được Apple ra mắt, với ngoại hình nhỏ gọn được sao chép từ iPhone 8 nhưng mang trong mình một hiệu năng mạnh mẽ với vi xử lý A13 Bionic, mức giá hấp dẫn hứa hẹn sẽ là yếu tố “hút khách” của smartphone đình đám đến từ nhà Táo khuyết.    ', 0, '2021-06-19 03:30:12'),
(4, 'Tai nghe AirPods 2 Apple MV7N2\r\n', 1, 4, 6160000, 'tai-nghe-bluetooth-airpods-pro-apple-mwp22-ava-600x600.jpg', 'Thiết kế đơn giản, thời trang và nhỏ gọn.\r\nTrang bị chip H1 hoàn toàn mới, cho tốc độ kết nối, chuyển đổi giữa các thiết bị nhanh chóng.\r\nKích hoạt nhanh trợ lý ảo Siri bằng cách nói \"Hey, Siri\".\r\nCó thể sử dụng nghe nhạc lên đến 3 giờ (âm lượng 50%) cho mỗi một lần sạc đầy.\r\nTích hợp công nghệ sạc nhanh hiện đại. Sạc nhanh 15 phút có thể nghe nhạc 3 giờ (âm lượng 50%).\r\nSử dụng song song với hộp sạc có thể dùng được lên đến 24 giờ.\r\nTính năng nhận cuộc gọi, kích hoạt Siri, nghe hoặc tạm dừng đoạn nhạc đang phát.\r\nSản phẩm chính hãng Apple, nguyên seal 100%.', 1, '2020-11-28 00:53:31'),
(2, 'APPLE MACBOOK PRO 15', 1, 2, 55000000, 'macbook-pro-13-og-202011 (2).jpg', '- Tất cả Laptop cũ trước khi bán đã được test rất kỹ, kể cả các cổng ngoại vi như: Cổng usb, Loa, Lan, Phone…\r\n- Laptop đã được cài đặt sẳn hệ điều hành (Windows 7, Window 8, Window 10) tùy theo cấu hình máy. Quý khách có thể yêu cầu cài lại hệ điều hành sau khi mua máy.\r\n- Laptop đã được cài sẳn Office, Fonts, Bộ gõ tiếng việt, Codec media…. đủ đáp ứng các nhu cầu giải trí gia đình, văn phòng.', 0, '2021-05-28 14:12:29'),
(5, 'Apple Watch Series 4 40mm LTE\r\n', 1, 5, 9900000, 'oppo-watch-46mm-day-silicone-ava-600x600.jpg', 'Đồng Hồ Thông Minh Apple Watch Series 4 GPS Sport Loop sở hữu thiết kế không viền nhờ phần màn hình lớn hơn và được bo cong ở các góc. Nhờ vậy, kích thước của màn hình đã tăng 30% và cho phép watchOS 5 hiển thị nhiều thông tin hơn thông qua các ứng dụng tích hợp sẵn của Apple.', 1, '2020-11-28 00:53:17'),
(46, 'Iphone12', 1, 1, 10000, 'a1.jpg', 'Dien thoai iphone 12', 1, '2021-05-08 10:00:00'),
(8, 'Tai nghe Bluetooth Samsung Level U Pro BN920C', 4, 4, 1450000, 'tai-nghe-bluetooth-samsung-level-u-pro-bn920c-add-600x600.jpg', 'Tai nghe Samsung Level U Pro BN920C được thiết kế sang trọng\r\nToàn thân tai nghe được gia công bằng vỏ nhựa và cao su, phần cao su sẽ giúp tai nghe tiếp xúc với da trơn hơn, thoải mái hơn.', 0, '2020-11-17 09:45:06'),
(9, 'Máy tính bảng Samsung Galaxy Tab S6', 4, 3, 18490000, 'samsung-galaxy-tab-s6-400x460.png', '\r\n\r\nSamsung Galaxy Tab S6 là chiếc máy tính bảng 2 trong 1, được thiết kế để giúp cho những người cần một sản phẩm đủ gọn gàng nhưng mạnh mẽ.\r\n\r\nNgoại hình mỏng nhẹ, đẹp mắt\r\nẤn tượng đầu tiên về chiếc máy tính bảng Samsung này chính là nó rất mỏng và sang trọng, nếu bạn đang có suy nghĩ là những chiếc máy tính bảng thường có kích thước lớn, trọng lượng nặng và khó mang theo thì đây sẽ là một trải nghiệm hoàn toàn khác.', 1, '2020-11-17 09:45:06'),
(6, 'Điện thoại Samsung Galaxy Note 20 Ultra', 4, 1, 27990000, 'samsung-galaxy-note-20-ultra-vangdong-400x460-400x460.png', 'Sau Galaxy Note 20 thì Galaxy Note 20 Ultra là phiên bản tiếp theo cao cấp hơn thuộc dòng Note 20 Series của Samsung, với nhiều thay đổi từ cụm camera hỗ trợ lấy nét laser AF cùng ống kính góc rộng mới, màn hình tràn viền lên đến 6.9 inch chắc chắn sẽ là chiếc điện thoại được săn đón của fan yêu thích công nghệ.', 1, '2020-11-17 09:39:44'),
(7, 'Laptop Asus VivoBook A412FA i5 10210U/8GB/512GB/Win10 (EK738T)\r\n', 4, 2, 16190000, '637502180353201718_asus-vivobook-x515-print-bac-5.jpg', 'Laptop ASUS VivoBook A412FA i5 (EK738T) là mẫu laptop văn phòng, sinh viên mỏng nhẹ, có cấu hình khỏe với CPU Intel thế hệ mới nhất. Ngoài ra máy còn sở hữu ổ cứng SSD 512 GB siêu nhanh và cảm biến vân tay giúp mở khóa tiện lợi, bảo mật cao.', 0, '2021-05-28 14:03:06'),
(3, 'Máy tính bảng iPad Pro 12.9 inch Wifi Cellular 128GB (2020)\r\n', 1, 3, 31490000, 'ipad-pro-12-9-inch-wifi-cellular-128gb-2020-400x460-1-400x460', 'Sau bao ngày chờ đợi, chiếc máy tính bảng iPad Pro 12.9 inch Wifi Cellular 128GB (2020) đã được trình làng. Với thiết kế không mấy khác biệt so với người anh em iPad Pro 2018 nhưng được Apple nâng cấp hệ thống camera, cùng con chip A12Z giúp iPad Pro 12.9 (2020) mang đến hiệu năng ấn tượng cho người dùng những trải nghiệm tuyệt vời.', 1, '2020-11-17 09:37:50'),
(11, 'Điện thoại OPPO Find X2', 2, 1, 899000, 'oppo-find-x2-pro-400x460-1-400x460.png', 'Tiếp nối thành công vang dội của thế hệ Find X, OPPO chính thức ra mắt Find X2 với những đường nét thanh lịch từ thiết kế phần cứng cho đến trải nghiệm phần mềm, hứa hẹn một vẻ đẹp hoàn hảo, một sức mạnh xứng tầm.', 1, '2021-05-28 14:05:08'),
(12, 'Laptop Huawei MateBook D 15 R5 3500U/8GB/512GB/Win10 (BohrK-WAQ9CR)', 2, 2, 16490000, 'huawei-matebook-d-15-r5-bohwaq9r-250520-020512-600x600', 'Trải nghiệm làm việc, giải trí mượt mà với laptop Huawei MateBook D 15 R5 (Boh-WAQ9R), cấu hình vượt trội, thiết kế mỏng nhẹ và màn hình tràn viền tuyệt hảo là những gì mà chiếc laptop doanh nhân cao cấp này đem đến.', 1, '2020-11-21 03:08:37'),
(13, 'Máy tính bảng Huawei MediaPad M5 Lite\r\n', 2, 3, 7990000, 'huawei-mediapad-m5-lite-gray-400x460', 'Nếu bạn đang tìm kiếm một chiếc máy tính bảng chạy hệ điều hành Android phục vụ cho công việc hay giải trí cao cấp thì Huawei Mediapad M5 Lite là sự lựa chọn đáng quan tâm bởi màn hình lớn, CPU ngon và hỗ trợ 4G', 0, '2020-11-21 03:08:37'),
(14, 'Tai nghe Bluetooth True Wireless Huawei FreeBuds 3\r\n', 2, 4, 4290000, 'tai-nghe-bluetooth-tws-huawei-freebuds-3-ava-1-600x600', 'Tai nghe Bluetooth TWS Huawei FreeBuds 3 Trắng là mẫu tai nghe được thiết kế dạng tròn, nhỏ gọn, trẻ trung với chất liệu nhựa bóng, hợp thời trang tiện đem theo bất cứ đâu. Sử dụng cơ chế nam châm đảm bảo chắc chắn khi đóng mở.', 0, '2020-11-21 03:08:37'),
(15, 'Oppo Watch 46mm dây silicone đen', 2, 5, 6791000, 'oppo-watch-46mm-day-silicone-ava-600x600', 'Đồng hồ thông minh Oppo Watch màu đen phiên bản 46mm sử dụng mặt đồng hồ vuông, bo cong nhẹ ở 4 cạnh, cùng với mặt kính bo cong 2D sang hai bên có chiều sâu tạo cảm giác như mặt kính cong 3D, màn hình AMOLED 1.91 inch độ phân giải 402 x 476 pixels, mật độ điểm ảnh 326 ppi và dải màu rộng chuẩn DCI-P3 cho chất lượng hiển thị sắc nét, sống động. Dây đeo silicon cho cảm giác mang được dễ chịu và thoải mái', 1, '2020-11-21 03:08:37'),
(16, 'Điện thoại Vivo V20', 3, 1, 8490000, '637370823494932717_vivo-v20-xanh-dd.png', 'Vivo V20 là mẫu smartphone đầy năng động cho giới trẻ khi có thiết kế siêu mỏng, phù hợp với xu hướng hiện đại với nhiều màu sắc thời thượng, cấu hình vượt trội cùng hệ thống camera siêu ấn tượng chắc chắn sẽ mang đến cho bạn những trải nghiệm chụp ảnh tuyệt vời.', 0, '2020-11-28 02:03:58'),
(17, 'Laptop HP Zbook Firefly 14 G7 i7 10510U/16GB/512GB/4GB Quadro P520/Win10 Pro (8VK71AV)', 3, 2, 38890000, 'hp-zbook-firefly-14-g7-i7-8vk71av-092020-092039-600x600', 'Laptop HP Zbook Firefly 14 G7 i7 (8VK71AV) phiên bản i7 được mệnh danh là chiếc máy trạm nhỏ gọn nhất thế giới. Đây là chiếc máy có hiệu năng cao với chip Intel thế hệ 10 kết hợp cùng card đồ họa rời NVIDIA Quadro cho người dùng chuyên nghiệp, phù hợp với người dùng là doanh nhân, người làm đồ họa', 1, '2020-11-21 03:08:37'),
(18, 'Máy tính bảng Lenovo Tab M10', 3, 3, 4090000, 'lenovo-tab-m10-black-400x460-400x460.png', 'Lenovo Tab M10 chính là chiếc máy tính bảng với màn hình sắc nét kích thước lớn cùng thời lượng pin trâu đáp ứng tốt nhu cầu sử dụng cơ bản như xem phim, lướt web hằng ngày', 0, '2020-11-28 02:05:31'),
(19, 'Tai nghe Bluetooth True Wireless Beats Powerbeats Pro MV6Y2/ MV702', 3, 4, 6490000, 'tai-nghe-bluetooth-tws-beats-powerbeats-pro-ava-600x600', 'Tai nghe Bluetooth True Wireless Beats Powerbeats Pro MV6Y2/ MV702 nâng cấp từ con Powerbeats 3 Wireless của Apple, chinh phục những dân chơi công nghệ khó tính nhất nhờ thiết kế phá cách, vành móc tai cứng cáp đeo tai nghe vững vàng khi luyện tập mạnh', 0, '2020-11-21 03:08:37'),
(20, 'Đồng hồ thông minh Garmin Vivoactive 4S dây silicone\r\n', 3, 5, 8590000, 'garmin-forerunner-45-day-silicone-ava-600x600.jpg', 'Đồng hồ thông minh Garmin Vivoactive 4S dây silicone có màn hình tròn 1.1 inch cùng độ phân giải 218 x 218 pixels, cho khả năng hiển thị rõ nét. Dây đeo làm từ silicone với thiết kế mang lại cảm giác vô cùng mềm mại, không bị đau khi đeo lâu dài. Mặt kính cường lực cho khả năng hạn chế trầy xước tốt hơn', 1, '2021-05-28 14:10:11'),
(21, 'Điện thoại Xiaomi Mi 10T Pro 5G', 5, 1, 12990000, 'xiaomi-redmi-9t-6gb-110621-080650-600x600.jpg', 'Mi 10T Pro 5G mẫu smartphone cao cấp của Xiaomi trong năm 2020 cuối cùng cũng được trình làng với loạt những thông số gây “choáng ngợp”: màn hình tần số quét 144 Hz, vi xử lý Snapdragon 865 và cụm camera khủng 108 MP kèm theo đó là một mức giá dễ chịu cho người dùng', 1, '2021-05-28 14:07:46'),
(22, 'Laptop Dell XPS 13 9300 i7 1065G7 16GB/512GB/Office365/Win10 (0N90H1)', 5, 2, 57990000, 'dell-xps-13-9300-i7-0n90h1-241820-101801-226324-600x600', 'Laptop Dell XPS 13 9300 i7 (0N90H1) chắc chắn là một sự đột phá của Dell về thiết kế lẫn hiệu năng. Với một thiết kế gọn nhẹ, hiệu năng mạnh mẽ với chip Intel Core i7 và RAM 16 GB, Dell XPS 13 9300 tự tin đáp ứng tốt các nhu cầu làm việc và giải trí', 1, '2020-11-21 03:08:37'),
(23, 'Máy tính bảng Masstel Tab 10 Ultra\r\n', 5, 3, 3490000, 'masstel-tab-10-ultra-205920-105935-400x400', 'Masstel Tab 10 Ultra được cho là phiên bản được cải tiến từ các phiên bản tiền nhiệm trước đó là Tab 10 Pro, có mức giá tầm trung nhưng vẫn đảm bảo chất lượng. Hãy cùng tìm hiểu đứa “con cưng” mới nhất của Masstel tính tới tháng 10/2020', 0, '2020-11-21 03:08:37'),
(24, 'Tai nghe Bluetooth True Wireless Earphones 2 Xiaomi ZBW4493GL Trắng', 5, 4, 2590000, 'tai-nghe-true-wireless-earphones-xiaomi-zbw4493gl-600x600-1-600x600', 'Kiểu dáng nhỏ gọn, là người bạn đồng hành trên mọi nẻo đường\r\nTai nghe Bluetooth True Wireless Earphones 2 Xiaomi ZBW4493GL có hộp sạc bảo vệ, vừa vặn với kích thước của tai nghe. \r\nSản phẩm đồng bộ tông màu trắng thanh lịch, dễ phối đồ. Đây là món phụ kiện đặc biệt thích hợp cho các bạn trẻ năng động hiện nay', 0, '2020-11-21 03:08:37'),
(25, 'Vòng đeo tay thông minh Mi Band 5', 5, 5, 790000, 'mi-band-5-thum-600x600', 'Vòng đeo tay thông minh Mi Band 5 có màn hình 1.1 inch cùng độ phân giải là 126 x 294 pixels, lớn hơn so với phiên bản 0.95 inch của Mi Band 4. Mật độ điểm ảnh trên Mi Band 5 được nâng cấp lên đến 300ppi, vì thế người dùng có thể quan sát các thông báo rõ ràng trên màn hình. Dây đeo làm từ silicon với thiết kế ôm trọn cổ tay, mang lại cảm giác vô cùng mềm mại và không bị phai màu khi sử dụng sau một thời gian dài', 0, '2020-11-21 03:08:37'),
(48, 'Điện thoại ss', 5, 4, 16690000, 'xiaomi-redmi-9t-6gb-110621-080650-600x600.jpg', 'dfqdf              ', 1, '2021-06-19 01:22:05'),
(74, 'dong ho', 1, 4, 16690000, 'garmin-forerunner-45-day-silicone-ava-600x600.jpg', 'dsvsv ', 1, '2021-06-19 03:29:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(4, 'headphone'),
(5, 'watch'),
(3, 'ipad'),
(2, 'laptop'),
(1, 'smartphone');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_role`) VALUES
(1, 'admin', 'admin', 1),
(2, 'phuoc123', '12345', 2),
(3, 'hoang', '12345', 2),
(4, 'nguyen', '12345', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
