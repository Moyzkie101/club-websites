# ABMS : MySQL database backup
#
# Generated: Wednesday 23. November 2022
# Hostname: localhost
# Database: barsims
# --------------------------------------------------------


#
# Delete any existing table `financial`
#

DROP TABLE IF EXISTS `financial`;


#
# Table structure of table `financial`
#



CREATE TABLE `financial` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `complete_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(100) NOT NULL,
  `contact_no` int(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `remarks` text NOT NULL,
  `f_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO financial VALUES("1","Grace Caballero","Bolocboloc","Farmer","Female","20","912345667","Done","wqwdqwd","1");
INSERT INTO financial VALUES("2","her","Bolocboloc","Engineer","Female","32","912345667","Scheduled","sadas","1");
INSERT INTO financial VALUES("3","tina","Bolocboloc","HW","Male","45","912345667","Undone","sadasd","1");
INSERT INTO financial VALUES("4","sffasddf","Bolocboloc33444","HW","Male","32","912345667","Scheduled","adsds","2");
INSERT INTO financial VALUES("5","tina","Bolocboloc33444","Farmer","Female","32","912345667","Undone","dsdd","2");
INSERT INTO financial VALUES("6","hjknht","jhuifv","chgjk","Female","78","956859544","Done","guyiuhdcyvboiu","1");
INSERT INTO financial VALUES("7","saadsa","dewed","sdad","Male","34","333","Done","dsasdsdsa","10");
INSERT INTO financial VALUES("8","grace bornea","vito, barili, cebu","CEO","Female","28","2147483647","Done","Mayta tagaan nku ug ayuda","4");



#
# Delete any existing table `financial_aids`
#

DROP TABLE IF EXISTS `financial_aids`;


#
# Table structure of table `financial_aids`
#



CREATE TABLE `financial_aids` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO financial_aids VALUES("1","Tupad");
INSERT INTO financial_aids VALUES("2","Dole");
INSERT INTO financial_aids VALUES("3","Testing");
INSERT INTO financial_aids VALUES("4","Solo Parent");



#
# Delete any existing table `history_log`
#

DROP TABLE IF EXISTS `history_log`;


#
# Table structure of table `history_log`
#



