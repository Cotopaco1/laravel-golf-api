-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: 172.17.114.226    Database: golf
-- ------------------------------------------------------
-- Server version	8.0.44-0ubuntu0.24.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('laravel-cache-bd5716382639ca5f3628514abd574859','i:2;',1768086512),('laravel-cache-bd5716382639ca5f3628514abd574859:timer','i:1768086512;',1768086512);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Drivers','2026-01-11 04:05:38','2026-01-11 04:05:38'),(2,'Woods','2026-01-11 04:05:38','2026-01-11 04:05:38'),(3,'Hybrids','2026-01-11 04:05:38','2026-01-11 04:05:38'),(4,'Driving','2026-01-11 04:05:38','2026-01-11 04:05:38'),(5,'Irons','2026-01-11 04:05:38','2026-01-11 04:05:38'),(6,'Wedges','2026-01-11 04:05:38','2026-01-11 04:05:38'),(7,'Putters','2026-01-11 04:05:38','2026-01-11 04:05:38');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listings`
--

DROP TABLE IF EXISTS `listings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `listings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `category_id` bigint unsigned DEFAULT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `condition` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `end_date` datetime NOT NULL,
  `ai_estimated_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ai_evaluation_text` text COLLATE utf8mb4_unicode_ci,
  `ai_recommended_skill_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `listings_user_id_foreign` (`user_id`),
  KEY `listings_category_id_foreign` (`category_id`),
  CONSTRAINT `listings_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  CONSTRAINT `listings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listings`
--

