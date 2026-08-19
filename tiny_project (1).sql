-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 03, 2025 at 06:54 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tiny_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `book_id` int(100) NOT NULL AUTO_INCREMENT,
  `course_id` int(100) DEFAULT NULL,
  `user_id` int(100) DEFAULT NULL,
  `service` varchar(100) DEFAULT NULL,
  `book_date` date DEFAULT NULL,
  `Timing` varchar(200) DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `course_id`, `user_id`, `service`, `book_date`, `Timing`, `status`) VALUES
(6, 28, 11, 'online', '2024-10-23', '2', 'Accepted'),
(7, 27, 3, 'online', '2024-09-27', '5', 'Accepted'),
(8, 22, 3, 'online', '2024-10-02', '6.00', 'Accepted'),
(9, 32, 3, 'online', '2024-10-11', '6.00', 'Pending'),
(10, 28, 10, 'online', '2024-09-26', '5', 'Accepted'),
(11, 31, 10, 'online', '2024-10-04', '4', 'Accepted'),
(12, 27, 11, 'online', '2024-10-01', '1', 'Accepted'),
(13, 31, 15, 'online', '2024-09-27', '2', 'Pending'),
(14, 36, 10, 'online', '2024-10-30', '16:00', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `consultancy_acc`
--

CREATE TABLE IF NOT EXISTS `consultancy_acc` (
  `cons_id` int(100) NOT NULL AUTO_INCREMENT,
  `cons_name` varchar(250) DEFAULT NULL,
  `cons_email` varchar(200) DEFAULT NULL,
  `cons_website` varchar(200) DEFAULT NULL,
  `cons_address` varchar(500) DEFAULT NULL,
  `description` varchar(1500) DEFAULT NULL,
  `cons_timing` varchar(200) DEFAULT NULL,
  `Phone_no` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`cons_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `consultancy_acc`
--

INSERT INTO `consultancy_acc` (`cons_id`, `cons_name`, `cons_email`, `cons_website`, `cons_address`, `description`, `cons_timing`, `Phone_no`, `image`, `password`) VALUES
(14, ' Wholesum', 'ani1234@gmail.com', 'www.mysite.welcom.com', 'Ernakulam , kakkanad , chittor  ', 'Wholesum Consultancy offers holistic business solutions, providing expert advice on strategy, operations, and growth for improved efficiency.', '3.00 - 6.00', '9037367387', 'diploma.jpeg', '	Aniku@85'),
(15, 'Fly Your Dream High ', 'mehi@gmail.com', 'www.mehipsychopathlife.com', 'mattancherry , Kochi, Ernakulam', ' Fly Your Dream High Consultancy helps individuals and businesses achieve their goals by providing personalized coaching and strategic guidance. ', '10.00-4.00p', '6111222334', 'cons2.jpeg', 'poIUY09*&^'),
(19, 'Bright Futures Abroad', 'info@brightfuturesabroad.com', ' www.brightfuturesabroad.com', '456 Horizon Avenue\r\nSuite 202, Academic Plaza\r\nToronto, ON, Canada, M5V 1K4  ', 'Expert consultancy offering tailored solutions for strategic growth and innovation.', '10.00-4.00p', '1416555789', 'bright3.jpeg', 'Brightimages@123'),
(20, 'Pathway International Education', 'contact@pathwayeducation.com', 'www.pathwayeducation.com', '789 University Road\r\nSuite 305, Knowledge Tower\r\nSydney, NSW, Australia, 2000  ', ' Pathway Consultancy offers expert guidance for academic and career success.', '10.00-4.00p', ' 2555678901', 'pathway.jpg', 'Pathway@123');

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE IF NOT EXISTS `course_details` (
  `course_id` int(100) NOT NULL AUTO_INCREMENT,
  `cons_id` int(250) DEFAULT NULL,
  `course_name` varchar(250) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `eligibility` varchar(200) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`course_id`, `cons_id`, `course_name`, `image`, `country`, `eligibility`, `description`) VALUES
(22, 14, 'IT Technology', 'it.jpeg', 'SPAIN', 'Post Graduate', 'IT is the new way'),
(27, 15, 'Technology and Computer-Science', 'cmp.jpeg', 'AUSTRALIA', '12th', 'welcome to the world of computer science'),
(28, 15, 'MCA', 'OIP.jpeg', 'CANADA', 'Graduate', 'become masters of computer '),
(31, 19, 'Engineering', 'engg.jpeg', 'AUSTRALIA', 'Graduate', 'If its your dream to be an engineer come and join now\r\n'),
(32, 14, 'Technology and Computer-Science', 'cmp.jpeg', 'UK', '12th', 'know the knowledge of computer'),
(33, 20, 'MCA', 'mca4.jpeg', 'IRLAND', 'Graduate', 'The Master of Computer Applications (MCA) is a postgraduate program that equips students with advanced skills in software development and computer science, preparing them for careers in the IT industry.'),
(35, 20, 'IT and technology', 'it3.jpeg', 'IRLAND', '12th', 'Information Technology and Technology encompasses the use of computers, software, and networks to manage and process data, driving innovation and efficiency across various industries.'),
(36, 20, 'BBA-IT', 'b&m4.jpeg', 'MALTTA', '12th', 'The Bachelor of Business Administration in Information Technology (BBA-IT) combines core business principles with IT skills, preparing students for roles in technology management, digital marketing, and data analytics.'),
(37, 14, 'MCA', 'mca3.jpeg', 'CANADA', 'Graduate', 'The Master of Computer Applications (MCA) is a three-year postgraduate program that equips students with advanced skills in computer science, software development, and IT applications.'),
(38, 19, 'MCA', 'mca5.jpeg', 'CANADA', 'Graduate', 'The Master of Computer Applications (MCA) in Canada is a graduate program that equips students with advanced skills in software development, data management, and IT infrastructure, preparing them for careers in the rapidly evolving tech industry.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `log_id` int(100) NOT NULL AUTO_INCREMENT,
  `reg_id` int(100) DEFAULT NULL,
  `user_type` varchar(250) DEFAULT NULL,
  `user_email` varchar(250) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'approved',
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `reg_id`, `user_type`, `user_email`, `password`, `status`) VALUES
(0, 0, 'Admin', 'admin@456gmail.com', 'Admin@456', 'approved'),
(1, 3, 'user_acc', 'hiba2@gmail.com', 'qwERTY12#$%^', 'approved'),
(9, 10, 'user', 'namdu@gmail.com', 'oman@26Kuttan', 'approved'),
(14, 13, 'consultancy', 'mmakber@yahoo.com', '	akku74', 'approved'),
(16, 15, 'consultancy', 'mehi@gmail.com', 'poIUY09*&^', 'approved'),
(20, 19, 'consultancy', 'info@brightfuturesabroad.com', 'Brightimages@123', 'approved'),
(21, 20, 'consultancy', 'contact@pathwayeducation.com', 'Pathway@123', 'approved'),
(23, 11, 'user', 'Aleena123@gmai.com', 'Aleena@123', 'approved'),
(25, 13, 'user', 'aliya123@gmail.com', 'Aliya@123', 'approved'),
(27, 15, 'user', 'aplu@Maigmail.com', 'Applu@12', 'approved'),
(28, 21, 'consultancy', 'ani1234@gmail.com', '	Aniku@85', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `review_id` int(100) NOT NULL AUTO_INCREMENT,
  `book_id` int(100) DEFAULT NULL,
  `review` varchar(250) DEFAULT NULL,
  `star` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `book_id`, `review`, `star`) VALUES
(4, 6, 'Smooth booking process! Found my ideal consultancy quickly, and the site made everything simple.', '3'),
(6, 12, 'that was a great session to understand', '3'),
(7, 6, 'Helpful guidance and support for students. Great job!', '4'),
(8, 8, 'nice counselling class....... that  was nicee', '2'),
(9, 7, '"Fly Your Dream High" consultancy offers personalized support and expert guidance, helping clients achieve their goals effectively. Highly recommended', '3'),
(10, 14, 'Pathway Consultancy provides excellent counseling services, offering personalized guidance for academic and career choices. Highly recommend their exp', '3'),
(11, 11, ' Consultancy offers exceptional counseling, providing personalized support for academic and career decisions. Highly recommend their service', '4'),
(12, 10, 'FFD The counseling services provided are outstanding offering personalized support and guidance to help clients achieve their dreams. Highly recommend', '4');

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE IF NOT EXISTS `rule` (
  `rule_id` int(100) NOT NULL AUTO_INCREMENT,
  `cons_id` int(100) DEFAULT NULL,
  `rules` varchar(1500) DEFAULT NULL,
  PRIMARY KEY (`rule_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`rule_id`, `cons_id`, `rules`) VALUES
(13, 14, '1.sdhfhgsduyfgjewjhsgdhweg fdbjkhgvyhdfh sdbjsdgjhbs.j sdsjkgfyhgbsjhb'),
(14, 15, '1.Set Clear Objectives: Define goals with clients upfront.\r\n2.Communicate Openly: Maintain transparent communication.\r\n3.Ensure Confidentiality: Protect client information.\r\n4.Base Recommendations on Evidence: Use data to support suggestions.\r\n5.Set Realistic Timelines: Manage client expectations effectively.\r\n6.Be Adaptable: Adjust strategies as needed.\r\n7.Define Roles Clearly: Promote accountability within the team.\r\n8.Encourage Collaboration: Foster teamwork and input.\r\n9.Seek Feedback Regularly: Assess progress and adjust accordingly.\r\n10.Commit to Improvement: Stay updated with industry trends'),
(30, 20, 'Active Listening: Understand client needs and concerns.\r\nRegular Updates: Keep clients informed on progress.\r\nIntegrity: Be honest about capabilities and outcomes.\r\nFlexibility: Adapt to changing client requirements.\r\nGoal Alignment: Ensure solutions match client objectives.\r\nRespect Boundaries: Acknowledge client time and resources.\r\nConstructive Feedback: Provide actionable insights.\r\nQuality Assurance: Maintain high standards in deliverables.\r\nPost-Consultation Support: Offer follow-up assistance.\r\nValue Creation: Focus on delivering tangible benefits.');

-- --------------------------------------------------------

--
-- Table structure for table `user_acc`
--

CREATE TABLE IF NOT EXISTS `user_acc` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(250) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `Phone_no` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `user_acc`
--

INSERT INTO `user_acc` (`user_id`, `user_name`, `image`, `email`, `DOB`, `gender`, `Phone_no`, `password`) VALUES
(3, 'hiba', 'pro.avif', 'hiba2@gmail.com', '2024-07-20', 'female', '1112223334', 'qwERTY12#$%^'),
(10, 'nandhu', 'boy.jpeg', 'namdu@gmail.com', '2008-05-11', 'male', '06282725858', 'oman@26Kuttan'),
(11, 'Aleena Barbara Francis', 'profile.avif', 'aleena123@gmai.com', '2024-08-09', 'female', '111222151', 'Aleena@123'),
(13, 'aliya', 'profile1.avif', 'aliya123@gmail.com', '2019-06-13', 'female', '5473216895', 'Aliya@123'),
(15, 'applu', 'boy1.jpeg', 'aplu@Maigmail.com', '2024-08-16', 'male', '25478555', 'Applu@12');

-- --------------------------------------------------------

--
-- Table structure for table `webreview`
--

CREATE TABLE IF NOT EXISTS `webreview` (
  `wr_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) DEFAULT NULL,
  `review` varchar(250) DEFAULT NULL,
  `star` int(100) DEFAULT NULL,
  PRIMARY KEY (`wr_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `webreview`
--

INSERT INTO `webreview` (`wr_id`, `user_id`, `review`, `star`) VALUES
(6, 11, 'Excellent student consultancy site! Easy to navigate with personalized resources that truly address student needs. Highly recommend checking it out!', 3),
(4, 3, 'its a great website to find our consultancy as our will', 3),
(5, 10, 'Great website for students! User-friendly, clear info, and personalized resources make it easy to find valuable consultancy services. Highly recommended!', 4),
(3, 3, 'its user-friendly design with clear content and smooth functionality, though adding more detailed service descriptions and an interactive chat feature could improve the user experience.', 4),
(7, 15, 'Great site for student consultancy! Easy to use!', 3);
