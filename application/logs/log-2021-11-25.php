<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-11-25 09:08:53 --> Could not find the language line "Equipe"
ERROR - 2021-11-25 09:11:04 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-25 09:11:17 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-25 09:11:28 --> Could not find the language line "Equipe"
ERROR - 2021-11-25 09:11:43 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-25 09:20:15 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-25 09:22:45 --> Could not find the language line "Equipe"
ERROR - 2021-11-25 09:23:32 --> Severity: Warning --> Undefined array key 6 C:\xampp\htdocs\CRM\crm\application\helpers\datatables_helper.php 162
ERROR - 2021-11-25 09:23:52 --> Severity: Warning --> Undefined array key "facebook" C:\xampp\htdocs\CRM\crm\application\views\admin\tables\staff.php 79
ERROR - 2021-11-25 09:23:52 --> Severity: Warning --> Undefined array key "facebook" C:\xampp\htdocs\CRM\crm\application\views\admin\tables\staff.php 79
ERROR - 2021-11-25 09:23:52 --> Severity: Warning --> Undefined array key "facebook" C:\xampp\htdocs\CRM\crm\application\views\admin\tables\staff.php 79
ERROR - 2021-11-25 09:23:52 --> Severity: Warning --> Undefined array key "facebook" C:\xampp\htdocs\CRM\crm\application\views\admin\tables\staff.php 79
ERROR - 2021-11-25 09:23:52 --> Severity: Warning --> Undefined array key "facebook" C:\xampp\htdocs\CRM\crm\application\views\admin\tables\staff.php 79
ERROR - 2021-11-25 09:23:52 --> Severity: Warning --> Undefined array key "facebook" C:\xampp\htdocs\CRM\crm\application\views\admin\tables\staff.php 79
ERROR - 2021-11-25 09:23:52 --> Severity: Warning --> Undefined array key "facebook" C:\xampp\htdocs\CRM\crm\application\views\admin\tables\staff.php 79
ERROR - 2021-11-25 09:23:52 --> Severity: Warning --> Undefined array key "facebook" C:\xampp\htdocs\CRM\crm\application\views\admin\tables\staff.php 79
ERROR - 2021-11-25 09:23:52 --> Severity: Warning --> Undefined array key "facebook" C:\xampp\htdocs\CRM\crm\application\views\admin\tables\staff.php 79
ERROR - 2021-11-25 09:23:52 --> Severity: Warning --> Undefined array key "facebook" C:\xampp\htdocs\CRM\crm\application\views\admin\tables\staff.php 79
ERROR - 2021-11-25 09:23:52 --> Severity: Warning --> Undefined array key "facebook" C:\xampp\htdocs\CRM\crm\application\views\admin\tables\staff.php 79
ERROR - 2021-11-25 09:23:52 --> Severity: Warning --> Undefined array key "facebook" C:\xampp\htdocs\CRM\crm\application\views\admin\tables\staff.php 79
ERROR - 2021-11-25 09:23:52 --> Severity: Warning --> Undefined array key "facebook" C:\xampp\htdocs\CRM\crm\application\views\admin\tables\staff.php 79
ERROR - 2021-11-25 09:23:52 --> Severity: Warning --> Undefined array key "facebook" C:\xampp\htdocs\CRM\crm\application\views\admin\tables\staff.php 79
ERROR - 2021-11-25 09:50:45 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-25 09:55:20 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-25 09:57:04 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-25 09:59:02 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-25 10:01:26 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-25 10:03:20 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-25 10:10:46 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-25 10:11:11 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-25 10:59:52 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-25 11:05:14 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-25 11:05:58 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-25 11:07:39 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-25 11:15:17 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-25 11:18:56 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-25 11:19:19 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-25 11:50:41 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-25 11:51:14 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-25 11:52:15 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-25 11:53:39 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-25 11:56:41 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-25 12:10:19 --> Could not find the language line ""
ERROR - 2021-11-25 12:12:39 --> Could not find the language line ""
ERROR - 2021-11-25 14:33:00 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 125
ERROR - 2021-11-25 14:33:00 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 133
ERROR - 2021-11-25 14:33:25 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard-ajax.php 90
ERROR - 2021-11-25 14:33:25 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard-ajax.php 98
ERROR - 2021-11-25 14:33:53 --> Could not find the language line "#"
ERROR - 2021-11-25 14:33:53 --> Could not find the language line "Status"
ERROR - 2021-11-25 14:33:53 --> Could not find the language line "Remark"
ERROR - 2021-11-25 14:33:54 --> Could not find the language line "Cancelled"
ERROR - 2021-11-25 14:33:54 --> Could not find the language line "Waiting"
ERROR - 2021-11-25 14:33:54 --> Could not find the language line "Closed"
ERROR - 2021-11-25 14:33:54 --> Could not find the language line "Completed"
ERROR - 2021-11-25 14:33:58 --> Could not find the language line "Remark"
ERROR - 2021-11-25 14:34:06 --> Could not find the language line "Remark"
ERROR - 2021-11-25 14:34:23 --> Could not find the language line "#"
ERROR - 2021-11-25 14:34:23 --> Could not find the language line "Status"
ERROR - 2021-11-25 14:34:23 --> Could not find the language line "Remark"
ERROR - 2021-11-25 14:34:24 --> Could not find the language line "Cancelled"
ERROR - 2021-11-25 14:34:24 --> Could not find the language line "Waiting"
ERROR - 2021-11-25 14:34:24 --> Could not find the language line "Closed"
ERROR - 2021-11-25 14:34:24 --> Could not find the language line "Completed"
ERROR - 2021-11-25 14:34:25 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 125
ERROR - 2021-11-25 14:34:25 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 133
ERROR - 2021-11-25 15:40:12 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-25 15:40:15 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `dateadded` DESC
 LIMIT 50
