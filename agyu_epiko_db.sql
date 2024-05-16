-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 03:25 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agyu_epiko_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `name`, `type`) VALUES
(1, 'AGYU.png', 'Image'),
(2, 'BANLAK.png', 'Image'),
(3, 'DATU_MORO.png', 'Image'),
(4, 'KUYASU.png', 'Image'),
(5, 'TANAGYAW.png', 'Image'),
(6, 'First.png', 'Image'),
(7, 'Second.png', 'Image'),
(8, 'Third.png', 'Image'),
(9, 'Fourth.png', 'Image'),
(10, 'Fifth.png', 'Image'),
(11, 'Sixth.png', 'Image'),
(12, 'Seventh.png', 'Image'),
(13, 'Eight.png', 'Image'),
(14, 'Ninth.png', 'Image'),
(15, 'agyu.mp3', 'Audio'),
(16, 'anak ni pamulaw.mp3', 'Audio'),
(17, 'banlak.mp3', 'Audio'),
(18, 'intro1.mp3', 'Audio'),
(19, 'introcharacters1.mp3', 'Audio'),
(20, 'nagalitMoro.mp3', 'Audio'),
(21, 'narrate.mp3', 'Audio'),
(22, 'siyam pagkit.mp3', 'Audio'),
(23, 'questboxmatanda.png', 'Image'),
(24, 'questboxbanlak.png', 'Image'),
(25, 'questboxbell.png', 'Image'),
(26, 'ai_1.png', 'Image'),
(27, 'ai_2.png', 'Image'),
(28, 'ai_3.png', 'Image'),
(29, 'agyu_title.png', 'Image'),
(30, 'MadeWithMv.png', 'Image'),
(31, 'coastal fight.png', 'Image');

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`id`, `name`, `description`, `image`) VALUES
(1, 'Agyu', 'Agyu, the hero of the Ilianon epic, is a classic example of an epic hero. He is strong, courageous, intelligent, and resourceful. Agyu defends his people and their way of life, demonstrating loyalty and love. The epic may also portray him with supernatural abilities.', 'AGYU.png'),
(2, 'Banlak', 'Banlak is a prominent character in the Epiko of Ilianon, known for his strength, valor, and unwavering loyalty to his people. He is often depicted as a skilled warrior, renowned for his prowess in battle and his ability to inspire those around him. Banlak is a symbol of resilience and determination, willing to sacrifice himself for the greater good of his community. His character exemplifies the virtues of bravery and selflessness, making him a beloved figure in the epic narrative.', 'BANLAK.png'),
(3, 'Datu Moro', 'Datu Moro is a significant character in the Epiko of Ilianon, renowned for his wisdom, leadership, and diplomatic skills. As a Datu, or tribal chief, he holds considerable influence and respect among his people. Datu Moro is often depicted as a just and fair ruler, dedicated to maintaining peace and harmony within his community. He is known for his strategic thinking and ability to resolve conflicts through negotiation and compromise. Despite his authority, Datu Moro is portrayed as humble and compassionate, earning him the admiration and loyalty of his subjects. His character embodies the values of leadership, wisdom, and compassion, playing a crucial role in the epic narrative.', 'DATU_MORO.png'),
(4, 'Kuyasu', 'Kuyasu is a significant character in the Epiko of Ilianon, known for his cunning and resourcefulness. He is often portrayed as a skilled strategist and a master of deception, using his intellect to outsmart his adversaries. Despite his cunning nature, Kuyasu is also depicted as having a sense of loyalty and honor, albeit in a more ambiguous way compared to other characters. His character adds depth to the epic narrative, showcasing the complexities of human nature and the various paths one can take in pursuit of their goals.', 'KUYASU.png'),
(5, 'Tanagyaw', 'Tanagyaw is a central character in the Epiko of Ilianon, a Philippine epic. He is often depicted as brave, wise, and honorable, embodying the values of heroism and integrity. Tanagyaw is known for his courage in facing challenges and his unwavering commitment to his people and their cause. His character is often praised for its depth and complexity, reflecting the rich storytelling tradition of Filipino epics.', 'TANAGYAW.png');

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE `developer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `bio` text NOT NULL,
  `contact_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dialog`
--

CREATE TABLE `dialog` (
  `id` int(11) NOT NULL,
  `character_id` int(11) DEFAULT NULL,
  `script` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dialog`
