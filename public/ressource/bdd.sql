-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 19 mai 2021 à 11:11
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cubes`
--
CREATE DATABASE IF NOT EXISTS `cubes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cubes`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `ArticleID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Title` varchar(254) NOT NULL,
  `Article` tinyint(1) NOT NULL,
  `Evenement` tinyint(1) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`ArticleID`, `Date`, `Title`, `Article`, `Evenement`, `UserID`, `Content`) VALUES
(8, '2021-05-20', 'Bienvenue sur le site ! ', 0, 1, 11, 'Le site di20'),
(9, '2021-05-21', 'Je suis le manager ', 1, 0, 10, 'Manager de l\'équipe overwatch');

-- --------------------------------------------------------

--
-- Structure de la table `characters`
--

CREATE TABLE `characters` (
  `CharacterID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Icon` text NOT NULL,
  `Img` text NOT NULL,
  `Description` text NOT NULL,
  `ClassID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `characters`
--

INSERT INTO `characters` (`CharacterID`, `Name`, `Icon`, `Img`, `Description`, `ClassID`) VALUES
(1, 'Ana', 'https://d1u1mce87gyfbn.cloudfront.net/hero/ana/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/ana/full-portrait.png', 'Après des années de solitude, ce pilier d’Overwatch est de retour pour défendre la nouvelle génération.', 3),
(2, 'Ange', 'https://d1u1mce87gyfbn.cloudfront.net/hero/mercy/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/mercy/full-portrait.png', 'Ange gardien et soigneuse altruiste sur le champ de bataille.\n\n', 3),
(3, 'Ashe', 'https://d1u1mce87gyfbn.cloudfront.net/hero/ashe/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/ashe/full-portrait.png ', 'Ashe fait feu rapidement en tenant sa carabine à hauteur de hanche ou bien utilise son viseur pour infliger un tir dévastateur. Elle peut faire sauter ses ennemis avec des bâtons de dynamite et les salves puissantes de son canon scié lui permettent de les repousser. Et elle n’est pas seule : quand le besoin s’en fait sentir, elle peut appeler à la rescousse Bob, son ami omniaque. ', 1),
(4, 'Baptiste', 'https://d1u1mce87gyfbn.cloudfront.net/hero/baptiste/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/baptiste/full-portrait.png ', 'Baptiste dispose d’un assortiment d’armes et d’appareils expérimentaux pour garder ses alliés en vie et éliminer les menaces en territoire hostile. Secouriste militaire aguerri, il est tout aussi capable de sauver des vies que d’éliminer l’ennemi. ', 3),
(5, 'Bastion', 'https://d1u1mce87gyfbn.cloudfront.net/hero/bastion/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/bastion/full-portrait.png ', 'Avec son protocole de réparation et sa capacité à alterner entre configuration d’assaut stationnaire, de reconnaissance ou de tank, les chances de victoire de Bastion sont très élevées. ', 1),
(6, 'Bouldozer', 'https://d1u1mce87gyfbn.cloudfront.net/hero/wrecking-ball/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/wrecking-ball/full-portrait.png ', 'Bouldozer roule sur le champ de bataille, en se servant de son arsenal et de son méca imposant pour écraser ses ennemis. ', 2),
(7, 'Brigitte', 'https://d1u1mce87gyfbn.cloudfront.net/hero/brigitte/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/brigitte/full-portrait.png ', 'Brigitte est spécialisée dans les armures. Elle peut lancer des modules de réparation pour soigner ses alliés, ou les soigner automatiquement quand elle inflige des dégâts à ses ennemis à l’aide de son fléau. Cette arme peut toucher plusieurs cibles à la fois et a la capacité d’effectuer une frappe cinglante qui étourdit un ennemi à distance. Quand Brigitte entre dans la mêlée, son bouclier-écran lui fournit une protection pendant qu’elle attaque ses ennemis avec sa charge de bouclier. Sa capacité ultime, Ralliement, lui octroie un bonus de vitesse non négligeable pendant quelques secondes et fournit un bonus d’armure persistant à tous ses alliés proches. ', 3),
(8, 'Chacal', 'https://d1u1mce87gyfbn.cloudfront.net/hero/junkrat/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/junkrat/full-portrait.png ', 'Chacal a tout ce qu’il faut dans son arsenal pour interdire l’accès d’une zone à ses adversaires : un lance-grenades qui tire des projectiles rebondissants, des mines incapacitantes qui envoient valser ses ennemis et des pièges d’acier pour les immobiliser. ', 1),
(9, 'Chopper', 'https://d1u1mce87gyfbn.cloudfront.net/hero/roadhog/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/roadhog/full-portrait.png ', 'Avec son emblématique traquelard, Chopper attrape et attire ses ennemis avant de les réduire en miettes d’un coup de déferrailleur. Il est assez robuste pour survivre à de lourds dégâts, et peut récupérer ses points de vie grâce à son inhalateur. ', 2),
(10, 'D.Va', 'https://d1u1mce87gyfbn.cloudfront.net/hero/dva/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/dva/full-portrait.png ', 'Le méca de D.Va est aussi agile que puissant : ses fusio-canons jumelés tirent en continu à courte portée, et elle peut activer ses turboréacteurs pour bondir par-dessus ennemis et obstacles, ou abattre les projectiles en plein air avec sa matrice défensive. ', 2),
(11, 'Doomfist', 'https://d1u1mce87gyfbn.cloudfront.net/hero/doomfist/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/doomfist/full-portrait.png ', 'Les améliorations cybernétiques de Doomfist font de lui un combattant de première ligne à la fois puissant et très mobile. Capable d’infliger des dégâts à distance avec son calibre prosthétique, il peut également frapper le sol pour projeter ses ennemis dans les airs, ou charger dans la mêlée grâce à son direct d’enfer. Face à un groupe compact, Doomfist bondit hors de vue de ses adversaires pour mieux s’écraser au sol dans une spectaculaire frappe météore. ', 1),
(12, 'Écho', 'https://d1u1mce87gyfbn.cloudfront.net/hero/echo/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/echo/full-portrait.png ', 'Écho est un robot évolutionnaire doté d’une intelligence artificielle à adaptation rapide, capable de remplir plusieurs rôles distincts sur le champ de bataille. ', 1),
(13, 'Fatale', 'https://d1u1mce87gyfbn.cloudfront.net/hero/widowmaker/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/widowmaker/full-portrait.png ', 'Fatale emploie tous les moyens à sa disposition pour éliminer ses cibles : des mines qui diffusent un gaz toxique, une visière qui confère une vision infrarouge à son équipe et un puissant fusil à lunette qui peut tirer en mode automatique. ', 1),
(14, 'Faucheur', 'https://d1u1mce87gyfbn.cloudfront.net/hero/reaper/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/reaper/full-portrait.png ', 'Avec Pompes funèbres, sa capacité spectrale lui permettant d’éviter tout dégât et son pouvoir à se déplacer dans les ombres, Faucheur est l’un des êtres les plus redoutables de la planète. ', 1),
(15, 'Genji', 'https://d1u1mce87gyfbn.cloudfront.net/hero/genji/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/genji/full-portrait.png ', 'Genji lance des shurikens précis et mortels sur ses cibles, et utilise son katana à la pointe de la technologie pour dévier les projectiles ou exécuter une Frappe du vent qui blesse sérieusement ses ennemis. ', 1),
(16, 'Hanzo', 'https://d1u1mce87gyfbn.cloudfront.net/hero/hanzo/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/hanzo/full-portrait.png ', 'Les flèches polyvalentes de Hanzo peuvent révéler ses ennemis, ou se fragmenter pour toucher plusieurs cibles. Il peut également grimper aux murs pour tirer depuis une position élevée, et invoquer un gigantesque esprit dragon. ', 1),
(17, 'Lúcio', 'https://d1u1mce87gyfbn.cloudfront.net/hero/lucio/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/lucio/full-portrait.png ', 'Sur le champ de bataille, l’ampli high-tech de Lúcio envoie des projectiles soniques sur ses ennemis et les repousse avec des ondes de choc. Ses chansons soignent ses alliés ou augmentent leur vitesse de déplacement, et il peut changer de morceau à la volée. ', 3),
(18, 'McCree', 'https://d1u1mce87gyfbn.cloudfront.net/hero/mccree/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/mccree/full-portrait.png ', 'Armé de son Pacificateur, McCree abat ses cibles avec une précision redoutable et se met à couvert plus vite que son ombre. ', 1),
(19, 'Mei', 'https://d1u1mce87gyfbn.cloudfront.net/hero/mei/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/mei/full-portrait.png ', 'Mei manipule le climat pour ralentir ses ennemis et protéger les endroits importants. Son canon endothermique projette de redoutables pointes de glace ou libère un flux de givre, et elle peut entrer en cryostase pour survivre aux contre-attaques, ou bloquer le chemin de l’équipe adverse avec un mur de glace. ', 1),
(20, 'Moira', 'https://d1u1mce87gyfbn.cloudfront.net/hero/moira/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/moira/full-portrait.png ', 'Les capacités biotiques de Moira lui permettent de contribuer aux soins prodigués ou aux dégâts infligés dans n’importe quelle situation. D’un coté, son emprise biotique lui permet d’intervenir à courte portée, de l’autre, son orbe biotique peut infliger des dégâts ou prodiguer des soins à longue distance. Elle peut également utiliser Volatilité pour échapper à des groupes d’ennemis ou rester à portée de ses alliés nécessitant son aide. Une fois Coalescence chargée, Moira peut éviter la mort à plusieurs alliés en même temps ou donner le coup de grâce à des ennemis déjà affaiblis. ', 3),
(21, 'Orisa', 'https://d1u1mce87gyfbn.cloudfront.net/hero/orisa/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/orisa/full-portrait.png ', 'Orisa est le pilier central de son équipe, qu’elle défend en première ligne grâce à son écran protecteur. Elle peut attaquer à distance, renforcer ses propres défenses, projeter des charges à gravitons qui ralentissent et déplacent ses adversaires, ou encore déployer un surchargeur qui augmente les dégâts infligés par plusieurs de ses alliés. ', 2),
(22, 'Pharah', 'https://d1u1mce87gyfbn.cloudfront.net/hero/pharah/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/pharah/full-portrait.png ', 'Fendant les airs dans son armure de combat et armée d’un lance-roquettes tirant des projectiles incapacitants ou dévastateurs, Pharah jouera assurément un rôle crucial dans chaque bataille. ', 1),
(23, 'Reinhardt', 'https://d1u1mce87gyfbn.cloudfront.net/hero/reinhardt/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/reinhardt/full-portrait.png ', 'Protégé par une armure motorisée, armé d’un marteau et propulsé par un réacteur, Reinhardt charge ses ennemis et défend ses alliés à l’aide d’une large écran énergétique. ', 2),
(24, 'Sigma', 'https://d1u1mce87gyfbn.cloudfront.net/hero/sigma/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/sigma/full-portrait.png ', 'Astrophysicien excentrique et tank lunatique capable de contrôler la pesanteur, Sigma doit son pouvoir à un accident de laboratoire. La Griffe le manipule pour s’en servir comme arme humaine. Une chose est sûre, on ne peut pas rater Sigma sur le champ de bataille. ', 2),
(25, 'Soldat : 76', 'https://d1u1mce87gyfbn.cloudfront.net/hero/soldier-76/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/soldier-76/full-portrait.png ', 'Équipé d’armes ultra avancées, dont un fusil à impulsions expérimental également capable de tirer plusieurs roquettes LX à la fois, soldat : 76 est un guerrier rapide et expérimenté qui sait soutenir ses alliés. ', 1),
(26, 'Sombra', 'https://d1u1mce87gyfbn.cloudfront.net/hero/sombra/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/sombra/full-portrait.png ', 'Ses talents de camouflage et ses attaques affaiblissantes font de Sombra une experte en infiltration. En piratant ses ennemis pour les déstabiliser, elle en fait des cibles faciles à éliminer tandis que son IEM peut conférer un avantage de poids contre des groupes entiers d’adversaires. Les capacités de transduction et de camouflage de Sombra en font une cible quasi insaisissable. ', 1),
(27, 'Symmetra', 'https://d1u1mce87gyfbn.cloudfront.net/hero/symmetra/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/symmetra/full-portrait.png ', 'Symmetra utilise son Projecteur à photons pour éliminer ses adversaires, protéger ses alliés, placer des téléporteurs et déployer des tourelles sentinelles à particules. ', 1),
(28, 'Torbjörn', 'https://d1u1mce87gyfbn.cloudfront.net/hero/torbjorn/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/torbjorn/full-portrait.png ', 'L’incroyable arsenal de Torbjörn comprend un pistolet à rivets, un marteau et une forge personnelle servant à construire des tourelles. ', 1),
(29, 'Tracer', 'https://d1u1mce87gyfbn.cloudfront.net/hero/tracer/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/tracer/full-portrait.png ', 'Armées de deux pulseurs, de bombes à retardement énergétiques et d’une langue bien pendue, Tracer est capable de passer immédiatement d’un endroit à un autre et de remonter dans le temps pour mieux combattre les injustices à travers le monde. ', 1),
(30, 'Winston', 'https://d1u1mce87gyfbn.cloudfront.net/hero/winston/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/winston/full-portrait.png ', 'Winston manie d’impressionnantes inventions (des propulseurs, un canon Tesla dévastateur et un générateur d’écran portable, entre autres) avec une force littéralement surhumaine. ', 2),
(31, 'Zarya', 'https://d1u1mce87gyfbn.cloudfront.net/hero/zarya/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/zarya/full-portrait.png ', 'Avec ses robustes écrans convertissant les dégâts subis en énergie pour son énorme canon à particules, Zarya représente un atout de choix pour tenir les premières lignes du champ de bataille. ', 2),
(32, 'Zenyatta', 'https://d1u1mce87gyfbn.cloudfront.net/hero/zenyatta/icon-portrait.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/zenyatta/full-portrait.png ', 'Zenyatta invoque des orbes d’harmonie et de discorde pour soigner ses coéquipiers et affaiblir ses ennemis, tout en maintenant un état de transcendance qui le rend insensible aux dégâts. ', 3);

