-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 14, 2019 lúc 03:50 PM
-- Phiên bản máy phục vụ: 10.1.39-MariaDB
-- Phiên bản PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `watchadmin`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `chu_de` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci,
  `mieu_ta` text COLLATE utf8_unicode_ci,
  `link_anh` text COLLATE utf8_unicode_ci,
  `tac_gia` text COLLATE utf8_unicode_ci,
  `trang_thai` int(11) NOT NULL,
  `danh_muc_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `chu_de`, `slug`, `noi_dung`, `mieu_ta`, `link_anh`, `tac_gia`, `trang_thai`, `danh_muc_id`, `created_at`, `updated_at`) VALUES
(1, 'Giới thiệu', 'gioi-thieu', '<p>n&ocirc;i dung đang cập nhật...</p>', 'Giới thiệu thông tin về cửa hàng', NULL, NULL, 1, 1, '2019-06-01 02:54:56', '2019-06-01 02:54:56'),
(2, 'Chính Sách Bảo Mật', 'chinh-sach-bao-mat', '<p>Nội dung đang cập nhật...</p>', 'mô tả Chính Sách Bảo Mật', NULL, NULL, 1, 1, '2019-06-01 02:56:06', '2019-06-01 02:56:06'),
(3, 'Chính sách bảo hành', 'chinh-sach-bao-hanh', '<p>Nội dung đang cập nhật...</p>', 'mô tả về Chính sách bảo hành', NULL, NULL, 1, 1, '2019-06-01 02:56:40', '2019-06-01 02:56:40'),
(4, 'Điều Khoản & Điều Kiện', 'dieu-khoan-dieu-kien', '<p>Nội dung đang c&acirc;p nhật...</p>', 'mô tả Điều Khoản & Điều Kiện', NULL, NULL, 1, 1, '2019-06-01 02:57:06', '2019-06-01 02:57:06'),
(5, 'Chính sách đổi trả', 'chinh-sach-doi-tra', '<p>Nội dung đang c&acirc;p nhật...</p>', 'mô tả Chính sách đổi trả', NULL, NULL, 1, 1, '2019-06-01 02:57:27', '2019-06-01 02:57:27'),
(6, 'Hướng Dẫn Mua Hàng', 'huong-dan-mua-hang', '<p>Nội dung đang c&acirc;p nhật...</p>', 'mô tả Hướng Dẫn Mua Hàng', NULL, NULL, 1, 1, '2019-06-01 02:57:46', '2019-06-01 02:57:46'),
(7, 'Khách Hàng Thân Thiết', 'khach-hang-than-thiet', '<p>Nội dung đang c&acirc;p nhật...</p>', 'mô tả Khách Hàng Thân Thiết', NULL, NULL, 1, 1, '2019-06-01 02:58:06', '2019-06-01 02:58:06'),
(8, 'Liên hệ', 'lien-he', '<p>chi tiết li&ecirc;n hệ sẽ th&ecirc;m ở đ&acirc;y!</p>', 'mô tả trang liên hệ', NULL, NULL, 1, 1, '2019-06-01 02:59:09', '2019-06-01 02:59:09'),
(9, 'LÝ DO ĐỒNG HỒ NỮ LẠI CÓ ÍT MẪU CƠ NHƯ VẬY???', 'ly-do-dong-ho-nu-lai-co-it-mau-co-nhu-vay', '<div class=\"noidung\">\r\n<p><span style=\"font-size:14px\"><strong>K&iacute;ch thước đồng hồ:</strong></span></p>\r\n\r\n<h2><span style=\"font-size:14px\">Kh&aacute;c với nam giới, phụ nữ khi lựa chọn đồng hồ thường chỉ quan t&acirc;m tới kiểu d&aacute;ng v&agrave; m&agrave;u sắc.</span></h2>\r\n\r\n<p><span style=\"font-size:14px\">Nếu m&aacute;y cơ c&oacute; kiểu d&aacute;ng kh&aacute; to v&agrave; d&agrave;y, th&igrave;&nbsp;đồng hồ quartz&nbsp;được trang bị c&oacute; kiểu d&aacute;ng mỏng v&agrave; nhẹ hơn đồng hồ cơ. Do vậy, khi đeo tr&ocirc;ng sẽ s&agrave;nh điệu v&agrave; vừa vặn với cổ tay nữ giới.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://www.dangquangwatch.vn//lib/ckfinder/images/762538722_213226660_Dong-ho-Epos-Swiss-4401_122_20_18_15.jpg\" style=\"height:491px; width:300px\" /></p>\r\n\r\n<p style=\"text-align:center\"><em>Mẫu đồng hồ cơ&nbsp;Epos 4401.122.20.18.15 kiểu d&aacute;ng đơn giản, độ d&agrave;y vỏ l&ecirc;n tới 9mm</em></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><em><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong%20ho%20nu%20(3)(1).jpg\" style=\"height:426px; width:600px\" /></em></p>\r\n\r\n<p style=\"text-align:center\"><em>Đồng hồ pin&nbsp;Aries Gold AG-L5037Z G-W&nbsp;độ d&agrave;y vỏ 7mm</em></p>\r\n\r\n<p><span style=\"font-size:14px\">Nắm bắt được t&acirc;m l&yacute; của phụ nữ, c&aacute;c h&atilde;ng đ&atilde; đẩy mạnh ph&aacute;t triển đồng hồ quartz d&agrave;nh cho t&iacute;n đồ nữ thay v&igrave; đồng hồ cơ. Mặc d&ugrave;, nữ giới &iacute;t quan t&acirc;m đến th&ocirc;ng số kỹ thuật, nhưng đồng hồ quartz vẫn lu&ocirc;n l&agrave; lựa chọn của sự chuẩn x&aacute;c với sai số rất &iacute;t.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:14px\"><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong%20ho%20nu%20(4).jpg\" style=\"height:407px; width:620px\" /></span></p>\r\n\r\n<p style=\"text-align:center\"><em>Đồng hồ&nbsp;Đồng hồ Jacques Lemans JL-1-1851ZD độ d&agrave;y vỏ 6mm, đường k&iacute;nh 28m</em></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Gi&aacute; th&agrave;nh sản phẩm</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Chi ph&iacute; để sản xuất một chiếc đồng hồ cơ thường lớn hơn rất nhiều so với đồng hồ Quartz trong khi hầu hết c&aacute;c mẫu chỉ kh&aacute;c nhau về m&agrave;u, vật liệu, c&ograve;n t&iacute;nh năng đều chỉ l&agrave; giờ, ph&uacute;t, gi&acirc;y, lịch c&oacute; th&ecirc;m nữa th&igrave; họa chăng l&agrave; lộ m&aacute;y.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Kết quả l&agrave; c&aacute;c nh&agrave; sản xuất sẽ nh&igrave;n v&agrave;o phương &aacute;n c&oacute; lợi nhuận cao hơn để tiếp tục sản xuất.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:14px\"><img alt=\"\" src=\"https://www.dangquangwatch.vn//lib/ckfinder/images/977729922_652372271_Dong-ho-Epos-Swiss-4426_132_22_20_32.jpg\" style=\"height:491px; width:300px\" /></span></p>\r\n\r\n<p style=\"text-align:center\"><em>Đồng hồ cơ Epos 4426.132.22.20.32 gi&aacute; b&aacute;n 32.000.000 VNĐ.</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\">Thay v&igrave; phương &aacute;n sản xuất đồng hồ cơ cho nữ giới th&igrave; c&aacute;c h&atilde;ng lại tập trung đẩy mạnh v&agrave;o đồng hồ pin. Bởi đồng hồ pin c&oacute; gi&aacute; kh&aacute; rẻ, đa dạng mẫu m&atilde; v&agrave; ch&uacute;ng được nữ giới v&ocirc; c&ugrave;ng ưa chuộng. Khi tập trung v&agrave;o sản phẩm &ldquo;vừa đẹp, vừa rẻ, vừa hợp thời trang&rdquo; sẽ khiến cho chị em phụ nữ bị thu h&uacute;t. Bạn biết đấy, với chị em phụ nữ th&igrave; c&oacute; thể sản phẩm c&oacute; gi&aacute; rẻ lu&ocirc;n được họ săn l&ugrave;ng như một th&uacute; vui.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/%C4%91%E1%BB%93ng%20h%E1%BB%93%20th%E1%BB%A5y%20s%E1%BB%B9%20%20(2).jpg\" style=\"height:386px; width:600px\" /></p>\r\n\r\n<p style=\"text-align:center\"><em>Đồng hồ pin Epos 8000.700.22.65.15 gi&aacute; b&aacute;n 15.100.000 VNĐ</em></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><em><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong%20ho%20thuy%20sy%20nu%20(5).jpg\" style=\"height:409px; width:600px\" /></em></p>\r\n\r\n<p style=\"text-align:center\"><em>Đồng hồ nữ&nbsp;&nbsp;</em><em>Atlantic 29035.41.21 gi&aacute; b&aacute;n 7.620.000 VNĐ</em></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><em><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/%C4%91%E1%BB%93ng%20h%E1%BB%93%20n%E1%BB%AF%20(1).jpg\" style=\"height:373px; width:600px\" /></em></p>\r\n\r\n<p style=\"text-align:center\"><em>Đồng hồ pin Diamond D DM38445IG gi&aacute; b&aacute;n: 3.575.000 VNĐ</em></p>\r\n\r\n<p><span style=\"font-size:14px\">Quả đ&uacute;ng l&agrave; &ldquo;Một mũi t&ecirc;n tr&uacute;ng 2 đ&iacute;ch&rdquo;, khi sản xuất đồng hồ m&aacute;y pin, nh&agrave; sản xuất vừa giảm được chi ph&iacute; gi&aacute; th&agrave;nh, tăng lợi nhuận vừa đ&aacute;nh đ&uacute;ng v&agrave;o t&acirc;m l&yacute; ti&ecirc;u d&ugrave;ng của phụ nữ, v&igrave; thế thật dễ hiểu khi đồng hồ quartz lại lu&ocirc;n được giới mộ điệu nữ tin d&ugrave;ng.</span><br />\r\n&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\">C&ograve;n bạn th&igrave; sao, l&agrave; ph&aacute;i đẹp bạn sẽ chọn đồng hồ cơ hay pin?</span></p>\r\n</div>', 'Nếu tìm kiếm những mẫu đồng hồ cơ dành cho nam giới, bạn sẽ thấy có rất nhiều lựa chọn từ phân khúc bình dân cho đến những thương hiệu cao cấp Tuy nhiên, những mẫu đồng hồ cơ của nữ lại có rất ít sự lựa chọn. Lý do tại sao lại như vậy?', 'dong-ho-chinh-hang.jpg', 'ducong', 1, 2, '2019-06-01 03:03:08', '2019-06-01 04:04:08'),
(10, 'CÁCH LỰA CHỌN MẪU ĐỒNG HỒ DÀNH CHO NAM MỆNH THỔ', 'cach-lua-chon-mau-dong-ho-danh-cho-nam-menh-tho', '<p style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>1.&nbsp; M&agrave;u sắc đồng hồ cho người mệnh Thổ</strong></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:rgb(17, 17, 17); font-family:arial,sans-serif\">Người mệnh Thổ hợp với những m&agrave;u sắc n&agrave;o, m&agrave;u n&agrave;o được xem l&agrave; bản mệnh v&agrave; m&agrave;u sắc n&agrave;o được xem l&agrave; tương sinh với người mệnh n&agrave;y?</span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:rgb(17, 17, 17); font-family:arial,sans-serif\">M&agrave;u sắc bản mệnh của người mệnh Thổ đ&oacute; l&agrave; <strong>v&agrave;ng</strong> v&agrave; <strong>n&acirc;u</strong>. Theo ngũ h&agrave;nh Hỏa sinh Thổ, v&igrave; vậy những người mệnh Thổ c&oacute; thể chọn những gam m&agrave;u tương sinh của mệnh Hỏa đ&oacute; l&agrave; đỏ v&agrave; hồng.</span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:center\"><span style=\"font-size:16px\"><span style=\"color:rgb(17, 17, 17); font-family:arial,sans-serif\"><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/donghothuysy%20(1).jpg\" style=\"height:425px; width:600px\" /></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:center\"><span style=\"font-size:14px\"><em>Đồng hồ Atlantic&nbsp;AT-61751.45.31 gi&aacute; b&aacute;n 22.960.000 VNĐ.</em></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:center\"><span style=\"font-size:16px\"><em><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/%C4%91%E1%BB%93ng%20h%E1%BB%93%20nam%20(3).jpg\" style=\"height:405px; width:600px\" /></em></span></p>\r\n\r\n<h1 style=\"text-align:center\"><span style=\"font-size:14px\"><em>Đồng hồ Jacques lemans 1-1852D Gi&aacute; b&aacute;n: 4.610.000 VNĐ</em></span></h1>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:center\"><span style=\"font-size:16px\"><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/donghonam%20(1).jpg\" style=\"height:426px; width:600px\" /></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:center\"><span style=\"font-size:14px\"><em>Đồng hồ nam&nbsp;&nbsp;AG-G101 RG-CF gi&aacute; b&aacute;n 5.472.000 VNĐ</em></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:center\"><span style=\"font-size:16px\"><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/%C4%91%E1%BB%93ng%20h%E1%BB%93%20automatic%20(3).jpg\" style=\"height:393px; width:600px\" /></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:14px\"><em>Đồng hồ Jacques Lemans JL-1-1909B gi&aacute; b&aacute;n 11.718.000 VNĐ&nbsp;</em></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\">Hai t&ocirc;ng m&agrave;u n&acirc;u v&agrave; v&agrave;ng được sử dụng nhiều trong chế t&aacute;c đồng hồ, v&igrave; vậy người mệnh Thổ kh&ocirc;ng kh&oacute; khăn g&igrave; trong việc lựa chọn những cho m&igrave;nh những chiếc đồng hồ m&agrave;u n&agrave;y.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\">Vậy m&agrave;u sắc tương khắc l&agrave; như thế n&agrave;o? Đ&oacute; l&agrave; những m&agrave;u sắc của c&aacute;c mệnh khắc với Thổ như Mộc. Người mệnh Thổ kh&ocirc;ng n&ecirc;n chọn những chiếc đồng hồ m&agrave;u xanh l&aacute; c&acirc;y.</span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong%20ho%20automatic%20(6).jpg\" style=\"height:398px; width:600px\" /></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:14px\"><em>M&agrave;u xanh l&aacute; c&acirc;y tương khắc với mệnh Thổ, bạn kh&ocirc;ng n&ecirc;n lựa chọn những mẫu đồng hồ m&agrave;u n&agrave;y.</em></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><em><strong>2</strong>.&nbsp;</em><strong>Kiểu d&aacute;ng mặt đồng hồ cho người mệnh Thổ</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\">Mệnh Thổ tượng trưng cho đất, sự vu&ocirc;ng vắn v&agrave; đủ đầy. V&igrave; vậy những người mệnh Thổ ph&ugrave; hợp với những chiếc đồng hồ mặt vu&ocirc;ng với thiết kế đơn giản v&agrave; kh&ocirc;ng qu&aacute; cầu kỳ.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:rgb(17, 17, 17); font-family:poppins,sans-serif\">H&igrave;nh khối trong phong thủy mệnh Thổ l&agrave; h&igrave;nh vu&ocirc;ng, kể cả những biến thể của h&igrave;nh vu&ocirc;ng như h&igrave;nh vu&ocirc;ng c&oacute; bo g&oacute;c, h&igrave;nh chữ nhật c&oacute; bo g&oacute;c&hellip;</span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:rgb(17, 17, 17); font-family:poppins,sans-serif\"><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong%20ho%20thuy%20sy%20atlantic%20(1).jpg\" style=\"height:432px; width:600px\" /></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:14px\"><em>Đồng hồ nam Atlantic AT-54450.45.21 Gi&aacute; b&aacute;n: 29.350.000 VNĐ</em></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><em><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong%20ho%20nam%20(1).jpg\" style=\"height:378px; width:600px\" /></em></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:14px\"><em>Đồng hồ nam Jacques Lemans JL-1-1906D Gi&aacute; b&aacute;n: 6.640.000 VNĐ</em></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><em><img alt=\"\" src=\"https://www.dangquangwatch.vn//lib/ckfinder/images/1-1904H5abb9fb48568b_720x600.jpg\" style=\"height:600px; width:283px\" /></em></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:14px\"><em>Đồng hồ nam&nbsp;Jacques Lemans JL-1-1904H Gi&aacute; b&aacute;n: 6.640.000 VNĐ</em></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\">Nam giới lựa chọn đồng hồ mặt vu&ocirc;ng thể hiện n&eacute;t nam t&iacute;nh, mạnh mẽ, khỏe khoắn v&agrave; ri&ecirc;ng biệt trong phong c&aacute;ch.</span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>3.&nbsp;&nbsp;Chất liệu d&acirc;y đồng hồ</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\">Biểu tượng của mệnh Thổ l&agrave; đất, n&ecirc;n những chất liệu c&oacute; nguồn gốc từ đất sẽ l&agrave; lựa chọn ho&agrave;n ảo cho c&aacute;c ch&agrave;ng trai mệnh Thổ.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\">V&igrave; vậy ngo&agrave;i việc lựa chọn c&aacute;c mẫu đồng hồ d&acirc;y da, d&acirc;y kim loại, bạn c&oacute; thể lựa chọn c&aacute;c mẫu đồng hồ được l&agrave;m từ chất liệu gốm, sứ.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\">Hiện nay th&igrave; c&oacute; kh&aacute; nhiều mẫu đồng hồ được l&agrave; bằng chất liệu n&agrave;y, n&ecirc;n c&aacute;c bạn sẽ kh&ocirc;ng gặp bất kỳ kh&oacute; khăn g&igrave; khi t&igrave;m cho m&igrave;nh 1 chiếc đồng hồ bằng gốm từ c&aacute;c h&atilde;ng đồng hồ ch&iacute;nh h&atilde;ng nổi tiếng.</span></p>', 'Hiện nay, việc áp dụng quy luật phong thủy vào cuộc sống đã không còn quá xa lạ với nhiều người. Người phương Đông tin rằng các phụ kiện, đặc biệt là đồng hồ hợp phong thủy sẽ đem lại may mắn, tài lộc, sức khỏe cho bản thân và gia đình. Vì vậy, chọn một chiếc đồng hồ hợp phong thủy để đồng hành cùng bạn trong cuộc sống là điều vô cùng quan trọng', '843371908_SPmoi1.jpg', 'ducong', 1, 2, '2019-06-01 04:06:01', '2019-06-01 04:06:01'),
(11, 'TOP 4 MẪU ĐỒNG HỒ NAM SIÊU MỎNG DÀNH CHO PHÁI MẠNH', 'top-4-mau-dong-ho-nam-sieu-mong-danh-cho-phai-manh', '<h3><span style=\"font-size:14px\"><em><strong>Đồng hồ Atlantic 60342.45.21</strong></em></span></h3>\r\n\r\n<p><span style=\"font-size:14px\">Mang trong m&igrave;nh phong c&aacute;ch sang trọng, lịch l&atilde;m v&agrave; cổ điển, phi&ecirc;n bản <em><strong>Atlantic 60342.45.21</strong></em> sử dụng<span style=\"color:rgb(84, 84, 84); font-family:roboto,sans-serif\">&nbsp;bộ số dạng vạch được sử dụng để đ&aacute;nh dấu giờ cho đồng hồ điểm nhấn d&agrave;nh cho vị tr&iacute; 12 giờ với 2 vạch liền nhau.</span>&nbsp;C&ocirc;ng nghệ mạ PVD hiện đại mang đến cho vỏ đồng hồ m&agrave;u v&agrave;ng đẹp mắt v&agrave; c&oacute; độ bền cao. Bảo vệ cho nền mặt số tho&aacute;ng đ&atilde;ng l&agrave; lớp k&iacute;nh sapphire với khả năng chống trầy xước cao c&ugrave;ng độ trong gi&uacute;p người d&ugrave;ng c&oacute; thể quan s&aacute;t giờ một c&aacute;ch dễ d&agrave;ng hơn.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong%20ho%20thuy%20sy%20atlantic%20(5).jpg\" style=\"height:397px; width:600px\" /></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong%20ho%20thuy%20sy%20atlantic%20(4).jpg\" style=\"height:432px; width:600px\" /></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><em>+ Đường k&iacute;nh: 40mm</em><br />\r\n<em>+ Độ d&agrave;y: 5mm</em><br />\r\n<em>+ Độ chịu nước: 5ATM</em><br />\r\n<em>+ Gi&aacute; sản phẩm: 8,390,000 VNĐ</em></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><em><strong>Đồng hồ Jacques Lemans JL-1-1848H</strong></em></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><em><strong><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong%20ho%20nam%20(1)(1).jpg\" style=\"height:368px; width:600px\" /></strong></em></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Đồng hồ&nbsp;<em><strong>Jacques Lemans JL-1-1848H</strong></em> được thiết kế rất tinh tế, mỏng nhẹ đầy cuốn h&uacute;t. Sản phẩm sử dụng chủ yếu t&ocirc;ng m&agrave;u trắng v&agrave;ng kết hợp. Trong đ&oacute;, sắc v&agrave;ng mang đến sự vương giả cho sản phẩm. C&ograve;n sắc trắng thể hiện sự sang trọng, tạo nh&atilde;.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Mặt k&iacute;nh của chiếc đồng hồ n&agrave;y được l&agrave;m từ chất liệu k&iacute;nh cường lực, độ chịu lực cao. Phần d&acirc;y đeo v&agrave; vỏ sử dụng th&eacute;p kh&ocirc;ng gỉ mạ m&agrave;u v&agrave;ng ,mang đến sự bền bỉ cho sản phẩm.</span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong%20ho%20nam%20(4).jpg\" style=\"height:417px; width:600px\" /></p>\r\n\r\n<p style=\"text-align:justify\"><em>+ Đường k&iacute;nh: 38mm</em><br />\r\n<em>+ Độ d&agrave;y: 4.5mm</em><br />\r\n<em>+ Độ chịu nước: 5ATM</em><br />\r\n<em>+ Gi&aacute; sản phẩm: 8.670.000 VNĐ</em></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><strong><em>Đồng hồ&nbsp;</em></strong><em><strong>Jacques Lemans JL-1-1850H</strong></em></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><em><strong><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/%C4%91%E1%BB%93ng%20h%E1%BB%93%20nam%20(1)(3).jpg\" style=\"height:451px; width:600px\" /></strong></em></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:rgb(102, 102, 102); font-family:arial,helvetica,sans-serif\">Mang vẻ đẹp tinh tế, đơn giản v&agrave; hơi thở hiện đại, chiếc đồng hồ với c&aacute;c vạch chỉ giờ l&agrave;, thiết kế 2 kim thanh mảnh, mặt trong c&ugrave;ng với khung viền m&agrave;u v&agrave;ng gi&uacute;p tạo điểm nhấn. Tr&ecirc;n hết l&agrave; sự kết hợp c&ugrave;ng d&acirc;y da trơn nhẹ nh&agrave;ng biến&nbsp;</span><em><strong>JL-1-1850H</strong></em><strong><em>&nbsp;</em></strong><span style=\"color:rgb(102, 102, 102); font-family:arial,helvetica,sans-serif\">trở th&agrave;nh biểu tượng của đồng hồ Jacques Lemans mỏng nhẹ thời hiện đại.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">C&oacute; đến 13 phi&ecirc;n bản kh&aacute;c nhau về m&agrave;u sắc d&acirc;y da v&agrave; mặt số,&nbsp;Jacques Lemans JL-1-1850H chắc chắn sẽ chiều l&ograve;ng được mọi Qu&yacute; &ocirc;ng.</span></p>\r\n\r\n<p style=\"text-align:justify\"><em>+ Đường k&iacute;nh: 38mm</em><br />\r\n<em>+ Độ d&agrave;y: 4.5mm</em><br />\r\n<em>+ Độ chịu nước: 5ATM</em><br />\r\n<em>+ Gi&aacute; sản phẩm: 3.740.000 VNĐ</em></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><em><strong>Đồng hồ Jacques Lemans JL-1-1950F</strong></em></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">L&agrave; mẫu đồng hồ được thiết kế với mặt số đen quyến rũ. V&igrave; vậy, n&oacute; gi&uacute;p t&ocirc;n l&ecirc;n bộ ba kim v&agrave; chữ số với sắc trắng của kim loại nổi bật. Ngo&agrave;i ra, mẫu đồng hồ n&agrave;y c&ograve;n được thiết kế với những đường vạch dọc lớn, 3 kim hiện thỉ th&ocirc;ng số ng&agrave;y th&aacute;ng, thứ trong tuần v&agrave; giờ 24h tiện dụng. Do đ&oacute;, x&eacute;t một c&aacute;ch tổng qu&aacute;t mẫu đồng hồ n&agrave;y vừa đẹp vừa thanh lịch nhưng rất đơn giản m&agrave; vẫn đầy đủ t&iacute;nh năng.</span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/%C4%91%E1%BB%93ng%20h%E1%BB%93%20nh%E1%BA%ADp%20kh%E1%BA%A9u%20(3).jpg\" style=\"height:437px; width:600px\" /></p>\r\n\r\n<p style=\"text-align:justify\"><em>+ Đường k&iacute;nh: 38mm</em><br />\r\n<em>+ Độ d&agrave;y: 7mm</em><br />\r\n<em>+ Độ chịu nước: 5ATM</em><br />\r\n<em>+ Gi&aacute; sản phẩm: 2.870.000 VNĐ</em></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:rgb(17, 17, 17); font-family:helvetica neue,arial,sans-serif; font-size:16px\"><span style=\"font-size:14px\">Tr&ecirc;n đ&acirc;y ch&iacute;nh l&agrave; những mẫu&nbsp;</span></span><span style=\"font-size:14px\">đồng hồ nam si&ecirc;u mỏng đẹp gi&aacute; rẻ<span style=\"color:rgb(17, 17, 17); font-family:helvetica neue,arial,sans-serif\">&nbsp;ph&ugrave; hợp với người c&oacute; cổ tay nhỏ. Hy vọng với những th&ocirc;ng tin được chia sẻ trong b&agrave;i viết c&aacute;c bạn sẽ chọn được sản phẩm ph&ugrave; hợp.</span></span></p>', 'Không quá phô trương, màu mè hay đắt tiền, những chiếc đồng hồ siêu mỏng vẫn chinh phục được đông đảo người dùng đồng hồ trên thế giới bởi vẻ đẹp cuốn hút của nó. Nếu như trước đây đồng hồ to bản, dày, mạnh mẽ là lựa chọn số 1 và duy nhất của cánh mày râu thì ngày nay xu hướng đang dần dịch chuyển sang những chiếc đồng hồ nam siêu mỏng. Thiết kế tinh tế, mỏng đồng hồ nam mỏng đang dần chinh phục và hấp dẫn được các tín đồ đồng hồ khó tính.', 'relojes-lujo-segunda-mano.jpg', NULL, 1, 2, '2019-06-01 04:08:30', '2019-06-01 04:08:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_danh_muc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mieu_ta` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog_category`
--

INSERT INTO `blog_category` (`id`, `ten_danh_muc`, `slug`, `created_at`, `updated_at`, `mieu_ta`) VALUES
(1, 'page', 'page', '2019-06-01 02:53:06', '2019-06-01 02:53:06', '<p>C&aacute;c trang tĩnh kh&ocirc;ng phải l&agrave; một b&agrave;i viết</p>'),
(2, 'Tin tức', 'tin-tuc', '2019-06-01 02:53:52', '2019-06-01 02:53:52', '<p>Cập nhật những tin tức, b&agrave;i viết, chương tr&igrave;nh khuyến m&atilde;i mới nhất về cửa h&agrave;ng</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_dat_hang`
--

