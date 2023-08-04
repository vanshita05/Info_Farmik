-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 09:14 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal_cat`
--

CREATE TABLE `animal_cat` (
  `uid` int(11) NOT NULL,
  `animal_id` int(11) NOT NULL,
  `animal` varchar(100) NOT NULL,
  `food type` varchar(100) NOT NULL,
  `quantity of food` varchar(500) NOT NULL,
  `returnfood` varchar(500) NOT NULL,
  `mobileno` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL,
  `Isactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animal_cat`
--

INSERT INTO `animal_cat` (`uid`, `animal_id`, `animal`, `food type`, `quantity of food`, `returnfood`, `mobileno`, `gender`, `dob`, `doi`, `dou`, `Isactive`) VALUES
(0, 7, 'cow', 'grass', '2 liter pr day', 'milk', '942642453', 'Female', '2019-03-01', '2019-03-30', '2019-03-30', 1),
(0, 8, 'Hen', 'grains', '4 pr month', 'eggs,meet', '9099930981', 'Male', '2019-03-07', '2019-04-02', '2019-04-02', 1),
(0, 9, 'camel ', 'grass', '1 liter pr day', 'milk', '9978174981', 'Male', '2019-02-14', '2019-04-02', '2019-04-02', 1),
(0, 11, 'cow', 'Grass', '1 liter pr day', 'Milk', '7048640507', 'Female', '2019-03-06', '2019-04-04', '2019-04-04', 1),
(0, 12, 'cow', 'Grass', '1 liter pr day', 'Milk', '0', 'Female', '2019-03-06', '2019-04-04', '2019-04-04', 1),
(0, 13, 'cow', 'Grass', '1 liter pr day', 'Milk', '0', 'Female', '2019-03-06', '2019-04-04', '2019-04-04', 1),
(0, 14, 'Hen', 'grains', '3 eggs pr week', 'eggs, meet', '0', 'Male', '2019-04-22', '2019-04-04', '2019-04-04', 1),
(0, 15, 'hen', 'grains', '6 eggs', 'eggs, meet', '0', 'Female', '2019-03-05', '2019-04-14', '2019-04-14', 1),
(0, 16, 'cow, buffellow', 'grains, grass', '2 liters', 'milk', '0', 'Female', '2019-04-01', '2019-04-15', '2019-04-15', 1),
(0, 17, 'cow, buffelow', 'grains,grass', '2 liters per day', 'milk', '0', 'Female', '2019-04-01', '2019-04-15', '2019-04-15', 1),
(0, 18, 'cow, buffelow', 'grains,grass', '2 liters per day', 'milk', '0', 'Female', '2019-04-01', '2019-04-15', '2019-04-15', 1),
(0, 19, 'Cow', 'grain', '2', 'milk', '0', 'Male', '2019-04-09', '2019-04-15', '2019-04-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `c_id` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `expert` varchar(20) NOT NULL,
  `certificate` varchar(100) NOT NULL,
  `Isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`c_id`, `eid`, `expert`, `certificate`, `Isactive`, `doi`, `dou`) VALUES
