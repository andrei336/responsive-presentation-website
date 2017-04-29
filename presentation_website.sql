SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `presentation_website` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `presentation_website`;

-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(128) NOT NULL,
  `article_content` longtext NOT NULL,
  `article_author` varchar(64) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 - ne publicat, 1 - publicat',
  `date_publishing` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_change` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `article_title`, `article_content`, `article_author`, `status`, `date_publishing`, `last_change`) VALUES
(1, 'Articol de proba', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, cupiditate aperiam repudiandae provident magnam minima dolore, ad dolorum perspiciatis officia tempore illo sit reprehenderit ratione. Aut vitae temporibus itaque dolores.\r\n	Adipisci accusantium cumque, sunt quia excepturi soluta, est nobis ipsum minus, minima dolore voluptatibus explicabo reiciendis officiis? Illo, commodi. Natus consequuntur soluta, eligendi dolore repellendus. Modi cumque veniam molestias quisquam.', 'Sorin', 1, '2017-04-29 21:04:15', '2017-04-29 21:04:15'),
(2, 'Al doilea articol de proba', 'Perferendis provident quibusdam rerum velit beatae blanditiis atque voluptate a ipsum perspiciatis repudiandae, odio, fugit odit, vel, itaque repellat officia neque impedit suscipit reprehenderit hic sint ex. Sunt, asperiores, dolore.', 'Andrei', 1, '2017-04-29 21:04:15', '2017-04-29 21:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL COMMENT 'Id',
  `page_id` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL,
  `order_menu` int(11) NOT NULL,
  `show_menu` int(1) NOT NULL DEFAULT '0',
  `last_change` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `page_id`, `parent_id`, `order_menu`, `show_menu`, `last_change`) VALUES
(1, 1, 0, 1, 1, '2017-04-18 17:00:09'),
(2, 2, 0, 2, 1, '2017-04-18 17:00:09'),
(3, 3, 0, 3, 1, '2017-04-18 17:00:09'),
(4, 4, 0, 4, 1, '2017-04-18 17:00:09'),
(5, 5, 3, 1, 1, '2017-04-18 17:00:09'),
(6, 6, 3, 2, 1, '2017-04-18 17:00:09'),
(13, 7, 3, 3, 1, '2017-04-29 18:59:16');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL COMMENT 'ID page',
  `page_name` varchar(50) NOT NULL COMMENT 'Name for Page',
  `page_title` varchar(50) NOT NULL COMMENT 'Title for adress bar',
  `page_description` text NOT NULL COMMENT 'Meta description for page',
  `page_keywords` varchar(300) NOT NULL COMMENT 'Meta Keyword for Page',
  `page_robots` varchar(17) NOT NULL DEFAULT 'noindex,nofollow',
  `page_order` tinyint(4) NOT NULL COMMENT 'Order for Menu',
  `page_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Active(1) / Inactive(0)',
  `design` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 or 2 Column',
  `body` longtext NOT NULL COMMENT 'Page Body',
  `page_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Static(1) / Dinamic(0)',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date added',
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Last modified'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_name`, `page_title`, `page_description`, `page_keywords`, `page_robots`, `page_order`, `page_status`, `design`, `body`, `page_type`, `date_added`, `date_modified`) VALUES
(1, 'Home', 'home', 'Pagina de start a site-ului', '', 'noindex,nofollow', 1, 1, 1, 'Bine ati venit!', 1, '2015-01-24 22:47:52', '2017-04-18 17:16:14'),
(2, 'About', 'about', 'Despre noi', '', 'noindex,nofollow', 2, 1, 1, 'Cateva cuvinte despre noi', 1, '2015-01-30 00:59:28', '2017-04-18 17:16:14'),
(3, 'Portofoliu', 'portofoliu', 'Lucrarile noastre', '', 'noindex,nofollow', 3, 1, 1, 'Cateva din lucrarile noastre', 1, '2015-01-30 09:01:13', '2017-04-18 17:16:14'),
(4, 'Contact', 'contact', 'Pagina de contact a site-ului', '', 'noindex,nofollow', 4, 1, 1, 'Pagina de contact a site-ului', 1, '2017-04-18 17:20:53', '2017-04-29 18:36:57'),
(5, 'Foto', 'foto', 'Pagina cu fotografii', '', 'noindex,nofollow', 1, 1, 1, 'Fotografiile noastre', 1, '2017-04-28 11:57:04', '2017-04-29 21:07:05'),
(6, 'Video', 'video', 'Pagina cu filme', '', 'noindex,nofollow', 2, 1, 1, 'Filmele noastre', 1, '2017-04-28 11:58:17', '2017-04-29 21:07:44'),
(7, 'Etc...', 'etc...', 'O pagina oarecare', '', 'noindex,nofollow', 3, 1, 1, 'Diverse postari...', 1, '2017-04-29 18:57:30', '2017-04-29 21:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(48) NOT NULL,
  `lang` varchar(7) NOT NULL,
  `charset` varchar(24) NOT NULL DEFAULT 'utf-8',
  `robots` varchar(16) NOT NULL DEFAULT 'nofollow-noindex',
  `favicon` varchar(128) NOT NULL,
  `header_img` varchar(128) NOT NULL,
  `header_alt` varchar(128) NOT NULL,
  `logo_img` varchar(128) NOT NULL,
  `logo_alt` varchar(128) NOT NULL,
  `motto` varchar(64) NOT NULL,
  `owner` varchar(24) NOT NULL,
  `copyright` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `lang`, `charset`, `robots`, `favicon`, `header_img`, `header_alt`, `logo_img`, `logo_alt`, `motto`, `owner`, `copyright`) VALUES
(1, 'Site de prezentare responsive', 'ro', 'utf-8', 'nofollow-noindex', 'favicon3.png', '', 'Site De Prezentare', '', 'S.P.R.', 'Indrasneste, si vei castiga', 'Sorin Alexandru', 'sorin alexandru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id', AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID page', AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;