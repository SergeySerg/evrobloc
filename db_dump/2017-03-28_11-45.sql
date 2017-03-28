-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 28 2017 г., 11:44
-- Версия сервера: 5.5.50
-- Версия PHP: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `evroblok_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL,
  `category_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `attributes` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `imgs` text COLLATE utf8_unicode_ci NOT NULL,
  `files` text COLLATE utf8_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `meta_title` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `article_id`, `name`, `title`, `short_description`, `description`, `attributes`, `img`, `imgs`, `files`, `priority`, `date`, `meta_title`, `meta_description`, `meta_keywords`, `active`, `created_at`, `updated_at`) VALUES
(1, 13, 0, '', 'Газоблок "Стоунлайт" (м.Бровари)@|;Газоблок "Стоунлайт" (г.Бровары)@|;', '@|;@|;', '<p>Для виробництва газобетона &quot;Стоунлайт&quot; використовується твльки якісні екологічно чисті матеріали: вода, пісок, цемент, вапно та алюмінієва паста. Відповідає всім вимогам та стандартам.</p>@|;<p>Для производства газобетона &quot;Стоунлайт&quot; используется твлькы качественные экологически чистые материалы: вода, песок, цемент, известь и алюминиевая паста. Соответствует всем требованиям и стандартам.</p>@|;', '', 'upload/articles/1/main/1-1490548306.jpeg', '[]', '', 0, '0000-00-00 00:00:00', '@|;@|;', '@|;@|;', '@|;@|;', 1, '2017-03-26 17:11:46', '2017-03-26 17:36:15'),
(2, 13, 0, '', 'Газоблок "Aерок" (м.Обухів та м.Березань)@|;Газоблок "Aерок" (г.Обухов та г.Березань)@|;', '@|;@|;', '<p>Газоблок &quot;Аерок&quot; виробник високоякісного газобетону автоклавного способу твердіння, який виробляється за допомогою високотехнологічної лінії WENRHAHN Smart HESSAAC Systems B.V. Основні характеристики &quot;Аерок&quot; - це плотнысть, прочнысть та точність геометричних форм. Компанія &quot;Аер&quot; має атестований &quot;контрольно-випробувальний відділ&quot; який відповідає вимогам національних стандартів та інших нормативних документів.</p>@|;<p>Газоблок &quot;Аэрок&quot; производитель высококачественного газобетона автоклавного способа твердения, который производится с помощью высокотехнологичной линии WENRHAHN Smart HESSAAC Systems B.V. Основные характеристики &quot;Аэрок&quot; - это плотнысть, прочнысть и точность геометрических форм. Компания &quot;Аэр&quot; имеет аттестован &quot;контрольно-испытательный отдел&quot; отвечающий требованиям национальных стандартов и других нормативных документов.</p>@|;', '', 'upload/articles/2/main/2-1490549750.jpg', '', '', 0, '0000-00-00 00:00:00', '@|;@|;', '@|;@|;', '@|;@|;', 1, '2017-03-26 17:35:50', '2017-03-26 17:35:50'),
(3, 13, 0, '', 'Газоблок AAC (м.Новая Каховка)@|;Газоблок AAC (г.Новая Каховка)@|;', '@|;@|;', '<p>Продукція найвищої якості та відповідає всім нориаи та вимогам стандартизації. Переваги перед іншими виробниками газобетону полягає в тому, ща на відміну від інших, цей виробник має унікальний блок розміром 7.5 x 20 x 60 см.</p>@|;<p>Продукция, которая найдет применение и обеспечивает все нововведения и видовую стандартизацию.&nbsp;Преимущества перед другими производителями газобетона заключается в том, что&nbsp;в отличие от других, этот производитель имеет уникальный блок размером 7.5 x 20 x 60 см.</p>@|;', '', 'upload/articles/3/main/3-1490550440.jpg', '', '', 0, '0000-00-00 00:00:00', '@|;@|;', '@|;@|;', '@|;@|;', 1, '2017-03-26 17:47:20', '2017-03-26 17:47:20'),
(4, 13, 0, '', 'Газоблок Solbet (Польща)@|;Газоблок Solbet (Польша)@|;', '@|;@|;', '<p>Цей блок має хороші характеристики теплоізоляції та теплопровідності. Solbet - ведучий польський газоблок потужного заводу. Співвідношення ціна-якість робитьйого безперечним лідером серед виробників польського газобетону.</p>@|;<p>Этот блок имеет хорошие характеристики теплоизоляции и теплопроводности. Solbet - ведущий польский газоблок мощного завода. Соотношение цена-качество делает его бесспорным лидером среди производителей польского газобетона.</p>@|;', '', 'upload/articles/4/main/4-1490551003.jpg', '', '', 0, '0000-00-00 00:00:00', '@|;@|;', '@|;@|;', '@|;@|;', 1, '2017-03-26 17:56:43', '2017-03-26 17:56:43'),
(5, 12, 0, '', 'Слайд 1@|;Слайд 1@|;', '<p>Якісні будівельні матеріали за доступними цінами</p>@|;<p>Качественные строительные материалы по доступным ценам</p>@|;', '@|;@|;', '', 'upload/articles/5/main/5-1490562820.png', '[{"full":"upload\\/articles\\/5\\/full\\/slider1.png","min":"upload\\/articles\\/5\\/min\\/slider1.png"}]', '', 0, '0000-00-00 00:00:00', '@|;@|;', '@|;@|;', '@|;@|;', 1, '2017-03-26 21:11:36', '2017-03-26 21:15:55'),
(6, 12, 0, '', 'Слайд 2@|;Слайд 2@|;', '<p>Якісні будівельні матеріали за доступними цінами</p>@|;<p>Качественные строительные материалы по доступным ценам</p>@|;', '@|;@|;', '', 'upload/articles/6/main/6-1490562836.png', '[{"full":"upload\\/articles\\/6\\/full\\/slider1.png","min":"upload\\/articles\\/6\\/min\\/slider1.png"}]', '', 0, '0000-00-00 00:00:00', '@|;@|;', '@|;@|;', '@|;@|;', 1, '2017-03-26 21:11:54', '2017-03-26 21:16:39');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL,
  `parent_id` int(11) NOT NULL,
  `article_parent` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `imgs` text COLLATE utf8_unicode_ci NOT NULL,
  `fields` text COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `meta_title` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `article_parent`, `link`, `title`, `img`, `short_description`, `description`, `imgs`, `fields`, `date`, `active`, `meta_title`, `meta_description`, `meta_keywords`, `priority`, `created_at`, `updated_at`) VALUES
