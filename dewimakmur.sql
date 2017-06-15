-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2017 at 12:10 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dewimakmur`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_bahan`
--

CREATE TABLE IF NOT EXISTS `db_bahan` (
  `id_bahan` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama_bahan` text NOT NULL,
  `lt_deliv` int(10) NOT NULL,
  `harga_bahan` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id_bahan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11011 ;

--
-- Dumping data for table `db_bahan`
--

INSERT INTO `db_bahan` (`id_bahan`, `nama_bahan`, `lt_deliv`, `harga_bahan`) VALUES
(11001, 'Alumunium Foil', 1, '2500'),
(11002, 'Kardus Kecil', 1, '2300'),
(11003, 'Kardus Besar', 1, '5000'),
(11004, 'Bunga Rosella Kering', 4, '12000'),
(11005, 'Kulit Manggis', 4, '11500'),
(11006, 'Daun Jati Cina', 5, '16800'),
(11007, 'Daun Sirsak', 4, '15000'),
(11008, 'Sarang Semut', 4, '9000'),
(11009, 'Teh Hitam', 2, '9500'),
(11010, 'Pegagan', 1, '6300');

-- --------------------------------------------------------

--
-- Table structure for table `db_bbm`
--

CREATE TABLE IF NOT EXISTS `db_bbm` (
  `id_bbm` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_tb` int(5) unsigned zerofill NOT NULL,
  `id_bahan` int(5) unsigned zerofill NOT NULL,
  `tanggal_bbm` date NOT NULL,
  PRIMARY KEY (`id_bbm`),
  KEY `id_tb_db_bbm` (`id_tb`),
  KEY `id_bahan_db_bbm` (`id_bahan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `db_customer`
--

CREATE TABLE IF NOT EXISTS `db_customer` (
  `id_customer` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama_customer` text NOT NULL,
  `cp_customer` text NOT NULL,
  `alamat_customer` varchar(100) NOT NULL,
  `kota_customer` text NOT NULL,
  `no_telp_customer` bigint(12) unsigned zerofill NOT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22002 ;

--
-- Dumping data for table `db_customer`
--

INSERT INTO `db_customer` (`id_customer`, `nama_customer`, `cp_customer`, `alamat_customer`, `kota_customer`, `no_telp_customer`) VALUES
(22001, 'P.T. ABC', 'Budiono', 'Jl. Sumber Barokah No. 123', 'Yogyakarta', 081234567890);

-- --------------------------------------------------------

--
-- Table structure for table `db_forecast`
--

CREATE TABLE IF NOT EXISTS `db_forecast` (
  `id_forecast` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_produk` int(5) unsigned zerofill NOT NULL,
  `jan` decimal(10,0) NOT NULL,
  `feb` decimal(10,0) NOT NULL,
  `mar` decimal(10,0) NOT NULL,
  `apr` decimal(10,0) NOT NULL,
  `mei` decimal(10,0) NOT NULL,
  `jun` decimal(10,0) NOT NULL,
  `jul` decimal(10,0) NOT NULL,
  `agu` decimal(10,0) NOT NULL,
  `sep` decimal(10,0) NOT NULL,
  `okt` decimal(10,0) NOT NULL,
  `nov` decimal(10,0) NOT NULL,
  `des` decimal(10,0) NOT NULL,
  `tahun` year(4) NOT NULL,
  PRIMARY KEY (`id_forecast`),
  KEY `id_produk_db_fc` (`id_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52022 ;

--
-- Dumping data for table `db_forecast`
--

INSERT INTO `db_forecast` (`id_forecast`, `id_produk`, `jan`, `feb`, `mar`, `apr`, `mei`, `jun`, `jul`, `agu`, `sep`, `okt`, `nov`, `des`, `tahun`) VALUES
(52007, 12002, '422', '377', '504', '411', '678', '604', '547', '494', '501', '423', '913', '447', 2014),
(52008, 12002, '278', '134', '325', '297', '481', '579', '331', '760', '332', '565', '865', '417', 2015),
(52009, 12002, '472', '568', '778', '180', '719', '531', '648', '555', '720', '327', '795', '345', 2016),
(52010, 12004, '421', '299', '326', '288', '374', '492', '369', '815', '413', '524', '713', '634', 2014),
(52011, 12004, '453', '108', '284', '263', '262', '603', '497', '758', '301', '667', '817', '458', 2015),
(52012, 12004, '601', '416', '536', '156', '600', '317', '247', '574', '505', '372', '421', '362', 2016),
(52013, 12003, '331', '391', '323', '287', '259', '348', '626', '593', '414', '422', '571', '301', 2014),
(52014, 12003, '275', '276', '305', '217', '200', '375', '666', '712', '230', '348', '463', '234', 2015),
(52015, 12003, '360', '132', '286', '158', '385', '376', '708', '351', '282', '370', '381', '297', 2016),
(52016, 12005, '329', '285', '277', '403', '500', '422', '316', '362', '489', '465', '338', '290', 2014),
(52017, 12005, '291', '154', '102', '128', '323', '562', '170', '541', '569', '481', '516', '426', 2015),
(52018, 12005, '667', '470', '367', '451', '666', '206', '285', '331', '274', '311', '280', '143', 2016),
(52019, 12001, '377', '283', '264', '143', '155', '234', '189', '319', '392', '411', '431', '310', 2014),
(52020, 12001, '500', '200', '195', '170', '172', '468', '445', '180', '211', '539', '337', '572', 2015),
(52021, 12001, '434', '340', '414', '205', '138', '364', '89', '258', '357', '365', '412', '185', 2016);

-- --------------------------------------------------------

--
-- Table structure for table `db_gudang_bahan`
--

CREATE TABLE IF NOT EXISTS `db_gudang_bahan` (
  `id_stok_bahan` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_bahan` int(5) unsigned zerofill NOT NULL,
  `volume` decimal(10,3) NOT NULL,
  PRIMARY KEY (`id_stok_bahan`),
  KEY `id_bahan_db_gb` (`id_bahan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41011 ;

--
-- Dumping data for table `db_gudang_bahan`
--

INSERT INTO `db_gudang_bahan` (`id_stok_bahan`, `id_bahan`, `volume`) VALUES
(41001, 11001, '10.000'),
(41002, 11002, '0.000'),
(41003, 11003, '0.000'),
(41004, 11004, '3.000'),
(41005, 11005, '0.000'),
(41006, 11006, '0.000'),
(41007, 11007, '0.000'),
(41008, 11008, '0.000'),
(41009, 11009, '0.000'),
(41010, 11010, '0.000');

-- --------------------------------------------------------

--
-- Table structure for table `db_gudang_produk`
--

CREATE TABLE IF NOT EXISTS `db_gudang_produk` (
  `id_stok_produk` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_produk` int(5) unsigned zerofill NOT NULL,
  `volume` decimal(6,0) NOT NULL,
  PRIMARY KEY (`id_stok_produk`),
  KEY `id_produk_db_gp` (`id_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42006 ;

--
-- Dumping data for table `db_gudang_produk`
--

INSERT INTO `db_gudang_produk` (`id_stok_produk`, `id_produk`, `volume`) VALUES
(42001, 12001, '100'),
(42002, 12002, '82'),
(42003, 12003, '58'),
(42004, 12004, '114'),
(42005, 12005, '99');

-- --------------------------------------------------------

--
-- Table structure for table `db_jadwal_bahan`
--

CREATE TABLE IF NOT EXISTS `db_jadwal_bahan` (
  `id_jadwal` int(5) NOT NULL AUTO_INCREMENT,
  `id_bahan` int(5) NOT NULL,
  `tanggal_jadwal` date NOT NULL,
  `i11` decimal(10,0) NOT NULL,
  `i12` decimal(10,0) NOT NULL,
  `i13` decimal(10,0) NOT NULL,
  `i14` decimal(10,0) NOT NULL,
  `i15` decimal(10,0) NOT NULL,
  `i16` decimal(10,0) NOT NULL,
  `i17` decimal(10,0) NOT NULL,
  `i21` decimal(3,0) NOT NULL,
  `i22` decimal(3,0) NOT NULL,
  `i23` decimal(3,0) NOT NULL,
  `i24` decimal(3,0) NOT NULL,
  `i25` decimal(3,0) NOT NULL,
  `i26` decimal(3,0) NOT NULL,
  `i27` decimal(3,0) NOT NULL,
  `i31` decimal(3,0) NOT NULL,
  `i32` decimal(3,0) NOT NULL,
  `i33` decimal(3,0) NOT NULL,
  `i34` decimal(3,0) NOT NULL,
  `i35` decimal(3,0) NOT NULL,
  `i36` decimal(3,0) NOT NULL,
  `i37` decimal(3,0) NOT NULL,
  `i41` decimal(3,0) NOT NULL,
  `i42` decimal(3,0) NOT NULL,
  `i43` decimal(3,0) NOT NULL,
  `i44` decimal(3,0) NOT NULL,
  `i45` decimal(3,0) NOT NULL,
  `i46` decimal(3,0) NOT NULL,
  `i47` decimal(3,0) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33002 ;

--
-- Dumping data for table `db_jadwal_bahan`
--

INSERT INTO `db_jadwal_bahan` (`id_jadwal`, `id_bahan`, `tanggal_jadwal`, `i11`, `i12`, `i13`, `i14`, `i15`, `i16`, `i17`, `i21`, `i22`, `i23`, `i24`, `i25`, `i26`, `i27`, `i31`, `i32`, `i33`, `i34`, `i35`, `i36`, `i37`, `i41`, `i42`, `i43`, `i44`, `i45`, `i46`, `i47`) VALUES
(33001, 11004, '2016-12-30', '23630', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `db_laporan`
--

CREATE TABLE IF NOT EXISTS `db_laporan` (
  `id_laporan` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `data_produk` int(6) NOT NULL,
  `data_bahan` int(6) NOT NULL,
  `last_update_produk` int(6) NOT NULL,
  `last_update_bahan` int(6) NOT NULL,
  `create_id_user` int(5) unsigned zerofill NOT NULL,
  `id_bagian` int(5) unsigned zerofill NOT NULL,
  PRIMARY KEY (`id_laporan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `db_produk`
--

CREATE TABLE IF NOT EXISTS `db_produk` (
  `id_produk` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama_produk` text NOT NULL,
  `harga_pack` decimal(10,0) NOT NULL,
  `ss` int(6) NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12006 ;

--
-- Dumping data for table `db_produk`
--

INSERT INTO `db_produk` (`id_produk`, `nama_produk`, `harga_pack`, `ss`) VALUES
(12001, 'Teh Celup Rosella', '20000', 100),
(12002, 'Teh Celup Jati Cina', '20000', 100),
(12003, 'Teh Celup Sirsak', '20000', 100),
(12004, 'Teh Celup Kulit Manggis', '20000', 100),
(12005, 'Teh Celup Sarang Semut', '20000', 100);

-- --------------------------------------------------------

--
-- Table structure for table `db_produksi`
--

CREATE TABLE IF NOT EXISTS `db_produksi` (
  `id_produksi` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_user` int(5) unsigned zerofill NOT NULL,
  `id_produk` int(5) unsigned zerofill NOT NULL,
  `id_bahan` int(5) unsigned zerofill NOT NULL,
  `tanggal_produksi` date NOT NULL,
  `volume` int(6) NOT NULL,
  `kg_bahan` decimal(10,3) NOT NULL,
  `lt_produksi` int(3) NOT NULL,
  PRIMARY KEY (`id_produksi`),
  KEY `id_user_db_prods` (`id_user`),
  KEY `id_produk_db_prods` (`id_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70003 ;

--
-- Dumping data for table `db_produksi`
--

INSERT INTO `db_produksi` (`id_produksi`, `id_user`, `id_produk`, `id_bahan`, `tanggal_produksi`, `volume`, `kg_bahan`, `lt_produksi`) VALUES
(70001, 10002, 12001, 00000, '2017-04-12', 2, '0.000', 1),
(70002, 10003, 12001, 11004, '2017-04-22', 9, '3.400', 1);

--
-- Triggers `db_produksi`
--
DROP TRIGGER IF EXISTS `JMLH_STOKTambah_UPDATE_GUDANG_PRODUK`;
DELIMITER //
CREATE TRIGGER `JMLH_STOKTambah_UPDATE_GUDANG_PRODUK` AFTER INSERT ON `db_produksi`
 FOR EACH ROW UPDATE db_gudang_produk SET db_gudang_produk.volume = db_gudang_produk.volume+NEW.volume
Where db_gudang_produk.id_produk=NEW.id_produk
//
DELIMITER ;
DROP TRIGGER IF EXISTS `kurang_bahan`;
DELIMITER //
CREATE TRIGGER `kurang_bahan` AFTER UPDATE ON `db_produksi`
 FOR EACH ROW UPDATE db_gudang_bahan SET db_gudang_bahan.volume = db_gudang_bahan.volume-NEW.kg_bahan
Where db_gudang_bahan.id_bahan=NEW.id_bahan
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `db_supplier`
--

CREATE TABLE IF NOT EXISTS `db_supplier` (
  `id_supplier` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama_supplier` text NOT NULL,
  `cp_supplier` text NOT NULL,
  `alamat_supplier` varchar(100) NOT NULL,
  `kota_supplier` text NOT NULL,
  `no_telp_supplier` bigint(12) unsigned zerofill NOT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21002 ;

--
-- Dumping data for table `db_supplier`
--

INSERT INTO `db_supplier` (`id_supplier`, `nama_supplier`, `cp_supplier`, `alamat_supplier`, `kota_supplier`, `no_telp_supplier`) VALUES
(21001, 'P.T. XYZ', 'Sujoko', 'Jl. Maju Makmur No. 456', 'Yogyakarta', 081000888111);

-- --------------------------------------------------------

--
-- Table structure for table `db_transaksi_bahan`
--

CREATE TABLE IF NOT EXISTS `db_transaksi_bahan` (
  `id_tb` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_user` int(5) unsigned zerofill NOT NULL,
  `id_bahan` int(5) unsigned zerofill NOT NULL,
  `jumlah_tb` decimal(10,3) NOT NULL,
  `tanggal_order` date NOT NULL,
  `id_supplier` int(5) unsigned zerofill NOT NULL,
  `tanggal_perlu` date NOT NULL,
  PRIMARY KEY (`id_tb`),
  KEY `id_user_db_tb` (`id_user`),
  KEY `id_supl_db_tb` (`id_supplier`),
  KEY `id_bahan_db_tb` (`id_bahan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72002 ;

--
-- Dumping data for table `db_transaksi_bahan`
--

INSERT INTO `db_transaksi_bahan` (`id_tb`, `id_user`, `id_bahan`, `jumlah_tb`, `tanggal_order`, `id_supplier`, `tanggal_perlu`) VALUES
(72001, 10001, 11004, '10.000', '2017-04-01', 21001, '2017-04-05');

--
-- Triggers `db_transaksi_bahan`
--
DROP TRIGGER IF EXISTS `JMLH_STOKTambah_UPDATE_GUDANG_BAHAN`;
DELIMITER //
CREATE TRIGGER `JMLH_STOKTambah_UPDATE_GUDANG_BAHAN` BEFORE INSERT ON `db_transaksi_bahan`
 FOR EACH ROW UPDATE db_gudang_bahan SET db_gudang_bahan.volume = db_gudang_bahan.volume+NEW.jumlah_tb
Where db_gudang_bahan.id_bahan=NEW.id_bahan
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `db_transaksi_produk`
--

CREATE TABLE IF NOT EXISTS `db_transaksi_produk` (
  `id_tp` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_user` int(5) unsigned zerofill NOT NULL,
  `id_produk` int(5) unsigned zerofill NOT NULL,
  `jumlah_tp` decimal(10,0) NOT NULL,
  `id_customer` int(5) unsigned zerofill NOT NULL,
  `tanggal_jual` date NOT NULL,
  PRIMARY KEY (`id_tp`),
  KEY `id_cust_db_tp` (`id_customer`),
  KEY `id_user_db_tp` (`id_user`),
  KEY `id_produk_db_tp` (`id_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60002 ;

--
-- Dumping data for table `db_transaksi_produk`
--

INSERT INTO `db_transaksi_produk` (`id_tp`, `id_user`, `id_produk`, `jumlah_tp`, `id_customer`, `tanggal_jual`) VALUES
(60001, 10002, 12001, '1', 22001, '2017-04-02');

--
-- Triggers `db_transaksi_produk`
--
DROP TRIGGER IF EXISTS `JMLH_STOKKurang_UPDATE_GUDANG_PRODUK`;
DELIMITER //
CREATE TRIGGER `JMLH_STOKKurang_UPDATE_GUDANG_PRODUK` AFTER INSERT ON `db_transaksi_produk`
 FOR EACH ROW UPDATE db_gudang_produk SET db_gudang_produk.volume = db_gudang_produk.volume-NEW.jumlah_tp
Where db_gudang_produk.id_produk=NEW.id_produk
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `db_user`
--

CREATE TABLE IF NOT EXISTS `db_user` (
  `id_user` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `password` varchar(35) NOT NULL,
  `nama_user` text NOT NULL,
  `privilege` varchar(15) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10004 ;

--
-- Dumping data for table `db_user`
--

INSERT INTO `db_user` (`id_user`, `password`, `nama_user`, `privilege`) VALUES
(10001, 'c8aa9dcb48722a931e2f1b23120d868b', 'Admin Bahan Baku', 'bahanbaku'),
(10002, '566d04a57c40411dea25641720bb1850', 'Admin Produk', 'produk'),
(10003, 'edf3017a2946290b95c783bd1a7f0ba7', 'Admin Produksi', 'produksi');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `db_bbm`
--
ALTER TABLE `db_bbm`
  ADD CONSTRAINT `id_bahan_db_bbm` FOREIGN KEY (`id_bahan`) REFERENCES `db_bahan` (`id_bahan`),
  ADD CONSTRAINT `id_tb_db_bbm` FOREIGN KEY (`id_tb`) REFERENCES `db_transaksi_bahan` (`id_tb`);

--
-- Constraints for table `db_forecast`
--
ALTER TABLE `db_forecast`
  ADD CONSTRAINT `id_produk_db_fc` FOREIGN KEY (`id_produk`) REFERENCES `db_produk` (`id_produk`);

--
-- Constraints for table `db_gudang_bahan`
--
ALTER TABLE `db_gudang_bahan`
  ADD CONSTRAINT `id_bahan_db_gb` FOREIGN KEY (`id_bahan`) REFERENCES `db_bahan` (`id_bahan`);

--
-- Constraints for table `db_gudang_produk`
--
ALTER TABLE `db_gudang_produk`
  ADD CONSTRAINT `id_produk_db_gp` FOREIGN KEY (`id_produk`) REFERENCES `db_produk` (`id_produk`);

--
-- Constraints for table `db_produksi`
--
ALTER TABLE `db_produksi`
  ADD CONSTRAINT `id_produk_db_prods` FOREIGN KEY (`id_produk`) REFERENCES `db_produk` (`id_produk`),
  ADD CONSTRAINT `id_user_db_prods` FOREIGN KEY (`id_user`) REFERENCES `db_user` (`id_user`);

--
-- Constraints for table `db_transaksi_bahan`
--
ALTER TABLE `db_transaksi_bahan`
  ADD CONSTRAINT `id_bahan_db_tb` FOREIGN KEY (`id_bahan`) REFERENCES `db_bahan` (`id_bahan`),
  ADD CONSTRAINT `id_supl_db_tb` FOREIGN KEY (`id_supplier`) REFERENCES `db_supplier` (`id_supplier`),
  ADD CONSTRAINT `id_user_db_tb` FOREIGN KEY (`id_user`) REFERENCES `db_user` (`id_user`);

--
-- Constraints for table `db_transaksi_produk`
--
ALTER TABLE `db_transaksi_produk`
  ADD CONSTRAINT `id_cust_db_tp` FOREIGN KEY (`id_customer`) REFERENCES `db_customer` (`id_customer`),
  ADD CONSTRAINT `id_produk_db_tp` FOREIGN KEY (`id_produk`) REFERENCES `db_produk` (`id_produk`),
  ADD CONSTRAINT `id_user_db_tp` FOREIGN KEY (`id_user`) REFERENCES `db_user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
