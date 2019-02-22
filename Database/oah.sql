-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 22, 2019 at 11:05 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oah`
--
CREATE DATABASE IF NOT EXISTS `oah` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `oah`;

-- --------------------------------------------------------

--
-- Table structure for table `callback_form_data`
--

CREATE TABLE IF NOT EXISTS `callback_form_data` (
  `id` varchar(100) NOT NULL,
  `timezone` int(100) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `order_type` text NOT NULL,
  `reason` varchar(500) NOT NULL,
  `contact_time` datetime NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `callback_form_data`
--

INSERT INTO `callback_form_data` (`id`, `timezone`, `phone`, `order_type`, `reason`, `contact_time`, `timestamp`) VALUES
('TMP7087EXI1', 91, 7087264779, 'EXISTING ORDER', 'Hi Ashish', '2018-12-31 01:30:00', '2019-02-20 22:07:17'),
('TMP7087EXI2', 0, 7087264779, 'EXISTING ORDER', 'Tell me my order id status ASAP.', '2019-02-25 01:30:00', '2019-02-20 22:11:26'),
('TMP7087NEW3', 91, 7087264779, 'NEW ORDER', 'Please check if worked himanshu?', '2019-02-22 15:30:00', '2019-02-22 10:00:51');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=240 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D''IVOIRE', 'Cote D''Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE''S REPUBLIC OF', 'Korea, Democratic People''s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE''S DEMOCRATIC REPUBLIC', 'Lao People''s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `expert_data`
--

CREATE TABLE IF NOT EXISTS `expert_data` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `client_rating` double NOT NULL,
  `location` varchar(50) NOT NULL,
  `order_c` int(100) NOT NULL,
  `status` int(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image_path` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=256 ;

--
-- Dumping data for table `expert_data`
--

