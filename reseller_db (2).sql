-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 17, 2021 at 02:42 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reseller_db`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `a_add_admin` (IN `EMAIL` VARCHAR(255), IN `PWD` VARCHAR(255))  INSERT INTO admin(admin.admin_email,admin.admin_password) VALUES(EMAIL,PWD)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(2, 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `attibutes`
--

CREATE TABLE `attibutes` (
  `pr_a_id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `pr_a_key` varchar(255) NOT NULL,
  `pr_a_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attibutes`
--

INSERT INTO `attibutes` (`pr_a_id`, `product_id`, `pr_a_key`, `pr_a_value`) VALUES
(1, '1', 'colour', 'Solid Wood'),
(2, '2', 'colour', 'Maroon Woody'),
(3, '2', 'Size ', '7*4'),
(4, '2', 'Material', ' Wood'),
(5, '3', 'colour', 'Blue & White Checks'),
(6, '3', 'Size', '7*4'),
(7, '3', 'Weight', '4 KG'),
(8, '4', 'colour', 'Blue & White Checks'),
(9, '4', 'size', '7*4'),
(10, '5', 'colour', 'Blue'),
(11, '5', 'Print', 'Cartoon Stickers'),
(12, '5', 'Size', 'Six Shelves'),
(13, '6', 'colour', 'Maroon Woody'),
(14, '6', 'Size', '7*5'),
(15, '6', 'Weight', '15 KG'),
(16, '7', 'colour', 'Multicolour'),
(17, '7', 'Size', '5*6*2'),
(18, '8', 'colour', 'Gray With Round Print'),
(19, '8', 'Size ', '5*3*4'),
(20, '9', 'colour', 'Rose Gold'),
(21, '9', 'Size', '5*3'),
(22, '10', 'colour', 'Black'),
(23, '11', 'weg', 'ggg'),
(24, '12', 'colour', 'Gray With Round Print'),
(25, '12', 'Weight', '8 Kg'),
(26, '13', 'colour', 'Gray With Round Print'),
(27, '13', 'weight', '8Kg'),
(28, '14', 'colour', 'woody Maroon'),
(29, '14', 'Showpies Stand', '3'),
(30, '14', 'Drawer ', '3'),
(31, '15', 'colour', 'Maroon & Black Woody'),
(32, '15', 'Showpies Stand ', '4'),
(33, '15', 'Open Drawer', '4'),
(34, '16', 'colour', 'White'),
(35, '16', 'Material', 'Silicon Based Solid Stone'),
(36, '17', 'colour', 'Black'),
(37, '17', 'Material', 'BlackWood'),
(38, '18', 'colour', 'Black'),
(39, '18', 'Material', 'Metal '),
(40, '19', 'colour', 'Grey'),
(41, '19', 'weghit', '1kg'),
(42, '20', 'colour', 'Green'),
(43, '21', 'colour', 'Gray & Black'),
(44, '22', 'colour', 'Maroon Woody'),
(45, '23', 'colour', 'Light Green'),
(46, '24', 'colour', 'Multicolour'),
(47, '25', 'colour', 'Black'),
(48, '26', 'colour', 'White'),
(49, '27', 'colour', 'Maroon Woody'),
(50, '28', 'colour', 'Light Blue & Printed'),
(51, '29', 'colour', 'Multicolour & Printed'),
(52, '30', 'colour', 'As par Light'),
(53, '31', 'colour', 'Maroon Woody'),
(54, '32', 'colour', 'Maroon Woody'),
(55, '33', 'colour', 'Maroon Woody'),
(56, '34', 'colour', 'Black'),
(57, '35', 'colour', 'Black'),
(58, '36', 'colour', 'Sky BLue'),
(59, '37', 'colour', 'Sea Blue'),
(60, '37', 'Battry', '4000 mAh'),
(61, '38', 'colour', 'Neavy Blue'),
(62, '38', 'Battery', '5500 mAh'),
(63, '39', 'colour', 'Light Blue'),
(64, '39', 'Battery', '5000mAh'),
(65, '40', 'colour', 'Shaded Gray'),
(66, '40', 'Battery', '6000 mAh'),
(67, '41', 'colour', 'Red'),
(68, '41', 'Battery ', '4000 mAh'),
(69, '42', 'colour', 'Neavy Blue'),
(70, '42', 'Bettry', '5000 mAh'),
(71, '43', 'colour', 'Shaded Black & Gray'),
(72, '43', 'Bettry', '5000 mAh'),
(73, '44', 'colour', 'Sky BLue'),
(74, '44', 'Bettry', '5000 mAh'),
(75, '45', 'colour', 'Black'),
(76, '45', 'Bettry', '5000 mAh'),
(77, '46', 'colour', 'Gold'),
(78, '46', 'Battry', '5000 mAh'),
(79, '46', 'Camera ', '12 MP'),
(80, '47', 'colour', 'Black'),
(81, '47', 'battry', '5500 mAh'),
(82, '48', 'colour', 'Red'),
(83, '48', 'Battery', '5000 mAh'),
(84, '49', 'colour', 'Black'),
(85, '49', 'bettry', '4500 mAh'),
(86, '49', 'Dual Camera', 'Yes'),
(87, '50', 'colour', 'Gray'),
(88, '50', 'battery', '5000 mAh'),
(89, '51', 'colour', 'Gray & Black Finish'),
(90, '51', 'battery', '4500 mAh'),
(91, '52', 'Packing', ' Grams Pack'),
(92, '53', 'Packing', '5 Bread Per Pack'),
(93, '54', 'Packing', '250Gram'),
(94, '55', 'Packing', '500 ml'),
(95, '56', 'Packing', '500 ml'),
(96, '57', 'Brand', 'Thums-up'),
(97, '57', 'Bottle', '1.25 ltr'),
(98, '58', 'Brand', 'Mazza'),
(99, '58', 'Packing', '1.25 ltr'),
(100, '59', 'Brand', 'Sprite'),
(101, '59', 'Packing', '1.25 ltr'),
(102, '60', 'Packing', '500 Gram'),
(103, '60', 'Brand ', 'Nescafe'),
(104, '61', 'Brand', 'Real'),
(105, '62', 'Brand', 'Amul'),
(106, '63', 'Packing', 'Paper Box'),
(107, '63', 'Brand', 'Taj Mahal'),
(108, '64', 'Packing', '10 Kg Box  '),
(109, '65', 'Packing', 'Paper Box'),
(110, '66', 'Packing', 'Paper Box'),
(111, '67', 'Packing', 'Paper Box'),
(112, '68', 'Packing', 'Paper Box'),
(113, '69', 'Packing', 'Paper Box'),
(114, '70', 'colour', 'Multicolour'),
(115, '71', 'colour', 'Black'),
(116, '72', 'colour', 'Black'),
(117, '73', 'colour', 'Black'),
(118, '74', 'colour', 'Blue & White'),
(119, '75', 'colour', 'Light Blue'),
(120, '76', 'colour', 'Blue & White Checks'),
(121, '77', 'colour', 'Orange'),
(122, '78', 'colour', 'Black'),
(123, '79', 'colour', 'White'),
(124, '80', 'colour', 'Maroon Woody'),
(125, '81', 'colour', 'Multicolor'),
(126, '82', 'color', 'Multicolor'),
(127, '83', 'color', 'Baby Pink'),
(128, '84', 'color', 'Neavy Blue'),
(129, '85', 'color', 'Black'),
(130, '86', 'color', 'Black'),
(131, '87', 'color', 'Black'),
(132, '88', 'color', 'Black'),
(133, '89', 'color', 'Black'),
(134, '90', 'color', 'Black'),
(135, '91', 'color', 'Black'),
(136, '92', 'color', 'Black'),
(137, '93', 'color', 'Black'),
(138, '94', 'color', 'Silver'),
(139, '95', 'color', 'Grey'),
(140, '96', 'color', 'Black'),
(141, '97', 'color', 'Black'),
(142, '98', 'color', 'Rose Gold'),
(143, '99', 'color', 'Black'),
(144, '100', 'color', 'Black'),
(145, '101', 'color', 'Black'),
(146, '102', 'Set', 'On Mobile Screen'),
(147, '103', 'color', 'Black'),
(148, '104', 'color', 'Silver'),
(149, '105', 'color', 'Gray With Print'),
(150, '106', 'color', 'Black'),
(151, '107', 'color', 'White'),
(152, '108', 'color', 'White'),
(153, '109', 'color', 'White with Prints'),
(154, '110', 'color', 'White'),
(155, '111', 'color', 'White'),
(156, '112', 'color', 'White'),
(157, '113', 'color', 'Blue'),
(158, '114', 'color', 'Black'),
(159, '115', 'color', 'Gray'),
(160, '116', 'color', 'Shaded Black'),
(161, '117', 'color', 'Flower Printed Blue'),
(162, '118', 'color', 'Shaded Gray'),
(163, '119', 'Packing', 'Plastic Paper'),
(164, '120', 'Packing', 'Plastic Bottle'),
(165, '121', 'Packing', 'Plastic Paper'),
(166, '122', 'color', 'Multicolor'),
(167, '123', 'Packing', 'Paper Box'),
(168, '124', 'Packing', 'Metal Box'),
(169, '125', 'color', 'Red'),
(170, '126', 'Packing', 'Plastic Sprayer Bottle'),
(171, '127', 'Packing', 'Plastic Plate Box'),
(172, '128', 'color', 'Blue'),
(173, '129', 'color', 'Skin Touch'),
(174, '130', 'color', 'Pink'),
(175, '131', 'Brand', 'DENVER'),
(176, '132', 'Brand', 'ENGAGE '),
(177, '133', 'Brand', 'ENVY'),
(178, '134', 'Brand', 'Wild Stone '),
(179, '135', 'Brand', 'PARK AVENUE '),
(180, '136', 'Brand', 'NIVEA ');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ca_id` int(11) NOT NULL,
  `ca_cus_id` int(11) NOT NULL,
  `ca_pr_id` int(11) NOT NULL,
  `ca_pr_qty` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=current,2=purchased',
  `purchase_type` int(11) DEFAULT NULL COMMENT '1=self,2=other'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ca_id`, `ca_cus_id`, `ca_pr_id`, `ca_pr_qty`, `status`, `purchase_type`) VALUES
