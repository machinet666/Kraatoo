-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 07, 2024 at 12:09 PM
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
-- Database: `Kraatoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userid` int(100) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `contactid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userid`, `firstname`, `lastname`, `contactid`) VALUES
(154, 'Himel', 'Mazumder', 56);

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `userid` int(11) NOT NULL,
  `jobid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`userid`, `jobid`) VALUES
(148, 12),
(148, 16),
(148, 17),
(148, 19),
(152, 12),
(152, 19),
(155, 19);

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `userid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `tradelicenseno` int(11) DEFAULT NULL,
  `numberofemployee` int(11) DEFAULT NULL,
  `websiteurl` varchar(255) DEFAULT NULL,
  `yearofestablishment` int(11) DEFAULT NULL,
  `contactid` int(11) DEFAULT NULL,
  `Contact_Person_Name` varchar(255) NOT NULL,
  `Contact_Person_Email` varchar(255) NOT NULL,
  `Contact_Person_Number` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`userid`, `name`, `type`, `tradelicenseno`, `numberofemployee`, `websiteurl`, `yearofestablishment`, `contactid`, `Contact_Person_Name`, `Contact_Person_Email`, `Contact_Person_Number`) VALUES
(149, 'Brain Station 23', 'Software Firm', 6667, 500, 'https://brainstation-23.com/?1', 1998, 52, 'Himangshu Mazumder', 'hs.mazumder@gmail.com', 1673876919),
(151, 'The Delegate', 'Others', 2907, 100, 'https://brainstation-23.com/?1', 1998, 54, 'Himael Mazumder', 'himelmazumder08@gmail.com', 1678344302),
(156, 'Loghima', 'Software Firm', 1089, 23, 'loghima.com', 2022, 58, 'Himel Mazumder', 'himelmazumder08@gmail.com', 191821212);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `userid` int(11) NOT NULL,
  `personid` int(10) DEFAULT NULL,
  `organizationname` varchar(255) DEFAULT NULL,
  `organizationtype` varchar(255) DEFAULT NULL,
  `website` varchar(255) NOT NULL,
  `nid` bigint(255) NOT NULL,
  `preferred_service` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`userid`, `personid`, `organizationname`, `organizationtype`, `website`, `nid`, `preferred_service`) VALUES
