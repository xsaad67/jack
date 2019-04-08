-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 04:42 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anp`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `localtion` varchar(255) NOT NULL,
  `start_date` datetime NOT NULL,
  `delivery_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_date` date DEFAULT NULL,
  `nursery` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` text,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `start_date`, `end_date`, `nursery`, `phone`, `description`, `address`) VALUES
(1, 'Joan Coats', 'jc@gmail.com', '2019-04-08 02:06:07', NULL, 'Native shrubsR us', '2342342342', NULL, '58 Anvidale Street, Armidale NSW 2350'),
(2, 'Anna Zikov', 'az@gmail.com', '2019-04-08 02:06:07', NULL, 'Greenock Australian Native Nursery', '234234', NULL, '37 Greenock Road Greenock 5360 SA'),
(3, 'Tom Rodicko', 'tr@gmail.com', '2019-04-08 02:06:07', NULL, 'Margaret River Natives', '234234', NULL, '187 Wallcliffe Road Margaret River 6285 WA'),
(4, 'Gordon Frost', 'gf@gmail.com', '2019-04-08 02:06:07', NULL, 'Tasie Native Plants', '23424234', NULL, '423 Lilydale road Launceston 7250 Tas'),
(5, 'Adriana Codd', 'ac@gmail.com', '2019-04-08 02:06:07', NULL, 'Charnwood Natives', '234234234324', NULL, '20 Tilliard Drive Charnwood ACT 2615'),
(6, 'Beryl Anthony', 'ba@gmail.com', '2019-04-08 02:06:07', NULL, 'Territory Native Nursery', '234234324', NULL, '28 Larapinta Drive Alice Springs NT 0870');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `order_status` tinyint(1) NOT NULL,
  `shipping_date` date NOT NULL,
  `courier_name` varchar(255) NOT NULL,
  `shipping_reference` int(11) NOT NULL,
  `shipping_cost_multiplier` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_id` int(11) NOT NULL,
  `plant_id` int(11) NOT NULL,
  `plant_cost` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_cost` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE `plants` (
  `id` int(11) NOT NULL,
  `botanical_name` varchar(255) NOT NULL,
  `common_name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`id`, `botanical_name`, `common_name`, `description`) VALUES
(1, 'Acacia aneura', 'mulga', 'Native tree grows in every state'),
(2, 'Eucalyptus rhodantha', 'rose mallee', 'Native WA tree'),
(3, 'Goodenia ovata', 'hop goodenia', 'Native shrub grows in every state'),
(4, 'Tetratheca pilosa', 'pink-eyed susan', 'Native shrub grows in SA, NT, Tasand Vic'),
(5, 'Acacia brachybotrya', 'grey mulga', 'Native shrub grows in NT, SA and Vic'),
(6, 'Acacia brachybotrya', 'sand grevillea', 'Native shrub grows in NT and Qld'),
(7, 'Verticordia mitchelliana', 'rapier feather flower', 'Native shrub grows in WA'),
(8, 'Banksia repens', 'creeping banksia', 'Native shrub grows in WA'),
(9, 'Eucalyptus saligna', 'Sydney blue gum', 'Native tree grows in NSW ans Qld'),
(10, 'Verticordia plumosa', 'plumed feather flower', 'Native shrub grows in WA'),
(11, 'Tetratheca thymifolia', 'black-eyed susan', 'Native shrub grows in Qld, SA and Vic');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_muiltiplier`
--

CREATE TABLE `shipping_muiltiplier` (
  `anp_state` varchar(255) NOT NULL,
  `client_state` varchar(255) NOT NULL,
  `shipping_cost` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_muiltiplier`
--

INSERT INTO `shipping_muiltiplier` (`anp_state`, `client_state`, `shipping_cost`) VALUES
('NSW', 'NSW', '1.00'),
('NSW', 'QLD', '1.50'),
('NSW', 'NT', '1.90'),
('NSW', 'VIC', '1.20'),
('NSW', 'SA', '1.40'),
('NSW', 'ACT', '1.00'),
('NSW', 'WA', '2.40'),
('NSW', 'TAS', '2.00'),
('NSW', '', '1.50'),
('QLD', 'QLD', '1.00'),
('QLD', 'NT', '1.40'),
('QLD', 'VIC', '1.90'),
('QLD', 'SA', '1.80'),
('QLD', 'ACT', '1.50'),
('QLD', 'WA', '2.50'),
('QLD', 'TAS', '2.10'),
('NT', 'NT', '1.00'),
('NT', 'VIC', '2.20'),
('NT', 'SA', '1.20'),
('NT', 'ACT', '1.90'),
('NT', 'WA', '1.50'),
('NT', 'TAS', '2.50'),
('VIC', 'VIC', '1.00'),
('VIC', 'SA', '1.20'),
('VIC', 'ACT', '1.30'),
('VIC', 'WA', '2.20'),
('VIC', 'TAS', '1.30'),
('SA', 'SA', '1.00'),
('SA', 'ACT', '1.50'),
('SA', 'WA', '1.60'),
('SA', 'TAS', '2.10'),
('ACT', 'ACT', '1.00'),
('ACT', 'WA', '2.60'),
('ACT', 'TAS', '1.70'),
('WA', 'WA', '1.00'),
('WA', 'TAS', '2.40'),
('TAS', 'TAS', '1.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
