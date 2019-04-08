-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 02:19 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

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

DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `shipping_calculator` (`member_state` VARCHAR(255), `client_state` VARCHAR(255), `plant_id` INT, `quantity` INT) RETURNS DECIMAL(10,2) BEGIN
    DECLARE `plant_cost` DECIMAL(10,2);
    DECLARE `shipping_cost` DECIMAL(10,2);
    DECLARE `shipping_multiplier` DECIMAL(10,2);
    DECLARE `total` DECIMAL(10,2);
    
    SELECT `price` * `quantity` INTO `plant_cost` from `plant_stock` where `plant_id`=`plant_id`;
    SELECT shipping_cost INTO `shipping_multiplier` from shipping_muiltiplier where anp_state = `member_state` AND client_state = `client_state`;
    SET `shipping_cost` = `shipping_muiltiplier` *`quantity` * (SELECT unit_shipping_cost FROM plant_stock where plant_id = `plant_id`);
    SET `total` = `shipping_cost` + `plant_cost`;
    RETURN `plant_cost`;
    END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `delivery_address` varchar(255) DEFAULT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `location`, `start_date`, `delivery_address`, `state`) VALUES
(1, 'Ole Windler Sr.', 'danyka.nader@fritsch.com', '634 Bernhard Center Apt. 728\nEast Geraldville, IL 00238, NSW', '1999-10-10', '634 Bernhard Center Apt. 728\nEast Geraldville, IL 00238, NSW', 'NSW'),
(2, 'Pascale Marks', 'dino.lueilwitz@gmail.com', '7128 Koelpin Street\nDaishahaven, AK 47290-6806, QLD', '1972-09-22', '7128 Koelpin Street\nDaishahaven, AK 47290-6806, QLD', 'QLD'),
(3, 'Jefferey Kutch Jr.', 'durgan.major@yahoo.com', '24120 Gerson Radial Suite 045\nMaggiofurt, VA 14787, NT', '1974-06-16', '24120 Gerson Radial Suite 045\nMaggiofurt, VA 14787, NT', 'NT'),
(4, 'Mr. Afton Dooley DVM', 'mylene.harvey@hotmail.com', '450 Stehr Stream\nNorth Idella, ME 97902, VIC', '2006-08-22', '450 Stehr Stream\nNorth Idella, ME 97902, VIC', 'VIC'),
(5, 'Janie Bahringer II', 'altenwerth.noe@treutel.com', '67649 Jada Mission Apt. 025\nSouth Bernardotown, NC 98564-0344, SA', '2018-04-04', '67649 Jada Mission Apt. 025\nSouth Bernardotown, NC 98564-0344, SA', 'SA'),
(6, 'Dannie Gerhold DVM', 'hane.retha@yahoo.com', '6485 Madisen Forges Apt. 258\nWest Quincymouth, TX 45166-0728, ACT', '1972-12-11', '6485 Madisen Forges Apt. 258\nWest Quincymouth, TX 45166-0728, ACT', 'ACT'),
(7, 'Aurore Oberbrunner', 'wunsch.schuyler@gmail.com', '4667 Kerluke Inlet Apt. 162\nJermeyside, VA 82389-8156, WA', '1984-04-17', '4667 Kerluke Inlet Apt. 162\nJermeyside, VA 82389-8156, WA', 'WA'),
(8, 'Prof. Sadye Skiles', 'domingo80@larkin.com', '5626 Bonita Roads Apt. 060\nMartinaport, AZ 58915-8418, TAS', '1971-03-11', '5626 Bonita Roads Apt. 060\nMartinaport, AZ 58915-8418, TAS', 'TAS'),
(9, 'Wiley Swift Sr.', 'isai43@yahoo.com', '164 Aron Curve\nMiltonview, AK 35842-8369, NSW', '2009-12-24', '164 Aron Curve\nMiltonview, AK 35842-8369, NSW', 'NSW'),
(10, 'Calista Schamberger', 'russel.jaida@jerde.com', '48700 Haylie Knolls\nMyraburgh, NV 36015, QLD', '1981-07-12', '48700 Haylie Knolls\nMyraburgh, NV 36015, QLD', 'QLD'),
(11, 'Miss Pearl Vandervort I', 'iheller@yahoo.com', '84063 Cleo Street Suite 309\nSouth Rhoda, WY 16160-5345, NT', '1987-09-02', '84063 Cleo Street Suite 309\nSouth Rhoda, WY 16160-5345, NT', 'NT'),
(12, 'Dr. Dante Nolan DVM', 'tiara22@yahoo.com', '9468 Ibrahim Mill\nWest Adrienstad, AL 16167, VIC', '1996-10-19', '9468 Ibrahim Mill\nWest Adrienstad, AL 16167, VIC', 'VIC'),
(13, 'Lilla Stokes', 'alysson.kihn@gmail.com', '701 Adams Pine\nNew Mina, UT 21160, SA', '1975-11-28', '701 Adams Pine\nNew Mina, UT 21160, SA', 'SA'),
(14, 'Weldon Ebert', 'schneider.micheal@yahoo.com', '4826 Cronin Well\nChristopherport, NV 17157, ACT', '1980-04-17', '4826 Cronin Well\nChristopherport, NV 17157, ACT', 'ACT'),
(15, 'Alvis Herzog MD', 'cwaelchi@hotmail.com', '2276 Thiel Dam\nEast Elisafurt, WA 75990-7113, WA', '1979-10-20', '2276 Thiel Dam\nEast Elisafurt, WA 75990-7113, WA', 'WA'),
(16, 'Prof. Brielle Maggio', 'aframi@hotmail.com', '3073 Langworth Ford\nDevenmouth, MS 43645, TAS', '1987-09-26', '3073 Langworth Ford\nDevenmouth, MS 43645, TAS', 'TAS');

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
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `start_date`, `end_date`, `nursery`, `phone`, `description`, `address`, `state`) VALUES
(1, 'Joan Coats', 'jc@gmail.com', '2019-04-08 02:06:07', '2019-04-12', 'Native shrubsR us', '2342342342', NULL, '58 Anvidale Street, Armidale NSW 2350', 'NSW'),
(2, 'Anna Zikov', 'az@gmail.com', '2019-04-08 02:06:07', '2019-04-26', 'Greenock Australian Native Nursery', '234234', NULL, '37 Greenock Road Greenock 5360 SA', 'SA'),
(3, 'Tom Rodicko', 'tr@gmail.com', '2019-04-08 02:06:07', '2019-04-27', 'Margaret River Natives', '234234', NULL, '187 Wallcliffe Road Margaret River 6285 WA', 'WA'),
(4, 'Gordon Frost', 'gf@gmail.com', '2019-04-08 02:06:07', '2019-04-30', 'Tasie Native Plants', '23424234', NULL, '423 Lilydale road Launceston 7250 Tas', 'TAS'),
(5, 'Adriana Codd', 'ac@gmail.com', '2019-04-08 02:06:07', '2019-04-26', 'Charnwood Natives', '234234234324', NULL, '20 Tilliard Drive Charnwood ACT 2615', 'ACT'),
(6, 'Beryl Anthony', 'ba@gmail.com', '2019-04-08 02:06:07', '2019-04-25', 'Territory Native Nursery', '234234324', NULL, '28 Larapinta Drive Alice Springs NT 0870', 'NT');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `client_id` int(11) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `member_id`, `created_at`, `client_id`, `body`) VALUES
(1, 1, '2019-04-08 06:21:50', 1, 'Order Created'),
(2, 6, '2019-04-08 08:44:30', 4, 'Order Created'),
(3, 3, '2019-04-08 08:44:31', 3, 'Order Created'),
(4, 6, '2019-04-08 08:44:31', 10, 'Order Created'),
(5, 2, '2019-04-08 08:44:31', 11, 'Order Created'),
(6, 3, '2019-04-08 08:44:32', 10, 'Order Created'),
(7, 3, '2019-04-08 08:44:32', 13, 'Order Created'),
(8, 2, '2019-04-08 08:44:32', 3, 'Order Created'),
(9, 5, '2019-04-08 08:44:32', 10, 'Order Created'),
(10, 5, '2019-04-08 08:44:32', 12, 'Order Created'),
(11, 3, '2019-04-08 08:44:32', 2, 'Order Created');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `order_status` tinyint(1) NOT NULL,
  `shipping_date` date NOT NULL,
  `courier_name` varchar(255) NOT NULL,
  `shipping_reference` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `client_id`, `member_id`, `order_status`, `shipping_date`, `courier_name`, `shipping_reference`) VALUES
