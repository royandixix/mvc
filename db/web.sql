-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2024 at 11:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `web`
--

CREATE TABLE `web` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `pengalaman` varchar(100) NOT NULL,
  `umur` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kampus` varchar(100) NOT NULL,
  `asal_daerah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `web`
--

INSERT INTO `web` (`id`, `nama`, `jabatan`, `pengalaman`, `umur`, `alamat`, `kampus`, `asal_daerah`) VALUES
(1, 'Royandi', 'Frontend Developer', '1 tahun', '21', 'Jalan Perintis, Makassar', 'Universitas Dipa Makassar', 'Sulawesi Barat, Mamuju'),
(2, 'Vani', 'Backend Developer', '3 tahun', '26', 'Jalan Sudirman, Jakarta', 'Universitas Indonesia', 'Jakarta, Jakarta'),
(3, 'Putri', 'Frontend Developer', '3 tahun', '24', 'Jalan Gatot Subroto, Bandung', 'Institut Teknologi Bandung', 'Jawa Barat, Bandung'),
(4, 'Gelln', 'Frontend Developer', '3 tahun', '28', 'Jalan Raya, Surabaya', 'Universitas Airlangga', 'Jawa Timur, Surabaya'),
(5, 'Lina', 'UI/UX Designer', '2 tahun', '22', 'Jalan Merdeka, Yogyakarta', 'Universitas Gadjah Mada', 'Yogyakarta, Yogyakarta'),
(6, 'Adi', 'Backend Developer', '4 tahun', '29', 'Jalan Pemuda, Semarang', 'Universitas Diponegoro', 'Jawa Tengah, Semarang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `web`
--
ALTER TABLE `web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
