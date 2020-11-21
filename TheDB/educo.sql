-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 02:37 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educo`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `category_description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_description`) VALUES
(1, 'fed', ''),
(2, 'Java', 'Java and related subroutines'),
(3, 'PHP', 'Php and related sub routines\r\n\r\n'),
(4, 'Laravel', 'Php framework'),
(5, 'Django', 'Python famework'),
(6, 'Python', 'Python and related subroutines'),
(7, 'C++', 'C++ and related subroutines'),
(8, 'Windows', 'Windows OS and related subroutines and troubleshooting tips'),
(9, 'A# .NET', ''),
(10, 'A# (Axiom)', ''),
(11, 'A-0 System', ''),
(12, 'A+', ''),
(13, 'A++', ''),
(14, 'ABAP', ''),
(15, 'ABC', ''),
(16, 'ABC ALGOL', ''),
(17, 'ABLE', ''),
(18, 'ABSET', ''),
(19, 'ABSYS', ''),
(20, 'ACC', ''),
(21, 'Accent', ''),
(22, 'Ace DASL', ''),
(23, 'ACL2', ''),
(24, 'ACT-III', ''),
(25, 'Action!', ''),
(26, 'ActionScript', ''),
(27, 'Ada', ''),
(28, 'Adenine', ''),
(29, 'Agda', ''),
(30, 'Agilent VEE', ''),
(31, 'Agora', ''),
(32, 'AIMMS', ''),
(33, 'Alef', ''),
(34, 'ALF', ''),
(35, 'ALGOL 58', ''),
(36, 'ALGOL 60', ''),
(37, 'ALGOL 68', ''),
(38, 'ALGOL W', ''),
(39, 'Alice', ''),
(40, 'Alma-0', ''),
(41, 'AmbientTalk', ''),
(42, 'Amiga E', ''),
(43, 'AMOS', ''),
(44, 'AMPL', ''),
(45, 'APL', ''),
(46, 'App Inventor for Android\'s visual block language', ''),
(47, 'AppleScript', ''),
(48, 'Arc', ''),
(49, 'ARexx', ''),
(50, 'Argus', ''),
(51, 'AspectJ', ''),
(52, 'Assembly language', ''),
(53, 'ATS', ''),
(54, 'Ateji PX', ''),
(55, 'AutoHotkey', ''),
(56, 'Autocoder', ''),
(57, 'AutoIt', ''),
(58, 'AutoLISP / Visual LISP', ''),
(59, 'Averest', ''),
(60, 'AWK', ''),
(61, 'Axum', ''),
(62, 'B', ''),
(63, 'Babbage', ''),
(64, 'Bash', ''),
(65, 'BASIC', ''),
(66, 'bc', ''),
(67, 'BCPL', ''),
(68, 'BeanShell', ''),
(69, 'Batch (Windows/Dos)', ''),
(70, 'Bertrand', ''),
(71, 'BETA', ''),
(72, 'Bigwig', ''),
(73, 'Bistro', ''),
(74, 'BitC', ''),
(75, 'BLISS', ''),
(76, 'Blue', ''),
(77, 'Bon', ''),
(78, 'Boo', ''),
(79, 'Boomerang', ''),
(80, 'Bourne shell', ''),
(81, 'bash', ''),
(82, 'ksh', ''),
(83, 'BREW', ''),
(84, 'BPEL', ''),
(85, 'C', ''),
(86, 'C--', ''),
(87, 'C#', ''),
(88, 'C/AL', ''),
(89, 'Caché ObjectScript', ''),
(90, 'C Shell', ''),
(91, 'Caml', ''),
(92, 'Candle', ''),
(93, 'Cayenne', ''),
(94, 'CDuce', ''),
(95, 'Cecil', ''),
(96, 'Cel', ''),
(97, 'Cesil', ''),
(98, 'Ceylon', ''),
(99, 'CFEngine', ''),
(100, 'CFML', ''),
(101, 'Cg', ''),
(102, 'Ch', ''),
(103, 'Chapel', ''),
(104, 'CHAIN', ''),
(105, 'Charity', ''),
(106, 'Charm', ''),
(107, 'Chef', ''),
(108, 'CHILL', ''),
(109, 'CHIP-8', ''),
(110, 'chomski', ''),
(111, 'ChucK', ''),
(112, 'CICS', ''),
(113, 'Cilk', ''),
(114, 'CL', ''),
(115, 'Claire', ''),
(116, 'Clarion', ''),
(117, 'Clean', ''),
(118, 'Clipper', ''),
(119, 'CLIST', ''),
(120, 'Clojure', ''),
(121, 'CLU', ''),
(122, 'CMS-2', ''),
(123, 'COBOL', ''),
(124, 'Cobra', ''),
(125, 'CODE', ''),
(126, 'CoffeeScript', ''),
(127, 'Cola', ''),
(128, 'ColdC', ''),
(129, 'ColdFusion', ''),
(130, 'COMAL', ''),
(131, 'Combined Programming Language', ''),
(132, 'COMIT', ''),
(133, 'Common Intermediate Language', ''),
(134, 'Common Lisp', ''),
(135, 'COMPASS', ''),
(136, 'Component Pascal', ''),
(137, 'Constraint Handling Rules', ''),
(138, 'Converge', ''),
(139, 'Cool', ''),
(140, 'Coq', ''),
(141, 'Coral 66', ''),
(142, 'Corn', ''),
(143, 'CorVision', ''),
(144, 'COWSEL', ''),
(145, 'CPL', ''),
(146, 'csh', ''),
(147, 'CSP', ''),
(148, 'Csound', ''),
(149, 'CUDA', ''),
(150, 'Curl', ''),
(151, 'Curry', ''),
(152, 'Cyclone', ''),
(153, 'Cython', ''),
(154, 'D', ''),
(155, 'DASL', ''),
(156, 'DASL', ''),
(157, 'Dart', ''),
(158, 'DataFlex', ''),
(159, 'Datalog', ''),
(160, 'DATATRIEVE', ''),
(161, 'dBase', ''),
(162, 'dc', ''),
(163, 'DCL', ''),
(164, 'Deesel', ''),
(165, 'Delphi', ''),
(166, 'DCL', ''),
(167, 'DinkC', ''),
(168, 'DIBOL', ''),
(169, 'Dog', ''),
(170, 'Draco', ''),
(171, 'DRAKON', ''),
(172, 'Dylan', ''),
(173, 'DYNAMO', ''),
(174, 'E', ''),
(175, 'E#', ''),
(176, 'Ease', ''),
(177, 'Easy PL/I', ''),
(178, 'Easy Programming Language', ''),
(179, 'EASYTRIEVE PLUS', ''),
(180, 'ECMAScript', ''),
(181, 'Edinburgh IMP', ''),
(182, 'EGL', ''),
(183, 'Eiffel', ''),
(184, 'ELAN', ''),
(185, 'Elixir', ''),
(186, 'Elm', ''),
(187, 'Emacs Lisp', ''),
(188, 'Emerald', ''),
(189, 'Epigram', ''),
(190, 'EPL', ''),
(191, 'Erlang', ''),
(192, 'es', ''),
(193, 'Escapade', ''),
(194, 'Escher', ''),
(195, 'ESPOL', ''),
(196, 'Esterel', ''),
(197, 'Etoys', ''),
(198, 'Euclid', ''),
(199, 'Euler', ''),
(200, 'Euphoria', ''),
(201, 'EusLisp Robot Programming Language', ''),
(202, 'CMS EXEC', ''),
(203, 'EXEC 2', ''),
(204, 'Executable UML', ''),
(205, 'F', ''),
(206, 'F#', ''),
(207, 'Factor', ''),
(208, 'Falcon', ''),
(209, 'Fancy', ''),
(210, 'Fantom', ''),
(211, 'FAUST', ''),
(212, 'Felix', ''),
(213, 'Ferite', ''),
(214, 'FFP', ''),
(215, 'Fjölnir', ''),
(216, 'FL', ''),
(217, 'Flavors', ''),
(218, 'Flex', ''),
(219, 'FLOW-MATIC', ''),
(220, 'FOCAL', ''),
(221, 'FOCUS', ''),
(222, 'FOIL', ''),
(223, 'FORMAC', ''),
(224, '@Formula', ''),
(225, 'Forth', ''),
(226, 'Fortran', ''),
(227, 'Fortress', ''),
(228, 'FoxBase', ''),
(229, 'FoxPro', ''),
(230, 'FP', ''),
(231, 'FPr', ''),
(232, 'Franz Lisp', ''),
(233, 'F-Script', ''),
(234, 'FSProg', ''),
(235, 'G', ''),
(236, 'Google Apps Script', ''),
(237, 'Game Maker Language', ''),
(238, 'GameMonkey Script', ''),
(239, 'GAMS', ''),
(240, 'GAP', ''),
(241, 'G-code', ''),
(242, 'Genie', ''),
(243, 'GDL', ''),
(244, 'Gibiane', ''),
(245, 'GJ', ''),
(246, 'GEORGE', ''),
(247, 'GLSL', ''),
(248, 'GNU E', ''),
(249, 'GM', ''),
(250, 'Go', ''),
(251, 'Go!', ''),
(252, 'GOAL', ''),
(253, 'Gödel', ''),
(254, 'Godiva', ''),
(255, 'GOM (Good Old Mad)', ''),
(256, 'Goo', ''),
(257, 'Gosu', ''),
(258, 'GOTRAN', ''),
(259, 'GPSS', ''),
(260, 'GraphTalk', ''),
(261, 'GRASS', ''),
(262, 'Groovy', ''),
(263, 'Hack (programming language)', ''),
(264, 'HAL/S', ''),
(265, 'Hamilton C shell', ''),
(266, 'Harbour', ''),
(267, 'Hartmann pipelines', ''),
(268, 'Haskell', ''),
(269, 'Haxe', ''),
(270, 'High Level Assembly', ''),
(271, 'HLSL', ''),
(272, 'Hop', ''),
(273, 'Hope', ''),
(274, 'Hugo', ''),
(275, 'Hume', ''),
(276, 'HyperTalk', ''),
(277, 'IBM Basic assembly language', ''),
(278, 'IBM HAScript', ''),
(279, 'IBM Informix-4GL', ''),
(280, 'IBM RPG', ''),
(281, 'ICI', ''),
(282, 'Icon', ''),
(283, 'Id', ''),
(284, 'IDL', ''),
(285, 'Idris', ''),
(286, 'IMP', ''),
(287, 'Inform', ''),
(288, 'Io', ''),
(289, 'Ioke', ''),
(290, 'IPL', ''),
(291, 'IPTSCRAE', ''),
(292, 'ISLISP', ''),
(293, 'ISPF', ''),
(294, 'ISWIM', ''),
(295, 'J', ''),
(296, 'J#', ''),
(297, 'J++', ''),
(298, 'JADE', ''),
(299, 'Jako', ''),
(300, 'JAL', ''),
(301, 'Janus', ''),
(302, 'JASS', ''),
(303, 'JavaScript', ''),
(304, 'JCL', ''),
(305, 'JEAN', ''),
(306, 'Join Java', ''),
(307, 'JOSS', ''),
(308, 'Joule', ''),
(309, 'JOVIAL', ''),
(310, 'Joy', ''),
(311, 'JScript', ''),
(312, 'JScript .NET', ''),
(313, 'JavaFX Script', ''),
(314, 'Julia', ''),
(315, 'Jython', ''),
(316, 'K', ''),
(317, 'Kaleidoscope', ''),
(318, 'Karel', ''),
(319, 'Karel++', ''),
(320, 'KEE', ''),
(321, 'Kixtart', ''),
(322, 'KIF', ''),
(323, 'Kojo', ''),
(324, 'Kotlin', ''),
(325, 'KRC', ''),
(326, 'KRL', ''),
(327, 'KUKA', ''),
(328, 'KRYPTON', ''),
(329, 'ksh', ''),
(330, 'L', ''),
(331, 'L# .NET', ''),
(332, 'LabVIEW', ''),
(333, 'Ladder', ''),
(334, 'Lagoona', ''),
(335, 'LANSA', ''),
(336, 'Lasso', ''),
(337, 'LaTeX', ''),
(338, 'Lava', ''),
(339, 'LC-3', ''),
(340, 'Leda', ''),
(341, 'Legoscript', ''),
(342, 'LIL', ''),
(343, 'LilyPond', ''),
(344, 'Limbo', ''),
(345, 'Limnor', ''),
(346, 'LINC', ''),
(347, 'Lingo', ''),
(348, 'Linoleum', ''),
(349, 'LIS', ''),
(350, 'LISA', ''),
(351, 'Lisaac', ''),
(352, 'Lisp', ''),
(353, 'Lite-C', ''),
(354, 'Lithe', ''),
(355, 'Little b', ''),
(356, 'Logo', ''),
(357, 'Logtalk', ''),
(358, 'LPC', ''),
(359, 'LSE', ''),
(360, 'LSL', ''),
(361, 'LiveCode', ''),
(362, 'LiveScript', ''),
(363, 'Lua', ''),
(364, 'Lucid', ''),
(365, 'Lustre', ''),
(366, 'LYaPAS', ''),
(367, 'Lynx', ''),
(368, 'M2001', ''),
(369, 'M4', ''),
(370, 'Machine code', ''),
(371, 'MAD', ''),
(372, 'MAD/I', ''),
(373, 'Magik', ''),
(374, 'Magma', ''),
(375, 'make', ''),
(376, 'Maple', ''),
(377, 'MAPPER', ''),
(378, 'MARK-IV', ''),
(379, 'Mary', ''),
(380, 'MASM Microsoft Assembly x86', ''),
(381, 'Mathematica', ''),
(382, 'MATLAB', ''),
(383, 'Maxima', ''),
(384, 'Macsyma', ''),
(385, 'Max', ''),
(386, 'MaxScript', ''),
(387, 'Maya (MEL)', ''),
(388, 'MDL', ''),
(389, 'Mercury', ''),
(390, 'Mesa', ''),
(391, 'Metacard', ''),
(392, 'Metafont', ''),
(393, 'MetaL', ''),
(394, 'Microcode', ''),
(395, 'MicroScript', ''),
(396, 'MIIS', ''),
(397, 'MillScript', ''),
(398, 'MIMIC', ''),
(399, 'Mirah', ''),
(400, 'Miranda', ''),
(401, 'MIVA Script', ''),
(402, 'ML', ''),
(403, 'Moby', ''),
(404, 'Model 204', ''),
(405, 'Modelica', ''),
(406, 'Modula', ''),
(407, 'Modula-2', ''),
(408, 'Modula-3', ''),
(409, 'Mohol', ''),
(410, 'MOO', ''),
(411, 'Mortran', ''),
(412, 'Mouse', ''),
(413, 'MPD', ''),
(414, 'CIL', ''),
(415, 'MSL', ''),
(416, 'MUMPS', ''),
(417, 'NASM', ''),
(418, 'NATURAL', ''),
(419, 'Napier88', ''),
(420, 'Neko', ''),
(421, 'Nemerle', ''),
(422, 'nesC', ''),
(423, 'NESL', ''),
(424, 'Net.Data', ''),
(425, 'NetLogo', ''),
(426, 'NetRexx', ''),
(427, 'NewLISP', ''),
(428, 'NEWP', ''),
(429, 'Newspeak', ''),
(430, 'NewtonScript', ''),
(431, 'NGL', ''),
(432, 'Nial', ''),
(433, 'Nice', ''),
(434, 'Nickle', ''),
(435, 'NPL', ''),
(436, 'Not eXactly C', ''),
(437, 'Not Quite C', ''),
(438, 'NSIS', ''),
(439, 'Nu', ''),
(440, 'NWScript', ''),
(441, 'NXT-G', ''),
(442, 'o:XML', ''),
(443, 'Oak', ''),
(444, 'Oberon', ''),
(445, 'Obix', ''),
(446, 'OBJ2', ''),
(447, 'Object Lisp', ''),
(448, 'ObjectLOGO', ''),
(449, 'Object REXX', ''),
(450, 'Object Pascal', ''),
(451, 'Objective-C', ''),
(452, 'Objective-J', ''),
(453, 'Obliq', ''),
(454, 'Obol', ''),
(455, 'OCaml', ''),
(456, 'occam', ''),
(457, 'occam-?', ''),
(458, 'Octave', ''),
(459, 'OmniMark', ''),
(460, 'Onyx', ''),
(461, 'Opa', ''),
(462, 'Opal', ''),
(463, 'OpenCL', ''),
(464, 'OpenEdge ABL', ''),
(465, 'OPL', ''),
(466, 'OPS5', ''),
(467, 'OptimJ', ''),
(468, 'Orc', ''),
(469, 'ORCA/Modula-2', ''),
(470, 'Oriel', ''),
(471, 'Orwell', ''),
(472, 'Oxygene', ''),
(473, 'Oz', ''),
(474, 'P#', ''),
(475, 'ParaSail (programming language)', ''),
(476, 'PARI/GP', ''),
(477, 'Pascal', ''),
(478, 'Pawn', ''),
(479, 'PCASTL', ''),
(480, 'PCF', ''),
(481, 'PEARL', ''),
(482, 'PeopleCode', ''),
(483, 'Perl', ''),
(484, 'PDL', ''),
(485, 'Phrogram', ''),
(486, 'Pico', ''),
(487, 'Picolisp', ''),
(488, 'Pict', ''),
(489, 'Pike', ''),
(490, 'PIKT', ''),
(491, 'PILOT', ''),
(492, 'Pipelines', ''),
(493, 'Pizza', ''),
(494, 'PL-11', ''),
(495, 'PL/0', ''),
(496, 'PL/B', ''),
(497, 'PL/C', ''),
(498, 'PL/I', ''),
(499, 'PL/M', ''),
(500, 'PL/P', ''),
(501, 'PL/SQL', ''),
(502, 'PL360', ''),
(503, 'PLANC', ''),
(504, 'Plankalkül', ''),
(505, 'Planner', ''),
(506, 'PLEX', ''),
(507, 'PLEXIL', ''),
(508, 'Plus', ''),
(509, 'POP-11', ''),
(510, 'PostScript', ''),
(511, 'PortablE', ''),
(512, 'Powerhouse', ''),
(513, 'PowerBuilder', ''),
(514, 'PowerShell', ''),
(515, 'PPL', ''),
(516, 'Processing', ''),
(517, 'Processing.js', ''),
(518, 'Prograph', ''),
(519, 'PROIV', ''),
(520, 'Prolog', ''),
(521, 'PROMAL', ''),
(522, 'Promela', ''),
(523, 'PROSE modeling language', ''),
(524, 'PROTEL', ''),
(525, 'ProvideX', ''),
(526, 'Pro*C', ''),
(527, 'Pure', ''),
(528, 'Q (equational programming language)', ''),
(529, 'Q (programming language from Kx Systems)', ''),
(530, 'Qalb', ''),
(531, 'Qi', ''),
(532, 'QtScript', ''),
(533, 'QuakeC', ''),
(534, 'QPL', ''),
(535, 'R', ''),
(536, 'R++', ''),
(537, 'Racket', ''),
(538, 'RAPID', ''),
(539, 'Rapira', ''),
(540, 'Ratfiv', ''),
(541, 'Ratfor', ''),
(542, 'rc', ''),
(543, 'REBOL', ''),
(544, 'Red', ''),
(545, 'Redcode', ''),
(546, 'REFAL', ''),
(547, 'Reia', ''),
(548, 'Revolution', ''),
(549, 'rex', ''),
(550, 'REXX', ''),
(551, 'Rlab', ''),
(552, 'RobotC', ''),
(553, 'ROOP', ''),
(554, 'RPG', ''),
(555, 'RPL', ''),
(556, 'RSL', ''),
(557, 'RTL/2', ''),
(558, 'Ruby', ''),
(559, 'RuneScript', ''),
(560, 'Rust', ''),
(561, 'S', ''),
(562, 'S2', ''),
(563, 'S3', ''),
(564, 'S-Lang', ''),
(565, 'S-PLUS', ''),
(566, 'SA-C', ''),
(567, 'SabreTalk', ''),
(568, 'SAIL', ''),
(569, 'SALSA', ''),
(570, 'SAM76', ''),
(571, 'SAS', ''),
(572, 'SASL', ''),
(573, 'Sather', ''),
(574, 'Sawzall', ''),
(575, 'SBL', ''),
(576, 'Scala', ''),
(577, 'Scheme', ''),
(578, 'Scilab', ''),
(579, 'Scratch', ''),
(580, 'Script.NET', ''),
(581, 'Sed', ''),
(582, 'Seed7', ''),
(583, 'Self', ''),
(584, 'SenseTalk', ''),
(585, 'SequenceL', ''),
(586, 'SETL', ''),
(587, 'Shift Script', ''),
(588, 'SIMPOL', ''),
(589, 'Shakespeare', ''),
(590, 'SIGNAL', ''),
(591, 'SiMPLE', ''),
(592, 'SIMSCRIPT', ''),
(593, 'Simula', ''),
(594, 'Simulink', ''),
(595, 'SISAL', ''),
(596, 'SLIP', ''),
(597, 'SMALL', ''),
(598, 'Smalltalk', ''),
(599, 'Small Basic', ''),
(600, 'SML', ''),
(601, 'Snap!', ''),
(602, 'SNOBOL', ''),
(603, 'SPITBOL', ''),
(604, 'Snowball', ''),
(605, 'SOL', ''),
(606, 'Span', ''),
(607, 'SPARK', ''),
(608, 'SPIN', ''),
(609, 'SP/k', ''),
(610, 'SPS', ''),
(611, 'Squeak', ''),
(612, 'Squirrel', ''),
(613, 'SR', ''),
(614, 'S/SL', ''),
(615, 'Stackless Python', ''),
(616, 'Starlogo', ''),
(617, 'Strand', ''),
(618, 'Stata', ''),
(619, 'Stateflow', ''),
(620, 'Subtext', ''),
(621, 'SuperCollider', ''),
(622, 'SuperTalk', ''),
(623, 'Swift (Apple programming language)', ''),
(624, 'Swift (parallel scripting language)', ''),
(625, 'SYMPL', ''),
(626, 'SyncCharts', ''),
(627, 'SystemVerilog', ''),
(628, 'T', ''),
(629, 'TACL', ''),
(630, 'TACPOL', ''),
(631, 'TADS', ''),
(632, 'TAL', ''),
(633, 'Tcl', ''),
(634, 'Tea', ''),
(635, 'TECO', ''),
(636, 'TELCOMP', ''),
(637, 'TeX', ''),
(638, 'TEX', ''),
(639, 'TIE', ''),
(640, 'Timber', ''),
(641, 'TMG', ''),
(642, 'Tom', ''),
(643, 'TOM', ''),
(644, 'Topspeed', ''),
(645, 'TPU', ''),
(646, 'Trac', ''),
(647, 'TTM', ''),
(648, 'T-SQL', ''),
(649, 'TTCN', ''),
(650, 'Turing', ''),
(651, 'TUTOR', ''),
(652, 'TXL', ''),
(653, 'TypeScript', ''),
(654, 'Turbo C++', ''),
(655, 'Ubercode', ''),
(656, 'UCSD Pascal', ''),
(657, 'Umple', ''),
(658, 'Unicon', ''),
(659, 'Uniface', ''),
(660, 'UNITY', ''),
(661, 'Unix shell', ''),
(662, 'UnrealScript', ''),
(663, 'Vala', ''),
(664, 'VBA', ''),
(665, 'VBScript', ''),
(666, 'Verilog', ''),
(667, 'VHDL', ''),
(668, 'Visual Basic', ''),
(669, 'Visual Basic .NET', ''),
(670, 'Visual DataFlex', ''),
(671, 'Visual DialogScript', ''),
(672, 'Visual Fortran', ''),
(673, 'Visual FoxPro', ''),
(674, 'Visual J++', ''),
(675, 'Visual J#', ''),
(676, 'Visual Objects', ''),
(677, 'Visual Prolog', ''),
(678, 'VSXu', ''),
(679, 'Vvvv', ''),
(680, 'WATFIV, WATFOR', ''),
(681, 'WebDNA', ''),
(682, 'WebQL', ''),
(683, 'Windows PowerShell', ''),
(684, 'Winbatch', ''),
(685, 'Wolfram', ''),
(686, 'Wyvern', ''),
(687, 'X++', ''),
(688, 'X#', ''),
(689, 'X10', ''),
(690, 'XBL', ''),
(691, 'XC', ''),
(692, 'XMOS architecture', ''),
(693, 'xHarbour', ''),
(694, 'XL', ''),
(695, 'Xojo', ''),
(696, 'XOTcl', ''),
(697, 'XPL', ''),
(698, 'XPL0', ''),
(699, 'XQuery', ''),
(700, 'XSB', ''),
(701, 'XSLT', ''),
(702, 'XPath', ''),
(703, 'Xtend', ''),
(704, 'Yorick', ''),
(705, 'YQL', ''),
(706, 'Z notation', ''),
(707, 'Zeno', ''),
(708, 'ZOPL', ''),
(709, 'ZPL', ''),
(710, 'MySQL', ''),
(711, 'PostgreSQL', ''),
(712, 'Microsoft Access', ''),
(713, 'SQL Server', ''),
(714, 'FileMaker', ''),
(715, 'Oracle', ''),
(716, 'RDBMS', ''),
(717, 'dBASE', ''),
(718, 'Clipper', ''),
(719, 'FoxPro', ''),
(720, 'AdonisJS', ''),
(721, 'Apache Wicket', ''),
(722, 'ASP.NET Core', ''),
(723, 'CakePHP', ''),
(724, 'Catalyst', ''),
(725, 'CodeIgniter', ''),
(726, 'CppCMS', ''),
(727, 'Django', ''),
(728, 'The Gravity Framework', ''),
(729, 'Gridfyx PHP', ''),
(730, 'Jam.py', ''),
(731, 'Yii', ''),
(732, 'Laravel', ''),
(733, 'Mojolicious', ''),
(734, 'Ruby on Rails', ''),
(735, 'Sails.js', ''),
(736, 'Symfony', ''),
(737, 'Spring MVC', ''),
(738, 'Wt (web toolkit)', ''),
(739, 'Zend Framework[19]', ''),
(740, 'QCObjects', ''),
(741, 'Phoenix', ''),
(742, 'Atomic CSS', ''),
(743, 'Blueprint', ''),
(744, 'Bootstrap', ''),
(745, 'Bulma', ''),
(746, 'Undernet', ''),
(747, 'Foundation', ''),
(748, 'Semantic UI', ''),
(749, 'Yoghurt', ''),
(750, 'YAML', ''),
(751, 'Materialize', ''),
(752, 'Tailwind', ''),
(753, 'Pure CSS', ''),
(754, 'UI Kit', ''),
(755, 'Spectre', ''),
(756, 'Tachyons', ''),
(757, 'Miligram', ''),
(758, 'Mathematics', ''),
(759, 'Humanities & Religion', ''),
(760, 'Law', ''),
(761, 'Philosophy', ''),
(762, 'Languages', ''),
(763, 'Literature', ''),
(764, 'Arts Sports and Culture', ''),
(765, 'Lifestyle', ''),
(766, 'SQL', ''),
(767, 'Networking', ''),
(768, 'CISCO', ''),
(769, 'Amazon Web Services(AWS)', ''),
(770, 'Tkinter', ''),
(771, 'Cloud computing', ''),
(772, 'Statistics', ''),
(773, 'Science', ''),
(774, 'IOT', ''),
(775, 'Quantum Compting', ''),
(776, 'Security', ''),
(777, 'AngularJS', ''),
(778, 'Ember.js', ''),
(779, 'ExtJS', ''),
(780, 'Knockout.js', ''),
(781, 'Meteor.js', ''),
(782, 'React js', ''),
(783, 'Vue.js', ''),
(784, 'Svelte js', ''),
(785, 'chart.js', ''),
(786, 'video.js', ''),
(787, 'iframe', '');

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL DEFAULT 1,
  `is_type` text NOT NULL,
  `st` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`, `is_type`, `st`) VALUES
