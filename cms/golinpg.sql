-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2018 at 01:34 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `golinpg`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `tekst` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slika` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `tekst`, `slika`) VALUES
(1, 'MCDONALDS\'S: THESTRAW', '/cms/resursi/FotkeClients/client1.png'),
(2, 'MCDONALDS\'S: FRORK', '/cms/resursi/FotkeClients/client2.png'),
(3, 'GUINNESS: MADE OF MORE', '/cms/resursi/FotkeClients/client3.png'),
(4, 'MAGNUM: MAGNUM X MOSCHINO', '/cms/resursi/FotkeClients/client4.png'),
(5, 'GULDEN\'S: #DEFENDTHEDOG', '/cms/resursi/FotkeClients/client5.png'),
(6, 'TOBLERONE: THE TOBLERONE TAKE', '/cms/resursi/FotkeClients/client6.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(3) NOT NULL,
  `naslov` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `adresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `grad_drzava` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `broj_telefona` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `e_mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `naslov`, `adresa`, `grad_drzava`, `broj_telefona`, `e_mail`) VALUES
(1, 'CONTACT', 'Bulevar Svetog Petra Cetinjskog 56	', 'Podgorica 81000, Montenegro	', '+382 223 240	', 'info@amplitudo.me');

-- --------------------------------------------------------

--
-- Table structure for table `goalliin_cards`
--

CREATE TABLE `goalliin_cards` (
  `id` int(3) NOT NULL,
  `slika` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `naslov` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tekst` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `goalliin_cards`
--

