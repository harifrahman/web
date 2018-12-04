-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 01:44 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eigtolabs`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_nama` varchar(50) NOT NULL,
  `contact_subject` varchar(255) NOT NULL,
  `contact_isi` text NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_nohp` varchar(50) NOT NULL,
  `contact_created_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_nama`, `contact_subject`, `contact_isi`, `contact_email`, `contact_nohp`, `contact_created_time`) VALUES
(2, 'cupen', 'rusak', 'fdghjkl;', 's@c.c', '0987654', '2018-12-03 19:38:35'),
(3, 'dfgh', 'hj', 'jcjksc', 'vdevdv@g.v', '98765', '2018-12-03 19:39:33'),
(4, 'cscs', 'cscs', 'bfdd', 'vdevdv@g.v', 'ty89', '2018-12-03 19:41:06'),
(5, 'asdasd', 'test', 'vmsdckvdsnkj njkdsn kjdsnjkdn jkdn jkdsn jkdn dkjn dkjn sdjkn djkn jkdn jkdn kjdn kjdsn kjdsn dkjn kjdsj d', 's@c.c', '0987654324567890', '2018-12-04 01:18:16');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `media_judul` varchar(255) NOT NULL,
  `media_gambar` varchar(255) NOT NULL,
  `media_isi` text NOT NULL,
  `media_med_kat_id` int(11) NOT NULL,
  `media_created_time` datetime NOT NULL,
  `media_created_by` int(11) NOT NULL,
  `media_update_time` datetime NOT NULL,
  `media_update_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`media_id`, `media_judul`, `media_gambar`, `media_isi`, `media_med_kat_id`, `media_created_time`, `media_created_by`, `media_update_time`, `media_update_by`) VALUES
(2, 'mantep', 'nyljaMX.png', 'simple plaan', 2, '2018-12-02 15:11:42', 4, '2018-12-02 21:59:29', 4);

-- --------------------------------------------------------

--
-- Table structure for table `media_kategori`
--

CREATE TABLE `media_kategori` (
  `med_kat_id` int(11) NOT NULL,
  `med_kat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media_kategori`
--

INSERT INTO `media_kategori` (`med_kat_id`, `med_kat_name`) VALUES
(1, 'ada'),
(2, 'adaya');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `body`, `created_at`) VALUES
(1, 'The Indonesian Publication Index ', 'The-Indonesian-Publication-Index ', 'The Indonesian Publication Index (IPI) is designed for browsing, indexing, abstracting, monitoring and improving the standard of scholarly publications in Indonesia. Currently, there are over 3000 Indonesian journals for inclusion in the IPI database. The contents are very important to be made visible globally, so that Indonesian academics and researchers can be identified his/her expertise', '2018-12-01 06:52:11'),
(2, 'Mencintaimu Racun Diriku', 'Mencintaimu-Racun-Diriku', 'Mengapa kau pergi, Mengapa kau pergi\r\nDi saat aku mulai mencintaimu,\r\nberharap engkau jadi kekasih hatiku,\r\nMalah kau pergi jauh dari hidupku,\r\n\r\nMenyendiri lagi, Menyendiri lagi,\r\nDi saat kau tinggalkan diriku pergi,\r\nTak pernah ada yang menhiasi hariku,\r\nDi saat aku terbangun dari tidurku,\r\n\r\nAku inginkan diri mu, datang dan temui aku,\r\nKan ku katakan padamu, aku sangat mencintai dirimu,\r\nAku inginkan diri mu, datang dan temui aku,\r\nKan ku katakan padamu, aku sangat mencinta', '2018-12-01 06:52:11'),
(3, 'STRUKTURALISME LEVI-STRAUSS UNTUK ARKEOLOGI SEMIOTIK', 'STRUKTURALISME-LEVI-STRAUSS-UNTUK-ARKEOLOGI-SEMIOTIK', 'Sebagaimana kita ketahui, kajian arkeologis tentang pola pemukiman merupakan salah satu cabang kajian yang sangat berkembang dalam apa yang kini dikenal sebagai New Archaeology atau Arkeologi Ba- Humaniora No . 12 September- Desember 1999 u. Arkeologi yang sangat sadar akan teori, etode, dan tujuan penelitiannya ini berupa menjelaskan dengan seksama berbagai Perubahan yang telah terjadi dalam masyarakat- masyarakat kuno di masa lampau, dan mencoba merumuskan \"hukum-hukum\" yang ada di balik berbagai perubahan tersebut . Epistemologi yang dianut oleh New Archaeology ini jelas-jelas merupakan epistemologi yang positivistik, yang memang paling sesuai untuk tujuan yang dirumuskan oleh arkeologi ini. Para pakar arkeologi penganut Arkeologi Baru ini sadar betul akan kedudukan arkeologi sebagai suatu science, suatu cabang ilmu pengetahuan yang nomothetis .', '2018-12-01 06:53:11'),
(4, 'jdguk', 'jdguk', 'dkkknslnl', '2018-12-01 19:10:33');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `team_nama` varchar(50) NOT NULL,
  `team_jabatan` varchar(100) NOT NULL,
  `team_isi` text NOT NULL,
  `team_image` varchar(255) NOT NULL,
  `team_created_time` datetime NOT NULL,
  `team_created_by` int(11) NOT NULL,
  `team_update_time` datetime NOT NULL,
  `team_update_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_nama`, `team_jabatan`, `team_isi`, `team_image`, `team_created_time`, `team_created_by`, `team_update_time`, `team_update_by`) VALUES
