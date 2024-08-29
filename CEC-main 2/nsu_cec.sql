-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 16, 2024 at 11:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nsu_cec`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `serial` int(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`serial`, `username`, `password`, `full_name`, `role`, `image`) VALUES
(1, 'nsu_cec', 'cec_admin', 'NSU CEC', 'admin', '192_NSUCEC1.png'),
(3, 'atik_akbar', 'cec1234', 'Atik Akbar', 'admin', '2tk.png'),
(4, 'albid', 'cse123', 'albid nawar', 'admin', 'Screenshot 2024-04-23 at 5.22.06 PM.png');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `send_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `message`, `send_by`) VALUES
(1, 'Hi!!', 'NSU CEC'),
(2, 'Hi', 'Atik Akbar'),
(3, 'How are you doing today?', 'NSU CEC'),
(4, 'Fine', 'Atik Akbar');

-- --------------------------------------------------------

--
-- Table structure for table `new_post`
--

CREATE TABLE `new_post` (
  `sl` int(11) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `post_date` varchar(255) NOT NULL,
  `post_by` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new_post`
--

INSERT INTO `new_post` (`sl`, `headline`, `post_date`, `post_by`, `image`, `image_title`, `details`) VALUES
(1, 'NSU CEC', '2024-02-13 20:33:00', 'NSU CEC', 'Orion.png', 'First try to make a post via admin panel', 'qERTYUI SDFGHJK asdfghj'),
(2, 'Barkotullah Opu', '2024-03-30 10:48:13', 'NSU CEC', '20240216_162229.jpg', 'Football', 'It was an amazing match');

-- --------------------------------------------------------

--
-- Table structure for table `startings`
--

CREATE TABLE `startings` (
  `serial` int(11) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `startings`
--

INSERT INTO `startings` (`serial`, `headline`, `description`, `image`) VALUES
(1, '<h2 class=\"fw-normal\">WE ARE</h2>\n<h2 class=\"fw-normal\">NSU <span class=\"fw-bold\">CEC</span></h2>', 'nsu cec motto, “Creating Tech Leaders of Tomorrow”, and in just five words it clearly states its main objective and goals. The club has been playing a pivotal role in strengthening and promoting the image of the university in the technological world', 'pic_1.png'),
(2, 'Skill Development', 'Test-2 CEC provide a platform for members to enhance their technical skills, whether in programming, hardware, or software development.The collaborative environment allows for shared learning experiences and knowledge exchange.', 'audi.png'),
(3, 'Skill Development', 'Test-3 CEC provide a platform for members to enhance their technical skills, whether in programming, hardware, or software development.The collaborative environment allows for shared learning experiences and knowledge exchange.', 'pic_3.png'),
(4, 'Skill Development', 'Test-4 CEC provide a platform for members to enhance their technical skills, whether in programming, hardware, or software development.The collaborative environment allows for shared learning experiences and knowledge exchange.', 'pic_4.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `new_post`
--
ALTER TABLE `new_post`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `startings`
--
ALTER TABLE `startings`
  ADD PRIMARY KEY (`serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `serial` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `new_post`
--
ALTER TABLE `new_post`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `startings`
--
ALTER TABLE `startings`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
