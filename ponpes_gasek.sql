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

insert  into `kamar_pondok`(`id_kamar`,`nama_kamar`,`kuota_kamar`,`ket_kamar`) values ('KMR0001','Sunan Kudus',7,1),('KMR0002','Siti Aisyah',14,0),('KMR00051','Siti Fatimah',10,0),('KMR00533','Sunan Gunung Jati',11,1);

/*Table structure for table `kelas_diniyah` */

DROP TABLE IF EXISTS `kelas_diniyah`;

CREATE TABLE `kelas_diniyah` (
  `id_kelas` varchar(8) NOT NULL,
  `nama_kelas` varchar(100) DEFAULT NULL,
  `keterangan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kelas_diniyah` */

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
  `tahun_boyong` date DEFAULT NULL,
  `password_santri` text,
  `status` tinyint(1) DEFAULT NULL,
  `level` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_santri`),
  KEY `id_santri` (`id_santri`),
  KEY `id_santri_2` (`id_santri`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `master_santri` */

insert  into `master_santri`(`id_santri`,`nama_santri`,`nama_panggilan`,`tempat_lahir`,`tanggal_lahir`,`jenis_kelamin`,`alamat_santri`,`noTelpon_santri`,`email_santri`,`facebook_santri`,`tahun_masuk`,`tahun_boyong`,`password_santri`,`status`,`level`) values ('STR00021','makhfud zamhari','mahfud','ngawi','2017-07-06','1','ngawi','085735209127','makhfudzamhari@gmail.com','makhfud','2015-12-31','2018-12-31','bWFoZnVk',1,'2'),('STR00223','maulidah fithriyah','fitri','gresik','1996-07-29','0','gresik','08977655644','fithriyah.fm@gmail.com','fitri maulidah','2015-08-31','0000-00-00','MDg5Nzc2NTU2NDQ=',1,'2'),('STR00298','zainal arifin','zainal','ngawi','1996-07-13',NULL,'desa Paron kecamatan paron kabupaten ngawi','085735209127','zainal@gmail.com','zainal arifin','2015-07-13','2017-07-07','YmlzbWlsbGFo',1,'1'),('STR00315','zainul rofiqi','zainul',NULL,NULL,NULL,'ngawi','085735209127',NULL,NULL,NULL,NULL,'MDg1NzM1MjA5MTI3',1,'1'),('STR00432','zainul rofiqi','zainul','ngawi','1996-06-29','1','desa tanon kecamatan kendal kabupaten ngawi','085735209127','zainul@gmail.com','zainul rofiqi','2017-07-06','2017-07-06','emFpbnVs',1,'1'),('STR00480','penguruspusat','penguruspusat',NULL,NULL,NULL,'pengurus pusat','penguruspusat',NULL,NULL,NULL,NULL,'cGVuZ3VydXNwdXNhdA==',1,'3'),('STR00489','zainal arifin','zainal',NULL,NULL,NULL,'paron','085735209127',NULL,NULL,NULL,NULL,'MDg1NzM1MjA5MTI3',1,'1'),('STR00498','superadmin','superadmin',NULL,NULL,NULL,'admin','085735209127',NULL,NULL,NULL,NULL,'MDg1NzM1MjA5MTI3',1,'3'),('STR00754','siti susanti','susanti',NULL,NULL,NULL,'plaosan','0857735209127',NULL,NULL,NULL,NULL,'MDg1NzczNTIwOTEyNw==',1,'1'),('STR00793','na\'imatur rofiah','rofiah','magetan','1998-07-13','0','desa kasan','085735209127','fithriyah.fm@gmail.com','naima vich','2017-07-08','2017-07-08','cm9maWFo',1,'1'),('STR00811','farchana hayumeinanda','farchan','magetan','1996-07-20',NULL,'KPR selosari permai','085735209127','farchana@gmail.com','farchana','0000-00-00','0000-00-00','MDg1NzM1MjA5MTI3',0,'0');

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

insert  into `masukan_saran`(`id_masukan`,`nama_pengirim`,`email_pengirim`,`tentang`,`konten_saran`,`tanggal_masuk`,`status`) values ('SARAN958','zainal','zainal@gmail.com','perbaikan kamar mandi','jedinge wancine nguras','2017-07-07',0);

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

/*Table structure for table `riwayat_pendidikan` */

DROP TABLE IF EXISTS `riwayat_pendidikan`;

CREATE TABLE `riwayat_pendidikan` (
  `id_edu` varchar(8) NOT NULL,
  `nama_sd` varchar(100) DEFAULT NULL,
  `alamat_sd` text,
  `tahun_lulus_sd` date DEFAULT NULL,
  `nama_smp` varchar(100) DEFAULT NULL,
  `alamat_smp` text,
  `tahun_lulus_smp` date DEFAULT NULL,
  `nama_sma` varchar(100) DEFAULT NULL,
  `alamat_sma` text,
  `tahun_lulus_sma` date DEFAULT NULL,
  `nama_pt` varchar(100) DEFAULT NULL,
  `jurusan_pt` varchar(100) DEFAULT NULL,
  `alamat_pt` text,
  `tahun_lulus_pt` date DEFAULT NULL,
  `id_santri` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id_edu`),
  KEY `fk_edu` (`id_santri`),
  CONSTRAINT `fk_edu` FOREIGN KEY (`id_santri`) REFERENCES `master_santri` (`id_santri`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `riwayat_pendidikan` */

insert  into `riwayat_pendidikan`(`id_edu`,`nama_sd`,`alamat_sd`,`tahun_lulus_sd`,`nama_smp`,`alamat_smp`,`tahun_lulus_smp`,`nama_sma`,`alamat_sma`,`tahun_lulus_sma`,`nama_pt`,`jurusan_pt`,`alamat_pt`,`tahun_lulus_pt`,`id_santri`) values ('EDU00341',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'STR00489'),('EDU00618','','','0000-00-00','','','0000-00-00','MAN Panekan','Jalan Joso Turi ','2014-12-30','IAIN Surakarta','','','0000-00-00','STR00811'),('EDU00667','MIN Sukorejo','desa sukorejo kendal ngawi','2017-07-07','MTsN Panekan','desa joso turi','2011-12-12','MAN Panekan','desa joso turi','2014-12-12','UIN Malang','Teknik Informatika','malang','2018-07-30','STR00298');

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

/*Table structure for table `testing` */

DROP TABLE IF EXISTS `testing`;

CREATE TABLE `testing` (
  `nama` varchar(10) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `testing` */

insert  into `testing`(`nama`,`tanggal`) values ('mahfud','2017-07-02 10:24:22'),('mahfud','2017-07-02 10:25:48');

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

insert  into `trans_kamar`(`id_trans`,`id_kamar`,`id_santri`,`keterangan`) values ('TRAN0443','KMR0001','STR00432','santri lama'),('TRAN0828','KMR0002','STR00793','santri baru'),('TRAN0973','KMR0002','STR00223','santri lama');

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

/*Table structure for table `wali_santri` */

DROP TABLE IF EXISTS `wali_santri`;

CREATE TABLE `wali_santri` (
  `id_wali` varchar(8) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) DEFAULT NULL,
  `alamat_ayah` text,
  `notelpon_ayah` varchar(14) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `pekerjaan_ibu` varchar(100) DEFAULT NULL,
  `alamat_ibu` varchar(100) DEFAULT NULL,
  `notelpon_ibu` varchar(14) DEFAULT NULL,
  `id_santri` varchar(8) NOT NULL,
  PRIMARY KEY (`id_wali`),
  KEY `id_santri` (`id_santri`),
  CONSTRAINT `wali_santri` FOREIGN KEY (`id_santri`) REFERENCES `master_santri` (`id_santri`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `wali_santri` */

insert  into `wali_santri`(`id_wali`,`nama_ayah`,`pekerjaan_ayah`,`alamat_ayah`,`notelpon_ayah`,`nama_ibu`,`pekerjaan_ibu`,`alamat_ibu`,`notelpon_ibu`,`id_santri`) values ('WALI0068','sugiran',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'STR00315'),('WALI0369','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'STR00811'),('WALI0372','lanjar','petani','petani','085735209127','sutirah','ibu rumah tangga','kendal ngawi','085735209127','STR00298'),('WALI0865','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'STR00489');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
