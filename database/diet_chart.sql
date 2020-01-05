-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2018 at 09:16 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diet_chart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `name` varchar(300) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `id` int(11) NOT NULL,
  `com_pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`name`, `email`, `password`, `phone`, `id`, `com_pass`) VALUES
('abhi', 'abhi@gmail.com', 'pass', '01686381037', 2, 'pass'),
('jeesa', 'jeesa@gmail.com', 'pass', '019484755060', 3, 'pass'),
('marsad', 'marsad@gmail.com', 'pass', '018487576545', 4, 'pass'),
('fahim', 'fahim@gmail.com', 'pass', '01686381037', 5, 'pass'),
('nirjhor ', 'nirjhor@gmail.com', 'pass', '09848556653', 6, 'pass'),
('salman', 'salman@gmail.com', 'pass', '03494378544', 7, 'pass'),
('momin', 'mominabhi@gmail.com', 'pass', '08743634843', 8, 'pass'),
('jessaKhala', 'jessakhala@gmail.com', 'pass', '0998544', 9, 'pass'),
('safiq', 'safiq@gmail.com', 'pass', '037346654754', 10, 'pass'),
('Md.Mominuz Zaman', 'mominuzZaman@gmail.com', 'pass', '01686381037', 11, 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `choice`
--

CREATE TABLE `choice` (
  `id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `calories` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choice`
--

INSERT INTO `choice` (`id`, `food_id`, `calories`, `name`, `image`) VALUES
(1, 22, 78, 'Chicken Egg', 'egg.jpg'),
(2, 23, 103, 'Cow Mlik', 'milk.jpg'),
(3, 26, 108, 'Banana', 'banana.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `daily_need`
--

CREATE TABLE `daily_need` (
  `id` int(11) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `meal_time` varchar(100) NOT NULL,
  `age` varchar(50) NOT NULL,
  `calories` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_need`
--

INSERT INTO `daily_need` (`id`, `sex`, `weight`, `height`, `meal_time`, `age`, `calories`) VALUES
(9, 'male', '20-25', '4.5-5', 'Lunch Meal', '8-10', 150),
(10, 'female', '10-15', '5-5.5', 'Lunch Meal', '10-15', 160);

-- --------------------------------------------------------

--
-- Table structure for table `food_item`
--

