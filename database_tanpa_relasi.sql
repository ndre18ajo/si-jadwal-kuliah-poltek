/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 5.7.29-0ubuntu0.18.04.1 : Database - 2020_sistem_penjadwalan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `tb_alat_pinjaman` */

DROP TABLE IF EXISTS `tb_alat_pinjaman`;

CREATE TABLE `tb_alat_pinjaman` (
  `id_alat` int(11) NOT NULL AUTO_INCREMENT,
  `nama_alat` varchar(20) DEFAULT NULL,
  `user_id` int(20) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id_alat`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_alat_pinjaman` */

insert  into `tb_alat_pinjaman`(`id_alat`,`nama_alat`,`user_id`,`status`) values 
(1,'printer',1,1);

/*Table structure for table `tb_dosen` */

DROP TABLE IF EXISTS `tb_dosen`;

CREATE TABLE `tb_dosen` (
  `id_dosen` int(11) NOT NULL AUTO_INCREMENT,
  `nip_dosen` int(19) DEFAULT NULL,
  `nama_dosen` varchar(40) DEFAULT NULL,
  `jk_dosen` enum('L','P') DEFAULT NULL,
  PRIMARY KEY (`id_dosen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_dosen` */

/*Table structure for table `tb_jadwal` */

DROP TABLE IF EXISTS `tb_jadwal`;

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `id_matkul` int(11) DEFAULT NULL,
  `kode_matkul` varchar(20) DEFAULT NULL,
  `nama_matkul` varchar(40) DEFAULT NULL,
  `sks` int(1) DEFAULT NULL,
  `semester` int(2) DEFAULT NULL,
  `tingkat` int(2) DEFAULT NULL,
  `waktu` varchar(15) DEFAULT NULL,
  `hari` varchar(10) DEFAULT NULL,
  `id_dosen1` int(11) DEFAULT NULL,
  `dosen1` varchar(40) DEFAULT NULL,
  `id_dosen2` int(11) DEFAULT NULL,
  `dosen2` varchar(40) DEFAULT NULL,
  `id_dosen_koordinator` int(11) DEFAULT NULL,
  `koordinator` varchar(40) DEFAULT NULL,
  `id_prodi` int(11) DEFAULT NULL,
  `prodi` varchar(30) DEFAULT NULL,
  `id_ruangan` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `kode_ruangan` varchar(10) DEFAULT NULL,
  `id_alat` int(11) DEFAULT NULL,
  `nama_alat` varchar(20) DEFAULT NULL,
  `tahun_akademik` year(4) DEFAULT NULL,
  `teori` int(1) DEFAULT NULL,
  `praktik` int(1) DEFAULT NULL,
  `klinik` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_jadwal` */

/*Table structure for table `tb_kelas` */

DROP TABLE IF EXISTS `tb_kelas`;

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_kelas` */

/*Table structure for table `tb_mahasiswa` */

DROP TABLE IF EXISTS `tb_mahasiswa`;

CREATE TABLE `tb_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT,
  `nim_mhs` varchar(255) DEFAULT NULL,
  `nama_mhs` varchar(255) DEFAULT NULL,
  `tingkat` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `prodi` varchar(255) DEFAULT NULL,
  `id_prodi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mahasiswa`)

/*Data for the table `tb_mahasiswa` */

/*Table structure for table `tb_matkul` */

DROP TABLE IF EXISTS `tb_matkul`;

CREATE TABLE `tb_matkul` (
  `id_matkul` int(11) NOT NULL AUTO_INCREMENT,
  `kode_matkul` varchar(20) DEFAULT NULL,
  `nama_matkul` varchar(40) DEFAULT NULL,
  `sks` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `id_prodi` int(11) DEFAULT NULL,
  `prodi` varchar(30) DEFAULT NULL,
  `tingkat` int(11) DEFAULT NULL,
  `tahun_akademik` year(4) DEFAULT NULL,
  PRIMARY KEY (`id_matkul`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_matkul` */

/*Table structure for table `tb_prodi` */

DROP TABLE IF EXISTS `tb_prodi`;

CREATE TABLE `tb_prodi` (
  `id_prodi` int(11) NOT NULL AUTO_INCREMENT,
  `prodi` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_prodi` */

/*Table structure for table `tb_ruangan` */

DROP TABLE IF EXISTS `tb_ruangan`;

CREATE TABLE `tb_ruangan` (
  `id_ruangan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_ruangan` varchar(15) DEFAULT NULL,
  `kapasitas_ruangan` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_ruangan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_ruangan` */

/*Table structure for table `tb_users` */

DROP TABLE IF EXISTS `tb_users`;

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) DEFAULT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `password` varchar(35) DEFAULT NULL,
  `level` enum('admin','dosen','mahasiswa') DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tb_users` */

insert  into `tb_users`(`id`,`username`,`nama`,`email`,`password`,`level`,`foto`) values 
(1,'admin','admin','admin@admin.com','123','admin',NULL),
(2,'dosen','dosen','dosen@admin.com','123','dosen',NULL),
(3,'mahasiswa','mahasiswa','mahasiswa@admin.com','123','mahasiswa',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
