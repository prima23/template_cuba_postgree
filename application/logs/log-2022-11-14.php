<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-11-14 20:38:04 --> 404 Page Not Found: /index
ERROR - 2022-11-14 20:38:04 --> 404 Page Not Found: /index
ERROR - 2022-11-14 20:38:04 --> 404 Page Not Found: /index
ERROR - 2022-11-14 20:38:04 --> 404 Page Not Found: /index
ERROR - 2022-11-14 20:38:04 --> 404 Page Not Found: /index
ERROR - 2022-11-14 20:38:04 --> 404 Page Not Found: /index
ERROR - 2022-11-14 20:38:10 --> Query error: Unknown column 'a.id_level_akses' in 'field list' - Invalid query: SELECT `a`.`id_fungsi`, `a`.`label_fungsi`, `a`.`nama_fungsi`, `a`.`url_fungsi`, `a`.`deskripsi_fungsi`, `a`.`id_jenis_fungsi`, `a`.`id_level_akses`, `a`.`id_status`, `b`.`jenis_fungsi`
FROM `xi_sa_fungsi` `a`
INNER JOIN `xi_sa_jenis_fungsi` `b` ON `a`.`id_jenis_fungsi` = `b`.`id_jenis_fungsi`
ORDER BY `a`.`id_fungsi` ASC
 LIMIT 10
ERROR - 2022-11-14 20:38:31 --> Query error: Unknown column 'a.id_level_akses' in 'field list' - Invalid query: SELECT `a`.`id_fungsi`, `a`.`label_fungsi`, `a`.`nama_fungsi`, `a`.`url_fungsi`, `a`.`deskripsi_fungsi`, `a`.`id_jenis_fungsi`, `a`.`id_level_akses`, `a`.`id_status`, `b`.`jenis_fungsi`
FROM `xi_sa_fungsi` `a`
INNER JOIN `xi_sa_jenis_fungsi` `b` ON `a`.`id_jenis_fungsi` = `b`.`id_jenis_fungsi`
ORDER BY `a`.`id_fungsi` ASC
 LIMIT 10
