-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 12, 2024 at 05:18 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `steam`
--
CREATE DATABASE IF NOT EXISTS `steam` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci;
USE `steam`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `developers`
--

CREATE TABLE `developers` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `LOGO_URL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `developers`
--

INSERT INTO `developers` (`ID`, `NAME`, `LOGO_URL`) VALUES
(1, 'NetherRealm Studios', 'https://store.steampowered.com/developer/WBGames/'),
(2, 'Playground Games', 'https://store.steampowered.com/developer/XboxGameStudios'),
(3, 'Valve', 'https://store.steampowered.com/developer/valve'),
(4, 'CD PROJEKT RED', 'https://store.steampowered.com/developer/CDPR'),
(5, 'Infinity Ward', ''),
(6, 'VOID Interactive', ''),
(7, 'SCS Software', 'https://store.steampowered.com/developer/SCSsoftware/'),
(8, 'Respawn Entertainment', 'https://store.steampowered.com/developer/respawn'),
(9, 'Colossal Order Ltd.', 'https://store.steampowered.com/developer/paradoxinteractive'),
(10, 'Blizzard Entertainment, Inc.', 'https://store.steampowered.com/developer/Blizzard'),
(11, 'VECTOR INTERACTIVE', ''),
(12, 'EA Canada & EA Romania', ''),
(13, 'Giants Software', ''),
(14, 'Rockstar North', 'https://store.steampowered.com/developer/rockstargames'),
(15, 'Rockstar Games', 'https://store.steampowered.com/developer/rockstargames'),
(16, 'Introversion Software', 'https://store.steampowered.com/developer/Introversion'),
(17, 'Santa Monica Studio', 'https://store.steampowered.com/developer/playstationstudios');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `game`
--

CREATE TABLE `game` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(255) DEFAULT NULL,
  `DESCRIPTION` text DEFAULT NULL,
  `DEVELOPERS` varchar(255) NOT NULL,
  `PUBLISHERS` varchar(255) NOT NULL,
  `PREMIERE_DATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`ID`, `TITLE`, `DESCRIPTION`, `DEVELOPERS`, `PUBLISHERS`, `PREMIERE_DATE`) VALUES
(1, 'Mortal Kombat 11', NULL, 'NetherRealm Studios', 'Warner Bros. Games', '2019-04-23'),
(2, 'Forza Horizon 5', NULL, 'Playground Games', 'Xbox Game Studios', '2021-11-01'),
(3, 'Counter Strike 2', NULL, 'Valve', 'Valve', '2023-09-27'),
(4, 'Call of Duty: Modern Warfare', NULL, 'Infinity Ward', 'Activision', '2019-10-25'),
(5, 'Call of Duty: Modern Warfare 2', NULL, 'Infinity Ward', 'Activision', '2022-09-24'),
(6, 'Ready or Not', NULL, 'VOID Interactive', 'VOID Interactive', '2021-12-17'),
(7, 'Euro Truck Simulator 2', NULL, 'SCS Software', 'SCS Software', '2012-10-19'),
(8, 'Titanfall 2', NULL, 'Respawn Entertainment', 'Electronic Arts', '2016-10-28'),
(9, 'Cities: Skylines', NULL, 'Colossal Order Ltd.', 'Paradox Interactive', '2015-03-10'),
(10, 'Diablo IV', NULL, 'Blizzard Entertainment, Inc.', 'Blizzard Entertainment, Inc.', '2023-06-05'),
(11, 'Cyberpunk 2077', NULL, 'CD PROJEKT RED', 'CD PROJEKT RED', '2020-12-10'),
(12, 'OPERATOR', NULL, 'VECTOR INTERACTIVE', 'VECTOR INTERACTIVE', '2023-08-01'),
(13, 'EA SPORTS FC™ 25', NULL, 'EA Canada & EA Romania', 'Electronic Arts', '2024-09-27'),
(14, 'Farming Simulator 22', NULL, 'Giants Software', 'Giants Software', '2021-11-22'),
(15, 'Wiedźmin 3: Dziki Gon', NULL, 'CD Projekt Red', 'CD Projekt Red', '2015-05-18'),
(16, 'Grand Theft Auto V', NULL, 'Rockstar North', 'Rockstar Games', '2015-04-14'),
(17, 'Red Dead Redemption 2', NULL, 'Rockstar Games', 'Rockstar Games', '2019-12-05'),
(18, 'Prison Architect', NULL, 'Introversion Software', 'Paradox Interactive', '2015-10-06'),
(19, 'EA SPORTS™ FIFA 23', NULL, 'EA Canada & EA Romania', 'Electronic Arts', '2022-09-30'),
(20, 'God of War Ragnarök', NULL, 'Santa Monica Studio', 'PlayStation Publishing LLC', '2024-09-19');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `game_library`
--

CREATE TABLE `game_library` (
  `ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `GAME_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_library`
--

INSERT INTO `game_library` (`ID`, `USER_ID`, `GAME_ID`) VALUES
(1, 1, 3),
(2, 1, 4),
(3, 2, 9),
(4, 2, 7),
(5, 3, 1),
(6, 3, 8);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `game_tags`
--

CREATE TABLE `game_tags` (
  `ID` int(11) NOT NULL,
  `GAME_ID` int(11) NOT NULL,
  `TAG_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_tags`
--

INSERT INTO `game_tags` (`ID`, `GAME_ID`, `TAG_ID`) VALUES
(1, 1, 8),
(2, 1, 9),
(3, 1, 10),
(4, 1, 6),
(5, 2, 2),
(6, 2, 11),
(7, 2, 12),
(8, 2, 13),
(9, 1, 2),
(10, 3, 1),
(11, 3, 2),
(12, 3, 4),
(13, 3, 5),
(14, 3, 6),
(15, 3, 7),
(16, 4, 2),
(17, 4, 6),
(18, 4, 4),
(19, 5, 2),
(20, 5, 4),
(21, 5, 6),
(22, 6, 2),
(23, 6, 4),
(24, 6, 5),
(25, 7, 1),
(26, 7, 2),
(27, 7, 3),
(28, 7, 13),
(29, 8, 2),
(30, 8, 4),
(31, 8, 5),
(32, 8, 6),
(33, 11, 2),
(34, 11, 4),
(35, 11, 12);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `publishers`
--

CREATE TABLE `publishers` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `LOGO_URL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`ID`, `NAME`, `LOGO_URL`) VALUES
(1, 'Warner Bros. Games', 'https://store.steampowered.com/publisher/WBGames'),
(2, 'Xbox Game Studios', 'https://store.steampowered.com/publisher/XboxGameStudios'),
(3, 'Valve', 'https://store.steampowered.com/publisher/valve'),
(4, 'Activision', ''),
(5, 'VOID Interactive', ''),
(6, 'SCS Software', 'https://store.steampowered.com/publisher/SCSsoftware'),
(7, 'Electronic Arts', 'https://store.steampowered.com/publisher/EA'),
(8, 'Paradox Interactive', 'https://store.steampowered.com/publisher/paradoxinteractive'),
(9, 'Blizzard Entertainment, Inc.', ''),
(10, 'CD PROJEKT RED', 'https://store.steampowered.com/publisher/CDPR'),
(11, 'VECTOR INTERACTIVE', ''),
(12, 'Giants Software', ''),
(13, 'Rockstar Games', 'https://store.steampowered.com/publisher/rockstargames'),
(14, 'Paradox Interactive', 'https://store.steampowered.com/publisher/paradoxinteractive'),
(15, 'Paradox Interactive', 'https://store.steampowered.com/publisher/paradoxinteractive'),
(16, 'PlayStation Publishing LLC', 'https://store.steampowered.com/publisher/playstationstudios');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reviews`
--

CREATE TABLE `reviews` (
  `ID` int(11) NOT NULL,
  `GAME_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `RATE` tinyint(1) NOT NULL,
  `REVIEWS_DATE` date DEFAULT NULL,
  `REVIEW` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`ID`, `GAME_ID`, `USER_ID`, `RATE`, `REVIEWS_DATE`, `REVIEW`) VALUES
