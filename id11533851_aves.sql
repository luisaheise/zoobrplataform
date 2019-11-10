-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 10, 2019 at 01:34 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id11533851_aves`
--

-- --------------------------------------------------------

--
-- Table structure for table `aves`
--

CREATE TABLE `aves` (
  `vulgar` text COLLATE utf8_unicode_ci NOT NULL,
  `cientifico` text COLLATE utf8_unicode_ci NOT NULL,
  `dorso` text COLLATE utf8_unicode_ci NOT NULL,
  `ventre` text COLLATE utf8_unicode_ci NOT NULL,
  `bico` text COLLATE utf8_unicode_ci NOT NULL,
  `image_path` text COLLATE utf8_unicode_ci NOT NULL,
  `detalhe` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `aves`
--

INSERT INTO `aves` (`vulgar`, `cientifico`, `dorso`, `ventre`, `bico`, `image_path`, `detalhe`) VALUES
('Canário da Terra (macho)', 'Sicalis flaveola', 'amarelo', 'amarelo', 'amarelado', 'terra_macho.png', 'Há quatro subespécies de difícil distinção, duas (S.f.valida e S.f.flaveola) exóticas\r\nao País. A importação de espécimes vivos de S. flaveola está proibida pela portaria no\r\n93/1998 – Ibama. Há variedades de plumagem em criações em cativeiro, como as denominadas canela,\r\nisabel, lutina, arlequim e nevada (SICK, 1997). Há possibilidade de existirem híbridos\r\nentre subespécies.'),
('Canário da Terra (fêmea)', 'Sicalis flaveola', 'amarelo', 'amarelo', 'amarelado', 'terra_femea.png', 'Há quatro subespécies de difícil distinção, duas (S.f.valida e S.f.flaveola) exóticas\r\nao País. A importação de espécimes vivos de S. flaveola está proibida pela portaria\r\nn° 93/1998 – Ibama. Há variedades de plumagem em criações em cativeiro, como as denominadas\r\ncanela, isabel, lutina, arlequim e nevada (SICK, 1997). Há possibilidade de existirem\r\nhíbridos entre subespécies.'),
('Trinca-ferro (macho e fêmea)', 'Saltator similis', 'cinza', 'castanho', 'preto', 'trinca.png', '20cm'),
('Curió (macho)', 'Sporophila angolensis, Oryzoborus angolensi', 'castanho', 'preto', 'preto', 'curio_macho.png', '12.5cm - manchas brancas sob a asa'),
('Curió (fêmea)', 'Sporophila angolensis, Oryzoborus angolensi', 'avermelhado', 'parda', 'preto', 'curio_femea.png', '12.5cm'),
('Azulão (macho)', 'Cyanoloxia brissonii, Passerina brissonii, Cyanocompsa brissonii', 'azul', 'azul', 'preto', 'azulao_macho.png', '15cm'),
('Azulão (fêmea)', 'Cyanoloxia brissonii, Passerina brissonii, Cyanocompsa brissonii', 'parda', 'parda avermelhada', 'preto', 'azulao_femea.png', '15cm'),
('Coleirinho (macho)', 'Sporophila caerulescens', 'cinza', 'amarelado', 'amarelo', 'coleirinho_macho.png', '11cm'),
('Coleirinho (fêmea)', 'Sporophila caerulescens', 'parda', 'parda', 'alaranjado', 'coleirinho_femea.png', '11cm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