(56, 4, 88, 1, 2, NULL),
(57, 4, 88, 1, 2, NULL),
(58, 4, 54, 1, 2, 1),
(59, 4, 81, 1, 2, 2),
(60, 4, 114, 1, 2, 1),
(61, 4, 87, 1, 2, 1),
(62, 4, 37, 1, 2, 1),
(63, 4, 72, 1, 2, 1),
(64, 4, 65, 1, 2, 1),
(65, 4, 65, 1, 2, 1),
(66, 4, 65, 1, 2, 1),
(67, 4, 65, 1, 2, 1),
(68, 4, 4, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `is_parent` smallint(6) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `status` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`, `is_parent`, `parent_id`, `status`) VALUES
(5, 'Grocery', 1, 0, 1),
(6, 'Fashion', 1, 0, 1),
(7, 'Electronic', 1, 0, 1),
(8, 'Mobile', 1, 0, 1),
(9, 'Appliances', 1, 0, 1),
(10, 'Furniture', 1, 0, 1),
(11, 'Beauty & Care', 1, 0, 1),
(12, 'Men', 0, 6, 1),
(13, 'Women', 0, 6, 1),
(14, 'Kid', 0, 6, 1),
(18, 'Bath And Oral Care', 0, 11, 1),
(19, 'Makeup', 0, 11, 1),
(25, 'Fragrances', 0, 11, 1),
(26, 'Dairy & Bakery', 0, 5, 1),
(29, 'Fruits & Vegetables', 0, 5, 1),
(30, 'Beverages', 0, 5, 1),
(31, 'Living room', 0, 10, 1),
(32, 'Kitchen & Dining', 0, 10, 1),
(33, 'Bedroom', 0, 10, 1),
(34, 'Home Decor', 0, 10, 1),
(35, 'Lighting', 0, 10, 1),
(37, 'Mi', 0, 8, 1),
(38, 'Samsung', 0, 8, 1),
(41, 'Apple', 0, 8, 1),
(43, 'Televisions', 0, 9, 1),
(45, 'Air Conditioners', 0, 9, 1),
(46, 'Refrigerators', 0, 9, 1),
(47, 'Cameras', 0, 7, 1),
(48, ' Laptops', 0, 7, 1),
(52, 'Accessories', 0, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `cu_id` int(11) NOT NULL,
  `cu_title` varchar(100) NOT NULL,
  `cu_code` varchar(50) NOT NULL,
  `cu_str_date` date NOT NULL,
  `cu_end_date` date NOT NULL,
  `cu_free_ship` tinyint(1) NOT NULL,
  `cu_qty` int(11) NOT NULL,
  `cu_type` varchar(50) NOT NULL,
  `cu_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`cu_id`, `cu_title`, `cu_code`, `cu_str_date`, `cu_end_date`, `cu_free_ship`, `cu_qty`, `cu_type`, `cu_status`) VALUES