-- --------------------------------------------------------

--
-- Structure de la table `class`
--

CREATE TABLE `class` (
  `ClassID` int(11) NOT NULL,
  `Type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `class`
--

INSERT INTO `class` (`ClassID`, `Type`) VALUES
(1, 'DPS'),
(2, 'TANK'),
(3, 'HEAL');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `CommentID` int(11) NOT NULL,
  `ArticleID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `UserID` int(11) NOT NULL,
  `Content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`CommentID`, `ArticleID`, `Date`, `UserID`, `Content`) VALUES
(3, 9, '2021-05-22', 8, 'Coach nous bien senpai Anwww~~');

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE `skills` (
  `SkillID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Icon` text NOT NULL,
  `Video` text NOT NULL,
  `CharacterID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `skills`
--

INSERT INTO `skills` (`SkillID`, `Name`, `Description`, `Icon`, `Video`, `CharacterID`) VALUES
(2, 'ORBE DE DESTRUCTION', 'Zenyatta lance ses orbes d’énergie destructrice soit individuellement, soit en rafale après avoir passé quelques secondes à rassembler de l’énergie.', 'https://d15f34w2p8l1cc.cloudfront.net/overwatch/5740abd7e5f0de513ebcb32b073f27ba8f5625804598d5762cefd0c7331c1437.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/zenyatta/ability-orb-of-destruction/video-ability.mp4', 32),
(3, 'ORBE D\'HARMONIE', 'Zenyatta lance un orbe au-dessus d’un allié ciblé. Tant que Zenyatta reste en vie, l’orbe restaure lentement les points de vie de cet allié. Ne peut être utilisé que sur un allié à la fois.', 'https://d15f34w2p8l1cc.cloudfront.net/overwatch/999f5d34dd3c8dfb045bc69129d1b6aac547b98e252b68f2599b878d15d841cb.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/zenyatta/ability-orb-of-harmony/video-ability.mp4', 32),
(4, 'ORBE DE DISCORDE', 'Lancer un orbe de discorde sur un ennemi amplifie la quantité de dégâts que celui-ci reçoit tant que Zenyatta est en vie. Ne peut être utilisé que sur un adversaire à la fois.', 'https://d15f34w2p8l1cc.cloudfront.net/overwatch/f416ae3c602c4f920551057176a3618441f943a0faea5e3cf77dc5db0e5128a5.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/zenyatta/ability-orb-of-discord/video-ability.mp4', 32),
(5, 'TRANSCENDANCE', 'Zenyatta parvient à accéder à un stade d’existence supérieur pendant un court moment. Tant qu’il se transcende, Zenyatta ne peut pas utiliser ses capacités ou ses armes, mais il est immunisé aux dégâts et restaure automatiquement ses points de vie et ceux des alliés proches.', '6ac5d4f08023cafc9f5412e45141cddecfdb2cb43ecf8415c12d1d161cce4678.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/zenyatta/ability-transcendence/video-ability.mp4', 32),
(6, 'FUSIL BIOTIQUE', 'Le fusil d’Ana projette des fléchettes qui régénèrent les points de vie de ses alliés ou infligent des dégâts continus à ses ennemis. La lunette de son fusil lui permet de zoomer sur ses cibles pour des tirs d’une extrême précision.', 'https://d15f34w2p8l1cc.cloudfront.net/overwatch/efe0ebb135e87dc26b60f0d20500dcd7553ad121ab2b10cd4ffb5db17be9c977.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/ana/ability-biotic-rifle/video-ability.mp4', 1),
(7, 'FLÉCHETTE HYPODERMIQUE', 'Ana tire une fléchette avec son arme de poing, provoquant l’évanouissement d’un ennemi (qui se réveille s’il subit des dégâts).', 'https://d15f34w2p8l1cc.cloudfront.net/overwatch/20707fd82265412fdc6d2353daa88ec7558cd71c89aa3ac6cf0e78bbbfcabd80.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/ana/ability-sleep-dart/video-ability.mp4', 1),
(8, 'GRENADE BIOTIQUE', 'Ana lance une bombe biotique qui inflige des dégâts aux ennemis et soigne les alliés dans une zone de taille réduite. Pendant un court moment, les alliés affectés reçoivent plus de soins de toutes les sources, tandis que les ennemis pris dans l’explosion ne peuvent temporairement plus être soignés.', 'https://d15f34w2p8l1cc.cloudfront.net/overwatch/c8190b234bf0a0e28eecffe162d0c942e6b8656e95f4688c6ca3b025fa5a487d.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/ana/ability-biotic-grenade/video-ability.mp4', 1),
(9, 'NANOBOOST', 'Lorsqu’ils reçoivent un bonus de combat de la part d’Ana, ses alliés infligent plus de dégâts et résistent mieux aux attaques ennemies.', 'https://d15f34w2p8l1cc.cloudfront.net/overwatch/6fda18b343f3fd0e8dc50fa5a91589e1ca9ed7471a354f61dfc9f22b27b19497.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/ana/ability-nano-boost/video-ability.mp4', 1),
(10, 'ARC TEMPÊTE', 'Hanzo encoche une flèche et la décoche sur sa cible.', 'https://d15f34w2p8l1cc.cloudfront.net/overwatch/1aa4358e8a1d423dd55669780908b856141a783d053224b629b064c66288469e.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/hanzo/ability-storm-bow/video-ability.mp4', 16),
(11, 'FLÈCHE SONIQUE', 'Hanzo projette une flèche équipée d’un sonar ; celle-ci marque tous les ennemis dans son rayon de détection et les rend plus faciles à traquer pour Hanzo et ses alliés.', 'https://d15f34w2p8l1cc.cloudfront.net/overwatch/6a71d18cc52e49380aa9eb57f979524033a3e79bd3153900a12bb553d5a0e6f0.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/hanzo/ability-sonic-arrow/video-ability.mp4', 16),
(12, 'RAFALE', 'Les prochaines flèches d’Hanzo sont lancées instantanément, mais leurs dégâts sont réduits.', 'https://d15f34w2p8l1cc.cloudfront.net/overwatch/92c56621ba267d94f16baacda3f10ba7777b475935981b02e5026449d8e3d79c.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/hanzo/ability-storm-arrows/video-ability.mp4', 16),
(13, 'FENTE', 'Hanzo peut effectuer des doubles sauts, ce qui lui permet de changer de direction dans les airs.', 'https://d15f34w2p8l1cc.cloudfront.net/overwatch/cd1390347345e7825dff95758b3d5ed02a3497a013400a4faaefb2c77f07ee14.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/hanzo/ability-lunge/video-ability.mp4', 16),
(14, 'FRAPPE DU DRAGON', 'Hanzo invoque l’esprit d’un dragon qui fend les airs devant lui. Il traverse les murs sur son passage et dévore tous les ennemis rencontrés.', 'https://d15f34w2p8l1cc.cloudfront.net/overwatch/f2d63b8f0e19e91d2c1199ed3ac0f20bb180dabe9ad1ffc7d1f1e880e58f0220.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/hanzo/ability-dragonstrike/video-ability.mp4', 16),
(15, 'MARTEAU À RÉACTION', 'Le marteau à réaction de Reinhardt est une arme de combat rapproché exemplaire, capable d’infliger des dégâts brutaux sur un large arc à chaque coup.', 'https://d15f34w2p8l1cc.cloudfront.net/overwatch/572da2aefdb8e3c9142e5146bc51b75269937ecca413e38bae18dcdafac15b1f.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/reinhardt/ability-rocket-hammer/video-ability.mp4', 23),
(16, 'ÉCRAN', 'Reinhardt déploie devant lui un large écran énergétique qui peut absorber une grande quantité de dégâts avant de disparaître. Reinhardt peut se protéger ainsi que ses compagnons qui se trouvent derrière l’écran, mais il ne peut pas attaquer pendant qu’il le maintient en place.', 'https://d15f34w2p8l1cc.cloudfront.net/overwatch/299d97f5f256197df2698c32678314f9e08f04bbf68eba3801992e08281fd481.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/reinhardt/ability-barrier-field/video-ability.mp4', 23),
(17, 'CHARGE', 'Reinhardt charge droit devant lui et saisit le premier ennemi qui se trouve sur son chemin. S’il entre en collision avec un mur, les adversaires qu’il porte sont écrasés et subissent des dégâts extrêmes.', 'https://d15f34w2p8l1cc.cloudfront.net/overwatch/40c9f1c060033e58120c9ec174008b8f5d833412923f7f351a32e5df47fe8166.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/reinhardt/ability-charge/video-ability.mp4', 23),
(18, 'FRAPPE DE FEU', 'En faisant tournoyer son marteau devant lui, Reinhardt envoie un projectile enflammé qui transperce et inflige des dégâts à tous les ennemis qu’il touche.', 'https://d15f34w2p8l1cc.cloudfront.net/overwatch/568a5f49875557f735af36dce68474a923f7e8582a7be20fb68b6ee66ac077e6.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/reinhardt/ability-fire-strike/video-ability.mp4', 23),
(19, 'CHOC SISMIQUE', 'Reinhardt abat son marteau à réaction sur le sol, ce qui blesse et renverse tous les ennemis devant lui.', 'https://d15f34w2p8l1cc.cloudfront.net/overwatch/a63041a68d81c202a47a95035878edcfa75d5aa3f72414a7e84e1b1a68594bed.png', 'https://d1u1mce87gyfbn.cloudfront.net/hero/reinhardt/ability-earthshatter/video-ability.mp4', 23);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Pseudo` varchar(25) NOT NULL,
  `Fname` varchar(25) NOT NULL,
  `Lname` varchar(25) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Password` text NOT NULL,
  `CharacterID` int(11) DEFAULT NULL,
  `Player` tinyint(1) NOT NULL,
  `Admin` tinyint(1) NOT NULL,
  `Manager` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`UserID`, `Pseudo`, `Fname`, `Lname`, `Mail`, `Password`, `CharacterID`, `Player`, `Admin`, `Manager`) VALUES