ERROR - 2022-11-14 20:40:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'distinct(d.label_module), ', ' ) ) AS hak_akses, `e`.`level_akses`
FROM `xi_s...' at line 1 - Invalid query: SELECT `a`.`id_group`, `a`.`nama_group`, `a`.`id_level_akses`, `a`.`id_status`, CONCAT ( 'Module: ', string_agg(distinct(d.label_module), ', ' ) ) AS hak_akses, `e`.`level_akses`
FROM `xi_sa_group` `a`
LEFT JOIN `xi_sa_group_privileges` `b` ON `a`.`id_group` = `b`.`id_group` AND `b`.`id_status` = 1
LEFT JOIN `xi_sa_rules` `c` ON `b`.`id_rules` = `c`.`id_rules`
LEFT JOIN `xi_sa_module` `d` ON `c`.`id_module` = `d`.`id_module`
INNER JOIN `xi_sa_level_akses` `e` ON `a`.`id_level_akses` = `e`.`id_level_akses`
GROUP BY `a`.`id_group`, `e`.`level_akses`
ORDER BY `a`.`id_group` ASC
 LIMIT 10
ERROR - 2022-11-14 20:40:39 --> Query error: FUNCTION clear_engine.string_agg does not exist - Invalid query: SELECT `a`.`id_users`, `a`.`token`, `a`.`unit_id`, `a`.`username`, `a`.`email`, `a`.`fullname`, `a`.`foto_profile`, `a`.`blokir`, `a`.`id_status`, `a`.`unit_id_name`, (CASE
                               WHEN d.pass_plain IS NULL THEN '-'
                               ELSE d.pass_plain
                           END) AS pass_plain, string_agg(c.nama_group, ', ') AS group_user
FROM `xi_sa_users` `a`
LEFT JOIN `xi_sa_users_privileges` `b` ON `a`.`id_users` = `b`.`id_users`
LEFT JOIN `xi_sa_group` `c` ON `b`.`id_group` = `c`.`id_group`
LEFT JOIN `xi_sa_users_default_pass` `d` ON `a`.`id_users` = `d`.`id_users`
WHERE `b`.`id_status` = 1
GROUP BY `a`.`id_users`, `d`.`pass_plain`
ORDER BY `a`.`id_users` ASC
 LIMIT 10
ERROR - 2022-11-14 20:40:47 --> Query error: FUNCTION clear_engine.string_agg does not exist - Invalid query: SELECT `a`.`id_users`, `a`.`token`, `a`.`unit_id`, `a`.`username`, `a`.`email`, `a`.`fullname`, `a`.`foto_profile`, `a`.`blokir`, `a`.`id_status`, `a`.`unit_id_name`, (CASE
                               WHEN d.pass_plain IS NULL THEN '-'
                               ELSE d.pass_plain
                           END) AS pass_plain, string_agg(c.nama_group, ', ') AS group_user
FROM `xi_sa_users` `a`
LEFT JOIN `xi_sa_users_privileges` `b` ON `a`.`id_users` = `b`.`id_users`
LEFT JOIN `xi_sa_group` `c` ON `b`.`id_group` = `c`.`id_group`
LEFT JOIN `xi_sa_users_default_pass` `d` ON `a`.`id_users` = `d`.`id_users`
WHERE `b`.`id_status` = 1
GROUP BY `a`.`id_users`, `d`.`pass_plain`
ORDER BY `a`.`id_users` ASC
 LIMIT 10
ERROR - 2022-11-14 20:42:01 --> Query error: Unknown column 'a.id_level_akses' in 'field list' - Invalid query: SELECT `a`.`id_fungsi`, `a`.`label_fungsi`, `a`.`nama_fungsi`, `a`.`url_fungsi`, `a`.`deskripsi_fungsi`, `a`.`id_jenis_fungsi`, `a`.`id_level_akses`, `a`.`id_status`, `b`.`jenis_fungsi`
FROM `xi_sa_fungsi` `a`
INNER JOIN `xi_sa_jenis_fungsi` `b` ON `a`.`id_jenis_fungsi` = `b`.`id_jenis_fungsi`
ORDER BY `a`.`id_fungsi` ASC
 LIMIT 10
ERROR - 2022-11-14 20:42:11 --> Query error: Unknown column 'a.id_level_akses' in 'field list' - Invalid query: SELECT `a`.`id_fungsi`, `a`.`label_fungsi`, `a`.`nama_fungsi`, `a`.`url_fungsi`, `a`.`deskripsi_fungsi`, `a`.`id_jenis_fungsi`, `a`.`id_level_akses`, `a`.`id_status`, `b`.`jenis_fungsi`
FROM `xi_sa_fungsi` `a`
INNER JOIN `xi_sa_jenis_fungsi` `b` ON `a`.`id_jenis_fungsi` = `b`.`id_jenis_fungsi`
ORDER BY `a`.`id_fungsi` ASC
 LIMIT 10
ERROR - 2022-11-14 20:49:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7430\htdocs\clear_engine_cuba\application\modules\auth\models\Model_auth_signin.php 184
ERROR - 2022-11-14 20:49:34 --> 404 Page Not Found: /index
ERROR - 2022-11-14 20:49:34 --> 404 Page Not Found: /index
ERROR - 2022-11-14 20:49:34 --> 404 Page Not Found: /index
ERROR - 2022-11-14 20:49:34 --> 404 Page Not Found: /index
ERROR - 2022-11-14 20:49:34 --> 404 Page Not Found: /index
ERROR - 2022-11-14 20:49:34 --> 404 Page Not Found: /index
ERROR - 2022-11-14 20:49:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'distinct(d.label_module), ', ' ) ) AS hak_akses, `e`.`level_akses`
FROM `xi_s...' at line 1 - Invalid query: SELECT `a`.`id_group`, `a`.`nama_group`, `a`.`id_level_akses`, `a`.`id_status`, CONCAT ( 'Module: ', string_agg(distinct(d.label_module), ', ' ) ) AS hak_akses, `e`.`level_akses`
FROM `xi_sa_group` `a`
LEFT JOIN `xi_sa_group_privileges` `b` ON `a`.`id_group` = `b`.`id_group` AND `b`.`id_status` = 1
LEFT JOIN `xi_sa_rules` `c` ON `b`.`id_rules` = `c`.`id_rules`
LEFT JOIN `xi_sa_module` `d` ON `c`.`id_module` = `d`.`id_module`
INNER JOIN `xi_sa_level_akses` `e` ON `a`.`id_level_akses` = `e`.`id_level_akses`
GROUP BY `a`.`id_group`, `e`.`level_akses`
ORDER BY `a`.`id_group` ASC
 LIMIT 10
