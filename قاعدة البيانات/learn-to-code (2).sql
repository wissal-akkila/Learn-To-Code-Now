-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2025 at 12:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn-to-code`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-admin@gmail.com|127.0.0.1', 'i:1;', 1753264842),
('laravel-cache-admin@gmail.com|127.0.0.1:timer', 'i:1753264842;', 1753264842),
('laravel-cache-gf@hjhgh.com|127.0.0.1', 'i:1;', 1753260172),
('laravel-cache-gf@hjhgh.com|127.0.0.1:timer', 'i:1753260172;', 1753260172);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `completed_courses`
--

CREATE TABLE `completed_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `completed_courses`
--

INSERT INTO `completed_courses` (`id`, `user_id`, `course_id`, `completed_at`, `created_at`, `updated_at`) VALUES
(14, 10, 13, NULL, '2025-07-31 12:55:58', '2025-07-31 12:55:58'),
(15, 10, 11, NULL, '2025-07-31 12:56:09', '2025-07-31 12:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'jhuytuy', 'kjhgft', 'huyft@gmail.com', '54568', 'oiuytrt', '2025-07-18 10:36:35', '2025-07-18 10:36:35'),
(3, 'ghf', 'hgftg', 'asdds@jjhgvm', '214587', 'gft', '2025-07-21 05:17:18', '2025-07-21 05:17:18'),
(4, 'wissal', 'kjhgft', 'akkilawissal@gmail.com', '0599492410', 'jgytfr', '2025-07-21 05:18:16', '2025-07-21 05:18:16'),
(5, 'kjkl', 'kju', 'kjljk@gmail.com', '541', 'jhyli', '2025-07-22 18:25:35', '2025-07-22 18:25:35'),
(6, 'asdas', 'asdasd', 'asadsdas3ZFD@SFSDF.DSF', '1231234234', '2333333333333334', '2025-07-25 14:18:57', '2025-07-25 14:18:57'),
(7, 'mnbhgfd', 'vgf', 'bh@gmail.com', '4744', 'mnbhgy', '2025-07-29 10:24:43', '2025-07-29 10:24:43'),
(8, 'wissal', 'akkil', 'wissal@gmail.com', '5452154', 'kjkhugytuy', '2025-07-31 05:41:26', '2025-07-31 05:41:26'),
(13, 'test', 'test', 'test@gmail.com', '435245', 'kjhgf', '2025-07-31 07:19:50', '2025-07-31 07:19:50');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'in_progress',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `slug`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(7, 'HTML', 'html', 'Standard markup language used to create web page structure', NULL, 'in_progress', '2025-07-19 13:12:00', '2025-07-20 01:22:51'),
(8, 'CSS', 'css', 'Stylesheet language used to design and layout HTML elements', NULL, 'in_progress', '2025-07-19 13:12:21', '2025-07-20 01:22:51'),
(9, 'C#', 'c', 'Object-oriented programming language developed by Microsoft, mainly for Windows applications', NULL, 'in_progress', '2025-07-19 13:12:55', '2025-07-20 01:22:51'),
(10, 'PHP', 'php', 'Server-side scripting language used to build dynamic web applications', NULL, 'in_progress', '2025-07-19 13:13:14', '2025-07-20 01:22:51'),
(11, 'Bootstrap', 'bootstrap', 'Front-end framework for building responsive and mobile-first websites', NULL, 'in_progress', '2025-07-19 13:13:32', '2025-07-20 01:22:51'),
(12, 'Python', 'python', 'High-level, versatile programming language known for readability and simplicity', NULL, 'in_progress', '2025-07-19 13:13:53', '2025-07-20 01:22:51'),
(13, 'OOP', 'oop', '(Object-Oriented Programming) A programming paradigm based on objects and classes', NULL, 'in_progress', '2025-07-19 13:14:16', '2025-07-20 01:22:51'),
(14, 'Laravel', 'laravel', 'PHP web framework for building modern, robust, and secure web applications', NULL, 'in_progress', '2025-07-19 13:14:38', '2025-07-20 01:22:51'),
(15, 'jQuery', 'jquery', 'JavaScript library that simplifies DOM manipulation and AJAX calls', NULL, 'in_progress', '2025-07-19 13:14:55', '2025-07-20 01:22:51'),
(16, 'Vue.js', 'vuejs', 'Progressive JavaScript framework for building interactive user interfaces', NULL, 'in_progress', '2025-07-19 13:15:13', '2025-07-20 01:22:51');

-- --------------------------------------------------------

--
-- Table structure for table `course_results`
--

CREATE TABLE `course_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `score` double NOT NULL,
  `passed` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_results`
--

INSERT INTO `course_results` (`id`, `user_id`, `course_id`, `score`, `passed`, `created_at`, `updated_at`) VALUES
(8, 10, 11, 1, 0, '2025-07-24 10:55:31', '2025-07-24 10:55:31'),
(9, 10, 12, 6, 0, '2025-07-24 10:59:09', '2025-07-24 10:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `course_user`
--

CREATE TABLE `course_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_user`
--

INSERT INTO `course_user` (`id`, `user_id`, `course_id`, `created_at`, `updated_at`) VALUES
(18, 10, 8, NULL, NULL),
(19, 10, 13, NULL, NULL),
(20, 10, 11, NULL, NULL),
(21, 10, 12, NULL, NULL),
(22, 10, 10, NULL, NULL),
(25, 10, 9, NULL, NULL),
(44, 10, 14, NULL, NULL),
(45, 10, 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `example` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `example_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `course_id`, `title`, `content`, `example`, `slug`, `created_at`, `updated_at`, `example_description`, `order`) VALUES
(22, 7, 'What is HTML?', '- HTML stands for Hyper Text Markup Language\r\n- HTML is the standard markup language for creating Web pages\r\n- HTML describes the structure of a Web page\r\n- HTML consists of a series of elements\r\n- HTML elements tell the browser how to display the content\r\n- HTML elements label pieces of content such as \"this is a heading\", \"this is a paragraph\", \"this is a link\", etc.', 'A Simple HTML Document\r\n<!DOCTYPE html>\r\n<html>\r\n<head>\r\n<title>Page Title</title>\r\n</head>\r\n<body>\r\n\r\n<h1>My First Heading</h1>\r\n<p>My first paragraph.</p>\r\n\r\n</body>\r\n</html>', NULL, '2025-07-21 06:32:19', '2025-07-21 06:32:19', 'Example Explained\r\n- The <!DOCTYPE html> declaration defines that this document is an HTML5 document\r\n- The <html> element is the root element of an HTML page\r\n- The <head> element contains meta information about the HTML page\r\n- The <title> element specifies a title for the HTML page (which is shown in the browser\'s title bar or in the page\'s tab)\r\n- The <body> element defines the document\'s body, and is a container for all the visible contents, such as headings, paragraphs, images, hyperlinks, tables, lists, etc.\r\n- The <h1> element defines a large heading\r\n- The <p> element defines a paragraph', NULL),
(23, 7, 'What is an HTML Element?', 'An HTML element is defined by a start tag, some content, and an end tag:\r\n\r\n<tagname> Content goes here... </tagname>\r\nThe HTML element is everything from the start tag to the end tag:\r\n\r\n<h1>My First Heading</h1>\r\n<p>My first paragraph.</p>', 'Start tag   	Element content	      End tag\r\n<h1>	        My First Heading	        </h1>\r\n<p>	                 My first paragraph.	         </p>\r\n<br>                 	none	                  none', NULL, '2025-07-21 06:35:35', '2025-07-21 06:35:35', 'Some HTML elements have no content (like the <br> element). These elements are called empty elements. Empty elements do not have an end tag!', NULL),
(24, 7, 'HTML Editors', 'Learn HTML Using Notepad or TextEdit\r\nWeb pages can be created and modified by using professional HTML editors.\r\n\r\nHowever, for learning HTML we recommend a simple text editor like Notepad (PC) or TextEdit (Mac).\r\n\r\nWe believe that using a simple text editor is a good way to learn HTML.\r\n\r\nFollow the steps below to create your first web page with Notepad or TextEdit.\r\n\r\nStep 1: Open Notepad (PC)\r\nWindows 8 or later:\r\n\r\nOpen the Start Screen (the window symbol at the bottom left on your screen). Type Notepad.\r\n\r\nWindows 7 or earlier:\r\n\r\nOpen Start > Programs > Accessories > Notepad\r\n\r\nStep 1: Open TextEdit (Mac)\r\nOpen Finder > Applications > TextEdit\r\n\r\nAlso change some preferences to get the application to save files correctly. In Preferences > Format > choose \"Plain Text\"\r\n\r\nThen under \"Open and Save\", check the box that says \"Display HTML files as HTML code instead of formatted text\".\r\n\r\nThen open a new document to place the code.\r\n\r\nStep 2: Write Some HTML\r\nWrite or copy the following HTML code into Notepad:', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n<title>Page Title</title>\r\n</head>\r\n<body>\r\n\r\n<h1>This is a Heading</h1>\r\n<p>This is a paragraph.</p>\r\n\r\n</body>\r\n</html>', NULL, '2025-07-21 06:45:11', '2025-07-21 06:45:11', 'With our free online editor, you can edit the HTML code and view the result in your browser.\r\n\r\nIt is the perfect tool when you want to test code fast. It also has color coding and the ability to save and share code with others:', NULL),
(26, 7, 'HTML Documents', 'All HTML documents must start with a document type declaration: <!DOCTYPE html>.\r\n\r\nThe HTML document itself begins with <html> and ends with </html>.\r\n\r\nThe visible part of the HTML document is between <body> and </body>.\r\n\r\n\r\nThe <!DOCTYPE> Declaration\r\nThe <!DOCTYPE> declaration represents the document type, and helps browsers to display web pages correctly.\r\n\r\nIt must only appear once, at the top of the page (before any HTML tags).\r\n\r\nThe <!DOCTYPE> declaration is not case sensitive.\r\n\r\nThe <!DOCTYPE> declaration for HTML5 is:\r\n<!DOCTYPE html>\r\n\r\n\r\nHTML Headings\r\nHTML headings are defined with the <h1> to <h6> tags.\r\n\r\n<h1> defines the most important heading. <h6> defines the least important heading: \r\n<h1>This is heading 1</h1>\r\n<h2>This is heading 2</h2>\r\n<h3>This is heading 3</h3>\r\n\r\n\r\n\r\nHTML Paragraphs\r\nHTML paragraphs are defined with the <p> tag:\r\n<p>This is a paragraph.</p>\r\n<p>This is another paragraph.</p>\r\n\r\nHTML links are defined with the <a> tag:\r\n<a href=\"https://www.w3schools.com\">This is a link</a>\r\n\r\nThe link\'s destination is specified in the href attribute. \r\n\r\nAttributes are used to provide additional information about HTML elements.\r\n\r\nYou will learn more about attributes in a later chapter.\r\n\r\n\r\nHTML Images\r\nHTML images are defined with the <img> tag.\r\n\r\nThe source file (src), alternative text (alt), width, and height are provided as attributes:\r\n<img src=\"learn to code no.jpg\" alt=\"learn to code now.com\" width=\"104\" height=\"142\">\r\n\r\n\r\nHow to View HTML Source\r\nHave you ever seen a Web page and wondered \"Hey! How did they do that?\"\r\n\r\nView HTML Source Code:\r\nClick CTRL + U in an HTML page, or right-click on the page and select \"View Page Source\". This will open a new tab containing the HTML source code of the page.\r\n\r\nInspect an HTML Element:\r\nRight-click on an element (or a blank area), and choose \"Inspect\" to see what elements are made up of (you will see both the HTML and the CSS). You can also edit the HTML or CSS on-the-fly in the Elements or Styles panel that opens.', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n<title>Page Title</title>\r\n</head>\r\n<body>\r\n\r\n<h1>This is a Heading</h1>\r\n<p>This is a paragraph.</p>\r\n<a href=\"https://www.w3schools.com\">This is a link</a>\r\n<img src=\"w3schools.jpg\" alt=\"W3Schools.com\" width=\"104\" height=\"142\">\r\n\r\n</body>\r\n</html', NULL, '2025-07-21 06:54:20', '2025-07-21 06:54:20', 'HTML Basic Examples', NULL),
(27, 8, 'What is CSS?', '- CSS stands for Cascading Style Sheets\r\n- CSS describes how HTML elements are to be displayed on screen, paper, or in other media\r\n- CSS saves a lot of work. It can control the layout of multiple web pages all at once\r\n- External stylesheets are stored in CSS files\r\n\r\nCSS Demo - One HTML Page - Multiple Styles!\r\nHere we will show one HTML page displayed with four different stylesheets. Click on the \"Stylesheet 1\", \"Stylesheet 2\", \"Stylesheet 3\", \"Stylesheet 4\" links below to see the different styles\r\n\r\n\r\nWhy Use CSS?\r\nCSS is used to define styles for your web pages, including the design, layout and variations in display for different devices and screen sizes.\r\n\r\n\r\nCSS Solved a Big Problem\r\nHTML was NEVER intended to contain tags for formatting a web page!\r\n\r\nHTML was created to describe the content of a web page, like:\r\n\r\n<h1>This is a heading</h1>\r\n\r\n<p>This is a paragraph.</p>\r\n\r\nWhen tags like <font>, and color attributes were added to the HTML 3.2 specification, it started a nightmare for web developers. Development of large websites, where fonts and color information were added to every single page, became a long and expensive process.\r\n\r\nTo solve this problem, the World Wide Web Consortium created CSS.\r\n\r\nCSS removed the style formatting from the HTML page!\r\n\r\nCSS Saves a Lot of Work!\r\nThe style definitions are normally saved in external .css files.\r\n\r\nWith an external stylesheet file, you can change the look of an entire website by changing just one file!', '<!DOCTYPE html>\r\n<html lang=\"en\">\r\n\r\n<head>\r\n    <meta charset=\"UTF-8\">\r\n   \r\n     <meta charset=\"UTF-8\">\r\n     <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n     <title>home</title>\r\n   \r\n  \r\n        \r\n<style>\r\n    body {\r\n        background-color: lightblue;\r\n    }\r\n\r\n    h1 {\r\n        color: white;\r\n        text-align: center;\r\n    }\r\n\r\n    p {\r\n        font-family: verdana;\r\n        font-size: 20px;\r\n    }\r\n</style>\r\n       \r\n   \r\n</head>\r\n\r\n<body>\r\n</body>\r\n\r\n</html>', NULL, '2025-07-21 07:03:15', '2025-07-21 07:03:15', 'the css write in tag           <head>  \r\n                                             <style>\r\n                                             </style>\r\n                                         </head>', NULL),
(29, 8, 'CSS Syntax', 'The selector points to the HTML element you want to style.\r\n\r\nThe declaration block contains one or more declarations separated by semicolons.\r\n\r\nEach declaration includes a CSS property name and a value, separated by a colon.\r\n\r\nMultiple CSS declarations are separated with semicolons, and declaration blocks are surrounded by curly braces.', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n<style>\r\np {\r\n  color: red;\r\n  text-align: center;\r\n} \r\n</style>\r\n</head>\r\n<body>\r\n\r\n<p>Hello World!</p>\r\n<p>These paragraphs are styled with CSS.</p>\r\n\r\n</body>\r\n</html>', NULL, '2025-07-21 11:47:46', '2025-07-21 11:47:46', 'Example Explained\r\n- p is a selector in CSS (it points to the HTML element you want to style: <p>).\r\n- color is a property, and red is the property value\r\n- text-align is a property, and center is the property value', NULL),
(30, 12, 'What is Python?', 'Python is a popular programming language. It was created by Guido van Rossum, and released in 1991.\r\n\r\nIt is used for:\r\n\r\n- development (server-side),\r\n- software development,\r\n- mathematics,\r\n- system scripting.\r\nWhat can Python do?\r\n- Python can be used on a server to create web applications.\r\n- Python can be used alongside software to create workflows.\r\n- Python can connect to database systems. It can also read and modify files.\r\n-Python can be used to handle big data and perform complex mathematics.\r\n- Python can be used for rapid prototyping, or for production-ready software development.\r\n\r\n\r\nWhy Python?\r\n- Python works on different platforms (Windows, Mac, Linux, Raspberry Pi, etc).\r\n- Python has a simple syntax similar to the English language.\r\n- Python has syntax that allows developers to write programs with fewer lines than some other programming languages.\r\n- Python runs on an interpreter system, meaning that code can be executed as soon as it is written. This means that prototyping can be very quick.\r\n- Python can be treated in a procedural way, an object-oriented way or a functional way.\r\n\r\n\r\nGood to know\r\n\r\n-The most recent major version of Python is Python 3, which we shall be using in this tutorial. However, Python 2, although not being updated with -anything other than security updates, is still quite popular.\r\n- In this tutorial Python will be written in a text editor. It is possible to write Python in an Integrated Development Environment, such as Thonny, Pycharm, Netbeans or Eclipse which are particularly useful when managing larger collections of Python files.\r\n- Python Syntax compared to other programming languages\r\n- Python was designed for readability, and has some similarities to the English language with influence from mathematics.\r\n- Python uses new lines to complete a command, as opposed to other programming languages which often use semicolons or parentheses.\r\n- Python relies on indentation, using whitespace, to define scope; such as the scope of loops, functions and classes. Other programming languages often use curly-brackets for this purpose.', 'print(\"Hello, World!\")', NULL, '2025-07-21 11:53:16', '2025-07-21 11:53:16', 'return Hello, World!', NULL),
(31, 12, 'Python Getting Started', 'Python Install\r\nMany PCs and Macs will have python already installed.\r\n\r\nTo check if you have python installed on a Windows PC, search in the start bar for Python or run the following on the Command Line (cmd.exe)\r\nC:\\Users\\Your Name>python --version\r\n\r\nTo check if you have python installed on a Linux or Mac, then on linux open the command line or on Mac open the Terminal and type:\r\npython --version\r\n\r\n\r\nIf you find that you do not have Python installed on your computer, then you can download it for free from the following website: https://www.python.org/\r\n\r\n\r\nPython Quickstart\r\nPython is an interpreted programming language, this means that as a developer you write Python (.py) files in a text editor and then put those files into the python interpreter to be executed.\r\nprint(\"Hello, World!\")\r\n\r\n\r\nSimple as that. Save your file. Open your command line, navigate to the directory where you saved your file, and run:\r\nC:\\Users\\Your Name>python hello.py\r\n\r\n\r\n\r\nLet\'s write our first Python file, called hello.py, which can be done in any text editor:', 'no example', NULL, '2025-07-21 11:58:11', '2025-07-21 11:58:11', '-', NULL),
(32, 12, 'Python Syntax', 'Execute Python Syntax\r\nAs we learned in the previous page, Python syntax can be executed by writing directly in the Command Line:\r\n\r\n>>> print(\"Hello, World!\")\r\nHello, World!\r\n\r\n\r\nOr by creating a python file on the server, using the .py file extension, and running it in the Command Line:\r\nC:\\Users\\Your Name>python myfile.py\r\n\r\nPython Indentation\r\nIndentation refers to the spaces at the beginning of a code line.\r\n\r\nWhere in other programming languages the indentation in code is for readability only, the indentation in Python is very important.\r\nPython uses indentation to indicate a block of code.', 'example 1 :\r\nif 5 > 2:\r\n  print(\"Five is greater than two!\")\r\n\r\nexample 2 :\r\nSyntax Error:\r\nif 5 > 2:\r\nprint(\"Five is greater than two!\")\r\n\r\nexample 3 :\r\nif 5 > 2:\r\n print(\"Five is greater than two!\") \r\nif 5 > 2:\r\n        print(\"Five is greater than two!\") \r\n\r\nexample 4:\r\nSyntax Error:\r\nif 5 > 2:\r\n print(\"Five is greater than two!\")\r\n        print(\"Five is greater than two!\")', NULL, '2025-07-21 12:05:56', '2025-07-21 12:05:56', '1. return  Five is greater than two!\r\n\r\n2.Python will give you an error if you skip the indentation:\r\n\r\n3: The number of spaces is up to you as a programmer, the most common use is four, but it has to be at least one.\r\n\r\n4: You have to use the same number of spaces in the same block of code, otherwise Python will give you an error:', NULL),
(33, 12, 'Python Comments', '- Comments can be used to explain Python code.\r\n- Comments can be used to make the code more readable.\r\n- Comments can be used to prevent execution when testing code.\r\n\r\nCreating a Comment by #\r\n\r\nMultiline Comments\r\nPython does not really have a syntax for multiline comments.', 'example 1 :  #This is a comment\r\n                    print(\"Hello, World!\")\r\n\r\n\r\nexample 2 :       #print(\"Hello, World!\")\r\n                        print(\"Cheers, Mate!\")\r\n\r\n\r\nexample 3 :          #This is a comment\r\n                             #written in\r\n                             #more than just one line\r\n                             print(\"Hello, World!\")\r\n\r\nexample 4 :        \r\n\r\n            \"\"\"\r\n                                     This is a comment\r\n                                      written in\r\n                                      than just one line\r\n                                      \"\"\"\r\n                                          print(\"Hello, World!\")', NULL, '2025-07-21 12:13:58', '2025-07-21 12:13:58', 'example 1 : Comments starts with a #, and Python will ignore them:\r\n\r\n\r\nexample 2 : A comment does not have to be text that explains the code, it can also be used to prevent Python from executing code\r\n\r\n\r\nexample 3 : To add a multiline comment you could insert a # for each line\r\n\r\n\r\nexample 4 : you can add a multiline string (triple quotes) in your code, and place your comment inside it', NULL),
(34, 12, 'Python Variables', 'Variables\r\nVariables are containers for storing data values.\r\n\r\nCreating Variables\r\nPython has no command for declaring a variable.\r\n\r\n\r\nGet the Type\r\nYou can get the data type of a variable with the type() function.\r\n\r\n\r\nSingle or Double Quotes?\r\nString variables can be declared either by using single or double quotes:\r\nx = \"John\"\r\n# is the same as\r\nx = \'John\'\r\n\r\n\r\n\r\nCase-Sensitive\r\nVariable names are case-sensitive.\r\na = 4\r\nA = \"Sally\"\r\n#A will not overwrite a', 'example 1:             x = 5\r\n                              y = \"John\"\r\n                                   print(x)\r\n                                   print(y)\r\n\r\n\r\nexample 2:             x = 4       # x is of type int\r\n                               x = \"Sally\" # x is now of type str\r\n                                      print(x)\r\n\r\n\r\nexample 3:                  x = str(3)    # x will be \'3\'\r\n                                    y = int(3)    # y will be 3\r\n                                    z = float(3)  # z will be 3.0\r\n\r\n\r\nexample 4:                  x = 5\r\n                                    y = \"John\"\r\n                                      print(type(x))\r\n                                       print(type(y))', NULL, '2025-07-21 12:32:02', '2025-07-21 12:32:02', 'example 1:A variable is created the moment you first assign a value to it (return 5, john )\r\n\r\n\r\n\r\n\r\n\r\nexample 2:Variables do not need to be declared with any particular type, and can even change type after they have been set.\r\n\r\n\r\n\r\n\r\n\r\nexample 3:If you want to specify the data type of a variable, this can be done with casting\r\n\r\n\r\n\r\nexample 4:  type function', NULL),
(35, 12, 'Python - Variable Names', 'Variable Names\r\nA variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).\r\n\r\nRules for Python variables:\r\n\r\n- A variable name must start with a letter or the underscore character\r\n- A variable name cannot start with a number\r\n- A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )\r\n- Variable names are case-sensitive (age, Age and AGE are three different variables)\r\n- A variable name cannot be any of the Python keywords.\r\n\r\n\r\n\r\n\r\n\r\nMulti Words Variable Names\r\nVariable names with more than one word can be difficult to read.\r\n\r\nThere are several techniques you can use to make them more readable:\r\n\r\nCamel Case\r\nEach word, except the first, starts with a capital letter:\r\n\r\nmyVariableName = \"John\"\r\nPascal Case\r\nEach word starts with a capital letter:\r\n\r\nMyVariableName = \"John\"\r\nSnake Case\r\nEach word is separated by an underscore character:\r\n\r\nmy_variable_name = \"John\"', 'example 1:\r\n                 myvar = \"John\"\r\n                my_var = \"John\"\r\n                _my_var = \"John\"\r\n                myVar = \"John\"\r\n                 MYVAR = \"John\"\r\n                myvar2 = \"John\"\r\n\r\n\r\nexample 2:       \r\n                          2myvar = \"John\"\r\n                          my-var = \"John\"\r\n                          my var = \"John\"', NULL, '2025-07-21 12:36:37', '2025-07-21 12:36:37', 'example 1 :  Legal variable names\r\n\r\n\r\nexample 2 : Illegal variable names:', NULL),
(36, 12, 'Python Variables - Assign Multiple Values', 'Many Values to Multiple Variables', 'example 1 :          x, y, z = \"Orange\", \"Banana\", \"Cherry\"\r\n                                               print(x)\r\n                                               print(y)\r\n                                               print(z)\r\n\r\n\r\n\r\nexample 2 :               x = y = z = \"Orange\"\r\n                                           print(x)\r\n                                           print(y)\r\n                                           print(z\r\nexample 3:                        \r\n                                    fruits =[\"apple\", \"banana\", \"cherry\"]\r\n                                       x, y, z = fruits\r\n                                         print(x)\r\n                                         print(y)\r\n                                         print(z)', NULL, '2025-07-21 12:41:39', '2025-07-21 12:41:39', 'example 1 : Python allows you to assign values to multiple variables in one line:\r\n\r\n\r\n\r\nexample 2 :And you can assign the same value to multiple variables in one line:\r\n\r\n\r\n\r\n\r\nexample 3:If you have a collection of values in a list, tuple etc. Python allows you to extract the values into variables. This is called unpacking.', NULL),
(37, 12, 'Python - Output Variables', 'Output Variables\r\nThe Python print() function is often used to output variables.\r\nx = \"Python is awesome\"\r\nprint(x)', 'example 1 :\r\n\r\nx = \"Python\"\r\ny = \"is\"\r\nz = \"awesome\"\r\nprint(x, y, z)\r\n\r\n\r\nexample 2 :\r\nx = \"Python \"\r\ny = \"is \"\r\nz = \"awesome\"\r\nprint(x + y + z)\r\n\r\n\r\nexample 3 :\r\n\r\nx = 5\r\ny = 10\r\nprint(x + y)\r\n\r\n\r\n\r\nexample 4:\r\nx = 5\r\ny = \"John\"\r\nprint(x + y)\r\n\r\n\r\nexample 5:\r\nx = 5\r\ny = \"John\"\r\nprint(x, y)', NULL, '2025-07-21 12:47:51', '2025-07-21 12:47:51', 'example 1 :In the print() function, you output multiple variables, separated by a comma:\r\n\r\n\r\nexample 2 :You can also use the + operator to output multiple variables:\r\n\r\n\r\n\r\nexample 3 : For numbers, the + character works as a mathematical operato\r\n\r\n\r\nexample 4:In the print() function, when you try to combine a string and a number with the + operator, Python will give you an error:\r\n\r\n\r\nexample 5:The best way to output multiple variables in the print() function is to separate them with commas, which even support different data types:', NULL),
(38, 12, 'Python Data Types', 'Built-in Data Types\r\nIn programming, data type is an important concept.\r\n\r\nVariables can store data of different types, and different types can do different things.\r\n\r\nPython has the following data types built-in by default, in these categories:\r\n\r\nText Type:	        str\r\nNumeric Types:        int, float, complex\r\nSequence Types:     list, tuple, range\r\nMapping Type:	 dict\r\nSet Types:	         set, frozenset\r\nBoolean Type:  	bool\r\nBinary Types:	        bytes, bytearray, memoryview\r\nNone Type:	NoneType\r\nGetting the Data Type\r\nYou can get the data type of any object by using the type() function:\r\n\r\n\r\n--------------------------------------------------------------------------------\r\n\r\nSetting the Data Type\r\nIn Python, the data type is set when you assign a value to a variable:\r\n\r\nExample                                                          data type\r\nx = \"Hello World\"                                           	str	\r\nx = 20	                                                         int	\r\nx = 20.5                                                         	float	\r\nx = 1j	                                                        complex	\r\nx = [\"apple\", \"banana\", \"cherry\"]	                list	\r\nx = (\"apple\", \"banana\", \"cherry\")	                tuple	\r\nx = range(6)                                                     range	\r\nx = {\"name\" : \"John\", \"age\" : 36}                  	dict	\r\nx = {\"apple\", \"banana\", \"cherry\"}	                 set	\r\nx = frozenset({\"apple\", \"banana\", \"cherry\"})	 frozenset	\r\nx = True	bool	\r\nx = b\"Hello\"	                                                    bytes	\r\nx = bytearray(5)	                                           bytearray	\r\nx = memoryview(bytes(5))	                          memoryview	\r\nx = None	                                                           NoneType	\r\n\r\n--------------------------------------------------------------------------------------------------------------\r\n\r\nSetting the Specific Data Type\r\nIf you want to specify the data type, you can use the following constructor functions:\r\n\r\nexample                                                              data type                       \r\nx = str(\"Hello World\")	                                     str	\r\nx = int(20)	                                                      int	\r\nx = float(20.5)	                                                     float	\r\nx = complex(1j)	                                            complex	\r\nx = list((\"apple\", \"banana\", \"cherry\"))	             list	\r\nx = tuple((\"apple\", \"banana\", \"cherry\"))	             tuple	\r\nx = range(6)	                                                     range	\r\nx = dict(name=\"John\", age=36)	                      dict	\r\nx = set((\"apple\", \"banana\", \"cherry\"))	               set	\r\nx = frozenset((\"apple\", \"banana\", \"cherry\"))	frozenset	\r\nx = bool(5)	                                                  bool	\r\nx = bytes(5)	                                                   bytes	\r\nx = bytearray(5)	                                         bytearray	\r\nx = memoryview(bytes(5))	                         memoryview', 'x = 5\r\nprint(type(x))', NULL, '2025-07-21 12:59:33', '2025-07-21 12:59:33', 'Print the data type of the variable x:', NULL),
(39, 12, 'Python Numbers', 'Python Numbers\r\nThere are three numeric types in Python:\r\n\r\nint\r\nfloat\r\ncomplex\r\nVariables of numeric types are created when you assign a value to them:\r\n\r\n\r\nx = 1    # int\r\ny = 2.8  # float\r\nz = 1j   # complex\r\nTo verify the type of any object in Python, use the type() function:\r\n\r\nExample\r\nprint(type(x))\r\nprint(type(y))\r\nprint(type(z))\r\n\r\n\r\n------------------------------------------------------------------------------------\r\n\r\n\r\nInt\r\nInt, or integer, is a whole number, positive or negative, without decimals, of unlimited length.\r\n\r\nExample\r\nIntegers:\r\n\r\nx = 1\r\ny = 35656222554887711\r\nz = -3255522\r\n\r\nprint(type(x))\r\nprint(type(y))\r\nprint(type(z))\r\n\r\n\r\n------------------------------------------------------------------------------------\r\n\r\n\r\nFloat\r\nFloat, or \"floating point number\" is a number, positive or negative, containing one or more decimals.\r\n\r\nExample\r\nFloats:\r\n\r\nx = 1.10\r\ny = 1.0\r\nz = -35.59\r\n\r\nprint(type(x))\r\nprint(type(y))\r\nprint(type(z))\r\n\r\n\r\nFloat can also be scientific numbers with an \"e\" to indicate the power of 10.\r\n\r\nExample\r\nFloats:\r\n\r\nx = 35e3\r\ny = 12E4\r\nz = -87.7e100\r\n\r\nprint(type(x))\r\nprint(type(y))\r\nprint(type(z))\r\n\r\n\r\n\r\n------------------------------------------------------------------------------------\r\n\r\n\r\nComplex\r\nComplex numbers are written with a \"j\" as the imaginary part:\r\n\r\nExample\r\nComplex:\r\n\r\nx = 3+5j\r\ny = 5j\r\nz = -5j\r\n\r\nprint(type(x))\r\nprint(type(y))\r\nprint(type(z))\r\n\r\n\r\n\r\n-------------------------------------------------------------------------------\r\n\r\nRandom Number\r\nPython does not have a random() function to make a random number, but Python has a built-in module called random that can be used to make random numbers:\r\n\r\nExample\r\nImport the random module, and display a random number from 1 to 9:\r\n\r\nimport random\r\n\r\nprint(random.randrange(1, 10))', 'x = 1    # int\r\ny = 2.8  # float\r\nz = 1j   # complex\r\n\r\n#convert from int to float:\r\na = float(x)\r\n\r\n#convert from float to int:\r\nb = int(y)\r\n\r\n#convert from int to complex:\r\nc = complex(x)\r\n\r\nprint(a)\r\nprint(b)\r\nprint(c)\r\n\r\nprint(type(a))\r\nprint(type(b))\r\nprint(type(c))', NULL, '2025-07-21 13:05:33', '2025-07-21 13:05:33', 'Type Conversion\r\nYou can convert from one type to another with the int(), float(), and complex() methods:\r\nConvert from one type to another:', NULL),
(40, 12, 'Python Casting', 'Specify a Variable Type\r\nThere may be times when you want to specify a type on to a variable. This can be done with casting. Python is an object-orientated language, and as such it uses classes to define data types, including its primitive types.\r\n\r\nCasting in python is therefore done using constructor functions:\r\n\r\n-  int() - constructs an integer number from an integer literal, a float literal (by removing all decimals), or a string literal (providing the string represents a whole number)\r\n-  float() - constructs a float number from an integer literal, a float literal or a string literal (providing the string represents a float or an integer)\r\n-  str() - constructs a string from a wide variety of data types, including strings, integer literals and float literals', 'example 1:\r\nx = int(1)   # x will be 1\r\ny = int(2.8) # y will be 2\r\nz = int(\"3\") # z will be 3\r\n\r\n-----------------------------------\r\nexample 2:\r\nx = float(1)     # x will be 1.0\r\ny = float(2.8)   # y will be 2.8\r\nz = float(\"3\")   # z will be 3.0\r\nw = float(\"4.2\") # w will be 4.2\r\n\r\n-----------------------------------\r\nexample 3:\r\nx = str(\"s1\") # x will be \'s1\'\r\ny = str(2)    # y will be \'2\'\r\nz = str(3.0)  # z will be \'3.0\'', NULL, '2025-07-21 13:09:38', '2025-07-21 13:09:38', 'example 1: Integers:\r\n-----------------------------------\r\nexample 2:  Floats:\r\n-----------------------------------\r\nexample 3:  Strings:', NULL),
(41, 12, 'Python Strings', 'Strings\r\nStrings in python are surrounded by either single quotation marks, or double quotation marks.\r\n\r\n\'hello\' is the same as \"hello\".\r\n\r\nYou can display a string literal with the print() function:\r\nexample:\r\nprint(\"Hello\")\r\nprint(\'Hello\')\r\n----------------------------------------------------------------------------\r\n\r\nQuotes Inside Quotes\r\nYou can use quotes inside a string, as long as they don\'t match the quotes surrounding the string:\r\n\r\nExample\r\nprint(\"It\'s alright\")\r\nprint(\"He is called \'Johnny\'\")\r\nprint(\'He is called \"Johnny\"\')\r\n\r\n\r\n----------------------------------------------------------------------------\r\n\r\n\r\nAssign String to a Variable\r\nAssigning a string to a variable is done with the variable name followed by an equal sign and the string:\r\n\r\nExample\r\na = \"Hello\"\r\nprint(a)\r\n\r\n----------------------------------------------------------------------------\r\n\r\n\r\nMultiline Strings\r\nYou can assign a multiline string to a variable by using three quotes:\r\n\r\nExample\r\nYou can use three double quotes:\r\n\r\na = \"\"\"Lorem ipsum dolor sit amet,\r\nconsectetur adipiscing elit,\r\nsed do eiusmod tempor incididunt\r\nut labore et dolore magna aliqua.\"\"\"\r\nprint(a)\r\n\r\n-------------------------------------------------------------\r\n\r\nOr three single quotes:\r\n\r\nExample\r\na = \'\'\'Lorem ipsum dolor sit amet,\r\nconsectetur adipiscing elit,\r\nsed do eiusmod tempor incididunt\r\nut labore et dolore magna aliqua.\'\'\'\r\nprint(a)\r\n\r\n\r\n----------------------------------------------------------------\r\n\r\nStrings are Arrays\r\nLike many other popular programming languages, strings in Python are arrays of bytes representing unicode characters.\r\n\r\nHowever, Python does not have a character data type, a single character is simply a string with a length of 1.\r\n\r\nSquare brackets can be used to access elements of the string.\r\n\r\nExample\r\nGet the character at position 1 (remember that the first character has the position 0):\r\n\r\na = \"Hello, World!\"\r\nprint(a[1])\r\n\r\n\r\n-------------------------------------------------------------------\r\nLooping Through a String\r\nSince strings are arrays, we can loop through the characters in a string, with a for loop.\r\n\r\nExample\r\nLoop through the letters in the word \"banana\":\r\n\r\nfor x in \"banana\":\r\n  print(x)\r\n\r\n\r\n---------------------------------------------------------------------------------\r\nString Length\r\nTo get the length of a string, use the len() function.\r\n\r\nExample\r\nThe len() function returns the length of a string:\r\n\r\na = \"Hello, World!\"\r\nprint(len(a))\r\n\r\n\r\n-------------------------------------------------------------------------------\r\n\r\nCheck String\r\nTo check if a certain phrase or character is present in a string, we can use the keyword in.\r\n\r\nExample\r\nCheck if \"free\" is present in the following text:\r\n\r\ntxt = \"The best things in life are free!\"\r\nprint(\"free\" in txt)\r\n\r\n\r\nUse it in an if statement:\r\n\r\nExample\r\nPrint only if \"free\" is present:\r\n\r\ntxt = \"The best things in life are free!\"\r\nif \"free\" in txt:\r\n  print(\"Yes, \'free\' is present.\")\r\n--------------------------------------------------------------------------------\r\n\r\n\r\nCheck if NOT\r\nTo check if a certain phrase or character is NOT present in a string, we can use the keyword not in.\r\n\r\nExample\r\nCheck if \"expensive\" is NOT present in the following text:\r\n\r\ntxt = \"The best things in life are free!\"\r\nprint(\"expensive\" not in txt)\r\n\r\nUse it in an if statement:\r\n\r\nExample\r\nprint only if \"expensive\" is NOT present:\r\n\r\ntxt = \"The best things in life are free!\"\r\nif \"expensive\" not in txt:\r\n  print(\"No, \'expensive\' is NOT present.\"', 'Note: in the result, the line breaks are inserted at the same position as in the code.', NULL, '2025-07-21 13:15:31', '2025-07-21 13:15:31', '-', NULL),
(42, 12, 'Python - Slicing String', 'Slicing\r\nYou can return a range of characters by using the slice syntax.\r\n\r\nSpecify the start index and the end index, separated by a colon, to return a part of the string.\r\n\r\n\r\nGet the characters from position 2 to position 5 (not included):\r\n\r\nb = \"Hello, World!\"\r\nprint(b[2:5])\r\nNote: The first character has index 0.\r\n----------------------------------------------------------------------------------------------------\r\nSlice From the Start\r\nBy leaving out the start index, the range will start at the first character:\r\n\r\nExample\r\nGet the characters from the start to position 5 (not included):\r\n\r\nb = \"Hello, World!\"\r\nprint(b[:5])\r\n\r\n----------------------------------------------------------------------------------------------------\r\n\r\n\r\nSlice To the End\r\nBy leaving out the end index, the range will go to the end:\r\n\r\nExample\r\nGet the characters from position 2, and all the way to the end:\r\n\r\nb = \"Hello, World!\"\r\nprint(b[2:])\r\n\r\n\r\n----------------------------------------------------------------------------------------------------\r\n\r\n\r\n\r\nNegative Indexing\r\nUse negative indexes to start the slice from the end of the string:\r\nExample\r\nGet the characters:\r\n\r\nFrom: \"o\" in \"World!\" (position -5)\r\n\r\nTo, but not included: \"d\" in \"World!\" (position -2):\r\n\r\nb = \"Hello, World!\"\r\nprint(b[-5:-2])', '-', NULL, '2025-07-21 13:18:04', '2025-07-21 13:18:04', '-', NULL),
(43, 12, 'Python - Modify Strings', 'Python has a set of built-in methods that you can use on strings.\r\n------------------------------------------------------------------\r\nUpper Case\r\n\r\nThe upper() method returns the string in upper case:\r\n\r\na = \"Hello, World!\"\r\nprint(a.upper())\r\n\r\n------------------------------------------------------------------\r\n\r\n\r\nLower Case\r\nExample\r\nThe lower() method returns the string in lower case:\r\n\r\na = \"Hello, World!\"\r\nprint(a.lower())\r\n\r\n------------------------------------------------------------------\r\n\r\n\r\nRemove Whitespace\r\nWhitespace is the space before and/or after the actual text, and very often you want to remove this space.\r\n\r\nExample\r\nThe strip() method removes any whitespace from the beginning or the end:\r\n\r\na = \" Hello, World! \"\r\nprint(a.strip()) # returns \"Hello, World!\"\r\n\r\n------------------------------------------------------------------\r\n\r\n\r\n\r\nReplace String\r\nExample\r\nThe replace() method replaces a string with another string:\r\n\r\na = \"Hello, World!\"\r\nprint(a.replace(\"H\", \"J\"))\r\n\r\n\r\n------------------------------------------------------------------\r\n\r\n\r\n\r\nSplit String\r\nThe split() method returns a list where the text between the specified separator becomes the list items.\r\n\r\nExample\r\nThe split() method splits the string into substrings if it finds instances of the separator:\r\n\r\na = \"Hello, World!\"\r\nprint(a.split(\",\")) # returns [\'Hello\', \' World!\']', '-', NULL, '2025-07-21 13:20:31', '2025-07-21 13:20:31', '-', NULL),
(44, 12, 'Python - String Concatenation', 'String Concatenation\r\nTo concatenate, or combine, two strings you can use the + operator.\r\n\r\nMerge variable a with variable b into variable c:\r\n\r\na = \"Hello\"\r\nb = \"World\"\r\nc = a + b\r\nprint(c)\r\n\r\n\r\n-----------------------------------------------------\r\nExample\r\nTo add a space between them, add a \" \":\r\n\r\na = \"Hello\"\r\nb = \"World\"\r\nc = a + \" \" + b\r\nprint(c)', '-', NULL, '2025-07-21 13:22:15', '2025-07-21 13:22:15', '-', NULL),
(45, 12, 'Python - Format - Strings', 'String Format\r\nAs we learned in the Python Variables chapter, we cannot combine strings and numbers like this:\r\n\r\n\r\nage = 36\r\ntxt = \"My name is John, I am \" + age\r\nprint(txt)\r\n\r\n--------------------------------------------------------------------\r\nBut we can combine strings and numbers by using f-strings or the format() method!\r\n\r\nF-Strings\r\nF-String was introduced in Python 3.6, and is now the preferred way of formatting strings.\r\n\r\nTo specify a string as an f-string, simply put an f in front of the string literal, and add curly brackets {} as placeholders for variables and other operations.\r\n\r\nExample\r\nCreate an f-string:\r\n\r\nage = 36\r\ntxt = f\"My name is John, I am {age}\"\r\nprint(txt)\r\n\r\n--------------------------------------------------------------------\r\n\r\n\r\n\r\nPlaceholders and Modifiers\r\nA placeholder can contain variables, operations, functions, and modifiers to format the value.\r\n\r\nExample\r\nAdd a placeholder for the price variable:\r\n\r\nprice = 59\r\ntxt = f\"The price is {price} dollars\"\r\nprint(txt)\r\n\r\n--------------------------------------------------------------------\r\n\r\n\r\n\r\nA placeholder can include a modifier to format the value.\r\n\r\nA modifier is included by adding a colon : followed by a legal formatting type, like .2f which means fixed point number with 2 decimals:\r\n\r\nExample\r\nDisplay the price with 2 decimals:\r\n\r\nprice = 59\r\ntxt = f\"The price is {price:.2f} dollars\"\r\nprint(txt)\r\n\r\n--------------------------------------------------------------------\r\n\r\n\r\n\r\nA placeholder can contain Python code, like math operations:\r\n\r\nExample\r\nPerform a math operation in the placeholder, and return the result:\r\n\r\ntxt = f\"The price is {20 * 59} dollars\"\r\nprint(txt)', '-', NULL, '2025-07-21 13:24:42', '2025-07-21 13:24:42', '-', NULL),
(46, 12, 'Python - Escape Characters', 'Escape Character\r\nTo insert characters that are illegal in a string, use an escape character.\r\n\r\nAn escape character is a backslash \\ followed by the character you want to insert.\r\n\r\nAn example of an illegal character is a double quote inside a string that is surrounded by double quotes:\r\n\r\n----------------------------------------------------------------------------------\r\nEscape Characters\r\nOther escape characters used in Python:\r\n\r\nCode	                                    Result	\r\n\\\'	                                            Single Quote	\r\n\\\\                                             	      Backslash	\r\n\\n	                                              New Line	\r\n\\r	                                              Carriage Return	\r\n\\t	                                              Tab	\r\n\\b	                                              Backspace	\r\n\\f	                                              Form Feed	\r\n\\ooo	                                             Octal value	\r\n\\xhh	                                             Hex value', 'example 1:txt = \"We are the so-called \"Vikings\" from the north.\"\r\n-----------------------------------------------\r\nexample 2 :txt = \"We are the so-called \\\"Vikings\\\" from the north.\"', NULL, '2025-07-21 13:28:23', '2025-07-21 13:28:23', 'example 1:You will get an error if you use double quotes inside a string that is surrounded by double quotes:\r\n-----------------------------------------------\r\nexample 2 :To fix this problem, use the escape character \\\":\r\nThe escape character allows you to use double quotes when you normally would not be allowe', NULL),
(47, 12, 'python-String Methods', 'String Methods\r\nPython has a set of built-in methods that you can use on strings.\r\n--------------------------------------------------------------------------------\r\nNote: All string methods return new values. They do not change the original string.\r\n\r\nMethod	...................................................	   Description\r\ncapitalize() ...................................................		Converts the first character to upper case\r\ncasefold() ...................................................		Converts string into lower case\r\ncenter() ...................................................		Returns a centered string\r\ncount() ...................................................		Returns the number of times a specified value occurs in a string\r\nencode()...................................................		Returns an encoded version of the string\r\nendswith()...................................................		Returns true if the string ends with the specified value\r\nexpandtabs()...................................................		Sets the tab size of the string\r\nfind()...................................................		Searches the string for a specified value and returns the position of where it was found\r\nformat()...................................................		Formats specified values in a string\r\nformat_map()...................................................		Formats specified values in a string\r\nindex()	...................................................	Searches the string for a specified value and returns the position of where it was found\r\nisalnum()...................................................		Returns True if all characters in the string are alphanumeric\r\nisalpha()...................................................		Returns True if all characters in the string are in the alphabet\r\nisascii()...................................................		Returns True if all characters in the string are ascii characters\r\nisdecimal()...................................................		Returns True if all characters in the string are decimals\r\nisdigit()	...................................................	Returns True if all characters in the string are digits\r\nisidentifier()...................................................		Returns True if the string is an identifier\r\nislower()	...................................................	Returns True if all characters in the string are lower case\r\nisnumeric()...................................................		Returns True if all characters in the string are numeric\r\nisprintable()...................................................		Returns True if all characters in the string are printable\r\nisspace()...................................................		Returns True if all characters in the string are whitespaces\r\nistitle()...................................................		Returns True if the string follows the rules of a title\r\nisupper()...................................................		Returns True if all characters in the string are upper case\r\njoin()...................................................		Joins the elements of an iterable to the end of the string\r\nljust()	...................................................	Returns a left justified version of the string\r\nlower()	...................................................	Converts a string into lower case\r\nlstrip()	...................................................	Returns a left trim version of the string\r\nmaketrans()...................................................		Returns a translation table to be used in translations\r\npartition()	...................................................	Returns a tuple where the string is parted into three parts\r\nreplace() ...................................................		Returns a string where a specified value is replaced with a specified value\r\nrfind() ...................................................		Searches the string for a specified value and returns the last position of where it was found\r\nrindex() ...................................................		Searches the string for a specified value and returns the last position of where it was found\r\nrjust() ...................................................		Returns a right justified version of the string\r\nrpartition() ...................................................		Returns a tuple where the string is parted into three parts\r\nrsplit() ...................................................		Splits the string at the specified separator, and returns a list\r\nrstrip()...................................................	 Returns a right trim version of the string\r\nsplit() ...................................................		Splits the string at the specified separator, and returns a list\r\nsplitlines() ...................................................		Splits the string at line breaks and returns a list\r\nstartswith()...................................................		Returns true if the string starts with the specified value\r\nstrip()...................................................	Returns a trimmed version of the string\r\nswapcase()	...................................................	Swaps cases, lower case becomes upper case and vice versa\r\ntitle()	...................................................	Converts the first character of each word to upper case\r\ntranslate()...................................................		Returns a translated string\r\nupper()...................................................	                 Converts a string into upper case\r\nzfill()...................................................		Fills the string with a specified number of 0 values at the beginning', '-', NULL, '2025-07-21 13:32:09', '2025-07-21 13:32:09', '-', NULL);
INSERT INTO `lessons` (`id`, `course_id`, `title`, `content`, `example`, `slug`, `created_at`, `updated_at`, `example_description`, `order`) VALUES
(48, 12, 'Python Booleans', 'Booleans represent one of two values: True or False.\r\n\r\nBoolean Values\r\nIn programming you often need to know if an expression is True or False.\r\n\r\nYou can evaluate any expression in Python, and get one of two answers, True or False.\r\n\r\nWhen you compare two values, the expression is evaluated and Python returns the Boolean answer:\r\n\r\n\r\nprint(10 > 9)\r\nprint(10 == 9)\r\nprint(10 < 9)\r\n\r\n-----------------------------------------------------------------\r\nWhen you run a condition in an if statement, Python returns True or False:\r\n\r\nExample\r\nPrint a message based on whether the condition is True or False:\r\n\r\na = 200\r\nb = 33\r\n\r\nif b > a:\r\n  print(\"b is greater than a\")\r\nelse:\r\n  print(\"b is not greater than a\")\r\n\r\n-----------------------------------------------------------------\r\n\r\n\r\nEvaluate Values and Variables\r\nThe bool() function allows you to evaluate any value, and give you True or False in return,\r\n\r\nExample\r\nEvaluate a string and a number:\r\n\r\nprint(bool(\"Hello\"))\r\nprint(bool(15))\r\n\r\n-----------------------------------------------------------------\r\n\r\nExample\r\nEvaluate two variables:\r\n\r\nx = \"Hello\"\r\ny = 15\r\n\r\nprint(bool(x))\r\nprint(bool(y))\r\n\r\n-----------------------------------------------------------------\r\n\r\nMost Values are True\r\nAlmost any value is evaluated to True if it has some sort of content.\r\n\r\nAny string is True, except empty strings.\r\n\r\nAny number is True, except 0.\r\n\r\nAny list, tuple, set, and dictionary are True, except empty ones.\r\n\r\nExample\r\nThe following will return True:\r\n\r\nbool(\"abc\")\r\nbool(123)\r\nbool([\"apple\", \"cherry\", \"banana\"])\r\n\r\n-----------------------------------------------------------------\r\n\r\nSome Values are False\r\nIn fact, there are not many values that evaluate to False, except empty values, such as (), [], {}, \"\", the number 0, and the value None. And of course the value False evaluates to False.\r\n\r\nExample\r\nThe following will return False:\r\n\r\nbool(False)\r\nbool(None)\r\nbool(0)\r\nbool(\"\")\r\nbool(())\r\nbool([])\r\nbool({})\r\n\r\n-----------------------------------------------------------------\r\n\r\nOne more value, or object in this case, evaluates to False, and that is if you have an object that is made from a class with a __len__ function that returns 0 or False:\r\n\r\nExample\r\nclass myclass():\r\n  def __len__(self):\r\n    return 0\r\n\r\nmyobj = myclass()\r\nprint(bool(myobj))\r\n\r\n\r\n-----------------------------------------------------------------\r\n\r\nFunctions can Return a Boolean\r\nYou can create functions that returns a Boolean Value:\r\n\r\nExample\r\nPrint the answer of a function:\r\n\r\ndef myFunction() :\r\n  return True\r\n\r\nprint(myFunction())\r\n\r\n\r\n-----------------------------------------------------------------\r\n\r\nYou can execute code based on the Boolean answer of a function:\r\n\r\nExample\r\nPrint \"YES!\" if the function returns True, otherwise print \"NO!\":\r\n\r\ndef myFunction() :\r\n  return True\r\n\r\nif myFunction():\r\n  print(\"YES!\")\r\nelse:\r\n  print(\"NO!\")\r\n\r\n-----------------------------------------------------------------\r\n\r\nPython also has many built-in functions that return a boolean value, like the isinstance() function, which can be used to determine if an object is of a certain data type:\r\n\r\nExample\r\nCheck if an object is an integer or not:\r\n\r\nx = 200\r\nprint(isinstance(x, int))', 'print(10 > 9)\r\nprint(10 == 9)\r\nprint(10 < 9)', NULL, '2025-07-21 13:36:36', '2025-07-21 13:36:36', 'return true or false', NULL),
(49, 12, 'Python Operators', 'Python Operators\r\nOperators are used to perform operations on variables and values.\r\n\r\nIn the example below, we use the + operator to add together two values:\r\nprint(10 + 5)\r\n\r\n-------------------------------------------------------------------\r\n\r\n\r\nPython divides the operators in the following groups:\r\n\r\n- Arithmetic operators\r\n- Assignment operators\r\n- Comparison operators\r\n- Logical operators\r\n- Identity operators\r\n- Membership operators\r\n- Bitwise operators\r\n\r\n-----------------------------------------------------------\r\nPython Arithmetic Operators\r\nArithmetic operators are used with numeric values to perform common mathematical operations:\r\n\r\nOperator	Name  ....................................................	Example	\r\n+	                    ....................................................                 Addition	x + y	\r\n-	                   ....................................................Subtraction	x - y	\r\n*	                       ....................................................    Multiplication	x * y	\r\n/                            ....................................................Division	x / y	\r\n%	                       ....................................................Modulus	x % y	\r\n**	 ....................................................Exponentiation	x ** y	\r\n//	 ....................................................Floor division	x // y\r\n-----------------------------------------------------------------	\r\nPython Assignment Operators\r\nAssignment operators are used to assign values to variables:\r\n\r\nOperator                        	Example                                   	Same As	\r\n=	  ............................ x = 5            ................                      x = 5	\r\n+=	    ........................... x += 3	..................                    x = x + 3	\r\n-=	                      ................ x -= 3	             ................ x = x - 3	\r\n*=	                ................ x *= 3                       ............... 	x = x * 3	\r\n/=                ................  	x /= 3	                   ................            x = x / 3	\r\n%=         ................ 	x %= 3	                                 ................ x = x % 3	\r\n//=	     ................    x //= 3                                    ................   x = x // 3	\r\n**=	               ................   x **= 3	                        ................     x = x ** 3	\r\n&=	             ................    x &= 3	                           ................     = x & 3	        \r\n|=	              ................   x |= 3                                    ................ x = x | 3	\r\n^=	       ................   x ^= 3                              ................ 	x = x ^ 3	\r\n>>=     ................ x >>= 3	                      ................   x = x >> 3	\r\n<<=	      ................  x <<= 3                     ................   	x = x << 3	\r\n:=	      ................   print(x := 3)	         ................    x = 3print(x)\r\n\r\n------------------------------------------\r\nPython Assignment Operators\r\nAssignment operators are used to assign values to variables:\r\n\r\nOperator.......	Example	............Same As	\r\n=	          x = 5	             x = 5	\r\n+=	.........x += 3	.........x = x + 3	\r\n-=	.....x -= 3	.......x = x - 3	\r\n*=	.........x *= 3	.......x = x * 3	\r\n/=	x /= .....	........x = x / 3	\r\n%=	.......x %= 3	...........x = x % 3	\r\n//=	.....x //= 3	.......x = x // 3	\r\n**=.......	x **= 3......	x = x ** 3	\r\n&=	x &= 3	x = x & 3	\r\n|=	x |= 3	x = x | 3	\r\n^=	x ^= 3	x = x ^ 3	\r\n>>=	x >>= 3	x = x >> 3	\r\n<<=	x <<= 3	x = x << 3	\r\n:=	print(x := 3)	x = 3\r\nprint(x)	\r\n---------------------------------------------------------\r\nPython Comparison Operators\r\nComparison operators are used to compare two values:\r\n\r\nOperator	Name	Example	Try it\r\n==	Equal	x == y	\r\n!=	Not equal	x != y	\r\n>	Greater than	x > y	\r\n<	Less than	x < y	\r\n>=	Greater than or equal to	x >= y	\r\n<=	Less than or equal to	x <= y	\r\n\r\n\r\n---------------------------------------------------------------\r\nPython Logical Operators\r\nLogical operators are used to combine conditional statements:\r\n\r\nOperator	Description	Example	\r\nand 	Returns True if both statements are true	x < 5 and  x < 10	\r\nor	Returns True if one of the statements is true	x < 5 or x < 4	\r\nnot	Reverse the result, returns False if the result is true	not(x < 5 and x < 10)	\r\nPython Identity Operators\r\nIdentity operators are used to compare the objects, not if they are equal, but if they are actually the same object, with the same memory location:\r\n\r\nOperator	Description	Example	\r\nis 	Returns True if both variables are the same object	x is y	\r\nis not	Returns True if both variables are not the same object	x is not y	\r\nPython Membership Operators\r\nMembership operators are used to test if a sequence is presented in an object:\r\n\r\nOperator	Description	Example	Try it\r\nin 	Returns True if a sequence with the specified value is present in the object	x in y	\r\nnot in	Returns True if a sequence with the specified value is not present in the object	x not in y	\r\nPython Bitwise Operators\r\nBitwise operators are used to compare (binary) numbers:\r\n\r\nOperator	Name	Description	Example	Try it\r\n& 	AND	Sets each bit to 1 if both bits are 1	x & y	\r\n|	OR	Sets each bit to 1 if one of two bits is 1	x | y	\r\n^	XOR	Sets each bit to 1 if only one of two bits is 1	x ^ y	\r\n~	NOT	Inverts all the bits	~x	\r\n<<	Zero fill left shift	Shift left by pushing zeros in from the right and let the leftmost bits fall off	x << 2	\r\n>>	Signed right shift	Shift right by pushing copies of the leftmost bit in from the left, and let the rightmost bits fall off	x >> 2\r\n\r\n--------------------------------------------------------------\r\n	\r\nOperator Precedence\r\nOperator precedence describes the order in which operations are performed.\r\n\r\nExample\r\nParentheses has the highest precedence, meaning that expressions inside parentheses must be evaluated first:\r\n\r\nprint((6 + 3) - (6 + 3))\r\n--------------------------------------------------\r\nExample\r\nMultiplication * has higher precedence than addition +, and therefore multiplications are evaluated before additions:\r\n\r\nprint(100 + 5 * 3)\r\n\r\n--------------------------------------------------------\r\nThe precedence order is described in the table below, starting with the highest precedence at the top:\r\n\r\nOperator	Description	\r\n()	Parentheses	\r\n**	Exponentiation	\r\n+x  -x  ~x	Unary plus, unary minus, and bitwise NOT	\r\n*  /  //  %	Multiplication, division, floor division, and modulus	\r\n+  -	Addition and subtraction	\r\n<<  >>	Bitwise left and right shifts	\r\n&	Bitwise AND	\r\n^	Bitwise XOR	\r\n|	Bitwise OR	\r\n==  !=  >  >=  <  <=  is  is not  in  not in 	Comparisons, identity, and membership operators	\r\nnot	Logical NOT	\r\nand	AND	\r\nor	OR	\r\n\r\n------------------------------------------------------------\r\nIf two operators have the same precedence, the expression is evaluated from left to right.\r\n\r\nExample\r\nAddition + and subtraction - has the same precedence, and therefore we evaluate the expression from left to right:\r\n\r\nprint(5 + 4 - 7 + 3)', '-', NULL, '2025-07-21 13:48:16', '2025-07-21 13:48:16', '-', NULL),
(52, 12, 'Python Lists', 'mylist = [\"apple\", \"banana\", \"cherry\"]\r\nList\r\nLists are used to store multiple items in a single variable.\r\n\r\nLists are one of 4 built-in data types in Python used to store collections of data, the other 3 are Tuple, Set, and Dictionary, all with different qualities and usage.\r\n\r\nLists are created using square brackets:\r\nCreate a List:\r\n\r\nthislist = [\"apple\", \"banana\", \"cherry\"]\r\nprint(thislist)\r\n\r\n-------------------------------------------------------------\r\nList Items\r\nList items are ordered, changeable, and allow duplicate values.\r\n\r\nList items are indexed, the first item has index [0], the second item has index [1] etc.\r\n\r\nOrdered\r\nWhen we say that lists are ordered, it means that the items have a defined order, and that order will not change.\r\n\r\nIf you add new items to a list, the new items will be placed at the end of the list.\r\n-------------------------------------------------------------\r\n\r\nNote: There are some list methods that will change the order, but in general: the order of the items will not change.\r\n-------------------------------------------------------------\r\n\r\nChangeable\r\nThe list is changeable, meaning that we can change, add, and remove items in a list after it has been created.\r\n\r\nAllow Duplicates\r\nSince lists are indexed, lists can have items with the same value:\r\n\r\nExample\r\nLists allow duplicate values:\r\n\r\nthislist = [\"apple\", \"banana\", \"cherry\", \"apple\", \"cherry\"]\r\nprint(thislist)\r\n\r\n\r\n-------------------------------------------------------------\r\n\r\nList Length\r\nTo determine how many items a list has, use the len() function:\r\n\r\nExample\r\nPrint the number of items in the list:\r\n\r\nthislist = [\"apple\", \"banana\", \"cherry\"]\r\nprint(len(thislist))\r\n\r\n-------------------------------------------------------------\r\n\r\nList Items - Data Types\r\nList items can be of any data type:\r\n\r\nExample\r\nString, int and boolean data types:\r\n\r\nlist1 = [\"apple\", \"banana\", \"cherry\"]\r\nlist2 = [1, 5, 7, 9, 3]\r\nlist3 = [True, False, False]\r\n\r\n-------------------------------------------------------------\r\n\r\nA list can contain different data types:\r\n\r\nExample\r\nA list with strings, integers and boolean values:\r\n\r\nlist1 = [\"abc\", 34, True, 40, \"male\"]\r\ntype()\r\n\r\n-------------------------------------------------------------\r\n\r\nFrom Python\'s perspective, lists are defined as objects with the data type \'list\':\r\n\r\n<class \'list\'>\r\nExample\r\nWhat is the data type of a list?\r\n\r\nmylist = [\"apple\", \"banana\", \"cherry\"]\r\nprint(type(mylist))\r\n\r\n-------------------------------------------------------------\r\n\r\nThe list() Constructor\r\nIt is also possible to use the list() constructor when creating a new list.\r\n\r\nExample\r\nUsing the list() constructor to make a List:\r\n\r\nthislist = list((\"apple\", \"banana\", \"cherry\")) # note the double round-brackets\r\nprint(thislist)\r\n\r\n-------------------------------------------------------------\r\n\r\nPython Collections (Arrays)\r\nThere are four collection data types in the Python programming language:\r\n\r\nList is a collection which is ordered and changeable. Allows duplicate members.\r\nTuple is a collection which is ordered and unchangeable. Allows duplicate members.\r\nSet is a collection which is unordered, unchangeable*, and unindexed. No duplicate members.\r\nDictionary is a collection which is ordered** and changeable. No duplicate members.', 'mylist = [\"apple\", \"banana\", \"cherry\"]', NULL, '2025-07-21 14:00:49', '2025-07-21 14:00:49', 'return  :\"apple\"\r\n, \"banana\"\r\n\"cherry', NULL),
(53, 10, 'PHP Introduction', 'What You Should Already Know\r\nBefore you continue you should have a basic understanding of the following:\r\n\r\n.HTML\r\n.CSS\r\nJavaScript\r\nIf you want to study these subjects first, find the tutorials on our Home page.\r\n------------------------------------------------------------\r\nWhat is PHP?\r\n- PHP is an acronym for \"PHP: Hypertext Preprocessor\"\r\n- PHP is a widely-used, open source scripting language\r\n- PHP scripts are executed on the server\r\n- PHP is free to download and use\r\n\r\n\r\n------------------------------------------------------------\r\nPHP is an amazing and popular language!\r\n\r\nIt is powerful enough to be at the core of the biggest blogging system on the web (WordPress)!\r\nIt is deep enough to run large social networks!\r\nIt is also easy enough to be a beginner\'s first server side language!\r\n\r\n-------------------------------------------------------------------------\r\nWhat is a PHP File?\r\n- PHP files can contain text, HTML, CSS, JavaScript, and PHP code\r\n- PHP code is executed on the server, and the result is returned to the browser as plain HTML\r\n- PHP files have extension \".php\"\r\n\r\n-------------------------------------------------------------------------\r\n\r\nWhat Can PHP Do?\r\n- PHP can generate dynamic page content\r\n- PHP can create, open, read, write, delete, and close files on the server\r\n- PHP can collect form data\r\n- PHP can send and receive cookies\r\n* PHP can add, delete, modify data in your database\r\n- PHP can be used to control user-access\r\n- PHP can encrypt data\r\nWith PHP you are not limited to output HTML. You can output images or PDF files. You can also output any text, such as XHTML and XML.\r\n--------------------------------------------------------------------------\r\nWhy PHP?\r\n- PHP runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)\r\n- PHP is compatible with almost all servers used today (Apache, IIS, etc.)\r\n- PHP supports a wide range of databases\r\n- PHP is free. Download it from the official PHP resource: www.php.net\r\n- PHP is easy to learn and runs efficiently on the server side\r\n---------------------------------------------------\r\n\r\n-What\'s new in PHP 7\r\n- PHP 7 is much faster than the previous popular stable release (PHP 5.6)\r\n- PHP 7 has improved Error Handling\r\n- PHP 7 supports stricter Type Declarations for function arguments\r\n- PHP 7 supports new operators (like the spaceship operator: <=>)\r\n\r\n--------------------------------------------------------------------------------', '-', NULL, '2025-07-21 14:06:58', '2025-07-21 14:06:58', '-', NULL),
(54, 10, 'PHP Installation', 'What Do I Need?\r\nTo start using PHP, you can:\r\n\r\n- Find a web host with PHP and MySQL support\r\n- Install a web server on your own PC, and then install PHP and MySQL\r\n\r\n-----------------------------------------------------------\r\nUse a Web Host With PHP Support\r\nIf your server has activated support for PHP you do not need to do anything.\r\n\r\nJust create some .php files, place them in your web directory, and the server will automatically parse them for you.\r\n\r\nYou do not need to compile anything or install any extra tools.\r\n\r\nBecause PHP is free, most web hosts offer PHP support.\r\n------------------------------------------------------------\r\nSet Up PHP on Your Own PC\r\nHowever, if your server does not support PHP, you must:\r\n\r\n- install a web server\r\n- install PHP\r\n- install a database, such as MySQL\r\nThe official PHP website (PHP.net) has installation instructions for PHP: http://php.net/manual/en/install.php\r\n\r\n---------------------------------------------------\r\nPHP Version\r\nTo check your php version you can use the phpversion() function:', 'echo phpversion();', NULL, '2025-07-21 14:14:46', '2025-07-21 14:14:46', 'Display the PHP version:', NULL),
(63, 11, 'Introduction to Bootstrap', 'Bootstrap is a powerful front-end framework used to design responsive and mobile-first websites using HTML, CSS, and JavaScript.Bootstrap is a powerful front-end framework used to design responsive and mobile-first websites using HTML, CSS, and JavaScript.', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\">\r\n</head>\r\n<body>\r\n  <h1 class=\"text-primary\">Hello, Bootstrap!</h1>\r\n</body>\r\n</html>', NULL, '2025-07-22 07:00:35', '2025-07-22 07:00:35', 'This example includes the Bootstrap CSS from a CDN and uses the text-primary class to style the <h1> element with a primary (blue) color.', NULL),
(64, 11, 'Containers', 'Containers are the layout foundation in Bootstrap. They center and pad your content. Two main types: .container (fixed width) and .container-fluid (full width).', '<div class=\"container\">\r\n  <p>This content is inside a fixed-width container.</p>\r\n</div>', NULL, '2025-07-22 07:01:22', '2025-07-22 07:01:22', 'This creates a centered layout with padding. It adjusts the width based on screen size using Bootstrap’s grid system.', NULL),
(65, 11, 'Bootstrap Grid System', 'Bootstrap\'s grid system uses 12 columns to create flexible layouts. You can define columns using classes like .col-4, .col-md-6, etc.', '<div class=\"container\">\r\n   <div class=\"row\">    \r\n<div class=\"col-6 bg-light\">Column 1</div> \r\n    <div class=\"col-6 bg-secondary text-white\">Column 2</div>\r\n   </div> \r\n</div>', NULL, '2025-07-22 07:02:46', '2025-07-22 07:02:46', 'Two columns are created inside a row, each taking 50% width (6/12). The background and text colors are styled using Bootstrap utility classes.', NULL),
(66, 11, 'Buttons', 'Bootstrap provides pre-styled buttons using classes like .btn, .btn-primary, .btn-danger, etc.', '<button class=\"btn btn-success\">Submit</button>', NULL, '2025-07-22 07:03:31', '2025-07-22 07:03:31', 'This button is styled with the btn class (basic styling) and btn-success (green color for success actions).', NULL),
(67, 11, 'Forms', 'Bootstrap offers clean and responsive form layouts with various input types and validation support.', '<form>\r\n  <div class=\"mb-3\">\r\n    <label for=\"email\" class=\"form-label\">Email address</label>\r\n    <input type=\"email\" class=\"form-control\" id=\"email\">\r\n  </div>\r\n</form>', NULL, '2025-07-22 07:04:06', '2025-07-22 07:04:06', 'This code creates a labeled email input field with Bootstrap styling. form-control makes the input full-width and styled properly.', NULL),
(68, 11, 'Alerts .', 'Use alerts to show messages (success, warning, error, etc.) using classes like .alert-success, .alert-danger.', '<div class=\"alert alert-warning\" role=\"alert\">\r\n  This is a warning alert!\r\n</div>', NULL, '2025-07-22 07:04:55', '2025-07-22 07:04:55', 'This displays a yellow alert box to indicate a warning message using alert-warning.', NULL),
(69, 11, 'Cards', 'Cards are flexible content containers with options for headers, footers, images, and body content.', '<div class=\"card\" style=\"width: 18rem;\">\r\n  <div class=\"card-body\">\r\n    <h5 class=\"card-title\">Card title</h5>\r\n    <p class=\"card-text\">This is some text within a card.</p>\r\n  </div>\r\n</div>', NULL, '2025-07-22 07:05:59', '2025-07-22 07:05:59', 'This creates a basic card layout with a title and body text. It\'s commonly used for displaying grouped information.', NULL),
(70, 11, 'Navbar', 'The navbar is used to create responsive navigation bars with links, branding, togglers, and more.', '<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">\r\n  <a class=\"navbar-brand\" href=\"#\">Brand</a>\r\n</nav>', NULL, '2025-07-22 07:06:37', '2025-07-22 07:06:37', 'This adds a light-colored navigation bar with a brand name. The navbar-expand-lg makes it responsive on large screens.', NULL),
(71, 11, 'Modals', 'Modals are dialog boxes that pop up over the current page. Useful for alerts, forms, etc.', '<!-- Button trigger -->\r\n<button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">\r\n  Launch Modal\r\n</button>\r\n\r\n\r\n\r\n<!-- Modal -->\r\n<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\">\r\n  <div class=\"modal-dialog\">\r\n    <div class=\"modal-content\">\r\n      <div class=\"modal-header\">\r\n        <h5 class=\"modal-title\">Modal Title</h5>\r\n      </div>\r\n      <div class=\"modal-body\">\r\n        This is a modal body.\r\n      </div>\r\n    </div>\r\n  </div>\r\n</div>', NULL, '2025-07-22 07:07:38', '2025-07-22 07:07:38', 'Clicking the button triggers a Bootstrap modal with a title and message. Bootstrap handles the animation and layout.', NULL),
(72, 11, 'Utilities (Spacing, Colors, Text, etc.)', 'Bootstrap includes many utility classes for margin, padding, text alignment, display, colors, etc.', '<p class=\"text-center text-danger mt-4\">Centered red text with top margin</p>', NULL, '2025-07-22 07:08:17', '2025-07-22 07:08:17', 'This paragraph is centered (text-center), colored red (text-danger), and has a top margin of 1.5rem (mt-4).', NULL),
(73, 10, 'Introduction to PHP', 'PHP is a server-side scripting language used to create dynamic web pages and interact with databases.', '<?php\r\necho \"Hello, PHP!\";\r\n?>', NULL, '2025-07-22 07:10:19', '2025-07-22 07:10:19', 'This code uses echo to print \"Hello, PHP!\" to the browser. It’s the simplest way to output data in PHP.', NULL),
(74, 10, 'Variables and Data Types', 'PHP variables start with $ and can hold strings, integers, floats, booleans, arrays, and objects', '<?php $name = \"Ali\"; $age = 25; echo \"My name is $name and I am $age years old.\"; ?>', NULL, '2025-07-22 07:11:14', '2025-07-22 07:11:14', 'This script declares two variables and displays them inside a string using double quotes.', NULL),
(75, 10, 'Conditional Statements', 'PHP supports if, else, elseif, and switch statements for controlling logic flow', '<?php\r\n$score = 85;\r\nif ($score >= 90) {\r\n    echo \"Excellent\";\r\n} elseif ($score >= 70) {\r\n    echo \"Good\";\r\n} else {\r\n    echo \"Needs Improvement\";\r\n}\r\n?>', NULL, '2025-07-22 07:11:55', '2025-07-22 07:11:55', 'Depending on the $score, this code prints different messages using if-elseif-else statements.', NULL),
(76, 10, 'Loops in PHP', 'Loops allow repeated execution of code using for, while, do-while, and foreach.', '<?php\r\nfor ($i = 1; $i <= 5; $i++) {\r\n    echo \"Number: $i<br>\";\r\n}\r\n?>', NULL, '2025-07-22 07:12:33', '2025-07-22 07:12:33', 'This loop prints numbers 1 through 5 using a for loop.', NULL),
(77, 10, 'Arrays', 'Arrays are used to store multiple values in one variable.', '<?php\r\n$fruits = [\"Apple\", \"Banana\", \"Orange\"];\r\necho $fruits[1]; // Outputs: Banana\r\n?>', NULL, '2025-07-22 07:13:21', '2025-07-22 07:13:21', 'This array holds three fruits. $fruits[1] accesses the second element (\"Banana\").', NULL),
(78, 10, 'Functions', 'Functions in PHP allow you to group reusable code blocks.', '<?php\r\nfunction greet($name) {\r\n    return \"Hello, $name!\";\r\n}\r\necho greet(\"Sara\");\r\n?>', NULL, '2025-07-22 07:14:02', '2025-07-22 07:14:02', 'The function greet takes a name and returns a greeting message.', NULL),
(79, 10, 'Forms and $_GET / $_POST', 'PHP can collect data from forms using $_GET (URL) and $_POST (securely).', '(HTML + PHP):\r\n\r\n<form method=\"post\">\r\n  Name: <input type=\"text\" name=\"username\">\r\n  <input type=\"submit\">\r\n</form>\r\n\r\n<?php\r\nif ($_SERVER[\"REQUEST_METHOD\"] == \"POST\") {\r\n    echo \"Hello, \" . $_POST[\"username\"];\r\n}\r\n?>', NULL, '2025-07-22 07:14:59', '2025-07-22 07:14:59', 'This form sends data to the same page using POST, and PHP retrieves the username and prints it.', NULL),
(80, 10, 'File Handling', 'PHP allows reading/writing files using functions like fopen, fwrite, fread, and fclose.', '<?php\r\n$file = fopen(\"sample.txt\", \"w\");\r\nfwrite($file, \"Hello File!\");\r\nfclose($file);\r\n?>', NULL, '2025-07-22 07:15:43', '2025-07-22 07:15:43', 'This code creates or overwrites sample.txt and writes \"Hello File!\" into it.', NULL),
(81, 10, 'Sessions and Cookies', 'Sessions store user data across multiple pages. Cookies store data on the user\'s browser.', '<?php\r\nsession_start();\r\n$_SESSION[\"user\"] = \"Admin\";\r\necho $_SESSION[\"user\"];\r\n?>', NULL, '2025-07-22 07:17:17', '2025-07-22 07:17:17', 'This starts a session and stores the username \"Admin\" in a session variable.', NULL),
(82, 10, 'Connecting to a MySQL Database (with mysqli)', 'PHP connects to databases using mysqli or PDO.', '<?php\r\n$conn = mysqli_connect(\"localhost\", \"root\", \"\", \"test_db\");\r\nif ($conn) {\r\n    echo \"Connected successfully!\";\r\n}\r\n?>', NULL, '2025-07-22 07:18:01', '2025-07-22 07:18:01', 'This connects to a MySQL database named test_db on the local server using mysqli_connec', NULL),
(83, 9, 'Introduction to C#', 'C# is an object-oriented programming language developed by Microsoft. It runs on the .NET platform and is used for desktop, web, and game development.', 'using System;\r\n\r\nclass Program {\r\n    static void Main() {\r\n        Console.WriteLine(\"Hello, C#\");\r\n    }\r\n}', NULL, '2025-07-22 07:19:10', '2025-07-22 07:19:10', 'This is the simplest C# program. It prints \"Hello, C#\" to the console using Console.WriteLine().', NULL),
(84, 9, 'Variables and Data Types', 'C# is statically typed. You must declare the data type of each variable like int, string, bool, etc.', 'int age = 25;\r\nstring name = \"Ali\";\r\nbool isStudent = true;', NULL, '2025-07-22 07:20:00', '2025-07-22 07:20:00', 'Three variables are declared: an integer, a string, and a boolean, each with a specific data type.', NULL),
(85, 9, 'Conditional Statements (if, else)', 'Used to make decisions in your program.', 'int score = 85;\r\nif (score >= 90)\r\n    Console.WriteLine(\"Excellent\");\r\nelse if (score >= 70)\r\n    Console.WriteLine(\"Good\");\r\nelse\r\n    Console.WriteLine(\"Needs improvement\");', NULL, '2025-07-22 07:20:42', '2025-07-22 07:20:42', 'Depending on the value of score, a different message is displayed using if-else logic.', NULL),
(86, 9, 'Loops (for, while, foreach)', 'Loops allow you to repeat actions multiple times.', 'for (int i = 1; i <= 5; i++) {\r\n    Console.WriteLine(\"Number: \" + i);\r\n}', NULL, '2025-07-22 07:21:30', '2025-07-22 07:21:30', 'This for loop prints numbers from 1 to 5 by incrementing i.', NULL),
(87, 9, 'Methods (Functions)', 'Methods are blocks of code that perform a specific task and can be reused.', 'static void Greet(string name) {\r\n    Console.WriteLine(\"Hello, \" + name);\r\n}', NULL, '2025-07-22 07:22:29', '2025-07-22 07:22:29', 'This method Greet takes a string parameter and prints a greeting message', NULL),
(88, 9, 'Arrays', 'Arrays store multiple values of the same type.', 'string[] fruits = { \"Apple\", \"Banana\", \"Orange\" };\r\nConsole.WriteLine(fruits[1]);', NULL, '2025-07-22 07:23:12', '2025-07-22 07:23:12', 'An array of strings is declared. The second element \"Banana\" is accessed and printed.', NULL),
(89, 9, 'Classes and Objects', 'C# is object-oriented. A class is a blueprint; an object is an instance of that blueprint.', 'class Car {\r\n    public string Model = \"Toyota\";\r\n}\r\n\r\nCar myCar = new Car();\r\nConsole.WriteLine(myCar.Model);', NULL, '2025-07-22 07:23:57', '2025-07-22 07:23:57', 'A class Car with a property Model is created. An object myCar is then used to access that property.', NULL),
(90, 9, 'Constructors', 'Constructors initialize objects when they are created.', 'class Person {\r\n    public string Name;\r\n\r\n    public Person(string name) {\r\n        Name = name;\r\n    }\r\n}\r\nPerson p = new Person(\"Sara\");\r\nConsole.WriteLine(p.Name);', NULL, '2025-07-22 07:24:42', '2025-07-22 07:24:42', 'The constructor accepts a name parameter and assigns it to the object’s Name property.', NULL),
(91, 9, 'Inheritance', 'Inheritance allows a class to inherit members (fields, methods) from another class.', 'class Animal {\r\n    public void Speak() {\r\n        Console.WriteLine(\"Animal sound\");\r\n    }\r\n}\r\n\r\nclass Dog : Animal {}\r\n\r\nDog d = new Dog();\r\nd.Speak();', NULL, '2025-07-22 07:25:39', '2025-07-22 07:25:39', 'The class Dog inherits from Animal and can use its method Speak().', NULL),
(92, 9, 'Exception Handling (try-catch)', 'Used to handle errors gracefully.', 'try {\r\n    int x = int.Parse(\"not a number\");\r\n} catch (FormatException e) {\r\n    Console.WriteLine(\"Error: \" + e.Message);\r\n}', NULL, '2025-07-22 07:26:27', '2025-07-22 07:26:27', 'This code tries to parse an invalid string to an integer, which causes a FormatException. The error is caught and displayed.', NULL),
(93, 7, 'Introduction to HTML', 'HTML (HyperText Markup Language) is the standard language for creating webpages. It uses tags to structure content like text, images, and links.', '<!DOCTYPE html>\r\n<html>\r\n  <head>\r\n    <title>My First Page</title>\r\n  </head>\r\n  <body>\r\n    <h1>Hello, HTML!</h1>\r\n  </body>\r\n</html>', NULL, '2025-07-22 07:27:35', '2025-07-22 07:27:35', 'This is a basic HTML structure. The <h1> tag displays a large heading that says \"Hello, HTML!\".', NULL),
(94, 7, 'Headings and Paragraphs', 'HTML provides heading tags (<h1> to <h6>) and the paragraph tag <p> for text.', '<h1>Main Title</h1>\r\n<p>This is a paragraph of text.</p>', NULL, '2025-07-22 07:28:17', '2025-07-22 07:28:17', '<h1> defines a top-level heading, and <p> adds a paragraph.', NULL),
(95, 7, 'Links', 'Use the <a> tag to create clickable links.', '<a href=\"https://www.google.com\">Go to Google</a>', NULL, '2025-07-22 07:28:57', '2025-07-22 07:28:57', 'Clicking this link takes the user to Google\'s website using the href attribute.', NULL),
(96, 7, 'Images', 'The <img> tag is used to display images.', '<img src=\"image.jpg\" alt=\"Description of image\" width=\"300\">', NULL, '2025-07-22 07:30:01', '2025-07-22 07:30:01', 'This displays an image with a width of 300 pixels. The alt text appears if the image fails to load.', NULL),
(97, 7, 'Lists (Ordered and Unordered)', 'HTML supports two main types of lists: ordered (<ol>) and unordered (<ul>), with list items (<li>).', '<ul>\r\n  <li>Apple</li>\r\n  <li>Banana</li>\r\n</ul>', NULL, '2025-07-22 07:30:39', '2025-07-22 07:30:39', 'This creates a bulleted list with two items.', NULL),
(98, 7, 'Tables', 'Tables use tags like <table>, <tr>, <td>, and <th> to structure data.', '<table border=\"1\">\r\n  <tr>\r\n    <th>Name</th>\r\n    <th>Age</th>\r\n  </tr>\r\n  <tr>\r\n    <td>Ali</td>\r\n    <td>25</td>\r\n  </tr>\r\n</table>', NULL, '2025-07-22 07:31:25', '2025-07-22 07:31:25', 'This table has two columns and one row of data with headers.', NULL),
(99, 7, 'Forms', 'Forms collect user input using elements like <input>, <textarea>, <select>, and <button>.', '<form>\r\n  <label for=\"name\">Name:</label>\r\n  <input type=\"text\" id=\"name\">\r\n  <button type=\"submit\">Submit</button>\r\n</form>', NULL, '2025-07-22 07:32:08', '2025-07-22 07:32:08', 'This form has a text input for the user\'s name and a submit button.', NULL),
(100, 7, 'Input Types', '<input> supports many types like text, email, password, checkbox, and radio.', '<input type=\"email\" placeholder=\"Enter your email\">\r\n<input type=\"checkbox\"> Subscribe', NULL, '2025-07-22 07:33:02', '2025-07-22 07:33:02', 'The first input accepts email addresses; the second is a checkbox for subscriptions.', NULL),
(101, 7, 'Semantic Elements', 'Semantic tags like <header>, <nav>, <main>, <section>, <footer> give meaning to the content.', '<header>\r\n  <h1>Website Title</h1>\r\n</header>', NULL, '2025-07-22 07:33:41', '2025-07-22 07:33:41', 'The <header> wraps the main heading of the page, indicating that it\'s the top section.', NULL),
(102, 7, 'Embedding Videos and Audio', 'HTML5 allows adding videos and audio using <video> and <audio>.', '<video width=\"320\" controls>\r\n  <source src=\"movie.mp4\" type=\"video/mp4\">\r\n</video>', NULL, '2025-07-22 07:34:23', '2025-07-22 07:34:23', 'This embeds a video with playback controls. If the file exists, the browser will show the video player.', NULL),
(103, 14, 'What is Laravel?', 'Laravel is a modern PHP framework that helps you build web applications quickly using the MVC architecture.', 'composer create-project laravel/laravel myApp', NULL, '2025-07-22 07:35:51', '2025-07-22 07:35:51', 'This creates a new Laravel project named myApp.', NULL),
(104, 14, 'MVC Structure', 'MVC stands for Model-View-Controller — a design pattern that organizes code.', '// routes/web.php\r\nRoute::get(\'/hello\', \'HelloController@index\');', NULL, '2025-07-22 07:36:32', '2025-07-22 07:36:32', 'This defines a route /hello that is handled by the index method in HelloController.', NULL),
(105, 14, 'Defining Routes', 'Routes define how your app responds to URLs.', 'Route::get(\'/about\', function () {\r\n    return \'About Page\';\r\n});', NULL, '2025-07-22 07:37:20', '2025-07-22 07:37:20', 'Displays a simple text response when visiting /about.', NULL),
(106, 14, 'Creating a Controller', 'Controllers handle business logic and connect models to views.', 'php artisan make:controller BlogController', NULL, '2025-07-22 07:38:12', '2025-07-22 07:38:12', 'Creates a new controller named BlogController.', NULL),
(107, 14, 'Blade Templates', 'Blade is Laravel\'s templating engine used to generate dynamic views.', '<!-- resources/views/welcome.blade.php --> <h1>Hello, {{ $name }}</h1>', NULL, '2025-07-22 07:39:07', '2025-07-22 07:39:07', 'Displays a dynamic name in the header.', NULL),
(108, 14, 'Database Migrations', 'Migrations help define and modify database schema in code.', 'php artisan make:migration create_posts_table', NULL, '2025-07-22 07:40:00', '2025-07-22 07:40:00', 'Generates a migration file to create a posts table.', NULL),
(109, 14, 'Eloquent ORM', 'Eloquent allows you to interact with the database using models.', '$post = Post::find(1); echo $post->title;', NULL, '2025-07-22 07:40:52', '2025-07-22 07:40:52', 'Fetches a post with ID 1 and displays its title.', NULL),
(110, 14, 'Authentication', 'Laravel provides built-in authentication scaffolding.', 'php artisan ui bootstrap --auth', NULL, '2025-07-22 07:41:31', '2025-07-22 07:41:31', 'Generates login, register, and logout pages automatically.', NULL),
(111, 14, 'Validation', 'Laravel simplifies input validation.', '$request->validate([\r\n  \'title\' => \'required|min:3\'\r\n]);', NULL, '2025-07-22 07:42:13', '2025-07-22 07:42:13', 'Validates that title is required and must be at least 3 characters long.', NULL),
(112, 14, 'Database Seeding', 'Seeders allow inserting sample data into your database for testing.', 'php artisan make:seeder PostSeeder', NULL, '2025-07-22 07:42:59', '2025-07-22 07:42:59', 'Generates a seeder class to populate the posts table.', NULL),
(113, 13, 'What is OOP?', 'OOP (Object-Oriented Programming) organizes code into objects and classes.', 'class Car {\r\n  public $color = \'red\';\r\n}', NULL, '2025-07-22 07:43:46', '2025-07-22 07:43:46', 'Defines a Car class with a color property.', NULL),
(114, 13, 'Classes', 'A class is a blueprint for creating objects.', 'class Person {\r\n  public $name;\r\n}', NULL, '2025-07-22 07:44:29', '2025-07-22 07:44:29', 'Defines a class with a name property.', NULL),
(115, 13, 'Objects', 'Objects are instances created from classes.', '$p = new Person(); $p->name = \"Ali\";', NULL, '2025-07-22 07:45:12', '2025-07-22 07:45:12', 'Creates an object from Person and sets the name', NULL),
(116, 13, 'Methods', 'Methods are functions defined inside a class.', 'class User {   public function greet() {     return \"Hello!\";   } }', NULL, '2025-07-22 07:46:00', '2025-07-22 07:46:00', 'A method greet() returns a greeting message.', NULL),
(117, 13, 'Constructor', 'A constructor is a special method that runs when an object is created.', 'class Book {   public function __construct() {     echo \"Book created\";   } }', NULL, '2025-07-22 07:46:46', '2025-07-22 07:46:46', 'Prints a message when the object is created.', NULL),
(118, 13, 'Inheritance', 'A class can inherit properties and methods from another class', 'class Animal {   public function move() {     echo \"Moving...\";   } }  class Dog extends Animal {}', NULL, '2025-07-22 07:47:35', '2025-07-22 07:47:35', 'Dog inherits the move() method from Animal.', NULL),
(119, 13, 'Polymorphism', 'Different classes can use the same method name but implement it differently', 'class Shape {   public function draw() {} }  class Circle extends Shape {   public function draw() {     echo \"Draw Circle\";   } }', NULL, '2025-07-22 07:48:28', '2025-07-22 07:48:28', 'Each class provides its own version of the draw() method.', NULL),
(120, 13, 'Encapsulation', 'Encapsulation hides internal details and only exposes necessary parts', 'class Account {   private $balance = 100;    public function getBalance() {     return $this->balance;   } }', NULL, '2025-07-22 07:49:25', '2025-07-22 07:49:25', 'You cannot access balance directly; you must use getBalance().', NULL),
(121, 13, 'Interfaces', 'Interfaces define required methods for any implementing class', 'interface Logger {   public function log($message); }', NULL, '2025-07-22 07:50:13', '2025-07-22 07:50:13', 'Any class implementing Logger must define a log() method.', NULL),
(122, 13, 'Abstraction', 'Abstract classes define structure but leave implementation to subclasses.', 'abstract class Animal {   abstract public function makeSound(); }', NULL, '2025-07-22 07:50:58', '2025-07-22 07:50:58', 'Subclasses must define the makeSound() method.', NULL),
(123, 15, 'What is jQuery?', 'jQuery is a fast JavaScript library that simplifies HTML document handling, event binding, and AJAX.', '<script>\r\n  $(document).ready(function() {\r\n    alert(\'Page is ready!\');\r\n  });\r\n</script>', NULL, '2025-07-22 07:52:05', '2025-07-22 07:52:05', 'Shows an alert when the page has finished loading.', NULL),
(124, 15, 'Element Selection', 'Use $() to select and manipulate HTML elements.', '$(\'#myDiv\').hide();', NULL, '2025-07-22 07:53:49', '2025-07-22 07:53:49', 'Hides the element with ID myDiv.', NULL),
(125, 15, 'Event Handling', 'jQuery simplifies handling user actions like clicks.', '$(\'button\').click(function() {   alert(\'Button clicked!\'); });', NULL, '2025-07-22 07:54:34', '2025-07-22 07:54:34', 'Displays an alert when a button is click', NULL),
(126, 15, 'Changing Content', 'jQuery allows easy content updates.', '$(\'#message\').text(\'New message!\');', NULL, '2025-07-22 07:55:33', '2025-07-22 07:55:33', 'Changes the text of the #message element.', NULL),
(127, 15, 'CSS Manipulation', 'You can change styles directly.', '$(\'p\').css(\'color\', \'red\');', NULL, '2025-07-22 07:56:26', '2025-07-22 07:56:26', 'All <p> elements will be styled red.', NULL),
(128, 15, 'Show/Hide Elements', 'jQuery supports hiding/showing elements with effects.', '$(\'#box\').fadeOut();', NULL, '2025-07-22 07:57:08', '2025-07-22 07:57:08', 'Fades out the #box element.', NULL),
(129, 15, 'Working with Forms', 'You can easily retrieve input values', 'let name = $(\'#nameInput\').val();', NULL, '2025-07-22 07:57:55', '2025-07-22 07:57:55', 'Gets the value entered in an input field', NULL),
(130, 15, 'AJAX Requests', 'Fetch data from a server without reloading the page.', '$.get(\'/api/user\', function(data) {   console.log(data); });', NULL, '2025-07-22 07:58:39', '2025-07-22 07:58:39', 'Sends a GET request and logs the returned data.', NULL),
(131, 15, 'Adding Elements to the DOM', 'You can dynamically add elements to the page', '$(\'#list\').append(\'<li>New item</li>\');', NULL, '2025-07-22 07:59:25', '2025-07-22 07:59:25', 'Adds a new list item to an existing list.', NULL),
(132, 15, 'Animations', 'jQuery provides simple built-in animations.', '$(\'#box\').slideToggle();', NULL, '2025-07-22 08:00:10', '2025-07-22 08:00:10', 'Toggles visibility of the box with a sliding effect.', NULL),
(133, 8, 'CSS Selectors', 'Selectors are used to target HTML elements for styling. Common types include element selectors, class selectors, ID selectors, and combinators.', '<p class=\"highlight\">This is a highlighted paragraph.</p>\r\n\r\n<style>\r\n  .highlight {\r\n    color: red;\r\n    font-weight: bold;\r\n  }\r\n</style>', NULL, '2025-07-22 08:15:57', '2025-07-22 08:15:57', 'The <p> element with the class highlight is styled with red text and bold font.', NULL),
(134, 8, 'Text Styling', 'CSS allows you to style text properties like color, size, alignment, font family, letter spacing, and line height.', '<h1>Welcome</h1>\r\n\r\n<style>\r\n  h1 {\r\n    color: blue;\r\n    font-size: 32px;\r\n    text-align: center;\r\n    letter-spacing: 2px;\r\n  }\r\n</style>', NULL, '2025-07-22 08:16:58', '2025-07-22 08:16:58', 'The <h1> is styled to have blue color, large font size, centered alignment, and spaced letters.', NULL),
(135, 8, 'Colors in CSS', 'Colors can be defined using color names, HEX codes, RGB, or HSL values.', '<div class=\"color-box\">Colored Box</div>\r\n\r\n<style>\r\n  .color-box {\r\n    background-color: #ffcc00;\r\n    color: #000;\r\n    padding: 10px;\r\n  }\r\n</style>', NULL, '2025-07-22 08:17:40', '2025-07-22 08:17:40', 'The background is set to yellow (#ffcc00), the text is black, and padding is added for spacing.', NULL),
(136, 8, 'The Box Model', 'Every HTML element is treated as a box consisting of content, padding, border, and margin.', '<div class=\"box\">Box Content</div>\r\n\r\n<style>\r\n  .box {\r\n    padding: 20px;\r\n    border: 2px solid black;\r\n    margin: 10px;\r\n  }\r\n</style>', NULL, '2025-07-22 08:18:22', '2025-07-22 08:18:22', 'The box has 20px padding inside, a 2px black border, and 10px margin around it.', NULL),
(137, 8, 'Classes vs IDs', 'Classes can be reused on multiple elements, while IDs should be unique for one element.', '<p class=\"note\">This is a note.</p>\r\n<p id=\"unique\">This is unique.</p>\r\n\r\n<style>\r\n  .note {\r\n    color: green;\r\n  }\r\n  #unique {\r\n    font-weight: bold;\r\n  }\r\n</style>', NULL, '2025-07-22 08:19:04', '2025-07-22 08:19:04', 'The .note class applies green color, while the #unique ID makes the text bold.', NULL),
(138, 8, 'Flexbox Layout', 'Flexbox helps create responsive layouts with flexible item alignment along horizontal or vertical axes.', '<div class=\"flex-container\">\r\n  <div>One</div>\r\n  <div>Two</div>\r\n  <div>Three</div>\r\n</div>\r\n\r\n<style>\r\n  .flex-container {\r\n    display: flex;\r\n    gap: 10px;\r\n  }\r\n  .flex-container div {\r\n    background-color: lightblue;\r\n    padding: 20px;\r\n  }\r\n</style>', NULL, '2025-07-22 08:19:51', '2025-07-22 08:19:51', 'Items inside the flex container are arranged in a row with 10px gaps between them.', NULL),
(139, 8, 'Styling Links', 'Links can be styled in different states: normal, hover, active, and visited.', '<a href=\"#\">Click Me</a>\r\n\r\n<style>\r\n  a {\r\n    color: blue;\r\n    text-decoration: none;\r\n  }\r\n  a:hover {\r\n    color: red;\r\n    text-decoration: underline;\r\n  }\r\n</style>', NULL, '2025-07-22 08:20:32', '2025-07-22 08:20:32', 'The link is blue and has no underline by default. On hover, it turns red and underlined.', NULL),
(140, 8, 'CSS Positioning', 'The position property controls how elements are placed in the document: static, relative, absolute, fixed, or sticky.', '<div class=\"parent\">\r\n  <div class=\"child\">I\'m positioned</div>\r\n</div>\r\n\r\n<style>\r\n  .parent {\r\n    position: relative;\r\n  }\r\n  .child {\r\n    position: absolute;\r\n    top: 10px;\r\n    left: 20px;\r\n    background-color: yellow;\r\n  }\r\n</style>', NULL, '2025-07-22 08:21:37', '2025-07-22 08:21:37', 'The .child div is absolutely positioned 10px from the top and 20px from the left of its .parent container.', NULL),
(141, 8, 'Responsive Design with Media Queries', 'Media queries allow you to apply styles based on screen size or device type.', '<div class=\"responsive-box\">Resize the window</div>\r\n\r\n<style>\r\n  .responsive-box {\r\n    background-color: green;\r\n    color: white;\r\n    padding: 20px;\r\n  }\r\n\r\n  @media (max-width: 600px) {\r\n    .responsive-box {\r\n      background-color: red;\r\n    }\r\n  }\r\n</style>', NULL, '2025-07-22 08:22:19', '2025-07-22 08:22:19', 'The box is green on large screens. If the screen is smaller than 600px, it turns red.', NULL),
(142, 8, 'Transitions and Animations', 'CSS transitions create smooth changes in styles over time, while animations can control multiple states.', '<button class=\"btn\">Hover Me</button>\r\n\r\n<style>\r\n  .btn {\r\n    background-color: blue;\r\n    color: white;\r\n    padding: 10px;\r\n    transition: background-color 0.3s;\r\n  }\r\n\r\n  .btn:hover {\r\n    background-color: darkblue;\r\n  }\r\n</style>', NULL, '2025-07-22 08:23:07', '2025-07-22 08:23:07', 'The button changes background color smoothly when hovered, thanks to the transition property.', NULL),
(143, 16, 'What is Vue.js and Why Use It?', 'Vue.js is a JavaScript framework for building user interfaces. It\'s simple, fast, and easy to integrate.', '<!-- HTML -->\r\n<div id=\"app\">\r\n  {{ message }}\r\n</div>\r\n\r\n<!-- Vue -->\r\n<script>\r\n  const app = Vue.createApp({\r\n    data() {\r\n      return {\r\n        message: \'Welcome to Vue.js!\'\r\n      };\r\n    }\r\n  });\r\n  app.mount(\'#app\');\r\n</script>', NULL, '2025-07-22 10:01:32', '2025-07-22 10:01:32', 'We linked Vue to a DOM element.\r\n\r\nUsed data() to define the message variable.\r\n\r\nDisplayed it using {{ message }} (template binding).', NULL),
(144, 16, 'Two-Way Binding with v-model', 'v-model creates a two-way binding between form inputs and Vue data.', '<div id=\"app\">\r\n  <input v-model=\"name\" />\r\n  <p>Hello, {{ name }}</p>\r\n</div>\r\n\r\n<script>\r\n  Vue.createApp({\r\n    data() {\r\n      return {\r\n        name: \'\'\r\n      };\r\n    }\r\n  }).mount(\'#app\');\r\n</script>', NULL, '2025-07-22 10:02:17', '2025-07-22 10:02:17', 'The input field is bound to the name variable.\r\n\r\nUpdates in the input reflect in the paragraph, and vice versa.', NULL),
(145, 16, 'Conditional Rendering with v-if and v-else', 'Use v-if and v-else to conditionally show elements.', '<div id=\"app\">\r\n  <button @click=\"loggedIn = !loggedIn\">Toggle Login</button>\r\n  <p v-if=\"loggedIn\">You are logged in</p>\r\n  <p v-else>Please log in</p>\r\n</div>\r\n\r\n<script>\r\n  Vue.createApp({\r\n    data() {\r\n      return {\r\n        loggedIn: false\r\n      };\r\n    }\r\n  }).mount(\'#app\');\r\n</script>', NULL, '2025-07-22 10:03:01', '2025-07-22 10:03:01', 'Clicking the button toggles loggedIn.\r\n\r\nv-if and v-else display different messages based on its value.', NULL);
INSERT INTO `lessons` (`id`, `course_id`, `title`, `content`, `example`, `slug`, `created_at`, `updated_at`, `example_description`, `order`) VALUES
(146, 16, 'Looping with v-for', 'v-for is used to loop over arrays and render elements for each item.', '<div id=\"app\">\r\n  <ul>\r\n    <li v-for=\"item in items\" :key=\"item\">{{ item }}</li>\r\n  </ul>\r\n</div>\r\n\r\n<script>\r\n  Vue.createApp({\r\n    data() {\r\n      return {\r\n        items: [\'Apple\', \'Banana\', \'Orange\']\r\n      };\r\n    }\r\n  }).mount(\'#app\');\r\n</script>', NULL, '2025-07-22 10:03:46', '2025-07-22 10:03:46', 'Each item in the array items is displayed inside a <li> element.', NULL),
(147, 16, 'Handling Events with @click and methods', 'Vue allows you to bind events like clicks to methods using @click.', '<div id=\"app\">\r\n  <button @click=\"increase\">Click Me</button>\r\n  <p>Clicks: {{ count }}</p>\r\n</div>\r\n\r\n<script>\r\n  Vue.createApp({\r\n    data() {\r\n      return {\r\n        count: 0\r\n      };\r\n    },\r\n    methods: {\r\n      increase() {\r\n        this.count++;\r\n      }\r\n    }\r\n  }).mount(\'#app\');\r\n</script>', NULL, '2025-07-22 10:04:32', '2025-07-22 10:04:32', 'Clicking the button runs the increase method, which increments count.', NULL),
(148, 16, 'Computed Properties (instead of Filters)', 'Filters were removed in Vue 3. Use computed properties instead for derived values.', '<div id=\"app\">\r\n  <input v-model=\"message\" />\r\n  <p>{{ reversedMessage }}</p>\r\n</div>\r\n\r\n<script>\r\n  Vue.createApp({\r\n    data() {\r\n      return {\r\n        message: \'\'\r\n      };\r\n    },\r\n    computed: {\r\n      reversedMessage() {\r\n        return this.message.split(\'\').reverse().join(\'\');\r\n      }\r\n    }\r\n  }).mount(\'#app\');\r\n</script>', NULL, '2025-07-22 10:05:23', '2025-07-22 10:05:23', 'reversedMessage is automatically updated when message changes.', NULL),
(149, 16, 'Dynamic CSS Classes with v-bind:class', 'You can bind class names dynamically based on conditions.', '<div id=\"app\">\r\n  <p :class=\"{ active: isActive }\">Styled Text</p>\r\n  <button @click=\"isActive = !isActive\">Toggle Class</button>\r\n</div>\r\n\r\n<style>\r\n.active {\r\n  color: green;\r\n  font-weight: bold;\r\n}\r\n</style>\r\n\r\n<script>\r\n  Vue.createApp({\r\n    data() {\r\n      return {\r\n        isActive: false\r\n      };\r\n    }\r\n  }).mount(\'#app\');\r\n</script>', NULL, '2025-07-22 10:06:11', '2025-07-22 10:06:11', 'The class active is added or removed based on isActive.', NULL),
(150, 16, 'Creating Components', 'Vue allows reusable UI blocks through components.', '<div id=\"app\">\r\n  <greeting></greeting>\r\n</div>\r\n\r\n<script>\r\n  const Greeting = {\r\n    template: \'<h2>Hello from the component!</h2>\'\r\n  };\r\n\r\n  const app = Vue.createApp({});\r\n  app.component(\'greeting\', Greeting);\r\n  app.mount(\'#app\');\r\n</script>', NULL, '2025-07-22 10:06:54', '2025-07-22 10:06:54', 'We created a greeting component and used it in the main app.', NULL),
(151, 16, 'Passing Data to Components with props', 'Props allow the parent component to send data to the child.', '<div id=\"app\">\r\n  <greeting name=\"John\"></greeting>\r\n</div>\r\n\r\n<script>\r\n  const Greeting = {\r\n    props: [\'name\'],\r\n    template: \'<p>Hello, {{ name }}!</p>\'\r\n  };\r\n\r\n  const app = Vue.createApp({});\r\n  app.component(\'greeting\', Greeting);\r\n  app.mount(\'#app\');\r\n</script>', NULL, '2025-07-22 10:07:54', '2025-07-22 10:07:54', 'The name prop is passed from the parent and rendered inside the child component.', NULL),
(152, 16, 'Handling Form Submission', 'Vue can handle forms easily using v-model and @submit.prevent.', '<div id=\"app\">\r\n  <form @submit.prevent=\"handleSubmit\">\r\n    <input v-model=\"email\" placeholder=\"Enter your email\">\r\n    <button type=\"submit\">Submit</button>\r\n  </form>\r\n  <p>Your email: {{ email }}</p>\r\n</div>\r\n\r\n<script>\r\n  Vue.createApp({\r\n    data() {\r\n      return {\r\n        email: \'\'\r\n      };\r\n    },\r\n    methods: {\r\n      handleSubmit() {\r\n        alert(`Submitted: ${this.email}`);\r\n      }\r\n    }\r\n  }).mount(\'#app\');\r\n</script>', NULL, '2025-07-22 10:08:40', '2025-07-22 10:08:40', 'The form prevents page reload and calls handleSubmit on submit.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_07_17_221027_create_courses_table', 1),
(5, '2025_07_18_081431_add_phone_and_profile_image_to_users_table', 2),
(6, '2025_07_18_132816_create_contacts_table', 3),
(7, '2025_07_18_135941_create_lessons_table', 4),
(8, '2025_07_18_170658_add_description_to_courses_table', 5),
(9, '2025_07_18_171004_add_course_id_to_lessons_table', 6),
(10, '2025_07_18_171303_make_slug_nullable_in_lessons_table', 7),
(11, '2025_07_18_180835_add_example_to_lessons_table', 8),
(12, '2025_07_18_184745_2025_07_18_135941_create_lessons_table', 9),
(13, '2025_07_19_090304_add_role_to_users_table', 10),
(14, '2025_07_19_163346_create_course_user_table', 11),
(15, '2025_07_19_183501_add_order_to_lessons_table', 12),
(16, '2025_07_20_025001_create_quizzes_table', 13),
(17, '2025_07_20_031038_create_questions_table', 14),
(18, '2025_07_20_031210_create_questions_table', 15),
(19, '2025_07_20_041944_add_slug_to_courses_table', 15),
(20, '2025_07_20_051720_add_quiz_id_to_questions_table', 16),
(21, '2025_07_20_061940_create_course_results_table', 17),
(22, '2025_07_20_072036_add_question_text_to_questions_table', 18),
(23, '2025_07_20_091837_add_options_to_questions_table', 19),
(24, '2025_07_20_094941_add_course_id_to_quizzes_table', 20),
(25, '2025_07_23_150335_create_completed_lessons_table', 20),
(26, '2025_07_23_194553_update_lesson_id_to_course_id_in_completed_lessons', 21),
(27, '2025_07_23_194724_update_lesson_id_to_course_id_in_completed_lessons', 22),
(28, '2025_07_23_194921_create_completed_courses_table', 23),
(29, '2025_07_28_162540_create_subscribers_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quiz_id` bigint(20) UNSIGNED NOT NULL,
  `question_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `option_b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_d` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct_option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `quiz_id`, `question_text`, `option_a`, `created_at`, `updated_at`, `option_b`, `option_c`, `option_d`, `correct_option`) VALUES
(5, 9, '1. How do you define the title of an HTML page?', '<header>', '2025-07-21 16:37:28', '2025-07-21 16:37:28', '<title>', '<heading>', '<h1>', 'B'),
(6, 9, '2. Which element is used for an unordered list?', '<list>', '2025-07-21 16:38:52', '2025-07-21 16:38:52', '<ul>', '<ol>', '<unordered>', 'B'),
(7, 9, '3.How do you add an image in HTML?', '<img src=\"image.jpg\" alt=\"Description\">', '2025-07-21 16:40:15', '2025-07-21 16:40:15', '<picture src=\"image.jpg\" alt=\"Description\">', '<image src=\"image.jpg\" alt=\"Description\">', '<img alt=\"Description\">', 'A'),
(8, 9, '4.Which tag is used for an ordered list?', '<ul>', '2025-07-21 16:41:44', '2025-07-21 16:41:44', '<list>', '<li>', '<ol>', 'D'),
(9, 9, '5.How do you write a comment in HTML?', '<!-- This is a comment -->', '2025-07-21 16:43:23', '2025-07-21 16:43:23', '<comment>This is a comment</comment>', '<!-- This is a note -->', '<note>This is a comment</note>', 'A'),
(10, 9, '6.What tag creates a line break?', '<br>', '2025-07-21 16:44:43', '2025-07-21 16:44:43', '<lb>', '<linebreak>', '<newline>', 'A'),
(11, 9, '7.How do you create a link in HTML?', '<link href=\"url\">', '2025-07-21 16:46:11', '2025-07-21 16:46:11', '<a href=\"url\">', '<href=\"url\">', '<url href=\"url\">', 'B'),
(12, 9, '8.Which tag makes text bold?', '<bold>', '2025-07-21 16:47:20', '2025-07-21 16:47:20', '<b>', '<strong>', '<boldtext>', 'B'),
(13, 9, '9.What is the tag for creating a table?', '<table>', '2025-07-21 16:48:39', '2025-07-21 16:48:39', '<grid>', '<tabular>', '<tbl>', 'A'),
(14, 9, 'Which tag defines a paragraph?', '<p>', '2025-07-21 16:49:59', '2025-07-21 16:49:59', '<paragraph>', '<para>', '<text>', 'A'),
(25, 10, '1. What does CSS stand for?', 'Computer Style Sheets', '2025-07-22 05:55:52', '2025-07-22 05:55:52', 'Creative Style Sheets', 'Cascading Style Sheets', 'Colorful Style Sheets', 'C'),
(26, 10, 'Which HTML tag is used to link an external CSS file?', '<css>', '2025-07-22 05:57:05', '2025-07-22 05:57:05', '<script>', '<link>', '<style>', 'C'),
(27, 10, 'Where in an HTML document is the correct place to refer to an external CSS file?', 'At the end of the body section', '2025-07-22 05:58:07', '2025-07-22 05:58:07', 'In the head section', 'After the title', 'Before the DOCTYPE', 'B'),
(28, 10, 'Which property is used to change the background color?', 'color', '2025-07-22 05:59:30', '2025-07-22 05:59:30', 'bgcolor', 'background-color', 'background', 'C'),
(29, 10, 'How do you add a comment in CSS?', '<!-- comment -->', '2025-07-22 06:00:42', '2025-07-22 06:00:42', '// comment', '/* comment */', '# comment', 'C'),
(30, 10, 'Which is the correct CSS syntax?', '{body:color=black;}', '2025-07-22 06:02:43', '2025-07-22 06:02:43', 'body {color: black;}', 'body = {color: black;}', '{body;color:black;}', 'B'),
(31, 10, 'How do you insert a background image in CSS?', 'background-image: url(image.png);', '2025-07-22 06:03:54', '2025-07-22 06:03:54', 'img: url(image.png);', 'background: image(image.png);', 'url-background(image.png);', 'A'),
(32, 10, 'Which CSS property controls the text size?', 'font-style B', '2025-07-22 06:04:42', '2025-07-22 06:04:42', 'text-style', 'font-size', 'text-size', 'C'),
(33, 10, 'What is the default position of background image in CSS?', 'center', '2025-07-22 06:05:52', '2025-07-22 06:05:52', 'top right', 'left top', 'center center', 'C'),
(34, 10, 'How do you make a list not display bullets?  A) list: none; B) list-style-type: none; C) bullet: 0; D) text-style: none;', 'list: none;', '2025-07-22 06:06:47', '2025-07-22 06:06:47', 'list-style-type: none;', 'bullet: 0;', 'text-style: none;', 'B'),
(45, 14, 'What is the correct file extension for Python files?', '.pt', '2025-07-22 08:51:03', '2025-07-22 08:51:03', '.py', '.pyt', '.python', 'B'),
(46, 14, 'How do you print something in Python?', 'echo(\"Hello\")', '2025-07-22 08:52:04', '2025-07-22 08:52:04', 'print(\"Hello\")', 'printf(\"Hello\")', 'console.log(\"Hello\")', 'B'),
(47, 14, 'Which of these is a valid variable name in Python?', '2name', '2025-07-22 08:52:59', '2025-07-22 08:52:59', 'name_1', '@name', 'name-1', 'B'),
(48, 14, 'How do you write a comment in Python?', '// This is a comment', '2025-07-22 08:53:57', '2025-07-22 08:53:57', '<!-- This is a comment -->', '# This is a comment', '** This is a comment **', 'C'),
(49, 14, 'What data type is the value: True?', 'String', '2025-07-22 08:55:00', '2025-07-22 08:55:00', 'Integer', 'Boolean', 'Float', 'C'),
(50, 14, 'Which operator is used for exponentiation in Python?', '^', '2025-07-22 08:56:22', '2025-07-22 08:56:22', '**', 'exp()', '^^', 'B'),
(51, 14, 'How do you create a function in Python?', 'def myFunction():', '2025-07-22 08:57:20', '2025-07-22 08:57:20', 'function myFunction():', 'create myFunction():', 'define myFunction():', 'A'),
(52, 14, 'What is the output of print(3 // 2)?', '1.5', '2025-07-22 08:57:57', '2025-07-22 08:57:57', '1', '2', '0', 'B'),
(53, 14, 'What does len() function do?', 'Counts the number of arguments', '2025-07-22 08:58:49', '2025-07-22 08:58:49', 'Returns the length of an object', 'Calculates length of a variable name', 'Returns number of lines', 'B'),
(54, 14, 'Which keyword is used for a loop in Python?', 'repeat', '2025-07-22 08:59:34', '2025-07-22 08:59:34', 'iterate', 'for', 'loop', 'C'),
(65, 16, 'What is Laravel?', 'A CMS', '2025-07-22 09:36:39', '2025-07-22 09:36:39', 'A PHP framework', 'A database', 'A JavaScript library', 'B'),
(66, 16, 'Which command is used to create a new Laravel project using Composer?', 'laravel new project', '2025-07-22 09:37:43', '2025-07-22 09:37:43', 'php artisan new', 'composer create-project laravel/laravel project', 'npm install laravel', 'C'),
(67, 16, 'What design pattern does Laravel use extensively?', 'Singleton', '2025-07-22 09:38:33', '2025-07-22 09:38:33', 'Factory', 'MVC', 'Observer', 'C'),
(68, 16, 'Which file is used to define routes in a Laravel application?', 'web.php', '2025-07-22 09:39:35', '2025-07-22 09:39:35', 'routes.php', 'route.php', 'url.php', 'A'),
(69, 16, 'Which command is used to run database migrations?', 'php artisan migrate:run', '2025-07-22 09:40:26', '2025-07-22 09:40:26', 'php artisan db:migrate', 'php artisan migrate', 'php artisan schema:ru', 'C'),
(70, 16, 'How do you create a new controller in Laravel?', 'php artisan make:model ControllerName', '2025-07-22 09:41:23', '2025-07-22 09:41:23', 'php artisan make:controller ControllerName', 'php artisan create:controller ControllerName', 'php artisan new:controller ControllerName', 'B'),
(71, 16, 'What is the default templating engine used by Laravel?', 'Twig', '2025-07-22 09:42:09', '2025-07-22 09:42:09', 'Blade', 'Smarty', 'Mustache', 'B'),
(72, 16, 'What is the purpose of CSRF protection in Laravel?', 'Prevents SQL injection', '2025-07-22 09:43:03', '2025-07-22 09:43:03', 'Secures API endpoints', 'Protects against cross-site request forgery', 'Manages database session', 'C'),
(73, 16, 'Which directory contains the Laravel configuration files?', 'app/config', '2025-07-22 09:43:58', '2025-07-22 09:43:58', 'config/', 'resources/config', 'settings/', 'B'),
(74, 16, 'What is the use of .env file in Laravel?', 'Define routes', '2025-07-22 09:44:48', '2025-07-22 09:44:48', 'Store environment variables', 'Compile Blade templates', 'Manage sessions', 'B'),
(85, 18, 'What is Vue.js? A)B) C) D) A', 'A CSS framework', '2025-07-22 10:16:30', '2025-07-22 10:16:30', 'A back-end language', 'A JavaScript framework for building UIs', 'database engine', 'C'),
(86, 18, 'Who created Vue.js?', 'Evan You', '2025-07-22 10:18:33', '2025-07-22 10:18:33', 'Mark Zuckerberg', 'Brendan Eich', 'Dan Abramov', 'A'),
(87, 18, 'What is the correct CDN to include Vue.js?', 'vuejs.org/cdn', '2025-07-22 10:19:27', '2025-07-22 10:19:27', 'https://cdn.vuejs.org/vue.js', 'https://cdn.jsdelivr.net/npm/vue@2', 'https://vue.dev/script.js', 'C'),
(88, 18, 'What does the v-model directive do?', 'Adds styles', '2025-07-22 10:20:46', '2025-07-22 10:20:46', 'Binds input data', 'Creates a loop', 'Declares a component', 'B'),
(89, 18, 'Which directive is used for conditional rendering in Vue.js?', 'v-show', '2025-07-22 10:21:52', '2025-07-22 10:21:52', 'v-if', 'v-render', 'v-switch', 'B'),
(90, 18, 'Which directive is used to render a list of items in Vue.js?', 'v-for', '2025-07-22 10:22:45', '2025-07-22 10:22:45', 'v-each', 'v-list', 'v-repeat', 'A'),
(91, 18, 'What is the correct syntax to bind an HTML attribute in Vue?', 'bind:href=\"url\"', '2025-07-22 10:23:48', '2025-07-22 10:23:48', 'v-bind:href=\"url\"', 'href.bind=\"url\"', 'href=\"{{url}}\"', 'B'),
(92, 18, 'Which lifecycle hook is called after the component is mounted?', 'created()', '2025-07-22 10:24:58', '2025-07-22 10:24:58', 'mounted()', 'beforeMount()', 'init()', 'B'),
(93, 18, 'How do you define a component in Vue.js?', 'Vue.component()', '2025-07-22 10:25:50', '2025-07-22 10:25:50', 'Vue.newComponent()', 'Vue.addComponent()', 'Vue.define()', 'A'),
(94, 18, 'What is the data option in a Vue component used for?', 'Store styles', '2025-07-22 10:26:35', '2025-07-22 10:26:35', 'Define methods', 'Store reactive state', 'Handle props', 'C'),
(105, 15, 'What does OOP stand for?', 'Objective-Oriented Programming', '2025-07-22 10:39:32', '2025-07-22 10:39:32', 'Object-Oriented Programming', 'Original-Oriented Programming', 'Open Object Programming', 'B'),
(106, 15, 'Which of the following is not a principle of OOP?', 'Inheritance', '2025-07-22 10:40:23', '2025-07-22 10:40:23', 'Polymorphism', 'Compilation', 'Encapsulation', 'C'),
(107, 15, 'What is a class in OOP?', 'A function', '2025-07-22 10:43:07', '2025-07-22 10:43:07', 'A blueprint for creating objects', 'A data type', 'A library', 'B'),
(108, 15, 'What is an object in OOP?', 'A variable', '2025-07-22 10:44:25', '2025-07-22 10:44:25', 'A function', 'An instance of a class', 'A data structure', 'C'),
(109, 15, 'Which feature of OOP allows code reuse?', 'Polymorphism', '2025-07-22 10:45:17', '2025-07-22 10:45:17', 'Inheritance', 'Encapsulation', 'Abstraction', 'B'),
(110, 15, 'Which keyword is used to create a class in Python?', 'define', '2025-07-22 10:46:51', '2025-07-22 10:46:51', 'function', 'class', 'object', 'C'),
(111, 15, 'What is encapsulation?', 'Combining multiple classes', '2025-07-22 10:47:47', '2025-07-22 10:47:47', 'Hiding data within a class', 'Writing long code', 'Copying code between files', 'B'),
(112, 15, 'What is inheritance in OOP?', 'Writing a function', '2025-07-22 10:48:38', '2025-07-22 10:48:38', 'Creating objects', 'Acquiring properties from another class', 'Copying values from variables', 'C'),
(113, 15, 'What is polymorphism in OOP?', 'Having many forms of a function or method', '2025-07-22 10:49:33', '2025-07-22 10:49:33', 'Writing many classes', 'Creating abstract methods', 'Using only one class', 'A'),
(114, 15, 'What is the purpose of a constructor?', 'To destroy objects', '2025-07-22 10:50:41', '2025-07-22 10:50:41', 'To initialize objects when created', 'To inherit from other classes', 'To override data', 'B'),
(125, 17, 'What is jQuery?', 'A JavaScript compiler', '2025-07-22 15:11:19', '2025-07-22 15:11:19', 'A CSS preprocessor', 'A JavaScript library', 'A database tool', 'C'),
(126, 17, 'Which symbol is used for jQuery?', '#', '2025-07-22 15:12:08', '2025-07-22 15:12:08', '$', '@', '%', 'B'),
(127, 17, 'What does the jQuery function $(document).ready() do?', 'Executes code once the page is fully loaded', '2025-07-22 15:13:08', '2025-07-22 15:13:08', 'Starts a timer', 'Binds an event', 'Submits a form', 'A'),
(128, 17, 'Which syntax is correct for hiding an element with id \"box\"?', 'hide(\"#box\");', '2025-07-22 15:14:00', '2025-07-22 15:14:00', '$(\"#box\").hide();', '$(\"box\").hide();', 'document.hide(\"#box\");', 'B'),
(129, 17, 'Which jQuery method is used to add a class to an element?', 'addClass()', '2025-07-22 15:14:50', '2025-07-22 15:14:50', 'appendClass()', 'setClass()', 'putClass()', 'A'),
(130, 17, 'What does the .val() method do in jQuery?', 'Validates the form', '2025-07-22 15:15:49', '2025-07-22 15:15:49', 'Gets or sets the value of an input field', 'Gets the text inside a div', 'Checks the variable type', 'B'),
(131, 17, 'Which method is used to perform an AJAX request in jQuery?', 'ajaxSend()', '2025-07-22 15:24:12', '2025-07-22 15:24:12', 'getJSON()', '$.ajax()', 'fetchData()', 'C'),
(132, 17, 'What does the .fadeOut() method do?', 'Hides an element gradually', '2025-07-22 15:25:00', '2025-07-22 15:25:00', 'Deletes an element', 'Changes opacity instantly', 'Adds a blur effect', 'A'),
(133, 17, 'Which jQuery method is used to stop animations?', 'pause()', '2025-07-22 15:25:51', '2025-07-22 15:25:51', 'stop()', 'end()', 'halt()', 'B'),
(134, 17, 'What is the default jQuery file extension?', '.java', '2025-07-22 15:26:41', '2025-07-22 15:26:41', '.jq', '.js', '.jquery', 'C'),
(135, 13, 'What is Bootstrap?', 'A CSS preprocessor', '2025-07-22 15:28:51', '2025-07-22 15:28:51', 'A JavaScript library', 'A front-end framework', 'A back-end framework', 'C'),
(136, 13, 'Which company developed Bootstrap?', 'Google', '2025-07-22 15:29:40', '2025-07-22 15:29:40', 'Twitter', 'Facebook', 'Microsoft', 'B'),
(137, 13, 'What is the latest major version of Bootstrap (as of mid-2024)?', '3', '2025-07-22 15:32:15', '2025-07-22 15:32:15', '4', '5', '6', 'C'),
(138, 13, 'Which class makes an element responsive in Bootstrap?', '.img-static', '2025-07-22 15:33:04', '2025-07-22 15:33:04', '.img-fluid', '.img-responsive', '.img-scale', 'B'),
(139, 13, 'Which class is used to create a button in Bootstrap?', '.btn-style', '2025-07-22 15:33:57', '2025-07-22 15:33:57', '.button', '.btn', '.btn-class', 'C'),
(140, 13, 'Which Bootstrap class is used for a dark background with white text?', '.bg-dark .text-white', '2025-07-22 15:34:59', '2025-07-22 15:34:59', '.bg-black .text-light', '.background-dark .text-white', '.dark-bg .light-text', 'A'),
(141, 13, 'How many columns are there in Bootstrap’s grid system?', '10', '2025-07-22 15:36:09', '2025-07-22 15:36:09', '12', '16', '6', 'B'),
(142, 13, 'Which class is used to make a navigation bar responsive?', '.navbar-static', '2025-07-22 15:37:04', '2025-07-22 15:37:04', '.navbar-responsive', '.navbar-expand-lg', '.navbar-sm', 'C'),
(143, 13, 'Which class would you use to add a margin of 3 units on all sides?', '.m-3', '2025-07-22 15:37:52', '2025-07-22 15:37:52', '.p-3', '.margin-3', '.all-m-3', 'A'),
(144, 13, 'Which utility class adds padding on the top only?', '.padding-top', '2025-07-22 15:38:38', '2025-07-22 15:38:38', '.pt-3', '.pad-top-3', '.ptop-3', 'B'),
(145, 11, 'Who developed C#?', 'Google', '2025-07-22 15:43:31', '2025-07-22 15:43:31', 'Microsoft', 'Apple', 'Oracle', 'B'),
(146, 11, 'C# is part of which .NET framework? A) B)C)', 'JavaFX', '2025-07-22 15:44:39', '2025-07-22 15:44:39', 'Node.js', '.NET Core/ .NET Framework', 'Spring', 'C'),
(147, 11, 'Which of the following is the correct syntax to declare a variable in C#?', 'int x = 10;', '2025-07-22 15:45:26', '2025-07-22 15:45:26', 'x int = 10;', 'declare x as int = 10;', 'int: x = 10;', 'A'),
(148, 11, 'What is the default value of a boolean variable in C#?', '1', '2025-07-22 15:46:13', '2025-07-22 15:46:13', 'true', 'false', 'null', 'C'),
(149, 11, 'Which keyword is used to define a method that does not return a value?', 'return', '2025-07-22 15:46:56', '2025-07-22 15:46:56', 'null', 'void', 'none', 'C'),
(150, 11, 'Which data type is used to store a single character in C#?', 'string', '2025-07-22 15:59:01', '2025-07-22 15:59:01', 'char', 'text', 'byte', 'B'),
(151, 11, 'What does the static keyword mean in C#?', 'Variable value can change', '2025-07-22 15:59:52', '2025-07-22 15:59:52', 'Belongs to the instance', 'Belongs to the class, not the object', 'Variable is hidden', 'C'),
(152, 11, 'Which of these is the correct way to write a conditional statement in C#?', 'if x > y then', '2025-07-22 16:00:43', '2025-07-22 16:00:43', 'if (x > y)', 'if x > y:', 'when (x > y)', 'B'),
(153, 11, 'How do you write a single-line comment in C#?', '# comment', '2025-07-22 16:01:32', '2025-07-22 16:01:32', '<!-- comment -->', '// comment', '/* comment */', 'C'),
(154, 11, 'Which of these is used for inheritance in C#?', ':', '2025-07-22 16:02:24', '2025-07-22 16:02:24', '->', 'extands', 'inherits', 'A'),
(155, 12, 'What does PHP stand for?', 'Personal Home Page', '2025-07-22 16:03:53', '2025-07-22 16:03:53', 'Private Hosting Page', 'PHP: Hypertext Preprocessor', 'Preprocessor Home Page', 'C'),
(157, 12, 'Which symbol is used to declare a variable in PHP? A) @ B) $ C) # D) %', '@', '2025-07-24 09:25:44', '2025-07-24 09:25:44', '$', '#', '%', 'B'),
(158, 12, 'Which function is used to output text in PHP?', 'display()', '2025-07-24 09:27:34', '2025-07-24 09:27:34', 'echo()', 'printText()', 'write()', 'B'),
(159, 12, 'How do you write a single-line comment in PHP?', '<!-- comment -->', '2025-07-24 09:28:33', '2025-07-24 09:28:33', '// comment', '# comment', 'Both B and C', 'D'),
(160, 12, 'Which of the following is a correct way to start a PHP block?', '<php>', '2025-07-24 09:29:28', '2025-07-24 09:29:28', '<script>', '<?php', '<?>', 'C'),
(161, 12, 'What is the correct file extension for PHP files?', '.ph', '2025-07-24 09:30:23', '2025-07-24 09:30:23', '.php', '.phtml', 'Both B and C', 'D'),
(162, 12, 'Which function is used to get the length of a string in PHP?', 'strlen()', '2025-07-24 09:31:11', '2025-07-24 09:31:11', 'count()', 'length()', 'size()', 'A'),
(163, 12, 'How do you create an array in PHP? A)B)  C)  D)', 'new Array()', '2025-07-24 09:31:57', '2025-07-24 09:31:57', 'array()', 'create array()', '[ ]', 'B'),
(164, 12, 'Which function is used to include a file in PHP?', 'import()', '2025-07-24 09:32:54', '2025-07-24 09:32:54', 'use()', 'include()', 'require_once()', 'C'),
(165, 12, 'What is the difference between include and require?', 'require gives a warning', '2025-07-24 09:33:41', '2025-07-24 09:33:41', 'include stops the script on error', 'require stops the script on error', 'Both do the same', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_limit` int(11) DEFAULT NULL,
  `max_attempts` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `course_id`, `title`, `description`, `time_limit`, `max_attempts`, `created_at`, `updated_at`) VALUES
(9, 7, 'final quiz for html course', NULL, 40, 3, '2025-07-21 05:43:32', '2025-07-21 05:43:32'),
(10, 8, 'final quiz for css course', NULL, 40, 3, '2025-07-21 05:44:02', '2025-07-21 05:44:02'),
(11, 9, 'final quiz for c# course', NULL, 40, 3, '2025-07-21 05:44:51', '2025-07-21 05:44:51'),
(12, 10, 'final quiz for php course', NULL, 40, 3, '2025-07-21 05:45:27', '2025-07-21 05:45:27'),
(13, 11, 'final quiz for bootstrap course', NULL, 40, 3, '2025-07-21 05:46:07', '2025-07-21 05:46:07'),
(14, 12, 'final quiz for python', NULL, 40, 3, '2025-07-21 05:46:38', '2025-07-21 05:46:38'),
(15, 13, 'final quiz for oop course', NULL, 40, 3, '2025-07-21 05:47:11', '2025-07-21 05:47:11'),
(16, 14, 'final quiz for laravel course', NULL, 40, 3, '2025-07-21 05:47:34', '2025-07-21 05:47:34'),
(17, 15, 'final quiz for j-query course', NULL, 40, 3, '2025-07-21 05:47:55', '2025-07-21 05:47:55'),
(18, 16, 'final quiz for vue.js course', NULL, 40, 3, '2025-07-21 05:48:18', '2025-07-21 05:48:18');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'hjjgyyjhbg@gmail.com', '2025-07-28 13:46:24', '2025-07-28 13:46:24'),
(2, 'hgfdr@gmail.com', '2025-07-28 13:52:41', '2025-07-28 13:52:41'),
(3, 'wissal@gmail.com', '2025-07-31 05:41:49', '2025-07-31 05:41:49'),
(4, 'test@gmail.com', '2025-07-31 06:07:04', '2025-07-31 06:07:04'),
(5, 'hgg@gmail.com', '2025-07-31 19:24:42', '2025-07-31 19:24:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `phone`, `profile_image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'admin admin', 'admin@gmail.com', 'admin', '125475455', 'profile_images/JYS8URXqciL8f4jVHUMwL2R9WRKfCtFWxXTKlSEe.jpg', NULL, '$2y$12$7yvxkMzliwfq6jLvchGsIu0r9NTHDJa5.rUDveLROnyGL2h8vVW/6', 'GhVNIaKxsHmvWmd8y8H39jfoGojeYDPF8Z5kTHZwzPzWcxRBOC4Dn5xzV9Uo', '2025-07-24 09:45:54', '2025-07-31 07:35:03'),
(10, 'test', 'test@gmail.com', 'user', '059994921', 'profile_images/6QDcALUXoqD96U2eDXYhLVm3avbm7iYX12dZZZPM.jpg', NULL, '$2y$12$4AmMp4474bQm2LvXKhiqBOxhv8sKVjXxE8Us0I2Ri5wvAtBUwym7m', 'Me9s3McWeNYAkCGo17fH8a8LkaE77FdvrJTabGQebyiCRczhnrPSWYD4kszp', '2025-07-24 09:47:47', '2025-07-31 12:53:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `completed_courses`
--
ALTER TABLE `completed_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `completed_courses_user_id_foreign` (`user_id`),
  ADD KEY `completed_courses_course_id_foreign` (`course_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_slug_unique` (`slug`);

--
-- Indexes for table `course_results`
--
ALTER TABLE `course_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_results_user_id_foreign` (`user_id`),
  ADD KEY `course_results_course_id_foreign` (`course_id`);

--
-- Indexes for table `course_user`
--
ALTER TABLE `course_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_user_user_id_foreign` (`user_id`),
  ADD KEY `course_user_course_id_foreign` (`course_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lessons_slug_unique` (`slug`),
  ADD KEY `lessons_course_id_foreign` (`course_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_quiz_id_foreign` (`quiz_id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quizzes_course_id_foreign` (`course_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `completed_courses`
--
ALTER TABLE `completed_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `course_results`
--
ALTER TABLE `course_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `course_user`
--
ALTER TABLE `course_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `completed_courses`
--
ALTER TABLE `completed_courses`
  ADD CONSTRAINT `completed_courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `completed_courses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_results`
--
ALTER TABLE `course_results`
  ADD CONSTRAINT `course_results_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_results_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_user`
--
ALTER TABLE `course_user`
  ADD CONSTRAINT `course_user_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
