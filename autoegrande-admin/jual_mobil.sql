-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 06:17 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jual_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `ID_DEALER` char(3) NOT NULL,
  `NAMA_DEALER` varchar(10) NOT NULL,
  `KOTA_DEALER` varchar(20) NOT NULL,
  `ALAMAT_DEALER` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`ID_DEALER`, `NAMA_DEALER`, `KOTA_DEALER`, `ALAMAT_DEALER`) VALUES
('D01', 'MOBILISTA', 'BANDUNG', 'JL. SRIGUNTING RAYA NO.134'),
('D02', 'DIAPRO', 'SEMARANG', 'JL. CISARANTEN KULON NO.888'),
('D03', 'PREMIUM', 'SURABAYA', 'JL. NGAGEL JAYA NO.49'),
('D04', 'ROCKOS', 'JAKARTA', 'JL. TB SIMATUPANG NO.667'),
('D05', 'JUNIOR', 'RIAU', 'JL. LEUWI PANJANG NO.96');

-- --------------------------------------------------------

--
-- Table structure for table `merek_mobil`
--

CREATE TABLE `merek_mobil` (
  `ID_MEREK_MOBIL` char(3) NOT NULL,
  `NAMA_MEREK_MOBIL` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merek_mobil`
--

INSERT INTO `merek_mobil` (`ID_MEREK_MOBIL`, `NAMA_MEREK_MOBIL`) VALUES
('B01', 'TOYOTA'),
('B02', 'LEXUS'),
('B03', 'FERRARI'),
('B04', 'LAND ROVER'),
('B05', 'JAGUAR');

-- --------------------------------------------------------

--
-- Table structure for table `nama_mobil`
--

CREATE TABLE `nama_mobil` (
  `ID_MOBIL` char(6) NOT NULL,
  `ID_MEREK_MOBIL` char(3) NOT NULL,
  `NAMA_MOBIL` varchar(30) NOT NULL,
  `HARGA_MOBIL` float(12,0) NOT NULL,
  `SPESIFIKASI` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nama_mobil`
--

INSERT INTO `nama_mobil` (`ID_MOBIL`, `ID_MEREK_MOBIL`, `NAMA_MOBIL`, `HARGA_MOBIL`, `SPESIFIKASI`) VALUES
('C0101', 'B01', 'VELLFIRE', 0, NULL),
('C0103', 'B01', 'TOYOTA 86', 0, NULL),
('C0201', 'B02', 'RX 200T', 0, NULL),
('C0202', 'B02', 'RX 350 F', 0, NULL),
('C0203', 'B02', 'LX 570', 0, NULL),
('C0301', 'B03', '458 ITALIA', 0, NULL),
('C0302', 'B03', 'FF', 0, NULL),
('C0303', 'B03', 'LaFERRARI', 0, NULL),
('C0401', 'B04', 'DISCOVERY', 0, NULL),
('C0402', 'B04', 'DEFENDER', 0, NULL),
('C0403', 'B04', 'FREELANDER', 0, NULL),
('C0501', 'B05', 'XF 3.0 V6', 0, NULL),
('C0502', 'B05', 'XJ 5.0', 0, NULL),
('C0503', 'B05', 'F-TYPE S', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `ID_PEGAWAI` char(5) NOT NULL,
  `ID_PEKERJAAN` char(3) DEFAULT NULL,
  `NAMA_PEGAWAI` varchar(10) NOT NULL,
  `ALAMAT_PEGAWAI` varchar(30) NOT NULL,
  `NO_TLP_PEGAWAI` varchar(15) NOT NULL,
  `USERNAME_PEGAWAI` varchar(12) NOT NULL,
  `PASSWORD_PEGAWAI` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`ID_PEGAWAI`, `ID_PEKERJAAN`, `NAMA_PEGAWAI`, `ALAMAT_PEGAWAI`, `NO_TLP_PEGAWAI`, `USERNAME_PEGAWAI`, `PASSWORD_PEGAWAI`) VALUES
('E0101', 'J01', 'ALEX', 'JL. PATIMURA NO.39 SURABAYA', '085413527412', '', ''),
('E0102', 'J01', 'RAZITA', 'JL. KENJERAN NO.108', '084163749630', '', ''),
('E0301', 'J03', 'BAGONG', 'JL. SEMOLOAWRU NO.45', '085847362104', '', ''),
('E0401', 'J04', 'AUSTEIN', 'JL. PUNCAK INDAH LONTAR NO.2', '081745236521', '', ''),
('E0402', 'J04', 'CAPRICE', 'JL. PUNCAK INDAH LONTAR NO.2', '081745236522', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `ID_PEKERJAAN` char(3) NOT NULL,
  `NAMA_PEKERJAAN` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`ID_PEKERJAAN`, `NAMA_PEKERJAAN`) VALUES
('J01', 'KASIR'),
('J03', 'PURCHASING'),
('J04', 'MONTIR');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `ID_PELANGGAN` char(9) NOT NULL,
  `NAMA_PELANGGAN` varchar(30) NOT NULL,
  `ALAMAT_PELANGGAN` varchar(30) NOT NULL,
  `NO_TLP_PELANGGAN` varchar(15) NOT NULL,
  `EMAIL_PELANGGAN` varchar(50) NOT NULL,
  `USERNAME_PELANGGAN` varchar(30) NOT NULL,
  `PASSWORD_PELANGGAN` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`ID_PELANGGAN`, `NAMA_PELANGGAN`, `ALAMAT_PELANGGAN`, `NO_TLP_PELANGGAN`, `EMAIL_PELANGGAN`, `USERNAME_PELANGGAN`, `PASSWORD_PELANGGAN`) VALUES
