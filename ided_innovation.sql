-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2016 at 06:14 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ided_innovation`
--

-- --------------------------------------------------------

--
-- Table structure for table `innovation`
--

CREATE TABLE `innovation` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `idsearch` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `innovation` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contack` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `abstract` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `pdf` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `innovation`
--

INSERT INTO `innovation` (`id`, `type`, `idsearch`, `year`, `name`, `innovation`, `image`, `contack`, `abstract`, `pdf`, `date`, `status`) VALUES
(2, 2, 'gr32343ef', '2559', 'ณัฐพล พุทธานุ', 'การพัฒนาเว็บไซตระบบฐานข้อมูลวัสดุครุภัณฑโรงเรียนอรรถวิทย', 'DuuuAWK6OOkhiKWluNQ9.png', 'ติดต่อ', 'บทคัดย่อ', '', '0000-00-00', 1),
(3, 2, 'gr32343ef', '2559', 'ณัฐพล พุทธานุ', 'เว็บ', '', 'ติดต่อ', 'บทคัดย่อ', '', '0000-00-00', 1),
(4, 3, 'gr32343ef', '2559', 'ณัฐพล พุทธานุ', 'เว็บ', '', 'ติดต่อ', 'บทคัดย่อ', 'aEuSYLY2O4xvF9UCY8he.pdf', '0000-00-00', 1),
(5, 3, 'gr32343ef', '2559', 'ณัฐพล พุทธานุ', 'เว็บ', 'rDNx6LofxY0BAgcjB46A.png', 'ติดต่อ', 'บทคัดย่อ', '', '0000-00-00', 1),
(6, 3, 'gr32343ef', '2559', 'ณัฐพล พุทธานุ', 'เว็บ', 'nhamERfjRoABt0m3thi2.png', 'ติดต่อ', 'บทคัดย่อ', '', '0000-00-00', 1),
(7, 3, 'gr32343ef', '2559', 'ณัฐพล พุทธานุ', 'เว็บ', 'jDoWG4rRvQ31mEyUlINt.png', 'ติดต่อ', 'บทคัดย่อ', '', '0000-00-00', 1),
(8, 1, 'dhdtdd3jgyt', '2558', 'Nutthapon Buddhanu', 'เว็บ', 'pUlqswVb2FTaeA7kFZU9.png', 'ติดต่อ', 'บทคัดย่อ', 'q58A5C87KMKI1ijQYoHs.pdf', '0000-00-00', 1),
(9, 4, 'jjjdkje', '2560', 'นัท', 'กส้่ด่เ้กนดรเ่กา่กหด่ก่ดนำากนดากยนเ่นยฟ่กยเนฟ่ยกน', 'IHrphejgjWxNvbC45MwH.png', '65767', 'kjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdnkjbndnkjnkjdn', 'M5GLNW6SQHe7bc35uL2R.pdf', '0000-00-00', 1),
(10, 1, 'kjfafd', '2559', 'ณัฐพล พุทธานุ', 'เว็บ', '', '', '', '', '2016-10-31', 1),
(11, 4, 'a12232s', '2560', 'ณัฐพล พุทธานุ', 'การพัฒนาระบบตัดสินใจ', '', '', 'vgjhbdkksjnfsjdnkfndjvkdblbvk', '', '2016-10-31', 1),
(12, 2, 'KMITL-2016-ED-M-214-078', '2016', 'นางสาวสุดารัตน์ ปานทอง', 'การพัฒนาสื่อออนไลน์แบบยูเลิร์นนิ่ง เรื่องการเขียนโปรแกรมด้วยภาษาคอมพิวเตอร์ชั้นมัธยมศึกษาปีที่ 3 ประกอบการจัดการเรียนรู้แบบผสมผสาน', '0K3ZrweKAgvEydHGW4aj.png', 'ศูนย์นวัตกรรมและเทคโนโลยี', 'การวิจัยนี้มีวัตถุประสงค์เพื่อ 1) เพื่อพัฒนาเว็บไซต์ระบบฐานข้อมูลวัสดุครุภัณฑ์โรงเรียนอรรถวิทย์ที่มีคุณภาพและ 2) เพื่อหาความพึงพอใจของเว็บไซต์ระบบฐานข้อมูลวัสดุครุภัณฑ์โรงเรียนอรรถวิทย์ ประชากรที่ใช้ในการวิจัยคือ ผู้บริหาร และครูโรงเรียนอรรถวิทย์ จำนวน 70 คน กลุ่มตัวอย่างที่ใช้ในการวิจัยคือ ผู้บริหารและครูโรงเรียนอรรถวิทย์ จำนวน 30 คน โดยใช้การเลือกตัวอย่างแบบเจาะจง (purposive sampling) เครื่องมือที่ใช้ในการวิจัยครั้งนี้ประกอบด้วย 1) เว็บไซต์ระบบฐานข้อมูลวัสดุครุภัณฑ์โรงเรียนอรรถวิทย์ 2) แบบประเมินคุณภาพและ 3) แบบสอบถามความพึงพอใจผู้ใช้ระบบที่มีต่อเว็บไซต์ โดยมีค่าความเชื่อถือได้ของแบบสอบถามเท่ากับ 0.85 สถิติที่ใช้ในการวิเคราะห์ข้อมูลได้แก่ ค่าเฉลี่ย และส่วนเบี่ยงเบนมาตรฐาน ผลวิจัยพบว่า เว็บไซต์ระบบฐานข้อมูลวัสดุครุภัณฑ์โรงเรียนอรรถวิทย์ โดยภาพรวมมีคุณภาพอยู่ในระดับดีมาก (X ̅ = 4.89, S = 0.09) และความพึงพอใจของผู้ใช้งานต่อเว็บไซต์ระบบฐานข้อมูลวัสดุครุภัณฑ์โรงเรียนอรรถวิทย์ ภาพรวมมีความพึงพอใจอยู่ในระดับมากที่สุด (X ̅ = 4.51, S = 2.69) เมื่อพิจารณาเป็นรายด้านพบว่า ด้านระบบการป้อนข้อมูล อยู่ในระดับมาก (X ̅ = 4.48, S = 0.19) และด้านการประมวลผลรายงาน อยู่ในระดับมากที่สุด (X ̅ = 4.55, S = 0.27) ', 'P5KvOWMIZS8WXC7COmBJ.pdf', '2016-11-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `status`) VALUES
(1, 'admin', 'adminmaster', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `innovation`
--
ALTER TABLE `innovation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `innovation`
--
ALTER TABLE `innovation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