INSERT INTO `expert_data` (`id`, `name`, `specialization`, `client_rating`, `location`, `order_c`, `status`, `timestamp`, `image_path`) VALUES
(130, 'Kathleen Jackson', 'Management', 4.3, 'Melbourne, Australia', 3227, 1, '2019-01-28 17:40:57', 'Kathleenjackson.jpg'),
(131, 'Iveth Fonseca', 'Management', 3.9, 'Sydney, Australia', 2398, 1, '2019-01-28 17:52:01', 'IvethFonseca.jpg'),
(132, 'Cherrine Short', 'Management, General', 4.5, 'Melbourne, Australia', 1285, 1, '2019-01-28 17:53:15', 'CherrineShort.jpg'),
(133, 'Gracia Kennyta', 'Management', 4.8, 'Marryland, United States of America', 3025, 1, '2019-01-28 17:56:32', 'Gracia.jpg'),
(134, 'Abby Miller', 'Management/General/Project Management/Operations Management', 5, 'Cambridge, United Kingdom', 3317, 1, '2019-01-28 17:58:15', 'AbbyMiller.jpg'),
(135, 'Lydia Sserwadda', 'Management, General', 4.5, 'Cambridge, United Kingdom', 2285, 1, '2019-01-28 17:59:07', 'LydiaSserwadda.jpg'),
(136, 'Eronita Costa', 'Management/IT', 4.5, 'Melbourne, Australia', 1972, 1, '2019-01-28 17:59:56', 'EronitaCosta.jpg'),
(137, 'Mr Thomas Andrews', 'Management/General/Project Management/HRM specific', 4.6, 'Sydney, Australia', 2830, 1, '2019-01-28 18:01:08', 'MrThomasAndrews.jpg'),
(138, 'Mr Algernon Henry', 'Public Health, Management, Marketing', 5, 'Cambridge, United Kingdom', 3420, 1, '2019-01-28 18:02:02', 'MrAlgernonHenry.jpg'),
(139, 'Eliya Manson', 'Marketing, HRM, Finance (Theory)', 4.3, 'Mexico City, Mexico', 1108, 1, '2019-01-28 18:02:53', 'EliyaManson.jpg'),
(140, 'Kim Vicki', 'Nursing', 4.4, 'Bristol, United Kingdom', 893, 1, '2019-01-28 18:03:52', 'KimVicki.jpg'),
(141, 'Elmer Wheeler', 'Marketing, HRM, IT, Elec & Comm', 3.6, 'Sydney, Australia', 785, 1, '2019-01-28 18:04:41', 'ElmerWheeler.jpg'),
(142, 'Master Hudson Trevor', 'Management, Sociology, History, Psychology, Ethics', 4, 'Melbourne, Australia', 1932, 1, '2019-01-28 18:05:30', 'MasterHudsonTrevor.jpg'),
(143, 'Marcia Forrest', 'Management, Finance', 4.5, 'Bristol, United Kingdom', 2843, 1, '2019-01-28 18:06:29', 'MarciaForrest.jpg'),
(144, 'Sandra Jordan', 'Management (Preferably)/Engineering/Statistics', 4.3, 'Cambridge, United Kingdom', 1867, 1, '2019-01-28 18:07:40', 'sandra.jpg'),
(145, 'Camila Manson', '"Health/Medicine/Management/Law/Finance/Accounting/General Subjects "', 4.2, 'Mexico City, Mexico', 2284, 1, '2019-01-28 18:09:02', 'CamilaManson.jpg'),
(146, 'Mr Ramon Artagaveytia', 'Business management, finance, Research methodology, marketing, strategy, legal environment', 3.5, 'Sydney, Australia', 997, 1, '2019-01-28 18:10:23', 'MrRamonArtagaveytia.jpg'),
(147, 'April Wheeler', 'Management', 3.5, 'Nairobi, Kenya ', 839, 1, '2019-01-28 18:11:19', 'AprilWheeler.jpg'),
(148, 'Mr Henry Stewart', 'Management/Nursing/Economics/General Subjects', 3.9, 'Sydney, Australia', 1282, 1, '2019-01-28 18:14:17', 'MrHenryStewart.jpg'),
(150, 'Mr Mauritz Hokan', 'Management/Taxation Law/Maths/ Accounting/ IT', 4.3, 'Cape Town, South Africa ', 2976, 1, '2019-01-28 18:23:21', 'MrMauritzhokan.jpg'),
(151, 'Sanjana Costa', 'Management', 4.4, 'Bristol, United Kingdom', 2764, 1, '2019-01-28 18:26:31', 'SanjanaCosta.jpg'),
(152, 'Chelsea Tompson', 'Business Management, Essay', 4.3, 'Melbourne, Australia', 1539, 1, '2019-01-28 18:27:42', 'ChelseaTompson.jpg'),
(153, 'Marca Torez', 'Management', 4.25, 'Perth, Australia', 2683, 1, '2019-01-28 18:28:31', 'MarcaTorez.jpg'),
(154, 'Mr George Andrew', 'Marketing, HRM, Finance (Theory)', 4.8, 'Cambridge, United Kingdom', 2494, 1, '2019-01-28 18:29:18', 'MrGeorgeAndrew.jpg'),
(155, 'Mr Edward Pennington', 'Marketing, HRM, Sociology, Literature', 4.2, 'Melbourne, Australia', 1876, 1, '2019-01-28 18:29:57', 'MrEdwardPennington.jpg'),
(156, 'Neca Rivera', 'Management, Humanities, General Subjects', 4.5, 'Mexico City, Mexico', 3079, 1, '2019-01-28 18:30:38', 'NecaRivera.jpg'),
(157, 'Mr Harry Anderson', 'Management', 4.5, 'DÃ¼sseldorf, Germany', 2867, 1, '2019-01-28 18:31:22', 'MrHarryAnderson.jpg'),
(158, 'Caseyf Savage', 'Project Management, Operations Research, Management', 4.7, 'DÃ¼sseldorf, Germany', 2649, 1, '2019-01-28 18:32:10', 'CaseyfSavage.jpg'),
(159, 'Mr William Ernest', 'Management', 3.6, 'Sydney, Australia', 869, 1, '2019-01-28 18:32:49', 'MrWilliamErnest.jpg'),
(160, 'Mr Herbert Fuller', 'Management', 3.9, 'Sydney, Australia', 2107, 1, '2019-01-28 18:33:42', 'MrHerbertFuller.jpg'),
(161, 'Mr Karl Howell', 'Management', 3.7, 'Nairobi, Kenya ', 2076, 1, '2019-01-28 18:34:28', 'MrKarlHowell.jpg'),
(162, 'Natasha Walker', 'Management, English Literature, Humanities', 4.3, 'Mumbai, India ', 2276, 1, '2019-01-28 18:35:05', 'NatashaWalker.jpg'),
(163, 'Debbie Jefferson', 'Nursing', 4.5, 'Marryland, United States of America', 2739, 1, '2019-01-28 18:35:56', 'DebbieJefferson.jpg'),
(164, 'Jasmine Staggers', 'Nursing, Public Health', 4.6, 'Sydney, Australia', 2496, 1, '2019-01-28 18:36:49', 'JasmineStaggers.jpg'),
(165, 'Leticia Goodman', 'Nursing', 4.4, 'Melbourne, Australia', 2369, 1, '2019-01-28 18:37:35', 'LeticiaGoodman.jpg'),
(166, 'Jessica Rohbock', 'Nursing', 4.3, 'Marryland, United States of America', 1367, 1, '2019-01-28 18:49:57', 'jessicarohbok.jpg'),
(167, 'Julia Timpson', 'Nursing, Public Health', 4, 'Bristol, United Kingdom', 1576, 1, '2019-01-28 18:51:03', 'JuliaTimpson.jpg'),
(168, 'Lori Chatwin', 'Nursing, Public Health', 4.2, 'Marryland, United States of America', 2166, 1, '2019-01-28 18:51:51', 'LoriChatwin.jpg'),
(169, 'Mr Edward Pomeroy', '"Public Health, Management, Marketing Simple Nursing Tasks"', 4.2, 'Sydney, Australia', 2693, 1, '2019-01-28 18:55:24', 'edwardpomeroy.jpg'),
(170, 'Â John Bertram', '"Nursing/Bio-technology/SPSS/Statistics/Botany/Zoology "', 3.9, 'DÃ¼sseldorf, Germany', 2483, 1, '2019-01-28 18:56:49', 'JohnBertram.jpg'),
(171, 'Albert Adrian', 'Nursing', 3.8, 'Sydney, Australia', 1387, 1, '2019-01-28 18:57:40', 'AlbertAdrian.jpg'),
(172, 'Peter Dennis', 'Nursing', 4.6, 'Perth, Australia', 2039, 1, '2019-01-28 18:58:40', 'Peterdennis.jpg'),
(173, 'Cathy Stubbs', 'Biotechnology and Bioinformatics', 4.8, 'Melbourne, Australia', 2573, 1, '2019-01-28 18:59:26', 'CathyStubbs.jpg'),
(174, 'Celine Moore', 'Nursing', 4.5, 'London, England ', 1878, 1, '2019-01-28 19:00:16', 'CelinMoore.jpg'),
(176, 'Thomas Parnham', '"Health/Medicine/Nursing/General Subjects "', 4.4, 'London, England ', 2685, 1, '2019-01-28 19:05:47', 'ThomasParnham.jpg'),
(177, 'William Crothers', 'Nursing', 4.8, 'Melbourne, Australia', 1868, 1, '2019-01-28 19:07:55', 'WilliamCrothers.jpg'),
(178, 'CruzÂ Febres', 'Nursing/General Subjects', 3.8, 'Nairobi, Kenya ', 962, 1, '2019-01-28 19:09:26', 'CruzFebres.jpg'),
(179, 'OliverÂ Shine', 'Nursing/Dental Science/Medical Science/Public Health & Education', 4, 'Bristol, United Kingdom', 2395, 1, '2019-01-28 19:10:33', 'OliverShine.jpg'),
(180, 'BarneyÂ Balls', 'Nursing, Public Health, Botany', 4.7, 'London, England ', 2776, 1, '2019-01-28 19:11:44', 'BarneyBalls.jpg'),
(181, 'Judy Stubbs', 'Nursing', 3.7, 'Nairobi, Kenya ', 766, 1, '2019-01-28 19:12:38', 'JudyStubbs.jpg'),
(182, 'Jeniffer Christopher', 'Biology', 4.4, 'London, England ', 1622, 1, '2019-01-28 19:13:23', 'JenifferChristopher.jpg'),
(183, 'AntoineÂ Remington', 'Biotechnology, Microbiology', 3.9, 'Boston, United States of America', 906, 1, '2019-01-28 19:14:24', 'AntoineRemington.jpg'),
(184, 'TomasÂ Hentz', 'Nursing, Psychology, Management, Literature, Environmental Sciences', 4.1, 'North Yorkshire, United Kingdom', 2487, 1, '2019-01-28 19:16:18', 'TomasHentz.jpg'),
(185, 'Vinisha Vinny', 'Accounting & Finance', 4.8, 'Melbourne, Australia', 3239, 1, '2019-01-28 19:18:38', 'VinishaVinny.jpg'),
(186, 'BorisÂ Wooding', 'accounting, finance, taxation, law, management, managerial accounting and auditing', 4.7, 'Cambridge, United States of America', 2993, 1, '2019-01-28 19:19:33', 'BorisWooding.jpg'),
(187, 'TyronÂ Liao', 'Accounting & Finance', 4.5, 'Melbourne, Australia', 2165, 1, '2019-01-28 19:21:30', 'TyronLiao.jpg'),
(188, 'AdrianÂ Kiely', 'Finance and Accounts', 4.2, 'London, England ', 2383, 1, '2019-01-28 19:22:39', 'AdrianKiely.jpg'),
(189, 'Sandra Lopez', 'Finance, Accountancy,MYOB, Perdisco', 4.8, 'London, England ', 1897, 1, '2019-01-28 19:24:38', 'SandraLopez.jpg'),
(190, 'AugustÂ Loar', 'MYOB Perdisco', 4.3, 'Sydney, Australia', 982, 1, '2019-01-28 19:25:31', 'AugustLoar.jpg'),
(191, 'Amber Smith', 'Finance, Accounting, Taxation', 4, 'London, England ', 2009, 1, '2019-01-28 19:26:26', 'AmberSmith.jpg'),
(192, 'GregÂ Follansbee', 'Accounting, Finance', 3.8, 'Mexico City, Mexico', 1337, 1, '2019-01-28 19:27:27', 'GregFollansbee.jpg'),
(193, 'Natasha Reynolds', 'Taxation Law/Maths/ Accounting/ IT', 4.6, 'Melbourne, Australia', 2277, 1, '2019-01-28 19:28:17', 'NatashaReynolds.jpg'),
(194, 'TysonÂ Hoffert', 'Accounts/Finance/Taxation (Basic level)', 4.1, 'London, England ', 1289, 1, '2019-01-28 19:30:09', 'TysonHoffert.jpg'),
(195, 'Felicia Cushingberry', 'Accounting(Theory)', 4.1, 'Melbourne, Australia', 772, 1, '2019-01-28 19:31:10', 'FeliciaCushingberry.jpg'),
(196, 'CharleyÂ Corey', 'Finance and Accounts', 3.7, 'Nairobi, Kenya ', 1008, 1, '2019-01-28 19:32:12', 'CharleyCorey.jpg'),
(197, 'AlexÂ Pellerin', 'Accounting, Finance, HRM, Management', 3.9, 'Sydney, Australia', 1193, 1, '2019-01-28 19:33:00', 'AlexPellerin.jpg'),
(198, 'Tracie Callahan', 'Finance (Theory)', 3.8, 'London, England ', 702, 1, '2019-01-28 19:34:29', 'TracieCallahan.jpg'),
(199, 'Mayra Garcia', 'Finance (Theory)', 4.2, 'Sydney, Australia', 836, 1, '2019-01-28 19:35:23', 'MayraGarcia.jpg'),
(200, 'DominicÂ Reny', 'Accounting, finance, law and Perdicso', 4.4, 'Melbourne, Australia', 2448, 1, '2019-01-28 19:36:19', 'DominicReny.jpg'),
(201, 'Shirley Caesar', 'Accounts, Finance', 4.2, 'North Yorkshire, United Kingdom', 1393, 1, '2019-01-28 19:37:55', 'ShirleyCaesar.jpg'),
(202, 'Sherika Holliman', 'Accounts and Finance', 4.3, 'Melbourne, Australia', 2673, 1, '2019-01-28 19:39:39', 'SherikaHolliman.jpg'),
(203, 'TreyÂ Shumway', 'statistics/ RP/RS/SPSS', 4.5, 'Cambridge, United States of America', 3209, 1, '2019-01-28 19:42:24', 'TreyShumway.jpg'),
(204, 'AlfredoÂ Hedgpeth', 'statistics', 3.8, 'Sydney, Australia', 725, 1, '2019-01-28 19:43:11', 'AlfredoHedgpeth.jpg'),
(205, 'ShaneÂ Hieber', 'SPSS/Statistics', 4.4, 'Cambridge, United States of America', 2377, 1, '2019-01-28 19:44:51', 'ShaneHieber.jpg'),
(206, 'Jasmine Green', 'statistics/ RP/MATLAB/ SPSS', 4.3, 'Sydney, Australia', 2859, 1, '2019-01-28 19:45:46', 'JasmineGreen.jpg'),
(207, 'RashadÂ Suazo', 'statistics/ DA', 3.9, 'Cambridge, United States of America', 886, 1, '2019-01-28 19:46:45', 'RashadSuazo.jpg'),
(208, 'Mayra Servellon', 'STATS, SPSS, FINANCE & MATHS AND BASIC R PROGRAMMING', 3.8, 'Melbourne, Australia', 2085, 1, '2019-01-28 19:47:49', 'MayraServellon.jpg'),
(209, 'Cristina Criado', 'Engineering/Statistics', 4.2, 'London, England ', 2253, 1, '2019-01-28 19:51:48', 'CristinaCriado.jpg'),
(210, 'JasperÂ Dearth', 'statistics/SPSS', 3.8, 'Melbourne, Australia', 957, 1, '2019-01-28 19:52:50', 'JasperDearth.jpg'),
(211, 'AntioneÂ Vanscyoc', 'SPSS', 4.5, 'Cambridge, United States of America', 1153, 1, '2019-01-28 20:08:02', 'AntioneVanscyoc.jpg'),
(212, 'Tatiana Martinez', 'statistics', 4.4, 'Cambridge, United States of America', 2004, 1, '2019-01-28 20:09:28', 'TatianaMartinez.jpg'),
(213, 'BartÂ Ancona', 'Statistics/ Stata/ Minitab/ EViews', 4.6, 'New York, United States of America', 1355, 1, '2019-01-28 20:10:23', 'BartAncona.jpg'),
(214, 'OliverÂ Rippel', 'Law', 4.6, 'North Yorkshire, United Kingdom', 2995, 1, '2019-01-28 20:11:00', 'OliverRippel.jpg'),
(215, 'Melissa Renee Guzman', 'Law,Taxation Law', 4.2, 'Melbourne, Australia', 3228, 1, '2019-01-28 20:11:35', 'MelissaReneeGuzman.jpg'),
(216, 'SammyÂ Thiry', 'Criminal Law', 3.9, 'Boston, United States of America', 2576, 1, '2019-01-28 20:12:22', 'SammyThiry.jpg'),
(217, 'Noah Hill', 'Law', 4.8, 'Melbourne, Australia', 3413, 1, '2019-01-28 20:13:03', 'NoahHill.jpg'),
(218, 'Fernanda Tomazini', 'Law', 4.2, 'Boston, United States of America', 1992, 1, '2019-01-28 20:13:41', 'FernandaTomazini.jpg'),
(219, 'Christina Black Adams', 'Law', 3.9, 'Boston, United States of America', 1872, 1, '2019-01-28 20:14:20', 'ChristinaBlackAdams.jpg'),
(220, 'MarcÂ Collington', '"Health/Medicine/Management/Law/Finance/Accounting/General Subjects  "', 4.4, 'North Yorkshire, United Kingdom', 2663, 1, '2019-01-28 20:15:15', 'MarcCollington.jpg'),
(221, 'Michelle Krueger', 'Law', 4.9, 'California, United States of America ', 1907, 1, '2019-01-28 20:15:59', 'MichelleKrueger.jpg'),
(222, 'KevenÂ Ziemer', 'Law', 4, 'Sydney, Australia', 1382, 1, '2019-01-28 20:16:30', 'KevenZiemer.jpg'),
(223, 'JamieÂ Bolles', 'Law', 4.1, 'Boston, United States of America', 2221, 1, '2019-01-28 20:17:12', 'JamieBolles.jpg'),
(224, 'BenjaminÂ Mcadam', 'Law', 4.3, 'Boston, United States of America', 2159, 1, '2019-01-28 20:17:55', 'BenjaminMcadam.jpg'),
(225, 'Stephanie Paswinski', 'Economics', 4.1, 'Sydney, Australia', 1995, 1, '2019-01-28 20:19:23', 'StephaniePaswinski.jpg'),
(226, 'Jessica Pierce', 'Economics', 4.5, 'Melbourne, Australia', 3008, 1, '2019-01-28 20:20:12', 'JessicaPierce.jpg'),
(227, 'Pamela Taveras', 'Economics', 4.8, 'North Yorkshire, United Kingdom', 2996, 1, '2019-01-28 20:20:50', 'PamelaTaveras.jpg'),
(228, 'WinfredÂ Kastner', 'Economics', 4.6, 'Melbourne, Australia', 3482, 1, '2019-01-28 20:22:12', 'WinfredKastner(2).jpg'),
(229, 'Barrington Simms', 'Economics/General Subjects', 3.8, 'Toronto, Canada', 1755, 1, '2019-01-28 20:23:02', 'BarringtonSimms.jpg'),
(230, 'Patrick Wynne', 'Economics', 4.7, 'Chicago, United States of America', 1850, 1, '2019-01-28 20:23:50', 'PatrickWynne.jpg'),
(231, 'Valentina Zevallos', 'Microeconomics/General Subjects', 4, 'Mexico City, Mexico', 1688, 1, '2019-01-28 20:35:02', 'ValentinaZevallos.jpg'),
(232, 'Rosa Lutchiano', 'Business Economics', 3.8, 'Mexico City, Mexico', 1334, 1, '2019-01-28 20:40:26', 'RosaLutchiano.jpg'),
(233, 'Belle Elida', 'Economics (Micro & Macro)', 3.7, 'Ottawa, Canada', 762, 1, '2019-01-28 20:41:42', 'BelleElida.jpg'),
(234, 'Roger Sedgwick', 'MATLAB,Unix,C++,Python', 4.3, 'Melbourne, Australia', 2492, 1, '2019-01-28 20:42:27', 'RogerSedgwick.jpg'),
(235, 'Julia Rae', 'Information Technology/Computer Science/Java', 4.7, 'New York, United States of America', 3018, 1, '2019-01-28 20:43:16', 'JuliaRae.jpg'),
(236, 'Rupert Finch', 'SQL, Database', 4.5, 'Melbourne, Australia', 1977, 1, '2019-01-28 20:44:03', 'RupertFinch.jpg'),
(237, 'Derek Channon', 'IT, C, C++', 4, 'Toronto, Canada', 1556, 1, '2019-01-28 20:44:51', 'DerekChannon(2).jpg'),
(238, 'Zoe Anton', 'Solidworks, CATIA, CREO, ANSYS and mechanical engineering concepts. I can write reports, papers rela', 4.7, 'DÃ¼sseldorf, Germany', 2808, 1, '2019-01-28 20:46:43', 'ZoeAnton.jpg'),
(239, 'Valerie Bloom', 'PhP, Jquery, Javascript, Css, Html, Sql', 4.5, 'North Yorkshire, United Kingdom', 3116, 1, '2019-01-28 20:48:34', 'ValerieBloom.jpg'),
(240, 'Rebecca Barter ', 'Solidwork', 4.3, 'DÃ¼sseldorf, Germany', 1349, 1, '2019-01-28 20:49:31', 'RebeccaBarter.jpg'),
(242, 'Ayesha Quereshi', 'C++, Java, Python, Perl, C', 3.9, 'Karachi, Pakistan', 1229, 1, '2019-01-28 20:51:07', 'AyeshaQuereshi.jpg'),
(243, 'Olivia Clarke', 'C/C++/Java/Database/Netbeans eclipse', 4.1, 'Melbourne, Australia', 2669, 1, '2019-01-28 20:51:48', 'OliviaClarke.jpg'),
(244, 'Jack Trevor', 'CREO3, PRO STATA, SOLIDWORKS', 4.2, 'DÃ¼sseldorf, Germany', 2387, 1, '2019-01-28 20:52:28', 'JackTrevor.jpg'),
(245, 'Natalie Faulkner', 'MATLAB/C/C++/Computer Programming', 4.7, 'Melbourne, Australia', 2804, 1, '2019-01-28 20:55:03', 'nataliefaulkner.jpg'),
(246, 'Hugh Walwin', 'Java/C/C++/.Net/Php/Python/Perl/MySQL/Android/Objective C/Swift', 4.8, 'Toronto, Canada', 3112, 1, '2019-01-28 20:56:16', 'HughWalwin.jpg'),
(247, 'Shahrukh ', 'Engineering Theory', 3.8, 'Karachi, Pakistan', 1362, 1, '2019-01-28 20:57:44', 'Shahrukh.jpg'),
(248, 'Pamela Portman', 'C++, Core JAVA, SQL', 4.6, 'Toronto, Canada', 2763, 1, '2019-01-28 20:58:45', 'PamelaPortman.jpg'),
(249, 'Jenny Taylor', 'Electrical Engineering', 4.3, 'DÃ¼sseldorf, Germany', 1329, 1, '2019-01-28 20:59:26', 'JennyTaylor.jpg'),
(250, 'Kenneth Young', 'Electronic Engineering/PCB Design/Embedded System Design/Simulation on Proteus CAD/Dashboard Program', 4.6, 'Toronto, Canada', 2469, 1, '2019-01-28 21:00:18', 'KennethYoung.jpg'),
(251, 'June Willis', 'Java(1.8/1.7/1.6/1.5/1.5), Servlet, JSP, J2EE, Struts 2.x, Spring Core, Spring-Boot, Spring-WS, Spri', 4.7, 'Melbourne, Australia', 3219, 1, '2019-01-28 21:01:06', 'JuneWillis.jpg'),
(252, 'Diana  Calvert ', 'Networking', 4.6, 'DÃ¼sseldorf, Germany', 2239, 1, '2019-01-28 21:01:50', 'DianaCalvert.jpg'),
(253, 'Emily Sturgis', 'JAVA, C/C++, C#, VB, MySQL, PHP , Python and Ruby', 4.2, 'Melbourne, Australia', 2688, 1, '2019-01-28 21:02:31', 'EmilySturgis.jpg'),
(254, 'Colin McGee', 'Statistician, Financial and Investment Analyst', 5, 'New York, United States of America', 2729, 1, '2019-01-28 21:03:23', 'ColinMcGee.jpg'),
(255, 'George Calvert', 'Computer Organization and architecture, programing', 4.6, 'Copenhagen, Denmark', 2183, 1, '2019-01-28 21:08:25', 'GeorgeCalvert.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `get_orderid`
--

CREATE TABLE IF NOT EXISTS `get_orderid` (
  `orderid` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `get_orderid`
--

INSERT INTO `get_orderid` (`orderid`) VALUES
('260220191325');

-- --------------------------------------------------------

--
-- Table structure for table `mini_form_data`
--

CREATE TABLE IF NOT EXISTS `mini_form_data` (
  `id` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `page_count` int(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mini_form_data`
--

INSERT INTO `mini_form_data` (`id`, `email`, `subject`, `date`, `page_count`, `timestamp`) VALUES
('TMP20190221ARTS1', 'anand@gmail.com', 'Arts', '2019-02-21 21:31:00', 7, '2019-02-20 16:02:17'),
('TMP20190222HIST2', 'test@gmail.com', 'History', '2019-02-22 03:37:00', 6, '2019-02-20 22:08:54'),
('TMP20190226GEOG3', 'test1@gmail.com', 'Geography', '2019-02-26 03:39:00', 9, '2019-02-20 22:09:34');

-- --------------------------------------------------------

--
-- Table structure for table `order_chat`
--

CREATE TABLE IF NOT EXISTS `order_chat` (
  `serial_no` int(255) NOT NULL AUTO_INCREMENT,
  `orderid` varchar(400) NOT NULL,
  `author` varchar(20) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`serial_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `order_chat`
--

INSERT INTO `order_chat` (`serial_no`, `orderid`, `author`, `message`, `time`) VALUES
(2, '19122018111', 'Admin', 'Hi Sir/Ma''am, Please Enter your query or suggestion. We will revert back to you as soon as possible.', '2019-02-18 11:32:50'),
(3, '28122018122', 'Admin', 'Hi Sir/Ma''am, Please Enter your query or suggestion. We will revert back to you as soon as possible.', '2019-02-19 16:45:39'),
(4, '21122018313', 'Admin', 'Hi Sir/Ma''am, Please Enter your query or suggestion. We will revert back to you as soon as possible.', '2019-02-18 11:35:29'),
(5, '28122018614', 'Admin', 'Hi Sir/Ma''am, Please Enter your query or suggestion. We will revert back to you as soon as possible.', '2019-02-18 11:35:47');

-- --------------------------------------------------------

--
-- Table structure for table `order_form_data`
--

CREATE TABLE IF NOT EXISTS `order_form_data` (
  `orderid` varchar(50) NOT NULL,
  `ope_no` int(200) NOT NULL,
  `seq_no` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `deadline` date NOT NULL,
  `study_level` varchar(100) NOT NULL,
  `page_count` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `style` varchar(200) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `pay_status` int(10) NOT NULL,
  `filepath` varchar(500) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`seq_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_form_data`
--

INSERT INTO `order_form_data` (`orderid`, `ope_no`, `seq_no`, `name`, `phone`, `deadline`, `study_level`, `page_count`, `email`, `style`, `description`, `pay_status`, `filepath`, `timestamp`) VALUES
('19122018111', 1, 1, 'Ashish Gupta', 7087264779, '2018-12-19', 'Secondary School', 10, 'ashish@gmail.com', 'Style1', 'Hi Ashish, \r\n\r\nTeam OAH', 1, 'TechSpec.docx', '2019-02-11 14:28:43'),
('28122018122', 2, 2, 'Ashish Gupta', 7087264779, '2018-12-28', 'Under Graduate', 8, 'ashish@gmail.com', 'Style5', 'Please check 7', 2, 'chamalapalli skota mandal.docx', '2019-02-11 14:29:48'),
('28022019833', 3, 3, 'Ashish Gupta', 7087264779, '2019-02-28', 'Ph.D', 4, 'ashish@gmail.com', 'Footnotes and bibliography', 'Ashish', 1, 'Upload.docx', '2019-02-20 21:31:04'),
('270220191314', 1, 4, 'Ashish Gupta', 7087264779, '2019-02-27', 'Under Graduate', 5, 'ram@gmail.com', 'Harvard', 'I want to get my assignment very soon. ', 1, 'Capstone Project Rep_format.doc', '2019-02-20 22:26:15'),
('260220191325', 2, 5, 'Ram', 7087264779, '2019-02-26', 'Post Graduate', 15, 'ram@gmail.com', 'Footnotes', 'This is my second and i m very impressed.', 1, 'Research Paper.docx', '2019-02-20 22:37:47'),
('250220191336', 3, 6, 'Ram Swami', 7087264779, '2019-02-25', 'High School', 11, 'ram@gmail.com', 'OSCOLA', 'Thanks for the third assignment.', 1, 'Research.docx', '2019-02-20 22:47:31');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE IF NOT EXISTS `order_status` (
  `email` varchar(100) NOT NULL,
  `total_count` int(50) NOT NULL,
  `success_count` int(50) NOT NULL,
  `pending_count` int(50) NOT NULL,
  `fail_count` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`email`, `total_count`, `success_count`, `pending_count`, `fail_count`) VALUES
('ashish@gmail.com', 3, 0, 3, 0),
('ram@gmail.com', 3, 0, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_data`
--

CREATE TABLE IF NOT EXISTS `portfolio_data` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `rating` int(10) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `portfolio_data`
--

INSERT INTO `portfolio_data` (`id`, `name`, `rating`, `message`, `image_path`) VALUES
(1, 'Afzal Sheikh, Abu Dhabi ', 4, 'It was a great experience for me to hire your writer, who did an amazing job by helping with the essay project on time. Thank you so much!', 'Afzal.jpg'),
(2, 'Ashley Thompson, Brisbane ', 4, 'The assignment I received from OnlineAssignmenthelp.com really blew my mind! These guys know what they are doing. They don not mess up your paper and work hard so you can get a good grade.', 'Ashley.jpg'),
(3, 'Aiman Hong Phew, Kuala Lumpur', 3, 'To be honest I was fed with assignment help services. Exorbitant prices and substandard work. But OnlineAssignmenthelp.com is an exception. Ordered three times. Everytime amazed with their professionalism.', 'Aiman.jpg'),
(4, ' Jordan Austin, Birmingham', 5, 'It was only because of the immense academic writing support and a timely help that saved my dissertation from getting ruined. I really had a great academic year, thank you guys!', 'JordanAustin.jpg'),
(5, 'Anaya Johnson, Hamilton', 4, 'I am highly satisfied with the kind of assignment service you people have helped me with. The     papers were nicely written and I have received the solution on time as well. This is great!', 'Anaya.jpg'),
(6, 'Bobby Travolta, New Jersey', 5, 'I was assigned to write an argumentative essay on male ego. I completely forgot about it. It was due next day. OnlineAssignmenthelp.com delivered!! Do I need to say anything more?', 'Bobby.jpg'),
(7, 'Carlos Wellington, Christchurch', 5, 'Thank you OnlineAssignmentHelp.com for assisting me with well-referenced and informative assignments on Economics. I will always be grateful to your writers for being there with me! ', 'Carlos.jpg'),
(8, 'Clara, Washington', 4, 'I was very worried about my history assignment. I got to know about OnlineAssignmenthelp.com from my friend Suzie. You guys did a fantabulous job!!', 'Clara.jpg'),
(9, 'Jane McKinley, Manchester ', 4, 'I am really grateful to my writer for attending my priorities such dedicatedly and with so much perfection! The portal is highly recommended to all.', 'JaneMcKinley.jpg'),
(10, 'Jared Smith, Calgary', 3, 'Thank you so much for helping me with the assignment which I was not being able to complete on time. I recommended the service to one and all!', 'Jared.jpg'),
(11, 'Jennifer Miller, Jurong East', 4, 'It was really nice of you to save my assignment at very last moment. I good grades and impressed by professors as well!', 'JenniferMiller.jpg'),
(12, 'John Baistow, Utah ', 3, 'You guys are great. Thanks a ton for helping me. My language professor really liked the essay. I got A+.', 'JohnBaistow.jpg'),
(13, 'Katy Walker, Sharjah ', 3, 'I am surprised to receive my essay assignment early this morning. I had assigned them the job a couple of days ago, and they are already done with it! Wow!', 'KatyWalker.jpg'),
(14, 'Kelly Smith, London', 5, 'I am really thankful to you guys for helping me with a brilliantly written essay for my final semester presentation. Thank you so much! ', 'kelly.jpg'),
(15, 'Martina Williams, Montreal ', 5, 'It was a really great experience placing order with the company and receiving such a brilliant solution. Thank you OnlineAssignmentHelp.com.', 'Martinawilliams.jpg'),
(16, 'Md. Basher, Dubai ', 4, 'Thank you OnlineAssignmentHelp.com for being such helpful and cooperative! I amazed to see their potential and sincerely my essay paper was attended and written on time!', 'MdBasher.jpg'),
(17, 'Michael Williams, Canberra', 3, 'Never in my life I thought I’d ever get an A grade on my engineering assignment but here I am, and it’s all thanks to OnlineAssignmenthelp.com! You guys rock! ', 'MichaelWilliams.jpg'),
(18, 'Millie Tan, Tampines', 5, 'Wow what an impressive performance by my writer! He really did an amazing job and helped my essay with supreme quality compositions.', 'MillieTan.jpg'),
(19, 'Mohammed Khalish, Kuala Lumpur', 5, 'Thank God I had OnlineAssignmenthelp.com. They took care of my statistics assignment.\nPerfect mathematical derivations, accurate calculations and neat graphs. I just loved it.\nFull five stars.', 'MohammedKhalish.jpg'),
(20, 'Peter Hemmingway, Dunedin', 3, 'I was quite unsure whether consulting online assignment service providers will be effective. Now with the kind of assignment service I have received, I am totally convened that consulting this site will always be a wise thing to decide! Thank you!', 'Peter.jpg'),
(21, 'Shelly Wang, Tampines', 5, 'Thank you so very much OnlineAssignmentHelp.com. Thank you so much for all your support and assignment writing guidance whenever I needed it!', 'Shelly.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register_form_data`
--

CREATE TABLE IF NOT EXISTS `register_form_data` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `education` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `register_form_data`
--

INSERT INTO `register_form_data` (`id`, `name`, `email`, `phone`, `education`, `password`, `image_path`, `timestamp`) VALUES
(8, 'Ashish Gupta', 'ashish@gmail.com', 7087264779, 'M.Tech', '12345', '', '2019-02-20 21:05:32'),
(11, 'admin', 'admin@gmail.com', 8767543423, 'Graduate', 'admin', '', '2019-02-20 16:05:07'),
(13, 'Ram Swami', 'ram@gmail.com', 7087264775, 'Post Graduate', 'ram', 'IMG_20160805_120302.jpg', '2019-02-20 22:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `subject_list`
--

CREATE TABLE IF NOT EXISTS `subject_list` (
  `id` int(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_list`
--

INSERT INTO `subject_list` (`id`, `subject`) VALUES
(1, 'English'),
(2, 'Maths'),
(3, 'Science'),
(4, 'Biology'),
(5, 'Geography'),
(6, 'Computer Science'),
(7, 'History'),
(8, 'Chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber_list`
--

CREATE TABLE IF NOT EXISTS `subscriber_list` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `subscriber_list`
--

INSERT INTO `subscriber_list` (`id`, `email`) VALUES
(1, 'ashishnnd11@gmail.com'),
(2, 'pritam@gmail.com'),
(3, 'himanshu@gmail.com'),
(4, 'test2@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_activity_log`
--

CREATE TABLE IF NOT EXISTS `user_activity_log` (
  `serial_no` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `activity` varchar(300) NOT NULL,
  PRIMARY KEY (`serial_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user_activity_log`
--

INSERT INTO `user_activity_log` (`serial_no`, `name`, `email`, `date`, `activity`) VALUES
(2, 'Ashish Gupta', 'ashish@gmail.com', '2019-02-13 09:36:53', 'Hi, You have created a User Account with email id: ashish@gmail.com successfully '),
(3, 'Ashish Gupta', 'ashish@gmail.com', '2019-02-13 10:23:43', 'Hi, You have placed an Order with Order id: 19122018111 successfully.'),
(5, 'Ashish Gupta', 'ashish@gmail.com', '2019-02-20 21:31:04', 'Hi, You have placed an Order with Order id: 28022019833 successfully. '),
(6, 'Ram Swami', 'ram@gmail.com', '2019-02-20 22:16:06', 'Hi, You have created a User Account with email id: ram@gmail.com successfully '),
(7, 'Ashish Gupta', 'ram@gmail.com', '2019-02-20 22:26:15', 'Hi, You have placed an Order with Order id: 270220191314 successfully. '),
(8, 'Ram', 'ram@gmail.com', '2019-02-20 22:37:47', 'Hi, You have placed an Order with Order id: 260220191325 successfully. '),
(9, 'Ram Swami', 'ram@gmail.com', '2019-02-20 22:47:31', 'Hi, You have placed an Order with Order id: 250220191336 successfully. ');

-- --------------------------------------------------------

--
-- Table structure for table `user_archive_data`
--

CREATE TABLE IF NOT EXISTS `user_archive_data` (
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_archive_data`
--

INSERT INTO `user_archive_data` (`email`, `phone`) VALUES
('ashish@gmail.com', '9044623452'),
('ashish@gmail.com', '7087264779'),
('ashish@gmail.com', '7862387623'),
('ram@gmail.com', '7087264779');

-- --------------------------------------------------------

--
-- Table structure for table `user_review_data`
--

CREATE TABLE IF NOT EXISTS `user_review_data` (
  `serialno` int(100) NOT NULL AUTO_INCREMENT,
  `header` varchar(50) NOT NULL,
  `starcount` int(10) NOT NULL,
  `pagecount` int(100) NOT NULL,
  `daycount` int(100) NOT NULL,
  `review` varchar(500) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `image_path` varchar(500) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`serialno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `user_review_data`
--

INSERT INTO `user_review_data` (`serialno`, `header`, `starcount`, `pagecount`, `daycount`, `review`, `userid`, `country`, `image_path`, `timestamp`) VALUES
(16, 'Law Assignment', 5, 10, 4, 'Thank god for OnlineAssignmenthelp.com! I really thought I wouldâ€™ve flunked this semester if I didnâ€™t submit my assignment on time but these guys really saved me from that disaster. Their assignment help service is top notch! My law assignment was delivered with proper referencing done! I couldnâ€™t believe it at the price I got it for! Especially after I saw my grades, which was an A! Very impressed!', 'Jessica Stinson', 'Australia', 'jessicastinson.jpg', '2019-01-29 21:29:08'),
(17, 'Accounts Assignment', 4, 2, 1, 'This was my first time ordering an assignment from OnlineAssignmenthelp.com and I have to say, I am thoroughly impressed! The level of professionalism these guys maintain is outstanding. I had a question regarding my assignment and they resolved it within seconds of me shooting my query! Plus the paper submitted was of excellent quality. I will always take assignment help from these guys only.', 'Barney Montague', 'United States of America', 'barneymontague.jpg', '2019-01-29 21:32:29'),
(18, 'Nursing Assignment', 4, 12, 6, 'I was looking for a good nursing assignment help provider and I stumbled upon OnlineAssignmenthelp.com! Even though I was nervous about taking assignment help but I went ahead and placed an order anyway. And I must say, itâ€™s the best decision Iâ€™ve ever made! Iâ€™ve never been able to write a nursing assignment of such high quality on my own. In fact, Iâ€™ve never even gotten an A before. Itâ€™s all thanks to OnlineAssignmenthelp.com! ', 'Kimberly Yang', 'Malaysia', 'kimberlyyang.jpg', '2019-01-29 21:38:47'),
(19, 'Economics Assignment', 4, 15, 3, 'I needed instant assignment help as my paper was due in just 3 days and I hadnâ€™t even started yet! I tried several sites but nobody accepted my request apart from OnlineAssignmenthelp.com! They not only accepted my request, but they also did a stellar job at doing my accounts assignment. And despite the short deadline, the price at which they did my assignment was very affordable and needless to say, it was delivered on time! Bravo, guys.', 'Kaylee Thompson', 'United Kingdom', 'kayleethompson.jpg', '2019-01-29 21:43:14'),
(20, 'Biology Assignment', 4, 20, 8, 'I am so bad at biology, I really needed help with my assignment. I didnâ€™t who to turn to till a friend recommended OnlineAssignmenthelp.com. I decided to give them a shot and I must admit, I was pleasantly surprised. The paper was brilliantly written and even illustrated with absolutely no plagiarism whatsoever! Iâ€™m definitely getting all of my assignments done by them from now on!', 'Mark Simpson', 'Canada', 'marksimpson.jpg', '2019-01-29 21:47:42'),
(21, 'Math Assignment', 4, 4, 11, 'My fear of math has always made be dodge the assignments of this subject, leading to poor grades. This time I wanted to do well but I knew I would need some help for better grades. I got the assignment help I needed from OnlineAssignmenthelp.com. Every single calculation done in my math assignment was flawless! All the steps were detailed perfectly and the paper was delivered on time! Thank you, guys! ', 'Md. Hussain', 'UAE', 'Md.Hussain.jpg', '2019-01-29 21:52:01'),
(22, 'Custom Assignment', 4, 8, 16, 'A truly custom assignment writing service is hard to come by. So I wasnâ€™t sure if OnlineAssignmenthelp.com would actually be able to do my assignment just the way I want it but boy was I wrong! Every single demand I had detailed in doing my assignment was followed by their writer diligently. Even the formatting! This is the best assignment Iâ€™ve ever had!', 'Ron Tsang', 'Singapore', 'RonTsang.jpg', '2019-01-29 21:55:15'),
(23, 'Criminal Law', 4, 5, 4, 'I had no time to write my assignment at all due to some family emergencies so I thought Iâ€™d get it done professionally so that I at least donâ€™t fail the semester. After scouting through many assignment service providers, I settled on OnlineAssignmenthelp.com and I think I made a good choice. A high-quality assignment with proper formatting was delivered to me within just a few days of me placing my order. And it was plagiarism free! Very happy overall. ', 'Alistair Cook', 'New Zealand ', 'Alistaircook.jpg', '2019-01-29 21:58:56'),
(24, 'Computer Network Assignment', 4, 6, 18, 'As a computer student, I have tons of assignments to do and naturally, I canâ€™t devote equal attention to all of them. But I didnâ€™t want to do badly on any assignment so I placed an order for my computer network assignment this time at OnlineAssignmenthelp.com. Let me tell you, these guys are brilliant! The expert wrote my assignment so well that even my professor couldnâ€™t help but give me the top grade! You guys are the best assignment helpers ever!', 'Madison McCormick', 'United States of America', 'MadisonMcCornick.jpg', '2019-01-29 22:01:48'),
(25, 'Marketing Assignment', 4, 8, 20, 'I was on the hunt for a marketing assignment help provider when I came across OnlineAssignmenthelp.com. Impressed by the reviews, I gave them a shot and itâ€™s not hard for me to see now why students love them! The marketing assignment I received was a 100% original and well-researched along with being reasonably priced. Kudos to you guys! ', 'Maddox Meyer', 'United Kingdom', 'MadaxMeyer.jpg', '2019-01-29 22:04:53'),
(26, 'Economics Assignment', 4, 3, 7, 'Although I love economics, assignment writing is not really one of my strong points. Help with my economics assignment is always welcome, which is what I got OnlineAssignmenthelp.com. They not only did my assignment as if it was their own, but they also managed to submit right on time and ensured that I got a good grade from my teacher. They are hands down the best!', 'Chloe Schwartz', 'Canada', 'ChloeSchwartz.jpg', '2019-01-29 22:09:09'),
(27, 'Science Assignment', 4, 6, 14, 'I was very frustrated with the topic of my science assignment. I couldnâ€™t find any matter on it and didnâ€™t know what to do! My friend told me I should get science assignment help from the place she does, which is OnlineAssignmenthelp.com. I took her advice and I couldnâ€™t believe I got a well-researched and well-written assignment in return! It was properly formatted too and got me a great grade! ', 'Zara Ali', 'UAE', 'zaraali.jpg', '2019-01-29 22:12:20'),
(28, 'Custom Writing Assignment', 4, 2, 8, 'My exam and assignment dates were clashing and I didnâ€™t know whether to focus on my exams or assignments! Luckily OnlineAssignmenthelp.com helped me out by taking the responsibility for my assignment on their shoulders. They provided me with a paper that was expertly written and referenced and that too at a very affordable price! The best custom writing service ever! ', 'Casey Williams', 'Australia', 'caseywilliams.jpg', '2019-01-29 22:15:53'),
(29, 'English Assignment', 4, 9, 3, 'My English assignment was due in a couple of days I hadnâ€™t even started it! I needed urgent assignment help and OnlineAssignmenthelp.com came to my rescue. Their expert handled my topic of Donneâ€™s poetry with ease and produced an excellent copy that impressed all of my professors and me! Iâ€™m only taking their assignment help if I ever need to in the future.', 'Malcolm Richardson', 'New Zealand ', 'malcolmrichardson.jpg', '2019-01-29 22:19:00'),
(30, 'Assignment Writing', 5, 20, 22, 'Iâ€™m a loyalist of OnlineAssignmenthelp.com! No matter what kind of assignment help Iâ€™ve needed â€“ be it science, English or math assignment help â€“ theyâ€™ve always been there for me. Theyâ€™ve helped me submit some of the best assignments of my life to my teachers without burning a hole in my pocket! Whatâ€™s more, theyâ€™ve always taken my recommendations while doing the assignment. Love them!', 'Betty Parker', 'Singapore', 'bettyparker.jpg', '2019-01-29 22:22:34'),
(31, 'Management Assignment', 5, 8, 17, 'I just want to say that if it wasnâ€™t for OnlineAssignmenthelp.com, I wouldâ€™ve surely failed this semester. They saved me from absolute doom by doing 3 assignments for and that too at a very reasonable price! And as icing on the cake, they delivered plagiarism free copies bang on time. You guys are my real saviours. OnlineAssignmenthelp.com is the best assignment help service provider ever!', 'Linda Simons', 'Malaysia ', 'lindasimons.jpg', '2019-01-29 22:25:42'),
(32, 'Assignment Writing', 4, 7, 15, 'My assignment writing skills are not that good. I usually miss the point and end up getting poor grades. I heard that OnlineAssignmenthelp.com could help me out with assignment writing so I went ahead and got my assignment done from them. The copy I got was marvellous! It was so impeccably written that I couldnâ€™t believe this was done by an assignment writing company and not a Harvard professor! Best assignment help provider on this planet! ', 'Layla Jones', 'Canada', 'laylajones.jpg', '2019-01-29 22:28:18'),
(33, 'Psychology Assignment', 4, 12, 16, 'Assignments freak me out! I hate researching and writing and so this time wanted to try an assignment writing company that would just do this tedious task for me. I chose OnlineAssignmenthelp.com and I think it was the best decision Iâ€™ve ever made! Getting an awesome assignment on time at a more awesome price totally took all of my stress away! Thanks, guys! ', 'Jack Matson', 'United States of America', 'jackmatson.jpg', '2019-01-29 22:31:22'),
(34, 'Chemistry Assignment', 4, 10, 20, 'This time I wasnâ€™t prepared for my exams and hence wanted to divert all my attention to studying rather than doing assignments. So I took physics and chemistry assignment help from OnlineAssignmenthelp.com as those are my weakest subjects. You wouldnâ€™t believe, this time I got the highest scores on these very subjects! And itâ€™s all thanks to you guys and the hard work put into doing my assignment for me! Seriously the best in business!', 'Nathan Taylor', 'Australia', 'nathantaylor.jpg', '2019-01-29 22:34:46'),
(35, 'Accounting Assignment', 5, 3, 4, 'This time my accounting assignment topic was so hard that I was stuck with it for days with the deadline drawing near! I knew I had to do something fast or I would surely flunk. So I contacted OnlineAssignmenthelp.com and told them of my problem and they agreed to offer me instant assignment help at an unbelievable price! And there was no compromise on quality despite the short deadline! Very happy I chose you guys. ', 'Dexter Harrington', 'United Kingdom', 'dextorharrington.jpg', '2019-01-29 22:36:59'),
(36, 'Marketing Assignment', 4, 5, 7, 'My part-time job takes up most of my time and doesnâ€™t leave much of it for me to focus on my assignments. I needed an assignment helper desperately for this reason and found one in OnlineAssignmenthelp.com. I took marketing assignment help from them and Iâ€™m glad to say that I got a stupendous assignment in return! Timely delivery, great prices and zero plagiarism. Thatâ€™s how itâ€™s done!', 'Gabriella Porter', 'New Zealand ', 'gabriellaporter.jpg', '2019-01-29 22:39:31'),
(37, 'Assignment Writing', 5, 3, 5, 'I am absolutely bowled over by the quality of the assignment writing services offered by OnlineAssignmenthelp.com! They have the cheapest prices in the market without any compromise on quality whatsoever. Moreover, unlike other assignment helpers, they actually take my recommendations and provide a truly customized experience. Got my assignment right on time and I wouldnâ€™t hesitate to recommend OnlineAssignmenthelp.com to all my friends! ', 'Rashid Ali', 'UAE', 'rashidali.jpg', '2019-01-29 22:42:18'),
(38, 'Assignment Writing', 5, 2, 6, 'I canâ€™t believe my luck that I found OnlineAssignmenthelp.com! They are the only assignment writing service on this planet that actually cares about their students and donâ€™t just want to con them. Their prices are excellent and the quality of assignments is super awesome! Trust me guys, if youâ€™re looking for assignment help, I donâ€™t think youâ€™ll find anyone that compares to the OnlineAssignmenthelp.com!', 'Toni Herrera', 'United States of America', 'tonyherrera.jpg', '2019-01-29 22:44:50'),
(39, 'English Assignment', 4, 12, 22, 'Trust me when I say that OnlineAssignmenthelp.com is the best because Iâ€™ve taken assignment help from several assignments writing companies and not even one has been able to match up to the quality of services these guys provide! Excellent customer support, amazing quality, cheap prices and timely delivery are only a few of the many good things about OnlineAssignmenthelp.com! Going to choose them every time. ', 'Ross Layton', 'Canada', 'rosslayton.jpg', '2019-01-29 22:47:54'),
(40, 'English Assignment', 5, 4, 1, 'If you want instant assignment help thatâ€™s actually fast, go for OnlineAssignmenthelp.com. I only had 7 hours left before my English assignment submission and needed urgent assignment help! These guys took up the challenge and delivered an amazingly written assignment to me in just 4 hours! And that too a plagiarism-free copy that wasnâ€™t too expensive, to be honest. These guys are faster than the speed of light! ', 'Cara Martin', 'United States of America', 'caramartin.jpg', '2019-01-29 22:49:57'),
(41, 'Geography Homework', 4, 3, 2, 'Thank you, OnlineAssignmentHelp.com for the Geography homework help, on time. I shall forever be grateful to you guys for the timely solution and excellent professionalism displayed by you all. That was really great!', 'John Smith', 'Australia', 'johnsmith.jpg', '2019-01-29 22:52:43'),
(42, 'Geography assignment', 4, 6, 9, 'I was really tensed as my semester was near and I was left with a pending Geography assignment. Thank you OnlineAssignmentHelp.com for helping me with a timely Geography assignment assistance. I am relieved of the anxiety. This makes me so happy!', 'Sara Jane', 'United States of America', 'Sarajane.jpg', '2019-01-29 22:56:22'),
(43, 'Statistics Assignment', 4, 2, 3, 'It was great placing order with OnlineAssignmentHelp.com. These guys are so professional and respect clients. I was told that the statistics assignment help will be served with the solutions delivered to me before the deadline, and they did exactly the same. Wow! ', 'Peter Johnson', 'United Kingdom', 'peterjohnson.jpg', '2019-01-29 22:58:54'),
(44, 'Mathematics Assignment', 4, 3, 7, 'Great effort by the writers and customer care executives of OnlineAssignmentHelp.com! They were highly professional, well-mannered and qualified. They did real justice to my mathematics assignment by helping with the solution to me on time! ', 'Kevin Williams', 'United States of America', 'kevinwilliams.jpg', '2019-01-29 23:02:07'),
(45, 'English Assignment', 4, 7, 11, 'Thank you so much for assisting me with the English assignment help on time. I want to mention that the writers were extremely cooperative, honest and diligent. They were well organized and successfully completed my assignment with no grammatical errors made in the copy. ', 'Lewis Jones', 'Malaysia', 'lewisjones.jpg', '2019-01-29 23:04:48'),
(46, 'Physics Assignment', 4, 8, 17, 'The Physics assignment was nicely done and there were no technical flaws in the paper. I will surely recommend this company to all my friends. The writers were all qualified and made some sincere efforts to write my paper carefully. Thank you so much!', 'Francis Williams', 'United Kingdom', 'franciswilliams.jpg', '2019-01-29 23:06:47'),
(47, 'History Dissertation', 5, 48, 28, 'Thank you so much for helping me with the complicated history dissertation! I was really worried about missing the deadline. But thankfully you guys came to help me and composed the paper nicely. I will definitely place the order for other assignments in future!', 'Iris Brown', 'United States of America', 'Irisbrown.jpg', '2019-01-29 23:09:42'),
(48, 'English Essay', 4, 6, 8, 'How amazingly you people have composed my English essay with a beautifully crafted introduction and conclusion. I am really impressed with the paper quality. Definitely coming back to you guys for further assignment help on other subjects. ', 'Jared Smith', 'Australia', 'jaredsmith.jpg', '2019-01-29 23:12:04'),
(49, 'Economics Dissertation', 5, 32, 36, 'This is the best academic writing service company I have ever hired! They are so punctual, helpful and professional. Thank you, guys, for assisting me with the economics dissertation help! I got an A+ in my assignment report card. I happy and satisfied with the paper quality! ', 'Jane Lee', 'Singapore', 'janelee.jpg', '2019-01-29 23:14:38'),
(50, 'Dissertation Writing', 5, 52, 42, 'I really had no idea about writing a dissertation perfectly as it was for the first time that I was trying to compose a perfect dissertation. But thank you OnlineAssignmentHelp.com for all the support and superb academic help that you people have provided me on time. I will soon be back with more orders!', 'Oliver Miller', 'United States of America', 'olivermiller.jpg', '2019-01-29 23:17:12'),
(51, 'Economics Dissertation', 4, 37, 22, 'I was so much tensed about the tricky economics dissertation as the deadline was near and I was hardly done with the initial sections of the assignment. Then I decided to OnlineAssignmentHelp.com, and the result was awesome. I have successfully scored good assignment grade and I canâ€™t thank you guys enough!', 'Harry Smith', 'Australia', 'harrysmith.jpg', '2019-01-29 23:19:24'),
(52, 'History Dissertation', 5, 42, 32, 'I was looking for the best history dissertation help in my area and then came across OnlineAssignmentHelp.com. You guys are so cooperative and well qualified for the job. I will definitely recommend this site to my friends and ask them to seek help for the best results. Thank you so much! ', 'Kevin Williams', 'Australia', 'kevinwilliamsaustral.jpg', '2019-01-29 23:22:49'),
(53, 'History Assignment', 4, 8, 12, 'Thank you for the perfectly drafted history paper! Now, this is what I call a perfect history assignment help. OnlineAssignmentHelp.com is the best platform to seek assignment help, and my report card is the proof of how diligently my task was handled by the academic experts of the firm!', 'Meghan Brown', 'United States of America', 'meghanbrown.jpg', '2019-01-29 23:25:37'),
(54, 'Economics Coursework', 4, 7, 6, 'I was in search of a perfect economics coursework help for my project and finally found OnlineAssignmentHelp.com at my service. These guys are amazing and really did a great job by helping me with the complicated assignment on time. I a feel so relaxed and happy on receiving such perfect solution online! ', 'Nancy Walker', 'Singapore', 'nancywalker(2).jpg', '2019-01-29 23:28:31'),
(55, 'Case Study- Management', 4, 4, 5, 'Great job my friend! I am happy to receive the perfect solution. Thanks for the case study help on management. The well-written paper fetched me an A+ in my semester. I am looking forward to placing many orders with you in the near future! ', 'Amy Smith', 'Australia', 'amysmith.jpg', '2019-01-29 23:31:24'),
(56, 'Finance Dissertation', 5, 56, 38, 'Best price, best paper quality and amazing response from the customer care executive! OnlineAssignmentHelp.com is the best academic writing service provider according to me. I am extremely satisfied with the fact of how the writer provided me with a flawless finance dissertation help! Thank you so much!', 'Rick Jones', 'Canada', 'rickjones.jpg', '2019-01-29 23:56:34'),
(57, 'Case Study-Economics', 4, 7, 9, 'I was in deep trouble when there was no one to provide me with a reliable economics case study help. Then one day I came across OnlineAssignmentHelp.com. The writer who worked on my paper was extremely helpful and composed the paper brilliantly. Thank you so much! ', 'Jeff Walker', 'Singapore', 'jeffwalker.jpg', '2019-01-29 23:58:43'),
(58, 'Modern History Assignment', 5, 6, 8, 'Awesome paper quality, super punctual work culture and great online assignment help from OnlineAssignmentHelp.com. The writers were really helpful and they had done a wonderful job by writing the best assignment on modern history. I am so satisfied! Thank you!', 'Alia Khan', 'UAE', 'aliakhan.jpg', '2019-01-30 00:00:51'),
(59, 'Computer and Programming Assignment', 4, 2, 4, 'I was looking for someone to help me with Computer and programming assignment. Then I met the writers at OnlineAssignmentHelp.com. They were just amazing. Such an easy order placement method and such efficient solutions on time. I am thoroughly impressed!', 'Kate Miller', 'Canada', 'katemiller.jpg', '2019-01-30 00:03:19'),
(60, 'Geography Homework Assignment', 4, 10, 16, 'What an impressive Geography homework help by OnlineAssignmentHelp.com. I am totally stunned by their performance and thank you so many guys for helping me with the paper. I will soon contact you people back for further academic writing assistance. Thanks a lot!', 'Ted Williams', 'Australia', 'tedwilliams.jpg', '2019-01-30 00:06:05'),
(61, 'Assignment Writing', 4, 7, 15, 'The online assignment help provided by the writer associated with this company is totally amazing! The right referencing and the perfect citations had taken my paper quality to a whole new level. Thank you OnlineAssignmentHelp.com! ', 'Bob Smith', 'United States of America', 'bobsmith.jpg', '2019-01-30 00:07:56'),
(62, 'Online Chemistry Assignment', 5, 3, 1, 'I was in search of a perfectly useful online chemistry assignment help and came across OnlineAssignmentHelp.com. The writers are absolutely great and well qualified. They had finished the work on time and mailed me the solution without any hassle. Thank you so much! ', 'Kelly Miller', 'Australia', 'kellymiller.jpg', '2019-01-30 00:10:20'),
(63, 'Science Dissertation', 5, 62, 34, 'Thank you OnlineAssignmentHelp.com for assisting me with the best science dissertation help ever. You guys did amazing work and I got an A grade in my semester for the assignment. I am satisfied with the professionalism and punctuality of your team! ', 'John Smith', 'Canada', 'johnsmithcanada.jpg', '2019-01-30 00:14:48'),
(64, 'History Dissertation', 4, 58, 29, 'I was struggling with my history paper and was looking for a history dissertation help. Thank you OnlineAssignmentHelp.com! I got a great writer to help me with the paper. There were no editing flaws and grammatical mistakes in the copy. I am totally impressed!', 'John Scott', 'United Kingdom', 'johnscott.jpg', '2019-01-30 00:18:16'),
(65, 'Psychology Dissertation', 5, 40, 26, 'I never thought writing a 10,000 words dissertation would be this easy! Thanks, OnlineAssignmentHelp.com for providing me with online Psychology dissertation help. Thanks for all the hard work you did for me. I am grateful to you guys for being this cooperative! ', 'Daisy Jane', 'Canada', 'daisyjane.jpg', '2019-01-30 00:20:49');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