(1, 'aaa', 'Di140', '2021-05-18', '2021-06-05', 1, 11, '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_contact_no` int(11) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `c_contact_no`, `c_email`, `c_password`) VALUES
(4, 'hardik', 111111111, 'j@gmail.com', '0000'),
(5, 'ssss', 1111, 'a@gmail.com', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `d_id` int(11) NOT NULL,
  `d_title` varchar(225) NOT NULL,
  `d_code` varchar(255) NOT NULL,
  `d_desc` varchar(255) NOT NULL,
  `d_percentage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`d_id`, `d_title`, `d_code`, `d_desc`, `d_percentage`) VALUES
(1, '10% off on fashion', '10FASHION', '10% off on fashion', '10%'),
(2, '12% off on Grocery', '12GROCERY', '12% off on Grocery', '12%'),
(3, '15% off on Electronic', '15ELECTRONIC', '15% off on Electronic', '15%'),
(4, '18% off on Mobile', '18MOBILE', '18% off on Mobile', '18%'),
(5, '10% off on Appliances', '10APPLIANCES', '10% off on Appliances', '10%'),
(6, '15% off on Furniture', '15FURNITURE', '15% off on Furniture', '15%'),
(7, '20% off on Beauty & Care', '20CARE', '20% off on Beauty & Care', '20%');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `fb_id` int(11) NOT NULL,
  `fb_u_nm` varchar(100) NOT NULL,
  `fb_email` varchar(100) NOT NULL,
  `fb_phone` int(11) NOT NULL,
  `fb_msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`fb_id`, `fb_u_nm`, `fb_email`, `fb_phone`, `fb_msg`) VALUES
(1, 'alvin', 'a@gmail.com', 2147483647, 'goood product'),
(2, 'jainik', 'j@gmail.com', 2147483647, 'osm products are there'),
(3, 'manan', 'm@gmail.com', 2147483647, 'product quality is best ');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `offer_id` int(11) NOT NULL,
  `offer_desc` varchar(100) NOT NULL,
  `offer_code` varchar(100) NOT NULL,
  `offer_percentage` int(11) NOT NULL,
  `offer_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`offer_id`, `offer_desc`, `offer_code`, `offer_percentage`, `offer_title`) VALUES
(5, '20% OFF ON PAYTM', '20PAYTM', 20, '20% discount'),
(6, '15% OFF USEING CREDIT CARD', '15CREDIT', 15, '15% discount'),
(7, '50% OFF ON FIRST ORDER', '50FIRST', 50, '50% discount'),
(8, '10% OFF ON COD', '10COD', 10, '10% discount');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `or_id` int(11) NOT NULL,
  `or_ca_id` varchar(150) NOT NULL,
  `or_pay_method` varchar(100) NOT NULL,
  `or_total_price` int(11) NOT NULL,
  `or_c_name` varchar(225) NOT NULL,
  `or_c_contact_no` int(11) NOT NULL,
  `or_email` varchar(255) NOT NULL,
  `or_address` varchar(255) NOT NULL,
  `or_city` varchar(100) NOT NULL,
  `or_state` varchar(100) NOT NULL,
  `or_pincode` int(11) NOT NULL,
  `transaction_id` varchar(500) DEFAULT NULL,
  `or_pr_mrp` int(11) NOT NULL,
  `cart_id` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`or_id`, `or_ca_id`, `or_pay_method`, `or_total_price`, `or_c_name`, `or_c_contact_no`, `or_email`, `or_address`, `or_city`, `or_state`, `or_pincode`, `transaction_id`, `or_pr_mrp`, `cart_id`) VALUES
(28, '4', 'Cash on delivery(COD)', 106150, 'hardik', 111111111, 'j@gmail.com', 'address', 'city', 'india', 395007, 'P5MPzWXC8D', 106150, '56,57,58,59'),
(29, '4', 'Cash on delivery(COD)', 55000, 'hardik', 111111111, 'j@gmail.com', 'address', 'city', 'india', 395007, 'W435ce29af', 55000, '60'),
(30, '4', 'Cash on delivery(COD)', 4000, 'hardik', 111111111, 'j@gmail.com', 'address', 'city', 'india', 395007, 'cyCUOMEkot', 4000, '61'),
(31, '4', 'Cash on delivery(COD)', 9300, 'hardik', 111111111, 'j@gmail.com', 'address', 'city', 'india', 395007, 'PZUmExLwB4', 9300, '62,63,64,65,66,67');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pr_id` int(11) NOT NULL,
  `pr_category` varchar(100) NOT NULL,
  `pr_s_category` varchar(100) NOT NULL,
  `pr_name` varchar(100) NOT NULL,
  `pr_desc` varchar(255) NOT NULL,
  `pr_price` int(11) NOT NULL,
  `pr_mrp` int(11) NOT NULL,
  `pr_qty` int(11) NOT NULL,
  `pr_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pr_id`, `pr_category`, `pr_s_category`, `pr_name`, `pr_desc`, `pr_price`, `pr_mrp`, `pr_qty`, `pr_image`) VALUES