--

INSERT INTO `dialog` (`id`, `character_id`, `script`) VALUES
(1, 1, '\"Banlak at Kuyasu, magpapadala ako sa inyo ng pagkit para maibigay sa datung Moro. Ipaliwanag ninyo na lamang na ako ay humihingi ng paumanhin dahil kulang ang aking maipapadala.\"'),
(2, 4, '\"Magandang araw sa inyo, datung Moro. Narito ang pagkit na ipinapabigay ng aming kapatid na si Agyu. Humihingi siya ng paumanhin sapagkat kulang ang aming maibibigay\"'),
(3, 3, '\"Ano?! Sa tingin ba ninyo, sasapat ba ang pagkit na dala-dala niyo?! Mga walang hiya!\"'),
(4, 4, '\"Tumakas ka na, Banlak! Iwan mo nalang ako dito!\"'),
(5, 2, '\"Kuya, kuya! Nagkagulo sa kuta ng mga Moro! Napatay ni Kuyasu ang datu!\"'),
(6, 1, '\"Paniguradong magkakaroon ng giyera, kailangan na nating umalis at maghanap ng matatayuan ng kuta. Ipamalita mo na sa ating mga kasamahan, bilisan mo!\"'),
(7, 2, '\"Hindi pa dito nagtatapos ang laban. Kutob kong magpapadala pa sila ng mas maraming puwersa kaya nararapat lamang na tayo ay lumipat na kaagad sa ibang bayan. Napagpasiyahan ko na pumunta tayo doon sa bundok ng Pinamaton.\"'),
(8, 5, '\"Hindi ko hahayaan na may masamang mangyari dito sa lugar na ito. Hayaan ninyo akong tulungan kayo sa pakikipaglaban.\"'),
(9, 1, '\"Dahil sa katapangan ng aking anak na si Tanagyaw, siya ay aking ipinagmamalaki at bibigyan ko siya ng parangal. Nawa’y sa iyong mga susunod na laban ay pawang tagumpay ang iyong makamit. Mag-iingat ka palagi aking anak! Mabuhay si Tanagyaw! Mabuhay ang aking anak!\"');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `plot` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `map_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `plot`, `location`, `map_image`) VALUES
(1, 'The town of Ayuman, where Banlak, Agyu, and Kuyasu live. Traditional setting of the Ilianon.', 'Ayuman Village', 'First.png'),
(2, 'One day, Agyu sent the Moro datu nine lumps of beeswax.', 'Ayuman Village', 'Second.png'),
(3, 'The Moro datu was angered by the small amount of beeswax that Agyu had given, and in his rage, he hurled the beeswax at Kuyasu.', 'Moro\'s stronghold', 'Third.png'),
(4, 'In his anger, Kuyasu retaliated and speared the datu, killing the leader of the Moro. Kuyasu told Banlak to leave him behind so that he could escape.', 'Moro\'s stronghold', 'Third.png'),
(5, 'Agyu foresaw that a war would break out, so they went to Ilian, where Agyu decided to build a fort on Mount Ilian.', 'Ayuman village', 'Fourth.png'),
(6, 'The Moro warriors arrived, but Agyu and the Ilianon fought back.', 'Ilian fortress', 'Fifth.png'),
(7, 'After the victory, Agyu decided to move to another town. They chose Mount Pinamaton.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'Ilian village', 'Sixth.png'),
(8, 'In the town of Bablayon, they were attacked by Agyu. His men fought until the arrival of Agyu\'s son, Tanagyaw.', 'Bablayon village', 'Seventh.png'),
(9, 'When the prophet foretold the end of the people of Bablayon, Tanagyaw opposed and punished him.', 'Bablayon village', 'Seventh.png'),
(10, 'Tanagyaw fought against the invaders on the shore.', 'Coastal area', 'Eight.png'),
(11, 'Agyu appointed his successful son Tanagyaw as the leader of the town.', 'Ilian village', 'Ninth.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `developer`
--
ALTER TABLE `developer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dialog`
--
ALTER TABLE `dialog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `character_id` (`character_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `developer`
--
ALTER TABLE `developer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dialog`
--
ALTER TABLE `dialog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dialog`
--
ALTER TABLE `dialog`
  ADD CONSTRAINT `dialog_ibfk_1` FOREIGN KEY (`character_id`) REFERENCES `characters` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
