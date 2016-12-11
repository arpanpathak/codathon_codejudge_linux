-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 06, 2016 at 12:01 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `crn` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `attempt` int(11) NOT NULL,
  `problem1` int(11) NOT NULL,
  `problem2` int(11) NOT NULL,
  `problem3` int(11) NOT NULL,
  `problem4` int(11) NOT NULL,
  `problem5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `year`, `crn`, `password`, `attempt`, `problem1`, `problem2`, `problem3`, `problem4`, `problem5`) VALUES
('20358', 'Sumita Basu', 'basusumita4U@gmail.com', 2, '001', 'sumita147', 0, 0, 0, 0, 0, 0),
('aniket98', 'ANIKET CHATTOPADHYAY', 'aniketkv1998@gmail.com', 1, 'cse2016/036', 'aman9498', 0, 0, 0, 0, 0, 0),
('Aniruddha', 'Aniruddha Sadhukhan', 'anisadhukhan1@gmail.com', 2, 'CSE2015004', 'halloffame', 0, 0, 527, 0, 0, 0),
('ankit biswas', 'Ankit', 'ankitbiswas26@gmail.com', 1, 'CSE2016/027 ', 'nigahiga', 0, 0, 0, 0, 0, 0),
('ankitbiswas', 'Ankit Biswas', 'ankitbiswas26@gmail.com', 1, 'CSE2016/027', 'nigahiga1', 0, 0, 0, 0, 0, 0),
('arkesray', 'Arkes Ray', 'arkesray@gmail.com', 1, 'CSE2016/023', 'arkesray4498@!', 0, 0, 0, 0, 0, 0),
('Arnab97', 'Arnab Chakraborty', 'arnab033chakraborty@gmail.com', 1, '056', 'Styl!shz', 0, 0, 0, 0, 0, 0),
('atisayajain', 'Atisaya Jain', 'atisayajain@gmail.com', 1, '58', 'culer1018', 0, 0, 0, 0, 0, 0),
('AzorAhai23', 'Swarnendu Sardar', 's231098@gmail.com', 1, 'CSE2016/87', 'ss231098', 0, 0, 0, 0, 0, 0),
('b1swa', 'Biswajit Oraon', 'biswajitoraon19@gmail.com', 4, 'CSE/2013/021', '123', 0, 0, 0, 0, 0, 0),
('cse2015032', 'sagar shaw', 'sagarshaw9088627706@gmail.com', 2, 'cse2015032', 'zarrin', 0, 0, 0, 0, 0, 0),
('cse2015053', 'amarkumargupta', 'amarkrgupta96@gmail.com', 2, 'cse2015053', 'amar@123', 0, 0, 0, 0, 0, 0),
('cse2015078', 'Avishek', 'barshan23@gmail.com', 2, 'cse2015/078', '14768925', 0, 573, 542, 0, 0, 0),
('cse2016/070', 'Arpan Mondal', 'amondal.dns@gmail.com', 1, 'cse2016/070', 'arpan5', 0, 0, 0, 0, 0, 0),
('dharsam', 'Soumik Dhar', 'dharsam555@gmail.com', 1, 'CSE 2016/084', 'Deadpool23!', 0, 0, 0, 0, 0, 0),
('EswadaePsybous', 'Soumyadeep Biswas', 'soumyadeepb007@gmail.com', 2, 'CSE2015010', 'Dearjoy@123', 0, 0, 0, 0, 0, 0),
('Geetanjali', 'Geetanjali', 'geetus98@gmail.com', 1, 'CSE2016/057', 'sayar1995', 0, 0, 0, 0, 0, 0),
('Geetanjali Singh', 'Geetanjali Singh', 'geetus98@gmail.com', 1, 'CSE2016/057', 'sayar1995', 0, 0, 0, 0, 0, 0),
('Gunjan4542', 'Gunjan Dutta Bhowmick', 'gdbhowmick@gmail.com', 2, 'cse/2015/069', 'gunjanitup', 0, 639, 612, 711, 759, 0),
('iamanish', 'Anish Agarwal', 'anish99033@gmail.com', 1, 'CSE2016/079', 'anishagarwal', 0, 0, 0, 0, 0, 0),
('iqbal', 'Iqbal Sikandar', 'Iqbalsikandar.97@outlook.com', 1, 'CSE/2016/030', '031197@iq', 0, 0, 0, 0, 0, 0),
('Iqbal Sikandar', 'Iqbal Sikandar', 'Iqbalsikandar.97@outlook.com', 1, 'CSE/2016/030', '031197@iq', 0, 0, 0, 0, 0, 0),
('kushalb', 'KUSHAL BAIDYA', 'kushalbaidya97@gmail.com', 1, 'CSE 2016/035', 'kushal97', 0, 0, 0, 0, 0, 0),
('oishik.mukhopadhyay', 'Oishik Mukhopadhyay', 'oishik.mukhopadhyay@gmail.com', 1, 'CSE2016/066', 'Abcd@1234', 0, 0, 0, 0, 0, 0),
('Osupie', 'Md Osamah Habib', 'osamah.habib73@gmail.com', 1, 'CSE2016/017', 'osupie#19', 0, 0, 0, 0, 0, 0),
('parnabs', 'Parnab Sanyal', 'sanyal.parnab96@gmail.com', 4, 'CSE2013024', 'codathon', 0, 0, 593, 0, 0, 0),
('prashant', 'prashant', 'kr.prashant94@gmail.com', 1, 'CSE2016/085', 'prashant', 0, 0, 0, 0, 0, 0),
('Pritam1995', 'PRITAM BHATTACHARJEE', 'ratanbhattacharjee1995@gmail.com', 3, 'CSE2014018', 'Pritam123', 0, 0, 544, 0, 0, 0),
('Raddaya', 'Rangeet', 'Rangeet.C@gmail.com', 1, 'CSE2016/062', 's10100v:o', 0, 0, 0, 0, 0, 0),
('Ranit2015', 'Ranit', 'ranit3.das@gmail.com', 2, 'CSE/2015/068', 'Rd@19021997', 0, 0, 0, 0, 0, 0),
('rex.vishal', 'Vishal Kumar', 'rex.vishal.3@gmail.com', 1, 'CSE2016/075', 'vishal1203', 0, 0, 0, 0, 0, 0),
('sahbaj576', 'Sahbaj Ali', 'sahbaj.ali576@gmail.com', 1, 'CSE2016/040', 'goodluck123$', 0, 0, 0, 0, 0, 0),
('samikchowdhury2016@gmail.com', 'Samik', 'samikchowdhury1997@gmail.com', 1, 'CSE2016/021', 'messi10', 0, 0, 0, 0, 0, 0),
('Saptorshi98', 'Saptorshi Pal', 'saptorshi98@gmail.com', 1, '34', 'ilovecoding', 0, 0, 0, 0, 0, 0),
('soham98', 'Soham Mandal', 'soham2802@gmail.com', 1, 'CSE2016/45', 'frozenbone18', 0, 0, 0, 0, 0, 0),
('sushkr34', 'sushant kumar', 'sendmailtosushant@gmail.com', 2, 'cse2015079', 'sweetbabu123@', 0, 0, 0, 0, 0, 0),
('Tonmoy', 'tonmoy1995', 'tonmoypatra123@gmail.com', 3, 'CSE2014015', 'meat1995', 0, 0, 0, 0, 0, 0),
('vikashhela', 'VIKASH HELA', 'vikashhela1411@gmail.com', 2, 'CSE/2015/044', 'Vikash30*', 0, 0, 0, 0, 0, 0),
('x0r', 'Suvaditya Sur', 'imneil1996@gmail.com', 2, 'CSE2015028', 'Suvaditya@000', 0, 624, 616, 725, 761, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
