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

insert  into `informasi`(`idInfo`,`judulInfo`,`penulisInfo`,`tanggalInput`,`kontentInfo`) values ('99867017','bismillah','rahmah','2017-12-07','demo');

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
  `kuota_kelas` int(11) DEFAULT NULL,
  `lokasi_kelas` varchar(100) DEFAULT NULL,
  `wali_kelas` varchar(8) NOT NULL,
  `keterangan_kelas` varchar(20) DEFAULT NULL,
  `status_kelas` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_kelas`),
  KEY `fk_wali` (`wali_kelas`),
  CONSTRAINT `fk_wali` FOREIGN KEY (`wali_kelas`) REFERENCES `master_santri` (`id_santri`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kelas_diniyah` */

insert  into `kelas_diniyah`(`id_kelas`,`nama_kelas`,`kuota_kelas`,`lokasi_kelas`,`wali_kelas`,`keterangan_kelas`,`status_kelas`) values ('06232341','awaliyah I B putri',12,'asrama belakang ndalem','STR00157','kelas baru','aktif'),('33777249','awaliyah II B putri',30,'asrama putri','STR00279','KELAS DEMO','open'),('KLS0908','I\'DAD Putra',20,'serambi utara masjid','STR00346','kelas baru','aktif'),('KLS9899','I\'DAD Putri',24,'aula putri','STR00157','kelas lama','nonaktif');

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

