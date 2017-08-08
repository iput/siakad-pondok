/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.6.21 : Database - ponpes_gasek
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ponpes_gasek` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ponpes_gasek`;

/*Table structure for table `informasi` */

DROP TABLE IF EXISTS `informasi`;

CREATE TABLE `informasi` (
  `idInfo` varchar(8) NOT NULL,
  `judulInfo` varchar(100) DEFAULT NULL,
  `penulisInfo` varchar(100) DEFAULT NULL,
  `tanggalInput` date DEFAULT NULL,
  `kontentInfo` text,
  PRIMARY KEY (`idInfo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `informasi` */

insert  into `informasi`(`idInfo`,`judulInfo`,`penulisInfo`,`tanggalInput`,`kontentInfo`) values ('19093259','Persiapan HBH','rahmah','2017-07-20','bismillah');

/*Table structure for table `kamar_pondok` */

DROP TABLE IF EXISTS `kamar_pondok`;

CREATE TABLE `kamar_pondok` (
  `id_kamar` varchar(8) NOT NULL,
  `nama_kamar` varchar(100) DEFAULT NULL,
  `kuota_kamar` int(11) DEFAULT NULL,
  `ket_kamar` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_kamar`),
  KEY `id_kamar` (`id_kamar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kamar_pondok` */

insert  into `kamar_pondok`(`id_kamar`,`nama_kamar`,`kuota_kamar`,`ket_kamar`) values ('KMR0001','Sunan Kudus',13,1),('KMR0002','Siti Aisyah',12,0),('KMR00449','Gus Dur',13,1),('KMR00533','Sunan Gunung Jati',11,1),('KMR00816','Mbah Prapen',12,1);

/*Table structure for table `kelas_diniyah` */

DROP TABLE IF EXISTS `kelas_diniyah`;

CREATE TABLE `kelas_diniyah` (
  `id_kelas` varchar(8) NOT NULL,
  `nama_kelas` varchar(100) DEFAULT NULL,
  `keterangan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kelas_diniyah` */

/*Table structure for table `komentar` */

DROP TABLE IF EXISTS `komentar`;

CREATE TABLE `komentar` (
  `idKomentar` varchar(8) NOT NULL,
  `tglKoment` datetime DEFAULT NULL,
  `isiKomentar` text,
  `idSantri` varchar(8) DEFAULT NULL,
  `idInfo` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`idKomentar`),
  KEY `fkSantriKom` (`idSantri`),
  KEY `fkInfo` (`idInfo`),
  CONSTRAINT `fkInfo` FOREIGN KEY (`idInfo`) REFERENCES `informasi` (`idInfo`),
  CONSTRAINT `fkSantriKom` FOREIGN KEY (`idSantri`) REFERENCES `master_santri` (`id_santri`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `komentar` */

/*Table structure for table `logalumni` */

DROP TABLE IF EXISTS `logalumni`;

CREATE TABLE `logalumni` (
  `idLog` varchar(8) NOT NULL,
  `idSantri` varchar(8) DEFAULT NULL,
  `tahunInput` date DEFAULT NULL,
  `alasanLog` text,
  PRIMARY KEY (`idLog`),
  KEY `fkLogAlumni` (`idSantri`),
  CONSTRAINT `fkLogAlumni` FOREIGN KEY (`idSantri`) REFERENCES `master_santri` (`id_santri`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `logalumni` */

insert  into `logalumni`(`idLog`,`idSantri`,`tahunInput`,`alasanLog`) values ('AMN00913','STR00279','0000-00-00','');

/*Table structure for table `logpindahkamar` */

DROP TABLE IF EXISTS `logpindahkamar`;

CREATE TABLE `logpindahkamar` (
  `idLogPindah` varchar(8) NOT NULL,
  `tanggalPindah` date DEFAULT NULL,
  `keterangan` text,
  `idTransaksi` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`idLogPindah`),
  KEY `fkPindah` (`idTransaksi`),
  CONSTRAINT `fkPindah` FOREIGN KEY (`idTransaksi`) REFERENCES `trans_kamar` (`id_trans`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `logpindahkamar` */

/*Table structure for table `master_santri` */

DROP TABLE IF EXISTS `master_santri`;

CREATE TABLE `master_santri` (
  `id_santri` varchar(8) NOT NULL,
  `nama_santri` varchar(100) NOT NULL,
  `nama_panggilan` varchar(100) DEFAULT NULL,
  `tempat_lahir` text,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `alamat_santri` text,
  `noTelpon_santri` varchar(14) DEFAULT NULL,
  `email_santri` varchar(40) DEFAULT NULL,
  `facebook_santri` varchar(30) DEFAULT NULL,
  `tahun_masuk` date DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `pekerjaan_ayah` varchar(100) DEFAULT NULL,
  `alamat_ayah` text,
  `notelpon_ayah` varchar(12) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `pekerjaan_ibu` varchar(100) DEFAULT NULL,
  `alamat_ibu` text,
  `notelpon_ibu` varchar(12) DEFAULT NULL,
  `nama_sd` varchar(100) DEFAULT NULL,
  `alamat_sd` text,
  `lulus_sd` date DEFAULT NULL,
  `nama_smp` varchar(100) DEFAULT NULL,
  `alamat_smp` text,
  `lulus_smp` date DEFAULT NULL,
  `nama_sma` varchar(100) DEFAULT NULL,
  `alamat_sma` text,
  `lulus_sma` date DEFAULT NULL,
  `nama_pt` varchar(100) DEFAULT NULL,
  `jurusan_pt` varchar(100) DEFAULT NULL,
  `alamat_pt` text,
  `tahun_wisuda` date DEFAULT NULL,
  PRIMARY KEY (`id_santri`),
  KEY `id_santri` (`id_santri`),
  KEY `id_santri_2` (`id_santri`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `master_santri` */

insert  into `master_santri`(`id_santri`,`nama_santri`,`nama_panggilan`,`tempat_lahir`,`tanggal_lahir`,`jenis_kelamin`,`alamat_santri`,`noTelpon_santri`,`email_santri`,`facebook_santri`,`tahun_masuk`,`nama_ayah`,`pekerjaan_ayah`,`alamat_ayah`,`notelpon_ayah`,`nama_ibu`,`pekerjaan_ibu`,`alamat_ibu`,`notelpon_ibu`,`nama_sd`,`alamat_sd`,`lulus_sd`,`nama_smp`,`alamat_smp`,`lulus_smp`,`nama_sma`,`alamat_sma`,`lulus_sma`,`nama_pt`,`jurusan_pt`,`alamat_pt`,`tahun_wisuda`) values ('STR00109','wahyu prasetyo','wahyu','ngawi','0000-00-00',NULL,'','080808','','','0000-00-00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('STR00133','dewi rahmah septiani','rahmah','','0000-00-00','0','desa basri kecamatan kendal','085735209127','','','0000-00-00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('STR00157','gandhis ulta','gandhis','tuluagung','0000-00-00','0','','080808','','gandhis ulta','0000-00-00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('STR00279','diana arofah','diana','ngawi','0000-00-00','0','','085735209127','','diana rohmah','0000-00-00','','','Basri','','','','','','','','0000-00-00','','','0000-00-00','MA Sidorejo','','0000-00-00','','','','0000-00-00'),('STR00346','agus hafid','hafid','magetan','0000-00-00','1','','080808','','','2015-12-09',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('STR00451','gandhis ulta','gandhis','tuluagung','1996-10-03','0','','080808','','','0000-00-00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('STR00567','binti nikmatul khoiriyah','binti','ngawi','1996-11-28','0','desa lor sawah dusun jetak','00000000','','','2013-12-12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('STR00696','siti susanti','susanti','magetan','2014-11-29','0','desa plaosan magetan','00000000','siti@gmail.com','siti suyanti','2015-11-29',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('STR00728','maulidah fitriyah','fitri',NULL,NULL,'0',NULL,'085735209127',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('STR00869','makhfud zamhari','makhfud','ngawi','1995-12-02','1','ngawi','085735209127','','makhfud zamhari','0000-00-00','lanjar','petani','ngawi','','','','','','SDN Simo I','desa simo','2009-12-02','','','0000-00-00','','','0000-00-00','','','','0000-00-00');

/*Table structure for table `masukan_saran` */

DROP TABLE IF EXISTS `masukan_saran`;

CREATE TABLE `masukan_saran` (
  `id_masukan` varchar(8) NOT NULL,
  `nama_pengirim` varchar(100) DEFAULT NULL,
  `email_pengirim` varchar(100) DEFAULT NULL,
  `tentang` varchar(100) DEFAULT NULL,
  `konten_saran` text,
  `tanggal_masuk` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_masukan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `masukan_saran` */

insert  into `masukan_saran`(`id_masukan`,`nama_pengirim`,`email_pengirim`,`tentang`,`konten_saran`,`tanggal_masuk`,`status`) values ('SARAN248','zainal','zainal@gmail.com','bismillah','ini page santri','2017-07-08',0),('SARAN388','farchan','farchana@gmail.com','ini saran','ini saran dari alumni','2017-07-08',1);

/*Table structure for table `pelanggaran` */

DROP TABLE IF EXISTS `pelanggaran`;

CREATE TABLE `pelanggaran` (
  `id_pelanggaran` varchar(8) NOT NULL,
  `jenis_pelanggaran` varchar(30) DEFAULT NULL,
  `jenis_takzir` varchar(20) DEFAULT NULL,
  `pelaksanaan_pelanggaran` date DEFAULT NULL,
  `id_santri` varchar(8) NOT NULL,
  PRIMARY KEY (`id_pelanggaran`),
  KEY `santri_pelanggaran` (`id_santri`),
  CONSTRAINT `santri_pelanggaran` FOREIGN KEY (`id_santri`) REFERENCES `master_santri` (`id_santri`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pelanggaran` */

/*Table structure for table `tabel_kitab` */

DROP TABLE IF EXISTS `tabel_kitab`;

CREATE TABLE `tabel_kitab` (
  `id_kitab` varchar(8) NOT NULL,
  `nama_kitab` varchar(20) DEFAULT NULL,
  `pengarang_kitab` varchar(100) DEFAULT NULL,
  `harga_kitab` float DEFAULT NULL,
  `tanggal_beli` date DEFAULT NULL,
  `stok_kitab` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kitab`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tabel_kitab` */

/*Table structure for table `trans_kamar` */

DROP TABLE IF EXISTS `trans_kamar`;

CREATE TABLE `trans_kamar` (
  `id_trans` varchar(8) NOT NULL,
  `id_kamar` varchar(8) DEFAULT NULL,
  `id_santri` varchar(8) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id_trans`),
  KEY `FK_TRANS` (`id_santri`),
  KEY `FK_KMR` (`id_kamar`),
  CONSTRAINT `FK_KMR` FOREIGN KEY (`id_kamar`) REFERENCES `kamar_pondok` (`id_kamar`),
  CONSTRAINT `FK_TRANS` FOREIGN KEY (`id_santri`) REFERENCES `master_santri` (`id_santri`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `trans_kamar` */

/*Table structure for table `transaksi_tu` */

DROP TABLE IF EXISTS `transaksi_tu`;

CREATE TABLE `transaksi_tu` (
  `id_transaksi` varchar(8) NOT NULL,
  `id_kitab` varchar(8) NOT NULL,
  `id_santri` varchar(8) NOT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `jumlah_uang` float DEFAULT NULL,
  `tanggungan` float DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `tran_santri` (`id_santri`),
  KEY `tran_kitab` (`id_kitab`),
  CONSTRAINT `trans_kitab` FOREIGN KEY (`id_kitab`) REFERENCES `tabel_kitab` (`id_kitab`),
  CONSTRAINT `trans_santri` FOREIGN KEY (`id_santri`) REFERENCES `master_santri` (`id_santri`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transaksi_tu` */

/*Table structure for table `userlog` */

DROP TABLE IF EXISTS `userlog`;

CREATE TABLE `userlog` (
  `idLog` varchar(8) NOT NULL,
  `id_santri` varchar(8) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `passwordlog` text,
  `lastLogged` datetime DEFAULT NULL,
  `level` enum('superadmin','pengurusputra','pengurusputri','kamar','ustadz','santri','alumni') DEFAULT NULL,
  `decryptCode` text,
  PRIMARY KEY (`idLog`),
  KEY `fkLog` (`id_santri`),
  CONSTRAINT `fkLog` FOREIGN KEY (`id_santri`) REFERENCES `master_santri` (`id_santri`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `userlog` */

insert  into `userlog`(`idLog`,`id_santri`,`username`,`passwordlog`,`lastLogged`,`level`,`decryptCode`) values ('LOG00311','STR00133','rahmah','6d4af2ccb15e1cad2a042797e4a2f8c4','2017-07-12 09:07:31','superadmin','085735209127'),('LOG00517','STR00109','wahyu','839e9c1a49e7ebdeddf258630a89a2bc','2017-07-18 01:07:24','santri','080808'),('LOG00551','STR00279','diana','e172dd95f4feb21412a692e73929961e','2017-07-19 10:07:23','santri','bismillah'),('LOG00560','STR00696','susanti','dd4b21e9ef71e1291183a46b913ae6f2','2017-07-15 08:07:10','santri','00000000'),('LOG00632','STR00157','gandhis','839e9c1a49e7ebdeddf258630a89a2bc','2017-07-18 02:07:05','santri','080808'),('LOG00752','STR00567','binti','dd4b21e9ef71e1291183a46b913ae6f2','2017-07-17 01:07:12','santri','00000000'),('LOG00848','STR00869','makhfud','6d4af2ccb15e1cad2a042797e4a2f8c4','2017-07-12 09:07:31','pengurusputra','085735209127'),('LOG00852','STR00869','makhfud','6d4af2ccb15e1cad2a042797e4a2f8c4','2017-07-18 17:07:46','superadmin','085735209127'),('LOG00889','STR00346','hafid','839e9c1a49e7ebdeddf258630a89a2bc','2017-07-18 01:07:49','santri','080808'),('LOG00903','STR00728','fitri','6d4af2ccb15e1cad2a042797e4a2f8c4','2017-07-12 09:07:32','pengurusputri','085735209127'),('LOG00922','STR00279','diana','6d4af2ccb15e1cad2a042797e4a2f8c4','2017-07-20 13:07:31','alumni','085735209127'),('LOG00953','STR00696','susanti','dd4b21e9ef71e1291183a46b913ae6f2','2017-07-17 10:07:06','pengurusputri','00000000');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
