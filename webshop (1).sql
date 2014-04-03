-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Genereertijd: 31 mrt 2014 om 12:29
-- Serverversie: 5.6.14
-- PHP-versie: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `webshop`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Gegevens worden uitgevoerd voor tabel `categorie`
--

INSERT INTO `categorie` (`id`, `naam`) VALUES
(1, 'xbox'),
(2, 'computer'),
(3, 'playstation');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE IF NOT EXISTS `gebruikers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gebruikersnaam` varchar(45) NOT NULL,
  `wachtwoord` varchar(45) NOT NULL,
  `voornaam` varchar(45) NOT NULL,
  `achternaam` varchar(45) NOT NULL,
  `adres` varchar(45) NOT NULL,
  `woonplaats` varchar(45) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Gegevens worden uitgevoerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`id`, `gebruikersnaam`, `wachtwoord`, `voornaam`, `achternaam`, `adres`, `woonplaats`, `postcode`, `email`, `isAdmin`) VALUES
(17, 'triballsky', '701f33b8d1366cde9cb3822256a62c01', 'louis', 'hol', 'groeneweg', 'buurmalsen', '4197HD', 'louis_hol@hotmail.com', 1),
(20, 'triballskys', '701f33b8d1366cde9cb3822256a62c01', 'Rick', 'De jong', 'adres', 'woonplaats', '4197HD', 'rick@hotmail.com', 1),
(21, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'test', 'test', 'test', 'test', 'test', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(45) NOT NULL,
  `link` varchar(100) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Gegevens worden uitgevoerd voor tabel `menu`
--

INSERT INTO `menu` (`id`, `label`, `link`, `parent`, `sort`) VALUES
(1, 'Home', 'index', 0, 0),
(3, 'Playstation', 'producten/playstation', 5, 0),
(4, 'Computer', 'producten/computer', 5, 0),
(5, 'producten', 'producten', 0, 0),
(6, 'Xbox', 'producten/xbox', 5, 0),
(7, 'about', 'about', 0, 0),
(8, 'takenverdeling', 'takenverdeling', 0, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orderregel`
--

CREATE TABLE IF NOT EXISTS `orderregel` (
  `order_regel_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `producten_id` int(11) NOT NULL,
  `aantal` int(11) NOT NULL,
  PRIMARY KEY (`order_regel_id`),
  KEY `fk_orderregel_order1_idx` (`order_id`),
  KEY `fk_orderregel_producten1_idx` (`producten_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gebrID` int(11) NOT NULL,
  `beschrijving` varchar(200) NOT NULL,
  `datum` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `gebrID_idx` (`gebrID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Gegevens worden uitgevoerd voor tabel `orders`
--

INSERT INTO `orders` (`id`, `gebrID`, `beschrijving`, `datum`) VALUES
(7, 21, 'Beschrijving lalal', '2014-03-23 20:32:52'),
(8, 21, 'Rickerd', '2014-03-23 20:33:04');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `producten`
--

CREATE TABLE IF NOT EXISTS `producten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prCategorie` int(11) DEFAULT NULL,
  `prNaam` varchar(45) NOT NULL,
  `prPrijs` varchar(45) NOT NULL,
  `prImage` varchar(45) NOT NULL,
  `prBeschrijving` varchar(400) NOT NULL,
  `prKbeschrijving` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `prCategorie_idx` (`prCategorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Gegevens worden uitgevoerd voor tabel `producten`
--

INSERT INTO `producten` (`id`, `prCategorie`, `prNaam`, `prPrijs`, `prImage`, `prBeschrijving`, `prKbeschrijving`) VALUES
(1, 1, 'Grand Theft Auto V', '49,99', 'img/content/gta_5.png', 'Grand Theft Auto V (ook geschreven als GTA V of GTA 5) is het vijftiende computerspel uit de Grand Theft Auto-spellenreeks van Rockstar Games. Het spel is ontwikkeld door Rockstar North en kwam op 17 september 2013 uit voor de PlayStation 3 en Xbox 360. Het spel maakt gebruik van de door Rockstar Games ontwikkelde RAGE-engine, die ook voor de voorloper van Grand Theft Auto V, Grand Theft Auto IV, ', 'Grand Theft Auto V (ook geschreven als GTA V of GTA 5'),
(2, 1, 'Halo: Reach ', '39,99', 'img/content/halo_reach.png', 'Halo: Reach is een first-person shooter videospel ontwikkeld door Bungie voor op de Xbox 360 en ligt sinds 14 september 2010 in de winkels. De wereldpremière is gehouden op 12 december 2009 bij de Spike Video Game Awards', 'Halo: Reach is een first-person shooter videospel ontwikkeld door Bungie'),
(3, 2, 'Borderlands 2', '22,50', 'img/content/borderlands_2.png', 'In Borderlands 2 speelt de speler met een van de vier hoofdpersonen (een commando, siren, gunzerker of assassin).[1] De hoofdpersonen uit het vorige deel zijn gevangengenomen en de speler moet deze proberen te bevrijden. Tijdens dit avontuur wordt de speler lastiggevallen door rebellen, robots, grote beesten en aliens.\r\nDe AI van het spel is aanzienlijk veranderd. Tegenstanders kunnen elkaar comma', 'In Borderlands 2 speelt de speler met een van de vier hoofdpersonen '),
(4, 2, 'Call of Duty : Ghosts', '49,99', 'img/content/call_of_duty.png', 'Call of Duty:  Ghosts is een first-person shooter ontwikkeld door Infinity Ward en uitgegeven door Activision. Het spel kwam uit op 5 november 2013 voor Microsoft Windows, PlayStation 3, Wii U en Xbox 360. De versies voor de PlayStation 4 en Xbox One komen op de releasedatum van beide consoles, respectievelijk 29 november 2013 en een nog onbekende datum in 2014 in Europa uit. De officiële trailer ', 'Call of Duty: Ghosts is een first-person shooter ontwikkeld door Infinity Ward'),
(5, 3, 'Game dev Tycoon', '32,43', 'img/content/game_dev_tycoon.png', 'spel beschikbaar voor Windows, Mac en Linux, evenals op de Windows 8 Store. In Game Dev Tycoon replay u de geschiedenis van de gaming-industrie door het starten van je eigen video game development bedrijf in de jaren ''80. Maak best verkopende games. Onderzoek naar nieuwe technologieën en bedenken nieuwe speltypes. De leider van de markt en krijgen wereldwi', 'Game Dev Tycoon is een business simulatie spel'),
(6, 3, 'Life with Louie', '24.99', 'img/content/life_with_louie.png', 'Leven met Louie is een Amerikaanse spel dat is gebaseerd op de stand-upcomedyverhalen van Louie Anderson over toen hij nog een kind was. In Nederland werd hij eerst ondertiteld, en later nagesynchroniseerd uitgezonden op Fox Kids.', 'Leven met Louie is een Amerikaanse spel dat is gebaseerd op de stand-upcomedyverhalen van louis'),
(7, 2, 'Minecraft', '34,31', 'img/content/minecraft.png', 'Minecraft is een computerspel, waarbij het de bedoeling is om objecten te bouwen met kubusvormige materialen en grondstoffen, die eerst gedolven en verzameld moeten worden in het landschap waarin de speler zich bevindt. Het spel kan zowel online, als op de eigen computer gespeeld worden, in het laatste geval door het te downloaden van de officiële website van Minecraft. De betaalde versie is inmid', 'Minecraft is een computerspel, waarbij het de bedoeling is om objecten te bouwen'),
(8, 3, 'Space Invaders', '24,50', 'img/content/space_invaders.png', 'Space Invaders is een arcadespel, ontworpen in 1978 door Toshihiro Nishikado. Het werd oorspronkelijk gemaakt door Taito en de licentie voor de Verenigde Staten werd gegeven aan Midway. Het spel werd als eerste in thuisland Japan uitgebracht in 1978 en geldt als een van de invloedrijkste computerspellen ooit gemaakt. Hoewel het naar moderne standaarden zeer simplistisch is was het een van de eerst', 'Space Invaders is een arcadespel, ontworpen in 1978'),
(9, 1, 'The walking dead', '9,99', 'img/content/the_walking_dead.png', 'The Walking Dead is een Amerikaanse spel dat over een groep mensen die trachten te overleven in een wereld vol zombies. De reeks werd ontwikkeld door scenarist en regisseur Frank Darabont. Het verhaal speelt zich af in Atlanta (Georgia) en werd gebaseerd op de door Robert Kirkman, Tony Moore en Charlie Adlard bedachte gelijknamige strip.', 'The Walking Dead is een Amerikaanse spel dat over een groep mensen die trachten te overleven.'),
(10, 2, 'The Witcher 3', '49,99', 'img/content/the_witcher_3.png', 'Het verhaal van The Witcher 3: Wild Hunt draait wederom om Geralt. Deze mannelijke heks met bovennatuurlijke krachten moet in het derde deel zijn geliefden en de wereld tegen zijn aartsvijand beschermen. Naast het verslaan van het kwaad speelt jagen ook een grote rol in game.\r\n\r\nDe spelwereld van The Witcher 3: Wild Hunt is twintig procent groter dan concurrent Skyrim. Het kost spelers meer dan de', 'Het verhaal van The Witcher 3: Wild Hunt draait wederom om Geralt.'),
(11, 3, 'Day of Defeat', '99,99', 'img/content/day_of_defeat.png', 'Day of Defeat (DoD) speelt zich af in de Tweede Wereldoorlog. De speler speelt voor één van de twee beschikbare teams, de ''Allies (Amerikanen of Engelsen'' en de ''Axis (Duitsers)''. Het spel is een vorm van vlagveroveren. Het spel maakt gebruik van geluid en plaatjes die gebaseerd zijn op de film Saving Private Ryan. Een aantal maps is ontworpen met in het achterhoofd historische gebeurtenissen.', 'Day of Defeat (DoD) speelt zich af in de Tweede Wereldoorlog.'),
(12, 1, 'Farming Simulator', '45,29', 'img/content/farming_simulator.png', 'Farming Simulator 2013 brengt alles wat je van de reeks gewend bent in nog meer detail tot leven. Spelers kunnen in de carrière modus als boer aan de slag en ervaring op doen met verschillende voertuigen. Hierbij is het landschap vrij toegankelijk.\r\n\r\nDankzij een variabele economie kunnen de prijzen van de gewassen steeds weer verschillen. Hierdoor is het belangrijker strategisch te werk te gaan m', 'Farming Simulator 2013 brengt alles wat je van de reeks gewend bent '),
(19, 2, 'naampie234', '23', 'ewe', 'jwej', 'disjdis'),
(22, 3, 'PLAYSTATION', '7', '7', '7', '7'),
(23, 1, 'lala', '234', 'dwd', 'dwod', 'ldwpdl');

--
-- Beperkingen voor gedumpte tabellen
--

--
-- Beperkingen voor tabel `orderregel`
--
ALTER TABLE `orderregel`
  ADD CONSTRAINT `fk_orderregel_order1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orderregel_producten1` FOREIGN KEY (`producten_id`) REFERENCES `producten` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `gebrID` FOREIGN KEY (`gebrID`) REFERENCES `gebruikers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `producten`
--
ALTER TABLE `producten`
  ADD CONSTRAINT `prCategorie` FOREIGN KEY (`prCategorie`) REFERENCES `categorie` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