('e12345678', 'Bayo', '12345678', '+6289531245', 'ilyas@gmail.com', 'Sayil', '12345678'),
('e20120301', 'Bagyo', 'jl Ngagel', '+6282549352', 'B@gmail.com', 'Bagyo', '12345678'),
('e20120302', 'aswe', 'jl bondo', '123465987', 'khairul@gmail.com', 'admin', '12345678'),
('e20120303', 'aswe', 'jl bondo', '123465987', 'khairul@gmail.com', 'admin', '12345678'),
('e20120306', 'aswr', 'jl bondo', '123465987', 'khairul@gmail.com', 'admin', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pembelian`
--

CREATE TABLE `transaksi_pembelian` (
  `ID_PEMBELIAN` char(8) NOT NULL,
  `ID_HISTORY_PEMBELIAN` char(10) DEFAULT NULL,
  `ID_PEGAWAI` char(5) NOT NULL,
  `ID_DEALER` char(3) NOT NULL,
  `TANGGAL_BELI` datetime NOT NULL,
  `STATUS_BELI` tinyint(1) NOT NULL,
  `HARGA_BELI` float(12,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_penjualan`
--

CREATE TABLE `transaksi_penjualan` (
  `ID_PENJUALAN` char(9) NOT NULL,
  `ID_HISTORY_PENJUALAN` char(10) DEFAULT NULL,
  `ID_MOBIL` char(6) NOT NULL,
  `ID_PEGAWAI` char(5) NOT NULL,
  `ID_PELANGGAN` char(9) NOT NULL,
  `TANGGAL_JUAL` datetime NOT NULL,
  `STATUS_JUAL` tinyint(1) NOT NULL,
  `HARGA_JUAL` float(12,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`ID_DEALER`);

--
-- Indexes for table `merek_mobil`
--
ALTER TABLE `merek_mobil`
  ADD PRIMARY KEY (`ID_MEREK_MOBIL`);

--
-- Indexes for table `nama_mobil`
--
ALTER TABLE `nama_mobil`
  ADD PRIMARY KEY (`ID_MOBIL`),
  ADD KEY `FK_RELATIONSHIP_2` (`ID_MEREK_MOBIL`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`ID_PEGAWAI`),
  ADD KEY `FK_RELATIONSHIP_10` (`ID_PEKERJAAN`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`ID_PEKERJAAN`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`ID_PELANGGAN`);

--
-- Indexes for table `transaksi_pembelian`
--
ALTER TABLE `transaksi_pembelian`
  ADD PRIMARY KEY (`ID_PEMBELIAN`),
  ADD KEY `FK_RELATIONSHIP_11` (`ID_PEGAWAI`),
  ADD KEY `FK_RELATIONSHIP_12` (`ID_DEALER`),
  ADD KEY `FK_RELATIONSHIP_20` (`ID_HISTORY_PEMBELIAN`);

--
-- Indexes for table `transaksi_penjualan`
--
ALTER TABLE `transaksi_penjualan`
  ADD PRIMARY KEY (`ID_PENJUALAN`),
  ADD KEY `FK_RELATIONSHIP_13` (`ID_MOBIL`),
  ADD KEY `FK_RELATIONSHIP_19` (`ID_HISTORY_PENJUALAN`),
  ADD KEY `FK_RELATIONSHIP_7` (`ID_PELANGGAN`),
  ADD KEY `FK_RELATIONSHIP_9` (`ID_PEGAWAI`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nama_mobil`
--
ALTER TABLE `nama_mobil`
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_MEREK_MOBIL`) REFERENCES `merek_mobil` (`ID_MEREK_MOBIL`);

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `FK_RELATIONSHIP_10` FOREIGN KEY (`ID_PEKERJAAN`) REFERENCES `pekerjaan` (`ID_PEKERJAAN`);

--
-- Constraints for table `transaksi_pembelian`
--
ALTER TABLE `transaksi_pembelian`
  ADD CONSTRAINT `FK_RELATIONSHIP_11` FOREIGN KEY (`ID_PEGAWAI`) REFERENCES `pegawai` (`ID_PEGAWAI`),
  ADD CONSTRAINT `FK_RELATIONSHIP_12` FOREIGN KEY (`ID_DEALER`) REFERENCES `dealer` (`ID_DEALER`),
  ADD CONSTRAINT `FK_RELATIONSHIP_20` FOREIGN KEY (`ID_HISTORY_PEMBELIAN`) REFERENCES `history_pembelian` (`ID_HISTORY_PEMBELIAN`);

--
-- Constraints for table `transaksi_penjualan`
--
ALTER TABLE `transaksi_penjualan`
  ADD CONSTRAINT `FK_RELATIONSHIP_13` FOREIGN KEY (`ID_MOBIL`) REFERENCES `nama_mobil` (`ID_MOBIL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_19` FOREIGN KEY (`ID_HISTORY_PENJUALAN`) REFERENCES `history_penjualan` (`ID_HISTORY_PENJUALAN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`ID_PELANGGAN`) REFERENCES `pelanggan` (`ID_PELANGGAN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_9` FOREIGN KEY (`ID_PEGAWAI`) REFERENCES `pegawai` (`ID_PEGAWAI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
