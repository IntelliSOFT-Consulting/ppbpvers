-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 05, 2023 at 08:40 AM
-- Server version: 5.7.41-0ubuntu0.18.04.1
-- PHP Version: 5.6.40-63+ubuntu18.04.1+deb.sury.org+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pvers`
--

-- --------------------------------------------------------

--
-- Table structure for table `saefis`
--

CREATE TABLE `saefis` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `saefi_id` int(11) DEFAULT NULL,
  `initial_id` int(11) DEFAULT NULL,
  `messageid` varchar(55) DEFAULT NULL,
  `vigiflow_ref` varchar(255) DEFAULT NULL,
  `vigiflow_date` varchar(255) DEFAULT NULL,
  `webradr_ref` varchar(255) DEFAULT NULL,
  `webradr_date` varchar(255) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `aefi_report_ref` varchar(255) DEFAULT NULL,
  `name_of_vaccination_site` varchar(255) DEFAULT NULL,
  `reference_no` varchar(50) DEFAULT NULL,
  `assigned_to` int(11) DEFAULT NULL,
  `assigned_by` int(11) DEFAULT NULL,
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
  `designation_id` int(11) DEFAULT NULL,
  `telephone` varchar(40) DEFAULT NULL,
  `mobile` varchar(40) DEFAULT NULL,
  `reporter_email` varchar(100) DEFAULT NULL,
  `patient_name` varchar(200) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `patient_address` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `age_at_onset_years` int(11) DEFAULT NULL,
  `age_at_onset_months` int(11) DEFAULT NULL,
  `age_at_onset_days` int(11) DEFAULT NULL,
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
  `birth_weight` int(10) DEFAULT NULL,
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
  `vaccinated_vial` int(11) DEFAULT NULL,
  `vaccinated_session` int(11) DEFAULT NULL,
  `vaccinated_locations` int(11) DEFAULT NULL,
  `vaccinated_locations_specify` text,
  `vaccinated_cluster` varchar(255) DEFAULT NULL,
  `vaccinated_cluster_number` int(11) DEFAULT NULL,
  `vaccinated_cluster_vial` varchar(255) DEFAULT NULL,
  `vaccinated_cluster_vial_number` int(11) DEFAULT NULL,
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
  `similar_events_episodes` int(11) DEFAULT NULL,
  `affected_vaccinated` int(11) DEFAULT NULL,
  `affected_not_vaccinated` int(11) DEFAULT NULL,
  `affected_unknown` varchar(255) DEFAULT NULL,
  `community_comments` text,
  `relevant_findings` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `action_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `submitted` int(2) NOT NULL DEFAULT '0',
  `resubmit` varchar(15) DEFAULT NULL,
  `submitted_date` date DEFAULT NULL,
  `report_type` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'UnSubmitted',
  `active` tinyint(2) DEFAULT '1',
  `emails` tinyint(2) DEFAULT '0',
  `signature` tinyint(1) DEFAULT NULL,
  `deleted` tinyint(4) DEFAULT '0',
  `copied` tinyint(4) DEFAULT '0',
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
  `date_form_filled` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saefis`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `saefis`
--
ALTER TABLE `saefis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

-- 
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
