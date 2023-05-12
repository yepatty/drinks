-- MariaDB dump 10.19  Distrib 10.4.27-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: drinks
-- ------------------------------------------------------
-- Server version	10.4.27-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `drinks`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `drinks` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `drinks`;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_04_21_075113_add_fields_to_users',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `oid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sname` varchar(40) NOT NULL,
  `pdinfo` varchar(40) NOT NULL,
  `amount` int(10) unsigned NOT NULL,
  `createdate` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (13,'王小明','0911963852','臺中市府店','茉莉原淬綠茶NT$30',27,'2023-05-04 14:05:31'),(14,'王小明','0911963852','臺中市府店','冬瓜麥茶NT$45',20,'2023-05-04 15:15:47'),(16,'王小明','0911963852','臺中市府店','青檸香茶NT$65',17,'2023-05-05 15:46:29'),(17,'王小明','0911963852','臺中大智店','養樂多綠NT$50',19,'2023-05-05 15:47:31'),(18,'王小明','0911963852','臺中市府店','伯爵紅茶拿鐵NT$55',7,'2023-05-05 16:22:37'),(23,'陳小樹','0908175892','臺中市府店','娜杯紅茶NT$30',50,'2023-05-08 15:17:57'),(28,'王小明','0911963852','臺中工學店','布朗紅茶拿鐵NT$70',25,'2023-05-11 15:54:57'),(29,'陳小樹','0908175892','臺中工學店','伯爵可可拿鐵NT$70',20,'2023-05-11 15:56:27');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `pid` varchar(20) NOT NULL,
  `series` varchar(40) NOT NULL,
  `pname` varchar(40) NOT NULL,
  `price` int(11) unsigned NOT NULL,
  `ptxt` varchar(250) NOT NULL,
  `imgpath` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES ('p01','愛茶的牛','娜杯紅茶',30,'特選自斯里蘭卡中低海拔盧哈娜茶葉產區，得天獨厚的氣候造就厚實的紅茶風味，單茶酌飲茶香獨特，餘韻持久，口感清爽不甜膩。','image/products/tea/01red.png'),('p02','愛茶的牛','大正醇香紅茶',30,'選用阿薩姆紅茶，屬於古早味紅茶，帶點清新木質香氣，風味柔順。','image/products/tea/02red.png'),('p03','愛茶的牛','英倫伯爵紅茶',30,'選用印度的阿薩姆紅茶，搭配斯里蘭卡的錫蘭紅茶，茶味濃郁，加入佛手柑薰香，獨有的奔放果香風味，果香獨特。','image/products/tea/03red.png'),('p04','愛茶的牛','焙香決明大麥',30,'迷客夏的麥茶加入決明子一同熬煮！決明子與麥茶的融合，增添決明子特有香氣、風味更加豐富與圓潤層次!','image/products/tea/04m.png'),('p05','愛茶的牛','琥珀高峰烏龍',30,'茶湯色澤如琥珀般，入口可以感受到炭焙香氣，口感清爽溫潤甘甜。','image/products/tea/05ol.png'),('p06','愛茶的牛','茉莉原淬綠茶',30,'帶有清新茉莉花香的綠茶，入口後滋味清盈不澀口。','image/products/tea/06green.png'),('p07','愛茶的牛','原片初露青茶',30,'選用台灣原片青茶，滋味淡雅清香，圓潤清甜。','image/products/tea/07g.png'),('p08','愛茶的牛','原鄉冬瓜茶',30,'由門市手工熬煮的冬瓜糖液，入口柔順，是經典好滋味～','image/products/tea/08melon.png'),('p09','牧場鮮奶茶','伯爵紅茶拿鐵',55,'有著特殊佛手柑果香的伯爵紅茶搭配綠光鮮奶，茶香濃郁口感醇厚。','image/products/mktea/01redmk.png'),('p10','牧場鮮奶茶','大正紅茶拿鐵',55,'使用自家綠光牧場鮮奶搭配古早味大正紅茶，帶有香草香氣和濃醇奶香。','image/products/mktea/02redmk.png'),('p11','牧場鮮奶茶','娜杯紅茶拿鐵',55,'特選自斯里蘭卡中低海拔盧哈娜茶葉產區， 添加迷客夏自家綠光牧場的鮮乳製成， 特製的調飲比例讓盧哈娜紅茶與鮮奶風味達到完美平衡， 奶味不失濃郁醇香， 帶有些許焦糖香氣滑潤順口！','image/products/mktea/03redmk.png'),('p12','牧場鮮奶茶','原片青茶拿鐵',55,'選用淡雅清香的台灣原片青茶搭配自家綠光牧場鮮奶，清甜香醇可口。','image/products/mktea/04gmk.png'),('p13','牧場鮮奶茶','琥珀烏龍拿鐵',55,'有著炭焙香的高峰烏龍茶搭配自家綠光牧場鮮奶，口感柔順、氣息層次豐富。','image/products/mktea/05olomk.png'),('p14','牧場鮮奶茶','茉香綠茶拿鐵',55,'使用茉香綠茶搭配自家綠光牧場鮮奶，清新茉莉花香，滋味清爽順口。','image/products/mktea/06greenmk.png'),('p15','牧場鮮奶茶','焙香大麥拿鐵',55,'無咖啡因的決明子與麥茶融合，再搭配自家綠光牧場鮮奶，增添整體的香氣、風味更加豐富與圓潤層次！','image/products/mktea/07mmk.png'),('p16','牧場鮮奶茶','布朗紅茶拿鐵',70,'門市手炒黑糖， 特殊濃郁焦香， 搭配經典大正紅茶及綠光鮮奶調製鮮奶茶， 透過特殊漩茶技術， 讓黑糖更為撲鼻誘人卻不膩口！','image/products/mktea/08redmk.png'),('p17','牧場鮮奶茶','伯爵可可拿鐵',70,'選用五星主廚指定的法國頂級「法芙娜100%純可可」， 與帶有佛手柑香氣的伯爵拿鐵融合， 呈現可可香濃滋味及果香尾韻。','image/products/mktea/09cocoredmk.png'),('p18','牧場鮮奶茶','蜂蜜綠茶拿鐵',75,'嚴選100%真百花蜜， 集百花之精華， 每一口都喝得到蜂蜜的清香甜潤。 蜂蜜中特有的花香遇上經典茉香綠茶拿鐵， 給你清新甜潤的味蕾饗宴。','image/products/mktea/10honeygreenmk.png'),('p19','牧場鮮奶茶','蜂蜜麥茶拿鐵	',75,'清爽的麥香拿鐵融合香醇蜂蜜，入口可以感受到厚實的炒焙麥香，以及綠光鮮奶的滑順可口。','image/products/mktea/11honeymmk.png'),('p20','綠光牧場鮮奶','珍珠鮮奶',85,'迷客夏的珍珠是使用蜂蜜蜜漬的白玉珍珠， 門市每天熬煮備製， 經過多次冷水降溫， 像幫珍珠做三溫暖， 創造出Q彈口感的白玉珍珠， 加上自家綠光鮮奶， 香醇可口。','image/products/milk/01pealmilk.png'),('p21','綠光牧場鮮奶','芋頭鮮奶',85,'迷客夏招牌經典飲品！ 選用檳榔心芋、高雄一號的芋頭， 去頭去尾只使用中段最精華的部位並只取風味最佳的中段， 口感鬆軟綿密， 香氣濃郁！ 不添加香精色素， 每一口都有芋頭本身的天然香氣。 透過門市每日會手工蒸煮、壓泥， 冰涼的芋頭泥攪打入濃郁的鮮奶中， 香氣濃郁， 吃得到真材實料的芋頭泥顆粒， 喝上一杯， 非常滿足!','image/products/milk/02taromilk.png'),('p22','綠光牧場鮮奶','嫩仙草凍奶',85,'綠光鮮奶搭配小火慢熬、軟嫩滑溜的嫩仙草凍， 咀嚼間帶有微微仙草甘味與鮮奶的滑順香甜感。 仙草本身具解渴、消暑功效， 迷客夏獨特配方製作， 呈現細緻、滑順口感。','image/products/milk/03jellymilk.png'),('p23','綠光牧場鮮奶','手炒黑糖鮮奶',85,'門市手工炒製的黑糖，清甜焦香不膩口，搭配自家綠光鮮奶，香醇可口。','image/products/milk/04bkmilk.png'),('p24','綠光牧場鮮奶','法芙娜純可可鮮奶',85,'選用來自法國的法芙娜Valrhona 100%純可可， 被譽為可可界的愛馬仕， 對於品質的堅持與追求聞名於世， 深受烘焙界大師的愛好與推薦。 自然的可可香氣， 濃郁帶有一點苦味， 加入迷客夏綠光鮮奶， 絕對是可可愛好者的最愛！','image/products/milk/05cocomilk.png'),('p25','手作特調','冰糖洛神梅',45,'加入洛神花、冰糖及烏梅一同熬煮，酸甜不膩口。','image/products/sp/01srplum.png'),('p26','手作特調','香柚綠茶',55,'葡萄柚熬製成果露，搭配綠茶，柑橘氣息，微酸微苦。','image/products/sp/02grapegtea.png'),('p27','手作特調','養樂多綠',50,'茉莉原淬綠茶搭配養樂多多，清甜微酸、清爽無負擔。','image/products/sp/03yukaltgtea.png'),('p28','手作特調','青檸香茶',65,'手削檸檬皮加上茉莉原淬綠茶， 搖200下的美味～完美Shake出檸檬天然香氣， 絕對是迷粉必點飲品！','image/products/sp/04lemongtea.png'),('p29','手作特調','冬瓜青茶',50,'門市手工熬煮冬瓜糖液搭配青茶，清甜不膩口。','image/products/sp/05melongtea.png'),('p30','手作特調','冬瓜麥茶',45,'有了麥茶的加，讓冬瓜變得更清爽，以麥茶輕爽感受修飾冬瓜甜膩，兩種風味完美融合，添飲品層次。','image/products/sp/06melonmtea.png'),('p31','手作特調','冬瓜檸檬',45,'門市手工熬煮的冬瓜糖液，加上100%檸檬原汁，台灣人熟悉的味道，酸甜不膩口。','image/products/sp/07melonlemon.png'),('p32','手作特調','柳丁綠茶',60,'嚴選石灰岩地質種植的台灣柳丁， 100%柳丁原汁加入甘醇茉莉綠茶， 柳丁柑橘清香帶出果香味， 還喝得到柳丁果肉！ 也可以換青茶～','image/products/sp/08lemontea.png'),('p33','手作特調','冰萃柳丁',60,'入口柳丁清新柑橘香氣帶有蜜香， 碎冰口感清爽沁涼果茶風味， 更沁涼消暑。 選用台南(南化水庫以北，嘉義以南)100%當季柳丁鮮果原汁、冷凍保存。 採用獨特殺菌處理， 達國家安全衛生標準， 呈現鮮採柳丁香甜風味。','image/products/sp/09orange.png'),('p34','手作特調','冰萃檸檬',55,'採用100%檸檬原汁， 選用當季鮮果榨汁、冷凍保存。 獨特殺菌處理， 達國家安全衛生標準， 呈現鮮採檸檬原汁風味。','image/products/sp/10lemon.png'),('p35','手作特調','白甘蔗青茶',65,'選用台灣100%白甘蔗原汁， 搭配HPP冷壓殺菌技術處理， 讓甘蔗原汁衛生安全無虞又保有原始風味。 搭配青茶， 滋味圓潤清甜。','image/products/sp/11sugargtea.png'),('p36','手作特調','水漾檸紅',40,'以檸檬酸香為主體，搭配佛手柑香氣，尾韻細長、清新順口。','image/products/sp/12lemonreadtea.png'),('p37','手作特調','水漾檸綠',40,'以檸檬香氣為主體，搭配茉莉花香，整體清爽順口，尾韻帶出話梅甘甜，增添風味層次。','image/products/sp/13lemongreentea.png'),('p38','手作特調','蜂蜜檸檬晶凍',55,'當蜂蜜遇上檸檬，彷彿重回初戀般的酸甜滋味，搭配咕溜清爽隱藏版配料-綠茶凍，清甜順口！','image/products/sp/14honeylemon.png');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shops`
--

DROP TABLE IF EXISTS `shops`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shops` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `shoptel` varchar(20) NOT NULL,
  `shophr` varchar(200) NOT NULL,
  `lat` varchar(30) NOT NULL,
  `lng` varchar(30) NOT NULL,
  `wilurl` varchar(400) DEFAULT NULL,
  `mapurl` varchar(500) DEFAULT NULL,
  `mapdiv` varchar(11) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shops`
--

LOCK TABLES `shops` WRITE;
/*!40000 ALTER TABLE `shops` DISABLE KEYS */;
INSERT INTO `shops` VALUES (1,'臺中市府店','臺中市南屯區大墩路809號1樓','04-2320-0661','9:00-22:00','24.15510054697317','120.64958475669594','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227.52967509667647!2d120.649546415639!3d24.155075764397058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d1a062ddb47%3A0x58564831901fae8f!2z6L-35a6i5aSPTWlsa3NoYSDoh7rkuK3luILlupzlupc!5e0!3m2!1szh-TW!2stw!4v1682059208878!5m2!1szh-TW!2stw','https://www.google.com.tw/maps/place/%E8%BF%B7%E5%AE%A2%E5%A4%8FMilksha+%E8%87%BA%E4%B8%AD%E5%B8%82%E5%BA%9C%E5%BA%97/@24.1550935,120.6495327,21z/data=!4m6!3m5!1s0x34693d1a062ddb47:0x58564831901fae8f!8m2!3d24.1551005!4d120.6495857!16s%2Fg%2F11sbmstc5r?hl=zh-TW','map1'),(2,'臺中大慶店','臺中市南區樹義里復興路一段307號','04-2263-8828','09:00-22:00','24.113825703206164','120.65333730407826','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227.60297952411545!2d120.65340375150448!3d24.113882695126403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d0d412b0db9%3A0x4c03487da7478ed9!2z6L-35a6i5aSPTWlsa3NoYSDoh7rkuK3lpKfmhbblupc!5e0!3m2!1szh-TW!2stw!4v1682058864421!5m2!1szh-TW!2stw','https://www.google.com/maps/place/%E8%BF%B7%E5%AE%A2%E5%A4%8FMilksha+%E8%87%BA%E4%B8%AD%E5%A4%A7%E6%85%B6%E5%BA%97/@24.1137913,120.6533339,21z/data=!4m6!3m5!1s0x34693d0d412b0db9:0x4c03487da7478ed9!8m2!3d24.1138259!4d120.653338!16s%2Fg%2F11jzp4qhbc','map2'),(3,'臺中工學店','台中市南區工學路61號','04-2263-1619','平日：09:00-22:00 假日：09:00-22:00','24.116719199815808','120.66550872530598','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227.59778648034765!2d120.66556550633565!3d24.11680307809822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693c562458eab7%3A0xd07a73fcad29812d!2z6L-35a6i5aSPTWlsa3NoYSDoh7rkuK3lt6Xlrbjlupc!5e0!3m2!1szh-TW!2stw!4v1682059883419!5m2!1szh-TW!2stw','https://www.google.com.tw/maps/place/%E8%BF%B7%E5%AE%A2%E5%A4%8FMilksha+%E8%87%BA%E4%B8%AD%E5%B7%A5%E5%AD%B8%E5%BA%97/@24.116798,120.665516,21z/data=!4m6!3m5!1s0x34693c562458eab7:0xd07a73fcad29812d!8m2!3d24.1167199!4d120.6655092!16s%2Fg%2F11cs1s0rpd','map3'),(4,'臺中烏日店','台中市烏日區中山路一段606號','04-2338-6986','平日：09:00-22:00 假日：09:00-22:00','24.106459200486565','120.63396262520446','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227.61596754032527!2d120.63386461418246!3d24.10657724074088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693c1703fe3d69%3A0x1c6ac87f5a27d200!2z6L-35a6i5aSPTWlsa3NoYSDoh7rkuK3ng4_ml6Xlupc!5e0!3m2!1szh-TW!2stw!4v1682060358451!5m2!1szh-TW!2stw','https://www.google.com.tw/maps/place/%E8%BF%B7%E5%AE%A2%E5%A4%8FMilksha+%E8%87%BA%E4%B8%AD%E7%83%8F%E6%97%A5%E5%BA%97/@24.1064952,120.6339558,21z/data=!4m6!3m5!1s0x34693c1703fe3d69:0x1c6ac87f5a27d200!8m2!3d24.106459!4d120.633964!16s%2Fg%2F11fx8qnvkj','map4'),(5,'臺中東勢店','臺中市東勢區中山路83號1樓','04-2577-3383','09:00-21:00','24.256656931222036','120.8289443865956','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227.34838263986072!2d120.82896951375949!3d24.256669733514588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34691dcd06452727%3A0x393770e0ab089387!2z6L-35a6i5aSPTWlsa3NoYSDoh7rkuK3mnbHli6Llupc!5e0!3m2!1szh-TW!2stw!4v1682060597812!5m2!1szh-TW!2stw','https://www.google.com/maps/place/%E8%BF%B7%E5%AE%A2%E5%A4%8FMilksha+%E8%87%BA%E4%B8%AD%E6%9D%B1%E5%8B%A2%E5%BA%97/@24.2567143,120.8288962,21z/data=!4m6!3m5!1s0x34691dcd06452727:0x393770e0ab089387!8m2!3d24.256658!4d120.8289454!16s%2Fg%2F11k3f1kq75?hl=zh-Hant-TW','map5'),(6,'臺中大智店','台中市東區大智路17-1號','04-22255082','09:30-22:00','24.13582318915538','120.68833361598094','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227.56393105110607!2d120.68836889323215!3d24.135834022895352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693da7f7235165%3A0x9aeb1757ece78651!2z6L-35a6i5aSPTWlsa3NoYSDoh7rkuK3lpKfmmbrlupc!5e0!3m2!1szh-TW!2stw!4v1682060709194!5m2!1szh-TW!2stw','https://www.google.com.tw/maps/place/%E8%BF%B7%E5%AE%A2%E5%A4%8FMilksha+%E8%87%BA%E4%B8%AD%E5%A4%A7%E6%99%BA%E5%BA%97/@24.1358492,120.6882805,21z/data=!4m6!3m5!1s0x34693da7f7235165:0x9aeb1757ece78651!8m2!3d24.1358246!4d120.6883333!16s%2Fg%2F11t5l71rxk?hl=zh-TW','map6');
/*!40000 ALTER TABLE `shops` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (7,'王小明','www123@gmail.com',NULL,'$2y$10$O69kk3Ko4EeXQzKSCyYgcuJWVjf/V4z5A/Zmg16oyliSMmiNwxzNq','0911963852','1983-10-19',NULL,'2023-05-03 21:57:13','2023-05-03 21:59:05'),(14,'陳小樹','acction@gmail.com',NULL,'$2y$10$PR.nqzkZL95RtHVVBTglrea1w/9urhm4Nc3z2ACqsVS1Ti87F85fW','0908175892','1995-03-30',NULL,'2023-05-07 22:34:59','2023-05-07 22:36:03');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'drinks'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-12 13:19:30
