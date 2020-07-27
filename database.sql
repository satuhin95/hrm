-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2020 at 05:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(45) NOT NULL,
  `browser` varchar(45) NOT NULL,
  `activity_datetime` datetime NOT NULL,
  `session_id` varchar(50) NOT NULL,
  `activity` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `user_id`, `ip`, `browser`, `activity_datetime`, `session_id`, `activity`) VALUES
(1, 0, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-09 17:31:51', '0', 'Logout'),
(2, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-09 17:33:37', '0', 'Log In'),
(4, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-10 08:45:10', '0', 'Log In'),
(5, 0, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-10 20:33:59', '0', 'Logout'),
(6, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-10 20:35:13', 'isuec34m9a2n5b3em9rs1n497mhmlbrh', 'Log In'),
(7, 0, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-10 22:25:03', 'b6imcgh6dbj1h0hg16lt5rdluf1qb7fq', 'Logout'),
(8, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-11 08:57:37', '0kuue6qk5a40siv7fau9kf6p04ko2i1q', 'Log In'),
(9, 0, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-11 11:12:02', 'gt8aqp3hq8f8q6eidsp57j9ro9dfum4b', 'Logout'),
(10, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-11 11:15:19', 'gt8aqp3hq8f8q6eidsp57j9ro9dfum4b', 'Log In'),
(11, 0, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-11 11:15:41', 'gt8aqp3hq8f8q6eidsp57j9ro9dfum4b', 'Logout'),
(12, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-11 11:15:45', 'gt8aqp3hq8f8q6eidsp57j9ro9dfum4b', 'Log In'),
(13, 0, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-11 16:38:47', 'ih61djgk264c2sul12fuibdbqtsuotgo', 'Logout'),
(14, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-11 16:38:54', 'ih61djgk264c2sul12fuibdbqtsuotgo', 'Log In'),
(15, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-11 17:59:51', 'c41qf7iu91v7rgbtp64pn3i13jha1k23', 'Logout'),
(16, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-11 17:59:56', 'c41qf7iu91v7rgbtp64pn3i13jha1k23', 'Log In'),
(17, 0, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-11 20:37:32', 'ojqs8e8fa02gov5mnv0dk2fvmupvhf45', 'Logout'),
(18, 15, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-11 20:37:43', 'ojqs8e8fa02gov5mnv0dk2fvmupvhf45', 'Log In'),
(19, 15, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-11 20:38:09', 'ojqs8e8fa02gov5mnv0dk2fvmupvhf45', 'Logout'),
(21, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-11 20:38:20', 'ojqs8e8fa02gov5mnv0dk2fvmupvhf45', 'Logout'),
(22, 15, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-11 20:38:33', 'ojqs8e8fa02gov5mnv0dk2fvmupvhf45', 'Log In'),
(23, 15, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-11 20:45:23', 'sdc9enjhje36rqtjbe05jkhet3jns3fh', 'Logout'),
(24, 0, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-11 20:45:30', 'sdc9enjhje36rqtjbe05jkhet3jns3fh', 'Log In'),
(25, 0, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-11 20:45:43', 'sdc9enjhje36rqtjbe05jkhet3jns3fh', 'Log In'),
(26, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-11 20:46:32', '9c1207hgmbssi7km2ir1bdlbu37hc1hq', 'Log In'),
(27, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-11 20:47:04', '9c1207hgmbssi7km2ir1bdlbu37hc1hq', 'Logout'),
(28, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-11 20:47:11', '9c1207hgmbssi7km2ir1bdlbu37hc1hq', 'Log In'),
(29, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-11 22:27:44', 'a25rq4j5ot5644dbh7eh9oc5a702rv11', 'Logout'),
(30, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-11 22:27:53', 'a25rq4j5ot5644dbh7eh9oc5a702rv11', 'Log In'),
(31, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-12 07:52:43', 'tvbg3ev2akcrhhea4p52s8gvp612p8b7', 'Log In'),
(32, 0, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-15 11:35:06', 'gsso03rrjksdh8sd1v009use5h778soe', 'Logout'),
(33, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-15 11:35:10', 'gsso03rrjksdh8sd1v009use5h778soe', 'Log In'),
(34, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-15 17:43:36', 'ngkaa3ijrcnkh9f884lpvjvl0rrgj0cv', 'Log In'),
(35, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-15 20:03:07', 'iq0mqqis2fb9d3q54vfeg3ut3a9k4gah', 'Logout'),
(36, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-15 20:03:59', 'iq0mqqis2fb9d3q54vfeg3ut3a9k4gah', 'Log In'),
(37, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-15 20:04:49', 'iq0mqqis2fb9d3q54vfeg3ut3a9k4gah', 'Logout'),
(38, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-15 20:10:38', 'g9bvtmsbhpg070t7dn78cv5l3l8aqs5s', 'Log In'),
(39, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-15 20:21:47', 'mh36eqlsbs5v61krop6fv8sank519tp9', 'Logout'),
(40, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-15 20:24:26', 'mh36eqlsbs5v61krop6fv8sank519tp9', 'Log In'),
(41, 0, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-16 08:47:09', 'l1as6rdjusba33n85vtv12hdk6c5jiru', 'Logout'),
(42, 0, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-16 08:48:23', 'l1as6rdjusba33n85vtv12hdk6c5jiru', 'Logout'),
(43, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-16 08:50:03', 'l1as6rdjusba33n85vtv12hdk6c5jiru', 'Log In'),
(44, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-16 08:50:13', 'l1as6rdjusba33n85vtv12hdk6c5jiru', 'Logout'),
(45, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-16 08:50:22', 'l1as6rdjusba33n85vtv12hdk6c5jiru', 'Log In'),
(46, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-17 14:02:33', 'qd5vj4aqig8u8dptfhngc8uf71n6s64a', 'Log In'),
(47, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-17 16:30:50', '2rre9r6qqdo1iabj5lqbai58otqffgr9', 'Leave  : Apply'),
(48, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-17 16:35:25', 'nlfds30mcnfm8asrq872go0lt1ac1klj', 'Logout'),
(49, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-20 08:50:31', 'plu19grn6srjtqsahqg730plb57ks60u', 'Log In'),
(50, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-20 09:24:55', 'tbcbk4h8it3sgkd5i40vhfssms5k3m7l', 'Logout'),
(51, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-20 11:17:46', 'i43ip3e9b5eht3jdfm8vffdsd0nevvku', 'Log In'),
(52, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-20 11:43:00', '0lts8g1mj6d5osqfcqv1dbbj8iho57g9', 'Logout'),
(53, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-20 11:44:44', '0lts8g1mj6d5osqfcqv1dbbj8iho57g9', 'Log In'),
(54, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-20 14:42:00', 'r99t8atqh067534uv714ng5d011nvkt9', 'Log In'),
(55, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-20 15:06:56', 'f3o53lstvcpk03knhh1s0iu38i5mj7ph', 'Employees: Insert'),
(56, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-20 15:09:32', 'f3o53lstvcpk03knhh1s0iu38i5mj7ph', 'Create User'),
(57, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-20 15:10:13', 'f3o53lstvcpk03knhh1s0iu38i5mj7ph', ' User : Update'),
(58, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-20 15:10:44', '354qv1o2m7lkvucd8b3i6uuh6vnv5j83', 'Logout'),
(59, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-20 16:02:00', 'e2a0ug58uj7cdf5j4ki9s4ecr55qssud', 'Log In'),
(60, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-20 16:03:06', 'e2a0ug58uj7cdf5j4ki9s4ecr55qssud', 'Leave  Apply: Accept'),
(61, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-20 16:03:40', 'e2a0ug58uj7cdf5j4ki9s4ecr55qssud', ' Selery  : Pay'),
(62, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-20 16:04:52', 'e2a0ug58uj7cdf5j4ki9s4ecr55qssud', ' Selery  : Pay'),
(63, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-20 16:06:55', 'e2a0ug58uj7cdf5j4ki9s4ecr55qssud', 'Leave  : Apply'),
(64, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-20 16:07:19', '41nnm6tpoi1u04q82qoln6k0ejkpipq4', 'Leave  Apply: Accept'),
(65, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-20 16:09:22', '41nnm6tpoi1u04q82qoln6k0ejkpipq4', 'Logout'),
(66, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-25 16:39:00', 'pa5mm7k9qj2nmamcf8e29lde8ts278mi', 'Log In'),
(67, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-25 17:09:04', 'kluc0h62kkvmgn5u37khsurpg8gmfmh2', 'Leave  : Apply'),
(68, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-25 17:34:31', '0gvmgj4l6sgkhhtqgsod9dlj5ko3dcao', 'Leave  : Apply'),
(69, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-25 17:47:36', 'ab18rjpd8tkp8sm58cj1168il7cmmal1', 'Leave  Apply: Accept'),
(70, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-25 19:06:59', 'ti4td7ouga21mrnc958j751lo5apbe32', ' Performance Factor : Update'),
(71, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-25 19:45:41', '9fban5mjft70sm192qbcqmtm0gbtf4v4', 'Logout'),
(72, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 15:15:57', 'gign67bvcptpgho7mu94ia3emppptvf2', 'Log In'),
(73, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 15:23:56', 'culucumaqlda1t9mfh3tcik60g1jl10q', 'Logout'),
(74, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 15:25:54', 'culucumaqlda1t9mfh3tcik60g1jl10q', 'Log In'),
(75, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 16:05:04', '140b7oi4rfql10ehcgusvef2ebb1oa1d', 'Logout'),
(76, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 16:05:11', '140b7oi4rfql10ehcgusvef2ebb1oa1d', 'Log In'),
(77, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 16:13:30', 'dngbltd0nd4p0pv07ac4ue9d0hs4nnof', 'Logout'),
(78, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 16:13:33', 'dngbltd0nd4p0pv07ac4ue9d0hs4nnof', 'Log In'),
(79, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 16:16:27', 'dngbltd0nd4p0pv07ac4ue9d0hs4nnof', 'Logout'),
(80, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 16:16:34', '3naijuuafmijehackmm94d1e67aaith7', 'Log In'),
(81, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 16:20:28', '3naijuuafmijehackmm94d1e67aaith7', 'Logout'),
(82, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 16:20:36', '3naijuuafmijehackmm94d1e67aaith7', 'Log In'),
(83, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 16:25:31', 'pqbaok9omt538ab5dk2mr6lt5d4rdn43', 'Leave  : Apply'),
(84, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 17:02:23', '1m39osd9ssmpneqs3r60amo88p11n60v', 'Logout'),
(85, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 17:04:21', '1m39osd9ssmpneqs3r60amo88p11n60v', 'Log In'),
(86, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 17:17:30', 'tgh8rkc3hakqa4li1f13l7rd1p41qqdj', 'Employees: Update'),
(87, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 17:20:00', 'pldhria3a8ks69hrhbgiqke5v6bgai98', 'Employees: Insert'),
(88, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 17:21:56', 'pldhria3a8ks69hrhbgiqke5v6bgai98', 'Employees: Update'),
(89, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 17:22:04', 'pldhria3a8ks69hrhbgiqke5v6bgai98', 'Employees: Update'),
(90, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 17:23:30', 'pldhria3a8ks69hrhbgiqke5v6bgai98', 'Logout'),
(91, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 17:23:40', 'pldhria3a8ks69hrhbgiqke5v6bgai98', 'Log In'),
(92, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 17:24:20', 'fvp72pf4bo13rig81fdsnsmpltg09pa0', 'Logout'),
(93, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 17:24:25', 'fvp72pf4bo13rig81fdsnsmpltg09pa0', 'Log In'),
(94, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 20:21:13', 'aheh1mdj2s02n3r95fahk7pi5vnh5c54', 'Log In'),
(95, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 20:21:48', 'aheh1mdj2s02n3r95fahk7pi5vnh5c54', 'Logout'),
(96, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 20:21:53', 'aheh1mdj2s02n3r95fahk7pi5vnh5c54', 'Log In'),
(97, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 20:42:38', 'k2ak274pr94f4edhsuie4e7ok4sa7pm8', 'Logout'),
(98, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 20:42:46', 'k2ak274pr94f4edhsuie4e7ok4sa7pm8', 'Log In'),
(99, 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 21:09:52', 'kjmphkp694fnfm28rt1ppdt1tmm52a2i', 'Logout'),
(100, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 21:09:58', 'kjmphkp694fnfm28rt1ppdt1tmm52a2i', 'Log In'),
(101, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:', '2020-07-27 21:51:45', '97jdlc83pn6qqiegf3m8l8al3jbgkogd', 'Logout');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_trans`
--

CREATE TABLE `attendance_trans` (
  `id` int(10) UNSIGNED NOT NULL,
  `emp_id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `in_time` time NOT NULL,
  `out_time` time NOT NULL,
  `type` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_trans`
--

INSERT INTO `attendance_trans` (`id`, `emp_id`, `date`, `in_time`, `out_time`, `type`) VALUES
(1, 1, '2020-07-12', '09:00:00', '17:00:00', 1),
(2, 2, '2020-07-12', '09:00:00', '17:00:00', 1),
(3, 1, '2020-07-13', '09:00:00', '17:00:00', 2),
(5, 1, '2020-07-17', '09:00:00', '17:00:00', 2),
(6, 2, '2020-07-17', '09:00:00', '17:00:00', 2),
(7, 1, '2020-07-20', '09:00:00', '17:00:00', 1),
(8, 2, '2020-07-20', '09:00:00', '17:00:00', 2),
(9, 1, '2020-07-20', '09:00:00', '17:00:00', 1),
(10, 2, '2020-07-20', '09:00:00', '17:00:00', 2),
(15, 1, '2020-07-25', '09:00:00', '17:00:00', 1),
(16, 2, '2020-07-25', '09:00:00', '17:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL DEFAULT '',
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `title`, `description`) VALUES
(1, 'Engineering', 'Engineering is the use of scientific principles to design and build machines, structures, and other items, including bridges, tunnels, roads, vehicles, and buildings'),
(2, 'Marketing', 'Marketing is the study and management of exchange relationships. It is the business process of identifying, anticipating and satisfying customers\' needs and wants.'),
(3, 'Admin', 'Admin. Manage G Suite for your organization. Easily add users, manage devices, and configure security and settings so your data stays safe'),
(4, 'Sales', 'Sales are activities related to selling or the number of goods sold in a given targeted time period. The delivery of a service for a cost is also considered a sale');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL DEFAULT '',
  `contact` varchar(45) NOT NULL DEFAULT '',
  `joining_date` datetime DEFAULT NULL,
  `email` varchar(45) NOT NULL DEFAULT '',
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `image` varchar(150) NOT NULL,
  `position` varchar(45) NOT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `password` varchar(45) NOT NULL,
  `address` varchar(150) NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `contact`, `joining_date`, `email`, `user_id`, `image`, `position`, `dept_id`, `password`, `address`, `status`) VALUES
(1, 'Roni Ahmed', '01521231258', '2020-07-06 00:00:00', 'roni@gmail.com', 2, 'admin.jpg', 'Admin', NULL, '', '', 0),
(2, 'Saifuddin', '01943166842', '2020-07-07 00:00:00', 'saif@gmail.com', 4, 'saif.jpg', 'Manager', NULL, '', '', 0),
(3, 'Mamun', '01824489294', '2020-07-08 00:00:00', 'mamun@gmail.com', 0, '37673994_1839765109422209_2879770108769599488_o_3.jpg', 'Manager', NULL, 'c8e36a853fe91f3a4a3c4d739e830139', '', 0),
(4, 'saif', '01824489294', '2020-07-08 00:00:00', 'saif@gmail.com', 1, 'saif_123.jpg', 'Manager', NULL, '81dc9bdb52d04dc20036dbd8313ed055', '', 0),
(5, 'Employee', '01824489294', '2020-07-20 00:00:00', 'Employee@gmail.com', 16, 'download_123.png', 'Manager', 0, 'fa5473530e4d1a5a1e1eb53d2fedb10c', '', 0),
(6, 'Goni', '01824489294', '2020-07-28 00:00:00', 'goni@gmail.com', NULL, '110180139_2367165450254633_7854786868086530030_n_123.jpg', 'Manager', 0, 'a972b504d38a4c437df490d19be9e75a', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `emp_attendance_config`
--

CREATE TABLE `emp_attendance_config` (
  `id` int(10) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `has_ot` tinyint(1) DEFAULT 0,
  `in_time` time NOT NULL,
  `out_time` time NOT NULL,
  `week_day` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_attendance_config`
--

INSERT INTO `emp_attendance_config` (`id`, `emp_id`, `has_ot`, `in_time`, `out_time`, `week_day`) VALUES
(1, 1, 0, '09:00:00', '17:00:00', 'Friday'),
(2, 2, 0, '09:00:00', '17:00:00', 'Friday');

-- --------------------------------------------------------

--
-- Table structure for table `emp_leave_trans`
--

CREATE TABLE `emp_leave_trans` (
  `id` int(10) UNSIGNED NOT NULL,
  `emp_id` int(10) UNSIGNED NOT NULL,
  `reason_id` int(10) UNSIGNED NOT NULL,
  `leave_cat_id` int(10) UNSIGNED NOT NULL,
  `emp_remark` text NOT NULL,
  `admin_remark` text NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_leave_trans`
--

INSERT INTO `emp_leave_trans` (`id`, `emp_id`, `reason_id`, `leave_cat_id`, `emp_remark`, `admin_remark`, `from_date`, `to_date`, `admin_id`) VALUES
(1, 1, 1, 1, 'In publishing and graphic design', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '2020-07-11', '2020-07-20', 1),
(2, 2, 3, 6, 'In publishing and graphic design', ' Lorem ipsum dolor sit amet, consectetur adipiscin.', '2020-07-11', '2020-07-20', 1),
(3, 2, 1, 1, 'Generate Lorem Ipsum placeholder', ' ddd', '2020-07-17', '2020-07-20', 1),
(4, 2, 3, 4, 'ddd', ' dfgg', '2020-07-22', '2020-07-30', 1),
(5, 2, 2, 4, 'dd', ' OK', '2020-07-25', '2020-07-31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `emp_salary_config`
--

CREATE TABLE `emp_salary_config` (
  `id` int(10) UNSIGNED NOT NULL,
  `emp_id` int(10) UNSIGNED NOT NULL,
  `head_id` int(10) UNSIGNED NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_salary_config`
--

INSERT INTO `emp_salary_config` (`id`, `emp_id`, `head_id`, `amount`) VALUES
(1, 1, 1, 10000),
(2, 1, 2, 500),
(3, 1, 3, 1200),
(4, 1, 4, 300),
(5, 1, 5, 200),
(6, 2, 1, 8000),
(7, 2, 2, 1500),
(8, 2, 3, 1000),
(9, 2, 4, 300),
(11, 2, 5, 100);

-- --------------------------------------------------------

--
-- Table structure for table `leave_application`
--

CREATE TABLE `leave_application` (
  `id` int(10) UNSIGNED NOT NULL,
  `leave_cat_id` int(10) UNSIGNED NOT NULL,
  `emp_id` int(10) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `reason_id` int(10) UNSIGNED NOT NULL,
  `emp_remark` text NOT NULL,
  `leave_status_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_application`
--

INSERT INTO `leave_application` (`id`, `leave_cat_id`, `emp_id`, `start_date`, `end_date`, `reason_id`, `emp_remark`, `leave_status_id`) VALUES
(1, 1, 1, '2020-07-11', '2020-07-20', 1, 'In publishing and graphic design', 1),
(4, 6, 2, '2020-07-15', '2020-07-20', 3, 'In publishing and graphic design', 0),
(5, 1, 2, '2020-07-17', '2020-07-20', 1, 'Generate Lorem Ipsum placeholder', 1),
(6, 4, 2, '2020-07-22', '2020-07-30', 3, 'ddd', 1),
(7, 4, 2, '2020-07-25', '2020-07-25', 2, 'dd', 0),
(8, 4, 2, '2020-07-25', '2020-07-25', 2, 'dd', 1),
(9, 5, 4, '2020-07-27', '2020-07-28', 2, 'ddd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `leave_category`
--

CREATE TABLE `leave_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_category`
--

INSERT INTO `leave_category` (`id`, `name`) VALUES
(1, 'Sick leave'),
(4, 'Casual leave'),
(5, 'Personal leave');

-- --------------------------------------------------------

--
-- Table structure for table `leave_config`
--

CREATE TABLE `leave_config` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `emp_id` int(10) UNSIGNED NOT NULL,
  `days` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_config`
--

INSERT INTO `leave_config` (`id`, `cat_id`, `emp_id`, `days`) VALUES
(1, 1, 1, 10),
(2, 4, 1, 5),
(3, 1, 2, 15),
(4, 4, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `leave_reason`
--

CREATE TABLE `leave_reason` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_reason`
--

INSERT INTO `leave_reason` (`id`, `name`) VALUES
(1, 'Fever'),
(2, 'Headache'),
(3, 'Marriage ceremony'),
(4, 'Marriage Anniversary ');

-- --------------------------------------------------------

--
-- Table structure for table `payroll_head`
--

CREATE TABLE `payroll_head` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `type` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payroll_head`
--

INSERT INTO `payroll_head` (`id`, `name`, `type`) VALUES
(1, 'Basic', 1),
(2, 'Bonus', 1),
(3, 'House Rent', 1),
(4, 'Medical allowance', 1),
(5, 'Payroll tax', 2);

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `id` int(10) UNSIGNED NOT NULL,
  `emp_id` int(10) UNSIGNED NOT NULL,
  `factor_id` int(10) UNSIGNED NOT NULL,
  `rateing` int(10) UNSIGNED NOT NULL,
  `remark` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`id`, `emp_id`, `factor_id`, `rateing`, `remark`) VALUES
(1, 1, 1, 1, 'He is a Best performare1');

-- --------------------------------------------------------

--
-- Table structure for table `performance_factor`
--

CREATE TABLE `performance_factor` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `performance_factor`
--

INSERT INTO `performance_factor` (`id`, `name`) VALUES
(1, 'Individual Contribution'),
(2, 'Professionalism'),
(3, 'Problem Solving and Judgment'),
(4, 'Interpersonal Skills'),
(5, 'Job-Specific Contribution'),
(6, 'Managing Employee Performance (for Managers and Supervisors)');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(10) UNSIGNED NOT NULL,
  `position_name` varchar(45) NOT NULL,
  `dept_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `position_name`, `dept_id`) VALUES
(1, 'Manager', 1),
(2, 'Marketing Coordinator', 2),
(3, 'Project Manager', 1),
(4, 'Engineer', 1),
(5, 'Chief Engineer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'manager'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `salary_trans`
--

CREATE TABLE `salary_trans` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `payment_date` date NOT NULL,
  `bill_date` date NOT NULL,
  `amount` float NOT NULL,
  `remark` varchar(45) NOT NULL,
  `head_id` int(10) UNSIGNED NOT NULL,
  `emp_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary_trans`
--

INSERT INTO `salary_trans` (`id`, `admin_id`, `payment_date`, `bill_date`, `amount`, `remark`, `head_id`, `emp_id`) VALUES
(1, 1, '2020-07-15', '2020-07-15', 11800, 'Lorem Ipsum is simply dummy text of the print', 0, 1),
(3, 1, '2020-07-20', '2020-07-20', 10700, 'ggg', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(45) NOT NULL DEFAULT '',
  `email` varchar(45) NOT NULL DEFAULT '',
  `password` varchar(45) NOT NULL DEFAULT '',
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `inactive` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `verify_code` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`, `inactive`, `verify_code`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 1, 0, 'c4ca4238a0b923820dcc509a6f75849b'),
(2, 'roni', 'roni@gmail.com', 'roni', 2, 1, 'c81e728d9d4c2f636f067f89cc14862c'),
(3, 'babu', 'babu@gmail.com', 'babu', 1, 1, 'eccbc87e4b5ce2fe28308fd9f2a7baf3'),
(4, 'saif', 'saifcm95@gmail.com', 'saif', 2, 0, '9bf31c7ff062936a96d3c8bd1f8f2ff3'),
(16, 'Employee', 'Employee@gmail.com', 'employee', 2, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_trans`
--
ALTER TABLE `attendance_trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_attendance_config`
--
ALTER TABLE `emp_attendance_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_leave_trans`
--
ALTER TABLE `emp_leave_trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_salary_config`
--
ALTER TABLE `emp_salary_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_application`
--
ALTER TABLE `leave_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_category`
--
ALTER TABLE `leave_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_config`
--
ALTER TABLE `leave_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_reason`
--
ALTER TABLE `leave_reason`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payroll_head`
--
ALTER TABLE `payroll_head`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `performance_factor`
--
ALTER TABLE `performance_factor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary_trans`
--
ALTER TABLE `salary_trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `attendance_trans`
--
ALTER TABLE `attendance_trans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `emp_attendance_config`
--
ALTER TABLE `emp_attendance_config`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `emp_leave_trans`
--
ALTER TABLE `emp_leave_trans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emp_salary_config`
--
ALTER TABLE `emp_salary_config`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `leave_application`
--
ALTER TABLE `leave_application`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `leave_category`
--
ALTER TABLE `leave_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `leave_config`
--
ALTER TABLE `leave_config`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leave_reason`
--
ALTER TABLE `leave_reason`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payroll_head`
--
ALTER TABLE `payroll_head`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `performance`
--
ALTER TABLE `performance`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `performance_factor`
--
ALTER TABLE `performance_factor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salary_trans`
--
ALTER TABLE `salary_trans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
