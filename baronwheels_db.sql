-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2021 at 02:09 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baronwheels_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cardinfo`
--

CREATE TABLE `cardinfo` (
  `id` int(11) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardnumber` varchar(255) NOT NULL,
  `expirydate` varchar(255) NOT NULL,
  `cvc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cardinfo`
--

INSERT INTO `cardinfo` (`id`, `cardname`, `cardnumber`, `expirydate`, `cvc`) VALUES
(21, 'Sahej', '8324943894894849', '26/01', '233');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'Hello', 'Hello! How can I help you today?'),
(2, 'i need a refund', 'Sure! On what Item do you want a refund?'),
(3, 'my bottles came broken', 'We are really sorry, please send a photo evidence to support@baronwheels.com and we will issue you a 100% refund on the defective items or send you a replacement.'),
(4, 'how do you look?', 'I look better than you can ever be!'),
(5, 'thank you', 'You\'re welcome! Have a great day! :)'),
(6, 'are there any discounts?', 'Yes, you can find many discounts on our website. Go to the Homepage to check for discounts.'),
(7, 'my card was charged without my knowledge', 'We\'re sorry to hear that! Please send us the card number, the security code & the expiration date so we can refund the amount.'),
(8, 'i love you', 'Sure, you can be one of my mistresses'),
(9, 'my delivery guy was rude', 'We\'re sorry to hear that! Please provide the order number and we\'ll further investigate and get back to you!  '),
(10, 'My alcohol was delivered unsealed ', 'We apologize! Please provide photo evidence and we will look into it.'),
(11, 'I need to cancel my membership', 'Why would you go to the dark side?'),
(12, 'I need to change my payment method ', 'Sure! Go to your User Profile > Payment Method.'),
(13, 'how can I work with mafia', 'Contact Yoda or Don Bierman.'),
(14, 'I need to return my order', 'Sure! Go to your User Profile >  Orders > Return.'),
(15, 'Are there any Christmas sale going on', 'Visit our Homepage, we post our latest deals there.'),
(16, 'Do you provide military or veteran discount', 'Sure! A lot of our gang members are Ex-military, so you will get 50% Off!');

-- --------------------------------------------------------

--
-- Table structure for table `checkoutdelivery`
--

CREATE TABLE `checkoutdelivery` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `instructions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkoutdelivery`
--

INSERT INTO `checkoutdelivery` (`id`, `fname`, `lname`, `email`, `phone`, `address`, `city`, `state`, `zipcode`, `instructions`) VALUES
(23, '', '', '', '', '', '', '', '', ''),
(24, 'Sahej', 'Tuli', 'sahej@gmail.com', '9999999999', '100 Chutiya Boulevard', 'SF', 'CA', '94132-2559', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`id`, `user`, `email`, `message`) VALUES
(57, 'fsdfdgd', 'sss@gma.ic', 'fiwerewfe'),
(58, 'Sahej', 'stuli@mail.sfsu.edu', 'Hello'),
(59, 'Sahej Tuli', 'sahejtuli071101@gmail.com', 's');

-- --------------------------------------------------------

--
-- Table structure for table `subscribeform`
--

CREATE TABLE `subscribeform` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(3, 'Sahej Tuli', 'sahejtuli071101@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'sahej', 'sahej@gmail.com', 'abcdef'),
(5, 'sahej', 'sahejtuli@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cardinfo`
--
ALTER TABLE `cardinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkoutdelivery`
--
ALTER TABLE `checkoutdelivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribeform`
--
ALTER TABLE `subscribeform`
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
-- AUTO_INCREMENT for table `cardinfo`
--
ALTER TABLE `cardinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `checkoutdelivery`
--
ALTER TABLE `checkoutdelivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `subscribeform`
--
ALTER TABLE `subscribeform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