ERROR - 2021-11-25 15:40:16 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `dateadded` ASC
 LIMIT 50
ERROR - 2021-11-25 15:40:17 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `leadorder` DESC
 LIMIT 50
ERROR - 2021-11-25 15:40:18 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-25 15:41:01 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 125
ERROR - 2021-11-25 15:41:01 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 133
ERROR - 2021-11-25 15:47:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 125
ERROR - 2021-11-25 15:47:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 133
ERROR - 2021-11-25 15:47:20 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 125
ERROR - 2021-11-25 15:47:20 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 133
ERROR - 2021-11-25 15:47:35 --> Severity: error --> Exception: call_user_func_array(): Argument #1 ($callback) must be a valid callback, function "lead_manager_permissions" not found or invalid function name C:\xampp\htdocs\CRM\crm\application\vendor\bainternet\php-hooks\php-hooks.php 362
ERROR - 2021-11-25 15:47:49 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 125
ERROR - 2021-11-25 15:47:49 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 133
ERROR - 2021-11-25 15:48:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 125
ERROR - 2021-11-25 15:48:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 133
ERROR - 2021-11-25 15:48:59 --> Severity: error --> Exception: Unclosed '{' on line 57 C:\xampp\htdocs\CRM\crm\modules\lead_manager\lead_manager.php 149
ERROR - 2021-11-25 15:49:01 --> Severity: error --> Exception: Unclosed '{' on line 57 C:\xampp\htdocs\CRM\crm\modules\lead_manager\lead_manager.php 149
ERROR - 2021-11-25 15:50:26 --> Could not find the language line "#"
ERROR - 2021-11-25 15:50:26 --> Could not find the language line "Status"
ERROR - 2021-11-25 15:50:26 --> Could not find the language line "Remark"
ERROR - 2021-11-25 15:50:26 --> Could not find the language line "#"
ERROR - 2021-11-25 15:50:26 --> Could not find the language line "Status"
ERROR - 2021-11-25 15:50:26 --> Could not find the language line "Remark"
ERROR - 2021-11-25 15:50:27 --> Could not find the language line "Cancelled"
ERROR - 2021-11-25 15:50:27 --> Could not find the language line "Waiting"
ERROR - 2021-11-25 15:50:27 --> Could not find the language line "Closed"
ERROR - 2021-11-25 15:50:27 --> Could not find the language line "Completed"
ERROR - 2021-11-25 15:50:29 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 125
ERROR - 2021-11-25 15:50:29 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 133
ERROR - 2021-11-25 15:51:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 125
ERROR - 2021-11-25 15:51:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 133
ERROR - 2021-11-25 15:51:52 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 125
ERROR - 2021-11-25 15:51:52 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 133
ERROR - 2021-11-25 15:52:34 --> Severity: error --> Exception: call_user_func_array(): Argument #1 ($callback) must be a valid callback, function "lead_manager_soft_phone" not found or invalid function name C:\xampp\htdocs\CRM\crm\application\vendor\bainternet\php-hooks\php-hooks.php 362
ERROR - 2021-11-25 15:53:11 --> Severity: error --> Exception: call_user_func_array(): Argument #1 ($callback) must be a valid callback, function "lead_manager_soft_phone" not found or invalid function name C:\xampp\htdocs\CRM\crm\application\vendor\bainternet\php-hooks\php-hooks.php 362
ERROR - 2021-11-25 15:53:13 --> Severity: error --> Exception: call_user_func_array(): Argument #1 ($callback) must be a valid callback, function "lead_manager_soft_phone" not found or invalid function name C:\xampp\htdocs\CRM\crm\application\vendor\bainternet\php-hooks\php-hooks.php 362
ERROR - 2021-11-25 15:53:30 --> Severity: error --> Exception: call_user_func_array(): Argument #1 ($callback) must be a valid callback, function "lead_manager_soft_phone" not found or invalid function name C:\xampp\htdocs\CRM\crm\application\vendor\bainternet\php-hooks\php-hooks.php 362
ERROR - 2021-11-25 15:53:48 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 125
ERROR - 2021-11-25 15:53:48 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 133
ERROR - 2021-11-25 15:54:13 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 125
ERROR - 2021-11-25 15:54:13 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 133
ERROR - 2021-11-25 15:54:26 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 125
ERROR - 2021-11-25 15:54:26 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 133
ERROR - 2021-11-25 15:54:45 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 125
ERROR - 2021-11-25 15:54:45 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 133
ERROR - 2021-11-25 15:55:05 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 125
ERROR - 2021-11-25 15:55:05 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 133
ERROR - 2021-11-25 15:55:38 --> Could not find the language line "#"
ERROR - 2021-11-25 15:55:38 --> Could not find the language line "Status"
ERROR - 2021-11-25 15:55:38 --> Could not find the language line "Remark"
ERROR - 2021-11-25 15:55:39 --> Could not find the language line "Cancelled"
ERROR - 2021-11-25 15:55:39 --> Could not find the language line "Waiting"
ERROR - 2021-11-25 15:55:39 --> Could not find the language line "Closed"
ERROR - 2021-11-25 15:55:39 --> Could not find the language line "Completed"
ERROR - 2021-11-25 15:55:40 --> Could not find the language line "Cancelled"
ERROR - 2021-11-25 15:55:40 --> Could not find the language line "Waiting"
ERROR - 2021-11-25 15:55:40 --> Could not find the language line "Closed"
ERROR - 2021-11-25 15:55:40 --> Could not find the language line "Completed"
ERROR - 2021-11-25 15:55:42 --> Could not find the language line "Cancelled"
ERROR - 2021-11-25 15:55:42 --> Could not find the language line "Waiting"
ERROR - 2021-11-25 15:55:42 --> Could not find the language line "Closed"
ERROR - 2021-11-25 15:55:42 --> Could not find the language line "Completed"
ERROR - 2021-11-25 15:55:43 --> Could not find the language line "Cancelled"
ERROR - 2021-11-25 15:55:43 --> Could not find the language line "Waiting"
ERROR - 2021-11-25 15:55:43 --> Could not find the language line "Closed"
ERROR - 2021-11-25 15:55:43 --> Could not find the language line "Completed"
ERROR - 2021-11-25 15:55:44 --> Could not find the language line "Cancelled"
ERROR - 2021-11-25 15:55:44 --> Could not find the language line "Waiting"
ERROR - 2021-11-25 15:55:44 --> Could not find the language line "Closed"
ERROR - 2021-11-25 15:55:44 --> Could not find the language line "Completed"
ERROR - 2021-11-25 15:55:46 --> Could not find the language line "Remark"
ERROR - 2021-11-25 15:55:53 --> Could not find the language line "Remark"
ERROR - 2021-11-25 15:56:28 --> Could not find the language line "Remark"
ERROR - 2021-11-25 15:57:00 --> Could not find the language line "Remark"
ERROR - 2021-11-25 15:57:04 --> Could not find the language line "#"
ERROR - 2021-11-25 15:57:04 --> Could not find the language line "Status"
ERROR - 2021-11-25 15:57:04 --> Could not find the language line "Remark"
ERROR - 2021-11-25 15:57:04 --> Could not find the language line "Cancelled"
ERROR - 2021-11-25 15:57:04 --> Could not find the language line "Waiting"
ERROR - 2021-11-25 15:57:04 --> Could not find the language line "Closed"
ERROR - 2021-11-25 15:57:04 --> Could not find the language line "Completed"
ERROR - 2021-11-25 15:57:06 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 125
ERROR - 2021-11-25 15:57:06 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 133
ERROR - 2021-11-25 15:58:26 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 125
ERROR - 2021-11-25 15:58:26 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 133
ERROR - 2021-11-25 15:59:13 --> Could not find the language line "Remark"
ERROR - 2021-11-25 16:00:08 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 125
ERROR - 2021-11-25 16:00:08 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 133
ERROR - 2021-11-25 16:01:45 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard.php 133
ERROR - 2021-11-25 16:02:37 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard-ajax.php 90
ERROR - 2021-11-25 16:02:37 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\CRM\crm\modules\lead_manager\views\admin\leads\dashboard-ajax.php 98
ERROR - 2021-11-25 16:04:12 --> Could not find the language line "#"
ERROR - 2021-11-25 16:04:12 --> Could not find the language line "Status"
ERROR - 2021-11-25 16:04:12 --> Could not find the language line "Remark"
ERROR - 2021-11-25 16:04:12 --> Could not find the language line "Cancelled"
ERROR - 2021-11-25 16:04:12 --> Could not find the language line "Waiting"
ERROR - 2021-11-25 16:04:12 --> Could not find the language line "Closed"
ERROR - 2021-11-25 16:04:12 --> Could not find the language line "Completed"
ERROR - 2021-11-25 16:04:14 --> Could not find the language line "Remark"
ERROR - 2021-11-25 16:09:16 --> Could not find the language line "new"
ERROR - 2021-11-25 16:10:57 --> Could not find the language line "new"
ERROR - 2021-11-25 16:11:02 --> Could not find the language line "new"
ERROR - 2021-11-25 16:12:03 --> Could not find the language line "new"
ERROR - 2021-11-25 16:12:56 --> Could not find the language line "new"
ERROR - 2021-11-25 16:22:26 --> Could not find the language line "hrm"
ERROR - 2021-11-25 16:22:26 --> Could not find the language line "time"
ERROR - 2021-11-25 16:22:26 --> Could not find the language line "invoice_table_percentage"
ERROR - 2021-11-25 16:22:37 --> Could not find the language line "Recruitment Plan"
ERROR - 2021-11-25 16:22:52 --> Could not find the language line "Recruitment campaign"
ERROR - 2021-11-25 16:22:58 --> Could not find the language line "Candidate profile"
ERROR - 2021-11-25 16:23:01 --> Could not find the language line "New candidate"
ERROR - 2021-11-25 16:23:10 --> Could not find the language line "Interview schedule"
ERROR - 2021-11-25 16:23:10 --> Could not find the language line "time"
ERROR - 2021-11-25 16:23:13 --> Could not find the language line "Recruitment chanel"
ERROR - 2021-11-25 16:23:32 --> Could not find the language line "Candidate profile"
ERROR - 2021-11-25 16:23:35 --> Could not find the language line "New candidate"
ERROR - 2021-11-25 16:34:05 --> Could not find the language line "New candidate"
ERROR - 2021-11-25 16:40:16 --> Could not find the language line "#"
ERROR - 2021-11-25 16:40:16 --> Could not find the language line "Status"
ERROR - 2021-11-25 16:40:16 --> Could not find the language line "Remark"
ERROR - 2021-11-25 16:40:17 --> Could not find the language line "Cancelled"
ERROR - 2021-11-25 16:40:17 --> Could not find the language line "Waiting"
ERROR - 2021-11-25 16:40:17 --> Could not find the language line "Closed"
ERROR - 2021-11-25 16:40:17 --> Could not find the language line "Completed"
ERROR - 2021-11-25 16:40:25 --> Could not find the language line "Remark"
ERROR - 2021-11-25 16:40:52 --> Could not find the language line "Remark"
ERROR - 2021-11-25 16:41:16 --> Could not find the language line "Remark"
ERROR - 2021-11-25 16:41:27 --> Could not find the language line "new"
ERROR - 2021-11-25 16:41:35 --> Could not find the language line "new"
ERROR - 2021-11-25 16:41:40 --> Could not find the language line "new"
ERROR - 2021-11-25 16:45:53 --> Could not find the language line "setting"
ERROR - 2021-11-25 16:46:01 --> Could not find the language line "setting"
ERROR - 2021-11-25 16:46:13 --> Could not find the language line "setting"
ERROR - 2021-11-25 16:46:13 --> Severity: Compile Error --> Array and string offset access syntax with curly braces is no longer supported C:\xampp\htdocs\CRM\crm\modules\warehouse\third_party\excel\PHPExcel\Shared\String.php 526
ERROR - 2021-11-25 16:46:28 --> Could not find the language line "setting"
ERROR - 2021-11-25 16:46:32 --> Could not find the language line "setting"
ERROR - 2021-11-25 16:51:43 --> Could not find the language line "Entrée de journal"
ERROR - 2021-11-25 16:51:43 --> Could not find the language line "add"
ERROR - 2021-11-25 16:51:46 --> Could not find the language line "Entrée de journal"
ERROR - 2021-11-25 16:57:50 --> 404 Page Not Found: 
ERROR - 2021-11-25 16:57:59 --> 404 Page Not Found: 
ERROR - 2021-11-25 17:00:05 --> Could not find the language line "new"
ERROR - 2021-11-25 17:00:13 --> Could not find the language line "new"
ERROR - 2021-11-25 17:00:45 --> Could not find the language line "new"
ERROR - 2021-11-25 17:06:54 --> Severity: Warning --> Undefined array key "password" C:\xampp\htdocs\CRM\crm\modules\api\models\Api_model.php 373
ERROR - 2021-11-25 17:06:54 --> Severity: Warning --> Undefined array key "password" C:\xampp\htdocs\CRM\crm\modules\api\models\Api_model.php 382
ERROR - 2021-11-25 17:11:04 --> Could not find the language line "report"
ERROR - 2021-11-25 17:11:04 --> Could not find the language line "finish"
ERROR - 2021-11-25 17:11:04 --> Could not find the language line "unfinished"
ERROR - 2021-11-25 17:11:04 --> Could not find the language line "status"
ERROR - 2021-11-25 17:11:32 --> Could not find the language line "report"
ERROR - 2021-11-25 17:11:32 --> Could not find the language line "finish"
ERROR - 2021-11-25 17:11:32 --> Could not find the language line "unfinished"
ERROR - 2021-11-25 17:11:32 --> Could not find the language line "status"
ERROR - 2021-11-25 17:11:51 --> Could not find the language line "add"
ERROR - 2021-11-25 17:11:51 --> Could not find the language line "status"
ERROR - 2021-11-25 17:11:51 --> Could not find the language line "diagrams_okr"
ERROR - 2021-11-25 17:11:59 --> Could not find the language line "approval_process"
ERROR - 2021-11-25 17:11:59 --> Could not find the language line "add"
ERROR - 2021-11-25 17:12:02 --> Could not find the language line "approval_process"
ERROR - 2021-11-25 17:12:02 --> Could not find the language line "add"
ERROR - 2021-11-25 17:12:04 --> Could not find the language line "approval_process"
ERROR - 2021-11-25 17:12:04 --> Could not find the language line "add"
ERROR - 2021-11-25 17:12:06 --> Could not find the language line "approval_process"
ERROR - 2021-11-25 17:12:06 --> Could not find the language line "add"
ERROR - 2021-11-25 17:13:14 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-25 17:13:33 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-25 17:42:43 --> Could not find the language line ""
ERROR - 2021-11-25 17:43:01 --> Could not find the language line "#"
ERROR - 2021-11-25 17:43:01 --> Could not find the language line "Status"
ERROR - 2021-11-25 17:43:01 --> Could not find the language line "Remark"
ERROR - 2021-11-25 17:43:02 --> Could not find the language line "Cancelled"
ERROR - 2021-11-25 17:43:02 --> Could not find the language line "Waiting"
ERROR - 2021-11-25 17:43:02 --> Could not find the language line "Closed"
ERROR - 2021-11-25 17:43:02 --> Could not find the language line "Completed"
ERROR - 2021-11-25 17:43:04 --> Could not find the language line "Remark"
ERROR - 2021-11-25 17:49:22 --> Query error: Unknown column 'tblleads.website' in 'field list' - Invalid query: SELECT `tblleads`.`title`, `tblleads`.`website`, `tblleads`.`lead_value`, `tblleads`.`address`, `tblleads`.`city`, `tblleads`.`state`, `tblleads`.`country`, `tblleads`.`zip`, `tblleads`.`name` as `lead_name`, `tblleads_sources`.`name` as `source_name`, `tblleads`.`id` as `id`, `tblleads`.`assigned`, `tblleads`.`email`, `tblleads`.`phonenumber`, `tblleads`.`company`, `tblleads`.`dateadded`, `tblleads`.`status`, `tblleads`.`lastcontact`, (SELECT COUNT(*) FROM tblclients WHERE leadid=tblleads.id) as is_lead_client, (SELECT COUNT(id) FROM tblfiles WHERE rel_id=tblleads.id AND rel_type="lead") as total_files, (SELECT COUNT(id) FROM tblnotes WHERE rel_id=tblleads.id AND rel_type="lead") as total_notes, (SELECT GROUP_CONCAT(name SEPARATOR ", ") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblleads.id and rel_type="lead" ORDER by tag_order ASC) as tags
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `status` = '2'
ORDER BY `lastcontact` ASC
 LIMIT 50
