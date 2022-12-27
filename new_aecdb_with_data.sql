-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 12:11 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aecdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `business_id` int(11) NOT NULL,
  `year_started` year(4) NOT NULL,
  `busines_name` varchar(50) DEFAULT NULL,
  `business_logo` varchar(100) NOT NULL,
  `business_location` varchar(50) DEFAULT NULL,
  `business_contact` varchar(15) NOT NULL,
  `business_email` varchar(30) NOT NULL,
  `department_id` int(11) NOT NULL,
  `business_type` int(3) DEFAULT 0,
  `sector` varchar(50) NOT NULL,
  `business_description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`business_id`, `year_started`, `busines_name`, `business_logo`, `business_location`, `business_contact`, `business_email`, `department_id`, `business_type`, `sector`, `business_description`) VALUES
(1, 2022, 'Fruit On Wheels', '../images/business_logos/fruit_on_wheels.png', 'Ashesi Accra Ghana', '0242430210', 'fruitonwheel@gmail.com', 1, 1, 'Agriculture', 'Welcome to our fruit on wheels! We offer a wide variety of fresh and delicious fruits, including apples, bananas, oranges, pears, and more. Our produce is sourced from local farms and picked at the peak of ripeness to ensure maximum flavour and nutrition. Stop by our stand at the farmer market or '),
(2, 2021, 'Torri Cosmetics', '../images/business_logos/torri.png', 'Accra, Ghana', '0243820331', 'torri@gmail.com', 1, 1, 'Cosmetics', 'Experience luxury with Torri cosmetics! Our line of high-quality makeup and skincare products are designed to enhance your natural beauty and leave you feeling confident and radiant. From nourishing serums to long-lasting lipsticks, we have something for every occasion. All of our products are cruel'),
(3, 2020, 'The Traveling Trunk', '../images/business_logos/traveling_trunk.jpg', 'Tarkoradi', '02438212321', 'travellingtrunk@gmail.com', 1, 3, 'Travelling', 'Step into the past with The Traveling Trunk, your go-to destination for unique and one-of-a-kind vintage and antique finds. Our shop is filled with treasures from around the world, ranging from antique furniture and home decor to vintage clothing and accessories. Each piece is hand-selected for its ');

-- --------------------------------------------------------

--
-- Table structure for table `business_details`
--

CREATE TABLE `business_details` (
  `business_id` int(11) NOT NULL,
  `number_of_employees` int(11) NOT NULL,
  `formalised_structure` varchar(100) NOT NULL,
  `sdg_alignment` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `business_grants`
--

CREATE TABLE `business_grants` (
  `grant_id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_grants`
--

INSERT INTO `business_grants` (`grant_id`, `business_id`, `amount`) VALUES
(1, 1, 1000),
(2, 2, 3000),
(2, 1, 5000),
(2, 3, 700),
(4, 2, 5000),
(3, 2, 100),
(3, 3, 120),
(3, 3, 250),
(4, 3, 300),
(6, 3, 100);

-- --------------------------------------------------------

--
-- Table structure for table `business_revenue`
--

CREATE TABLE `business_revenue` (
  `business_id` int(11) NOT NULL,
  `revenue_amount` double DEFAULT NULL,
  `revenue_year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_revenue`
--

INSERT INTO `business_revenue` (`business_id`, `revenue_amount`, `revenue_year`) VALUES
(1, 500, 2022),
(2, 800, 2022),
(3, 1800, 2022);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `date_started` date NOT NULL,
  `course_description` varchar(300) NOT NULL,
  `course_status` int(3) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `date_started`, `course_description`, `course_status`, `department_id`) VALUES
(1, 'Introduction to Marketing', '2022-04-01', ' A course that introduces students to the principles of marketing, including consumer behavior, market research, and marketing strateg', 1, 3),
(2, 'Financial Accounting', '2019-02-15', 'A course that teaches students the principles of financial accounting, including financial statements, budgeting, and financial analysis.', 1, 3),
(3, 'Organizational Behavior', '2022-12-06', ' A course that teaches students about the behavior of individuals and groups within organizations, including motivation, communication, and leadership.', 1, 3),
(4, 'Project Management', '2022-04-30', 'A course that introduces students to the principles of management, including planning, organizing, leading, and controlling', 1, 3),
(5, ': Introduction to Economics', '2021-07-09', 'A course that introduces students to the principles of economics, including supply and demand, market structures, and monetary policy.', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `course_project`
--

CREATE TABLE `course_project` (
  `course_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_project`
--

INSERT INTO `course_project` (`course_id`, `project_id`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 4),
(3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `course_student`
--

CREATE TABLE `course_student` (
  `course_id` int(11) NOT NULL,
  `numberoffemaleStudent` int(11) NOT NULL,
  `numberofmaleStudent` int(11) NOT NULL,
  `course_year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_student`
--

INSERT INTO `course_student` (`course_id`, `numberoffemaleStudent`, `numberofmaleStudent`, `course_year`) VALUES
(1, 30, 20, 2022),
(1, 20, 10, 2021),
(1, 10, 20, 2020),
(2, 10, 20, 2022),
(2, 25, 35, 2022),
(3, 20, 15, 2021),
(4, 20, 10, 2022),
(4, 6, 14, 2021),
(5, 25, 35, 2019),
(5, 50, 40, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(1, 'Ashesi Venture Incubator'),
(2, 'Design Lab'),
(3, 'Training Across Curriculum');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(60) NOT NULL,
  `date_organized` date NOT NULL,
  `target_group` varchar(20) NOT NULL,
  `event_description` varchar(300) NOT NULL,
  `male_attendance` int(11) NOT NULL,
  `female_attendace` int(11) NOT NULL,
  `event_type` varchar(20) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `date_organized`, `target_group`, `event_description`, `male_attendance`, `female_attendace`, `event_type`, `department_id`) VALUES
(1, 'The Education Summit', '0000-00-00', 'seniors', 'A conference that brings together educators, administrators, and policymakers to discuss the latest developments in education', 100, 150, 'summit', 1),
(2, ' The Science Fair', '0000-00-00', '', 'An event that showcases the scientific projects and research of students from all grade levels.', 159, 141, 'exhibition', 1),
(3, ' The Learning Symposium', '2021-12-23', 'students', '', 100, 20, 'information session', 2),
(4, 'The Math Olympiad', '2020-12-24', 'alumni', 'A competition that challenges students to solve math problems and compete against their peers', 21, 100, 'pitch', 2),
(5, 'The Reading Festival', '2019-12-13', 'alumni', 'An event that promotes reading and literacy among students, featuring book readings, discussions, and activities', 120, 80, 'hackathon', 3),
(6, 'The Creativity Conference', '2021-01-21', 'students', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lacinia rhoncus purus, at elementum lacus facilisis sit amet', 25, 75, 'information session', 3);

-- --------------------------------------------------------

--
-- Table structure for table `events_grants`
--

CREATE TABLE `events_grants` (
  `grant_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events_grants`
--

INSERT INTO `events_grants` (`grant_id`, `event_id`, `amount`) VALUES
(5, 4, 1000),
(6, 5, 3000),
(4, 5, 5000),
(4, 5, 7000),
(5, 6, 5000),
(3, 1, 500),
(1, 3, 1200),
(3, 3, 250),
(2, 4, 300),
(5, 4, 100);

-- --------------------------------------------------------

--
-- Table structure for table `grants`
--

CREATE TABLE `grants` (
  `grant_id` int(11) NOT NULL,
  `grant_name` varchar(50) NOT NULL,
  `grant_type` int(3) NOT NULL,
  `date_received` date NOT NULL,
  `grant_description` varchar(600) DEFAULT NULL,
  `grant_company_image` varchar(100) NOT NULL,
  `department_id` int(11) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grants`
