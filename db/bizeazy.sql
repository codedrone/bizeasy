-- phpMyAdmin SQL Dump
-- version 4.6.4deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 07, 2018 at 11:38 AM
-- Server version: 5.7.18-0ubuntu0.16.10.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bizeazy`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `iAdminId` int(11) NOT NULL,
  `vName` varchar(250) NOT NULL,
  `vEmail` varchar(250) NOT NULL,
  `vPassword` varchar(250) NOT NULL,
  `vOTP` varchar(250) NOT NULL,
  `dtCreatedDateTime` datetime NOT NULL,
  `dtUpdatedDateTime` datetime NOT NULL,
  `eStatus` enum('Active','Inactive','Archive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`iAdminId`, `vName`, `vEmail`, `vPassword`, `vOTP`, `dtCreatedDateTime`, `dtUpdatedDateTime`, `eStatus`) VALUES
(1, 'admin', 'admin@gmail.com', 'DShjDShj', '', '2018-03-28 12:56:54', '0000-00-00 00:00:00', 'Active'),
(2, 'Jason Cowles', 'admina@gmail.com', 'DShjDShj', '', '2018-03-29 11:43:03', '0000-00-00 00:00:00', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `iCMSId` int(11) NOT NULL,
  `tTitle` text NOT NULL,
  `vCode` varchar(250) NOT NULL,
  `tContent` text NOT NULL,
  `vOTP` varchar(250) NOT NULL,
  `dtCreatedDateTime` datetime NOT NULL,
  `dtUpdatedDateTime` datetime NOT NULL,
  `eStatus` enum('None','Archive') NOT NULL DEFAULT 'None'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`iCMSId`, `tTitle`, `vCode`, `tContent`, `vOTP`, `dtCreatedDateTime`, `dtUpdatedDateTime`, `eStatus`) VALUES
(1, 'About us', 'ABOUT_US', '<h1>Lorem Ipsum</h1>\r\n\r\n<p>&quot;Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...&quot;</p>\r\n\r\n<p>&quot;There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...&quot;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dui ex, vehicula at pretium vel, fringilla sit amet ligula. Aenean eget nisi id eros pellentesque iaculis. Duis diam elit, facilisis volutpat aliquam at, convallis sit amet urna. Aliquam porttitor viverra nulla, ultricies dictum nulla porttitor non. Fusce vel commodo nibh. Proin fermentum massa eu dolor tempor vestibulum. Nullam eu mauris ornare, sodales libero sed, convallis ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n\r\n<p>Proin vulputate malesuada quam ut rhoncus. Suspendisse vestibulum scelerisque libero, vitae semper libero volutpat ac. Maecenas congue elementum mauris, ut pretium sem condimentum nec. Vivamus eu erat ac risus pulvinar lobortis. Ut eu vehicula risus. Fusce id fringilla lacus. Nullam eget libero ut quam suscipit eleifend. In mattis mollis ex et viverra. Suspendisse viverra facilisis finibus. Suspendisse vitae metus eu felis posuere elementum et a odio. Fusce tincidunt massa at felis scelerisque, et tempus lectus finibus.</p>\r\n\r\n<p>Sed non consectetur erat. Cras accumsan libero in neque faucibus, ut sagittis enim fermentum. Suspendisse volutpat maximus ante, non convallis neque dictum ut. Nulla felis massa, porta sed lacus nec, porttitor hendrerit massa. Mauris imperdiet, eros id posuere congue, tortor velit tincidunt neque, vel semper dui ante eget elit. Nullam bibendum elit id purus porttitor, sit amet pretium felis elementum. Integer vitae nisl risus. Nullam semper facilisis pulvinar. Nulla maximus ante eget fermentum tincidunt. Ut nunc tellus, blandit eget nisl a, tincidunt tristique ipsum. Integer pulvinar lorem in justo convallis, sed rutrum elit imperdiet. Morbi fermentum feugiat volutpat. Ut nulla turpis, consectetur ac nunc et, euismod fermentum mi.</p>\r\n\r\n<p>In faucibus nisi a nisi pellentesque, non tempus augue vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque vestibulum augue, sit amet dignissim magna suscipit in. Proin sollicitudin bibendum mi. Quisque a diam nulla. Sed ornare sodales risus, eget rutrum tortor vulputate id. Vivamus accumsan libero sit amet semper dapibus. Curabitur nec justo mi. Pellentesque eros sapien, scelerisque sed molestie at, porttitor eget dui. Curabitur risus sem, pulvinar vitae neque eu, suscipit ultrices leo. Nullam eu interdum mi, non ullamcorper felis. Nam id accumsan diam, id mollis nunc. Donec venenatis tincidunt nunc sed volutpat.</p>\r\n', '', '2017-12-21 00:00:00', '2017-12-21 00:00:00', 'None'),
(2, 'About us', 'ABOUT_US', '<h1>Lorem Ipsum</h1>\r\n\r\n<p>&quot;Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...&quot;</p>\r\n\r\n<p>&quot;There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...&quot;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dui ex, vehicula at pretium vel, fringilla sit amet ligula. Aenean eget nisi id eros pellentesque iaculis. Duis diam elit, facilisis volutpat aliquam at, convallis sit amet urna. Aliquam porttitor viverra nulla, ultricies dictum nulla porttitor non. Fusce vel commodo nibh. Proin fermentum massa eu dolor tempor vestibulum. Nullam eu mauris ornare, sodales libero sed, convallis ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n\r\n<p>Proin vulputate malesuada quam ut rhoncus. Suspendisse vestibulum scelerisque libero, vitae semper libero volutpat ac. Maecenas congue elementum mauris, ut pretium sem condimentum nec. Vivamus eu erat ac risus pulvinar lobortis. Ut eu vehicula risus. Fusce id fringilla lacus. Nullam eget libero ut quam suscipit eleifend. In mattis mollis ex et viverra. Suspendisse viverra facilisis finibus. Suspendisse vitae metus eu felis posuere elementum et a odio. Fusce tincidunt massa at felis scelerisque, et tempus lectus finibus.</p>\r\n\r\n<p>Sed non consectetur erat. Cras accumsan libero in neque faucibus, ut sagittis enim fermentum. Suspendisse volutpat maximus ante, non convallis neque dictum ut. Nulla felis massa, porta sed lacus nec, porttitor hendrerit massa. Mauris imperdiet, eros id posuere congue, tortor velit tincidunt neque, vel semper dui ante eget elit. Nullam bibendum elit id purus porttitor, sit amet pretium felis elementum. Integer vitae nisl risus. Nullam semper facilisis pulvinar. Nulla maximus ante eget fermentum tincidunt. Ut nunc tellus, blandit eget nisl a, tincidunt tristique ipsum. Integer pulvinar lorem in justo convallis, sed rutrum elit imperdiet. Morbi fermentum feugiat volutpat. Ut nulla turpis, consectetur ac nunc et, euismod fermentum mi.</p>\r\n\r\n<p>In faucibus nisi a nisi pellentesque, non tempus augue vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque vestibulum augue, sit amet dignissim magna suscipit in. Proin sollicitudin bibendum mi. Quisque a diam nulla. Sed ornare sodales risus, eget rutrum tortor vulputate id. Vivamus accumsan libero sit amet semper dapibus. Curabitur nec justo mi. Pellentesque eros sapien, scelerisque sed molestie at, porttitor eget dui. Curabitur risus sem, pulvinar vitae neque eu, suscipit ultrices leo. Nullam eu interdum mi, non ullamcorper felis. Nam id accumsan diam, id mollis nunc. Donec venenatis tincidunt nunc sed volutpat.</p>\r\n', '', '2017-12-21 00:00:00', '2018-01-30 12:42:43', 'None'),
(3, 'Privacy policy', 'PRIVACY_POLICY', '<h1>Lorem Ipsum</h1>\r\n\r\n<p>&quot;Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...&quot;</p>\r\n\r\n<p>&quot;There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...&quot;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dui ex, vehicula at pretium vel, fringilla sit amet ligula. Aenean eget nisi id eros pellentesque iaculis. Duis diam elit, facilisis volutpat aliquam at, convallis sit amet urna. Aliquam porttitor viverra nulla, ultricies dictum nulla porttitor non. Fusce vel commodo nibh. Proin fermentum massa eu dolor tempor vestibulum. Nullam eu mauris ornare, sodales libero sed, convallis ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n\r\n<p>Proin vulputate malesuada quam ut rhoncus. Suspendisse vestibulum scelerisque libero, vitae semper libero volutpat ac. Maecenas congue elementum mauris, ut pretium sem condimentum nec. Vivamus eu erat ac risus pulvinar lobortis. Ut eu vehicula risus. Fusce id fringilla lacus. Nullam eget libero ut quam suscipit eleifend. In mattis mollis ex et viverra. Suspendisse viverra facilisis finibus. Suspendisse vitae metus eu felis posuere elementum et a odio. Fusce tincidunt massa at felis scelerisque, et tempus lectus finibus.</p>\r\n\r\n<p>Sed non consectetur erat. Cras accumsan libero in neque faucibus, ut sagittis enim fermentum. Suspendisse volutpat maximus ante, non convallis neque dictum ut. Nulla felis massa, porta sed lacus nec, porttitor hendrerit massa. Mauris imperdiet, eros id posuere congue, tortor velit tincidunt neque, vel semper dui ante eget elit. Nullam bibendum elit id purus porttitor, sit amet pretium felis elementum. Integer vitae nisl risus. Nullam semper facilisis pulvinar. Nulla maximus ante eget fermentum tincidunt. Ut nunc tellus, blandit eget nisl a, tincidunt tristique ipsum. Integer pulvinar lorem in justo convallis, sed rutrum elit imperdiet. Morbi fermentum feugiat volutpat. Ut nulla turpis, consectetur ac nunc et, euismod fermentum mi.</p>\r\n\r\n<p>In faucibus nisi a nisi pellentesque, non tempus augue vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque vestibulum augue, sit amet dignissim magna suscipit in. Proin sollicitudin bibendum mi. Quisque a diam nulla. Sed ornare sodales risus, eget rutrum tortor vulputate id. Vivamus accumsan libero sit amet semper dapibus. Curabitur nec justo mi. Pellentesque eros sapien, scelerisque sed molestie at, porttitor eget dui. Curabitur risus sem, pulvinar vitae neque eu, suscipit ultrices leo. Nullam eu interdum mi, non ullamcorper felis. Nam id accumsan diam, id mollis nunc. Donec venenatis tincidunt nunc sed volutpat.</p>\r\n', '', '2017-12-21 00:00:00', '2017-12-21 00:00:00', 'None'),
(4, 'Privacy policy', 'PRIVACY_POLICY', '<h1>Lorem Ipsum</h1>\r\n\r\n<p>&quot;Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...&quot;</p>\r\n\r\n<p>&quot;There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...&quot;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dui ex, vehicula at pretium vel, fringilla sit amet ligula. Aenean eget nisi id eros pellentesque iaculis. Duis diam elit, facilisis volutpat aliquam at, convallis sit amet urna. Aliquam porttitor viverra nulla, ultricies dictum nulla porttitor non. Fusce vel commodo nibh. Proin fermentum massa eu dolor tempor vestibulum. Nullam eu mauris ornare, sodales libero sed, convallis ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n\r\n<p>Proin vulputate malesuada quam ut rhoncus. Suspendisse vestibulum scelerisque libero, vitae semper libero volutpat ac. Maecenas congue elementum mauris, ut pretium sem condimentum nec. Vivamus eu erat ac risus pulvinar lobortis. Ut eu vehicula risus. Fusce id fringilla lacus. Nullam eget libero ut quam suscipit eleifend. In mattis mollis ex et viverra. Suspendisse viverra facilisis finibus. Suspendisse vitae metus eu felis posuere elementum et a odio. Fusce tincidunt massa at felis scelerisque, et tempus lectus finibus.</p>\r\n\r\n<p>Sed non consectetur erat. Cras accumsan libero in neque faucibus, ut sagittis enim fermentum. Suspendisse volutpat maximus ante, non convallis neque dictum ut. Nulla felis massa, porta sed lacus nec, porttitor hendrerit massa. Mauris imperdiet, eros id posuere congue, tortor velit tincidunt neque, vel semper dui ante eget elit. Nullam bibendum elit id purus porttitor, sit amet pretium felis elementum. Integer vitae nisl risus. Nullam semper facilisis pulvinar. Nulla maximus ante eget fermentum tincidunt. Ut nunc tellus, blandit eget nisl a, tincidunt tristique ipsum. Integer pulvinar lorem in justo convallis, sed rutrum elit imperdiet. Morbi fermentum feugiat volutpat. Ut nulla turpis, consectetur ac nunc et, euismod fermentum mi.</p>\r\n\r\n<p>In faucibus nisi a nisi pellentesque, non tempus augue vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque vestibulum augue, sit amet dignissim magna suscipit in. Proin sollicitudin bibendum mi. Quisque a diam nulla. Sed ornare sodales risus, eget rutrum tortor vulputate id. Vivamus accumsan libero sit amet semper dapibus. Curabitur nec justo mi. Pellentesque eros sapien, scelerisque sed molestie at, porttitor eget dui. Curabitur risus sem, pulvinar vitae neque eu, suscipit ultrices leo. Nullam eu interdum mi, non ullamcorper felis. Nam id accumsan diam, id mollis nunc. Donec venenatis tincidunt nunc sed volutpat.</p>\r\n', '', '2017-12-21 00:00:00', '2017-12-21 00:00:00', 'None'),
(5, 'Terms & Conditions', 'TERMS', '<h1>Lorem Ipsum</h1>\r\n\r\n<p>&quot;Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...&quot;</p>\r\n\r\n<p>&quot;There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...&quot;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dui ex, vehicula at pretium vel, fringilla sit amet ligula. Aenean eget nisi id eros pellentesque iaculis. Duis diam elit, facilisis volutpat aliquam at, convallis sit amet urna. Aliquam porttitor viverra nulla, ultricies dictum nulla porttitor non. Fusce vel commodo nibh. Proin fermentum massa eu dolor tempor vestibulum. Nullam eu mauris ornare, sodales libero sed, convallis ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n\r\n<p>Proin vulputate malesuada quam ut rhoncus. Suspendisse vestibulum scelerisque libero, vitae semper libero volutpat ac. Maecenas congue elementum mauris, ut pretium sem condimentum nec. Vivamus eu erat ac risus pulvinar lobortis. Ut eu vehicula risus. Fusce id fringilla lacus. Nullam eget libero ut quam suscipit eleifend. In mattis mollis ex et viverra. Suspendisse viverra facilisis finibus. Suspendisse vitae metus eu felis posuere elementum et a odio. Fusce tincidunt massa at felis scelerisque, et tempus lectus finibus.</p>\r\n\r\n<p>Sed non consectetur erat. Cras accumsan libero in neque faucibus, ut sagittis enim fermentum. Suspendisse volutpat maximus ante, non convallis neque dictum ut. Nulla felis massa, porta sed lacus nec, porttitor hendrerit massa. Mauris imperdiet, eros id posuere congue, tortor velit tincidunt neque, vel semper dui ante eget elit. Nullam bibendum elit id purus porttitor, sit amet pretium felis elementum. Integer vitae nisl risus. Nullam semper facilisis pulvinar. Nulla maximus ante eget fermentum tincidunt. Ut nunc tellus, blandit eget nisl a, tincidunt tristique ipsum. Integer pulvinar lorem in justo convallis, sed rutrum elit imperdiet. Morbi fermentum feugiat volutpat. Ut nulla turpis, consectetur ac nunc et, euismod fermentum mi.</p>\r\n\r\n<p>In faucibus nisi a nisi pellentesque, non tempus augue vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque vestibulum augue, sit amet dignissim magna suscipit in. Proin sollicitudin bibendum mi. Quisque a diam nulla. Sed ornare sodales risus, eget rutrum tortor vulputate id. Vivamus accumsan libero sit amet semper dapibus. Curabitur nec justo mi. Pellentesque eros sapien, scelerisque sed molestie at, porttitor eget dui. Curabitur risus sem, pulvinar vitae neque eu, suscipit ultrices leo. Nullam eu interdum mi, non ullamcorper felis. Nam id accumsan diam, id mollis nunc. Donec venenatis tincidunt nunc sed volutpat.</p>\r\n', '', '2017-12-21 00:00:00', '2018-01-30 13:34:07', 'None'),
(6, 'Terms & Conditions', 'TERMS', '<h1>Lorem Ipsum</h1>\r\n\r\n<p>&quot;Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...&quot;</p>\r\n\r\n<p>&quot;There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...&quot;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dui ex, vehicula at pretium vel, fringilla sit amet ligula. Aenean eget nisi id eros pellentesque iaculis. Duis diam elit, facilisis volutpat aliquam at, convallis sit amet urna. Aliquam porttitor viverra nulla, ultricies dictum nulla porttitor non. Fusce vel commodo nibh. Proin fermentum massa eu dolor tempor vestibulum. Nullam eu mauris ornare, sodales libero sed, convallis ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n\r\n<p>Proin vulputate malesuada quam ut rhoncus. Suspendisse vestibulum scelerisque libero, vitae semper libero volutpat ac. Maecenas congue elementum mauris, ut pretium sem condimentum nec. Vivamus eu erat ac risus pulvinar lobortis. Ut eu vehicula risus. Fusce id fringilla lacus. Nullam eget libero ut quam suscipit eleifend. In mattis mollis ex et viverra. Suspendisse viverra facilisis finibus. Suspendisse vitae metus eu felis posuere elementum et a odio. Fusce tincidunt massa at felis scelerisque, et tempus lectus finibus.</p>\r\n\r\n<p>Sed non consectetur erat. Cras accumsan libero in neque faucibus, ut sagittis enim fermentum. Suspendisse volutpat maximus ante, non convallis neque dictum ut. Nulla felis massa, porta sed lacus nec, porttitor hendrerit massa. Mauris imperdiet, eros id posuere congue, tortor velit tincidunt neque, vel semper dui ante eget elit. Nullam bibendum elit id purus porttitor, sit amet pretium felis elementum. Integer vitae nisl risus. Nullam semper facilisis pulvinar. Nulla maximus ante eget fermentum tincidunt. Ut nunc tellus, blandit eget nisl a, tincidunt tristique ipsum. Integer pulvinar lorem in justo convallis, sed rutrum elit imperdiet. Morbi fermentum feugiat volutpat. Ut nulla turpis, consectetur ac nunc et, euismod fermentum mi.</p>\r\n\r\n<p>In faucibus nisi a nisi pellentesque, non tempus augue vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque vestibulum augue, sit amet dignissim magna suscipit in. Proin sollicitudin bibendum mi. Quisque a diam nulla. Sed ornare sodales risus, eget rutrum tortor vulputate id. Vivamus accumsan libero sit amet semper dapibus. Curabitur nec justo mi. Pellentesque eros sapien, scelerisque sed molestie at, porttitor eget dui. Curabitur risus sem, pulvinar vitae neque eu, suscipit ultrices leo. Nullam eu interdum mi, non ullamcorper felis. Nam id accumsan diam, id mollis nunc. Donec venenatis tincidunt nunc sed volutpat.</p>\r\n', '', '2017-12-21 00:00:00', '2018-01-31 17:01:48', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `iConfigurationId` int(11) NOT NULL,
  `eSection` enum('General','Email','Appearance','Payment','Social Media','App Settings') NOT NULL,
  `tTitle` text NOT NULL,
  `vName` varchar(250) NOT NULL,
  `eType` enum('Textbox','Array','Image','Query') NOT NULL,
  `tExtra` text NOT NULL,
  `vValue` varchar(250) NOT NULL,
  `dtUpdatedDateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`iConfigurationId`, `eSection`, `tTitle`, `vName`, `eType`, `tExtra`, `vValue`, `dtUpdatedDateTime`) VALUES