ERROR - 2021-11-25 17:53:28 --> 404 Page Not Found: 
ERROR - 2021-11-25 17:53:28 --> 404 Page Not Found: 
ERROR - 2021-11-25 17:53:46 --> 404 Page Not Found: 
ERROR - 2021-11-25 17:55:03 --> Could not find the language line "Remark"
ERROR - 2021-11-25 17:55:55 --> Could not find the language line "Remark"
ERROR - 2021-11-25 19:03:45 --> Severity: error --> Exception: Call to undefined function file_exist() C:\xampp\htdocs\CRM\crm\application\config\autoload.php 163
ERROR - 2021-11-25 19:03:49 --> Severity: error --> Exception: Call to undefined function file_exist() C:\xampp\htdocs\CRM\crm\application\config\autoload.php 163
ERROR - 2021-11-25 19:04:03 --> Severity: error --> Exception: Undefined constant "APPPAT" C:\xampp\htdocs\CRM\crm\application\config\autoload.php 163
ERROR - 2021-11-25 18:04:54 --> Could not find the language line "Remark"
ERROR - 2021-11-25 18:05:05 --> Could not find the language line "#"
ERROR - 2021-11-25 18:05:05 --> Could not find the language line "Status"
ERROR - 2021-11-25 18:05:05 --> Could not find the language line "Remark"
ERROR - 2021-11-25 18:05:06 --> Could not find the language line "Cancelled"
ERROR - 2021-11-25 18:05:06 --> Could not find the language line "Waiting"
ERROR - 2021-11-25 18:05:06 --> Could not find the language line "Closed"
ERROR - 2021-11-25 18:05:06 --> Could not find the language line "Completed"
ERROR - 2021-11-25 18:05:07 --> Could not find the language line "Remark"
ERROR - 2021-11-25 18:08:19 --> Could not find the language line "#"
ERROR - 2021-11-25 18:08:19 --> Could not find the language line "Status"
ERROR - 2021-11-25 18:08:19 --> Could not find the language line "Remark"
ERROR - 2021-11-25 18:08:20 --> Could not find the language line "Cancelled"
ERROR - 2021-11-25 18:08:20 --> Could not find the language line "Waiting"
ERROR - 2021-11-25 18:08:20 --> Could not find the language line "Closed"
ERROR - 2021-11-25 18:08:20 --> Could not find the language line "Completed"
ERROR - 2021-11-25 18:08:26 --> Could not find the language line "#"
ERROR - 2021-11-25 18:08:26 --> Could not find the language line "Status"
ERROR - 2021-11-25 18:08:26 --> Could not find the language line "Remark"
ERROR - 2021-11-25 18:08:27 --> Could not find the language line "Cancelled"
ERROR - 2021-11-25 18:08:27 --> Could not find the language line "Waiting"
ERROR - 2021-11-25 18:08:27 --> Could not find the language line "Closed"
ERROR - 2021-11-25 18:08:27 --> Could not find the language line "Completed"
