-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 08:49 PM
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
-- Database: `sem 6`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `DetailID` int(10) NOT NULL,
  `UserID` varchar(10) NOT NULL,
  `DetailOrderID` int(10) NOT NULL,
  `DetailProductID` int(10) NOT NULL,
  `DetailName` varchar(100) NOT NULL,
  `DetailPrice` float NOT NULL,
  `DetailQuantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(20) NOT NULL,
  `OrderUserID` varchar(255) NOT NULL,
  `OrderProductID` varchar(255) NOT NULL,
  `OrderName` varchar(255) NOT NULL,
  `OrderAmount` varchar(255) NOT NULL,
  `TotalAmount` varchar(255) NOT NULL,
  `OrderQuantity` varchar(255) NOT NULL,
  `OrderShipName` varchar(255) NOT NULL,
  `OrderShipAddress` varchar(255) NOT NULL,
  `OrderShipAddress2` varchar(255) DEFAULT NULL,
  `OrderCity` varchar(255) NOT NULL,
  `OrderState` varchar(255) NOT NULL,
  `OrderZip` varchar(255) NOT NULL,
  `OrderCountry` varchar(255) DEFAULT NULL,
  `OrderPhone` varchar(255) NOT NULL,
  `OrderEmail` varchar(255) NOT NULL,
  `OrderStatus` varchar(255) DEFAULT NULL,
  `OrderDate` timestamp(6) NULL DEFAULT NULL,
  `OrderTax` varchar(255) DEFAULT NULL,
  `OrderTrackingNumber` varchar(255) DEFAULT NULL,
  `OrderShipped` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `OrderUserID`, `OrderProductID`, `OrderName`, `OrderAmount`, `TotalAmount`, `OrderQuantity`, `OrderShipName`, `OrderShipAddress`, `OrderShipAddress2`, `OrderCity`, `OrderState`, `OrderZip`, `OrderCountry`, `OrderPhone`, `OrderEmail`, `OrderStatus`, `OrderDate`, `OrderTax`, `OrderTrackingNumber`, `OrderShipped`) VALUES
(16, '2', ' 2', 'PVC-U Ringfit Agriculture Pipe', '1080', '', '4', 'Vikas', 'Makarpura ', '', 'Ahmedabad', 'Gujarat', '390014', NULL, '1234567890', 'vikassinghvv34@gmail.com', NULL, NULL, NULL, NULL, NULL),
(17, '2', ' 22', 'Centrifugal monoblock pumps', '1080', '', '1', 'Vikas', 'Makarpura ', '', 'Ahmedabad', 'Gujarat', '390014', NULL, '1234567890', 'vikassinghvv34@gmail.com', NULL, NULL, NULL, NULL, NULL),
(56, '12', ' ', '', '', '', '', 'vikas', 'makarpuraa', '', 'Vadodara', 'Gujarat', '930041', NULL, '8521364973', 'vikassinghv34@gmail.com', NULL, NULL, NULL, NULL, NULL),
(57, '12', ' 13', 'uPVC Plumbing pipe', '580', '1740', '3', 'vikas', 'makarpuraa', '', 'Vadodara', 'Gujarat', '930041', NULL, '8521364973', 'vikassinghv34@gmail.com', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE `productcategory` (
  `CategoryID` int(10) NOT NULL,
  `CategoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productcategory`
--

INSERT INTO `productcategory` (`CategoryID`, `CategoryName`) VALUES
(1, 'plumbing'),
(2, 'industrial'),
(3, 'agricultural'),
(4, 'surface drainage'),
(5, 'sewarge and drainage'),
(6, 'fire protection'),
(7, 'insulation'),
(8, 'cable protection'),
(9, 'urban infrastructure');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(10) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `ProductPrice` float NOT NULL,
  `ProductWeight` float DEFAULT NULL,
  `ProductCartDesc` varchar(250) DEFAULT NULL,
  `ProductShortDesc` varchar(500) DEFAULT NULL,
  `ProductLongDesc` text DEFAULT NULL,
  `ProductThumb` varchar(100) DEFAULT NULL,
  `ProductImage` varchar(100) NOT NULL,
  `ProductCategoryID` int(10) NOT NULL,
  `ProductUpdateDate` timestamp NULL DEFAULT current_timestamp(),
  `ProductStock` float DEFAULT NULL,
  `ProductLive` tinyint(1) DEFAULT NULL,
  `ProductUnlimited` tinyint(1) DEFAULT NULL,
  `ProductLocation` varchar(200) DEFAULT NULL,
  `ProductQuantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `ProductPrice`, `ProductWeight`, `ProductCartDesc`, `ProductShortDesc`, `ProductLongDesc`, `ProductThumb`, `ProductImage`, `ProductCategoryID`, `ProductUpdateDate`, `ProductStock`, `ProductLive`, `ProductUnlimited`, `ProductLocation`, `ProductQuantity`) VALUES
