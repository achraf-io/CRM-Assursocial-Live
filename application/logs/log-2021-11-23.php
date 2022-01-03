<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-11-23 08:09:34 --> Severity: Warning --> Undefined variable $title C:\xampp\htdocs\CRM\crm\application\views\admin\leads\convert_to_customer.php 31
ERROR - 2021-11-23 08:28:21 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `leadorder` ASC
 LIMIT 50
ERROR - 2021-11-23 08:28:29 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `leadorder` ASC
 LIMIT 50
ERROR - 2021-11-23 09:48:17 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `leadorder` ASC
 LIMIT 50
ERROR - 2021-11-23 09:48:45 --> Severity: Compile Error --> Cannot use [] for reading C:\xampp\htdocs\CRM\crm\application\views\admin\tables\leads.php 156
ERROR - 2021-11-23 10:12:27 --> Severity: Warning --> Undefined array key 12 C:\xampp\htdocs\CRM\crm\application\helpers\datatables_helper.php 162
ERROR - 2021-11-23 10:13:49 --> Severity: Warning --> Undefined array key 12 C:\xampp\htdocs\CRM\crm\application\helpers\datatables_helper.php 162
ERROR - 2021-11-23 10:23:30 --> Severity: Warning --> Undefined property: stdClass::$website C:\xampp\htdocs\CRM\crm\application\views\admin\leads\convert_to_customer.php 35
ERROR - 2021-11-23 12:06:16 --> Severity: error --> Exception: Unmatched '}' C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 89
ERROR - 2021-11-23 12:06:41 --> Severity: error --> Exception: Unmatched '}' C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 89
ERROR - 2021-11-23 12:06:47 --> Severity: error --> Exception: Unmatched '}' C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 89
ERROR - 2021-11-23 12:07:24 --> Severity: error --> Exception: Unmatched '}' C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 89
ERROR - 2021-11-23 12:07:29 --> Severity: error --> Exception: Unmatched '}' C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 89
ERROR - 2021-11-23 12:08:05 --> Severity: error --> Exception: Unmatched '}' C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 89
ERROR - 2021-11-23 12:08:45 --> Severity: error --> Exception: syntax error, unexpected token "*", expecting end of file C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 135
ERROR - 2021-11-23 12:09:26 --> Severity: error --> Exception: syntax error, unexpected token "*", expecting end of file C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 135
ERROR - 2021-11-23 12:09:29 --> Severity: error --> Exception: syntax error, unexpected token "*", expecting end of file C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 135
ERROR - 2021-11-23 12:09:56 --> Severity: error --> Exception: syntax error, unexpected token "*", expecting end of file C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 135
ERROR - 2021-11-23 12:10:00 --> Severity: error --> Exception: syntax error, unexpected token "*", expecting end of file C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 135
ERROR - 2021-11-23 12:14:26 --> Severity: error --> Exception: Unmatched '}' C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 112
ERROR - 2021-11-23 12:18:03 --> Severity: error --> Exception: syntax error, unexpected token "*", expecting end of file C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 172
ERROR - 2021-11-23 12:18:45 --> Severity: error --> Exception: syntax error, unexpected token "*", expecting end of file C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 180
ERROR - 2021-11-23 12:22:31 --> Severity: error --> Exception: syntax error, unexpected token "*", expecting end of file C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 180
ERROR - 2021-11-23 12:23:19 --> Severity: Warning --> Undefined array key "billing_type" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1058
ERROR - 2021-11-23 12:23:19 --> Severity: Warning --> Undefined array key "billing_type" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1060
ERROR - 2021-11-23 12:23:19 --> Severity: Warning --> Attempt to read property "company" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 15
ERROR - 2021-11-23 12:23:19 --> Severity: Warning --> Attempt to read property "company" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 16
ERROR - 2021-11-23 12:23:19 --> Severity: Warning --> Attempt to read property "active" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 36
ERROR - 2021-11-23 12:23:20 --> Severity: Warning --> Attempt to read property "company" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project_overview.php 63
ERROR - 2021-11-23 12:23:20 --> Could not find the language line "hide_milestone_from_customer_help"
ERROR - 2021-11-23 12:23:20 --> Could not find the language line "hide_milestone_from_customer"
ERROR - 2021-11-23 12:25:42 --> Severity: Warning --> Undefined array key "billing_type" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1058
ERROR - 2021-11-23 12:25:42 --> Severity: Warning --> Undefined array key "billing_type" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1060
ERROR - 2021-11-23 12:25:42 --> Severity: Warning --> Attempt to read property "company" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 15
ERROR - 2021-11-23 12:25:42 --> Severity: Warning --> Attempt to read property "company" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 16
ERROR - 2021-11-23 12:25:42 --> Severity: Warning --> Attempt to read property "active" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 36
ERROR - 2021-11-23 12:25:42 --> Severity: Warning --> Attempt to read property "company" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project_overview.php 63
ERROR - 2021-11-23 12:25:42 --> Could not find the language line "hide_milestone_from_customer_help"
ERROR - 2021-11-23 12:25:42 --> Could not find the language line "hide_milestone_from_customer"
ERROR - 2021-11-23 12:28:50 --> Severity: Warning --> Attempt to read property "company" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 15
ERROR - 2021-11-23 12:28:50 --> Severity: Warning --> Attempt to read property "company" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 16
ERROR - 2021-11-23 12:28:50 --> Severity: Warning --> Attempt to read property "active" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 36
ERROR - 2021-11-23 12:28:50 --> Could not find the language line "hide_milestone_from_customer_help"
ERROR - 2021-11-23 12:28:50 --> Could not find the language line "hide_milestone_from_customer"
ERROR - 2021-11-23 14:19:50 --> Severity: error --> Exception: Unmatched '}' C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 218
ERROR - 2021-11-23 14:20:07 --> Severity: error --> Exception: Unmatched '}' C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 218
ERROR - 2021-11-23 14:21:47 --> Severity: error --> Exception: Unmatched '}' C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 177
ERROR - 2021-11-23 14:23:57 --> Severity: error --> Exception: Unmatched '}' C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 210
ERROR - 2021-11-23 14:24:12 --> Severity: error --> Exception: Unmatched '}' C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 208
ERROR - 2021-11-23 14:24:26 --> Severity: error --> Exception: Unmatched '}' C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 210
ERROR - 2021-11-23 14:26:09 --> Severity: Warning --> Undefined array key "start_date" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1045
ERROR - 2021-11-23 14:26:09 --> Severity: Warning --> Undefined array key "billing_type" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1058
ERROR - 2021-11-23 14:26:09 --> Severity: Warning --> Undefined array key "billing_type" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1060
ERROR - 2021-11-23 14:26:09 --> Query error: Column 'start_date' cannot be null - Invalid query: INSERT INTO `tblprojects` (`name`, `project_cost`, `contact_notification`, `description`, `progress_from_tasks`, `notify_contacts`, `estimated_hours`, `start_date`, `project_created`, `project_rate_per_hour`, `addedfrom`) VALUES ('santé', 0, '1', '', 0, 'a:0:{}', NULL, NULL, '2021-11-23', 0, '1')
ERROR - 2021-11-23 14:30:24 --> Severity: Warning --> Undefined array key "start_date" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1045
ERROR - 2021-11-23 14:30:24 --> Severity: Warning --> Undefined array key "billing_type" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1058
ERROR - 2021-11-23 14:30:24 --> Severity: Warning --> Undefined array key "billing_type" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1060
ERROR - 2021-11-23 14:30:24 --> Query error: Column 'start_date' cannot be null - Invalid query: INSERT INTO `tblprojects` (`name`, `project_cost`, `contact_notification`, `description`, `progress_from_tasks`, `notify_contacts`, `estimated_hours`, `start_date`, `project_created`, `project_rate_per_hour`, `addedfrom`) VALUES ('zaed', 0, '1', '', 0, 'a:0:{}', NULL, NULL, '2021-11-23', 0, '1')
ERROR - 2021-11-23 14:32:05 --> Severity: Warning --> Undefined array key "billing_type" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1058
ERROR - 2021-11-23 14:32:05 --> Severity: Warning --> Undefined array key "billing_type" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1060
ERROR - 2021-11-23 14:32:06 --> Severity: Warning --> Attempt to read property "company" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 15
ERROR - 2021-11-23 14:32:06 --> Severity: Warning --> Attempt to read property "company" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 16
ERROR - 2021-11-23 14:32:06 --> Severity: Warning --> Attempt to read property "active" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 36
ERROR - 2021-11-23 14:32:06 --> Could not find the language line "hide_milestone_from_customer_help"
ERROR - 2021-11-23 14:32:06 --> Could not find the language line "hide_milestone_from_customer"
ERROR - 2021-11-23 14:32:48 --> Severity: Warning --> Attempt to read property "company" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 15
ERROR - 2021-11-23 14:32:48 --> Severity: Warning --> Attempt to read property "company" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 16
ERROR - 2021-11-23 14:32:48 --> Severity: Warning --> Attempt to read property "active" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 36
ERROR - 2021-11-23 14:32:48 --> Could not find the language line "hide_milestone_from_customer_help"
ERROR - 2021-11-23 14:32:48 --> Could not find the language line "hide_milestone_from_customer"
ERROR - 2021-11-23 14:32:56 --> Severity: Warning --> Undefined array key "billing_type" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1058
ERROR - 2021-11-23 14:32:56 --> Severity: Warning --> Undefined array key "billing_type" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1060
ERROR - 2021-11-23 14:32:56 --> Severity: Warning --> Attempt to read property "company" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 15
ERROR - 2021-11-23 14:32:56 --> Severity: Warning --> Attempt to read property "company" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 16
ERROR - 2021-11-23 14:32:56 --> Severity: Warning --> Attempt to read property "active" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 36
ERROR - 2021-11-23 14:32:56 --> Could not find the language line "hide_milestone_from_customer_help"
ERROR - 2021-11-23 14:32:56 --> Could not find the language line "hide_milestone_from_customer"
ERROR - 2021-11-23 14:33:25 --> Severity: Warning --> Attempt to read property "company" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 15
ERROR - 2021-11-23 14:33:25 --> Severity: Warning --> Attempt to read property "company" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 16
ERROR - 2021-11-23 14:33:25 --> Severity: Warning --> Attempt to read property "active" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 36
ERROR - 2021-11-23 14:33:25 --> Could not find the language line "hide_milestone_from_customer_help"
ERROR - 2021-11-23 14:33:25 --> Could not find the language line "hide_milestone_from_customer"
ERROR - 2021-11-23 14:33:37 --> Severity: Warning --> Array to string conversion C:\xampp\htdocs\CRM\crm\system\database\DB_driver.php 1471
ERROR - 2021-11-23 14:33:37 --> Query error: Unknown column 'Array' in 'field list' - Invalid query: INSERT INTO `tblprojects` (`name`, `project_cost`, `project_members`, `contact_notification`, `description`, `progress_from_tasks`, `notify_contacts`, `addedfrom`) VALUES ('zaeedz', '', Array, '1', '', 0, 'a:0:{}', '1')
ERROR - 2021-11-23 14:38:27 --> Severity: error --> Exception: syntax error, unexpected token "/" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1143
ERROR - 2021-11-23 14:38:30 --> Severity: error --> Exception: syntax error, unexpected token "/" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1143
ERROR - 2021-11-23 14:38:31 --> Severity: error --> Exception: syntax error, unexpected token "/" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1143
ERROR - 2021-11-23 14:38:32 --> Severity: error --> Exception: syntax error, unexpected token "/" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1143
ERROR - 2021-11-23 14:38:33 --> Severity: error --> Exception: syntax error, unexpected token "/" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1143
ERROR - 2021-11-23 14:38:33 --> Severity: error --> Exception: syntax error, unexpected token "/" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1143
ERROR - 2021-11-23 14:38:34 --> Severity: error --> Exception: syntax error, unexpected token "/" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1143
ERROR - 2021-11-23 14:38:34 --> Severity: error --> Exception: syntax error, unexpected token "/" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1143
ERROR - 2021-11-23 14:38:46 --> Severity: error --> Exception: syntax error, unexpected token "/" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1143
ERROR - 2021-11-23 14:41:12 --> Severity: Warning --> Undefined array key "billing_type" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1058
ERROR - 2021-11-23 14:41:12 --> Severity: Warning --> Undefined array key "billing_type" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1060
ERROR - 2021-11-23 14:41:13 --> Severity: Warning --> Attempt to read property "company" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 15
ERROR - 2021-11-23 14:41:13 --> Severity: Warning --> Attempt to read property "company" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 16
ERROR - 2021-11-23 14:41:13 --> Severity: Warning --> Attempt to read property "active" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 36
ERROR - 2021-11-23 14:41:13 --> Could not find the language line "hide_milestone_from_customer_help"
ERROR - 2021-11-23 14:41:13 --> Could not find the language line "hide_milestone_from_customer"
ERROR - 2021-11-23 14:41:54 --> Severity: Warning --> Attempt to read property "company" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 15
ERROR - 2021-11-23 14:41:54 --> Severity: Warning --> Attempt to read property "company" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 16
ERROR - 2021-11-23 14:41:54 --> Severity: Warning --> Attempt to read property "active" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 36
ERROR - 2021-11-23 14:41:54 --> Could not find the language line "hide_milestone_from_customer_help"
ERROR - 2021-11-23 14:41:54 --> Could not find the language line "hide_milestone_from_customer"
ERROR - 2021-11-23 14:44:18 --> Severity: Warning --> Undefined variable $options C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 245
ERROR - 2021-11-23 14:44:18 --> Severity: Warning --> foreach() argument must be of type array|object, null given C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 245
ERROR - 2021-11-23 14:45:18 --> Severity: error --> Exception: Unmatched '}' C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 286
ERROR - 2021-11-23 14:45:37 --> Severity: error --> Exception: Unmatched '}' C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 359
ERROR - 2021-11-23 14:46:09 --> Severity: error --> Exception: Unmatched '}' C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 298
ERROR - 2021-11-23 14:46:45 --> Severity: error --> Exception: Unmatched '}' C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 359
ERROR - 2021-11-23 14:47:09 --> Severity: error --> Exception: Unmatched '}' C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 354
ERROR - 2021-11-23 14:47:41 --> Severity: Warning --> Undefined variable $checked C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 289
ERROR - 2021-11-23 14:47:41 --> Severity: Warning --> Undefined variable $setting C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 289
ERROR - 2021-11-23 14:47:41 --> Severity: Warning --> Undefined variable $setting C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 290
ERROR - 2021-11-23 14:47:41 --> Severity: Warning --> Undefined variable $setting C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 291
ERROR - 2021-11-23 14:48:12 --> Severity: error --> Exception: Unclosed '{' on line 291 C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 557
ERROR - 2021-11-23 14:48:42 --> Severity: error --> Exception: Unclosed '{' on line 291 C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 557
ERROR - 2021-11-23 14:48:45 --> Severity: error --> Exception: Unclosed '{' on line 291 C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 557
ERROR - 2021-11-23 14:49:18 --> Severity: error --> Exception: Unclosed '{' on line 291 C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 557
ERROR - 2021-11-23 14:49:41 --> Severity: error --> Exception: Unmatched '}' C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 286
ERROR - 2021-11-23 14:49:43 --> Severity: error --> Exception: Unmatched '}' C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 286
ERROR - 2021-11-23 14:50:10 --> Severity: Warning --> Undefined variable $options C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 245
ERROR - 2021-11-23 14:50:10 --> Severity: Warning --> foreach() argument must be of type array|object, null given C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 245
ERROR - 2021-11-23 14:50:37 --> Severity: Warning --> Undefined array key "billing_type" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1058
ERROR - 2021-11-23 14:50:37 --> Severity: Warning --> Undefined array key "billing_type" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1060
ERROR - 2021-11-23 14:50:38 --> Severity: Warning --> Attempt to read property "company" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 15
ERROR - 2021-11-23 14:50:38 --> Severity: Warning --> Attempt to read property "company" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 16
ERROR - 2021-11-23 14:50:38 --> Severity: Warning --> Attempt to read property "active" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 36
ERROR - 2021-11-23 14:50:38 --> Could not find the language line "hide_milestone_from_customer_help"
ERROR - 2021-11-23 14:50:38 --> Could not find the language line "hide_milestone_from_customer"
ERROR - 2021-11-23 14:55:12 --> Severity: Warning --> Undefined array key "billing_type" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1058
ERROR - 2021-11-23 14:55:12 --> Severity: Warning --> Undefined array key "billing_type" C:\xampp\htdocs\CRM\crm\application\models\Projects_model.php 1060
ERROR - 2021-11-23 14:55:12 --> Severity: Warning --> Attempt to read property "company" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 15
ERROR - 2021-11-23 14:55:12 --> Severity: Warning --> Attempt to read property "company" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 16
ERROR - 2021-11-23 14:55:12 --> Severity: Warning --> Attempt to read property "active" on null C:\xampp\htdocs\CRM\crm\application\views\admin\projects\view.php 36
ERROR - 2021-11-23 15:28:47 --> Severity: error --> Exception: syntax error, unexpected token "*", expecting end of file C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 186
ERROR - 2021-11-23 15:29:47 --> Severity: error --> Exception: syntax error, unexpected token "*", expecting end of file C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 186
ERROR - 2021-11-23 15:30:24 --> Severity: error --> Exception: syntax error, unexpected token "*", expecting end of file C:\xampp\htdocs\CRM\crm\application\views\admin\projects\project.php 186
ERROR - 2021-11-23 15:35:18 --> Severity: error --> Exception: Undefined constant "Equipe" C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 114
ERROR - 2021-11-23 15:36:33 --> Query error: Unknown column 'facebook' in 'field list' - Invalid query: INSERT INTO `tblstaff` (`firstname`, `lastname`, `email`, `phonenumber`, `facebook`, `default_language`, `email_signature`, `password`, `role`, `admin`, `datecreated`) VALUES ('test', 'test', 'test@test.te', '02484845', 'Equipe 1', 'french', '', '$2a$08$yAKb/L7uUUtXr67lWgetv.Qn9Ur/mhz22zljmRS/76EZwRrJmbwUK', '2', 0, '2021-11-23 15:36:33')
ERROR - 2021-11-23 15:37:53 --> Query error: Unknown column 'facebook' in 'field list' - Invalid query: INSERT INTO `tblstaff` (`firstname`, `lastname`, `email`, `phonenumber`, `facebook`, `default_language`, `email_signature`, `password`, `role`, `admin`, `datecreated`) VALUES ('test', 'test', 'test@ti', '465484', 'Equipe 1', 'french', '', '$2a$08$Gv6fws5gC6EYtO7HgtcNruxBnXTvu56e/980jl8RankUOpF7bcRu2', '2', 0, '2021-11-23 15:37:53')
ERROR - 2021-11-23 15:40:03 --> Query error: Unknown column 'facebook' in 'field list' - Invalid query: INSERT INTO `tblstaff` (`firstname`, `lastname`, `email`, `phonenumber`, `facebook`, `default_language`, `email_signature`, `password`, `role`, `admin`, `datecreated`) VALUES ('test', 'test', 'test@test.ti', '654564564', 'equipe 1', 'french', '', '$2a$08$lCbTmoBYHY3tDnks/0E.5ehUarGg4TJnSVYKe74NUd.9.F6.e7kmu', '2', 0, '2021-11-23 15:40:03')
ERROR - 2021-11-23 15:42:35 --> Query error: Unknown column 'facebook' in 'field list' - Invalid query: INSERT INTO `tblstaff` (`firstname`, `lastname`, `email`, `phonenumber`, `facebook`, `default_language`, `email_signature`, `password`, `role`, `admin`, `datecreated`) VALUES ('rz', 'rz\'e', 'rz\'e@rkj.hy', '8845', 'equipe 1', '', '', '$2a$08$.5kwJ1gTg2xEynaSU4YFweFrXQSMHDVcVwi0bFZ6OjXumyn0kUUdu', '2', 0, '2021-11-23 15:42:35')
ERROR - 2021-11-23 15:47:01 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-23 15:50:17 --> Query error: Unknown column 'linkedin' in 'field list' - Invalid query: INSERT INTO `tblstaff` (`firstname`, `lastname`, `email`, `phonenumber`, `linkedin`, `default_language`, `email_signature`, `password`, `role`, `admin`, `datecreated`) VALUES ('zadza', 'zadza', 'dza@kzlda', '564654', 'equipe 1 ', 'french', '', '$2a$08$Zad4ubAn5dB3uryUuaI3YOhlhymfHbek8..8uHOAxShCVsf7hLI4i', '2', 0, '2021-11-23 15:50:17')
ERROR - 2021-11-23 15:58:46 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-23 15:59:41 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-23 16:03:04 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-23 16:03:34 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-23 16:03:47 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-23 16:06:19 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-23 16:07:51 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-23 16:10:51 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-23 16:11:20 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-23 16:11:32 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-23 16:14:09 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-23 16:49:16 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `leadorder` ASC
 LIMIT 50
