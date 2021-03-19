-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 12:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategorije`
--

CREATE TABLE `kategorije` (
  `id` int(11) NOT NULL,
  `naziv` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategorije`
--

INSERT INTO `kategorije` (`id`, `naziv`) VALUES
(1, 'muski_parfem'),
(2, 'zenski_parfem');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(11) NOT NULL,
  `ime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sifra` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `ime`, `sifra`) VALUES
(1, 'Medina1', 'mojasifra'),
(2, 'Nekotamo', 'njegovasifra'),
(22, 'AdminMedina', 'AdminMedina');

-- --------------------------------------------------------

--
-- Table structure for table `korpe`
--

CREATE TABLE `korpe` (
  `id` int(11) NOT NULL,
  `datum_vreme` datetime NOT NULL,
  `kolicina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `korpe`
--

INSERT INTO `korpe` (`id`, `datum_vreme`, `kolicina`) VALUES
(31, '2021-01-19 02:28:59', 44272),
(32, '2021-01-19 02:30:23', 49228),
(33, '2021-01-19 02:32:55', 81408),
(34, '2021-01-19 02:33:38', 32180),
(35, '2021-01-19 17:42:01', 32180),
(36, '2021-01-19 17:59:28', 48270),
(37, '2021-01-19 17:59:30', 48270),
(38, '2021-01-19 17:59:31', 48270),
(39, '2021-01-19 19:40:38', 12390),
(40, '2021-01-19 19:41:32', 36570);

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `id` int(11) NOT NULL,
  `naziv` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cena` double NOT NULL,
  `slika` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategorija` int(11) NOT NULL,
  `kolicina` int(11) NOT NULL,
  `popust` int(11) NOT NULL,
  `id_korpe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`id`, `naziv`, `opis`, `cena`, `slika`, `kategorija`, `kolicina`, `popust`, `id_korpe`) VALUES