(8, 0, 0, 'main', 'Головна@|;Главная@|;', 'upload/categories/8/main/main-1490373194.jpg', '@|;@|;', '@|;@|;', '[]', '{"base":["title","short_description"],"attributes":{}}', '0000-00-00 00:00:00', 1, '@|;@|;', '@|;@|;', '@|;@|;', 0, '2017-03-13 15:47:17', '2017-03-24 16:33:14'),
(9, 0, 0, 'production', 'Продукція@|;Продукция@|;', '', '@|;@|;', '@|;@|;', '', '{"base":["title","short_description","description","gallery","priority","active","meta_title","meta_description","meta_keywords"],"attributes":{"Ціна":{"type":"input","lang_active":false,"active":true}}}', '1970-01-01 01:00:00', 1, '@|;@|;', '@|;@|;', '@|;@|;', 0, '2017-03-13 15:50:08', '2017-03-13 15:50:08'),
(10, 0, 0, 'news', 'Новини@|;Новости@|;', '', '@|;@|;', '@|;@|;', '[]', '{"base":["title","short_description","description","img","date","priority","active","meta_title","meta_description","meta_keywords"],"attributes":{}}', '0000-00-00 00:00:00', 1, '@|;@|;', '@|;@|;', '@|;@|;', 0, '2017-03-13 15:51:16', '2017-03-26 18:02:33'),
(11, 0, 0, 'cooperation', 'Співпраця@|;Сотрудничество@|;', '', '@|;@|;', '@|;@|;', '[]', '{"base":["title","short_description","gallery","active","meta_title","meta_description","meta_keywords"],"attributes":{}}', '0000-00-00 00:00:00', 1, '@|;@|;', '@|;@|;', '@|;@|;', 0, '2017-03-13 15:52:58', '2017-03-26 20:36:06'),
(12, 0, 0, 'slider', 'Слайдер@|;Слайдер@|;', '', '@|;@|;', '@|;@|;', '[]', '{"base":["title","short_description","img","gallery","priority","active","meta_title","meta_description","meta_keywords"],"attributes":{}}', '0000-00-00 00:00:00', 0, '@|;@|;', '@|;@|;', '@|;@|;', 0, '2017-03-13 16:11:24', '2017-03-26 21:15:15'),
(13, 9, 9, 'gazobeton', 'Газобетон@|;Газобетон@|;', '', '@|;@|;', '@|;@|;', '[]', '{"base":["title","short_description","description","img","priority","active","meta_title","meta_description","meta_keywords"],"attributes":{}}', '0000-00-00 00:00:00', 1, '@|;@|;', '@|;@|;', '@|;@|;', 0, '2017-03-15 14:03:16', '2017-03-26 17:13:00'),
(14, 9, 0, 'keramichni-bloki', 'Керамічні блоки@|;Кераміческие блоки@|;', '', '@|;@|;', '@|;@|;', '[]', '{"base":[],"attributes":{}}', '0000-00-00 00:00:00', 1, '@|;@|;', '@|;@|;', '@|;@|;', 0, '2017-03-24 13:46:17', '2017-03-24 13:55:00'),
(15, 9, 0, 'tsegla-ryadova', 'Цегла рядова@|;Кирпич рядовой@|;', '', '@|;@|;', '@|;@|;', '', '{"base":[],"attributes":{}}', '1970-01-01 01:00:00', 1, '@|;@|;', '@|;@|;', '@|;@|;', 0, '2017-03-24 13:54:44', '2017-03-24 13:54:44'),
(16, 9, 0, 'tsegla-litsyuvalna', 'Цегла лицювальна@|;Кирпич облицовочный@|;', '', '@|;@|;', '@|;@|;', '', '{"base":[],"attributes":{}}', '1970-01-01 01:00:00', 1, '@|;@|;', '@|;@|;', '@|;@|;', 0, '2017-03-24 13:58:27', '2017-03-24 13:58:27'),
(17, 9, 0, 'tsegla-klinkerna', 'Цегла клінкерна@|;Кирпич клинкерный@|;', '', '@|;@|;', '@|;@|;', '[]', '{"base":[],"attributes":{}}', '0000-00-00 00:00:00', 1, '@|;@|;', '@|;@|;', '@|;@|;', 0, '2017-03-24 13:59:28', '2017-03-24 23:03:05'),
(18, 9, 0, 'tsegla-ruchnoi-formovki', 'Цегла ручної формовки@|;Кирпич ручной формовки@|;', '', '@|;@|;', '@|;@|;', '', '{"base":[],"attributes":{}}', '1970-01-01 01:00:00', 1, '@|;@|;', '@|;@|;', '@|;@|;', 0, '2017-03-24 14:00:25', '2017-03-24 14:00:25'),
(19, 0, 0, 'about-us', 'Про нас@|;О нас@|;', '', '@|;<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>@|;', '<p>ПП &quot;Данилюк&quot; &nbsp;- найбільший постачальник стінових та кровельних матеріалів у Волинській області. Ми пропонуємо своїм покупцям будматеріали найвищого гатунку, вироблених із застосуванням іноваційних технологій як закордонного так і українського виробництва. На ринку з 2008 року і в нас високий рівень обслуги, який об&#39;єднується з готовністю йти на зустріч побажанням наших покупців та враховувати всі обставини.</p>\r\n\r\n<p>ПП &quot;Данилюк&quot; працює напряму з ведучими виробниками буд. матеріалів, а також здійснює доставку матеріалів на об&#39;єкт TIP-нормами, або спецтехнікою (кран-маніпулятор).</p>\r\n\r\n<p>З нами Ви завжди зможете зробити вигідну покупку будівельних та оздоблювальних матеріалів, а ми допоможемо в цьому і підберемо те, що Вам необхідно.</p>@|;<p>ЧП &quot;Данилюк&quot; - крупнейший поставщик стеновых и кровельных материалов в Волынской области. Мы предлагаем своим покупателям стройматериалы высокого качества, произведенных с применением инновационных технологий как зарубежного так и украинского производства. На рынке с 2008 года и у нас высокий уровень обслуги, который объединяется с готовностью идти навстречу пожеланиям наших покупателей и учитывать все обстоятельства.</p>\r\n\r\n<p>ЧП &quot;Данилюк&quot; работает напрямую с ведущими производителями стройматериалов, а также осуществляет доставку материалов на объект TIP-нормами, или спецтехникой (кран-манипулятор).</p>\r\n\r\n<p>С нами Вы всегда сможете сделать выгодную покупку строительных и отделочных материалов, а мы поможем в этом и подберем то, что Вам необходимо.</p>@|;', '', '{"base":[],"attributes":{}}', '1970-01-01 01:00:00', 1, '@|;@|;', '@|;@|;', '@|;@|;', 0, '2017-03-26 18:32:21', '2017-03-26 18:32:21'),
(20, 0, 0, 'contact', 'Контакти@|;Контакты@|;', '', '@|;@|;', '@|;@|;', '', '{"base":[],"attributes":{}}', '1970-01-01 01:00:00', 1, '@|;@|;', '@|;@|;', '@|;@|;', 0, '2017-03-26 18:34:15', '2017-03-26 18:34:15'),
(21, 0, 0, 'gallery', 'Галерея@|;Галерея@|;', '', '@|;@|;', '@|;@|;', '', '{"base":["title","img","priority","active","meta_title","meta_description","meta_keywords"],"attributes":{}}', '1970-01-01 01:00:00', 0, '@|;@|;', '@|;@|;', '@|;@|;', 0, '2017-03-26 20:33:26', '2017-03-26 20:33:26');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL,
  `article_id` int(11) NOT NULL,
  `rate` double(8,2) NOT NULL,
  `user_name` text COLLATE utf8_unicode_ci NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_email` text COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `langs`
--

CREATE TABLE IF NOT EXISTS `langs` (
  `id` int(10) unsigned NOT NULL,
  `lang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `langs`