--

INSERT INTO `grants` (`grant_id`, `grant_name`, `grant_type`, `date_received`, `grant_description`, `grant_company_image`, `department_id`, `amount`) VALUES
(1, 'Small Business Innovation Research Grant', 1, '2022-12-01', 'A grant program that provides funding to small businesses to conduct research and development (R&D) projects with the potential for commercialization.', '../grants/image1.jpg', 1, 20000),
(2, ' Small Business Technology Transfer (STTR)', 1, '2022-12-07', 'A grant program that provides funding to small businesses to collaborate with research institutions on R&D projects with the potential for commercialization', '../grants/image1.jpg', 1, 300000),
(3, ' Rural Business Development Grants (RBDG)', 1, '2022-12-01', ' A grant program that provides funding to support economic development projects in rural areas, including business development, entrepreneurship, and job creation', '../images/image2.jpg', 2, 5000),
(4, 'Women\'s Business Ownership Assistance (WBOA)', 2, '2020-12-16', 'A grant program that provides funding to support women-owned businesses, including training, technical assistance, and access to capital.', '../images/grants/image4.jpg', 2, 7000),
(5, 'Small Business Innovation Research (SBIR) Phase II', 1, '2022-12-01', 'A grant program that provides follow-up funding to small businesses that have successfully completed an SBIR Phase I project and are ready to move towards commercialization', '../images/grants/image5.jpg', 3, 9000),
(6, 'Community Development Block Grant (CDBG)', 2, '2021-12-16', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lacinia rhoncus purus, at elementum lacus facilisis sit amet. Integer ornare, diam ut tincidunt consectetur, nisi nisi tincidunt nisi, at lobortis erat lectus non nisi. Sed pretium purus sed lacus convallis, at accumsan purus ornare. Aliquam auctor quam eu felis dignissim, sed placerat leo consectetur. Aliquam auctor mauris nisi, in tristique diam eleifend sed', '../images/grants/image6.jpg', 3, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `module_id` int(11) NOT NULL,
  `module_name` varchar(50) NOT NULL,
  `module_description` varchar(100) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`module_id`, `module_name`, `module_description`, `department_id`) VALUES
