-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2024 at 08:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `collage`
--

CREATE TABLE `collage` (
  `Coll_ID` int(11) NOT NULL,
  `Coll_Type` varchar(50) DEFAULT NULL,
  `Coll_Desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `collage`
--

INSERT INTO `collage` (`Coll_ID`, `Coll_Type`, `Coll_Desc`) VALUES
(100, 'Engineerings', 'Engineering department offers various undergraduate and graduate programs'),
(200, 'Arts', 'Arts department focuses on humanities, fine arts, and social sciences.'),
(300, 'Science', 'Science department offers programs in various scientific disciplines.'),
(400, 'Business', 'Business department provides education in management, finance, and marketing.'),
(500, 'Medicine', 'Medicine department offers programs in healthcare and medical sciences.');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Crs_id` int(11) NOT NULL,
  `Crs_Desc` varchar(255) DEFAULT NULL,
  `Crs_Name` varchar(100) DEFAULT NULL,
  `Crs_Type` varchar(50) DEFAULT NULL,
  `Crs_Stu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Crs_id`, `Crs_Desc`, `Crs_Name`, `Crs_Type`, `Crs_Stu_id`) VALUES
(10, 'Introduction to Computer Sciences', 'CS102', 'Theorys', 1),
(20, 'Calculus I', 'MATHAMATICS', 'Theory', 2),
(30, 'English Composition', 'ENG101', 'Theory', 3),
(40, 'Chemistry Basics', 'CHEM101', 'Lab', 4),
(50, 'History of Art', 'ART101', 'Theory', 5);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) DEFAULT NULL,
  `login_role_id` varchar(50) DEFAULT NULL,
  `login_password` varchar(255) DEFAULT NULL,
  `login_username` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_role_id`, `login_password`, `login_username`) VALUES
(101, 'admin', 'password123', 'admin_user'),
(102, 'user', 'userpass', 'regular_user1'),
(103, 'user', '123456', 'regular_user2'),
(1044, 'admin', 'adminpass', 'admin_user2'),
(105, 'user', 'pass123', 'regular_user3');

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `per_id` int(11) DEFAULT NULL,
  `per_role_id` varchar(255) DEFAULT NULL,
  `per_module` varchar(100) DEFAULT NULL,
  `per_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`per_id`, `per_role_id`, `per_module`, `per_name`) VALUES
(1, 'admin', 'students', 'manage_students'),
(2, 'admin', 'courses', 'manage_courses'),
(3, 'faculty', 'grades', 'enter_grades'),
(4, 'faculty', 'courses', 'teach_courses'),
(5, 'student', 'registration', 'register_courses');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Reg_Stu_ID` int(11) DEFAULT NULL,
  `Reg_ID` int(11) DEFAULT NULL,
  `Reg_Date` date DEFAULT NULL,
  `Reg_Type` varchar(50) DEFAULT NULL,
  `Reg_Description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Reg_Stu_ID`, `Reg_ID`, `Reg_Date`, `Reg_Type`, `Reg_Description`) VALUES
(1, 1001, '2024-01-20', 'Regular', 'Spring Semester 2024'),
(2, 1002, '2024-07-30', 'Regular', 'Fall Semester 2024'),
(3, 1003, '2024-03-02', 'Part time', 'Spring Semester 2024'),
(4, 1004, '2024-08-07', 'Regular', 'Fall Semester 2024'),
(5, 1005, '2024-05-11', 'Regular', 'Spring Semester 2024');

-- --------------------------------------------------------

--
-- Table structure for table `reg_crs`
--

CREATE TABLE `reg_crs` (
  `id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `crs_id` int(11) NOT NULL,
  `crs_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg_crs`
--

INSERT INTO `reg_crs` (`id`, `reg_id`, `crs_id`, `crs_name`) VALUES
(1, 1001, 40, 'CHEM101');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) DEFAULT NULL,
  `role_name` varchar(100) DEFAULT NULL,
  `role_desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `role_desc`) VALUES
(190, 'Admin', 'Administrator role with full access'),
(227, 'Faculty', 'Faculty role with teaching responsibilities'),
(303, 'Student', 'Student role with limited access'),
(489, 'Staff', 'Staff role with administrative responsibilities'),
(512, 'Guest', 'Guest role with minimal access');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(100) DEFAULT NULL,
  `stu_email` varchar(255) DEFAULT NULL,
  `stu_mobile` varchar(20) DEFAULT NULL,
  `stu_add` varchar(255) DEFAULT NULL,
  `stu_pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `stu_name`, `stu_email`, `stu_mobile`, `stu_add`, `stu_pass`) VALUES
(1, 'Aarav', 'aarav.gupta@example.com', '9876543210', '123 Main Street, Chennai', 'guivi71'),
(2, 'Diyaa', 'diya.sharma@example.com', '9876543211', '456 Second Street, Chennai', 'sword92'),
(3, 'Roshan', 'roshan.patel@example.com', '9876543212', '789 Third Street, Delhi', 'passby78'),
(4, 'Anvi ', 'avni.singh@example.com', '9876543213', '101 Fourth Street, Bangalore', 'pardon84'),
(5, 'Ananya', 'ananya.verma@example.com', '9876543214', '222 Fifth Street, Chennai', 'wordpress65');

-- --------------------------------------------------------

--
-- Table structure for table `stu_crs_reg`
--

CREATE TABLE `stu_crs_reg` (
  `id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(50) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `crs_id` int(11) NOT NULL,
  `crs_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stu_crs_reg`
--

INSERT INTO `stu_crs_reg` (`id`, `stu_id`, `stu_name`, `reg_id`, `crs_id`, `crs_name`) VALUES
(1, 1, 'Asuran', 1001, 40, 'CHEM101');

-- --------------------------------------------------------

--
-- Table structure for table `stu_reg`
--

CREATE TABLE `stu_reg` (
  `reg_id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stu_reg`
--

INSERT INTO `stu_reg` (`reg_id`, `stu_id`, `stu_name`) VALUES
(1001, 1, 'Asuran');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_mobile` varchar(20) DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_mobile`, `user_address`) VALUES
(190, 'John ', 'john.doe@example.com', '1234567890', '123 University Street'),
(227, 'Alice ', 'alice.smith@example.com', '9876543210', '456 College Avenue'),
(303, 'Bob ', 'bob.johnson@example.com', '5555555555', '789 Campus Road'),
(489, 'Jack', 'emily.brown@example.com', '1112223333', '101 Education Boulevard'),
(512, 'Michael ', 'michael.wilson@example.com', '9998887777', '222 Learning Lane');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collage`
--
ALTER TABLE `collage`
  ADD PRIMARY KEY (`Coll_ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Crs_id`);

--
-- Indexes for table `reg_crs`
--
ALTER TABLE `reg_crs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `stu_crs_reg`
--
ALTER TABLE `stu_crs_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stu_reg`
--
ALTER TABLE `stu_reg`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collage`
--
ALTER TABLE `collage`
  MODIFY `Coll_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=501;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `Crs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `reg_crs`
--
ALTER TABLE `reg_crs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stu_crs_reg`
--
ALTER TABLE `stu_crs_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stu_reg`
--
ALTER TABLE `stu_reg`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
