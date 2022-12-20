<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-05-27 02:41:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\auth\models\Model_auth_signin.php 184
ERROR - 2022-05-27 02:41:36 --> 404 Page Not Found: /index
ERROR - 2022-05-27 02:41:36 --> 404 Page Not Found: /index
ERROR - 2022-05-27 02:41:37 --> 404 Page Not Found: /index
ERROR - 2022-05-27 02:41:37 --> 404 Page Not Found: /index
ERROR - 2022-05-27 02:41:37 --> 404 Page Not Found: /index
ERROR - 2022-05-27 02:41:37 --> 404 Page Not Found: /index
ERROR - 2022-05-27 02:58:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.eselon_id does not exist
LINE 1: SELECT &quot;a&quot;.&quot;id&quot;, &quot;a&quot;.&quot;ta_periode_id&quot;, &quot;a&quot;.&quot;eselon_id&quot;, &quot;a&quot;.&quot;...
                                              ^ C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 02:58:10 --> Query error: ERROR:  column a.eselon_id does not exist
LINE 1: SELECT "a"."id", "a"."ta_periode_id", "a"."eselon_id", "a"."...
                                              ^ - Invalid query: SELECT "a"."id", "a"."ta_periode_id", "a"."eselon_id", "a"."eselon_nm", "a"."asn", "a"."jabatan_es"
FROM "ta_periode_jabatan" "a"
ORDER BY "a"."eselon_id" ASC
 LIMIT 10
ERROR - 2022-05-27 02:58:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.jabatan_es does not exist
LINE 1: ...id&quot;, &quot;a&quot;.&quot;eselon_id&quot;, &quot;a&quot;.&quot;eselon_nm&quot;, &quot;a&quot;.&quot;asn&quot;, &quot;a&quot;.&quot;jabat...
                                                             ^ C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 02:58:30 --> Query error: ERROR:  column a.jabatan_es does not exist
LINE 1: ...id", "a"."eselon_id", "a"."eselon_nm", "a"."asn", "a"."jabat...
                                                             ^ - Invalid query: SELECT "a"."id", "a"."ta_periode_id", "a"."eselon_id", "a"."eselon_nm", "a"."asn", "a"."jabatan_es"
FROM "ta_periode_eselon" "a"
ORDER BY "a"."eselon_id" ASC
 LIMIT 10
ERROR - 2022-05-27 02:58:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.jabatan_es does not exist
LINE 1: ...id&quot;, &quot;a&quot;.&quot;eselon_id&quot;, &quot;a&quot;.&quot;eselon_nm&quot;, &quot;a&quot;.&quot;asn&quot;, &quot;a&quot;.&quot;jabat...
                                                             ^ C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 02:58:45 --> Query error: ERROR:  column a.jabatan_es does not exist
LINE 1: ...id", "a"."eselon_id", "a"."eselon_nm", "a"."asn", "a"."jabat...
                                                             ^ - Invalid query: SELECT "a"."id", "a"."ta_periode_id", "a"."eselon_id", "a"."eselon_nm", "a"."asn", "a"."jabatan_es"
FROM "ta_periode_eselon" "a"
ORDER BY "a"."eselon_id" ASC
 LIMIT 10
ERROR - 2022-05-27 03:00:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.jabatan_es does not exist
LINE 1: ...id&quot;, &quot;a&quot;.&quot;eselon_id&quot;, &quot;a&quot;.&quot;eselon_nm&quot;, &quot;a&quot;.&quot;asn&quot;, &quot;a&quot;.&quot;jabat...
                                                             ^ C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 03:00:30 --> Query error: ERROR:  column a.jabatan_es does not exist
LINE 1: ...id", "a"."eselon_id", "a"."eselon_nm", "a"."asn", "a"."jabat...
                                                             ^ - Invalid query: SELECT "a"."id", "a"."ta_periode_id", "a"."eselon_id", "a"."eselon_nm", "a"."asn", "a"."jabatan_es"
FROM "ta_periode_eselon" "a"
ORDER BY "a"."eselon_id" ASC
 LIMIT 10
ERROR - 2022-05-27 03:09:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type integer: &quot;id_eselon &lt;&gt;&quot;
LINE 3: WHERE 0 = 'id_eselon &lt;&gt;'
                  ^ C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 03:09:39 --> Query error: ERROR:  invalid input syntax for type integer: "id_eselon <>"
LINE 3: WHERE 0 = 'id_eselon <>'
                  ^ - Invalid query: SELECT *
FROM "ref_eselon"
WHERE 0 = 'id_eselon <>'
AND 1 = 99
ERROR - 2022-05-27 03:09:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type integer: &quot;id_eselon &lt;&gt;&quot;
LINE 3: WHERE 0 = 'id_eselon &lt;&gt;'
                  ^ C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 03:09:58 --> Query error: ERROR:  invalid input syntax for type integer: "id_eselon <>"
LINE 3: WHERE 0 = 'id_eselon <>'
                  ^ - Invalid query: SELECT *
FROM "ref_eselon"
WHERE 0 = 'id_eselon <>'
AND 1 = '99'
ERROR - 2022-05-27 03:10:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type integer: &quot;id_eselon !=&quot;
LINE 3: WHERE 0 = 'id_eselon !='
                  ^ C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 03:10:21 --> Query error: ERROR:  invalid input syntax for type integer: "id_eselon !="
LINE 3: WHERE 0 = 'id_eselon !='
                  ^ - Invalid query: SELECT *
FROM "ref_eselon"
WHERE 0 = 'id_eselon !='
AND 1 = 99
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1566
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> sort() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1567
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1579
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1584
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1579
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1584
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1579
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1584
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1579
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1584
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1579
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1584
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1579
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1584
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_keys() expects parameter 1 to be array, int given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_keys() expects parameter 1 to be array, int given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> ksort() expects parameter 1 to be array, int given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1579
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1584
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1595
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: INSERT INTO &quot;ta_periode_eselon&quot; () VALUES (), (), (), (), ()...
                                         ^ C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 03:28:31 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: INSERT INTO "ta_periode_eselon" () VALUES (), (), (), (), ()...
                                         ^ - Invalid query: INSERT INTO "ta_periode_eselon" () VALUES (), (), (), (), (), (), ()
ERROR - 2022-05-27 03:28:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp7428\htdocs\talent_pool\system\core\Exceptions.php:271) C:\xampp7428\htdocs\talent_pool\system\core\Common.php 570
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1566
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> sort() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1567
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1579
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1584
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1579
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1584
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1579
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1584
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1579
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1584
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1579
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1584
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1579
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1584
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_keys() expects parameter 1 to be array, int given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_keys() expects parameter 1 to be array, int given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1572
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> ksort() expects parameter 1 to be array, int given C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1579
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1584
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\system\database\DB_query_builder.php 1595
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: INSERT INTO &quot;ta_periode_eselon&quot; () VALUES (), (), (), (), ()...
                                         ^ C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 03:31:16 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: INSERT INTO "ta_periode_eselon" () VALUES (), (), (), (), ()...
                                         ^ - Invalid query: INSERT INTO "ta_periode_eselon" () VALUES (), (), (), (), (), (), ()
ERROR - 2022-05-27 03:31:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp7428\htdocs\talent_pool\system\core\Exceptions.php:271) C:\xampp7428\htdocs\talent_pool\system\core\Common.php 570
ERROR - 2022-05-27 03:54:54 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:54:55 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:54:55 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:54:56 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:54:56 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:54:57 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:54:57 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:54:58 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:54:58 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:54:58 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:54:59 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:54:59 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:00 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:01 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:02 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:02 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:03 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:03 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:04 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:04 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:05 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:05 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:06 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:06 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:07 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:08 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:09 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:10 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:10 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:11 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:11 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:12 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:13 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:13 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:14 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:14 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:15 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:36 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:36 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:37 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:38 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:38 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:39 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:39 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:40 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:40 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:41 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:41 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:41 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:42 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 03:55:42 --> Severity: Notice --> Undefined index: reult C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:18 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nip C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 132
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: golru_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 134
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Trying to get property 'bobot' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 278
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_pendidikan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 135
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_diklat_kepemimpinan C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 136
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: data_bimtek C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 137
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_pemetaan_potensi C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 140
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_penilaian_kinerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 141
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: nilai_sasaran_kerja C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 142
ERROR - 2022-05-27 04:03:19 --> Severity: Notice --> Undefined index: riwayat_hukuman_disiplin C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 143
ERROR - 2022-05-27 04:07:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;ta_periode_eselon_id&quot; of relation &quot;ta_periode_jabatan_asn&quot; does not exist
LINE 1: ...hukuman&quot;, &quot;ny_penilaian&quot;, &quot;ny_sasaran&quot;, &quot;posisi&quot;, &quot;ta_period...
                                                             ^ C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 04:07:19 --> Query error: ERROR:  column "ta_periode_eselon_id" of relation "ta_periode_jabatan_asn" does not exist