CREATE TABLE `history_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=418 DEFAULT CHARSET=latin1;

INSERT INTO history_log VALUES("1","11"," admin","08:50","10/20/2022"," admin removed ronel.torres@ctu.edu.ph requested certificate ");
INSERT INTO history_log VALUES("2","11","admin","09:21","10/20/2022","admin updated Lorna Amancio");
INSERT INTO history_log VALUES("3","11","admin","09:23","10/20/2022","admin updated Lorna Amancio information.");
INSERT INTO history_log VALUES("4","11","admin","09:25","10/20/2022","admin updated Lorna Amancio information.");
INSERT INTO history_log VALUES("5","11","admin","09:33","10/20/2022","admin removed  resident information! ");
INSERT INTO history_log VALUES("6","11","admin","09:36","10/20/2022","admin removed  resident information! ");
INSERT INTO history_log VALUES("7","11","admin","09:36","10/20/2022","admin removed Rodulfo Bulaga resident information! ");
INSERT INTO history_log VALUES("8","11","admin","09:52","10/20/2022","admin removed Grace Caballero blotter/incident complaint. ");
INSERT INTO history_log VALUES("9","11","admin","10:21","10/20/2022","admin updated gerald@gmail.com from Done to Pending");
INSERT INTO history_log VALUES("10","11","admin","10:26","10/20/2022","admin updated Chericel Bornea information.");
INSERT INTO history_log VALUES("11","11","admin","10:28","10/20/2022","admin visited purok Kbp");
INSERT INTO history_log VALUES("12","11","admin","10:28","10/20/2022","admin visited purok Kbp and household no 4");
INSERT INTO history_log VALUES("13","11","admin","10:49","10/20/2022"," updated Ronel G. Torres  blotter incident details.");
INSERT INTO history_log VALUES("14","11"," admin","02:23","10/20/2022"," admin removed gerald@gmail.com requested certificate ");
INSERT INTO history_log VALUES("15","11","admin","08:51","10/21/2022","admin updated Chericel Bornea information.");
INSERT INTO history_log VALUES("16","11","admin","08:51","10/21/2022","admin removed  resident information! ");
INSERT INTO history_log VALUES("17","11","admin","01:48","10/15/2022","admin visited purok Kbp");
INSERT INTO history_log VALUES("18","11","admin","01:48","10/15/2022","admin visited purok Kbp and household no 4");
INSERT INTO history_log VALUES("19","11","admin","03:51","10/15/2022","admin visited purok Kbp");
INSERT INTO history_log VALUES("20","11","admin","03:51","10/15/2022","admin visited purok Kbp and household no 4");
INSERT INTO history_log VALUES("21","11","admin","03:51","10/15/2022","admin visited purok Kbp and household no 5");
INSERT INTO history_log VALUES("22","11","admin","03:58","10/15/2022","admin updated Lorna Amancio information.");
INSERT INTO history_log VALUES("23","11","admin","02:56","11/06/2022","admin visited purok Kbp");
INSERT INTO history_log VALUES("24","11","admin","02:56","11/06/2022","admin visited purok Kbp and household no 4");
INSERT INTO history_log VALUES("25","11","admin","02:34","11/06/2022","admin visited purok Kbp");
INSERT INTO history_log VALUES("26","11","admin","02:34","11/06/2022","admin visited purok Kbp and household no 4");
INSERT INTO history_log VALUES("27","11","admin","02:34","11/06/2022","admin visited purok Kbp and household no 4");
INSERT INTO history_log VALUES("28","11","admin","07:31","11/15/2022","admin visited purok Kbp");
INSERT INTO history_log VALUES("29","11","admin","07:31","11/15/2022","admin visited purok Kbp and household no 5");
INSERT INTO history_log VALUES("30","11","admin","07:31","11/15/2022","admin visited purok Kbp and household no 4");
INSERT INTO history_log VALUES("31","11","admin","12:28","11/15/2022","admin visited purok Kbp");
INSERT INTO history_log VALUES("32","11","admin","12:28","11/15/2022","admin visited purok Kbp and household no 4");
INSERT INTO history_log VALUES("33","11","admin","12:29","11/15/2022","admin visited purok Kbp and household no 5");
INSERT INTO history_log VALUES("34","11","admin","12:29","11/15/2022","admin visited purok Kbp and household no 4");
INSERT INTO history_log VALUES("35","11","admin","12:29","11/15/2022","admin visited purok Kbp and household no 4");
INSERT INTO history_log VALUES("36","11","admin","05:06","11/18/2022","admin visited purok Kbp");
INSERT INTO history_log VALUES("37","11","admin","05:07","11/18/2022","admin visited purok Kbp and household no 4");
INSERT INTO history_log VALUES("38","11","admin","05:07","11/18/2022","admin visited purok Kbp and household no 5");
INSERT INTO history_log VALUES("39","11","admin","05:07","11/18/2022","admin visited purok Kbp and household no 4");
INSERT INTO history_log VALUES("40","11","admin","05:08","11/18/2022","admin visited purok Kbp");
INSERT INTO history_log VALUES("41","11","admin","05:08","11/18/2022","admin visited purok Kbp and household no 5");
INSERT INTO history_log VALUES("42","11","admin","05:14","11/18/2022","admin visited purok Kbp");
INSERT INTO history_log VALUES("43","11","admin","06:29","11/18/2022","admin visited purok Kbp");
INSERT INTO history_log VALUES("44","11","admin","06:29","11/18/2022","admin visited purok Kbp and household no 4");
INSERT INTO history_log VALUES("45","11","admin","06:32","11/18/2022","admin removed  resident information! ");
INSERT INTO history_log VALUES("46","11","admin","06:42","11/18/2022","admin removed user id 193 information! ");
INSERT INTO history_log VALUES("47","11","admin","06:50","11/18/2022","admin removed user id 188 information! ");
INSERT INTO history_log VALUES("48","11","admin","06:53","11/18/2022","admin removed user id 190 information! ");
INSERT INTO history_log VALUES("49","11","admin","06:57","11/18/2022","admin removed user id 199 information! ");
INSERT INTO history_log VALUES("50","11","admin","06:58","11/18/2022","admin updated Maximo Cañete information.");
INSERT INTO history_log VALUES("51","11","admin","06:59","11/18/2022"," updated Clark  blotter incident details.");
INSERT INTO history_log VALUES("52","11","admin","07:10","11/18/2022","210 Information");
INSERT INTO history_log VALUES("53","11","admin","07:17","11/18/2022","admin added user id 211 Information");
INSERT INTO history_log VALUES("54","11","admin","07:23","11/18/2022","admin removed blotter from 29 Information");
INSERT INTO history_log VALUES("55","11","admin","07:23","11/18/2022","admin removed Clark blotter/incident complaint. ");
INSERT INTO history_log VALUES("56","11","admin","07:24","11/18/2022"," updated Ronel G. Torres  blotter incident details.");
INSERT INTO history_log VALUES("57","11","admin","07:37","11/18/2022","admin removed 22 Current Barangay Official. ");
INSERT INTO history_log VALUES("58","10","staff","07:43","11/18/2022","staff updated ronel.torres@ctu.edu.ph from pending to Done");
INSERT INTO history_log VALUES("59","10","staff","07:43","11/18/2022","staff visited purok Kbp");
INSERT INTO history_log VALUES("60","10","staff","07:43","11/18/2022","staff visited purok Kbp and household no 4");
INSERT INTO history_log VALUES("61","10","staff","07:44","11/18/2022"," updated Ronel G. Torres  blotter incident details.");
INSERT INTO history_log VALUES("62","10","staff","07:48","11/18/2022","staff visited purok Kbp");
INSERT INTO history_log VALUES("63","10","staff","07:52","11/18/2022","staff updated   blotter incident details.");
INSERT INTO history_log VALUES("64","11","admin","04:05","11/20/2022","admin visited purok Kbp");
INSERT INTO history_log VALUES("65","11","admin","04:06","11/20/2022","admin visited purok Kbp and household no 4");
INSERT INTO history_log VALUES("66","11","admin","04:06","11/20/2022","admin visited purok Kbp and household no 5");
INSERT INTO history_log VALUES("67","11","admin","04:06","11/20/2022","admin visited purok Kbp and household no 13");
INSERT INTO history_log VALUES("68","11","admin","04:06","11/20/2022","admin visited purok Kbp and household no 5");
INSERT INTO history_log VALUES("69","11","admin","04:06","11/20/2022","admin visited purok Kbp and household no 4");
INSERT INTO history_log VALUES("70","11","admin","04:06","11/20/2022","admin visited purok Kbp");
INSERT INTO history_log VALUES("71","11","admin","04:06","11/20/2022","admin visited purok Kbp and household no 5");
INSERT INTO history_log VALUES("72","11","admin","04:07","11/20/2022","admin visited purok Kbp and household no 4");
INSERT INTO history_log VALUES("73","11","admin","04:15","11/20/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("74","11","admin","06:05","11/20/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("75","11","admin","06:13","11/20/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("76","11","admin","06:37","11/20/2022","admin removed user id 211 information! ");
INSERT INTO history_log VALUES("77","11","admin","06:37","11/20/2022","admin removed user id 209 information! ");
INSERT INTO history_log VALUES("78","11","admin","06:53","11/20/2022","admin added user id 212 Information");
INSERT INTO history_log VALUES("79","11","admin","06:54","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("80","11","admin","06:54","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("81","11","admin","06:54","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("82","11","admin","07:10","11/20/2022","admin added user id 213 Information");
INSERT INTO history_log VALUES("83","11","admin","07:10","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("84","11","admin","07:10","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("85","11","admin","07:12","11/20/2022","admin added user id 214 Information");
INSERT INTO history_log VALUES("86","11","admin","07:13","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("87","11","admin","07:19","11/20/2022","admin added user id 215 Information");
INSERT INTO history_log VALUES("88","11","admin","07:19","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("89","11","admin","07:19","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("90","11","admin","07:19","11/20/2022","admin visited purok STA. CRUZ and household no 2");
INSERT INTO history_log VALUES("91","11","admin","07:22","11/20/2022","admin added user id 216 Information");
INSERT INTO history_log VALUES("92","11","admin","07:22","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("93","11","admin","07:22","11/20/2022","admin visited purok STA. CRUZ and household no 2");
INSERT INTO history_log VALUES("94","11","admin","07:22","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("95","11","admin","07:22","11/20/2022","admin visited purok STA. CRUZ and household no 2");
INSERT INTO history_log VALUES("96","11","admin","07:22","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("97","11","admin","07:22","11/20/2022","admin visited purok STA. CRUZ and household no 2");
INSERT INTO history_log VALUES("98","11","admin","07:25","11/20/2022","admin added user id 217 Information");
INSERT INTO history_log VALUES("99","11","admin","07:25","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("100","11","admin","07:25","11/20/2022","admin visited purok STA. CRUZ and household no 2");
INSERT INTO history_log VALUES("101","11","admin","07:25","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("102","11","admin","07:25","11/20/2022","admin visited purok STA. CRUZ and household no 2");
INSERT INTO history_log VALUES("103","11","admin","07:25","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("104","11","admin","07:25","11/20/2022","admin visited purok STA. CRUZ and household no 2");
INSERT INTO history_log VALUES("105","11","admin","07:30","11/20/2022","admin added user id 218 Information");
INSERT INTO history_log VALUES("106","11","admin","07:33","11/20/2022","admin added user id 219 Information");
INSERT INTO history_log VALUES("107","11","admin","07:37","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("108","11","admin","07:37","11/20/2022","admin visited purok STA. CRUZ and household no 3");
INSERT INTO history_log VALUES("109","11","admin","07:39","11/20/2022","admin added user id 220 Information");
INSERT INTO history_log VALUES("110","11","admin","07:41","11/20/2022","admin added user id 221 Information");
INSERT INTO history_log VALUES("111","11","admin","07:42","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("112","11","admin","07:42","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("113","11","admin","07:42","11/20/2022","admin visited purok STA. CRUZ and household no 2");
INSERT INTO history_log VALUES("114","11","admin","07:42","11/20/2022","admin visited purok STA. CRUZ and household no 3");
INSERT INTO history_log VALUES("115","11","admin","07:42","11/20/2022","admin visited purok STA. CRUZ and household no 2");
INSERT INTO history_log VALUES("116","11","admin","07:42","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("117","11","admin","07:42","11/20/2022","admin visited purok STA. CRUZ and household no 2");
INSERT INTO history_log VALUES("118","11","admin","07:42","11/20/2022","admin visited purok STA. CRUZ and household no 3");
INSERT INTO history_log VALUES("119","11","admin","07:47","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("120","11","admin","07:47","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("121","11","admin","07:47","11/20/2022","admin visited purok STA. CRUZ and household no 2");
INSERT INTO history_log VALUES("122","11","admin","07:47","11/20/2022","admin visited purok STA. CRUZ and household no 3");
INSERT INTO history_log VALUES("123","11","admin","07:48","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("124","11","admin","07:48","11/20/2022","admin visited purok STA. CRUZ and household no 2");
INSERT INTO history_log VALUES("125","11","admin","07:48","11/20/2022","admin visited purok STA. CRUZ and household no 3");
INSERT INTO history_log VALUES("126","11","admin","07:58","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("127","11","admin","07:58","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("128","11","admin","07:58","11/20/2022","admin visited purok STA. CRUZ and household no 2");
INSERT INTO history_log VALUES("129","11","admin","07:58","11/20/2022","admin visited purok STA. CRUZ and household no 3");
INSERT INTO history_log VALUES("130","11","admin","08:00","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("131","11","admin","08:00","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("132","11","admin","08:02","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("133","11","admin","08:09","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("134","11","admin","08:09","11/20/2022","admin visited purok STA. CRUZ and household no 3");
INSERT INTO history_log VALUES("135","11","admin","08:09","11/20/2022","admin visited purok STA. CRUZ and household no 3");
INSERT INTO history_log VALUES("136","11","admin","09:34","11/20/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("137","11","admin","09:34","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("138","11","admin","09:35","11/20/2022","admin visited purok STO. NINO");
INSERT INTO history_log VALUES("139","11","admin","09:40","11/20/2022","admin visited purok FATIMA");
INSERT INTO history_log VALUES("140","11","admin","09:40","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("141","11","admin","09:40","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("142","11","admin","09:40","11/20/2022","admin visited purok STA. CRUZ and household no 2");
INSERT INTO history_log VALUES("143","11","admin","09:40","11/20/2022","admin visited purok STA. CRUZ and household no 3");
INSERT INTO history_log VALUES("144","11","admin","09:40","11/20/2022","admin visited purok STA. CRUZ and household no 3");
INSERT INTO history_log VALUES("145","11","admin","09:40","11/20/2022","admin visited purok STA. CRUZ and household no 3");
INSERT INTO history_log VALUES("146","11","admin","09:44","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("147","11","admin","09:31","11/20/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("148","11","admin","09:31","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("149","11","admin","09:31","11/20/2022","admin visited purok STA. CRUZ and household no 3");
INSERT INTO history_log VALUES("150","11","admin","09:36","11/20/2022","admin added user id 222 Information");
INSERT INTO history_log VALUES("151","11","admin","09:36","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("152","11","admin","09:36","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("153","11","admin","09:44","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("154","11","admin","09:44","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("155","11","admin","09:44","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("156","11","admin","09:44","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("157","11","admin","09:44","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("158","11","admin","09:44","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("159","11","admin","09:44","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("160","11","admin","09:44","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("161","11","admin","09:44","11/20/2022","admin visited purok STA. CRUZ and household no 2");
INSERT INTO history_log VALUES("162","11","admin","09:45","11/20/2022","admin visited purok STA. CRUZ and household no 3");
INSERT INTO history_log VALUES("163","11","admin","09:45","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("164","11","admin","09:45","11/20/2022","admin visited purok STA. CRUZ and household no 2");
INSERT INTO history_log VALUES("165","11","admin","09:45","11/20/2022","admin visited purok STA. CRUZ and household no 3");
INSERT INTO history_log VALUES("166","11","admin","09:45","11/20/2022","admin visited purok STA. CRUZ and household no 4");
INSERT INTO history_log VALUES("167","11","admin","09:45","11/20/2022","admin updated Cresencia Empleo information.");
INSERT INTO history_log VALUES("168","11","admin","09:46","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("169","11","admin","09:46","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("170","11","admin","09:49","11/20/2022","admin added user id 223 Information");
INSERT INTO history_log VALUES("171","11","admin","09:49","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("172","11","admin","09:49","11/20/2022","admin visited purok STA. CRUZ and household no 4");
INSERT INTO history_log VALUES("173","11","admin","09:51","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("174","11","admin","09:51","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("175","11","admin","09:52","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("176","11","admin","09:52","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("177","11","admin","09:53","11/20/2022","admin visited purok STA. CRUZ and household no 2");
INSERT INTO history_log VALUES("178","11","admin","09:53","11/20/2022","admin visited purok STA. CRUZ and household no 3");
INSERT INTO history_log VALUES("179","11","admin","09:53","11/20/2022","admin visited purok STA. CRUZ and household no 4");
INSERT INTO history_log VALUES("180","11","admin","09:57","11/20/2022","admin added user id 224 Information");
INSERT INTO history_log VALUES("181","11","admin","09:57","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("182","11","admin","09:58","11/20/2022","admin visited purok STA. CRUZ and household no 4");
INSERT INTO history_log VALUES("183","11","admin","09:58","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("184","11","admin","10:01","11/20/2022","admin added user id 225 Information");
INSERT INTO history_log VALUES("185","11","admin","10:01","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("186","11","admin","10:01","11/20/2022","admin visited purok STA. CRUZ and household no 4");
INSERT INTO history_log VALUES("187","11","admin","10:04","11/20/2022","admin added user id 226 Information");
INSERT INTO history_log VALUES("188","11","admin","10:04","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("189","11","admin","10:04","11/20/2022","admin visited purok STA. CRUZ and household no 4");
INSERT INTO history_log VALUES("190","11","admin","10:08","11/20/2022","admin added user id 227 Information");
INSERT INTO history_log VALUES("191","11","admin","10:11","11/20/2022","admin added user id 228 Information");
INSERT INTO history_log VALUES("192","11","admin","10:11","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("193","11","admin","10:11","11/20/2022","admin visited purok STA. CRUZ and household no 4");
INSERT INTO history_log VALUES("194","11","admin","10:14","11/20/2022","admin added user id 229 Information");
INSERT INTO history_log VALUES("195","11","admin","10:16","11/20/2022","admin added user id 230 Information");
INSERT INTO history_log VALUES("196","11","admin","10:16","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("197","11","admin","10:16","11/20/2022","admin visited purok STA. CRUZ and household no 5");
INSERT INTO history_log VALUES("198","11","admin","10:16","11/20/2022","admin visited purok STA. CRUZ and household no 4");
INSERT INTO history_log VALUES("199","11","admin","10:16","11/20/2022","admin visited purok STA. CRUZ and household no 3");
INSERT INTO history_log VALUES("200","11","admin","10:16","11/20/2022","admin visited purok STA. CRUZ and household no 2");
INSERT INTO history_log VALUES("201","11","admin","10:16","11/20/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("202","11","admin","10:16","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("203","11","admin","10:19","11/20/2022","admin added user id 231 Information");
INSERT INTO history_log VALUES("204","11","admin","10:21","11/20/2022","admin added user id 232 Information");
INSERT INTO history_log VALUES("205","11","admin","10:24","11/20/2022","admin added user id 233 Information");
INSERT INTO history_log VALUES("206","11","admin","10:24","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("207","11","admin","10:24","11/20/2022","admin visited purok STA. CRUZ and household no 6");
INSERT INTO history_log VALUES("208","11","admin","10:24","11/20/2022","admin visited purok STA. CRUZ and household no 5");
INSERT INTO history_log VALUES("209","11","admin","10:25","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("210","11","admin","10:26","11/20/2022","admin added user id 234 Information");
INSERT INTO history_log VALUES("211","11","admin","10:28","11/20/2022","admin added user id 235 Information");
INSERT INTO history_log VALUES("212","11","admin","10:29","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("213","11","admin","10:29","11/20/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("214","11","admin","10:29","11/20/2022","admin visited purok STA. CRUZ and household no 6");
INSERT INTO history_log VALUES("215","11","admin","10:29","11/20/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("216","11","admin","10:29","11/20/2022","admin visited purok STA. CRUZ and household no 6");
INSERT INTO history_log VALUES("217","11","admin","10:30","11/20/2022","admin updated Khan Rey  Padin information.");
INSERT INTO history_log VALUES("218","11","admin","10:30","11/20/2022","admin updated Michelle Padin information.");
INSERT INTO history_log VALUES("219","11","admin","10:30","11/20/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("220","11","admin","10:30","11/20/2022","admin visited purok STA. CRUZ and household no 6");
INSERT INTO history_log VALUES("221","11","admin","06:32","11/21/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("222","11","admin","06:32","11/21/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("223","11","admin","06:32","11/21/2022","admin visited purok STA. CRUZ and household no 6");
INSERT INTO history_log VALUES("224","11","admin","06:32","11/21/2022","admin visited purok STA. CRUZ and household no 5");
INSERT INTO history_log VALUES("225","11","admin","06:33","11/21/2022","admin visited purok STA. CRUZ and household no 6");
INSERT INTO history_log VALUES("226","11","admin","06:33","11/21/2022","admin visited purok STA. CRUZ and household no 3");
INSERT INTO history_log VALUES("227","11","admin","06:33","11/21/2022","admin visited purok STA. CRUZ and household no 4");
INSERT INTO history_log VALUES("228","11","admin","06:33","11/21/2022","admin visited purok STA. CRUZ and household no 6");
INSERT INTO history_log VALUES("229","11","admin","06:36","11/21/2022","admin added user id 236 Information");
INSERT INTO history_log VALUES("230","11","admin","06:36","11/21/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("231","11","admin","06:36","11/21/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("232","11","admin","06:40","11/21/2022","admin added user id 237 Information");
INSERT INTO history_log VALUES("233","11","admin","06:42","11/21/2022","admin added user id 238 Information");
INSERT INTO history_log VALUES("234","11","admin","07:48","11/21/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("235","11","admin","07:48","11/21/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("236","11","admin","07:48","11/21/2022","admin visited purok STA. CRUZ and household no 2");
INSERT INTO history_log VALUES("237","11","admin","07:49","11/21/2022","admin visited purok STA. CRUZ and household no 3");
INSERT INTO history_log VALUES("238","11","admin","09:42","11/21/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("239","11","admin","09:45","11/21/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("240","11","admin","09:56","11/21/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("241","11","admin","09:56","11/21/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("242","11","admin","09:56","11/21/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("243","11","admin","09:56","11/21/2022","admin visited purok STA. CRUZ and household no 6");
INSERT INTO history_log VALUES("244","11","admin","09:56","11/21/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("245","11","admin","09:56","11/21/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("246","11","admin","09:57","11/21/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("247","11","admin","09:57","11/21/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("248","11","admin","09:57","11/21/2022","admin visited purok STA. CRUZ and household no 2");
INSERT INTO history_log VALUES("249","11","admin","09:57","11/21/2022","admin visited purok STA. CRUZ and household no 3");
INSERT INTO history_log VALUES("250","11","admin","01:07","11/21/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("251","11","admin","01:08","11/21/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("252","11","admin","01:15","11/21/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("253","11","admin","03:32","11/21/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("254","11","admin","03:33","11/21/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("255","11","admin","03:59","11/21/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("256","11","admin","11:29","11/21/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("257","11","admin","11:35","11/21/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("258","11","admin","11:36","11/21/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("259","11","admin","11:39","11/21/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("260","11","admin","11:39","11/21/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("261","11","admin","11:41","11/21/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("262","11","admin","11:41","11/21/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("263","11","admin","11:48","11/21/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("264","11","admin","11:51","11/21/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("265","11","admin","11:52","11/21/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("266","11","admin","11:52","11/21/2022","admin visited purok FATIMA");
INSERT INTO history_log VALUES("267","11","admin","11:52","11/21/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("268","11","admin","11:53","11/21/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("269","11","admin","11:53","11/21/2022","admin visited purok FATIMA");
INSERT INTO history_log VALUES("270","11","admin","11:53","11/21/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("271","11","admin","11:53","11/21/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("272","11","admin","11:53","11/21/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("273","11","admin","11:54","11/21/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("274","11","admin","11:55","11/21/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("275","11","admin","12:00","11/22/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("276","11","admin","12:01","11/22/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("277","11","admin","12:04","11/22/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("278","11","admin","12:05","11/22/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("279","11","admin","12:05","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("280","11","admin","12:05","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("281","11","admin","12:05","11/22/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("282","11","admin","12:05","11/22/2022","admin visited purok STA. CRUZ and household no 2");
INSERT INTO history_log VALUES("283","11","admin","12:05","11/22/2022","admin visited purok STA. CRUZ and household no 3");
INSERT INTO history_log VALUES("284","11","admin","12:05","11/22/2022","admin visited purok STA. CRUZ and household no 4");
INSERT INTO history_log VALUES("285","11","admin","12:05","11/22/2022","admin visited purok STA. CRUZ and household no 5");
INSERT INTO history_log VALUES("286","11","admin","12:05","11/22/2022","admin visited purok STA. CRUZ and household no 6");
INSERT INTO history_log VALUES("287","11","admin","12:05","11/22/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("288","11","admin","12:06","11/22/2022","admin visited purok MARGARITA");
INSERT INTO history_log VALUES("289","11","admin","12:06","11/22/2022","admin visited purok LOURDES");
INSERT INTO history_log VALUES("290","11","admin","12:06","11/22/2022","admin visited purok FATIMA");
INSERT INTO history_log VALUES("291","11","admin","12:06","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("292","11","admin","12:06","11/22/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("293","11","admin","12:06","11/22/2022","admin visited purok LOURDES");
INSERT INTO history_log VALUES("294","11","admin","12:06","11/22/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("295","11","admin","12:12","11/22/2022","admin added user id 239 Information");
INSERT INTO history_log VALUES("296","11","admin","12:12","11/22/2022","admin visited purok MARGARITA");
INSERT INTO history_log VALUES("297","11","admin","12:12","11/22/2022","admin visited purok MARGARITA and household no 1");
INSERT INTO history_log VALUES("298","11","admin","12:12","11/22/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("299","11","admin","12:12","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("300","11","admin","12:12","11/22/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("301","11","admin","12:14","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("302","11","admin","12:17","11/22/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("303","11","admin","12:17","11/22/2022","admin visited purok MARGARITA");
INSERT INTO history_log VALUES("304","11","admin","12:17","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("305","11","admin","12:17","11/22/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("306","11","admin","12:17","11/22/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("307","11","admin","12:17","11/22/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("308","11","admin","12:17","11/22/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("309","11","admin","12:17","11/22/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("310","11","admin","12:17","11/22/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("311","11","admin","12:17","11/22/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("312","11","admin","12:17","11/22/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("313","11","admin","12:17","11/22/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("314","11","admin","12:19","11/22/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("315","11","admin","12:19","11/22/2022","admin visited purok MARGARITA");
INSERT INTO history_log VALUES("316","11","admin","12:19","11/22/2022","admin visited purok MARGARITA and household no 1");
INSERT INTO history_log VALUES("317","11","admin","12:19","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("318","11","admin","12:19","11/22/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("319","11","admin","12:19","11/22/2022","admin visited purok MARGARITA");
INSERT INTO history_log VALUES("320","11","admin","12:20","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("321","11","admin","12:20","11/22/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("322","11","admin","12:20","11/22/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("323","11","admin","12:20","11/22/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("324","11","admin","12:20","11/22/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("325","11","admin","12:21","11/22/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("326","11","admin","12:21","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("327","11","admin","12:21","11/22/2022","admin visited purok STA. CRUZ and household no 6");
INSERT INTO history_log VALUES("328","11","admin","12:21","11/22/2022","admin visited purok STA. CRUZ and household no 6");
INSERT INTO history_log VALUES("329","11","admin","12:21","11/22/2022","admin visited purok STA. CRUZ and household no 6");
INSERT INTO history_log VALUES("330","11","admin","12:21","11/22/2022","admin visited purok STA. CRUZ and household no 6");
INSERT INTO history_log VALUES("331","11","admin","12:21","11/22/2022","admin visited purok STA. CRUZ and household no 6");
INSERT INTO history_log VALUES("332","11","admin","12:21","11/22/2022","admin visited purok STA. CRUZ and household no 6");
INSERT INTO history_log VALUES("333","11","admin","12:22","11/22/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("334","11","admin","12:22","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("335","11","admin","12:22","11/22/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("336","11","admin","12:22","11/22/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("337","11","admin","12:22","11/22/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("338","11","admin","12:23","11/22/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("339","11","admin","12:23","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("340","11","admin","12:23","11/22/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("341","11","admin","12:23","11/22/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("342","11","admin","12:23","11/22/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("343","11","admin","12:23","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("344","11","admin","12:23","11/22/2022","admin visited purok STA. CRUZ and household no 6");
INSERT INTO history_log VALUES("345","11","admin","12:23","11/22/2022","admin visited purok STA. CRUZ and household no 6");
INSERT INTO history_log VALUES("346","11","admin","12:23","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("347","11","admin","12:23","11/22/2022","admin visited purok STA. CRUZ and household no 6");
INSERT INTO history_log VALUES("348","11","admin","12:23","11/22/2022","admin visited purok STA. CRUZ and household no 6");
INSERT INTO history_log VALUES("349","11","admin","12:23","11/22/2022","admin visited purok STA. CRUZ and household no 6");
INSERT INTO history_log VALUES("350","11","admin","12:23","11/22/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("351","11","admin","12:24","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("352","11","admin","12:24","11/22/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("353","11","admin","12:24","11/22/2022","admin visited purok MARGARITA");
INSERT INTO history_log VALUES("354","11","admin","12:24","11/22/2022","admin visited purok STO. NINO");
INSERT INTO history_log VALUES("355","11","admin","12:25","11/22/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("356","11","admin","12:25","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("357","11","admin","12:25","11/22/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("358","11","admin","12:25","11/22/2022","admin visited purok STO. NINO");
INSERT INTO history_log VALUES("359","11","admin","12:26","11/22/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("360","11","admin","12:26","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("361","11","admin","12:26","11/22/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("362","11","admin","12:26","11/22/2022","admin visited purok STA. CRUZ and household no 2");
INSERT INTO history_log VALUES("363","11","admin","12:26","11/22/2022","admin visited purok STA. CRUZ and household no 3");
INSERT INTO history_log VALUES("364","11","admin","12:26","11/22/2022","admin visited purok STA. CRUZ and household no 4");
INSERT INTO history_log VALUES("365","11","admin","12:26","11/22/2022","admin visited purok STA. CRUZ and household no 5");
INSERT INTO history_log VALUES("366","11","admin","12:26","11/22/2022","admin visited purok STA. CRUZ and household no 6");
INSERT INTO history_log VALUES("367","11","admin","12:26","11/22/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("368","11","admin","12:26","11/22/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("369","11","admin","12:26","11/22/2022","admin visited purok STO. NINO");
INSERT INTO history_log VALUES("370","11","admin","02:02","11/22/2022","admin visited purok FATIMA");
INSERT INTO history_log VALUES("371","11","admin","02:05","11/22/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("372","11","admin","02:05","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("373","11","admin","02:05","11/22/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("374","11","admin","02:05","11/22/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("375","11","admin","02:05","11/22/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("376","11","admin","02:09","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("377","11","admin","02:47","11/22/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("378","11","admin","03:56","11/22/2022","admin visited purok SAGRADA");
INSERT INTO history_log VALUES("379","11","admin","03:56","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("380","11","admin","08:31","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("381","11","admin","08:31","11/22/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("382","11","admin","08:37","11/22/2022","admin added user id 240 Information");
INSERT INTO history_log VALUES("383","11","admin","08:37","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("384","11","admin","08:37","11/22/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("385","11","admin","08:41","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("386","11","admin","08:41","11/22/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("387","11","admin","08:42","11/22/2022","admin visited purok STA. CRUZ and household no 2");
INSERT INTO history_log VALUES("388","11","admin","08:42","11/22/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("389","11","admin","08:42","11/22/2022","admin visited purok STA. CRUZ and household no 3");
INSERT INTO history_log VALUES("390","11","admin","08:42","11/22/2022","admin visited purok STA. CRUZ and household no 4");
INSERT INTO history_log VALUES("391","11","admin","08:42","11/22/2022","admin visited purok STA. CRUZ and household no 5");
INSERT INTO history_log VALUES("392","11","admin","08:42","11/22/2022","admin visited purok STA. CRUZ and household no 6");
INSERT INTO history_log VALUES("393","11","admin","08:42","11/22/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("394","11","admin","08:46","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("395","11","admin","08:46","11/22/2022","admin visited purok STA. CRUZ and household no 7");
INSERT INTO history_log VALUES("396","11","admin","08:48","11/22/2022","admin added user id 241 Information");
INSERT INTO history_log VALUES("397","11","admin","08:48","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("398","11","admin","08:48","11/22/2022","admin visited purok STA. CRUZ and household no 1");
INSERT INTO history_log VALUES("399","11","admin","08:58","11/22/2022","admin added user id 242 Information");
INSERT INTO history_log VALUES("400","11","admin","08:58","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("401","11","admin","08:58","11/22/2022","admin visited purok STA. CRUZ and household no 8");
INSERT INTO history_log VALUES("402","11","admin","08:58","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("403","11","admin","08:59","11/22/2022","admin visited purok STA. CRUZ and household no 8");
INSERT INTO history_log VALUES("404","11","admin","08:59","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("405","11","admin","08:59","11/22/2022","admin visited purok STA. CRUZ and household no 8");
INSERT INTO history_log VALUES("406","11","admin","08:59","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("407","11","admin","08:59","11/22/2022","admin visited purok STA. CRUZ and household no 8");
INSERT INTO history_log VALUES("408","11","admin","09:04","11/22/2022","admin added user id 243 Information");
INSERT INTO history_log VALUES("409","11","admin","09:04","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("410","11","admin","09:13","11/22/2022","admin added user id 244 Information");
INSERT INTO history_log VALUES("411","11","admin","09:19","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("412","11","admin","09:20","11/22/2022","admin visited purok STA. CRUZ and household no 8");
INSERT INTO history_log VALUES("413","11","admin","09:20","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("414","11","admin","09:20","11/22/2022","admin visited purok STA. CRUZ");
INSERT INTO history_log VALUES("415","11","admin","09:20","11/22/2022","admin visited purok STA. CRUZ and household no 8");
INSERT INTO history_log VALUES("416","11","admin","09:21","11/22/2022","admin updated Tolomia Escultor information.");
INSERT INTO history_log VALUES("417","11","admin","10:18","11/22/2022","admin removed user id 231 information! ");



#
# Delete any existing table `house`
#

DROP TABLE IF EXISTS `house`;


#
# Table structure of table `house`
#



CREATE TABLE `house` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `house` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




#
# Delete any existing table `status`
#

DROP TABLE IF EXISTS `status`;


#
# Table structure of table `status`
#



CREATE TABLE `status` (
  `stat_id` int(11) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(255) NOT NULL,
  PRIMARY KEY (`stat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO status VALUES("1","4P's");