(1, 1, 1, 1, '2019-04-18', 'BlueShip', 23),
(2, 4, 6, 1, '2017-09-16', 'Corwin LLC', 9),
(3, 3, 3, 1, '2002-09-26', 'McClure, Kozey and Will', 11),
(4, 10, 6, 1, '1973-10-02', 'Veum-Lynch', 2),
(5, 11, 2, 1, '2010-09-07', 'Kassulke Inc', 8),
(6, 10, 3, 1, '1983-10-15', 'Von, Jast and D\'Amore', 5),
(7, 13, 3, 1, '1997-08-12', 'Gorczany Inc', 7),
(8, 3, 2, 1, '1980-05-28', 'Weimann, Auer and Purdy', 5),
(9, 10, 5, 1, '1971-10-06', 'Hagenes and Sons', 9),
(10, 12, 5, 1, '1977-01-09', 'Grant, Douglas and Mraz', 9),
(11, 2, 3, 1, '1991-07-25', 'Waelchi-Vandervort', 8);

--
-- Triggers `orders`
--
DELIMITER $$
CREATE TRIGGER `insert_message_after_new_order` AFTER INSERT ON `orders` FOR EACH ROW INSERT INTO messages (member_id, client_id, body)
  VALUES (NEW.member_id, NEW.client_id,'Order Created')
$$
DELIMITER ;

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

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_id`, `plant_id`, `plant_cost`, `quantity`, `unit_cost`) VALUES
(1, 1, '18.00', 2, '23.00'),
(1, 1, '18.00', 2, '23.00');

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
-- Table structure for table `plant_stock`
--

CREATE TABLE `plant_stock` (
  `member_id` int(11) NOT NULL,
  `plant_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `price_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `unit_shipping_cost` decimal(10,2) NOT NULL,
  `in_stock` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plant_stock`
--

INSERT INTO `plant_stock` (`member_id`, `plant_id`, `price`, `price_date`, `unit_shipping_cost`, `in_stock`) VALUES
(6, 7, '12.80', '2019-04-08 07:18:59', '5.10', 1),
(4, 10, '21.20', '2019-04-08 07:18:59', '3.50', 1),
(1, 11, '28.50', '2019-04-08 08:44:06', '9.10', 1);

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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