--

INSERT INTO `langs` (`id`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'ua', '2017-01-14 20:44:58', '2017-01-14 20:44:58'),
(2, 'ru', '2017-01-14 20:44:58', '2017-01-14 20:44:58');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_09_14_124503_create_articles_table', 1),
('2016_09_14_124813_create_categories_table', 1),
('2016_09_14_124942_create_langs_table', 1),
('2016_10_06_124518_create_texts_table', 1),
('2016_11_04_094627_create_comments_table', 1),
('2016_12_26_140118_change_text_table_soft', 1),
('2017_01_02_155628_create_orders_table', 1),
('2017_02_06_120655_create_settings_table', 2),
('2017_02_13_144141_add_parent_id_categories', 3),
('2017_02_13_174128_add_article_id', 4),
('2017_02_13_174631_add_article_id', 5),
('2017_02_14_110847_add_article_parrent_category', 6),
('2017_02_14_111446_add_article_parrent_category', 7),
('2017_02_24_163342_add_field_img', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL,
  `type` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('webdesignstudio@gmail.com', 'fbde7c2090b1432792a7b0caee4dcfa185c155d6cc24beff39508ff5271224ba', '2017-02-06 14:40:36');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) unsigned NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `name`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'config.email', 'Пошта для отримання повідомлень', 'info@evroblok.com.ua', '0000-00-00 00:00:00', '2017-03-26 18:45:24', NULL),