LINE 1: ...hukuman", "ny_penilaian", "ny_sasaran", "posisi", "ta_period...
                                                             ^ - Invalid query: INSERT INTO "ta_periode_jabatan_asn" ("data", "jumlah", "nilai_x", "nilai_y", "nip", "nx_bimtek", "nx_diklat", "nx_pangkat", "nx_pemetaan", "nx_pendidikan", "nx_pengalaman", "ny_hukuman", "ny_penilaian", "ny_sasaran", "posisi", "ta_periode_eselon_id", "ta_periode_id", "tot_x", "tot_y") VALUES ( E'{"pns_id":"8350","sapk_id":"A8ACA7BF201A3912E040640A040269BB","opd_id":"18","opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","sub_opd_id":"18","sub_opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","jns_jbtn_id":"1","jns_jbtn_nm":"Struktural","jabatan_id":"315","jabatan_nm":"KEPALA BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","nip":"196405011993031006","nama_pns":"Drs. BUSTAVIDIA, MM.","tmpt_lahir":"SELABANG","tgl_lahir":"1964-05-01","gender_id":"1","gender_nm":"LAKI-LAKI","agama_id":"1","agama_nm":"ISLAM","karpeg":"G158724","cpns_pns_id":"2","cpns_pns_nm":"PNS","status_pns_id":"1","status_pns_nm":"PEGAWAI AKTIF","alamat":"KOMPL GRIYA MAWAR SEMBADA INDAH BLOK G NO 8 JL.  JHONI ANWAR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\r\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\n LAPAI PADANG","kawin_id":"1","kawin_nm":"KAWIN","golru_id":"43","golru_nm":"IV\\/c","pangkat":"Pembina Utama Muda","tmt_golru":"2020-10-01","eselon_id":"21","eselon_nm":"II.A","jenjang_id":"0","jenjang_nm":"-","nilai_pemetaan_potensi":"73","nilai_penilaian_kinerja":"79.00","nilai_sasaran_kerja":"","data_pendidikan":[{"id":"39999","jenjang":"10","nm_jenjang":"S.1","jurusan":"P.IPS","sekolah":"STIKIP DB FAKULTAS T","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""},{"id":"39996","jenjang":"11","nm_jenjang":"S.2","jurusan":"MAGISTER MANAGEMEN","sekolah":"PROG.MAGISTER MANAJE","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""}],"data_diklat_kepemimpinan":[{"id":"8072","diklat":"14","nm_diklat":"DIKLATPIM Tk.III","mulai":"2013-03-13","selesai":"2013-05-03","no_sk":"020\\/DIKLATPIM TK.III\\/ XXIV- PROV\\/BANDIKLAT-2013","tgl_sk":"2013-05-03"}],"data_bimtek":[{"bimtek":"TENAGA TEKNIS PENERBIDAN","mulai":"1995-09-18","selesai":"1995-10-17","no_sk":"951280","tgl_sk":"1995-10-17"},{"bimtek":"SPAK","mulai":"1997-08-18","selesai":"1997-08-22","no_sk":"6310\\/CI\\/KP\\/1997","tgl_sk":"1997-08-22"},{"bimtek":"FUNGSI BENPRO","mulai":"2003-06-29","selesai":"2003-07-05","no_sk":"321.\\/108-2\\/MN-2003","tgl_sk":"2003-07-05"},{"bimtek":"PIM & BENPRO DIK KANWIL P7K","mulai":"1996-05-08","selesai":"1996-05-11","no_sk":"0746\\/I08\\/PP\\/96","tgl_sk":"1996-05-11"}],"data_pengalaman_kerja":[],"riwayat_hukuman_disiplin":[{"id":"13","jenis_hd":"RGN","no_sk":"862\\/2183\\/BKD-2020","tgl_sk":"2020-04-27","tmt_hd":"2020-04-27","tgl_akhir":"2020-04-27","masa":"0 Tahun 0 Bulan"}]}',8.82,5.22,3.6,'196405011993031006',1,3,'2',20,2,1,5,15,0,5,'1','12',29,20), ( E'{"pns_id":"6031","sapk_id":"A8ACA7BE10683912E040640A040269BB","opd_id":"18","opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","sub_opd_id":"18","sub_opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","jns_jbtn_id":"3","jns_jbtn_nm":"Fungsional Tertentu","jabatan_id":"83","jabatan_nm":"Widyaiswara","nip":"195904251987031003","nama_pns":"Drs. WELDI BAHARI, M.Pd.","tmpt_lahir":"BUKITTINGGI","tgl_lahir":"1959-04-25","gender_id":"1","gender_nm":"LAKI-LAKI","agama_id":"1","agama_nm":"ISLAM","karpeg":"E.571535","cpns_pns_id":"2","cpns_pns_nm":"PNS","status_pns_id":"1","status_pns_nm":"PEGAWAI AKTIF","alamat":"JL.ALAI TIMUR NO.8 PADANG","kawin_id":"1","kawin_nm":"KAWIN","golru_id":"45","golru_nm":"IV\\/e","pangkat":"Pembina Utama","tmt_golru":"2020-10-01","eselon_id":"99","eselon_nm":"-","jenjang_id":"08","jenjang_nm":"UTAMA","nilai_pemetaan_potensi":0,"nilai_penilaian_kinerja":0,"nilai_sasaran_kerja":"","data_pendidikan":[{"id":"4489","jenjang":"10","nm_jenjang":"S.1","jurusan":"EKONOMI PEMBANGUNAN","sekolah":"IKIP PTS","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""},{"id":"191","jenjang":"11","nm_jenjang":"S.2","jurusan":"BIDANG PENDIDIKAN","sekolah":"UNP PADANG","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""}],"data_diklat_kepemimpinan":[],"data_bimtek":[{"bimtek":"RAKOR KASI KURIKULUM","mulai":"1996-11-11","selesai":"1996-11-15","no_sk":"1411\\/C.20\\/PP.I\\/1996","tgl_sk":"1996-11-15"},{"bimtek":"PEMERIKSA","mulai":"1993-02-11","selesai":"1993-02-15","no_sk":"","tgl_sk":"1993-02-15"},{"bimtek":"PENATARAN GURU UPW","mulai":"1992-01-11","selesai":"1992-01-10","no_sk":"ZLM.920986","tgl_sk":"1992-01-10"}],"data_pengalaman_kerja":[],"riwayat_hukuman_disiplin":[]}',3.06,1.26,1.8,'195904251987031003',1,0,'3',0,2,1,10,0,0,1,'1','12',7,10), ( E'{"pns_id":"6146","sapk_id":"A8ACA7B7F4003912E040640A040269BB","opd_id":"18","opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","sub_opd_id":"18","sub_opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","jns_jbtn_id":"3","jns_jbtn_nm":"Fungsional Tertentu","jabatan_id":"83","jabatan_nm":"Widyaiswara","nip":"195907231986032003","nama_pns":"Ir. EVA MANJAS, MP.","tmpt_lahir":"AGAM","tgl_lahir":"1959-07-23","gender_id":"2","gender_nm":"PEREMPUAN","agama_id":"1","agama_nm":"ISLAM","karpeg":"E053181","cpns_pns_id":"2","cpns_pns_nm":"PNS","status_pns_id":"1","status_pns_nm":"PEGAWAI AKTIF","alamat":"JL. TIUNG NO. 18 AIR TAWAR","kawin_id":"1","kawin_nm":"KAWIN","golru_id":"44","golru_nm":"IV\\/d","pangkat":"Pembina Utama Madya","tmt_golru":"2016-04-01","eselon_id":"99","eselon_nm":"-","jenjang_id":"08","jenjang_nm":"UTAMA","nilai_pemetaan_potensi":0,"nilai_penilaian_kinerja":0,"nilai_sasaran_kerja":"","data_pendidikan":[{"id":"3016","jenjang":"10","nm_jenjang":"S.1","jurusan":"HAMA DAN PENYAKIT TANAMAN","sekolah":"UNAND","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""},{"id":"253","jenjang":"11","nm_jenjang":"S.2","jurusan":"BIDANG PERTANIAN","sekolah":"UNAND","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""}],"data_diklat_kepemimpinan":[],"data_bimtek":[],"data_pengalaman_kerja":[],"riwayat_hukuman_disiplin":[]}',2.88,1.08,1.8,'195907231986032003',0,0,'3',0,2,1,10,0,0,1,'1','12',6,10), ( E'{"pns_id":"6789","sapk_id":"A8ACA7C4DA903912E040640A040269BB","opd_id":"18","opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","sub_opd_id":"18","sub_opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","jns_jbtn_id":"3","jns_jbtn_nm":"Fungsional Tertentu","jabatan_id":"83","jabatan_nm":"Widyaiswara","nip":"196012181992021001","nama_pns":"Ir. NASRIDAL PATRIA, MM, M.Hum.","tmpt_lahir":"PADANG","tgl_lahir":"1960-12-18","gender_id":"1","gender_nm":"LAKI-LAKI","agama_id":"1","agama_nm":"ISLAM","karpeg":"661\\/KEP\\/KARPEG\\/1994","cpns_pns_id":"2","cpns_pns_nm":"PNS","status_pns_id":"1","status_pns_nm":"PEGAWAI AKTIF","alamat":"Jln.CEMARA No.3 RT\\/RW 002\\/001 LOLONG PADANG UTARA-SUMBAR 25136 Telp. 7054791","kawin_id":"1","kawin_nm":"KAWIN","golru_id":"44","golru_nm":"IV\\/d","pangkat":"Pembina Utama Madya","tmt_golru":"2021-04-01","eselon_id":"99","eselon_nm":"-","jenjang_id":"08","jenjang_nm":"UTAMA","nilai_pemetaan_potensi":0,"nilai_penilaian_kinerja":0,"nilai_sasaran_kerja":"","data_pendidikan":[{"id":"39553","jenjang":"10","nm_jenjang":"S.1","jurusan":"TEKNIK SIPIL","sekolah":"USU","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""},{"id":"39555","jenjang":"11","nm_jenjang":"S.2","jurusan":"HUKUM BISNIS","sekolah":"EKASAKTI","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""}],"data_diklat_kepemimpinan":[],"data_bimtek":[{"bimtek":"SURVEY PROGRAM","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"1993-12-15"},{"bimtek":"PENGADAAN BARANG DAN JASA","mulai":"2004-02-16","selesai":"2004-02-19","no_sk":"139\\/TMKP\\/LAN\\/II\\/2004","tgl_sk":"2004-02-19"},{"bimtek":"ANGGARAN KINERJA","mulai":"2003-06-02","selesai":"2003-06-06","no_sk":"070352002003","tgl_sk":"2003-06-06"},{"bimtek":"TOT KAMPANYE PUBLIK","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"0000-00-00"},{"bimtek":"MANAJEMEN DATA","mulai":"2002-10-01","selesai":"2002-10-02","no_sk":"","tgl_sk":"0000-00-00"},{"bimtek":"RURAL INFRASTRUKTUR PLAN","mulai":"2004-09-21","selesai":"2004-09-24","no_sk":"","tgl_sk":"0000-00-00"},{"bimtek":"NSPM PENATAAN RUANG WILAYAH","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"0000-00-00"},{"bimtek":"DIKLAT SPHD","mulai":"2009-09-07","selesai":"2009-09-11","no_sk":"SERT-47414\\/D2\\/2009","tgl_sk":"2009-02-11"},{"bimtek":"P4","mulai":"1993-01-18","selesai":"1993-02-03","no_sk":"1035","tgl_sk":"1993-02-03"}],"data_pengalaman_kerja":[],"riwayat_hukuman_disiplin":[]}',3.24,1.44,1.8,'196012181992021001',2,0,'3',0,2,1,10,0,0,1,'1','12',8,10), ( E'{"pns_id":"9398","sapk_id":"A8ACA7B836CC3912E040640A040269BB","opd_id":"18","opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","sub_opd_id":"18","sub_opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","jns_jbtn_id":"3","jns_jbtn_nm":"Fungsional Tertentu","jabatan_id":"83","jabatan_nm":"Widyaiswara","nip":"196701011988091001","nama_pns":"DR. RAHMEDI YONIS, S.Sos, M.Si.","tmpt_lahir":"SOLOK","tgl_lahir":"1967-01-01","gender_id":"1","gender_nm":"LAKI-LAKI","agama_id":"1","agama_nm":"ISLAM","karpeg":"E.636685","cpns_pns_id":"2","cpns_pns_nm":"PNS","status_pns_id":"1","status_pns_nm":"PEGAWAI AKTIF","alamat":"KOMP. KEHAKIMAN BLOK H\\/14 KEL. CANGKEH PADANG","kawin_id":"1","kawin_nm":"KAWIN","golru_id":"43","golru_nm":"IV\\/c","pangkat":"Pembina Utama Muda","tmt_golru":"2018-04-01","eselon_id":"99","eselon_nm":"-","jenjang_id":"07","jenjang_nm":"MADYA","nilai_pemetaan_potensi":"80","nilai_penilaian_kinerja":"78.00","nilai_sasaran_kerja":"","data_pendidikan":[{"id":"700","jenjang":"10","nm_jenjang":"S.1","jurusan":"ADMINISTRASI NEGARA","sekolah":"UNBRAW","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""},{"id":"142","jenjang":"11","nm_jenjang":"S.2","jurusan":"PERENC.PEMB.REGIONAL","sekolah":"UNAND","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""},{"id":"40287","jenjang":"12","nm_jenjang":"S.3","jurusan":"PEMBANGUNAN PERTANIAN","sekolah":"UNAND","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""}],"data_diklat_kepemimpinan":[],"data_bimtek":[{"bimtek":"MMST","mulai":"2000-11-20","selesai":"2000-11-24","no_sk":"080301112000","tgl_sk":"2000-11-24"},{"bimtek":"PERENCANAAN STRATEGIK","mulai":"2000-01-17","selesai":"2000-01-20","no_sk":"","tgl_sk":"0000-00-00"},{"bimtek":"INTENSIVE ENGLISH","mulai":"2000-08-07","selesai":"2000-09-07","no_sk":"0701520000","tgl_sk":"2000-09-07"},{"bimtek":"MPPD PNS","mulai":"2000-11-13","selesai":"2000-11-17","no_sk":"","tgl_sk":"0000-00-00"},{"bimtek":"P.4 POLA 100 JAM","mulai":"1996-11-30","selesai":"0000-00-00","no_sk":"","tgl_sk":"0000-00-00"},{"bimtek":"PENILISAN TENSIS DAN ARTIKEL ILMIAH","mulai":"1996-10-06","selesai":"1996-10-06","no_sk":"","tgl_sk":"1996-10-06"},{"bimtek":"METODOLOGI PENELITIAN SOSIAL","mulai":"1994-12-10","selesai":"1994-12-12","no_sk":"022\\/SK\\/SM3\\/U\\/014\\/PDM\\/XI94","tgl_sk":"1994-12-12"},{"bimtek":"AKUNTANSI KOPERASI","mulai":"1989-12-11","selesai":"1989-12-15","no_sk":"030\\/SKET\\/DEKOPINDA","tgl_sk":"1989-12-15"},{"bimtek":"P.4 POLA 45 JAM","mulai":"1987-09-22","selesai":"1987-09-26","no_sk":"0329\\/45","tgl_sk":"1987-09-27"}],"data_pengalaman_kerja":[],"riwayat_hukuman_disiplin":[]}',11.34,6.84,4.5,'196701011988091001',2,0,'2',30,3,1,10,15,0,8,'1','12',38,25), ( E'{"pns_id":"7550","sapk_id":"A8ACA7BC4A4D3912E040640A040269BB","opd_id":"18","opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","sub_opd_id":"18","sub_opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","jns_jbtn_id":"3","jns_jbtn_nm":"Fungsional Tertentu","jabatan_id":"83","jabatan_nm":"Widyaiswara","nip":"196209031992032002","nama_pns":"Ir. SUNEVA BASRI, M.Si.","tmpt_lahir":"50 KOTA","tgl_lahir":"1962-09-03","gender_id":"2","gender_nm":"PEREMPUAN","agama_id":"1","agama_nm":"ISLAM","karpeg":"F368150","cpns_pns_id":"2","cpns_pns_nm":"PNS","status_pns_id":"1","status_pns_nm":"PEGAWAI AKTIF","alamat":"KOMP. KHARISMATAMA G\\/18","kawin_id":"1","kawin_nm":"KAWIN","golru_id":"43","golru_nm":"IV\\/c","pangkat":"Pembina Utama Muda","tmt_golru":"2020-10-01","eselon_id":"99","eselon_nm":"-","jenjang_id":"07","jenjang_nm":"MADYA","nilai_pemetaan_potensi":"63","nilai_penilaian_kinerja":"86.00","nilai_sasaran_kerja":"","data_pendidikan":[{"id":"2948","jenjang":"10","nm_jenjang":"S.1","jurusan":"PERIKANAN","sekolah":"BUNG HATTA","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""},{"id":"41850","jenjang":"11","nm_jenjang":"S.2","jurusan":"PENGELOLAAN SUMBER DAYA PERAIRAN, PESISI","sekolah":"UNIVERSITAS BUNG HATTA","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""}],"data_diklat_kepemimpinan":[],"data_bimtek":[],"data_pengalaman_kerja":[],"riwayat_hukuman_disiplin":[]}',8.1,2.7,5.4,'196209031992032002',0,0,'2',10,2,1,10,20,0,2,'1','12',15,30), ( E'{"pns_id":"9187","sapk_id":"A8ACA7B7DC0C3912E040640A040269BB","opd_id":"18","opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","sub_opd_id":"18","sub_opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","jns_jbtn_id":"3","jns_jbtn_nm":"Fungsional Tertentu","jabatan_id":"83","jabatan_nm":"Widyaiswara","nip":"196606151992031002","nama_pns":"Drs. HAFIZURRAHMAN, M.A.","tmpt_lahir":"TALANG BABUNGO","tgl_lahir":"1966-06-15","gender_id":"1","gender_nm":"LAKI-LAKI","agama_id":"1","agama_nm":"ISLAM","karpeg":"F.412139","cpns_pns_id":"2","cpns_pns_nm":"PNS","status_pns_id":"1","status_pns_nm":"PEGAWAI AKTIF","alamat":"Jln. FOKER No.18 DADOK TUNGGUL HITAM,KOTO TANGAH RT.02 RW.03 PADANG-SUMBAR\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\nMobile:08126645990","kawin_id":"1","kawin_nm":"KAWIN","golru_id":"43","golru_nm":"IV\\/c","pangkat":"Pembina Utama Muda","tmt_golru":"2020-10-01","eselon_id":"99","eselon_nm":"-","jenjang_id":"07","jenjang_nm":"MADYA","nilai_pemetaan_potensi":"69","nilai_penilaian_kinerja":"74.00","nilai_sasaran_kerja":"","data_pendidikan":[{"id":"1009","jenjang":"10","nm_jenjang":"S.1","jurusan":"ADMINISTRASI NEGARA","sekolah":"USU MEDAN","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""},{"id":"45619","jenjang":"11","nm_jenjang":"S.2","jurusan":"Dakwah dan pengembangan masyarakat islam","sekolah":"IAIN Imam Bonjol","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""}],"data_diklat_kepemimpinan":[{"id":"178","diklat":"14","nm_diklat":"DIKLATPIM Tk.III","mulai":"2003-05-27","selesai":"2003-07-25","no_sk":"85\\/DIKLAT  PIM TKIII\\/LAN\\/","tgl_sk":"2003-07-25"}],"data_bimtek":[{"bimtek":"BIMTEK PERENCANA DAERAH","mulai":"2003-04-28","selesai":"2003-05-10","no_sk":"10050303","tgl_sk":"2003-05-10"},{"bimtek":"LEGAL DRAFTING","mulai":"2002-07-03","selesai":"2002-07-04","no_sk":"\\/30\\/HUK-2002","tgl_sk":"2002-07-08"},{"bimtek":"BINTEK KEPMENDAGRI 2008 TH 2002","mulai":"2003-04-28","selesai":"2003-05-10","no_sk":"10050303","tgl_sk":"2003-05-10"},{"bimtek":"DIKLAT PWG DAN ANALISIS GENDER","mulai":"2004-01-19","selesai":"2004-01-23","no_sk":"","tgl_sk":"0000-00-00"},{"bimtek":"HUMAN RIGH COMMUNITY MANAJEMEN","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"0000-00-00"},{"bimtek":"P4","mulai":"1996-12-09","selesai":"1996-12-24","no_sk":"9953\\/BP.7-SB\\/1996","tgl_sk":"1999-12-24"},{"bimtek":"DIKLAT PRAJABATAN TINGKAT III","mulai":"1992-12-15","selesai":"1992-12-19","no_sk":"-","tgl_sk":"1992-12-19"},{"bimtek":"DIKLAT DASAR PENERANGAN II","mulai":"1996-02-26","selesai":"1996-03-26","no_sk":"-","tgl_sk":"1996-03-26"},{"bimtek":"PENATARAN P4 POLA 120 JAM ANGKATAN XXXIX","mulai":"1996-12-09","selesai":"1996-12-24","no_sk":"-","tgl_sk":"1996-12-24"},{"bimtek":"DIKLAT ADUM","mulai":"1999-02-04","selesai":"1999-03-15","no_sk":"-","tgl_sk":"1999-03-15"},{"bimtek":"DIKLAT FUNGSIONAL AKD","mulai":"2002-08-13","selesai":"2018-01-15","no_sk":"-","tgl_sk":"2018-01-15"},{"bimtek":"DIKLAT KEPMENDAGRI NO. 29 TAHUN 2002","mulai":"2003-04-28","selesai":"2003-05-10","no_sk":"-","tgl_sk":"2003-05-10"},{"bimtek":"PIM III","mulai":"2003-05-27","selesai":"2003-07-25","no_sk":"-","tgl_sk":"2003-07-25"},{"bimtek":"DIKLAT GENDER MAINSTREAMING ANALYSIS SHORT COURSE IN INDONESIA","mulai":"2004-01-19","selesai":"2004-01-23","no_sk":"-","tgl_sk":"2004-01-23"},{"bimtek":"TOT WIDYAISWARA","mulai":"2004-05-10","selesai":"2004-05-28","no_sk":"-","tgl_sk":"2004-05-28"},{"bimtek":"PELATIHAN COMMUNITY ENGAGEMENTS SKILLS FOR PROVINCIAL\\/DISTRICT HUMAN RIGHTS COMMITTEES","mulai":"2005-11-28","selesai":"2005-12-03","no_sk":"-","tgl_sk":"2005-12-03"},{"bimtek":"PELATIHAN LITERASI PENGENALAN DASAR TEKNOLOGI INFORMASI DAN KOMUNIKASI (TIK) BAGI APARATUR PEMERINTAH DAERAH","mulai":"2007-05-07","selesai":"2007-05-09","no_sk":"-","tgl_sk":"2007-05-09"},{"bimtek":"PELATIHAN DAN PENTALOKA NASIONAL PENGELOLAAN PROGRAM KELUARGA BERENCANA BAGI KEPALA SKPD-KB PROVINSI DAN KABUPATEN\\/KOTA","mulai":"2009-03-22","selesai":"2009-03-25","no_sk":"-","tgl_sk":"2009-03-25"},{"bimtek":"TOT PROGRAM JAMINAN KETERSEDIAAN KONTRASEPSI BAGI TIM FASILISATOR JKK PROVINSI","mulai":"2009-08-11","selesai":"2009-08-15","no_sk":"-","tgl_sk":"2009-08-15"},{"bimtek":"PELATIHAN PERANCANGAN PRODUK HUKUM DAERAH","mulai":"2002-07-03","selesai":"2002-07-04","no_sk":"-","tgl_sk":"2002-07-04"},{"bimtek":"DIKLAT KADER KARSINAL PENBITMASMED","mulai":"1995-10-04","selesai":"1995-10-05","no_sk":"-","tgl_sk":"1995-10-05"},{"bimtek":"TOT DAN OBSERVATION STUDY TOUR POSDAYA PROVINSI SUMATERA BARAT 2012","mulai":"2012-03-26","selesai":"2012-03-27","no_sk":"-","tgl_sk":"2012-03-27"},{"bimtek":"PELATIHAN PERENCANAAN DAN PENGANGGURAN RESPONSIF GENDER PENANGGULANGAN HIV DI INDONESIA","mulai":"2010-09-23","selesai":"2012-09-27","no_sk":"-","tgl_sk":"2012-09-27"},{"bimtek":"PELATIHAN PEMBERDAYAAN PEREMPUAN EKONOMI PRODUKTIF","mulai":"2013-03-12","selesai":"2013-03-16","no_sk":"-","tgl_sk":"2013-03-16"},{"bimtek":"DIKLAT TEKNIS REFORMASI BIROKRASI BAGI APARATUR DI LINGKUNGAN PEMROV. SUMBAR","mulai":"2014-04-03","selesai":"2014-04-22","no_sk":"-","tgl_sk":"2014-04-22"},{"bimtek":"DIKLAT CALON WIDYAISWARA","mulai":"2014-04-22","selesai":"2014-05-28","no_sk":"-","tgl_sk":"2014-05-28"},{"bimtek":"TOT KARYA TULIS ILMIAH BAGI WIDYAISWARA DI DINGKUNGAN PEMROV. SUMBAR","mulai":"2014-07-14","selesai":"2014-07-19","no_sk":"-","tgl_sk":"2014-07-19"},{"bimtek":"TOF DIKLAT PRAJABATAN","mulai":"2015-02-23","selesai":"2015-02-27","no_sk":"-","tgl_sk":"2015-02-27"},{"bimtek":"TOF DIKLAT KEPEMIMPINAN POLA BARU","mulai":"2015-04-20","selesai":"2015-04-24","no_sk":"-","tgl_sk":"2015-04-24"}],"data_pengalaman_kerja":[],"riwayat_hukuman_disiplin":[]}',8.1,3.6,4.5,'196606151992031002',2,3,'2',10,2,1,10,15,0,5,'1','12',20,25), ( E'{"pns_id":"10863","sapk_id":"A8ACA7C34DE03912E040640A040269BB","opd_id":"18","opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","sub_opd_id":"18","sub_opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","jns_jbtn_id":"3","jns_jbtn_nm":"Fungsional Tertentu","jabatan_id":"83","jabatan_nm":"Widyaiswara","nip":"197112281997011002","nama_pns":"DES INDRI PRIHANTONI, ST. MPPM.","tmpt_lahir":"BUKITTINGGI","tgl_lahir":"1971-12-28","gender_id":"1","gender_nm":"LAKI-LAKI","agama_id":"1","agama_nm":"ISLAM","karpeg":"G 436166","cpns_pns_id":"2","cpns_pns_nm":"PNS","status_pns_id":"1","status_pns_nm":"PEGAWAI AKTIF","alamat":"-","kawin_id":"1","kawin_nm":"KAWIN","golru_id":"43","golru_nm":"IV\\/c","pangkat":"Pembina Utama Muda","tmt_golru":"2020-10-01","eselon_id":"99","eselon_nm":"-","jenjang_id":"07","jenjang_nm":"MADYA","nilai_pemetaan_potensi":"76","nilai_penilaian_kinerja":"84.00","nilai_sasaran_kerja":"","data_pendidikan":[{"id":"40217","jenjang":"11","nm_jenjang":"S.2","jurusan":"MASTER OF PUBLIC POLICY AND MANAGEMENT","sekolah":"UNIVERSITY OF SMITHERN CALIFORNIA","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""}],"data_diklat_kepemimpinan":[],"data_bimtek":[],"data_pengalaman_kerja":[],"riwayat_hukuman_disiplin":[]}',8.82,4.32,4.5,'197112281997011002',0,0,'2',20,1,1,10,15,0,5,'1','12',24,25), ( E'{"pns_id":"8376","sapk_id":"A8ACA7C3EF6E3912E040640A040269BB","opd_id":"18","opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","sub_opd_id":"18","sub_opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","jns_jbtn_id":"3","jns_jbtn_nm":"Fungsional Tertentu","jabatan_id":"83","jabatan_nm":"Widyaiswara","nip":"196405151992021001","nama_pns":"Ir. H. MAIHALFRI, MT.","tmpt_lahir":"PADANG","tgl_lahir":"1964-05-15","gender_id":"1","gender_nm":"LAKI-LAKI","agama_id":"1","agama_nm":"ISLAM","karpeg":"F.298887","cpns_pns_id":"2","cpns_pns_nm":"PNS","status_pns_id":"1","status_pns_nm":"PEGAWAI AKTIF","alamat":"JL. TAMAN SISWA, NO. 1, PADANG TIMUR, PADANG UTARA, PADANG, SUMATERA BARAT","kawin_id":"1","kawin_nm":"KAWIN","golru_id":"43","golru_nm":"IV\\/c","pangkat":"Pembina Utama Muda","tmt_golru":"2020-10-01","eselon_id":"99","eselon_nm":"-","jenjang_id":"07","jenjang_nm":"MADYA","nilai_pemetaan_potensi":"56","nilai_penilaian_kinerja":"84.00","nilai_sasaran_kerja":"","data_pendidikan":[{"id":"2284","jenjang":"10","nm_jenjang":"S.1","jurusan":"ARSITEKTUR","sekolah":"UNIV.BUNG HATTA","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""},{"id":"2584","jenjang":"11","nm_jenjang":"S.2","jurusan":"PERENCANAAN WILAYAH\\/KOTA","sekolah":"UNIV.GAJAH MADA","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""}],"data_diklat_kepemimpinan":[],"data_bimtek":[{"bimtek":"LKPS","mulai":"1992-12-07","selesai":"1992-12-23","no_sk":"05\\/III\\/V\\/LPJ-1992","tgl_sk":"1992-12-23"},{"bimtek":"KEPEMIMPINAN KNPI","mulai":"1995-00-00","selesai":"1995-00-00","no_sk":"","tgl_sk":"1995-00-00"},{"bimtek":"PENATAAN RUANG SE-INDONESIA","mulai":"2000-00-00","selesai":"2000-00-00","no_sk":"","tgl_sk":"2000-00-00"},{"bimtek":"PENGEMBANGAN KAWASAN SENTRA PRODUKSI","mulai":"2001-00-00","selesai":"2001-00-00","no_sk":"","tgl_sk":"2001-00-00"},{"bimtek":"JARINGAN PENGAMAN SOSIAL MISKIN","mulai":"2002-00-00","selesai":"2002-00-00","no_sk":"","tgl_sk":"2002-00-00"},{"bimtek":"MANAJEMEN PROYEK","mulai":"2002-00-00","selesai":"2002-00-00","no_sk":"","tgl_sk":"2002-00-00"},{"bimtek":"PEJABAT INTI PROYEK","mulai":"2002-00-00","selesai":"2002-00-00","no_sk":"","tgl_sk":"2002-00-00"},{"bimtek":"KEPRES 80\\/2003","mulai":"2005-00-00","selesai":"2005-00-00","no_sk":"","tgl_sk":"2005-00-00"},{"bimtek":"TATA RUANG","mulai":"1998-01-24","selesai":"1998-03-02","no_sk":"","tgl_sk":"1998-03-02"},{"bimtek":"P3KT","mulai":"1994-02-07","selesai":"1994-02-14","no_sk":"19\\/WAKO\\/PP-1994","tgl_sk":"1994-02-14"},{"bimtek":"P-4 POLA 120 JAM","mulai":"1993-07-12","selesai":"1993-07-28","no_sk":"9060\\/BP.7-SR\\/93","tgl_sk":"1993-07-27"},{"bimtek":"APRESIASI NSPM RTRN PULAU","mulai":"2003-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"0000-00-00"}],"data_pengalaman_kerja":[],"riwayat_hukuman_disiplin":[]}',6.66,2.16,4.5,'196405151992021001',2,0,'2',5,2,1,10,15,0,2,'1','12',12,25), ( E'{"pns_id":"7423","sapk_id":"A8ACA7C310A13912E040640A040269BB","opd_id":"18","opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","sub_opd_id":"18","sub_opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","jns_jbtn_id":"3","jns_jbtn_nm":"Fungsional Tertentu","jabatan_id":"83","jabatan_nm":"Widyaiswara","nip":"196206101985031009","nama_pns":"ELIYUSMAN, SH., MM.","tmpt_lahir":"TANTAMAN - AGAM","tgl_lahir":"1962-06-10","gender_id":"1","gender_nm":"LAKI-LAKI","agama_id":"1","agama_nm":"ISLAM","karpeg":"D.255066","cpns_pns_id":"2","cpns_pns_nm":"PNS","status_pns_id":"1","status_pns_nm":"PEGAWAI AKTIF","alamat":"KOMP.PONDOK INDAH PERMAI BLOK A \\/ 14 PADANG","kawin_id":"1","kawin_nm":"KAWIN","golru_id":"43","golru_nm":"IV\\/c","pangkat":"Pembina Utama Muda","tmt_golru":"2021-04-01","eselon_id":"99","eselon_nm":"-","jenjang_id":"07","jenjang_nm":"MADYA","nilai_pemetaan_potensi":"65","nilai_penilaian_kinerja":"64.00","nilai_sasaran_kerja":"","data_pendidikan":[{"id":"1486","jenjang":"10","nm_jenjang":"S.1","jurusan":"HUKUM TATA NEGARA","sekolah":"UNIV.BUNGHATTTA","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""},{"id":"97854","jenjang":"11","nm_jenjang":"S.2","jurusan":"MAGISTER MANAJEMEN","sekolah":"-","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""},{"id":"42752","jenjang":"11","nm_jenjang":"S.2","jurusan":"MANAJEMEN","sekolah":"TIE KBP","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""}],"data_diklat_kepemimpinan":[{"id":"6174","diklat":"14","nm_diklat":"DIKLATPIM Tk.III","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"0000-00-00"}],"data_bimtek":[{"bimtek":"PENGADAAN BARANG DAN JASA","mulai":"2003-11-30","selesai":"2003-11-30","no_sk":"","tgl_sk":"2003-11-30"},{"bimtek":"AKUNTANSI. PEM","mulai":"1999-11-30","selesai":"1999-11-30","no_sk":"","tgl_sk":"1999-11-30"},{"bimtek":"PENGELOLAAN BARANG INVENTARIS KEUANGAN","mulai":"2002-11-30","selesai":"2002-11-30","no_sk":"","tgl_sk":"2002-11-30"}],"data_pengalaman_kerja":[],"riwayat_hukuman_disiplin":[]}',7.02,3.42,3.6,'196206101985031009',1,3,'2',10,2,1,10,10,0,5,'1','12',19,20), ( E'{"pns_id":"10104","sapk_id":"A8ACA7CA20413912E040640A040269BB","opd_id":"18","opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","sub_opd_id":"18","sub_opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","jns_jbtn_id":"3","jns_jbtn_nm":"Fungsional Tertentu","jabatan_id":"83","jabatan_nm":"Widyaiswara","nip":"196904272005012004","nama_pns":"Dr. HERITA DEWI, MM.","tmpt_lahir":"PADANG","tgl_lahir":"1969-04-27","gender_id":"2","gender_nm":"PEREMPUAN","agama_id":"1","agama_nm":"ISLAM","karpeg":"M 091476","cpns_pns_id":"2","cpns_pns_nm":"PNS","status_pns_id":"1","status_pns_nm":"PEGAWAI AKTIF","alamat":"Jl.","kawin_id":"1","kawin_nm":"KAWIN","golru_id":"43","golru_nm":"IV\\/c","pangkat":"Pembina Utama Muda","tmt_golru":"2021-10-01","eselon_id":"99","eselon_nm":"-","jenjang_id":"07","jenjang_nm":"MADYA","nilai_pemetaan_potensi":"74","nilai_penilaian_kinerja":"84.00","nilai_sasaran_kerja":"","data_pendidikan":[{"id":"42743","jenjang":"11","nm_jenjang":"S.2","jurusan":"MANAJEMEN","sekolah":"UNIVERSITAS NEGERI PADANG","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""},{"id":"97421","jenjang":"12","nm_jenjang":"S.3","jurusan":"DOKTOR","sekolah":"-","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""}],"data_diklat_kepemimpinan":[],"data_bimtek":[],"data_pengalaman_kerja":[],"riwayat_hukuman_disiplin":[]}',9,4.5,4.5,'196904272005012004',0,0,'2',20,2,1,10,15,0,5,'1','12',25,25), ( E'{"pns_id":"9135","sapk_id":"A8ACA7C7B3F83912E040640A040269BB","opd_id":"18","opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","sub_opd_id":"18","sub_opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","jns_jbtn_id":"3","jns_jbtn_nm":"Fungsional Tertentu","jabatan_id":"83","jabatan_nm":"Widyaiswara","nip":"196604271990032001","nama_pns":"LINDRAWATY, SKM.,Mm.","tmpt_lahir":"PADANG","tgl_lahir":"1966-04-27","gender_id":"2","gender_nm":"PEREMPUAN","agama_id":"1","agama_nm":"ISLAM","karpeg":"E853555","cpns_pns_id":"2","cpns_pns_nm":"PNS","status_pns_id":"1","status_pns_nm":"PEGAWAI AKTIF","alamat":"JL.RAYA LB.BEGALUNG NO.23 PADANG","kawin_id":"1","kawin_nm":"KAWIN","golru_id":"42","golru_nm":"IV\\/b","pangkat":"Pembina TK I","tmt_golru":"2021-10-01","eselon_id":"99","eselon_nm":"-","jenjang_id":"07","jenjang_nm":"MADYA","nilai_pemetaan_potensi":0,"nilai_penilaian_kinerja":0,"nilai_sasaran_kerja":"","data_pendidikan":[{"id":"98950","jenjang":"10","nm_jenjang":"S.1","jurusan":"KESEHATAN MASYARAKAT","sekolah":"UNIVERSITAS SUMATERA UTARA","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""},{"id":"98951","jenjang":"11","nm_jenjang":"S.2","jurusan":"MAGISTER MANAJEMEN","sekolah":"-","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""}],"data_diklat_kepemimpinan":[],"data_bimtek":[],"data_pengalaman_kerja":[],"riwayat_hukuman_disiplin":[]}',2.52,0.72,1.8,'196604271990032001',0,0,'1',0,2,1,10,0,0,1,'1','12',4,10), ( E'{"pns_id":"9871","sapk_id":"A8ACA7B882383912E040640A040269BB","opd_id":"18","opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","sub_opd_id":"18","sub_opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","jns_jbtn_id":"3","jns_jbtn_nm":"Fungsional Tertentu","jabatan_id":"83","jabatan_nm":"Widyaiswara","nip":"196807251988031001","nama_pns":"ZULFIAWARMAN, SE, M.Si.","tmpt_lahir":"BUKITTINGGI","tgl_lahir":"1968-07-25","gender_id":"1","gender_nm":"LAKI-LAKI","agama_id":"1","agama_nm":"ISLAM","karpeg":"E 636691","cpns_pns_id":"2","cpns_pns_nm":"PNS","status_pns_id":"1","status_pns_nm":"PEGAWAI AKTIF","alamat":"KOMP MUTIARA PUTIH BLOK H\\/6 PADANG","kawin_id":"2","kawin_nm":"BELUM KAWIN","golru_id":"42","golru_nm":"IV\\/b","pangkat":"Pembina TK I","tmt_golru":"2021-10-01","eselon_id":"99","eselon_nm":"-","jenjang_id":"07","jenjang_nm":"MADYA","nilai_pemetaan_potensi":"69","nilai_penilaian_kinerja":"78.00","nilai_sasaran_kerja":"","data_pendidikan":[{"id":"295","jenjang":"11","nm_jenjang":"S.2","jurusan":"MAGISTER EKONOMIKA PEMBANGUNAN","sekolah":"MEP-UGM","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""}],"data_diklat_kepemimpinan":[],"data_bimtek":[],"data_pengalaman_kerja":[],"riwayat_hukuman_disiplin":[]}',6.84,2.34,4.5,'196807251988031001',0,0,'1',10,1,1,10,15,0,2,'1','12',13,25), ( E'{"pns_id":"11060","sapk_id":"A8ACA7C829793912E040640A040269BB","opd_id":"18","opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","sub_opd_id":"660","sub_opd_nm":"SEKRETARIAT","jns_jbtn_id":"1","jns_jbtn_nm":"Struktural","jabatan_id":"317","jabatan_nm":"SEKRETARIS","nip":"197210131996032002","nama_pns":"MONITA, S.Farm.Apt, M.Sc.","tmpt_lahir":"PADANG","tgl_lahir":"1972-10-13","gender_id":"2","gender_nm":"PEREMPUAN","agama_id":"1","agama_nm":"ISLAM","karpeg":"G.348860","cpns_pns_id":"2","cpns_pns_nm":"PNS","status_pns_id":"1","status_pns_nm":"PEGAWAI AKTIF","alamat":"Jl. Ikhlas VII No.5 Andalas RT.003 RW.009 Padang","kawin_id":"3","kawin_nm":"JANDA","golru_id":"43","golru_nm":"IV\\/c","pangkat":"Pembina Utama Muda","tmt_golru":"2020-10-01","eselon_id":"31","eselon_nm":"III.A","jenjang_id":"0","jenjang_nm":"-","nilai_pemetaan_potensi":"75","nilai_penilaian_kinerja":"78.00","nilai_sasaran_kerja":"","data_pendidikan":[{"id":"37160","jenjang":"10","nm_jenjang":"S.1","jurusan":"FARMASI","sekolah":"UNAND","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""},{"id":"37163","jenjang":"11","nm_jenjang":"S.2","jurusan":"ILMU FARMASI (MNJ FARMASI ADM)","sekolah":"UGM","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""}],"data_diklat_kepemimpinan":[],"data_bimtek":[{"bimtek":"PELATIHAN POSR UNTUK DOKTER DAN PARAMEDIS","mulai":"1997-00-00","selesai":"1997-00-00","no_sk":"-","tgl_sk":"1997-00-00"},{"bimtek":"PELATIHAN INTERPERSONIL PENAGGULANGAN PENYALAHGUNAAN NAPZA","mulai":"2006-08-30","selesai":"2006-09-02","no_sk":"-","tgl_sk":"2006-00-00"},{"bimtek":"PELATIHAN PENGEMBANGAN MASYARAKAT DALAM PKMD","mulai":"2006-09-17","selesai":"2006-09-23","no_sk":"-","tgl_sk":"2006-00-00"},{"bimtek":"PELATIHAN TOT PIO DI RS (PELAYANAN INFORMASI OBAT)","mulai":"2006-09-18","selesai":"2006-09-21","no_sk":"568158\\/H\\/D\\/001519\\/IX\\/2006","tgl_sk":"2006-09-21"},{"bimtek":"BINTEK PENGADAAN BARANG DAN JASA","mulai":"2007-05-02","selesai":"2007-05-04","no_sk":"800\\/088\\/V\\/PERL-2007","tgl_sk":"2007-05-04"},{"bimtek":"PELATIHAN DESA SIAGA","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2007-00-00"},{"bimtek":"PELATIHAN CDOB(CARA DISTRIBUSI OBAT YANG BAIK)","mulai":"2007-12-09","selesai":"2007-12-12","no_sk":"","tgl_sk":"2007-12-12"},{"bimtek":"PELATIHAN MANAJEMEN DISTRIBUSI OBAT PUBLIK","mulai":"2008-08-21","selesai":"2008-08-23","no_sk":"","tgl_sk":"2008-08-23"},{"bimtek":"BIMTEK AUDIT INVESTIGASI","mulai":"2009-12-16","selesai":"2009-12-18","no_sk":"","tgl_sk":"2009-00-00"},{"bimtek":"BIMTEK TIPIKOR","mulai":"2009-12-16","selesai":"2009-12-18","no_sk":"","tgl_sk":"2009-00-00"},{"bimtek":"SOSIALISASI SPIP PEMBAHASAN & PEMETAAN RISIKO","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2012-10-00"},{"bimtek":"WORKSHOP PANITIA\\/PEJABAT PENERIMA HASIL PEKERJAAN SERTA EVALUASI DOKUMEN","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2012-12-00"},{"bimtek":"SOSIALISASI PENGELOLAAN KEUANGAN BLUD","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2012-12-00"},{"bimtek":"SOSIALISASI PERHITUNGAN ANGKA KREDIT\\/PAK P2UPD","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2013-01-00"},{"bimtek":"DIKLAT PEMBENTUKAN PENGAWASAN PEMERINTAHAN","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2013-03-00"},{"bimtek":"DIKLAT TIM PENILAI AK JAFUNG PENGAWAS PEMERINTAHAN ","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2013-05-00"},{"bimtek":"SOSIALISASI PERATURAN PERUNDANG-UNDANGAN","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2013-11-00"},{"bimtek":"SOSIALISASI IMPLEMENTASI SPIP PADA TATARAN KEGIATAN SKPD","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2012-06-00"},{"bimtek":"SEMINAR NASIONAL PENERAPAN SISTEM PENGENDALIAN INTERN PEMERINTAH & PERANAN AUDITOR FORENSIK","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2012-06-00"},{"bimtek":"PELATIHAN E-AUDIT APLIKASI SPSE","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2011-12-00"},{"bimtek":"SOSIALISASI SOFTWARE PEMANTAUAN KETERSEDIAAN OBAT KAB\\/KOTA","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2007-00-00"},{"bimtek":"SOSIALISASI KEBIJAKAN DIT PENGENDALIAN PENYAKIT TIDAK MENULAR","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2006-00-00"},{"bimtek":"SOSIALISASI PEDOMAN PENGELOLAAN OBAT DISAAT BENCANA","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2006-00-00"},{"bimtek":"LOKAKARYA KEBIJAKAN OBAT TRADISIONAL ","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2006-00-00"},{"bimtek":"WORKSHOP PENINGKATAN MUTU DIAGNOSA DAN TREATMENT OBAT ANTI MALARIA REGIONAL SUMATERA","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2006-00-00"},{"bimtek":"PENGADAAN PELAYANAN FARMASI DI PUSKESMAS","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2006-00-00"},{"bimtek":"PEMBEKALAN TENAGA FARMASI BID. FARKOMNIK","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2006-00-00"},{"bimtek":"ADVOKASI PENGELOLAAN OBAT TERPADU","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2006-00-00"},{"bimtek":"PELATIHAN KOMPETISI FARMASI","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2007-00-00"},{"bimtek":"SOSIALISASI KEBIJAKAN TEKNIS DIT BINAPOR","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2007-00-00"},{"bimtek":"TRAINING E-AUDIT","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2011-10-00"},{"bimtek":"BIMTEK PPK-BLUD","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2011-08-00"},{"bimtek":"DIKLAT REVIU LAP. KEU. PEMDA","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2010-11-00"},{"bimtek":"PELATIHAN\\/SOSIALISASI E-AUDITOR","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2010-05-00"},{"bimtek":"DIKLAT SERTIFIKASI JFA","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2010-04-00"},{"bimtek":"PENGELOLAAN OBAT TERPADU","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2007-00-00"},{"bimtek":"PENYUSUNAN RENCANA KEBUTUHAN OBAT","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2007-00-00"},{"bimtek":"PENINGKATAN SDM PUSKESMAS DI BID. POR","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2007-00-00"},{"bimtek":"TOT PIO DIRUMAH SAKIT","mulai":"0000-00-00","selesai":"0000-00-00","no_sk":"","tgl_sk":"2006-00-00"}],"data_pengalaman_kerja":[],"riwayat_hukuman_disiplin":[]}',9.36,4.86,4.5,'197210131996032002',2,0,'2',20,2,1,10,15,0,5,'1','12',27,25), ( E'{"pns_id":"11570","sapk_id":"A8ACA7C44C703912E040640A040269BB","opd_id":"18","opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","sub_opd_id":"661","sub_opd_nm":"BIDANG SERTIFIKASI KOMPETENSI DAN PENGELOLAAN KELEMBAGAAN","jns_jbtn_id":"1","jns_jbtn_nm":"Struktural","jabatan_id":"319","jabatan_nm":"KEPALA BIDANG SERTIFIKASI KOMPETENSI DAN PENGELOLAAN KELEMBAGAAN","nip":"197501151993101001","nama_pns":"HENDRA, S.Sos, M.Si.","tmpt_lahir":"PADANG","tgl_lahir":"1975-01-15","gender_id":"1","gender_nm":"LAKI-LAKI","agama_id":"1","agama_nm":"ISLAM","karpeg":"G.198452","cpns_pns_id":"2","cpns_pns_nm":"PNS","status_pns_id":"1","status_pns_nm":"PEGAWAI AKTIF","alamat":"JL.ARU  KOMPLEK PEMDA NO.262 LUBEG PADANG","kawin_id":"1","kawin_nm":"KAWIN","golru_id":"42","golru_nm":"IV\\/b","pangkat":"Pembina TK I","tmt_golru":"2021-04-01","eselon_id":"31","eselon_nm":"III.A","jenjang_id":"0","jenjang_nm":"-","nilai_pemetaan_potensi":"71","nilai_penilaian_kinerja":"73.00","nilai_sasaran_kerja":"","data_pendidikan":[{"id":"1410","jenjang":"10","nm_jenjang":"S.1","jurusan":"ADMINISTRASI","sekolah":"STIA LAN-RI","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""},{"id":"98165","jenjang":"11","nm_jenjang":"S.2","jurusan":"MAGISTER SAINS","sekolah":"-","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""},{"id":"298","jenjang":"11","nm_jenjang":"S.2","jurusan":"MAGISTER EKONOMIKA PEMBANGUNAN","sekolah":"UGM","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""}],"data_diklat_kepemimpinan":[{"id":"8099","diklat":"15","nm_diklat":"DIKLATPIM Tk.IV","mulai":"2018-10-08","selesai":"2018-11-19","no_sk":"016\\/DIKLAT PIM TK.IV\\/BANDIKLAT\\/2018","tgl_sk":"2018-11-19"}],"data_bimtek":[{"bimtek":"TRAINING OF FACILITATOR (TOF)","mulai":"2015-02-23","selesai":"2015-02-27","no_sk":"00001947","tgl_sk":"2015-02-27"},{"bimtek":"DIKLAT TOT","mulai":"2017-07-04","selesai":"2017-07-09","no_sk":"00009787\\/DIKLAT TEKNIS\\/13\\/1300\\/LAN\\/2017","tgl_sk":"2017-07-09"},{"bimtek":"KNOWLEDGE SHARING PENGEMBANGAN KOPETENSI ASN SERI II","mulai":"2020-08-26","selesai":"2020-08-26","no_sk":"-","tgl_sk":"2020-08-26"},{"bimtek":"PENILAIAN KOMPETENSI KERJA PENYELENGGARA PEMERINTAH DAERAH","mulai":"2020-08-14","selesai":"2020-08-14","no_sk":"13\\/00078\\/101-2020","tgl_sk":"2020-08-14"},{"bimtek":"EXCELLENT COMPETENCY","mulai":"2020-07-16","selesai":"2020-07-16","no_sk":"893\\/BPSDM\\/2\\/2020\\/248","tgl_sk":"2020-07-16"},{"bimtek":"KNOWLEDGE SHARING PENGEMBANGAN KOMPETENSI ASN SERI II","mulai":"2020-08-26","selesai":"2020-08-26","no_sk":"49\\/421003\\/205.1\\/2020","tgl_sk":"2020-08-27"},{"bimtek":"VIRTUAL SHARING OPTIMALISASI KELEMBAGAAN LSP-PDN PROVINSI DALAM PROFESIONALITAS ASN","mulai":"2020-08-19","selesai":"2020-08-19","no_sk":"68\\/421003\\/205.1\\/2020","tgl_sk":"2020-08-24"},{"bimtek":"FASILITAS HUMAN CAPITAL DEVELOPMENT PLAN (HCDP)- REGIONAL 1","mulai":"2020-09-03","selesai":"2020-09-04","no_sk":"-","tgl_sk":"2020-09-04"}],"data_pengalaman_kerja":[],"riwayat_hukuman_disiplin":[]}',7.92,3.42,4.5,'197501151993101001',2,3,'1',10,2,1,10,15,0,5,'1','12',19,25), ( E'{"pns_id":"8980","sapk_id":"A8ACA7B7A39E3912E040640A040269BB","opd_id":"18","opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","sub_opd_id":"662","sub_opd_nm":"BIDANG PENGEMBANGAN KOMPETENSI TEKNIS","jns_jbtn_id":"1","jns_jbtn_nm":"Struktural","jabatan_id":"332","jabatan_nm":"KEPALA BIDANG PENGEMBANGAN KOMPETENSI TEKNIS","nip":"196511101998021001","nama_pns":"Ir. ABD. HAMID, M.Si.","tmpt_lahir":"TABING PADANG","tgl_lahir":"1959-10-10","gender_id":"1","gender_nm":"LAKI-LAKI","agama_id":"1","agama_nm":"ISLAM","karpeg":"041559","cpns_pns_id":"2","cpns_pns_nm":"PNS","status_pns_id":"1","status_pns_nm":"PEGAWAI AKTIF","alamat":"PERUMDAM III\\/4 BLOK K\\/8 RT.02\\/RW.II KEL. DADOK TUNGGUL HITAM PADANG","kawin_id":"1","kawin_nm":"KAWIN","golru_id":"42","golru_nm":"IV\\/b","pangkat":"Pembina TK I","tmt_golru":"2012-04-01","eselon_id":"31","eselon_nm":"III.A","jenjang_id":"0","jenjang_nm":"-","nilai_pemetaan_potensi":"66","nilai_penilaian_kinerja":"75.00","nilai_sasaran_kerja":"","data_pendidikan":[{"id":"3447","jenjang":"10","nm_jenjang":"S.1","jurusan":"PETERNAKAN","sekolah":"UNAND PADANG","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""},{"id":"45672","jenjang":"11","nm_jenjang":"S.2","jurusan":"MAGISTER MANAJEMEN PEMBANGUNAN DAERAH","sekolah":"STIA LAN ","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""}],"data_diklat_kepemimpinan":[{"id":"6267","diklat":"14","nm_diklat":"DIKLATPIM Tk.III","mulai":"2015-03-10","selesai":"2015-06-25","no_sk":"00000289\\/DIKLATPIM TK. III \\/13\\/1371\\/LAN\\/2015","tgl_sk":"2015-06-25"}],"data_bimtek":[{"bimtek":"TOT WIDYAISWARA","mulai":"2004-00-00","selesai":"2004-00-00","no_sk":"2004","tgl_sk":"2004-00-00"}],"data_pengalaman_kerja":[],"riwayat_hukuman_disiplin":[]}',7.56,3.06,4.5,'196511101998021001',0,3,'1',10,2,1,10,15,0,5,'1','12',17,25), ( E'{"pns_id":"8015","sapk_id":"A8ACA7BFCB773912E040640A040269BB","opd_id":"18","opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","sub_opd_id":"662","sub_opd_nm":"BIDANG PENGEMBANGAN KOMPETENSI TEKNIS","jns_jbtn_id":"3","jns_jbtn_nm":"Fungsional Tertentu","jabatan_id":"83","jabatan_nm":"Widyaiswara","nip":"196308041990032003","nama_pns":"DEVIANY, A.Ing,M.M.","tmpt_lahir":"JAMBI","tgl_lahir":"1963-08-04","gender_id":"2","gender_nm":"PEREMPUAN","agama_id":"1","agama_nm":"ISLAM","karpeg":"E.915966","cpns_pns_id":"2","cpns_pns_nm":"PNS","status_pns_id":"1","status_pns_nm":"PEGAWAI AKTIF","alamat":"JL.MARAPALAM INDAH X\\/10","kawin_id":"1","kawin_nm":"KAWIN","golru_id":"42","golru_nm":"IV\\/b","pangkat":"Pembina TK I","tmt_golru":"2018-04-01","eselon_id":"99","eselon_nm":"-","jenjang_id":"07","jenjang_nm":"MADYA","nilai_pemetaan_potensi":"63","nilai_penilaian_kinerja":"63.00","nilai_sasaran_kerja":"","data_pendidikan":[{"id":"45678","jenjang":"11","nm_jenjang":"S.2","jurusan":"SUMBER DAYA MANUSIA","sekolah":"UPI","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""}],"data_diklat_kepemimpinan":[],"data_bimtek":[{"bimtek":"DIKLAT MOT BERBASIS E-LEARNING","mulai":"2019-09-11","selesai":"2019-09-26","no_sk":"00001639\\/DIKLAT TEKNIS\\/4012\\/027\\/LAN-LAN\\/2019","tgl_sk":"2019-09-26"},{"bimtek":"WORKSHOP PEMBEKALAN FASILITATOR PKA DAN PKP","mulai":"2020-01-20","selesai":"2020-01-30","no_sk":"00000044\\/DIKLAT TEKNIS\\/5400\\/057\\/LAN-PEMPROV SUMBAR\\/2020","tgl_sk":"2020-01-30"},{"bimtek":"PELATIHAN E-LEARNING PERENCANAAN PENGANGGARAN RESPONSIF GENDER GUNA PERCEPATAN STRATEGI PENGARUSUTAMAAN GENDER","mulai":"2020-05-03","selesai":"2020-06-05","no_sk":"-","tgl_sk":"2020-06-05"},{"bimtek":"PELATIHAN PENGEMBANGAN KETERAMPILAN KEPEMIMPINAN","mulai":"2019-10-14","selesai":"2019-10-19","no_sk":"-","tgl_sk":"2019-10-19"},{"bimtek":"WEBINAR FORMULASI PRODUK PARIWISATA SUMBAR","mulai":"2020-10-15","selesai":"2020-10-15","no_sk":"-","tgl_sk":"2020-10-15"},{"bimtek":"WEBINAR TOURISM RECOVERY FROM COVID-19 PANDEMIC","mulai":"2020-10-07","selesai":"2020-10-07","no_sk":"-","tgl_sk":"2020-10-07"}],"data_pengalaman_kerja":[],"riwayat_hukuman_disiplin":[]}',6.12,2.52,3.6,'196308041990032003',1,0,'1',10,1,1,10,10,0,2,'1','12',14,20), ( E'{"pns_id":"28236","sapk_id":"A8ACA7C1F9333912E040640A040269BB","opd_id":"18","opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","sub_opd_id":"663","sub_opd_nm":"BIDANG PENGEMBANGAN KOMPETENSI JABATAN FUNGSIONAL","jns_jbtn_id":"1","jns_jbtn_nm":"Struktural","jabatan_id":"339","jabatan_nm":"KEPALA BIDANG PENGEMBANGAN KOMPETENSI JABATAN FUNGSIONAL","nip":"197306011998011001","nama_pns":"JAMALUS, S,Pd, M.Pd.","tmpt_lahir":"PADANG","tgl_lahir":"1973-06-01","gender_id":"1","gender_nm":"LAKI-LAKI","agama_id":"1","agama_nm":"ISLAM","karpeg":"H.076282","cpns_pns_id":"2","cpns_pns_nm":"PNS","status_pns_id":"1","status_pns_nm":"PEGAWAI AKTIF","alamat":"PERUMNAS TANJUNG PAKU BLOK E.06 KOTA SOLOK","kawin_id":"1","kawin_nm":"KAWIN","golru_id":"42","golru_nm":"IV\\/b","pangkat":"Pembina TK I","tmt_golru":"2020-04-01","eselon_id":"31","eselon_nm":"III.A","jenjang_id":"0","jenjang_nm":"-","nilai_pemetaan_potensi":"76","nilai_penilaian_kinerja":"81.00","nilai_sasaran_kerja":"","data_pendidikan":[{"id":"61753","jenjang":"11","nm_jenjang":"S.2","jurusan":"ILMU MANAJEMEN","sekolah":"UNIVERSITAS NEGERI PADANG","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""}],"data_diklat_kepemimpinan":[],"data_bimtek":[],"data_pengalaman_kerja":[],"riwayat_hukuman_disiplin":[]}',8.64,4.14,4.5,'197306011998011001',0,0,'1',20,1,1,10,15,0,5,'1','12',23,25), ( E'{"pns_id":"10400","sapk_id":"A8ACA7C3FEA53912E040640A040269BB","opd_id":"18","opd_nm":"BADAN PENGEMBANGAN SUMBER DAYA MANUSIA","sub_opd_id":"1116","sub_opd_nm":"BIDANG PENGEMBANGAN KOMPETENSI MANAJERIAL","jns_jbtn_id":"1","jns_jbtn_nm":"Struktural","jabatan_id":"340","jabatan_nm":"KEPALA BIDANG PENGEMBANGAN KOMPETENSI MANAJERIAL","nip":"197003251993082001","nama_pns":"Ir. KHAIRANTI KHAIRANIS, M.Si.","tmpt_lahir":"PADANG","tgl_lahir":"1970-03-25","gender_id":"2","gender_nm":"PEREMPUAN","agama_id":"1","agama_nm":"ISLAM","karpeg":"G.033412","cpns_pns_id":"2","cpns_pns_nm":"PNS","status_pns_id":"1","status_pns_nm":"PEGAWAI AKTIF","alamat":"KOMPLEK PEMDA NO.148","kawin_id":"1","kawin_nm":"KAWIN","golru_id":"42","golru_nm":"IV\\/b","pangkat":"Pembina TK I","tmt_golru":"2014-04-01","eselon_id":"31","eselon_nm":"III.A","jenjang_id":"0","jenjang_nm":"-","nilai_pemetaan_potensi":"64","nilai_penilaian_kinerja":"84.00","nilai_sasaran_kerja":"","data_pendidikan":[{"id":"3525","jenjang":"10","nm_jenjang":"S.1","jurusan":"PETERNAKAN","sekolah":"UNAND PADANG","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""},{"id":"158","jenjang":"11","nm_jenjang":"S.2","jurusan":"ILMU PERENCANAAN KOTA & DAERAH","sekolah":"UNAND PADANG","jenis":"","nm_jenis":"","lokasi":"","nm_lokasi":""}],"data_diklat_kepemimpinan":[{"id":"5635","diklat":"14","nm_diklat":"DIKLATPIM Tk.III","mulai":"2004-04-20","selesai":"2004-06-18","no_sk":"1165\\/DIKLATPIM TK III\\/","tgl_sk":"2004-06-08"},{"id":"3715","diklat":"15","nm_diklat":"DIKLATPIM Tk.IV","mulai":"2003-04-07","selesai":"2003-05-24","no_sk":"11787\\/Diklatpim TK. IV\\/LA","tgl_sk":"2003-05-24"}],"data_bimtek":[{"bimtek":"ANALISA KEBUT. DIKLAT","mulai":"2009-03-10","selesai":"2009-03-20","no_sk":"01\\/DIKLATKD\\/BANDIKLAT-200","tgl_sk":"2009-03-20"},{"bimtek":"DASAR AMDAL","mulai":"1994-06-01","selesai":"1994-06-10","no_sk":"5\\/A\\/22\\/1994","tgl_sk":"1994-06-10"},{"bimtek":"METODOLOGI PENELITIAN","mulai":"2003-08-11","selesai":"2003-08-14","no_sk":"080\\/1223\\/UTBANG","tgl_sk":"0000-00-00"},{"bimtek":"PENYUSUNAN NASKAH KERJA SAMA","mulai":"2008-08-26","selesai":"2008-08-27","no_sk":"002.6\\/273\\/UTBANG","tgl_sk":"2008-08-27"},{"bimtek":"B.INGGRIS INTERMEDIAR","mulai":"2003-09-23","selesai":"2004-01-17","no_sk":"118\\/BA-I\\/PPBA-UDH","tgl_sk":"2003-02-27"},{"bimtek":"DIKLAT PENATAUSAHAAN KEUANGAN DAERAH","mulai":"2011-02-28","selesai":"2011-03-05","no_sk":"-","tgl_sk":"2011-03-05"},{"bimtek":"DIKLAT MOT","mulai":"2011-02-07","selesai":"2011-02-11","no_sk":"09\\/893.5\\/21\\/P.III.3\\/31\\/2011","tgl_sk":"2011-02-11"},{"bimtek":"DIKLAT TOT OUTBOND","mulai":"2012-08-10","selesai":"2012-04-18","no_sk":"-","tgl_sk":"2012-04-18"},{"bimtek":"TOF DIKLAT PIM IV DAN PIM III","mulai":"2014-03-17","selesai":"2014-03-22","no_sk":"-","tgl_sk":"2014-03-22"},{"bimtek":"DIKLAT TOT SUBSTANSIF PIM III DAN PIM IV","mulai":"2016-11-14","selesai":"2016-11-26","no_sk":"-","tgl_sk":"2016-11-26"},{"bimtek":"PELATIHAN PENERAPAN KEBIJAKAN LATSAR CPNS","mulai":"2017-11-12","selesai":"2017-11-17","no_sk":"00017786\\/DIKLATTEKNIS\\/13\\/1300\\/LAN\\/2017","tgl_sk":"2017-11-17"},{"bimtek":"DIKLAT ASESOR KOMPETENSI PEMERINTAH","mulai":"2017-07-17","selesai":"2017-07-21","no_sk":"09\\/897.1.1\\/005\\/PI.2\\/31\\/2017","tgl_sk":"2017-07-21"},{"bimtek":"WORKSHOP PENGUATAN KERJASAMA TIM","mulai":"2019-03-13","selesai":"2019-03-16","no_sk":"-","tgl_sk":"2019-03-16"},{"bimtek":"PELATIHAN PENGELOLAAN PELATIHAN ( MOT )","mulai":"2010-11-12","selesai":"2019-11-28","no_sk":"00002415\\/DIKLAT TEKNIS\\/4012\\/027\\/LAN-LAN\\/2019","tgl_sk":"2019-11-28"}],"data_pengalaman_kerja":[],"riwayat_hukuman_disiplin":[]}',7.92,3.42,4.5,'197003251993082001',2,3,'1',10,2,1,10,15,0,5,'1','12',19,25)
