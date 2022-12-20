<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<<<<<<< HEAD
ERROR - 2022-06-02 07:43:29 --> 404 Page Not Found: /index
ERROR - 2022-06-02 07:43:29 --> 404 Page Not Found: /index
ERROR - 2022-06-02 07:43:29 --> 404 Page Not Found: /index
ERROR - 2022-06-02 07:43:29 --> 404 Page Not Found: /index
ERROR - 2022-06-02 07:43:29 --> 404 Page Not Found: /index
ERROR - 2022-06-02 07:43:29 --> 404 Page Not Found: /index
ERROR - 2022-06-02 07:43:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-06-02 07:43:40 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-06-02 07:43:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-06-02 07:43:51 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
ERROR - 2022-06-02 07:44:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;id&quot; = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-06-02 07:44:13 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "id" = FALSE
                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT *
FROM "ta_periode"
WHERE "id" = FALSE
=======
ERROR - 2022-06-02 06:41:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\auth\models\Model_auth_signin.php 184
ERROR - 2022-06-02 06:41:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\auth\models\Model_auth_signin.php 184
ERROR - 2022-06-02 06:41:22 --> 404 Page Not Found: /index
ERROR - 2022-06-02 06:41:22 --> 404 Page Not Found: /index
ERROR - 2022-06-02 06:41:22 --> 404 Page Not Found: /index
ERROR - 2022-06-02 06:41:22 --> 404 Page Not Found: /index
ERROR - 2022-06-02 06:41:22 --> 404 Page Not Found: /index
ERROR - 2022-06-02 06:41:22 --> 404 Page Not Found: /index
ERROR - 2022-06-02 06:45:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.data-&gt;&gt;opd_nm does not exist
LINE 4:             ) rangking, &quot;a&quot;.*, &quot;a&quot;.&quot;data-&gt;&gt;opd_nm&quot;
                                       ^ C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-06-02 06:45:35 --> Query error: ERROR:  column a.data->>opd_nm does not exist
LINE 4:             ) rangking, "a".*, "a"."data->>opd_nm"
                                       ^ - Invalid query: SELECT RANK () OVER ( 
                ORDER BY 
                    jumlah desc, data->>'golru_id' desc, data->>'nilai_penilaian_kinerja' desc, data->>'nilai_pemetaan_potensi' desc, data->>'nilai_sasaran_kerja' desc
            ) rangking, "a".*, "a"."data->>opd_nm"
FROM "ta_periode_jabatan_asn" "a"
WHERE "a"."ta_periode_jabatan_id" = '36'
ERROR - 2022-06-02 06:46:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.data-&gt;&gt;opd_nm does not exist
LINE 4:             ) rangking, &quot;a&quot;.*, &quot;a&quot;.&quot;data-&gt;&gt;opd_nm&quot;
                                       ^ C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-06-02 06:46:11 --> Query error: ERROR:  column a.data->>opd_nm does not exist
LINE 4:             ) rangking, "a".*, "a"."data->>opd_nm"
                                       ^ - Invalid query: SELECT RANK () OVER ( 
                ORDER BY 
                    jumlah desc, data->>'golru_id' desc, data->>'nilai_penilaian_kinerja' desc, data->>'nilai_pemetaan_potensi' desc, data->>'nilai_sasaran_kerja' desc
            ) rangking, "a".*, "a"."data->>opd_nm"
