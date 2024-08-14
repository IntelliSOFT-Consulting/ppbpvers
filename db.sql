-- MySQL dump 10.13  Distrib 8.0.39, for Linux (x86_64)
--
-- Host: localhost    Database: pvers
-- ------------------------------------------------------
-- Server version	8.0.39-0ubuntu0.24.04.1

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
-- Table structure for table `acl_phinxlog`
--

DROP TABLE IF EXISTS `acl_phinxlog`;

CREATE TABLE `acl_phinxlog` (
  `version` bigint NOT NULL,
  `migration_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


--
-- Dumping data for table `acl_phinxlog`
--
 

--
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;

CREATE TABLE `acos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parent_id` int DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int DEFAULT NULL,
  `rght` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

 

--
-- Table structure for table `aefi_descriptions`
--

DROP TABLE IF EXISTS `aefi_descriptions`;

CREATE TABLE `aefi_descriptions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `aefi_id` int DEFAULT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 

--
-- Table structure for table `aefi_list_of_vaccines`
--

DROP TABLE IF EXISTS `aefi_list_of_vaccines`;

CREATE TABLE `aefi_list_of_vaccines` (
  `id` int NOT NULL AUTO_INCREMENT,
  `aefi_id` int DEFAULT NULL,
  `saefi_id` int DEFAULT NULL,
  `vaccine_id` int DEFAULT NULL,
  `vaccine_name` varchar(200) DEFAULT NULL,
  `vaccination_date` datetime DEFAULT NULL,
  `vaccination_time` varchar(10) DEFAULT NULL,
  `vaccine_manufacturer` varchar(255) DEFAULT NULL,
  `vaccination_route` varchar(255) DEFAULT NULL,
  `vaccination_site` varchar(55) DEFAULT NULL,
  `dosage` varchar(255) DEFAULT NULL,
  `icsr_code` varchar(255) DEFAULT NULL,
  `batch_number` varchar(255) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `diluent_batch_number` varchar(55) DEFAULT NULL,
  `diluent_manufacturer` varchar(255) DEFAULT NULL,
  `diluent_expiry_date` date DEFAULT NULL,
  `suspected_drug` tinyint(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
 
--
-- Table structure for table `aefi_reactions`
--

DROP TABLE IF EXISTS `aefi_reactions`;

CREATE TABLE `aefi_reactions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `aefi_id` int DEFAULT NULL,
  `reaction_name` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


--
-- Dumping data for table `aefi_reactions`
--

LOCK TABLES `aefi_reactions` WRITE;
/*!40000 ALTER TABLE `aefi_reactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `aefi_reactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aefis`
--

DROP TABLE IF EXISTS `aefis`;

CREATE TABLE `aefis` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `pqmp_id` int DEFAULT NULL,
  `reference_no` varchar(255) DEFAULT NULL,
  `aefi_id` int DEFAULT NULL,
  `county_id` int DEFAULT NULL,
  `sub_county_id` int DEFAULT NULL,
  `vigiflow_ref` varchar(55) DEFAULT NULL,
  `vigiflow_date` datetime DEFAULT NULL,
  `vigiflow_message` longtext,
  `webradr_ref` varchar(255) DEFAULT NULL,
  `webradr_date` datetime DEFAULT NULL,
  `webradr_message` varchar(255) DEFAULT NULL,
  `designation_id` int DEFAULT NULL,
  `report_type` varchar(20) DEFAULT NULL,
  `name_of_institution` varchar(100) DEFAULT NULL,
  `institution_code` varchar(100) DEFAULT NULL,
  `patient_name` varchar(100) DEFAULT NULL,
  `guardian_name` varchar(255) DEFAULT NULL,
  `patient_address` varchar(255) DEFAULT NULL,
  `patient_phone` varchar(255) DEFAULT NULL,
  `patient_village` varchar(255) DEFAULT NULL,
  `ip_no` varchar(100) DEFAULT NULL,
  `date_of_birth` varchar(20) DEFAULT NULL,
  `age_months` int DEFAULT NULL,
  `age_group` varchar(255) DEFAULT NULL,
  `patient_ward` varchar(100) DEFAULT NULL,
  `patient_county` varchar(255) DEFAULT NULL,
  `patient_sub_county` varchar(255) DEFAULT NULL,
  `vaccination_center` varchar(255) DEFAULT NULL,
  `vaccination_county` varchar(255) DEFAULT NULL,
  `vaccination_type` varchar(255) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `pregnancy_status` varchar(20) DEFAULT NULL,
  `bcg` tinyint(1) DEFAULT NULL,
  `convulsion` tinyint(1) DEFAULT NULL,
  `urticaria` tinyint(1) DEFAULT NULL,
  `high_fever` tinyint(1) DEFAULT NULL,
  `abscess` tinyint(1) DEFAULT NULL,
  `local_reaction` tinyint(1) DEFAULT NULL,
  `anaphylaxis` tinyint(1) DEFAULT NULL,
  `meningitis` tinyint(1) DEFAULT NULL,
  `paralysis` tinyint(1) DEFAULT NULL,
  `toxic_shock` tinyint(1) DEFAULT NULL,
  `complaint_other` tinyint(1) DEFAULT NULL,
  `complaint_other_specify` text,
  `description_of_reaction` text,
  `date_aefi_started` date DEFAULT NULL,
  `time_aefi_started` varchar(10) DEFAULT NULL,
  `aefi_symptoms` text,
  `serious` varchar(10) DEFAULT NULL,
  `serious_yes` varchar(250) DEFAULT NULL,
  `serious_other` text,
  `medical_history` text,
  `treatment_given` text,
  `specimen_collected` varchar(255) DEFAULT NULL,
  `outcome` varchar(100) DEFAULT NULL,
  `reporter_name` varchar(100) DEFAULT NULL,
  `reporter_email` varchar(100) DEFAULT NULL,
  `reporter_phone` varchar(100) DEFAULT NULL,
  `reporter_date` date DEFAULT NULL,
  `submitted` tinyint DEFAULT '0',
  `submitted_date` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `device` tinyint DEFAULT '0',
  `copied` tinyint DEFAULT '0',
  `archived` tinyint DEFAULT '0',
  `archived_date` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `person_submitting` varchar(55) DEFAULT NULL,
  `reporter_name_diff` varchar(255) DEFAULT NULL,
  `reporter_designation_diff` int DEFAULT NULL,
  `reporter_email_diff` varchar(255) DEFAULT NULL,
  `reporter_phone_diff` varchar(255) DEFAULT NULL,
  `reporter_date_diff` date DEFAULT NULL,
  `assigned_to` int DEFAULT NULL,
  `assigned_by` int DEFAULT NULL,
  `assigned_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `aefis`
--

LOCK TABLES `aefis` WRITE;
/*!40000 ALTER TABLE `aefis` DISABLE KEYS */;
/*!40000 ALTER TABLE `aefis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aggregate_list_of_signals`
--

DROP TABLE IF EXISTS `aggregate_list_of_signals`;

CREATE TABLE `aggregate_list_of_signals` (
  `id` int NOT NULL AUTO_INCREMENT,
  `aggregate_id` int DEFAULT NULL,
  `aggregate_followup_id` int DEFAULT NULL,
  `signal_term` mediumtext,
  `source_trigger` mediumtext,
  `status` mediumtext,
  `outcome` mediumtext,
  `date_detected` date DEFAULT NULL,
  `date_closed` date DEFAULT NULL,
  `reason_summary` mediumtext,
  `evaluation_method` mediumtext,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `aggregate_list_of_signals`
--

LOCK TABLES `aggregate_list_of_signals` WRITE;
/*!40000 ALTER TABLE `aggregate_list_of_signals` DISABLE KEYS */;
/*!40000 ALTER TABLE `aggregate_list_of_signals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aggregates`
--

DROP TABLE IF EXISTS `aggregates`;

CREATE TABLE `aggregates` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `aggregate_id` int DEFAULT NULL,
  `county_id` int DEFAULT NULL,
  `summary_available` varchar(11) DEFAULT 'No',
  `sub_county_id` int DEFAULT NULL,
  `designation_id` int DEFAULT NULL,
  `reference_no` varchar(55) DEFAULT NULL,
  `messageid` varchar(255) DEFAULT NULL,
  `assigned_to` int DEFAULT NULL,
  `assigned_by` int DEFAULT NULL,
  `company_code` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `comment` mediumtext,
  `reporter_email` varchar(255) DEFAULT NULL,
  `e2b_content` longtext,
  `e2b_type` varchar(255) DEFAULT NULL,
  `e2b_file` varchar(255) DEFAULT NULL,
  `dir` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `assigned_date` datetime DEFAULT NULL,
  `signature` tinyint(1) DEFAULT NULL,
  `submitted` int DEFAULT '0',
  `submitted_date` datetime DEFAULT NULL,
  `reporter_name` varchar(255) DEFAULT NULL,
  `reporter_designation` int DEFAULT NULL,
  `reporter_phone` varchar(100) DEFAULT NULL,
  `reporter_date` date DEFAULT NULL,
  `person_submitting` varchar(50) DEFAULT NULL,
  `reporter_name_diff` varchar(255) DEFAULT NULL,
  `reporter_designation_diff` int DEFAULT NULL,
  `reporter_email_diff` varchar(255) DEFAULT NULL,
  `reporter_phone_diff` varchar(255) DEFAULT NULL,
  `reporter_date_diff` date DEFAULT NULL,
  `resubmit` varchar(15) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'Submitted',
  `active` tinyint DEFAULT '1',
  `copied` tinyint DEFAULT '0',
  `archived` tinyint DEFAULT '0',
  `archived_date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `action_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` tinyint(1) DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  `brand_name` varchar(255) DEFAULT NULL,
  `inn_name` varchar(255) DEFAULT NULL,
  `mah` varchar(255) DEFAULT NULL,
  `local_technical` varchar(255) DEFAULT NULL,
  `therapeutic_group` varchar(255) DEFAULT NULL,
  `authorised_indications` varchar(255) DEFAULT NULL,
  `form_strength` varchar(255) DEFAULT NULL,
  `interval_code` int DEFAULT NULL,
  `submission_frequency` varchar(255) DEFAULT NULL,
  `reminder_date` datetime DEFAULT NULL,
  `introduction` longtext,
  `worldwide_marketing` longtext,
  `action_taken` longtext,
  `reference_changes` longtext,
  `estimated_exposure` longtext,
  `clinical_findings` longtext,
  `efficacy` longtext,
  `late_breaking` longtext,
  `safety_concerns` longtext,
  `risks_evaluation` longtext,
  `risks_characterisation` longtext,
  `benefit_evaluation` longtext,
  `risk_balance` longtext,
  `recommendation` longtext,
  `conclusion` longtext,
  `report_type` varchar(255) DEFAULT NULL,
  `manager_initiated` tinyint(1) DEFAULT '0',
  `manager_submitted` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `aggregates`
--

LOCK TABLES `aggregates` WRITE;
/*!40000 ALTER TABLE `aggregates` DISABLE KEYS */;
/*!40000 ALTER TABLE `aggregates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;

CREATE TABLE `aros` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parent_id` int DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int DEFAULT NULL,
  `rght` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
/*!40000 ALTER TABLE `aros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;

CREATE TABLE `aros_acos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `aro_id` int NOT NULL,
  `aco_id` int NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


--
-- Dumping data for table `aros_acos`
--

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attachments`
--

DROP TABLE IF EXISTS `attachments`;

CREATE TABLE `attachments` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `model` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `foreign_key` int NOT NULL,
  `dirname` varchar(255) DEFAULT NULL,
  `basename` varchar(255) NOT NULL,
  `checksum` varchar(255) NOT NULL,
  `alternative` varchar(50) DEFAULT NULL,
  `group` varchar(255) DEFAULT NULL,
  `description` text,
  `year` char(50) DEFAULT NULL,
  `file_date` date DEFAULT NULL,
  `pocket_name` varchar(255) DEFAULT NULL,
  `version_no` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `attachments`
--

LOCK TABLES `attachments` WRITE;
/*!40000 ALTER TABLE `attachments` DISABLE KEYS */;
/*!40000 ALTER TABLE `attachments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attachments_old`
--

DROP TABLE IF EXISTS `attachments_old`;

CREATE TABLE `attachments_old` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sadr_id` int DEFAULT NULL,
  `sadr_followup_id` int DEFAULT NULL,
  `pqmp_id` int DEFAULT NULL,
  `aefi_id` int DEFAULT NULL,
  `device_id` int DEFAULT NULL,
  `transfusion_id` int DEFAULT NULL,
  `medication_id` int DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `description` text,
  `mimetype` varchar(255) DEFAULT NULL,
  `filesize` int unsigned DEFAULT NULL,
  `dir` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `basename` varchar(255) DEFAULT NULL,
  `dirname` varchar(255) DEFAULT NULL,
  `checksum` varchar(255) DEFAULT NULL,
  `model` varchar(100) DEFAULT NULL,
  `foreign_key` int DEFAULT NULL,
  `alternative` varchar(50) DEFAULT NULL,
  `group` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `attachments_old`
--

LOCK TABLES `attachments_old` WRITE;
/*!40000 ALTER TABLE `attachments_old` DISABLE KEYS */;
/*!40000 ALTER TABLE `attachments_old` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authorities`
--

DROP TABLE IF EXISTS `authorities`;

CREATE TABLE `authorities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `mah_name` varchar(137) DEFAULT NULL,
  `mah_company_name` varchar(153) DEFAULT NULL,
  `mah_company_address` varchar(261) DEFAULT NULL,
  `mah_company_telephone` varchar(168) DEFAULT NULL,
  `mah_company_email` varchar(109) DEFAULT NULL,
  `product` int DEFAULT NULL,
  `master_mah` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


--
-- Dumping data for table `authorities`
--

LOCK TABLES `authorities` WRITE;
/*!40000 ALTER TABLE `authorities` DISABLE KEYS */;
/*!40000 ALTER TABLE `authorities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auto_drugs`
--

DROP TABLE IF EXISTS `auto_drugs`;

CREATE TABLE `auto_drugs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `drugName` varchar(255) NOT NULL,
  `drugCode` varchar(255) NOT NULL,
  `isGeneric` tinyint(1) DEFAULT '1',
  `isPreferred` tinyint(1) DEFAULT '0',
  `countryOfSales` longtext,
  `activeIngredients` longtext,
  `atcs` longtext,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `auto_drugs`
--

LOCK TABLES `auto_drugs` WRITE;
/*!40000 ALTER TABLE `auto_drugs` DISABLE KEYS */;
/*!40000 ALTER TABLE `auto_drugs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `captcha_phinxlog`
--

DROP TABLE IF EXISTS `captcha_phinxlog`;

CREATE TABLE `captcha_phinxlog` (
  `version` bigint NOT NULL,
  `migration_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


--
-- Dumping data for table `captcha_phinxlog`
--

LOCK TABLES `captcha_phinxlog` WRITE;
/*!40000 ALTER TABLE `captcha_phinxlog` DISABLE KEYS */;
/*!40000 ALTER TABLE `captcha_phinxlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `captchas`
--

DROP TABLE IF EXISTS `captchas`;

CREATE TABLE `captchas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` blob,
  `result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `used` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


--
-- Dumping data for table `captchas`
--

LOCK TABLES `captchas` WRITE;
/*!40000 ALTER TABLE `captchas` DISABLE KEYS */;
/*!40000 ALTER TABLE `captchas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ce2b_list_of_drugs`
--

DROP TABLE IF EXISTS `ce2b_list_of_drugs`;

CREATE TABLE `ce2b_list_of_drugs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ce2b_id` int DEFAULT NULL,
  `ce2b_followup_id` int DEFAULT NULL,
  `dose_id` int DEFAULT NULL,
  `route_id` int DEFAULT NULL,
  `frequency_id` int DEFAULT NULL,
  `frequency_id_other` varchar(255) DEFAULT NULL,
  `drug_name` varchar(255) DEFAULT NULL,
  `brand_name` varchar(255) DEFAULT NULL,
  `batch_no` varchar(255) DEFAULT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `dose` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `stop_date` date DEFAULT NULL,
  `indication` varchar(100) DEFAULT NULL,
  `suspected_drug` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `ce2b_list_of_drugs`
--

LOCK TABLES `ce2b_list_of_drugs` WRITE;
/*!40000 ALTER TABLE `ce2b_list_of_drugs` DISABLE KEYS */;
/*!40000 ALTER TABLE `ce2b_list_of_drugs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ce2b_reaction`
--

DROP TABLE IF EXISTS `ce2b_reaction`;

CREATE TABLE `ce2b_reaction` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ce2b_id` int DEFAULT NULL,
  `reaction_name` text,
  `meddra_code` text,
  `start_date` text,
  `source_country` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `criteria_death_null` varchar(255) DEFAULT NULL,
  `criteria_death_value` varchar(255) DEFAULT NULL,
  `life_hreatening_null` varchar(255) DEFAULT NULL,
  `life_hreatening_value` varchar(255) DEFAULT NULL,
  `prolonged_hospitalisation_null` varchar(255) DEFAULT NULL,
  `prolonged_hospitalisation_value` varchar(255) DEFAULT NULL,
  `incapacitating_null` varchar(255) DEFAULT NULL,
  `incapacitating_value` varchar(255) DEFAULT NULL,
  `birth_defect_null` varchar(255) DEFAULT NULL,
  `birth_defect_value` varchar(255) DEFAULT NULL,
  `other_medical_null` varchar(255) DEFAULT NULL,
  `other_medical_value` varchar(255) DEFAULT NULL,
  `reaction_outcome_null` varchar(255) DEFAULT NULL,
  `reaction_outcome_value` varchar(255) DEFAULT NULL,
  `medical_confirmation_null` varchar(255) DEFAULT NULL,
  `medical_confirmation_value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `ce2b_reaction`
--

LOCK TABLES `ce2b_reaction` WRITE;
/*!40000 ALTER TABLE `ce2b_reaction` DISABLE KEYS */;
/*!40000 ALTER TABLE `ce2b_reaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ce2bs`
--

DROP TABLE IF EXISTS `ce2bs`;

CREATE TABLE `ce2bs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `ce2b_id` int DEFAULT NULL,
  `vigiflow_message` varchar(255) DEFAULT NULL,
  `vigiflow_date` varchar(255) DEFAULT NULL,
  `report_type` varchar(255) DEFAULT NULL,
  `county_id` int DEFAULT NULL,
  `sub_county_id` int DEFAULT NULL,
  `designation_id` int DEFAULT NULL,
  `reference_no` varchar(55) DEFAULT NULL,
  `messageid` varchar(255) DEFAULT NULL,
  `assigned_to` int DEFAULT NULL,
  `assigned_by` int DEFAULT NULL,
  `company_code` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `comment` mediumtext,
  `reporter_email` varchar(255) DEFAULT NULL,
  `e2b_content` longtext,
  `e2b_type` varchar(255) DEFAULT NULL,
  `e2b_file` varchar(255) DEFAULT NULL,
  `dir` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `assigned_date` datetime DEFAULT NULL,
  `signature` tinyint(1) DEFAULT NULL,
  `submitted` int DEFAULT '0',
  `submitted_date` datetime DEFAULT NULL,
  `reporter_name` varchar(255) DEFAULT NULL,
  `reporter_designation` int DEFAULT NULL,
  `reporter_phone` varchar(100) DEFAULT NULL,
  `reporter_date` date DEFAULT NULL,
  `person_submitting` varchar(50) DEFAULT NULL,
  `reporter_name_diff` varchar(255) DEFAULT NULL,
  `reporter_designation_diff` int DEFAULT NULL,
  `reporter_email_diff` varchar(255) DEFAULT NULL,
  `reporter_phone_diff` varchar(255) DEFAULT NULL,
  `reporter_date_diff` date DEFAULT NULL,
  `resubmit` varchar(15) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'Submitted',
  `active` tinyint DEFAULT '1',
  `copied` tinyint DEFAULT '0',
  `archived` tinyint DEFAULT '0',
  `archived_date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `action_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` tinyint(1) DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  `report_reference` varchar(255) DEFAULT NULL,
  `creation_time` varchar(255) DEFAULT NULL,
  `sender_reference` varchar(255) DEFAULT NULL,
  `receiver_id` varchar(255) DEFAULT NULL,
  `sender_id` varchar(255) DEFAULT NULL,
  `sender_unique_identifier` varchar(255) DEFAULT NULL,
  `worldwide_identifier` varchar(255) DEFAULT NULL,
  `case_narrative` longtext,
  `date_first_received` varchar(255) DEFAULT NULL,
  `date_most_recent_info` varchar(255) DEFAULT NULL,
  `serious` tinyint(1) DEFAULT '0',
  `patient_name` varchar(255) DEFAULT NULL,
  `patient_sex` varchar(255) DEFAULT NULL,
  `patient_dob` varchar(25) DEFAULT NULL,
  `patient_number` varchar(255) DEFAULT NULL,
  `past_medical` longtext,
  `sender_address` varchar(255) DEFAULT NULL,
  `sender_city` varchar(255) DEFAULT NULL,
  `sender_state` varchar(255) DEFAULT NULL,
  `sender_department` varchar(255) DEFAULT NULL,
  `sender_organization` varchar(255) DEFAULT NULL,
  `results_in_detah` tinyint(1) DEFAULT '0',
  `life_threatening` tinyint(1) DEFAULT '0',
  `prolonged_hospitalization` tinyint(1) DEFAULT '0',
  `incapacitating` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `ce2bs`
--

LOCK TABLES `ce2bs` WRITE;
/*!40000 ALTER TABLE `ce2bs` DISABLE KEYS */;
/*!40000 ALTER TABLE `ce2bs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `foreign_key` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `model_id` int DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `sender` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `content` longtext,
  `review` text,
  `deleted` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `concomittant_drugs`
--

DROP TABLE IF EXISTS `concomittant_drugs`;

CREATE TABLE `concomittant_drugs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sae_id` int DEFAULT NULL,
  `generic_name` varchar(100) DEFAULT NULL,
  `dose` varchar(100) DEFAULT NULL,
  `route_id` int DEFAULT NULL,
  `indication` varchar(255) DEFAULT NULL,
  `date_from` date DEFAULT NULL,
  `date_to` date DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `concomittant_drugs`
--

LOCK TABLES `concomittant_drugs` WRITE;
/*!40000 ALTER TABLE `concomittant_drugs` DISABLE KEYS */;
/*!40000 ALTER TABLE `concomittant_drugs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `counties`
--

DROP TABLE IF EXISTS `counties`;

CREATE TABLE `counties` (
  `id` int NOT NULL AUTO_INCREMENT,
  `county_name` varchar(50) DEFAULT NULL,
  `org_unit` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `counties`
--

LOCK TABLES `counties` WRITE;
/*!40000 ALTER TABLE `counties` DISABLE KEYS */;
/*!40000 ALTER TABLE `counties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` char(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT '',
  `name` tinytext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `name_fr` tinytext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cron_tasks`
--

DROP TABLE IF EXISTS `cron_tasks`;

CREATE TABLE `cron_tasks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `jobtype` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `title` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `data` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'task / method',
  `created` datetime NOT NULL,
  `notbefore` datetime DEFAULT NULL,
  `fetched` datetime DEFAULT NULL,
  `completed` datetime DEFAULT NULL,
  `failed` int NOT NULL DEFAULT '0',
  `failure_message` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `workerkey` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `interval` int NOT NULL DEFAULT '0' COMMENT 'in minutes',
  `status` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;


--
-- Dumping data for table `cron_tasks`
--

LOCK TABLES `cron_tasks` WRITE;
/*!40000 ALTER TABLE `cron_tasks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cron_tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `designations`
--

DROP TABLE IF EXISTS `designations`;

CREATE TABLE `designations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `category` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `designations`
--

LOCK TABLES `designations` WRITE;
/*!40000 ALTER TABLE `designations` DISABLE KEYS */;
/*!40000 ALTER TABLE `designations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `devices`
--

DROP TABLE IF EXISTS `devices`;

CREATE TABLE `devices` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `pqmp_id` int DEFAULT NULL,
  `reference_no` varchar(255) DEFAULT NULL,
  `county_id` int DEFAULT NULL,
  `designation_id` int DEFAULT NULL,
  `device_id` int DEFAULT NULL,
  `report_type` varchar(20) DEFAULT NULL,
  `report_title` varchar(255) DEFAULT NULL,
  `name_of_institution` varchar(100) DEFAULT NULL,
  `institution_code` varchar(100) DEFAULT NULL,
  `institution_address` varchar(100) DEFAULT NULL,
  `institution_contact` varchar(100) DEFAULT NULL,
  `patient_name` varchar(100) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `patient_address` varchar(255) DEFAULT NULL,
  `patient_phone` varchar(255) DEFAULT NULL,
  `patient_weight` float DEFAULT NULL,
  `patient_height` float DEFAULT NULL,
  `pregnancy_status` varchar(55) DEFAULT NULL,
  `trimester` varchar(75) DEFAULT NULL,
  `ip_no` varchar(100) DEFAULT NULL,
  `date_of_birth` varchar(20) DEFAULT NULL,
  `age_years` varchar(55) DEFAULT NULL,
  `allergy` varchar(100) DEFAULT NULL,
  `allergy_specify` varchar(255) DEFAULT NULL,
  `problem_noted` varchar(25) DEFAULT NULL,
  `brand_name` varchar(255) DEFAULT NULL,
  `serial_no` varchar(255) DEFAULT NULL,
  `common_name` varchar(255) DEFAULT NULL,
  `device_model` varchar(255) DEFAULT NULL,
  `catalogue` varchar(255) DEFAULT NULL,
  `manufacturer_name` varchar(255) DEFAULT NULL,
  `manufacturer_address` varchar(255) DEFAULT NULL,
  `manufacture_date` varchar(255) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `operator` varchar(100) DEFAULT NULL,
  `operator_specify` varchar(255) DEFAULT NULL,
  `device_usage` varchar(100) DEFAULT NULL,
  `device_duration_type` varchar(255) DEFAULT NULL,
  `device_duration` int DEFAULT NULL,
  `device_availability` varchar(25) DEFAULT NULL,
  `device_unavailability` varchar(255) DEFAULT NULL,
  `implant_date` date DEFAULT NULL,
  `explant_date` date DEFAULT NULL,
  `implant_duration_type` varchar(255) DEFAULT NULL,
  `implant_duration` int DEFAULT NULL,
  `specimen_type` varchar(25) DEFAULT NULL,
  `patients_involved` int DEFAULT NULL,
  `tests_done` int DEFAULT NULL,
  `false_positives` int DEFAULT NULL,
  `false_negatives` int DEFAULT NULL,
  `true_positives` int DEFAULT NULL,
  `true_negatives` int DEFAULT NULL,
  `date_onset_incident` date DEFAULT NULL,
  `serious` varchar(10) DEFAULT NULL,
  `serious_yes` varchar(250) DEFAULT NULL,
  `death_date` date DEFAULT NULL,
  `description_of_reaction` text,
  `remedial_action` text,
  `outcome` varchar(100) DEFAULT NULL,
  `reporter_name` varchar(100) DEFAULT NULL,
  `reporter_email` varchar(100) DEFAULT NULL,
  `reporter_phone` varchar(100) DEFAULT NULL,
  `reporter_date` date DEFAULT NULL,
  `person_submitting` varchar(55) DEFAULT NULL,
  `reporter_name_diff` varchar(255) DEFAULT NULL,
  `reporter_designation_diff` int DEFAULT NULL,
  `reporter_email_diff` varchar(255) DEFAULT NULL,
  `reporter_phone_diff` varchar(255) DEFAULT NULL,
  `reporter_date_diff` date DEFAULT NULL,
  `assigned_to` int DEFAULT NULL,
  `assigned_by` int DEFAULT NULL,
  `assigned_date` datetime DEFAULT NULL,
  `submitted` tinyint DEFAULT '0',
  `submitted_date` datetime DEFAULT NULL,
  `copied` tinyint DEFAULT '0',
  `archived` tinyint DEFAULT '0',
  `archived_date` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `deleted` tinyint DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `devices`
--

LOCK TABLES `devices` WRITE;
/*!40000 ALTER TABLE `devices` DISABLE KEYS */;
/*!40000 ALTER TABLE `devices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disproportionalities`
--

DROP TABLE IF EXISTS `disproportionalities`;

CREATE TABLE `disproportionalities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `drug_name` varchar(255) DEFAULT NULL,
  `reaction_name` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `disproportionalities`
--

LOCK TABLES `disproportionalities` WRITE;
/*!40000 ALTER TABLE `disproportionalities` DISABLE KEYS */;
/*!40000 ALTER TABLE `disproportionalities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doses`
--

DROP TABLE IF EXISTS `doses`;

CREATE TABLE `doses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `value` varchar(100) DEFAULT NULL,
  `icsr_code` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `doses`
--

LOCK TABLES `doses` WRITE;
/*!40000 ALTER TABLE `doses` DISABLE KEYS */;
/*!40000 ALTER TABLE `doses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drug_dictionaries`
--

DROP TABLE IF EXISTS `drug_dictionaries`;

CREATE TABLE `drug_dictionaries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `MedId` varchar(35) DEFAULT NULL,
  `drug_record_number` varchar(6) DEFAULT NULL,
  `sequence_no_1` varchar(2) DEFAULT NULL,
  `sequence_no_2` varchar(3) DEFAULT NULL,
  `sequence_no_3` varchar(10) DEFAULT NULL,
  `sequence_no_4` varchar(10) DEFAULT NULL,
  `trade_name` varchar(255) DEFAULT NULL,
  `generic` char(1) DEFAULT NULL,
  `drug_name` varchar(455) DEFAULT NULL,
  `health_program` varchar(255) DEFAULT NULL,
  `name_specifier` varchar(30) DEFAULT NULL,
  `market_authorization_number` varchar(30) DEFAULT NULL,
  `market_authorization_date` varchar(8) DEFAULT NULL,
  `market_authorization_withdrawal_date` varchar(8) DEFAULT NULL,
  `country` varchar(10) DEFAULT NULL,
  `company` varchar(10) DEFAULT NULL,
  `marketing_authorization_holder` varchar(10) DEFAULT NULL,
  `source_code` varchar(10) DEFAULT NULL,
  `source_country` varchar(10) DEFAULT NULL,
  `source_year` varchar(3) DEFAULT NULL,
  `product_type` varchar(10) DEFAULT NULL,
  `product_group` varchar(10) DEFAULT NULL,
  `create_date` varchar(8) DEFAULT NULL,
  `date_changed` varchar(8) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `drug_dictionaries`
--

LOCK TABLES `drug_dictionaries` WRITE;
/*!40000 ALTER TABLE `drug_dictionaries` DISABLE KEYS */;
/*!40000 ALTER TABLE `drug_dictionaries` ENABLE KEYS */;
UNLOCK TABLES;
 

--
-- Table structure for table `drugs`
--

DROP TABLE IF EXISTS `drugs`;

CREATE TABLE `drugs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) CHARACTER SET utf8mb4  DEFAULT NULL,
  `inn_name` varchar(255) CHARACTER SET utf8mb4  DEFAULT NULL,
  `manufacturer` varchar(255) CHARACTER SET utf8mb4  DEFAULT NULL,
  `local_trade_rep` varchar(255) DEFAULT NULL,
  `batch_number` varchar(255) DEFAULT NULL,
  `registration_status` varchar(255) DEFAULT NULL,
  `retention_status` varchar(255) DEFAULT NULL,
  `donation` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `drugs`
--

LOCK TABLES `drugs` WRITE;
/*!40000 ALTER TABLE `drugs` DISABLE KEYS */;
/*!40000 ALTER TABLE `drugs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facility_codes`
--

DROP TABLE IF EXISTS `facility_codes`;

CREATE TABLE `facility_codes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `facility_code` varchar(17) DEFAULT NULL,
  `facility_name` varchar(250) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `county` varchar(50) DEFAULT NULL,
  `sub_county` varchar(255) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `division` varchar(50) DEFAULT NULL,
  `ward` varchar(255) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `owner` varchar(100) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `sub_location` varchar(250) DEFAULT NULL,
  `description_of_location` tinytext,
  `constituency` varchar(250) DEFAULT NULL,
  `nearest_town` varchar(250) DEFAULT NULL,
  `beds` varchar(50) DEFAULT NULL,
  `cots` varchar(50) DEFAULT NULL,
  `keph_level` varchar(255) DEFAULT NULL,
  `official_landline` varchar(20) DEFAULT NULL,
  `official_fax` varchar(20) DEFAULT NULL,
  `official_mobile` varchar(20) DEFAULT NULL,
  `official_email` varchar(50) DEFAULT NULL,
  `official_address` varchar(50) DEFAULT NULL,
  `official_alternate_number` varchar(20) DEFAULT NULL,
  `town` varchar(100) DEFAULT NULL,
  `post_code` varchar(20) DEFAULT NULL,
  `in_charge` varchar(100) DEFAULT NULL,
  `job_title_of_in_charge` varchar(150) DEFAULT NULL,
  `open_24hrs` varchar(50) DEFAULT NULL,
  `open_weekends` varchar(50) DEFAULT NULL,
  `operational_status` varchar(50) DEFAULT NULL,
  `anc` varchar(10) DEFAULT NULL,
  `art` varchar(10) DEFAULT NULL,
  `beoc` varchar(10) DEFAULT NULL,
  `blood` varchar(10) DEFAULT NULL,
  `caes_sec` varchar(10) DEFAULT NULL,
  `ceoc` varchar(10) DEFAULT NULL,
  `c_imci` varchar(10) DEFAULT NULL,
  `epi` varchar(10) DEFAULT NULL,
  `fp` varchar(10) DEFAULT NULL,
  `growm` varchar(10) DEFAULT NULL,
  `hbc` varchar(10) DEFAULT NULL,
  `hct` varchar(10) DEFAULT NULL,
  `ipd` varchar(10) DEFAULT NULL,
  `opd` varchar(10) DEFAULT NULL,
  `outreach` varchar(10) DEFAULT NULL,
  `pmtct` varchar(10) DEFAULT NULL,
  `rad_xray` varchar(10) DEFAULT NULL,
  `rhtc_rhdc` varchar(10) DEFAULT NULL,
  `tb_diag` varchar(10) DEFAULT NULL,
  `tb_labs` varchar(10) DEFAULT NULL,
  `tb_treat` varchar(10) DEFAULT NULL,
  `Youth` varchar(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `facility_codes`
--

LOCK TABLES `facility_codes` WRITE;
/*!40000 ALTER TABLE `facility_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `facility_codes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedbacks`
--

DROP TABLE IF EXISTS `feedbacks`;

CREATE TABLE `feedbacks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` char(50) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `foreign_key` int DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `feedback` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `feedbacks`
--

LOCK TABLES `feedbacks` WRITE;
/*!40000 ALTER TABLE `feedbacks` DISABLE KEYS */;
/*!40000 ALTER TABLE `feedbacks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `frequencies`
--

DROP TABLE IF EXISTS `frequencies`;

CREATE TABLE `frequencies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `value` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `icsr_code` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `frequencies`
--

LOCK TABLES `frequencies` WRITE;
/*!40000 ALTER TABLE `frequencies` DISABLE KEYS */;
/*!40000 ALTER TABLE `frequencies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `help_infos`
--

DROP TABLE IF EXISTS `help_infos`;

CREATE TABLE `help_infos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `field_name` varchar(25) DEFAULT NULL,
  `field_label` varchar(255) DEFAULT NULL,
  `place_holder` varchar(140) DEFAULT NULL,
  `help_type` varchar(50) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `content` text,
  `help_text` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `help_infos`
--

LOCK TABLES `help_infos` WRITE;
/*!40000 ALTER TABLE `help_infos` DISABLE KEYS */;
/*!40000 ALTER TABLE `help_infos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imports`
--

DROP TABLE IF EXISTS `imports`;

CREATE TABLE `imports` (
  `id` int NOT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


--
-- Dumping data for table `imports`
--

LOCK TABLES `imports` WRITE;
/*!40000 ALTER TABLE `imports` DISABLE KEYS */;
/*!40000 ALTER TABLE `imports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `khis`
--

DROP TABLE IF EXISTS `khis`;

CREATE TABLE `khis` (
  `id` int NOT NULL AUTO_INCREMENT,
  `elementId` varchar(255) DEFAULT NULL,
  `elementName` varchar(255) DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `khis`
--

LOCK TABLES `khis` WRITE;
/*!40000 ALTER TABLE `khis` DISABLE KEYS */;
/*!40000 ALTER TABLE `khis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `list_of_devices`
--

DROP TABLE IF EXISTS `list_of_devices`;

CREATE TABLE `list_of_devices` (
  `id` int NOT NULL AUTO_INCREMENT,
  `device_id` int DEFAULT NULL,
  `brand_name` varchar(255) DEFAULT NULL,
  `serial_no` varchar(255) DEFAULT NULL,
  `common_name` varchar(255) DEFAULT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `manufacture_date` varchar(255) DEFAULT NULL,
  `expiry_date` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


--
-- Dumping data for table `list_of_devices`
--

LOCK TABLES `list_of_devices` WRITE;
/*!40000 ALTER TABLE `list_of_devices` DISABLE KEYS */;
/*!40000 ALTER TABLE `list_of_devices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meddras`
--

DROP TABLE IF EXISTS `meddras`;

CREATE TABLE `meddras` (
  `id` int NOT NULL,
  `llt_name` varchar(100) DEFAULT NULL,
  `pt_code` int DEFAULT NULL,
  `llt_whoart_code` varchar(10) DEFAULT NULL,
  `llt_harts_code` varchar(10) DEFAULT NULL,
  `llt_costart_sym` varchar(10) DEFAULT NULL,
  `llt_icd9_code` varchar(10) DEFAULT NULL,
  `llt_icd9cm_code` varchar(10) DEFAULT NULL,
  `llt_icd10_code` varchar(10) DEFAULT NULL,
  `llt_currency` varchar(1) DEFAULT NULL,
  `llt_jart_code` varchar(10) DEFAULT NULL,
  `COL_12` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `llt_name` (`llt_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


--
-- Dumping data for table `meddras`
--

LOCK TABLES `meddras` WRITE;
/*!40000 ALTER TABLE `meddras` DISABLE KEYS */;
/*!40000 ALTER TABLE `meddras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medication_products`
--

DROP TABLE IF EXISTS `medication_products`;

CREATE TABLE `medication_products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `medication_id` int DEFAULT NULL,
  `generic_name_i` varchar(255) DEFAULT NULL,
  `product_name_i` varchar(255) DEFAULT NULL,
  `dosage_form_i` varchar(255) DEFAULT NULL,
  `dosage_i` varchar(255) DEFAULT NULL,
  `manufacturer_i` varchar(255) DEFAULT NULL,
  `strength_i` varchar(255) DEFAULT NULL,
  `container_i` varchar(255) DEFAULT NULL,
  `generic_name_ii` varchar(255) DEFAULT NULL,
  `product_name_ii` varchar(255) DEFAULT NULL,
  `dosage_form_ii` varchar(255) DEFAULT NULL,
  `dosage_ii` varchar(255) DEFAULT NULL,
  `manufacturer_ii` varchar(255) DEFAULT NULL,
  `strength_ii` varchar(255) DEFAULT NULL,
  `container_ii` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modifed` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `medication_products`
--

LOCK TABLES `medication_products` WRITE;
/*!40000 ALTER TABLE `medication_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `medication_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medications`
--

DROP TABLE IF EXISTS `medications`;

CREATE TABLE `medications` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `pqmp_id` int DEFAULT NULL,
  `medication_id` int DEFAULT NULL,
  `reference_no` varchar(255) DEFAULT NULL,
  `adverse_reaction` varchar(255) DEFAULT NULL,
  `county_id` int DEFAULT NULL,
  `designation_id` int DEFAULT NULL,
  `date_of_event` date DEFAULT NULL,
  `time_of_event` varchar(10) DEFAULT NULL,
  `name_of_institution` varchar(100) DEFAULT NULL,
  `institution_code` varchar(100) DEFAULT NULL,
  `institution_contact` varchar(100) DEFAULT NULL,
  `patient_name` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `pregnancy_status` varchar(55) DEFAULT NULL,
  `patient_phone` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `age_years` varchar(70) DEFAULT NULL,
  `ward` varchar(255) DEFAULT NULL,
  `clinic` varchar(255) DEFAULT NULL,
  `pharmacy` varchar(255) DEFAULT NULL,
  `accident` varchar(255) DEFAULT NULL,
  `location_other` varchar(255) DEFAULT NULL,
  `description_of_error` text,
  `process_occur` varchar(255) DEFAULT NULL,
  `process_occur_specify` varchar(255) DEFAULT NULL,
  `reach_patient` varchar(25) DEFAULT NULL,
  `correct_medication` varchar(25) DEFAULT NULL,
  `direct_result` text,
  `outcome` varchar(255) DEFAULT NULL,
  `outcome_error` varchar(255) DEFAULT NULL,
  `outcome_death` varchar(255) DEFAULT NULL,
  `error_cause_inexperience` tinyint(1) DEFAULT NULL,
  `error_cause_knowledge` tinyint(1) DEFAULT NULL,
  `error_cause_distraction` tinyint(1) DEFAULT NULL,
  `error_cause_sound` tinyint(1) DEFAULT NULL,
  `error_cause_medication` tinyint(1) DEFAULT NULL,
  `error_cause_packaging` tinyint(1) DEFAULT NULL,
  `error_cause_workload` tinyint(1) DEFAULT NULL,
  `error_cause_peak` tinyint(1) DEFAULT NULL,
  `error_cause_stock` tinyint(1) DEFAULT NULL,
  `error_cause_procedure` tinyint(1) DEFAULT NULL,
  `error_cause_abbreviations` tinyint(1) DEFAULT NULL,
  `error_cause_illegible` tinyint(1) DEFAULT NULL,
  `error_cause_inaccurate` tinyint(1) DEFAULT NULL,
  `error_cause_labelling` tinyint(1) DEFAULT NULL,
  `error_cause_computer` tinyint(1) DEFAULT NULL,
  `error_cause_other` tinyint(1) DEFAULT NULL,
  `error_cause_specify` text,
  `recommendations` text,
  `reporter_name` varchar(100) DEFAULT NULL,
  `reporter_email` varchar(100) DEFAULT NULL,
  `reporter_phone` varchar(100) DEFAULT NULL,
  `report_type` varchar(25) DEFAULT NULL,
  `submitted` tinyint DEFAULT '0',
  `submitted_date` datetime DEFAULT NULL,
  `copied` tinyint DEFAULT '0',
  `archived` tinyint DEFAULT '0',
  `archived_date` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `deleted` tinyint DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `reporter_date` date DEFAULT NULL,
  `person_submitting` varchar(55) DEFAULT NULL,
  `reporter_name_diff` varchar(255) DEFAULT NULL,
  `reporter_designation_diff` int DEFAULT NULL,
  `reporter_email_diff` varchar(255) DEFAULT NULL,
  `reporter_phone_diff` varchar(255) DEFAULT NULL,
  `reporter_date_diff` date DEFAULT NULL,
  `assigned_to` int DEFAULT NULL,
  `assigned_by` int DEFAULT NULL,
  `assigned_date` datetime DEFAULT NULL,
  `vigiflow_message` text,
  `vigiflow_ref` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `medications`
--

LOCK TABLES `medications` WRITE;
/*!40000 ALTER TABLE `medications` DISABLE KEYS */;
/*!40000 ALTER TABLE `medications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` char(50) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `content` text,
  `sms` varchar(355) DEFAULT NULL,
  `type` char(30) DEFAULT NULL,
  `style` varchar(250) DEFAULT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages_delete`
--

DROP TABLE IF EXISTS `messages_delete`;

CREATE TABLE `messages_delete` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` char(50) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `content` text,
  `type` char(30) DEFAULT NULL,
  `style` varchar(250) DEFAULT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


--
-- Dumping data for table `messages_delete`
--

LOCK TABLES `messages_delete` WRITE;
/*!40000 ALTER TABLE `messages_delete` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages_delete` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;

CREATE TABLE `notifications` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `type` char(70) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `system_message` text,
  `user_message` text,
  `deleted` tinyint(1) DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `padr_list_of_medicines`
--

DROP TABLE IF EXISTS `padr_list_of_medicines`;

CREATE TABLE `padr_list_of_medicines` (
  `id` int NOT NULL AUTO_INCREMENT,
  `padr_id` int DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `medicine_source` varchar(255) DEFAULT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `expiry_date` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modifed` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `padr_list_of_medicines`
--

LOCK TABLES `padr_list_of_medicines` WRITE;
/*!40000 ALTER TABLE `padr_list_of_medicines` DISABLE KEYS */;
/*!40000 ALTER TABLE `padr_list_of_medicines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `padrs`
--

DROP TABLE IF EXISTS `padrs`;

CREATE TABLE `padrs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `padr_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `county_id` int DEFAULT NULL,
  `sub_county_id` int DEFAULT NULL,
  `designation_id` int DEFAULT NULL,
  `reference_no` varchar(55) DEFAULT NULL,
  `token` varchar(200) DEFAULT NULL,
  `relation` varchar(55) DEFAULT NULL,
  `vigiflow_ref` varchar(255) DEFAULT NULL,
  `vigiflow_message` text,
  `vigiflow_date` varchar(255) DEFAULT NULL,
  `report_title` varchar(100) DEFAULT NULL,
  `report_type` varchar(20) DEFAULT NULL,
  `report_sadr` varchar(55) DEFAULT NULL,
  `sadr_vomiting` tinyint(1) DEFAULT NULL,
  `sadr_dizziness` tinyint(1) DEFAULT NULL,
  `sadr_headache` tinyint(1) DEFAULT NULL,
  `sadr_joints` tinyint(1) DEFAULT NULL,
  `sadr_rash` tinyint(1) DEFAULT NULL,
  `sadr_mouth` tinyint(1) DEFAULT NULL,
  `sadr_stomach` tinyint(1) DEFAULT NULL,
  `sadr_urination` tinyint(1) DEFAULT NULL,
  `sadr_eyes` tinyint(1) DEFAULT NULL,
  `sadr_died` tinyint(1) DEFAULT NULL,
  `pqmp_label` tinyint(1) DEFAULT NULL,
  `patient_name` varchar(100) DEFAULT NULL,
  `pqmp_material` tinyint(1) DEFAULT NULL,
  `date_of_birth` varchar(20) DEFAULT NULL,
  `age_group` varchar(40) DEFAULT NULL,
  `patient_address` varchar(100) DEFAULT NULL,
  `pqmp_color` tinyint(1) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `pqmp_smell` tinyint(1) DEFAULT NULL,
  `pqmp_working` tinyint(1) DEFAULT NULL,
  `pqmp_bottle` tinyint(1) DEFAULT NULL,
  `pregnancy_status` varchar(20) DEFAULT NULL,
  `weight` varchar(10) DEFAULT NULL,
  `height` varchar(10) DEFAULT NULL,
  `diagnosis` text,
  `medical_history` text,
  `date_of_onset_of_reaction` varchar(20) DEFAULT NULL,
  `date_of_end_of_reaction` varchar(25) DEFAULT NULL,
  `description_of_reaction` text,
  `reaction_resolve` varchar(55) DEFAULT NULL,
  `reaction_reappear` varchar(55) DEFAULT NULL,
  `lab_investigation` text,
  `severity` varchar(100) DEFAULT NULL,
  `serious` varchar(255) DEFAULT NULL,
  `serious_reason` varchar(255) DEFAULT NULL,
  `action_taken` varchar(100) DEFAULT NULL,
  `outcome` varchar(100) DEFAULT NULL,
  `causality` varchar(100) DEFAULT NULL,
  `any_other_comment` text,
  `reporter_name` varchar(100) DEFAULT NULL,
  `reporter_email` varchar(100) DEFAULT NULL,
  `reporter_phone` varchar(100) DEFAULT NULL,
  `submitted` tinyint DEFAULT '0',
  `submitted_date` datetime DEFAULT NULL,
  `emails` tinyint DEFAULT '0',
  `active` tinyint(1) DEFAULT '1',
  `device` tinyint DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  `notified` tinyint DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `reporter_date` date DEFAULT NULL,
  `reporter_name_diff` varchar(255) DEFAULT NULL,
  `reporter_designation_diff` int DEFAULT NULL,
  `reporter_email_diff` varchar(255) DEFAULT NULL,
  `reporter_phone_diff` varchar(255) DEFAULT NULL,
  `reporter_date_diff` date DEFAULT NULL,
  `assigned_to` int DEFAULT NULL,
  `assigned_by` int DEFAULT NULL,
  `assigned_date` datetime DEFAULT NULL,
  `reaction_on` varchar(25) DEFAULT NULL,
  `consent` varchar(255) DEFAULT NULL,
  `copied` tinyint DEFAULT '0',
  `archived` tinyint DEFAULT '0',
  `archived_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `padrs`
--

LOCK TABLES `padrs` WRITE;
/*!40000 ALTER TABLE `padrs` DISABLE KEYS */;
/*!40000 ALTER TABLE `padrs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pints`
--

DROP TABLE IF EXISTS `pints`;

CREATE TABLE `pints` (
  `id` int NOT NULL AUTO_INCREMENT,
  `transfusion_id` int DEFAULT NULL,
  `component_type` varchar(255) DEFAULT NULL,
  `pint_no` varchar(55) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `volume_transfused` varchar(55) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `pints`
--

LOCK TABLES `pints` WRITE;
/*!40000 ALTER TABLE `pints` DISABLE KEYS */;
/*!40000 ALTER TABLE `pints` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pockets`
--

DROP TABLE IF EXISTS `pockets`;

CREATE TABLE `pockets` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `required` tinyint(1) DEFAULT '0',
  `item_number` int DEFAULT NULL,
  `type` char(10) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `pockets`
--

LOCK TABLES `pockets` WRITE;
/*!40000 ALTER TABLE `pockets` DISABLE KEYS */;
/*!40000 ALTER TABLE `pockets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pqmps`
--

DROP TABLE IF EXISTS `pqmps`;

CREATE TABLE `pqmps` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `pqmp_id` int DEFAULT NULL,
  `county_id` int DEFAULT NULL,
  `sub_county_id` int DEFAULT NULL,
  `country_id` int DEFAULT NULL,
  `designation_id` int DEFAULT NULL,
  `reference_no` varchar(55) DEFAULT NULL,
  `facility_name` varchar(100) DEFAULT NULL,
  `facility_code` varchar(100) DEFAULT NULL,
  `facility_address` varchar(100) DEFAULT NULL,
  `facility_phone` varchar(100) DEFAULT NULL,
  `brand_name` varchar(100) DEFAULT NULL,
  `generic_name` varchar(100) DEFAULT NULL,
  `batch_number` varchar(100) DEFAULT NULL,
  `manufacture_date` varchar(20) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `receipt_date` date DEFAULT NULL,
  `name_of_manufacturer` varchar(100) DEFAULT NULL,
  `country_of_origin` varchar(100) DEFAULT NULL,
  `supplier_name` varchar(100) DEFAULT NULL,
  `supplier_address` varchar(100) DEFAULT NULL,
  `product_formulation` varchar(70) DEFAULT NULL,
  `product_formulation_specify` varchar(250) DEFAULT NULL,
  `colour_change` tinyint(1) DEFAULT NULL,
  `separating` tinyint(1) DEFAULT NULL,
  `powdering` tinyint(1) DEFAULT NULL,
  `caking` tinyint(1) DEFAULT NULL,
  `moulding` tinyint(1) DEFAULT NULL,
  `odour_change` tinyint(1) DEFAULT NULL,
  `mislabeling` tinyint(1) DEFAULT NULL,
  `incomplete_pack` tinyint(1) DEFAULT NULL,
  `therapeutic_ineffectiveness` tinyint(1) DEFAULT NULL,
  `particulate_matter` tinyint(1) DEFAULT NULL,
  `complaint_other` tinyint(1) DEFAULT NULL,
  `complaint_other_specify` text,
  `complaint_description` text,
  `require_refrigeration` varchar(10) DEFAULT NULL,
  `product_at_facility` varchar(10) DEFAULT NULL,
  `returned_by_client` varchar(10) DEFAULT NULL,
  `stored_to_recommendations` varchar(10) DEFAULT NULL,
  `other_details` text,
  `comments` text,
  `reporter_name` varchar(100) DEFAULT NULL,
  `reporter_email` varchar(100) DEFAULT NULL,
  `reporter_phone` varchar(255) DEFAULT NULL,
  `contact_number` varchar(100) DEFAULT NULL,
  `adverse_reaction` varchar(255) DEFAULT NULL,
  `reaction_comments` text,
  `medication_error` varchar(255) DEFAULT NULL,
  `emails` tinyint DEFAULT '0',
  `submitted` tinyint DEFAULT '0',
  `submitted_date` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `device` tinyint DEFAULT '0',
  `copied` tinyint DEFAULT '0',
  `archived` tinyint DEFAULT '0',
  `archived_date` datetime DEFAULT NULL,
  `notified` tinyint DEFAULT '0',
  `deleted` tinyint DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `medicinal_product` tinyint(1) DEFAULT NULL,
  `blood_products` tinyint(1) DEFAULT NULL,
  `herbal_product` tinyint(1) DEFAULT NULL,
  `medical_device` tinyint(1) DEFAULT NULL,
  `cosmeceuticals` tinyint(1) DEFAULT NULL,
  `product_other` tinyint(1) DEFAULT NULL,
  `product_specify` varchar(255) DEFAULT NULL,
  `product_vaccine` tinyint(1) DEFAULT NULL,
  `packaging` tinyint(1) DEFAULT NULL,
  `labelling` tinyint(1) DEFAULT NULL,
  `sampling` tinyint(1) DEFAULT NULL,
  `mechanism` tinyint(1) DEFAULT NULL,
  `electrical` tinyint(1) DEFAULT NULL,
  `device_data` tinyint(1) DEFAULT NULL,
  `software` tinyint(1) DEFAULT NULL,
  `environmental` tinyint(1) DEFAULT NULL,
  `failure_to_calibrate` tinyint(1) DEFAULT NULL,
  `results` tinyint(1) DEFAULT NULL,
  `readings` tinyint(1) DEFAULT NULL,
  `cold_chain` text,
  `reporter_date` date DEFAULT NULL,
  `person_submitting` varchar(55) DEFAULT NULL,
  `reporter_name_diff` varchar(255) DEFAULT NULL,
  `reporter_designation_diff` int DEFAULT NULL,
  `reporter_email_diff` varchar(255) DEFAULT NULL,
  `reporter_phone_diff` varchar(255) DEFAULT NULL,
  `reporter_date_diff` date DEFAULT NULL,
  `assigned_to` int DEFAULT NULL,
  `assigned_by` int DEFAULT NULL,
  `assigned_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `pqmps`
--

LOCK TABLES `pqmps` WRITE;
/*!40000 ALTER TABLE `pqmps` DISABLE KEYS */;
/*!40000 ALTER TABLE `pqmps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `queue_phinxlog`
--

DROP TABLE IF EXISTS `queue_phinxlog`;

CREATE TABLE `queue_phinxlog` (
  `version` bigint NOT NULL,
  `migration_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


--
-- Dumping data for table `queue_phinxlog`
--

LOCK TABLES `queue_phinxlog` WRITE;
/*!40000 ALTER TABLE `queue_phinxlog` DISABLE KEYS */;
/*!40000 ALTER TABLE `queue_phinxlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `queue_processes`
--

DROP TABLE IF EXISTS `queue_processes`;

CREATE TABLE `queue_processes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pid` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `terminate` tinyint(1) NOT NULL DEFAULT '0',
  `server` varchar(90) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workerkey` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `workerkey` (`workerkey`),
  UNIQUE KEY `pid` (`pid`,`server`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


--
-- Dumping data for table `queue_processes`
--

LOCK TABLES `queue_processes` WRITE;
/*!40000 ALTER TABLE `queue_processes` DISABLE KEYS */;
/*!40000 ALTER TABLE `queue_processes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `queued_jobs`
--

DROP TABLE IF EXISTS `queued_jobs`;

CREATE TABLE `queued_jobs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `job_task` varchar(90) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci,
  `job_group` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `notbefore` datetime DEFAULT NULL,
  `fetched` datetime DEFAULT NULL,
  `completed` datetime DEFAULT NULL,
  `progress` float DEFAULT NULL,
  `failed` int NOT NULL DEFAULT '0',
  `failure_message` text COLLATE utf8mb4_unicode_ci,
  `workerkey` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int NOT NULL DEFAULT '5',
  PRIMARY KEY (`id`),
  KEY `completed` (`completed`),
  KEY `job_task` (`job_task`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


--
-- Dumping data for table `queued_jobs`
--

LOCK TABLES `queued_jobs` WRITE;
/*!40000 ALTER TABLE `queued_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `queued_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reminders`
--

DROP TABLE IF EXISTS `reminders`;

CREATE TABLE `reminders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `foreign_key` int DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `user_id` int NOT NULL,
  `reminder_type` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


--
-- Dumping data for table `reminders`
--

LOCK TABLES `reminders` WRITE;
/*!40000 ALTER TABLE `reminders` DISABLE KEYS */;
/*!40000 ALTER TABLE `reminders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;

CREATE TABLE `reviews` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `saefi_id` int DEFAULT NULL,
  `approved_by` int DEFAULT NULL,
  `comment` text,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `routes`
--

DROP TABLE IF EXISTS `routes`;

CREATE TABLE `routes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `value` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `icsr_code` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `routes`
--

LOCK TABLES `routes` WRITE;
/*!40000 ALTER TABLE `routes` DISABLE KEYS */;
/*!40000 ALTER TABLE `routes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sadr_descriptions`
--

DROP TABLE IF EXISTS `sadr_descriptions`;

CREATE TABLE `sadr_descriptions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sadr_id` int DEFAULT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `sadr_descriptions`
--

LOCK TABLES `sadr_descriptions` WRITE;
/*!40000 ALTER TABLE `sadr_descriptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sadr_descriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sadr_followups`
--

DROP TABLE IF EXISTS `sadr_followups`;

CREATE TABLE `sadr_followups` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `county_id` int DEFAULT NULL,
  `sadr_id` int DEFAULT NULL,
  `designation_id` int DEFAULT NULL,
  `description_of_reaction` text,
  `outcome` varchar(100) DEFAULT NULL,
  `reporter_email` varchar(100) DEFAULT NULL,
  `reporter_phone` varchar(100) DEFAULT NULL,
  `submitted` tinyint DEFAULT '0',
  `emails` tinyint DEFAULT '0',
  `active` tinyint(1) DEFAULT '1',
  `device` tinyint DEFAULT '0',
  `notified` tinyint DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=COMPACT;


--
-- Dumping data for table `sadr_followups`
--

LOCK TABLES `sadr_followups` WRITE;
/*!40000 ALTER TABLE `sadr_followups` DISABLE KEYS */;
/*!40000 ALTER TABLE `sadr_followups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sadr_list_of_drugs`
--

DROP TABLE IF EXISTS `sadr_list_of_drugs`;

CREATE TABLE `sadr_list_of_drugs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sadr_id` int DEFAULT NULL,
  `sadr_followup_id` int DEFAULT NULL,
  `dose_id` int DEFAULT NULL,
  `route_id` int DEFAULT NULL,
  `frequency_id` int DEFAULT NULL,
  `frequency_id_other` varchar(255) DEFAULT NULL,
  `drug_name` varchar(255) DEFAULT NULL,
  `brand_name` varchar(255) DEFAULT NULL,
  `batch_no` varchar(255) DEFAULT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `dose` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `stop_date` date DEFAULT NULL,
  `indication` varchar(100) DEFAULT NULL,
  `suspected_drug` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `sadr_list_of_drugs`
--

LOCK TABLES `sadr_list_of_drugs` WRITE;
/*!40000 ALTER TABLE `sadr_list_of_drugs` DISABLE KEYS */;
/*!40000 ALTER TABLE `sadr_list_of_drugs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sadr_list_of_medicines`
--

DROP TABLE IF EXISTS `sadr_list_of_medicines`;

CREATE TABLE `sadr_list_of_medicines` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sadr_id` int DEFAULT NULL,
  `sadr_followup_id` int DEFAULT NULL,
  `dose_id` int DEFAULT NULL,
  `route_id` int DEFAULT NULL,
  `frequency_id` int DEFAULT NULL,
  `frequency_other` varchar(255) DEFAULT NULL,
  `drug_name` varchar(100) DEFAULT NULL,
  `brand_name` varchar(100) DEFAULT NULL,
  `batch_no` varchar(255) DEFAULT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `dose` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `stop_date` date DEFAULT NULL,
  `indication` varchar(100) DEFAULT NULL,
  `suspected_drug` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `sadr_list_of_medicines`
--

LOCK TABLES `sadr_list_of_medicines` WRITE;
/*!40000 ALTER TABLE `sadr_list_of_medicines` DISABLE KEYS */;
/*!40000 ALTER TABLE `sadr_list_of_medicines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sadr_reaction`
--

DROP TABLE IF EXISTS `sadr_reaction`;

CREATE TABLE `sadr_reaction` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sadr_id` int DEFAULT NULL,
  `reaction` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `sadr_reaction`
--

LOCK TABLES `sadr_reaction` WRITE;
/*!40000 ALTER TABLE `sadr_reaction` DISABLE KEYS */;
/*!40000 ALTER TABLE `sadr_reaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sadrs`
--

DROP TABLE IF EXISTS `sadrs`;

CREATE TABLE `sadrs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sadr_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `pqmp_id` int DEFAULT NULL,
  `medication_id` int DEFAULT NULL,
  `county_id` int DEFAULT NULL,
  `sub_county_id` int DEFAULT NULL,
  `designation_id` int DEFAULT NULL,
  `reference_no` varchar(55) DEFAULT NULL,
  `vigiflow_id` varchar(50) DEFAULT NULL,
  `report_title` varchar(100) DEFAULT NULL,
  `report_type` varchar(20) DEFAULT NULL,
  `report_sadr` tinyint(1) DEFAULT NULL,
  `report_therapeutic` tinyint(1) DEFAULT NULL,
  `report_misuse` tinyint DEFAULT NULL,
  `report_off_label` tinyint DEFAULT NULL,
  `product_category` varchar(255) DEFAULT NULL,
  `medicinal_product` tinyint(1) DEFAULT NULL,
  `blood_products` tinyint(1) DEFAULT NULL,
  `herbal_product` tinyint(1) DEFAULT NULL,
  `cosmeceuticals` tinyint(1) DEFAULT NULL,
  `product_other` tinyint(1) DEFAULT NULL,
  `product_specify` varchar(255) DEFAULT NULL,
  `name_of_institution` varchar(100) DEFAULT NULL,
  `institution_code` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `patient_name` varchar(100) DEFAULT NULL,
  `ip_no` varchar(100) DEFAULT NULL,
  `date_of_birth` varchar(20) DEFAULT NULL,
  `age_group` varchar(40) DEFAULT NULL,
  `patient_address` varchar(100) DEFAULT NULL,
  `ward` varchar(100) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `known_allergy` varchar(3) DEFAULT NULL,
  `known_allergy_specify` varchar(100) DEFAULT NULL,
  `pregnant` varchar(10) DEFAULT NULL,
  `pregnancy_status` varchar(20) DEFAULT NULL,
  `weight` varchar(10) DEFAULT NULL,
  `height` varchar(10) DEFAULT NULL,
  `diagnosis` text,
  `reaction` varchar(500) DEFAULT NULL,
  `medical_history` text,
  `date_of_onset_of_reaction` varchar(20) DEFAULT NULL,
  `description_of_reaction` text,
  `reaction_resolve` varchar(55) DEFAULT NULL,
  `reaction_reappear` varchar(55) DEFAULT NULL,
  `lab_investigation` text,
  `severity` varchar(100) DEFAULT NULL,
  `serious` varchar(255) DEFAULT NULL,
  `serious_reason` varchar(255) DEFAULT NULL,
  `action_taken` varchar(100) DEFAULT NULL,
  `outcome` varchar(100) DEFAULT NULL,
  `causality` varchar(100) DEFAULT NULL,
  `any_other_comment` text,
  `reporter_name` varchar(100) DEFAULT NULL,
  `reporter_email` varchar(100) DEFAULT NULL,
  `reporter_phone` varchar(100) DEFAULT NULL,
  `submitted` tinyint DEFAULT '0',
  `emails` tinyint DEFAULT '0',
  `active` tinyint(1) DEFAULT '1',
  `device` tinyint DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  `archived` tinyint(1) DEFAULT '0',
  `archived_date` datetime DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `notified` tinyint DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `reporter_date` date DEFAULT NULL,
  `person_submitting` varchar(55) DEFAULT NULL,
  `reporter_name_diff` varchar(255) DEFAULT NULL,
  `reporter_designation_diff` int DEFAULT NULL,
  `reporter_email_diff` varchar(255) DEFAULT NULL,
  `reporter_phone_diff` varchar(255) DEFAULT NULL,
  `reporter_date_diff` date DEFAULT NULL,
  `assigned_to` int DEFAULT NULL,
  `assigned_by` int DEFAULT NULL,
  `assigned_date` datetime DEFAULT NULL,
  `vigiflow_message` text,
  `vigiflow_ref` varchar(255) DEFAULT NULL,
  `vigiflow_date` datetime DEFAULT NULL,
  `webradr_ref` varchar(255) DEFAULT NULL,
  `webradr_date` datetime DEFAULT NULL,
  `submitted_date` datetime DEFAULT NULL,
  `webradr_message` varchar(255) DEFAULT NULL,
  `copied` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `sadrs`
--

LOCK TABLES `sadrs` WRITE;
/*!40000 ALTER TABLE `sadrs` DISABLE KEYS */;
/*!40000 ALTER TABLE `sadrs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `saefis`
--

DROP TABLE IF EXISTS `saefis`;

CREATE TABLE `saefis` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `saefi_id` int DEFAULT NULL,
  `initial_id` int DEFAULT NULL,
  `messageid` varchar(55) DEFAULT NULL,
  `vigiflow_ref` varchar(255) DEFAULT NULL,
  `vigiflow_date` varchar(255) DEFAULT NULL,
  `webradr_ref` varchar(255) DEFAULT NULL,
  `webradr_date` varchar(255) DEFAULT NULL,
  `province_id` int DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `aefi_report_ref` varchar(255) DEFAULT NULL,
  `name_of_vaccination_site` varchar(255) DEFAULT NULL,
  `reference_no` varchar(50) DEFAULT NULL,
  `assigned_to` int DEFAULT NULL,
  `assigned_by` int DEFAULT NULL,
  `assigned_date` datetime DEFAULT NULL,
  `place_vaccination` varchar(101) DEFAULT NULL,
  `place_vaccination_other` varchar(250) DEFAULT NULL,
  `site_type` varchar(100) DEFAULT NULL,
  `site_type_other` varchar(100) DEFAULT NULL,
  `vaccination_in` varchar(100) DEFAULT NULL,
  `vaccination_in_other` varchar(255) DEFAULT NULL,
  `reporter_name` varchar(255) DEFAULT NULL,
  `report_date` date DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `complete_date` date DEFAULT NULL,
  `designation_id` int DEFAULT NULL,
  `telephone` varchar(40) DEFAULT NULL,
  `mobile` varchar(40) DEFAULT NULL,
  `reporter_email` varchar(100) DEFAULT NULL,
  `patient_name` varchar(200) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `patient_address` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `age_at_onset_years` int DEFAULT NULL,
  `age_at_onset_months` int DEFAULT NULL,
  `age_at_onset_days` int DEFAULT NULL,
  `age_group` varchar(255) DEFAULT NULL,
  `symptom_date` datetime DEFAULT NULL,
  `hospitalization_date` date DEFAULT NULL,
  `status_on_date` varchar(255) DEFAULT NULL,
  `died_date` datetime DEFAULT NULL,
  `autopsy_done` varchar(40) DEFAULT NULL,
  `autopsy_done_date` date DEFAULT NULL,
  `autopsy_planned` varchar(55) DEFAULT NULL,
  `autopsy_planned_date` datetime DEFAULT NULL,
  `past_history` varchar(55) DEFAULT NULL,
  `past_history_remarks` text,
  `adverse_event` varchar(100) DEFAULT NULL,
  `adverse_event_remarks` text,
  `allergy_history` varchar(100) DEFAULT NULL,
  `allergy_history_remarks` text,
  `comorbidity_disorder` varchar(255) DEFAULT NULL,
  `comorbidity_disorder_remarks` text,
  `covid_positive` varchar(255) DEFAULT NULL,
  `covid_positive_remarks` text,
  `existing_illness` varchar(100) DEFAULT NULL,
  `existing_illness_remarks` text,
  `hospitalization_history` varchar(100) DEFAULT NULL,
  `hospitalization_history_remarks` text,
  `medication_vaccination` varchar(100) DEFAULT NULL,
  `medication_vaccination_remarks` text,
  `faith_healers` varchar(100) DEFAULT NULL,
  `faith_healers_remarks` text,
  `family_history` varchar(100) DEFAULT NULL,
  `family_history_remarks` text,
  `pregnant` varchar(100) DEFAULT NULL,
  `pregnant_weeks` varchar(50) DEFAULT NULL,
  `breastfeeding` varchar(100) DEFAULT NULL,
  `infant` varchar(100) DEFAULT NULL,
  `birth_weight` int DEFAULT NULL,
  `delivery_procedure` varchar(205) DEFAULT NULL,
  `delivery_procedure_specify` text,
  `source_examination` tinyint(1) DEFAULT NULL,
  `source_documents` tinyint(1) DEFAULT NULL,
  `source_verbal` tinyint(1) DEFAULT NULL,
  `verbal_source` text,
  `source_other` tinyint(1) DEFAULT NULL,
  `source_other_specify` text,
  `examiner_name` varchar(205) DEFAULT NULL,
  `other_sources` text,
  `signs_symptoms` text,
  `person_details` varchar(255) DEFAULT NULL,
  `person_designation` varchar(205) DEFAULT NULL,
  `person_date` datetime DEFAULT NULL,
  `medical_care` text,
  `not_medical_care` text,
  `final_diagnosis` text,
  `when_vaccinated` varchar(255) DEFAULT NULL,
  `vaccine_given` varchar(255) DEFAULT NULL,
  `when_vaccinated_specify` text,
  `prescribing_error` varchar(255) DEFAULT NULL,
  `prescribing_error_specify` text,
  `vaccine_unsterile` varchar(255) DEFAULT NULL,
  `vaccine_unsterile_specify` text,
  `vaccine_condition` varchar(255) DEFAULT NULL,
  `vaccine_condition_specify` text,
  `vaccine_reconstitution` varchar(255) DEFAULT NULL,
  `vaccine_reconstitution_specify` text,
  `vaccine_handling` varchar(255) DEFAULT NULL,
  `vaccine_handling_specify` text,
  `vaccine_administered` varchar(255) DEFAULT NULL,
  `vaccine_administered_specify` text,
  `vaccinated_vial` int DEFAULT NULL,
  `vaccinated_session` int DEFAULT NULL,
  `vaccinated_locations` int DEFAULT NULL,
  `vaccinated_locations_specify` text,
  `vaccinated_cluster` varchar(255) DEFAULT NULL,
  `vaccinated_cluster_number` int DEFAULT NULL,
  `vaccinated_cluster_vial` varchar(255) DEFAULT NULL,
  `vaccinated_cluster_vial_number` int DEFAULT NULL,
  `syringes_used` varchar(255) DEFAULT NULL,
  `syringes_used_specify` varchar(255) DEFAULT NULL,
  `syringes_used_other` varchar(255) DEFAULT NULL,
  `syringes_used_findings` text,
  `injection_dose_route` varchar(255) DEFAULT NULL,
  `injection_time_mentioned` varchar(255) DEFAULT NULL,
  `injection_no_touch` varchar(255) DEFAULT NULL,
  `injection_contraindications` varchar(255) DEFAULT NULL,
  `injection_reported` varchar(255) DEFAULT NULL,
  `injection_vaccines` varchar(255) DEFAULT NULL,
  `injection_vaccines_yes` varchar(255) DEFAULT NULL,
  `injection_observations` text,
  `reconstitution_multiple` varchar(55) DEFAULT NULL,
  `reconstitution_different` varchar(55) DEFAULT NULL,
  `reconstitution_vial` varchar(55) DEFAULT NULL,
  `reconstitution_syringe` varchar(55) DEFAULT NULL,
  `reconstitution_vaccines` varchar(55) DEFAULT NULL,
  `reconstitution_observations` text,
  `cold_temperature` varchar(55) DEFAULT NULL,
  `cold_temperature_deviation` varchar(55) DEFAULT NULL,
  `cold_temperature_specify` text,
  `procedure_followed` varchar(55) DEFAULT NULL,
  `other_items` varchar(55) DEFAULT NULL,
  `partial_vaccines` varchar(55) DEFAULT NULL,
  `unusable_vaccines` varchar(55) DEFAULT NULL,
  `unusable_diluents` varchar(55) DEFAULT NULL,
  `additional_observations` text,
  `cold_transportation` varchar(55) DEFAULT NULL,
  `vaccine_carrier` varchar(55) DEFAULT NULL,
  `coolant_packs` varchar(55) DEFAULT NULL,
  `transport_findings` text,
  `similar_events` varchar(55) DEFAULT NULL,
  `similar_events_describe` text,
  `similar_events_episodes` int DEFAULT NULL,
  `affected_vaccinated` int DEFAULT NULL,
  `affected_not_vaccinated` int DEFAULT NULL,
  `affected_unknown` varchar(255) DEFAULT NULL,
  `community_comments` text,
  `relevant_findings` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `action_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `submitted` int NOT NULL DEFAULT '0',
  `resubmit` varchar(15) DEFAULT NULL,
  `submitted_date` date DEFAULT NULL,
  `report_type` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'UnSubmitted',
  `active` tinyint DEFAULT '1',
  `emails` tinyint DEFAULT '0',
  `signature` tinyint(1) DEFAULT NULL,
  `deleted` tinyint DEFAULT '0',
  `copied` tinyint DEFAULT '0',
  `archived` tinyint DEFAULT '0',
  `archived_date` datetime DEFAULT NULL,
  `reporter_phone` varchar(100) DEFAULT NULL,
  `reporter_date` date DEFAULT NULL,
  `person_submitting` varchar(55) CHARACTER SET swe7 COLLATE swe7_bin DEFAULT NULL,
  `reporter_name_diff` varchar(100) DEFAULT NULL,
  `reporter_designation_diff` varchar(100) DEFAULT NULL,
  `reporter_email_diff` varchar(100) DEFAULT NULL,
  `reporter_phone_diff` varchar(100) DEFAULT NULL,
  `reporter_date_diff` varchar(100) DEFAULT NULL,
  `patient_phone` varchar(255) DEFAULT NULL,
  `patient_street_name` varchar(255) DEFAULT NULL,
  `syringes_used_other_specify` varchar(255) DEFAULT NULL,
  `vaccinator_training` varchar(255) DEFAULT NULL,
  `description_of_reaction` varchar(255) DEFAULT NULL,
  `name_of_person_first_treated` varchar(255) DEFAULT NULL,
  `name_of_the_person_treating` varchar(255) DEFAULT NULL,
  `other_source_of_info` varchar(255) DEFAULT NULL,
  `patient_house_number` varchar(255) DEFAULT NULL,
  `time_of_first_symptom` varchar(255) DEFAULT NULL,
  `vaccine_name` varchar(255) DEFAULT NULL,
  `date_first_reported` varchar(255) DEFAULT NULL,
  `date_form_filled` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `saefis`
--

LOCK TABLES `saefis` WRITE;
/*!40000 ALTER TABLE `saefis` DISABLE KEYS */;
/*!40000 ALTER TABLE `saefis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `saes`
--

DROP TABLE IF EXISTS `saes`;

CREATE TABLE `saes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `application_id` int DEFAULT NULL,
  `sae_id` int DEFAULT NULL,
  `reference_no` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `form_type` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `patient_initials` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `country_id` int DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `age_years` int DEFAULT NULL,
  `gender` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `causality` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `enrollment_date` date DEFAULT NULL,
  `administration_date` date DEFAULT NULL,
  `latest_date` date DEFAULT NULL,
  `reaction_onset` date DEFAULT NULL,
  `reaction_end_date` date DEFAULT NULL,
  `patient_died` tinyint(1) DEFAULT '0',
  `prolonged_hospitalization` tinyint(1) DEFAULT '0',
  `incapacity` tinyint(1) DEFAULT '0',
  `life_threatening` tinyint(1) DEFAULT '0',
  `reaction_other` tinyint(1) DEFAULT '0',
  `reaction_description` text,
  `relevant_history` text,
  `manufacturer_name` varchar(255) DEFAULT NULL,
  `mfr_no` varchar(255) DEFAULT NULL,
  `manufacturer_date` date DEFAULT NULL,
  `source_study` tinyint(1) DEFAULT '0',
  `source_literature` tinyint(1) DEFAULT '0',
  `source_health_professional` tinyint(1) DEFAULT '0',
  `report_date` date DEFAULT NULL,
  `submitted_date` datetime DEFAULT NULL,
  `report_type` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT 'Initial',
  `approved` tinyint DEFAULT '0',
  `approved_by` int DEFAULT NULL,
  `email_address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `reporter_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `reporter_phone` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `reporter_email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `assigned_to` int DEFAULT NULL,
  `assigned_by` int DEFAULT NULL,
  `assigned_date` datetime DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


--
-- Dumping data for table `saes`
--

LOCK TABLES `saes` WRITE;
/*!40000 ALTER TABLE `saes` DISABLE KEYS */;
/*!40000 ALTER TABLE `saes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sites`
--

DROP TABLE IF EXISTS `sites`;

CREATE TABLE `sites` (
  `id` int NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  `content` longtext,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `sites`
--

LOCK TABLES `sites` WRITE;
/*!40000 ALTER TABLE `sites` DISABLE KEYS */;
/*!40000 ALTER TABLE `sites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_counties`
--

DROP TABLE IF EXISTS `sub_counties`;

CREATE TABLE `sub_counties` (
  `id` int NOT NULL AUTO_INCREMENT,
  `county_id` int DEFAULT NULL,
  `sub_county_name` varchar(50) DEFAULT NULL,
  `county_name` varchar(50) DEFAULT NULL,
  `Province` varchar(50) DEFAULT NULL,
  `Pop_2009` varchar(50) DEFAULT NULL,
  `RegVoters` varchar(50) DEFAULT NULL,
  `AreaSqKms` varchar(50) DEFAULT NULL,
  `CAWards` varchar(50) DEFAULT NULL,
  `MainEthnicGroup` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `sub_counties`
--

LOCK TABLES `sub_counties` WRITE;
/*!40000 ALTER TABLE `sub_counties` DISABLE KEYS */;
/*!40000 ALTER TABLE `sub_counties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suspected_drugs`
--

DROP TABLE IF EXISTS `suspected_drugs`;

CREATE TABLE `suspected_drugs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sae_id` int DEFAULT NULL,
  `generic_name` varchar(100) DEFAULT NULL,
  `dose` varchar(100) DEFAULT NULL,
  `route_id` int DEFAULT NULL,
  `indication` varchar(255) DEFAULT NULL,
  `date_from` date DEFAULT NULL,
  `date_to` date DEFAULT NULL,
  `therapy_duration` varchar(255) DEFAULT NULL,
  `reaction_abate` varchar(100) DEFAULT NULL,
  `reaction_reappear` varchar(255) DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `suspected_drugs`
--

LOCK TABLES `suspected_drugs` WRITE;
/*!40000 ALTER TABLE `suspected_drugs` DISABLE KEYS */;
/*!40000 ALTER TABLE `suspected_drugs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tmp_drugs`
--

DROP TABLE IF EXISTS `tmp_drugs`;

CREATE TABLE `tmp_drugs` (
  `ectd_product_id` int DEFAULT NULL,
  `product_trade_name` varchar(132) DEFAULT NULL,
  `product_registration_no` varchar(49) DEFAULT NULL,
  `local_foreign` varchar(7) DEFAULT NULL,
  `inn_of_api` varchar(286) DEFAULT NULL,
  `api_strength_per_dosage` varchar(271) DEFAULT NULL,
  `AL` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


--
-- Dumping data for table `tmp_drugs`
--

LOCK TABLES `tmp_drugs` WRITE;
/*!40000 ALTER TABLE `tmp_drugs` DISABLE KEYS */;
/*!40000 ALTER TABLE `tmp_drugs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transfusions`
--

DROP TABLE IF EXISTS `transfusions`;

CREATE TABLE `transfusions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `pqmp_id` int DEFAULT NULL,
  `transfusion_id` int DEFAULT NULL,
  `reference_no` varchar(255) DEFAULT NULL,
  `county_id` int DEFAULT NULL,
  `designation_id` int DEFAULT NULL,
  `form_type` varchar(25) DEFAULT NULL,
  `patient_name` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `patient_address` varchar(255) DEFAULT NULL,
  `patient_phone` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(20) DEFAULT NULL,
  `age_years` varchar(70) DEFAULT NULL,
  `diagnosis` varchar(255) DEFAULT NULL,
  `ward` varchar(255) DEFAULT NULL,
  `pre_hb` varchar(25) DEFAULT NULL,
  `transfusion_reason` varchar(255) DEFAULT NULL,
  `current_medications` text,
  `obstetric_history` varchar(255) DEFAULT NULL,
  `previous_transfusion` varchar(255) DEFAULT NULL,
  `transfusion_comment` text,
  `previous_reactions` varchar(255) DEFAULT NULL,
  `reaction_comment` text,
  `reaction_general` varchar(255) DEFAULT NULL,
  `reaction_fever` varchar(55) DEFAULT NULL,
  `reaction_chills` varchar(55) DEFAULT NULL,
  `reaction_flushing` varchar(55) DEFAULT NULL,
  `reaction_vomiting` varchar(55) DEFAULT NULL,
  `reaction_dermatological` varchar(255) DEFAULT NULL,
  `reaction_cardiac` varchar(255) DEFAULT NULL,
  `reaction_chest` varchar(55) DEFAULT NULL,
  `reaction_dyspnoea` varchar(55) DEFAULT NULL,
  `reaction_hypotension` varchar(55) DEFAULT NULL,
  `reaction_tachycardia` varchar(55) DEFAULT NULL,
  `reaction_renal` varchar(255) DEFAULT NULL,
  `reaction_anuria` varchar(55) DEFAULT NULL,
  `reaction_oliguria` varchar(55) DEFAULT NULL,
  `reaction_dark` varchar(55) DEFAULT NULL,
  `reaction_haematological` varchar(255) DEFAULT NULL,
  `reaction_other` text,
  `vital_start_bp` varchar(55) DEFAULT NULL,
  `vital_start_t` varchar(55) DEFAULT NULL,
  `vital_start_p` varchar(55) DEFAULT NULL,
  `vital_start_r` varchar(55) DEFAULT NULL,
  `vital_during_bp` varchar(55) DEFAULT NULL,
  `vital_during_t` varchar(55) DEFAULT NULL,
  `vital_during_p` varchar(55) DEFAULT NULL,
  `vital_during_r` varchar(55) DEFAULT NULL,
  `vital_stop_bp` varchar(55) DEFAULT NULL,
  `vital_stop_t` varchar(55) DEFAULT NULL,
  `vital_stop_p` varchar(55) DEFAULT NULL,
  `vital_stop_r` varchar(55) DEFAULT NULL,
  `nurse_name` varchar(255) DEFAULT NULL,
  `lab_hemolysis` varchar(100) DEFAULT NULL,
  `lab_hemolysis_present` varchar(55) DEFAULT NULL,
  `recipient_blood` varchar(25) DEFAULT NULL,
  `hae_wbc` varchar(255) DEFAULT NULL,
  `hae_hb` varchar(255) DEFAULT NULL,
  `hae_rbc` varchar(255) DEFAULT NULL,
  `hae_hct` varchar(255) DEFAULT NULL,
  `hae_mcv` varchar(255) DEFAULT NULL,
  `hae_mch` varchar(255) DEFAULT NULL,
  `hae_mchc` varchar(255) DEFAULT NULL,
  `hae_plt` varchar(255) DEFAULT NULL,
  `film_rbc` varchar(255) DEFAULT NULL,
  `film_wbc` varchar(255) DEFAULT NULL,
  `film_plt` varchar(255) DEFAULT NULL,
  `donor_hemolysis` varchar(255) DEFAULT NULL,
  `donor_age` varchar(55) DEFAULT NULL,
  `culture_donor_pack` text,
  `culture_recipient_blood` text,
  `compatible_saline_rt` varchar(55) DEFAULT NULL,
  `compatible_saline_ii` varchar(55) DEFAULT NULL,
  `compatible_ahg` varchar(55) DEFAULT NULL,
  `compatible_albumin` varchar(55) DEFAULT NULL,
  `negative_result` text,
  `anti_a` varchar(255) DEFAULT NULL,
  `anti_b` varchar(255) DEFAULT NULL,
  `urinalysis` varchar(255) DEFAULT NULL,
  `evaluation` varchar(255) DEFAULT NULL,
  `adverse_reaction` varchar(255) DEFAULT NULL,
  `reporter_name` varchar(100) DEFAULT NULL,
  `reporter_email` varchar(100) DEFAULT NULL,
  `reporter_phone` varchar(100) DEFAULT NULL,
  `report_type` varchar(55) DEFAULT NULL,
  `submitted` tinyint DEFAULT '0',
  `submitted_date` datetime DEFAULT NULL,
  `copied` tinyint DEFAULT '0',
  `archived` tinyint DEFAULT '0',
  `archived_date` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `reporter_date` date DEFAULT NULL,
  `person_submitting` varchar(55) DEFAULT NULL,
  `reporter_name_diff` varchar(255) DEFAULT NULL,
  `reporter_designation_diff` int DEFAULT NULL,
  `reporter_email_diff` varchar(255) DEFAULT NULL,
  `reporter_phone_diff` varchar(255) DEFAULT NULL,
  `reporter_date_diff` date DEFAULT NULL,
  `assigned_to` int DEFAULT NULL,
  `assigned_by` int DEFAULT NULL,
  `assigned_date` datetime DEFAULT NULL,
  `clinic_venue` varchar(155) DEFAULT NULL,
  `specimens_post_transfusion` tinyint DEFAULT NULL,
  `specimens_edta_blood` tinyint DEFAULT NULL,
  `specimens_void_urine` tinyint DEFAULT NULL,
  `specimens_blood_reacted` tinyint DEFAULT NULL,
  `specimens_blood_bags` tinyint DEFAULT NULL,
  `clinic_code` varchar(55) DEFAULT NULL,
  `donor_number` varchar(55) DEFAULT NULL,
  `national_number` varchar(55) DEFAULT NULL,
  `home_phone` varchar(55) DEFAULT NULL,
  `cell_phone` varchar(55) DEFAULT NULL,
  `email_address` varchar(55) DEFAULT NULL,
  `residence` varchar(55) DEFAULT NULL,
  `nurse_date` date DEFAULT NULL,
  `low_volume` varchar(75) DEFAULT NULL,
  `venepuncture` varchar(85) DEFAULT NULL,
  `hematoma` varchar(85) DEFAULT NULL,
  `faint` varchar(55) DEFAULT NULL,
  `deleted` tinyint DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;


--
-- Dumping data for table `transfusions`
--

LOCK TABLES `transfusions` WRITE;
/*!40000 ALTER TABLE `transfusions` DISABLE KEYS */;
/*!40000 ALTER TABLE `transfusions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `designation_id` int DEFAULT NULL,
  `county_id` int DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` char(140) NOT NULL,
  `confirm_password` char(140) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` char(50) NOT NULL DEFAULT '',
  `role_id` int NOT NULL,
  `name_of_institution` varchar(100) DEFAULT NULL,
  `institution_address` varchar(100) DEFAULT NULL,
  `institution_code` varchar(100) DEFAULT NULL,
  `institution_email` varchar(255) DEFAULT NULL,
  `institution_contact` varchar(100) DEFAULT NULL,
  `ward` varchar(100) DEFAULT NULL,
  `phone_no` varchar(100) DEFAULT NULL,
  `forgot_password` tinyint DEFAULT '0',
  `initial_email` tinyint DEFAULT '0',
  `is_active` tinyint(1) DEFAULT '0',
  `is_admin` tinyint(1) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_type` varchar(55) DEFAULT NULL,
  `sponsor_email` varchar(55) DEFAULT NULL,
  `health_program` varchar(105) DEFAULT NULL,
  `active_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vaccines`
--

DROP TABLE IF EXISTS `vaccines`;

CREATE TABLE `vaccines` (
  `id` int NOT NULL AUTO_INCREMENT,
  `vaccine_name` varchar(55) DEFAULT NULL,
  `description` text,
  `health_program` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `vaccines`
--

LOCK TABLES `vaccines` WRITE;
/*!40000 ALTER TABLE `vaccines` DISABLE KEYS */;
/*!40000 ALTER TABLE `vaccines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `who_drugs`
--

DROP TABLE IF EXISTS `who_drugs`;

CREATE TABLE `who_drugs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `MedId` varchar(35) DEFAULT NULL,
  `drug_record_number` varchar(255) DEFAULT NULL,
  `sequence_no_1` varchar(2) DEFAULT NULL,
  `sequence_no_2` varchar(3) DEFAULT NULL,
  `sequence_no_3` varchar(10) DEFAULT NULL,
  `sequence_no_4` varchar(10) DEFAULT NULL,
  `generic` char(1) DEFAULT NULL,
  `drug_name` longtext,
  `name_specifier` varchar(30) DEFAULT NULL,
  `market_authorization_number` varchar(30) DEFAULT NULL,
  `market_authorization_date` varchar(8) DEFAULT NULL,
  `market_authorization_withdrawal_date` varchar(8) DEFAULT NULL,
  `country` varchar(10) DEFAULT NULL,
  `company` varchar(10) DEFAULT NULL,
  `marketing_authorization_holder` varchar(10) DEFAULT NULL,
  `source_code` varchar(10) DEFAULT NULL,
  `source_country` varchar(10) DEFAULT NULL,
  `source_year` varchar(3) DEFAULT NULL,
  `product_type` varchar(10) DEFAULT NULL,
  `product_group` varchar(10) DEFAULT NULL,
  `create_date` varchar(8) DEFAULT NULL,
  `date_changed` varchar(8) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `who_drugs`
--

LOCK TABLES `who_drugs` WRITE;
/*!40000 ALTER TABLE `who_drugs` DISABLE KEYS */;
/*!40000 ALTER TABLE `who_drugs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-08-14 14:18:43
