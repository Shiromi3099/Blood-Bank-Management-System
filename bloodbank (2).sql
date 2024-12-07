-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2024 at 08:54 AM
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
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodrequest`
--

CREATE TABLE `bloodrequest` (
  `id` int(11) NOT NULL,
  `donor_id` int(11) DEFAULT NULL,
  `recipient_id` int(11) DEFAULT NULL,
  `request_date` datetime DEFAULT current_timestamp(),
  `status` varchar(50) DEFAULT 'Pending',
  `t_date` datetime DEFAULT NULL,
  `t_location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bloodrequest`
--

INSERT INTO `bloodrequest` (`id`, `donor_id`, `recipient_id`, `request_date`, `status`, `t_date`, `t_location`) VALUES
(1, 4, 2, '2024-05-17 16:24:45', 'Accepted', '2024-05-29 00:00:00', 'At the hospital'),
(3, 1, 2, '2024-05-17 16:34:11', 'Accepted', NULL, NULL),
(5, 5, 6, '2024-05-17 20:48:41', 'Accepted', NULL, NULL),
(17, 5, 5, '2024-05-17 22:51:49', 'Pending', NULL, NULL),
(19, 1, 0, '2024-05-17 23:42:40', 'Pending', NULL, NULL),
(20, 4, 6, '2024-05-18 00:18:43', 'Pending', NULL, NULL),
(21, 3, 2, '2024-05-18 09:34:45', 'Pending', NULL, NULL),
(22, 7, 2, '2024-05-18 09:38:51', 'accepted', NULL, NULL),
(23, 3, 2, '2024-05-18 20:54:58', 'Pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `uid` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `bloodtype` varchar(10) DEFAULT NULL,
  `Mhistory` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`uid`, `age`, `bloodtype`, `Mhistory`) VALUES
(1, 25, 'A+', 'hypertention.and low bloodsugar'),
(3, 50, 'AB+', 'ssssssssssss'),
(4, 25, 'B+', 'ssssssssssss'),
(5, 45, 'AB+', 'yyhhhhhyyyyyyyyyyyhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(7, 28, 'A-', 'xxxxxxxxxxxxxxxxxx');

-- --------------------------------------------------------

--
-- Table structure for table `recipient`
--

CREATE TABLE `recipient` (
  `uid` int(11) DEFAULT NULL,
  `btype_required` varchar(10) DEFAULT NULL,
  `mcondition` text DEFAULT NULL,
  `srequirement` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipient`
--

INSERT INTO `recipient` (`uid`, `btype_required`, `mcondition`, `srequirement`) VALUES
(2, 'A+', 'gggggggggggg', 'gggggggggggg'),
(6, 'AB+', 'ffffffffffffffffffffffff', 'ffffffffffffffffffffffffff');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobno` varchar(15) DEFAULT NULL,
  `uname` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `cpassword` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `mobno`, `uname`, `password`, `cpassword`) VALUES
(1, 'kabuto', 'kabuto@gmail.com', '0715506234', 'kabuto30', '$2y$10$I5ydR4fDMtyDQg1T8yKHk.onbBKqzwQ4pPzekuS04WJT2KFdBSqJe', '$2y$10$mmpNPCtMisPnWFdGjdi2..PgR/NiokIsvWF4oEnfKanurVC3klrzS'),
(2, 'nagato', 'nagato@gmail.com', '0715506234', 'nagato25', '$2y$10$yemq0cOXCgZJfByg6QdR3uxGV1k0x6hOF/XnI8JsxmJIjloKt9or.', '$2y$10$AKIPBCjXCDC8tqkVb07dZudHEEPmqf5XTGRSEJN5y.9OhkeuwX3oy'),
(3, 'naruto', 'naruto@gmail.com', '0762942044', 'naruto96', '$2y$10$D2X5zMzMINeyS4yunm1bMuiill7feZPPTUKb7RYGxGyklcRsIpDV2', '$2y$10$oO58SJdypes/33kJcIWVSOES77hA64Mgt6UEkoWKs9h6GKzLb7fYe'),
(4, 'itachi', 'itachi@gmail.com', '0762942044', 'itachi85', '$2y$10$qEm3aL2.q40yL1ZZYuxKjuGpGqyXZ6kGGDRuehX/5uJdQMTbKF7Iq', '$2y$10$oCgiZCGi/g4UUDfXgWxuAeRtizf.ieQh5fvPmZ0LVbK7/lOjXFQOi'),
(5, 'rutu', 'itachi@gmail.com', '0762942044', 'rutu24', '$2y$10$7Nshluy3pfetGviSHiV21.gWkEimKWnARaikNrOfahoNt7g1t1EDC', '$2y$10$/jSe.3BHSq2hIQHsVHQq0O/kiWEKu2t7f//5Oc85ywHi2Z0rWOc5S'),
(6, 'dube', 'dube@gmail.com', '0715506234', 'dube5', '$2y$10$2/5FeHjVvxPQOlDn7khkXOUQOAbd0Kglay8VEzOLCD2ouAYOThiZW', '$2y$10$pWc0VF2sjlZlzEgnxYOvF.ZvzQxDenYYX4lOvPXQsjDmP91Zgwsga'),
(7, 'kurama', 'kurama@gmail.com', '0715506234', 'kurama20', '$2y$10$l19nymhzGZhAx.ctjHXaR.4kyAVkki5Unkl3E7kLE.PDqGJmNSMIG', '$2y$10$Ult58ppX.JT.vCi.NpF3suSevIs0k4qCY4R5/qtZgFQQukGBCC.O2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD KEY `donor_ibfk_1` (`uid`);

--
-- Indexes for table `recipient`
--
ALTER TABLE `recipient`
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `donor_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recipient`
--
ALTER TABLE `recipient`
  ADD CONSTRAINT `recipient_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
