<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-11-22 10:34:38 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `leadorder` ASC
 LIMIT 50
ERROR - 2021-11-22 10:34:41 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `dateadded` DESC
 LIMIT 50
ERROR - 2021-11-22 10:34:42 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `leadorder` ASC
 LIMIT 50
ERROR - 2021-11-22 10:34:43 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` DESC
 LIMIT 50
ERROR - 2021-11-22 10:34:45 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-22 10:35:30 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-22 10:35:49 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` DESC
 LIMIT 50
ERROR - 2021-11-22 10:53:57 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `leadorder` ASC
 LIMIT 50
ERROR - 2021-11-22 10:54:04 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `leadorder` ASC
 LIMIT 50
ERROR - 2021-11-22 10:54:08 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` DESC
 LIMIT 50
ERROR - 2021-11-22 10:54:09 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `dateadded` ASC
 LIMIT 50
ERROR - 2021-11-22 10:54:14 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `leadorder` ASC
 LIMIT 50
ERROR - 2021-11-22 13:15:18 --> Query error: Unknown column 'service' in 'field list' - Invalid query: INSERT INTO `tblleads` (`status`, `source`, `assigned`, `name`, `email`, `phonenumber`, `address`, `city`, `state`, `country`, `zip`, `service`, `description`, `lastcontact`, `is_public`, `dateadded`, `addedfrom`) VALUES ('1', '2', '1', 'kuuk', '', '', '', 'lçiu_', '', 0, '', 'Prevoyance', '', '2021-11-22 13:15:18', 0, '2021-11-22 13:15:18', '1')
ERROR - 2021-11-22 13:24:05 --> Query error: Unknown column 'service' in 'field list' - Invalid query: INSERT INTO `tblleads` (`status`, `source`, `assigned`, `name`, `email`, `phonenumber`, `address`, `city`, `state`, `country`, `zip`, `service`, `description`, `lastcontact`, `is_public`, `dateadded`, `addedfrom`) VALUES ('1', '2', '1', 'zaezar', '', '', '', 'arra', '', 0, '', 'Auto', '', '2021-11-22 13:24:05', 0, '2021-11-22 13:24:05', '1')
ERROR - 2021-11-22 13:24:11 --> Query error: Unknown column 'service' in 'field list' - Invalid query: INSERT INTO `tblleads` (`status`, `source`, `assigned`, `name`, `email`, `phonenumber`, `address`, `city`, `state`, `country`, `zip`, `service`, `description`, `lastcontact`, `is_public`, `dateadded`, `addedfrom`) VALUES ('1', '2', '1', 'zaezar', '', '', '', 'arra', '', 0, '', 'Auto', '', '2021-11-22 13:24:11', 0, '2021-11-22 13:24:11', '1')
ERROR - 2021-11-22 13:24:30 --> Query error: Unknown column 'service' in 'field list' - Invalid query: INSERT INTO `tblleads` (`status`, `source`, `assigned`, `name`, `email`, `phonenumber`, `address`, `city`, `state`, `country`, `zip`, `service`, `description`, `lastcontact`, `is_public`, `dateadded`, `addedfrom`) VALUES ('2', '2', '1', 'zerzr', '', '', '', 'ar', '', 0, '', 'santé', '', '2021-11-22 13:24:30', 0, '2021-11-22 13:24:30', '1')
ERROR - 2021-11-22 13:25:59 --> Severity: Warning --> Undefined array key "service" C:\xampp\htdocs\CRM\crm\application\models\Leads_model.php 162
ERROR - 2021-11-22 13:25:59 --> Query error: Unknown column 'service' in 'field list' - Invalid query: INSERT INTO `tblleads` (`status`, `source`, `assigned`, `name`, `email`, `phonenumber`, `address`, `city`, `state`, `country`, `zip`, `description`, `lastcontact`, `is_public`, `dateadded`, `addedfrom`, `service`) VALUES ('1', '2', '1', 'tezt', '', '', '', '', '', 0, '', '', '2021-11-22 13:25:59', 0, '2021-11-22 13:25:59', '1', '')
ERROR - 2021-11-22 13:26:05 --> Severity: Warning --> Undefined array key "service" C:\xampp\htdocs\CRM\crm\application\models\Leads_model.php 162
ERROR - 2021-11-22 13:26:05 --> Query error: Unknown column 'service' in 'field list' - Invalid query: INSERT INTO `tblleads` (`status`, `source`, `assigned`, `name`, `email`, `phonenumber`, `address`, `city`, `state`, `country`, `zip`, `description`, `lastcontact`, `is_public`, `dateadded`, `addedfrom`, `service`) VALUES ('1', '2', '1', 'tezt', '', '', '', '', '', 0, '', '', '2021-11-22 13:26:05', 0, '2021-11-22 13:26:05', '1', '')
ERROR - 2021-11-22 13:26:10 --> Severity: Warning --> Undefined array key "service" C:\xampp\htdocs\CRM\crm\application\models\Leads_model.php 162
ERROR - 2021-11-22 13:26:10 --> Query error: Unknown column 'service' in 'field list' - Invalid query: INSERT INTO `tblleads` (`status`, `source`, `assigned`, `name`, `email`, `phonenumber`, `address`, `city`, `state`, `country`, `zip`, `description`, `lastcontact`, `is_public`, `dateadded`, `addedfrom`, `service`) VALUES ('1', '2', '1', 'tezt', '', '', '', '', '', 0, '', '', '2021-11-22 13:26:10', 0, '2021-11-22 13:26:10', '1', '')
ERROR - 2021-11-22 13:26:15 --> Severity: Warning --> Undefined array key "service" C:\xampp\htdocs\CRM\crm\application\models\Leads_model.php 162
ERROR - 2021-11-22 13:26:15 --> Query error: Unknown column 'service' in 'field list' - Invalid query: INSERT INTO `tblleads` (`status`, `source`, `assigned`, `name`, `email`, `phonenumber`, `address`, `city`, `state`, `country`, `zip`, `description`, `lastcontact`, `is_public`, `dateadded`, `addedfrom`, `service`) VALUES ('1', '2', '1', 'tezt', '', '', '', '', '', 0, '', '', '2021-11-22 13:26:15', 0, '2021-11-22 13:26:15', '1', '')
ERROR - 2021-11-22 13:26:21 --> Severity: Warning --> Undefined array key "service" C:\xampp\htdocs\CRM\crm\application\models\Leads_model.php 162
ERROR - 2021-11-22 13:26:21 --> Query error: Unknown column 'service' in 'field list' - Invalid query: INSERT INTO `tblleads` (`status`, `source`, `assigned`, `name`, `email`, `phonenumber`, `address`, `city`, `state`, `country`, `zip`, `description`, `lastcontact`, `is_public`, `dateadded`, `addedfrom`, `service`) VALUES ('1', '2', '1', 'tezt', '', '', '', '', '', 0, '', '', '2021-11-22 13:26:21', 0, '2021-11-22 13:26:21', '1', '')
ERROR - 2021-11-22 13:26:26 --> Severity: Warning --> Undefined array key "service" C:\xampp\htdocs\CRM\crm\application\models\Leads_model.php 162
ERROR - 2021-11-22 13:26:26 --> Query error: Unknown column 'service' in 'field list' - Invalid query: INSERT INTO `tblleads` (`status`, `source`, `assigned`, `name`, `email`, `phonenumber`, `address`, `city`, `state`, `country`, `zip`, `description`, `lastcontact`, `is_public`, `dateadded`, `addedfrom`, `service`) VALUES ('1', '2', '1', 'tezt', '', '', '', '', '', 0, '', '', '2021-11-22 13:26:26', 0, '2021-11-22 13:26:26', '1', '')
ERROR - 2021-11-22 13:27:11 --> Severity: Warning --> Undefined array key "nom_service" C:\xampp\htdocs\CRM\crm\application\models\Leads_model.php 162
ERROR - 2021-11-22 13:27:11 --> Severity: Warning --> Undefined property: stdClass::$service C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 146
ERROR - 2021-11-22 13:27:12 --> Severity: Warning --> Undefined array key "nom_service" C:\xampp\htdocs\CRM\crm\application\models\Leads_model.php 162
ERROR - 2021-11-22 13:27:12 --> Severity: Warning --> Undefined property: stdClass::$service C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 146
ERROR - 2021-11-22 13:27:12 --> Severity: Warning --> Undefined array key "nom_service" C:\xampp\htdocs\CRM\crm\application\models\Leads_model.php 162
ERROR - 2021-11-22 13:27:13 --> Severity: Warning --> Undefined property: stdClass::$service C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 146
ERROR - 2021-11-22 13:27:13 --> Severity: Warning --> Undefined array key "nom_service" C:\xampp\htdocs\CRM\crm\application\models\Leads_model.php 162
ERROR - 2021-11-22 13:27:13 --> Severity: Warning --> Undefined property: stdClass::$service C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 146
ERROR - 2021-11-22 13:27:13 --> Severity: Warning --> Undefined array key "nom_service" C:\xampp\htdocs\CRM\crm\application\models\Leads_model.php 162
ERROR - 2021-11-22 13:27:13 --> Severity: Warning --> Undefined property: stdClass::$service C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 146
ERROR - 2021-11-22 13:27:13 --> Severity: Warning --> Undefined array key "nom_service" C:\xampp\htdocs\CRM\crm\application\models\Leads_model.php 162
ERROR - 2021-11-22 13:27:13 --> Severity: Warning --> Undefined property: stdClass::$service C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 146
ERROR - 2021-11-22 13:27:14 --> Severity: Warning --> Undefined array key "nom_service" C:\xampp\htdocs\CRM\crm\application\models\Leads_model.php 162
ERROR - 2021-11-22 13:27:14 --> Severity: Warning --> Undefined property: stdClass::$service C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 146
ERROR - 2021-11-22 13:27:26 --> Severity: Warning --> Undefined array key "nom_service" C:\xampp\htdocs\CRM\crm\application\models\Leads_model.php 162
ERROR - 2021-11-22 13:27:26 --> Severity: Warning --> Undefined property: stdClass::$service C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 146
ERROR - 2021-11-22 13:27:28 --> Severity: Warning --> Undefined array key "nom_service" C:\xampp\htdocs\CRM\crm\application\models\Leads_model.php 162
ERROR - 2021-11-22 13:27:28 --> Severity: Warning --> Undefined property: stdClass::$service C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 146
ERROR - 2021-11-22 13:27:28 --> Severity: Warning --> Undefined array key "nom_service" C:\xampp\htdocs\CRM\crm\application\models\Leads_model.php 162
ERROR - 2021-11-22 13:27:28 --> Severity: Warning --> Undefined property: stdClass::$service C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 146
ERROR - 2021-11-22 13:27:29 --> Severity: Warning --> Undefined array key "nom_service" C:\xampp\htdocs\CRM\crm\application\models\Leads_model.php 162
ERROR - 2021-11-22 13:27:29 --> Severity: Warning --> Undefined property: stdClass::$service C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 146
ERROR - 2021-11-22 13:27:29 --> Severity: Warning --> Undefined array key "nom_service" C:\xampp\htdocs\CRM\crm\application\models\Leads_model.php 162
ERROR - 2021-11-22 13:27:29 --> Severity: Warning --> Undefined property: stdClass::$service C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 146
ERROR - 2021-11-22 13:27:29 --> Severity: Warning --> Undefined array key "nom_service" C:\xampp\htdocs\CRM\crm\application\models\Leads_model.php 162
ERROR - 2021-11-22 13:27:29 --> Severity: Warning --> Undefined property: stdClass::$service C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 146
ERROR - 2021-11-22 13:27:30 --> Severity: Warning --> Undefined array key "nom_service" C:\xampp\htdocs\CRM\crm\application\models\Leads_model.php 162
ERROR - 2021-11-22 13:27:30 --> Severity: Warning --> Undefined property: stdClass::$service C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 146
ERROR - 2021-11-22 13:27:30 --> Severity: Warning --> Undefined array key "nom_service" C:\xampp\htdocs\CRM\crm\application\models\Leads_model.php 162
ERROR - 2021-11-22 13:27:30 --> Severity: Warning --> Undefined property: stdClass::$service C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 146
ERROR - 2021-11-22 13:27:31 --> Severity: Warning --> Undefined array key "nom_service" C:\xampp\htdocs\CRM\crm\application\models\Leads_model.php 162
ERROR - 2021-11-22 13:27:31 --> Severity: Warning --> Undefined property: stdClass::$service C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 146
ERROR - 2021-11-22 13:27:57 --> Severity: Warning --> Undefined property: stdClass::$service C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 146
ERROR - 2021-11-22 13:30:12 --> Severity: Warning --> Undefined property: stdClass::$service C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 146
ERROR - 2021-11-22 13:33:29 --> Severity: Warning --> Undefined variable $title C:\xampp\htdocs\CRM\crm\application\views\admin\leads\convert_to_customer.php 30
ERROR - 2021-11-22 13:33:29 --> Severity: Warning --> Undefined property: stdClass::$website C:\xampp\htdocs\CRM\crm\application\views\admin\leads\convert_to_customer.php 34
ERROR - 2021-11-22 13:51:31 --> Severity: Warning --> Undefined variable $stripe_tax_rates C:\xampp\htdocs\CRM\crm\application\views\admin\subscriptions\form.php 146
ERROR - 2021-11-22 13:51:31 --> Severity: Warning --> Attempt to read property "data" on null C:\xampp\htdocs\CRM\crm\application\views\admin\subscriptions\form.php 146
ERROR - 2021-11-22 13:51:31 --> Severity: Warning --> foreach() argument must be of type array|object, null given C:\xampp\htdocs\CRM\crm\application\views\admin\subscriptions\form.php 146
ERROR - 2021-11-22 13:51:31 --> Severity: Warning --> Undefined variable $stripe_tax_rates C:\xampp\htdocs\CRM\crm\application\views\admin\subscriptions\form.php 176
ERROR - 2021-11-22 13:51:31 --> Severity: Warning --> Attempt to read property "data" on null C:\xampp\htdocs\CRM\crm\application\views\admin\subscriptions\form.php 176
ERROR - 2021-11-22 13:51:31 --> Severity: Warning --> foreach() argument must be of type array|object, null given C:\xampp\htdocs\CRM\crm\application\views\admin\subscriptions\form.php 176
ERROR - 2021-11-22 13:56:31 --> Severity: Warning --> Undefined variable $stripe_tax_rates C:\xampp\htdocs\CRM\crm\application\views\admin\subscriptions\form.php 146
ERROR - 2021-11-22 13:56:31 --> Severity: Warning --> Attempt to read property "data" on null C:\xampp\htdocs\CRM\crm\application\views\admin\subscriptions\form.php 146
ERROR - 2021-11-22 13:56:31 --> Severity: Warning --> foreach() argument must be of type array|object, null given C:\xampp\htdocs\CRM\crm\application\views\admin\subscriptions\form.php 146
ERROR - 2021-11-22 13:56:31 --> Severity: Warning --> Undefined variable $stripe_tax_rates C:\xampp\htdocs\CRM\crm\application\views\admin\subscriptions\form.php 176
ERROR - 2021-11-22 13:56:31 --> Severity: Warning --> Attempt to read property "data" on null C:\xampp\htdocs\CRM\crm\application\views\admin\subscriptions\form.php 176
ERROR - 2021-11-22 13:56:31 --> Severity: Warning --> foreach() argument must be of type array|object, null given C:\xampp\htdocs\CRM\crm\application\views\admin\subscriptions\form.php 176
ERROR - 2021-11-22 14:00:15 --> Query error: Unknown column 'hourly_rate' in 'field list' - Invalid query: SELECT `hourly_rate`
FROM `tblstaff`
WHERE `staffid` = '1'
ERROR - 2021-11-22 15:11:06 --> 404 Page Not Found: admin/Crud/index
ERROR - 2021-11-22 15:11:16 --> 404 Page Not Found: admin/Crudphp/index
ERROR - 2021-11-22 14:29:09 --> Severity: error --> Exception: syntax error, unexpected token "public", expecting end of file C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 356
ERROR - 2021-11-22 14:30:54 --> Severity: Warning --> Undefined variable $title C:\xampp\htdocs\CRM\crm\application\views\admin\leads\convert_to_customer.php 30
ERROR - 2021-11-22 14:30:54 --> Severity: Warning --> Undefined property: stdClass::$website C:\xampp\htdocs\CRM\crm\application\views\admin\leads\convert_to_customer.php 34
ERROR - 2021-11-22 14:32:39 --> Severity: error --> Exception: syntax error, unexpected token ";" C:\xampp\htdocs\CRM\crm\application\views\admin\leads\convert_to_customer.php 30
ERROR - 2021-11-22 14:33:19 --> Severity: error --> Exception: syntax error, unexpected token ";" C:\xampp\htdocs\CRM\crm\application\views\admin\leads\convert_to_customer.php 27
ERROR - 2021-11-22 14:33:53 --> Severity: Warning --> Undefined variable $title C:\xampp\htdocs\CRM\crm\application\views\admin\leads\convert_to_customer.php 30
ERROR - 2021-11-22 14:33:53 --> Severity: Warning --> Undefined property: stdClass::$website C:\xampp\htdocs\CRM\crm\application\views\admin\leads\convert_to_customer.php 34
ERROR - 2021-11-22 14:38:56 --> Severity: Warning --> Undefined variable $title C:\xampp\htdocs\CRM\crm\application\views\admin\leads\convert_to_customer.php 30
ERROR - 2021-11-22 14:39:44 --> Severity: error --> Exception: syntax error, unexpected token ";" C:\xampp\htdocs\CRM\crm\application\views\admin\leads\convert_to_customer.php 30
ERROR - 2021-11-22 15:11:48 --> Severity: Warning --> Undefined property: stdClass::$website C:\xampp\htdocs\CRM\crm\application\libraries\merge_fields\Leads_merge_fields.php 223
ERROR - 2021-11-22 17:32:21 --> 404 Page Not Found: admin/%3C/index
ERROR - 2021-11-22 16:33:16 --> Severity: Warning --> Undefined variable $lead C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 281
ERROR - 2021-11-22 16:33:16 --> Severity: Warning --> Attempt to read property "website" on null C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 281
ERROR - 2021-11-22 16:33:16 --> Severity: Warning --> Undefined variable $lead C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 284
ERROR - 2021-11-22 16:33:16 --> Severity: Warning --> Attempt to read property "website" on null C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 284
ERROR - 2021-11-22 16:33:35 --> Severity: Warning --> Undefined variable $lead C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 281
ERROR - 2021-11-22 16:33:35 --> Severity: Warning --> Attempt to read property "website" on null C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 281
ERROR - 2021-11-22 16:34:17 --> Severity: Warning --> Undefined variable $lead C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 281
ERROR - 2021-11-22 16:34:17 --> Severity: Warning --> Attempt to read property "website" on null C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 281
ERROR - 2021-11-22 16:35:14 --> Severity: error --> Exception: Unclosed '{' on line 277 C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 422
ERROR - 2021-11-22 17:01:42 --> Severity: Warning --> Undefined variable $lead_value C:\xampp\htdocs\CRM\crm\application\views\admin\leads\convert_to_customer.php 30
ERROR - 2021-11-22 17:10:41 --> Severity: error --> Exception: syntax error, unexpected token "/", expecting end of file C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 279
ERROR - 2021-11-22 17:15:34 --> Severity: Warning --> Undefined variable $lead_value C:\xampp\htdocs\CRM\crm\application\views\admin\leads\convert_to_customer.php 30
ERROR - 2021-11-22 17:16:30 --> Severity: Warning --> Undefined variable $value C:\xampp\htdocs\CRM\crm\application\views\admin\leads\convert_to_customer.php 30
ERROR - 2021-11-22 17:22:01 --> Query error: Unknown column 'website' in 'field list' - Invalid query: INSERT INTO `tblleads` (`status`, `source`, `assigned`, `name`, `email`, `website`, `phonenumber`, `address`, `city`, `state`, `country`, `zip`, `description`, `lastcontact`, `is_public`, `dateadded`, `addedfrom`) VALUES ('4', '2', '1', 'fdgh', '', 'santé', '', '', '', '', 0, '', '', '2021-11-22 17:22:01', 0, '2021-11-22 17:22:01', '1')
ERROR - 2021-11-22 17:22:27 --> Query error: Unknown column 'website' in 'field list' - Invalid query: INSERT INTO `tblleads` (`status`, `source`, `assigned`, `name`, `email`, `website`, `phonenumber`, `address`, `city`, `state`, `country`, `zip`, `description`, `lastcontact`, `is_public`, `dateadded`, `addedfrom`) VALUES ('3', '1', '1', 'sfrsf', '', 'sante', '', '', '', '', 0, '', '', '2021-11-22 17:22:27', 0, '2021-11-22 17:22:27', '1')
ERROR - 2021-11-22 17:23:45 --> Severity: error --> Exception: Unmatched '}' C:\xampp\htdocs\CRM\crm\application\views\admin\leads\profile.php 277
