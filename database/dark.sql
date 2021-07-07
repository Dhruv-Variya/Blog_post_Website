-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 07, 2021 at 01:41 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dark`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `post_author` varchar(200) NOT NULL,
  `post_date` varchar(50) NOT NULL,
  `author` int(11) NOT NULL,
  `post_img` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `description`, `post_author`, `post_date`, `author`, `post_img`) VALUES
(57, 'IPL 2021: Delhi Capitals skipper Shreyas Iyer unsure about captaincy says it\'s in the hands of the owner.', 'Delhi Capitals skipper Shreyas Iyer is unsure about his captaincy and but believes he may be fit to make a return in the IPL 2021 when the tournament resumes. Iyer missed out the first-half of the tournament because of shoulder injury. delhi Capitals (DC) skipper Shreyas Iyer is unsure about captaincy and says it is in the owners’ hands to decide. However, Iyer is optimistic that he may be fit to play in the Indian Premier League (IPL) when it resumes.', 'Dhruv', '06 Jul, 2021', 43, '1625533426-post.png'),
(58, 'Jammu IAF base attack: RDX found in IEDs dropped by drones, reveals probe', 'A preliminary investigation by the forensics department found two IEDs that were dropped on the IAF station in Jammu included a cocktail of RDX and Nitrate.\r\nDays after drones dropped bombs at the Indian Air Force (IAF) station in Jammu, forensic experts have reportedly said a cocktail of explosive material, including RDX and Nitrate, was used in the two IEDs.\r\n\r\n\r\nSources told India Today that a report by the Forensic Science Laboratory (FSL) has pointed to the use of RDX and Nitrate in the improvised explosive devices dropped at the air base in Jammu. RDX is not available in India. It is sourced from Pakistan. This evidence can help nail Pakistan’s role in the attack.\r\n“One IED was bigger in size. It was aimed at infrastructural damage. The other was aimed at personnel with more splinters and ball-bearings,” the sources said.', 'Pratham', '06 Jul, 2021', 44, '1625533856-post1.png'),
(59, 'Italy knocks out Belgium in Euro 2020 thriller to advance to semifinals', 'Italy narrowly overcame Belgium in one of the most thrilling games of Euro 2020 to book a date with Spain in the semifinals.\r\n\r\nAll three goals in the Azzurri\'s 2-1 came in the first half, with brilliant strikes from Nicolo Barella and Lorenzo Insigne opening up a two-goal lead.\r\nHowever, the deficit was halved just moments later after Romelu Lukaku converted from the penalty spot following a clumsy foul from Giovanni Di Lorenzo on teenager Jeremy Doku, who was a standout performer among some of the Belgium\'s more established stars.\r\nLukaku had two great opportunities to equalize in the second half, but some last-gasp Italian defending prevented the Inter Milan forward from getting a clean look at goal.\r\nItaly played with its back to the wall for much of the game, but Belgium\'s lack of cutting edge up front meant that its veteran central defensive pairing of Giorgio Chiellini and Leonardo Bonucci was rarely troubled.', 'Nilkanth', '06 Jul, 2021', 45, '1625534353-post2.jpg'),
(60, 'Indian cricket legend Sachin Tendulkar hospitalized after testing positive for Covid-19', 'Indian cricket legend Sachin Tendulkar says he has been hospitalized \"as a matter of abundant precaution,\" just days after testing positive for Covid-19.\r\n\r\nTendulkar announced on March 27 that he had tested positive and was experiencing \"mild symptoms\" while quarantining at home.\r\n\"Thank you for your wishes and prayers,\" the former India cricket captain, who turns 48 this month, tweeted. \"As a matter of abundant precaution under medical advice, I have been hospitalized. I hope to be back home in a few days. Take care and stay safe everyone.\r\n\"Wishing all Indians & my teammates on the 10th anniversary of our World Cup win.\"', 'John', '06 Jul, 2021', 46, '1625534606-post3.jpg'),
(61, 'COVID-19 and Fungi: A Nightmare in the Making', 'As India battles a devastating wave of COVID-19 cases, another crisis is waiting in the wings that could far outlast the pandemic—in the form of a chronic fungal disease that kills slowly and is extraordinarily difficult to treat.\r\n\r\nPreying on recovering coronavirus patients, India has seen some 30,000 cases of mucormycosis, better known as “black fungus,” in recent months.\r\n\r\nThe illnesses caused by the fungus Mucor—mucormycosis—are well known, with an overall mortality rate of ~54%.\r\n\r\nBut the scale of India’s outbreak is rare. Mucor, which can lodge deep into the sinuses or lungs, has already killed hundreds in India, and forced others to have an eye excised to remove the fungus.\r\n\r\nWhy is it sweeping India at the same time as COVID? Arturo Casadevall, a leading expert on fungi and Bloomberg Distinguished Professor in Molecular Microbiology and Immunology at the Johns Hopkins Bloomberg School of Public Health, explains why the liberal use of steroids in treating COVID-19 is a key factor, and why India’s Mucor crisis is a warning sign for the rise of fungal infections across the globe.', 'Dhruv', '06 Jul, 2021', 43, '1625534995-post4.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `full_name`, `phone_number`, `email`, `username`, `password`, `role`) VALUES
(44, 'patel pratham', '11111111111', 'pratham@gmail.com', 'pratham', '21232f297a57a5a743894a0e4a801fc3', 1),
(45, 'patel nilkanth', '22222222222', 'nilkanth@gmail.com', 'nilkanth', '21232f297a57a5a743894a0e4a801fc3', 1),
(43, 'variya dhruv ', '6355576600', 'variya@gmail.com', 'dhruv', '21232f297a57a5a743894a0e4a801fc3', 1),
(46, 'john doe', '33333333333', 'johndoe@gmail.com', 'john', 'fea087517c26fadd409bd4b9dc642555', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_id` (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
