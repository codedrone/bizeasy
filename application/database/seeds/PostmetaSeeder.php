<?php

class PostmetaSeeder extends Seeder {

    private $table = 'wp_postmeta';

    public function run() {
        $this->db->truncate($this->table);
        
        //seed records manually
        echo "seeding"  .$this->table;
        $this->db->query("INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 3, '_wp_page_template', 'default'),
(21, 14, '_wp_attached_file', '2018/06/blog.jpg'),
(22, 14, '_wp_attachment_metadata', 'a:5:{s:5:width;i:741;s:6:height;i:546;s:4:file;s:16:2018/06/blog.jpg;s:5:sizes;a:3:{s:9:thumbnail;a:4:{s:4:file;s:16:blog-150x150.jpg;s:5:width;i:150;s:6:height;i:150;s:9:mime-type;s:10:image/jpeg;}s:6:medium;a:4:{s:4:file;s:16:blog-300x221.jpg;s:5:width;i:300;s:6:height;i:221;s:9:mime-type;s:10:image/jpeg;}s:32:twentyseventeen-thumbnail-avatar;a:4:{s:4:file;s:16:blog-100x100.jpg;s:5:width;i:100;s:6:height;i:100;s:9:mime-type;s:10:image/jpeg;}}s:10:image_meta;a:12:{s:8:aperture;s:1:0;s:6:credit;s:0:;s:6:camera;s:0:;s:7:caption;s:0:;s:17:created_timestamp;s:1:0;s:9:copyright;s:0:;s:12:focal_length;s:1:0;s:3:iso;s:1:0;s:13:shutter_speed;s:1:0;s:5:title;s:0:;s:11:orientation;s:1:0;s:8:keywords;a:0:{}}}'),
(53, 23, '_wp_trash_meta_status', 'publish'),
(54, 23, '_wp_trash_meta_time', '1528437815'),
(55, 24, '_wp_trash_meta_status', 'publish'),
(56, 24, '_wp_trash_meta_time', '1528437881'),
(57, 25, '_wp_trash_meta_status', 'publish'),
(58, 25, '_wp_trash_meta_time', '1528437928'),
(59, 26, '_wp_trash_meta_status', 'publish'),
(60, 26, '_wp_trash_meta_time', '1528437956'),
(61, 27, '_edit_lock', '1528437969:1'),
(62, 27, '_wp_trash_meta_status', 'publish'),
(63, 27, '_wp_trash_meta_time', '1528437978'),
(64, 28, '_wp_trash_meta_status', 'publish'),
(65, 28, '_wp_trash_meta_time', '1528438006'),
(66, 29, '_wp_attached_file', '2018/06/logo.png'),
(67, 29, '_wp_attachment_metadata', 'a:5:{s:5:width;i:200;s:6:height;i:140;s:4:file;s:16:2018/06/logo.png;s:5:sizes;a:1:{s:9:thumbnail;a:4:{s:4:file;s:16:logo-150x140.png;s:5:width;i:150;s:6:height;i:140;s:9:mime-type;s:9:image/png;}}s:10:image_meta;a:12:{s:8:aperture;s:1:0;s:6:credit;s:0:;s:6:camera;s:0:;s:7:caption;s:0:;s:17:created_timestamp;s:1:0;s:9:copyright;s:0:;s:12:focal_length;s:1:0;s:3:iso;s:1:0;s:13:shutter_speed;s:1:0;s:5:title;s:0:;s:11:orientation;s:1:0;s:8:keywords;a:0:{}}}'),
(70, 30, '_wp_trash_meta_status', 'publish'),
(71, 30, '_wp_trash_meta_time', '1528438134'),
(72, 31, '_edit_lock', '1528438209:1'),
(73, 31, '_wp_trash_meta_status', 'publish'),
(74, 31, '_wp_trash_meta_time', '1528438244'),
(75, 32, '_wp_trash_meta_status', 'publish'),
(76, 32, '_wp_trash_meta_time', '1528438261'),
(77, 33, '_wp_trash_meta_status', 'publish'),
(78, 33, '_wp_trash_meta_time', '1528438301'),
(79, 34, '_wp_trash_meta_status', 'publish'),
(80, 34, '_wp_trash_meta_time', '1528438498'),
(81, 35, '_wp_trash_meta_status', 'publish'),
(82, 35, '_wp_trash_meta_time', '1528438525'),
(83, 36, '_wp_trash_meta_status', 'publish'),
(84, 36, '_wp_trash_meta_time', '1528438536'),
(85, 37, '_wp_trash_meta_status', 'publish'),
(86, 37, '_wp_trash_meta_time', '1528438542'),
(87, 38, '_wp_trash_meta_status', 'publish'),
(88, 38, '_wp_trash_meta_time', '1528439044'),
(89, 39, '_wp_trash_meta_status', 'publish'),
(90, 39, '_wp_trash_meta_time', '1528439053'),
(91, 40, '_wp_trash_meta_status', 'publish'),
(92, 40, '_wp_trash_meta_time', '1528447365'),
(93, 41, '_wp_trash_meta_status', 'publish'),
(94, 41, '_wp_trash_meta_time', '1528447381'),
(95, 42, '_wp_trash_meta_status', 'publish'),
(96, 42, '_wp_trash_meta_time', '1528447390'),
(97, 43, '_wp_trash_meta_status', 'publish'),
(98, 43, '_wp_trash_meta_time', '1528447440'),
(99, 44, '_wp_trash_meta_status', 'publish'),
(100, 44, '_wp_trash_meta_time', '1528447446'),
(101, 45, '_edit_last', '1'),
(102, 45, '_edit_lock', '1528712681:1'),
(103, 47, '_wp_trash_meta_status', 'publish'),
(104, 47, '_wp_trash_meta_time', '1528456374'),
(105, 45, '_wp_page_template', 'default'),
(106, 50, '_form', '<div class=row>\n<div class=bizeasy-col-2>\n    <div class=input-field>[text* contact-name id:contact-name class:bizeasy-col-2 placeholder Name]<span class=form-user></span></div>\n</div>\n<div class=bizeasy-col-2>\n<div class=input-field>[email* email id:email class:bizeasy-col-2 placeholder Email]<span class=form-mail></span></div>\n</div>\n</div><!-- /.row -->\n<div class=input-field>[textarea* message id:message class:message placeholder Message]<span class=form-edit></span></div>\n<div class=submit-wrapper text-right><button type=submit class=theme-btn waves-effect waves-light btn wpcf7-form-control wpcf7-submit>Send Message</button>\n</div>'),
(107, 50, '_mail', 'a:9:{s:6:active;b:1;s:7:subject;s:29:Bizeazy Blog [your-subject];s:6:sender;s:36:[your-name] <wordpress@192.168.1.14>;s:9:recipient;s:24:demo1.testing1@gmail.com;s:4:body;s:187:From: [your-name] <[your-email]>\nSubject: [your-subject]\n\nMessage Body:\n[your-message]\n\n-- \nThis e-mail was sent from a contact form on Bizeazy Blog (http://192.168.1.14/api/bizeazy/blog);s:18:additional_headers;s:17:Reply-To: [email];s:11:attachments;s:0:;s:8:use_html;b:0;s:13:exclude_blank;b:0;}'),
(108, 50, '_mail_2', 'a:9:{s:6:active;b:0;s:7:subject;s:29:Bizeazy Blog [your-subject];s:6:sender;s:37:Bizeazy Blog <wordpress@192.168.1.14>;s:9:recipient;s:12:[your-email];s:4:body;s:129:Message Body:\n[your-message]\n\n-- \nThis e-mail was sent from a contact form on Bizeazy Blog (http://192.168.1.14/api/bizeazy/blog);s:18:additional_headers;s:34:Reply-To: demo1.testing1@gmail.com;s:11:attachments;s:0:;s:8:use_html;b:0;s:13:exclude_blank;b:0;}'),
(109, 50, '_messages', 'a:23:{s:12:mail_sent_ok;s:45:Thank you for your message. It has been sent.;s:12:mail_sent_ng;s:71:There was an error trying to send your message. Please try again later.;s:16:validation_error;s:61:One or more fields have an error. Please check and try again.;s:4:spam;s:71:There was an error trying to send your message. Please try again later.;s:12:accept_terms;s:69:You must accept the terms and conditions before sending your message.;s:16:invalid_required;s:22:The field is required.;s:16:invalid_too_long;s:22:The field is too long.;s:17:invalid_too_short;s:23:The field is too short.;s:12:invalid_date;s:29:The date format is incorrect.;s:14:date_too_early;s:44:The date is before the earliest one allowed.;s:13:date_too_late;s:41:The date is after the latest one allowed.;s:13:upload_failed;s:46:There was an unknown error uploading the file.;s:24:upload_file_type_invalid;s:49:You are not allowed to upload files of this type.;s:21:upload_file_too_large;s:20:The file is too big.;s:23:upload_failed_php_error;s:38:There was an error uploading the file.;s:14:invalid_number;s:29:The number format is invalid.;s:16:number_too_small;s:47:The number is smaller than the minimum allowed.;s:16:number_too_large;s:46:The number is larger than the maximum allowed.;s:23:quiz_answer_not_correct;s:36:The answer to the quiz is incorrect.;s:17:captcha_not_match;s:31:Your entered code is incorrect.;s:13:invalid_email;s:38:The e-mail address entered is invalid.;s:11:invalid_url;s:19:The URL is invalid.;s:11:invalid_tel;s:32:The telephone number is invalid.;}'),
(110, 50, '_additional_settings', ''),
(111, 50, '_locale', 'en_US'),
(126, 51, '_wp_trash_meta_status', 'publish'),
(127, 51, '_wp_trash_meta_time', '1528521969'),
(157, 55, '_wp_attached_file', '2018/06/cover-1.jpg'),
(158, 55, '_wp_attachment_metadata', 'a:5:{s:5:width;i:1200;s:6:height;i:600;s:4:file;s:19:2018/06/cover-1.jpg;s:5:sizes;a:5:{s:9:thumbnail;a:4:{s:4:file;s:19:cover-1-150x150.jpg;s:5:width;i:150;s:6:height;i:150;s:9:mime-type;s:10:image/jpeg;}s:6:medium;a:4:{s:4:file;s:19:cover-1-300x150.jpg;s:5:width;i:300;s:6:height;i:150;s:9:mime-type;s:10:image/jpeg;}s:12:medium_large;a:4:{s:4:file;s:19:cover-1-768x384.jpg;s:5:width;i:768;s:6:height;i:384;s:9:mime-type;s:10:image/jpeg;}s:5:large;a:4:{s:4:file;s:20:cover-1-1024x512.jpg;s:5:width;i:1024;s:6:height;i:512;s:9:mime-type;s:10:image/jpeg;}s:14:post-thumbnail;a:4:{s:4:file;s:20:cover-1-1200x600.jpg;s:5:width;i:1200;s:6:height;i:600;s:9:mime-type;s:10:image/jpeg;}}s:10:image_meta;a:12:{s:8:aperture;s:1:0;s:6:credit;s:0:;s:6:camera;s:0:;s:7:caption;s:0:;s:17:created_timestamp;s:1:0;s:9:copyright;s:0:;s:12:focal_length;s:1:0;s:3:iso;s:1:0;s:13:shutter_speed;s:1:0;s:5:title;s:0:;s:11:orientation;s:1:0;s:8:keywords;a:0:{}}}'),
(166, 58, '_wp_attached_file', '2018/06/blog-1.jpg'),
(167, 58, '_wp_attachment_metadata', 'a:5:{s:5:width;i:738;s:6:height;i:301;s:4:file;s:18:2018/06/blog-1.jpg;s:5:sizes;a:2:{s:9:thumbnail;a:4:{s:4:file;s:18:blog-1-150x150.jpg;s:5:width;i:150;s:6:height;i:150;s:9:mime-type;s:10:image/jpeg;}s:6:medium;a:4:{s:4:file;s:18:blog-1-300x122.jpg;s:5:width;i:300;s:6:height;i:122;s:9:mime-type;s:10:image/jpeg;}}s:10:image_meta;a:12:{s:8:aperture;s:1:0;s:6:credit;s:0:;s:6:camera;s:0:;s:7:caption;s:0:;s:17:created_timestamp;s:1:0;s:9:copyright;s:0:;s:12:focal_length;s:1:0;s:3:iso;s:1:0;s:13:shutter_speed;s:1:0;s:5:title;s:0:;s:11:orientation;s:1:0;s:8:keywords;a:0:{}}}'),
(173, 61, '_wp_attached_file', '2018/06/blog-2.jpg'),
(174, 61, '_wp_attachment_metadata', 'a:5:{s:5:width;i:738;s:6:height;i:301;s:4:file;s:18:2018/06/blog-2.jpg;s:5:sizes;a:2:{s:9:thumbnail;a:4:{s:4:file;s:18:blog-2-150x150.jpg;s:5:width;i:150;s:6:height;i:150;s:9:mime-type;s:10:image/jpeg;}s:6:medium;a:4:{s:4:file;s:18:blog-2-300x122.jpg;s:5:width;i:300;s:6:height;i:122;s:9:mime-type;s:10:image/jpeg;}}s:10:image_meta;a:12:{s:8:aperture;s:1:0;s:6:credit;s:0:;s:6:camera;s:0:;s:7:caption;s:0:;s:17:created_timestamp;s:1:0;s:9:copyright;s:0:;s:12:focal_length;s:1:0;s:3:iso;s:1:0;s:13:shutter_speed;s:1:0;s:5:title;s:0:;s:11:orientation;s:1:0;s:8:keywords;a:0:{}}}'),
(180, 64, '_wp_attached_file', '2018/06/2.jpg'),
(181, 64, '_wp_attachment_metadata', 'a:5:{s:5:width;i:520;s:6:height;i:268;s:4:file;s:13:2018/06/2.jpg;s:5:sizes;a:2:{s:9:thumbnail;a:4:{s:4:file;s:13:2-150x150.jpg;s:5:width;i:150;s:6:height;i:150;s:9:mime-type;s:10:image/jpeg;}s:6:medium;a:4:{s:4:file;s:13:2-300x155.jpg;s:5:width;i:300;s:6:height;i:155;s:9:mime-type;s:10:image/jpeg;}}s:10:image_meta;a:12:{s:8:aperture;s:1:0;s:6:credit;s:0:;s:6:camera;s:0:;s:7:caption;s:0:;s:17:created_timestamp;s:1:0;s:9:copyright;s:0:;s:12:focal_length;s:1:0;s:3:iso;s:1:0;s:13:shutter_speed;s:1:0;s:5:title;s:0:;s:11:orientation;s:1:0;s:8:keywords;a:0:{}}}'),
(187, 67, '_wp_attached_file', '2018/06/3.jpg'),
(188, 67, '_wp_attachment_metadata', 'a:5:{s:5:width;i:520;s:6:height;i:268;s:4:file;s:13:2018/06/3.jpg;s:5:sizes;a:2:{s:9:thumbnail;a:4:{s:4:file;s:13:3-150x150.jpg;s:5:width;i:150;s:6:height;i:150;s:9:mime-type;s:10:image/jpeg;}s:6:medium;a:4:{s:4:file;s:13:3-300x155.jpg;s:5:width;i:300;s:6:height;i:155;s:9:mime-type;s:10:image/jpeg;}}s:10:image_meta;a:12:{s:8:aperture;s:1:0;s:6:credit;s:0:;s:6:camera;s:0:;s:7:caption;s:0:;s:17:created_timestamp;s:1:0;s:9:copyright;s:0:;s:12:focal_length;s:1:0;s:3:iso;s:1:0;s:13:shutter_speed;s:1:0;s:5:title;s:0:;s:11:orientation;s:1:0;s:8:keywords;a:0:{}}}');"
);
        echo PHP_EOL;
    }
}
