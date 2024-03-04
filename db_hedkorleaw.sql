-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: Mar 04, 2024 at 12:18 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hedkorleaw`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `user_id`, `amount`, `status`) VALUES
(5, 6, 9, '3', 'รอการตรวจสอบ'),
(6, 7, 9, '2', 'รอการตรวจสอบ'),
(7, 8, 9, '1', 'รอการตรวจสอบ');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `order_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `totalprice` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deilver`
--

CREATE TABLE `deilver` (
  `deilver_id` int(11) NOT NULL,
  `detail_product` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tracking_number` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `detail_id` int(11) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `new`
--

CREATE TABLE `new` (
  `new_id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `detail` varchar(200) DEFAULT NULL,
  `pic_new` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `new`
--

INSERT INTO `new` (`new_id`, `title`, `detail`, `pic_new`) VALUES
(2, 'จัดกิจกรรม Live สด เกี่ยวกับสินค้าชุมชนจังหวัดแม่ฮ่องสอน พบกับ สาวมากความสามารถคุณลูกพีช เจ้าของช่อง ', 'พรุ่งนี้เวลา 19.00 น. ศูนย์พัฒนาและแสดงสินค้าชุมชนจังหวัดแม่ฮ่องสอน จัดกิจกรรม Live สด เกี่ยวกับสินค้าชุมชนจังหวัดแม่ฮ่องสอนพบกับ สาวมากความสามารถคุณลูกพีช เจ้าของช่อง \" ลูกพีชChanel \"', 'editimg_65e0c687390c5.jpg'),
(4, 'เปิดเมิงไต ชิมอาหารไทใหญ่ ชมสินค้าท้องถิ่น ครั้งที่ 16 ชวน ช้อป ชิม', 'ระหว่างวันที่ 6 - 10 ธันวาคม 2566 \r\n                 ตั้งแต่เวลา 18.00 - 21.00 น.\r\n              ณ ศูนย์ไทใหญ่ศึกษา อำเภอเมือง จังหวัดแม่ฮ่องสอน\r\n                เชิญชวนนักท่องเที่ยวหรื', 'editimg_65b1c72219159.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `oder`
--

CREATE TABLE `oder` (
  `oder_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `date` date NOT NULL,
  `datetime` time NOT NULL,
  `img_order` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oder`
--

INSERT INTO `oder` (`oder_id`, `user_id`, `name`, `address`, `phone`, `price`, `date`, `datetime`, `img_order`) VALUES
(5, 9, 'ต้นไม้', '55/3 ต.ในเมือง อ.เมือง จ.เชียงใหม่ 50200', '0988884444', '820.00', '2024-02-08', '10:10:00', 'order_65c4d9d76a253.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `total` varchar(200) DEFAULT NULL,
  `pic_pay` varchar(250) DEFAULT NULL,
  `deilver` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `bank` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `name_product` varchar(200) NOT NULL,
  `detail` varchar(250) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `type_pro` varchar(250) DEFAULT NULL,
  `pic_product` varchar(250) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `dateadd` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `name_product`, `detail`, `price`, `type_pro`, `pic_product`, `amount`, `dateadd`) VALUES
(6, 'วริศรา', 'ผ้าพันคอ(แม่สุริน)', 'ผ้าพันคอ(แม่สุริน)', '150.00', 'เสื้อผ้าและเครื่องแต่งกาย', 'product_65b1c422352ae.jpg', '10', '2024-01-25'),
(7, 'ton', 'ถั่วลายเสือบดผสมเมล็ดงาม้อน', 'ถั่วลายเสือบดผสมเมล็ดงาม้อน', '100.00', 'อาหารและเครื่องดื่ม', 'product_65b1c55daf593.jpg', '20', '2024-01-16'),
(8, 'กวาด', 'สบู่อะโวคาโด้ผสมวิตามินอีพลัส', 'สบู่อะโวคาโด้ผสมวิตามินอีพลัส', '120.00', 'เครื่องสำอาง', 'product_65b1c59d549ff.jpg', '2', '2024-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `promotion_id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `detail` varchar(250) DEFAULT NULL,
  `pic_promotion` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`promotion_id`, `title`, `detail`, `pic_promotion`) VALUES
