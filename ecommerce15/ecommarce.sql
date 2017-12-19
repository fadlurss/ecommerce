-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2015 at 03:32 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommarce`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kategori`
--

CREATE TABLE IF NOT EXISTS `tabel_kategori` (
`kategori_id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `link` varchar(40) NOT NULL,
  `parent` int(11) NOT NULL,
  `nama_kategori_seo` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kategori`
--

INSERT INTO `tabel_kategori` (`kategori_id`, `nama_kategori`, `link`, `parent`, `nama_kategori_seo`) VALUES
(4, 'jilbab anak', '', 7, 'jilbab-anak'),
(5, 'jilbab muslimah', '', 7, 'jilbab-muslimah'),
(6, 'gamis anak', '', 8, 'gamis-anak'),
(7, 'jilbab', '', 0, 'jilbab'),
(8, 'gamis', '', 0, 'gamis'),
(9, 'mukena', '', 0, 'mukena'),
(10, 'kopiah/ peci', '', 0, 'kopiah-peci'),
(11, 'gamis gaul', '', 8, 'gamis-gaul'),
(12, 'sarung', '', 0, 'sarung');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_member`
--

CREATE TABLE IF NOT EXISTS `tabel_member` (
`member_id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `no_telpon` varchar(12) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_member`
--

INSERT INTO `tabel_member` (`member_id`, `nama_lengkap`, `email`, `no_hp`, `no_telpon`, `alamat`) VALUES
(2, 'ucok', 'ucok76@gmail.com', '082121473036', '+021 (23652)', 'jalan budi no 45, bandung'),
(6, 'nuris akbar', 'nuris.akbar@gmail.com', '082121473036', '082121473036', 'bandung');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_menu`
--

CREATE TABLE IF NOT EXISTS `tabel_menu` (
`menu_id` int(11) NOT NULL,
  `menu_title` varchar(70) NOT NULL,
  `menu_eng` varchar(200) NOT NULL,
  `link` varchar(150) NOT NULL,
  `parent` int(11) NOT NULL,
  `menu_title_seo` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_menu`
--

INSERT INTO `tabel_menu` (`menu_id`, `menu_title`, `menu_eng`, `link`, `parent`, `menu_title_seo`) VALUES
(8, 'Cara Pemesanan', 'how to order', 'http://localhost/ecommarce/p/cara-pemesanan', 0, 'cara-pemesanan'),
(9, 'Testimoni Pelanggan', 'customer testimonials', 'http://localhost/ecommarce/p/testimoni-pelanggan', 0, 'testimoni-pelanggan'),
(10, 'konfirmasi Pembayaran', 'payment confirmation', 'http://localhost/ecommarce/p/konfirmasi-pembayaran', 0, 'konfirmasi-pembayaran');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_menu_admin`
--

CREATE TABLE IF NOT EXISTS `tabel_menu_admin` (
`menu_id` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `icon` varchar(40) NOT NULL,
  `link` varchar(100) NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_menu_admin`
--

INSERT INTO `tabel_menu_admin` (`menu_id`, `nama_menu`, `icon`, `link`, `parent`) VALUES
(1, 'kategori', 'fa-puzzle-piece', 'kategori', 0),
(2, 'product', 'fa-cutlery', 'product', 0),
(3, 'member', 'fa-users', 'member', 0),
(4, 'transaksi', 'fa-credit-card', 'transaksi', 0),
(5, 'menu', 'fa-globe', 'menu', 0),
(6, 'halaman', 'fa-keyboard-o', 'halaman', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pages`
--

CREATE TABLE IF NOT EXISTS `tabel_pages` (
`pages_id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `judul_seo` varchar(120) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pages`
--

INSERT INTO `tabel_pages` (`pages_id`, `judul`, `judul_seo`, `content`) VALUES
(4, 'konfirmasi pembayaran', 'konfirmasi-pembayaran', '<p>setelah anda melakukan transfer sejumlah yang telah kami sampaikan maka silahkan konfirmasi pembayaran anda</p>\r\n\r\n<ul>\r\n	<li>via sms ke no 082121473036</li>\r\n	<li>via BBM&nbsp;</li>\r\n	<li>via email nuris.akbar@gmail.com</li>\r\n</ul>\r\n'),
(5, 'cara pemesanan', 'cara-pemesanan', '<p><strong>anda bisa memesan kepada kami melalui 2 cara :</strong></p>\r\n\r\n<ul>\r\n	<li>dari website<br />\r\n	silahkan pilih product yang ingin anda beli dan ikuti panduan transaksinya</li>\r\n	<li>via sms/ telpon<br />\r\n	silahkan pilih dan sms kan nama product yang anda pilih, kami akan menginformasikan biaya yang harus anda transafer</li>\r\n</ul>\r\n'),
(6, 'testimoni pelanggan', 'testimoni-pelanggan', '<p>testimoni&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n'),
(7, 'hubungi kami', 'hubungi-kami', '<p>hubungi kami text&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n'),
(8, 'Konfirmasi Pembayaran', 'konfirmasi-pembayaran', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_product`
--

CREATE TABLE IF NOT EXISTS `tabel_product` (
`product_id` int(11) NOT NULL,
  `nama_product` varchar(100) NOT NULL,
  `nama_product_seo` varchar(140) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `kategori_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_product`
--

INSERT INTO `tabel_product` (`product_id`, `nama_product`, `nama_product_seo`, `harga`, `gambar`, `kategori_id`) VALUES
(4, 'jilbab anak cantik elia', 'jilbab-anak-cantik-elia', 43000, 'elthof-razita-kerudung-instan_l-699-1414.png', 4),
(5, 'jilbab ungu elzadda', 'jilbab-ungu-elzadda', 35000, '945159_595536553803917_1247291466_n.jpg', 4),
(6, 'jilbab cantik delita', 'jilbab-cantik-delita', 67000, 'kerudung_cantik_robbani2.jpg', 5),
(7, 'jilbab hitam', 'jilbab-hitam', 45000, 'busana-muslim-jilbab-terbaru-16.jpg', 5),
(8, 'jilbab pink', 'jilbab-pink', 46000, 'JRB_08B.jpg', 5),
(9, 'jilbab biru', 'jilbab-biru', 51000, 'JRB_08C.jpg', 5),
(10, 'jilbab hijau', 'jilbab-hijau', 63000, 'marshandal.jpg', 5),
(11, 'jilbab delia ungu', 'jilbab-delia-ungu', 34000, 'mc-teens4c-900x900.jpg', 5),
(12, 'jilbab segitiga ', 'jilbab-segitiga-', 34000, 'model-jilbab-segitiga-anak-sekolahcara-memakai-jilbab-paris-segi-empat-modern-oscahoke.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_transaksi`
--

CREATE TABLE IF NOT EXISTS `tabel_transaksi` (
`transaksi_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=proses,2= sudah dikirim',
  `no_resi` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_transaksi`
--

INSERT INTO `tabel_transaksi` (`transaksi_id`, `member_id`, `tanggal`, `status`, `no_resi`) VALUES
(1, 1, '2015-03-13', 2, 'smr0045565656'),
(2, 1, '2015-04-29', 1, ''),
(3, 1, '2015-04-29', 1, ''),
(4, 1, '2015-04-29', 1, ''),
(5, 1, '2015-04-29', 1, ''),
(6, 1, '2015-04-29', 1, ''),
(7, 2, '2015-04-29', 1, ''),
(8, 2, '2015-04-29', 1, ''),
(9, 6, '2015-04-29', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_transaksi_detail`
--

CREATE TABLE IF NOT EXISTS `tabel_transaksi_detail` (
`detail_id` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `ip` varchar(16) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_transaksi_detail`
--

INSERT INTO `tabel_transaksi_detail` (`detail_id`, `transaksi_id`, `product_id`, `qty`, `ip`) VALUES
(16, 9, 5, 6, '::1'),
(17, 9, 4, 6, '::1'),
(19, 9, 9, 6, '::1'),
(20, 9, 5, 5, '::1'),
(21, 9, 5, 1, '::1'),
(22, 9, 5, 1, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_users`
--

CREATE TABLE IF NOT EXISTS `tabel_users` (
`user_id` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1= aktif, 2= tidak aktif'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_users`
--

INSERT INTO `tabel_users` (`user_id`, `nama_lengkap`, `username`, `password`, `status`) VALUES
(1, 'adminiistrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
 ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tabel_member`
--
ALTER TABLE `tabel_member`
 ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
 ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `tabel_menu_admin`
--
ALTER TABLE `tabel_menu_admin`
 ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `tabel_pages`
--
ALTER TABLE `tabel_pages`
 ADD PRIMARY KEY (`pages_id`);

--
-- Indexes for table `tabel_product`
--
ALTER TABLE `tabel_product`
 ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
 ADD PRIMARY KEY (`transaksi_id`);

--
-- Indexes for table `tabel_transaksi_detail`
--
ALTER TABLE `tabel_transaksi_detail`
 ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `tabel_users`
--
ALTER TABLE `tabel_users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tabel_member`
--
ALTER TABLE `tabel_member`
MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tabel_menu_admin`
--
ALTER TABLE `tabel_menu_admin`
MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tabel_pages`
--
ALTER TABLE `tabel_pages`
MODIFY `pages_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tabel_product`
--
ALTER TABLE `tabel_product`
MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tabel_transaksi_detail`
--
ALTER TABLE `tabel_transaksi_detail`
MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tabel_users`
--
ALTER TABLE `tabel_users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
