-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 06:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_imk`
--

-- --------------------------------------------------------

--
-- Table structure for table `konser`
--

CREATE TABLE `konser` (
  `id` char(64) NOT NULL,
  `nama_konser` varchar(64) NOT NULL,
  `artis` varchar(64) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `tempat` varchar(32) NOT NULL,
  `lowest_price` int(11) NOT NULL,
  `foto` varchar(32) NOT NULL,
  `kategori` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konser`
--

INSERT INTO `konser` (`id`, `nama_konser`, `artis`, `tanggal`, `jam`, `tempat`, `lowest_price`, `foto`, `kategori`, `status`) VALUES
('096f0839-339f-454c-a200-9ca70c3f4d6c', 'Asia Tour 2024', 'Incubus', '2024-04-24', '19:00:00', 'Singapore', 2000000, 'asiatour.jpg', 5, 1),
('14b05e82-17f7-4f71-9a29-32e86c0fd190', 'A Beautiful Blur', 'LANY', '2024-10-09', '20:00:00', 'Seoul', 900000, 'beautifulblur.jpg', 5, 1),
('17f09252-da43-4e3a-8673-c20360a58a06', 'Synk: Parallel line', 'AESPA', '2024-08-24', '12:00:00', 'Shanghai', 1000000, 'parallelline.jpg', 3, 1),
('26b2ff52-71d1-4ac1-b77b-3da620d4df72', 'H.E.R WORLD TOUR', 'IU', '2024-04-28', '14:00:00', 'Jakarta', 1000000, 'herworldtour.jpg', 5, 0),
('3475438b-2e48-4923-9567-cc12b78a74db', 'World Tour Live', 'Festival', '2024-04-27', '11:00:00', 'Bandung', 600000, 'worldtourlive.jpeg', 4, 1),
('3522ac3b-0ea8-463c-86fd-bcccf60f1e0f', 'The Show', 'Niall Horan', '2024-05-11', '10:00:00', 'Bali', 1200000, 'theshow.jpg', 3, 1),
('53f31215-b81c-4519-8d78-a035fa775213', 'Live in Jakarta', 'YOASOBI', '2024-01-16', '18:00:00', 'Jakarta', 1000000, 'liveinjakarta.jpg', 5, 1),
('77227975-afcb-4b73-bbe0-1b662fa84eaf', 'Tur Manusia', 'Tulus', '2024-02-05', '17:00:00', 'Bogor', 800000, 'turmanusia.jpg', 4, 1),
('77fa8b6a-90d3-4e7d-bc8a-d1e4917f3455', 'The Tour', 'Jonas Brother', '2024-02-24', '13:00:00', 'Kuala Lumpur', 1500000, 'thetour.jpg', 6, 1),
('7be0aae2-78b3-44b0-83dc-ed8d8209c2aa', 'Joyland Festival Bali', 'Joyland', '2024-03-01', '16:00:00', 'Bali', 800000, 'joyland.jpg', 4, 1),
('865101f6-1c7f-4418-9386-42b17fbcbe3e', 'We the Fest', 'Festival', '2024-06-20', '20:00:00', 'Singapore', 1000000, 'wethefest.jpg', 4, 1),
('920e4145-880e-4fba-b2d0-0fe3bef8cf7b', 'Mathematics Tour', 'Ed Sheeran', '2024-03-02', '08:00:00', 'Jakarta', 1200000, 'mathematicstour.jpg', 6, 1),
('b279a445-e05c-4b77-9646-28a67330713e', 'Faith in the future', 'Louis Tomlinson', '2024-01-24', '15:00:00', 'Shanghai', 700000, 'faithinthefuture.jpg', 5, 1),
('c79a0188-4412-4aa0-8e21-3f2335b3353f', 'Rhapsody Nusantara', 'Festival', '2024-05-11', '16:00:00', 'Bali', 600000, 'rhapsodynusantara.png', 6, 1),
('d44e597c-e7a7-45ea-bb51-3e0b73173a62', 'Lalala Festival', 'Festival', '2024-08-25', '17:00:00', 'Seoul', 500000, 'lalalafestival.jpeg', 6, 1),
('ec0f3bf0-6af7-42c5-9c0c-3db89a44ea73', 'Relay Tour', 'Treasure', '2024-06-29', '12:00:00', 'Kuala Lumpur', 1300000, 'relaytour.jpg', 5, 1),
('f4620896-1d02-11ef-9dd1-60e32b9197c1', 'Neo City - The Unity', 'NCT 127', '2024-01-13', '11:00:00', 'Jakarta', 500000, 'neocity.jpg', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` char(64) NOT NULL,
  `id_user` char(64) NOT NULL,
  `id_konser` char(64) NOT NULL,
  `jenis` varchar(5) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_user`, `id_konser`, `jenis`, `jumlah`, `timestamp`) VALUES
