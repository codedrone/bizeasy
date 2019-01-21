<?php

class ConfigurationSeeder extends Seeder {

    private $table = 'configurations';

    public function run() {
        $this->db->truncate($this->table);
        
        //seed records manually
        echo "seeding  ".$this->table;
        $this->db->query("INSERT INTO `configurations` (`iConfigurationId`, `eSection`, `tTitle`, `vName`, `eType`, `tExtra`, `vValue`, `dtUpdatedDateTime`) VALUES
(1, 'General', 'Website Title', 'DEFAULT_SITE_TITLE', 'Textbox', '', 'Bizeazy - The 5 minute Mobile App maker ', '2018-06-18 11:36:35'),
(3, 'General', 'Website Meta Title', 'DEFAULT_META_TITLE', 'Textbox', '', 'Bizeazy - The 5 minute Mobile App maker ', '2018-06-18 11:36:35'),
(4, 'General', 'Website Meta Descriptions', 'DEFAULT_META_DESCRIPTION', 'Textbox', '', 'Bizeazy - The 5 minute Mobile App maker is THE affordable and effective mobile E-Commerce solution!  Download the App and enter your Shopify Store url to preview your Shopify Store\'s completely integrated Mobile App.  You can do this for Free and wit', '2018-06-18 11:36:35'),
(5, 'General', 'Admin Panel Title', 'DEFAULT_ADMIN_TITLE', 'Textbox', '', 'Bizeazy - Admin', '2018-06-18 11:36:35'),
(6, 'General', 'Admin Panel Footer', 'DEFAULT_ADMIN_FOOTER', 'Textbox', '', '', '2018-06-18 11:36:35'),
(7, 'General', 'Default Paging Records', 'DEFAULT_RECORD_LIMIT', 'Array', '10|25|50|75|100', 'Array', '2018-06-18 11:36:35'),
(12, 'Email', 'Email From Name', 'DEFAULT_EMAIL_FROM_NAME', 'Textbox', '', '', '2018-06-18 11:36:36'),
(13, 'Email', 'Admin Email', 'DEFAULT_ADMIN_EMAIL', 'Textbox', '', '', '2018-06-18 11:36:36'),
(14, 'Email', 'No Reply Email', 'DEFAULT_NO_REPLY_EMAIL', 'Textbox', '', '', '2018-06-18 11:36:36'),
(15, 'Email', 'Mail Header', 'DEFAULT_MAIL_HEADER', 'Textbox', '', '', '2018-06-18 11:36:36'),
(16, 'Email', 'Mail Footer', 'DEFAULT_MAIL_FOOTER', 'Textbox', '', '', '2018-06-18 11:36:36'),
(17, 'Email', 'Email Host', 'DEFAULT_EMAIL_HOST', 'Textbox', '', '', '2018-06-18 11:36:36'),
(18, 'Email', 'Email Username', 'DEFAULT_EMAIL_USERNAME', 'Textbox', '', '', '2018-06-18 11:36:36'),
(19, 'Email', 'Email Password', 'DEFAULT_EMAIL_PASSWORD', 'Textbox', '', '', '2018-06-18 11:36:36'),
(20, 'Email', 'Email Port', 'DEFAULT_EMAIL_PORT', 'Textbox', '', '', '2018-06-18 11:36:36'),
(21, 'Appearance', 'Company Name', 'DEFAULT_COMPANY_NAME', 'Textbox', '', '', '2018-06-18 11:36:36'),
(22, 'Appearance', 'Company Address', 'DEFAULT_COMPANY_ADDRESS', 'Textbox', '', '', '2018-06-18 11:36:36'),
(23, 'Appearance', 'Company Phone', 'DEFAULT_COMPANY_PHONE', 'Textbox', '', '', '2018-06-18 11:36:36'),
(24, 'Appearance', 'Support Email ', 'DEFAULT_SUPPORT_EMAIL', 'Textbox', '', 'support@bizeazy.net', '2018-06-18 11:36:36'),
(25, 'Appearance', 'Copy Right Text', 'DEFAULT_COPY_RIGHT_TEXT', 'Textbox', '', '2018 © Bizeazy', '2018-06-18 11:36:36'),
(26, 'Payment', 'Payment Mode', 'DEFAULT_PAYMENT_MODE', 'Textbox', '', '', '2018-06-18 11:36:36'),
(28, 'Social Media', 'Facebook App Key', 'DEFAULT_FACEBOOK_APP_KEY', 'Textbox', '', '', '2018-06-18 11:36:36'),
(29, 'Social Media', 'Facebook', 'DEFAULT_FACEBOOK', 'Textbox', '', '', '2018-06-18 11:36:36'),
(30, 'Social Media', 'Google ', 'DEFAULT_GOOGLE', 'Textbox', '', '', '2018-06-18 11:36:36'),
(31, 'Social Media', 'LinkedIN', 'DEFAULT_LINKEDIN', 'Textbox', '', '', '2018-06-18 11:36:36'),
(32, 'Social Media', 'Twitter', 'DEFAULT_TWITTER', 'Textbox', '', '', '2018-06-18 11:36:36'),
(33, 'Social Media', 'Instagram', 'DEFAULT_INSTAGRAM', 'Textbox', '', '', '2018-06-18 11:36:37'),
(34, 'General', 'Current Latitude', 'CURRENT_LATITUDE', 'Textbox', '', '23.036577', '2018-06-18 11:36:35'),
(35, 'General', 'Current Longitude', 'CURRENT_LONGITUDE', 'Textbox', '', '72.561011', '2018-06-18 11:36:36'),
(36, 'App Settings', 'Google Play', 'DEFAULT_GOOGLE_PLAY', 'Textbox', '', 'https://play.google.com/store/apps/details?id=com.bizeazy.appmaker&hl=en', '2018-06-18 11:36:37'),
(37, 'App Settings', 'Apple Store', 'DEFAULT_APPLE_STORE', 'Textbox', '', 'https://itunes.apple.com/us/app/bizeazy-5-minute-mobile-app/id1185412960?ls=1&mt=8', '2018-06-18 11:36:37'),
(38, 'General', 'App Analytics Code', 'DEFAULT_ANALYTICS_APP_CODE', 'Textbox', '', 'UA-72890598-2', '2018-06-18 11:36:36'),
(40, 'General', 'Google Analytics Code', 'DEFAULT_ANALYTICS_GOOGLE_CODE', 'Textbox', '', 'UA-72890598-2', '2018-06-18 11:36:36'),
(41, 'General', 'Video URL', 'DEFAULT_VIDEO_URL', 'Textbox', '', 'https://www.youtube.com/watch?v=KXPw3NXVclk', '2018-06-18 11:36:36'),
(42, 'General', 'Company Logo', 'DEFAULT_LOGO', 'Image', '', 'https://s3.amazonaws.com/bizeazy.net/Configuration/DEFAULT_LOGO/1531674.png', '2018-06-18 11:36:39'),
(43, 'General', 'Bizeazy Web Logo', 'DEFAULT_WEB_LOGO', 'Image', '', 'https://s3.amazonaws.com/bizeazy.net/Configuration/DEFAULT_WEB_LOGO/3948550.png', '2018-04-03 12:55:00'),
(44, 'General', 'Bizeazy Shops Logo', 'DEFAULT_SHOPS_LOGO', 'Image', '', 'https://s3.amazonaws.com/bizeazy.net/Configuration/DEFAULT_SHOPS_LOGO/7719895.png', '2018-04-03 12:56:20');
                ");
        echo PHP_EOL;
    }
}
