-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2025 at 07:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ethestech_siakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `activation`
--

CREATE TABLE `activation` (
  `id_activation` int(11) NOT NULL,
  `id_name_activation` varchar(15) NOT NULL,
  `id_office_activation` int(11) NOT NULL,
  `office_from` varchar(255) NOT NULL,
  `jabatan_activation` varchar(255) NOT NULL,
  `id_jabatan_activation` int(11) NOT NULL,
  `jabatan_from` varchar(255) NOT NULL,
  `kode_letter_activation` varchar(60) NOT NULL,
  `type_activation` int(11) NOT NULL,
  `description_activation` text NOT NULL,
  `note_activation` text NOT NULL,
  `date_activation` date NOT NULL,
  `no_kontrak_before` varchar(255) DEFAULT NULL,
  `no_kontrak` varchar(255) DEFAULT NULL,
  `status_activation` int(11) NOT NULL,
  `template_letter_activation` int(11) NOT NULL,
  `created_by_karyawan` varchar(15) NOT NULL DEFAULT '0',
  `created_by_activation` int(11) NOT NULL,
  `date_created_activation` datetime NOT NULL,
  `approval_name_activation` int(11) NOT NULL,
  `date_approval_activation` datetime NOT NULL,
  `status_update` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activation`
--

INSERT INTO `activation` (`id_activation`, `id_name_activation`, `id_office_activation`, `office_from`, `jabatan_activation`, `id_jabatan_activation`, `jabatan_from`, `kode_letter_activation`, `type_activation`, `description_activation`, `note_activation`, `date_activation`, `no_kontrak_before`, `no_kontrak`, `status_activation`, `template_letter_activation`, `created_by_karyawan`, `created_by_activation`, `date_created_activation`, `approval_name_activation`, `date_approval_activation`, `status_update`) VALUES
(54, '2207990061', 7, 'LIDO 02', 'KASIR CADANGAN', 0, 'PRAMU DELIVERY', 'PRM001', 1, 'Saya merasa mampu jadi kasir saya sudah hafal barang di area dalam kasir maupun di luar kasir dan saya udah training kasir selama 7 hari decision lolos jadi kasir ', 'GANBATTE..!!', '2023-05-14', NULL, NULL, 2, 5, '2207990061', 0, '2023-05-12 21:06:33', 51, '2023-05-13 00:00:00', 'approve'),
(55, '2208990041', 14, 'LIDO 06', 'KASIR PELATIHAN', 0, 'PRAMU DELIVERY', '', 1, 'Ingin mengembangkan karir serta melakukan inovasi.karena saya yakin bahwa saya bisa.dan saya ingin selalu berkembang dan terus berkembang', '', '2023-05-14', NULL, NULL, 3, 0, '2208990041', 0, '2023-05-13 10:57:57', 0, '0000-00-00 00:00:00', NULL),
(56, '2207990161', 23, 'LIDO 01', 'KASIR PENDAMPING', 0, 'KASIR CADANGAN', 'MTS002', 3, 'Biar bisa pulang ke rumah bantu ibuk, dan jaga ibuk yang di rumah karena kondisi sering sakit dan cuma sama adek, dan bapak jarang pulang karena kerja ', 'KEPUTUSAN DIBUAT SECARA UTUH DALAM KETAATAN TERHADAP PERATURAN, KEBIJAKAN DAN INTRUKSI PERUSAHAAN.\n', '2023-06-06', NULL, NULL, 2, 5, '2207990161', 0, '2023-05-15 15:30:09', 51, '2023-06-05 00:00:00', 'approve'),
(58, '2208660042', 7, 'LIDO 01', 'KASIR PENDAMPING', 0, 'KASIR CADANGAN', '', 1, 'Sesuai dengan misi lido pengembangan karir sebagai karyawan,saya sebagai KSC selama ini sudah dapat mengerjakan jobdesk ksc seperti transaksi credimart maka dari itu saya ingin mengembangkan kemampuan saya menjadi Ksp. Saya juga selama ini sudah berkontribusi selama kurang lebih 8 bulan untuk Lido01 dan untuk lido01 belum ada Ksp maka dari itu saya ingin mengajukan kenaikan jabatan sebagai ksp agar membantu berjalannya program toko.', '', '2023-05-18', NULL, NULL, 3, 0, '2208660042', 0, '2023-05-17 09:10:48', 0, '0000-00-00 00:00:00', NULL),
(59, '2305990101', 16, 'LIDO 01', 'KASIR CADANGAN', 0, 'Kasir Cadangan', 'MTS001', 3, '', '', '2023-05-26', NULL, NULL, 2, 5, '0', 45, '2023-05-28 08:16:54', 51, '2023-05-29 00:00:00', 'approve'),
(61, '2207990041', 16, 'LIDO 06', 'KASIR CADANGAN', 0, 'KASIR CADANGAN', '', 3, '1.Agar lebih hemat karena Jarak toko dari rumah tidak terlalu jauh\r\n2.Tidak bisa jauh dari orang tua karena anak terakhir,kasihan orang tua dirumah sendiri\r\n3.Menambah personil 08,karena tim 08 juga lagi kekurangan kasir\r\n', '', '2023-06-02', NULL, NULL, 3, 0, '2207990041', 0, '2023-06-01 19:30:29', 0, '0000-00-00 00:00:00', NULL),
(62, '2202660012', 23, 'LIDO 15', 'KASIR PENDAMPING', 0, 'KASIR PENDAMPING', 'MTS001', 3, 'Jarak tempuh dari rumah lebih dekat,dan orang tua juga meminta tidak jauh jauh (tidak boleh ngekos lagi)', 'KEPUTUSAN DIBUAT SECARA UTUH DALAM KETAATAN TERHADAP PERATURAN, KEBIJAKAN DAN INTRUKSI PERUSAHAAN.\n', '2023-06-06', NULL, NULL, 2, 5, '2202660012', 0, '2023-06-02 14:18:11', 51, '2023-06-05 00:00:00', 'approve'),
(64, '2207990021', 7, 'TOKO 14', 'KASIR PENDAMPING', 0, 'PIC - CABANG', 'DMS003', 2, '', 'BERDASARKAN HASIL KERJA SELAMA MENJABAT SEBAGAI PIC DI DAPATI :\n1. TIDAK KESESUAIAN KINERJA TEAM DAN INDIVIDU TERHADAP SOP PERUSAHAAN\n2. NILAI SELISIH BARANG YANG CUKUP SIGNIFIKAN DALAM AUDIT\n3. DIDAPATI PELANGGARAN AKSES PRAMUNIAGA (TEAM DIBAWAHNYA) TERHADAP IPOS (KASIR)', '2023-06-06', NULL, NULL, 2, 5, '0', 45, '2023-06-05 17:38:18', 51, '2023-06-05 00:00:00', 'approve'),
(65, '2209990031', 15, 'Gudang Lido', 'PIC-CABANG', 0, 'SALES KOORDINATOR', 'DMS003', 2, '', '-', '2023-06-13', NULL, NULL, 2, 9, '0', 45, '2023-06-12 10:51:37', 5, '2023-06-12 00:00:00', 'approve'),
(66, '2204990011', 16, 'LIDO 12', 'KASIR CADANGAN', 0, 'KASIR CADANGAN', 'MTS003', 3, '', 'PASTIKAN SUDAH SERAH TERIMA DAN MENGHUBUNGI PIC DITEMPAT ANDA DIPINDAHKAN', '2023-06-13', NULL, NULL, 2, 8, '0', 45, '2023-06-12 10:52:29', 5, '2023-06-12 00:00:00', 'approve'),
(69, '2203990071', 11, 'LIDO 02', 'KASIR UTAMA', 0, 'KASIR UTAMA', 'DMS003', 2, '', '', '2023-06-12', NULL, NULL, 2, 8, '0', 45, '2023-06-12 10:56:26', 5, '2023-06-12 00:00:00', 'approve'),
(70, '2302990061', 19, 'LIDO 03', 'KASIR PELATIHAN', 0, 'KASIR PELATIHAN', 'MTS003', 3, '', 'PASTIKAN SUDAH SERAH TERIMA DAN MENGHUBUNGI PIC DITEMPAT ANDA DIPINDAHKAN', '2023-06-13', NULL, NULL, 2, 8, '0', 45, '2023-06-12 11:04:20', 5, '2023-06-12 00:00:00', 'approve'),
(71, '2201660022', 23, 'LIDO 04', 'PIC-CABANG', 0, 'PIC - CABANG', 'MTS003', 3, 'lebih dekat dan jalannya tidak mengerikan jika pulang malam . dulu sudah mengajukan ±7bln tidak acc . mohon di acc pak ?', '', '2023-06-15', NULL, NULL, 2, 9, '2201660022', 0, '2023-06-12 17:03:46', 51, '2023-06-13 00:00:00', 'approve'),
(72, '2202660012', 12, 'LIDO 14', 'KASIR PENDAMPING', 0, 'KASIR PENDAMPING', 'MTS003', 3, '', '', '2023-06-15', NULL, NULL, 2, 8, '0', 45, '2023-06-13 17:44:11', 51, '2023-06-13 00:00:00', 'approve'),
(73, '2204990061', 9, 'LIDO 14', 'HELPER', 0, 'PRAMU DELIVERY', 'MTS003', 3, '', '', '2023-06-20', NULL, NULL, 2, 7, '0', 45, '2023-06-19 14:12:05', 51, '2023-06-19 00:00:00', 'approve'),
(76, '2206660052', 21, 'Kantor Lido', 'KARYAWAN', 0, 'AUDITOR', '', 2, '1. Sudah tidak nyaman di tim\r\n2. Tertinggal info maupun update auditor\r\n3. Belum mampu mengemban tugas auditor', '', '2023-06-22', NULL, NULL, 3, 0, '2206660052', 0, '2023-06-21 10:39:28', 0, '0000-00-00 00:00:00', NULL),
(77, '2212990111', 15, 'LIDO 10', '', 0, 'PRAMU DELIVERY', 'MTS001', 3, '', '', '2023-07-07', NULL, NULL, 2, 7, '0', 45, '2023-07-04 16:45:38', 51, '2023-07-06 00:00:00', 'approve'),
(80, '2110990011', 15, 'LIDO 07', 'KASIR PENDAMPING', 0, 'KSC', '', 1, 'Saya sudah mampu dan siap untuk tanggung jawab yang lebih besar', '', '2023-07-08', NULL, NULL, 3, 0, '2110990011', 0, '2023-07-07 16:03:28', 0, '0000-00-00 00:00:00', NULL),
(81, '2206660052', 14, 'Kantor Lido', 'KASIR PENDAMPING', 0, 'AUDITOR', 'DMS002', 2, '', '', '2023-07-09', NULL, NULL, 2, 5, '0', 45, '2023-07-08 09:41:10', 51, '2023-07-08 00:00:00', 'approve'),
(82, '2208990041', 10, 'LIDO 06', 'HELPER', 0, 'PRAMU DELIVERY', 'MTS002', 3, '', '', '2023-07-11', NULL, NULL, 2, 0, '0', 45, '2023-07-10 16:36:40', 58, '2023-07-11 00:00:00', 'approve'),
(83, '2306660042', 19, 'Kantor Lido', 'PPIC-CABANG', 0, 'PLT PIC-CABANG', 'MTS002', 3, '', '', '2023-07-12', NULL, NULL, 2, 0, '0', 45, '2023-07-11 10:10:29', 58, '2023-07-11 00:00:00', 'approve'),
(84, '1912990011', 12, 'LIDO 04', 'PIC-CABANG', 0, 'PIC- CABANG', 'DMS002', 2, '', 'evaluasi', '2023-07-14', NULL, NULL, 2, 9, '0', 45, '2023-07-12 11:48:28', 51, '2023-07-15 00:00:00', 'approve'),
(85, '2207990041', 16, 'LIDO 06', 'KASIR PENDAMPING', 0, 'KASIR PENDAMPING', 'MTS002', 3, '', '', '2023-07-17', NULL, NULL, 2, 0, '0', 45, '2023-07-14 20:42:06', 58, '2023-07-15 00:00:00', 'approve'),
(86, '2305990101', 15, 'LIDO 08', 'KASIR CADANGAN', 0, 'KASIR CADANGAN', 'MTS002', 3, '', 'Segera berkoordinssi dg baik', '2023-07-17', NULL, NULL, 2, 5, '0', 45, '2023-07-14 20:42:35', 58, '2023-07-15 00:00:00', 'approve'),
(87, '2204990111', 1, 'Gudang PKR', 'HELPER', 0, 'HELPER', 'MTS002', 3, '', '', '2023-07-31', NULL, NULL, 2, 10, '0', 45, '2023-07-28 11:16:50', 58, '2023-07-30 00:00:00', 'approve'),
(90, '2306990081', 8, 'Gudang RM', 'HELPER', 0, 'HELPER', 'MTS002', 3, '', '', '2023-07-31', NULL, NULL, 2, 10, '0', 45, '2023-07-28 11:21:01', 58, '2023-07-30 00:00:00', 'approve'),
(91, '2212990011', 8, 'Gudang RM', 'HELPER', 0, 'HELPER', 'MTS002', 3, '', '', '2023-07-31', NULL, NULL, 2, 10, '0', 45, '2023-07-28 11:25:14', 58, '2023-07-29 00:00:00', 'approve'),
(92, '2212660042', 15, 'LIDO 03', 'KASIR CADANGAN', 0, 'KASIR CADANGAN', 'MTS002', 3, '', '', '2023-07-31', NULL, NULL, 2, 0, '0', 45, '2023-07-30 20:21:38', 58, '2023-07-31 00:00:00', 'approve'),
(93, '2203990061', 7, 'PRMD-CAR', 'HELPER', 0, 'PRAMU DELIVERY', 'MTS002', 3, '', '', '2023-07-31', NULL, NULL, 2, 4, '0', 45, '2023-07-31 11:43:46', 5, '2023-07-31 00:00:00', 'approve'),
(94, '2209990051', 6, 'Delivery Car', 'DRIVER', 0, 'PRAMU DELIVERY CAR', 'MTS002', 3, '', '', '2023-07-31', NULL, NULL, 2, 4, '0', 45, '2023-07-31 11:46:25', 5, '2023-07-31 00:00:00', 'approve'),
(96, '2110990011', 3, 'LIDO 07', 'KARYAWAN', 0, 'KSC', 'DMS002', 2, '', '', '0000-00-00', NULL, NULL, 2, 0, '0', 45, '2023-08-01 16:24:16', 51, '2023-08-13 00:00:00', 'approve'),
(97, '2212660062', 3, 'LIDO 07', 'KARYAWAN', 0, 'KASIR CADANGAN', 'DMS002', 2, '', '', '0000-00-00', NULL, NULL, 2, 0, '0', 45, '2023-08-01 16:24:40', 51, '2023-08-13 00:00:00', 'approve'),
(98, '2207990041', 23, 'LIDO 08', 'KASIR PENDAMPING', 0, 'KASIR PENDAMPING', 'MTS001', 3, '', '', '2023-08-05', NULL, NULL, 2, 8, '0', 45, '2023-08-05 14:26:59', 51, '2023-08-07 00:00:00', 'approve'),
(99, '2306990011', 8, 'Gudang RM', 'HELPER', 0, 'HELPER', '', 3, '', '', '2023-08-08', NULL, NULL, 3, 0, '0', 45, '2023-08-07 14:57:11', 0, '0000-00-00 00:00:00', NULL),
(101, '2211990031', 3, 'LIDO 06', 'KASIR CADANGAN', 0, 'KASIR CADANGAN', 'MTS002', 3, '', '', '2023-08-14', NULL, NULL, 2, 8, '0', 45, '2023-08-13 09:37:17', 51, '2023-08-13 00:00:00', 'approve'),
(102, '2203990081', 15, 'LIDO 15', 'HELPER', 0, 'PRAMU DELIVERY', 'MTS002', 3, '', '', '2023-08-29', NULL, NULL, 2, 0, '0', 45, '2023-08-24 18:28:29', 51, '2023-08-28 00:00:00', 'approve'),
(103, '2307990041', 23, 'LIDO 07', 'HELPER', 0, 'PRAMUNIAGA', 'MTS002', 3, '', '', '2023-08-29', NULL, NULL, 2, 0, '0', 45, '2023-08-24 18:29:07', 51, '2023-08-28 00:00:00', 'approve'),
(104, '2303660012', 23, 'LIDO 01', 'KASIR PELATIHAN', 0, 'KASIR PELATIHAN', 'MTS002', 3, '', '', '2023-08-30', NULL, NULL, 2, 8, '0', 45, '2023-08-28 08:09:10', 51, '2023-08-28 00:00:00', 'approve'),
(105, '2105660012', 15, 'LIDO 01', 'KASIR UTAMA', 0, 'KASIR UTAMA', 'MTS002', 3, '', '', '2023-08-30', NULL, NULL, 2, 8, '0', 45, '2023-08-28 08:09:38', 51, '2023-08-28 00:00:00', 'approve'),
(106, '2303660042', 7, 'LIDO 07', 'KASIR PELATIHAN', 0, 'KASIR PELATIHAN', 'MTS002', 3, '', '', '2023-08-30', NULL, NULL, 2, 8, '0', 45, '2023-08-28 08:19:22', 51, '2023-08-28 00:00:00', 'approve'),
(107, '2207990041', 7, 'LIDO 14', 'KASIR PENDAMPING', 0, 'KASIR PENDAMPING', 'MTS002', 3, '', '', '2023-08-30', NULL, NULL, 2, 8, '0', 45, '2023-08-28 08:20:02', 51, '2023-08-28 00:00:00', 'approve'),
(108, '2306660062', 7, 'LIDO 10', 'KASIR PELATIHAN', 0, 'KASIR PELATIHAN', 'MTS002', 3, '', '', '2023-08-31', NULL, NULL, 2, 8, '0', 45, '2023-08-30 18:08:25', 51, '2023-08-30 00:00:00', 'approve'),
(109, '2212660012', 10, 'LIDO 01', 'KASIR CADANGAN', 0, 'KASIR CADANGAN', 'MTS002', 3, '', '', '2023-08-31', NULL, NULL, 2, 8, '0', 45, '2023-08-30 18:10:10', 51, '2023-08-30 00:00:00', 'approve'),
(110, '2203990071', 14, 'LIDO 03', 'KASIR UTAMA', 0, 'KASIR UTAMA', 'MTS001', 3, '', '', '2023-09-02', NULL, NULL, 2, 8, '0', 45, '2023-08-31 19:10:58', 51, '2023-09-01 00:00:00', 'approve'),
(111, '2209990081', 7, 'LIDO 13', 'HELPER', 0, 'PRAMU DELIVERY', 'MTS002', 3, '', '', '2023-09-02', NULL, NULL, 2, 10, '0', 45, '2023-08-31 20:13:04', 51, '2023-09-01 00:00:00', 'approve'),
(112, '2306660052', 19, 'LIDO 15', 'KASIR PELATIHAN', 0, 'KASIR PELATIHAN', 'MTS002', 3, '', '', '2023-09-02', NULL, NULL, 2, 8, '0', 45, '2023-08-31 20:13:44', 51, '2023-09-01 00:00:00', 'approve'),
(113, '2306990061', 20, 'LIDO 06', 'KASIR PELATIHAN', 0, 'KASIR CADANGAN', 'MTS002', 3, '', '', '2023-09-02', NULL, NULL, 2, 8, '0', 45, '2023-08-31 20:14:14', 51, '2023-09-01 00:00:00', 'approve'),
(115, '2307990031', 20, 'LIDO 15', 'PRMD', 0, 'PRAMUNIAGA', '', 3, '', '', '2023-09-02', NULL, NULL, 3, 0, '0', 45, '2023-08-31 20:15:02', 0, '0000-00-00 00:00:00', NULL),
(116, '1912990011', 3, 'Kantor Lido', 'KARYAWAN', 0, 'PIC-CABANG', 'DMS002', 2, '', '', '2023-09-02', NULL, NULL, 2, 11, '0', 45, '2023-08-31 20:17:27', 51, '2023-09-02 00:00:00', 'approve'),
(117, '2202990021', 3, 'LIDO 13', 'KARYAWAN', 0, 'PIC - CABANG', 'DMS002', 2, '', '', '2023-09-02', NULL, NULL, 2, 11, '0', 45, '2023-08-31 20:18:34', 51, '2023-09-01 00:00:00', 'approve'),
(118, '2110660012', 3, 'LIDO 13', 'KARYAWAN', 0, 'KASIR UTAMA', 'DMS002', 2, '', '', '2023-09-02', NULL, NULL, 2, 11, '0', 45, '2023-08-31 20:19:18', 51, '2023-09-01 00:00:00', 'approve'),
(119, '2306990121', 14, 'LIDO 06', 'KASIR CADANGAN', 0, 'PRMD', '', 1, 'Di upgrade oleh PIC dikarenakan kasir kurang dan ada potensi kasir karna ada pengalaman, sudah mulai pelatihan per tanggal ini', '', '2023-09-03', NULL, NULL, 3, 0, '2306990121', 0, '2023-09-02 12:12:02', 0, '0000-00-00 00:00:00', NULL),
(120, '2305990121', 20, 'LIDO 06', 'HELPER', 0, 'PRMD', 'MTS002', 3, '', '', '2023-09-03', NULL, NULL, 2, 0, '0', 45, '2023-09-02 18:16:06', 51, '2023-09-02 00:00:00', 'approve'),
(121, '2305990121', 20, 'LIDO 06', 'KASIR CADANGAN', 0, 'PRMD', '', 1, 'Ingin mencoba hal baru yaitu dengan menjadi kasir ', '', '2023-09-11', NULL, NULL, 3, 0, '2305990121', 0, '2023-09-06 20:23:12', 0, '0000-00-00 00:00:00', NULL),
(122, '1905660012', 20, 'LIDO 03', 'KASIR PENDAMPING', 0, 'KASIR PENDAMPING', 'MTS002', 3, '', '', '2023-09-12', NULL, NULL, 2, 8, '0', 45, '2023-09-10 10:40:04', 51, '2023-09-11 00:00:00', 'approve'),
(123, '2104660012', 9, 'LIDO 12', 'KASIR UTAMA', 0, 'KASIR UTAMA', 'MTS002', 3, '', '', '2023-09-12', NULL, NULL, 2, 8, '0', 45, '2023-09-10 11:59:43', 51, '2023-09-11 00:00:00', 'approve'),
(124, '2112660012', 14, 'LIDO 12', 'KASIR PENDAMPING', 0, 'KASIR PENDAMPING', 'MTS002', 3, '', '', '2023-09-12', NULL, NULL, 2, 8, '0', 45, '2023-09-10 12:01:10', 51, '2023-09-11 00:00:00', 'approve'),
(125, '2307660022', 19, 'LIDO 15', 'KASIR PELATIHAN', 0, 'KASIR PELATIHAN', '', 3, '', '', '2023-09-11', NULL, NULL, 3, 0, '0', 45, '2023-09-10 18:52:25', 0, '0000-00-00 00:00:00', NULL),
(127, '2307660022', 19, 'LIDO 15', 'KASIR PELATIHAN', 0, 'KASIR PELATIHAN', 'MTS002', 3, '', '', '2023-09-13', NULL, NULL, 2, 8, '0', 45, '2023-09-11 12:21:53', 51, '2023-09-11 00:00:00', 'approve'),
(128, '1905990111', 6, 'Kantor Lido', 'GENERAL AFFAIRS selected', 0, 'ASISTEN STAFF MANAGEMENT', 'MTS002', 3, '', '', '2023-09-01', NULL, NULL, 2, 0, '0', 45, '2023-09-12 19:55:25', 51, '2023-09-13 00:00:00', 'approve'),
(129, '1912990011', 6, 'Gudang Lido', 'PIC-LOGISTIK', 0, 'KARYAWAN', 'MTS002', 3, '', '', '2023-09-13', NULL, NULL, 2, 0, '0', 45, '2023-09-12 19:56:00', 51, '2023-09-13 00:00:00', 'approve'),
(130, '2204990011', 21, 'LIDO 08', 'PIC-CABANG', 0, 'KASIR CADANGAN', '', 1, 'upgrade kualitas diri', '', '2023-09-22', NULL, NULL, 3, 0, '2204990011', 0, '2023-09-21 14:12:08', 0, '0000-00-00 00:00:00', NULL),
(131, '2204990011', 21, 'LIDO 08', 'PIC-AUDIT', 0, 'KASIR CADANGAN', '', 1, 'upgrade skill', '', '2023-09-22', NULL, NULL, 3, 0, '2204990011', 0, '2023-09-21 23:47:56', 0, '0000-00-00 00:00:00', NULL),
(132, '2202990021', 27, 'Gudang Lido', 'KARYAWAN', 0, 'PIC - CABANG', 'MTS001', 3, '', '', '2023-10-03', NULL, NULL, 2, 11, '0', 45, '2023-10-02 14:03:16', 51, '2023-10-02 00:00:00', 'approve'),
(133, '2209990081', 14, 'LIDO 13', 'PRMD', 0, 'PRAMU DELIVERY', '', 3, 'Pic selalu menekan dan terus menekan tanpa ada solusi dan bimbingan terhadap anak anak nya.. Dan selalu membeda beda kan karyawan lama dengan dia di banding dengan karyawan yg baru.. Dan keliatan angkuh ketika di panggil dengan saya.. Dan susah bersosialisasi dengan team atau sulit menjadi team yang solid.', '', '2023-10-09', NULL, NULL, 3, 0, '2209990081', 0, '2023-10-06 07:02:52', 0, '0000-00-00 00:00:00', NULL),
(134, '2212660032', 13, 'LIDO 13', 'KASIR CADANGAN', 0, 'KASIR CADANGAN', 'MTS002', 3, '', '', '2023-10-09', NULL, NULL, 2, 11, '0', 45, '2023-10-07 19:10:11', 51, '2023-10-07 00:00:00', 'approve'),
(135, '2203990071', 3, 'LIDO 03', 'KARYAWAN', 0, 'KASIR UTAMA', 'DMS001', 2, '', '', '2023-10-09', NULL, NULL, 2, 8, '0', 45, '2023-10-07 19:10:54', 51, '2023-10-07 00:00:00', 'approve'),
(136, '2306660052', 14, 'LIDO 15', 'KASIR PELATIHAN', 0, 'KASIR PELATIHAN', 'MTS003', 3, '', '', '2023-10-10', NULL, NULL, 2, 8, '0', 45, '2023-10-09 19:25:16', 51, '2023-10-09 00:00:00', 'approve'),
(137, '2202990071', 20, 'LIDO 06', 'PIC-CABANG', 31, 'KASIR UTAMA', 'PRM002', 1, '', '', '2023-10-10', NULL, NULL, 2, 9, '0', 45, '2023-10-10 04:43:25', 51, '2023-10-10 00:00:00', 'approve'),
(138, '2206660052', 14, 'LIDO 06', 'PIC-CABANG', 0, 'KASIR', 'PRM001', 1, '', '', '2023-10-10', NULL, NULL, 2, 9, '0', 45, '2023-10-10 04:43:53', 51, '2023-10-10 00:00:00', 'approve'),
(140, '2206990011', 27, 'Kantor Lido', 'WAREHOUSE ASSOCIATE', 0, 'SALESMAN', 'DMS002', 2, '', '', '2023-10-23', NULL, NULL, 2, 10, '0', 45, '2023-10-13 08:15:29', 51, '2023-10-21 00:00:00', 'approve'),
(141, '2306660032', 14, 'LIDO 06', 'KASIR CADANGAN', 0, 'PRMD', '', 1, 'direkomendasikan mb yulis untuk naik jabatan kasir . karna kalau pramu borobudur penutupan pintu/gerbang toko berat', '', '2023-10-14', NULL, NULL, 3, 0, '2306660032', 0, '2023-10-13 21:38:20', 0, '0000-00-00 00:00:00', NULL),
(145, '2206990091', 14, 'LIDO 14', 'SALES ASSOCIATE', 0, 'PRAMU DELIVERY', 'MTS004', 3, '', '', '2023-10-19', NULL, NULL, 2, 7, '0', 45, '2023-10-19 08:10:56', 51, '2023-10-21 00:00:00', 'approve'),
(146, '2307990041', 14, 'LIDO 14', 'SALES ASSOCIATE', 0, 'PRAMUNIAGA', 'MTS005', 3, '', '', '2023-10-19', NULL, NULL, 2, 7, '0', 45, '2023-10-19 08:10:56', 51, '2023-10-21 00:00:00', 'approve'),
(147, '2204990011', 21, 'LIDO 08', 'SALES KOORDINATOR', 0, 'KASIR CADANGAN', '', 1, 'mencari ilmu dan pengalaman', '', '2023-10-20', NULL, NULL, 3, 0, '2204990011', 0, '2023-10-19 20:06:54', 0, '0000-00-00 00:00:00', NULL),
(148, '2310660012', 6, 'LIDO 08', 'GENERAL ADMIN', 0, 'KASIR PELATIHAN', 'PRM002', 1, '', '', '2023-10-23', NULL, NULL, 2, 0, '0', 45, '2023-10-21 19:07:04', 51, '2023-10-21 00:00:00', 'approve'),
(150, '2212660032', 14, 'LIDO 15', 'KASIR CADANGAN', 0, 'KASIR CADANGAN', 'MTS001', 3, '', '', '2023-11-02', NULL, NULL, 2, 0, '0', 45, '2023-11-01 15:43:46', 51, '2023-11-02 00:00:00', 'approve'),
(151, '2110990011', 16, 'Gudang Lido', 'KASIR CADANGAN', 0, 'KARYAWAN', '', 1, 'karna saya merasa saya tidak cocok di gudang dan saya rasa saya cocok di toko ', '', '2023-11-14', NULL, NULL, 3, 0, '2110990011', 0, '2023-11-13 09:54:51', 0, '0000-00-00 00:00:00', NULL),
(152, '2203990101', 9, 'Kantor Lido', 'KASIR', 0, 'SALES ASSOCIATE', 'PRM001', 1, '', '', '2023-11-14', NULL, NULL, 2, 8, '0', 51, '2023-11-13 15:42:36', 51, '2023-11-13 00:00:00', 'approve'),
(153, '2207990161', 6, 'LIDO 14', 'NON JOB', 0, 'KASIR PENDAMPING', 'MTS002', 3, '', 'segera lakukan serah terima pekerjaan, inventaris, akses terkait kasir harus segera di cabut baik gate maupun ipos maksimal 14 nov 2023 pukul 09:00', '2023-11-14', NULL, NULL, 2, 0, '0', 51, '2023-11-13 18:14:01', 51, '2023-11-13 00:00:00', 'approve'),
(154, '2311660012', 10, 'LIDO 15', 'KASIR PELATIHAN', 0, 'TRAINING', 'MTS004', 3, '', '', '2023-11-13', NULL, NULL, 2, 8, '0', 45, '2023-11-13 20:37:39', 51, '2023-11-13 00:00:00', 'approve'),
(155, '2311660022', 10, 'LIDO 15', 'KASIR PELATIHAN', 0, 'TRAINING', 'MTS003', 3, '', '', '2023-11-13', NULL, NULL, 2, 8, '0', 45, '2023-11-13 20:37:39', 51, '2023-11-13 00:00:00', 'approve'),
(156, '2203990101', 11, 'LIDO 10', 'KASIR', 0, 'KASIR', 'MTS006', 3, 'Mau bekerja di tempat baru, dengan orang baru, dan suasana baru', 'Mau bekerja di tempat baru, dengan orang baru, dan suasana baru', '2023-11-30', NULL, NULL, 2, 8, '2203990101', 0, '2023-11-17 20:17:09', 51, '2023-11-27 00:00:00', 'approve'),
(157, '2209990051', 3, 'Kantor Lido', 'DRIVER', 0, 'DRIVER', '', 3, '', '', '2023-11-21', NULL, NULL, 3, 0, '0', 45, '2023-11-21 09:07:00', 0, '0000-00-00 00:00:00', NULL),
(158, '2311990041', 20, 'LIDO 13', 'KASIR PELATIHAN', 0, 'TRAINING', 'MTS004', 3, '', '', '2023-11-26', NULL, NULL, 2, 8, '0', 45, '2023-11-25 17:04:15', 51, '2023-11-27 00:00:00', 'approve'),
(159, '2311990051', 19, 'LIDO 12', 'KASIR PELATIHAN', 0, 'TRAINING', 'MTS005', 3, '', '', '2023-11-26', NULL, NULL, 2, 8, '0', 45, '2023-11-25 17:04:50', 51, '2023-11-27 00:00:00', 'approve'),
(160, '2110990011', 15, 'Gudang Lido', 'KASIR CADANGAN', 0, 'OPERATOR PRODUKSI', '', 1, 'Saya ingin menjadi lebih baik dan bertangung jawab atas sop perusahaan dan saya akan membuktikan bahwa saya itu bisa  lebih baik ', '', '2023-11-30', NULL, NULL, 3, 0, '2110990011', 0, '2023-11-29 08:53:13', 0, '0000-00-00 00:00:00', NULL),
(161, '2302990081', 15, 'LIDO 07', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE', 'PRM002', 1, 'Untuk belajar ,dan pengen hal baru.beringina jenjang karir .jika di perbolehkan demosil ld07', 'Untuk belajar ,dan pengen hal baru.beringina jenjang karir .jika di perbolehkan demosil ld07', '2024-01-25', NULL, NULL, 2, 8, '2302990081', 0, '2023-11-29 18:50:45', 51, '2024-01-24 00:00:00', 'approve'),
(162, '2306990131', 7, 'LIDO 02', 'SALES ASSOCIATE (SAA)', 33, 'SALES ASSOCIATE (SAA)', 'MTS001', 3, '', '', '2023-12-08', NULL, NULL, 2, 7, '0', 45, '2023-12-07 09:36:28', 51, '2023-12-07 17:41:36', 'approve'),
(163, '2307990021', 23, 'LIDO 14', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM001', 1, 'ingin mengupgrade diri dan mencoba pengalaman baru', 'ingin mengupgrade diri dan mencoba pengalaman baru', '2024-01-25', NULL, NULL, 2, 8, '2307990021', 0, '2023-12-15 17:06:04', 51, '2024-01-24 00:00:00', 'approve'),
(165, '2309660042', 16, 'LIDO 12', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', 'MTS002', 3, '', '', '2023-12-20', NULL, NULL, 2, 8, '0', 45, '2023-12-19 10:28:14', 51, '2023-12-19 11:03:57', 'approve'),
(166, '2312990021', 6, 'Kantor Lido', 'HRD', 63, 'KARYAWAN (OKR)', 'MTS003', 3, '', '', '2023-12-26', NULL, NULL, 2, 0, '0', 45, '2023-12-22 14:33:44', 51, '2023-12-27 01:32:27', 'approve'),
(167, '2204990011', 19, 'LIDO 08', 'KASIR CADANGAN', 0, 'KASIR PELATIHAN (KSC)', '', 3, 'mencari hal baru', '', '2023-12-31', NULL, NULL, 3, 0, '2204990011', 0, '2023-12-26 14:24:12', 0, '0000-00-00 00:00:00', NULL),
(168, '2306990101', 19, 'LIDO 08', 'PRMD', 0, 'SALES ASSOCIATE (SAA)', '', 3, 'Supaya lebih dekat dari rumah\r\nMencari pengalaman baru', '', '2023-12-31', NULL, NULL, 3, 0, '2306990101', 0, '2023-12-26 14:24:25', 0, '0000-00-00 00:00:00', NULL),
(169, '2203990081', 19, 'LIDO 07', 'PRMD', 0, 'SALES ASSOCIATE (SAA)', '', 3, 'Tidak efektif dan tidak produktif , dan tidak betah dalam lingkungan kerja, dan saya dengar di toko 12 di butuhkan prmd, dan saya siap untuk mengisi sdm toko 12 tersebut.', '', '2024-01-21', NULL, NULL, 3, 0, '2203990081', 0, '2024-01-04 15:58:07', 0, '0000-00-00 00:00:00', NULL),
(170, '2401660012', 7, 'TRAINING', 'SALES ASSOCIATE (SAA)', 33, 'TRAINING', 'MTS001', 3, '', '', '2024-01-09', NULL, NULL, 2, 7, '0', 45, '2024-01-08 12:01:37', 51, '2024-01-08 17:46:23', 'approve'),
(171, '2401990011', 16, 'TRAINING', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING', 'MTS002', 3, '', '', '2024-01-09', NULL, NULL, 2, 8, '0', 45, '2024-01-08 12:02:33', 51, '2024-01-08 17:46:41', 'approve'),
(172, '2312990031', 8, 'Kantor Lido', 'SALESMAN WS (OSW)', 43, 'TRAINING', 'MTS003', 3, '', '', '2024-01-11', NULL, NULL, 2, 0, '0', 45, '2024-01-10 15:12:50', 51, '2024-01-17 10:56:23', 'approve'),
(173, '2401660022', 19, 'Kantor Lido', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING', 'MTS004', 3, '', '', '2024-01-11', NULL, NULL, 2, 0, '0', 45, '2024-01-10 15:12:50', 51, '2024-01-17 10:56:40', 'approve'),
(174, '2401990021', 19, 'Kantor Lido', 'SALES ASSOCIATE (SAA)', 33, 'TRAINING', 'MTS005', 3, '', '', '2024-01-11', NULL, NULL, 2, 0, '0', 45, '2024-01-10 15:12:50', 51, '2024-01-17 10:56:42', 'approve'),
(176, '2203990081', 3, 'LIDO 07', 'WAREHOUSE ASSOCIATE (WAS)', 13, 'SALES ASSOCIATE (SAA)', '', 2, '', '', '0000-00-00', NULL, NULL, 1, 0, '0', 45, '2024-01-11 17:55:00', 0, '0000-00-00 00:00:00', NULL),
(179, '2305990021', 8, 'Kantor Lido', 'PPIC-CABANG (P-PIC)', 53, 'CREATIVE HUMAN RESOURCES (CHR)', 'DMS001', 2, '', '', '2024-02-05', NULL, NULL, 2, 0, '0', 63, '2024-01-31 17:38:51', 51, '2024-02-04 00:00:00', 'approve'),
(181, '2402990011', 20, 'TRAINING', 'SALES ASSOCIATE (SAA)', 33, 'TRAINING', 'MTS001', 3, '', '', '2024-02-04', NULL, NULL, 2, 7, '0', 63, '2024-02-03 16:18:55', 51, '2024-02-04 09:44:18', 'approve'),
(182, '2402660012', 10, 'TRAINING', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING', 'MTS002', 3, '', '', '2024-02-04', NULL, NULL, 2, 8, '0', 63, '2024-02-03 16:20:19', 51, '2024-02-04 09:44:36', 'approve'),
(183, '2402990061', 14, 'TRAINING', 'SALES ASSOCIATE (SAA)', 33, 'TRAINING', 'MTS004', 3, '', '', '2024-02-06', NULL, NULL, 2, 7, '0', 63, '2024-02-05 13:22:45', 51, '2024-02-06 09:30:26', 'approve'),
(184, '189912TR3080', 10, 'TRAINING', 'SALES ASSOCIATE (SAA)', 33, 'NON AKTIF', 'MTS004', 3, '', '', '2024-02-06', NULL, NULL, 2, 7, '0', 63, '2024-02-05 13:23:58', 51, '2024-02-06 09:30:24', 'approve'),
(185, '2402990051', 9, 'TRAINING', 'SALES ASSOCIATE (SAA)', 33, 'TRAINING', 'MTS004', 3, '', '', '2024-02-06', NULL, NULL, 2, 7, '0', 63, '2024-02-05 13:24:50', 51, '2024-02-06 09:30:23', 'approve'),
(186, '2402990041', 19, 'TRAINING', 'SALES ASSOCIATE (SAA)', 33, 'TRAINING', 'MTS004', 3, '', '', '2024-02-06', NULL, NULL, 2, 7, '0', 63, '2024-02-05 13:25:30', 51, '2024-02-06 09:30:22', 'approve'),
(187, '2402990011', 15, 'TRAINING', 'SALES ASSOCIATE (SAA)', 33, 'TRAINING', 'MTS003', 3, '', '', '2024-02-06', NULL, NULL, 2, 7, '0', 63, '2024-02-05 13:27:08', 51, '2024-02-06 09:30:05', 'approve'),
(188, '2311990031', 6, 'TRAINING', 'MARKETING STAFF', 29, 'TRAINING (TRN)', 'MTS004', 3, '', '', '2024-01-03', NULL, NULL, 2, 0, '0', 63, '2024-02-12 09:04:02', 51, '2024-02-16 09:31:01', 'approve'),
(189, '2310660012', 6, 'Kantor Lido', 'FINANCE (AFN)', 4, 'GENERAL ADMIN PLT (P-SGA)', 'MTS001', 3, '', '', '2024-03-01', NULL, NULL, 2, 0, '0', 63, '2024-02-26 17:03:04', 51, '2024-03-02 15:29:47', 'approve'),
(193, '2309660052', 6, 'Kantor Lido', 'MEMBERSHIP', 28, 'GENERAL ADMIN PLT (P-SGA)', 'MTS003', 3, '', '', '2024-03-14', NULL, NULL, 2, 0, '0', 63, '2024-03-05 12:32:59', 51, '2024-03-14 15:54:12', 'approve'),
(194, '2306660052', 13, 'LIDO 06', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', '', 3, '', '', '0000-00-00', NULL, NULL, 1, 0, '0', 63, '2024-03-14 14:34:00', 0, '0000-00-00 00:00:00', NULL),
(195, '2311990051', 13, 'LIDO 12', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', 'MTS002', 3, '', '', '2024-03-16', NULL, NULL, 2, 8, '0', 63, '2024-03-14 14:34:39', 51, '2024-03-14 15:53:54', 'approve'),
(196, '2402990041', 16, 'LIDO 12', 'SALES ASSOCIATE (SAA)', 33, 'SALES ASSOCIATE (SAA)', 'MTS003', 3, '', '', '2024-03-19', NULL, NULL, 2, 7, '0', 63, '2024-03-15 16:52:47', 51, '2024-03-18 07:12:59', 'approve'),
(197, '2306990101', 19, 'LIDO 08', 'SALES ASSOCIATE (SAA)', 33, 'SALES ASSOCIATE (SAA)', 'MTS004', 3, '', '', '2024-03-19', NULL, NULL, 2, 7, '0', 63, '2024-03-15 16:53:58', 51, '2024-03-18 07:13:17', 'approve'),
(205, '2306660062', 9, 'LIDO 01', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', 'MTS006', 3, '', '', '2024-05-15', NULL, NULL, 2, 8, '0', 58, '2024-05-14 10:22:42', 51, '2024-05-14 23:26:44', 'approve'),
(206, '2306990041', 7, 'LIDO 04', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'MTS006', 3, '', '', '2024-05-15', NULL, NULL, 2, 8, '0', 58, '2024-05-14 10:22:42', 51, '2024-05-14 23:26:46', 'approve'),
(207, '2105660012', 6, 'LIDO 07', 'KASIR (KSR)', 32, 'KASIR (KSR)', 'MTS002', 3, '', '', '2024-05-15', NULL, NULL, 2, 5, '0', 5, '2024-05-14 20:41:12', 51, '2024-05-14 23:26:25', 'approve'),
(208, '2210990041', 6, 'LIDO 11', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', 'MTS003', 3, '', '', '2024-05-15', NULL, NULL, 2, 8, '0', 5, '2024-05-14 20:41:12', 51, '2024-05-14 23:26:41', 'approve'),
(209, '2306660052', 6, 'LIDO 06', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', 'MTS004', 3, '', '', '2024-05-15', NULL, NULL, 2, 8, '0', 5, '2024-05-14 20:41:12', 51, '2024-05-14 23:26:42', 'approve'),
(210, '2311660012', 6, 'LIDO 02', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', 'MTS005', 3, '', '', '2024-05-15', NULL, NULL, 2, 8, '0', 5, '2024-05-14 20:41:12', 51, '2024-05-14 23:26:43', 'approve'),
(218, '2405660012', 19, 'TRAINING', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', 'PRM002', 1, '', '', '2024-05-29', NULL, NULL, 2, 0, '0', 67, '2024-06-03 15:56:28', 51, '2024-06-10 00:00:00', 'approve'),
(220, '189912TR3164', 15, 'TRAINING', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', '', 1, '', '', '2024-06-04', NULL, NULL, 1, 0, '0', 67, '2024-06-04 13:45:36', 0, '0000-00-00 00:00:00', NULL),
(221, '2406660012', 15, 'TRAINING', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', 'PRM002', 1, '', '', '2024-06-04', NULL, NULL, 2, 0, '0', 67, '2024-06-05 07:53:59', 51, '2024-06-10 00:00:00', 'approve'),
(222, '2208990041', 10, 'LIDO 02', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM002', 1, '', '', '2024-05-15', NULL, NULL, 2, 0, '0', 67, '2024-06-08 09:57:08', 51, '2024-06-10 00:00:00', 'approve'),
(223, '2207990101', 18, 'LIDO 11', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM002', 1, '', '', '2024-05-25', NULL, NULL, 2, 0, '0', 67, '2024-06-08 09:59:48', 51, '2024-06-10 00:00:00', 'approve'),
(224, '2212990201', 13, 'LIDO 15', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM002', 1, '', '', '2024-05-15', NULL, NULL, 2, 0, '0', 67, '2024-06-08 10:02:17', 51, '2024-06-10 00:00:00', 'approve'),
(225, '2307990031', 13, 'LIDO 15', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM002', 1, '', '', '2024-05-15', NULL, NULL, 2, 0, '0', 67, '2024-06-08 10:03:09', 51, '2024-06-10 00:00:00', 'approve'),
(226, '2206990101', 19, 'LIDO 12', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM002', 1, '', '', '2024-05-15', NULL, NULL, 2, 0, '0', 67, '2024-06-08 10:03:52', 51, '2024-06-10 00:00:00', 'approve'),
(227, '2405660022', 9, 'TRAINING', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', 'PRM001', 1, '', '', '2024-06-10', NULL, NULL, 2, 0, '0', 67, '2024-06-10 08:22:01', 51, '2024-06-10 00:00:00', 'approve'),
(229, '2302990051', 11, 'LIDO 03', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM003', 1, '', '', '2024-06-18', NULL, NULL, 2, 0, '0', 67, '2024-06-18 08:09:07', 51, '2024-06-24 00:00:00', 'approve'),
(230, '189912TR3167', 11, 'TRAINING', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', 'PRM003', 1, '', '', '2024-06-18', NULL, NULL, 2, 0, '0', 67, '2024-06-18 08:14:20', 51, '2024-06-24 00:00:00', 'approve'),
(231, '189912TR3168', 16, 'TRAINING', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', 'PRM002', 1, '', '', '2024-06-19', NULL, NULL, 2, 0, '0', 67, '2024-06-19 08:21:26', 51, '2024-06-24 00:00:00', 'approve'),
(234, '2310660072', 9, 'LIDO 10', 'KASIR PELATIHAN (KSC)', 47, 'BRAND AMBASSADOR (BA)', 'MTS004', 3, '', '', '2024-06-27', NULL, NULL, 2, 0, '0', 67, '2024-06-24 20:48:21', 51, '2024-06-27 11:02:36', 'approve'),
(235, '2209990091', 14, 'LIDO 13', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM003', 1, '', '', '2024-06-24', NULL, NULL, 2, 0, '0', 67, '2024-06-24 20:49:25', 51, '2024-06-27 00:00:00', 'approve'),
(236, '2206990091', 14, 'LIDO 06', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM004', 1, '', '', '2024-06-24', NULL, NULL, 2, 0, '0', 67, '2024-06-24 20:50:07', 51, '2024-06-27 00:00:00', 'approve'),
(237, '2105660012', 6, 'LIDO 07', 'PURCHASE STAFF (PRC)', 22, 'KASIR (KSR)', 'PRM002', 1, '', '', '2024-06-30', NULL, NULL, 2, 0, '0', 67, '2024-07-02 09:59:07', 51, '2024-07-02 00:00:00', 'approve'),
(238, '189912TR3171', 12, 'TRAINING', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', 'PRM001', 1, '', '', '2024-06-21', NULL, NULL, 2, 0, '0', 67, '2024-07-02 10:19:50', 51, '2024-07-02 00:00:00', 'approve'),
(239, '2212990111', 15, 'LIDO 07', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', '', 1, '', '', '2024-06-25', NULL, NULL, 3, 0, '0', 67, '2024-07-02 10:21:57', 0, '0000-00-00 00:00:00', NULL),
(240, '2306660052', 6, 'LIDO 06', 'AUDITOR PLT (P-ADT)', 58, 'KASIR PELATIHAN (KSC)', 'PRM003', 1, '', '', '2024-07-04', NULL, NULL, 2, 0, '0', 67, '2024-07-05 15:28:04', 51, '2024-07-09 00:00:00', 'approve'),
(241, '2311660012', 6, 'LIDO 02', 'CREATIVE HUMAN RESOURCES (CHR)', 62, 'KASIR PELATIHAN (KSC)', 'PRM002', 1, '', '', '2024-06-20', NULL, NULL, 2, 0, '0', 67, '2024-07-06 14:06:29', 51, '2024-07-09 00:00:00', 'approve'),
(242, '2203990091', 11, 'LIDO 03', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM004', 1, '', '', '2024-07-11', NULL, NULL, 2, 0, '0', 67, '2024-07-11 10:12:52', 51, '2024-07-16 00:00:00', 'approve'),
(243, '2212990031', 7, 'LIDO 01', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM004', 1, '', '', '2024-07-11', NULL, NULL, 2, 0, '0', 67, '2024-07-11 10:13:43', 51, '2024-07-16 00:00:00', 'approve'),
(244, '2307990051', 15, 'LIDO 07', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM004', 1, '', '', '2024-07-13', NULL, NULL, 2, 8, '0', 67, '2024-07-13 09:44:24', 51, '2024-07-16 00:00:00', 'approve'),
(245, '2212990231', 10, 'LIDO 02', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM004', 1, '', '', '2024-07-13', NULL, NULL, 2, 8, '0', 67, '2024-07-13 09:45:08', 51, '2024-07-16 00:00:00', 'approve'),
(246, '2309990061', 10, 'LIDO 02', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM004', 1, '', '', '2024-07-13', NULL, NULL, 2, 8, '0', 67, '2024-07-13 09:45:46', 51, '2024-07-16 00:00:00', 'approve'),
(247, '2106990011', 6, 'Gudang Lido', 'FINANCE (AFN)', 4, 'PIC-GUDANG (PIC)', 'PRM004', 1, '', '', '2024-07-16', NULL, NULL, 2, 0, '0', 67, '2024-07-16 09:28:38', 51, '2024-07-16 00:00:00', 'approve'),
(248, '2207990081', 11, 'LIDO 03', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM004', 1, '', '', '2024-07-16', NULL, NULL, 2, 8, '0', 67, '2024-07-16 16:13:25', 51, '2024-07-16 00:00:00', 'approve'),
(249, '2302990031', 9, 'LIDO 10', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM004', 1, '', '', '2024-07-16', NULL, NULL, 2, 8, '0', 67, '2024-07-16 16:13:52', 51, '2024-07-16 00:00:00', 'approve'),
(250, '2402990051', 9, 'LIDO 10', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM004', 1, '', '', '2024-07-16', NULL, NULL, 2, 8, '0', 67, '2024-07-16 16:14:59', 51, '2024-07-16 00:00:00', 'approve'),
(251, '2306990171', 18, 'LIDO 11', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM004', 1, '', '', '2024-07-16', NULL, NULL, 2, 8, '0', 67, '2024-07-16 16:15:28', 51, '2024-07-16 00:00:00', 'approve'),
(252, '2306990091', 18, 'LIDO 11', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM004', 1, '', '', '2024-07-16', NULL, NULL, 2, 8, '0', 67, '2024-07-16 16:17:12', 51, '2024-07-16 00:00:00', 'approve'),
(253, '2212990161', 18, 'LIDO 11', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM004', 1, '', '', '2024-07-16', NULL, NULL, 2, 8, '0', 67, '2024-07-16 16:18:06', 51, '2024-07-16 00:00:00', 'approve'),
(254, '2306660032', 14, 'LIDO 06', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM004', 1, '', '', '2024-07-16', NULL, NULL, 2, 8, '0', 67, '2024-07-16 16:18:35', 51, '2024-07-16 00:00:00', 'approve'),
(255, '2402990061', 14, 'LIDO 06', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM004', 1, '', '', '2024-07-16', NULL, NULL, 2, 8, '0', 67, '2024-07-16 16:19:05', 51, '2024-07-16 00:00:00', 'approve'),
(256, '2402990021', 20, 'LIDO 13', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM004', 1, '', '', '2024-07-16', NULL, NULL, 2, 8, '0', 67, '2024-07-16 16:19:39', 51, '2024-07-16 00:00:00', 'approve'),
(257, '2309990031', 20, 'LIDO 13', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM004', 1, '', '', '2024-07-16', NULL, NULL, 2, 8, '0', 67, '2024-07-16 16:20:16', 51, '2024-07-16 00:00:00', 'approve'),
(258, '2306990101', 19, 'LIDO 08', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM004', 1, '', '', '2024-07-16', NULL, NULL, 2, 8, '0', 67, '2024-07-16 16:21:14', 51, '2024-07-16 00:00:00', 'approve'),
(259, '2401990021', 19, 'LIDO 12', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM004', 1, '', '', '2024-07-16', NULL, NULL, 2, 8, '0', 67, '2024-07-16 16:21:59', 51, '2024-07-16 00:00:00', 'approve'),
(260, '2309990051', 16, 'LIDO 08', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM004', 1, '', '', '2024-07-16', NULL, NULL, 2, 8, '0', 67, '2024-07-16 16:22:57', 51, '2024-07-16 00:00:00', 'approve'),
(261, '2212990071', 7, 'LIDO 01', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM005', 1, '', '', '2024-07-16', NULL, NULL, 2, 8, '0', 67, '2024-07-16 16:23:31', 51, '2024-07-16 00:00:00', 'approve'),
(262, '2204990031', 16, 'LIDO 08', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM005', 1, '', '', '2024-07-16', NULL, NULL, 2, 8, '0', 67, '2024-07-16 16:25:05', 51, '2024-07-16 00:00:00', 'approve'),
(263, '2212990131', 13, 'LIDO 15', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM005', 1, '', '', '2024-07-16', NULL, NULL, 2, 8, '0', 67, '2024-07-16 16:26:05', 51, '2024-07-16 00:00:00', 'approve'),
(264, '2308990031', 13, 'LIDO 15', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM005', 1, '', '', '2024-07-16', NULL, NULL, 2, 8, '0', 67, '2024-07-16 16:26:36', 51, '2024-07-16 00:00:00', 'approve'),
(265, '2306990161', 23, 'LIDO 14', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM005', 1, '', '', '2024-07-16', NULL, NULL, 2, 8, '0', 67, '2024-07-16 16:27:08', 51, '2024-07-16 00:00:00', 'approve'),
(266, '2310990021', 23, 'LIDO 14', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM005', 1, '', '', '2024-07-16', NULL, NULL, 2, 8, '0', 67, '2024-07-16 16:27:34', 51, '2024-07-16 00:00:00', 'approve'),
(267, '2305990011', 12, 'LIDO 04', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM005', 1, '', '', '2024-07-16', NULL, NULL, 2, 8, '0', 67, '2024-07-16 16:28:07', 51, '2024-07-16 00:00:00', 'approve'),
(268, '2402990011', 15, 'LIDO 07', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM004', 1, '', '', '2024-07-16', NULL, NULL, 2, 8, '0', 67, '2024-07-16 16:28:37', 51, '2024-07-16 00:00:00', 'approve'),
(269, '189912TR3172', 8, 'TRAINING', 'SALESMAN (OSL)', 51, 'TRAINING (TRN)', 'PRM005', 1, '', '', '2024-07-23', NULL, NULL, 2, 0, '0', 67, '2024-07-23 12:27:52', 51, '2024-07-23 00:00:00', 'approve'),
(270, '2207990051', 7, 'LIDO 01', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM007', 1, '', '', '2024-07-23', NULL, NULL, 2, 8, '0', 67, '2024-07-23 20:19:29', 51, '2024-07-24 00:00:00', 'approve'),
(271, '2306990041', 12, 'LIDO 01', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', 'MTS005', 3, '', '', '2024-07-29', NULL, NULL, 2, 8, '0', 67, '2024-07-26 17:51:34', 51, '2024-07-27 17:55:37', 'approve'),
(273, '2307990021', 18, 'LIDO 14', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', 'MTS005', 3, '', '', '2024-07-29', NULL, NULL, 2, 8, '0', 67, '2024-07-26 17:53:17', 51, '2024-07-27 17:53:29', 'approve'),
(276, '2306990101', 13, 'LIDO 12', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'MTS004', 3, '', '', '2024-07-29', NULL, NULL, 2, 8, '0', 67, '2024-07-26 17:54:05', 51, '2024-07-27 17:51:22', 'approve'),
(277, '2302990071', 12, 'LIDO 04', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM001', 1, '', '', '2024-03-11', NULL, NULL, 2, 9, '0', 67, '2024-08-06 09:23:35', 51, '2024-08-06 00:00:00', 'approve'),
(280, '2206990011', 0, 'GUDANG GOR', '', 0, 'WAREHOUSE ASSOCIATE', 'MTS003', 3, '', '', '0000-00-00', NULL, '96', 2, 11, '0', 67, '2024-08-25 18:54:55', 51, '2024-08-25 20:53:58', 'approve'),
(281, '2110990011', 3, 'LIDO 07', 'OPERATOR PRODUKSI (OPP)', 73, 'KASIR CADANGAN', 'MTS004', 3, '', '', '2024-08-26', NULL, NULL, 2, 11, '0', 67, '2024-08-26 10:58:33', 51, '2024-08-26 11:00:53', 'approve'),
(282, '2212660042', 6, 'LIDO 07', 'FINANCE (AFN)', 4, 'KASIR CADANGAN', 'PRM002', 1, '', '', '2024-09-17', NULL, NULL, 2, 0, '0', 67, '2024-09-17 17:18:21', 51, '2024-09-18 00:00:00', 'approve'),
(283, '189912TR3175', 14, 'TRAINING', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', 'PRM002', 1, '', '', '2024-09-17', NULL, NULL, 2, 8, '0', 67, '2024-09-17 17:18:49', 51, '2024-09-18 00:00:00', 'approve'),
(284, '189912TR3176', 14, 'TRAINING', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', 'PRM002', 1, '', '', '2024-09-17', NULL, NULL, 2, 8, '0', 67, '2024-09-17 17:19:12', 51, '2024-09-18 00:00:00', 'approve'),
(285, '189912TR3178', 19, 'TRAINING', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', 'PRM001', 1, '', '', '2024-09-17', NULL, NULL, 2, 8, '0', 67, '2024-09-17 17:19:35', 51, '2024-09-18 00:00:00', 'approve'),
(286, '189912TR3180', 15, 'TRAINING', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', 'PRM002', 1, '', '', '2024-09-27', NULL, NULL, 2, 8, '0', 67, '2024-09-27 16:42:36', 51, '2024-09-30 00:00:00', 'approve'),
(287, '189912TR3181', 15, 'TRAINING', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', 'PRM003', 1, '', '', '2024-09-27', NULL, NULL, 2, 8, '0', 67, '2024-09-27 16:42:36', 51, '2024-09-30 00:00:00', 'approve'),
(295, '2410990011', 3, 'Gudang Lido', 'FREELANCE', 76, 'PKL/MAGANG', 'MTS006', 3, '', '', '0000-00-00', NULL, NULL, 2, 0, '0', 67, '2024-10-22 07:50:53', 51, '2024-10-22 16:59:31', 'approve'),
(296, '189912TR3182', 27, 'TRAINING', 'WAREHOUSE ASSOCIATE (WAS)', 13, 'TRAINING (TRN)', 'PRM003', 1, '', '', '2024-10-24', NULL, NULL, 2, 11, '0', 67, '2024-10-25 12:02:17', 51, '2024-10-28 00:00:00', 'approve'),
(297, '189912TR3186', 19, 'TRAINING', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', 'PRM004', 1, '', '', '2024-10-25', NULL, NULL, 2, 8, '0', 67, '2024-10-25 12:03:00', 51, '2024-10-28 00:00:00', 'approve'),
(298, '189912TR3185', 19, 'TRAINING', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', 'PRM005', 1, '', '', '2024-10-25', NULL, NULL, 2, 8, '0', 67, '2024-10-25 12:03:26', 51, '2024-10-28 00:00:00', 'approve'),
(299, '189912TR3183', 7, 'TRAINING', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', 'PRM006', 1, '', '', '2024-10-25', NULL, NULL, 2, 8, '0', 67, '2024-10-25 12:04:07', 51, '2024-10-28 00:00:00', 'approve'),
(300, '1905990071', 6, 'Gudang PKR', 'STAFF FINANCE', 6, 'PIC-GUDANG (PIC)', 'MTS006', 3, '', '', '2024-11-20', NULL, NULL, 2, 0, '0', 67, '2024-11-20 13:20:34', 51, '2024-11-26 17:15:21', 'approve'),
(301, '2410660032', 7, 'LIDO 01', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', 'PRM001', 1, '', '', '2024-10-25', NULL, NULL, 2, 8, '0', 67, '2024-11-29 09:20:22', 51, '2024-12-11 00:00:00', 'approve'),
(302, '2410990021', 27, 'GUDANG GOR', 'WAREHOUSE ASSOCIATE (WAS)', 13, 'WAREHOUSE ASSOCIATE (WAS)', 'PRM002', 1, '', '', '2024-10-24', NULL, NULL, 2, 11, '0', 67, '2024-11-29 09:20:22', 51, '2024-12-11 00:00:00', 'approve'),
(303, '2212990121', 11, 'LIDO 12', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', '', 3, '', '', '0000-00-00', NULL, NULL, 3, 0, '0', 67, '2024-12-13 19:14:04', 0, '0000-00-00 00:00:00', NULL),
(304, '2302990051', 19, 'LIDO 03', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', '', 3, '', '', '0000-00-00', NULL, NULL, 3, 0, '0', 67, '2024-12-13 19:14:04', 0, '0000-00-00 00:00:00', NULL),
(332, '2306990171', 19, 'LIDO 11', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', 'MTS004', 3, '', '', '0000-00-00', NULL, NULL, 2, 8, '0', 67, '2024-12-18 08:40:25', 51, '2024-12-18 10:23:16', 'approve'),
(333, '2410660032', 19, 'LIDO 01', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', 'MTS005', 3, '', '', '2024-12-18', NULL, NULL, 2, 8, '0', 67, '2024-12-18 08:40:25', 51, '2024-12-18 10:23:33', 'approve'),
(339, '2402990011', 3, 'LIDO 07', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', 'MTS007', 3, '', '', '2024-12-27', NULL, NULL, 2, 8, '0', 67, '2024-12-27 07:42:57', 51, '2024-12-30 19:25:52', 'approve'),
(341, '2306990171', 18, 'LIDO 12', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', 'MTS009', 3, '', '', '2025-01-01', NULL, NULL, 2, 8, '0', 67, '2024-12-30 19:31:55', 51, '2024-12-30 19:36:38', 'approve'),
(342, '2212990131', 19, 'LIDO 15', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', 'MTS008', 3, '', '', '2025-01-01', NULL, NULL, 2, 8, '0', 67, '2024-12-30 19:33:27', 51, '2024-12-30 19:36:37', 'approve'),
(343, '1905990041', 1, 'Gudang RM', 'DRIVER (DDR)', 26, 'MEKANIK (MCN)', 'MTS006', 3, '', '', '2025-01-20', NULL, NULL, 2, 4, '0', 67, '2025-01-18 10:06:26', 51, '2025-01-28 10:14:33', 'approve'),
(344, '2501990011', 23, 'LIDO 04', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', 'PRM002', 1, '', '', '2025-01-22', NULL, NULL, 2, 0, '0', 67, '2025-01-22 11:46:13', 51, '2025-01-29 00:00:00', 'approve'),
(345, '189912TR3195', 12, 'TRAINING', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', '', 1, '', '', '2025-01-22', NULL, NULL, 1, 0, '0', 67, '2025-01-22 11:46:13', 0, '0000-00-00 00:00:00', NULL),
(346, '2306990011', 27, 'Gudang PKR', 'WAREHOUSE ASSOCIATE (WAS)', 13, 'HELPER', 'MTS007', 3, '', '1. Pengaturan Gudang: Membantu dalam pengaturan dan organisasi gudang. Memastikan barang disimpan dengan baik dan aman.\r\n2. Pengiriman Barang: Bertanggung jawab untuk mengirimkan barang sampai ke titik lokasi dengan benar dan menempatkannya pada lokasi yang seharusnya dengan aman, selamat, tanpa kurang dan lebih, tanpa cacat dan tanpa meminta bantuan dari tim toko penerima.\r\n3. Inventaris Barang: Membantu dalam penghitungan dan pelaporan inventaris barang secara berkala.\r\n4. Keselamatan dan Kebersihan Gudang: Membantu menjaga keselamatan dan kebersihan gudang.', '2025-01-01', NULL, NULL, 2, 10, '0', 67, '2025-01-29 17:48:56', 51, '2025-01-29 17:51:49', 'approve'),
(347, '2501990021', 12, 'LIDO 04', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', 'PRM003', 1, '', '', '2025-01-22', NULL, NULL, 2, 0, '0', 67, '2025-01-22 12:06:46', 51, '2025-01-30 00:00:00', 'approve'),
(352, '2501660012', 6, 'Kantor Lido', 'PURCHASE STAFF (PRC)', 22, 'TRAINING (TRN)', 'PRM001', 1, '', '', '2025-02-14', NULL, NULL, 2, 0, '0', 67, '2025-02-01 07:54:44', 51, '2025-02-15 00:00:00', 'approve'),
(353, '189912TR3199', 19, 'TRAINING', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', 'PRM002', 1, '', '', '2025-02-12', NULL, NULL, 2, 0, '0', 67, '2025-02-12 18:44:00', 51, '2025-02-15 00:00:00', 'approve'),
(354, '2406660012', 19, 'LIDO 07', 'KASIR (KSR)', 32, 'KASIR PELATIHAN (KSC)', 'MTS005', 3, '', 'pastikan untuk koordinasi dengan PIC dan OMN.\nmohon untuk dapat segera diajukan untuk perubahan sistem adm nya, baik absensi, semua platform maupun sistem IPOS dan sales.', '2025-02-26', NULL, NULL, 2, 0, '0', 66, '2025-02-25 11:14:45', 51, '2025-02-25 12:40:50', 'approve'),
(358, '2306660032', 20, 'LIDO 06', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', 'MTS005', 3, '', '', '0000-00-00', NULL, NULL, 2, 0, '0', 66, '2025-03-01 15:58:13', 51, '2025-03-03 17:41:00', 'approve'),
(359, '189912TR3194', 19, 'TRAINING', 'KASIR (KSR)', 32, 'TRAINING (TRN)', 'MTS001', 3, '', '', '0000-00-00', NULL, NULL, 2, 0, '0', 65, '2025-04-05 10:41:29', 51, '2025-04-11 16:23:52', 'approve'),
(360, '2410660012', 1, 'LIDO 07', 'WAREHOUSE CASHIER (WAC)', 23, 'KASIR PELATIHAN (KSC)', 'MTS002', 3, '', '', '2025-04-14', NULL, NULL, 2, 0, '0', 65, '2025-04-14 17:04:45', 51, '2025-04-14 17:15:40', 'approve'),
(361, '189912TR3217', 1, 'TRAINING', 'WAREHOUSE ASSOCIATE (WAS)', 13, 'TRAINING (TRN)', '', 3, '', '', '0000-00-00', NULL, NULL, 1, 0, '0', 65, '2025-04-14 17:06:42', 0, '0000-00-00 00:00:00', NULL),
(362, '2105660032', 6, 'Kantor Lido', 'AUDITOR ADMIN (A-ADT)', 57, 'AUDITOR ADMIN (A-ADT)', '', 1, 'Pengajuan Admin Sicuan', '', '2023-06-29', NULL, '5', 2, 0, '0', 0, '2023-06-29 15:32:56', 0, '2023-06-29 08:15:18', 'approve'),
(363, '2310990011', 6, 'Kantor Lido', 'GENERAL AFFAIRS (GAF)', 15, 'GENERAL AFFAIRS (GAF)', '', 1, 'Pengajuan Admin Sicuan', '', '2019-05-24', NULL, '', 2, 0, '0', 0, '2019-05-24 16:53:07', 0, '0000-00-00 00:00:00', 'approve'),
(364, '2201990041', 6, 'Kantor Lido', 'AUDITOR (ADT)', 60, 'AUDITOR (ADT)', '', 1, 'Pengajuan Admin Sicuan', '', '2024-07-04', NULL, '9', 2, 0, '0', 0, '2024-07-04 08:04:34', 0, '0000-00-00 00:00:00', 'approve'),
(365, '2204990141', 6, 'Kantor Lido', 'SPV SOFTWARE ENGINEER (SSE)', 65, 'SPV SOFTWARE ENGINEER (SSE)', '', 1, 'Pengajuan Admin Sicuan', '', '2022-10-26', NULL, '12', 2, 0, '0', 0, '2022-10-26 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(366, '2201990021', 1, 'Gudang RM', 'WAREHOUSE ASSOCIATE (WAS)', 13, 'WAREHOUSE ASSOCIATE (WAS)', '', 1, 'Pengajuan Admin Sicuan', '', '2022-01-01', NULL, '13', 2, 0, '0', 0, '2022-01-01 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(367, '2306660012', 1, 'Gudang RM', 'WAREHOUSE CASHIER (WAC)', 23, 'WAREHOUSE CASHIER (WAC)', '', 1, 'Pengajuan Admin Sicuan', '', '2023-06-02', NULL, '15', 2, 0, '0', 0, '2023-06-02 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(368, '2201990011', 1, 'Gudang RM', 'WAREHOUSE ASSOCIATE (WAS)', 13, 'WAREHOUSE ASSOCIATE (WAS)', '', 1, 'Pengajuan Admin Sicuan', '', '2023-01-08', NULL, '14', 2, 0, '0', 0, '2023-01-08 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(369, '2204990121', 24, 'PRMD-CAR', 'DRIVER (DDR)', 26, 'DRIVER (DDR)', '', 1, 'Pengajuan Admin Sicuan', '', '2022-09-02', NULL, '', 2, 0, '0', 0, '2022-09-02 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(370, '2305990061', 1, 'Gudang RM', 'WAREHOUSE ASSOCIATE (WAS)', 13, 'WAREHOUSE ASSOCIATE (WAS)', '', 1, 'Pengajuan Admin Sicuan', '', '2023-05-15', NULL, '16', 2, 0, '0', 0, '2023-05-15 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(371, '2306990021', 1, 'Gudang RM', 'WAREHOUSE ASSOCIATE (WAS)', 13, 'WAREHOUSE ASSOCIATE (WAS)', '', 1, 'Pengajuan Admin Sicuan', '', '2023-05-15', NULL, '17', 2, 0, '0', 0, '2023-05-15 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(372, '2203990051', 1, 'Gudang RM', 'DRIVER (DDR)', 26, 'DRIVER (DDR)', '', 1, 'Pengajuan Admin Sicuan', '', '2022-03-01', NULL, '18', 2, 0, '0', 0, '2022-03-01 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(373, '2303990031', 1, 'Gudang RM', 'DRIVER SENIOR (DDRS)', 25, 'DRIVER SENIOR (DDRS)', '', 1, 'Pengajuan Admin Sicuan', '', '2023-03-15', NULL, '19', 2, 0, '0', 0, '2023-03-15 00:00:00', 0, '0000-00-00 00:00:00', 'approve');
INSERT INTO `activation` (`id_activation`, `id_name_activation`, `id_office_activation`, `office_from`, `jabatan_activation`, `id_jabatan_activation`, `jabatan_from`, `kode_letter_activation`, `type_activation`, `description_activation`, `note_activation`, `date_activation`, `no_kontrak_before`, `no_kontrak`, `status_activation`, `template_letter_activation`, `created_by_karyawan`, `created_by_activation`, `date_created_activation`, `approval_name_activation`, `date_approval_activation`, `status_update`) VALUES
(374, '2309990131', 1, 'Gudang RM', 'WAREHOUSE ASSOCIATE (WAS)', 13, 'WAREHOUSE ASSOCIATE (WAS)', '', 1, 'Pengajuan Admin Sicuan', '', '2023-09-28', NULL, '21', 2, 0, '0', 0, '2023-09-28 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(376, '2201660012', 6, 'Kantor Lido', 'PIC-CABANG (PIC)', 31, 'PIC-CABANG (PIC)', '', 1, 'Pengajuan Admin Sicuan', '', '2024-06-20', NULL, '27', 2, 0, '0', 0, '2024-06-20 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(377, '2302660042', 13, 'LIDO 15', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', '', 1, 'Pengajuan Admin Sicuan', '', '2023-10-20', NULL, '28', 2, 0, '0', 0, '2023-10-20 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(378, '2302660042', 13, 'LIDO 15', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', '', 1, 'Pengajuan Admin Sicuan', '', '2023-10-20', NULL, '28', 2, 0, '0', 0, '2023-10-20 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(379, '2106660012', 3, 'Gudang Lido', 'PIC-GUDANG (PIC)', 35, 'PIC-GUDANG (PIC)', '', 1, 'Pengajuan Admin Sicuan', '', '2024-09-12', NULL, '33', 2, 0, '0', 0, '2024-09-12 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(380, '1905660022', 3, 'Gudang Lido', 'PIC-GUDANG2 (PIC2)', 10, 'PIC-GUDANG2 (PIC2)', '', 1, 'Pengajuan Admin Sicuan', '', '2024-09-12', NULL, '34', 2, 0, '0', 0, '2024-09-12 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(381, '2206660012', 3, 'Gudang Lido', 'WAREHOUSE ASSOCIATE (WAS)', 13, 'WAREHOUSE ASSOCIATE (WAS)', '', 1, 'Pengajuan Admin Sicuan', '', '2024-09-12', NULL, '37', 2, 0, '0', 0, '2024-09-12 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(382, '2309660022', 23, 'LIDO 14', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', '', 1, 'Pengajuan Admin Sicuan', '', '2023-09-13', NULL, '40', 2, 0, '0', 0, '2023-09-13 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(383, '2303660012', 23, 'LIDO 01', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN', '', 1, 'Pengajuan Admin Sicuan', '', '2023-12-27', NULL, '41', 2, 0, '0', 0, '2023-12-27 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(384, '2311990041', 20, 'LIDO 13', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING', '', 1, 'Pengajuan Admin Sicuan', '', '2023-11-25', NULL, '43', 2, 0, '0', 0, '2023-11-25 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(385, '2501660022', 19, 'LIDO 12', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', '', 1, 'Pengajuan Admin Sicuan', '', '2024-01-06', NULL, '46', 2, 0, '0', 0, '2024-01-06 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(386, '2212660122', 18, 'LIDO 11', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', '', 1, 'Pengajuan Admin Sicuan', '', '2022-12-19', NULL, '53', 2, 0, '0', 0, '2022-12-19 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(387, '2204660032', 18, 'LIDO 11', 'KASIR (KSR)', 32, 'KASIR (KSR)', '', 1, 'Pengajuan Admin Sicuan', '', '2021-12-23', NULL, '54', 2, 0, '0', 0, '2021-12-23 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(388, '2106990021', 18, 'Kantor Lido', '31', 31, 'PPIC-CABANG (P-PIC)', '', 1, 'Pengajuan Admin Sicuan', 'Pengajuan Admin Sicuan', '2021-06-18', NULL, '55', 2, 0, '0', 0, '2021-06-18 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(389, '2204660012', 11, 'LIDO 03', 'PIC-CABANG (PIC)', 31, 'PIC-CABANG (PIC)', '', 1, 'Pengajuan Admin Sicuan', '', '2023-06-20', NULL, '57', 2, 0, '0', 0, '2023-06-20 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(390, '2407990011', 12, 'LIDO 04', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', '', 1, 'Pengajuan Admin Sicuan', '', '2024-06-24', NULL, '61', 2, 0, '0', 0, '2024-06-24 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(391, '2303660032', 10, 'LIDO 02', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', '', 1, 'Pengajuan Admin Sicuan', '', '2023-03-23', NULL, '64', 2, 0, '0', 0, '2023-03-23 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(392, '2303660042', 7, 'LIDO 07', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN', '', 1, 'Pengajuan Admin Sicuan', '', '2023-12-30', NULL, '65', 2, 0, '0', 0, '2023-12-30 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(393, '2207990041', 16, 'LIDO 06', 'KASIR (KSR)', 32, 'KASIR CADANGAN', '', 1, 'Pengajuan Admin Sicuan', '', '2022-07-01', NULL, '67', 2, 0, '0', 0, '2022-07-01 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(394, '2308660012', 7, 'LIDO 01', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', '', 1, 'Pengajuan Admin Sicuan', '', '2023-10-20', NULL, '69', 2, 0, '0', 0, '2023-10-20 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(395, '2207990061', 7, 'LIDO 02', 'KASIR PELATIHAN (KSC)', 47, 'PRAMU DELIVERY', '', 1, 'Pengajuan Admin Sicuan', '', '2024-10-19', NULL, '70', 2, 0, '0', 0, '2024-10-19 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(396, '1905660042', 6, 'Kantor Lido', 'PIC-CABANG (PIC)', 31, 'PIC-CABANG (PIC)', '', 1, 'Pengajuan Admin Sicuan', '', '2024-10-19', NULL, '71', 2, 0, '0', 0, '2024-10-19 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(397, '2410660022', 15, 'LIDO 07', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', '', 1, 'Pengajuan Admin Sicuan', '', '2024-10-01', NULL, '74', 2, 0, '0', 0, '2024-10-01 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(398, '2409660022', 14, 'LIDO 06', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', '', 1, 'Pengajuan Admin Sicuan', '', '2024-09-19', NULL, '75', 2, 0, '0', 0, '2024-09-19 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(399, '2409660012', 14, 'LIDO 06', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', '', 1, 'Pengajuan Admin Sicuan', '', '2024-09-19', NULL, '76', 2, 0, '0', 0, '2024-09-19 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(400, '2307660042', 9, 'LIDO 10', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', '', 1, 'Pengajuan Admin Sicuan', '', '2023-07-08', NULL, '80', 2, 0, '0', 0, '2023-07-08 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(401, '2203990011', 6, 'Kantor Lido', 'PIC-CABANG (PIC)', 31, 'PIC-CABANG (PIC)', '', 1, 'Pengajuan Admin Sicuan', '', '2022-03-18', NULL, '82', 2, 0, '0', 0, '2022-03-18 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(402, '2406660042', 16, 'LIDO 08', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', '', 1, 'Pengajuan Admin Sicuan', '', '2024-06-17', NULL, '84', 2, 0, '0', 0, '2024-06-17 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(403, '1905990081', 8, 'Gudang PKR', 'DRIVER (DDR)', 26, 'DRIVER (DDR)', '', 1, 'Pengajuan Admin Sicuan', '', '2019-05-27', NULL, '90', 2, 0, '0', 0, '2019-05-27 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(404, '2208660042', 7, 'LIDO 01', 'KASIR PELATIHAN (KSC)', 47, 'KASIR CADANGAN', '', 1, 'Pengajuan Admin Sicuan', '', '2024-10-19', NULL, '91', 2, 0, '0', 0, '2024-10-19 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(405, '2112990011', 1, 'Gudang RM', 'PIC-GUDANG (PIC)', 35, 'PIC-GUDANG (PIC)', '', 1, 'Pengajuan Admin Sicuan', '', '2021-12-08', NULL, '92', 2, 0, '0', 0, '2021-12-08 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(406, '1905990011', 1, 'Gudang RM', 'DRIVER SENIOR (DDRS)', 25, 'DRIVER SENIOR (DDRS)', '', 1, 'Pengajuan Admin Sicuan', '', '2019-05-24', NULL, '93', 2, 0, '0', 0, '2019-05-24 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(407, '2107990011', 8, 'Gudang PKR', 'SALESMAN WS (OSW)', 43, 'SALESMAN WS (OSW)', '', 1, 'Pengajuan Admin Sicuan', '', '2021-07-20', NULL, '97', 2, 0, '0', 0, '2021-07-20 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(408, '1905990061', 15, 'LIDO 07', 'PPIC-CABANG (P-PIC)', 53, 'PIC-CABANG (PIC)', '', 1, 'Pengajuan Admin Sicuan', '', '2019-05-24', NULL, '100', 2, 0, '0', 0, '2019-05-24 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(409, '2302660012', 18, 'LIDO 11', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', '', 1, 'Pengajuan Admin Sicuan', '', '2023-12-27', NULL, '101', 2, 0, '0', 0, '2023-12-27 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(410, '2305990081', 6, 'Kantor Lido', 'AUDITOR PLT (P-ADT)', 58, 'AUDITOR PLT (P-ADT)', '', 1, 'Pengajuan Admin Sicuan', '', '2023-03-20', NULL, '103', 2, 0, '0', 0, '2023-03-20 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(411, '1905990091', 6, 'Kantor Lido', 'PURCHASE MD (MDC)', 21, 'PURCHASE MD (MDC)', '', 1, 'Pengajuan Admin Sicuan', '', '2024-06-20', NULL, '104', 2, 0, '0', 0, '2024-06-20 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(412, '2112990021', 1, 'Gudang RM', 'WAREHOUSE ASSOCIATE (WAS)', 13, 'WAREHOUSE ASSOCIATE (WAS)', '', 1, 'Pengajuan Admin Sicuan', '', '2022-12-21', NULL, '105', 2, 0, '0', 0, '2022-12-21 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(413, '1905990111', 6, 'Kantor Lido', 'GENERAL AFFAIRS (GAF)', 15, 'ASISTEN STAFF MANAGEMENT', '', 1, 'Pengajuan Admin Sicuan', '', '2019-05-24', NULL, '106', 2, 0, '0', 0, '2019-05-24 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(414, '2206990121', 1, 'Gudang RM', 'WAREHOUSE ASSOCIATE (WAS)', 13, 'WAREHOUSE ASSOCIATE (WAS)', '', 1, 'Pengajuan Admin Sicuan', '', '2022-06-27', NULL, '108', 2, 0, '0', 0, '2022-06-27 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(415, '2306990081', 8, 'Gudang RM', 'HELPER (DHL)', 14, 'HELPER', '', 1, 'Pengajuan Admin Sicuan', '', '2023-06-12', NULL, '109', 2, 0, '0', 0, '2023-06-12 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(416, '2203990101', 11, 'Kantor Lido', 'KASIR (KSR)', 32, 'SALES ASSOCIATE', '', 1, 'Pengajuan Admin Sicuan', '', '2022-03-19', NULL, '110', 2, 0, '0', 0, '2022-03-19 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(417, '2207990011', 12, 'Kantor Lido', 'KASIR (KSR)', 32, 'KASIR (KSR)', '', 1, 'Pengajuan Admin Sicuan', '', '2022-07-25', NULL, '112', 2, 0, '0', 0, '2022-07-25 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(418, '2205990011', 10, 'Kantor Lido', 'PIC-CABANG (PIC)', 31, 'PIC-CABANG (PIC)', '', 1, 'Pengajuan Admin Sicuan', '', '2022-05-14', NULL, '113', 2, 0, '0', 0, '2022-05-14 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(419, '2410660022', 11, 'LIDO 07', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', 'MTS005', 3, '', '', '2025-06-03', NULL, '74', 2, 8, '0', 68, '2025-06-03 10:13:50', 51, '2025-06-03 10:29:03', 'approve'),
(420, '1905990061', 19, 'LIDO 07', 'PIC-CABANG (PIC)', 31, 'PPIC-CABANG (P-PIC)', 'MTS006', 3, '', '', '2025-06-19', NULL, '126', 2, 0, '0', 68, '2025-06-18 17:23:32', 51, '2025-06-18 17:38:26', 'approve'),
(421, '1905990061', 15, 'LIDO 12', 'PPIC-CABANG (P-PIC)', 53, 'PIC-CABANG (PIC)', 'MTS007', 3, '', '', '2025-06-19', NULL, '100', 2, 0, '0', 68, '2025-06-19 15:35:36', 51, '2025-06-19 15:41:58', 'approve'),
(422, '2502660022', 15, 'TRAINING', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-06-12', NULL, '233', 2, 0, '0', 0, '2025-06-12 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(423, '2305990011', 30, 'LIDO 04', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', 'MTS009', 3, '', '', '2025-06-21', NULL, '60', 2, 0, '0', 68, '2025-06-20 15:03:27', 51, '2025-06-22 10:55:29', 'approve'),
(424, '2503990011', 30, 'LIDO 12', 'KASIR PELATIHAN (KSC)', 47, 'KASIR (KSR)', 'MTS009', 3, '', '', '2025-06-21', NULL, '225', 2, 0, '0', 68, '2025-06-20 15:06:22', 51, '2025-06-22 10:56:01', 'approve'),
(425, '2502660022', 0, 'LIDO 07', '', 0, 'KASIR PELATIHAN (KSC)', 'MTS008', 3, '', '', '0000-00-00', NULL, '233', 2, 0, '0', 68, '2025-06-20 15:16:17', 51, '2025-06-22 10:55:28', 'approve'),
(426, '2405660012', 1, 'TRAINING', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', '', 1, 'Pengajuan Admin Sicuan', '', '2023-11-13', NULL, '22', 2, 0, '0', 0, '2023-11-13 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(428, '2506990021', 6, 'TRAINING', 'PROBATION', 77, 'TRAINING (TRN)', '', 3, '', '', '2025-06-28', NULL, '238', 3, 0, '0', 68, '2025-07-28 18:16:30', 0, '0000-00-00 00:00:00', NULL),
(429, '2203990061', 7, 'PRMD-CAR', 'DRIVER (DDR)', 26, 'PRAMU DELIVERY', '', 1, 'Pengajuan Admin Sicuan', '', '2023-07-31', NULL, '147', 2, 0, '0', 0, '2023-07-31 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(430, '2204990131', 8, 'Gudang Lido', 'SALESMAN (OSL)', 51, 'SALESMAN (OSL)', '', 1, 'Pengajuan Admin Sicuan', '', '2022-04-11', NULL, '146', 2, 0, '0', 0, '2022-04-11 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(431, '2505990031', 6, 'TRAINING', 'AUDITOR PLT (P-ADT)', 58, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-04-21', NULL, '235', 2, 0, '0', 0, '2025-04-21 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(432, '2503990021', 15, 'TRAINING', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-06-12', NULL, '259', 2, 0, '0', 0, '2025-06-12 00:00:00', 0, '2025-06-12 00:00:00', 'approve'),
(433, '2506990021', 6, 'TRAINING', 'PROBATION', 77, 'TRAINING (TRN)', 'MTS005', 3, '', '', '2025-06-28', NULL, '238', 2, 0, '0', 68, '2025-07-28 18:58:00', 5, '2025-07-28 18:59:01', 'approve'),
(434, '2504660012', 14, 'TRAINING', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-06-12', NULL, '262', 2, 0, '0', 0, '2025-06-12 00:00:00', 0, '2025-06-12 00:00:00', 'approve'),
(435, '2505660012', 6, 'TRAINING', 'CREATIVE HUMAN RESOURCES (CHR)', 62, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-05-03', NULL, '231', 2, 0, '0', 0, '2025-05-03 00:00:00', 0, '2025-05-03 00:00:00', 'approve'),
(436, '2505660022', 6, 'TRAINING', 'TAX AND LEGAL (ATL)', 69, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-03-05', NULL, '266', 2, 0, '0', 0, '2025-03-05 00:00:00', 0, '2025-03-05 00:00:00', 'approve'),
(437, '2505990021', 6, 'TRAINING', 'AUDITOR PLT (P-ADT)', 58, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-05-05', NULL, '271', 2, 0, '0', 0, '2025-05-05 00:00:00', 0, '2025-05-05 00:00:00', 'approve'),
(438, '2306660022', 10, 'LIDO 02', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', '', 1, 'Pengajuan Admin Sicuan', '', '2023-06-05', NULL, '179', 2, 0, '0', 0, '2023-06-05 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(439, '2402660012', 27, 'TRAINING', 'WAREHOUSE CASHIER (WAC)', 23, 'TRAINING', '', 1, 'Pengajuan Admin Sicuan', '', '2024-02-03', NULL, '31', 2, 0, '0', 0, '2024-02-03 00:00:00', 0, '2024-02-03 00:00:00', 'approve'),
(440, '2403990011', 8, 'Gudang RM', 'WAREHOUSE ASSOCIATE (WAS)', 13, 'KARYAWAN (OKR)', '', 1, 'Pengajuan Admin Sicuan', '', '2024-03-16', NULL, '211', 2, 0, '0', 0, '2024-03-16 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(441, '2505990011', 6, 'TRAINING', 'WAREHOUSE MANAGER', 78, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-05-05', NULL, '269', 2, 0, '0', 0, '2025-05-05 00:00:00', 0, '2025-05-05 00:00:00', 'approve'),
(442, '2505660032', 6, 'TRAINING', 'AUDITOR ADMIN (A-ADT)', 57, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-06-12', NULL, '237', 2, 0, '0', 0, '2025-06-12 00:00:00', 0, '2025-06-12 00:00:00', 'approve'),
(443, '0002', 27, 'TRAINING', 'SALESMAN WS (OSW)', 43, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2019-05-24', NULL, '290', 2, 0, '0', 0, '2019-05-24 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(444, 'ETH001', 28, 'Kantor Lido', 'KARYAWAN (OKR)', 49, 'KARYAWAN (OKR)', '', 1, 'Pengajuan Admin Sicuan', '', '2018-01-01', NULL, '289', 2, 0, '0', 0, '2018-01-01 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(445, '2508660012', 14, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-04-11', NULL, '239', 2, 0, '0', 0, '2025-04-11 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(446, '2310660062', 13, 'LIDO 15', 'KASIR PELATIHAN (KSC)', 47, 'KASIR PELATIHAN (KSC)', '', 1, 'Pengajuan Admin Sicuan', '', '2023-10-20', NULL, '198', 2, 0, '0', 0, '2023-10-20 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(447, '008', 6, 'TRAINING', 'ADVISOR TAX & LEGAL', 68, 'INTERNSHIP (ISP)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-04-20', NULL, '291', 2, 0, '0', 0, '2025-04-20 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(448, '010', 6, 'TRAINING', 'INTERNSHIP (ISP)', 50, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-05-06', NULL, '292', 2, 0, '0', 0, '2025-05-06 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(449, '009', 6, 'TRAINING', 'INTERNSHIP (ISP)', 50, 'INTERNSHIP (ISP)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-05-06', NULL, '236', 2, 0, '0', 0, '2025-05-06 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(450, '2508990021', 14, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-05-30', NULL, '245', 2, 0, '0', 0, '2025-05-30 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(451, '2508660032', 10, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-05-19', NULL, '244', 2, 0, '0', 0, '2025-05-19 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(452, '189912TR3272', 9, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-06-16', NULL, '260', 2, 0, '0', 0, '2025-06-16 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(453, '189912TR3288', 11, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-07-12', NULL, '277', 2, 0, '0', 0, '2025-07-12 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(454, '189912TR3290', 15, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-07-12', NULL, '278', 2, 0, '0', 0, '2025-07-12 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(455, '189912TR3284', 11, 'TRAINING', 'TRAINING (TRN)', 48, 'INTERNSHIP (ISP)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-07-08', NULL, '273', 2, 0, '0', 0, '2025-07-08 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(456, '189912TR3299', 1, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-07-19', NULL, '285', 2, 0, '0', 0, '2025-07-19 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(457, '189912TR3293', 19, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-07-15', NULL, '280', 2, 0, '0', 0, '2025-07-15 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(458, '2508660042', 19, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-05-30', NULL, '246', 2, 0, '0', 0, '2025-05-30 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(459, '2508990031', 1, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-06-23', NULL, '270', 2, 0, '0', 0, '2025-06-23 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(460, '2508990061', 1, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-07-26', NULL, '257', 2, 0, '0', 0, '2025-07-26 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(461, '189912TR3292', 14, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-07-12', NULL, '279', 2, 0, '0', 0, '2025-07-12 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(462, '189912TR3286', 14, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-07-12', NULL, '275', 2, 0, '0', 0, '2025-07-12 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(463, '189912TR3273', 0, 'TRAINING', '', 0, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-06-23', NULL, '268', 2, 0, '0', 0, '2025-06-23 00:00:00', 0, '2025-06-23 00:00:00', 'approve'),
(464, '189912TR3263', 16, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-05-30', NULL, '247', 2, 0, '0', 0, '2025-05-30 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(465, '189912TR3236', 30, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-04-25', NULL, '241', 2, 0, '0', 0, '2025-04-25 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(466, '189912TR3239', 15, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-04-25', NULL, '242', 2, 0, '0', 0, '2025-04-25 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(467, '2508990011', 10, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-06-12', NULL, '258', 2, 0, '0', 0, '2025-06-12 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(468, '2508660052', 11, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-06-12', NULL, '248', 2, 0, '0', 0, '2025-06-12 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(469, '189912TR3270', 10, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-06-12', NULL, '249', 2, 0, '0', 0, '2025-06-12 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(470, '189912TR3278', 19, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-06-19', NULL, '261', 2, 0, '0', 0, '2025-06-19 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(471, '2508660022', 15, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-04-25', NULL, '240', 2, 0, '0', 0, '2025-04-25 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(472, '189912TR3252', 11, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-05-12', NULL, '243', 2, 0, '0', 0, '2025-05-12 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(473, '189912TR3295', 20, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-07-15', NULL, '282', 2, 0, '0', 0, '2025-07-15 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(475, '189912TR3282', 7, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-07-08', NULL, '272', 2, 0, '0', 0, '2025-07-08 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(476, '189912TR3302', 20, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-07-26', NULL, '283', 2, 0, '0', 0, '2025-07-26 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(477, '2508990051', 1, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-07-26', NULL, '256', 2, 0, '0', 0, '2025-07-26 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(478, '2508990041', 1, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-07-19', NULL, '284', 2, 0, '0', 0, '2025-07-19 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(479, '2204990141', 32, 'Kantor Lido', 'SPV SOFTWARE ENGINEER (SSE)', 65, 'SPV SOFTWARE ENGINEER (SSE)', '', 1, 'Pengajuan Admin Sicuan', '', '2022-10-26', NULL, '143', 2, 0, '0', 0, '2022-10-26 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(480, '2310660012', 32, 'LIDO 08', 'FINANCE (AFN)', 4, 'KASIR PELATIHAN', '', 1, 'Pengajuan Admin Sicuan', '', '2024-03-01', NULL, '196', 2, 0, '0', 0, '2024-03-01 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(481, '2204990121', 34, 'PRMD-CAR', 'DRIVER (DDR)', 26, 'DRIVER (DDR)', '', 1, 'Pengajuan Admin Sicuan', '', '2022-09-02', NULL, '153', 2, 0, '0', 0, '2022-09-02 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(482, '2203990061', 33, 'PRMD-CAR', 'DRIVER (DDR)', 26, 'PRAMU DELIVERY', '', 1, 'Pengajuan Admin Sicuan', '', '2023-07-31', NULL, '147', 2, 0, '0', 0, '2023-07-31 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(483, 'ETH002', 28, 'TRAINING', 'KARYAWAN (OKR)', 49, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-02-01', NULL, '294', 2, 0, '0', 0, '2025-02-01 00:00:00', 0, '0000-00-00 00:00:00', 'approve'),
(484, '2508660022', 15, 'LIDO 07', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', 'PRM003', 1, '', '', '2025-08-05', NULL, '240', 2, 0, '0', 68, '2025-08-04 16:30:51', 51, '2025-08-04 00:00:00', 'approve'),
(485, '2508660042', 19, 'LIDO 12', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', 'PRM003', 1, '', '', '2025-08-05', NULL, '246', 2, 0, '0', 68, '2025-08-04 16:31:31', 51, '2025-08-04 00:00:00', 'approve'),
(486, '2508990011', 10, 'LIDO 02', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', 'PRM003', 1, '', '', '2025-08-05', NULL, '258', 2, 0, '0', 68, '2025-08-04 16:32:00', 51, '2025-08-04 00:00:00', 'approve'),
(487, '2508660032', 10, 'LIDO 02', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', 'PRM003', 1, '', '', '2025-08-05', NULL, '244', 2, 0, '0', 68, '2025-08-04 16:32:22', 51, '2025-08-04 00:00:00', 'approve'),
(488, '2508660012', 14, 'LIDO 06', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', 'PRM003', 1, '', '', '2025-08-05', NULL, '239', 2, 0, '0', 68, '2025-08-04 16:33:16', 51, '2025-08-04 00:00:00', 'approve'),
(489, '2508660052', 11, 'LIDO 03', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', 'PRM002', 1, '', '', '2025-08-04', NULL, '248', 2, 5, '0', 68, '2025-08-04 16:33:48', 51, '2025-08-04 00:00:00', 'approve'),
(491, '2508990021', 16, 'LIDO 06', 'KASIR PELATIHAN (KSC)', 47, 'TRAINING (TRN)', 'MTS005', 3, '', '', '2025-08-05', NULL, '245', 2, 0, '0', 68, '2025-08-04 17:06:50', 51, '2025-08-04 17:14:35', 'approve'),
(492, '189912TR3311', 20, 'LIDO 06', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', 'MTS006', 3, '', '', '2025-08-05', NULL, '295', 2, 0, '0', 68, '2025-08-05 14:20:29', 51, '2025-08-09 12:11:27', 'approve'),
(493, '2508660062', 6, 'TRAINING', 'GENERAL ADMIN (SGA)', 44, 'TRAINING (TRN)', 'PRM004', 1, '', '', '2025-08-06', NULL, '296', 2, 0, '0', 68, '2025-08-08 09:50:56', 51, '2025-08-09 00:00:00', 'approve'),
(494, '2508660072', 6, 'TRAINING', 'GENERAL ADMIN (SGA)', 44, 'TRAINING (TRN)', 'PRM004', 1, '', '', '2025-08-06', NULL, '265', 2, 0, '0', 68, '2025-08-08 09:51:20', 51, '2025-08-09 00:00:00', 'approve'),
(495, '2508660082', 1, 'TRAINING', 'GENERAL ADMIN (SGA)', 44, 'TRAINING (TRN)', 'PRM003', 1, '', '', '2025-08-06', NULL, '267', 2, 0, '0', 68, '2025-08-08 09:51:43', 51, '2025-08-09 00:00:00', 'approve'),
(496, '2302990081', 15, 'LIDO 07', 'SALES ASSOCIATE (SAA)', 33, 'KASIR PELATIHAN (KSC)', 'DMS003', 2, '', '', '2025-08-08', NULL, '168', 2, 0, '0', 68, '2025-08-08 11:14:50', 51, '2025-08-09 00:00:00', 'approve'),
(497, '2204990131', 3, 'GUDANG PKR', 'WAREHOUSE ASSOCIATE (WAS)', 13, 'SALESMAN (OSL)', 'DMS004', 2, '', '', '2025-08-12', NULL, '146', 2, 10, '0', 68, '2025-08-11 16:46:33', 51, '2025-08-22 00:00:00', 'approve'),
(498, '2302990081', 15, 'LIDO 07', 'KASIR PELATIHAN (KSC)', 47, 'SALES ASSOCIATE (SAA)', 'PRM004', 1, '', '', '2025-08-20', NULL, '73', 2, 8, '0', 68, '2025-08-20 12:21:33', 51, '2025-08-22 00:00:00', 'approve'),
(499, '2508990031', 1, 'GUDANG RM', 'WAREHOUSE ASSOCIATE (WAS)', 13, 'TRAINING (TRN)', 'PRM006', 1, '', '', '2025-08-22', NULL, '316', 2, 0, '0', 68, '2025-08-25 14:13:35', 5, '2025-08-26 00:00:00', 'approve'),
(500, '189912TR3301', 11, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', 'PRM008', 1, 'Pengajuan Admin Sicuan', '', '2025-07-26', NULL, '281', 2, 0, '0', 68, '2025-07-26 00:00:00', 5, '2025-08-26 00:00:00', 'approve'),
(501, '189912TR3307', 19, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', 'PRM008', 1, 'Pengajuan Admin Sicuan', '', '2025-07-30', NULL, '305', 2, 0, '0', 68, '2025-07-30 00:00:00', 5, '2025-08-26 00:00:00', 'approve'),
(502, '2306990221', 6, 'TRAINING', 'OPERATION MANAGER (OMN)', 41, 'OPERATION MANAGER (OMN)', 'PRM005', 1, 'Pengajuan Admin Sicuan', '', '2025-06-21', NULL, '185', 2, 0, '0', 68, '2023-06-01 00:00:00', 5, '2025-08-26 00:00:00', 'approve'),
(503, '189912TR3309', 12, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', 'PRM006', 1, 'Pengajuan Admin Sicuan', '', '2025-08-02', NULL, '301', 2, 0, '0', 68, '2025-08-02 00:00:00', 5, '2025-08-26 00:00:00', 'approve'),
(504, '189912TR3303', 15, 'TRAINING', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', 'PRM007', 1, 'Pengajuan Admin Sicuan', '', '2025-08-02', NULL, '297', 2, 0, '0', 68, '2025-08-02 00:00:00', 5, '2025-08-26 00:00:00', 'approve'),
(505, '2508990041', 1, 'GUDANG RM', 'WAREHOUSE ASSOCIATE (WAS)', 13, 'TRAINING (TRN)', 'PRM005', 1, '', '', '2025-08-30', NULL, '332', 2, 0, '0', 68, '2025-09-02 15:45:01', 51, '2025-09-03 00:00:00', 'approve'),
(506, '2508990051', 1, 'GUDANG RM', 'WAREHOUSE ASSOCIATE (WAS)', 13, 'TRAINING (TRN)', 'PRM005', 1, '', '', '2025-08-30', NULL, '331', 2, 0, '0', 68, '2025-09-02 15:45:26', 51, '2025-09-03 00:00:00', 'approve'),
(507, '2508990061', 1, 'GUDANG RM', 'WAREHOUSE ASSOCIATE (WAS)', 13, 'TRAINING (TRN)', 'PRM004', 1, '', '', '2025-08-30', NULL, '288', 2, 0, '0', 68, '2025-09-02 15:45:47', 51, '2025-09-03 00:00:00', 'approve'),
(510, '189912TR3334', 16, 'LIDO 11', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', 'MTS008', 3, '', '', '2025-10-05', 'SOW13092025111', '338', 2, 0, '0', 68, '2025-10-03 16:03:42', 51, '2025-10-04 16:11:42', 'approve'),
(511, '189912TR3349', 18, 'GUDANG LIDO', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', 'MTS008', 3, '', '', '2025-10-05', 'SOW2709202502', '348', 2, 0, '0', 68, '2025-10-03 16:07:09', 51, '2025-10-04 16:11:42', 'approve'),
(512, '189912TR3350', 18, 'GUDANG LIDO', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', 'MTS008', 3, '', '', '2025-10-05', 'SOW2709202501', '347', 2, 0, '0', 68, '2025-10-03 16:08:34', 51, '2025-10-04 16:11:42', 'approve'),
(513, '189912TR3332', 12, 'LIDO 08', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', 'MTS008', 3, '', '', '2025-10-05', 'SOW13092025082', '334', 2, 0, '0', 68, '2025-10-03 16:09:02', 51, '2025-10-04 16:11:42', 'approve'),
(514, '189912TR3333', 12, 'LIDO 08', 'TRAINING (TRN)', 48, 'TRAINING (TRN)', 'MTS007', 3, '', '', '2025-10-05', 'SOW13092025081', '335', 2, 0, '0', 68, '2025-10-03 16:09:28', 51, '2025-10-04 16:11:41', 'approve'),
(516, '2509990011', 1, 'GUDANG RM', 'WAREHOUSE ASSOCIATE (WAS)', 13, 'TRAINING (TRN)', 'PRM007', 1, '', '', '2025-09-23', 'SOW12082025RM5', '350', 2, 0, '0', 68, '2025-10-11 15:26:50', 51, '2025-10-11 00:00:00', 'approve'),
(518, '2410990021', 3, 'GUDANG GOR', 'WAREHOUSE ASSOCIATE (WAS)', 13, 'WAREHOUSE ASSOCIATE (WAS)', 'MTS008', 3, '', '', '2025-10-20', '018.1.PKWTT.KTS.X.2024 ', '30', 2, 10, '0', 68, '2025-10-16 09:55:46', 51, '2025-10-18 16:04:33', 'approve'),
(519, '2510660012', 6, 'LIDO HO', 'CREATIVE HUMAN RESOURCES (CHR)', 62, 'TRAINING (TRN)', '', 1, 'Pengajuan Admin Sicuan', '', '2025-10-11', NULL, '352', 1, 0, '0', 68, '2025-10-11 00:00:00', 0, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `background_idcard`
--

CREATE TABLE `background_idcard` (
  `id_background` int(11) NOT NULL,
  `nama_bg` varchar(255) NOT NULL,
  `foto_bg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `background_idcard`
--

INSERT INTO `background_idcard` (`id_background`, `nama_bg`, `foto_bg`) VALUES
(1, 'test', 'bg.jpg');

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
(4, 2, 4);

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
(1, 'BATCH 1', '2025-10-24 09:26:00', '2025-10-31 09:27:00'),
(2, 'BATCH 2', '2025-10-26 10:11:00', '2025-10-31 10:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `beneficial_history`
--

CREATE TABLE `beneficial_history` (
  `id_beneficial_hs` int(11) NOT NULL,
  `beneficial_id_hs` int(11) DEFAULT NULL,
  `kontrak_id_hs` varchar(100) DEFAULT NULL,
  `emp_id_hs` varchar(20) DEFAULT NULL,
  `jabatan_id_hs` varchar(100) DEFAULT NULL,
  `type_beneficial_hs` varchar(55) DEFAULT NULL,
  `desc_beneficial` text DEFAULT NULL,
  `name_beneficial_hs` varchar(100) DEFAULT NULL,
  `account_beneficial_hs` varchar(55) DEFAULT NULL,
  `pass_beneficial_hs` varchar(255) DEFAULT NULL,
  `nominal_beneficial_hs` varchar(100) DEFAULT NULL,
  `desc_beneficial_item_hs` text DEFAULT NULL,
  `status_beneficial_item` int(11) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `marital_candidate` varchar(10) NOT NULL,
  `socialmedia2_candidate` varchar(255) DEFAULT NULL,
  `socialmedia_candidate` varchar(255) DEFAULT NULL,
  `religion_candidate` varchar(50) NOT NULL,
  `photo_candidate` varchar(10) NOT NULL,
  `is_active` int(10) NOT NULL,
  `state` int(11) NOT NULL DEFAULT 0 COMMENT '0 saat kandidat baru mendaftar, 1 saat kandidat berhasil lolos dan sudah masuk sesi training',
  `date_created` datetime NOT NULL,
  `password_candidate` varchar(255) NOT NULL,
  `device_token` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `id_candidate`, `name_candidate`, `email_candidate`, `no_candidate`, `birthdate_candidate`, `jk_candidate`, `address_candidate`, `poskode_candidate`, `address2_candidate`, `poskode2_candidate`, `noaddress_candidate`, `noaddress2_candidate`, `marital_candidate`, `linkedin_candidate`, `instagram_candidate`, `religion_candidate`, `photo_candidate`, `is_active`, `state`, `date_created`, `password_candidate`, `device_token`) VALUES
(3, 'TR202510002', 'NINDYA RIZQY', 'nindy@gmail.com', '+6281337116001', 'wonosobo, 2000-02-18', '1', 'KENANGAN, SINUNUKAN, KABUPATEN MANDAILING NATAL, SUMATERA UTARA', '12345', 'KENANGAN, SINUNUKAN, KABUPATEN MANDAILING NATAL, SUMATERA UTARA', '12345', '098887990554', '098887990554', '2', 'https://www.msn.com/id-id/berita/other/curhat-warga-ke-purbaya-pagi-buta-ditagih-pajak-rp300-ribu-menkeu-janji-beri-sanksi-saya-hukum/ar-AA1P9iiL', 'http://localhost/lido-career/candidate-biodata/update-biodata', '3', 'file_lido-', 1, 0, '2025-10-24 20:27:29', '$2y$10$yZOtXuYuR2XPgpD23qn7dOge3zwmxRqfilNMXPVJMSiJzSgrwdjzC', ''),
(4, 'TR202510003', 'IDA FANIA', 'idafania33@gmail.com', '+6289907711225', '', '', '', '', '', '', '', '', '', NULL, NULL, '', 'file_lido-', 0, 0, '2025-10-24 20:47:53', '$2y$10$S7eiWyNjl9YCLbeW1CrDY.dnJHQQTk6kOmiqk/ujzmzag/p389qPu', '');

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
(2, 3, 'PT.Sejahtera', 'konveksi', 'kasir', '8', '2025-10', '2025-12', 'testestestetsteettess', '2025-10-25 01:16:42');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_file`
--

CREATE TABLE `candidate_file` (
  `id` int(11) NOT NULL,
  `id_candidate` int(11) NOT NULL,
  `jenis_file` varchar(100) DEFAULT NULL,
  `file_pendukung` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidate_file`
--

INSERT INTO `candidate_file` (`id`, `id_candidate`, `jenis_file`, `file_pendukung`, `created_at`) VALUES
(8, 3, 'Ijazah', 'file_TR202510002_1761329820_ijazah_1.jpg', '2025-10-24 18:17:00'),
(9, 3, 'Portofolio', 'file_TR202510002_1761329843_145.pdf', '2025-10-24 18:17:23');

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
(3, 'SMA, MIPA', 'SMA 1 Wonosobo', '', '2025', '2025', 3, 0),
(4, '-', '-', '0', '2025-10-24', '2025-10-24', 4, 0);

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

--
-- Dumping data for table `candidate_token`
--

INSERT INTO `candidate_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'idafania33@gmail.com', 'ZD/7hYp30X2pRQCW/a07PYFm89xECAB20tMNg2UQw5k=', '2025-10-23 07:54:13'),
(2, 'idafania33@gmail.com', 'dPfJXOODxh/ZGK32iet+NWYXj0ESduc7LsNDmKRq2Hs=', '2025-10-23 21:23:59'),
(3, 'nindy@gmail.com', '7yX8hk3iw1eOyOKlSi+caaN785wKvKl0L6TrrUkXyF8=', '2025-10-24 20:27:29'),
(4, 'idafania33@gmail.com', 'zltD0/MFwR+aOUNDs2o46xevyaLwFlFZooyOr01nGXE=', '2025-10-24 20:47:53');

-- --------------------------------------------------------

--
-- Table structure for table `contract_history`
--

CREATE TABLE `contract_history` (
  `id_contract_history` int(11) NOT NULL,
  `emp_id_hs` varchar(100) NOT NULL,
  `jabatan_hs` varchar(100) DEFAULT NULL,
  `contract_id_hs` int(11) NOT NULL,
  `contract_no_hs` varchar(255) NOT NULL,
  `bhu_hs` int(11) NOT NULL,
  `type_contract_hs` int(11) NOT NULL,
  `start_contract_hs` date NOT NULL,
  `end_contrat_hs` date NOT NULL,
  `link_hs` text NOT NULL,
  `gaji_pojok_hs` varchar(100) NOT NULL,
  `tunjangan_jabatan_hs` varchar(100) NOT NULL,
  `tunjangan_lainnya_hs` varchar(100) NOT NULL,
  `beneficial_hs` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `user_created` varchar(100) NOT NULL
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
(3, 'FINANCE', 'Bertanggung jawab atas pengelolaan keuangan, termasuk perencanaan, penganggaran, pelaporan, dan analisis keuangan', '2025-10-24 21:02:13');

-- --------------------------------------------------------

--
-- Table structure for table `employees_old`
--

CREATE TABLE `employees_old` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_barcode` varchar(60) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `start_contract` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `eshift` varchar(10) DEFAULT NULL,
  `sub_division` varchar(10) NOT NULL,
  `state` varchar(10) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `employees_old`
--

INSERT INTO `employees_old` (`id`, `name`, `id_barcode`, `gender`, `start_contract`, `division`, `eshift`, `sub_division`, `state`) VALUES
(6, 'Satrio Hadi Wibowo', '48112017A1', 'L', '2017-11-01', '6', '1', 'A', '1'),
(7, 'Achmad Ariyadi', '02112013A1', 'L', '2019-05-25', '6', '', 'A', '1'),
(8, 'Budiyono', '92102018A1', 'L', '2019-05-24', '6', NULL, 'A', '1'),
(9, 'Ulin Nuha', '17062015A1', 'L', '2019-05-24', '6', NULL, 'A', '1'),
(10, 'Stiyo Purnomo', '82012019A1', 'L', '2019-05-24', '6', NULL, 'A', '1'),
(11, 'Andri Hariyanto', '09042014A1', 'L', '2019-05-24', '6', NULL, 'A', '1'),
(12, 'Wawan Istiawan', '16042016A1', 'L', '2019-05-24', '6', NULL, 'A', '1'),
(13, 'Wahono', '01112005A1', 'L', '2019-05-24', '6', NULL, 'A', '1'),
(14, 'Anto', '08032014A1', 'L', '2019-05-27', '6', NULL, 'A', '1'),
(15, 'Eri Setiyana', '67082018A2', 'P', '2018-08-02', '6', NULL, 'A', '1'),
(16, 'Hendri Tri Widianto', ' 25092019A1', 'L', '2019-09-11', '6', NULL, 'A', '1'),
(17, 'Saryanti', '15042015C2', 'P', '2019-05-24', '3', NULL, 'B', '1'),
(18, 'Setiawan', '40062017C1', 'L', '2019-05-28', '3', NULL, 'B', '1'),
(19, 'Sri Dekawati', '28122016C2', 'P', '2016-12-14', '3', NULL, 'B', '1'),
(20, 'Leonardus Bagas Kuncoro', '53022018C1', 'L', '2018-02-17', '3', NULL, 'B', '1'),
(21, 'Ahmad Ichsanudin', '45082017C1', 'L', '2017-08-08', '3', NULL, 'B', '1'),
(22, 'Julio Saputra', '99071999A1', 'L', '2017-06-12', '6', NULL, 'B', '1'),
(23, 'Ranto', '12122014B1', 'L', '2019-05-27', '1', NULL, 'B', '1'),
(25, 'Willy Anggrayitno', '43082017B1', 'L', '2019-05-27', '1', NULL, 'B', '1'),
(26, 'Ruslah', '81012019B1', 'L', '2019-02-21', '1', NULL, 'B', '1'),
(27, 'Sagi Setiawan', '03112013B1', 'L', '2013-11-01', '1', NULL, 'B', '1'),
(28, 'Joko Susetiyo', '23102015B1', 'L', '2015-10-02', '1', NULL, 'B', '1'),
(29, 'Roin', '90072015B1', 'L', '2015-12-31', '1', NULL, 'B', '1'),
(31, 'Muh Akrom CN', '20072019D1', 'L', '2019-07-15', '1', NULL, 'B', '1'),
(32, 'Nur Faizan', '28102019B1', 'L', '2019-09-23', '1', NULL, 'B', '1'),
(33, 'Rizki Ardillah', '46012020A1', 'L', '2020-01-01', '8', NULL, 'A', '1'),
(34, 'Triyani Yati', '27112016C2', 'P', '2019-06-12', '7', NULL, 'C', '1'),
(35, 'Tri Fatmawati', '15062019D2', 'P', '2019-07-15', '7', NULL, 'D', '1'),
(36, 'Harjito', '36042017C1', 'L', '2017-04-01', '7', NULL, 'C', '1'),
(37, 'Eni Lestari', '33122016C2', 'P', '2016-12-01', '7', NULL, 'C', '1'),
(38, 'Sindi Antika', '22072019D2', 'P', '2019-07-22', '7', NULL, 'D', '1'),
(39, 'Anggi Listiyana', '45122019B2', 'P', '2019-12-01', '3', NULL, 'B', '1'),
(40, 'Ika Putri Agi Pambudi', '40112019B1', 'P', '2019-11-27', '8', NULL, 'B', '1'),
(41, 'Gede Sanlaristyo', '22102016B1', 'L', '2019-05-27', '8', NULL, 'B', '1'),
(42, 'Sulistiyono', '38102019B1', 'L', '2019-10-28', '8', NULL, 'B', '1'),
(43, 'Ari Nugroho', '010719PKR1', 'L', '2019-07-08', '8', NULL, 'B', '1'),
(44, 'SEPTIANA', '18032016C2', 'P', '2019-06-12', '7', NULL, 'C', '1'),
(45, 'MANARUL HIDAYAT', '77012019C1', 'L', '2019-06-19', '7', NULL, 'C', '1'),
(46, 'RETNO DWI LESTARI', '70102018C2', 'P', '2018-10-01', '7', NULL, 'C', '1'),
(47, 'Feri Irawan', '610220PKR1', 'L', '2020-02-10', '8', NULL, 'PKR', '1'),
(48, 'Kriswanto', '04052019D1', 'L', '2019-10-17', '0', NULL, 'C', '1'),
(49, 'Kriswanto', '04052019D1', 'L', '2019-10-17', '9', NULL, 'C', '1'),
(50, 'Intan Laila Rohmatina', '72082018C2', 'P', '2019-06-18', '9', NULL, 'C', '1'),
(51, 'Siti Kholidah', '12062019D2', 'P', '2019-07-15', '9', NULL, 'C', '1'),
(52, 'Achmad Fatchul Manan', '32102019C1', 'L', '2020-02-05', '9', '1', 'C', '1'),
(53, 'Sandhi Ichsan Listyanto', '34102019C1', 'L', '2019-10-29', '9', NULL, 'C', '1'),
(54, 'Fitria', '62062018C2', 'P', '2019-06-15', '10', NULL, 'C', '1'),
(55, 'Imanudin', '34012017C1', 'L', '2019-06-19', '10', NULL, 'C', '1'),
(56, 'Zaenatus Solikhah', '64062018C2', 'P', '2019-06-18', '10', NULL, 'C', '1'),
(57, 'Mujikuat', '14032015C1', 'L', '2019-06-19', '10', NULL, 'C', '1'),
(58, 'Nurohmad', '57012020B1', 'L', '2020-01-29', '10', NULL, 'C', '1'),
(59, 'Saraful Anam', '62022020C1', 'L', '2020-02-17', '10', NULL, 'C', '1'),
(60, 'Linda Herlinawaty', '04122013C2', 'P', '2023-05-19', '11', NULL, 'C', '1'),
(61, 'Fitria Vidi Saputra', '30122016C1', 'L', '2025-05-19', '11', NULL, 'C', '1'),
(62, 'Etik', '13032015C2', 'P', '2019-06-19', '11', NULL, 'C', '1'),
(63, 'Chusni Chotimah', '32122016C2', 'P', '2019-06-19', '11', NULL, 'C', '1'),
(64, 'Muhammad Dandi Prastiyo', '27102019C1', 'L', '2020-02-05', '11', NULL, 'C', '1'),
(65, 'Ammar Choliq', '33102019C1', 'L', '2020-02-05', '11', '1', 'C', '1'),
(66, 'Pipit Fatmawati', '51122017C2', 'P', '2019-06-15', '12', NULL, 'C', '1'),
(67, 'Indriyani', '09062019D2', 'P', '2019-07-15', '12', NULL, 'C', '1'),
(68, 'Reza Agustin', '43122019C2', 'P', '2019-12-09', '12', NULL, 'C', '1'),
(69, 'Muh Faizin', '58012020C1', 'L', '2020-02-01', '12', NULL, 'C', '1'),
(70, 'Linda Wulandari', '86122018C2', 'P', '2019-06-14', '13', NULL, 'C', '1'),
(71, 'Sri Setyowati', '25102016C2', 'P', '2019-06-14', '13', NULL, 'C', '1'),
(72, 'Wulan Suci Fitriyani', '26102016C2', 'P', '2019-06-15', '13', NULL, 'C', '1'),
(73, 'Qotimatul Zuhro', '24102016C2', 'P', '2019-06-15', '13', NULL, 'C', '1'),
(74, 'Kurnia Shofyanita', '21082016C2', 'P', '2025-05-19', '14', NULL, 'C', '1'),
(75, 'Danang Abrianto', '06052019D1', 'L', '2019-06-12', '14', NULL, 'C', '1'),
(76, 'Muh Taukid', '11062019D1', 'L', '2019-07-15', '14', NULL, 'C', '1'),
(77, 'Desi PratiwiAnugraheni', '10062019D2', 'P', '2019-07-15', '14', NULL, 'C', '1'),
(78, 'Evi Listiyani', '36102019C2', 'P', '2019-12-02', '14', NULL, 'C', '1'),
(79, 'Rohmat Farizal', '37102019C1', 'L', '2019-11-11', '14', NULL, 'C', '1'),
(80, 'Siti Alfiyah', '19032016C2', 'P', '2025-05-19', '15', NULL, 'C', '1'),
(81, 'Lutviya Wahyuningtiyas', '50122017C2', 'P', '2019-06-15', '15', NULL, 'C', '1'),
(82, 'Aulia Wardani', '59062018C2', 'P', '2019-06-15', '15', NULL, 'C', '1'),
(83, 'Bayu Pristi Wanuji', '29122016C1', 'L', '2025-05-19', '16', NULL, 'C', '1'),
(84, 'Irfan Yusuf Maulana', '96032019C1', 'L', '2019-06-17', '16', NULL, 'C', '1'),
(85, 'Doni Aryadi', '29102019C1', 'L', '2020-02-05', '16', NULL, 'C', '1'),
(86, 'Erlin Tri Rahmawati', '44122019C2', 'P', '2020-01-15', '16', NULL, 'C', '1'),
(87, 'Cindy Perwitasari', '51012020C2', 'P', '2020-02-01', '16', NULL, 'C', '1'),
(88, 'Eko Prasetyo', '54042018C1', 'L', '2025-05-20', '17', NULL, 'C', '1'),
(89, 'Leo Prabowo', '94022019C1', 'L', '2019-06-17', '17', NULL, 'C', '1'),
(90, 'Latif Khoirurroziqin', '57052018C1', 'L', '2019-06-18', '3', NULL, 'B', '1'),
(91, 'Tantri Dwi Rahmawati', '23072019D2', 'P', '2019-08-20', '18', NULL, 'C', '1'),
(92, 'Heni Fitri Anifah', '49012020C2', 'P', '2020-02-01', '18', NULL, 'C', '1'),
(93, 'Anifatul Zahro', '85012019C2', 'P', '2025-05-19', '19', NULL, 'C', '1'),
(94, 'Aji Setyawan', '35102019C1', 'L', '2019-10-29', '19', NULL, 'C', '1'),
(95, 'Amin Wirantoko', '50012020C1', 'L', '2020-01-29', '19', NULL, 'C', '1'),
(96, 'Akhmad Syaifudin', '07032014C1', 'L', '2025-05-19', '20', NULL, 'C', '1'),
(97, 'Rio Nur Machfudin', '39102019C1', 'L', '2019-11-11', '20', NULL, 'C', '1'),
(98, 'Muhammad Nawam Basofi', '41102019A1', 'L', '2020-02-06', '3', NULL, 'C', '1'),
(99, 'Alif Saputra', '63022020C1', 'L', '2020-02-20', '13', NULL, 'C', '1'),
(100, 'Ressa Rosita Dewi Agustin', '64022020C2', 'P', '2020-02-20', '22', NULL, 'C', '1'),
(101, 'Ahmad Nasrofi', '65022020C1', 'L', '2020-02-20', '19', NULL, 'C', '1'),
(102, 'Yudhi Kristiawan', '66022020C1', 'L', '2020-02-20', '15', NULL, 'C', '1'),
(103, 'Puji Sri Lestari', '67022020C1', 'P', '2020-02-20', '18', NULL, 'C', '1'),
(104, 'Risky Setiawan', '69022020C1', 'L', '2020-02-20', '13', NULL, 'C', '1'),
(105, 'Sandi Pratama', '70022020C1', 'L', '2020-02-20', '16', NULL, 'C', '1'),
(106, 'Rima Damayanti', '47012020C2', 'P', '2020-01-08', '3', NULL, 'C', '1'),
(107, 'Machamit', '46122019B1', 'L', '2020-01-03', '1', NULL, 'B', '1'),
(108, 'Dwiyanto', '52012020B1', 'L', '2020-01-24', '1', NULL, 'C', '1'),
(109, 'Erwin Febriyan', '53012020B1', 'L', '2020-01-24', '1', NULL, 'C', '1'),
(110, 'Heri Ardiyanto', '55012020B1', 'L', '2020-01-24', '1', NULL, 'C', '1'),
(111, 'Khanafi', '56012020B1', 'L', '2020-01-24', '1', NULL, 'C', '1'),
(112, 'Taat Susilo', '60012020B1', 'L', '2020-02-10', '1', NULL, 'C', '1'),
(113, 'BABA', '1234BB', 'L', '2021-05-01', '1', NULL, 'A', '1'),
(114, 'BC AK', '4321', 'L', '2021-06-15', '1', NULL, 'ABC', '1'),
(115, 'Eko Wahyudi', '11223344', 'L', '2021-07-01', '6', '2', 'ETM', '1'),
(116, 'Training Karyawan', '12345', 'L', '2021-10-01', '7', '1', 'A', '1');

-- --------------------------------------------------------

--
-- Table structure for table `employee_off`
--

CREATE TABLE `employee_off` (
  `id_employee_off` int(11) NOT NULL,
  `id_office_off` int(11) NOT NULL,
  `id_karyawan_off` varchar(60) NOT NULL,
  `kode_letter` varchar(255) NOT NULL,
  `jabatan_off` varchar(255) NOT NULL,
  `description_off` text NOT NULL,
  `note_off` text NOT NULL,
  `status_off` int(11) NOT NULL,
  `date_off` datetime NOT NULL,
  `created_date_off` datetime NOT NULL,
  `updated_date_off` datetime NOT NULL,
  `updated_by_off` int(11) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_off`
--

INSERT INTO `employee_off` (`id_employee_off`, `id_office_off`, `id_karyawan_off`, `kode_letter`, `jabatan_off`, `description_off`, `note_off`, `status_off`, `date_off`, `created_date_off`, `updated_date_off`, `updated_by_off`, `created_by`) VALUES
(11, 15, '2202660052', 'RSG001', 'KASIR CADANGAN', 'Sedang hamil dan ingin keluar kerja karena sudah mendekati hari perkiraan lahir (sudah pengajuan sekitar 2 bulan yang lalu, lewat aplikasi ini) kalau bisa ingin risen di awal bulan mei ?', '', 2, '2023-05-01 00:00:00', '2023-04-18 16:02:00', '2023-04-27 16:10:14', 5, NULL),
(12, 8, '2202990031', 'RSG001', 'SALESMAN', 'Pindah domisili dan wirausaha', 'MASA FREEZE KAMU SEJAK 24 MEI 2023\r\nSYARAT BISA OFF :\r\n1. MENYELESAIKAN SEMUA PIUTANG BEREDAR DI AREA NYA\r\n2. TELAH DILAKUKAN AUDIT BERSAMA MAX PADA 20-23 MEI 2023\r\n3. TELAH DILAKUKAN SERAH TERIMA PEKERJAAN DAN DATA\r\n4. DILAKUKAN KUNJUNGAN BERSAMA DENGAN TEAM HEAD OFFICE KE 100% MEMBER YANG DICOVER', 2, '2023-06-01 00:00:00', '2023-05-02 20:48:42', '2023-05-03 14:37:51', 51, NULL),
(13, 3, '2206660042', 'RSG002', 'KASIR CADANGAN', 'Mau mencoba bersiwrausaha sendiri', 'terimakasih atas kontribusi kamu selama ini.\r\nsukses selalu dalam berwirausaha, terus belajar yaa jangan merasa puas dengan hasil.\r\nlakukan serahterima maksimal 07 Juni 2023 kepada HR dan ASM\r\nterimakasih...', 2, '2023-06-11 00:00:00', '2023-05-11 08:37:14', '2023-05-13 09:32:19', 51, NULL),
(14, 6, '2106990011', '', 'FINANCE', 'Berakhirnya Kontrak, Dan Ingin Melanjutkan Perubahan Karier.', 'Kontrak kamu menggunakan jangka tak tentu. sehingga alasan tersebut belum dapat diterima. selanjutnya pertimbangan lainnya adalah kamu masih termasuk dalam grup internal pembuat system LIDO29, silakan ajukan ulang resignnya setelah menyelesaikan serah terima jabatan internal dan administratif internal.', 3, '2023-06-15 00:00:00', '2023-05-19 12:06:46', '0000-00-00 00:00:00', 51, NULL),
(17, 3, '2209990031', 'RSG001', 'SALES KOORDINATOR', 'Fokus untuk usaha ternak dan toko kelontong', 'TERIMAKASIH ATAS KONTRIBUSI SEJAUH INI BERSAMA LIDO29\r\nPastikan \r\n1. tanggal 14 Juni 2023 serah terima pekerjaan kepada ASM (satrio), CHR (Panca) dan OMN (Purwogiri)\r\n2. tanggal 15 Juni 2023 Freeze kinerja untuk dilakukannya audit secara menyeluruh beserta serah terima semua inventaris\r\n3. tanggal 16 Juni 2023 Resmi OFF', 2, '2023-06-16 00:00:00', '2023-06-13 07:23:59', '2023-06-13 17:02:40', 51, NULL),
(19, 6, '2210990011', 'RSG002', 'PURCHASING', 'Tidak mampu handle 2 divisi ( Lido & Dewa Ruci )', 'resign kamu diterima, pastikan untuk segera membuat Jurnal kerja, manual book kinerja apa saja yang harus kamu cover dan kerjakan, persiapkan dokumen untuk dilakukan serah terima kepada perusahaan dan pengganti kamu, tetap kooperatif untuk melakukan training kepada pengganti.\r\n\r\nterimakasih atas kontribusi kamu selama ini.', 2, '2023-07-08 00:00:00', '2023-06-19 07:51:14', '2023-06-23 14:49:33', 51, NULL),
(24, 23, '2204990061', 'RSG002', 'PRAMU DELIVERY', 'TIDAK BISA DI TEMPAT KAN KE TOKO YANG JAUH KARENA SAYA HARUS MENGURUS KEPERLUAN DI RUMAH SOAL NYA MBAH SAYA SAKIT SUDAH TIDAK BISA JALAN LAGI ? ', 'pastikan tetap kooperatif hingga tanggal resmi off', 2, '2023-07-01 00:00:00', '2023-06-19 18:17:31', '2023-06-23 14:52:02', 51, NULL),
(25, 15, '2208990071', '', 'PRAMU DELIVERY', 'Pak kalau bisa di acc pada tanggal 10, dikarenakan saya akan merantau pada tanggal 9. Mohon maaf jika ijin saya mendadak, dikarenakan ini keputusan dari keluarga, sebelumnya saya meminta maaf dan terima kasih atas pekerjaan yang anda berikan.sekian saya mengucapkan terima kasih.', 'telah mangkir', 3, '2023-07-20 00:00:00', '2023-07-15 18:22:52', '0000-00-00 00:00:00', 51, NULL),
(27, 6, '2002990011', 'RSG002', 'TAX AND LEGAL', 'Ingin istirahat dan terapi. ', 'Resign kamu saat ini di terima dengan beberapa skema dan timeline berikut ini :\r\n1. 24 - 29 Juni 2023 membantu CHR untuk mencari kandidat pengganti\r\n2. 24 - 30 Juni 2023 menyiapkan skema, jurnal kerja devisi, tanggung jawab dalam modul kerja guna mempersiapkan serah terima dan di delegasikan kepada pengganti berikutnya\r\n3. 1-5 juli 2023 melakukan audit pada devisinya untuk di serahkan kepada direksi secara langsung\r\n4. 8-11 cuti\r\n5. 12-31 juli melakukan hand over kinerja, tanggung jawab dan semua project yang berlangsung kepada perusahaan, direksi dan pengganti.\r\n\r\nkamu resmi FREEZE sejak 26 Juli 2023\r\nRESMI OFF sejak 01 Agustus 2023.\r\n\r\nterimakasih atas kontribusi kamu selama ini kepada LIDO29', 2, '2023-08-01 00:00:00', '2023-06-23 10:39:49', '2023-06-23 14:45:17', 51, NULL),
(28, 15, '2211990021', '', 'PRAMU DELIVERY', 'Saya ingin ke jakarta karna alasan yang tidak dapat saya sampaikan, mohon kerjasamanya\r\nMaaf mendadak soalnya baru di beritahu kemarin', 'telah mangkir', 3, '2023-08-02 00:00:00', '2023-07-15 18:22:38', '0000-00-00 00:00:00', 51, NULL),
(29, 21, '2212660052', 'RSG001', 'GENERAL ADMIN', '1.Tidak ada pembaharuan kejelasan kontrak(status masih masa uji sehingga belum mendapat jatah cuti)\r\n 2.Ada tawaran pekerjaan di perusahaan lain', 'Resign kamu saat ini di terima dengan beberapa skema dan timeline berikut ini : [1] 15-19 Juli 2023 membantu CHR untuk mencari kandidat pengganti [2] 20 - 24 Juli 2023 menyiapkan skema, jurnal kerja devisi, tanggung jawab dalam modul kerja guna mempersiapkan serah terima dan di delegasikan kepada pengganti berikutnya [3] 25-26 juli 2023 melakukan audit pada devisinya untuk di serahkan kepada direksi secara langsung [4] 27-28 Juli 2023 hand over kinerja, tanggung jawab dan semua project yang berlangsung kepada perusahaan, direksi dan pengganti. [5] 29-30 2023 juli kamu resmi FREEZE kinerja,\r\nterimakasih atas kontribusi kamu selama ini kepada LIDO29.\r\nsaya percaya bahwa kamu adalah orang yang sportif akan mengikuti prosedur hingga akhir.\r\n\r\nbest regards,\r\nBeni D Pridika', 2, '2023-07-30 00:00:00', '2023-06-26 21:40:02', '2023-07-15 18:22:15', 51, NULL),
(30, 6, '2203990011', 'RSG002', 'PIC - CABANG', 'Karena percaya diri sudah berkurang dan seperti yang sudah saya utarakan di kantor sebelumnya ?.  Terimakasih untuk lido, semoga selalu maju. ', 'Resign kamu sudah kami terima, namun perlu digaris bawahi bahwa proses ini akan berlangsung dengan timeline berikut :\r\n26 - 29 Juli 2023 kamu bertanggung jawab untuk rekrutmen pengganti kamu\r\n30 Juli - 4 Agustus kamu bertanggung jawab untuk memberikan training dan pembekalan\r\n5 - 8 Agustus kamu akan lakukan serah terima, audit dan pemeriksaan oleh tim auditor dan management\r\n9 dan 10 kamu freeze dan pengembalian segala inventaris, maintenance group dan alat komunikasi\r\n11 kamu akan resmi OFF\r\n\r\nBtw, terimakasih atas kontribusi kamu selama ini,\r\nsukses selalu', 3, '2023-08-11 00:00:00', '2023-06-29 22:52:30', '2023-07-26 08:13:32', 51, NULL),
(32, 18, '2212990191', 'RSG001', 'PRAMU DELIVERY', 'Ingin mengistirahatkan badan setelah operasi dan supaya tidak membuat tim terhambat karena kinerja yang kurang prima', 'terimakasih atas kontribusi selama ini.\r\nsemoga lekas membaik', 2, '2023-07-17 00:00:00', '2023-07-01 14:57:58', '2023-07-15 18:23:28', 51, NULL),
(34, 3, '2204990021', '', 'KARYAWAN', 'merasa sudah tidak cocok dengan pekerjaan sehingga membuat kerja tidak semangat, takutnya kedepannya membuat tidak produktif ?', 'lakukan mediasi dengan direksi dahulu sebelum mengajukan resign nya karena km ada di devisi produksi.\r\nthanks', 3, '2023-08-17 00:00:00', '2023-07-26 08:09:36', '0000-00-00 00:00:00', 51, NULL),
(35, 6, '2306660042', 'RSG002', 'PLT PIC-CABANG', 'Ikut suami keluar kota', 'proses resign kamu diterima dan kamu akan off pada periode cut off\r\n\r\nthanks', 2, '2023-08-21 00:00:00', '2023-07-18 16:20:09', '2023-07-26 08:14:08', 51, NULL),
(36, 24, '2212990081', 'RSG002', 'DRIVER', 'Karena penguran driver klo ada lowangan driver  saya mau lamar lg.', 'Hari ini Tanggal : Senin, 31 Juli 2023 kamu di freeze dari pekerjaan kamu, silahkan untuk melakukan serah terima kerja dengan PIC dan CHR , kamu akan mulai OFF Selasa, 01 Agustus 2023, Terimakasih Atas Semua Kontribusinya Bagi Lido29', 2, '2023-08-01 00:00:00', '2023-07-31 10:12:56', '2023-07-31 10:42:14', 5, NULL),
(37, 1, '2305990051', '', 'HELPER', 'Tidak krasan', 'mangkir', 3, '2023-09-02 00:00:00', '2023-09-22 19:43:52', '0000-00-00 00:00:00', 51, NULL),
(39, 21, '2209660012', '', 'GENERAL ADMIN', 'Akan pindah domisili', 'YBS tidak memenuhi ketentuan resign, tidak ada serah terima jabatan, dan bertindak MANGKIR', 3, '2023-09-03 00:00:00', '2023-08-18 08:43:30', '0000-00-00 00:00:00', 51, NULL),
(40, 11, '2212990041', '', 'PRAMU DELIVERY', 'Ingin berhenti bekerja karena ingin melanjutkan merawat kebun ', 'YBS tidak memenuhi ketentuan resign, tidak ada serah terima jabatan, dan bertindak MANGKIR', 3, '2023-09-03 00:00:00', '2023-08-18 08:44:33', '0000-00-00 00:00:00', 51, NULL),
(41, 6, '2201660022', '', 'PIC - CABANG', 'capek pak', 'YBS tidak memenuhi ketentuan resign, tidak ada serah terima jabatan, dan bertindak MANGKIR', 3, '2023-09-03 00:00:00', '2023-08-18 08:43:19', '0000-00-00 00:00:00', 51, NULL),
(43, 3, '2204990021', 'RSG001', 'KARYAWAN', 'sudah tidak produktif dan menjadi beban perusahaan', 'pastikan serah terima dahulu dengan P Eko Wahyudi, terutama untuk piutang, keuangan dan stok gudang daging', 2, '2023-08-25 00:00:00', '2023-08-21 14:54:30', '2023-08-22 14:39:03', 51, NULL),
(44, 6, '2204660022', 'RSG002', 'GENERAL ADMIN', 'Saya tidak mampu beradaptasi dengan perkembangan perusahaan, saya tidak mau menjadi penghambat untuk teman yang lain. Saya merasa kesehatan fisik dan mental yang tidak mampu untuk mengikuti perkembangan yang ada, saya tidak mau teman yang lain untuk selalu menatih dengan keadaan saya. ', 'pastikan melakukan hal-hal berikut sebelum mulai resign\r\n1. membuat rincian pekerjaan yang selama ini di handel, dilakukan, menjadi sebuah jurnal kerja dan manual book\r\n2. mencari kandidat pengganti\r\n3. melakukan serah terima pekerjaan kepada devisi / Director ops / chr / director Ethes Tech\r\n4. kamu dapat lakukan serah terima maksimal 31 Agustus 2022 dan mulai off pada 3 sept 2023', 2, '2023-09-02 00:00:00', '2023-08-22 13:44:57', '2023-08-22 14:42:57', 51, NULL),
(45, 8, '2201990051', 'RSG003', 'SALESMAN', 'Dapat panggilan kerja di luar jawa', 'pastikan untuk mendapatkan pengganti sales dahulu,\r\nresign kamu akan efektif jika telah ada pengganti sales', 2, '2023-10-07 00:00:00', '2023-08-28 08:06:59', '2023-09-22 19:45:05', 51, NULL),
(46, 7, '2212660012', 'RSG002', 'KASIR CADANGAN', 'MUTASI TERLALU JAUH', '', 2, '2023-09-01 00:00:00', '2023-08-31 07:35:03', '2023-08-31 18:19:10', 51, NULL),
(48, 3, '1905990051', 'RSG002', 'HELPER', 'Di karenakan mau merawat lahan sawit orang tua di Riau,yang sudah di Replanting dan pembaharuan lagi.', '', 2, '2023-10-03 00:00:00', '2023-09-03 21:58:31', '2023-09-22 19:43:31', 51, NULL),
(49, 21, '2302990011', 'RSG001', 'PRMD', 'Ingin mencari pengalaman kerja baru \r\ningin menambah wawasan lebih luas', '', 2, '2023-10-04 00:00:00', '2023-09-04 08:55:37', '2023-09-22 19:43:00', 51, NULL),
(51, 11, '1905660012', 'RSG003', 'KASIR PENDAMPING', 'Terkait surat mutasi ke lido 13, karena tidak di ijin kan suami karena jauh banyak pertimbangan, anak dll', '', 2, '2023-10-11 00:00:00', '2023-09-11 19:09:42', '2023-09-22 19:44:03', 51, NULL),
(52, 24, '1905990031', '', 'PRMD-C', 'Usaha dagang', 'MANGKIR', 3, '2023-10-16 00:00:00', '2023-09-16 16:11:55', '0000-00-00 00:00:00', NULL, NULL),
(53, 6, '2106990031', 'RSG003', 'GENERAL ADMIN', 'Sudah tidak mampu dengan skema kerjaan yang begitu banyak, sudah berusaha sebulan untuk menjalankan namun saya rasa saya tidak mampu, dan memutuskan mengundurkan diri dari bagian Lido. Banyak hal yang terjadi namun saya tidak bisa menulisnya. Sekian, Terimakasih ', 'pastikan segera melakukan proses rekrutmen karyawan pengganti\r\nserah terima pada 11 okt 2023, menandatangani berkas2 resign dari chr, menyerahkan semua data dan akses max 11 okt 2023 kepada spv affairs, chr, adm oditor, dan direksi\r\n12, 13 okt freeze dan hanya membantu pengganti yang baru\r\n14 okt 2023 efektif off', 2, '2023-10-14 00:00:00', '2023-09-21 10:42:41', '2023-09-28 18:57:04', 51, NULL),
(54, 6, '2306990051', 'RSG003', 'Staff Content Creator', 'Melanjutkan pendidikan ke jenjang perkuliahan,', 'lakukan segera serah terima segala tugas, inventaris, dan hak akses maksimal 29 sept 2023 kepada spv affairs, kandidat pengganti, chr, dan direksi sebagai atasan.\r\n30 sept 2023 freeze dan efektif off pada 01 okt 2023', 2, '2023-09-30 00:00:00', '2023-09-22 19:30:59', '2023-09-28 18:58:28', 51, NULL),
(69, 23, '2203660042', 'RSG003', 'KASIR PENDAMPING', 'Cuti melahirkan', 'pastikan melakukan serah terima kepada PIC\r\n28 dilakukan freeze dari semua transaksi baik kasir maupun Joovan,\r\n29 efektif off.', 2, '2023-09-29 00:00:00', '2023-09-26 20:08:28', '2023-09-27 08:55:46', 51, NULL),
(70, 6, '2212660102', 'RSG003', 'AUDITOR', 'Dikarenakan masalah kesehatan, pemeriksaan terakhir mengenai kesehatan dimana ada kista di rahim saya sehingga untuk sementara ini saya ingin rest dari dunia kerja terlebih dahulu. Disamping itu juga karena ditakutkan jika dipaksakan tetap mengikuti kegiatan audit, akan menyebabkan pincang team dalam pekerjaan karena performa saya yang turun seperti sekarang.\r\n', 'pastikan untuk menyelesaikan semua pekerjaan yg masih tertunda, melakukan serah terima kepada tim oditor lain pada 3 Oktober 2023, menyerahkan semua hak akses dan data2 kepada SPV affairs, CHR, adm odit dan direksi \r\nfreeze (hanya sekedar membantu tim head office) 4 okt 23\r\n5 okt 2023 dinyatakan OFF.\r\npastikan untuk segera menandatangani berkas2 resign dari CHR max pada 3 okt 2023.\r\nmembantu proses rekrutmen tim', 2, '2023-10-05 00:00:00', '2023-09-28 13:20:10', '2023-09-28 18:52:42', 51, NULL),
(71, 6, '2307990061', '', 'GENERAL ADMIN', 'Dear Pak Beni ,\r\nmohon maaf pak saya mengajukan ini karena saya belum kompeten di bagian tax apalagi legal ada pula saya punya riwayat hipertensi pak kalau setiap ada tekanan atau kegiatan mendesak saya sering kali pusing . Terimakasih ', '', 3, '2023-11-02 00:00:00', '2023-10-02 16:07:54', '0000-00-00 00:00:00', 51, NULL),
(72, 9, '2208660032', '', 'KASIR CADANGAN', 'Hamil dan disuruh berhenti oleh suami ', 'TERCATAT SEBAGAI MANGKIR KARENA OFF SEBELUM MENDAPATKAN APPROVAL RESIGN NYA.', 3, '2023-10-07 00:00:00', '2023-10-07 20:26:17', '0000-00-00 00:00:00', 51, NULL),
(73, 10, '2207660012', 'RSG001', 'KASIR CADANGAN', 'Cari pengalaman baru ', 'FREEZE TRANSAKSI SEJAK 09/10/2023\r\nTIDAK DIPERKENANKAN MELAKUKAN TRANSAKSI, PERSIAPAN BARANG JOOVAN, CEK STOK, AKSES IPOS, CEK KIRIMAN, PENAGIHAN, DAN SEGALA AKTIVITAS YANG BERHUBUNGAN DENGAN KEUANGAN MAUPUN ADMINISTRATIF', 2, '2023-10-11 00:00:00', '2023-10-05 18:40:46', '2023-10-07 20:23:54', 51, NULL),
(74, 11, '2203990071', '', 'KASIR UTAMA', 'Panggilan kerja ditempat baru', 'MANGKIR', 3, '2023-11-08 00:00:00', '2023-10-08 12:15:58', '0000-00-00 00:00:00', NULL, NULL),
(75, 10, '2306990141', '', 'KASIR PELATIHAN', 'alasan saya risegn karena mau ikut saudada ke jakarta, terimakasih banyak untuk lido grosir dan saya berharap kedepanya lido akan terus maju dan sukses selalu, aminn', 'MANGKIR', 3, '2023-11-08 00:00:00', '2023-10-08 13:52:45', '0000-00-00 00:00:00', NULL, NULL),
(76, 14, '2206660052', 'RSG001', 'PIC-CABANG', 'Saya mau istirahat pak, Lido Borobudur biar dilanjutkan sama yang lain saja.\r\n\r\nSaya terus terusan mau laporan terkait kekurangan karyawan sebenarnya, tapi takut dicap \'tukang ngeluh\' jadi saya backup sendirian. \r\n\r\nIntinya dari saya sendiri mau istirahat pak, entah nanti jadinya seperti apa, saya sudah berusaha disini maaf kalau saya mengundurkan diri dan banyak ngeluhnya pak. Terimakasih semoga dibaca.', '', 2, '2023-11-03 00:00:00', '2023-10-10 09:36:27', '2023-11-01 15:43:36', 51, NULL),
(78, 19, '2307660022', 'RSG002', 'KASIR PELATIHAN', '1.Akan menikah dan tidak diperbolehkan melanjutkan pekerjaan oleh suami dengan setatus saya sebagai istri', 'pastikan adanya serahterima pekerjaan, inventaris dan adanya kasir pengganti', 2, '2023-11-14 00:00:00', '2023-11-07 15:58:38', '2023-11-08 13:58:49', 51, NULL),
(79, 15, '2305990101', 'RSG001', 'KASIR CADANGAN', 'Sakit ', 'pastikan adanya serah terima pekerjaan dan inventaris', 2, '2023-11-09 00:00:00', '2023-11-08 13:53:01', '2023-11-08 13:57:47', 51, NULL),
(80, 6, '2207990161', '', 'NON JOB', 'Tidak ada alasan', 'MANGKIR', 3, '2023-12-14 00:00:00', '2023-11-14 17:51:25', '0000-00-00 00:00:00', NULL, NULL),
(81, 12, '2212660022', 'RSG003', 'KASIR PELATIHAN', 'Hamil muda untuk menjaga kandungan saya (saran dokter)', 'segera lakukan serah terima dan penarikan akses', 2, '2023-11-23 00:00:00', '2023-11-16 14:35:32', '2023-11-21 09:25:07', 51, NULL),
(82, 6, '2209990051', 'RSG003', 'DRIVER', 'Rs', '', 2, '2023-11-22 00:00:00', '2023-11-21 09:07:33', '2023-11-21 09:26:21', 51, NULL),
(83, 6, '2104660022', 'RSG003', 'PIC-CABANG', 'Menikah', 'Tanggal FREEZE dari jabatan Fungsional PIC dan Transaksional per tanggal 17 Desember 2023.\r\nLakukan kinerja sebagai freeze fungsi dan tetap berlaku kooperatif dalam proses audit, pemeriksaan menyeluruh, serah terima dan validasi data dan fakta lapangan sejak 17 Des 2023.\r\npencabutan akses fungsional dan transaksional sejak tanggal freeze.\r\nSerah terima general karyawan, penandatanganan berkas non aktif dan pelengkap paklaring di kantor pusat 21 Des 2023\r\nresmi OFF per 22 Des 2023', 2, '2023-12-21 00:00:00', '2023-11-21 11:50:35', '2023-11-27 23:37:27', 51, NULL),
(84, 6, '1905990021', '', 'SALESMAN', 'Berwirausaha', 'MANGKIR', 3, '2023-12-29 00:00:00', '2023-11-29 17:50:53', '0000-00-00 00:00:00', NULL, NULL),
(88, 7, '2202990011', '', 'SALES ASSOCIATE (SAA)', 'Dikarenakan saya harus bantu orang tua saya\r\n ', 'MANGKIR', 3, '2024-01-07 00:00:00', '2023-12-07 10:45:58', '0000-00-00 00:00:00', NULL, NULL),
(91, 3, '2202990021', '', 'WAREHOUSE ASSOCIATE (WAS)', 'Tidak adanya apresiasi dari atasan. \r\n', 'MANGKIR', 3, '2024-01-21 00:00:00', '2023-12-21 11:49:41', '0000-00-00 00:00:00', NULL, NULL),
(92, 14, '2306660052', '', 'KASIR PELATIHAN (KSC)', 'ikut orang tua', 'UPGRADE', 3, '2024-01-30 00:00:00', '2023-12-30 16:04:39', '0000-00-00 00:00:00', NULL, NULL),
(94, 9, '2306660072', '', 'KASIR PELATIHAN (KSC)', 'Di ajak keluarga untuk bekerja di Jakarta \r\nKet: mohon di acc agar bisa off tanggal 21 Januari 2024 karena mau ke Jakarta ', 'MANGKIR', 3, '2024-02-01 00:00:00', '2024-01-01 22:40:04', '0000-00-00 00:00:00', NULL, NULL),
(96, 15, '2203990081', '', 'SALES ASSOCIATE (SAA)', 'Tidak sejalan dengan demosi yang di tetapkan', 'MANGKIR', 3, '2024-02-13 00:00:00', '2024-01-13 10:51:50', '0000-00-00 00:00:00', NULL, NULL),
(97, 6, '2305990021', '', 'CREATIVE HUMAN RESOURCES (CHR)', 'Hasil evaluasi tdk perfome sebagai CHR. Sesuai perjanjian dengan tegat waktu yang telah di lakukan. ', 'pindah PKR admin warehouse', 3, '2024-03-02 00:00:00', '2024-01-31 16:34:29', '0000-00-00 00:00:00', 51, NULL),
(98, 11, '2308990041', 'RSG002', 'SALES ASSOCIATE (SAA)', 'sekolah bahasa', 'MANGKIR', 3, '2024-02-21 00:00:00', '2024-02-09 19:36:56', '2024-02-13 08:00:42', 51, NULL),
(100, 11, '2307660062', 'RSG001', 'KASIR PELATIHAN (KSC)', 'Anggota KPPS', '', 2, '2024-02-13 00:00:00', '2024-02-09 21:06:17', '2024-02-13 07:57:20', 51, NULL),
(102, 1, '2212660082', 'RSG003', 'WAREHOUSE CASHIER (WAC)', 'Ingin fokus membuka produk homemade sendiri dirumah\r\n', '', 2, '2024-03-10 00:00:00', '2024-02-10 11:07:20', '2024-02-13 08:01:10', 51, NULL),
(103, 6, '2310660052', 'RSG002', 'AUDITOR PLT (P-ADT)', 'Fokus kuliah', '', 3, '2024-03-10 00:00:00', '2024-02-10 13:20:12', '2024-02-13 07:59:38', 51, NULL),
(104, 14, '2201990071', 'RSG002', 'SALES ASSOCIATE (SAA)', '2 Tahun target bekerja di LIDO Grosir sudah tercapai, ingin mengembangkan usaha.', '', 2, '2024-03-12 00:00:00', '2024-02-12 19:03:20', '2024-02-13 07:58:52', 51, NULL),
(105, 6, '2309660062', '', 'AUDITOR PLT (P-ADT)', '1. Jam kerja overtime, pulang malam terus sehingga tidak ada waktu untuk pribadi terutama keluarga.\r\n2. Tidak sanggup cewe sendiri jika saat audit gudang RM.', 'i guess you can do the best more here.\r\nyou have a capability to be a leader next.\r\nfighting ayuuu', 3, '2024-03-19 00:00:00', '2024-02-20 07:42:16', '0000-00-00 00:00:00', 51, NULL),
(106, 6, '2310660082', 'RSG002', 'GENERAL ADMIN PLT (P-SGA)', 'Saya sangat berterima kasih kepada perusahaan yang telah mempekerjakan saya selama ini, namun kenapa saya berhenti adalah karena hal pribadi yang tidak bisa dikatakan.', 'segera melakukan serah terima tugas-tugas beserta memberikan delegasi dan pendampingan kepada staff pengganti mulai 04 mei 2024 hingga tanggal 18 mei 2024. segera konsultasikan kepada direktur finance dan manager. serah terima inventaris dan akun-akun pada 16, 17,, 18, 20 Mei 2024 bersama dengan auditor, manager, staff pengganti, strategis dan PIC Software engineer. Freeze dari semua pekerjaan mulai 19 dan 20 mei 2024.', 2, '2024-05-21 00:00:00', '2024-02-20 03:59:51', '2024-05-02 19:33:44', 51, NULL),
(107, 6, '2312990021', 'RSG001', 'HRD', 'Sesuai kesepakatan kerja diawal, jika tidak achive 3 bulan pertama per tanggal 15 Desember 2023 maka mengundurkan diri.\r\nMohon maaf dengan keterbatasan saya belum bisa memberikan yang terbaik. Terima kasih ?', 'lakukan serah terima secara total kepada Auditor, HR pengganti, OMN, Tax&Legal bersama dengan Pandu dan Direksi Bis Dev.', 2, '2024-03-20 00:00:00', '2024-03-10 16:33:32', '2024-03-15 09:09:13', 51, NULL),
(110, 6, '2305990021', 'RSG002', 'CREATIVE HUMAN RESOURCES (CHR)', 'Dinyatakan tidak lulus evaluasi.\r\nTerima kasih atas kesempatan yg telah diberikan kepada saya.\r\n?', 'terimakasih atas sikap kooperatif dan berlaku Fair dalam pekerjaan.\r\nsemoga sukses selalu, lebih baik ke depan, dan tetap profesional saling menjaga silaturahmi.\r\npastikan untuk serah terima dengan PJ yang melanjutkan dan pastikan farewell secara baik kepada rekan lainnya.', 2, '2024-03-21 00:00:00', '2024-03-19 18:36:17', '2024-03-19 19:25:42', 51, NULL),
(111, 13, '2310660022', 'RSG002', 'KASIR PELATIHAN (KSC)', 'Masalah sudah selesai', 'hal ini bukan penyelesaian masalah, melainkan loss solution perusahaan.\r\nsaran untuk kedepan lebih profesional, menjaga integritas mandiri dan sukses selalu dimanapun.', 2, '2024-03-22 00:00:00', '2024-03-20 16:08:40', '2024-03-21 11:46:32', 51, NULL),
(112, 13, '2307660032', 'RSG002', 'KASIR PELATIHAN (KSC)', 'Masalah sudah selesai', 'hal ini bukan penyelesaian masalah, melainkan loss solution perusahaan.\r\nsaran untuk kedepan lebih profesional, menjaga integritas mandiri dan sukses selalu dimanapun.', 2, '2024-03-22 00:00:00', '2024-03-20 16:27:17', '2024-03-21 11:47:14', 51, NULL),
(114, 9, '2308990051', '', 'SALES ASSOCIATE (SAA)', 'Karena sudah tidak nyaman lagi dan ingin mencari kerja yang lebih mumpuni terimakasih', 'MANGKIR', 3, '2024-06-05 00:00:00', '2024-03-23 10:46:40', '0000-00-00 00:00:00', NULL, NULL),
(116, 21, '189912TR3157', '', 'KARYAWAN (OKR)', 'Tidak mampu melanjutkan, karena sebelumnya tidak memiliki pengalaman dengan sales dan tidak menguasai wilayah. Jadi tuntutan pekerjaan tidak bisa memenuhi.', 'MANGKIR', 3, '2024-05-01 00:00:00', '2024-03-31 11:43:10', '0000-00-00 00:00:00', NULL, NULL),
(117, 21, '2402990031', '', 'TRAINING', 'Tidak bisa tinggal di mes lagi , di karenakan harus menemani kakek di rumah , di laju juga jarak jauh ', 'MANGKIR', 3, '2024-05-02 00:00:00', '2024-04-02 14:23:57', '0000-00-00 00:00:00', NULL, NULL),
(119, 21, '189912TR3155', 'RSG002', 'KARYAWAN (OKR)', 'Saya merasa saya kurang mampu dalam menjalankan tugas dibagian saya yang sekarang, dan jam kerja overload, saya merasa takut tidak bisa menjalankan semua tigas saya yang seduai keinginan bapak ', 'terimakasih atas partisipasi selama di Lido.\r\npastikan untuk melakukan serah terima kepada team marketing lainnya atas pekerjaan yang sudah dijalaninya.', 2, '2024-04-21 00:00:00', '2024-04-15 04:22:44', '2024-04-18 14:45:50', 51, NULL),
(120, 6, '2307660052', 'RSG002', 'PURCHASE STAFF (PRC)', 'Mohon maaf tidak bisa menulis disini, akan saya sampaikan secara langsung kepada manager operasional.', 'segera melakukan serah terima tugas-tugas beserta memberikan delegasi dan pendampingan kepada staff pengganti mulai 04 mei 2024 hingga tanggal 18 mei 2024. segera konsultasikan kepada direktur purchase dan manager.\r\nserah terima inventaris dan akun-akun pada 16, 17,, 18, 20 Mei 2024 bersama dengan auditor, manager, staff pengganti, strategis dan PIC Software engineer.\r\nFreeze dari semua pekerjaan mulai 19 dan 20 mei 2024.', 2, '2024-05-21 00:00:00', '2024-04-26 08:22:44', '2024-05-02 18:13:12', 51, NULL),
(121, 12, '2309990041', 'RSG002', 'SALES ASSOCIATE (SAA)', 'Ingin melanjutkan pendidikan', 'pastikan untuk melakukan serah terima kepada atasan langsung max H-1 off nya.', 2, '2024-06-16 00:00:00', '2024-05-13 11:11:02', '2024-05-14 23:21:56', 51, NULL),
(122, 14, '2306660052', '', 'KASIR PELATIHAN (KSC)', 'ikut orang tua', 'UPGRADE DULU AJA', 3, '2024-06-17 00:00:00', '2024-05-31 11:15:46', '0000-00-00 00:00:00', 51, NULL),
(123, 9, '2212660132', 'RSG002', 'KASIR PELATIHAN (KSC)', 'Ingin melanjutkan pendidikan ke jenjang yang lebih tinggi', 'OFF', 2, '2024-06-29 00:00:00', '2024-05-29 09:21:18', '2024-07-02 15:49:23', 51, NULL),
(125, 6, '2309660052', 'RSG002', 'MEMBERSHIP', 'Merasa tidak mampu memenuhi ekspektasi perusahaan ', 'pastikan untuk serah terima sejak 13 dan 14 Juni 2024 kepada HR dan Auditor. terimakasih atas kontribusi selama ini, sejak notifikasi pesan ini maka fasilitas kontak kantor untuk diberikan kepada Admin Auditor saat mau pulang (tidak diperkenankan membawa kontak kantor)', 2, '2024-06-17 00:00:00', '2024-06-01 07:56:20', '2024-06-08 11:47:50', 51, NULL),
(126, 10, '2306990131', 'RSG002', 'SALES ASSOCIATE (SAA)', 'Saya mengundurkan diri karena adanya perubahan karyawan yang diluar kemampuan saya dan juga tim kelebihan 1 orang, oleh karena itu saya bersedia untuk mengundurkan diri dan saya harap pengunduran diri ini segera di setujui agar saya bisa mencari pekerjaan lain yang sesuai dengan kemampuan saya, sebelumnya saya berterima kasih kepada Lido grup karena telah memberikan pengalaman kepada saya dan saya mohon maaf jika ada yang kurang dari saya dalam melaksanakan pekerjaan. \r\nTerima kasih.', 'pastikan untuk segera melakukan serah terima dengan PIC yang terkait, dan dapat mulai OFF sejak 1 Juli 2024', 2, '2024-07-01 00:00:00', '2024-06-26 08:16:08', '2024-06-27 11:06:41', 51, NULL),
(127, 18, '2210990041', 'RSG002', 'KASIR PELATIHAN (KSC)', 'Melanjutkan Jenjang Karir di Perusahaan lain', 'berdasarkan interview akhir, keputusan resign kamu sudah bulat. terimakasih atas kontribusi selama ini di LIDO29.\r\npastikan untuk melakukan serah terima jabatan dan pekerjaan sejak 26 Juli 2024 kepada OMN, karyawan pengganti Kasir GOR, dan pihak terkait.\r\nmelakukan pendampingan kepada pengganti dari tanggal tersebut hingga 3 Agustus 2024\r\nmelakukan penyelesaian administratif karyawan pada tanggal 3 Agustus 2024 kepada HR staff dan manager operasional.\r\nmulai OFF pada tanggal 5 Agustus 2024.', 2, '2024-08-05 00:00:00', '2024-06-29 17:15:14', '2024-07-23 19:56:45', 51, NULL),
(129, 10, '2308660022', 'RSG002', 'KASIR PELATIHAN (KSC)', 'Karena masalah kesehatan yang mengharuskan beristirahat dalam jangka waktu yang cukup lama, serta ingin mencari hal-hal baru untuk mengembangkan potensi diri.', 'pastikan untuk dilakukan serah terima dengan atasan (PIC dan OMN) paling lambat pada 12 Juli 2024. ', 2, '2024-07-14 00:00:00', '2024-07-01 20:32:40', '2024-07-09 13:35:45', 51, NULL),
(149, 16, '2309990071', 'RSG002', 'SALES ASSOCIATE (SAA)', 'Melanjutkan sekolah atau kuliah mohon di acc secepatnya  terimakasih', 'pastikan untuk melakukan serah terima dan menyelesaikan administratif karyawan bersama dengan HR staff LIDO29, OMN dan PIC cabang', 2, '2024-08-01 00:00:00', '2024-07-15 18:57:58', '2024-07-23 19:46:16', 51, NULL),
(155, 19, '2401990021', 'RSG002', 'KASIR PELATIHAN (KSC)', 'Akan mengikuti pelatihan perhotelan. \r\nKarena ada beberapa tahap yang harus di lakukan untuk mengikuti persyaratan masuk pelatihan tersebut', 'pastikan untuk lakukan serah terima dahulu dengan PIC dan OMN max pada 20 Agustus 2024', 2, '2024-09-21 00:00:00', '2024-08-15 14:01:53', '2024-08-19 14:51:21', 51, NULL),
(157, 14, '2309660032', 'RSG002', 'KASIR PELATIHAN (KSC)', 'Pindah ke jogja untuk membantu usaha saudara disana sekaligus tinggal disana', '', 2, '2024-09-08 00:00:00', '2024-08-25 14:13:21', '2024-08-29 19:54:53', 51, NULL),
(158, 14, '2206990091', 'RSG002', 'KASIR PELATIHAN (KSC)', 'meneruskan budidaya lele di rumah, soale kalo jauh ga bisa kesami ', '', 2, '2024-09-08 00:00:00', '2024-08-25 18:31:50', '2024-08-29 19:56:39', 51, NULL),
(159, 7, '2212990031', 'RSG003', 'KASIR PELATIHAN (KSC)', 'mau membuka usaha sendiri ', 'patikan melakukan serah terima inventaris perusahaan termasuk ID card kepada HR dan omn maksimal pada 18 sept 2024 di kantor lido.\r\nlakukan serah terima pekerjaan dan efektif NON Kasir per tanggal sebagaimana serah terima kepda HR dan OMN', 2, '2024-09-21 00:00:00', '2024-08-27 09:23:56', '2024-09-13 22:19:46', 51, NULL),
(160, 1, '2202990051', 'RSG003', 'DRIVER (DDR)', 'Pindah domisili', 'pastikan untuk lakukan serah terima inventaris, pekerjaan, dan segala sesuatunya kepada OMN dan HR maksimal pada 19 Sept 2024 di kantor LIDO.', 2, '2024-09-21 00:00:00', '2024-09-02 11:42:31', '2024-09-13 13:31:01', 51, NULL),
(161, 15, '2212990111', 'RSG003', 'SALES ASSOCIATE (SAA)', 'Ingin mencari pengalaman lain', 'pastikan untuk lakukan serah terima inventaris perusahaan termasuk juga dengan ID Card dan segala sesuatu nya kepada HR maksimal pada 18 September 2024 di kantor LIDO', 2, '2024-09-21 00:00:00', '2024-09-03 13:07:46', '2024-09-13 13:28:30', 51, NULL),
(163, 3, '1905990101', 'RSG003', 'WAREHOUSE ASSOCIATE (WAS)', 'Ingin memajukan usahanya sendiri dirumah', 'pastikan untuk segera menghubungi OMN dan HR agar segera dapat diserah terimakan tugas dan tanggung jawabnya kepada pengganti segera.\r\nmaksimal pengganti ada dan mulai training pada 7 oktober 2024\r\nlakukan sserah terima inventaris maksimal pada 18 oktober 2024 kepada OMN dan HR di periksa oleh auditor', 2, '2024-10-21 00:00:00', '2024-09-27 20:03:38', '2024-09-30 10:21:22', 51, NULL),
(164, 6, '2309660062', '', 'AUDITOR PLT (P-ADT)', '1. Sudah tidak sanggup jika harus audit ke lapangan pulang malam\r\n2. Bantu usaha kue kakak di Bekasi', 'keep stay yaaa', 3, '2024-11-01 00:00:00', '2024-10-12 11:21:59', '0000-00-00 00:00:00', 51, NULL),
(165, 6, '2309660062', '', 'AUDITOR PLT (P-ADT)', '1. Sudah tidak sanggup jika harus audit ke lapangan pulang malam\r\n2. Bantu usaha kue kakak di Bekasi', 'keep stay ayuk, please :-)', 3, '2024-11-01 00:00:00', '2024-10-12 11:22:19', '0000-00-00 00:00:00', 51, NULL),
(166, 12, '2202660012', 'RSG002', 'KASIR PENDAMPING', 'Karna dalam waktu dekat ini akan melangsungkan acara pernikahan.\r\nDan oleh keluarga di sarankan untuk berhenti bekerja  ,maka dengan ini saya menjaukan resign', 'pastikan untuk melakukan serah terima dahulu kepada PIC, HR dan OMN maksimal pada 19 Oktober 2024, tidak diperkenankan transaksi sejak 19 Oktober 2024.', 2, '2024-10-21 00:00:00', '2024-10-02 15:55:32', '2024-10-08 11:31:57', 51, NULL),
(167, 19, '2401660022', 'RSG002', 'KASIR PELATIHAN (KSC)', 'Mau menikah , di tgl 15/10/1014 tidak di izinkan suami kerja lagi', 'pastikan untuk melakukan serah terima dahulu kepada PIC, HR dan OMN max pada 10 Oktober 2024, Tidak diperkenankan transaksi sejak 10 Oktober 2024', 2, '2024-10-12 00:00:00', '2024-10-05 16:00:55', '2024-10-08 11:30:12', 51, NULL),
(168, 1, '2306660012', '', 'WAREHOUSE CASHIER (WAC)', 'alasan saya resign karena saya merasa burn out, dengan barang dan kiriman sebanyak itu untuk satu kasir dan helper yang sedikit itu tidak mumpuni jika harus sesuai jam kerja selesai, sedangkan saat di luar jam kerja tidak ada lembur, itu membuat saya kerja dengan tidak maksimal, dan saya merasa setiap harinya tersita untuk bererja itu membuat work-life balance saya tidak seimbang, dan saya mengajukan untuk dicarikan kasir lagi sehingga pekerjaan lebih efektif tetapi tidak di follow up dengan baik, maka saya menyerah untuk itu, terimakasih ', 'sebagaimana adanya surat permohonan pembatalan pengajuan resign dari YBS, maka pengajuan resign saya tolak', 3, '2024-11-08 00:00:00', '2024-10-30 18:04:01', '0000-00-00 00:00:00', 51, NULL),
(169, 6, '2307990061', '', 'TAX AND LEGAL (ATL)', 'Sorry to say pak saya sudah tidak ada alasan lagi untuk bertahan disini , sejak saya cerita ke bapak terkait dengan target saya di Lido. Terimakasih ', 'gak ada... lu tahan disini !', 3, '2024-11-16 00:00:00', '2024-10-26 14:55:12', '0000-00-00 00:00:00', 51, NULL),
(170, 8, '2305990111', 'RSG002', 'DRIVER (DDR)', 'Jadi kadus', 'pastikan untuk melakukan serah terima dan training dahulu kepada driver penggantinya hingga 1 Nov 2024, dan serah terima inventaris kepada HR dan OMN pada 2 November 2024\r\nterimakasih atas partisipasi dan kontribusi selama ini', 2, '2024-11-02 00:00:00', '2024-10-17 07:01:05', '2024-10-24 11:30:50', 51, NULL),
(171, 18, '2207990101', 'RSG003', 'KASIR PELATIHAN (KSC)', 'Menikah ', 'pastikan untuk lakukan serah terima dahulu dengan PIC max H-2 dan lakukan serah terima ID kepada HR max H-1. tidak diperkenankan melakukan transaksi sejak 16 November 2024 hingga masa resignnya efektif', 2, '2024-11-21 00:00:00', '2024-11-01 22:34:05', '2024-11-13 16:25:35', 51, NULL),
(172, 19, '2310660032', 'RSG003', 'KASIR PELATIHAN (KSC)', 'Ada banyak pertimbangan sehingga saya harus berhenti bekerja ?? pengen fokus keluarga dulu dirumah, saya mohon maaf yg sebesar2nya', 'MANGKIR', 4, '2025-02-27 22:16:19', '2024-11-02 08:05:11', '2025-02-27 22:16:19', 51, NULL),
(173, 6, '2310660052', 'RSG003', 'PURCHASE STAFF (PRC)', 'Ingin di rumah dulu, fokus pendidikan. Karena selama ini kuliah kalah dengan kerjaan.', 'pastikan untuk sudah mulai hiring dan melakukan pelatihan kepada calon pengganti dibagian yang saat ini dihandle, buatlah hand book, jurnal kerja dan urutan-urutan kerja untuk mempermudah saat serah terima, lakukan perapian file dan folder agar mudah di jalankan yang meneruskan. terimakasih atas kontribusi dan kerjasama selama ini, sukses selalu', 2, '2024-12-07 00:00:00', '2024-11-04 18:01:30', '2024-11-16 14:52:05', 51, NULL),
(174, 6, '2106990011', 'RSG003', 'FINANCE (AFN)', 'FOKUS STUDY BAHASA KOREA DI LPK', 'MANGKIR', 4, '2025-02-27 22:16:24', '2024-11-05 11:50:17', '2025-02-27 22:16:24', 51, NULL),
(175, 11, '2406660032', 'RSG001', 'KASIR PELATIHAN (KSC)', 'Melanjutkan sekolah,kursus bahasa jepang', 'lakukan serah terima pekerjaan dahulu kepada atasan', 2, '2024-12-21 00:00:00', '2024-11-09 07:38:55', '2024-12-16 17:49:59', 51, NULL),
(176, 20, '2306990061', 'RSG003', 'KASIR PELATIHAN', 'Sebelumnya saya ucapkan Terima kasih atas pengalaman dan ilmu nya yang telah perusahaan, saya juga ingin mengucapkan permohonan maaf atas resign yang saya ajukan ini, saya meminta maaf apabila dalam bekerja selama ini belum memberikan yang terbaik. Harapan saya semoga lido 29 semakin berkembang dan semakin sukses. Terimakasih ', 'MANGKIR', 4, '2025-02-27 22:16:28', '2024-11-16 14:06:19', '2025-02-27 22:16:28', 51, NULL),
(177, 14, '2402990061', 'RSG001', 'KASIR PELATIHAN (KSC)', 'Ingin mencari pengalaman kerja baru di luar sana ', 'lakukan serah terima dahulu kepada atasan', 2, '2024-12-31 00:00:00', '2024-11-20 15:12:49', '2024-12-16 17:57:31', 51, NULL),
(178, 11, '2212990121', 'RSG003', 'KASIR PELATIHAN (KSC)', 'dari orang tua(ibuk) disuruh ikut kerja mase karena lebih bisa mengontrol waktu karena dirumah cuma berdua sama ibu saya', 'MANGKIR', 4, '2025-02-27 22:16:32', '2024-12-14 14:15:01', '2025-02-27 22:16:32', 51, NULL),
(179, 10, '2309990061', 'RSG003', 'KASIR PELATIHAN (KSC)', '-mendapat penawaran yang lebih baik di perusahaan lain\r\n-fisik yang sudah tidak mampu dengan jam kerja yang padat dikhawatirkan drop\r\n-ingin membuka peluang usaha kecil2an', 'MANGKIR', 4, '2025-02-27 22:16:36', '2024-12-18 13:22:34', '2025-02-27 22:16:36', 51, NULL),
(183, 6, '2306660052', '', 'AUDITOR PLT (P-ADT)', 'Ikut usaha bulek di jogja', 'waktu belajar kamu disini gunakan sebaik mungkin sampai mendapatkan tempat belajar lebih tinggi dari lido.', 3, '2025-02-20 00:00:00', '2025-02-24 08:52:47', '0000-00-00 00:00:00', 51, NULL),
(185, 6, '2311660012', 'RSG003', 'CREATIVE HUMAN RESOURCES (CHR)', 'Menikah', 'Pastikan melakukan serah terima kepada direktur secara langsung bersama dengan HR pengganti pada 19 dan 20 feb 2025.', 2, '2025-02-21 00:00:00', '2025-01-29 05:07:22', '2025-02-17 11:54:39', 51, NULL),
(186, 11, '2203990091', 'RSG002', 'KASIR PELATIHAN (KSC)', 'Mengelola ternak ayam dan kambing dirumah bersama bapak', 'MANGKIR', 4, '2025-03-13 15:28:54', '2025-03-04 16:46:07', '2025-03-13 15:28:54', NULL, NULL),
(187, 10, '2208990041', 'RSG002', 'KASIR PELATIHAN (KSC)', 'Mendapatkan tawaran pekerjaan yang lebih baik lagi dan jenjang karir yang lebih menjanjikan,semoga cepat di ACC🙏🤗', 'MANGKIR', 4, '2025-04-11 16:22:44', '2025-03-19 14:31:57', '2025-04-11 16:22:44', 51, NULL),
(188, 6, '2309660062', 'RSG002', 'AUDITOR PLT (P-ADT)', 'Mohon maaf pak beni saya sudah tidak bisa lanjut lagi gabung di LIDO29🙏🙏 daripada saya ngerjain jobdesk nya salah-salah terus, dan nantinya ngerugiin perusahaan dan ngehambat kerjaan yang lain  juga pak, lebih baik perusahaan hiring orang yang lebih kompeten di bagian pajak dan legal', 'MANGKIR', 4, '2025-04-11 16:22:40', '2025-04-02 08:26:16', '2025-04-11 16:22:40', 51, NULL),
(189, 14, '2209990091', 'RSG002', 'KASIR PELATIHAN (KSC)', 'Mencari pengalaman kerja yang lain ', 'MANGKIR', 4, '2025-05-31 17:54:08', '2025-04-06 10:45:28', '2025-05-31 17:54:08', 51, NULL),
(190, 9, '2307660042', 'RSG002', 'KASIR PELATIHAN (KSC)', 'Melanjutkan pendidikan', 'pastikan untuk melakukan koordinasi dan serah terima sebelum efektif non aktif, serah terima dilakukan untuk pekerjaan dan data internal toko bersama PIC yang selanjutnya dilaporkan kepada Admin Auditor, dan serah terima general karyawan (ID Card dan segala inventaris serta data) kepada HR maksimal pada 29 Jun 2025 di kantor Lido29.', 2, '2025-06-30 00:00:00', '2025-06-03 06:29:10', '2025-06-19 18:06:29', 51, NULL),
(191, 15, '2307990051', 'RSG002', 'KASIR PELATIHAN (KSC)', 'Menambah pengalaman dibidang yang lain serta ingin melanjutkan dan mengembangkan usaha keluarga\r\n', 'pastikan untuk serah terima ke CHR dan PIC max H-2 efektif OFF.. terimakasih atas kontribusi kamu selama ini, salam sukses', 2, '2025-07-24 00:00:00', '2025-06-24 07:19:34', '2025-07-16 17:31:00', 51, NULL),
(192, 6, '2105660012', 'RSG002', 'PURCHASE STAFF (PRC)', '-', 'PASTIKAN UNTUK MELAKUKAN SERAH TERIMA SELURUH TUGAS DAN TANGGUNG JAWAB KEPADA MANAGER, HR DAN AUDIT MELIPUTI TIDAK TERBATAS PADA JABATAN, PEKERJAAN, SEMUA INVENTARIS, DOKUMEN, PENANDATANGANAN BERKAS RESIGN SEJAK H-6 EFEKTIF RESIGN. TERIMAKASIH ATAS KONTRIBUSI SELAMA INI, SUKSES SELALU.', 2, '2025-08-09 00:00:00', '2025-07-22 07:29:31', '2025-07-30 18:23:45', 51, NULL),
(193, 16, '2309660042', 'RSG002', 'KASIR PELATIHAN (KSC)', 'Sudah mendapatkan pekerjaan baru ', 'MANGKIR', 4, '2025-08-09 12:14:55', '2025-07-31 13:21:05', '2025-08-09 12:14:55', 51, NULL),
(194, 1, '2305990061', 'RSG002', 'WAREHOUSE ASSOCIATE (WAS)', 'Sudah tidak nyaman', 'MANGKIR', 4, '2025-08-12 15:52:41', '2025-08-12 09:52:55', '2025-08-22 15:52:41', 51, NULL),
(195, 9, '189912TR3315', 'RSG002', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-08-16 15:51:59', '2025-08-16 17:18:49', '2025-08-22 15:51:59', 51, 'CHR LIDO29'),
(196, 6, '2505660012', '', 'CREATIVE HUMAN RESOURCES (CHR)', '1.Saya mengajukkan permohonan pengunduran diri dari jabatan ini karena budaya perusahaan yang  tidak sejalan dengan nilai-nilai pribadi saya.\n2. Selain itu saya tidak bisa fokus pada plan yang sudah direncanakan karena ada banyak pekerjaan insidental.\n3. Mendapat penawaran kerja dari perusahaan lain.\n4. Jam kerja yang kurang fleksibel, merupakan alasan saya ingin mencari pekerjaan dengan jam kerja yang lebih fleksibel\n\n', '', 3, '2025-09-23 00:00:00', '2025-08-25 17:19:06', '0000-00-00 00:00:00', 51, NULL),
(197, 14, '189912TR3314', 'RSG002', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-08-23 16:45:51', '2025-08-25 09:00:54', '2025-08-25 16:45:51', 51, 'CHR LIDO29'),
(198, 16, '189912TR3318', 'RSG002', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-08-28 16:46:21', '2025-08-25 09:01:12', '2025-08-25 16:46:21', 51, 'CHR LIDO29'),
(199, 16, '189912TR3320', 'RSG003', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-08-23 16:51:43', '2025-08-26 15:26:36', '2025-09-01 16:51:43', 51, 'CHR LIDO29'),
(200, 16, '189912TR3322', 'RSG003', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-08-26 16:51:52', '2025-08-26 15:26:48', '2025-09-01 16:51:52', 51, 'CHR LIDO29'),
(201, 13, '189912TR3323', 'RSG003', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-08-30 16:51:59', '2025-08-30 16:42:06', '2025-09-01 16:51:59', 51, 'CHR LIDO29'),
(202, 15, '189912TR3326', 'RSG003', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-09-03 17:27:52', '2025-09-03 13:54:57', '2025-09-04 17:27:52', 51, 'CHR LIDO29'),
(203, 16, '2508990021', 'RSG003', 'KASIR PELATIHAN (KSC)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-09-04 17:10:45', '2025-09-05 11:25:40', '2025-09-08 17:10:45', 51, 'CHR LIDO29'),
(204, 6, '2505660012', 'RSG002', 'CREATIVE HUMAN RESOURCES (CHR)', '1. Ingin bekerja di bidang perusahaan yang berbeda dengan jam kerja dan hari kerja yang tidak terlalu panjang, dengan fasilitas pengembangan karir yang memadai.\r\n2. Sudah tidak sejalan dengan budaya kerja dan sistem yang berlaku di perusahaan.\r\n3. Tidak adanya kecocokan dengan peraturan yang berlaku dan diterapkan dalam perusahaan', '11 okt jadi hari terakhir, pastikan untuk melakukan serah terima pekerjaan, jabatan, inventaris kepada CHR pengganti, audit dan direksi secara langsung. terimakasih atas dedikasi selama masa probation, salam sukses', 2, '2025-10-12 00:00:00', '2025-09-06 14:06:40', '2025-10-07 17:24:15', 51, NULL),
(205, 16, '189912TR3329', 'RSG003', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-09-04 17:10:34', '2025-09-06 16:35:27', '2025-09-08 17:10:34', 51, 'CHR LIDO29'),
(206, 16, '189912TR3330', 'RSG003', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-09-06 17:10:24', '2025-09-06 16:35:42', '2025-09-08 17:10:24', 51, 'CHR LIDO29'),
(207, 6, '2105660012', 'RSG003', 'PURCHASE STAFF (PRC)', 'Pengunduran Diri', '', 2, '2025-08-08 00:00:00', '2025-09-06 16:48:37', '2025-09-22 10:30:20', 51, 'CHR LIDO29'),
(208, 18, '2212660122', 'RSG002', 'KASIR PELATIHAN (KSC)', 'Menikah tanggal 18 oktober 2025 dan ikut suami', 'pastikan untuk serah terima dan koordinasi dengan PIC', 2, '2025-10-10 00:00:00', '2025-09-10 04:14:58', '2025-10-07 17:25:31', 51, NULL),
(209, 14, '189912TR3327', 'RSG003', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-09-11 10:31:58', '2025-09-11 09:40:34', '2025-09-22 10:31:58', 51, 'CHR LIDO29'),
(212, 20, '189912TR3331', 'RSG003', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-09-16 10:31:47', '2025-09-17 11:58:46', '2025-09-22 10:31:47', 51, 'CHR LIDO29'),
(213, 18, '2306990171', 'RSG002', 'KASIR PELATIHAN (KSC)', 'Membantu krrjaan orangtua', 'pastikan untuk serah terima dan koordinasi dengan PIC.', 2, '2025-10-20 00:00:00', '2025-09-17 17:10:16', '2025-10-07 17:26:13', 51, NULL),
(214, 9, '2310660072', 'RSG002', 'KASIR PELATIHAN (KSC)', 'saya ingin mengalihkan fokus karir saya ke bidang yang lebih sesuai dengan minat daj tujuan jangka panjang saya, dimana sayabbisa lebih menyalurkan passion saya dan memberi dsmpak yg lebih besar, ingin pindah kota ', 'MANGKIR', 4, '2025-10-17 00:00:00', '2025-09-17 17:35:09', '2025-10-07 17:21:47', 51, NULL),
(215, 18, '189912TR3336', 'RSG003', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-09-17 10:31:35', '2025-09-19 17:12:01', '2025-09-22 10:31:35', 51, 'CHR LIDO29'),
(216, 14, '189912TR3292', 'RSG003', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-09-19 10:31:22', '2025-09-20 10:23:44', '2025-09-22 10:31:22', 51, 'CHR LIDO29'),
(217, 15, '189912TR3335', 'RSG003', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-09-19 10:31:11', '2025-09-20 10:57:23', '2025-09-22 10:31:11', 51, 'CHR LIDO29'),
(218, 7, '189912TR3339', 'RSG003', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-09-20 10:30:58', '2025-09-20 10:57:36', '2025-09-22 10:30:58', 51, 'CHR LIDO29'),
(219, 14, '189912TR3342', 'RSG003', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-09-22 10:30:47', '2025-09-22 09:19:04', '2025-09-22 10:30:47', 51, 'CHR LIDO29'),
(220, 3, '189912TR3351', 'RSG002', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-09-27 00:00:00', '2025-09-27 15:34:40', '2025-10-07 17:21:24', 51, 'CHR LIDO29'),
(221, 1, '189912TR3352', 'RSG002', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-09-29 00:00:00', '2025-09-29 08:58:43', '2025-10-07 17:22:56', 51, 'CHR LIDO29'),
(222, 18, '189912TR3347', 'RSG002', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-09-30 00:00:00', '2025-09-30 10:46:24', '2025-10-07 17:22:48', 51, 'CHR LIDO29'),
(223, 16, '2309990051', '', 'KASIR PELATIHAN (KSC)', 'Dengan ini saya mengajukan pengunduran diri dari perusahaan ,karena saya berencana untuk melanjutkan pendidikan sekolah bahasa. Terima kasih atas kesempatan dan pengalaman yang sudah diberikan selama saya bekerja di sini', '', 1, '2025-11-02 00:00:00', '2025-10-02 09:35:24', '0000-00-00 00:00:00', NULL, NULL),
(224, 14, '2409660012', '', 'KASIR PELATIHAN (KSC)', 'Ingin mengupdrage dan mencari pengalaman baru di lingkungan yang baru agar bisa berkembang, dan juga ingin mencoba hal yang baru', '', 1, '2025-11-02 00:00:00', '2025-10-02 18:15:04', '0000-00-00 00:00:00', NULL, NULL),
(225, 15, '189912TR3290', 'RSG002', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-10-03 00:00:00', '2025-10-03 16:11:54', '2025-10-07 17:22:38', 51, 'CHR LIDO29'),
(226, 15, '189912TR3303', 'RSG002', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-10-03 00:00:00', '2025-10-03 16:12:11', '2025-10-07 17:22:29', 51, 'CHR LIDO29'),
(227, 10, '189912TR3270', 'RSG002', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-10-03 00:00:00', '2025-10-03 16:25:41', '2025-10-07 17:22:21', 51, 'CHR LIDO29'),
(228, 9, '2310660072', 'RSG002', 'KASIR PELATIHAN (KSC)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-10-03 00:00:00', '2025-10-03 16:25:55', '2025-10-07 17:22:04', 51, 'CHR LIDO29'),
(229, 15, '189912TR3239', 'RSG002', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-10-06 00:00:00', '2025-10-06 15:49:08', '2025-10-07 17:22:12', 51, 'CHR LIDO29'),
(230, 11, '189912TR3288', 'RSG002', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', 'MANGKIR', 4, '2025-10-04 00:00:00', '2025-10-06 15:50:12', '2025-10-07 17:21:11', 51, 'CHR LIDO29'),
(231, 1, '2508990041', '', 'WAREHOUSE ASSOCIATE (WAS)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', '', 1, '2025-10-03 00:00:00', '2025-10-08 08:34:20', '0000-00-00 00:00:00', NULL, 'CHR LIDO29'),
(232, 18, '189912TR3350', '', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', '', 1, '2025-10-08 00:00:00', '2025-10-08 14:51:00', '0000-00-00 00:00:00', NULL, 'CHR LIDO29'),
(233, 18, '189912TR3349', '', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', '', 1, '2025-10-08 00:00:00', '2025-10-08 14:51:19', '0000-00-00 00:00:00', NULL, 'CHR LIDO29'),
(234, 16, '189912TR3357', '', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', '', 1, '2025-10-08 00:00:00', '2025-10-08 14:51:52', '0000-00-00 00:00:00', NULL, 'CHR LIDO29'),
(235, 18, '2212660122', '', 'KASIR PELATIHAN (KSC)', 'Resign', 'sudah efektif resign di bagian diterima', 3, '2025-10-10 00:00:00', '2025-10-11 17:15:23', '0000-00-00 00:00:00', 51, 'CHR LIDO29'),
(236, 20, '189912TR3360', '', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', '', 1, '2025-10-12 00:00:00', '2025-10-14 08:35:08', '0000-00-00 00:00:00', NULL, 'CHR LIDO29'),
(239, 16, '189912TR3365', '', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', '', 1, '2025-10-15 00:00:00', '2025-10-15 15:02:54', '0000-00-00 00:00:00', NULL, 'CHR LIDO29'),
(240, 11, '189912TR3363', '', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', '', 1, '2025-10-14 00:00:00', '2025-10-15 15:03:38', '0000-00-00 00:00:00', NULL, 'CHR LIDO29'),
(241, 11, '189912TR3358', '', 'TRAINING (TRN)', 'Ketidakhadiran Tanpa Keterangan (Mangkir)', '', 1, '2025-10-07 00:00:00', '2025-10-17 14:24:29', '0000-00-00 00:00:00', NULL, 'CHR LIDO29');

-- --------------------------------------------------------

--
-- Table structure for table `form_karyawan`
--

CREATE TABLE `form_karyawan` (
  `id_form` int(11) NOT NULL,
  `name_form` varchar(255) NOT NULL,
  `description_form` text NOT NULL,
  `link_form` varchar(500) NOT NULL,
  `created_date` datetime NOT NULL,
  `type_form` varchar(50) NOT NULL,
  `group_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_karyawan`
--

INSERT INTO `form_karyawan` (`id_form`, `name_form`, `description_form`, `link_form`, `created_date`, `type_form`, `group_by`) VALUES
(11, 'Form Verifikasi Member', 'Form Untuk Verifikasi Member Lido', 'https://docs.google.com/forms/d/e/1FAIpQLSe80N1sES0jHaltJfEL_LOylkRpvLISQAjme_LxrHIDiKAl_Q/viewform', '2023-09-30 13:46:23', '1', ''),
(15, 'Form Nota Luar TOKO 01', 'FORM NOTA LUAR TOKO 01 POJOK', 'https://docs.google.com/forms/d/1x4K7kpjCVBigYWDUU5qm8vdkmsEOvkW8u5-O9tYyrYs/viewform?edit_requested=true#start=invite', '2022-09-05 10:01:15', '2', 'A'),
(16, 'Form Nota Luar TOKO 02', 'FORM NOTA LUAR TOKO 02 WONOSOBO', 'https://docs.google.com/forms/d/1Hkd9Jz0TE-dCGxzLMBq1C-E2RATMUThmeBujAwtio5I/viewform?edit_requested=true#start=invite', '2022-09-05 10:02:23', '2', 'A'),
(17, 'Form Nota Luar TOKO 03', 'FORM NOTA LUAR TOKO 03 KALORAN', 'https://docs.google.com/forms/d/1806LnCcbi5ZmrO6qNIDdjuvWs1hnuKJBezImcVh2A3M/viewform?edit_requested=true#start=invite', '2022-09-05 10:04:38', '2', 'A'),
(18, 'Form Nota Luar TOKO 04', 'FORM NOTA LUAR TOKO 04 GEMAWANG', 'https://docs.google.com/forms/d/1q5UF1DzmzlOFeoK6kNjqkTwuu8mLKQA90cVoI1XZaE4/viewform?edit_requested=true#start=invite', '2022-09-05 10:05:40', '2', 'A'),
(19, 'Form Nota Luar TOKO 06', 'FORM NOTA LUAR TOKO 06 BOROBUDUR', 'https://docs.google.com/forms/d/1gNIbkCOLK8yVjQX-oxixBF1qyz1yMH3D2u2xL302Jdg/viewform?edit_requested=true#start=invite', '2022-09-05 10:06:43', '2', 'A'),
(20, 'Form Nota Luar TOKO 07', 'FORM NOTA LUAR TOKO 07 TEGOWANU', 'https://docs.google.com/forms/d/1jcjrNUeZknmHvoUANJWdlRP8LtKo8IFy9BpRMY9EC1g/viewform?edit_requested=true#start=invite', '2022-09-05 10:08:09', '2', 'A'),
(21, 'Form Nota Luar TOKO 08', 'FORM NOTA LUAR TOKO 08 KEDU', 'https://docs.google.com/forms/d/1HcPaAwbm_MaQ3Hyj7sNXkLvCJn9E-uSvBJ0KVLQb6j0/viewform?edit_requested=true#start=invite', '2022-09-05 10:09:26', '2', 'A'),
(22, 'Form Nota Luar TOKO 10', 'FORM NOTA LUAR TOKO 10 SUMOWONO', 'https://docs.google.com/forms/d/1iSK1m2It03jb6dkkwzvkTnBnmckvkYa8Jchmxy8GUlU/viewform?edit_requested=true#start=invite', '2022-09-05 10:10:22', '2', 'A'),
(23, 'Form Nota Luar TOKO 11', 'FORM NOTA LUAR TOKO 11 NGADIREJO', 'https://docs.google.com/forms/d/1FWCseJKpP4S3iUyw_F5v6vb-pn5S74o7Sbx03AZDF2w/viewform?edit_requested=true#start=invite', '2022-09-05 10:11:26', '2', 'A'),
(24, 'Form Nota Luar TOKO 12', 'FORM NOTA LUAR TOKO 12 KRANGGAN', 'https://docs.google.com/forms/d/1Dfkx9JYNVDaWUKhnP0-K2oRevFCNQ-BHI5UZ-5j-YkU/viewform?edit_requested=true#start=invite', '2022-09-05 10:13:04', '2', 'A'),
(25, 'Form Nota Luar TOKO 13', 'FORM NOTA LUAR TOKO 13 SALAMAN', 'https://docs.google.com/forms/d/1t7cScbKuFvCfLHmsQDq6AK3ue00vVqoWpYcMy-VOpHU/viewform?edit_requested=true#start=invite', '2022-09-05 10:13:55', '2', 'A'),
(26, 'Form Nota Luar TOKO 14', 'FORM NOTA LUAR TOKO 14 JUMO', 'https://docs.google.com/forms/d/1E5b-uRZfCMKnfLohpjwZBiEIvIy9AX_6MpDwAkJjyUA/viewform?edit_requested=true#start=invite', '2022-09-05 10:14:40', '2', 'A'),
(27, 'Form Nota Luar TOKO 15', 'FORM NOTA LUAR TOKO 15 TEMBARAK', 'https://docs.google.com/forms/d/16gDs7jruMQjK1n8Ey3NSmcF4ctGBSbWrkssnl5WfC_E/viewform?edit_requested=true#start=invite', '2022-09-05 10:16:17', '2', 'A'),
(29, 'Form Member Baru 2023', 'Form Input Member Baru', 'https://docs.google.com/forms/d/e/1FAIpQLSd8mtnLmdLt2jC3tQgxdpe5UYV1i7OmJhS6Bm17FS5GYz_7Jg/viewform', '2023-09-29 05:59:57', '1', ''),
(30, 'FORM PENGAJUAN REDEEM POIN', 'FORM UNTUK MELAKUKAN REPORT REDEEM POIN', 'https://docs.google.com/forms/d/e/1FAIpQLScY0xI35x4_rGUc0MxyCgaqb0AzeqUSRIdyVenHSOGst6965g/viewform?usp=sf_link', '2023-10-04 09:46:27', '1', ''),
(31, 'FORM MONITORING RETUR BARANG', 'FORM MONITORING RETUR BARANG', 'https://docs.google.com/forms/d/e/1FAIpQLSfo3yU0xtOihDuF3ejkDoNdvjb3TfLrh1L_OHo_IC7ngvs8Yw/viewform?usp=header ', '2025-02-15 09:26:09', '2', 'B'),
(32, 'PENILAIAN DRIVER', 'PENILAIAN DRIVER', 'https://docs.google.com/forms/d/e/1FAIpQLSfKMX6EGpEAU3DMadyVEb8VEIxbYnyyng3_e33OqaLDKklH3g/viewform?usp=header ', '2025-02-15 09:26:46', '2', 'B'),
(33, 'PERMINTAAN BARANG TOKO', 'PERMINTAAN BARANG TOKO', 'https://docs.google.com/forms/d/e/1FAIpQLSfkEmHw6kyyO8Hf8v0rMvoPKEBS4GjEf0Ut4mTz92Bt29ikBA/viewform?usp=header', '2025-02-15 09:27:36', '2', 'B');

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
(1, 1, 1, 1, '2025-10-23 20:36:41', 3, 1),
(2, 1, 2, 1, '2025-10-23 21:20:38', 1, 1),
(3, 2, 2, 1, '2025-10-23 21:29:27', 2, 1);

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
(1, 1, 2, 1, 1, 3),
(2, 1, 2, 2, 1, 1),
(3, 2, 2, 2, 1, 2),
(4, 2, 3, 2, 1, 2),
(5, 2, 4, 2, 1, 2);

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
(4, 1, 3, 'Finance staff', '<h3><strong>Persyaratan Pelamar Finance Staff</strong></h3>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Pendidikan</strong></p>\r\n\r\n	<ul>\r\n		<li>\r\n		<p>Minimal D3/S1 Akuntansi, Keuangan, atau Manajemen.</p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pengalaman</strong></p>\r\n\r\n	<ul>\r\n		<li>\r\n		<p>Pengalaman kerja 1&ndash;2 tahun di bidang keuangan/akuntansi (lebih disukai).</p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Kemampuan Teknis</strong></p>\r\n\r\n	<ul>\r\n		<li>\r\n		<p>Menguasai pembukuan, laporan keuangan, dan sistem akuntansi.</p>\r\n		</li>\r\n		<li>\r\n		<p>Mahir menggunakan Microsoft Excel, software akuntansi (misal: MYOB, Accurate, Zahir, atau SAP).</p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Kemampuan Analitis</strong></p>\r\n\r\n	<ul>\r\n		<li>\r\n		<p>Teliti, cermat, dan mampu menganalisis laporan keuangan.</p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Soft Skills</strong></p>\r\n\r\n	<ul>\r\n		<li>\r\n		<p>Disiplin, jujur, integritas tinggi.</p>\r\n		</li>\r\n		<li>\r\n		<p>Mampu bekerja dalam tim maupun mandiri.</p>\r\n		</li>\r\n		<li>\r\n		<p>Komunikasi yang baik.</p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Sertifikasi (opsional)</strong></p>\r\n\r\n	<ul>\r\n		<li>\r\n		<p>Sertifikasi Brevet A/B atau sertifikasi akuntansi lainnya menjadi nilai tambah.</p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n</ol>\r\n', '<h3><strong>Deskripsi Pekerjaan Finance Staff</strong></h3>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Pengelolaan Pembukuan</strong></p>\r\n\r\n	<ul>\r\n		<li>\r\n		<p>Mencatat transaksi keuangan harian, jurnal, dan pengeluaran perusahaan.</p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Laporan Keuangan</strong></p>\r\n\r\n	<ul>\r\n		<li>\r\n		<p>Menyusun laporan keuangan bulanan, triwulan, dan tahunan.</p>\r\n		</li>\r\n		<li>\r\n		<p>Memastikan laporan sesuai dengan standar akuntansi.</p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pengelolaan Kas dan Bank</strong></p>\r\n\r\n	<ul>\r\n		<li>\r\n		<p>Mengelola arus kas, pembayaran, dan penerimaan.</p>\r\n		</li>\r\n		<li>\r\n		<p>Rekonsiliasi bank dan monitoring saldo.</p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Penggajian dan Pajak</strong></p>\r\n\r\n	<ul>\r\n		<li>\r\n		<p>Membantu proses payroll karyawan.</p>\r\n		</li>\r\n		<li>\r\n		<p>Menyiapkan laporan pajak, PPh, dan PPN sesuai peraturan.</p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Analisis Keuangan</strong></p>\r\n\r\n	<ul>\r\n		<li>\r\n		<p>Menganalisis pengeluaran dan pendapatan perusahaan.</p>\r\n		</li>\r\n		<li>\r\n		<p>Memberikan insight terkait efisiensi biaya dan profitabilitas.</p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Koordinasi Internal</strong></p>\r\n\r\n	<ul>\r\n		<li>\r\n		<p>Bekerja sama dengan divisi lain terkait kebutuhan keuangan.</p>\r\n		</li>\r\n		<li>\r\n		<p>Menangani invoice, purchase order, dan tagihan.</p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Kepatuhan</strong></p>\r\n\r\n	<ul>\r\n		<li>\r\n		<p>Memastikan seluruh transaksi sesuai dengan prosedur dan regulasi.</p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n</ol>\r\n', 1, 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `message_lido_career`
--

CREATE TABLE `message_lido_career` (
  `id_ms` int(11) NOT NULL,
  `id_candidate_ms` int(11) NOT NULL,
  `description_ms` text NOT NULL,
  `sent_state` int(1) NOT NULL COMMENT '0 belum dilihat, 1 sudah dilihat',
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message_lido_career`
--

INSERT INTO `message_lido_career` (`id_ms`, `id_candidate_ms`, `description_ms`, `sent_state`, `date_created`) VALUES
(1, 1, 'IDA FANIA, Mohon maaf anda tidak lolos pada tahap seleksi administrasi', 0, '2025-10-23 13:37:57'),
(2, 2, 'IDA FANIA, Selamat anda lolos pada tahap seleksi administrasi dan akan masuk pada tahap selanjutnya.', 0, '2025-10-23 14:51:35'),
(3, 2, 'IDA FANIA, Selamat anda lolos pada tahap test 1 dan akan masuk pada tahap selanjutnya.', 0, '2025-10-23 17:12:14'),
(4, 2, 'IDA FANIA, Selamat anda lolos pada tahap pengumuman lolos dan akan masuk pada tahap selanjutnya.', 0, '2025-10-23 17:12:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(20210705084747);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_office` varchar(60) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `state` varchar(10) NOT NULL DEFAULT '1',
  `time_in` varchar(10) DEFAULT NULL,
  `time_out` varchar(10) DEFAULT NULL,
  `d1` varchar(1) DEFAULT NULL,
  `d2` varchar(1) DEFAULT NULL,
  `d3` varchar(1) DEFAULT NULL,
  `d4` varchar(1) DEFAULT NULL,
  `d5` varchar(1) DEFAULT NULL,
  `d6` varchar(1) DEFAULT NULL,
  `d7` varchar(1) DEFAULT NULL,
  `shift1` varchar(10) DEFAULT NULL,
  `shift2` varchar(10) DEFAULT NULL,
  `shift3` varchar(10) DEFAULT NULL,
  `work_shift1` varchar(10) DEFAULT NULL,
  `work_shift2` varchar(10) DEFAULT NULL,
  `work_shift3` varchar(10) DEFAULT NULL,
  `lat_office` varchar(255) NOT NULL,
  `long_office` varchar(255) NOT NULL,
  `radius_office` varchar(255) NOT NULL,
  `office_state` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `id_office`, `name`, `address`, `description`, `state`, `time_in`, `time_out`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`, `shift1`, `shift2`, `shift3`, `work_shift1`, `work_shift2`, `work_shift3`, `lat_office`, `long_office`, `radius_office`, `office_state`) VALUES
(1, 'LGRM', 'GUDANG RM', 'Krajan Kandangan', 'Gudang', '1', '07:20', '18:00', '1', '1', '1', '1', '1', '1', '', '07:20', '09:00', '07:20', '690', '690', '690', '-7.296164379380329', '110.20626986914212', '20', 2),
(3, 'LGLD', 'GUDANG LIDO', 'Krajan 1, Kandangan, Temanggung', 'Gudang LIDO', '1', '07:20', '18:00', '1', '1', '1', '1', '1', '1', '', '07:20', '09:00', '07:20', '580', '580', '580', '-7.254773867510767', '110.18481816222862', '20', 2),
(6, 'LOFC', 'LIDO HO', 'Krajan 1, Kandangan, Temanggung', 'Kantor', '1', '07:20', '17:00', '1', '1', '1', '1', '1', '1', NULL, '07:20', '09:00', '07:20', '580', '580', '580', '-7.254829358437118', '110.18504012090723', '20', 2),
(7, 'LD01', 'LIDO 01', 'Kandangan', '', '1', '06:20', '22:00', '1', '1', '1', '1', '1', '1', '1', '06:20', '11:00', '13:50', '570', '540', '480', '-7.254105121892574', '110.18392564107398', '20', 2),
(8, 'LPKR', 'GUDANG PKR', 'Kandangan', 'Gudang', '1', '07:20', '17:00', '1', '1', '1', '1', '1', '1', NULL, '07:20', '09:00', '07:20', '580', '580', '580', '-7.260010', '110.185599', '20', 2),
(9, 'LD10', 'LIDO 10', 'Sumowono', '', '1', '06:20', '22:00', '1', '1', '1', '1', '1', '1', '1', '06:20', '11:00', '13:50', '570', '540', '480', '-7.2288151363273565', '110.31803510181507', '15', 2),
(10, 'LD02', 'LIDO 02', 'Wonosobo', '', '1', '06:20', '22:00', '1', '1', '1', '1', '1', '1', '1', '06:20', '11:00', '13:50', '570', '540', '480', '-7.364880180244206', '109.91971525644428', '30', 2),
(11, 'LD03', 'LIDO 03', 'Kaloran', '', '1', '06:20', '22:00', '1', '1', '1', '1', '1', '1', '1', '06:20', '11:00', '13:50', '570', '540', '480', '-7.270736721617289', '110.24247879210037', '20', 2),
(12, 'LD04', 'LIDO 04', 'Gemawang', '', '1', '06:20', '22:00', '1', '1', '1', '1', '1', '1', '1', '06:20', '11:00', '13:50', '570', '540', '480', '-7.192840690900437', '110.14758851534431', '20', 2),
(13, 'LD15', 'LIDO 15', 'Tembarak', '', '1', '06:20', '22:00', '1', '1', '1', '1', '1', '1', '1', '06:20', '11:00', '13:50', '570', '540', '480', '-7.3601006097753725', '110.17805886421583', '20', 2),
(14, 'LD06', 'LIDO 06', 'Borobudur', '', '1', '06:20', '22:00', '1', '1', '1', '1', '1', '1', '1', '06:20', '11:00', '13:50', '570', '540', '480', '-7.603027916206632', '110.21117855340516', '20', 2),
(15, 'LD07', 'LIDO 07', 'Tegowanuh', '', '1', '06:20', '22:00', '1', '1', '1', '1', '1', '1', '1', '06:20', '11:00', '13:50', '570', '540', '480', '-7.296314110389861', '110.20570646680846', '30', 2),
(16, 'LD08', 'LIDO 08', 'Kedu', '', '1', '06:20', '22:00', '1', '1', '1', '1', '1', '1', '1', '06:20', '11:00', '13:50', '570', '540', '480', '-7.277146725710869', '110.15234731261212', '20', 2),
(17, 'TK09', 'TOKO 09', 'Grabag', '', '0', '06:30', '22:00', '1', '1', '1', '1', '1', '1', '1', '06:30', '06:30', '06:30', NULL, NULL, NULL, '0', '0', '20', 1),
(18, 'LD11', 'LIDO 11', 'Ngadirejo', '', '1', '06:20', '22:00', '1', '1', '1', '1', '1', '1', '1', '06:20', '11:00', '13:50', '570', '540', '480', '-7.231615535432343', '110.06007730603459', '30', 2),
(19, 'LD12', 'LIDO 12', 'Kranggan', '', '1', '06:20', '22:00', '1', '1', '1', '1', '1', '1', '1', '06:20', '11:00', '13:50', '570', '540', '480', '-7.3434370270667655', '110.21362752512287', '20', 2),
(20, 'LD13', 'LIDO 13', 'Salaman', '', '1', '06:20', '22:00', '1', '1', '1', '1', '1', '1', '1', '06:20', '11:00', '13:50', '570', '540', '480', '-7.579801717639572', '110.13372806969947', '20', 2),
(21, 'LDTR', 'TRAINING', 'TRAINING CENTER', '', '1', '07:20', '22:00', '1', '1', '1', '1', '1', '1', '1', '07:20', '09:00', '14:00', '580', '540', '480', '-7.254145460870831', '110.18389561547414', '20', 2),
(23, 'LD14', 'LIDO 14', 'JUMO', '', '1', '06:20', '22:00', '1', '1', '1', '1', '1', '1', '1', '06:20', '10:00', '13:50', '570', '540', '480', '-7.227435971557365', '110.11551401812264', '20', 2),
(24, 'TEEBUS', 'PRMD-CAR', 'H.O', 'KHUSUS DELIVERY YANG MENGGUNAKAN JAM 7.20 (CAR ONLY) - NOT SHIFTING', '1', '07:30', '17:01', '1', '1', '1', '1', '1', '1', '1', '07:30', '07:30', '07:30', '580', '580', '580', '0', '0', '20', 2),
(25, 'RELX', 'RELX Artos Magelang', 'Armada Town Square, Mertoyudan, Magelang', 'RELX Store Artos', '1', '10:00', '21:00', '1', '1', '1', '1', '1', '1', '1', '10:00', '13:00', '18:00', '480', '480', '180', '-7.5097910553596705', '110.20635744447495', '30', 1),
(26, 'LDCR', 'Delivery Car', 'All Toko Untuk Pramu Delivery Car', 'All Toko Untuk Pramu Delivery Car', '1', '07:20', '17:00', '1', '1', '1', '1', '1', '1', '1', '07:20', '09:00', '14:00', '570', '540', '480', '0', '0', '20', 2),
(27, 'LDGDGOR', 'GUDANG GOR', 'Krajan Kandangan Temanggung', 'Krajan Kandangan Temanggung', '1', '07:20', '17:00', '1', '1', '1', '1', '1', '1', '1', '07:20', '09:00', '07:20', '580', '580', '580', '-7.254642792361502', '110.1848435945277', '20', 2),
(28, 'ETHCOS', 'ETHESCOS', 'Jiwan, Kandangan Temanggung', 'Kantor dan Grosir Ethescosmo', '1', '07:20', '17:00', '1', '1', '1', '1', '1', '1', '', '07:20', '07:20', '07:20', NULL, NULL, NULL, '-7.244113504905167', '110.1968221781169', '10', 2),
(29, 'LGGL', 'GUDANG GULA', 'Krajan, Kandangan, Temanggung Regency, Central Java 56281', 'Krajan, Kandangan, Temanggung Regency, Central Java 56281', '1', '07:20', '17:00', '1', '1', '1', '1', '1', '1', '', '07:20', '07:20', '07:20', '690', '690', '690', '-7.254574747734324', '110.18439483978668', '15', 2),
(30, 'LD16', 'LIDO 16', 'Kedu Temanggung', '', '1', '06:20', '16:00', '1', '1', '1', '1', '1', '1', '1', '06:20', '06:20', '06:20', NULL, NULL, NULL, '-7.2766399912193425', '110.15155798338115', '25', 2),
(31, 'OUT', 'Kantor Untuk Menampung Data Izin Sakit Aloa', 'out', 'out', '1', '00:00', '00:00', '1', '1', '1', '1', '1', '1', '1', '00:00', '00:00', '00:00', NULL, NULL, NULL, '-', '-', '7', 1),
(32, 'ETHOFC', 'ETHES HO', 'Krajan 1, Kandangan, Temanggung', 'Kantor ETHES', '1', '07:20', '17:00', '1', '1', '1', '1', '1', '1', '', '07:20', '07:20', '07:20', '580', '580', '580', '-7.254829358437118', '110.18504012090723', '20', 2),
(33, 'ETH01', 'ETHES JOOVAN 01', 'Kandangan', '', '1', '07:20', '17:00', '1', '1', '1', '1', '1', '1', '', '07:20', '07:20', '07:20', NULL, NULL, NULL, '-7.254105121892574', '110.18392564107398', '15', 2),
(34, 'ETH11', 'ETHES JOOVAN 11', 'Ngadirejo', '', '1', '07:20', '17:00', '1', '1', '1', '1', '1', '1', '', '07:20', '07:20', '07:20', NULL, NULL, NULL, '-7.231615535432343', '110.06007730603459', '30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id_permission` int(11) NOT NULL,
  `id_emp_permission` varchar(255) NOT NULL,
  `type_permission` varchar(10) NOT NULL,
  `date_permission` date NOT NULL,
  `date_end_permisison` date NOT NULL,
  `time_permission` time NOT NULL,
  `days_permission` varchar(10) NOT NULL,
  `reason_permission` text NOT NULL,
  `file_permission` varchar(255) DEFAULT NULL,
  `respon_permission` text DEFAULT NULL,
  `date_note_permission` text DEFAULT NULL,
  `status_permission` varchar(50) NOT NULL,
  `submission_id` text DEFAULT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id_permission`, `id_emp_permission`, `type_permission`, `date_permission`, `date_end_permisison`, `time_permission`, `days_permission`, `reason_permission`, `file_permission`, `respon_permission`, `date_note_permission`, `status_permission`, `submission_id`, `created_by`, `created_date`) VALUES
(10, '2508660012', 'S', '2025-10-09', '2025-10-10', '10:19:54', '2', 'sakit', '875c1d8e4224076e00caa527e84a6d54.jpeg', '', '', 'Diterima', '[\"326001\",\"326002\"]', 'TINA FETIYANA', '2025-10-10 10:19:54'),
(11, '2509990011', 'I', '2025-10-10', '2025-10-10', '11:07:38', '1', 'Ngantar kontol ortu', NULL, NULL, NULL, 'Bukti Tidak Diterima', NULL, 'AGUS PRIYADI', '2025-10-10 11:07:38'),
(13, '2311990031', 'S', '2025-10-13', '2025-10-13', '06:46:43', '1', 'Izin sakit pak, sakit punggungnya, kemarin tergelincir baru terasa sakit paginya. ', 'c184653b7caa780630bc8d322644c990.jpg', NULL, NULL, 'Bukti Tidak Diterima', NULL, 'OKTO DWIHARTANTO', '2025-10-13 06:46:43');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_role` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` text DEFAULT NULL,
  `m1` varchar(1) DEFAULT NULL COMMENT 'Dashboard',
  `m2` varchar(1) DEFAULT NULL COMMENT 'Menu 1',
  `m3` varchar(1) DEFAULT NULL COMMENT 'Menu 2',
  `m4` varchar(1) DEFAULT NULL COMMENT 'Menu 3',
  `m5` varchar(1) DEFAULT NULL COMMENT 'Menu 4',
  `m6` varchar(1) DEFAULT NULL COMMENT 'Menu 5',
  `m7` varchar(1) DEFAULT NULL COMMENT 'Menu 6'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `id_role`, `name`, `description`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `m7`) VALUES
(1, '1', 'Super Admin', 'Akun untuk Super Admin', '1', '1', '1', '1', '1', '1', '1'),
(2, '2', 'Admin', 'Akun untuk Admin', '1', '1', '1', NULL, NULL, NULL, NULL),
(4, '3', 'SK', 'Akun untuk SK (ITAKA)', '1', '1', '1', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) UNSIGNED NOT NULL,
  `company_title` varchar(60) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_logo` text NOT NULL,
  `company_description` text NOT NULL,
  `setting_cuti_all` int(11) DEFAULT NULL,
  `setting_notifikasi_cuti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `company_title`, `company_name`, `company_logo`, `company_description`, `setting_cuti_all`, `setting_notifikasi_cuti`) VALUES
(1, 'LIDO', 'LIDO29', '20231103_16_10_38_logo.png', '', 0, '');

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
(1, 'Aboutabout', 'Aboutabout', 'Aboutabout', 'Aboutabout');

-- --------------------------------------------------------

--
-- Table structure for table `setting_cuti`
--

CREATE TABLE `setting_cuti` (
  `id` int(11) NOT NULL,
  `tanggal_awal_cuti` datetime NOT NULL,
  `tanggal_akhir_cuti` datetime NOT NULL,
  `note_setting` text NOT NULL,
  `activated_setting` varchar(50) NOT NULL,
  `status_setting` varchar(50) NOT NULL,
  `setting_by` int(11) NOT NULL,
  `crated_setting` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting_cuti`
--

INSERT INTO `setting_cuti` (`id`, `tanggal_awal_cuti`, `tanggal_akhir_cuti`, `note_setting`, `activated_setting`, `status_setting`, `setting_by`, `crated_setting`) VALUES
(5, '2023-12-19 00:00:00', '2024-01-03 00:00:00', 'Maaf, pengajuan cuti telah ditutup untuk periode 2023. silakan kembali ajukan ditahun 2024, bermula pada tanggal 3 januari 2024 untuk pengajuan setidaknya pada tanggal 5 januari 2024', '1', '1', 0, '2023-12-19 09:02:52'),
(6, '2024-02-12 00:00:00', '2024-02-15 00:00:00', 'Jelang Pemilihan Presiden 2024, LIDO29 berkomitmen akan melayani kebutuhan masyarakat dan pemerintah dalam pemenuhan kebutuhan terlebih pada acara besar Negara Indonesia Pemilihan Presiden 2024.\r\nMaka dari itu, Cuti akan di tutup agar setiap karyawan bisa fokus melayani melalui LIDO29 Store maupun warehouse.', '1', '1', 0, '2024-01-20 08:14:03'),
(7, '2024-04-03 00:00:00', '2024-04-17 00:00:00', 'HAI TEAM !! CUTI DITUTUP BERDASARKAN EDARAT SURAT LEBARAN NO. 010/SE/LIDO29/III/2024, DAN AKAN DIBUKA SETELAH 17 APRIL 2024', '1', '1', 0, '2024-04-02 09:51:00'),
(8, '2025-03-26 00:00:00', '2025-04-09 00:00:00', 'Masa High Season Lebaran 2025 (1446 H)', '1', '1', 0, '2025-03-07 12:21:08');

-- --------------------------------------------------------

--
-- Table structure for table `setting_homepage`
--

CREATE TABLE `setting_homepage` (
  `id_hp` int(11) NOT NULL,
  `tittle_homepage` varchar(255) NOT NULL,
  `subtitle_homepage` varchar(255) NOT NULL,
  `image_homepage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `setting_homepage`
--

INSERT INTO `setting_homepage` (`id_hp`, `tittle_homepage`, `subtitle_homepage`, `image_homepage`) VALUES
(1, 'Selamat datang di lido career', 'Selamat datang di lido career', '');

-- --------------------------------------------------------

--
-- Table structure for table `setting_landingpage`
--

CREATE TABLE `setting_landingpage` (
  `id` int(11) NOT NULL,
  `company_title` varchar(200) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `company_logo` varchar(200) NOT NULL,
  `warna` varchar(225) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `tittle_footer` varchar(255) NOT NULL,
  `content_footer` text NOT NULL,
  `address_footer` text NOT NULL,
  `no_footer` varchar(255) NOT NULL,
  `email_footer` varchar(255) NOT NULL,
  `user_announcement` text NOT NULL,
  `link_map` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting_landingpage`
--

INSERT INTO `setting_landingpage` (`id`, `company_title`, `company_name`, `company_logo`, `warna`, `visi`, `misi`, `tittle_footer`, `content_footer`, `address_footer`, `no_footer`, `email_footer`, `user_announcement`, `link_map`) VALUES
(1, 'Lido Career Center', 'Lido Grosir', 'img_16759274212444837.png', '#3e5d65', 'Test\nadkamdakldmakdm', 'aldsmalkmdlkad', 'Lido Grosir', 'Kami menyediakan berbagai jenis produk FMCG melalui 13 toko cabang kami demi kepuasan pelanggan.', 'Kec Kadangan, Kabupaten Magelang, Jawa Tengah', '0920192019201', 'info@info', 'asadad,sad;l,a', 'https://maps.google.com/maps?width=588&amp;height=281&amp;hl=en&amp;q=ethes tech&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed');

-- --------------------------------------------------------

--
-- Table structure for table `setting_letter`
--

CREATE TABLE `setting_letter` (
  `id_setting_letter` int(11) NOT NULL,
  `no_urut_setting_letter` int(11) NOT NULL,
  `nama_setting_letter` varchar(255) NOT NULL,
  `jenis_setting_letter` varchar(60) NOT NULL,
  `date_created_setting_letter` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting_letter`
--

INSERT INTO `setting_letter` (`id_setting_letter`, `no_urut_setting_letter`, `nama_setting_letter`, `jenis_setting_letter`, `date_created_setting_letter`) VALUES
(44, 1, 'resign', 'RSG001', '2023-04-27 16:10:14'),
(45, 1, 'resign', 'RSG001', '2023-05-03 14:37:51'),
(46, 1, 'promosi', 'PRM001', '2023-05-13 00:00:00'),
(47, 2, 'resign', 'RSG002', '2023-05-13 09:32:19'),
(48, 1, 'mutasi', 'MTS001', '2023-05-29 00:00:00'),
(49, 1, 'mutasi', 'MTS001', '2023-06-05 00:00:00'),
(50, 2, 'mutasi', 'MTS002', '2023-06-05 00:00:00'),
(51, 3, 'demosi', 'DMS003', '2023-06-05 00:00:00'),
(52, 3, 'promosi', 'PRM003', '2023-06-12 00:00:00'),
(53, 3, 'mutasi', 'MTS003', '2023-06-12 00:00:00'),
(54, 3, 'mutasi', 'MTS003', '2023-06-12 00:00:00'),
(55, 3, 'demosi', 'DMS003', '2023-06-12 00:00:00'),
(56, 3, 'demosi', 'DMS003', '2023-06-12 00:00:00'),
(57, 1, 'resign', 'RSG001', '2023-06-13 17:02:40'),
(58, 3, 'mutasi', 'MTS003', '2023-06-13 00:00:00'),
(59, 3, 'mutasi', 'MTS003', '2023-06-13 00:00:00'),
(60, 3, 'mutasi', 'MTS003', '2023-06-19 00:00:00'),
(61, 2, 'resign', 'RSG002', '2023-06-23 14:45:17'),
(62, 2, 'resign', 'RSG002', '2023-06-23 14:49:33'),
(63, 2, 'resign', 'RSG002', '2023-06-23 14:52:02'),
(64, 1, 'mutasi', 'MTS001', '2023-07-06 00:00:00'),
(65, 2, 'demosi', 'DMS002', '2023-07-08 00:00:00'),
(66, 2, 'mutasi', 'MTS002', '2023-07-11 00:00:00'),
(67, 2, 'mutasi', 'MTS002', '2023-07-11 00:00:00'),
(68, 2, 'mutasi', 'MTS002', '2023-07-15 00:00:00'),
(69, 2, 'mutasi', 'MTS002', '2023-07-15 00:00:00'),
(70, 2, 'demosi', 'DMS002', '2023-07-15 00:00:00'),
(71, 1, 'resign', 'RSG001', '2023-07-15 18:22:15'),
(72, 1, 'resign', 'RSG001', '2023-07-15 18:23:28'),
(73, 2, 'resign', 'RSG002', '2023-07-26 08:13:32'),
(74, 2, 'resign', 'RSG002', '2023-07-26 08:14:08'),
(75, 2, 'mutasi', 'MTS002', '2023-07-29 00:00:00'),
(76, 2, 'mutasi', 'MTS002', '2023-07-30 00:00:00'),
(77, 2, 'mutasi', 'MTS002', '2023-07-30 00:00:00'),
(78, 2, 'mutasi', 'MTS002', '2023-07-31 00:00:00'),
(79, 2, 'resign', 'RSG002', '2023-07-31 10:42:14'),
(80, 2, 'mutasi', 'MTS002', '2023-07-31 00:00:00'),
(81, 2, 'mutasi', 'MTS002', '2023-07-31 00:00:00'),
(82, 1, 'mutasi', 'MTS001', '2023-08-07 00:00:00'),
(83, 2, 'mutasi', 'MTS002', '2023-08-13 00:00:00'),
(84, 2, 'demosi', 'DMS002', '2023-08-13 00:00:00'),
(85, 2, 'demosi', 'DMS002', '2023-08-13 00:00:00'),
(86, 1, 'resign', 'RSG001', '2023-08-22 14:39:03'),
(87, 2, 'resign', 'RSG002', '2023-08-22 14:42:57'),
(88, 2, 'mutasi', 'MTS002', '2023-08-28 00:00:00'),
(89, 2, 'mutasi', 'MTS002', '2023-08-28 00:00:00'),
(90, 2, 'mutasi', 'MTS002', '2023-08-28 00:00:00'),
(91, 2, 'mutasi', 'MTS002', '2023-08-28 00:00:00'),
(92, 2, 'mutasi', 'MTS002', '2023-08-28 00:00:00'),
(93, 2, 'mutasi', 'MTS002', '2023-08-28 00:00:00'),
(94, 2, 'mutasi', 'MTS002', '2023-08-30 00:00:00'),
(95, 2, 'mutasi', 'MTS002', '2023-08-30 00:00:00'),
(96, 2, 'resign', 'RSG002', '2023-08-31 18:19:10'),
(97, 1, 'mutasi', 'MTS001', '2023-09-01 00:00:00'),
(98, 2, 'mutasi', 'MTS002', '2023-09-01 00:00:00'),
(99, 2, 'mutasi', 'MTS002', '2023-09-01 00:00:00'),
(100, 2, 'mutasi', 'MTS002', '2023-09-01 00:00:00'),
(101, 2, 'demosi', 'DMS002', '2023-09-01 00:00:00'),
(102, 2, 'demosi', 'DMS002', '2023-09-01 00:00:00'),
(103, 2, 'demosi', 'DMS002', '2023-09-02 00:00:00'),
(104, 2, 'mutasi', 'MTS002', '2023-09-02 00:00:00'),
(105, 2, 'mutasi', 'MTS002', '2023-09-11 00:00:00'),
(106, 2, 'mutasi', 'MTS002', '2023-09-11 00:00:00'),
(107, 2, 'mutasi', 'MTS002', '2023-09-11 00:00:00'),
(108, 2, 'mutasi', 'MTS002', '2023-09-11 00:00:00'),
(109, 2, 'mutasi', 'MTS002', '2023-09-11 00:00:00'),
(110, 2, 'mutasi', 'MTS002', '2023-09-13 00:00:00'),
(111, 2, 'mutasi', 'MTS002', '2023-09-13 00:00:00'),
(112, 1, 'resign', 'RSG001', '2023-09-22 19:43:00'),
(113, 2, 'resign', 'RSG002', '2023-09-22 19:43:31'),
(114, 3, 'resign', 'RSG003', '2023-09-22 19:44:03'),
(115, 3, 'resign', 'RSG003', '2023-09-22 19:45:05'),
(116, 3, 'resign', 'RSG003', '2023-09-27 08:55:46'),
(117, 3, 'resign', 'RSG003', '2023-09-28 18:52:42'),
(118, 3, 'resign', 'RSG003', '2023-09-28 18:57:04'),
(119, 3, 'resign', 'RSG003', '2023-09-28 18:58:28'),
(120, 1, 'mutasi', 'MTS001', '2023-10-02 00:00:00'),
(121, 2, 'mutasi', 'MTS002', '2023-10-07 00:00:00'),
(122, 1, 'demosi', 'DMS001', '2023-10-07 00:00:00'),
(123, 1, 'resign', 'RSG001', '2023-10-07 20:23:54'),
(124, 3, 'mutasi', 'MTS003', '2023-10-09 00:00:00'),
(125, 1, 'promosi', 'PRM001', '2023-10-10 00:00:00'),
(126, 2, 'promosi', 'PRM002', '2023-10-10 00:00:00'),
(127, 4, 'mutasi', 'MTS004', '2023-10-21 00:00:00'),
(128, 5, 'mutasi', 'MTS005', '2023-10-21 00:00:00'),
(129, 2, 'demosi', 'DMS002', '2023-10-21 00:00:00'),
(130, 2, 'promosi', 'PRM002', '2023-10-21 00:00:00'),
(131, 1, 'resign', 'RSG001', '2023-11-01 15:43:36'),
(132, 1, 'mutasi', 'MTS001', '2023-11-02 00:00:00'),
(133, 1, 'resign', 'RSG001', '2023-11-08 13:57:47'),
(134, 2, 'resign', 'RSG002', '2023-11-08 13:58:49'),
(135, 1, 'promosi', 'PRM001', '2023-11-13 00:00:00'),
(136, 2, 'mutasi', 'MTS002', '2023-11-13 00:00:00'),
(137, 3, 'mutasi', 'MTS003', '2023-11-13 00:00:00'),
(138, 4, 'mutasi', 'MTS004', '2023-11-13 00:00:00'),
(139, 3, 'resign', 'RSG003', '2023-11-21 09:25:07'),
(140, 3, 'resign', 'RSG003', '2023-11-21 09:26:21'),
(141, 4, 'mutasi', 'MTS004', '2023-11-27 00:00:00'),
(142, 5, 'mutasi', 'MTS005', '2023-11-27 00:00:00'),
(143, 3, 'resign', 'RSG003', '2023-11-27 23:37:27'),
(144, 6, 'mutasi', 'MTS006', '2023-11-27 00:00:00'),
(145, 1, 'mutasi', 'MTS001', '2023-12-07 17:41:36'),
(146, 2, 'mutasi', 'MTS002', '2023-12-19 11:03:57'),
(147, 3, 'mutasi', 'MTS003', '2023-12-27 01:32:27'),
(148, 1, 'mutasi', 'MTS001', '2024-01-08 17:46:23'),
(149, 2, 'mutasi', 'MTS002', '2024-01-08 17:46:41'),
(150, 3, 'mutasi', 'MTS003', '2024-01-17 10:56:23'),
(151, 4, 'mutasi', 'MTS004', '2024-01-17 10:56:40'),
(152, 5, 'mutasi', 'MTS005', '2024-01-17 10:56:42'),
(153, 1, 'promosi', 'PRM001', '2024-01-24 00:00:00'),
(154, 2, 'promosi', 'PRM002', '2024-01-24 00:00:00'),
(155, 1, 'mutasi', 'MTS001', '2024-02-04 09:44:18'),
(156, 2, 'mutasi', 'MTS002', '2024-02-04 09:44:36'),
(157, 1, 'demosi', 'DMS001', '2024-02-04 00:00:00'),
(158, 3, 'mutasi', 'MTS003', '2024-02-06 09:30:05'),
(159, 4, 'mutasi', 'MTS004', '2024-02-06 09:30:22'),
(160, 4, 'mutasi', 'MTS004', '2024-02-06 09:30:23'),
(161, 4, 'mutasi', 'MTS004', '2024-02-06 09:30:24'),
(162, 4, 'mutasi', 'MTS004', '2024-02-06 09:30:26'),
(163, 1, 'resign', 'RSG001', '2024-02-13 07:57:20'),
(164, 2, 'resign', 'RSG002', '2024-02-13 07:58:52'),
(165, 2, 'resign', 'RSG002', '2024-02-13 07:59:38'),
(166, 2, 'resign', 'RSG002', '2024-02-13 08:00:42'),
(167, 3, 'resign', 'RSG003', '2024-02-13 08:01:10'),
(168, 4, 'mutasi', 'MTS004', '2024-02-16 09:31:01'),
(169, 1, 'mutasi', 'MTS001', '2024-03-02 15:29:47'),
(170, 2, 'mutasi', 'MTS002', '2024-03-14 15:53:54'),
(171, 3, 'mutasi', 'MTS003', '2024-03-14 15:54:12'),
(172, 1, 'resign', 'RSG001', '2024-03-15 09:09:13'),
(173, 3, 'mutasi', 'MTS003', '2024-03-18 07:12:59'),
(174, 4, 'mutasi', 'MTS004', '2024-03-18 07:13:17'),
(175, 2, 'resign', 'RSG002', '2024-03-19 19:25:42'),
(176, 2, 'resign', 'RSG002', '2024-03-21 11:46:32'),
(177, 2, 'resign', 'RSG002', '2024-03-21 11:47:14'),
(178, 2, 'resign', 'RSG002', '2024-04-18 14:45:50'),
(179, 2, 'resign', 'RSG002', '2024-05-02 18:13:12'),
(180, 2, 'resign', 'RSG002', '2024-05-02 19:33:44'),
(181, 2, 'resign', 'RSG002', '2024-05-14 23:21:56'),
(182, 2, 'mutasi', 'MTS002', '2024-05-14 23:26:25'),
(183, 3, 'mutasi', 'MTS003', '2024-05-14 23:26:41'),
(184, 4, 'mutasi', 'MTS004', '2024-05-14 23:26:42'),
(185, 5, 'mutasi', 'MTS005', '2024-05-14 23:26:43'),
(186, 6, 'mutasi', 'MTS006', '2024-05-14 23:26:44'),
(187, 6, 'mutasi', 'MTS006', '2024-05-14 23:26:46'),
(188, 2, 'resign', 'RSG002', '2024-06-08 11:47:50'),
(189, 1, 'promosi', 'PRM001', '2024-06-10 00:00:00'),
(190, 2, 'promosi', 'PRM002', '2024-06-10 00:00:00'),
(191, 2, 'promosi', 'PRM002', '2024-06-10 00:00:00'),
(192, 2, 'promosi', 'PRM002', '2024-06-10 00:00:00'),
(193, 2, 'promosi', 'PRM002', '2024-06-10 00:00:00'),
(194, 2, 'promosi', 'PRM002', '2024-06-10 00:00:00'),
(195, 2, 'promosi', 'PRM002', '2024-06-10 00:00:00'),
(196, 2, 'promosi', 'PRM002', '2024-06-10 00:00:00'),
(197, 2, 'promosi', 'PRM002', '2024-06-24 00:00:00'),
(198, 3, 'promosi', 'PRM003', '2024-06-24 00:00:00'),
(199, 3, 'promosi', 'PRM003', '2024-06-24 00:00:00'),
(200, 4, 'mutasi', 'MTS004', '2024-06-27 11:02:36'),
(201, 3, 'promosi', 'PRM003', '2024-06-27 00:00:00'),
(202, 4, 'promosi', 'PRM004', '2024-06-27 00:00:00'),
(203, 2, 'resign', 'RSG002', '2024-06-27 11:06:41'),
(204, 1, 'promosi', 'PRM001', '2024-07-02 00:00:00'),
(205, 2, 'promosi', 'PRM002', '2024-07-02 00:00:00'),
(206, 2, 'resign', 'RSG002', '2024-07-02 15:49:23'),
(207, 2, 'promosi', 'PRM002', '2024-07-09 00:00:00'),
(208, 3, 'promosi', 'PRM003', '2024-07-09 00:00:00'),
(209, 2, 'resign', 'RSG002', '2024-07-09 13:35:45'),
(210, 3, 'promosi', 'PRM003', '2024-07-16 00:00:00'),
(211, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(212, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(213, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(214, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(215, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(216, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(217, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(218, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(219, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(220, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(221, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(222, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(223, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(224, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(225, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(226, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(227, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(228, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(229, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(230, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(231, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(232, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(233, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(234, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(235, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(236, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(237, 4, 'promosi', 'PRM004', '2024-07-16 00:00:00'),
(238, 5, 'promosi', 'PRM005', '2024-07-16 00:00:00'),
(239, 5, 'promosi', 'PRM005', '2024-07-16 00:00:00'),
(240, 5, 'promosi', 'PRM005', '2024-07-16 00:00:00'),
(241, 5, 'promosi', 'PRM005', '2024-07-16 00:00:00'),
(242, 5, 'promosi', 'PRM005', '2024-07-16 00:00:00'),
(243, 5, 'promosi', 'PRM005', '2024-07-16 00:00:00'),
(244, 5, 'promosi', 'PRM005', '2024-07-16 00:00:00'),
(245, 5, 'promosi', 'PRM005', '2024-07-23 00:00:00'),
(246, 2, 'resign', 'RSG002', '2024-07-23 19:46:16'),
(247, 2, 'resign', 'RSG002', '2024-07-23 19:56:45'),
(248, 6, 'promosi', 'PRM006', '2024-07-24 00:00:00'),
(249, 7, 'promosi', 'PRM007', '2024-07-24 00:00:00'),
(250, 3, 'mutasi', 'MTS003', '2024-07-27 17:44:17'),
(251, 4, 'mutasi', 'MTS004', '2024-07-27 17:46:25'),
(252, 4, 'mutasi', 'MTS004', '2024-07-27 17:48:33'),
(253, 4, 'mutasi', 'MTS004', '2024-07-27 17:51:22'),
(254, 5, 'mutasi', 'MTS005', '2024-07-27 17:53:29'),
(255, 5, 'mutasi', 'MTS005', '2024-07-27 17:55:37'),
(256, 1, 'promosi', 'PRM001', '2024-08-06 00:00:00'),
(257, 2, 'resign', 'RSG002', '2024-08-19 14:51:21'),
(258, 3, 'mutasi', 'MTS003', '2024-08-25 20:53:58'),
(259, 4, 'mutasi', 'MTS004', '2024-08-26 11:00:53'),
(260, 2, 'resign', 'RSG002', '2024-08-29 19:54:53'),
(261, 2, 'resign', 'RSG002', '2024-08-29 19:56:39'),
(262, 3, 'resign', 'RSG003', '2024-09-13 13:28:30'),
(263, 3, 'resign', 'RSG003', '2024-09-13 13:31:01'),
(264, 3, 'resign', 'RSG003', '2024-09-13 22:19:46'),
(265, 1, 'promosi', 'PRM001', '2024-09-18 00:00:00'),
(266, 2, 'promosi', 'PRM002', '2024-09-18 00:00:00'),
(267, 2, 'promosi', 'PRM002', '2024-09-18 00:00:00'),
(268, 2, 'promosi', 'PRM002', '2024-09-18 00:00:00'),
(269, 2, 'promosi', 'PRM002', '2024-09-30 00:00:00'),
(270, 3, 'promosi', 'PRM003', '2024-09-30 00:00:00'),
(271, 3, 'resign', 'RSG003', '2024-09-30 10:21:22'),
(272, 2, 'resign', 'RSG002', '2024-10-08 11:30:12'),
(273, 2, 'resign', 'RSG002', '2024-10-08 11:31:57'),
(274, 6, 'mutasi', 'MTS006', '2024-10-22 16:59:31'),
(275, 2, 'resign', 'RSG002', '2024-10-24 11:30:50'),
(276, 3, 'promosi', 'PRM003', '2024-10-28 00:00:00'),
(277, 4, 'promosi', 'PRM004', '2024-10-28 00:00:00'),
(278, 5, 'promosi', 'PRM005', '2024-10-28 00:00:00'),
(279, 6, 'promosi', 'PRM006', '2024-10-28 00:00:00'),
(280, 3, 'resign', 'RSG003', '2024-11-13 16:25:35'),
(281, 3, 'resign', 'RSG003', '2024-11-16 14:52:05'),
(282, 6, 'mutasi', 'MTS006', '2024-11-26 17:15:21'),
(283, 1, 'promosi', 'PRM001', '2024-12-11 00:00:00'),
(284, 2, 'promosi', 'PRM002', '2024-12-11 00:00:00'),
(285, 1, 'resign', 'RSG001', '2024-12-16 17:49:59'),
(286, 1, 'resign', 'RSG001', '2024-12-16 17:57:31'),
(287, 4, 'mutasi', 'MTS004', '2024-12-18 10:23:16'),
(288, 5, 'mutasi', 'MTS005', '2024-12-18 10:23:33'),
(289, 6, 'mutasi', 'MTS006', '2024-12-30 19:24:38'),
(290, 7, 'mutasi', 'MTS007', '2024-12-30 19:25:52'),
(291, 8, 'mutasi', 'MTS008', '2024-12-30 19:36:37'),
(292, 9, 'mutasi', 'MTS009', '2024-12-30 19:36:38'),
(293, 6, 'mutasi', 'MTS006', '2025-01-28 10:14:33'),
(294, 7, 'mutasi', 'MTS007', '2025-01-29 17:51:49'),
(295, 2, 'promosi', 'PRM002', '2025-01-29 00:00:00'),
(296, 3, 'promosi', 'PRM003', '2025-01-30 00:00:00'),
(297, 1, 'promosi', 'PRM001', '2025-02-15 00:00:00'),
(298, 2, 'promosi', 'PRM002', '2025-02-15 00:00:00'),
(299, 3, 'resign', 'RSG003', '2025-02-17 11:54:39'),
(300, 5, 'mutasi', 'MTS005', '2025-02-25 12:40:50'),
(301, 3, 'resign', 'RSG003', '2025-02-27 22:16:19'),
(302, 3, 'resign', 'RSG003', '2025-02-27 22:16:24'),
(303, 3, 'resign', 'RSG003', '2025-02-27 22:16:28'),
(304, 3, 'resign', 'RSG003', '2025-02-27 22:16:32'),
(305, 3, 'resign', 'RSG003', '2025-02-27 22:16:36'),
(306, 5, 'mutasi', 'MTS005', '2025-03-03 17:41:00'),
(307, 2, 'resign', 'RSG002', '2025-03-13 15:28:54'),
(308, 2, 'resign', 'RSG002', '2025-04-11 16:22:40'),
(309, 2, 'resign', 'RSG002', '2025-04-11 16:22:44'),
(310, 1, 'mutasi', 'MTS001', '2025-04-11 16:23:52'),
(311, 2, 'mutasi', 'MTS002', '2025-04-14 17:15:40'),
(312, 2, 'resign', 'RSG002', '2025-05-31 17:54:08'),
(313, 5, 'mutasi', 'MTS005', '2025-06-03 10:29:03'),
(314, 6, 'mutasi', 'MTS006', '2025-06-18 17:38:26'),
(315, 7, 'mutasi', 'MTS007', '2025-06-19 15:41:58'),
(316, 2, 'resign', 'RSG002', '2025-06-19 18:06:29'),
(317, 8, 'mutasi', 'MTS008', '2025-06-22 10:55:28'),
(318, 9, 'mutasi', 'MTS009', '2025-06-22 10:55:29'),
(319, 9, 'mutasi', 'MTS009', '2025-06-22 10:56:01'),
(320, 2, 'resign', 'RSG002', '2025-07-16 17:31:00'),
(321, 5, 'mutasi', 'MTS005', '2025-07-28 18:59:01'),
(322, 2, 'resign', 'RSG002', '2025-07-30 18:23:45'),
(323, 5, 'mutasi', 'MTS005', '2025-08-04 17:14:35'),
(324, 2, 'promosi', 'PRM002', '2025-08-04 00:00:00'),
(325, 3, 'promosi', 'PRM003', '2025-08-04 00:00:00'),
(326, 3, 'promosi', 'PRM003', '2025-08-04 00:00:00'),
(327, 3, 'promosi', 'PRM003', '2025-08-04 00:00:00'),
(328, 3, 'promosi', 'PRM003', '2025-08-04 00:00:00'),
(329, 3, 'promosi', 'PRM003', '2025-08-04 00:00:00'),
(330, 3, 'demosi', 'DMS003', '2025-08-09 00:00:00'),
(331, 6, 'mutasi', 'MTS006', '2025-08-09 12:11:27'),
(332, 3, 'promosi', 'PRM003', '2025-08-09 00:00:00'),
(333, 4, 'promosi', 'PRM004', '2025-08-09 00:00:00'),
(334, 4, 'promosi', 'PRM004', '2025-08-09 00:00:00'),
(335, 2, 'resign', 'RSG002', '2025-08-09 12:14:55'),
(336, 4, 'promosi', 'PRM004', '2025-08-22 00:00:00'),
(337, 4, 'demosi', 'DMS004', '2025-08-22 00:00:00'),
(338, 2, 'resign', 'RSG002', '2025-08-22 15:51:59'),
(339, 2, 'resign', 'RSG002', '2025-08-22 15:52:41'),
(340, 2, 'resign', 'RSG002', '2025-08-25 16:45:51'),
(341, 2, 'resign', 'RSG002', '2025-08-25 16:46:21'),
(342, 5, 'promosi', 'PRM005', '2025-08-26 00:00:00'),
(343, 6, 'promosi', 'PRM006', '2025-08-26 00:00:00'),
(344, 6, 'promosi', 'PRM006', '2025-08-26 00:00:00'),
(345, 7, 'promosi', 'PRM007', '2025-08-26 00:00:00'),
(346, 8, 'promosi', 'PRM008', '2025-08-26 00:00:00'),
(347, 8, 'promosi', 'PRM008', '2025-08-26 00:00:00'),
(348, 3, 'resign', 'RSG003', '2025-09-01 16:51:43'),
(349, 3, 'resign', 'RSG003', '2025-09-01 16:51:52'),
(350, 3, 'resign', 'RSG003', '2025-09-01 16:51:59'),
(351, 4, 'promosi', 'PRM004', '2025-09-03 00:00:00'),
(352, 5, 'promosi', 'PRM005', '2025-09-03 00:00:00'),
(353, 5, 'promosi', 'PRM005', '2025-09-03 00:00:00'),
(354, 3, 'resign', 'RSG003', '2025-09-04 17:27:52'),
(355, 3, 'resign', 'RSG003', '2025-09-08 17:10:24'),
(356, 3, 'resign', 'RSG003', '2025-09-08 17:10:34'),
(357, 3, 'resign', 'RSG003', '2025-09-08 17:10:45'),
(358, 3, 'resign', 'RSG003', '2025-09-22 10:30:20'),
(359, 3, 'resign', 'RSG003', '2025-09-22 10:30:47'),
(360, 3, 'resign', 'RSG003', '2025-09-22 10:30:58'),
(361, 3, 'resign', 'RSG003', '2025-09-22 10:31:11'),
(362, 3, 'resign', 'RSG003', '2025-09-22 10:31:22'),
(363, 3, 'resign', 'RSG003', '2025-09-22 10:31:35'),
(364, 3, 'resign', 'RSG003', '2025-09-22 10:31:47'),
(365, 3, 'resign', 'RSG003', '2025-09-22 10:31:58'),
(366, 7, 'mutasi', 'MTS007', '2025-10-04 16:11:41'),
(367, 8, 'mutasi', 'MTS008', '2025-10-04 16:11:42'),
(368, 8, 'mutasi', 'MTS008', '2025-10-04 16:11:42'),
(369, 8, 'mutasi', 'MTS008', '2025-10-04 16:11:42'),
(370, 8, 'mutasi', 'MTS008', '2025-10-04 16:11:42'),
(371, 2, 'resign', 'RSG002', '2025-10-07 17:21:11'),
(372, 2, 'resign', 'RSG002', '2025-10-07 17:21:24'),
(373, 2, 'resign', 'RSG002', '2025-10-07 17:21:47'),
(374, 2, 'resign', 'RSG002', '2025-10-07 17:22:04'),
(375, 2, 'resign', 'RSG002', '2025-10-07 17:22:12'),
(376, 2, 'resign', 'RSG002', '2025-10-07 17:22:21'),
(377, 2, 'resign', 'RSG002', '2025-10-07 17:22:29'),
(378, 2, 'resign', 'RSG002', '2025-10-07 17:22:38'),
(379, 2, 'resign', 'RSG002', '2025-10-07 17:22:48'),
(380, 2, 'resign', 'RSG002', '2025-10-07 17:22:56'),
(381, 2, 'resign', 'RSG002', '2025-10-07 17:24:15'),
(382, 2, 'resign', 'RSG002', '2025-10-07 17:25:31'),
(383, 2, 'resign', 'RSG002', '2025-10-07 17:26:13'),
(384, 7, 'promosi', 'PRM007', '2025-10-11 00:00:00'),
(385, 8, 'mutasi', 'MTS008', '2025-10-18 16:04:33');

-- --------------------------------------------------------

--
-- Table structure for table `setting_social`
--

CREATE TABLE `setting_social` (
  `id_sc` int(11) NOT NULL,
  `name_social` varchar(255) NOT NULL,
  `icon_social` varchar(255) NOT NULL,
  `link_social` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `setting_social`
--

INSERT INTO `setting_social` (`id_sc`, `name_social`, `icon_social`, `link_social`) VALUES
(9, 'Anwar', '<i class=\'fa-brands fa-facebook\'></i>', 'Akadslkml'),
(26, 'Anwar', '<i class=\'fa-brands fa-twitter\'></i>', 'poamdsamdpoamd'),
(27, 'Anwar', '<i class=\'fa-brands fa-twitter\'></i>', 'poamdsamdpoamd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_background`
--

CREATE TABLE `tbl_background` (
  `id_background` int(11) NOT NULL,
  `nama_bg` varchar(255) NOT NULL,
  `foto_bg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_background`
--

INSERT INTO `tbl_background` (`id_background`, `nama_bg`, `foto_bg`) VALUES
(1, 'test', 'bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_badanhukum`
--

CREATE TABLE `tbl_badanhukum` (
  `id_badanhukum` int(11) NOT NULL,
  `namabadan_hukum` varchar(100) NOT NULL,
  `desc_badanhukum` varchar(255) DEFAULT NULL,
  `id_departement` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_badanhukum`
--

INSERT INTO `tbl_badanhukum` (`id_badanhukum`, `namabadan_hukum`, `desc_badanhukum`, `id_departement`) VALUES
(1, 'ETH', 'PT Ethes Teknologi Makmur', 'BBB'),
(2, 'RKR', 'CV Rukun Kukuh Remboko', 'AAA'),
(3, 'PDD', 'CV Prameswari Dharma Daryono', 'AAA'),
(4, 'KTS', 'CV Kukuh Tentrem Santoso', 'AAA'),
(5, 'EWE', 'CV Ethes Widi Elfarin', 'AAA'),
(6, 'PKR', 'CV Punokawan Kukuh Raharja', 'EEE'),
(7, 'DSB', 'DSB', 'DDD'),
(8, 'BDI', 'BDI', 'FFF'),
(9, 'TSR', 'TSR', 'GGG'),
(10, 'TRAINING', 'TR', 'GGG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_beneficial`
--

CREATE TABLE `tbl_beneficial` (
  `id_beneficial` int(11) NOT NULL,
  `id_kontrak` varchar(255) DEFAULT NULL,
  `id_emp_beneficial` varchar(20) NOT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `type_beneficial` varchar(55) NOT NULL,
  `desc_beneficial` text NOT NULL,
  `update_beneficial` varchar(50) DEFAULT NULL,
  `status_beneficial` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_beneficial`
--

INSERT INTO `tbl_beneficial` (`id_beneficial`, `id_kontrak`, `id_emp_beneficial`, `id_jabatan`, `type_beneficial`, `desc_beneficial`, `update_beneficial`, `status_beneficial`) VALUES
(6, '3', '22222222222', 2, 'bpjsketenagakerjaan', 'BPJS Ketenagkerjaan', NULL, 2),
(8, '12', '2105660012', 22, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(9, '12', '2105660012', 22, 'bpjskesehatan', 'bpjskesehatan', NULL, 2),
(11, '12', '2105660012', 22, 'inventaris', 'inventaris', NULL, 2),
(12, '003.2.PKWT.RKR.VI.2023 ', '2105660032', 57, 'bpjskesehatan', 'bpjskesehatan', NULL, 2),
(13, '003.2.PKWT.RKR.VI.2023 ', '2105660032', 57, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(14, '001.1.PKWTT.PDD.IX.2024', '2311990031', 29, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(15, '001.1.PKWTT.PDD.IX.2024', '2311990031', 29, 'bpjskesehatan', 'bpjskesehatan', NULL, 2),
(16, '004.2.PKWTT.PDD.IX.2024 ', '2212660042', 4, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(17, '003.2.PKWT.RKR.VI.2023 ', '2105660032', 57, 'inventaris', 'inventaris', NULL, 2),
(18, '001.1.PKWTT.PDD.X.2023 ', '2310990011', 15, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(19, '001.1.PKWTT.PKR.XII.2024', '2201990041', 60, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(20, '009.2.PKWTT.ETH.X.2023', '2310660012', 4, 'inventaris', 'inventaris', NULL, 2),
(21, '014.1.PKWTT.ETH.IV.2022', '2204990141', 65, 'inventaris', 'inventaris', NULL, 2),
(22, '014.1.PKWTT.ETH.IV.2022', '2204990141', 65, 'inventaris', 'inventaris', NULL, 2),
(23, '014.1.PKWTT.ETH.IV.2022', '2204990141', 65, 'inventaris', 'inventaris', NULL, 2),
(24, '014.1.PKWTT.ETH.IV.2022', '2204990141', 65, 'inventaris', 'inventaris', NULL, 2),
(25, '014.1.PKWTT.ETH.IV.2022', '2204990141', 65, 'inventaris', 'inventaris', NULL, 2),
(26, '014.1.PKWTT.ETH.IV.2022', '2204990141', 65, 'inventaris', 'inventaris', NULL, 2),
(27, '014.1.PKWTT.ETH.IV.2022', '2204990141', 65, 'inventaris', 'inventaris', NULL, 2),
(28, ' 002.1.PKWT.PDD.I.2022', '2201990021', 13, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(29, '009.2.PKWTT.ETH.X.2023', '2310660012', 4, 'inventaris', 'inventaris', NULL, 2),
(30, '001.2.PKWTT.EWE.VI.2023 ', '2306660012', 23, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(31, 'PP21PKWT/PDD/I/2022', '2201990011', 13, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(32, '012.1.PKWTT.ETH.IV.2022', '2204990121', 26, 'other', 'other', NULL, 2),
(33, '006.1.PKWTT.PDD.V.2023 ', '2305990061', 13, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(34, '002.1.PKWTT.PDD.VI.2023 ', '2306990021', 13, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(35, '005_I_pkwtt_pdd_III_2022', '2203990051', 26, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(36, '003.1.PKWTT.PDD.III.2023 ', '2303990031', 25, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(37, '013.1.PKWTT.PDD.IX.2023 ', '2309990131', 13, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(38, '001.2.PKWTT.PDD.V.2024', '2405660012', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(39, '005.2.PKWTT.PDD.VI.2024', '2212990201', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(40, '013.1.PKWTT.PDD.IX.2023 ', '2309990131', 13, 'other', 'other', NULL, 2),
(41, '010.1.PKWTT.PDD.VI.2023', '2306990101', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(42, '004.1.PKWTT.PKR.VII.2024', '2311990051', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(43, '002.1.PKWTT.EWE.VII.2024', '2201660012', 31, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(44, '003.2.PKWTT.RKR.VII.2024', '2302660042', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(45, '003.1.PKWTT.PDD.VIII.2023', '2308990031', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(46, '018.1.PKWTT.KTS.X.2024 ', '2410990021', 13, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(47, '', '2303990031', 25, 'other', 'other', NULL, 2),
(48, '001.2.PKWTT.PDD.II.2024', '2402660012', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(49, '001.1.PKWTT.PDD.VI.2023 ', '2306990011', 13, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(50, '004.2.PKKT.RKR.IX.2024', '2106660012', 35, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(51, '004.2.PKKT.RKR.IX.2024', '2106660012', 35, 'bpjskesehatan', 'bpjskesehatan', NULL, 2),
(52, '003.1.PKWTT.PDD.VIII.2023', '2308990031', 47, 'other', 'other', NULL, 2),
(53, '002.1.PKWTT.EWE.VII.2024', '2201660012', 31, 'inventaris', 'inventaris', NULL, 2),
(54, '002.1.PKKT.KTS.IX.2024 ', '1905660022', 10, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(55, '001.1.PKWTT.PDD.II.2024', '2402990011', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(56, '003.1.PKWTT.RKR.IX.2024', '2206660012', 13, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(57, '001.2.PKWTT.EWE.XII.2024', '2501990011', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(58, '025.2.PKWTT.PDD.VII.2024', '2310990021', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(59, '002.2.PKWTT.PDD.IX.2023', '2309660022', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(60, '001.2.PKWTT.PDD.III.2023', '2303660012', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(61, '015.2.PKWTT.PDD.VII.2024', '2402990021', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(62, '004.1.PKWTT.PDD.XI.2023', '2311990041', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(63, ' 016.2.PKWTT.PDD.VII.2024', '2309990031', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(64, '013.2.PKWTT.PDD.VII.2024', '2306660032', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(65, '001.2.PKWTT.EWE.II.2025 ', '2501660022', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(66, '021.2.PKWTT.PDD.X.2024', '2410660032', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(67, '002.2.PKWTT.KTS.VII.2024', '2212990131', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(68, '003.1.PKWTT.RKR.IX.2024', '2206660012', 13, 'bpjskesehatan', 'bpjskesehatan', NULL, 2),
(69, '002.1.PKKT.KTS.IX.2024 ', '1905660022', 10, 'bpjskesehatan', 'bpjskesehatan', NULL, 2),
(70, '012.2.PKWTT.PDD.VII.2024', '2212990161', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(71, '002.1.PKWTT.PDD.VII.2023 ', '2307990021', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(72, '010.2.PKWTT.PDD.VII.2024', '2306990171', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(73, '011.2.PKWTT.PDD.VII.2024', '2306990091', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(74, '12.2.PKWTT.PDD.XII.2022', '2212660122', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(75, 'PP21PKWT/PDD/XII/2021', '2204660032', 32, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(76, 'PP19PKWT_RKR_VI_2021', '2106990021', 31, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(77, '011.2.PKWTT.PDD.VI.2024', '2302990051', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(78, '001.2.PKWTT.EWE.VI.2023', '2204660012', 31, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(79, '001.2.PKWTT.EWE.VI.2023', '2204660012', 31, 'bpjskesehatan', 'bpjskesehatan', NULL, 2),
(80, '001.2.PKWTT.PDD.I.2025', '2501990021', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(81, '007.1.PKWTT.PDD.II.2023', '2302990071', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(82, '001.1.PKWTT.PDD.V.2023', '2305990011', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(83, '001.2.PKWTT.PDD.VII.2024', '2407990011', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(84, '008.1.PKWTT.PDD.VI.2023', '2306990041', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(85, '023.1.PKWTT.PDD.XII.2022.', '2212990231', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(86, '003.2.PKWTT.PDD.III.202', '2303660032', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(87, '004.2.PKWTT.PDD.III.2023 ', '2303660042', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(88, '007.1.PKWTT.PDD.XII.2022', '2212990071', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(89, '039.PKWTT.PDD.VI.2022 ', '2207990041', 32, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(90, '002.2.PKWTT.KTS.X.2024', '2207990051', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(91, '007.2.PKWTT.RKR.X.2024 ', '2308660012', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(92, '003.2.PKWTT.KTS.X.2024', '2207990061', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(93, '008.2.PKWTT.KTS.X.2024', '1905660042', 31, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(94, '008.2.PKWTT.KTS.X.2024', '1905660042', 31, 'bpjskesehatan', 'bpjskesehatan', NULL, 2),
(95, '', '2410660012', 23, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(96, '001.2.PKWTT.PDD.VI.2024', '2406660012', 32, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(97, '008.1.PKWTT.PDD.II.2023', '2302990081', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(98, '002.2.PKWTT.PDD.X.2024', '2410660022', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(99, '005.2.PKWTT.EWE.IX.2024', '2409660022', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(100, '006.2.PKWTT.PDD.IX.2024', '2409660012', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(101, '012.2.PKWTT.PDD.VI.2024', '2209990091', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(102, '009.2.PKWTT.PDD.VII.2024', '2402990051', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(103, '001.2.PKWTT.PDD.VII.2024', '2310660072', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(104, '004.2.PKWTT.PDD.VII.2023 ', '2307660042', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(105, '006.2.PKWTT.PDD.VI', '2306660062', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(106, 'PP21PKWT/EWE/XI/2021', '2203990011', 31, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(107, '008.2.PKWTT.PDD.VII.2024', '2302990031', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(108, '010.2.PKWTT.PDD.VI.2024', '2406660042', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(109, '0.17.2.PKWTT.RKR.X.2024', '2401990011', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(110, '019.2.PKWTT.PDD.VII.2024', '2309990051', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(111, '019.2.PKWTT.PDD.VII.2024', '2309990051', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(112, '004.2.PKWTT.PDD.IX.2023 ', '2309660042', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(113, '021.2.PKWTT.PDD.VII', '2204990031', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(114, '003.1.PKWTT.RKR.I.2025', '2501660012', 22, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(115, '08-PP19PKT-KTS-V-2019', '1905990081', 26, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(116, '08-PP19PKT-KTS-V-2019', '1905990081', 26, 'bpjskesehatan', 'bpjskesehatan', NULL, 2),
(117, '004.2.PKWTT.KTS.X.2024', '2208660042', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(118, '002.1.PKWTT.EWE.VII.2024', '2201660012', 31, 'bpjskesehatan', 'bpjskesehatan', NULL, 2),
(119, 'PP21/PKWT/RKR/XII/2021', '2112990011', 35, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(120, '001/1/PKKT/KTS/V/2019', '1905990011', 25, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(121, '001/1/PKKT/KTS/V/2019', '1905990011', 25, 'bpjskesehatan', 'bpjskesehatan', NULL, 2),
(122, 'PP21PKWT/EWE/XI/2021', '2203990011', 31, 'bpjskesehatan', 'bpjskesehatan', NULL, 2),
(123, '007/I/PKKT/KTS/V/2019', '1905990071', 6, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(124, '007/I/PKKT/KTS/V/2019', '1905990071', 6, 'bpjskesehatan', 'bpjskesehatan', NULL, 2),
(125, '001.2.PKHL.PDD.VIII.2024', '2110990011', 73, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(126, 'PP2OPKWT/ETM/VI/2021', '2206990011', 73, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(127, 'PP2OPKWT/ETM/VI/2021', '2206990011', 73, 'bpjskesehatan', 'bpjskesehatan', NULL, 2),
(128, 'PP20PKWT/PKR/VII/2021', '2107990011', 43, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(129, 'PP20PKWT/PKR/VII/2021', '2107990011', 43, 'bpjskesehatan', 'bpjskesehatan', NULL, 2),
(130, 'XX.PP21PKWTT.PDD.II.2022', '2202990071', 31, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(131, 'PP21/PKWT/RKR/XII/2021', '2112990011', 35, 'inventaris', 'inventaris', NULL, 2),
(132, '09-PP19PKT-KTS-V-2019', '1905990061', 53, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(133, '09-PP19PKT-KTS-V-2019', '1905990061', 53, 'bpjskesehatan', 'bpjskesehatan', NULL, 2),
(134, '001.2.PKWTT.PDD.II.2023', '2302660012', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(135, '04.2.PKWTT.PDD.VII.2024', '2307990051', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(136, '008.1.PKWTT.EWE.V.2023 ', '2305990081', 58, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(137, '001.1.PKWTT.RKR.IX.2024', '1905990091', 21, 'bpjskesehatan', 'bpjskesehatan', NULL, 2),
(138, '001.1.PKWTT.RKR.IX.2024', '1905990091', 21, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(139, '002.1.PKWTT.PDD.XII.2021', '2112990021', 13, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(140, '01-PP19PKT-KTS-V-2019', '1905990111', 15, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(141, '01-PP19PKT-KTS-V-2019', '1905990111', 15, 'bpjskesehatan', 'bpjskesehatan', NULL, 2),
(142, '12-PP19PKT-KTS-V-2019', '1905990041', 26, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(143, '12-PP19PKT-KTS-V-2019', '1905990041', 26, 'bpjskesehatan', 'bpjskesehatan', NULL, 2),
(144, '038.PKWTT.PDD.VI.2022', '2206990121', 13, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(145, '008.1.PKWTT.PDD.VI.2023', '2306990081', 14, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(146, 'PP21PKWTT-PDD-III-2022', '2203990101', 32, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(147, '007.2.PKWTT.PDD.VII.2024', '2207990081', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(148, '001.PKWTT.PDD.VII.2022', '2207990011', 32, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(149, '015/PP21 PWKTT/EWE/V/2022', '2205990011', 31, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(150, '015/PP21 PWKTT/EWE/V/2022', '2205990011', 31, 'inventaris', 'inventaris', NULL, 2),
(151, '002.1.PKWTT.EWE.VII.2024', '2201660012', 31, 'inventaris', 'inventaris', NULL, 2),
(152, '003.2.PKWT.RKR.VI.2023 ', '2105660032', 57, 'inventaris', 'inventaris', NULL, 2),
(153, '001.2.PKWTT.EWE.VI.2023', '2204660012', 31, 'inventaris', 'inventaris', NULL, 2),
(154, 'PP21PKWT/EWE/XI/2021', '2203990011', 31, 'inventaris', 'inventaris', NULL, 2),
(155, '01-PP19PKT-KTS-V-2019', '1905990111', 15, 'inventaris', 'inventaris', NULL, 2),
(156, 'PP19PKWT/RKR/VI/2021', '2106990021', 31, 'inventaris', 'inventaris', NULL, 2),
(157, 'PP19PKWT/RKR/VI/2021', '2106990021', 31, 'account', 'account', NULL, 2),
(158, 'PP21/PKWT/RKR/XII/2021', '2112990011', 35, 'inventaris', 'inventaris', NULL, 2),
(159, '001.1.PKWTT.PKR.XII.2024', '2201990041', 60, 'inventaris', 'inventaris', NULL, 2),
(160, '001.1.PKWTT.PKR.XII.2024', '2201990041', 60, 'account', 'account', NULL, 2),
(161, 'XX.PP21PKWTT.PDD.II.2022', '2202990071', 31, 'inventaris', 'inventaris', NULL, 2),
(162, 'XX.PP21PKWTT.PDD.II.2022', '2202990071', 31, 'account', 'account', NULL, 2),
(163, '015/PP21 PWKTT/EWE/V/2022', '2205990011', 31, 'inventaris', 'inventaris', NULL, 2),
(164, '015/PP21 PWKTT/EWE/V/2022', '2205990011', 31, 'account', 'account', NULL, 2),
(165, '0000022229999', '2212990100', 3, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(166, '014.1.PKWTT.ETH.IV.2022', '2204990141', 65, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(167, 'PP21 PKWTT/PDD/III/2021', '2203990061', 26, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(168, '013.1.PKWT.PDD.IV.2022', '2204990131', 13, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(169, '001.1.PKWTT.RKR.III.2025', '2503990011', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(170, '009.2.PKWTT.ETH.X.2023', '2310660012', 4, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(171, '004.2.PKWTT.KTS.VII.2024', '2310660062', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(172, 'SOW/2025/04/21/003', '2505990031', 58, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(173, '001.2.PKWTT.ETH.VI.2025', '2502660022', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(174, '0', '2503990021', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(175, '0', '2504660012 ', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(176, '001.2...V.2025', '2505660012', 62, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(177, '0', '2505660022', 69, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(178, '0', '2505990021', 58, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(179, '002.2.PKWTT.PDD.VI.2023', '2306660022', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(180, '001.1.PKWTT.PKR.III.2024', '2403990011', 13, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(181, '013.1.PKWT.RKR.V.2019', '0002', 43, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(182, '013.1.PKWT.RKR.V.2019', '0002', 43, 'bpjskesehatan', 'bpjskesehatan', NULL, 2),
(183, '001.1.PKWTT.PKR.III.2024', '2403990011', 13, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(184, 'SOW/2025/04/21/003', '2505990031', 58, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(185, '002..PKKT.ETHCOS.I.2018', 'ETH001', 49, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(186, '002..PKKT.ETHCOS.I.2018', 'ETH001', 49, 'bpjskesehatan', 'bpjskesehatan', NULL, 2),
(187, 'PROBATION/1/V/2025', '2505660012', 62, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(188, 'PROBATION/1/V/2025', '2505660012', 62, 'other', 'other', NULL, 2),
(189, 'PROBATION/1/V/2025', '2505660012', 62, 'inventaris', 'inventaris', NULL, 2),
(190, 'SOW/2025/05/05/003', '2505990021', 58, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(191, 'SOW/2025/05/05/003', '2505990021', 58, 'inventaris', 'inventaris', NULL, 2),
(192, 'SOW/2025/04/21/003', '2505990031', 58, 'inventaris', 'inventaris', NULL, 2),
(193, 'SOW/2025/05/05/002', '2505990011', 78, 'inventaris', 'inventaris', NULL, 2),
(194, 'SOW/2025/06/12/001', '2505660032', 57, 'inventaris', 'inventaris', NULL, 2),
(195, '009.2.PKWTT.ETH.X.2023', '2310660012', 4, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(196, 'SOW/2025/05/03/001', '2505660022', 69, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(197, 'SOW/2025/05/03/001', '2505660022', 69, 'inventaris', 'inventaris', NULL, 2),
(198, '002.2.PKWTT.PDD.VI.2023', '2306660022', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(199, '002.2.PKWTT.ETH.VI.2025', '2504660012 ', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(200, '001.1.PKWTT.ETH.VI.2025', '2503990021', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(201, '001.2.PKWTT.ETH.VI.2025', '2502660022', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(202, 'SOW/2025/04/11/001', '2508660012', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(203, '001.1.PKWTT.RKR.III.2025', '2503990011', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(204, '004.2.PKWTT.KTS.VII.2024', '2310660062', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(205, '012.1.PKWTT.ETH.IV.2022', '2204990121', 26, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(206, 'SOW/2025/05/05/002', '2505990011', 78, 'account', 'account', NULL, 2),
(207, 'SOW09082025023', '2508660032', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(208, 'SOW/2025/06/12/001', '2505660032', 57, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(209, 'SOW/2025/06/28/001', '2506990021', 77, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(210, 'SOW/2025/06/20/003', '2508660082', 44, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(211, 'SOW09082025034', '2508660052', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(212, 'SOW09082025021', '189912TR3270', 48, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(213, 'SOW09082025074', '2508660022', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(214, 'SOW09082025031', '189912TR3252', 48, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(215, 'SOW/2025/05/30/003', '189912TR3263', 48, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(216, 'SOW09082025161', '189912TR3236', 48, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(217, 'SOW09082025121', '2508660042', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(218, 'SOW/2025/06/20/002', '2508660072', 44, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(219, 'SOW09082025071', '189912TR3239', 48, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(220, 'SOW09082025063', '2508990021', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(221, 'SOW/2025/06/08/2025/001', '2508660062', 44, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2),
(222, 'SOW09082025022', '2508990011', 47, 'bpjsketenagakerjaan', 'bpjsketenagakerjaan', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_beneficial_item`
--

CREATE TABLE `tbl_beneficial_item` (
  `id_beneficial_item` int(11) NOT NULL,
  `id_beneficial` int(11) NOT NULL,
  `name_beneficial` varchar(255) NOT NULL,
  `account_beneficial` varchar(55) DEFAULT NULL,
  `pass_beneficial` int(255) DEFAULT NULL,
  `nominal_beneficial` varchar(255) DEFAULT NULL,
  `desc_beneficial` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_beneficial_item`
--

INSERT INTO `tbl_beneficial_item` (`id_beneficial_item`, `id_beneficial`, `name_beneficial`, `account_beneficial`, `pass_beneficial`, `nominal_beneficial`, `desc_beneficial`) VALUES
(17, 6, 'JKK', NULL, NULL, '100', 'Jaminan Kecelakaan Kerja'),
(18, 6, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(19, 6, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(20, 6, 'JKP', NULL, NULL, '0', 'Jaminan Kehilangan Pekerjaan'),
(21, 7, 'JAMINAN KESEHATAN ', NULL, NULL, '140203,44', NULL),
(22, 8, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(23, 8, 'JHT', NULL, NULL, '140203', 'Jaminan Hari Tua'),
(24, 8, 'JK', NULL, NULL, '140203', 'Jaminan Kematian'),
(25, 9, 'JAMINAN KESEHATAN ', NULL, NULL, '112343', NULL),
(26, 10, 'JAMINAN KESEHATAN ', NULL, NULL, '112343', NULL),
(27, 11, 'LAPTOP', NULL, NULL, '1', 'LAPTOP'),
(28, 11, 'KARTU HALO', NULL, NULL, '1', '0811263052'),
(29, 12, 'JAMINAN KESEHATAN', NULL, NULL, '112343', 'JAMINAN KESEHATAN'),
(30, 13, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(31, 13, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(32, 13, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(33, 14, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(34, 14, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(35, 15, 'JAMINAN KESEHATAN', NULL, NULL, '140203', 'JAMINAN KESEHATAN'),
(36, 16, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(37, 16, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(38, 16, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(39, 17, 'LAPTOP', NULL, NULL, '1', 'LAPTOP'),
(40, 18, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(41, 18, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(42, 19, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(43, 19, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(44, 19, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(45, 20, 'LAPTOP', NULL, NULL, '1', 'LAPTOP ASUS'),
(46, 21, 'LAPTOP', NULL, NULL, '1', 'Macbook Pro 2022 M2 '),
(47, 22, 'Laptop Bag Merk Rivacase', NULL, NULL, '1', 'Laptop Bag Merk Rivacase'),
(48, 23, 'HANDPHONE', NULL, NULL, '1', 'Iphone 11'),
(49, 24, 'SEPATU', NULL, NULL, '1', 'SEPATU AEROSTREET'),
(50, 25, 'KARTU', NULL, NULL, '0', 'Kartu Halo'),
(51, 26, 'FEELTEK USB ADAPTOR', NULL, NULL, '0', 'Feeltek USB Adaptor'),
(52, 27, 'KAOS', NULL, NULL, '1', 'Kaos Ethes Ungu 1'),
(53, 28, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(54, 28, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(55, 28, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(56, 29, 'NOMOR KANTOR', NULL, NULL, '0', NULL),
(57, 29, 'LAPTOP KANTOR', NULL, NULL, '1', 'LAPTOP ASUS'),
(58, 30, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(59, 30, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(60, 31, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(61, 31, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(62, 31, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(63, 32, 'MOBIL PERUSAHAAN', NULL, NULL, '1', 'MITSUBISHI TSS MERAH'),
(64, 33, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(65, 33, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(66, 34, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(67, 34, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(68, 35, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(69, 35, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(70, 35, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(71, 36, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(72, 36, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(73, 37, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(74, 37, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(75, 38, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(76, 38, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(77, 39, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(78, 39, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(79, 39, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(80, 40, 'HANDPHONE', NULL, NULL, '1', 'HANDPHONE REALME'),
(81, 41, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(82, 41, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(83, 42, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(84, 42, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(85, 43, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(86, 43, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(87, 43, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(88, 44, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(89, 44, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(90, 45, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(91, 45, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(92, 46, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(93, 46, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(94, 47, 'MOBIL', NULL, NULL, '1', 'TRUCK CANTER 125PS'),
(95, 48, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(96, 48, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(97, 49, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(98, 49, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(99, 50, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(100, 50, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(101, 50, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(102, 51, 'JAMINAN KESEHATAN', NULL, NULL, '112343', 'JAMINAN KESEHATAN'),
(103, 52, 'komputer', NULL, NULL, '1', 'komputer'),
(104, 53, 'NOMOR KANTOR', NULL, NULL, '1', 'kartu halo'),
(105, 53, 'SRAGAM', NULL, NULL, '4', 'SRAGAM KERJA'),
(106, 53, 'ID CARD', NULL, NULL, '1', 'ID CARD KARYAWAN'),
(107, 54, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(108, 54, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(109, 54, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(110, 55, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(111, 55, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(112, 56, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(113, 56, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(114, 56, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(115, 57, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(116, 57, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(117, 58, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(118, 58, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(119, 59, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(120, 59, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(121, 60, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(122, 60, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(123, 61, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(124, 61, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(125, 62, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(126, 62, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(127, 63, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(128, 63, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(129, 64, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(130, 64, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(131, 65, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(132, 65, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(133, 66, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(134, 66, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(135, 67, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(136, 67, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(137, 67, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(138, 68, 'JAMINAN KESEHATAN', NULL, NULL, '112343', 'JAMINAN KESEHATAN'),
(139, 69, 'JAMINAN KESEHATAN', NULL, NULL, '112343', 'JAMINAN KESEHATAN'),
(140, 70, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(141, 70, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(142, 70, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(143, 71, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(144, 71, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(145, 72, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(146, 72, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(147, 73, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(148, 73, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(149, 74, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(150, 74, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(151, 74, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(152, 75, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(153, 75, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(154, 75, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(155, 76, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(156, 76, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(157, 76, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(158, 77, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(159, 77, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(160, 78, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(161, 78, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(162, 78, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(163, 79, 'JAMINAN KESEHATAN', NULL, NULL, '112343', 'JAMINAN KESEHATAN'),
(164, 80, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(165, 80, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(166, 81, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(167, 81, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(168, 82, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(169, 82, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(170, 83, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(171, 83, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(172, 84, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(173, 84, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(174, 85, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(175, 85, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(176, 85, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(177, 86, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(178, 86, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(179, 87, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(180, 87, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(181, 88, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(182, 88, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(183, 88, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(184, 89, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(185, 89, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(186, 89, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(187, 90, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(188, 90, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(189, 90, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(190, 91, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(191, 91, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(192, 92, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(193, 92, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(194, 92, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(195, 93, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(196, 93, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(197, 93, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(198, 94, 'JAMINAN KESEHATAN', NULL, NULL, '112343', 'JAMINAN KESEHATAN'),
(199, 95, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(200, 95, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(201, 96, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(202, 96, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(203, 97, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(204, 97, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(205, 98, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(206, 98, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(207, 99, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(208, 99, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(209, 100, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(210, 100, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(211, 101, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(212, 101, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(213, 101, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(214, 102, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(215, 102, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(216, 103, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(217, 103, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(218, 104, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(219, 104, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(220, 105, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(221, 105, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(222, 106, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(223, 106, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(224, 106, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(225, 107, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(226, 107, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(227, 108, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(228, 108, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(229, 109, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(230, 109, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(231, 110, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(232, 110, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(233, 111, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(234, 111, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(235, 112, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(236, 112, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(237, 113, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(238, 113, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(239, 113, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(240, 114, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(241, 114, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(242, 115, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(243, 115, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(244, 115, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(245, 116, 'JAMINAN KESEHATAN', NULL, NULL, '112343', 'JAMINAN KESEHATAN'),
(246, 117, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(247, 117, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(248, 117, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(249, 118, 'JAMINAN KESEHATAN', NULL, NULL, '112343', 'JAMINAN KESEHATAN'),
(250, 119, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(251, 119, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(252, 119, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(253, 120, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(254, 120, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(255, 120, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(256, 121, 'JAMINAN KESEHATAN', NULL, NULL, '112343', 'JAMINAN KESEHATAN'),
(257, 122, 'JAMINAN KESEHATAN', NULL, NULL, '112343', 'JAMINAN KESEHATAN'),
(258, 123, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(259, 123, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(260, 123, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(261, 124, 'JAMINAN KESEHATAN', NULL, NULL, '112343', 'JAMINAN KESEHATAN'),
(262, 125, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(263, 125, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(264, 125, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(265, 126, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(266, 126, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(267, 126, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(268, 127, 'JAMINAN KESEHATAN', NULL, NULL, '112343', 'JAMINAN KESEHATAN'),
(269, 128, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(270, 128, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(271, 128, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(272, 129, 'JAMINAN KESEHATAN', NULL, NULL, '112343', 'JAMINAN KESEHATAN'),
(273, 130, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(274, 130, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(275, 130, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(276, 131, 'NOMOR KANTOR', NULL, NULL, '1', '081129099992'),
(277, 131, 'LAPTOP KANTOR', NULL, NULL, '1', 'laptop'),
(278, 132, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(279, 132, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(280, 132, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(281, 133, 'JAMINAN KESEHATAN', NULL, NULL, '112343', 'JAMINAN KESEHATAN'),
(282, 134, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(283, 134, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(284, 135, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(285, 135, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(286, 136, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(287, 136, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(288, 137, 'JAMINAN KESEHATAN', NULL, NULL, '112343', 'JAMINAN KESEHATAN'),
(289, 138, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(290, 138, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(291, 138, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(292, 139, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(293, 139, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(294, 139, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(295, 140, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(296, 140, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(297, 140, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(298, 141, 'JAMINAN KESEHATAN', NULL, NULL, '112343', 'JAMINAN KESEHATAN'),
(299, 142, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(300, 142, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(301, 142, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(302, 143, 'JAMINAN KESEHATAN', NULL, NULL, '112343', 'JAMINAN KESEHATAN'),
(303, 144, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(304, 144, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(305, 144, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(306, 145, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(307, 145, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(308, 146, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(309, 146, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(310, 146, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(311, 147, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(312, 147, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(313, 147, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(314, 148, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(315, 148, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(316, 148, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(317, 149, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(318, 149, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(319, 149, 'JK', NULL, NULL, '0', 'Jaminan Kematian'),
(320, 150, 'NOMOR KANTOR', NULL, NULL, '1', '081129088882'),
(321, 150, 'LAPTOP KANTOR', NULL, NULL, '0', NULL),
(322, 151, 'NOMOR KANTOR', NULL, NULL, '1', '081129088885'),
(323, 151, 'LAPTOP KANTOR', NULL, NULL, '0', NULL),
(324, 152, 'NOMOR KANTOR', NULL, NULL, '1', '08112939785'),
(325, 152, 'LAPTOP KANTOR', NULL, NULL, '0', NULL),
(326, 153, 'NOMOR KANTOR', NULL, NULL, '1', '08112939784'),
(327, 153, 'LAPTOP KANTOR', NULL, NULL, '0', NULL),
(328, 154, 'NOMOR KANTOR', NULL, NULL, '1', '08112939779'),
(329, 154, 'LAPTOP KANTOR', NULL, NULL, '0', NULL),
(330, 155, 'NOMOR KANTOR', NULL, NULL, '1', '62 811-2939-763'),
(331, 155, 'LAPTOP KANTOR', NULL, NULL, '1', 'LAPTOP'),
(332, 155, 'HANDPHONE', NULL, NULL, '1', 'HANDPHONE'),
(333, 156, 'NOMOR KANTOR', NULL, NULL, '1', '08112939782'),
(334, 157, 'EMAIL KANTOR', 'pic.ld04.lido@gmail.com', NULL, NULL, 'EMAIL KANTOR'),
(335, 157, 'EMAIL KANTOR', 'pic.ld14.lido@gmail.com', NULL, NULL, 'EMAIL KANTOR'),
(336, 158, 'NOMOR KANTOR', NULL, NULL, '1', '081129099992'),
(337, 158, 'LAPTOP KANTOR', NULL, NULL, '1', 'LAPTOP'),
(338, 159, 'NOMOR KANTOR', NULL, NULL, '1', '08112939765'),
(339, 159, 'LAPTOP KANTOR', NULL, NULL, '1', 'LAPTOP ASUS'),
(340, 160, 'EMAIL KANTOR', 'auditor2.lido@gmail.com', NULL, NULL, 'email kantor'),
(341, 161, 'NOMOR KANTOR', NULL, NULL, '1', '08112939781'),
(342, 162, 'EMAIL KANTOR', 'ld13.lido@gmail.com', NULL, NULL, 'email kantor'),
(343, 163, 'NOMOR KANTOR', NULL, NULL, '1', '081129088882'),
(344, 164, 'EMAIL KANTOR', ' pic.ld02.lido@gmail.com', NULL, NULL, 'email kantor'),
(345, 165, 'JKM', NULL, NULL, '11400', 'Jaminan Kematian'),
(346, 165, 'JKK', NULL, NULL, '11400', 'Jaminan Kecelakaan Kerja'),
(347, 165, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(348, 165, 'JKP', NULL, NULL, '0', 'Jaminan Kehilangan Pekerjaan'),
(349, 165, 'JP', NULL, NULL, '0', 'Jaminan Pensiun'),
(350, 166, 'JKM', NULL, NULL, '12.133', 'Jaminan Kematian'),
(351, 166, 'JKK', NULL, NULL, '0', 'Jaminan Kecelakaan Kerja'),
(352, 166, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(353, 166, 'JKP', NULL, NULL, '0', 'Jaminan Kehilangan Pekerjaan'),
(354, 166, 'JP', NULL, NULL, '0', 'Jaminan Pensiun'),
(355, 167, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(356, 168, 'JKK', NULL, NULL, '140203', 'Jaminan Kecelakaan Kerja'),
(357, 169, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(358, 169, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(359, 170, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(360, 170, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(361, 171, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(362, 171, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(363, 172, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(364, 172, 'JKK', NULL, NULL, '12.133', 'Jaminan Kecelakaan Kerja'),
(365, 173, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(366, 173, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(367, 174, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(368, 174, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(369, 175, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(370, 175, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(371, 176, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(372, 176, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(373, 177, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(374, 177, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(375, 178, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(376, 178, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(377, 179, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(378, 179, 'JKK', NULL, NULL, '12.133', 'Jaminan Kecelakaan Kerja'),
(379, 180, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(380, 180, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(381, 181, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(382, 181, 'JKK', NULL, NULL, '207608', 'Jaminan Kecelakaan Kerja'),
(383, 181, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua'),
(384, 181, 'JP', NULL, NULL, '0', 'Jaminan Pensiun'),
(385, 182, 'JAMINAN KESEHATAN', NULL, NULL, '112343', 'JAMINAN KESEHATAN'),
(386, 183, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(387, 183, 'JKK', NULL, NULL, '12132', 'Jaminan Kecelakaan Kerja'),
(388, 184, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(389, 184, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(390, 185, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(391, 185, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(392, 186, 'JAMINAN KESEHATAN', NULL, NULL, '112343', 'JAMINAN KESEHATAN'),
(393, 187, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(394, 187, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(395, 188, 'EMAIL KANTOR', 'chrlido29', 0, '0', NULL),
(396, 189, 'NOMOR KANTOR', NULL, NULL, '1', '08112699887'),
(397, 189, 'LAPTOP KANTOR', NULL, NULL, '1', 'LAPTOP ASUS'),
(398, 189, 'HANDPHONE', NULL, NULL, '1', 'REDMI'),
(399, 190, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(400, 190, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(401, 191, 'NOMOR KANTOR', NULL, NULL, '1', '087834190528'),
(402, 192, 'NOMOR KANTOR', NULL, NULL, '1', '087834190526'),
(403, 193, 'NOMOR KANTOR', NULL, NULL, '1', '08112939783'),
(404, 193, 'HP KANTOR', NULL, NULL, '1', 'REDMI'),
(405, 194, 'NOMOR KANTOR', NULL, NULL, '1', '087741772334'),
(406, 194, 'LAPTOP KANTOR', NULL, NULL, '1', 'LAPTOP ASUS'),
(407, 195, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(408, 195, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(409, 196, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(410, 196, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(411, 197, 'NOMOR KANTOR', NULL, NULL, '1', '08112939764'),
(412, 197, 'LAPTOP KANTOR', NULL, NULL, '1', 'LAPTOP DELL'),
(413, 197, 'HP KANTOR', NULL, NULL, '1', 'REDMI'),
(414, 198, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(415, 198, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(416, 199, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(417, 199, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(418, 200, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(419, 200, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(420, 201, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(421, 201, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(422, 202, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(423, 202, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(424, 203, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(425, 203, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(426, 204, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(427, 204, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(428, 205, 'JKM', NULL, NULL, '0', 'Jaminan Kematian'),
(429, 205, 'JKK', NULL, NULL, '12133', 'Jaminan Kecelakaan Kerja'),
(430, 206, 'EMAIL KANTOR', 'wom.lido29@gmail.com', NULL, NULL, 'EMAIL KANTOR'),
(431, 207, 'JKM', NULL, NULL, '12133', 'Jaminan Kematian'),
(432, 207, 'JKK', NULL, NULL, '0', 'Jaminan Kecelakaan Kerja'),
(433, 208, 'JKM', NULL, NULL, '12133', 'Jaminan Kematian'),
(434, 208, 'JKK', NULL, NULL, '0', 'Jaminan Kecelakaan Kerja'),
(435, 209, 'JKM', NULL, NULL, '12133', 'Jaminan Kematian'),
(436, 209, 'JKK', NULL, NULL, '0', 'Jaminan Kecelakaan Kerja'),
(437, 210, 'JKM', NULL, NULL, '12133', 'Jaminan Kematian'),
(438, 210, 'JKK', NULL, NULL, '0', 'Jaminan Kecelakaan Kerja'),
(439, 211, 'JKM', NULL, NULL, '12133', 'Jaminan Kematian'),
(440, 211, 'JKK', NULL, NULL, '0', 'Jaminan Kecelakaan Kerja'),
(441, 212, 'JKM', NULL, NULL, '12133', 'Jaminan Kematian'),
(442, 212, 'JKK', NULL, NULL, '0', 'Jaminan Kecelakaan Kerja'),
(443, 213, 'JKM', NULL, NULL, '12133', 'Jaminan Kematian'),
(444, 213, 'JKK', NULL, NULL, '0', 'Jaminan Kecelakaan Kerja'),
(445, 214, 'JKM', NULL, NULL, '12133', 'Jaminan Kematian'),
(446, 214, 'JKK', NULL, NULL, '0', 'Jaminan Kecelakaan Kerja'),
(447, 215, 'JKM', NULL, NULL, '12133', 'Jaminan Kematian'),
(448, 215, 'JKK', NULL, NULL, '0', 'Jaminan Kecelakaan Kerja'),
(449, 216, 'JKM', NULL, NULL, '12133', 'Jaminan Kematian'),
(450, 216, 'JKK', NULL, NULL, '0', 'Jaminan Kecelakaan Kerja'),
(451, 217, 'JKM', NULL, NULL, '12133', 'Jaminan Kematian'),
(452, 217, 'JKK', NULL, NULL, '0', 'Jaminan Kecelakaan Kerja'),
(453, 218, 'JKM', NULL, NULL, '12133', 'Jaminan Kematian'),
(454, 218, 'JKK', NULL, NULL, '0', 'Jaminan Kecelakaan Kerja'),
(455, 219, 'JKM', NULL, NULL, '12133', 'Jaminan Kematian'),
(456, 219, 'JKK', NULL, NULL, '0', 'Jaminan Kecelakaan Kerja'),
(457, 220, 'JKM', NULL, NULL, '12133', 'Jaminan Kematian'),
(458, 220, 'JKK', NULL, NULL, '0', 'Jaminan Kecelakaan Kerja'),
(459, 221, 'JKM', NULL, NULL, '12133', 'Jaminan Kematian'),
(460, 221, 'JKK', NULL, NULL, '0', 'Jaminan Kecelakaan Kerja'),
(461, 222, 'JKM', NULL, NULL, '12133', 'Jaminan Kematian'),
(462, 222, 'JKK', NULL, NULL, '0', 'Jaminan Kecelakaan Kerja'),
(463, 18, 'JHT', NULL, NULL, '0', 'Jaminan Hari Tua');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content`
--

CREATE TABLE `tbl_content` (
  `id_content` int(11) NOT NULL,
  `nama_content` varchar(255) NOT NULL,
  `logo_content` varchar(255) NOT NULL,
  `base_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_content`
--

INSERT INTO `tbl_content` (`id_content`, `nama_content`, `logo_content`, `base_color`) VALUES
(1, 'SiAKAR', 'logo_web1.png', '#2f318b');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_departement`
--

CREATE TABLE `tbl_departement` (
  `id_departement` int(11) NOT NULL,
  `nama_departement` varchar(100) NOT NULL,
  `unit_departement` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_departement` varchar(100) NOT NULL,
  `base_color` varchar(255) NOT NULL,
  `logo` varchar(500) NOT NULL,
  `logo_title` varchar(500) DEFAULT NULL,
  `id_background` int(11) NOT NULL,
  `id_division` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_departement`
--

INSERT INTO `tbl_departement` (`id_departement`, `nama_departement`, `unit_departement`, `alamat`, `no_departement`, `base_color`, `logo`, `logo_title`, `id_background`, `id_division`) VALUES
(1, 'SEKERTARIS', '', 'Jalan sudirman no 69', 'EEE', '#ff0fd3', 'logo_lido1.png', 'tulisan_lido.png', 1, 1),
(2, 'OPERATIONS FINANCE', '', 'Krajan 1, Kandangan, Kandangan Temanggung, Jawa Tengah', 'BBB', '#3d34eb', 'logo_lido1.png', 'tulisan_lido.png', 1, 1),
(3, 'AEL', '', 'Jalan ahmad yadi, Town Square', 'CCC', '#fb6340', 'logo_lido1.png', 'tulisan_lido.png', 1, 1),
(4, 'FINANCE', '', 'Alamat dagienks rt 01 rw 09', 'DDD', '#151313', 'logo_lido1.png', 'tulisan_lido.png', 1, 1),
(5, 'SUPPLY CHAIN', '', 'Kandangan 01, Kandangan, Temanggung', 'SC', '#f5365c', 'logo_lido1.png', 'tulisan_lido.png', 1, 2),
(6, 'WAREHOUSE', '', 'Alamat bima suci jalan 09 sudirman', 'WRH', '#1c74bc', 'logo_lido1.png', 'tulisan_lido.png', 1, 2),
(19, 'AFFAIRS', '', 'Kandangan Temanggung', 'AFA', '#d32727', 'logo_lido1.png', 'tulisan_lido.png', 1, 2),
(20, 'PURCHASE', '', 'KANDANGAN , TEMANGGUNG', 'PUR', '#000000', 'logo_lido1.png', 'tulisan_lido.png', 1, 2),
(21, 'LOGISTIC', NULL, 'Kandangan 01, Kandangan, Temanggung', 'LOG', '#f5365c', 'logo_lido1.png', 'tulisan_lido.png', 1, 3),
(22, 'MARKETING', NULL, 'Kandangan 01, Kandangan, Temanggung', 'MAR', '#f5365c', 'logo_lido1.png', 'tulisan_lido.png', 1, 3),
(23, 'STORE DIVISION', NULL, 'Kandangan 01, Kandangan, Temanggung', 'SD', '#f5365c', 'logo_lido1.png', 'tulisan_lido.png', 1, 3),
(24, 'DISTRIBUTOR & WAREHOUSE', NULL, 'Kandangan 01, Kandangan, Temanggung', 'DW', '#f5365c', 'logo_lido1.png', 'tulisan_lido.png', 1, 3),
(25, 'OPERASIONAL', NULL, 'Kandangan 01, Kandangan, Temanggung', 'OPS', '#f5365c', 'logo_lido1.png', 'tulisan_lido.png', 1, 3),
(26, 'SALES', NULL, 'Kandangan 01, Kandangan, Temanggung', 'SAL', '#f5365c', 'logo_lido1.png', 'tulisan_lido.png', 1, 3),
(27, 'AUDITOR', NULL, 'Kandangan 01, Kandangan, Temanggung', 'AUD', '#f5365c', 'logo_lido1.png', 'tulisan_lido.png', 1, 5),
(28, 'REFORMING', NULL, 'Kandangan 01, Kandangan, Temanggung', 'REF', '#f5365c', 'logo_lido1.png', 'tulisan_lido.png', 1, 4),
(29, 'BIS&TECH', NULL, 'Kandangan 01, Kandangan, Temanggung', 'BST', '#f5365c', 'logo_lido1.png', 'tulisan_lido.png', 1, 4),
(30, 'PR', NULL, 'Kandangan 01, Kandangan, Temanggung', 'PR', '#f5365c', 'logo_lido1.png', 'tulisan_lido.png', 1, 4),
(31, 'HR', NULL, 'Kandangan 01, Kandangan, Temanggung', 'HR', '#f5365c', 'logo_lido1.png', 'tulisan_lido.png', 1, 4),
(32, 'TAX & LEGAL', '', 'Kandangan 01, Kandangan, Temanggung', 'TL', '#f5365c', 'logo_lido1.png', 'tulisan_lido.png', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_divisi`
--

CREATE TABLE `tbl_divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_divisi`
--

INSERT INTO `tbl_divisi` (`id_divisi`, `nama_divisi`, `created_date`) VALUES
(1, 'FINANCE', '2023-11-23 07:19:47'),
(2, 'PURCHASE', '2023-11-23 07:19:47'),
(3, 'OPERASIONAL', '2023-11-23 00:00:00'),
(4, 'BISDEV', '2023-11-23 00:00:00'),
(5, 'AUDITOR', '2023-11-28 05:49:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file_karyawan`
--

CREATE TABLE `tbl_file_karyawan` (
  `id_file_karyawan` int(11) NOT NULL,
  `name_file` varchar(100) NOT NULL,
  `type_file` varchar(255) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `link_file` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_file_karyawan`
--

INSERT INTO `tbl_file_karyawan` (`id_file_karyawan`, `name_file`, `type_file`, `periode`, `desc`, `link_file`, `created_date`, `created_by`) VALUES
(26, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-20 Sampai 2025-07-21', 'Laporan_Apraisal_20250728_084026.xlsx', '2025-07-28 15:40:26', 'rndethes'),
(27, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250728_091736.xlsx', '2025-07-28 16:17:36', 'rndethes'),
(28, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-21', 'Laporan_Apraisal_20250728_114344.xlsx', '2025-07-28 18:43:44', 'rndethes'),
(29, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250728_114942.xlsx', '2025-07-28 18:49:42', 'eriadmaudit'),
(30, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250728_115929.xlsx', '2025-07-28 18:59:29', 'rndethes'),
(31, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250728_124020.xlsx', '2025-07-28 19:40:20', 'eriadmaudit'),
(32, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250728_125257.xlsx', '2025-07-28 19:52:57', 'eriadmaudit'),
(33, 'Laporan Apraisal', 'Apraisal', '05-2025', 'Data Apraisal dari tanggal 2025-05-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250729_022415.xlsx', '2025-07-29 09:24:15', 'rndethes'),
(34, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250729_022728.xlsx', '2025-07-29 09:27:28', 'rndethes'),
(35, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250729_023514.xlsx', '2025-07-29 09:35:14', 'chrlido29'),
(36, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250729_030859.xlsx', '2025-07-29 10:08:59', 'chrlido29'),
(37, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250729_031649.xlsx', '2025-07-29 10:16:49', 'chrlido29'),
(38, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250729_033223.xlsx', '2025-07-29 10:32:23', 'chrlido29'),
(39, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250729_034725.xlsx', '2025-07-29 10:47:25', 'chrlido29'),
(40, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250729_043106.xlsx', '2025-07-29 11:31:06', 'chrlido29'),
(41, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250729_043756.xlsx', '2025-07-29 11:37:56', 'chrlido29'),
(42, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250729_044113.xlsx', '2025-07-29 11:41:13', 'chrlido29'),
(43, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250729_044114.xlsx', '2025-07-29 11:41:14', 'chrlido29'),
(44, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250729_044615.xlsx', '2025-07-29 11:46:15', 'rndethes'),
(45, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250729_080818.xlsx', '2025-07-29 15:08:18', 'chrlido29'),
(46, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250729_085111.xlsx', '2025-07-29 15:51:11', 'chrlido29'),
(47, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250729_090045.xlsx', '2025-07-29 16:00:46', 'chrlido29'),
(48, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250729_090604.xlsx', '2025-07-29 16:06:04', 'chrlido29'),
(49, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250729_090847.xlsx', '2025-07-29 16:08:47', 'chrlido29'),
(50, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250729_092714.xlsx', '2025-07-29 16:27:14', 'chrlido29'),
(51, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250729_100959.xlsx', '2025-07-29 17:09:59', 'chrlido29'),
(52, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250729_102252.xlsx', '2025-07-29 17:22:52', 'chrlido29'),
(53, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250729_102530.xlsx', '2025-07-29 17:25:31', 'eriadmaudit'),
(54, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250729_103314.xlsx', '2025-07-29 17:33:14', 'eriadmaudit'),
(55, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250729_103617.xlsx', '2025-07-29 17:36:17', 'eriadmaudit'),
(56, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250730_011309.xlsx', '2025-07-30 08:13:10', 'chrlido29'),
(57, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250730_012353.xlsx', '2025-07-30 08:23:53', 'rndethes'),
(58, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250730_020507.xlsx', '2025-07-30 09:05:07', 'chrlido29'),
(59, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250730_030035.xlsx', '2025-07-30 10:00:35', 'rndethes'),
(60, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250730_041313.xlsx', '2025-07-30 11:13:13', 'eriadmaudit'),
(61, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250730_041327.xlsx', '2025-07-30 11:13:27', 'rndethes'),
(62, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250730_041531.xlsx', '2025-07-30 11:15:31', 'rndethes'),
(63, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250730_041831.xlsx', '2025-07-30 11:18:31', 'eriadmaudit'),
(64, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250730_044013.xlsx', '2025-07-30 11:40:13', 'rndethes'),
(65, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250730_044523.xlsx', '2025-07-30 11:45:23', 'rndethes'),
(66, 'Laporan Apraisal', 'Apraisal', '06-2025', 'Data Apraisal dari tanggal 2025-06-21 Sampai 2025-07-20', 'Laporan_Apraisal_20250730_044638.xlsx', '2025-07-30 11:46:38', 'eriadmaudit'),
(67, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-09-21', 'Laporan_Apraisal_20250821_074058.xlsx', '2025-08-21 14:40:58', 'chrlido29'),
(68, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250821_074135.xlsx', '2025-08-21 14:41:35', 'chrlido29'),
(69, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250821_081804.xlsx', '2025-08-21 15:18:04', 'rndethes'),
(70, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250821_082024.xlsx', '2025-08-21 15:20:24', 'rndethes'),
(71, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250821_082259.xlsx', '2025-08-21 15:22:59', 'chrlido29'),
(72, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250821_082300.xlsx', '2025-08-21 15:23:01', 'chrlido29'),
(73, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250822_025240.xlsx', '2025-08-22 09:52:40', 'chrlido29'),
(74, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250822_084613.xlsx', '2025-08-22 15:46:13', 'chrlido29'),
(75, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250822_084616.xlsx', '2025-08-22 15:46:16', 'chrlido29'),
(76, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250822_090605.xlsx', '2025-08-22 16:06:05', 'chrlido29'),
(77, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250822_095559.xlsx', '2025-08-22 16:56:00', 'chrlido29'),
(78, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250822_101105.xlsx', '2025-08-22 17:11:05', 'chrlido29'),
(79, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250822_101106.xlsx', '2025-08-22 17:11:06', 'chrlido29'),
(80, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250823_032706.xlsx', '2025-08-23 10:27:06', 'chrlido29'),
(81, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250823_032708.xlsx', '2025-08-23 10:27:08', 'chrlido29'),
(82, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250823_071419.xlsx', '2025-08-23 14:14:19', 'chrlido29'),
(83, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250826_015311.xlsx', '2025-08-26 08:53:12', 'bpridika18'),
(84, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250826_025835.xlsx', '2025-08-26 09:58:35', 'chrlido29'),
(85, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250826_025837.xlsx', '2025-08-26 09:58:37', 'chrlido29'),
(86, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250826_030157.xlsx', '2025-08-26 10:01:57', 'eriadmaudit'),
(87, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250826_071146.xlsx', '2025-08-26 14:11:46', 'rndethes'),
(88, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250826_073935.xlsx', '2025-08-26 14:39:35', 'chrlido29'),
(89, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250826_073938.xlsx', '2025-08-26 14:39:38', 'chrlido29'),
(90, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250826_074030.xlsx', '2025-08-26 14:40:30', 'chrlido29'),
(91, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250826_074041.xlsx', '2025-08-26 14:40:41', 'chrlido29'),
(92, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250826_074052.xlsx', '2025-08-26 14:40:52', 'chrlido29'),
(93, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250826_074101.xlsx', '2025-08-26 14:41:02', 'chrlido29'),
(94, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250826_080927.xlsx', '2025-08-26 15:09:27', 'rndethes'),
(95, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250827_040254.xlsx', '2025-08-27 11:02:54', 'rndethes'),
(96, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250827_045038.xlsx', '2025-08-27 11:50:38', 'chrlido29'),
(97, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250827_062125.xlsx', '2025-08-27 13:21:25', 'eriadmaudit'),
(98, 'Laporan Apraisal', 'Apraisal', '08-2025', 'Data Apraisal dari tanggal 2025-08-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250827_070049.xlsx', '2025-08-27 14:00:50', 'chrlido29'),
(99, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250827_071658.xlsx', '2025-08-27 14:16:58', 'chrlido29'),
(100, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250827_085034.xlsx', '2025-08-27 15:50:34', 'chrlido29'),
(101, 'Laporan Apraisal', 'Apraisal', '08-2025', 'Data Apraisal dari tanggal 2025-08-20 Sampai 2025-08-21', 'Laporan_Apraisal_20250829_042746.xlsx', '2025-08-29 11:27:46', 'chrlido29'),
(102, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250829_062440.xlsx', '2025-08-29 13:24:41', 'eriadmaudit'),
(103, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-20 Sampai 2025-08-21', 'Laporan_Apraisal_20250829_073108.xlsx', '2025-08-29 14:31:08', 'rndethes'),
(104, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250829_091808.xlsx', '2025-08-29 16:18:08', 'chrlido29'),
(105, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250830_045550.xlsx', '2025-08-30 11:55:50', 'chrlido29'),
(106, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250901_095234.xlsx', '2025-09-01 16:52:34', 'bpridika18'),
(107, 'Laporan Apraisal', 'Apraisal', '07-2025', 'Data Apraisal dari tanggal 2025-07-21 Sampai 2025-08-20', 'Laporan_Apraisal_20250904_040604.xlsx', '2025-09-04 11:06:04', 'chrlido29'),
(108, 'Laporan Apraisal', 'Apraisal', '08-2025', 'Data Apraisal dari tanggal 2025-08-21 Sampai 2025-09-17', 'Laporan_Apraisal_20250917_135029.xlsx', '2025-09-17 13:50:29', 'chrlido29'),
(109, 'Laporan Apraisal', 'Apraisal', '08-2025', 'Data Apraisal dari tanggal 2025-08-21 Sampai 2025-09-19', 'Laporan_Apraisal_20250919_154159.xlsx', '2025-09-19 15:41:59', 'chrlido29'),
(110, 'Laporan Apraisal', 'Apraisal', '08-2025', 'Data Apraisal dari tanggal 2025-08-21 Sampai 2025-09-19', 'Laporan_Apraisal_20250919_154624.xlsx', '2025-09-19 15:46:24', 'chrlido29'),
(111, 'Laporan Apraisal', 'Apraisal', '08-2025', 'Data Apraisal dari tanggal 2025-08-21 Sampai 2025-09-18', 'Laporan_Apraisal_20250920_110550.xlsx', '2025-09-20 11:05:50', 'chrlido29'),
(112, 'Laporan Apraisal', 'Apraisal', '08-2025', 'Data Apraisal dari tanggal 2025-08-21 Sampai 2025-09-18', 'Laporan_Apraisal_20250920_115109.xlsx', '2025-09-20 11:51:09', 'chrlido29'),
(113, 'Laporan Apraisal', 'Apraisal', '08-2025', 'Data Apraisal dari tanggal 2025-08-21 Sampai 2025-09-18', 'Laporan_Apraisal_20250920_115246.xlsx', '2025-09-20 11:52:46', 'chrlido29'),
(114, 'Laporan Apraisal', 'Apraisal', '08-2025', 'Data Apraisal dari tanggal 2025-08-21 Sampai 2025-09-20', 'Laporan_Apraisal_20250922_141239.xlsx', '2025-09-22 14:12:39', 'chrlido29'),
(115, 'Laporan Apraisal', 'Apraisal', '08-2025', 'Data Apraisal dari tanggal 2025-08-21 Sampai 2025-09-20', 'Laporan_Apraisal_20250922_141241.xlsx', '2025-09-22 14:12:41', 'chrlido29'),
(116, 'Laporan Apraisal', 'Apraisal', '08-2025', 'Data Apraisal dari tanggal 2025-08-21 Sampai 2025-09-20', 'Laporan_Apraisal_20250922_153636.xlsx', '2025-09-22 15:36:36', 'chrlido29'),
(117, 'Laporan Apraisal', 'Apraisal', '08-2025', 'Data Apraisal dari tanggal 2025-08-21 Sampai 2025-09-20', 'Laporan_Apraisal_20250922_154812.xlsx', '2025-09-22 15:48:12', 'chrlido29'),
(118, 'Laporan Apraisal', 'Apraisal', '08-2025', 'Data Apraisal dari tanggal 2025-08-21 Sampai 2025-09-20', 'Laporan_Apraisal_20250923_142217.xlsx', '2025-09-23 14:22:17', 'chrlido29'),
(119, 'Laporan Apraisal', 'Apraisal', '08-2025', 'Data Apraisal dari tanggal 2025-08-21 Sampai 2025-09-20', 'Laporan_Apraisal_20250923_143759.xlsx', '2025-09-23 14:37:59', 'chrlido29'),
(120, 'Laporan Apraisal', 'Apraisal', '08-2025', 'Data Apraisal dari tanggal 2025-08-21 Sampai 2025-09-20', 'Laporan_Apraisal_20250929_080102.xlsx', '2025-09-29 08:01:02', 'rndethes'),
(121, 'Laporan Apraisal', 'Apraisal', '08-2025', 'Data Apraisal dari tanggal 2025-08-21 Sampai 2025-09-20', 'Laporan_Apraisal_20250930_083618.xlsx', '2025-09-30 08:36:18', 'bpridika18'),
(122, 'Laporan Apraisal', 'Apraisal', '08-2025', 'Data Apraisal dari tanggal 2025-08-21 Sampai 2025-09-20', 'Laporan_Apraisal_20250930_084200.xlsx', '2025-09-30 08:42:00', 'rndethes'),
(123, 'Laporan Apraisal', 'Apraisal', '08-2025', 'Data Apraisal dari tanggal 2025-08-21 Sampai 2025-09-20', 'Laporan_Apraisal_20250930_084742.xlsx', '2025-09-30 08:47:42', 'rndethes'),
(124, 'Laporan Apraisal', 'Apraisal', '08-2025', 'Data Apraisal dari tanggal 2025-08-21 Sampai 2025-09-20', 'Laporan_Apraisal_20250930_090038.xlsx', '2025-09-30 09:00:38', 'rndethes'),
(125, 'Laporan Apraisal', 'Apraisal', '08-2025', 'Data Apraisal dari tanggal 2025-08-21 Sampai 2025-09-20', 'Laporan_Apraisal_20250930_104641.xlsx', '2025-09-30 10:46:41', 'chrlido29'),
(126, 'Laporan Apraisal', 'Apraisal', '08-2025', 'Data Apraisal dari tanggal 2025-08-21 Sampai 2025-09-20', 'Laporan_Apraisal_20250930_114112.xlsx', '2025-09-30 11:41:12', 'chrlido29'),
(127, 'Laporan Apraisal', 'Apraisal', '08-2025', 'Data Apraisal dari tanggal 2025-08-21 Sampai 2025-09-20', 'Laporan_Apraisal_20250930_142714.xlsx', '2025-09-30 14:27:14', 'chrlido29'),
(128, 'Laporan Apraisal', 'Apraisal', '08-2025', 'Data Apraisal dari tanggal 2025-08-21 Sampai 2025-09-20', 'Laporan_Apraisal_20251001_081219.xlsx', '2025-10-01 08:12:19', 'bpridika18'),
(129, 'Laporan Apraisal', 'Apraisal', '09-2025', 'Data Apraisal dari tanggal 2025-09-21 Sampai 2025-10-20', 'Laporan_Apraisal_20251010_114811.xlsx', '2025-10-10 11:48:11', 'chrlido29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL,
  `level_jabatan` varchar(255) NOT NULL,
  `id_departement` int(11) NOT NULL,
  `id_jabdivision` int(11) NOT NULL,
  `mapping_hirarki` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `nama_jabatan`, `level_jabatan`, `id_departement`, `id_jabdivision`, `mapping_hirarki`) VALUES
(2, 'SEKRETARIS FINANCE', 'FM', 1, 1, '0'),
(3, 'TELLER', 'OF', 2, 1, '0'),
(4, 'FINANCE (AFN)', 'OF', 2, 1, '0'),
(5, 'SUPERVISOR', 'FM', 3, 1, '0'),
(6, 'STAFF FINANCE', 'OF', 3, 1, '0'),
(7, 'DIREKTUR FINANCE', 'TM', 4, 1, '0'),
(8, 'MANAGER FINANCE', 'MM', 4, 1, '0'),
(9, 'ADMIN LEAD', 'FM', 5, 2, '0'),
(10, 'PIC-GUDANG2 (PIC2)', 'FM', 6, 2, '0'),
(11, 'ADMIN', 'OF', 5, 2, '0'),
(12, 'CHECKER (CHK)', 'OF', 6, 2, '0'),
(13, 'WAREHOUSE ASSOCIATE (WAS)', 'OF', 6, 2, '0'),
(14, 'HELPER (DHL)', 'OF', 6, 2, '0'),
(15, 'GENERAL AFFAIRS (GAF)', 'FM', 19, 2, '0'),
(16, 'TEKNISI', 'FM', 19, 2, '0'),
(17, 'DIREKTUR PRO & PURCHASE', 'OF', 19, 2, '0'),
(18, 'MANAGER PRO & PURCHASE', 'OF', 19, 2, '0'),
(19, 'KOORDINATOR PIC-GUDANG (PIC)', 'TM', 6, 2, '0'),
(20, 'CHECKER DC (CH2)', 'MM', 6, 2, '0'),
(21, 'PURCHASE MD (MDC)', 'FM', 20, 2, '0'),
(22, 'PURCHASE STAFF (PRC)', 'OF', 20, 2, '0'),
(23, 'WAREHOUSE CASHIER (WAC)', 'OF', 6, 2, '0'),
(24, 'PIC-LOGISTIC (PIC-L)', 'OF', 21, 3, '0'),
(25, 'DRIVER SENIOR (DDRS)', 'OF', 21, 3, '0'),
(26, 'DRIVER (DDR)', 'FM', 21, 3, '0'),
(27, 'MARKETING LEAD', 'OF', 22, 3, '0'),
(28, 'MEMBERSHIP', 'OF', 22, 3, '0'),
(29, 'MARKETING STAFF', 'OF', 22, 3, '0'),
(30, 'CONTENT', 'OF', 22, 3, '0'),
(31, 'PIC-CABANG (PIC)', 'OF', 23, 3, '0'),
(32, 'KASIR (KSR)', 'FM', 23, 3, '0'),
(33, 'SALES ASSOCIATE (SAA)', 'OF', 23, 3, '0'),
(34, 'DELIVERY', 'FM', 23, 3, '0'),
(35, 'PIC-GUDANG (PIC)', 'FM', 24, 3, '0'),
(36, 'SALESMAN WHOLESALER', 'OF', 24, 3, '0'),
(37, 'SALESMAN RETAIL', 'FM', 24, 3, '0'),
(38, 'SALESMAN EXCECUTIVE', 'OF', 24, 3, '0'),
(39, 'DIREKTUR OPERASIONAL', 'FM', 24, 3, '0'),
(40, 'MANAGER OPS', 'FM', 22, 3, '0'),
(41, 'OPERATION MANAGER (OMN)', 'OF', 22, 3, '0'),
(42, 'PIC-DELIVERY (PIC)', 'OF', 23, 3, '0'),
(43, 'SALESMAN WS (OSW)', 'OF', 23, 3, '0'),
(44, 'GENERAL ADMIN (SGA)', 'FM', 23, 3, '0'),
(45, 'GENERAL ADMIN PLT (P-SGA)', 'FM', 23, 3, '0'),
(46, 'INVENTORY STAFF (ISA)', 'OF', 23, 3, '0'),
(47, 'KASIR PELATIHAN (KSC)', 'OF', 23, 3, '0'),
(48, 'TRAINING (TRN)', 'OF', 23, 3, '0'),
(49, 'KARYAWAN (OKR)', 'OF', 23, 3, '0'),
(50, 'INTERNSHIP (ISP)', 'FM', 23, 3, '0'),
(51, 'SALESMAN (OSL)', 'OF', 23, 3, '0'),
(52, 'SALESMAN RE (OSR)', 'OF', 23, 3, '0'),
(53, 'PPIC-CABANG (P-PIC)', 'OF', 23, 3, '0'),
(54, 'DIREKTUR', 'TM', 25, 3, '0'),
(55, 'HEAD OF AUDIT', 'TM', 27, 5, '0'),
(56, 'AUDITOR LEAD', 'MM', 27, 5, '0'),
(57, 'AUDITOR ADMIN (A-ADT)', 'MM', 27, 5, '0'),
(58, 'AUDITOR PLT (P-ADT)', 'FM', 27, 5, '0'),
(59, 'ADVISOR AUDIT', 'OF', 27, 5, '0'),
(60, 'AUDITOR (ADT)', 'OF', 27, 5, '0'),
(61, 'LEAD', 'OF', 27, 5, '0'),
(62, 'CREATIVE HUMAN RESOURCES (CHR)', 'OF', 31, 4, '0'),
(63, 'HRD', 'OF', 31, 4, '0'),
(64, 'REFORMING LEAD (RFL)', 'OF', 28, 4, '0'),
(65, 'SPV SOFTWARE ENGINEER (SSE)', 'OF', 29, 4, '0'),
(66, 'STAFF RESOURCES AND DEVELOPMENT (RND)', 'FM', 29, 4, '0'),
(67, 'SUPPORT SYSTEM AND TECH (SST)', 'OF', 29, 4, '0'),
(68, 'ADVISOR TAX & LEGAL', 'OF', 32, 6, '0'),
(69, 'TAX AND LEGAL (ATL)', 'OF', 32, 6, '0'),
(70, 'NON AKTIF', 'OF', 25, 3, '0'),
(71, 'MANGKIR', 'OF', 25, 3, '0'),
(72, 'MEKANIK (MCN)', 'FM', 25, 3, '0'),
(73, 'OPERATOR PRODUKSI (OPP)', 'OF', 25, 3, '0'),
(74, 'PKL/MAGANG', 'OF', 25, 3, '0'),
(75, 'BRAND AMBASSADOR (BA)', 'OF', 22, 3, '0'),
(76, 'FREELANCE', 'OF', 25, 1, '0'),
(77, 'PROBATION', 'OF', 25, 3, '0'),
(78, 'WAREHOUSE MANAGER', 'MM', 6, 2, '0'),
(79, 'BOARDING SPESIALIST', 'OF', 25, 3, '0'),
(80, 'HELPER (+)', 'OF', 6, 2, '0');

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontrak`
--

CREATE TABLE `tbl_kontrak` (
  `id_kontrak` int(11) NOT NULL,
  `nama_kontrak` varchar(255) NOT NULL,
  `jumlahcuti_kontrak` varchar(255) NOT NULL,
  `waktu_kontrak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kontrak`
--

INSERT INTO `tbl_kontrak` (`id_kontrak`, `nama_kontrak`, `jumlahcuti_kontrak`, `waktu_kontrak`) VALUES
(1, 'TETAP', '12', '0'),
(2, 'PKWT K3', '12', '0'),
(3, 'PKWT K2', '12', '3 Bulan'),
(4, 'PKWTT AKTIF', '12', '3 Bulan'),
(5, 'PKWTT UJI', '0', '3 Bulan'),
(6, 'TRAINING', '0', 'Tidak ada waktu kontrak'),
(7, 'PKWT K1', '0', '3 bulan'),
(8, 'MAGANG/PKL', '0', 'Mengikuti Waktu Magang Sekolah'),
(21, 'PKHL', '0', 'Flexible'),
(22, 'PKWT', '0', '0'),
(23, 'PKSP', '0', '12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontrak_detail`
--

CREATE TABLE `tbl_kontrak_detail` (
  `id_kontrak_detail` int(11) NOT NULL,
  `id_emp` varchar(255) NOT NULL,
  `no_kontrak` varchar(255) NOT NULL,
  `jenis_kontrak` int(11) NOT NULL,
  `badan_hukum_kontrak` int(11) NOT NULL,
  `tanggal_awal_kontrak` date NOT NULL,
  `tanggal_akhir_kontrak` date NOT NULL,
  `link_file` varchar(255) NOT NULL,
  `gaji_pokok` varchar(255) NOT NULL,
  `tunjangan_jabatan` varchar(255) NOT NULL,
  `tunjangan_lainnya` varchar(255) NOT NULL,
  `beneficial` varchar(255) NOT NULL,
  `status_kontrak` int(11) NOT NULL,
  `update_kontrak` varchar(50) DEFAULT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kontrak_detail`
--

INSERT INTO `tbl_kontrak_detail` (`id_kontrak_detail`, `id_emp`, `no_kontrak`, `jenis_kontrak`, `badan_hukum_kontrak`, `tanggal_awal_kontrak`, `tanggal_akhir_kontrak`, `link_file`, `gaji_pokok`, `tunjangan_jabatan`, `tunjangan_lainnya`, `beneficial`, `status_kontrak`, `update_kontrak`, `updated_date`) VALUES
(3, '22222222222', '1212121212', 22, 1, '2025-04-10', '2025-04-10', 'http://localhost/projectint/sicuan/karyawan/editkontrak/22222222222', '8000000', '1000000', '1000000', '1000000', 2, NULL, '0000-00-00 00:00:00'),
(4, '2105660012', '001.2.PKWTT.EWE.VI.2023 ', 4, 5, '2023-06-28', '0000-00-00', 'https://drive.google.com/file/d/1dQjz1K8vJJSd6PjiuvH9-4ovuVKgEQYx/view?usp=drive_link', '900000', '400000', '250000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(5, '2105660032', '003.2.PKWT.RKR.VI.2023 ', 4, 2, '2023-06-29', '0000-00-00', 'https://drive.google.com/file/d/1reazE_fNcwMk2qyYiSI8Grelg4TitCVl/view?usp=drive_link', '800000', '500000', '250000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(6, '2311990031', '001.1.PKWTT.PDD.IX.2024', 4, 3, '2023-11-09', '0000-00-00', 'https://drive.google.com/file/d/1vDX4NNIR2nTruXSJiW20NlXbF-HS6U0I/view?usp=drive_link', '1000000', '350000', '600000', '100000', 2, NULL, '2025-07-28 18:55:24'),
(7, '2212660042', '004.2.PKWTT.PDD.IX.2024 ', 4, 4, '2022-12-07', '0000-00-00', 'https://drive.google.com/file/d/1TxBJnG3j_CiaC_ThGzi4z-QZueTPd3mf/view?usp=drive_link', '1000000', '400000', '700000', '100000', 2, NULL, '2025-07-28 19:21:12'),
(8, '2310990011', '001.1.PKWTT.PDD.X.2023 ', 4, 2, '2023-10-16', '0000-00-00', 'https://drive.google.com/file/d/1wZjvoA49d1BZuadGMvrTQnif1EpFHrZO/view?usp=drive_link', '1000000', '450000', '800000', '100000', 2, NULL, '2025-07-28 18:42:34'),
(9, '2201990041', '001.1.PKWTT.PKR.XII.2024', 4, 6, '2024-07-04', '0000-00-00', 'https://drive.google.com/file/d/1sNUqSxbVd1pnjWnqLXpj4pac-I6ZDBA_/view?usp=drive_link', '1050000', '800000', '710000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(10, '2203990061', 'PP21 PKWTT/PDD/III/2021', 4, 3, '2022-03-01', '0000-00-00', 'https://drive.google.com/file/d/1DpDk-mnS--ATZXLUe1_HVuoktZkh6_OO/view?usp=drive_link', '800000', '300000', '200000', '000', 1, NULL, '0000-00-00 00:00:00'),
(11, '2310660012', '009.2.PKWTT.ETH.X.2023', 4, 1, '2023-10-04', '0000-00-00', '009.2.PKWTT.ETH.X.2023', '1000000', '500000', '300000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(12, '2204990141', '014.1.PKWTT.ETH.IV.2022', 4, 1, '2022-10-26', '0000-00-00', 'https://docs.google.com/document/d/1vTXLjYa4mrjDA2bvUhBo5LX707ecYut9/edit?usp=drive_link&ouid=100434533338432029488&rtpof=true&sd=true', '1000000', '700000', '350000', '200000', 1, NULL, '0000-00-00 00:00:00'),
(13, '2201990021', ' 002.1.PKWT.PDD.I.2022', 22, 3, '2022-01-08', '2023-01-08', 'https://drive.google.com/file/d/18s_lylUGk-8aV19th3WNEl_ba27xfAC_/view?usp=drive_link', '800000', '300000', '200000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(14, '2201990011', 'PP21PKWT/PDD/I/2022', 22, 3, '2022-01-08', '2023-01-08', 'https://drive.google.com/file/d/1GmBPml0HF01m537Xuk3htDzNpQW9tVO6/view?usp=drive_link', '800000', '300000', '200000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(15, '2306660012', '001.2.PKWTT.EWE.VI.2023 ', 4, 5, '2023-06-02', '0000-00-00', 'https://drive.google.com/file/d/1mgWbrX6K5hBsGTA1khHTRPJczy26csyl/view?usp=drive_link', '800000', '400000', '250000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(16, '2305990061', '006.1.PKWTT.PDD.V.2023 ', 4, 3, '2023-05-15', '0000-00-00', 'https://drive.google.com/file/d/bc1qat359e8kn3qa05mn5s5dht8n3zl33x7f4m7ze7/view?usp=drive_link', '800000', '300000', '200000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(17, '2306990021', '002.1.PKWTT.PDD.VI.2023 ', 4, 3, '2023-05-15', '0000-00-00', 'https://drive.google.com/file/d/1DRNGpaS4rS63Cf0BQ26lQuaSocmnWuq2/view?usp=drive_link', '800000', '300000', '200000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(18, '2203990051', '005_I_pkwtt_pdd_III_2022', 4, 3, '2022-03-01', '0000-00-00', 'https://drive.google.com/file/d/1hnAlAG1mepRKmzNSTYS-P59EjXk-PIeq/view?usp=drive_link', '800000', '300000', '200000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(19, '2303990031', '003.1.PKWTT.PDD.III.2023 ', 4, 3, '2023-03-15', '0000-00-00', 'https://drive.google.com/file/d/1q4tEbBcAKOQ9y-1pnLDTEE_rJPvWw1bP/view?usp=drive_link', '800000', '300000', '1000000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(20, '2303990031', '', 4, 3, '2023-09-28', '0000-00-00', '', '', '', '', '', 1, NULL, '0000-00-00 00:00:00'),
(21, '2309990131', '013.1.PKWTT.PDD.IX.2023 ', 4, 3, '2023-09-28', '0000-00-00', 'https://drive.google.com/file/d/1kjgbO9lePIawIIJ5NquwuCss1A3IhKcp/view?usp=drive_link', '1000000', '450000', '250000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(22, '2405660012', '001.2.PKWTT.PDD.V.2024', 4, 3, '2023-11-13', '0000-00-00', 'https://drive.google.com/file/d/1oUlo2pKd1CC3xeLopJ2y50gtW4ojOuTp/view?usp=drive_link', '1000000', '400000', '250000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(23, '2212990201', '005.2.PKWTT.PDD.VI.2024', 4, 3, '2023-11-13', '0000-00-00', 'https://drive.google.com/file/d/1kV_jpUprlvvOkMO1K-y6kqxvzEEzMe6O/view?usp=drive_link', '1000000', '400000', '250000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(24, '2306990101', '010.1.PKWTT.PDD.VI.2023', 4, 3, '2023-06-12', '0000-00-00', 'https://drive.google.com/file/d/1Wg7IU9Cq8sJ86TnEIuT-V0nzHUjd2G8d/view?usp=drive_link', '800000', '300000', '200000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(25, '2311990051', '004.1.PKWTT.PKR.VII.2024', 4, 6, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/12PohMa4M3HZT6J9k5W2Hp7-5aqEo5RNg/view?usp=drive_link', '1000000', '500000', '250000', '00', 1, NULL, '0000-00-00 00:00:00'),
(26, '2310660062', '004.2.PKWTT.KTS.VII.2024', 4, 4, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/11kF0c3_eMJONPZKf9UuvDtsvenht273W/view?usp=drive_link', '1000000', '500000', '250000', '00', 1, NULL, '0000-00-00 00:00:00'),
(27, '2201660012', '002.1.PKWTT.EWE.VII.2024', 4, 5, '2024-06-20', '0000-00-00', '', '1100000', '700000', '400000', '00', 1, NULL, '0000-00-00 00:00:00'),
(28, '2302660042', '003.2.PKWTT.RKR.VII.2024', 4, 2, '2023-02-28', '0000-00-00', 'https://drive.google.com/file/d/1FCtTw8UPFwCKhYFlG-neYu76hUEFAUuk/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:28:09'),
(29, '2308990031', '003.1.PKWTT.PDD.VIII.2023', 4, 3, '2023-08-09', '0000-00-00', 'https://drive.google.com/file/d/11ZiGTjYlSHsUor0mNKCi7NoYeTKv5HAV/view?usp=drive_link', '1000000', '400000', '200000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(30, '2410990021', '018.1.PKWTT.KTS.X.2024 ', 4, 4, '2024-10-24', '0000-00-00', 'https://drive.google.com/file/d/1I0VE5upGxzxPvy6soXCil3oRUjX_jaje/view?usp=drive_link', '1000000', '450000', '300000', '0', 2, NULL, '2025-07-28 18:23:27'),
(31, '2402660012', '001.2.PKWTT.PDD.II.2024', 4, 3, '2024-02-03', '0000-00-00', 'https://drive.google.com/file/d/1Ht2I4DSPDAMnS0zjHIJKKrn4C1nixa0f/view?usp=drive_link', '1000000', '400000', '200000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(32, '2306990011', '001.1.PKWTT.PDD.VI.2023 ', 4, 3, '2023-12-27', '0000-00-00', 'https://drive.google.com/file/d/1BpMUxiJZu1w1jigsU0GOha8lz8cut9dL/view?usp=drive_link', '800000', '350000', '200000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(33, '2106660012', '004.2.PKKT.RKR.IX.2024', 1, 2, '2024-09-12', '0000-00-00', 'https://drive.google.com/file/d/1957ibjj6La-w7yA9M3ci9SEbb0x8Qy8U/view?usp=drive_link', '1100000', '800000', '400000', '00', 1, NULL, '0000-00-00 00:00:00'),
(34, '1905660022', '002.1.PKKT.KTS.IX.2024 ', 1, 4, '2024-09-12', '0000-00-00', 'https://drive.google.com/file/d/1kfe2M7yh7t5Sd8OnxcVmKnB5Kz_m9I46/view?usp=drive_link', '1100000', '800000', '450000', '00', 1, NULL, '0000-00-00 00:00:00'),
(35, '2410990011', '001.2.PKHL.PDD.X.2024', 21, 3, '2024-10-19', '0000-00-00', 'https://drive.google.com/file/d/1C9ARVqBT95T36LAvp6GNDuuS1C0rv9Ji/view?usp=drive_link', '65000', '00', '00', '00', 2, NULL, '0000-00-00 00:00:00'),
(36, '2402990011', '001.1.PKWTT.PDD.II.2024', 4, 3, '2025-02-05', '0000-00-00', 'https://drive.google.com/file/d/1BCsQMbGP2kGGDXIdaj2-ackYHNI75E8Q/view?usp=drive_link', '1000000', '300000', '200000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(37, '2206660012', '003.1.PKWTT.RKR.IX.2024', 4, 2, '2022-09-12', '0000-00-00', 'https://drive.google.com/file/d/1jRLVTUuQJ2oLi25QrnWujbgd-4BGl_DK/view?usp=drive_link', '1050000', '450000', '300000', '00', 1, NULL, '0000-00-00 00:00:00'),
(38, '2501990011', '001.2.PKWTT.EWE.XII.2024', 4, 5, '2025-01-22', '0000-00-00', '', '1000000', '500000', '250000', '0', 1, NULL, '0000-00-00 00:00:00'),
(39, '2310990021', '025.2.PKWTT.PDD.VII.2024', 4, 3, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1tQbK1Cuuuu-e9O7UEKgwsa40CtK-TM0X/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:52:35'),
(40, '2309660022', '002.2.PKWTT.PDD.IX.2023', 4, 3, '2023-09-13', '0000-00-00', 'https://drive.google.com/file/d/1GZPsKDLPFB5FDQK7N--egyAcdkhiUSQb/view?usp=drive_link', '1000000', '450000', '250000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(41, '2303660012', '001.2.PKWTT.PDD.III.2023', 4, 3, '2023-12-27', '0000-00-00', 'https://drive.google.com/file/d/16zhZo_CqEzxcOyyr5TC12qgIBkappwls/view?usp=drive_link', '800000', '300000', '200000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(42, '2402990021', '015.2.PKWTT.PDD.VII.2024', 4, 5, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1nGYCWgW5-l2NaR77qWD8tz49wBYNC0fx/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:10:18'),
(43, '2311990041', '004.1.PKWTT.PDD.XI.2023', 4, 3, '2023-11-25', '0000-00-00', 'https://drive.google.com/file/d/1gUMrISNu1tRJnlLg5FBPUGt4vV40gsyR/view?usp=drive_link', '1000000', '400000', '250000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(44, '2309990031', ' 016.2.PKWTT.PDD.VII.2024', 4, 3, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1Teph1sd7c5CaWcj1rviVyozOWRPsJszM/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:27:01'),
(45, '2306660032', '013.2.PKWTT.PDD.VII.2024', 4, 3, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1bf93mhhke_CNyDR5z-cFTNX5TxH-V6bn/view?usp=drive_link', '1000000', '250000', '500000', '0', 2, NULL, '0000-00-00 00:00:00'),
(46, '2501660022', '001.2.PKWTT.EWE.II.2025 ', 4, 5, '2024-01-06', '0000-00-00', 'https://drive.google.com/file/d/138JufxtGjHsBJ9I5iFO72CpLR9h0B2ZW/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '0000-00-00 00:00:00'),
(47, '2410660032', '021.2.PKWTT.PDD.X.2024', 4, 3, '2024-10-25', '0000-00-00', 'https://drive.google.com/file/d/1ZlkTnmMftl6YdN_S1M3O5ebLk-KoG1Q2/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:26:47'),
(48, '2212990131', '002.2.PKWTT.KTS.VII.2024', 4, 4, '2022-12-12', '0000-00-00', 'https://drive.google.com/file/d/1o8XVEf8O0bOx5ANyu0GpGXMKzmCgzpq0/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:22:07'),
(49, '2212990161', '012.2.PKWTT.PDD.VII.2024', 4, 3, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1TKhtg8VRH2wOkvBNO7KNMBWE9F-8CQsr/view?usp=drive_link', '1000000', '250000', '500000', '0', 1, NULL, '0000-00-00 00:00:00'),
(50, '2307990021', '002.1.PKWTT.PDD.VII.2023 ', 4, 3, '2024-01-16', '0000-00-00', 'https://drive.google.com/file/d/1UtCbn2af8CG_Ugju-r2EZDUooxpFMdo9/view?usp=drive_link', '1000000', '500000', '250000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(51, '2306990171', '010.2.PKWTT.PDD.VII.2024', 4, 3, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/102GDP1NCOdW1BgW7QIkjEFtaJ6wr_7-H/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:02:29'),
(52, '2306990091', '011.2.PKWTT.PDD.VII.2024', 4, 2, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1sSGeGbHVjLwTnI4xiLBjT13TZ4IDyMrg/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 17:55:35'),
(53, '2212660122', '12.2.PKWTT.PDD.XII.2022', 4, 3, '2022-12-19', '0000-00-00', 'https://drive.google.com/file/d/1C4QnBiSYgBzV7ItO7LJfstwqFRfbP_vm/view?usp=drive_link', '800000', '300000', '200000', '0', 1, NULL, '0000-00-00 00:00:00'),
(54, '2204660032', 'PP21PKWT/PDD/XII/2021', 22, 3, '2021-12-23', '2022-04-23', 'https://drive.google.com/file/d/1RWc4IBQDQQKGVIzskz6jhIzg4kJwaRhx/view?usp=drive_link', '800000', '300000', '200000', '00', 1, NULL, '0000-00-00 00:00:00'),
(55, '2106990021', 'PP19PKWT_RKR_VI_2021', 22, 2, '2021-06-18', '0000-00-00', 'https://drive.google.com/file/d/1meehXGatuBLs0Lxbmz1SXepgpDk6RFFY/view?usp=drive_link', '800000', '0', '0', '0', 1, NULL, '0000-00-00 00:00:00'),
(56, '2302990051', '011.2.PKWTT.PDD.VI.2024', 4, 3, '2024-06-17', '0000-00-00', 'https://drive.google.com/file/d/1Y67aoYYSbsvveEwVIigzoyUuAYkT9ufO/view?usp=drive_link', '1000000', '250000', '500000', '0', 1, NULL, '0000-00-00 00:00:00'),
(57, '2204660012', '001.2.PKWTT.EWE.VI.2023', 4, 5, '2023-06-20', '0000-00-00', 'https://drive.google.com/file/d/1c-qmJj5_vU17btCEViWYo38AdZxzhZ9n/view?usp=drive_link', '800000', '600000', '450000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(58, '2501990021', '001.2.PKWTT.PDD.I.2025', 4, 3, '2025-01-22', '0000-00-00', 'https://drive.google.com/file/d/1Dy-1xhf9dUD-zbuXwXtQ6SjpFV1UEzbZ/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:32:48'),
(59, '2302990071', '007.1.PKWTT.PDD.II.2023', 4, 2, '2023-02-24', '0000-00-00', 'https://drive.google.com/file/d/1AOu_JBVF8h-oEjpWj25K4_1q3MioyaHv/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:26:52'),
(60, '2305990011', '001.1.PKWTT.PDD.V.2023', 4, 2, '2023-05-15', '0000-00-00', 'https://drive.google.com/file/d/1vcqtPfsvQL7dol_LacjLVlR-1yAFbYHb/view?usp=drive_link', '1000000', '500000', '250000', '', 2, NULL, '2025-07-28 18:53:16'),
(61, '2407990011', '001.2.PKWTT.PDD.VII.2024', 4, 3, '2024-07-04', '0000-00-00', 'https://drive.google.com/file/d/1ZQ46YBgumVMqURPDA4nyeY9HAE3yo0Yn/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:37:53'),
(62, '2306990041', '008.1.PKWTT.PDD.VI.2023', 4, 3, '2024-03-18', '0000-00-00', 'https://drive.google.com/file/d/174bkexjwe1Dxrr3AJA1RXht1ZnM2eqDs/view?usp=drive_link', '1000000', '500000', '250000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(63, '2212990231', '023.1.PKWTT.PDD.XII.2022.', 4, 3, '2022-12-26', '0000-00-00', 'https://drive.google.com/file/d/1SAxbc3UPNiTRxrTORcBBNYkqGl3JpmJ9/view?usp=drive_link', '800000', '300000', '200000', '0', 1, NULL, '0000-00-00 00:00:00'),
(64, '2303660032', '003.2.PKWTT.PDD.III.202', 4, 3, '2023-03-23', '0000-00-00', 'https://drive.google.com/file/d/1pDy14JYcIs6YC7bTuUZKYxIVHJgrDY4a/view?usp=drive_link', '800000', '300000', '200000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(65, '2303660042', '004.2.PKWTT.PDD.III.2023 ', 4, 3, '2023-12-30', '0000-00-00', 'https://drive.google.com/file/d/1wZSYxKNGf4ZGO9THPyjsRiSoK8HvncCh/view?usp=drive_link', '800000', '300000', '200000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(66, '2212990071', '007.1.PKWTT.PDD.XII.2022', 4, 3, '2022-12-08', '0000-00-00', 'https://drive.google.com/file/d/1wF4is_LRrEJWZeSUzBpjtFCUwfR5C3S2/view?usp=drive_link', '800000', '300000', '200000', '0', 1, NULL, '0000-00-00 00:00:00'),
(67, '2207990041', '039.PKWTT.PDD.VI.2022 ', 4, 3, '2022-07-01', '0000-00-00', 'https://drive.google.com/file/d/1QOaq-DKwqWZHab_LqZdOjTCYwp2tnomN/view?usp=drive_link', '800000', '300000', '200000', '0', 1, NULL, '0000-00-00 00:00:00'),
(68, '2207990051', '002.2.PKWTT.KTS.X.2024', 4, 4, '2022-07-02', '0000-00-00', 'https://drive.google.com/file/d/1dSRyGSLbzOYoRP5s1DRk6KzotZ1cTEeD/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:17:06'),
(69, '2308660012', '007.2.PKWTT.RKR.X.2024 ', 4, 2, '2023-08-25', '0000-00-00', 'https://drive.google.com/file/d/11hH4sKvCfP4BnoOwtvCd1cIu0LlxhPk6/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:22:34'),
(70, '2207990061', '003.2.PKWTT.KTS.X.2024', 4, 4, '2022-07-02', '0000-00-00', 'https://drive.google.com/file/d/199XpPe5IepB5xvknHTfCYXzB3w--tL2m/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:18:02'),
(71, '1905660042', '008.2.PKWTT.KTS.X.2024', 4, 4, '2024-10-19', '0000-00-00', 'https://drive.google.com/file/d/1vlXdopLQhECUe-N9AtuT7e7w6EwXzle-/view?usp=drive_link', '1100000', '700000', '400000', '0', 1, NULL, '0000-00-00 00:00:00'),
(72, '2406660012', '001.2.PKWTT.PDD.VI.2024', 4, 3, '2023-11-13', '0000-00-00', 'https://drive.google.com/file/d/1ceZxVnj5xuay0sCXNpjKFQbs1LC0nOtH/view?usp=drive_link', '1000000', '400000', '200000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(73, '2302990081', '008.1.PKWTT.PDD.II.2023', 4, 2, '2023-02-28', '0000-00-00', 'https://drive.google.com/file/d/1OxbIii4cHZZo-CiIQmQb0C3ujkLDVJFw/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:27:23'),
(74, '2410660022', '002.2.PKWTT.PDD.X.2024', 4, 3, '2024-10-01', '0000-00-00', 'https://drive.google.com/file/d/1Hp1fOfhkG0b0TAH3HY5RKRj0ds2hyxO9/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:20:48'),
(75, '2409660022', '005.2.PKWTT.EWE.IX.2024', 4, 5, '2024-09-19', '0000-00-00', 'https://drive.google.com/file/d/1FdIX8evW2QPOQXhnJkOfld5L0f_rS2sS/view?usp=drive_link', '1000000', '250000', '500000', '0', 1, NULL, '0000-00-00 00:00:00'),
(76, '2409660012', '006.2.PKWTT.PDD.IX.2024', 4, 3, '2024-09-19', '0000-00-00', 'https://drive.google.com/file/d/1NSFQb5BbEhy4Ptyx22mafR5eb6yVeRAb/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:12:15'),
(77, '2209990091', '012.2.PKWTT.PDD.VI.2024', 4, 3, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1LWPNBaTTnmD7MkL817ccA4IEZ8EWXJCF/view?usp=drive_link', '1000000', '250000', '500000', '0', 2, NULL, '0000-00-00 00:00:00'),
(78, '2402990051', '009.2.PKWTT.PDD.VII.2024', 4, 5, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1DaAWgE-esWhm6NC7YvFb6t_IVcPMqWWO/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:19:49'),
(79, '2310660072', '001.2.PKWTT.PDD.VII.2024', 4, 3, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1jJrY4lW2M_EwJHxIWN2k1ngZXgjt4oaj/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, 'adendum', '2025-07-28 18:51:08'),
(80, '2307660042', '004.2.PKWTT.PDD.VII.2023 ', 4, 3, '2023-07-08', '0000-00-00', 'https://drive.google.com/file/d/1hVYzoJLOqyCN7QNOF9lr6RN_WGWnG2nz/view?usp=drive_link', '1000000', '450000', '250000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(81, '2306660062', '006.2.PKWTT.PDD.VI', 4, 3, '2023-06-20', '0000-00-00', 'https://drive.google.com/file/d/1kg73T3ik3OxukU6UT0RwWuOtjMT9Tf8s/view?usp=drive_link', '800000', '300000', '200000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(82, '2203990011', 'PP21PKWT/EWE/XI/2021', 22, 5, '2022-03-18', '0000-00-00', 'https://drive.google.com/file/d/11uV-xhs6n1i6J2tMo8G91pzhEilVoMl-/view?usp=drive_link', '800000', '500000', '350000', '0', 1, NULL, '0000-00-00 00:00:00'),
(83, '2302990031', '008.2.PKWTT.PDD.VII.2024', 4, 3, '2023-02-14', '0000-00-00', 'https://drive.google.com/file/d/1ssJLsPc-zb76xOji-rj95YfkNw2hevSQ/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:25:36'),
(84, '2406660042', '010.2.PKWTT.PDD.VI.2024', 4, 3, '2024-06-17', '0000-00-00', 'https://drive.google.com/file/d/1q0DnntNM0G9KGDBw1ox9DCEYjWkwARt5/view?usp=drive_link', '1000000', '250000', '500000', '0', 1, NULL, '0000-00-00 00:00:00'),
(85, '2401990011', '0.17.2.PKWTT.RKR.X.2024', 4, 2, '2024-10-19', '0000-00-00', 'https://drive.google.com/file/d/1E-9bDNBkPCYmy4ikIXIvhreDcksegiAb/view?usp=drive_link', ' 1050000', '500000', '250000', '0', 1, NULL, '0000-00-00 00:00:00'),
(86, '2309990051', '019.2.PKWTT.PDD.VII.2024', 4, 6, '2024-07-24', '0000-00-00', 'https://drive.google.com/file/d/14JQXDMQLDd5TFL3E_axFIBMQbBJkvJcH/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:34:03'),
(87, '2309660042', '004.2.PKWTT.PDD.IX.2023 ', 4, 3, '2023-09-23', '0000-00-00', 'https://drive.google.com/file/d/1DKsFGyvkM_YYsROcXQAbEQ-yxNUEKI72/view?usp=drive_link', '1000000', '450000', '250000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(88, '2204990031', '021.2.PKWTT.PDD.VII.2024', 4, 5, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1fN4MyVcVo1-KR0lP7iTCAWRn2rWO1LYc/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:28:14'),
(89, '2501660012', '003.1.PKWTT.RKR.I.2025', 4, 2, '2025-01-14', '0000-00-00', 'https://drive.google.com/file/d/1htVapp3mDNDmgW6b8mKARaWkpJfMY8Ia/view?usp=drive_link', '1000000', '600000', '350000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(90, '1905990081', '08-PP19PKT-KTS-V-2019', 1, 4, '2019-05-27', '0000-00-00', 'https://drive.google.com/file/d/13dFVwfxo9cMn4b6KXFl5nJMZN1DIcEgp/view?usp=drive_link', '1000000', '0', '0', '0', 1, NULL, '0000-00-00 00:00:00'),
(91, '2208660042', '004.2.PKWTT.KTS.X.2024', 4, 4, '2023-08-09', '0000-00-00', 'https://drive.google.com/file/d/1c346DPmxJegzY4fsA8aDhFzWtS0ULYlO/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:19:37'),
(92, '2112990011', 'PP21/PKWT/RKR/XII/2021', 22, 2, '2021-12-08', '0000-00-00', 'https://drive.google.com/file/d/1qs-f0sZusS0D1PZD4I0ugpH1mztjT3bM/view?usp=drive_link', '800000', '500000', '350000', '0', 1, NULL, '0000-00-00 00:00:00'),
(93, '1905990011', '001/1/PKKT/KTS/V/2019', 1, 4, '2019-05-24', '0000-00-00', 'https://drive.google.com/file/d/1EaZMep8qCMVGZH7dpoc1STYA2LM33p9J/view?usp=drive_link', '1785000', '0', '0', '0', 1, NULL, '0000-00-00 00:00:00'),
(94, '1905990071', '007/I/PKKT/KTS/V/2019', 1, 4, '2019-05-24', '0000-00-00', 'https://drive.google.com/file/d/1D3oP3q725u3lp_t1r-zq0Bn1RzidvwuE/view?usp=drive_link', '1100000', '0', '0', '0', 1, NULL, '0000-00-00 00:00:00'),
(95, '2110990011', '001.2.PKHL.PDD.VIII.2024', 21, 3, '2024-06-04', '0000-00-00', 'https://drive.google.com/file/d/1SrlajPMo_Z7BBydJYcHB5xfSCgimHycl/view?usp=drive_link', '0', '0', '0', '0', 1, NULL, '0000-00-00 00:00:00'),
(96, '2206990011', 'PP2OPKWT/ETM/VI/2021', 21, 3, '2021-06-10', '0000-00-00', 'https://drive.google.com/file/d/1VEm0VTw1u0N951OUfKCRPKuwm53iFF5E/view?usp=drive_link', '20000', '0', '0', '0', 2, NULL, '2025-07-29 17:24:50'),
(97, '2107990011', 'PP20PKWT/PKR/VII/2021', 22, 6, '2021-07-20', '0000-00-00', 'https://drive.google.com/file/d/1GthP5eUR3qcA7M-vvGok85rUlGspsJ-k/view?usp=drive_link', '1825000', '0', '750000', '200000', 1, NULL, '0000-00-00 00:00:00'),
(98, '2202990071', 'XX.PP21PKWTT.PDD.II.2022', 4, 3, '2022-02-26', '0000-00-00', 'https://drive.google.com/file/d/10-qLjFi-14AKOGJ4sTMVa9JmpjmgbuKe/view?usp=drive_link', '800000', '300000', '200000', '0', 1, NULL, '0000-00-00 00:00:00'),
(99, '1905990061', '09-PP19PKT-KTS-V-2019', 1, 10, '2019-05-24', '0000-00-00', 'https://drive.google.com/file/d/13iLP7XvrH3ejhSHBHKIRXUqAyc0z6M00/view?usp=drive_link', '1000000', '0', '0', '0', 1, NULL, '0000-00-00 00:00:00'),
(100, '1905990061', '09-PP19PKT-KTS-V-2019', 1, 4, '2019-05-24', '0000-00-00', 'https://drive.google.com/file/d/13iLP7XvrH3ejhSHBHKIRXUqAyc0z6M00/view?usp=drive_link', '1000000', '0', '0', '0', 1, NULL, '0000-00-00 00:00:00'),
(101, '2302660012', '001.2.PKWTT.PDD.II.2023', 4, 3, '2023-12-27', '0000-00-00', 'https://drive.google.com/file/d/1f5m-MygCpZrLg_x6qKEy8lQxy7aGOOgU/view?usp=drive_link', '800000', '300000', '200000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(102, '2307990051', '04.2.PKWTT.PDD.VII.2024', 4, 3, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1gT8EEGHEDFAeoJzLRPFOk-Cmo4mzgmim/view?usp=drive_link', '1000000', '250000', '500000', '0', 2, NULL, '0000-00-00 00:00:00'),
(103, '2305990081', '008.1.PKWTT.EWE.V.2023 ', 4, 5, '2023-03-10', '0000-00-00', 'https://drive.google.com/file/d/1k7P1Kbv8G1XS3z1CqmOA6D6pkCL2jqOr/view?usp=drive_link', '800000', '500000', '300000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(104, '1905990091', '001.1.PKWTT.RKR.IX.2024', 4, 6, '2024-06-20', '0000-00-00', 'https://drive.google.com/file/d/1KGL7Ju_7t4FwRCLF5wDOWnaOIEyI1qUJ/view?usp=drive_link', '1100000', '600000', '350000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(105, '2112990021', '002.1.PKWTT.PDD.XII.2021', 4, 3, '2022-12-21', '0000-00-00', 'https://drive.google.com/file/d/1NJheuQHp3kkG8dCyg5LJtbl0n27KdCk7/view?usp=drive_link', '800000', '350000', '20000', '0', 1, NULL, '0000-00-00 00:00:00'),
(106, '1905990111', '01-PP19PKT-KTS-V-2019', 1, 4, '2019-05-24', '0000-00-00', 'https://drive.google.com/file/d/1WmOnlDCDPXcUtjsPT9nYwc0ocRFIHgmn/view?usp=drive_link', '1000000', '0', '0', '0', 1, NULL, '0000-00-00 00:00:00'),
(107, '1905990041', '12-PP19PKT-KTS-V-2019', 1, 4, '2019-05-24', '0000-00-00', 'https://drive.google.com/file/d/1qMIoBnbieDnJrKWlsCYeFcnXHFCqt7HX/view?usp=drive_link', '45000', '0', '35000', '500000', 2, 'adendum', '2025-08-27 13:40:39'),
(108, '2206990121', '038.PKWTT.PDD.VI.2022', 4, 3, '2022-06-27', '0000-00-00', 'https://drive.google.com/file/d/1KZc2_vwI1TgH-6cLNIbt2SbEJLnDQV0D/view?usp=drive_link', '800000', '300000', '200000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(109, '2306990081', '008.1.PKWTT.PDD.VI.2023', 4, 3, '2023-06-12', '0000-00-00', 'https://drive.google.com/file/d/1v4A33IL4BO99zdlqwkZj1xiCd2u6CMSq/view?usp=drive_link', '800000', '350000', '200000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(110, '2203990101', 'PP21PKWTT-PDD-III-2022', 4, 3, '2022-03-19', '0000-00-00', 'https://drive.google.com/file/d/1Vh7Pt3YIezLGomGTC4JL8eBFjR4oH70D/view?usp=drive_link', '800000', '300000', '200000', '0', 1, NULL, '0000-00-00 00:00:00'),
(111, '2207990081', '007.2.PKWTT.PDD.VII.2024', 4, 4, '2022-07-02', '0000-00-00', 'https://drive.google.com/file/d/1FKn8-DmCEfDYBEo1LU7AQjMIYZIsu1rY/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:18:48'),
(112, '2207990011', '001.PKWTT.PDD.VII.2022', 4, 3, '2022-07-25', '0000-00-00', 'https://drive.google.com/file/d/1hj5WKf7i8eaVuR5Obe3n5gLEZZhSeu4I/view?usp=drive_link', '800000', '300000', '200000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(113, '2205990011', '015/PP21 PWKTT/EWE/V/2022', 4, 5, '2022-05-14', '0000-00-00', 'https://drive.google.com/drive/folders/1iWf6VH-JnVLN2DQ_m0I0MQc9smkL6RU3?usp=drive_link', '800000', '600000', '450000', '0', 1, NULL, '0000-00-00 00:00:00'),
(114, '2107990011', 'PP20PKWT,iPKRATI/2021', 4, 6, '2021-06-20', '0000-00-00', 'https://drive.google.com/file/d/1GthP5eUR3qcA7M-vvGok85rUlGspsJ-k/view?usp=drive_link', '1050000', '950000', '350000', '200000', 2, NULL, '2025-08-27 13:41:22'),
(115, '2204990031', '021.2.PKWTT.PDD.VII.2024', 4, 3, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1SahekA27pm3CQlNuLQjQsJ0gf7mEcWwe/view?usp=drive_link', '1000000', '250000', '400000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(116, '2306990101', '010.1.PKWTT.PDD.VI.2023', 4, 2, '2023-06-12', '0000-00-00', 'https://drive.google.com/file/d/1pHY_R8MmTxDR7nO0qDczgFsm1L7tNH9m/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 17:59:03'),
(117, '2112990011', 'PP21/PKWT/RKR/XII/2021', 3, 3, '2021-12-08', '2022-12-08', 'https://drive.google.com/file/d/1qs-f0sZusS0D1PZD4I0ugpH1mztjT3bM/view?usp=drive_link', '1000000', '800000', '450000', '0', 2, NULL, '2025-09-15 10:16:43'),
(118, '2309660022', '002.2.PKWTT.PDD.IX.2023', 4, 6, '2023-09-13', '0000-00-00', 'https://drive.google.com/file/d/1pIS0OxkKFzVReLkOdRDlXkqKC_nDlIpi/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:24:38'),
(119, '1905990091', '001.1.PKWTT.RKR.IX.2024', 4, 4, '2024-06-20', '0000-00-00', 'https://drive.google.com/file/d/1HXYFHMVx_piDWacYIfULowGwr6GLft56/view?usp=drive_link', '1100000', '350000', '600000', '100000', 2, NULL, '2025-07-28 17:48:54'),
(120, '1905990011', '001/1/PKKT/KTS/V/2019', 21, 6, '2019-05-24', '0000-00-00', 'https://drive.google.com/file/d/1EaZMep8qCMVGZH7dpoc1STYA2LM33p9J/view?usp=drive_link', '45000', '0', '35000', '800000', 2, NULL, '2025-08-27 13:36:31'),
(121, '2201660012', '002.1.PKWTT.EWE.VII.2024', 4, 2, '2024-06-20', '0000-00-00', 'https://drive.google.com/file/d/17kG45uJMvWwwwylmVbbcN-hb_9SXvr0P/view?usp=drive_link', '1100000', '700000', '400000', '0', 2, NULL, '2025-07-28 17:53:02'),
(122, '1905990081', '08-PP19PKT-KTS-V-2019', 21, 4, '2019-05-27', '0000-00-00', 'https://drive.google.com/file/d/13dFVwfxo9cMn4b6KXFl5nJMZN1DIcEgp/view?usp=drive_link', '40000', '0', '30000', '0', 2, NULL, '2025-09-02 15:19:29'),
(123, '1905660022', '002.1.PKKT.KTS.IX.2024 ', 1, 4, '2024-09-12', '0000-00-00', 'https://drive.google.com/file/d/1SSMrXaS3i04Rr94dgZVGoiDGUkVTlcRW/view?usp=drive_link', '1100000', '450000', '800000', '0', 2, NULL, '2025-06-27 10:10:30'),
(124, '1905990071', '007/I/PKKT/KTS/V/2019', 1, 6, '2019-05-24', '0000-00-00', 'https://drive.google.com/file/d/1D3oP3q725u3lp_t1r-zq0Bn1RzidvwuE/view?usp=drive_link', '1100000', '350000', '600000', '100000', 2, NULL, '2025-07-29 09:48:31'),
(125, '2106660012', '004.2.PKKT.RKR.IX.2024', 1, 2, '2021-06-14', '0000-00-00', 'https://drive.google.com/file/d/164XOomM5OdNoD28HIS-KrZR-V6R5Ek7V/view?usp=drive_link', '1100000', '800000', '400000', '0', 2, NULL, '2025-07-28 17:20:24'),
(126, '1905990061', '09-PP19PKT-KTS-V-2019', 1, 4, '2019-05-24', '0000-00-00', 'https://drive.google.com/file/d/13iLP7XvrH3ejhSHBHKIRXUqAyc0z6M00/view?usp=drive_link', '1100000', '700000', '400000', '550000', 2, NULL, '2025-08-27 13:37:41'),
(127, '2105660012', '001.2.PKWTT.KTS.VI.2023', 4, 4, '2023-06-28', '0000-00-00', 'https://drive.google.com/file/d/1dQjz1K8vJJSd6PjiuvH9-4ovuVKgEQYx/view?usp=drive_link', '1100000', '350000', '600000', '100000', 2, NULL, '2025-08-29 11:24:16'),
(128, '1905660042', '008.2.PKWTT.KTS.X.2024', 4, 4, '2024-10-19', '0000-00-00', 'https://drive.google.com/file/d/1gi27SAmtqzPfKmYgnsjUkyN97UBpWN55/view?usp=drive_link', '1100000', '400000', '700000', '1100000', 2, NULL, '2025-10-01 08:52:35'),
(129, '1905990111', '01-PP19PKT-KTS-V-2019', 1, 4, '2019-05-24', '0000-00-00', 'https://drive.google.com/file/d/1WmOnlDCDPXcUtjsPT9nYwc0ocRFIHgmn/view?usp=drive_link', '1100000', '450000', '1100000', '100000', 2, NULL, '2025-07-29 09:47:28'),
(130, '2105660032', '001.1.PKWTT.KTS.IX.2024', 4, 4, '2024-07-04', '0000-00-00', 'https://drive.google.com/file/d/1MUe58EYDY_T8YoZhMTaZWR99lRP3bQnc/view?usp=drive_link', '1100000', '450000', '800000', '100000', 2, NULL, '2025-07-28 17:55:27'),
(131, '2204660012', '001.2.PKWT.EWE.VI.2023', 4, 2, '2023-06-20', '0000-00-00', 'https://drive.google.com/file/d/1c-qmJj5_vU17btCEViWYo38AdZxzhZ9n/view?usp=drive_link', '1050000', '700000', '400000', '0', 2, NULL, '2025-08-29 11:24:59'),
(132, '2203990011', 'PP21PKWT/EWE/XI/2021', 3, 5, '2022-03-18', '0000-00-00', 'https://drive.google.com/file/d/1eRQ99OTSA68iJYYJ5AkyEgHOYO813vrf/view?usp=drive_link', '1050000', '400000', '700000', '0', 2, NULL, '2025-09-15 10:15:51'),
(133, '2206660012', '003.1.PKWTT.RKR.IX.2024', 4, 2, '2022-09-12', '0000-00-00', 'https://drive.google.com/file/d/1jRLVTUuQJ2oLi25QrnWujbgd-4BGl_DK/view?usp=drive_link', '1050000', '450000', '300000', '0', 2, NULL, '0000-00-00 00:00:00'),
(134, '2106990021', 'PP19PKWT/RKR/VI/2021', 3, 2, '2021-06-18', '0000-00-00', 'https://drive.google.com/file/d/1meehXGatuBLs0Lxbmz1SXepgpDk6RFFY/view?usp=drive_link', '1050000', '400000', '700000', '1100000', 2, NULL, '2025-09-17 14:09:50'),
(135, '2207990011', '001.PKWTT.PDD.VII.2022', 4, 2, '2022-07-25', '0000-00-00', 'https://drive.google.com/file/d/1TZZuZTeQFLbW0Dq4V16YrB5hwqhKXt9m/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:18:06'),
(136, '2110990011', '001.2.PKHL.PDD.VIII.2024', 21, 2, '2024-06-04', '0000-00-00', 'https://drive.google.com/file/d/1si4N3didd-bxPFcLcYR0rwTSeZo2ayPN/view?usp=drive_link', '20000', '0', '0', '0', 2, NULL, '2025-07-29 09:37:09'),
(137, '2112990021', '002/1/PKWTT/PDD/XII/2022', 4, 3, '2022-12-21', '0000-00-00', 'https://drive.google.com/file/d/1jbgXZHlfiBNJLkhPQC86vCVGfdpW9iiQ/view?usp=drive_link', '1000000', '450000', '300000', '0', 2, NULL, '2025-06-25 12:25:17'),
(138, '2201990011', 'PP21PKWT/PDD/I/2022', 3, 3, '2022-01-08', '0000-00-00', 'https://drive.google.com/file/d/1GmBPml0HF01m537Xuk3htDzNpQW9tVO6/view?usp=drive_link', '1000000', '300000', '450000', '0', 2, NULL, '2025-09-15 10:20:26'),
(139, '2201990021', ' 002.1.PKWT.PDD.I.2022', 3, 3, '2022-01-08', '0000-00-00', 'https://drive.google.com/file/d/1vwxMGfuHlWuZ_hVVGnKyVcLd9YBcxQGK/view?usp=drive_link', '1000000', '300000', '450000', '0', 2, NULL, '2025-09-15 10:16:26'),
(140, '2201990041', '001.1.PKWTT.PKR.XII.2024', 4, 6, '2024-07-24', '0000-00-00', 'https://drive.google.com/file/d/1pK4xfpnvTl-6vAZQsaqSaEv8oeRyW74z/view?usp=drive_link', '1050000', '800000', '450000', '360000', 2, NULL, '2025-09-30 17:47:03'),
(141, '2202990071', 'XX.PP21PKWTT.PDD.II.2022', 4, 3, '2022-02-26', '0000-00-00', 'https://drive.google.com/file/d/10-qLjFi-14AKOGJ4sTMVa9JmpjmgbuKe/view?usp=drive_link', '1000000', '700000', '400000', '550000', 2, NULL, '2025-08-27 13:38:49'),
(142, '2204660032', 'PP21PKWT/PDD/XII/2021', 3, 5, '2021-12-23', '0000-00-00', 'https://drive.google.com/file/d/1RWc4IBQDQQKGVIzskz6jhIzg4kJwaRhx/view?usp=drive_link', '1000000', '250000', '500000', '0', 2, NULL, '2025-09-17 14:10:18'),
(143, '2204990141', '014.1.PKWTT.ETH.IV.2022', 4, 1, '2022-04-07', '0000-00-00', 'https://docs.google.com/document/d/1vTXLjYa4mrjDA2bvUhBo5LX707ecYut9/edit?usp=drive_link&ouid=100434533338432029488&rtpof=true&sd=true', '1000000', '500000', '1000000', '150000', 2, NULL, '2025-07-28 19:20:23'),
(144, '2203990051', '005/1/PKWTT/PDD/2022', 21, 6, '2022-03-01', '0000-00-00', 'https://drive.google.com/file/d/1hnAlAG1mepRKmzNSTYS-P59EjXk-PIeq/view?usp=drive_link', '40000', '0', '30000', '0', 2, NULL, '2025-07-28 17:20:11'),
(145, '2203990101', 'PP21PKWTT-PDD-III-2022', 4, 5, '2022-03-19', '0000-00-00', 'https://drive.google.com/file/d/1Vh7Pt3YIezLGomGTC4JL8eBFjR4oH70D/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:36:18'),
(146, '2204990131', '013.1.PKWT.PDD.IV.2022', 3, 6, '2022-04-11', '0000-00-00', '', '1000000', '350000', '950000', '0', 2, NULL, '2025-09-17 13:48:49'),
(147, '2203990061', 'PP21 PKWTT/PDD/III/2021', 4, 1, '2022-03-19', '0000-00-00', 'https://drive.google.com/file/d/1t9o9lA12ea-qHlNEe6rl9bbFj27lcW2i/view?usp=drive_link', '1000000', '300000', '700000', '100000', 2, NULL, '2025-07-28 18:35:22'),
(148, '2207990041', '039.PKWTT.PDD.VI.2022 ', 4, 4, '2022-07-01', '0000-00-00', 'https://drive.google.com/file/d/1eAxnAS0GWRjt6pmz_tytBq7tk2dVvE7_/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 17:45:36'),
(149, '2207990051', '002.2.PKWTT.KTS.X.2024', 4, 4, '2024-06-26', '0000-00-00', 'https://drive.google.com/file/d/1iCF5oHXlpsQQFZ1U8VH8I4u1rmCxuyoo/view?usp=drive_link', '1000000', '250000', '400000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(150, '2207990081', '007.2.PKWTT.PDD.VII.2024', 4, 3, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1Bz8Wy4oJwCXbUaUVVFvqdeJfieZZQlzD/view?usp=drive_link', '1000000', '250000', '400000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(151, '2208660042', '004.2.PKWTT.KTS.X.2024', 4, 4, '2024-10-19', '0000-00-00', 'https://drive.google.com/file/d/1vUxyk78ombUmqKwI0RtGrwyLR2LkIJcV/view?usp=drive_link', '1000000', '500000', '250000', '0', 1, NULL, '0000-00-00 00:00:00'),
(152, '2206990121', '038.PKWTT.PDD.VI.2022', 4, 2, '2022-06-27', '0000-00-00', 'https://drive.google.com/file/d/1KZc2_vwI1TgH-6cLNIbt2SbEJLnDQV0D/view?usp=drive_link', '1000000', '450000', '300000', '0', 2, NULL, '2025-07-28 18:41:36'),
(153, '2204990121', '012.1.PKWTT.ETH.IV.2022', 4, 1, '2022-04-11', '0000-00-00', '', '1000000', '300000', '700000', '100000', 2, NULL, '0000-00-00 00:00:00'),
(154, '2207990061', '003.2.PKWTT.KTS.X.2024', 4, 4, '0000-00-00', '0000-00-00', 'https://drive.google.com/file/d/1RcyXLfqBVQm9vHqXAVMbYEaOqi1N81JF/view?usp=drive_link', '1000000', '500000', '250000', '0', 1, NULL, '0000-00-00 00:00:00'),
(155, '2205990011', '015/PP21 PWKTT/EWE/V/2022', 4, 2, '2022-05-14', '0000-00-00', 'https://drive.google.com/file/d/1mILKKQkfjrgtux5XTZ5_nxHH2zHyHpLQ/view?usp=drive_link', '1000000', '700000', '400000', '0', 2, NULL, '2025-07-28 18:40:51'),
(156, '2212660042', '004.2.PKWTT.PDD.IX.2024 ', 4, 3, '2024-06-26', '0000-00-00', 'https://drive.google.com/file/d/1TxBJnG3j_CiaC_ThGzi4z-QZueTPd3mf/view?usp=drive_link', '1000000', '500000', '250000', '0', 1, NULL, '0000-00-00 00:00:00'),
(157, '2212990071', '007.1.PKWTT.PDD.XII.2022', 4, 4, '2022-12-08', '0000-00-00', 'https://drive.google.com/file/d/1wF4is_LRrEJWZeSUzBpjtFCUwfR5C3S2/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:11:46'),
(158, '2212990131', '002.2.PKWTT.KTS.VII.2024', 4, 4, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1QMZEkcd_llS6Ph67He0-Mafa0-LCHzdC/view?usp=drive_link', '1000000', '500000', '250000', '0', 1, NULL, '0000-00-00 00:00:00'),
(159, '2212990161', '012.2.PKWTT.PDD.VII.2024', 4, 4, '2022-12-13', '0000-00-00', 'https://drive.google.com/file/d/1TKhtg8VRH2wOkvBNO7KNMBWE9F-8CQsr/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:22:46'),
(160, '2212990201', '005.2.PKWTT.PDD.VI.2024', 4, 4, '2022-12-19', '0000-00-00', 'https://drive.google.com/file/d/13m9rLGNIUk-kRePr9_Wit01Jyma0m1uy/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:23:43'),
(161, '2212660122', '12.2.PKWTT.PDD.XII.2022', 4, 4, '2022-12-19', '0000-00-00', 'https://drive.google.com/file/d/1Ao__xDl-2-QVr65HyhR2B81BcrEFUIai/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:20:29'),
(162, '2212990231', '023.1.PKWTT.PDD.XII.2022.', 4, 5, '2022-12-26', '0000-00-00', 'https://drive.google.com/file/d/1SAxbc3UPNiTRxrTORcBBNYkqGl3JpmJ9/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:26:56'),
(163, '2302660012', '001.2.PKWTT.PDD.II.2023', 22, 5, '2023-02-10', '0000-00-00', 'https://drive.google.com/file/d/1f5m-MygCpZrLg_x6qKEy8lQxy7aGOOgU/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:24:52'),
(164, '2302990031', '008.2.PKWTT.PDD.VII.2024', 4, 3, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1gnEjOzjZSl1y3VxDm6UlS4pwFt-5QDhT/view?usp=drive_link', '1000000', '500000', '250000', '0', 1, NULL, '0000-00-00 00:00:00'),
(165, '2302990071', '007.1.PKWTT.PDD.II.2023', 4, 3, '2024-03-11', '0000-00-00', 'https://drive.google.com/file/d/1NinNIR_KP4PieKdASqJEl4WBGz3LNIYK/view?usp=drive_link', '1000000', '250000', '400000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(166, '2302990051', '011.2.PKWTT.PDD.VI.2024', 4, 3, '0000-00-00', '0000-00-00', '', '1000000', '500000', '250000', '0', 1, NULL, '0000-00-00 00:00:00'),
(167, '2302990051', '011.2.PKWTT.PDD.VI.2024', 4, 2, '2023-02-24', '0000-00-00', 'https://drive.google.com/file/d/1Y67aoYYSbsvveEwVIigzoyUuAYkT9ufO/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:26:18'),
(168, '2302990081', '008.1.PKWTT.PDD.II.2023', 4, 3, '2024-01-16', '0000-00-00', 'https://drive.google.com/file/d/1FE8weWxJDmYLUZE1HBzlkLUIaclSpH6s/view?usp=drive_link', '1000000', '250000', '400000', '100000', 2, NULL, '0000-00-00 00:00:00'),
(169, '2302660042', '003.2.PKWTT.RKR.VII.2024', 4, 2, '2023-10-20', '0000-00-00', 'https://drive.google.com/file/d/1-tKeVwBHlJmm1vACsaUGVRigi2SSPhEm/view?usp=drive_link', '1000000', '500000', '250000', '0', 1, NULL, '0000-00-00 00:00:00'),
(170, '2303660012', '001.2.PKWTT.PDD.III.2023', 4, 2, '2023-03-11', '0000-00-00', 'https://drive.google.com/file/d/1S9ssphjilSSWT5GnOhk_sHI07Qc9Regm/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:28:42'),
(171, '2303660032', '003.2.PKWTT.PDD.III.202', 4, 2, '2023-03-23', '0000-00-00', 'https://drive.google.com/file/d/1pDy14JYcIs6YC7bTuUZKYxIVHJgrDY4a/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:45:09'),
(172, '2303990031', '003.1.PKWTT.PDD.III.2023 ', 21, 3, '2023-09-28', '0000-00-00', 'https://drive.google.com/file/d/1q4tEbBcAKOQ9y-1pnLDTEE_rJPvWw1bP/view?usp=drive_link', '45000', '0', '35000', '0', 2, NULL, '2025-07-28 17:39:09'),
(173, '2303660042', '004.2.PKWTT.PDD.III.2023 ', 4, 2, '2023-03-30', '0000-00-00', 'https://drive.google.com/file/d/1CBGn2zj4UtU7fSs4ni3h2FAKMVbd9CIp/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:29:39'),
(174, '2305990011', '001.1.PKWTT.PDD.V.2023', 4, 3, '2023-03-11', '0000-00-00', 'https://drive.google.com/file/d/1vcqtPfsvQL7dol_LacjLVlR-1yAFbYHb/view?usp=drive_link', '1000000', '250000', '400000', '0', 1, NULL, '0000-00-00 00:00:00'),
(175, '2305990061', '006.1.PKWTT.PDD.V.2023 ', 4, 2, '2023-05-23', '0000-00-00', 'https://drive.google.com/file/d/1liunCuAtQjFNSD1_xMizCgpGGuPPlyJW/view?usp=drive_link', '1000000', '450000', '300000', '0', 2, NULL, '2025-07-28 18:56:57'),
(176, '2305990081', '008.1.PKWTT.EWE.V.2023 ', 4, 2, '2023-05-24', '0000-00-00', 'https://drive.google.com/file/d/1k7P1Kbv8G1XS3z1CqmOA6D6pkCL2jqOr/view?usp=drive_link', '1000000', '700000', '400000', '320000', 2, NULL, '2025-09-30 17:46:22'),
(177, '2306990021', '002.1.PKWTT.PDD.VI.2023 ', 4, 2, '2023-06-01', '0000-00-00', 'https://drive.google.com/file/d/1LG4CizDx_Wb6m-vPgucvyzMybhslAXsu/view?usp=drive_link', '1000000', '450000', '300000', '0', 2, NULL, '2025-07-28 19:04:19'),
(178, '2306990011', '001.1.PKWTT.PDD.VI.2023 ', 4, 2, '2023-06-01', '0000-00-00', 'https://drive.google.com/file/d/1t5dEtXnvqwB9-b471jzHOHnmqfCia6YG/view?usp=drive_link', '1000000', '450000', '300000', '0', 2, NULL, '2025-07-28 19:01:32'),
(179, '2306660022', '002.2.PKWTT.PDD.VI.2023', 4, 2, '2023-06-05', '0000-00-00', '', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:09:32'),
(180, '2306990081', '008.1.PKWTT.PDD.VI.2023', 4, 6, '2023-06-12', '0000-00-00', 'https://drive.google.com/file/d/1zKg06V0sGc_zWxyQlSCXX2BQutPybtxO/view?usp=drive_link', '1000000', '450000', '300000', '0', 2, NULL, '2025-07-28 17:42:25'),
(181, '2306990041', '008.1.PKWTT.PDD.VI.2023', 4, 5, '2023-06-01', '0000-00-00', 'https://drive.google.com/file/d/16BebYay4dVj3uAKSZUQtoD-eB-wMZqU8/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-29 17:44:09'),
(182, '2306660012', '001.2.PKWTT.EWE.VI.2023 ', 4, 2, '2023-06-02', '0000-00-00', 'https://drive.google.com/file/d/1L96kTBT3yHi3fsB5t2l8c7qydMIF_z5i/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:08:20'),
(183, '2306660032', '013.2.PKWTT.PDD.VII.2024', 4, 3, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1bf93mhhke_CNyDR5z-cFTNX5TxH-V6bn/view?usp=drive_link', '1000000', '250000', '400000', '100000', 2, NULL, '0000-00-00 00:00:00'),
(184, '2306990091', '011.2.PKWTT.PDD.VII.2024', 4, 3, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1YisnTi-vhpZgMtogy4cziGj7X2oEPeDJ/view?usp=drive_link', '1000000', '250000', '400000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(185, '2306990221', '022.1.PKWTT.KTS.VI.2023', 4, 4, '2023-06-01', '0000-00-00', '', '3000000', '500000', '500000', '0', 2, NULL, '0000-00-00 00:00:00'),
(186, '2306660062', '006.2.PKWTT.PDD.VI', 4, 2, '2023-06-20', '0000-00-00', 'https://drive.google.com/file/d/12Y_euazHkotsux-4S1gy2Rv4v51MZB0C/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:07:40'),
(187, '2306990171', '010.2.PKWTT.PDD.VII.2024', 4, 3, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1u4dWpnBqO59HJccYgBw3gy5Hz40bXbXK/view?usp=drive_link', '1000000', '250000', '400000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(188, '2307660042', '004.2.PKWTT.PDD.VII.2023 ', 4, 3, '2023-07-08', '0000-00-00', 'https://drive.google.com/file/d/1mZTRrrOMIhPsEsM4ktCjq7cdQM3bVrPQ/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-06-30 10:21:07'),
(189, '2307990021', '002.1.PKWTT.PDD.VII.2023 ', 4, 6, '2024-01-16', '0000-00-00', 'https://drive.google.com/file/d/1t9IkfIu0Dokr1dqmY2VHMjLnxa8XGMYS/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:10:30'),
(190, '2307990051', '04.2.PKWTT.PDD.VII.2024', 4, 3, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1gT8EEGHEDFAeoJzLRPFOk-Cmo4mzgmim/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '0000-00-00 00:00:00'),
(191, '2308990031', '003.1.PKWTT.PDD.VIII.2023', 4, 2, '2023-08-09', '0000-00-00', 'https://drive.google.com/file/d/1e2ZqYCXpF2ysGTFMccrYmdv-ajOb0tjL/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:18:20'),
(192, '2308660012', '007.2.PKWTT.RKR.X.2024 ', 4, 2, '2023-10-29', '0000-00-00', 'https://drive.google.com/file/d/1R39yONnvp66MfkjTgk0DK1FeAsN0ii7i/view?usp=drive_link', '1000000', '500000', '250000', '0', 1, NULL, '0000-00-00 00:00:00'),
(193, '2309990031', ' 016.2.PKWTT.PDD.VII.2024', 4, 3, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1_LNC6oQ4bhSryYa6OcUVb9TwSX20ID-B/view?usp=drive_link', '1000000', '250000', '400000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(194, '2309660042', '004.2.PKWTT.PDD.IX.2023 ', 4, 6, '2023-09-22', '0000-00-00', 'https://drive.google.com/file/d/16RvAU-pp8qRy3InjVV21wS2WTF9CH0Mw/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:31:35'),
(195, '2309990051', '019.2.PKWTT.PDD.VII.2024', 4, 3, '2024-06-26', '0000-00-00', 'https://drive.google.com/file/d/1N62Y63D8cPplaDE1VzEpPSbpeGqwTndS/view?usp=drive_link', '1000000', '250000', '400000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(196, '2310660012', '009.2.PKWTT.ETH.X.2023', 4, 1, '2023-10-03', '0000-00-00', 'https://drive.google.com/file/d/1ByC31OPHpX_GAajKvNUvCEdW6HaTTAV_/view?usp=drive_link', '1000000', '350000', '600000', '100000', 2, NULL, '2025-07-28 18:38:05'),
(197, '2310990011', '001.1.PKWTT.PDD.X.2023 ', 4, 3, '2023-10-16', '0000-00-00', 'https://drive.google.com/file/d/1HFlMKLAdg80tWMMorfLCuwn7meuR-Pkf/view?usp=drive_link', '1000000', '450000', '800000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(198, '2310660062', '004.2.PKWTT.KTS.VII.2024', 4, 2, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1YdW9qpBKh_b5WXbOW_nNiSiHNvJfwwqD/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:44:22'),
(199, '2310660072', '001.2.PKWTT.PDD.VII.2024', 4, 3, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1Rjd2VReq1Mj-PH7ERl5yCR5PGpRuhddb/view?usp=drive_link', '1000000', '500000', '250000', '0', 1, NULL, '0000-00-00 00:00:00'),
(200, '2310990021', '025.2.PKWTT.PDD.VII.2024', 4, 3, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1iVYjOTc8er2GrktO7tRT_Vz0nJHwpQrO/view?usp=drive_link', '1000000', '500000', '250000', '0', 1, NULL, '0000-00-00 00:00:00'),
(201, '2309990131', '013.1.PKWTT.PDD.IX.2023 ', 4, 2, '2023-09-28', '0000-00-00', 'https://drive.google.com/file/d/1t7JdBdRMc2dF8mFdp19wo0eDqh12yTTS/view?usp=drive_link', '1000000', '450000', '300000', '0', 2, NULL, '2025-07-28 18:07:24'),
(202, '2309990091', '009.1.PKWTT.PDD.IX.2023', 4, 3, '2023-10-28', '0000-00-00', 'https://drive.google.com/file/d/1kPiY6YVTzV1wmVc4QQ79rgtrQTyWbZGf/view?usp=drive_link', '1000000', '450000', '300000', '0', 2, NULL, '0000-00-00 00:00:00'),
(203, '2311990031', '001.1.PKWTT.PDD.IX.2024', 4, 3, '2023-11-14', '0000-00-00', 'https://drive.google.com/file/d/1KBU69_TaI5Z51qs_u1Og2PDe3bZZxVY3/view?usp=drive_link', '1000000', '300000', '500000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(204, '2311990051', '004.1.PKWTT.PKR.VII.2024', 4, 5, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/12PohMa4M3HZT6J9k5W2Hp7-5aqEo5RNg/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:02:52'),
(205, '2311990041', '004.1.PKWTT.PDD.XI.2023', 4, 5, '2023-11-17', '0000-00-00', 'https://drive.google.com/file/d/1gUMrISNu1tRJnlLg5FBPUGt4vV40gsyR/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:57:42'),
(206, '2401990011', '0.17.2.PKWTT.RKR.X.2024', 22, 2, '2024-10-19', '0000-00-00', 'https://drive.google.com/file/d/1OHAVhGYwKB-rDIuco-yq5isNIV2UPr6J/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:04:48'),
(207, '2402660012', '001.2.PKWTT.PDD.II.2024', 4, 5, '2024-02-03', '0000-00-00', 'https://drive.google.com/file/d/1GNMapXrCj5LUfuHXRnQWSNmo8E1fBCrw/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:12:41'),
(208, '2402990011', '001.1.PKWTT.PDD.II.2024', 4, 5, '2024-02-05', '0000-00-00', 'https://drive.google.com/file/d/1l7KBqe7gYbXAm0Cj6qVAG-Y-QApF_3SP/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:07:21'),
(209, '2402990051', '009.2.PKWTT.PDD.VII.2024', 4, 3, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1wwT81he1GpmxyYAw_aflHgPINUpmz9Ix/view?usp=drive_link', '1000000', '300000', '200000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(210, '2402990021', '015.2.PKWTT.PDD.VII.2024', 4, 3, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1oeeRj-H4lblV0vZMZV_kRUB8SkZP1_2B/view?usp=drive_link', '1000000', '300000', '200000', '100000', 1, NULL, '0000-00-00 00:00:00'),
(211, '2403990011', '001.1.PKWTT.PKR.III.2024', 4, 6, '2025-07-16', '0000-00-00', '', '1000000', '450000', '300000', '0', 2, NULL, '2025-07-28 19:22:18'),
(212, '2405660012', '001.2.PKWTT.PDD.V.2024', 4, 4, '2023-11-13', '0000-00-00', 'https://drive.google.com/file/d/1sq9jGz2eQLx6jtfevY9r6chS2pWkTflR/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:30:44'),
(213, '2406660012', '001.2.PKWTT.PDD.VI.2024', 4, 3, '2023-11-13', '0000-00-00', 'https://drive.google.com/file/d/1ceZxVnj5xuay0sCXNpjKFQbs1LC0nOtH/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:32:29'),
(214, '2406660042', '010.2.PKWTT.PDD.VI.2024', 4, 3, '2024-06-25', '0000-00-00', 'https://drive.google.com/file/d/1q0DnntNM0G9KGDBw1ox9DCEYjWkwARt5/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:36:24');
INSERT INTO `tbl_kontrak_detail` (`id_kontrak_detail`, `id_emp`, `no_kontrak`, `jenis_kontrak`, `badan_hukum_kontrak`, `tanggal_awal_kontrak`, `tanggal_akhir_kontrak`, `link_file`, `gaji_pokok`, `tunjangan_jabatan`, `tunjangan_lainnya`, `beneficial`, `status_kontrak`, `update_kontrak`, `updated_date`) VALUES
(215, '2407990011', '001.2.PKWTT.PDD.VII.2024', 4, 3, '2024-06-24', '0000-00-00', 'https://drive.google.com/file/d/1fvG4hCwWIhAwfxdVRrT_4H8Bke9f3bxY/view?usp=drive_link', '1000000', '500000', '250000', '0', 1, NULL, '0000-00-00 00:00:00'),
(216, '2409660022', '005.2.PKWTT.EWE.IX.2024', 4, 3, '2024-09-19', '0000-00-00', 'https://drive.google.com/file/d/1cYnSaWfj5sKrw7yozFKN3QbhQ_36xJty/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:15:53'),
(217, '2410660022', '002.2.PKWTT.PDD.X.2024', 4, 3, '2024-01-10', '0000-00-00', 'https://drive.google.com/file/d/1jXq2-d_gZ5YSdYlc1SyYcvF4upHpFDhr/view?usp=drive_link', '1000000', '500000', '250000', '0', 1, NULL, '0000-00-00 00:00:00'),
(218, '2410660012', '001.2.PKWTT.PDD.X.2024', 4, 3, '2024-10-01', '0000-00-00', '', '1000000', '500000', '250000', '0', 2, NULL, '0000-00-00 00:00:00'),
(219, '2410990011', '001.2.PKHL.PDD.X.2024', 21, 3, '2024-10-19', '0000-00-00', 'https://drive.google.com/file/d/1C9ARVqBT95T36LAvp6GNDuuS1C0rv9Ji/view?usp=drive_link', '65000', '0', '0', '0', 2, NULL, '0000-00-00 00:00:00'),
(220, '2409660012', '006.2.PKWTT.PDD.IX.2024', 4, 3, '2024-09-19', '0000-00-00', 'https://drive.google.com/file/d/1XnpO9wQyD5lYFSJWRW2f8_P9ZtAqHTST/view?usp=drive_link', '1000000', '500000', '250000', '0', 1, NULL, '0000-00-00 00:00:00'),
(221, '2410660032', '021.2.PKWTT.PDD.X.2024', 4, 3, '2024-06-10', '0000-00-00', 'https://drive.google.com/file/d/1TtqZ1R6kT_yBc8XZeF6CcqPH8Q8_528E/view?usp=drive_link', '1000000', '500000', '250000', '0', 1, NULL, '0000-00-00 00:00:00'),
(222, '2410990021', '018.1.PKWTT.KTS.X.2024 ', 4, 4, '2024-10-24', '0000-00-00', 'https://drive.google.com/file/d/1IduZla5K_xLDRkDtSMJzUMCg2uUrAl9d/view?usp=drive_link', '1000000', '450000', '300000', '0', 2, NULL, '0000-00-00 00:00:00'),
(223, '2501990011', '001.2.PKWTT.EWE.I.2025', 4, 5, '2025-01-22', '0000-00-00', 'https://drive.google.com/file/d/1mJ8Jwnniqdv4UYoFV9s-NmXsqlXdy5II/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:30:43'),
(224, '2501990021', '001.2.PKWTT.PDD.I.2025', 4, 3, '2025-01-22', '0000-00-00', 'https://drive.google.com/file/d/1YT13IuL3g-vspKrkXYRlmPFpI5qQw2SM/view?usp=drive_link', '1000000', '500000', '250000', '0', 1, NULL, '0000-00-00 00:00:00'),
(225, '2503990011', '001.1.PKWTT.RKR.III.2025', 4, 2, '2025-03-21', '0000-00-00', 'https://drive.google.com/file/d/1gdBAsBHl4vDf0dD_rJ3eGh1a3XCGnI_4/view?usp=drive_link', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 18:38:10'),
(226, '2501660012', '003.1.PKWTT.RKR.I.2025', 4, 2, '2025-01-14', '0000-00-00', 'https://drive.google.com/file/d/1nFpx1jJTz4wKWlsh1XcV_szY1zUv9n3u/view?usp=drive_link', '1000000', '600000', '350000', '100000', 2, NULL, '2025-07-28 18:34:52'),
(228, '2505990031', '003.1...V.2025', 6, 10, '2025-05-05', '0000-00-00', '', '1000000', '400000', '700000', '100000', 2, NULL, '0000-00-00 00:00:00'),
(229, '2505990021', '002.1...V.2025', 6, 10, '2025-05-05', '0000-00-00', '', '1000000', '700000', '400000', '100000', 2, NULL, '0000-00-00 00:00:00'),
(230, '2505660022', '002.2...V.2025', 6, 10, '2025-05-05', '0000-00-00', '', '1000000', '400000', '700000', '100000', 2, NULL, '0000-00-00 00:00:00'),
(231, '2505660012', '001.2...V.2025', 6, 10, '2025-05-03', '0000-00-00', '', '1000000', '400000', '700000', '100000', 2, NULL, '0000-00-00 00:00:00'),
(233, '2502660022', '001.2.PKWT.ETH.VI.2025', 22, 1, '2025-06-12', '0000-00-00', '', '1000000', '500000', '250000', '0', 2, NULL, '2025-08-22 15:51:06'),
(234, '2212990100', '0000022229999', 22, 1, '2025-07-01', '2025-07-28', 'https://drive.google.com/drive/folders/1aEkjQ2TQUwQMT_rMNMzhBqqO-cjIP4KD?usp=drive_link', '1000000', '200000', '200000', '200000', 2, NULL, '2025-07-28 16:41:30'),
(235, '2505990031', 'SOW/2025/04/21/003', 5, 1, '2025-04-21', '0000-00-00', '', '1000000', '400000', '700000', '100000', 2, NULL, '2025-07-28 18:43:43'),
(236, '009', 'SOW/2025/05/07/001', 21, 1, '0000-00-00', '0000-00-00', '', '100000', '0', '0', '0', 2, NULL, '2025-08-27 15:29:29'),
(237, '2505660032', 'SOW/2025/06/12/001', 5, 1, '2025-05-12', '0000-00-00', '', '1000000', '400000', '700000', '100000', 2, NULL, '2025-07-29 10:26:06'),
(238, '2506990021', 'SOW/2025/06/28/001', 5, 1, '2025-06-28', '0000-00-00', '', '1000000', '400000', '700000', '100000', 2, NULL, '2025-07-28 18:02:58'),
(239, '2508660012', 'SOW09082025064', 6, 10, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 15:12:02'),
(240, '2508660022', 'SOW09082025074', 6, 10, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 15:29:07'),
(241, '189912TR3236', 'SOW09082025161', 6, 10, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 15:47:47'),
(242, '189912TR3239', 'SOW09082025071', 6, 10, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 13:42:31'),
(243, '189912TR3252', 'SOW09082025031', 6, 10, '2025-08-08', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 15:25:04'),
(244, '2508660032', 'SOW09082025023', 6, 10, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 15:13:28'),
(245, '2508990021', 'SOW09082025063', 6, 10, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-09 17:10:59'),
(246, '2508660042', 'SOW/2025/05/30/002', 6, 10, '2025-05-30', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 15:13:55'),
(247, '189912TR3263', 'SOW/202530052025081', 6, 10, '2025-05-30', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-09-03 15:15:35'),
(248, '2508660052', 'SOW09082025034', 6, 10, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 15:14:27'),
(249, '189912TR3270', 'SOW09082025021', 6, 10, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 15:42:58'),
(251, '2504990011', '001.1.PKWTT.PDD.IV.2025', 22, 3, '2025-04-14', '0000-00-00', '', '1000000', '450000', '300000', '0', 2, NULL, '2025-07-28 19:24:54'),
(256, '2508990051', '0', 6, 10, '0000-00-00', '0000-00-00', '', '50000', '0', '0', '0', 1, NULL, '2025-07-28 18:47:49'),
(257, '2508990061', '0', 6, 10, '0000-00-00', '0000-00-00', '', '50000', '0', '0', '0', 1, NULL, '2025-07-28 18:48:17'),
(258, '2508990011', 'SOW09082025022', 6, 10, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 15:09:30'),
(259, '2503990021', '001.1.PKWTT.ETH.VI.2025', 22, 1, '2025-06-12', '0000-00-00', '', '1000000', '500000', '250000', '0', 2, NULL, '2025-07-28 19:30:35'),
(260, '189912TR3272', 'SOW09082025101', 6, 10, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 15:45:36'),
(261, '189912TR3278', 'SOW09082025125', 6, 10, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 15:45:51'),
(262, '2504660012', '002.2.PKWT.ETH.VI.2025', 22, 1, '2025-06-12', '0000-00-00', '', '1000000', '500000', '250000', '0', 2, NULL, '2025-08-22 15:51:39'),
(263, '2508660062', 'SOW/2025/06/20/001', 0, 10, '2025-06-20', '0000-00-00', '', '50000', '0', '0', '0', 1, NULL, '2025-07-28 18:59:55'),
(264, '2505660012', 'PROBATION/1/V/2025', 22, 1, '2025-04-14', '0000-00-00', '', '1000000', '400000', '700000', '100000', 2, NULL, '2025-07-28 19:20:36'),
(265, '2508660072', 'SOW/2025/06/20/002', 6, 10, '2025-06-20', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 15:19:25'),
(266, '2505660022', 'SOW/2025/05/03/001', 22, 1, '2025-05-03', '0000-00-00', '', '1000000', '400000', '700000', '100000', 2, NULL, '2025-07-28 19:17:20'),
(267, '2508660082', 'SOW/2025/06/20/003', 6, 1, '2025-06-20', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 15:16:49'),
(268, '189912TR3273', 'SOW09082025122', 6, 10, '2025-06-23', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-29 10:20:42'),
(269, '2505990011', 'SOW/2025/05/05/002', 22, 1, '2025-05-05', '0000-00-00', 'https://drive.google.com/file/d/1Kjix68tj4kCwb4aW0kxm0bBVIjKGR394/view?usp=drive_link', '3000000', '1000000', '1250000', '0', 2, NULL, '2025-07-28 19:18:31'),
(270, '2508990031', 'SOW/2025/06/23/002', 0, 10, '2025-06-23', '0000-00-00', '', '50000', '0', '0', '0', 1, NULL, '2025-07-28 19:10:44'),
(271, '2505990021', 'SOW/2025/05/05/003', 22, 1, '2025-04-21', '0000-00-00', '', '1000000', '400000', '700000', '100000', 2, NULL, '2025-07-28 19:19:35'),
(272, '189912TR3282', 'SOW09082025011', 6, 10, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 15:39:19'),
(273, '189912TR3284', 'SOW09082025035', 6, 10, '2025-07-08', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 13:46:15'),
(274, '189912TR3284', 'SOW/2025/07/08/002', 6, 1, '2025-07-08', '0000-00-00', '', '0', '0', '0', '0', 1, NULL, '2025-07-29 16:55:20'),
(275, '189912TR3286', 'SOW/2025/07/12/001', 6, 10, '0000-00-00', '0000-00-00', '', '50000', '0', '0', '0', 1, NULL, '2025-07-28 19:20:57'),
(276, '189912TR3286', 'SOW09082025061', 6, 1, '2025-08-09', '0000-00-00', '', '0', '0', '0', '0', 1, NULL, '2025-08-09 16:37:10'),
(277, '189912TR3288', 'SOW09082025033', 6, 10, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-09-19 16:18:14'),
(278, '189912TR3290', 'SOW09082025073', 6, 1, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 13:46:32'),
(279, '189912TR3292', 'SOW09082025062', 6, 1, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 13:33:04'),
(280, '189912TR3293', 'SOW09082025123', 6, 1, '2025-07-15', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-29 11:36:45'),
(281, '189912TR3301', 'SOW090820250302', 6, 1, '2025-08-08', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 12:12:59'),
(282, '189912TR3295', 'SOW09082025134', 6, 1, '2025-07-15', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-29 11:35:30'),
(283, '189912TR3302', 'SOW09082025133', 6, 1, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 15:47:31'),
(284, '2508990041', 'SOW09082025RM01', 6, 1, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 1, NULL, '2025-08-09 17:06:30'),
(285, '189912TR3299', '0', 6, 1, '2025-07-22', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-07-28 19:36:21'),
(286, '189912TR3304', '0', 6, 1, '2025-07-26', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-07-28 19:37:06'),
(287, '2508990051', '0', 6, 1, '2025-07-26', '0000-00-00', '', '50000', '0', '0', '0', 1, NULL, '2025-07-28 19:37:30'),
(288, '2508990061', '006.1.PKWT.ETH.VIII.2025', 22, 1, '2025-08-30', '2026-02-28', 'https://drive.google.com/file/d/1fwfW2-B0p2rjH1UV2cGxs0JJNt0RWEdf/view?usp=drive_link', '1000000', '450000', '300000', '0', 2, NULL, '2025-09-02 15:41:25'),
(289, 'ETH001', '002..PKKT.ETHCOS.I.2018', 4, 1, '2018-01-01', '0000-00-00', '', '1100000', '1000000', '1000000', '0', 2, NULL, '2025-08-25 07:33:47'),
(290, '0002', '013.1.PKWT.RKR.V.2019', 22, 2, '2019-05-24', '0000-00-00', '', '1100000', '450000', '1100000', '100000', 2, NULL, '2025-07-29 10:38:13'),
(291, '008', '002.2.PKSP.ETH.IV.2025', 23, 1, '2025-04-20', '0000-00-00', '', '4000000', '0', '0', '0', 2, NULL, '2025-07-29 14:43:44'),
(292, '010', '003.2.PKHL.ETH.V.2025', 21, 1, '2025-05-03', '0000-00-00', '', '100000', '0', '0', '0', 2, NULL, '2025-08-27 15:29:43'),
(293, '2508990031', 'SOW/2025/06/23/002', 6, 10, '2025-06-23', '0000-00-00', '', '0', '0', '0', '0', 1, NULL, '2025-07-29 17:35:42'),
(294, 'ETH002', 'ETHFREELANCE', 21, 1, '2025-01-01', '0000-00-00', '', '450000', '0', '0', '0', 2, NULL, '2025-07-30 13:38:02'),
(295, '189912TR3311', 'SOW09082025132', 6, 1, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 15:46:21'),
(296, '2508660062', 'SOW/2025/06/08/2025/001', 4, 1, '2025-08-06', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 15:18:20'),
(297, '189912TR3303', 'SOW09082025072', 6, 1, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-09-19 16:09:16'),
(298, '189912TR3286', 'SOW09082025061', 6, 1, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 13:43:35'),
(299, '189912TR3308', 'SOW09082025041', 6, 1, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 15:47:07'),
(300, '189912TR3288', 'SOW09082025033', 6, 1, '2025-08-09', '0000-00-00', '', '0', '0', '0', '0', 1, NULL, '2025-08-09 16:43:24'),
(301, '189912TR3309', 'SOW09082025042', 6, 1, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 15:43:19'),
(302, '189912TR3309', 'SOW09082025042', 6, 1, '2025-08-09', '0000-00-00', '', '0', '0', '0', '0', 1, NULL, '2025-08-09 16:47:07'),
(303, '2508660042', 'SOW09082025121', 6, 1, '2025-08-09', '0000-00-00', '', '0', '0', '0', '0', 1, NULL, '2025-08-09 16:47:51'),
(304, '189912TR3285', 'SOW09082025024', 6, 1, '2025-08-09', '0000-00-00', '', '0', '0', '0', '0', 2, NULL, '2025-08-09 16:53:07'),
(305, '189912TR3307', 'SOW09082025124', 6, 1, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 15:46:06'),
(306, '189912TR3310', 'SOW09082025131', 6, 1, '2025-08-05', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-29 11:36:03'),
(307, '2508990051', 'SOW09082025RM02', 6, 1, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 1, NULL, '2025-08-09 17:07:10'),
(308, '2508990061', 'SOW09082025RM03', 6, 1, '2025-08-09', '0000-00-00', '', '50000', '0', '0', '0', 1, NULL, '2025-08-27 12:13:44'),
(309, '2508660032', '003.2.PKWT.ETH.VIII.2025', 22, 0, '2025-08-04', '0000-00-00', '', '1000000', '500000', '250000', '0', 2, NULL, '2025-08-22 15:53:09'),
(310, '2508660032', '003.2.PKWT.ETH.VIII.2025', 22, 1, '2025-08-04', '0000-00-00', '', '1000000', '500000', '250000', '0', 2, NULL, '2025-08-27 15:13:34'),
(311, '2508990011', '001.1.PKWT.ETH.VIII.2025', 22, 1, '2025-08-04', '0000-00-00', '', '1000000', '500000', '250000', '0', 2, NULL, '2025-08-27 15:10:04'),
(312, '2508990021', '002.1.PKWT.ETH.VIII.2025', 22, 1, '2025-08-04', '0000-00-00', '', '1000000', '500000', '250000', '0', 2, NULL, '2025-08-27 15:12:37'),
(313, '2508660012', '001.2.PKWT.ETH.VIII.2025', 22, 1, '2025-08-04', '0000-00-00', '', '1000000', '500000', '250000', '0', 2, NULL, '2025-08-27 15:12:08'),
(314, '2508660022', '002.2.PKWT.ETH.VIII.2025', 22, 1, '2025-08-04', '0000-00-00', '', '1000000', '500000', '250000', '0', 2, NULL, '2025-08-27 15:29:13'),
(315, '2508660042', '004.2.PKWT.ETH.VIII.2025', 22, 1, '2025-08-04', '0000-00-00', '', '1000000', '500000', '250000', '0', 2, NULL, '2025-08-27 15:14:02'),
(316, '2508990031', '009.1.PKWT.ETH.VIII.2025', 22, 1, '2025-08-22', '2026-02-22', 'https://drive.google.com/file/d/1MMEOiQzfL_tPkhsnQ_myIb050m0siT88/view?usp=drive_link', '1000000', '450000', '300000', '0', 2, NULL, '2025-08-27 11:56:22'),
(317, '2509990011', 'SOW12082025RM5', 21, 1, '2025-08-12', '0000-00-00', '', '50000', '0', '0', '0', 1, NULL, '2025-08-27 14:27:21'),
(318, '2508660052', '005.2.PKWT.ETH.VIII.2025', 22, 1, '2025-08-04', '0000-00-00', '', '1000000', '500000', '250000', '0', 2, NULL, '2025-08-29 09:52:03'),
(319, '2508660082', '008.2.PKWT.ETH.VIII.2025', 22, 1, '2025-08-06', '0000-00-00', '', '1000000', '250000', '500000', '0', 2, NULL, '2025-10-01 10:56:16'),
(320, '2508660062', '006.2.PKWT.ETH.VIII.2025', 22, 1, '2025-08-06', '0000-00-00', '', '1000000', '350000', '600000', '100000', 2, NULL, '2025-08-27 15:19:00'),
(321, '2508660072', '007.2.PKWT.ETH.VIII.2025', 22, 1, '2025-08-06', '0000-00-00', '', '1000000', '350000', '600000', '100000', 2, NULL, '2025-08-27 15:20:07'),
(322, '189912TR3314', 'SOW16082025LD13', 6, 10, '2025-08-16', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 15:44:32'),
(323, '189912TR3316', 'SOW16082025103', 6, 10, '2025-08-16', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-09-02 15:32:42'),
(324, '189912TR3315', 'SOW16082025LD10', 6, 10, '2025-08-16', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-27 15:50:11'),
(325, '2510660012', 'SOW27082025041', 6, 10, '2025-08-26', '0000-00-00', '', '50000', '0', '0', '0', 1, NULL, '2025-08-30 15:57:26'),
(326, '189912TR3325', 'SOW30082025025', 6, 10, '2025-08-30', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-30 15:49:46'),
(327, '189912TR3328', 'SOW30082025082', 6, 10, '2025-08-30', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-30 15:53:19'),
(328, '189912TR3329', 'SOW30082025083', 6, 10, '0000-00-00', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-08-30 15:53:56'),
(329, '189912TR3321', 'SOW27082025151', 6, 10, '2025-08-26', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-10-02 13:43:52'),
(330, '189912TR3326', 'SOW01092025075', 6, 10, '2025-09-01', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-09-02 15:39:27'),
(331, '2508990051', '005.1.PKWT.ETH.VIII.2025', 22, 1, '2025-08-30', '2026-02-28', 'https://drive.google.com/file/d/1I2jdhp6LZZn8T4LPnMtYr2ImbOWnhz3b/view?usp=drive_link', '1000000', '450000', '300000', '0', 2, NULL, '2025-09-02 15:42:57'),
(332, '2508990041', '004.1.PKWT.ETH.VIII.2025', 22, 1, '2025-08-30', '2026-02-28', 'https://drive.google.com/file/d/1MJk08xkiCe6NFXf4s_UVhx3y-M-tuTVk/view?usp=drive_link', '1000000', '450000', '300000', '0', 2, NULL, '2025-09-02 15:44:29'),
(333, '189912TR3339', 'SOW16092025011', 21, 10, '2025-09-16', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-09-19 15:28:01'),
(334, '189912TR3332', 'SOW13092025082', 6, 10, '2025-09-13', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-09-19 16:09:38'),
(335, '189912TR3333', 'SOW13092025081', 6, 10, '0000-00-00', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-09-19 16:10:19'),
(336, '189912TR3337', 'SOW16092025083', 6, 10, '2025-09-16', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-09-19 16:10:00'),
(337, '189912TR3341', 'SOW16092025113', 6, 10, '2025-09-16', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-09-19 16:11:08'),
(338, '189912TR3334', 'SOW13092025111', 6, 10, '2025-09-13', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-09-19 16:10:38'),
(339, '189912TR3338', 'SOW16092025112', 6, 10, '2025-09-16', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-09-19 16:10:51'),
(340, '189912TR3336', 'SOW16092025114', 6, 10, '2025-09-16', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-09-19 16:14:42'),
(341, '189912TR3340', 'SOW16092025071', 6, 10, '2025-09-16', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-09-19 16:15:38'),
(342, '189912TR3335', 'SOW16092025072', 6, 10, '0000-00-00', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-09-19 16:16:13'),
(343, '189912TR3343', 'SOW20092025101', 6, 10, '2025-09-20', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-09-22 09:23:37'),
(344, '189912TR3344', 'SOW20092025012', 6, 10, '2025-09-20', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-09-22 09:24:15'),
(345, '189912TR3346', 'SOW27092025013', 6, 10, '2025-09-27', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-09-27 16:16:40'),
(346, '189912TR3345', 'SOW27092025061', 6, 10, '2025-09-27', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-10-06 16:00:49'),
(347, '189912TR3350', 'SOW2709202501', 6, 10, '2025-09-27', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-10-03 16:05:42'),
(348, '189912TR3349', 'SOW2709202502', 6, 10, '2025-09-27', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-10-03 16:06:19'),
(349, '189912TR3362', 'SOW11102025071', 6, 10, '2025-10-11', '0000-00-00', '', '50000', '0', '0', '0', 2, NULL, '2025-10-11 12:00:57'),
(350, '2509990011', '001.1.PKWT.ETH.IX.2025', 22, 1, '2025-09-23', '0000-00-00', '', '1000000', '450000', '300000', '0', 2, NULL, '2025-10-11 15:25:35'),
(351, '2510660012', 'SOW11102025HO1', 6, 1, '2025-10-11', '2026-01-11', '', '1000000', '700000', '400000', '0', 1, NULL, '2025-10-14 18:49:33'),
(352, '2510660012', '001.2.PKWT.ETH.X.2025', 22, 1, '2025-10-11', '2026-01-11', '', '1000000', '400000', '700000', '0', 2, NULL, '2025-10-21 09:41:55');

-- --------------------------------------------------------

--
-- Table structure for table `template_letter`
--

CREATE TABLE `template_letter` (
  `id_template_letter` int(11) NOT NULL,
  `name_template_letter` varchar(255) NOT NULL,
  `desc_template_letter` text NOT NULL,
  `date_created_letter` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `template_letter`
--

INSERT INTO `template_letter` (`id_template_letter`, `name_template_letter`, `desc_template_letter`, `date_created_letter`) VALUES
(4, 'Driver', '<ol><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Penerimaan Pesanan:</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Menerima daftar pesanan atau pengiriman yang harus dilakukan.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Memeriksa pesanan untuk memastikan kelengkapan dan akurasi.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Persiapan Pengiriman:</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Memeriksa kondisi dan kelengkapan kendaraan pengiriman (misalnya, truk atau van).</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Memastikan bahwa barang yang akan dikirim tersusun rapi dan aman untuk transportasi.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Memeriksa dokumen yang diperlukan, seperti faktur atau surat pengantar.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Navigasi dan Rute:</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Menggunakan alat navigasi atau GPS untuk menentukan rute tercepat dan terbaik ke tujuan.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Memeriksa lalu lintas dan cuaca untuk memperkirakan waktu kedatangan.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Pengiriman Barang:</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Memastikan identitas penerima dan keberadaan penerima pesanan.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Memeriksa kondisi barang saat pengiriman untuk memastikan tidak ada kerusakan atau barang yang hilang.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Memeriksa daftar pesanan dengan barang yang diterima oleh penerima.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Mengelola tanda tangan atau bukti pengiriman jika diperlukan.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Komunikasi:</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Berkomunikasi dengan pusat distribusi atau toko jika ada masalah, seperti keterlambatan atau ketidaksesuaian pesanan.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Kepatuhan Hukum:</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Mematuhi semua peraturan lalu lintas dan hukum terkait pengiriman barang.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Memastikan kendaraan dilengkapi dengan semua dokumen yang diperlukan, seperti SIM dan STNK (Surat Tanda Nomor Kendaraan).</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Pelaporan:</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Melaporkan semua masalah, insiden, atau kerusakan kendaraan kepada atasan atau manajemen perusahaan.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Membuat catatan pengiriman yang akurat dan lengkap.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Pengembalian Barang:</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Jika ada barang yang harus dikembalikan ke toko atau pusat distribusi, mengikuti prosedur pengembalian yang ditetapkan.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Perawatan Kendaraan:</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Melakukan perawatan rutin pada kendaraan pengiriman untuk memastikan kinerjanya optimal dan aman.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Evaluasi Kinerja:</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Dalam beberapa kasus, perusahaan dapat mengadakan evaluasi kinerja berkala untuk menilai efisiensi dan kualitas layanan pengiriman driver.</li></ol><p><br></p>', '2023-04-04 14:12:33'),
(5, 'Kasir Cadangan', '', '2023-04-04 14:24:36'),
(6, 'Pelatihan Auditor', '<ol><li>memeriksa stok dan fisik barang, aset, catatan keuangan dan operasional perusahaan dan memastikan bahwa mereka mematuhi standar akuntansi dan peraturan perusahaan dan/atau prosedur yang berlaku.</li><li>memastikan bahwa perusahaan mengelola aset dengan efektif dan efisien serta mengidentifikasi risiko yang mungkin mengancam keberlangsungan bisnis.</li><li>Memeriksa catatan keuangan perusahaan dan mengevaluasi pengeluaran dan penerimaan untuk memastikan bahwa mereka dicatat dengan benar dan sesuai dengan standar akuntansi yang berlaku.</li><li>Melakukan audit terhadap stok barang untuk memastikan bahwa stok sesuai dengan catatan yang ada dan tidak ada kekurangan atau kelebihan stok yang tidak tercatat.</li><li>Memeriksa proses pengendalian internal perusahaan dan memberikan rekomendasi untuk meningkatkan efektivitas dan efisiensi proses tersebut.</li><li>Memeriksa proses penagihan dan pembayaran perusahaan untuk memastikan bahwa proses tersebut dilakukan dengan benar dan tidak ada kecurangan atau pelanggaran yang terjadi.</li><li>Melakukan audit atas risiko keamanan dan kepatuhan untuk memastikan bahwa perusahaan mengikuti standar keamanan dan peraturan yang berlaku.</li><li>Memeriksa kinerja operasional perusahaan dan memastikan bahwa perusahaan mencapai tujuan bisnisnya dengan efektif dan efisien.</li><li>Mengevaluasi kinerja penjualan perusahaan dan membandingkannya dengan target penjualan yang telah ditetapkan.</li><li>Memeriksa stok barang dan memastikan bahwa stok barang tersedia dalam jumlah yang cukup dan diatur dengan baik.</li><li>Melakukan audit atas kinerja karyawan dan mengevaluasi apakah karyawan mencapai tujuan dan sasaran kerja yang telah ditetapkan.</li><li>Memeriksa kinerja operasional perusahaan secara keseluruhan dan memberikan rekomendasi untuk meningkatkan efektivitas dan efisiensi proses operasional.</li><li>KPI (Key Performance Indicators) atau Indikator Kinerja Utama<ol type=\'a\'><li>Penjualan per karyawan: KPI ini mengukur seberapa banyak penjualan yang dihasilkan oleh setiap karyawan dan dapat digunakan untuk mengevaluasi kinerja karyawan secara individu.</li><li>Persentase stok kosong: KPI ini mengukur persentase waktu ketika stok barang kosong di dalam toko, dan dapat digunakan untuk mengidentifikasi masalah pasokan atau distribusi.</li><li>Rasio biaya penjualan: KPI ini mengukur efektivitas biaya yang dikeluarkan perusahaan untuk menghasilkan penjualan dan dapat digunakan untuk mengevaluasi kinerja operasional secara keseluruhan.</li><li>Rasio kepuasan pelanggan: KPI ini mengukur seberapa puas pelanggan dengan layanan dan produk perusahaan dan dapat digunakan untuk mengevaluasi kinerja keseluruhan dari sudut pandang pelanggan.</li><li>Rasio retensi karyawan: KPI ini mengukur persentase karyawan yang bertahan di perusahaan dan dapat digunakan untuk mengevaluasi efektivitas manajemen karyawan dan budaya organisasi.</li></ol></li></ol>', '2023-04-04 14:28:12'),
(7, 'Pramuniaga', '<ol><li>Tata kelola display</li><li>kebersihan toko, peralatan inventaris dan barang</li><li>persiapan order pelanggan</li><li>melayani dan membantu pelanggan di area sales (display)</li><li>mengirim pesanan pelanggan</li><li>melakukan sortir barang layak dan tidak layak</li><li>membantu operasional kasir dalam packing dan persiapan operasional dan tidak terbatas pada persiapan alat dan bahan</li><li>membantu, menjalankan dan memeriksa akses keamanan toko dan termasuk didalamnya tetapi tidak terbatas pada mengunci gerbang toko, keamanan semua peralatan inventaris dan aset toko</li><li>membantu, menjalankan dan memastikan tercapainya target, intruksi perusahaan atas team, kasir, dan PIC</li></ol>', '2023-04-04 14:31:20'),
(8, 'GENERAL KASIR', '<ol><li>Melayani pelanggan dengan ramah, cepat, dan profesional<ul><li>Sambut pelanggan dengan senyuman dan salam.</li><li>Dengarkan dengan baik kebutuhan pelanggan dan berikan solusi yang tepat.</li><li>Berikan penjelasan yang jelas tentang produk dan promosi yang tersedia.</li></ul></li><li>Mengoperasikan sistem kasir dan perangkat lunak terkait dengan benar<ul><li>Pelajari dan kuasai fungsi dan fitur sistem kasir.</li><li>Masukkan data dengan akurat dan pastikan transaksi terekam dengan benar.</li><li>Ikuti petunjuk untuk mengoperasikan perangkat lunak terkait.</li></ul></li><li>Melakukan transaksi pembelian dengan akurat dan menghitung kembalian dengan tepat<ul><li>Input item pembelian dengan benar dan periksa kembali sebelum melanjutkan transaksi.</li><li>Hitung total pembayaran dengan tepat dan berikan kembalian sesuai perhitungan yang benar.</li><li>Berikan struk pembayaran sebagai bukti transaksi kepada pelanggan.</li></ul></li><li>Menawarkan produk dan promosi kepada pelanggan dengan pengetahuan yang baik<ul><li>Kenali produk-produk yang dijual di LIDO29 dengan baik.</li><li>Informasikan kepada pelanggan tentang promosi, diskon, atau produk terkait yang dapat menarik minat mereka.</li><li>Berikan penjelasan yang jelas tentang fitur dan manfaat produk kepada pelanggan.</li></ul></li><li>Memeriksa kelengkapan dan kondisi barang saat pelanggan melakukan pembelian<ul><li>Periksa kelengkapan produk yang dibeli oleh pelanggan</li><li>Pastikan kondisi barang dalam keadaan baik dan sesuai dengan ekspektasi pelanggan.</li><li>Tindaklanjuti jika ada masalah dengan barang yang dibeli oleh pelanggan</li></ul></li><li>Mengelola kasir dan meja kas dengan rapi dan bersih<ul><li>Atur dan jaga kebersihan meja kas agar terlihat rapi dan profesional</li><li>Pastikan alat kasir seperti kalkulator, pen, dan struk pembayaran tersedia dengan baik.</li><li>Jaga kerapihan dan kebersihan area kerja kasir selama shift kerja</li></ul></li><li>Mengelola stok uang tunai dan melakukan pemeriksaan kas secara berkala<ul><li>Hitung uang tunai awal dan akhir shift dengan akurat</li><li>Periksa saldo uang tunai saat menerima dan menyerahkan kas</li><li>Catat semua transaksi uang tunai dengan rapi dan terperinci</li></ul></li><li>Memastikan kepatuhan terhadap kebijakan dan prosedur LIDO29<ul><li>Pahami dan patuhi kebijakan dan prosedur yang ditetapkan oleh LIDO29</li><li>Tindaklanjuti setiap instruksi atau perubahan kebijakan dari manajemen</li><li>Laporkan pelanggaran atau masalah yang melanggar kebijakan kepada atasan</li></ul></li><li>Mengikuti instruksi dan arahan dari manajemen<ul><li>Dengarkan dan ikuti instruksi atau arahan dari manajemen dengan cermat</li><li>Bertanya jika ada hal yang tidak jelas atau membutuhkan klarifikasi</li><li>Tindaklanjuti tugas atau tanggung jawab yang diberikan sesuai petunjuk</li></ul></li><li>Melakukan tugas administratif yang terkait dengan transaksi dan pelaporan<ul><li>Catat semua transaksi dengan benar dan lengkap</li><li>Buat laporan harian atau mingguan sesuai petunjuk</li><li>Jaga kerahasiaan data pelanggan dan transaksi yang dilakukan</li></ul></li></ol>', '2023-06-12 10:13:14'),
(9, 'PIC', '<ol><li>Melakukan Pengecekan dan memastikan&nbsp;&nbsp;jumlah nota kiriman dan surat jalan setiap gudang (rm, lido, gor) lengkap sesuai toko tujuan dan mengecek kesesuaian barang antara fisik dan nota kiriman saat bongkaran barang dari box (truck).</li><li>Melakukan pengecekan dan memastikan jumlah nota kiriman dari supplier lengkap sesuai antara fisik barang dan nota kiriman</li><li>melakukan&nbsp;<i>stock opname</i> secara partial (sebagian) untuk kategori&nbsp;<i>fast move</i> (rokok, roti basah,dll) secara periodik.(kategori rokok dilakukan stock opname partial setiap pergantian shift kasir)</li><li>Melakukan monitoring stok barang fast move terpenuhi dan stok barang slow move di limit</li><li>Memeriksa kelayakan produk meliputi: kebersihan dan keutuhan kemasan, tanggal expired masih aman konsumsi, dan aroma atau bau dari produk tidak berubah.&nbsp;</li><li>Memastikan dan melaporkan nota kiriman gor masih tersegel.</li><li>mengisi catatan hasil cek barang di surat jalan kiriman bila ditemukan ketidaksesuaian nota dan fisik barang.</li><li>Melaporkan transaksi pembelian dari supplier luar (Walls, Sari Roti, Setya, Breadtania, Nuget dll)</li><li>Membuat laporan keuangan harian sesuai pendapatan.</li><li>memastikan laporan panjang sesuai dengan tanggal dan dilakukan pencetakan di malam hari atau&nbsp;<i>shift</i> siang.</li><li>Memastikan nota penjualan sesuai dengan program IPOS dan melaporkan kepada yang berwenang.</li><li>memastikan&nbsp; barang yang dikembalikan telah dilakukan transaksi atau pengeluaran stok dari ipos.</li><li>mengisi laporan kas keluar atas pengeluaran kas dari uang toko.</li><li>merekap pencapaian target penjualan baik secara mingguan maupun bulanan sesuai dengan matrix target yang telah ditentukan.</li><li>Membuat jadwal&nbsp;<i>shift</i> dan jadwal libur tim secara&nbsp;<i>monthly</i> dan&nbsp;<i>weekly</i>.</li><li>Memonitoring jadwal shift tim pada setiap harinya dan memastikan tim mematuhi jadwal&nbsp;<i>shift</i> yang sudah dibuat.</li><li>Memastikan setiap tim sudah melakukan absensi melalui itaka.</li><li>Memonitoring kinerja tim dan melakukan&nbsp;<i>cover</i>/backup tim jika toko dalam keadaan urgent atau ada anggota tim yang off.</li><li>Melaksanakan&nbsp;<i>briefing</i> tim pada setiap harinya sesuai sop&nbsp;<i>briefing</i>.</li><li>Melakukan controlling terhadap timnya sesuai dengan pembagian tugas yang diberikan.</li><li>bersikap tegas terhadap timnya apabila ada tindak pelanggaran peraturan perusahaan.&nbsp;</li><li>Melakukan pengawasan kinerja setiap anggota timnya dan selalu siap memberikan arahan / bimbingan terkait operasional toko pada setiap timnya.&nbsp;</li><li>Melakukan training / bimbingan kepada tim terkait operasional toko sesuai dengan proporsi jabatannya masing masing.</li><li>Memastikan alamat tujuan nota tertuju kepada toko lido.</li><li>Memastikan jumlah fisik dan jenis barang sesuai dengan nota.</li><li>Melakukan input nota luar di program ipos, dan memastikan jumlah,jenis &amp; harga sesuai dengan nota.</li><li>Menyortir barang yang tidak layak jual/expired/rusak.</li><li>Melakukan transaksi retur pembelian di ipos sesuai jumlah fisik barang.</li><li>Packing sesuai dengan nota retur pembelian.</li><li>Melakukan retur pembelian atas nota luar.</li><li>Memastikan barang retur pembelian diterima oleh pihak Gudang BS.</li><li>Menanyakan member kepada pelanggan.</li><li>Melakukan transaksi penjualan sesuai fisik barang.</li><li>Menawarkan barang homebrand kepada pelanggan.</li><li>Menerima pembayaran dari pelanggan sesuai dengan jumlah nota dan cek keaslian uang.</li><li>Memastikan kebenaran nota penjualan bahwa barang tersebut benar berasal dari lido.</li><li>Melakukan transaksi retur penjualan apabila ada kesalahan pada transaksi sesuai syarat dan ketentuan yang berlaku.</li><li>Melakukan Pengawasan Terhadap Segala Aspek Keamanan Toko Sehingga Meminimalisir Tindak Pencurian Dan Tindak Kriminal Lain Yang Menyebabkan Kerugian Perusahaan.</li><li>Melakukan Pengecekan Terhadap Aset Toko Seperti (Komputer, Brankas, Meja Dan Rak, Gondola, Lampu Dll) Dalam Keadaan Baik Dan Memastikan Jika Ada Aset Rusak Sudah Dilaporkan.</li><li>Melakukan Pengawasan Terhadap Keamanan Keuangan Toko Saat Transaksi Dengan Memastikan Keaslian Uang.</li><li>Menjaga Aset Toko Seperti (Komputer, Brankas, Meja Dan Rak, Gondola, Lampu Dll) Dengan Cara Menggunakannya Dengan Baik Dan Benar.</li><li>Menyampaikan Promosi (Program) Perusahaan Yang Sedang Berjalan Kepada Team Dan Juga Menyampaikan Langsung Kepada Customer.</li><li>Membuat Target Per Karyawan Untuk Mencapai Target Yang Diberikan Oleh Perusahaan Sesuai Dengan Jabatan Dan Tanggung Jawabnya.</li><li>Memastikan Target Member Tercapai Dan Melakukan Penawaran Langsung Kepada Setiap Customer Yang Datang Ke Toko Maupun Via Sosmed.</li><li>Maintenance Member Dan Pelanggan Lido.</li><li>Melakukan Monitoring Achievement Target Monthly Pada Setiap Harinya Dan Melakukan Strategi Diikuti Dengan Aksi Untuk Mencapai Target.</li><li>Memastikan Apakah Semua Karyawan Sudah Mendapatkan Inventaris Seragam Atau Baju Produk Yang Diberikan Dari Perusahaan, Serta Id Card Yang Wajib Dimiliki Setiap Karyawan (Bagi Karyawan Yang&nbsp; Belum Mendapatkan&nbsp; Inventaris Seragam Dan Id Card Segera Ajukan Kepada Divisi Support Team Head Office).</li></ol>', '2023-06-12 10:23:59'),
(10, 'HELPER', '', '2023-07-30 10:40:27'),
(11, 'Karyawan Gudang', '<ol><li>Tata kelola display</li><li>kebersihan gudang, peralatan inventaris dan barang</li><li>persiapan order pelanggan</li><li>melayani dan membantu pelanggan di area sales (display)</li><li>mengirim pesanan pelanggan</li><li>melakukan sortir barang layak dan tidak layak</li><li>membantu operasional kasir gudang dalam packing dan persiapan operasional dan tidak terbatas pada persiapan alat dan bahan</li><li>membantu, menjalankan dan memeriksa akses keamanan toko dan termasuk didalamnya tetapi tidak terbatas pada mengunci gerbang, keamanan semua peralatan inventaris dan aset gudang</li><li>membantu, menjalankan dan memastikan tercapainya target, intruksi perusahaan atas team, kasir Gudang, dan PIC Gudang</li></ol>', '2023-09-01 17:49:25'),
(12, 'GENERAL AFFAIRS', '<ol><li>Manajemen Perangkat Keras (Hardware) Toko , Kantor, Gudang<ol><li>Identifikasi dan evaluasi kebutuhan perangkat keras di toko, kantor, dan gudang.</li><li>Perencanaan dan pengadaan perangkat keras seperti komputer kasir, printer, scanner barcode, CCTV, peralatan kantor, meja kasir, rak barang, dan peralatan penyimpanan di gudang.</li><li>Memastikan pemeliharaan rutin dengan pembuatan jadwal visitasi untuk maintenence dan perbaikan perangkat keras jika diperlukan di toko, kantor, dan gudang.</li><li>Mengatur inventarisasi perangkat keras dan pemantauan ketersediaan suku cadang di semua area</li></ol></li><li>Manajemen Perangkat Lunak (Software) Toko , Kantor, Gudang<ol><li>Pemantauan dan pemeliharaan perangkat lunak toko, termasuk aplikas IPOSi kasir dan perangkat lunak keamanan di toko, kantor, dan gudang.</li><li>Mengelola pembaruan perangkat lunak dan memastikan kepatuhan dengan lisensi perangkat lunak di semua area.</li><li>Penanganan permasalahan teknis terkait perangkat lunak dan memberikan dukungan kepada karyawan di toko, kantor, dan gudang.</li></ol></li><li>Manajemen Infrastruktur Toko<ol><li>Perencanaan dan pengadaan infrastruktur fisik di toko, seperti meja kasir, rak barang, gondola barang, dan peralatan lainnya.</li><li>Pemantauan dan pemeliharaan infrastruktur fisik untuk menjaga agar tetap dalam kondisi baik di toko, kantor, dan gudang.</li><li>Memastikan kepatuhan terhadap standar keselamatan dan keamanan dalam infrastruktur di semua area.</li></ol></li><li>Manajemen Jaringan<ol><li>Perencanaan, instalasi, dan pemeliharaan jaringan komunikasi antara toko, kantor, gudang, dan kantor pusat.</li><li>Konfigurasi perangkat jaringan, termasuk router, switch, dan access point di semua area.</li><li>Pemantauan kinerja jaringan dan penanganan masalah jaringan yang mungkin timbul di seluruh area.</li><li>Memastikan keamanan jaringan dan melindungi data sensitif di semua area.</li></ol></li><li>Keamanan Data<ol><li>Memastikan keamanan dan backup data yang disimpan di toko, kantor, dan gudang.</li><li>Implementasi langkah-langkah keamanan data, termasuk akses terbatas ke sistem dan perlindungan terhadap ancaman siber di semua area.</li><li>Penanganan insiden keamanan dan pemulihan data jika terjadi kerusakan atau hilangnya data di semua area.</li></ol></li><li>Pengadaan dan Pemeliharaan Perangkat<ol><li>Mengidentifikasi dan mengevaluasi kebutuhan perangkat keras dan perangkat lunak baru di toko, kantor, dan gudang.</li><li>Menegosiasikan kontrak dengan penyedia perangkat keras dan perangkat lunak di semua area.</li><li>Mengelola pemeliharaan rutin dan perbaikan perangkat keras di toko, kantor, dan gudang.</li><li>Memantau pembaruan perangkat lunak dan memastikan lisensi tetap berlaku di semua area.</li></ol></li><li>Manajemen Anggaran Infrastruktur<ol><li>General affair Merencanakan anggaran untuk departemen infrastruktur dan jaringan di semua area.</li><li>General affair Memantau pengeluaran dan biaya terkait infrastruktur dan jaringan.</li><li>General affair diwajibkan membuat laporan anggaran berkala terkait seluruh inventaris barang.</li><li>Selain itu LPJ untuk setiap pembelian dan pengadaan barang harus dibuat secara terperinci dan dilaporkan kepada Direksi Finance maupun Operasional.</li></ol></li><li>Koordinasi dengan Pihak Ketiga<ol><li>Berinteraksi dengan vendor, kontraktor, dan penyedia layanan yang terlibat dalam instalasi, pemeliharaan, atau perbaikan infrastruktur dan jaringan di semua area.</li><li>Mengawasi kontrak dengan pihak ketiga dan memastikan kualitas layanan yang baik di toko, kantor, dan gudang.</li></ol></li><li>Perencanaan Kapasitas<ol><li>Memantau penggunaan infrastruktur dan jaringan untuk memastikan kapasitas yang memadai di toko, kantor, dan gudang.</li><li>Merencanakan peningkatan kapasitas jika diperlukan untuk mengakomodasi pertumbuhan bisnis di semua area.</li></ol></li></ol>', '2023-09-14 09:20:29'),
(16, 'PURCHASE STAFF', '', '2025-02-01 05:57:38');

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
(1, 0, 'Timelinetimeline', 'Timelinetimeline', 'Timelinetimeline', '2025-10-23 15:20:46', '2025-10-23 15:20:46', NULL),
(2, 1, 'TM-1-1', 'seleksi administrasi', '', '2025-10-23 09:28:00', '2025-10-24 09:28:00', 1),
(3, 1, 'TM-1-2', 'test 1', '', '2025-10-25 09:28:00', '2025-10-26 09:28:00', 0),
(4, 1, 'TM-1-3', 'pengumuman lolos', '', '2025-10-27 09:29:00', '2025-10-27 17:00:00', 0),
(5, 2, 'TM-2-1', 'seleksi administrasi', '', '2025-10-27 10:14:00', '2025-10-28 10:14:00', 0),
(6, 2, 'TM-2-2', 'test 1', '', '2025-10-28 10:14:00', '2025-10-28 17:00:00', 0);

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
  `created_date` datetime NOT NULL,
  `users_token` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `email`, `role`, `status`, `gambar`, `created_date`, `users_token`) VALUES
(5, 'Super Admin', 'rndethes', '5473adde851a226bf69bcbc0fbe5bf7b', 'superadmin@gmail.com', 1, 1, 'logo_ethes4.png', '2022-07-30 19:09:56', 'c8nakUKcVX5BLNnCTtcnni:APA91bEIo0a23GRwKALfGINuLa-fKhKtoiJKJXF-dYIV_f3cMb9ewuEvPJj3di0or-_byqhqMKupkQgVlWTZNWexEq_Fv1JOHTo7yj4FIYc2_KRmP7R5WfQ'),
(45, 'Panca Marlendi', 'pancamarlendi', '6694927a77f4c5334ec5e818bc7bb845', 'chr@lido29.com', 3, 2, '120220901.png', '2022-08-02 11:45:20', 'cmkqD-66RwUfaJFFmV20c3:APA91bG5CVb41EXvjITSkx_AwNbpKkJQRRj4B1p8Z_rj9o9T67r4KosJE8_A3oXKAerOhn71_tplTTviJlQnfgyE6oHcA6qZOLVSE_j1yH__7oRN1_0sACy_npjxSzBnuB_4B-om1s_U'),
(51, 'Beni D Pridika', 'bpridika18', 'be714340799513ef144dcbb20703ef9a', 'bpridika@lido.id', 1, 1, '120220831.png', '2022-08-17 15:12:45', 'c8u9XwMpRFRyr1MboQ0Idm:APA91bFkuDW6SDVIh4zuvakURXcUNip9FMOHETtfTDzbpaA0CQOOYWz8pyYi3py9cB_mInr4wMlwrRSnlgD7ARjkOQ23caqSblPMilZRf7Ie5uIOEkmLY80'),
(58, 'PURWO GIRI', 'omnlido29', 'f207fbdb0ef337934a787cea3f648fbb', 'omn@lido29.com', 2, 1, 'user_default.jpg', '2023-06-28 13:45:03', 'cFcnmfsZUsvD6SnVVMGzY0:APA91bEKURYV2Mts_Q3oE2yC3ZIpDn1tvaK5INKxtGgDRAnqRhnOSejesDhjX5e9ax5yl7-_ait63Rw0hC0pfyQ8UIWsoKMBl-ONNd-3JjvPZACMHpmJRwM'),
(60, 'EKO WIDIYANTO', 'ekolido29', 'af7b998d377d3739d025695cd50b2791', 'eko@lido29.com', 2, 2, 'user_default.jpg', '2023-07-10 06:48:43', NULL),
(61, 'RONALDO Y', 'edolido29', '4acea9cf3008404f585fd68122203f23', 'edo@lido29.com', 2, 2, 'user_default.jpg', '2023-07-10 06:49:18', NULL),
(62, 'user', 'user', '202cb962ac59075b964b07152d234b70', 'user@user.com', 3, 2, 'user_default.jpg', '2023-08-24 06:48:47', NULL),
(63, 'Najib', 'najibhrlido', 'b29afdb3601b2dec576d27dcbf226a60', 'chr@lido29.com', 3, 2, 'user_default.jpg', '2023-12-20 15:03:23', 'cxGqedjZDhNSxetcRnKRqV:APA91bHnVwIm8aC_TApsalYdQDUSDD_H5rYNgeOQT4e1TOJinD6X2flPCSSk-iu744dJSOckU1RJOW-m2K9dOCSbJ50EWAObNmRxHSJsxABncUPJy1F7Y4ZrMY2p6TvrsEdwugydThHT'),
(64, 'BELA RAMDANI', 'belaauditor', 'cfab171b6f859be82fe24b92789cd57d', 'auditor3.lido@gmail.com', 3, 2, 'user_default.jpg', '2024-02-07 08:32:07', NULL),
(65, 'ERI SETYANA', 'eriadmaudit', '6cd74eb84385032207987249acef9cbe', 'admauditor.lido@gmail.com', 3, 1, 'user_default.jpg', '2024-02-19 08:26:43', 'd1F-hi6-WS8Crd48DQ9O4a:APA91bFFAvZeA3nK41ryT_-Ge2iq7AA3jvDw7FY6wKA98lPD41yCUYH1USvEdL1bCmk3JdTXLwQ7wESFlMeDKuVULqnuH6LnOBcml4lVNCRuCUTIQa6ZQedvBUUNM41TtvsG8A7c1vN0'),
(66, 'AYU LAYUTSA', 'ayulayutsa', 'c1f8a56df25c33eefd8d0ca07d4641e8', 'auditor1.lido@gmail.com', 3, 2, 'user_default.jpg', '2024-05-06 12:05:39', 'cCBm5icq4hH7a7BC8QufBm:APA91bHabM3XSY0o2Gyg4_sgFfn8_CYWvOKhRdXowFOCcpkKN5szb9N7klX5n5aQ_O_TV2MwnD2NgIHmg8lOqgKI-hKQSUcUv4dVXoLEh1TIsE0K5W3Nxjc'),
(67, 'SASKA SYIFA', 'saskasyifa', 'b46c4665a958e85d595513e5ad38c283', 'chr@lido29.com', 3, 2, 'user_default.jpg', '2024-05-20 08:43:26', 'dgrD8REq1NaDiWYCQlJw6o:APA91bGYMAduqQ3VPc_qVuHV-BOpRNNCtLq7pS8E7DnQzAxQ-pLtuw6Kysbcr3oBa_85t0Xq0gDAqAXpQe3oArQDefSe8I-5Og3AuVTT4h5_zhVmL_y9N2rsxfMm8y_vHEmgHaGCT23v'),
(68, 'CHR LIDO29', 'chrlido29', '3c51eb0fb8d7de09224a70b46478909c', 'chr@lido29.com', 3, 1, 'user_default.jpg', '2025-06-02 11:37:03', 'cQoPiVOf6nwR49rlpNeT3K:APA91bE_HfwjRN5eitklJpNTBJzgHNpVie-12LYf3aSHx0X-GzTN7exieuQ4p-u5TwYo0gBS9seU5etn0ZpXdOR8Dp3yLycqriAijrUNWLRupdblVTvggIU'),
(69, 'KUSNO', 'womlido29', '6971e46241de64e6b6692bda23e09c58', 'wom.lido29@gmail.com', 2, 1, 'user_default.jpg', '2025-07-15 15:04:04', 'foLo1mbzdSSyRTidQKHwzt:APA91bHkP_is5nRzpisZNEtDNOylMVCIq2a1As1KpjLoPePUMYQxo-o8V78H17_QYUhyS9Zma2pe0JxW3h8CSDwZ8HqZMJX4ypq1TrM2A9z6ZhDd5U-8PUw');

-- --------------------------------------------------------

--
-- Table structure for table `users_itaka`
--

CREATE TABLE `users_itaka` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(60) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` varchar(10) DEFAULT NULL,
  `state` varchar(10) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users_itaka`
--

INSERT INTO `users_itaka` (`id`, `username`, `name`, `email`, `telp`, `password`, `role_id`, `state`) VALUES
(1, 'admin', 'Admin iTaka', 'tresno.koe@gmail.com', '', '72f4f10a40c4be8fbf63b79cbf21abca', '2', '1'),
(2, 'hansen A', 'Noemi D\'Amore', 'damaris04@gmail.com', '123', '6c5b77bc23a2bcaa5ee5af7eb4938d5a', '2', '1'),
(3, 'beni', 'Beni Dwi Pridika', 'beni.pridika@gmail.com', '-', '9c683db502bb982f060062d7e4fa8746', '1', '1'),
(4, 'super', 'Admin iTaka', 'tresno.koe@gmail.com', '', '3672bd4a8a011877bce518a622623616', '1', '1'),
(6, 'rangga', 'Rangga', 'rangga@itaka.com', '-', 'bfa76d1758dea96a14806d8a28e26cd9', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `v_workleave`
--

CREATE TABLE `v_workleave` (
  `id_cuti` int(11) DEFAULT NULL,
  `cuti_id_karyawan` varchar(15) DEFAULT NULL,
  `tanggal_pengajuan` date DEFAULT NULL,
  `tanggal_cuti` date DEFAULT NULL,
  `lama_cuti` varchar(50) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `respon_cuti` text DEFAULT NULL,
  `kuota_cuti` varchar(50) DEFAULT NULL,
  `status` varchar(60) DEFAULT NULL,
  `time_update` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `ttl` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `id_karyawan` varchar(15) DEFAULT NULL,
  `foto` varchar(500) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `email_second` varchar(200) DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `no_hp` varchar(14) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `alamat` varchar(120) DEFAULT NULL,
  `no_kontrak` varchar(100) DEFAULT NULL,
  `status_kontrak` int(11) DEFAULT NULL,
  `tgl_kntrk` date DEFAULT NULL,
  `cuti_akses` int(50) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `division` varchar(255) DEFAULT NULL,
  `id_office` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `v_workleavewait`
--

CREATE TABLE `v_workleavewait` (
  `id_cuti` int(11) DEFAULT NULL,
  `id_karyawan` varchar(15) DEFAULT NULL,
  `tanggal_pengajuan` date DEFAULT NULL,
  `tanggal_cuti` date DEFAULT NULL,
  `lama_cuti` varchar(50) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `respon_cuti` text DEFAULT NULL,
  `kuota_cuti` varchar(50) DEFAULT NULL,
  `status` varchar(60) DEFAULT NULL,
  `time_update` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `ttl` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `foto` varchar(500) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `email_second` varchar(200) DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `no_hp` varchar(14) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `alamat` varchar(120) DEFAULT NULL,
  `no_kontrak` varchar(100) DEFAULT NULL,
  `status_kontrak` int(11) DEFAULT NULL,
  `tgl_kntrk` date DEFAULT NULL,
  `cuti_akses` int(50) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `division` varchar(255) DEFAULT NULL,
  `id_office` varchar(60) DEFAULT NULL,
  `id_division` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activation`
--
ALTER TABLE `activation`
  ADD PRIMARY KEY (`id_activation`),
  ADD KEY `id_name_activation` (`id_name_activation`);

--
-- Indexes for table `background_idcard`
--
ALTER TABLE `background_idcard`
  ADD PRIMARY KEY (`id_background`);

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
-- Indexes for table `beneficial_history`
--
ALTER TABLE `beneficial_history`
  ADD PRIMARY KEY (`id_beneficial_hs`);

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
-- Indexes for table `contract_history`
--
ALTER TABLE `contract_history`
  ADD PRIMARY KEY (`id_contract_history`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id_division`);

--
-- Indexes for table `employees_old`
--
ALTER TABLE `employees_old`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barcode` (`id_barcode`);

--
-- Indexes for table `employee_off`
--
ALTER TABLE `employee_off`
  ADD PRIMARY KEY (`id_employee_off`);

--
-- Indexes for table `form_karyawan`
--
ALTER TABLE `form_karyawan`
  ADD PRIMARY KEY (`id_form`);

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
-- Indexes for table `message_lido_career`
--
ALTER TABLE `message_lido_career`
  ADD PRIMARY KEY (`id_ms`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id_permission`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_role` (`id_role`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_about`
--
ALTER TABLE `setting_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_cuti`
--
ALTER TABLE `setting_cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_homepage`
--
ALTER TABLE `setting_homepage`
  ADD PRIMARY KEY (`id_hp`);

--
-- Indexes for table `setting_landingpage`
--
ALTER TABLE `setting_landingpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_letter`
--
ALTER TABLE `setting_letter`
  ADD PRIMARY KEY (`id_setting_letter`);

--
-- Indexes for table `setting_social`
--
ALTER TABLE `setting_social`
  ADD PRIMARY KEY (`id_sc`);

--
-- Indexes for table `tbl_background`
--
ALTER TABLE `tbl_background`
  ADD PRIMARY KEY (`id_background`);

--
-- Indexes for table `tbl_badanhukum`
--
ALTER TABLE `tbl_badanhukum`
  ADD PRIMARY KEY (`id_badanhukum`);

--
-- Indexes for table `tbl_beneficial`
--
ALTER TABLE `tbl_beneficial`
  ADD PRIMARY KEY (`id_beneficial`);

--
-- Indexes for table `tbl_beneficial_item`
--
ALTER TABLE `tbl_beneficial_item`
  ADD PRIMARY KEY (`id_beneficial_item`);

--
-- Indexes for table `tbl_content`
--
ALTER TABLE `tbl_content`
  ADD PRIMARY KEY (`id_content`);

--
-- Indexes for table `tbl_departement`
--
ALTER TABLE `tbl_departement`
  ADD PRIMARY KEY (`id_departement`),
  ADD KEY `id_division` (`id_division`);

--
-- Indexes for table `tbl_divisi`
--
ALTER TABLE `tbl_divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `tbl_file_karyawan`
--
ALTER TABLE `tbl_file_karyawan`
  ADD PRIMARY KEY (`id_file_karyawan`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_kontrak`
--
ALTER TABLE `tbl_kontrak`
  ADD PRIMARY KEY (`id_kontrak`);

--
-- Indexes for table `tbl_kontrak_detail`
--
ALTER TABLE `tbl_kontrak_detail`
  ADD PRIMARY KEY (`id_kontrak_detail`);

--
-- Indexes for table `template_letter`
--
ALTER TABLE `template_letter`
  ADD PRIMARY KEY (`id_template_letter`);

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
-- Indexes for table `users_itaka`
--
ALTER TABLE `users_itaka`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activation`
--
ALTER TABLE `activation`
  MODIFY `id_activation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=520;

--
-- AUTO_INCREMENT for table `background_idcard`
--
ALTER TABLE `background_idcard`
  MODIFY `id_background` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `batch_job`
--
ALTER TABLE `batch_job`
  MODIFY `id_batch_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `batch_timeline`
--
ALTER TABLE `batch_timeline`
  MODIFY `id_batch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `beneficial_history`
--
ALTER TABLE `beneficial_history`
  MODIFY `id_beneficial_hs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `candidate_experience`
--
ALTER TABLE `candidate_experience`
  MODIFY `id_ce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `candidate_file`
--
ALTER TABLE `candidate_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `candidate_study`
--
ALTER TABLE `candidate_study`
  MODIFY `id_candidate_study` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `candidate_token`
--
ALTER TABLE `candidate_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contract_history`
--
ALTER TABLE `contract_history`
  MODIFY `id_contract_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id_division` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees_old`
--
ALTER TABLE `employees_old`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `employee_off`
--
ALTER TABLE `employee_off`
  MODIFY `id_employee_off` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT for table `form_karyawan`
--
ALTER TABLE `form_karyawan`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `history_apply`
--
ALTER TABLE `history_apply`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `history_timeline`
--
ALTER TABLE `history_timeline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_vacancy`
--
ALTER TABLE `job_vacancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `link_timeline`
--
ALTER TABLE `link_timeline`
  MODIFY `id_link` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message_lido_career`
--
ALTER TABLE `message_lido_career`
  MODIFY `id_ms` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id_permission` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_about`
--
ALTER TABLE `setting_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_cuti`
--
ALTER TABLE `setting_cuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `setting_homepage`
--
ALTER TABLE `setting_homepage`
  MODIFY `id_hp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_landingpage`
--
ALTER TABLE `setting_landingpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_letter`
--
ALTER TABLE `setting_letter`
  MODIFY `id_setting_letter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=386;

--
-- AUTO_INCREMENT for table `setting_social`
--
ALTER TABLE `setting_social`
  MODIFY `id_sc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_background`
--
ALTER TABLE `tbl_background`
  MODIFY `id_background` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_badanhukum`
--
ALTER TABLE `tbl_badanhukum`
  MODIFY `id_badanhukum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_beneficial`
--
ALTER TABLE `tbl_beneficial`
  MODIFY `id_beneficial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `tbl_beneficial_item`
--
ALTER TABLE `tbl_beneficial_item`
  MODIFY `id_beneficial_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=464;

--
-- AUTO_INCREMENT for table `tbl_content`
--
ALTER TABLE `tbl_content`
  MODIFY `id_content` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_departement`
--
ALTER TABLE `tbl_departement`
  MODIFY `id_departement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_divisi`
--
ALTER TABLE `tbl_divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_file_karyawan`
--
ALTER TABLE `tbl_file_karyawan`
  MODIFY `id_file_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `tbl_kontrak`
--
ALTER TABLE `tbl_kontrak`
  MODIFY `id_kontrak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_kontrak_detail`
--
ALTER TABLE `tbl_kontrak_detail`
  MODIFY `id_kontrak_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=353;

--
-- AUTO_INCREMENT for table `template_letter`
--
ALTER TABLE `template_letter`
  MODIFY `id_template_letter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id_timeline` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `users_itaka`
--
ALTER TABLE `users_itaka`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
