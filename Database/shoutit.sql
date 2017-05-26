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
(53, 'Ajay ', 'Meena', '15JE001405', 'qwerty', 'meenaajay333@gmail.com', '00:43:16 am', '2017-02-07', NULL, '3EI4oaZYXiSz5mny', 0),
(57, 'Jibin', 'Mathews', '16JE0001895', '123456', 'jibinmathews7@gmail.com', '19:01:15 pm', '2017-03-29', NULL, 'koXeHWFipYILA8bD', 0),
(39, 'Devesh', 'Anand', '16JE001840', 'qwerty', 'ananddevesh22@gmail.com', '14:44:09 pm', '2017-02-06', NULL, 'lt5TGaJzk0fwD79H', 0),
(52, 'Ghanshyam ', 'Meena', '16JE001858', 'qwerty', 'ghanshyammeena790935@gmail.com', '22:39:23 pm', '2017-02-06', NULL, 'YrU03nSQ51LNGyWK', 0),
(8, 'Nitin', 'Agrawal', '16JE001891', 'qwerty', 'nagrawal103@gmail.com', '09:43:05 am', '2017-01-25', NULL, 'kY7GSOUfVdH51Wt4', 0),
(9, 'Common', 'Man', '16JE001892', 'qwerty', 'sak_champ@rediffmail.com', '09:43:27 am', '2017-01-25', NULL, 'pYCayPVoJ7Xz2b0d', 0),
(2, 'Nishant', 'Dubey', '16JE001893', '123456', 'nishhantdubey420@gmail.com', '21:21:50 pm', '2017-01-21', NULL, 'z7ed0Y6DkIMhUOub', 0),
(1, 'Tarun', 'Kumar', '16JE001895', '123456', 'tarun12.tarunkr@gmail.com', '21:01:11 pm', '2017-01-21', NULL, 'qlVTXBKJZtiIoz3k', 1),
(7, 'Anchal', 'Srivastava', '16JE001899', 'qwerty', 'anchalsrivastava000@yahoo.com', '08:54:19 am', '2017-01-25', NULL, '3y2W7b8DNncHKrut', 0),
(59, 'Yvas', 'Durgesh ', '16JE001905 ', 'qwerty', 'yvasdurgesh@gmail.com ', '00:36:15 am', '2017-01-25', NULL, 'Frv6CKlTsQbXfVhy', 0),
(12, 'Aditya', 'Himanshu', '16JE001908', 'qwerty', 'himanshuaditya95@gmail.com', '01:58:22 am', '2017-01-27', NULL, 'IaiNTKUBX1LFR0Dv', 0),
(26, 'Sumit', 'Shekhar', '16JE001973', 'qwerty', 'sumit.shekhar15@gmail.com', '12:51:03 pm', '2017-02-06', NULL, 'lLO9uz1IX4aMRFJd', 0),
(3, 'Abhishek', 'Kumar', '16JE002015', '00000', 'abhishekkumar.kumar366@gmail.com', '23:05:50 pm', '2017-01-23', NULL, 'mVP9ajxEIs3LZTkw', 0),
(16, 'Mayank', 'Mathur', '16JE002016', 'qwerty', 'mayank160598@gmail.com', '00:24:10 am', '2017-02-04', NULL, 'm8JdXWFVEzkPN1Za', 0),
(11, 'Aranya', 'Samaiyar', '16JE002055', 'qwerty', 'samaiyararanya2055@gmail.com', '16:07:17 pm', '2017-01-25', NULL, 'xKGTZ1hDd7t6wYSl', 0),
(44, 'Amit', 'Chatterjee ', '16JE002109', 'qwerty', 'amitc3319@gmail.com', '17:59:30 pm', '2017-02-06', NULL, 'sjCYAImFelN6p1Ea', 0),
(14, 'Revanth', 'Lakavath', '16JE002126', 'qwerty', 'raghulakavath11@gmail.com', '14:44:02 pm', '2017-02-03', NULL, 'S1T5Caw0xXkYqBRj', 0),
(58, 'Vaibhaw ', 'Mittal', '16JE002141', '123456', 'vaibhavmittal99@gmail.com', '16:58:37 pm', '2017-04-01', NULL, 'FCunbN7wLzE1X6ph', 0),
(13, 'Aadarsh ', 'Singh', '16JE002144', 'qwerty', 'aadarshsingh191198@gmail.com', '14:21:41 pm', '2017-02-03', NULL, 'OySbv8mDi9G4EpMq', 0),
(6, 'Rohit', 'Raj', '16JE002147', '123456', 'tts@gmail.com', '17:21:07 pm', '2017-04-29', NULL, 'dwKWObm6AiHYBjGx', 0),
(5, 'Shivam', 'Kumar', '16JE002149', '123456', 'skshivam64@gmail.com', '17:17:46 pm', '2017-04-29', NULL, '5V2dZvyws4QMTqkp', 1),
(18, 'Aditya', 'Mudgil', '16JE002200', 'qwerty', 'adityamudgil25055@gmail.com', '01:16:24 am', '2017-02-05', NULL, '7thWpjauMcRUv9D0', 0),
(25, 'Saurav', 'Kumar', '16JE002270', 'qwerty', 'sauravkumar_201100@yahoo.com', '12:47:10 pm', '2017-02-06', NULL, 'qLBx4ParyvEsVfei', 0),
(56, 'J.M.', 'Akbar', '16JE002286', 'qwerty', 'jimjamjma100@gmail.com', '23:50:52 pm', '2017-03-26', NULL, 'qKV8yB3QxM26UGwi', 0),
(27, 'Siddhant', 'Choudhary', '16JE002299', 'qwerty', 'siddhantchoudhary14@gmail.com', '13:05:34 pm', '2017-02-06', NULL, 'h9qoP2y5MQjtl3eV', 0),
(28, 'Rohit', 'Yadv', '16JE002304', 'qwerty', 'yadavrohit18833@gmail.com', '13:15:00 pm', '2017-02-06', NULL, '2SQZLEIyWriwRDTB', 0),
(24, 'Saket ', 'Gupta', '16JE002320', 'qwerty', 'saketgupta1008@gmail.com ', '12:42:45 pm', '2017-02-06', NULL, '7eho1TdCtFOniIQa', 0),
(10, 'Harish', 'Kumar', '16JE002324', 'qwerty', 'harish37405@gmail.com', '12:25:37 pm', '2017-01-25', NULL, 'DbnidzFVU8mhktLj', 0),
(30, 'Vikrant', 'Singh', '16JE002333', 'qwerty', 'vikrantsingh7133@gmail.com', '14:12:15 pm', '2017-02-06', NULL, '8ZcRkyx0jt5CFShm', 0),
(22, 'KUMAR', 'SHANU', '16JE002334', 'qwerty', 'priyanshurajism1554@gmail.com', '12:40:35 pm', '2017-02-06', NULL, 'dCqA5SDtm2ypXaK0', 0),
(17, 'Utkarsh ', 'Bairolia', '16JE002349', 'qwerty', 'utkarshmine296@gmail.com', '23:51:22 pm', '2017-02-04', NULL, '1LzEvNtpiJ0MmcDI', 0),
(21, 'Gaurav', 'Kumar', '16JE002358', 'qwerty', 'gk321c@gmail.com', '12:09:39 pm', '2017-02-06', NULL, 'KhPe2rGVqkoaBm3M', 0),
(51, 'Rishabh ', 'Ranjan', '16JE002371', 'qwerty', 'srrishabh@gmail.com', '22:24:01 pm', '2017-02-06', NULL, 'DRI5rpEbmPWhC2NH', 0),
(48, 'Dipti', 'Bharti', '16JE002380', 'qwerty', 'bhartidipti4@gmail.com', '19:32:36 pm', '2017-02-06', NULL, 'kdBvjnyW1QYM63wI', 0),
(35, 'Ankit ', 'Kumar', '16JE002382', 'qwerty', 'ankitkumar150698@gmail.com', '14:39:41 pm', '2017-02-06', NULL, 'q6J0V47Mm9ip8DuT', 0),
(20, 'Rahul', 'Kumar Ojha', '16JE002384', 'qwerty', 'rahulojhaiit@gmail.com', '10:38:26 am', '2017-02-06', NULL, 'DsRaHpMfO8BoJyYj', 0),
(41, 'Abhinav', 'Bajpai', '16JE002392', 'qwerty', 'abhinavbajpai2012@gmail.com', '15:12:45 pm', '2017-02-06', NULL, 'Vo4krnfY61D9qvT0', 0),
(32, 'Navneet', 'Das', '16JE002396', 'qwerty', 'navneetdas53@gmail.com', '14:36:18 pm', '2017-02-06', NULL, 'ioUs07PuZhk8rONR', 0),
(40, 'Debrup', 'Datta', '16JE002397', 'qwerty', 'dattadebrup@gmail.com', '14:47:55 pm', '2017-02-06', NULL, 'SPvb9J4MZyGlxK23', 0),
(49, 'Manish', 'Kumar', '16JE002404', 'qwerty', 'man1998ishk@gmail.com', '19:56:31 pm', '2017-02-06', NULL, 'eRi3VwcUlWkjzDxE', 0),
(43, 'Shubham', 'Vishwakarma', '16JE002411', 'qwerty', 'shubhamvishwakarma2001@gmail.com ', '16:11:12 pm', '2017-02-06', NULL, 'sWh275pbOLNSrjAa', 0),
(50, 'Surya rao', 'Jagarapu', '16JE002416', 'qwerty', 'inventoid23@gmail.com', '20:18:44 pm', '2017-02-06', NULL, '8LryCBTQFd0I3cqA', 0),
(45, 'Aman', 'Gupta', '16JE002419', 'qwerty', 'ag597482@gmailcom', '18:52:21 pm', '2017-02-06', NULL, 'jGNQSWhbtO8IepFZ', 0),
(33, 'BISHAL ', 'SARKAR', '16JE002426', 'qwerty', 'bishalsarkar166@gmail.com', '14:36:52 pm', '2017-02-06', NULL, 'jwB1XOdurIPZ4QtK', 0),
(47, 'Mayank', 'Gupta', '16JE002428', 'qwerty', 'mayank.guptamayank.gupta81@gmail.com', '19:17:33 pm', '2017-02-06', NULL, '4aRwoD7NTVhBLlU8', 0),
(54, 'Aayush', 'Ahuja', '16JE002440', 'qwerty', 'aayu.16je002440@am.ism.ac.in', '20:36:54 pm', '2017-02-07', NULL, 'QRIlHLN8uw263AUJ', 0),
(46, 'MAYANK', 'VISHWAKARMA', '16JE002443', 'qwerty', 'mayanvishwa0101@gmail.com', '19:04:25 pm', '2017-02-06', NULL, 'ZoIJiFcAhC0ewBDS', 0),
(34, 'Prerak', 'Rawat', '16JE002465', 'qwerty', 'prerakrwt@gmail.com', '14:37:38 pm', '2017-02-06', NULL, 'r0VtKapXUqzYxR3v', 0),
(23, 'Amit', 'Singh', '16JE002470', 'qwerty', 'amitsingh97@gmail.com', '12:41:32 pm', '2017-02-06', NULL, 'dlNbwKX1G5YhJWkD', 0),
(42, 'Manan', 'Jhaveri', '16JE002475', 'qwerty', 'incrediblemanan@gmail.com', '16:05:42 pm', '2017-02-06', NULL, 'pzZfsbq4ENxRa2OA', 0),
(55, 'Harsh', 'Bhamore', '16JE002568', 'qwerty', 'harsh.bhamore@gmail.com', '22:06:44 pm', '2017-03-11', NULL, 'f5RPGoz8OI4irL6C', 0),
(31, 'Vipul', 'Kumar', '16JE002662', 'qwerty', 'vipulkumar.vkmj98@gmail.com', '14:18:43 pm', '2017-02-06', NULL, 'qTAfsJ7vFEjQauhl', 0),
(15, 'Sanu Singh ', 'Singh ', '16JE002890', 'qwerty', 'sanusingh2010@gmail.com', '22:30:26 pm', '2017-02-03', NULL, 'SJhob7FrHiUpvGA1', 0),
(19, 'Piyush', 'Kumar', '2016JE001996', 'qwerty', 'piyushkumar1920@yahoo.in', '10:30:49 am', '2017-02-06', NULL, 'GrdZRPkhBQUz3XKj', 0);

-- --------------------------------------------------------

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