(29, 'Mastering the Art of Business', 'Learn the skills and strategies needed to succeed in business with our comprehensive course. Led by ', 1),
(30, 'Marketing and Sales Mastery', 'Become a marketing and sales pro with our comprehensive course. Led by experienced professionals. Le', 1),
(31, 'The Business Mindset Shift', 'Transform your mindset and approach to business with our course. Led by experienced professionals. L', 1),
(32, 'The Business Plan Blueprint', 'Create a solid foundation for your business with our course on developing a business plan. Led by ex', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `project_description` varchar(300) NOT NULL,
  `project_status` int(3) NOT NULL,
  `date_started` date NOT NULL,
  `sdg_goals` varchar(15) NOT NULL,
  `department_id` int(11) NOT NULL,
  `sector` varchar(60) NOT NULL,
  `project_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `project_description`, `project_status`, `date_started`, `sdg_goals`, `department_id`, `sector`, `project_image`) VALUES
(1, 'The Community Garden Project', 'A project to establish a community garden in a local park, with the goal of providing fresh produce to the community and promoting the sustainable living practice', 1, '2022-04-01', '1,5,10', 1, 'Agriculture', '../images/project/image1.jpg'),
(2, 'The Student Mentorship Program', 'A program that pairs high school students with mentors from local businesses, providing them with hands-on experience and guidance as they explore career paths', 1, '2021-08-02', '5', 1, 'Education', '../images/project/image2.jpg'),
(3, 'The School Store Startup', 'A school-run business that sells supplies, snacks, and other items to students and staff. The goal is to provide a convenient and affordable option for students while also teaching them entrepreneurial skills.', 1, '2020-10-14', '1,5,10', 1, 'Education', '../images/project/image3.jpg'),
(4, 'The Sustainability Initiative', 'A project to promote sustainability in schools, including energy conservation efforts, recycling programs, and educational campaigns on environmental issues.\r\n', 1, '2022-04-30', '10, 2, 3', 2, 'Environment', '../images/project/image4.jpg'),
(5, 'The School Newspaper', 'A student-run newspaper that covers news and events at the school, as well as broader issues of interest to the student body', 1, '2020-04-13', '6,8,9', 2, 'Media', '../images/project/image5.jpg'),
(6, 'The Fundraising Campaign', 'A project to raise money for school programs and resources, including events and campaigns to engage the community and gather support.', 1, '2022-03-23', '6', 2, 'Fundraising', '../images/project/image6.jpg'),
(7, 'The Talent Showcase', 'An event that celebrates the diverse talents of students, including performances in music, dance, theater, and other areas.', 1, '2022-01-20', '1, 12 ,13', 2, 'Entertainment', '../images/project/image7.jpg'),
(8, 'The Student-Led Conference', 'A project that engages students in community service and volunteering efforts, with the goal of making a positive impact in the local community.', 1, '2021-12-16', '1, 2,3', 3, 'Community Development', '../images/project/image9.jpg'),
(9, 'The Poetry Slam', 'Join us for a night of powerful spoken word at The Poetry Slam, an event that celebrates the art of poetry and self-expression. Featuring local and guest poets, this event is a platform for artists to share their work and connect with the community.', 1, '2022-01-12', '2, 3, 5', 3, 'Arts', '../images/project/image10.jpg'),
(10, 'The Music Program', 'Join us for a journey of musical discovery and growth with The Music Program. Led by experienced instructors, this program offers a range of music lessons and ensemble opportunities for students of all levels. From classical to contemporary, we have something for every taste and interest.', 1, '2022-12-01', '1,2,3', 3, 'Education', '../images/project/image11.jpg'),
(11, 'The Cultural Exchange Program', 'Experience the world and broaden your horizons with The Cultural Exchange Program. This program connects students with peers from other countries and cultures, providing an opportunity to learn about and experience different ways of life. Through a combination of online and in-person interactions, s', 1, '2022-09-28', '2,7,9', 3, 'Education', '../images/project/image12.jpg'),
(12, 'The Science Fair', 'Join us for a celebration of scientific discovery and innovation at The Science Fair. This event brings together students from all grade levels to showcase their scientific projects and research. From physics and chemistry to biology and engineering, there\'s something for everyone at this exciting a', 1, '2021-12-01', '2,4,5', 3, 'Education', '../images/project/image13.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `project_grants`
--

CREATE TABLE `project_grants` (
  `grant_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_grants`
--

INSERT INTO `project_grants` (`grant_id`, `project_id`, `amount`) VALUES
(6, 12, 1000),
(6, 11, 3000),
(5, 10, 5000),
(4, 10, 200),
(3, 9, 100),
(3, 8, 500),
(3, 6, 1200),
(3, 2, 250),
(5, 7, 300),
(3, 3, 500);

-- --------------------------------------------------------

--
-- Table structure for table `stakeholder`
--

CREATE TABLE `stakeholder` (
  `stakeholder_id` int(11) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `stakeholderRole` int(11) NOT NULL,
  `gender` int(3) NOT NULL DEFAULT 0,
  `email` varchar(30) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `stakeholder_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stakeholder`
--

INSERT INTO `stakeholder` (`stakeholder_id`, `first_name`, `last_name`, `stakeholderRole`, `gender`, `email`, `phone_number`, `stakeholder_image`) VALUES
(21, 'Rachel', 'Michael', 1, 1, 'abc1@gmail.com', '0596547234', ''),
(22, 'Jessica', 'David', 1, 1, 'abcd@gmail.com', '0245874328', ''),
(23, 'Sarah', 'John', 1, 1, 'kote@gmail.com', '0243932102', ''),
(24, 'Lauren', 'James', 1, 1, 'abcdef@gmail,com', '0264567890', ''),
(25, 'Emily', 'Christopher', 1, 0, 'efgh@gmail.com', '02453687', ''),
(26, 'Melissa', 'Matthew', 1, 2, 'seen@gmail.com', '024536985', ''),
(27, 'Jennifer', 'William', 1, 2, 'teapot@gmail.com', '0245632857', ''),
(28, 'Nicole', 'Robert', 1, 2, 'teatable@gmail.com', '0245632875', ''),
(29, 'Lisa', 'Joseph', 1, 2, 'funnyGuala@gmail.com', '02456329875', ''),
(30, 'Rachel', 'Ashley', 1, 2, 'angryBird@gmail.com', '0245632975', ''),
(31, 'Ral', 'Mich', 1, 1, 'abc12@gmail.com', '0596547134', ''),
(32, 'Jess', 'Davi', 1, 1, 'ab@gmail.com', '0245674328', ''),
(33, 'Saa', 'Jon', 1, 1, 'koteh@gmail.com', '0243935102', ''),
(34, 'Lauren', 'James', 1, 1, 'abcdefg@gmail,com', '02612567890', ''),
(35, 'Emily', 'Christophe', 1, 0, 'efghij@gmail.com', '0245368732', ''),
(36, 'Melissa', 'Montana', 1, 2, 'seer@gmail.com', '0245361285', ''),
(37, 'Jen', 'Wiam', 1, 2, 'teapoter@gmail.com', '0245612857', ''),
(38, 'Nicoles', 'Rort', 1, 2, 'teatables12@gmail.com', '0245632235', ''),
(39, 'Lisah', 'Josephine', 1, 2, 'funnyGu@gmail.com', '02456320075', ''),
(40, 'Rachael', 'Ashleya', 1, 2, 'angryBirdo@gmail.com', '0245002875', '');

-- --------------------------------------------------------

--
-- Table structure for table `stakeholder_business`
--

CREATE TABLE `stakeholder_business` (
  `stakeholder_id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stakeholder_business`
--

INSERT INTO `stakeholder_business` (`stakeholder_id`, `business_id`) VALUES
(21, 1),
(22, 1),
(22, 1),
(24, 2),
(26, 2),
(27, 3),
(28, 3),
(29, 3),
(30, 3),
(31, 3);

-- --------------------------------------------------------

--
-- Table structure for table `stakeholder_modules`
--

CREATE TABLE `stakeholder_modules` (
  `stakeholder_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stakeholder_modules`
--

INSERT INTO `stakeholder_modules` (`stakeholder_id`, `module_id`) VALUES
(32, 29),
(33, 30),
(34, 31),
(35, 32),
(36, 32);

-- --------------------------------------------------------

--
-- Table structure for table `stakeholder_project`
--

CREATE TABLE `stakeholder_project` (
  `stakeholder_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stakeholder_project`
--

INSERT INTO `stakeholder_project` (`stakeholder_id`, `project_id`) VALUES
(35, 12),
(36, 5),
(38, 4),
(39, 3),
(40, 2),
(37, 1),
(32, 1),
(21, 1),
(23, 3),
(22, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`business_id`),
  ADD UNIQUE KEY `business_email` (`business_email`),
  ADD UNIQUE KEY `business_contact` (`business_contact`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `business_details`
--
ALTER TABLE `business_details`
  ADD KEY `business_id` (`business_id`);

--
-- Indexes for table `business_grants`
--
ALTER TABLE `business_grants`
  ADD KEY `business_id` (`business_id`),
  ADD KEY `grant_id` (`grant_id`);

--
-- Indexes for table `business_revenue`
--
ALTER TABLE `business_revenue`
  ADD KEY `business_id` (`business_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `course_project`
--
ALTER TABLE `course_project`
  ADD KEY `course_id` (`course_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `course_student`
--
ALTER TABLE `course_student`
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `events_grants`
--
ALTER TABLE `events_grants`
  ADD KEY `event_id` (`event_id`),
  ADD KEY `grant_id` (`grant_id`);

--
-- Indexes for table `grants`
--
ALTER TABLE `grants`
  ADD PRIMARY KEY (`grant_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`module_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `project_grants`
--
ALTER TABLE `project_grants`
  ADD KEY `grant_id` (`grant_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `stakeholder`
--
ALTER TABLE `stakeholder`
  ADD PRIMARY KEY (`stakeholder_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- Indexes for table `stakeholder_business`
--
ALTER TABLE `stakeholder_business`
  ADD KEY `business_id` (`business_id`),
  ADD KEY `stakeholder_id` (`stakeholder_id`);

--
-- Indexes for table `stakeholder_modules`
--
ALTER TABLE `stakeholder_modules`
  ADD KEY `module_id` (`module_id`),
  ADD KEY `stakeholder_id` (`stakeholder_id`);

--
-- Indexes for table `stakeholder_project`
--
ALTER TABLE `stakeholder_project`
  ADD KEY `project_id` (`project_id`),
  ADD KEY `stakeholder_id` (`stakeholder_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `business_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `grants`
--
ALTER TABLE `grants`
  MODIFY `grant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `stakeholder`
--
ALTER TABLE `stakeholder`
  MODIFY `stakeholder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `business`
--
ALTER TABLE `business`
  ADD CONSTRAINT `business_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`);

--
-- Constraints for table `business_grants`
--
ALTER TABLE `business_grants`
  ADD CONSTRAINT `business_grants_ibfk_1` FOREIGN KEY (`business_id`) REFERENCES `business` (`business_id`),
  ADD CONSTRAINT `business_grants_ibfk_2` FOREIGN KEY (`grant_id`) REFERENCES `grants` (`grant_id`);

--
-- Constraints for table `business_revenue`
--
ALTER TABLE `business_revenue`
  ADD CONSTRAINT `business_revenue_ibfk_1` FOREIGN KEY (`business_id`) REFERENCES `business` (`business_id`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`);

--
-- Constraints for table `course_project`
--
ALTER TABLE `course_project`
  ADD CONSTRAINT `course_project_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `course_project_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`);

--
-- Constraints for table `course_student`
--
ALTER TABLE `course_student`
  ADD CONSTRAINT `course_student_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`);

--
-- Constraints for table `events_grants`
--
ALTER TABLE `events_grants`
  ADD CONSTRAINT `events_grants_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`),
  ADD CONSTRAINT `events_grants_ibfk_2` FOREIGN KEY (`grant_id`) REFERENCES `grants` (`grant_id`);

--
-- Constraints for table `grants`
--
ALTER TABLE `grants`
  ADD CONSTRAINT `grants_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`);

--
-- Constraints for table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `module_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_grants`
--
ALTER TABLE `project_grants`
  ADD CONSTRAINT `project_grants_ibfk_1` FOREIGN KEY (`grant_id`) REFERENCES `grants` (`grant_id`),
  ADD CONSTRAINT `project_grants_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`);

--
-- Constraints for table `stakeholder_business`
--
ALTER TABLE `stakeholder_business`
  ADD CONSTRAINT `stakeholder_business_ibfk_1` FOREIGN KEY (`business_id`) REFERENCES `business` (`business_id`),
  ADD CONSTRAINT `stakeholder_business_ibfk_2` FOREIGN KEY (`stakeholder_id`) REFERENCES `stakeholder` (`stakeholder_id`);

--
-- Constraints for table `stakeholder_modules`
--
ALTER TABLE `stakeholder_modules`
  ADD CONSTRAINT `stakeholder_modules_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `module` (`module_id`),
  ADD CONSTRAINT `stakeholder_modules_ibfk_2` FOREIGN KEY (`stakeholder_id`) REFERENCES `stakeholder` (`stakeholder_id`);

--
-- Constraints for table `stakeholder_project`
--
ALTER TABLE `stakeholder_project`
  ADD CONSTRAINT `stakeholder_project_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `stakeholder_project_ibfk_2` FOREIGN KEY (`stakeholder_id`) REFERENCES `stakeholder` (`stakeholder_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
