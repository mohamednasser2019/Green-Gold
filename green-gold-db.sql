-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2019 at 01:20 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `green-gold-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_img`, `created_by`, `created_at`, `updated_at`) VALUES
(2, 'أسمدة', '', 1, '2016-09-20 21:08:07', '0000-00-00 00:00:00'),
(3, 'منظمات نمو', 'public/uploads/1475284477.png', 1, '2016-09-21 05:19:36', '2016-10-01 06:14:37'),
(4, 'معالج ملوحة', '', 1, '2016-09-21 10:23:27', '0000-00-00 00:00:00'),
(5, 'مبيدات فطرية', '', 1, '2016-09-21 10:30:13', '0000-00-00 00:00:00'),
(6, 'مبيدات حشرية', '', 1, '2016-09-21 10:35:25', '0000-00-00 00:00:00'),
(7, 'مبيدات نيماتودية', 'public/uploads/1491843637.jpg', 1, '2017-04-10 22:00:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `configrations`
--

CREATE TABLE `configrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `intro_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointment_intro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `working_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_12_18_072543_create_configrations_table', 2),
(6, '2019_11_02_101027_create_categories_table', 3),
(7, '2019_12_27_132503_create_products_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `benefits_of_use` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usage_rates` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `packaging` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutProduct` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_img`, `benefits_of_use`, `usage_rates`, `packaging`, `aboutProduct`, `created_by`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'فيراميست', 'img_1577663983.jpg', '•	علاج سريع لاعراض نقص العناصر الصغرى فى النبات.•	تحسين مواصفات الثمار من اللون والحجم. •	يساعد النبات على التغلب على جميع ظروف الإجهاد البيئى•	غنى بمحتواه من مجموعة فيتامينات بى والتوك', 'اشجار الفاكهة:	1 جرام / لتر	            2 مرات الخـضـروات:		0.5 جرام / لتر	            2 مرات النباتات الطبية والعطرية:	0.5 جرام / لتر	            2 مراتالمحاصيل الصناعية:البطاطس – ال', '•	200 جرام•	1 كجم', 'مخلوط كميائي من العناصر الصغرى تامة الذوبان فى الماء غنى بمحتواه من فيتامينات بى والتوكوفيرول والميثيونين.المكونات   (w/w):•	حديد:				5.4%•	زنك:				3.6%•	منجنيز:			5%•	نحاس:			1%', 1, 2, '2016-09-20 23:55:33', '2019-12-29 21:59:43'),
(2, 'نـوبـون بلس', 'img_1577664002.jpg', '- نوبون بلس  سماد متوزارن كامل الذوبان  فى الماء غنى بمحتواه من العناصر الصغرى.- نوبون بلس  سماد حامضى التأثير  يصلح لظروف المياه و التربة القلوية (الملوحة). - نوبون بلس   خالى من الكلور', 'اشجار الفاكهة:	2.5 جرام / لتر  2 – 3 مرات الخـضـروات:		2 جرام / لتر	    2 مرات النباتات الطبية والعطرية:	2 جرام / لتر	            2 مرات المحاصيل الصناعية:البطاطس – الفول السودانى –', '•	500 جرام', 'سماد تام الذوبان حامضى 20-19-19TEالمكونات   (w/w):•	 النيتروجين الكلى:  	20%•	الفوسفور الكلى:	19%•	البوتاسيوم الكلى:	19%•	بورون:		         0.01%•	نحاس مخلبى:		 0.002%•	حديد', 1, 3, '2016-09-21 01:06:21', '2019-12-29 22:03:05'),
(3, 'بوتاسيوم سترات 55%', 'img_1577664023.jpg', '•	علاج سريع لنقص عنصر البوتاسيوم فى النبات.•	تثبيت الازهار والعقد وزيادة حجم الثمار.•	تحسين الصفات التخزينية والتسويقية للمحصول.•	زيادة نسبة المواد الصلبة فى المحاصيل الدرنية ومحتوى الس', 'اشجار الفاكهة:	2 جرام / لتر	            2 مرات الخـضـروات:		1.5 جرام / لتر	            2 مرات النباتات الطبية والعطرية:	1 جرام / لتر	            2 مرات المحاصيل الصناعية:البطاطس – الف', '•  1 كجم• 10 كجم• 20 كجم', 'سماد سريع الذوبان يحتوى على نسبة عالية من البوتاسيوم فى صورة سترات وهى اسرع وافضل صور البوتاسيوم فى الأمتصاص والفاعلية داخل النبات.المكونات   (w/w):•	اكسيد بوتاسيوم:		55%', 1, 2, '2016-09-21 01:20:27', '2019-12-29 22:00:23'),
(4, 'ووترسيف', 'img_1577664048.jpg', '•	ووتــــــــــــــــــــــــــرسيف تركيبه فريدة تم تصميمها بأحدث التكنولوجيا لرفع رقم البركس فى النبات والاستفادة من الماء الحر الموجود فى الخلية النباتية ورفع نسبة ثانى اكسيد الكربون فى الا', 'اشجار الفاكهة:	2.5 جرام / لتر	            3 – 4 مرات الخـضـروات:		2-2.5 جرام / لتر	            3 – 4 مرات النباتات الطبية والعطرية:	2- 2.5 جرام / لتر	            3 – 4 مرات المحاصيل الص', '•	400 جرام', '•	ســـمـــــــاد ثانى اكسيد الكربون•	 الحماية الأكيدة ضد البلزمة والصقيع•	كالسيوم ماغنسيوم كـــــربـــــــونــــــــى فى صورة ميكرونية •	 التغلب على مشاكل نقص ثانى اكسيد الكربون فى الخل', 1, 2, '2016-09-21 01:28:01', '2019-12-29 22:00:48'),
(5, 'بي كي بلس ', 'public/uploads/1474411014.jpg', '•	مركب قوى غنى بالفسفور والبوتاسيوم فى صورة (بوتاسيوم فوسفيت) يعمل على تقوية جهاز المناعة فى النبات ضد مسببات الأمراض كما يساعد بقوة فى عملية الأزهار وتكوين الفروع الجانبية.\r\n•	تسهيل عملية عم', 'اشجار الفاكهة:	3مل / لتر ماء       	2 – 3 مرات \r\nالخـضـروات:		2.5 مل / لتر ماء       	2 – 3 مرات \r\nالنباتات الطبية والعطرية:	2.5 مل / لتر ماء       	   2 مرات \r\nالمحاصيل الصناعية:\r\nالبطاطس – ', '•	1 لتر', '•	محتوى عالى من الفسفور والبوتاسيوم فى صورة فوسفيت بالاضافة إلى الأحماض العضوية.\r\n\r\nالمكونات   (w/w):\r\n•	فوسفور	:			30%\r\n•	اكسيد البوتاسيوم:		20%', 1, 2, '2016-09-21 01:36:54', '0000-00-00 00:00:00'),
(6, 'دوجـلاس ', 'public/uploads/1475348067.jpg', '•	سماد متخصص يحتوى على البوتاسيوم والكبريت فى صورة بولى سلفيد ذو ذائبية أعلى من مصادر البوتاسيوم الأخرى التى تحتوى على عنصر الكبريت.\r\n•	صورة البولى سلفيد النشطة تعمل على الوقاية ومقاومة الأمر', 'اشجار الفاكهة:	4 مل / لتر ماء       	2 مرات \r\nالخـضـروات:		2.5 مل / لتر ماء       	2 مرات \r\nالنباتات الطبية والعطرية:	2  مل / لتر ماء       	2 مرات \r\nالمحاصيل الصناعية:\r\nالبطاطس – الفول السود', '•	1 لتر', '•	بوتاسيوم فى صورة ميكرونية بولي ىسلفيد سريعة الذوبان.\r\n•	مبيد فطرى – مبيد حشرى – مبيد أكاروسى - مغذى\r\n\r\nالمكونات   (w/w):\r\n•	أكسيد البوتاسيوم:		30%\r\n•	كبريت:				40%', 1, 2, '2016-09-21 01:49:03', '2016-10-01 21:54:27'),
(7, 'فوستر V', 'public/uploads/1475347903.jpg', '•	يمد النبات بإحتياجاته  الكاملة من البوتاسيوم فى صورة سهلة الامتصاص.\r\n•	تثبيت الازهار والعقد وزيادة حجم الثمار.\r\n•	تحسين الصفات التخزينية والتسويقية للمحصول.\r\n•	زيادة نسبة المواد الصلبة فى ا', 'اشجار الفاكهة:	3مل / لتر ماء       	2 مرات \r\nالخـضـروات:		2.5 مل / لتر ماء       	2 مرات \r\nالنباتات الطبية والعطرية:	2.5 مل / لتر ماء       	2 مرات \r\nالمحاصيل الصناعية:\r\nالبطاطس – الفول السود', '•	1 لتر', 'مركب يحتوى على نسبة عالية من البوتاسيوم فى صورة سترات وهى اسرع وافضل صور البوتاسيوم فى الأمتصاص والفاعلية داخل النبات.\r\n\r\nالمكونات   (w/w):\r\n•	اكسيد بوتاسيوم:		36.5%', 1, 2, '2016-09-21 01:54:10', '2016-10-01 21:51:43'),
(8, ' فيجرو فيرتيل  ', 'public/uploads/1475348765.jpg', '•	يحقق نمو خضرى قوى ويثيت عقد الثمار ويعجل النضج ويزيد المحصول.\r\n•	يساعد على بناء الكلورفيل ويعمل على امداد النبات بالطاقة.\r\n•	يمد النبات بإحتياجاته  الكاملة من المغذيات الصغرى فى صورة سهلة ا', 'اشجار الفاكهة:	3مل / لتر ماء       	2 – 3 مرات \r\nالخـضـروات:		2.5 مل / لتر ماء       	2 – 3 مرات \r\nالنباتات الطبية والعطرية:	2 مل / لتر ماء       	2 – 3 مرات \r\nالمحاصيل الصناعية:\r\nالبطاطس – ا', '•	500 مل\r\n•	1 لتر', '•	مكمل غذائي من العناصر والمستخلصات الأمينية  والفيتامينات النباتية\r\n\r\nالمكونات   (w/w):\r\n•	اكسيد بوتاسيوم:	10%\r\n•	حديد مخلبى:		3%\r\n•	زنك مخلبى:		        2%\r\n•	منجنيز مخلبى:		2%\r\n•	نحاس  مخلب', 1, 2, '2016-09-21 02:01:51', '2016-10-01 22:06:05'),
(9, 'فيجرو نيتروجين   ', 'public/uploads/1475347838.jpg', '•	يحقق نمو خضرى قوى. \r\n•	يمد النبات بإحتياجاته  الكاملة فى صورة سهلة الامتصاص.\r\n•	يساعد على بناء الكلورفيل ويعمل على امداد النبات بالطاقة.\r\n•	يزيد من نسبة تثبيت العقد فى الثمار. \r\n•	تبكير الن', 'اشجار الفاكهة:	3مل / لتر ماء       	2 – 3 مرات \r\nالخـضـروات:		2.5 مل / لتر ماء       	2 – 3 مرات \r\nالنباتات الطبية والعطرية:	2.5 مل / لتر ماء       	2 – 3 مرات \r\nالمحاصيل الصناعية:\r\nالبطاطس –', '•	1 لتر', '•	سماد نيتروجينى سائل من مستخلصات نباتية وهيومية\r\n•	مكمل غذائي ومنشط عام ومضاد إجهادات بيئية\r\n\r\nالمكونات   (w/w):\r\n•	نيتروجين الكلي: 28 %\r\n•	نيتروجين (امينى):	14%\r\n•	نيتروجين (امونيومى):	7%\r\n', 1, 2, '2016-09-21 02:09:36', '2016-10-01 21:50:38'),
(10, 'كاليومين بلس', 'public/uploads/1475347685.jpg', '•	يحقق نمو خضرى قوى. \r\n•	علاج اعراض نقص الكالسيوم.\r\n•	يمد النبات بإحتياجاته  الكاملة فى صورة سهلة الامتصاص.\r\n•	يساعد على بناء الكلورفيل ويعمل على امداد النبات بالطاقة.\r\n•	زيادة حيوية حبوب الل', 'اشجار الفاكهة:	2 مل / لتر ماء       	2 مرات \r\nالخـضـروات:		1  مل / لتر ماء       	2 مرات \r\nالنباتات الطبية والعطرية:	1 مل / لتر ماء       	2 مرات \r\nالمحاصيل الصناعية:\r\nالبطاطس – الفول السودان', '•	500 مل', '•	التغذية المثلى والوقاية من مشاكل عدم الاتزان فى مستويات العناصر الغذائية داخل الخلايا النباتية خاصة الكالسيوم والماغنسيوم.\r\n•	مفهوم جديد فى طرق التخليب وخلط العناصر المتضادة بدون حدوث تثبيط', 1, 2, '2016-09-21 02:20:47', '2016-10-01 21:48:05'),
(11, 'سي باور', 'public/uploads/1514482968.png', '•	يحفز انقسام الخلايا ويزيد من نمو المجموع الجذرى والخضرى.\r\n•	يحفز تكوين الكلورفيل داخل خلايا مما يزيد من كفاءة عملية التمثيل الغذائى.\r\n•	يساعد على زيادة محتوى السكريات فى الثمار.\r\n•	كسر سكون', 'اشجار الفاكهة:	2 مل / لتر ماء       	3 – 5 مرات \r\nالخـضـروات:		1.5 مل / لتر ماء       	3 – 4 مرات \r\nالنباتات الطبية والعطرية:	1.5 مل / لتر ماء       	3 – 4 مرات \r\nالمحاصيل الصناعية:\r\nالبطاطس ', '•	1 لتر', '•	منظم ومحفز نمو طبيعى غنى بمنظمى النمو السيتوكينين والأكسين \r\n•	مستخلص طحالب بحرية مدعم بالعناصر الصغرى الهامة لمراحل النمو والتزهير والعقد والأثمار.\r\n\r\nالمكونات   (w/w):\r\n•	سيتوكينين	:		150', 1, 2, '2016-09-21 02:36:41', '2017-12-28 21:42:48'),
(12, 'انتي كوول', 'public/uploads/1514484075.png', '•	تنشيط العمليات الفسيولوجية داخل النبات ممايؤدى إلى تنشيط النمو.\r\n•	يساعد فى مرحلتى التزهير والعقد حيث يعمل على تثبيت الازهار ومنع تساقط الثمار.\r\n•	يعمل على تفيز الانقسام الخلوى مما يزيد من ', 'اشجار الفاكهة:	5 مل / لتر ماء       	2 – 3 مرات \r\nالخـضـروات:		3 مل / لتر ماء       	2 – 3 مرات \r\nالنباتات الطبية والعطرية:	3 مل / لتر ماء       	2 – 3 مرات \r\nالمحاصيل الصناعية:\r\nالبطاطس – ال', '•	1 لتر', '•	محفز نمو يعمل على دفع النبات للتزهير وزيادة حجم الثمار\r\n\r\nالمكونات   (w/w):\r\n•	طحالب بحرية:		8%\r\n•	احماض امينية:		5%\r\n•	نيتروجين:			8.5%\r\n•	فوسفور:			3%\r\n•	اكسيد بوتاسيوم:	20%\r\n•	كالسيوم:		', 1, 2, '2016-09-21 02:40:12', '2017-12-28 22:01:16'),
(14, 'ماجيك باور  V ', 'public/uploads/1475347636.jpg', '•	سرعة تكوين الجذور الجديدة بعد الشتل مباشرة مما يعمل على تقليل الفترة الزمنية للصدمة الحادثة للشتلات فى مرحلة نقلها وزراعتها فى الارض المستديمة ويقلل من فرص اصابة الشتلات بأعفان الجذور.\r\n•	ي', 'اشجار الفاكهة:	1 لتر / الفدان (حقن)	2 مرات \r\nالخـضـروات:		1 لتر / الفدان (حقن)        2 مرات \r\nالنباتات الطبية والعطرية:	1 لتر / الفدان (حقن)        2 مرات \r\nالمحاصيل الصناعية:\r\nالبطاطس – الف', '•	500  مل', '•	مركب متخصص كبادئ ومحفز ومنشط لنمو المجموع الجذرى والورقى عن طريق تحفيز انقسام الخلايا وبدء تكوين الجذور الجديدة.\r\n\r\nالمكونات   (w/w):\r\n•	اندول بيوتريك اسيد:		5000 جزء فى المليون.\r\n•	طحالب ب', 1, 2, '2016-09-21 02:48:00', '2016-10-01 21:47:16'),
(15, 'هـيــــمو  R ', 'public/uploads/1475347527.jpg', '•	تنشيط نمو المجموع الجذرى والمجموع الخضرى.\r\n•	تحسين تهيوة التربة وقوام التربة وزيادة نفاذية المياه مما يسهل من وصول الأسمدة إلى الجذور.\r\n•	زيادة التبادل الكتيونى لحبيبات التربة زيادة قدرتها ', 'اشجار الفاكهة:	3 لتر / الفدان (حقن) 	4 – 5 مرات \r\nالخـضـروات:		2.5 لتر / الفدان (حقن) 	3 – 4 مرات \r\nالنباتات الطبية والعطرية:	2.5 لتر / الفدان (حقن) 	3 – 4 مرات \r\nالمحاصيل الصناعية:\r\nالبطاطس ', '•	5 لتر', 'هيومات البوتاسيوم\r\n\r\n منشط عام ومضاد اجهادات بيئية\r\n\r\nالمكونات   (w/w):\r\n•	أكسيد البوتاسيوم الذائب: 			 8%\r\n•	نيتروجين:				6%\r\n•	هيوميك أسيد + فولفيك أسيد: 		 65%', 1, 2, '2016-09-21 03:04:45', '2016-10-01 21:45:27'),
(16, ' هـيـــــوم K ', 'public/uploads/1474416499.jpg', '•	هـيــــــــــــــــــــوم K  يحتوى على هيوميك وفالفيك أسيد فى صورة  نشطة تختزل بصورة فعالة وببطء إلى مركبات هيوميفايد مما يزيد من حموضة الوسط وسهولة استبدال كاتيونات الصوديوم.\r\n•	هـيـــــــ', 'اشجار الفاكهة:	3 لتر / الفدان (حقن) 	2 – 3 مرات \r\nالخـضـروات:		2.5 لتر / الفدان (حقن) 	2 – 3 مرات \r\nالنباتات الطبية والعطرية:	2.5 لتر / الفدان (حقن) 	2 – 3 مرات \r\nالمحاصيل الصناعية:\r\nالبطاطس ', '•	1 لتر\r\n•	5 لتر\r\n', 'هيومات الليونارديت\r\n\r\n منشط عام ومضاد اجهادات بيئية\r\n\r\nالمكونات   (w/w):\r\n•	أكسيد البوتاسيوم الذائب:  12%\r\n•	هيوميك أسيد + فولفيك أسيد:  85%', 1, 2, '2016-09-21 03:08:19', '0000-00-00 00:00:00'),
(17, 'المخصب 101-3G  ', 'public/uploads/1474417090.jpg', '•	المركب يحتوى على توليفة غذائية متعددة ومتكاملة مما يتيح للنبات اكبر قدر من الغذاء المتوازن الامر الذي يزيد من معدل النمو.\r\n•	يحسن من القدرة الانتاجية للتربة وتخصيبها عن طريق زيادة نسبة تحلل', 'اشجار الفاكهة:	3 لتر / الفدان (حقن) 	3 – 4 مرات \r\nالخـضـروات:		2.5 لتر / الفدان (حقن) 	2 – 3 مرات \r\nالنباتات الطبية والعطرية:	2.5 لتر / الفدان (حقن) 	2 – 3 مرات \r\nالمحاصيل الصناعية:\r\nالبطاطس ', '•	20 لتر', 'مخصب حيوى طبيعى ورافع مناعة.\r\n\r\nمنظومة عالية الاتزان تحتوى على المواد العضوية بصورة قصيرة السلسلة قابلة للامتصاص بسهولة.\r\nمخزون من العناصر الغذائية الكبرى والصغرى والنادرة والاحماض الامينية و', 1, 2, '2016-09-21 03:18:10', '0000-00-00 00:00:00'),
(18, 'مـــــــــاربيلا ', 'public/uploads/1474435384.png', '•	ماربيلا تعزز التمايز الخلوي ، (انقسام ونمو الخلايا).\r\n•	ماربيلا  تشجع تشكيل براعم الزهرية.\r\n•	ماربيلا  تزيد تكوين المجموعات الزهرية.\r\n•	ماربيلا  تشجع تثبيت وتحجيم الثمار.\r\n•	ماربيلا تأخير ع', 'اشجار الفاكهة:	تزهير-خضرى:       5  مل / 100لتر\r\nتحجيم:                 10 مل / 100لتر\r\nالخـضـروات:		تزهير-خضرى:       5  مل / 100لتر\r\nتحجيم:                 10 مل / 100لتر\r\nالنباتات الطبية و', '•	100 مل', 'منظم نمو لتنشيط مستويات السيتوكينين فى النبات \r\nتقنية السيتوبلكس \r\n\r\nالمكونات   (w/w):\r\nسيتوكينين:    10%', 1, 3, '2016-09-21 08:23:05', '0000-00-00 00:00:00'),
(19, 'KAPRI-CAL ', 'public/uploads/1474435776.jpg', '•	كبريكال يحتوي على أكثر من 11000 جزء في المليون من الكالسيوم القابلة للذوبان.\r\n•	كبريكال يحتوى على الكبريت فى صورة  ميكرونية نشطة تتأكسد بصورة فعالة وببطء إلى حامض سلفوريك مما يزيد من حموضة ', 'اشجار الفاكهة:	2.5 -5 لتر / الفدان	4 – 5 مرات \r\nالخـضـروات:		2.5 -5 لتر / الفدان	3 – 4 مرات \r\nالنباتات الطبية والعطرية:	2.5 -5 لتر / الفدان	3 – 4 مرات \r\nالمحاصيل الصناعية:\r\nالبطاطس – الفول ال', '5 لتر', 'كالسيوم مكبرت فى صورة ميكرونية سائلة سريعة الذوبان ،\r\nللمساعدة على تقليل ملوحة التربة (القلوية) وتحسين كفاءة الأسمدة المعدنية والمخلبيات ومطهر لمنطقة الجذور\r\n\r\nالمكونات   (w/w):\r\n•	 الكالسيوم', 1, 4, '2016-09-21 08:29:36', '0000-00-00 00:00:00'),
(20, 'برافوس', 'public/uploads/1474436103.jpg', '•	مكافحة امراض اللفحة المبكرة والمتأخرة فى البطاطس والطماطم.\r\n•	مكافحة امراض البياض الزغبى فى الخضروات والفاكهة.\r\n•	مكافحة امراض تبقعات الأوراق فى الخضروات والفاكهة.\r\n•	مكافحة الأعفان فى الخض', 'اشجار الفاكهة:	2.5 مل / لتر ماء\r\nالخـضـروات:		2 مل / لتر ماء\r\nالنباتات الطبية والعطرية:	2 مل / لتر ماء\r\nالمحاصيل الصناعية:\r\nالبطاطس – الفول السودانى – بنجر السكر -  الحبوب - الزيوت	2 مل / لتر', '500 مل\r\n1  لتر\r\n', 'برافوس مبيد فطري مركز سائل ذو تأثير فعال للقضاء على العديد من الفطريات التى تسبب امراض اللفحة المبكرة والمتأخرة ، تبقعات الأوراق ، الأعفان ، البياض الزغبى ، الأصداء ، الأنثراكنوز على الخضروات', 1, 5, '2016-09-21 08:35:03', '0000-00-00 00:00:00'),
(21, 'باى كير ', 'public/uploads/1474436392.jpg', '•	مكافحة الحشرات القشریة.\r\n•	مكافحة البق الدقیقى والمن والتربس.\r\n•	مكافحة الأكاروسات والعناكب الحمراء والحلم.\r\n•	يحقق نمو خضرى قوى ويزيد المحصول.\r\n•	يحسن من صفات جودة المحصول ويزيد من عمر الت', 'اشجار الفاكهة:	1 لتر / 200 لتر ماء.\r\n\r\nالخـضـروات:		1 لتر / 200 لتر ماء.\r\n\r\nالنباتات الطبية والعطرية:	1 لتر / 200 لتر ماء.\r\n\r\nالمحاصيل الصناعية:\r\nالبطاطس – الفول السودانى – بنجر السكر -  الحب', '•	1 لتر', 'باى كير تركيبة فعالة من سيلكات البوتاسيوم الزيتية ذو تأثير فعال للقضاء على العديد من الحشرات والاكاروسات والعناكب الحمراء والحلم والتى تسبب اضراراً كبيرة على الخضروات والفاكهة والمحاصيل الحقل', 1, 6, '2016-09-21 08:39:52', '0000-00-00 00:00:00'),
(22, 'نيموزان', 'public/uploads/1491846900.png', '-	مكافحة نيماتودا تعقد الجذور فى الخضروات والفاكهة.\r\n-	مكافحة نيماتودا تقرح الجذور فى الخضروات والفاكهة.\r\n-	مكافحة نيماتودا الرمحية والخنجرية والمتحوصلة فى الخضروات والفاكهة.\r\n-	مكافحة أعفان ', 'اشجار الفاكهة:	2-3  ليتر / فدان  | عدد مرات التطبيق: 2-3 مرات | جميع مراحل النمو \r\n\r\nالخـضـروات:		2-3  ليتر / فدان  | عدد مرات التطبيق: 1 – 2 مرة | جميع مراحل النمو \r\n\r\nالنباتات الطبية والعطر', '900 مل\r\n\r\n', 'نـيمــوزان تركيبه فريدة تم تصميمها بأحدث التكنولوجيات العالمية للقضاء على العديد من أنواع النيماتودا والفطريات التى تسبب تعقدات وتقصفات وتقرحات وأعفان للجذور والدرنات والكورمات والذبول عن طري', 1, 7, '2017-04-10 20:55:00', '2017-04-10 21:07:06'),
(23, 'أبيدال sc300', 'public/uploads/1513341668.png', '•	أبيدال sc300 يتمتع بخصائص جهازية ثلاثية المفعول وقائية، علاجية، استئصالية، حيث ان الامتصاص السريع للـ باكلوبوترازول والـ مانديبروباميد وانتشاره ترانزلامينار Translaminar خلال الورقة، وجهازي', 'التفاح	(الجرب	: 250 سم3 / 200 ليتر ماء). \r\nالموالح	(أعفان الثمار:	250 سم3 / 200 ليتر ماء).\r\nالعنب	        (البياض الزغبى	250 سم3 / 200 ليتر ماء).\r\nالعنب  	(البياض الدقيقى	250 سم3 / 200 ليتر م', '250 مل', 'مبيد فطرى جهازي مزدوج الفعالية يحتوى على باكلوبوترازول، مادة فعالة منتمية إلى العائلة الكيمائية التريازول، ومانديبروباميد تنتمي إلى عائلة أميد كاربو كسيلك اسيد التي تعمل من خلال تثبيط التركيب', 1, 5, '2017-05-19 18:49:50', '2017-12-15 16:41:08'),
(25, 'انتي استريس', 'public/uploads/1513341751.png', '-	تحفيز نمو المجموع الجذرى والمجموع الخضرى خاصة فى مراحل كسر السكون ونقل الشتلات.\r\n-	زيادة مقاومة النبات لظروف الاجهاد البيئي.\r\n-	زيادة مناعة النبات ضد الأمراض.\r\n-	زيادة نسبة الأزهار والعقد.\r', 'اشجار الفاكهة:	الـــــــــرش:  1 كجم /  400  -  600  ليتر ماء    3 – 5 مرات خلال مراحل النمو\r\nالخـضـروات:		الـــــــــرش:  1 كجم /  400  -  600  ليتر ماء    3 – 4 مرات خلال مراحل النمو\r\nالنبا', '•  1 كجم\r\n• 10 كجم\r\n• 20 كجم', 'انتى استريس من الاسمدة سريعة الذوبان في الماء والمنتجة بالتحللات الأنزيمية الأمينو كاربون للطحالب والأعشاب البحرية  والمحاريات في صورة اسكويشى مارين فولفات  SQUASHY MARINE FULVATE الغنية بالب', 1, 2, '2017-08-23 20:18:28', '2017-12-15 16:42:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mohamed nasser', 'mimo_199592@yahoo.com', '2019-12-26 22:00:00', '$2y$10$MhZXXgZipzVXZn/wiH7lW.eR/aJb1PyjMBDqLwFdldeUMkofB6iBG', NULL, '2019-12-26 22:00:00', '2019-12-26 22:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_created_by_foreign` (`created_by`);

--
-- Indexes for table `configrations`
--
ALTER TABLE `configrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_created_by_foreign` (`created_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `configrations`
--
ALTER TABLE `configrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;