ERROR - 2022-11-14 20:49:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'distinct(d.label_module), ', ' ) ) AS hak_akses, `e`.`level_akses`
FROM `xi_s...' at line 1 - Invalid query: SELECT `a`.`id_group`, `a`.`nama_group`, `a`.`id_level_akses`, `a`.`id_status`, CONCAT ( 'Module: ', string_agg(distinct(d.label_module), ', ' ) ) AS hak_akses, `e`.`level_akses`
FROM `xi_sa_group` `a`
LEFT JOIN `xi_sa_group_privileges` `b` ON `a`.`id_group` = `b`.`id_group` AND `b`.`id_status` = 1
LEFT JOIN `xi_sa_rules` `c` ON `b`.`id_rules` = `c`.`id_rules`
LEFT JOIN `xi_sa_module` `d` ON `c`.`id_module` = `d`.`id_module`
INNER JOIN `xi_sa_level_akses` `e` ON `a`.`id_level_akses` = `e`.`id_level_akses`
GROUP BY `a`.`id_group`, `e`.`level_akses`
ORDER BY `a`.`id_group` ASC
 LIMIT 10
ERROR - 2022-11-14 20:50:58 --> Query error: FUNCTION clear_engine.string_agg does not exist - Invalid query: SELECT `a`.`id_users`, `a`.`token`, `a`.`unit_id`, `a`.`username`, `a`.`email`, `a`.`fullname`, `a`.`foto_profile`, `a`.`blokir`, `a`.`id_status`, `a`.`unit_id_name`, (CASE
                               WHEN d.pass_plain IS NULL THEN '-'
                               ELSE d.pass_plain
                           END) AS pass_plain, string_agg(c.nama_group, ', ') AS group_user
FROM `xi_sa_users` `a`
LEFT JOIN `xi_sa_users_privileges` `b` ON `a`.`id_users` = `b`.`id_users`
LEFT JOIN `xi_sa_group` `c` ON `b`.`id_group` = `c`.`id_group`
LEFT JOIN `xi_sa_users_default_pass` `d` ON `a`.`id_users` = `d`.`id_users`
WHERE `b`.`id_status` = 1
GROUP BY `a`.`id_users`, `d`.`pass_plain`
ORDER BY `a`.`id_users` ASC
 LIMIT 10
ERROR - 2022-11-14 20:58:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'distinct(d.label_module), ', ' ) ) AS hak_akses, `e`.`level_akses`
FROM `xi_s...' at line 1 - Invalid query: SELECT `a`.`id_group`, `a`.`nama_group`, `a`.`id_level_akses`, `a`.`id_status`, CONCAT ( 'Module: ', string_agg(distinct(d.label_module), ', ' ) ) AS hak_akses, `e`.`level_akses`
FROM `xi_sa_group` `a`
LEFT JOIN `xi_sa_group_privileges` `b` ON `a`.`id_group` = `b`.`id_group` AND `b`.`id_status` = 1
LEFT JOIN `xi_sa_rules` `c` ON `b`.`id_rules` = `c`.`id_rules`
LEFT JOIN `xi_sa_module` `d` ON `c`.`id_module` = `d`.`id_module`
INNER JOIN `xi_sa_level_akses` `e` ON `a`.`id_level_akses` = `e`.`id_level_akses`
GROUP BY `a`.`id_group`, `e`.`level_akses`
ORDER BY `a`.`id_group` ASC
 LIMIT 10
ERROR - 2022-11-14 21:05:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7430\htdocs\clear_engine_cuba\application\modules\auth\models\Model_auth_signin.php 184
ERROR - 2022-11-14 21:05:38 --> 404 Page Not Found: /index
ERROR - 2022-11-14 21:05:38 --> 404 Page Not Found: /index
ERROR - 2022-11-14 21:05:38 --> 404 Page Not Found: /index
ERROR - 2022-11-14 21:05:38 --> 404 Page Not Found: /index
ERROR - 2022-11-14 21:05:38 --> 404 Page Not Found: /index
ERROR - 2022-11-14 21:05:39 --> 404 Page Not Found: /index
ERROR - 2022-11-14 21:05:42 --> Query error: Unknown column 'a.id_level_akses' in 'field list' - Invalid query: SELECT `a`.`id_fungsi`, `a`.`label_fungsi`, `a`.`nama_fungsi`, `a`.`url_fungsi`, `a`.`deskripsi_fungsi`, `a`.`id_jenis_fungsi`, `a`.`id_level_akses`, `a`.`id_status`, `b`.`jenis_fungsi`
FROM `xi_sa_fungsi` `a`
INNER JOIN `xi_sa_jenis_fungsi` `b` ON `a`.`id_jenis_fungsi` = `b`.`id_jenis_fungsi`
ORDER BY `a`.`id_fungsi` ASC
 LIMIT 10
