-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2025 at 10:27 AM
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
-- Database: `petstore_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `cartTotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `cartID` int(11) NOT NULL,
  `orderDate` date DEFAULT NULL,
  `expectedDeliveryDate` date DEFAULT NULL,
  `deliveryAddress` varchar(255) DEFAULT NULL,
  `deliveryFees` decimal(10,2) DEFAULT NULL,
  `orderTotal` decimal(10,2) DEFAULT NULL,
  `orderStatus` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `cartID` int(11) DEFAULT NULL,
  `orderID` int(11) DEFAULT NULL,
  `productName` varchar(100) NOT NULL,
  `productDescription` text DEFAULT NULL,
  `productPrice` decimal(10,2) DEFAULT NULL,
  `productImage` varchar(255) DEFAULT NULL,
  `stockQuantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `cartID`, `orderID`, `productName`, `productDescription`, `productPrice`, `productImage`, `stockQuantity`) VALUES
(15, NULL, NULL, 'JosiCat Salmon in Sauce 415g', 'JOSICAT FISH IN SAUCE Fish-lovers listen up! JosiCat Fish in Sauce is the nautical pet treat for adult cats. Here tasty pieces in sauce are served with delicious pollock. It goes without saying ', 750.00, '678ca75a35007_test7.webp', 34),
(16, NULL, NULL, 'Josera Kids', 'KIDS -  Puppy food For our young Dog who want to reach the stars: a special growth formula for medium and large breeds. This low-energy recipe with a tailored protein and fat content supports ', 25000.00, '678d2b5c57636_producttest1.webp', 14),
(17, NULL, NULL, 'JA! Clumping Cat Litter 10 Kg', '  JA! Clumping litter 10 Kg 100 % natural product Highly absorbent and hygienic With practical carrying handle This cat litter from Ja! is a 100% natural product. ', 3800.00, '678d2e1029a09_test3.webp', 40),
(18, NULL, NULL, 'Lucky Bed', 'Product information BASIC Edition  cotton look/fleece  polyester cover  foam padding  with reversible cushion  non-slip bottom', 10500.00, '678d3fe482304_test8.webp', 6),
(21, NULL, NULL, 'Josi Dog Active', 'JOSIDOG MASTER MIX - Dog food No more boring stuff! Brighten up your pet\'s bowl with the colourful corn and beetroot kibble in JosiDog MasterMix! Crunchy and flavourful variety for adult dogs ', 3000.00, '678d409a50f7f_678c5f631eac4_bestselling2.jpg', 23),
(22, NULL, NULL, 'Josera Kids', 'whole grain corn; barley; dried poultry protein; meat-and-bone meal; beet fibre; poultry fat; rice; hydrolysed poultry protein; hydrolysed animal protein; maize protein; minerals; ground chicory root ', 4500.00, '678d425c5a111_bestselling1.webp', 20),
(23, NULL, NULL, 'Lucky Bed', 'Product information BASIC Edition  cotton look/fleece  polyester cover  foam padding  with reversible cushion  non-slip bottom', 10500.00, '678d4ac70648d_test8.webp', 5),
(26, NULL, NULL, 'Whiskas Junior Mother Cat & Kitten ', 'Product information with malt malt promotes the natural expulsion of hair from stomach or intestine Item ', 1500.00, 'test2.jpg', 29),
(31, NULL, NULL, 'JA! Clumping Cat Litter 10 KgTrixie Crumbies with malt', 'Product information with malt malt promotes the natural expulsion of hair from stomach or intestine Item no.: 4262, Contents/Weight: 50 g Composition cereals (10 % malt flour), meat and ', 900.00, 'test9.webp', 10),
(32, NULL, NULL, 'Josidog Junior Sensitive', 'cereals (10 % malt flour), meat and animal by-products, oils and fats, vegetable protein extracts, vegetable by-products | no added sugar | Store in a cool and dry place.', 3000.00, '678c36c425485_producttest1.webp', 3),
(33, NULL, NULL, 'Trixie Cosma Bed', 'Trixie Cosma Bed Product information BASIC Edition short-haired plush/soft plush polyester cover foam padding reversible cushion with polyester fleece filling non-slip bottom Measurements', 39000.00, 'test10.webp', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `postalCode` varchar(20) NOT NULL,
  `phoneNo` varchar(20) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `lastName`, `username`, `password`, `email`, `address`, `city`, `postalCode`, `phoneNo`, `created_at`) VALUES
(3, 'Nevinka', 'Nevinka', 'nevinka', '1234', 'nevinkawickramasinghe@gmail.com', '', '', '', '', '2025-01-16 11:06:18'),
(4, 'dineth', 'Wickramasinghe', 'dill', '2009', 'dill@gmail.com', '', '', '', '', '2025-01-16 11:08:03'),
(5, 'chandima', 'wick', 'chandi', '1972', 'chandi@gmail.com', '', '', '', '', '2025-01-16 11:11:14'),
(6, 'Nevinka', 'Wickramasinghe', 'nevinka', '12345', 'nevinkawickramasinghe@gmail.com', '', '', '', '', '2025-01-16 11:11:33'),
(7, 'neth', 'wijesinghe', 'neths', '$2y$10$Y', 'neth@gmail.com', '', '', '', '', '2025-01-16 11:19:12'),
(8, 'cleo', 'rikki', 'h2o', '$2y$10$2', 'h2o@gmail.com', '', '', '', '', '2025-01-16 15:44:05'),
(9, 'test', '1', 'test1', '$2y$10$u', 'test1@gmail.com', '', '', '', '', '2025-01-16 17:40:57'),
(10, 'Nevinka', 'Nevinka', 'binka', '$2y$10$L', 'nevinka@gmail.com', '', '', '', '', '2025-01-16 18:46:14'),
(11, 'test', '2', 'test2', '$2y$10$4', 'test2@gmail.com', '', '', '', '', '2025-01-17 09:02:03'),
(12, 'TEST', '3', 'test3', '098f6bcd', 'test3@gmail.com', '', '', '', '', '2025-01-17 09:54:36'),
(13, 'new', 'Nevinka', 'nevinka', '202cb962', 'new@gmail.com', '', '', '', '', '2025-01-17 22:30:06'),
(17, 'email', 'check', 'email', '1919bfc4', '0c83f57c786a0b4a39efab23731c7ebc', '', '', '', '', '2025-01-18 02:11:56'),
(18, 'email', 'email', 'email', '0c83f57c', 'emaileamil@gmail.com', '', '', '', '', '2025-01-18 02:19:41'),
(19, 'test10', 'test10', 'test10', '098f6bcd', 'test10@gmail.com', '', '', '', '', '2025-01-18 02:29:22'),
(20, 'dumb', 'dumb', 'dumb', '$2y$10$P', 'dumb@gmail.com', '', '', '', '', '2025-01-18 02:43:50'),
(21, 'nev', 'nev', 'nev', '$2y$10$l', 'nev@gmail.com', '', '', '', '', '2025-01-18 02:47:45'),
(22, 'test11', 'test11', 'test11', '$2y$10$Q', 'test11@gmail.com', '', '', '', '', '2025-01-18 02:51:13'),
(23, 'test20', 'test20', 'test20', '$2y$10$V', 'test20@gmail.com', '', '', '', '', '2025-01-19 11:28:33'),
(24, 'test21', 'test21', 'test21', '$2y$10$S', 'test21@gmail.com', '', '', '', '', '2025-01-19 11:46:30'),
(25, 'test22', 'test22', 'test22', '$2y$10$f', 'test22@gmail.com', '', '', '', '', '2025-01-19 11:53:15'),
(26, 'test23', 'test23', 'test23', 'test23', 'test23@gmail.com', '', '', '', '', '2025-01-19 11:59:25'),
(27, 'nevinka', 'Wickramasinghe', 'nevinka', '123', 'nevi@gmail.com', '', '', '', '', '2025-01-20 00:27:21'),
(28, 'Nevinka', 'Nevinka', 'nevinka', '123', 'n@gmail.com', '', '', '', '', '2025-01-20 12:13:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `cart_ibfk_1` (`userID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `orders_ibfk_1` (`userID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `FORIEGN KEY1` (`orderID`),
  ADD KEY `FORIEGN KEY2` (`cartID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FORIEGN KEY1` FOREIGN KEY (`orderID`) REFERENCES `product` (`productID`),
  ADD CONSTRAINT `FORIEGN KEY2` FOREIGN KEY (`cartID`) REFERENCES `product` (`productID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
