-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 10, 2019 at 08:36 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `concesionario`
--

-- --------------------------------------------------------

--
-- Table structure for table `coches`
--

CREATE TABLE `coches` (
  `matricula` varchar(7) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `tipo` varchar(1) NOT NULL,
  `motor` varchar(1) NOT NULL,
  `color` varchar(10) NOT NULL,
  `cilindrada` int(4) NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `extras` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coches`
--
ALTER TABLE `coches`
  ADD PRIMARY KEY (`matricula`);