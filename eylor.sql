-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 08:19 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eylor`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_detail`
--

CREATE TABLE `account_detail` (
  `id` int(11) NOT NULL,
  `Bank_User_ID` int(11) NOT NULL,
  `Bank_User_Name` text NOT NULL,
  `Bank_User_Account_No` varchar(100) NOT NULL,
  `Bank_IFSC` varchar(100) NOT NULL,
  `Bank_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `days` bigint(20) NOT NULL DEFAULT '1',
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `u_id`, `days`, `price`) VALUES
(134, 60, 1, 0, ''),
(150, 62, 5, 6, '120'),
(151, 63, 5, 1, '30');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_name`) VALUES
('Delhi'),
('Faridabad'),
('Palwal'),
('Delhi'),
('Faridabad'),
('Palwal'),
('Delhi'),
('Faridabad'),
('Palwal'),
('Delhi'),
('Faridabad'),
('Palwal');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `FB_ID` int(11) NOT NULL,
  `FB_U_Name` text NOT NULL,
  `FB_U_Email` varchar(100) NOT NULL,
  `FB_U_Mobile` bigint(20) NOT NULL,
  `FB_Message` varchar(200) NOT NULL,
  `FB_Status` text NOT NULL,
  `MsgInfo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`FB_ID`, `FB_U_Name`, `FB_U_Email`, `FB_U_Mobile`, `FB_Message`, `FB_Status`, `MsgInfo`) VALUES
(2, ' Nitish Goswami', 'ni30.info@gmail.com', 9205816348, '1234', 'Pending', '2021-08-17 15:56:45'),
(3, ' Nitish Goswami', 'ni30.info@gmail.com', 9205816348, 'Hello buudy', 'Pending', '2021-08-17 15:56:45'),
(4, ' Nitish Goswami', 'ni30.info@gmail.com', 0, 'Hello Guys', 'Pending', '2021-08-17 15:59:48');

-- --------------------------------------------------------

--
-- Table structure for table `itemrequest`
--

CREATE TABLE `itemrequest` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `no_of_days` int(11) NOT NULL,
  `Item_Description` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itemrequest`
--

INSERT INTO `itemrequest` (`id`, `u_id`, `item_name`, `no_of_days`, `Item_Description`, `status`) VALUES
(1, 1, 'None', 0, 'None', 'Pending'),
(2, 5, 'bat', 3, '234', 'pending'),
(3, 5, 'bst', 3, '455', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `u_id` int(25) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `razorpay_order_id` varchar(100) NOT NULL,
  `razorpay_payment_id` varchar(100) NOT NULL,
  `razorpay_signature` varchar(100) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `p_ids` varchar(50) NOT NULL,
  `p_descriptions` varchar(25) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `u_id`, `u_name`, `u_email`, `contact`, `razorpay_order_id`, `razorpay_payment_id`, `razorpay_signature`, `time_stamp`, `p_ids`, `p_descriptions`, `status`) VALUES