(1, '10', '33', 'Solid Wood Bed', 'Best Quality Wood ', 12000, 15000, 5, 'http://localhost/reseller-hub/assets/upload/Solid_Wood_Bed.jpeg'),
(2, '10', '33', 'Single Wood Bed', 'Easily Moveable \r\nGood Quality Wood Use', 10000, 13000, 4, 'http://localhost/reseller-hub/assets/upload/single_bed.jpeg'),
(3, '10', '33', 'Cotton Mattress', ' Single Bed Cotton Mattress', 3000, 5000, 10, 'http://localhost/reseller-hub/assets/upload/Single_Cotton_Mattress.jpeg'),
(4, '10', '33', 'Foldable Cotton Mattress', 'This Mattress is Easily Fold', 3000, 6000, 15, 'http://localhost/reseller-hub/assets/upload/Foldable_Cotton_Mattress.jpeg'),
(5, '10', '33', 'Baby Wardrobe', 'Six Shelve Baby Wardrobe', 1000, 2000, 15, 'http://localhost/reseller-hub/assets/upload/Baby_6_Shelve_Collapsible_Wardrobe.jpeg'),
(6, '10', '33', 'Door Wardrobe', 'Wood 2 Door Wardrobe', 1500, 3000, 15, 'http://localhost/reseller-hub/assets/upload/Wood_2_Door_Wardrobe.jpeg'),
(9, '8', '37', 'Mi 5A', 'Mi Mobile ', 4000, 5000, 25, 'http://localhost/reseller-hub/assets/upload/Mi_5A_.jpg'),
(10, '8', '38', 'A10', 'Samsung A10 Mobile', 15000, 17000, 20, 'http://localhost/reseller-hub/assets/upload/a10.jpg'),
(12, '10', '31', 'Single Seater Sofa', 'Comfortable to Seating', 3000, 5000, 25, 'http://localhost/reseller-hub/assets/upload/single_seater_sofa1.jpg'),
(13, '10', '31', 'Two Seater Sofa', 'Two Person Easily Seat', 4000, 6000, 25, 'http://localhost/reseller-hub/assets/upload/three_seater_leather_sofa.jpg'),
(14, '10', '31', 'TV Unit', 'Designer TV Unit', 2500, 4000, 10, 'http://localhost/reseller-hub/assets/upload/tv-console-unit-black-brown.jpeg'),
(15, '10', '31', 'TV Unit', 'Best Designing TV Unit', 2500, 4000, 25, 'http://localhost/reseller-hub/assets/upload/tv_table_stand.jpeg'),
(16, '10', '31', 'Coffee Table', 'Silicon Based Solid Table', 1500, 3000, 20, 'http://localhost/reseller-hub/assets/upload/coffee_table_2.jpeg'),
(17, '10', '31', 'Coffee Table', 'Black Woody Furnichar', 2000, 3500, 20, 'http://localhost/reseller-hub/assets/upload/coffee_table.jpeg'),
(18, '10', '32', 'Gas Stove', 'Manual Gas Stove With Three Fire Bone', 3500, 4000, 20, 'http://localhost/reseller-hub/assets/upload/Manual_Gas_Stove.jpeg'),
(19, '10', '32', 'Pressure Coocker', 'Metal Pressure Coocker 5ltr', 1500, 3000, 20, 'http://localhost/reseller-hub/assets/upload/pressure_cooker.jpeg'),
(20, '10', '32', 'Hand Juicer', 'Plastic Fruit & Vegetables Juicer', 600, 1000, 50, 'http://localhost/reseller-hub/assets/upload/Plastic_Hand_Juicer.jpeg'),
(21, '10', '32', 'Roti Maker', 'Electric Roti Maker ', 2500, 4000, 10, 'http://localhost/reseller-hub/assets/upload/Roti_Maker.jpeg'),
(22, '10', '32', 'Shuffel Wooden Ladge', 'Use For Making Dishes & Serve', 500, 900, 20, 'http://localhost/reseller-hub/assets/upload/Shuffle_Wooden_Ladle.jpeg'),
(23, '10', '32', 'Vegetable & Fruit Chopper', 'Cutting And Chopp Fruits &Vegetables', 400, 600, 15, 'http://localhost/reseller-hub/assets/upload/Vegetable_Fruit_Chopper.jpeg'),
(24, '10', '34', 'Analog Wall Colock', 'Analog Multicolour Wall Clock', 550, 700, 20, 'http://localhost/reseller-hub/assets/upload/Analog_Multi_colour_Wall_Clock.jpeg'),
(25, '10', '34', 'Digital Wall Clock', 'Digital Redlight  Wall Clock', 600, 900, 50, 'http://localhost/reseller-hub/assets/upload/Digital_Wall_Clock.jpeg'),
(26, '10', '34', 'Wall Shelf', 'Wooden Square Wall Shelf', 900, 1200, 15, 'http://localhost/reseller-hub/assets/upload/Wooden_Wall_Shelf.jpeg'),
(27, '10', '34', 'Horse Carrige Showpiece', 'Wooden Showpiece', 300, 600, 20, 'http://localhost/reseller-hub/assets/upload/Horse_Carriage_Showpiece.jpg'),
(28, '10', '34', 'Curtain', 'Curtain For Wall & Windows', 500, 700, 20, 'http://localhost/reseller-hub/assets/upload/curtain.jpeg'),
(29, '10', '34', 'Wallpaper', 'Plastic & Printed WolTop Paper ', 200, 300, 10, 'http://localhost/reseller-hub/assets/upload/WolTop_Wallpaper.jpeg'),
(30, '10', '35', 'Table Lamp', 'Conical Shade Table Lamp', 500, 700, 20, 'http://localhost/reseller-hub/assets/upload/Conical_Shade_Table_Lamp.jpeg'),
(31, '10', '35', 'Hanging Light', 'Cycle Shape Hanging Light', 400, 600, 20, 'http://localhost/reseller-hub/assets/upload/Cycle_Shaped_Hanging_Light.jpeg'),
(32, '10', '35', 'Hanging Lamp', 'Hanging lamp antique Wooden Ceiling Lights', 300, 600, 20, 'http://localhost/reseller-hub/assets/upload/Hanging_lamp_electric_antique_Wooden_Ceiling_Lights.jpeg'),
(33, '10', '35', 'Step Wall Light', ' Step Wall Light Lamp', 700, 800, 20, 'http://localhost/reseller-hub/assets/upload/Step_Light_Wall_Lamp.jpeg'),
(34, '10', '35', 'Desk Lamp', 'LED Desk/Table Light', 800, 900, 20, 'http://localhost/reseller-hub/assets/upload/LED_Desk_Light_Table_Lamp.jpeg'),
(35, '10', '35', 'Pendant Wall Lamp', 'Plastic Shape Pendant Wall Light', 600, 700, 20, 'http://localhost/reseller-hub/assets/upload/Pendant_Wall_Lamp13.jpeg'),
(36, '8', '37', 'Mi 6A', 'Mi mobile ', 5000, 6000, 20, 'http://localhost/reseller-hub/assets/upload/Mi_6A_.jpg'),
(37, '8', '37', 'Mi 7A', 'Mi Mobile', 6000, 7000, 50, 'http://localhost/reseller-hub/assets/upload/Mi_7A_.jpg'),
(38, '8', '37', 'Mi 8A', 'Mi Mobile', 7000, 8000, 25, 'http://localhost/reseller-hub/assets/upload/Mi_8A_.jpg'),
(39, '8', '37', 'Mi 9A', 'Mi Mobile', 8000, 9000, 20, 'http://localhost/reseller-hub/assets/upload/Mi_9A_.jpg'),
(40, '8', '37', 'Mi Note 10', 'Mi Mobile', 10000, 12000, 20, 'http://localhost/reseller-hub/assets/upload/mi_note_101.png'),
(41, '8', '38', 'A 20', 'Samsung Mobile', 6000, 7000, 20, 'http://localhost/reseller-hub/assets/upload/a20.jpg'),
(42, '8', '38', 'Samsung M20', 'Samsung Mobile', 9000, 10000, 20, 'http://localhost/reseller-hub/assets/upload/m20.jpg'),
(43, '8', '38', 'Samsung M30', 'Samsung Mobile', 10000, 12000, 20, 'http://localhost/reseller-hub/assets/upload/m30.jpg'),
(44, '8', '38', 'Samsung S10', 'Samsung Mobile\r\n', 12000, 15000, 20, 'http://localhost/reseller-hub/assets/upload/s10.jpg'),
(45, '8', '38', 'Samsung S20', 'Samsung Mobile', 13000, 14000, 20, 'http://localhost/reseller-hub/assets/upload/s20.jpg'),
(46, '8', '41', 'Iphone 6', 'Apple Mobile', 15000, 17000, 20, 'http://localhost/reseller-hub/assets/upload/6.jpg'),
(47, '8', '41', 'Iphone 11', 'Apple Mobile', 50000, 70000, 20, 'http://localhost/reseller-hub/assets/upload/11.jpg'),
(48, '8', '41', 'Iphone XS', 'Apple Mobile', 50000, 60000, 20, 'http://localhost/reseller-hub/assets/upload/se.jpg'),
(49, '8', '41', 'Iphone 8 Plus', 'Apple Mobile', 25000, 30000, 20, 'http://localhost/reseller-hub/assets/upload/7.jpg'),
(50, '8', '41', 'IPad 1', 'Apple Device', 30000, 35000, 20, 'http://localhost/reseller-hub/assets/upload/ipad_1.jpg'),
(51, '8', '41', 'IPad 2', 'Apple Device', 40000, 45000, 20, 'http://localhost/reseller-hub/assets/upload/ipad_2.jpg'),
(52, '5', '26', 'Masti Dahi', 'Best in Test\r\nFresh and refreshing', 100, 150, 15, 'http://localhost/reseller-hub/assets/upload/dairybakery2.jpg'),
(53, '5', '26', 'Pizza Breads', ' Everyday Use Fresh Pizza Breads', 80, 100, 5, 'http://localhost/reseller-hub/assets/upload/dairybakery7.jpg'),
(54, '5', '26', 'Butter', 'Fresh & Best', 120, 150, 20, 'http://localhost/reseller-hub/assets/upload/dairybakery3.jpg'),
(55, '5', '26', 'Milk', 'Fresh & Refreshing', 50, 70, 10, 'http://localhost/reseller-hub/assets/upload/dairybakery.jpg'),
(56, '5', '26', 'Butter Milk', 'Best in Test & Refreshing', 30, 50, 10, 'http://localhost/reseller-hub/assets/upload/dairybakery4.jpg'),
(57, '5', '30', 'Cold Drink', 'Best in Test Refreshing', 100, 150, 20, 'http://localhost/reseller-hub/assets/upload/beverages9.jpg'),
(58, '5', '30', 'Cold Drink', 'Best in Test &Refreshing', 80, 100, 10, 'http://localhost/reseller-hub/assets/upload/beverages12.jpg'),
(59, '5', '30', 'Cold Drink', 'Best in Test & Refreshing', 80, 100, 15, 'http://localhost/reseller-hub/assets/upload/beverages10.jpg'),
(60, '5', '30', 'Coffee Powder', 'Mix in Milk & Enjoy', 200, 250, 15, 'http://localhost/reseller-hub/assets/upload/beverages5.jpg'),
(61, '5', '30', 'Fruit Juice Powder ', 'Mix Fruit Juice Powder', 100, 150, 20, 'http://localhost/reseller-hub/assets/upload/beverages7.jpg'),
(62, '5', '26', 'Cheese', 'Cheese', 150, 200, 20, 'http://localhost/reseller-hub/assets/upload/dairybakery5.jpg'),
(63, '5', '30', 'Taj Mahal Tea ', 'Refreshing & Best Test ', 250, 300, 20, 'http://localhost/reseller-hub/assets/upload/beverages.jpg'),
(64, '5', '29', 'Mango', 'Fresh Mango\r\n', 1000, 1500, 50, 'http://localhost/reseller-hub/assets/upload/fruits-vegetables7.jpg'),
(65, '5', '29', 'Watermelon', 'Fresh Watermelon', 100, 200, 50, 'http://localhost/reseller-hub/assets/upload/fruits-vegetables10.jpg'),
(66, '5', '29', 'Apple', 'Fresh Apple', 500, 700, 20, 'http://localhost/reseller-hub/assets/upload/fruits-vegetables9.jpg'),
(67, '5', '29', 'Tomato', 'Fresh Tomato', 100, 200, 20, 'http://localhost/reseller-hub/assets/upload/fruits-vegetables4.jpg'),
(68, '5', '29', 'Orange', 'Fresh Orange', 150, 250, 22, 'http://localhost/reseller-hub/assets/upload/fruits-vegetables12.jpg'),
(69, '5', '29', 'Pineapple', 'Fresh Pineapple', 150, 200, 20, 'http://localhost/reseller-hub/assets/upload/fruits-vegetables11.jpg'),
(70, '6', '12', 'Kurta Pazama', 'Traditional Men\'s Wear', 2000, 3000, 15, 'http://localhost/reseller-hub/assets/upload/m_iw_1.jpg'),
(71, '6', '12', 'Blazer', 'Cotton Clothing Designing Blazer ', 2500, 3500, 10, 'http://localhost/reseller-hub/assets/upload/5.jpg'),
(72, '6', '12', '6 Pocket Jogger Pent', 'Jogger Pant', 1000, 1500, 20, 'http://localhost/reseller-hub/assets/upload/CHAIFENKO-Hip-Hop-Cargo-Pants-Men-Fashion-Harajuku-Harem-Pant-Streetwear-Casual-Joggers-Multi-Pocket-Tie.jpg'),
(73, '6', '12', 'Checks Shirt', 'Cotton Shirt', 500, 1000, 15, 'http://localhost/reseller-hub/assets/upload/DtfCVgXU8AIo7aY.jpg'),
(74, '6', '12', 'T-Shirt', 'Designer T-Shirt', 250, 350, 20, 'http://localhost/reseller-hub/assets/upload/Men-s-Hoodies-Long-Sleeve-Sweatshirt-2021-Winter-Solid-Color-Army-Green-Sweatshirt-Streetwear-Slim-Hoodies_jpg_q50.jpg'),
(75, '6', '12', 'Jeans', 'Light Blue Color Jeans', 2000, 2500, 23, 'http://localhost/reseller-hub/assets/upload/19-500x500.jpg'),
(77, '6', '13', 'Traditional Blouse & Ghaghara ', 'Orange Good Cotton Embroidery Work', 3000, 5000, 25, 'http://localhost/reseller-hub/assets/upload/17.jpg'),
(79, '6', '14', 'White Cotton Shirt ', 'Cotton Shirt', 500, 700, 20, 'http://localhost/reseller-hub/assets/upload/6-The-classic-toddler-cut.jpg'),
(80, '6', '14', 'Traditional Kurta & Pajama', 'Cotton Art', 1000, 1500, 20, 'http://localhost/reseller-hub/assets/upload/99fb3247ef72a020f5b5c058e492e34b.jpg'),
(81, '6', '14', 'T-Shirt & Jeans', 'Baby Girl   T-Shirt & Jeans  Combo', 3000, 4000, 15, 'http://localhost/reseller-hub/assets/upload/cn17616869.jpg'),
(82, '6', '14', 'Shirt & Pant', 'Baby Boy Shirt & Pant\r\n', 2500, 3500, 20, 'http://localhost/reseller-hub/assets/upload/Party-Wear-Shirt-Jeans-Clothing-Set.jpg'),
(83, '6', '14', 'Pink Dress', 'Printed Dress For Baby Girl ', 5000, 6000, 20, 'http://localhost/reseller-hub/assets/upload/4.jpg'),
(84, '6', '14', 'Embroidery Work Dress ', 'Baby Girl Dress', 3000, 4000, 50, 'http://localhost/reseller-hub/assets/upload/51.jpg'),
(85, '7', '47', 'Cannon 5D', 'Cannon Camera', 40000, 50000, 10, 'http://localhost/reseller-hub/assets/upload/canon_5.jpg'),
(86, '7', '47', 'Cannon 200D', 'Cannon Camera', 40000, 45000, 10, 'http://localhost/reseller-hub/assets/upload/canon_200.jpg'),
(87, '7', '47', 'Nikon D-500', 'NikonCamera', 35000, 4000, 10, 'http://localhost/reseller-hub/assets/upload/nikon-d500.jpg'),
(88, '7', '47', 'Nikon S583 ', 'Nikon Camera', 45000, 51000, 10, 'http://localhost/reseller-hub/assets/upload/nikon-d850.jpg'),
(89, '7', '47', 'Nikon D3500', 'Nikon Camera', 25000, 30000, 20, 'http://localhost/reseller-hub/assets/upload/nikon-d3500.jpg'),
(90, '7', '47', 'Cannon 700D', 'Cannon Cameras', 10000, 15000, 10, 'http://localhost/reseller-hub/assets/upload/canon_700.jpg'),
(91, '7', '48', 'Dell Laptop', 'Dell Inspiron Laptop', 60000, 65000, 10, 'http://localhost/reseller-hub/assets/upload/Dell.jpg'),
(92, '7', '48', 'HP Laptop', 'HP Pavilion Series Laptop ', 50000, 53000, 10, 'http://localhost/reseller-hub/assets/upload/HP.jpg'),
(94, '7', '48', 'Asus Laptop', 'Asus MSG Laptop', 48000, 60000, 10, 'http://localhost/reseller-hub/assets/upload/Asus.jpg'),
(95, '7', '48', 'Lenovo Laptop', 'Lenovo S12000 Laptop ', 30000, 35000, 10, 'http://localhost/reseller-hub/assets/upload/Lenovo.jpg'),
(96, '7', '48', 'Microsoft Laptop', 'Microsoft Edition Laptop ', 36000, 40000, 10, 'http://localhost/reseller-hub/assets/upload/microsoft.jpg'),
(98, '7', '48', 'Apple Laptop', 'Apple MacBook', 70000, 80000, 10, 'http://localhost/reseller-hub/assets/upload/apple.jpg'),
(99, '7', '52', 'Headphone', 'Loud Bass Headphone \r\nComfort to Wear ', 3500, 4000, 10, 'http://localhost/reseller-hub/assets/upload/headphone1.jpg'),
(100, '7', '52', 'Bluetooth Nackband', 'High Quality Sound', 2500, 3000, 10, 'http://localhost/reseller-hub/assets/upload/b_earphone.jpg'),
(101, '7', '52', 'Power Bank', '20000 mAh Battery', 1200, 1500, 10, 'http://localhost/reseller-hub/assets/upload/power_bank.jpg'),
(102, '7', '52', 'Mobile Screen Protector ', 'Screen Guard Glass', 100, 150, 10, 'http://localhost/reseller-hub/assets/upload/protector_glass.jpg'),
(103, '7', '52', 'Selfie Stick ', 'Fiber Foldable Selfie Stick', 300, 500, 10, 'http://localhost/reseller-hub/assets/upload/selfi_stick.jpg'),
(104, '7', '52', 'Charging Cable', 'Fast Charging Cable', 400, 500, 10, 'http://localhost/reseller-hub/assets/upload/i_cable.jpg'),
(107, '9', '45', 'Panasonic Inverter Air Conditioner', 'Panasonic 1.5 Ton 5 Star Wi-Fi Twin Cool Inverter Split AC', 50000, 55000, 10, 'http://localhost/reseller-hub/assets/upload/Panasonic_1_5_Ton_5_Star_Wi-Fi_Twin_Cool_Inverter_Split_AC.jpg'),
(108, '9', '45', 'Lloyd 3 Star Air Conditioner', 'Lloyd 1.0 Ton 3 Star Inverter Split AC', 45000, 56000, 23, 'http://localhost/reseller-hub/assets/upload/Lloyd_1_0_Ton_3_Star_Inverter_Split_AC.jpg'),
(109, '9', '45', 'Samsung Inverter Air Conditioner', 'Samsung 1.5 Ton 3 Star Inverter Split AC', 40000, 45000, 10, 'http://localhost/reseller-hub/assets/upload/Samsung_1_5_Ton_3_Star_Inverter_Split_AC.jpg'),
(110, '9', '45', 'Croma Inverter Air Conditioner', 'Croma 1.5 Ton 3 Star Split Inverter AC', 30000, 35000, 12, 'http://localhost/reseller-hub/assets/upload/Croma_1_5_Ton_3_Star_Split_Inverter_AC.jpg'),
(111, '9', '45', 'Hisense Inverter Air Conditioner', 'Hisense 1.5 Ton 3 Star Wi-Fi Inverter Split AC', 20000, 25000, 10, 'http://localhost/reseller-hub/assets/upload/Hisense_1_5_Ton_3_Star_Wi-Fi_Inverter_Split_AC.jpg'),
(112, '9', '45', 'LG Air Conditioner', 'LG 1.5 Ton 5 Star Wi-Fi Inverter Window AC', 20000, 25000, 10, 'http://localhost/reseller-hub/assets/upload/LG_1_5_Ton_5_Star_Wi-Fi_Inverter_Window_AC.jpg'),
(113, '9', '46', 'Godrej  Single Door Refrigerator', 'Godrej 190 L 3 Star Inverter Direct-Cool Single Door Refrigerator', 35000, 40000, 10, 'http://localhost/reseller-hub/assets/upload/Godrej_190_L_3_Star_Inverter_Direct-Cool_Single_Door_Refrigerator.jpg'),
(114, '9', '46', 'Panasonic Side by Side Refrigerator ', 'Panasonic 584 L Frost Free Side by Side Refrigerator ', 50000, 55000, 20, 'http://localhost/reseller-hub/assets/upload/Panasonic_584_L_Frost_Free_Side_by_Side_Refrigerator_.jpeg'),
(115, '9', '46', 'Whirlpool Refrigerator', 'Whirlpool 245 L Frost Free Double Door 2 Star Refrigerator', 25000, 30000, 10, 'http://localhost/reseller-hub/assets/upload/Whirlpool_245_L_Frost_Free_Double_Door_2_Star_Refrigerator.jpeg'),
(116, '9', '46', 'Samsung Single Door Refrigerator', 'Samsung 198 L 4 Star Inverter Direct Cool Single Door Refrigerator', 10000, 15000, 10, 'http://localhost/reseller-hub/assets/upload/Samsung_198_L_4_Star_Inverter_Direct_Cool_Single_Door_Refrigerator.jpg'),
(117, '9', '46', 'Whirlpool Inverter Refrigerator', 'Whirlpool 200 L 4 Star Inverter Direct-Cool Single Door Refrigerator_', 16000, 18000, 10, 'http://localhost/reseller-hub/assets/upload/Whirlpool_200_L_4_Star_Inverter_Direct-Cool_Single_Door_Refrigerator_.jpg'),
(118, '9', '46', 'SAMSUNG Side by Side Refrigerator', 'SAMSUNG 700 L Frost Free Side by Side Refrigerator', 35000, 40000, 10, 'http://localhost/reseller-hub/assets/upload/SAMSUNG_700_L_Frost_Free_Side_by_Side_Refrigerator.jpeg'),
(119, '11', '18', 'Dettol Shop', '5 Pack Dettol Soap Pack', 100, 150, 25, 'http://localhost/reseller-hub/assets/upload/5-625-original-soap-dettol-original-imafrjgre8kshm43.jpeg'),
(120, '11', '18', 'Cool Mint Mouth-wash', 'listerine 750ml mouth wash', 150, 200, 10, 'http://localhost/reseller-hub/assets/upload/750-mouth-wash-listerine-original-imafq6kacaahatzg.jpeg'),
(121, '11', '18', 'Colgate', '600Gram active salt Colgate', 300, 400, 15, 'http://localhost/reseller-hub/assets/upload/600-active-salt-colgate-original-imafdfhvjxgetthk.jpeg'),
(122, '11', '18', 'Flexible Brush', '4 Brush Set', 100, 200, 10, 'http://localhost/reseller-hub/assets/upload/sensitive-4-colgate-ultra-soft-original-imafvye4g94tbqhb1.jpeg'),
(123, '11', '18', 'Vivel Bathing Soap', '4-600Gram Aloe Vera vivel Bathing Soap', 400, 500, 50, 'http://localhost/reseller-hub/assets/upload/4-600-aloe-vera-bathing-bar-vivel-original-imafgc9nhkmyu6uc.jpeg'),
(124, '11', '18', 'Nivea Men Shower-Gel', '250-active-clean-shower-gel-nivea-men-original-imafeph7z6a34mxg', 300, 400, 10, 'http://localhost/reseller-hub/assets/upload/250-active-clean-shower-gel-nivea-men-original-imafeph7z6a34mxg.jpeg'),
(125, '11', '19', 'Red Lipstick', 'BIOTIQUE Magicolor Lipstick', 150, 200, 10, 'http://localhost/reseller-hub/assets/upload/BIOTIQUE_Magicolor_Lipstick,_Fire_Me_Up.jpeg'),
(126, '11', '19', 'Face Cleaner', 'Dabur Gulabari Rose Glow face Cleaner', 400, 500, 10, 'http://localhost/reseller-hub/assets/upload/Dabur_Gulabari_Rose_Glow_face_Cleanser.jpeg'),
(127, '11', '19', 'Lakmé Eye Shadow ', 'Lakmé Absolute Infinity Eye Shadow Multicolor', 900, 1000, 50, 'http://localhost/reseller-hub/assets/upload/Lakmé_Absolute_Infinity_Eye_Shadow_Palette.jpeg'),
(128, '11', '19', 'Eye Liner', 'Lakmé Insta Eye Liner', 600, 700, 10, 'http://localhost/reseller-hub/assets/upload/Lakmé_Insta_Eye_Liner.jpeg'),
(129, '11', '19', ' Compact', 'Lakmé Perfect Radiance Compact\r\n', 300, 400, 10, 'http://localhost/reseller-hub/assets/upload/Lakmé_Perfect_Radiance_Compact1.jpeg'),
(130, '11', '19', 'Lip Shine Balm ', 'NIVEA Cherry Fruity Shine Lip Balm Cherry Flavour', 500, 600, 20, 'http://localhost/reseller-hub/assets/upload/NIVEA_Cherry_Fruity_Shine_Lip_Balm_Cherry.jpeg'),
(131, '11', '25', 'DENVER Spray', 'DENVER Combo Deodorant Spray', 600, 700, 10, 'http://localhost/reseller-hub/assets/upload/DENVER_Hamilton,_Caliber_and_Pride_Combo_Deodorant_Spray.jpeg'),
(132, '11', '25', 'ENgAgE Deodorant Spray ', 'Engage Spray For Boys&Girls', 400, 500, 15, 'http://localhost/reseller-hub/assets/upload/ENgAgE_Deodorant_Spray_.jpeg'),
(133, '11', '25', 'ENVY Men Perfume ', 'ENVY Men Perfume & Pocket Perfume', 300, 400, 20, 'http://localhost/reseller-hub/assets/upload/ENVY_Men_Perfume_Pocket_Perfume.jpeg'),
(134, '11', '25', 'Wild Stone Deodorant Spray', 'Wild Stone Ultra Sensual Perfume Deodorant Spray.j', 800, 900, 20, 'http://localhost/reseller-hub/assets/upload/Wild_Stone_Ultra_Sensual_Perfume_Deodorant_Spray.jpeg'),
(135, '11', '25', 'PARK AVENUE  Spray', 'PARK AVENUE Voyage & Neo Spray Pack of Three', 900, 1000, 20, 'http://localhost/reseller-hub/assets/upload/PARK_AVENUE_Voyage_Neo_Spray.jpeg'),
(136, '11', '25', 'NIVEA  Body Spray', 'NIVEA Fresh Power Body Spray \r\n2 Pack Combo ', 500, 600, 20, 'http://localhost/reseller-hub/assets/upload/NIVEA_Fresh_Power_Body_Spray.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `reseller`
--

CREATE TABLE `reseller` (
  `r_id` int(11) NOT NULL,
  `r_name` varchar(100) NOT NULL,
  `r_contact_no` int(11) NOT NULL,
  `r_email` varchar(100) NOT NULL,
  `r_password` varchar(100) NOT NULL,
  `r_gst_no` int(11) NOT NULL,
  `r_id_no` varchar(100) NOT NULL,
  `r_sql_1` varchar(255) NOT NULL,
  `r_ans_1` varchar(255) NOT NULL,
  `r_sql_2` varchar(255) NOT NULL,
  `r_ans_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reseller`
--

INSERT INTO `reseller` (`r_id`, `r_name`, `r_contact_no`, `r_email`, `r_password`, `r_gst_no`, `r_id_no`, `r_sql_1`, `r_ans_1`, `r_sql_2`, `r_ans_2`) VALUES
(4, 'hardik', 2147483647, 'h@gmail.com', '1111', 33334444, '44443333', 'q1', 'voro', 'q21', 'archna');

-- --------------------------------------------------------

--
-- Table structure for table `specification`
--

CREATE TABLE `specification` (
  `pr_s_id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `pr_s_key` varchar(225) NOT NULL,
  `pr_s_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specification`
--

INSERT INTO `specification` (`pr_s_id`, `product_id`, `pr_s_key`, `pr_s_value`) VALUES
(1, '1', 'Wood', 'Best Quality Wood'),
(2, '1', 'Size', '7 * 4'),
(3, '2', 'Material', 'Wood'),
(4, '3', 'Material', 'Soft Cotton '),
(5, '4', 'Material', 'Soft Cotton '),
(6, '5', 'Use For', 'Store Baby Clothes'),
(7, '6', 'Material', 'Best Quality Wood'),
(8, '7', 'Material', 'Wood & Soft Cotton'),
(9, '8', 'Material', 'Wood & Soft Cotton'),
(10, '9', 'Battry Backup', '3000 mAh'),
(11, '10', 'Battery', '3000 mAh'),
(12, '11', 'ggg', 'ggg'),
(13, '12', 'Material', 'Wood & Soft Cotton'),
(14, '13', 'Material', 'Wood & Soft Cotton'),
(15, '14', 'Material', 'Best Quality Wood'),
(16, '15', 'Material', 'Best Quality Wood'),
(17, '16', 'Storage', '2 Step '),
(18, '17', 'Weight', '5 Kg'),
(19, '18', 'On/Off', 'Button'),
(20, '19', 'Material', 'steel'),
(21, '20', 'Material', 'Plastic'),
(22, '21', 'Shock Proof', ':- Yes'),
(23, '22', 'Material', 'Best Quality Wood'),
(24, '23', 'Material', 'Plastic'),
(25, '24', 'Type', 'Analog'),
(26, '25', 'Material', 'Plastic'),
(27, '26', 'Material', 'Best Quality Wood'),
(28, '27', 'Material', 'Best Quality Wood'),
(29, '28', 'Material', 'Soft Cotton'),
(30, '29', 'Material', 'Best Quality Plastic'),
(31, '30', 'Material', 'Best Quality Wood'),
(32, '31', 'Material', 'Best Quality Wood'),
(33, '32', 'Material', 'Best Quality Wood'),
(34, '33', 'Material', 'Best Quality Wood'),
(35, '34', 'Material', 'Plastic'),
(36, '35', 'Material', 'Plastic'),
(37, '36', 'Material', 'Metal'),
(38, '37', 'Material', 'Metal Body'),
(39, '38', 'Material', 'Metal Body'),
(40, '39', 'Material', 'Metal Body'),
(41, '40', 'Material', 'Metal Body'),
(42, '41', 'Material', 'Metal Body'),
(43, '42', 'Material', 'Plastic Body'),
(44, '43', 'Material', 'Plastic Body'),
(45, '44', 'Material', 'Metal Body'),
(46, '45', 'Material', 'Plastic Body'),
(47, '46', 'Material', 'Metal Body'),
(48, '47', 'Material', 'Metal Body'),
(49, '48', 'Material', 'Metal Body'),
(50, '49', 'Material', 'Metal Body'),
(51, '50', 'Material', 'Plastic Body'),
(52, '51', 'Material', 'Metal Body'),
(53, '52', 'Food Type', 'Veg'),
(54, '53', 'Food Type', 'Veg'),
(55, '54', 'Food Type', 'Veg'),
(56, '55', 'Food Type', 'Veg'),
(57, '56', 'Food Type', 'Veg'),
(58, '57', 'Material', 'Plastic Bottle'),
(59, '58', 'Material', 'Plastic Bottle'),
(60, '59', 'Material', 'Plastic Bottle'),
(61, '60', 'Material', 'Plastic Bottle'),
(62, '61', 'Packing', 'Plastic Packing'),
(63, '62', 'Food Type', 'Veg'),
(64, '63', 'Food Type', 'Veg'),
(65, '64', 'Food Type', 'Veg'),
(66, '65', 'Food Type', 'Veg'),
(67, '66', 'Food Type', 'Veg'),
(68, '67', 'Food Type', 'Veg'),
(69, '68', 'Food Type', 'Veg'),
(70, '69', 'Food Type', 'Veg'),
(71, '70', 'Material', 'Best Quality Cotton'),
(72, '71', 'Material', 'Best Quality Cotton'),
(73, '72', 'Material', 'Best Quality Cotton'),
(74, '73', 'Material', 'Best Quality Cotton'),
(75, '74', 'Material', 'Best Quality Cotton'),
(76, '75', 'Material', 'Best Quality Cotton'),
(77, '76', 'Material', 'Best Quality Cotton'),
(78, '77', 'Material', 'Best Quality Cotton'),
(79, '78', 'Material', 'Best Quality Cotton'),
(80, '79', 'Material', 'Best Quality Cotton'),
(81, '80', 'Material', 'Best Quality Cotton'),
(82, '81', 'Material', 'Best Quality Cotton'),
(83, '82', 'Material', 'Best Quality Cotton'),
(84, '83', 'Material', 'Best Quality Cotton'),
(85, '84', 'Material', 'Best Quality Cotton'),
(86, '85', 'Material', 'Fiber'),
(87, '86', 'Material', 'Fiber'),
(88, '87', 'Material', 'Fiber'),
(89, '88', 'Material', 'Metal Body'),
(90, '89', 'Material', 'Plastic Body'),
(91, '90', 'Material', 'Fiber'),
(92, '91', 'Material', 'Metal Body'),
(93, '92', 'Material', 'Metal Body'),
(94, '93', 'Material', 'Metal Body'),
(95, '94', 'Material', 'Metal Body'),
(96, '95', 'Material', 'Metal Body'),
(97, '96', 'Material', 'Metal Body'),
(98, '97', 'Material', 'Metal Body'),
(99, '98', 'Material', 'Metal Body'),
(100, '99', 'Material', 'Fiber'),
(101, '100', 'Material', 'Fiber'),
(102, '101', 'Material', 'Fiber'),
(103, '102', 'Material', 'Solid Glass'),
(104, '103', 'Material', 'Fiber'),
(105, '104', 'Use For', 'Charging'),
(106, '105', 'Material', 'Metal Body'),
(107, '106', 'Material', 'Fiber Body'),
(108, '107', 'Material', 'Fiber Body'),
(109, '108', 'Material', 'Fiber Body'),
(110, '109', 'Material', 'Fiber Body'),
(111, '110', 'Material', 'Fiber Body'),
(112, '111', 'Material', 'Fiber Body'),
(113, '112', 'Material', 'Fiber Body'),
(114, '113', 'Material', 'Metal Body'),
(115, '114', 'Material', 'Metal Body'),
(116, '115', 'Material', 'Metal Body'),
(117, '116', 'Material', 'Metal Body'),
(118, '117', 'Material', 'Metal Body'),
(119, '118', 'Material', 'Metal Body'),
(120, '119', 'Use For', 'Bathing'),
(121, '120', 'Material', 'cool Mint Liquid'),
(122, '121', 'Use For', 'Mouth Cleaning'),
(123, '122', 'Material', 'Plastic'),
(124, '123', 'Use For', 'Bathing'),
(125, '124', 'Use For', 'Bathing'),
(126, '125', 'Use For', 'Lips Color'),
(127, '126', 'Use For', 'Face Dust Cleaning'),
(128, '127', 'Use For', 'Face Glow'),
(129, '128', 'Packing', 'Glass Bottle'),
(130, '129', 'Packing', 'Plastic Round Box'),
(131, '130', 'Use For', 'Lips Shine'),
(132, '131', 'Packing', 'Aluminum Sprayer Bottle '),
(133, '132', 'Material', 'Aluminum Sprayer Bottle '),
(134, '133', 'Packing', 'Plastic & Aluminum Pack '),
(135, '134', 'Packing', 'Glass & Aluminum Sprayer Bottle '),
(136, '135', 'Packing', 'Aluminum Sprayer Bottle '),
(137, '136', 'Packing', 'Plastic Spray Bottle');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `attibutes`
--
ALTER TABLE `attibutes`
  ADD PRIMARY KEY (`pr_a_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ca_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`cu_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`or_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `reseller`
--
ALTER TABLE `reseller`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `specification`
--
ALTER TABLE `specification`
  ADD PRIMARY KEY (`pr_s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attibutes`
--
ALTER TABLE `attibutes`
  MODIFY `pr_a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `cu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `or_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `reseller`
--
ALTER TABLE `reseller`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `specification`
--
ALTER TABLE `specification`
  MODIFY `pr_s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
