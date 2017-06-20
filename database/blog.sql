/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50718
 Source Host           : localhost
 Source Database       : blog

 Target Server Type    : MySQL
 Target Server Version : 50718
 File Encoding         : utf-8

 Date: 06/19/2017 14:36:22 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `contents`
-- ----------------------------
DROP TABLE IF EXISTS `contents`;
CREATE TABLE `contents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `contents`
-- ----------------------------
BEGIN;
INSERT INTO `contents` VALUES ('2', 'Debug Your App with the Laravel Debugbar', 'The Laravel Debugbar by Barry vd. Heuvel is a package that allows you to quickly and easily keep tabs on your application during development. With a simple installation and powerful features, the Debugbar package is one of the cornerstone packages for Laravel.\r\n\r\nThe debugbar is already updated for Laravel 5 and I wanted to show you all the great features it includes.\r\n\r\nInstalling the Laravel Debugbar\r\n\r\nInstallation is extremely simple. I was about to have it running in under five minutes, and four of those was waiting on composer. Here are the steps to get it setup and going.\r\n\r\nIn your Laravel 5 project require the package:', 'Wani', 'Tutorial', '2017-06-18 08:04:45', '2017-06-18 08:04:45'), ('3', 'Step by Step Guide to Building Your First Laravel Application', 'Since its initial release in 2011, Laravel has experienced exponential growth. In 2015, it became the most starred PHP framework on GitHub and rose to the go-to framework for people all over the world.\r\n\r\nLaravel focuses on you, the end user, first which means its focus is on simplicity, clarity, and getting work done. People and companies are using it to build everything from simple hobby projects all the way to Fortune 500 companies.\r\n\r\nMy goal with this is to create a guide for those just learning the framework. This guide will take you from the very beginning of an idea into a real deployable application.\r\n\r\nThis look at Laravel will not be exhaustive, covering every detail of the framework, and it does expect a few prerequisites. Here is what you will need to follow along:\r\n\r\nA local PHP environment (Valet, Homestead, Vagrant, MAMP, etc.).\r\nA database. I’ll be using MySQL.\r\nPHPUnit installed\r\nNode installed\r\nNote: For the local PHP environment I am using a Mac and like to use Valet because it automatically sets up everything. If you are on Windows, you should consider Homestead or some flavor of a virtual machine.\r\n\r\nI am attempting to go through the process of creating a new application just as I would in a real world environment. In fact, the code and idea are taken from a project I built.\r\n\r\nPlanning\r\n\r\nEvery project has to start from somewhere, either assigned to you by your work or just an idea in your head. No matter where it originates, thoroughly planning out all the features before you start coding is paramount in completing a project.\r\n\r\nHow you plan is dependent on how your mind works. As a visual person, I like to plan on paper, drawing out the way I picture the screens looking and then working backward into how I’d code it out. Others prefer to write a project plan in a text file, wiki, or some mind mapping tool. It doesn’t matter how you plan, just that you do it.\r\n\r\nFor this guide, we are going to be building a link directory. Here is a list of basic goals for this links app:\r\n\r\nDisplay a simple list of links.\r\nCreate a form where people can submit new links.\r\nValidate the form\r\nInsert the data into the database.\r\nLet’s get started building all this out.\r\n\r\nThe First Steps\r\n\r\nWith a simple plan of attack outlined, it’s time to get a brand new empty project up and running. I like to put all my projects in a ~/Sites directory, and these instructions will use that location. I’ve already “parked” this directory in Valet, so any folders will automatically be mapped to “foldername.dev” in the browser.\r\n\r\nOpen your terminal application and switch into this directory.', 'Wani', 'Tutorial', '2017-06-18 08:06:08', '2017-06-18 08:06:08'), ('4', 'The Latest Mobile Trends That You Need To Know', 'This is the mobile generation. The average mobile phone user spends about 90 minutes on their device, which may not seem like a lot but look at that over a year and it’s 23 days, over a lifetime it’s 3.9 years. 3.9 years spent using a mobile phone!\r\n\r\nOf course, some people are much heavier users. Just take a look at the millennials – the selfie generation. Techinfographics recently reported that over one million selfies are taken every day. On top of this, 36% of those selfies are being retouched before being posted, and 13% of women said that they retouch every single selfie that they eventually post. In fact, Samsung says that selfies make up 40% of photos taken by anyone between 18 and 24 years old.\r\n\r\nThe number of phone subscriptions worldwide (6.8 billion) is now almost equal to the number of people on the planet (seven billion). This doesn’t mean that everyone has a mobile phone. In more affluent countries, many people have two, and in others some have none. However, the rise of the mobile phone has been astonishing, and it’s only taken us a little more than 20 years to get here.\r\n\r\nOur handsets are faster, have more memory and greater capabilities than ever before, and the software and apps that are available to us are ever growing. With so many mobile developments, happening at such a fast rate, it’s hard to keep up with the current trends. So here are the top mobile trends that you need to know about right now.\r\n\r\nWe’re Bored of the Smartphone\r\n\r\nThe trouble with the smartphone is that it’s become too commonplace. People aren’t excited about it anymore, and upgrading your phone is often more about getting something without a cracked screen rather than the latest bit of smartphone tech.\r\n\r\nThe clear leader in the smartphone pack is apple. It was estimated that there were a total of 94 million iPhones in use in the US alone in March last year. Closely following Apple is Samsung, but its sales seem to be dropping. Samsung’s S5 mobile sold 40 million fewer units than the S3 – so they really need their S6 mobile to do well.\r\n\r\nThe smartphone industry needs to shake things up, but nobody seems to know how to do it. At Mobile World Congress last year there was a distinct lack of grand announcements about actually innovative mobile advancements. However, there does seem to be a move towards smartphones that come with less bloatware. They’re moving away from the walled garden approach and towards mobile phone operating systems.', 'Aini', 'Info', '2017-06-19 05:20:55', '2017-06-19 05:20:55');
COMMIT;

-- ----------------------------
--  Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `migrations`
-- ----------------------------
BEGIN;
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1'), ('2', '2014_10_12_100000_create_password_resets_table', '1'), ('3', '2017_06_18_034516_create_contents_table', '1');
COMMIT;

-- ----------------------------
--  Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `users`
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('4', 'wani', 'hazwani@abh.my', '$2y$10$/IB8.4SlZRmOvhRNe7sIJepGfv7TBGE7ol8KlOd6SuRES.N/F1aze', 'Av9mLAgmKsKCmU6ETcBqyCXIcbrRlogfaM5DghDRRh8VZ7yar6FN70fCv5ZL', '2017-06-19 03:25:17', '2017-06-19 03:25:17', null), ('5', 'yat', 'yat@abh.my', '$2y$10$p8HSCqoLuy8P5uJjckQkCetCrPd8WuE4.nyJPCl7Ih5NeDTkmc6Fa', 'xKgdz75Cwo8hhfmAtIjoHSGITJUxHiP8zsGzkiHdFuUU6JHBvVvjSn8OPsvV', '2017-06-19 06:30:05', '2017-06-19 06:30:05', null);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