ERROR - 2022-05-27 04:27:48 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 104
ERROR - 2022-05-27 04:27:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 104
ERROR - 2022-05-27 04:27:48 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:27:48 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 106
ERROR - 2022-05-27 04:27:48 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 106
ERROR - 2022-05-27 04:31:12 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:12 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:13 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:13 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:14 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:14 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:15 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:15 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:16 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:16 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:17 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:17 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:17 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:19 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:20 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:20 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:20 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:21 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:22 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:22 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:22 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:23 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:23 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:24 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:25 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:26 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:26 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:27 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:27 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:28 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:28 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:29 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:29 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:30 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:30 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:31 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:31 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:32 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:33 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:33 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:34 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:34 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:35 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:35 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:35 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:36 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:36 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:37 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:37 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:31:38 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 105
ERROR - 2022-05-27 04:38:50 --> Severity: Warning --> array_push() expects parameter 1 to be array, int given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:38:51 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:38:51 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:38:51 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:38:52 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:38:53 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:38:53 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:38:54 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:38:54 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:38:54 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:38:55 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:38:55 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:38:57 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:38:57 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:38:58 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:38:58 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:38:59 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:38:59 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:00 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:00 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:01 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:01 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:02 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:02 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:03 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:04 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:04 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:05 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:05 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:06 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:07 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:07 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:08 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:08 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:09 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:09 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:09 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:10 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:11 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:12 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:12 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:12 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:13 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:13 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:14 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:14 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:15 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:15 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:39:15 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 107
ERROR - 2022-05-27 04:49:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 04:49:16 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 09:24:10 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  database &quot;development_talent_pool&quot; does not exist C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 154
ERROR - 2022-05-27 09:24:10 --> Unable to connect to the database
ERROR - 2022-05-27 09:24:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  database &quot;development_talent_pool&quot; does not exist C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 154
ERROR - 2022-05-27 09:24:37 --> Unable to connect to the database
ERROR - 2022-05-27 09:25:44 --> 404 Page Not Found: /index
ERROR - 2022-05-27 09:25:44 --> 404 Page Not Found: /index
ERROR - 2022-05-27 09:25:44 --> 404 Page Not Found: /index
ERROR - 2022-05-27 09:25:44 --> 404 Page Not Found: /index
ERROR - 2022-05-27 09:25:44 --> 404 Page Not Found: /index
ERROR - 2022-05-27 09:25:44 --> 404 Page Not Found: /index
ERROR - 2022-05-27 09:25:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 09:25:58 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 09:26:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 09:26:07 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 09:44:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 09:44:46 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 09:47:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 09:47:46 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 09:48:20 --> 404 Page Not Found: /index
ERROR - 2022-05-27 09:48:20 --> 404 Page Not Found: /index
ERROR - 2022-05-27 09:48:20 --> 404 Page Not Found: /index
ERROR - 2022-05-27 09:48:20 --> 404 Page Not Found: /index
ERROR - 2022-05-27 09:48:20 --> 404 Page Not Found: /index
ERROR - 2022-05-27 09:48:20 --> 404 Page Not Found: /index
ERROR - 2022-05-27 09:51:52 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\models\M_talentpool.php 67
ERROR - 2022-05-27 09:51:52 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\models\M_talentpool.php 67
ERROR - 2022-05-27 10:01:58 --> Severity: Notice --> Undefined offset: 2 C:\xampp7428\htdocs\talent_pool\application\helpers\indo_helper.php 304
ERROR - 2022-05-27 10:01:58 --> Severity: Notice --> Undefined offset: 1 C:\xampp7428\htdocs\talent_pool\application\helpers\indo_helper.php 304
ERROR - 2022-05-27 10:02:21 --> Severity: Notice --> Undefined offset: 2 C:\xampp7428\htdocs\talent_pool\application\helpers\indo_helper.php 304
ERROR - 2022-05-27 10:02:21 --> Severity: Notice --> Undefined offset: 1 C:\xampp7428\htdocs\talent_pool\application\helpers\indo_helper.php 304
ERROR - 2022-05-27 10:21:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 10:21:09 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 10:21:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 10:21:14 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 10:43:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 10:43:16 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 10:43:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 10:43:20 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 10:45:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 10:45:41 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 10:45:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 10:45:45 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 10:45:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 10:45:50 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 10:46:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 10:46:00 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 10:50:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 10:50:47 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 10:51:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 10:51:03 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 10:54:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function ifnull(smallint, integer) does not exist
LINE 1: ...&quot;, &quot;a&quot;.&quot;jabatan_nm&quot;, &quot;a&quot;.&quot;asn&quot;, &quot;a&quot;.&quot;jabatan_es&quot;, ifnull(a.b...
                                                             ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 10:54:45 --> Query error: ERROR:  function ifnull(smallint, integer) does not exist
LINE 1: ...", "a"."jabatan_nm", "a"."asn", "a"."jabatan_es", ifnull(a.b...
                                                             ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT "a"."id", "a"."ta_periode_id", "a"."opd_id", "a"."opd_nm", "a"."jabatan_id", "a"."jabatan_nm", "a"."asn", "a"."jabatan_es", ifnull(a.banyak_asn, 0)
FROM "ta_periode_jabatan" "a"
WHERE "ta_periode_id" = '4'
ORDER BY "a"."opd_id" ASC, "a"."jabatan_es" ASC
 LIMIT 10
ERROR - 2022-05-27 10:56:27 --> Severity: Notice --> Undefined index: banyak_asn C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\controllers\Talentpool.php 107
ERROR - 2022-05-27 10:56:27 --> Severity: Notice --> Undefined index: banyak_asn C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\controllers\Talentpool.php 107
ERROR - 2022-05-27 10:56:27 --> Severity: Notice --> Undefined index: banyak_asn C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\controllers\Talentpool.php 107
ERROR - 2022-05-27 10:57:32 --> Severity: Notice --> Undefined index: banyak_asn C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\controllers\Talentpool.php 107
ERROR - 2022-05-27 10:57:32 --> Severity: Notice --> Undefined index: banyak_asn C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\controllers\Talentpool.php 107
ERROR - 2022-05-27 10:57:32 --> Severity: Notice --> Undefined index: banyak_asn C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\controllers\Talentpool.php 107
ERROR - 2022-05-27 10:57:41 --> Severity: Notice --> Undefined index: banyak_asn C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\controllers\Talentpool.php 107
ERROR - 2022-05-27 10:57:41 --> Severity: Notice --> Undefined index: banyak_asn C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\controllers\Talentpool.php 107
ERROR - 2022-05-27 10:57:41 --> Severity: Notice --> Undefined index: banyak_asn C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\controllers\Talentpool.php 107
ERROR - 2022-05-27 10:58:10 --> Severity: Notice --> Undefined index: banyak_asn C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\controllers\Talentpool.php 107
ERROR - 2022-05-27 10:58:10 --> Severity: Notice --> Undefined index: banyak_asn C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\controllers\Talentpool.php 107
ERROR - 2022-05-27 10:58:10 --> Severity: Notice --> Undefined index: banyak_asn C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\controllers\Talentpool.php 107
ERROR - 2022-05-27 11:03:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 11:03:25 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 11:03:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 11:03:35 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 11:04:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 11:04:47 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 11:04:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 11:04:54 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 11:18:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 11:18:13 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 11:18:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 11:18:19 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 11:50:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;unik_ta_periode_jabatan&quot;
DETAIL:  Key (ta_periode_id, opd_id, jabatan_id)=(4, 2836, 2166) already exists. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 11:50:43 --> Query error: ERROR:  duplicate key value violates unique constraint "unik_ta_periode_jabatan"
DETAIL:  Key (ta_periode_id, opd_id, jabatan_id)=(4, 2836, 2166) already exists. - Invalid query: INSERT INTO "ta_periode_jabatan" ("ta_periode_id", "opd_id", "opd_nm", "jabatan_id", "jabatan_nm", "jabatan_es", "create_by", "create_date", "create_ip", "id_status") VALUES ('4', '2836', 'Biro Pengadaan Barang Dan Jasa', '2166', 'Kepala Bagian Pengelolaan Pengadaan Barang Dan Jasa', '31', 'primaaulia', '2022-05-27 11:50:43', '::1', 1)
ERROR - 2022-05-27 12:00:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 12:00:47 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 12:00:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 12:00:54 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 12:01:15 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\models\M_talentpool.php 693
ERROR - 2022-05-27 12:01:15 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\models\M_talentpool.php 694
ERROR - 2022-05-27 12:01:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 3: ..._id)) from ta_periode_jabatan where ta_periode_id=) as total...
                                                             ^ C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 12:01:15 --> Query error: ERROR:  syntax error at or near ")"
