-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 09:43 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproperty`
--

CREATE TABLE `addproperty` (
  `id` int(11) NOT NULL,
  `propertyname` varchar(50) NOT NULL,
  `propertytype` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `location` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addproperty`
--

INSERT INTO `addproperty` (`id`, `propertyname`, `propertytype`, `price`, `location`, `description`, `image`) VALUES
(4, 'House', 'Rent', '20000', 'Bhopal', '2 floor 10 rooms with playing garden', 'img/P1070531.jpeg'),
(6, 'Flat', 'Sell', '200000', 'Neemuch', '2 bhk flat on 5th floor', 'img/20996540.jpeg'),
(7, 'Plot', 'Sell', '500000', 'indore', '3000 sq. ft.', 'img/P1070661.jpeg'),
(8, 'Office', 'Rent', '15000', 'delhi', 'available for bank/IT etc.', 'img/P1090438.jpeg'),
(9, 'Office', 'Sell', '1000000', 'mumbai', '2 floor building with 20 rooms', 'img/P1090035.jpeg'),
(10, 'Flat', 'Sell', '300000', 'bhopal', '1 BHK flat with kitchen bathroom', 'img/P1090032.jpeg'),
(11, 'Plot', 'Rent', '20000', 'mhow', 'plot available for warehouse, insdustries', 'img/P1090023.jpeg'),
(12, 'House', 'Sell', '800000', 'vijaynagar', 'a bunglow with pool, parking, garden', 'img/P1090017.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `ConfirmPassword` varchar(200) NOT NULL,
  `MobileNumber` int(100) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Img` varchar(500) NOT NULL DEFAULT 'default.png',
  `RegDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `FirstName`, `LastName`, `Email`, `Password`, `ConfirmPassword`, `MobileNumber`, `Address`, `Img`, `RegDate`) VALUES
(39, 'Narendra', 'Patidar', 'zxy@gmail.com', '25f9e794323b453885f5181f1b624d0b', '25f9e794323b453885f5181f1b624d0b', 2147483647, 'India', '????\\0JFIF\\0\\0x\\0x\\0\\0??xExif\\0\\0MM\\0*\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\Z\\0\\0\\0\\0\\0\\0\\0b\\0\\0\\0\\0\\0\\0\\0j(\\0\\0\\0\\0\\0\\0\\01\\0\\0\\0\\0\\\"\\0\\0\\0r2\\0\\0\\0\\0\\0\\0\\0??i\\0\\0\\0\\0\\0\\0\\0?\\0\\0\\0?\\0O?\\0\\0\\\'\\0O?\\0\\0\\\'Adobe Photoshop CC 2015 (Windows)\\02017:09:07 00:04:00\\0\\0?\\0\\0\\0\\0\\0\\0\\0?\\0\\0\\0\\0\\0\\0\\0??\\0\\0\\0\\0\\0\\0\\0?\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\Z\\0\\0\\0\\0\\0\\0\\\"\\0\\0\\0\\0\\0\\0*(\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\02\\0\\0\\0\\0\\0\\0\n=\\0\\0\\0\\0\\0\\0\\0H\\0\\0\\0\\0\\0\\0H\\0\\0\\0????', '2021-01-24 10:43:12'),
(42, 'admin', 'admin', 'admin@gmail.com', 'e6e061838856bf47e1de730719fb2609', 'e6e061838856bf47e1de730719fb2609', 1234567890, 'indore', '?PNG\r\n\Z\n\\0\\0\\0\rIHDR\\0\\0\\0?\\0\\0\\0?\\0\\0\\0	m\\\"H\\0\\0JPLTE??\\0??????gpy?\\\\B?ܤ?Ē??\\0??\\0?????\\0??\\0CIU??\\0enwir{????YC???VD??ގ??????র??]jw?캃R9?W=?ݩϺ??????ɀSE????????P??????\\\\k|?????g?݈??????]gqLS^??:??*ܤ?ʤU]g??*?f<?a>?{3??	?hLҴ???w??M?????c???s5͗$?m:Ӝ!?p8??,??o??cط?{zlԪ3?Ϡ??M??bȷ?v{}??????????ſ??2??g ????\\\\??r?ǫ????A?ٵ??XQd{?h?????T??F?????}Ϩ7}{k??e???̿????6=K????	\\0\\0?IDATx???k[?F?ed[B?e\\\\?Y?\r?c.\r!???m\\\\ 	?M?vۤM?????3?X?͙?<Oo4????Ι??䲖^o}????]?4MS?_???Zwk?????????????????J%?', '2021-02-01 06:37:57'),
(43, 'Narendra', 'Patidar', 'narendrapatidar5171@gmail.com', '25f9e794323b453885f5181f1b624d0b', '25f9e794323b453885f5181f1b624d0b', 1234567891, 'Indore', '????\\0JFIF\\0\\0?\\0?\\0\\0??\rxExif\\0\\0MM\\0*\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\Z\\0\\0\\0\\0\\0\\0\\0b\\0\\0\\0\\0\\0\\0\\0j(\\0\\0\\0\\0\\0\\0\\01\\0\\0\\0\\0\\\"\\0\\0\\0r2\\0\\0\\0\\0\\0\\0\\0??i\\0\\0\\0\\0\\0\\0\\0?\\0\\0\\0?\\0??\\0\\0\\\'\\0??\\0\\0\\\'Adobe Photoshop CC 2015 (Windows)\\02017:09:14 17:35:52\\0\\0?\\0\\0\\0\\0\\0\\0\\0?\\0\\0\\0\\0\\0\\0\\0??\\0\\0\\0\\0\\0\\09\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\Z\\0\\0\\0\\0\\0\\0\\\"\\0\\0\\0\\0\\0\\0*(\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\02\\0\\0\\0\\0\\0\\0>\\0\\0\\0\\0\\0\\0\\0H\\0\\0\\0\\0\\0\\0H\\0\\0\\0????\\', '2021-02-01 14:10:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addproperty`
--
ALTER TABLE `addproperty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addproperty`
--
ALTER TABLE `addproperty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
