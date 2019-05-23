-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2018 at 05:22 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `district_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `district_name`) VALUES
(1, 'Natore'),
(2, 'Saver'),
(3, 'Cumilla'),
(4, 'Uttara'),
(5, 'Gazuipur');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_info`
--

CREATE TABLE `doctor_info` (
  `doctor_id` int(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `image` longblob NOT NULL,
  `degree` varchar(200) NOT NULL,
  `tell_number` int(15) NOT NULL,
  `hospital_name` varchar(250) NOT NULL,
  `doctor_location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_info`
--

INSERT INTO `doctor_info` (`doctor_id`, `name`, `image`, `degree`, `tell_number`, `hospital_name`, `doctor_location`) VALUES
(1, 'Dr. Khaled Mshanot', '', '', 0, 'City Hospital,Saver,Dhaka', 'saver'),
(2, 'Dr. AktanuJaman', '', '', 0, 'City Hospital,Saver,Dhaka', 'saver'),
(3, 'Dr. Mahbubur Rhaaman', '', '', 0, 'City Hospital,Saver,Dhaka', 'saver'),
(4, 'Dr. Rabeya Chowdury', '', '', 0, 'Amena Hospital,Mirpur,Dhaka', 'dhaka'),
(5, 'Dr. Simla Rahaman', '', '', 0, 'City Hospital,Saver,Dhaka', 'saver'),
(6, 'Dr. shahana Khatun', '', '', 0, 'DMC,Dhaka', 'dhaka'),
(7, 'Dr. Mahafujur Rhaman ', '', '', 0, 'DMC,Dhaka', 'dhaka'),
(8, 'Dr. Saiful Islam', '', 'PHD-Aust', 0, 'City Hospital,Saver<dhaka', 'saver'),
(9, 'Dr. Khalek Akbar', '', '', 0, 'DMC,Dhaka', 'dhaka'),
(10, 'Dr. Farhan Kobir', '', '', 0, 'Amena Hospital,Dhaka', 'dhaka'),
(11, 'Dr. Nadia Afroz', '', '', 0, 'City Hospital,Saver,Dhaka', 'saver'),
(12, 'Dr. Md. Abdullah Khan', '', 'Dentist, BDS, PGT ( Japan )', 0, 'Metropolitan Dental,cumilla', 'cumilla'),
(13, 'Professor Dr. Khandaker Abdul Azim', '', ' BDS, Dip, OMS ( Australia )\r\nConsultant, Dentist', 91288357, ' Ibn Sina Dental Center,Natore', 'Natore'),
(14, 'Professor Dr. Md. Saleh Uddin', '', 'MBBS, FCPS, MS, PhD ( Australia ), FICS, FCPS', 171848692, 'Northern International Medical College & Hospital,Gazipur', 'gazipur');

-- --------------------------------------------------------

--
-- Table structure for table `specialist_type`
--

CREATE TABLE `specialist_type` (
  `specialist_id` int(250) NOT NULL,
  `specialist_type_name` varchar(250) NOT NULL,
  `doctor_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialist_type`
--

INSERT INTO `specialist_type` (`specialist_id`, `specialist_type_name`, `doctor_id`) VALUES
(4, 'Medicine Specialist', 1),
(5, 'Medicine Specialist', 2),
(6, 'Medicine Specialist', 3),
(10, 'Gaynecologist', 4),
(11, 'Gaynecologist', 5),
(12, 'Gaynecologist', 6),
(16, 'Medicine Specialist', 7),
(17, 'Medicine Specialist', 8),
(18, 'Medicine Specialist', 9),
(21, 'Dermatologist', 10),
(22, 'Dermatologist', 11),
(23, 'Gaynecologist', 7),
(24, 'teeth', 12),
(25, 'teeth', 13),
(26, 'eye', 14);

-- --------------------------------------------------------

--
-- Table structure for table `symptom`
--

CREATE TABLE `symptom` (
  `symptom_id` int(245) NOT NULL,
  `symptom_name` varchar(245) DEFAULT NULL,
  `symptom_type` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symptom`
--

INSERT INTO `symptom` (`symptom_id`, `symptom_name`, `symptom_type`) VALUES
(1, 'Brain Headaches', 'brain'),
(2, 'Brain Headaches With Vomiting', 'brain'),
(3, 'Changes In Vision', 'brain'),
(4, 'Chills Body', 'brain'),
(5, 'Neck Stiffness', 'brain'),
(6, 'Brain Headaches In Center', 'brain'),
(7, 'Changing Mole', 'Skin'),
(8, 'Acne', 'Skin'),
(9, 'Hives', 'Skin'),
(10, 'Rosacea', 'Skin'),
(11, 'Posriasis', 'Skin'),
(12, 'Ulcen', 'Skin'),
(13, 'Irregular Bordem', 'Skin'),
(14, 'Swollen Glands', 'body'),
(15, 'Fever and Night Sweats', 'body'),
(16, 'Skin Rashes and Skin Sores', 'body'),
(17, 'Joint Pain', 'body'),
(18, 'Weight Loss', 'body'),
(19, 'Stomach Pain in Woman', 'woman'),
(20, 'Chest Pain in Woman', 'woman'),
(21, 'Heart Palpitations in Woman', 'woman'),
(22, 'Over Sweating', 'woman'),
(23, 'Shortness Of Breath', 'woman'),
(24, 'Menstrual Changes', 'woman'),
(25, 'Toothache', 'teeth'),
(26, 'Sensitive Teeth', 'teeth'),
(27, 'Bleeding ', 'teeth'),
(28, 'Bad Breath', 'teeth'),
(29, 'Jaw Pain', 'teeth'),
(30, 'Broken Teeth', 'teeth'),
(31, 'Sudden eye pain', 'eye'),
(32, 'Double vision', 'eye'),
(33, 'Seeing rainbows', 'eye'),
(34, 'White areas in the pupil of the eye', 'eye'),
(35, 'Sensitivity to light or glare', 'eye');

-- --------------------------------------------------------

--
-- Table structure for table `symptom_doctor`
--

CREATE TABLE `symptom_doctor` (
  `id` int(250) NOT NULL,
  `symptom_id` int(55) NOT NULL,
  `doctor_id` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symptom_doctor`
--

INSERT INTO `symptom_doctor` (`id`, `symptom_id`, `doctor_id`) VALUES
(7, 1, 1),
(8, 2, 1),
(9, 3, 1),
(10, 4, 1),
(11, 5, 1),
(12, 6, 1),
(13, 1, 2),
(14, 2, 2),
(15, 3, 2),
(16, 4, 2),
(17, 5, 2),
(18, 6, 2),
(19, 1, 3),
(20, 2, 3),
(21, 3, 3),
(22, 4, 3),
(23, 5, 3),
(24, 6, 3),
(25, 7, 10),
(58, 8, 10),
(59, 9, 10),
(60, 10, 10),
(61, 11, 10),
(62, 12, 10),
(63, 13, 10),
(64, 7, 11),
(65, 8, 11),
(66, 9, 11),
(67, 10, 11),
(68, 11, 11),
(69, 12, 11),
(70, 13, 11),
(71, 14, 7),
(72, 15, 7),
(73, 16, 7),
(74, 17, 7),
(75, 18, 7),
(76, 14, 8),
(77, 15, 8),
(78, 16, 8),
(79, 17, 8),
(80, 18, 8),
(81, 14, 9),
(82, 15, 9),
(83, 16, 9),
(84, 17, 9),
(85, 18, 9),
(86, 19, 4),
(87, 20, 4),
(88, 21, 4),
(89, 22, 4),
(90, 23, 4),
(91, 24, 4),
(92, 19, 5),
(93, 20, 5),
(94, 21, 5),
(95, 22, 5),
(96, 23, 5),
(97, 24, 5),
(98, 19, 6),
(99, 20, 6),
(100, 21, 6),
(101, 22, 6),
(102, 23, 6),
(103, 24, 6),
(104, 25, 12),
(105, 25, 13),
(106, 26, 12),
(107, 26, 13),
(108, 27, 12),
(109, 27, 13),
(110, 28, 12),
(111, 28, 13),
(112, 29, 12),
(113, 29, 13),
(114, 30, 12),
(115, 30, 13),
(116, 31, 14),
(117, 32, 14),
(118, 33, 14),
(119, 34, 14),
(120, 35, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_info`
--
ALTER TABLE `doctor_info`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `specialist_type`
--
ALTER TABLE `specialist_type`
  ADD PRIMARY KEY (`specialist_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `symptom`
--
ALTER TABLE `symptom`
  ADD PRIMARY KEY (`symptom_id`);

--
-- Indexes for table `symptom_doctor`
--
ALTER TABLE `symptom_doctor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `symptom_id` (`symptom_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor_info`
--
ALTER TABLE `doctor_info`
  MODIFY `doctor_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `specialist_type`
--
ALTER TABLE `specialist_type`
  MODIFY `specialist_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `symptom`
--
ALTER TABLE `symptom`
  MODIFY `symptom_id` int(245) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `symptom_doctor`
--
ALTER TABLE `symptom_doctor`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `specialist_type`
--
ALTER TABLE `specialist_type`
  ADD CONSTRAINT `specialist_type_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor_info` (`doctor_id`);

--
-- Constraints for table `symptom_doctor`
--
ALTER TABLE `symptom_doctor`
  ADD CONSTRAINT `symptom_doctor_ibfk_1` FOREIGN KEY (`symptom_id`) REFERENCES `symptom` (`symptom_id`),
  ADD CONSTRAINT `symptom_doctor_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `doctor_info` (`doctor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