(1, 2, 1, 'Hello', '2020-11-21 13:15:39', 0, '', ''),
(2, 1, 2, 'Hello\n', '2020-11-21 13:29:07', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_message` text NOT NULL,
  `comment_topic` int(11) NOT NULL,
  `comment_by` int(11) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_message`, `comment_topic`, `comment_by`, `comment_date`) VALUES
(1, '<p>We need to complete this before today</p>\n', 2, 10, '2020-11-21 08:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `flags`
--

CREATE TABLE `flags` (
  `complain_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `flag_date` date NOT NULL DEFAULT current_timestamp(),
  `status` text NOT NULL DEFAULT 'Flagged'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flags`
--

INSERT INTO `flags` (`complain_id`, `topic_id`, `description`, `flag_date`, `status`) VALUES
(1, 0, 'It has an issue', '2020-11-21', 'Deleted'),
(2, 2, 'It is inappropriate', '2020-11-21', 'Flagged'),
(5, 5, 'It has an issue', '2020-11-21', 'Deleted'),
(4, 4, 'It has an issue', '2020-11-21', 'Deleted');

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `issue_id` int(20) NOT NULL,
  `issue_by` int(20) NOT NULL,
  `issue_name` text NOT NULL,
  `issue_desc` text NOT NULL,
  `issue_date` date NOT NULL,
  `status` text NOT NULL DEFAULT 'Active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`issue_id`, `issue_by`, `issue_name`, `issue_desc`, `issue_date`, `status`) VALUES
(1, 2, 'Issue', 'I have an issue', '2020-11-21', 'Resolved'),
(2, 2, 'Issue two', 'I have another issue', '2020-11-21', 'Resolved'),
(3, 1, 'Issue Five', 'I have an issue', '2020-11-21', 'Resolved');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `reply_id` int(11) NOT NULL,
  `reply_content` text NOT NULL,
  `reply_to` int(11) NOT NULL,
  `reply_by` int(11) NOT NULL,
  `reply_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`reply_id`, `reply_content`, `reply_to`, `reply_by`, `reply_date`) VALUES
(1, '<p>Yes we really need to</p>\n', 0, 10, '2020-11-21 08:48:40');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topic_id` int(11) NOT NULL,
  `topic_subject` text NOT NULL,
  `topic_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `topic_category` text NOT NULL,
  `topic_by` int(11) NOT NULL,
  `topic_description` text NOT NULL,
  `topic_status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_subject`, `topic_date`, `topic_category`, `topic_by`, `topic_description`, `topic_status`) VALUES
(2, 'Pending Tasks', '2020-11-21 06:07:26', '3', 1, '<ol>\n	<li>Activate Side Nav Links&nbsp;<input type=\"checkbox\" /></li>\n	<li>Style Top Nav + Fixed Search bar, Navigation no - wrap&nbsp;<input type=\"checkbox\" /></li>\n	<li>Echo image session either from google login or db&nbsp;<input type=\"checkbox\" /></li>\n	<li>Send multiple select array to db&nbsp;<input type=\"checkbox\" /></li>\n	<li>Admin pgination&nbsp;<input type=\"checkbox\" /></li>\n	<li>Unify topics/comments in dashboard.php&nbsp;<input type=\"checkbox\" /></li>\n	<li>Encrypt user info as is passed to Oauth&nbsp;<input type=\"checkbox\" /></li>\n	<li>About Us&nbsp;<input type=\"checkbox\" /></li>\n	<li>Settings&nbsp;<input type=\"checkbox\" /></li>\n	<li>Google Oauth disconnect on logout&nbsp;<input name=\"Complete\" required=\"required\" type=\"checkbox\" value=\"1\" /></li>\n	<li><textarea>Add more</textarea></li>\n</ol>\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `user_name` text NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL,
  `user_about` text NOT NULL,
  `user_image` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_type` text NOT NULL DEFAULT 'User'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `user_name`, `user_email`, `user_password`, `user_about`, `user_image`, `date_created`, `user_type`) VALUES
(1, 'Rees Alumasa', '@rees_alumasa', 'reesalumasa@gmail.com', '$2y$10$gO/LODCrSAB9hEfz1L.oeuIyxY6FfPD2CQ8DxVfwGnhHKsPvm87Rm', 'Student', '1605889783.jpg', '2020-11-21 09:04:41', 'User'),
(2, 'Cyprian Kyalo', '@Cyprian', 'cypkyalo17@gmail.com', '$2y$10$BAUKodu18QO9RrQ8GNu4Xu0djbhPsf3F.FH9/pcLI2trkQlmeedu.', 'I am a student', '1605963507.PNG', '2020-11-21 12:58:59', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comment_topic` (`comment_topic`,`comment_by`),
  ADD KEY `comment_by` (`comment_by`);

--
-- Indexes for table `flags`
--
ALTER TABLE `flags`
  ADD PRIMARY KEY (`complain_id`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`issue_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`reply_id`),
  ADD KEY `reply_to` (`reply_to`,`reply_by`),
  ADD KEY `reply_by` (`reply_by`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`),
  ADD KEY `topic_by` (`topic_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=788;

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `flags`
--
ALTER TABLE `flags`
  MODIFY `complain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `issue_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
