-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2016 at 10:24 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_mangement`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `name` varchar(50) NOT NULL,
  `phno` varchar(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `id` int(11) NOT NULL,
  `profit` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`name`, `phno`, `price`, `date`, `time`, `id`, `profit`) VALUES
('jai pal', '1234567890', 1500, '2016-11-20', '07:26:00', 8, 150),
('Nilesh', '8561081683', 65000, '2016-11-22', '10:09:00', 9, 6005),
('Nilesh', '8696438199', 104000, '2016-11-22', '10:46:00', 10, 4000),
('jai pal', '89676476788', 6000, '2016-11-22', '11:11:00', 11, 5406),
('asma', '24556768', 22000, '2016-11-22', '12:52:00', 12, 2302);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `des` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `costprice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `des`, `quantity`, `costprice`) VALUES
(1, 'Hard disk 1TB', 1000, 'Segate 1TB', 11, 99),
(2, 'Desktop Computer', 20000, 'i5(6th gen),4 GB , 1TB HDD,Integrated graphics', 46, 19500),
(3, 'Memory card 32', 500, 'Sand disk 32 GB', 46, 450),
(4, 'Memory card 128', 10000, 'Samsung 128GB', 50, 450),
(5, 'keyboard', 500, 'Dell wired keyboard', 50, 450),
(6, 'keyboard mouse combo', 550, 'Intex keyboard mouse combo', 50, 500),
(7, 'Wireless keyboard mouse', 1000, 'Longitech wireless keyboard and mouse', 50, 900),
(8, 'Laptop lenovo think pad', 55000, '14 inch i7 4th gen, 6gb 1 tb', 15, 53000),
(9, 'Dell laptop ', 100000, 'i7 5th gen , 8 gb ,256 gb ssd, integrated graphics', 9, 95000),
(10, 'hp laptop', 60000, 'i5 6th gen, 4gb ,1 tb hdd , touch', 10, 56000),
(11, 'Pen drive', 326, 'Sandisk 16 gb', 100, 300),
(12, 'pen drive', 459, 'HP 16 gb', 100, 430),
(13, 'printer', 4000, 'HP Deskjet ink printer', 5, 3500),
(14, 'printer', 4500, 'Samsung laser printer', 5, 3800),
(15, 'Mac book laptop', 62000, 'Core i5/8GB/128GB/Mac OS X/Integrated Graphics', 5, 55000),
(16, 'Hard disk ssd', 10000, 'Sony 256GB External Solid State Hard Drive', 50, 9000),
(17, 'hard disk ssd', 5000, 'Lite-On Mu 2 240GB SSD PH3-CE240', 50, 4500),
(18, 'Speakers', 1000, 'Intex 2.1 speakers', 10, 900),
(19, 'Bluetooth speaker', 370, 'blue tooth multimedia speakers', 50, 350),
(20, 'wifi router', 1000, 'TP link wifi router', 6, 950),
(21, 'monitor', 6000, 'Monitor Samsung 18.5', 10, 5500),
(22, 'cooling pad', 500, 'laptop cooling pad', 10, 450),
(23, 'Hp laptop bag', 500, 'Hp laptop bag', 10, 450),
(24, 'Laptop skin', 200, 'Hacker laptop skin', 0, 100),
(25, 'laptop', 52000, 'i7 5th gen, 4gb ,1tb, ', 1, 50000),
(26, 'IPhone', 56000, 'A', 10, 55000),
(27, 'USB 3.0', 6500, 'Dual-Head Graphics and Gigabit Ethernet Adapter Super Speed 5 Gbps Dual ', 100, 6000),
(28, 'sand disk PD 32gb', 600, 'SanDisk Ultra Dual USB Drive 3.0 Black', 100, 500),
(29, 'Strontium 32GB', 1300, 'Strontium Nitro Plus OTG Pen Drive, USB3.0, 32GB', 50, 900),
(30, 'Wireless datacard 4GB ROM', 2500, 'Reliance Jio Wi-Fi M2 Wireless Data Card', 60, 2200),
(31, 'Sony HeadPhone(white)', 1300, 'Sony MDR-ZX110A Stereo On-Ear Headphone(White)', 90, 999),
(32, 'Samsung M2071W Laser Printer', 11000, 'Samsung M2071W WiFi Multi Function Laser Printer', 10, 9999),
(33, 'HP Ink Tank GT 5810 Printer (Print, Scan, Copy)', 6000, 'HP Ink Tank GT 5810 Printer (Print, Scan, Copy)', 80, 5000),
(34, 'Epson L565 InkJet Photo Printer', 15000, 'Ultra-low-cost printing, copying and scanning\r\nHigh-quality, reliable results\r\nHassle-free with simple set-up and maintenance and 30-page ADF', 20, 12000),
(35, 'Samsung SCX-4021S  Multi Function Laser Printer', 9000, 'Samsung SCX-4021S Monochrome Multi Function Laser Printer', 0, 8000),
(36, 'Brother DCP-L2541DW Monochrome Wifi Laser Printer', 10000, 'Copy, Scan, Automatic 2-sided Print, Networking (Wired/Wireless)\r\nFast print speeds up to 30ppm (A4) for monochrome laser printing', 20, 9000),
(37, 'ANT VR Headset (Black)  with Android M update', 5000, 'Compatible with Lenovo K4 Note TheaterMax technology providing widescreen virtual cinematic experience. Also compatible with Lenovo Vibe X3, K5 Plus and K3 Note (with Android M update)', 50, 4500),
(38, 'Inventis 5V 1.2W Portable Flexible USB LED', 300, 'Rated voltage: 5V, Rated Power: 1.2W\r\nPowered by any Devices with USB', 200, 250),
(39, 'TP-Link AD7200 Gigabit Router Talon AD7200 AC5400', 5000, 'TP-Link AD7200 Wireless Wi-Fi Tri-Band Gigabit Router Talon AD7200 AC5400', 100, 4500),
(40, 'Sandisk 16GB Micro SD Card', 600, 'Capture more photos\r\nShare more of your favorite photos and videos with your friends and family', 200, 499),
(41, 'D-Link DSL-2750U  N 300 ADSL2+ 4-Port with Modem', 7500, 'D-Link DSL-2750U Wireless N 300 ADSL2+ 4-Port Wi-Fi Router with Modem (Black)', 60, 7000),
(42, 'Sony Microvault 16GB Pen Drive (White) by Sony', 700, 'Sony Microvault 16GB Pen Drive (White)\r\nby Sony', 200, 689),
(43, 'Ntron NT-IPAKY-NOT3 Original iPaky Brand Luxury ', 500, 'Ntron NT-IPAKY-NOT3 Original iPaky Brand Luxury High Quality Ultra-Thin Dotted Silicon Back + PC Gold Frame Bumper Back Case Cover for Xiaomi Redmi Note 3 - Gold', 150, 450),
(44, 'Seagate Expansion 1.5TB Portable External Drive', 6000, 'Seagate Expansion 1.5TB Portable External Drive', 20, 5500),
(45, 'Intex IT-2616SUF-OS 4.1 Multimedia Speakers', 4000, 'Intex IT-2616SUF-OS 4.1 Computer Multimedia Speakers', 20, 3600),
(46, 'Intex IT-PB11K 11000 mAh Power Bank (White)', 1000, 'Intex IT-PB11K 11000 mAh Power Bank (White)', 60, 800),
(47, 'Western Digital 1TB Portable Hard Drive (Black)', 7000, 'Western Digital My Passport 1TB Portable External Hard Drive (Black)', 50, 6500),
(48, 'Silicone Keyboard Protector Skin for Laptop 15.6 ', 500, 'Universal Silicone Keyboard Protector Skin for Laptop 15.6\r\nby Generic', 150, 350),
(49, 'TP-Link TL-WN725N 150Mbps Wireless USB Adapter ', 1000, 'TP-Link TL-WN725N 150Mbps Wireless N Nano USB Adapter (Black)', 220, 500),
(50, 'Philips SHE1360/97   In - Ear   Headphone  (Black)', 1000, 'Philips SHE1360/97 In-Ear Headphone (Black)', 200, 700),
(51, 'Logitech B170 Wireless Mouse (Black)', 600, 'Logitech B170 Wireless Mouse (Black)', 200, 500),
(52, 'Intex IT-881U 2.1 Computer Multimedia Speakers', 5000, 'Intex IT-881U 2.1 Computer Multimedia Speakers', 30, 3500),
(53, 'Logitech M235 Wireless Mouse (Grey)', 1200, 'Logitech M235 Wireless Mouse (Grey)', 59, 900),
(54, 'Micromax Tab P290 (7 inch, 8GB, Wi-Fi Only), Black', 5000, 'Micromax Canvas Tab P290 Tablet (7 inch, 8GB, Wi-Fi Only), Black', 10, 4500),
(55, 'HP 678 2-pack Black & Tri-color Ink Cartridges', 1000, 'HP 678 2-pack Black & Tri-color Ink Advantage Cartridges (L0S24AA)', 100, 800),
(56, 'Edge TPU FlexibleBack Cover for Xiaomi Redmi  Gold', 400, '\r\nClick to open expanded view\r\nKaira Electroplated Edge TPU Flexible Back Case Cover for Xiaomi Redmi Note 3 - Gold', 0, 360),
(57, 'MacBook Air 13" 13-inch Case Baby Pink Skin', 600, '\r\nClick to open expanded view\r\nMacBook Air 13" 13-inch Case Baby Pink Skin Case cover for MacBook Air 13.3" Shell Cover Case + Get Silicone Keyboard Cover + Touchpad Protector Free', 100, 360),
(58, 'Keyboard Protector Silicone Skin Cover for Lenovo', 1000, 'Saco Keyboard Protector Silicone Skin Cover for Lenovo G G50-80 80E502Q3IH 15.6 inch Laptop (Black/Clear)', 20, 900),
(59, 'HP  X 1000        Wired Mouse   (Black/Grey color)', 500, 'HP X1000 Wired Mouse (Black/Grey)', 100, 300),
(60, 'Cash / Bill/ Currency/  Note Counting Machine ', 6000, 'SToK ST-MC01 Cash / Bill / Currency/ Money / Note Counting Machine with Fake Note Detector & LED Display ', 80, 5000),
(61, 'iBall Nirantar UPS-621V(600VA) Power Protection', 3000, 'iBall Nirantar UPS-621V(600VA) Power Protection', 40, 2300),
(62, 'Quantum QHM7403 USB/PS2 Keyboard (Black)', 5000, 'Quantum QHM7403 USB/PS2 Keyboard (Black)', 20, 3999),
(63, 'Mobitron Rugby Bluetooth Multimedia Speaker', 4999, 'Mobitron Rugby Bluetooth Multimedia Speaker (Multicolor)', 20, 2999),
(64, 'Portronics POR 343 UFO Home Charger 6 Ports', 1000, 'Portronics POR 343 UFO Home Charger 6 Ports 8A Charging Station - White', 100, 800),
(65, 'V-Guard Mini Crystal Voltage Stabilizer for TV', 3000, 'V-Guard Mini Crystal Voltage Stabilizer for Television (Black', 100, 2500),
(66, 'Canon EOS 1200D 18MP Digital SLR Camera ', 5000, '\r\nClick to open expanded view\r\nCanon EOS 1200D 18MP Digital SLR Camera (Black) with 18-55mm and 55-250mm IS II Lens,8GB card and Carry Bag', 30, 4500),
(67, ' Huawei Airtel 4G wifi hotspotwith any 4G network ', 4999, 'Shadow Securitronics Huawei Airtel 4G wifi hotspot unlocked works with any 4G network - WITH 1 METER CABLE & WALL CHARGER', 100, 4500),
(68, 'Dragonwar Leviathan ELE-G1 Gaming Laser Mouse ', 1000, 'Dragonwar Leviathan ELE-G1 Gaming Laser Mouse (Black)', 70, 700),
(69, 'Generic Ok Stand For Smartphones And Tablets', 500, 'Generic Ok Stand For Smartphones And Tablets', 100, 399),
(70, 'Quantum Slim USB 2.0 High Speed Hub 4 Port Color', 200, 'Quantum Slim USB 2.0 High Speed Hub 4 Port Color', 10, 150),
(71, 'Dell 19.5V-3.34AMP 65W Adapter CAT5 RJ45', 999, 'Dell 19.5V-3.34AMP 65W Adapter', 29, 800),
(72, 'V-Guard CRYSTAL PLUS Voltage Stabilizer for TV', 3000, 'V-Guard CRYSTAL PLUS Voltage Stabilizer for Television (Black)', 10, 2399),
(73, 'Neoprene Best Water-Resistant Protective Case', 1000, 'Neoprene Macbook Sleeve - Best Water-Resistant Protective Case For 13" MacBook Pro & Air (including Retina) Laptop Computer and Ultrabook - Cover Bag Includes Compartment For Charger - Mint', 10, 899),
(74, 'F&D F-203G 2.1 Speaker System (Black)', 3999, 'F&D F-203G 2.1 Speaker System (Black)', 67, 2500),
(75, 'Redgear Smartline Wired Gamepad Plug for pc games', 2000, 'Redgear Smartline Wired Gamepad Plug and Play support for all PC games supports Windows 7 / 8 / 8.1 / 10', 20, 1599),
(76, 'iBall Soundwave2 2.0 Multimedia Speakers', 4000, 'iBall Soundwave2 2.0 Multimedia Speakers, Black', 29, 3499),
(77, 'Leather Case Cover Stand USB Keyboard ', 500, 'PTron Universal Leather Case Cover Stand USB Keyboard for All 7-inch Tablets', 100, 459),
(78, 'Sony MDRZX110 On-Ear Stereo Headphone (Black)', 1300, 'Sony MDRZX110 On-Ear Stereo Headphone (Black)', 0, 1200),
(79, 'Sennheiser HD 180 Over-Ear Headphone ', 1000, 'Sennheiser HD 180 Over-Ear Headphone (Black)', 10, 8999),
(80, 'Lenovo Yoga Tab 3 8 Tablet (8 inch, 16GB, )', 16000, 'Lenovo Yoga Tab 3 8 Tablet (8 inch, 16GB, Wi-Fi + 4G LTE + Voice Calling), Slate Black', 56, 14999),
(81, 'Canon EOS 700D 18MP Digital SLR Camera', 45000, 'Canon EOS 700D 18MP Digital SLR Camera (Black) with 18-55mm IS II and 55-250mm IS II Lens, 8GB card and Carry Bag', 10, 42999),
(82, 'Sony MDR-AS200 Clip Headphones (Blue)', 2399, 'Sony MDR-AS200 Clip On Active Sport Lightweight Angled Earbud Headphones (Blue)', 34, 2000),
(83, 'iBall Excelance CompBook 11.6-inch Laptop', 10000, 'iBall Excelance CompBook 11.6-inch Laptop (Atom Z3735F/2GB/32GB/Windows 10/Integrated Graphics)', 12, 8999),
(84, 'Zebronics BT4440RUCF 4.1  Bluetooth Speakers', 3000, 'Zebronics BT4440RUCF 4.1 Channel Bluetooth Speakers', 12, 2599),
(85, 'Reliance JIO Jio-fi wireless Router', 2500, 'Reliance JIO Jio-fi wireless Router', 34, 2299),
(86, 'Dell Inspiron 3558 Notebook laptop', 35000, 'Dell Inspiron 3558 Notebook (5th Gen Intel Core i3- 4GB RAM- 1TB HDD- 39.62 cm(15.6)- Ubuntu) (Black)', 54, 33999),
(87, 'TP-Link TL-WA850RE 300Mbps Universal WiFi Range', 3000, 'TP-Link TL-WA850RE 300Mbps Universal WiFi Range Extender (White)', 76, 2399),
(88, 'Clublaptop Reversible 15.6-inch Laptop Sleeve', 500, 'Clublaptop Reversible 15.6-inch Laptop Sleeve', 76, 239),
(89, 'YU YUNIQUE YU4711 Smartphone (Black)', 5500, 'YU YUNIQUE YU4711 Smartphone (Black)', 78, 4599),
(90, 'Strontium Ammo 16GB USB Pen Drive', 1000, 'Strontium Ammo 16GB USB Pen Drive', 23, 799),
(91, 'Intex JOIN-IT 2.0 Multimedia Speaker', 650, 'Intex JOIN-IT 2.0 Multimedia Speaker', 43, 539),
(92, 'MacBook Pro 13.3" Case. Laptop cover', 1200, 'MacBook Pro 13.3" Case. Laptop Frosted Matte Rubberized Hard Cover Case Skin+Silicon Keyboard Cover', 23, 1000),
(93, 'Intex IT-HP904FM Over-Ear Headphones (Black)', 900, 'Intex IT-HP904FM Over-Ear Headphones (Black)', 7, 789),
(94, 'WireSwipe™ HDMI Male to HDMI Male Cable ', 500, 'WireSwipe™ HDMI Male to HDMI Male Cable TV Lead 1.4V High Speed Ethernet 3D Full HD 1080p (1.5 meter)', 34, 349),
(95, 'Wayona Wifi Adapter', 1000, '\r\nRoll over image to zoom in\r\nWayona WYN 12 150Mbps 1T1R 2.4Ghz 802.11n/g/b Soft AP Wireless Mini USB Wifi Adapter', 23, 567),
(96, 'Quantam QHMPL QHM7468 USB Vibration Game', 500, 'Quantam QHMPL QHM7468 USB Vibration Game Pad Remote Joystick', 23, 349),
(97, 'HDD WD Seagate hard disk cover', 500, 'Technotech WD Hard Disk Drive Pouch case for 2.5" HDD WD Seagate Slim Sony Dell Toshiba (Black)\r\n', 12, 349),
(98, 'Netgear WNR614 N300 Wi-Fi Router (White)', 1500, 'Netgear WNR614 N300 Wi-Fi Router (White)', 87, 1299),
(99, 'Air 13" 13-Inch Mint Green Cover', 1000, 'Air 13" 13-Inch Mint Green Rubberized Hard Case Cover For Macbook Air 13" 13.3" 13-Inch Shell Cover Case', 32, 567),
(100, 'Fitbit Charge 2 Wireless Activity Tracker ', 15000, 'Fitbit Charge 2 Wireless Activity Tracker and Sleep Wristband (Large, Black/Silver)', 45, 13999),
(101, 'CNCT Heavy Duty(Weight Capacity-15 KG)  Single Arm', 600, 'CNCT Heavy Duty (Weight Capacity - 15 KG) Wall Mount / Bracket / Stand Single Arm for upto 27" LCD - LED - OLED TV with Maximum VESA 100 MM - Supports Displays - Monitors ', 23, 457),
(102, '15 PIN MALE TO MALE VGA CABLE 1.5 Meter', 500, '15 PIN MALE TO MALE VGA CABLE 1.5 Meter', 57, 455),
(103, 'JunkYard Laptop Skins 15.6 inch-Batman VS Superman', 500, 'JunkYard Laptop Skins 15.6 inch - Batman VS Superman - Movie Skins - HD Quality - Dell', 23, 450),
(104, 'Kaspersky Anti-Virus 2016 new for 1 pc,1 year (CD)', 1000, 'Kaspersky Anti-Virus 2016 - 1 PC, 1 Year (CD)', 87, 879),
(105, 'ESET NOD32 Antivirus 2016 Edition ', 599, 'ESET NOD32 Antivirus 2016 Edition ', 98, 450),
(106, 'Bluetooth Receiver Adapter ', 599, 'Bluetooth Receiver Adapter ', 76, 459),
(107, 'Samsung 18.5 Super Slim LED Monitor ', 6000, 'Samsung 18.5 Super Slim LED Monitor ', 9, 5699),
(108, 'Micromax 46.99 cm (18.5) MM185H65 Monitor', 5500, 'Micromax 46.99 cm (18.5) MM185H65 Monitor', 45, 5199),
(109, 'BRAND NEW DESKTOP CPU', 4000, 'BRAND NEW DESKTOP COMPUTER', 8, 3499),
(110, 'HP Slimline 260-A062IL CPU', 6000, 'HP Slimline 260-A062IL', 56, 5499),
(111, 'high configuration CORE 2 CPU', 6799, 'HIGH CONFIGURATION CORE 2', 34, 6199),
(112, 'Circle LIL Desktop Computer', 3000, 'Circle LIL Desktop Computer', 0, 2699),
(113, 'CPU COMPUTER Intel Core i5-650', 2500, 'CPU COMPUTER Intel Core i5-650', 65, 2199),
(114, 'Wi-Fi Range Extender ', 2900, 'Wi-Fi Range Extender ', 34, 2599),
(115, 'Bluetooth Smart Wrist Watch', 1900, 'Bluetooth Smart Wrist Watch', 9, 1599),
(116, 'SanDisk Connect Wireless Stick', 999, 'SanDisk Connect Wireless Stick', 45, 789),
(117, 'Technotech 3 Pin Computer Power Cord Cable', 999, 'Technotech 3 Pin Computer Power Cord Cable', 76, 789),
(118, 'Logitech C310 HD Webcam', 2100, 'Logitech C310 HD Webcam', 87, 1799),
(119, 'Netgear EX2700 N300 Wi-Fi Range Extender', 899, 'Netgear EX2700 N300 Wi-Fi Range Extender', 44, 678),
(120, 'V-Guard VG 50 Voltage Stabilizer', 1199, 'V-Guard VG 50 Voltage Stabilizer', 87, 999),
(121, 'Tenda A301 Wireless N300 ', 2999, 'Tenda A301 Wireless N300 ', 98, 2599),
(122, 'Usb Type-C Cable 100cm', 888, 'Usb Type-C Cable 100cm', 67, 599),
(123, 'TP-Link TL-WA850RE 300Mbps', 899, 'TP-Link TL-WA850RE 300Mbps', 87, 699),
(124, 'CE-101L 3 PIN CONVERSION PLUG 5', 200, 'CE-101L 3 PIN CONVERSION PLUG 5', 32, 149),
(125, 'Intex Fitrist Health Band', 999, 'Intex Fitrist Health Band', 0, 799),
(126, 'Unique Gadget Card Reader ', 499, 'Unique Gadget Card Reader ', 76, 399),
(127, 'Zebronics  Bluetooth Headset', 499, 'Zebronics ZEB-BH498 Wireless Bluetooth Headset', 45, 399),
(128, 'Corsair VS Series VS450', 2999, 'Corsair VS Series VS450', 46, 2019),
(129, 'Ultrascan Decoding Technology', 2500, 'Ultrascan Decoding Technology', 0, 1999),
(130, 'Logitech Wireless presenter', 4499, 'Logitech Wireless presenter', 21, 3999);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone_number` text NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `email`, `password`, `phone_number`, `Address`) VALUES
(1, 'Manisha', 'Meena', 'meenamanisha337@gmail.com', '247e0a31048554f35902283df30263ab', '2147483647', 'Gargi hostel, mnit campus,jaipur'),
(2, 'Deepak', 'Yadav', 'trigodeepak@gmal.com', '498b5924adc469aa7b660f457e0fc7e5', '2147483647', 'Rohit, MNIT, Jaipur'),
(3, 'Asma', 'Bano', 'azmisheikh04@gmail.com', 'f93a40ec0518673f1242ab46b844d919', '2147483647', 'Guest house, mnit, Jaipur'),
(4, 'Sumir', 'Mathur', 'sumir.mathur@gmail.com', '72358fc1b7eedfa0d3d02d3247dbf507', '2147483647', 'MNIT,Jaipur'),
(5, 'Krishna', 'Sharma', 'sharma.krishna091996@gmail.com', 'e02c8e47a7bdc3a810d422c8d1695195', '2147483647', 'akjlfaskljdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `products` ADD FULLTEXT KEY `name` (`name`);
ALTER TABLE `products` ADD FULLTEXT KEY `name_2` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
