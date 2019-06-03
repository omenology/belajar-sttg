-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 03, 2019 at 07:01 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar_sttg`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `nidn` varchar(30) NOT NULL,
  `npm` varchar(7) NOT NULL,
  `kode_mk` varchar(10) NOT NULL,
  `kelas` varchar(1) NOT NULL,
  `absen` int(2) NOT NULL,
  `status` varchar(30) DEFAULT NULL,
  `absen_ke` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`nidn`, `npm`, `kode_mk`, `kelas`, `absen`, `status`, `absen_ke`) VALUES
('123', '1606001', 'kdmk1', 'C', 0, 'done', 1),
('123', '1606001', 'kdmk1', 'C', 0, 'done', 2),
('123', '1606001', 'kdmk1', 'C', 0, 'done', 3),
('123', '1606001', 'kdmk1', 'C', 0, 'done', 4),
('123', '1606001', 'kdmk1', 'C', 1, 'open', 5),
('123', '1606001', 'kdmk1', 'C', 0, 'belum', 6),
('123', '1606001', 'kdmk1', 'C', 0, 'belum', 7),
('123', '1606001', 'kdmk1', 'C', 0, 'belum', 8),
('123', '1606001', 'kdmk1', 'C', 0, 'belum', 9),
('123', '1606001', 'kdmk1', 'C', 0, 'belum', 10),
('123', '1606001', 'kdmk1', 'C', 0, 'belum', 11),
('123', '1606001', 'kdmk1', 'C', 0, 'belum', 12),
('123', '1606001', 'kdmk1', 'C', 0, 'belum', 13),
('123', '1606001', 'kdmk1', 'C', 0, 'belum', 14),
('123', '1606001', 'kdmk3', 'C', 0, 'belum', 1),
('123', '1606001', 'kdmk3', 'C', 0, 'belum', 2),
('123', '1606001', 'kdmk3', 'C', 0, 'belum', 3),
('123', '1606001', 'kdmk3', 'C', 0, 'belum', 4),
('123', '1606001', 'kdmk3', 'C', 0, 'belum', 5),
('123', '1606001', 'kdmk3', 'C', 0, 'belum', 6),
('123', '1606001', 'kdmk3', 'C', 0, 'belum', 7),
('123', '1606001', 'kdmk3', 'C', 0, 'belum', 8),
('123', '1606001', 'kdmk3', 'C', 0, 'belum', 9),
('123', '1606001', 'kdmk3', 'C', 0, 'belum', 10),
('123', '1606001', 'kdmk3', 'C', 0, 'belum', 11),
('123', '1606001', 'kdmk3', 'C', 0, 'belum', 12),
('123', '1606001', 'kdmk3', 'C', 0, 'belum', 13),
('123', '1606001', 'kdmk3', 'C', 0, 'belum', 14),
('123', '1606001', 'kdmk2', 'B', 1, 'open', 1),
('123', '1606001', 'kdmk2', 'B', 0, 'belum', 2),
('123', '1606001', 'kdmk2', 'B', 0, 'belum', 3),
('123', '1606001', 'kdmk2', 'B', 0, 'belum', 4),
('123', '1606001', 'kdmk2', 'B', 0, 'belum', 5),
('123', '1606001', 'kdmk2', 'B', 0, 'belum', 6),
('123', '1606001', 'kdmk2', 'B', 0, 'belum', 7),
('123', '1606001', 'kdmk2', 'B', 0, 'belum', 8),
('123', '1606001', 'kdmk2', 'B', 0, 'belum', 9),
('123', '1606001', 'kdmk2', 'B', 0, 'belum', 10),
('123', '1606001', 'kdmk2', 'B', 0, 'belum', 11),
('123', '1606001', 'kdmk2', 'B', 0, 'belum', 12),
('123', '1606001', 'kdmk2', 'B', 0, 'belum', 13),
('123', '1606001', 'kdmk2', 'B', 0, 'belum', 14),
('123', '1606002', 'kdmk1', 'C', 0, 'done', 1),
('123', '1606002', 'kdmk1', 'C', 0, 'done', 2),
('123', '1606002', 'kdmk1', 'C', 0, 'done', 3),
('123', '1606002', 'kdmk1', 'C', 0, 'done', 4),
('123', '1606002', 'kdmk1', 'C', 0, 'open', 5),
('123', '1606002', 'kdmk1', 'C', 0, 'belum', 6),
('123', '1606002', 'kdmk1', 'C', 0, 'belum', 7),
('123', '1606002', 'kdmk1', 'C', 0, 'belum', 8),
('123', '1606002', 'kdmk1', 'C', 0, 'belum', 9),
('123', '1606002', 'kdmk1', 'C', 0, 'belum', 10),
('123', '1606002', 'kdmk1', 'C', 0, 'belum', 11),
('123', '1606002', 'kdmk1', 'C', 0, 'belum', 12),
('123', '1606002', 'kdmk1', 'C', 0, 'belum', 13),
('123', '1606002', 'kdmk1', 'C', 0, 'belum', 14),
('123', '1606002', 'kdmk2', 'B', 0, 'open', 1),
('123', '1606002', 'kdmk2', 'B', 0, 'belum', 2),
('123', '1606002', 'kdmk2', 'B', 0, 'belum', 3),
('123', '1606002', 'kdmk2', 'B', 0, 'belum', 4),
('123', '1606002', 'kdmk2', 'B', 0, 'belum', 5),
('123', '1606002', 'kdmk2', 'B', 0, 'belum', 6),
('123', '1606002', 'kdmk2', 'B', 0, 'belum', 7),
('123', '1606002', 'kdmk2', 'B', 0, 'belum', 8),
('123', '1606002', 'kdmk2', 'B', 0, 'belum', 9),
('123', '1606002', 'kdmk2', 'B', 0, 'belum', 10),
('123', '1606002', 'kdmk2', 'B', 0, 'belum', 11),
('123', '1606002', 'kdmk2', 'B', 0, 'belum', 12),
('123', '1606002', 'kdmk2', 'B', 0, 'belum', 13),
('123', '1606002', 'kdmk2', 'B', 0, 'belum', 14),
('123', '1606002', 'kdmk3', 'C', 0, 'belum', 1),
('123', '1606002', 'kdmk3', 'C', 0, 'belum', 2),
('123', '1606002', 'kdmk3', 'C', 0, 'belum', 3),
('123', '1606002', 'kdmk3', 'C', 0, 'belum', 4),
('123', '1606002', 'kdmk3', 'C', 0, 'belum', 5),
('123', '1606002', 'kdmk3', 'C', 0, 'belum', 6),
('123', '1606002', 'kdmk3', 'C', 0, 'belum', 7),
('123', '1606002', 'kdmk3', 'C', 0, 'belum', 8),
('123', '1606002', 'kdmk3', 'C', 0, 'belum', 9),
('123', '1606002', 'kdmk3', 'C', 0, 'belum', 10),
('123', '1606002', 'kdmk3', 'C', 0, 'belum', 11),
('123', '1606002', 'kdmk3', 'C', 0, 'belum', 12),
('123', '1606002', 'kdmk3', 'C', 0, 'belum', 13),
('123', '1606002', 'kdmk3', 'C', 0, 'belum', 14),
('123', '1606003', 'kdmk1', 'C', 0, 'done', 1),
('123', '1606003', 'kdmk1', 'C', 0, 'done', 2),
('123', '1606003', 'kdmk1', 'C', 0, 'done', 3),
('123', '1606003', 'kdmk1', 'C', 0, 'done', 4),
('123', '1606003', 'kdmk1', 'C', 0, 'open', 5),
('123', '1606003', 'kdmk1', 'C', 0, 'belum', 6),
('123', '1606003', 'kdmk1', 'C', 0, 'belum', 7),
('123', '1606003', 'kdmk1', 'C', 0, 'belum', 8),
('123', '1606003', 'kdmk1', 'C', 0, 'belum', 9),
('123', '1606003', 'kdmk1', 'C', 0, 'belum', 10),
('123', '1606003', 'kdmk1', 'C', 0, 'belum', 11),
('123', '1606003', 'kdmk1', 'C', 0, 'belum', 12),
('123', '1606003', 'kdmk1', 'C', 0, 'belum', 13),
('123', '1606003', 'kdmk1', 'C', 0, 'belum', 14),
('123', '1606003', 'kdmk2', 'B', 0, 'open', 1),
('123', '1606003', 'kdmk2', 'B', 0, 'belum', 2),
('123', '1606003', 'kdmk2', 'B', 0, 'belum', 3),
('123', '1606003', 'kdmk2', 'B', 0, 'belum', 4),
('123', '1606003', 'kdmk2', 'B', 0, 'belum', 5),
('123', '1606003', 'kdmk2', 'B', 0, 'belum', 6),
('123', '1606003', 'kdmk2', 'B', 0, 'belum', 7),
('123', '1606003', 'kdmk2', 'B', 0, 'belum', 8),
('123', '1606003', 'kdmk2', 'B', 0, 'belum', 9),
('123', '1606003', 'kdmk2', 'B', 0, 'belum', 10),
('123', '1606003', 'kdmk2', 'B', 0, 'belum', 11),
('123', '1606003', 'kdmk2', 'B', 0, 'belum', 12),
('123', '1606003', 'kdmk2', 'B', 0, 'belum', 13),
('123', '1606003', 'kdmk2', 'B', 0, 'belum', 14),
('123', '1606003', 'kdmk3', 'C', 0, 'belum', 1),
('123', '1606003', 'kdmk3', 'C', 0, 'belum', 2),
('123', '1606003', 'kdmk3', 'C', 0, 'belum', 3),
('123', '1606003', 'kdmk3', 'C', 0, 'belum', 4),
('123', '1606003', 'kdmk3', 'C', 0, 'belum', 5),
('123', '1606003', 'kdmk3', 'C', 0, 'belum', 6),
('123', '1606003', 'kdmk3', 'C', 0, 'belum', 7),
('123', '1606003', 'kdmk3', 'C', 0, 'belum', 8),
('123', '1606003', 'kdmk3', 'C', 0, 'belum', 9),
('123', '1606003', 'kdmk3', 'C', 0, 'belum', 10),
('123', '1606003', 'kdmk3', 'C', 0, 'belum', 11),
('123', '1606003', 'kdmk3', 'C', 0, 'belum', 12),
('123', '1606003', 'kdmk3', 'C', 0, 'belum', 13),
('123', '1606003', 'kdmk3', 'C', 0, 'belum', 14),
('123', '1606003', 'kdmk4', 'A', 0, 'belum', 1),
('123', '1606003', 'kdmk4', 'A', 0, 'belum', 2),
('123', '1606003', 'kdmk4', 'A', 0, 'belum', 3),
('123', '1606003', 'kdmk4', 'A', 0, 'belum', 4),
('123', '1606003', 'kdmk4', 'A', 0, 'belum', 5),
('123', '1606003', 'kdmk4', 'A', 0, 'belum', 6),
('123', '1606003', 'kdmk4', 'A', 0, 'belum', 7),
('123', '1606003', 'kdmk4', 'A', 0, 'belum', 8),
('123', '1606003', 'kdmk4', 'A', 0, 'belum', 9),
('123', '1606003', 'kdmk4', 'A', 0, 'belum', 10),
('123', '1606003', 'kdmk4', 'A', 0, 'belum', 11),
('123', '1606003', 'kdmk4', 'A', 0, 'belum', 12),
('123', '1606003', 'kdmk4', 'A', 0, 'belum', 13),
('123', '1606003', 'kdmk4', 'A', 0, 'belum', 14),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 1),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 2),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 3),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 4),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 5),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 6),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 7),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 8),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 9),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 10),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 11),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 12),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 13),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 14),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 1),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 2),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 3),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 4),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 5),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 6),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 7),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 8),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 9),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 10),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 11),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 12),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 13),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 14),
('124', '1606002', 'kdmk5', 'D', 0, 'belum', 1),
('124', '1606002', 'kdmk5', 'D', 0, 'belum', 2),
('124', '1606002', 'kdmk5', 'D', 0, 'belum', 3),
('124', '1606002', 'kdmk5', 'D', 0, 'belum', 4),
('124', '1606002', 'kdmk5', 'D', 0, 'belum', 5),
('124', '1606002', 'kdmk5', 'D', 0, 'belum', 6),
('124', '1606002', 'kdmk5', 'D', 0, 'belum', 7),
('124', '1606002', 'kdmk5', 'D', 0, 'belum', 8),
('124', '1606002', 'kdmk5', 'D', 0, 'belum', 9),
('124', '1606002', 'kdmk5', 'D', 0, 'belum', 10),
('124', '1606002', 'kdmk5', 'D', 0, 'belum', 11),
('124', '1606002', 'kdmk5', 'D', 0, 'belum', 12),
('124', '1606002', 'kdmk5', 'D', 0, 'belum', 13),
('124', '1606002', 'kdmk5', 'D', 0, 'belum', 14),
('124', '1606002', 'kdmk6', 'D', 0, 'belum', 1),
('124', '1606002', 'kdmk6', 'D', 0, 'belum', 2),
('124', '1606002', 'kdmk6', 'D', 0, 'belum', 3),
('124', '1606002', 'kdmk6', 'D', 0, 'belum', 4),
('124', '1606002', 'kdmk6', 'D', 0, 'belum', 5),
('124', '1606002', 'kdmk6', 'D', 0, 'belum', 6),
('124', '1606002', 'kdmk6', 'D', 0, 'belum', 7),
('124', '1606002', 'kdmk6', 'D', 0, 'belum', 8),
('124', '1606002', 'kdmk6', 'D', 0, 'belum', 9),
('124', '1606002', 'kdmk6', 'D', 0, 'belum', 10),
('124', '1606002', 'kdmk6', 'D', 0, 'belum', 11),
('124', '1606002', 'kdmk6', 'D', 0, 'belum', 12),
('124', '1606002', 'kdmk6', 'D', 0, 'belum', 13),
('124', '1606002', 'kdmk6', 'D', 0, 'belum', 14),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 1),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 2),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 3),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 4),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 5),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 6),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 7),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 8),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 9),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 10),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 11),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 12),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 13),
('124', '1606003', 'kdmk5', 'A', 0, 'belum', 14),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 1),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 2),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 3),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 4),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 5),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 6),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 7),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 8),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 9),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 10),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 11),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 12),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 13),
('124', '1606003', 'kdmk6', 'A', 0, 'belum', 14),
('125', '1606001', 'kdmk7', 'E', 0, 'belum', 1),
('125', '1606001', 'kdmk7', 'E', 0, 'belum', 2),
('125', '1606001', 'kdmk7', 'E', 0, 'belum', 3),
('125', '1606001', 'kdmk7', 'E', 0, 'belum', 4),
('125', '1606001', 'kdmk7', 'E', 0, 'belum', 5),
('125', '1606001', 'kdmk7', 'E', 0, 'belum', 6),
('125', '1606001', 'kdmk7', 'E', 0, 'belum', 7),
('125', '1606001', 'kdmk7', 'E', 0, 'belum', 8),
('125', '1606001', 'kdmk7', 'E', 0, 'belum', 9),
('125', '1606001', 'kdmk7', 'E', 0, 'belum', 10),
('125', '1606001', 'kdmk7', 'E', 0, 'belum', 11),
('125', '1606001', 'kdmk7', 'E', 0, 'belum', 12),
('125', '1606001', 'kdmk7', 'E', 0, 'belum', 13),
('125', '1606001', 'kdmk7', 'E', 0, 'belum', 14),
('125', '1606002', 'kdmk7', 'E', 0, 'belum', 1),
('125', '1606002', 'kdmk7', 'E', 0, 'belum', 2),
('125', '1606002', 'kdmk7', 'E', 0, 'belum', 3),
('125', '1606002', 'kdmk7', 'E', 0, 'belum', 4),
('125', '1606002', 'kdmk7', 'E', 0, 'belum', 5),
('125', '1606002', 'kdmk7', 'E', 0, 'belum', 6),
('125', '1606002', 'kdmk7', 'E', 0, 'belum', 7),
('125', '1606002', 'kdmk7', 'E', 0, 'belum', 8),
('125', '1606002', 'kdmk7', 'E', 0, 'belum', 9),
('125', '1606002', 'kdmk7', 'E', 0, 'belum', 10),
('125', '1606002', 'kdmk7', 'E', 0, 'belum', 11),
('125', '1606002', 'kdmk7', 'E', 0, 'belum', 12),
('125', '1606002', 'kdmk7', 'E', 0, 'belum', 13),
('125', '1606002', 'kdmk7', 'E', 0, 'belum', 14),
('125', '1606003', 'kdmk7', 'E', 0, 'belum', 1),
('125', '1606003', 'kdmk7', 'E', 0, 'belum', 2),
('125', '1606003', 'kdmk7', 'E', 0, 'belum', 3),
('125', '1606003', 'kdmk7', 'E', 0, 'belum', 4),
('125', '1606003', 'kdmk7', 'E', 0, 'belum', 5),
('125', '1606003', 'kdmk7', 'E', 0, 'belum', 6),
('125', '1606003', 'kdmk7', 'E', 0, 'belum', 7),
('125', '1606003', 'kdmk7', 'E', 0, 'belum', 8),
('125', '1606003', 'kdmk7', 'E', 0, 'belum', 9),
('125', '1606003', 'kdmk7', 'E', 0, 'belum', 10),
('125', '1606003', 'kdmk7', 'E', 0, 'belum', 11),
('125', '1606003', 'kdmk7', 'E', 0, 'belum', 12),
('125', '1606003', 'kdmk7', 'E', 0, 'belum', 13),
('125', '1606003', 'kdmk7', 'E', 0, 'belum', 14);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nidn` varchar(30) NOT NULL,
  `nama_dsn` varchar(60) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` varchar(15) DEFAULT NULL,
  `password` varchar(25) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nidn`, `nama_dsn`, `alamat`, `email`, `hp`, `password`, `foto`) VALUES