(150, 23, 'Abu Foundation ', 'Event Managment', 'aj.com', 4533, 'Construction'),
(157, 26, 'Bayern Munich', 'E-Commerce and Online Business', 'Bayern.com', 888999, 'developer');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `userid` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `date` varchar(50) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactid` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactid`, `email`, `phonenumber`, `address`) VALUES
(51, 'hs.mazumder@gmail.com', '01673876919', 'Kuril Bishaw Road'),
(52, 'brainstation@gmail.com', '01678344310', '8th Floor, 2 Bir Uttam AK Khandakar Road, Mohakhali C/A, Dhaka 1212, Bangladesh'),
(53, 'abukayes@gmail.com', ' +8801647336115', 'House 60, Road 2, Block 2, Bashundhara, Dhaka, Bangladesh'),
(54, 'thedelegate@gmail.com', '01678344302', '85/ Nayapaltan, Dhaka, Bangladesh'),
(55, 'protickalgo@gmail.com', '01759447357', 'Bashundhara Raniya Avenue, House 426'),
(56, 'himelmazumder01@gmail.com', '01601008108', ''),
(57, 'himelmazumder@gmail.com', '01759447357', 'Natun Bazar, Sayed Nagar'),
(58, 'loghima@gmail.com', '0101010101', 'Manchester'),
(59, 'helloWorld@gmail.com', '01707558298', 'Bashundhara');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `experienceid` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `startedFrom` int(11) DEFAULT NULL,
  `to` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobid` int(11) NOT NULL,
  `publisherID` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `aboutcompany` text NOT NULL,
  `overview` text DEFAULT NULL,
  `salaryrange` varchar(255) NOT NULL,
  `publishdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobid`, `publisherID`, `title`, `type`, `location`, `aboutcompany`, `overview`, `salaryrange`, `publishdate`) VALUES
(12, 151, 'PHP Developer', 'fullTime', 'Gulashan, Dhaka, Bangladesh', 'Keyline Digitech is a trusted IT solutions partner with over 20 years of experience, empowering businesses to thrive in the digital world. Our team specializes in software and app development, website design and development and digital marketing, providing end-to-end services tailored to meet the unique needs of various industries such as education, healthcare, finance, and retail. With a focus on innovation and results, we blend cutting-edge technology with strategic insight to deliver solutions that drive success. Whether creating stunning websites, building user-centric applications, or optimizing digital marketing strategies, Keyline Digitech is dedicated to helping businesses achieve their online goals and enhance their digital presence.', 'We have started our journey in 2002 We are a one-stop destination for all your IT needs. Though headquartered in Kolkata – popularly known as the city of joy we are also present in other corners of the world like USA, Canada and UK. We comprise of qualified and licensed IT professionals who strive to attain customer satisfaction. Keyline has been the brainchild of Mr. Subrata Kundu, an IT Veteran from the Govt Art College of Kolkata. 12 years back he flocked down from Mumbai with a vision in eyes and mission in mind to set up a department in Kolkata that will offer creative and custom IT solutions worldwide. Thus, took place the birth of Keyline Creative Services. KeyLine started it’s journey in June, 2002. Subrata and a team of die-hard professionals have relentlessly worked towards the successful culmination of their goal. KeyLines belongs to that group of companies, who believe in delivering high quality products and services in the broader areas of Web, Software & Creative Designing. Keyline Creative Services is operating in Kolkata for more than 12 years and already it is NORTHBOUND. Though it is a small sized company, it has developed distinct competencies in cutting edge technologies and diverse application domains. It has already bagged many prestigious projects of web & software development, other web-enabled services, multimedia presentations (text, graphics, animation, video, audio) and computer aided designing (brochure, catalogue, press ad) etc. in and around Kolkata. We Believe in Quality and Promptness, be it people, products & services. Our approach to everything emanates from this corporate philosophy.', '300 to 400 $ Monthly', '2024-09-13'),
(16, 149, 'Software Designer', 'Part Time', 'Bashundhara', '\r\nDataSoft Systems Bangladesh Limited is the first software company in Bangladesh to be documented as a CMMI Level 5 Software Development company. Only **377 companies across the world has been recognized as CMMI level 5 companies. Accredited as a CMMI level 3 company since 2009, DataSoft has always been ahead of its game in comparison to other local firms. On April 24 2014, DataSoft started its journey as a CMMI Level 5 company, and with that it introduced a new era in the IT Industry of the nation.', 'DataSoft has emphasized on Quality Management practices since its inception. DataSoft practices world class quality management tools to ensure consistent quality of its products and processes. All activities of DataSoft are monitored using a customized quality dashboard. DataSoft has in-house quality auditing team who constantly monitors processes and identify improvement scopes. DataSoft quality management practices start from deriving the drawing board solutions and are ensured even in after sales services, making it an end to end process. DataSoft also employ certified project management professionals to ensure quality practices in all of its ventures.', '80 to 100 $ Weekly', '2024-09-28'),
(17, 149, 'App Developer', 'Internship', 'Bashundhara', 'DataSoft Systems Bangladesh Limited is the first software company in Bangladesh to be documented as a CMMI Level 5 Software Development company. Only **377 companies across the world has been recognized as CMMI level 5 companies. Accredited as a CMMI level 3 company since 2009, DataSoft has always been ahead of its game in comparison to other local firms. On April 24 2014, DataSoft started its journey as a CMMI Level 5 company, and with that it introduced a new era in the IT Industry of the nation.', 'DataSoft has emphasized on Quality Management practices since its inception. DataSoft practices world class quality management tools to ensure consistent quality of its products and processes. All activities of DataSoft are monitored using a customized quality dashboard. DataSoft has in-house quality auditing team who constantly monitors processes and identify improvement scopes. DataSoft quality management practices start from deriving the drawing board solutions and are ensured even in after sales services, making it an end to end process. DataSoft also employ certified project management professionals to ensure quality practices in all of its ventures.', '78 to 90 $ Per hour', '2024-09-28'),
(19, 156, 'Senior DevOps Engineer', 'Full Time', 'London, GB', '#1 Phone for Salesforce | Book your demo http://rocketphone.ai/demo | Our smart automation lets your teams focus on delighting customers, not on admin.', 'Have you got what it takes to join a rapidly growing AI company on a mission to transform enterprise voice communication? You will join a team of leaders that are Oxford University professors, former salesforce.com senior execs and advisors that hail from top roles at the world’s leading software companies. RocketPhone is set for rapid scale and we want the best to join us on that journey, so if you’re the top engineer at your current employer, if you want to have global impact and if you want to associate yourself with one of the biggest AI growth stories, then we want to talk to you!\r\n\r\n\r\nAt RocketPhone.ai we are looking for a Sr. DevOps Engineer to help us build functional systems that improve customer experience. Your responsibilities will include deploying product updates, identifying production issues and implementing integrations that meet customer needs.', '1200 to 1500 $ Per hour', '2024-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `personid` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `contactid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`personid`, `firstname`, `lastname`, `gender`, `dateofbirth`, `contactid`) VALUES
(22, 'himangshu', 'Mazumder', 'male', '1998-02-01', 51),
(23, 'Abu', 'kumar', '', '1970-01-01', 53),
(24, 'Hasin', 'Khan', 'male', '1997-10-15', 55),
(25, 'Himel', 'Mazumder', 'male', '1991-02-02', 57),
(26, 'Asif', 'Khan', '', '1970-01-01', 59);

