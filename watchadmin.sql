-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 19, 2019 lúc 06:03 AM
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
-- Cấu trúc bảng cho bảng `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `chu_de` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mieu_ta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
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
(8, 'bài viết demo 2', 'bai-viet-demo-2', '<p>nội dung chi tiết cho b&agrave;i viết n&agrave;y</p>', 'miêu tả bài viết đemo 1 ở đây', '1558190152_cover.jpg', 'admin', 0, 2, '2019-05-18 02:39:06', '2019-05-18 08:13:57'),
(9, 'Bài viết 1', 'bai-viet-1', NULL, NULL, NULL, NULL, 1, 1, '2019-05-18 08:23:06', '2019-05-18 08:23:06'),
(10, 'Bài viết 2', 'bai-viet-2', NULL, NULL, NULL, NULL, 1, 1, '2019-05-18 08:25:08', '2019-05-18 08:25:08'),
(11, 'bài viết 4', 'bai-viet-4', NULL, NULL, NULL, NULL, 1, 1, '2019-05-18 08:25:15', '2019-05-18 08:25:15'),
(12, 'bài viết 5', 'bai-viet-5', NULL, NULL, NULL, NULL, 1, 1, '2019-05-18 08:25:20', '2019-05-18 08:25:20'),
(13, 'bài viết 51', 'bai-viet-51', NULL, NULL, NULL, NULL, 1, 1, '2019-05-18 08:25:27', '2019-05-18 08:25:27'),
(14, 'Bài viết 11', 'bai-viet-11', NULL, NULL, NULL, NULL, 1, 1, '2019-05-18 08:25:32', '2019-05-18 08:25:32'),
(15, 'Bài viết 12', 'bai-viet-12', NULL, NULL, NULL, NULL, 1, 1, '2019-05-18 08:25:42', '2019-05-18 08:25:42'),
(16, 'Bài viết 22', 'bai-viet-22', NULL, NULL, NULL, NULL, 1, 1, '2019-05-18 08:25:56', '2019-05-18 08:25:56'),
(17, 'Bài viết 13', 'bai-viet-13', NULL, NULL, NULL, NULL, 1, 1, '2019-05-18 08:26:03', '2019-05-18 08:26:03'),
(18, 'Bài viết 14', 'bai-viet-14', NULL, NULL, NULL, NULL, 1, 1, '2019-05-18 08:26:19', '2019-05-18 08:26:19'),
(19, 'Bài viết 223', 'bai-viet-223', NULL, NULL, NULL, NULL, 1, 1, '2019-05-18 08:26:32', '2019-05-18 08:26:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_danh_muc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mieu_ta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog_category`
--

INSERT INTO `blog_category` (`id`, `ten_danh_muc`, `slug`, `mieu_ta`, `created_at`, `updated_at`) VALUES
(1, 'danh mục 1', 'danh-muc-1', '<p>Mi&ecirc;u tả danh mục ở đ&acirc;y</p>', '2019-05-17 20:03:44', '2019-05-17 20:03:44'),
(2, 'Danh mục 2', 'danh-muc-2', NULL, '2019-05-18 02:18:21', '2019-05-18 02:18:21'),
(3, 'Danh mục 3', 'danh-muc-3', NULL, '2019-05-18 02:18:29', '2019-05-18 02:18:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_dat_hang`
--

CREATE TABLE `chi_tiet_dat_hang` (
  `id` int(10) UNSIGNED NOT NULL,
  `so_luong` int(11) NOT NULL,
  `tong_tien` decimal(13,2) NOT NULL,
  `tinh_trang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_san_pham` int(10) UNSIGNED NOT NULL,
  `id_dat_hang` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dat_hang`
--

CREATE TABLE `dat_hang` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_khach_hang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_khach_hang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt_khach_hang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi_khach_hang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `tong_tien` decimal(13,2) NOT NULL,
  `ghi_chu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_khachhang` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list_anh`
--

CREATE TABLE `list_anh` (
  `id` int(10) UNSIGNED NOT NULL,
  `anh1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anh2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anh3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anh4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anh5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anh6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_sanpham` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_loai_san_pham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug_loai_san_pham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioi_thieu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anh_loai_san_pham` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(3, '2019_05_15_145105_create_blog_category_table', 1),
(4, '2019_05_15_145617_create_slide_table', 1),
(5, '2019_05_15_145931_create_khach_hang_table', 1),
(6, '2019_05_15_150347_create_loaisanpham_table', 1),
(7, '2019_05_15_150842_create_sanpham_table', 1),
(8, '2019_05_15_154751_create_dat_hang_table', 1),
(9, '2019_05_15_155348_create_chi_tiet_dat_hang_table', 1),
(10, '2019_05_15_155912_create_admin_users_table', 1),
(11, '2019_05_15_163238_create_blogs_table', 1),
(12, '2019_05_17_070649_create_list_anh_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_san_pham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mieu_ta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci,
  `gia_tien` decimal(13,0) DEFAULT NULL,
  `chiet_khau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_anh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
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
  `bao_hanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trang_thai` tinyint(4) NOT NULL,
  `noi_bat` tinyint(4) DEFAULT NULL,
  `id_danhmucsanpham` int(10) UNSIGNED NOT NULL,
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
(1, 'chủ đề 3', '1558238022_01b1341d4ad7af89f6c6.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_danh_muc_id_foreign` (`danh_muc_id`);

--
-- Chỉ mục cho bảng `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

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
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `list_anh`
--
ALTER TABLE `list_anh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `list_anh_id_sanpham_foreign` (`id_sanpham`);

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
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sanpham_id_danhmucsanpham_foreign` (`id_danhmucsanpham`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_dat_hang`
--
ALTER TABLE `chi_tiet_dat_hang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dat_hang`
--
ALTER TABLE `dat_hang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `list_anh`
--
ALTER TABLE `list_anh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `chi_tiet_dat_hang_id_dat_hang_foreign` FOREIGN KEY (`id_dat_hang`) REFERENCES `dat_hang` (`id`),
  ADD CONSTRAINT `chi_tiet_dat_hang_id_san_pham_foreign` FOREIGN KEY (`id_san_pham`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `dat_hang`
--
ALTER TABLE `dat_hang`
  ADD CONSTRAINT `dat_hang_id_khachhang_foreign` FOREIGN KEY (`id_khachhang`) REFERENCES `khach_hang` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `list_anh`
--
ALTER TABLE `list_anh`
  ADD CONSTRAINT `list_anh_id_sanpham_foreign` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_id_danhmucsanpham_foreign` FOREIGN KEY (`id_danhmucsanpham`) REFERENCES `loaisanpham` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