(28, 'EE21080001', 2, '', '', '', 'order_HrLQxzdhpV2IbT', '', '', '2021-08-30 08:33:02', '54,56', '', ''),
(29, 'EE21080001', 2, '', '', '', 'order_HrLRVGDnrhxy5u', '', '', '2021-08-30 08:33:32', '54,56', '', ''),
(30, 'EE21080002', 2, '', '', '', 'order_HrLTJxphYOoig0', 'pay_HrLTkkigdvpDP0', '850429a9374f2559596f862c6a7827350c23cb67324f755cf9bc2e7b4ff6dcf6', '2021-08-30 09:10:12', '54,56', '', ''),
(31, 'EE21080003', 2, '', '', '', 'order_HrM4MKczzqZtGu', '', '', '2021-08-30 09:10:19', '', '', ''),
(32, 'EE21080004', 2, '', '', '', 'order_HrM4WTo3cD2YF2', 'pay_HrM4donHfCUEpN', 'bd1579efc14f047c00ea1f866f29f88c6d23499748cd84243c8395faec04d512', '2021-08-30 09:10:54', '', '', ''),
(33, 'EE21080005', 2, '', '', '', 'order_HrM9DOVSjCMlX6', 'pay_HrM9M2wAc6UqXQ', '4fd741377677c3183d659b4f1a3ebe7980da3d758a26d2c41c58a90d2338c83d', '2021-08-30 09:15:28', '56,57', '', ''),
(34, 'EE21080006', 2, '', '', '', 'order_HrMBO2Vkc6MwTc', '', '', '2021-08-30 09:16:59', '', '', ''),
(35, 'EE21080007', 2, '', '', '', 'order_HrMCDIdksdqJAh', 'pay_HrMCfj4Fu5gnpm', 'b34ea34e011e2ed26ca7d38f21690fe12f650441023af2aa478a7d53730587d3', '2021-08-30 09:18:26', '56,57', '', ''),
(36, 'EE21080008', 2, '', '', '', 'order_HrMEtZHN08Q1Bj', 'pay_HrMFuT8TIRdy9x', 'd8046d7a5d2c780c0a3554239b367daae7c65ab46763c50bf2f84b25a8692924', '2021-08-30 09:21:37', '54,56', '', ''),
(37, 'EE21080009', 2, '', '', '', 'order_HrMJQyJYbUdO63', '', '', '2021-08-30 09:24:36', '', '', ''),
(38, 'EE21080010', 2, '', '', '', 'order_HrMKjgotA77lFR', '', '', '2021-08-30 09:25:50', '60,59', '', ''),
(39, 'EE21080001', 2, '', '', '', 'order_HrShmCuOokhCrY', 'pay_HrSi2ktLnZSC4u', '2f1ab7ee9a4130da939c80f7548e963082e43bde1bbe06230237c54ae3fe697c', '2021-08-30 15:41:02', '60,59', '', ''),
(40, 'EE21080002', 2, '', '', '', 'order_HrSm6SJyRoUZQF', '', '', '2021-08-30 15:43:53', '60,59', '', ''),
(41, 'EE21080003', 2, '', '', '', 'order_HrSnofe42wQt7o', 'pay_HrSnxKFLrw965H', 'f6282b15dc3cff79ebbb86e848e9132e5c1ad2398e9d0dce4c84141e595413ca', '2021-08-30 15:45:57', '60,59', '', ''),
(42, 'EE21080004', 2, '', '', '', 'order_HrSwPS35J1WmPK', '', '', '2021-08-30 15:53:39', '54,56', '', ''),
(43, 'EE21080005', 2, '', '', '', 'order_HrSxdb4FSYUhJU', '', '', '2021-08-30 15:54:49', '54,56', '', ''),
(44, 'EE21080006', 2, '', '', '', 'order_HrSy5pik7sbUcW', '', '', '2021-08-30 15:55:14', '54,56', '', ''),
(45, 'EE21080007', 2, '', '', '', 'order_HrSySKRBmAVDut', 'pay_HrSyaSX0hXTy9X', '327dfcd12c41984a6cbdeb3686c074c99266d97de1c5c4943b1588edabfafbdc', '2021-08-30 15:56:06', '54,56', '', ''),
(46, 'EE21080008', 2, '', '', '', 'order_HrT7DsMufV6EYA', '', '', '2021-08-30 16:03:53', '56,58,58', '', ''),
(47, 'EE21080009', 2, '', '', '', 'order_HrT7EmhJ6Uu82F', 'pay_HrT7LTXom8fiVH', '51edb378e237f117c9d6255d6e5e5050c43d8f8f998c2439ab41368114fcb9cb', '2021-08-30 16:04:11', '56,58,58', '', ''),
(48, 'EE21080000', 2, '', '', '', 'order_HrTGTs0ZNQmkoJ', 'pay_HrTGaUCvrwjss9', '7f063601f9ffc8cd8f99e4dcd10858d86fd4a8967ed8add01c1e79939b7b6c0c', '2021-08-30 16:13:06', '58,58', '', ''),
(49, 'EE21080001', 2, '', '', '', 'order_HrTHjZHnQCF4Cw', 'pay_HrTHspbO5Wf00u', '3c9cd2b65170781428f7f3c95523617f8551d7e47249feb3493cc01c71dec75e', '2021-08-30 16:14:24', '58,58', '', ''),
(50, 'EE21080002', 2, '', '', '', 'order_HrTR6axMDRLIrs', 'pay_HrTRLCvzRVHQDQ', 'f7c1f5221d63fea18684fea31b55a868ee4e7565439b7b2f74ea6859bda48faa', '2021-08-30 16:24:17', '57', '', ''),
(51, 'EE21090003', 5, '', '', '', 'order_Hsf7JObAQnsTSB', '', '', '2021-09-02 16:27:19', '61,59,62', '', ''),
(52, 'EE21090004', 5, '', '', '', 'order_Ht4R8Rx38HdASO', '', '', '2021-09-03 17:13:25', '61', '', ''),
(53, 'EE21090005', 5, '', '', '', 'order_Ht4SgcdJwP2dmu', 'pay_Ht4TzC8vv1Fsi2', '39a66d1fa161844bedfbce2298b3a2d3afc4c7428326ad2f1898a37b7581797f', '2021-09-03 17:18:21', '61', '', ''),
(54, 'EE21090006', 5, '', '', '', 'order_HttvVVBsa26D3u', '', '', '2021-09-05 19:35:33', '62', '', ''),
(55, 'EE21090007', 5, '', '', '', 'order_Httvk9DWE4gUm3', '', '', '2021-09-05 19:35:47', '62', '', ''),
(56, 'EE21090008', 5, '', '', '', 'order_HttyMGJYXkqJSY', '', '', '2021-09-05 19:38:15', '62', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_age` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` varchar(100) NOT NULL,
  `item_city` varchar(255) NOT NULL,
  `product_pic_1` varchar(100) NOT NULL,
  `product_pic_2` varchar(100) NOT NULL,
  `product_pic_3` varchar(100) NOT NULL,
  `product_bill` varchar(100) NOT NULL,
  `product_status` text NOT NULL,
  `req_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat_id`, `user_id`, `product_name`, `product_age`, `product_price`, `product_description`, `item_city`, `product_pic_1`, `product_pic_2`, `product_pic_3`, `product_bill`, `product_status`, `req_id`) VALUES
