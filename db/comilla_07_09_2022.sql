-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 07, 2022 at 10:29 AM
-- Server version: 5.7.38-0ubuntu0.18.04.1
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comilla`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `long_description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `long_description` text COLLATE utf8mb4_unicode_ci,
  `sort_order` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `advisors`
--

CREATE TABLE `advisors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `long_description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `alumnies`
--

CREATE TABLE `alumnies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `alumni_backgrounds`
--

CREATE TABLE `alumni_backgrounds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `show_section` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ask_librarians`
--

CREATE TABLE `ask_librarians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `blog_post_id` bigint(20) DEFAULT NULL,
  `comment_text` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `blog_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=Pending,1=Approved',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_post_views`
--

CREATE TABLE `blog_post_views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_post_id` bigint(20) UNSIGNED NOT NULL,
  `session_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `number_of_view` bigint(20) NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_users`
--

CREATE TABLE `blog_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `board_of_trustees`
--

CREATE TABLE `board_of_trustees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books_publications`
--

CREATE TABLE `books_publications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '1=New Arrivals,2=Upcoming Books,3=Publications/Journal',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `library_subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` longtext COLLATE utf8mb4_unicode_ci,
  `show_status_for_subject` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campus_backgrounds`
--

CREATE TABLE `campus_backgrounds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_status` tinyint(4) DEFAULT NULL,
  `show_section` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `completed_researches`
--

CREATE TABLE `completed_researches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` text COLLATE utf8mb4_unicode_ci,
  `journal_name` text COLLATE utf8mb4_unicode_ci,
  `publish_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `journal_index` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `journal_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `control_top_left_menus`
--

CREATE TABLE `control_top_left_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `counter_backgrounds`
--

CREATE TABLE `counter_backgrounds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `counter_boxes`
--

CREATE TABLE `counter_boxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counter_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `counter_number` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_infos`
--

CREATE TABLE `course_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `program_info_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dept_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department_heads`
--

CREATE TABLE `department_heads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `long_description` text COLLATE utf8mb4_unicode_ci,
  `serial` int(11) DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googleplus_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `development_backgrounds`
--

CREATE TABLE `development_backgrounds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_status` tinyint(4) DEFAULT NULL,
  `show_section` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE `directors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `long_description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `long_description` text COLLATE utf8mb4_unicode_ci,
  `sort_order` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_types`
--

CREATE TABLE `faculty_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fast_services`
--

CREATE TABLE `fast_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `link` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url_link_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_url` longtext COLLATE utf8mb4_unicode_ci,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url_link_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_backgrounds`
--

CREATE TABLE `feedback_backgrounds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `show_section` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `follow_us`
--

CREATE TABLE `follow_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googleplus_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `for_students`
--

CREATE TABLE `for_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `link` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url_link_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `frontend_menus`
--

CREATE TABLE `frontend_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `rand_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `url_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_link_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `parent_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'none',
  `program_info_id` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_info_id` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontend_menus`
--