(8, 'Kik0uDu13', 'Timothé', 'DUPOND', 'timothé.dupond@gmail.com', '$2y$10$BHX63G.yWt4y7mhkb0.1EefbuMcVnWzs5QGfa2dq4wwJ5dKNhQvVG', NULL, 1, 0, 0),
(9, 'Kik0uDu14', 'Timothéo', 'DUPONDO', 'timothéo.dupondo@gmail.com', '$2y$10$BHX63G.yWt4y7mhkb0.1EefbuMcVnWzs5QGfa2dq4wwJ5dKNhQvVG', NULL, 1, 0, 0),
(10, 'BigManager', 'Alexandre', 'LEMOYEN', 'BigManager.LEMOYEN@gmail.com', '$2y$10$BHX63G.yWt4y7mhkb0.1EefbuMcVnWzs5QGfa2dq4wwJ5dKNhQvVG', NULL, 0, 0, 1),
(11, 'Mao', 'Maori', 'VAHANA', 'Maori.Vahana@gmail.com', '$2y$10$BHX63G.yWt4y7mhkb0.1EefbuMcVnWzs5QGfa2dq4wwJ5dKNhQvVG', NULL, 0, 1, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ArticleID`),
  ADD KEY `UserID` (`UserID`);

--
-- Index pour la table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`CharacterID`),
  ADD KEY `ClassID` (`ClassID`);

--
-- Index pour la table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`ClassID`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `ArticleID` (`ArticleID`);

--
-- Index pour la table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`SkillID`),
  ADD KEY `CharacterID` (`CharacterID`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `CharacterID` (`CharacterID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `ArticleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `characters`
--
ALTER TABLE `characters`
  MODIFY `CharacterID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `class`
--
ALTER TABLE `class`
  MODIFY `ClassID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
  MODIFY `SkillID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Contraintes pour la table `characters`
--
ALTER TABLE `characters`
  ADD CONSTRAINT `characters_ibfk_1` FOREIGN KEY (`ClassID`) REFERENCES `class` (`ClassID`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`ArticleID`) REFERENCES `articles` (`ArticleID`);

--
-- Contraintes pour la table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`CharacterID`) REFERENCES `characters` (`CharacterID`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`CharacterID`) REFERENCES `characters` (`CharacterID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