(1, 'Dior Sauvage EDT 100ML', 'Klasični sveži muški miris kuće Dior - Eau Sauvage iz 1966, ponovno je interpretiran u novom formatu, kao Eau Sauvage Cologne.  Za Eau Sauvage Cologne iskorišćene su stare fotografije i snimci francuskog glumca Alain Delona za reklamnu kampanju. Sveža citrusno – aromatična i drvena kompozicija započinje akordima kalabrijskog bergamota, mandarine i gorkog grejpa. ', 8590, 'photos/dior.jpg', 1, 5, 0, 0),
(2, 'Trussardi Uomo EDT 100ML\r\n', 'Novi Trussardi Uomo miris izražava sofisticiranu eleganciju. Moćne gornje note su italijanska mešavina limuna i bergamota, u kombinaciji sa galbanumom koji prelazi u srce sačinjeno od ljubičice i geranijuma. Muskatna žalfija pruža notu sofisticiranosti koja je pojačana luksuznom kožom i opojnim pačulijem. ', 12390, 'photos/trussardi.jpg', 1, 10, 4956, 0),
(3, 'Chloe Woman EDP 50ML', 'Ovaj svež i ženstven miris predstavlja slobodan duh koji širi vaše granice i podstiče prirodan miris šika kojim tako dobro odišete.', 11990, 'photos/chloe.jpg', 2, 7, 0, 0),
(4, 'Carolina Herrera Good Girl EDP 80ML', 'Good Girl je najsmeliji Carolina Herrera parfem, najprovokativniji do sada. Više od trideset godina, kuća Herrera kombinuje modu i mirise definisane neusiljenom elegancijom i sofisticiranošću koji odišu stilom Njujorka. Ovaj parfem je moćan koliko i senzualan. To je smela kombinacija tamnih i svetlih elemenata.', 16090, 'photos/herrera.jpg', 2, 10, 0, 0),
(5, 'Carolina Herrera Bad Boy Man EDT 100ML', 'Munja je simbol za lošeg momka (Bad Boy). Ona označava herojsku snagu i postaje alegorija njegove ličnosti: nepredvidive, neočekivane, neobične, fascinantne. Bad Boy zavodi i zarobljava sva čula brzo i precizno poput munje. Bady Boy je orijentalno aromatični parfem u kome se suprotstavljaju svežina žalfije i zelenog bergamota sa mešavinom paprike i mračnim tonovima biljke tonka, kakaoa i ćilibara. ', 11790, 'photos/bad.jpg', 1, 15, 0, 0),
(6, 'Coco Mademoiselle EDP 100ML', 'Coco Mademoiselle od Chanel je orijentalni cvjetni miris za žene. Coco Mademoiselle je predstavljen 2001. Parfem je kreirao Jacques Polge. Gornje note su Narandža, Mandarina, Bergamot i Cvijet narandže; srednje note su Turska ruža, jasmin, Mimoza (Acacia) i Ylang-Ylang; bazne note su pačuli, Bijeli mošus, Vanilija, vetiver, Mahune Tonke i Opoponaks.', 8040, 'photos/madm.jpg', 2, 9, 0, 0),
(7, 'Versace Eros set', '(EDT50+BSG50+ASB50)20\r\nVersace je lansirao Eros - miris inspirisan i duboko povezan sa grčkom mitologijom. Miris je nazvan po grčkom bogu ljubavi i sinu boginje Afrodite - Erosu. ', 8090, 'photos/set1.png', 1, 5, 5663, 0),
(8, 'Dolce&Gabana Light Blue Pour Femme set', '(EDT25+TR.10)20\r\nLight blue je  najsvežiji i najživahniji, neodoljiv kao i radost življenja. Pun je iznenađenja i mirisnog \"kolorita\". Ženstven i odlučan. Dubok i istinit.', 9090, 'photos/set2.png', 2, 4, 5990, 0),
(9, 'Dolce&Gabbana The One set for man', '(EDT100+ASB50+SG50)20\r\n„Posvećujemo The One for Men Dolce&Gabbana muškarcu: modernom i senzualnom kosmopoliti koji vodi računa o sebi i svom telu. Muškarac blagosloven urođenom harizmom i samopouzdanjem.“ Domenico Dolce i Stefano Gabbana', 12390, 'photos/set3.png', 1, 7, 7990, 0),
(10, 'Laura Biagiotti Romamor Donna ', '(EDT50+BL50)9\r\nRomamoR je spektakularan miris u svakom pogledu, savremeni odraz kultnog ROMA mirisa koji je Laura Biagiotti kreirala 1988. i koji je širom sveta poznat kao esencija svega italijanskog. ', 8490, 'photos/set4.png', 2, 3, 4245, 0),
(11, 'Miss Dior absolutley blooming EDP100ML', 'Miss Dior Absolutely Blooming je nova Diorova cvetna poslastica. Sveži, bogati, dugotrajni miris cvetnih latica zaogrnut slasnim notama crvenih bobica. Cvetna delicija koje se ne možete zasititi.', 18490, 'photos/ab.jpg', 2, 13, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `stavke_korpe`
--

CREATE TABLE `stavke_korpe` (
  `id` int(11) NOT NULL,
  `korpa_id` int(11) NOT NULL,
  `proizvod_id` int(11) NOT NULL,
  `cena` decimal(11,0) NOT NULL,
  `kolicina` int(11) NOT NULL,
  `naziv` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stavke_korpe`
--

INSERT INTO `stavke_korpe` (`id`, `korpa_id`, `proizvod_id`, `cena`, `kolicina`, `naziv`) VALUES
(64, 32, 2, '4956', 3, ''),
(65, 32, 1, '8590', 4, ''),
(66, 33, 2, '4956', 3, ''),
(67, 33, 1, '8590', 4, ''),
(68, 33, 4, '16090', 2, ''),
(69, 34, 4, '16090', 2, ''),
(70, 35, 4, '16090', 2, ''),
(71, 36, 4, '16090', 3, ''),
(72, 37, 4, '16090', 3, ''),
(73, 38, 4, '16090', 3, ''),
(74, 39, 2, '12390', 1, ''),
(75, 40, 2, '12390', 2, ''),
(76, 40, 5, '11790', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategorije`
--
ALTER TABLE `kategorije`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korpe`
--
ALTER TABLE `korpe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategorija` (`kategorija`);

--
-- Indexes for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `korpa_id` (`korpa_id`),
  ADD KEY `proizvod_id` (`proizvod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategorije`
--
ALTER TABLE `kategorije`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `korpe`
--
ALTER TABLE `korpe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `proizvodi`
--
ALTER TABLE `proizvodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD CONSTRAINT `proizvodi_ibfk_1` FOREIGN KEY (`kategorija`) REFERENCES `kategorije` (`id`);

--
-- Constraints for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  ADD CONSTRAINT `stavke_korpe_ibfk_1` FOREIGN KEY (`korpa_id`) REFERENCES `korpe` (`id`),
  ADD CONSTRAINT `stavke_korpe_ibfk_2` FOREIGN KEY (`proizvod_id`) REFERENCES `proizvodi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
