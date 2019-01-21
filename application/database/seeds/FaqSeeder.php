<?php

class FaqSeeder extends Seeder {

    private $table = 'faq';

    public function run() {
        $this->db->truncate($this->table);
        
        //seed records manually
        echo "seeding  ".$this->table;
        $this->db->query("INSERT INTO `faq` (`iFAQId`, `tQuestion`, `tAnswer`, `dtCreatedDateTime`, `dtUpdatedDateTime`, `eStatus`) VALUES
(1, 'How much will the COLA amount be for 2018 and when will I receive it?', 'Monthly Social Security and Supplemental Security Income (SSI) benefits for over 66 million Americans will increase 2.0 percent in 2018. The Social Security Act ties the annual cost-of-living (COLA) to the increase in the Consumer Price Index as determined by the Department of Labor’s Bureau of Labor Statistics.\r\nThe increase will begin with benefits that Social Security beneficiaries receive in January 2018.  Increased SSI payments will begin on December 29, 2017\r\n', '2018-01-01 00:00:00', '2018-06-15 19:38:25', 'Active'),
(4, 'How long before my App is available on the AppStore?', '1 day for Google Play. Up to 5 days for the AppStore.\r\n', '2018-06-15 19:25:50', '2018-06-15 19:37:23', 'Active'),
(5, 'If I purchase the Basic Plan, can I upgrade in the future?', 'Yes, You sure can!\r\n', '2018-06-15 19:26:08', '2018-06-15 19:38:46', 'Active'),
(6, 'Can I have my app customized after it’s live on the App Store?', 'Yes. It’s quite normal for our customers to request customizations. We offer very cost effective flat rates and hourly rate “customization” contracts depending on the requirements.\r\n', '2018-06-15 19:26:25', '2018-06-15 19:36:49', 'Active'),
(7, 'Can I purchase the app rather than subscribe to a monthly plan?', 'Yes. We understand that some customers are more interested in buying their app outright, rather than renting them for a monthly fee. Our “Purchase Plan”, is the most cost-effective solution you will find anywhere! Pay a one-time charge to purchase your app, source code and copyright at a fraction of the cost it would take to hire a software developer or development firm.\r\n', '2018-06-15 19:26:40', '2018-06-15 19:36:41', 'Active'),
(8, 'Will I need an Apple (IOS) and/or Google (Android) Developer account?', 'Yes. In order for us to submit your mobile app to the App Stores, a developer account (Apple or Google or both depending on your subscription) needs to be created. But don’t worry, we will look after dealing with the App Store’s so you don’t have to! All we need is for you to add us to your developer account profile. We will then submit your mobile app on your behalf. If you have questions or concerns, we’re always available via email, phone or chat.\r\n', '2018-06-15 19:26:57', '2018-06-15 19:36:26', 'Active');");
        echo PHP_EOL;
    }
}
