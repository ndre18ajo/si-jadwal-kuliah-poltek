-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Mar 2020 pada 17.19
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_multi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alat_pinjaman`
--

CREATE TABLE `tb_alat_pinjaman` (
  `id_alat` int(2) NOT NULL,
  `nama_alat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_alat_pinjaman`
--

INSERT INTO `tb_alat_pinjaman` (`id_alat`, `nama_alat`) VALUES
(1, 'Proyektor'),
(2, 'Wireless');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `nip_dosen` int(19) NOT NULL,
  `nama_dosen` varchar(40) NOT NULL,
  `jk_dosen` enum('L','P') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `kode_matkul` varchar(20) NOT NULL,
  `nama_matkul` varchar(40) NOT NULL,
  `sks` int(1) NOT NULL,
  `semester` int(2) NOT NULL,
  `tingkat` int(2) NOT NULL,
  `waktu` varchar(15) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `dosen1` varchar(40) NOT NULL,
  `dosen2` varchar(40) NOT NULL,
  `koordinator` varchar(40) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `kode_ruangan` varchar(10) NOT NULL,
  `nama_alat` varchar(20) NOT NULL,
  `tahun_akademik` year(4) NOT NULL,
  `teori` int(1) NOT NULL,
  `praktik` int(1) NOT NULL,
  `klinik` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`kode_matkul`, `nama_matkul`, `sks`, `semester`, `tingkat`, `waktu`, `hari`, `dosen1`, `dosen2`, `koordinator`, `prodi`, `kode_ruangan`, `nama_alat`, `tahun_akademik`, `teori`, `praktik`, `klinik`) VALUES
('WAT 020208', 'Antropologi Kesehatan (T)', 2, 2, 1, '08.00-09.40 WIB', 'Senin', 'Ns. Hendri Heriyanto, M.Kep, ', 'Efrizon, SKM.,M.P.H.', 'Dr. Drg. Daisy Novira, MARS', 'D3 Keperawatan', 'IAN.II.5', 'Wireless', 2020, 2, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(2) NOT NULL,
  `nama_kelas` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'A'),
(2, 'B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nim_mhs` varchar(13) NOT NULL,
  `nama_mhs` varchar(40) NOT NULL,
  `tingkat` int(2) NOT NULL,
  `semester` int(2) NOT NULL,
  `prodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim_mhs`, `nama_mhs`, `tingkat`, `semester`, `prodi`) VALUES
