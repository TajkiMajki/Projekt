-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Sty 2022, 21:17
-- Wersja serwera: 10.4.18-MariaDB
-- Wersja PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `cargaragedb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `customer`
--

CREATE TABLE `customer` (
  `name` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `customer`
--

INSERT INTO `customer` (`name`, `password`, `email`, `address`, `phone`) VALUES
('asd', '7815696ecbf1c96e6894b779456d330e', 'asd@asd.asd', 'asdassd', 123123123),
('qwe', '7815696ecbf1c96e6894b779456d330e', 'df@sdf.com', 'dfsdf', 123123123),
('Jan', '11603dcbcfdd6af7d3038770957533bd', 'janek@gmail.com', 'Poznań', 123112232);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orders`
--

CREATE TABLE `orders` (
  `email` varchar(255) NOT NULL,
  `ord_date` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `ord_time` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `order_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `orders`
--

INSERT INTO `orders` (`email`, `ord_date`, `code`, `quantity`, `ord_time`, `total`, `order_id`) VALUES
('df@sdf.com', '2022-01-23', '2', '2', '22:32', '7', 2),
('df@sdf.com', '2022-01-23', '1', '1', '22:32', '2', 3),
('df@sdf.com', '2022-01-23', '1', '1', '22:33', '2', 4),
('df@sdf.com', '2022-01-23', '1', '1', '22:33', '2', 5),
('df@sdf.com', '2022-01-23', '2', '1', '22:33', '3.5', 6),
('df@sdf.com', '2022-01-23', '1', '1', '22:33', '2', 7),
('asd@asd.asd', '2022-01-23', '1', '2', '23:13', '4', 8),
('df@sdf.com', '2022-01-24', '2', '1', '18:22', '3.5', 9),
('df@sdf.com', '2022-01-25', '1', '1', '15:34', '2', 10),
('df@sdf.com', '2022-01-25', '2', '5', '15:34', '17.5', 11),
('df@sdf.com', '2022-01-25', '1', '1', '15:37', '2', 12),
('df@sdf.com', '2022-01-25', '1', '1', '16:35', '2', 13),
('df@sdf.com', '2022-01-25', '2', '2', '16:35', '7', 14),
('df@sdf.com', '2022-01-25', '1', '1', '19:09', '2', 15),
('janek@gmail.com', '2022-01-25', '1', '1', '20:10', '2', 16),
('df@sdf.com', '2022-01-25', '1', '1', '21:15', '2', 17),
('df@sdf.com', '2022-01-25', '3', '1', '21:15', '1462.99', 18);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `shop`
--

CREATE TABLE `shop` (
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `descrip` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `shop`
--

INSERT INTO `shop` (`name`, `code`, `price`, `descrip`, `id`) VALUES
('5266-CM - 1965-69 Mustang; Dual Exhaust Hanger Rear', '1', '2', 'Reproduction of the original rear dual exhaust hanger for tailpipe to insulator installed on 1965-69 Mustangs with 289 and dual exhaust, GT models. Manufactured to factory specifications offering an authentic appearance and fit.', '1'),
('MD4529 - 1966-71 Hemi Exhaust Manifolds Without Heat Riser', '2', '1009.99', 'Replacement exhaust manifold for all 1966-71 Hemi models. Features correct casting numbers, choke control system, and the correct textured finish.', '2'),
('H550869 - Holley Sniper EFI Quadraet Self-Tuning Fuel Injection Conversion Kit', '3', '1462.99', 'The Sniper EFI Rochester Quadrajet™ (Q-Jet) system retains the same great features as the 4150 Sniper EFI version such as; four 100lb/hr Injectors, built in timing control, a 3.5\" full color touchscreen and much more!', '3'),
('GYF7015R - F70/15 Goodyear 2/2 Polyglas Tire with Custom Wide Tread and.350\" Redline', '4', '301.99', 'Specifications:\r\nTread width: 6.34\r\nInflated section width: 8.40\"\r\nOuter diameter: 27.09\"\r\nRolling circumference: 85.11\"\r\nLoad capacity: 1500 @ 32 psi\r\nRecommended rim width: 6.0\" - 8.0\"', '4'),
('223133 - 1986-97 Small Block Chevrolet (Externally Balanced) B&M 153 Tooth Flexplate', '5', '154.99', 'Key Features:\r\nSFI spec 29.1 approved\r\nNHRA/IHRA legal\r\nSFIspec 29.1 certification sticker included\r\nIdeal for street applications to extreme duty racing and high RPM use (above 6,000 RPM)\r\nDual bolt patterns to accommodate Powerglide, TH350, TH400 and 70', '5'),
('BX20077A - 1993-97 F-Body with LT1, TH400 BMR Torque Arm Relocation Crossmember with Red Powdercoat Finish', '6', '259.99', 'Applicatio ns:\r\n1993-97 Camaro with LT1 and TH400 transmission\r\n1993-97 Firebird with LT1 and TH400 transmission', '6');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `visits`
--

CREATE TABLE `visits` (
  `res_date` varchar(255) NOT NULL,
  `car_quantity` varchar(255) NOT NULL,
  `res_time` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `vip_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `visits`
--

INSERT INTO `visits` (`res_date`, `car_quantity`, `res_time`, `email`, `vip_id`) VALUES
('2022-01-27', '2', '16:00', 'df@sdf.com', 1),
('2022-01-26', '2', '17:12', 'df@sdf.com', 2),
('2022-01-28', '2', '13:38', 'df@sdf.com', 3),
('2022-01-27', '1', '08:00', 'janek@gmail.com', 4);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `customer`
--
ALTER TABLE `customer`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeksy dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indeksy dla tabeli `shop`
--
ALTER TABLE `shop`
  ADD UNIQUE KEY `code` (`code`);

--
-- Indeksy dla tabeli `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`vip_id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT dla tabeli `visits`
--
ALTER TABLE `visits`
  MODIFY `vip_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