FROM "ta_periode_jabatan_asn" "a"
WHERE "a"."ta_periode_jabatan_id" = '36'
>>>>>>> cab32737dc306779b2658b636f3d936d3aacbb17
ERROR - 2022-06-02 07:45:12 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  database &quot;production_talent_pool&quot; does not exist C:\xampp7428\htdocs\talent_pool\system\database\drivers\postgre\postgre_driver.php 154
ERROR - 2022-06-02 07:45:12 --> Unable to connect to the database
ERROR - 2022-06-02 09:13:19 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\models\M_talentpool.php 110
ERROR - 2022-06-02 09:13:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\models\M_talentpool.php 110
ERROR - 2022-06-02 09:13:19 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\models\M_talentpool.php 118
ERROR - 2022-06-02 09:13:27 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\models\M_talentpool.php 110
ERROR - 2022-06-02 09:13:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\models\M_talentpool.php 110
ERROR - 2022-06-02 09:13:27 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\models\M_talentpool.php 118
ERROR - 2022-06-02 09:13:35 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\models\M_talentpool.php 110
ERROR - 2022-06-02 09:13:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\models\M_talentpool.php 110
ERROR - 2022-06-02 09:13:35 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\models\M_talentpool.php 118
ERROR - 2022-06-02 09:14:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\models\M_talentpool.php 110
ERROR - 2022-06-02 09:14:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\models\M_talentpool.php 110
ERROR - 2022-06-02 09:14:53 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\models\M_talentpool.php 118
ERROR - 2022-06-02 09:21:55 --> Severity: Notice --> Undefined index: gender_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\controllers\Talentpool.php 95
ERROR - 2022-06-02 09:21:55 --> Severity: Notice --> Undefined index: gender_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\controllers\Talentpool.php 95
ERROR - 2022-06-02 09:21:55 --> Severity: Notice --> Undefined index: gender_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\controllers\Talentpool.php 95
ERROR - 2022-06-02 09:22:02 --> Severity: Notice --> Undefined index: gender_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\controllers\Talentpool.php 95
ERROR - 2022-06-02 09:22:02 --> Severity: Notice --> Undefined index: gender_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\controllers\Talentpool.php 95
ERROR - 2022-06-02 09:22:02 --> Severity: Notice --> Undefined index: gender_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\controllers\Talentpool.php 95
ERROR - 2022-06-02 09:25:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 108
ERROR - 2022-06-02 09:25:19 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 110
ERROR - 2022-06-02 09:25:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 108
ERROR - 2022-06-02 09:25:19 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 110
ERROR - 2022-06-02 09:25:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 108
ERROR - 2022-06-02 09:25:22 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 110
ERROR - 2022-06-02 09:25:33 --> Severity: Notice --> Undefined index: gender_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\controllers\Talentpool_eselon.php 94
ERROR - 2022-06-02 09:25:33 --> Severity: Notice --> Undefined index: gender_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\controllers\Talentpool_eselon.php 94
ERROR - 2022-06-02 09:25:33 --> Severity: Notice --> Undefined index: gender_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\controllers\Talentpool_eselon.php 94
ERROR - 2022-06-02 09:25:40 --> Severity: Notice --> Undefined index: gender_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\controllers\Talentpool_eselon.php 94
ERROR - 2022-06-02 09:25:40 --> Severity: Notice --> Undefined index: gender_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\controllers\Talentpool_eselon.php 94
ERROR - 2022-06-02 09:25:40 --> Severity: Notice --> Undefined index: gender_id C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\controllers\Talentpool_eselon.php 94
ERROR - 2022-06-02 09:25:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 108
ERROR - 2022-06-02 09:25:52 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 110
ERROR - 2022-06-02 09:25:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 108
ERROR - 2022-06-02 09:25:52 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 110
ERROR - 2022-06-02 09:25:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 108
ERROR - 2022-06-02 09:25:54 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 110
ERROR - 2022-06-02 09:26:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 108
ERROR - 2022-06-02 09:26:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 110
ERROR - 2022-06-02 09:26:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 108
ERROR - 2022-06-02 09:26:52 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 110
ERROR - 2022-06-02 09:26:54 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 108
ERROR - 2022-06-02 09:26:54 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 110
ERROR - 2022-06-02 09:27:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 108
ERROR - 2022-06-02 09:27:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 110
ERROR - 2022-06-02 09:27:12 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 108
ERROR - 2022-06-02 09:27:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 110
ERROR - 2022-06-02 09:27:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 108
ERROR - 2022-06-02 09:27:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 110
ERROR - 2022-06-02 09:35:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 111
ERROR - 2022-06-02 09:35:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 113
ERROR - 2022-06-02 09:35:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 111
ERROR - 2022-06-02 09:35:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 113
ERROR - 2022-06-02 09:35:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 111
ERROR - 2022-06-02 09:35:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 113
ERROR - 2022-06-02 09:36:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 111
ERROR - 2022-06-02 09:36:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 113
ERROR - 2022-06-02 09:36:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 111
ERROR - 2022-06-02 09:36:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 113
ERROR - 2022-06-02 09:36:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 111
ERROR - 2022-06-02 09:36:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 113
ERROR - 2022-06-02 09:36:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 111
ERROR - 2022-06-02 09:36:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 113
ERROR - 2022-06-02 09:36:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 111
ERROR - 2022-06-02 09:36:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 113
ERROR - 2022-06-02 09:36:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 111
ERROR - 2022-06-02 09:36:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 113
ERROR - 2022-06-02 09:40:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 113
ERROR - 2022-06-02 09:40:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 113
ERROR - 2022-06-02 09:40:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 113
ERROR - 2022-06-02 09:40:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 113
ERROR - 2022-06-02 09:40:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 113
ERROR - 2022-06-02 09:40:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 113
ERROR - 2022-06-02 09:46:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 111
ERROR - 2022-06-02 09:46:02 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 113
ERROR - 2022-06-02 09:46:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 111
ERROR - 2022-06-02 09:46:02 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 113
ERROR - 2022-06-02 09:46:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 111
ERROR - 2022-06-02 09:46:04 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 113
ERROR - 2022-06-02 09:51:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 111
ERROR - 2022-06-02 09:51:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 113
ERROR - 2022-06-02 09:51:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 111
ERROR - 2022-06-02 09:51:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 113
ERROR - 2022-06-02 09:51:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 111
ERROR - 2022-06-02 09:51:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp7428\htdocs\talent_pool\application\modules\talentpool_eselon\models\M_talentpool_eselon.php 113
ERROR - 2022-06-02 13:23:47 --> Severity: error --> Exception: syntax error, unexpected '.' C:\xampp7428\htdocs\talent_pool\application\modules\talentpool\controllers\Talentpool.php 102
ERROR - 2022-06-02 13:33:37 --> 404 Page Not Found: ../modules/talentpool/controllers/Talentpool/assets
