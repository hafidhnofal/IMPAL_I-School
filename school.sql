-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 12:16 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `name`, `gender`, `birthdate`, `phone`, `password`) VALUES
(123, 'Admin', 'l', '1975-09-11', '082371724600', '123');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assignmentid` int(11) NOT NULL,
  `assignmentname` varchar(50) DEFAULT NULL,
  `ket_assignment` text NOT NULL,
  `image` text NOT NULL,
  `teacher_nip` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `for_class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignmentid`, `assignmentname`, `ket_assignment`, `image`, `teacher_nip`, `subjectid`, `for_class`) VALUES
(11, 'Perkalian', 'Tugas Menghafal perkalian ', '1576321396.jpg', 223001, 14, 1),
(12, 'Tugas 1', 'Kerjakan Sebisanya Saja', '1576321437.jpg', 223001, 17, 1),
(13, 'Tugas Sastra', 'Kerjain Secepatnya', '1576321613.jpg', 223002, 13, 2),
(14, 'Tugas Merangkum', 'Rangkum Tugas Dari Halaman 1 sampai 999', '1576321641.jpg', 223002, 17, 2);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `classid` int(11) NOT NULL,
  `classnumber` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`classid`, `classnumber`) VALUES
(1, '1(one)'),
(2, '2(two)'),
(3, '3(three)'),
(4, '4(four)'),
(5, '5(five)'),
(6, '6(six)');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `parentid` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `password` varchar(24) DEFAULT NULL,
  `admin_adminid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `nis` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(24) DEFAULT NULL,
  `class_classid` int(11) NOT NULL,
  `admin_adminid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`nis`, `name`, `gender`, `birthdate`, `phone`, `password`, `class_classid`, `admin_adminid`) VALUES
(112001, 'Dexter Dawson', 'l', '2013-02-06', '5435543', '112001', 1, 123),
(112002, 'Kaira Larson', 'p', '2013-01-01', '321334', '112002', 1, 123),
(112003, 'Conrad Glenn', 'l', '2013-12-11', '123334', '112003', 1, 123),
(112004, 'Camron Forbes', 'l', '2013-11-11', '321433', '112004', 1, 123),
(112005, 'Alaya Steadman', 'l', '2013-07-07', '5675554', '112005', 1, 123),
(113001, 'Elyse Donovan', 'p', '2012-02-12', '4535', '113001', 2, 123),
(113002, 'Zhane Leal', 'l', '2012-07-07', '432423432', '113002', 2, 123),
(113003, 'Emilio Gordon', 'l', '2013-02-06', '4354', '113003', 2, 123),
(113004, 'Doris Mccallum', 'l', '2012-04-06', '345', '113004', 2, 123),
(113005, 'Mahamed Bridges', 'l', '2012-02-08', '645646', '113005', 2, 123),
(114001, 'Margaret Bryan', 'p', '2011-02-06', '566', '114001', 3, 123),
(114002, 'Uzair Hoffman', 'l', '2011-04-09', '64566', '114002', 3, 123),
(114003, 'Corinne Lu', 'l', '2011-05-03', '643768', '114003', 3, 123),
(114004, 'Abdi Hogan', 'l', '2011-08-04', '987', '114004', 3, 123),
(114005, 'Ayaan Strickland', 'l', '2011-07-06', '763', '114005', 3, 123),
(115001, 'Sachin Whitneym', 'l', '2010-02-07', '6543', '115001', 4, 123),
(115002, 'Dexter Bruce', 'l', '2010-05-06', '1231', '115002', 4, 123),
(115003, 'Angelica Woodcock', 'p', '2010-09-04', '343254', '115003', 4, 123),
(115004, 'Aarush Fleming', 'l', '2010-04-06', '432', '115004', 4, 123),
(115005, 'Ariana Robbins', 'p', '2010-03-09', '54322', '115005', 4, 123),
(116001, 'Corban Esquivel', 'l', '2009-05-03', '4234', '116001', 5, 123),
(116002, 'Zayaan Dolan', 'l', '2009-07-05', '654', '116002', 5, 123),
(116003, 'Mari Kent', 'p', '2009-09-07', '5345', '116003', 5, 123),
(116004, 'Uzair Shields', 'l', '2009-02-06', '53234', '116004', 5, 123),
(116005, 'Leo Collier', 'l', '2009-04-09', '3456', '116005', 5, 123),
(117001, 'Edie Francis', 'l', '2008-08-06', '3456', '117001', 6, 123),
(117002, 'Nadir Gordon', 'p', '2008-05-05', '3525', '117002', 6, 123),
(117003, 'Adrianna Laing', 'p', '2008-03-06', '543543', '117003', 6, 123),
(117004, 'Marcel Mcdermott', 'l', '2008-04-09', '65433', '117004', 6, 123),
(117005, 'Amanpreet Haynes', 'l', '2008-04-06', '65345', '117005', 6, 123);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjectid` int(11) NOT NULL,
  `subjectname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectid`, `subjectname`) VALUES
