-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2022 at 01:30 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voices`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name_ge` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `text_ge` text NOT NULL,
  `text_en` text NOT NULL,
  `text_ru` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name_ge`, `name_en`, `name_ru`, `text_ge`, `text_en`, `text_ru`, `img`) VALUES
(1, 'ჩვენი მიმართულება', 'Our direction', 'Наше направление', 'ჩვენი მიმართულებებია: ვიდეოს გახმოვანება; აუდიო სარეკლამო რგოლის დამზადება; სარეკლამო ხმა, ქოლ ცენტრის ხმა, ავტომოპასუხისთვის ხმის ჩაწერა; ვოკალის ჩაწერა, ვოისოვერი, დუბლირება, რეკლამის ადაპტაცია, სახელმძღვანელოს გახმოვანება.', 'Our direction is the production of audio advertising (from developing an idea to a finished advertising product), the production of instrumental phonograms and arrangements, recording vocals and musical instruments. Production includes a complete cycle: recording, mixing and mastering.', 'Наше направление - это производство аудиорекламы (от разработки идеи до готового рекламного продукта), изготовление инструментальных фонограмм и аранжировок, запись вокала и музыкальных инструментов. Производство всключает в себя полный цикл: запись, сведение и мастеринг.', ''),
(2, 'ხმის ავტორების გამოცდილება', 'Experience of our speakers', 'Опыт наших дикторов', 'კომერციული რგოლის, ავტომოპასუხის, ვიდეო გახმოვანების, აუდიო წიგნისა თუ ინფორმაციული ტექსტის ჩასაწერად, აუცილებელია ცოდნა და გამოცდილება. ჩვენ გავაერთიანეთ ხმის ავტორები, რომლებიც სხვადასხვა სფეროში მოღვაწეობენ, მათ შორის, კინო, თეატრი და ტელე-რადიო ინდუსტრია. ყველა მათგანი ძლიერი პროფესიონალია. კონკრეტული ამოცანისთვის ჩვენ ვირჩევთ ყველაზე შესაფერისს ავტორს. ამიტომ, ჩვენთვის შეუსრულებელი ამოცანა არ არსებობს.', 'Recording of a commercial, IVR, video dubbing, audio book or some informational texts, many years of experience is essential. We have united the voice actors who work in various fields, such as cinema, theatre, TV and Radio industry. Each of them is a high-level professional. For each specific task, we select the most suitable voice actor. Hence, there are no impossible tasks for us.', 'Для каждого из направлений, будь то коммерческий ролик, телефонный автоответчик, видео озвучка, аудио книга либо \r\nинформационный текст, требуется многолетняя практика работы в данном направлении. Мы собрали дикторов из разных сфер деятельности, таких как кино, театр, теле-радио индустрия. Каждый из них силен в своем направлении. Для каждой конкретной задачи мы подбираем самого подходящего кандидата, поэтому в нашем деле невыполнимых задач нет.', 'about_experience.jpg'),
(3, 'ტექნიკური ბაზა', 'Technical equipment', 'Техническая база', '<ul><li>მიკროფონი: NADY TCM1050 TUBE</li>\r\n<li>მიკროფონი: Neumann U87Ai </li>\r\n<li>მიკროფონის დამუშავება: Focusrite Voice Master Pro </li>\r\n<li>ხმის ინტერფეისი: UAD APOLLO TWIN MKII QUAD </li>\r\n<li>მონიტორინგი: Adam Professional Audio A8X </li>\r\n<li>ყურსასმენი: AKG K271 </li>\r\n<li>ყურსასმენი: SENNHEISER HD280PRO </li>\r\n<li>პროგრამუrლი უზრუნველყოფა: Magix Samplitude PRO X4 Suite </li>\r\n<li>Midi კლავიში: Alesis QX49 </li>\r\n<li>პერსონალური კომპიუტერი: Pentium i7, RAM16GB, WIN64</li></ul>', '<ul><li>Mic: NADY TCM1050 TUBE</li>\r\n<li>Mic: Neumann U87Ai </li>\r\n<li>Mic Preamp.: Focusrite Voice Master Pro</li>\r\n<li>Sound Interface: UAD APOLLO TWIN MKII QUAD </li>\r\n<li>Monitoring: Adam Professional Audio A8X </li>\r\n<li>Headphone: AKG K271 </li>\r\n<li>Headphone: SENNHEISER HD280PRO </li>\r\n<li>Software: Magix Samplitude PRO X4 Suite</li>  \r\n<li>Midi Keyboard: Alesis QX49 </li>\r\n<li>PC: Pentium i7, RAM12GB, WIN64</li></ul>', '<ul><li>Микрофон: NADY TCM1050 TUBE</li> \r\n<li>Микрофон: Neumann U87Ai </li>\r\n<li>Обработка микрофона: Focusrite Voice Master Pro </li>\r\n<li>Звуковой интерфейс: UAD APOLLO TWIN MKII QUAD </li>\r\n<li>Мониторинг: Adam Professional Audio A8X </li>\r\n<li>Наушники: AKG K271 </li>\r\n<li>Наушники: SENNHEISER HD280PRO </li>\r\n<li>Програмное обеспечение: Magix Samplitude PRO X4 Suite </li>\r\n<li>Миди клавиатура: Alesis QX49 </li>\r\n<li>Персональный компьютер: Pentium i5, RAM16GB, WIN64</li></ul>', 'about_technical.png'),
(4, 'რატომ გვენდობიან?', 'Why trust us?', 'Почему нам доверяют?', 'ჩვენი კომპანიის მისიაა უმაღლესი ხარისხის აუდიო პროდუქციის შემუშავება და წარმოება. ჩვენი სერვისების არჩევისას, თქვენ ირჩევთ სიმშვიდეს და 100%-ით გარანტირებულ შედეგს. თქვენ დღე-ღამის ნებისმიერ მონაკვეთში შეგიძლიათ დაგვიკავშირდეთ ნომერზე (+995) 596 366 366. ინფორმაცია ჩვენი პარტნიორების შესახებ შეგიძლიათ იხილოთ \"ჩვენი პარტნიორების\" განყოფილებაში.', 'The mission of our company is to develop and manufacture the highest quality audio products. By choosing our services you choose patience and a 100% guaranteed result. You can reach us anytime - (+995) 596 366 366. You can find information about our partners below - \"our partners\".', 'Миссия нашей компании заключается в разработке и изготовлении максимально качественных аудиопродуктов. Выбирая наши услуги Вы выбираете спокойствие и 100% гарантированный результат. Мы всегда на связи : (+995) 596 366 366. Информацию о наших партнерах вы можете увидеть ниже, в отделе \"наши партнеры\".', 'about_trust.png'),
(5, 'რატომ გვირჩევენ?', 'Why choose us?', 'Почему нас выбирают?', 'მომხმარებლები გვირჩევენ პროფესიონალიზმის, პუნქტუალობისა და პასუხისმგებლობის მაღალი გრძნობისთვის. ჩვენი ძალისხმევის ყველაზე ძვირფასი ჯილდო მომხმარებლების კმაყოფილებაა - მადლობა თანამშრომლობისთვის!', 'Clients appreciate us for our professionalism, punctuality and responsibility. The most valuable reward for our efforts is the satisfaction of our clients -  thank you for your cooperation!', 'Клиенты ценят нас за профессионализм, порядочность и ответственность в работе. Следовательно, самая ценная награда за наши усилия - это слова благодарности наших клиентов - спасибо за сотрудничество!', 'about_choose.png');

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gender_id` int(11) NOT NULL,
  `sort` smallint(5) UNSIGNED DEFAULT '0',
  `created` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`id`, `name`, `image`, `gender_id`, `sort`, `created`) VALUES