('P0 5120217001', 'ADI AKBAR SANJAYA', 3, 5, 'D3 Keperawatan'),
('P0 5120217002', 'AHMAD ROFIQ', 3, 5, 'D3 Keperawatan'),
('P0 5120217003', 'ANNISA WULANDARI', 3, 5, 'D3 Keperawatan'),
('P0 5120217004', 'EDO ANDRIAN', 3, 5, 'D3 Keperawatan'),
('P0 5120217005', 'EMELIA SUSANTI', 3, 5, 'D3 Keperawatan'),
('P0 5120217006', 'FAJAR ALIFAH', 3, 5, 'D3 Keperawatan'),
('P0 5120217007', 'HENDRO SATIA PRATAMA', 3, 5, 'D3 Keperawatan'),
('P0 5120217008', 'INTAN PUTRI ANDRIANI', 3, 5, 'D3 Keperawatan'),
('P0 5120217009', 'LIA BAROQAH', 3, 5, 'D3 Keperawatan'),
('P0 5120217010', 'LIDYA DESTY LESTARI', 3, 5, 'D3 Keperawatan'),
('P0 5120217011', 'MEIDYAH PITALOKA', 3, 5, 'D3 Keperawatan'),
('P0 5120217012', 'MIFTAKHUL AUROSI', 3, 5, 'D3 Keperawatan'),
('P0 5120217013', 'MUHAMMAD IKHWAN', 3, 5, 'D3 Keperawatan'),
('P0 5120217014', 'NADIYA AYU NOPIHARTATI', 3, 5, 'D3 Keperawatan'),
('P0 5120217015', 'NIKEN DEWI MURTI', 3, 5, 'D3 Keperawatan'),
('P0 5120217016', 'NOFITA SARI', 3, 5, 'D3 Keperawatan'),
('P0 5120217017', 'NOVILA YUNITA SARI', 3, 5, 'D3 Keperawatan'),
('P0 5120217018', 'NURMALA DESKA APRILIANI', 3, 5, 'D3 Keperawatan'),
('P0 5120217019', 'PASKI ASMA SARI', 3, 5, 'D3 Keperawatan'),
('P0 5120217020', 'RAHMAT WALUPAN', 3, 5, 'D3 Keperawatan'),
('P0 5120217021', 'RAPIKA APRILIANI', 3, 5, 'D3 Keperawatan'),
('P0 5120217022', 'RARA ANDIKA AFRIANTARI', 3, 5, 'D3 Keperawatan'),
('P0 5120217023', 'REGINA DESYANDA FITRISCA', 3, 5, 'D3 Keperawatan'),
('P0 5120217024', 'REPAL MAHENDRA', 3, 5, 'D3 Keperawatan'),
('P0 5120217025', 'RIADHA PRATIWI', 3, 5, 'D3 Keperawatan'),
('P0 5120217026', 'RINI TRI JULIASNI', 3, 5, 'D3 Keperawatan'),
('P0 5120217027', 'RONY HADIWIJAYA', 3, 5, 'D3 Keperawatan'),
('P0 5120217028', 'SANDRA DEBI MEIRIZA', 3, 5, 'D3 Keperawatan'),
('P0 5120217029', 'SELVERIDA BORU GULTOM', 3, 5, 'D3 Keperawatan'),
('P0 5120217030', 'SILVIA DWI ASTUTI', 3, 5, 'D3 Keperawatan'),
('P0 5120217031', 'TASYA EMA FURI', 3, 5, 'D3 Keperawatan'),
('P0 5120217032', 'TIARA AFRIANI', 3, 5, 'D3 Keperawatan'),
('P0 5120217033', 'VEMI ELIYA MEGA SURYA', 3, 5, 'D3 Keperawatan'),
('P0 5120217034', 'VENI MAISAH', 3, 5, 'D3 Keperawatan'),
('P0 5120217035', 'VIONI FEBRIANTI', 3, 5, 'D3 Keperawatan'),
('P0 5120217036', 'YUNI MELLIANTI', 3, 5, 'D3 Keperawatan'),
('P0 5120217037', 'YUNITA HERLINA', 3, 5, 'D3 Keperawatan'),
('P0 5120217038', 'ADELIA SAFITRI', 3, 5, 'D3 Keperawatan'),
('P0 5120217039', 'AMELIA TRIANI', 3, 5, 'D3 Keperawatan'),
('P0 5120217040', 'ANDIKA JUNALDI', 3, 5, 'D3 Keperawatan'),
('P0 5120217041', 'ANEKE OKTRIANA PUTRI', 3, 5, 'D3 Keperawatan'),
('P0 5120217042', 'BELLA SANTIKA', 3, 5, 'D3 Keperawatan'),
('P0 5120217044', 'DARIKA REFORMA', 3, 5, 'D3 Keperawatan'),
('P0 5120217045', 'DORA TRI AFRIZA', 3, 5, 'D3 Keperawatan'),
('P0 5120217046', 'ELISA PRATIWI', 3, 5, 'D3 Keperawatan'),
('P0 5120217047', 'ERLITA AGUSTIA', 3, 5, 'D3 Keperawatan'),
('P0 5120217048', 'FIOLA DESTA SAFITRI', 3, 5, 'D3 Keperawatan'),
('P0 5120217049', 'FITRIANI BELAJAYA NEGARA', 3, 5, 'D3 Keperawatan'),
('P0 5120217050', 'HERMA AGUSTRIANI', 3, 5, 'D3 Keperawatan'),
('P0 5120217051', 'IVANA YOLANDA', 3, 5, 'D3 Keperawatan'),
('P0 5120217052', 'JUNITA SUTRA DENSI', 3, 5, 'D3 Keperawatan'),
('P0 5120217053', 'KARINA FEBY EMANUELLA', 3, 5, 'D3 Keperawatan'),
('P0 5120217054', 'KRISTINA MEI HARIATY S', 3, 5, 'D3 Keperawatan'),
('P0 5120217055', 'LEZA DWI JUNIARTI', 3, 5, 'D3 Keperawatan'),
('P0 5120217056', 'LISKALINA SILALAHI', 3, 5, 'D3 Keperawatan'),
('P0 5120217057', 'LIZA TRIA OKINI', 3, 5, 'D3 Keperawatan'),
('P0 5120217058', 'MESSY MALISA', 3, 5, 'D3 Keperawatan'),
('P0 5120217060', 'NELY ASTUTI BR BUTAR BUTAR', 3, 5, 'D3 Keperawatan'),
('P0 5120217061', 'NOVIA YULITA', 3, 5, 'D3 Keperawatan'),
('P0 5120217062', 'NURSIA HAMITHA', 3, 5, 'D3 Keperawatan'),
('P0 5120217063', 'PEMI PURNAMA SARI', 3, 5, 'D3 Keperawatan'),
('P0 5120217064', 'PUTRI GHINA HANISA', 3, 5, 'D3 Keperawatan'),
('P0 5120217065', 'QHORY ANGGRAINI', 3, 5, 'D3 Keperawatan'),
('P0 5120217066', 'RADIKA TIRTA OKA', 3, 5, 'D3 Keperawatan'),
('P0 5120217067', 'RAMADANA HAFIRA', 3, 5, 'D3 Keperawatan'),
('P0 5120217068', 'RIYU KARINTA', 3, 5, 'D3 Keperawatan'),
('P0 5120217069', 'SEPTRIA ROSSA', 3, 5, 'D3 Keperawatan'),
('P0 5120217070', 'ULIT TIA PURNAMA', 3, 5, 'D3 Keperawatan'),
('P0 5120217071', 'VINNA HERAWATI MELINDA', 3, 5, 'D3 Keperawatan'),
('P0 5120217072', 'VIONA YUNITA ANDILA', 3, 5, 'D3 Keperawatan'),
('P0 5120217073', 'YENNI SINAGA', 3, 5, 'D3 Keperawatan'),
('P0 5120217074', 'YUNITA ANGRAINI', 3, 5, 'D3 Keperawatan'),
('P0 5120218001', 'AFIFAH JIHAN NABILLAH', 2, 4, 'D3 Keperawatan'),
('P0 5120218002', 'AMELIA UTAMY SEBIN', 2, 4, 'D3 Keperawatan'),
('P0 5120218003', 'ATEK CHARTIKA', 2, 4, 'D3 Keperawatan'),
('P0 5120218004', 'BAGUS RESTU SAPUTRA', 2, 4, 'D3 Keperawatan'),
('P0 5120218005', 'DEKI MERDIANSAH', 2, 4, 'D3 Keperawatan'),
('P0 5120218006', 'DESTA EFMA THEANA', 2, 4, 'D3 Keperawatan'),
('P0 5120218007', 'DITHA KESIA EKA PUTRI', 2, 4, 'D3 Keperawatan'),
('P0 5120218008', 'EVA KURNIAWATI', 2, 4, 'D3 Keperawatan'),
('P0 5120218009', 'GITA FEBRIANTI', 2, 4, 'D3 Keperawatan'),
('P0 5120218010', 'INDAH KURNIA NINGSIH  ', 2, 4, 'D3 Keperawatan'),
('P0 5120218011', 'INDAH SAPITRI         ', 2, 4, 'D3 Keperawatan'),
('P0 5120218012', 'JEVI OPINI', 2, 4, 'D3 Keperawatan'),
('P0 5120218013', 'KHAIRIL CANDRA        ', 2, 4, 'D3 Keperawatan'),
('P0 5120218014', 'LELI AGNI PUSPITA     ', 2, 4, 'D3 Keperawatan'),
('P0 5120218015', 'LIKA NOVELLA          ', 2, 4, 'D3 Keperawatan'),
('P0 5120218016', 'LITA OKTAPIA SARI     ', 2, 4, 'D3 Keperawatan'),
('P0 5120218017', 'M IMAM WAHYUDI        ', 2, 4, 'D3 Keperawatan'),
('P0 5120218018', 'MELINDA IKA FITRIANI  ', 2, 4, 'D3 Keperawatan'),
('P0 5120218019', 'MELINDA WIDIANTI      ', 2, 4, 'D3 Keperawatan'),
('P0 5120218020', 'MELISSA DESFA FITRI   ', 2, 4, 'D3 Keperawatan'),
('P0 5120218021', 'MELLA MARIANTI PUTRI  ', 2, 4, 'D3 Keperawatan'),
('P0 5120218022', 'MELTA SARI', 2, 4, 'D3 Keperawatan'),
('P0 5120218023', 'MONIQA YULAN SAFITRI', 2, 4, 'D3 Keperawatan'),
('P0 5120218024', 'NABILA FITRIANI', 2, 4, 'D3 Keperawatan'),
('P0 5120218025', 'NADYA ARBAINI', 2, 4, 'D3 Keperawatan'),
('P0 5120218026', 'NUR ANISA ARIFIANTI', 2, 4, 'D3 Keperawatan'),
('P0 5120218027', 'OBI AJI HUSEN', 2, 4, 'D3 Keperawatan'),
('P0 5120218028', 'POPRI YANI', 2, 4, 'D3 Keperawatan'),
('P0 5120218030', 'RESI WULANDARI AR', 2, 4, 'D3 Keperawatan'),
('P0 5120218031', 'RETNO AJENG WULANDARI', 2, 4, 'D3 Keperawatan'),
('P0 5120218032', 'REZKA YUNISA', 2, 4, 'D3 Keperawatan'),
('P0 5120218033', 'RINSI UTAMI', 2, 4, 'D3 Keperawatan'),
('P0 5120218034', 'SEFTI SITI AISYAH', 2, 4, 'D3 Keperawatan'),
('P0 5120218035', 'SELLA SEPTIANA        ', 2, 4, 'D3 Keperawatan'),
('P0 5120218036', 'SENDYA PUTRI ANTONI', 2, 4, 'D3 Keperawatan'),
('P0 5120218037', 'SENLI YOLANDA', 2, 4, 'D3 Keperawatan'),
('P0 5120218038', 'SEPSIKA', 2, 4, 'D3 Keperawatan'),
('P0 5120218039', 'SETPA JUNIAR', 2, 4, 'D3 Keperawatan'),
('P0 5120218040', 'SINTA FITRI YANTI', 2, 4, 'D3 Keperawatan'),
('P0 5120218042', 'SOFI GUSTIAN', 2, 4, 'D3 Keperawatan'),
('P0 5120218043', 'VERONIKA SIMBOLON', 2, 4, 'D3 Keperawatan'),
('P0 5120218044', 'YOLANDA AULIA K', 2, 4, 'D3 Keperawatan'),
('P0 5120218045', 'ADE SETIAWAN          ', 2, 4, 'D3 Keperawatan'),
('P0 5120218047', 'ARIF DARYANTO         ', 2, 4, 'D3 Keperawatan'),
('P0 5120218048', 'ARMANDA OGILVI ALVAREZA      ', 2, 4, 'D3 Keperawatan'),
('P0 5120218049', 'AYU INDRA SEPTIAWATI  ', 2, 4, 'D3 Keperawatan'),
('P0 5120218051', 'BALQIS PURNAMA DONA   ', 2, 4, 'D3 Keperawatan'),
('P0 5120218052', 'BELLA SAMYA DWI PUTRI ', 2, 4, 'D3 Keperawatan'),
('P0 5120218053', 'CINDY EKA JUNIARNI    ', 2, 4, 'D3 Keperawatan'),
('P0 5120218055', 'DAPIT SOPIANA SILABAN ', 2, 4, 'D3 Keperawatan'),
('P0 5120218056', 'DEA MONICA            ', 2, 4, 'D3 Keperawatan'),
('P0 5120218058', 'DERA TRI YOLENDARI    ', 2, 4, 'D3 Keperawatan'),
('P0 5120218059', 'DESMITA PUTRI ANI     ', 2, 4, 'D3 Keperawatan'),
('P0 5120218060', 'DIKA                  ', 2, 4, 'D3 Keperawatan'),
('P0 5120218061', 'DINA ANGGRAINI        ', 2, 4, 'D3 Keperawatan'),
('P0 5120218062', 'DINDA RUPITA          ', 2, 4, 'D3 Keperawatan'),
('P0 5120218063', 'DITA AGNESTI          ', 2, 4, 'D3 Keperawatan'),
('P0 5120218064', 'EGA MARTI ANASTASYA   ', 2, 4, 'D3 Keperawatan'),
('P0 5120218065', 'ELSA MILASARI         ', 2, 4, 'D3 Keperawatan'),
('P0 5120218066', 'ELSI                  ', 2, 4, 'D3 Keperawatan'),
('P0 5120218067', 'ELWINDRI RAMEKO       ', 2, 4, 'D3 Keperawatan'),
('P0 5120218068', 'ENNY FEBINA SARI      ', 2, 4, 'D3 Keperawatan'),
('P0 5120218070', 'IKHTIAR WAHYUDI       ', 2, 4, 'D3 Keperawatan'),
('P0 5120218071', 'INDA PURWANTI         ', 2, 4, 'D3 Keperawatan'),
('P0 5120218072', 'LESMY SASMITA', 2, 4, 'D3 Keperawatan'),
('P0 5120218073', 'MURDANI FURIYANTI', 2, 4, 'D3 Keperawatan'),
('P0 5120218074', 'NADIA DWI WULANDARI', 2, 4, 'D3 Keperawatan'),
('P0 5120218075', 'NOPERDI', 2, 4, 'D3 Keperawatan'),
('P0 5120218076', 'RAMADAN', 2, 4, 'D3 Keperawatan'),
('P0 5120218077', 'SERLI DWI MARDIANTI', 2, 4, 'D3 Keperawatan'),
('P0 5120218079', 'TAMARA ANELVA          ', 2, 4, 'D3 Keperawatan'),
('P0 5120218080', 'TIYA HILMAWAN', 2, 4, 'D3 Keperawatan'),
('P0 5120218081', 'TRY GUNAWAN', 2, 4, 'D3 Keperawatan'),
('P0 5120218082', 'VALERIAN HAIDAR       ', 2, 4, 'D3 Keperawatan'),
('P0 5120218083', 'VANNY PUSPITA SARI    ', 2, 4, 'D3 Keperawatan'),
('P0 5120218084', 'VENNI HARMEILAWATI R  ', 2, 4, 'D3 Keperawatan'),
('P0 5120218085', 'VENY EKA MARISCA      ', 2, 4, 'D3 Keperawatan'),
('P0 5120218086', 'WELDA ANJELINA', 2, 4, 'D3 Keperawatan'),
('P0 5120219001', 'AGIP ALVANDO          ', 1, 2, 'D3 Keperawatan'),
('P0 5120219002', 'AGUNG EPRIYANSAH      ', 1, 2, 'D3 Keperawatan'),
('P0 5120219003', 'AMOY SP CHAIRUL', 1, 2, 'D3 Keperawatan'),
('P0 5120219004', 'ANDELI QONITAH USMAN  ', 1, 2, 'D3 Keperawatan'),
('P0 5120219005', 'ARIA MAICI YOSEPA ', 1, 2, 'D3 Keperawatan'),
('P0 5120219006', 'AZZAR RATUR RAHMA MH  ', 1, 2, 'D3 Keperawatan'),
('P0 5120219007', 'BELLAH APRITA         ', 1, 2, 'D3 Keperawatan'),
('P0 5120219008', 'CITRANGGUN JUNISA S   ', 1, 2, 'D3 Keperawatan'),
('P0 5120219009', 'DELA JANIARTI', 1, 2, 'D3 Keperawatan'),
('P0 5120219010', 'DENNY EMIRSADIQ       ', 1, 2, 'D3 Keperawatan'),
('P0 5120219011', 'DETIA VANOZA          ', 1, 2, 'D3 Keperawatan'),
('P0 5120219012', 'EDO BISRI AFRIANSA    ', 1, 2, 'D3 Keperawatan'),
('P0 5120219013', 'ELFINA TRI TASYA      ', 1, 2, 'D3 Keperawatan'),
('P0 5120219014', 'FRISKA OKTAVIA        ', 1, 2, 'D3 Keperawatan'),
('P0 5120219015', 'HANIKA FEBTI', 1, 2, 'D3 Keperawatan'),
('P0 5120219016', 'HANISYAH HERTI DWISARI', 1, 2, 'D3 Keperawatan'),
('P0 5120219017', 'INDA ANDREANI         ', 1, 2, 'D3 Keperawatan'),
('P0 5120219018', 'JULIAN PITER', 1, 2, 'D3 Keperawatan'),
('P0 5120219020', 'MAHPIDA MASKADETA D   ', 1, 2, 'D3 Keperawatan'),
('P0 5120219021', 'MUTIA ARDILLA FITRI', 1, 2, 'D3 Keperawatan'),
('P0 5120219022', 'NADILA DWI HERLINA', 1, 2, 'D3 Keperawatan'),
('P0 5120219023', 'NALA MIRATUL SOLEHA   ', 1, 2, 'D3 Keperawatan'),
('P0 5120219024', 'NUR AISYAH ', 1, 2, 'D3 Keperawatan'),
('P0 5120219025', 'NURUL FAJRI AMATULLAH', 1, 2, 'D3 Keperawatan'),
('P0 5120219026', 'PAWAN PRANATA         ', 1, 2, 'D3 Keperawatan'),
('P0 5120219027', 'PEBRIYANTO            ', 1, 2, 'D3 Keperawatan'),
('P0 5120219028', 'PUPUT SARI PUTRI      ', 1, 2, 'D3 Keperawatan'),
('P0 5120219029', 'REZKI RAHMADANI       ', 1, 2, 'D3 Keperawatan'),
('P0 5120219030', 'RIECE ANDRELASARI ', 1, 2, 'D3 Keperawatan'),
('P0 5120219031', 'SHINTANIA MAYZARO', 1, 2, 'D3 Keperawatan'),
('P0 5120219032', 'SILPI YULIA NENGSI', 1, 2, 'D3 Keperawatan'),
('P0 5120219033', 'SOFYAN SYAHRO ROMADHAN', 1, 2, 'D3 Keperawatan'),
('P0 5120219034', 'SYAHFARMAN', 1, 2, 'D3 Keperawatan'),
('P0 5120219035', 'TIARA ARISKA SARI     ', 1, 2, 'D3 Keperawatan'),
('P0 5120219036', 'TRIA ANISA KUSUMAH    ', 1, 2, 'D3 Keperawatan'),
('P0 5120219037', 'TRISNA WULAN SAFITRI  ', 1, 2, 'D3 Keperawatan'),
('P0 5120219038', 'VEZKA SARI ', 1, 2, 'D3 Keperawatan'),
('P0 5120219039', 'VIOLA KRISELLY', 1, 2, 'D3 Keperawatan'),
('P0 5120219040', 'WIRA SAPUTRA          ', 1, 2, 'D3 Keperawatan'),
('P0 5120219041', 'WULAN ANGGRAENY       ', 1, 2, 'D3 Keperawatan'),
('P0 5120219043', 'YINITA RASIYANI       ', 1, 2, 'D3 Keperawatan'),
('P0 5120219044', 'YOGI KURNIAWAN ', 1, 2, 'D3 Keperawatan'),
('P0 5120219045', 'YOLA ATIKA', 1, 2, 'D3 Keperawatan'),
('P0 5120219046', 'AA DENO SAPUTRA', 1, 2, 'D3 Keperawatan'),
('P0 5120219047', 'AFRINA ELMI DAYATI    ', 1, 2, 'D3 Keperawatan'),
('P0 5120219048', 'AISYAH RAHMADANI', 1, 2, 'D3 Keperawatan'),
('P0 5120219050', 'ANISA PUTRI', 1, 2, 'D3 Keperawatan'),
('P0 5120219051', 'ANNISA RAHMARYANTI', 1, 2, 'D3 Keperawatan'),
('P0 5120219052', 'ARIEN NURUL ANNISA', 1, 2, 'D3 Keperawatan'),
('P0 5120219053', 'ASEP ARIO PUTRA', 1, 2, 'D3 Keperawatan'),
('P0 5120219054', 'ATIQ PADILLAH         ', 1, 2, 'D3 Keperawatan'),
('P0 5120219055', 'AYU WIDYA SARI        ', 1, 2, 'D3 Keperawatan'),
('P0 5120219056', 'AZELYA PUTRI ALESSANDRA', 1, 2, 'D3 Keperawatan'),
('P0 5120219057', 'BEBBY APRILIA DEWINTA', 1, 2, 'D3 Keperawatan'),
('P0 5120219058', 'DEDE SAPUTRI          ', 1, 2, 'D3 Keperawatan'),
('P0 5120219059', 'DEWI ANGGRAINI        ', 1, 2, 'D3 Keperawatan'),
('P0 5120219060', 'DIAN ANANTYA P P      ', 1, 2, 'D3 Keperawatan'),
('P0 5120219061', 'ENNO TRISTAN          ', 1, 2, 'D3 Keperawatan'),
('P0 5120219062', 'FENYSHA UTAMI         ', 1, 2, 'D3 Keperawatan'),
('P0 5120219063', 'FICA FEBRILIA         ', 1, 2, 'D3 Keperawatan'),
('P0 5120219064', 'FIEN DIMIYANTI        ', 1, 2, 'D3 Keperawatan'),
('P0 5120219065', 'HELSA MAYORA', 1, 2, 'D3 Keperawatan'),
('P0 5120219066', 'MAYASTRA', 1, 2, 'D3 Keperawatan'),
('P0 5120219067', 'MEDERLINE             ', 1, 2, 'D3 Keperawatan'),
('P0 5120219068', 'MELZI ALZANI          ', 1, 2, 'D3 Keperawatan'),
('P0 5120219069', 'MITHA NATALIA         ', 1, 2, 'D3 Keperawatan'),
('P0 5120219070', 'NAVA NOFITRIANI       ', 1, 2, 'D3 Keperawatan'),
('P0 5120219071', 'NOSI RAMITA', 1, 2, 'D3 Keperawatan'),
('P0 5120219072', 'NURUL AFNI            ', 1, 2, 'D3 Keperawatan'),
('P0 5120219073', 'OCHA LESTI PRATAMA    ', 1, 2, 'D3 Keperawatan'),
('P0 5120219074', 'PARTI KURNIA SARI     ', 1, 2, 'D3 Keperawatan'),
('P0 5120219075', 'PEGGI DWI MARTIKA     ', 1, 2, 'D3 Keperawatan'),
('P0 5120219076', 'PUPUT RAMADHANI       ', 1, 2, 'D3 Keperawatan'),
('P0 5120219077', 'RESVI ZULPIA ', 1, 2, 'D3 Keperawatan'),
('P0 5120219078', 'RIFANA RAMADHANIA', 1, 2, 'D3 Keperawatan'),
('P0 5120219079', 'RIGA TRI WAHYUDI      ', 1, 2, 'D3 Keperawatan'),
('P0 5120219080', 'RIZKY PURNAMA RAMADHAN', 1, 2, 'D3 Keperawatan'),
('P0 5120219081', 'SHEILA OCTA BOUTIVAR  ', 1, 2, 'D3 Keperawatan'),
('P0 5120219082', 'SONY TRISNO ASTO PUTRA', 1, 2, 'D3 Keperawatan'),
('P0 5120219083', 'SRI WAHYUNI           ', 1, 2, 'D3 Keperawatan'),
('P0 5120219084', 'TIA SITI AISYAH       ', 1, 2, 'D3 Keperawatan'),
('P0 5120219085', 'TIARA ANUGRA', 1, 2, 'D3 Keperawatan'),
('P0 5120219086', 'VANIA AFTA DELFIE I   ', 1, 2, 'D3 Keperawatan'),
('P0 5120219087', 'VIVI OKTAVIANI        ', 1, 2, 'D3 Keperawatan'),
('P0 5120219088', 'WAHYUNI SRI UTAMI     ', 1, 2, 'D3 Keperawatan'),
('P0 5120219089', 'WIDYA ANDRIANI', 1, 2, 'D3 Keperawatan'),
('P0 5120219090', 'YULIA ADEVIA WINATA', 1, 2, 'D3 Keperawatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_matkul`
--

CREATE TABLE `tb_matkul` (
  `kode_matkul` varchar(20) NOT NULL,
  `nama_matkul` varchar(40) NOT NULL,
  `sks` int(1) NOT NULL,
  `semester` int(2) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `tingkat` int(2) NOT NULL,
  `tahun_akademik` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_matkul`
--

INSERT INTO `tb_matkul` (`kode_matkul`, `nama_matkul`, `sks`, `semester`, `prodi`, `tingkat`, `tahun_akademik`) VALUES
('WAT 010103', '', 0, 0, '', 0, 0000),
('WAT 020207', '', 0, 0, '', 0, 0000),
('WAT 020208', 'Antropologi Kesehatan (T)', 2, 2, 'D3 Keperawatan', 1, 2020),
('WAT 020209', '', 0, 0, '', 0, 0000),
('WAT 030212', '', 0, 0, '', 0, 0000),
('WAT 030214', '', 0, 0, '', 0, 0000),
('WAT 040216', '', 0, 0, '', 0, 0000),
('WAT 040220', '', 0, 0, '', 0, 0000),
('WAT 050224', '', 0, 0, '', 0, 0000),
('WAT ML 0241', '', 0, 0, '', 0, 0000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id_prodi` int(2) NOT NULL,
  `prodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_prodi`
--

INSERT INTO `tb_prodi` (`id_prodi`, `prodi`) VALUES
(1, 'D3 Keperawatan'),
(2, 'Sarjana Terapan Keperawatan'),
(3, 'NERS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ruangan`
--

CREATE TABLE `tb_ruangan` (
  `kode_ruangan` varchar(15) NOT NULL,
  `kapasitas_ruangan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ruangan`
--

INSERT INTO `tb_ruangan` (`kode_ruangan`, `kapasitas_ruangan`) VALUES
('IAN.II.4', 40),
('IAN.II.5', 40);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `level` enum('admin','dosen','mahasiswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id`, `username`, `nama`, `email`, `password`, `level`) VALUES
(1, 'admin', 'Administrator', 'admin@admin.com', '123', 'admin'),
(2, 'mahasiswa', 'Mahasiswa', 'member@member.com', '123', 'mahasiswa'),
(3, 'dosen', 'Dosen', 'moderator@moderator.com', '123', 'dosen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alat_pinjaman`
--
ALTER TABLE `tb_alat_pinjaman`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`nip_dosen`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`kode_matkul`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nim_mhs`);

--
-- Indexes for table `tb_matkul`
--
ALTER TABLE `tb_matkul`
  ADD PRIMARY KEY (`kode_matkul`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tb_ruangan`
--
ALTER TABLE `tb_ruangan`
  ADD PRIMARY KEY (`kode_ruangan`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alat_pinjaman`
--
ALTER TABLE `tb_alat_pinjaman`
  MODIFY `id_alat` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  MODIFY `id_prodi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
