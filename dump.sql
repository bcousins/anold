-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 16, 2013 at 05:53 PM
-- Server version: 5.5.25
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `an`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `p_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `p_id`, `time`) VALUES
(3, 'What is Asperger\\''s Network?', '<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">Hi,&nbsp;</p>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\"><br style=\\"margin: 0px;\\" />Welcome to Asperger\\''s Network... So nice of you to join us.&nbsp;</p>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">&nbsp;</p>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">My name is Ben Cousins (bcousins on the forums) - I created the site last semester.&nbsp;</p>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">&nbsp;</p>\r\n<h3 style=\\"margin: 0px; font-family: Ubuntu, sans-serif; padding-right: 10px;\\">Why did you create Asperger\\''s Network??</h3>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">I needed the experience, mostly. I\\''ve wanted to create a forum for some time now, so I did that, and gradually built on it, and here we are today.&nbsp;</p>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">&nbsp;</p>\r\n<h3 style=\\"margin: 0px; font-family: Ubuntu, sans-serif; padding-right: 10px;\\">What\\''s the main purpose of AN?</h3>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">I created Asperger\\''s Network because I have Asperger\\''s, and there are no actual support sites in Australia. I created AN as a support network, and we originally ran MyBB.&nbsp;</p>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">&nbsp;</p>\r\n<h3 style=\\"margin: 0px; font-family: Ubuntu, sans-serif; padding-right: 10px;\\">What about you, Ben? Can we know some stuff about you?&nbsp;</h3>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">Sure - I\\''ll post this here, then transfer it to the wiki.</p>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">&nbsp;</p>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\"><strong style=\\"margin: 0px;\\">Name:&nbsp;</strong>Ben Cousins</p>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\"><strong style=\\"margin: 0px;\\">Location:&nbsp;</strong>Sydney</p>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\"><strong style=\\"margin: 0px;\\">Hobbies:&nbsp;</strong>Railways, and this site.</p>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\"><strong style=\\"margin: 0px;\\">Blog Link:&nbsp;</strong><a style=\\"margin: 0px; text-decoration: initial;\\" href=\\"http://bencousins.wordpress.com/\\">http://bencousins.wordpress.com</a></p>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">&nbsp;</p>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">Anything else, feel free to ask.</p>', 1, '2013-01-11 19:21:27');

-- --------------------------------------------------------

--
-- Table structure for table `f-cat`
--

CREATE TABLE `f-cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `permission` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `f-cat`
--

INSERT INTO `f-cat` (`id`, `name`, `permission`) VALUES
(1, 'Asperger''s Network', 1),
(2, 'Support Forums', 1),
(3, 'Community Discussions', 1),
(4, 'Special Interest', 1);

-- --------------------------------------------------------

--
-- Table structure for table `f-forums`
--

CREATE TABLE `f-forums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `permission` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `f-forums`
--

INSERT INTO `f-forums` (`id`, `cat_id`, `name`, `permission`) VALUES
(1, 1, 'Feedback and Suggestions', 1),
(2, 2, 'Asperger''s Syndrome Support', 1),
(3, 2, 'Bi-Polar Support', 1),
(4, 2, 'General Autism Support', 1),
(5, 2, 'Parents, Carers and Partners', 1),
(6, 3, 'Anything Goes', 1),
(7, 3, 'Love, Dating, Marriage...', 1),
(8, 3, 'Computers, Tablets, Technology', 1),
(9, 3, 'Science', 1),
(10, 3, 'History and Geography', 1),
(11, 0, 'Talk with a Mod', 1),
(12, 1, 'Test Forum', 1),
(13, 3, 'In the News', 1),
(14, 4, 'Music and Videos', 1),
(15, 1, 'Introduce Yourself', 1);

-- --------------------------------------------------------

--
-- Table structure for table `f-posts`
--

CREATE TABLE `f-posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `t_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `poster_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hidden` int(1) NOT NULL DEFAULT '0',
  `reason` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `t_id` (`t_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `f-topics`
--

CREATE TABLE `f-topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `poster_id` int(11) NOT NULL,
  `closed` int(11) NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(1) NOT NULL DEFAULT '0',
  `del-reason` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `quip` varchar(100) DEFAULT 'NULL',
  `status` varchar(100) NOT NULL DEFAULT 'Member',
  `location` varchar(255) DEFAULT NULL,
  `group-id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `email`, `ip`, `date`, `quip`, `status`, `location`, `group-id`) VALUES
