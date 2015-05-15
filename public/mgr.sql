-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 15 Maj 2015, 19:04
-- Wersja serwera: 5.6.12-log
-- Wersja PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `mgr`
--
CREATE DATABASE IF NOT EXISTS `mgr` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mgr`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `acl`
--

CREATE TABLE IF NOT EXISTS `acl` (
  `aclId` int(11) NOT NULL AUTO_INCREMENT,
  `aclName` varchar(255) NOT NULL,
  `aclUserId` int(11) NOT NULL,
  `aclResourceId` int(11) NOT NULL,
  PRIMARY KEY (`aclId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contactId` int(11) NOT NULL AUTO_INCREMENT,
  `contactName` varchar(100) NOT NULL,
  `contactEmail` varchar(100) NOT NULL,
  `contactSubject` varchar(100) DEFAULT NULL,
  `contactPosition` varchar(100) DEFAULT NULL,
  `contactPhone` varchar(100) DEFAULT NULL,
  `contactMessage` text NOT NULL,
  `contactInsert` int(11) NOT NULL,
  `contactUpdate` int(11) NOT NULL,
  PRIMARY KEY (`contactId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=67 ;

--
-- Zrzut danych tabeli `contact`
--

INSERT INTO `contact` (`contactId`, `contactName`, `contactEmail`, `contactSubject`, `contactPosition`, `contactPhone`, `contactMessage`, `contactInsert`, `contactUpdate`) VALUES
(59, 'test', 'test@wp.pl', NULL, NULL, NULL, 'test', 1390818006, 1390818006),
(60, 'test', 'test@wp.pl', NULL, NULL, NULL, 'test', 1390818039, 1390818039),
(61, 'test', 'test@wp.pl', NULL, NULL, NULL, 'test', 1390818040, 1390818040),
(62, 'test', 'test@wp.pl', NULL, NULL, NULL, 'test', 1390818047, 1390818047),
(63, 'test', 'test@wp.pl', NULL, NULL, NULL, 'test', 1390818299, 1390818299),
(64, 'test', 'test@wp.pl', NULL, NULL, NULL, 'test', 1390818339, 1390818339),
(65, 'test', 'test@wp.pl', NULL, NULL, NULL, 'test', 1390818381, 1390818381),
(66, 'test', 'test@wp.pl', NULL, NULL, NULL, 'test', 1390818456, 1390818456);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `design`
--