LINE 3: ..._id)) from ta_periode_jabatan where ta_periode_id=) as total...
                                                             ^ - Invalid query: 
            select
            (select count(distinct(opd_id)) from ta_periode_jabatan where ta_periode_id=) as total_opd,
            (select count(distinct(jabatan_id)) from ta_periode_jabatan where ta_periode_id=) as total_jabatan
        
ERROR - 2022-05-27 12:01:34 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\models\M_talentpool.php 693
ERROR - 2022-05-27 12:01:34 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\models\M_talentpool.php 694
ERROR - 2022-05-27 12:01:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 3: ..._id)) from ta_periode_jabatan where ta_periode_id=) as total...
                                                             ^ C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 12:01:34 --> Query error: ERROR:  syntax error at or near ")"
LINE 3: ..._id)) from ta_periode_jabatan where ta_periode_id=) as total...
                                                             ^ - Invalid query: 
            select
            (select count(distinct(opd_id)) from ta_periode_jabatan where ta_periode_id=) as total_opd,
            (select count(distinct(jabatan_id)) from ta_periode_jabatan where ta_periode_id=) as total_jabatan
        
ERROR - 2022-05-27 14:22:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\auth\models\Model_auth_signin.php 184
ERROR - 2022-05-27 14:22:54 --> 404 Page Not Found: /index
ERROR - 2022-05-27 14:22:54 --> 404 Page Not Found: /index
ERROR - 2022-05-27 14:22:54 --> 404 Page Not Found: /index
ERROR - 2022-05-27 14:22:54 --> 404 Page Not Found: /index
ERROR - 2022-05-27 14:22:54 --> 404 Page Not Found: /index
ERROR - 2022-05-27 14:22:54 --> 404 Page Not Found: /index
ERROR - 2022-05-27 14:23:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 14:23:03 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 14:23:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 14:23:17 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 15:25:49 --> Severity: Notice --> Undefined offset: 1 C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 669
ERROR - 2022-05-27 15:25:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 3: ..._id)) from ta_periode_jabatan where ta_periode_id=) as total...
                                                             ^ C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 15:25:49 --> Query error: ERROR:  syntax error at or near ")"
