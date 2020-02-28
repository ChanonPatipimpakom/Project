-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 27, 2020 at 03:38 AM
-- Server version: 8.0.17
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
-- Database: `myfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comid` int(11) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL,
  `usrname` varchar(32) NOT NULL,
  `usrid` int(11) NOT NULL,
  `usremail` varchar(50) NOT NULL,
  `comidpro` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comid`, `comment`, `rating`, `usrname`, `usrid`, `usremail`, `comidpro`) VALUES
(1, 'อาหารอร่อยมากครับ', 4, 'Mitree', 12, 'chanon.tackle.11@gmail.com', 3),
(2, 'ปูอร่อยมากๆเลยครับผม', 5, 'mark', 7, 'chanon.white.11@gmail.com', 3),
(3, 'ปลาแซลม่อนรสชาติดีแต่เหม็นไหม้ไปหน่อยนะ 5555', 4, 'mark', 7, 'chanon.white.11@gmail.com', 4),
(4, 'อืมมม อร่อยยยย เด็กดีๆ', 5, 'tackle', 8, 'chanon.zero.11@gmail.com', 4),
(5, 'หอยรสชาติดีๆ อืมมม อาหร่อยยยย', 5, 'tackle', 8, 'chanon.zero.11@gmail.com', 1),
(6, 'ไม่ค่อยชอบกินนะ แต่ได้กินแล้วติดใจเลย', 3, 'mark', 7, 'chanon.white.11@gmail.com', 1),
(8, 'ใครทำไม่รู้แต่ที่รู้ๆ อร่อยมากๆ แถามส่งโครตเร็ว', 5, 'mark', 7, 'chanon.white.11@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `address` varchar(100) NOT NULL,
  `tel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `active`, `address`, `tel`) VALUES
(7, 'mark', '5aadbb66ff57065c7cbc640295cf9090', 'markus', 'chanon', 'chanon.white.11@gmail.com', 1, '66/1 หมู่ 5 ต.ถนนขาด อ.เมือง จ.นครปฐม 73000', '0928071328'),
(8, 'tackle', '446a56824233fff6b42d4b64b7cc7ba3', 'Dude', 'StyleD', 'chanon.zero.11@gmail.com', 0, '88/1 หมู่ 2 ต.ห้วยจรเข้ อ.เมือง จ.นครปฐม 89932', '0908158934'),
(12, 'Mitree', '178d21d0e5a3415fe382ed1b5ef593e1', 'Emilei', 'Amelor', 'chanon.tackle.11@gmail.com', 0, '88/1 หมู่.3 ตำบลถนนขาด อำเภอเมือง จังหวัดนนทบุรี', '0897031356'),
(13, 'Noctis', '5aadbb66ff57065c7cbc640295cf9090', 'Nocto', 'Lucis Calculate', 'chanon.noctis.11@gmail.com', 0, '99/1 หมู่.5 ตำบลถนนขาด อำเภอเมือง จังหวัดนนทบุรี', '0887301438');

-- --------------------------------------------------------

--
-- Table structure for table `ocean`
--

