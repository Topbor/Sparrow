-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Гру 23 2020 р., 11:55
-- Версія сервера: 10.4.14-MariaDB
-- Версія PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `sparrow`
--

-- --------------------------------------------------------

--
-- Структура таблиці `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `psssword` char(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `login`, `psssword`) VALUES
(1, 'Borovyk', 'Dmytro', 'DD', 'DD');

-- --------------------------------------------------------

--
-- Структура таблиці `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` char(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image_url` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `details`, `added_on`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 'Цікаві місця та особливості Грузії', 'Гру́зія — держава у Східній Європі, на південно-східному узбережжі Чорного моря. Розташована на перехресті Європи та Азії. Має спільні кордони з такими країнами: на півночі — Росія, на півдні — Туреччина і Вірменія, на сході — Азербайджан. Грузія є членом Ради Європи, Євроконтролю, Організації з безпеки і співробітництва в Європі, і Організації за демократію та економічний розвиток.', 'Грузія - дивовижна країна, відома на весь світ своєю гостинністю і цікавими традиціями. Це країна, в якій абсолютно незнайома людина вважатиме своїм найсвятішим обов\'язком нагодувати і напоїти вас досхочу. І не важливо, що, швидше за все, ви більше не побачитесь. Справжні грузини просто не можуть інакше. Але також Грузія славиться чарівною природою і великою кількістю пам\'яток, з якими ми вас познайомимо в даному розділі.', '2020-12-20 08:44:15', 'https://traveller-eu.ru/sites/default/files/styles/index/public/stock-photo-111224905.jpg?itok=CgJkayTu', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `codes`
--

