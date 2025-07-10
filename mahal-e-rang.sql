-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2025 at 09:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahal-e-rang`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `Room_name` varchar(200) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `adults` int(11) DEFAULT NULL,
  `children` int(11) DEFAULT NULL,
  `guest_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `pickup_location` varchar(100) DEFAULT NULL,
  `pickup_cost` int(11) DEFAULT NULL,
  `additional_note` text DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `room_id`, `Room_name`, `price`, `check_in`, `check_out`, `adults`, `children`, `guest_name`, `email`, `phone`, `pickup_location`, `pickup_cost`, `additional_note`, `total_price`, `created_at`) VALUES
(1, 1, 'Standard Room 1', 4500, '2025-05-14', '2025-05-15', 1, 1, 'shoaib khan', 'shoaibkhan1447026@gmail.com', '03181447026', 'Orangi Town', 1600, '', 6100, '2025-05-13 05:41:09'),
(2, 5, 'Executive Room 1', 7000, '2025-05-14', '2025-05-16', 3, 2, 'Ali', 'ali@gmail.com', '0318145446632', 'Jinnah International Airport', 1200, '', 8200, '2025-05-13 05:53:39'),
(3, 2, 'Deluxe Room 1', 5000, '2025-05-15', '2025-05-16', 2, 1, 'shoaib khan', 'shoaibkhan1447026@gmail.com', '03181447026', 'Malir Halt', 1800, '', 6800, '2025-05-13 05:59:44'),
(4, 1, 'Standard Room 1', 4500, '2025-05-21', '2025-05-23', 1, 1, 'shoaib khan', 'shoaibkhan1447026@gmail.com', '03181447026', 'Saddar Bus Stand', 1000, '', 5500, '2025-05-13 06:05:27'),
(5, 1, 'Standard Room 1', 4500, '2025-05-21', '2025-05-23', 1, 1, 'shoaib khan', 'ahsan@gmail.com', '03172815136', 'Nazimabad No.1', 1900, '', 6400, '2025-05-13 06:10:30'),
(6, 1, 'Standard Room 1', 4500, '2025-05-21', '2025-05-23', 1, 1, 'shoaib khan', 'ahsan@gmail.com', '03181447026', 'Nazimabad No.1', 1900, '', 6400, '2025-05-13 06:11:12'),
(7, 1, 'Standard Room 1', 4500, '2025-05-21', '2025-05-23', 1, 1, 'shoaib khan', 'ahsan@gmail.com', '03181447026', 'Nazimabad No.1', 1900, '', 6400, '2025-05-13 06:12:08'),
(8, 1, 'Standard Room 1', 4500, '2025-05-21', '2025-05-23', 1, 1, 'shoaib khan', 'ahsan@gmail.com', '03181447026', 'Nazimabad No.1', 1900, '', 6400, '2025-05-13 06:15:00'),
(9, 34, 'Standard Room 10', 6500, '2025-05-15', '2025-05-17', 1, 2, 'Wilson', 'wilsonbhatti321@gmail.com', '03181447026', 'Jinnah International Airport', 1200, '', 7700, '2025-05-13 06:30:32'),
(10, 7, 'Deluxe Room 3', 7500, '2025-05-15', '2025-05-17', 3, 2, 'shoaib khan', 'shoaibkhan1447026@gmail.com', '03181447026', 'Jinnah International Airport', 1200, '', 8700, '2025-05-13 06:33:58'),
(11, 9, 'Royal Suit 1', 10000, '2025-05-14', '2025-05-16', 4, 3, 'Shareef Khoso', 'shareefkhoso08@gmail.com', '03181447026', 'Jinnah International Airport', 1200, '', 11200, '2025-05-13 06:36:48'),
(12, 8, 'Executive Room 2', 8000, '2025-05-14', '2025-05-18', 3, 3, 'Kinza Khan ', 'kinzashaheen4642@gmail.com', '03181447026', 'Saddar Bus Stand', 1000, '', 9000, '2025-05-13 06:40:53'),
(13, 2, 'Deluxe Room 1', 5000, '2025-05-16', '2025-05-17', 2, 1, 'Tooba Khurram', 'khurramtooba5@gmail.com', '03181447026', 'Jinnah International Airport', 1200, '', 6200, '2025-05-13 06:46:07'),
(14, 9, 'Royal Suit 1', 10000, '2025-05-20', '2025-05-26', 4, 3, 'Shareef Khoso', 'shareefkhoso08@gmail.com', '03181447026', 'Cantt Railway Station', 1500, '', 11500, '2025-05-13 06:52:43'),
(15, 5, 'Executive Room 1', 7000, '2025-05-21', '2025-05-24', 3, 2, 'shoaib khan', 'shoaibkhan1447026@gmail.com', '03181447026', 'Korangi Crossing', 1800, '', 8800, '2025-05-13 08:19:11'),
(16, 3, 'Deluxe Room 2', 6000, '2025-05-14', '2025-05-17', 3, 1, 'shoaib khan', 'shoaibkhan1447026@gmail.com', '03181447026', 'Jinnah International Airport', 1200, '', 7200, '2025-05-13 10:00:11'),
(17, 21, 'Executive Room 3', 8500, '2025-05-15', '2025-05-20', 2, 2, 'shoaib khan', 'shoaibkhan1447026@gmail.com', '03181447026', 'Saddar Bus Stand', 1000, 'we need extra bed \r\n', 43500, '2025-05-13 10:26:12'),
(18, 21, 'Executive Room 3', 8500, '2025-05-14', '2025-05-15', 2, 2, 'shoaib khan', 'shoaibkhan1447026@gmail.com', '03181447026', 'Landhi 89', 2000, '', 10500, '2025-05-13 10:28:22'),
(19, 38, 'Deluxe Room 10', 8500, '2025-05-16', '2025-05-19', 3, 1, 'shoaib khan', 'shoaibkhan1447026@gmail.com', '03181447026', 'Jinnah International Airport', 1200, '', 26700, '2025-05-13 16:15:26'),
(20, 21, 'Executive Room 3', 8500, '2025-05-29', '2025-05-31', 2, 2, 'shoaib khan', 'shoaibkhan1447026@gmail.com', '03181447026', 'Jinnah International Airport', 1200, '', 18200, '2025-05-13 17:20:08'),
(21, 22, 'Executive Room 4', 8000, '2025-05-29', '2025-05-31', 2, 1, 'test', 'ahsan@gmail.com', '03172815136', 'Nazimabad No.1', 1900, '', 17900, '2025-05-13 17:22:40'),
(22, 17, 'Deluxe Room 5', 5500, '2025-05-15', '2025-05-17', 2, 1, 'Kinza', 'shoaibkhan1447026@gmail.com', '03181447026', 'Malir Halt', 1800, '', 12800, '2025-05-14 10:27:02');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `roomName` varchar(100) NOT NULL,
  `roomCategory` varchar(50) NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) DEFAULT 0,
  `capacity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `facilities` text NOT NULL,
  `size` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `image_2` varchar(255) DEFAULT NULL,
  `image_3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `roomName`, `roomCategory`, `adults`, `children`, `capacity`, `price`, `facilities`, `size`, `image`, `created_at`, `image_2`, `image_3`) VALUES
