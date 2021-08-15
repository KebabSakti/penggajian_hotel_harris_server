-- Adminer 4.8.0 MySQL 8.0.23 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `departments`;
CREATE TABLE `departments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `departments` (`id`, `department_name`, `department_description`, `created_at`, `updated_at`) VALUES
(1,	'Clinical Psychologist',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(2,	'Visual Designer',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(3,	'Bridge Tender OR Lock Tender',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(4,	'Tour Guide',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(5,	'User Experience Researcher',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(6,	'Food Service Manager',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(7,	'Usher',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(8,	'Mathematical Science Teacher',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(9,	'Concierge',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(10,	'Chemical Equipment Operator',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(11,	'Boiler Operator',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(12,	'Environmental Compliance Inspector',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(13,	'Fishery Worker',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(14,	'Airframe Mechanic',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(15,	'Oil Service Unit Operator',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(16,	'Desktop Publisher',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(17,	'Forming Machine Operator',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(18,	'Makeup Artists',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(19,	'Calibration Technician OR Instrumentation Technician',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(20,	'Recreation and Fitness Studies Teacher',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41');

DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_onboard_date` date DEFAULT NULL,
  `employee_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `employees` (`id`, `employee_id`, `employee_status`, `employee_name`, `employee_department`, `employee_position`, `employee_onboard_date`, `employee_email`, `employee_active`, `created_at`, `updated_at`) VALUES
(330,	'APZNHC2Z',	'ET',	'Aubree Koelpin',	'Makeup Artists',	'Re-engineered composite frame',	'1975-03-15',	'sonya.schumm@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(331,	'NGRDDNVVMDG',	'ELIGENDI',	'Hector Rempel',	'Environmental Compliance Inspector',	'Triple-buffered heuristic circuit',	'2008-07-08',	'tgutkowski@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(332,	'UIRJQXLC',	'PARIATUR',	'Prof. Kali Becker DVM',	'Tour Guide',	'Re-engineered composite frame',	'2007-01-03',	'wreilly@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(333,	'VLQXBFE9',	'SUSCIPIT',	'Mr. Raleigh Goodwin DDS',	'Visual Designer',	'Polarised tertiary localareanetwork',	'2003-07-23',	'rtreutel@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(334,	'WUVALCTJ',	'SUSCIPIT',	'Josephine Walker',	'Mathematical Science Teacher',	'Optional tangible emulation',	'1982-08-03',	'oceane.jones@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(335,	'WUZVDFURG3U',	'QUO',	'Rudy Bednar',	'Airframe Mechanic',	'Polarised tertiary localareanetwork',	'1984-04-01',	'asa.lindgren@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(336,	'LNLMRDSS',	'QUO',	'Wellington Graham',	'Concierge',	'Triple-buffered heuristic circuit',	'2018-03-15',	'leuschke.queenie@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(337,	'JQSMKRU1MJ1',	'DOLORES',	'Claudia Hill',	'Mathematical Science Teacher',	'Multi-lateral bifurcated paradigm',	'2013-09-22',	'jacey66@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(338,	'JPNKAUGMVK5',	'EUM',	'Mr. Sheridan Welch',	'Oil Service Unit Operator',	'Open-architected high-level flexibility',	'2016-09-14',	'stephanie92@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(339,	'IXHVDE5B',	'EUM',	'Mr. Quincy Welch',	'Airframe Mechanic',	'Fundamental mission-critical access',	'2001-07-05',	'hgoyette@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(340,	'JRRSQC11',	'ELIGENDI',	'Dr. Royce Bogan',	'Fishery Worker',	'Optional tangible emulation',	'1994-03-13',	'fstark@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(341,	'BTAWLUH8502',	'EUM',	'Sincere White DVM',	'Desktop Publisher',	'Ergonomic real-time opensystem',	'1973-06-17',	'dangelo88@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(342,	'CSDPIXD8JMQ',	'IN',	'Dr. Toney Schoen',	'User Experience Researcher',	'Re-engineered composite frame',	'2007-09-28',	'kessler.forrest@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(343,	'CCFJQB1VUCT',	'ET',	'Irving Hintz',	'Oil Service Unit Operator',	'Diverse 5thgeneration pricingstructure',	'1998-01-24',	'ylarkin@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(344,	'HBWRRAGEPDJ',	'DOLORES',	'Dr. Soledad Cremin II',	'Airframe Mechanic',	'Polarised tertiary localareanetwork',	'2007-12-03',	'hills.pedro@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(345,	'IKSKLMVN',	'QUO',	'Alfonzo Kshlerin I',	'Airframe Mechanic',	'Optional tangible emulation',	'1987-08-09',	'ncollier@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(346,	'ACIQAWJN',	'IN',	'Prof. Ebony Huel IV',	'Oil Service Unit Operator',	'Intuitive optimizing extranet',	'1975-04-10',	'hand.ayden@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(347,	'EYCWZFON',	'ELIGENDI',	'Letha Hickle',	'Oil Service Unit Operator',	'Optional tangible emulation',	'1980-07-07',	'mante.jaylan@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(348,	'TXSIEDTN',	'ELIGENDI',	'Prof. Rose Batz',	'Makeup Artists',	'Business-focused bi-directional forecast',	'1998-02-23',	'kuvalis.ottis@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(349,	'TYIDQAYR',	'IN',	'Mr. Diamond Huels MD',	'Visual Designer',	'Ergonomic regional definition',	'1975-08-08',	'jayda.watsica@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(350,	'YWUQEI6OLID',	'PARIATUR',	'Alexandre Kshlerin',	'Food Service Manager',	'Team-oriented disintermediate knowledgeuser',	'1972-01-31',	'hackett.genesis@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(351,	'PSFEFA72',	'QUO',	'Erin Sporer PhD',	'Makeup Artists',	'Fully-configurable dedicated interface',	'2005-06-04',	'kpfannerstill@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(352,	'NDSFBYPLXTB',	'DOLORES',	'Kristin Baumbach Jr.',	'Clinical Psychologist',	'Pre-emptive grid-enabled analyzer',	'2009-11-13',	'elebsack@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(353,	'SLBTXBJ0',	'IN',	'Greta Schulist',	'User Experience Researcher',	'Phased systemic knowledgebase',	'2011-08-23',	'art.streich@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(354,	'NTOZNKRQJAP',	'DOLORES',	'Prof. Blanca Yost',	'Chemical Equipment Operator',	'Diverse 5thgeneration pricingstructure',	'2011-01-26',	'znienow@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(355,	'ZWANISS9I8M',	'ET',	'Roderick Cummings',	'Airframe Mechanic',	'Open-architected high-level flexibility',	'2004-07-09',	'elsa.block@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(356,	'VXQNTZ9F',	'IN',	'Polly Nicolas',	'Forming Machine Operator',	'Phased systemic knowledgebase',	'1988-04-13',	'keagan19@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(357,	'UFWAJTKLRMU',	'PARIATUR',	'Brett Rutherford',	'Concierge',	'Ergonomic regional definition',	'1974-07-21',	'cassin.chandler@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(358,	'MXRTFBMR',	'QUO',	'Prof. Melvina Aufderhar',	'Calibration Technician OR Instrumentation Technician',	'Diverse 5thgeneration pricingstructure',	'1987-01-18',	'joany.feest@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(359,	'TYBAIM3XI8D',	'ELIGENDI',	'Dr. Hanna Steuber',	'Fishery Worker',	'Team-oriented disintermediate knowledgeuser',	'2001-08-04',	'osvaldo20@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(360,	'GXAOLSAV3ZZ',	'QUO',	'Madie Nolan',	'Oil Service Unit Operator',	'Phased systemic knowledgebase',	'1975-05-06',	'harber.gertrude@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(361,	'NWXAIMXC',	'QUO',	'Gerson D\'Amore',	'Bridge Tender OR Lock Tender',	'Virtual contextually-based knowledgeuser',	'1990-12-06',	'daron.hyatt@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(362,	'NYNTANST9OS',	'QUO',	'Lou Kling',	'Airframe Mechanic',	'Multi-lateral actuating productivity',	'1996-04-26',	'mwiegand@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(363,	'KJNKOBRL',	'DOLORES',	'Madisyn Hartmann',	'Boiler Operator',	'Virtual contextually-based knowledgeuser',	'2007-12-17',	'jakob.hagenes@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(364,	'CJCTVJRG8AP',	'IN',	'Magdalen Monahan',	'Desktop Publisher',	'Phased systemic knowledgebase',	'1983-04-07',	'paul.murazik@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(365,	'TVMUIQUG',	'DOLOREM',	'Dr. Derek Olson',	'Bridge Tender OR Lock Tender',	'Ergonomic real-time opensystem',	'2017-03-07',	'anabelle93@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(366,	'YQJNYIZC',	'ELIGENDI',	'Westley Stanton',	'Tour Guide',	'Open-architected high-level flexibility',	'1980-10-31',	'fahey.kaycee@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(367,	'URELIXSCG33',	'IN',	'Dallin Huel',	'Chemical Equipment Operator',	'Diverse 5thgeneration pricingstructure',	'1994-12-18',	'esmeralda45@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(368,	'ATVZQB4N',	'ET',	'Clementina Nader',	'Food Service Manager',	'Team-oriented disintermediate knowledgeuser',	'1972-05-11',	'jhammes@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(369,	'NVQXXT1EY1C',	'SUSCIPIT',	'Casey Wolff PhD',	'Bridge Tender OR Lock Tender',	'Polarised tertiary localareanetwork',	'1977-11-10',	'fbotsford@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(370,	'TZAGNXBW',	'DOLORIBUS',	'Tito Schultz',	'Recreation and Fitness Studies Teacher',	'Triple-buffered heuristic circuit',	'1979-06-23',	'pnikolaus@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(371,	'QVKDZVOXMW1',	'EUM',	'Geoffrey Bailey III',	'Makeup Artists',	'Multi-lateral bifurcated paradigm',	'1983-05-01',	'asa29@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(372,	'TVAPVYKZE1M',	'QUO',	'Dalton Feest',	'Boiler Operator',	'Business-focused bi-directional forecast',	'1970-07-08',	'adelle53@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(373,	'LDZQRBOLASM',	'ELIGENDI',	'Annalise Schamberger PhD',	'Desktop Publisher',	'Open-architected high-level flexibility',	'2006-02-13',	'hintz.shanie@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(374,	'YDBXYW6S',	'PARIATUR',	'Prof. Maximo Zieme',	'Visual Designer',	'Intuitive optimizing extranet',	'2000-07-21',	'kelley59@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(375,	'IKKTDNJ0MQO',	'SUSCIPIT',	'Miss Alvina Pacocha II',	'Calibration Technician OR Instrumentation Technician',	'Fundamental mission-critical access',	'1980-01-27',	'colby.batz@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(376,	'ZWVGKLI9',	'SUSCIPIT',	'Milford Mayer',	'Environmental Compliance Inspector',	'Ergonomic real-time opensystem',	'2012-08-07',	'marvin.jazmyne@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(377,	'UWNELVAVAEJ',	'DOLORES',	'Shayna Leuschke',	'Airframe Mechanic',	'De-engineered human-resource artificialintelligence',	'1995-10-10',	'mrodriguez@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(378,	'XQTBZS28DB4',	'DOLORES',	'Enid Mueller MD',	'Food Service Manager',	'Multi-lateral actuating productivity',	'2018-01-11',	'yrosenbaum@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(379,	'CNOFFIP1',	'DOLORES',	'Prof. Josefina Bayer DDS',	'Fishery Worker',	'Re-engineered composite frame',	'1991-05-25',	'ally.greenfelder@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(380,	'QNQYSST1T96',	'IN',	'Brisa Orn',	'Calibration Technician OR Instrumentation Technician',	'Re-contextualized object-oriented emulation',	'2007-06-05',	'karine.walker@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(381,	'TNKXAFXP',	'DOLORIBUS',	'Elinore Herzog',	'Forming Machine Operator',	'Diverse 5thgeneration pricingstructure',	'1975-01-09',	'eupton@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(382,	'JKNZXBIY',	'SUSCIPIT',	'Miss Jackie West',	'Boiler Operator',	'Team-oriented disintermediate knowledgeuser',	'2014-01-04',	'fern36@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(383,	'CNOHLMESGO2',	'IN',	'Prof. Aisha Schiller',	'Recreation and Fitness Studies Teacher',	'Polarised tertiary localareanetwork',	'2008-05-29',	'gharvey@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(384,	'DDTVTHFU',	'EUM',	'Ms. Leonie Jaskolski',	'User Experience Researcher',	'De-engineered human-resource artificialintelligence',	'1993-08-27',	'aharber@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(385,	'PSTOWFFE',	'SUSCIPIT',	'Prof. Maxine Crooks MD',	'Concierge',	'Intuitive optimizing extranet',	'2002-07-28',	'shaylee.prohaska@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(386,	'GWYENYNJVPL',	'DOLOREM',	'Kaylee Gutmann',	'Desktop Publisher',	'Optional tangible emulation',	'1974-07-28',	'jaunita63@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(387,	'EBITBMZLVUZ',	'DOLORES',	'Sigmund Franecki',	'Usher',	'Team-oriented disintermediate knowledgeuser',	'2016-09-05',	'oral.skiles@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(388,	'UPNWLJO1',	'PARIATUR',	'Prof. Fae Reichel',	'Forming Machine Operator',	'Business-focused bi-directional forecast',	'1976-06-11',	'mathew31@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(389,	'SOJVKSI0XP8',	'ELIGENDI',	'May Hoppe',	'Boiler Operator',	'Fully-configurable dedicated interface',	'1998-04-24',	'efunk@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(390,	'NYMFPP7OMY5',	'ELIGENDI',	'Federico Kirlin',	'User Experience Researcher',	'Open-architected high-level flexibility',	'2007-08-23',	'katarina.vandervort@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(391,	'DLOMUQDG7DR',	'ET',	'Antonio O\'Keefe',	'Food Service Manager',	'Phased systemic knowledgebase',	'2007-06-30',	'kelsie.hickle@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(392,	'TYALJKIP',	'PARIATUR',	'Efren Murazik',	'Usher',	'Intuitive optimizing extranet',	'2010-02-02',	'senger.aileen@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(393,	'LRPQQY1C',	'DOLORIBUS',	'Maye Olson',	'Mathematical Science Teacher',	'Team-oriented disintermediate knowledgeuser',	'1998-12-07',	'vdickinson@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(394,	'JVQRPT7QD8R',	'IN',	'Dudley Stracke',	'Calibration Technician OR Instrumentation Technician',	'De-engineered human-resource artificialintelligence',	'1983-10-03',	'isom.okuneva@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(395,	'EFPFAZRX3PQ',	'ET',	'Lia Harber',	'Desktop Publisher',	'Polarised tertiary localareanetwork',	'2019-04-22',	'tbayer@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(396,	'FNWLHX0RRD2',	'DOLORES',	'Donnie Gerhold',	'Mathematical Science Teacher',	'Multi-lateral actuating productivity',	'1994-07-02',	'burnice.fay@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(397,	'XCCFXG7M',	'DOLOREM',	'Tyson Schamberger',	'Makeup Artists',	'Business-focused bi-directional forecast',	'1987-02-03',	'stoltenberg.mariano@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(398,	'KNLWZS04NI7',	'ET',	'Era Runte',	'Desktop Publisher',	'Ergonomic regional definition',	'1995-04-13',	'kyra.metz@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(399,	'TDQUXNGHSYJ',	'DOLOREM',	'Mrs. Zoey Gleichner PhD',	'Recreation and Fitness Studies Teacher',	'Open-architected high-level flexibility',	'2014-06-25',	'gracie06@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(400,	'AIPDINY0J3O',	'ET',	'Dr. Jaydon Ritchie Jr.',	'Boiler Operator',	'Virtual contextually-based knowledgeuser',	'2009-07-07',	'tess67@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(401,	'GPZWBQ13',	'ET',	'Della Ondricka',	'Calibration Technician OR Instrumentation Technician',	'Ergonomic real-time opensystem',	'2010-01-18',	'madeline.bechtelar@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(402,	'LEYUPEPH',	'ET',	'Orlo Greenfelder DDS',	'Chemical Equipment Operator',	'Fundamental mission-critical access',	'2019-02-14',	'hudson.trycia@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(403,	'UWYULMA9MD6',	'QUO',	'Mr. Rigoberto Hettinger MD',	'Fishery Worker',	'Team-oriented disintermediate knowledgeuser',	'1990-09-15',	'joshua.hansen@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(404,	'LBXUECEK',	'EUM',	'Tod Lueilwitz',	'Visual Designer',	'Open-architected high-level flexibility',	'1993-03-17',	'graham.rex@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(405,	'FLFKJC2H',	'DOLOREM',	'Janie Conroy',	'Oil Service Unit Operator',	'Polarised tertiary localareanetwork',	'2009-10-22',	'furman34@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(406,	'SDRLLVTX',	'DOLOREM',	'Jocelyn Wintheiser',	'Visual Designer',	'Fully-configurable dedicated interface',	'1985-01-01',	'nichole.senger@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(407,	'TGIWHZBU',	'DOLORES',	'Kasey Abshire',	'Concierge',	'Intuitive optimizing extranet',	'2012-01-12',	'mccullough.monty@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(408,	'GNZCVS63E3V',	'EUM',	'Mrs. Emilia Howe IV',	'Forming Machine Operator',	'Re-engineered composite frame',	'2011-05-19',	'mosciski.ole@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(409,	'IYQXAKUEC55',	'ELIGENDI',	'Audra Wolff',	'Forming Machine Operator',	'Optional tangible emulation',	'1996-12-04',	'rosendo21@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(410,	'METWBV5I',	'DOLORES',	'Dr. Lonie Bergstrom II',	'Recreation and Fitness Studies Teacher',	'Virtual contextually-based knowledgeuser',	'1988-07-05',	'chaz69@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(411,	'XEAHLM9M',	'DOLORES',	'Khalil Strosin PhD',	'Desktop Publisher',	'Intuitive optimizing extranet',	'2004-05-30',	'tmayert@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(412,	'FBAICIBRC3O',	'QUO',	'Donavon Torphy',	'Usher',	'De-engineered human-resource artificialintelligence',	'1982-04-08',	'vheller@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(413,	'ZFCQJQY2N8D',	'ET',	'Eugene Dare',	'Bridge Tender OR Lock Tender',	'Pre-emptive grid-enabled analyzer',	'1985-12-08',	'georgiana12@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(414,	'GDNOXLJFIS6',	'IN',	'Aliza Murphy',	'Environmental Compliance Inspector',	'Virtual contextually-based knowledgeuser',	'2005-03-18',	'candelario39@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(415,	'FRENCBDVRUU',	'PARIATUR',	'Lorena Osinski',	'Calibration Technician OR Instrumentation Technician',	'Ergonomic real-time opensystem',	'2016-11-27',	'dereck.murphy@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(416,	'RZBUOB4NPHD',	'DOLORIBUS',	'Norval Wiza',	'Food Service Manager',	'Fundamental mission-critical access',	'2017-12-12',	'nathan.watsica@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(417,	'SEPATM58OXB',	'PARIATUR',	'Ms. Jazmyne Collier',	'Forming Machine Operator',	'Re-contextualized object-oriented emulation',	'1973-06-16',	'gretchen22@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(418,	'HGWBFIHFH4D',	'EUM',	'Carson Fisher I',	'Tour Guide',	'Open-architected high-level flexibility',	'1980-06-22',	'kabbott@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(419,	'LMBZKA3X',	'ELIGENDI',	'Joyce Moen',	'Tour Guide',	'Multi-lateral actuating productivity',	'1999-12-24',	'woodrow04@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(420,	'UJABORRA0U4',	'IN',	'Anabelle Koepp Jr.',	'Chemical Equipment Operator',	'Re-engineered composite frame',	'2015-11-12',	'beahan.isai@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(421,	'EIAYMLLDHZM',	'QUO',	'William Zulauf',	'Bridge Tender OR Lock Tender',	'Ergonomic regional definition',	'1973-04-24',	'streich.carroll@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(422,	'UABXGB17',	'SUSCIPIT',	'Tremayne Nitzsche',	'Environmental Compliance Inspector',	'Ergonomic real-time opensystem',	'1976-11-08',	'tschaefer@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(423,	'ROHBEAKN7EI',	'IN',	'Dr. Jeffery Moore DVM',	'Clinical Psychologist',	'Fundamental mission-critical access',	'2015-10-17',	'deron.koepp@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(424,	'GLFKDVXSQWN',	'DOLORES',	'Prof. Herminio Tillman DVM',	'Tour Guide',	'Business-focused bi-directional forecast',	'1996-05-27',	'jaclyn.kshlerin@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(425,	'JXYNCM7A',	'EUM',	'Everette Hessel',	'Calibration Technician OR Instrumentation Technician',	'Triple-buffered heuristic circuit',	'2014-07-14',	'oscar69@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(426,	'UUFWXCQJ',	'ELIGENDI',	'Dr. Rafaela O\'Conner DVM',	'User Experience Researcher',	'Triple-buffered heuristic circuit',	'1970-07-16',	'armstrong.ayla@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(427,	'VOKMFA6U',	'ELIGENDI',	'Gerhard Rath',	'Boiler Operator',	'Phased systemic knowledgebase',	'2018-06-27',	'paucek.shaina@hotmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(428,	'NTRGEIZN',	'SUSCIPIT',	'Rosario Hagenes',	'Clinical Psychologist',	'Diverse 5thgeneration pricingstructure',	'1999-11-12',	'vdouglas@yahoo.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50'),
(429,	'YNQNST0HZLB',	'DOLORIBUS',	'Reinhold Morar',	'Oil Service Unit Operator',	'De-engineered human-resource artificialintelligence',	'1983-09-14',	'jerde.gilberto@gmail.com',	1,	'2021-08-14 17:41:50',	'2021-08-14 17:41:50');

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2019_08_19_000000_create_failed_jobs_table',	1),
(4,	'2021_08_02_051358_create_departments_table',	1),
(5,	'2021_08_02_051612_create_salaries_table',	1),
(6,	'2021_08_02_051948_create_employees_table',	1),
(7,	'2021_08_02_093139_create_positions_table',	1),
(8,	'2021_08_02_093216_create_statuses_table',	1),
(9,	'2021_08_02_093248_create_taxes_table',	1),
(10,	'2019_12_14_000001_create_personal_access_tokens_table',	2);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `positions`;
CREATE TABLE `positions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `position_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `positions` (`id`, `position_name`, `position_description`, `created_at`, `updated_at`) VALUES
(1,	'Diverse 5thgeneration pricingstructure',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(2,	'Multi-lateral actuating productivity',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(3,	'Fully-configurable dedicated interface',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(4,	'De-engineered human-resource artificialintelligence',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(5,	'Polarised tertiary localareanetwork',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(6,	'Re-contextualized object-oriented emulation',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(7,	'Team-oriented disintermediate knowledgeuser',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(8,	'Optional tangible emulation',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(9,	'Triple-buffered heuristic circuit',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(10,	'Re-engineered composite frame',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(11,	'Ergonomic real-time opensystem',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(12,	'Virtual contextually-based knowledgeuser',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(13,	'Pre-emptive grid-enabled analyzer',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(14,	'Phased systemic knowledgebase',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(15,	'Open-architected high-level flexibility',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(16,	'Multi-lateral bifurcated paradigm',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(17,	'Business-focused bi-directional forecast',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(18,	'Intuitive optimizing extranet',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(19,	'Ergonomic regional definition',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(20,	'Fundamental mission-critical access',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41');

DROP TABLE IF EXISTS `salaries`;
CREATE TABLE `salaries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary_account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_npwp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_tax_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_working_day` int NOT NULL DEFAULT '0',
  `salary_checkin_day` int NOT NULL DEFAULT '0',
  `salary_day_total` int NOT NULL DEFAULT '0',
  `salary_per_day` decimal(12,2) NOT NULL DEFAULT '0.00',
  `salary_basic` decimal(12,2) NOT NULL DEFAULT '0.00',
  `salary_minutes_late` decimal(12,2) NOT NULL DEFAULT '0.00',
  `salary_service_cut` decimal(12,2) NOT NULL DEFAULT '0.00',
  `salary_additional_service` decimal(12,2) NOT NULL DEFAULT '0.00',
  `salary_overtime` decimal(12,2) NOT NULL DEFAULT '0.00',
  `salary_allowance` decimal(12,2) NOT NULL DEFAULT '0.00',
  `salary_meal_allowance` decimal(12,2) NOT NULL DEFAULT '0.00',
  `salary_incentive` decimal(12,2) NOT NULL DEFAULT '0.00',
  `salary_service_charge` decimal(12,2) NOT NULL DEFAULT '0.00',
  `salary_pph` decimal(12,2) NOT NULL DEFAULT '0.00',
  `salary_jht` decimal(12,2) NOT NULL DEFAULT '0.00',
  `salary_jp` decimal(12,2) NOT NULL DEFAULT '0.00',
  `salary_bpjs` decimal(12,2) NOT NULL DEFAULT '0.00',
  `salary_misc` decimal(12,2) NOT NULL DEFAULT '0.00',
  `salary_final` decimal(12,2) NOT NULL DEFAULT '0.00',
  `salary_description` text COLLATE utf8mb4_unicode_ci,
  `salary_periode` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `salaries` (`id`, `employee_id`, `salary_account_number`, `salary_npwp`, `salary_tax_status`, `salary_working_day`, `salary_checkin_day`, `salary_day_total`, `salary_per_day`, `salary_basic`, `salary_minutes_late`, `salary_service_cut`, `salary_additional_service`, `salary_overtime`, `salary_allowance`, `salary_meal_allowance`, `salary_incentive`, `salary_service_charge`, `salary_pph`, `salary_jht`, `salary_jp`, `salary_bpjs`, `salary_misc`, `salary_final`, `salary_description`, `salary_periode`, `created_at`, `updated_at`) VALUES
(839,	'APZNHC2Z',	'90190190190',	'12345678',	'NV',	28,	28,	56,	200000.00,	5600000.00,	0.00,	0.00,	1000.00,	100000.00,	250000.00,	50000.00,	23000.00,	20000.00,	120000.00,	112000.00,	0.00,	56000.00,	0.00,	5700000.00,	'Karyawan Baru',	'2021-08-15',	'2021-08-14 17:43:22',	'2021-08-14 17:43:22'),
(840,	'UIRJQXLC',	'ASD98891090',	'DSA123817283',	'KY',	20,	20,	40,	300000.00,	6000000.00,	0.00,	0.00,	0.00,	0.00,	0.00,	0.00,	0.00,	0.00,	0.00,	120000.00,	0.00,	60000.00,	0.00,	5760000.00,	'Orang Lama',	'2021-08-15',	'2021-08-14 17:44:01',	'2021-08-14 17:44:01');

DROP TABLE IF EXISTS `statuses`;
CREATE TABLE `statuses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `status_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `statuses` (`id`, `status_name`, `status_description`, `created_at`, `updated_at`) VALUES
(1,	'PARIATUR',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(2,	'QUO',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(3,	'SUSCIPIT',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(4,	'EUM',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(5,	'DOLORES',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(6,	'ET',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(7,	'DOLOREM',	NULL,	'2021-08-02 11:06:41',	'2021-08-02 11:06:41'),
(8,	'DOLORIBUS',	NULL,	'2021-08-02 11:06:42',	'2021-08-02 11:06:42'),
(9,	'ELIGENDI',	NULL,	'2021-08-02 11:06:42',	'2021-08-02 11:06:42'),
(10,	'IN',	NULL,	'2021-08-02 11:06:42',	'2021-08-02 11:06:42');

DROP TABLE IF EXISTS `taxes`;
CREATE TABLE `taxes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tax_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `taxes` (`id`, `tax_name`, `tax_description`, `created_at`, `updated_at`) VALUES
(1,	'NV',	NULL,	'2021-08-02 11:06:42',	'2021-08-02 11:06:42'),
(2,	'KY',	NULL,	'2021-08-02 11:06:42',	'2021-08-02 11:06:42'),
(3,	'PA',	NULL,	'2021-08-02 11:06:42',	'2021-08-02 11:06:42'),
(4,	'LA',	NULL,	'2021-08-02 11:06:42',	'2021-08-02 11:06:42'),
(5,	'ND',	NULL,	'2021-08-02 11:06:42',	'2021-08-02 11:06:42'),
(6,	'IA',	NULL,	'2021-08-02 11:06:42',	'2021-08-02 11:06:42'),
(7,	'FL',	NULL,	'2021-08-02 11:06:42',	'2021-08-02 11:06:42'),
(8,	'NC',	NULL,	'2021-08-02 11:06:42',	'2021-08-02 11:06:42'),
(9,	'NC',	NULL,	'2021-08-02 11:06:42',	'2021-08-02 11:06:42'),
(10,	'VT',	NULL,	'2021-08-02 11:06:42',	'2021-08-02 11:06:42');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'Admin',	'admin@admin.com',	'2021-08-06 15:54:22',	'$2y$10$E6Vx4JeHd0ZahGUT.B0Ia.5qggr85wc1Q6/LVo7I/wYYawnFnYmm.',	'0HGVWueHQtZ3tSMzZcWMfDpvi22aaSgE0k6LvmMk2necjx9HzKOcFZEUGEtq',	'2021-08-06 15:54:22',	'2021-08-06 15:54:22');

-- 2021-08-15 01:04:36