ERROR - 2021-11-23 16:49:49 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `leadorder` ASC
 LIMIT 50
ERROR - 2021-11-23 16:55:52 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `leadorder` ASC
 LIMIT 50
ERROR - 2021-11-23 16:56:50 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `leadorder` ASC
 LIMIT 50
ERROR - 2021-11-23 17:25:37 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `leadorder` ASC
 LIMIT 50
ERROR - 2021-11-23 17:31:21 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `leadorder` ASC
 LIMIT 50
ERROR - 2021-11-23 17:32:21 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-23 17:37:46 --> Severity: Warning --> Undefined property: stdClass::$website C:\xampp\htdocs\CRM\crm\application\libraries\merge_fields\Leads_merge_fields.php 223
ERROR - 2021-11-23 17:38:03 --> Severity: Warning --> Undefined property: stdClass::$website C:\xampp\htdocs\CRM\crm\application\libraries\merge_fields\Leads_merge_fields.php 223
ERROR - 2021-11-23 17:38:03 --> Severity: Warning --> Undefined property: stdClass::$website C:\xampp\htdocs\CRM\crm\application\libraries\merge_fields\Leads_merge_fields.php 223
ERROR - 2021-11-23 17:38:03 --> Severity: Warning --> Undefined property: stdClass::$website C:\xampp\htdocs\CRM\crm\application\libraries\merge_fields\Leads_merge_fields.php 223
ERROR - 2021-11-23 17:38:03 --> Severity: Warning --> Undefined property: stdClass::$website C:\xampp\htdocs\CRM\crm\application\libraries\merge_fields\Leads_merge_fields.php 223
ERROR - 2021-11-23 18:06:12 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