(1, 'สวัสดีปีใหม่ 2567 พร้อมโปรโมชั่นลดกระหน่ำ 50 % จริงๆมาก', 'ระยะโปรโมชั่นที่ใช้ได้ ตั้งแต่วันที่ 1 ม.ค. 67 - 31 ม.ค. 67 - - เงื่อนไขการสั่งซื้อ ผู้ใช้งานสามารถดำเนินการสั่งซื้อได้สูงสุด 5 คำสั่งซื้อ เมื่อซื้อครบ 800 บาท รับส่วนลดโปรโมชั่น Happy new year 2024 สูงสุด 50 %', 'editimg_65b1c60dc194f.png'),
(3, 'ซื้อ 1 แถม 1', 'ซื้อสินค้า 1 ชิ้น แถมฟรี 1 ชิ้น', 'editimg_65b1c643212e2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `detail` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `address` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `email`, `phone`, `address`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ผู้ดูแลระบบ', 'hedkorleawOTOP@gmail.com', 989056624, 'ด้านหน้าโรงเรียน อบจ. บ้านจองคำถ. ขุนลุมประพาส ต.จองคำอ. เมือง จ.แม่ฮ่องสอน', 'a'),
(2, 'manager', '1d0258c2440a8d19e716292b231e3190', 'ผู้จัดการ', 'hedkorleawOTOP@gmail.com', 989056624, 'ด้านหน้าโรงเรียน อบจ. บ้านจองคำถ. ขุนลุมประพาส ต.จองคำอ. เมือง จ.แม่ฮ่องสอน', 'g'),
(3, 'cooperative', 'bfb8fe1089e61fa92c0c72558bf496fd', 'สหกรณ์ชุมชน', 'hedkorleawOTOP@gmail.com', 989056624, 'ด้านหน้าโรงเรียน อบจ. บ้านจองคำถ. ขุนลุมประพาส ต.จองคำอ. เมือง จ.แม่ฮ่องสอน', 'c'),
(4, 'employee', 'fa5473530e4d1a5a1e1eb53d2fedb10c', 'พนักงาน', 'hedkorleawOTOP@gmail.com', 989056624, 'ด้านหน้าโรงเรียน อบจ. บ้านจองคำถ. ขุนลุมประพาส ต.จองคำ อ. เมือง จ.แม่ฮ่องสอน', 'e'),
(11, 'ton', '81dc9bdb52d04dc20036dbd8313ed055', 'tonlnwza', 'warissara.yanajit@gmail.com', 631928924, '95', 'm'),
(12, 'warissara01', 'e10adc3949ba59abbe56e057f20f883e', 'warissara', 'test@gmail.com', 984848484, '555', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `viewcount`
--

CREATE TABLE `viewcount` (
  `viewid` int(1) NOT NULL,
  `view_count` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `viewcount`
--

INSERT INTO `viewcount` (`viewid`, `view_count`) VALUES
(1, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `deilver`
--
ALTER TABLE `deilver`
  ADD PRIMARY KEY (`deilver_id`);

--
-- Indexes for table `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`new_id`);

--
-- Indexes for table `oder`
--
ALTER TABLE `oder`
  ADD PRIMARY KEY (`oder_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`promotion_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `viewcount`
--
ALTER TABLE `viewcount`
  ADD PRIMARY KEY (`viewid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deilver`
--
ALTER TABLE `deilver`
  MODIFY `deilver_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `new`
--
ALTER TABLE `new`
  MODIFY `new_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oder`
--
ALTER TABLE `oder`
  MODIFY `oder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `promotion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `viewcount`
--
ALTER TABLE `viewcount`
  MODIFY `viewid` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
