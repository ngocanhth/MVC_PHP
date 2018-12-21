-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 10:12 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookslibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `years` int(11) NOT NULL,
  `yearold` int(11) NOT NULL,
  `class` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `password`, `years`, `yearold`, `class`) VALUES
(1, 'Lê Ngọc Ánh', '0', 1988, 30, '12A6'),
(2, 'Lê Văn Thanh', '0', 1986, 32, '12d6'),
(3, 'Lê Ngọc Ánh', '0', 1988, 30, '12A6'),
(4, 'Lê Văn Thanh', '0', 1986, 32, '12d6'),
(5, 'Luận', '22', 1996, 25, '22222'),
(6, '99999', '22', 99999, 9999, '9999'),
(7, 'ánh 12345678', '3', 33, 331, '332'),
(8, 'sssss', '5356654', 0, 54545, '545454'),
(9, 'Lê Ngọc Ánh', '550e1bafe077ff0b0b67f4e32f29d751', 1988, 18, '51KG'),
(10, 'Nguyễn Văn Tình', '9befed651d541aafa36e5c5dfb91280b', 1996, 18, '64TH'),
(11, 'Nguyễn Văn Hoan', '88dbd9324dfc047407f2ea3190b6edb2', 1995, 18, '64TH'),
(12, 'êtte', 'ae5eb824ef87499f644c3f11a7176157', 0, 65656, '4'),
(13, 'êtte', 'ae5eb824ef87499f644c3f11a7176157', 0, 65656, '4'),
(14, 'êtte', 'ae5eb824ef87499f644c3f11a7176157', 0, 65656, '4'),
(15, 'êtte', '107030ca685076c0ed5e054e2c3ed940', 0, 65656, '4'),
(16, '4545454', '6de381ba5775fba44c7cc303a8c65279', 545454, 545545454, '545454'),
(17, 'thanh', '60e94e63e6a64a2ff530ecd068b7a018', 0, 4343, 'rẻ'),
(18, 'thanh', '60e94e63e6a64a2ff530ecd068b7a018', 0, 4343, 'rẻ'),
(19, '55555', '15de21c670ae7c3f6f3f1f37029303c9', 555555, 55555, '555'),
(21, 'tyty', 'e615c82aba461681ade82da2da38004a', 0, 65565, '65656'),
(22, 'Đặng Tuấn tài', 'f8b817af6353fe88d57abdd2a758f2dc', 1978, 54, '43'),
(23, 'Luận', 'adef8293b1b199b29b98f55e43637a40', 1995, 25, '12'),
(24, 'Luận văn', 'ca6e2d794995ba44c338a4b3283ff971', 1995, 25, '12'),
(25, 'Anh', '202cb962ac59075b964b07152d234b70', 1988, 30, '12'),
(26, '232323', 'df83971673de5c8e71ca1e2645718dad', 23232323, 232323, '232323'),
(27, '33434', '2000f6325dfc4fc3201fc45ed01c7a5d', 434343, 43434, '3434343'),
(28, 'Đào Trọng Hải', 'fa02962f5fb9474dd13bba1c1908681d', 1997, 23, '54hd'),
(29, 'Lương Tài', 'f1290186a5d0b1ceab27f4e77c0c5d68', 199, 24, '23');

-- --------------------------------------------------------

--
-- Table structure for table `themuon`
--

CREATE TABLE `themuon` (
  `id` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `sophieu` varchar(255) NOT NULL,
  `ngaymuon` varchar(255) NOT NULL,
  `hantra` varchar(255) NOT NULL,
  `sohieusach` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `themuon`
--

INSERT INTO `themuon` (`id`, `id_student`, `sophieu`, `ngaymuon`, `hantra`, `sohieusach`) VALUES
(1, 9, '44', '444', '444', '444'),
(2, 1, 'ABC 123', '21/12/2018', '30', 'BCDE123'),
(3, 4, 'adf343', '23/4/2307', '12', 'vbde343'),
(4, 1, '4444', '44444', '444', '4444'),
(5, 1, 'abcc', '333', '333', '333'),
(6, 1, 'abcc', '333', '333', '333'),
(7, 1, 'abcc', '333', '333', '333'),
(8, 1, 'abcc', '333', '333', '333'),
(9, 1, 'abcc', '333', '333', '333'),
(10, 1, 'abcc', '333', '333', '333'),
(11, 1, 'aaaaa', '121', '1212', 'dsdsdsd'),
(12, 1, 'gggg', 'ggg', '55', '555'),
(13, 1, 'gggg', 'ggg', '55', '555'),
(14, 1, 'gggg', 'ggg', '55', '555'),
(15, 1, 'gggg', '444', '4444', '444'),
(16, 1, 'gggg', '444', '4444', '444'),
(17, 1, '444', '4444', '444', '4444'),
(18, 1, '444', '4444', '444', '4444'),
(19, 1, '444', '4444', '444', '4444'),
(20, 1, '444', '4444', '444', '4444'),
(21, 1, 'bbbb', '12', '1', '11'),
(22, 1, '432', '423', '4', '3'),
(23, 9, 'hhhh', '444', '444888', '8888'),
(24, 9, 'bbbbb', '55555', '5555', '5555'),
(25, 9, 'bbbbb', '55555', '5555', '5555'),
(26, 9, 'bbbbb', '55555', '5555', '5555'),
(27, 9, 'bbbbb', '55555', '5555', '5555'),
(28, 9, 'bbbbb', '55555', '5555', '5555'),
(29, 9, 'bbbbb', '55555', '5555', '5555'),
(30, 9, 'bbbbb', '55555', '5555', '5555'),
(31, 9, 'bbbbb', '55555', '5555', '5555'),
(32, 9, 'bbbbb', '55555', '5555', '5555'),
(33, 9, 'bbbbb', '55555', '5555', '5555'),
(34, 1, 'bcv', '12', '12', '124gdas'),
(35, 1, '343', '434343', '434343', '434343');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themuon`
--
ALTER TABLE `themuon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `themuon`
--
ALTER TABLE `themuon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
