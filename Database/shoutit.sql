-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2017 at 06:34 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoutit`
--

-- --------------------------------------------------------

--
-- Table structure for table `1`
--

CREATE TABLE `1` (
  `hel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chatroomdetails`
--

CREATE TABLE `chatroomdetails` (
  `Room_ID` varchar(16) NOT NULL,
  `user1` varchar(16) NOT NULL,
  `user2` varchar(16) NOT NULL,
  `Last_Mass_Time` datetime NOT NULL,
  `Create_Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatroomdetails`
--

INSERT INTO `chatroomdetails` (`Room_ID`, `user1`, `user2`, `Last_Mass_Time`, `Create_Time`) VALUES
('OkxTXJHI6vL5eEtN', 'mVP9ajxEIs3LZTkw', 'qlVTXBKJZtiIoz3k', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('wbYGqrRAFf6PZ4vK', 'qlVTXBKJZtiIoz3k', 'z7ed0Y6DkIMhUOub', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(150) NOT NULL,
  `sub` text NOT NULL,
  `feedback` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `sub`, `feedback`, `date`, `time`) VALUES
(1, '0', 'tarun12.tarunkr@gmail.com', '', 'hey', '0000-00-00', '00:20:17'),
(2, '0', 'tarun12.tarunkr@gmail.com', 'test', 'hey', '2017-03-22', '00:19:32'),
(3, '0', 'tarun12.tarunkr@gmail.com', 'test', 'hfhgxdv', '2017-03-22', '00:22:50'),
(4, 'Tarun', 'tarun12.tarunkr@gmail.com', 'test', 'hey', '2017-03-22', '00:24:46'),
(5, 'Nishant', 'nishhantdubey420@gmail.com', 'hey', 'going well....keep it up', '2017-05-14', '19:49:40');

-- --------------------------------------------------------

--
-- Table structure for table `okxtxjhi6vl5eetn`
--

CREATE TABLE `okxtxjhi6vl5eetn` (
  `id` int(11) NOT NULL,
  `user` varchar(25) NOT NULL,
  `message` text NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shouts`
--