(1, 'bcousins', 'edahcvh', 'ben.cousins8495@gmail.com', '127.0.0.1', '0000-00-00 00:00:00', 'NULL', 'Administrator', NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `wiki`
--

CREATE TABLE `wiki` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `title` (`title`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `wiki`
--

INSERT INTO `wiki` (`id`, `title`, `content`) VALUES
(1, 'Forum FAQ', '<p>What forum software is AN running?&nbsp;</p>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">We have coded our forums \\"in-house\\" - As with our wiki. Please feel free to create a new topic in the&nbsp;<a style=\\"margin: 0px; text-decoration: initial;\\" href=\\"f-f1.htm\\">Feedback</a>&nbsp;forum.</p>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">&nbsp;</p>\r\n<h3 style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">&nbsp;</h3>\r\n<h3 style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">Do we get a choice in the theme that gets used?&nbsp;</h3>\r\n<p>No, You don\\''t. There\\''s one theme, and one theme only. We will not change it yet.&nbsp;</p>\r\n<h3>&nbsp;</h3>\r\n<h3>I need to report a bug...</h3>\r\n<p>Excellent. Use the <a href=\\"f-t2.htm\\">Bugs Thread</a></p>\r\n<p>&nbsp;</p>\r\n<h3>A user is being mean to me, is personally attacking me, or I am seeing spam. How do I report it?&nbsp;</h3>\r\n<p>Please send an E-Mail to us at <a href=\\"mailto:moderation@aspergersnetwork.com\\">moderation@aspergersnetwork.com</a> and we will fix it.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>'),
(2, 'Moderation FAQ', '<h3>Operational Transparency, what is it?</h3>\r\n<p>Something inspired by the <a href=\\"http://forums.whirlpool.net.au\\">Whirlpool Forums</a>, The following FAQ will better explain it.</p>\r\n<p>&nbsp;</p>\r\n<h3>What happens to my hidden posts?</h3>\r\n<p>Nothing. They\\''re still in the Database. They\\''re just hidden from general view. As a part of the Operational Transperancy rule, We do not modify any posts you make, we just hide them. If you feel your post has been hidden in error, send bcousins an email (<a href=\\"mailto:bcousins@aspergersnetwork.com\\">bcousins@aspergersnetwork.com</a>) and he will look into it. His decision is final.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>'),
(4, 'What is Asperger\\''s Syndrome?', '<p><strong>Asperger Syndrome</strong>, also known as&nbsp;<strong style=\\"font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px;\\">Asperger\\''s syndrome,&nbsp;</strong><strong style=\\"font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px;\\">Asperger disorder, </strong>or<strong style=\\"font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px;\\">&nbsp;AS,&nbsp;</strong>is an&nbsp;<strong><a style=\\"text-decoration: initial; color: #0b0080; background-image: none; font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px;\\" title=\\"Autism spectrum\\" href=\\"http://en.wikipedia.org/wiki/Autism_spectrum\\">autism spectrum</a>&nbsp;disorder</strong> (ASD) that is characterized by significant difficulties in social interaction, alongside restricted and repetitive patterns of behavior and interests. - From <a href=\\"http://en.wikipedia.org/wiki/Asperger_syndrome\\">Wikipedia</a></p>\r\n<p>&nbsp;</p>\r\n<p>Asperger\\''s Syndrome is a type of High-Functioning Autism (HFA), so people that have the condition would not be noticed as \\"strange\\" or \\"disabled\\" in real life.&nbsp;</p>\r\n<p>&nbsp;</p>'),
(5, 'Community Rules', '<h2 style=\\"margin: 0px; font-family: Ubuntu, sans-serif; padding-right: 10px;\\">Asperger\\''s Network Community Rules</h2>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">As with any good community, we run on a set of rules. These, in effect, outline what you can and can\\''t do as a registered member of the forums.&nbsp;<strong style=\\"margin: 0px;\\">This is applicable to all members regardless of their position on the boards.</strong></p>\r\n<h3 style=\\"margin: 0px; font-family: Ubuntu, sans-serif; padding-right: 10px;\\">&nbsp;</h3>\r\n<h3 style=\\"margin: 0px; font-family: Ubuntu, sans-serif; padding-right: 10px;\\"><strong style=\\"margin: 0px;\\">Spam</strong></h3>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">Spam will be deleted on sight, the user instantly banned.</p>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">&nbsp;</p>\r\n<h3 style=\\"margin: 0px; font-family: Ubuntu, sans-serif; padding-right: 10px;\\">Swearing</h3>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">The odd \\"Fuck\\", and \\"Shit\\" won\\''t get your posts hidden, But we request that this does not happen in excess. Frustration may on occasion get the better of you and we at Asperger\\''s Network understand this.</p>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">&nbsp;</p>\r\n<h3 style=\\"margin: 0px; font-family: Ubuntu, sans-serif; padding-right: 10px;\\">Disclosure of personal information</h3>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">We would rather, as a legal thing, that personal information (Real names, where not provided by the user - Phone numbers - Living areas, if not in profile - Etc) are not posted without the user\\''s consent. We will hide any posts that show this information unless we are informed, or know otherwise. Please talk to users using their username.&nbsp;</p>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">&nbsp;</p>\r\n<h3 style=\\"margin: 0px; font-family: Ubuntu, sans-serif; padding-right: 10px;\\">Posting *your* personal information</h3>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">If you wish to post your own personal information, please go about it carefully. Moderators and Administrators can not remove the information from your posts. The post will continue to be stored in the database, and if we ever get hacked, there\\''s a possibility that the hacker can have access to this information. It is at your own risk, and we are &lt;b&gt;not&lt;/b&gt; responsible for leaked information.</p>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">&nbsp;</p>\r\n<h3 style=\\"margin: 0px; font-family: Ubuntu, sans-serif; padding-right: 10px;\\">Discussing fatalities, deaths, shootings, massacares, etc.</h3>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">We will allow this, however, we don\\''t really want users making speculations as to the persons mental state. This is uncalled for.&nbsp;</p>\r\n<p style=\\"margin: 0px; font-family: Tahoma, sans-serif; font-size: 13px;\\">&nbsp;</p>\r\n<h3 style=\\"margin: 0px; font-family: Ubuntu, sans-serif; padding-right: 10px;\\">We reserve the right to modify these rules at ANY time, for ANY reason without warning.</h3>\r\n<p>&nbsp;</p>');
