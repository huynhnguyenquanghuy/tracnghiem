-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 18, 2019 lúc 01:56 PM
-- Phiên bản máy phục vụ: 5.7.26
-- Phiên bản PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `exam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_info`
--

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` varchar(255) NOT NULL,
  `user_index` int(255) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `sub` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'Student',
  `avatar` longblob,
  `password` varchar(255) NOT NULL DEFAULT '123456',
  `regdate` varchar(255) NOT NULL,
  PRIMARY KEY (`user_index`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user_info`
--

INSERT INTO `user_info` (`user_id`, `user_index`, `full_name`, `sub`, `gender`, `email`, `address`, `role`, `avatar`, `password`, `regdate`) VALUES
('OES/000/00', 19, 'Admin Fullname', NULL, 'Male', 'admin@gmail.com', 'Admin Address', 'Admin', NULL, '123456', '27/03/2017'),
('STD:4511/32/9', 21, 'Nguyen Thanh Phong', NULL, 'Male', 'phongdeptraivodichthienha@gmail.com', 'deo noi', 'Student', NULL, '123456', '12th  November 2019 12:10:54 PM'),
('STD:5417/23/6', 22, '', NULL, '', '', '', 'Student', NULL, '123456', '17th  November 2019 04:22:21 AM'),
('STD:1500/25/3', 24, 'sadasd', 'toán', 'Male', 'abc@abc.com', '12das', 'Teacher', NULL, '123456', '18th  November 2019 01:56:09 PM');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