('1a54d1cf-2422-11ef-b5fb-60e32b9197c1', '03848da9-1dd2-11ef-997e-60e32b9197c1', '096f0839-339f-454c-a200-9ca70c3f4d6c', 'VIP', 2, '2024-06-06 16:30:36'),
('331b0061-1e3d-11ef-94a4-60e32b9197c1', 'ac0c210c-1e3c-11ef-94a4-60e32b9197c1', 'd44e597c-e7a7-45ea-bb51-3e0b73173a62', 'VIP', 3, '2024-05-30 04:29:26'),
('48ccb14c-1e38-11ef-94a4-60e32b9197c1', '1088a6cc-1e38-11ef-94a4-60e32b9197c1', 'ec0f3bf0-6af7-42c5-9c0c-3db89a44ea73', 'VIP', 10, '2024-05-30 03:54:16'),
('5c900518-1de1-11ef-b9f5-60e32b9197c1', 'c594e249-1d68-11ef-bca9-60e32b9197c1', '920e4145-880e-4fba-b2d0-0fe3bef8cf7b', 'CAT 5', 5, '2024-05-29 17:32:02'),
('6d821e89-1e39-11ef-94a4-60e32b9197c1', 'e13d96a9-1e38-11ef-94a4-60e32b9197c1', '3522ac3b-0ea8-463c-86fd-bcccf60f1e0f', 'CAT 2', 10, '2024-05-30 04:02:27'),
('7cc12828-1e39-11ef-94a4-60e32b9197c1', 'e13d96a9-1e38-11ef-94a4-60e32b9197c1', '14b05e82-17f7-4f71-9a29-32e86c0fd190', 'VIP', 2, '2024-05-30 04:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` char(64) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  `no_telp` varchar(16) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `nik`, `email`, `no_telp`, `password`) VALUES
('03848da9-1dd2-11ef-997e-60e32b9197c1', 'lala', '1234567891234567', 'c14220061@john.petra.ac.id', '081238823833', '$2y$10$SxhamHIFYu0YhuXAZ07TQuFIYpav3w9uKeHURzjcuKZ3.48KOZjy2'),
('1088a6cc-1e38-11ef-94a4-60e32b9197c1', 'William Saputra', '3333333333333333', 'william@gmail.com', '08128889999000', '$2y$10$qgYcLtXmA4zv1.t6hDrzXeR2KGgRXYU9QkAQrMrTVVDe5RtPUx9ay'),
('ac0c210c-1e3c-11ef-94a4-60e32b9197c1', 'vincent', '1234567891111111', 'vincent@gmail.com', '0812312318', '$2y$10$BICt8nzLcp67A6HS/255E.gNCOvCpz63zTCHYztqcPXtER8AmZgdq'),
('c594e249-1d68-11ef-bca9-60e32b9197c1', 'ebet', '1234567891234569', 'elizabethceline04@gmail.com', '081238823832', '$2y$10$5/PpZtonAMUnRPLKoT6/TO5OCp1dh69y2z6Azvb8ExRFu8XXQeQ02'),
('e13d96a9-1e38-11ef-94a4-60e32b9197c1', 'aaaaaaa', '1221122112211221', 'a@gmail.com', '11122222333333', '$2y$10$w.5qpkWAFTAYEMBGSZwxQOoseQbtRAxWwg8gh2SMU0vetqJ8eus1S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konser`
--
ALTER TABLE `konser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_konser` (`id_konser`),
  ADD KEY `fk_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_konser` FOREIGN KEY (`id_konser`) REFERENCES `konser` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