ERROR - 2022-11-14 21:06:19 --> Query error: Unknown column 'a.id_level_akses' in 'field list' - Invalid query: SELECT `a`.`id_fungsi`, `a`.`label_fungsi`, `a`.`nama_fungsi`, `a`.`url_fungsi`, `a`.`deskripsi_fungsi`, `a`.`id_jenis_fungsi`, `a`.`id_level_akses`, `a`.`id_status`, `b`.`jenis_fungsi`
FROM `xi_sa_fungsi` `a`
INNER JOIN `xi_sa_jenis_fungsi` `b` ON `a`.`id_jenis_fungsi` = `b`.`id_jenis_fungsi`
ORDER BY `a`.`id_fungsi` ASC
 LIMIT 10
ERROR - 2022-11-14 21:06:27 --> Query error: Unknown column 'a.id_level_akses' in 'field list' - Invalid query: SELECT `a`.`id_fungsi`, `a`.`label_fungsi`, `a`.`nama_fungsi`, `a`.`url_fungsi`, `a`.`deskripsi_fungsi`, `a`.`id_jenis_fungsi`, `a`.`id_level_akses`, `a`.`id_status`, `b`.`jenis_fungsi`
FROM `xi_sa_fungsi` `a`
INNER JOIN `xi_sa_jenis_fungsi` `b` ON `a`.`id_jenis_fungsi` = `b`.`id_jenis_fungsi`
ORDER BY `a`.`id_fungsi` ASC
 LIMIT 10
ERROR - 2022-11-14 21:44:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '::varchar, ', ') AS group_user
FROM `xi_sa_users` `a`
LEFT JOIN `xi_sa_users_...' at line 1 - Invalid query: SELECT `a`.`id_users`, `a`.`token`, `a`.`unit_id`, `a`.`username`, `a`.`password`, `a`.`email`, `a`.`fullname`, `a`.`foto_profile`, `a`.`blokir`, `a`.`id_status`, string_agg(b.id_group::varchar, ', ') AS group_user
FROM `xi_sa_users` `a`
LEFT JOIN `xi_sa_users_privileges` `b` ON `a`.`id_users` = `b`.`id_users`
WHERE `a`.`token` = '4A3729CA5A1593D72E67FF0FE31185D1'
AND `b`.`id_status` = 1
GROUP BY `a`.`id_users`
ORDER BY `a`.`id_users` ASC
 LIMIT 1
ERROR - 2022-11-14 23:06:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '::varchar, ', ') AS group_user
FROM `xi_sa_users` `a`
LEFT JOIN `xi_sa_users_...' at line 1 - Invalid query: SELECT `a`.`id_users`, `a`.`token`, `a`.`unit_id`, `a`.`username`, `a`.`password`, `a`.`email`, `a`.`fullname`, `a`.`foto_profile`, `a`.`blokir`, `a`.`id_status`, string_agg(b.id_group::varchar, ', ') AS group_user
FROM `xi_sa_users` `a`
LEFT JOIN `xi_sa_users_privileges` `b` ON `a`.`id_users` = `b`.`id_users`
WHERE `a`.`token` = '4A3729CA5A1593D72E67FF0FE31185D1'
AND `b`.`id_status` = 1
GROUP BY `a`.`id_users`
ORDER BY `a`.`id_users` ASC
 LIMIT 1
ERROR - 2022-11-14 23:06:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '::varchar, ', ') AS group_user
FROM `xi_sa_users` `a`
LEFT JOIN `xi_sa_users_...' at line 1 - Invalid query: SELECT `a`.`id_users`, `a`.`token`, `a`.`unit_id`, `a`.`username`, `a`.`password`, `a`.`email`, `a`.`fullname`, `a`.`foto_profile`, `a`.`blokir`, `a`.`id_status`, string_agg(b.id_group::varchar, ', ') AS group_user
FROM `xi_sa_users` `a`
LEFT JOIN `xi_sa_users_privileges` `b` ON `a`.`id_users` = `b`.`id_users`
WHERE `a`.`token` = '4A3729CA5A1593D72E67FF0FE31185D1'
AND `b`.`id_status` = 1
GROUP BY `a`.`id_users`
ORDER BY `a`.`id_users` ASC
 LIMIT 1
ERROR - 2022-11-14 23:09:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7430\htdocs\clear_engine_cuba\application\helpers\asset_helper.php 132
ERROR - 2022-11-14 23:09:36 --> Severity: Warning --> array_multisort(): Argument #3 is expected to be an array or a sort flag C:\xampp7430\htdocs\clear_engine_cuba\application\helpers\asset_helper.php 136
ERROR - 2022-11-14 23:09:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7430\htdocs\clear_engine_cuba\application\modules\manajemen\models\Model_users.php 436
