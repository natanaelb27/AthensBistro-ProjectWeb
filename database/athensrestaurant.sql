-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 03:56 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `athensrestaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembelian`
--

CREATE TABLE `detail_pembelian` (
  `id_detail_pembelian` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pembelian`
--

INSERT INTO `detail_pembelian` (`id_detail_pembelian`, `id_pembelian`, `id_produk`, `quantity`) VALUES
(55, 36, 4, 3),
(56, 36, 9, 2),
(57, 36, 7, 2),
(58, 36, 13, 3),
(59, 36, 15, 2),
(60, 36, 19, 3),
(61, 37, 4, 10),
(62, 37, 8, 2),
(63, 37, 14, 5),
(64, 37, 18, 5),
(65, 38, 3, 3),
(66, 38, 9, 3),
(67, 38, 12, 2),
(68, 38, 17, 2);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `username`, `password`) VALUES
(1, 'karyawan1', 'karyawan1'),
(2, 'karyawan2', 'karyawan2'),
(3, 'karyawan3', 'karyawan3');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Appetizer'),
(2, 'Main Course'),
(3, 'Dessert'),
(4, 'Beverages');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `tujuan_order` varchar(100) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `total_harga` double NOT NULL,
  `tanggal_pembelian` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `nama_pelanggan`, `tujuan_order`, `telpon`, `total_harga`, `tanggal_pembelian`) VALUES
(36, 'Bella', 'Jalan Merpati blok B no 27', '081234512345', 690000, '2020-04-18 01:52:12'),
(37, 'Jaka', 'Jalan Merak no 76', '081234567890', 1050000, '2020-04-18 01:53:15'),
(38, 'Eko', 'Jalan Badak no 25', '08976543210', 590000, '2020-04-18 01:55:51');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `harga` double NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `deskripsi`, `harga`, `image`) VALUES
(1, 1, 'Wonton Soup', 'Thin-skinned dumplings with pork meat and enclosed in tender wheat dough wrappers swimming in a garlic, ginger, soy spiked broth', 50000, 'images/wonton.png'),
(2, 1, 'Spring Rolls', 'Thin sheets of dough filled with minced pork, shredded carrot, bean sprouts and other vegetables served with Worcestershire sauce', 30000, 'images/springrolls.png'),
(3, 1, 'Char Siu', 'Roasted, barbecued pork that has previously been marinated in the eponymous sauce', 100000, 'images/charsiu.png'),
(4, 1, 'Jiaozi Dumpling', 'Ground meat and vegetable filling wrapped into a thinly rolled piece of dough served with a black vinegar and sesame oil dip', 50000, 'images/jiaozi.png'),
(5, 1, 'Spare Ribs', 'Pork spareribs marinated in hoisin sauce, ketchup, honey, soy sauce, and sake, then deep fried and served with chinese sweet and sour sauce', 70000, 'images/spareribs.png'),
(6, 1, 'Xiao Long Bao', 'Handmade traditional pork Xiao Long Bao', 35000, 'images/xiaolongbao.png'),
(7, 2, 'Roast Pork', 'Boneless pork shoulder and with crispy and crunchy skin roasted with chinese herbs', 100000, 'images/roastpork.png'),
(8, 2, 'Peking Duck', 'Thin pieces of tender, roasted duck meat and crispy skin wrapped in a thin crepe, along with sliced spring onions, and hoisin sauce', 100000, 'images/pekingduck_1586838947.png'),
(9, 2, 'Kung Pao Chicken', 'Take out style Kung Pao Chicken with marinated chicken along with the signature sweet-sour-salty Kung Pao sauce', 50000, 'images/kungpao_1586838807.png'),
(10, 2, 'Steamed Chicken', 'Fresh, juicy and tender steam chicken with a hint of spices in every bite.', 60000, 'images/steamedchicken_1586918511.png'),
(11, 2, 'Fried Noodle', 'Tender textured noodles tossed with various vegetables and coated in a savory sauce', 60000, 'images/friednoodle_1586851167.png'),
(12, 3, 'Mango Ice Cream ', 'Fresh mango combined with sugar, lime juice, and coconut milk, then chilled to be harden', 50000, 'images/mangoicecream.png'),
(13, 3, 'Mango Pudding', 'Fresh mango pudding served with fresh mango garnish', 30000, 'images/mangopudding_1586918883.png'),
(14, 3, 'Lava Sesame Ball', 'The perfect union of sweet savoury combination, smooth and creamy molten salted egg yolk filling', 50000, 'images/sesameballs_1586919942.png'),
(15, 3, 'Mung Bean Cake', 'Sweet flavored mung bean cake with smooth and fine texture', 30000, 'images/mungbeancake_1586919913.png'),
(16, 4, 'Oolong Tea', 'Toasty flavored tea made from the leaves of the Camellia sinensis plant', 30000, 'images/oolongtea_1586920149.png'),
(17, 4, 'chrysanthemum Tea', 'Sweet flavored tea made from chrysanthemum flowers', 20000, 'images/chrysanthemumtea_1586920251.png'),
(18, 4, 'Soy Milk', 'Creamy and sweet flavored milk made from fresh soybeans', 20000, 'images/soymilk_1586920676.png'),
(19, 4, 'Pearl Milk Tea', 'Sweet milk tea served with soft jelly-like bubbles made from tapioca', 30000, 'images/pearlmilktea_1586920986.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD PRIMARY KEY (`id_detail_pembelian`),
  ADD KEY `id_pembelian` (`id_pembelian`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_users` (`nama_pelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  MODIFY `id_detail_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD CONSTRAINT `detail_pembelian_ibfk_1` FOREIGN KEY (`id_pembelian`) REFERENCES `pembelian` (`id_pembelian`),
  ADD CONSTRAINT `detail_pembelian_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
