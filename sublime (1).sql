-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 29 2019 г., 22:36
-- Версия сервера: 5.5.50-log
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sublime`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(45) NOT NULL,
  `browser_name` text,
  `description` text NOT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `cat_name`, `browser_name`, `description`, `img`) VALUES
(1, 'phones', 'Phones', 'The mobile phone -- also known as the cellphone -- has infiltrated our daily lives, becoming the quintessential communication device. The mobile phone has developed over time, becoming more useful with every new capability. Most versions today can fit into your back pocket with ease. Much more than a phone, modern-day mobile phones help keep us organized and connected with the many features they offer.', 'avds_small.jpg'),
(2, 'cameras', 'Cameras', 'Browse the top-ranked list of Best Photography Camera below along with associated reviews and opinions.', 'avds_large.jpg'),
(3, 'tablets', 'Tablets', 'Tablet computer, computer that is intermediate in size between a laptop computer and a smartphone. Early tablet computers used either a keyboard or a stylus to input information, but these methods were subsequently displaced by touch screens.', 'samsung.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `subject`, `message`) VALUES
(1, 'Modest', 'Musorgskiy', 'letter', 'long long long letter');

-- --------------------------------------------------------

--
-- Структура таблицы `good`
--

CREATE TABLE IF NOT EXISTS `good` (
  `id` int(11) NOT NULL,
  `category` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `discount` float NOT NULL,
  `price` int(11) NOT NULL,
  `descr` text,
  `img` varchar(255) DEFAULT NULL,
  `link_name` text,
  `added` date DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='	';

--
-- Дамп данных таблицы `good`
--

INSERT INTO `good` (`id`, `category`, `name`, `discount`, `price`, `descr`, `img`, `link_name`, `added`, `status`) VALUES
(1, 'phones', 'SAMSUNG GALAXY S10/S10 PLUS', 1099, 999, 'The Galaxy S10 Plus is Samsung''s new ''everything phone'' for 2019, helping disrupt the sameness of the last few generations of Samsung handsets. Its 6.4-inch screen is so big it displaces the front camera, while its triple-lens rear camera can take ultra-wide photos. And though you can’t see them, the in-screen fingerprint sensor is a hidden feature for you, while Wireless PowerShare is a perk for your battery-drained friends. It has a lot of nifty features – just know Samsung is asking for a lot of money, too.', 'samsung-galaxy-s10-plus-mini@2x.jpeg', 'samsung_galaxy_plus', '2019-04-17', 'hot'),
(2, 'phones', 'Apple iPhone XS Max', 1023, 950, 'The most durable glass ever in a smartphone. A beautiful new gold finish, achieved with an atomic-level process. Precision-machined, surgical-grade stainless steel bands. And a new level of water and dust resistance.2', 'pdpkeyfeatures-iphonexs-dm-2B.jpg', 'apple_xs_max', '2019-04-19', NULL),
(3, 'rolls', 'Motorola Moto E5 Play', 0, 150, 'Marketplace: Google Play Store\r\n\r\nMessaging: SMS (threaded view), MMS, Email, Push Mail, IM\r\n\r\nWeb Browsing: Internet Browser', 'moto_E5@2x.png', 'motorola_moto', '2019-03-12', 'new'),
(4, 'phones', 'OnePlus 6T', 0, 549, 'Unlock your OnePlus 6T with the fastest in-display fingerprint sensor on any smartphone. We are setting a new industry standard with our cutting-edge Screen Unlock technology.', 'display_desktop_en.png', 'oneplus_6t', '2019-04-08', NULL),
(5, 'cameras', 'Horizon-Perfekt', 250, 249, 'The prime choice for panoramic professionals! Strong and mighty in ABS plastic, it offers maximum creative flexibility with a full range of aperture and shutter settings, enabling precise exposure every time. Its advanced clockwork mechanics and the built-in accessories allow you to capture majestic panoramic pictures on YOUR terms!', 'hkp300_product_1_image.jpg', 'horizon_perfekt', '2019-02-20', NULL),
(6, 'cameras', 'Panoramnyy fotoapparat Gorizont Kompakt', 0, 349, 'Bend the world to capture more than your eyes can see. Off to new horizons—this camera will have you marvel at panoramic adventures.', 'hpp300_product_1_media_gallery.jpg', 'panoramny_fotoapparat_gorizont_compakt', '2019-04-01', 'sale'),
(7, 'cameras', 'Panoramic Camera Horizon s3 Pro', 0, 789, 'Someone made an interesting observation: Unlike in focal plane shutter cameras (as in most SLRs), in the Horizon the lens and the narrow window on the film side move in unison. In other words they are tightly coupled. Also, the with of the window is reduced from one side only, not equally from both sides. This would mean, that as higher shutter speed values are selected, the image circle is reduced one-sidedly. This is less efficient than the alternative solution - from both sides equally -, because it does not take advantage of the fact that all lenses give their best in their middle. From this logic it follows, that for best results one would either use 1/60 (little less than full image circle) or 1/2. \r\nWell, this is something to investigate in the future. How reality stands up to theory.', 'S3ProBack.jpg', 'panoramic_camera_horizon_s3_pro', '2019-04-10', NULL),
(8, 'cameras', 'Nikon COOLPIX A1000', 712, 654, 'The Coolpix A1000 is an enjoyable camera to shoot with and it boasts enough optical zoom to cover virtually any shooting scenario. However, beneath its serious exterior is nothing more than an average 1/2.3-inch-type compact camera sensor that produces image quality that''s nothing special. Considering the hefty £409 (US pricing is yet to be announced) launch price, we''d only recommend the A1000 if you simply must have this much zoom range in your pocket.', 'EeJHiM52pXkk6Ej2fHrEVB-1200-80.jpg', 'coolpix_a1000', '2019-03-13', 'hot'),
(9, 'cameras', 'Sony WX500', 0, 459, 'Improve your selfie, and take it easy, too. A 180-degree tiltable LCD monitor makes it simple to see how you look in the frame. Meet the new Sony WX500 — the world’s smallest2 camera to contain the far-reaching performance of a ZEISS® 30x optical zoom lens. With so much creative capability at hand to shoot for fun, you''ll capture more star quality in every image.', '632a391d86154e7c2e570b00bc7f4ed4.webp', 'sony_wx500', '2019-04-17', NULL),
(10, 'tablets', 'Pad 2 Unlocked', 0, 154, 'Determine if your device is eligible to be unlocked: Unlock your wireless mobile device.\r\nInsert a non-T-Mobile SIM card, then turn on the tablet.\r\nWhen the Lock screen displays, enter your 16-digit Mobile Device Unlock code.\r\nIf the Lock screen does not display:\r\nFrom any Home screen, tap the Apps icon.\r\nTap Contacts.\r\nTap the Search contacts field.\r\nEnter 2945#*496#.\r\nTap the Add contact + icon in the top-right.\r\nTap Network Lock.\r\nEnter your 16-digit Mobile Device Unlock code.\r\n''SIM Network Unlock Successful'' message displays.\r\nWait for the tablet to automatically restart.\r\nYour tablet is now unlocked.\r\nIf you receive any error messages after attempting to permanently or temporarily unlock your device, contact customer care to inform them of the issues you are receiving.', 'Original-Tablet-PC-Pad-2-Unlocked-Tablet.jpg', 'pad_2_nlocked', '2019-04-16', 'new'),
(11, 'tablets', 'Windows10 Surface', 0, 143, 'CPU  Intel Cheerytrail Quad-core 14nm\r\nGPU Gen8-LP 10/12EU up to 600MHz\r\nOperation System Support : Windows 10/8.1  \r\nChip set:   Intel Bay trail, Z8350 Quad-core  ( up to 1.92GHz ),', '71DDmawQuvL._AC_UL436_.jpg', 'windows10_surface', '2019-04-10', NULL),
(12, 'tablets', 'Android Rk3288', 0, 320, 'It delivers a professional-grade large-format display, updates & plays content via CMS software remotely, installs the PCAP touchscreen. \r\nIt is public used for in-store interaction, point of sale, self-service, wayfinding, corporate, healthcare, education, transportation, entertainment, restaurant, and hospitality environments to publish the information. ', '27-Inch-Cheap-Industrial-Capacitive-Touch-Android-Rk3288-Tablet-PC.jpg', 'android_rk3288', '2019-04-05', 'sale'),
(13, 'tablets', 'Wall Mounted Android 6.0', 445, 420, 'This Android panel PC is a wall-mountable or Desk Mountable design with no external buttons. The unit supports RJ45 (Ethernet LAN interface) with a DC In 9V-36V.   The unit also supports built-in POE (fully complaint with 802.3 af) support.\r\n\r\nVarious mounting options exist including  in-wall flush,  on-wall and desktop  mounting ability. The unit is available in white or black colors.\r\n\r\nPowered by the powerful 1.2GHz ARM Cortex Dual Core processor, this tablet is designed to give you high performance with long shelf life and is designed to operate on a 24x7 basis. \r\n\r\nThe tablet has 2 GB RAM and 8 GB ROM extensible upto 32 GB of storage with MicroSD. ', '7-Inch-Wall-Mounted-Android-6-0-Tablet-PC-for-Home-Automation.jpg', 'wall_mounted_android_6', '2019-04-08', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sum` int(11) NOT NULL,
  `status` enum('Новый','Завершен') NOT NULL DEFAULT 'Новый',
  `subscribe` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `date`, `name`, `email`, `phone`, `address`, `sum`, `status`, `subscribe`) VALUES