('123', 'dosen 1', 'alamat dosen 1', 'dosen1@sttgarut.ac.id', '123', 'password dosen 1', 'default.jpg'),
('124', 'dosen 2', 'alamat dosen 2', 'dosen2@sttgarut.ac.id', '124', 'password dosen 2', 'default.jpg'),
('125', 'dosen 3', 'alamat dosen 3', 'dosen3@sttgarut.ac.id', '125', 'password dosen 3', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_dosen`
--

CREATE TABLE `jadwal_dosen` (
  `kode_mk` varchar(10) NOT NULL,
  `kelas` varchar(1) NOT NULL,
  `nidn` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_dosen`
--

INSERT INTO `jadwal_dosen` (`kode_mk`, `kelas`, `nidn`) VALUES
('kdmk1', 'C', '123'),
('kdmk2', 'B', '123'),
('kdmk3', 'C', '123'),
('kdmk4', 'A', '123'),
('kdmk5', 'A', '124'),
('kdmk5', 'D', '124'),
('kdmk6', 'A', '124'),
('kdmk6', 'D', '124'),
('kdmk7', 'E', '125');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_mahasiswa`
--

CREATE TABLE `jadwal_mahasiswa` (
  `npm` varchar(7) NOT NULL,
  `kode_mk` varchar(10) NOT NULL,
  `kelas` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_mahasiswa`
--

INSERT INTO `jadwal_mahasiswa` (`npm`, `kode_mk`, `kelas`) VALUES
('1606001', 'kdmk1', 'C'),
('1606001', 'kdmk2', 'B'),
('1606001', 'kdmk3', 'C'),
('1606002', 'kdmk1', 'C'),
('1606002', 'kdmk2', 'B'),
('1606002', 'kdmk3', 'C'),
('1606003', 'kdmk1', 'C'),
('1606003', 'kdmk2', 'B'),
('1606003', 'kdmk3', 'C'),
('1606003', 'kdmk4', 'A'),
('1606001', 'kdmk5', 'D'),
('1606001', 'kdmk6', 'D'),
('1606002', 'kdmk5', 'D'),
('1606002', 'kdmk6', 'D'),
('1606003', 'kdmk5', 'A'),
('1606003', 'kdmk6', 'A'),
('1606001', 'kdmk7', 'E'),
('1606002', 'kdmk7', 'E'),
('1606003', 'kdmk7', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_mata_kuliah`
--

CREATE TABLE `jadwal_mata_kuliah` (
  `kode_mk` varchar(10) NOT NULL,
  `kelas` varchar(1) NOT NULL,
  `ruangan` varchar(7) NOT NULL,
  `jam` time NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') NOT NULL,
  `absen` int(100) NOT NULL DEFAULT '10',
  `tugas` int(100) NOT NULL DEFAULT '25',
  `uts` int(100) NOT NULL DEFAULT '30',
  `uas` int(100) NOT NULL DEFAULT '35',
  `d` int(100) NOT NULL DEFAULT '40',
  `c` int(100) NOT NULL DEFAULT '50',
  `b` int(100) NOT NULL DEFAULT '60',
  `a` int(100) NOT NULL DEFAULT '80'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_mata_kuliah`
--

INSERT INTO `jadwal_mata_kuliah` (`kode_mk`, `kelas`, `ruangan`, `jam`, `hari`, `absen`, `tugas`, `uts`, `uas`, `d`, `c`, `b`, `a`) VALUES
('kdmk1', 'C', 'A-201', '10:00:00', 'Rabu', 15, 20, 35, 30, 20, 30, 40, 50),
('kdmk2', 'B', 'A-203', '10:00:00', 'Selasa', 10, 25, 30, 35, 40, 50, 60, 80),
('kdmk3', 'C', 'A-204', '11:00:00', 'Selasa', 10, 25, 30, 35, 40, 50, 60, 80),
('kdmk4', 'A', 'A-201', '12:00:00', 'Sabtu', 10, 25, 30, 35, 40, 50, 60, 80),
('kdmk5', 'D', 'A-202', '11:00:00', 'Selasa', 10, 25, 30, 35, 40, 50, 60, 80),
('kdmk6', 'D', 'A-205', '12:00:00', 'Sabtu', 10, 25, 30, 35, 40, 50, 60, 80),
('kdmk5', 'A', 'A-206', '10:00:00', 'Kamis', 10, 25, 30, 35, 40, 50, 60, 80),
('kdmk6', 'A', 'A-207', '11:00:00', 'Jumat', 10, 25, 30, 35, 40, 50, 60, 80),
('kdmk7', 'E', 'A-201', '11:00:00', 'Kamis', 10, 25, 30, 35, 40, 50, 60, 80);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` varchar(7) NOT NULL,
  `nama_mhs` varchar(60) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `nama_mhs`, `alamat`, `tanggal_lahir`, `jenis_kelamin`, `email`, `password`, `foto`) VALUES
('1606001', 'mahasiswa 1', 'alamat mahasiswa 1', '1998-12-05', 'L', 'mahasiswa1@sttgarut.ac.id', 'password mahasiswa 1', 'default.jpg'),
('1606002', 'mahasiswa 2', 'alamat mahasiswa 2', '1998-07-12', 'P', 'mahasiswa2@sttgarut.ac.id', 'password mahasiswa 2', 'default.jpg'),
('1606003', 'mahasiswa 3', 'alamat mahasiswa 3', '1998-12-05', 'L', 'mahasiswa3@sttgarut.ac.id', 'password mahasiswa 3', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `kode` varchar(10) NOT NULL,
  `nama_mk` varchar(60) NOT NULL,
  `bobot` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`kode`, `nama_mk`, `bobot`) VALUES
('kdmk1', 'Database', '3'),
('kdmk2', 'Analisis', '2'),
('kdmk3', 'Desain', '3'),
('kdmk4', 'File & Akses', '2'),
('kdmk5', 'Bahasa Pemrograman', '2'),
('kdmk6', 'Organisasi Komputer', '2'),
('kdmk7', 'Bahasa Rakitan', '3');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `kode_mk` varchar(10) NOT NULL,
  `kelas` varchar(1) NOT NULL,
  `file_materi` varchar(60) NOT NULL,
  `materi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`kode_mk`, `kelas`, `file_materi`, `materi`) VALUES
('kdmk1', 'c', 'mk 1 dsn 1 materi 1', NULL),
('kdmk1', 'C', 'mk 1 dsn 1 materi 2', NULL),
('kdmk1', 'C', 'mk 1 dsn 1 materi 3', NULL),
('kdmk1', 'C', 'mk 1 dsn 1 materi 4', NULL),
('kdmk2', 'B', 'mk 2 dsn 1 materi 1', NULL),
('kdmk2', 'B', 'mk 2 dsn 1 materi 2', NULL),
('kdmk2', 'B', 'mk 2 dsn 1 materi 3', NULL),
('kdmk3', 'C', 'mk 3 dsn 1 materi 1', NULL),
('kdmk3', 'C', 'mk 3 dsn 1 materi 2', NULL),
('kdmk3', 'C', 'mk 3 dsn 1 materi 3', NULL),
('kdmk4', 'A', 'mk 4 dsn 1 materi 1', NULL),
('kdmk4', 'A', 'mk 4 dsn 1 materi 2', NULL),
('kdmk5', 'D', 'mk 5 dsn 2 materi 1', NULL),
('kdmk5', 'D', 'mk 5 dsn 2 materi 2', NULL),
('kdmk6', 'D', 'mk 6 dsn 2 materi 1', NULL),
('kdmk6', 'D', 'mk 6 dsn 2 materi 2', NULL),
('kdmk5', 'A', 'mk 5 dsn 2 materi 1', NULL),
('kdmk5', 'A', 'mk 5 dsn 2 materi 2', NULL),
('kdmk6', 'A', 'mk 6 dsn 2 materi 1', NULL),
('kdmk6', 'A', 'mk 6 dsn 2 materi 2', NULL),
('kdmk7', 'E', 'mk 7 dsn 3 materi 1', NULL),
('kdmk7', 'E', 'mk 7 dsn 3 materi 2', NULL),
('kdmk1', 'C', '5ca8a3ad669b2.pdf', NULL),
('kdmk1', 'C', '5ca8a41f60a11.doc', NULL),
('kdmk2', 'B', '5cb1c88febbf5.pdf', 'Software Quality Factor.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `npm` varchar(7) NOT NULL,
  `kode_mk` varchar(10) NOT NULL,
  `nilai_rata_tugas` int(3) NOT NULL,
  `absen` int(3) NOT NULL,
  `uts` int(3) NOT NULL,
  `uas` int(3) NOT NULL,
  `akhir` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`npm`, `kode_mk`, `nilai_rata_tugas`, `absen`, `uts`, `uas`, `akhir`) VALUES
('1606001', 'kdmk1', 81, 90, 68, 78, 'B'),
('1606001', 'kdmk2', 84, 90, 73, 73, 'A'),
('1606001', 'kdmk3', 87, 70, 68, 88, 'B'),
('1606001', 'kdmk5', 88, 80, 85, 84, 'A'),
('1606001', 'kdmk6', 90, 100, 83, 84, 'A'),
('1606001', 'kdmk7', 89, 100, 73, 82, 'A'),
('1606002', 'kdmk1', 86, 100, 82, 73, 'A'),
('1606002', 'kdmk2', 82, 60, 74, 80, 'B'),
('1606002', 'kdmk3', 85, 90, 72, 74, 'A'),
('1606002', 'kdmk5', 81, 100, 83, 82, 'A'),
('1606002', 'kdmk6', 83, 90, 72, 81, 'A'),
('1606002', 'kdmk7', 85, 80, 50, 61, 'C'),
('1606003', 'kdmk1', 88, 90, 77, 73, 'A'),
('1606003', 'kdmk2', 84, 70, 75, 72, 'B'),
('1606003', 'kdmk3', 83, 80, 71, 72, 'B'),
('1606003', 'kdmk4', 86, 100, 65, 76, 'A'),
('1606003', 'kdmk5', 85, 90, 82, 73, 'A'),
('1606003', 'kdmk6', 87, 80, 73, 74, 'B'),
('1606003', 'kdmk7', 82, 100, 75, 80, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_tugas`
--

CREATE TABLE `nilai_tugas` (
  `npm` varchar(7) NOT NULL,
  `kode_mk` varchar(10) NOT NULL,
  `no_tugas` int(11) NOT NULL,
  `nilai_tugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_tugas`
--

INSERT INTO `nilai_tugas` (`npm`, `kode_mk`, `no_tugas`, `nilai_tugas`) VALUES
('1606001', 'kdmk1', 1, 80),
('1606001', 'kdmk1', 2, 81),
('1606001', 'kdmk1', 3, 82),
('1606001', 'kdmk2', 1, 83),
('1606001', 'kdmk2', 2, 84),
('1606001', 'kdmk2', 3, 85),
('1606001', 'kdmk3', 1, 86),
('1606001', 'kdmk3', 2, 87),
('1606001', 'kdmk3', 3, 88),
('1606002', 'kdmk1', 1, 89),
('1606002', 'kdmk1', 2, 90),
('1606002', 'kdmk1', 3, 80),
('1606002', 'kdmk2', 1, 81),
('1606002', 'kdmk2', 2, 82),
('1606002', 'kdmk2', 3, 83),
('1606002', 'kdmk3', 1, 84),
('1606002', 'kdmk3', 2, 85),
('1606002', 'kdmk3', 3, 86),
('1606003', 'kdmk1', 1, 87),
('1606003', 'kdmk1', 2, 88),
('1606003', 'kdmk1', 3, 89),
('1606003', 'kdmk2', 1, 90),
('1606003', 'kdmk2', 2, 80),
('1606003', 'kdmk2', 3, 81),
('1606003', 'kdmk3', 1, 82),
('1606003', 'kdmk3', 2, 83),
('1606003', 'kdmk3', 3, 84),
('1606003', 'kdmk4', 1, 85),
('1606003', 'kdmk4', 2, 86),
('1606001', 'kdmk5', 1, 87),
('1606001', 'kdmk5', 2, 88),
('1606001', 'kdmk6', 1, 89),
('1606001', 'kdmk6', 2, 90),
('1606002', 'kdmk5', 1, 80),
('1606002', 'kdmk5', 2, 81),
('1606002', 'kdmk6', 1, 82),
('1606002', 'kdmk6', 2, 83),
('1606003', 'kdmk5', 1, 84),
('1606003', 'kdmk5', 2, 85),
('1606003', 'kdmk6', 1, 86),
('1606003', 'kdmk6', 2, 87),
('1606001', 'kdmk7', 1, 88),
('1606001', 'kdmk7', 2, 89),
('1606002', 'kdmk7', 1, 90),
('1606002', 'kdmk7', 2, 80),
('1606003', 'kdmk7', 1, 81),
('1606003', 'kdmk7', 2, 82);

-- --------------------------------------------------------

--
-- Table structure for table `pindah_kelas`
--

CREATE TABLE `pindah_kelas` (
  `kode_mk` varchar(10) NOT NULL,
  `kelas_asal` varchar(1) NOT NULL,
  `kelas_tujuan` varchar(1) NOT NULL,
  `npm` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `kode_mk` varchar(10) NOT NULL,
  `kelas` varchar(1) NOT NULL,
  `no_tugas` int(11) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `time_post` datetime NOT NULL,
  `time_limit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`kode_mk`, `kelas`, `no_tugas`, `judul`, `deskripsi`, `time_post`, `time_limit`) VALUES
('kdmk1', 'C', 1, 'tgs_DB1', 'erd', '2019-03-12 12:00:00', '2019-03-19 12:00:00'),
('kdmk1', 'C', 2, 'tgs_DB2', 'normali', '2019-03-17 12:01:00', '2019-03-24 12:01:00'),
('kdmk1', 'C', 3, 'tgs_DB3', 'anomali', '2019-03-24 12:02:00', '2019-03-31 12:02:00'),
('kdmk2', 'B', 1, 'tgs_anal1', 'analis web', '2019-03-11 12:00:00', '2019-03-18 12:00:00'),
('kdmk2', 'B', 2, 'tgs_anal2', 'analis sys', '2019-03-16 12:00:00', '2019-03-23 12:00:00'),
('kdmk2', 'B', 3, 'tgs_anal3', 'analis kebutuhan', '2019-03-23 12:00:00', '2019-03-30 12:00:00'),
('kdmk3', 'C', 1, 'tgs_desa1', 'desain andro', '2019-03-11 12:00:00', '2019-03-18 12:00:00'),
('kdmk3', 'C', 2, 'tgs_desa2', 'desain web', '2019-03-16 12:00:00', '2019-03-23 12:00:00'),
('kdmk3', 'C', 3, 'tgs_desa3', 'desain VB', '2019-03-23 12:00:00', '2019-03-30 12:00:00'),
('kdmk4', 'A', 1, 'tgs_file1', 'resume buku1', '2019-03-20 13:00:00', '2019-03-27 13:00:00'),
('kdmk4', 'A', 2, 'tgs_file2', 'resume buku2', '2019-03-27 13:00:00', '2019-03-31 13:00:00'),
('kdmk5', 'D', 1, 'tgs_bhs1', 'orientasi objek', '2019-03-11 11:00:00', '2019-03-18 11:00:00'),
('kdmk5', 'D', 2, 'tgs_bhs2', 'orientasi terstruktur', '2019-03-18 11:00:00', '2019-03-25 11:00:00'),
('kdmk6', 'D', 1, 'tgs_ork1', 'fetch', '2019-03-20 12:00:00', '2019-03-27 12:00:00'),
('kdmk6', 'D', 2, 'tgs_ork2', 'decod', '2019-03-27 12:00:00', '2019-03-31 12:00:00'),
('kdmk5', 'A', 1, 'tgs_bhs1', 'orientasi objek', '2019-03-14 11:00:00', '2019-03-21 11:00:00'),
('kdmk5', 'A', 2, 'tgs_bhs2', 'orientasi terstruktur', '2019-03-21 11:00:00', '2019-03-28 11:00:00'),
('kdmk6', 'A', 1, 'tgs_ork1', 'fetch', '2019-03-23 12:00:00', '2019-03-30 12:00:00'),
('kdmk6', 'A', 2, 'tgs_ork2', 'decod', '2019-03-30 12:00:00', '2019-03-31 12:00:00'),
('kdmk7', 'E', 1, 'tgs_rak1', 'flip', '2019-03-14 11:00:00', '2019-03-21 11:00:00'),
('kdmk7', 'E', 2, 'tgs_rak2', 'flop', '2019-03-14 11:00:00', '2019-03-21 11:00:00'),
('kdmk1', 'C', 1, 'tes judul', 'tes deskripsi', '2019-04-13 00:00:00', '2019-04-14 00:00:00'),
('kdmk2', 'B', 4, 'testes', 'tes deskripsi tes', '2019-04-13 00:00:00', '2019-04-14 00:00:00'),
('kdmk5', 'D', 3, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('kdmk5', 'D', 4, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('kdmk1', 'C', 2, 'tesno', 'alskdjalsjdlkasjdklajkdljdslkajdkjxsszslkhxjkdjsjk', '2019-05-22 00:00:00', '2019-05-23 00:00:00'),
('kdmk3', 'C', 4, 'aya', 'tugas', '2019-06-03 00:00:00', '2019-06-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tugas_mahasiswa`
--

CREATE TABLE `tugas_mahasiswa` (
  `npm` varchar(7) NOT NULL,
  `kode_mk` varchar(10) NOT NULL,
  `no_tugas` int(11) NOT NULL,
  `file` varchar(60) NOT NULL,
  `file_tugas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas_mahasiswa`
--

INSERT INTO `tugas_mahasiswa` (`npm`, `kode_mk`, `no_tugas`, `file`, `file_tugas`) VALUES
('1606001', 'kdmk1', 1, 'tgs db 1 file 1 mhs 1', ''),
('1606001', 'kdmk1', 1, 'tgs db 1 file 2 mhs 1', ''),
('1606001', 'kdmk1', 2, 'tgs db 2 file 1 mhs 1', ''),
('1606001', 'kdmk1', 3, 'tgs db 3 file 1 mhs 1', ''),
('1606001', 'kdmk2', 1, 'tgs an 1 file 1 mhs 1', ''),
('1606001', 'kdmk2', 2, 'tgs an 2 file 1 mhs 1', ''),
('1606001', 'kdmk2', 3, 'tgs an 3 file 1 mhs 1', ''),
('1606001', 'kdmk3', 1, 'tgs ds 1 file 1 mhs 1', ''),
('1606001', 'kdmk3', 2, 'tgs ds 2 file 1 mhs 1', ''),
('1606001', 'kdmk3', 3, 'tgs ds 3 file 1 mhs 1', ''),
('1606002', 'kdmk1', 1, 'tgs db 1 file 1 mhs 2', ''),
('1606002', 'kdmk1', 1, 'tgs db 1 file 2 mhs 2', ''),
('1606002', 'kdmk1', 2, 'tgs db 2 file 1 mhs 2', ''),
('1606002', 'kdmk1', 3, 'tgs db 3 file 1 mhs 2', ''),
('1606002', 'kdmk2', 1, 'tgs an 1 file 1 mhs 2', ''),
('1606002', 'kdmk2', 2, 'tgs an 2 file 1 mhs 2', ''),
('1606002', 'kdmk2', 3, 'tgs an 3 file 1 mhs 2', ''),
('1606002', 'kdmk3', 1, 'tgs ds 1 file 1 mhs 2', ''),
('1606002', 'kdmk3', 2, 'tgs ds 2 file 1 mhs 2', ''),
('1606002', 'kdmk3', 3, 'tgs ds 3 file 1 mhs 2', ''),
('1606003', 'kdmk1', 1, 'tgs db 1 file 1 mhs 3', ''),
('1606003', 'kdmk1', 1, 'tgs db 1 file 2 mhs 3', ''),
('1606003', 'kdmk1', 2, 'tgs db 2 file 1 mhs 3', ''),
('1606003', 'kdmk1', 3, 'tgs db 3 file 1 mhs 3', ''),
('1606003', 'kdmk2', 1, 'tgs an 1 file 1 mhs 3', ''),
('1606003', 'kdmk2', 3, 'tgs an 2 file 1 mhs 3', ''),
('1606003', 'kdmk2', 3, 'tgs an 3 file 1 mhs 3', ''),
('1606003', 'kdmk3', 1, 'tgs ds 1 file 1 mhs 3', ''),
('1606003', 'kdmk3', 2, 'tgs ds 2 file 1 mhs 3', ''),
('1606003', 'kdmk3', 3, 'tgs ds 3 file 1 mhs 3', ''),
('1606003', 'kdmk4', 1, 'tgs fa 1 mhs 3', ''),
('1606003', 'kdmk4', 2, 'tgs fa 2 mhs 3', ''),
('1606001', 'kdmk5', 1, 'tgs bp 1 mhs 1', ''),
('1606001', 'kdmk5', 2, 'tgs bp 2 mhs 1', ''),
('1606001', 'kdmk6', 1, 'tgs or 1 mhs 1', ''),
('1606001', 'kdmk6', 2, 'tgs or 2 mhs 1', ''),
('1606002', 'kdmk5', 1, 'tgs bp 1 mhs 2', ''),
('1606002', 'kdmk5', 2, 'tgs bp 2 mhs 2', ''),
('1606002', 'kdmk6', 1, 'tgs or 1 mhs 2', ''),
('1606002', 'kdmk6', 2, 'tgs or 2 mhs 2', ''),
('1606003', 'kdmk5', 1, 'tgs bp 1 mhs 3', ''),
('1606003', 'kdmk5', 2, 'tgs bp 2 mhs 3', ''),
('1606003', 'kdmk6', 1, 'tgs or 1 mhs 3', ''),
('1606003', 'kdmk6', 2, 'tgs or 2 mhs 3', ''),
('1606001', 'kdmk7', 1, 'tgs br 1 mhs 1', ''),
('1606001', 'kdmk7', 2, 'tgs br 2 mhs 1', ''),
('1606002', 'kdmk7', 1, 'tgs br 1 mhs 2', ''),
('1606002', 'kdmk7', 2, 'tgs br 2 mhs 2', ''),
('1606003', 'kdmk7', 1, 'tgs br 1 mhs 3', ''),
('1606003', 'kdmk7', 2, 'tgs br 2 mhs 3', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD KEY `nidn` (`nidn`),
  ADD KEY `npm` (`npm`),
  ADD KEY `kode` (`kode_mk`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nidn`);

--
-- Indexes for table `jadwal_dosen`
--
ALTER TABLE `jadwal_dosen`
  ADD KEY `kode_mk` (`kode_mk`),
  ADD KEY `nidn` (`nidn`);

--
-- Indexes for table `jadwal_mahasiswa`
--
ALTER TABLE `jadwal_mahasiswa`
  ADD KEY `npm` (`npm`),
  ADD KEY `kode_mk` (`kode_mk`);

--
-- Indexes for table `jadwal_mata_kuliah`
--
ALTER TABLE `jadwal_mata_kuliah`
  ADD KEY `kode_mk` (`kode_mk`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD KEY `kode_mk` (`kode_mk`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD KEY `npm` (`npm`),
  ADD KEY `kode_mk` (`kode_mk`);

--
-- Indexes for table `nilai_tugas`
--
ALTER TABLE `nilai_tugas`
  ADD KEY `npm` (`npm`),
  ADD KEY `kode_mk` (`kode_mk`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD KEY `kode_mk` (`kode_mk`);

--
-- Indexes for table `tugas_mahasiswa`
--
ALTER TABLE `tugas_mahasiswa`
  ADD KEY `npm` (`npm`),
  ADD KEY `kode_mk` (`kode_mk`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal_dosen`
--
ALTER TABLE `jadwal_dosen`
  ADD CONSTRAINT `jadwal_dosen_ibfk_1` FOREIGN KEY (`kode_mk`) REFERENCES `mata_kuliah` (`kode`),
  ADD CONSTRAINT `jadwal_dosen_ibfk_2` FOREIGN KEY (`nidn`) REFERENCES `dosen` (`nidn`);

--
-- Constraints for table `jadwal_mahasiswa`
--
ALTER TABLE `jadwal_mahasiswa`
  ADD CONSTRAINT `jadwal_mahasiswa_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `mahasiswa` (`npm`),
  ADD CONSTRAINT `jadwal_mahasiswa_ibfk_2` FOREIGN KEY (`kode_mk`) REFERENCES `mata_kuliah` (`kode`);

--
-- Constraints for table `jadwal_mata_kuliah`
--
ALTER TABLE `jadwal_mata_kuliah`
  ADD CONSTRAINT `jadwal_mata_kuliah_ibfk_1` FOREIGN KEY (`kode_mk`) REFERENCES `mata_kuliah` (`kode`);

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`kode_mk`) REFERENCES `mata_kuliah` (`kode`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `mahasiswa` (`npm`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`kode_mk`) REFERENCES `mata_kuliah` (`kode`);

--
-- Constraints for table `nilai_tugas`
--
ALTER TABLE `nilai_tugas`
  ADD CONSTRAINT `nilai_tugas_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `mahasiswa` (`npm`),
  ADD CONSTRAINT `nilai_tugas_ibfk_2` FOREIGN KEY (`npm`) REFERENCES `mahasiswa` (`npm`),
  ADD CONSTRAINT `nilai_tugas_ibfk_3` FOREIGN KEY (`kode_mk`) REFERENCES `mata_kuliah` (`kode`);

--
-- Constraints for table `tugas`
--
ALTER TABLE `tugas`
  ADD CONSTRAINT `tugas_ibfk_1` FOREIGN KEY (`kode_mk`) REFERENCES `mata_kuliah` (`kode`);

--
-- Constraints for table `tugas_mahasiswa`
--
ALTER TABLE `tugas_mahasiswa`
  ADD CONSTRAINT `tugas_mahasiswa_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `mahasiswa` (`npm`),
  ADD CONSTRAINT `tugas_mahasiswa_ibfk_2` FOREIGN KEY (`kode_mk`) REFERENCES `mata_kuliah` (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