(10, 'config.test', 'Тест', 'Тест', '2017-02-11 17:15:35', '2017-02-22 14:53:36', '2017-02-22 14:53:36');

-- --------------------------------------------------------

--
-- Структура таблицы `texts`
--

CREATE TABLE IF NOT EXISTS `texts` (
  `id` int(10) unsigned NOT NULL,
  `page_id` int(11) NOT NULL DEFAULT '0',
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL DEFAULT '0',
  `lang_active` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `texts`
--

INSERT INTO `texts` (`id`, `page_id`, `name`, `type`, `title`, `description`, `priority`, `lang_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 0, 'mail', 'input', 'Пошта', 'info@evroblok.com.ua', 1, 0, '2017-01-14 20:44:58', '2017-03-26 18:35:10', NULL),
(5, 0, 'telephone_one', 'input', 'Контактний номер телефону 1', '0504381102', 0, 0, '2017-03-13 16:15:34', '2017-03-28 07:15:51', NULL),
(6, 0, 'address', 'input', 'Адреса', 'Волинська обл., с.Рованці, вул.Світла 1@|;Волынская обл., с.Рованцы, ул.Свитла 1@|;', 0, 1, '2017-03-26 18:38:04', '2017-03-28 07:15:18', NULL),
(7, 0, 'map', 'input', 'Карта', 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3003.673176286237!2d25.33346941143852!3d50.724057504605874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1suk!2sua!4v1490262472393', 0, 0, '2017-03-26 18:40:25', '2017-03-26 18:40:25', NULL),
(8, 0, 'social_facebook', 'input', 'Сторінка Facebook', 'https://www.facebook.com', 0, 0, '2017-03-26 18:41:44', '2017-03-28 07:28:30', NULL),
(9, 0, 'social_instagram', 'input', 'Сторінка Instagram', 'https://www.instagram.com/', 0, 0, '2017-03-26 18:42:44', '2017-03-28 07:24:41', NULL),
(10, 0, 'social_vk', 'input', 'Cторінка VK', 'https://vk.com/', 0, 0, '2017-03-26 18:43:30', '2017-03-28 07:28:55', NULL),
(11, 0, 'telephone_two', 'input', 'Контактный телефон 2', '0502109616', 0, 0, '2017-03-26 18:44:54', '2017-03-28 07:16:21', NULL),
(12, 0, 'company_name', 'input', 'Назва компанії', 'ПП Данилюк@|;ЧП Данилюк@|;', 0, 1, '2017-03-26 18:54:53', '2017-03-26 22:35:06', NULL),
(13, 0, 'schedule', 'input', 'Розклад роботи', 'Пн-Пт 08.00-18.00 Сб 08.00-14.00@|;Пн-Пт 08.00-18.00 Сб 08.00-14.00@|;', 0, 1, '2017-03-26 22:33:22', '2017-03-28 07:14:03', NULL),
(14, 0, 'telephone_three', 'input', 'Контактний номер телефону 3', '0505739828', 0, 0, '2017-03-28 07:18:01', '2017-03-28 07:18:21', NULL),
(15, 0, 'social_odnoklassniki', 'input', 'Сторінка Однокласники', 'https://ok.ru/', 0, 0, '2017-03-28 07:28:05', '2017-03-28 07:28:05', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'info@evroblok.com.ua', '$2y$10$nCNnR/77B3bADXWGd5a3pOhJ3h0kLqP0s1pzG3QFAtKoSAvBBeKGy', 'Xhir8woAyMK2eNEMb4XMPgPCR6ZYE9F0sHERoJe5f6qBKcrokfOFuv5Iuf6Z', '2017-03-13 14:01:45', '2017-03-13 14:23:59'),
(2, 'root', 'info@flexweb.pro', '$2y$10$MIBlXl9wu1yeeynKIWall.5cJoofAXebRNkf7bbGPZw0Y5Gg3Yx8W', 'Wm909tUDWT37S5mvtwPn0qfDiINwOIWOgimH1ZpdKqnjgAOcNkJiSzxdTgLQ', '2017-03-13 14:27:44', '2017-03-13 20:53:17');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `langs`
--
ALTER TABLE `langs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `langs`
--
ALTER TABLE `langs`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `texts`
--
ALTER TABLE `texts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
