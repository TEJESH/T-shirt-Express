-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2013 at 04:30 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `Credit_Card_Details`
--

CREATE TABLE IF NOT EXISTS `Credit_Card_Details` (
  `Credit_Username` varchar(200) NOT NULL,
  `Credit_card_Number` varchar(200) NOT NULL,
  `Card_Type` varchar(50) NOT NULL,
  `CVV Number` int(11) NOT NULL,
  `Expiry Date` date NOT NULL,
  `UserID` varchar(10) NOT NULL,
  PRIMARY KEY (`Credit_Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE IF NOT EXISTS `Customer` (
  `UserID` int(10) NOT NULL AUTO_INCREMENT,
  `Password` varchar(200) NOT NULL,
  `First_Name` varchar(200) NOT NULL,
  `Last_Name` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Zip` int(10) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Email_Address` varchar(100) NOT NULL,
  `Phone_Number` int(50) NOT NULL,
  `Usertype` varchar(200) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`UserID`, `Password`, `First_Name`, `Last_Name`, `Address`, `City`, `Zip`, `State`, `Email_Address`, `Phone_Number`, `Usertype`) VALUES
(1, 'xdr54esz', 'tejesh', 'agrawal', '', '', 0, '', 'tejeshagrawal@gmail.com', 0, ''),
(2, '', '', '', '', '', 0, '', '', 0, ''),
(3, 'qwerty', 'Vedant', 'Sharma', '', '', 0, '', 'vedu@gmail.com', 0, ''),
(4, 'ffff', 'ffff', 'ffff', '', '', 0, '', 'ffff@gmail.com', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `Order_Details`
--

CREATE TABLE IF NOT EXISTS `Order_Details` (
  `OrderID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(10) NOT NULL,
  `EmailID` varchar(200) NOT NULL,
  `Receiver_Name` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Zip` varchar(10) NOT NULL,
  `State` varchar(50) NOT NULL,
  PRIMARY KEY (`OrderID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `Order_Details`
--

INSERT INTO `Order_Details` (`OrderID`, `UserID`, `EmailID`, `Receiver_Name`, `Address`, `City`, `Zip`, `State`) VALUES
(21, 1, 'tejeshagrawal@gmail.com', 'tejesh', '119 pratap nagar', 'kota', '324009', 'ajasthan'),
(22, 1, 'tejeshagrawal@gmail.com', 'tejesh', '119 pratap nagar', 'kota', '324009', 'ajasthan'),
(23, 1, 'tejeshagrawal@gmail.com', 'tejesh', '119 pratap nagar', 'kota', '324009', 'rajasthan'),
(24, 1, 'tejeshagrawal@gmail.com', 'tejesh', '119 pratap nagar', 'kota', '324009', 'rajasthan'),
(25, 1, 'tejeshagrawal@gmail.com', 'tejesh', '119 pratap nagar', 'kota', '324009', 'rajasthan'),
(26, 1, 'tejeshagrawal@gmail.com', 'tejesh', '119 pratap nagar', 'kota', '324009', 'rajasthan'),
(27, 1, 'tejeshagrawal@gmail.com', 'tejesh', '119 pratap nagar', 'kota', '324009', 'rajasthan'),
(28, 1, 'tejeshagrawal@gmail.com', 'tejesh', '119 pratap nagar', 'kota', '324009', 'rajasthan'),
(29, 1, 'tejeshagrawal@gmail.com', 'tejesh', '119 pratap nagar', 'kota', '324009', 'rajasthan'),
(30, 1, 'vedu@gmail.com', 'vedant', 'kotri', 'kota', '324006', 'rajastna'),
(31, 0, 'vedu@gmail.com', 'vedant', 'kotri', 'kota', '324009', 'rajasthan'),
(32, 0, '', '', '', '', '', ''),
(33, 3, 'vedu@gmail.com', 'Vedant', 'kotri', 'kota', '324009', 'rajasthan'),
(34, 3, 'vedu@mail.com', 'vedu', 'kotri', 'kota', '22222', 'mp'),
(35, 1, 'tejeshagrawal@gmail.com', 'Tejesh', '119 pratap nagar', 'kota', '324009', 'rajasthan'),
(36, 1, 'tejesh@gmail.com', 'tejesh', 'qwerty', 'qwerty', '324009', 'rajasthan'),
(37, 1, 'tejesh@gmail.com', 'tejesh', 'qwerty', 'qwerty', '324009', 'rajasthan'),
(38, 1, 'tejeshagrawal@gmail.com', 'tejesh', 'sssss', 'sssss', '324009', 'ddddd'),
(39, 1, 'tejesh@gmail.com', 'tejesh', 'qwerty', 'qwerty', '324009', 'ajasthan'),
(40, 1, 'tejeshagrawal@gmail.com', 'tejesh', '119 pratap nagar', 'kota', '324009', 'rajasthan'),
(41, 1, 'tejeshagrawal@gmail.com', 'tejesh', '324009', 'kota', '324009', 'Rajasthan');

-- --------------------------------------------------------

--
-- Table structure for table `Purchase_History`
--

CREATE TABLE IF NOT EXISTS `Purchase_History` (
  `UserID` varchar(10) NOT NULL,
  `InventoryID` varchar(10) NOT NULL,
  `Date_of_purchase` date NOT NULL,
  `OrderID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Shipping_Type`
--

CREATE TABLE IF NOT EXISTS `Shipping_Type` (
  `Type_of_Shipping` varchar(200) NOT NULL,
  `Price` double NOT NULL,
  `App_days_for_del` int(11) NOT NULL,
  PRIMARY KEY (`Type_of_Shipping`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Shirts`
--

CREATE TABLE IF NOT EXISTS `Shirts` (
  `InventoryID` int(10) NOT NULL,
  `Shirt_Name` varchar(200) NOT NULL,
  `Shirt_Company` varchar(200) NOT NULL,
  `Nr_Shirts` int(11) NOT NULL,
  `Price` double NOT NULL,
  `link` varchar(200) NOT NULL,
  PRIMARY KEY (`InventoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Shirts`
--

INSERT INTO `Shirts` (`InventoryID`, `Shirt_Name`, `Shirt_Company`, `Nr_Shirts`, `Price`, `link`) VALUES
(1, 'India', 'Tejesh Corp.', 1, 200, 'http://localhost/project/shirts/shirt1.php'),
(2, 'Eco', 'Vedant Corp.', 7, 250, 'http://localhost/project/shirts/shirt2.php'),
(3, 'Design', 'Abhay Corp.', 2, 150, 'http://localhost/project/shirts/shirt3.php'),
(4, 'Athletic', 'Humanshu Corp.', 30, 250, 'http://localhost/project/shirts/shirt4.php'),
(5, 'Joker', 'Anush Corp.', 9, 300, 'http://localhost/project/shirts/shirt5.php'),
(6, 'Shooting Star', 'Abhay Corp.', 5, 250, 'http://localhost/project/shirts/shirt6.php'),
(7, 'Kids', 'Abhay Corp.', 10, 120, 'http://localhost/project/shirts/shirt7.php'),
(8, 'Sun', 'Huge Pride & Sons', 22, 300, 'http://localhost/project/shirts/shirt8.php');

-- --------------------------------------------------------

--
-- Table structure for table `Shirt_Review`
--

CREATE TABLE IF NOT EXISTS `Shirt_Review` (
  `inventoryID` varchar(10) NOT NULL,
  `Reviews` varchar(2000) NOT NULL,
  `Rating` varchar(5) NOT NULL,
  `Review Date` date NOT NULL,
  `User_Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Shopping_Cart_Items`
--

CREATE TABLE IF NOT EXISTS `Shopping_Cart_Items` (
  `ShoppingCardID` int(11) NOT NULL,
  `InventoryID` varchar(10) NOT NULL,
  `Price` double NOT NULL,
  `Date` date NOT NULL,
  `UserID` varchar(10) NOT NULL,
  `Quantity` int(11) NOT NULL,
  PRIMARY KEY (`ShoppingCardID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `State_Tax`
--

CREATE TABLE IF NOT EXISTS `State_Tax` (
  `State_name` varchar(200) NOT NULL,
  `State_tax_rate` double NOT NULL,
  PRIMARY KEY (`State_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `State_Tax`
--

INSERT INTO `State_Tax` (`State_name`, `State_tax_rate`) VALUES
('Delhi', 3),
('Jammu & Kashmir', 4),
('Maharashtra', 6),
('Rajasthan', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
