CREATE TABLE "setup_sec_programs" ("program_code" varchar(30) NOT NULL,"program_name" varchar(60) NOT NULL,PRIMARY KEY ("program_code") CREATE TABLE `setup_sec_programs` (
`program_code` varchar(30) NOT NULL,
`program_name` varchar(60) NOT NULL,
PRIMARY KEY (`program_code`) 
);

CREATE TABLE `setup_sec_roles` (
`coy_id` int DEFAULT NULL,
`org_id` int DEFAULT NULL,
`role_code` varchar(10) NOT NULL,
`role_name` varchar(30) NOT NULL,
PRIMARY KEY (`role_code`) 
);

CREATE TABLE `setup_sec_roleprogs` (
`coy_id` int DEFAULT NULL,
`org_id` int DEFAULT NULL,
`role_code` varchar(10) NOT NULL,
`program_code` varchar(30) NOT NULL,
`qry` varchar(1) DEFAULT NULL,
`inst` varchar(1) DEFAULT NULL,
`mod` varchar(1) DEFAULT NULL,
`authorize` varchar(1) DEFAULT NULL,
`del` varchar(1) DEFAULT NULL,
`flag_valid` varchar(1) DEFAULT NULL,
`flag_nvalid` varchar(1) DEFAULT NULL,
PRIMARY KEY (`role_code`, `program_code`) 
);

CREATE INDEX `fk2_application_roles_programs` ON `setup_sec_roleprogs` (`program_code`);

CREATE TABLE `setup_sec_users` (
`user_code` varchar(10) NOT NULL,
`user_name` varchar(60) NOT NULL,
`password` varchar(50) NOT NULL,
`nik` varchar(10) NOT NULL,
`coy_id` decimal(22) DEFAULT NULL,
`org_id` decimal(22) DEFAULT NULL,
`flag_adm` varchar(1) DEFAULT F,
`id_group` decimal(22) DEFAULT NULL,
`email_address` varchar(100) DEFAULT NULL,
`address` varchar(3000) DEFAULT NULL,
`home_phone` varchar(100) DEFAULT NULL,
`work_phone` varchar(100) DEFAULT NULL,
`cost_centre` varchar(20) DEFAULT NULL,
`grant_org_id` varchar(500) DEFAULT NULL,
`creaby` varchar(50) DEFAULT NULL,
`dtcrea` datetime DEFAULT NULL,
`modiby` varchar(50) DEFAULT NULL,
`dtmodi` datetime DEFAULT NULL,
`ipcrea` varchar(50) DEFAULT NULL,
`ipmodi` varchar(50) DEFAULT NULL,
PRIMARY KEY (`user_code`) 
);

CREATE TABLE `hist_users` (
`dtfrom` datetime DEFAULT NULL,
`dtto` datetime DEFAULT NULL,
`creaby` varchar(10) DEFAULT NULL,
`dtcrea` datetime DEFAULT NULL,
`modiby` varchar(10) DEFAULT NULL,
`dtmodi` datetime DEFAULT NULL,
`status` varchar(1) DEFAULT NULL,
`user_code` varchar(10) NOT NULL,
`user_name` varchar(60) NOT NULL,
`password` varchar(50) NOT NULL,
`nik` varchar(10) NOT NULL
);

CREATE TABLE `setup_sec_grants` (
`user_code` varchar(10) NOT NULL,
`role_code` varchar(10) NOT NULL,
PRIMARY KEY (`user_code`, `role_code`) 
);

CREATE INDEX `fk2_application_grants` ON `setup_sec_grants` (`role_code`);

CREATE TABLE `setup_mst_lookups` (
`coy_id` decimal(22) NOT NULL,
`lookup_code` varchar(60) NOT NULL,
`lookup_name` varchar(150) NOT NULL,
`lookup_desc` varchar(150) DEFAULT NULL,
`flag` varchar(1) DEFAULT NULL,
`created_by` varchar(30) NOT NULL,
`created_date` datetime NOT NULL,
`updated_by` varchar(30) DEFAULT NULL,
`updated_date` datetime DEFAULT NULL,
PRIMARY KEY (`lookup_code`) 
);

CREATE TABLE `setup_dtl_lookups` (
`coy_id` decimal(22) NOT NULL,
`org_id` decimal(22) NOT NULL,
`lookup_code` varchar(60) NOT NULL,
`lookup_dtl_code` varchar(60) NOT NULL,
`lookup_dtl_name` varchar(150) NOT NULL,
`lookup_dtl_desc` varchar(500) NOT NULL,
`flex` varchar(1) DEFAULT NULL,
`created_by` varchar(30) NOT NULL,
`created_date` datetime NOT NULL,
`updated_by` varchar(30) DEFAULT NULL,
`updated_date` datetime DEFAULT NULL,
`sub_kelompok` varchar(60) DEFAULT NULL,
`kelompok` varchar(60) DEFAULT NULL,
`laporan` varchar(60) DEFAULT NULL,
`dr_cr` varchar(2) DEFAULT NULL,
`variable_1` varchar(200) DEFAULT NULL,
`variable_2` varchar(15) DEFAULT NULL,
`variable_3` varchar(15) DEFAULT NULL,
`variable_4` varchar(15) DEFAULT NULL,
`variable_5` varchar(15) DEFAULT NULL,
`variable_6` varchar(15) DEFAULT NULL,
PRIMARY KEY (`lookup_code`, `lookup_dtl_code`) 
);

CREATE INDEX `idx_lookup_subkel` ON `setup_dtl_lookups` (`lookup_code`, `lookup_dtl_code`, `sub_kelompok`);

CREATE TABLE `setup_mst_parameters` (
`param_code` varchar(60) NOT NULL,
`param_name` varchar(150) NOT NULL,
`param_desc` varchar(150) DEFAULT NULL,
`flag` varchar(1) NOT NULL,
`value_number` decimal(30,8) DEFAULT NULL,
`value_date` datetime DEFAULT NULL,
`value_char` varchar(4000) DEFAULT NULL,
`created_by` varchar(30) NOT NULL,
`created_date` datetime NOT NULL,
`updated_by` varchar(30) DEFAULT NULL,
`updated_date` datetime DEFAULT NULL,
PRIMARY KEY (`param_code`) 
);

CREATE TABLE `setup_mst_organizations` (
`org_id` decimal(15) NOT NULL,
`org_code` varchar(30) NOT NULL,
`org_name` varchar(150) NOT NULL,
`start_date` date NOT NULL,
`end_date` date DEFAULT NULL,
`flag_coy_id` varchar(1) DEFAULT NULL,
`org_level` varchar(30) NOT NULL,
`org_parent` decimal(15) DEFAULT NULL,
`no_account` varchar(60) DEFAULT NULL,
`npwp` varchar(30) DEFAULT NULL,
`currency` varchar(15) DEFAULT NULL,
`address` varchar(150) DEFAULT NULL,
`city` varchar(30) DEFAULT NULL,
`province` varchar(30) DEFAULT NULL,
`country` varchar(30) DEFAULT NULL,
`post_code` double DEFAULT NULL,
`phone` varchar(15) DEFAULT NULL,
`contact_person` varchar(60) DEFAULT NULL,
`phone_person` varchar(15) DEFAULT NULL,
`email_person` varchar(60) DEFAULT NULL,
`created_by` varchar(30) NOT NULL,
`created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`updated_by` varchar(30) DEFAULT NULL,
`updated_date` timestamp DEFAULT NULL,
`fiscal_year` decimal(4) DEFAULT NULL,
`period_default` decimal(6) DEFAULT NULL,
`kel_akun` varchar(10) DEFAULT NULL,
`org_number` varchar(10) DEFAULT NULL,
PRIMARY KEY (`org_id`, `org_code`) 
);

CREATE UNIQUE INDEX `PK_SD_MST_ORGANIZATIONS` ON `setup_mst_organizations` (`org_id`, `org_code`);
CREATE INDEX `idx_org_parent` ON `setup_mst_organizations` (`org_id`, `org_parent`);

CREATE TABLE `hist_logins` (
`user_code` varchar(50) DEFAULT NULL,
`login_date` datetime DEFAULT NULL,
`status` varchar(2) DEFAULT NULL,
`sistem_id` decimal(22) DEFAULT NULL,
`user_prog` varchar(100) DEFAULT NULL,
`machine_name` varchar(100) DEFAULT NULL,
`ip_address` varchar(100) DEFAULT NULL
);

CREATE INDEX `ind_log_hist` ON `hist_logins` (`user_code`, `login_date`);

