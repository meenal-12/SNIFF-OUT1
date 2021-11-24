-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 04:31 AM
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
-- Database: `users0210`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `email` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `text` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`email`, `name`, `text`) VALUES
('meenalchourasiya@gmail.com', 'MEENAL CHOURASIYA', 'HOW IS THE JOSH'),
('meenalchourasiya@gmail.com', 'Meenal Chourasiya', 'WHOAAA'),
('meenalchourasiya@gmail.com', 'Meenal Chourasiya', 'WHOAAA'),
('meenalchourasiya@gmail.com', 'Meenal Chourasiya', ' gsdRDzdhbfh'),
('meenalchourasiya@gmail.com', 'Meenal Chourasiya', 'how is the things ');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `id` varchar(200) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `stype` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `shortbio` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`id`, `sname`, `stype`, `location`, `contact`, `shortbio`) VALUES
('0801SP1001', 'GEETANJALI HOSTEL', 'GIRLS HOSTEL', '13-14, Rabindranath Tagore Marg, Chhawni, Indore, Madhya Pradesh 452001', '+918964858866', 'Our hostel has 30 rooms , each room has four cupboards, four beds which are to be shared by four boys. Each room has a separate washroom. Washrooms are cleaned twice a day.\r\nalso we provide laundry facility'),
('0801SP1002', 'Nilgiri Boys Hostel', 'Boys Hostel', '8/4 Maoramaganj, Geeta Bhavan Road, Mahatma Gandhi Road, Indore, Madhya Pradesh 452001', '+919425064250', 'Our hostel has 28 rooms , each room has two cupboards,two beds which are to be shared by two boys. Each room has a seperate washroom. Washrooms are cleaned twice a day.'),
('0801SP1023', 'Harshdeep Hostel', 'Girls Hostel', 'mandir, 38 barfani nagar , opp sopa, MR 9 Rd, near barfani dham, Indore, Madhya Pradesh 452008', '91 86785 837', 'Our hostel has 28 rooms , each room has two cupboards,two beds which are to be shared by two boys. Each room has a seperate washroom. Washrooms are cleaned twice a day.'),
('0801SP1024', 'Sri Prime Hostel', 'Boys Hostel', 'Vijaynagar', '8964858866', 'Our hostel has 30 rooms , each room has four cupboards, four beds which are to be shared by four boys. Each room has a separate washroom. Washrooms are cleaned twice a day.\r\nalso we provide laundry facility and refridgeration facility on each floor'),
('0801SP1035', 'Meenu Girl\'s hostel', 'Girls Hostel', 'South Tukoganj, Indore', '98265 27272', '24/7 running water, AC rooms ,free parking, high speed wifi, home cooked delicious food, Single and double seater rooms, Attached washrooms');

-- --------------------------------------------------------

--
-- Table structure for table `mess`
--

