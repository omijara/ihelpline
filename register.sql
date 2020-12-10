-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 09:12 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `name` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`name`, `author`) VALUES
('What young India wants', 'Chetan Bhagat'),
('Two States', 'Chetan Bhagat'),
('The hunger games', 'Suzanne Collions'),
('The 3 mistakes of my life', '	Chetan Bhagat'),
('Serious Men', '	Manu Joseph'),
('Revolution 2020', '	Chetan Bhagat'),
('God\"s Little Soldier', 'Kiran Nagarkar');

-- --------------------------------------------------------

--
-- Table structure for table `care`
--

CREATE TABLE `care` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `age` int(100) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `paddress` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `care`
--

INSERT INTO `care` (`id`, `name`, `age`, `mobile`, `paddress`) VALUES
(6, 'Bappy gosh', 30, '01674358675', 'Road#10 House#511'),
(7, 'Liton Mazumder', 22, '01674358675', 'Road#10 House#511'),
(8, 'Liton Mazumder', 22, '01674358675', 'Road#10 House#511'),
(9, 'liton mazumder', 279, '01722323264', 'Nakhalpara Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `contac_box`
--

CREATE TABLE `contac_box` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `mobile` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contac_box`
--

INSERT INTO `contac_box` (`id`, `name`, `mobile`, `email`, `message`) VALUES
(3, 'Liton Mazumder', '01674358675', 'obokas2@gmail.com', 'mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm'),
(4, 'vv', '', 'vvv@yah.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `visits` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `visits`) VALUES
(1, 1362);

-- --------------------------------------------------------

--
-- Table structure for table `covid_care`
--

CREATE TABLE `covid_care` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covid_care`
--

INSERT INTO `covid_care` (`id`, `first_name`, `last_name`, `dob`, `mobile`, `result`) VALUES
(44, 'Liton', 'Mazumder', '1991-12-12', '01674358675', 'Not Detect');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `employee_name` varchar(255) NOT NULL COMMENT 'employee name',
  `employee_salary` double NOT NULL COMMENT 'employee salary',
  `employee_age` int(11) NOT NULL COMMENT 'employee age'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='datatable demo table';

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employee_name`, `employee_salary`, `employee_age`) VALUES
(1, 'Tiger Nixon', 320800, 61),
(2, 'Garrett Winters', 170750, 63),
(3, 'Ashton Cox', 86000, 66),
(4, 'Cedric Kelly', 433060, 22),
(5, 'Airi Satou', 162700, 33),
(6, 'Brielle Williamson', 372000, 61),
(7, 'Herrod Chandler', 137500, 59),
(8, 'Rhona Davidson', 327900, 55),
(9, 'Colleen Hurst', 205500, 39),
(10, 'Sonya Frost', 103600, 23),
(11, 'Jena Gaines', 90560, 30),
(12, 'Quinn Flynn', 342000, 22),
(13, 'Charde Marshall', 470600, 36),
(14, 'Haley Kennedy', 313500, 43),
(15, 'Tatyana Fitzpatrick', 385750, 19),
(16, 'Michael Silva', 198500, 66);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `post_title` text NOT NULL,
  `post_description` longtext NOT NULL,
  `post_image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post_title`, `post_description`, `post_image`) VALUES
(1, 'This is new Post ', 'KHEA FOUNDATION provides Free Music Lessons for the Visually Impaired People', 'assets/img/post_image'),
(2, 'This is new Post  2', 'mmmmmmmmmmm', 'assets/img/post_image');

-- --------------------------------------------------------

--
-- Table structure for table `register_list`
--

CREATE TABLE `register_list` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(300) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_no` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `ac_no` varchar(255) NOT NULL,
  `card_no` varchar(255) NOT NULL,
  `digits` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_list`
--

INSERT INTO `register_list` (`id`, `bank_name`, `name`, `id_no`, `amount`, `ac_no`, `card_no`, `digits`) VALUES
(18, 'العربي', 'Omi', '', '2112', '21212121212', '121212', '122');

-- --------------------------------------------------------

--
-- Table structure for table `searchengine`
--

CREATE TABLE `searchengine` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `url` text NOT NULL,
  `keywords` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `searchengine`
--

INSERT INTO `searchengine` (`id`, `title`, `description`, `url`, `keywords`) VALUES
(1, 'Code and Improve your skills', 'An opportunity for all coders to become a better programmer.\r\n', 'http://codeforces.com/', 'Coding, Programming'),
(2, 'Code Editor', 'A great Editor for all programming languages. Includes C, C++, Python, AWK, PHP, Jquery.', 'http://ideone.com/', 'Code, Editor, Prograaming');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `role` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` longtext NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `username`, `role`, `email`, `image`, `password`) VALUES
(28, 'Omi', 'Mazumder', 'omijara', 'admin', 'obokas2@gmail.com', 'assets/img/user/Passport Size Photo.jpg', 'aaa'),
(29, 'Partho Sarothi', 'Kar', 'partho', 'editor', 'partho@gmail.com', 'assets/img/user/partho.jpg', 'aaa'),
(30, 'Sanjoy', 'Das', 'sanjoy', 'user', 'sanjoydas@gmail.com', 'assets/img/user/sanjoy.jpg', 'aaa'),
(31, 'Liton', 'Mazumder', 'omijara1', 'admin', 'obokas@gmail.com', 'assets/img/user/', 'asdf'),
(32, 'Liton', 'Mazumder', 'milan', 'admin', 'obok@gmail.com', 'assets/img/user/', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_list`
--

CREATE TABLE `volunteer_list` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `institute` varchar(100) NOT NULL,
  `paddress` varchar(300) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer_list`
--

INSERT INTO `volunteer_list` (`id`, `first_name`, `last_name`, `email`, `mobile`, `institute`, `paddress`, `message`) VALUES
(1, 'Sanjoy', 'Das', 'sanjoy@gmail.com', '01913752751', 'Dhaka University', 'Nakhalpara Dhaka', 'Paysera provides a safe, cost-effective, and convenient way to make payments and send or receive money online. Our main objective is to simplify your complex tasks and to make the expensive services '),
(4, 'Omi', 'Mazumder', 'obokas2@gmail.com', '01674358675', 'NSU', 'Road#10 House#511', 'Paysera provides a safe, cost-effective, and convenient way to make payments and send or receive money online.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `care`
--
ALTER TABLE `care`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contac_box`
--
ALTER TABLE `contac_box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `covid_care`
--
ALTER TABLE `covid_care`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_list`
--
ALTER TABLE `register_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searchengine`
--
ALTER TABLE `searchengine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer_list`
--
ALTER TABLE `volunteer_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `care`
--
ALTER TABLE `care`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contac_box`
--
ALTER TABLE `contac_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `covid_care`
--
ALTER TABLE `covid_care`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register_list`
--
ALTER TABLE `register_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `searchengine`
--
ALTER TABLE `searchengine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `volunteer_list`
--
ALTER TABLE `volunteer_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