LOCK TABLES `listings` WRITE;
/*!40000 ALTER TABLE `listings` DISABLE KEYS */;
INSERT INTO `listings` VALUES (1,1,1,'TaylorMade Qi Driver',900.00,'like_new','Explosive distance and high forgiveness with the new Carbon Twist Face technology.','2026-01-10 19:57:34',NULL,NULL,NULL,NULL,'2026-01-08 04:05:38',NULL),(2,1,1,'Callaway Paradym Driver',820.00,'new','High launch and low spin driver designed for speed and stability across the face.','2026-01-11 15:20:00',NULL,NULL,NULL,NULL,'2026-01-04 04:05:38',NULL),(3,2,1,'Ping G430 Max Driver',780.00,'used','Maximum MOI driver offering consistent ball speed and tighter dispersion.','2026-01-12 10:00:00',NULL,NULL,NULL,NULL,'2026-01-06 04:05:38',NULL),(4,1,2,'Titleist TSR2 Fairway Wood',420.00,'like_new','Fairway wood built for easy launch, speed, and stable flight from any lie.','2026-01-10 20:30:00',NULL,NULL,NULL,NULL,'2026-01-01 04:05:38',NULL),(5,2,2,'TaylorMade Stealth 2 Fairway Wood',390.00,'used','Fast fairway wood with a low CG for strong launch and reliable carry.','2026-01-11 09:15:00',NULL,NULL,NULL,NULL,'2025-12-28 04:05:38',NULL),(6,1,2,'Cobra AeroJet Fairway Wood',350.00,'refurbished','Aerodynamic shaping focused on speed with a forgiving face across strikes.','2026-01-12 18:45:00',NULL,NULL,NULL,NULL,'2026-01-04 04:05:38',NULL),(7,1,3,'Ping G430 Hybrid',260.00,'like_new','Easy-to-hit hybrid with high launch and consistent spin for gapping.','2026-01-10 21:10:00',NULL,NULL,NULL,NULL,'2026-01-07 04:05:38',NULL),(8,1,3,'Callaway Apex Hybrid',240.00,'used','Players hybrid that blends workability with forgiveness and fast ball speed.','2026-01-11 13:40:00',NULL,NULL,NULL,NULL,'2025-12-21 04:05:38',NULL),(9,1,3,'Titleist TSR3 Hybrid',280.00,'new','Adjustable hybrid engineered for precise flight control and strong carry.','2026-01-12 11:25:00',NULL,NULL,NULL,NULL,'2025-12-30 04:05:38',NULL),(10,2,4,'Nike Driving Iron 18°',190.00,'used','Driving iron built for penetrating flight and control off the tee.','2026-01-10 22:00:00',NULL,NULL,NULL,NULL,'2026-01-09 04:05:38',NULL),(11,1,4,'TaylorMade UDI Driving Iron',210.00,'like_new','Utility driving iron with hollow construction for speed and launch.','2026-01-11 16:05:00',NULL,NULL,NULL,NULL,'2026-01-02 04:05:38',NULL),(12,1,4,'Titleist U505 Driving Iron',230.00,'refurbished','Forgiving utility iron offering high ball speed and a confidence-inspiring profile.','2026-01-12 19:30:00',NULL,NULL,NULL,NULL,'2025-12-27 04:05:38',NULL),(13,1,5,'Mizuno JPX 923 Iron Set',680.00,'like_new','Forged irons delivering buttery feel, distance, and tight dispersion.','2026-01-10 23:10:00',NULL,NULL,NULL,NULL,'2026-01-05 04:05:38',NULL),(14,1,5,'TaylorMade P790 Iron Set',720.00,'used','Players distance irons with a hollow body design for speed and feel.','2026-01-11 17:50:00',NULL,NULL,NULL,NULL,'2025-12-14 04:05:38',NULL),(15,2,5,'Titleist T200 Iron Set',760.00,'new','Tour-inspired irons with added forgiveness and high launch for consistent gapping.','2026-01-12 12:10:00',NULL,NULL,NULL,NULL,'2026-01-03 04:05:38',NULL),(16,1,6,'Cleveland RTX 6 ZipCore Wedge 56°',150.00,'used','Tour-proven wedge with enhanced spin and control around the greens.','2026-01-10 18:30:00',NULL,NULL,NULL,NULL,'2026-01-10 04:05:38',NULL),(17,1,6,'Titleist Vokey SM9 Wedge 60°',170.00,'like_new','Precision-milled wedge offering exceptional spin and shot versatility.','2026-01-11 14:00:00',NULL,NULL,NULL,NULL,'2025-12-25 04:05:38',NULL),(18,1,7,'Odyssey White Hot OG Putter',220.00,'used','Classic insert feel with modern shaping for consistent roll.','2026-01-10 20:00:00',NULL,NULL,NULL,NULL,'2026-01-02 04:05:38',NULL),(19,1,7,'Scotty Cameron Phantom X Putter',480.00,'new','Premium milled putter delivering balance, feel, and tour-level performance.','2026-01-12 16:40:00',NULL,NULL,NULL,NULL,'2025-12-07 04:05:38',NULL),(20,1,1,'Srixon ZX Driver',640.00,'used','Balanced driver with a responsive face and stable flight for consistent distance.','2026-01-12 19:57:34','250','The Srixon ZX Driver represents a performance-oriented lineup from Srixon, offering a well-built feel, a responsive face, and a forgiving flight path that suits mid-to-advanced players. In used condition, you can expect solid distance and a stable ball flight, ideal for players seeking reliable off-the-tee performance with consistent dispersion. Buyers should inspect crown/face wear, confirm the exact ZX variant (ZX7 vs ZX5) and shaft compatibility while noting grip condition and any shaft upgrades. The main value proposition is strong performance at a discount relative to new pricing, but the current $640 asking price for a used unit is well above typical market levels and will require negotiation.','intermediate',NULL,'2026-01-11 04:08:47','2026-01-11 04:09:15'),(21,1,3,'Cobra King Tec Hybrid',270.00,'like_new','Adjustable hybrid offering a clean look at address with strong ball speed and forgiveness.','2026-01-13 19:57:34','243','The Cobra King Tec Hybrid is part of Cobra\'s King line, offering an adjustable loft/face setup with a forgiving, compact head designed for easy alignment and strong ball speed. It provides a mid-to-high launch with notable forgiveness, making it a solid option for beginners transitioning to hybrids or mid-handicappers needing a reliable utility club. Key strengths include the adjustable settings and a clean address appearance; buyers should verify available loft options and weigh the listing price against current new pricing to assess value in like-new condition. Overall, the King Tec Hybrid delivers versatile performance and good value for players seeking a forgiving, adjustable hybrid to fill distance gaps.','beginner',NULL,'2026-01-11 04:10:33','2026-01-11 04:10:58'),(22,1,7,'Cleveland Huntington Beach Putter',160.00,'new','Milled putter with a soft feel and consistent roll, built for great value.','2026-01-19 19:57:34','160','The Cleveland Huntington Beach Putter is a milled putter from Cleveland\'s Huntington Beach line, delivering precise face geometry and a premium feel. Its milled face and blade-style design provide a soft, consistent roll ideal for greens with medium to fast speeds, emphasizing touch and alignment on short to mid-range putts. Notable strengths for buyers include high-quality milling, solid feel, and reliable distance control; consider confirming the exact weight/offset and whether accessories (headcover, grip) are included in the purchase. Overall, this model offers refined performance and strong value for players seeking a premium feel at a competitive new-price point.','intermediate',NULL,'2026-01-11 04:12:39','2026-01-11 04:12:56');
/*!40000 ALTER TABLE `listings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2026_01_09_154833_create_personal_access_tokens_table',1),(5,'2026_01_09_160300_create_categories_table',1),(6,'2026_01_09_160403_create_listings_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`),
  KEY `personal_access_tokens_expires_at_index` (`expires_at`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
INSERT INTO `personal_access_tokens` VALUES (1,'App\\Models\\User',1,'login','9499a7cfaebc6864b16540cc9cb0a590c05004694be67bed309d09521d17551d','[\"*\"]','2026-01-11 04:12:39','2026-01-18 04:07:37','2026-01-11 04:07:37','2026-01-11 04:12:39');
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Sergio','Silva','sergio@test.com',NULL,'$2y$12$yXF3XcoIFfipvtLg.2VX.eCi2eXdVPIltmNdH7mnve67R.AvFRMHy',NULL,'2026-01-11 04:05:38','2026-01-11 04:05:38'),(2,'Melissa','Yepes','melissa@test.com',NULL,'$2y$12$b0jion7zPr2ik/r1DDdhjuTfgZFTkLeS3uj7Nvf1nEh2ETcQ0R5j2',NULL,'2026-01-11 04:05:38','2026-01-11 04:05:38');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'golf'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-01-10 18:14:26