insert  into `master_santri`(`id_santri`,`nama_santri`,`nama_panggilan`,`tempat_lahir`,`tanggal_lahir`,`jenis_kelamin`,`alamat_santri`,`noTelpon_santri`,`email_santri`,`facebook_santri`,`tahun_masuk`,`nama_ayah`,`pekerjaan_ayah`,`alamat_ayah`,`notelpon_ayah`,`nama_ibu`,`pekerjaan_ibu`,`alamat_ibu`,`notelpon_ibu`,`nama_sd`,`alamat_sd`,`lulus_sd`,`nama_smp`,`alamat_smp`,`lulus_smp`,`nama_sma`,`alamat_sma`,`lulus_sma`,`nama_pt`,`jurusan_pt`,`alamat_pt`,`tahun_wisuda`) values ('STR00109','wahyu prasetyo','wahyu','ngawi','0000-00-00',NULL,'','080808','','','0000-00-00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('STR00110','makhfud zamhari','zamhari',NULL,NULL,NULL,NULL,'089777777777',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('STR00133','dewi rahmah septiani','rahmah','','0000-00-00','0','desa basri kecamatan kendal','085735209127','','','0000-00-00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('STR00157','gandhis ulta','gandhis','tuluagung','0000-00-00','0','','080808','','gandhis ulta','0000-00-00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('STR00279','diana arofah','diana','ngawi','1995-12-02','0','desa basri','085735209127','dianarofiah@gmail.com','diana rohmah','1999-12-09','lanjar','petani','Basri','0987766655','sutirah','ibu rumah tangga','basri kendal','0988777788','','','0000-00-00','','','0000-00-00','MA Sidorejo','','0000-00-00','','','','0000-00-00'),('STR00346','agus hafid','hafid','magetan','0000-00-00','1','','080808','','','2015-12-09',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('STR00451','gandhis ulta','gandhis','tuluagung','1996-10-03','0','','080808','','','0000-00-00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('STR00567','binti nikmatul khoiriyah','binti','ngawi','1996-11-28','0','desa lor sawah dusun jetak','00000000','','','2013-12-12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('STR00574','','',NULL,NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('STR00696','siti susanti','susanti','magetan','2014-11-29','0','desa plaosan magetan','00000000','siti@gmail.com','siti suyanti','2015-11-29',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('STR00721','sakata gintoki','gintoki',NULL,NULL,NULL,NULL,'08977666','mail.gintoki@gmail.com',NULL,NULL,'','','','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('STR00728','maulidah fitriyah','fitri',NULL,NULL,'0',NULL,'085735209127',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('STR00869','makhfud zamhari','makhfud','ngawi','1995-12-02','1','ngawi','085735209127','','makhfud zamhari','0000-00-00','lanjar','petani','ngawi','','','','','','SDN Simo I','desa simo','2009-12-02','','','0000-00-00','','','0000-00-00','','','','0000-00-00');

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

insert  into `masukan_saran`(`id_masukan`,`nama_pengirim`,`email_pengirim`,`tentang`,`konten_saran`,`tanggal_masuk`,`status`) values ('SARAN422','demo','demo@demo.com','demo','demo','2017-12-06',0),('SARAN504','demo','demo@demo.com','demo','demo','2017-12-06',0),('SARAN730','diana','','perbaikan kamar','kamar 1','2017-12-07',0),('SARAN988','demo','demo@demo.com','demo','demo','2017-12-06',0);

/*Table structure for table `mata_pelajaran` */

DROP TABLE IF EXISTS `mata_pelajaran`;

CREATE TABLE `mata_pelajaran` (
  `id_pelajaran` varchar(8) NOT NULL,
  `nama_pelajaran` varchar(100) DEFAULT NULL,
  `id_pengajar` varchar(8) DEFAULT NULL,
  `id_kelas` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id_pelajaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mata_pelajaran` */

insert  into `mata_pelajaran`(`id_pelajaran`,`nama_pelajaran`,`id_pengajar`,`id_kelas`) values ('04909638','mutamimmah','STR00109','06232341');

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

/*Table structure for table `penilaian` */

DROP TABLE IF EXISTS `penilaian`;

CREATE TABLE `penilaian` (
  `id_penilaian` varchar(8) NOT NULL,
  `id_pelajaran` varchar(8) DEFAULT NULL,
  `id_kelas` varchar(8) DEFAULT NULL,
  `id_santri` varchar(8) DEFAULT NULL,
  `nilai` double DEFAULT NULL,
  PRIMARY KEY (`id_penilaian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `penilaian` */

insert  into `penilaian`(`id_penilaian`,`id_pelajaran`,`id_kelas`,`id_santri`,`nilai`) values ('09877','04909638','06232341','STR00110',0);

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

/*Table structure for table `transkelas` */

DROP TABLE IF EXISTS `transkelas`;

CREATE TABLE `transkelas` (
  `id_transkelas` varchar(8) NOT NULL,
  `idkelas` varchar(8) DEFAULT NULL,
  `id_santri` varchar(8) DEFAULT NULL,
  `ket` text,
  `status_aktif` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_transkelas`),
  KEY `transkelas_santri` (`id_santri`),
  KEY `transkelas_kelas` (`idkelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transkelas` */

insert  into `transkelas`(`id_transkelas`,`idkelas`,`id_santri`,`ket`,`status_aktif`) values ('52844969','33777249','STR00567','santri baru','close'),('80652813','06232341','STR00279','santri baru','open'),('92975959','06232341','STR00157','santri baru','open'),('trans098','KLS0908','STR00110','santri lama','open'),('trans099','KLS0908','STR00109','pindahan','close'),('trans988','KLS0908','STR00869','santri kalong','close');

/*Table structure for table `userlog` */

DROP TABLE IF EXISTS `userlog`;

CREATE TABLE `userlog` (
  `idLog` varchar(8) NOT NULL,
  `id_santri` varchar(8) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `passwordlog` text,
  `level` enum('superadmin','pengurusputra','pengurusputri','kamar','ustadz','santri','alumni') DEFAULT NULL,
  `decryptCode` text,
  PRIMARY KEY (`idLog`),
  KEY `fkLog` (`id_santri`),
  CONSTRAINT `fkLog` FOREIGN KEY (`id_santri`) REFERENCES `master_santri` (`id_santri`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `userlog` */

insert  into `userlog`(`idLog`,`id_santri`,`username`,`passwordlog`,`level`,`decryptCode`) values ('LOG00311','STR00133','rahmah','6d4af2ccb15e1cad2a042797e4a2f8c4','superadmin','085735209127'),('LOG00517','STR00109','wahyu','839e9c1a49e7ebdeddf258630a89a2bc','ustadz','080808'),('LOG00551','STR00279','diana','e172dd95f4feb21412a692e73929961e','santri','bismillah'),('LOG00560','STR00696','susanti','dd4b21e9ef71e1291183a46b913ae6f2','santri','00000000'),('LOG00632','STR00157','gandhis','839e9c1a49e7ebdeddf258630a89a2bc','santri','080808'),('LOG00752','STR00567','binti','dd4b21e9ef71e1291183a46b913ae6f2','santri','00000000'),('LOG00848','STR00869','makhfud','6d4af2ccb15e1cad2a042797e4a2f8c4','pengurusputra','085735209127'),('LOG00852','STR00869','makhfud','6d4af2ccb15e1cad2a042797e4a2f8c4','superadmin','085735209127'),('LOG00881','STR00721','gintoki','e172dd95f4feb21412a692e73929961e','alumni','bismillah'),('LOG00889','STR00346','hafid','839e9c1a49e7ebdeddf258630a89a2bc','santri','080808'),('LOG00903','STR00728','fitri','6d4af2ccb15e1cad2a042797e4a2f8c4','pengurusputri','085735209127'),('LOG00916','STR00110','zamhari','e69b4ac54446f4951084f8b0b0d5ebc0','santri','089777777777'),('LOG00922','STR00279','diana','6d4af2ccb15e1cad2a042797e4a2f8c4','alumni','085735209127'),('LOG00953','STR00696','susanti','dd4b21e9ef71e1291183a46b913ae6f2','pengurusputri','00000000');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
