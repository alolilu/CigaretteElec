-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 14, 2022 at 09:45 AM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testappphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Price` int(255) NOT NULL,
  `Image` text NOT NULL,
  `Quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=170 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panier`
--

INSERT INTO `panier` (`ID`, `Name`, `Price`, `Image`, `Quantity`, `total`) VALUES
(169, 'Bouteille Skull en verre 700 ml', 10, 'https://www.lepetitvapoteur.com/27622-thickbox/bouteille-skull-en-verre-700-ml.jpg', 2, 20),
(166, 'Drip Tip TFV16 810 Smok', 3, 'https://www.lepetitvapoteur.com/27460-thickbox/drip-tip-tfv16-810-smok.jpg', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` int(255) NOT NULL,
  `Image` text NOT NULL,
  `Categorie` text NOT NULL,
  `Popular` int(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Name`, `Description`, `Price`, `Image`, `Categorie`, `Popular`) VALUES
(7, 'Kit Zlide Tube Edition LPV Innokin', 'Le Petit Vapoteur et Innokin sont fiers de vous proposer une version LPV inÃ©dite du fameux kit Zlide Tube de Innokin !', 38, 'https://www.lepetitvapoteur.com/35630-thickbox/kit-zlide-tube-edition-lpv-innokin.jpg', 'CigaretteElectronique', 5),
(8, 'Pod Drag S Voopoo', 'Avec le pod Drag S, Voopoo Ã©lÃ¨ve le niveau en termes de performances et d\'esthÃ©tisme pour un pod mod.', 34, 'https://www.lepetitvapoteur.com/30541-thickbox/pod-drag-s-voopoo.jpg', 'CigaretteElectronique', 3),
(9, 'Kit Coolfire Z80 Zenith 2 Innokin', 'Le kit Coolfire Z80 et son clearomiseur Zenith 2 est une cigarette Ã©lectronique Ã  la technologie innovante, au service du vapoteur.', 63, 'https://www.lepetitvapoteur.com/34419-large_default/kit-coolfire-z80-zenith-2-innokin.jpg', 'CigaretteElectronique', 4),
(10, 'Kit Aegis Legend 2 Geek Vape', 'Le kit Aegis Legend 2 est une cigarette Ã©lectronique rÃ©alisÃ©e par Geek vape.', 59, 'https://www.lepetitvapoteur.com/36838-thickbox/kit-aegis-legend-2-geek-vape.jpg', 'CigaretteElectronique', 5),
(11, 'Pack Duo Ijust 3', 'Le Pack Duo Ijust 3 vous donne la possibilitÃ© d\'avoir deux cigarettes Ã©lectroniques offrant de belles performances.', 59, 'https://www.lepetitvapoteur.com/20605-thickbox/pack-duo-ijust-3.jpg', 'CigaretteElectronique', 5),
(12, 'Pack Luxe 2 DÃ©couverte', 'On  vous propose ce pack complet comprenant le prestigieux et moderne Kit Luxe 2 de Vaporesso accompagnÃ© de son clearomiseur NRG S.', 69, 'https://www.lepetitvapoteur.com/31847-thickbox/pack-luxe-2-decouverte.jpg', 'CigaretteElectronique', 3),
(13, 'Pack Drag X DÃ©couverte', 'Le Petit Vapoteur vous propose ce pack Drag X DÃ©couverte, pour profiter au mieux de ce pod avec un accu Procell 18650.', 38, 'https://www.lepetitvapoteur.com/30426-thickbox/pack-drag-x-decouverte.jpg', 'CigaretteElectronique', 1),
(14, 'Pack XROS Sels de nicotine', 'Le Pack XROS Sels de nicotine le pod XROS de Vaporesso, idÃ©al pour vapoter un e liquide aux sels de nicotine Le Petit Vapoteur.', 20, 'https://www.lepetitvapoteur.com/34402-thickbox/pack-xros-sels-de-nicotine.jpg', 'CigaretteElectronique', 5),
(15, 'Kit Coolfire Z80 Gold Edition Innokin', 'Retrouvez ou dÃ©couvrez le fameux kit Coolfire Z80 de Innokin dans une version \"Gold\", limitÃ©e, avec son coffret de luxe et un clearomiseur Zenith 2 dorÃ© et numÃ©rotÃ©.', 79, 'https://www.lepetitvapoteur.com/36888-thickbox/kit-coolfire-z80-gold-edition-innokin.jpg', 'CigaretteElectronique', 5),
(16, 'Pack La Petite Vapoteuse', 'Pour la sortie du nouveau e liquide LPV x Swoke, Le Petit Vapoteur vous propose un bundle La Petite Vapoteuse au Japon en Ã©dition limitÃ©e.', 30, 'https://www.lepetitvapoteur.com/36744-thickbox/pack-la-petite-vapoteuse-au-japon-x-avocado-baby.jpg', 'CigaretteElectronique', 4),
(17, 'Pod Obelisk 65 FC Geek Vape', 'L\'Obelisk 65 FC est un beau pod mod signÃ© Geek Vape. Ce pod robuste et avec une bonne prise en main contient 2 batteries de 1100 mAh.', 69, 'https://www.lepetitvapoteur.com/36629-thickbox/pod-obelisk-65-fc-geek-vape.jpg', 'CigaretteElectronique', 3),
(18, 'Kit Centaurus Quest BF Lost Vape', 'Le kit Centaurus Quest BF de Lost Vape Quest permet de vapoter avec une box Bottom-Feeder (BF) et un dripper Centaurus.', 89, 'https://www.lepetitvapoteur.com/36673-thickbox/kit-centaurus-quest-bf-lost-vape.jpg', 'CigaretteElectronique', 2),
(27, 'Pack concentrÃ©s FruitÃ©s LPV', 'Pack concentrÃ©s FruitÃ©s Le Petit Vapoteur. Vous pouvez retrouver dans ce pack de concentrÃ©s fruitÃ©s les diffÃ©rents arÃ´mes : Mix-Fruits', 8, 'https://www.lepetitvapoteur.com/31732-thickbox/pack-concentres-fruites-lpv.jpg', '1', 5),
(23, 'E liquide Le Petit Blond Le Petit Vapoteur', 'E liquide Le Petit Blond Le Petit Vapoteur. Notre Petit Blond, lÃ©gÃ¨rement Ã©picÃ© et doucement gourmand', 4, 'https://www.lepetitvapoteur.com/16306-thickbox/le-petit-blond-le-petit-vapoteur.jpg', '1', 4),
(26, 'Pack concentrÃ©s frais LPV', 'Pack concentrÃ©s frais Le Petit Vapoteur. Le DÃ©calÃ©, Le Rouge et Fraise fresh...', 8, 'https://www.lepetitvapoteur.com/31730-thickbox/pack-concentres-frais-lpv.jpg', '1', 2),
(24, 'E liquide RY4 Le Petit Vapoteur', 'E liquide RY4 Le Petit Vapoteur. Lâ€™un des goÃ»ts les plus prisÃ©s des vapoteurs. Le cÃ©lÃ¨bre RY4', 5, 'https://www.lepetitvapoteur.com/13479-thickbox/ry4-le-petit-vapoteur.jpg', '1', 3),
(25, 'E liquide Licorne Astrale Curieux', 'E liquide Licorne Astrale Curieux. Un Ã©tonnant mariage de fraise et de fruit du dragon, tout en fraÃ®cheur.', 6, 'https://www.lepetitvapoteur.com/22721-thickbox/e-liquide-licorne-curieux-edition-astrale-10-ml.jpg', '1', 4),
(28, 'ConcentrÃ© Cirkus Fraise - Kiwi', 'ConcentrÃ© Les Excentriques by Cirkus Fraise - Kiwi. Parfait Ã©quilibre entre une belle fraise mÃ»re et le piquant d\'un kiwi', 9, 'https://www.lepetitvapoteur.com/9409-thickbox/concentre-cirkus-fraise-kiwi.jpg', '1', 4),
(29, 'Pack MentholÃ© LPV', 'Une sÃ©lection des meilleurs e liquides de la gamme Le Petit Vapoteur avec des saveurs mentholÃ©es et un prix attractif vous attendent !', 9, 'https://www.lepetitvapoteur.com/23217-thickbox/pack-menthole-le-petit-vapoteur.jpg', '1', 5),
(30, 'E liquide Heisenberg', 'E liquide Heisenberg Vampire Vape. Un e liquide subtil aux nuances fruitÃ©es et fraÃ®ches', 5, 'https://www.lepetitvapoteur.com/31018-thickbox/heisenberg.jpg', '1', 5),
(31, 'E liquide Mareva Reserve Brute 50 ml', 'E liquide Mareva RÃ©serve Brute 50 ml. Retrouvez un mÃ©lange de plusieurs menthes pour une vape fraÃ®che, mais pas glaciale', 20, 'https://www.lepetitvapoteur.com/34103-thickbox/e-liquide-mareva-reserve-brute-50-ml.jpg', '1', 3),
(32, 'E liquide La Chose 50/50 Le French Liquide', 'E liquide La Chose en 50/50 par Le French Liquide. Parfait pour dÃ©marrer la journÃ©e !', 22, 'https://www.lepetitvapoteur.com/19786-thickbox/e-liquide-la-chose-5050-le-french-liquide.jpg', '1', 4),
(33, 'E liquide Licorne Astrale Curieux 50 ml', 'E liquide Licorne Astrale Curieux 50 ml. ApprÃ©ciez le mariage frais, parfait de la fraise et du fruit du dragon', 23, 'https://www.lepetitvapoteur.com/23545-thickbox/e-liquide-licorne-curieux-50-ml.jpg', '1', 2),
(34, 'E liquide Bloody Summer King Size Fruizee', 'E liquide King Size Fruizee avec une proportion de 30/70 en PG/VG et avec un flacon pouvant contenir jusqu\'Ã  70 ml', 29, 'https://www.lepetitvapoteur.com/20228-thickbox/e-liquide-bloody-summer-king-size-fruizee.jpg', '1', 5),
(35, 'Adaptateur Drip Tip 510 to 810', 'Adaptateur Drip Tip 510 to 810. Ce petit accessoire vous permet d\'installer un drip tip au standard 810', 2, 'https://www.lepetitvapoteur.com/33938-thickbox/adaptateur-drip-tip-510-to-810.jpg', '2', 5),
(36, 'Drip tip 510 Alu 19 mm', 'Drip tip 510 Alu 19 mm. Retrouvez une sÃ©lection de trois drip tips longs, en alumium au format 510.', 3, 'https://www.lepetitvapoteur.com/35094-thickbox/drip-tip-510-alu-19-mm.jpg', '2', 3),
(37, 'Drip Tip TFV16 810 Smok', 'Drip Tip 810 Smok en rÃ©sine pour l\'atomiseur TFV16. Ce drip tip est un 810 propriÃ©taire pour le TFV16', 3, 'https://www.lepetitvapoteur.com/27460-thickbox/drip-tip-tfv16-810-smok.jpg', '2', 2),
(38, 'Vape Stand Le Petit Vapoteur', 'Ces Vape Stand sont spÃ©cialement fabriquÃ©s pour Le Petit Vapoteur. ', 14, 'https://www.lepetitvapoteur.com/26545-thickbox/vape-stands-le-petit-vapoteur-.jpg', '2', 3),
(39, 'Sac banane Vape District', 'Le sac banane Vape District permet de stocker et transporter plusieurs accessoires ', 17, 'https://www.lepetitvapoteur.com/36334-thickbox/sac-banane-vape-district.jpg', '2', 5),
(40, 'Vape Bands LPV', 'DÃ©corez et protÃ©gez vos atomiseurs aux couleurs des gammes du Petit Vapoteur, avec ces Vape Bands LPV', 1, 'https://www.lepetitvapoteur.com/34783-thickbox/vape-bands-lpv.jpg', '2', 4),
(41, 'Flacon Unicorn Chubby Gorilla 30 ml', 'Le flacon Unicorn Chubby Gorilla vous permet, au choix, de transporter plus facilement vos e liquides DIY', 2, 'https://www.lepetitvapoteur.com/32567-thickbox/flacon-unicorn-chubby-gorilla-30-ml.jpg', '2', 4),
(42, 'Flacon Twist GraduÃ©', 'Le Flacon Twist GraduÃ© pour la prÃ©paration de vos e liquides DIY', 3, 'https://www.lepetitvapoteur.com/19189-thickbox/flacon-twist-gradue.jpg', '2', 3),
(43, 'Flacon Skull 30 ml', 'Flacon Skull 30 ml. Une fiole en verre pour transporter vos e liquides ou steeper vos prÃ©parations DIY de maniÃ¨re originale.', 3, 'https://www.lepetitvapoteur.com/19149-thickbox/flacon-skull-30-ml.jpg', '2', 5),
(44, 'Entonnoir e-liquide Ã˜55 mm', 'Entonnoirs en polypropylÃ¨ne. L\'entonnoir est un accessoire trÃ¨s pratique pour la prÃ©paration de vos e-liquides', 1, 'https://www.lepetitvapoteur.com/27719-thickbox/entonnoir-e-liquide-o55-mm.jpg', '2', 3),
(45, 'nettoyeur ultra-son', 'Ce nettoyeur ultrason vous sera utile pour nettoyer et donner une seconde vie Ã  vos piÃ¨ces d\'atomiseurs et rÃ©sistances.', 35, 'https://www.lepetitvapoteur.com/15871-thickbox/nettoyeur-ultra-son.jpg', '2', 5),
(46, 'Bouteille Skull en verre 700 ml', 'Bouteille Skull 700 ml. Une fiole en verre de haute qualitÃ© au design pirate, pour steeper vos prÃ©parations DIY de maniÃ¨re originale ! ', 10, 'https://www.lepetitvapoteur.com/27622-thickbox/bouteille-skull-en-verre-700-ml.jpg', '2', 4),
(49, 'Kit Minifit-S Justfog', 'Le Kit Minifit-S Justfog est un pod simple et trÃ¨s compact, qui propose deux types de vape avec choix du tirage', 19, 'https://www.lepetitvapoteur.com/37051-thickbox/kit-minifit-s-justfog.jpg', '0', 5),
(50, 'Kit Kroma 217 Innokin', 'L\'ergonomie et la robustesse sont particuliÃ¨rement travaillÃ©es avec ce kit Kroma 217 au service d\'une vape en inhalation directe', 67, 'https://www.lepetitvapoteur.com/37009-thickbox/kit-kroma-217-innokin.jpg', '0', 2),
(51, 'Pack Kroma Z DÃ©butant', 'Si vous cherchez une cigarette Ã©lectronique idÃ©ale pour dÃ©buter, Le Petit Vapoteur vous propose le Pack Kroma Z DÃ©butant.', 35, 'https://www.lepetitvapoteur.com/32372-thickbox/pack-kroma-z-debutant.jpg', '0', 5),
(52, 'Kit Ijust 3 Eleaf', 'Le kit Ijust 3 est une version plus moderne du kit Ijust de Eleaf. DotÃ© d\'une puissante batterie de 3000 mAh entiÃ¨rement redesignÃ©.', 32, 'https://www.lepetitvapoteur.com/20562-thickbox/kit-ijust-3-eleaf.jpg', '0', 4),
(53, 'Kit Aegis Legend 2 Edition', 'Pour les amateurs de vape sensationnelle, Le Petit Vapoteur et Geek Vape vous propose le kit Aegis Legend 2 Edition LPV.', 69, 'https://www.lepetitvapoteur.com/35430-thickbox/kit-aegis-legend-2-edition-lpv-geek-vape.jpg', '0', 4),
(54, 'Box Aegis Mini Geek Vape', 'La box Aegis Mini de Geek Vape est un mod Ã©lectronique ultra compact avec de belles performances.', 29, 'https://www.lepetitvapoteur.com/22672-thickbox/box-aegis-mini-geek-vape.jpg', '0', 3),
(55, 'Kit Orchid Pod', 'Le kit Orchid est un pod sophistiquÃ©, Ã©quipÃ© d\'un Ã©cran OLED et d\'un rÃ©glage de la puissance de 5 Ã  30 watts. ', 29, 'https://www.lepetitvapoteur.com/25438-thickbox/kit-orchid-pod.jpg', '0', 5),
(56, 'Kit Musket Voopoo', 'Le kit Musket de chez Voopoo est une cigarette Ã©lectronique Ã  doubles accus trÃ¨s ergonomique et puissante de chez Voopoo.', 28, 'https://www.lepetitvapoteur.com/34824-thickbox/kit-musket-voopoo.jpg', '0', 3),
(57, 'Abyss AIO 60W Dovpo Suicide Mods', 'Le kit Abyss AIO est une cigarette Ã©lectronique tout-en-un (All-In-One) surprenante et trÃ¨s Ã©volutive.', 70, 'https://www.lepetitvapoteur.com/33591-thickbox/abyss-aio-60w-dovpo-suicide-mods.jpg', '0', 3),
(58, 'dotAIO V2 Dotmod', 'La dotAIO V2 de dotMod est une cigarette Ã©lectronique tout-en-un qui contient, dans un splendide boitier compact, un rÃ©servoir et une rÃ©sistance. ', 120, 'https://www.lepetitvapoteur.com/36288-thickbox/dotaio-v2-dotmod.jpg', '0', 4),
(59, 'Kit Target 200 Vaporesso', 'Avec le kit Target 200, Vaporesso propose une cigarette Ã©lectronique moderne et puissante au service de la vape aÃ©rienne.', 60, 'https://www.lepetitvapoteur.com/36126-thickbox/kit-target-200-vaporesso.jpg', '0', 1),
(60, 'Kit Target 80 Vaporesso', 'Pour une vape aux saveurs optimales et une vapeur dense, Vaporesso propose le kit Target 80. Un kit idÃ©al pour vapoter avec une bonne autonomie en inhalation directe.', 45, 'https://www.lepetitvapoteur.com/35295-thickbox/kit-target-80-vaporesso.jpg', '0', 1),
(61, 'dotAIO Mini Dotmod', 'Dotmod vous offre une excellente qualitÃ© de vape dans un format mini ! La dotAIO Mini vous propose une expÃ©rience en inhalation semi-directe ou indirecte.', 77, 'https://www.lepetitvapoteur.com/34791-thickbox/dotaio-mini-dotmod.jpg', '0', 3),
(62, 'Kit Luxe 2 Vaporesso', 'Le prestigieux kit de Vaporesso est de retour ! Le kit Luxe 2 est une cigarette Ã©lectronique pour vapoter en inhalation directe.', 47, 'https://www.lepetitvapoteur.com/30400-thickbox/kit-luxe-2-vaporesso.jpg', '0', 4),
(63, 'Kit DotStick Dotmod', 'Avec le kit DotStick, Dotmod renoue avec un grand classique de la cigarette Ã©lectronique.', 45, 'https://www.lepetitvapoteur.com/30335-thickbox/kit-dotstick-dotmod.jpg', '0', 3),
(64, 'Kit Stick P25', 'Le kit Stick P25 est une combinaison puissante conÃ§ue pour la production de vapeur et les \"tricks\" (ronds de vapeurs) !', 36, 'https://www.lepetitvapoteur.com/19179-thickbox/kit-stick-prince.jpg', '0', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `SecondName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `FirstName`, `SecondName`, `password`, `ID`) VALUES
('silva.kyllian@gmail.com', 'kyllian', 'silva', '1234567890', 50),
('alexis.fredriksen5@gmail.com', 'Alexis', 'FREDRIKSEN', 'coucou', 47),
('katia.studient@gmail.com', 'Katia', 'studient', 'coucou', 49);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
