-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2021 at 02:57 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `responsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `kode_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `tgl_datang` date NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `status_barang` varchar(20) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`kode_barang`, `nama_barang`, `jumlah`, `satuan`, `tgl_datang`, `kategori`, `status_barang`, `harga`) VALUES
('KUR', 'Kursi', 200, 'unit', '2016-03-11', 'Alat Tulis Kantor', 'Baik', 75000),
('TNH01', 'Tanah Bangunan Utama', 350, 'm2', '2015-11-05', 'Bangunan', 'baik', 2750000),
('AC370', 'Laptop Acer 4370Z', 10, 'buah', '2015-07-02', 'Elektronik', 'rusak', 6750000),
('CMPi5', 'Komputer HP Core i5', 25, 'unit', '2016-05-04', 'Elektronik', 'baik', 12750000),
('HND01', 'Honda CR-V 2016', 3, 'unit', '2016-04-01', 'Kendaraan', 'baik', 570000000),
('TYT01', 'Toyota Camry 2015', 5, 'unit', '2015-10-10', 'Kendaraan', 'baik', 345000000);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`username`, `password`, `nama_lengkap`, `email`, `no_tlp`) VALUES
('admin', '123', 'Ekky R', 'admin@admin.com', '082133236681'),
('admin2', '234', 'Ramadhan ', 'admin2@admin.com', '0821111111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