CREATE TABLE `chi_tiet_dat_hang` (
  `id` int(10) UNSIGNED NOT NULL,
  `soluong_sub` int(11) NOT NULL,
  `gia_tien` int(11) DEFAULT NULL,
  `khuyen_mai` int(11) DEFAULT NULL,
  `subtotal` int(11) NOT NULL,
  `id_san_pham` int(10) UNSIGNED NOT NULL,
  `id_dat_hang` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_dat_hang`
--

INSERT INTO `chi_tiet_dat_hang` (`id`, `soluong_sub`, `gia_tien`, `khuyen_mai`, `subtotal`, `id_san_pham`, `id_dat_hang`, `created_at`, `updated_at`) VALUES
(11, 3, 4725000, NULL, 14175000, 12, 56, '2019-06-07 14:12:18', '2019-06-07 14:12:18'),
(12, 1, 2890000, 2312000, 2312000, 13, 56, '2019-06-07 14:12:18', '2019-06-07 14:12:18'),
(15, 1, 2890000, 2312000, 2312000, 13, 58, '2019-06-07 15:17:52', '2019-06-07 15:17:52'),
(16, 1, 5000000, NULL, 5000000, 7, 58, '2019-06-07 15:17:52', '2019-06-07 15:17:52'),
(17, 1, 7672500, NULL, 7672500, 11, 59, '2019-06-09 07:55:23', '2019-06-09 07:55:23'),
(21, 1, 4725000, NULL, 4725000, 12, 63, '2019-06-09 16:15:44', '2019-06-09 16:15:44'),
(47, 1, 8390000, NULL, 8390000, 2, 79, '2019-06-11 03:17:26', '2019-06-11 03:17:26'),
(48, 1, 8390000, NULL, 8390000, 2, 80, '2019-06-11 03:50:25', '2019-06-11 03:50:25'),
(49, 1, 4725000, NULL, 4725000, 12, 80, '2019-06-11 03:50:25', '2019-06-11 03:50:25'),
(50, 1, 5000000, NULL, 5000000, 7, 80, '2019-06-11 03:50:25', '2019-06-11 03:50:25'),
(51, 1, 8390000, NULL, 8390000, 2, 81, '2019-06-11 04:19:44', '2019-06-11 04:19:44'),
(52, 1, 4725000, NULL, 4725000, 12, 81, '2019-06-11 04:19:44', '2019-06-11 04:19:44'),
(53, 1, 5000000, NULL, 5000000, 7, 81, '2019-06-11 04:19:44', '2019-06-11 04:19:44'),
(54, 1, 7672500, NULL, 7672500, 11, 82, '2019-06-11 04:22:13', '2019-06-11 04:22:13'),
(55, 1, 2890000, 2312000, 2312000, 13, 83, '2019-06-11 04:23:06', '2019-06-11 04:23:06'),
(56, 1, 4725000, NULL, 4725000, 12, 83, '2019-06-11 04:23:06', '2019-06-11 04:23:06'),
(59, 1, 7672500, NULL, 7672500, 11, 85, '2019-06-11 17:23:17', '2019-06-11 17:23:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dat_hang`
--

CREATE TABLE `dat_hang` (
  `id` int(10) UNSIGNED NOT NULL,
  `soluong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` tinyint(4) NOT NULL,
  `ghi_chu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_khachhang` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dat_hang`
--

INSERT INTO `dat_hang` (`id`, `soluong`, `total`, `type`, `trang_thai`, `ghi_chu`, `id_khachhang`, `created_at`, `updated_at`) VALUES
(56, 4, 16487000, 'paypal', 1, 'đặt hàng tại watchpro', 59, '2019-06-07 14:12:18', '2019-06-07 14:14:14'),
(58, 2, 7312000, 'COD', 0, 'cho em nhé', 61, '2019-06-07 15:17:52', '2019-06-07 15:17:52'),
(59, 1, 7672500, 'COD', 0, 'người dùng này đã đăng nhập để mua hàng', 62, '2019-06-09 07:55:23', '2019-06-09 07:55:23'),
(63, 1, 4725000, 'paypal', 0, 'afadsfsdf', 67, '2019-06-09 16:15:44', '2019-06-09 16:15:44'),
(79, 1, 8390000, 'paypal', 0, 'fgdfgdf', 84, '2019-06-11 03:17:26', '2019-06-11 03:17:26'),
(80, 3, 18115000, 'COD', 0, 'dfsd', 85, '2019-06-11 03:50:25', '2019-06-11 03:50:25'),
(81, 3, 18115000, 'COD', 0, 'dfsd', 86, '2019-06-11 04:19:44', '2019-06-11 04:19:44'),
(82, 1, 7672500, 'COD', 0, 'heki', 87, '2019-06-11 04:22:13', '2019-06-11 04:22:13'),
(83, 2, 7037000, 'COD', 0, 'okie chưa', 88, '2019-06-11 04:23:06', '2019-06-11 04:23:06'),
(85, 1, 7672500, 'paypal', 0, 'fsdfd', 90, '2019-06-11 17:23:17', '2019-06-11 17:23:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_imgs`
--

CREATE TABLE `detail_imgs` (
  `id` int(10) UNSIGNED NOT NULL,
  `imgs` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_imgs`
--

INSERT INTO `detail_imgs` (`id`, `imgs`, `pro_id`, `created_at`, `updated_at`) VALUES
(1, '332853128_atweb1.jpg', 1, '2019-06-01 06:58:38', '2019-06-01 06:58:38'),
(2, '643013358_at1.jpg', 2, '2019-06-01 07:01:45', '2019-06-01 07:01:45'),
(3, '1132922849_at2.jpg', 2, '2019-06-01 07:01:45', '2019-06-01 07:01:45'),
(4, '1199996396_at3.jpg', 2, '2019-06-01 07:01:45', '2019-06-01 07:01:45'),
(5, '844101378_Untitled-69.jpg', 3, '2019-06-01 07:04:11', '2019-06-01 07:04:11'),
(6, '1501088572_dmd1.jpg', 5, '2019-06-01 07:09:51', '2019-06-01 07:09:51'),
(7, '1289690546_dmdweb2.jpg', 5, '2019-06-01 07:09:51', '2019-06-01 07:09:51'),
(8, '2030099416_dmdlenbao4.jpg', 5, '2019-06-01 07:09:51', '2019-06-01 07:09:51'),
(9, '183392423_Untitled-51.jpg', 7, '2019-06-01 07:14:09', '2019-06-01 07:14:09'),
(10, '640032174_Untitled-55.jpg', 8, '2019-06-01 07:16:09', '2019-06-01 07:16:09'),
(11, '2118696477_dmdweb4.jpg', 8, '2019-06-01 07:16:09', '2019-06-01 07:16:09'),
(12, '1987698149_Untitled-450.jpg', 10, '2019-06-01 07:24:36', '2019-06-01 07:24:36'),
(13, '1944064814_agx.jpg', 10, '2019-06-01 07:24:36', '2019-06-01 07:24:36'),
(14, '458533821_agx1.jpg', 10, '2019-06-01 07:24:36', '2019-06-01 07:24:36'),
(15, '2118696477_dmdweb4.jpg', 11, '2019-06-01 07:28:06', '2019-06-01 07:28:06'),
(16, '192727447_agn02.jpg', 12, '2019-06-01 07:31:32', '2019-06-01 07:31:32'),
(17, '1270301386_agn03.jpg', 12, '2019-06-01 07:31:32', '2019-06-01 07:31:32'),
(18, '1812209491_agn01.jpg', 12, '2019-06-01 07:31:32', '2019-06-01 07:31:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_khach_hang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_khach_hang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt_khach_hang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi_khach_hang` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `ten_khach_hang`, `email_khach_hang`, `sdt_khach_hang`, `dia_chi_khach_hang`, `created_at`, `updated_at`) VALUES
(59, 'Nguyễn Văn Tuyên', 'tuyencoke96@gmail.com', '0123546879', 'Tuyên Quang', '2019-06-07 14:12:18', '2019-06-07 14:12:18'),
(60, 'Dư Chí Công', 'duconggpdg@gmail.com', '0123456789', 'Hòa Phú - Ứng Hòa - Hà Nội', '2019-06-07 14:31:17', '2019-06-07 14:31:17'),
(61, 'Công Dư', 'lethixuyen1995@gmail.com', '096968586', 'Hà Nội', '2019-06-07 15:17:51', '2019-06-07 15:17:51'),
(62, 'anh test', 'test@gmail.com', '1234568', 'tesst ha noi', '2019-06-09 07:55:23', '2019-06-09 07:55:23'),
(67, 'dư công', 'duconggpdg@gmail.com', '123456789', 'hà nội', '2019-06-09 16:15:44', '2019-06-09 16:15:44'),
(68, 'anh tesst 2', 'duconggpdg@gmail.com', '0135246549', 'haf nooij', '2019-06-09 16:45:51', '2019-06-09 16:45:51'),
(84, 'dư công fgdfgdf', 'duconggpdg@gmail.com', '123456789', 'hà nội', '2019-06-11 03:17:26', '2019-06-11 03:17:26'),
(85, 'dư côngf', 'duconggpdg@gmail.com', '123456789', 'hà nội', '2019-06-11 03:50:25', '2019-06-11 03:50:25'),
(86, 'dư côngf1', 'duconggpdg@gmail.com', '123456789', 'hà nội', '2019-06-11 04:19:44', '2019-06-11 04:19:44'),
(87, 'iiiiii', 'duconggpdg@gmail.com', '0135968', 'hà nội', '2019-06-11 04:22:13', '2019-06-11 04:22:13'),
(88, 'dư công6', 'duconggpdg@gmail.com', '123456789', 'hà nội', '2019-06-11 04:23:06', '2019-06-11 04:23:06'),
(89, 'aaaaaa', 'duconggpdg@gmail.com', '098953488', 'hà nội', '2019-06-11 04:39:04', '2019-06-11 04:39:04'),
(90, 'dư công fd', 'duconggpdg@gmail.com', '123456789', 'hà nội', '2019-06-11 17:23:17', '2019-06-11 17:23:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_loai_san_pham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug_loai_san_pham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioi_thieu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`id`, `ten_loai_san_pham`, `slug_loai_san_pham`, `gioi_thieu`, `anh`, `created_at`, `updated_at`) VALUES
(1, 'Đồng hồ Atlantic Swiss', 'dong-ho-atlantic-swiss', '<p>Đồng hồ Atlantic Swiss ch&iacute;nh h&atilde;ng, bảo h&agrave;nh tr&ecirc;n to&agrave;n quốc</p>', 'đồng-hồ-guess-900x400.jpg', '2019-06-01 04:33:13', '2019-06-01 04:33:13'),
(2, 'Đồng hồ Diamond D', 'dong-ho-diamond-d', NULL, 'dong-ho-dinh-da.jpg', '2019-06-01 04:35:00', '2019-06-01 04:35:00'),
(3, 'Đồng hồ Aries Gold', 'dong-ho-aries-gold', NULL, '1-aries-gold-aerosmith-limited-edition-watch-07-1703.jpg', '2019-06-01 04:36:45', '2019-06-01 04:36:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_06_26_000000_create_shopping_cart_table', 1),
(4, '2019_05_15_145105_create_blog_category_table', 1),
(5, '2019_05_15_145617_create_slide_table', 1),
(6, '2019_05_15_145931_create_khach_hang_table', 1),
(7, '2019_05_15_150347_create_loaisanpham_table', 1),
(8, '2019_05_15_150842_create_sanpham_table', 1),
(9, '2019_05_15_154751_create_dat_hang_table', 1),
(10, '2019_05_15_155348_create_chi_tiet_dat_hang_table', 1),
(11, '2019_05_15_155912_create_admin_users_table', 1),
(12, '2019_05_15_163238_create_blogs_table', 1),
(13, '2019_05_23_025514_create_detail_imgs_table', 1),
(14, '2019_05_28_204107_add_column_mieu_ta_to_blog_category_table', 1),
(15, '2019_05_31_225331_add_column_tinh_trang_to_sanpham_table', 1),
(16, '2019_06_01_143327_add_column_khuyen_mai_to_sanpham_table', 2),
(17, '2019_06_02_110704_create_dat_hang_table', 3),
(18, '2019_06_03_152439_create_dat_hang_table', 4),
(19, '2019_06_03_152720_create_chi_tiet_dat_hang_table', 4),
(20, '2019_06_04_152720_create_chi_tiet_dat_hang_table', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('duconggpdg@gmail.com', 'T3kLLSsVE0bzYFtaQvsnBAZIbxpcCREDpsgvsMD1MvuFeAARRyZWRFSLJWIr', NULL),
('duconggpdg@gmail.com', 'MW92x5zX7ryrs3QrlEGJqUqqBq9OUux8bUrDXM2V', NULL),
('duconggpdg@gmail.com', 'MW92x5zX7ryrs3QrlEGJqUqqBq9OUux8bUrDXM2V', '2019-06-13 12:57:16'),
('duconggpdg@gmail.com', 'mwIqNL65WcUWqY2ebIcIMBkzD1hN6UdurMzxtPZT', '2019-06-14 07:24:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_san_pham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioi_thieu` text COLLATE utf8_unicode_ci,
  `noi_dung` text COLLATE utf8_unicode_ci,
  `gia_tien` int(11) NOT NULL,
  `khuyen_mai` int(11) DEFAULT NULL,
  `chiet_khau` int(11) DEFAULT NULL,
  `anh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thuong_hieu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hang_san_xuat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kieu_dang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nang_luong_su_dung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `do_chiu_nuoc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duong_kinh_mat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chat_lieu_day` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chat_lieu_mat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chat_lieu_vo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kich_thuoc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bao_hanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '10 năm',
  `trang_thai` int(11) NOT NULL DEFAULT '1',
  `id_danhmucsanpham` int(10) UNSIGNED NOT NULL,
  `tinh_trang` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `ten_san_pham`, `slug`, `tags`, `gioi_thieu`, `noi_dung`, `gia_tien`, `khuyen_mai`, `chiet_khau`, `anh`, `thuong_hieu`, `hang_san_xuat`, `kieu_dang`, `nang_luong_su_dung`, `do_chiu_nuoc`, `duong_kinh_mat`, `chat_lieu_day`, `chat_lieu_mat`, `chat_lieu_vo`, `kich_thuoc`, `bao_hanh`, `trang_thai`, `id_danhmucsanpham`, `tinh_trang`, `created_at`, `updated_at`) VALUES
(1, 'Atlantic AT-60342.45.61', 'atlantic-at-603424561', 'Nổi bật', NULL, '<p style=\"text-align:justify\">Trải qua hơn 125 năm tồn tại v&agrave; ph&aacute;t triển thịnh vượng. Đồng hồ Atlantic thể hiện c&aacute;i t&ocirc;i chuẩn mực nhưng ph&oacute;ng kho&aacute;ng, một tầm nh&igrave;n xa, s&acirc;u sắc như ch&iacute;nh t&ecirc;n thương hiệu <a href=\"http://www.dangquangwatch.vn/\">đồng hồ</a>. Với h&agrave;m &yacute; của người s&aacute;ng lập muốn sản phẩm như biển Đại T&acirc;y Dương rộng lớn, bao la v&agrave; s&acirc;u thẳm. Ngo&agrave;i ra, Atlantic c&ograve;n l&agrave; t&ecirc;n của một &nbsp;th&agrave;nh phố, một triều đại phồn thịnh c&aacute;ch đ&acirc;y h&agrave;ng ng&agrave;n năm thống trị thế giới l&uacute;c đ&oacute;. C&acirc;u chuyện huyền thoại đ&atilde; thổi hồn v&agrave;o c&aacute;c sản phẩm Atlantic như muốn n&oacute;i với kh&aacute;ch h&agrave;ng một điều rằng Atlantic đẹp, chuẩn mực v&agrave; rất tuyệt diệu. V&agrave; sở hữu những sản phẩm tuyệt vời n&agrave;y chỉ c&oacute; những người th&agrave;nh đạt, tự tin, lu&ocirc;n lu&ocirc;n ti&ecirc;n phong trong suy nghĩ cũng như h&agrave;nh động.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ atlantic 50354.45.61\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-atlantic-50354_45_61(5).jpg\" style=\"height:367px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ atlantic 29033.45.28\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-atlantic-29033_45_28(6).jpg\" style=\"height:337px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;&nbsp; Trong những năm đầu ti&ecirc;n khởi nghiệp với niềm đam m&ecirc; bất tận đem đến cho kh&aacute;ch h&agrave;ng sản phẩm ho&agrave;n hảo cả về chất lượng lẫn phong c&aacute;ch. Đồng hồ Atlantic đ&atilde; dần chiếm được cảm t&igrave;nh của kh&aacute;ch h&agrave;ng thượng lưu kh&oacute; t&iacute;nh nhất. Bởi mỗi chiếc đồng hồ kh&ocirc;ng chỉ được trang bị cỗ m&aacute;y đo thời gian tuyệt hảo m&agrave; c&ograve;n được trau chuốt tinh tế đến từng chi tiết nhỏ như đ&aacute;nh b&oacute;ng vỏ kim loại, k&iacute;nh chống xước v&agrave; va đập, d&acirc;y da c&aacute; sấu từ v&ugrave;ng nam Mỹ&hellip;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ atlatic 62347.43.21G\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-atlantic-62347_43_21G(4).jpg\" style=\"height:353px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ atlantic 10351.45.91\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-atlantic-10351_45_91(4).jpg\" style=\"height:342px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Tại triển l&atilde;m đồng hồ lớn nhất thế giới tổ chức h&agrave;ng năm tại Basel Thụy Sỹ, Đăng Quang Watch vinh dự trở th&agrave;nh c&ocirc;ng ty duy nhất tại Việt Nam nhập khẩu v&agrave; ph&acirc;n phối độc quyền thương hiệu 100% Thụy Sỹ Atlantic. Sản phẩm ph&ugrave; hợp với kh&aacute;ch h&agrave;ng l&agrave; c&aacute;c doanh nh&acirc;n th&agrave;nh đạt, những người c&oacute; c&aacute; t&iacute;nh mạnh mẽ, lu&ocirc;n lu&ocirc;n theo đuổi mục ti&ecirc;u của m&igrave;nh.&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ atlantic 55475.47.65R\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-atlantic-55475_47_65R(2).jpg\" style=\"height:374px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;Kh&aacute;ch h&agrave;ng c&oacute; thể xem v&agrave; mua h&agrave;ng tại&nbsp;Website ch&iacute;nh thức Dangquangwatch.vn hoặc tại hệ thống showroom Đăng Quang tr&ecirc;n to&agrave;n quốc</p>', 8390000, NULL, NULL, '129297168_Untitled-36.jpg', 'Thụy Sỹ', 'Thụy Sỹ', 'Đồng hồ Nam', 'Quartz', '5ATM', '40 mm', 'Dây da', 'Sapphire ( Kính chống trầy )', 'Thép không gỉ mạ vàng PVD', NULL, '10 năm', 1, 1, 1, '2019-06-01 06:58:38', '2019-06-01 13:00:39'),
(2, 'Đồng hồ Atlantic 60342.45.21', 'dong-ho-atlantic-603424521', 'nổi bật', NULL, '<p style=\"text-align:justify\">Trải qua hơn 125 năm tồn tại v&agrave; ph&aacute;t triển thịnh vượng. Đồng hồ Atlantic thể hiện c&aacute;i t&ocirc;i chuẩn mực nhưng ph&oacute;ng kho&aacute;ng, một tầm nh&igrave;n xa, s&acirc;u sắc như ch&iacute;nh t&ecirc;n thương hiệu <a href=\"http://www.dangquangwatch.vn/\">đồng hồ</a>. Với h&agrave;m &yacute; của người s&aacute;ng lập muốn sản phẩm như biển Đại T&acirc;y Dương rộng lớn, bao la v&agrave; s&acirc;u thẳm. Ngo&agrave;i ra, Atlantic c&ograve;n l&agrave; t&ecirc;n của một &nbsp;th&agrave;nh phố, một triều đại phồn thịnh c&aacute;ch đ&acirc;y h&agrave;ng ng&agrave;n năm thống trị thế giới l&uacute;c đ&oacute;. C&acirc;u chuyện huyền thoại đ&atilde; thổi hồn v&agrave;o c&aacute;c sản phẩm Atlantic như muốn n&oacute;i với kh&aacute;ch h&agrave;ng một điều rằng Atlantic đẹp, chuẩn mực v&agrave; rất tuyệt diệu. V&agrave; sở hữu những sản phẩm tuyệt vời n&agrave;y chỉ c&oacute; những người th&agrave;nh đạt, tự tin, lu&ocirc;n lu&ocirc;n ti&ecirc;n phong trong suy nghĩ cũng như h&agrave;nh động.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ atlantic 50354.45.61\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-atlantic-50354_45_61(5).jpg\" style=\"height:367px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ atlantic 29033.45.28\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-atlantic-29033_45_28(6).jpg\" style=\"height:337px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;&nbsp; Trong những năm đầu ti&ecirc;n khởi nghiệp với niềm đam m&ecirc; bất tận đem đến cho kh&aacute;ch h&agrave;ng sản phẩm ho&agrave;n hảo cả về chất lượng lẫn phong c&aacute;ch. Đồng hồ Atlantic đ&atilde; dần chiếm được cảm t&igrave;nh của kh&aacute;ch h&agrave;ng thượng lưu kh&oacute; t&iacute;nh nhất. Bởi mỗi chiếc đồng hồ kh&ocirc;ng chỉ được trang bị cỗ m&aacute;y đo thời gian tuyệt hảo m&agrave; c&ograve;n được trau chuốt tinh tế đến từng chi tiết nhỏ như đ&aacute;nh b&oacute;ng vỏ kim loại, k&iacute;nh chống xước v&agrave; va đập, d&acirc;y da c&aacute; sấu từ v&ugrave;ng nam Mỹ&hellip;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ atlatic 62347.43.21G\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-atlantic-62347_43_21G(4).jpg\" style=\"height:353px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ atlantic 10351.45.91\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-atlantic-10351_45_91(4).jpg\" style=\"height:342px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Tại triển l&atilde;m đồng hồ lớn nhất thế giới tổ chức h&agrave;ng năm tại Basel Thụy Sỹ, Đăng Quang Watch vinh dự trở th&agrave;nh c&ocirc;ng ty duy nhất tại Việt Nam nhập khẩu v&agrave; ph&acirc;n phối độc quyền thương hiệu 100% Thụy Sỹ Atlantic. Sản phẩm ph&ugrave; hợp với kh&aacute;ch h&agrave;ng l&agrave; c&aacute;c doanh nh&acirc;n th&agrave;nh đạt, những người c&oacute; c&aacute; t&iacute;nh mạnh mẽ, lu&ocirc;n lu&ocirc;n theo đuổi mục ti&ecirc;u của m&igrave;nh.&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ atlantic 55475.47.65R\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-atlantic-55475_47_65R(2).jpg\" style=\"height:374px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;Kh&aacute;ch h&agrave;ng c&oacute; thể xem v&agrave; mua h&agrave;ng tại&nbsp;Website ch&iacute;nh thức Dangquangwatch.vn hoặc tại hệ thống showroom Đăng Quang tr&ecirc;n to&agrave;n quốc</p>', 8390000, NULL, NULL, '521797214_Untitled-15.jpg', 'Thụy Sỹ', 'Thụy Sỹ', 'Đồng hồ Nam', 'Quartz (Điện tử)', '5ATM', '40mm', 'Dây da', 'Sapphire', 'Thép không gỉ mạ vàng PVD', NULL, '10 năm', 1, 1, 1, '2019-06-01 07:01:44', '2019-06-01 13:00:58'),
(3, 'Đồng hồ Atlantic 29035.41.21', 'dong-ho-atlantic-290354121', 'nổi bật', '<p>Atlantic l&agrave; một trong những thương hiệu h&agrave;ng đầu thế giới được th&agrave;nh lập v&agrave;o năm 1888 bởi Eduard Kummer, một trong những nh&agrave; ti&ecirc;n phong đặt nền m&oacute;ng cho ng&agrave;nh sản xuất đồng hồ cao cấp Thụy Sĩ.</p>', '<p style=\"text-align:justify\">Trải qua hơn 125 năm tồn tại v&agrave; ph&aacute;t triển thịnh vượng. Đồng hồ Atlantic thể hiện c&aacute;i t&ocirc;i chuẩn mực nhưng ph&oacute;ng kho&aacute;ng, một tầm nh&igrave;n xa, s&acirc;u sắc như ch&iacute;nh t&ecirc;n thương hiệu <a href=\"http://www.dangquangwatch.vn/\">đồng hồ</a>. Với h&agrave;m &yacute; của người s&aacute;ng lập muốn sản phẩm như biển Đại T&acirc;y Dương rộng lớn, bao la v&agrave; s&acirc;u thẳm. Ngo&agrave;i ra, Atlantic c&ograve;n l&agrave; t&ecirc;n của một &nbsp;th&agrave;nh phố, một triều đại phồn thịnh c&aacute;ch đ&acirc;y h&agrave;ng ng&agrave;n năm thống trị thế giới l&uacute;c đ&oacute;. C&acirc;u chuyện huyền thoại đ&atilde; thổi hồn v&agrave;o c&aacute;c sản phẩm Atlantic như muốn n&oacute;i với kh&aacute;ch h&agrave;ng một điều rằng Atlantic đẹp, chuẩn mực v&agrave; rất tuyệt diệu. V&agrave; sở hữu những sản phẩm tuyệt vời n&agrave;y chỉ c&oacute; những người th&agrave;nh đạt, tự tin, lu&ocirc;n lu&ocirc;n ti&ecirc;n phong trong suy nghĩ cũng như h&agrave;nh động.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ atlantic 50354.45.61\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-atlantic-50354_45_61(5).jpg\" style=\"height:367px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ atlantic 29033.45.28\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-atlantic-29033_45_28(6).jpg\" style=\"height:337px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;&nbsp; Trong những năm đầu ti&ecirc;n khởi nghiệp với niềm đam m&ecirc; bất tận đem đến cho kh&aacute;ch h&agrave;ng sản phẩm ho&agrave;n hảo cả về chất lượng lẫn phong c&aacute;ch. Đồng hồ Atlantic đ&atilde; dần chiếm được cảm t&igrave;nh của kh&aacute;ch h&agrave;ng thượng lưu kh&oacute; t&iacute;nh nhất. Bởi mỗi chiếc đồng hồ kh&ocirc;ng chỉ được trang bị cỗ m&aacute;y đo thời gian tuyệt hảo m&agrave; c&ograve;n được trau chuốt tinh tế đến từng chi tiết nhỏ như đ&aacute;nh b&oacute;ng vỏ kim loại, k&iacute;nh chống xước v&agrave; va đập, d&acirc;y da c&aacute; sấu từ v&ugrave;ng nam Mỹ&hellip;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ atlatic 62347.43.21G\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-atlantic-62347_43_21G(4).jpg\" style=\"height:353px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ atlantic 10351.45.91\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-atlantic-10351_45_91(4).jpg\" style=\"height:342px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Tại triển l&atilde;m đồng hồ lớn nhất thế giới tổ chức h&agrave;ng năm tại Basel Thụy Sỹ, Đăng Quang Watch vinh dự trở th&agrave;nh c&ocirc;ng ty duy nhất tại Việt Nam nhập khẩu v&agrave; ph&acirc;n phối độc quyền thương hiệu 100% Thụy Sỹ Atlantic. Sản phẩm ph&ugrave; hợp với kh&aacute;ch h&agrave;ng l&agrave; c&aacute;c doanh nh&acirc;n th&agrave;nh đạt, những người c&oacute; c&aacute; t&iacute;nh mạnh mẽ, lu&ocirc;n lu&ocirc;n theo đuổi mục ti&ecirc;u của m&igrave;nh.&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ atlantic 55475.47.65R\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-atlantic-55475_47_65R(2).jpg\" style=\"height:374px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;Kh&aacute;ch h&agrave;ng c&oacute; thể xem v&agrave; mua h&agrave;ng tại&nbsp;Website ch&iacute;nh thức Dangquangwatch.vn hoặc tại hệ thống showroom Đăng Quang tr&ecirc;n to&agrave;n quốc</p>', 7620000, NULL, NULL, '1606768939_dong-ho-atlantic-29035.41.21.jpg', 'Thụy Sỹ', 'Thụy Sỹ', 'Đồng hồ Nữ', 'Quartz (Điện tử)', '3 ATM', 'Sapphire', 'Thép không gỉ', 'sapphire glass', 'Thép không gỉ', NULL, '10 năm', 1, 1, 1, '2019-06-01 07:04:11', '2019-06-01 13:07:22'),
(4, 'Atlantic AT-60342.45.11', 'atlantic-at-603424511', 'nổi bật', '<p>Atlantic l&agrave; một trong những thương hiệu h&agrave;ng đầu thế giới được th&agrave;nh lập v&agrave;o năm 1888 bởi Eduard Kummer, một trong những nh&agrave; ti&ecirc;n phong đặt nền m&oacute;ng cho ng&agrave;nh sản xuất đồng hồ cao cấp Thụy Sĩ.</p>', '<p style=\"text-align:justify\">Trải qua hơn 125 năm tồn tại v&agrave; ph&aacute;t triển thịnh vượng. Đồng hồ Atlantic thể hiện c&aacute;i t&ocirc;i chuẩn mực nhưng ph&oacute;ng kho&aacute;ng, một tầm nh&igrave;n xa, s&acirc;u sắc như ch&iacute;nh t&ecirc;n thương hiệu <a href=\"http://www.dangquangwatch.vn/\">đồng hồ</a>. Với h&agrave;m &yacute; của người s&aacute;ng lập muốn sản phẩm như biển Đại T&acirc;y Dương rộng lớn, bao la v&agrave; s&acirc;u thẳm. Ngo&agrave;i ra, Atlantic c&ograve;n l&agrave; t&ecirc;n của một &nbsp;th&agrave;nh phố, một triều đại phồn thịnh c&aacute;ch đ&acirc;y h&agrave;ng ng&agrave;n năm thống trị thế giới l&uacute;c đ&oacute;. C&acirc;u chuyện huyền thoại đ&atilde; thổi hồn v&agrave;o c&aacute;c sản phẩm Atlantic như muốn n&oacute;i với kh&aacute;ch h&agrave;ng một điều rằng Atlantic đẹp, chuẩn mực v&agrave; rất tuyệt diệu. V&agrave; sở hữu những sản phẩm tuyệt vời n&agrave;y chỉ c&oacute; những người th&agrave;nh đạt, tự tin, lu&ocirc;n lu&ocirc;n ti&ecirc;n phong trong suy nghĩ cũng như h&agrave;nh động.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ atlantic 50354.45.61\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-atlantic-50354_45_61(5).jpg\" style=\"height:367px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ atlantic 29033.45.28\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-atlantic-29033_45_28(6).jpg\" style=\"height:337px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;&nbsp; Trong những năm đầu ti&ecirc;n khởi nghiệp với niềm đam m&ecirc; bất tận đem đến cho kh&aacute;ch h&agrave;ng sản phẩm ho&agrave;n hảo cả về chất lượng lẫn phong c&aacute;ch. Đồng hồ Atlantic đ&atilde; dần chiếm được cảm t&igrave;nh của kh&aacute;ch h&agrave;ng thượng lưu kh&oacute; t&iacute;nh nhất. Bởi mỗi chiếc đồng hồ kh&ocirc;ng chỉ được trang bị cỗ m&aacute;y đo thời gian tuyệt hảo m&agrave; c&ograve;n được trau chuốt tinh tế đến từng chi tiết nhỏ như đ&aacute;nh b&oacute;ng vỏ kim loại, k&iacute;nh chống xước v&agrave; va đập, d&acirc;y da c&aacute; sấu từ v&ugrave;ng nam Mỹ&hellip;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ atlatic 62347.43.21G\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-atlantic-62347_43_21G(4).jpg\" style=\"height:353px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ atlantic 10351.45.91\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-atlantic-10351_45_91(4).jpg\" style=\"height:342px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Tại triển l&atilde;m đồng hồ lớn nhất thế giới tổ chức h&agrave;ng năm tại Basel Thụy Sỹ, Đăng Quang Watch vinh dự trở th&agrave;nh c&ocirc;ng ty duy nhất tại Việt Nam nhập khẩu v&agrave; ph&acirc;n phối độc quyền thương hiệu 100% Thụy Sỹ Atlantic. Sản phẩm ph&ugrave; hợp với kh&aacute;ch h&agrave;ng l&agrave; c&aacute;c doanh nh&acirc;n th&agrave;nh đạt, những người c&oacute; c&aacute; t&iacute;nh mạnh mẽ, lu&ocirc;n lu&ocirc;n theo đuổi mục ti&ecirc;u của m&igrave;nh.&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ atlantic 55475.47.65R\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-atlantic-55475_47_65R(2).jpg\" style=\"height:374px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;Kh&aacute;ch h&agrave;ng c&oacute; thể xem v&agrave; mua h&agrave;ng tại&nbsp;Website ch&iacute;nh thức Dangquangwatch.vn hoặc tại hệ thống showroom Đăng Quang tr&ecirc;n to&agrave;n quốc</p>', 8390000, NULL, NULL, '347591995_Untitled-29.jpg', 'Thụy Sỹ', 'Thụy Sỹ', 'Đồng hồ Nam', 'Quartz', '5ATM', '40 mm', 'Dây da', 'Sapphire ( Kính chống trầy )', 'Thép không gỉ mạ vang PVD', NULL, '10 năm', 1, 1, 1, '2019-06-01 07:06:23', '2019-06-01 13:07:25'),
(5, 'Đồng hồ Diamond D DM61195', 'dong-ho-diamond-d-dm61195', NULL, '<p>Đồng hồ Diamond D mang đến cho kh&aacute;ch h&agrave;ng vẻ đẹp tinh tế, vĩnh cửu như những vi&ecirc;n kim cương thuần khiết được tạo n&ecirc;n qua qu&aacute; tr&igrave;nh h&agrave;ng triệu năm. Với thiết kế tinh xảo, mặt k&iacute;nh sử dụng đ&aacute; saphia chống xước ho&agrave;n to&agrave;n đem đến cho qu&yacute; kh&aacute;ch một sản phẩm ho&agrave;n hảo với chất lượng vượt trội. Đ&oacute; l&agrave; vẻ đẹp vĩnh cửu. Sản phẩm được bảo h&agrave;nh trọn đời.</p>', '<p><a href=\"http://www.dangquangwatch.vn/sp/t-2/Dong-ho-nu.html\">Đồng hồ nữ</a> được thiết kế mang phong c&aacute;ch của ho&agrave;ng gia n&ecirc;n mỗi sản phẩm đều l&agrave; một t&aacute;c phẩm nghệ thuật. Sản phẩm thiết kế theo tinh thần v&agrave; gu thẩm mỹ của c&ocirc;ng nương Diana.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ diamond d DM37735B\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-diamond-d-DM37735B(1).jpg\" style=\"height:381px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ diamond d DM63055\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-diamond-d-DM63055(1).jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ diamond d DM65015\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-diamond-d-DM65015(1).jpg\" style=\"height:379px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ diamond d DM3645B5R\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/DM3645B5R(3).jpg\" style=\"height:359px; width:500px\" /></p>\r\n\r\n<p>Tại Việt Nam, Đăng Quang Watch được lựa chọn l&agrave; nh&agrave; ph&acirc;n phối độc quyền sản phẩm <a href=\"http://dangquangwatch.vn/sp/Dong-ho-Diamond-D/557-0-0-0-0-0-0.html\"><strong>đồng hồ Diamond D</strong></a> của ch&uacute;ng t&ocirc;i.&nbsp;</p>', 5225000, NULL, NULL, '1961731403_dong-ho-diamond-d-DM61195.jpg', 'Anh', 'China', 'Đồng hồ Nữ', 'Quartz/Pin', '3ATM', '28mm', 'Hợp kim', 'Sapphire ( Kính chống trầy )', 'Hợp kim , đính đá swarovsky', NULL, '10 năm', 1, 2, 1, '2019-06-01 07:09:51', '2019-06-01 07:09:51'),
(6, 'Đồng hồ Diamond D DM5308B5', 'dong-ho-diamond-d-dm5308b5', NULL, '<p>Đồng hồ Diamond D mang đến cho kh&aacute;ch h&agrave;ng vẻ đẹp tinh tế, vĩnh cửu như những vi&ecirc;n kim cương thuần khiết được tạo n&ecirc;n qua qu&aacute; tr&igrave;nh h&agrave;ng triệu năm. Với thiết kế tinh xảo, mặt k&iacute;nh sử dụng đ&aacute; saphia chống xước ho&agrave;n to&agrave;n đem đến cho qu&yacute; kh&aacute;ch một sản phẩm ho&agrave;n hảo với chất lượng vượt trội. Đ&oacute; l&agrave; vẻ đẹp vĩnh cửu. Sản phẩm được bảo h&agrave;nh trọn đời.</p>', '<p><a href=\"http://www.dangquangwatch.vn/sp/t-2/Dong-ho-nu.html\">Đồng hồ nữ</a> được thiết kế mang phong c&aacute;ch của ho&agrave;ng gia n&ecirc;n mỗi sản phẩm đều l&agrave; một t&aacute;c phẩm nghệ thuật. Sản phẩm thiết kế theo tinh thần v&agrave; gu thẩm mỹ của c&ocirc;ng nương Diana.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ diamond d DM37735B\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-diamond-d-DM37735B(1).jpg\" style=\"height:381px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ diamond d DM63055\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-diamond-d-DM63055(1).jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ diamond d DM65015\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-diamond-d-DM65015(1).jpg\" style=\"height:379px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ diamond d DM3645B5R\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/DM3645B5R(3).jpg\" style=\"height:359px; width:500px\" /></p>\r\n\r\n<p>Tại Việt Nam, Đăng Quang Watch được lựa chọn l&agrave; nh&agrave; ph&acirc;n phối độc quyền sản phẩm <strong>đồng hồ Diamond D</strong> của ch&uacute;ng t&ocirc;i.&nbsp;</p>', 4450000, NULL, NULL, '1949317567_Untitled-23.jpg', NULL, NULL, 'Đồng hồ Nữ', 'Quartz/Pin', '3 ATM', '25 mm', 'Hợp kim , đính đá swarovsky', 'Sapphire ( Kính chống trầy )', 'Hợp kim , đính đá swarovsky', NULL, '10 năm', 1, 2, 1, '2019-06-01 07:12:10', '2019-06-01 07:12:10'),
(7, 'Đồng hồ Diamond D DM5308B5IG', 'dong-ho-diamond-d-dm5308b5ig', 'nổi bật', '<p>Đồng hồ Diamond D mang đến cho kh&aacute;ch h&agrave;ng vẻ đẹp tinh tế, vĩnh cửu như những vi&ecirc;n kim cương thuần khiết được tạo n&ecirc;n qua qu&aacute; tr&igrave;nh h&agrave;ng triệu năm. Với thiết kế tinh xảo, mặt k&iacute;nh sử dụng đ&aacute; saphia chống xước ho&agrave;n to&agrave;n đem đến cho qu&yacute; kh&aacute;ch một sản phẩm ho&agrave;n hảo với chất lượng vượt trội. Đ&oacute; l&agrave; vẻ đẹp vĩnh cửu. Sản phẩm được bảo h&agrave;nh trọn đời.</p>', '<p><a href=\"http://www.dangquangwatch.vn/sp/t-2/Dong-ho-nu.html\">Đồng hồ nữ</a> được thiết kế mang phong c&aacute;ch của ho&agrave;ng gia n&ecirc;n mỗi sản phẩm đều l&agrave; một t&aacute;c phẩm nghệ thuật. Sản phẩm thiết kế theo tinh thần v&agrave; gu thẩm mỹ của c&ocirc;ng nương Diana.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ diamond d DM37735B\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-diamond-d-DM37735B(1).jpg\" style=\"height:381px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ diamond d DM63055\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-diamond-d-DM63055(1).jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ diamond d DM65015\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-diamond-d-DM65015(1).jpg\" style=\"height:379px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ diamond d DM3645B5R\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/DM3645B5R(3).jpg\" style=\"height:359px; width:500px\" /></p>\r\n\r\n<p>Tại Việt Nam, Đăng Quang Watch được lựa chọn l&agrave; nh&agrave; ph&acirc;n phối độc quyền sản phẩm <strong>đồng hồ Diamond D</strong> của ch&uacute;ng t&ocirc;i.&nbsp;</p>', 5000000, NULL, NULL, '2127487811_dong-ho-diamond-d-DM5308B5IG.jpg', 'Anh', 'China', 'Đồng hồ Nữ', 'Quartz/Pin', '3ATM', '24mm', 'Hợp kim mạ PVD , đính đá swarovsky', 'Sapphire ( Kính chống trầy )', 'Hợp kim mạ PVD , đính đá swarovsky', NULL, '10 năm', 2, 2, 1, '2019-06-01 07:14:09', '2019-06-01 13:11:39'),
(8, 'Đồng hồ Diamond D DM38025IG', 'dong-ho-diamond-d-dm38025ig', NULL, '<p>Đồng hồ Diamond D mang đến cho kh&aacute;ch h&agrave;ng vẻ đẹp tinh tế, vĩnh cửu như những vi&ecirc;n kim cương thuần khiết được tạo n&ecirc;n qua qu&aacute; tr&igrave;nh h&agrave;ng triệu năm. Với thiết kế tinh xảo, mặt k&iacute;nh sử dụng đ&aacute; saphia chống xước ho&agrave;n to&agrave;n đem đến cho qu&yacute; kh&aacute;ch một sản phẩm ho&agrave;n hảo với chất lượng vượt trội. Đ&oacute; l&agrave; vẻ đẹp vĩnh cửu. Sản phẩm được bảo h&agrave;nh trọn đời.</p>', '<p><a href=\"http://www.dangquangwatch.vn/sp/t-2/Dong-ho-nu.html\">Đồng hồ nữ</a> được thiết kế mang phong c&aacute;ch của ho&agrave;ng gia n&ecirc;n mỗi sản phẩm đều l&agrave; một t&aacute;c phẩm nghệ thuật. Sản phẩm thiết kế theo tinh thần v&agrave; gu thẩm mỹ của c&ocirc;ng nương Diana.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ diamond d DM37735B\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-diamond-d-DM37735B(1).jpg\" style=\"height:381px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ diamond d DM63055\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-diamond-d-DM63055(1).jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ diamond d DM65015\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-diamond-d-DM65015(1).jpg\" style=\"height:379px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ diamond d DM3645B5R\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/DM3645B5R(3).jpg\" style=\"height:359px; width:500px\" /></p>\r\n\r\n<p>Tại Việt Nam, Đăng Quang Watch được lựa chọn l&agrave; nh&agrave; ph&acirc;n phối độc quyền sản phẩm <strong>đồng hồ Diamond D</strong> của ch&uacute;ng t&ocirc;i.&nbsp;</p>', 4130000, NULL, NULL, '731082631_Untitled-24.jpg', 'Anh', 'China', 'Đồng hồ Nữ', 'Quartz/Pin', '3 ATM', '26mm', 'Hợp kim mạ PVD rose gold , đính đá swarovsky', 'Sapphire ( Kính chống trầy )', 'Hợp kim mạ PVD rose gold , đính đá swarovsky', NULL, '10 năm', 1, 2, 1, '2019-06-01 07:16:09', '2019-06-01 07:16:09'),
(9, 'Đồng hồ Aries Gold AG-G903 S-W', 'dong-ho-aries-gold-ag-g903-s-w', NULL, '<p>Aries Gold l&agrave; h&atilde;ng đồng hồ được th&agrave;nh lập v&agrave;o năm 1928 bởi một nh&oacute;m kỹ sư Ch&acirc;u &Acirc;u tại Thụy Sỹ, họ c&ugrave;ng chung một mục đ&iacute;ch: tạo ra những chiếc đồng hồ cao cấp mạnh mẽ v&agrave; c&oacute; độ ch&iacute;nh x&aacute;c cao.</p>', '<p style=\"text-align:justify\">Mong muốn ph&aacute;t huy những tinh hoa di sản của đồng hồ Thụy Sĩ. Aries Gold sớm trở th&agrave;nh một thương hiệu uy t&iacute;n, cao cấp quốc tế. Đối với c&aacute;c nh&agrave; thiết kế v&agrave; kỹ sư của Aries Gold &nbsp;niềm đam m&ecirc; sản xuất đồng hồ ch&iacute;nh l&agrave; &nbsp;nguồn cảm hứng s&aacute;ng tạo để chế t&aacute;c những sản phẩm chất lượng cao nhất.&nbsp;Mỗi chiếc đồng hồ Aries Gold đều được ho&agrave;n th&agrave;nh dưới b&agrave;n tay tỉ mỉ, d&agrave;y dặn kỹ năng v&agrave; kinh nghiệm của c&aacute;c nghệ nh&acirc;n bậc thầy .&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ aries gold AG-G102 G-SG\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-aries-gold-AG-G102%20G-SG(2).jpg\" style=\"height:338px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Vượt qu&aacute; sự mong đợi của những ai đang sở hữu một chiếc <a href=\"http://www.dangquangwatch.vn\">đồng hồ đeo tay</a> Aries Gold b&ecirc;n cạnh độ ch&iacute;nh x&aacute;c cao về mặt thời gian, sự tinh tế trong mỗi thiết kế đ&atilde; chinh phục v&agrave; l&agrave;m h&agrave;i long những kh&aacute;ch h&atilde;ng kh&oacute; t&iacute;nh.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ aries gold AG-G727 RD-ROSE\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-aries-gold-AG-G727%20RD-ROSE(7).jpg\" style=\"height:341px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Hiện nay, thương hiệu Aries Gold đ&atilde; hiện diện bền vững tại 11 quốc gia tr&ecirc;n to&agrave;n thế giới với hơn 200 điểm b&aacute;n h&agrave;ng. Tại Việt Nam Aries Gold l&agrave; một trong những thương hiệu mạnh được Đăng Quang Watch ph&acirc;n phối độc quyền. Với sự đa dạng trong thiết kế,của cả <a href=\"http://www.dangquangwatch.vn/sp/t-1/Dong-ho-nam.html\">đồng hồ nam</a> v&agrave; <a href=\"http://www.dangquangwatch.vn/sp/t-2/Dong-ho-nu.html\">đồng hồ nữ</a>,kh&aacute;ch h&agrave;ng sẽ dễ d&agrave;ng hơn trong việc lựa chọn sản phẩm ph&ugrave; hợp với c&aacute; t&iacute;nh, phong c&aacute;ch của m&igrave;nh.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ aries gold AG-L135 S-MOP\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/AG-L135%20S-MOP(1).jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ aries gold AG-LR68Q G-GD\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/AG-LR68Q%20G-GD.jpg\" style=\"height:348px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Kh&aacute;ch h&agrave;ng c&oacute; thể xem v&agrave; mua h&agrave;ng tại&nbsp;Website ch&iacute;nh thức Dangquangwatch.vn hoặc tại hệ thống showroom Đăng Quang tr&ecirc;n to&agrave;n quốc</p>', 9225000, NULL, NULL, '1316461343_Dong-ho-aries-gold-G903 S-W.png', 'Singapore', 'Singapore', 'Đồng hồ Nam', 'Automatic (Cơ)', '5ATM', '44mm', 'Dây da', 'Sapphire', 'Thép không gỉ', NULL, '10 năm', 1, 3, 1, '2019-06-01 07:22:15', '2019-06-01 07:22:15'),
(10, 'Đồng hồ Aries Gold AG-G101 G-BU', 'dong-ho-aries-gold-ag-g101-g-bu', NULL, '<p>Aries Gold l&agrave; h&atilde;ng đồng hồ được th&agrave;nh lập v&agrave;o năm 1928 bởi một nh&oacute;m kỹ sư Ch&acirc;u &Acirc;u tại Thụy Sỹ, họ c&ugrave;ng chung một mục đ&iacute;ch: tạo ra những chiếc đồng hồ cao cấp mạnh mẽ v&agrave; c&oacute; độ ch&iacute;nh x&aacute;c cao.</p>', '<p style=\"text-align:justify\">Mong muốn ph&aacute;t huy những tinh hoa di sản của đồng hồ Thụy Sĩ. Aries Gold sớm trở th&agrave;nh một thương hiệu uy t&iacute;n, cao cấp quốc tế. Đối với c&aacute;c nh&agrave; thiết kế v&agrave; kỹ sư của Aries Gold &nbsp;niềm đam m&ecirc; sản xuất đồng hồ ch&iacute;nh l&agrave; &nbsp;nguồn cảm hứng s&aacute;ng tạo để chế t&aacute;c những sản phẩm chất lượng cao nhất.&nbsp;Mỗi chiếc đồng hồ Aries Gold đều được ho&agrave;n th&agrave;nh dưới b&agrave;n tay tỉ mỉ, d&agrave;y dặn kỹ năng v&agrave; kinh nghiệm của c&aacute;c nghệ nh&acirc;n bậc thầy .&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ aries gold AG-G102 G-SG\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-aries-gold-AG-G102%20G-SG(2).jpg\" style=\"height:338px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Vượt qu&aacute; sự mong đợi của những ai đang sở hữu một chiếc <a href=\"http://www.dangquangwatch.vn\">đồng hồ đeo tay</a> Aries Gold b&ecirc;n cạnh độ ch&iacute;nh x&aacute;c cao về mặt thời gian, sự tinh tế trong mỗi thiết kế đ&atilde; chinh phục v&agrave; l&agrave;m h&agrave;i long những kh&aacute;ch h&atilde;ng kh&oacute; t&iacute;nh.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ aries gold AG-G727 RD-ROSE\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-aries-gold-AG-G727%20RD-ROSE(7).jpg\" style=\"height:341px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Hiện nay, thương hiệu Aries Gold đ&atilde; hiện diện bền vững tại 11 quốc gia tr&ecirc;n to&agrave;n thế giới với hơn 200 điểm b&aacute;n h&agrave;ng. Tại Việt Nam Aries Gold l&agrave; một trong những thương hiệu mạnh được Đăng Quang Watch ph&acirc;n phối độc quyền. Với sự đa dạng trong thiết kế,của cả <a href=\"http://www.dangquangwatch.vn/sp/t-1/Dong-ho-nam.html\">đồng hồ nam</a> v&agrave; <a href=\"http://www.dangquangwatch.vn/sp/t-2/Dong-ho-nu.html\">đồng hồ nữ</a>,kh&aacute;ch h&agrave;ng sẽ dễ d&agrave;ng hơn trong việc lựa chọn sản phẩm ph&ugrave; hợp với c&aacute; t&iacute;nh, phong c&aacute;ch của m&igrave;nh.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ aries gold AG-L135 S-MOP\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/AG-L135%20S-MOP(1).jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ aries gold AG-LR68Q G-GD\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/AG-LR68Q%20G-GD.jpg\" style=\"height:348px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Kh&aacute;ch h&agrave;ng c&oacute; thể xem v&agrave; mua h&agrave;ng tại&nbsp;Website ch&iacute;nh thức Dangquangwatch.vn hoặc tại hệ thống showroom Đăng Quang tr&ecirc;n to&agrave;n quốc</p>', 5472000, NULL, NULL, '948330290_AG-G101 G-BU.png', 'Singapore', 'Singapore', 'Đồng hồ Nam', 'Quartz/Pin', '5ATM', '43 mm', 'Dây da', 'Sapphire ( Kính chống trầy )', 'Thép không gỉ mạ PVD', NULL, '10 năm', 1, 3, 1, '2019-06-01 07:24:35', '2019-06-01 07:24:35'),
(11, 'Đồng hồ Aries Gold AG-PS310L S-GOLD', 'dong-ho-aries-gold-ag-ps310l-s-gold', NULL, '<p>Aries Gold l&agrave; h&atilde;ng đồng hồ được th&agrave;nh lập v&agrave;o năm 1928 bởi một nh&oacute;m kỹ sư Ch&acirc;u &Acirc;u tại Thụy Sỹ, họ c&ugrave;ng chung một mục đ&iacute;ch: tạo ra những chiếc đồng hồ cao cấp mạnh mẽ v&agrave; c&oacute; độ ch&iacute;nh x&aacute;c cao.</p>', '<p style=\"text-align:justify\">Mong muốn ph&aacute;t huy những tinh hoa di sản của đồng hồ Thụy Sĩ. Aries Gold sớm trở th&agrave;nh một thương hiệu uy t&iacute;n, cao cấp quốc tế. Đối với c&aacute;c nh&agrave; thiết kế v&agrave; kỹ sư của Aries Gold &nbsp;niềm đam m&ecirc; sản xuất đồng hồ ch&iacute;nh l&agrave; &nbsp;nguồn cảm hứng s&aacute;ng tạo để chế t&aacute;c những sản phẩm chất lượng cao nhất.&nbsp;Mỗi chiếc đồng hồ Aries Gold đều được ho&agrave;n th&agrave;nh dưới b&agrave;n tay tỉ mỉ, d&agrave;y dặn kỹ năng v&agrave; kinh nghiệm của c&aacute;c nghệ nh&acirc;n bậc thầy .&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ aries gold AG-G102 G-SG\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-aries-gold-AG-G102%20G-SG(2).jpg\" style=\"height:338px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Vượt qu&aacute; sự mong đợi của những ai đang sở hữu một chiếc <a href=\"http://www.dangquangwatch.vn\">đồng hồ đeo tay</a> Aries Gold b&ecirc;n cạnh độ ch&iacute;nh x&aacute;c cao về mặt thời gian, sự tinh tế trong mỗi thiết kế đ&atilde; chinh phục v&agrave; l&agrave;m h&agrave;i long những kh&aacute;ch h&atilde;ng kh&oacute; t&iacute;nh.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ aries gold AG-G727 RD-ROSE\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-aries-gold-AG-G727%20RD-ROSE(7).jpg\" style=\"height:341px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Hiện nay, thương hiệu Aries Gold đ&atilde; hiện diện bền vững tại 11 quốc gia tr&ecirc;n to&agrave;n thế giới với hơn 200 điểm b&aacute;n h&agrave;ng. Tại Việt Nam Aries Gold l&agrave; một trong những thương hiệu mạnh được Đăng Quang Watch ph&acirc;n phối độc quyền. Với sự đa dạng trong thiết kế,của cả <a href=\"http://www.dangquangwatch.vn/sp/t-1/Dong-ho-nam.html\">đồng hồ nam</a> v&agrave; <a href=\"http://www.dangquangwatch.vn/sp/t-2/Dong-ho-nu.html\">đồng hồ nữ</a>,kh&aacute;ch h&agrave;ng sẽ dễ d&agrave;ng hơn trong việc lựa chọn sản phẩm ph&ugrave; hợp với c&aacute; t&iacute;nh, phong c&aacute;ch của m&igrave;nh.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ aries gold AG-L135 S-MOP\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/AG-L135%20S-MOP(1).jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ aries gold AG-LR68Q G-GD\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/AG-LR68Q%20G-GD.jpg\" style=\"height:348px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Kh&aacute;ch h&agrave;ng c&oacute; thể xem v&agrave; mua h&agrave;ng tại&nbsp;Website ch&iacute;nh thức Dangquangwatch.vn hoặc tại hệ thống showroom Đăng Quang tr&ecirc;n to&agrave;n quốc</p>', 7672500, NULL, NULL, '1140914182_Untitled-31.jpg', 'Singapore', 'Singapore', 'Đồng hồ Nữ', 'Quartz/Pin', '3 ATM', '26.5 mm', 'Thép không gỉ mạ PVD + Ceramic', 'Sapphire ( Kính chống trầy )', 'Thép không gỉ mạ PVD', NULL, '10 năm', 1, 3, 1, '2019-06-01 07:28:06', '2019-06-01 07:28:06'),
(12, 'Đồng hồ nữ Aries Gold AG-L5032Z G-W-L', 'dong-ho-nu-aries-gold-ag-l5032z-g-w-l', NULL, '<p>Aries Gold l&agrave; h&atilde;ng đồng hồ được th&agrave;nh lập v&agrave;o năm 1928 bởi một nh&oacute;m kỹ sư Ch&acirc;u &Acirc;u tại Thụy Sỹ, họ c&ugrave;ng chung một mục đ&iacute;ch: tạo ra những chiếc đồng hồ cao cấp mạnh mẽ v&agrave; c&oacute; độ ch&iacute;nh x&aacute;c cao.</p>', '<p style=\"text-align:justify\">Mong muốn ph&aacute;t huy những tinh hoa di sản của đồng hồ Thụy Sĩ. Aries Gold sớm trở th&agrave;nh một thương hiệu uy t&iacute;n, cao cấp quốc tế. Đối với c&aacute;c nh&agrave; thiết kế v&agrave; kỹ sư của Aries Gold &nbsp;niềm đam m&ecirc; sản xuất đồng hồ ch&iacute;nh l&agrave; &nbsp;nguồn cảm hứng s&aacute;ng tạo để chế t&aacute;c những sản phẩm chất lượng cao nhất.&nbsp;Mỗi chiếc đồng hồ Aries Gold đều được ho&agrave;n th&agrave;nh dưới b&agrave;n tay tỉ mỉ, d&agrave;y dặn kỹ năng v&agrave; kinh nghiệm của c&aacute;c nghệ nh&acirc;n bậc thầy .&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ aries gold AG-G102 G-SG\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-aries-gold-AG-G102%20G-SG(2).jpg\" style=\"height:338px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Vượt qu&aacute; sự mong đợi của những ai đang sở hữu một chiếc <a href=\"http://www.dangquangwatch.vn\">đồng hồ đeo tay</a> Aries Gold b&ecirc;n cạnh độ ch&iacute;nh x&aacute;c cao về mặt thời gian, sự tinh tế trong mỗi thiết kế đ&atilde; chinh phục v&agrave; l&agrave;m h&agrave;i long những kh&aacute;ch h&atilde;ng kh&oacute; t&iacute;nh.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ aries gold AG-G727 RD-ROSE\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-aries-gold-AG-G727%20RD-ROSE(7).jpg\" style=\"height:341px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Hiện nay, thương hiệu Aries Gold đ&atilde; hiện diện bền vững tại 11 quốc gia tr&ecirc;n to&agrave;n thế giới với hơn 200 điểm b&aacute;n h&agrave;ng. Tại Việt Nam Aries Gold l&agrave; một trong những thương hiệu mạnh được Đăng Quang Watch ph&acirc;n phối độc quyền. Với sự đa dạng trong thiết kế,của cả <a href=\"http://www.dangquangwatch.vn/sp/t-1/Dong-ho-nam.html\">đồng hồ nam</a> v&agrave; <a href=\"http://www.dangquangwatch.vn/sp/t-2/Dong-ho-nu.html\">đồng hồ nữ</a>,kh&aacute;ch h&agrave;ng sẽ dễ d&agrave;ng hơn trong việc lựa chọn sản phẩm ph&ugrave; hợp với c&aacute; t&iacute;nh, phong c&aacute;ch của m&igrave;nh.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ aries gold AG-L135 S-MOP\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/AG-L135%20S-MOP(1).jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ aries gold AG-LR68Q G-GD\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/AG-LR68Q%20G-GD.jpg\" style=\"height:348px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Kh&aacute;ch h&agrave;ng c&oacute; thể xem v&agrave; mua h&agrave;ng tại&nbsp;Website ch&iacute;nh thức Dangquangwatch.vn hoặc tại hệ thống showroom Đăng Quang tr&ecirc;n to&agrave;n quốc</p>', 4725000, NULL, NULL, '276234753_3.jpg', 'Singapore', 'Singapore', 'Đồng hồ Nam', 'Quartz/Pin', '5 ATM', '26 mm', 'Dây da', 'Sapphire ( Kính chống trầy )', 'Thép không gỉ mạ PVD', NULL, '10 năm', 1, 3, 1, '2019-06-01 07:31:32', '2019-06-01 07:31:32'),
(13, 'Đồng hồ nữ Diamond D DM61165B', 'dong-ho-nu-diamond-d-dm61165b', NULL, '<p>Đồng hồ Diamond D mang đến cho kh&aacute;ch h&agrave;ng vẻ đẹp tinh tế, vĩnh cửu như những vi&ecirc;n kim cương thuần khiết được tạo n&ecirc;n qua qu&aacute; tr&igrave;nh h&agrave;ng triệu năm. Với thiết kế tinh xảo, mặt k&iacute;nh sử dụng đ&aacute; saphia chống xước ho&agrave;n to&agrave;n đem đến cho qu&yacute; kh&aacute;ch một sản phẩm ho&agrave;n hảo với chất lượng vượt trội. Đ&oacute; l&agrave; vẻ đẹp vĩnh cửu. Sản phẩm được bảo h&agrave;nh trọn đời.</p>', '<p><a href=\"http://www.dangquangwatch.vn/sp/t-2/Dong-ho-nu.html\">Đồng hồ nữ</a> được thiết kế mang phong c&aacute;ch của ho&agrave;ng gia n&ecirc;n mỗi sản phẩm đều l&agrave; một t&aacute;c phẩm nghệ thuật. Sản phẩm thiết kế theo tinh thần v&agrave; gu thẩm mỹ của c&ocirc;ng nương Diana.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ diamond d DM37735B\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-diamond-d-DM37735B(1).jpg\" style=\"height:381px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ diamond d DM63055\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-diamond-d-DM63055(1).jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ diamond d DM65015\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/dong-ho-diamond-d-DM65015(1).jpg\" style=\"height:379px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"đồng hồ diamond d DM3645B5R\" src=\"https://www.dangquangwatch.vn/lib/ckfinder/images/DM3645B5R(3).jpg\" style=\"height:359px; width:500px\" /></p>\r\n\r\n<p>Tại Việt Nam, Đăng Quang Watch được lựa chọn l&agrave; nh&agrave; ph&acirc;n phối độc quyền sản phẩm <strong>đồng hồ Diamond D</strong> của ch&uacute;ng t&ocirc;i.</p>', 2890000, 2312000, NULL, '2087780810_Untitled-42.jpg', 'Anh', 'China', 'Đồng hồ Nữ', 'Quartz', '3 ATM', '36mm', 'dây da', 'Sapphire ( Kính chống trầy )', 'Hợp kim , đính đá swarovsky', NULL, '10 năm', 1, 2, 1, '2019-06-01 07:42:18', '2019-06-01 07:42:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `chu_de` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `chu_de`, `anh`, `created_at`, `updated_at`) VALUES
(2, 'slide1', 'banner-1-1.jpg', NULL, NULL),
(3, 'slide2', 'banner-2.jpg', NULL, NULL),
(4, 'slide 3', 'banner-3.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `address`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dư chí công', 'duconggpdg@gmail.com', 984361236, '$2y$10$2OCCDvpFtdhBfRIApQr3EO.OD2EYXQvDyJOtuM/zjw2HBhWWuXJEe', 'hà nội', 1, 'vJD0DqYDO57ZDfB1a7c2G5Ip65Qa73qVYiV8Mtz7b2Hee9oXzLZAogFm2rij', '2019-06-08 02:24:46', '2019-06-14 07:24:55'),
(11, 'admin', 'admin@gmail.com', 985632689, '$2y$10$mniR1SlznMMyGhTV03d3nefOX1Sj.ERzUGf5A0nwv8WyZnS9PxFiS', 'hà nội', 2, 'mwIqNL65WcUWqY2ebIcIMBkzD1hN6UdurMzxtPZT', '2019-06-14 08:29:48', '2019-06-14 08:29:48');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_chu_de_unique` (`chu_de`),
  ADD KEY `blogs_danh_muc_id_foreign` (`danh_muc_id`);

--
-- Chỉ mục cho bảng `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_category_ten_danh_muc_unique` (`ten_danh_muc`);

--
-- Chỉ mục cho bảng `chi_tiet_dat_hang`
--
ALTER TABLE `chi_tiet_dat_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chi_tiet_dat_hang_id_san_pham_foreign` (`id_san_pham`),
  ADD KEY `chi_tiet_dat_hang_id_dat_hang_foreign` (`id_dat_hang`);

--
-- Chỉ mục cho bảng `dat_hang`
--
ALTER TABLE `dat_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dat_hang_id_khachhang_foreign` (`id_khachhang`);

--
-- Chỉ mục cho bảng `detail_imgs`
--
ALTER TABLE `detail_imgs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_imgs_pro_id_foreign` (`pro_id`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `loaisanpham_ten_loai_san_pham_unique` (`ten_loai_san_pham`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sanpham_ten_san_pham_unique` (`ten_san_pham`),
  ADD KEY `sanpham_id_danhmucsanpham_foreign` (`id_danhmucsanpham`);

--
-- Chỉ mục cho bảng `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`id`,`instance`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_dat_hang`
--
ALTER TABLE `chi_tiet_dat_hang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `dat_hang`
--
ALTER TABLE `dat_hang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT cho bảng `detail_imgs`
--
ALTER TABLE `detail_imgs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_danh_muc_id_foreign` FOREIGN KEY (`danh_muc_id`) REFERENCES `blog_category` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `chi_tiet_dat_hang`
--
ALTER TABLE `chi_tiet_dat_hang`
  ADD CONSTRAINT `chi_tiet_dat_hang_id_dat_hang_foreign` FOREIGN KEY (`id_dat_hang`) REFERENCES `dat_hang` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chi_tiet_dat_hang_id_san_pham_foreign` FOREIGN KEY (`id_san_pham`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `dat_hang`
--
ALTER TABLE `dat_hang`
  ADD CONSTRAINT `dat_hang_id_khachhang_foreign` FOREIGN KEY (`id_khachhang`) REFERENCES `khach_hang` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `detail_imgs`
--
ALTER TABLE `detail_imgs`
  ADD CONSTRAINT `detail_imgs_pro_id_foreign` FOREIGN KEY (`pro_id`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_id_danhmucsanpham_foreign` FOREIGN KEY (`id_danhmucsanpham`) REFERENCES `loaisanpham` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