CREATE TABLE `mess` (
  `id` varchar(200) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `stype` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `shortbio` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mess`
--

INSERT INTO `mess` (`id`, `sname`, `stype`, `location`, `contact`, `shortbio`) VALUES
('0801SP1049', 'Sharma mess', 'Vegetarian', 'Railway station', '7282292939', '10am-1pm in the day\r\n6pm-9pm in the evening'),
('0801SP1067', 'Upadhyay Mess', 'Composite', 'Rajkumar bridge', '5152728288', '10am-3pm in the day\r\n7pm-9pm in the evening'),
('0801SP1062', 'Vyas ji ki mess', 'Vegetarian', '6th floor, Vinay building, Opposite SGSITS main gate, near lantern square, Madhya Pradesh 452001', '9574983394', 'Takeaway and dine in both services available'),
('0801SP1094', 'Prachi yadav mess', 'Composite', 'Ahilyabai colony', '1425627277', 'Fresh food\r\nFresh salad\r\n24/7 open');

-- --------------------------------------------------------

--
-- Table structure for table `servicepro`
--

CREATE TABLE `servicepro` (
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `id` varchar(200) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `stype` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `shortbio` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicepro`
--

INSERT INTO `servicepro` (`email`, `password`, `name`, `id`, `sname`, `stype`, `location`, `contact`, `shortbio`) VALUES
('meenalchourasiya@gmail.com', '898', 'MEENAL CHOURASIYA', '0801SP1001', 'GEETANJALI HOSTEL', 'GIRLS HOSTEL', '13-14, Rabindranath Tagore Marg, Chhawni, Indore, Madhya Pradesh 452001', '+918964858866', 'Our hostel has 30 rooms , each room has four cupboards, four beds which are to be shared by four boys. Each room has a separate washroom. Washrooms are cleaned twice a day.\nalso we provide laundry facility'),
('manteshanoor1503@gmail.com', '123456', 'MANTESHA NOOR', '0801SP1002', 'Nilgiri Boys Hostel', 'Boys Hostel', '8/4 Maoramaganj, Geeta Bhavan Road, Mahatma Gandhi Road, Indore, Madhya Pradesh 452001', '+919425064250', 'Our hostel has 28 rooms , each room has two cupboards,two beds which are to be shared by two boys. Each room has a seperate washroom. Washrooms are cleaned twice a day.'),
('jainmess@gmail.com', 'bgfhmfj', 'Shailendra Jain', '0801SP1022', 'Jain mess', 'Vegetarian', 'Race course road', '9754736376', '100% pure veg\r\n100% pure jain food'),
('hdeephostels@gmail.com', 'abcdef', 'Harshdeep Chabbra', '0801SP1023', 'Harshdeep Hostel', 'Girls', 'mandir, 38 barfani nagar , opp sopa, MR 9 Rd, near barfani dham, Indore, Madhya Pradesh 452008', '91 86785 837', 'Our hostel has 28 rooms , each room has two cupboards,two beds which are to be shared by two boys. Each room has a seperate washroom. Washrooms are cleaned twice a day.'),
('SPhostel@gmail.com', 'acdfgv', 'Sri Prime', '0801SP1024', 'Sri Prime Hostel', 'Boys', 'Vijaynagar', '8964858866', 'Our hostel has 30 rooms , each room has four cupboards, four beds which are to be shared by four boys. Each room has a separate washroom. Washrooms are cleaned twice a day.\r\nalso we provide laundry facility and refridgeration facility on each floor'),
('aashraybh@gmail.com', 'rhtyfgnc', 'Aashrau Choudhury', '0801SP1026', 'Aashray Boys hostel', 'Boys', 'vijaynagar,indore', '98260 30203', '24 hrs water and electricity, independent rooms, always there will be a security guard in front of hostel gate'),
('sharmajimess@gmail.com', 'jhbdxhs', 'Pankaj Sharma', '0801SP1035', 'Sharma ji ki mess', 'Composite', 'PVHCQ vallabh nagar, Indore Madhya Pradesh 452001', '84738 28474', 'Dine in service available timing 11:00am-3:00 pm for lunch and for dinner 7:00 pm -11:00 pm'),
('meenuhostels@gmail.com', 'qwerty', 'Meenu Chaourasia', '0801SP1035', 'Meenu Girl\'s hostel', 'Girls', 'South Tukoganj, Indore', '98265 27272', '24/7 running water, AC rooms ,free parking, high speed wifi, home cooked delicious food, Single and double seater rooms, Attached washrooms'),
('sharmamess@gmail.com', 'hgfjfkh', 'Vedant Sharma', '0801SP1049', '', '', '', '', ''),
('vyasjimess@gmail.com', 'jfjfk', 'Adbhut Vyas', '0801SP1062', 'Vyas ji ki mess', 'Vegetarian', '6th floor, Vinay building, Opposite SGSITS main gate, near lantern square, Madhya Pradesh 452001', '9574983394', 'Takeaway and dine in both services available'),
('upadhyaymess@gmail.com', 'hfihfuih', 'Upadhyay Singh', '0801SP1067', 'Upadhyay Mess', 'Composite', 'Rajkumar bridge', '5152728288', '10am-3pm in the day\r\n7pm-9pm in the evening'),
('karnavat@gmail.com', 'hgfjfk', 'Guru Karnavat', '0801SP1073', 'Karnavat staff mess ', 'Composite', '8/2 sriramnagar, South Tukoganj Indore,452001', '7463729378', 'Non veg also available on preorder. Dine in and takeaway facilities available.different types of thalis available like punjabi thali, saadi thali at different prices'),
('bajrangmess@gmail.com', 'hgfjfkj', 'Bajrang Gupta', '0801SP1084', 'Bajrang mess', 'Composite', 'Malwa mill', '6272828822', '12pm-3pm in the day\r\n7pm-9pm in the evening\r\nDaily fresh salad'),
('sadhanamess@gmail.com', 'dkndjoff', 'Sadhana Goswami', '0801SP1088', 'Sadhana restaurant and mess', 'Vegetarian', 'PV6J+636 , murai mohalla , jaora compound,indore, 452001', '9573928475', 'Only veg food available, takeaways are also available, reasonable rates, dine in fecility'),
('mamatiffin@gmail.com', 'skdjnfs', 'Shobit Pandit', '0801SP1091', 'Mama tiffin center', 'Composite', 'Near, 77 new complex, Jail road ,siyaganj indore, Madhya Pradesh 452007', '5161611717', 'Delivery available,same day delivery, takeaway ,thali system is also provided by us ,rates are reasonable, payment flexibility available.\r\n'),
('prachimess@gmail.com', 'abscdf', 'Prachi Yadav', '0801SP1094', 'Prachi yadav mess', 'Composite', 'Ahilyabai colony', '1425627277', 'Fresh food\r\nFresh salad\r\n24/7 open');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(23) NOT NULL,
  `dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `email`, `password`, `dt`) VALUES
(22, 'meenalchourasiya@gmail.com', 'ggg', '2021-10-17 17:51:55'),
(23, 'yashichourasiya1@gmail.com', 'fff', '2021-10-17 20:59:20'),
(24, 'manteshanoor1503@gmail.com', 'eee', '2021-10-17 21:13:07'),
(25, 'yashichourasiya2@gmail.com', 'hhhh', '2021-10-25 13:48:29'),
(26, 'yashichourasiya4@gmail.com', 'kkk', '2021-10-25 13:54:22'),
(27, 'meenalchourasiya02@gmail.com', 'ggg', '2021-10-26 16:10:56'),
(28, 'meenachourasiya@gmail.com', 'hhh', '2021-11-10 22:01:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `servicepro`
--
ALTER TABLE `servicepro`
  ADD PRIMARY KEY (`id`,`contact`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password` (`password`);
ALTER TABLE `servicepro` ADD FULLTEXT KEY `location` (`location`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