CREATE TABLE `food_item` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `meal_categories` varchar(100) NOT NULL,
  `food_categories` varchar(100) NOT NULL,
  `scale` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `calories` int(11) NOT NULL,
  `proteins` varchar(11) NOT NULL,
  `fats` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_item`
--

INSERT INTO `food_item` (`id`, `name`, `image`, `meal_categories`, `food_categories`, `scale`, `quantity`, `calories`, `proteins`, `fats`) VALUES
(21, 'Lemon', 'Lemon.jpg', 'Breakfast Meal', 'Vegetables', 'Piece', 1, 18, '0.6', ' 0.2'),
(22, 'Chicken Egg', 'egg.jpg', 'Breakfast Meal', 'Protein Foods', 'Piece', 1, 78, '6', '5'),
(23, 'Cow Mlik', 'milk.jpg', 'Breakfast Meal', 'Milks', 'Cup', 1, 103, '8', '2.4'),
(25, 'Rice', 'rice.jpg', 'Lunch Meal', 'Grains', 'Cup', 1, 206, '4.3', '0.4'),
(26, 'Banana', 'banana.jpg', 'Breakfast Meal', 'Fruits', 'Piece', 1, 108, '1.3', '0.4'),
(27, 'Mango', 'mango.jpg', 'Breakfast Meal', 'Fruits', 'Piece', 1, 201, '2.8', '1.3'),
(28, 'Strawberry', 'straw1.jpg', 'Breakfast Meal', 'Fruits', 'Cup', 1, 47, '0.4', '1'),
(29, 'Tea with Milk', 'tea.jpg', 'Breakfast Meal', 'Drinks', 'Cup', 1, 43, '0.6', '1.2'),
(33, 'Apple', 'apple1.png', 'Breakfast Meal', 'Fruits', 'Piece', 1, 95, '0.5', '0.3'),
(34, 'Beef', 'beef.jpg', 'Lunch Meal', 'Protein Foods', 'Gram', 100, 250, '23', '14'),
(36, 'Orange', 'orange.jpeg', 'Breakfast Meal', 'Fruits', 'Piece', 1, 45, '0.9', '0.1'),
(37, 'Chicken Meat', 'chiken.jpg', 'Lunch Meal', 'Protein Foods', 'Gram', 100, 229, '33', '17'),
(39, 'Grapes(angur)', 'Grapes.jpg', 'Breakfast Meal', 'Fruits', 'Cup', 1, 62, '0.6', '0.3'),
(40, 'Peach', 'peach.jpg', 'Breakfast Meal', 'Fruits', 'Piece', 1, 59, ' 1.4', '0.4'),
(41, 'Pulse(Dal)', 'pulse.jpg', 'Dinner Meal', 'Curry', 'Cup', 1, 118, '8', '0.6'),
(42, 'Pineapple', 'pineapple.jpg', 'Breakfast Meal', 'Fruits', 'Gram', 100, 50, '0.7', '0.2'),
(43, 'Watermelon', 'Watermelon.png', 'Breakfast Meal', 'Fruits', 'Gram', 100, 30, '0.7', '0.4'),
(44, 'Papaya(pepe)', 'Pappaya.jpg', 'Breakfast Meal', 'Fruits', 'Gram', 100, 43, '0.7', '0.4'),
(45, 'Pomegranate', 'pomegranate.jpg', 'Breakfast Meal', 'Fruits', 'Gram', 100, 82, '1.5', '1'),
(46, 'Coconut', 'coconut.jpg', 'Breakfast Meal', 'Fruits', 'Gram', 100, 340, '2.7', '27'),
(48, 'Date palm(Khejur)', 'Dates.jpg', 'Breakfast Meal', 'Fruits', 'Piece', 1, 20, '0.2', '0'),
(49, 'Coconut milk', 'coconut-milk.jpg', 'Dinner Meal', 'Milks', 'Cup', 1, 113, '0.3', '3.6'),
(50, 'Lychee', 'litchi.jpg', 'Breakfast Meal', 'Fruits', 'Piece', 1, 6, '0.1', '0'),
(51, 'Gooseberry', 'gooseberries.jpg', 'Breakfast Meal', 'Fruits', 'Cup', 1, 66, '1.3', '0.9'),
(52, 'Carambola', 'carambola.jpg', 'Breakfast Meal', 'Fruits', 'Piece', 1, 28, '0.9', '0.3'),
(53, 'Cherimoya', 'annona-cherimola-17-el-bumpo.jpg', 'Breakfast Meal', 'Fruits', 'Piece', 1, 176, '3.7', '1.6'),
(54, 'Guava', 'Guava.jpg', 'Breakfast Meal', 'Fruits', 'Piece', 1, 38, '1.4', '0.5'),
(55, 'Ruti-Bread', 'roti-bread.jpg', 'Breakfast Meal', 'Grains', 'Piece', 1, 65, '0.1', '3.1'),
(56, 'Butter', 'butter.jpg', 'Breakfast Meal', 'Dairy Food', 'Tsp', 1, 15, '0.1', '12'),
(57, ' Samosa', 'samosa.jpg', 'Snacks Meal', 'Snacks', 'Piece', 1, 200, '3', '12'),
(58, 'Cheese', 'cheese.jpg', 'Breakfast Meal', 'Dairy Food', 'Slice', 1, 113, '9', '7'),
(59, 'Ice cream', 'ice-cream.jpg', 'Snacks Meal', 'Dairy Food', 'Cup', 1, 137, '2.3', '7'),
(60, 'Cabbage', 'Cabbage.jpg', 'Dinner Meal', 'Vegetables', 'Gram', 100, 25, '1.3', '0.1'),
(61, 'Carrot', 'Carrot.jpg', 'Breakfast Meal', 'Vegetables', 'Piece', 1, 25, '0.1', '0.6'),
(63, 'Cauliflower', 'cauliflower.jpg', 'Dinner Meal', 'Vegetables', 'Gram', 100, 25, '1.3', '0.3'),
(64, 'Cucumber', 'Cucumber.jpg', 'All Meal', 'Vegetables', 'Gram', 100, 16, '0.1', '0.3'),
(65, 'Pea', 'Peas.jpg', 'Breakfast Meal', 'Vegetables', 'Cup', 1, 118, '8', '0.6'),
(66, 'Potato', 'potatoes.jpg', 'Dinner Meal', 'Vegetables', 'Gram', 100, 77, '2', '0.1'),
(67, 'Tomato', 'tomato.jpg', 'Dinner Meal', 'Vegetables', 'Gram', 100, 18, '0.9', '0.2'),
(68, 'Cherry', 'cherry.jpg', 'Breakfast Meal', 'Fruits', 'Cup', 1, 51, '1', '0.3'),
(69, 'Peanut', 'peaNuts.jpg', 'Breakfast Meal', 'Protein Foods', 'Gram', 50, 268, '7', '14'),
(70, 'Coffee', 'coffee.jpg', 'Breakfast Meal', 'Drinks', 'Cup', 1, 50, '1.3', '0.6'),
(71, 'Bread', 'white-bread.jpg', 'Breakfast Meal', 'Dairy Food', 'Slice', 1, 79, '1.4', '1'),
(72, 'Cornflakes with milk', 'cornflakes.jpg', 'Breakfast Meal', 'Dairy Food', 'Bowl', 1, 172, '1.3', '2,4'),
(73, 'Chocolate Biscuits', 'biscuits.jpg', 'Snacks Meal', 'Dairy Food', 'Piece', 1, 84, '1.2', '4.1'),
(74, 'Wheat Bran', 'wheat-bran-3639645.jpg', 'Breakfast Meal', 'Grains', 'Cup', 1, 231, '16', '7'),
(75, 'Ghee', 'download.jpg', 'Breakfast Meal', 'Dairy Food', 'Tsp', 1, 100, '0.4', '11'),
(77, 'Buffalo Milk', 'milk.jpg', 'Breakfast Meal', 'Milks', 'Cup', 1, 237, '9.15', '16.8'),
(78, 'Suger', 'creatine.jpg', 'All Meal', 'Grains', 'Tsp', 1, 16, '0', '0'),
(79, 'Broccoli', 'Broccoli.jpg', 'Dinner Meal', 'Vegetables', 'Gram', 100, 34, '0.5', '4.2'),
(80, 'Brinjal', 'Eggplant.jpg', 'Dinner Meal', 'Vegetables', 'Gram', 100, 24, '0.8', '0.1'),
(81, 'Green bean', '2549_1.jpg', 'Dinner Meal', 'Vegetables', 'Gram', 100, 31, '1.8', '0.1'),
(82, 'Lettuce', 'lettuce.jpg', 'Dinner Meal', 'Vegetables', 'Gram', 100, 14, '0.5', '0.1'),
(83, 'Mushroom', 'mushrooms.jpg', 'Breakfast Meal', 'Vegetables', 'Piece', 1, 4, '0.1', '0.6'),
(84, 'Onion', 'Onion.jpg', 'Dinner Meal', 'Vegetables', 'Piece', 1, 44, '1.2', '0.1'),
(85, 'Spinach', 'spinach.jpg', 'Dinner Meal', 'Vegetables', 'Cup', 1, 7, '0.9', '0.1'),
(86, 'Tomato Juice', 'fresh-tomato-juice-recipe.jpg', 'Breakfast Meal', 'Drinks', 'Cup', 1, 42, '1.8', '0.1'),
(87, 'Wheat Flour', '132.wheat-atta2.jpg', 'All Meal', 'Grains', 'Gram', 100, 364, '10', '1'),
(88, 'Noodle', '1371595267540.jpeg', 'Snacks Meal', 'Snacks', 'Cup', 1, 221, '7', '3.3'),
(89, 'Bitter Melon', 'bitter-gourd.jpg', 'Dinner Meal', 'Vegetables', 'Gram', 100, 35, '2.1', '0.1'),
(90, 'Winter Melon', 'winter-melon.jpg', 'Dinner Meal', 'Vegetables', 'Gram', 100, 13, '0.4', '0.2'),
(91, 'Capsicum', 'original1.1572422.1.jpg', 'All Meal', 'Vegetables', 'Piece', 1, 18, '0.9', '0.1'),
(92, 'Celeriac', 'celeriac.jpg', 'Breakfast Meal', 'Vegetables', 'Gram', 100, 42, '1.5', '0.3'),
(93, 'Begun Bhaja', 'begun_bhaja.JPG', 'Dinner Meal', 'Curry', 'Piece', 1, 150, '2', '8'),
(94, 'Alu Posto', 'aloo-posto-recipe-2.jpg', 'Dinner Meal', 'Curry', 'Cup', 1, 226, '4', '3'),
(95, 'Kanchkolar Kofta', 'picture-390.jpg', 'Dinner Meal', 'Curry', 'Cup', 1, 256, '27', '11'),
(96, 'Luchi', 'luchi.jpg', 'Snacks Meal', 'Snacks', 'Piece', 1, 140, '10', '0'),
(97, 'Alur Dum', 'dum-aloo.jpg', 'Snacks Meal', 'Snacks', 'Cup', 1, 164, '7', '4'),
(98, 'Chingri Macher Malaikari', 'chingri.malai.curry_620.jpg', 'Lunch Meal', 'Protein Foods', 'Cup', 1, 134, '14.6', '6.3'),
(99, 'Chital Macher Jhol', 'Chital-Macher-Jhal.jpg', 'Dinner Meal', 'Protein Foods', 'Piece', 1, 204, '14', '7'),
(100, 'Sorshe Ilish', 'shorsheilish.jpg', 'Lunch Meal', 'Protein Foods', 'Piece', 1, 450, '17.1', '38.4'),
(101, 'Chicken Curry', 'p1010774.jpg', 'Lunch Meal', 'Protein Foods', 'Gram', 100, 285, '26', '13'),
(102, 'Muri ghonto', 'maxresdefault.jpg', 'Dinner Meal', 'Protein Foods', 'Cup', 1, 150, '0', '0'),
(103, 'Mutton', 'mutton.jpg', 'Lunch Meal', 'Protein Foods', 'Gram', 100, 294, '25', '21'),
(104, 'Mutton Rezala', 'DSC_0505.JPG', 'Lunch Meal', 'Protein Foods', 'Cup', 1, 256, '20', '13'),
(105, 'Beef Curry ', 'cat-638-720-1.jpg', 'Lunch Meal', 'Protein Foods', 'Gram', 100, 434, '30.59', '24.2'),
(106, 'Sondesh', 'bengali-sweets-story_650+_041615101029.jpg', 'Snacks Meal', 'Dairy Food', 'Gram', 50, 147, '3', '7'),
(107, 'Rasgulla', 'hqdefault.jpg', 'Snacks Meal', 'Dairy Food', 'Gram', 50, 100, '4', '1'),
(108, 'Chamcham', 'maxresdefault (1).jpg', 'Snacks Meal', 'Dairy Food', 'Gram', 50, 175, '1', '0'),
(109, 'Misti Doi', 'mishti-doi.jpg', 'Snacks Meal', 'Dairy Food', 'Gram', 100, 172, '4', '5'),
(110, 'Pizza', 'pizza.png', 'Snacks Meal', 'Snacks', 'Slice', 1, 285, '12', '10'),
(111, 'Hamburger', 'images.jpg', 'Snacks Meal', 'Snacks', 'Piece', 1, 340, '20', '17');

-- --------------------------------------------------------

--
-- Table structure for table `limit_chart`
--

CREATE TABLE `limit_chart` (
  `id` int(11) NOT NULL,
  `age_lower` int(11) NOT NULL,
  `age_upper` int(11) NOT NULL,
  `category` varchar(500) NOT NULL,
  `piece` float NOT NULL,
  `gram` int(11) NOT NULL,
  `slice` int(11) NOT NULL,
  `cup` float NOT NULL,
  `bowl` float NOT NULL,
  `tsp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `limit_chart`