(1, 'Aripsssss', 'gamerssssss', 'mntep nih gw anak usu lohsssssssss', 'python2.jpg', '2018-12-03 14:07:45', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE `testimony` (
  `testimony_id` int(11) NOT NULL,
  `testimony_nama` varchar(50) NOT NULL,
  `testimony_jabatan` varchar(100) NOT NULL,
  `testimony_isi` text NOT NULL,
  `testimony_image` varchar(255) NOT NULL,
  `testimony_created_time` datetime NOT NULL,
  `testimony_created_by` int(11) NOT NULL,
  `testimony_update_time` datetime NOT NULL,
  `testimony_update_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimony`
--

INSERT INTO `testimony` (`testimony_id`, `testimony_nama`, `testimony_jabatan`, `testimony_isi`, `testimony_image`, `testimony_created_time`, `testimony_created_by`, `testimony_update_time`, `testimony_update_by`) VALUES
(2, 'wdwdsasasas', 'sasasasasas', 'ddwdsasasasa', 'PB_KeenEyes_1920x10801.jpg', '2018-12-02 22:09:16', 4, '0000-00-00 00:00:00', 0),
(3, 'asdasd', 'asdasd', 'asadasasasa', '70394264-hacker-wallpapers.png', '2018-12-02 22:10:42', 4, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(55) NOT NULL,
  `user_pass` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `work_id` int(11) NOT NULL,
  `work_nama` varchar(50) NOT NULL,
  `work_deskripsi` varchar(100) NOT NULL,
  `work_isi` text NOT NULL,
  `work_image` varchar(255) NOT NULL,
  `work_created_time` datetime NOT NULL,
  `work_created_by` int(11) NOT NULL,
  `work_update_time` datetime NOT NULL,
  `work_update_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`work_id`, `work_nama`, `work_deskripsi`, `work_isi`, `work_image`, `work_created_time`, `work_created_by`, `work_update_time`, `work_update_by`) VALUES
(1, 'adap apa ni binun loh', 'fkvnsklvjnjks iw nlk', 'mntapppppppps soulllllll', 'download.png', '2018-12-03 13:33:22', 0, '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `media_kategori`
--
ALTER TABLE `media_kategori`
  ADD PRIMARY KEY (`med_kat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`testimony_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`work_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `media_kategori`
--
ALTER TABLE `media_kategori`
  MODIFY `med_kat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimony`
--
ALTER TABLE `testimony`
  MODIFY `testimony_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