INSERT INTO `frontend_menus` (`id`, `rand_id`, `title_en`, `title_bn`, `sort_order`, `url_link`, `url_link_type`, `status`, `parent_id`, `menu_type`, `program_info_id`, `course_info_id`, `created_by`, `modified_by`, `created_at`, `updated_at`) VALUES
(17378, 'RO4UK6APQn', 'About BIGM', '', 0, '', '5', 1, '0', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17379, 'QuredEK1KN', 'About Us', '', 0, '', '5', 1, 'RO4UK6APQn', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17380, 'WwrunxMXoo', 'At a Glance about BIGM', '', 0, 'at-a-glance-about-bigm', '2', 1, 'QuredEK1KN', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17381, '8BQjV71Dlk', 'Directories', '', 1, 'member_to_employee_frontend', '1', 1, 'QuredEK1KN', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17382, 'zJQhBC7pD7', 'Authoritative bodies of BIGM', '', 1, '', '', 1, 'RO4UK6APQn', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17383, 'ED5kkrBwpe', 'BoT Members', '', 0, 'board_of_trustees', '1', 1, 'zJQhBC7pD7', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17384, 'PZtFADZ2Te', 'GB Members', '', 1, 'governing_body', '1', 1, 'zJQhBC7pD7', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17385, 'dYhBh6cWjd', 'BIGM Leadership', '', 2, '', '', 1, 'RO4UK6APQn', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17386, 'UE8IZFHsFj', 'The Chairman', '', 0, 'the-chairman', '2', 1, 'dYhBh6cWjd', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17387, '9V2KvpYZUL', 'Director', '', 1, 'director', '2', 1, 'dYhBh6cWjd', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17388, 'oL7OtTAkzg', 'Message from the Chairman', '', 2, 'message-from-the-chairman', '2', 1, 'dYhBh6cWjd', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17389, 'PnW7ZvPedU', 'Message from Director', '', 3, 'message-from-the-director', '2', 1, 'dYhBh6cWjd', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17390, 'nfb4mtg0ad', 'Admission', '', 1, '', '5', 1, '0', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17391, 'qnSvwE1zrx', 'Admission Information', '', 0, '', '', 1, 'nfb4mtg0ad', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17392, 'm1r4hh3xKG', 'Admission Contact', '', 0, '', '', 0, 'qnSvwE1zrx', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17393, 'VpIuot33EI', 'Apply Online', NULL, 1, 'http://182.163.112.222/Bigm/UserAuthentication/Create', '3', 1, 'qnSvwE1zrx', 'none', NULL, NULL, NULL, NULL, '2022-07-31 05:17:08', '2022-09-03 05:00:41'),
(17394, 'unygkLwVEk', 'How to Apply', '', 2, 'how-to-apply', '2', 1, 'qnSvwE1zrx', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17395, 'OTYL3qIzon', 'FAQ', '', 3, 'faq', '2', 1, 'qnSvwE1zrx', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17396, 'hlW0oERN8D', 'Academic Program', '', 2, '', '5', 1, '0', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17397, 'huTHk1VNUx', 'MPA Program', '', 0, '', '', 1, 'hlW0oERN8D', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17398, 'ggzYrUTUQ6', 'Human Resource Management', '', 0, 'mpa-in-hrm', '2', 1, 'huTHk1VNUx', 'none', '1', '3', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17399, '6NDaadmkZs', 'Overview', '', 0, 'mpa-in-hrm', '2', 1, 'ggzYrUTUQ6', 'course_menu', '1', '3', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17400, '74XpAGmYqR', 'Message from Chairman', '', 1, '', '', 0, 'ggzYrUTUQ6', 'course_menu', '1', '3', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17401, '6NDaadmkZl7', 'Academic Regulations', '', 2, 'academic-regulations-hrm', '2', 1, 'ggzYrUTUQ6', 'course_menu', '1', '3', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17402, '6NDaadmkZl8g', 'Courses', '', 3, 'courses-for-hrm', '2', 1, 'ggzYrUTUQ6', 'course_menu', '1', '3', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17403, 'YAcaOwRtnh', 'Faculty Members', '', 4, 'faculty_members', '1', 0, 'ggzYrUTUQ6', 'course_menu', '1', '3', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17404, '6NDaadmkZl8sa', 'Notice Board', '', 5, 'notice-all', '1', 1, 'ggzYrUTUQ6', 'course_menu', '1', '3', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17405, 'HaMZRMEdj1', 'Governance and Public Policies', '', 1, 'mpa-in-gpp', '2', 1, 'huTHk1VNUx', 'none', '1', '1', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17406, 'gE5xansHl7', 'Overview', '', 0, 'overview-of-mpa-in-gpp', '2', 0, 'HaMZRMEdj1', 'course_menu', '1', '1', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17407, 'lAni6YV0V9', 'Academic Regulations', '', 1, 'academic-regulations-gpp', '2', 1, 'HaMZRMEdj1', 'course_menu', '1', '1', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17408, 'izuYQBwIkp', 'Courses', '', 2, 'courses-for-gpp', '2', 1, 'HaMZRMEdj1', 'course_menu', '1', '1', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17409, 'u813XEsdk6', 'Faculty Members', '', 3, 'faculty_members', '1', 0, 'HaMZRMEdj1', 'course_menu', '1', '1', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17410, 'AOuKOPW8C9', 'Notice Board', '', 4, 'notice-all', '1', 1, 'HaMZRMEdj1', 'course_menu', '1', '1', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17411, '3eyVv2Cs2T', 'International Economics Relation', '', 2, 'mpa-in-ier', '2', 1, 'huTHk1VNUx', 'none', '1', '2', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17412, '7mKe0IZbhP', 'Overview', '', 0, 'overview-of-mpa-in-ier', '2', 0, '3eyVv2Cs2T', 'course_menu', '1', '2', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17413, 'hlFeuG2OtP', 'Message from Chairman', '', 1, '', '', 0, '3eyVv2Cs2T', 'course_menu', '1', '2', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17414, 'Ls8Ppu3CTD', 'Academic Regulations', '', 2, 'academic-regulations-ier', '2', 1, '3eyVv2Cs2T', 'course_menu', '1', '2', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17415, 'iYu97nlmFV', 'Courses', '', 3, 'courses-for-ier', '2', 1, '3eyVv2Cs2T', 'course_menu', '1', '2', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17416, 'iTvSNYCbjX', 'Faculty Members', '', 4, '', '', 0, '3eyVv2Cs2T', 'course_menu', '1', '2', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17417, 'GmADx8rt7H', 'Notice Board', '', 5, '', '', 1, '3eyVv2Cs2T', 'course_menu', '1', '2', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17418, 'Wpa6aqtf3Z', 'Controller of Exam', '', 1, '', '', 1, 'hlW0oERN8D', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17419, 'fKdn7vip1t', 'Academic Calendar', '', 0, '', '', 1, 'Wpa6aqtf3Z', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17420, 'nBZvvtfm30', 'Exam Schedule', '', 1, '', '', 0, 'Wpa6aqtf3Z', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17421, 'oebpIY7apm', 'Certificate and Diploma Courses', '', 2, '', '', 0, 'hlW0oERN8D', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17422, '5FRmJxaXmi', 'Academia Lecture Series', '', 3, '', '', 0, 'hlW0oERN8D', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17423, 'ZJHlmtUoH3', 'Visiting Professor', '', 4, '', '', 0, 'hlW0oERN8D', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17424, 'obyWksciTP', 'Research', '', 3, '', '', 1, '0', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17425, 'XrSB9GcqxC', 'Research Priority', '', 0, 'research-priority', '2', 1, 'obyWksciTP', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17426, 'ZwTHrieuCi', 'Research Projects', NULL, 1, 'research-projects', '2', 1, 'obyWksciTP', 'none', NULL, NULL, NULL, NULL, '2022-07-31 05:17:08', '2022-08-06 11:26:42'),
(17427, 'mIJrQWCyi9', 'Research Program', '', 2, '', '', 1, 'obyWksciTP', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17428, 'XibaV5z5Eu', 'Overview of BIGM Research', '', 0, 'overview-of-bigm-research', '2', 1, 'mIJrQWCyi9', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17429, 'kX5w0x59Cz', 'Ongoing Research', '', 1, 'ongoing_research', '1', 1, 'mIJrQWCyi9', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17430, 'oehJwfOgeq', 'Published Research', '', 2, 'completed_research', '1', 1, 'mIJrQWCyi9', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17431, 'UqiyPL0GTz', 'Capacity Building and Training', '', 4, '', '', 1, '0', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17432, 'EhpSu3xGLt', 'At a Glance CBT', '', 0, '', '', 0, 'UqiyPL0GTz', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17433, '8JQvflLcF9', 'Management', '', 1, '', '', 0, 'UqiyPL0GTz', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17434, 't7TKoaxJ1Y', 'List of Trainers', '', 2, '', '', 0, 'UqiyPL0GTz', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17435, '5cw3SkuXCG', 'Training Courses', '', 3, '', '', 1, 'UqiyPL0GTz', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17436, 'yiUNM8xdUd', 'Upcoming Training', '', 0, 'upcoming_training', '1', 1, '5cw3SkuXCG', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17437, 'CmMliHPfzk', 'Ongoing Training', '', 1, 'ongoing_training', '1', 1, '5cw3SkuXCG', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17438, '55rxDSpBGh', 'Completed Training', '', 2, '', '', 0, '5cw3SkuXCG', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17439, 'oosDvuH3ep', 'Funded Training Course', '', 4, '', '', 1, 'UqiyPL0GTz', 'none', '1', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17440, '4qGuR52Zc6', 'Policy Analysis Course', '', 0, 'policy-analysis-course-description', '2', 1, 'oosDvuH3ep', 'none', '4', '7', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17441, 'D1vyCGueB2', 'Course Description', '', 0, 'policy-analysis-course-description', '2', 1, '4qGuR52Zc6', 'course_menu', '4', '7', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17442, 'xxb3QUnaXg', 'Course Objective', '', 1, 'policy-analysis-course-objective', '2', 1, '4qGuR52Zc6', 'course_menu', '4', '7', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17443, 'TpmrVDVciq', 'Learning Outcomes', '', 2, '', '', 0, '4qGuR52Zc6', 'course_menu', '4', '7', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17444, 'b3LU8lODLG', 'Target Audience', '', 3, '', '', 0, '4qGuR52Zc6', 'course_menu', '4', '7', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17445, 'xxT3gRIa08', 'Eligibility for Trainees’', '', 4, '', '', 0, '4qGuR52Zc6', 'course_menu', '4', '7', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17446, 'YzuPa158El', 'Module and Key Topics', '', 5, '', '', 0, '4qGuR52Zc6', 'course_menu', '4', '7', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17447, 'upZ9kTX1Sb', 'Assessment and Certification', '', 6, '', '', 0, '4qGuR52Zc6', 'course_menu', '4', '7', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17448, 'mg8D7GepRj', 'Administrator', '', 7, '', '', 0, '4qGuR52Zc6', 'course_menu', '4', '7', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17449, 'vSKmtoVkTq', 'Brochure', '', 8, '', '', 1, '4qGuR52Zc6', 'course_menu', '4', '7', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17450, 'Bu2Pb4tloC', 'Strategic Management', '', 1, 'strategic-management', '2', 1, 'oosDvuH3ep', 'none', '4', '8', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17451, 'XTkVVuKKbn', 'Course Description', NULL, 0, 'strategic-management', '2', 1, 'Bu2Pb4tloC', 'course_menu', '4', '8', NULL, NULL, '2022-07-31 05:17:08', '2022-09-03 02:35:07'),
(17452, 'qQLsbr2Vgc', 'Course Objective', NULL, 1, 'strategic-management-objective', '2', 1, 'Bu2Pb4tloC', 'course_menu', '4', '8', NULL, NULL, '2022-07-31 05:17:08', '2022-09-03 02:26:20'),
(17453, 'yOxSHe2WM3', 'Learning Outcomes', NULL, 2, 'strategic-management-outcomes', '2', 1, 'Bu2Pb4tloC', 'course_menu', '4', '8', NULL, NULL, '2022-07-31 05:17:08', '2022-09-03 02:34:23'),
(17454, 'nSxb1eZ8iR', 'Target Audience', NULL, 3, 'strategic-management-target-audience', '2', 1, 'Bu2Pb4tloC', 'course_menu', '4', '8', NULL, NULL, '2022-07-31 05:17:08', '2022-09-03 02:31:34'),
(17455, 'L1AvhOtq6f', 'Eligibility for Trainees', '', 4, 'eligibility-for-trainees', '2', 1, 'Bu2Pb4tloC', 'course_menu', '4', '8', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17456, 'VOQbrBfcFS', 'Module and Key Topics', '', 5, '', '', 0, 'Bu2Pb4tloC', 'course_menu', '4', '8', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17457, 'BMkbln8He9', 'Assessment and Certification', '', 6, '', '', 0, 'Bu2Pb4tloC', 'course_menu', '4', '8', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17458, '7dOyE0I5Gz', 'Administrator', '', 7, '', '', 0, 'Bu2Pb4tloC', 'course_menu', '4', '8', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17459, 'K0u1tB2Qp2', 'Brochure', '', 8, '', '', 1, 'Bu2Pb4tloC', 'course_menu', '4', '8', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17460, '9U8rKFG7M9', 'Fundamentals of Research Methodology', '', 2, 'description-of-research-methodology', '2', 1, 'oosDvuH3ep', 'none', '4', '9', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17461, 'MdVXe4FTuc', 'Course Description', '', 0, 'description-of-research-methodology', '2', 1, '9U8rKFG7M9', 'course_menu', '4', '9', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17462, 'JhXnKL1Kfv', 'Course Objective', '', 1, 'research-methodology-course-objective', '2', 1, '9U8rKFG7M9', 'course_menu', '4', '9', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17463, 'y7geAmc2ac', 'Learning Outcomes', '', 2, 'learning-outcomes-of-research-methodology', '2', 1, '9U8rKFG7M9', 'course_menu', '4', '9', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17464, 'socRwbp5Bg', 'Target Audience', '', 3, 'target-audience-for-research-methodology', '2', 1, '9U8rKFG7M9', 'course_menu', '4', '9', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17465, 'YnP9CS3YVV', 'Eligibility for Trainees', '', 4, 'eligibility-for-trainees-for-research-methodology', '2', 1, '9U8rKFG7M9', 'course_menu', '4', '9', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17466, 'ptPqbsHLPP', 'Module and Key Topics', '', 5, '', '', 0, '9U8rKFG7M9', 'course_menu', '4', '9', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17467, 'OrXWsZgzD5', 'Assessment and Certification', '', 6, '', '', 0, '9U8rKFG7M9', 'course_menu', '4', '9', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17468, 'wG2O2aMNDe', 'Administrator', '', 7, '', '', 0, '9U8rKFG7M9', 'course_menu', '4', '9', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17469, 'Wvd8ilT6Bd', 'Brochure', '', 8, '', '', 1, '9U8rKFG7M9', 'course_menu', '4', '9', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17470, 'OFsab1PJ9W', 'Leadership Development Program', '', 3, '', '', 0, 'oosDvuH3ep', 'none', '4', '10', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17471, 'J2swlrzmOI', 'Supply Chain Management', '', 4, '', '', 0, 'oosDvuH3ep', 'none', '4', '16', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17472, 'tkUQqy2K6G', 'Self-Initiated Training Course', '', 5, '', '', 1, 'UqiyPL0GTz', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17473, 'NK29dCEtki', 'Statistical Analytic & Modeling with R', '', 0, 'course-description-for-r', '2', 1, 'tkUQqy2K6G', 'none', '5', '11', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17474, 'J2tHQ7caxM', 'Course Description', '', 0, 'course-description-for-r', '2', 1, 'NK29dCEtki', 'course_menu', '5', '11', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17475, '1GgIlXvPwR', 'Course Objective', '', 1, 'course-objective-for-r', '2', 1, 'NK29dCEtki', 'course_menu', '5', '11', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17476, '1XSbjoNmnI', 'Learning Outcomes', '', 2, 'learning-outcomes-for-r', '2', 1, 'NK29dCEtki', 'course_menu', '5', '11', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17477, 'hQXu5Hy0ty', 'Target Audience', '', 3, 'target-audience-for-r', '2', 1, 'NK29dCEtki', 'course_menu', '5', '11', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17478, '6PYpN4E38F', 'Eligibility for Trainees', '', 4, 'eligibility-for-r', '2', 1, 'NK29dCEtki', 'course_menu', '5', '11', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17479, 'ZXeN8AVC6M', 'Module and Key Topics', '', 5, '', '', 0, 'NK29dCEtki', 'course_menu', '5', '11', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17480, 'AtHHis1qbx', 'Assessment and Certification', '', 6, '', '', 0, 'NK29dCEtki', 'course_menu', '5', '11', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17481, 'ywSnJlcemU', 'Administrator', '', 7, '', '', 0, 'NK29dCEtki', 'course_menu', '5', '11', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17482, '2y28L7Y5iP', 'Brochure', '', 8, '', '', 1, 'NK29dCEtki', 'course_menu', '5', '11', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17483, 'KTNG57wDoy', 'Data Analytics in Python', '', 1, 'about-data-analytics-in-python', '2', 1, 'tkUQqy2K6G', 'none', '5', '12', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17484, 'hScI28fSMq', 'Course Description', '', 0, 'about-data-analytics-in-python', '2', 1, 'KTNG57wDoy', 'course_menu', '5', '12', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17485, '33hzn2DVWQ', 'Course Objective', '', 1, 'course-objective-of-python', '2', 1, 'KTNG57wDoy', 'course_menu', '5', '12', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17486, 'EJSYF9z6yW', 'Learning Outcomes', '', 2, 'learning-outcomes-of-python', '2', 1, 'KTNG57wDoy', 'course_menu', '5', '12', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17487, 'EbFtvj3Xx8', 'Target Audience', '', 3, 'target-audience-for-python', '2', 1, 'KTNG57wDoy', 'course_menu', '5', '12', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17488, 'rTJf6wHGQx', 'Eligibility for Trainees', '', 4, 'eligibility-for-python-trainees', '2', 1, 'KTNG57wDoy', 'course_menu', '5', '12', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17489, 'aIewnKln1h', 'Module and Key Topics', '', 5, '', '', 0, 'KTNG57wDoy', 'course_menu', '5', '12', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17490, 'sq3CurY97u', 'Assessment and Certification', '', 6, '', '', 0, 'KTNG57wDoy', 'course_menu', '5', '12', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17491, 'wJlH9pgjJN', 'Administrator', '', 7, '', '', 0, 'KTNG57wDoy', 'course_menu', '5', '12', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17492, 'hLObDNPypF', 'Brochure', '', 8, '', '', 1, 'KTNG57wDoy', 'course_menu', '5', '12', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17493, '5D3pQf30nz', 'Quantitative Analysis with STATA', '', 2, 'quantitative-analysis-with-stata-course-description', '2', 1, 'tkUQqy2K6G', 'none', '5', '13', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17494, 'sjdwpvRHHz', 'Course Description', '', 0, 'quantitative-analysis-with-stata-course-description', '2', 1, '5D3pQf30nz', 'course_menu', '5', '13', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17495, 'lfIpoVm7cZ', 'Course Objective', '', 1, 'course-objective', '2', 1, '5D3pQf30nz', 'course_menu', '5', '13', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17496, 'f1XfkJzg8H', 'Learning Outcomes', '', 2, 'learning-outcomes', '2', 1, '5D3pQf30nz', 'course_menu', '5', '13', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17497, 'vUluY1rkc9', 'Target Audience', '', 3, 'target-audience', '2', 1, '5D3pQf30nz', 'course_menu', '5', '13', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17498, 'Y1HOFFr5lx', 'Eligibility for Trainees', '', 4, 'eligibility-for-trainees', '2', 1, '5D3pQf30nz', 'course_menu', '5', '13', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17499, 'XkiuVx6gMl', 'Module and Key Topics', '', 5, '', '', 0, '5D3pQf30nz', 'course_menu', '5', '13', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17500, 'ffST2UzE4z', 'Assessment and Certification', '', 6, '', '', 0, '5D3pQf30nz', 'course_menu', '5', '13', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17501, 'vIUIXSSxMc', 'Administrator', '', 7, '', '', 0, '5D3pQf30nz', 'course_menu', '5', '13', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17502, '8icHEfIVpf', 'Brochure', '', 8, '', '', 1, '5D3pQf30nz', 'course_menu', '5', '13', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17503, '62hIgb7dRF', 'VAT Management', '', 3, 'vat-description', '2', 1, 'tkUQqy2K6G', 'none', '5', '14', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17504, 'qjuSeAJJwo', 'Course Description', '', 0, 'vat-description', '2', 1, '62hIgb7dRF', 'course_menu', '5', '14', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17505, 'o42bgMla0w', 'Course Objective', '', 1, 'vat-objective', '2', 1, '62hIgb7dRF', 'course_menu', '5', '14', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17506, 'FoI5MkttUP', 'Learning Outcomes', '', 2, 'vat-learning-outcomes', '2', 1, '62hIgb7dRF', 'course_menu', '5', '14', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17507, 'g6A0TGpX8I', 'Target Audience', '', 3, 'target-audience', '2', 1, '62hIgb7dRF', 'course_menu', '5', '14', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17508, 'Myum2W86eB', 'Eligibility for Trainees', '', 4, 'eligibility-for-trainees-for-vat', '2', 1, '62hIgb7dRF', 'course_menu', '5', '14', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17509, 'zHN5NLocXs', 'Module and Key Topics', '', 5, '', '', 0, '62hIgb7dRF', 'course_menu', '5', '14', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17510, 'wgo6U2uZWu', 'Assessment and Certification', '', 6, '', '', 0, '62hIgb7dRF', 'course_menu', '5', '14', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17511, 'bKsCDtENgF', 'Administrator', '', 7, '', '', 0, '62hIgb7dRF', 'course_menu', '5', '14', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17512, 'LWP5kg2QLJ', 'Brochure', '', 8, '', '', 1, '62hIgb7dRF', 'course_menu', '5', '14', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17513, 'Je2yALAtjh', 'Basic Econometric Analysis', '', 4, '', '', 0, 'tkUQqy2K6G', 'none', '5', '15', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17514, 'aEBF0dNMsF', 'Knowledge Management', '', 5, '', '', 1, '0', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17515, 'U7TNb76NdX', 'Overview', '', 0, 'knowledge-management-overview', '2', 1, 'aEBF0dNMsF', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17516, '3agbiL6ihJ', 'Future plans regarding KM', '', 1, 'future-plans-regarding-km', '2', 1, 'aEBF0dNMsF', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17517, 'uhuWQmntYt', 'Important displayable documents', '', 2, '', '', 1, 'aEBF0dNMsF', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17518, 'Gw0pDILdH9', 'Important Photos', '', 3, '', '', 1, 'aEBF0dNMsF', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17519, 'tptOehzcJi', 'Important Video Records', '', 4, '', '', 1, 'aEBF0dNMsF', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17520, 'MS4rE3OmAn', 'Strategic Collaboration', '', 6, '', '5', 1, '0', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17521, 'c8mfT8PaUB', 'Overview', '', 0, 'strategic-collaboration-overview', '2', 1, 'MS4rE3OmAn', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17522, 'XNW8pM4qHc', 'Ongoing collaboration efforts', '', 1, 'ongoing-collaboration-efforts', '2', 1, 'MS4rE3OmAn', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17523, 'BXBdTPyY2e', 'Contact for Networking', '', 2, 'contact-for-networking', '2', 1, 'MS4rE3OmAn', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17524, 'RapnVJCYIu', 'Publications', '', 7, '', '', 1, '0', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17525, '8LiIlzHYVn', 'Research Catalogue', '', 0, 'research-catalogue', '2', 1, 'RapnVJCYIu', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17526, '5wCFqcxm53', 'Glimpse', '', 1, 'glimpse-2020', '2', 1, 'RapnVJCYIu', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17527, 'ya353l1KPv', 'Academic Brochure', '', 2, '', '', 1, 'RapnVJCYIu', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17528, 'DavyWcxSLR', 'Op-ed', '', 3, 'oped', '1', 1, 'RapnVJCYIu', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17529, 'EzDNFjX1mV', 'Announcements', '', 8, '', '', 1, '0', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17530, 'puEgfpYx33', 'Notice', '', 0, '', '', 1, 'EzDNFjX1mV', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17531, 'ftJpFiNTWN', 'General Notice', '', 0, '', '', 1, 'puEgfpYx33', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17532, 'cdjAvHxG0s', 'Special Notice', NULL, 1, 'special-notice', '2', 1, 'puEgfpYx33', 'none', NULL, NULL, NULL, NULL, '2022-07-31 05:17:08', '2022-08-07 04:30:50'),
(17533, 'k9KlaNmrwU', 'Results', '', 1, '', '', 0, 'EzDNFjX1mV', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17534, 'gfrhIQixfF', 'Admission Test Result', '', 0, '', '', 1, 'k9KlaNmrwU', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17535, 'VXBGALNwzm', 'Participants List for Training', '', 1, '', '', 1, 'k9KlaNmrwU', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17536, 'Njw8QoHfQa', 'BIGM News', '', 2, 'news-all', '1', 1, 'EzDNFjX1mV', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17537, 'fhBdP70IQY', 'Tender Notice', '', 3, 'notice-all', '1', 1, 'EzDNFjX1mV', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17538, 'TflaNL4ku3', 'Career Opportunity', '', 4, 'http://bigm.edu.bd/career/jobs', '3', 1, 'EzDNFjX1mV', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17539, 'A4LQYSI4CA', 'NOC and Office Order', '', 5, 'http://bigm.edu.bd/noc-office-orders', '3', 1, 'EzDNFjX1mV', 'none', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17540, 'C2eKXcfGYT', 'Our Library', '', 9, 'library_front', '1', 1, '0', 'library', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17541, 'jsrgRD8ntq', 'About Library', '', 10, '', '5', 1, '0', 'library', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17542, 'fDTgK0yPGd', 'Committee', '', 0, 'library-committee', '2', 1, 'jsrgRD8ntq', 'library', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17543, 'v3Lc6Ha83S', 'Policies & Rules', '', 1, 'library-rules', '2', 1, 'jsrgRD8ntq', 'library', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17544, '0ssRSFZZSA', 'Locations', '', 2, 'http://bigm.edu.bd/location', '3', 1, 'jsrgRD8ntq', 'library', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17545, 'NcTSasyraw', 'Gallery', '', 11, 'gallary', '2', 1, '0', 'library', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17546, 'HpkNo75mIS', 'Services', '', 12, '', '', 1, '0', 'library', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17547, 'gjR1b3y67x', 'Facilities', '', 0, 'library-facilities', '2', 1, 'HpkNo75mIS', 'library', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17548, 'ZdYO1PGDAx', 'Charges', '', 1, 'charges', '2', 1, 'HpkNo75mIS', 'library', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17549, 'epko04E0TA', 'Fine & Limit', '', 2, 'fine-and-limit', '2', 1, 'HpkNo75mIS', 'library', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17550, 'f7gZi6S2Q4', 'Ask Librarian', '', 13, '', '5', 1, '0', 'library', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17551, 'OfjyV2p0rz', 'Contact Us', '', 14, 'contact-us', '2', 0, '0', 'library', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17552, '3pgyiy1o45', 'Alumni', '', 15, 'bigm-alumni-forum', '2', 1, '0', 'alumni', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17553, 'i8U0SsWuAL', 'About Us', '', 16, '', '', 1, '0', 'alumni', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17554, 'J3jjKmrdtk', 'About Association', '', 0, 'about-association', '2', 1, 'i8U0SsWuAL', 'alumni', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17555, 'nxWd6qZGBX', 'Executive Committee', '', 1, 'executive-committee', '2', 1, 'i8U0SsWuAL', 'alumni', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17556, 'sRKv5Os1VG', 'Constitution', '', 2, 'constitution', '2', 1, 'i8U0SsWuAL', 'alumni', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17557, '74Eh7ye4Gk', 'Activities', '', 17, '', '', 1, '0', 'alumni', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17558, 'hQ39GFOa72', 'Scholarship Program', '', 0, '', '', 1, '74Eh7ye4Gk', 'alumni', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17559, 'TB12i7eZed', 'Social Responsibility', '', 1, '', '', 1, '74Eh7ye4Gk', 'alumni', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17560, 'aZ8xjyHpjs', 'Reunion and Get Together', '', 2, '', '', 1, '74Eh7ye4Gk', 'alumni', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17561, 'R0L1or5igj', 'View Members', '', 18, '', '', 1, '0', 'alumni', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17562, 'O1o5Xn4Le0', 'Join Us', '', 19, '', '', 1, '0', 'alumni', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17563, 'hpQd4IDE33', 'Contact Us', '', 20, 'http://bigm.edu.bd/location', '3', 1, '0', 'alumni', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17564, '4J5ZimCQ1a', 'Photo Gallery', '', 21, '', '', 1, '0', 'alumni', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17565, 'Xe9Ps8SPU1', 'Blog', '', 22, 'blog', '1', 1, '0', 'blog', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17566, 'LGaiYW3zBd', 'Registration', '', 23, 'blog_user.register', '1', 1, '0', 'blog', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08'),
(17567, 'FKUNTJjaaO', 'Login', '', 24, 'blog_user.login', '1', 1, '0', 'blog', '', '', NULL, NULL, '2022-07-31 05:17:08', '2022-07-31 05:17:08');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `get_in_touches`
--

CREATE TABLE `get_in_touches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `link` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url_link_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `governing_body`
--

CREATE TABLE `governing_body` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_links`
--

CREATE TABLE `home_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_links`
--

INSERT INTO `home_links` (`id`, `name`, `url_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'All News', 'news-all', 1, NULL, NULL),
(2, 'All Event', 'event-all', 1, NULL, NULL),
(3, 'All Notice', 'notice-all', 1, NULL, NULL),
(4, 'Board of Trustees', 'board_of_trustees', 1, NULL, NULL),
(5, 'Governing Body', 'governing_body', 1, NULL, NULL),
(6, 'Faculty Members', 'faculty_members', 1, NULL, NULL),
(7, 'Member to Employee', 'member_to_employee_frontend', 1, NULL, NULL),
(8, 'Library Front', 'library_front', 1, NULL, NULL),
(9, 'Blog', 'blog', 1, NULL, NULL),
(10, 'Blog User Login', 'blog_user.login', 1, NULL, NULL),
(11, 'Blog User Register', 'blog_user.register', 1, NULL, NULL),
(12, 'Ongoing Research', 'ongoing_research', 1, NULL, NULL),
(13, 'Completed Research', 'completed_research', 1, NULL, NULL),
(14, 'Op-ed', 'oped', 1, NULL, NULL),
(15, 'Ongoing Training', 'ongoing_training', 1, NULL, NULL),
(16, 'Upcoming Training', 'upcoming_training', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `icons`
--

CREATE TABLE `icons` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `icons`
--

INSERT INTO `icons` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'fa-copy', NULL, '2018-06-07 08:58:42', '2018-06-10 05:36:58'),
(2, 'ion-social-twitter', NULL, '2018-06-25 09:52:14', '2018-10-21 03:04:51'),
(12, 'ion-ionic', NULL, '2018-10-21 03:04:18', '2018-10-21 03:04:18'),
(13, 'ion-settings', NULL, '2018-11-15 01:00:22', '2018-11-15 01:00:22'),
(14, 'ion-person-stalker', NULL, '2018-11-15 05:08:11', '2018-11-15 05:08:11'),
(15, 'ion-cash', NULL, '2018-11-28 06:16:02', '2018-11-28 06:16:02'),
(16, 'ion-model-s', NULL, '2019-02-04 07:03:00', '2019-02-04 07:03:00'),
(17, 'ion-email', NULL, '2021-09-05 07:42:30', '2021-09-05 07:42:30');

-- --------------------------------------------------------

--
-- Table structure for table `institute_details`
--

CREATE TABLE `institute_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slogan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `journal_papers`
--

CREATE TABLE `journal_papers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paper_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authors` longtext COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `abstract` longtext COLLATE utf8mb4_unicode_ci,
  `research_area` text COLLATE utf8mb4_unicode_ci,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `library_backgrounds`
--

CREATE TABLE `library_backgrounds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_status` tinyint(4) DEFAULT NULL,
  `show_section` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `library_news`
--

CREATE TABLE `library_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `library_sliders`
--

CREATE TABLE `library_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `library_subjects`
--

CREATE TABLE `library_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` bigint(20) DEFAULT NULL,
  `show_status` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `library_time_schedules`
--

CREATE TABLE `library_time_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `saturday_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sunday_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monday_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuesday_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wednesday_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thursday_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `friday_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `like_counts`
--

CREATE TABLE `like_counts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `blog_post_id` bigint(20) DEFAULT NULL,
  `like_count` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `membereducations`
--

CREATE TABLE `membereducations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `degree` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education_institution` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education_country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education_to_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `memberexperiences`
--

CREATE TABLE `memberexperiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_institution` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_from_month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_from_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_to_month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_to_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci,
  `member_designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_place` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_phone` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_administrative_experiences`
--

CREATE TABLE `member_administrative_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `administrative_designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `administrative_details` longtext COLLATE utf8mb4_unicode_ci,
  `administrative_from_month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `administrative_from_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `administrative_to_month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `administrative_to_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_area_of_interests`
--

CREATE TABLE `member_area_of_interests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `interest_area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_certification_accomplishments`
--

CREATE TABLE `member_certification_accomplishments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `certification_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certification_url_link` longtext COLLATE utf8mb4_unicode_ci,
  `certification_month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certification_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certification_description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_conferences`
--

CREATE TABLE `member_conferences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `conference_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conference_url` longtext COLLATE utf8mb4_unicode_ci,
  `conference_month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conference_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conference_description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_honor_awards`
--

CREATE TABLE `member_honor_awards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `award_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `awarded_month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `awarded_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `award_description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_languages`
--

CREATE TABLE `member_languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proficiency_level` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_professional_responsibilities`
--

CREATE TABLE `member_professional_responsibilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `responsibilities_designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsibilities_url_link` longtext COLLATE utf8mb4_unicode_ci,
  `responsibilities_organization_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsibilities_from_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsibilities_to_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_project_accomplishments`
--

CREATE TABLE `member_project_accomplishments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `project_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_url_link` longtext COLLATE utf8mb4_unicode_ci,
  `project_from_month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_from_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_to_month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_to_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_publication_books`
--

CREATE TABLE `member_publication_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `book_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_url_link` longtext COLLATE utf8mb4_unicode_ci,
  `book_month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_publication_journals`
--

CREATE TABLE `member_publication_journals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `journal_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `journal_url_link` longtext COLLATE utf8mb4_unicode_ci,
  `journal_month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `journal_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `journal_description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_scholarships`
--

CREATE TABLE `member_scholarships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `scholarship_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scholarship_month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scholarship_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scholarship_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scholarship_description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_skills`
--

CREATE TABLE `member_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `skill` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_social_media_links`
--

CREATE TABLE `member_social_media_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) DEFAULT NULL,
  `facebook` longtext COLLATE utf8mb4_unicode_ci,
  `linkedin` longtext COLLATE utf8mb4_unicode_ci,
  `twitter` longtext COLLATE utf8mb4_unicode_ci,
  `skype` longtext COLLATE utf8mb4_unicode_ci,
  `whatsapp` longtext COLLATE utf8mb4_unicode_ci,
  `instagram` longtext COLLATE utf8mb4_unicode_ci,
  `pinterest` longtext COLLATE utf8mb4_unicode_ci,
  `google_scholar` longtext COLLATE utf8mb4_unicode_ci,
  `research_gate` longtext COLLATE utf8mb4_unicode_ci,
  `publons` longtext COLLATE utf8mb4_unicode_ci,
  `orcid` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_social_welfares`
--

CREATE TABLE `member_social_welfares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `social_designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_organization_details` text COLLATE utf8mb4_unicode_ci,
  `social_from_month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_from_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_to_month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_to_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_taught_courses`
--

CREATE TABLE `member_taught_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `taught_course` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_to_courses`
--

CREATE TABLE `member_to_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_info_id` bigint(20) UNSIGNED DEFAULT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `faculty_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_to_employees`
--

CREATE TABLE `member_to_employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `dept_or_project` tinyint(4) DEFAULT NULL COMMENT '1 = dept, 2 = project',
  `dept_id` bigint(20) UNSIGNED DEFAULT NULL,
  `project_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ext_no` int(11) DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_training_accomplishments`
--

CREATE TABLE `member_training_accomplishments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `training_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `training_url_link` longtext COLLATE utf8mb4_unicode_ci,
  `training_from_month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `training_from_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `training_to_month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `training_to_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `training_description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `parent`, `route`, `sort`, `status`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Menu Management', 0, 'menu', 1, 1, '', '2018-05-16 03:20:43', '2018-12-31 21:16:50'),
(2, 'Menu List', 1, 'menu', 11, 1, '', '2018-05-16 04:03:04', '2018-05-16 04:03:04'),
(3, 'Menu Icon', 1, 'menu.icon', 12, 1, '', '2018-06-06 04:35:13', '2018-06-06 08:31:29'),
(4, 'User Management', 0, 'user', 2, 1, '', '2018-06-09 04:29:53', '2019-08-05 04:54:46'),
(5, 'User Role', 4, 'user.role', 21, 1, '', '2018-06-09 04:57:27', '2019-08-05 04:55:35'),
(6, 'Menu Permission', 4, 'user.permission', 22, 1, '', '2018-06-05 06:59:51', '2019-08-05 04:56:15'),
(7, 'Profile Management', 0, 'project-management', 3, 1, '', NULL, NULL),
(23, 'Change Password', 7, 'project-management.change.password', 15, 1, NULL, '2019-11-16 09:08:24', '2019-11-16 09:08:24'),
(28, 'Site Setting', 0, 'site-setting', 4, 1, '', NULL, NULL),
(29, 'View Slider', 28, 'site-setting.slider', 1, 1, '', NULL, NULL),
(30, 'View About', 28, 'site-setting.about', 1, 1, '', NULL, NULL),
(35, 'Frontend Menu', 0, 'frontend-menu', 5, 1, NULL, '2019-12-01 05:34:46', '2019-12-01 05:34:46'),
(36, 'View Post', 35, 'frontend-menu.post.view', 1, 1, NULL, '2019-12-01 05:34:46', '2019-12-01 05:34:46'),
(37, 'View menu', 35, 'frontend-menu.menu.view', 2, 1, NULL, '2019-12-01 05:34:46', '2019-12-01 05:34:46'),
(42, 'News|Event|Notice', 35, 'site-setting.news', 4, 1, '', NULL, NULL),
(47, 'Partnership', 28, 'site-setting.partnership', 5, 1, NULL, '2019-12-04 05:34:04', '2019-12-04 05:34:04'),
(48, 'Offer', 28, 'site-setting.offer', 6, 1, '', NULL, NULL),
(49, 'Chairman & Director', 28, 'site-setting.director', 1, 1, '', NULL, NULL),
(50, 'View Facility', 28, 'site-setting.facility', 1, 1, '', NULL, NULL),
(51, 'Activity', 28, 'site-setting.activity', 6, 1, '', NULL, NULL),
(52, 'View Advisor', 28, 'site-setting.advisor', 1, 1, '', NULL, NULL),
(53, 'User', 4, 'user.list', 21, 1, '', '2018-06-09 04:57:27', '2019-08-05 04:55:35'),
(54, 'Useful Links', 83, 'footer-menu.useful.links', 11, 1, NULL, NULL, NULL),
(55, 'Quick Links', 83, 'footer-menu.quick.links', 12, 1, NULL, NULL, NULL),
(56, 'For Students', 83, 'footer-menu.for.students', 13, 1, NULL, NULL, NULL),
(57, 'Get in Touch', 83, 'footer-menu.get.in.touch', 14, 1, NULL, NULL, NULL),
(58, 'Fast Service', 83, 'footer-menu.fast.service', 15, 1, NULL, NULL, NULL),
(59, 'Features', 28, 'site-setting.features', 7, 1, NULL, NULL, NULL),
(60, 'Training and Enroll', 28, 'site-setting.training_enroll', 8, 1, NULL, NULL, NULL),
(61, 'Alumni', 28, 'site-setting.alumni', 9, 1, NULL, NULL, NULL),
(62, 'Student Feedbacks', 28, 'site-setting.student_feedbacks', 10, 1, NULL, NULL, NULL),
(63, 'Contact Us', 35, 'top-menu.contact.message', 3, 1, NULL, NULL, NULL),
(64, 'Location', 84, 'top-menu.location_admin', 6, 1, NULL, NULL, NULL),
(65, 'Video Gallery', 84, 'top-menu.video_gallery', 5, 1, NULL, NULL, NULL),
(66, 'Photo Gallery', 84, 'top-menu.photo_gallery', 4, 1, NULL, NULL, NULL),
(67, 'Career/Jobs', 84, 'top-menu.career', 3, 1, NULL, NULL, NULL),
(68, 'Member Management', 0, 'member-management', 6, 1, NULL, '2019-12-01 05:34:46', '2019-12-01 05:34:46'),
(69, 'Member Information', 68, 'member_management.list', 1, 1, NULL, NULL, NULL),
(72, 'Board of Trustees', 68, 'board_of_trustee.list', 2, 1, NULL, NULL, NULL),
(73, 'Governing Body', 68, 'governing_body.list', 3, 1, NULL, NULL, NULL),
(74, 'Member to Course', 68, 'member_to_course.list', 4, 1, NULL, NULL, NULL),
(75, 'Social Media Links', 83, 'footer-menu.social_media_links.edit', 16, 1, NULL, NULL, NULL),
(76, 'Counter Box', 35, 'frontend-menu.counter_box', 8, 1, NULL, NULL, NULL),
(77, 'Member to Employee', 68, 'member_to_employee.list', 5, 1, NULL, NULL, NULL),
(80, 'Update Profile', 7, 'user.update_member_profile', 1, 1, NULL, '2019-11-16 09:08:24', '2019-11-16 09:08:24'),
(81, 'Department', 4, 'user.department', 23, 1, NULL, NULL, NULL),
(82, 'Project', 4, 'user.project', 24, 1, NULL, NULL, NULL),
(83, 'Footer Menu', 0, 'footer-menu', 8, 1, '', NULL, NULL),
(84, 'Top Menu', 0, 'top-menu', 7, 1, '', NULL, NULL),
(85, 'Tag Lines', 28, 'site-setting.tagline', 17, 1, NULL, NULL, NULL),
(86, 'NOC/Office Order', 83, 'footer-menu.office.order', 16, 1, NULL, NULL, NULL),
(87, 'Library Management', 0, 'library-management', 9, 1, '', NULL, NULL),
(88, 'View Slider', 87, 'library-management.slider', 1, 1, NULL, NULL, NULL),
(89, 'Time Schedule', 87, 'library-management.time_schedule', 4, 1, NULL, NULL, NULL),
(90, 'Books / Publications', 87, 'library-management.books_publications', 2, 1, NULL, NULL, NULL),
(91, 'News', 87, 'library-management.library_news', 3, 1, NULL, NULL, NULL),
(92, 'Ask Librarian', 87, 'library-management.ask_librarian', 5, 1, NULL, NULL, NULL),
(93, 'Control Top-Left Menu', 84, 'top-menu.control_top_left_menu', 8, 1, NULL, NULL, NULL),
(94, 'Institute Setting', 28, 'site-setting.institute_details', 18, 1, NULL, NULL, NULL),
(95, 'Blog Management', 0, 'blog-management', 10, 1, NULL, NULL, NULL),
(96, 'Post Category', 95, 'blog-management.post_category', 1, 1, NULL, NULL, NULL),
(97, 'Manage Post', 95, 'blog-management.blog_post', 2, 1, NULL, NULL, NULL),
(98, 'Our Research', 28, 'site-setting.our_research', 11, 1, NULL, NULL, NULL),
(99, 'Our Development', 28, 'site-setting.our_development', 12, 1, NULL, NULL, NULL),
(100, 'Our Library', 28, 'site-setting.our_library', 13, 1, NULL, NULL, NULL),
(101, 'Our Campus', 28, 'site-setting.our_campus', 14, 1, NULL, NULL, NULL),
(102, 'Program', 28, 'site-setting.program', 19, 1, NULL, NULL, NULL),
(103, 'Course', 28, 'site-setting.course', 20, 1, NULL, NULL, NULL),
(104, 'Manage Comment', 95, 'blog-management.blog_comment', 3, 1, NULL, NULL, NULL),
(105, 'Library Subjects', 87, 'library-management.library_subjects', 1, 1, NULL, NULL, NULL),
(106, 'Ongoing Research', 35, 'frontend-menu.ongoing_research', 9, 1, NULL, NULL, NULL),
(107, 'Completed Research', 35, 'frontend-menu.completed_research', 10, 1, NULL, NULL, NULL),
(108, 'Op-ed', 35, 'frontend-menu.oped', 11, 1, NULL, NULL, NULL),
(109, 'Ongoing Training', 35, 'frontend-menu.ongoing_training', 12, 1, NULL, NULL, NULL),
(110, 'Upcoming Training', 35, 'frontend-menu.upcoming_training', 13, 1, NULL, NULL, NULL),
(111, 'Journal of Policy Analysis', 35, 'frontend-menu.bigm_journal_policy', 14, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_permissions`
--

CREATE TABLE `menu_permissions` (
  `id` int(10) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `permitted_route` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_from` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_permissions`
--

INSERT INTO `menu_permissions` (`id`, `menu_id`, `role_id`, `permitted_route`, `menu_from`, `created_at`, `updated_at`) VALUES
(401, 80, 4, 'user.update_member_profile', 'menu', '2021-10-21 10:19:08', '2021-10-21 10:19:08'),
(402, 7, 4, 'project-management', 'menu', '2021-10-21 10:19:08', '2021-10-21 10:19:08'),
(403, 23, 4, 'project-management.change.password', 'menu', '2021-10-21 10:19:08', '2021-10-21 10:19:08'),
(704, 23, 3, 'project-management.change.password', 'menu', '2022-02-03 03:38:28', '2022-02-03 03:38:28'),
(705, 7, 3, 'project-management', 'menu', '2022-02-03 03:38:28', '2022-02-03 03:38:28'),
(706, 68, 3, 'member-management', 'menu', '2022-02-03 03:38:28', '2022-02-03 03:38:28'),
(707, 69, 3, 'member_management.list', 'menu', '2022-02-03 03:38:28', '2022-02-03 03:38:28'),
(708, 87, 5, 'library-management', 'menu', '2022-02-05 00:16:40', '2022-02-05 00:16:40'),
(709, 88, 5, 'library-management.slider', 'menu', '2022-02-05 00:16:40', '2022-02-05 00:16:40'),
(710, 90, 5, 'library-management.books_publications', 'menu', '2022-02-05 00:16:40', '2022-02-05 00:16:40'),
(711, 91, 5, 'library-management.library_news', 'menu', '2022-02-05 00:16:40', '2022-02-05 00:16:40'),
(712, 89, 5, 'library-management.time_schedule', 'menu', '2022-02-05 00:16:40', '2022-02-05 00:16:40'),
(713, 92, 5, 'library-management.ask_librarian', 'menu', '2022-02-05 00:16:40', '2022-02-05 00:16:40'),
(714, 7, 5, 'project-management', 'menu', '2022-02-05 00:16:40', '2022-02-05 00:16:40'),
(715, 23, 5, 'project-management.change.password', 'menu', '2022-02-05 00:16:40', '2022-02-05 00:16:40'),
(891, 28, 7, 'site-setting', 'menu', '2022-05-30 05:29:09', '2022-05-30 05:29:09'),
(892, 48, 7, 'site-setting.offer', 'menu', '2022-05-30 05:29:09', '2022-05-30 05:29:09'),
(893, 51, 7, 'site-setting.activity', 'menu', '2022-05-30 05:29:09', '2022-05-30 05:29:09'),
(1432, 5, 2, 'user.role', 'menu', '2022-09-07 03:30:26', '2022-09-07 03:30:26'),
(1433, 4, 2, 'user', 'menu', '2022-09-07 03:30:26', '2022-09-07 03:30:26'),
(1434, 53, 2, 'user.list', 'menu', '2022-09-07 03:30:26', '2022-09-07 03:30:26'),
(1435, 6, 2, 'user.permission', 'menu', '2022-09-07 03:30:26', '2022-09-07 03:30:26'),
(1436, 81, 2, 'user.department', 'menu', '2022-09-07 03:30:26', '2022-09-07 03:30:26'),
(1437, 23, 2, 'project-management.change.password', 'menu', '2022-09-07 03:30:26', '2022-09-07 03:30:26'),
(1438, 7, 2, 'project-management', 'menu', '2022-09-07 03:30:26', '2022-09-07 03:30:26'),
(1439, 29, 2, 'site-setting.slider', 'menu', '2022-09-07 03:30:26', '2022-09-07 03:30:26'),
(1440, 28, 2, 'site-setting', 'menu', '2022-09-07 03:30:26', '2022-09-07 03:30:26'),
(1441, 49, 2, 'site-setting.director', 'menu', '2022-09-07 03:30:26', '2022-09-07 03:30:26'),
(1442, 37, 2, 'frontend-menu.menu.view', 'menu', '2022-09-07 03:30:26', '2022-09-07 03:30:26'),
(1443, 35, 2, 'frontend-menu', 'menu', '2022-09-07 03:30:26', '2022-09-07 03:30:26'),
(1444, 63, 2, 'top-menu.contact.message', 'menu', '2022-09-07 03:30:26', '2022-09-07 03:30:26'),
(1445, 42, 2, 'site-setting.news', 'menu', '2022-09-07 03:30:26', '2022-09-07 03:30:26'),
(1446, 69, 2, 'member_management.list', 'menu', '2022-09-07 03:30:26', '2022-09-07 03:30:26'),
(1447, 68, 2, 'member-management', 'menu', '2022-09-07 03:30:26', '2022-09-07 03:30:26'),
(1448, 54, 2, 'footer-menu.useful.links', 'menu', '2022-09-07 03:30:26', '2022-09-07 03:30:26'),
(1449, 83, 2, 'footer-menu', 'menu', '2022-09-07 03:30:26', '2022-09-07 03:30:26'),
(1450, 55, 2, 'footer-menu.quick.links', 'menu', '2022-09-07 03:30:26', '2022-09-07 03:30:26'),
(1451, 56, 2, 'footer-menu.for.students', 'menu', '2022-09-07 03:30:26', '2022-09-07 03:30:26'),
(1452, 57, 2, 'footer-menu.get.in.touch', 'menu', '2022-09-07 03:30:26', '2022-09-07 03:30:26'),
(1453, 58, 2, 'footer-menu.fast.service', 'menu', '2022-09-07 03:30:26', '2022-09-07 03:30:26'),
(1454, 75, 2, 'footer-menu.social_media_links.edit', 'menu', '2022-09-07 03:30:26', '2022-09-07 03:30:26'),
(1455, 86, 2, 'footer-menu.office.order', 'menu', '2022-09-07 03:30:26', '2022-09-07 03:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `menu_posts`
--

CREATE TABLE `menu_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_posts`
--

INSERT INTO `menu_posts` (`id`, `title`, `date`, `description`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(18, 'Objective of BIGM', NULL, '<p style=\"text-align:center\"><span style=\"font-size:18px\"><a href=\"/public/backend/ckeditor_file/images/Objective/2221.jpg\" target=\"_blank\"><img alt=\"\" src=\"/public/backend/ckeditor_file/images/Objective/2221.jpg\" style=\"height:400px; width:600px\" /></a></span></p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<ul>\r\n				<li><span style=\"font-size:18px\">To facilitate the growth and development of Bangladesh through Human Resource Development &ndash; imparting appropriate skills, providing the right leadership and the art of management at a global standard</span></li>\r\n				<li><span style=\"font-size:18px\">To train the member of the Civil Service as well as executives of the private sector and NGO</span></li>\r\n				<li><span style=\"font-size:18px\">To offer MA, MS, MPhil, and PhDs in social sciences and areas relevant to the Public Service</span></li>\r\n				<li><span style=\"font-size:18px\">To conduct research activities in key areas of Public Administration, Management and Development</span></li>\r\n				<li><span style=\"font-size:18px\">To organize different courses in partnership with national and international Institutes / Universities</span></li>\r\n				<li><span style=\"font-size:18px\">To build commitment and strategic capacity in Governance, Leadership, Public Administration and Management</span></li>\r\n				<li><span style=\"font-size:18px\">To help initiate reforms to achieve a people-oriented administration system</span></li>\r\n				<li><span style=\"font-size:18px\">To give policy inputs on national and international issues</span></li>\r\n				<li><span style=\"font-size:18px\">To act as a &ldquo;Think Tank&rdquo; for the society</span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 1, 2, NULL, '2021-07-06 23:27:15', '2022-02-24 22:39:12'),
(19, 'About BIGM', NULL, '<p style=\"text-align:center\"><img src=\"/public/backend/ckeditor_file/images/about_bigm.jpg\" style=\"height:350px; width:622px\" /><br />\r\n&nbsp;</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:18px\"><strong>Bangladesh Institute of Governance and Management</strong> (BIGM), formerly known as Civil Service College, Dhaka, a post-graduate institution affiliated to the University Of Dhaka, has been established with the objective of creating a centre of excellence for studies and research on public policy and management, and promotion of good governance in the country. Registered under the Trust Act, 1882 as a nonprofit organization and provides opportunities for higher studies at a subsidized tuition fee. The Institute was established in 2006 and currently 11th and 12th batches are studying. At present, it offers Masters in Public Affairs in (i) Governance and Public Policy (GPP), (ii) International Economic Relations (IER) and (iii) Human Resource Management (HRM). The Institute plans to expand its academic Programme by incorporating Masters in Public Affairs degree in 3 new areas i.e., Project Management, Public and Financial Management, Procurement and Supply Chain Management within coming years. At the beginning, the Institute had been functioning in a rented accommodation in the BIAM Foundation Bhavan at Eskaton. It moved to its own campus at Agargaon in July 2013.</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">The Institute is the brainchild of a few distinguished members of the civil services, retired and active, led by the former cabinet secretary the late Mr. M. Mahbubuzzaman. The idea of establishing an institute for higher studies for the members of the civil services in Bangladesh was felt since long. However, vicissitudes in political scenario thwarted concretization of the idea. While effective management of the public services has increasingly become knowledge bound, skill intensive and complex and the size of civil services cadres in Bangladesh has increased manifold, opportunities and exposure to systematic and comprehensive in-service training and higher studies in particular both at home and abroad have become highly limited. Facilities for higher studies for the civil servants particularly on public policies and governance were non-existent in the country. Consequently, the number of officers getting opportunities for higher studies abroad had become so few that they could hardly make any difference in the quality of governance.</span><br />\r\n			&nbsp;</p>\r\n\r\n			<p><span style=\"font-size:18px\">The Institute aims at meeting the needs of higher studies of those civil servants and private sector executives including those of the third sector entities (NGOs), who do not get a chance for higher studies abroad but have sound academic background and potentiality, are keen to improve their knowledge and performance, in order to create a critical mass needed for improving the degree of efficiency in the delivery of services and improve the quality of governance in general. This arrangement is expected also to strengthen public and private partnership, and promote a sense of mutual recognition, so essential for holistic development in a market driven economy.</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 1, 2, NULL, '2021-07-06 23:27:55', '2022-03-20 07:04:50'),
(21, 'Organogram of BIGM', NULL, '<p style=\"text-align:center\"><a href=\"/public/backend/ckeditor_file/images/Organogram/organogram.png\" target=\"_blank\"><img alt=\"\" src=\"/public/backend/ckeditor_file/images/Organogram/organogram.png\" style=\"height:40%; width:70%\" /></a></p>', 1, 1, 2, NULL, '2021-07-08 18:12:46', '2022-02-10 02:50:54'),
(24, 'Vision and Mission', NULL, '<p style=\"text-align:center\"><span style=\"font-size:18px\"><img src=\"data:image/jpeg;base64,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\" style=\"width:350px\" /></span></p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:22px\"><strong><span style=\"font-family:Verdana\">Vision</span></strong></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:22px\"><span style=\"font-family:Verdana\">Vision of the Institute is to become a center&nbsp;of excellence in teaching and research on policy options regarding governance and development and to establish an effective, transparent and accountable public service in Bangladesh.</span></span></p>\r\n\r\n			<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n			<p><span style=\"font-size:22px\"><strong><span style=\"font-family:Verdana\">Mission</span></strong></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Verdana\">Mission of the Institute is the capacity development of the public and private sector executives through strengthening their knowledge, skills, and competence and by enhancing their commitment, motivation, and dedication to the interest of the country and its people.</span></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 2, NULL, '2021-08-09 21:41:03', '2022-02-24 22:39:56'),
(25, 'Visit BIGM', NULL, '<p style=\"text-align:center\"><img alt=\"\" src=\"/public/backend/ckeditor_file/images/about_bigm.jpg\" style=\"height:350px; width:622px\" /></p>', 1, 2, 2, NULL, '2021-08-25 14:33:46', '2022-02-06 22:19:06'),
(28, 'Director', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:90%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:center\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/download%20(1).jpg\" style=\"max-width: 100%;\" /></p>\r\n\r\n			<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"\">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p style=\"text-align:justify\"><span style=\"font-size:16px\">MOHAMMAD TAREQUE, PhD a career civil servant, currently serves as the Director at Bangladesh Institute of Governance and Management (BIGM). Before joining BIGM, Dr. Tareque worked as an Alternate Executive Director at the World Bank and Finance Secretary (Finance Division), Ministry of Finance, Bangladesh. He served in the Finance Division in various capacities - Deputy Secretary through Additional Secretary. He also worked about four years with the Asian Development Bank&nbsp;(ADB) as a Micro-economic Analysis Specialist and five years as Director, Prime Minister&rsquo;s Office,&nbsp;Government of Bangladesh (GoB). Dr. Tareque spent about 36 years in civil service. Thus, he has a wide range of experience in public administration, public finance management, development planning, macro-economic management and training. During his long tenure of about 15 years in the Finance Division, he developed a team of spirited officers, bonded by an esprit&ndash;de&ndash;corps, brought in a culture of intellectual discourse, led the team to usher in a wide range of reforms within the public financial management system of Bangladesh. He helped introduce the Mediumterm&nbsp;Budgetary framework across the government based on a Medium-term Macro-framework, created Macro, Debt Management, and Autonomous wings of finance division without creating any single additional post. Dr. Tareque also helped separation of monetary policy from fiscal operations, facilitated introductions of Public-Private Parentships (PPP) and PPP financing&nbsp;instruments, creation of Bangladesh Infrastructure Finance Fund Limited (BIFFL) as a PPP project financing vehicle and established Public Financial Management (PFM) capacity enhancing institute&nbsp;namely, the Institute of Public Finance (IPF). During his long career in the finance division, Dr.&nbsp;Tareque developed more than 20 policy papers to ensure socio-economic developmental stability&nbsp;and strengthen financial accountability. Dr. Tareque completed BA (Honours) and MA degrees in&nbsp;Economics from the University of Dhaka. He also completed his PhD in Economics and MA in&nbsp;Political Economy from the University of Boston, USA. He participated in many professional&nbsp;training programs at national and international reputed institutions. Dr. Tareque has written&nbsp;around 13 articles/conference papers in reputed international and national journals indexed&nbsp;in/published by SSCI and ESCI - Thomson Reuters (Web of Science), Scopus, SAGE, Springer, Wiley,&nbsp;and Emerald.&nbsp;</span></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 1, 2, 2, NULL, '2021-08-25 16:00:22', '2022-05-22 07:11:57'),
(29, 'Additional Directors', NULL, '<p>Additional Directors</p>', 1, 2, 2, NULL, '2021-08-25 16:01:05', '2022-02-06 22:19:41'),
(30, 'MPA in HRM', NULL, '<p style=\"text-align:center\"><span style=\"font-size:24px\"><strong>MPA in Human Resource Management</strong></span></p>\r\n\r\n<table align=\"center\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:1024px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:center\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/HRM_Process%20(1).jpeg\" style=\"height:300px; width:631px\" /></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:20px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#212529\">People in this post-millennium generation believe in automation, belief in switch but still, there is a need of managing human resources whatever the type and size of the organization. Exploring the competency of human isn&rsquo;t a thing that can only be earned through theoretical knowledge rather require cognition from real-life character and the MPA program of BIGM, Dhaka is run by the expert who holds a practically experienced position. Apart from this, the strategy of turning humans into resources is transforming in the touch of the fourth industrial revolution within mint technical tools and thus the program works on creating an ambiance of learning which is evolving with the requirement of the seesaw.</span></span></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#333333\">The Masters in Human Resource Management at BIGM, Dhaka is offered to help students to acquire the knowledge and skills needed to pursue effective careers in the human resource field. The program prepares individuals to assume specialist, generalist and managerial positions in HR departments in the private, public and nonprofit sectors. After gaining a fundamental grounding in the social sciences and a comprehensive management education through core and elective courses, students would acquire a functional HRM education that would allow them to compete in the HRM job market.</span></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:20px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#333333\">Masters in Human Resource Management is designed to enhance the knowledge, skills, and related capabilities of public, private, and NGO/CSO officials to confront the complexities of human resources development in an increased globalize environment. In addition to preparatory and core subjects, the program offers a range of elective courses so that students can pursue their studies in accordance with their academic interests and career objectives. The preparatory course section consists of four courses and those are the fundamental courses required in any professional degree where the participants are mastered in formal business communication, the effective and efficient management functions, and economics in a real sceneries as well as elemental research process. Consisting of eight core courses, the program provides the professional essence of elementary HRM, behavior and development criteria in organization, strategy and leadership needed to cope within the industry, personnel development and training scheme, conflict and negotiating with behalves, ethical institutions, and finally overall HRM sketch. Mentioning HRM as a contemporary approach the elective courses takes measures to make the participant rational regarding worldwide HRM practice and challenge, legal circumstances, corporate governance, as well as an information system in HRM.</span></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:20px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#333333\">A student is required to take 45 credit hours comprising 14 courses of 3 credit hours each and a term paper of 3 credit hours. Those who wish to take Dissertation is required to take 12 courses of 3 credit hours each, dissertation carry up 9 credits.</span></span> </span></span></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 12, NULL, '2021-08-25 23:32:22', '2022-06-12 10:45:02');
INSERT INTO `menu_posts` (`id`, `title`, `date`, `description`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(31, 'MPA in GPP', NULL, '<p style=\"text-align:center\"><span style=\"font-size:24px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>MPA in Governance and Public Policy</strong></span></span></p>\r\n\r\n<table align=\"center\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:1024px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:center\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/images%20(2).jpg\" style=\"height:158px; width:318px\" />&nbsp;</p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:20px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Governance refers to the methods for directing, controlling, and holding organizations accountable. It encompasses an organization&#39;s exercise of authority, responsibility, leadership, direction, and control. Governance is crucial because it allows for the application of strong governance ideas and practices across the entire organization. Public policy is an important component of governing and politics because it helps to shape a society&#39;s standards and ideals. It&#39;s a crucial and effective approach to get your opinion heard because public policy is developed as a collaborative effort by governments, institutions, and even average citizens.</span></span>&nbsp;</span></span></span></p>\r\n\r\n			<p><span style=\"font-size:20px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#363636\">The main objective of this </span><span style=\"color:black\">Governance and Public Policies </span><span style=\"color:#363636\">Course is to empower public sector professionals with&mdash;</span></span></span></span></span></p>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:20px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#363636\">Complete knowledge and information of the process, principles, practices and challenges of modern public policy analysis and implementation.</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:20px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#363636\">The adequate skill and knowledge to play an important part in policy analysis, formulation and implementation in the organization.</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:20px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#363636\">The experience and preparedness to handle any challenges or obstructions to the entire policy process.</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:20px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#363636\">A broader perspective to look beyond and think of situations, problems and their long-term solutions.</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:20px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#363636\">The advantage of creating policies that suit employees and also resolve challenges well, thus ensuring maximum adherence by employees.</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:20px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#363636\">An advantage of creating a conducive and disciplined work culture, with all employees respecting the policies and guidelines set out by the organization.</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:20px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#363636\">The ability to permanently resolve a problem that would have otherwise negatively impacted the growth of the organization.</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:20px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#363636\">The ability to critically examine the structure and functions of the organization and make a positive difference.</span></span></span></span></span></li>\r\n			</ul>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:20px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">A student must earn 45 credit hours by taking 14 three-credit-hour courses and writing a three-credit-hour term paper. Those who want to pursue a Thesis must take 12 three-credit-hour courses, with the thesis accounting for 9 credits.</span></span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 12, NULL, '2021-08-25 23:32:50', '2022-06-28 08:50:56'),
(32, 'Overview of MPA in HRM', NULL, '<p>Overview of MPA in HRM</p>', 1, 2, 2, NULL, '2021-08-25 23:35:53', '2022-02-06 22:20:50'),
(33, 'Overview of MPA in GPP', NULL, NULL, 1, 2, NULL, NULL, '2021-08-25 23:36:10', '2021-08-25 23:36:10'),
(34, 'Message from HoD of MPA in HRM', NULL, '<p>Message from HoD of MPA in HRM<br></p>', 1, 2, 2, NULL, '2021-08-25 23:37:04', '2021-08-25 23:41:21'),
(35, 'Message from HoD of MPA in GPP', NULL, '<p>Message from HoD of MPA in GPP<br></p>', 1, 2, 2, NULL, '2021-08-25 23:37:19', '2021-08-25 23:40:50'),
(36, 'MPA in IER', NULL, '<p style=\"text-align:center\"><span style=\"font-size:24px\"><strong>MPA in <span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#333333\">International Economic Relations</span></span></span></strong></span></p>\r\n\r\n<table align=\"center\" cellpadding=\"10\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<h3 style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Cambria,serif\"><span style=\"color:#4f81bd\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">MPA in International Economic Relations is designed to prepare the executives of both Public and Private sector to be well grounded through the theories and practices of both local and international economic development in a global context. The program will prepare students serve as a catalyst in the promotion, development and application of the science and art of international economics and management in the process of nation building.</span></span></span></span></span></h3>\r\n\r\n			<h3 style=\"text-align:justify\">&nbsp;</h3>\r\n\r\n			<h3 style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Cambria,serif\"><span style=\"color:#4f81bd\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">A student is required to take 45 credit hours comprising of 14 courses of 3 credit hours each and a term paper of 3 credit hours. Those who want to take Thesis are required to take 12 courses of 3 credit hours each, thesis station carrying 9 credits.</span></span></span></span></span></h3>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 1, 2, 2, NULL, '2021-08-28 13:27:53', '2022-02-24 22:49:52'),
(37, 'Overview of MPA in IER', NULL, '<p style=\"text-align: center; \">Overview of MPA in IER<br></p>', 1, 2, NULL, NULL, '2021-08-28 13:29:37', '2021-08-28 13:29:37'),
(38, 'Policy Analysis Course', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:18px\">For over a decade now, our growth has been over 6.25 percent, a feat unimaginable a few decades earlier and an outcome that also reflects the government&#39;s commitment and choices. Contrary to some popular narratives, the government&#39;s policies significantly shaped the quality of growth in Bangladesh. For example, the governments consistently supported cash transfer program, encouraged the participation of Civil Society Organizations (CSOs), designed pro-poor fiscal and monetary policies that touched the lives of those who needed the most. Happily, for us, Henry Kissinger&rsquo;s &lsquo;Bottom-less Basket&rsquo; prediction has been proven wrong, as has been the Kuznets&rsquo; theory of rising inequality at the early stages of growth. Although our policies might not have been always holistic or well-coordinated, they were always sincere and mostly consistent; these policies deserve an important part of the credit.</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">We all know Bangladesh is now at a crossroad of development. In fact, we are witnessing one of the largest manufacturing-led take-off in a democracy. The economy is ready to reap the benefits of its comparative advantages, including our demographic dividend. For that we need to transform our huge population into human capital. We need to upgrade the productivity of our both skilled and unskilled workers; the capacity of both private and public sector institutions. A competent bureaucracy is, therefore, a must for any sustained economic take-off. In fact, no sustained economic take-off has ever taken place without a competent bureaucracy. This is especially more so in a private sector-led growth process in a democracy. Needless to say that this constraint is also more binding during the middle-income transitions. The road to a developed Bangladesh by 2041 goes through a competent bureaucracy, as the experience of East Asia and advanced economies have demonstrated.</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">We are heartened by the government&#39;s urgency in enhancing the skills of the people to maximize the population dividend and its benefit. Along with the general skills development program, the government has also prioritized the training of new cohorts of visionary bureaucrats with knowledge and skills who can better design, implement, and evaluate the next generation of reforms in Bangladesh. It is obvious that the quality of our bureaucracy will critically influence the growth trajectory in the next phase of our development.</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">A mature private sector has rightly contributed to the developmental effort ever than before. But during the middle-income transitions, being right may not be enough. An enabling environment for the bureaucracy is a necessary condition for a sustained takeoff. An efficient bureaucracy with practical knowledge combined with open, constructively critical approach that can address the questions of governance and policy development is the need of the hour. Moreover, an effective implementation is contingent on evidence-based policy formulation and evaluation, which are essentially an iterative process. Therefore, a dynamic, innovative and thoughtful bureaucracy is a sin-qua-non for moving to the next higher plane.</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">It is the earnest hope of BIGM that the policy analysis training would provide a set of conceptual frameworks for analyzing the public policy, and formulating effective strategies for policy design, analysis, evaluation, and advocacy. The concepts, skills, and analytical tools students would learn in the training would rest upon a foundation of economic principles, institutional analysis, and political and social psychology. They would be able to identify, analyze, predict the patterns of behavior and outcomes, and ultimately enhance policy effectiveness. That in turn would infuse dynamism, innovation, and critical reasoning into the bureaucracy that can respond to the complex world we now live in. 2600 years ago, the Chinese philosopher Lao Tzu, said &lsquo;the journey of a thousand miles begins with one step&rsquo;. We are taking that first step in an unprecedented journey for the 160 million Bangladeshis. We are embarking on that journey by carrying the inspirations and the sacrifices of the past. And with that resolve, pragmatism, and optimism, our top policymakers will train a new brand of trained human ware for a more just, more inclusive, and more developed Bangladesh.</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">For over a decade now, our growth has been over 6.25 percent, a feat unimaginable a few decades earlier and an outcome that also reflects the government&#39;s commitment and choices. Contrary to some popular narratives, the government&#39;s policies significantly shaped the quality of growth in Bangladesh. For example, the governments consistently supported cash transfer program, encouraged the participation of Civil Society Organizations (CSOs), designed pro-poor fiscal and monetary policies that touched the lives of those who needed the most. Happily, for us, Henry Kissinger&rsquo;s &lsquo;Bottom-less Basket&rsquo; prediction has been proven wrong, as has been the Kuznets&rsquo; theory of rising inequality at the early stages of growth. Although our policies might not have been always holistic or well-coordinated, they were always sincere and mostly consistent; these policies deserve an important part of the credit.</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">We all know Bangladesh is now at a crossroad of development. In fact, we are witnessing one of the largest manufacturing-led take-off in a democracy. The economy is ready to reap the benefits of its comparative advantages, including our demographic dividend. For that we need to transform our huge population into human capital. We need to upgrade the productivity of our both skilled and unskilled workers; the capacity of both private and public sector institutions. A competent bureaucracy is, therefore, a must for any sustained economic take-off. In fact, no sustained economic take-off has ever taken place without a competent bureaucracy. This is especially more so in a private sector-led growth process in a democracy. Needless to say that this constraint is also more binding during the middle-income transitions. The road to a developed Bangladesh by 2041 goes through a competent bureaucracy, as the experience of East Asia and advanced economies have demonstrated.</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">We are heartened by the government&#39;s urgency in enhancing the skills of the people to maximize the population dividend and its benefit. Along with the general skills development program, the government has also prioritized the training of new cohorts of visionary bureaucrats with knowledge and skills who can better design, implement, and evaluate the next generation of reforms in Bangladesh. It is obvious that the quality of our bureaucracy will critically influence the growth trajectory in the next phase of our development.</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">A mature private sector has rightly contributed to the developmental effort ever than before. But during the middle-income transitions, being right may not be enough. An enabling environment for the bureaucracy is a necessary condition for a sustained takeoff. An efficient bureaucracy with practical knowledge combined with open, constructively critical approach that can address the questions of governance and policy development is the need of the hour. Moreover, an effective implementation is contingent on evidence-based policy formulation and evaluation, which are essentially an iterative process. Therefore, a dynamic, innovative and thoughtful bureaucracy is a sin-qua-non for moving to the next higher plane.</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">It is the earnest hope of BIGM that the policy analysis training would provide a set of conceptual frameworks for analyzing the public policy, and formulating effective strategies for policy design, analysis, evaluation, and advocacy. The concepts, skills, and analytical tools students would learn in the training would rest upon a foundation of economic principles, institutional analysis, and political and social psychology. They would be able to identify, analyze, predict the patterns of behavior and outcomes, and ultimately enhance policy effectiveness. That in turn would infuse dynamism, innovation, and critical reasoning into the bureaucracy that can respond to the complex world we now live in. 2600 years ago, the Chinese philosopher Lao Tzu, said &lsquo;the journey of a thousand miles begins with one step&rsquo;. We are taking that first step in an unprecedented journey for the 160 million Bangladeshis. We are embarking on that journey by carrying the inspirations and the sacrifices of the past. And with that resolve, pragmatism, and optimism, our top policymakers will train a new brand of trained human ware for a more just, more inclusive, and more developed Bangladesh.</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 2, NULL, '2021-09-03 22:58:45', '2022-02-25 08:20:21'),
(39, 'Strategic Management', NULL, '<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">We can define Strategic management as the process of ongoing planning, monitoring, analysis and assessment of all necessities an organization needs to meet its goals and objectives. Changes in social, political and business environments will require organizations to constantly assess their strategies for success. The strategic management is a continuous process that helps organizations to analyze their present situation, formulate strategies, implement them and analyze the effectiveness of the applied management strategies.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Strategic Management is all about identification and description of the strategies that officers and managers can carry so as to achieve better performance and a competitive advantage for their organization. Strategic management can be called as one of the most important part of management as the implementation of successful strategies decides the result of an organization&rsquo;s performance. </span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Strategic Management is applicable to both small as well as large organizations as even the smallest organization face competition and, by formulating and implementing appropriate strategies, they can attain sustainable competitive advantage. This is how the strategist sets goals and works towards achieving them. It deals with making decisions and implementing decisions about the future direction of the organization. This helps us see where the organization is heading. Moreover, Strategic Management gives a broader perspective to the employees of an organization and they can better understand how their job fits into the entire organizational plan and how it is co-related to other organizational members.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">The Strategic Management course will be treated as an extended course of Policy Analysis Course conducted by BIGM. Bangladesh is now on the highway towards prosperity. Bangladesh has already set its goal for achieving Vision 2021, SDG 2030, Vision 2071 and Delta Plan 2100. To accomplish these dream trajectories, each organization, division and Ministry should prepare a strategic plan of its own to maximize the desired output of their own organization.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Strategic planning and management have gained widespread acceptance in the last fifteen years as means of improving public policymaking and administration. Governments and public sector organizations all around the world have grown to reply on them. Those involved in public administration in any kind of form, whether as a politician, a competent civil servant or a public or private manager, must understand and be able to apply them. This course examines both the theory and practice of strategic planning and management in public and private sectors.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">BIGM sincerely hopes that the strategic management program will provide a foundation for strategic planning and management, strategic decision making, strategic reforms of public services, and developing effective strategies for policy formulation, analysis, evaluation, and advocacy strategies. And the participants would be able to discover, analyze and forecast strategy design, execute, evaluate the strategy and hence, ensure the effectiveness of policies. As a result, the bureaucracy would be infused with the vitality, strategic initiatives for innovation, and analysis, making it more responsive to the complicated world.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Program Highlights:</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><img src=\"/public/backend/ckeditor_file/files/image-20220903082035-1.png\" style=\"height:507px; width:893px\" /></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Even after the indetification of the best alternative policy options, a critical strategic role has to be played by the leader of the organization for having optimal output or benefit from the policy. With a view to achieve that, the key players of the organization should develop a strategic plan through again making an analysis of the concerned key stakeholders and internal and external scanning of the environment committing and utlizing appropriate resources for the execution, monitoring and evaluation of that plan for achieving the desired goal. Otherwise, it is not possible to achieve the benefit from the policy that has been formulated so rigorously.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">In the above context, Startegic Management Course has become very important for the participants from both the public &amp; rpivate sectors. Nowadays, strategic management are also being practiced by the national governement across the globe to achieve national goals.</span></span></p>\r\n\r\n<p>&nbsp;</p>', 1, 2, 12, NULL, '2021-09-03 23:00:34', '2022-09-03 02:21:42'),
(40, 'Description of Research Methodology', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><em>Research methodology</em> is referred to the science that studies how a research is carried out scientifically. In simple terms, it is a delineation of how a certain research is conducted and specifies the procedures or methods for identifying and analyzing data related to a given research topic. Research methodology emphasizes not only on the methods or techniques but also states the procedures of the identification of the research problem, formulation of the research hypothesis. Furthermore, it points out the relevance of applying a certain method in the context of the outlined study which helps other researchers to evaluate the research findings of the study. </span></span></p>\r\n\r\n			<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">A research methodology gives research legitimacy and provides scientifically sound findings. It also provides a detailed plan that helps to keep researchers on track, making the process smooth, effective and manageable. A researcher&#39;s methodology allows the reader to understand the approach and methods used to reach the conclusion.</span></span></p>\r\n\r\n			<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">An important part of BIGM&rsquo;s activity is to promote and develop young researchers. Given this, BIGM conducts both online and offline training course on Research Methodology with the goal of strengthening the environment and quality of research culture.</span></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 12, NULL, '2021-09-03 23:00:53', '2022-06-11 06:26:04'),
(41, 'Our Library', NULL, '<p style=\"text-align:center\"><span style=\"font-size:18px\"><img alt=\"\" src=\"/public/backend/ckeditor_file/images/2199.jpg\" style=\"height:450px; width:800px\" /></span></p>\r\n\r\n<p><span style=\"font-size:18px\">The library in BIGM holds a rare collection of books, research papers and periodicals. Items in the library can be rented by students, Teachers and Researchers.&nbsp;The library in BIGM holds a rare collection of books, research papers and periodicals. Items in the library can be rented by students, Teachers and Researchers.&nbsp;The library in BIGM holds a rare collection of books, research papers and periodicals. Items in the library can be rented by students, Teachers and Researchers.&nbsp;The library in BIGM holds a rare collection of books, research papers and periodicals. Items in the library can be rented by students, Teachers and Researchers.</span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<table align=\"center\" border=\"2\" cellpadding=\"1\" cellspacing=\"1\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\" style=\"background-color:#0099ff; text-align:center; width:30%\"><span style=\"font-size:18px\"><strong><span style=\"color:#ffffff\">New Arrivals</span></strong></span></th>\r\n			<th scope=\"col\" style=\"background-color:#0099ff; text-align:center; width:30%\"><span style=\"font-size:18px\"><strong><span style=\"color:#ffffff\">Upcoming Books</span></strong></span></th>\r\n			<th scope=\"col\" style=\"background-color:#0099ff; text-align:center; width:30%\"><span style=\"font-size:18px\"><strong><span style=\"color:#ffffff\">BIGM Publications/Journal</span></strong></span></th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\">&nbsp;</td>\r\n			<td style=\"text-align:center\"><span style=\"font-size:18px\"><img alt=\"\" src=\"/public/backend/ckeditor_file/images/Library/books1.jpg\" style=\"height:330px; width:250px\" /></span></td>\r\n			<td style=\"text-align:center\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">&nbsp;</td>\r\n			<td style=\"text-align:center\">&nbsp;</td>\r\n			<td style=\"text-align:center\">&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 1, 4, 2, NULL, '2021-10-06 15:10:28', '2022-02-06 22:23:14'),
(42, 'Foundation Day', NULL, '<p>Vision of the Institute is to become a centre of excellence in teaching and research on policy options regarding governance and development and to establish an effective, transparent and accountable public service in Bangladesh.</p>\r\n\r\n<p><img alt=\"\" src=\"blob:http://bigm.edu.bd/7a4e6c19-0a64-4ee5-a0fb-6cf80e4170be\" style=\"width:5472px\" /></p>', 1, 2, 2, NULL, '2021-10-21 13:38:45', '2022-02-06 22:23:47'),
(43, 'BIGM ALUMNI FORUM', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:1500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\">Some of the ex-students of BIGM were dreaming to organize a platform to look back and look forward and work for their betterment and their families. As a result the idea was shared with many of the visionaries belonging to different batches, teachers and well wishers. They very positively appreciated the idea and approached to unite on that plan. Through a series of collective dialogues, conformity and divergence at last in the month of December 2016 BIGM Alumni Forum could be formed not an Association yet.</span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\">This forum &nbsp;prepared a short directory of the current and ex-students &nbsp;on the occasion of BIGM Alumni Get Together held on 3 February,2018.The directory contains &nbsp;merely the name, batch and the photograph of the alumni. However, it is expected that this directory would lead to take further initiative of publishing a complete and exhaustive directory in the near future. &nbsp;BIGM Alumni Forum also organized a grand Iftar Party on June 7, 2018. The Forum is now busy in preparing a constitution so that they can establish an Alumni Association on a strong legal footing very soon.</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 3, 2, NULL, '2021-10-27 14:39:14', '2022-02-06 22:25:33'),
(44, 'BIGM BLOG', NULL, '<p style=\"text-align:center\"><span style=\"font-size:16px\"><strong>Welcome to the BLOG of BIGM</strong></span><br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\">Blog page coming soon</span></p>', 1, 3, 3, NULL, '2021-11-17 02:54:59', '2022-03-23 00:15:02'),
(45, 'About Association', NULL, '<p>About BIGM ALUMNI Association page will come soon...</p>', 1, 3, 2, NULL, '2021-11-17 02:59:45', '2022-02-06 22:25:42'),
(46, 'Executive Committee', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:center\"><span style=\"font-size:24px\"><u><strong>Convening Committee of the BIGMAF</strong></u></span></p>\r\n\r\n			<ol>\r\n				<li><span style=\"font-size:18px\">Syed Mahabub Alam (1st Batch)</span></li>\r\n				<li><span style=\"font-size:18px\">Md.Razib Pervez(1st Batch)</span></li>\r\n				<li><span style=\"font-size:18px\">Hedayetullah Al Mamoon(2nd Batch)</span></li>\r\n				<li><span style=\"font-size:18px\">Shaikh Muhammad Mehedi Hassan (2nd Batch)</span></li>\r\n				<li><span style=\"font-size:18px\">Md. Abdullah Al Mamoon (3rd Batch)</span></li>\r\n				<li><span style=\"font-size:18px\">D Z M Mizanur Rahman (4th Batch)</span></li>\r\n				<li><span style=\"font-size:18px\">Iftekhar Hassan(4th Batch)</span></li>\r\n				<li><span style=\"font-size:18px\">Foysal Mehdi(5th Batch)</span></li>\r\n				<li><span style=\"font-size:18px\">Tahnia Rahman Chowdhury(6th Batch)</span></li>\r\n				<li><span style=\"font-size:18px\">Mosammat Fojila Khanom(7th Batch)</span></li>\r\n				<li><span style=\"font-size:18px\">Abdullah Al Harun (7th Batch)</span></li>\r\n				<li><span style=\"font-size:18px\">A.K. Borhanuddin (8th Batch)</span></li>\r\n				<li><span style=\"font-size:18px\">Monika Biswas (8th Batch)</span></li>\r\n				<li><span style=\"font-size:18px\">Md. Rizwanul Haque Khan (9th Batch)</span></li>\r\n				<li><span style=\"font-size:18px\">Md. Omar Sharif (9th Batch )</span></li>\r\n			</ol>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<ol>\r\n</ol>', 1, 3, 2, NULL, '2021-11-17 03:03:07', '2022-02-06 22:27:09'),
(47, 'Constitution', NULL, '<p>BIGM ALUMNI&nbsp;Constitution page will be coming soon..</p>', 1, 3, 2, NULL, '2021-11-17 03:08:37', '2022-02-06 22:27:18'),
(48, 'Library Committee', NULL, '<p>The Library Committee page will be coming soon..</p>', 1, 3, 2, NULL, '2021-11-17 03:12:49', '2022-02-06 22:27:29'),
(49, 'Library Rules', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:1500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<ol>\r\n				<li style=\"text-align: justify;\"><span style=\"font-size:18px\">The Library of Bangladesh Institute of Governance and Management(BIGM), will remain open from 1:30 pm to 9:30 pm on Saturday to Monday and 10 am to 6 pm on Tuesday and Wednesday except on weekly holidays, public and Institute holidays.(Library hours will follow office hours of BIGM during Ramadan and/or any other unusual circumstances)</span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"font-size:18px\">To be a member of the Library of BIGM every student will have to pay registration fee of Tk. 200/- only (two hundred) before issuing the books and other reading or electronic materials. After registration he/she will be provided with a library card. Usually this fees would be collected at the beginning of the first semester.</span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"font-size:18px\">The entries on the book card will be made by the Library staff.</span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"font-size:18px\">Students of the Institute shall be entitled to use the reading room taking two books at a time. They shall not be allowed to take books outside the Library premises before borrowing books against Library card.</span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"font-size:18px\">No books shall be issued for use in the reading room within last half hour of the closing time.</span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"font-size:18px\">Photocopying facilities would be made available on charge. The rate will determined by BIGM authority.</span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"font-size:18px\">Faculty members/students/employees of the BIGM will be entitled to borrow a maximum two (2) books at a time and the period of retention shall be one (1) week. After this period the books must be returned and may be reissued if the same are not required by any other reader.</span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"font-size:18px\">If the books are returnable on holiday of the Institute they may be returned on the next opening day.</span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"font-size:18px\">The defaulters shall be liable to pay a fine of Tk. 10.00( ten taka ) only for each book per day.</span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"font-size:18px\">Reference books stamped as dictionaries, encyclopedias, journals, reports etc shall not be issued but they may be consulted in the Library under such conditions as the Librarian deem suitable.</span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"font-size:18px\">The charge for loss of Library card and token shall be realized from the concerned student at the rate of Tk. 300/- (three hundred) each.</span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"font-size:18px\">In case of loss of book(s) actual cost of the market price will be charged against each copy.</span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"font-size:18px\">Students are not allowed to bring their personal bags, umbrella etc in the Library. All students are required to leave their personal belongings to the Library attendant at the entry point against the numbered token. Valuable materials like money, ornaments etc. (if any) shall be retained with the students. Otherwise, Library staff will not be held responsible for loses of such materials.</span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"font-size:18px\">Notes and exercise books, text books may be allowed to be taken inside the Library subject to checking at the gate.</span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"font-size:18px\">Teachers/students using reading room are not allowed to smoke, eat, drink and converse and other forms of activities likely to disturb the readers. The readers shall enter and leave the Library without any noise.</span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"font-size:18px\">Deposited materials shall have to be collected from the counter of the Library returning respective token 15 minutes before the closing of the library on the same day.</span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"font-size:18px\">Library staffs may check the readers within the Library premises or at the gate at the time of departure.</span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"font-size:18px\">Right of any reader to use the Library may be suspended or kept in abeyance by the Library Committee for transgressing Library rules.</span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"font-size:18px\">No student shall be permitted to sit for semester-wise final examination unless he/she has returned the book(s) borrowed by him. The Librarian would send a list of default students to the Director of the College at least 7 days before the commencement of their final examinations.</span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"font-size:18px\">Complete stock verification for the library needs to be done every 01 (one) /02(two) year with the prior approval of the authority.</span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"font-size:18px\">During the period of stock-taking, the borrower&rsquo;s will on demand return all the books issued against their card and no book (s) will be issued until the verification is over.</span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"font-size:18px\">When a faculty member/an employee of the BIGM leave the service he/she shall return the Library card with all borrowed book(s), otherwise the clearance certificate will not be issued. Administration section will require this clearance certificate before releasing any body.</span></li>\r\n			</ol>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 3, 2, NULL, '2021-11-17 03:14:22', '2022-02-06 22:29:01'),
(50, 'Library Facilities', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<ol>\r\n				<li><span style=\"font-size:18px\">Available Text Book</span></li>\r\n				<li><span style=\"font-size:18px\">Available Reference Book</span></li>\r\n				<li><span style=\"font-size:18px\">On payment photocopy and print service</span></li>\r\n				<li><span style=\"font-size:18px\">User-friendly and reading environment</span></li>\r\n				<li><span style=\"font-size:18px\">Individual reading unit</span></li>\r\n				<li><span style=\"font-size:18px\">Individual research unit</span></li>\r\n				<li><span style=\"font-size:18px\">Online library facilities</span></li>\r\n			</ol>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 3, 2, NULL, '2021-11-17 03:17:01', '2022-02-06 22:30:00'),
(51, 'Charges', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:1000px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\">To be a member of the Library of BIGM every student will have to pay a registration fee of Tk. 200/- only (two hundred) before issuing the books and other reading or electronic materials. After registration, he/she will be provided with a library card. Usually, these fees would be collected at the beginning of the first semester.</span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 3, 2, NULL, '2021-11-17 03:18:55', '2022-02-06 22:30:41'),
(52, 'Fine and Limit', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:1000px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:18px\">The defaulters shall be liable to pay a fine of Tk. 10.00( ten taka ) only for each book per day. Faculty members/students/employees of the BIGM will be entitled to borrow a maximum two (2) books at a time and the period of retention shall be one (1) week. After this period the books must be returned and may be reissued if the same are not required by any other reader.</span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 3, 2, NULL, '2021-11-17 03:19:30', '2022-02-06 22:31:13'),
(53, 'Contact Us', NULL, '<p style=\"text-align:center\"><span style=\"font-size:18px\"><img alt=\"\" src=\"/public/backend/ckeditor_file/images/Librarian/Tarique_Ahmad_Halim.jpg\" /><br />\r\nMr. Tarique Ahmad Halim<br />\r\nLibrarian<br />\r\n<a href=\"mailto:tarique.ahmad@bigm.edu.bd\">tarique.ahmad@bigm.edu.bd</a><br />\r\nOffice: 9141031,9141065, 9141252 (Ext-114),<br />\r\nMobile:01715622822,</span></p>', 1, 3, 2, NULL, '2021-11-17 03:31:39', '2022-02-06 22:32:06'),
(54, 'Library Location', NULL, '<p>Library Location page will be coming soon..</p>', 1, 3, 2, NULL, '2021-11-17 03:35:26', '2022-02-06 22:32:17'),
(55, 'Message From The Director', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:70%\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\"><span style=\"font-size:18px\"><img src=\"/public/backend/ckeditor_file/files/download(1).jpg\" style=\"max-width: 100%;\" /></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#212529\"><span style=\"font-family:system-ui,-apple-system,&quot;Segoe UI&quot;,Roboto,&quot;Helvetica Neue&quot;,Arial,&quot;Noto Sans&quot;,&quot;Liberation Sans&quot;,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;,&quot;Segoe UI Symbol&quot;,&quot;Noto Color Emoji&quot;\"><span style=\"background-color:#ffffff\"><span style=\"color:#212529\"><span style=\"font-family:system-ui,-apple-system,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,Liberation Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji\">Dear All</span></span></span></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#212529\"><span style=\"font-family:system-ui,-apple-system,&quot;Segoe UI&quot;,Roboto,&quot;Helvetica Neue&quot;,Arial,&quot;Noto Sans&quot;,&quot;Liberation Sans&quot;,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;,&quot;Segoe UI Symbol&quot;,&quot;Noto Color Emoji&quot;\"><span style=\"background-color:#ffffff\"><span style=\"color:#212529\"><span style=\"font-family:system-ui,-apple-system,&quot;Segoe UI&quot;,Roboto,&quot;Helvetica Neue&quot;,Arial,&quot;Noto Sans&quot;,&quot;Liberation Sans&quot;,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;,&quot;Segoe UI Symbol&quot;,&quot;Noto Color Emoji&quot;\">On behalf of Bangladesh Institute of Governance and Management (BIGM) I would like to welcome and thank you all for showing your interest in BIGM. At the very outset it is good to be reminded of the elements that make BIGM unique. The most fundamental trait of BIGM is the uncompromising commitment to excellence in education, research and training, enshrined in the BIGM&rsquo;s mission statement. All these can be lived out in practice each and every day in our class and supervision rooms, in our library and research lab, in our conference hall and computer lab. Even our spacious, eco-friendly and extensive greenery campus can mark the difference.</span></span></span></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#212529\"><span style=\"font-family:system-ui,-apple-system,&quot;Segoe UI&quot;,Roboto,&quot;Helvetica Neue&quot;,Arial,&quot;Noto Sans&quot;,&quot;Liberation Sans&quot;,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;,&quot;Segoe UI Symbol&quot;,&quot;Noto Color Emoji&quot;\"><span style=\"background-color:#ffffff\"><span style=\"color:#212529\"><span style=\"font-family:system-ui,-apple-system,&quot;Segoe UI&quot;,Roboto,&quot;Helvetica Neue&quot;,Arial,&quot;Noto Sans&quot;,&quot;Liberation Sans&quot;,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;,&quot;Segoe UI Symbol&quot;,&quot;Noto Color Emoji&quot;\">Over the last 13 years, BIGM has been offering Masters Programs on Governance and Public Policy (GPP), International Economic Relations (IER) and Human Resource Management (HRM). Ultimate aim is to equip mid level executives of both public and private sector with the knowledge, skills and competence so that they can effectively contribute in public policy formulation exercises and implementation thereof.&nbsp; &nbsp;As the national hub of public policy analysis BIGM is engaged in running 10-week long course on public policy on regular basis. Very recently, BIGM has started to impart training on Data Analytics: Statistical Modeling in R and Python, Hands-on Quantitative Analysis for Executives.</span></span></span></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#212529\"><span style=\"font-family:system-ui,-apple-system,&quot;Segoe UI&quot;,Roboto,&quot;Helvetica Neue&quot;,Arial,&quot;Noto Sans&quot;,&quot;Liberation Sans&quot;,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;,&quot;Segoe UI Symbol&quot;,&quot;Noto Color Emoji&quot;\"><span style=\"background-color:#ffffff\"><span style=\"color:#212529\"><span style=\"font-family:system-ui,-apple-system,&quot;Segoe UI&quot;,Roboto,&quot;Helvetica Neue&quot;,Arial,&quot;Noto Sans&quot;,&quot;Liberation Sans&quot;,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;,&quot;Segoe UI Symbol&quot;,&quot;Noto Color Emoji&quot;\">A culture of research is ingrained within BIGM&rsquo;s academic and organizational fabric. Faculty members, officers and students are compulsorily required to conduct research on national priority areas. A biennial journal of Public Policy Analysis would be published at the end of this year .Work relating to publication of a book entitled &lsquo;Governance and Public Policy&rsquo; is in progress.</span></span></span></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#212529\"><span style=\"font-family:system-ui,-apple-system,&quot;Segoe UI&quot;,Roboto,&quot;Helvetica Neue&quot;,Arial,&quot;Noto Sans&quot;,&quot;Liberation Sans&quot;,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;,&quot;Segoe UI Symbol&quot;,&quot;Noto Color Emoji&quot;\"><span style=\"background-color:#ffffff\"><span style=\"color:#212529\"><span style=\"font-family:system-ui,-apple-system,&quot;Segoe UI&quot;,Roboto,&quot;Helvetica Neue&quot;,Arial,&quot;Noto Sans&quot;,&quot;Liberation Sans&quot;,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;,&quot;Segoe UI Symbol&quot;,&quot;Noto Color Emoji&quot;\">We are reaching our hands outward to share our expertise, talents and resources with different academies, institutes, universities, research centres and think tanks working within the country and abroad. Thus we are working on different fronts with multipronged strategies to transform BIGM as a specialized Institute of international standard. We remain resolutely confident in BIGM&rsquo;s ability to endure and contribute towards fulfilling our national dream to make our beloved country Bangladesh a happy prosperous nation. In effect, actually we are all trustees, nurturing BIGM on behalf of new generations that will be producing new ideas and tackling problems that we cannot even begin to imagine.</span></span></span></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n			<div style=\"text-align:justify\"><strong><span style=\"font-size:18px\"><span style=\"color:#212529\"><span style=\"font-family:system-ui,-apple-system,&quot;Segoe UI&quot;,Roboto,&quot;Helvetica Neue&quot;,Arial,&quot;Noto Sans&quot;,&quot;Liberation Sans&quot;,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;,&quot;Segoe UI Symbol&quot;,&quot;Noto Color Emoji&quot;\"><span style=\"background-color:#ffffff\"><span style=\"color:#212529\"><span style=\"font-family:system-ui,-apple-system,&quot;Segoe UI&quot;,Roboto,&quot;Helvetica Neue&quot;,Arial,&quot;Noto Sans&quot;,&quot;Liberation Sans&quot;,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;,&quot;Segoe UI Symbol&quot;,&quot;Noto Color Emoji&quot;\">Dr. Mohammad Tareque</span></span></span></span></span></span></strong></div>\r\n\r\n			<div style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#212529\"><span style=\"font-family:system-ui,-apple-system,&quot;Segoe UI&quot;,Roboto,&quot;Helvetica Neue&quot;,Arial,&quot;Noto Sans&quot;,&quot;Liberation Sans&quot;,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;,&quot;Segoe UI Symbol&quot;,&quot;Noto Color Emoji&quot;\"><span style=\"background-color:#ffffff\">Director</span></span></span></span></div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 3, 2, NULL, '2021-11-21 15:36:20', '2022-05-22 07:17:42');
INSERT INTO `menu_posts` (`id`, `title`, `date`, `description`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(56, 'Message From The Chairman', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:70%\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\"><span style=\"font-size:18px\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/Cha-removebg-preview(1).png\" style=\"max-width: 100%;\" /></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\">BIGM, a&nbsp;postgraduate&nbsp;level institution, affiliated with the University of Dhaka,made&nbsp;its debut in 2006 as&nbsp;Civil Service College&nbsp;offering Masters&nbsp;Programme&nbsp;in Governance and Public Policy &amp; International Economic Relations to mid-level public servants and executives&nbsp;of&nbsp;the private sector. Subsequently, a Masters&nbsp;Programme&nbsp;on&nbsp;Human Resources Development was also added and in line with its mandate, charter, objective&nbsp;and&nbsp;national characteristic, the name was changed from Civil Service College to Bangladesh Institute of Governance and Management (BIGM). The vision, foresight&nbsp;and&nbsp;wisdom of some of our colleagues in the civil service led to the creation of this institution which is to become a center of excellence in teaching, training and research on policy options&nbsp;on&nbsp;governance and development.</span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\">We believe that mere learning and knowledge-gathering without having a corresponding mechanism in place for its practical application for the good and welfare of the people is a fruitless exercise.Any&nbsp;institution worth its name must&nbsp;strives&nbsp;to optimize the productivity of its students. With this end in view, BIGM is offering&nbsp;specialized&nbsp;program of conducting research/training of global standard to help establish an effective, transparent and&nbsp;an accountable&nbsp;public servants and senior management staff in the private sector.</span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\">BIGM vows to be internationally recognized as an institution of excellence and a seat of learning comparable to the best and eminent public administration schools anywhere in the world and with hard work, dedication and commitment, we shall achieve this goal.<br />\r\n			<br />\r\n			<strong>Md. Matiul Islam</strong><br />\r\n			Chairman<br />\r\n			Board of Trustee<br />\r\n			BIGM</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 2, NULL, '2021-11-28 15:52:52', '2022-05-22 07:16:11'),
(57, 'Gallary', NULL, '<p><a href=\"/public/backend/ckeditor_file/files/10_2.JPG\" target=\"_blank\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/10_2.JPG\" style=\"height:300px; width:451px\" /></a>&nbsp; &nbsp;&nbsp;<a href=\"/public/backend/ckeditor_file/files/about_bigm.jpg\" target=\"_blank\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/__thumbs/about_bigm.jpg/about_bigm__480x270.jpg\" style=\"height:300px; width:533px\" /></a>&nbsp; &nbsp;</p>', 1, 3, NULL, NULL, '2021-12-01 09:21:23', '2021-12-01 09:21:23'),
(58, 'Academic Regulations HRM', NULL, '<table align=\"center\" cellspacing=\"0\" class=\"MsoTable15Grid5DarkAccent6\" style=\"border-collapse:collapse; border:none; width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"3\" style=\"background-color:#70ad47; border-bottom:1px solid white; border-left:1px solid white; border-right:none; border-top:1px solid white; height:7px; vertical-align:top; width:428px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:white\">1st Year</span></span></span></strong></span></span></p>\r\n			</td>\r\n			<td style=\"background-color:#70ad47; border-bottom:1px solid white; border-left:none; border-right:1px solid white; border-top:1px solid white; height:7px; vertical-align:top; width:340px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:white\">2nd Year</span></span></span></strong></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#70ad47; border-bottom:1px solid white; border-left:1px solid white; border-right:1px solid white; border-top:none; height:14px; vertical-align:top; width:142px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:white\">1st Semester&nbsp;&nbsp;</span></span></span></strong></span></span></p>\r\n			</td>\r\n			<td style=\"background-color:#c5e0b3; border-bottom:1px solid white; border-left:none; border-right:1px solid white; border-top:none; height:14px; vertical-align:top; width:143px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;2nd Semester&nbsp;&nbsp;</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"background-color:#c5e0b3; border-bottom:1px solid white; border-left:none; border-right:1px solid white; border-top:none; height:14px; vertical-align:top; width:143px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;3rd Semester&nbsp;&nbsp;</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"background-color:#c5e0b3; border-bottom:1px solid white; border-left:none; border-right:1px solid white; border-top:none; height:14px; vertical-align:top; width:340px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;4th Semester</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#70ad47; border-bottom:1px solid white; border-left:1px solid white; border-right:1px solid white; border-top:none; height:84px; vertical-align:top; width:142px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:white\">4 courses</span></span></span></strong></span></span></p>\r\n\r\n			<p style=\"text-align:center\"><br />\r\n			<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:white\">12 credits&nbsp;</span></span></span></strong></span></span></p>\r\n			</td>\r\n			<td style=\"background-color:#e2efd9; border-bottom:1px solid white; border-left:none; border-right:1px solid white; border-top:none; height:84px; vertical-align:top; width:143px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;4 courses</span></span></span></span></p>\r\n\r\n			<p style=\"text-align:center\"><br />\r\n			<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">12 credits&nbsp;&nbsp;</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"background-color:#e2efd9; border-bottom:1px solid white; border-left:none; border-right:1px solid white; border-top:none; height:84px; vertical-align:top; width:143px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;4 courses</span></span></span></span></p>\r\n\r\n			<p style=\"text-align:center\"><br />\r\n			<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">12 credits&nbsp; &nbsp;</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"background-color:#e2efd9; border-bottom:1px solid white; border-left:none; border-right:1px solid white; border-top:none; height:84px; vertical-align:top; width:340px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Option 1<br />\r\n			2 courses 06 credits +Term paper&nbsp;<br />\r\n			( 3 credits)</span></span></span></span></p>\r\n\r\n			<p style=\"text-align:center\"><br />\r\n			<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Option 2<br />\r\n			2 courses 06 credits +Term paper&nbsp;<br />\r\n			( 3 credits)</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"4\" style=\"background-color:#70ad47; border-bottom:1px solid white; border-left:1px solid white; border-right:1px solid white; border-top:none; height:32px; vertical-align:top; width:769px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"color:white\">Total &nbsp; = &nbsp;18 months 45 credits</span></span></strong></span></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:justify\">\r\n			<p><u><span style=\"font-size:24px\"><strong>COURSE POLICIES</strong></span></u><br />\r\n			<span style=\"font-size:18px\">Students have to obtain CGPA of 2.50 for enrolment in the next/ subsequent semester<br />\r\n			There is no permission for makeup examinations.<br />\r\n			Regular and timely attendance in the class is compulsory.<br />\r\n			Students are encouraged to contact the Instructor in case of any difficulty relating to course content.<br />\r\n			A student who wishes to write Thesis must obtain a CGPA of 5 in the first three semesters and thesis must be completed within three months after the end of 4th semester.<br />\r\n			Any unfair means, such as copying adopted in the examination will be severely dealt with.<br />\r\n			Course Numbering System<br />\r\n			Courses are numbered in two parts: first part with alphabets representing the centre-piece of the programme, and second part refers to the level of the course. Preparatory courses could be numbered at 100 levels, Core Courses at 500 levels and Elective Courses at 600 levels. Dissertation related courses are numbered 700 onward with the Dissertation itself as 799.<br />\r\n			Performance Evaluation<br />\r\n			Grading/ Evaluation/Assessment<br />\r\n			Student of the MPA programs of BIGM shall be evaluated in the following ways:</span></p>\r\n\r\n			<p><br />\r\n			<span style=\"font-size:20px\"><u><strong>General</strong></u></span><br />\r\n			<span style=\"font-size:18px\">The student&rsquo;s academic performance in each course will be evaluated on a continuous basis and final results will be in the form of internationally accepted Cumulative Grade Point average (CGPA) system awarded out of a scale of 4.</span></p>\r\n\r\n			<p><br />\r\n			<span style=\"font-size:20px\"><u><strong>Grading</strong></u></span><br />\r\n			<span style=\"font-size:18px\">Letter grades shall be used to assess the performance of a student in a course of which A+, A, A-, B+, B, B-, C+, C and D are considered passing grades, F is the failing grade.</span></p>\r\n\r\n			<p><br />\r\n			<span style=\"font-size:20px\"><u><strong>Semester and Class Schedules</strong></u></span><br />\r\n			<span style=\"font-size:18px\">There will be four regular semesters in each programmes each semester spreading over 15 working weeks. Each credit hour means 10 classes of one and half hour each. Classes will be held on Saturdays, Sundays and Mondays. If necessary classes may be held on other days of the week. A class will usually be of 90 minutes duration. Seminars/workshops/debates will also be arranged at convenient times.</span></p>\r\n\r\n			<p><br />\r\n			<span style=\"font-size:20px\"><u><strong>Teaching Methods</strong></u></span><br />\r\n			<span style=\"font-size:18px\">The programme emphasizes participatory methods of learning including preparation of case studies by students, field visits and interaction with experts and practitioners. Considering the diversity of the courses, this programme provides for a variety of teaching methods, such as lecture, discussion, panel session, debate, seminar, role-playing, case study, workshop, project/group work and research. The faculty while offering a course will carefully select the methods appropriate for it and lesson&rsquo;s objectives. As most students are from active service, emphasis is given to methods that help students learn, engage in critical thinking and apply the knowledge in practice.</span></p>\r\n\r\n			<p><br />\r\n			<span style=\"font-size:20px\"><u><strong>Special Lectures</strong></u></span><br />\r\n			<span style=\"font-size:18px\">Special lectures on the issues of topical interest are organized from time to time in which reputed authorities/professionals are invited to lead the discussions.</span></p>\r\n\r\n			<p><br />\r\n			<span style=\"font-size:20px\"><u><strong>Academic Standing</strong></u></span><br />\r\n			<span style=\"font-size:18px\">Students are expected to maintain set standards in their academic work. They should take the requisite number of courses and maintain satisfactory grades. Students scoring a GPA below 2.5 in their first semester will be asked to withdraw from the program.</span></p>\r\n\r\n			<p><br />\r\n			<span style=\"font-size:20px\"><u><strong>Assessment</strong></u></span><br />\r\n			<span style=\"font-size:18px\">The respective teachers will design the course outline at the beginning of the semester and they will provide a copy of the course outline to each student. They will include the topics to be covered under the course and the valuation/grading policy for his/her course, in line with the approved syllabus. Based on the assessment policy he/she shall continuously evaluate performance of a student and award grades.</span></p>\r\n\r\n			<p><br />\r\n			<span style=\"font-size:20px\"><u><strong>Evaluation</strong></u></span><br />\r\n			<span style=\"font-size:18px\">The grade in a course will be based on an overall evaluation of student&rsquo;s performance throughout the semester in assignments, examinations, quizzes, term papers, project work, class participation and class attendance. The students will be evaluated on the basis of the following format.</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align=\"center\" border=\"1\" cellpadding=\"5\" cellspacing=\"0\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\"><span style=\"font-size:18px\">Attendance&nbsp;&nbsp; &nbsp;</span></td>\r\n			<td style=\"text-align:center\"><span style=\"font-size:18px\">Group Work&nbsp;&nbsp;</span></td>\r\n			<td style=\"text-align:center\"><span style=\"font-size:18px\">&nbsp;Individual Assignment&nbsp;&nbsp;</span></td>\r\n			<td style=\"text-align:center\"><span style=\"font-size:18px\">&nbsp;Mid Term&nbsp;&nbsp; </span></td>\r\n			<td style=\"text-align:center\"><span style=\"font-size:18px\">&nbsp;Final Exam</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\"><span style=\"font-size:18px\">10%&nbsp;</span></td>\r\n			<td style=\"text-align:center\"><span style=\"font-size:18px\">10%&nbsp;</span></td>\r\n			<td style=\"text-align:center\"><span style=\"font-size:18px\">10%</span></td>\r\n			<td style=\"text-align:center\"><span style=\"font-size:18px\">20%</span></td>\r\n			<td style=\"text-align:center\"><span style=\"font-size:18px\">50%</span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"0\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:justify\">\r\n			<p><span style=\"font-size:18px\">However, depending on nature of the course minor modifications can be made by the respective course teacher(s), provided it is incorporated in the course outline. Mid-term examinations and Final Examinations will be held on pre-announced dates. Numerical scores earned by students in tests, examinations, assignments will be accumulated and turned into letter grades at the end of the semester.</span></p>\r\n\r\n			<p><br />\r\n			<span style=\"font-size:20px\"><u><strong>Attendance</strong></u></span><br />\r\n			<span style=\"font-size:18px\">A student shall attend at least 75% of the classes held in a course. The course coordinator shall submit class attendance sheets to Principal/Vice Principal once in a week. However, a student may be allowed to appear in the final examination on payment of prescribed non-collegiate fee as may be fixed by the University of Dhaka from time to time for each course, if attendance is less than 75% but higher than 60%. Anybody whose attendance is less than 60% will not be allowed to seat in the final examination and will be deemed to have discontinued the course (s).</span></p>\r\n\r\n			<p><br />\r\n			<span style=\"font-size:20px\"><u><strong>Special Features Of The Programmes</strong></u></span><br />\r\n			<span style=\"font-size:18px\">45 Credits International Standard Masters Degree.<br />\r\n			Customized multidisciplinary courses generally not offered by other academic institutions.<br />\r\n			Modern innovative teaching and research methods.<br />\r\n			Variety of courses and curricula.<br />\r\n			Diverse student groups.<br />\r\n			Renowned faculty with professional knowledge and practical experience.<br />\r\n			Evening classes.<br />\r\n			Subsidized tuition fees<br />\r\n			Limited seats.<br />\r\n			First of a kind Institute in South Asia<br />\r\n			Only Institute offering Masters in Public Affairs (MPA) Degree in Bangladesh.<br />\r\n			World Class Certification from University of Dhaka<br />\r\n			Alumni Association.</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 12, NULL, '2021-12-04 16:02:03', '2022-07-25 10:44:33'),
(59, 'Courses for HRM', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<h5 style=\"text-align:center\"><span style=\"font-size:24px\"><strong>MPA IN HUMAN RESOURCE MANAGEMENT</strong></span></h5>\r\n\r\n			<h3><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">PREPARATORY COURSES </span></span></span></h3>\r\n\r\n			<ul>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:black\">English for Business Communication (HRM-PC-401)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:black\">Fundamentals of Management (HRM-PC-402) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:black\">Fundamentals of Economics (HRM-PC-403)</span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:black\">Research Methodology (HRM-PC-404)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></li>\r\n			</ul>\r\n\r\n			<h3><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">CORE COURSES (</span><u><span style=\"color:black\">All the following Courses will be offered</span></u><span style=\"color:black\">)</span></span></span></h3>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:black\">Human Resources Management (HRM-CC-501)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:black\">Organizational Behavior and Development (HRM-CC-502)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:black\">Strategic Management and Leadership (HRM-CC-503)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></li>\r\n				<li><span style=\"font-size:18px\"><strong><span style=\"color:black\">Strategic Human Resource Management (</span></strong><span style=\"color:black\">HRM-CC-504) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:black\">Employee Training and Development (HRM-CC-505)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:black\">Conflict Management and Negotiation (HRM-CC-506)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:black\">Business Ethics and Anti-corruption Measures (HRM-CC-507) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:black\">Strategic Human Resource Planning (HRM-CC-508)</span></span></li>\r\n			</ul>\r\n\r\n			<h3><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">ELECTIVE COURSES (Four Courses will be offered from the following elective courses)</span></span></span></h3>\r\n\r\n			<h3>&nbsp;</h3>\r\n\r\n			<ul>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:black\">International Human Resource Management (HRM-EC-601)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:black\">Employment and Labor Laws in Bangladesh (HRM-EC-602) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:black\">Corporate Governance (HRM-EC-603)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:black\">Employment Relation and Compensation Management (HRM-EC-604)&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:black\">Globalization and Management Challenges &nbsp; (HRM-EC-605)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></li>\r\n			</ul>\r\n\r\n			<p style=\"margin-left:48px\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"color:black\">Human Resources Management Information Systems (HRM-EC-606)</span></span></span></p>\r\n\r\n			<p style=\"margin-left:48px\">&nbsp;</p>\r\n\r\n			<p style=\"margin-left:48px\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"color:black\">Research Paper</span></span></span></p>\r\n\r\n			<p style=\"margin-left:48px\"><span style=\"font-size:18px\"><span style=\"background-color:white\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:black\">Term paper (HRM CC 609); or</span></span></li>\r\n			</ul>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:black\">Thesis (HRM CC 901)</span></span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<ul>\r\n</ul>', 1, 2, 2, NULL, '2021-12-04 16:05:30', '2022-05-25 09:25:42'),
(60, 'Academic Regulations GPP', NULL, '<div style=\"overflow-x: scroll;\">\r\n<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<h3 style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:24px\"><strong>GPP</strong></span></span></h3>\r\n\r\n			<table align=\"center\" border=\"1\" cellpadding=\"10\" cellspacing=\"0\" class=\"Table\" style=\"border-collapse:collapse; border:none; margin-left:9px; margin-right:9px; width:80%\">\r\n				<tbody>\r\n					<tr>\r\n						<td colspan=\"3\" style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:599px\">\r\n						<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">1st Year</span></span></span></strong></span></span></p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:360px\">\r\n						<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">2nd Year</span></span></span></strong></span></span></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; width:330px\">\r\n						<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">1st Semester</span></span></span></strong></span></span></p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:124px\">\r\n						<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">2nd Semester</span></span></span></strong></span></span></p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:145px\">\r\n						<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">3rd Semester</span></span></span></strong></span></span></p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n						<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">4th Semester</span></span></span></strong></span></span></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; width:330px\">\r\n						<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">1 non credit course + 3 courses with 3 credit each<br />\r\n						9 credits</span></span></span></span></span></p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:124px\">\r\n						<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">4 courses<br />\r\n						12 credits</span></span></span></span></span></p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:145px\">\r\n						<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">4 courses<br />\r\n						12 credits</span></span></span></span></span></p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n						<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Option 1</span></span></span></strong></span></span></p>\r\n\r\n						<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">1 courses + Thesis (9 credits)</span></span></span></span></span></p>\r\n\r\n						<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Option 2</span></span></span></strong></span></span></p>\r\n\r\n						<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">3 courses 09 credits + Term paper ( 3 credits)</span></span></span></span></span></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td colspan=\"4\" style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; width:959px\">\r\n						<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Total&nbsp; =&nbsp; 18 months 45 credits</span></span></span></strong></span></span></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p><span style=\"color:#000000\"><strong><span style=\"font-size:22px\">COURSE POLICIES</span></strong></span></p>\r\n\r\n						<ul>\r\n							<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Students will have to obtain CGPA of 2.50 for enrolment in the next/ subsequent semester.</span></span></li>\r\n							<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">There is no permission for makeup examinations.</span></span></li>\r\n							<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Regular and timely attendance in the class is compulsory.</span></span></li>\r\n							<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Students are encouraged to contact the Instructor in case of any difficulty relating to course content.</span></span></li>\r\n							<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">A student who wishes to write Thesis must obtain a CGPA of&nbsp;<strong>3.5</strong>&nbsp;in the first three semesters and thesis must be completed within three months after the end of 4th semester</span></span></li>\r\n							<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Any unfair means, such as copying adopted in the examination will be severely dealt with.</span></span></li>\r\n						</ul>\r\n\r\n						<hr />\r\n						<h4 style=\"text-align:justify\">&nbsp;<span style=\"color:#000000\"><span style=\"font-size:22px\"><strong>Course Numbering</strong> <strong>System</strong>&nbsp;</span></span></h4>\r\n\r\n						<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Courses are numbered in two parts: first part with alphabets representing the centre-piece of the programme, and second part refers to the level of the course. Preparatory courses could be numbered at 100 levels, Core Courses at 500 levels and Elective Courses at 600 levels. Dissertation related courses are numbered 700 onward with the Dissertation itself as 799.</span></span></p>\r\n\r\n						<hr />\r\n						<h4 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:22px\"><strong>Performance Evaluation</strong></span></span></h4>\r\n\r\n						<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Student of the MPA programs of CSCD shall be evaluated in the following ways:</span></span></p>\r\n\r\n						<h4 style=\"text-align:justify\"><span style=\"font-size:22px\"><strong>General</strong></span></h4>\r\n\r\n						<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">The student&rsquo;s academic performance in each course will be evaluated on a continuous basis and final results will be in the form of internationally accepted Cumulative Grade Point average (CGPA) system awarded out of a scale of 4.</span></span></p>\r\n\r\n						<h4 style=\"text-align:justify\"><span style=\"font-size:22px\"><strong>Grading&nbsp;</strong></span></h4>\r\n\r\n						<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Letter grades shall be used to assess the performance of a student in a course of which A+, A, A-, B+, B, B-, C+, C and D are considered passing grades, F is the failing grade.</span></span></p>\r\n\r\n						<h4 style=\"text-align:justify\"><a href=\"http://www.bigm.edu.bd/Bigm/Home/MPAprogram?ProgramID=17&amp;SubSiteMenuID=12#collapseThree\"><span style=\"color:#000000\"><span style=\"font-size:22px\"><strong>Semester</strong></span> &nbsp;<span style=\"font-size:22px\"><strong>and</strong></span> <span style=\"font-size:22px\"><strong>Class</strong></span> <span style=\"font-size:22px\"><strong>Schedules</strong></span></span>&nbsp;</a></h4>\r\n\r\n						<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">There will be four regular semesters in each programmes each semester spreading over 15 working weeks. Each credit hour means 10 classes of one and half hour each. Classes will be held on Saturdays, Sundays and Mondays. If necessary classes may be held on other days of the week. A class will usually be of 90 minutes duration. Seminars/workshops/debates will also be arranged at convenient times.</span></span></p>\r\n\r\n						<h4 style=\"text-align:justify\"><a href=\"http://www.bigm.edu.bd/Bigm/Home/MPAprogram?ProgramID=17&amp;SubSiteMenuID=12#collapseFour\">&nbsp;<span style=\"color:#000000\"><span style=\"font-size:22px\"><strong>Teaching</strong></span><strong>&nbsp;</strong><span style=\"font-size:22px\"><strong>Methods</strong></span></span>&nbsp;</a></h4>\r\n\r\n						<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">The programme emphasizes participatory methods of learning including preparation of case studies by students, field visits and interaction with experts and practitioners. Considering the diversity of the courses, this programme provides for a variety of teaching methods, such as lecture, discussion, panel session, debate, seminar, role-playing, case study, workshop, project/group work and research. The faculty while offering a course will carefully select the methods appropriate for it and lesson&rsquo;s objectives. As most students are from active service, emphasis is given to methods that help students learn, engage in critical thinking and apply the knowledge in practice.</span></span></p>\r\n\r\n						<h4 style=\"text-align:justify\"><span style=\"font-size:22px\"><strong><a href=\"http://www.bigm.edu.bd/Bigm/Home/MPAprogram?ProgramID=17&amp;SubSiteMenuID=12#collapseFive\"><span style=\"color:#000000\">Specia</span></a><span style=\"color:#000000\">l&nbsp;</span><a href=\"http://www.bigm.edu.bd/Bigm/Home/MPAprogram?ProgramID=17&amp;SubSiteMenuID=12#collapseFive\"><span style=\"color:#000000\">Lectures</span></a></strong></span></h4>\r\n\r\n						<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Special lectures on the issues of topical interest are organized from time to time in which reputed authorities/professionals are invited to lead the discussions.</span></span></p>\r\n\r\n						<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n						<h4 style=\"text-align:justify\"><a href=\"http://www.bigm.edu.bd/Bigm/Home/MPAprogram?ProgramID=17&amp;SubSiteMenuID=12#collapseSix\">&nbsp;<span style=\"color:#000000\"><span style=\"font-size:22px\"><strong>Academic</strong></span> <span style=\"font-size:22px\"><strong>Standing</strong></span></span>&nbsp;</a></h4>\r\n\r\n						<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Students are expected to maintain set standards in their academic work. They should take the requisite number of courses and maintain satisfactory grades. Students scoring a GPA below 2.5 in their first semester will be asked to withdraw from the program.</span></span></p>\r\n\r\n						<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n						<h4 style=\"text-align:justify\"><span style=\"font-size:22px\"><strong><a href=\"http://www.bigm.edu.bd/Bigm/Home/MPAprogram?ProgramID=17&amp;SubSiteMenuID=12#collapseSeven\"><span style=\"color:#000000\">Assessment</span></a></strong></span></h4>\r\n\r\n						<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">The respective teachers will design the course outline at the beginning of the semester and they will provide a copy of the course outline to each student. They will include the topics to be covered under the course and the valuation/grading policy for his/her course, in line with the approved syllabus. Based on the assessment policy he/she shall continuously evaluate performance of a student and award grades.</span></span></p>\r\n\r\n						<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n						<h4 style=\"text-align:justify\"><span style=\"font-size:22px\"><strong><a href=\"http://www.bigm.edu.bd/Bigm/Home/MPAprogram?ProgramID=17&amp;SubSiteMenuID=12#collapseEight\"><span style=\"color:#000000\">Evaluation</span></a></strong></span></h4>\r\n\r\n						<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">The grade in a course will be based on an overall evaluation of student&rsquo;s performance throughout the semester in assignments, examinations, quizzes, term papers, project work, class participation and class attendance. The students will be evaluated on the basis of the following format.</span></span></p>\r\n\r\n						<table align=\"center\" style=\"width:1000px\">\r\n							<tbody>\r\n								<tr>\r\n									<th><span style=\"color:#000000\"><span style=\"font-size:18px\">Attendance</span></span></th>\r\n									<th><span style=\"color:#000000\"><span style=\"font-size:18px\">Group Work</span></span></th>\r\n									<th><span style=\"color:#000000\"><span style=\"font-size:18px\">Individual Assignment</span></span></th>\r\n									<th><span style=\"color:#000000\"><span style=\"font-size:18px\">Mid Term</span></span></th>\r\n									<th><span style=\"color:#000000\"><span style=\"font-size:18px\">Final Exam</span></span></th>\r\n								</tr>\r\n								<tr>\r\n									<td style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:18px\">10%</span></span></td>\r\n									<td style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:18px\">10%</span></span></td>\r\n									<td style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:18px\">10%</span></span></td>\r\n									<td style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:18px\">20%</span></span></td>\r\n									<td style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:18px\">50%</span></span></td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n\r\n						<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">However, depending on nature of the course minor modifications can be made by the respective course teacher(s), provided it is incorporated in the course outline. Mid-Term Examinations and Final Examinations will be held on pre-announced dates. Numerical scores earned by students in tests, examinations, assignments will be cumulated and turned into letter grades at the end of the semester.</span></span></p>\r\n\r\n						<h4 style=\"text-align:justify\"><span style=\"font-size:22px\"><strong><a href=\"http://www.bigm.edu.bd/Bigm/Home/MPAprogram?ProgramID=17&amp;SubSiteMenuID=12#collapseNine\"><span style=\"color:#000000\">Attendance</span></a></strong></span></h4>\r\n\r\n						<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">A student shall attend at least 75% of the classes held in a course. The course coordinator shall submit class attendance sheets to Principal/Vice Principal once in a week. However, a student may be allowed to appear in the final examination on payment of prescribed non-collegiate fee as may be fixed by the University of Dhaka from time to time for each course, if attendance is less than 75% but higher than 60%. Anybody whose attendance is less than 60% will not be allowed to seat in the final examination and will be deemed to have discontinued the course (s).</span></span></p>\r\n\r\n						<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n						<h4 style=\"text-align:justify\"><a href=\"http://www.bigm.edu.bd/Bigm/Home/MPAprogram?ProgramID=17&amp;SubSiteMenuID=12#collapseThirteen\">&nbsp;&nbsp;<span style=\"color:#000000\"><span style=\"font-size:22px\"><strong>Special</strong></span> <span style=\"font-size:22px\"><strong>Features</strong></span> <span style=\"font-size:22px\"><strong>Of</strong></span> <span style=\"font-size:22px\"><strong>The</strong></span> <span style=\"font-size:22px\"><strong>Programmes</strong></span></span>&nbsp;&nbsp;</a></h4>\r\n\r\n						<ul>\r\n							<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">45 Credits International Standard Masters Degree.</span></span></li>\r\n							<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Customized multidisciplinary courses generally not offered by other academic institutions.</span></span></li>\r\n							<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Modern innovative teaching and research methods.</span></span></li>\r\n							<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Variety of courses and curricula.</span></span></li>\r\n							<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Diverse student groups.</span></span></li>\r\n							<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Renowned faculty with professional knowledge and practical experience.</span></span></li>\r\n							<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Evening classes.</span></span></li>\r\n							<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Subsidized tuition fees</span></span></li>\r\n							<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Limited seats.</span></span></li>\r\n							<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">First of a kind Institute in South Asia</span></span></li>\r\n							<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Only Institute offering Masters in Public Affairs (MPA) Degree in Bangladesh.</span></span></li>\r\n							<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">World Class Certification from University of Dhaka</span></span></li>\r\n							<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Alumni Association.</span></span></li>\r\n						</ul>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<ul>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n<p>&nbsp;</p>', 1, 2, 2, NULL, '2021-12-04 17:47:45', '2022-05-25 09:35:53');
INSERT INTO `menu_posts` (`id`, `title`, `date`, `description`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(61, 'Academic Regulations IER', NULL, '<p>&nbsp;&nbsp;</p>\r\n\r\n<div style=\"overflow-x:scroll;\">\r\n<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<h3 style=\"text-align:center\">&nbsp;<strong><span style=\"font-size:24px\"><span style=\"color:#000000\">IER</span></span></strong></h3>\r\n\r\n			<table align=\"center\" border=\"1\" cellpadding=\"10\" style=\"width:90%\">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<h4><span style=\"color:#000000\"><span style=\"font-size:18px\">1st Year</span></span></h4>\r\n						</td>\r\n						<td>\r\n						<h4 style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:18px\">2nd Year</span></span></h4>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<th scope=\"col\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1st Semester</span></span></th>\r\n						<th scope=\"col\"><span style=\"color:#000000\"><span style=\"font-size:18px\">2nd Semester</span></span></th>\r\n						<th scope=\"col\"><span style=\"color:#000000\"><span style=\"font-size:18px\">3rd Semester</span></span></th>\r\n						<th scope=\"col\"><span style=\"color:#000000\"><span style=\"font-size:18px\">4th Semester</span></span></th>\r\n					</tr>\r\n					<tr>\r\n						<td><span style=\"color:#000000\"><span style=\"font-size:18px\">1 non credit course + 3 courses with 3 credit each<br />\r\n						9 credits</span></span></td>\r\n						<td><span style=\"color:#000000\"><span style=\"font-size:18px\">4 courses<br />\r\n						12 credits</span></span></td>\r\n						<td><span style=\"color:#000000\"><span style=\"font-size:18px\">4 courses<br />\r\n						12 credits</span></span></td>\r\n						<td>\r\n						<p style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Option 1</span></span></p>\r\n\r\n						<p style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1 courses + Thesis (9 credits)</span></span></p>\r\n\r\n						<p style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Option 2</span></span></p>\r\n\r\n						<p style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:18px\">3 courses 09 credits + Term paper ( 3 credits)</span></span></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td><span style=\"color:#000000\"><span style=\"font-size:18px\">Total=18 months 45 credits</span></span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<h3><span style=\"color:#000000\"><strong><span style=\"font-size:22px\">COURSE POLICIES</span></strong></span></h3>\r\n\r\n			<ul>\r\n				<li><span style=\"color:#000000\"><span style=\"font-size:18px\">Students will have to obtain CGPA of 2.50 for enrolment in the next/ subsequent semester.</span></span></li>\r\n				<li><span style=\"color:#000000\"><span style=\"font-size:18px\">There is no permission for makeup examinations.</span></span></li>\r\n				<li><span style=\"color:#000000\"><span style=\"font-size:18px\">Regular and timely attendance in the class is compulsory.</span></span></li>\r\n				<li><span style=\"color:#000000\"><span style=\"font-size:18px\">Students are encouraged to contact the Instructor in case of any difficulty relating to course content.</span></span></li>\r\n				<li><span style=\"color:#000000\"><span style=\"font-size:18px\">A student who wishes to write Thesis must obtain a CGPA of&nbsp;3.5&nbsp;in the first three semesters and thesis must be completed within three months after the end of 4th semester.</span></span></li>\r\n				<li><span style=\"color:#000000\"><span style=\"font-size:18px\">Any unfair means, such as copying adopted in the examination will be severely dealt with.</span></span></li>\r\n			</ul>\r\n\r\n			<hr />\r\n			<h4><span style=\"color:#000000\"><strong><span style=\"font-size:22px\">Course Numbering System</span></strong></span></h4>\r\n\r\n			<p><span style=\"color:#000000\"><span style=\"font-size:18px\">Courses are numbered in two parts: first part with alphabets representing the centre-piece of the programme, and second part refers to the level of the course. Preparatory courses could be numbered at 100 levels, Core Courses at 500 levels and Elective Courses at 600 levels. Dissertation related courses are numbered 700 onward with the Dissertation itself as 799.</span></span></p>\r\n\r\n			<hr />\r\n			<h4><span style=\"color:#000000\"><span style=\"font-size:20px\"><strong>Performance Evaluation</strong></span></span></h4>\r\n\r\n			<p><span style=\"color:#000000\"><span style=\"font-size:18px\">Student of the MPA programs of CSCD shall be evaluated in the following ways:</span></span></p>\r\n\r\n			<h4><span style=\"font-size:20px\"><strong><a href=\"http://www.bigm.edu.bd/Bigm/Home/MPAprogram?ProgramID=18&amp;SubSiteMenuID=17#collapseOne\"><span style=\"color:#000000\">General</span>&nbsp;&nbsp;</a></strong></span></h4>\r\n\r\n			<p><span style=\"color:#000000\"><span style=\"font-size:18px\">The student&rsquo;s academic performance in each course will be evaluated on a continuous basis and final results will be in the form of internationally accepted Cumulative Grade Point average (CGPA) system awarded out of a scale of 4.</span></span></p>\r\n\r\n			<h4><span style=\"font-size:20px\"><strong><a href=\"http://www.bigm.edu.bd/Bigm/Home/MPAprogram?ProgramID=18&amp;SubSiteMenuID=17#collapseTwo\"><span style=\"color:#000000\">Grading</span></a></strong></span></h4>\r\n\r\n			<p><span style=\"color:#000000\"><span style=\"font-size:18px\">Letter grades shall be used to assess the performance of a student in a course of which A+, A, A-, B+, B, B-, C+, C and D are considered passing grades, F is the failing grade.</span></span></p>\r\n\r\n			<h4><span style=\"font-size:20px\"><strong><a href=\"http://www.bigm.edu.bd/Bigm/Home/MPAprogram?ProgramID=18&amp;SubSiteMenuID=17#collapseThree\"><span style=\"color:#000000\">Semester and Class Schedules</span></a></strong></span></h4>\r\n\r\n			<p><span style=\"color:#000000\"><span style=\"font-size:18px\">There will be four regular semesters in each programmes each semester spreading over 15 working weeks. Each credit hour means 10 classes of one and half hour each. Classes will be held on Saturdays, Sundays and Mondays. If necessary classes may be held on other days of the week. A class will usually be of 90 minutes duration. Seminars/workshops/debates will also be arranged at convenient times.</span></span></p>\r\n\r\n			<h4><span style=\"font-size:20px\"><strong><a href=\"http://www.bigm.edu.bd/Bigm/Home/MPAprogram?ProgramID=18&amp;SubSiteMenuID=17#collapseFour\"><span style=\"color:#000000\">Teaching Methods</span></a></strong></span></h4>\r\n\r\n			<p><span style=\"color:#000000\"><span style=\"font-size:18px\">The programme emphasizes participatory methods of learning including preparation of case studies by students, field visits and interaction with experts and practitioners. Considering the diversity of the courses, this programme provides for a variety of teaching methods, such as lecture, discussion, panel session, debate, seminar, role-playing, case study, workshop, project/group work and research. The faculty while offering a course will carefully select the methods appropriate for it and lesson&rsquo;s objectives. As most students are from active service, emphasis is given to methods that help students learn, engage in critical thinking and apply the knowledge in practice.</span></span></p>\r\n\r\n			<h4><strong><span style=\"font-size:20px\"><a href=\"http://www.bigm.edu.bd/Bigm/Home/MPAprogram?ProgramID=18&amp;SubSiteMenuID=17#collapseFive\"><span style=\"color:#000000\">Special Lectures</span></a></span></strong></h4>\r\n\r\n			<p><span style=\"color:#000000\"><span style=\"font-size:18px\">Special lectures on the issues of topical interest are organized from time to time in which reputed authorities/professionals are invited to lead the discussions.</span></span></p>\r\n\r\n			<h4><span style=\"font-size:20px\"><strong><a href=\"http://www.bigm.edu.bd/Bigm/Home/MPAprogram?ProgramID=18&amp;SubSiteMenuID=17#collapseSix\"><span style=\"color:#000000\">Academic Standing</span></a></strong></span></h4>\r\n\r\n			<p><span style=\"color:#000000\"><span style=\"font-size:18px\">Students are expected to maintain set standards in their academic work. They should take the requisite number of courses and maintain satisfactory grades. Students scoring a GPA below 2.5 in their first semester will be asked to withdraw from the program.</span></span></p>\r\n\r\n			<h4><span style=\"font-size:20px\"><strong><a href=\"http://www.bigm.edu.bd/Bigm/Home/MPAprogram?ProgramID=18&amp;SubSiteMenuID=17#collapseSeven\"><span style=\"color:#000000\">Assessment</span></a></strong></span></h4>\r\n\r\n			<p><span style=\"color:#000000\"><span style=\"font-size:18px\">The respective teachers will design the course outline at the beginning of the semester and they will provide a copy of the course outline to each student. They will include the topics to be covered under the course and the valuation/grading policy for his/her course, in line with the approved syllabus. Based on the assessment policy he/she shall continuously evaluate performance of a student and award grades.</span></span></p>\r\n\r\n			<h4><strong><span style=\"font-size:20px\"><a href=\"http://www.bigm.edu.bd/Bigm/Home/MPAprogram?ProgramID=18&amp;SubSiteMenuID=17#collapseEight\"><span style=\"color:#000000\">Evaluation</span></a></span></strong></h4>\r\n\r\n			<p><span style=\"color:#000000\"><span style=\"font-size:18px\">The grade in a course will be based on an overall evaluation of student&rsquo;s performance throughout the semester in assignments, examinations, quizzes, term papers, project work, class participation and class attendance. The students will be evaluated on the basis of the following format.</span></span></p>\r\n\r\n			<table align=\"center\" border=\"1\" cellpadding=\"5\" style=\"width:1000px\">\r\n				<tbody>\r\n					<tr>\r\n						<th><span style=\"color:#000000\"><span style=\"font-size:18px\">Attendance</span></span></th>\r\n						<th><span style=\"color:#000000\"><span style=\"font-size:18px\">Group Work</span></span></th>\r\n						<th><span style=\"color:#000000\"><span style=\"font-size:18px\">Individual Assignment</span></span></th>\r\n						<th><span style=\"color:#000000\"><span style=\"font-size:18px\">Mid Term</span></span></th>\r\n						<th><span style=\"color:#000000\"><span style=\"font-size:18px\">Final Exam</span></span></th>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:18px\">10%</span></span></td>\r\n						<td style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:18px\">10%</span></span></td>\r\n						<td style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:18px\">10%</span></span></td>\r\n						<td style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:18px\">20%</span></span></td>\r\n						<td style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:18px\">50%</span></span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<p><span style=\"color:#000000\"><span style=\"font-size:18px\">However, depending on nature of the course minor modifications can be made by the respective course teacher(s), provided it is incorporated in the course outline. Mid-Term Examinations and Final Examinations will be held on pre-announced dates. Numerical scores earned by students in tests, examinations, assignments will be cumulated and turned into letter grades at the end of the semester.</span></span></p>\r\n\r\n			<h4><span style=\"font-size:20px\"><strong><a href=\"http://www.bigm.edu.bd/Bigm/Home/MPAprogram?ProgramID=18&amp;SubSiteMenuID=17#collapseNine\"><span style=\"color:#000000\">Attendance</span></a></strong></span></h4>\r\n\r\n			<p><span style=\"color:#000000\"><span style=\"font-size:18px\">A student shall attend at least 75% of the classes held in a course. The course coordinator shall submit class attendance sheets to Principal/Vice Principal once in a week. However, a student may be allowed to appear in the final examination on payment of prescribed non-collegiate fee as may be fixed by the University of Dhaka from time to time for each course, if attendance is less than 75% but higher than 60%. Anybody whose attendance is less than 60% will not be allowed to seat in the final examination and will be deemed to have discontinued the course (s).</span></span></p>\r\n\r\n			<h4><span style=\"font-size:20px\"><strong><a href=\"http://www.bigm.edu.bd/Bigm/Home/MPAprogram?ProgramID=18&amp;SubSiteMenuID=17#collapseThirteen\"><span style=\"color:#000000\">Special Features Of The Programmes</span></a></strong></span></h4>\r\n\r\n			<ul>\r\n				<li><span style=\"color:#000000\"><span style=\"font-size:18px\">45 Credits International Standard Masters Degree.</span></span></li>\r\n				<li><span style=\"color:#000000\"><span style=\"font-size:18px\">Customized multidisciplinary courses generally not offered by other academic institutions.</span></span></li>\r\n				<li><span style=\"color:#000000\"><span style=\"font-size:18px\">Modern innovative teaching and research methods.</span></span></li>\r\n				<li><span style=\"color:#000000\"><span style=\"font-size:18px\">Variety of courses and curricula.</span></span></li>\r\n				<li><span style=\"color:#000000\"><span style=\"font-size:18px\">Diverse student groups.</span></span></li>\r\n				<li><span style=\"color:#000000\"><span style=\"font-size:18px\">Renowned faculty with professional knowledge and practical experience.</span></span></li>\r\n				<li><span style=\"color:#000000\"><span style=\"font-size:18px\">Evening classes.</span></span></li>\r\n				<li><span style=\"color:#000000\"><span style=\"font-size:18px\">Subsidized tuition fees</span></span></li>\r\n				<li><span style=\"color:#000000\"><span style=\"font-size:18px\">Limited seats.</span></span></li>\r\n				<li><span style=\"color:#000000\"><span style=\"font-size:18px\">First of a kind Institute in South Asia</span></span></li>\r\n				<li><span style=\"color:#000000\"><span style=\"font-size:18px\">Only Institute offering Masters in Public Affairs (MPA) Degree in Bangladesh.</span></span></li>\r\n				<li><span style=\"color:#000000\"><span style=\"font-size:18px\">World Class Certification from University of Dhaka</span></span></li>\r\n				<li><span style=\"color:#000000\"><span style=\"font-size:18px\">Alumni Association.</span></span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n\r\n<ul>\r\n</ul>', 1, 2, 2, NULL, '2021-12-05 10:52:46', '2022-05-25 09:42:29'),
(62, 'BIGM Contact Us', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:20px\"><strong>Address</strong></span></p>\r\n\r\n			<p><span style=\"font-size:18px\">E-33, Sher-E-Bangla Nagar,<br />\r\n			Agargaon, Dhaka &ndash; 1207<br />\r\n			PABX: 880-2-48116857, 48113589, 48115073<br />\r\n			(Ext: 102, 106, 107, 114),<br />\r\n			Email: info@bigm.edu.bd</span></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><span style=\"font-size:18px\">Google Map Latitude<br />\r\n			23.7737732</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">Google Map Longitude<br />\r\n			90.3720379</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 2, NULL, '2021-12-27 08:17:53', '2022-02-06 23:24:34'),
(63, 'At a Glance about BIGM', NULL, '<p style=\"text-align:center\"><span style=\"font-size:24px\"><strong>Briefly BIGM</strong></span></p>\r\n\r\n<table align=\"center\" border=\"1\" cellpadding=\"10\" cellspacing=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<ul>\r\n				<li><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Century&quot;,serif\">A fast-growing national institute; established in 2006</span></strong></span></span></span></li>\r\n				<li value=\"5\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Century&quot;,serif\">Formerly known as Civil Service College, Dhaka</span></strong></span></span></span></li>\r\n				<li value=\"5\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Century&quot;,serif\">The first Chairman of BIGM was former cabinet secretary the late Mr. M. Mahbubuzzaman</span></strong></span></span></span></li>\r\n				<li value=\"5\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Century&quot;,serif\">Master&rsquo;s Program is affiliated with the University of Dhaka</span></strong></span></span></span></li>\r\n				<li value=\"5\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Century&quot;,serif\">Transformed into Bangladesh Institute of Governance and Management (BIGM)</span></strong></span></span></span></li>\r\n				<li value=\"5\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Century&quot;,serif\">Directed by the Board of Trustees and the Governing body</span></strong></span></span></span></li>\r\n				<li value=\"5\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Century&quot;,serif\">The Board of Trustees has signified 19 honorable members</span></strong></span></span></span></li>\r\n				<li value=\"5\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Century&quot;,serif\">Three (3) incumbent Secretaries of the government are in the Board of Trustees</span></strong></span></span></span></li>\r\n				<li value=\"5\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Century&quot;,serif\">Governing body facilitated by fourteen (14) righteous members</span></strong></span></span></span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:20.0pt\"><span style=\"color:black\">Activities</span></span></strong></span></span></p>\r\n\r\n			<p style=\"text-align:center\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/Screenshot_30(2).png\" style=\"height:560px; max-width:100%; width:658px\" /></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>', 1, 2, 12, NULL, '2022-01-11 10:32:58', '2022-06-13 06:35:08'),
(64, 'The Chairman', NULL, '<p style=\"text-align:center\"><span style=\"font-size:18px\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/Cha-removebg-preview.png\" style=\"max-width: 100%;\" /></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\"><span style=\"color:#000000\"><strong>Mr M.Matiul Islam</strong> is the Chairperson of the Board of Trustees since 10<sup>th</sup> June 2009 and the Chairperson of Governing Body of Bangladesh Institute of Governance and Management (BIGM) since 31<sup>st</sup>&nbsp; December 2014. He was the first Finance Secretary of independent Bangladesh.&nbsp;</span></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 1, 2, 2, NULL, '2022-01-11 10:46:04', '2022-05-22 07:08:47');
INSERT INTO `menu_posts` (`id`, `title`, `date`, `description`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(65, 'Ongoing Research', NULL, '<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<table align=\"center\" border=\"1\" cellpadding=\"10\" cellspacing=\"0\" class=\"MsoTableGrid\" style=\"border-collapse:collapse; border:none; width:90%\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\" style=\"background-color:#d0cece; border-color:black; vertical-align:top; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:20px\"><strong>Sl No.</strong></span></p>\r\n			</th>\r\n			<th scope=\"col\" style=\"background-color:#d0cece; width:360px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:20px\"><strong>Research Title </strong></span></p>\r\n			</th>\r\n			<th scope=\"col\" style=\"background-color:#d0cece; width:360px\"><span style=\"font-size:20px\"><strong>Author</strong></span></th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:21px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">01.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:21px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Informal Sector Employment</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:21px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Krishna Gayen</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">02.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Poverty- Inequality Nexus in Bangladesh: An Empirical Analysis Based on HIES Data</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Krishna Gayen,</span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">A.K.M Tahidul Islam,</span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Tanzila Sultana and</span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Abdur Rahim Khan</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">03.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Impact of Interest Rate on Non-Performing Loans: Test of Credit Rationing Hypothesis using Panel Threshold in Bangladesh</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Faroque Ahmed and </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Jamal Hossain</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:21px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">04.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:21px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Democracy and Growth: South Asian Perspective</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:21px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Md. Monirul Islam and </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Jamal Hossain</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">05.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Inclusive Growth and Social Safety Net in Bangladesh</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Jamal Hossain,</span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Md. Monirul Islam and </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Faroque Ahmed</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:21px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">06.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:21px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Financial Development and Growth nexus of Bangladesh: A Threshold Analysis</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:21px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Sima Rani Dey</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">07.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Estimation of Shadow economy </span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Sima Rani Dey and </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Mohammad Tareque</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">08.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">FDI, economic factors and ICT-induced sustainable development in Bangladesh: Is political rights issue inconsequential?</span></p>\r\n\r\n			<p style=\"text-align:left\">&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Md. Monirul Islam, </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Faroque Ahmad, </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Dr. Md. Mahmudul Islam, </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Dr. Md. Asadul Islam</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">09.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Philips curve in Bangladesh context: A time series analysis </span></p>\r\n\r\n			<p style=\"text-align:left\">&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Tanzila Sultana</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">10.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Remittance paper focusing on economic impact of Wellbeing</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Faroque Ahmed and </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Sima Rani Dey</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">11.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Asymmetric Impact of Category-Wise Overseas Labor Migration on Remittance: Evidence from Bangladesh</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Tanzila Sultana</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">12.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Renewable and non-renewable energy consumption in Bangladesh: The relative influencing profiles of economic factors, urbanization, physical infrastructure and institutional quality</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Md. Monirul Islam</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">13.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Dynamics of Energy Poverty in Asian Lower Middle-income Economies within the Context of Globalization and Institutional Quality</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Mowshumi Sharmin</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">14.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Energy Consumption, Economic Growth and Institutional Quality-driven Environmental Degradation in Bangladesh: Applying Updated DARDL Simulations Approach</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Md. Monirul Islam and</span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Samuel Asumadu-Sarkodie, PhD</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">15.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Quitting of Tobacco Use at University Level: A Cross Sectional Study</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Tahmina Sultana and </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Md. Mazharul Islam&nbsp;</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">16.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Assessment of the Utilization of Gavi-funded Birthing Room Facility at Community Clinics and the Service Recipients&rsquo; Perception: A Cross-Sectional Study- </span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Tahmina Sultana</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">17.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Estimation of Value of Statistical Life (VSL) for Road Safety Improvement in Bangladesh Metropolitan Cities</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Tanzila Sultana, </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Mowshumi Sharmin and </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Sima Rani Dey</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">18.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">A Double-Blind Cluster Randomized Controlled Trial (RCT) to Evaluate the Cigarette Quitting Strategies in Bangladesh: A Study Protocol</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Tahmina Sultana</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">19.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Emphasizing on Curative Care Approach during COVID Pandemic in Bangladesh Health system: A Policy Analysis</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Tahmina Sultana</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">20.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Measuring the Effectiveness of COVID-19 Lockdown Policies for Limiting the Infection Rate Using Regression Discontinuity Framework</span></p>\r\n\r\n			<p style=\"text-align:left\">&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Tahmina Sultana and </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Sima Rani Dey</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">21.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Explaining Neural Network: a Domain Based Approach</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Md. Mazharul Islam, </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Tahmina Sultana and </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Sima Rani Dey</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">22.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Explaining Deep Network towards Personalized Healthcare: A Case of Predicting Hypertension </span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Md. Mazharul Islam</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">23.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">A Study of Generative Adversarials Network (GANs) on Big Dataset</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Faroque Ahmed and </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Rittika Shamsuddin</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">24.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Does political rights issue promote sustainable development in Bangladesh with the presence of macroeconomic determinants and ICT: A DARDL and KRLS machine learning algorithm approach -</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:18px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Monirul Islam, </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Faroque Ahmed, AI</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">25.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Prediction of Risk taking behavior using Machine Learning: Evidence from Gallup data </span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Md. Mazharul Islam, </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Rittika Shamsuddin, </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Mrittika Shamsuddin, </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Tanzila Sultana, </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Faroque Ahmed</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">26.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">The Impact of Financial Development on Poverty and Inequality: A Panel of 163 Countries-</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Sima Rani Dey and </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Tanzila Sultana</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">27.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Impact of Covid-19 on Professional and Personal Life of Working Women in Bangladesh-</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Tahmina Sultana</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">28.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">The Relationship between Emotional Intelligence, Job Performance, and Job Satisfaction: Mediating Effect of Transformational Leadership-</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Munshi Muhammad Abdul Kader Jilani and </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Md. Zohurul Islam</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">29.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Relationship among social dimensions of creativity in case of Bangladeshi adults: A Structural Equation Modelling approach &ndash; FA, MMAKJ, MRI, MAU</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Faroque Ahmed, </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Munshi Muhammad Abdul Kader Jilani and </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">others</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">30.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Envisaging Antecedents of Factors Inﬂuencing Students&rsquo; Intention to Install Zoom Applications: A SEM-Neural Network Approach in Higher Education</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Munshi Muhammad Abdul Kader Jilani and</span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Mohammad ZahedulAlam</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">31.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Examining Career Growth Self-efficacy and Its Relation to Employee Reputation and Workplace Mindfulness</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Munshi Muhammad Abdul Kader Jilani; </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Mohammed Saiful Islam, </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Md. Aftab Uddin</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">32.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">A Machine Learning Algorithms for Predicting Actual Social Distancing of COVID-19 outbreak using Theory of Planned Behavior</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"color:black\">Munshi Muhammad Abdul Kader Jilani, </span></span></span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"color:black\">Faroque Ahmed, </span></span></span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"color:black\">Md. Aftab Uddin</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">33.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">The Impact Assessment on the Policy Analysis Training Course</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Munshi Muhammad Abdul Kader Jilani and </span></p>\r\n\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Mohammad Tareque</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">34.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">An Independent Evaluation of the Bangladesh Bureau of Statistics (BBS)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Krishna Gayen</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">35.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Does policy implementation problem induce policy failure in Bangladesh? A moderated-mediation analysis using SEM</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Md. Monirul Islam</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:61px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">36.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:629px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Time and cost overrun in public transports projects</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:17px; text-align:center; vertical-align:middle; width:268px\">\r\n			<p style=\"text-align:left\"><span style=\"font-size:18px\">Ms. Shirin Sharmin</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>', 1, 2, 12, NULL, '2022-01-11 14:10:38', '2022-06-11 06:59:19');
INSERT INTO `menu_posts` (`id`, `title`, `date`, `description`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(66, 'Published Research', NULL, '<p>&nbsp;</p>\r\n\r\n<div style=\"overflow-x:auto\">\r\n<table align=\"center\" cellpadding=\"10\" cellspacing=\"0\" class=\"MsoTableGrid\" style=\"border-collapse:collapse; border:none; width:100%\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\" style=\"background-color:#d0cece; border-color:black; vertical-align:top; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:20px\"><strong>Sl No.</strong></span></p>\r\n			</th>\r\n			<th scope=\"col\" style=\"background-color:#d0cece; width:360px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:20px\"><strong>Research Title &amp; Author</strong></span></p>\r\n			</th>\r\n			<th scope=\"col\" style=\"background-color:#d0cece; width:360px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:20px\"><strong>Journal Name</strong></span></p>\r\n			</th>\r\n			<th scope=\"col\" style=\"background-color:#d0cece; width:131px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:20px\"><strong>Status</strong></span></p>\r\n			</th>\r\n			<th scope=\"col\" style=\"background-color:#d0cece; width:131px\"><span style=\"font-size:20px\"><strong>Download</strong></span></th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">01.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Endogenous Growth Model of a Labour-abundant and Land-scarce Economy-Tahmina Sultana, Mohammad Moniruzzaman, Mrittika Shamsuddin and Mohammad Tareque</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Journal of Social and Economic Development, Vol. 21, Issue 2, 2019</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">(Springer)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\"><a download=\"newfilename\" href=\"https://www.bigm.edu.bd/public/upload/research_paper/1.pdf\" target=\"_blank\">Download the pdf</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">02.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Aggregate Consumption Expenditure and Economic Growth: Evidence from Bangladesh-Sima Rani Dey and Mohammad Tareque</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Global Journal of Management and Business Research: B Economics and Commerce, Vol. 18, Issue 5, 2018</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">(Global Journals Incorporated)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">03.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Impact of Public and Private Investment on GDP Growth in Bangladesh: Crowding-in or Out?- Md. Monirul Islam, Asif Hossain and Mohammad Tareque</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Global Journal of Human-Social Science: E Economics, Vol.8, Issue 6, 2018</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">(Global Journals Incorporated)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">04.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">External Debt and Growth: Role of Stable Macroeconomic Policies-Sima Rani Dey and Mohammad Tareque</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Journal of Economics Finance and Administrative Science, 2019</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">(Emerald)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\"><a download=\"newfilename\" href=\"https://www.bigm.edu.bd/public/upload/research_paper/4.pdf\" target=\"_blank\">Download the pdf</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">05.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">The Relationship between Income, Consumption and GDP of Asian Countries: A Panel Analysis-Sima Rani Dey</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Managing Global Transitions, Vol. 17, No. 2, 2019</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">(University of Primorska, Slovenia)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">06.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Investigating the Role of Physical Infrastructure, Financial Development and Human Capital on Economic Growth in Bangladesh-Faroque Ahmed, Jamal Hossain and Mohammad Tareque</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Journal of Infrastructure Development</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">(Sage Publication)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">07.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Twin Deficits Hypothesis in Bangladesh: An Empirical Investigation-Sima Rani Dey and Mohammad Tareque</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">International Journal of Emerging Markets (Emerald)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">08.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Relative Impact of Fiscal and Monetary Policies of Bangladesh: A Comprehensive Approach-Md. Monirul Islam and Jamal Hossain</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Completed</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">09.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Exploring Linkage between Human Capital and Economic Growth: A Look into 141 panels of Developing and Developed countries-Tanzila Sultana, Sima Rani Dey and Mohammad Tareque</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Economic Systems</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">(Elsevier)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Accepted</span></p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">10.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">FDI Determinants: Comparison Between Bangladesh and Vietnam-Jamal Hossain and Md. Monirul Islam</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Research in Economics (Elsevier)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Under review</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">11.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Nexus between investment and economic growth within the endogenous growth framework in Bangladesh: Crowding-in or out?-Md. Monirul Islam and Dr. Mohammad Tareque</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">South Asian Journal of Macroeconomics and Public Finance</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">(Sage Publication)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Under Review</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">12.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Impact of Fiscal Policy on Economic Growth in the Presence of a Country Risk Indicator: An Analysis within a Barro-Lucas Growth Framework-Mowshumi Sharmin and Mohammad Tareque</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Journal of Developing Economies</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Under Review</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">13.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Foreign direct investment and domestic investment in Bangladesh: A dynamic ARDL simulations model approach &ndash; Md. Monirul Islam, Dr. Mohammad Tareque, Prof. Dr. Abu Wahid &amp; Dr. Md. Mahmudul Alam</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">The Singapore Economic Review</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Under Review</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">14.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Is Export-led Growth Hypothesis Stable in BCIM Countries? An ARDL Approach-Md. Monirul Islam and Md.&nbsp; Moniruzzaman</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Completed</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">15.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">The Effects of Political Risk, Economic Growth, and Labor productivity on Foreign Direct Investment: A Second-generation Panel Evidence from South Asian Countries- Md. Idris Ali, Professor Bazlur Rahman and Md. Monirul Islam</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Journal of South Asian Development</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">(Sage publication)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Under Review</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">16.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Public sector innovation outcome-driven sustainable development in Bangladesh: Applying the DARDL simulations and KRLS machine learning algorithm approach-Md. Monirul Islam</span></p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Completed</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">17.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Relationship between External Sector and Economic Growth in the Presence of Human Rights Violation: A Case of Bangladesh-Md. Monirul Islam and Jamal Hossain</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Completed</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">18.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Impact of Remittances on Economic and Social Wellbeing of Returnee Migrants: A Household Level Study-Sima Rani Dey, Faroque Ahmed, Mohammed Tareque and Md. Moniruzzaman</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">International Journal of Finance and Economics (Wiley)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Under review</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">19.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">International remittances and household&#39;s expenditure patterns in Bangladesh -Sima Rani Dey and Faroque Ahmed</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">International Journal of Social Economics (Emerald)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Submitted</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">20.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Electricity Consumption and GDP Nexus in Bangladesh: a Time Series Investigation-Sima Rani Dey and Mohammad Tareque</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Journal of Asian Business and Economic Studies, Vol. 27, Issue 1, 2019</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">(Emerald)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\"><a download=\"newfilename\" href=\"https://www.bigm.edu.bd/public/upload/research_paper/20.pdf\" target=\"_blank\">Download the pdf</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">21.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Electricity Consumption and Income Nexus: Evidence from Bangladesh-Sima Rani Dey</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">International Journal of Energy Sector Management. Vol. 13, Issue 4, 2019</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">(Emerald)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">22.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Impact of Foreign Direct Investment on Energy Consumption: Evidence from Bangladesh-Sima Rani Dey and Md. Monirul Islam </span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Eurasia Journal of Business and Economics</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Submitted</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">23.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Econometric Analysis of the Effect of Economic Globalization, Energy Intensity, Urbanization, Industrialization and Growth on CO2 Emissions of Bangladesh-Mowshumi Sharmin and Mohammad Tareque</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Managing Global Transitions, Vol. 16, No.4, 2018</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">(University of Primorska, Slovenia)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">24.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Predicting Air Quality of Dhaka and Sylhet Division-Md. Mazharul Islam, Mowshumi Sharmin and Faroque Ahmed</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Air Quality Atmosphere and Health,2020: 1-9. (Springer)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">25.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Relationship of Renewable and Non-Renewable Energy Utilization with CO2 Emission of Bangladesh by Mowshumi Sharmin</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Energy Economics Letters (Asian Economic and Social Society-AESS)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">26.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Sustainable Growth-Environment Nexus in the Context of Four Developing Asian Economies: A Panel Analysis-Mowshumi Sharmin and Mohammad Tareque</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Managing Global Transitions</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">27.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Economic growth and environmental pollution nexus revisited: Is EKC existed in Bangladesh? &ndash;Md. Monirul Islam, Dr. Md. Mahmudul Alam &amp;&nbsp; Faroque Ahmed</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">International Journal of Environmental Studies</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Under Review</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">28.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Energy consumption&ndash;economic growth nexus within the purview of exogenous and endogenous dynamics: evidence from Bangladesh-Md. Monirul Islam and Md. Saiful Islam</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">OPEC Energy Review (Wiley)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">29.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Nexus between CO2 Emission, Energy Use and Sectoral Output: A Panel Cointegration Analysis of South Asia-Mowshumi Sharmin</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Journal of Energy Sector Management</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">30.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Energy Environment and Growth Nexus:2SLS Estimation-Mowshumi Sharmin, Sima Rani Dey, Faroque Ahmed and Mohammad Tareque</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">OPEC Energy Review (Wiley)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Under review</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">31.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Modelling the asymmetric impact of Urbanization on CO2 Emissions: Empirical Evidence from 137 Income Classified Economies-Sima Rani Dey,&nbsp; Tanzila Sultana and MowshumiSharmin</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Completed</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">32.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Econometric Analysis of the Effect of Economic Globalization, Energy Intensity, Urbanization, Industrialization and Growth on CO2 Emissions of Bangladesh-Mowshumi Sharmin and Mohammad Tareque</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Managing Global Transitions, Vol. 16, No.4, 2018</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">(University of Primorska, Slovenia)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">33.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Sustainable Growth-Environment Nexus in the Context of Four Developing Asian Economies: A Panel Analysis-Mowshumi Sharmin and Mohammad Tareque</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Managing Global Transitions</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">34.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Economic growth and environmental pollution nexus revisited: Is EKC existed in Bangladesh? &ndash;Md. Monirul Islam, Dr. Md. Mahmudul Alam &amp;&nbsp; Faroque Ahmed</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">International Journal of Environmental Studies</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Under Review</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">35.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Energy consumption&ndash;economic growth nexus within the purview of exogenous and endogenous dynamics: evidence from Bangladesh-Md. Monirul Islam and Md. Saiful Islam</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">OPEC Energy Review (Wiley)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">36.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Nexus between CO2 Emission, Energy Use and Sectoral Output: A Panel Cointegration Analysis of South Asia-Mowshumi Sharmin</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Journal of Energy Sector Management</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">37.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Energy Environment and Growth Nexus:2SLS Estimation-Mowshumi Sharmin, Sima Rani Dey, Faroque Ahmed and Mohammad Tareque</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">OPEC Energy Review (Wiley)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Under review</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">38.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Modelling the asymmetric impact of Urbanization on CO2 Emissions: Empirical Evidence from 137 Income Classified Economies-Sima Rani Dey,&nbsp; Tanzila Sultana and MowshumiSharmin</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Completed</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">39.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Measuring Economic, Social and Environmental Wellbeing of Asian Economies-Mowshumi Sharmin, Sima Rani Dey and Dr. Tariqul Islam</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Environmental Science and Pollution Research (Springer)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">40.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Energy Consumption-Economic Growth Nexus in South Asian Countries: Evidence from the Second Generation Panel Estimation Technique- Md. Monirul Islam, Dr. Md. Saiful Islam</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p>&nbsp;</p>\r\n\r\n			<p><span style=\"font-size:18px\">Journal of Public Affairs</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">(Wiley and Sons)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:131px\">\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><span style=\"font-size:18px\">Under Review</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">41.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Impact of Globalization, Foreign Direct Investment and Energy Consumption on CO2 Emissions in Bangladesh: Does Institutional Quality Matter?- Md. Monirul Islam, Dr. Mohammad Kamran Khan, Dr. Mohammad Tareque, Noor Jehan ,Vishal Dagar </span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p>&nbsp;</p>\r\n\r\n			<p><span style=\"font-size:18px\">Environmental Science and Pollution Research (Springer)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:131px\">\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">42.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Renewable and Non-Renewable Energy-Driven Sustainable Development in ASEAN Countries: Does Institutional Quality Matter? -Md. Monirul Islam and external collaborator</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:131px\">\r\n			<p>&nbsp;</p>\r\n\r\n			<p><span style=\"font-size:18px\">Completed</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">43.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Promoting Sustainable Development through Realizing the Demographic Dividend Opportunity in the Digital Economy: A Case Study of Nepal-Tapan Sarker, Shristi Tandukar and Sima Rani Dey</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Asian Development Bank Institute</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">(ADBI)</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">March, 2021</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\"><a download=\"newfilename\" href=\"https://www.bigm.edu.bd/public/upload/research_paper/43.pdf\" target=\"_blank\">Download the pdf</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">44.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Globalization and Politico-administrative factor-driven energy-growth nexus:A Case of South Asian Economies- Md. Monirul Islam, Dr. Md. Saiful Islam</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Journal of Public Affairs (Wiley and Sons)</span></p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">45.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Bangladesh National Adolescent Health Strategy, A Step to Achieve Sustainable Development Goals by 2030: A Policy Analysis and Legal Basis-Tahmina Sultana and Mohammad Tareque</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">International Journal of Legal Studies, Vol. 5, Issue 1, 2019</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\"><a download=\"newfilename\" href=\"https://www.bigm.edu.bd/public/upload/research_paper/45.pdf\" target=\"_blank\">Download the pdf</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">46.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">An Assessment of Anemia Status of Child-Mother Pairs in Bangladesh-Jahidur Rahman Khan, Md. Mazharul Islam,Raaj Kishore Biswas and Amena Sultana </span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Children and Youth Services Review 112:104851, 2020</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">(Elsevier)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">47.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Healthcare Capacity, Health Expenditure and Civil Society as Predictors of COVID-19 Case Fatalities: A Global Analysis-Jahidur Rahman Khan, Nabil Awan, Md.&nbsp; Mazharul Islam and Olav Muurlink</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Frontiers in Public Health 8:347, 2020</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">(Frontiers Media S.A.)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">48.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Policy Options of Increasing utilization of Community Clinics: A Study in Rural Bangladesh</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">International Journal of New Economics and Social Science (IJONESS)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\"><a download=\"newfilename\" href=\"https://www.bigm.edu.bd/public/upload/research_paper/48.pdf\" target=\"_blank\">Download the pdf</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">49.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Modeling Risk of Infectious Disease: A Case of Covid-19 Outbreak in Four Countries-Md. Mazharul Islam, Md. Monirul Islam, Md. Mahmudul Alam, Jamal Hossain and Faroque Ahmed</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Travel Medicine and Infectious Disease (Elsevier)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Under review</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">50.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Associations of Socio-Demographic and Environmental Factors with the Early Development of Young Children in Bangladesh -school Aged Children in Bangladesh-Md. Mazharul Islam, Jahidur Rahman Khan, Antara Kabir, Mohammad Zillur Rahman Khan and Md. Monirul Islam</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">International Journal of Early Childhood</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">51.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Battling the COVID-19 Pandemic: Is Bangladesh Prepared?-Md Hasinur Rahman Khan, Tamanna Hawlader and Md. Mazharul Islam</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Disaster Medicine and Public Health Preparedness</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Under review</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">52.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">An Inquiry into the Achievements in Health Outcomes of Bangladesh: Role of Health Expenditure, Income, Governance and Female Education-Tahmina Sultana, Faroque Ahmed, Mohammad Tareque</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">International Journal of Human Rights in Healthcare</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">(Emerald)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">53.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Impacts of COVID-19 Pandemic on National Security Issues: Indonesia as a Case Study- Md. Mahmudul Alam, AgungMasyadFawzi, Md. Monirul Islam &amp; Jamaliah Said</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Environment Development and Sustainability (Springer)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">54.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Creative Social Media Use for COVID-19 Prevention: A Structural Equation Modeling Approach - Md. Monirul Islam, Md. Mazharul Islam and Faroque Ahmed, Afrin Sadia Romana</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Social Network Analysis and Mining, 11(1), 1-14.</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">10 April, 2021</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">55.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Preventing Transmission of Diarrheal Diseases: Assessing the Factors of Effective Handwashing Facility (EHF) in Bangladesh- (SH, MI, ALK, MI)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Submitted</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">56.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Knowledge, Attitudes and Practice (KAP) Study for Reducing Invalid Doses of Immunization Schedule in Urban Area: A Study in Dhaka North City Corporation-Tahmina Sultana, Md. Moniruzzaman and Sima Rani Dey</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Micro Research</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Completed</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">57.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">A negative association between prevalence of diabetes and urban residential area greenness detected in nationwide assessment of urban Bangladesh- Jahidur Rahman Khan, Amena Sultana, Md. Mazharul Islam and Raaj Kishore Biswas </span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Scientific Reports</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">(Nature Publishing Group)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">58.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Strengthening the Trialability for the Intention to Use of mHealth Apps Amidst Pandemic: A Cross-sectional Study-Md. Aftab Uddin, Munshi Muhammad Abdul Kader Jilani, Mouri Dey, Md. Moniruzzaman, Edris Alam</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">JMIR mHealth and uHealth</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Under review</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">59.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">The Impact of COVID-19 on Family Relationships During the Lockdown-Sima Rani Dey</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">International Social Science Journal (Wiley)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Accepted</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">60.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Governance failure or policy failure in the state? A discourse-Dr. Mohammad Tareque and Md. Monirul Islam</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Completed</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">61.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Governance Paradigm of Bangladesh: A Review- Dr. Mohammad Tareque and Mowshumi Sharmin</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Completed</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">62.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">The Role of Think Tanks in Social Policy-Making: The Bangladesh Perspective-Md. Monirul Islam </span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Journal of International Business and Management Vol. 1, Issue 2, 2018</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">63.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Rise and Trend of Think Tanks: A Policy Relevant Perspective-Md. Monirul Islam </span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Public Affairs and Governance, Vol. 6, Issue 2, 2018</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">64.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">From 7th March to Independence Movement by Harun-ur-Rashid (Book Review)-Md. Monirul Islam &amp; Md. Rafiqul Islam</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Strategic Analysis (Tailor and Francis)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Submitted</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">65.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">A Comparative Study of Credit Card Fraud Detection Using the Combination of Machine Learning Techniques with Data Imbalance Solution - (FA, RS). -Faroque Ahmed and Rittika Shamsuddin</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">2021 2nd International Conference on Computing and Data Science (CDS)&nbsp;(pp. 112-118). IEEE.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">66.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Machine learning to promote health management through lifestyle changes for hypertension patients -Md. Mazharul Islam and Rittika Shamsuddin</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Array</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">67.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Volatility in the Stock Market of Bangladesh - Faroque Ahmed, Md. Monirul Islam and&nbsp; </span></p>\r\n\r\n			<p><span style=\"font-size:18px\">Md. Mazharul Islam</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">European Journal of Scientific Research (EJSR), Volume 156, Issue No 3, May, 2020</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">68.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Exploring the Behavior of App Developers and the Future of Digital Bangladesh-<a href=\"https://www.researchgate.net/profile/Altaf_Hossain3\">Altaf Hossain</a>, <a href=\"https://www.researchgate.net/profile/Md_Abdullah_Hamja\">Md Abdullah Amir Hamja</a>, <a href=\"https://www.researchgate.net/profile/Faroque_Ahmed\">Faroque Ahmed</a> and <a href=\"https://www.researchgate.net/profile/Kayum_Arafat\">Kayum Mohammad Arafat</a></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">European Journal of Social Sciences (EJSS) 59 (3), 255-264, 2020</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">69.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Impact of covid-19 on the trade of shares in DSE: An interrupted time series analysis- (AMK, TZS, SBA)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Submitted</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">70.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Assessing Workplace Culture Induced Incivility against Women: Evidence from Bangladesh Civil Service-Md. Monirul Islam, Md. Mazharul Islam, Fataraz Jahan and Nuzhat Bulbul</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Journal of Gender Studies</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">(Taylor and Francis)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Under Review</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">71.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Impact of Access to Land on Women&rsquo;s Empowerment: An Empirical Evidence from Rural Bangladesh-Tahmina Sultana, Kazi Tanvir Mahmud, Md Moniruzzaman and Mohammad Tareque</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">SAGE Open</span></p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Under Review</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">72.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Linking Transformational Leadership with Employees&rsquo; Engagement in the Creative Process- Mohammad Tahlil Azim, Luo Fan, Md Aftab Uddin, Munshi Muhammad Abdul Kader Jilani and Sumayya Begum</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Management Research Review,</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">Vol: 42, No:7, 2019</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">(Emerald)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">73.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Corporate Environmental Strategy and Voluntary Environmental Behavior-Mediating Effect of Psychological Green Climate-Anupam Kumar Das, ShetuRanjan Biswas,Munshi Muhammad Abdul Kader Jilani and Md. Aftab Uddin</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Sustainability,</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">Vol: 11, Nos:11, 2019</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">(MDPI)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">74.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">The Influence of Knowledge Sharing on Sustainable Performance: A Moderated Mediation Study-Munshi Muhammad Abdul Kader Jilani, Luo Fan, Mohammad Tazul Islam and Md Aftab Uddin.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Sustainability,</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">Vol: 12, No:3, 2020</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">(MDPI)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">75.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Fighting Ahead: Adoption of Social Distancing in COVID-19 Outbreak through the Lens of the Theory of Planned Behavior- Anupam Kumar Das, Munshi Muhammad Abdul Kader Jilani, Mohammad Shahab Uddin, Md Aftab Uddin and Ajoy Kumar Ghosh</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Journal of Human Behavior in the Social Environment</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">(Taylor and Francis)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">76.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Extending the Theory of Planned Behavior to Envisage Social Distancing Behavior in Containing COVID-19 Outbreak-Munshi Muhammad Abdul Kader Jilani, Anupam Kumar Das, Mohammad Shahab Uddin and Md Aftab Uddin</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Informatics for Health and Social Care</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Under Review</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">77.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Discovering Tourist Preference for discovering destination spots: A Pattern Mining based Approach - Md. Rafiqul Islam, Munshi Muhammad Abdul Kader Jilani, Shah Jahan Miah, SanjitaAkter, Anwar ul Haq</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p><span style=\"font-size:18px\">Asia Pacific Journal of Tourism Research (Taylor and Francis)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Published</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">78.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Testing the Relationship between Intention and Actual &lsquo;Social Distancing&rsquo; Behavior to Reduce the Spread of COVID-19: The Theory of Planned Behavior Approach-( <a name=\"_Hlk62897837\">Munshi Muhammad Abdul Kader Jilani, Faroque Ahmed, Mohammed Saiful Islam, Moslehuddin Chowdhury Khaled)</a></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:131px\">\r\n			<p><span style=\"font-size:18px\">Completed</span></p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">79.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">How do social media literacy, psychological capital, and work engagement influence the employees&rsquo; morale in Event and Tourism Industry?-(Fatema Johara, Munshi Muhammad Abdul Kader Jilani, and Md. Aftab Uddin)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:360px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">\r\n			<p><span style=\"font-size:18px\">Abstract accepted</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">for Book Chapter (Springer publisher)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:131px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; width:56px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\">80.</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p><span style=\"font-size:18px\">Does Workplace Fun Influence Employee Deep Acting? A Moderated Mediation Model in the Event Industry-(Md. Aftab Uddin, Munshi Muhammad Abdul Kader Jilani, and, Fatema Johara)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:360px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:131px\">\r\n			<p><span style=\"font-size:18px\">Abstract accepted</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">for Book Chapter (Routledge publisher)</span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:131px\">&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>', 1, 2, 12, NULL, '2022-01-11 15:06:10', '2022-08-03 03:09:46');
INSERT INTO `menu_posts` (`id`, `title`, `date`, `description`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(67, 'SDGs Initiatives', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:1500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:18px\">Bangladesh Institute of Governance and Management (BIGM) is a specialized post-graduate institution established in the year 2006 with the objective of creating a center of excellence in advanced studies, research and training on public policy and management. A culture of research is ingrained within BIGM&rsquo;s academic and organizational fabric which got momentum since August, 2017. The faculty as well as the core members of the research cell along with the students and trainees are constantly engaged in carrying out studies and research on different national priority areas. </span></p>\r\n\r\n			<p><span style=\"font-size:18px\">The researchers of BIGM have already presented their papers in various international foras, seminars and workshops. Since 2019, BIGM researchers have been conducting primary research on issues like rural women&rsquo;s empowerment, impact of remittance on returnee migrants&rsquo; wellbeing and glass ceiling faced by women in Civil Service of Bangladesh. This three primary research have already been completed and waiting for publication in the internationally reputed journals.</span></p>\r\n\r\n			<p><span style=\"font-size:18px\"><span style=\"color:black\">BIGM has undertaken rigorous policy research on macro and micro economic issues to provide policy inputs for achieving the country&rsquo;s SDGs by 2030 and to become a developed country by 2041. The Institute is expanding its outreach to collaborate and to share its expertise, talents and resources with different academies, institutes, universities, research centers and think tanks working within the country and abroad. Thus, BIGM is working on different fronts with multipronged strategies to elevate it as a specialized Institute of International standard.</span></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 2, NULL, '2022-01-12 12:18:44', '2022-02-06 23:59:55'),
(68, 'Research in BIGM', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:1500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\">The research portfolio of BIGM is multi-dimensional and multi-disciplinary in nature. Growth, Investment, Human capital, External Sector (Remittance), Energy and Environment, Health and Governance, Finance, Gender Issue, Think Tank, Machine Learning, Human Resource and Organizational Development and many of the contemporary burning issues come up as the major topics of research undertaken by BIGM.</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 2, NULL, '2022-01-12 12:20:16', '2022-02-07 00:00:23'),
(69, 'Research Priority', NULL, '<p style=\"text-align:center\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/How-Andy-is-using-OptimalSort-to-prioritize-our-product-improvements.png\" style=\"height:188px; width:300px\" /></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">BIGM envisions carrying out multi-dimensional and multi-disciplinary research.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Currently, the researchers of BIGM give focus on six major topics based on their individual research interest and expertise. Several publications and research projects are being accomplished on the following priority areas:</span></span></p>\r\n\r\n<ol>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Governance and Public Policy, Political Ecology and Economy</span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Various Aspects of Macroeconomics including Labor Economy and Income Inequality in Informal Sector</span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Health Systems and Policy Research</span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Energy, Environment, Environmental Security &amp; Climate Change</span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Use of Machine learning methods on Big datasets</span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Human Resource Management and Development</span></span></li>\r\n</ol>', 1, 2, 12, NULL, '2022-01-12 12:21:20', '2022-08-20 08:31:35'),
(70, 'Researchers Profile', NULL, '<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"4\" cellspacing=\"1\" style=\"width:1500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/Tareque.jpg\" style=\"height:152px; width:145px\" /></span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\">A small nine members research team is doing research under the able guidance of <strong>Dr. Mohammad Tareque</strong>, Director, BIGM. He is the former Finance Secretary of the Government of Bangladesh. He also served as an Alternate Executive Director, World Bank. Dr. Tareque is the most prolific and enthusiastic researcher besides his long flamboyant bureaucratic career. His passion on research always reflected in his working areas. Under his dynamic leadership and visionary thinking, BIGM is contributing to the nation with its dynamic excellence, research and training potentials.&nbsp;</span></span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"color:#1d2228\">Email: mohammad.tareque@bigm.edu.bd</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/Krisna.jpg\" style=\"height:152px; width:145px\" /></span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:18px\"><strong><span style=\"background-color:white\"><span style=\"color:#1d2228\">Dr. Krishna Gayen</span></span></strong><span style=\"background-color:white\"><span style=\"color:#1d2228\"> is Senior Research Fellow and the Chief of Research Wing of Bangladesh Institute of Governance and Management (BIGM). She obtained her Bachelors and Masters in Statistics from&nbsp;<a name=\"m_2407814431055435949__Hlk59532398\">Jahangir Nagar University in Bangladesh&nbsp;</a>and did her PhD from Napier University in the UK. She joined the Bangladesh Civil Service in 1989 and worked in the Rural and Co-operatives Division, Ministry of Agriculture, Planning Commission, Economic Relations Division, Finance Division, Financial Institutions Division, and the Information and Communication Technology Division of the Government in different capacities. As Additional Secretary to the Government, she served as the Director General of the Bangladesh Bureau of Statistics (BBS) from July 2018 to September 2019. Her research interests include official statistics, poverty, unemployment, and inequality.</span></span></span></td>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"color:#1d2228\">Email:</span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><a href=\"mailto:krishna.gayen@bigm.edu.bd\" style=\"color:#0563c1; text-decoration:underline\"><span style=\"background-color:white\">krishna.gayen@bigm.edu.bd</span></a></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/Jilani.jpg\" style=\"height:152px; width:145px\" /></span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>Munshi Muhammad Abdul Kader Jilani, PhD</strong>, has been teaching at the Bangladesh Institute of Governance and Management (BIGM) as an Assistant Professor. He received his PhD in Human Resource Management from the Wuhan University of Technology in China. He also completed an MBA from IISWBM, University of Calcutta, India, on Human Resource Management. Moreover, Dr. Jilani also graduated from the University of Chittagong in Bangladesh with a BBA and an MBA in International Management. Psychological capital, knowledge management, employee resilience, destination management, and organizational behaviour are all research topics that he is passionate about. He has published numerous articles in peer-reviewed journals and conference proceedings, including the Journal of Human Behavior in the Social Environment, the Asia Pacific Journal of Tourism Research, Sustainability, Management Research Review Journal, and the Journal of Innovation and Sustainability.&nbsp;</span></td>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"color:#1d2228\">Email:</span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><a href=\"mailto:mmakjilani@bigm.edu.bd\">mmakjilani@bigm.edu.bd</a></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/Tahmina.jpg\" style=\"height:152px; width:145px\" /></span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>Ms. Tahmina Sultana</strong> is academically trained in Sociology and Population Sciences from Shahjalal University of Science and Technology and University of Dhaka. Currently she is working at BIGM as Research Fellow to lead and coordinate all research activities and disseminate the research findings outside BIGM. During her 12 years long career, she had been engaged in various health related projects focusing on maternal and neo-natal health, child and adolescent health, HIV/ AIDS and health systems of Bangladesh in various international organizations such as icddr,b, Population Council, Bangladesh and Action Aid. She has published several scientific papers, policy briefs, training manuals, Op-Ed in different peer reviewed international journals, national dailies based on research findings. Her research interests are health systems and policy research with the focus on governance issues.</span></td>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"color:#1d2228\">Email:</span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\">tahmina.sultana@bigm.edu.bd</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/Sima.jpg\" style=\"height:152px; width:145px\" /></span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>Ms. Sima Rani Dey</strong> is currently working as an Assistant Professor at Bangladesh Institute of Governance and Management (BIGM) located in Dhaka. She did her graduation and post-graduation in Statistics from Jahangirnagar University. She did another masters in macroeconomic policy from National Graduate Institute for Policy Studies (GRIPS), Japan. Her research interests cover macroeconomic issues. Her previous researches focused on aggregate consumption expenditure, external debt, electricity consumption as well as carbon emissions. She has special knack to work on trade and poverty and its impact on economic growth of Bangladesh. </span></td>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"color:#1d2228\">Email:</span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\">sima.rani@bigm.edu.bd</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/Monir.jpg\" style=\"height:152px; width:151px\" /></span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>Md. Monirul Islam</strong> has been serving as an <a name=\"_Hlk42546518\">Assistant Professor (Governance and Public Policy</a>) at Bangladesh Institute of Governance and Management (BIGM) affiliated with University of Dhaka, Bangladesh. He completed his graduation and Postgraduation in Political Science at the University of Dhaka, Bangladesh. He also completed a Masters of Philosophy (M.Phil) from the same university on governance studies. His area of research is governance studies, environmental economics, political economy and political ecology of Bangladesh. To date, 10 research articles have been published in peer-reviewed journals at home and abroad. Furthermore, he has presented 5 conference papers at international conferences</span></td>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"color:#1d2228\">Email:</span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><a href=\"mailto:monir.islam@bigm.edu.bd\">monir.islam@bigm.edu.bd</a></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/Mowsumi.jpg\" style=\"height:169px; width:151px\" /></span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>Mowshumi Sharmin</strong> is Assistant Professor at BIGM. <span style=\"color:black\">Her field of research interest includes </span>Governance, Public Policy,<span style=\"color:black\"> Political Economy</span>, Sustainable Resource Management, Environment and Climate Change. She has obtained her Master of Public Affairs (Specialization in Governance and Public Policy) from University of Dhaka. She has published articles in several peer reviewed international journals and many of them have been incorporated in top-tier peer reviewed conference proceedings.<span style=\"color:black\"> She would like to see herself as a professional who is contributing in social policy and political economy, environment and governance related public policy areas.</span></span></td>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"color:#1d2228\">Email:</span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><a href=\"mailto:mowshumi.sharmin@bigm.edu.bd\" style=\"color:#0563c1; text-decoration:underline\">mowshumi.sharmin@bigm.edu.bd</a></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/Sirin.jpg\" style=\"height:169px; width:151px\" /></span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>Shirin Sharmin</strong> is currently working as an Assistant Professor at Bangladesh Institute of Governance and Management (BIGM). Prior to joining BIGM, she has worked for the leading Investment Management Company as Vice-President &amp; Head of Research in Bangladesh for last ten years. A graduate civil engineer from BUET, Shirin completed her MBA in Finance from IBA, University of Dhaka. She also received an MBA in Marketing from Faculty of Business Studies, University of Dhaka and a Master of Economics degree from Dhaka School of Economics, University of Dhaka. Her research interest covers capital market, investments and macro-economic issues</span></td>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"color:#1d2228\">Email:</span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\">shirin.sharmin@bigm.edu.bd&nbsp;</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/Fataraz.jpg\" style=\"height:169px; width:151px\" /></span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>Fataraz Zahan</strong> completed her Masters in Social Science (M.S.S) and Bachelor of Social Science (B.S.S) from University of Dhaka, Department of Public Administration. After that she completed her second Masters in Public Policy (MPP) from National Graduate Institute for Policy Studies (GRIPS), Tokyo, Japan. Currently she is working as a Research Associate at BIGM and before that she worked as an Associate Faculty Member at BRAC training division. She was also awarded scholarships from Dhaka University for her good academic results. At BIGM she is the coordinator of MPA programs. Her research interest is on public policy related governance issues and she has worked as a coauthor on a compiled and edited book named Handbook on policy Analysis</span></td>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"color:#1d2228\">Email:</span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><a href=\"mailto:fataraz.zahan@bigm.edu.bd\" style=\"color:#0563c1; text-decoration:underline\">fataraz.zahan@bigm.edu.bd</a></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/Nuzhat.jpg\" style=\"height:169px; width:151px\" /></span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>Nuzhat Bulbul</strong> is Research Associate at BIGM. She completed her Masters in Social Science (M.S.S) and Bachelor of Social Science (B.S.S) from University of Dhaka, Department of Public Administration. Her research interest is on public policy related governance issues and she has worked as a coauthor on a compiled and edited book named Handbook on policy Analysis. Currently she is doing her second Masters in Public Policy (MPP) at National Graduate Institute for Policy Studies (GRIPS), Tokyo, Japan.</span></td>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"color:#1d2228\">Email:</span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><a href=\"mailto:nuzhat.bulbul@bigm.edu.bd\" style=\"color:#0563c1; text-decoration:underline\">nuzhat.bulbul@bigm.edu.bd</a></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/Tanzila.jpg\" style=\"height:169px; width:151px\" /></span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:18px\">As a research enthusiast from the beginning of her student life, <strong>Tanzila Sultana</strong> did her bachelors and masters in economics from Jahangirnagar University and obtained her knowledge and experiences on various steps of research like survey, survey supervision, data collection, analyzing and report writing through working in different reputable research organizations. She worked under direct supervision of many prominent researchers and economists of Bangladesh such as Dr. Mohammad Tareque, Dr. Debapriya Bhattacharya, &amp; Dr. Minhaj Mahmud. Her primary field of research interest is Behavioral and Experimental Economics and secondary interest lie in Labor Economics and Education.</span></td>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"color:#1d2228\">Email:</span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\">tanzila.sultana@bigm.edu.bd</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/Faruk.jpg\" style=\"height:169px; width:151px\" /></span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>Mr. Faroque Ahmed</strong> has completed his graduation &amp; post-graduation in Statistics from the Islamic University, Kushtia. During his M.Sc. he got certification on &ldquo;BIG DATA&rdquo; analytics by Leveraging ICT for Growth, Employment and Governance Project of Bangladesh Computer Council, ICT Division, People&rsquo;s Republic of Bangladesh. He&rsquo;d started his career in the Banking sector but at present working as a Research Associate at BIGM. During the period of 2020 he has published four scientific research articles on different peer reviewed international journals. Recently one of his articles on machine learning has been accepted in the conference of machine learning &amp; data science of the Stanford University, USA. </span></td>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"color:#1d2228\">Email:</span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\">faroque.ahmed@bigm.edu.bd</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/Mazhar.jpg\" style=\"height:169px; width:151px\" /></span></td>\r\n			<td style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>Mr. Md. Mazharul Islam</strong> is a Research Associate (on study leave) at BIGM. He completed his Master of Science in Applied Statistics from University of Dhaka. Before joining at BIGM, Mr. Islam worked as Data Scientist at Insight in Technology, Statistician at National Institute of Mental Health and Research Assistant at icddr,b. He worked in different Govt. and NGO funded projects including BRAC and Asian Development Bank. His major areas of research include machine learning, biostatistics and public health. He has published several research articles in international peer-reviewed journals and contributed software packages in R statistical software. Currently he is the PhD student in Statistics and Data Science program of University of Nevada, Reno, USA. </span></td>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"color:#1d2228\">Email:</span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\">mazhar.islam@bigm.edu.bd</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', 1, 2, 2, NULL, '2022-01-12 12:56:33', '2022-02-07 00:10:37'),
(71, 'Funded Research', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"0\" style=\"width:1500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong style=\"font-size:18px\">Three primary researches have been conducted by the BIGM researcher with BIGM own research fund.</strong></p>\r\n\r\n			<ol>\r\n				<li><span style=\"font-size:18px\">Impact of Access to Land on the Empowerment and Livelihood of Rural Women: A Micro Level Study in Bangladesh </span></li>\r\n				<li><span style=\"font-size:18px\">Impact of Remittances on Economic and Social Wellbeing of Returnee Migrants: A Household Level Study</span></li>\r\n				<li><span style=\"font-size:18px\">Glass Ceiling Faced by Women at Workplace: Bangladesh Public Sector Perspective</span></li>\r\n			</ol>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<ol>\r\n</ol>', 1, 2, 2, NULL, '2022-01-12 12:57:17', '2022-02-07 00:11:23'),
(72, 'Research Projects', NULL, '<table align=\"center\" cellspacing=\"0\" class=\"MsoTableGrid\" style=\"border-collapse:collapse; border:none; width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:84px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Serial No.</span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:228px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Project Name</span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:156px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Funding Agency</span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:156px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Duration</span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:84px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">01.</span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:228px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Training need assessment to support the future challenges of the senior civil service officials</span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:156px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Ministry of Public Administration</span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:156px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">FY 2022-2023</span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:84px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">02.</span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:228px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">State of Evidence Based Policy Making in Bangladesh Public Service: Three Case Studies</span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:156px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Ministry of Public Administration</span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:156px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">FY 2022-2023</span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:84px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">03.</span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:228px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Feasibility Study of&nbsp;</span></span><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Integrated Reforms Management Project (IRMP)</span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:156px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Cabinet Division</span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:156px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">July 2022-November 2022</span></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 12, NULL, '2022-01-12 12:58:05', '2022-08-10 03:14:09'),
(73, 'Strategic collaboration Overview', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"0\" style=\"max-width: 100%;\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"margin-left:48px; text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#27ae60\"><strong>As a leading knowledge</strong></span> hub of Bangladesh, BIGM always values the importance of networking, partnership and collaboration for creating new knowledge and generate ideas. Through our networking and partnership, we also like to scale up dissemination of new knowledge and very enthusiastic to share our expertise in different knowledge intensive projects. </span></p>\r\n\r\n			<p style=\"margin-left:48px; text-align:justify\"><span style=\"font-size:18px\">Networking and collaboration also help BIGM in availing the increased access to resource, specialty and above all enrich the institutional capacity to step at higher level.&nbsp; Considering its importance, the `Deed of Trust&rsquo; of BIGM also has set `developing partnership with National and International bodies, Institutions and Organizations` as a core objective of the Institute. Following the direction of the `deed of trust`, BIGM wishes to foster partnership with different renowned Institutes, Universities, Training Institutes and Research Organizations who </span></p>\r\n\r\n			<p style=\"margin-left:40px; text-align:justify\"><span style=\"font-size:18px\"><strong>Priorities in our network</strong></span></p>\r\n\r\n			<p style=\"margin-left:48px; text-align:justify\"><span style=\"font-size:18px\">The following themes might be considered as objectives of BIGM during networking and collaboration:</span></p>\r\n\r\n			<ol style=\"list-style-type:lower-alpha; margin-left:80px\">\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">To widen the access to good quality academic and research resource and references.</span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">To accomplish the academic, research and training projects of larger scope.</span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">To secure assistance in arranging conference, seminar and other large-scale events.</span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">To be a partner of reputed regional and global similar institutes.</span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">To facilitate knowledge-intensive study tour and exposure visits.</span></li>\r\n			</ol>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<ol style=\"list-style-type:lower-alpha; margin-left:80px\">\r\n</ol>', 1, 2, 2, NULL, '2022-01-30 09:34:43', '2022-05-23 12:15:29'),
(74, 'Ongoing collaboration efforts', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"0\" style=\"max-width: 100%;\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:22px\"><strong>National: </strong></span></p>\r\n\r\n			<p style=\"margin-left:40px; text-align:justify\"><span style=\"font-size:18px\"><strong>1. Skills for Employment Investment programme (SEIP):</strong> BIGM is collaborating with `Skills for employment investment programme (SEIP) of Ministry of Finance in implementation of a training programme on Policy Analysis. So far 14 th batches of this training course have completed their training programme successfully.</span></p>\r\n\r\n			<p style=\"margin-left:40px; text-align:justify\"><span style=\"font-size:18px\"><strong>2. Central Procurement Technical Unit (CPTU):</strong> BIGM is closely working with CPTU in arranging `Specialized Procurement Training` in campus. </span></p>\r\n\r\n			<p style=\"margin-left:40px; text-align:justify\">&nbsp;</p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:22px\"><strong>International:</strong></span></p>\r\n\r\n			<p style=\"margin-left:40px; text-align:justify\"><span style=\"font-size:18px\">&nbsp;<strong>Japan International Cooperation Agency (JICA):</strong> JICA: Japan International Cooperation Agency and BIGM are actively engage to increase infrastructure facility in campus.</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 2, NULL, '2022-01-30 09:35:59', '2022-05-23 12:17:16'),
(75, 'Contact for networking', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"0\" style=\"max-width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:18px\">BIGM welcome initiatives of networking and collaboration with different national and international knowledge-led, reputed and esteemed institutions, think-tanks, research groups and epistemological bodies. Institutes, engaged in research, academic activities and training in public policy, economics, governance studies or in the related other areas, may sent their proposal for networking and collaboration directly to BIGM. The proposal should be sent to: <a href=\"mailto:director@bigm.edu.bd\" style=\"color:#0563c1; text-decoration:underline\">director@bigm.edu.bd</a>.</span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 2, NULL, '2022-01-30 09:36:42', '2022-05-23 12:23:35'),
(76, 'Knowledge management overview', NULL, '<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"max-width: 100%;\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"margin-left:48px; text-align:justify\"><span style=\"font-size:18px\">To enhance quality of research, academic pedagogy and to make scholarly discourses resourceful, BIGM is gradually increasing focus to knowledge management. In this initiative, primarily, academic writing, creations, discoveries and doctrines innovated or assimilated by the BIGM aficionados are managed for future reference and further knowledge creation.</span></p>\r\n\r\n			<p style=\"margin-left:48px; text-align:justify\">&nbsp;</p>\r\n\r\n			<p style=\"margin-left:48px; text-align:justify\"><span style=\"font-size:18px\">Primarily Knowledge Management function have the following aspects (including, not limited to):</span></p>\r\n\r\n			<ul style=\"margin-left:80px\">\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">Storage and upkeeping of knowledge materials with a scientific approach.</span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">To facilitate the mutual and simultaneous use of quality knowledge and reference materials among individuals and institutions.</span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">To recognize rigorous and innovative knowledge led endeavors and attribute proper credit, citation, nomenclature and reward thereafter/on.</span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">To be a part, member or partner of different knowledge creation and exercise events.</span></li>\r\n			</ul>\r\n\r\n			<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n			<p style=\"margin-left:40px; text-align:justify\"><span style=\"font-size:18px\">At present, BIGM, is in process to accomplish knowledge management activities in the following initiatives </span></p>\r\n\r\n			<ul style=\"margin-left:80px\">\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>Preserving Photograph and Videos</strong></span></li>\r\n			</ul>\r\n\r\n			<p style=\"margin-left:40px; text-align:justify\"><span style=\"font-size:18px\">Preservation of notes, photographs and video of these moment might be good source of future reference. So, we are attempting to preserve them systematically.</span></p>\r\n\r\n			<p style=\"margin-left:72px; text-align:justify\">&nbsp;</p>\r\n\r\n			<ul style=\"margin-left:80px\">\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>Preserving different types of memento and souvenirs received by the Institution.</strong></span></li>\r\n			</ul>\r\n\r\n			<p style=\"margin-left:40px; text-align:justify\"><span style=\"font-size:18px\">&nbsp;BIGM receives different types of mementos and souvenirs from many institutions. Furthermore, BIGM also publish souvenirs during many occasions. Preservation of these mementos and souvenirs will contribute as a reference in&nbsp; the future for referencing the history of BIGM and relevant time period.</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 2, NULL, '2022-01-30 10:25:43', '2022-05-23 12:10:32'),
(77, 'Future plans regarding KM', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"0\" style=\"max-width: 100%;\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"margin-left:72px; text-align:justify\"><span style=\"font-size:18px\">BIGM also have following future plans as part its knowledge management process.</span></p>\r\n\r\n			<ol style=\"list-style-type:lower-alpha; margin-left:80px\">\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>Transforming the present library to a digitally accessible e-library.</strong></span></li>\r\n			</ol>\r\n\r\n			<p style=\"margin-left:72px; text-align:justify\"><span style=\"font-size:18px\">Although BIGM library is a relatively new one set up, still it has very lucrative collections of books and other similar publications. However, collections of libraries at present are available only in hard copy format. If it can be gradually converted to a digital store house of knowledge, its relevance and convenience will increase. </span></p>\r\n\r\n			<p style=\"margin-left:72px; text-align:justify\">&nbsp;</p>\r\n\r\n			<ol start=\"2\" style=\"list-style-type:lower-alpha; margin-left:80px\">\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>To construct a data base containing especially macro-economic data of Bangladesh and other globally important countries and issues.</strong></span></li>\r\n			</ol>\r\n\r\n			<p style=\"margin-left:72px; text-align:justify\"><span style=\"font-size:18px\">Preservation of data of current time by making a database of economic and public policy will strengthen the research and academic endeavors of BIGM substantially. As most of the research of BIGM is focused on Macro-economics and public policy, so preservation of data related to economics, finance and other related sectors will be convenient for BIGM to make a database.</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 2, NULL, '2022-01-30 10:26:19', '2022-05-23 12:12:37'),
(78, 'Overview of BIGM Research', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"50\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<table border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"color:#212529\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/ILRN.png\" style=\"height:200px; width:300px\" /></span></span></span></td>\r\n						<td>\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n\r\n						<p><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Bangladesh Institute of Governance and Management (BIGM) aspires to be a premium knowledge hub. The vision of BIGM is to become a center of excellence in teaching, training and research on policy options regarding governance and development and to help the relevant entities establish an effective, transparent and accountable public and private service in Bangladesh.</span></span></span></span></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#212529\">The research portfolio of BIGM is multi-dimensional and multi-disciplinary in nature. Growth, Investment, Human capital, External Sector (Remittance), Energy and Environment, Health and Governance, Finance, Gender Issue, Think Tank, Machine Learning, Bioinformatics and Computational Biology, Big data, Developmental Economics, Optical Technology, Epidemiology AND Computational Mathematics, &nbsp;Human Resource and Organizational Development and many of the contemporary burning issues come up as the major topics of research undertaken by BIGM.</span></span></span>&nbsp;</span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#212529\">Bangladesh Institute of Governance and Management (BIGM) is a specialized post-graduate institution established in the year 2006 with the objective of creating a center of excellence in advanced studies, research and training on public policy and management. A culture of research is ingrained within BIGM&rsquo;s academic and organizational fabric which got momentum since August, 2017. The faculty as well as the core members of the research cell along with the students and trainees are constantly engaged in carrying out studies and research on different national priority areas.</span></span></span></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#212529\">The researchers of BIGM have already presented their papers in various international fora&rsquo;s, seminars and workshops. BIGM researchers have been conducting primary research as well as the secondary research. BIGM is now working on the research project of MoPA and Cabinet Division. The researchers are published many papers in international journals and conferences on multi-dimensional and multi-disciplinary fields. BIGM is also planned for publishing an annual BIGM journal of Policy Analysis.</span></span></span></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">BIGM has undertaken rigorous policy research on macro and micro economic issues to provide policy inputs for achieving the country&rsquo;s SDGs by 2030 and to become a developed country by 2041. The Institute is expanding its outreach to collaborate and to share its expertise, talents and resources with different academies, institutes, universities, research centers and think tanks working within the country and abroad. Thus, BIGM is working on different fronts with multipronged strategies to elevate it as a specialized institute of international standard.</span></span></span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 12, NULL, '2022-02-01 10:32:03', '2022-08-06 11:18:48'),
(79, 'How to apply', NULL, '<table align=\"center\" border=\"1\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\" style=\"text-align:center; vertical-align:middle\">\r\n			<p style=\"margin-left:5vw\">&nbsp;</p>\r\n			</th>\r\n			<th scope=\"col\" style=\"text-align:center\">&nbsp;</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\"><span style=\"font-size:18px\">1</span></td>\r\n			<td>\r\n			<p><span style=\"font-size:18px\">Please open your browser application (Internet Explorer, Mozilla Firefox, Google Chrome, etc.).</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\"><span style=\"font-size:18px\">2</span></td>\r\n			<td><span style=\"font-size:18px\">Type our web link:&nbsp;<a href=\"http://www.bigm.edu.bd/\">www.bigm.edu.bd</a>&nbsp;for details information.</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\"><span style=\"font-size:18px\">3</span></td>\r\n			<td><span style=\"font-size:18px\">Click here&nbsp;<a href=\"http://bigm.edu.bd/Bigm/UserAuthentication/Create\">Apply online</a>&nbsp;or&nbsp;<a href=\"http://bigm.edu.bd/Bigm/UserAuthentication/Create\">Admission going on&nbsp;</a></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\"><span style=\"font-size:18px\">4</span></td>\r\n			<td><span style=\"font-size:18px\">Fill up the forms as provided (Must fill the mandatory red marked fields).</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\"><span style=\"font-size:18px\">5</span></td>\r\n			<td><span style=\"font-size:18px\">After filling up all the fields please revise and press the &lsquo;<strong><u>Submit&rsquo; button.</u></strong></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\"><span style=\"font-size:18px\">6</span></td>\r\n			<td><span style=\"font-size:18px\">After successful submission, you will receive a system generated&nbsp;mail&nbsp; of online payment methods.&nbsp;</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\"><span style=\"font-size:18px\">7</span></td>\r\n			<td><span style=\"font-size:18px\">Just pay your application fees 1000Taka&nbsp;via this link&nbsp;&nbsp;<a href=\"https://invoice.sslcommerz.com/invoice-form?&amp;refer=60237FAA44877\" id=\"m_2218115213877735090LPlnk930887\" target=\"_blank\">https://invoice.sslcommerz.com/invoice-form?&amp;refer=60237FAA44877</a>.</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\"><span style=\"font-size:18px\">8</span></td>\r\n			<td><span style=\"font-size:18px\">Finally, you will receive a confirmation mail from BIGM. &nbsp;</span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:24px\">***&nbsp;For assistance please call 01400402033.</span></p>', 1, 2, 12, NULL, '2022-02-08 05:08:42', '2022-08-27 11:09:02');
INSERT INTO `menu_posts` (`id`, `title`, `date`, `description`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(80, 'FAQ', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<h3><span style=\"font-size:22px\"><strong>Who Can Apply?</strong></span></h3>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:18px\">Career civil servants with adequate academic background</span></li>\r\n				<li><span style=\"font-size:18px\">Executives&nbsp;of Private corporate bodies as well as NGOs and other civil society organizations</span></li>\r\n				<li><span style=\"font-size:18px\">Executives of State Owned Enterprise</span></li>\r\n				<li><span style=\"font-size:18px\">Executives from Banking and other financial sectors.</span></li>\r\n				<li><span style=\"font-size:18px\">In exceptional cases candidates who do not have any work experience but have excellent academic degrees in economics, political science, public administration, law, sociology and management and other related disciplines are also considered for admission.</span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<h3><span style=\"font-size:22px\"><strong>Academic and Professional Requirements</strong>:</span></h3>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:18px\">Minimum Masters degree or four years&rsquo; Bachelor Degree with two years&rsquo; service experience, or</span></li>\r\n				<li><span style=\"font-size:18px\">Three years&rsquo; Bachelor Degree with three years&rsquo; experience, or</span></li>\r\n				<li><span style=\"font-size:18px\">Two years&rsquo; Bachelor Degree with four years&rsquo; experience</span></li>\r\n				<li><span style=\"font-size:18px\">Fresh graduate having excellent academic result with first division or equivalent in all public examination.</span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<h3><span style=\"font-size:22px\"><strong>Points Requirement</strong></span></h3>\r\n\r\n			<p style=\"margin-left:80px\"><span style=\"font-size:18px\">Minimum points in total&nbsp;<strong>6&nbsp;</strong>is needed to be considered for application:</span></p>\r\n\r\n			<p style=\"margin-left:80px\"><span style=\"font-size:18px\">1<sup>st</sup>&nbsp;Division/Class/CGPA above 3.5 = 3,</span></p>\r\n\r\n			<p style=\"margin-left:80px\"><span style=\"font-size:18px\">2<sup>nd</sup>&nbsp;Division/Class/CGPA 2.75 t o &lt; 3.5 = 2,</span></p>\r\n\r\n			<p style=\"margin-left:80px\"><span style=\"font-size:18px\">3<sup>rd</sup>&nbsp;Division/Class/CGPA: 2.00 to &lt; 2.75 = 1</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<div style=\"overflow-x:auto\">\r\n<table align=\"center\" border=\"0\" cellpadding=\"5\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"7\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:22px\"><strong><em>Fees and Charges for Master&rsquo;s programme</em></strong>&nbsp;:</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Semester</span></span></strong></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">1<sup>st</sup>&nbsp;Semester</span></span></strong></span></span></p>\r\n\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">(Amount in Taka)</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">2<sup>nd</sup>&nbsp;Semester</span></span></strong></span></span></p>\r\n\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">(Amount in Taka)</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">3<sup>rd</sup>&nbsp;Semester</span></span></strong></span></span></p>\r\n\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">(Amount in Taka)</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">4<sup>th</sup>&nbsp;Semester</span></span></strong></span></span></p>\r\n\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">(Amount in Taka)</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Total</span></span></strong></span></span></p>\r\n\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">(Amount in Taka)</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Number of credits in per semester</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">(9 Credits)</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">(12 Credits)</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">(12 Credits)</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">(12 Credits)</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">(45 Credits)</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">SL#</span></span></strong></span></span></p>\r\n			</td>\r\n			<td colspan=\"6\" style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Description of Charges</span></span></strong></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"7\" style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Other Fees</span></span></strong></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">1</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Semester Admission Fee</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">2,000/-</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">2,000/-</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">2,000/-</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">2,000/-</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">8,000/-</span></span></strong></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">2</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Library Charge (Semester Wise)</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">2,000/-</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">2,000/-</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">2,000/-</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">2,000/-</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">8,000/-</span></span></strong></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">3</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Computer Lab Charge (S/W)</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">2,000/-</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">2,000/-</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">2,000/-</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">2,000/-</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">8,000/-</span></span></strong></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">4</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Other Charges (at once)</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">6,000/-</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">-</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">-</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">-</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">6,000/-</span></span></strong></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"7\" style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Tuition Fee</span></span></strong></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Tuition Fee (Per Credit BDT 2000/- ):</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">18,000/-</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">24,000/-</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">24,000/-</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">24,000/-</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">90,000/-</span></span></strong></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Total Fees</span></span></strong></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">30,000/-</span></span></strong></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">30,000/-</span></span></strong></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">30,000/</span></span></strong></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">30,000/-</span></span></strong></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">120,000/-</span></span></strong></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Fees for Government Officers (10%)</span></span></strong></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">3,000/-</span></span></strong></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">3,000/-</span></span></strong></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">3,000/-</span></span></strong></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">3,000/-</span></span></strong></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">12,000/-</span></span></strong></span></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:22px\"><strong><em>NB: In addition to that</em></strong></span></p>\r\n\r\n			<p style=\"margin-left:80px\"><span style=\"font-size:18px\">1.&nbsp;Students who came from other than University of Dhaka are required to&nbsp;<strong>complete the registration</strong>&nbsp;to the University of Dhaka. For that purpose they will have to pay&nbsp;<strong>BDT 7,000/-</strong>&nbsp;to the University of Dhaka.</span></p>\r\n\r\n			<p style=\"margin-left:80px\"><span style=\"font-size:18px\">2.&nbsp;For&nbsp;<strong>every semester</strong>&nbsp;each students need to pay&nbsp;<strong>BDT 2250/- as examination fees</strong>&nbsp;to the University of Dhaka.</span></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><span style=\"font-size:24px\"><strong><u>Availability of Financial Assistance/ Premium/ Scholarship</u>&nbsp;</strong></span></p>\r\n\r\n			<p><span style=\"font-size:18px\">1.&nbsp;&nbsp;BCS cadre and class-1 gazetted officers are needed to pay only 10% of total cost.</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">2.&nbsp;&nbsp;After successful completion of 1<sup>st</sup>&nbsp;semester and onward, a student achieves CGPA 3.75 and above in the scale of 4.00, then he or she will be eligible to get 50% waiver upon the tuition fees.&nbsp;&nbsp;&nbsp;&nbsp;</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">3. After successful completion of 1<sup>st</sup>&nbsp;semester and onward to the other semesters if a student achieves CGPA 3.50 to 3.74 in the scale of 4.00, then he or she will be eligible to get 20% waiver upon the tuition fees.&nbsp;&nbsp;&nbsp;&nbsp;</span></p>\r\n\r\n			<p><span style=\"font-size:18px\">4. If any student deposits the whole amount at a time then 25% waiver on total tuition fees will be awarded to him.&nbsp;&nbsp;&nbsp;</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 12, NULL, '2022-02-08 05:16:11', '2022-08-22 06:28:19'),
(81, 'Research Methodology Course Objective', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">The training program is designed to introduce graduate students and young researchers to the process of conducting scientific research in the field of social sciences, business, education and public health. It is a comprehensive and compact source for fundamental concepts in conducting primary/micro research.</span></span></p>\r\n\r\n			<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">The main purpose of this course is to equip the young researchers with the very basics of social research so that they can undertake research pursuit independently. This program helps participants to:</span></span></p>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Get themselves oriented with the concept of scientific research</span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Be familiarized with methodology, tools and techniques of research</span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Be acquainted with various stages and procedures of Academic/Applied and Action Research</span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Be enriched with hands-on experience in conducting research to the participants</span></span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 12, NULL, '2022-02-21 12:44:06', '2022-06-11 06:31:15'),
(82, 'About Statistical Analytic & Modeling with R', NULL, '<p style=\"text-align:center\">&nbsp;Statistical Analytic &amp; Modeling with R&nbsp;</p>', 1, 2, NULL, NULL, '2022-02-24 07:51:42', '2022-02-24 07:51:42'),
(83, 'About Data Analytics in Python', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">This course aims to provide training in statistical modeling in Python Language for professionals who either work with real data or want to acquire necessary skills in data analytics. The course is designed in such way that it will render both fundamental and intermediate training in Statistical Modeling with different packages / libraries of Python. <span style=\"color:black\">The key features of this course are Basic Functionalities, Data Summarization &amp; Visualization, Hypothesis Testing, Linear &amp; Multiple Regression, Logistic Regression, Time Series Analysis, Multivariate Analysis, Panel Data Analysis, and Basic Machine Learning in Python. Certificate will be conferred upon the successful completion of the course.</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 12, NULL, '2022-02-24 08:11:09', '2022-06-05 06:10:48'),
(84, 'About Quantitative Analysis with STATA', NULL, '<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">About Quantitative Analysis with STATA</p>', 1, 2, NULL, NULL, '2022-02-24 09:52:32', '2022-02-24 09:52:32'),
(85, 'VAT Management', NULL, '<p style=\"text-align:center\">About&nbsp;VAT Management</p>', 1, 2, NULL, NULL, '2022-02-24 10:02:48', '2022-02-24 10:02:48'),
(86, 'Quantitative Analysis with STATA Course Description', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"margin-left:15px; margin-right:14px; text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">STATA is a statistical software that enables users to analyze, manage, and </span></span><span style=\"font-family:&quot;Times New Roman&quot;,serif\">create</span><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"> graphical visualizations of </span></span><span style=\"font-family:&quot;Times New Roman&quot;,serif\">their</span><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"> data. It is primarily used by researchers in the fields of economics, biomedicine, and political science to </span></span><span style=\"font-family:&quot;Times New Roman&quot;,serif\">study</span><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"> data patterns. It has both a command line and </span></span><span style=\"font-family:&quot;Times New Roman&quot;,serif\">a</span><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"> graphical user </span></span><span style=\"font-family:&quot;Times New Roman&quot;,serif\">interface,</span><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"> making the software more </span></span><span style=\"font-family:&quot;Times New Roman&quot;,serif\">intuitive to use</span><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">. </span></span><span style=\"font-family:&quot;Times New Roman&quot;,serif\">The course &ldquo;Quantitative Analysis with STATA&rdquo; aims to provide training on statistical modeling in STATA for professionals who either work with real data or want to acquire necessary skills in data analytics. The key features of this course are Basic Understanding of Data &amp; Statistics, Test of Hypothesis, Linear Regression Analysis, Logistic Regression Analysis, Multivariate Techniques, Time Series Analysis, Panel Data Analysis, and Regression using STATA. Certificate will be conferred upon the successful completion of the course.</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 12, NULL, '2022-02-24 23:02:09', '2022-06-05 05:45:41'),
(87, 'Course Objective', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<ul>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Providing intermediate and advanced training on statistical modeling in STATA.</span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Enhancing the skills of professionals or students on data analytics.</span></span></span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 12, NULL, '2022-02-24 23:02:57', '2022-06-05 06:14:55'),
(88, 'Learning Outcomes', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<ul>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Run statistical models with advanced data visualization techniques in STATA.</span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Build statistical models using real data.</span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Conduct empirical research in Science, Business, Economics, Social Science and Engineering.</span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Enhance both intermediate and advanced statistical modeling skills.</span></span></span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 12, NULL, '2022-02-24 23:04:17', '2022-06-05 05:50:36'),
(89, 'Target Audience', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<ul>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Executives and managers working in corporate houses in VAT, accounts, audit, post-audit, supply chain, procurement etc.</span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Senior managers of businesses and industries.</span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Executives, managers and lawyers of law firms, CA firms and consultant firms. </span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">VAT officials.</span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;Fresh graduates.</span></span></span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 12, NULL, '2022-02-24 23:05:04', '2022-07-24 06:47:06'),
(90, 'Eligibility for Trainees', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">The graduates from the following disciplines with appropriate qualifications can participate in this course: </span></span></span></p>\r\n\r\n			<ul style=\"list-style-type:square\">\r\n				<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Graduates from Science/Business/Economics/Statistics/Mathematics/Development Studies/Social Sciences/Engineering.</span></span></span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 12, NULL, '2022-02-24 23:05:57', '2022-06-05 05:59:55'),
(91, 'Policy Analysis Course Description', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">For over a decade now, our growth has been over 6.25 percent, a feat unimaginable a few decades earlier and an outcome that also reflects the government&#39;s commitment and choices. Contrary to some popular narratives, the government&#39;s policies significantly shaped the quality of growth in Bangladesh. For example, the government consistently supported cash transfer program, encouraged the participation of Civil Society Organizations (CSOs), designed pro-poor fiscal and monetary policies that touched the lives of those who needed the most. </span></span></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">As Bangladesh is witnessing one of the largest manufacturing-led take-off in a democracy, the economy is ready to reap the benefits of its comparative advantages, including our demographic dividend. In order to do that, we need to transform our huge population into human capital and to upgrade the productivity of our both skilled and unskilled workers as well as the capacity of both private and public sector institutions. Currently, government taking initiatives to enhance the skills of the people to maximize the population dividend and its benefit. Along with the general skills development program, the government has also prioritized the training of new cohorts of visionary bureaucrats with knowledge and skills who can better design, implement, and evaluate the next generation of reforms in Bangladesh. It is obvious that the quality of our bureaucracy will critically influence the growth trajectory in the next phase of our development. A mature private sector has rightly contributed to the developmental effort ever than before. An enabling environment for the bureaucracy is a necessary condition for a sustained takeoff. An efficient bureaucracy with practical knowledge combined with open, constructively critical approach that can address the questions of governance and policy development is the need of this hour. </span></span></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">It is the earnest hope of BIGM that the policy analysis training would provide a set of conceptual frameworks for analyzing the public policy, and formulating effective strategies for policy design, analysis, evaluation, and advocacy. The concepts, skills, and analytical tools students would learn in the training would rest upon a foundation of economic principles, institutional analysis, and political and social psychology. They would be able to identify, analyze, predict the patterns of behavior and outcomes, and ultimately enhance policy effectiveness. That in turn would infuse dynamism, innovation, and critical reasoning into the bureaucracy that can respond to the complex world we now live in. 2600 years ago, the Chinese philosopher Lao Tzu, said &ldquo;The journey of a thousand miles begins with one step&rdquo;. We are taking that first step in an unprecedented journey for the 160 million Bangladeshis. The road to a developed Bangladesh by 2041 has to go through a competent bureaucracy, as the experience of East Asia and advanced economies have demonstrated. In order to achieve that, we are embarking on a voyage by carrying the inspirations and sacrifices of the past. And with that resolve, pragmatism, and optimism, our top policymakers will train a new brand of trained human ware for a more just, more inclusive, and more developed Bangladesh. </span></span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 12, NULL, '2022-02-25 08:12:47', '2022-06-11 06:10:05');
INSERT INTO `menu_posts` (`id`, `title`, `date`, `description`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(92, 'Policy Analysis Course Objective', NULL, '<div style=\"overflow-x:scroll\">\r\n<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">This course is designed to fulfill the needs for understanding policy making. It will familiarize the participants with a number of&nbsp;fundamental factors:</span></span></span></span></span></p>\r\n\r\n			<ol style=\"list-style-type:lower-roman\">\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"color:#212529\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">The dynamics of policy making process;</span></span></span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"color:#212529\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">The intricacies of group struggles or vested interest groups;</span></span></span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"color:#212529\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">The generic instruments of public policy;</span></span></span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"color:#212529\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\">The roles of policy analysts in a democratic society and in particular, the arts and science of dealing with the challenges of policy-making.</span></span></span></span></span></li>\r\n			</ol>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">Therefore, the main purpose of the program are:</span></span></span></span></span></p>\r\n\r\n			<ol style=\"list-style-type:lower-alpha\">\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">To enable the trainees to have a clear understanding of the principal analytics, tools and techniques of policy analysis.</span></span></span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">To prepare the trainees to better navigate the complex and dynamic process of policy formulation, implementation, monitoring and evaluation.</span></span></span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">To make them understand the intricacies of group interaction of different players of policy domain and</span></span></span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">To aware the trainees about the role of public policy analysis in a democratic society, in particular, the arts and science of dealing with the challenges of policymaking.</span></span></span></span></span></li>\r\n			</ol>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">This course is intended for those who are interested in joining or already working in the government in various policy formulation, implementation and evaluation capacities. It can also better equip those who are interested in constructively&nbsp;influencing policies, including through the Development Partners, the NGOs, the advocacy groups or think tanks. Participants are expected to gain an intimate knowledge of policy making and build capacity in policy analysis &amp; implementation to meaningfully contribute to Bangladesh&#39;s journey towards a more just, equal, and progressive society that our freedom fighters sacrificed their lives for. In short, this training program/course in policy analysis should make trainees-</span></span></span></span></span></p>\r\n\r\n			<ul>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">Learn the language of policy formulation and -</span></span></span></span></span>\r\n\r\n				<ul style=\"list-style-type:circle\">\r\n					<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">To write with clarity, structure, and precision.</span></span></span></span></span></li>\r\n					<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">To use supporting documentation (maps, charts, data, graphs) effectively.</span></span></span></span></span></li>\r\n					<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">To develop simple models that are supported theoretically and empirically.</span></span></span></span></span></li>\r\n					<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">To evaluate the developmental as well as distributional aspects of policies and programs.</span></span></span></span></span></li>\r\n					<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">To incorporate socio-political factors into analysis.</span></span></span></span></span></li>\r\n					<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">To bring in cross-country lessons into policy formulation</span></span></span></span></span></li>\r\n				</ul>\r\n				</li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">Develop analytic skills that include &ndash;</span></span></span></span></span>\r\n				<ul style=\"list-style-type:circle\">\r\n					<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">Quantitative and Qualitative</span></span></span></span></span></li>\r\n				</ul>\r\n				</li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">Learn to &ndash;</span></span></span></span></span>\r\n				<ul style=\"list-style-type:circle\">\r\n					<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">Accommodate/adjust/amend uncomfortable positions.</span></span></span></span></span></li>\r\n					<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">Work under time constraints and to allocate analytical resources.</span></span></span></span></span></li>\r\n					<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">Develop management skills and the ability to work in, and/or direct a team.</span></span></span></span></span></li>\r\n				</ul>\r\n				</li>\r\n			</ul>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">Structure of the Policy Analysis Course:</span></span></strong></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">(i) Duration:</span></span></strong><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\"> The length of the course is 10 weeks (50 working days). Of which 06 weeks will be devoted in a classroom environment at BIGM. Later the trainees will be fully involved for the preparation of a draft policy paper under the supervision of an experienced mentor and co-mentor for 3 weeks. In the 10<sup>th</sup> week, each trainee will make their presentation before a panel of experts. The sessions are held on all weekdays (Saturdays to Wednesday) except holidays.</span></span></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">(ii) Participants: </span></span></strong><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">Executives from&nbsp;public&nbsp;sector (Senior Assistant secretary to Joint Secretary or equivalent), private sectors and NGOs with a Master&rsquo;s degree from&nbsp;recognized&nbsp; universities&nbsp;and a minimum of 10 years of work experience, demonstrating&nbsp;sound&nbsp;knowledge of laws, regulations, planning&nbsp;and&nbsp;policies in the 30 &ndash;52 age group. Of the participants, 70% will be from the&nbsp;public sector and 30% from NGOs and the private sector. At least 30% of the participants are expected&nbsp;to be female.</span></span></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">(iii) Resource Persons:</span></span></strong><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\"> Professionals from the academia, universities, research institutes,&nbsp;government&nbsp;and&nbsp;private sector as well as the judiciary, law enforcement&nbsp;and&nbsp;defense&nbsp;services,&nbsp;development partners, and the NGO sector.</span></span></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">(iv) Number of Participants: </span></span></strong><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">30 per batch</span></span></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">(v) Session Duration:</span></span></strong><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\"> Each session is one and a half hour long. Maximum 4 sessions a day.</span></span></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">(vi) Quality Control:</span></span></strong><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\"> Training contents and learning materials will be updated on a regular&nbsp;basis, based on&nbsp;the feedback received from the trainees, trainers&nbsp;and&nbsp;experts of&nbsp;relevant&nbsp;fields. </span></span></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">(vii)</span></span></strong><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">&nbsp;<strong>Class Details and Instruction Format:</strong></span></span></span></span></span></p>\r\n\r\n			<ol>\r\n				<li style=\"list-style-type:none\">\r\n				<ol style=\"list-style-type:lower-alpha\">\r\n					<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">There will be 9 (nine) modules to be conducted within 10 weeks with two to four lectures per day. There will be a total of 80 lectures for 8 modules, approximately eight modules is going to be covered in 6 weeks and the 9th module (4 weeks) is for the preparation of a draft Policy Paper by the participants. Each module will comprise 8-12 lectures with a lecture duration of one and a half hours. Total contact hours will be 135 hours.</span></span></span></span></span></li>\r\n					<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">The morning session will begin at 9:00 am, with a 30 minutes tea break between two sessions before lunch, and the afternoon session will start at 1:30 pm, with a 15 minutes tea break between two sessions. Library and IT attachment will be a part of the training.</span></span></span></span></span></li>\r\n					<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">Participants will be provided with Transport Allowances (TAs) for attending each training days only. For the absent days, there will be no TAs. In addition, for the preparation of draft policy paper, each participants will be provided with substantial allowance.</span></span></span></span></span></li>\r\n					<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">The medium of instruction of the course is English. The center encourages the participants to develop their oral and written skills in English through practicing inside and outside the classroom. More importantly, all assignments (both group and individual) and presentations will be in English.</span></span></span></span></span></li>\r\n				</ol>\r\n				</li>\r\n			</ol>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">Policy Paper Draft and Evaluation:</span></span></strong> </span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">At the very beginning of the course and as the course progresses, trainees will be asked to think and articulate the issue on which she/he is interested to write the Draft Policy Paper.</span></span></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">All the participants are expected to prepare a draft policy paper individually which will be treated as the main basis of evaluation/assessment for their performance in the training program. There will be 3 other short assignments, which all also be a part of the total assessment.</span></span></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">The Draft Policy Paper will be evaluated on a grading scheme that means different weightages will be given on different parts of the Paper itself. There will be a seminar at the end of the course, where the best Policy Notes/Issue Papers will be presented before a cross-cutting audience. &nbsp;While formulating</span></span> <span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">policies, participants should incorporate the lessons from other relevant country examples in the region. These lessons then could be customized to our socio-economic-political conditions and growth history. The trainees&rsquo; overall performance is to be evaluated as follows:</span></span></span></span></span></p>\r\n\r\n			<table align=\"center\" cellspacing=\"0\" class=\"Table\" style=\"background:white; border-collapse:collapse; border:none\">\r\n				<tbody>\r\n					<tr>\r\n						<td style=\"background-color:white; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; width:256px\">\r\n						<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">Areas of Evaluation</span></span></strong></span></span></p>\r\n						</td>\r\n						<td style=\"background-color:white; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; width:193px\">\r\n						<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">Percentage (%)</span></span></strong></span></span></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"background-color:white; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; width:256px\">\r\n						<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">Draft Policy Paper (Written)</span></span></span></span></p>\r\n						</td>\r\n						<td style=\"background-color:white; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:193px\">\r\n						<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">60</span></span></span></span></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"background-color:white; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; width:256px\">\r\n						<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">Presentation</span></span></span></span></p>\r\n						</td>\r\n						<td style=\"background-color:white; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:193px\">\r\n						<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">15</span></span></span></span></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"background-color:white; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; width:256px\">\r\n						<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">Assignment</span></span></span></span></p>\r\n						</td>\r\n						<td style=\"background-color:white; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:193px\">\r\n						<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">15</span></span></span></span></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"background-color:white; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; width:256px\">\r\n						<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">Participation</span></span></span></span></p>\r\n						</td>\r\n						<td style=\"background-color:white; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; width:193px\">\r\n						<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">5</span></span></span></span></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"background-color:white; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:29px; width:256px\">\r\n						<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">Attendance</span></span></span></span></p>\r\n						</td>\r\n						<td style=\"background-color:white; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:29px; width:193px\">\r\n						<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">5</span></span></span></span></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"background-color:white; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:29px; width:256px\">\r\n						<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">Total</span></span></strong></span></span></p>\r\n						</td>\r\n						<td style=\"background-color:white; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:29px; width:193px\">\r\n						<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">100</span></span></strong></span></span></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">Conclusion:</span></span></strong></span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Segoe UI&quot;,sans-serif\"><span style=\"color:#212529\">After the training is complete, each trainee will be better equipped with the knowledge and skills that are essential in understanding and to conceptualize the policy issues, context of the policy formulations and the impeding and impelling issues that influence policy implementation, evaluation, monitoring and policy reformulation. It goes without saying that the outline presented here is a living document that will evolve over time into a more robust and rewarding training program. The program intends to create a group of dynamic officers within the government who will be reform-minded and risk-taking public innovators. They will play a critical role in enhancing the productivity of the public sector and help Bangladesh move forward on a higher trajectory of development. As an ultimate outcome of the program, a more informed, inclusive, pro-poor and growth-oriented policy environment is expected to be created.</span></span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n</div>', 1, 2, 12, NULL, '2022-02-25 08:16:38', '2022-06-11 06:09:27'),
(93, 'Courses for GPP', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">PREPARATORY COURSES </span></span></span></strong></span></span></p>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">English for Professionals GPP-PC-104</span></span></span></span></span></li>\r\n			</ul>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">CORE COURSES (Among the Following 7 Core Courses will be offered)</span></span></span></strong></span></span></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Governance and Public Policy GPP-CC-501</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Major Schools of Development Thought GPP-CC-502</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Leading Issues of Governance in Bangladesh GPP-CC-503</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Strategic Management and Leadership GPP-CC-504</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Important Laws: Constitutional Laws, Jurisprudence, Administrative Laws, International Laws GPP-CC-505</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Local Government: Decentralization, Devolution GPP-CC-506</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Public Policy Analysis GPP-CC-507</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Human Resource Management GPP-CC-508</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Principles, Practices and Dynamics of Research Management GPP-CC-509</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Budgeting and Management of Public Resources GPP-CC-511</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Fundamental of Economics GPP-CC-520</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Fundamental of Public Administration and Political Science GPP-CC-521</span></span></span></span></span></li>\r\n			</ul>\r\n\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">ELECTIVE COURSES (Among the Following 7 Elective Courses will be offered)</span></span></span></strong></span></span></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Elective Courses may be clustered into four broad areas as below:</span></span></span></strong></span></span></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Group A: Policy Issues</span></span></span></strong></span></span></p>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Environmental Management and Sustainable development GPP-EC-601</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">International Governance and Cooperation GPP-EC-602</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Current Issues in Globalization GPP-EC-603</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Globalization and the New Economic Order GPP-EC-604</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Political Economy of Poverty and Inequality GPP-EC-605</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Financial Management GPP-EC-612</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Project Development and Management GPP-EC-614</span></span></span></span></span></li>\r\n			</ul>\r\n\r\n			<p style=\"margin-left:48px\">&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Group B: Enhancing Performance</span></span></span></strong></span></span></p>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">E-governance and IT GPP-EC-631</span></span></span></span></span></li>\r\n			</ul>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Group C: Building Partnership</span></span></span></strong></span></span></p>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Public &ndash;Private Partnership GPP-EC-651</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">NGOs as Development Partners GPP-EC-652</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Land Management GPP-EC-653</span></span></span></span></span></li>\r\n			</ul>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Group D: Accountability</span></span></span></strong></span></span></p>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Ethics and Anti-Corruption GPP-EC-671</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Gender, Diversity and Governance GPP-EC-672</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Human Rights and Social Justice GPP-EC-673</span></span></span></span></span></li>\r\n			</ul>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Term paper GPP EC 699</span></span></span></span></span></li>\r\n				<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:13.5pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Thesis GPP EC 799</span></span></span></span></span></li>\r\n			</ul>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 2, NULL, '2022-02-25 08:51:28', '2022-02-28 03:29:42'),
(94, 'Courses for IER', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<h3><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">PREPARATORY COURSES </span></span></span></h3>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">English for Professionals IER-PC-104</span></span></span></li>\r\n			</ul>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<h3><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">CORE COURSES(Among the Following 10 Core Courses will be offered)</span></span></span></h3>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ul>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">International Economics: Theoretical Approaches and Conceptual clarity&nbsp; IER-CC-501 </span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">Economics for Public Policy and Program Administration&nbsp; IER-CC-502</span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">Negotiation and Conflict Management&nbsp; IER-CC-503</span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">Budgeting and Management of Public Resources&nbsp; IER-CC- 504</span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">Project Development and Management&nbsp; IER-CC- 505</span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">Institutions, Institutional Change and Economic Performance&nbsp; IER-CC- 506</span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">Economic Resources: Institutions, Think Tanks and Universities&nbsp; IER-CC-507</span></li>\r\n			</ul>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">Micro-Economics IER</span>-CC-<span style=\"color:black\">508/A</span></span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">Macro-Economics IER</span>-CC-<span style=\"color:black\">508/B</span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">WTO and International Trade&nbsp; IER-CC- 509</span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">Technology Transfer&nbsp; IER-CC- 510</span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">Environmental Economics and Policy&nbsp; IER-CC- 511</span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">Economic Diplomacy&nbsp; IER-CC- 512</span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">Principles, practices and dynamics of Research Management&nbsp; IER-CC-513</span></li>\r\n			</ul>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">Fundamental of Economics IER</span>-CC-<span style=\"color:black\">520 </span></span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">Fundamental of Public Administration and Political Science IER</span>-CC-<span style=\"color:black\">521</span></span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:black\">Term paper IER CC 699</span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:black\">Thesis IER CC 799</span></span></li>\r\n			</ul>\r\n\r\n			<h3><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">ELECTIVE COURSES (Among the Following 4 Elective Courses will be offered)</span></span></span></h3>\r\n\r\n			<h3>&nbsp;</h3>\r\n\r\n			<h3><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">Elective Courses may be clustered into four broad areas as below:</span></span></span></h3>\r\n\r\n			<h3>&nbsp;</h3>\r\n\r\n			<h3><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">Group A: Policy Issues</span></span></span></h3>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">Financial Management IER-EC-612</span></span></span></li>\r\n			</ul>\r\n\r\n			<ul>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">Public Policy Analysis&nbsp;&nbsp; <span style=\"color:black\">IER-EC-</span>601</span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">Environmental Management and Sustainable Development <span style=\"color:black\">IER-EC-</span>602</span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">Issues of International Governance and Cooperation&nbsp;&nbsp; <span style=\"color:black\">IER-EC-</span>603</span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">Current Issues in Globalization (Globalization and new economic order ) <span style=\"color:black\">IER-EC-</span>604</span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\">Globalization: Its Impact&nbsp; <span style=\"color:black\">IER-EC-</span><em>605</em></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">Political Economy of Poverty and Inequality IER-EC-606</span></span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">Banking and Monetary Management IER-EC-607</span></span></span></li>\r\n			</ul>\r\n\r\n			<h3>&nbsp;</h3>\r\n\r\n			<h3><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">Group B: Enhancing Performance</span></span></span></h3>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">E-governance and IT IER-EC-631</span></span></span></li>\r\n			</ul>\r\n\r\n			<h3>&nbsp;</h3>\r\n\r\n			<h3><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">Group C: Building Partnership</span></span></span></h3>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">Public &ndash;Private Partnership IER-EC-641</span></span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">NGOs as Development Partners IER-EC-652</span></span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">Land Management IER-EC-653</span></span></span></li>\r\n			</ul>\r\n\r\n			<h3>&nbsp;</h3>\r\n\r\n			<h3><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">Group D: Accountability</span></span></span></h3>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">Ethics and Anti-Corruption IER-EC-681</span></span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">Gender, Diversity and Governance IER-EC-682</span></span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:#4f81bd\"><span style=\"color:black\">Human Rights and Social Justice IER-EC-683</span></span></span></li>\r\n			</ul>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:black\">Term paper IER EC 699</span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"color:black\">Thesis IER EC 799</span></span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 2, 2, NULL, '2022-02-25 08:53:24', '2022-02-28 03:14:19');
INSERT INTO `menu_posts` (`id`, `title`, `date`, `description`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(95, 'Course details', NULL, '<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">COURSE POLICIES</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Students have to obtain CGPA of 2.50 for enrolment in the next/ subsequent semester</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">There is no permission for makeup examinations.</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Regular and timely attendance in the class is compulsory.</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Students are encouraged to contact the Instructor in case of any difficulty relating to course content.</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">A student who wishes to write Thesis must obtain a CGPA of 5 in the first three semesters and thesis must be completed within three months after the end of 4th semester.</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Any unfair means, such as copying adopted in the examination will be severely dealt with.</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Course Numbering System</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Courses are numbered in two parts: first part with alphabets representing the centre-piece of the programme, and second part refers to the level of the course. Preparatory courses could be numbered at 100 levels, Core Courses at 500 levels and Elective Courses at 600 levels. Dissertation related courses are numbered 700 onward with the Dissertation itself as 799.</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Performance Evaluation</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Grading/ Evaluation/Assessment</span></span></p>', 1, 2, NULL, NULL, '2022-02-25 21:02:35', '2022-02-25 21:02:35'),
(96, 'Research Catalogue', NULL, '<p style=\"text-align:center\"><a href=\"https://www.bigm.edu.bd/public/upload/Research_Catalogue/Research_Catalogue.pdf\" target=\"_blank\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/Research%20Attainment%203%20copy_page-0004.jpg\" style=\"height:1200px; width:988px\" /></a></p>', 1, 2, 12, NULL, '2022-03-13 22:17:38', '2022-06-21 10:41:39'),
(97, 'Blog Registration', NULL, '<p style=\"text-align:center\"><strong><span style=\"font-size:16px\">. . .&nbsp; Blog registration page is coming soon . . .&nbsp;</span></strong></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\">You can register yourself to post a blog.</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/registration.PNG\" style=\"height:575px; width:450px\" /></span></p>', 1, 3, 3, NULL, '2022-03-22 23:52:55', '2022-03-22 23:59:22'),
(98, 'Blog Login', NULL, '<p style=\"text-align:center\"><strong><span style=\"font-size:16px\">&nbsp;. . . Blog Login page is coming soon . . .&nbsp;</span></strong></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\">To post any article in BIGM blog, you need to login first.</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/login.PNG\" style=\"height:407px; width:406px\" /></span></p>', 1, 3, 3, NULL, '2022-03-22 23:54:12', '2022-03-23 00:00:36'),
(99, 'MPA in PSCM', NULL, '<p style=\"text-align:center\"><strong>MPA in Procurement and Supply Chain Management</strong></p>\r\n\r\n<table align=\"center\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:700px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt=\"\" src=\"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/4RDoRXhpZgAATU0AKgAAAAgABQESAAMAAAABAAEAAAE7AAIAAAAGAAAIVodpAAQAAAABAAAIXJydAAEAAAAMAAAQ1OocAAcAAAgMAAAASgAAAAAc6gAAAAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFNIQUZJAAAFkAMAAgAAABQAABCqkAQAAgAAABQAABC+kpEAAgAAAAMxNwAAkpIAAgAAAAMxNwAA6hwABwAACAwAAAieAAAAABzqAAAACAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMjAyMTowODowMyAwMjowMToyNgAyMDIxOjA4OjAzIDAyOjAxOjI2AAAAUwBIAEEARgBJAAAA/+ELGGh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8APD94cGFja2V0IGJlZ2luPSfvu78nIGlkPSdXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQnPz4NCjx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iPjxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+PHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9InV1aWQ6ZmFmNWJkZDUtYmEzZC0xMWRhLWFkMzEtZDMzZDc1MTgyZjFiIiB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iLz48cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0idXVpZDpmYWY1YmRkNS1iYTNkLTExZGEtYWQzMS1kMzNkNzUxODJmMWIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyI+PHhtcDpDcmVhdGVEYXRlPjIwMjEtMDgtMDNUMDI6MDE6MjYuMTc0PC94bXA6Q3JlYXRlRGF0ZT48L3JkZjpEZXNjcmlwdGlvbj48cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0idXVpZDpmYWY1YmRkNS1iYTNkLTExZGEtYWQzMS1kMzNkNzUxODJmMWIiIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyI+PGRjOmNyZWF0b3I+PHJkZjpTZXEgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj48cmRmOmxpPlNIQUZJPC9yZGY6bGk+PC9yZGY6U2VxPg0KCQkJPC9kYzpjcmVhdG9yPjwvcmRmOkRlc2NyaXB0aW9uPjwvcmRmOlJERj48L3g6eG1wbWV0YT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgPD94cGFja2V0IGVuZD0ndyc/Pv/bAEMAAgEB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\" style=\"height:75px; width:138px\" /></p>\r\n			</td>\r\n			<td>The study on Procurement and Supply Chain Management has emerged as a very crucial since it is one of the key function of it is a key function of any organization whether public or private. In an era of globalization, management in purchasing and supply is gaining momentum both in private as well as in public sector. Moreover, with growing focus and dispute on governance issues, the job of purchasing and supply needs capacity building in acquiring and implementing international standard in procurement practices. In view of its practical necessity, BIGM has designed a master&rsquo;s program on Procurement and Supply Chain Management.&nbsp;<br />\r\n			&nbsp;<br />\r\n			The main purpose of this master&rsquo;s program in &ldquo;Procurement and Supply Chain Management&rdquo; is to sensitizing and building up the competence of officials of public sector, NGOs along with executives from the private sector on procurement and supply chain management issues. This program is for officials practicing or interested in the issues relating to procurement and supply chain and is expected to increase their understanding of related issues and sharpen their decision- making abilities. &nbsp;The program is aimed to provide advanced knowledge and understanding of international as well as local procurement issues experienced by officials/executives to come to appropriate decisions.&nbsp;<br />\r\n			&nbsp;<br />\r\n			The courses are taught by the Institute faculty members and adjunct faculty from other distinguished academic institutions and specialists in purchasing and supply chain management. &nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 12, NULL, NULL, '2022-05-14 11:29:31', '2022-05-14 11:29:31'),
(101, 'Course Objective of Python', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<ul>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Providing intermediate and advanced training on statistical modeling in Python.</span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Enhancing the skills of professionals or students on data analytics.</span></span></span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 12, NULL, NULL, '2022-06-05 06:20:50', '2022-06-05 06:20:50'),
(102, 'Learning Outcomes of Python', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<ul>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Learners will be able to run statistical models in Python.</span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">They will learn how to build statistical models using real data.</span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Conduct empirical research in Economics, Social Sciences, and Business. </span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Learn advanced data visualization techniques in Python.</span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Enhance both fundamental and intermediate statistical modeling skills in Python.</span></span></span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 12, NULL, NULL, '2022-06-05 06:25:01', '2022-06-05 06:25:01'),
(103, 'Target Audience for Python', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<ul>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Researchers from both academic and non-academic institutions.</span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">People working in consultation, research firms and software companies.</span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">People engaged in financial industries and R&amp;D of private sectors.</span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">People involved in NGOs, GOB and market research programs.</span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Applicants intend to learn statistical computing for PhD/higher studies.</span></span></span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 12, NULL, NULL, '2022-06-05 06:52:59', '2022-06-05 06:52:59'),
(104, 'Eligibility for Python Trainees', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">The graduates from the following disciplines with appropriate qualifications can participate in this course: </span></span></span></p>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Graduates from Science/Business/Economics/Statistics/Mathematics/Development Studies/Social Sciences/Engineering. </span></span></span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 12, 12, NULL, '2022-06-05 07:03:44', '2022-06-05 07:05:26'),
(105, 'Course Description for R', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Data </span></span></span><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">analytics </span></span><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">is the process of examining </span></span></span><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">a dataset</span></span><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\"> to find trends and </span></span></span><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">infer</span></span><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\"> about the information </span></span></span><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">contained therein.</span></span><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\"> Data modeling is </span></span></span><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">the</span></span><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\"> process </span></span></span><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">of</span></span><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\"> defining and </span></span></span><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">organizing</span></span><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\"> data for use and analyze </span></span></span><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">in a particular</span></span><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\"> intention</span></span></span><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">.</span></span><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\"> R </span></span></span><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Analytics</span></span><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\"> (or R programming language) is </span></span></span><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">free since it is an open source</span></span><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\"> platform used for all kinds of data science, statistics, and visualization projects. </span></span></span><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">The course &ldquo;Data Analytics and Modeling with R&rdquo; aims to provide training on statistical modeling in R for professionals who either work with real data or want to acquire necessary skills in data analytics. The key features of this course are Basic Functionalities, Data Summarization, Visualization, Hypothesis Testing, Linear and Logistic Regression, Time Series Regression, Panel Regression, Introduction to Machine Learning, Multivariate Analysis and SEM in R. Certificate will be conferred upon the successful completion of the course.</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 12, 12, NULL, '2022-06-06 03:21:53', '2022-06-06 03:34:32'),
(106, 'Course Objective for R', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<ul>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Providing intermediate and advanced training on statistical modeling in R.</span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Enhancing the skills of professionals or students on data analytics.</span></span></span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 12, 12, NULL, '2022-06-06 03:31:37', '2022-06-06 03:37:05'),
(107, 'Learning Outcomes for R', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<ul>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Run statistical models advanced data visualization techniques using real data in R.</span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Conduct empirical research in Science, Business, Economics, Social Science and Engineering.</span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Enhance both intermediate and advanced statistical modeling skills.</span></span></span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 12, NULL, NULL, '2022-06-06 03:47:02', '2022-06-06 03:47:02'),
(108, 'Target Audience for R', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<ul>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Researchers from both academic and non-academic institutions.</span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">People working in consultation, research firms and software companies.</span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">People engaged in financial industries and R&amp;D of private sectors.</span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">People involved in NGOs, GOB and market research programs.</span></span></span></li>\r\n				<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Applicants intend to learn statistical computing for PhD/higher studies.</span></span></span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 12, NULL, NULL, '2022-06-06 03:53:48', '2022-06-06 03:53:48'),
(109, 'Eligibility for R', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">The graduates from the following disciplines with appropriate qualification can participate in this course: </span></span></span></p>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Graduates from Science/Business/Economics/Statistics/Mathematics/Development Studies/Social Sciences/Engineering with a minimum statistical knowledge. </span></span></span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 12, NULL, NULL, '2022-06-06 03:56:47', '2022-06-06 03:56:47'),
(110, 'Learning Outcomes of Research Methodology', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>KEY ASPECTS of RESEARCH METHODOLOGY COURSE</strong></span></span></p>\r\n\r\n			<ul>\r\n				<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Course Structure</strong></span></span>\r\n\r\n				<ul style=\"list-style-type:circle\">\r\n					<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">This training course is divided broadly into three (3) phases.</span></span>\r\n\r\n					<ul style=\"list-style-type:square\">\r\n						<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>First Phase: </strong>Theoretical aspects of research and research methodology</span></span></li>\r\n						<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Second Phase: </strong>The practical orientation of data collection through quantitative and qualitative tools and techniques and engaged in data analysis using different software.</span></span></li>\r\n						<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Third Phase: </strong>Focusing on research report writing exercises and scientific journal publication process with a particular focus on referencing system (both manual and software). Preparing reports through group activities and submit their reports. Successful completion/presentation of the report/concept note is mandatory to be awarded with the certificate.</span></span></li>\r\n					</ul>\r\n					</li>\r\n				</ul>\r\n				</li>\r\n				<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Course Duration</strong></span></span>\r\n				<ul style=\"list-style-type:circle\">\r\n					<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">The length of the Research Methodology Course is 6 weeks. The sessions are held on Saturday and Monday, except government holidays. Participation of the trainees in all activities are mandatory during training.</span></span></li>\r\n				</ul>\r\n				</li>\r\n				<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Resource Persons/Facilitators</strong></span></span>\r\n				<ul style=\"list-style-type:circle\">\r\n					<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Some of the brightest minds drawn from the academia, universities, research institutes, government and private sectors.</span></span></li>\r\n				</ul>\r\n				</li>\r\n				<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Sessions</strong></span></span>\r\n				<ul style=\"list-style-type:circle\">\r\n					<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Total number of sessions 12 (twelve).</span></span></li>\r\n					<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Maximum 2 (two) sessions a day.</span></span></li>\r\n				</ul>\r\n				</li>\r\n				<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Lecture Duration</strong></span></span>\r\n				<ul style=\"list-style-type:circle\">\r\n					<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Each session is one and a half hour long.</span></span></li>\r\n				</ul>\r\n				</li>\r\n				<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Class Size</strong></span></span>\r\n				<ul style=\"list-style-type:circle\">\r\n					<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Number of participants per batch &ndash; 30</span></span></li>\r\n				</ul>\r\n				</li>\r\n				<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Quality &amp; Monitoring</strong></span></span>\r\n				<ul style=\"list-style-type:circle\">\r\n					<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">There will be a pre-evaluation before the course begins and a post-evaluation after the course concludes to understand the insight of the participants about Research Methodology.</span></span></li>\r\n					<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">After each session, a Researcher Evaluation is to be conducted to monitor the progress of the participants.</span></span></li>\r\n				</ul>\r\n				</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 12, NULL, NULL, '2022-06-11 06:38:06', '2022-06-11 06:38:06'),
(111, 'Target Audience for Research Methodology', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<ul>\r\n				<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Researchers/Professionals working at different Govt./Public/Private Institutions and NGOs.</span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Young academia/researchers/professionals who love to develop their career in research and development, scientific analysis and report writing.</span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Individuals intending to develop professional knowledge and skills in the field of socio-economic &amp; policy research</span></span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 12, NULL, NULL, '2022-06-11 06:41:03', '2022-06-11 06:41:03'),
(112, 'Eligibility for Trainees for Research Methodology', NULL, '<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:80%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<ul>\r\n				<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">At least graduate from any reputed university with minimum CGPA of 3.25 (out of 4)</span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Age not more than 32 years</span></span></li>\r\n				<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Academic/professional research experience is required</span></span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 1, 12, NULL, NULL, '2022-06-11 06:43:22', '2022-06-11 06:43:22'),
(113, 'Glimpse 2020', NULL, '<p style=\"text-align:center\"><a href=\"https://www.bigm.edu.bd/public/upload/research_paper/Glimpse2020.pdf\" target=\"_blank\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/Glimpse%20cover%202%20(1)_page-0001.jpg\" style=\"height:1200px; width:927px\" /></a></p>', 1, 12, 12, NULL, '2022-06-11 14:12:52', '2022-06-12 08:51:30');
INSERT INTO `menu_posts` (`id`, `title`, `date`, `description`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(114, 'Oped of BIGM', NULL, '<h2><strong>Recent Op-ed</strong></h2>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<table border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:500px\">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:14px\"><strong><a href=\"https://thedailynewnation.com/news/328743/Global-energy-consumption:-How-Bangladesh-should-move-forward?fbclid=IwAR1XBnj2j3nxXlwqyS6WgUgyguvi_2FAhKCrEeL6PF2ApQ4mpit2xpyl7X0\" target=\"_blank\">Global energy consumption: How Bangladesh should move forward?</a></strong></span></span></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"text-align:center\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/1658250045_9.jpg\" style=\"height:89px; width:150px\" /></td>\r\n					</tr>\r\n					<tr>\r\n						<td><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Global energy consumption is the amount of power used providing by different type of non-renewable and renewable energy sources. Many countries need energy supply and consumption for its economic development. Energy consumption for some countries in the world is very high than other countries. For example, China consumes energy 1.67 times than USA, 2 times than Canada and almost 5 times than the rest of the world.</span></span></td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p><span style=\"font-size:11px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Faroque Ahmed &amp; Md. Monirul Islam<br />\r\n						The New Nation&nbsp;<br />\r\n						20 July 2022</span></span></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<table border=\"0\" cellpadding=\"10\" cellspacing=\"1\" style=\"width:500px\">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong><a href=\"https://thefinancialexpress.com.bd/views/columns/transition-to-renewable-energy-for-bangladesh-1658073744?fbclid=IwAR1oncbuFK1__PqIzHc7hCZ_Ic4pfW63_f0oJd4MyGDhB59oRANMJQlF6cE\" target=\"_blank\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Transition to renewable energy for Bangladesh</span></span></a></strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"text-align:center\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/1658073744(3).jpg\" style=\"height:100px; width:150px\" /></td>\r\n					</tr>\r\n					<tr>\r\n						<td><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Bangladesh is set to suffer in the long run from severe impacts of climate change, particularly increased flooding related to sea-level rise and storm surges. The current floods and heat waves are a harbinger of worse climatic conditions. As a remedial measure, the country is planning to cut off the greenhouse emission by 15 per cent from a Business as Usual (BAU) level by 2030.</span></span></td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:11px\">Mowshumi Sharmin<br />\r\n						The Financial Express Bangladesh<br />\r\n						July 17, 2022</span></span></p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<table border=\"0\" cellpadding=\"1\" cellspacing=\"10\" style=\"width:500px\">\r\n				<tbody>\r\n					<tr>\r\n						<td><span style=\"font-size:14px\"><strong><a href=\"https://www.daily-sun.com/printversion/details/630271/Combined-Efforts-Needed-for-Ethically-Integrated-Nation-Building?fbclid=IwAR0nAkuDZ6daecFjP2UinBBPH3edWzIcVdFmD6dUXh8PwdZ998KM-A6OkTY\" target=\"_blank\">Combined Efforts Needed for Ethically Integrated Nation Building</a></strong></span></td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"height:89px; width:150px\">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:12px\">Notwithstanding the famous phrase by Abraham Lincoln &ldquo;government of the people, by the people, for the people&rsquo;&rsquo;, frequently government is unduly considered as a single entity who is the leader and obliged to maintain national security, economic security, economic assistance as well as providing public services where citizens are the people legally belonging to the state enjoying the right and protection. In accordance with the functions of the government, the behaviour pattern, ethical standards and culture vary. Also, the responsibility of the citizens along with the government action in building an ethical standards country is significant.</span></span></td>\r\n					</tr>\r\n					<tr>\r\n						<td><span style=\"font-size:11px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Fariya Tabassum<br />\r\n						Daily Sun<br />\r\n						5 July, 2022</span></span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Op-eds Published in 2022</span></span></strong></span></span></p>\r\n\r\n<table cellspacing=\"0\" class=\"MsoTableGrid\" style=\"border-collapse:collapse; border:none; width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:1px; vertical-align:top; width:5%\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">SL</span></span></strong></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:1px; vertical-align:top; width:22%\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Title</span></span></strong></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:1px; vertical-align:top; width:25%\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Newspaper</span></span></strong></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:1px; vertical-align:top; width:46%\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Link</span></span></strong></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:1px; vertical-align:top; width:5%\">\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">1</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:1px; vertical-align:top; width:22%\"><span style=\"font-size:10.0pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#050505\">Population and Housing Census 2022: The Data We Need for Development</span></span></span></span></td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:1px; vertical-align:top; width:25%\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#050505\">The Daily Sun</span></span></span></span></span></span></p>\r\n\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#050505\">June 19, 2022</span></span></span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:1px; vertical-align:top; width:46%\">\r\n			<p style=\"text-align:center\"><a href=\"https://www.daily-sun.com/printversion/details/627125/Population-and-Housing-Census-2022:-The-Data-We-Need-for-Development?fbclid=IwAR0DCrMTQ6Xu78VVXjMXtbJUpnMR7I24fpfy_o7dUBTAYDf26ZgQDXRGJjM\" target=\"_blank\">See More</a></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Op-eds Published in 2021</span></span></strong></span></span></p>\r\n\r\n<table cellspacing=\"0\" class=\"MsoTableGrid\" style=\"border-collapse:collapse; border:none; width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:1px; vertical-align:top; width:5%\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">SL</span></span></strong></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:1px; vertical-align:top; width:20%\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Title</span></span></strong></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:1px; vertical-align:top; width:27%\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Newspaper</span></span></strong></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; height:1px; vertical-align:top; width:46%\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Link</span></span></strong></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:1px; vertical-align:top; width:5%\">\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">1</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:1px; vertical-align:top; width:20%\">\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#050505\">Why energy poverty needs to be understood from a gender perspective</span></span></span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:1px; vertical-align:top; width:27%\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#050505\">The Business Standard</span></span></span></span></span></span></p>\r\n\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#050505\">July 05, 2021</span></span></span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:1px; vertical-align:top; width:46%\">\r\n			<p style=\"text-align:center\"><a href=\"https://www.tbsnews.net/thoughts/why-energy-poverty-needs-be-understood-gender-perspective-270487\" target=\"_blank\">See More</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:58px; vertical-align:top; width:5%\">\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">2</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:58px; vertical-align:top; width:20%\">\r\n			<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\"><span style=\"color:red\">স্বাস্থ্য</span></span></span> <span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\"><span style=\"color:red\">খাত</span></span></span> <span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\"><span style=\"color:black\">ব্যবস্থাপনায়</span></span></span> <span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\"><span style=\"color:black\">আস্থা</span></span></span> <span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\"><span style=\"color:black\">থাকুক</span></span></span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:58px; vertical-align:top; width:27%\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Samakal</span></span></strong></span></span></p>\r\n\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">May 08, 2021</span></span></strong></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:58px; vertical-align:top; width:46%\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;</span></span></strong></span></span><a href=\"https://samakal.com/editorial-subeditorial/article/210561301\" target=\"_blank\">See More</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:1px; vertical-align:top; width:5%\">\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">3</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:1px; vertical-align:top; width:20%\">\r\n			<h3><span style=\"font-size:13.5pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\"><span style=\"color:#09101f\">Economic Growth In Context Of Energy Consumption</span></span></span></span></span></h3>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:1px; vertical-align:top; width:27%\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">The new nation</span></span></strong></span></span></p>\r\n\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">April 25, 2021</span></span></strong></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:1px; vertical-align:top; width:46%\">\r\n			<p style=\"text-align:center\"><a href=\"https://thedailynewnation.com/news/285648/Economic-Growth-In-Context-Of-Energy-Consumption?fbclid=IwAR1-f51zTdkUKwQPUOFdZlXq68FzMX3PbX83rkCJTosZTe4mLfusFuaCMeE\" target=\"_blank\">See More</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:1px; vertical-align:top; width:5%\">\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">4</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:1px; vertical-align:top; width:20%\">\r\n			<h3><span style=\"font-size:13.5pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\"><span style=\"color:#09101f\">Female education in improving healthcare indicators of Bangladesh: an econometric evidence&nbsp;</span></span></span></span></span></h3>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:1px; vertical-align:top; width:27%\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">The Financial Express</span></span></strong></span></span></p>\r\n\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">December 03, 2021</span></span></strong></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:1px; vertical-align:top; width:46%\">\r\n			<p style=\"text-align:center\"><a href=\"https://thefinancialexpress.com.bd/views/views/female-education-in-improving-healthcare-indicators-of-bangladesh-an-econometric-evidence-1638541376?fbclid=IwAR3Aar4jXaSA5OPpWV-ymZesKfMSEPkaHqnCRaF10eZcWNa0MoZRHlJK1PI\" target=\"_blank\">See More</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:1px; vertical-align:top; width:5%\">\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">5</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:1px; vertical-align:top; width:20%\">\r\n			<h3><span style=\"font-size:13.5pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\"><span style=\"color:#09101f\">Maladies of Climate Driven Displacement and Informal Sector</span></span></span></span></span></h3>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:1px; vertical-align:top; width:27%\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">The Financial Express</span></span></strong></span></span></p>\r\n\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">December 19, 2021</span></span></strong></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:1px; vertical-align:top; width:46%\">\r\n			<p style=\"text-align:center\"><a href=\"https://thefinancialexpress.com.bd/views/maladies-of-climate-driven-displacement-and-informal-sector-1639931380\" target=\"_blank\">See More</a></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 1, 12, 12, NULL, '2022-06-12 08:21:32', '2022-07-20 03:37:41'),
(115, 'VAT Description', NULL, '<p style=\"text-align:center\"><span style=\"font-size:18px\">A&nbsp;<strong>value-added tax</strong>&nbsp;(<strong>VAT</strong>), known in some countries as a&nbsp;<strong>goods and services tax</strong>&nbsp;(<strong>GST</strong>).&nbsp;</span></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/VAT-banner.jpg\" style=\"height:400px; width:848px\" /></p>', 1, 12, 12, NULL, '2022-07-24 06:32:34', '2022-07-24 06:41:03'),
(116, 'VAT Objective', NULL, '<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">To impart VAT knowledge to the VAT officials, consultants, lawyers, managers and executives; </span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">To develop skills of the VAT officials, consultants, lawyers, managers and executives for successful administration of the VAT law; </span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">To create a VAT environment free from evasion and financial irregularities; </span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">To develop a VAT system friendly to business, revenue, investment, industrialization and economic growth.</span></span></span></li>\r\n</ul>', 1, 12, 12, NULL, '2022-07-24 06:34:59', '2022-07-24 06:41:24'),
(117, 'VAT Learning Outcomes', NULL, '<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">To&nbsp;inculcate skills to work efficiently in the area of VAT management of Bangladesh.</span></span></span></li>\r\n</ul>', 1, 12, NULL, NULL, '2022-07-24 06:44:12', '2022-07-24 06:44:12'),
(118, 'Eligibility for Trainees for VAT', NULL, '<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Minimum graduate degree in economics, business, commerce and law; </span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Eligibility can be relaxed for the candidates who have at least 2 (two) years practical work experience in the fields of VAT, audit, post-audit, income tax, bills payable, procurement, supply chain, banking, insurance etc.</span></span></span></li>\r\n</ul>', 1, 12, NULL, NULL, '2022-07-24 06:48:17', '2022-07-24 06:48:17'),
(119, 'Special Notice', NULL, '<p style=\"text-align:center\"><img alt=\"\" src=\"/public/backend/ckeditor_file/files/Admission%202022-23%20Call1-1.jpg\" style=\"height:1200px; width:958px\" /></p>', 1, 12, 12, NULL, '2022-08-07 04:30:07', '2022-09-05 04:39:05'),
(120, 'Strategic Management Objective', NULL, '<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">The &ldquo;Strategic Management&rdquo; course will enable the participants to develop learning tools or methods and a mindset for analyzing the organization&rsquo;s internal and external settings, formulating strategy, and putting it into action. In keeping with this link, strategy in the public and private sectors is primarily concerned with strategic planning, formulation, execution, assessment and monitoring activities. Thus, the purpose of this Strategic Management course is to equip the participants with both theoretical and practical knowledge about strategic management. Usually strategic management focuses more on long term and medium term strategies. So, the strategic management course will go through following steps:</span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Process:</strong></span></span>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Participants will be able to comprehend the strategic management process, as well as the impact of the changing organizational culture and internalization on it.</span></span></li>\r\n	</ul>\r\n	</li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Principle:</strong></span></span>\r\n	<ul style=\"list-style-type:circle\">\r\n		<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Expose participants with a solid understanding of strategic management principles and tools.</span></span></li>\r\n	</ul>\r\n	</li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Experience:</strong></span></span>\r\n	<ul style=\"list-style-type:circle\">\r\n		<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Provide participants with an opportunity to assess public and private sector experience in developing and implementing strategies</span></span></li>\r\n	</ul>\r\n	</li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Skills:</strong></span></span>\r\n	<ul style=\"list-style-type:circle\">\r\n		<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Facilitate participants&rsquo; understanding of leadership competencies, organizational change, and team management through the effective use of strategic tools and procedures.</span></span></li>\r\n	</ul>\r\n	</li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Turnaround:</strong></span></span>\r\n	<ul style=\"list-style-type:circle\">\r\n		<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Exposure to elevated negotiations, resolving significant disputes, negotiating complex agreements, or identifying Strategic Turnaround Leadership.</span></span></li>\r\n	</ul>\r\n	</li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Experiments:</strong></span></span>\r\n	<ul style=\"list-style-type:circle\">\r\n		<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Through various case studies resolving conflicts, negotiating difficult discussions, or learning about Strategic Turnaround Leadership</span></span></li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>After completion of the course, the participants will be able to:</strong></span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Make a link between policy formulation and policy implementation from the point of view of Strategic Management.</span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Develop an effective strategy for achieving organizational goals through the process of decision making and planning.</span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Apply the strategic management concepts, theories, analytical tools and techniques practically over the operational environment of plan/policy implementation and monitor, evaluate and re-strategies the whole process, if necessary for effective and efficient implementation.</span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Manage resources for strategic performances, specifically, to integrate the different cross-functional areas of organizations (e.g. finance, human resources, information systems, marketing, operations, management etc.) into a chosive whole to get the optimal output and outcome.</span></span></li>\r\n</ul>', 1, 12, NULL, NULL, '2022-09-03 02:24:38', '2022-09-03 02:24:38'),
(121, 'Strategic Management Outcomes', NULL, '<ul>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Course Duration</strong></span></span>\r\n	<ul style=\"list-style-type:circle\">\r\n		<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">The length of the Strategic Management Course is three weeks (15 days). The sessions are held on all weekdays except government holidays. However, a session may held on the weekend depending on the necessity. Participation of the trainees in all activities are mandatory during training.</span></span></li>\r\n	</ul>\r\n	</li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Resource Persons/Facilitators</strong></span></span>\r\n	<ul style=\"list-style-type:circle\">\r\n		<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Drawn from the academia, universities, research institutes, government and private sectors as well as the judiciary, law and enforcement and defense services, development partners and NGO sectors.</span></span></li>\r\n	</ul>\r\n	</li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Sessions</strong></span></span>\r\n	<ul style=\"list-style-type:circle\">\r\n		<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Maximum 4 sessions a day.</span></span></li>\r\n	</ul>\r\n	</li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Lecture Duration</strong></span></span>\r\n	<ul style=\"list-style-type:circle\">\r\n		<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Each session will be one and a half hour long.</span></span></li>\r\n	</ul>\r\n	</li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Class Size</strong></span></span>\r\n	<ul style=\"list-style-type:circle\">\r\n		<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Number of participants per batch &ndash; 30</span></span></li>\r\n	</ul>\r\n	</li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Quality &amp; Monitoring</strong></span></span>\r\n	<ul style=\"list-style-type:circle\">\r\n		<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Training materials and the contents will be uploaded regularly based on feedback from trainees, trainers and subject matter experts. Additionally, the Training Management Committee and Project Standing Committee will play a very vital role in assuring the program&rsquo;s overall excellence.</span></span></li>\r\n	</ul>\r\n	</li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Training Details and Instruction Format</strong></span></span>\r\n	<ul style=\"list-style-type:circle\">\r\n		<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">There will be six (6) modules over the course of three weeks; there will be a total of fifty sessions for three weeks. Each module will contain roughly 7-10 lectures.</span></span></li>\r\n		<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">The class will be conducted five days a week (Saturday-Wednesday). The morning session will begin at 9:00 a.m. with a 30 minute tea break between the two sessions before lunch. The afternoon session will start at 1:30 p.m. with a 15 minute tea break between two sessions. Library and IT attachment will be a part of the training.</span></span></li>\r\n		<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Participants will receive Transportation Allowances (TAs) only for attending the training days.</span></span></li>\r\n		<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">The medium of instructions of the course is English. The institute encourages the participants to develop their oral and written skills in English through practicing inside and outside the classroom. More importantly, all assignments, both group and individual presentations, will be in English.</span></span></li>\r\n		<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">The institutions will provide adequate reading materials, handouts, and stationary items.</span></span></li>\r\n	</ul>\r\n	</li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Assessment of the Trainees</strong></span></span>\r\n	<ul style=\"list-style-type:circle\">\r\n		<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">For the Strategic Management Course, trainees are expected to develop a strategic plan for his/her organization and submit it as his/her term paper which will be the basis of evaluation/assessment for their performance in the training program. There will be no other written or oral test, although trainees will remain under close observation of the program management throughout the course period.</span></span></li>\r\n	</ul>\r\n	</li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Course Management Team (CMT)</strong></span></span>\r\n	<ul style=\"list-style-type:circle\">\r\n		<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">The course management team comprises of Program Director, Deputy Program Director, Training Coordinator from BIGM, Officer (Finance), Officer (Administrator) and other support stuff of Project Implementation Unit (PIU). The program Director manages each activity of the course along with other members of CMT, and the Director of BIGM guides the whole work. The participants are encouraged to share any feedback with CMT to ensure quality training.</span></span></li>\r\n	</ul>\r\n	</li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>Food/Meals</strong></span></span>\r\n	<ul style=\"list-style-type:circle\">\r\n		<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Meals are arranged for participants through the course management team. The participants will take their snacks, lunch and afternoon tea within the scheduled time at the specified dining room/cafeteria. CMT is responsible for maintaining the overall quality of meals served to the participants.</span></span></li>\r\n	</ul>\r\n	</li>\r\n</ul>', 1, 12, 12, NULL, '2022-09-03 02:28:30', '2022-09-03 02:33:56'),
(122, 'Strategic Management Target Audience', NULL, '<ul>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Executives from public and private sectors and NGOs with a Master&rsquo;s Degree from recognized universities and a minimum of 10 years work experience demonstrating sound knowledge of laws, regulations, strategic planning, and policies in the 30-52 age group.</span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Of the participants, 70% will be from the public sector and 30% from NGOs and other private sectors. At least 30% pf the participants are expected to be female.</span></span></li>\r\n</ul>', 1, 12, NULL, NULL, '2022-09-03 02:31:07', '2022-09-03 02:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `menu_routes`
--

CREATE TABLE `menu_routes` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_routes`
--

INSERT INTO `menu_routes` (`id`, `menu_id`, `name`, `sort`, `route`, `status`, `created_at`, `updated_at`) VALUES
(2, 21, 'add_button', NULL, 'project-management.resource.add-button', 1, NULL, NULL),
(3, 21, 'present_address', NULL, 'project-management.resource.present-address', 1, NULL, NULL),
(4, 21, 'permanent_address', NULL, 'project-management.resource.permanent-address', 1, NULL, NULL),
(5, 21, 'designation', NULL, 'project-management.resource.designation', 1, NULL, NULL),
(6, 21, 'contact', NULL, 'project-management.resource.contact', 1, NULL, NULL),
(7, 21, 'action', NULL, 'project-management.resource.action', 1, NULL, NULL),
(9, 17, 'working_hour', NULL, 'project-management.evaluation.view.working-hour', 1, NULL, NULL),
(10, 17, 'expected_time', NULL, 'project-management.evaluation.view.expected-time', 1, NULL, NULL),
(11, 17, 'Action', NULL, 'project-management.evaluation.view.action', 1, NULL, NULL),
(12, 17, 'View_Button', NULL, 'project-management.evaluation.view.button', 1, NULL, NULL),
(13, 17, 'Update_Button', NULL, 'project-management.evaluation.view.upddate-button', 1, NULL, NULL),
(14, 19, 'Action', NULL, 'project-management.task.assign.action', 1, NULL, NULL),
(15, 19, 'View_Button', NULL, 'project-management.task.assign.view-button', 1, NULL, NULL),
(16, 19, 'save-update-button', NULL, 'project-management.task.assign.save-button', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_01_090751_create_site_settings_table', 1),
(4, '2019_10_26_132331_create_roles_table', 1),
(5, '2019_11_24_052055_create_sliders_table', 1),
(6, '2019_11_24_085838_create_abouts_table', 1),
(7, '2019_11_24_111027_create_teachers_table', 1),
(8, '2019_12_01_102844_create_department_heads_table', 1),
(9, '2019_12_02_044635_create_notices_table', 1),
(10, '2019_12_02_062512_create_menu_posts_table', 1),
(11, '2019_12_02_062605_create_frontend_menus_table', 1),
(12, '2019_12_02_065958_create_galleries_table', 1),
(13, '2019_12_02_092424_create_news_table', 1),
(14, '2019_12_04_100506_create_researches_table', 1),
(15, '2019_12_04_111219_create_banners_table', 1),
(16, '2019_12_09_062934_create_designations_table', 1),
(17, '2019_12_17_064301_create_follow_us_table', 1),
(18, '2020_01_19_111936_create_contact_us_table', 1),
(19, '2020_01_21_045014_add_description_to_teachers_table', 1),
(20, '2020_01_22_045627_create_contact_messages_table', 1),
(21, '2020_02_03_083801_add_scholar_url_to_teachers_table', 1),
(22, '2021_07_25_122107_create_useful_links_table', 2),
(23, '2021_07_26_063025_create_quick_links_table', 2),
(24, '2021_07_26_070015_create_for_students_table', 2),
(25, '2021_07_26_101411_create_get_in_touches_table', 2),
(26, '2021_07_26_112344_create_fast_services_table', 2),
(27, '2021_07_27_054420_create_features_table', 2),
(28, '2021_07_27_094941_create_training_enrolls_table', 2),
(29, '2021_07_27_114229_create_alumnies_table', 2),
(30, '2021_07_28_053126_create_student_feedbacks_table', 2),
(31, '2021_08_04_104200_create_locations_table', 3),
(32, '2021_08_05_102921_create_video_galleries_table', 3),
(33, '2021_08_05_115727_create_phot_gallery_images', 3),
(34, '2021_08_05_115842_create_photo_galleries', 3),
(35, '2021_08_08_061736_create_careers_table', 3),
(36, '2021_08_11_045920_create_members_table', 3),
(37, '2021_08_11_100616_create_member_educations_table', 3),
(38, '2021_08_11_100808_create_member_experiences_table', 3),
(39, '2021_08_11_123726_create_board_of_trustees_table', 3),
(40, '2021_08_11_123839_create_governing_body_table', 3),
(41, '2021_08_24_183418_create_program_infos_table', 4),
(42, '2021_08_24_183449_create_course_infos_table', 4),
(43, '2021_08_25_050816_create_designations_table', 5),
(44, '2021_08_25_052530_create_faculty_types_table', 6),
(45, '2021_08_25_053602_create_member_to_courses_table', 5),
(46, '2021_09_01_110353_add_designation_work_place_to_members_table', 7),
(47, '2021_09_02_070441_add_program_info_id_and_course_info_id_to_news_table', 7),
(48, '2021_09_13_060509_create_add_display_on_scrollbar_column_to_news_table', 8),
(49, '2021_09_13_073854_add_long_description_on_partnerships_table', 8),
(50, '2021_09_13_110101_add_image_column_to_offers_table', 8),
(51, '2021_09_14_105626_create_social_media_links_table', 100),
(52, '2021_09_15_110445_create_member_administrative_experiences_table', 101),
(53, '2021_09_16_102733_create_member_area_of_interests_table', 101),
(54, '2021_09_19_095004_create_member_honor_awards_table', 102),
(55, '2021_09_19_114130_create_member_scholarships_table', 102),
(56, '2021_09_20_044326_create_member_professional_responsibilities_table', 102),
(57, '2021_09_20_062448_create_member_project_accomplishments_table', 102),
(58, '2021_09_20_102518_create_member_training_accomplishments_table', 102),
(59, '2021_09_21_045556_create_member_certification_accomplishments_table', 102),
(60, '2021_09_21_063359_create_member_publication_books_table', 102),
(61, '2021_09_21_092500_create_member_publication_journals_table', 102),
(62, '2021_09_22_043703_create_member_conferences_table', 102),
(63, '2021_09_26_071708_add_training_url_column_to_training_enrolls_table', 103),
(64, '2021_09_28_043506_create_counter_boxes_table', 104),
(65, '2021_09_28_071147_create_teacher_advisors_table', 104),
(66, '2021_09_29_065104_create_member_taught_courses_table', 105),
(67, '2021_09_29_074229_create_member_languages_table', 105),
(68, '2021_09_29_113436_create_member_social_welfares_table', 105),
(69, '2021_10_04_113120_add_url_to_offers_table', 106),
(70, '2021_10_05_050813_add_education_to_year_to_member_educations', 107),
(71, '2021_10_05_064805_add_long_description_to_student_feedbacks', 107),
(72, '2021_10_07_063812_create_member_to_employees_table', 107),
(73, '2021_10_12_053608_add_member_id_column_to_users_table', 108),
(74, '2021_10_13_053429_create_departments_table', 108),
(75, '2021_10_13_053619_create_projects_table', 108),
(76, '2021_10_13_063211_add_new_4_columns_to_member_to_employees', 108),
(77, '2021_10_24_055439_create_slider_videos', 109),
(78, '2021_10_27_053509_add_opacity_column_to_slider_videos_table', 110),
(79, '2021_10_27_062314_add_show_description_column_to_sliders_table', 110),
(80, '2021_10_31_042803_add_sort_order_to_partnerships_table', 110),
(81, '2021_10_31_044904_add_sort_order_to_offers_table', 110),
(82, '2021_10_31_051556_add_sort_order_to_features_table', 110),
(83, '2021_10_31_053934_add_sort_order_to_training_enrolls_table', 110),
(84, '2021_10_31_060022_add_sort_order_to_facilities_table', 110),
(85, '2021_10_31_065450_add_sort_order_and_status_to_facilities_table', 110),
(86, '2021_10_31_105406_add_statuses_columns_to_social_media_links_table', 110),
(87, '2021_11_01_112239_add_sort_order_to_student_feedbacks_table', 110),
(88, '2021_11_02_070252_create_table_taglines', 110),
(89, '2021_11_03_061329_add_status_column_to_photo_galleries_table', 110),
(90, '2021_11_03_071730_add_status_column_to_video_galleries_table', 110),
(91, '2021_11_03_113635_add_url_to_features_table', 111),
(92, '2021_11_04_052550_create_office_orders_table', 111),
(93, '2021_11_04_060640_create_office_order_attachments_table', 111),
(94, '2021_11_07_072139_create_offer_background_videos_table', 112),
(95, '2021_11_17_094633_add_offer_video_to_offer_background_videos_table', 113),
(96, '2021_11_22_043020_add_column_url_link_type_in_useful_links_table', 114),
(97, '2021_11_22_111337_add_column_url_link_type_in_quick_links_table', 115),
(98, '2021_11_23_051552_add_column_url_link_type_in_for_students_table', 116),
(99, '2021_11_23_065138_add_column_url_link_type_in_get_in_touches_table', 116),
(100, '2021_11_23_072118_add_column_url_link_type_in_fast_services_table', 116),
(101, '2021_11_23_111558_add_column_url_link_type_in_offers_table', 116),
(102, '2021_11_24_045255_add_column_url_link_type_in_features_table', 117),
(103, '2021_11_24_060929_add_column_url_link_type_in_training_enrolls_table', 117),
(104, '2021_11_25_071633_create_training_backgrounds_table', 118),
(105, '2021_11_25_101041_create_counter_backgrounds_table', 118),
(106, '2021_11_25_104430_create_feedback_backgrounds_table', 118),
(107, '2021_11_25_105833_create_alumni_backgrounds_table', 118);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `program_info_id` bigint(20) UNSIGNED DEFAULT NULL,
  `course_info_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `long_description` text COLLATE utf8mb4_unicode_ci,
  `type` int(11) NOT NULL COMMENT '1=news,2=event,3=notice,4=general,5=special,6=tender',
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `display_on_scrollbar` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `long_description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_url` longtext COLLATE utf8mb4_unicode_ci,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url_link_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offer_background_videos`
--

CREATE TABLE `offer_background_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `youtube_link` longtext COLLATE utf8mb4_unicode_ci,
  `offer_video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `office_orders`
--

CREATE TABLE `office_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `office_order_attachments`
--

CREATE TABLE `office_order_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `office_order_id` bigint(20) UNSIGNED NOT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ongoing_researches`
--

CREATE TABLE `ongoing_researches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` text COLLATE utf8mb4_unicode_ci,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `area_of_research` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ongoing_trainings`
--

CREATE TABLE `ongoing_trainings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resource_persons` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `opeds`
--

CREATE TABLE `opeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `author_name` text COLLATE utf8mb4_unicode_ci,
  `newspaper_name` text COLLATE utf8mb4_unicode_ci,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_campuses`
--

CREATE TABLE `our_campuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `sort_order` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_developments`
--

CREATE TABLE `our_developments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `sort_order` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_libraries`
--

CREATE TABLE `our_libraries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `sort_order` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_researches`
--

CREATE TABLE `our_researches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `sort_order` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partnerships`
--

CREATE TABLE `partnerships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `long_description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo_galleries`
--

CREATE TABLE `photo_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `publish_date` date DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo_gallery_images`
--

CREATE TABLE `photo_gallery_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo_gallery_id` bigint(20) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `program_infos`
--

CREATE TABLE `program_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quick_links`
--

CREATE TABLE `quick_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `link` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url_link_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `researches`
--

CREATE TABLE `researches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research_backgrounds`
--

CREATE TABLE `research_backgrounds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_status` tinyint(4) DEFAULT NULL,
  `show_section` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `role_slug` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `role_slug`, `status`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, 'Developer', NULL, 'pIAuxT', 1, NULL, NULL, NULL, NULL, '2019-11-12 00:55:21', '2019-11-12 00:55:21'),
(2, 'Admin', NULL, 'WTle2y', 1, NULL, NULL, NULL, NULL, '2019-11-11 23:37:38', '2021-07-07 14:28:33'),
(3, 'Moderator', NULL, 'U1BTEj', 1, NULL, NULL, NULL, NULL, '2019-11-14 05:32:17', '2019-11-14 05:32:17'),
(4, 'Member', 'Members who can change their Profile', NULL, 1, NULL, NULL, NULL, NULL, '2021-08-24 08:34:51', '2021-10-06 16:11:41'),
(5, 'Librarian', NULL, NULL, 1, NULL, NULL, NULL, NULL, '2022-02-03 03:55:29', '2022-02-03 03:55:29'),
(6, 'SEIP', NULL, NULL, 1, NULL, NULL, NULL, NULL, '2022-05-25 04:13:47', '2022-05-25 04:13:47'),
(7, 'Offer & Acitivity', NULL, NULL, 1, NULL, NULL, NULL, NULL, '2022-05-30 05:28:13', '2022-05-30 05:28:13');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci,
  `site_title` text COLLATE utf8mb4_unicode_ci,
  `site_title_bn` text COLLATE utf8mb4_unicode_ci,
  `site_short_description` text COLLATE utf8mb4_unicode_ci,
  `site_short_description_bn` text COLLATE utf8mb4_unicode_ci,
  `site_header_logo` text COLLATE utf8mb4_unicode_ci,
  `site_footer_logo` text COLLATE utf8mb4_unicode_ci,
  `site_favicon` text COLLATE utf8mb4_unicode_ci,
  `site_banner_image` text COLLATE utf8mb4_unicode_ci,
  `site_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_phone_primary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_phone_secondary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_address` text COLLATE utf8mb4_unicode_ci,
  `mail_driver` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_host` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_port` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_encryption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` text COLLATE utf8mb4_unicode_ci,
  `twitter_url` text COLLATE utf8mb4_unicode_ci,
  `google_plus_url` text COLLATE utf8mb4_unicode_ci,
  `linkedin_url` text COLLATE utf8mb4_unicode_ci,
  `youtube_url` text COLLATE utf8mb4_unicode_ci,
  `instagram_url` text COLLATE utf8mb4_unicode_ci,
  `pinterest_url` text COLLATE utf8mb4_unicode_ci,
  `tumblr_url` text COLLATE utf8mb4_unicode_ci,
  `flickr_url` text COLLATE utf8mb4_unicode_ci,
  `recaptcha_key` text COLLATE utf8mb4_unicode_ci,
  `recaptcha_secret` text COLLATE utf8mb4_unicode_ci,
  `facebook_key` text COLLATE utf8mb4_unicode_ci,
  `facebook_secret` text COLLATE utf8mb4_unicode_ci,
  `twitter_key` text COLLATE utf8mb4_unicode_ci,
  `twitter_secret` text COLLATE utf8mb4_unicode_ci,
  `google_plus_key` text COLLATE utf8mb4_unicode_ci,
  `google_plus_secret` text COLLATE utf8mb4_unicode_ci,
  `google_map_api` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_width` text COLLATE utf8mb4_unicode_ci,
  `image_height` text COLLATE utf8mb4_unicode_ci,
  `image_size` text COLLATE utf8mb4_unicode_ci,
  `file_type` text COLLATE utf8mb4_unicode_ci,
  `notification_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = toastr; 2 = sweetalert; 3 = notifyjs',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `company_name`, `site_title`, `site_title_bn`, `site_short_description`, `site_short_description_bn`, `site_header_logo`, `site_footer_logo`, `site_favicon`, `site_banner_image`, `site_email`, `site_phone_primary`, `site_phone_secondary`, `site_address`, `mail_driver`, `mail_host`, `mail_port`, `mail_username`, `mail_password`, `mail_encryption`, `facebook_url`, `twitter_url`, `google_plus_url`, `linkedin_url`, `youtube_url`, `instagram_url`, `pinterest_url`, `tumblr_url`, `flickr_url`, `recaptcha_key`, `recaptcha_secret`, `facebook_key`, `facebook_secret`, `twitter_key`, `twitter_secret`, `google_plus_key`, `google_plus_secret`, `google_map_api`, `image_width`, `image_height`, `image_size`, `file_type`, `notification_type`, `created_at`, `updated_at`) VALUES
(1, 'Best CNC Limited', 'PROFESSIONAL CNC ROUTER MACHINE MANUFACTURER IN BANGLADESH', 'প্রফেশনাল সিএনসি রুটার মেশিন ম্যানুফ্যাকচারার বাংলাদেশ', '<p><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; text-align: center;\">Best CNC is a Bangladesh manufacturer of ATC CNC Router, Wood CNC Router, Woodworking Carving Machine, Wood Engraving Machine, CNC Laser Cutter, CNC Plasma Cutter. Our CNC Routers are specialized for materials such as Woods, Plastics, Aluminum, Copper, Stone. If there is a need of advices or more details, please come to us. Thanks for visiting.</span><br></p>', '<p><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; text-align: center;\">বেস্ট সিএনসি হ\'ল এটিসি সিএনসি রাউটার, উড সিএনসি রাউটার, উড ওয়ার্কিং কারভিং মেশিন, উড এনগ্রাভিং মেশিন, সিএনসি লেজার কাটার, সিএনসি প্লাজমা কাটারের একটি বাংলাদেশী প্রস্তুতকারক। আমাদের সিএনসি রাউটারগুলি উডস, প্লাস্টিক, অ্যালুমিনিয়াম, কপার, স্টোন জাতীয় উপকরণগুলির জন্য বিশেষীকরণযোগ্য। যদি পরামর্শ বা আরও বিশদ প্রয়োজন হয় তবে দয়া করে আমাদের কাছে আসুন। পরিদর্শনের জন্য ধন্যবাদ.</span><br></p>', '20190821_1566385367712.png', '20190821_1566385399772.png', '20190821_1566373763949.jpg', '20190821_1566373763367.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1920', '500', '500', 'jpeg|png|jpg|gif', 1, NULL, '2019-08-21 05:52:58');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `show_description` tinyint(4) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider_videos`
--

CREATE TABLE `slider_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_video` tinyint(4) DEFAULT NULL,
  `opacity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_media_links`
--

CREATE TABLE `social_media_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook_link` longtext COLLATE utf8mb4_unicode_ci,
  `facebook_status` tinyint(4) DEFAULT NULL,
  `twitter_link` longtext COLLATE utf8mb4_unicode_ci,
  `twitter_status` tinyint(4) DEFAULT NULL,
  `instagram_link` longtext COLLATE utf8mb4_unicode_ci,
  `instagram_status` tinyint(4) DEFAULT NULL,
  `linkedin_link` longtext COLLATE utf8mb4_unicode_ci,
  `linkedin_status` tinyint(4) DEFAULT NULL,
  `youtube_link` longtext COLLATE utf8mb4_unicode_ci,
  `youtube_status` tinyint(4) DEFAULT NULL,
  `whatsapp_link` longtext COLLATE utf8mb4_unicode_ci,
  `whatsapp_status` tinyint(4) DEFAULT NULL,
  `pinterest_link` longtext COLLATE utf8mb4_unicode_ci,
  `pinterest_status` tinyint(4) DEFAULT NULL,
  `mail_link` longtext COLLATE utf8mb4_unicode_ci,
  `mail_status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_feedbacks`
--

CREATE TABLE `student_feedbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `long_description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taglines`
--

CREATE TABLE `taglines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_line_first_part` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_line_second_part` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_line_first_part` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_line_second_part` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faculty_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation_id` tinyint(4) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `award` text COLLATE utf8mb4_unicode_ci,
  `publication` text COLLATE utf8mb4_unicode_ci,
  `patent` text COLLATE utf8mb4_unicode_ci,
  `research` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `room` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scholar_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googleplus_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_advisors`
--

CREATE TABLE `teacher_advisors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `training_backgrounds`
--

CREATE TABLE `training_backgrounds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `training_enrolls`
--

CREATE TABLE `training_enrolls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `training_url` longtext COLLATE utf8mb4_unicode_ci,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url_link_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_trainings`
--

CREATE TABLE `upcoming_trainings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resource_persons` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `useful_links`
--

CREATE TABLE `useful_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `link` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url_link_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` datetime(6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `image`, `status`, `remember_token`, `deleted_at`, `created_at`, `updated_at`, `member_id`) VALUES
(1, 'Developer', NULL, 'developer@mail.com', NULL, '$2y$10$nIPILZFJi.RcO7V1LBor8eOG2VVRES.ZaZ9oiD4ywqb9IfL8J2YJC', NULL, 1, 'Xx1nOmeWw7fux3ijSmRRnrZiHv3xFagDfpkeEUDpJKVs9KY8zhGsgIu8UYHU', NULL, NULL, '2019-11-16 21:18:03', NULL),
(2, 'Admin', NULL, 'admin@mail.com', NULL, '$2y$10$rF7XucfcAT6Dbq059Y8cFuLVA4tOJrNWR9lqcVKtfMAXubK9n5Eey', NULL, 1, 'hoRzEmvJFvyffho367gWkto27RK8C6NgYYTJvSFqb5JgjTxaVgTAYcuQmUKk', NULL, NULL, '2022-09-07 04:27:47', NULL),
(3, 'Shafiuddin Haider', NULL, 'nanoit.shafi@gmail.com', NULL, '$2y$10$x9r.pLwc3oS4eJ/QkpPTfOr3doaZ0mHlr3JpBh61W8JLYb7vsYk02', '8d082e5263dc88503164ea137bcb4b59.jpg', 1, NULL, NULL, '2021-07-07 14:13:23', '2022-08-17 03:35:55', NULL),
(4, 'Moderator', NULL, 'moderator@gmail.com', NULL, '$2y$10$0I1bb5ukfVi/LOKO7MWhje7db3EkKV4xi44yOJHPod6j0iJA/Q4oS', NULL, 1, 'f2JOYNZVSvkyQ2H0D6zY18rY3DnRGJiS35VBPAu0oVOSs8FFYgnXtKGduHQw', NULL, '2021-09-01 12:38:22', '2021-10-21 07:55:02', NULL),
(6, 'Dr. Mohammad Tareque', NULL, 'mtareque03@gmail.com', NULL, '$2y$10$FxHvEEelqkRNfTmw8OpsjeHf9gCIhIvz94XeyWZfOXE2h64GTc2eu', NULL, 1, NULL, NULL, '2021-10-19 10:34:35', '2022-05-30 06:16:36', 45),
(7, 'Dr. Muhammad Golam Sarwar', NULL, 'golam.sarwar@bigm.edu.bd', NULL, '$2y$10$JDe9tAGaSp8smFqVYKqIiO8IJRdQO55pOemBMSCdj53yeKweJyWWS', NULL, 1, NULL, NULL, '2021-10-21 14:06:09', '2022-07-27 03:25:27', 66),
(8, 'Sha Jahan', NULL, 'sha.jahan@bigm.edu.bd', NULL, '$2y$10$Kby3fGjXxAfhnemdptz.3uhF95v/2FV3JD9SrxgX3IU5N56hO/Liq', NULL, 1, NULL, NULL, '2021-10-24 12:34:25', '2022-03-25 13:03:16', NULL),
(9, 'Dr. Md. Moniruzzaman', NULL, 'mzaman65@gmail.com', NULL, '$2y$10$.e9i6/I.1xcepUBHjBi.4.99PaXPuZvlN1iBpXB8nQ9eFZKERmUSq', NULL, 1, NULL, NULL, '2021-11-25 17:17:24', '2022-03-25 13:02:31', 65),
(10, 'Dr. Mohammad Tareque', NULL, 'mohammad.tareque@bigm.edu.bd', NULL, '$2y$10$jSec/KIFj1ncw4chkfgCx.qgohfJLyLL2fnld5KfHsh8zTBX1f0NW', 'f56bfc7b1c761d42c1161c484084dd96.jpg', 1, NULL, NULL, '2022-02-02 04:04:36', '2022-03-25 13:01:52', NULL),
(11, 'Munshi Muhammad Abdul Kader Jilani', NULL, 'mmakjilani@bigm.edu.bd', NULL, '$2y$10$7UJGzg5lnPI1TTD/b8.1aeNa6kL6Sd.LL5DyK07soIvYz4yYcDNPO', NULL, 1, NULL, NULL, '2022-02-03 03:48:56', '2022-02-03 03:48:56', 79),
(12, 'Al Amin', NULL, 'alamin@bigm.edu.bd', NULL, '$2y$10$Yj1uWdSbHIWwMCafrmVhC.21FnCLpUYMkBgC3B9aFTcdttgQbNNta', '5eff3c6cec14322a71f7479c9ea47c49.jpg', 1, '7LynTk9ORGNISOqHQ9I0IoIWDUF4Zjv4k8Rw9oFZvcAINMTDKE1kGCBLrLeX', NULL, '2022-05-11 10:59:24', '2022-06-20 05:15:06', NULL),
(13, 'Md .Mahmudul Haque Khan', NULL, 'mahmudul.haque@bigm.edu.bd', NULL, '$2y$10$l1OJ7mh2J804jvZcDNXuau9f9Tfv7nsvroeJGceptaoGhbE1TvDEq', 'e1db5d379c430e083dd31e9b06f545b3.jpg', 1, 'MnRf5fsISIypPAwYnDLHXQLGKWmoAE7wbGCccWDpgn3isQOru48qKzXe2lJ6', NULL, '2022-05-11 11:00:21', '2022-05-21 10:38:28', NULL),
(14, 'Tarique Ahmad Halim', NULL, 'tarique.ahmad@bigm.edu.bd', NULL, '$2y$10$xLAk7v0/OfB10BNVcGcFjOW897E//v7dlITfxUuEXpfLuJykXJjNu', NULL, 1, NULL, NULL, '2022-06-05 11:00:50', '2022-06-05 11:00:50', 90),
(15, 'Dr. Krishna Gayen', NULL, 'krishna.gayen@bigm.edu.bd', NULL, '$2y$10$SKaQxuQApZTLL/ctaeMS1.HoRSrGIDxsvsQfBqEiyhQdS5P4SkJE2', NULL, 1, NULL, NULL, '2022-07-27 03:18:45', '2022-07-27 03:18:45', 70),
(16, 'Dr Sultan Ahmed', NULL, 'sultan.ahmed@bigm.edu.bd', NULL, '$2y$10$t4a5TFDPlywM7UUvi19PN.7BlbFBpA7wpTXS7BBGJWS18oyl/MPZK', NULL, 1, 'nGR1TLrvo4IyKtZrLjklHgIJFvJ8QrPBTBIDpMeLXRdBHcHCTX0AnCy6YhmB', NULL, '2022-07-27 03:22:42', '2022-07-27 03:22:42', 136),
(17, 'Dr. Md. Abdur Rahim Khan', NULL, 'rahimkhan066@gmail.com', NULL, '$2y$10$bN4BfFNv7EkU9AibztKJ9umkh2HYdEeljvgIFKkiNgAHPSjr3p0GS', NULL, 1, NULL, NULL, '2022-07-27 03:26:49', '2022-07-27 03:26:49', 71);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(5, 5, 4, '2021-10-17 14:48:11', '2021-10-17 14:48:11'),
(9, 4, 3, '2021-10-21 07:55:02', '2021-10-21 07:55:02'),
(17, 11, 4, '2022-02-03 03:48:56', '2022-02-03 03:48:56'),
(19, 2, 2, '2022-03-25 12:58:34', '2022-03-25 12:58:34'),
(23, 10, 3, '2022-03-25 13:01:52', '2022-03-25 13:01:52'),
(24, 9, 4, '2022-03-25 13:02:31', '2022-03-25 13:02:31'),
(25, 8, 4, '2022-03-25 13:03:16', '2022-03-25 13:03:16'),
(30, 13, 2, '2022-05-21 10:38:28', '2022-05-21 10:38:28'),
(31, 6, 4, '2022-05-30 06:16:36', '2022-05-30 06:16:36'),
(34, 14, 4, '2022-06-20 05:08:57', '2022-06-20 05:08:57'),
(35, 14, 5, '2022-06-20 05:08:57', '2022-06-20 05:08:57'),
(36, 12, 2, '2022-06-20 05:15:06', '2022-06-20 05:15:06'),
(37, 15, 4, '2022-07-27 03:18:45', '2022-07-27 03:18:45'),
(38, 16, 4, '2022-07-27 03:22:42', '2022-07-27 03:22:42'),
(39, 7, 4, '2022-07-27 03:25:27', '2022-07-27 03:25:27'),
(40, 17, 4, '2022-07-27 03:26:49', '2022-07-27 03:26:49'),
(42, 3, 2, '2022-08-17 03:35:55', '2022-08-17 03:35:55');

-- --------------------------------------------------------

--
-- Table structure for table `video_galleries`
--

CREATE TABLE `video_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `youtube_link` longtext COLLATE utf8mb4_unicode_ci,
  `publish_date` date DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advisors`
--
ALTER TABLE `advisors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumnies`
--
ALTER TABLE `alumnies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni_backgrounds`
--
ALTER TABLE `alumni_backgrounds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ask_librarians`
--
ALTER TABLE `ask_librarians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_posts_category_id_foreign` (`category_id`),
  ADD KEY `blog_posts_blog_user_id_foreign` (`blog_user_id`);

--
-- Indexes for table `blog_post_views`
--
ALTER TABLE `blog_post_views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_post_views_blog_post_id_foreign` (`blog_post_id`),
  ADD KEY `blog_post_views_blog_user_id_foreign` (`blog_user_id`);

--
-- Indexes for table `blog_users`
--
ALTER TABLE `blog_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_users_email_unique` (`email`);

--
-- Indexes for table `board_of_trustees`
--
ALTER TABLE `board_of_trustees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `board_of_trustees_member_id_foreign` (`member_id`);

--
-- Indexes for table `books_publications`
--
ALTER TABLE `books_publications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `library_subject_id` (`library_subject_id`);

--
-- Indexes for table `campus_backgrounds`
--
ALTER TABLE `campus_backgrounds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `completed_researches`
--
ALTER TABLE `completed_researches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `control_top_left_menus`
--
ALTER TABLE `control_top_left_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter_backgrounds`
--
ALTER TABLE `counter_backgrounds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter_boxes`
--
ALTER TABLE `counter_boxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_infos`
--
ALTER TABLE `course_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_infos_program_info_id_foreign` (`program_info_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_heads`
--
ALTER TABLE `department_heads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `development_backgrounds`
--
ALTER TABLE `development_backgrounds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_types`
--
ALTER TABLE `faculty_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fast_services`
--
ALTER TABLE `fast_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_backgrounds`
--
ALTER TABLE `feedback_backgrounds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow_us`
--
ALTER TABLE `follow_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `for_students`
--
ALTER TABLE `for_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontend_menus`
--
ALTER TABLE `frontend_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `get_in_touches`
--
ALTER TABLE `get_in_touches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `governing_body`
--
ALTER TABLE `governing_body`
  ADD PRIMARY KEY (`id`),
  ADD KEY `governing_body_member_id_foreign` (`member_id`);

--
-- Indexes for table `home_links`
--
ALTER TABLE `home_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institute_details`
--
ALTER TABLE `institute_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal_papers`
--
ALTER TABLE `journal_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_backgrounds`
--
ALTER TABLE `library_backgrounds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_news`
--
ALTER TABLE `library_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_sliders`
--
ALTER TABLE `library_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_subjects`
--
ALTER TABLE `library_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_time_schedules`
--
ALTER TABLE `library_time_schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like_counts`
--
ALTER TABLE `like_counts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membereducations`
--
ALTER TABLE `membereducations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `membereducations_member_id_foreign` (`member_id`);

--
-- Indexes for table `memberexperiences`
--
ALTER TABLE `memberexperiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `memberexperiences_member_id_foreign` (`member_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_administrative_experiences`
--
ALTER TABLE `member_administrative_experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_administrative_experiences_member_id_foreign` (`member_id`);

--
-- Indexes for table `member_area_of_interests`
--
ALTER TABLE `member_area_of_interests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_area_of_interests_member_id_foreign` (`member_id`);

--
-- Indexes for table `member_certification_accomplishments`
--
ALTER TABLE `member_certification_accomplishments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_certification_accomplishments_member_id_foreign` (`member_id`);

--
-- Indexes for table `member_conferences`
--
ALTER TABLE `member_conferences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_conferences_member_id_foreign` (`member_id`);

--
-- Indexes for table `member_honor_awards`
--
ALTER TABLE `member_honor_awards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_honor_awards_member_id_foreign` (`member_id`);

--
-- Indexes for table `member_languages`
--
ALTER TABLE `member_languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_languages_member_id_foreign` (`member_id`);

--
-- Indexes for table `member_professional_responsibilities`
--
ALTER TABLE `member_professional_responsibilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_professional_responsibilities_member_id_foreign` (`member_id`);

--
-- Indexes for table `member_project_accomplishments`
--
ALTER TABLE `member_project_accomplishments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_project_accomplishments_member_id_foreign` (`member_id`);

--
-- Indexes for table `member_publication_books`
--
ALTER TABLE `member_publication_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_publication_books_member_id_foreign` (`member_id`);

--
-- Indexes for table `member_publication_journals`
--
ALTER TABLE `member_publication_journals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_publication_journals_member_id_foreign` (`member_id`);

--
-- Indexes for table `member_scholarships`
--
ALTER TABLE `member_scholarships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_scholarships_member_id_foreign` (`member_id`);

--
-- Indexes for table `member_skills`
--
ALTER TABLE `member_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_skills_member_id_foreign` (`member_id`);

--
-- Indexes for table `member_social_media_links`
--
ALTER TABLE `member_social_media_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_social_welfares`
--
ALTER TABLE `member_social_welfares`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_social_welfares_member_id_foreign` (`member_id`);

--
-- Indexes for table `member_taught_courses`
--
ALTER TABLE `member_taught_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_taught_courses_member_id_foreign` (`member_id`);

--
-- Indexes for table `member_to_courses`
--
ALTER TABLE `member_to_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_to_courses_course_info_id_foreign` (`course_info_id`),
  ADD KEY `member_to_courses_member_id_foreign` (`member_id`),
  ADD KEY `member_to_courses_faculty_type_id_foreign` (`faculty_type_id`);

--
-- Indexes for table `member_to_employees`
--
ALTER TABLE `member_to_employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_to_employees_member_id_foreign` (`member_id`),
  ADD KEY `member_to_employees_dept_id_foreign` (`dept_id`),
  ADD KEY `member_to_employees_project_id_foreign` (`project_id`);

--
-- Indexes for table `member_training_accomplishments`
--
ALTER TABLE `member_training_accomplishments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_training_accomplishments_member_id_foreign` (`member_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_permissions`
--
ALTER TABLE `menu_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_posts`
--
ALTER TABLE `menu_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_routes`
--
ALTER TABLE `menu_routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_program_info_id_foreign` (`program_info_id`),
  ADD KEY `news_course_info_id_foreign` (`course_info_id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_background_videos`
--
ALTER TABLE `offer_background_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office_orders`
--
ALTER TABLE `office_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office_order_attachments`
--
ALTER TABLE `office_order_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `office_order_attachments_office_order_id_foreign` (`office_order_id`);

--
-- Indexes for table `ongoing_researches`
--
ALTER TABLE `ongoing_researches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ongoing_trainings`
--
ALTER TABLE `ongoing_trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opeds`
--
ALTER TABLE `opeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_campuses`
--
ALTER TABLE `our_campuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_developments`
--
ALTER TABLE `our_developments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_libraries`
--
ALTER TABLE `our_libraries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_researches`
--
ALTER TABLE `our_researches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partnerships`
--
ALTER TABLE `partnerships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_gallery_images`
--
ALTER TABLE `photo_gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_infos`
--
ALTER TABLE `program_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quick_links`
--
ALTER TABLE `quick_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `researches`
--
ALTER TABLE `researches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research_backgrounds`
--
ALTER TABLE `research_backgrounds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_videos`
--
ALTER TABLE `slider_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media_links`
--
ALTER TABLE `social_media_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_feedbacks`
--
ALTER TABLE `student_feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taglines`
--
ALTER TABLE `taglines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_advisors`
--
ALTER TABLE `teacher_advisors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_advisors_member_id_foreign` (`member_id`);

--
-- Indexes for table `training_backgrounds`
--
ALTER TABLE `training_backgrounds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_enrolls`
--
ALTER TABLE `training_enrolls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming_trainings`
--
ALTER TABLE `upcoming_trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useful_links`
--
ALTER TABLE `useful_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_member_id_foreign` (`member_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_galleries`
--
ALTER TABLE `video_galleries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `advisors`
--
ALTER TABLE `advisors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alumnies`
--
ALTER TABLE `alumnies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alumni_backgrounds`
--
ALTER TABLE `alumni_backgrounds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ask_librarians`
--
ALTER TABLE `ask_librarians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_post_views`
--
ALTER TABLE `blog_post_views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_users`
--
ALTER TABLE `blog_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `board_of_trustees`
--
ALTER TABLE `board_of_trustees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books_publications`
--
ALTER TABLE `books_publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campus_backgrounds`
--
ALTER TABLE `campus_backgrounds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `completed_researches`
--
ALTER TABLE `completed_researches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `control_top_left_menus`
--
ALTER TABLE `control_top_left_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `counter_backgrounds`
--
ALTER TABLE `counter_backgrounds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `counter_boxes`
--
ALTER TABLE `counter_boxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_infos`
--
ALTER TABLE `course_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department_heads`
--
ALTER TABLE `department_heads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `development_backgrounds`
--
ALTER TABLE `development_backgrounds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `directors`
--
ALTER TABLE `directors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty_types`
--
ALTER TABLE `faculty_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fast_services`
--
ALTER TABLE `fast_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback_backgrounds`
--
ALTER TABLE `feedback_backgrounds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `follow_us`
--
ALTER TABLE `follow_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `for_students`
--
ALTER TABLE `for_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frontend_menus`
--
ALTER TABLE `frontend_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17568;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `get_in_touches`
--
ALTER TABLE `get_in_touches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `governing_body`
--
ALTER TABLE `governing_body`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_links`
--
ALTER TABLE `home_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `icons`
--
ALTER TABLE `icons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `institute_details`
--
ALTER TABLE `institute_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `journal_papers`
--
ALTER TABLE `journal_papers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `library_backgrounds`
--
ALTER TABLE `library_backgrounds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `library_news`
--
ALTER TABLE `library_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `library_sliders`
--
ALTER TABLE `library_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `library_subjects`
--
ALTER TABLE `library_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `library_time_schedules`
--
ALTER TABLE `library_time_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `like_counts`
--
ALTER TABLE `like_counts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membereducations`
--
ALTER TABLE `membereducations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memberexperiences`
--
ALTER TABLE `memberexperiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_administrative_experiences`
--
ALTER TABLE `member_administrative_experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_area_of_interests`
--
ALTER TABLE `member_area_of_interests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_certification_accomplishments`
--
ALTER TABLE `member_certification_accomplishments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_conferences`
--
ALTER TABLE `member_conferences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_honor_awards`
--
ALTER TABLE `member_honor_awards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_languages`
--
ALTER TABLE `member_languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_professional_responsibilities`
--
ALTER TABLE `member_professional_responsibilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_project_accomplishments`
--
ALTER TABLE `member_project_accomplishments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_publication_books`
--
ALTER TABLE `member_publication_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_publication_journals`
--
ALTER TABLE `member_publication_journals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_scholarships`
--
ALTER TABLE `member_scholarships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_skills`
--
ALTER TABLE `member_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_social_media_links`
--
ALTER TABLE `member_social_media_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_social_welfares`
--
ALTER TABLE `member_social_welfares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_taught_courses`
--
ALTER TABLE `member_taught_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_to_courses`
--
ALTER TABLE `member_to_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_to_employees`
--
ALTER TABLE `member_to_employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_training_accomplishments`
--
ALTER TABLE `member_training_accomplishments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `menu_permissions`
--
ALTER TABLE `menu_permissions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1456;

--
-- AUTO_INCREMENT for table `menu_posts`
--
ALTER TABLE `menu_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `menu_routes`
--
ALTER TABLE `menu_routes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offer_background_videos`
--
ALTER TABLE `offer_background_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `office_orders`
--
ALTER TABLE `office_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `office_order_attachments`
--
ALTER TABLE `office_order_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ongoing_researches`
--
ALTER TABLE `ongoing_researches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ongoing_trainings`
--
ALTER TABLE `ongoing_trainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `opeds`
--
ALTER TABLE `opeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_campuses`
--
ALTER TABLE `our_campuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_developments`
--
ALTER TABLE `our_developments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_libraries`
--
ALTER TABLE `our_libraries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_researches`
--
ALTER TABLE `our_researches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partnerships`
--
ALTER TABLE `partnerships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo_gallery_images`
--
ALTER TABLE `photo_gallery_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program_infos`
--
ALTER TABLE `program_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quick_links`
--
ALTER TABLE `quick_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `researches`
--
ALTER TABLE `researches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research_backgrounds`
--
ALTER TABLE `research_backgrounds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider_videos`
--
ALTER TABLE `slider_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_media_links`
--
ALTER TABLE `social_media_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_feedbacks`
--
ALTER TABLE `student_feedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taglines`
--
ALTER TABLE `taglines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher_advisors`
--
ALTER TABLE `teacher_advisors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training_backgrounds`
--
ALTER TABLE `training_backgrounds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training_enrolls`
--
ALTER TABLE `training_enrolls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upcoming_trainings`
--
ALTER TABLE `upcoming_trainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `useful_links`
--
ALTER TABLE `useful_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `video_galleries`
--
ALTER TABLE `video_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD CONSTRAINT `blog_posts_blog_user_id_foreign` FOREIGN KEY (`blog_user_id`) REFERENCES `blog_users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `post_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_post_views`
--
ALTER TABLE `blog_post_views`
  ADD CONSTRAINT `blog_post_views_blog_post_id_foreign` FOREIGN KEY (`blog_post_id`) REFERENCES `blog_posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_post_views_blog_user_id_foreign` FOREIGN KEY (`blog_user_id`) REFERENCES `blog_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `board_of_trustees`
--
ALTER TABLE `board_of_trustees`
  ADD CONSTRAINT `board_of_trustees_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `books_publications`
--
ALTER TABLE `books_publications`
  ADD CONSTRAINT `library_subject_id` FOREIGN KEY (`library_subject_id`) REFERENCES `library_subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_infos`
--
ALTER TABLE `course_infos`
  ADD CONSTRAINT `course_infos_program_info_id_foreign` FOREIGN KEY (`program_info_id`) REFERENCES `program_infos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `governing_body`
--
ALTER TABLE `governing_body`
  ADD CONSTRAINT `governing_body_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `membereducations`
--
ALTER TABLE `membereducations`
  ADD CONSTRAINT `membereducations_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `memberexperiences`
--
ALTER TABLE `memberexperiences`
  ADD CONSTRAINT `memberexperiences_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `member_administrative_experiences`
--
ALTER TABLE `member_administrative_experiences`
  ADD CONSTRAINT `member_administrative_experiences_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `member_area_of_interests`
--
ALTER TABLE `member_area_of_interests`
  ADD CONSTRAINT `member_area_of_interests_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `member_certification_accomplishments`
--
ALTER TABLE `member_certification_accomplishments`
  ADD CONSTRAINT `member_certification_accomplishments_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `member_conferences`
--
ALTER TABLE `member_conferences`
  ADD CONSTRAINT `member_conferences_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `member_honor_awards`
--
ALTER TABLE `member_honor_awards`
  ADD CONSTRAINT `member_honor_awards_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `member_languages`
--
ALTER TABLE `member_languages`
  ADD CONSTRAINT `member_languages_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `member_professional_responsibilities`
--
ALTER TABLE `member_professional_responsibilities`
  ADD CONSTRAINT `member_professional_responsibilities_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `member_project_accomplishments`
--
ALTER TABLE `member_project_accomplishments`
  ADD CONSTRAINT `member_project_accomplishments_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `member_publication_books`
--
ALTER TABLE `member_publication_books`
  ADD CONSTRAINT `member_publication_books_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `member_publication_journals`
--
ALTER TABLE `member_publication_journals`
  ADD CONSTRAINT `member_publication_journals_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `member_scholarships`
--
ALTER TABLE `member_scholarships`
  ADD CONSTRAINT `member_scholarships_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `member_skills`
--
ALTER TABLE `member_skills`
  ADD CONSTRAINT `member_skills_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `member_social_welfares`
--
ALTER TABLE `member_social_welfares`
  ADD CONSTRAINT `member_social_welfares_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `member_taught_courses`
--
ALTER TABLE `member_taught_courses`
  ADD CONSTRAINT `member_taught_courses_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `member_to_employees`
--
ALTER TABLE `member_to_employees`
  ADD CONSTRAINT `member_to_employees_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `member_to_employees_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `member_to_employees_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `member_training_accomplishments`
--
ALTER TABLE `member_training_accomplishments`
  ADD CONSTRAINT `member_training_accomplishments_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `office_order_attachments`
--
ALTER TABLE `office_order_attachments`
  ADD CONSTRAINT `office_order_attachments_office_order_id_foreign` FOREIGN KEY (`office_order_id`) REFERENCES `office_orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teacher_advisors`
--
ALTER TABLE `teacher_advisors`
  ADD CONSTRAINT `teacher_advisors_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