(54, 2, 2, 'Rich Dad And Poor Dad', '1', 20, 'This book is used limited edition', 'Faridabad', 'Upload/19082106192297959271952IMG_20210620_083737.jpg', 'Upload/190821061922313086290276IMG_20210620_083805.jpg', 'Upload/190821061922379317278810IMG_20210620_083743.jpg', '', 'Unavailable', 1),
(56, 2, 2, 'Think and grop rick Book', '1', 10, 'This Book is very rare and it will help you to exlpore yourself', 'Delhi', 'Upload/210821055636Think and Grow Rich (1).jpeg', 'Upload/210821055636Think and Grow Rich (2).jpeg', 'Upload/210821055636Think and Grow Rich (3).jpeg', '', 'Unavailable', 1),
(57, 3, 2, 'Nike 1500', '1', 20, 'This is latest trending shoes', 'Palwal', 'Upload/210821055736Shoes (1).jpeg', 'Upload/210821055736Shoes (2).jpeg', 'Upload/210821055736Shoes (3).jpeg', '', 'Unavailable', 1),
(58, 6, 2, 'HP Laptop', '3', 50, '14\" Black Color 4GB RAM 500 GB HDD Intel I7 Procesor', 'Delhi', 'Upload/210821060429Laptop (1).jpg', 'Upload/210821060429Laptop (2).jpg', 'Upload/210821060429Laptop (3).jpg', '', 'Unavailable', 1),
(59, 6, 2, 'Vivo Y20i Mobile Phone', '1', 40, '4GB Ram 32GB ROM Front camera 13MP rear Camera 20MP,Battery:500mAH', 'Delhi', 'Upload/210821060624Mobile (1).jpg', 'Upload/210821060624Mobile (2).jpg', 'Upload/210821060624Mobile (3).jpg', '', 'Available', 1),
(60, 4, 2, 'Sports Tshirts', '3', 50, 'This is special edition of football club tshirt and it is rare to find', 'Delhi', 'Upload/210821060752TShirt (1).jpg', 'Upload/210821060752TShirt (2).jpg', 'Upload/210821060752TShirt (3).jpg', '', 'Available', 1),
(61, 2, 2, 'Rich Dad And Poor Dad', '1', 30, 'This book is used limited edition', 'Faridabad', 'Upload/19082106192297959271952IMG_20210620_083737.jpg', 'Upload/190821061922313086290276IMG_20210620_083805.jpg', 'Upload/190821061922379317278810IMG_20210620_083743.jpg', '', 'Unavailable', 1),
(62, 2, 2, 'Think and grop rick Book', '1', 20, 'This Book is very rare and it will help you to exlpore yourself', 'Delhi', 'Upload/210821055636Think and Grow Rich (1).jpeg', 'Upload/210821055636Think and Grow Rich (2).jpeg', 'Upload/210821055636Think and Grow Rich (3).jpeg', '', 'Available', 1),
(63, 3, 2, 'Nike 1500', '1', 30, 'This is latest trending shoes', 'Palwal', 'Upload/210821055736Shoes (1).jpeg', 'Upload/210821055736Shoes (2).jpeg', 'Upload/210821055736Shoes (3).jpeg', '', 'Available', 1),
(64, 6, 2, 'HP Laptop', '3', 60, '14\" Black Color 4GB RAM 500 GB HDD Intel I7 Procesor', 'Delhi', 'Upload/210821060429Laptop (1).jpg', 'Upload/210821060429Laptop (2).jpg', 'Upload/210821060429Laptop (3).jpg', '', 'Available', 1),
(65, 6, 2, 'Vivo Y20i Mobile Phone', '1', 50, '4GB Ram 32GB ROM Front camera 13MP rear Camera 20MP,Battery:500mAH', 'Delhi', 'Upload/210821060624Mobile (1).jpg', 'Upload/210821060624Mobile (2).jpg', 'Upload/210821060624Mobile (3).jpg', '', 'Available', 1),
(66, 4, 2, 'Sports Tshirts', '3', 60, 'This is special edition of football club tshirt and it is rare to find', 'Delhi', 'Upload/210821060752TShirt (1).jpg', 'Upload/210821060752TShirt (2).jpg', 'Upload/210821060752TShirt (3).jpg', '', 'Available', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_desc` varchar(100) NOT NULL,
  `cat_icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`cat_id`, `cat_name`, `cat_desc`, `cat_icon`) VALUES