(1, 1, 1, 0, '2019-04-30', 'Good game'),
(2, 1, 2, 1, '2020-02-15', 'Bad game'),
(3, 2, 3, 0, '2021-12-14', 'Good game'),
(4, 2, 4, 1, '2022-05-05', 'Bad game'),
(5, 3, 5, 0, '2023-10-27', 'Good game'),
(6, 3, 6, 1, '2023-11-12', 'Bad game'),
(7, 4, 7, 0, '2019-11-25', 'Good game'),
(8, 4, 8, 1, '2020-03-17', 'Bad game'),
(9, 5, 9, 0, '2022-10-24', 'Good game'),
(10, 5, 10, 1, '2023-04-02', 'Bad game'),
(11, 6, 11, 0, '2021-12-31', 'Good game'),
(12, 6, 12, 1, '2022-02-15', 'Bad game'),
(13, 7, 13, 0, '2012-11-28', 'Good game'),
(14, 7, 14, 1, '2014-07-19', 'Bad game'),
(15, 8, 15, 0, '2016-12-01', 'Good game'),
(16, 8, 16, 1, '2018-04-16', 'Bad game'),
(17, 9, 17, 0, '2015-05-04', 'Good game'),
(18, 9, 18, 1, '2018-06-10', 'Bad game'),
(19, 10, 19, 0, '2023-08-05', 'Good game'),
(20, 10, 20, 1, '2024-06-28', 'Bad game'),
(21, 11, 21, 0, '2021-01-15', 'Good game'),
(22, 11, 22, 1, '2021-03-17', 'Bad game'),
(23, 12, 23, 0, '2023-09-07', 'Good game'),
(24, 12, 24, 1, '2023-11-20', 'Bad game'),
(25, 13, 25, 0, '2024-09-23', 'Good game'),
(26, 13, 26, 1, '2024-09-24', 'Bad game'),
(27, 14, 27, 0, '2021-12-18', 'Good game'),
(28, 14, 28, 1, '2022-02-16', 'Bad game'),
(29, 15, 29, 0, '2015-06-20', 'Good game'),
(30, 15, 30, 1, '2016-03-20', 'Bad game'),
(31, 16, 31, 0, '2015-04-23', 'Good game'),
(32, 16, 32, 1, '2016-08-20', 'Bad game'),
(33, 17, 33, 0, '2019-12-25', 'Good game'),
(34, 17, 34, 1, '2020-06-27', 'Bad game'),
(35, 18, 35, 0, '2015-10-26', 'Good game'),
(36, 18, 36, 1, '2015-12-06', 'Bad game'),
(37, 19, 37, 0, '2022-10-10', 'Good game'),
(38, 19, 38, 1, '2022-11-27', 'Bad game'),
(39, 20, 39, 0, '2024-09-20', 'Good game'),
(40, 20, 40, 1, '2024-09-24', 'Bad game'),
(49, 2, 30, 1, '2023-01-01', 'Cudowna fabuła, ale technicznie gra wymaga poprawek. Warto poczekać na aktualizacje.'),
(50, 2, 27, 0, '2022-01-03', 'Klimatyczna oprawa dźwiękowa. Zagadki dobrze przemyślane, ale sterowanie mogłoby być bardziej intuicyjne.'),
(51, 2, 16, 0, '2022-01-05', 'Gra wciągająca na wiele godzin! Świetny system rozwoju postaci. Jedyny minus to czasem długie ekrany ładowania.'),
(52, 2, 50, 0, '2022-01-08', 'Mistrzowsko napisane dialogi i ciekawe postacie. Brakuje jednak większej różnorodności w misjach pobocznych.'),
(53, 2, 12, 0, '2022-01-11', 'Tryb multiplayer to czysta przyjemność, ale serwery bywają przeciążone. Mimo to zabawa w zespole jest świetna.'),
(54, 2, 70, 0, '2022-01-14', 'Graficznie gra prezentuje się rewelacyjnie, ale optymalizacja kuleje na słabszych komputerach.'),
(55, 2, 35, 0, '2022-01-16', 'Fabuła trzyma w napięciu od początku do końca. System walki jest dynamiczny, ale wymaga sporo treningu.'),
(56, 2, 80, 1, '2022-01-19', 'Ciekawy świat, ale momentami wydaje się pusty. Twórcy mogli dodać więcej interakcji z otoczeniem.'),
(57, 2, 100, 0, '2022-01-22', 'Doskonałe efekty wizualne i animacje, choć miejscami odczuwa się spadki klatek.'),
(58, 2, 127, 0, '2022-01-25', 'Gra oferuje dużo możliwości personalizacji, co bardzo mi się podoba. Brakuje jednak trybu kooperacji.'),
(59, 2, 69, 1, '2022-01-27', 'Rozgrywka ciekawa, ale AI przeciwników pozostawia wiele do życzenia – niekiedy zachowują się bardzo przewidywalnie.'),
(60, 2, 78, 0, '2022-01-30', 'Świetna muzyka, która idealnie buduje klimat. Misje główne są satysfakcjonujące, choć brakuje ich różnorodności.'),
(61, 2, 50, 1, '2022-02-02', 'Otwarty świat zachwyca, ale fabuła mogłaby być bardziej angażująca. Zbyt mało emocji w dialogach.'),
(62, 2, 51, 0, '2022-02-05', 'Bardzo przyjemna rozgrywka dla fanów strategii. Wymaga myślenia, ale bywa trochę za wolna dla dynamicznych graczy.'),
(63, 2, 43, 0, '2022-02-08', 'Świetne połączenie fabuły i rozgrywki. Grafika mogłaby być lepsza, ale nadrabia to klimat.'),
(64, 2, 150, 0, '2022-02-11', 'System craftingu bardzo rozbudowany, co dodaje grze głębi. Trochę brakuje jednak wsparcia dla modów.'),
(65, 2, 200, 1, '2022-02-13', 'Gra działa świetnie na konsolach, ale na PC napotkałem kilka problemów z wydajnością.'),
(66, 2, 199, 0, '2022-02-16', 'Fenomenalna oprawa graficzna, a do tego dobrze napisane postacie. Fabuła jednak rozwija się zbyt wolno.'),
(67, 2, 12, 0, '2022-02-22', 'Historia bardzo poruszająca, ale zakończenie nieco rozczarowuje. Muzyka jest jedną z najmocniejszych stron.'),
(68, 2, 145, 0, '2022-02-24', 'Dobrze zrealizowane misje poboczne. Grafika robi wrażenie, chociaż model jazdy pojazdami pozostawia wiele do życzenia.'),
(69, 2, 123, 0, '2022-02-27', 'Dialogi świetnie napisane, ale interfejs użytkownika jest trochę przestarzały.'),
(70, 2, 76, 1, '2022-03-02', 'Każda postać ma unikalny styl walki, co urozmaica grę. Szkoda tylko, że zakończenie jest przewidywalne.'),
(71, 2, 39, 0, '2022-03-04', 'Gra oferuje wiele opcji rozwoju bohatera, ale brakuje balansu pomiędzy różnymi ścieżkami. Jednak ogólnie to dobry tytuł.'),
(72, 2, 178, 0, '2022-03-07', 'Świetnie zoptymalizowana gra, nawet na starszych maszynach działa płynnie. Tryb fabularny bardzo wciągający.'),
(73, 2, 89, 0, '2022-03-10', 'Doskonała gra na krótkie sesje. Bardzo wciągająca, ale z czasem staje się powtarzalna.'),
(74, 2, 132, 0, '2022-03-12', 'Multiplayer działa bez zarzutu, ale solo gra nie oferuje takiej samej frajdy. Rekomenduję grę ze znajomymi.'),
(75, 2, 55, 0, '2022-03-15', 'Fabuła mocno angażująca, zwroty akcji zaskakujące. Graficznie piękna, ale wymaga potężnego sprzętu.'),
(76, 2, 44, 0, '2022-03-18', 'Prosty system walki, ale dużo opcji taktycznych. Świetna gra, jeśli lubisz analizować każdy ruch.'),
(77, 2, 33, 0, '2022-03-21', 'Fantastyczna narracja, ale przeciągające się przerywniki filmowe mogą męczyć. Rozgrywka bardzo satysfakcjonująca.'),
(78, 2, 60, 0, '2022-03-24', 'Dynamiczne i ekscytujące walki, choć AI drużyny mogłoby być lepsze. Polecam dla fanów akcji.'),
(79, 2, 99, 0, '2022-03-27', 'Gra zaskakuje swoją głębią, jednak interfejs bywa chaotyczny. System rozwoju bohatera świetnie przemyślany.'),
(80, 2, 155, 0, '2022-03-30', 'Oprawa audio na najwyższym poziomie, choć niektóre dźwięki bywają powtarzalne. Fabuła ciekawa, ale krótkawa.'),
(81, 2, 166, 1, '2022-04-02', 'Solidna gra dla fanów gatunku, choć może być trudna do opanowania na początku. Grafika mogłaby być bardziej dopracowana.'),
(82, 2, 77, 0, '2022-04-04', 'Bardzo dobrze zrealizowany świat, ale fabuła trochę przyćmiewa inne elementy. Gra zasługuje na uwagę.'),
(83, 2, 177, 0, '2022-04-07', 'Twórcy postarali się o realistyczną fizykę, co dodaje grze autentyczności. Niestety, brakuje niektórych opcji modyfikacji.'),
(84, 2, 45, 0, '2022-04-09', 'Gra oferuje dużo frajdy, zwłaszcza w trybie wieloosobowym. Wersja na konsolę działa lepiej niż na PC.'),
(85, 2, 156, 0, '2022-04-12', 'Każda misja oferuje coś nowego, co sprawia, że gra się nie nudzi. System lootu jest jednym z najlepszych, jakie widziałem.'),
(86, 2, 152, 0, '2022-04-14', 'Genialny system walki i świetnie zrealizowany świat. Grafika stoi na wysokim poziomie, choć czasem widoczne są niedociągnięcia.'),
(87, 2, 111, 0, '2022-04-17', 'Zaskakująca fabuła, ale końcowy boss okazał się rozczarowaniem. Mimo wszystko polecam dla fanów RPG.'),
(88, 2, 134, 1, '2022-04-20', 'Gra wciągająca, choć miejscami zbyt liniowa. Grafika jest ładna, ale animacje postaci trochę drętwe.'),
(89, 2, 148, 0, '2022-04-22', 'Gra świetna na krótkie sesje, ale w dłuższej perspektywie zaczyna się powtarzać. Fajny system craftingowy.'),
(90, 2, 176, 0, '2022-04-25', 'Świetnie zbalansowane poziomy trudności. Każda walka wymaga myślenia i strategii. Gorzej z optymalizacją.'),
(91, 2, 188, 0, '2022-04-28', 'Multiplayer to czysta przyjemność. Bardzo dynamiczna rozgrywka, choć gra solo traci na wartości.'),
(92, 2, 133, 0, '2022-04-30', 'Zróżnicowanie misji sprawia, że gra nie nudzi się szybko. Postacie dobrze napisane, ale fabuła chwilami rozwlekła.'),
(93, 2, 88, 0, '2022-05-03', 'Cudowna fabuła, ale technicznie gra wymaga poprawek. Warto poczekać na aktualizacje.'),
(94, 2, 189, 0, '2022-05-06', 'Bardzo dobra mechanika walki, która wymaga sporo umiejętności. AI czasami za bardzo przewidywalne.'),
(95, 2, 130, 0, '2022-05-08', 'Grafika na wysokim poziomie, ale to fabuła kradnie show. Postacie bardzo realistyczne i pełne emocji.'),
(96, 2, 120, 0, '2022-05-11', 'Doskonały soundtrack i piękna oprawa graficzna. Gra wymaga cierpliwości, ale satysfakcja jest ogromna.'),
(97, 2, 30, 0, '2022-05-14', 'Bardzo przyjemna gra, szczególnie jeśli lubisz otwarte światy. Fabuła niestety trochę zbyt liniowa na mój gust.'),
(98, 2, 30, 1, '2023-01-01', 'Cudowna fabuła, ale technicznie gra wymaga poprawek. Warto poczekać na aktualizacje.'),
(99, 2, 27, 0, '2022-01-03', 'Klimatyczna oprawa dźwiękowa. Zagadki dobrze przemyślane, ale sterowanie mogłoby być bardziej intuicyjne.'),
(100, 2, 16, 0, '2022-01-05', 'Gra wciągająca na wiele godzin! Świetny system rozwoju postaci. Jedyny minus to czasem długie ekrany ładowania.'),
(101, 2, 50, 0, '2022-01-08', 'Mistrzowsko napisane dialogi i ciekawe postacie. Brakuje jednak większej różnorodności w misjach pobocznych.'),
(102, 2, 12, 0, '2022-01-11', 'Tryb multiplayer to czysta przyjemność, ale serwery bywają przeciążone. Mimo to zabawa w zespole jest świetna.'),
(103, 2, 70, 0, '2022-01-14', 'Graficznie gra prezentuje się rewelacyjnie, ale optymalizacja kuleje na słabszych komputerach.'),
(104, 2, 35, 0, '2022-01-16', 'Fabuła trzyma w napięciu od początku do końca. System walki jest dynamiczny, ale wymaga sporo treningu.'),
(105, 2, 80, 1, '2022-01-19', 'Ciekawy świat, ale momentami wydaje się pusty. Twórcy mogli dodać więcej interakcji z otoczeniem.'),
(106, 2, 100, 0, '2022-01-22', 'Doskonałe efekty wizualne i animacje, choć miejscami odczuwa się spadki klatek.'),
(107, 2, 127, 0, '2022-01-25', 'Gra oferuje dużo możliwości personalizacji, co bardzo mi się podoba. Brakuje jednak trybu kooperacji.'),
(108, 2, 69, 1, '2022-01-27', 'Rozgrywka ciekawa, ale AI przeciwników pozostawia wiele do życzenia – niekiedy zachowują się bardzo przewidywalnie.'),
(109, 2, 78, 0, '2022-01-30', 'Świetna muzyka, która idealnie buduje klimat. Misje główne są satysfakcjonujące, choć brakuje ich różnorodności.'),
(110, 2, 50, 1, '2022-02-02', 'Otwarty świat zachwyca, ale fabuła mogłaby być bardziej angażująca. Zbyt mało emocji w dialogach.'),
(111, 2, 51, 0, '2022-02-05', 'Bardzo przyjemna rozgrywka dla fanów strategii. Wymaga myślenia, ale bywa trochę za wolna dla dynamicznych graczy.'),
(112, 2, 43, 0, '2022-02-08', 'Świetne połączenie fabuły i rozgrywki. Grafika mogłaby być lepsza, ale nadrabia to klimat.'),
(113, 2, 150, 0, '2022-02-11', 'System craftingu bardzo rozbudowany, co dodaje grze głębi. Trochę brakuje jednak wsparcia dla modów.'),
(114, 2, 200, 1, '2022-02-13', 'Gra działa świetnie na konsolach, ale na PC napotkałem kilka problemów z wydajnością.'),
(115, 2, 199, 0, '2022-02-16', 'Fenomenalna oprawa graficzna, a do tego dobrze napisane postacie. Fabuła jednak rozwija się zbyt wolno.'),
(116, 2, 36, 0, '2022-02-19', 'Mechanika walki jest prosta, ale daje satysfakcję. Świetny system poziomów, który zachęca do dalszej gry.'),
(117, 2, 12, 0, '2022-02-22', 'Historia bardzo poruszająca, ale zakończenie nieco rozczarowuje. Muzyka jest jedną z najmocniejszych stron.'),
(118, 2, 145, 0, '2022-02-24', 'Dobrze zrealizowane misje poboczne. Grafika robi wrażenie, chociaż model jazdy pojazdami pozostawia wiele do życzenia.'),
(119, 2, 123, 0, '2022-02-27', 'Dialogi świetnie napisane, ale interfejs użytkownika jest trochę przestarzały.'),
(120, 2, 76, 1, '2022-03-02', 'Każda postać ma unikalny styl walki, co urozmaica grę. Szkoda tylko, że zakończenie jest przewidywalne.'),
(121, 2, 39, 0, '2022-03-04', 'Gra oferuje wiele opcji rozwoju bohatera, ale brakuje balansu pomiędzy różnymi ścieżkami. Jednak ogólnie to dobry tytuł.'),
(122, 2, 178, 0, '2022-03-07', 'Świetnie zoptymalizowana gra, nawet na starszych maszynach działa płynnie. Tryb fabularny bardzo wciągający.'),
(123, 2, 89, 0, '2022-03-10', 'Doskonała gra na krótkie sesje. Bardzo wciągająca, ale z czasem staje się powtarzalna.'),
(124, 2, 132, 0, '2022-03-12', 'Multiplayer działa bez zarzutu, ale solo gra nie oferuje takiej samej frajdy. Rekomenduję grę ze znajomymi.'),
(125, 2, 55, 0, '2022-03-15', 'Fabuła mocno angażująca, zwroty akcji zaskakujące. Graficznie piękna, ale wymaga potężnego sprzętu.'),
(126, 2, 44, 0, '2022-03-18', 'Prosty system walki, ale dużo opcji taktycznych. Świetna gra, jeśli lubisz analizować każdy ruch.'),
(127, 2, 33, 0, '2022-03-21', 'Fantastyczna narracja, ale przeciągające się przerywniki filmowe mogą męczyć. Rozgrywka bardzo satysfakcjonująca.'),
(128, 2, 60, 0, '2022-03-24', 'Dynamiczne i ekscytujące walki, choć AI drużyny mogłoby być lepsze. Polecam dla fanów akcji.'),
(129, 2, 99, 0, '2022-03-27', 'Gra zaskakuje swoją głębią, jednak interfejs bywa chaotyczny. System rozwoju bohatera świetnie przemyślany.'),
(130, 2, 155, 0, '2022-03-30', 'Oprawa audio na najwyższym poziomie, choć niektóre dźwięki bywają powtarzalne. Fabuła ciekawa, ale krótkawa.'),
(131, 2, 166, 1, '2022-04-02', 'Solidna gra dla fanów gatunku, choć może być trudna do opanowania na początku. Grafika mogłaby być bardziej dopracowana.'),
(132, 2, 77, 0, '2022-04-04', 'Bardzo dobrze zrealizowany świat, ale fabuła trochę przyćmiewa inne elementy. Gra zasługuje na uwagę.'),
(133, 2, 177, 0, '2022-04-07', 'Twórcy postarali się o realistyczną fizykę, co dodaje grze autentyczności. Niestety, brakuje niektórych opcji modyfikacji.'),
(134, 2, 45, 0, '2022-04-09', 'Gra oferuje dużo frajdy, zwłaszcza w trybie wieloosobowym. Wersja na konsolę działa lepiej niż na PC.'),
(135, 2, 156, 0, '2022-04-12', 'Każda misja oferuje coś nowego, co sprawia, że gra się nie nudzi. System lootu jest jednym z najlepszych, jakie widziałem.'),
(136, 2, 152, 0, '2022-04-14', 'Genialny system walki i świetnie zrealizowany świat. Grafika stoi na wysokim poziomie, choć czasem widoczne są niedociągnięcia.'),
(137, 2, 111, 0, '2022-04-17', 'Zaskakująca fabuła, ale końcowy boss okazał się rozczarowaniem. Mimo wszystko polecam dla fanów RPG.'),
(138, 2, 134, 1, '2022-04-20', 'Gra wciągająca, choć miejscami zbyt liniowa. Grafika jest ładna, ale animacje postaci trochę drętwe.'),
(139, 2, 148, 0, '2022-04-22', 'Gra świetna na krótkie sesje, ale w dłuższej perspektywie zaczyna się powtarzać. Fajny system craftingowy.'),
(140, 2, 176, 0, '2022-04-25', 'Świetnie zbalansowane poziomy trudności. Każda walka wymaga myślenia i strategii. Gorzej z optymalizacją.'),
(141, 2, 188, 0, '2022-04-28', 'Multiplayer to czysta przyjemność. Bardzo dynamiczna rozgrywka, choć gra solo traci na wartości.'),
(142, 2, 133, 0, '2022-04-30', 'Zróżnicowanie misji sprawia, że gra nie nudzi się szybko. Postacie dobrze napisane, ale fabuła chwilami rozwlekła.'),
(143, 2, 88, 0, '2022-05-03', 'Cudowna fabuła, ale technicznie gra wymaga poprawek. Warto poczekać na aktualizacje.'),
(144, 2, 189, 0, '2022-05-06', 'Bardzo dobra mechanika walki, która wymaga sporo umiejętności. AI czasami za bardzo przewidywalne.'),
(145, 2, 130, 0, '2022-05-08', 'Grafika na wysokim poziomie, ale to fabuła kradnie show. Postacie bardzo realistyczne i pełne emocji.'),
(146, 2, 120, 0, '2022-05-11', 'Doskonały soundtrack i piękna oprawa graficzna. Gra wymaga cierpliwości, ale satysfakcja jest ogromna.'),
(147, 2, 30, 0, '2022-05-14', 'Bardzo przyjemna gra, szczególnie jeśli lubisz otwarte światy. Fabuła niestety trochę zbyt liniowa na mój gust.'),
(148, 4, 30, 1, '2023-01-01', 'Cudowna fabuła, ale technicznie gra wymaga poprawek. Warto poczekać na aktualizacje.'),
(149, 4, 27, 0, '2022-01-03', 'Klimatyczna oprawa dźwiękowa. Zagadki dobrze przemyślane, ale sterowanie mogłoby być bardziej intuicyjne.'),
(150, 4, 16, 0, '2022-01-05', 'Gra wciągająca na wiele godzin! Świetny system rozwoju postaci. Jedyny minus to czasem długie ekrany ładowania.'),
(151, 4, 50, 0, '2022-01-08', 'Mistrzowsko napisane dialogi i ciekawe postacie. Brakuje jednak większej różnorodności w misjach pobocznych.'),
(152, 4, 12, 0, '2022-01-11', 'Tryb multiplayer to czysta przyjemność, ale serwery bywają przeciążone. Mimo to zabawa w zespole jest świetna.'),
(153, 4, 70, 0, '2022-01-14', 'Graficznie gra prezentuje się rewelacyjnie, ale optymalizacja kuleje na słabszych komputerach.'),
(154, 4, 35, 0, '2022-01-16', 'Fabuła trzyma w napięciu od początku do końca. System walki jest dynamiczny, ale wymaga sporo treningu.'),
(155, 4, 80, 1, '2022-01-19', 'Ciekawy świat, ale momentami wydaje się pusty. Twórcy mogli dodać więcej interakcji z otoczeniem.'),
(156, 4, 100, 0, '2022-01-22', 'Doskonałe efekty wizualne i animacje, choć miejscami odczuwa się spadki klatek.'),
(157, 4, 127, 0, '2022-01-25', 'Gra oferuje dużo możliwości personalizacji, co bardzo mi się podoba. Brakuje jednak trybu kooperacji.'),
(158, 4, 69, 1, '2022-01-27', 'Rozgrywka ciekawa, ale AI przeciwników pozostawia wiele do życzenia – niekiedy zachowują się bardzo przewidywalnie.'),
(159, 4, 78, 0, '2022-01-30', 'Świetna muzyka, która idealnie buduje klimat. Misje główne są satysfakcjonujące, choć brakuje ich różnorodności.'),
(160, 4, 50, 1, '2022-02-02', 'Otwarty świat zachwyca, ale fabuła mogłaby być bardziej angażująca. Zbyt mało emocji w dialogach.'),
(161, 4, 51, 0, '2022-02-05', 'Bardzo przyjemna rozgrywka dla fanów strategii. Wymaga myślenia, ale bywa trochę za wolna dla dynamicznych graczy.'),
(162, 4, 43, 0, '2022-02-08', 'Świetne połączenie fabuły i rozgrywki. Grafika mogłaby być lepsza, ale nadrabia to klimat.'),
(163, 4, 150, 0, '2022-02-11', 'System craftingu bardzo rozbudowany, co dodaje grze głębi. Trochę brakuje jednak wsparcia dla modów.'),
(164, 4, 200, 1, '2022-02-13', 'Gra działa świetnie na konsolach, ale na PC napotkałem kilka problemów z wydajnością.'),
(165, 4, 199, 0, '2022-02-16', 'Fenomenalna oprawa graficzna, a do tego dobrze napisane postacie. Fabuła jednak rozwija się zbyt wolno.'),
(166, 4, 36, 0, '2022-02-19', 'Mechanika walki jest prosta, ale daje satysfakcję. Świetny system poziomów, który zachęca do dalszej gry.'),
(167, 4, 12, 0, '2022-02-22', 'Historia bardzo poruszająca, ale zakończenie nieco rozczarowuje. Muzyka jest jedną z najmocniejszych stron.'),
(168, 4, 145, 0, '2022-02-24', 'Dobrze zrealizowane misje poboczne. Grafika robi wrażenie, chociaż model jazdy pojazdami pozostawia wiele do życzenia.'),
(169, 4, 123, 0, '2022-02-27', 'Dialogi świetnie napisane, ale interfejs użytkownika jest trochę przestarzały.'),
(170, 4, 76, 1, '2022-03-02', 'Każda postać ma unikalny styl walki, co urozmaica grę. Szkoda tylko, że zakończenie jest przewidywalne.'),
(171, 4, 39, 0, '2022-03-04', 'Gra oferuje wiele opcji rozwoju bohatera, ale brakuje balansu pomiędzy różnymi ścieżkami. Jednak ogólnie to dobry tytuł.'),
(172, 4, 178, 0, '2022-03-07', 'Świetnie zoptymalizowana gra, nawet na starszych maszynach działa płynnie. Tryb fabularny bardzo wciągający.'),
(173, 4, 89, 0, '2022-03-10', 'Doskonała gra na krótkie sesje. Bardzo wciągająca, ale z czasem staje się powtarzalna.'),
(174, 4, 132, 0, '2022-03-12', 'Multiplayer działa bez zarzutu, ale solo gra nie oferuje takiej samej frajdy. Rekomenduję grę ze znajomymi.'),
(175, 4, 55, 0, '2022-03-15', 'Fabuła mocno angażująca, zwroty akcji zaskakujące. Graficznie piękna, ale wymaga potężnego sprzętu.'),
(176, 4, 44, 0, '2022-03-18', 'Prosty system walki, ale dużo opcji taktycznych. Świetna gra, jeśli lubisz analizować każdy ruch.'),
(177, 4, 33, 0, '2022-03-21', 'Fantastyczna narracja, ale przeciągające się przerywniki filmowe mogą męczyć. Rozgrywka bardzo satysfakcjonująca.'),
(178, 4, 60, 0, '2022-03-24', 'Dynamiczne i ekscytujące walki, choć AI drużyny mogłoby być lepsze. Polecam dla fanów akcji.'),
(179, 4, 99, 0, '2022-03-27', 'Gra zaskakuje swoją głębią, jednak interfejs bywa chaotyczny. System rozwoju bohatera świetnie przemyślany.'),
(180, 4, 155, 0, '2022-03-30', 'Oprawa audio na najwyższym poziomie, choć niektóre dźwięki bywają powtarzalne. Fabuła ciekawa, ale krótkawa.'),
(181, 4, 166, 1, '2022-04-02', 'Solidna gra dla fanów gatunku, choć może być trudna do opanowania na początku. Grafika mogłaby być bardziej dopracowana.'),
(182, 4, 77, 0, '2022-04-04', 'Bardzo dobrze zrealizowany świat, ale fabuła trochę przyćmiewa inne elementy. Gra zasługuje na uwagę.'),
(183, 4, 177, 0, '2022-04-07', 'Twórcy postarali się o realistyczną fizykę, co dodaje grze autentyczności. Niestety, brakuje niektórych opcji modyfikacji.'),
(184, 4, 45, 0, '2022-04-09', 'Gra oferuje dużo frajdy, zwłaszcza w trybie wieloosobowym. Wersja na konsolę działa lepiej niż na PC.'),
(185, 4, 156, 0, '2022-04-12', 'Każda misja oferuje coś nowego, co sprawia, że gra się nie nudzi. System lootu jest jednym z najlepszych, jakie widziałem.'),
(186, 4, 152, 0, '2022-04-14', 'Genialny system walki i świetnie zrealizowany świat. Grafika stoi na wysokim poziomie, choć czasem widoczne są niedociągnięcia.'),
(187, 4, 111, 0, '2022-04-17', 'Zaskakująca fabuła, ale końcowy boss okazał się rozczarowaniem. Mimo wszystko polecam dla fanów RPG.'),
(188, 4, 134, 1, '2022-04-20', 'Gra wciągająca, choć miejscami zbyt liniowa. Grafika jest ładna, ale animacje postaci trochę drętwe.'),
(189, 4, 148, 0, '2022-04-22', 'Gra świetna na krótkie sesje, ale w dłuższej perspektywie zaczyna się powtarzać. Fajny system craftingowy.'),
(190, 4, 176, 0, '2022-04-25', 'Świetnie zbalansowane poziomy trudności. Każda walka wymaga myślenia i strategii. Gorzej z optymalizacją.'),
(191, 4, 188, 0, '2022-04-28', 'Multiplayer to czysta przyjemność. Bardzo dynamiczna rozgrywka, choć gra solo traci na wartości.'),
(192, 4, 133, 0, '2022-04-30', 'Zróżnicowanie misji sprawia, że gra nie nudzi się szybko. Postacie dobrze napisane, ale fabuła chwilami rozwlekła.'),
(193, 4, 88, 0, '2022-05-03', 'Cudowna fabuła, ale technicznie gra wymaga poprawek. Warto poczekać na aktualizacje.'),
(194, 4, 189, 0, '2022-05-06', 'Bardzo dobra mechanika walki, która wymaga sporo umiejętności. AI czasami za bardzo przewidywalne.'),
(195, 4, 130, 0, '2022-05-08', 'Grafika na wysokim poziomie, ale to fabuła kradnie show. Postacie bardzo realistyczne i pełne emocji.'),
(196, 4, 120, 0, '2022-05-11', 'Doskonały soundtrack i piękna oprawa graficzna. Gra wymaga cierpliwości, ale satysfakcja jest ogromna.'),
(197, 4, 30, 0, '2022-05-14', 'Bardzo przyjemna gra, szczególnie jeśli lubisz otwarte światy. Fabuła niestety trochę zbyt liniowa na mój gust.'),
(198, 7, 30, 1, '2023-01-01', 'Cudowna fabuła, ale technicznie gra wymaga poprawek. Warto poczekać na aktualizacje.'),
(199, 7, 27, 0, '2022-01-03', 'Klimatyczna oprawa dźwiękowa. Zagadki dobrze przemyślane, ale sterowanie mogłoby być bardziej intuicyjne.'),
(200, 7, 16, 0, '2022-01-05', 'Gra wciągająca na wiele godzin! Świetny system rozwoju postaci. Jedyny minus to czasem długie ekrany ładowania.'),
(201, 7, 50, 0, '2022-01-08', 'Mistrzowsko napisane dialogi i ciekawe postacie. Brakuje jednak większej różnorodności w misjach pobocznych.'),
(202, 7, 12, 0, '2022-01-11', 'Tryb multiplayer to czysta przyjemność, ale serwery bywają przeciążone. Mimo to zabawa w zespole jest świetna.'),
(203, 7, 70, 0, '2022-01-14', 'Graficznie gra prezentuje się rewelacyjnie, ale optymalizacja kuleje na słabszych komputerach.'),
(204, 7, 35, 0, '2022-01-16', 'Fabuła trzyma w napięciu od początku do końca. System walki jest dynamiczny, ale wymaga sporo treningu.'),
(205, 7, 80, 1, '2022-01-19', 'Ciekawy świat, ale momentami wydaje się pusty. Twórcy mogli dodać więcej interakcji z otoczeniem.'),
(206, 7, 100, 0, '2022-01-22', 'Doskonałe efekty wizualne i animacje, choć miejscami odczuwa się spadki klatek.'),
(207, 7, 127, 0, '2022-01-25', 'Gra oferuje dużo możliwości personalizacji, co bardzo mi się podoba. Brakuje jednak trybu kooperacji.'),
(208, 7, 69, 1, '2022-01-27', 'Rozgrywka ciekawa, ale AI przeciwników pozostawia wiele do życzenia – niekiedy zachowują się bardzo przewidywalnie.'),
(209, 7, 78, 0, '2022-01-30', 'Świetna muzyka, która idealnie buduje klimat. Misje główne są satysfakcjonujące, choć brakuje ich różnorodności.'),
(210, 7, 50, 1, '2022-02-02', 'Otwarty świat zachwyca, ale fabuła mogłaby być bardziej angażująca. Zbyt mało emocji w dialogach.'),
(211, 7, 51, 0, '2022-02-05', 'Bardzo przyjemna rozgrywka dla fanów strategii. Wymaga myślenia, ale bywa trochę za wolna dla dynamicznych graczy.'),
(212, 7, 43, 0, '2022-02-08', 'Świetne połączenie fabuły i rozgrywki. Grafika mogłaby być lepsza, ale nadrabia to klimat.'),
(213, 7, 150, 0, '2022-02-11', 'System craftingu bardzo rozbudowany, co dodaje grze głębi. Trochę brakuje jednak wsparcia dla modów.'),
(214, 7, 200, 1, '2022-02-13', 'Gra działa świetnie na konsolach, ale na PC napotkałem kilka problemów z wydajnością.'),
(215, 7, 199, 0, '2022-02-16', 'Fenomenalna oprawa graficzna, a do tego dobrze napisane postacie. Fabuła jednak rozwija się zbyt wolno.'),
(216, 7, 36, 0, '2022-02-19', 'Mechanika walki jest prosta, ale daje satysfakcję. Świetny system poziomów, który zachęca do dalszej gry.'),
(217, 7, 12, 0, '2022-02-22', 'Historia bardzo poruszająca, ale zakończenie nieco rozczarowuje. Muzyka jest jedną z najmocniejszych stron.'),
(218, 7, 145, 0, '2022-02-24', 'Dobrze zrealizowane misje poboczne. Grafika robi wrażenie, chociaż model jazdy pojazdami pozostawia wiele do życzenia.'),
(219, 7, 123, 0, '2022-02-27', 'Dialogi świetnie napisane, ale interfejs użytkownika jest trochę przestarzały.'),
(220, 7, 76, 1, '2022-03-02', 'Każda postać ma unikalny styl walki, co urozmaica grę. Szkoda tylko, że zakończenie jest przewidywalne.'),
(221, 7, 39, 0, '2022-03-04', 'Gra oferuje wiele opcji rozwoju bohatera, ale brakuje balansu pomiędzy różnymi ścieżkami. Jednak ogólnie to dobry tytuł.'),
(222, 7, 178, 0, '2022-03-07', 'Świetnie zoptymalizowana gra, nawet na starszych maszynach działa płynnie. Tryb fabularny bardzo wciągający.'),
(223, 7, 89, 0, '2022-03-10', 'Doskonała gra na krótkie sesje. Bardzo wciągająca, ale z czasem staje się powtarzalna.'),
(224, 7, 132, 0, '2022-03-12', 'Multiplayer działa bez zarzutu, ale solo gra nie oferuje takiej samej frajdy. Rekomenduję grę ze znajomymi.'),
(225, 7, 55, 0, '2022-03-15', 'Fabuła mocno angażująca, zwroty akcji zaskakujące. Graficznie piękna, ale wymaga potężnego sprzętu.'),
(226, 7, 44, 0, '2022-03-18', 'Prosty system walki, ale dużo opcji taktycznych. Świetna gra, jeśli lubisz analizować każdy ruch.'),
(227, 7, 33, 0, '2022-03-21', 'Fantastyczna narracja, ale przeciągające się przerywniki filmowe mogą męczyć. Rozgrywka bardzo satysfakcjonująca.'),
(228, 7, 60, 0, '2022-03-24', 'Dynamiczne i ekscytujące walki, choć AI drużyny mogłoby być lepsze. Polecam dla fanów akcji.'),
(229, 7, 99, 0, '2022-03-27', 'Gra zaskakuje swoją głębią, jednak interfejs bywa chaotyczny. System rozwoju bohatera świetnie przemyślany.'),
(230, 7, 155, 0, '2022-03-30', 'Oprawa audio na najwyższym poziomie, choć niektóre dźwięki bywają powtarzalne. Fabuła ciekawa, ale krótkawa.'),
(231, 7, 166, 1, '2022-04-02', 'Solidna gra dla fanów gatunku, choć może być trudna do opanowania na początku. Grafika mogłaby być bardziej dopracowana.'),
(232, 7, 77, 0, '2022-04-04', 'Bardzo dobrze zrealizowany świat, ale fabuła trochę przyćmiewa inne elementy. Gra zasługuje na uwagę.'),
(233, 7, 177, 0, '2022-04-07', 'Twórcy postarali się o realistyczną fizykę, co dodaje grze autentyczności. Niestety, brakuje niektórych opcji modyfikacji.'),
(234, 7, 45, 0, '2022-04-09', 'Gra oferuje dużo frajdy, zwłaszcza w trybie wieloosobowym. Wersja na konsolę działa lepiej niż na PC.'),
(235, 7, 156, 0, '2022-04-12', 'Każda misja oferuje coś nowego, co sprawia, że gra się nie nudzi. System lootu jest jednym z najlepszych, jakie widziałem.'),
(236, 7, 152, 0, '2022-04-14', 'Genialny system walki i świetnie zrealizowany świat. Grafika stoi na wysokim poziomie, choć czasem widoczne są niedociągnięcia.'),
(237, 7, 111, 0, '2022-04-17', 'Zaskakująca fabuła, ale końcowy boss okazał się rozczarowaniem. Mimo wszystko polecam dla fanów RPG.'),
(238, 7, 134, 1, '2022-04-20', 'Gra wciągająca, choć miejscami zbyt liniowa. Grafika jest ładna, ale animacje postaci trochę drętwe.'),
(239, 7, 148, 0, '2022-04-22', 'Gra świetna na krótkie sesje, ale w dłuższej perspektywie zaczyna się powtarzać. Fajny system craftingowy.'),
(240, 7, 176, 0, '2022-04-25', 'Świetnie zbalansowane poziomy trudności. Każda walka wymaga myślenia i strategii. Gorzej z optymalizacją.'),
(241, 7, 188, 0, '2022-04-28', 'Multiplayer to czysta przyjemność. Bardzo dynamiczna rozgrywka, choć gra solo traci na wartości.'),
(242, 7, 133, 0, '2022-04-30', 'Zróżnicowanie misji sprawia, że gra nie nudzi się szybko. Postacie dobrze napisane, ale fabuła chwilami rozwlekła.'),
(243, 7, 88, 0, '2022-05-03', 'Cudowna fabuła, ale technicznie gra wymaga poprawek. Warto poczekać na aktualizacje.'),
(244, 7, 189, 0, '2022-05-06', 'Bardzo dobra mechanika walki, która wymaga sporo umiejętności. AI czasami za bardzo przewidywalne.'),
(245, 7, 130, 0, '2022-05-08', 'Grafika na wysokim poziomie, ale to fabuła kradnie show. Postacie bardzo realistyczne i pełne emocji.'),
(246, 7, 120, 0, '2022-05-11', 'Doskonały soundtrack i piękna oprawa graficzna. Gra wymaga cierpliwości, ale satysfakcja jest ogromna.'),
(247, 7, 30, 0, '2022-05-14', 'Bardzo przyjemna gra, szczególnie jeśli lubisz otwarte światy. Fabuła niestety trochę zbyt liniowa na mój gust.'),
(248, 10, 30, 1, '2023-01-01', 'Cudowna fabuła, ale technicznie gra wymaga poprawek. Warto poczekać na aktualizacje.'),
(249, 10, 27, 0, '2022-01-03', 'Klimatyczna oprawa dźwiękowa. Zagadki dobrze przemyślane, ale sterowanie mogłoby być bardziej intuicyjne.'),
(250, 10, 16, 0, '2022-01-05', 'Gra wciągająca na wiele godzin! Świetny system rozwoju postaci. Jedyny minus to czasem długie ekrany ładowania.'),
(251, 10, 50, 0, '2022-01-08', 'Mistrzowsko napisane dialogi i ciekawe postacie. Brakuje jednak większej różnorodności w misjach pobocznych.'),
(252, 10, 12, 0, '2022-01-11', 'Tryb multiplayer to czysta przyjemność, ale serwery bywają przeciążone. Mimo to zabawa w zespole jest świetna.'),
(253, 10, 70, 0, '2022-01-14', 'Graficznie gra prezentuje się rewelacyjnie, ale optymalizacja kuleje na słabszych komputerach.'),
(254, 10, 35, 0, '2022-01-16', 'Fabuła trzyma w napięciu od początku do końca. System walki jest dynamiczny, ale wymaga sporo treningu.'),
(255, 10, 80, 1, '2022-01-19', 'Ciekawy świat, ale momentami wydaje się pusty. Twórcy mogli dodać więcej interakcji z otoczeniem.'),
(256, 10, 100, 0, '2022-01-22', 'Doskonałe efekty wizualne i animacje, choć miejscami odczuwa się spadki klatek.'),
(257, 10, 127, 0, '2022-01-25', 'Gra oferuje dużo możliwości personalizacji, co bardzo mi się podoba. Brakuje jednak trybu kooperacji.'),
(258, 10, 69, 1, '2022-01-27', 'Rozgrywka ciekawa, ale AI przeciwników pozostawia wiele do życzenia – niekiedy zachowują się bardzo przewidywalnie.'),
(259, 10, 78, 0, '2022-01-30', 'Świetna muzyka, która idealnie buduje klimat. Misje główne są satysfakcjonujące, choć brakuje ich różnorodności.'),
(260, 10, 50, 1, '2022-02-02', 'Otwarty świat zachwyca, ale fabuła mogłaby być bardziej angażująca. Zbyt mało emocji w dialogach.'),
(261, 10, 51, 0, '2022-02-05', 'Bardzo przyjemna rozgrywka dla fanów strategii. Wymaga myślenia, ale bywa trochę za wolna dla dynamicznych graczy.'),
(262, 10, 43, 0, '2022-02-08', 'Świetne połączenie fabuły i rozgrywki. Grafika mogłaby być lepsza, ale nadrabia to klimat.'),
(263, 10, 150, 0, '2022-02-11', 'System craftingu bardzo rozbudowany, co dodaje grze głębi. Trochę brakuje jednak wsparcia dla modów.'),
(264, 10, 200, 1, '2022-02-13', 'Gra działa świetnie na konsolach, ale na PC napotkałem kilka problemów z wydajnością.'),
(265, 10, 199, 0, '2022-02-16', 'Fenomenalna oprawa graficzna, a do tego dobrze napisane postacie. Fabuła jednak rozwija się zbyt wolno.'),
(266, 10, 36, 0, '2022-02-19', 'Mechanika walki jest prosta, ale daje satysfakcję. Świetny system poziomów, który zachęca do dalszej gry.'),
(267, 10, 12, 0, '2022-02-22', 'Historia bardzo poruszająca, ale zakończenie nieco rozczarowuje. Muzyka jest jedną z najmocniejszych stron.'),
(268, 10, 145, 0, '2022-02-24', 'Dobrze zrealizowane misje poboczne. Grafika robi wrażenie, chociaż model jazdy pojazdami pozostawia wiele do życzenia.'),
(269, 10, 123, 0, '2022-02-27', 'Dialogi świetnie napisane, ale interfejs użytkownika jest trochę przestarzały.'),
(270, 10, 76, 1, '2022-03-02', 'Każda postać ma unikalny styl walki, co urozmaica grę. Szkoda tylko, że zakończenie jest przewidywalne.'),
(271, 10, 39, 0, '2022-03-04', 'Gra oferuje wiele opcji rozwoju bohatera, ale brakuje balansu pomiędzy różnymi ścieżkami. Jednak ogólnie to dobry tytuł.'),
(272, 10, 178, 0, '2022-03-07', 'Świetnie zoptymalizowana gra, nawet na starszych maszynach działa płynnie. Tryb fabularny bardzo wciągający.'),
(273, 10, 89, 0, '2022-03-10', 'Doskonała gra na krótkie sesje. Bardzo wciągająca, ale z czasem staje się powtarzalna.'),
(274, 10, 132, 0, '2022-03-12', 'Multiplayer działa bez zarzutu, ale solo gra nie oferuje takiej samej frajdy. Rekomenduję grę ze znajomymi.'),
(275, 10, 55, 0, '2022-03-15', 'Fabuła mocno angażująca, zwroty akcji zaskakujące. Graficznie piękna, ale wymaga potężnego sprzętu.'),
(276, 10, 44, 0, '2022-03-18', 'Prosty system walki, ale dużo opcji taktycznych. Świetna gra, jeśli lubisz analizować każdy ruch.'),
(277, 10, 33, 0, '2022-03-21', 'Fantastyczna narracja, ale przeciągające się przerywniki filmowe mogą męczyć. Rozgrywka bardzo satysfakcjonująca.'),
(278, 10, 60, 0, '2022-03-24', 'Dynamiczne i ekscytujące walki, choć AI drużyny mogłoby być lepsze. Polecam dla fanów akcji.'),
(279, 10, 99, 0, '2022-03-27', 'Gra zaskakuje swoją głębią, jednak interfejs bywa chaotyczny. System rozwoju bohatera świetnie przemyślany.'),
(280, 10, 155, 0, '2022-03-30', 'Oprawa audio na najwyższym poziomie, choć niektóre dźwięki bywają powtarzalne. Fabuła ciekawa, ale krótkawa.'),
(281, 10, 166, 1, '2022-04-02', 'Solidna gra dla fanów gatunku, choć może być trudna do opanowania na początku. Grafika mogłaby być bardziej dopracowana.'),
(282, 10, 77, 0, '2022-04-04', 'Bardzo dobrze zrealizowany świat, ale fabuła trochę przyćmiewa inne elementy. Gra zasługuje na uwagę.'),
(283, 10, 177, 0, '2022-04-07', 'Twórcy postarali się o realistyczną fizykę, co dodaje grze autentyczności. Niestety, brakuje niektórych opcji modyfikacji.'),
(284, 10, 45, 0, '2022-04-09', 'Gra oferuje dużo frajdy, zwłaszcza w trybie wieloosobowym. Wersja na konsolę działa lepiej niż na PC.'),
(285, 10, 156, 0, '2022-04-12', 'Każda misja oferuje coś nowego, co sprawia, że gra się nie nudzi. System lootu jest jednym z najlepszych, jakie widziałem.'),
(286, 10, 152, 0, '2022-04-14', 'Genialny system walki i świetnie zrealizowany świat. Grafika stoi na wysokim poziomie, choć czasem widoczne są niedociągnięcia.'),
(287, 10, 111, 0, '2022-04-17', 'Zaskakująca fabuła, ale końcowy boss okazał się rozczarowaniem. Mimo wszystko polecam dla fanów RPG.'),
(288, 10, 134, 1, '2022-04-20', 'Gra wciągająca, choć miejscami zbyt liniowa. Grafika jest ładna, ale animacje postaci trochę drętwe.'),
(289, 10, 148, 0, '2022-04-22', 'Gra świetna na krótkie sesje, ale w dłuższej perspektywie zaczyna się powtarzać. Fajny system craftingowy.'),
(290, 10, 176, 0, '2022-04-25', 'Świetnie zbalansowane poziomy trudności. Każda walka wymaga myślenia i strategii. Gorzej z optymalizacją.'),
(291, 10, 188, 0, '2022-04-28', 'Multiplayer to czysta przyjemność. Bardzo dynamiczna rozgrywka, choć gra solo traci na wartości.'),
(292, 10, 133, 0, '2022-04-30', 'Zróżnicowanie misji sprawia, że gra nie nudzi się szybko. Postacie dobrze napisane, ale fabuła chwilami rozwlekła.'),
(293, 10, 88, 0, '2022-05-03', 'Cudowna fabuła, ale technicznie gra wymaga poprawek. Warto poczekać na aktualizacje.'),
(294, 10, 189, 0, '2022-05-06', 'Bardzo dobra mechanika walki, która wymaga sporo umiejętności. AI czasami za bardzo przewidywalne.'),
(295, 10, 130, 0, '2022-05-08', 'Grafika na wysokim poziomie, ale to fabuła kradnie show. Postacie bardzo realistyczne i pełne emocji.'),
(296, 10, 120, 0, '2022-05-11', 'Doskonały soundtrack i piękna oprawa graficzna. Gra wymaga cierpliwości, ale satysfakcja jest ogromna.'),
(297, 10, 30, 0, '2022-05-14', 'Bardzo przyjemna gra, szczególnie jeśli lubisz otwarte światy. Fabuła niestety trochę zbyt liniowa na mój gust.'),
(298, 11, 30, 1, '2023-01-01', 'Cudowna fabuła, ale technicznie gra wymaga poprawek. Warto poczekać na aktualizacje.'),
(299, 11, 27, 0, '2022-01-03', 'Klimatyczna oprawa dźwiękowa. Zagadki dobrze przemyślane, ale sterowanie mogłoby być bardziej intuicyjne.'),
(300, 11, 16, 0, '2022-01-05', 'Gra wciągająca na wiele godzin! Świetny system rozwoju postaci. Jedyny minus to czasem długie ekrany ładowania.'),
(301, 11, 50, 0, '2022-01-08', 'Mistrzowsko napisane dialogi i ciekawe postacie. Brakuje jednak większej różnorodności w misjach pobocznych.'),
(302, 11, 12, 0, '2022-01-11', 'Tryb multiplayer to czysta przyjemność, ale serwery bywają przeciążone. Mimo to zabawa w zespole jest świetna.'),
(303, 11, 70, 0, '2022-01-14', 'Graficznie gra prezentuje się rewelacyjnie, ale optymalizacja kuleje na słabszych komputerach.'),
(304, 11, 35, 0, '2022-01-16', 'Fabuła trzyma w napięciu od początku do końca. System walki jest dynamiczny, ale wymaga sporo treningu.'),
(305, 11, 80, 1, '2022-01-19', 'Ciekawy świat, ale momentami wydaje się pusty. Twórcy mogli dodać więcej interakcji z otoczeniem.'),
(306, 11, 100, 0, '2022-01-22', 'Doskonałe efekty wizualne i animacje, choć miejscami odczuwa się spadki klatek.'),
(307, 11, 127, 0, '2022-01-25', 'Gra oferuje dużo możliwości personalizacji, co bardzo mi się podoba. Brakuje jednak trybu kooperacji.'),
(308, 11, 69, 1, '2022-01-27', 'Rozgrywka ciekawa, ale AI przeciwników pozostawia wiele do życzenia – niekiedy zachowują się bardzo przewidywalnie.'),
(309, 11, 78, 0, '2022-01-30', 'Świetna muzyka, która idealnie buduje klimat. Misje główne są satysfakcjonujące, choć brakuje ich różnorodności.'),
(310, 11, 50, 1, '2022-02-02', 'Otwarty świat zachwyca, ale fabuła mogłaby być bardziej angażująca. Zbyt mało emocji w dialogach.'),
(311, 11, 51, 0, '2022-02-05', 'Bardzo przyjemna rozgrywka dla fanów strategii. Wymaga myślenia, ale bywa trochę za wolna dla dynamicznych graczy.'),
(312, 11, 43, 0, '2022-02-08', 'Świetne połączenie fabuły i rozgrywki. Grafika mogłaby być lepsza, ale nadrabia to klimat.'),
(313, 11, 150, 0, '2022-02-11', 'System craftingu bardzo rozbudowany, co dodaje grze głębi. Trochę brakuje jednak wsparcia dla modów.'),
(314, 11, 200, 1, '2022-02-13', 'Gra działa świetnie na konsolach, ale na PC napotkałem kilka problemów z wydajnością.'),
(315, 11, 199, 0, '2022-02-16', 'Fenomenalna oprawa graficzna, a do tego dobrze napisane postacie. Fabuła jednak rozwija się zbyt wolno.'),
(316, 11, 36, 0, '2022-02-19', 'Mechanika walki jest prosta, ale daje satysfakcję. Świetny system poziomów, który zachęca do dalszej gry.'),
(317, 11, 12, 0, '2022-02-22', 'Historia bardzo poruszająca, ale zakończenie nieco rozczarowuje. Muzyka jest jedną z najmocniejszych stron.'),
(318, 11, 145, 0, '2022-02-24', 'Dobrze zrealizowane misje poboczne. Grafika robi wrażenie, chociaż model jazdy pojazdami pozostawia wiele do życzenia.'),
(319, 11, 123, 0, '2022-02-27', 'Dialogi świetnie napisane, ale interfejs użytkownika jest trochę przestarzały.'),
(320, 11, 76, 1, '2022-03-02', 'Każda postać ma unikalny styl walki, co urozmaica grę. Szkoda tylko, że zakończenie jest przewidywalne.'),
(321, 11, 39, 0, '2022-03-04', 'Gra oferuje wiele opcji rozwoju bohatera, ale brakuje balansu pomiędzy różnymi ścieżkami. Jednak ogólnie to dobry tytuł.'),
(322, 11, 178, 0, '2022-03-07', 'Świetnie zoptymalizowana gra, nawet na starszych maszynach działa płynnie. Tryb fabularny bardzo wciągający.'),
(323, 11, 89, 0, '2022-03-10', 'Doskonała gra na krótkie sesje. Bardzo wciągająca, ale z czasem staje się powtarzalna.'),
(324, 11, 132, 0, '2022-03-12', 'Multiplayer działa bez zarzutu, ale solo gra nie oferuje takiej samej frajdy. Rekomenduję grę ze znajomymi.'),
(325, 11, 55, 0, '2022-03-15', 'Fabuła mocno angażująca, zwroty akcji zaskakujące. Graficznie piękna, ale wymaga potężnego sprzętu.'),
(326, 11, 44, 0, '2022-03-18', 'Prosty system walki, ale dużo opcji taktycznych. Świetna gra, jeśli lubisz analizować każdy ruch.'),
(327, 11, 33, 0, '2022-03-21', 'Fantastyczna narracja, ale przeciągające się przerywniki filmowe mogą męczyć. Rozgrywka bardzo satysfakcjonująca.'),
(328, 11, 60, 0, '2022-03-24', 'Dynamiczne i ekscytujące walki, choć AI drużyny mogłoby być lepsze. Polecam dla fanów akcji.'),
(329, 11, 99, 0, '2022-03-27', 'Gra zaskakuje swoją głębią, jednak interfejs bywa chaotyczny. System rozwoju bohatera świetnie przemyślany.'),
(330, 11, 155, 0, '2022-03-30', 'Oprawa audio na najwyższym poziomie, choć niektóre dźwięki bywają powtarzalne. Fabuła ciekawa, ale krótkawa.'),
(331, 11, 166, 1, '2022-04-02', 'Solidna gra dla fanów gatunku, choć może być trudna do opanowania na początku. Grafika mogłaby być bardziej dopracowana.'),
(332, 11, 77, 0, '2022-04-04', 'Bardzo dobrze zrealizowany świat, ale fabuła trochę przyćmiewa inne elementy. Gra zasługuje na uwagę.'),
(333, 11, 177, 0, '2022-04-07', 'Twórcy postarali się o realistyczną fizykę, co dodaje grze autentyczności. Niestety, brakuje niektórych opcji modyfikacji.'),
(334, 11, 45, 0, '2022-04-09', 'Gra oferuje dużo frajdy, zwłaszcza w trybie wieloosobowym. Wersja na konsolę działa lepiej niż na PC.'),
(335, 11, 156, 0, '2022-04-12', 'Każda misja oferuje coś nowego, co sprawia, że gra się nie nudzi. System lootu jest jednym z najlepszych, jakie widziałem.'),
(336, 11, 152, 0, '2022-04-14', 'Genialny system walki i świetnie zrealizowany świat. Grafika stoi na wysokim poziomie, choć czasem widoczne są niedociągnięcia.'),
(337, 11, 111, 0, '2022-04-17', 'Zaskakująca fabuła, ale końcowy boss okazał się rozczarowaniem. Mimo wszystko polecam dla fanów RPG.'),
(338, 11, 134, 1, '2022-04-20', 'Gra wciągająca, choć miejscami zbyt liniowa. Grafika jest ładna, ale animacje postaci trochę drętwe.'),
(339, 11, 148, 0, '2022-04-22', 'Gra świetna na krótkie sesje, ale w dłuższej perspektywie zaczyna się powtarzać. Fajny system craftingowy.'),
(340, 11, 176, 0, '2022-04-25', 'Świetnie zbalansowane poziomy trudności. Każda walka wymaga myślenia i strategii. Gorzej z optymalizacją.'),
(341, 11, 188, 0, '2022-04-28', 'Multiplayer to czysta przyjemność. Bardzo dynamiczna rozgrywka, choć gra solo traci na wartości.'),
(342, 11, 133, 0, '2022-04-30', 'Zróżnicowanie misji sprawia, że gra nie nudzi się szybko. Postacie dobrze napisane, ale fabuła chwilami rozwlekła.'),
(343, 11, 88, 0, '2022-05-03', 'Cudowna fabuła, ale technicznie gra wymaga poprawek. Warto poczekać na aktualizacje.'),
(344, 11, 189, 0, '2022-05-06', 'Bardzo dobra mechanika walki, która wymaga sporo umiejętności. AI czasami za bardzo przewidywalne.'),
(345, 11, 130, 0, '2022-05-08', 'Grafika na wysokim poziomie, ale to fabuła kradnie show. Postacie bardzo realistyczne i pełne emocji.'),
(346, 11, 120, 0, '2022-05-11', 'Doskonały soundtrack i piękna oprawa graficzna. Gra wymaga cierpliwości, ale satysfakcja jest ogromna.'),
(347, 11, 30, 0, '2022-05-14', 'Bardzo przyjemna gra, szczególnie jeśli lubisz otwarte światy. Fabuła niestety trochę zbyt liniowa na mój gust.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tags`
--

CREATE TABLE `tags` (
  `ID` int(11) NOT NULL,
  `TAG_NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`ID`, `TAG_NAME`) VALUES
(1, 'linux'),
(2, 'widows'),
(3, 'macos'),
(4, 'FPS'),
(5, 'Strzelanka'),
(6, 'Wieloosobowe'),
(7, 'Rywalizacja'),
(8, 'Bijatyka'),
(9, 'Brutalność'),
(10, 'Przemoc'),
(11, 'Wyścigowe'),
(12, 'Otwarty świat'),
(13, 'Kierownaie pojzadem');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(64) NOT NULL,
  `PASSWORD` varchar(64) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `COUNTRY` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `developers`
--
ALTER TABLE `developers`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `developer_id` (`ID`),
  ADD KEY `publisher_id` (`ID`),
  ADD KEY `GAME` (`ID`);

--
-- Indeksy dla tabeli `game_library`
--
ALTER TABLE `game_library`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `USER_ID` (`USER_ID`),
  ADD KEY `GAME_ID` (`GAME_ID`);

--
-- Indeksy dla tabeli `game_tags`
--
ALTER TABLE `game_tags`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `game_tags_ibfk_1` (`GAME_ID`),
  ADD KEY `game_tags_ibfk_2` (`TAG_ID`);

--
-- Indeksy dla tabeli `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `GAME` (`GAME_ID`),
  ADD KEY `USER` (`USER_ID`);

--
-- Indeksy dla tabeli `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `developers`
--
ALTER TABLE `developers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `game_library`
--
ALTER TABLE `game_library`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `game_tags`
--
ALTER TABLE `game_tags`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=348;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `developers`
--
ALTER TABLE `developers`
  ADD CONSTRAINT `developers_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `game` (`ID`);

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `reviews` (`GAME_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `game_library`
--
ALTER TABLE `game_library`
  ADD CONSTRAINT `game_library_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `email` (`ID`),
  ADD CONSTRAINT `game_library_ibfk_2` FOREIGN KEY (`GAME_ID`) REFERENCES `game` (`ID`);

--
-- Constraints for table `game_tags`
--
ALTER TABLE `game_tags`
  ADD CONSTRAINT `game_tags_ibfk_1` FOREIGN KEY (`GAME_ID`) REFERENCES `game` (`ID`),
  ADD CONSTRAINT `game_tags_ibfk_2` FOREIGN KEY (`TAG_ID`) REFERENCES `tags` (`ID`);

--
-- Constraints for table `publishers`
--
ALTER TABLE `publishers`
  ADD CONSTRAINT `publishers_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `game` (`ID`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `email` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