CREATE TABLE IF NOT EXISTS `design` (
  `designId` int(11) NOT NULL AUTO_INCREMENT,
  `designFog` varchar(255) DEFAULT NULL,
  `designLights` text NOT NULL,
  `designPlane` text NOT NULL,
  `designUpdate` int(11) NOT NULL,
  PRIMARY KEY (`designId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `design`
--

INSERT INTO `design` (`designId`, `designFog`, `designLights`, `designPlane`, `designUpdate`) VALUES
(1, 'a:3:{s:2:"on";s:1:"1";s:5:"color";s:0:"";s:4:"blur";s:5:"0.001";}', 'a:3:{i:1;a:5:{s:4:"type";s:6:"dLight";s:6:"param1";s:1:"0";s:6:"param2";s:3:"0.5";s:6:"param3";s:1:"2";s:5:"color";s:7:"#ffffff";}i:2;a:5:{s:4:"type";s:6:"dLight";s:6:"param1";s:3:"0.1";s:6:"param2";s:1:"1";s:6:"param3";s:2:"-2";s:5:"color";s:7:"#ffffff";}i:3;a:5:{s:4:"type";s:6:"sLight";s:6:"param1";s:5:"0.053";s:6:"param2";s:6:"-0.024";s:6:"param3";s:1:"1";s:5:"color";s:7:"#fdfee7";}}', 'a:6:{s:6:"param1";s:4:"1000";s:6:"param2";s:4:"1000";s:6:"param3";s:3:"100";s:6:"param4";s:3:"100";s:5:"color";s:7:"#a8a8a8";s:9:"wireframe";s:1:"1";}', 1397162530);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `fileId` int(11) NOT NULL AUTO_INCREMENT,
  `filePath` varchar(255) NOT NULL,
  `fileName` varchar(255) NOT NULL,
  `fileWeight` varchar(255) DEFAULT NULL,
  `fileType` varchar(255) DEFAULT NULL,
  `fileInsert` int(11) NOT NULL,
  `fileOfferId` int(11) NOT NULL,
  PRIMARY KEY (`fileId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Zrzut danych tabeli `file`
--

INSERT INTO `file` (`fileId`, `filePath`, `fileName`, `fileWeight`, `fileType`, `fileInsert`, `fileOfferId`) VALUES
(21, 'upload/files/file_01_03_14_174_4.docx', 'Funkcja_rabatowania mm.docx', '552844', 'docx', 1393713862, 4),
(22, 'upload/files/file_01_03_14_731_4.doc', 'strona-tytulowa-pracy-dyplomowej.doc', '29184', 'doc', 1393714595, 4),
(23, 'upload/files/file_15_01_15_801_52.jpg', 'Troll.jpg', '38233', 'jpg', 1421351879, 52);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `infoId` int(11) NOT NULL AUTO_INCREMENT,
  `infoName` varchar(255) NOT NULL,
  `infoStreet` varchar(255) NOT NULL,
  `infoCity` varchar(255) NOT NULL,
  `infoPhone` varchar(255) NOT NULL,
  `infoCellPhone` varchar(255) NOT NULL,
  `infoEmail` varchar(255) NOT NULL,
  `infoFax` varchar(255) NOT NULL,
  `infoNip` varchar(255) NOT NULL,
  `infoRegon` varchar(255) NOT NULL,
  `infoHours` varchar(255) NOT NULL,
  `infoUpdate` int(11) NOT NULL,
  PRIMARY KEY (`infoId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `info`
--

INSERT INTO `info` (`infoId`, `infoName`, `infoStreet`, `infoCity`, `infoPhone`, `infoCellPhone`, `infoEmail`, `infoFax`, `infoNip`, `infoRegon`, `infoHours`, `infoUpdate`) VALUES
(1, 'Politechnika Krakowska', 'ul. Warszawska 24', '31-155 Kraków', '+48 (12) 628 20 00', '', 'info@pk.edu.pl', '(12) 628 20 00', '6751352760', '122493608', 'Pn - Pt  9:00 – 17:00', 1390156199);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `messageId` int(11) NOT NULL AUTO_INCREMENT,
  `messageName` varchar(255) NOT NULL,
  `messageTitle` varchar(255) NOT NULL,
  `messageEmail` varchar(255) NOT NULL,
  `messageText` text,
  `messageOfferId` int(11) NOT NULL,
  `messageInsert` int(11) NOT NULL,
  PRIMARY KEY (`messageId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `offer`
--

CREATE TABLE IF NOT EXISTS `offer` (
  `offerId` int(11) NOT NULL AUTO_INCREMENT,
  `offerTitle` varchar(255) NOT NULL,
  `offerDesc` text,
  `offerExtraInfo` text NOT NULL,
  `offerType` varchar(255) NOT NULL,
  `offerCountry` enum('pl','de') NOT NULL,
  `offerCity` varchar(255) NOT NULL,
  `offerStreet` varchar(255) NOT NULL,
  `offerNumber` varchar(255) DEFAULT NULL,
  `offerCategory` enum('automotive','office','budownictwo','gastronomia','hr_kadry','telekom','telemark','turystyka','tworzywa','energetyka','elektryka','informatyka','logistyka','media','medycyna','motoryzacja','opieka','poligrafia','produkcja','spedycja','pomocdom','default') NOT NULL,
  `offerWebPage` varchar(255) NOT NULL,
  `offerEmail` varchar(255) NOT NULL,
  `offerPhone` varchar(255) DEFAULT NULL,
  `offerVisible` tinyint(1) NOT NULL DEFAULT '1',
  `offerImage` varchar(255) DEFAULT NULL,
  `offerVideo` varchar(255) DEFAULT NULL,
  `offerSocial` text,
  `offerInsert` int(11) NOT NULL,
  PRIMARY KEY (`offerId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Zrzut danych tabeli `offer`
--

INSERT INTO `offer` (`offerId`, `offerTitle`, `offerDesc`, `offerExtraInfo`, `offerType`, `offerCountry`, `offerCity`, `offerStreet`, `offerNumber`, `offerCategory`, `offerWebPage`, `offerEmail`, `offerPhone`, `offerVisible`, `offerImage`, `offerVideo`, `offerSocial`, `offerInsert`) VALUES
(3, 'Frima 1', '<p>Opis firmy</p>', '<p>Dodatkowe informacje</p>', 'Firma 1', 'de', '30-234 Kraków', 'ul. Pszenna 23', '1', 'informatyka', 'www.spectretech.com', 'contact@spectretech.com', '+22 800-200-500', 1, 'offer_00_05_02_03_14_s26.jpg', '//www.youtube.com/embed/mXqmRAUsn9U', 'a:3:{s:8:"facebook";s:0:"";s:7:"twitter";s:0:"";s:8:"linkedin";s:0:"";}', 1381265181),
(4, 'Firma 2', '<p>Opis firmy 2</p>', '<p>Dodatkowe inforamcje Firmy 2</p>', 'Firma 2', 'pl', '30-062 Kraków', 'Krowoderskich Zuchów 21', '2', 'informatyka', 'www.firma2.com', 'company@firma2.com', '800100200', 1, NULL, '//www.youtube.com/embed/2fngvQS_PmQ', 'a:3:{s:8:"facebook";s:0:"";s:7:"twitter";s:0:"";s:8:"linkedin";s:0:"";}', 1382378268),
(5, 'Firma 3', '<p>Firma 3</p>', '<p>Firma 3</p>', 'Firma 3', 'pl', 'Warszawa', 'ul. Bratysławska', '3', 'telekom', 'firma 3', 'a@wp.pl', NULL, 1, NULL, '//www.youtube.com/embed/Qe10ExwzCqk', 'a:3:{s:8:"facebook";s:0:"";s:7:"twitter";s:0:"";s:8:"linkedin";s:0:"";}', 1394275144),
(6, 'Firma 4', '<p>Opis firmy</p>', '<p>Dodatkowe informacje</p>', 'Firma 4', 'pl', 'Wrocław', 'ul. Długa 5', '4', 'informatyka', 'www.firma4.pl', 'firma4@wp.pl', '+48 500 123 321', 1, 'offer_22_07_14_04_14_s31.jpg', '//www.youtube.com/embed/pgNwwoKDPf8', 'a:3:{s:8:"facebook";s:4:"face";s:7:"twitter";s:5:"twitt";s:8:"linkedin";s:3:"lin";}', 1397505697),
(7, 'Frima 5', '<p>Opis firmy</p>', '<p>Dodatkowe informacje</p>', 'Frima 5', 'de', '30-234 Kraków', 'ul. Pszenna 23', '5', 'informatyka', 'www.spectretech.com', 'contact@spectretech.com', '+22 800-200-500', 1, 'offer_00_05_02_03_14_s26.jpg', '//www.youtube.com/embed/mXqmRAUsn9U', 'a:3:{s:8:"facebook";s:0:"";s:7:"twitter";s:0:"";s:8:"linkedin";s:0:"";}', 1381265181),
(8, 'Frima 6', '<p>Opis firmy</p>', '<p>Dodatkowe informacje</p>', 'Firma 6', 'de', '30-234 Kraków', 'ul. Pszenna 23', '6', 'informatyka', 'www.spectretech.com', 'contact@spectretech.com', '+22 800-200-500', 1, 'offer_00_05_02_03_14_s26.jpg', '//www.youtube.com/embed/mXqmRAUsn9U', 'a:3:{s:8:"facebook";s:0:"";s:7:"twitter";s:0:"";s:8:"linkedin";s:0:"";}', 1381265181),
(9, 'Firma 7', '<p>Opis firmy 1</p>', '<p>Dodatkowe inforamcje Firmy 1</p>', 'Firma 7', 'pl', '30-062 Kraków', 'Krowoderskich Zuchów 21', '7', 'informatyka', 'www.firma1.com', 'company@firma1.com', '800100200', 1, NULL, '//www.youtube.com/embed/2fngvQS_PmQ', 'a:3:{s:8:"facebook";s:0:"";s:7:"twitter";s:0:"";s:8:"linkedin";s:0:"";}', 1382378268),
(10, 'Frima 8', '<p>Opis firmy</p>', '<p>Dodatkowe informacje</p>', 'Firma 8', 'de', '30-234 Kraków', 'ul. Pszenna 23', '8', 'informatyka', 'www.spectretech.com', 'contact@spectretech.com', '+22 800-200-500', 1, 'offer_00_05_02_03_14_s26.jpg', '//www.youtube.com/embed/mXqmRAUsn9U', 'a:3:{s:8:"facebook";s:0:"";s:7:"twitter";s:0:"";s:8:"linkedin";s:0:"";}', 1381265181),
(11, 'Frima 9', '<p>Opis firmy</p>', '<p>Dodatkowe informacje</p>', 'Firma 9', 'de', '30-234 Kraków', 'ul. Pszenna 23', '9', 'informatyka', 'www.spectretech.com', 'contact@spectretech.com', '+22 800-200-500', 1, 'offer_00_05_02_03_14_s26.jpg', '//www.youtube.com/embed/mXqmRAUsn9U', 'a:3:{s:8:"facebook";s:0:"";s:7:"twitter";s:0:"";s:8:"linkedin";s:0:"";}', 1381265181),
(12, 'Firma 10', '<p>Opis firmy 1</p>', '<p>Dodatkowe inforamcje Firmy 1</p>', 'Firma 10', 'pl', '30-062 Kraków', 'Krowoderskich Zuchów 21', '10', 'informatyka', 'www.firma1.com', 'company@firma1.com', '800100200', 1, NULL, '//www.youtube.com/embed/2fngvQS_PmQ', 'a:3:{s:8:"facebook";s:0:"";s:7:"twitter";s:0:"";s:8:"linkedin";s:0:"";}', 1382378268),
(13, 'Firma 11', '<p>Opis firmy 11</p>', '<p>Dodatkowe inforamcje Firmy 11</p>', 'Firma 11', 'pl', '30-062 Kraków', 'Krowoderskich Zuchów 21', '11', 'informatyka', 'www.firma1.com', 'company@firma1.com', '800100200', 1, 'offer_22_23_14_04_14_s40.jpg', '//www.youtube.com/embed/2fngvQS_PmQ', 'a:3:{s:8:"facebook";s:4:"face";s:7:"twitter";s:5:"twitt";s:8:"linkedin";s:8:"linkedin";}', 1382378268),
(14, 'Firma 12', 'Firma 12', 'Firma 12', 'Firma 12', 'pl', 'Kraków', 'Rynek', '12', 'informatyka', 'www.company12.com', 'company@vwalk.com', '123456789', 1, NULL, NULL, NULL, 1397937699),
(15, 'Firma 13', 'Firma 13', 'Firma 13', 'Firma 13', 'pl', 'Łódź', 'centrum', '13', 'budownictwo', 'www.company13.com', 'company13@vwalk.com', '123456789', 1, NULL, NULL, NULL, 1397939161),
(16, 'Firma 14', 'Firma 14', 'Firma 14', 'Firma 14', 'pl', 'Poznań', 'centrum', '14', 'energetyka', 'www.company14.com', 'company14@vwalk.com', '12345678', 1, NULL, NULL, NULL, 1397940372),
(17, 'Firma 15', 'Firma 15', 'Firma 15', 'Firma 15', 'pl', 'Poznań', 'centrum', '15', 'energetyka', 'www.company15.com', 'company15@vwalk.com', '12345678', 1, NULL, '//www.youtube.com/embed/HsTYbQ824Es', NULL, 1397940372),
(18, 'Firma 16', 'Firma 16', 'Firma 16', 'Firma 16', 'pl', 'Poznań', 'centrum', '16', 'energetyka', 'www.company16.com', 'company16@vwalk.com', '12345678', 1, NULL, '//www.youtube.com/embed/t7WztxTjTnM', NULL, 1397940372),
(19, 'Firma 17', 'Firma 17', 'Firma 17', 'Firma 17', 'pl', 'Poznań', 'centrum', '17', 'energetyka', 'www.company17.com', 'company17@vwalk.com', '12345678', 1, NULL, '//www.youtube.com/embed/t7WztxTjTnM', NULL, 1397940372),
(20, 'Firma 18', 'Firma 18', 'Firma 18', 'Firma 18', 'pl', 'Poznań', 'centrum', '18', 'energetyka', 'www.company18.com', 'company18@vwalk.com', '12345678', 1, NULL, '//www.youtube.com/embed/t7WztxTjTnM', NULL, 1397940372),
(21, 'Firma 19', 'Firma 19', 'Firma 19', 'Firma 19', 'pl', 'Poznań', 'centrum', '19', 'energetyka', 'www.company19.com', 'company19@vwalk.com', '12345678', 1, NULL, '//www.youtube.com/embed/t7WztxTjTnM', NULL, 1397940372),
(22, 'Firma 20', 'Firma 20', 'Firma 20', 'Firma 20', 'pl', 'Poznań', 'centrum', '20', 'informatyka', 'www.company20.com', 'company20@vwalk.com', '12345678', 1, NULL, '//www.youtube.com/embed/t7WztxTjTnM', NULL, 1397940372),
(23, 'Firma 21', 'Firma 21', 'Firma 21', 'Firma 21', 'pl', 'Poznań', 'centrum', '21', 'informatyka', 'www.company21.com', 'company21@vwalk.com', '12345678', 1, NULL, '//www.youtube.com/embed/t7WztxTjTnM', NULL, 1397940372),
(24, 'Firma 22', 'Firma 22', 'Firma 22', 'Firma 22', 'pl', 'Poznań', 'centrum', '22', 'informatyka', 'www.company22.com', 'company22@vwalk.com', '12345678', 1, NULL, '//www.youtube.com/embed/t7WztxTjTnM', NULL, 1397940372),
(25, 'Firma 23', 'Firma 23', 'Firma 23', 'Firma 23', 'pl', 'Poznań', 'centrum', '23', 'informatyka', 'www.company23.com', 'company23@vwalk.com', '12345678', 1, NULL, '//www.youtube.com/embed/t7WztxTjTnM', NULL, 1397940372),
(26, 'Firma 24', 'Firma 24', 'Firma 24', 'Firma 24', 'pl', 'Poznań', 'centrum', '24', 'informatyka', 'www.company24.com', 'company24@vwalk.com', '12345678', 1, NULL, '//www.youtube.com/embed/t7WztxTjTnM', NULL, 1397940372),
(27, 'Firma 25', 'Firma 25', 'Firma 25', 'Firma 25', 'pl', 'Poznań', 'centrum', '25', 'informatyka', 'www.company25.com', 'company25@vwalk.com', '12345678', 1, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(28, 'Firma 26', 'Firma 26', 'Firma 26', 'Firma 26', 'pl', 'Poznań', 'centrum', '26', 'informatyka', 'www.company26.com', 'company26@vwalk.com', '12345678', 1, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(29, 'Firma 27', 'Firma 27', 'Firma 27', 'Firma 27', 'pl', 'Poznań', 'centrum', '27', 'informatyka', 'www.company27.com', 'company27@vwalk.com', '12345678', 1, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(30, 'Firma 28', 'Firma 28', 'Firma 28', 'Firma 28', 'pl', 'Poznań', 'centrum', '28', 'informatyka', 'www.company28.com', 'company28@vwalk.com', '12345678', 1, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(31, 'Firma 29', 'Firma 29', 'Firma 29', 'Firma 29', 'pl', 'Poznań', 'centrum', '29', 'informatyka', 'www.company29.com', 'company29@vwalk.com', '12345678', 1, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(32, 'Firma 30', 'Firma 30', 'Firma 30', 'Firma 30', 'pl', 'Poznań', 'centrum', '30', 'informatyka', 'www.company30.com', 'company30@vwalk.com', '12345678', 1, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(33, 'Firma 31', 'Firma 31', 'Firma 31', 'Firma 31', 'pl', 'Poznań', 'centrum', '31', 'informatyka', 'www.company31.com', 'company31@vwalk.com', '12345678', 0, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(34, 'Firma 32', 'Firma 32', 'Firma 32', 'Firma 32', 'pl', 'Poznań', 'centrum', '32', 'informatyka', 'www.company32.com', 'company32@vwalk.com', '12345678', 0, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(35, 'Firma 33', 'Firma 33', 'Firma 33', 'Firma 33', 'pl', 'Poznań', 'centrum', '33', 'informatyka', 'www.company33.com', 'company33@vwalk.com', '12345678', 0, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(36, 'Firma 34', 'Firma 34', 'Firma 34', 'Firma 34', 'pl', 'Poznań', 'centrum', '34', 'informatyka', 'www.company34.com', 'company34@vwalk.com', '12345678', 0, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(37, 'Firma 35', 'Firma 35', 'Firma 35', 'Firma 35', 'pl', 'Poznań', 'centrum', '35', 'informatyka', 'www.company35.com', 'company35@vwalk.com', '12345678', 0, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(38, 'Firma 36', 'Firma 36', 'Firma 36', 'Firma 36 ', 'pl', 'Poznań', 'centrum', '36', 'informatyka', 'www.company36.com', 'company36@vwalk.com', '12345678', 0, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(39, 'Firma 37', 'Firma 37', 'Firma 37', 'Firma 37', 'pl', 'Poznań', 'centrum', '37', 'informatyka', 'www.company37.com', 'company37@vwalk.com', '12345678', 0, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(40, 'Firma 38', 'Firma 38', 'Firma 38', 'Firma 38', 'pl', 'Poznań', 'centrum', '38', 'informatyka', 'www.company38.com', 'company38@vwalk.com', '12345678', 0, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(41, 'Firma 39', 'Firma 39', 'Firma 39', 'Firma 39', 'pl', 'Poznań', 'centrum', '39', 'informatyka', 'www.company39.com', 'company39@vwalk.com', '12345678', 0, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(42, 'Firma 40', 'Firma 40', 'Firma 40', 'Firma 40', 'pl', 'Poznań', 'centrum', '40', 'informatyka', 'www.company40.com', 'company40@vwalk.com', '12345678', 0, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(43, 'Firma 41', 'Firma 41', 'Firma 41', 'Firma 41', 'pl', 'Poznań', 'centrum', '41', 'informatyka', 'www.company41.com', 'company41@vwalk.com', '12345678', 0, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(44, 'Firma 42', 'Firma 42', 'Firma 42', 'Firma 42', 'pl', 'Poznań', 'centrum', '42', 'informatyka', 'www.company42.com', 'company42@vwalk.com', '12345678', 0, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(45, 'Firma 43', 'Firma 43', 'Firma 43', 'Firma 43', 'pl', 'Poznań', 'centrum', '43', 'informatyka', 'www.company43.com', 'company43@vwalk.com', '12345678', 0, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(46, 'Firma 44', 'Firma 44', 'Firma 44', 'Firma 44', 'pl', 'Poznań', 'centrum', '44', 'informatyka', 'www.company44.com', 'company44@vwalk.com', '12345678', 0, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(47, 'Firma 45', 'Firma 45', 'Firma 45', 'Firma 45', 'pl', 'Poznań', 'centrum', '45', 'informatyka', 'www.company45.com', 'company45@vwalk.com', '12345678', 0, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(48, 'Firma 46', 'Firma 46', 'Firma 46', 'Firma 46', 'pl', 'Poznań', 'centrum', '46', 'informatyka', 'www.company46.com', 'company46@vwalk.com', '12345678', 0, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(49, 'Firma 47', 'Firma 47', 'Firma 47', 'Firma 47', 'pl', 'Poznań', 'centrum', '47', 'informatyka', 'www.company47.com', 'company47@vwalk.com', '12345678', 0, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(50, 'Firma 48', 'Firma 48', 'Firma 48', 'Firma 48', 'pl', 'Poznań', 'centrum', '48', 'informatyka', 'www.company48.com', 'company48@vwalk.com', '12345678', 0, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(51, 'Firma 49', 'Firma 49', 'Firma 49', 'Firma 49', 'pl', 'Poznań', 'centrum', '49', 'informatyka', 'www.company49.com', 'company49@vwalk.com', '12345678', 0, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372),
(52, 'Firma 50', 'Firma 50', 'Firma 50', 'Firma 50', 'pl', 'Poznań', 'centrum', '50', 'informatyka', 'www.company50.com', 'company50@vwalk.com', '12345678', 0, NULL, '//www.youtube.com/embed/scHS8YaYoRA', NULL, 1397940372);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `pass_word` varchar(255) NOT NULL,
  `user_type` enum('admin','company') NOT NULL DEFAULT 'company',
  `user_company_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `user_name`, `pass_word`, `user_type`, `user_company_id`) VALUES
(1, 'administrator', 'e10adc3949ba59abbe56e057f20f883e', 'admin', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `visualization`
--

CREATE TABLE IF NOT EXISTS `visualization` (
  `visualizationId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `visualizationOfferId` int(10) unsigned NOT NULL,
  `visualizationElement` varchar(250) NOT NULL,
  `visualizationElementSize` varchar(250) DEFAULT NULL,
  `visualizationElementScale` varchar(255) NOT NULL DEFAULT '1,1,1',
  `visualizationElementCode` longtext,
  `visualizationElementFile` varchar(255) DEFAULT NULL,
  `visualizationColor` varchar(40) NOT NULL DEFAULT '#ffffff',
  `visualizationInsert` int(11) DEFAULT NULL,
  `visualizationUpdate` int(11) DEFAULT NULL,
  PRIMARY KEY (`visualizationId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Zrzut danych tabeli `visualization`
--

INSERT INTO `visualization` (`visualizationId`, `visualizationOfferId`, `visualizationElement`, `visualizationElementSize`, `visualizationElementScale`, `visualizationElementCode`, `visualizationElementFile`, `visualizationColor`, `visualizationInsert`, `visualizationUpdate`) VALUES
(1, 4, 'other', '30,30,30,', '2,2,2', NULL, NULL, '#ffffff', 123654555, 1397939462),
(4, 3, 'other', '30,30,30,', '2,2,2', NULL, NULL, '#ffffff', 1391166874, 1397939429),
(5, 5, 'other', '1,1,1', '2,2,2', NULL, NULL, '#ffffff', 1394275144, 1397939812),
(6, 6, 'other', '1,1,1', '2,2,2', NULL, NULL, '#e6e6e6', 1397505697, 1397939832),
(7, 7, 'other', '1,1,1', '2,2,2', NULL, NULL, '#e6e6e6', 1397505697, 1397939840),
(8, 8, 'other', '1,1,', '2,2,2', NULL, NULL, '', 1397505697, 1397939925),
(9, 9, 'other', '1,1,1', '2,2,2', NULL, NULL, '#e6e6e6', 1397505697, 1397939873),
(10, 10, 'other', '1,1,1', '2,2,2', NULL, NULL, '#faf5fa', 1397505697, 1397939996),
(11, 11, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397505697, 1397940005),
(12, 12, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f7f4f7', 1397505697, 1397940017),
(13, 13, 'other', '1,1,1', '2,2,2', NULL, NULL, '#fff5ff', 1397505697, 1397939401),
(14, 14, 'other', '1,1,1', '2,2,2', NULL, NULL, '#dedede', 1397937699, 1397940533),
(15, 15, 'other', '1,1,1', '2,2,2', NULL, NULL, '#ffffff', 1397939161, 1397939384),
(16, 16, 'other', '1,1,1', '2,2,2', NULL, NULL, '#d6d6d6', 1397940372, 1397940394),
(17, 17, 'other', '1,1,1', '2,2,2', NULL, NULL, '#d6d6d6', 1397940372, 1397940394),
(18, 18, 'other', '1,1,1', '2,2,2', NULL, NULL, '#ebebeb', 1397940372, 1397940394),
(19, 19, 'other', '1,1,1', '2,2,2', NULL, NULL, '#efefef', 1397940372, 1397940394),
(20, 20, 'other', '1,1,1', '2,2,2', NULL, NULL, '#efefef', 1397940372, 1397940394),
(21, 21, 'other', '1,1,1', '2,2,2', NULL, NULL, '#efefef', 1397940372, 1397940394),
(22, 22, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(23, 23, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(24, 24, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(25, 25, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(26, 26, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(27, 27, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(28, 28, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(29, 29, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(30, 30, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(31, 31, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(32, 32, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(33, 33, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(34, 34, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(35, 35, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(36, 36, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(37, 37, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(38, 38, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(39, 39, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(40, 40, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(41, 41, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(42, 42, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(43, 43, 'other', '1,1,1', '2,2,2', NULL, NULL, '#3762b8', 1397940372, 1420544662),
(44, 44, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(45, 45, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(46, 46, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(47, 47, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(48, 48, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(49, 49, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(50, 50, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(51, 51, 'other', '1,1,1', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1397940394),
(52, 52, 'cube', '10,10,10', '2,2,2', NULL, NULL, '#f5f5f5', 1397940372, 1403786752);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