(1, 'Medical Instruments', 'Used to explore information by reading', 'fas fa-briefcase-medical fa-3x'),
(2, 'Books', 'Latest Trending Books', 'fas fa-book fa-3x'),
(3, 'Shoes', 'Trending Shoes\r\n', 'fas fa-shoe-prints fa-3x'),
(4, 'Clothes', 'Trending Clothes', 'fas fa-tshirt fa-3x'),
(5, 'Furniture', 'Latest Furniture', 'fas fa-chair fa-3x'),
(6, 'Electronics', 'Include All Category of Electronics', 'fas fa-mobile fa-3x'),
(7, 'Sports Accessories', '', 'fas fa-table-tennis fa-3x'),
(8, 'Rooms/Flats', '', 'fas fa-hospital-alt fa-3x'),
(9, 'Others', '', 'fa fa-address-book fa-3x');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `email`, `pic`, `msg`) VALUES
(3, 'Vikas', 'vikas82393@gmail.com', 'Upload/412348images.jpg', 'it is an awesome website'),
(4, 'Sumit bhardwaj', 'mrkhanger05@gmail.con', 'Upload/806544Screenshot_2021-06-03-00-30-42-533_com.instagram.android.jpg', 'This is the only website where I was successfully able to lend my items without any hassle. '),
(5, 'Nitish', 'ni30.info@gmail.com', 'Upload/369058Nitish.jpg', 'Hello I thing u guys r doing best day by day');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `email`, `timestamp`) VALUES
(1, 'Subscribe', '2021-07-07 15:56:55'),
(2, 'Subscribe', '2021-07-07 15:59:44'),
(3, 'Subscribe', '2021-07-07 16:06:19'),
(4, 'ni30.info@gmail.com', '2021-07-07 16:33:36'),
(5, 'ni30.info@gmail.com', '2021-07-07 16:33:46'),
(6, 'ni30.info@gmail.com', '2021-07-07 16:35:36'),
(7, 'khatana2000sandeep@gmail.com', '2021-07-14 05:10:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `google_uid` text NOT NULL,
  `user_fullname` text NOT NULL,
  `user_gender` text NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone` text NOT NULL,
  `user_hno` varchar(40) NOT NULL,
  `user_area` varchar(100) NOT NULL,
  `user_pincode` int(10) NOT NULL,
  `user_city` text NOT NULL,
  `user_state` text NOT NULL,
  `Pickup_Address` varchar(200) NOT NULL,
  `Shipping_Address1` varchar(200) NOT NULL,
  `Shipping_Address2` varchar(200) NOT NULL,
  `user_profile_pic` varchar(200) NOT NULL,
  `user_proof_type` text NOT NULL,
  `user_proof_number` text NOT NULL,
  `user_proof_pic` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `hashcode` varchar(100) NOT NULL,
  `ustatus` int(11) NOT NULL DEFAULT '0',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `google_uid`, `user_fullname`, `user_gender`, `user_email`, `user_phone`, `user_hno`, `user_area`, `user_pincode`, `user_city`, `user_state`, `Pickup_Address`, `Shipping_Address1`, `Shipping_Address2`, `user_profile_pic`, `user_proof_type`, `user_proof_number`, `user_proof_pic`, `user_password`, `hashcode`, `ustatus`, `timestamp`) VALUES
(1, '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '2021-08-19 15:34:41'),
(2, '109220936612114900193', 'Nitish Goswami', '', 'ni30.info@gmail.com', '9205816348', '', '', 0, '', '', '474,1235678,,,Faridabad,India,121004', 'Hno:474,Gali No:2,Jeevan nagar-2,Lal Kothi,Faridabad,Haryana,121004', 'Hno:1270,Street No:5,Nilokheri,SpicyTreat,FKarnal,Haryana,56210', 'https://lh3.googleusercontent.com/a-/AOh14GhqYUTu8nOAEWCwCxoPdBBmM-eJfxSZK_VDBsEvBg=s96-c', 'Aadhar Number', '731065143324', 'Upload/190821073144bg03.jpg', '', '', 0, '2021-08-26 17:17:22'),
(3, '104906739471240817464', 'Eylor Enlisting', '', 'eylorenlisting@gmail.com', '', '', '', 0, '', '', '', '', '', 'https://lh3.googleusercontent.com/a-/AOh14GjS9WeF8IzF7ePwhfAls5n9Olt9SEw-KyjNAOJN=s96-c', '', '', '', '', '', 0, '2021-08-21 15:30:18'),
(4, '105467079071233779932', 'Nitish Goswami', 'Male', 'nitishgoswami9876@gmail.com', '9205816348', '', '', 0, '', '', '', '', '454,House,Nilokheri,Spicy treat,Fraidabad,Haryana,121004', 'https://lh3.googleusercontent.com/a-/AOh14GhqYUTu8nOAEWCwCxoPdBBmM-eJfxSZK_VDBsEvBg=s96-c', '', '', '', '', '', 0, '2021-08-24 06:53:46'),
(5, '107048792486366703670', 'A 69 vikas sharma', '', 'kuki.sharma786@gmail.com', '', '', '', 0, '', '', '', '', '', 'https://lh3.googleusercontent.com/a-/AOh14GgR5HevFyjM72bIDreq36Up4LTeislvisbLiXFrLQ=s96-c', '', '', '', '', '', 0, '2021-09-01 15:24:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_detail`
--
ALTER TABLE `account_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Bank_User_ID` (`Bank_User_ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`FB_ID`);

--
-- Indexes for table `itemrequest`
--
ALTER TABLE `itemrequest`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_cat_id` (`product_cat_id`),
  ADD KEY `req_id` (`req_id`),
  ADD KEY `item_city` (`item_city`(191));

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_detail`
--
ALTER TABLE `account_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `FB_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `itemrequest`
--
ALTER TABLE `itemrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_detail`
--
ALTER TABLE `account_detail`
  ADD CONSTRAINT `account_detail_ibfk_1` FOREIGN KEY (`Bank_User_ID`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `itemrequest`
--
ALTER TABLE `itemrequest`
  ADD CONSTRAINT `itemrequest_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