(1, 1, 'kunal', 'images/a3.jpg', 2, '2019-01-14 00:00:00', '2019-01-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `city_tbl`
--

CREATE TABLE `city_tbl` (
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `cityname` varchar(100) NOT NULL,
  `Isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_tbl`
--

INSERT INTO `city_tbl` (`city_id`, `state_id`, `cityname`, `Isactive`, `doi`, `dou`) VALUES
(1, 1, 'Ahmedabad', 1, '2019-05-01 00:00:00', '2019-05-01 00:00:00'),
(2, 1, 'Gandhinagar', 1, '2019-05-01 00:00:00', '2019-05-01 00:00:00'),
(3, 1, 'Rajkot', 1, '2019-05-01 00:00:00', '2019-05-01 00:00:00'),
(10, 1, 'Panchmahal', 1, '2019-05-01 00:00:00', '2019-05-01 00:00:00'),
(11, 1, 'Vadodara', 1, '2019-05-01 00:00:00', '2019-05-01 00:00:00'),
(12, 1, 'Bhavnagar', 1, '2019-05-01 00:00:00', '2019-05-01 00:00:00'),
(13, 1, 'Junagadh', 1, '2019-05-01 00:00:00', '2019-05-01 00:00:00'),
(14, 1, 'Mahisagar', 1, '2019-05-01 00:00:00', '2019-05-01 00:00:00'),
(15, 1, 'Anand', 1, '2019-05-01 00:00:00', '2019-05-01 00:00:00'),
(16, 1, 'Charotar', 1, '2019-05-01 00:00:00', '2019-05-01 00:00:00'),
(17, 1, 'Dang', 1, '2019-05-01 00:00:00', '2019-05-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `cid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `eid` int(11) NOT NULL,
  `efirstname` varchar(100) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `reply` varchar(1000) NOT NULL,
  `Isactive` int(11) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`cid`, `id`, `firstname`, `eid`, `efirstname`, `comment`, `reply`, `Isactive`, `doi`, `dou`) VALUES
(1, 3, '', 2, '', 'YOu have greate knowledge about farming', 'Thank you', 2, '2016-01-14', '2016-01-22'),
(2, 4, 'kajal', 2, 'shdkjd', 'Thanks for your suggestion', 'your welcome', 1, '2016-01-14', '2016-01-22'),
(3, 3, 'kajal', 1, 'jjjf', 'hello', 'hello', 2, '2016-01-14', '2016-01-22');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `con_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `msg` varchar(200) NOT NULL,
  `Isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_id`, `id`, `name`, `email`, `sub`, `msg`, `Isactive`, `doi`, `dou`) VALUES
(1, 25, 'janvi', 'janvi@gmail.com', 'abc', 'hello world', 1, '2019-04-03 00:00:00', '2019-04-03 00:00:00'),
(2, 25, 'janvi', 'janvi@gmail.com', 'abc', 'hello world', 1, '2019-04-03 00:00:00', '2019-04-03 00:00:00'),
(3, 25, 'janvi', 'janvi@gmail.com', 'abc', 'hello world', 1, '2019-04-03 00:00:00', '2019-04-03 00:00:00'),
(4, 22, 'karan', 'thakorkaran111@gmail.com', 'xyz', 'Get In Touch Together ', 1, '2019-04-03 00:00:00', '2019-04-03 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `crop_cat`
--

CREATE TABLE `crop_cat` (
  `crop_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `crop_name` varchar(500) NOT NULL,
  `fertilizer` varchar(500) NOT NULL,
  `type of soil` varchar(500) NOT NULL,
  `totalturnover` int(11) NOT NULL,
  `water_tech` varchar(500) NOT NULL,
  `watertime` varchar(100) NOT NULL,
  `mobileno` int(15) NOT NULL,
  `Isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crop_cat`
--

INSERT INTO `crop_cat` (`crop_id`, `user_id`, `crop_name`, `fertilizer`, `type of soil`, `totalturnover`, `water_tech`, `watertime`, `mobileno`, `Isactive`, `doi`, `dou`) VALUES
(49, 0, 'jlkj', 'jljl', 'Red and Yellow Soils', 22, 'Laterite Soils', 'jll', 1234567890, 1, '2019-04-01 00:00:00', '2019-04-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `exmedia`
--

CREATE TABLE `exmedia` (
  `exm_id` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `video` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `Isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exmedia`
--

INSERT INTO `exmedia` (`exm_id`, `eid`, `photo`, `video`, `title`, `description`, `Isactive`, `doi`, `dou`) VALUES
(1, 3, 'images/gallry4-8.png', '', 'crop', 'its very special', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 'images/home-page.jpg', '', 'Hello', 'Hello', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, 'images/abc.jpg', '', 'farm', 'farm', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 2, 'images/fi2.jpg', '', 'crop', 'nice', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 7, 'images/Untitled-19.jpg', '', 'World Soil Day', 'Attended at kuttuck World Soil Day 2018', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 7, 'images/Untitled-1-4.jpg', '', 'Hey', 'ICAR-NRRI developed farm implements for rice mechanization. If you want to get more information about this mechanization Click on this link -> www.http://icar-nrri.in', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `expert_tbl`
--

CREATE TABLE `expert_tbl` (
  `eid` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `profile_pic` varchar(200) NOT NULL,
  `certi` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `specialization` varchar(10) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `experience` varchar(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `state` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `security` varchar(100) NOT NULL,
  `Isactive` int(11) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL,
  `usertype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expert_tbl`
--

INSERT INTO `expert_tbl` (`eid`, `firstname`, `lastname`, `profile_pic`, `certi`, `dob`, `gender`, `specialization`, `qualification`, `university`, `experience`, `email`, `password`, `mobileno`, `state`, `city`, `security`, `Isactive`, `doi`, `dou`, `usertype`) VALUES
(1, 'Nimo', 'Nakul', 'images/a3.jpg', 'images/MSc Agri Degree Certificate.jpg', '1972-02-17', 'Female', 'Animal', 'BSC with Agriculture', 'ABC univercity', '8 yea', 'nimo@gmail.com', 'rakesh', '6669998887', 'Maharashtra', 'Mumbai', '', 1, '2019-04-04', '2019-04-04', 2),
(2, 'Deepak', 'Pental', 'images/Deepak-Pental.jpg', 'images/MSc Agri Degree Certificate.jpg', '1972-02-17', 'male', 'Crop', 'BBA', 'Parul zunud', '4 yrs', 'deepak@gmail.com', 'rakesh', '6669998887', 'Gujrat', 'Rajkot', '', 1, '2019-04-10', '2019-04-10', 2),
(3, 'Himanshu', 'Rathod', 'images/a3.jpg', 'images/MSc Agri Degree Certificate.jpg', '1972-02-17', '', 'Crop', 'HHG', 'Ars university', '5 yrs', 'himanshu@gmail.com', 'himanshu', '5454545454', 'Maharashtra', 'Mumbai', '', 1, '2019-04-10', '2019-04-10', 2),
(4, 'Atul', 'Patel', 'IMG-20190501-WA0007.jpg', 'images/MSc Agri Degree Certificate.jpg', '1975-01-16', '', 'Animal', 'BSC Animalfarming', 'Parul university', '7 yrs', 'atul11@gmail.com', 'atul', '4747474747', 'Gujrat', 'Ahmedabad', '', 1, '2019-04-10', '2019-04-10', 2),
(6, 'Rakesh', 'Yadav', 'images/IMG-20190501-WA0006.jpg', 'images/MSc Agri Degree Certificate.jpg', '1972-02-17', '', 'Crop', 'MSC Agriculture Economy', 'Agro University', '9 yrs', 'rakesh@gmail.com', 'rakesh', '6669998887', 'Gujrat', 'Mumbai', '', 1, '2019-04-15', '2019-04-15', 2),
(8, 'Rahul', 'Jadav', 'images/a1.jpg', 'images/MSc Agri Degree Certificate.jpg', '1978-06-13', '', 'Animal', 'MSC Animal Husbandry', 'National Institute Of Farming', '3 yea', 'rahul@gmail.com', 'rahul', '8888877777', 'Gujrat', 'Rajkot', '', 2, '2019-05-02', '2019-05-02', 2);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `feedback` varchar(1000) NOT NULL,
  `rating` int(20) NOT NULL,
  `eid` int(11) NOT NULL,
  `Isactive` int(11) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `id`, `firstname`, `email`, `feedback`, `rating`, `eid`, `Isactive`, `doi`, `dou`) VALUES
(3, 2, 'aastha', 'a@gmail.com', 'your tip was so helpful', 0, 1, 1, '2019-03-25', '2019-03-26'),
(6, 22, 'karan', 'thakorkaran111@gmail.com', 'Thank you Maam, Your Suggestion is Very Help full.', 0, 1, 1, '2019-04-03', '2019-04-03'),
(7, 25, 'janvi', 'janvi@gmail.com', 'Great Expert, Very excellent Guidance. ', 0, 2, 1, '2019-04-03', '2019-04-03'),
(8, 37, 'atulbhai', 'atul@gmail.com', 'Very Knowledgeable Expert , give us very needful information. ', 0, 37, 1, '2019-04-21', '2019-04-21'),
(9, 37, 'atulbhai', 'atul@gmail.com', 'very good', 5, 37, 1, '2019-04-21', '2019-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `iid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `inquiry` varchar(1000) NOT NULL,
  `Isactive` int(11) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `med_id` int(11) NOT NULL,
  `photos` varchar(400) NOT NULL,
  `videos` varchar(400) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL,
  `Isactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`med_id`, `photos`, `videos`, `doi`, `dou`, `Isactive`) VALUES
(16, 'images/Cuba-629x420.jpg', '', '2019-04-10', '2019-04-10', 1),
(19, 'images/wv.mp4', '', '2019-04-10', '2019-04-10', 2),
(21, 'images/ev.mp4', '', '2019-04-10', '2019-04-10', 2),
(22, 'images/abc.jpg', '', '2019-04-10', '2019-04-10', 1),
(24, 'images/corn1.jpg', '', '2019-04-16', '2019-04-16', 1),
(27, 'images/12.jpg', '', '2019-04-16', '2019-04-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nuser_tbl`
--

CREATE TABLE `nuser_tbl` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nuser_tbl`
--

INSERT INTO `nuser_tbl` (`id`, `firstname`, `email`, `password`) VALUES
(2, 'aastha', 'a@gmail.com', '1234'),
(3, 'gf', 'hjb', 'gghh'),
(4, 'gf', 'hjb', 'gghh'),
(5, 'gf', 'hjb', 'gghh'),
(6, 'gf', 'hjb', 'gghh'),
(7, 'gf', 'hjb', 'gghh');

-- --------------------------------------------------------

--
-- Table structure for table `ques_tbl`
--

CREATE TABLE `ques_tbl` (
  `qid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `media` varchar(200) NOT NULL,
  `question` varchar(500) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL,
  `Isactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques_tbl`
--

INSERT INTO `ques_tbl` (`qid`, `id`, `eid`, `media`, `question`, `doi`, `dou`, `Isactive`) VALUES
(1, 3, 1, '', 'abccdddd', '2019-03-05', '2019-03-06', 1),
(8, 32, 2, 'Images/gallry2.png', '				      						good', '2019-04-02', '2019-04-02', 1),
(9, 3, 2, 'Images/gallry3-2.png', '				      						heya', '2019-04-02', '2019-04-02', 1),
(10, 32, 2, 'Images/gallry2.png', '				      						good', '2019-04-02', '2019-04-02', 1),
(11, 3, 1, 'images/blog1.jpg', '				      						kkhgyuguy', '2019-04-03', '2019-04-03', 1),
(12, 47, 2, 'images/blog2.png', 'Which Crop is Currently used	', '2019-04-15', '2019-04-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `security_que`
--

CREATE TABLE `security_que` (
  `sid` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `Isactive` int(11) NOT NULL,
  `DOI` date NOT NULL,
  `DOU` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state_tbl`
--

CREATE TABLE `state_tbl` (
  `state_id` int(11) NOT NULL,
  `statename` varchar(100) NOT NULL,
  `Isactive` int(11) NOT NULL,
  `DOI` datetime NOT NULL,
  `DOU` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_tbl`
--

INSERT INTO `state_tbl` (`state_id`, `statename`, `Isactive`, `DOI`, `DOU`) VALUES
(1, 'Gujarat', 1, '2019-05-01 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `sid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `qid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `expertname` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `suggestion` varchar(900) NOT NULL,
  `Isactive` int(11) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`sid`, `id`, `firstname`, `qid`, `eid`, `expertname`, `image`, `suggestion`, `Isactive`, `doi`, `dou`) VALUES
(1, 1, '', 2, 2, '', '', 'jwfjkwfnkwnfwknfnwnwfkwnfwknfwkfnwkfnwkfnwkfnkwnwnfkfnwkjfnkjfkj', 1, '2019-01-14', '2019-01-22'),
(2, 3, 'abc', 1, 1, 'ass', '', 'skjhfkjshfkjsfs', 1, '0000-00-00', '0000-00-00'),
(3, 3, 'abc', 3, 1, 'ass', '', 'hii', 1, '2011-11-11', '2011-11-11'),
(4, 3, 'thakor karan', 0, 3, '', '', 'Your soil is perfect', 1, '2019-04-03', '2019-04-03'),
(5, 22, 'thakor karan', 0, 3, '', '', 'Your soil is perfect', 1, '2019-04-03', '2019-04-03'),
(6, 32, 'karan', 9, 1, 'Kunal', 'images/gallry3-2.png', 'hiiii', 1, '2019-04-05', '2019-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `cid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobileno` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `Isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL,
  `usertype` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `security_que` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `firstname`, `lastname`, `profile_pic`, `dob`, `email`, `cid`, `aid`, `category`, `password`, `mobileno`, `gender`, `address`, `Isactive`, `doi`, `dou`, `usertype`, `city`, `security_que`) VALUES
(1, 'Rayjibhai', 'Bawadia', 'images/IMG-20190501-WA0003.jpg', '1977-03-31', '0', 0, 0, 'Crop', 'rayji', '9099930981', 'Male', 'gondal,jetpur,rajkot', 1, '2019-04-12 00:00:00', '2019-04-12 00:00:00', 0, 0, ''),
(2, 'Mukeshbhai', 'Chaudasia', 'images/1-indian-rural-farmer-man-standing-farm-showing-cell-phone-KXDC9K.jpg', '1980-08-04', 'mukesh@gmail.com', 0, 0, 'Crop', 'mukesh', '9099930999', 'Male', 'gujurat,rajkot,kasan', 1, '2019-04-12 00:00:00', '2019-04-12 00:00:00', 0, 0, ''),
(3, 'Kartik ', 'Aryan', 'images/IMG-20190501-WA0003.jpg', '1980-01-29', 'kartik@gmail.com', 0, 0, 'Crop', 'kartik', '8888899999', 'Male', 'Iscon road, Ishwariya, Rajkot', 1, '2019-04-14 00:00:00', '2019-04-14 00:00:00', 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal_cat`
--
ALTER TABLE `animal_cat`
  ADD PRIMARY KEY (`animal_id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `city_tbl`
--
ALTER TABLE `city_tbl`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `crop_cat`
--
ALTER TABLE `crop_cat`
  ADD PRIMARY KEY (`crop_id`),
  ADD UNIQUE KEY `crop_id` (`crop_id`),
  ADD UNIQUE KEY `crop_id_2` (`crop_id`,`crop_name`,`fertilizer`,`type of soil`,`totalturnover`,`water_tech`,`watertime`,`Isactive`,`doi`,`dou`),
  ADD UNIQUE KEY `crop_id_3` (`crop_id`,`crop_name`,`fertilizer`,`type of soil`,`totalturnover`,`water_tech`,`watertime`,`Isactive`,`doi`,`dou`);

--
-- Indexes for table `exmedia`
--
ALTER TABLE `exmedia`
  ADD PRIMARY KEY (`exm_id`);

--
-- Indexes for table `expert_tbl`
--
ALTER TABLE `expert_tbl`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`med_id`);

--
-- Indexes for table `nuser_tbl`
--
ALTER TABLE `nuser_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_tbl`
--
ALTER TABLE `ques_tbl`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `security_que`
--
ALTER TABLE `security_que`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `state_tbl`
--
ALTER TABLE `state_tbl`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animal_cat`
--
ALTER TABLE `animal_cat`
  MODIFY `animal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `city_tbl`
--
ALTER TABLE `city_tbl`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `crop_cat`
--
ALTER TABLE `crop_cat`
  MODIFY `crop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `exmedia`
--
ALTER TABLE `exmedia`
  MODIFY `exm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `expert_tbl`
--
ALTER TABLE `expert_tbl`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `med_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `nuser_tbl`
--
ALTER TABLE `nuser_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ques_tbl`
--
ALTER TABLE `ques_tbl`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `security_que`
--
ALTER TABLE `security_que`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `state_tbl`
--
ALTER TABLE `state_tbl`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