LINE 3: ..._id)) from ta_periode_jabatan where ta_periode_id=) as total...
                                                             ^ - Invalid query: 
            select
            (select count(distinct(opd_id)) from ta_periode_jabatan where ta_periode_id=) as total_opd,
            (select count(distinct(jabatan_id)) from ta_periode_jabatan where ta_periode_id=) as total_jabatan,
            (select COALESCE(sum(banyak_asn),0) from ta_periode_jabatan where ta_periode_id=) as total_asn
        
ERROR - 2022-05-27 15:25:57 --> Severity: Notice --> Undefined offset: 1 C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 669
ERROR - 2022-05-27 15:25:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 3: ..._id)) from ta_periode_jabatan where ta_periode_id=) as total...
                                                             ^ C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 15:25:57 --> Query error: ERROR:  syntax error at or near ")"
LINE 3: ..._id)) from ta_periode_jabatan where ta_periode_id=) as total...
                                                             ^ - Invalid query: 
            select
            (select count(distinct(opd_id)) from ta_periode_jabatan where ta_periode_id=) as total_opd,
            (select count(distinct(jabatan_id)) from ta_periode_jabatan where ta_periode_id=) as total_jabatan,
            (select COALESCE(sum(banyak_asn),0) from ta_periode_jabatan where ta_periode_id=) as total_asn
        