CREATE TABLE `shouts` (
  `id` int(11) NOT NULL,
  `Admin` varchar(10) NOT NULL,
  `user` varchar(25) NOT NULL,
  `message` text NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shouts`
--

INSERT INTO `shouts` (`id`, `Admin`, `user`, `message`, `time`, `date`) VALUES
(1, '16JE001895', 'Tarun', 'HELLO Every One Welcome to SHoutBox Beta Version1.0', '21:02:10', '2017-01-21'),
(2, '16JE001893', 'Nishant', 'Hi kaya ho raha hai', '21:23:07', '2017-01-21'),
(3, '16je001895', 'Tarun', 'hello', '00:34:53', '2017-01-31'),
(4, '16je001895', 'Tarun', 'hey', '00:22:37', '2017-03-22'),
(5, '', '', 'h', '14:01:16', '2017-04-01'),
(6, '16je001895', 'Tarun', 'df', '14:08:59', '2017-04-01'),
(7, '', '', 'sfd', '14:09:22', '2017-04-01'),
(8, '', '', 'ad', '14:09:26', '2017-04-01'),
(9, '16je001895', 'Tarun', 'd', '14:26:21', '2017-04-01'),
(10, '16je001895', 'Tarun', 'h', '14:28:40', '2017-04-01'),
(11, '16je001895', 'Tarun', ':)', '12:59:34', '2017-04-06'),
(12, '16je001895', 'Tarun', ':-)', '12:59:43', '2017-04-06'),
(13, '16je001895', 'Tarun', 'âœŠ', '13:17:59', '2017-04-06'),
(14, '16je001895', 'Tarun', 'ðŸ‘ðŸ‘ðŸ‘ŒðŸ˜¢', '13:19:30', '2017-04-06'),
(15, '16je001895', 'Tarun', '&quot;OR&quot;=&quot;&quot;', '20:58:48', '2017-04-28'),
(16, '16je001895', 'Tarun', 'hey this is my first time when i am posting some thing into this shout box new interface so lets see how good it is in the new look', '00:32:28', '2017-04-29'),
(17, '16je001895', 'Tarun', '&lt;div class=&quot;conarea&quot;&gt;          &lt;/div&gt;', '00:33:00', '2017-04-29'),
(18, '16je001895', 'Tarun', '29 Apr 12:33AM Tarun (16JE001895)  &lt;div class=&quot;conarea&quot;&gt; &lt;/div&gt; 29 Apr 12:32AM Tarun (16JE001895)  hey this is my first time when i am posting some thing into this shout box new interface so lets see how good it is in the new loo29 Apr 12:33AM Tarun (16JE001895)  &lt;div class=&quot;conarea&quot;&gt; &lt;/div&gt; 29 Apr 12:32AM Tarun (16JE001895)  hey this is my first time when i am posting some thing into this shout box new interface so lets see how good it is in the new loo29 Apr 12:33AM Tarun (16JE001895)  &lt;div class=&quot;conarea&quot;&gt; &lt;/div&gt; 29 Apr 12:32AM Tarun (16JE001895)  hey this is my first time when i am posting some thing into this shout box new interface so lets see how good it is in the new loo29 Apr 12:33AM Tarun (16JE001895)  &lt;div class=&quot;conarea&quot;&gt; &lt;/div&gt; 29 Apr 12:32AM Tarun (16JE001895)  hey this is my first time when i am posting some thing into this shout box new interface so lets see how good it is in the new loo', '00:33:30', '2017-04-29'),
(19, '16je001895', 'Tarun', 'hey', '10:24:51', '2017-04-29'),
(20, '16je001895', 'Tarun', 'hey', '23:21:35', '2017-05-13'),
(21, '16je001895', 'Tarun', 'hello', '00:00:00', '0000-00-00'),
(22, '16je001895', 'Tarun', 'hi,$roomid=wbYGqrRAFf6PZ4vK', '23:51:26', '2017-05-13'),
(23, '16je001895', 'Tarun', ',$roomid=wbYGqrRAFf6PZ4vK', '23:51:28', '2017-05-13'),
(24, '16je001895', 'Tarun', ',$roomid=wbYGqrRAFf6PZ4vK', '23:51:29', '2017-05-13'),
(25, '16je001895', 'Tarun', ',$roomid=wbYGqrRAFf6PZ4vK', '23:51:30', '2017-05-13'),
(26, '16je001895', 'Tarun', ',$roomid=wbYGqrRAFf6PZ4vK', '23:51:31', '2017-05-13'),
(27, '16je001895', 'Tarun', ',$roomid=wbYGqrRAFf6PZ4vK', '23:51:32', '2017-05-13'),
(28, '16je001895', 'Tarun', ',$roomid=wbYGqrRAFf6PZ4vK', '23:51:33', '2017-05-13'),
(29, '16je001895', 'Tarun', ',$roomid=wbYGqrRAFf6PZ4vK', '23:51:34', '2017-05-13'),
(30, '16je001895', 'Tarun', ',$roomid=wbYGqrRAFf6PZ4vK', '23:51:36', '2017-05-13'),
(31, '16je001895', 'Tarun', ',$roomid=wbYGqrRAFf6PZ4vK', '23:51:37', '2017-05-13'),
(32, '16je001895', 'Tarun', ',$roomid=wbYGqrRAFf6PZ4vK', '23:51:38', '2017-05-13'),
(33, '16je001895', 'Tarun', 'hey', '23:59:41', '2017-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_Index` bigint(255) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Admin` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Time` varchar(15) NOT NULL,
  `Date` date NOT NULL,
  `forget_link` varchar(20) DEFAULT NULL,
  `User_Id` varchar(16) NOT NULL,
  `propic` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_Index`, `First_Name`, `Last_Name`, `Admin`, `Password`, `Email`, `Time`, `Date`, `forget_link`, `User_Id`, `propic`) VALUES
(53, 'Ajay ', 'Meena', '15JE001405', 'password_goes_here', 'email_goes_here', '00:43:16 am', '2017-02-07', NULL, '3EI4oaZYXiSz5mny', 0),

--
-- Table structure for table `wbygqrraff6pz4vk`
--

CREATE TABLE `wbygqrraff6pz4vk` (
  `id` int(11) NOT NULL,
  `User_Id` varchar(16) NOT NULL,
  `user` varchar(25) NOT NULL,
  `message` text NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wbygqrraff6pz4vk`
--

INSERT INTO `wbygqrraff6pz4vk` (`id`, `User_Id`, `user`, `message`, `time`, `date`) VALUES
(1, 'qlVTXBKJZtiIoz3k', 'abc', 'hi', '00:00:00', '0000-00-00'),
(2, 'qlVTXBKJZtiIoz3k', 'abc', 'hi again', '00:00:00', '0000-00-00'),
(3, 'qlVTXBKJZtiIoz3k', 'Tarun', 'hey', '00:11:51', '2017-05-14'),
(4, 'qlVTXBKJZtiIoz3k', 'Tarun', 'hey', '00:13:33', '2017-05-14'),
(5, 'qlVTXBKJZtiIoz3k', 'Tarun', 'hi', '00:13:39', '2017-05-14'),
(6, 'z7ed0Y6DkIMhUOub', 'Nishant', 'hi wats up', '00:24:57', '2017-05-14'),
(7, 'qlVTXBKJZtiIoz3k', 'Tarun', 'fine', '00:25:10', '2017-05-14'),
(8, 'qlVTXBKJZtiIoz3k', 'Tarun', 'now gud', '00:26:04', '2017-05-14'),
(9, 'z7ed0Y6DkIMhUOub', 'Nishant', 'ya', '00:26:19', '2017-05-14'),
(10, 'qlVTXBKJZtiIoz3k', 'Tarun', 'hey', '16:30:46', '2017-05-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatroomdetails`
--
ALTER TABLE `chatroomdetails`
  ADD PRIMARY KEY (`Room_ID`),
  ADD KEY `user1` (`user1`),
  ADD KEY `user2` (`user2`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `okxtxjhi6vl5eetn`
--
ALTER TABLE `okxtxjhi6vl5eetn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shouts`
--
ALTER TABLE `shouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Admin`),
  ADD UNIQUE KEY `User_index` (`User_Index`),
  ADD KEY `User_Id` (`User_Id`);

--
-- Indexes for table `wbygqrraff6pz4vk`
--
ALTER TABLE `wbygqrraff6pz4vk`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `okxtxjhi6vl5eetn`
--
ALTER TABLE `okxtxjhi6vl5eetn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shouts`
--
ALTER TABLE `shouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_Index` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `wbygqrraff6pz4vk`
--
ALTER TABLE `wbygqrraff6pz4vk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chatroomdetails`
--
ALTER TABLE `chatroomdetails`
  ADD CONSTRAINT `rel1` FOREIGN KEY (`user1`) REFERENCES `users` (`User_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rel2` FOREIGN KEY (`user2`) REFERENCES `users` (`User_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
