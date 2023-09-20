-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 19, 2023 at 05:40 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iawd2302`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int NOT NULL,
  `nick_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `short_desp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `nick_name`, `name`, `designation`, `short_desp`, `image`) VALUES
(1, 'MD .Sabbir Hosen', 'sabbir', 'Webdeveloper', 'Backend developer', 'about.png');

-- --------------------------------------------------------

--
-- Table structure for table `expartis`
--

CREATE TABLE `expartis` (
  `id` int NOT NULL,
  `topic_name` varchar(50) NOT NULL,
  `percentage` int NOT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `expartis`
--

INSERT INTO `expartis` (`id`, `topic_name`, `percentage`, `status`) VALUES
(6, 'css', 80, 1),
(7, 'java script', 40, 1),
(8, 'bootstrap', 60, 1),
(10, 'laravel', 20, 1),
(11, 'jquery', 50, 1),
(39, 'Nina Henry', 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int NOT NULL,
  `header_logo` varchar(50) DEFAULT NULL,
  `footer_logo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `header_logo`, `footer_logo`) VALUES
(1, '$header_logo.png', '$footer_logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `masages`
--

CREATE TABLE `masages` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `masage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `masages`
--

INSERT INTO `masages` (`id`, `name`, `email`, `subject`, `masage`) VALUES
(13, 'Jamal Strong', 'gudy@mailinator.com', 'Harum earum nobis mo', 'Ab consequuntur expe'),
(14, 'Nathaniel Pruitt', 'suzobowyg@mailinator.com', 'Recusandae Itaque n', 'Obcaecati ad ab alia'),
(16, 'Lucas Walsh', 'xuwoleli@mailinator.com', 'Nostrud iste quo ab ', 'In quod alias numqua'),
(74, 'Drake Hardy', 'gyreriw@mailinator.com', 'Facilis voluptate as', 'Elit sit itaque ci'),
(75, 'Caesar Cantrell', 'hapedefy@mailinator.com', 'Esse dolore quo in ', 'Voluptas in ut ut mo'),
(79, 'Stone Manning', 'dypy@mailinator.com', 'Aut irure excepteur ', 'Anim voluptate deser');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `image` varchar(70) NOT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `catagory`, `image`, `status`) VALUES
(3, 'webdevelopment', 'wordpress', 'portfolio.15829.jpg', 1),
(4, 'Graphics  Design', 'business card', 'portfolio.17025.jpg', 1),
(5, 'Front End Design Development I', 'website development', 'portfolio.18999.jpg', 1),
(6, 'Videography Photography', '3d animetion', 'portfolio.10717.jpg', 1),
(8, 'Wordpress Development', 'wordpress', 'portfolio.17536.webp', 1),
(9, 'Application Devlopment', 'wordpress', 'portfolio.11514.jpg', 1),
(10, 'Digital Content Marketing', 'wordpress', 'portfolio.15091.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `short_desp` text NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `short_desp`, `status`) VALUES
(2, 'Graphics Branding Design', 'It can change the way we feel about a company and the products & services they offer.', 1),
(3, 'Front End Design Development', 'It can change the way we feel about a company and the products & services they offer.', 1),
(4, 'Digital Content Marketing', 'It can change the way we feel about a company and the products & services they offer', 1),
(5, 'Application Devlopment', 'It can change the way we feel about a company and the products & services they offer.', 1),
(7, 'Wordpress Development', 'It can change the way we feel about a company and the products & services they offer.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `occupation`, `description`, `image`, `status`) VALUES
(2, 'Stuart Frye', 'Doris Marsh', 'Molly Ruiz', 'tesmonial.19161.png', 1),
(5, 'Driscoll Mcgee', 'Rina Stevenson', 'Ezekiel Hooper', 'tesmonial.17724.png', 1),
(6, 'Jordan Hatfield', 'Anne Stanton', 'Rhea Middleton', 'tesmonial.17323.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gender` varchar(20) NOT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `image`) VALUES
(4, 'sabbir', 'gulizo@mailinator.com', '$2y$10$Sbz3noQFw5aiA4ZTP9oIrOPyK5j63kS9rv7yHfFFiyOGcqFz0jeaG', 'female', '4.png'),
(60, 'Alexa Savage', 'wisytek@mailinator.com', '$2y$10$K72mlDzmpzE.I5qGZj4eIORkppQH1ZR0crshsMZxnU9rmp.XRo3HG', 'male', NULL),
(61, 'Dillon Sexton', 'xinyxodut@mailinator.com', '$2y$10$Ao/zkq.uPCrRm8aTxEgQ1ugpFyHSESY7eniAD7XQ62CL.d6fOHQEu', 'male', NULL),
(62, 'Vernon Owens', 'qyzatovy@mailinator.com', '$2y$10$9lcDL44YOJGAuQk9m68mR.BT504sHyA1xOtA6XVfzlFz6.greSpwW', 'female', NULL),
(63, 'Yetta Barlow', 'mybohaf@mailinator.com', '$2y$10$pP2dfsY45y3AmEs8L/T.huJRpvbn61K1kX8yGzhaHBoWuovODvxDi', 'female', NULL),
(64, 'Idola Steele', 'regelohela@mailinator.com', '$2y$10$Few8btuYLF9SiqVj5qkgOOELVnI8pI1idcT7/lrwfUJYigLZ1kDbC', 'male', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expartis`
--
ALTER TABLE `expartis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masages`
--
ALTER TABLE `masages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expartis`
--
ALTER TABLE `expartis`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `masages`
--
ALTER TABLE `masages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