(1, 'Standard Room 1', 'standard', 1, 1, 2, 4500.00, 'wifi,fan,ac\r\n', 120, 'uploads/s5.jpg', '2025-05-06 06:44:26', 'uploads/bath.jp', 'uploads/window.jpg'),
(2, 'Deluxe Room 1', 'deluxe', 2, 1, 3, 5000.00, 'wifi,fan,ac,tv', 160, 'uploads/s9.jpg', '2025-05-06 06:47:26', 'uploads/bath.jpg', 'uploads/sofa.jpg'),
(3, 'Deluxe Room 2', 'deluxe', 3, 1, 4, 6000.00, 'wifi,fan,ac,tv', 170, 'uploads/s10.jpg', '2025-05-06 06:48:33', 'uploads/sofa.jpg', 'uploads/window.jpg'),
(4, 'Standard Room 2', 'standard', 1, 0, 1, 3000.00, 'wifi,fan,ac', 120, 'uploads/s1.jpg', '2025-05-06 06:50:03', 'uploads/window.jpg', 'uploads/bath.jpg'),
(5, 'Executive Room 1', 'executive', 3, 2, 5, 7000.00, 'wifi,fan,tv,ac,bed,', 200, 'uploads/c1.jpg', '2025-05-06 06:53:12', 'uploads/bath.jpg', 'uploads/sofa.jpg'),
(6, 'Standard Room 3', 'standard', 2, 1, 3, 5000.00, 'wifi,ac,tv', 120, 'uploads/s2.jpg', '2025-05-06 06:54:43', 'uploads/sofa.jpg', 'uploads/window.jpg'),
(7, 'Deluxe Room 3', 'deluxe', 3, 2, 5, 7500.00, 'wifi,fan,ac,tv,chair\r\n', 220, 'uploads/c2.jpg', '2025-05-06 06:56:00', 'uploads/window.jpg', 'uploads/bath.jpg\r\n'),
(8, 'Executive Room 2', 'executive', 3, 3, 6, 8000.00, 'wifi,fan,ac,tv,chair,tea\r\n', 240, 'uploads/c4.jpg', '2025-05-06 06:57:12', 'uploads/bath.jpg\r\n', 'uploads/sofa.jpg'),
(9, 'Royal Suit 1', 'royal_suite', 4, 3, 7, 10000.00, 'wifi,fan,ac,tv,roomservice,fridge \r\n', 250, 'uploads/c3.jpg', '2025-05-06 06:59:18', 'uploads/sofa.jpg', 'uploads/window.jpg'),
(10, 'Standard Room 4', 'standard', 1, 0, 1, 3000.00, 'wifi,fan,ac', 100, 'uploads/s3.jpg', '2025-05-06 07:00:50', 'uploads/window.jpg', 'uploads/bath.jpg'),
(11, 'Standard Room 5', 'standard', 1, 1, 2, 4000.00, 'wifi,fan,ac', 120, 'uploads/s6.jpg', '2025-05-06 07:01:35', 'uploads/bath.jpg', 'uploads/sofa.jpg'),
(12, 'Royal Suit 2', 'royal_suite', 3, 3, 6, 9900.00, 'wifi,fan,ac,tv,roomservice,fridge', 230, 'uploads/c6.jpg', '2025-05-06 07:03:02', 'uploads/sofa.jpg', 'uploads/window.jpg'),
(13, 'Standard Room 6', 'standard', 2, 1, 3, 4200.00, 'wifi,fan,ac,tv', 130, 'uploads/s7.jpg', '2025-05-06 07:04:17', 'uploads/window.jpg', 'uploads/bath.jpg'),
(14, 'Standard Room 7', 'standard', 1, 1, 2, 3800.00, 'wifi,fan,ac,', 120, 'uploads/s8.jpg', '2025-05-06 07:04:56', 'uploads/bath.jpg', 'uploads/sofa.jpg'),
(15, 'Standard Room 8', 'standard', 1, 0, 1, 350.00, 'wifi,fan,ac,tv', 120, 'uploads/s11.jpg', '2025-05-06 07:05:35', 'uploads/sofa.jpg', 'uploads/window.jpg'),
(16, 'Deluxe Room 4', 'deluxe', 1, 1, 2, 5000.00, 'wifi,fan,ac,tv,tea', 160, 'uploads/c10.jpg', '2025-05-06 07:07:18', 'uploads/window.jpg', 'uploads/bath.jpg\r\n'),
(17, 'Deluxe Room 5', 'deluxe', 2, 1, 3, 5500.00, 'wifi,fan,ac,tv,tea', 145, 'uploads/c11.jpg', '2025-05-06 07:08:44', 'uploads/bath.jpg\r\n', 'uploads/window.jpg'),
(18, 'Royal Suit 3', 'royal_suite', 3, 2, 5, 11000.00, 'wifi,fan,ac,tv,tea,fridge,roomservice', 265, 'uploads/f2.png', '2025-05-06 07:10:18', 'uploads/window.jpg', 'uploads/sofa.jpg'),
(19, 'Royal Suit 4', 'royal_suite', 2, 2, 4, 12000.00, 'wifi,fan,ac,tv,tea,fridge,roomservice', 250, 'uploads/f3.png', '2025-05-06 07:11:21', 'uploads/sofa.jpg', 'uploads/bath.jpg'),
(20, 'Deluxe Room 6', 'deluxe', 1, 1, 2, 9000.00, 'wifi,fan,ac,tv,tea,fridge,roomservice', 240, 'uploads/c8.jpg', '2025-05-06 07:13:06', 'uploads/bath.jpg', 'uploads/bath.jpg'),
(21, 'Executive Room 3', 'executive', 2, 2, 4, 8500.00, 'wifi,fan,ac,tv,tea,roomservice', 220, 'uploads/c7.jpg', '2025-05-06 07:15:07', 'uploads/bath.jpg', 'uploads/window.jpg'),
(22, 'Executive Room 4', 'executive', 2, 1, 3, 8000.00, 'wifi,fan,ac,tv,tea', 210, 'uploads/s12.jpg', '2025-05-06 07:16:28', 'uploads/window.jpg', 'uploads/sofa.jpg'),
(23, 'Royal Suit 5', 'royal_suite', 5, 3, 8, 14000.00, 'wifi,fan,ac,tv,tea,fridge,sofa,wardrobe,roomservice', 280, 'uploads/f1.png', '2025-05-06 07:18:47', 'uploads/sofa.jpg', 'uploads/window.jpg'),
(24, 'Royal Suit 6', 'royal_suite', 3, 1, 4, 10000.00, 'wifi,fan,ac,tv,tea,fridge,sofa,wardrobe,roomservice', 220, 'uploads/f4.jpg', '2025-05-06 07:20:15', 'uploads/window.jpg', 'uploads/bath.jpg'),
(25, 'Royal Suit 7', 'royal_suite', 3, 2, 5, 12000.00, 'wifi,fan,ac,tv,tea,fridge,sofa,wardrobe,roomservice', 220, 'uploads/f5.jpg', '2025-05-06 07:21:12', 'uploads/bath.jpg', 'uploads/window.jpg'),
(26, 'Executive Room 5', 'executive', 4, 3, 7, 12000.00, 'wifi,fan,ac,tv,tea,fridge,sofa,wardrobe', 260, 'uploads/f6.jpg', '2025-05-06 07:22:50', 'uploads/window.jpg', 'uploads/bath.jpg'),
(27, 'Executive Room 6', 'executive', 2, 1, 3, 9000.00, 'wifi,fan,ac,tv,tea,fridge,sofa', 220, 'uploads/f8.jpg', '2025-05-06 07:24:27', 'uploads/bath.jpg', 'uploads/window.jpg'),
(28, 'Royal Suit 8', 'royal_suite', 3, 2, 5, 13500.00, 'wifi,fan,ac,tv,tea,fridge,sofa,wardrobe,Workdesk,laundry', 260, 'uploads/f7.jpg', '2025-05-06 07:27:01', 'uploads/window.jpg', 'uploads/sofa.jpg'),
(29, 'Royal Suit 9', 'royal_suite', 2, 2, 4, 12000.00, 'wifi,fan,ac,tv,tea,fridge,sofa,wardrobe,Workdesk\r\n', 200, 'uploads/f10.jpg', '2025-05-06 07:28:52', 'uploads/sofa.jpg', 'uploads/bath.jpg'),
(30, 'Executive Room 7', 'executive', 2, 1, 3, 13000.00, 'wifi,fan,ac,tv,tea,fridge,sofa,wardrobe,Workdesk\r\n', 240, 'uploads/f12.jpg', '2025-05-06 07:30:02', 'uploads/bath.jpg', 'uploads/sofa.jpg'),
(31, 'Executive Room 8', 'executive', 3, 2, 5, 12500.00, 'wifi,fan,ac,tv,tea,fridge,sofa,wardrobe,laundry\r\n', 250, 'uploads/f9.jpg', '2025-05-06 07:31:49', 'uploads/sofa.jpg', 'uploads/window.jpg'),
(32, 'Deluxe Room 8', 'deluxe', 2, 1, 3, 11000.00, 'wifi,fan,ac,tv,tea,fridge,sofa,wardrobe,Workdesk,laundry\r\n', 270, 'uploads/f11.jpg', '2025-05-06 07:33:18', 'uploads/window.jpg', 'uploads/sofa.jpg'),
(33, 'Standard Room 9', 'standard', 2, 0, 2, 6000.00, 'wifi,fan,ac\r\n', 110, 'uploads/s12.jpg', '2025-05-09 12:42:44', 'uploads/bath.jpg', 'uploads/window.jpg'),
(34, 'Standard Room 10', 'standard', 1, 2, 3, 6500.00, 'wifi,fan,ac\r\n', 120, 'uploads/s13.jpg', '2025-05-09 12:43:46', 'uploads/window.jpg', 'uploads/bath.jpg'),
(35, 'Standard Room 11', 'standard', 1, 0, 1, 5000.00, 'wifi,fan,ac\r\n', 100, 'uploads/s14.jpg', '2025-05-09 12:44:30', 'uploads/bath.jpg', 'uploads/window.jpg'),
(36, 'Standard Room 12', 'standard', 2, 0, 2, 6200.00, 'wifi,fan,ac\r\n', 120, 'uploads/s15.jpg', '2025-05-09 12:44:56', 'uploads/window.jpg', 'uploads/sofa.jpg'),
(37, 'Deluxe Room 9', 'deluxe', 2, 0, 2, 6200.00, 'wifi,fan,ac,chair\r\n', 120, 'uploads/d9.jpg', '2025-05-09 13:25:47', 'uploads/sofa.jpg', 'uploads/bath.jpg'),
(38, 'Deluxe Room 10', 'deluxe', 3, 1, 4, 8500.00, 'wifi,fan,ac,chair\r\n', 150, 'uploads/d10.jpg', '2025-05-09 13:26:09', 'uploads/bath.jpg', 'uploads/window.jpg'),
(39, 'Deluxe Room 11', 'deluxe', 1, 1, 2, 5000.00, 'wifi,fan,ac,\r\n', 120, 'uploads/d11.jpg', '2025-05-09 13:26:36', 'uploads/window.jpg', 'uploads/bath.jpg'),
(40, 'Deluxe Room 12', 'deluxe', 2, 1, 3, 6000.00, 'wifi,fan,ac', 120, 'uploads/d12.jpg', '2025-05-09 13:26:57', 'uploads/bath.jpg', 'uploads/sofa.jpg'),
(41, 'Executive Room 9', 'executive', 2, 1, 3, 9000.00, 'wifi,fan,ac,tv,tea,fridge,sofa,wardrobe,laundry', 160, 'uploads/ex9.jpg', '2025-05-09 13:30:58', 'uploads/sofa.jpg', 'uploads/window.jpg'),
(42, 'Executive Room 10', 'executive', 1, 1, 2, 9500.00, 'wifi,fan,ac,tv,tea,fridge,sofa,wardrobe,laundry', 160, 'uploads/ex10.jpg', '2025-05-09 13:31:16', 'uploads/window.jpg', 'uploads/bath.jpg'),
(43, 'Executive Room 11', 'executive', 2, 0, 2, 9500.00, 'wifi,fan,ac,tv,tea,fridge,sofa,wardrobe,laundry', 160, 'uploads/ex11.jpg', '2025-05-09 13:31:41', 'uploads/bath.jpg', 'uploads/window.jpg'),
(44, 'Executive Room 12', 'executive', 3, 1, 4, 10500.00, 'wifi,fan,ac,tv,tea,fridge,sofa,wardrobe,laundry', 180, 'uploads/ex12.jpg', '2025-05-09 13:32:03', 'uploads/window.jpg', 'uploads/sofa.jpg'),
(45, 'Royal Suit 10', 'royal_suite', 3, 1, 4, 11500.00, 'wifi,fan,ac,tv,tea,fridge,sofa,wardrobe,Workdesk,laundry', 190, 'uploads/r10.jpg', '2025-05-09 13:35:37', 'uploads/sofa.jpg', 'uploads/bath.jpg'),
(46, 'Royal Suit 11', 'royal_suite', 2, 1, 3, 11000.00, 'wifi,fan,ac,tv,tea,fridge,sofa,wardrobe,Workdesk', 180, 'uploads/r11.jpg', '2025-05-09 13:36:03', 'uploads/window.jpg', 'uploads/bath.jpg'),
(47, 'Royal Suit 12', 'royal_suite', 2, 0, 2, 12000.00, 'wifi,fan,ac,tv,tea,fridge,sofa,wardrobe,Workdesk,laundry', 190, 'uploads/r12.jpg', '2025-05-09 13:36:28', 'uploads/bath.jpg', 'uploads/window.jpg'),
(48, 'Royal Suit 13', 'royal_suite', 1, 1, 2, 13000.00, 'wifi,fan,ac,tv,tea,fridge,sofa,wardrobe,Workdesk,laundry', 200, 'uploads/r13.jpg', '2025-05-09 13:36:57', 'uploads/window.jpg', 'uploads/sofa.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
