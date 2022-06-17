-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 17, 2022 at 03:12 PM
-- Server version: 5.7.26
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(250) NOT NULL,
  `status` tinyint(2) NOT NULL COMMENT '1 = active product, 2 = inactive product',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `title`, `description`, `price`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Product 1', 'This is product one description', 100, '', 1, '2022-06-01 00:00:00', '2022-05-31 18:30:00'),
(2, NULL, 'Product 2', 'This is prduct two description', NULL, '', 1, '2022-06-02 00:00:00', '2022-06-01 18:30:00'),
(3, 3, 'Product 3', 'This is prduct three description', 100, '', 1, '2022-06-03 00:00:00', '2022-06-03 18:30:00'),
(4, 2, 'Product 3', 'This is prduct three description', 200, '', 1, '2022-06-04 00:00:00', '2022-06-04 18:30:00'),
(5, 3, 'Iphone', 'This is Iphone product description', 50, '', 2, '2022-06-10 00:00:00', '2022-06-10 18:30:00'),
(6, 2, 'Nokia Product', 'This is Nokia Product description', 300, '', 1, '2022-06-10 00:00:00', '2022-06-10 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(125) NOT NULL,
  `last_name` varchar(125) NOT NULL,
  `email` varchar(250) NOT NULL,
  `status` tinyint(2) NOT NULL COMMENT '1 = active user, 2 = inactive user',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL,
  `is_user_verified` tinyint(2) DEFAULT NULL COMMENT '1= verified, 2 = not verified or rejected',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `status`, `created_at`, `updated_at`, `is_user_verified`) VALUES
(1, 'john', 'deo', 'johndeo@mailinator.com', 1, '2022-06-15 00:00:00', '2022-06-16 18:30:00', 1),
(2, 'peter', 'deo', 'peter@mailinator.com', 1, '2022-06-16 00:00:00', '2022-06-16 18:30:00', 1),
(3, 'steave', 'test', 'steave@mailinator.com', 2, '2022-06-09 00:00:00', '2022-06-17 18:30:00', 1),
(4, 'leonard', 'test', 'leonard@mailinator.com', 1, '2022-06-16 00:00:00', '2022-06-16 18:30:00', 2),
(5, 'steave', 'test', 'steave@mailinator.com', 2, '2022-06-09 00:00:00', '2022-06-17 18:30:00', 2),
(6, 'leonard', 'test', 'leonard@mailinator.com', 1, '2022-06-16 00:00:00', '2022-06-16 18:30:00', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