ERROR - 2022-05-27 15:26:06 --> Severity: Notice --> Undefined offset: 1 C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 669
ERROR - 2022-05-27 15:26:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 3: ..._id)) from ta_periode_jabatan where ta_periode_id=) as total...
                                                             ^ C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 15:26:06 --> Query error: ERROR:  syntax error at or near ")"
LINE 3: ..._id)) from ta_periode_jabatan where ta_periode_id=) as total...
                                                             ^ - Invalid query: 
            select
            (select count(distinct(opd_id)) from ta_periode_jabatan where ta_periode_id=) as total_opd,
            (select count(distinct(jabatan_id)) from ta_periode_jabatan where ta_periode_id=) as total_jabatan,
            (select COALESCE(sum(banyak_asn),0) from ta_periode_jabatan where ta_periode_id=) as total_asn
        
ERROR - 2022-05-27 15:28:15 --> Severity: Notice --> Undefined offset: 1 C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 669
ERROR - 2022-05-27 15:28:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 3: ..._id)) from ta_periode_jabatan where ta_periode_id=) as total...
                                                             ^ C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 15:28:15 --> Query error: ERROR:  syntax error at or near ")"
LINE 3: ..._id)) from ta_periode_jabatan where ta_periode_id=) as total...
                                                             ^ - Invalid query: 
            select
            (select count(distinct(opd_id)) from ta_periode_jabatan where ta_periode_id=) as total_opd,
            (select count(distinct(jabatan_id)) from ta_periode_jabatan where ta_periode_id=) as total_jabatan,
            (select COALESCE(sum(banyak_asn),0) from ta_periode_jabatan where ta_periode_id=) as total_asn
        
ERROR - 2022-05-27 16:33:44 --> 404 Page Not Found: /index
ERROR - 2022-05-27 16:33:44 --> 404 Page Not Found: /index
ERROR - 2022-05-27 16:33:44 --> 404 Page Not Found: /index
ERROR - 2022-05-27 16:33:44 --> 404 Page Not Found: /index
ERROR - 2022-05-27 16:33:44 --> 404 Page Not Found: /index
ERROR - 2022-05-27 16:33:44 --> 404 Page Not Found: /index
ERROR - 2022-05-27 16:39:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 16:39:11 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 16:39:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 16:39:30 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 16:48:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 16:48:29 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-05-27 16:48:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-05-27 16:48:35 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