INSERT INTO status VALUES("2","Solo Parent");
INSERT INTO status VALUES("3","Senior Citizen");
INSERT INTO status VALUES("4","Pensioner");
INSERT INTO status VALUES("5","UCT");
INSERT INTO status VALUES("6","PWD");
INSERT INTO status VALUES("7","None");



#
# Delete any existing table `tbl_announce`
#

DROP TABLE IF EXISTS `tbl_announce`;


#
# Table structure of table `tbl_announce`
#



CREATE TABLE `tbl_announce` (
  `id` int(11) NOT NULL,
  `txt` longtext CHARACTER SET latin1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_announce VALUES("1","PWD Payout Update

");



#
# Delete any existing table `tbl_household`
#

DROP TABLE IF EXISTS `tbl_household`;


#
# Table structure of table `tbl_household`
#



CREATE TABLE `tbl_household` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `household` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_household VALUES("27","1");
INSERT INTO tbl_household VALUES("28","2");
INSERT INTO tbl_household VALUES("29","3");
INSERT INTO tbl_household VALUES("30","4");
INSERT INTO tbl_household VALUES("31","5");
INSERT INTO tbl_household VALUES("32","6");
INSERT INTO tbl_household VALUES("33","7");
INSERT INTO tbl_household VALUES("34","8");
INSERT INTO tbl_household VALUES("36","9");
INSERT INTO tbl_household VALUES("37","10");
INSERT INTO tbl_household VALUES("38","11");
INSERT INTO tbl_household VALUES("39","12");
INSERT INTO tbl_household VALUES("40","13");
INSERT INTO tbl_household VALUES("41","14");



#
# Delete any existing table `tbl_support`
#

DROP TABLE IF EXISTS `tbl_support`;


#
# Table structure of table `tbl_support`
#



CREATE TABLE `tbl_support` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `number` varchar(20) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` text,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




#
# Delete any existing table `tbl_users`
#

DROP TABLE IF EXISTS `tbl_users`;


#
# Table structure of table `tbl_users`
#



CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `user_type` varchar(20) DEFAULT NULL,
  `avatar` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_users VALUES("10","staff","6ccb4b7c39a6e77f76ecfa935a855c6c46ad5611","staff","03052021043218icon.png","2021-05-04 01:32:18");
INSERT INTO tbl_users VALUES("11","admin","d033e22ae348aeb5660fc2140aec35850c4da997","administrator","09052021074950person.png","2021-05-04 01:33:03");
INSERT INTO tbl_users VALUES("13","aaa","7e240de74fb1ed08fa08d38063f6a6a91462a815","administrator","","2022-03-19 13:24:24");



#
# Delete any existing table `tblblotter`
#

DROP TABLE IF EXISTS `tblblotter`;


#
# Table structure of table `tblblotter`
#



CREATE TABLE `tblblotter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `complainant` varchar(100) DEFAULT NULL,
  `respondent` varchar(100) DEFAULT NULL,
  `casenum` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `details` varchar(10000) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

INSERT INTO tblblotter VALUES("28","Reydin A. Amancio alyas moymoy","Ronel G. Torres","1111","Incident","dfccde","2022-06-09","11:18:00","fff","Settled");



#
# Delete any existing table `tblbrgy_info`
#

DROP TABLE IF EXISTS `tblbrgy_info`;


#
# Table structure of table `tblbrgy_info`
#



CREATE TABLE `tblbrgy_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `province` varchar(100) DEFAULT NULL,
  `town` varchar(100) DEFAULT NULL,
  `brgy_name` varchar(50) DEFAULT NULL,
  `number` varchar(50) DEFAULT NULL,
  `text` text,
  `map_url` varchar(500) DEFAULT NULL,
  `city_logo` varchar(100) DEFAULT NULL,
  `brgy_logo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO tblbrgy_info VALUES("1","Cebu","Barili","Bolocboloc","0919-1234567","To serve resident and maintain economic growth and focus on development.","<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d749.3937440475648!2d123.52837343875844!3d10.113220938824915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a9630643dd013b%3A0x6265dd3ae93a9dd5!2sBolocboloc%20Gym!5e1!3m2!1sen!2sph!4v1667748113524!5m2!1sen!2sph" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>","2406202201031474614_134812209909301_1972678_n.jpg","24062022010314285895986_1730365790628609_7127529693773583911_n.jpg");



#
# Delete any existing table `tblchairmanship`
#

DROP TABLE IF EXISTS `tblchairmanship`;


#
# Table structure of table `tblchairmanship`
#



CREATE TABLE `tblchairmanship` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

INSERT INTO tblchairmanship VALUES("2","Presiding ");
INSERT INTO tblchairmanship VALUES("3","Committee on Appropriation");
INSERT INTO tblchairmanship VALUES("4","Committee on Peace & Order");
INSERT INTO tblchairmanship VALUES("5","Committee on Health");
INSERT INTO tblchairmanship VALUES("6","Committee on Education");
INSERT INTO tblchairmanship VALUES("7","Committee on Rules");
INSERT INTO tblchairmanship VALUES("8","Committee on Infra");
INSERT INTO tblchairmanship VALUES("9","Committee on Solid Waste");
INSERT INTO tblchairmanship VALUES("10","Committee on Sports");
INSERT INTO tblchairmanship VALUES("11","No Chairmanship");
INSERT INTO tblchairmanship VALUES("12","fggff");
INSERT INTO tblchairmanship VALUES("13","Secretary");



#
# Delete any existing table `tblofficials`
#

DROP TABLE IF EXISTS `tblofficials`;


#
# Table structure of table `tblofficials`
#



CREATE TABLE `tblofficials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `chairmanship` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `contact` varchar(11) DEFAULT NULL,
  `termstart` date DEFAULT NULL,
  `termend` date DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

INSERT INTO tblofficials VALUES("17","admin","2","15","09123456712","2018-07-18","2022-12-30","Active");
INSERT INTO tblofficials VALUES("23","ANTONIETO E. TIGLEY","2","11","09453628294","2018-06-21","2022-12-28","Active");
INSERT INTO tblofficials VALUES("24","ABIEL ANGELITO ALCOSEBA II","2","11","09567435662","2018-07-06","2022-12-22","Active");
INSERT INTO tblofficials VALUES("25","JEJOMAR A. ALESNA","2","12","09345678243","2018-07-06","2022-12-26","Active");
INSERT INTO tblofficials VALUES("26","JANRAY C.  BRANZUELA ","2","14","0997456787","2018-07-18","2022-12-28","Active");
INSERT INTO tblofficials VALUES("27","PATERNA M. BITANGA","2","16","0975456786","2018-07-06","2022-12-21","Active");
INSERT INTO tblofficials VALUES("28","admin","2","17","09345728534","2018-07-06","2022-12-22","Active");



#
# Delete any existing table `tblpayments`
#

DROP TABLE IF EXISTS `tblpayments`;


#
# Table structure of table `tblpayments`
#



CREATE TABLE `tblpayments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `details` varchar(100) DEFAULT NULL,
  `or_info` int(50) DEFAULT NULL,
  `amounts` decimal(10,2) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

INSERT INTO tblpayments VALUES("15","Certificate of Indigency Payment","0","40.00","2022-06-02","admin"," Reydin Altamira Amancio");
INSERT INTO tblpayments VALUES("16","Barangay Clearance Payment","0","24.00","2022-06-02","admin"," Reydin Altamira Amancio");
INSERT INTO tblpayments VALUES("17","Certificate of Indigency Payment","0","40.00","2022-06-02","admin"," Wensislao Kabalgmoy Obiso");
INSERT INTO tblpayments VALUES("18","Business Permit Payment","0","23.00","2022-06-08","admin"," Victorina Ricaplaza");
INSERT INTO tblpayments VALUES("19","67890","0","40.00","2022-06-08","admin"," Victorina Ricaplaza");
INSERT INTO tblpayments VALUES("20","123","0","2.00","2022-06-08","admin"," Victorina Ricaplaza");
INSERT INTO tblpayments VALUES("21","345","0","12.00","2022-06-08","admin"," Victorina Ricaplaza");
INSERT INTO tblpayments VALUES("22","Business Permit Payment","0","1.00","2022-06-08","admin"," Victorina Ricaplaza");
INSERT INTO tblpayments VALUES("23","Business Permit Payment","1","1.00","2022-06-08","admin"," Victorina Ricaplaza");
INSERT INTO tblpayments VALUES("24","Business Permit Payment","678","1.00","2022-06-08","admin"," Victorina Ricaplaza");
INSERT INTO tblpayments VALUES("25","Business Permit Payment","4567","1.00","2022-06-09","admin"," Victorina Ricaplaza");
INSERT INTO tblpayments VALUES("26","Business Permit Payment","56","1.00","2022-06-09","admin"," Victorina Ricaplaza");
INSERT INTO tblpayments VALUES("27","Barangay Clearance Payment","0","56.00","2022-06-28","admin"," Lorna Altamera Amancio");
INSERT INTO tblpayments VALUES("28","Certificate of Indigency Payment","0","30.00","2022-06-28","admin"," Lorna Altamera Amancio");



#
# Delete any existing table `tblpermit`
#

DROP TABLE IF EXISTS `tblpermit`;


#
# Table structure of table `tblpermit`
#



CREATE TABLE `tblpermit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) DEFAULT NULL,
  `owner1` varchar(200) DEFAULT NULL,
  `owner2` varchar(80) DEFAULT NULL,
  `nature` varchar(220) DEFAULT NULL,
  `applied` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO tblpermit VALUES("7","Victorina Ricaplaza","kk","hkukl","oilouilgj","2022-06-08");
INSERT INTO tblpermit VALUES("8","Victorina Ricaplaza","tssdf","","6ertwrq4","2022-06-12");



#
# Delete any existing table `tblposition`
#

DROP TABLE IF EXISTS `tblposition`;


#
# Table structure of table `tblposition`
#



CREATE TABLE `tblposition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(50) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

INSERT INTO tblposition VALUES("4","Captain","1");
INSERT INTO tblposition VALUES("7","Councilor 1","2");
INSERT INTO tblposition VALUES("8","Councilor 2","3");
INSERT INTO tblposition VALUES("9","Councilor 3","4");
INSERT INTO tblposition VALUES("10","Councilor 4","5");
INSERT INTO tblposition VALUES("11","Councilor 5","6");
INSERT INTO tblposition VALUES("12","Councilor 6","7");
INSERT INTO tblposition VALUES("13","Councilor 7","8");
INSERT INTO tblposition VALUES("14","SK Chairman","9");
INSERT INTO tblposition VALUES("15","Secretary","10");
INSERT INTO tblposition VALUES("16","Treasurer","11");
INSERT INTO tblposition VALUES("17","Chief Tanod","11");



#
# Delete any existing table `tblprecinct`
#

DROP TABLE IF EXISTS `tblprecinct`;


#
# Table structure of table `tblprecinct`
#



CREATE TABLE `tblprecinct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `precinct` varchar(100) DEFAULT NULL,
  `details` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO tblprecinct VALUES("1","qw","qwqwe");



#
# Delete any existing table `tblpurok`
#

DROP TABLE IF EXISTS `tblpurok`;


#
# Table structure of table `tblpurok`
#



CREATE TABLE `tblpurok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `details` text,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

INSERT INTO tblpurok VALUES("15","SAGRADA","Purok 5","5");
INSERT INTO tblpurok VALUES("16","STA. CRUZ","Purok 1","1");
INSERT INTO tblpurok VALUES("17","MARGARITA","Purok 2
","2");
INSERT INTO tblpurok VALUES("18","STO. NINO","Purok 4","4");
INSERT INTO tblpurok VALUES("19","SAN JOSE","Purok  6","6");
INSERT INTO tblpurok VALUES("20","LOURDES","Purok 3","3");
INSERT INTO tblpurok VALUES("23","FATIMA","Purok 7","7");



#
# Delete any existing table `tblrequest`
#

DROP TABLE IF EXISTS `tblrequest`;


#
# Table structure of table `tblrequest`
#



CREATE TABLE `tblrequest` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `gcontact` varchar(255) NOT NULL,
  `national_id` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `age` int(6) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `form` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

INSERT INTO tblrequest VALUES("23","Ronel","Torres","ronel.torres@ctu.edu.ph","20","Male","Brgy Business Clearance","Done");



#
# Delete any existing table `tblresident`
#

DROP TABLE IF EXISTS `tblresident`;


#
# Table structure of table `tblresident`
#



CREATE TABLE `tblresident` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `active` varchar(10) NOT NULL,
  `national_id` varchar(100) DEFAULT NULL,
  `citizenship` varchar(50) DEFAULT NULL,
  `picture` text CHARACTER SET utf8mb4,
  `firstname` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `alias` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `household` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `birthplace` varchar(80) CHARACTER SET utf8mb4 DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `civilstatus` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `gender` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `purok` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `voterstatus` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `identified_as` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `fourps` varchar(10) NOT NULL,
  `address` text CHARACTER SET utf8mb4,
  `resident_type` int(11) DEFAULT '1',
  `remarks` text,
  `stat_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=245 DEFAULT CHARSET=latin1;

INSERT INTO tblresident VALUES("212","","1","Filipino","person.png","Cresencia","Gingoyon","Empleo","","1","Campanga, Barili","1948-06-01","89","Widow","Female","STA. CRUZ","Yes","Active","","","","","","1","","2");
INSERT INTO tblresident VALUES("213","","2","Filipino","person.png","Samuel","Gingoyon","Empleo","","1","Bolocboloc, barili","1975-07-24","65","Single","Male","STA. CRUZ","Yes","","","","","","","1","","1");
INSERT INTO tblresident VALUES("214","","3","Filipino","person.png","Nicomedes Jr.","Gingoyon","Empleo","","1","Bolocboloc,barili,cebu","1979-12-02","66","Single","Male","STA. CRUZ","Yes","","","","","","","1","","1");
INSERT INTO tblresident VALUES("215","","4","Filipino","person.png","Emelito","Gingoyon","Empleo","","2","Bolocboloc,barili,cebu","1987-04-13","64","Married","Male","STA. CRUZ","Yes","","","","","","","1","","5");
INSERT INTO tblresident VALUES("216","","5","Filipino","person.png","Roseline","Tubid","Empleo","","2","Lapu-Lapu City","1986-04-11","64","Married","Female","STA. CRUZ","No","","","","","","","1","","5");
INSERT INTO tblresident VALUES("217","","6","Filipino","person.png","Khalisse","Tubid","Empleo","","2","Lapu-Lapu City","2016-04-08","6","Single","Female","STA. CRUZ","No","","","","","","","1","","5");
INSERT INTO tblresident VALUES("218","","888","Filipino","person.png","Michaila","Tubid","Empleo","","2","Lapu-Lapu City","2017-04-20","5","Single","Female","STA. CRUZ","No","","","","","","","1","","5");
INSERT INTO tblresident VALUES("219","","999","Filipino","person.png","Randolf","Empleo","Sucepa","","3","Bolocboloc,barili,cebu","1996-08-05","63","Single","Male","STA. CRUZ","Yes","","","","","","","1","","6");
INSERT INTO tblresident VALUES("220","","1000","Filipino","person.png","Rafaela","Empleo","Empleo","","3","Bolocboloc,barili,cebu","2001-05-02","22","Single","Female","STA. CRUZ","Yes","","","","","","","1","","5");
INSERT INTO tblresident VALUES("221","","100","Filipino","person.png","Rachel Ann","Empleo","Empleo","","3","Bolocboloc,barili,cebu","2005-01-29","17","Single","Female","STA. CRUZ","No","","","","","","","1","","5");
INSERT INTO tblresident VALUES("222","","102","Filipino","person.png","Servando Sr.","Canete","Empos","","4","Bolocboloc","1971-10-23","68","Married","Male","STA. CRUZ","Yes","","","","","","","1","","6");
INSERT INTO tblresident VALUES("223","","103","Filipino","person.png","Cristina","Dela Cerna","Empos","","4","Asuzena","1974-10-23","75","Married","Female","STA. CRUZ","Yes","","","","","","","1","","6");
INSERT INTO tblresident VALUES("224","","104","Filipino","person.png","Servando Jr.","Dela Cerna","Empos","","4","BPH","2001-03-12","22","Single","Male","STA. CRUZ","Yes","","","","","","","1","","6");
INSERT INTO tblresident VALUES("225","","105","Filipino","person.png","Christoper","Dela Cerna","Empos","","4","Bolocboloc,barili,cebu","2002-04-10","12","Single","Male","STA. CRUZ","No","","","","","","","1","","6");
INSERT INTO tblresident VALUES("226","","106","Filipino","person.png","Khecia Mae","Dela Cerna","Empos","","4","Bolocboloc,barili,cebu","2003-09-17","19","Single","Female","STA. CRUZ","Yes","","","","","","","1","","6");
INSERT INTO tblresident VALUES("227","","107","Filipino","person.png","Kenneth","Dela Cerna","Empos","","4","Bolocboloc,barili,cebu","2006-09-10","16","Single","Male","STA. CRUZ","Yes","","","","","","","1","","6");
INSERT INTO tblresident VALUES("228","","108","Filipino","person.png","Germon","Dela Cerna","Empos","","4","BP4","2013-06-14","9","Single","Male","STA. CRUZ","No","","","","","","","1","","6");
INSERT INTO tblresident VALUES("229","","109","Filipino","person.png","Miguel ","Timagos","Carbero","","5","Bolocboloc,barili,cebu","1966-09-29","79","Married","Male","STA. CRUZ","Yes","","","","","","","1","","1");
INSERT INTO tblresident VALUES("230","","1010","Filipino","person.png","Merlinda","Francisco","Carbero","","5","Mindanao","1972-09-11","80","Married","Female","STA. CRUZ","Yes","","","","","","","1","","1");
INSERT INTO tblresident VALUES("231","no","1011","Filipino","person.png","Anna Marie","Francisco","Carbero","","5","Bolocboloc,barili,cebu","1994-06-20","73","Single","Female","STA. CRUZ","Yes","","","","","","","1","","1");
INSERT INTO tblresident VALUES("232","","1012","Filipino","person.png","Marian Joy","Francisco","Carbero","","5","Bolocboloc,barili,cebu","1997-02-15","64","Single","Female","STA. CRUZ","Yes","","","","","","","1","","1");
INSERT INTO tblresident VALUES("233","","1013","Filipino","person.png","Renand","Tecson","Padin","","6","Libo Sibonga, Cebu","1991-05-10","43","Married","Male","STA. CRUZ","Yes","","","","","","","1","","5");
INSERT INTO tblresident VALUES("234","","1014","Filipino","person.png","Michelle","Carbero","Padin","","6","Bolocboloc,barili,cebu","1991-09-23","36","Married","Female","STA. CRUZ","Yes","","","","","","","1","","5");
INSERT INTO tblresident VALUES("235","","1015","Filipino","person.png","Khan Rey ","Carbero","Padin","","6","Barili Dist. H.","2012-09-23","10","Single","Male","STA. CRUZ","No","","","","","","","1","","5");
INSERT INTO tblresident VALUES("236","","113","Filipino","person.png","Elesio","Escandallo","Tenebroso","","7","Bolocboloc,barili,cebu","1975-11-16","78","Married","Male","STA. CRUZ","Yes","","","","","","","1","","6");
INSERT INTO tblresident VALUES("237","","114","Filipino","person.png","Genara","Escandllo","villarin","","7","Pinamongajan, cebu","1976-03-03","76","Married","Female","STA. CRUZ","Yes","","","","","","","1","","6");
INSERT INTO tblresident VALUES("238","","115","Filipino","person.png","Ma. Elna","Villarin","Escandallo","","7","Minglanilla, Cebu","1997-02-16","25","Single","Female","STA. CRUZ","Yes","","","","","","","1","","5");
INSERT INTO tblresident VALUES("239","","0","Filipino","person.png","mdn","dmn","ff","","1","Bolocboloc,barili,cebu","1997-12-09","45","Married","Male","MARGARITA","Yes","","","","","","","1","","3");
INSERT INTO tblresident VALUES("240","","130","Filipino","person.png","Elezar","Villarin","Escandallo","","7","Minglanilia, Cebu","1999-07-10","24","Single","Male","STA. CRUZ","Yes","","","","","","","1","","1");
INSERT INTO tblresident VALUES("241","","132","Filipino","person.png","Ergel","Villarin","Escandallo","","7","Bolocboloc,barili,cebu","2002-07-09","20","Single","Male","STA. CRUZ","Yes","","","","","","","1","","6");
INSERT INTO tblresident VALUES("242","","201","Filipino","person.png","Sebastian","Flores","Escultor","","8","Giloctog, Barili, Cebu","1970-11-20","78","Married","Male","STA. CRUZ","Yes","","","","","","","1","","6");
INSERT INTO tblresident VALUES("243","","202","Filipino","person.png","Tolomia","Marilou","Escultor","","8","Manila","1979-12-13","87","Married","Female","STA. CRUZ","Yes","","","","","","","1","","6");
INSERT INTO tblresident VALUES("244","","203","Filipino","person.png","Kathleneshane","Tolomia","Escultor","","8","Patupat,barili,cebu","2004-12-06","18","Single","Female","STA. CRUZ","Yes","","","","","","","1","","6");

