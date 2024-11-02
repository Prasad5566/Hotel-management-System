-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 31, 2024 at 03:40 PM
-- Server version: 5.0.41
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `smart menu card`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `hotel_account`
-- 

CREATE TABLE `hotel_account` (
  `hotel_id` varchar(100) default NULL,
  `hotel_name` varchar(100) default NULL,
  `hotel_owner_name` varchar(100) default NULL,
  `hotel_password` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `hotel_account`
-- 

INSERT INTO `hotel_account` (`hotel_id`, `hotel_name`, `hotel_owner_name`, `hotel_password`) VALUES 
('H011', 'Kamat Hotel', 'Kiran R', 'Kamat@321'),
('H014', 'Shivani Restaurant', 'Sagar K', 'shivanii@143'),
('H025', 'Panjurli Hotel', 'Ravi M', 'panjurli@19'),
('H032', 'Brindavana Hotel', 'Vishal P', 'brindavana@h032'),
('H035', 'Amogham Hotel', 'Bharat D', 'bhaamogham@h035');

-- --------------------------------------------------------

-- 
-- Table structure for table `hotel_item_details`
-- 

CREATE TABLE `hotel_item_details` (
  `hotel_id` varchar(100) default NULL,
  `item_name` varchar(100) default NULL,
  `category` varchar(100) default NULL,
  `item_price` varchar(100) default NULL,
  `description` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `hotel_item_details`
-- 

INSERT INTO `hotel_item_details` (`hotel_id`, `item_name`, `category`, `item_price`, `description`) VALUES 
('H011', 'Masala Dosa', 'Breakfast', '100', 'dosa are crispy rice and lentil crepes stuffed with spiced and savory potato fillling'),
('H014', 'Egg Masala', 'Eggs', '120', 'succulent curry of boiled eggs,spruced up with pungent paste of tomatoes and splash of spice powders'),
('H025', 'Veg Fried Rice', 'Veg Rice', '80', 'classic veg fried rice of hearty mix of fresh vegetables,green onions,seasonings and spices'),
('H032', 'Aloo Gobi', 'Startor-snacks', '70', 'cauliflower and potato delicacy cooked in Indian spices'),
('H035', 'Mushroom Masala', 'Veg ', '120', 'mushrooms cooked with spices in thick gravy'),
('H096', 'idli', 'breakfast', '50 rupees', 'super'),
('H097', 'rice', 'lunch', '60 rupees', 'good'),
('H011', 'idli', 'm', 'mm', 'mmk'),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `orders`
-- 

CREATE TABLE `orders` (
  `item_name` varchar(100) default NULL,
  `category` varchar(100) default NULL,
  `quantity` varchar(100) default NULL,
  `user_name` varchar(100) default NULL,
  `user_mobile_no` varchar(100) default NULL,
  `table_no` varchar(100) default NULL,
  `ordered_dated` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `orders`
-- 

INSERT INTO `orders` (`item_name`, `category`, `quantity`, `user_name`, `user_mobile_no`, `table_no`, `ordered_dated`) VALUES 
('Masala Dosa', 'Breakfast', '5 plate', 'Shivanand', '8904557193', '4', '16/03/2023'),
('Egg Masala', 'Eggs', '3', 'Anil J', '8985457193', '2', '26/04/2023'),
('Veg Fried Rice', 'Veg Rice', '8 plate', 'Prajwal G', '9785446923', '5', '20/03/2023'),
('Gobi Manchuri', 'Startor-Snacks', '6 plate', 'Akash P', '9723446849', '7', '28/02/2023'),
('Mix Noodles', 'Noodles', '5', 'Prakash T', '9845142689', '9', '10/04/2023'),
('Egg Masala', '', '2', 'mbt', '9880698716', '11', '2024-03-15'),
('Masala Dosa', '', '2', 'umesh', '4512635263', '5', '2024-03-20'),
('Veg Fried Rice', 'Veg Rice', '2', 'kiran', '9880698564', '17', '2024-03-05'),
('Egg Masala', 'eggs', '7', 'prajwal', '7845123692', '20', '2024-03-21');

-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `userid` varchar(100) default NULL,
  `username` varchar(100) default NULL,
  `mobileno` varchar(100) default NULL,
  `emailid` varchar(100) default NULL,
  `password` varchar(100) default NULL,
  `city` varchar(100) default NULL,
  `postal_address` varchar(100) default NULL,
  `no_ofmembers` varchar(100) default NULL,
  `table_no` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` (`userid`, `username`, `mobileno`, `emailid`, `password`, `city`, `postal_address`, `no_ofmembers`, `table_no`) VALUES 
('003', 'kartik', '9552236417', 'kt@gmail.com', '1826', 'Bidar', 'Humanabad', '4', '5'),
('015', 'anup', '8546791236', 'anup@gmail.com', '8795', 'Belagavi', 'Ramnagar', '5', '8'),
('003', 'prasad', '4587623171', 'prdas@gmail.com', '5823', 'Bagalkot', 'ilkall', '6', '1'),
('022', 'anil', '9887623171', 'anil@gmail.com', '1246', 'Gadag', 'Kotumuchgi', '6', '5'),
('026', 'shivu', '9852136472', 'shiv@gmail.com', '7246', 'Belagavi', 'Sadalaga', '4', '5'),
('', '', '', '', '', '', '', '', ''),
('123', 'siddhant_mg', '07259838022', 'aniljaggal36@gmail.com', '7896', 'Belgaum', 'Athani', '12', '10'),
('520', 'prakash', '7845456921', 'prak@gmail.com', '123456', 'athani', 'belagavi', '4', '18');
