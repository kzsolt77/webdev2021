CREATE DATABASE `labor7`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `labor7`;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `bejegyzesek` (
  `szoveg` varchar(200) NOT NULL,
  `nev` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `bejegyzesek` (`szoveg`, `nev`, `email`, `id`) VALUES
('Ujabb velemenyt fogalmazok meg', 'Gipsz Jakab', 'ujemail@email.info', 4),
('Nagyon kedvez? véleményem van!', 'Teszt Elek', 'email@email.ma', 3),
('Kiváló véleménnyel vagyok', 'Próba Béla', 'email@ami.nincs', 5);

CREATE TABLE `felhasznalok` (
  `id` int(10) UNSIGNED NOT NULL,
  `csaladi_nev` varchar(45) NOT NULL,
  `uto_nev` varchar(45) NOT NULL,
  `bejelentkezes` int(12) NOT NULL,
  `jelszo` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `felhasznalok` (`id`, `csaladi_nev`, `uto_nev`, `bejelentkezes`, `jelszo`) VALUES
(1, 'Családi_1', 'Utónév_1', 0, 'd4b90f2dfafc736205a98bf3ae6541431bc77d8e'),
(2, 'Családi_2', 'Utónév_2', 0, '6cf8efacae19431476020c1e2ebd2d8acca8f5c0'),
(3, 'Családi_3', 'Utónév_3', 0, 'df4d8ad070f0d1585e172a2150038df5cc6c891a'),
(4, 'Családi_4', 'Utónév_4', 0, 'b020c308c155d6bbd7eb7d27bd30c0573acbba5b'),
(5, 'Családi_5', 'Utónév_5', 0, '9ab1a4743b30b5e9c037e6a645f0cfee80fb41d4'),
(6, 'Családi_6', 'Utónév_6', 0, '7ca01f28594b1a06239b1d96fc716477d198470b'),
(0, 'aaa', 'aaa', 0, '7e240de74fb1ed08fa08d38063f6a6a91462a815');

ALTER TABLE `bejegyzesek`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `felhasznalok`
  ADD PRIMARY KEY `id` (`id`);


ALTER TABLE `bejegyzesek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `felhasznalok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

COMMIT;
