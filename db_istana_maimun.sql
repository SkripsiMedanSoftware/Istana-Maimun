-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2020 at 08:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_istana_maimun`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_acara`
--

CREATE TABLE `tbl_acara` (
  `acara_id` int(11) NOT NULL,
  `acara_judul` varchar(150) DEFAULT NULL,
  `acara_deskripsi` text DEFAULT NULL,
  `acara_photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_acara`
--

INSERT INTO `tbl_acara` (`acara_id`, `acara_judul`, `acara_deskripsi`, `acara_photo`) VALUES
(5, 'ACARA', 'Istana Maimun memiliki halaman yang sangat luas dimana di halaman tersebut terdapat rumput sehingga wisatawan sering melakukan “piknik” di halaman Istana Maimun. Selain itu, halaman Istana Maimun juga sering digunakan sebagai tempat untuk menggelar acara-acara baik itu acara musik, acara keagamaan dan sebagainya. Di tahun 2019-2020 cukup banyak acara yang digelar di Istana Maimun, seperti konser band Padi Reborn, Fourtwenty, acara keagamaan seperti MTQ Nasional, acara family gathering dari perusahaan-perusahaan, acara-acara yang digelar oleh perusahaan seperti Grab, Gojek, Indosat, Honda, Yamaha dan lain-lain.\r\n\r\nTerkadang, halaman Istana Maimun juga dapat digunakan  untuk acara foto pre wedding, acara foto-foto dari reuni sebuah komunitas dan lain sebagainya.\r\n\r\nUntuk permohonan izin nya dapat menghubungi Ketua Yayasan Sultan Makmoen Al Rasyid yaitu Bapak Ir.Tengku Reizan Ivansyah (Tengku Embi).\r\n\r\n \r\n', 'c2e246248391e0d298216e5c3759e0e8.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admins`
--

CREATE TABLE `tbl_admins` (
  `admins_id` int(11) NOT NULL,
  `admins_nama` varchar(50) DEFAULT NULL,
  `admins_jenkel` varchar(2) DEFAULT NULL,
  `admins_username` varchar(30) DEFAULT NULL,
  `admins_password` varchar(35) DEFAULT NULL,
  `admins_email` varchar(50) DEFAULT NULL,
  `admins_nohp` varchar(20) DEFAULT NULL,
  `admins_status` int(2) DEFAULT 1,
  `admins_level` varchar(3) DEFAULT NULL,
  `admins_register` timestamp NULL DEFAULT current_timestamp(),
  `admins_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admins`
--

INSERT INTO `tbl_admins` (`admins_id`, `admins_nama`, `admins_jenkel`, `admins_username`, `admins_password`, `admins_email`, `admins_nohp`, `admins_status`, `admins_level`, `admins_register`, `admins_photo`) VALUES
(3, 'M Haviz ', 'L', 'aishasibuan', '585bbbc78e5d0c0b9ddaa12195e9597c', 'mhavishasibuan@gmail.com', '082134489030', 1, '1', '2020-07-10 12:32:59', '24e4ded1c99a0c152ff131fbf0e1ddc5.jpg'),
(5, 'agus', 'L', 'agus', 'fdf169558242ee051cca1479770ebac3', 'agus@gmail.com', 'agus', 1, '1', '2020-08-13 14:11:08', 'd9f5d00e5809405506a4731486e36cf5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fasilitas`
--

CREATE TABLE `tbl_fasilitas` (
  `fasilitas_id` int(11) NOT NULL,
  `fasilitas_judul` varchar(150) DEFAULT NULL,
  `fasilitas_deskripsi` text DEFAULT NULL,
  `fasilitas_photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fasilitas`
--

INSERT INTO `tbl_fasilitas` (`fasilitas_id`, `fasilitas_judul`, `fasilitas_deskripsi`, `fasilitas_photo`) VALUES
(5, 'FASILITAS', 'Harga tiket masuk ke Istana Maimun hanya Rp.10.000,- untuk 1 orang dan Rp.5.000,- untuk anak sekolah. Sedangkan untuk wisatawan yang tidak naik ke atas Istana Maimun dan hanya bermain di sekitar halaman Istana Maimun tidak dikenakan biaya, cukup hanya membayar biaya parkir kendaraan saja.\r\n\r\nDi Istana Maimun terdapat beberapa fasilitas yang dapat digunakan oleh wisatawan yang berkunjung ke Istana Maimun.\r\n\r\nSalah satu nya adalah persewaan baju adat yang terdapat di Istana Maimun.Untuk persewaan baju adat, harganya beragam mulai dari Rp.10.000,- untuk pakaian standard dan bisa mencapai hingga Rp.400.000,- untuk pakaian dengan aksesoris khusus, umumnya pakaian dengan aksesoris khusus diperuntukkan untuk wanita saja, untuk pria biasanya hanya menggunakan pakaian standard. Selain itu, persewaan baju adat juga menyediakan jasa foto yang dapat dicetak langsung dengan hanya menunggu beberapa menit untuk kenang-kenangan.\r\n\r\nFasilitas lainnya adalah stand persewaan baju adat tersebut juga menjual berbagai macam souvenir yang berkaitan dengan adat melayu seperti kain songket, baju bermotif Istana Maimun, gantungan kunci, fridge magnet, dan berbagai macam souvenir lainnya.\r\n\r\nSelain itu dihalaman Istana Maimun juga terdapat stand-stand yang menjual makanan dan minuman, stand-stand yang menjual souvenir Istana Maimun, mushola, toilet, dan juga area parkir yang sangat luas. \r\n', 'd74451bc36a818cd2308dd6fe9816738.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_nama` varchar(40) DEFAULT NULL,
  `inbox_email` varchar(60) DEFAULT NULL,
  `inbox_kontak` varchar(20) DEFAULT NULL,
  `inbox_pesan` text DEFAULT NULL,
  `inbox_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `inbox_status` int(11) DEFAULT 1 COMMENT '1=Belum dilihat, 0=Telah dilihat'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inbox`
--

INSERT INTO `tbl_inbox` (`inbox_id`, `inbox_nama`, `inbox_email`, `inbox_kontak`, `inbox_pesan`, `inbox_tanggal`, `inbox_status`) VALUES
(12, 'Bambang Soesatyo', 'bams@gmail.com', '088866996996', 'Selamat siang bapak admin !', '2020-08-07 16:23:33', 0),
(13, 'Edy Rahman ', 'edyrahman@gmail.com', '081309080765', 'Halo, kamu wisuda tahun ini ya !', '2020-08-17 07:59:40', 0),
(14, 'M Haviz Hasibuan', 'mhavishasibuan@gmail.com', '082134489030', 'Assalamualaikum', '2020-08-18 04:15:20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sejarah`
--

CREATE TABLE `tbl_sejarah` (
  `sejarah_id` int(11) NOT NULL,
  `sejarah_judul` varchar(150) DEFAULT NULL,
  `sejarah_deskripsi` text DEFAULT NULL,
  `sejarah_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sejarah`
--

INSERT INTO `tbl_sejarah` (`sejarah_id`, `sejarah_judul`, `sejarah_deskripsi`, `sejarah_photo`) VALUES
(5, 'SEJARAH', 'Istana ini dibangun oleh Sultan Deli ke-9 yaitu Sultan Ma’moen Al Rasyid Perkasa Alamsyah yang bertakhta pada tahun 1879 sampai tahun 1924.Konon menurut cerita Istana ini dibangun sebagai bentuk penghargaan Sang Sultan kepada istrinya yang bernama Maimunah.Namun versi lain menyebutkan bahwa nama Maimun berasal dari bahasa Arab yaitu Maimunah yang berarti berkah atau rahmat.Istana ini mulai dibangun pada tanggal 26 Agustus 1888 dan selesai pada tanggal 18 Mei 1891.   Istana ini menghadap ke arah Utara.Istana ini didesain oleh arsitek Belanda yaitu Capt. Theodore Van Erp. Di sisi kanan Istana Maimun terdapat bangunan yang menyerupai rumah adat Batak dimana di dalamnya terdapat artefak meriam puntung yang konon menurut cerita adalah jelmaan dari adik Putri Hijau yang bernama Mambang Khayali. Putri Hijau merupakan putri dari Kerajaan Haru, Mambang Khayali berubah menjadi meriam saat terjadi perang antara Kerajaan Aceh dengan Kerajaan Haru karena pinangan dari Raja Aceh ditolak oleh Putri Hijau. Meriam tersebut kemudian pecah karena terlalu panas setelah menembak berkali-kali dan pecahan meriam tersebut terpental sangat jauh dan kini berada di daerah Karo. Konon menurut cerita, Mambang Yazid, adik Putri Hijau yang lainnya, menjelma menjadi seekor naga besar yang menurut cerita, masih sering menampakkan dirinya di aliran Sungai Deli.  	Sultan Makmoen Al Rasyid Perkasa Alamsyah juga membangun sebuah Masjid yang dinamakan Masjid Raya Al Mashun yang letaknya tidak jauh dari Istana Maimun. Masjid ini dibangun pada tahun 1906 dan mulai digunakan pada tahun 1909.', 'bcc41f63b165e9fec19d9381900142f4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `status_id` int(11) NOT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`status_id`, `status`) VALUES
(25, 'OPEN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tentang`
--

CREATE TABLE `tbl_tentang` (
  `tentang_id` int(11) NOT NULL,
  `tentang_judul` varchar(150) DEFAULT NULL,
  `tentang_deskripsi` text DEFAULT NULL,
  `tentang_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tentang`
--

INSERT INTO `tbl_tentang` (`tentang_id`, `tentang_judul`, `tentang_deskripsi`, `tentang_photo`) VALUES
(5, 'TENTANG', 'Istana Maimun \r\n\r\n\r\nadalah Istana Kesultanan Deli yang merupakan Istana kebanggaan Melayu dan sekaligus salah satu ikon obyek wisata di Kota Medan yang terletak di Jalan Brigadir Jenderal Katamso tepatnya di Kelurahan Aur, Kecamatan Medan Maimun, Kota Medan, Provinsi Sumatera Utara.\r\n\r\nIstana Maimun memiliki luas sebesar 2.772 m² dan memiliki sekitar 30 ruangan di dalamnya.Istana Maimun terdiri dari 2 lantai dan memiliki 3 bagian ruangan yaitu bangunan induk yang biasa disebut Balairung Sri Utama yang dulu digunakan untuk penerimaan tamu ataupun acara penobatan Sultan Deli, bangunan sayap kiri yang  biasa disebut Bilik Kiri, dan bangunan sayap kanan yang biasa disebut Bilik Kanan.Masing-masing ruangan ini memiliki fungsi yang berbeda, mulai dari ruang tamu kerajaan, ruang acara adat, dapur, dan gudang.Sejak tahun 1946, Istana ini ditempati oleh para ahli waris Kesultanan Deli dan pada waktu-waktu tertentu Istana Maimun digunakan sebagai tempat pertunjukan musik Tradisional Melayu.Saat ini, lapangan Istana Maimun pun sering digunakan sebagai digelarnya acara-acara keagamaan, konser musik, dan sebagainya.\r\n\r\n	Istana Maimun dibangun berdasarkan tiga kebudayaan yaitu kebudayaan Islam, Eropa, Persia dan juga Kebudayaan Melayu.Istana ini menggunakan warna khas Melayu yaitu warna hijau dan kuning serta sentuhan warna merah dan hitam pada ornamen di langit-langit dan lantai-nya.Istana ini memiliki langit-langit yang sangat tinggi serta pilar-pilar penopang yang berukuran besar sehingga terasa sejuk ketika berada di dalam-nya.\r\n\r\n	Istana Maimun berada tepat di tengah-tengah komplek Istana Maimun, di depannya terdapat sebuah lapangan yang cukup luas, dan di sisi kanan Istana Maimun terdapat sebuah bangunan rumah khas Karo yang didalamnya terdapat Meriam Puntung yang menurut legenda adalah penjelmaan dari adik Putri Hijau dari Kerajaan Deli Tua yaitu Mambang Khayali yang berubah menjadi meriam untuk mempertahankan istana dari serangan Raja Aceh yang pinangannya ditolak oleh Putri Hijau.\r\n\r\nIstana Maimun kini telah menjelma menjadi salah satu destinasi wisata yang paling diminati oleh wisatawan lokal maupun mancanegara.Para wisatawan dapat mengabadikan momen wisatanya di bangunan Istana Maimun yang indah. Namun, tidak semua ruangan di Istana ini dapat dijelajahi karena bagian Bilik Kanan dan Kiri lantai 1 dan 2 masih ditempati oleh ahli waris dari Kesultanan Deli sehingga yang dapat dijelajahi hanya bagian depan Istana Maimun, di Balairung Sri Utama yang terdapat Peterakna Sultan Deli yang tidak boleh dinaiki, foto dan lukisan para sultan dan permaisuri terdahulu, meja dan kursi yang tidak boleh diduduki, perabotan-perabotan bergaya Eropa, singgasana asli milik Sultan Deli dan Permaisurinya yang tidak boleh diduduki dan lain sebagainya serta ruangan belakang yang terdapat singgasana tiruan yang dapat diduduki untuk berfoto.Menariknya di dalam bangunan Istana Maimun terdapat penyewaan pakaian adat khas Melayu yang dapat digunakan untuk berfoto di dalam ruangan Istana Maimun dengan harga yang cukup terjangkau dan juga toko-toko yang menjual souvenir khas Melayu.\r\n\r\n', 'f287b07c66d0fb9e12afe1527dc3ca02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tiket`
--

CREATE TABLE `tbl_tiket` (
  `tiket_id` int(11) NOT NULL,
  `tiket_golongan` varchar(20) DEFAULT NULL,
  `harga_tiket` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tiket`
--

INSERT INTO `tbl_tiket` (`tiket_id`, `tiket_golongan`, `harga_tiket`) VALUES
(1, 'dewasa', 10000),
(2, 'pelajar/anak-anak', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi_tiket`
--

CREATE TABLE `tbl_transaksi_tiket` (
  `transaksi_id` int(11) NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `kontak` varchar(15) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `harga_tiket` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_acara`
--
ALTER TABLE `tbl_acara`
  ADD PRIMARY KEY (`acara_id`);

--
-- Indexes for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  ADD PRIMARY KEY (`admins_id`);

--
-- Indexes for table `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  ADD PRIMARY KEY (`fasilitas_id`);

--
-- Indexes for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `tbl_sejarah`
--
ALTER TABLE `tbl_sejarah`
  ADD PRIMARY KEY (`sejarah_id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `tbl_tentang`
--
ALTER TABLE `tbl_tentang`
  ADD PRIMARY KEY (`tentang_id`);

--
-- Indexes for table `tbl_tiket`
--
ALTER TABLE `tbl_tiket`
  ADD PRIMARY KEY (`tiket_id`);

--
-- Indexes for table `tbl_transaksi_tiket`
--
ALTER TABLE `tbl_transaksi_tiket`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_acara`
--
ALTER TABLE `tbl_acara`
  MODIFY `acara_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  MODIFY `admins_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  MODIFY `fasilitas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_sejarah`
--
ALTER TABLE `tbl_sejarah`
  MODIFY `sejarah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_tentang`
--
ALTER TABLE `tbl_tentang`
  MODIFY `tentang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_tiket`
--
ALTER TABLE `tbl_tiket`
  MODIFY `tiket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `tbl_transaksi_tiket`
--
ALTER TABLE `tbl_transaksi_tiket`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