(1, 'General', 'Website Title', 'DEFAULT_SITE_TITLE', 'Textbox', '', 'Bizeazy - The 5 minute Mobile App maker ', '2018-04-03 12:56:17'),
(3, 'General', 'Website Meta Title', 'DEFAULT_META_TITLE', 'Textbox', '', 'Bizeazy - The 5 minute Mobile App maker ', '2018-04-03 12:56:17'),
(4, 'General', 'Website Meta Descriptions', 'DEFAULT_META_DESCRIPTION', 'Textbox', '', 'Bizeazy - The 5 minute Mobile App maker is THE affordable and effective mobile E-Commerce solution!  Download the App and enter your Shopify Store url to preview your Shopify Store\'s completely integrated Mobile App.  You can do this for Free and wit', '2018-04-03 12:56:18'),
(5, 'General', 'Admin Panel Title', 'DEFAULT_ADMIN_TITLE', 'Textbox', '', 'Bizeazy - Admin', '2018-04-03 12:56:18'),
(6, 'General', 'Admin Panel Footer', 'DEFAULT_ADMIN_FOOTER', 'Textbox', '', '', '2018-04-03 12:56:18'),
(7, 'General', 'Default Paging Records', 'DEFAULT_RECORD_LIMIT', 'Array', '10|25|50|75|100', 'Array', '2018-04-03 12:56:18'),
(12, 'Email', 'Email From Name', 'DEFAULT_EMAIL_FROM_NAME', 'Textbox', '', '', '2018-04-03 12:56:19'),
(13, 'Email', 'Admin Email', 'DEFAULT_ADMIN_EMAIL', 'Textbox', '', '', '2018-04-03 12:56:19'),
(14, 'Email', 'No Reply Email', 'DEFAULT_NO_REPLY_EMAIL', 'Textbox', '', '', '2018-04-03 12:56:19'),
(15, 'Email', 'Mail Header', 'DEFAULT_MAIL_HEADER', 'Textbox', '', '', '2018-04-03 12:56:19'),
(16, 'Email', 'Mail Footer', 'DEFAULT_MAIL_FOOTER', 'Textbox', '', '', '2018-04-03 12:56:19'),
(17, 'Email', 'Email Host', 'DEFAULT_EMAIL_HOST', 'Textbox', '', '', '2018-04-03 12:56:19'),
(18, 'Email', 'Email Username', 'DEFAULT_EMAIL_USERNAME', 'Textbox', '', '', '2018-04-03 12:56:19'),
(19, 'Email', 'Email Password', 'DEFAULT_EMAIL_PASSWORD', 'Textbox', '', '', '2018-04-03 12:56:19'),
(20, 'Email', 'Email Port', 'DEFAULT_EMAIL_PORT', 'Textbox', '', '', '2018-04-03 12:56:19'),
(21, 'Appearance', 'Company Name', 'DEFAULT_COMPANY_NAME', 'Textbox', '', '', '2018-04-03 12:56:19'),
(22, 'Appearance', 'Company Address', 'DEFAULT_COMPANY_ADDRESS', 'Textbox', '', '', '2018-04-03 12:56:19'),
(23, 'Appearance', 'Company Phone', 'DEFAULT_COMPANY_PHONE', 'Textbox', '', '', '2018-04-03 12:56:19'),
(24, 'Appearance', 'Support Email ', 'DEFAULT_SUPPORT_EMAIL', 'Textbox', '', 'support@bizeazy.net', '2018-04-03 12:56:19'),
(25, 'Appearance', 'Copy Right Text', 'DEFAULT_COPY_RIGHT_TEXT', 'Textbox', '', '2018 © Bizeazy', '2018-04-03 12:56:19'),
(26, 'Payment', 'Payment Mode', 'DEFAULT_PAYMENT_MODE', 'Textbox', '', '', '2018-04-03 12:56:19'),
(28, 'Social Media', 'Facebook App Key', 'DEFAULT_FACEBOOK_APP_KEY', 'Textbox', '', '', '2018-04-03 12:56:19'),
(29, 'Social Media', 'Facebook', 'DEFAULT_FACEBOOK', 'Textbox', '', '', '2018-04-03 12:56:19'),
(30, 'Social Media', 'Google ', 'DEFAULT_GOOGLE', 'Textbox', '', '', '2018-04-03 12:56:19'),
(31, 'Social Media', 'LinkedIN', 'DEFAULT_LINKEDIN', 'Textbox', '', '', '2018-04-03 12:56:19'),
(32, 'Social Media', 'Twitter', 'DEFAULT_TWITTER', 'Textbox', '', '', '2018-04-03 12:56:19'),
(33, 'Social Media', 'Instagram', 'DEFAULT_INSTAGRAM', 'Textbox', '', '', '2018-04-03 12:56:19'),
(34, 'General', 'Current Latitude', 'CURRENT_LATITUDE', 'Textbox', '', '23.036577', '2018-04-03 12:56:18'),
(35, 'General', 'Current Longitude', 'CURRENT_LONGITUDE', 'Textbox', '', '72.561011', '2018-04-03 12:56:19'),
(36, 'App Settings', 'Google Play', 'DEFAULT_GOOGLE_PLAY', 'Textbox', '', 'https://play.google.com/store/apps/details?id=com.bizeazy.appmaker&hl=en', '2018-04-03 12:56:20'),
(37, 'App Settings', 'Apple Store', 'DEFAULT_APPLE_STORE', 'Textbox', '', 'https://itunes.apple.com/us/app/bizeazy-5-minute-mobile-app/id1185412960?ls=1&mt=8', '2018-04-03 12:56:20'),
(38, 'General', 'App Analytics Code', 'DEFAULT_ANALYTICS_APP_CODE', 'Textbox', '', 'UA-72890598-2', '2018-04-03 12:56:19'),
(40, 'General', 'Google Analytics Code', 'DEFAULT_ANALYTICS_GOOGLE_CODE', 'Textbox', '', 'UA-72890598-2', '2018-04-03 12:56:19'),
(41, 'General', 'Video URL', 'DEFAULT_VIDEO_URL', 'Textbox', '', 'https://www.youtube.com/watch?v=KXPw3NXVclk', '2018-04-03 12:56:19'),
(42, 'General', 'Company Logo', 'DEFAULT_LOGO', 'Image', '', 'https://s3.amazonaws.com/bizeazy.net/Configuration/DEFAULT_LOGO/2822371.png', '2018-03-29 10:51:37'),
(43, 'General', 'Bizeazy Web Logo', 'DEFAULT_WEB_LOGO', 'Image', '', 'https://s3.amazonaws.com/bizeazy.net/Configuration/DEFAULT_WEB_LOGO/3948550.png', '2018-04-03 12:55:00'),
(44, 'General', 'Bizeazy Shops Logo', 'DEFAULT_SHOPS_LOGO', 'Image', '', 'https://s3.amazonaws.com/bizeazy.net/Configuration/DEFAULT_SHOPS_LOGO/7719895.png', '2018-04-03 12:56:20');

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `iEmailTemplateId` int(11) NOT NULL,
  `vEmailCode` varchar(250) NOT NULL,
  `vFromName` varchar(250) NOT NULL,
  `vFromEmail` varchar(250) NOT NULL,
  `vEmailSubject` varchar(250) NOT NULL,
  `tEmailMessage` text NOT NULL,
  `dtCreatedDateTime` datetime NOT NULL,
  `dtUpdatedDateTime` datetime NOT NULL,
  `eStatus` enum('None','Archive') NOT NULL DEFAULT 'None'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`iEmailTemplateId`, `vEmailCode`, `vFromName`, `vFromEmail`, `vEmailSubject`, `tEmailMessage`, `dtCreatedDateTime`, `dtUpdatedDateTime`, `eStatus`) VALUES