(12, 'Pendidikan Kewarganegaraan'),
(13, 'Bahasa Indonesia'),
(14, 'Matematika'),
(15, 'Seni Budaya'),
(16, 'Pendidikan Jasmani'),
(17, 'Ilmu Pengetahuan Alam'),
(18, 'Ilmu Pengetahuan Sosial');

-- --------------------------------------------------------

--
-- Table structure for table `s_has_m`
--

CREATE TABLE `s_has_m` (
  `id` int(11) NOT NULL,
  `materials_name` varchar(50) DEFAULT NULL,
  `ket_materials` text NOT NULL,
  `image` text NOT NULL,
  `subject_subjectid` int(11) NOT NULL,
  `for_class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s_has_m`
--

INSERT INTO `s_has_m` (`id`, `materials_name`, `ket_materials`, `image`, `subject_subjectid`, `for_class`) VALUES
(17, 'Materi 1', 'Pelajari Ini ya', '1576321267.jpg', 12, 1),
(18, 'Materi Membaca', 'Baca Dari Halaman 1 sampai 999', '1576321295.jpg', 13, 1),
(19, 'Materi Pembagian', 'Pelajari, Besok Kita ulangan', '1576321529.jpg', 14, 2),
(20, 'Sejarah Majapahit', 'Sejarah Kerajaan', '1576321563.jpg', 18, 2);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `nip` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(24) DEFAULT NULL,
  `class_classid` int(11) NOT NULL,
  `admin_adminid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`nip`, `name`, `gender`, `birthdate`, `phone`, `password`, `class_classid`, `admin_adminid`) VALUES
(223001, 'Ingrid Villanueva', 'l', '1992-05-07', '6434', '223001', 1, 123),
(223002, 'Phoenix Welch', 'p', '1988-07-06', '8765', '223002', 2, 123),
(223003, 'Krystian Neville', 'l', '1989-07-06', '765435', '223003', 3, 123),
(223004, 'Alice Nelson', 'p', '1990-04-08', '553456', '223004', 4, 123),
(223005, 'Lorena Savage', 'l', '1991-02-06', '653445', '223005', 5, 123),
(223006, 'Niamh Lutz', 'p', '1991-01-09', '9987', '223006', 6, 123);

-- --------------------------------------------------------

--
-- Table structure for table `t_has_s`
--

CREATE TABLE `t_has_s` (
  `id` int(11) NOT NULL,
  `times` varchar(20) DEFAULT NULL,
  `classid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `day` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_has_s`
--

INSERT INTO `t_has_s` (`id`, `times`, `classid`, `subjectid`, `day`) VALUES
(95, '07.00-08.00', 1, 14, 'Monday'),
(96, '08.00-09.00', 1, 14, 'Monday'),
(97, '10.00-11.00', 1, 15, 'Monday'),
(98, '11.00-12.00', 1, 15, 'Monday'),
(100, '07.00-08.00', 1, 16, 'Tuesday'),
(101, '08.00-09.00', 1, 16, 'Tuesday'),
(102, '10.00-11.00', 1, 14, 'Tuesday'),
(103, '11.00-12.00', 1, 14, 'Tuesday'),
(104, '07.00-08.00', 1, 12, 'Wednesday'),
(105, '08.00-09.00', 1, 12, 'Wednesday'),
(106, '10.00-11.00', 1, 13, 'Wednesday'),
(107, '11.00-12.00', 1, 13, 'Wednesday'),
(109, '08.00-09.00', 1, 15, 'Thursday'),
(110, '09.00-10.00', 1, 15, 'Thursday'),
(111, '11.00-12.00', 1, 14, 'Thursday'),
(112, '12.00-13.00', 1, 14, 'Thursday'),
(113, '07.00-08.00', 1, 12, 'Friday'),
(114, '08.00-09.00', 1, 12, 'Friday'),
(115, '10.00-11.00', 1, 16, 'Friday'),
(116, '11.00-12.00', 1, 16, 'Friday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`assignmentid`),
  ADD KEY `assignment_teacher_fk` (`teacher_nip`),
  ADD KEY `assignment_subject_fk` (`subjectid`),
  ADD KEY `assignment_for_class_fk` (`for_class`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`classid`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`parentid`),
  ADD KEY `parent_admin_fk` (`admin_adminid`),
  ADD KEY `parent_student_fk` (`nis`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `student_admin_fk` (`admin_adminid`),
  ADD KEY `student_class_fk` (`class_classid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjectid`);

--
-- Indexes for table `s_has_m`
--
ALTER TABLE `s_has_m`
  ADD PRIMARY KEY (`id`),
  ADD KEY `s_has_m_subject_fk` (`subject_subjectid`),
  ADD KEY `materials_has_class_fk` (`for_class`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `teacher_admin_fk` (`admin_adminid`),
  ADD KEY `teacher_class_fk` (`class_classid`);

--
-- Indexes for table `t_has_s`
--
ALTER TABLE `t_has_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_has_schedule_fk` (`classid`),
  ADD KEY `class_has_subject_fk` (`subjectid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `assignmentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `parentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subjectid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `s_has_m`
--
ALTER TABLE `s_has_m`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `t_has_s`
--
ALTER TABLE `t_has_s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignment`
--
ALTER TABLE `assignment`
  ADD CONSTRAINT `assignment_for_class_fk` FOREIGN KEY (`for_class`) REFERENCES `class` (`classid`),
  ADD CONSTRAINT `assignment_subject_fk` FOREIGN KEY (`subjectid`) REFERENCES `subject` (`subjectid`),
  ADD CONSTRAINT `assignment_teacher_fk` FOREIGN KEY (`teacher_nip`) REFERENCES `teacher` (`nip`);

--
-- Constraints for table `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `parent_admin_fk` FOREIGN KEY (`admin_adminid`) REFERENCES `admin` (`adminid`),
  ADD CONSTRAINT `parent_student_fk` FOREIGN KEY (`nis`) REFERENCES `student` (`nis`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_admin_fk` FOREIGN KEY (`admin_adminid`) REFERENCES `admin` (`adminid`),
  ADD CONSTRAINT `student_class_fk` FOREIGN KEY (`class_classid`) REFERENCES `class` (`classid`);

--
-- Constraints for table `s_has_m`
--
ALTER TABLE `s_has_m`
  ADD CONSTRAINT `materials_has_class_fk` FOREIGN KEY (`for_class`) REFERENCES `class` (`classid`),
  ADD CONSTRAINT `s_has_m_subject_fk` FOREIGN KEY (`subject_subjectid`) REFERENCES `subject` (`subjectid`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_admin_fk` FOREIGN KEY (`admin_adminid`) REFERENCES `admin` (`adminid`),
  ADD CONSTRAINT `teacher_class_fk` FOREIGN KEY (`class_classid`) REFERENCES `class` (`classid`);

--
-- Constraints for table `t_has_s`
--
ALTER TABLE `t_has_s`
  ADD CONSTRAINT `class_has_schedule_fk` FOREIGN KEY (`classid`) REFERENCES `class` (`classid`),
  ADD CONSTRAINT `class_has_subject_fk` FOREIGN KEY (`subjectid`) REFERENCES `subject` (`subjectid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
