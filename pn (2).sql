-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2019 at 11:23 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pn`
--

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

CREATE TABLE `party` (
  `fn` varchar(50) NOT NULL,
  `ln` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`fn`, `ln`, `email`, `pass`) VALUES
('khloud', 'Al-Mubarak', 'ssdd112265@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `loc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `name`, `phoneno`, `loc`) VALUES
(1, 'Jau flowers', 138304488, 'Zaid Bin Alkhattab St '),
(2, 'Rose bar', 133456789, 'Prince Faisal Bin Fahad Road '),
(3, 'Flowers hut ', 138686882, 'Prince Faisal Bin Fahad Road '),
(4, 'Four seasons flowers boutique', 138492111, 'Prince Faisal Bin Fahad Road'),
(5, 'victoria_event ', 543913331, 'Prince Faisal Bin Fahad Road'),
(6, 'khalidkuwaite', 551115501, 'belal Bin Fahad Road'),
(7, 'lavatra_wedding', 564976604, 'Prince bander Bin Fahad Road'),
(8, 'lebon_events', 138190813, 'Prince soltan Road'),
(9, 'Chocolate Design ', 583750017, 'Prince Faisal Bin Fahd Road'),
(10, 'Litchi Chocolate', 138300880, 'Dammam'),
(11, 'Mini chocolate ', 114961188, 'Al Hasan Ibn Ali'),
(12, '  Line chocolate ', 550277750, 'Prince Muhammad Ibn Saad'),
(13, 'bran bakrey', 1383554558, 'Bran Bakery, Al Qusur, Az Zahran'),
(14, 'lapate ', 138023333, 'Prince Faisal Bin Fahd Road,Al Hizam Al Akhdar'),
(15, 'Lavivian', 566646000, 'Al Hizam Al Akhdar'),
(16, 'Manoosha Alreef ', 138313111, 'Prince Mohammed Bin Fahd Road,Al Mazruiyah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