--

INSERT INTO `limit_chart` (`id`, `age_lower`, `age_upper`, `category`, `piece`, `gram`, `slice`, `cup`, `bowl`, `tsp`) VALUES
(1, 1, 2, 'vagetable', 2, 93, 0, 0.25, 0, 0),
(2, 1, 2, 'fruits', 0.5, 75, 1, 0.5, 0, 0),
(3, 1, 2, 'milks', 0, 0, 0, 1, 0, 0),
(4, 1, 2, 'drinks', 0, 0, 0, 1, 0, 0),
(5, 1, 2, 'curry', 1, 0, 0, 0.5, 0.25, 0),
(6, 1, 2, 'protein foods', 0.5, 15, 0, 0.5, 0, 0),
(7, 1, 2, 'snacks', 0.25, 70, 1, 1, 0.5, 0),
(8, 1, 2, 'grains', 0, 70, 0, 0.5, 0.25, 0),
(9, 1, 2, 'dairy food', 0.5, 25, 1, 0.5, 0.25, 1),
(10, 3, 6, 'vegetables', 3, 100, 0, 0.5, 0, 0),
(11, 3, 6, 'fruits', 1, 90, 0, 0.75, 0, 0),
(12, 3, 6, 'milks', 0, 0, 0, 1, 0, 0),
(13, 3, 6, 'drinks', 0, 0, 0, 1, 0, 0),
(14, 3, 6, 'curry', 2, 0, 0, 0.75, 0.5, 0),
(15, 3, 6, 'protein foods', 1, 60, 0, 0.75, 0, 0),
(16, 3, 6, 'snacks', 0.5, 85, 2, 1, 0.75, 0),
(17, 3, 6, 'grains', 0, 85, 0, 1, 0.5, 0),
(18, 3, 6, 'dairy food', 1, 40, 2, 0.75, 0.5, 2),
(19, 7, 19, 'vegetables', 3, 110, 0, 1, 0, 0),
(20, 7, 19, 'fruits', 1, 107, 3, 1, 0, 0),
(21, 7, 19, 'milks', 0, 0, 0, 1.5, 0, 0),
(22, 7, 19, 'drinks', 0, 0, 0, 1, 0, 0),
(23, 7, 19, 'curry', 3, 0, 0, 1, 0.75, 0),
(24, 7, 19, 'protein foods', 1.5, 150, 0, 1, 0, 0),
(25, 7, 19, 'snacks', 1, 100, 2, 1.5, 1, 0),
(26, 7, 19, 'grains', 0, 100, 0, 1.5, 1, 0),
(27, 7, 19, 'dairy food', 2, 50, 2, 1, 0.75, 2),
(28, 20, 80, 'vegetables', 3, 110, 0, 1, 0, 0),
(29, 20, 80, 'fruits', 1, 107, 3, 1, 0, 0),
(30, 20, 80, 'milks', 0, 0, 0, 1.5, 0, 0),
(32, 20, 80, 'protein foods', 2, 220, 0, 1, 0, 0),
(33, 20, 80, 'snacks', 1, 100, 2, 1.5, 1, 0),
(34, 20, 80, 'grains', 0, 100, 0, 2, 1, 0),
(35, 20, 80, 'dairy food', 2, 50, 2, 1, 1, 2),
(36, 20, 80, 'drinks', 0, 0, 0, 1, 0, 0),
(37, 20, 80, 'curry', 3, 0, 0, 1.5, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id` int(11) NOT NULL,
  `selected_id` int(11) NOT NULL,
  `selected_name` varchar(100) NOT NULL,
  `selected_calories` int(11) NOT NULL,
  `selected_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`id`, `selected_id`, `selected_name`, `selected_calories`, `selected_image`) VALUES
