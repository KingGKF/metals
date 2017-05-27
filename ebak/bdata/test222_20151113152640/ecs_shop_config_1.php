<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_shop_config`;");
E_C("CREATE TABLE `ecs_shop_config` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `code` varchar(30) NOT NULL DEFAULT '',
  `type` varchar(10) NOT NULL DEFAULT '',
  `store_range` varchar(255) NOT NULL DEFAULT '',
  `store_dir` varchar(255) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1056 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_shop_config` values('1','0','shop_info','group','','','','1');");
E_D("replace into `ecs_shop_config` values('2','0','basic','group','','','','1');");
E_D("replace into `ecs_shop_config` values('3','0','display','group','','','','1');");
E_D("replace into `ecs_shop_config` values('4','0','shopping_flow','group','','','','1');");
E_D("replace into `ecs_shop_config` values('5','0','smtp','group','','','','1');");
E_D("replace into `ecs_shop_config` values('6','0','hidden','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('7','0','goods','group','','','','1');");
E_D("replace into `ecs_shop_config` values('8','0','sms','group','','','','1');");
E_D("replace into `ecs_shop_config` values('9','0','wap','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('101','1','shop_name','text','','','搜刮好东西sogua2008.com免费分享','1');");
E_D("replace into `ecs_shop_config` values('102','1','shop_title','text','','','搜刮好东西sogua2008.com免费分享','1');");
E_D("replace into `ecs_shop_config` values('103','1','shop_desc','text','','','搜刮好东西sogua2008.com免费分享','1');");
E_D("replace into `ecs_shop_config` values('104','1','shop_keywords','text','','','搜刮好东西sogua2008.com免费分享','1');");
E_D("replace into `ecs_shop_config` values('105','1','shop_country','manual','','','1','1');");
E_D("replace into `ecs_shop_config` values('106','1','shop_province','manual','','','26','1');");
E_D("replace into `ecs_shop_config` values('107','1','shop_city','manual','','','322','1');");
E_D("replace into `ecs_shop_config` values('108','1','shop_address','text','','','搜刮好东西sogua2008.com免费分享','1');");
E_D("replace into `ecs_shop_config` values('109','1','qq','text','','','158631386','1');");
E_D("replace into `ecs_shop_config` values('110','1','ww','text','','','','1');");
E_D("replace into `ecs_shop_config` values('111','1','skype','text','','','','1');");
E_D("replace into `ecs_shop_config` values('112','1','ym','text','','','','1');");
E_D("replace into `ecs_shop_config` values('113','1','msn','text','','','','1');");
E_D("replace into `ecs_shop_config` values('114','1','service_email','text','','','','1');");
E_D("replace into `ecs_shop_config` values('115','1','service_phone','text','','','','1');");
E_D("replace into `ecs_shop_config` values('116','1','shop_closed','select','0,1','','0','1');");
E_D("replace into `ecs_shop_config` values('117','1','close_comment','textarea','','','','1');");
E_D("replace into `ecs_shop_config` values('118','1','shop_logo','hidden','','../themes/{\$template}/images/','','1');");
E_D("replace into `ecs_shop_config` values('119','1','licensed','select','0,1','','0','1');");
E_D("replace into `ecs_shop_config` values('120','1','user_notice','textarea','','','搜刮好东西sogua2008.com免费分享','1');");
E_D("replace into `ecs_shop_config` values('121','1','shop_notice','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('122','1','shop_reg_closed','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('201','2','lang','manual','','','zh_cn','1');");
E_D("replace into `ecs_shop_config` values('202','2','icp_number','text','','','','1');");
E_D("replace into `ecs_shop_config` values('203','2','icp_file','file','','../cert/','','1');");
E_D("replace into `ecs_shop_config` values('204','2','watermark','file','','../images/','','1');");
E_D("replace into `ecs_shop_config` values('205','2','watermark_place','select','0,1,2,3,4,5','','1','1');");
E_D("replace into `ecs_shop_config` values('206','2','watermark_alpha','text','','','65','1');");
E_D("replace into `ecs_shop_config` values('207','2','use_storage','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('208','2','market_price_rate','text','','','1.2','1');");
E_D("replace into `ecs_shop_config` values('209','2','rewrite','select','0,1,2','','0','1');");
E_D("replace into `ecs_shop_config` values('210','2','integral_name','text','','','','1');");
E_D("replace into `ecs_shop_config` values('211','2','integral_scale','text','','','1','1');");
E_D("replace into `ecs_shop_config` values('212','2','integral_percent','text','','','1','1');");
E_D("replace into `ecs_shop_config` values('213','2','sn_prefix','text','','','ECS','1');");
E_D("replace into `ecs_shop_config` values('214','2','comment_check','select','0,1','','0','1');");
E_D("replace into `ecs_shop_config` values('215','2','no_picture','file','','../images/','../images/1409272951415985699.jpg','1');");
E_D("replace into `ecs_shop_config` values('218','2','stats_code','textarea','','','','1');");
E_D("replace into `ecs_shop_config` values('219','2','cache_time','text','','','3600','1');");
E_D("replace into `ecs_shop_config` values('220','2','register_points','text','','','100','1');");
E_D("replace into `ecs_shop_config` values('221','2','enable_gzip','select','0,1','','0','1');");
E_D("replace into `ecs_shop_config` values('222','2','top10_time','select','0,1,2,3,4','','0','1');");
E_D("replace into `ecs_shop_config` values('223','2','timezone','options','-12,-11,-10,-9,-8,-7,-6,-5,-4,-3.5,-3,-2,-1,0,1,2,3,3.5,4,4.5,5,5.5,5.75,6,6.5,7,8,9,9.5,10,11,12','','8','1');");
E_D("replace into `ecs_shop_config` values('224','2','upload_size_limit','options','-1,0,64,128,256,512,1024,2048,4096','','4096','1');");
E_D("replace into `ecs_shop_config` values('226','2','cron_method','select','0,1','','0','1');");
E_D("replace into `ecs_shop_config` values('227','2','comment_factor','select','0,1,2,3','','0','1');");
E_D("replace into `ecs_shop_config` values('228','2','enable_order_check','select','0,1','','1','1');");
E_D("replace into `ecs_shop_config` values('229','2','default_storage','text','','','1','1');");
E_D("replace into `ecs_shop_config` values('230','2','bgcolor','text','','','#FFFFFF','1');");
E_D("replace into `ecs_shop_config` values('231','2','visit_stats','select','on,off','','off','1');");
E_D("replace into `ecs_shop_config` values('232','2','send_mail_on','select','on,off','','off','1');");
E_D("replace into `ecs_shop_config` values('233','2','auto_generate_gallery','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('234','2','retain_original_img','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('235','2','member_email_validate','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('236','2','message_board','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('239','2','certificate_id','hidden','','','105916','1');");
E_D("replace into `ecs_shop_config` values('240','2','token','hidden','','','7c138ed927e2fbb00dac111e2143124f6f1dafaa0ebe459e8752755f4283f42c','1');");
E_D("replace into `ecs_shop_config` values('241','2','certi','hidden','','','http://service.shopex.cn/openapi/api.php','1');");
E_D("replace into `ecs_shop_config` values('301','3','date_format','hidden','','','Y-m-d','1');");
E_D("replace into `ecs_shop_config` values('302','3','time_format','text','','','Y-m-d H:i:s','1');");
E_D("replace into `ecs_shop_config` values('303','3','currency_format','text','','','%s','1');");
E_D("replace into `ecs_shop_config` values('304','3','thumb_width','text','','','220','1');");
E_D("replace into `ecs_shop_config` values('305','3','thumb_height','text','','','220','1');");
E_D("replace into `ecs_shop_config` values('306','3','image_width','text','','','378','1');");
E_D("replace into `ecs_shop_config` values('307','3','image_height','text','','','378','1');");
E_D("replace into `ecs_shop_config` values('312','3','top_number','text','','','8','1');");
E_D("replace into `ecs_shop_config` values('313','3','history_number','text','','','5','1');");
E_D("replace into `ecs_shop_config` values('314','3','comments_number','text','','','2','1');");
E_D("replace into `ecs_shop_config` values('315','3','bought_goods','text','','','5','1');");
E_D("replace into `ecs_shop_config` values('316','3','article_number','hidden','','','8','1');");
E_D("replace into `ecs_shop_config` values('317','3','goods_name_length','text','','','24','1');");
E_D("replace into `ecs_shop_config` values('318','3','price_format','select','0,1,2,3,4,5','','2','1');");
E_D("replace into `ecs_shop_config` values('319','3','page_size','text','','','16','1');");
E_D("replace into `ecs_shop_config` values('320','3','sort_order_type','select','0,1,2','','2','1');");
E_D("replace into `ecs_shop_config` values('321','3','sort_order_method','select','0,1','','1','1');");
E_D("replace into `ecs_shop_config` values('322','3','show_order_type','hidden','0,1,2','','1','1');");
E_D("replace into `ecs_shop_config` values('323','3','attr_related_number','text','','','5','1');");
E_D("replace into `ecs_shop_config` values('324','3','goods_gallery_number','text','','','100','1');");
E_D("replace into `ecs_shop_config` values('325','3','article_title_length','text','','','16','1');");
E_D("replace into `ecs_shop_config` values('326','3','name_of_region_1','text','','','国家','1');");
E_D("replace into `ecs_shop_config` values('327','3','name_of_region_2','text','','','省','1');");
E_D("replace into `ecs_shop_config` values('328','3','name_of_region_3','text','','','市','1');");
E_D("replace into `ecs_shop_config` values('329','3','name_of_region_4','text','','','区','1');");
E_D("replace into `ecs_shop_config` values('330','3','search_keywords','text','','','iPhone5,NZXT,旅行包,格力电暖器,年货先到家,MX2,邓小平时代','0');");
E_D("replace into `ecs_shop_config` values('332','3','related_goods_number','text','','','4','1');");
E_D("replace into `ecs_shop_config` values('333','3','help_open','select','0,1','','1','1');");
E_D("replace into `ecs_shop_config` values('334','3','article_page_size','text','','','10','1');");
E_D("replace into `ecs_shop_config` values('335','3','page_style','select','0,1','','1','1');");
E_D("replace into `ecs_shop_config` values('336','3','recommend_order','select','0,1','','0','1');");
E_D("replace into `ecs_shop_config` values('337','3','index_ad','hidden','','','sys','1');");
E_D("replace into `ecs_shop_config` values('401','4','can_invoice','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('402','4','use_integral','hidden','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('403','4','use_bonus','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('404','4','use_surplus','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('405','4','use_how_oos','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('406','4','send_confirm_email','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('407','4','send_ship_email','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('408','4','send_cancel_email','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('409','4','send_invalid_email','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('410','4','order_pay_note','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('411','4','order_unpay_note','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('412','4','order_ship_note','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('413','4','order_receive_note','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('414','4','order_unship_note','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('415','4','order_return_note','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('416','4','order_invalid_note','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('417','4','order_cancel_note','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('418','4','invoice_content','textarea','','','明细\r\n办公用品\r\n电脑配件\r\n耗材\r\n其他','1');");
E_D("replace into `ecs_shop_config` values('419','4','anonymous_buy','hidden','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('420','4','min_goods_amount','text','','','0','1');");
E_D("replace into `ecs_shop_config` values('421','4','one_step_buy','hidden','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('422','4','invoice_type','manual','','','a:3:{s:4:\"type\";a:2:{i:0;s:14:\"normal_invoice\";i:1;s:11:\"vat_invoice\";}s:4:\"rate\";a:2:{i:0;d:1;i:1;d:1.5;}s:6:\"enable\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}}','1');");
E_D("replace into `ecs_shop_config` values('423','4','stock_dec_time','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('424','4','cart_confirm','hidden','1,2,3,4','','1','0');");
E_D("replace into `ecs_shop_config` values('425','4','send_service_email','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('426','4','show_goods_in_cart','hidden','1,2,3','','3','1');");
E_D("replace into `ecs_shop_config` values('427','4','show_attr_in_cart','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('501','5','smtp_host','text','','','smtp.qq.com','1');");
E_D("replace into `ecs_shop_config` values('502','5','smtp_port','text','','','25','1');");
E_D("replace into `ecs_shop_config` values('503','5','smtp_user','text','','','','1');");
E_D("replace into `ecs_shop_config` values('504','5','smtp_pass','password','','','','1');");
E_D("replace into `ecs_shop_config` values('505','5','smtp_mail','text','','','','1');");
E_D("replace into `ecs_shop_config` values('506','5','mail_charset','select','UTF8,GB2312,BIG5','','UTF8','1');");
E_D("replace into `ecs_shop_config` values('507','5','mail_service','select','0,1','','1','0');");
E_D("replace into `ecs_shop_config` values('508','5','smtp_ssl','select','0,1','','0','0');");
E_D("replace into `ecs_shop_config` values('601','6','integrate_code','hidden','','','ecshop','1');");
E_D("replace into `ecs_shop_config` values('602','6','integrate_config','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('603','6','hash_code','hidden','','','31693422540744c0a6b6da635b7a5a93','1');");
E_D("replace into `ecs_shop_config` values('604','6','template','hidden','','','68ecshopcom_360buy','1');");
E_D("replace into `ecs_shop_config` values('605','6','install_date','hidden','','','1445358747','1');");
E_D("replace into `ecs_shop_config` values('606','6','ecs_version','hidden','','','v4_2','1');");
E_D("replace into `ecs_shop_config` values('607','6','sms_user_name','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('608','6','sms_password','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('609','6','sms_auth_str','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('610','6','sms_domain','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('611','6','sms_count','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('612','6','sms_total_money','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('613','6','sms_balance','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('614','6','sms_last_request','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('616','6','affiliate','hidden','','','a:3:{s:6:\"config\";a:7:{s:6:\"expire\";d:24;s:11:\"expire_unit\";s:4:\"hour\";s:11:\"separate_by\";i:0;s:15:\"level_point_all\";s:4:\"100%\";s:15:\"level_money_all\";s:3:\"50%\";s:18:\"level_register_all\";i:2;s:17:\"level_register_up\";i:60;}s:4:\"item\";a:5:{i:0;a:2:{s:11:\"level_point\";s:3:\"60%\";s:11:\"level_money\";s:3:\"60%\";}i:1;a:2:{s:11:\"level_point\";s:3:\"30%\";s:11:\"level_money\";s:3:\"30%\";}i:2;a:2:{s:11:\"level_point\";s:2:\"7%\";s:11:\"level_money\";s:2:\"7%\";}i:3;a:2:{s:11:\"level_point\";s:2:\"3%\";s:11:\"level_money\";s:2:\"3%\";}i:4;a:2:{s:11:\"level_point\";d:0;s:11:\"level_money\";d:0;}}s:2:\"on\";i:1;}','1');");
E_D("replace into `ecs_shop_config` values('617','6','captcha','hidden','','','12','1');");
E_D("replace into `ecs_shop_config` values('618','6','captcha_width','hidden','','','80','1');");
E_D("replace into `ecs_shop_config` values('619','6','captcha_height','hidden','','','30','1');");
E_D("replace into `ecs_shop_config` values('620','6','sitemap','hidden','','','a:6:{s:19:\"homepage_changefreq\";s:6:\"hourly\";s:17:\"homepage_priority\";s:3:\"0.9\";s:19:\"category_changefreq\";s:6:\"hourly\";s:17:\"category_priority\";s:3:\"0.8\";s:18:\"content_changefreq\";s:6:\"weekly\";s:16:\"content_priority\";s:3:\"0.7\";}','0');");
E_D("replace into `ecs_shop_config` values('621','6','points_rule','hidden','','','','0');");
E_D("replace into `ecs_shop_config` values('622','6','flash_theme','hidden','','','default','1');");
E_D("replace into `ecs_shop_config` values('623','6','stylename','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('701','7','show_goodssn','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('702','7','show_brand','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('703','7','show_goodsweight','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('704','7','show_goodsnumber','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('705','7','show_addtime','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('706','7','goodsattr_style','hidden','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('707','7','show_marketprice','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('1031','8','sms_register','select','1,0','','1','17');");
E_D("replace into `ecs_shop_config` values('1030','8','sms_order_shipped','select','1,0','','1','9');");
E_D("replace into `ecs_shop_config` values('1029','8','sms_order_payed','select','1,0','','1','5');");
E_D("replace into `ecs_shop_config` values('1028','8','sms_order_placed','select','1,0','','1','3');");
E_D("replace into `ecs_shop_config` values('901','9','wap_config','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('902','9','wap_logo','file','','../images/','','1');");
E_D("replace into `ecs_shop_config` values('903','2','message_check','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('904','2','send_verify_email','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('905','2','ent_id','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('906','2','ent_ac','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('907','2','ent_sign','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('908','2','ent_email','hidden','','','','1');");
E_D("replace into `ecs_shop_config` values('990','9','shop_name_goodscart1','hidden','','','68ecshop_','1');");
E_D("replace into `ecs_shop_config` values('991','9','shop_name_goodscart2','hidden','','','com_','1');");
E_D("replace into `ecs_shop_config` values('992','9','shop_name_goodscart3','hidden','','','consignee_','1');");
E_D("replace into `ecs_shop_config` values('993','9','shop_name_goodscart4','hidden','','','www_','1');");
E_D("replace into `ecs_shop_config` values('1017','1','tag_show_num','text','','','5','1');");
E_D("replace into `ecs_shop_config` values('1016','1','user_tag_check','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('10','0','supplier_privilege','group','','','','1');");
E_D("replace into `ecs_shop_config` values('994','10','supplier_addbest','select','0,1','','1','1');");
E_D("replace into `ecs_shop_config` values('995','10','supplier_editgoods','select','0,1','0','1','1');");
E_D("replace into `ecs_shop_config` values('996','10','supplier_secondadd','select','0,1','','1','1');");
E_D("replace into `ecs_shop_config` values('997','10','company_type','textarea','','','私营企业\r\n个体户\r\n外企\r\n中外合资','255');");
E_D("replace into `ecs_shop_config` values('998','10','supplier_notice','textarea','','','尊敬的供货商您好，由于系统升级，2014年5月18日13:00-16:00暂停营业，特此通知','245');");
E_D("replace into `ecs_shop_config` values('999','10','supplier_rebate_paytype','textarea','','','支付宝转账\r\n银行转账\r\n微信支付\r\n财付通转账','250');");
E_D("replace into `ecs_shop_config` values('150','1','erweima_wapurl','text','','','http://127.0.0.1/goods.php?id={id}','1');");
E_D("replace into `ecs_shop_config` values('161','1','erweima_logo','file','','../images/','','1');");
E_D("replace into `ecs_shop_config` values('1000','2','takegoods_send_email','select','0,1','','1','1');");
E_D("replace into `ecs_shop_config` values('1001','2','takegoods_send_sms','select','0,1','','1','1');");
E_D("replace into `ecs_shop_config` values('1002','2','takegoods_check_money','select','0,1','','0','1');");
E_D("replace into `ecs_shop_config` values('1003','3','email_domain','textarea','','','163.com,68ecshop.com,sina.com','1');");
E_D("replace into `ecs_shop_config` values('1015','1','shaidan_check','select','1,0','','0','1');");
E_D("replace into `ecs_shop_config` values('1014','1','shaidan_pay_points','text','','','100','1');");
E_D("replace into `ecs_shop_config` values('1013','1','shaidan_img_num','text','','','3','1');");
E_D("replace into `ecs_shop_config` values('1012','1','shaidan_pre_num','text','','','10','1');");
E_D("replace into `ecs_shop_config` values('1011','1','comment_youxiaoqi','text','','','5','1');");
E_D("replace into `ecs_shop_config` values('298','2','time_shouhuo','text','','','10','1');");
E_D("replace into `ecs_shop_config` values('428','2','identity','select','1,0','','1','1');");
E_D("replace into `ecs_shop_config` values('1018','1','okgoods_time','text','','','5','1');");
E_D("replace into `ecs_shop_config` values('1019','1','okback_time','text','','','5','1');");
E_D("replace into `ecs_shop_config` values('1020','1','delback_time','text','','','5','1');");
E_D("replace into `ecs_shop_config` values('1021','1','weixiu_time','text','','','30','1');");
E_D("replace into `ecs_shop_config` values('1024','4','recom_rank','text','','','','1');");
E_D("replace into `ecs_shop_config` values('1027','8','sms_shop_mobile','text','','','13800138000','1');");
E_D("replace into `ecs_shop_config` values('1026','10','supplier_comment','select','0,1','','1','2');");
E_D("replace into `ecs_shop_config` values('1032','8','sms_goods_stockout','select','1,0','','1','13');");
E_D("replace into `ecs_shop_config` values('1033','8','sms_order_placed_tpl','textarea','','','您有一条新订单，订单号为：%s，请注意查看。【%s】','4');");
E_D("replace into `ecs_shop_config` values('1034','8','sms_order_payed_tpl','textarea','','','客户已付款，订单号为：%s，请注意查看。【%s】','6');");
E_D("replace into `ecs_shop_config` values('1035','8','sms_sign','text','','','68ecshop','2');");
E_D("replace into `ecs_shop_config` values('1036','8','sms_goods_stockout_tpl','textarea','','','您登记的商品%s已经到货，您可点击下面链接直接进入商品页面浏览或购买！%s【%s】','14');");
E_D("replace into `ecs_shop_config` values('1037','8','sms_order_pay','select','1,0','','1','7');");
E_D("replace into `ecs_shop_config` values('1038','8','sms_order_pay_tpl','textarea','','','您已付款，订单号为：%s【%s】','8');");
E_D("replace into `ecs_shop_config` values('1039','8','sms_order_shipped_tpl','textarea','','','您的订单已发货，订单号为%s，收货人为%s，收货地址为%s，请注意查收【%s】','10');");
E_D("replace into `ecs_shop_config` values('1040','8','sms_pricecut','select','1,0','','1','11');");
E_D("replace into `ecs_shop_config` values('1041','8','sms_pricecut_tpl','textarea','','','您关注的商品%s已经降价，您可点击下面链接直接进入商品页面浏览或购买！%s【%s】','12');");
E_D("replace into `ecs_shop_config` values('1042','8','sms_change_password','select','1,0','','1','15');");
E_D("replace into `ecs_shop_config` values('1043','8','sms_change_password_tpl','textarea','','','您于%s修改了登录密码，密码已修改成功！如果不是您本人操作，请及时联系商城客服。【%s】','16');");
E_D("replace into `ecs_shop_config` values('1044','8','sms_register_tpl','textarea','','','您的验证码为：%s【%s】','18');");
E_D("replace into `ecs_shop_config` values('1045','8','sms_user_money_change','select','1,0','','1','19');");
E_D("replace into `ecs_shop_config` values('1046','8','sms_use_balance_reduce_tpl','textarea','','','您于%s在商城消费%s元，当前余额：%s元。如有疑问，请联系商城客服。【%s】','20');");
E_D("replace into `ecs_shop_config` values('1047','8','sms_deposit_balance_reduce_tpl','textarea','','','您于%s在商城申请提现%s元，提现已成功，当前余额：%s元。如有疑问，请联系商城客服。【%s】','21');");
E_D("replace into `ecs_shop_config` values('1048','8','sms_recharge_balance_add_tpl','textarea','','','恭喜您，已成功充值%s元，当前余额：%s元。如有疑问，请联系商城客服。【%s】','22');");
E_D("replace into `ecs_shop_config` values('1049','8','sms_admin_operation_tpl','textarea','','','商城于%s调节您的余额%s元，当前余额%s元。如有疑问，请联系商城客服。【%s】','23');");
E_D("replace into `ecs_shop_config` values('1050','8','sms_return_goods_tpl','textarea','','','您提交的退货申请已成功处理，退回款项：%s元，当前余额：%s元。如有疑问，请联系商城客服。【%s】','24');");
E_D("replace into `ecs_shop_config` values('11','0','chat','group','','','','1');");
E_D("replace into `ecs_shop_config` values('1051','11','chat_server_ip','text','','','222.222.222.222','1');");
E_D("replace into `ecs_shop_config` values('1052','11','chat_server_port','text','','','9090','1');");
E_D("replace into `ecs_shop_config` values('1053','11','chat_http_bind_port','text','','','7070','1');");
E_D("replace into `ecs_shop_config` values('1054','11','chat_server_admin_username','text','','','admin','1');");
E_D("replace into `ecs_shop_config` values('1055','11','chat_server_admin_password','password','','','openfire@pwd','1');");

require("../../inc/footer.php");
?>