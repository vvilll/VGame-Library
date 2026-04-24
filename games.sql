-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2026 at 09:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `GameID` int(11) NOT NULL,
  `GameName` varchar(100) DEFAULT NULL,
  `Genre` varchar(50) DEFAULT NULL,
  `Link` varchar(300) DEFAULT NULL,
  `imgLink` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`GameID`, `GameName`, `Genre`, `Link`, `imgLink`) VALUES
(1, 'Hogwarts Legacy', 'Action RPG', 'https://store.steampowered.com/app/990080', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/990080/1b2e4eeed79dd06971492825a461bc5130bf7c28/capsule_231x87.jpg?t=1773932856'),
(2, 'Monster Hunter: World', 'Action RPG', 'https://store.steampowered.com/app/582010', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/582010/capsule_231x87.jpg?t=1773328926'),
(3, 'Monster Hunter Rise', 'Action RPG', 'https://store.steampowered.com/app/1446780', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1446780/capsule_231x87.jpg?t=1768870444'),
(4, 'Terraria', 'Sandbox Adventure', 'https://store.steampowered.com/app/105600', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/105600/capsule_231x87.jpg?t=1769844435'),
(5, 'The Witcher 3: Wild Hunt', 'RPG', 'https://store.steampowered.com/app/292030', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/292030/abf6e7b3b01ed20c35a8dc0a009a8f9fc3e57b93/capsule_231x87.jpg?t=1768303991'),
(6, 'Palworld', 'Survival Monster-Collector', 'https://store.steampowered.com/app/1623730', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1623730/4f823e476ad290ad4f19763e7d800723df422dfa/capsule_231x87.jpg?t=1773936597'),
(7, 'Fallout 4', 'RPG', 'https://store.steampowered.com/app/377160', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/377160/capsule_231x87.jpg?t=1764687456'),
(9, 'Euro Truck Simulator 2', 'Simulation', 'https://store.steampowered.com/app/227300', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/227300/da84d11d3ddd817e0cca299608b469a854d75ba5/capsule_231x87.jpg?t=1773641450'),
(10, 'American Truck Simulator', 'Simulation', 'https://store.steampowered.com/app/270880', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/270880/8809b200b3ebdd7fbcdbfdbe6c8f91b2c0ce93df/capsule_231x87.jpg?t=1776779531'),
(11, 'Forza Horizon 5', 'Racing', 'https://store.steampowered.com/app/1551360', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1551360/capsule_231x87.jpg?t=1746471508'),
(12, 'Forza Motorsport', 'Racing', 'https://store.steampowered.com/app/2440510', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/2440510/capsule_231x87.jpg?t=1747073895'),
(13, 'Dark Souls III', 'Action RPG', 'https://store.steampowered.com/app/374320', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/374320/capsule_231x87.jpg?t=1748630784'),
(14, 'Dark Souls Remastered', 'Action RPG', 'https://store.steampowered.com/app/570940', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/570940/capsule_231x87.jpg?t=1764975651'),
(15, 'Sekiro: Shadows Die Twice', 'Action Adventure', 'https://store.steampowered.com/app/814380', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/814380/capsule_231x87.jpg?t=1762888662'),
(17, 'The Elder Scrolls Online', 'MMORPG', 'https://store.steampowered.com/app/306130', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/306130/709104c8f18e2ec1948745345d7bfcb52611362c/capsule_231x87.jpg?t=1775577634'),
(18, 'Destiny 2', 'FPS MMO', 'https://store.steampowered.com/app/1085660', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1085660/capsule_231x87.jpg?t=1765904462'),
(19, 'PAYDAY 2', 'Co-op Shooter', 'https://store.steampowered.com/app/218620', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/218620/capsule_231x87.jpg?t=1771610568'),
(20, 'PAYDAY 3', 'Co-op Shooter', 'https://store.steampowered.com/app/1272080', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1272080/fd563a230d7fa67e412e9825ac93c327ba4b1831/capsule_231x87.jpg?t=1776766718'),
(21, 'Phasmophobia', 'Co-op Horror', 'https://store.steampowered.com/app/739630', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/739630/0268c77668d5643d3f2c19e67e92e252fdfe6c7f/capsule_231x87.jpg?t=1776847215'),
(22, 'The Finals', 'Shooter', 'https://store.steampowered.com/app/2073850', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/2073850/dc50f757c463cc1f7cadbd61a4e63e3ba8d566fa/capsule_231x87.jpg?t=1774608998'),
(23, 'Lethal Company', 'Co-op Horror', 'https://store.steampowered.com/app/1966720', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1966720/capsule_231x87.jpg?t=1775380053'),
(24, 'Sons of the Forest', 'Survival', 'https://store.steampowered.com/app/1326470', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1326470/capsule_231x87.jpg?t=1708624856'),
(25, 'The Forest', 'Survival', 'https://store.steampowered.com/app/242760', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/242760/capsule_231x87.jpg?t=1699381053'),
(26, 'Hades II', 'Roguelike', 'https://store.steampowered.com/app/1145350', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1145350/10c9138570a8d7ac9144f601ab0f2ccbc820337e/capsule_231x87.jpg?t=1765831644'),
(27, 'Hades', 'Roguelike', 'https://store.steampowered.com/app/1145360', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1145360/capsule_231x87.jpg?t=1758127023'),
(28, 'Factorio', 'Automation', 'https://store.steampowered.com/app/427520', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/427520/capsule_231x87.jpg?t=1763986204'),
(29, 'Satisfactory', 'Automation', 'https://store.steampowered.com/app/526870', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/526870/fe7cbb345c177f83f829a61f0e0ab951b42c7ab1/capsule_231x87.jpg?t=1749717464'),
(30, 'Cities: Skylines II', 'City Builder', 'https://store.steampowered.com/app/949230', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/949230/2b264fcfffbdc89083c626e70d8e5f0b352672a9/capsule_231x87.jpg?t=1773949108'),
(31, 'Cities: Skylines', 'City Builder', 'https://store.steampowered.com/app/255710', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/255710/4cf458b43b41e4f86d3e4e604e7a7577c7926b01/capsule_231x87.jpg?t=1774972989'),
(33, 'Football Manager 2026', 'Sports Management', 'https://store.steampowered.com/app/2820700', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/3551340/89a157ed8100b4c8fa49de9fda0b3a83aece1f5e/capsule_231x87.jpg?t=1775667513'),
(34, 'Halo: The Master Chief Collection', 'FPS', 'https://store.steampowered.com/app/976730', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/976730/capsule_231x87.jpg?t=1774466074'),
(35, 'Halo Infinite', 'FPS', 'https://store.steampowered.com/app/1240440', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1240440/9d64f5027f08e849ed1369f98b22326e2377b2b7/capsule_231x87.jpg?t=1774464322'),
(36, 'Sea of Thieves', 'Adventure', 'https://store.steampowered.com/app/1172620', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1172620/5d210ce2851af775943157ce7e97dc5fc27e1d9d/capsule_231x87.jpg?t=1775816492'),
(37, 'No Man’s Sky', 'Space Exploration', 'https://store.steampowered.com/app/275850', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/275850/09fd1748e1dcbe1e39802cf18d8ca1b83a999792/capsule_231x87_alt_assets_25.jpg?t=1776675618'),
(38, 'Starfield', 'RPG', 'https://store.steampowered.com/app/1716740', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1716740/capsule_231x87.jpg?t=1775743548'),
(39, 'BattleBit Remastered', 'FPS', 'https://store.steampowered.com/app/671860', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/671860/capsule_231x87.jpg?t=1730393449'),
(40, 'Crusader Kings III', 'Grand Strategy', 'https://store.steampowered.com/app/1158310', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1158310/2b60ce19898576e8990a52a95180b74a6f7b2631/capsule_231x87_alt_assets_15.jpg?t=1776764652'),
(41, 'Europa Universalis IV', 'Grand Strategy', 'https://store.steampowered.com/app/236850', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/236850/f4e714d0f5a6be6b76e4b7cfddd692ccc689884a/capsule_231x87.jpg?t=1746720143'),
(42, 'The Binding of Isaac: Rebirth', 'Roguelike', 'https://store.steampowered.com/app/250900', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/250900/capsule_231x87.jpg?t=1731977365'),
(43, 'Don’t Starve Together', 'Survival', 'https://store.steampowered.com/app/322330', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/322330/72c1dd65c4c7b66a3bf3cba525230e94218d3d97/capsule_231x87_alt_assets_49.jpg?t=1776359433'),
(44, 'Deep Rock Galactic', 'Co-op Shooter', 'https://store.steampowered.com/app/548430', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/548430/capsule_231x87.jpg?t=1775555380'),
(45, 'Warhammer 40,000: Darktide', 'Co-op Shooter', 'https://store.steampowered.com/app/1361210', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1361210/611c940039ef84ed8f18410b3fba99171ea0ce66/capsule_231x87.jpg?t=1775524225'),
(46, 'Warhammer: Vermintide 2', 'Co-op Action', 'https://store.steampowered.com/app/552500', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/552500/capsule_231x87.jpg?t=1764008361'),
(47, 'Slay the Spire', 'Deckbuilder', 'https://store.steampowered.com/app/646570', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/646570/capsule_231x87.jpg?t=1774015376'),
(48, 'Hollow Knight', 'Metroidvania', 'https://store.steampowered.com/app/367520', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/367520/fba7289f4c7e90ae9c0caa87e4225f3f9111d7dd/capsule_231x87.jpg?t=1776125684'),
(49, 'Tom Clancy’s The Division 2', 'Shooter', 'https://store.steampowered.com/app/2221490', 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/2221490/d78d1d676bf81f084d4de829c6485e984d973c23/capsule_231x87_alt_assets_4.jpg?t=1775160163');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`GameID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `GameID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
