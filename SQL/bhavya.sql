-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2024 at 07:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhavya`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactdetails`
--

CREATE TABLE `contactdetails` (
  `sno` int(11) NOT NULL,
  `Gname` varchar(32) NOT NULL,
  `Grelation` varchar(22) NOT NULL,
  `GPadress` varchar(20) NOT NULL,
  `Gcity` varchar(24) NOT NULL,
  `Gcountry` varchar(26) NOT NULL,
  `GMobile` int(16) NOT NULL,
  `GPhone` int(12) NOT NULL,
  `Gemail` varchar(34) NOT NULL,
  `gperadresss` varchar(36) NOT NULL,
  `Gstate` varchar(21) NOT NULL,
  `Gzipcode` varchar(30) NOT NULL,
  `GHomePhone` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactdetails`
--

INSERT INTO `contactdetails` (`sno`, `Gname`, `Grelation`, `GPadress`, `Gcity`, `Gcountry`, `GMobile`, `GPhone`, `Gemail`, `gperadresss`, `Gstate`, `Gzipcode`, `GHomePhone`) VALUES
(1, '', '', '', '', 'chinese', 0, 0, '', '', '', '', 0),
(2, '', '', '', '', 'chinese', 0, 0, '', '', '', '', 0),
(3, '', '', '', '', 'chinese', 0, 0, '', '', '', '', 0),
(4, 'dsadas', 'dsdsfds', 'fsmdkfdssknfsdjkfsdk', 'ajmer', 'indian', 2147483647, 34243243, 'ndjks@8938', 'sfsdfndsjkfnsjkd', 'fdsfsd', 'dsf34', 0),
(5, 'aping', 'dost', 'road', 'nokone', 'italian', 324324324, 65456454, 'nonkewnr@89342', 'dsnfkjdsnfksdnfkjdsnfjskd', 'kyapta', 'ky34', 2147483647),
(6, '', '', '', '', 'chinese', 0, 0, '', '', '', '', 0),
(7, '', '', '', '', 'chinese', 0, 0, '', '', '', '', 0),
(8, '', '', '', '', 'chinese', 0, 0, '', '', '', '', 0),
(9, '', '', '', '', 'chinese', 0, 0, '', '', '', '', 0),
(10, 'noone', 'aunty', 'liucknow', 'Jodhpur', 'danish', 2147483647, 2147483647, 'aunty63@gmail.com', 'delhi', 'Rajasthan', '342001', 2332323),
(11, '', '', '', '', 'chinese', 0, 0, '', '', '', '', 0),
(12, 'dsadas', 'dsdsfds', 'Maharaja Hari Singh ', 'Jodhpur', 'italian', 2147483647, 65456454, 'ndjks@8938', 'Maharaja Hari Singh Nagar New Pali R', 'Rajasthan', '342001', 2147483647),
(13, '', '', '', '', 'chinese', 0, 0, '', '', '', '', 0),
(14, '', '', '', '', 'chinese', 0, 0, '', '', '', '', 0),
(15, '', '', '', '', 'chinese', 0, 0, '', '', '', '', 0),
(16, '', '', '', '', 'chinese', 0, 0, '', '', '', '', 0),
(17, '', '', '', '', 'chinese', 0, 0, '', '', '', '', 0),
(18, 'aping', 'dsdsfds', 'Maharaja Hari Singh ', 'Jodhpur', 'italian', 2147483647, 65456454, 'nonkewnr@89342', 'Maharaja Hari Singh Nagar New Pali R', 'Rajasthan', '342001', 2147483647),
(19, '', '', '', '', 'chinese', 0, 0, '', '', '', '', 0),
(20, '', '', '', '', 'chinese', 0, 0, '', '', '', '', 0),
(21, '', '', '', '', 'chinese', 0, 0, '', '', '', '', 0),
(22, '', '', '', '', 'chinese', 0, 0, '', '', '', '', 0),
(23, '', '', '', '', 'chinese', 0, 0, '', '', '', '', 0),
(24, '', '', '', '', 'chinese', 0, 0, '', '', '', '', 0),
(25, 'dsadas', 'dost', 'Maharaja Hari Singh ', 'Jodhpur', 'japanese', 2147483647, 34243243, 'ndjks@8938', 'Maharaja Hari Singh Nagar New Pali R', 'Rajasthan', '342001', 2332323),
(26, 'aping', 'dost', 'Maharaja Hari Singh ', 'Jodhpur', 'chinese', 23423232, 34243243, 'nonkewnr@89342', 'Maharaja Hari Singh Nagar New Pali R', 'Rajasthan', '342001', 2332),
(27, 'arjin', 'noneokods', 'Maharaja Hari Singh ', 'Jodhpur', 'indian', 32432523, 34243243, 'kdshfkdsh42@gmail.com', 'Maharaja Hari Singh Nagar New Pali R', 'Rajasthan', '342001', 432432),
(28, 'dsadas', 'dost', 'Maharaja Hari Singh ', 'Jodhpur', 'indian', 23423232, 65456454, 'ndjks@8938', 'Maharaja Hari Singh Nagar New Pali R', 'Rajasthan', '342001', 2332),
(29, 'dsadas', 'dost', 'Maharaja Hari Singh ', 'Jodhpur', 'indian', 32432523, 34243243, 'ndjks@8938', 'Maharaja Hari Singh Nagar New Pali R', 'Rajasthan', '342001', 432432),
(30, 'dsadas', 'dost', 'Maharaja Hari Singh ', 'Jodhpur', 'italian', 32432523, 34243243, 'ndjks@8938', 'Maharaja Hari Singh Nagar New Pali R', 'Rajasthan', '342001', 432432),
(31, 'noone', 'dost', 'Maharaja Hari Singh ', 'Jodhpur', 'french', 23423232, 65456454, 'ndjks@8938', 'Maharaja Hari Singh Nagar New Pali R', 'Rajasthan', '342001', 34),
(32, 'aping', 'dsdsfds', 'Maharaja Hari Singh ', 'Jodhpur', 'indian', 2147483647, 65456454, 'ndjks@8938', 'Maharaja Hari Singh Nagar New Pali R', 'Rajasthan', '342001', 2332);

-- --------------------------------------------------------

--
-- Table structure for table `finaldetails`
--

CREATE TABLE `finaldetails` (
  `id` int(11) NOT NULL,
  `usernaminputdata` varchar(255) DEFAULT NULL,
  `naminputdata` varchar(255) DEFAULT NULL,
  `branchesdata` varchar(255) DEFAULT NULL,
  `Parentcoursedata` varchar(255) DEFAULT NULL,
  `emailinputdata` varchar(255) DEFAULT NULL,
  `phoneinputdata` varchar(20) DEFAULT NULL,
  `AYdata` varchar(10) DEFAULT NULL,
  `highestqualificationdata` varchar(255) DEFAULT NULL,
  `Percenagedata` varchar(10) DEFAULT NULL,
  `YPdata` varchar(10) DEFAULT NULL,
  `PINdata` varchar(255) DEFAULT NULL,
  `IAdata` varchar(255) DEFAULT NULL,
  `firstnameinputdata` varchar(255) DEFAULT NULL,
  `lastnameinputdata` varchar(255) DEFAULT NULL,
  `genderinputdata` varchar(10) DEFAULT NULL,
  `weightinputdata` varchar(10) DEFAULT NULL,
  `EyeSightinputdata` varchar(255) DEFAULT NULL,
  `NPSchoolinputdata` varchar(255) DEFAULT NULL,
  `Proficiencydata` varchar(255) DEFAULT NULL,
  `mediumdata` varchar(255) DEFAULT NULL,
  `mothertonguedata` varchar(255) DEFAULT NULL,
  `castdata` varchar(255) DEFAULT NULL,
  `middlenameinputdata` varchar(255) DEFAULT NULL,
  `dobinputdata` varchar(20) DEFAULT NULL,
  `Bloodgroupinputdata` varchar(10) DEFAULT NULL,
  `Heightinputdata` varchar(10) DEFAULT NULL,
  `Disabilityinputdata` varchar(255) DEFAULT NULL,
  `LastSchoolinputdata` varchar(255) DEFAULT NULL,
  `marksinputdata` varchar(10) DEFAULT NULL,
  `nationalitydata` varchar(255) DEFAULT NULL,
  `religiondata` varchar(255) DEFAULT NULL,
  `categorydata` varchar(255) DEFAULT NULL,
  `fatherninputdata` varchar(255) DEFAULT NULL,
  `fathernqinputdata` varchar(255) DEFAULT NULL,
  `fatheroinputdata` varchar(255) DEFAULT NULL,
  `fatherdinputdata` varchar(255) DEFAULT NULL,
  `fatheroaddresinputdata` varchar(255) DEFAULT NULL,
  `fatherdiinputdata` varchar(255) DEFAULT NULL,
  `motherninputdata` varchar(255) DEFAULT NULL,
  `mothernqinputdata` varchar(255) DEFAULT NULL,
  `motheroinputdata` varchar(255) DEFAULT NULL,
  `motherdinputdata` varchar(255) DEFAULT NULL,
  `motherdiinputdata` varchar(255) DEFAULT NULL,
  `FSNinputdata` varchar(255) DEFAULT NULL,
  `SSNinputdata` varchar(255) DEFAULT NULL,
  `FSCinputdata` varchar(255) DEFAULT NULL,
  `SSCinputdata` varchar(255) DEFAULT NULL,
  `Gnamedata` varchar(255) DEFAULT NULL,
  `RWGinputdata` varchar(255) DEFAULT NULL,
  `PHAinputdata` varchar(255) DEFAULT NULL,
  `Cityinputdata` varchar(255) DEFAULT NULL,
  `Stateinputdata` varchar(255) DEFAULT NULL,
  `mobiledata` varchar(20) DEFAULT NULL,
  `Gphone` varchar(20) DEFAULT NULL,
  `Gemail` varchar(255) DEFAULT NULL,
  `Gpadress` varchar(255) DEFAULT NULL,
  `Gstate` varchar(255) DEFAULT NULL,
  `Gzipcode` varchar(10) DEFAULT NULL,
  `Ghomephone` varchar(20) DEFAULT NULL,
  `ref1` varchar(255) DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `board` varchar(255) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `rollno` varchar(20) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `mo` varchar(10) DEFAULT NULL,
  `mm` varchar(10) DEFAULT NULL,
  `percenatge` varchar(10) DEFAULT NULL,
  `ref2` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `ref3` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `ref4` varchar(255) DEFAULT NULL,
  `img4` varchar(255) DEFAULT NULL,
  `ref5` varchar(255) DEFAULT NULL,
  `img5` varchar(255) DEFAULT NULL,
  `ref6` varchar(255) DEFAULT NULL,
  `img6` varchar(255) DEFAULT NULL,
  `ref7` varchar(255) DEFAULT NULL,
  `img7` varchar(255) DEFAULT NULL,
  `ref8` varchar(255) DEFAULT NULL,
  `img8` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `finaldetails`
--

INSERT INTO `finaldetails` (`id`, `usernaminputdata`, `naminputdata`, `branchesdata`, `Parentcoursedata`, `emailinputdata`, `phoneinputdata`, `AYdata`, `highestqualificationdata`, `Percenagedata`, `YPdata`, `PINdata`, `IAdata`, `firstnameinputdata`, `lastnameinputdata`, `genderinputdata`, `weightinputdata`, `EyeSightinputdata`, `NPSchoolinputdata`, `Proficiencydata`, `mediumdata`, `mothertonguedata`, `castdata`, `middlenameinputdata`, `dobinputdata`, `Bloodgroupinputdata`, `Heightinputdata`, `Disabilityinputdata`, `LastSchoolinputdata`, `marksinputdata`, `nationalitydata`, `religiondata`, `categorydata`, `fatherninputdata`, `fathernqinputdata`, `fatheroinputdata`, `fatherdinputdata`, `fatheroaddresinputdata`, `fatherdiinputdata`, `motherninputdata`, `mothernqinputdata`, `motheroinputdata`, `motherdinputdata`, `motherdiinputdata`, `FSNinputdata`, `SSNinputdata`, `FSCinputdata`, `SSCinputdata`, `Gnamedata`, `RWGinputdata`, `PHAinputdata`, `Cityinputdata`, `Stateinputdata`, `mobiledata`, `Gphone`, `Gemail`, `Gpadress`, `Gstate`, `Gzipcode`, `Ghomephone`, `ref1`, `img1`, `board`, `school`, `rollno`, `year`, `mo`, `mm`, `percenatge`, `ref2`, `img2`, `ref3`, `img3`, `ref4`, `img4`, `ref5`, `img5`, `ref6`, `img6`, `ref7`, `img7`, `ref8`, `img8`) VALUES
(1, 'varun789', 'Bhavya Jain', 'one', 'bca', 'varun84@gmail.com', '946123315600', '2021', '', '90', '2112', 'desafdsafdsafds', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Bhavya', 'Jain', 'male', '432<', '32', 'Bhavya Jain', 'no', 'wnglish', 'english', 'fdsfds', ' dsadsa', '34/2/123', 'b+', '12.8', 'mo', '23', '23', 'mexican', 'australian', 'st & sc</', 'anil', 'dsadsa<', 'fdsfdsfdsfds<', 'fdsfdsfds', 'jaipur', '23323', 'anita', 'mcom', 'housewife', 'edaadxcx', '3232', 'fsdfews', 'rid<', '11', '13', 'dsadas', 'dost', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Jodhpur', 'japanese', '324324322432', '34243243', 'ndjks@8938', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Rajasthan', '342001', '2332323', '12', '2d48ef3c-4323-40ec-8f90-a84add8382bb.jpg', 'csbse', '3243', 'asfdsa', '6576', '78', '100', '', '43243', '', '3424', '', '3243', '', '3203', '', '234324', '', '123', '', '32432', ''),
(2, 'varun789', 'Bhavya Jain', 'one', 'bca', 'varun84@gmail.com', '946123315600', '2021', '', '90', '2112', 'desafdsafdsafds', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Bhavya', 'Jain', 'male', '432<', '32', 'Bhavya Jain', 'no', 'wnglish', 'english', 'fdsfds', ' dsadsa', '34/2/123', 'b+', '12.8', 'mo', '23', '23', 'mexican', 'australian', 'st & sc</', 'anil', 'dsadsa<', 'fdsfdsfdsfds<', 'fdsfdsfds', 'jaipur', '23323', 'anita', 'mbdsamndjsad', 'housewife', 'edaadxcx', '3232', 'fsdfews', 'rid<', '11', '13', 'dsadas', 'dost', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Jodhpur', 'japanese', '324324322432', '34243243', 'ndjks@8938', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Rajasthan', '342001', '2332323', '12', '2d48ef3c-4323-40ec-8f90-a84add8382bb.jpg', 'csbse', '3243', 'asfdsa', '6576', '78', '100', '', '43243', '', '3424', '', '3243', '', '3203', '', '234324', '', '123', '', '32432', ''),
(3, 'varun789', 'Bhavya Jain', 'one', 'bca', 'varun84@gmail.com', '946123315600', '2023', '', '90', '2112', 'sfdsfdsfds', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Bhavya', 'Jain', 'male', '432<', '32', 'dsds', 'no', 'hindi', 'hindi', 'fdsfds', ' dsadsa', '34/2/123', 'b+', '12.8', 'mo', '87', '23', 'nigerian', 'albanian', 'obc</', 'samjay', 'bcom<', 'busiinenss<', 'fdsfdsfds', 'fdsfdsfdsfds', '1000000', 'dsadas', 'mcom', 'housewife', 'edaadxcx', '3232', 'fdsfd', 'rid<', '11', '98', 'aping', 'dost', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'hongkong', 'chinese', '23423232', '34243243', 'nhafdsihfdauifhudaif@89342', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Rajasthan', '342001', '2332', '12', '2e2e90c0-47f9-4bde-8cd8-ee0c847d4487.jpg', 'csbse', 'dps', '23', '2001', '78', '34', '232', '43243', '2e2e90c0-47f9-4bde-8cd8-ee0c847d4487.jpg', '43', '0f895474-ac1e-4f52-9587-891e32ab1ba9.jpg', '3243', '10_minute_delivery.jpg', '67', '3e73bfa7-1dfc-4a53-983c-59a95366b8dc.jpg', '234324', '0e17b83e-7153-430d-8235-62f6df8c1241.jpg', '45', '3b5925d8-44bd-4650-a519-756249819f70.jpg', '0239', '314d.jpg'),
(4, 'sid24', 'sidhart shukla', 'one', 'bca', 'sid34@gmail.com', '9039028390', '2020', '', '88', '2004', 'sahile institue', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'sid', 'rathore', 'male', '22<', '2.4', 'dpsss', 'noooo', 'eng', 'hi', 'ewew', ' shukla', '23/6/2023', 'o-', '13.6', 'nooo', '1', '90', 'indian', 'albanian', 'gen</', 'arvund shukla', 'bca<', 'jobwala<', 'dmkasdsa', 'ajmer', '32232', 'sarvind songhj', 'mvca', 'hosue', 'sdmfndsm,', '840', 'gunjsn', 'ridima<', '24', '18', 'arjin', 'noneokods', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Jodhpur', 'indian', '32432523', '34243243', 'kdshfkdsh42@gmail.com', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Rajasthan', '342001', '432432', '11', '2d48ef3c-4323-40ec-8f90-a84add8382bb.jpg', 'sadsa', 'dps', '334', '2024', '78', '36', '99', '11', '3a951a3c-85d0-48fe-ad9b-cd9ecf3ca1a2.jpg', '34', '1a3f0ccc-7080-482b-a0f8-3fae4df9e1aa.jpg', '57', '1f170dc9-7bab-4c3b-876e-bb4d17a8cc88.jpg', '89', '0e17b83e-7153-430d-8235-62f6df8c1241.jpg', '67', '2d48ef3c-4323-40ec-8f90-a84add8382bb.jpg', '46', '10_minute_delivery.jpg', '3456', '14cb4dff-a52c-445f-a484-b9e3db0207da(1).jpg'),
(5, 'dsd', 'Bhavya Jain', 'one', 'bca', 'bhav34@gmail.com', '946123315600', '2021', '', '32', '2332', 'hvhjjjjjjjjjjjjjjjj', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Bhavya', 'Jain', 'male', '232<', '9.3', 'Bhavya Jain', 'noooo', 'eng', 'english', 'dse', ' dsadsa', '23/6/2023', 'o-', '14.5', 'no', '87', '45', 'spanish', 'afghan', 'obc</', 'arvund shukla', 'bcom<', 'busiinenss<', 'dfsdfds', 'fdsfdsfdsfds', '32232', 'sarvind songhj', 'mcom', 'housewife', 'edaadxcx', '3232', 'fsdfews', 'ridima<', '34', '98', 'dsadas', 'dost', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Jodhpur', 'indian', '23423232', '65456454', 'ndjks@8938', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Rajasthan', '342001', '2332', '3424', '3a951a3c-85d0-48fe-ad9b-cd9ecf3ca1a2.jpg', 'sadsa', 'dps', '1', '2001', '78', '100', '213', '43243', '2e2e90c0-47f9-4bde-8cd8-ee0c847d4487.jpg', '34', '00ff6462-e1e9-4192-93b8-73050e4ad5ef(1).jpg', '56', '3e73bfa7-1dfc-4a53-983c-59a95366b8dc.jpg', '3203', '8a442ece-3d0f-4db2-a4d5-d142934030e3(1).jpg', '9032', '8ed033800ea38f24c4f0.png', '46', '10_minute_delivery.jpg', '0239', '10_minute_delivery.jpg'),
(6, 'dsd', 'Bhavya Jain', 'one', 'bca', 'bhav34@gmail.com', '946123315600', '2021', '', '34', '2332', 'hvhjjjjjjjjjjjjjjjj', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Bhavya', 'Jain', 'male', '232<', '9.3', 'Bhavya Jain', 'noooo', 'eng', 'english', 'dse', ' dsadsa', '23/6/2023', 'o-', '14.5', 'no', '87', '45', 'spanish', 'afghan', 'obc</', 'arvund shukla', 'bcom<', 'busiinenss<', 'dfsdfds', 'fdsfdsfdsfds', '32232', 'sarvind songhj', 'mcom', 'housewife', 'edaadxcx', '3232', 'fsdfews', 'ridima<', '34', '98', 'dsadas', 'dost', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Jodhpur', 'indian', '23423232', '65456454', 'ndjks@8938', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Rajasthan', '342001', '2332', '3424', '3a951a3c-85d0-48fe-ad9b-cd9ecf3ca1a2.jpg', 'sadsa', 'dps', '1', '2001', '78', '100', '213', '43243', '2e2e90c0-47f9-4bde-8cd8-ee0c847d4487.jpg', '34', '00ff6462-e1e9-4192-93b8-73050e4ad5ef(1).jpg', '56', '3e73bfa7-1dfc-4a53-983c-59a95366b8dc.jpg', '3203', '8a442ece-3d0f-4db2-a4d5-d142934030e3(1).jpg', '9032', '8ed033800ea38f24c4f0.png', '023409', '10_minute_delivery.jpg', '0239', '10_minute_delivery.jpg'),
(7, 'dsdcsdfcsdfds', 'Bhavya Jain', 'one', 'bca', 'bhav34@gmail.com', '946123315600', '2021', '', '34', '2332', 'hvhjjjjjjjjjjjjjjjj', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Bhavya', 'Jain', 'male', '232<', '9.3', 'Bhavya Jain', 'noooo', 'eng', 'english', 'dse', ' dsadsa', '23/6/2023', 'o-', '14.5', 'no', '87', '45', 'spanish', 'afghan', 'obc</', 'arvund shukla', 'bcom<', 'busiinenss<', 'dfsdfds', 'fdsfdsfdsfds', '32232', 'sarvind songhj', 'mcom', 'housewife', 'edaadxcx', '3232', 'fsdfews', 'ridima<', '34', '98', 'dsadas', 'dost', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Jodhpur', 'indian', '23423232', '65456454', 'ndjks@8938', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Rajasthan', '342001', '2332', '3424', '3a951a3c-85d0-48fe-ad9b-cd9ecf3ca1a2.jpg', 'sadsa', 'dps', '1', '2001', '78', '100', '213', '43243', '2e2e90c0-47f9-4bde-8cd8-ee0c847d4487.jpg', '34', '00ff6462-e1e9-4192-93b8-73050e4ad5ef(1).jpg', '56', '3e73bfa7-1dfc-4a53-983c-59a95366b8dc.jpg', '3203', '8a442ece-3d0f-4db2-a4d5-d142934030e3(1).jpg', '9032', '8ed033800ea38f24c4f0.png', '46', '10_minute_delivery.jpg', '02392332423432434', '10_minute_delivery.jpg'),
(8, 'dsddsadsadfdafafafadfdafadfnfjbdjsbfhsbdfshdbfhsdbfshdbfshdbfhsd', 'Bhavya Jain', 'one', 'bca', 'bhav34@gmail.com', '946123315600', '2021', '', '34', '2332', 'hvhjjjjjjjjjjjjjjjj', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Bhavya', 'Jain', 'male', '232<', '9.3', 'Bhavya Jain', 'noooo', 'eng', 'english', 'dse', ' dsadsa', '23/6/2023', 'o-', '14.5', 'no', '87', '45', 'spanish', 'afghan', 'obc</', 'arvund shukla', 'bcom<', 'busiinenss<', 'dfsdfds', 'fdsfdsfdsfds', '32232', 'sarvind songhj', 'mcom', 'housewife', 'edaadxcx', '3232', 'fsdfews', 'ridima<', '34', '98', 'dsadas', 'dost', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Jodhpur', 'indian', '23423232', '65456454', 'ndjks@8938', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Rajasthan', '342001', '2332', '3424', '3a951a3c-85d0-48fe-ad9b-cd9ecf3ca1a2.jpg', 'sadsa', 'dps', '1', '2001', '78', '100', '213', '43243', '2e2e90c0-47f9-4bde-8cd8-ee0c847d4487.jpg', '34', '00ff6462-e1e9-4192-93b8-73050e4ad5ef(1).jpg', '56', '3e73bfa7-1dfc-4a53-983c-59a95366b8dc.jpg', '3203', '8a442ece-3d0f-4db2-a4d5-d142934030e3(1).jpg', '9032', '8ed033800ea38f24c4f0.png', '46', '10_minute_delivery.jpg', '0239', '10_minute_delivery.jpg'),
(9, 'fhgfghfghfghfhgfghfhg465456', 'Bhavya Jain', 'two', 'bca', 'varun84@gmail.com', '946123315600', '2022', '', '34', '2332', 'esdf', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Bhavya', 'Jain', 'male', '432<', '9.3', 'Bhavya Jain', 'mo', 'wnglish', 'english', 'fdsfds', ' singh', '34/2/123', 'o-', '12.8', 'mo', '12', '23', 'japanese', 'albanian', 'gen</', 'arvund shukla', 'bcom<', 'jobwala<', 'dmkasdsa', 'jaipur', '23323', 'anita', 'mcom', 'adsa', 'fdsfdsfds234dsa', '3232', 'fdsfd', 'ridima<', '11', '18', 'aping', 'dsdsfds', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Jodhpur', 'indian', '89328493843', '65456454', 'ndjks@8938', 'Maharaja Hari Singh Nagar New Pali Road Jodhpur', 'Rajasthan', '342001', '2332', '3424', '2e2e90c0-47f9-4bde-8cd8-ee0c847d4487.jpg', 'sadsa', 'dps', '5', '2001', '78', '100', '213', '43243', '2e2e90c0-47f9-4bde-8cd8-ee0c847d4487.jpg', '34', '1a3f0ccc-7080-482b-a0f8-3fae4df9e1aa(1).jpg', '56', '0f895474-ac1e-4f52-9587-891e32ab1ba9.jpg', '3203', '00ff6462-e1e9-4192-93b8-73050e4ad5ef(1).jpg', '9032', '8ed033800ea38f24c4f0.png', '023409', '10_minute_delivery.jpg', '02392332423432434', '14cb4dff-a52c-445f-a484-b9e3db0207da(1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `generaldetails`
--

CREATE TABLE `generaldetails` (
  `sno` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `name` varchar(28) NOT NULL,
  `branch` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(20) NOT NULL,
  `academic_year` int(16) NOT NULL,
  `hqualification` varchar(22) NOT NULL,
  `percentage` int(12) NOT NULL,
  `year_passed` int(34) NOT NULL,
  `piname` varchar(20) NOT NULL,
  `institute_adress` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `generaldetails`
--

INSERT INTO `generaldetails` (`sno`, `username`, `name`, `branch`, `email`, `phone`, `academic_year`, `hqualification`, `percentage`, `year_passed`, `piname`, `institute_adress`) VALUES
(2, 'dsd', 'Bhavya Jain', 'one', 'bhav34@gmail.com', 32323232, 0, 'MTECH', 34, 2112, 'adsadsanfskadhf', 'Maharaja Hari Singh Nagar New Pali R'),
(4, 'ds2', 'Bhavya Jain', 'two', 'bhav34@gmail.com', 32323232, 0, 'bca', 23, 2332, 'dsknflisdjflsdjflsdj', 'Maharaja Hari Singh Nagar New Pali R'),
(5, 'ds2', 'Bhavya Jain', 'two', 'bhav34@gmail.com', 32323232, 0, 'bca', 23, 2332, 'dsknflisdjflsdjflsdj', 'Maharaja Hari Singh Nagar New Pali R'),
(6, '', '', '', '', 0, 0, '', 0, 0, '', ''),
(7, 'dsd', '', '', '', 0, 0, '', 0, 0, '', ''),
(8, '', '', '', '', 0, 0, '', 0, 0, '', ''),
(9, 'varun789', 'varu sethi', 'two', 'varun84@gmail.com', 2147483647, 2020, 'mca', 90, 2002, 'aishavtrya coolege', 'Maharaja Hari Singh Nagar New Pali R'),
(10, '', '', '', '', 0, 0, '', 0, 0, '', ''),
(11, 'dsd', 'Bhavya Jain', 'one', 'bhav34@gmail.com', 2147483647, 2021, 'MTECH', 23, 2332, 'dsamfsoadjfoiaisifos', 'Maharaja Hari Singh Nagar New Pali R'),
(12, '', '', '', '', 0, 0, '', 0, 0, '', ''),
(13, '', '', '', '', 0, 0, '', 0, 0, '', ''),
(14, '', '', '', '', 0, 0, '', 0, 0, '', ''),
(15, 'varun789', 'Bhavya Jain', 'two', 'varun84@gmail.com', 2147483647, 2021, 'MTECH', 23, 2112, 'Maharaja Hari Singh ', 'Maharaja Hari Singh Nagar New Pali R'),
(16, '', '', '', '', 0, 0, '', 0, 0, '', ''),
(17, 'dsd', 'Bhavya Jain', 'two', 'bhav34@gmail.com', 32323232, 2022, '', 0, 0, '', 'Maharaja Hari Singh Nagar New Pali R'),
(18, 'dsd', 'Bhavya Jain', 'two', 'bhav34@gmail.com', 32323232, 2022, 'mca', 0, 0, '', 'Maharaja Hari Singh Nagar New Pali R'),
(19, 'varun789', 'Bhavya Jain', '', 'bhav34@gmail.com', 2147483647, 2022, 'bmca', 23, 2332, 'Maharaja Hari Singh ', 'Maharaja Hari Singh Nagar New Pali R'),
(20, 'varun789', 'Bhavya Jain', '', 'bhav34@gmail.com', 2147483647, 2022, '12', 34, 2002, 'fdsfdsfdsf', 'Maharaja Hari Singh Nagar New Pali R'),
(21, 'varun789', 'Bhavya Jain', 'one', 'varun84@gmail.com', 2147483647, 2021, 'bmca', 90, 2112, 'desafdsafdsafds', 'Maharaja Hari Singh Nagar New Pali R'),
(22, 'varun789', 'Bhavya Jain', 'one', 'varun84@gmail.com', 2147483647, 2023, 'bmca', 90, 2112, 'sfdsfdsfds', 'Maharaja Hari Singh Nagar New Pali R'),
(23, 'sid24', 'sidhart shukla', 'one', 'sid34@gmail.com', 2147483647, 2020, 'mca', 88, 2004, 'sahile institue', 'Maharaja Hari Singh Nagar New Pali R'),
(24, 'dsd', 'Bhavya Jain', 'one', 'bhav34@gmail.com', 2147483647, 2021, 'bmca', 34, 2332, 'hvhjjjjjjjjjjjjjjjj', 'Maharaja Hari Singh Nagar New Pali R'),
(25, 'akhdsj3', 'Bhavya Jain', 'two', 'bhav34@gmail.com', 2147483647, 2021, 'MTECH', 34, 2112, 'dshfkjsd', 'Maharaja Hari Singh Nagar New Pali R'),
(26, 'armann podar', 'Bhavya Jain', 'two', 'bhav34@gmail.com', 2147483647, 2021, 'MTECH', 34, 2112, 'dshfkjsd', 'Maharaja Hari Singh Nagar New Pali R'),
(27, 'dsidkingogvv', 'Bhavya Jain', 'one', 'bhav34@gmail.com', 2147483647, 2021, 'mca', 88, 2002, 'hdaskhfkafhilea', 'Maharaja Hari Singh Nagar New Pali R'),
(28, 'sidking21', 'Bhavya Jain', 'one', 'bhav34@gmail.com', 2147483647, 2023, 'bmca', 88, 2004, 'hadfhejkafhekjfheku', 'Maharaja Hari Singh Nagar New Pali R'),
(29, 'visdsassd32', 'Bhavya Jain', 'two', 'varun84@gmail.com', 2147483647, 2022, 'bca', 34, 2332, 'esdf', 'Maharaja Hari Singh Nagar New Pali R');

-- --------------------------------------------------------

--
-- Table structure for table `lastformdetail`
--

CREATE TABLE `lastformdetail` (
  `sno` int(11) NOT NULL,
  `ref1` varchar(20) NOT NULL,
  `img1` blob NOT NULL,
  `board` varchar(10) NOT NULL,
  `school` int(22) NOT NULL,
  `rollno` int(24) NOT NULL,
  `year` int(16) NOT NULL,
  `mo` int(12) NOT NULL,
  `mm` int(15) NOT NULL,
  `percent` int(23) NOT NULL,
  `rf2` varchar(26) NOT NULL,
  `img2` blob NOT NULL,
  `rf3` varchar(28) NOT NULL,
  `img3` blob NOT NULL,
  `rf4` varchar(27) NOT NULL,
  `img4` blob NOT NULL,
  `rf5` varchar(29) NOT NULL,
  `img5` blob NOT NULL,
  `ref6` varchar(12) NOT NULL,
  `img6` blob NOT NULL,
  `ref7` varchar(22) NOT NULL,
  `img7` blob NOT NULL,
  `ref8` varchar(30) NOT NULL,
  `img8` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lastformdetail`
--

INSERT INTO `lastformdetail` (`sno`, `ref1`, `img1`, `board`, `school`, `rollno`, `year`, `mo`, `mm`, `percent`, `rf2`, `img2`, `rf3`, `img3`, `rf4`, `img4`, `rf5`, `img5`, `ref6`, `img6`, `ref7`, `img7`, `ref8`, `img8`) VALUES
(1, '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '3424', 0x30326434663665352d656335362d343332362d616135342d3935306365373636646230622e6a7067, 'sadsa', 3243, 0, 0, 0, 32, 213, '43243', '', '3424', '', '3243', '', '3243', '', '234324', '', '4324', '', '32432', ''),
(3, '3424', 0x30326434663665352d656335362d343332362d616135342d3935306365373636646230622e6a7067, 'sadsa', 3243, 0, 0, 0, 32, 213, '43243', '', '3424', '', '3243', '', '3243', '', '234324', '', '4324', '', '32432', ''),
(4, '3424', 0x30326434663665352d656335362d343332362d616135342d3935306365373636646230622e6a7067, 'sadsa', 3243, 0, 0, 0, 32, 213, '43243', '', '3424', '', '3243', '', '3243', '', '234324', '', '4324', '', '32432', ''),
(5, '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '32', 0x31663137306463392d376261622d346333622d383736652d6262346431376138636338382e6a7067, 'rbse', 0, 23, 2001, 78, 100, 92, '232323', '', '2323', '', '93', '', '3203', '', '2332', '', '123', '', '232', ''),
(8, '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '3232', 0x30306666363436322d653165392d343139322d393362382d3733303530653461643565662831292e6a7067, 'csbse', 3243, 23, 2012, 243, 500, 45, '1233', '', '9032', '', '2323', '', '3432', '', '9032', '', '0942', '', '0239', ''),
(10, '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '3424', 0x32653265393063302d343766392d346264652d386364382d6565306338343764343438372e6a7067, 'csbse', 0, 23, 2001, 78, 100, 213, '43243', '', '3424', '', '2323', '', '67', '', '234324', '', '0942', '', '232', ''),
(14, '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, '12', 0x32643438656633632d343332332d343065632d386639302d6138346164643833383262622e6a7067, 'csbse', 3243, 0, 6576, 78, 100, 0, '43243', '', '3424', '', '3243', '', '3203', '', '234324', '', '123', '', '32432', ''),
(22, '12', 0x32653265393063302d343766392d346264652d386364382d6565306338343764343438372e6a7067, 'csbse', 0, 23, 2001, 78, 34, 232, '43243', 0x32653265393063302d343766392d346264652d386364382d6565306338343764343438372e6a7067, '43', 0x30663839353437342d616331652d346635322d393538372d3839316533326162316261392e6a7067, '3243', 0x31305f6d696e7574655f64656c69766572792e6a7067, '67', 0x33653733626661372d316466632d346135332d393833632d3539613935333636623864632e6a7067, '234324', 0x30653137623833652d373135332d343330642d383233352d3632663664663863313234312e6a7067, '45', 0x33623539323564382d343462642d343635302d613531392d3735363234393831396637302e6a7067, '0239', 0x333134642e6a7067),
(23, '11', 0x32643438656633632d343332332d343065632d386639302d6138346164643833383262622e6a7067, 'sadsa', 0, 334, 2024, 78, 36, 99, '11', 0x33613935316133632d383564302d343866652d616439622d6364396563663363613161322e6a7067, '34', 0x31613366306363632d373038302d343832622d613066382d3366616534646639653161612e6a7067, '57', 0x31663137306463392d376261622d346333622d383736652d6262346431376138636338382e6a7067, '89', 0x30653137623833652d373135332d343330642d383233352d3632663664663863313234312e6a7067, '67', 0x32643438656633632d343332332d343065632d386639302d6138346164643833383262622e6a7067, '46', 0x31305f6d696e7574655f64656c69766572792e6a7067, '3456', 0x31346362346466662d613532632d343435662d613438342d6239653364623032303764612831292e6a7067),
(24, '11', 0x32643438656633632d343332332d343065632d386639302d6138346164643833383262622e6a7067, 'sadsa', 0, 334, 2024, 78, 36, 99, '11', 0x33613935316133632d383564302d343866652d616439622d6364396563663363613161322e6a7067, '34', 0x31613366306363632d373038302d343832622d613066382d3366616534646639653161612e6a7067, '57', 0x31663137306463392d376261622d346333622d383736652d6262346431376138636338382e6a7067, '89', 0x30653137623833652d373135332d343330642d383233352d3632663664663863313234312e6a7067, '67', 0x32643438656633632d343332332d343065632d386639302d6138346164643833383262622e6a7067, '46', 0x31305f6d696e7574655f64656c69766572792e6a7067, '3456', 0x31346362346466662d613532632d343435662d613438342d6239653364623032303764612831292e6a7067),
(25, '3424', 0x32653265393063302d343766392d346264652d386364382d6565306338343764343438372e6a7067, 'sadsa', 0, 23, 2001, 78, 32, 213, '43243', 0x32653265393063302d343766392d346264652d386364382d6565306338343764343438372e6a7067, '3424', 0x38613434326563652d336430662d346462322d613464352d6431343239333430333065332831292e6a7067, '56', 0x36623938363333632d376336612d343730382d613337322d6532623439646135363861622e6a7067, '3243', 0x36623938363333632d376336612d343730382d613337322d6532623439646135363861622e6a7067, '2332', 0x33613935316133632d383564302d343866652d616439622d6364396563663363613161322e6a7067, '0942', 0x36623938363333632d376336612d343730382d613337322d6532623439646135363861622e6a7067, '0239', 0x34633361656665642d343166392d346361332d626132622d3632363432653966396338312e6a7067),
(26, '3424', 0x32653265393063302d343766392d346264652d386364382d6565306338343764343438372e6a7067, 'sadsa', 0, 23, 2001, 78, 32, 213, '43243', 0x32653265393063302d343766392d346264652d386364382d6565306338343764343438372e6a7067, '3424', 0x38613434326563652d336430662d346462322d613464352d6431343239333430333065332831292e6a7067, '56', 0x36623938363333632d376336612d343730382d613337322d6532623439646135363861622e6a7067, '3243', 0x36623938363333632d376336612d343730382d613337322d6532623439646135363861622e6a7067, '2332', 0x33613935316133632d383564302d343866652d616439622d6364396563663363613161322e6a7067, '0942', 0x36623938363333632d376336612d343730382d613337322d6532623439646135363861622e6a7067, '0239', 0x34633361656665642d343166392d346361332d626132622d3632363432653966396338312e6a7067),
(27, '3424', 0x33613935316133632d383564302d343866652d616439622d6364396563663363613161322e6a7067, 'sadsa', 0, 1, 2001, 78, 100, 213, '43243', 0x32653265393063302d343766392d346264652d386364382d6565306338343764343438372e6a7067, '34', 0x30306666363436322d653165392d343139322d393362382d3733303530653461643565662831292e6a7067, '56', 0x33653733626661372d316466632d346135332d393833632d3539613935333636623864632e6a7067, '3203', 0x38613434326563652d336430662d346462322d613464352d6431343239333430333065332831292e6a7067, '9032', 0x38656430333338303065613338663234633466302e706e67, '46', 0x31305f6d696e7574655f64656c69766572792e6a7067, '0239', 0x31305f6d696e7574655f64656c69766572792e6a7067),
(28, '3424', 0x33613935316133632d383564302d343866652d616439622d6364396563663363613161322e6a7067, 'sadsa', 0, 1, 2001, 78, 100, 213, '43243', 0x32653265393063302d343766392d346264652d386364382d6565306338343764343438372e6a7067, '34', 0x30306666363436322d653165392d343139322d393362382d3733303530653461643565662831292e6a7067, '56', 0x33653733626661372d316466632d346135332d393833632d3539613935333636623864632e6a7067, '3203', 0x38613434326563652d336430662d346462322d613464352d6431343239333430333065332831292e6a7067, '9032', 0x38656430333338303065613338663234633466302e706e67, '46', 0x31305f6d696e7574655f64656c69766572792e6a7067, '0239', 0x31305f6d696e7574655f64656c69766572792e6a7067),
(29, '3424', 0x36623938363333632d376336612d343730382d613337322d6532623439646135363861622e6a7067, 'csbse', 3243, 23, 2001, 78, 32, 99, '43243', 0x34633361656665642d343166392d346361332d626132622d3632363432653966396338312e6a7067, '34', 0x30326434663665352d656335362d343332362d616135342d3935306365373636646230622e6a7067, '3243', 0x33653733626661372d316466632d346135332d393833632d3539613935333636623864632e6a7067, '3203', 0x30653137623833652d373135332d343330642d383233352d3632663664663863313234312e6a7067, '65', 0x33613935316133632d383564302d343866652d616439622d6364396563663363613161322e6a7067, '023409', 0x32653265393063302d343766392d346264652d386364382d6565306338343764343438372e6a7067, '3456', 0x38613434326563652d336430662d346462322d613464352d6431343239333430333065332831292e6a7067),
(30, '3424', 0x36623938363333632d376336612d343730382d613337322d6532623439646135363861622e6a7067, 'csbse', 3243, 23, 2001, 78, 32, 99, '43243', 0x34633361656665642d343166392d346361332d626132622d3632363432653966396338312e6a7067, '34', 0x30326434663665352d656335362d343332362d616135342d3935306365373636646230622e6a7067, '3243', 0x33653733626661372d316466632d346135332d393833632d3539613935333636623864632e6a7067, '3203', 0x30653137623833652d373135332d343330642d383233352d3632663664663863313234312e6a7067, '65', 0x33613935316133632d383564302d343866652d616439622d6364396563663363613161322e6a7067, '023409', 0x32653265393063302d343766392d346264652d386364382d6565306338343764343438372e6a7067, '3456', 0x38613434326563652d336430662d346462322d613464352d6431343239333430333065332831292e6a7067),
(31, '324', 0x32653265393063302d343766392d346264652d386364382d6565306338343764343438372e6a7067, 'csbse', 0, 23, 2001, 78, 32, 213, '43243', 0x33623539323564382d343462642d343635302d613531392d3735363234393831396637302e6a7067, '3424', 0x30306666363436322d653165392d343139322d393362382d3733303530653461643565662831292e6a7067, '56', 0x38656430333338303065613338663234633466302e706e67, '3243', 0x33613935316133632d383564302d343866652d616439622d6364396563663363613161322e6a7067, '67', 0x38656430333338303065613338663234633466302e706e67, '4324', 0x31613366306363632d373038302d343832622d613066382d3366616534646639653161612e6a7067, '232', 0x33666664663563662d303536332d346266342d613061332d3263653439363761303234662e6a7067),
(32, '3424', 0x32653265393063302d343766392d346264652d386364382d6565306338343764343438372e6a7067, 'csbse', 0, 23, 2001, 78, 32, 213, '43243', 0x33613935316133632d383564302d343866652d616439622d6364396563663363613161322e6a7067, '3424', 0x33623539323564382d343462642d343635302d613531392d3735363234393831396637302e6a7067, '56', 0x38613434326563652d336430662d346462322d613464352d6431343239333430333065332831292e6a7067, '3203', 0x31305f6d696e7574655f64656c69766572792e6a7067, '67', 0x33653733626661372d316466632d346135332d393833632d3539613935333636623864632e6a7067, '123', 0x38656430333338303065613338663234633466302e706e67, '232', 0x31305f6d696e7574655f64656c69766572792e6a7067),
(33, '3424', 0x32653265393063302d343766392d346264652d386364382d6565306338343764343438372e6a7067, 'csbse', 0, 23, 2001, 78, 32, 213, '43243', 0x33613935316133632d383564302d343866652d616439622d6364396563663363613161322e6a7067, '3424', 0x33623539323564382d343462642d343635302d613531392d3735363234393831396637302e6a7067, '56', 0x38613434326563652d336430662d346462322d613464352d6431343239333430333065332831292e6a7067, '3203', 0x31305f6d696e7574655f64656c69766572792e6a7067, '67', 0x33653733626661372d316466632d346135332d393833632d3539613935333636623864632e6a7067, '123', 0x38656430333338303065613338663234633466302e706e67, '232', 0x31305f6d696e7574655f64656c69766572792e6a7067),
(34, '3424', 0x32653265393063302d343766392d346264652d386364382d6565306338343764343438372e6a7067, 'sadsa', 0, 5, 2001, 78, 100, 213, '43243', 0x32653265393063302d343766392d346264652d386364382d6565306338343764343438372e6a7067, '34', 0x31613366306363632d373038302d343832622d613066382d3366616534646639653161612831292e6a7067, '56', 0x30663839353437342d616331652d346635322d393538372d3839316533326162316261392e6a7067, '3203', 0x30306666363436322d653165392d343139322d393362382d3733303530653461643565662831292e6a7067, '9032', 0x38656430333338303065613338663234633466302e706e67, '023409', 0x31305f6d696e7574655f64656c69766572792e6a7067, '02392332423432434', 0x31346362346466662d613532632d343435662d613438342d6239653364623032303764612831292e6a7067),
(35, '3424', 0x32653265393063302d343766392d346264652d386364382d6565306338343764343438372e6a7067, 'sadsa', 0, 5, 2001, 78, 100, 213, '43243', 0x32653265393063302d343766392d346264652d386364382d6565306338343764343438372e6a7067, '34', 0x31613366306363632d373038302d343832622d613066382d3366616534646639653161612831292e6a7067, '56', 0x30663839353437342d616331652d346635322d393538372d3839316533326162316261392e6a7067, '3203', 0x30306666363436322d653165392d343139322d393362382d3733303530653461643565662831292e6a7067, '9032', 0x38656430333338303065613338663234633466302e706e67, '023409', 0x31305f6d696e7574655f64656c69766572792e6a7067, '02392332423432434', 0x31346362346466662d613532632d343435662d613438342d6239653364623032303764612831292e6a7067),
(36, '3424', 0x32653265393063302d343766392d346264652d386364382d6565306338343764343438372e6a7067, 'sadsa', 0, 5, 2001, 78, 100, 213, '43243', 0x32653265393063302d343766392d346264652d386364382d6565306338343764343438372e6a7067, '34', 0x31613366306363632d373038302d343832622d613066382d3366616534646639653161612831292e6a7067, '56', 0x30663839353437342d616331652d346635322d393538372d3839316533326162316261392e6a7067, '3203', 0x30306666363436322d653165392d343139322d393362382d3733303530653461643565662831292e6a7067, '9032', 0x38656430333338303065613338663234633466302e706e67, '023409', 0x31305f6d696e7574655f64656c69766572792e6a7067, '02392332423432434', 0x31346362346466662d613532632d343435662d613438342d6239653364623032303764612831292e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `personaldetails`
--

CREATE TABLE `personaldetails` (
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL,
  `eye_sight` varchar(50) DEFAULT NULL,
  `previous_school` varchar(100) DEFAULT NULL,
  `proficiency` varchar(100) DEFAULT NULL,
  `medium` varchar(50) DEFAULT NULL,
  `mother_tongue` varchar(50) DEFAULT NULL,
  `caste` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `blood_group` varchar(5) DEFAULT NULL,
  `height` decimal(5,2) DEFAULT NULL,
  `disability` varchar(100) DEFAULT NULL,
  `last_school` varchar(100) DEFAULT NULL,
  `marks` decimal(5,2) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `father_qualification` varchar(100) DEFAULT NULL,
  `father_occupation` varchar(100) DEFAULT NULL,
  `father_designation` varchar(100) DEFAULT NULL,
  `father_occupational_address` varchar(255) DEFAULT NULL,
  `father_income` decimal(10,2) DEFAULT NULL,
  `mother_name` varchar(100) DEFAULT NULL,
  `mother_qualification` varchar(100) DEFAULT NULL,
  `mother_occupation` varchar(100) DEFAULT NULL,
  `mother_designation` varchar(100) DEFAULT NULL,
  `mother_income` decimal(10,2) DEFAULT NULL,
  `first_sibling_name` varchar(100) DEFAULT NULL,
  `second_sibling_name` varchar(100) DEFAULT NULL,
  `first_sibling_class` varchar(10) DEFAULT NULL,
  `second_sibling_class` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personaldetails`
--

INSERT INTO `personaldetails` (`first_name`, `last_name`, `gender`, `weight`, `eye_sight`, `previous_school`, `proficiency`, `medium`, `mother_tongue`, `caste`, `middle_name`, `dob`, `blood_group`, `height`, `disability`, `last_school`, `marks`, `nationality`, `religion`, `category`, `father_name`, `father_qualification`, `father_occupation`, `father_designation`, `father_occupational_address`, `father_income`, `mother_name`, `mother_qualification`, `mother_occupation`, `mother_designation`, `mother_income`, `first_sibling_name`, `second_sibling_name`, `first_sibling_class`, `second_sibling_class`) VALUES
('', '', '', 0.00, '', '', '', '', '', '', '', '0000-00-00', '', 0.00, '', '', 0.00, '', '', '', '', '', '', '', '', 0.00, '', '', '', '', 0.00, '', '', '', ''),
('', '', '', 0.00, '', '', '', '', '', '', '', '0000-00-00', '', 0.00, '', '', 0.00, '', '', '', '', '', '', '', '', 0.00, '', '', '', '', 0.00, '', '', '', ''),
('Bhavya', 'Jain', '', 0.00, '', '', '', '', '', '', '', '0000-00-00', '', 0.00, '', '', 0.00, '', '', '', '', '', '', '', '', 0.00, '', '', '', '', 0.00, '', '', '', ''),
('Bhavya', 'Jain', 'male', 232.00, '32', 'Bhavya Jain', 'mo', 'wnglish', 'english', 'fdsfds', 'dsadsa', '0000-00-00', 'b+', 12.80, 'mo', '233', 23.00, 'mexican', 'albanian', 'st & sc', 'samjay', 'dsadsa', 'fdsfdsfdsfds', 'fdsfdsfds', 'fdsfdsfdsfds', 23323.00, 'dsadas', 'dsafsdafds', 'adsa', 'fdsfdsfds234dsa', 3232.00, 'fsdfews', 'rewresfd', '34', '45'),
('', '', '', 0.00, '', '', '', '', '', '', '', '0000-00-00', '', 0.00, '', '', 0.00, '', '', '', '', '', '', '', '', 0.00, '', '', '', '', 0.00, '', '', '', ''),
('', '', '', 0.00, '', '', '', '', '', '', '', '0000-00-00', '', 0.00, '', '', 0.00, '', '', '', '', '', '', '', '', 0.00, '', '', '', '', 0.00, '', '', '', ''),
('', '', '', 0.00, '', '', '', '', '', '', '', '0000-00-00', '', 0.00, '', '', 0.00, '', '', '', '', '', '', '', '', 0.00, '', '', '', '', 0.00, '', '', '', ''),
('', '', '', 0.00, '', '', '', '', '', '', '', '0000-00-00', '', 0.00, '', '', 0.00, '', '', '', '', '', '', '', '', 0.00, '', '', '', '', 0.00, '', '', '', ''),
('', '', '', 0.00, '', '', '', '', '', '', '', '0000-00-00', '', 0.00, '', '', 0.00, '', '', '', '', '', '', '', '', 0.00, '', '', '', '', 0.00, '', '', '', ''),
('', '', '', 0.00, '', '', '', '', '', '', '', '0000-00-00', '', 0.00, '', '', 0.00, '', '', '', '', '', '', '', '', 0.00, '', '', '', '', 0.00, '', '', '', ''),
('lal ', 'chadda', 'male', 23.00, '9.3', 'mashesvri school', 'no', 'hindi', 'hindi', 'dse', 'singh', '0000-00-00', 'b+', 14.50, 'no', '12', 45.00, 'french', 'albanian', 'st & sc', 'anil', 'bcom', 'busiinenss', 'dfsdfds', 'jaipur', 1000000.00, 'anita', 'mcom', 'housewife', 'edaadxcx', 2121212.00, 'gunj', 'rid', '11', '13'),
('', '', '', 0.00, '', '', '', '', '', '', '', '0000-00-00', '', 0.00, '', '', 0.00, '', '', '', '', '', '', '', '', 0.00, '', '', '', '', 0.00, '', '', '', ''),
('Bhavya', 'Jain', 'male', 232.00, '9.3', 'Bhavya Jain', 'mo', 'wnglish', 'english', 'fdsfds', 'dsadsa', '0000-00-00', 'b+', 12.80, 'no', '23', 45.00, 'japanese', 'albanian', 'gen', 'samjay', 'bcom', 'busiinenss', 'fdsfdsfds', 'jaipur', 23323.00, 'dsadas', 'mcom', 'housewife', 'fdsfdsfds234dsa', 3232.00, 'fsdfews', 'rid', '34', '45'),
('', '', '', 0.00, '', '', '', '', '', '', '', '0000-00-00', '', 0.00, '', '', 0.00, '', '', '', '', '', '', '', '', 0.00, '', '', '', '', 0.00, '', '', '', ''),
('', '', '', 0.00, '', '', '', '', '', '', '', '0000-00-00', '', 0.00, '', '', 0.00, '', '', '', '', '', '', '', '', 0.00, '', '', '', '', 0.00, '', '', '', ''),
('', '', '', 0.00, '', '', '', '', '', '', '', '0000-00-00', '', 0.00, '', '', 0.00, '', '', '', '', '', '', '', '', 0.00, '', '', '', '', 0.00, '', '', '', ''),
('Bhavya', 'Jain', 'male', 432.00, '9.3', 'Bhavya Jain', 'mo', 'wnglish', 'english', 'fdsfds', 'dsadsa', '0000-00-00', 'b+', 12.80, 'mo', '23', 23.00, 'canadian', 'argentine', 'gen', 'samjay', 'dsadsa', 'busiinenss', 'fdsfdsfds', 'jaipur', 23323.00, 'dsadas', 'mcom', 'adsa', 'edaadxcx', 3232.00, 'fsdfews', 'rewresfd', '34', '13'),
('', '', '', 0.00, '', '', '', '', '', '', '', '0000-00-00', '', 0.00, '', '', 0.00, '', '', '', '', '', '', '', '', 0.00, '', '', '', '', 0.00, '', '', '', ''),
('', '', '', 0.00, '', '', '', '', '', '', '', '0000-00-00', '', 0.00, '', '', 0.00, '', '', '', '', '', '', '', '', 0.00, '', '', '', '', 0.00, '', '', '', ''),
('', '', '', 0.00, '', '', '', '', '', '', '', '0000-00-00', '', 0.00, '', '', 0.00, '', '', '', '', '', '', '', '', 0.00, '', '', '', '', 0.00, '', '', '', ''),
('', '', '', 0.00, '', '', '', '', '', '', '', '0000-00-00', '', 0.00, '', '', 0.00, '', '', '', '', '', '', '', '', 0.00, '', '', '', '', 0.00, '', '', '', ''),
('', '', '', 0.00, '', '', '', '', '', '', '', '0000-00-00', '', 0.00, '', '', 0.00, '', '', '', '', '', '', '', '', 0.00, '', '', '', '', 0.00, '', '', '', ''),
('Bhavya', 'Jain', 'male', 432.00, '32', 'Bhavya Jain', 'no', 'wnglish', 'english', 'fdsfds', 'dsadsa', '0000-00-00', 'b+', 12.80, 'mo', '23', 23.00, 'mexican', 'australian', 'st & sc', 'anil', 'dsadsa', 'fdsfdsfdsfds', 'fdsfdsfds', 'jaipur', 23323.00, 'anita', 'mcom', 'housewife', 'edaadxcx', 3232.00, 'fsdfews', 'rid', '11', '13'),
('Bhavya', 'Jain', 'male', 432.00, '32', 'dsds', 'no', 'hindi', 'hindi', 'fdsfds', 'dsadsa', '0000-00-00', 'b+', 12.80, 'mo', '87', 23.00, 'nigerian', 'albanian', 'obc', 'samjay', 'bcom', 'busiinenss', 'fdsfdsfds', 'fdsfdsfdsfds', 1000000.00, 'dsadas', 'mcom', 'housewife', 'edaadxcx', 3232.00, 'fdsfd', 'rid', '11', '98'),
('sid', 'rathore', 'male', 22.00, '2.4', 'dpsss', 'noooo', 'eng', 'hi', 'ewew', 'shukla', '0000-00-00', 'o-', 13.60, 'nooo', '1', 48.00, 'indian', 'albanian', 'gen', 'arvund shukla', 'bca', 'jobwala', 'dmkasdsa', 'ajmer', 32232.00, 'sarvind songhj', 'mvca', 'hosue', 'sdmfndsm,', 840.00, 'gunjsn', 'ridima', '24', '18'),
('Bhavya', 'Jain', 'male', 232.00, '9.3', 'Bhavya Jain', 'noooo', 'eng', 'english', 'dse', 'dsadsa', '0000-00-00', 'o-', 14.50, 'no', '87', 45.00, 'spanish', 'afghan', 'obc', 'arvund shukla', 'bcom', 'busiinenss', 'dfsdfds', 'fdsfdsfdsfds', 32232.00, 'sarvind songhj', 'mcom', 'housewife', 'edaadxcx', 3232.00, 'fsdfews', 'ridima', '34', '98'),
('Bhavya', 'Jain', 'male', 432.00, '32', 'Bhavya Jain', 'mo', 'wnglish', 'english', 'fdsfds', 'dsadsa', '0000-00-00', 'b+', 12.80, 'no', '87', 45.00, 'canadian', 'albanian', 'obc', 'samjay', 'bca', 'jobwala', 'fdsfdsfds', 'fdsfdsfdsfds', 23323.00, 'dsadas', 'mvca', 'housewife', 'edaadxcx', 2121212.00, 'gunjsn', 'ridima', '11', '18'),
('Bhavya', 'Jain', 'male', 432.00, '9.3', 'Bhavya Jain', 'no', 'wnglish', 'english', 'ewew', 'singh', '0000-00-00', 'b+', 12.80, 'mo', '12', 48.00, 'argentine', 'albanian', 'gen', 'samjay', 'bcom', 'fdsfdsfdsfds', 'dfsdfds', 'fdsfdsfdsfds', 23323.00, 'dsadas', 'dsafsdafds', 'adsa', 'sdmfndsm,', 3232.00, 'gunj', 'ridima', '24', '98'),
('Bhavya', 'Jain', 'male', 432.00, '32', 'Bhavya Jain', 'noooo', 'hindi', 'english', 'ewew', 'dsadsa', '0000-00-00', 'b+', 12.80, 'mo', '1', 45.00, 'japanese', 'australian', 'obc', 'samjay', 'bcom', 'jobwala', 'fdsfdsfds', 'ajmer', 23323.00, 'anita', 'mvca', 'housewife', 'fdsfdsfds234dsa', 3232.00, 'gunj', 'rid', '11', '98'),
('aswqdwds', 'dsdfdsfd', 'maleere', 34.00, '2.8', 'Bhavya Jain', 'noooo', 'wnglish', 'englishtr', 'dseere', 'dsadsafd', '0000-00-00', 'b+', 12.85, 'mo', '23', 48.00, 'mexican', 'albanian', 'gen', 'dsfdsf', 'fdsfdsfdsfdsfd', 'busiinenss', 'dmkasdsa', 'fdsfdsfdsfds', 23323.00, 'fdsfdsfds', 'mgffdgfdfgd', 'adsa', 'gfdgfdgfdjhgj', 34.00, 'gunjsngfdg', 'ridimagfdgfdgf', '3454', '4545'),
('Bhavyadsdsdsdsa', 'Jaindsdsds', 'sddsgf', 45.00, '45.9', 'Bhavya Jain', 'gfgfgf', 'gfg', 'gfgfgfdrtrt', 'ghfhgfhgfhgfh', 'dsadsa', '0000-00-00', 'b+', 566.00, 'no', '56', 656.00, 'nigerian', 'afghan', 'gen', 'dsfdsf', 'bcom', 'busiinenss', 'dmkasdsa', 'ajmer', 1000000.00, 'sarvind songhj', 'mvca', 'housewife', 'fdsfdsfds234dsa', 2121212.00, 'gunjsngfdg', 'ridimagfdgfdgf', '24', '4545');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactdetails`
--
ALTER TABLE `contactdetails`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `finaldetails`
--
ALTER TABLE `finaldetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generaldetails`
--
ALTER TABLE `generaldetails`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `lastformdetail`
--
ALTER TABLE `lastformdetail`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactdetails`
--
ALTER TABLE `contactdetails`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `finaldetails`
--
ALTER TABLE `finaldetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `generaldetails`
--
ALTER TABLE `generaldetails`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `lastformdetail`
--
ALTER TABLE `lastformdetail`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