-- --------------------------------------------------------

--
-- Table structure for table `personaluser`
--

CREATE TABLE `personaluser` (
  `userid` int(11) NOT NULL,
  `personid` int(11) DEFAULT NULL,
  `bachelordegree` varchar(255) DEFAULT NULL,
  `masterdegree` varchar(255) DEFAULT NULL,
  `specializedfield` varchar(255) DEFAULT NULL,
  `isfreelancer` tinyint(1) DEFAULT 0,
  `skilllist` varchar(255) DEFAULT NULL,
  `tin` int(11) DEFAULT NULL,
  `aboutyourself` text DEFAULT NULL,
  `preferred_position` varchar(100) DEFAULT NULL,
  `rating` double NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personaluser`
--

INSERT INTO `personaluser` (`userid`, `personid`, `bachelordegree`, `masterdegree`, `specializedfield`, `isfreelancer`, `skilllist`, `tin`, `aboutyourself`, `preferred_position`, `rating`) VALUES
(148, 22, 'Computer Science and Engineering (CSE)', 'N/A', 'Web Development', 1, 'Web Developer', 8888, 'I am a dynamic Computer Science and Engineering graduate fueled by a profound passion for technology and a relentless pursuit of expertise. With a natural aptitude for quick learning and sharp analytic skills, I am driven to leverage my academic knowledge and skills to make a meaningful impact on the industry.', 'Web Developer ', 5),
(152, 24, 'Computer Science and Engineering (CSE)', 'No', 'Web Development', 1, 'Developer', 78987, 'Hello', 'Developer', 5),
(155, 25, 'Bachelor of Business Administration (BBA)', 'AI', 'Web Development', 1, 'Java Script', 8888, 'I am a excellent coder', 'Dev ops', 5);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postid` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `post` text DEFAULT NULL,
  `post_date` date DEFAULT NULL,
  `likes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postid`, `userid`, `post`, `post_date`, `likes`) VALUES