(1, 'PVC-U Selfit Agriculture Pipe', 1500, 6, 'Conforming to IS 4985 One end of this pipe is self-socketed and the other is plain. This allows for a snug fit, without the use of any couplers. The strong solvent cement joint is permanent and trouble-free and eliminates the inconvenience of loose c', '', '', '', './pipes/agriculture-1.png', 3, '2021-04-03 09:49:19', 0, 0, 0, '', 1),
(2, 'PVC-U Ringfit Agriculture Pipe', 1600, 6.1, 'Conforming to IS 4985 One end of this pipe is self-socketed and the other is plain. This allows for a snug fit, without the use of any couplers. The strong solvent cement joint is permanent and trouble-free and eliminates the inconvenienc', 'Conforming to IS 4985 One end of this pipe is self-socketed and the other is plain. This allows for a snug fit, without the use of any couplers. The strong solvent cement joint is permanent and trouble-free and eliminates the inconvenience of loose couplers and thereby saves both time and cost.', NULL, NULL, './pipes/agriculture_circleimg_2.png', 3, '2021-04-03 10:29:04', NULL, NULL, 1, NULL, 1),
(3, 'PVC-U Ringfit column Agriculture Pipe', 1000, 2, NULL, NULL, NULL, NULL, './pipes/agriculture_circleimg_2.png', 3, '2021-04-03 11:27:09', NULL, NULL, NULL, NULL, 1),
(4, 'PVC-U Ringfit column Agriculture Pipe', 1000, 3, NULL, NULL, NULL, NULL, './pipes/agriculture-1.png', 3, '2021-04-03 11:29:04', NULL, NULL, NULL, NULL, 1),
(7, 'Compact Ball valve', 100, NULL, 'Leak proof due to perfect solvent cemented/ cold welded joints.', 'High impact resistance', NULL, NULL, './pipes/Plumbing/Compact Ball valve.png', 1, '2021-05-04 08:37:24', NULL, NULL, NULL, NULL, 1),
(8, 'CPVC Pipes', 4500, NULL, 'CPVC pipes are suitable for hot water up to 82\'C.', 'There pipes are manufactured using lead free and environment friendly CPVC compound.', NULL, NULL, './pipes/Plumbing/CPVC PIPES.png', 1, '2021-05-04 08:43:24', NULL, NULL, NULL, NULL, 1),
(9, 'Elbow (90\")', 175, NULL, 'Insulating properties result in high energy efficiency.', NULL, NULL, NULL, './pipes/Plumbing/Elbow(90\').png', 1, '2021-05-04 08:43:24', NULL, NULL, NULL, NULL, 1),
(10, 'SWR pipes with integrated rings', 7600, NULL, 'SWR pipes and fitting make leak-proof joints that are maintenance and replacement free.', 'High degree of accuracy at manufacturing ensures perfect dimensional control.', NULL, NULL, './pipes/Plumbing/SWR Pipes with Integrated Rings.png', 1, '2021-05-04 08:50:20', NULL, NULL, NULL, NULL, 1),
(11, 'Underground Drainage', 10000, NULL, 'The pipes are manufactured for underground sewage system only.\r\nThe pipes are manufactured in the range of 110 mm to 200 mm.', 'The pipes are most suitable for large layout projects.', NULL, NULL, './pipes/Plumbing/Underground Drainage.png', 1, '2021-05-04 08:53:59', NULL, NULL, NULL, NULL, 1),
(12, 'uPVC SWR Pipe', 510, NULL, 'uPVC SWR pipes are uses for industries, chemical plants, power plants drains as chemical waste lines & overflow lines.', 'SWR pipes are strong, sturdy and unbreakable.\r\nThese are unaffected by whether conditions, termite, bacteria and fungus growths.', NULL, NULL, './pipes/Industrial/uPVC SWR Pipe.png', 2, '2021-05-04 09:01:22', NULL, NULL, NULL, NULL, 1),
(13, 'uPVC Plumbing pipe', 580, NULL, 'Internal surface finish of these pipes are smooth which helps to reduce friction losses.', 'Safe for pure & hygienic water supply.', NULL, NULL, './pipes/Industrial/uPVC Plumbing pipe.png', 2, '2021-05-04 09:01:22', NULL, NULL, NULL, NULL, 1),
(14, 'uPVC Column Pipe', 610, NULL, 'Water rising for submersible and jet pump for Irrigation, Domestic, Industrial mining, Chemical distribution.\r\n', 'A wise replacement for MS, PPR, ERW, GI, HDPE and SS Column Pipes.', NULL, NULL, './pipes/Industrial/uPVC Colunm Pipe.png', 2, '2021-05-04 09:04:58', NULL, NULL, NULL, NULL, 1),
(15, 'uPVC Casing Pipe', 720, NULL, 'Maximum installation depth 450m for CD Series, 250m for CM series, and 80m for CS series.', NULL, NULL, NULL, './pipes/Industrial/uPVC Casing Pipe.png', 2, '2021-05-04 09:04:58', NULL, NULL, NULL, NULL, 1),
(16, 'HDPE Pipe', 850, NULL, 'Industrial disposal of chemical effluent & waste.\r\nHigh Density Polyethylene Polymers Materials.', 'Cooling water pipe lines like thermal power equipment.', NULL, NULL, './pipes/Industrial/HDPE Pipe.png', 2, '2021-05-04 09:06:14', NULL, NULL, NULL, NULL, 1),
(21, 'Shallow well pump', 1050, NULL, 'High discharge with low power consumption.\r\nSturdy motor body.', 'Self priming & shallow well pump with built in Non Return Valve.', NULL, NULL, './pipes/agriculture/Shallow well pump.png', 3, '2021-05-04 09:18:31', NULL, NULL, NULL, NULL, 1),
(22, 'Centrifugal monoblock pumps', 1080, NULL, 'Fitted with Thermal Overload Protector (TOP) to prevent motor burning.\r\nSturdy motor body.', 'Metal shielded double walled bearing, no need of external lubrication. ', NULL, NULL, './pipes/agriculture/Centrifugal Monoblock Pumps.png', 3, '2021-05-04 09:18:31', NULL, NULL, NULL, NULL, 1),
(23, 'Submersible motor 8(200mm)', 900, NULL, 'IS 9283:1994 BIS certified models.\r\nAlso available in NEMA standard mounting dimensions.\r\n', 'Low voltage (180-350V) motors are also available.\r\nThree Phase - 10.0 To 85.0 HP , 415 V , 50 Hz.', NULL, NULL, './pipes/agriculture/Submersible Motor 8(200mm).png', 3, '2021-05-04 09:18:31', NULL, NULL, NULL, NULL, 1),
(24, 'Borewell submersible pump 6(150mm)', 1000, NULL, 'IS 8034:2002 & IS 9283:2013 BIS certified models.\r\n5-Star rated Energy efficient pumpsets, easy to dismantle and repair.\r\n.', 'Available from 3.0 HP to 40.0 HP in Three phase and upto10 HP in Single phase.\r\nAvailable with for 60Hz also', NULL, NULL, './pipes/agriculture/Borewell submersible pump 6(150mm).png', 3, '2021-05-04 09:18:31', NULL, NULL, NULL, NULL, 1),
(25, 'Surface Water Drainage', 1650, NULL, 'Surface Water offering includes an extensive choice of unperforated,  \r\nPolyethylene pipework in diameters from 53.9mm-600mm.', 'perforated and half-perforated pipe in both solid wall PVC and Twin wall.', NULL, NULL, './pipes/Surface Drainage/Surface Water Drainage.png', 4, '2021-05-04 09:28:07', NULL, NULL, NULL, NULL, 1),
(26, 'Solid Wall Pipe', 650, NULL, 'Manufactured to exacting standards from robust uPVC.\r\n', 'Available in plain end and single socket.', NULL, NULL, './pipes/Surface Drainage/Solid Wall Pipe.png', 4, '2021-05-04 09:28:07', NULL, NULL, NULL, NULL, 1),
(27, 'Perforated Pipe', 780, NULL, 'Perforated pipe in 53.9mm?400mm dia?s.\r\n', 'Blown socket and ring seal socket options.', NULL, NULL, './pipes/Surface Drainage/Perforated Pipe.png', 4, '2021-05-04 09:28:07', NULL, NULL, NULL, NULL, 1),
(28, 'Twin wall Multi fitting', 3000, NULL, 'Twinwall Pipe and Fittings in 150mm?600mm dia?s.', 'Manufactured from high density polyethylene.', NULL, NULL, './pipes/Surface Drainage/Twinwall Multie fittting.png', 4, '2021-05-04 09:28:07', NULL, NULL, NULL, NULL, 1),
(29, 'Double Wall Corrugated Pipes', 2800, NULL, 'D-Rex is an innovative product described as a structured wall piping system of PE/PP with smooth internal and corrugated (profiled) external surface.', NULL, NULL, NULL, './pipes/Sewerage & Drainage/Double Wall Corrugated Pipes.png', 5, '2021-05-04 09:36:40', NULL, NULL, NULL, NULL, 1),
(30, 'DrainHulk Manhole Chamber', 850, NULL, 'UV stabilized polyethylene (PE) material and are intended for use in underground drainage and sewerage systems.', NULL, NULL, NULL, './pipes/Sewerage & Drainage/DrainHulk -Manhole Chamber.png', 5, '2021-05-04 09:36:40', NULL, NULL, NULL, NULL, 1),
(31, 'Grooved End and Draines caps', 750, NULL, 'Use as reducers, end fittings, or connections to drain valves.\r\n', 'Fits grooved pipes up to 8\" in nominal diameter.', NULL, NULL, './pipes/Fire Protection/Grooved End and Draines caps.png', 6, '2021-05-04 09:50:18', NULL, NULL, NULL, NULL, 1),
(32, 'Grooved Couplings', 650, NULL, 'Join two same-size pipes or fittings.\r\n', 'Rigid models in sizes up to 8\".', NULL, NULL, './pipes/Fire Protection/Grooved Couplings.png\r\n', 6, '2021-05-04 09:50:18', NULL, NULL, NULL, NULL, 1),
(33, 'Grooved Elbows', 150, NULL, 'Long- and short-radius options available for confined spaces or avoiding obstructions.', '', NULL, NULL, './pipes/Fire Protection/Grooved Elbows.png', 6, '2021-05-04 09:50:18', NULL, NULL, NULL, NULL, 1),
(34, 'Grooved Standard Tees', 400, NULL, 'Sends a single flow in two directions -Short and Long models.', '', NULL, NULL, './pipes/Fire Protection/Grooved Standard Tees.png', 6, '2021-05-04 09:50:18', NULL, NULL, NULL, NULL, 1),
(35, 'Grooved Mechanical Tees', 520, NULL, 'Sits over pre-drilled hole: no couplings required.', 'Held in place by adjustable U-bolts or with fitted grooved bodies.', NULL, NULL, './pipes/Fire Protection/Grooved Mechanical Tees.png', 6, '2021-05-04 09:50:18', NULL, NULL, NULL, NULL, 1),
(36, 'Insulation Batts', 1500, NULL, 'Best for unfinished walls, floors and ceilings. \r\nOne of the most affordable types of insulation.', NULL, NULL, NULL, './pipes/Insulation/Insulation Batts.png', 7, '2021-05-04 10:12:35', NULL, NULL, NULL, NULL, 1),
(37, 'Insulation Rolls', 1900, NULL, 'Best for unfinished walls, floors, ceilings and wherever long and continuous insulation pieces are needed.', NULL, NULL, NULL, './pipes/Insulation/Insulation Rolls.png', 7, '2021-05-04 10:12:35', NULL, NULL, NULL, NULL, 1),
(38, 'Spray Foam insulation', 2900, NULL, 'Best for hard-to-reach or oddly shaped areas and already insulated areas. \r\nCan be used to fill small gaps and cracks or to insulate large spaces.', NULL, NULL, NULL, './pipes/Insulation/Spray Foam insulation.png', 7, '2021-05-04 10:12:35', NULL, NULL, NULL, NULL, 1),
(39, 'Radiant Barriers', 1800, NULL, 'Most often used for attics, since most heat enters through the attic.', NULL, NULL, NULL, './pipes/Insulation/Radiant Barriers.png', 7, '2021-05-04 10:12:35', NULL, NULL, NULL, NULL, 1),
(40, 'Loose-fill insulation', 2500, NULL, 'Usually made of fiberglass, cellulose or mineral wool.  \r\nBlown or sprayed into place with pneumatic equipment. ', NULL, NULL, NULL, './pipes/Insulation/Loose-fill insulation.png', 7, '2021-05-04 10:12:35', NULL, NULL, NULL, NULL, 1),
(41, 'Metalic Cable Protection Galvanised steel cable', 920, NULL, 'The SC galvanised steel cable protection conduit offers very high compression, impact and tensile strength and is very flexible.', NULL, NULL, NULL, './pipes/Cable Protection/Metalic Cable Protection Galvanised steel cable.png', 8, '2021-05-04 10:20:08', NULL, NULL, NULL, NULL, 1),
(42, 'Non-Metalic Cable Protection HG_DC Double slit', 490, NULL, 'Control panels, machine building, plant construction and wherever retrofitting is a requirement.', NULL, NULL, NULL, './pipes/Cable Protection/Non-Metalic Cable Protection HG_DC Double slit.png', 8, '2021-05-04 10:20:08', NULL, NULL, NULL, NULL, 1),
(43, 'Non-Metalic cable protection HG-SW PA6 Standard', 1250, NULL, 'The HG-SW cable protection conduit provides very good resistance to abrasion, compression and impact, is highly flexible and has high fatigue-life', NULL, NULL, NULL, './pipes/Cable Protection/Non-Metalic cable protection HG-SW PA6 Standard.png', 8, '2021-05-04 10:20:08', NULL, NULL, NULL, NULL, 1),
(44, 'SPS-series cable protection spiral binding', 630, NULL, 'SPS is available with much larger diameters (up to 50 mm) than other spiral binding and is ideal for larger cable bundles.', NULL, NULL, NULL, './pipes/Cable Protection/SPS-series cable protection spiral binding.png', 8, '2021-05-04 10:20:08', NULL, NULL, NULL, NULL, 1),
(45, 'Smart 3600 Solar Submersible Pump sets', 25000, NULL, 'AC submersible pumpsets and DC submersiblepums sets with permanent magnate rotor.\r\nDry running protection.\r\nRemote controllable& auto start and stop function ( on demand).\r\n', 'Low temp. rise\r\nHigh thrust bearing capacity.', NULL, NULL, './pipes/Urban Infrastructure/Smart 3600 Solar Submersible Pump sets.png', 9, '2021-05-04 10:26:17', NULL, NULL, NULL, NULL, 1),
(46, 'Smart 3600-4500 Solar Submersible Pumpsets', 10000, NULL, 'Smooth starting using VFD controller and can be used in low voltage area.\r\nVirtually NO maintenance cost.\r\n', 'Suitable for 110 to 415 voltage and Common for 1-Phase , 2-Phase and 3- Phase.', NULL, NULL, './pipes/Urban Infrastructure/Smart 3600-4500 Solar Submersible Pumpsets.png', 9, '2021-05-04 10:26:17', NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(10) NOT NULL,
  `UserEmail` varchar(50) NOT NULL,
  `UserPassword` varchar(50) NOT NULL,
  `UserFirstName` varchar(50) NOT NULL,
  `UserLastName` varchar(50) NOT NULL,
  `UserAddress` varchar(100) NOT NULL,
  `UserAddress2` varchar(100) DEFAULT NULL,
  `UserCity` varchar(30) DEFAULT NULL,
  `UserState` varchar(30) DEFAULT NULL,
  `UserZip` varchar(6) DEFAULT NULL,
  `UserCountry` varchar(20) DEFAULT NULL,
  `UserPhone` varchar(255) NOT NULL,
  `UserEmailVerified` varchar(255) DEFAULT NULL,
  `UserPaymentMethod` varchar(255) NOT NULL,
  `UserRegistrationDate` timestamp NULL DEFAULT NULL,
  `UserIP` varchar(50) DEFAULT NULL,
  `UserType` varchar(10) DEFAULT NULL,
  `UserVerificationCode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `UserEmail`, `UserPassword`, `UserFirstName`, `UserLastName`, `UserAddress`, `UserAddress2`, `UserCity`, `UserState`, `UserZip`, `UserCountry`, `UserPhone`, `UserEmailVerified`, `UserPaymentMethod`, `UserRegistrationDate`, `UserIP`, `UserType`, `UserVerificationCode`) VALUES
(2, 'vikassinghvv34@gmail.com', 'Vikas@123', 'Admin', 'singh', 'Makarpura ', '', 'Ahmedabad', 'Gujarat', '390014', NULL, '1234567890', 'active', 'cash on delivery', NULL, NULL, 'admin', 'a654va6e84e8wc568ew4f651cs85'),
(3, 'ishavaghera@gmail.com', 'Isha@123', 'Ishaa', 'Vaghera', '', NULL, NULL, NULL, NULL, NULL, '7418529630', 'inactive', '', NULL, NULL, NULL, NULL),
(4, 'jhinga@123.com', 'Jhinga@123', 'jhinga', 'kushwaha', '', NULL, NULL, NULL, NULL, NULL, '2583691470', 'active', '', NULL, NULL, NULL, NULL),
(12, 'vikassinghv34@gmail.com', 'Vikas@123', 'vikas', 'singh', 'makarpuraa', '', 'Vadodara', 'Gujarat', '930041', NULL, '8521364973', 'active', 'cash on delivery', NULL, NULL, NULL, '02bc87ae9a1bc52e82c0fcfb330942'),
(17, 'amitsinghsa26@gmail.com', '', 'Amit Singh', '', 'makarpura', NULL, NULL, NULL, NULL, NULL, '8401385969', NULL, '', NULL, NULL, NULL, NULL),
(18, 'rajendrasinghsa26@gmail.com', 'Vikas@123', 'vikas', 'singh', '', NULL, NULL, NULL, NULL, NULL, '7531234560', 'inactive', '', NULL, NULL, NULL, '85e7221fd33a06fd5c0b1853a443fb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`DetailID`),
  ADD KEY `orderid` (`DetailOrderID`),
  ADD KEY `productid` (`DetailProductID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `categoryid` (`ProductCategoryID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `DetailID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `CategoryID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderid` FOREIGN KEY (`DetailOrderID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `productid` FOREIGN KEY (`DetailProductID`) REFERENCES `products` (`ProductID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `categoryid` FOREIGN KEY (`ProductCategoryID`) REFERENCES `productcategory` (`CategoryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
