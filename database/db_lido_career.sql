-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 27, 2023 at 07:59 PM
-- Server version: 10.9.4-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `db_lido_career`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch_job`
--

CREATE TABLE `batch_job` (
  `id_batch_job` int(11) NOT NULL,
  `id_batch` int(11) NOT NULL,
  `id_job` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batch_job`
--

INSERT INTO `batch_job` (`id_batch_job`, `id_batch`, `id_job`) VALUES
(1, 1, 4),
(2, 1, 1),
(3, 1, 2),
(4, 1, 5),
(5, 1, 3),
(6, 2, 5),
(7, 2, 3),
(8, 2, 4),
(9, 2, 1),
(10, 2, 2),
(11, 3, 5),
(14, 3, 1),
(15, 3, 2),
(16, 4, 5),
(21, 5, 5),
(22, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `batch_timeline`
--

CREATE TABLE `batch_timeline` (
  `id_batch` int(11) NOT NULL,
  `name_batch` varchar(225) NOT NULL,
  `start_date` datetime NOT NULL,
  `due_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batch_timeline`
--

INSERT INTO `batch_timeline` (`id_batch`, `name_batch`, `start_date`, `due_date`) VALUES
(3, 'BATCH 1', '2023-01-23 17:01:00', '2023-01-24 17:01:00'),
(4, 'BATCH 2', '2023-01-23 17:04:00', '2023-01-24 17:04:00'),
(5, 'BATCH 3', '2023-01-26 08:32:00', '2023-01-27 08:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL,
  `id_candidate` varchar(100) NOT NULL,
  `name_candidate` varchar(255) NOT NULL,
  `email_candidate` varchar(100) NOT NULL,
  `no_candidate` varchar(20) NOT NULL,
  `birthdate_candidate` varchar(50) NOT NULL,
  `jk_candidate` varchar(10) NOT NULL,
  `address_candidate` varchar(225) NOT NULL,
  `poskode_candidate` varchar(10) NOT NULL,
  `address2_candidate` text NOT NULL,
  `poskode2_candidate` varchar(255) NOT NULL,
  `noaddress_candidate` varchar(20) NOT NULL,
  `noaddress2_candidate` varchar(20) NOT NULL,
  `photo_candidate` varchar(100) NOT NULL,
  `is_active` int(10) NOT NULL,
  `state` int(11) NOT NULL DEFAULT 1 COMMENT '1, 2, 3',
  `date_created` datetime NOT NULL,
  `password_candidate` varchar(255) NOT NULL,
  `device_token` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `id_candidate`, `name_candidate`, `email_candidate`, `no_candidate`, `birthdate_candidate`, `jk_candidate`, `address_candidate`, `poskode_candidate`, `address2_candidate`, `poskode2_candidate`, `noaddress_candidate`, `noaddress2_candidate`, `photo_candidate`, `is_active`, `state`, `date_created`, `password_candidate`, `device_token`) VALUES
(1, 'TR202301001', 'John Doe', 'johndoe@example.com', '081234567890', 'DUDU, 2023-01-24', '1', 'JL MWAR, SINUNUKAN, KABUPATEN MANDAILING NATAL, SUMATERA UTARA', '12345', 'JL MWAR, SINUNUKAN, KABUPATEN MANDAILING NATAL, SUMATERA UTARA', '12345', '9727292828', '9727292828', 'file_1674705851_cam-1674705850072.jpg', 1, 1, '2023-01-18 09:12:36', '$2y$10$bQhSD/qe8ZXA/TIlaISZPOvu4btqCoAgfKUAGCPMkCgIfWmop515G', 'fDguAGgPOXK3h1LBodgXcN:APA91bE7d-xj7diLZ0mDIby-vymHHSsHMYlgVUqosR7FOyEOFJvD-siwPJFYHuzbc1LEUxhE_xs54fI_3dSO54YOssQ1XvzbBBdRc2NlPZcuV-ESMHEauHqj4l5A9prJmDZUVCAAXRb_'),
(2, 'TR202301002', 'Jane Smith', 'janesmith@example.com', '081234567891', '1980-02-02', '2', 'Jl. Example 2', '23456', '', '', '', '', '', 1, 0, '2023-01-18 09:12:36', '$2y$10$bQhSD/qe8ZXA/TIlaISZPOvu4btqCoAgfKUAGCPMkCgIfWmop515G', 'device_token'),
(3, 'TR202301003', 'Mike Brown', 'mikebrown@example.com', '081234567892', '1990-03-03', '1', 'Jl. Example 3', '34567', '', '', '', '', '', 1, 0, '2023-01-18 09:12:36', '$2y$10$bQhSD/qe8ZXA/TIlaISZPOvu4btqCoAgfKUAGCPMkCgIfWmop515G', 'device_token'),
(4, 'TR202301004', 'Emily Davis', 'emilydavis@example.com', '081234567893', 'MERDEN, 1993-07-18', '2', 'JL BEBER, SOGAEADU, KABUPATEN NIAS, SUMATERA UTARA', '45678', 'JL BEBER, SOGAEADU, KABUPATEN NIAS, SUMATERA UTARA', '45678', '0862712651', '0862712651', 'file_1674012787_Ariel-Tatum-1.jpg', 1, 0, '2023-01-18 09:12:36', '$2y$10$bQhSD/qe8ZXA/TIlaISZPOvu4btqCoAgfKUAGCPMkCgIfWmop515G', 'device_token'),
(5, 'TR202301005', 'Jacob Miller', 'jacobmiller@example.com', '081234567894', '2010-05-05', '1', 'Jl. Example 5', '56789', '', '', '', '', '', 1, 0, '2023-01-18 09:12:36', '$2y$10$bQhSD/qe8ZXA/TIlaISZPOvu4btqCoAgfKUAGCPMkCgIfWmop515G', 'device_token'),
(6, 'TR202301006', 'Amanda Wilson', 'amandawilson@example.com', '081234567895', 'BUDUM, 1986-06-18', '1', 'JL. KEMALA SARI, PAMBOANG, KABUPATEN MAJENE, SULAWESI BARAT', '67890', 'JL. KEMALA SARI, PAMBOANG, KABUPATEN MAJENE, SULAWESI BARAT', '67890', '0812342525', '0812342525', 'file_1674008583_anwar_bin_udin.jpeg', 1, 0, '2023-01-18 09:12:36', '$2y$10$bQhSD/qe8ZXA/TIlaISZPOvu4btqCoAgfKUAGCPMkCgIfWmop515G', 'device_token'),
(7, 'TR202301007', 'Michael Anderson', 'michaelanderson@example.com', '081234567896', '2030-07-07', '1', 'Jl. Example 7', '78901', '', '', '', '', '', 1, 0, '2023-01-18 09:12:36', '$2y$10$bQhSD/qe8ZXA/TIlaISZPOvu4btqCoAgfKUAGCPMkCgIfWmop515G', 'device_token'),
(8, 'TR202301008', 'Sophia Taylor', 'sophiataylor@example.com', '081234567897', '2040-08-08', '2', 'Jl. Example 8', '89012', '', '', '', '', '', 1, 0, '2023-01-18 09:12:36', '$2y$10$bQhSD/qe8ZXA/TIlaISZPOvu4btqCoAgfKUAGCPMkCgIfWmop515G', 'device_token'),
(9, 'TR202301009', 'Matthew Hernandez', 'matthewhernandez@example.com', '081234567898', '2050-09-09', '1', 'Jl. Example 9', '90123', '', '', '', '', '', 1, 0, '2023-01-18 09:12:36', '$2y$10$bQhSD/qe8ZXA/TIlaISZPOvu4btqCoAgfKUAGCPMkCgIfWmop515G', 'device_token'),
(10, 'TR202301010', 'Madison Moore', 'madisonmoore@example.com', '081234567899', '2060-10-10', '2', 'Jl. Example 10', '01234', '', '', '', '', '', 1, 0, '2023-01-18 09:12:36', '$2y$10$bQhSD/qe8ZXA/TIlaISZPOvu4btqCoAgfKUAGCPMkCgIfWmop515G', 'device_token');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_experience`
--

CREATE TABLE `candidate_experience` (
  `id_ce` int(11) NOT NULL,
  `id_candidate` int(11) NOT NULL,
  `name_company` varchar(100) NOT NULL,
  `type_company` varchar(100) NOT NULL,
  `last_position` varchar(225) NOT NULL,
  `employee_company` varchar(150) NOT NULL,
  `first_year` varchar(20) NOT NULL,
  `last_year` varchar(20) DEFAULT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidate_experience`
--

INSERT INTO `candidate_experience` (`id_ce`, `id_candidate`, `name_company`, `type_company`, `last_position`, `employee_company`, `first_year`, `last_year`, `description`, `date_created`) VALUES
(25, 56, 'APEM SD', 'KO', 'JH', '9', '2023-02', '2023-03', 'Place', '2023-01-14 09:18:34'),
(26, 56, 'TEST', 'HE', 'HRB', '7', '2023-01', '2023-06', 'HELO', '2023-01-17 08:42:02'),
(27, 6, 'PT. CHUAKS', 'CHUAKS', 'CHUAKERSZ', '7', '2023-01', '2023-07', 'The chuakersz', '2023-01-18 02:17:51'),
(28, 4, 'PT. EXAMPLE', 'EXAMPLE', 'EX', '4', '2023-07', '2023-11', 'Y', '2023-01-18 03:32:31'),
(29, 1, 'PIXAS STUDIO', 'PHOTOGRAPH', 'MANAGER', '6', '2021-06', NULL, 'HELLO WORLD IM JOHN DOE', '2023-01-20 09:31:22');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_file`
--

CREATE TABLE `candidate_file` (
  `id` int(11) NOT NULL,
  `id_candidate` int(11) NOT NULL,
  `file_pendukung` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidate_file`
--

INSERT INTO `candidate_file` (`id`, `id_candidate`, `file_pendukung`, `file_name`) VALUES
(1, 6, 'file_TR202301006-Amanda Wilson_1674009621_file-sample_500kB.docx', ''),
(2, 4, 'file_TR202301004-Emily Davis_1674012822_anwar_bin_udin.jpeg', '');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_study`
--

CREATE TABLE `candidate_study` (
  `id_candidate_study` int(11) NOT NULL,
  `study_level` varchar(200) NOT NULL,
  `name_school` varchar(255) NOT NULL,
  `major_school` varchar(255) NOT NULL,
  `year_first` varchar(20) NOT NULL,
  `year_last` varchar(20) NOT NULL,
  `id_candidate` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidate_study`
--

INSERT INTO `candidate_study` (`id_candidate_study`, `study_level`, `name_school`, `major_school`, `year_first`, `year_last`, `id_candidate`, `active`) VALUES
(1, 'Diploma 2, TEHNIK INFORMATIKA', 'SYSV INIT', 'SISTEM INFORMASI', '2014', '2018', 6, 0),
(2, 'Diploma 2, TEKNIK', 'SMK 1 GUWANO', 'INFORMATIKA', '2017', '2020', 4, 0),
(3, 'Diploma 2, H', 'SMP 1 WW', 's', '2023', '2101', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_token`
--

CREATE TABLE `candidate_token` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `id_division` int(11) NOT NULL,
  `name_division` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id_division`, `name_division`, `description`, `date_created`) VALUES
(1, 'LIDO', 'Bagian utama', '2023-01-18 09:26:00'),
(2, 'ETHES', 'ETHES', '2023-01-18 09:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `history_apply`
--

CREATE TABLE `history_apply` (
  `id_history` int(11) NOT NULL,
  `id_candidate_history` int(11) NOT NULL,
  `id_job_history` int(11) NOT NULL,
  `id_batch` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `state` int(11) NOT NULL,
  `urutan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history_apply`
--

INSERT INTO `history_apply` (`id_history`, `id_candidate_history`, `id_job_history`, `id_batch`, `date_created`, `state`, `urutan`) VALUES
(30, 1, 1, 3, '2023-01-27 15:12:06', 1, 1),
(31, 1, 2, 3, '2023-01-27 15:12:06', 1, 2),
(32, 1, 5, 3, '2023-01-27 19:35:42', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `history_timeline`
--

CREATE TABLE `history_timeline` (
  `id` int(11) NOT NULL,
  `id_candidate` int(11) NOT NULL,
  `id_timeline` int(11) NOT NULL,
  `id_job` int(11) NOT NULL,
  `id_batch` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history_timeline`
--

INSERT INTO `history_timeline` (`id`, `id_candidate`, `id_timeline`, `id_job`, `id_batch`, `status`) VALUES
(34, 1, 9, 1, 3, 1),
(35, 1, 9, 2, 3, 1),
(36, 1, 9, 5, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `job_vacancy`
--

CREATE TABLE `job_vacancy` (
  `id` int(11) NOT NULL,
  `id_job` int(11) NOT NULL,
  `id_division` int(11) NOT NULL,
  `name_job` varchar(100) NOT NULL,
  `requirement_job` text NOT NULL,
  `description_job` text NOT NULL,
  `is_active` int(11) NOT NULL,
  `grade_value` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_vacancy`
--

INSERT INTO `job_vacancy` (`id`, `id_job`, `id_division`, `name_job`, `requirement_job`, `description_job`, `is_active`, `grade_value`) VALUES
(1, 1, 1, 'KASIR', '<p>Kasir</p>\r\n', '<p>Kasir</p>\r\n', 1, 10),
(2, 2, 1, 'PRAMUNIAGA', '<p>Pramu</p>\r\n', '<p>Pramu</p>\r\n', 1, 5),
(3, 3, 1, 'HELPER', '<p>Helper</p>\r\n', '<p>Helper</p>\r\n', 1, 3),
(4, 4, 1, 'KASIR CADANGAN', '<p>Kasir</p>\r\n', '<p>Kasir</p>\r\n', 1, 7),
(5, 5, 2, 'Developer', '<ul>\r\n	<li>Paham coding</li>\r\n	<li>Bisa menggunakan MYSQL</li>\r\n</ul>\r\n', '<p>askdoiajdoiajdoiajdoisaoidsjiadoijsadoija</p>\r\n', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `link_timeline`
--

CREATE TABLE `link_timeline` (
  `id_link` int(11) NOT NULL,
  `nama_link` varchar(255) NOT NULL,
  `address_link` varchar(500) NOT NULL,
  `description_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `link_timeline`
--

INSERT INTO `link_timeline` (`id_link`, `nama_link`, `address_link`, `description_link`) VALUES
(1, 'FORM ADMINISTRASI KANDIDAT', 'https://go.link/lido-career-form-administrasi', 'GForm Administrasi'),
(2, 'MATERI TEST IQ', 'https://go.link/lido-career-test-iq', 'GForm Test IQ');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `company_title` varchar(200) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `company_logo` varchar(200) NOT NULL,
  `warna` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `company_title`, `company_name`, `company_logo`, `warna`) VALUES
(1, 'Lido Career Center', 'Lido Grosir', 'img_1674744993bs5.png', '#037c74');

-- --------------------------------------------------------

--
-- Table structure for table `setting_about`
--

CREATE TABLE `setting_about` (
  `id` int(11) NOT NULL,
  `about_image` varchar(255) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_subtitle` varchar(255) NOT NULL,
  `about_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting_about`
--

INSERT INTO `setting_about` (`id`, `about_image`, `about_title`, `about_subtitle`, `about_description`) VALUES
(1, 'img_1674744773bs5.png', 'Hello Guys', '#helloguys', 'Des'),
(2, 'img_1674744895bs5.png', 'Anwar Samsudin', '#lidogreep', 'Des');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id_karyawan` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `jenis_kelamin` int(15) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `tgl_kntrk` date NOT NULL,
  `akhir_kontrak` date NOT NULL,
  `status_kontrak` int(11) NOT NULL,
  `id_kantor` varchar(100) NOT NULL,
  `badan_hukum` int(11) NOT NULL,
  `no_rek` varchar(255) NOT NULL,
  `cuti_akses` int(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `password_karyawan` varchar(255) NOT NULL,
  `state` int(11) NOT NULL,
  `absensi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id_karyawan`, `nama`, `ttl`, `nik`, `jenis_kelamin`, `foto`, `email`, `no_hp`, `jabatan`, `alamat`, `tgl_kntrk`, `akhir_kontrak`, `status_kontrak`, `id_kantor`, `badan_hukum`, `no_rek`, `cuti_akses`, `created_date`, `password_karyawan`, `state`, `absensi`) VALUES
('67082018A2', 'Eri Setiyana', 'Temanggung, 19 June 2000', '3323065907000001', 2, '00default.jpg', 'erisetiyana19@gmail.com', '085782557251', 'AUDITOR', 'Rejosari,4,8,Tlogopucang,Kandangan,Temanggung,Jawa Tengah', '2021-05-12', '2023-05-12', 2, 'AAA', 1, '-', 2, '2018-08-09 00:00:00', 'e10adc3949ba59abbe56e057f20f883e', 1, 15),
('99071999A1', 'Julio Saputra', 'Temanggung, 09 July 1999', '', 1, '0120220812.png', 'saputrayulio1999@gmail.com', '081229220619', '', ',,,,Kandangan,Temanggung,Jawa Tengah', '0000-00-00', '2020-06-12', 0, 'AAA', 1, '-', 0, '2020-01-15 00:00:00', 'e10adc3949ba59abbe56e057f20f883e', 1, 22);

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `id_timeline` int(11) NOT NULL,
  `id_batch` int(11) NOT NULL,
  `kode_timeline` varchar(255) NOT NULL,
  `name_timeline` varchar(200) NOT NULL,
  `description_timeline` text NOT NULL,
  `start_date_time` datetime NOT NULL,
  `end_date_time` datetime NOT NULL,
  `id_link` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`id_timeline`, `id_batch`, `kode_timeline`, `name_timeline`, `description_timeline`, `start_date_time`, `end_date_time`, `id_link`) VALUES
(1, 1, 'TM-1-1', 'ADMINISTRASI', 'Administrasi Kandidat', '2023-01-20 16:45:00', '2023-01-22 16:45:00', 1),
(2, 1, 'TM-1-2', 'TEST IQ', 'Test IQ', '2023-01-23 16:46:00', '2023-01-25 16:46:00', 2),
(3, 1, 'TM-1-3', 'TEST MBTI', 'Test MBTI', '2023-01-26 16:46:00', '2023-01-27 16:46:00', 0),
(4, 1, 'TM-1-4', 'INTERVIEW', 'Interview', '2023-01-28 16:47:00', '2023-01-31 16:47:00', 0),
(5, 2, 'TM-2-1', 'ADMINISTRASI', 'Administrasi Kandidat', '2023-01-20 16:45:00', '2023-01-22 16:45:00', 1),
(6, 2, 'TM-2-2', 'TEST IQ', 'Test IQ', '2023-01-23 16:46:00', '2023-01-25 16:46:00', 2),
(7, 2, 'TM-2-3', 'TEST MBTI', 'Test MBTI', '2023-01-26 16:46:00', '2023-01-27 16:46:00', 0),
(8, 2, 'TM-2-4', 'INTERVIEW', 'Interview', '2023-01-28 16:47:00', '2023-01-31 16:47:00', 0),
(9, 3, 'TM-3-1', 'Administrasi', 'sadasdadas', '2023-01-26 17:02:00', '2023-01-26 17:02:00', 2),
(10, 3, 'TM-3-2', 'Test IQ', 'adsadasdadsadsadadad', '2023-01-27 17:02:00', '2023-01-27 17:03:00', 1),
(11, 4, 'TM-4-1', 'Administrasi', 'sadasdadas', '2023-01-26 17:02:00', '2023-01-26 17:02:00', 2),
(12, 4, 'TM-4-2', 'Test IQ', 'adsadasdadsadsadadad', '2023-01-27 17:02:00', '2023-01-27 17:03:00', 1),
(13, 5, 'TM-5-1', 'Test IQ', 'adsadasdadsadsadadad', '2023-01-27 17:02:00', '2023-01-27 17:03:00', 1),
(14, 5, 'TM-5-2', 'Administrasi', 'sadasdadas', '2023-01-26 17:02:00', '2023-01-26 17:02:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` int(5) NOT NULL,
  `status` int(5) NOT NULL DEFAULT 1,
  `gambar` varchar(225) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `email`, `role`, `status`, `gambar`, `created_date`) VALUES
(47, 'Super Admin', 'superadm', '5f4dcc3b5aa765d61d8327deb882cf99', 'superadmin@gmail.com', 1, 1, 'user_default.jpg', '2022-07-30 19:09:56'),
(51, 'ANWAR', 'adminb', '827ccb0eea8a706c4c34a16891f84e7b', 'anwarudin@gmail.com', 2, 1, '2444836.png', '2023-01-23 10:06:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch_job`
--
ALTER TABLE `batch_job`
  ADD PRIMARY KEY (`id_batch_job`);

--
-- Indexes for table `batch_timeline`
--
ALTER TABLE `batch_timeline`
  ADD PRIMARY KEY (`id_batch`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_experience`
--
ALTER TABLE `candidate_experience`
  ADD PRIMARY KEY (`id_ce`);

--
-- Indexes for table `candidate_file`
--
ALTER TABLE `candidate_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_study`
--
ALTER TABLE `candidate_study`
  ADD PRIMARY KEY (`id_candidate_study`);

--
-- Indexes for table `candidate_token`
--
ALTER TABLE `candidate_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id_division`);

--
-- Indexes for table `history_apply`
--
ALTER TABLE `history_apply`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `history_timeline`
--
ALTER TABLE `history_timeline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_vacancy`
--
ALTER TABLE `job_vacancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link_timeline`
--
ALTER TABLE `link_timeline`
  ADD PRIMARY KEY (`id_link`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_about`
--
ALTER TABLE `setting_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`id_timeline`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch_job`
--
ALTER TABLE `batch_job`
  MODIFY `id_batch_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `batch_timeline`
--
ALTER TABLE `batch_timeline`
  MODIFY `id_batch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `candidate_experience`
--
ALTER TABLE `candidate_experience`
  MODIFY `id_ce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `candidate_file`
--
ALTER TABLE `candidate_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `candidate_study`
--
ALTER TABLE `candidate_study`
  MODIFY `id_candidate_study` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `candidate_token`
--
ALTER TABLE `candidate_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id_division` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `history_apply`
--
ALTER TABLE `history_apply`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `history_timeline`
--
ALTER TABLE `history_timeline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `job_vacancy`
--
ALTER TABLE `job_vacancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `link_timeline`
--
ALTER TABLE `link_timeline`
  MODIFY `id_link` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `setting_about`
--
ALTER TABLE `setting_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id_timeline` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;