(1, ' Abdolmadjid Masoomi', 'Abdolmadjid_Masoomi.jpg', 1, 56, '2022-05-18 15:55:37'),
(2, ' Aleksander Krapinevich', 'Aleksandr_Krapinevich.jpg', 1, 69, '2022-05-18 15:55:37'),
(3, ' Aleksandr Lapshin', 'Aleksandr_Lapshin.jpg', 1, 83, '2022-05-18 15:55:37'),
(4, ' Aleksei Lyapunov', 'Aleksei_Lyapunov.jpg', 1, 99, '2022-05-18 15:55:37'),
(5, ' Alex Ruadze', 'Alex Ruadze.jpg', 1, 111, '2022-05-18 15:55:37'),
(6, ' Amirkhan Mamedov', 'Amirkhan_ Mamedov.jpg', 1, 125, '2022-05-18 15:55:37'),
(7, ' Ana Matuashvili', 'Ana_Matuashvili_2.jpg', 2, 139, '2022-05-18 15:55:37'),
(8, ' Anar Rafikoglu', 'Anar_Rafigogli.jpg', 1, 8, '2022-05-18 15:55:37'),
(9, ' Andranik Hakobyan', 'Andranik_Hakobyan.jpg', 1, 21, '2022-05-18 15:55:37'),
(10, ' Andranik Hakobyan 2', 'Andranik_Hakobyan 2.jpg', 1, 34, '2022-05-18 15:55:37'),
(11, ' Andrei Lapshin', 'Andrei_Lapshin.JPG', 3, 47, '2022-05-18 15:55:37'),
(12, ' Andy Taylor', 'Andy_Taylor.jpg', 1, 3, '2022-05-18 15:55:37'),
(13, ' Ani Metreveli', 'Ani_Metreveli.jpg', 2, 74, '2022-05-18 15:55:37'),
(14, ' Anush Arakelyan', 'Anush_Arakelyan.jpg', 2, 88, '2022-05-18 15:55:37'),
(15, ' Araksya Melikyan', 'Araksya_Melikyan.jpg', 2, 102, '2022-05-18 15:55:37'),
(16, ' Aram Mikaelian', 'Aram_Mikaelian.jpg', 1, 116, '2022-05-18 15:55:37'),
(17, ' Aram Mikaeliani', 'Robert_Kartashyan.jpg', 1, 131, '2022-05-18 15:55:37'),
(18, ' Arsen Albaryan', 'Arsen_Albaryan.jpg', 1, 144, '2022-05-18 15:55:37'),
(19, ' Art Gegamyan', 'Art_Gegamyan.jpg', 1, 13, '2022-05-18 15:55:37'),
(20, ' Artur Stepanian', 'Artur_Stepanian.jpg', 1, 26, '2022-05-18 15:55:37'),
(21, ' Ashot Simonyan', 'Ashot_Simonyan.jpg', 1, 39, '2022-05-18 15:55:37'),
(22, ' Bacho Kvirtia', 'Bacho_Kvirtia.jpg', 1, 52, '2022-05-18 15:55:37'),
(23, ' Beka Medzmariashvili', 'Beka_Medzmariashvili.jpg', 1, 65, '2022-05-18 15:55:37'),
(24, ' Bryan Saulsbury', 'Bryan_Saulsbury.jpg', 1, 79, '2022-05-18 15:55:37'),
(25, ' Chad Gustafson', 'Chad_Gustafson.jpg', 1, 93, '2022-05-18 15:55:37'),
(26, ' Christi Bowen', 'Christi_Bowen.jpg', 2, 107, '2022-05-18 15:55:37'),
(27, ' Ciko Inauri', 'Ciko_Inauri.jpg', 2, 121, '2022-05-18 15:55:37'),
(28, ' Dachi Babunashvili', 'Dachi_Babunashvili.jpg', 1, 136, '2022-05-18 15:55:37'),
(29, ' Davit Beradze', 'Davit_Beradze.jpg', 1, 4, '2022-05-18 15:55:37'),
(30, ' Diko Chkhikvadze', 'Diko_Chkhikvadze_2.jpg', 2, 17, '2022-05-18 15:55:37'),
(31, ' Edgar Bagdasaryan', 'Edgar_Bagdasaryan.jpg', 1, 30, '2022-05-18 15:55:37'),
(32, ' Elena Ivasishina', 'Elena_Ivasishina.jpg', 2, 43, '2022-05-18 15:55:37'),
(33, ' Gaga Yachiuri', 'Gaga_Yachiuri.jpg', 1, 57, '2022-05-18 15:55:37'),
(34, ' Gale Cruz', 'Gale_Cruz.jpg', 2, 70, '2022-05-18 15:55:37'),
(35, ' Genrikh Petrosyan', 'Genrikh_Petrosyan.jpg', 1, 84, '2022-05-18 15:55:37'),
(36, ' Giorgi Archvadze', 'Giorgi_Archvadze_2.jpg', 1, 100, '2022-05-18 15:55:37'),
(37, ' Giorgi Gasviani', 'Giorgi_Gasviani.jpg', 1, 112, '2022-05-18 15:55:37'),
(38, ' Giorgi Kachakhidze', 'Giorgi_Kachakhidze.jpg', 1, 126, '2022-05-18 15:55:37'),
(39, ' Giorgi Kalandadze', 'Giorgi_Kalandadze.jpg', 1, 140, '2022-05-18 15:55:37'),
(40, ' Giorgi Keretchashvili', 'Giorgi_Keretchashvili.jpg', 1, 9, '2022-05-18 15:55:37'),
(41, ' Giorgi Merebashvili', 'Giorgi_Merebashvili.jpg', 1, 22, '2022-05-18 15:55:37'),
(42, ' Giorgi Zanguri', 'Giorgi_Zanguri.jpg', 1, 35, '2022-05-18 15:55:37'),
(43, ' Grigory Konkov', 'Grigory_Konkov.jpg', 1, 48, '2022-05-18 15:55:37'),
(44, ' Grigory Konkov 2', 'Grigory_Konkov_2.jpg', 1, 61, '2022-05-18 15:55:37'),
(45, ' Grigory Konkov 3', 'Grigory_Konkov_3.jpg', 1, 75, '2022-05-18 15:55:37'),
(46, ' Guram Kvrivishvili', 'Guram_Kvrivishvili.jpg', 1, 89, '2022-05-18 15:55:37'),
(47, ' Gvanca Abashidze', 'Gvantsa_Abashidze.jpg', 2, 103, '2022-05-18 15:55:37'),
(48, ' Gvanca Gadabadze', 'Gvantsa_Gadabadze.jpg', 2, 117, '2022-05-18 15:55:37'),
(49, ' Haykush Shakhbazyan', 'Haykush_Shakhbazyan.jpg', 1, 132, '2022-05-18 15:55:37'),
(50, ' Ia Mgebrishvili', 'IA.jpg', 2, 145, '2022-05-18 15:55:37'),
(51, ' Irakli Chkhikvadze', 'Irakli_Chkhikvadze.jpg', 1, 14, '2022-05-18 15:55:37'),
(52, ' Irakli Guniava', 'Irakli_Guniava.jpg', 1, 27, '2022-05-18 15:55:37'),
(53, ' Irakli Yurashvili', 'Irakli_Yurashvili.jpg', 1, 40, '2022-05-18 15:55:37'),
(54, ' Irina Mikeladze', 'Irina_Mikeladze.jpg', 2, 53, '2022-05-18 15:55:37'),
(55, ' Ivan Novoseltsev', 'Ivan_Novoseltsev.jpg', 1, 66, '2022-05-18 15:55:37'),
(56, ' Ivan Tairyan', 'Ivan_Tair.jpg', 1, 80, '2022-05-18 15:55:37'),
(57, ' Kakha Jokhadze', 'Kakha Jokhadze.jpg', 1, 94, '2022-05-18 15:55:37'),
(58, ' Kakha Kintsurashvili', 'Kakha_Kintsurashvili.jpg', 1, 108, '2022-05-18 15:55:37'),
(59, ' Keso Moiswrafishvili', 'Keso_Moiswrafishvili.jpg', 3, 122, '2022-05-18 15:55:37'),
(60, ' Kirean Phoenix Chantrey', 'Kirean_Phoenix_Chantrey.jpg', 1, 137, '2022-05-18 15:55:37'),
(61, ' Konstantin Cibulsky', 'Konstantin_Cibulsky.jpg', 1, 5, '2022-05-18 15:55:37'),
(62, ' Lasha Bakhtadze', 'Lasha_Bakhtadze.jpg', 1, 18, '2022-05-18 15:55:37'),
(63, ' Lasha Giorgi Papuashvili', 'Lasha_Giorgi_Papuashvili.jpg', 1, 31, '2022-05-18 15:55:37'),
(64, ' Lasha Moiswrafishvili', 'Lasha_Moiswrafishvili.jpg', 1, 44, '2022-05-18 15:55:37'),
(65, ' Lasha Murjikneli', 'Lasha Murjikneli.jpg', 1, 58, '2022-05-18 15:55:37'),
(66, ' Laura Beth', 'Laura_Beth_ Ezzel.jpg', 2, 71, '2022-05-18 15:55:37'),
(67, ' Levan Inasaridze', 'Levan_Inasaridze.jpg', 1, 85, '2022-05-18 15:55:37'),
(68, ' Levan Khochiashvili', 'Levan_Kochiashvili.jpg', 1, 101, '2022-05-18 15:55:37'),
(69, ' Lia Khachapuryan', 'Lia_Khachapuryan.jpg', 2, 113, '2022-05-18 15:55:37'),
(70, ' Lilit Tandilyan', 'Lilit_Tandilyan.jpg', 2, 127, '2022-05-18 15:55:37'),
(71, ' Liza Torosyan', 'Liza_Torosyan.jpg', 2, 141, '2022-05-18 15:55:37'),
(72, ' Luka Akhaladze', 'Luka_Akhaladze.jpg', 1, 10, '2022-05-18 15:55:37'),
(73, ' Lusine Muradyan', 'Lusine_Muradyan.jpg', 2, 23, '2022-05-18 15:55:37'),
(74, ' Maia Khmaladze', 'Maia_Khmaladze.jpg', 2, 36, '2022-05-18 15:55:37'),
(75, ' Maia Khmaladze 2', 'Maia_Khmaladze_2.jpg', 2, 49, '2022-05-18 15:55:37'),
(76, ' Maik Mixanzon ', 'Maik_Mixanzon.jpg', 1, 62, '2022-05-18 15:55:37'),
(77, ' Mariam Barnabishvili', 'Mariam_Barnabishvili.jpg', 2, 76, '2022-05-18 15:55:37'),
(78, ' Maridea Gelashvili', 'Maridea_Gelashvili.jpg', 2, 90, '2022-05-18 15:55:37'),
(79, ' Mark Stahr', 'Mark_Stahr.jpg', 1, 104, '2022-05-18 15:55:37'),
(80, ' Mark Stephenson', 'Mark_Stephenson.jpg', 1, 118, '2022-05-18 15:55:37'),
(81, ' Matvei Lapshin', 'Matvei_Lapshin.JPG', 3, 133, '2022-05-18 15:55:37'),
(82, ' Max Maslov', 'Max_Maslov.jpg', 1, 146, '2022-05-18 15:55:37'),
(83, ' Mikheil Diasamidze', 'Mikheil_Diasamidze.jpg', 1, 15, '2022-05-18 15:55:37'),
(84, ' Mikola Dzyudzya', 'Mikola_Dzyudzya.jpg', 1, 28, '2022-05-18 15:55:37'),
(85, ' Mirian Jejelava', 'Mirian_Jejelava.jpg', 1, 41, '2022-05-18 15:55:37'),
(86, ' Misha Abramishvili', 'Mikheil_Abramishvili.jpg', 1, 54, '2022-05-18 15:55:37'),
(87, ' Misha Romanovi', 'Misha_Romanovi.jpg', 1, 67, '2022-05-18 15:55:37'),
(88, ' Mishiko Gogilava', 'Mishiko_Gogilava.jpg', 1, 81, '2022-05-18 15:55:37'),
(89, ' Nanka Kokiashvili', 'Nanka_Kokiashvili.jpg', 2, 95, '2022-05-18 15:55:37'),
(90, ' Nargiz Podosyan', 'Nargiz_Podosyan.jpg', 2, 109, '2022-05-18 15:55:37'),
(91, ' Narine Sultanyan', 'Narine_Sultanyan.jpg', 2, 123, '2022-05-18 15:55:37'),
(92, ' Nata Asatiani', 'Nata_Asatiani.jpg', 2, 138, '2022-05-18 15:55:37'),
(93, ' Nata Kharashvili', 'Nata_Kharashvili.jpg', 2, 6, '2022-05-18 15:55:37'),
(94, ' Natalia Urbankaya', 'Natalia_Urbanskaya.jpg', 2, 19, '2022-05-18 15:55:37'),
(95, ' Natia Kharebashvili', 'Natia_Kharebashvili V4.jpg', 2, 32, '2022-05-18 15:55:37'),
(96, ' Nato Sulkhanishvili', 'Nato_Sulkhanishvili.jpg', 2, 45, '2022-05-18 15:55:37'),
(97, ' Nazeni Chorekchyan', 'Nazeni_Chorekchyan.jpg', 2, 59, '2022-05-18 15:55:37'),
(98, ' Nica Gverdtsiteli', 'Nica_Gverdtsiteli.jpg', 2, 72, '2022-05-18 15:55:37'),
(99, ' Nika Ramazashvili', 'Nika_Ramazashvili.jpg', 1, 86, '2022-05-18 15:55:37'),
(100, ' Nina Ninidze', 'Nina_Ninidze.jpg', 2, 97, '2022-05-18 15:55:37'),
(101, ' Nina Sarkisyan', 'Nina_Sarkisyan.jpg', 2, 114, '2022-05-18 15:55:37'),
(102, ' Nini Metreveli', 'Nini_Metreveli.jpg', 2, 129, '2022-05-18 15:55:37'),
(103, ' Nino Kikacheishvili', 'Nino_Kiukacheishvili.jpg', 2, 142, '2022-05-18 15:55:37'),
(104, ' Nino Mumladze', 'Nino_Mumladze.jpg', 2, 11, '2022-05-18 15:55:37'),
(105, ' Olga Danko', 'Olga_Danko.jpg', 2, 24, '2022-05-18 15:55:37'),
(106, ' Olga Shadrina', 'Olga_Shadrina.jpg', 2, 37, '2022-05-18 15:55:37'),
(107, ' Omar Zurabashvili', 'Omar_Zurabashvili.jpg', 1, 50, '2022-05-18 15:55:37'),
(108, ' Omo Gadabadze', 'Omo_Gadabadze.jpg', 1, 63, '2022-05-18 15:55:37'),
(109, ' Pavel Konstantinovsky', 'Pavel_Konstantinovsky 2.jpg', 1, 77, '2022-05-18 15:55:37'),
(110, ' Peter Baker', 'Peter_Baker.jpg', 1, 91, '2022-05-18 15:55:37'),
(111, ' Qeti Qoridze', 'Qeti_Qoridze.jpg', 2, 105, '2022-05-18 15:55:37'),
(112, ' Rabil Ismailov', 'Rabil_Ismailov 2.jpg', 1, 119, '2022-05-18 15:55:37'),
(113, ' Rodriges Aleksandr', 'Rodriges_Aleksandr.jpg', 1, 134, '2022-05-18 15:55:37'),
(114, ' Rusa Sergia', 'Rusa_Sergia.jpg', 2, 147, '2022-05-18 15:55:37'),
(115, 'Ruska Ustiashvili', 'Ruska_Ustiashvili.jpg', 2, 16, '2022-05-18 15:55:37'),
(116, ' Sandro Lashkhia', 'Sandro_Lashkhia.jpg', 3, 29, '2022-05-18 15:55:37'),
(117, ' Sanka Lapshin', 'Sanka_Lapshin.JPG', 3, 42, '2022-05-18 15:55:37'),
(118, ' Sema Sadiq', 'Sema_Sadiq.jpg', 2, 55, '2022-05-18 15:55:37'),
(119, ' Sergei Vostretsov', 'Sergei_Vostretsov.jpg', 1, 68, '2022-05-18 15:55:37'),
(120, ' Smbat Stepanyan', 'Smbat_Stepanyan.jpg', 1, 82, '2022-05-18 15:55:37'),
(121, ' Sopho Lomdjaria', 'Sopho_Lomjaria.jpg', 2, 96, '2022-05-18 15:55:37'),
(122, ' Sopho Shonia', 'Sopho Shonia V2.jpg', 2, 110, '2022-05-18 15:55:37'),
(123, ' Stefanie Veneziano', 'Stefanie_Veneziano.jpg', 2, 124, '2022-05-18 15:55:37'),
(124, ' Taia Gamtenadze', 'Taia_Gamtenadze.jpg', 2, 1, '2022-05-18 15:55:37'),
(125, ' Tako Okropiridze', 'Tako_Okropiridze.jpg', 2, 7, '2022-05-18 15:55:37'),
(126, ' Tamo Lashkhia', 'Tamo_Lashkhia.jpg', 2, 20, '2022-05-18 15:55:37'),
(127, ' Tamta Asatiani', 'Tamta_Asatiani.jpg', 2, 33, '2022-05-18 15:55:37'),
(128, ' Tamta Asatiani 2', 'Tamta_Asatiani_2.jpg', 2, 46, '2022-05-18 15:55:37'),
(129, ' Tamta Kvaracxelia', 'Tamta_Kvaracxelia.jpg', 2, 60, '2022-05-18 15:55:37'),
(130, ' Tata Gvedashvili', 'Tata_Gvedashvili.jpg', 2, 73, '2022-05-18 15:55:37'),
(131, ' Tatia Kuchukhidze', 'Tatia_Kuchukhidze.jpg', 2, 87, '2022-05-18 15:55:37'),
(132, ' Tekla Gazdeliani', 'Tekla_Gazdeliani_2.jpg', 3, 98, '2022-05-18 15:55:37'),
(133, ' Temo Lobzhanidze', 'Temo_Lobzhanidze.jpg', 1, 115, '2022-05-18 15:55:37'),
(134, ' Teona Darchia', 'Teo_Darchia.jpg', 2, 130, '2022-05-18 15:55:37'),
(135, ' Teona Guramishvili', 'Teona_Guramishvili.jpg', 2, 143, '2022-05-18 15:55:37'),
(136, ' Tiko Demetradze', 'Tiko_Demetradze.jpg', 2, 12, '2022-05-18 15:55:37'),
(137, ' Todd Ethridge', 'Todd_Ethridge.jpg', 1, 25, '2022-05-18 15:55:37'),
(138, ' Vano Kurasbediani', 'Vano_Kurasbediani.jpg', 1, 38, '2022-05-18 15:55:37'),
(139, ' Vano Tarkhnishvili', 'Vaniko Tarkhnishvili.jpg', 1, 51, '2022-05-18 15:55:37'),
(140, ' Vlad Kocharian', 'Vlad_Kocharian.jpg', 1, 64, '2022-05-18 15:55:37'),
(141, ' Voski Avagyan', 'Voski_Avagyan.jpg', 2, 78, '2022-05-18 15:55:37'),
(142, ' William King', 'William_King.jpg', 1, 92, '2022-05-18 15:55:37'),
(143, ' Yuri Brezhnev', 'Yury_Brezhnev.jpg', 1, 106, '2022-05-18 15:55:37'),
(144, ' Zura Gorgadze', 'Zura_Gorgadze.jpg', 1, 120, '2022-05-18 15:55:37'),
(145, ' Zura Yifshidze', 'Zura_Yifshidze.jpg', 1, 135, '2022-05-18 15:55:37'),
(146, ' Zviad Dolidze', 'Zviad_Dolidze.jpg', 1, 148, '2022-05-18 15:55:37'),
(150, 'Teko Chubinidze', 'Teko_Chubinidze.jpg', 2, 128, '2022-05-25 23:09:04'),
(151, 'Zanda Rella', 'Zanda_Rella.jpg', 2, 149, '2022-05-25 23:10:26'),
(152, 'Nia Tsindeliani', 'Nia_Tsindeliani.jpg', 2, 2, '2022-05-25 23:10:53');

-- --------------------------------------------------------

--
-- Table structure for table `actor_genders`
--