CREATE TABLE `codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `password` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `codes`
--

INSERT INTO `codes` (`id`, `password`, `created_at`, `updated_at`) VALUES
(1, 'ebidod90', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(66, '2014_10_12_000000_create_users_table', 1),
(67, '2020_10_07_094027_our_tours', 2),
(68, '2020_10_07_130107_create_trips_table', 2),
(69, '2020_10_08_082655_create_blogs_table', 2),
(70, '2020_10_09_095735_create_workers_table', 2),
(71, '2020_10_17_105006_create_orders_table', 2),
(72, '2020_10_24_130359_create_code_table', 2),
(73, '2020_12_09_123020_create_admins_table', 2);

-- --------------------------------------------------------

--
-- Структура таблиці `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `trip_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `trip_id`, `date`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Боровик Олег', 673800385, 1, '2021-03-04', 4300, NULL, NULL),
(2, 'Миколенко Василь', 235332342, 1, '2021-03-04', 4300, NULL, NULL),
(3, 'Герасимчук Анна', 675495545, 1, '2021-03-04', 4300, NULL, NULL),
(4, 'Верениченко Ігор', 985645582, 4, '2021-05-14', 100, NULL, NULL),
(5, 'Біл Гейтс', 673490012, 3, '2021-03-31', 75000, NULL, NULL),
(6, 'Поташнік Михайло', 673165348, 5, '2021-05-12', 5000, NULL, NULL),
(7, 'Білик Андрій', 673800351, 4, '2021-05-14', 100, NULL, NULL),
(8, 'Коцемір Лариса', 673800358, 3, '2021-03-31', 75000, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `tours`
--

CREATE TABLE `tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mountaine` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hige` int(11) NOT NULL,
  `level` enum('easy','medium','hard') COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_way` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meet_place` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finish_place` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `tours`
--

INSERT INTO `tours` (`id`, `mountaine`, `country`, `hige`, `level`, `description`, `tour_way`, `meet_place`, `finish_place`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 'Айленд пік', 'Непал', 6165, 'hard', 'Айленд-пік (англ. Island Peak) (6165 м) — гірська вершина в Гімалаях. Інша назва вершини Imja Tse.\r\n\r\nНазву Айленд-пік було присвоєно в 1951 р. членами британської експедиції під керівництвом Еріка Шіптона ( Eric Shipton). Коли члени британської експедиції побачили даний пік вперше з Дінгбоче ( Dingboche), то він нагадував острів у морі, покритий снігом. Пізніше, в рамках кампанії з перейменування, в 1983 р. він був перейменований в Imja Tse. Однак ця вершина більш відома під своїм первинним ім\'ям[1]. Пік розташований на гребені, що спускається з південного краю восьмитисячника Лхоцзе-Шар.', 'Катманду - Лукла - Пхакдінг - Намче-Базар - Дінгбоче - Лобуче - Горак Шеп - Кала Паттар (5648м) - Лобуче - Чукунг - висотний табір Айленд-пік (5450) - сходження на Айленд-пік (6189) - Чукунг - Пангбоче - Намче Базар - Лукла – Катманду', 'Катманду', 'Катманду', 'https://mountainguide.ru/wp-content/uploads/2019/01/island-peak-climbing-1.jpg', NULL, '2020-12-23 08:35:05'),
(2, 'Еверест', 'Непал', 8848, 'hard', 'Джомолу́нгма (тиб. «Мати Всесвіту»), Сагарматха, або Евере́ст — найвища вершина земної кулі, розташована в Гімалаях на кордоні Китаю і Непалу. Її висота становить 8848,86 метри над рівнем моря. Англійською мовою гору названо Еверестом (англ. Mount Everest) на честь сера Джорджа Евереста (1790—1866 рр.), керівника геодезичної служби Британської Індії в 1830–1843 рр. Цю назву запропонував 1856 року наступник Дж. Евереста — Ендрю Во (англ. Andrew Waugh, 1810–1878 рр.) Це зробили одночасно з публікацією результатів роботи його співробітника, Р. Сікдара, який 1852 року вперше виміряв висоту «Піка XV» і довів, що він є найвищим у регіоні та, імовірно, в усьому світі.', 'Катманду - Лукла - Намче-Базар - базовый лагерь Эвереста - штурм Эвереста (8 848м) - базовый лагерь - Намче Базар - Лукла - Катманду', 'Катманду', 'Катманду', 'https://mountainguide.ru/wp-content/uploads/2019/01/Everest.jpg', NULL, '2020-12-22 17:17:13'),
(5, 'Монблан', 'Франція', 4808, 'medium', 'Монблан вважається батьківщиною альпінізму. Саме на цю вершину 8 серпня далекого 1786 року зійшли двоє відважних сміливців. З цієї дати починається історія альпінізму, який почав формуватися на території сучасного Шамоні.\r\n    Монблан - найвища точка Західної Європи. Є кілька варіацій програми сходження на найвищі вершини континентів: одні включають Монблан, інші – Ельбрус. Щоб не було сумнівів, варто зійти на обидві гори.', 'Женева - Шамоні - льодовик Mer de Glace - притулок Tete Rousse (3167м) - притулок Gouter (3817м) - Сходження на Монблан (4810м) – Шамоні', 'Женева', 'Шамоні', 'https://wikiway.com/upload/hl-photo/06b/2ce/monblan_156.jpg', NULL, NULL),
(6, 'Ельбрус', 'Росія', 5642, 'medium', 'Ельбрус - мрія багатьох альпіністів і мандрівників. Далеко не кожен зможе похвалитися сходженням на найвищу вершину Європи. Наш похід розділений на дві частини: підготовча, яка проходить по регіону Приельбрусся і дає можливість організму акліматизуватися до великих висот, і, власне, саме сходження на Ельбрус.', 'П\'ятигорськ - Верхній Баксан - долина Силтрансу - озеро Силтранкель - перевал Силтран (3440 м) - Верхній Баксан - Азау - Притулок 11 - Скелі Пастухова - Ельбрус (5642 м) - Азау - П\'ятигорськ', 'П\'ятигорськ', 'П\'ятигорськ', 'https://edem-v-gosti.ru/upload/iblock/b25/elbrus1.jpg', NULL, NULL),
(7, 'Пік Леніна', 'Таджикистан', 7134, 'hard', 'Сходження на пік Леніна (7134 м) в 2020 році – це ваш шанс потрапити на сьомий рівень планети і випробувати себе в дійсно високих горах. \r\n\r\nСходження проводимо за класичним маршрутом з північного боку. Технічно шлях не дуже складний, прирівнюється до другої категорії. Але не варто забувати про висоту. На 7000 тисячах буде дихатись дуже важко і, щоб зробити один крок, потрібно докласти чимало зусиль. А ще буде холодно і вітряно. Хороша фізична форма, завзятість, відповідне спорядження та удача - те, без чого не обійтися бажаючим піднятися на Леніна.', 'Ош – Базовий Табір (3600) – пер. Мандрівників (4200) – пік Петровського (4700) – Табір 1 (4400) – Табір 2 (5300) – Табір 3 (6100) – Табір 1 (4400) – Базовий Табір – Табір 1 (3600) – Табір 2 (4400) – Табір 3 (6100) – пік Леніна (7134) – Табір 3 – Табір 1 – Базовий Табір – Ош', 'Ош', 'Ош', 'https://mountainguide.ru/wp-content/uploads/2019/01/climb-peak-lenin-2012-003-1.jpg', NULL, NULL),
(8, 'Говерла', 'Україна', 2061, 'easy', 'Гове́рла — найвища вершина Українських Карпат і найвища точка України, висота якої складає 2061 м над рівнем моря. Розміщена в гірському масиві Чорногора, на межі Яремчанської міськради Івано–Франківської області та Рахівського району Закарпатської області за 17 кілометрів від кордону з Румунією.', 'Маршрут на Говерлу із Заросляка\r\n\r\nВід спортбази \"Заросляк\" на вершину Говерли беруть початок два маршрути. Вони мають синє та зелене маркування. Ще одне маркування жовтого кольору веде на середину Чорногірського хребта, до вершини Туркул та озера Несамовитого. Зелений маршрут на Говерлу довший, але більш пологий; синє маркування веде стрімкою стежкою \"в лоб\" на вершину. Щоб побачити більше, за гарної погоди рекомендуємо підійматися на вершину Говерли синім маршрутом, а спускатися - зеленим. Це збереже ваші коліна, адже за таким варіантом спуск буде не таким стрімким.', 'Заросляк', 'Заросляк', 'https://yaremche3000.files.wordpress.com/2015/07/00-goverla-zagalniy.jpg', NULL, '2020-12-23 05:52:29');

-- --------------------------------------------------------

--
-- Структура таблиці `trips`
--

CREATE TABLE `trips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trip_name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_id` int(11) NOT NULL,
  `guide_id` int(11) NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `trip_start` date NOT NULL,
  `trip_end` date NOT NULL,
  `price` int(11) NOT NULL,
  `image_url` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `trips`
--

INSERT INTO `trips` (`id`, `trip_name`, `tour_id`, `guide_id`, `description`, `trip_start`, `trip_end`, `price`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 'Сходження на Айленд пік із повною акліматизацією', 1, 1, 'Сходження на Айленд пік це вже не звичайний трекінг. На шляху до вершини на нас чекають сніжно-льодові поля, пересування в кішках з льодорубами по перилах, сходи через тріщини (можливо), а в кінці 150-200 метрів крутого зльоту і роботи з жумари. Таке сходження набагато цікавіше простого тупцювання і Айленд пік послужить вам відмінною підготовкою до наступних сходжень на більш високі і технічні вершини.', '2021-03-04', '2021-03-18', 4300, 'https://kuluarpohod.com/files/routes/middle/1497876374_78.jpg', NULL, NULL),
(2, 'Сходження на Айленд пік', 1, 3, 'Сходження на Айленд пік це вже не звичайний трекінг. На шляху до вершини на нас чекають сніжно-льодові поля, пересування в кішках з льодорубами по перилах, сходи через тріщини (можливо), а в кінці 150-200 метрів крутого зльоту і роботи з жумари. Таке сходження набагато цікавіше простого тупцювання і Айленд пік послужить вам відмінною підготовкою до наступних сходжень на більш високі і технічні вершини.', '2021-03-04', '2021-03-25', 3000, 'https://aktur.com.ua/cache/14d37d8214478f22003a0faf6c51919d.png', NULL, NULL),
(3, 'Сходження на Еверест', 2, 1, 'ходження на Еверест 8848 м вперше було здійснено з Непалу в далекому 1953 році сером Едмундом Хілларі і шерпом Тенцингом Норгеєм. Це була дійсно видатна подія світового масштабу.\r\n\r\nЗ тих пір багато чого змінилося, нові технології, вміння та знання зробили сходження на Еверест більш доступним і безпечним. Загальна кількість альпіністів, які піднялися на Еверест з початку його історії: 9044 осіб, без урахування повторних сходжень (станом на 2018 рік, з них майже половина - 4724 шерпи) і щорічно в успішний сезон піднімається ще близько 600 осіб (з них половина - шерпи).', '2021-03-31', '2021-05-28', 75000, 'https://drugoy.com.ua/assets/kcfinder/upload/images/1.1.jpg', NULL, NULL),
(4, 'Сходження на Говерлу', 8, 3, 'Наші Карпати – гори відносно невисокі, всього 7 вершин, висота яких перевищує 2000 м: Говерла (2061 м), Бребенескул (2032 м), Піп Іван (2028 м), Петрос (2020 м), Гутин Томнатик (2017 м), Ребра (2001м) і Менчул (1 998 м) – якій до двотисячної відмітки не вистачило лише 2-х метрів. Тож підкорити їх можуть не лише альпіністи з досвідом, а й навіть школярі. Похід на Говерлу : https://vidviday.ua/blog/pidiom-na-hoverlu/', '2021-05-14', '2021-05-14', 100, 'https://hotel-fomich.com.ua/ua/wp-content/uploads/na_Goverlu_2.jpg', NULL, NULL),
(5, 'Сходження на Ельбрус', 6, 1, 'Ельбрус - мрія багатьох альпіністів і мандрівників. Далеко не кожен зможе похвалитися сходженням на найвищу вершину Європи. Наш похід розділений на дві частини: підготовча, яка проходить по регіону Приельбрусся і дає можливість організму акліматизуватися до великих висот, і, власне, саме сходження на Ельбрус.\r\n\r\nЦе маршрут сходження з півдня на західну вершину. Якщо ви новачок у великих горах, то рекомендуємо обрати саме цей маршрут.', '2021-05-12', '2021-05-19', 5000, 'https://kuluarpohod.com/files/image/marshruty/elbsever/elbsever-5___big.jpg', NULL, NULL),
(6, 'Сходження на Монблан', 5, 1, 'Легкість і швидкість добирання, невелика тривалість, хороша інфраструктура, помірна складність роблять сходження на Монблан однією з кращих програм для зайнятих любителів гір.', '2021-07-01', '2021-07-22', 4000, 'https://kuluarpohod.com/files/routes/middle/1544739458_3.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `workers`
--

CREATE TABLE `workers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posada` enum('guide','turoperator','turagent','derector','sisadmin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialization` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `phone` int(11) NOT NULL,
  `mail` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp` double NOT NULL,
  `image_url` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `workers`
--

INSERT INTO `workers` (`id`, `first_name`, `last_name`, `posada`, `description`, `details`, `specialization`, `birth`, `phone`, `mail`, `exp`, `image_url`, `instagram`, `facebook`, `created_at`, `updated_at`) VALUES
(1, 'Боровик', 'Дмитро', 'guide', 'Великі цілі - великі пригоди', 'На даний момент (зима 2019) в моєму активі три з найвищих вершин - Еверест (8848 м), Чо-Ойю (8201 м), Манаслу (8167 м).\r\n\r\nНавесні 2020 року Кулуар планує експедицію Еверест + Лхоцзе, де Микита Балабанов буде лідером для учасників на Еверест, я ж піду на Лхоцзе (8516 м).', 'Сходження на 8000, нові маршрути', '2002-05-08', 675495545, 'db07757@gmail.com', 2, 'https://image.flaticon.com/icons/png/512/912/912214.png', 'https://www.instagram.com/accounts/login/', 'https://www.facebook.com/', NULL, NULL),
(3, 'Петренко', 'Василь', 'guide', 'В горах я намагаюся проводити багато часу і з користю, тому що відчуваю себе тут комфортно. Сподіваюся, люди, які будуть зі мною, зможуть відчути те ж саме :).', 'Золотий льодоруб за першопроходження вершини Талуннг (7 349м), чемпіон світу в висотному класі за версією ЕАМА, понад 100 пройдених вершин різної висоти і складності', 'Сходження, технічні маршрути, Непал, Альпи, Азія Коротко про себе:', '1995-08-06', 674325598, 'penrenko@ukr.net', 5, 'https://image.flaticon.com/icons/png/512/912/912214.png', 'https://www.instagram.com/accounts/login/', 'https://www.facebook.com/', NULL, NULL),
(4, 'Герасимчук', 'Анна', 'turagent', 'Рух - життя, або навпаки, але суті це не змінює)', 'Туристичний агент — організація, що займається продажем сформованих туроператором турів. Турагент, бронюючи тури у туроператора, реалізує туристичний продукт покупцеві, або виступає посередником між туристом і туроператором за комісійну винагороду, що надається туроператором.', 'Створення та просування прекрасних турів для вас', '2000-05-15', 977130613, 'annagerasimchuk@gmail.com', 2, 'https://image.flaticon.com/icons/png/512/554/554857.png', 'https://www.instagram.com/accounts/login/', 'https://www.facebook.com/', NULL, NULL);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Індекси таблиці `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `codes`
--
ALTER TABLE `codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT для таблиці `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблиці `tours`
--
ALTER TABLE `tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблиці `trips`
--
ALTER TABLE `trips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `workers`
--
ALTER TABLE `workers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