(15, 15, 'nirjor', 50, 'berry1600.png'),
(16, 16, 'abhi', 50, 'apple.png'),
(17, 17, 'nsh', 40, 'produce.png'),
(18, 16, 'abhi', 50, 'apple.png'),
(19, 16, 'abhi', 50, 'apple.png'),
(20, 17, 'nsh', 40, 'produce.png'),
(21, 17, 'nsh', 40, 'produce.png'),
(22, 16, 'abhi', 50, 'apple.png'),
(23, 16, 'abhi', 50, 'apple.png'),
(24, 17, 'nsh', 40, 'produce.png'),
(25, 19, 'js', 60, ''),
(26, 19, 'js', 60, ''),
(27, 16, 'abhi', 50, 'apple.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `weight` float NOT NULL,
  `height` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `name`, `email`, `user_name`, `password`, `age`, `gender`, `weight`, `height`) VALUES
(2, 'Md. Mominuz Zaman', 'momin@gmail.com', 'abhi', 'pass', 24, 'male', 58, 5.9),
(4, 'Md. Mominuz Zaman', 'momin@gmail.com', 'abhi', 'pass', 24, 'male', 58, 5.9),
(6, 'Md. Mominuz Zaman', 'momin@gmail.com', 'abhi', 'pass', 24, 'male', 58, 5.9),
(7, 'Md. Mominuz Zaman', 'momin@gmail.com', 'abhi', 'pass', 24, 'male', 58, 5.9),
(8, 'Md. Mominuz Zaman', 'momin@gmail.com', 'abhi', 'pass', 24, 'male', 58, 5.9),
(9, 'Md. Mominuz Zaman', 'momin@gmail.com', 'abhi', 'pass', 24, 'male', 58, 5.9),
(10, 'Md. Mominuz Zaman', 'momin@gmail.com', 'abhi', 'pass', 24, 'male', 58, 5.9),
(11, 'Md. Mominuz Zaman', 'momin@gmail.com', 'abhi', 'pass', 24, 'male', 58, 5.9),
(12, 'Md. Mominuz Zaman', 'momin@gmail.com', 'abhi', 'pass', 24, 'male', 58, 5.9),
(13, 'Md. Mominuz Zaman', 'momin@gmail.com', 'abhi', 'pass', 24, 'male', 58, 5.9),
(14, 'Md. Mominuz Zaman', 'momin@gmail.com', 'abhi', 'pass', 24, 'male', 58, 5.9),
(15, 'Md. Mominuz Zaman', 'momin@gmail.com', 'abhi', 'pass', 24, 'male', 58, 5.9),
(16, 'Md.Mominuz Zaman', 'mominabhi@gmail.com', 'abhi', 'pass', 24, 'male', 57, 5.9),
(17, 'Md.Mominuz Zaman', 'mominuzZaman@gmail.com', 'momin', 'pass', 24, 'male', 57, 5.9);