INSERT INTO `goalliin_cards` (`id`, `slika`, `naslov`, `tekst`) VALUES
(1, '/cms/resursi/IkoniceKrugovi/krug1.png', 'EXPLORERS', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo cosequat.'),
(2, '/cms/resursi/IkoniceKrugovi/krug2.png', 'CREATORS', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo cosequat.'),
(3, '/cms/resursi/IkoniceKrugovi/krug3.png', 'CONNECTORS', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo cosequat.'),
(4, '/cms/resursi/IkoniceKrugovi/krug4.png', 'CATALYSTS', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo cosequat.');

-- --------------------------------------------------------

--
-- Table structure for table `goallin`
--

CREATE TABLE `goallin` (
  `id` int(3) NOT NULL,
  `naslov1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `naslov2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `paragraf1` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `paragraf2` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `naslov3` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `goallin`
--

INSERT INTO `goallin` (`id`, `naslov1`, `naslov2`, `paragraf1`, `paragraf2`, `naslov3`) VALUES
(1, 'WE ARE THE RELEVANCE AGENCY.	', 'We\'re relevance obsessed. More importantly, we\'re relevance equipped.', 'We are an integrated agency with PR, Digital and Content at our core. Our ambition is to create change trough brave, relevant work worthy of awe, action and awards. By embracing new technologies and pushing creative boundaries, we help our clients adapt and win in a constatly evolving world.', ' We are committed to delivering the deepest insights, boldest ideas and broadsest engagement to the world\'s leading brand trough seamless integrated communications.', 'We\'re the nice guys who kick ass.');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL,
  `naslov1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `naslov2` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `paragraf` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `dugmeIme` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `naslov1`, `naslov2`, `paragraf`, `dugmeIme`) VALUES
(1, 'AMPLITUDO', 'AFFILIATE OF GOLIN', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo cosequat.', 'ZAKAŽI SASTANAK');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `ime` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `randSalt` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT '$2y$10$ovajstringtrebadajedug'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `ime`, `prezime`, `username`, `password`, `randSalt`) VALUES
(1, 'Zeljko', 'Gazivoda', 'zgazivoda', '$2y$10$ovajstringtrebadajedue/UI38563gzOAqqkQ7D7nkTZx88CYD3C', '$2y$10$ovajstringtrebadajedug'),
(2, 'Aleksandar', 'Plamenac', 'aplamenac', '$2y$10$ovajstringtrebadajedueZSgDCiZc5L4USJmCRMfQ/URQXP1qIJy', '$2y$10$ovajstringtrebadajedug');

-- --------------------------------------------------------

--
-- Table structure for table `navbar`
--

CREATE TABLE `navbar` (
  `id` int(3) NOT NULL,
  `link` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`id`, `link`) VALUES
(1, 'PR AND COMMUNICATION'),
(2, 'EVENT MANAGEMENT'),
(3, 'CLIENTS'),
(4, 'ABOUT US'),
(5, 'OFFICES'),
(6, 'CONTACT');

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` int(3) NOT NULL,
  `slika` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tekst` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `slika`, `tekst`) VALUES
(1, '/cms/resursi/FotkeOffices/u-boji/podgorica.png', 'PODGORICA'),
(2, '/cms/resursi/FotkeOffices/u-boji/Belgrade.png', 'BELGRADE'),
(3, '/cms/resursi/FotkeOffices/u-boji/brussels.jpg', 'BRUSSELS'),
(4, '/cms/resursi/FotkeOffices/u-boji/bucharest.jpg', 'BUCHAREST'),
(5, '/cms/resursi/FotkeOffices/u-boji/dubai.jpg', 'DUBAI'),
(6, '/cms/resursi/FotkeOffices/u-boji/Hamburg.jpg', 'HAMBURG'),
(7, '/cms/resursi/FotkeOffices/u-boji/Istanbul.jpg', 'ISTANBUL'),
(8, '/cms/resursi/FotkeOffices/u-boji/london.jpg', 'LONDON'),
(9, '/cms/resursi/FotkeOffices/u-boji/madrid.jpg', 'MADRID'),
(10, '/cms/resursi/FotkeOffices/u-boji/milan.jpg', 'MILANO'),
(11, '/cms/resursi/FotkeOffices/u-boji/moscow.jpg', 'MOSCOW'),
(12, '/cms/resursi/FotkeOffices/u-boji/paris.jpg', 'PARIS'),
(13, '/cms/resursi/FotkeOffices/u-boji/riga.jpg', 'RIGA'),
(14, '/cms/resursi/FotkeOffices/u-boji/stockholm.jpg', 'STOCKHOLM');

-- --------------------------------------------------------

--
-- Table structure for table `partone`
--

CREATE TABLE `partone` (
  `id` int(3) NOT NULL,
  `naslov1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `naslov2` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `paragraf1` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `paragraf2` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `paragraf3` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `slika` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `partone`
--

INSERT INTO `partone` (`id`, `naslov1`, `naslov2`, `paragraf1`, `paragraf2`, `paragraf3`, `slika`) VALUES
(1, 'PR AND', 'COMMUNICATIONS', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonum- my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper sus- cipit lobortis nisl ut aliquip ex ea commodo cosequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velitate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit auque duis dolore te feugait nulla facilisi. ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo cosequat.	', '', '/cms./resursi/Fotke/fotka2.png'),
(2, 'EVENT', 'MANAGEMENT', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo cosequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velitate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit auque duis dolore te feugait nulla facilisi.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo cosequat.', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velitate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit auque duis dolore te feugait nulla facilisi.', '/cms./resursi/Fotke/fotka3.png');

-- --------------------------------------------------------

--
-- Table structure for table `sastanci`
--

CREATE TABLE `sastanci` (
  `id` int(11) NOT NULL,
  `ime_prezime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `firma` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `e_mail` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `broj_telefona` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `datum` date NOT NULL,
  `vrijeme` time NOT NULL,
  `status_sastanka` varchar(15) COLLATE utf8_unicode_ci DEFAULT 'neodlucen'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sastanci`
--

INSERT INTO `sastanci` (`id`, `ime_prezime`, `firma`, `e_mail`, `broj_telefona`, `datum`, `vrijeme`, `status_sastanka`) VALUES
(1, 'Zeljko Gazivoda', 'Gaz', 'zg@gmail.com', '068-845-78', '2018-08-08', '00:01:00', 'prihvacen'),
(2, 'Jon Doe', 'Jewerly INC', 'jewerly@gmail.com', '0239339411', '2018-08-09', '13:00:00', 'neodlucen'),
(33, 'Marko Markovic', 'Markovic Co', 'markovic@gmail.com', '069-887-77', '2018-08-24', '13:00:00', 'neodlucen'),
(34, 'Janko Jankovic', 'jankovic co', 'jj@gmail.com', '039-487-84', '2018-08-24', '10:00:00', 'neodlucen'),
(35, 'Zeljko ', 'Gazivoda', 'zg@gmail.com', '034-475-78', '2018-08-17', '02:03:00', 'neodlucen'),
(37, 'Zeljko', 'Gazivoda', 'zadnjitest@gmail.com', '035-789-78', '2018-08-01', '15:00:00', 'prihvacen'),
(45, 'Elon Musk', 'Tesla Inc', 'elon.musk@tesla.com', '305-145-87', '2018-08-23', '10:00:00', 'neodlucen'),
(46, 'Stan Lee', 'Spiderman', 'spidy@marvel.com', '095-789-15', '2018-09-20', '20:30:00', 'odbijen'),
(47, 'Johnny Depp', 'Blow Inc', 'jd@gmail.com', '148-258-47', '2018-09-20', '17:00:00', 'prihvacen'),
(49, 'Jo Nesbe', 'Nesbe Inc', 'jo@nesbe.com', '034-784-14', '2018-09-13', '10:00:00', 'prihvacen'),
(64, 'Jack Salic', 'Salici Inc', 'jack@salic.com', '067888444', '2018-10-25', '10:00:00', 'prihvacen'),
(65, 'Zeljko Gazivoda', 'Gazivoda', 'zg@gmail.com', '0239339411', '2018-09-20', '12:00:00', 'neodlucen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goalliin_cards`
--
ALTER TABLE `goalliin_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goallin`
--
ALTER TABLE `goallin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partone`
--
ALTER TABLE `partone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sastanci`
--
ALTER TABLE `sastanci`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goalliin_cards`
--
ALTER TABLE `goalliin_cards`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `goallin`
--
ALTER TABLE `goallin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `partone`
--
ALTER TABLE `partone`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sastanci`
--
ALTER TABLE `sastanci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
