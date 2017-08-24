-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2017 at 05:34 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repeatproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `username` varchar(25) NOT NULL,
  `title` varchar(160) NOT NULL,
  `text` varchar(4000) NOT NULL,
  `visibility` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`username`, `title`, `text`, `visibility`) VALUES
('Msmith', 'Panthers', 'Smith 2', 1),
('Msmith', 'Saints', 'Smith 1', 0),
('Jgrant', 'Charger', 'Grant 2', 1),
('Jgrant', 'Mustang', 'Grant 1', 0),
('Rstark', 'Ford', 'Stark 2', 1),
('Rstark', 'Mercedes', 'Stark 1', 0),
('Starly', 'Windows', 'Tarly 2', 1),
('Starly', 'Mac', 'Tarly 1', 0),
('Mjoseph', 'Xbox', 'Joseph 2', 1),
('Mjoseph', 'Playstation', 'Joseph 1', 0),
('Ldavis', 'French', 'Davis 2', 1),
('Ldavis', 'Germans', 'Davis 1', 0),
('Fgrant', 'Dad', 'Gleeson 2', 1),
('Fgrant', 'Mom', 'Gleeson 1', 0),
('Lmccaw', 'Silver', 'McCaw 2', 1),
('Lmccaw', 'Gold', 'McCaw 1', 0),
('Sdent', 'Golf', 'Dent 2', 1),
('Sdent', 'Tennis', 'Dent 1', 0),
('Scooter', 'Soccer', 'Cooter 2', 1),
('Scooter', 'Football', 'Cooter 1', 0),
('Mlenon', 'Out', 'Lenon 2', 1),
('Mlenon', 'Inside', 'Lenon 1', 0),
('Pkent', 'Down', 'Kent 2', 1),
('Pkent', 'Up', 'Kent 1', 0),
('Dkiely', 'Chile', 'Kiely 2', 1),
('Dkiely', 'America', 'Kiely 1', 0),
('Swright', 'Wishlist', 'Wright 2', 1),
('Swright', 'Denim', 'Wright 1', 0),
('Grandles', 'Denver', 'Randles 2', 1),
('Grandles', 'NewYork', 'Randles 1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(25) NOT NULL,
  `firstname` varchar(16) NOT NULL,
  `lastname` varchar(26) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `firstname`, `lastname`, `email`, `password`) VALUES
('Dkiely', 'David', 'Kiely', 'dkiely@gmail.com', 'Apple123'),
('Grandles', 'Gavin', 'Randles', 'grandles@gmail.com', 'Apple123'),
('Swright', 'Sean', 'Wright', 'swright@gmail.com', 'Apple123'),
('Pkent', 'Patrick', 'Kent', 'pkent@gmail.com', 'Apple123'),
('Mlenon', 'Mike', 'Lenon', 'mlenon@gmail.com', 'Apple123'),
('Scooter', 'Shane', 'Cooter', 'scooter@gmail.com', 'Apple123'),
('Sdent', 'Sarah', 'Dent', 'sdent@gmail.com', 'Apple123'),
('Lmccaw', 'Lucy', 'McCaw', 'lmccaw@gmail.com', 'Apple123'),
('Fgrant', 'Finn', 'Gleeson', 'fgrant@gmail.com', 'Apple123'),
('Ldavis', 'Larry', 'Davis', 'ldavis@gmail.com', 'Apple123'),
('Mjoseph', 'Morgan', 'Joseph', 'mjoseph@gmail.com', 'Apple123'),
('Starly', 'Sam', 'Tarly', 'starly@gmail.com', 'Apple123'),
('Rstark', 'Robert', 'Stark', 'rstark@gmail.com', 'Apple123'),
('Jgrant', 'John', 'Grant', 'jgrant@gmail.com', 'Apple123'),
('Msmith', 'Mary', 'Smith', 'msmith@gmail.com', 'Apple123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`title`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