-- --------------------------------------------------------

--
-- Table structure for table `user_input`
--

CREATE TABLE `user_input` (
  `id` int(11) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `weight` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `meal_time` varchar(100) NOT NULL,
  `height_inch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_input`
--

INSERT INTO `user_input` (`id`, `sex`, `weight`, `age`, `height`, `meal_time`, `height_inch`) VALUES
(7, 'female', 4, 33, 2, 'Dinner Meal', 4),
(27, 'female', 0, 9, 0, 'Breakfast Meal', 0),
(28, 'female', 0, 8, 0, 'Breakfast Meal', 0),
(29, 'female', 0, 10, 0, 'Breakfast Meal', 0),
(30, 'female', 0, 8, 0, 'Breakfast Meal', 0),
(31, 'female', 0, 8, 0, 'Breakfast Meal', 0),
(32, 'female', 0, 8, 0, 'Breakfast Meal', 0),
(33, 'female', 0, 8, 0, 'Breakfast Meal', 0),
(34, '', 0, 9, 0, 'Breakfast Meal', 0),
(35, 'female', 0, 9, 0, 'Breakfast Meal', 0),
(36, 'female', 0, 9, 0, 'Breakfast Meal', 0),
(37, 'female', 0, 8, 0, 'Breakfast Meal', 0),
(38, 'female', 0, 9, 0, 'Breakfast Meal', 0),
(39, 'female', 0, 9, 0, 'Breakfast Meal', 0),
(40, 'female', 0, 9, 0, 'Breakfast Meal', 0),
(41, 'female', 0, 9, 0, 'Breakfast Meal', 0),
(42, 'female', 0, 0, 0, 'Breakfast Meal', 0),
(43, 'female', 0, 9, 0, 'Breakfast Meal', 0),
(44, 'female', 0, 9, 0, 'Breakfast Meal', 0),
(45, 'female', 0, 9, 0, 'Breakfast Meal', 0),
(46, 'female', 0, 11, 0, 'Breakfast Meal', 0),
(47, 'female', 6, 3, 3, 'Breakfast Meal', 0),
(48, 'male', 4, 1, 2, 'Lunch Meal', 0),
(51, 'female', 10, 5, 4, 'Dinner Meal', 0),
(53, 'male', 5, 1, 2, 'Lunch Meal', 0),
(54, 'male', 4, 1, 2, 'Lunch Meal', 0),
(55, 'female', 0, 0, 0, 'Breakfast Meal', 0),
(56, 'female', 6, 2, 3, 'Breakfast Meal', 0),
(57, '', 0, 0, 0, 'Breakfast Meal', 0),
(58, '', 0, 0, 0, 'Breakfast Meal', 0),
(59, '', 4, 3, 4, 'Lunch Meal', 4),
(60, 'female', 4, 3, 4, 'Lunch Meal', 4),
(61, 'female', 4, 3, 4, 'Lunch Meal', 4),
(62, 'female', 4, 3, 4, 'Lunch Meal', 4),
(63, 'female', 4, 3, 4, 'Lunch Meal', 4),
(64, 'male', 20, 8, 4, 'Lunch Meal', 0),
(65, 'male', 25, 10, 5, 'Lunch Meal', 0),
(66, 'male', 25, 10, 5, 'Lunch Meal', 0),
(67, 'male', 25, 10, 5, 'Lunch Meal', 0),
(68, 'male', 25, 10, 5, 'Lunch Meal', 0),
(69, 'male', 25, 10, 5, 'Lunch Meal', 0),
(70, 'male', 25, 10, 5, 'Lunch Meal', 0),
(71, '', 0, 0, 0, '', 0),
(72, '', 0, 0, 0, '', 0),
(73, 'male', 25, 10, 5, 'Lunch Meal', 0),
(74, 'male', 25, 10, 5, 'Lunch Meal', 0),
(75, 'male', 25, 10, 5, 'Lunch Meal', 0),
(76, 'male', 25, 10, 5, 'Lunch Meal', 0),
(77, 'male', 25, 10, 5, 'Lunch Meal', 0),
(78, 'male', 20, 8, 5, 'Lunch Meal', 0),
(79, 'male', 15, 5, 4, 'Lunch Meal', 0),
(80, 'male', 20, 8, 5, 'Lunch Meal', 0),
(81, 'male', 15, 5, 4, 'Lunch Meal', 0),
(82, 'male', 20, 8, 5, 'Lunch Meal', 0),
(83, 'male', 15, 5, 4, 'Lunch Meal', 0),
(84, 'male', 25, 10, 5, 'Lunch Meal', 0),
(85, 'male', 20, 8, 5, 'Lunch Meal', 0),
(86, 'male', 15, 5, 4, 'Lunch Meal', 0),
(87, 'male', 25, 10, 5, 'Lunch Meal', 0),
(88, 'male', 25, 10, 5, 'Lunch Meal', 0),
(89, 'male', 20, 8, 5, 'Lunch Meal', 0),
(90, 'male', 15, 5, 4, 'Lunch Meal', 0),
(91, 'male', 25, 10, 5, 'Lunch Meal', 0),
(92, 'male', 20, 8, 5, 'Lunch Meal', 0),
(93, 'male', 15, 5, 4, 'Lunch Meal', 0),
(94, 'male', 25, 10, 5, 'Lunch Meal', 0),
(95, 'male', 20, 8, 5, 'Lunch Meal', 0),
(96, 'male', 15, 5, 4, 'Lunch Meal', 0),
(97, 'male', 25, 10, 5, 'Lunch Meal', 0),
(98, 'male', 20, 8, 5, 'Lunch Meal', 0),
(99, 'male', 15, 5, 4, 'Lunch Meal', 0),
(100, 'male', 25, 10, 5, 'Lunch Meal', 0),
(101, 'male', 20, 8, 5, 'Lunch Meal', 0),
(102, 'male', 25, 10, 5, 'Lunch Meal', 0),
(103, 'male', 20, 8, 5, 'Lunch Meal', 0),
(104, 'male', 15, 5, 4, 'Lunch Meal', 0),
(105, 'male', 25, 10, 5, 'Lunch Meal', 0),
(106, 'male', 20, 8, 5, 'Lunch Meal', 0),
(107, 'male', 15, 5, 4, 'Lunch Meal', 0),
(108, 'male', 10, 4, 4, 'Lunch Meal', 0),
(109, 'male', 9, 4, 3, 'Lunch Meal', 0),
(110, 'male', 9, 4, 3, 'Lunch Meal', 0),
(111, 'male', 9, 4, 3, 'Lunch Meal', 0),
(112, 'male', 9, 4, 3, 'Lunch Meal', 0),
(113, 'male', 25, 9, 5, 'Lunch Meal', 0),
(114, 'male', 25, 9, 5, 'Lunch Meal', 0),
(115, 'male', 20, 8, 5, 'Lunch Meal', 0),
(116, 'male', 15, 5, 4, 'Lunch Meal', 0),
(117, 'male', 10, 4, 4, 'Lunch Meal', 0),
(118, 'male', 9, 4, 3, 'Lunch Meal', 0),
(119, 'male', 25, 9, 5, 'Lunch Meal', 0),
(120, 'male', 20, 8, 5, 'Lunch Meal', 0),
(121, 'male', 20, 8, 5, 'Lunch Meal', 0),
(122, 'male', 25, 9, 5, 'Lunch Meal', 0),
(123, 'male', 25, 9, 5, 'Lunch Meal', 0),
(124, 'male', 25, 9, 5, 'Lunch Meal', 0),
(125, 'male', 20, 8, 5, 'Lunch Meal', 0),
(126, 'male', 20, 8, 5, 'Lunch Meal', 0),
(127, 'male', 25, 9, 5, 'Lunch Meal', 0),
(128, 'male', 25, 9, 5, 'Lunch Meal', 0),
(129, 'male', 25, 9, 5, 'Lunch Meal', 0),
(130, 'male', 20, 8, 5, 'Lunch Meal', 0),
(131, 'male', 15, 5, 4, 'Lunch Meal', 0),
(132, 'male', 15, 5, 4, 'Lunch Meal', 0),
(133, 'male', 25, 9, 5, 'Lunch Meal', 0),
(134, 'male', 20, 8, 5, 'Lunch Meal', 0),
(135, 'male', 15, 5, 4, 'Lunch Meal', 0),
(136, 'male', 10, 4, 4, 'Lunch Meal', 0),
(137, 'male', 25, 9, 5, 'Lunch Meal', 0),
(138, 'male', 20, 8, 5, 'Lunch Meal', 0),
(139, 'male', 25, 9, 5, 'Lunch Meal', 0),
(140, 'male', 20, 8, 5, 'Lunch Meal', 0),
(141, 'male', 15, 5, 4, 'Lunch Meal', 0),
(142, 'male', 20, 8, 5, 'Lunch Meal', 0),
(143, 'male', 15, 5, 4, 'Lunch Meal', 0),
(144, 'male', 10, 4, 4, 'Lunch Meal', 0),
(145, 'male', 15, 5, 4, 'Lunch Meal', 0),
(146, 'male', 10, 4, 4, 'Lunch Meal', 0),
(147, 'male', 25, 9, 5, 'Lunch Meal', 0),
(148, 'male', 20, 8, 5, 'Lunch Meal', 0),
(149, 'male', 15, 5, 4, 'Lunch Meal', 0),
(150, 'male', 25, 9, 5, 'Lunch Meal', 0),
(151, 'male', 20, 8, 5, 'Lunch Meal', 0),
(152, 'male', 15, 5, 4, 'Lunch Meal', 0),
(153, 'male', 25, 9, 5, 'Lunch Meal', 0),
(154, 'male', 20, 8, 5, 'Lunch Meal', 0),
(155, 'male', 15, 5, 4, 'Lunch Meal', 0),
(156, 'male', 25, 9, 5, 'Lunch Meal', 0),
(157, 'male', 20, 8, 5, 'Lunch Meal', 0),
(158, 'male', 15, 5, 4, 'Lunch Meal', 0),
(159, 'male', 20, 8, 5, 'Lunch Meal', 0),
(160, 'male', 15, 5, 4, 'Lunch Meal', 0),
(161, 'male', 15, 5, 4, 'Lunch Meal', 0),
(162, 'male', 10, 4, 4, 'Lunch Meal', 0),
(163, 'male', 25, 9, 5, 'Lunch Meal', 0),
(164, 'male', 25, 9, 5, 'Lunch Meal', 0),
(165, 'male', 20, 8, 5, 'Lunch Meal', 0),
(166, 'male', 25, 9, 5, 'Lunch Meal', 0),
(167, 'male', 20, 8, 5, 'Lunch Meal', 0),
(168, 'male', 15, 5, 4, 'Lunch Meal', 0),
(169, 'male', 10, 4, 4, 'Lunch Meal', 0),
(170, 'male', 25, 9, 5, 'Lunch Meal', 0),
(171, 'male', 25, 9, 5, 'Lunch Meal', 0),
(172, 'male', 25, 9, 5, 'Lunch Meal', 0),
(173, 'male', 20, 8, 5, 'Lunch Meal', 0),
(174, 'male', 25, 9, 5, 'Lunch Meal', 0),
(175, 'male', 20, 8, 5, 'Lunch Meal', 0),
(176, 'male', 25, 9, 5, 'Lunch Meal', 0),
(177, 'male', 20, 8, 5, 'Lunch Meal', 0),
(178, 'male', 15, 5, 4, 'Lunch Meal', 0),
(179, 'male', 25, 9, 5, 'Lunch Meal', 0),
(180, 'male', 20, 8, 5, 'Lunch Meal', 0),
(181, 'male', 25, 9, 5, 'Lunch Meal', 0),
(182, 'male', 20, 8, 5, 'Lunch Meal', 0),
(183, 'male', 25, 9, 5, 'Lunch Meal', 0),
(184, 'male', 25, 9, 5, 'Lunch Meal', 0),
(185, 'male', 20, 8, 5, 'Lunch Meal', 0),
(186, 'male', 20, 8, 5, 'Lunch Meal', 0),
(187, 'male', 15, 5, 4, 'Lunch Meal', 0),
(188, 'male', 10, 4, 4, 'Lunch Meal', 0),
(189, 'male', 25, 9, 5, 'Lunch Meal', 0),
(190, 'male', 20, 8, 5, 'Lunch Meal', 0),
(191, 'male', 15, 5, 4, 'Lunch Meal', 0),
(192, 'male', 10, 4, 4, 'Lunch Meal', 0),
(193, 'male', 9, 4, 3, 'Lunch Meal', 0),
(194, 'male', 9, 4, 3, 'Lunch Meal', 0),
(195, 'male', 25, 9, 5, 'Lunch Meal', 0),
(196, 'male', 20, 8, 5, 'Lunch Meal', 0),
(197, 'male', 25, 9, 5, 'Lunch Meal', 0),
(198, 'male', 20, 8, 5, 'Lunch Meal', 0),
(199, 'male', 25, 9, 5, 'Lunch Meal', 0),
(200, 'male', 20, 8, 5, 'Lunch Meal', 0),
(201, 'male', 25, 9, 5, 'Lunch Meal', 0),
(202, 'male', 20, 8, 5, 'Lunch Meal', 0),
(203, 'male', 25, 9, 5, 'Lunch Meal', 0),
(204, 'male', 20, 8, 5, 'Lunch Meal', 0),
(205, 'male', 15, 5, 4, 'Lunch Meal', 0),
(206, 'male', 22, 9, 5, 'Lunch Meal', 0),
(207, 'male', 20, 8, 5, 'Lunch Meal', 0),
(208, 'male', 23, 9, 5, 'Lunch Meal', 0),
(209, 'male', 20, 8, 5, 'Lunch Meal', 0),
(210, 'male', 15, 5, 4, 'Lunch Meal', 0),
(211, 'male', 15, 5, 4, 'Lunch Meal', 0),
(212, 'male', 10, 4, 4, 'Lunch Meal', 0),
(213, 'male', 22, 9, 5, 'Lunch Meal', 0),
(214, 'male', 22, 9, 5, 'Lunch Meal', 0),
(215, 'male', 20, 8, 5, 'Lunch Meal', 0),
(216, 'male', 23, 9, 5, 'Lunch Meal', 0),
(217, 'male', 20, 8, 5, 'Lunch Meal', 0),
(218, 'male', 23, 9, 5, 'Lunch Meal', 0),
(219, 'male', 23, 9, 5, 'Lunch Meal', 0),
(220, 'male', 20, 8, 5, 'Lunch Meal', 0),
(221, 'male', 20, 8, 5, 'Lunch Meal', 0),
(222, 'male', 15, 5, 4, 'Lunch Meal', 0),
(223, 'male', 23, 9, 5, 'Lunch Meal', 0),
(224, 'male', 20, 8, 5, 'Lunch Meal', 0),
(225, 'male', 23, 9, 5, 'Lunch Meal', 0),
(226, 'male', 23, 9, 5, 'Lunch Meal', 0),
(227, 'male', 20, 8, 5, 'Lunch Meal', 0),
(228, 'male', 23, 9, 5, 'Lunch Meal', 0),
(229, '', 0, 0, 0, 'Breakfast Meal', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choice`
--
ALTER TABLE `choice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily_need`
--
ALTER TABLE `daily_need`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_item`
--
ALTER TABLE `food_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `limit_chart`
--
ALTER TABLE `limit_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_input`
--
ALTER TABLE `user_input`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `choice`
--
ALTER TABLE `choice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `daily_need`
--
ALTER TABLE `daily_need`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `food_item`
--
ALTER TABLE `food_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `limit_chart`
--
ALTER TABLE `limit_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user_input`
--
ALTER TABLE `user_input`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