(65, '2019-04-24 20:05:03', 'Some', 'alla_88@inbox.lv', '9868757474', 'rlejt orei tpper', 300, 'Новый', NULL),
(66, '2019-04-24 20:10:24', 'someone', 'alla_88@inbox.lv', '9868757474', 'alkhdfo ', 800, 'Новый', NULL),
(67, '2019-04-24 20:12:57', 'kjhg', 'alla_88@inbox.lv', '9868757474', 'gewr ', 100, 'Новый', NULL),
(68, '2019-04-24 23:44:10', 'lh', 'alla_88@inbox.lv', '9868757474', 'pioujoi pouio ou ', 1400, 'Новый', NULL),
(69, '2019-04-25 02:56:38', 'Alla', 'alla_88@inbox.lv', '9868757474', 'Jodahweg 415', 6400, 'Завершен', NULL),
(70, '2019-04-28 04:03:35', 'Sam', 'Sam@info.com', '98965745564', 'akjgk hkjh', 249, 'Новый', NULL),
(71, '2019-04-28 04:15:08', 'sam', 'Sam@info.com', '07098769875687', 'uiy ui iu ', 249, 'Новый', NULL),
(72, '2019-04-28 04:16:29', 'sam', 'Sam@info.com', '07098769875687', 'uiy ui iu ', 249, 'Новый', NULL),
(73, '2019-04-28 04:16:44', 'sam', 'Sam@info.com', '07098769875687', 'uiy ui iu ', 249, 'Новый', NULL),
(74, '2019-04-28 04:22:30', 'sam', 'Sam@info.com', '07098769875687', 'uiy ui iu ', 249, 'Новый', NULL),
(75, '2019-04-28 04:27:38', 'sam', 'Sam@info.com', '07098769875687', 'uiy ui iu ', 249, 'Новый', NULL),
(76, '2019-04-29 16:35:03', 'Vally', 'asdj@hjgt.mn', '097898678657', 'oiyob oiy oiu ', 789, 'Новый', NULL),
(77, '2019-04-29 16:43:37', 'Test', 'test@test.com', '097986875985', 'opiu piouoiu oi ', 249, 'Новый', NULL),
(78, '2019-04-29 16:45:55', 'Surja', 'sakdh@uytut.bv', '076576464', 'uiy uyuy py oiy ', 154, 'Новый', NULL),
(79, '2019-04-29 16:53:35', 'Sawwy', 'jhvjh@jhgjh.mn', '868757656744', 'iuyt itouitoi toit oiu o', 349, 'Новый', NULL),
(80, '2019-04-29 16:55:10', 'iutiuyt', 'kgkg@yutuytg', '9876434', 'igt yt iyt it ', 143, 'Новый', NULL),
(81, '2019-04-29 17:19:18', 'Suzzy', 'jhgkjhg@jhgjh.mn', '9875764653', 'iug gig i ', 999, 'Новый', NULL),
(82, '2019-04-29 17:24:27', 'Hidden', 'jhfhg@jhgjhg.mn', 'g giutgiu iu iutyi uti oiu ', 'g gli giug iuiluiuy iuy yoiu yiu ', 349, 'Новый', NULL),
(83, '2019-04-29 17:32:47', 'uyfuyf', 'jhgjhg@jhfgjhfg.mn', '986765564', 'iuy iyiu yiuy uiy ', 598, 'Новый', 1),
(84, '2019-04-29 17:53:37', 'jhgjhg', 'hgfh@uygujg.mn', '986746536', 'kjgg glig i giug i', 249, 'Новый', 1),
(85, '2019-04-29 17:59:27', 'дуаодуц', 'jhfhg@jhgjhg.mn', '875784676', 'oi oiuiou ioupio pi oyp oiyp oipyoi o ', 999, 'Новый', 1),
(86, '2019-04-29 19:30:29', 'Alla', 'alla_88@inbox.lv', '9868757474', 'Ustaad Harryboekhan Jodahweg 415', 999, 'Новый', 0),
(87, '2019-04-29 19:37:54', 'Elly', 'alla_88@inbox.lv', '9868757474', 'dfj eiu oeiu r', 349, 'Новый', 1),
(88, '2019-04-29 19:46:03', 'Sally', 'hkjh@jgjk.nb', '9868757474', 'iutgo itoiut oi ', 143, 'Новый', 1),
(89, '2019-04-29 19:50:03', 'itit', 'khklh@kjh.mn', '9868757474', 'oyh y ypoy ypo ', 249, 'Новый', 1),
(90, '2019-04-29 19:53:46', 'Nensy', 'dfasf@ufg.mn', '9868757474', 'jh hl hl jhl ihl ilh ', 999, 'Новый', 1),
(91, '2019-04-29 19:57:31', 'Nenny', 'dfasf@ufg.mn', '9868757474', 'akjgk hkjh', 143, 'Новый', 1),
(92, '2019-04-29 20:01:17', 'Alla', 'alla_88@inbox.lv', '9868757474', 'kgefe ert ', 249, 'Новый', 1),
(93, '2019-04-29 20:07:41', 'Ann', 'alla_88@inbox.lv', '9868757474', 'uiy ioyouiy iuyh i', 999, 'Новый', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `order_good`
--

CREATE TABLE IF NOT EXISTS `order_good` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `sum` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_good`
--

INSERT INTO `order_good` (`id`, `order_id`, `product_id`, `name`, `price`, `quantity`, `sum`) VALUES
(51, 71, 5, 'Horizon-Perfekt', 249, 1, 249),
(52, 72, 5, 'Horizon-Perfekt', 249, 1, 249),
(53, 73, 5, 'Horizon-Perfekt', 249, 1, 249),
(54, 74, 5, 'Horizon-Perfekt', 249, 1, 249),
(55, 75, 5, 'Horizon-Perfekt', 249, 1, 249),
(56, 76, 7, 'Panoramic Camera Horizon s3 Pro', 789, 1, 789),
(57, 77, 5, 'Horizon-Perfekt', 249, 1, 249),
(58, 78, 10, 'Pad 2 Unlocked', 154, 1, 154),
(59, 79, 6, 'Panoramnyy fotoapparat Gorizont Kompakt', 349, 1, 349),
(60, 80, 11, 'Windows10 Surface', 143, 1, 143),
(61, 81, 1, 'SAMSUNG GALAXY S10/S10 PLUS', 999, 1, 999),
(62, 82, 6, 'Panoramnyy fotoapparat Gorizont Kompakt', 349, 1, 349),
(63, 83, 6, 'Panoramnyy fotoapparat Gorizont Kompakt', 349, 1, 349),
(64, 83, 5, 'Horizon-Perfekt', 249, 1, 249),
(65, 84, 5, 'Horizon-Perfekt', 249, 1, 249),
(66, 85, 1, 'SAMSUNG GALAXY S10/S10 PLUS', 999, 1, 999),
(67, 86, 1, 'SAMSUNG GALAXY S10/S10 PLUS', 999, 1, 999),
(68, 87, 6, 'Panoramnyy fotoapparat Gorizont Kompakt', 349, 1, 349),
(69, 88, 11, 'Windows10 Surface', 143, 1, 143),
(70, 89, 5, 'Horizon-Perfekt', 249, 1, 249),
(71, 90, 1, 'SAMSUNG GALAXY S10/S10 PLUS', 999, 1, 999),
(72, 91, 11, 'Windows10 Surface', 143, 1, 143),
(73, 92, 5, 'Horizon-Perfekt', 249, 1, 249),
(74, 93, 1, 'SAMSUNG GALAXY S10/S10 PLUS', 999, 1, 999);

-- --------------------------------------------------------

--
-- Структура таблицы `subscribtions`
--

CREATE TABLE IF NOT EXISTS `subscribtions` (
  `id` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subscribtions`
--

INSERT INTO `subscribtions` (`id`, `email`, `token`) VALUES
(1, 'sanny@gmail.com', ''),
(2, 'alla_88@inbox.lv', ''),
(3, NULL, '75883edabd3582c5c7f58647925e06ec'),
(4, '0', '7e0b9d2a1e329f144e728498f68acfae'),
(5, '0', '4693ed4bc9c8544f7110b928f7b8590a'),
(6, '0', '39523cbe5248fcd115a7dbcb4776431a'),
(7, '0', 'c250a80245921be8a0641fabdf36ef5f'),
(8, '0', '73580f665fd9934329c02b0c0dae7348'),
(9, '0', '6ed07845611135d11b00b702de0d6200'),
(10, '0', '3109f4cc509ce0aebfe76ba257d76093'),
(11, '0', 'fd0ad67d9d27154e12d3bbc3573af25e'),
(12, 'hfdhg@uyrtuyr.mn', '4e82c9ca6bd937901167bc2b302aa1f0'),
(13, 'hfdhg@uyrtuyr.mn', '605f92d4d0868cbc99b7c7a003049637');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `auth_key`) VALUES
(1, 'admin', '$2y$13$OzahBu2mo8152R9lQdvagOXmQ3r26TENt42QjSDJFS2mReC16oUrC', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `good`
--
ALTER TABLE `good`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_good`
--
ALTER TABLE `order_good`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscribtions`
--
ALTER TABLE `subscribtions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `good`
--
ALTER TABLE `good`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT для таблицы `order_good`
--
ALTER TABLE `order_good`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT для таблицы `subscribtions`
--
ALTER TABLE `subscribtions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
