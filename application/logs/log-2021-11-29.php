<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-11-29 10:14:05 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'root'@'172.18.0.1' (using password: NO) C:\xampp\htdocs\CRM\crm\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2021-11-29 10:14:05 --> Unable to connect to the database
ERROR - 2021-11-29 10:15:14 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No connection could be made because the target machine actively refused it C:\xampp\htdocs\CRM\crm\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2021-11-29 10:15:14 --> Unable to connect to the database
ERROR - 2021-11-29 10:56:27 --> 404 Page Not Found: admin/Index/index
ERROR - 2021-11-29 10:04:18 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-29 10:05:17 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-29 10:18:42 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-29 10:19:11 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-29 14:05:27 --> Could not find the language line "new"
ERROR - 2021-11-29 14:05:45 --> Could not find the language line "new"
ERROR - 2021-11-29 14:06:08 --> Could not find the language line "new"
ERROR - 2021-11-29 14:06:39 --> Could not find the language line "new"
ERROR - 2021-11-29 14:06:44 --> Could not find the language line "new"
ERROR - 2021-11-29 14:06:48 --> Could not find the language line "new"
ERROR - 2021-11-29 14:07:17 --> Could not find the language line "new"
ERROR - 2021-11-29 14:16:44 --> Query error: Unknown column 'hourly_rate' in 'field list' - Invalid query: SELECT `hourly_rate`
FROM `tblstaff`
WHERE `staffid` = '1'
ERROR - 2021-11-29 14:18:16 --> Query error: Unknown column 'hourly_rate' in 'field list' - Invalid query: SELECT `hourly_rate`
FROM `tblstaff`
WHERE `staffid` = '1'
ERROR - 2021-11-29 14:18:23 --> Query error: Unknown column 'hourly_rate' in 'field list' - Invalid query: SELECT `hourly_rate`
FROM `tblstaff`
WHERE `staffid` = '1'
ERROR - 2021-11-29 14:22:10 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-29 14:22:19 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-29 14:22:36 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-29 14:22:57 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-29 14:23:01 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-29 14:23:07 --> Query error: Unknown column 'hourly_rate' in 'field list' - Invalid query: SELECT `hourly_rate`
FROM `tblstaff`
WHERE `staffid` = '1'
ERROR - 2021-11-29 14:24:31 --> Could not find the language line "new"
ERROR - 2021-11-29 17:38:45 --> Severity: Warning --> Undefined property: stdClass::$hourly_rate C:\xampp\htdocs\CRM\crm\application\views\admin\staff\member.php 443
ERROR - 2021-11-29 17:49:35 --> Severity: error --> Exception: Unmatched '}' C:\xampp\htdocs\CRM\crm\application\views\admin\dashboard\widgets\tickets_chart.php 24
ERROR - 2021-11-29 17:54:12 --> Could not find the language line ""
ERROR - 2021-11-29 18:12:44 --> Query error: Column 'service' in field list is ambiguous - Invalid query: SELECT *, `tbltickets`.`userid`, `tbltickets`.`name` as `from_name`, `tbltickets`.`email` as `ticket_email`, `tbldepartments`.`name` as `department_name`, `tbltickets_priorities`.`name` as `priority_name`, `statuscolor`, `tbltickets`.`admin`, `tblservices`.`name` as `service_name`, `service`, `tbltickets_status`.`name` as `status_name`, `tbltickets`.`ticketid`, `tblcontacts`.`firstname` as `user_firstname`, `tblcontacts`.`lastname` as `user_lastname`, `tblstaff`.`firstname` as `staff_firstname`, `tblstaff`.`lastname` as `staff_lastname`, `lastreply`, `message`, `tbltickets`.`status`, `subject`, `department`, `priority`, `tblcontacts`.`email`, `adminread`, `clientread`, `date`
FROM `tbltickets`
LEFT JOIN `tbldepartments` ON `tbldepartments`.`departmentid` = `tbltickets`.`department`
LEFT JOIN `tbltickets_status` ON `tbltickets_status`.`ticketstatusid` = `tbltickets`.`status`
LEFT JOIN `tblservices` ON `tblservices`.`serviceid` = `tbltickets`.`service`
LEFT JOIN `tblclients` ON `tblclients`.`userid` = `tbltickets`.`userid`
LEFT JOIN `tblcontacts` ON `tblcontacts`.`id` = `tbltickets`.`contactid`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid` = `tbltickets`.`admin`
LEFT JOIN `tbltickets_priorities` ON `tbltickets_priorities`.`priorityid` = `tbltickets`.`priority`
WHERE `tbltickets`.`userid` = 27 AND `status` IN (1, 2, 3, 4)
ORDER BY `lastreply` ASC
ERROR - 2021-11-29 18:12:54 --> Query error: Column 'service' in field list is ambiguous - Invalid query: SELECT *, `tbltickets`.`userid`, `tbltickets`.`name` as `from_name`, `tbltickets`.`email` as `ticket_email`, `tbldepartments`.`name` as `department_name`, `tbltickets_priorities`.`name` as `priority_name`, `statuscolor`, `tbltickets`.`admin`, `tblservices`.`name` as `service_name`, `service`, `tbltickets_status`.`name` as `status_name`, `tbltickets`.`ticketid`, `tblcontacts`.`firstname` as `user_firstname`, `tblcontacts`.`lastname` as `user_lastname`, `tblstaff`.`firstname` as `staff_firstname`, `tblstaff`.`lastname` as `staff_lastname`, `lastreply`, `message`, `tbltickets`.`status`, `subject`, `department`, `priority`, `tblcontacts`.`email`, `adminread`, `clientread`, `date`
FROM `tbltickets`
LEFT JOIN `tbldepartments` ON `tbldepartments`.`departmentid` = `tbltickets`.`department`
LEFT JOIN `tbltickets_status` ON `tbltickets_status`.`ticketstatusid` = `tbltickets`.`status`
LEFT JOIN `tblservices` ON `tblservices`.`serviceid` = `tbltickets`.`service`
LEFT JOIN `tblclients` ON `tblclients`.`userid` = `tbltickets`.`userid`
LEFT JOIN `tblcontacts` ON `tblcontacts`.`id` = `tbltickets`.`contactid`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid` = `tbltickets`.`admin`
LEFT JOIN `tbltickets_priorities` ON `tbltickets_priorities`.`priorityid` = `tbltickets`.`priority`
WHERE `tbltickets`.`userid` = 27 AND `status` IN (1, 2, 3, 4)
ORDER BY `lastreply` ASC
