-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.31 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table event_db.events: 4 rows
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
REPLACE INTO `events` (`id`, `title`, `start_date`, `end_date`, `recurrence_occurance`, `recurrence_duration`, `created_at`, `updated_at`) VALUES
	(1, 'Test', '2021-10-01', '2021-10-10', 1, 1, '2021-10-27 14:25:48', '2021-10-27 14:25:48');
REPLACE INTO `events` (`id`, `title`, `start_date`, `end_date`, `recurrence_occurance`, `recurrence_duration`, `created_at`, `updated_at`) VALUES
	(2, 'Test', '2021-10-01', '2021-10-31', 4, 1, '2021-10-27 15:30:09', '2021-10-27 15:30:09');
REPLACE INTO `events` (`id`, `title`, `start_date`, `end_date`, `recurrence_occurance`, `recurrence_duration`, `created_at`, `updated_at`) VALUES
	(3, 'Test 2', '2021-10-01', '2021-12-31', 1, 3, '2021-10-27 15:39:36', '2021-10-27 15:39:36');
REPLACE INTO `events` (`id`, `title`, `start_date`, `end_date`, `recurrence_occurance`, `recurrence_duration`, `created_at`, `updated_at`) VALUES
	(4, 'Test 3', '2021-10-01', '2021-10-31', 2, 2, '2021-10-27 15:40:00', '2021-10-27 15:40:00');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;

-- Dumping data for table event_db.migrations: 1 rows
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2021_10_27_133000_create_events_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