CREATE TABLE `ocean` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `desc` varchar(60) NOT NULL,
  `price` double NOT NULL,
  `qty` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ocean`
--

INSERT INTO `ocean` (`id`, `name`, `desc`, `price`, `qty`, `picture`, `category`) VALUES
(1, 'หอยนางรมอบสมุนไพร', 'หอยนางรมอบ กลิ่นสมุนไพร', 109, 20, 'shel1.png', 1),
(2, 'ซุปกิมจิหมึกกล้วย', 'ซุปสไตล์การทำจากเกาหลี และหมึกสด', 89, 20, 'squid1.png', 2),
(3, 'ขาปูอลาสก้านึ่ง', 'ปูสั่งตรงจากญี่ปุ่น', 398, 21, 'crap2.png', 3),
(4, 'สลัดปลาแซลม่อนย่าง', 'ปลาสดๆจากทะเลญี่ปุ่ม', 135, 23, 'fish1.png', 4),
(5, 'พาสต้ากุ้งซอสแดง', 'เส้นพาสต้านุ่มๆ ซอสเข้มๆ กุ้งจากแม่ท่าจีน', 89, 28, 'shrimp1.jpg', 5),
(11, 'ปูอลาสก้าต้มซอส', 'ปูสั่งตรงจากประเทศอลาสก้า', 899, 15, 'crap3.png', 3),
(12, 'หอยแมลงภู', 'หอยแมลงภูจากดอนหอยหลอด', 149, 32, 'shel2.png', 1),
(13, 'หอยหวานอบซอส', 'หอยแม่น้ำท่าจีน', 109, 5, 'shel3.png', 1),
(14, 'หอยแมลงภูผัด', 'หอยแมลงภู่อ่าวไทย', 129, 15, 'shel4.png', 1),
(15, 'หมึกยัดใส้ย่าง', 'หมึกกล้วยขาวจากทะเลอ่าวไทย', 69, 12, 'squid2.png', 2),
(16, 'หมึกมะนาวเปรี้ยว', 'ปลาหมึกอ่าวไทย', 69, 32, 'squid3.png', 2),
(17, 'ยำหมึกย่าง', 'ปลาหมึกจากมาเลเซีย', 69, 18, 'squid4.png', 2),
(18, 'ปูม้าผัดผงกะรี่', 'ปูม้าจากแม่น้ำป่าชายเลน', 299, 12, 'crap4.png', 3),
(19, 'แซลม่อนย่าง(ไวท์ซอส)', 'แซลม่อนจากไอซ์แลน', 129, 15, 'fish2.png', 4),
(20, 'สเต๊กแซลม่อน', 'แซลม่อนจากทะเลไอซ์แลน', 129, 10, 'fish3.png', 4),
(21, 'สเต๊กปลากระพง', 'ปลากระพงแม่น้ำเจ้าพระยา', 129, 21, 'fish4.png', 4),
(22, 'พาสต้าผัดขี้เมา', 'พาสต้ากุ้งแม่น้ำท่้าจีน', 89, 30, 'shrimp4.jpg', 5),
(23, 'กุ้งลายเสือย่าง', 'กุ้งลายเสือจากตลาดน้ำลำพยา', 130, 27, 'shrimp2.jpg', 5),
(24, 'สลัดผัดกุ้ง', 'กุ้งแม่น้ำท่าจีน', 69, 22, 'shrimp3.jpg', 5),
(25, 'หอยแมลงภูลวกน้ำปลาหวาน', 'หอยแมลงภู่จากญี่ปุน', 90, 31, 'shel6.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderpro`
--

CREATE TABLE `orderpro` (
  `idorder` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `picture` varchar(100) NOT NULL,
  `cusid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderpro`
--

INSERT INTO `orderpro` (`idorder`, `name`, `price`, `picture`, `cusid`) VALUES
(101, 'หอยนางรมอบสมุนไพร', 109, 'shel1.png', 8),
(102, 'ซุปกิมจิหมึกกล้วย', 89, 'squid1.png', 8),
(103, 'ขาปูอลาสก้านึ่ง', 398, 'crap2.png', 8),
(104, 'สลัดปลาแซลม่อนย่าง', 135, 'fish1.png', 8),
(128, 'ซุปกิมจิหมึกกล้วย', 89, 'squid1.png', 7),
(129, 'หอยนางรมอบสมุนไพร', 109, 'shel1.png', 7),
(130, 'สลัดปลาแซลม่อนย่าง', 135, 'fish1.png', 7),
(131, 'พาสต้ากุ้งซอสแดง', 89, 'shrimp1.jpg', 7),
(132, 'สลัดปลาแซลม่อนย่าง', 135, 'fish1.png', 12),
(134, 'หอยแมลงภูลวกน้ำปลาหวาน', 90, 'shel6.png', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ocean`
--
ALTER TABLE `ocean`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderpro`
--
ALTER TABLE `orderpro`
  ADD PRIMARY KEY (`idorder`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ocean`
--
ALTER TABLE `ocean`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orderpro`
--
ALTER TABLE `orderpro`
  MODIFY `idorder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