(3, 148, 'Hello My name is Himangshu ...\r\nI am newly started to use linux mint but i am facing a problem where my drives are not mounted automatically. i have to mount the drive each time i open my computer. is there any solution to fix this so that, all the drive get auto mounted when i open my computer. \r\nThanks in advance.', '1970-01-01', 0),
(4, 148, '', '1970-01-01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `projectid` int(11) NOT NULL,
  `publisherid` int(11) NOT NULL,
  `builderid` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `skilllist` varchar(255) DEFAULT NULL,
  `complexity` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `offeredprice` varchar(255) DEFAULT NULL,
  `freelancerid` int(11) DEFAULT NULL,
  `paymenttype` varchar(50) DEFAULT NULL,
  `timeperiod` int(50) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'pending',
  `startdate` date DEFAULT NULL,
  `publishdate` date NOT NULL DEFAULT current_timestamp(),
  `deadline` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projectid`, `publisherid`, `builderid`, `title`, `description`, `skilllist`, `complexity`, `experience`, `offeredprice`, `freelancerid`, `paymenttype`, `timeperiod`, `status`, `startdate`, `publishdate`, `deadline`) VALUES
(7, 150, 152, 'Kraatoo', 'We want to make a platform where any person can create a personal profile where they can seek job, apply to the job not only that they can update themselves as a freelancer and seek for a project to work as a freelancer.\r\nbesides , any business company can create a business profile where they can seek for employees, for that they can post a job in their business account and see the responses. And they also find their future client through our platform.\r\n', 'HTML, CSS, bootstrap, Node.js,', 'Complex', 'Expert', '300 $', NULL, 'Monthly', 10, 'pending', '2024-09-29', '2024-09-13', '2024-10-09'),
(8, 150, 152, 'Connect Microstation', 'Consider us your portal to an incredibly exciting marketplace for developers. Together with you, we recruit and operate offshore development teams, with developers who work closely and integrated with your in-house team. Outsourcing has never been easier! \n\nCefalo is known in Bangladesh as a highly attractive workplace that puts emphasis on technology, the work environment, and sharing of knowledge for collective growth and success. We continue to grow as a company as well, currently employing more than 200 people.\n\nOur clients are mostly Norwegian companies, from young businesses experiencing rapid growth to traditional and larger ones like media groups. We are a very client-oriented partner, with a flexible form of cooperation and high quality delivered. ', 'CAD Software', 'Complex', 'Expert', '876 $', NULL, 'Hourly', 30, 'running', '2024-09-29', '2024-09-27', '2024-10-09'),
(9, 150, 148, 'Event Manager', 'We need an event manager for our restaurant', 'Graphics Designer', 'Simple', 'Beginner', '300 $', NULL, 'Monthly', 10, 'running', '2024-09-28', '2024-09-27', '2024-10-28'),
(10, 150, 148, 'Web Designer', 'We need a web designer', 'Web Developer', 'Intermediate', 'Intermediate', '500 $', NULL, 'Weekly', 20, 'Complete', '2024-09-28', '2024-09-27', '2024-10-28'),
(11, 150, 148, 'App Developer', 'we need a App Developer', 'App Developer', 'Intermediate', 'Beginner', '45 $', NULL, 'Monthly', 20, 'running', '2024-09-27', '2024-09-27', '2024-10-17'),
(12, 150, 148, 'Software Dveloper', 'Consider us your portal to an incredibly exciting marketplace for developers. Together with you, we recruit and operate offshore development teams, with developers who work closely and integrated with your in-house team. Outsourcing has never been easier! \n\nCefalo is known in Bangladesh as a highly attractive workplace that puts emphasis on technology, the work environment, and sharing of knowledge for collective growth and success. We continue to grow as a company as well, currently employing more than 200 people.\n\nOur clients are mostly Norwegian companies, from young businesses experiencing rapid growth to traditional and larger ones like media groups. We are a very client-oriented partner, with a flexible form of cooperation and high quality delivered. ', 'Software Engineer', 'Intermediate', 'Intermediate', '300 $', NULL, 'Hourly', 40, 'Completed', '2024-09-27', '2024-09-27', '2024-11-06'),
(13, 150, 152, 'Need a ui/ux designer', 'We need a designer for our app', 'Ui/Ux designer', 'Simple', 'Beginner', '230 $', NULL, 'Monthly', 15, 'running', '2024-09-30', '2024-09-29', '2024-10-10'),
(14, 157, 152, 'Flutter App', 'Need a app to keep track of office finance. ', 'flutter, backend, database', 'Intermediate', 'Expert', '210 €', NULL, 'Hourly', 40, 'Complete', '2024-10-02', '2024-10-02', '2024-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `publishID` int(11) NOT NULL,
  `requestID` int(11) NOT NULL,
  `projectid` int(11) NOT NULL,
  `askingprice` varchar(255) DEFAULT NULL,
  `askingtime` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`publishID`, `requestID`, `projectid`, `askingprice`, `askingtime`) VALUES
(150, 148, 7, '300 $', 10),
(150, 148, 8, '1000 $', 50),
(150, 152, 7, '300 $', 10),
(150, 152, 8, '876 $', 30),
(157, 148, 14, '240 €', 45),
(157, 152, 14, '2270 €', 30);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(100) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `email`, `type`, `password`) VALUES
(148, 'hs.mazumder@gmail.com', 'Personal', '000'),
(149, 'brainstation@gmail.com', 'Business', '123'),
(150, 'abukayes@gmail.com', 'Client', '123'),
(151, 'thedelegate@gmail.com', 'Business', '123'),
(152, 'protickalgo@gmail.com', 'Personal', '123'),
(153, 'Kraatoo', 'SuperAdmin', '123'),
(154, 'himelmazumder01@gmail.com', 'Admin', '123'),
(155, 'himelmazumder@gmail.com', 'Personal', '000'),
(156, 'loghima@gmail.com', 'Business', '123'),
(157, 'helloWorld@gmail.com', 'Client', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`userid`,`jobid`),
  ADD KEY `jobid` (`jobid`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `contactid` (`contactid`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `peopleid` (`personid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`userid`,`postid`),
  ADD KEY `postid` (`postid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`experienceid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobid`),
  ADD KEY `userid` (`publisherID`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`personid`),
  ADD KEY `contactid` (`contactid`);

--
-- Indexes for table `personaluser`
--
ALTER TABLE `personaluser`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `peopleid` (`personid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`projectid`),
  ADD KEY `publisherid` (`publisherid`),
  ADD KEY `builderid` (`builderid`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`publishID`,`requestID`,`projectid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `experienceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `personid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `projectid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`),
  ADD CONSTRAINT `applications_ibfk_2` FOREIGN KEY (`jobid`) REFERENCES `jobs` (`jobid`);

--
-- Constraints for table `business`
--
ALTER TABLE `business`
  ADD CONSTRAINT `business_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`),
  ADD CONSTRAINT `business_ibfk_2` FOREIGN KEY (`contactid`) REFERENCES `contact` (`contactid`);

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`),
  ADD CONSTRAINT `client_ibfk_2` FOREIGN KEY (`personid`) REFERENCES `person` (`personid`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`postid`) REFERENCES `posts` (`postid`);

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `experience_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`publisherID`) REFERENCES `user` (`userid`);

--
-- Constraints for table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`contactid`) REFERENCES `contact` (`contactid`);

--
-- Constraints for table `personaluser`
--
ALTER TABLE `personaluser`
  ADD CONSTRAINT `personaluser_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`),
  ADD CONSTRAINT `personaluser_ibfk_2` FOREIGN KEY (`personid`) REFERENCES `person` (`personid`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`publisherid`) REFERENCES `user` (`userid`),
  ADD CONSTRAINT `projects_ibfk_2` FOREIGN KEY (`builderid`) REFERENCES `user` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