CREATE TABLE `actor_genders` (
  `id` int(11) NOT NULL,
  `name_ge` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `actor_genders`
--

INSERT INTO `actor_genders` (`id`, `name_ge`, `name_en`, `name_ru`) VALUES
(1, 'კაცი', 'Male', 'Мужской'),
(2, 'ქალი', 'Female', 'Женский'),
(3, 'ბავშვი', 'Child', 'Детский');

-- --------------------------------------------------------

--
-- Table structure for table `actor_language_prices`
--

CREATE TABLE `actor_language_prices` (
  `id` int(11) NOT NULL,
  `actor_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actor_language_prices`
--

INSERT INTO `actor_language_prices` (`id`, `actor_id`, `language_id`, `price`) VALUES
(1, 1, 2, 400),
(2, 2, 3, 300),
(3, 3, 3, 350),
(4, 3, 6, 350),
(5, 4, 3, 350),
(6, 5, 1, 250),
(7, 6, 5, 350),
(8, 7, 1, 350),
(9, 8, 5, 350),
(10, 9, 4, 400),
(11, 10, 4, 400),
(12, 11, 3, 250),
(13, 12, 2, 550),
(14, 13, 1, 300),
(15, 13, 2, 300),
(16, 13, 3, 300),
(17, 14, 4, 350),
(18, 15, 4, 350),
(19, 16, 1, 300),
(20, 16, 2, 300),
(21, 16, 3, 300),
(22, 16, 4, 300),
(23, 17, 4, 350),
(24, 18, 4, 400),
(25, 19, 4, 350),
(26, 20, 1, 250),
(27, 20, 2, 250),
(28, 20, 3, 250),
(29, 21, 4, 350),
(30, 22, 2, 350),
(31, 22, 3, 400),
(32, 22, 1, 350),
(33, 23, 1, 250),
(34, 23, 3, 250),
(35, 24, 2, 500),
(36, 25, 2, 550),
(37, 26, 2, 650),
(38, 27, 1, 300),
(39, 28, 1, 250),
(40, 29, 1, 350),
(41, 30, 1, 350),
(42, 31, 4, 350),
(43, 32, 3, 300),
(44, 33, 1, 350),
(45, 34, 2, 550),
(46, 35, 4, 350),
(47, 36, 1, 350),
(48, 37, 1, 550),
(49, 38, 1, 350),
(50, 39, 1, 300),
(51, 39, 2, 300),
(52, 39, 3, 300),
(53, 40, 1, 350),
(54, 41, 1, 350),
(55, 42, 1, 350),
(56, 43, 3, 350),
(57, 44, 3, 350),
(58, 45, 3, 350),
(59, 46, 1, 300),
(60, 47, 1, 300),
(61, 48, 1, 350),
(62, 49, 4, 300),
(63, 50, 1, 300),
(64, 51, 1, 250),
(65, 51, 2, 300),
(66, 51, 3, 300),
(67, 52, 3, 300),
(68, 53, 1, 300),
(69, 54, 1, 250),
(70, 54, 3, 250),
(71, 55, 3, 350),
(72, 55, 6, 350),
(73, 56, 4, 350),
(74, 57, 1, 300),
(75, 57, 2, 300),
(76, 57, 3, 300),
(77, 58, 1, 400),
(78, 59, 1, 250),
(79, 60, 2, 550),
(80, 61, 3, 300),
(81, 62, 1, 350),
(82, 63, 1, 300),
(83, 63, 2, 300),
(84, 63, 3, 300),
(85, 64, 1, 250),
(86, 65, 1, 350),
(87, 66, 2, 600),
(88, 67, 1, 400),
(89, 67, 2, 400),
(90, 67, 3, 400),
(91, 68, 1, 550),
(92, 69, 4, 300),
(93, 70, 4, 300),
(94, 71, 4, 300),
(95, 72, 1, 400),
(96, 72, 2, 400),
(97, 73, 4, 300),
(98, 74, 1, 350),
(99, 75, 1, 350),
(100, 76, 3, 350),
(101, 77, 1, 350),
(102, 77, 2, 350),
(103, 78, 1, 300),
(104, 78, 2, 300),
(105, 78, 3, 300),
(106, 79, 2, 500),
(107, 80, 2, 600),
(108, 81, 3, 250),
(109, 82, 3, 350),
(110, 83, 1, 300),
(111, 84, 6, 350),
(112, 85, 1, 300),
(113, 86, 1, 250),
(114, 87, 1, 350),
(115, 88, 1, 250),
(116, 89, 1, 250),
(117, 90, 4, 300),
(118, 91, 4, 350),
(119, 91, 3, 350),
(120, 92, 1, 350),
(121, 92, 2, 350),
(122, 93, 1, 300),
(123, 94, 3, 350),
(124, 95, 1, 250),
(125, 96, 1, 350),
(126, 97, 4, 350),
(127, 98, 1, 300),
(128, 99, 1, 250),
(129, 99, 2, 300),
(130, 100, 1, 250),
(131, 100, 3, 250),
(132, 101, 3, 300),
(133, 101, 2, 300),
(134, 102, 1, 300),
(135, 102, 2, 350),
(136, 102, 3, 350),
(137, 103, 1, 400),
(138, 103, 3, 350),
(139, 104, 1, 250),
(140, 104, 3, 250),
(141, 105, 3, 300),
(142, 105, 6, 350),
(143, 106, 3, 300),
(144, 107, 1, 300),
(145, 108, 1, 250),
(146, 109, 3, 300),
(147, 110, 2, 500),
(148, 111, 1, 250),
(149, 112, 5, 300),
(150, 113, 3, 300),
(151, 113, 6, 350),
(152, 114, 1, 250),
(153, 114, 2, 250),
(154, 114, 3, 250),
(155, 115, 1, 310),
(156, 115, 2, 300),
(157, 116, 1, 250),
(158, 116, 3, 250),
(159, 117, 3, 250),
(160, 118, 5, 350),
(161, 119, 3, 350),
(162, 120, 4, 450),
(163, 121, 1, 250),
(164, 121, 2, 300),
(165, 121, 3, 300),
(166, 122, 1, 250),
(167, 122, 11, 350),
(168, 123, 2, 400),
(169, 124, 1, 250),
(170, 125, 1, 300),
(171, 126, 1, 300),
(172, 127, 1, 300),
(173, 128, 1, 300),
(174, 129, 1, 300),
(175, 129, 2, 300),
(176, 129, 3, 300),
(177, 130, 1, 300),
(178, 131, 1, 250),
(179, 132, 1, 250),
(180, 132, 2, 250),
(181, 133, 1, 350),
(182, 133, 2, 350),
(183, 134, 1, 250),
(184, 135, 1, 350),
(185, 136, 1, 250),
(186, 137, 2, 500),
(187, 138, 1, 350),
(188, 138, 2, 400),
(189, 138, 3, 350),
(190, 139, 1, 450),
(191, 140, 1, 250),
(192, 140, 2, 300),
(193, 140, 3, 300),
(194, 141, 4, 250),
(195, 142, 2, 400),
(196, 143, 3, 350),
(197, 144, 1, 400),
(198, 145, 1, 850),
(199, 145, 3, 850),
(200, 146, 1, 450),
(203, 150, 1, 400),
(204, 151, 1, 350),
(205, 152, 1, 300);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `name_ge` varchar(30) NOT NULL,
  `banner` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name_ge`, `banner`) VALUES
(1, 'სერვისების ბანერი', 'main/images/banners/services.jpg'),
(2, 'ჩვენ შესახებ ბანერი', 'main/images/banners/services.jpg'),
(3, 'კონტაქტის ბანერი', 'main/images/banners/services.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `address_ge` varchar(255) NOT NULL,
  `address_en` varchar(255) NOT NULL,
  `address_ru` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address_ge`, `address_en`, `address_ru`, `phone`, `email`, `location`) VALUES
(1, 'თბილისი, სერგო ზაქარიაძის N12', '12 Sergo Zakariadze str., Tbilisi', 'Тбилиси, ул. Серго Закариадзе 12', '(+995) 596 366 366', 'info@voices.ge', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2977.68129051345!2d44.74378255106927!3d41.72739568270868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404473998ff68f23%3A0x6046a17392a2e4b8!2svoices.ge!5e0!3m2!1ska!2sge!4v1584131708777!5m2!1ska!2sge');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `url`, `img`) VALUES
(1, 'https://www.pti.ge', 'PTI LOGO.jfif'),
(2, 'https://www.adjarabet.com', 'AVIATOR.png'),
(3, 'https://www.midea.ge', 'MIDEA.png'),
(4, 'https://www.marketer.ge', 'marketer-logo-2.png'),
(5, 'https://gaguaclinic.ge/', 'unnamed.png'),
(6, 'http://www.geonet.ge/', 'GEONET LOGO.png'),
(7, 'http://globaltel.ge/', 'GLOBALTEL.png'),
(8, 'https://agrohub.ge/', 'AGROHUB.png'),
(9, 'http://bakurianiinn.ge/', 'BAKURIANIINN.png'),
(10, 'http://www.tbilisi.ddb.com/', 'BETTERFLY.png'),
(11, 'https://blox.ge/', 'BLOX.png'),
(12, 'https://www.cu.edu.ge/', 'CAUCASUSUNIVERSITY.png'),
(13, 'https://zoma.ge/', 'CLEANTECH.png'),
(14, 'https://clp.ge/', 'CLIPART.png'),
(15, 'http://copter.ge/', 'COPTER.png'),
(16, 'http://www.energo-pro.ge/', 'ENERGOPROGEORGIA.png'),
(17, 'http://greenhill.ge/', 'GREENHILL.png'),
(18, 'https://hyundai.ge/', 'HIUNDAYGEORGIA.png'),
(19, 'http://221b.ge/', 'HOLMSWATSON.png'),
(20, 'https://ispace.ge/', 'ISPACE.png'),
(21, 'https://invitro.ge/', 'INVITRO.png'),
(22, 'https://irao.ge/', 'IRAO.png'),
(23, 'https://www.lionauctions.com/', 'LIONAUTOAUCTION.png'),
(24, 'https://m2.ge/', 'M2.png'),
(25, 'http://www.meti.ge/', 'METIDEVELOPMENT.png'),
(26, 'https://www.my.ge/', 'MYGE.png'),
(27, 'http://neotech.ge/', 'NEOTECH.png'),
(28, 'http://www.nikora.ge/', 'NIKORA.png'),
(29, 'https://www.olympic.org/', 'OLYMPIC.png'),
(30, 'https://pab.ge/', 'PAB.png'),
(31, 'http://tsiskvili.ge/', 'TSISQVILIGROUP.png'),
(32, 'https://wolt.com/ka/geo/', 'WOLT.png'),
(33, 'https://taxi.yandex.com.ge/', 'YANDEX.png'),
(34, 'https://ugt.ge/', 'UGT.png'),
(35, 'https://zoommer.ge/', 'ZOOMER.png');

-- --------------------------------------------------------

--
-- Table structure for table `pricecalc`
--

CREATE TABLE `pricecalc` (
  `id` int(11) NOT NULL,
  `name_ge` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `value_ge` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `value_en` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `value_ru` varchar(128) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricecalc`
--

INSERT INTO `pricecalc` (`id`, `name_ge`, `value_ge`, `value_en`, `value_ru`) VALUES
(1, 'სათაური', 'ფასის გამომთვლელი კალკულატორი', 'Price Calculator', 'Калькулятор стоимости услуги'),
(2, 'ერთ წუთამდე ქრონომეტრაჟი', 'ერთ წუთამდე ქრონომეტრაჟის ტექსტის საფასური სტანდარტულია', 'Cost of recording text up to 1 minute is standard', 'Стоимость записи текста до 1 минуты стандартная'),
(3, 'კალკულაციის შედეგი', '@words@ სიტყვა; @time@ წამი; ფასი: @price@₾', '@words@ word(s); @time@ second(s); Price: @price@₾', '@words@ слово; @time@ секунд(ы); цена: @price@₾'),
(4, '6 წუთზე მეტი ქრონომეტრაჟი', '6 წუთზე მეტი ქრონომეტრაჟის ტექსტის ჩაწერის შემთხვევაში დაგვიკავშირდით პირადად.', 'The duration of your text exceeds 6 minutes. For further calculation of the cost, please contact us.', 'Хронометраж вашего текста превышает 6 мин. Для дальнейшего расчета стоимости услуги, пожалуйста свяжитесь с нами.'),
(5, 'ჩაწერეთ ტექსტი', 'ჩაწერეთ ტექსტი', 'Enter the text', 'Введите текст');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name_ge` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `text_ge` varchar(255) NOT NULL,
  `text_en` varchar(255) NOT NULL,
  `text_ru` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name_ge`, `name_en`, `name_ru`, `text_ge`, `text_en`, `text_ru`) VALUES
(1, 'სარეკლამო რგოლი', 'Commercial Audio', 'Рекламный ролик', 'ხარისხიანი სარეკლამო რგოლი არის ერთ-ერთი საუკეთესო საშუალება, მიიპყროთ პოტენციური კლიენტების ყურადღება და წარადგინოთ თქვენი პროდუქცია, ან მომსახურება. იმისათვის, რომ შევქმნათ ხარისხიანი სარეკლამო აუდიო რგოლი, ჩვენ მხოლოდ თანამედროვე ტექნოლოგიებს ვიყენებთ.', 'A high-quality advertisement is one of the most effective ways to attract the attention of potential clients and present your product or services. We use only modern sound recording technologies to create high-quality audio commercials. ', 'Заказать качественное рекламное произведение – очень эффективный способ привлечь внимание потенциального клиента и мотивировать купить продукцию или услуги! \nПри создании рекламных роликов мы используем самое современное звукозаписывающее оборудование.'),
(2, 'ავტომოპასუხე', 'IVR', 'Автоответчик', 'სატელეფონო ავტომოპასუხე ამარტივებს კომუნიკაციას კომპანიასა და მომხმარებელს შორის. ავტომოპასუხის მეშვეობით ჩვენ ვაწვდით მომხმარებელს იმ ძირითად ინფორმაციას, რომლის მისაღებადაც ოპერატორის დახმარება საჭირო არ არის.  ', 'IVR greatly simplifies communication between a company and consumer. Using IVR the company easily distributes the basic information to the consumer without any help of operator. ', 'Телефонный автоответчик намного упрощает коммуникацию между компанией и ее потенциональным клиентом. С помошью автоответчика мы предоставляем клиенту информацию, для получения которой помошь оператора не нужна.'),
(3, 'ვიდეო გახმოვანება', 'Video Voiceover', 'Озвучка видео', 'ჩვენ ვიცით, როგორი უნდა იყოს იდეალური გახმოვანება ვიდეო რგოლისთვის. შეგირჩევთ საუკეთესო ხმის ავტორს, ჩავწერთ მოცემულ ტექსტს და ვიდეოს პროფესიონალურ დონეზე დაგიმონტაჟებთ. ', 'We know how does the perfect voiceover for the video commercial sounds like. We will select the best voice actor, record the text and make professional editing of pictures and sound.', 'Мы знаем, какой должна быть идеальная озвучка видеороликов. Поэтому подберем самого лучшего диктора и сделаем профессиональный монтаж картинки и звука.'),
(4, 'აუდიო წიგნი', 'Audio Book', 'Аудио книга', 'ბოლო წლებში, აუდიო წიგნები საკმაოდ პოპულარული გახდა, რადგან ბევრ ადამიანს წიგნის წასაკითხად დრო არ რჩება. ამიტომ, აუდიო წიგნი იდეალური საშუალებაა, რომლითაც თქვენს მხატვრულ, ან შემეცნებით ნაწარმოებს ფართო აუდიტორიას გააცნობთ.', 'For the past several years audiobooks are becoming more and more popular, as many people don’t have time to read books in a traditional way. Hence, the audiobook is a great opportunity to bring your artwork or training course to a wide range of audience.', 'Аудиокнига – прекрасная возможность донести свое художественное произведение или обучающий курс до широкого круга людей. Сегодня, в бешеном ритме жизни, у многих не хватает времени на чтение книг, а слушать в аудиоформате можно где и когда угодно.'),
(5, 'სარეკლამო რგოლის ტექსტი', 'Ad text', 'Текст рекламного ролика', 'სარეკლამო რგოლის ეფექტურობის 80% მის შინაარსობრივ ნაწილზე მოდის. აუდიტორიას განსხვავებული ამბები და ფრაზები ამახსოვრდება. ჩვენ ვიცით, როგორ შევქმნათ კრეატიული ტექსტი სარეკლამო რგოლისთვის. ', '80% of the efficiency of advertisement is depended on its content. Audience mostly remembers exceptional stories and phrases. We know how to create catchy texts for the advertisements. ', 'Как известно, 80% эффективности реклмного ролика зависит от его содержания. Лучше всего мозг человека запоминает необычную, отличительную новость. Мы знаем каким должен быть сценарий креативного рекламного ролика - легко запоминаюзимся!'),
(6, 'თარგმნა', 'Translate', 'Перевод', 'სარეკლამო ტექსტის თარგმნისას, აუცილებელია შინაარსობრივი ნაწილი სწორად გადმოვცეთ. მითუმეტეს მაშინ, როდესაც ხელმისაწვდომია მხოლოდ აუდიო ფაილი. ამ შემთხვევაში, ჯერ ტექსტი უნდა გაიშიფროს, შემდეგ დარედაქტირდეს, ბოლოს კი ითარგმნოს. ', 'While translating the commercial text it is essential to keep the right content, especially when the audio file is only source of the information. In this case the text should be transcribed, edited and translated. ', 'Перевод текста рекламного ролика требует правильного переноса его смысловой части, тем более если мы имеем только аудиофайл, с которого сначала производится транскрипция на слух, затем редактирование текста и перевод. Это наша работа!'),
(7, 'მომსახურების შეკვეთა', 'Place an order', 'Заказ услуги', 'შეკვეთის დაწყებისთვის, ხმების ბაზიდან ვირჩევთ სასურველ ხმას და, საიტზე ჩაშენებული კალკულატორის საშუალებით, ვითვლით მომსახურების საფასურს.', 'To proceed an order, you need to choose the voice you like and use the built-in calculator to calculate the cost of the service.', 'Чтобы сделать заказ, нужно найти для вашей задачи соответствующий голос и при помощи встроенного в сайт калькулятора посчитать стоимость данной услуги.'),
(8, 'შეკვეთის გაგრძელება', 'Order continuation', 'Продолжение заказа', 'ხმის ავტორის შერჩევის შემდეგ, შეკვეთის გაგრძელებისთვის, გამოგვიგზავნეთ ჩასაწერი ტექსტი, არჩეული ხმის ავტორის ნომერი და თქვენი ორგანიზაციის რეკვიზიტები ელ. ფოსტის მისამართზე info@voices.ge', 'After choosing the voice actor, you have to send the following information on our e-mail info@voices.ge. The text you want to be recorded, the number of voice actor and the requisites of your company. ', 'Если стоимость услуги выбранного вами автора вас устаивает для прододжения процеса заказа вам необходимо прислать текст материала, номер автора голоса и реквизиты вашей организации на адрес эл.почты info@voices.ge.'),
(9, 'ინვოისი', 'Invoice', 'Инвойса', 'ამის შემდეგ, ჩვენ დავუკავშირდებით ხმის ავტორს და დავიბარებთ ჩაწერაზე სტუდიაში. პარალელურად, თქვენ გამოგიგზავნით ინვოისს და ინფორმაციას, ჩაწერის ზუსტი დროის შესახებ.', 'After that, we will contact the author of the voice and arrange the meeting at the recording studio. Additionally, you will receive the invoice and the information about the exact time and date of the recording.', 'После этого, мы свяжемся с автором голоса и назначим точное время его визита в звукозаписывающую студию. Вы получите инвойc и информацию относительно точного времени записи, чтобы при желании вы могли присутствовать на процессе записи.'),
(10, 'შეკვეთის დასრულება', 'Finish order', 'Завершение заказа', 'მომსახურების საფასურის გადახდის შემდეგ, ჩვენ ვიწყებთ ჩაწერის პროცესს. დამუშავებულ აუდიო ფაილს შეკვეთიდან მაქსიმუმ ორი სამუშაო დღის ვადაში მიიღებთ.', 'After you proceed the service payment, we begin the recording process. The final version of your order will be sent to you withing maximum two business days after the order.', 'После оплаты вами заказа, мы начинаем процесс записи и предоставляем вам обработанный аудио файл максимум в течении двух рабочих дней.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name_ge` varchar(255) NOT NULL,
  `img_ge` varchar(255) NOT NULL,
  `img_en` varchar(255) NOT NULL,
  `img_ru` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name_ge`, `img_ge`, `img_en`, `img_ru`) VALUES
(1, 'GENERAL BANNER', '1. GENERAL BANNER GEO.jpg', '1. GENERAL BANNER ENG.jpg', '1. GENERAL BANNER RUS.jpg'),
(2, 'COMMERCIAL BANNER', '2. COMMERCIAL AUDIO GEO.jpg', '2. COMMERCIAL AUDIO ENG.jpg', '2. COMMERCIAL AUDIO RUS.jpg'),
(3, 'IVR BANNER', '3. IVR GEO.jpg', '3. IVR ENG.jpg', '3. IVR RUS.jpg'),
(4, 'VIDEO VOICEOVER BANNER', '4. VIDEO VOICE OVER GEO.jpg', '4.VIDEO VOICE OVER ENG.jpg', '4. VIDEO VOICE OVER RUS.jpg'),
(5, 'AUDIO BOOK BANNER', '5. AUDIO BOOK GEO.jpg', '5. AUDIO BOOK ENG.jpg', '5. AUDIO BOOK RUS.jpg'),
(6, 'CREATIVE SCRIPT BANNER', '6. CREATIVE SCRIPT GEO.jpg', '6. CREATIVE SCRIPT ENG.jpg', '6. CREATIVE SCRIPT RUS.jpg'),
(7, 'TRANSLATE BANNER', '7. TRANSLATE GEO.jpg', '7. TRANSLATE ENG.jpg', '7. TRANSLATE RUS.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `voices`
--

CREATE TABLE `voices` (
  `1` int(11) NOT NULL,
  `actor_id` int(11) NOT NULL,
  `voice_category_id` int(11) NOT NULL,
  `voice_language_id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voices`
--

INSERT INTO `voices` (`1`, `actor_id`, `voice_category_id`, `voice_language_id`, `filename`, `created`) VALUES
(1, 6, 1, 5, 'Artistic_Amirkhan_Mamedov_AZE.mp3', '2022-05-18 15:55:05'),
(2, 8, 1, 5, 'Artistic_Anar_Rafigoglu_AZE.mp3', '2022-05-18 15:55:05'),
(3, 11, 1, 3, 'Artistic_Andrei_Lapshin_RUS.mp3', '2022-05-18 15:55:05'),
(4, 12, 1, 2, 'Artistic_Andy_Taylor_ENG.mp3', '2022-05-18 15:55:05'),
(5, 16, 1, 3, 'Artistic_Aram_Mikaelian_RUS.mp3', '2022-05-18 15:55:05'),
(6, 22, 1, 1, 'Artistic_Bacho_Kvirtia_GEO.mp3', '2022-05-18 15:55:05'),
(7, 23, 1, 1, 'Artistic_Beka_Medzmariashvili_GEO.mp3', '2022-05-18 15:55:05'),
(8, 23, 1, 3, 'Artistic_Beka_Medzmariashvili_RUS.mp3', '2022-05-18 15:55:05'),
(9, 24, 1, 2, 'Artistic_Bryan_Saulsbury_ENG.mp3', '2022-05-18 15:55:05'),
(10, 25, 1, 2, 'Artistic_Chad_Gustafson_ENG.mp3', '2022-05-18 15:55:05'),
(11, 26, 1, 2, 'Artistic_Christi_Bowen_ENG.mp3', '2022-05-18 15:55:05'),
(12, 27, 1, 1, 'Artistic_Ciko_Inauri_GEO.mp3', '2022-05-18 15:55:05'),
(13, 28, 1, 1, 'Artistic_Dachi_Babunashvili_GEO.mp3', '2022-05-18 15:55:05'),
(14, 34, 1, 2, 'Artistic_Gale_Cruz_ENG.mp3', '2022-05-18 15:55:05'),
(15, 37, 1, 1, 'Artistic_Giorgi_Gasviani_GEO.mp3', '2022-05-18 15:55:05'),
(16, 38, 1, 1, 'Artistic_Giorgi_Kachakhidze_GEO.mp3', '2022-05-18 15:55:05'),
(17, 39, 1, 1, 'Artistic_Giorgi_Kalandadze_GEO.mp3', '2022-05-18 15:55:05'),
(18, 39, 1, 2, 'Artistic_Giorgi_Kalandadze_ENG.mp3', '2022-05-18 15:55:05'),
(19, 42, 1, 1, 'Artistic_Giorgi_Zanguri_GEO.mp3', '2022-05-18 15:55:05'),
(20, 46, 1, 1, 'Artistic_Guram_Kvrivishvili_GEO.mp3', '2022-05-18 15:55:05'),
(21, 52, 1, 3, 'Artistic_Irakli_Guniava_RUS.mp3', '2022-05-18 15:55:05'),
(22, 54, 1, 1, 'Artistic_Irina_Mikeladze_GEO.mp3', '2022-05-18 15:55:05'),
(23, 54, 1, 3, 'Artistic_Irina_Mikeladze_RUS.mp3', '2022-05-18 15:55:05'),
(24, 59, 1, 1, 'Artistic_Keso_Moiswrafishvili_GEO.mp3', '2022-05-18 15:55:05'),
(25, 60, 1, 2, 'Artistic_Kirean_Phoenix_Chantrey.mp3', '2022-05-18 15:55:05'),
(26, 61, 1, 3, 'Artistic_Konstantin_Cibulsky_RUS.mp3', '2022-05-18 15:55:05'),
(27, 63, 1, 1, 'Artistic_Lasha_Giorgi_Papuashvili_GEO.mp3', '2022-05-18 15:55:05'),
(28, 63, 1, 3, 'Artistic_Lasha_Giorgi_Papuashvili_RUS.mp3', '2022-05-18 15:55:05'),
(29, 64, 1, 1, 'Artistic_Lasha_Moiswrafishvili_GEO.mp3', '2022-05-18 15:55:05'),
(30, 66, 1, 2, 'Artistic_Laura_Beth_ Ezzel_ENG.mp3', '2022-05-18 15:55:05'),
(31, 67, 1, 1, 'Artistic_Levan_Inasaridze_GEO.mp3', '2022-05-18 15:55:05'),
(32, 67, 1, 2, 'Artistic_Levan_Inasaridze_ENG.mp3', '2022-05-18 15:55:05'),
(33, 68, 1, 1, 'Artistic_Levan_Khochiashvili_GEO.mp3', '2022-05-18 15:55:05'),
(34, 69, 1, 4, 'Artisticl_Lia_Khachapuryan_ARM.mp3', '2022-05-18 15:55:05'),
(35, 74, 1, 1, 'Artistic_Maia_Khmaladze_GEO.mp3', '2022-05-18 15:55:05'),
(36, 79, 1, 2, 'Artistic_Mark_Stahr_ENG.mp3', '2022-05-18 15:55:05'),
(37, 80, 1, 2, 'Artisticl_Mark_Stephenson_ENG.mp3', '2022-05-18 15:55:05'),
(38, 81, 1, 3, 'Artistic_Matvei_Lapshin_RUS.mp3', '2022-05-18 15:55:05'),
(39, 83, 1, 1, 'Artistic_Mikheil_Diasamidze_GEO.mp3', '2022-05-18 15:55:05'),
(40, 86, 1, 1, 'Artistic_Misha_Abramishvili_GEO.mp3', '2022-05-18 15:55:05'),
(41, 88, 1, 1, 'Artistic_Mishiko_Gogilava_GEO.mp3', '2022-05-18 15:55:05'),
(42, 96, 1, 1, 'Artistic_Nato_Sulkhanishvili_GEO.mp3', '2022-05-18 15:55:05'),
(43, 99, 1, 1, 'Artistic_Nika_Ramazashvili_GEO.mp3', '2022-05-18 15:55:05'),
(44, 99, 1, 2, 'Artistic_Nika_Ramazashvili_ENG.mp3', '2022-05-18 15:55:05'),
(45, 101, 1, 3, 'Artistic_Nina_Sarkisyan_RUS.mp3', '2022-05-18 15:55:05'),
(46, 103, 1, 1, 'Artistic_Nina_Kikacha_GEO.mp3', '2022-05-18 15:55:05'),
(47, 103, 1, 3, 'Artistic_Nina_Kikacha_RUS.mp3', '2022-05-18 15:55:05'),
(48, 104, 1, 1, 'Artistic_Nino_Mumladze_GEO.mp3', '2022-05-18 15:55:05'),
(49, 104, 1, 3, 'Artistic_Nino_Mumladze_RUS.mp3', '2022-05-18 15:55:05'),
(50, 105, 1, 3, 'Artistic_Olga_Danko_RUS.mp3', '2022-05-18 15:55:05'),
(51, 110, 1, 2, 'Artistic_Peter_Baker_ENG.mp3', '2022-05-18 15:55:05'),
(52, 115, 1, 1, 'Artistic_Ruska_Ustiashvili_GEO.mp3', '2022-05-18 15:55:05'),
(53, 116, 1, 1, 'Artistic_Sandro_Lashkhia_GEO.mp3', '2022-05-18 15:55:05'),
(54, 116, 1, 3, 'Artistic_Sandro_Lashkhia_RUS.mp3', '2022-05-18 15:55:05'),
(55, 117, 1, 3, 'Artistic_Sanka_Lapshin_RUS.mp3', '2022-05-18 15:55:05'),
(56, 121, 1, 1, 'Artistic_Sopho_Lomjaria_GEO.mp3', '2022-05-18 15:55:05'),
(57, 122, 1, 1, 'Artistic_Sopho_Shonia_GEO.mp3', '2022-05-18 15:55:05'),
(58, 122, 1, 11, 'Artistic_Sopho_Shonia_ESP.mp3', '2022-05-18 15:55:05'),
(59, 125, 1, 1, 'Artistic_Tako_Okropiridze_GEO.mp3', '2022-05-18 15:55:05'),
(60, 126, 1, 1, 'Artistic_Tamo_Lashkhia_GEO.mp3', '2022-05-18 15:55:05'),
(61, 127, 1, 1, 'Artistic_Tamta_Asatiani_GEO.mp3', '2022-05-18 15:55:05'),
(62, 132, 1, 1, 'Artistic_Tekla_Gazdeliani_GEO.mp3', '2022-05-18 15:55:05'),
(63, 132, 1, 2, 'Artistic_Tekla_Gazdeliani_ENG.mp3', '2022-05-18 15:55:05'),
(64, 133, 1, 1, 'Artistic_Temo_Lobjanidze_GEO.mp3', '2022-05-18 15:55:05'),
(65, 133, 1, 2, 'Artistic_Temo_Lobjanidze_ENG V4.mp3', '2022-05-18 15:55:05'),
(66, 137, 1, 2, 'Artistic_Todd_Ethridge_ENG.mp3', '2022-05-18 15:55:05'),
(67, 138, 1, 1, 'Artistic_Vano_Kurasbediani_GEO.mp3', '2022-05-18 15:55:05'),
(68, 138, 1, 3, 'Artistic_Vano_Kurasbediani_RUS.mp3', '2022-05-18 15:55:05'),
(69, 142, 1, 2, 'Artistic_William_King_ENG.mp3', '2022-05-18 15:55:05'),
(70, 146, 1, 1, 'Artistic_Zviad_Dolidze_GEO.mp3', '2022-05-18 15:55:05'),
(71, 1, 2, 2, 'IVR_Abdolmadjid_Masoomi_ENG.mp3', '2022-05-18 15:55:05'),
(72, 2, 2, 3, 'IVR_Aleksander_Krapinevich_RUS.mp3', '2022-05-18 15:55:05'),
(73, 3, 2, 3, 'IVR_Aleksandr_Lapshin_RUS.mp3', '2022-05-18 15:55:05'),
(74, 3, 2, 6, 'IVR_Aleksandr_Lapshin_UKR.mp3', '2022-05-18 15:55:05'),
(75, 4, 2, 3, 'IVR_Aleksei_Lyapunov_RUS.mp3', '2022-05-18 15:55:05'),
(76, 5, 2, 1, 'IVR_Alex_Ruadze_GEO.mp3', '2022-05-18 15:55:05'),
(77, 6, 2, 5, 'IVR_Amirkhan_Mamedov_AZE.mp3', '2022-05-18 15:55:05'),
(78, 7, 2, 1, 'IVR_Ana_Matuashvili_GEO.mp3', '2022-05-18 15:55:05'),
(79, 8, 2, 5, 'IVR_Anar_Rafigoglu_AZE.mp3', '2022-05-18 15:55:05'),
(80, 9, 2, 4, 'IVR_Andranik_Hakobyan_ARM.mp3', '2022-05-18 15:55:05'),
(81, 10, 2, 4, 'IVR_Andranik_Hakobyan_ARM 2.mp3', '2022-05-18 15:55:05'),
(82, 13, 2, 1, 'IVR_Ani_Metreveli_GEO.mp3', '2022-05-18 15:55:05'),
(83, 13, 2, 2, 'IVR_Ani_Metreveli_ENG.mp3', '2022-05-18 15:55:05'),
(84, 13, 2, 3, 'IVR_Ani_Metreveli_RUS.mp3', '2022-05-18 15:55:05'),
(85, 14, 2, 4, 'IVR_Anush_Arakelyan_ARM.mp3', '2022-05-18 15:55:05'),
(86, 15, 2, 4, 'IVR_Araksya_Melikyan_ARM.mp3', '2022-05-18 15:55:05'),
(87, 16, 2, 1, 'IVR_Aram_Mikaelian_GEO.mp3', '2022-05-18 15:55:05'),
(88, 16, 2, 2, 'IVR_Aram_Mikaelian_ENG.mp3', '2022-05-18 15:55:05'),
(89, 16, 2, 3, 'IVR_Aram_Mikaelian_RUS.mp3', '2022-05-18 15:55:05'),
(90, 16, 2, 4, 'IVRl_Aram_Mikaelian_ARM.mp3', '2022-05-18 15:55:05'),
(91, 17, 2, 4, 'IVR_Robert_Kartashyan_ARM.mp3', '2022-05-18 15:55:05'),
(92, 18, 2, 4, 'IVR_Arsen_Albaryan_ARM.mp3', '2022-05-18 15:55:05'),
(93, 19, 2, 4, 'IVR_Art_Gegamyan_ARM.mp3', '2022-05-18 15:55:05'),
(94, 20, 2, 1, 'IVR_Artur_Stepanian_GEO.mp3', '2022-05-18 15:55:05'),
(95, 20, 2, 2, 'IVR_Artur_Stepanian_ENG.mp3', '2022-05-18 15:55:05'),
(96, 20, 2, 3, 'IVR_Artur_Stepanian_RUS.mp3', '2022-05-18 15:55:05'),
(97, 21, 2, 4, 'IVR_Ashot_Simonyan_ARM.mp3', '2022-05-18 15:55:05'),
(98, 22, 2, 2, 'IVR_Bacho_Kvirtia_ENG.mp3', '2022-05-18 15:55:05'),
(99, 22, 2, 3, 'IVR _Bacho_Kvirtia_RUS.mp3', '2022-05-18 15:55:05'),
(100, 22, 2, 1, 'IVR_Bacho_Kvirtia_GEO.mp3', '2022-05-18 15:55:05'),
(101, 23, 2, 1, 'IVR_Beka_Medzmariashvili_GEO.mp3', '2022-05-18 15:55:05'),
(102, 23, 2, 3, 'IVR_Beka_Medzmariashvili_RUS.mp3', '2022-05-18 15:55:05'),
(103, 25, 2, 2, 'IVR_Chad_Gustafson_ENG.mp3', '2022-05-18 15:55:05'),
(104, 26, 2, 2, 'IVR_Christi_Bowen_ENG.mp3', '2022-05-18 15:55:05'),
(105, 27, 2, 1, 'IVR _Ciko_Inauri_GEO.mp3', '2022-05-18 15:55:05'),
(106, 28, 2, 1, 'IVR_Dachi_Babunashvili_GEO.mp3', '2022-05-18 15:55:05'),
(107, 29, 2, 1, 'IVR_Davit_Beradze_GEO.mp3', '2022-05-18 15:55:05'),
(108, 30, 2, 1, 'IVR_Diko_Chkhikvadze_GEO.mp3', '2022-05-18 15:55:05'),
(109, 31, 2, 4, 'IVR_Edgar_Bagdasaryan_ARM.mp3', '2022-05-18 15:55:05'),
(110, 32, 2, 3, 'IVR_Elena_Ivasishina_RUS.mp3', '2022-05-18 15:55:05'),
(111, 33, 2, 1, 'IVR_Gaga_Yachiuri_GEO.mp3', '2022-05-18 15:55:05'),
(112, 34, 2, 2, 'IVR_Gale_Cruz_ENG.mp3', '2022-05-18 15:55:05'),
(113, 35, 2, 4, 'IVR_Genrikh_Petrosyan_ARM.mp3', '2022-05-18 15:55:05'),
(114, 36, 2, 1, 'IVR_Giorgi_Archvadze_GEO.mp3', '2022-05-18 15:55:05'),
(115, 37, 2, 1, 'IVR_Giorgi_Gasviani_GEO.mp3', '2022-05-18 15:55:05'),
(116, 38, 2, 1, 'IVR_Giorgi_Kachakhidze_GEO.mp3', '2022-05-18 15:55:05'),
(117, 39, 2, 1, 'IVR_Giorgi_Kalandadze_GEO.mp3', '2022-05-18 15:55:05'),
(118, 39, 2, 2, 'IVR_Giorgi_Kalandadze_ENG.mp3', '2022-05-18 15:55:05'),
(119, 39, 2, 3, 'IVR_Giorgi_Kalandadze_RUS.mp3', '2022-05-18 15:55:05'),
(120, 40, 2, 1, 'IVR_Giorgi_Keretchashvili_GEO.mp3', '2022-05-18 15:55:05'),
(121, 41, 2, 1, 'IVR_Giorgi_Merebashvili_GEO.mp3', '2022-05-18 15:55:05'),
(122, 42, 2, 1, 'IVR_Giorgi_Zanguri_GEO.mp3', '2022-05-18 15:55:05'),
(123, 43, 2, 3, 'IVR_Grigory_Konkov_RUS.mp3', '2022-05-18 15:55:05'),
(124, 44, 2, 3, 'IVR_Grigory_Konkov_2_RUS.mp3', '2022-05-18 15:55:05'),
(125, 45, 2, 3, 'IVR_Grigory_Konkov_3_RUS.mp3', '2022-05-18 15:55:05'),
(126, 46, 2, 1, 'IVR_Guram_Kvrivishvili_GEO.mp3', '2022-05-18 15:55:05'),
(127, 47, 2, 1, 'IVR_Gvanca_Abashidze_GEO.mp3', '2022-05-18 15:55:05'),
(128, 48, 2, 1, 'IVR_Gvanca_Gadabadze_GEO.mp3', '2022-05-18 15:55:05'),
(129, 49, 2, 4, 'IVR_Haikush_Shakhbazyan_ARM.mp3', '2022-05-18 15:55:05'),
(130, 50, 2, 1, 'IVR_Ia_Mgebrishvili_GEO.mp3', '2022-05-18 15:55:05'),
(131, 51, 2, 1, 'IVR_Irakli_Chkhikvadze_GEO.mp3', '2022-05-18 15:55:05'),
(132, 51, 2, 2, 'IVR_Irakli_Chkhikvadze_ENG.mp3', '2022-05-18 15:55:05'),
(133, 51, 2, 3, 'IVR_Irakli_Chkhikvadze_RUS.mp3', '2022-05-18 15:55:05'),
(134, 52, 2, 3, 'IVR_Irakli_Guniava_RUS.mp3', '2022-05-18 15:55:05'),
(135, 53, 2, 1, 'IVR_Irakli_Kurashvili_GEO.mp3', '2022-05-18 15:55:05'),
(136, 54, 2, 1, 'IVR_Irina_Mikeladze_GEO.mp3', '2022-05-18 15:55:05'),
(137, 54, 2, 3, 'IVR_Irina_Mikeladze_RUS.mp3', '2022-05-18 15:55:05'),
(138, 55, 2, 3, 'IVR_Ivan_Novoseltsev_RUS.mp3', '2022-05-18 15:55:05'),
(139, 55, 2, 6, 'IVR_Ivan_Novoseltsev_UKR.mp3', '2022-05-18 15:55:05'),
(140, 56, 2, 4, 'IVR_Ivan_Tair_ARM.mp3', '2022-05-18 15:55:05'),
(141, 57, 2, 1, 'IVR_Kakha_Jokhadze_GEO.mp3', '2022-05-18 15:55:05'),
(142, 57, 2, 2, 'IVR_Kakha_Jokhadze_ENG.mp3', '2022-05-18 15:55:05'),
(143, 57, 2, 3, 'IVR_Kakha_Jokhadze_RUS.mp3', '2022-05-18 15:55:05'),
(144, 57, 2, 1, 'IVR_Kakha_Jokhadze_GEO_2.mp3', '2022-05-18 15:55:05'),
(145, 57, 2, 3, 'IVR_Kakha_Jokhadze_RUS_2.mp3', '2022-05-18 15:55:05'),
(146, 58, 2, 1, 'IVR_Kakha_Kintsurashvili_GEO.mp3', '2022-05-18 15:55:05'),
(147, 60, 2, 2, 'IVR_Kirean_Phoenix_Chantrey.mp3', '2022-05-18 15:55:05'),
(148, 61, 2, 3, 'IVR_Konstantin_Cibulsky_RUS.mp3', '2022-05-18 15:55:05'),
(149, 62, 2, 1, 'IVR_Lasha_Bakhtadze_GEO.mp3', '2022-05-18 15:55:05'),
(150, 63, 2, 1, 'IVR_Lasha_Giorgi_Papuashvili_GEO.mp3', '2022-05-18 15:55:05'),
(151, 63, 2, 2, 'IVR_Lasha_Giorgi_Papuashvili_ENG.mp3', '2022-05-18 15:55:05'),
(152, 63, 2, 3, 'IVR_Lasha_Giorgi_Papuashvili_RUS.mp3', '2022-05-18 15:55:05'),
(153, 64, 2, 1, 'IVR_Lasha_Moiswrafishvili_GEO.mp3', '2022-05-18 15:55:05'),
(154, 65, 2, 1, 'IVR_Lasha_Murjikneli_GEO.mp3', '2022-05-18 15:55:05'),
(155, 67, 2, 1, 'IVR_Levan_Inasaridze_GEO.mp3', '2022-05-18 15:55:05'),
(156, 67, 2, 2, 'IVR_Levan_Inasaridze_ENG.mp3', '2022-05-18 15:55:05'),
(157, 67, 2, 3, 'IVR_Levan_Inasaridze_RUS.mp3', '2022-05-18 15:55:05'),
(158, 68, 2, 1, 'IVR_Levan_Khochiashvili_GEO.mp3', '2022-05-18 15:55:05'),
(159, 69, 2, 4, 'IVR_Lia_Khachapuryan_ARM.mp3', '2022-05-18 15:55:05'),
(160, 70, 2, 4, 'IVRl_Lilit_Tandilyan.mp3', '2022-05-18 15:55:05'),
(161, 71, 2, 4, 'IVR_Liza_Torosyan_ARM.mp3', '2022-05-18 15:55:05'),
(162, 72, 2, 1, 'IVR_Luka_Akhaladze_GEO.mp3', '2022-05-18 15:55:05'),
(163, 72, 2, 2, 'IVR_Luka_Akhaladze_ENG.mp3', '2022-05-18 15:55:05'),
(164, 73, 2, 4, 'IVR_Lusine_Muradyan_ARM.mp3', '2022-05-18 15:55:05'),
(165, 74, 2, 1, 'IVR_Maia_Khmaladze_GEO.mp3', '2022-05-18 15:55:05'),
(166, 75, 2, 1, 'IVR_Maia_Khmaladze_GEO V2.mp3', '2022-05-18 15:55:05'),
(167, 76, 2, 3, 'IVR_Maik_Mixanzon_RUS.mp3', '2022-05-18 15:55:05'),
(168, 77, 2, 1, 'IVR_Mariam_Barnabishvili_GEO.mp3', '2022-05-18 15:55:05'),
(169, 77, 2, 2, 'IVR_Mariam_Barnabishvili_ENG.mp3', '2022-05-18 15:55:05'),
(170, 78, 2, 1, 'IVR_Maridea_Gelashvili_GEO.mp3', '2022-05-18 15:55:05'),
(171, 78, 2, 2, 'IVR_Maridea_Gelashvili_ENG.mp3', '2022-05-18 15:55:05'),
(172, 78, 2, 3, 'IVR_Maridea_Gelashvili_RUS.mp3', '2022-05-18 15:55:05'),
(173, 79, 2, 2, 'IVR_Mark_Stahr_ENG.mp3', '2022-05-18 15:55:05'),
(174, 80, 2, 2, 'IVR_Mark_Stephenson_ENG.mp3', '2022-05-18 15:55:05'),
(175, 82, 2, 3, 'IVR_Max_Maslov_RUS.mp3', '2022-05-18 15:55:05'),
(176, 83, 2, 1, 'IVR_Mikheil_Diasamidze_GEO.mp3', '2022-05-18 15:55:05'),
(177, 84, 2, 6, 'IVR_Mikola_Dzudzya_UKR.mp3', '2022-05-18 15:55:05'),
(178, 85, 2, 1, 'IVR_Mirian_Jejelava_GEO.mp3', '2022-05-18 15:55:05'),
(179, 86, 2, 1, 'IVR_Misha_Abramishvili_GEO.mp3', '2022-05-18 15:55:05'),
(180, 87, 2, 1, 'IVR_Misha_Romanovi_GEO.mp3', '2022-05-18 15:55:05'),
(181, 88, 2, 1, 'IVR_Mishiko_Gogilava_GEO.mp3', '2022-05-18 15:55:05'),
(182, 89, 2, 1, 'IVR_Nanka_Kokiashvili_GEO.mp3', '2022-05-18 15:55:05'),
(183, 90, 2, 4, 'IVR_Nargiz_Podosyan_ARM.mp3', '2022-05-18 15:55:05'),
(184, 91, 2, 4, 'IVR_Narine_Sultannyan_ARM.mp3', '2022-05-18 15:55:05'),
(185, 91, 2, 3, 'IVR_Narine_Sultannyan_RUS.mp3', '2022-05-18 15:55:05'),
(186, 92, 2, 1, 'IVR_Nata_Asatiani_GEO.mp3', '2022-05-18 15:55:05'),
(187, 92, 2, 2, 'IVR_Nata_Asatiani_ENG.mp3', '2022-05-18 15:55:05'),
(188, 93, 2, 1, 'IVR_Nata_Kharashvili_GEO.mp3', '2022-05-18 15:55:05'),
(189, 94, 2, 3, 'IVR_Natalia_Urbanskaya_RUS.mp3', '2022-05-18 15:55:05'),
(190, 95, 2, 1, 'IVR_Natia_Kharebashvili_GEO.mp3', '2022-05-18 15:55:05'),
(191, 96, 2, 1, 'IVR_Nato_Sulkhanishvili_GEO V2.mp3', '2022-05-18 15:55:05'),
(192, 97, 2, 4, 'IVR_Nazeni Chorekchyan_ARM.mp3', '2022-05-18 15:55:05'),
(193, 98, 2, 1, 'IVR_Nica_Gverdtsiteli_GEO.mp3', '2022-05-18 15:55:05'),
(194, 99, 2, 1, 'IVR_Nika_Ramazashvili_GEO.mp3', '2022-05-18 15:55:05'),
(195, 99, 2, 2, 'IVR_Nika_Ramazashvili_ENG.mp3', '2022-05-18 15:55:05'),
(196, 100, 2, 1, 'IVR_Nina_Ninidze_GEO.mp3', '2022-05-18 15:55:05'),
(197, 100, 2, 3, 'IVR_Nina_Ninidze_RUS.mp3', '2022-05-18 15:55:05'),
(198, 101, 2, 3, 'IVR_Nina_Sarkisyan_RUS.mp3', '2022-05-18 15:55:05'),
(199, 101, 2, 2, 'IVR_Nina_Sarkisyan_ENG.mp3', '2022-05-18 15:55:05'),
(200, 102, 2, 1, 'IVR__Nini_Metreveli_GEO.mp3', '2022-05-18 15:55:05'),
(201, 102, 2, 2, 'IVR__Nini_Metreveli_ENG.mp3', '2022-05-18 15:55:05'),
(202, 102, 2, 3, 'IVR__Nini_Metreveli_RUS.mp3', '2022-05-18 15:55:05'),
(203, 103, 2, 1, 'IVR_Nina_Kikacha_GEO.mp3', '2022-05-18 15:55:05'),
(204, 103, 2, 3, 'IVR_Nina_Kikacha_RUS.mp3', '2022-05-18 15:55:05'),
(205, 104, 2, 1, 'IVR_Nino_Mumladze_GEO.mp3', '2022-05-18 15:55:05'),
(206, 104, 2, 3, 'IVR_Nino_Mumladze_RUS.mp3', '2022-05-18 15:55:05'),
(207, 105, 2, 3, 'IVR_Olga_Danko_RUS.mp3', '2022-05-18 15:55:05'),
(208, 105, 2, 6, 'IVR_Olga_Danko_UKR.mp3', '2022-05-18 15:55:05'),
(209, 106, 2, 3, 'IVR_Olga_Shadrina_RUS.mp3', '2022-05-18 15:55:05'),
(210, 107, 2, 1, 'IVR_Omar_Zurabashvili_GEO.mp3', '2022-05-18 15:55:05'),
(211, 108, 2, 1, 'IVR_Omo_Gadabadze_GEO.mp3', '2022-05-18 15:55:05'),
(212, 109, 2, 3, 'IVR_Pavel_Konstantinovsky_RUS.mp3', '2022-05-18 15:55:05'),
(213, 110, 2, 2, 'IVR_Peter_Baker_ENG.mp3', '2022-05-18 15:55:05'),
(214, 111, 2, 1, 'IVR_Qeti_Qoridze_GEO.mp3', '2022-05-18 15:55:05'),
(215, 112, 2, 5, 'IVR_Rabil_Ismailov_AZE.mp3', '2022-05-18 15:55:05'),
(216, 113, 2, 3, 'IVR_Rodriges_Aleksandr_RUS.mp3', '2022-05-18 15:55:05'),
(217, 113, 2, 6, 'IVR_Rodriges_Aleksandr_UKR.mp3', '2022-05-18 15:55:05'),
(218, 114, 2, 1, 'IVR_Rusa_Sergia_GEO.mp3', '2022-05-18 15:55:05'),
(219, 114, 2, 2, 'IVR_Rusa_Sergia_ENG.mp3', '2022-05-18 15:55:05'),
(220, 114, 2, 3, 'IVR_Rusa_Sergia_RUS.mp3', '2022-05-18 15:55:05'),
(221, 115, 2, 1, 'IVR_Ruska_Ustiashvili_GEO.mp3', '2022-05-18 15:55:05'),
(222, 115, 2, 2, 'IVR_Ruska_Ustiashvili_ENG.mp3', '2022-05-18 15:55:05'),
(223, 118, 2, 5, 'IVR_Sema_Sadik_AZE.mp3', '2022-05-18 15:55:05'),
(224, 119, 2, 3, 'IVR_Sergei_Vostretsov_RUS.mp3', '2022-05-18 15:55:05'),
(225, 120, 2, 4, 'IVR_Smbat_Stepanyan_ARM.mp3', '2022-05-18 15:55:05'),
(226, 121, 2, 1, 'IVR_Sopho_Lomjaria_GEO.mp3', '2022-05-18 15:55:05'),
(227, 121, 2, 2, 'IVR_Sopho_Lomjaria_ENG.mp3', '2022-05-18 15:55:05'),
(228, 121, 2, 3, 'IVR_Sopho_Lomjaria_RUS.mp3', '2022-05-18 15:55:05'),
(229, 122, 2, 11, 'IVR_Sopho_Shonia_ESP.mp3', '2022-05-18 15:55:05'),
(230, 123, 2, 2, 'IVR_Stefanie_Veneziano_ENG.mp3', '2022-05-18 15:55:05'),
(231, 124, 2, 1, 'IVR_Taia_Gamtenadze_GEO.mp3', '2022-05-18 15:55:05'),
(232, 125, 2, 1, 'IVR_Tako_Okropiridze_GEO.mp3', '2022-05-18 15:55:05'),
(233, 126, 2, 1, 'IVR_Tamo_Lashkhia_GEO.mp3', '2022-05-18 15:55:05'),
(234, 127, 2, 1, 'IVR_Tamta_Asatiani_GEO.mp3', '2022-05-18 15:55:05'),
(235, 128, 2, 1, 'IVR_Tamta_Asatiani_2_GEO.mp3', '2022-05-18 15:55:05'),
(236, 129, 2, 1, 'IVR_Tamta_Kvaracxelia_GEO.mp3', '2022-05-18 15:55:05'),
(237, 129, 2, 2, 'IVR_Tamta_Kvaracxelia_ENG.mp3', '2022-05-18 15:55:05'),
(238, 129, 2, 3, 'IVR_Tamta_Kvaracxelia_RUS.mp3', '2022-05-18 15:55:05'),
(239, 130, 2, 1, 'IVR_Tata_Gvedashvili_GEO.mp3', '2022-05-18 15:55:05'),
(240, 131, 2, 1, 'IVR_Tatia_Kuchukhidze_GEO.mp3', '2022-05-18 15:55:05'),
(241, 133, 2, 1, 'IVR_Temo_Lobjanidze_GEO.mp3', '2022-05-18 15:55:05'),
(242, 133, 2, 2, 'IVR_Temo_Lobjanidze_ENG.mp3', '2022-05-18 15:55:05'),
(243, 134, 2, 1, 'IVR_Teona_Darchia_GEO.mp3', '2022-05-18 15:55:05'),
(244, 135, 2, 1, 'IVR_Teona_Guramishvili_GEO.mp3', '2022-05-18 15:55:05'),
(245, 136, 2, 1, 'IVR_Tiko_Demetradze_GEO.mp3', '2022-05-18 15:55:05'),
(246, 137, 2, 2, 'IVR_Todd_Ethridge_ENG.mp3', '2022-05-18 15:55:05'),
(247, 138, 2, 1, 'IVR_Vano_Kurasbediani_GEO.mp3', '2022-05-18 15:55:05'),
(248, 138, 2, 2, 'IVR_Vano_Kurasbediani_ENG.mp3', '2022-05-18 15:55:05'),
(249, 138, 2, 3, 'IVR_Vano_Kurasbediani_RUS.mp3', '2022-05-18 15:55:05'),
(250, 139, 2, 1, 'IVR_Vaniko_Tarkhnishvili_GEO.mp3', '2022-05-18 15:55:05'),
(251, 140, 2, 1, 'IVR_Vlad_Kocharian_GEO.mp3', '2022-05-18 15:55:05'),
(252, 140, 2, 2, 'IVR_Vlad_Kocharian_ENG.mp3', '2022-05-18 15:55:05'),
(253, 140, 2, 3, 'IVR_Vlad_Kocharian_RUS.mp3', '2022-05-18 15:55:05'),
(254, 141, 2, 4, 'IVR_Voski_Avagyan_ARM.mp3', '2022-05-18 15:55:05'),
(255, 142, 2, 2, 'IVR_William_King_ENG.mp3', '2022-05-18 15:55:05'),
(256, 143, 2, 3, 'IVR_Yury_Brezhnev_RUS.mp3', '2022-05-18 15:55:05'),
(257, 144, 2, 1, 'IVR_Zura_Gorgadze_GEO.mp3', '2022-05-18 15:55:05'),
(258, 145, 2, 1, 'IVR_Zurab_Yifshidze_GEO.mp3', '2022-05-18 15:55:05'),
(259, 145, 2, 3, 'IVR_Zurab_Yifshidze_RUS.mp3', '2022-05-18 15:55:05'),
(260, 146, 2, 1, 'IVR_Zviad_Dolidze_GEO.mp3', '2022-05-18 15:55:05'),
(261, 1, 3, 2, 'Commercial_Abdolmadjid_Masoomi_ENG.mp3', '2022-05-18 15:55:05'),
(262, 2, 3, 3, 'Commercial_Aleksander_Krapinevich_RUS.mp3', '2022-05-18 15:55:05'),
(263, 3, 3, 3, 'Commercial_Aleksandr_Lapshin_RUS.mp3', '2022-05-18 15:55:05'),
(264, 3, 3, 6, 'Commercial_Aleksandr_Lapshin_UKR.mp3', '2022-05-18 15:55:05'),
(265, 4, 3, 3, 'Commercial_Aleksei_Lyapunov_RUS.mp3', '2022-05-18 15:55:05'),
(266, 5, 3, 1, 'Commercial_Alex_Ruadze_GEO.mp3', '2022-05-18 15:55:05'),
(267, 6, 3, 5, 'Commercial_Amirkhan_Mamedov_AZE.mp3', '2022-05-18 15:55:05'),
(268, 7, 3, 1, 'Commercial_Ana_Matuashvili_GEO.mp3', '2022-05-18 15:55:05'),
(269, 8, 3, 5, 'Commercial_Anar_Rafigoglu_AZE.mp3', '2022-05-18 15:55:05'),
(270, 9, 3, 4, 'Commercial_Andranik_Hakobyan_ARM.mp3', '2022-05-18 15:55:05'),
(271, 10, 3, 4, 'Commercial_Andranik_Hakobyan_ARM 2.mp3', '2022-05-18 15:55:05'),
(272, 11, 3, 3, 'Commercial_Andrei_Lapshin_RUS.mp3', '2022-05-18 15:55:05'),
(273, 12, 3, 2, 'Commercial_Andy_Taylor_ENG.mp3', '2022-05-18 15:55:05'),
(274, 13, 3, 1, 'Commercial_Ani_Metreveli_GEO.mp3', '2022-05-18 15:55:05'),
(275, 16, 3, 1, 'Commercial_Aram_Mikaelian_GEO.mp3', '2022-05-18 15:55:05'),
(276, 16, 3, 2, 'Commercial_Aram_Mikaelian_ENG.mp3', '2022-05-18 15:55:05'),
(277, 16, 3, 3, 'Commercial_Aram_Mikaelian_RUS.mp3', '2022-05-18 15:55:05'),
(278, 16, 3, 4, 'Commercial_Aram_Mikaelian_ARM.mp3', '2022-05-18 15:55:05'),
(279, 17, 3, 4, 'Commercial_Robert_Kartashyan_ARM.mp3', '2022-05-18 15:55:05'),
(280, 18, 3, 4, 'Commercial_Arsen_Albaryan_ARM.mp3', '2022-05-18 15:55:05'),
(281, 19, 3, 4, 'Commercial_Art_Gegamyan_ARM.mp3', '2022-05-18 15:55:05'),
(282, 20, 3, 1, 'Commercial_Artur_Stepanian_GEO.mp3', '2022-05-18 15:55:05'),
(283, 20, 3, 2, 'Commercial_Artur_Stepanian_ENG.mp3', '2022-05-18 15:55:05'),
(284, 20, 3, 3, 'Commercial_Artur_Stepanian_RUS.mp3', '2022-05-18 15:55:05'),
(285, 21, 3, 4, 'Commercial_Ashot_Simonyan_ARM.mp3', '2022-05-18 15:55:05'),
(286, 22, 3, 1, 'Commercial_Bacho_Kvirtia_GEO.mp3', '2022-05-18 15:55:05'),
(287, 23, 3, 1, 'Commercial_Beka_Medzmariashvili_GEO.mp3', '2022-05-18 15:55:05'),
(288, 23, 3, 3, 'Commercial_Beka_Medzmariashvili_RUS.mp3', '2022-05-18 15:55:05'),
(289, 24, 3, 2, 'Commercial_Bryan_Saulsbury_ENG.mp3', '2022-05-18 15:55:05'),
(290, 25, 3, 2, 'Commercial_Chad_Gustafson_ENG.mp3', '2022-05-18 15:55:05'),
(291, 26, 3, 2, 'Commercial_Christi_Bowen_ENG.mp3', '2022-05-18 15:55:05'),
(292, 27, 3, 1, 'Commercial_Ciko_Inauri_GEO.mp3', '2022-05-18 15:55:05'),
(293, 28, 3, 1, 'Commercial_Dachi_Babunashvili_GEO.mp3', '2022-05-18 15:55:05'),
(294, 29, 3, 1, 'Commercial_Davit_Beradze_GEO.mp3', '2022-05-18 15:55:05'),
(295, 30, 3, 1, 'Commercial_Diko_Chkhikvadze_GEO.mp3', '2022-05-18 15:55:05'),
(296, 31, 3, 4, 'Commercial_Edgar_Bagdasaryan_ARM.mp3', '2022-05-18 15:55:05'),
(297, 32, 3, 3, 'Commercial_Elena_Ivasishina_RUS.mp3', '2022-05-18 15:55:05'),
(298, 33, 3, 1, 'Commercial_Gaga_Yachiuri_GEO.mp3', '2022-05-18 15:55:05'),
(299, 34, 3, 2, 'Commercial_Gale_Cruz_ENG.mp3', '2022-05-18 15:55:05'),
(300, 35, 3, 4, 'Commercial_Genrikh_Petrosyan_ARM.mp3', '2022-05-18 15:55:05'),
(301, 36, 3, 1, 'Commercial_Giorgi_Archvadze_GEO.mp3', '2022-05-18 15:55:05'),
(302, 37, 3, 1, 'Commercial_Giorgi_Gasviani_GEO.mp3', '2022-05-18 15:55:05'),
(303, 38, 3, 1, 'Commercial_Giorgi_Kachakhidze_GEO.mp3', '2022-05-18 15:55:05'),
(304, 39, 3, 1, 'Commercial_Giorgi_Kalandadze_GEO.mp3', '2022-05-18 15:55:05'),
(305, 39, 3, 2, 'Commercial_Giorgi_Kalandadze_ENG.mp3', '2022-05-18 15:55:05'),
(306, 39, 3, 3, 'Commercial_Giorgi_Kalandadze_RUS.mp3', '2022-05-18 15:55:05'),
(307, 41, 3, 1, 'Commercial_Giorgi_Merebashvili_GEO.mp3', '2022-05-18 15:55:05'),
(308, 42, 3, 1, 'Commercial_Giorgi_Zanguri_GEO.mp3', '2022-05-18 15:55:05'),
(309, 43, 3, 3, 'Commercial_Grigory_Konkov_RUS.mp3', '2022-05-18 15:55:05'),
(310, 44, 3, 3, 'Commercial_Grigory_Konkov_2_RUS.mp3', '2022-05-18 15:55:05'),
(311, 46, 3, 1, 'Commercial_Guram_Kvrivishvili_GEO.mp3', '2022-05-18 15:55:05'),
(312, 47, 3, 1, 'Commercial_Gvanca_Abashidze_GEO.mp3', '2022-05-18 15:55:05'),
(313, 48, 3, 1, 'Commercial_Gvanca_Gadabadze_GEO.mp3', '2022-05-18 15:55:05'),
(314, 49, 3, 4, 'Commercial_Haikush_Shakhbazyan_ARM.mp3', '2022-05-18 15:55:05'),
(315, 50, 3, 1, 'Commercial_Ia_Mgebrishvili_GEO.mp3', '2022-05-18 15:55:05'),
(316, 51, 3, 1, 'Commercial_Irakli_Chkhikvadze_GEO.mp3', '2022-05-18 15:55:05'),
(317, 51, 3, 2, 'Commercial_Irakli_Chkhikvadze_ENG.mp3', '2022-05-18 15:55:05'),
(318, 52, 3, 3, 'Commercial_Irakli_Guniava_RUS.mp3', '2022-05-18 15:55:05'),
(319, 53, 3, 1, 'Commercial_Irakli_Kurashvili_GEO.mp3', '2022-05-18 15:55:05'),
(320, 54, 3, 3, 'Commercial_Irina_Mikeladze_RUS.mp3', '2022-05-18 15:55:05'),
(321, 55, 3, 3, 'Commercial_Ivan_Novoseltsev_RUS.mp3', '2022-05-18 15:55:05'),
(322, 55, 3, 6, 'Commercial_Ivan_Novoseltsev_UKR.mp3', '2022-05-18 15:55:05'),
(323, 56, 3, 4, 'Commercial_Ivan_Tair_ARM.mp3', '2022-05-18 15:55:05'),
(324, 57, 3, 1, 'Commercial_Kakha_Jokhadze_GEO.mp3', '2022-05-18 15:55:05'),
(325, 57, 3, 1, 'Commercial_Kakha_Jokhadze_GEO_2.mp3', '2022-05-18 15:55:05'),
(326, 58, 3, 1, 'Commercial_Kakha_Kintsurashvili_GEO.mp3', '2022-05-18 15:55:05'),
(327, 59, 3, 1, 'Commercial_Keso_Moiswrafishvili_GEO.mp3', '2022-05-18 15:55:05'),
(328, 60, 3, 2, 'Commercial_Kirean_Phoenix_Chantrey.mp3', '2022-05-18 15:55:05'),
(329, 61, 3, 3, 'Commercial_Konstantin_Cibulsky_RUS.mp3', '2022-05-18 15:55:05'),
(330, 62, 3, 1, 'Commercial_Lasha_Bakhtadze_GEO.mp3', '2022-05-18 15:55:05'),
(331, 63, 3, 1, 'Commercial_Lasha_Giorgi_Papuashvili_GEO.mp3', '2022-05-18 15:55:05'),
(332, 63, 3, 3, 'Commercial_Lasha_Giorgi_Papuashvili_RUS.mp3', '2022-05-18 15:55:05'),
(333, 64, 3, 1, 'Commercial_Lasha_Moiswrafishvili_GEO.mp3', '2022-05-18 15:55:05'),
(334, 65, 3, 1, 'Commercial_Lasha_Murjikneli_GEO.mp3', '2022-05-18 15:55:05'),
(335, 66, 3, 2, 'Commercial_Laura_Beth_ Ezzel_ENG.mp3', '2022-05-18 15:55:05'),
(336, 67, 3, 1, 'Commercial_Levan_Inasaridze_GEO.mp3', '2022-05-18 15:55:05'),
(337, 67, 3, 2, 'Commercial_Levan_Inasaridze_ENG.mp3', '2022-05-18 15:55:05'),
(338, 67, 3, 3, 'Commercial_Levan_Inasaridze_RUS.mp3', '2022-05-18 15:55:05'),
(339, 68, 3, 1, 'Commercial_Levan_Khochiashvili_GEO.mp3', '2022-05-18 15:55:05'),
(340, 69, 3, 4, 'Commercial_Lia_Khachapuryan_ARM.mp3', '2022-05-18 15:55:05'),
(341, 70, 3, 4, 'Commercial_Lilit_Tandilyan.mp3', '2022-05-18 15:55:05'),
(342, 71, 3, 4, 'Commercial_Liza_Torosyan_ARM.mp3', '2022-05-18 15:55:05'),
(343, 72, 3, 1, 'Commercial_Luka_Akhaladze_GEO.mp3', '2022-05-18 15:55:05'),
(344, 72, 3, 2, 'Commercial_Luka_Akhaladze_ENG.mp3', '2022-05-18 15:55:05'),
(345, 73, 3, 4, 'Commercial_Lusine_Muradyan_ARM.mp3', '2022-05-18 15:55:05'),
(346, 74, 3, 1, 'Commercial_Maia_Khmaladze_GEO.mp3', '2022-05-18 15:55:05'),
(347, 76, 3, 3, 'Commercial_Maik_Mixanzon_RUS.mp3', '2022-05-18 15:55:05'),
(348, 77, 3, 1, 'Commercial_Mariam_Barnabishvili_GEO.mp3', '2022-05-18 15:55:05'),
(349, 77, 3, 2, 'Commercial_Mariam_Barnabishvili_ENG.mp3', '2022-05-18 15:55:05'),
(350, 78, 3, 1, 'Commercial_Maridea_Gelashvili_GEO.mp3', '2022-05-18 15:55:05'),
(351, 78, 3, 2, 'Commercial_Maridea_Gelashvili_ENG.mp3', '2022-05-18 15:55:05'),
(352, 78, 3, 3, 'Commercial_Maridea_Gelashvili_RUS.mp3', '2022-05-18 15:55:05'),
(353, 79, 3, 2, 'Commercial_Mark_Stahr_ENG.mp3', '2022-05-18 15:55:05'),
(354, 80, 3, 2, 'Commercial_Mark_Stephenson_ENG.mp3', '2022-05-18 15:55:05'),
(355, 82, 3, 3, 'Commercial_Max_Maslov_RUS.mp3', '2022-05-18 15:55:05'),
(356, 83, 3, 1, 'Commercial_Mikheil_Diasamidze_GEO.mp3', '2022-05-18 15:55:05'),
(357, 84, 3, 6, 'Commercial_Mikola_Dzudzya_UKR.mp3', '2022-05-18 15:55:05'),
(358, 85, 3, 1, 'Commercial_Mirian_Jejelava_GEO.mp3', '2022-05-18 15:55:05'),
(359, 86, 3, 1, 'Commercial_Misha_Abramishvili_GEO.mp3', '2022-05-18 15:55:05'),
(360, 87, 3, 1, 'Commercial_Misha_Romanovi_GEO.mp3', '2022-05-18 15:55:05'),
(361, 88, 3, 1, 'Commercial_Mishiko_Gogilava_GEO.mp3', '2022-05-18 15:55:05'),
(362, 89, 3, 1, 'Commercial_Nanka_Kokiashvili_GEO.mp3', '2022-05-18 15:55:05'),
(363, 90, 3, 4, 'Commercial_Nargiz_Podosyan_ARM.mp3', '2022-05-18 15:55:05'),
(364, 91, 3, 4, 'Commercial_Narine_Sultannyan_ARM.mp3', '2022-05-18 15:55:05'),
(365, 92, 3, 1, 'Commercial_Nata_Asatiani_GEO.mp3', '2022-05-18 15:55:05'),
(366, 93, 3, 1, 'Commercial_Nata_Kharashvili_GEO.mp3', '2022-05-18 15:55:05'),
(367, 94, 3, 3, 'Commercial_Natalia_Urbanskaya_RUS.mp3', '2022-05-18 15:55:05'),
(368, 95, 3, 1, 'Commercial_Natia_Kharebashvili_GEO.mp3', '2022-05-18 15:55:05'),
(369, 96, 3, 1, 'Commercial_Nato_Sulkhanishvili_GEO.mp3', '2022-05-18 15:55:05'),
(370, 97, 3, 4, 'Commercial_Nazeni Chorekchyan_ARM.mp3', '2022-05-18 15:55:05'),
(371, 98, 3, 1, 'Commercial_Nica_Gverdtsiteli_GEO.mp3', '2022-05-18 15:55:05'),
(372, 99, 3, 1, 'Commercial_Nika_Ramazashvili_GEO.mp3', '2022-05-18 15:55:05'),
(373, 99, 3, 2, 'Commercial_Nika_Ramazashvili_ENG.mp3', '2022-05-18 15:55:05'),
(374, 100, 3, 1, 'Commercial_Nina_Ninidze_GEO.mp3', '2022-05-18 15:55:05'),
(375, 100, 3, 3, 'Commercial_Nina_Ninidze_RUS.mp3', '2022-05-18 15:55:05'),
(376, 101, 3, 3, 'Commercial_Nina_Sarkisyan_RUS.mp3', '2022-05-18 15:55:05'),
(377, 101, 3, 2, 'Commercial_Nina_Sarkisyan_ENG.mp3', '2022-05-18 15:55:05'),
(378, 102, 3, 1, 'Commercial__Nini_Metreveli_GEO.mp3', '2022-05-18 15:55:05'),
(379, 102, 3, 2, 'Commercial__Nini_Metreveli_ENG.mp3', '2022-05-18 15:55:05'),
(380, 103, 3, 1, 'Commercial_Nina_Kikacha_GEO.mp3', '2022-05-18 15:55:05'),
(381, 103, 3, 3, 'Commercial_Nina_Kikacha_RUS.mp3', '2022-05-18 15:55:05'),
(382, 104, 3, 1, 'Commercial_Nino_Mumladze_GEO.mp3', '2022-05-18 15:55:05'),
(383, 104, 3, 3, 'Commercial_Nino_Mumladze_RUS.mp3', '2022-05-18 15:55:05'),
(384, 105, 3, 3, 'Commercial_Olga_Danko_RUS.mp3', '2022-05-18 15:55:05'),
(385, 105, 3, 6, 'Commercial_Olga_Danko_UKR.mp3', '2022-05-18 15:55:05'),
(386, 106, 3, 3, 'Commercial_Olga_Shadrina_RUS.mp3', '2022-05-18 15:55:05'),
(387, 107, 3, 1, 'Commercial_Omar_Zurabashvili_GEO.mp3', '2022-05-18 15:55:05'),
(388, 108, 3, 1, 'Commercial_Omo_Gadabadze_GEO.mp3', '2022-05-18 15:55:05'),
(389, 109, 3, 3, 'Commercial_Pavel_Konstantinovsky_RUS.mp3', '2022-05-18 15:55:05'),
(390, 110, 3, 2, 'Commercial_Peter_Baker_ENG.mp3', '2022-05-18 15:55:05'),
(391, 111, 3, 1, 'Commercial_Qeti_Qoridze_GEO.mp3', '2022-05-18 15:55:05'),
(392, 112, 3, 5, 'Commercial_Rabil_Ismailov_AZE.mp3', '2022-05-18 15:55:05'),
(393, 113, 3, 3, 'Commercial_Rodriges_Aleksandr_RUS.mp3', '2022-05-18 15:55:05'),
(394, 113, 3, 6, 'Commercial_Rodriges_Aleksandr_UKR.mp3', '2022-05-18 15:55:05'),
(395, 115, 3, 1, 'Commercial_Ruska_Ustiashvili_GEO.mp3', '2022-05-18 15:55:05'),
(396, 115, 3, 2, 'Commercial_Ruska_Ustiashvili_ENG.mp3', '2022-05-18 15:55:05'),
(397, 117, 3, 3, 'Commercial_Sanka_Lapshin_RUS.mp3', '2022-05-18 15:55:05'),
(398, 118, 3, 5, 'Commercial_Sema_Sadik_AZE.mp3', '2022-05-18 15:55:05'),
(399, 119, 3, 3, 'Commercial_Sergei_Vostretsov_RUS.mp3', '2022-05-18 15:55:05'),
(400, 120, 3, 4, 'Commercial_Smbat_Stepanyan_ARM.mp3', '2022-05-18 15:55:05'),
(401, 121, 3, 1, 'Commercial_Sopho_Lomjaria_GEO.mp3', '2022-05-18 15:55:05'),
(402, 121, 3, 2, 'Commercial_Sopho_Lomjaria_ENG.mp3', '2022-05-18 15:55:05'),
(403, 121, 3, 3, 'Commercial_Sopho_Lomjaria_RUS.mp3', '2022-05-18 15:55:05'),
(404, 122, 3, 1, 'Commercial_Sopho_Shonia_GEO.mp3', '2022-05-18 15:55:05'),
(405, 122, 3, 11, 'Commercial_Sopho_Shonia_ESP.mp3', '2022-05-18 15:55:05'),
(406, 123, 3, 2, 'Commercial_Stefanie_Veneziano_ENG.mp3', '2022-05-18 15:55:05'),
(407, 124, 3, 1, 'Commercial_Taia_Gamtenadze_GEO.mp3', '2022-05-18 15:55:05'),
(408, 125, 3, 1, 'Commercial_Tako_Okropiridze_GEO.mp3', '2022-05-18 15:55:05'),
(409, 126, 3, 1, 'Commercial_Tamo_Lashkhia_GEO.mp3', '2022-05-18 15:55:05'),
(410, 127, 3, 1, 'Commercial_Tamta_Asatiani_GEO.mp3', '2022-05-18 15:55:05'),
(411, 128, 3, 1, 'Commercial_Tamta_Asatiani_2_GEO.mp3', '2022-05-18 15:55:05'),
(412, 129, 3, 1, 'Commercial_Tamta_Kvaracxelia_GEO.mp3', '2022-05-18 15:55:05'),
(413, 129, 3, 2, 'Commercial_Tamta_Kvaracxelia_ENG.mp3', '2022-05-18 15:55:05'),
(414, 129, 3, 3, 'Commercial_Tamta_Kvaracxelia_RUS.mp3', '2022-05-18 15:55:05'),
(415, 130, 3, 1, 'Commercial_Tata_Gvedashvili_GEO.mp3', '2022-05-18 15:55:05'),
(416, 131, 3, 1, 'Commercial_Tatia_Kuchukhidze_GEO.mp3', '2022-05-18 15:55:05'),
(417, 133, 3, 1, 'Commercial_Temo_Lobjanidze_GEO.mp3', '2022-05-18 15:55:05'),
(418, 133, 3, 2, 'Commercial_Temo_Lobjanidze_ENG.mp3', '2022-05-18 15:55:05'),
(419, 134, 3, 1, 'Commercial_Teona_Darchia_GEO.mp3', '2022-05-18 15:55:05'),
(420, 135, 3, 1, 'Commercial_Teona_Guramishvili_GEO.mp3', '2022-05-18 15:55:05'),
(421, 136, 3, 1, 'Commercial_Tiko_Demetradze_GEO.mp3', '2022-05-18 15:55:05'),
(422, 137, 3, 2, 'Commercial_Todd_Ethridge_ENG.mp3', '2022-05-18 15:55:05'),
(423, 138, 3, 1, 'Commercial_Vano_Kurasbediani_GEO.mp3', '2022-05-18 15:55:05'),
(424, 138, 3, 2, 'Commercial_Vano_Kurasbediani_ENG.mp3', '2022-05-18 15:55:05'),
(425, 138, 3, 3, 'Commercial_Vano_Kurasbediani_RUS.mp3', '2022-05-18 15:55:05'),
(426, 139, 3, 1, 'Commercial_Vaniko_Tarkhnishvili_GEO.mp3', '2022-05-18 15:55:05'),
(427, 140, 3, 2, 'Commercial_Vlad_Kocharian_ENG.mp3', '2022-05-18 15:55:05'),
(428, 140, 3, 3, 'Commercial_Vlad_Kocharian_RUS.mp3', '2022-05-18 15:55:05'),
(429, 141, 3, 4, 'Commercial_Voski_Avagyan_ARM.mp3', '2022-05-18 15:55:05'),
(430, 142, 3, 2, 'Commercial_William_King_ENG.mp3', '2022-05-18 15:55:05'),
(431, 143, 3, 3, 'Commercial_Yury_Brezhnev_RUS.mp3', '2022-05-18 15:55:05'),
(432, 144, 3, 1, 'Commercial_Zura_Gorgadze_GEO.mp3', '2022-05-18 15:55:05'),
(433, 145, 3, 1, 'Commercial_Zurab_Yifshidze_GEO.mp3', '2022-05-18 15:55:05'),
(434, 145, 3, 3, 'Commercial_Zurab_Yifshidze_RUS.mp3', '2022-05-18 15:55:05'),
(435, 146, 3, 1, 'Commercial_Zviad_Dolidze_GEO.mp3', '2022-05-18 15:55:05'),
(436, 1, 4, 2, 'Documentary_Abdolmadjid_Masoomi_ENG.mp3', '2022-05-18 15:55:05'),
(437, 5, 4, 1, 'Documentary_Alex_Ruadze_GEO.mp3', '2022-05-18 15:55:05'),
(438, 6, 4, 5, 'Documentary_Amirkhan_Mamedov_AZE.mp3', '2022-05-18 15:55:05'),
(439, 7, 4, 1, 'Documentary_Ana_Matuashvili_GEO.mp3', '2022-05-18 15:55:05'),
(440, 8, 4, 5, 'Documentary_Anar_Rafigoglu_AZE.mp3', '2022-05-18 15:55:05'),
(441, 11, 4, 3, 'Documentary_Andrei_Lapshin_RUS.mp3', '2022-05-18 15:55:05'),
(442, 12, 4, 2, 'Documentary_Andy_Taylor_ENG.mp3', '2022-05-18 15:55:05'),
(443, 13, 4, 1, 'Documentary_Ani_Metreveli_GEO.mp3', '2022-05-18 15:55:05'),
(444, 16, 4, 1, 'Documentary_Aram_Mikaelian_GEO.mp3', '2022-05-18 15:55:05'),
(445, 16, 4, 2, 'Documentary_Aram_Mikaelian_ENG.mp3', '2022-05-18 15:55:05'),
(446, 16, 4, 3, 'Documentary_Aram_Mikaelian_RUS.mp3', '2022-05-18 15:55:05'),
(447, 20, 4, 1, 'Documentary_Artur_Stepanian_GEO.mp3', '2022-05-18 15:55:05'),
(448, 20, 4, 2, 'Documentary_Artur_Stepanian_ENG.mp3', '2022-05-18 15:55:05'),
(449, 20, 4, 3, 'Documentary_Artur_Stepanian_RUS.mp3', '2022-05-18 15:55:05'),
(450, 22, 4, 1, 'Documentary_Bacho_Kvirtia_GEO.mp3', '2022-05-18 15:55:05'),
(451, 23, 4, 1, 'Documentary_Beka_Medzmariashvili_GEO.mp3', '2022-05-18 15:55:05'),
(452, 23, 4, 3, 'Documentary_Beka_Medzmariashvili_RUS.mp3', '2022-05-18 15:55:05'),
(453, 24, 4, 2, 'Documentary_Bryan_Saulsbury_ENG.mp3', '2022-05-18 15:55:05'),
(454, 25, 4, 2, 'Documentary_Chad_Gustafson_ENG.mp3', '2022-05-18 15:55:05'),
(455, 26, 4, 2, 'Documentary_Christi_Bowen_ENG.mp3', '2022-05-18 15:55:05'),
(456, 27, 4, 1, 'Documetary_Ciko_Inauri_GEO.mp3', '2022-05-18 15:55:05'),
(457, 28, 4, 1, 'Documentary_Dachi_Babunashvili_GEO.mp3', '2022-05-18 15:55:05'),
(458, 29, 4, 1, 'Documentary_Davit_Beradze_GEO.mp3', '2022-05-18 15:55:05'),
(459, 30, 4, 1, 'Documentary_Diko_Chkhikvadze_GEO.mp3', '2022-05-18 15:55:05'),
(460, 33, 4, 1, 'Documentary_Gaga_Yachiuri_GEO.mp3', '2022-05-18 15:55:05'),
(461, 34, 4, 2, 'Documentaryl_Gale_Cruz_ENG.mp3', '2022-05-18 15:55:05'),
(462, 36, 4, 1, 'Documentary_Giorgi_Archvadze_GEO.mp3', '2022-05-18 15:55:05'),
(463, 37, 4, 1, 'Documentary_Giorgi_Gasviani_GEO.mp3', '2022-05-18 15:55:05'),
(464, 38, 4, 1, 'Documentary_Giorgi_Kachakhidze_GEO.mp3', '2022-05-18 15:55:05'),
(465, 39, 4, 1, 'Documentary_Giorgi_Kalandadze_GEO.mp3', '2022-05-18 15:55:05'),
(466, 39, 4, 2, 'Documentary_Giorgi_Kalandadze_ENG.mp3', '2022-05-18 15:55:05'),
(467, 39, 4, 3, 'Documentary_Giorgi_Kalandadze_RUS.mp3', '2022-05-18 15:55:05'),
(468, 40, 4, 1, 'Documentary_Giorgi_Keretchashvili_GEO.mp3', '2022-05-18 15:55:05'),
(469, 41, 4, 1, 'Documentary_Giorgi_Merebashvili_GEO.mp3', '2022-05-18 15:55:05'),
(470, 42, 4, 1, 'Documentary_Giorgi_Zanguri_GEO.mp3', '2022-05-18 15:55:05'),
(471, 46, 4, 1, 'Documentary_Guram_Kvrivishvili_GEO.mp3', '2022-05-18 15:55:05'),
(472, 47, 4, 1, 'Documentary_Gvanca_Abashidze_GEO.mp3', '2022-05-18 15:55:05'),
(473, 48, 4, 1, 'Documentary_Gvanca_Gadabadze_GEO.mp3', '2022-05-18 15:55:05'),
(474, 50, 4, 1, 'Documentary_Ia_Mgebrishvili_GEO.mp3', '2022-05-18 15:55:05'),
(475, 51, 4, 1, 'Documentary_Irakli_Chkhikvadze_GEO.mp3', '2022-05-18 15:55:05'),
(476, 51, 4, 2, 'Documentary_Irakli_Chkhikvadze_ENG.mp3', '2022-05-18 15:55:05'),
(477, 52, 4, 3, 'Documentary_Irakli_Guniava_RUS.mp3', '2022-05-18 15:55:05'),
(478, 53, 4, 1, 'Documentary_Irakli_Kurashvili_GEO.mp3', '2022-05-18 15:55:05'),
(479, 54, 4, 1, 'Documentary_Irina_Mikeladze_GEO.mp3', '2022-05-18 15:55:05'),
(480, 54, 4, 3, 'Documentary_Irina_Mikeladze_RUS.mp3', '2022-05-18 15:55:05'),
(481, 57, 4, 1, 'Documentary_Kakha_Jokhadze_GEO.mp3', '2022-05-18 15:55:05'),
(482, 57, 4, 1, 'Documentary_Kakha_Jokhadze_GEO_2.mp3', '2022-05-18 15:55:05'),
(483, 58, 4, 1, 'Documentary_Kakha_Kintsurashvili_GEO.mp3', '2022-05-18 15:55:05'),
(484, 59, 4, 1, 'Documentary_Keso_Moiswrafishvili_GEO.mp3', '2022-05-18 15:55:05'),
(485, 60, 4, 2, 'Documentary_Kirean_Phoenix_Chantrey.mp3', '2022-05-18 15:55:05'),
(486, 62, 4, 1, 'Documentary_Lasha_Bakhtadze_GEO.mp3', '2022-05-18 15:55:05'),
(487, 63, 4, 1, 'Documentary_Lasha_Giorgi_Papuashvili_GEO.mp3', '2022-05-18 15:55:05'),
(488, 63, 4, 3, 'Documentary_Lasha_Giorgi_Papuashvili_RUS.mp3', '2022-05-18 15:55:05'),
(489, 64, 4, 1, 'Documentary_Lasha_Moiswrafishvili_GEO.mp3', '2022-05-18 15:55:05'),
(490, 65, 4, 1, 'Documentary_Lasha_Murjikneli_GEO.mp3', '2022-05-18 15:55:05'),
(491, 66, 4, 2, 'Documentary_Laura_Beth_ Ezzel_ENG.mp3', '2022-05-18 15:55:05'),
(492, 67, 4, 1, 'Documentary_Levan_Inasaridze_GEO.mp3', '2022-05-18 15:55:05'),
(493, 67, 4, 2, 'Documentary_Levan_Inasaridze_ENG.mp3', '2022-05-18 15:55:05'),
(494, 67, 4, 3, 'Documentary_Levan_Inasaridze_RUS.mp3', '2022-05-18 15:55:05'),
(495, 68, 4, 1, 'Documentary_Levan_Khochiashvili_GEO.mp3', '2022-05-18 15:55:05'),
(496, 72, 4, 1, 'Documentary_Luka_Akhaladze_GEO.mp3', '2022-05-18 15:55:05'),
(497, 72, 4, 2, 'Documentary_Luka_Akhaladze_ENG.mp3', '2022-05-18 15:55:05'),
(498, 74, 4, 1, 'Documentary_Maia_Khmaladze_GEO.mp3', '2022-05-18 15:55:05'),
(499, 75, 4, 1, 'Documentary_Maia_Khmaladze_GEO V2.mp3', '2022-05-18 15:55:05'),
(500, 77, 4, 1, 'Documentary_Mariam_Barnabishvili_GEO.mp3', '2022-05-18 15:55:05'),
(501, 77, 4, 2, 'Documentary_Mariam_Barnabishvili_ENG.mp3', '2022-05-18 15:55:05'),
(502, 78, 4, 1, 'Documentary_Maridea_Gelashvili_GEO.mp3', '2022-05-18 15:55:05'),
(503, 78, 4, 2, 'Documentary_Maridea_Gelashvili_ENG.mp3', '2022-05-18 15:55:05'),
(504, 78, 4, 3, 'Documentary_Maridea_Gelashvili_RUS.mp3', '2022-05-18 15:55:05'),
(505, 79, 4, 2, 'Documentary_Mark_Stahr_ENG.mp3', '2022-05-18 15:55:05'),
(506, 80, 4, 2, 'Documentary_Mark_Stephenson_ENG.mp3', '2022-05-18 15:55:05'),
(507, 83, 4, 1, 'Documentary_Mikheil_Diasamidze_GEO.mp3', '2022-05-18 15:55:05'),
(508, 85, 4, 1, 'Documentary_Mirian_Jejelava_GEO.mp3', '2022-05-18 15:55:05'),
(509, 86, 4, 1, 'Documentary_Misha_Abramishvili_GEO.mp3', '2022-05-18 15:55:05'),
(510, 87, 4, 1, 'Documentary_Misha_Romanovi_GEO.mp3', '2022-05-18 15:55:05'),
(511, 88, 4, 1, 'Documentary_Mishiko_Gogilava_GEO.mp3', '2022-05-18 15:55:05'),
(512, 89, 4, 1, 'Documentary_Nanka_Kokiashvili_GEO.mp3', '2022-05-18 15:55:05'),
(513, 92, 4, 1, 'Documentary_Nata_Asatiani_GEO.mp3', '2022-05-18 15:55:05'),
(514, 93, 4, 1, 'Documentary_Nata_Kharashvili_GEO.mp3', '2022-05-18 15:55:05'),
(515, 95, 4, 1, 'Documentary_Natia_Kharebashvili_GEO.mp3', '2022-05-18 15:55:05'),
(516, 96, 4, 1, 'Documentary_Nato_Sulkhanishvili_GEO.mp3', '2022-05-18 15:55:05'),
(517, 98, 4, 1, 'Documentary_Nica_Gverdtsiteli_GEO.mp3', '2022-05-18 15:55:05'),
(518, 99, 4, 1, 'Documentary_Nika_Ramazashvili_GEO.mp3', '2022-05-18 15:55:05'),
(519, 99, 4, 2, 'Documentary_Nika_Ramazashvili_ENG.mp3', '2022-05-18 15:55:05'),
(520, 100, 4, 1, 'Documentary_Nina_Ninidze_GEO.mp3', '2022-05-18 15:55:05'),
(521, 100, 4, 3, 'Documentary_Nina_Ninidze_RUS.mp3', '2022-05-18 15:55:05'),
(522, 101, 4, 3, 'Documentary_Nina_Sarkisyan_RUS.mp3', '2022-05-18 15:55:05'),
(523, 101, 4, 2, 'Documentary_Nina_Sarkisyan_ENG.mp3', '2022-05-18 15:55:05'),
(524, 102, 4, 1, 'Documentary__Nini_Metreveli_GEO.mp3', '2022-05-18 15:55:05'),
(525, 102, 4, 2, 'Documentary__Nini_Metreveli_ENG.mp3', '2022-05-18 15:55:05'),
(526, 103, 4, 1, 'Documentary_Nina_Kikacha_GEO.mp3', '2022-05-18 15:55:05'),
(527, 103, 4, 3, 'Documentary_Nina_Kikacha_RUS.mp3', '2022-05-18 15:55:05'),
(528, 104, 4, 1, 'Documentary_Nino_Mumladze_GEO.mp3', '2022-05-18 15:55:05'),
(529, 104, 4, 3, 'Documentary_Nino_Mumladze_RUS.mp3', '2022-05-18 15:55:05'),
(530, 107, 4, 1, 'Documentary_Omar_Zurabashvili_GEO.mp3', '2022-05-18 15:55:05'),
(531, 108, 4, 1, 'Documentary_Omo_Gadabadze_GEO.mp3', '2022-05-18 15:55:05'),
(532, 111, 4, 1, 'Documentary_Qeti_Qoridze_GEO.mp3', '2022-05-18 15:55:05'),
(533, 112, 4, 5, 'Documentary_Rabil_Ismailov_AZE.mp3', '2022-05-18 15:55:05'),
(534, 115, 4, 1, 'Documentary_Ruska_Ustiashvili_GEO.mp3', '2022-05-18 15:55:05'),
(535, 115, 4, 2, 'Documentary_Ruska_Ustiashvili_ENG.mp3', '2022-05-18 15:55:05'),
(536, 116, 4, 1, 'Documentary_Sandro_Lashkhia_GEO.mp3', '2022-05-18 15:55:05'),
(537, 117, 4, 3, 'Documentary_Sanka_Lapshin_RUS.mp3', '2022-05-18 15:55:05'),
(538, 121, 4, 1, 'Documentary_Sopho_Lomjaria_GEO.mp3', '2022-05-18 15:55:05'),
(539, 121, 4, 2, 'Documentary_Sopho_Lomjaria_ENG.mp3', '2022-05-18 15:55:05'),
(540, 121, 4, 3, 'Documentary_Sopho_Lomjaria_RUS.mp3', '2022-05-18 15:55:05'),
(541, 122, 4, 1, 'Documentary_Sopho_Shonia_GEO.mp3', '2022-05-18 15:55:05'),
(542, 122, 4, 11, 'Documentary_Sopho_Shonia_ESP.mp3', '2022-05-18 15:55:05'),
(543, 123, 4, 2, 'Documentary_Stefanie_Veneziano_ENG.mp3', '2022-05-18 15:55:05'),
(544, 124, 4, 1, 'Documentary_Taia_Gamtenadze_GEO.mp3', '2022-05-18 15:55:05'),
(545, 125, 4, 1, 'Documentary_Tako_Okropiridze_GEO.mp3', '2022-05-18 15:55:05'),
(546, 126, 4, 1, 'Documentary_Tamo_Lashkhia_GEO.mp3', '2022-05-18 15:55:05'),
(547, 127, 4, 1, 'Documentary_Tamta_Asatiani_GEO.mp3', '2022-05-18 15:55:05'),
(548, 128, 4, 1, 'Documentary_Tamta_Asatiani_2_GEO.mp3', '2022-05-18 15:55:05'),
(549, 129, 4, 1, 'Documentary_Tamta_Kvaracxelia_GEO.mp3', '2022-05-18 15:55:05'),
(550, 129, 4, 2, 'Documentary_Tamta_Kvaracxelia_ENG.mp3', '2022-05-18 15:55:05'),
(551, 129, 4, 3, 'Documentary_Tamta_Kvaracxelia_RUS.mp3', '2022-05-18 15:55:05'),
(552, 130, 4, 1, 'Documentary_Tata_Gvedashvili_GEO.mp3', '2022-05-18 15:55:05'),
(553, 131, 4, 1, 'Documentary_Tatia_Kuchukhidze_GEO.mp3', '2022-05-18 15:55:05'),
(554, 133, 4, 1, 'Documentary_Temo_Lobjanidze_GEO.mp3', '2022-05-18 15:55:05'),
(555, 133, 4, 2, 'Documentary_Temo_Lobjanidze_ENG.mp3', '2022-05-18 15:55:05'),
(556, 134, 4, 1, 'Documentary_Teona_Darchia_GEO.mp3', '2022-05-18 15:55:05'),
(557, 135, 4, 1, 'Documentary_Teona_Guramishvili_GEO.mp3', '2022-05-18 15:55:05'),
(558, 136, 4, 1, 'Documentary_Tiko_Demetradze_GEO.mp3', '2022-05-18 15:55:05'),
(559, 138, 4, 1, 'Documentary_Vano_Kurasbediani_GEO.mp3', '2022-05-18 15:55:05'),
(560, 138, 4, 2, 'Documentary_Vano_Kurasbediani_ENG.mp3', '2022-05-18 15:55:05'),
(561, 138, 4, 3, 'Documentary_Vano_Kurasbediani_RUS.mp3', '2022-05-18 15:55:05'),
(562, 139, 4, 1, 'Documentary_Vaniko_Tarkhnishvili_GEO.mp3', '2022-05-18 15:55:05'),
(563, 140, 4, 2, 'Documentary_Vlad_Kocharian_ENG.mp3', '2022-05-18 15:55:05'),
(564, 140, 4, 3, 'Documentary_Vlad_Kocharian_RUS.mp3', '2022-05-18 15:55:05'),
(565, 142, 4, 2, 'Documentary_William_King_ENG.mp3', '2022-05-18 15:55:05'),
(566, 144, 4, 1, 'Documentary_Zura_Gorgadze_GEO.mp3', '2022-05-18 15:55:05'),
(567, 146, 4, 1, 'Documentary_Zviad_Dolidze_GEO.mp3', '2022-05-18 15:55:05'),
(570, 150, 1, 1, 'Artistic_Teko_Chubinidze_GEO.mp3', '2022-05-27 13:50:05'),
(571, 150, 2, 1, 'IVR_Teko_Chubinidze_GEO.mp3', '2022-05-27 13:50:05'),
(572, 150, 3, 1, 'Commercial_Teko_Chubinidze_GEO.mp3', '2022-05-27 13:50:05'),
(573, 150, 4, 1, 'Documentary_Teko_Chubinidze_GEO.mp3', '2022-05-27 13:50:05'),
(574, 151, 1, 1, 'Artistic_Zanda_Rella_GEO.mp3', '2022-05-27 13:53:09'),
(575, 151, 2, 1, 'IVR_Zanda_Rella_GEO.mp3', '2022-05-27 13:53:09'),
(576, 151, 3, 1, 'Commercial_Zanda_Rella_GEO.mp3', '2022-05-27 13:53:33'),
(577, 151, 4, 1, 'Documentary_Zanda_Rella_GEO.mp3', '2022-05-27 13:53:55'),
(578, 152, 1, 1, 'Artistic_Nia_Tsendeliani_GEO.mp3', '2022-05-27 13:55:03'),
(579, 152, 2, 1, 'IVR_Nia_Tsendeliani_GEO.mp3', '2022-05-27 13:55:03'),
(580, 152, 3, 1, 'Commercial_Nia_Tsendeliani_GEO.mp3', '2022-05-27 13:55:03'),
(581, 152, 4, 1, 'Documentary_Nia_Tsendeliani_GEO.mp3', '2022-05-27 13:55:03');

-- --------------------------------------------------------

--
-- Table structure for table `voice_categories`
--

CREATE TABLE `voice_categories` (
  `id` int(11) NOT NULL,
  `name_ge` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `voice_categories`
--

INSERT INTO `voice_categories` (`id`, `name_ge`, `name_en`, `name_ru`) VALUES
(1, 'მხატვრული', 'Artistic', 'Художественный'),
(2, 'ავტომოპასუხე', 'IVR', 'Автоответчик'),
(3, 'კომერციული', 'Commercial', 'Коммерческий'),
(4, 'თხრობითი', 'Documentary', 'Документальный');

-- --------------------------------------------------------

--
-- Table structure for table `voice_languages`
--

CREATE TABLE `voice_languages` (
  `id` int(11) NOT NULL,
  `name_ge` varchar(32) NOT NULL,
  `name_en` varchar(32) NOT NULL,
  `name_ru` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `dom` varchar(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `voice_languages`
--

INSERT INTO `voice_languages` (`id`, `name_ge`, `name_en`, `name_ru`, `active`, `dom`) VALUES
(1, 'ქართული', 'Georgian', 'Грузинский', 1, 'GE'),
(2, 'ინგლისური', 'English', 'Английский', 1, 'en'),
(3, 'რუსული', 'Russian', 'Русский', 1, 'ru'),
(4, 'სომხური', 'Armenian', 'Армянский', 1, 'am'),
(5, 'აზერბაიჯანული', 'Azerbaijani', 'Азербайджанский', 1, 'az'),
(6, 'უკრაინული', 'Ukrainian', 'Украинский', 1, 'ua'),
(7, 'თურქული', 'Turkish', 'Турецкий', 0, 'tr'),
(8, 'ფრანგული', 'French', 'Французский', 0, 'fr'),
(9, 'გერმანული', 'German', 'Немецкий', 0, 'de'),
(10, 'იტალიური', 'Italian', 'Итальянский', 0, 'it'),
(11, 'ესპანური', 'Spanish', 'Испанский', 1, 'es'),
(12, 'ჩინური', 'Chinese', 'Китайский', 0, 'ch'),
(13, 'ყაზახური', 'Kazakhian', 'Казахский', 0, 'kz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `actor_genders`
--
ALTER TABLE `actor_genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `actor_language_prices`
--
ALTER TABLE `actor_language_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricecalc`
--
ALTER TABLE `pricecalc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voices`
--
ALTER TABLE `voices`
  ADD PRIMARY KEY (`1`),
  ADD KEY `FK_voices_voiccat` (`voice_category_id`),
  ADD KEY `FK_voices_actors` (`actor_id`);

--
-- Indexes for table `voice_categories`
--
ALTER TABLE `voice_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voice_languages`
--
ALTER TABLE `voice_languages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `actor_genders`
--
ALTER TABLE `actor_genders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `actor_language_prices`
--
ALTER TABLE `actor_language_prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `pricecalc`
--
ALTER TABLE `pricecalc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `voices`
--
ALTER TABLE `voices`
  MODIFY `1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=582;

--
-- AUTO_INCREMENT for table `voice_categories`
--
ALTER TABLE `voice_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `voice_languages`
--
ALTER TABLE `voice_languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `voices`
--
ALTER TABLE `voices`
  ADD CONSTRAINT `FK_voices_actors` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_voices_voiccat` FOREIGN KEY (`voice_category_id`) REFERENCES `voice_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