(1, 'WELCOME_MESSAGE', 'Bizeazy', 'demo1.testing1@gmail.com', 'Welcome in Bizeazy', '', '2018-01-12 14:51:27', '2018-01-29 19:32:27', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `iFAQId` int(11) NOT NULL,
  `tQuestion` text NOT NULL,
  `tAnswer` text NOT NULL,
  `dtCreatedDateTime` datetime NOT NULL,
  `dtUpdatedDateTime` datetime NOT NULL,
  `eStatus` enum('Active','Inactive','Archive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`iFAQId`, `tQuestion`, `tAnswer`, `dtCreatedDateTime`, `dtUpdatedDateTime`, `eStatus`) VALUES
(1, 'How much will the COLA amount be for 2018 and when will I receive it?', '<p>Monthly Social Security and Supplemental Security Income (SSI) benefits for over 66 million Americans will increase 2.0 percent in 2018. The Social Security Act ties the annual cost-of-living (COLA) to the increase in the Consumer Price Index as determined by the Department of Labor&rsquo;s Bureau of Labor Statistics.&nbsp;<br />\r\n<br />\r\nThe increase will begin with benefits that Social Security beneficiaries receive in January 2018.&nbsp; Increased SSI payments will begin on December 29, 2017.&nbsp;</p>\r\n', '2018-01-01 00:00:00', '2018-01-31 17:38:46', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `login_logs`
--

CREATE TABLE `login_logs` (
  `iLoginId` int(11) NOT NULL,
  `vRole` varchar(250) NOT NULL,
  `ePlatformType` enum('App','Admin') NOT NULL DEFAULT 'Admin',
  `vName` varchar(250) NOT NULL,
  `vEmail` varchar(250) NOT NULL,
  `vIPAddress` varchar(250) NOT NULL,
  `vDeviceId` varchar(250) NOT NULL,
  `dtLoginDateTime` datetime NOT NULL,
  `dtLogoutDateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_logs`
--

INSERT INTO `login_logs` (`iLoginId`, `vRole`, `ePlatformType`, `vName`, `vEmail`, `vIPAddress`, `vDeviceId`, `dtLoginDateTime`, `dtLogoutDateTime`) VALUES
(1, 'Admin', 'Admin', 'Admin', 'admin@gmail.com', '192.168.1.99', '', '2018-03-28 12:57:49', '0000-00-00 00:00:00'),
(2, 'Admin', 'Admin', 'Admin', 'admin@gmail.com', '192.168.1.99', '', '2018-03-28 16:57:52', '0000-00-00 00:00:00'),
(3, 'Admin', 'Admin', 'Admin', 'admin@gmail.com', '192.168.1.99', '', '2018-03-29 10:51:15', '0000-00-00 00:00:00'),
(4, 'Admin', 'Admin', 'Admin', 'admin@gmail.com', '192.168.1.99', '', '2018-03-29 11:17:25', '0000-00-00 00:00:00'),
(5, 'Admin', 'Admin', 'Admin', 'admin@gmail.com', '192.168.1.99', '', '2018-03-29 12:10:14', '0000-00-00 00:00:00'),
(6, 'Admin', 'Admin', 'Admin', 'admin@gmail.com', '180.211.99.182', '', '2018-04-03 12:55:07', '0000-00-00 00:00:00'),
(7, 'Admin', 'Admin', 'Admin', 'admin@gmail.com', '192.168.1.99', '', '2018-04-06 19:14:12', '0000-00-00 00:00:00'),
(8, 'Admin', 'Admin', 'Admin', 'admin@gmail.com', '192.168.1.99', '', '2018-04-12 13:08:15', '0000-00-00 00:00:00'),
(9, 'Admin', 'Admin', 'Admin', 'admin@gmail.com', '192.168.1.6', '', '2018-05-02 11:39:01', '0000-00-00 00:00:00'),
(10, 'Admin', 'Admin', 'Admin', 'admin@gmail.com', '192.168.1.16', '', '2018-05-15 13:28:58', '0000-00-00 00:00:00'),
(11, 'Admin', 'Admin', 'Admin', 'admin@gmail.com', '192.168.1.11', '', '2018-06-07 11:15:15', '0000-00-00 00:00:00'),
(12, 'Admin', 'Admin', 'Admin', 'admin@gmail.com', '192.168.1.11', '', '2018-06-07 11:38:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `iMemberShipId` int(11) NOT NULL,
  `iShopId` int(11) NOT NULL,
  `vChargeId` varchar(250) NOT NULL,
  `eMembershipType` enum('Purchase','Monthly') NOT NULL DEFAULT 'Purchase',
  `eMembershipName` enum('One Time Purchase','Standard','Business','Advanced') NOT NULL DEFAULT 'One Time Purchase',
  `eChargeStatus` enum('Pending','Accepted','Active','Declined','Expired','Frozen','Cancelled') NOT NULL DEFAULT 'Pending',
  `dPrice` double(10,2) NOT NULL,
  `dStartDate` date NOT NULL,
  `dEndDate` date NOT NULL,
  `tAskReason` text NOT NULL,
  `dtCreatedDateTime` datetime NOT NULL,
  `dtUpdatedDateTime` datetime NOT NULL,
  `eMembershipStatus` enum('Active','Pending','Cancel') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`iMemberShipId`, `iShopId`, `vChargeId`, `eMembershipType`, `eMembershipName`, `eChargeStatus`, `dPrice`, `dStartDate`, `dEndDate`, `tAskReason`, `dtCreatedDateTime`, `dtUpdatedDateTime`, `eMembershipStatus`) VALUES
(1, 1, '1327431727', 'Monthly', 'Standard', 'Pending', 29.99, '2018-04-03', '2018-05-03', '', '2018-04-03 12:58:08', '0000-00-00 00:00:00', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(20180322124630);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `iNewsLetterId` int(11) NOT NULL,
  `vName` varchar(250) NOT NULL,
  `vEmail` varchar(250) NOT NULL,
  `dtCreatedDateTime` datetime NOT NULL,
  `dtUpdatedDateTime` datetime NOT NULL,
  `eStatus` enum('Active','Inactive','Archive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`iNewsLetterId`, `vName`, `vEmail`, `dtCreatedDateTime`, `dtUpdatedDateTime`, `eStatus`) VALUES
(1, 'aa', 'admin@admin.com', '2018-03-29 11:48:29', '0000-00-00 00:00:00', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `iNotificationId` int(11) NOT NULL,
  `iShopId` int(11) NOT NULL,
  `tTitle` text NOT NULL,
  `tMessage` text NOT NULL,
  `dtCreatedDateTime` datetime NOT NULL,
  `dtUpdatedDateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`iNotificationId`, `iShopId`, `tTitle`, `tMessage`, `dtCreatedDateTime`, `dtUpdatedDateTime`) VALUES
(1, 1, 'HI', 'Hello', '2018-04-03 12:58:51', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `iShopId` int(11) NOT NULL,
  `vName` varchar(255) NOT NULL,
  `vLogo` varchar(255) NOT NULL,
  `vSplash1` varchar(255) NOT NULL,
  `vSplash2` varchar(255) NOT NULL,
  `vSplash3` varchar(255) NOT NULL,
  `vHeaderColor` varchar(255) NOT NULL,
  `vBodyColor` varchar(255) NOT NULL,
  `vButtonColor` varchar(255) NOT NULL,
  `vButtonFontColor` varchar(255) NOT NULL,
  `vThemeColor` varchar(255) NOT NULL,
  `vDomain` varchar(255) NOT NULL,
  `vShopifyDomain` varchar(255) NOT NULL,
  `vCurrency` varchar(255) NOT NULL,
  `vToken` varchar(255) NOT NULL,
  `vMoneyFormat` varchar(255) NOT NULL,
  `vContactName` varchar(255) NOT NULL,
  `vContactEmail` varchar(255) NOT NULL,
  `vContactPhoneNo` varchar(255) NOT NULL,
  `tContactAddress` text NOT NULL,
  `vContactCity` varchar(255) NOT NULL,
  `vContactProvince` varchar(255) NOT NULL,
  `vContactCountry` varchar(255) NOT NULL,
  `vContactZipCode` varchar(255) NOT NULL,
  `vContactSource` varchar(255) NOT NULL,
  `eDesignType` enum('Custom','Generated') NOT NULL DEFAULT 'Generated',
  `eCustomizeType` enum('1','0') NOT NULL DEFAULT '1',
  `dtCreatedDateTime` datetime NOT NULL,
  `dtUpdatedDateTime` datetime NOT NULL,
  `eStatus` enum('Pending','Active','Inactive','Archive') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`iShopId`, `vName`, `vLogo`, `vSplash1`, `vSplash2`, `vSplash3`, `vHeaderColor`, `vBodyColor`, `vButtonColor`, `vButtonFontColor`, `vThemeColor`, `vDomain`, `vShopifyDomain`, `vCurrency`, `vToken`, `vMoneyFormat`, `vContactName`, `vContactEmail`, `vContactPhoneNo`, `tContactAddress`, `vContactCity`, `vContactProvince`, `vContactCountry`, `vContactZipCode`, `vContactSource`, `eDesignType`, `eCustomizeType`, `dtCreatedDateTime`, `dtUpdatedDateTime`, `eStatus`) VALUES
(1, 'test-store-21003', 'https://s3.amazonaws.com/bizeazy.net/Shops/1/Logo/5204499.jpg', 'https://s3.amazonaws.com/bizeazy.net/Shops/1/SplashScreen/2027306.jpg', 'https://s3.amazonaws.com/bizeazy.net/Shops/1/SplashScreen/4130491.jpg', 'https://s3.amazonaws.com/bizeazy.net/Shops/1/SplashScreen/9141868.png', '#ff893b', '#ffffff', '#ff893b', '#bbbbbb', 'Sharp', 'test-store-21003.myshopify.com', 'test-store-21003.myshopify.com', 'CAD', '9ec1a87de9da8a656322500b8f1096b4', '${{amount}}', 'Jason Cowles', 'admin@bizeazy.net', '780-932-6381', '32 Crystal Way', 'Sherwo', 'Alberta', 'CA', 'T8H 1T9', 'developer-8df3c29ff32ddb98', 'Generated', '1', '2018-04-03 12:55:35', '2018-04-12 15:25:41', 'Inactive'),
(2, 'test-store-21008', 'https://s3.amazonaws.com/bizeazy.net/Shops/2/Logo/4130504.png', 'https://s3.amazonaws.com/bizeazy.net/Shops/2/SplashScreen/8527243.png', 'https://s3.amazonaws.com/bizeazy.net/Shops/2/SplashScreen/9991271.png', 'https://s3.amazonaws.com/bizeazy.net/Shops/2/SplashScreen/4458655.png', '#5253ff', '#b5eeff', '#000000', '#bbbbbb', 'Light', 'test-store-21008.myshopify.com', 'test-store-21008.myshopify.com', 'CAD', 'd469c9f4f0fe15b810e5d8e4059e46a8', '${{amount}}', 'Jason Cowles', 'admin@bizeazy.net', '780-932-6381', '32 Crystal Way', 'Sherwo', 'Alberta', 'CA', 'T8H 1T9', 'developer-8df3c29ff32ddb98', 'Custom', '1', '2018-04-03 13:04:41', '2018-04-03 13:06:49', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `shop_navs`
--

CREATE TABLE `shop_navs` (
  `iShopNavId` int(11) NOT NULL,
  `iShopId` int(11) NOT NULL,
  `iParentId` int(11) NOT NULL,
  `vName` varchar(255) NOT NULL,
  `vHandle` varchar(255) NOT NULL,
  `eNavType` enum('Page','Col') NOT NULL DEFAULT 'Page'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop_navs`
--

INSERT INTO `shop_navs` (`iShopNavId`, `iShopId`, `iParentId`, `vName`, `vHandle`, `eNavType`) VALUES
(1, 1, 0, 'Home page', 'frontpage', 'Col'),
(2, 1, 0, 'Party Wear Gown', 'party-wear-gown', 'Col'),
(3, 1, 0, 'Retro Collection', 'retro-collection', 'Col'),
(4, 2, 0, 'Home page', 'frontpage', 'Col'),
(5, 2, 0, 'Hp', 'hp', 'Col'),
(6, 2, 0, '123333', '', 'Page');

-- --------------------------------------------------------

--
-- Table structure for table `support_messages`
--

CREATE TABLE `support_messages` (
  `iTicketId` int(11) NOT NULL,
  `iShopId` int(11) NOT NULL,
  `vName` varchar(255) NOT NULL,
  `vEmail` varchar(255) NOT NULL,
  `tMessage` text NOT NULL,
  `dtCreatedDateTime` datetime NOT NULL,
  `dtUpdatedDateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `support_messages`
--

INSERT INTO `support_messages` (`iTicketId`, `iShopId`, `vName`, `vEmail`, `tMessage`, `dtCreatedDateTime`, `dtUpdatedDateTime`) VALUES
(1, 0, 'bhupendra', 'bhupendra@gmail.com', 'hi', '2018-03-29 11:17:57', '0000-00-00 00:00:00'),
(2, 1, 'abc', 'bhupendra@gmail.com', 'hi', '2018-04-03 12:59:58', '0000-00-00 00:00:00'),
(3, 0, 'sasadf', 'sdf@gmail.com', 'sdfsdf', '2018-04-04 16:34:24', '2018-04-04 16:34:24'),
(4, 0, 'sdfsf', 'dsfds', 'dfsdsf', '2018-06-07 11:31:58', '2018-06-07 11:31:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`iAdminId`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`iCMSId`);

--
-- Indexes for table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`iConfigurationId`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`iEmailTemplateId`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`iFAQId`);

--
-- Indexes for table `login_logs`
--
ALTER TABLE `login_logs`
  ADD PRIMARY KEY (`iLoginId`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`iMemberShipId`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`iNewsLetterId`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`iNotificationId`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`iShopId`);

--
-- Indexes for table `shop_navs`
--
ALTER TABLE `shop_navs`
  ADD PRIMARY KEY (`iShopNavId`);

--
-- Indexes for table `support_messages`
--
ALTER TABLE `support_messages`
  ADD PRIMARY KEY (`iTicketId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `iAdminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `iCMSId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `iConfigurationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `iEmailTemplateId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `iFAQId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login_logs`
--
ALTER TABLE `login_logs`
  MODIFY `iLoginId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `iMemberShipId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `iNewsLetterId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `iNotificationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `iShopId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `shop_navs`
--
ALTER TABLE `shop_navs`
  MODIFY `iShopNavId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `support_messages`
--
ALTER TABLE `support_messages`
  MODIFY `iTicketId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
