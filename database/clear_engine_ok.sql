/*
 Navicat Premium Data Transfer

 Source Server         : Mylocal
 Source Server Type    : MySQL
 Source Server Version : 100425 (10.4.25-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : clear_engine_ok

 Target Server Type    : MySQL
 Target Server Version : 100425 (10.4.25-MariaDB)
 File Encoding         : 65001

 Date: 14/11/2022 23:29:19
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for xi_sa_ci_session
-- ----------------------------
DROP TABLE IF EXISTS `xi_sa_ci_session`;
CREATE TABLE `xi_sa_ci_session`  (
  `id` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `timestamp` int NOT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of xi_sa_ci_session
-- ----------------------------
INSERT INTO `xi_sa_ci_session` VALUES ('0odhah74oapkpdgrur3bbeeh1l6e522j', '::1', 1645775402, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjQ1Nzc1NDAyO2FjY291bnRfbmFtZXxzOjEwOiJwcmltYWF1bGlhIjtjbGVhcjNuZ2luZTIwMjJ8czoxOTI6ImZlMGMwMDNmYjQ5MTRhMGZkN2I0NWZjZjgxMTYxZDQxMDhiM2IwYzZlNjdmMjFkYjkyNWEyODY1MjRiZWYyMWMyYmY1MTU4NmVjNjFiZDg2MWVjNDYzMGRiYjQ0MDZhODMzZDU4NWFmOWYzYzFiZWMyMmU0ODE1MjEyMzA2ZmY4TEo4eEt0aE0wUHFzcHdHMEpTSWhiVElSZXR4S0lRVjFzRTF3LzdSY2JObVlFUjlheVF3RWw4S1pBcEg0OHpOWSI7ZXhwaXJlc19ieXxpOjE2NDU3Nzg1MTM7ZnVsbG5hbWV8czoxMToiUHJpbWEgQXVsaWEiO2dyb3VwX2FjdGl2ZXxzOjE6IjEiO2dyb3VwX25hbWV8czoxMToiU3VwZXIgQWRtaW4iO2xldmVsX2Frc2VzfHM6MTE6IlNVUEVSIEFETUlOIjtuaWNrX2xldmVsfHM6MzoiU0FEIjt1c2VyX2lkfHM6MzI6IjRBMzcyOUNBNUExNTkzRDcyRTY3RkYwRkUzMTE4NUQxIjt1bml0X2lkfHM6NDoiMjQ5NiI7dW5pdF9pZF9uYW1lfHM6NDM6IkRpbmFzIEtvbXVuaWthc2ksIEluZm9ybWF0aWthIERhbiBTdGF0aXN0aWsiO2dyb3VwX3N3aXRjaHxhOjI6e2k6MDthOjI6e3M6ODoiaWRfZ3JvdXAiO3M6MToiMSI7czoxMDoibmFtYV9ncm91cCI7czoxMToiU3VwZXIgQWRtaW4iO31pOjE7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjMiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6OToiQWRtaW4gT1BEIjt9fQ==');
INSERT INTO `xi_sa_ci_session` VALUES ('600s9emlihbr6o2si75qdjtiju7t997s', '::1', 1668435743, '__ci_last_regenerate|i:1668435743;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"4a1e4d6f27a65374ab7929d64f8365fcf83c57943c8ed467a80bb0f0a1b94fc5fb8b7a0b9bc2542b9be63fa735163eed0239d933491a3e79de36115027028043svLC/I7zgTYzJ9GnsA8HsZ9Y6LtUf3mU2gmS6pHh4LEcG5yUcGMHqtzIjclEs5gv\";expires_by|i:1668438338;fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|s:4:\"2496\";unit_id_name|s:43:\"Dinas Komunikasi, Informatika Dan Statistik\";group_switch|a:2:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"3\";s:10:\"nama_group\";s:9:\"Admin OPD\";}}');
INSERT INTO `xi_sa_ci_session` VALUES ('67d73s4426a2krep97297r00fs04aj5n', '::1', 1645777960, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjQ1Nzc3OTYwO2Z1bGxuYW1lfHM6MTE6IlByaW1hIEF1bGlhIjt1bml0X2lkX25hbWV8czo0MzoiRGluYXMgS29tdW5pa2FzaSwgSW5mb3JtYXRpa2EgRGFuIFN0YXRpc3RpayI7YWNjb3VudF9uYW1lfHM6MTA6InByaW1hYXVsaWEiO2NsZWFyM25naW5lMjAyMnxzOjE5MjoiNzI0Y2U2YjJmYTY0ZGI0MjJkMzBmMjU3OGY5OWFmM2FiYzNkMzBkMDcwM2EwYjJlNWM1OTA3Y2NkODRkZDgyOTc4NmViZWUwYzIxYzU2NGNmYmRhNjVmMDVmNjJmYzE0OGNjZDQzYWQ4OTllNGU0OTMxY2I2MTdjNTZlNDExNzIyaHp5Y2o2UmVYeDNDcXBuaSs3K05WUURDQThjRjhVUjV1TWxSbXhwdk41N2ZJVG1EMkZpalEySElmSjJxNXNWIjtleHBpcmVzX2J5fGk6MTY0NTc3OTI1ODtncm91cF9hY3RpdmV8czoxOiIxIjtncm91cF9uYW1lfHM6MTE6IlN1cGVyIEFkbWluIjtsZXZlbF9ha3Nlc3xzOjExOiJTVVBFUiBBRE1JTiI7bmlja19sZXZlbHxzOjM6IlNBRCI7dXNlcl9pZHxzOjMyOiI0QTM3MjlDQTVBMTU5M0Q3MkU2N0ZGMEZFMzExODVEMSI7dW5pdF9pZHxzOjQ6IjI0OTYiO2dyb3VwX3N3aXRjaHxhOjI6e2k6MDthOjI6e3M6ODoiaWRfZ3JvdXAiO3M6MToiMSI7czoxMDoibmFtYV9ncm91cCI7czoxMToiU3VwZXIgQWRtaW4iO31pOjE7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjMiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6OToiQWRtaW4gT1BEIjt9fQ==');
INSERT INTO `xi_sa_ci_session` VALUES ('7m2ockg1r603inp4q17pu9omu2ti37nl', '::1', 1668442176, '__ci_last_regenerate|i:1668442172;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"4a1e4d6f27a65374ab7929d64f8365fcf83c57943c8ed467a80bb0f0a1b94fc5fb8b7a0b9bc2542b9be63fa735163eed0239d933491a3e79de36115027028043svLC/I7zgTYzJ9GnsA8HsZ9Y6LtUf3mU2gmS6pHh4LEcG5yUcGMHqtzIjclEs5gv\";expires_by|i:1668438338;fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|s:4:\"2496\";unit_id_name|s:43:\"Dinas Komunikasi, Informatika Dan Statistik\";group_switch|a:2:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"3\";s:10:\"nama_group\";s:9:\"Admin OPD\";}}');
INSERT INTO `xi_sa_ci_session` VALUES ('8vs8nhr87bu5osu3km0jcjm0mfpnvs7m', '::1', 1668442172, '__ci_last_regenerate|i:1668442172;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"4a1e4d6f27a65374ab7929d64f8365fcf83c57943c8ed467a80bb0f0a1b94fc5fb8b7a0b9bc2542b9be63fa735163eed0239d933491a3e79de36115027028043svLC/I7zgTYzJ9GnsA8HsZ9Y6LtUf3mU2gmS6pHh4LEcG5yUcGMHqtzIjclEs5gv\";expires_by|i:1668438338;fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|s:4:\"2496\";unit_id_name|s:43:\"Dinas Komunikasi, Informatika Dan Statistik\";group_switch|a:2:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"3\";s:10:\"nama_group\";s:9:\"Admin OPD\";}}');
INSERT INTO `xi_sa_ci_session` VALUES ('ak26g29qv4goi66s1kb4l0h3c5f49813', '::1', 1668441856, '__ci_last_regenerate|i:1668441856;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"4a1e4d6f27a65374ab7929d64f8365fcf83c57943c8ed467a80bb0f0a1b94fc5fb8b7a0b9bc2542b9be63fa735163eed0239d933491a3e79de36115027028043svLC/I7zgTYzJ9GnsA8HsZ9Y6LtUf3mU2gmS6pHh4LEcG5yUcGMHqtzIjclEs5gv\";expires_by|i:1668438338;fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|s:4:\"2496\";unit_id_name|s:43:\"Dinas Komunikasi, Informatika Dan Statistik\";group_switch|a:2:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"3\";s:10:\"nama_group\";s:9:\"Admin OPD\";}}');
INSERT INTO `xi_sa_ci_session` VALUES ('bvah872arr0trhin8mbrokcapdvlotup', '::1', 1645774883, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjQ1Nzc0ODgzOw==');
INSERT INTO `xi_sa_ci_session` VALUES ('efjf2leradbjdk32ucmi0hmi746ffaog', '::1', 1645775756, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjQ1Nzc1NzU2O2Z1bGxuYW1lfHM6MTE6IlByaW1hIEF1bGlhIjt1bml0X2lkX25hbWV8czo0MzoiRGluYXMgS29tdW5pa2FzaSwgSW5mb3JtYXRpa2EgRGFuIFN0YXRpc3RpayI7YWNjb3VudF9uYW1lfHM6MTA6InByaW1hYXVsaWEiO2NsZWFyM25naW5lMjAyMnxzOjE5MjoiNzI0Y2U2YjJmYTY0ZGI0MjJkMzBmMjU3OGY5OWFmM2FiYzNkMzBkMDcwM2EwYjJlNWM1OTA3Y2NkODRkZDgyOTc4NmViZWUwYzIxYzU2NGNmYmRhNjVmMDVmNjJmYzE0OGNjZDQzYWQ4OTllNGU0OTMxY2I2MTdjNTZlNDExNzIyaHp5Y2o2UmVYeDNDcXBuaSs3K05WUURDQThjRjhVUjV1TWxSbXhwdk41N2ZJVG1EMkZpalEySElmSjJxNXNWIjtleHBpcmVzX2J5fGk6MTY0NTc3OTI1ODtncm91cF9hY3RpdmV8czoxOiIxIjtncm91cF9uYW1lfHM6MTE6IlN1cGVyIEFkbWluIjtsZXZlbF9ha3Nlc3xzOjExOiJTVVBFUiBBRE1JTiI7bmlja19sZXZlbHxzOjM6IlNBRCI7dXNlcl9pZHxzOjMyOiI0QTM3MjlDQTVBMTU5M0Q3MkU2N0ZGMEZFMzExODVEMSI7dW5pdF9pZHxzOjQ6IjI0OTYiO2dyb3VwX3N3aXRjaHxhOjI6e2k6MDthOjI6e3M6ODoiaWRfZ3JvdXAiO3M6MToiMSI7czoxMDoibmFtYV9ncm91cCI7czoxMToiU3VwZXIgQWRtaW4iO31pOjE7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjMiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6OToiQWRtaW4gT1BEIjt9fQ==');
INSERT INTO `xi_sa_ci_session` VALUES ('jid5f3ssr1k6svn7o405kv6hudi6jm84', '::1', 1645774885, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjQ1Nzc0ODg1Ow==');
INSERT INTO `xi_sa_ci_session` VALUES ('kfh543ttagmc12od24vtv3vkkonf4l5c', '::1', 1668437030, '__ci_last_regenerate|i:1668437030;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"4a1e4d6f27a65374ab7929d64f8365fcf83c57943c8ed467a80bb0f0a1b94fc5fb8b7a0b9bc2542b9be63fa735163eed0239d933491a3e79de36115027028043svLC/I7zgTYzJ9GnsA8HsZ9Y6LtUf3mU2gmS6pHh4LEcG5yUcGMHqtzIjclEs5gv\";expires_by|i:1668438338;fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|s:4:\"2496\";unit_id_name|s:43:\"Dinas Komunikasi, Informatika Dan Statistik\";group_switch|a:2:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"3\";s:10:\"nama_group\";s:9:\"Admin OPD\";}}');
INSERT INTO `xi_sa_ci_session` VALUES ('ni084pd1n3ctvmau6hngji1i1lo7pm3s', '::1', 1645781233, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjQ1NzgxMjMzO2Z1bGxuYW1lfHM6MTE6IlByaW1hIEF1bGlhIjt1bml0X2lkX25hbWV8czo0MzoiRGluYXMgS29tdW5pa2FzaSwgSW5mb3JtYXRpa2EgRGFuIFN0YXRpc3RpayI7YWNjb3VudF9uYW1lfHM6MTA6InByaW1hYXVsaWEiO2NsZWFyM25naW5lMjAyMnxzOjE5MjoiNzI0Y2U2YjJmYTY0ZGI0MjJkMzBmMjU3OGY5OWFmM2FiYzNkMzBkMDcwM2EwYjJlNWM1OTA3Y2NkODRkZDgyOTc4NmViZWUwYzIxYzU2NGNmYmRhNjVmMDVmNjJmYzE0OGNjZDQzYWQ4OTllNGU0OTMxY2I2MTdjNTZlNDExNzIyaHp5Y2o2UmVYeDNDcXBuaSs3K05WUURDQThjRjhVUjV1TWxSbXhwdk41N2ZJVG1EMkZpalEySElmSjJxNXNWIjtleHBpcmVzX2J5fGk6MTY0NTc3OTI1ODtncm91cF9hY3RpdmV8czoxOiIxIjtncm91cF9uYW1lfHM6MTE6IlN1cGVyIEFkbWluIjtsZXZlbF9ha3Nlc3xzOjExOiJTVVBFUiBBRE1JTiI7bmlja19sZXZlbHxzOjM6IlNBRCI7dXNlcl9pZHxzOjMyOiI0QTM3MjlDQTVBMTU5M0Q3MkU2N0ZGMEZFMzExODVEMSI7dW5pdF9pZHxzOjQ6IjI0OTYiO2dyb3VwX3N3aXRjaHxhOjI6e2k6MDthOjI6e3M6ODoiaWRfZ3JvdXAiO3M6MToiMSI7czoxMDoibmFtYV9ncm91cCI7czoxMToiU3VwZXIgQWRtaW4iO31pOjE7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjMiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6OToiQWRtaW4gT1BEIjt9fQ==');
INSERT INTO `xi_sa_ci_session` VALUES ('rc0auup1u0k4c27qs15bt2ie0ntn70ni', '::1', 1645781352, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjQ1NzgxMjMzO2Z1bGxuYW1lfHM6MTE6IlByaW1hIEF1bGlhIjt1bml0X2lkX25hbWV8czo0MzoiRGluYXMgS29tdW5pa2FzaSwgSW5mb3JtYXRpa2EgRGFuIFN0YXRpc3RpayI7YWNjb3VudF9uYW1lfHM6MTA6InByaW1hYXVsaWEiO2NsZWFyM25naW5lMjAyMnxzOjE5MjoiNzI0Y2U2YjJmYTY0ZGI0MjJkMzBmMjU3OGY5OWFmM2FiYzNkMzBkMDcwM2EwYjJlNWM1OTA3Y2NkODRkZDgyOTc4NmViZWUwYzIxYzU2NGNmYmRhNjVmMDVmNjJmYzE0OGNjZDQzYWQ4OTllNGU0OTMxY2I2MTdjNTZlNDExNzIyaHp5Y2o2UmVYeDNDcXBuaSs3K05WUURDQThjRjhVUjV1TWxSbXhwdk41N2ZJVG1EMkZpalEySElmSjJxNXNWIjtleHBpcmVzX2J5fGk6MTY0NTc3OTI1ODtncm91cF9hY3RpdmV8czoxOiIxIjtncm91cF9uYW1lfHM6MTE6IlN1cGVyIEFkbWluIjtsZXZlbF9ha3Nlc3xzOjExOiJTVVBFUiBBRE1JTiI7bmlja19sZXZlbHxzOjM6IlNBRCI7dXNlcl9pZHxzOjMyOiI0QTM3MjlDQTVBMTU5M0Q3MkU2N0ZGMEZFMzExODVEMSI7dW5pdF9pZHxzOjQ6IjI0OTYiO2dyb3VwX3N3aXRjaHxhOjI6e2k6MDthOjI6e3M6ODoiaWRfZ3JvdXAiO3M6MToiMSI7czoxMDoibmFtYV9ncm91cCI7czoxMToiU3VwZXIgQWRtaW4iO31pOjE7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjMiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6OToiQWRtaW4gT1BEIjt9fQ==');
INSERT INTO `xi_sa_ci_session` VALUES ('us36k99tkhi0d9h6r6p1ivh76cj5r0m2', '::1', 1646101675, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjQ2MTAxNjYwO2FjY291bnRfbmFtZXxzOjEwOiJwcmltYWF1bGlhIjtjbGVhcjNuZ2luZTIwMjJ8czoxOTI6IjIyZWM1ZjJlYjJjZDBjZThhNzVhZWU2ZDcxNjVhYWM2NmQ3NTI2MjM3YTQzNjAzMmQ2NGM3MjFmOTIyOWUxYTI5ZDI1NDlhZTM0N2U3NGE1NDc5ZmI5ODA1YmRiMDhiY2JkMTU2NDg3MjU3MGQ0N2RmZmIzMDFkNDE5MWJjMTA1Yk1lMmNpL2NYOFhtSTlJSnFmUWNIYmNIYUVKZXhycFIrYTdVajR6SmxDSTZFbGNHYnNDai8yc3RybTJWbzBrRyI7ZXhwaXJlc19ieXxpOjE2NDYxMDUyNzE7ZnVsbG5hbWV8czoxMToiUHJpbWEgQXVsaWEiO2dyb3VwX2FjdGl2ZXxzOjE6IjEiO2dyb3VwX25hbWV8czoxMToiU3VwZXIgQWRtaW4iO2xldmVsX2Frc2VzfHM6MTE6IlNVUEVSIEFETUlOIjtuaWNrX2xldmVsfHM6MzoiU0FEIjt1c2VyX2lkfHM6MzI6IjRBMzcyOUNBNUExNTkzRDcyRTY3RkYwRkUzMTE4NUQxIjt1bml0X2lkfHM6NDoiMjQ5NiI7dW5pdF9pZF9uYW1lfHM6NDM6IkRpbmFzIEtvbXVuaWthc2ksIEluZm9ybWF0aWthIERhbiBTdGF0aXN0aWsiO2dyb3VwX3N3aXRjaHxhOjI6e2k6MDthOjI6e3M6ODoiaWRfZ3JvdXAiO3M6MToiMSI7czoxMDoibmFtYV9ncm91cCI7czoxMToiU3VwZXIgQWRtaW4iO31pOjE7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjMiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6OToiQWRtaW4gT1BEIjt9fQ==');

-- ----------------------------
-- Table structure for xi_sa_fungsi
-- ----------------------------
DROP TABLE IF EXISTS `xi_sa_fungsi`;
CREATE TABLE `xi_sa_fungsi`  (
  `id_fungsi` smallint NOT NULL AUTO_INCREMENT,
  `nama_fungsi` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `label_fungsi` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `url_fungsi` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_fungsi` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_jenis_fungsi` tinyint NOT NULL,
  `create_by` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `create_ip` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mod_by` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mod_date` datetime NOT NULL,
  `mod_ip` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_status` tinyint NOT NULL,
  `id_level_akses` tinyint NULL DEFAULT NULL,
  PRIMARY KEY (`id_fungsi`) USING BTREE,
  INDEX `fungsiToJenisFungsi`(`id_jenis_fungsi` ASC) USING BTREE,
  INDEX `fungsiToStatus`(`id_status` ASC) USING BTREE,
  INDEX `fungsiToLevelAkses`(`id_level_akses` ASC) USING BTREE,
  CONSTRAINT `fungsiToJenisFungsi` FOREIGN KEY (`id_jenis_fungsi`) REFERENCES `xi_sa_jenis_fungsi` (`id_jenis_fungsi`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fungsiToStatus` FOREIGN KEY (`id_status`) REFERENCES `xi_sa_status` (`id_status`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fungsiToLevelAkses` FOREIGN KEY (`id_level_akses`) REFERENCES `xi_sa_level_akses` (`id_level_akses`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of xi_sa_fungsi
-- ----------------------------
INSERT INTO `xi_sa_fungsi` VALUES (1, 'index', 'Index', 'index', 'Fungsi untuk menampilkan data', 1, 'primaaulia', '2017-06-04 19:30:40', '::1', 'primaaulia', '2020-08-28 11:45:59', '::1', 1, NULL);
INSERT INTO `xi_sa_fungsi` VALUES (2, 'create', 'Create Data', 'create', 'Fungsi untuk menambahkan data', 2, 'primaaulia', '2017-06-04 19:32:33', '::1', 'primaaulia', '2017-09-05 17:52:35', '::1', 1, NULL);
INSERT INTO `xi_sa_fungsi` VALUES (3, 'update', 'Update Data', 'update', 'Fungsi untuk merubah data', 2, 'primaaulia', '2017-06-04 19:33:01', '::1', 'primaaulia', '2017-09-05 17:52:44', '::1', 1, NULL);
INSERT INTO `xi_sa_fungsi` VALUES (4, 'delete', 'Delete Data', 'delete', 'Fungsi untuk menghapus data', 2, 'primaaulia', '2017-06-04 19:33:33', '::1', 'primaaulia', '2017-09-05 17:52:52', '::1', 1, NULL);
INSERT INTO `xi_sa_fungsi` VALUES (5, 'listview', 'List View Data', 'listview', 'Fungsi untuk menampilkan list data', 2, 'primaaulia', '2017-11-06 13:59:43', '::1', 'primaaulia', '2017-11-06 13:59:43', '::1', 1, NULL);
INSERT INTO `xi_sa_fungsi` VALUES (6, 'review', 'Review Data', 'review', 'Fungsi untuk mereview data kembali', 2, 'primaaulia', '2017-12-17 23:45:14', '::1', 'primaaulia', '2017-12-17 23:45:29', '::1', 1, NULL);
INSERT INTO `xi_sa_fungsi` VALUES (7, 'details', 'Data Details', 'details', 'Fungsi untuk melihat rincian data', 2, 'primaaulia', '2017-12-27 08:28:13', '::1', 'primaaulia', '2017-12-27 08:28:13', '::1', 1, NULL);
INSERT INTO `xi_sa_fungsi` VALUES (8, 'searching', 'Searching', 'searching', 'Fungsi untuk mencari data', 2, 'primaaulia', '2017-11-07 13:21:59', '::1', 'primaaulia', '2017-11-07 13:21:59', '::1', 1, NULL);
INSERT INTO `xi_sa_fungsi` VALUES (9, 'rules', 'Rules Module', 'rules', 'Fungsi untuk setting rules module', 2, 'primaaulia', '2017-06-05 10:51:09', '::1', 'primaaulia', '2020-04-07 22:38:12', '::1', 1, NULL);
INSERT INTO `xi_sa_fungsi` VALUES (10, 'privileges', 'Group Privilege', 'privileges', 'Fungsi untuk setting group privilege', 2, 'primaaulia', '2017-06-10 22:23:24', '::1', 'primaaulia', '2017-08-03 12:20:22', '::1', 1, NULL);
INSERT INTO `xi_sa_fungsi` VALUES (11, 'regency', 'Data Regency', 'regency', 'Fungsi untuk mengambil data regency', 2, 'primaaulia', '2020-04-11 22:38:38', '::1', 'primaaulia', '2020-04-11 22:38:38', '::1', 1, NULL);
INSERT INTO `xi_sa_fungsi` VALUES (12, 'district', 'Data District', 'district', 'Fungsi untuk mengambil data district', 2, 'primaaulia', '2020-04-11 22:39:48', '::1', 'primaaulia', '2020-04-11 22:39:48', '::1', 1, NULL);
INSERT INTO `xi_sa_fungsi` VALUES (13, 'village', 'Data Village', 'village', 'Fungsi untuk mengambil data village', 2, 'primaaulia', '2020-04-11 22:40:11', '::1', 'primaaulia', '2020-04-11 22:40:11', '::1', 1, NULL);
INSERT INTO `xi_sa_fungsi` VALUES (14, 'approve', 'Data Approve', 'approve', 'Fungsi untuk menyetujui data', 2, 'primaaulia', '2018-04-03 09:22:12', '36.67.167.61', 'primaaulia', '2018-04-03 09:22:12', '36.67.167.61', 1, NULL);
INSERT INTO `xi_sa_fungsi` VALUES (15, 'reject', 'Data Reject', 'reject', 'Fungsi untuk menolak data', 2, 'primaaulia', '2018-04-03 09:22:12', '36.67.167.61', 'primaaulia', '2018-04-03 09:22:12', '36.67.167.61', 1, NULL);
INSERT INTO `xi_sa_fungsi` VALUES (16, 'upload', 'Upload Data', 'upload', 'Fungsi untuk mengupload file', 2, 'primaaulia', '2018-07-24 22:20:18', '::1', 'primaaulia', '2018-08-03 15:09:33', '::1', 1, NULL);
INSERT INTO `xi_sa_fungsi` VALUES (17, 'download', 'Download Data', 'download', 'Fungsi untuk mendownload file', 2, 'primaaulia', '2018-07-24 22:21:04', '::1', 'primaaulia', '2018-08-03 15:09:42', '::1', 1, NULL);
INSERT INTO `xi_sa_fungsi` VALUES (18, 'export_to_word', 'Download Word', 'export-to-word', 'Fungsi download laporan format word', 2, 'primaaulia', '2020-05-02 07:16:39', '::1', 'primaaulia', '2020-05-22 08:03:33', '::1', 1, NULL);
INSERT INTO `xi_sa_fungsi` VALUES (19, 'export_to_excel', 'Download Excel', 'export-to-excel', 'Fungsi download laporan format excel', 2, 'primaaulia', '2020-05-11 08:27:30', '::1', 'primaaulia', '2020-05-11 08:27:30', '::1', 1, NULL);
INSERT INTO `xi_sa_fungsi` VALUES (20, 'export_to_pdf', 'Download PDF', 'export-to-pdf', 'Fungsi download laporan format pdf', 2, 'primaaulia', '2020-05-11 08:30:42', '::1', 'primaaulia', '2020-05-11 08:30:42', '::1', 1, NULL);
INSERT INTO `xi_sa_fungsi` VALUES (25, 'getOptionOpd', 'Get Option OPD', 'getOptionOpd', 'untuk memanggil option data opd dari API Simpeg', 2, 'primaaulia', '2021-03-25 09:22:37', '127.0.0.1', 'primaaulia', '2021-03-25 09:22:37', '127.0.0.1', 1, NULL);

-- ----------------------------
-- Table structure for xi_sa_group
-- ----------------------------
DROP TABLE IF EXISTS `xi_sa_group`;
CREATE TABLE `xi_sa_group`  (
  `id_group` smallint NOT NULL AUTO_INCREMENT,
  `nama_group` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_level_akses` tinyint NOT NULL,
  `create_by` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `create_ip` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mod_by` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mod_date` datetime NOT NULL,
  `mod_ip` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_status` tinyint NOT NULL,
  PRIMARY KEY (`id_group`) USING BTREE,
  INDEX `groupToLevelAkses`(`id_level_akses` ASC) USING BTREE,
  INDEX `groupToStatus`(`id_status` ASC) USING BTREE,
  CONSTRAINT `groupToLevelAkses` FOREIGN KEY (`id_level_akses`) REFERENCES `xi_sa_level_akses` (`id_level_akses`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `groupToStatus` FOREIGN KEY (`id_status`) REFERENCES `xi_sa_status` (`id_status`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of xi_sa_group
-- ----------------------------
INSERT INTO `xi_sa_group` VALUES (1, 'Super Admin', 1, 'primaaulia', '2020-04-07 00:00:00', '::1', 'primaaulia', '2020-04-07 00:00:00', '::1', 1);
INSERT INTO `xi_sa_group` VALUES (3, 'Admin OPD', 3, 'primaaulia', '2020-09-20 12:39:02', '::1', 'primaaulia', '2021-03-24 11:43:00', '127.0.0.1', 1);
INSERT INTO `xi_sa_group` VALUES (4, 'Admin', 2, 'primaaulia', '2022-02-24 10:57:43', '::1', 'primaaulia', '2022-02-24 10:58:00', '::1', 1);

-- ----------------------------
-- Table structure for xi_sa_group_privileges
-- ----------------------------
DROP TABLE IF EXISTS `xi_sa_group_privileges`;
CREATE TABLE `xi_sa_group_privileges`  (
  `id_group_privileges` smallint NOT NULL AUTO_INCREMENT,
  `id_group` smallint NOT NULL,
  `id_rules` smallint NOT NULL,
  `id_status` tinyint NOT NULL,
  PRIMARY KEY (`id_group_privileges`) USING BTREE,
  INDEX `groupPrevilegesToGroup`(`id_group` ASC) USING BTREE,
  INDEX `groupPrevilegesToRules`(`id_rules` ASC) USING BTREE,
  INDEX `groupPrevilegesToStatus`(`id_status` ASC) USING BTREE,
  CONSTRAINT `groupPrevilegesToGroup` FOREIGN KEY (`id_group`) REFERENCES `xi_sa_group` (`id_group`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `groupPrevilegesToRules` FOREIGN KEY (`id_rules`) REFERENCES `xi_sa_rules` (`id_rules`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `groupPrevilegesToStatus` FOREIGN KEY (`id_status`) REFERENCES `xi_sa_status` (`id_status`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 282 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of xi_sa_group_privileges
-- ----------------------------
INSERT INTO `xi_sa_group_privileges` VALUES (1, 1, 1, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (2, 1, 2, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (3, 1, 3, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (4, 1, 4, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (5, 1, 5, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (6, 1, 6, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (7, 1, 7, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (8, 1, 8, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (9, 1, 9, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (10, 1, 10, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (11, 1, 11, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (12, 1, 12, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (13, 1, 13, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (14, 1, 14, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (15, 1, 15, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (16, 1, 16, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (17, 1, 17, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (18, 1, 18, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (19, 1, 19, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (20, 1, 20, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (21, 1, 21, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (22, 1, 22, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (23, 1, 23, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (24, 1, 24, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (25, 1, 25, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (26, 1, 26, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (27, 1, 27, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (28, 1, 28, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (29, 1, 29, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (30, 1, 30, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (31, 1, 31, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (32, 1, 32, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (33, 1, 33, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (34, 1, 34, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (35, 1, 35, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (36, 1, 36, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (37, 1, 37, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (38, 1, 38, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (39, 1, 39, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (40, 1, 40, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (131, 1, 94, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (199, 3, 1, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (241, 4, 1, 1);
INSERT INTO `xi_sa_group_privileges` VALUES (242, 3, 2, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (243, 3, 3, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (244, 3, 4, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (245, 3, 5, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (246, 3, 6, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (247, 3, 7, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (248, 3, 8, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (249, 3, 9, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (250, 3, 10, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (251, 3, 11, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (252, 3, 12, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (253, 3, 13, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (254, 3, 14, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (255, 3, 15, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (256, 3, 16, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (257, 3, 17, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (258, 3, 18, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (259, 3, 19, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (260, 3, 20, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (261, 3, 21, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (262, 3, 22, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (263, 3, 23, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (264, 3, 24, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (265, 3, 25, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (266, 3, 26, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (267, 3, 27, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (268, 3, 28, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (269, 3, 29, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (270, 3, 30, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (271, 3, 31, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (272, 3, 32, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (273, 3, 33, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (274, 3, 34, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (275, 3, 35, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (276, 3, 36, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (277, 3, 37, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (278, 3, 38, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (279, 3, 39, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (280, 3, 40, 0);
INSERT INTO `xi_sa_group_privileges` VALUES (281, 3, 94, 0);

-- ----------------------------
-- Table structure for xi_sa_jenis_fungsi
-- ----------------------------
DROP TABLE IF EXISTS `xi_sa_jenis_fungsi`;
CREATE TABLE `xi_sa_jenis_fungsi`  (
  `id_jenis_fungsi` tinyint NOT NULL AUTO_INCREMENT,
  `jenis_fungsi` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_status` tinyint NOT NULL,
  PRIMARY KEY (`id_jenis_fungsi`) USING BTREE,
  INDEX `jenisFungsiToStatus`(`id_status` ASC) USING BTREE,
  CONSTRAINT `jenisFungsiToStatus` FOREIGN KEY (`id_status`) REFERENCES `xi_sa_status` (`id_status`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of xi_sa_jenis_fungsi
-- ----------------------------
INSERT INTO `xi_sa_jenis_fungsi` VALUES (1, 'Fungsi Public', 1);
INSERT INTO `xi_sa_jenis_fungsi` VALUES (2, 'Fungsi Pendukung', 1);
INSERT INTO `xi_sa_jenis_fungsi` VALUES (3, 'Fungsi Private', 1);
INSERT INTO `xi_sa_jenis_fungsi` VALUES (4, 'Fungsi Belum Ada', 1);

-- ----------------------------
-- Table structure for xi_sa_kontrol
-- ----------------------------
DROP TABLE IF EXISTS `xi_sa_kontrol`;
CREATE TABLE `xi_sa_kontrol`  (
  `id_kontrol` smallint NOT NULL AUTO_INCREMENT,
  `nama_kontrol` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `label_kontrol` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `url_kontrol` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_kontrol` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_by` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `create_ip` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mod_by` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mod_date` datetime NOT NULL,
  `mod_ip` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_status` tinyint NOT NULL,
  PRIMARY KEY (`id_kontrol`) USING BTREE,
  INDEX `kontrolToStatus`(`id_status` ASC) USING BTREE,
  CONSTRAINT `kontrolToStatus` FOREIGN KEY (`id_status`) REFERENCES `xi_sa_status` (`id_status`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of xi_sa_kontrol
-- ----------------------------
INSERT INTO `xi_sa_kontrol` VALUES (1, 'home', 'Home', 'home', 'Halaman dashboard', 'primaaulia', '2017-06-04 19:36:44', '::1', 'primaaulia', '2020-05-19 11:01:39', '::1', 1);
INSERT INTO `xi_sa_kontrol` VALUES (2, 'fungsi', 'Fungsi', 'fungsi', 'Halaman manajamen fungsi', 'primaaulia', '2017-06-04 19:37:18', '::1', 'primaaulia', '2017-06-07 11:42:03', '::1', 1);
INSERT INTO `xi_sa_kontrol` VALUES (3, 'kontrol', 'Kontrol', 'kontrol', 'Halaman manajemen kontrol', 'primaaulia', '2017-06-04 19:37:38', '::1', 'primaaulia', '2017-06-07 11:41:55', '::1', 1);
INSERT INTO `xi_sa_kontrol` VALUES (4, 'module', 'Module', 'module', 'Halaman manajemen module', 'primaaulia', '2017-06-04 19:37:58', '::1', 'primaaulia', '2017-06-07 11:41:47', '::1', 1);
INSERT INTO `xi_sa_kontrol` VALUES (5, 'menu', 'Menu', 'menu', 'Halaman majamen menu', 'primaaulia', '2017-06-07 11:41:18', '::1', 'primaaulia', '2017-06-07 11:41:18', '::1', 1);
INSERT INTO `xi_sa_kontrol` VALUES (6, 'group', 'Group', 'group', 'Halaman manajemen group', 'primaaulia', '2017-06-10 22:23:53', '::1', 'primaaulia', '2017-06-10 22:24:15', '::1', 1);
INSERT INTO `xi_sa_kontrol` VALUES (7, 'users', 'Users', 'users', 'Halaman manajemen users', 'primaaulia', '2017-06-14 19:18:54', '::1', 'primaaulia', '2017-06-14 19:19:06', '::1', 1);

-- ----------------------------
-- Table structure for xi_sa_level_akses
-- ----------------------------
DROP TABLE IF EXISTS `xi_sa_level_akses`;
CREATE TABLE `xi_sa_level_akses`  (
  `id_level_akses` tinyint NOT NULL AUTO_INCREMENT,
  `level_akses` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nick_level` char(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_status` tinyint NOT NULL,
  PRIMARY KEY (`id_level_akses`) USING BTREE,
  INDEX `levelAksesToStatus`(`id_status` ASC) USING BTREE,
  CONSTRAINT `levelAksesToStatus` FOREIGN KEY (`id_status`) REFERENCES `xi_sa_status` (`id_status`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of xi_sa_level_akses
-- ----------------------------
INSERT INTO `xi_sa_level_akses` VALUES (1, 'SUPER ADMIN', 'SAD', 1);
INSERT INTO `xi_sa_level_akses` VALUES (2, 'ADMIN', 'ADM', 1);
INSERT INTO `xi_sa_level_akses` VALUES (3, 'OPERATOR', 'OPR', 1);

-- ----------------------------
-- Table structure for xi_sa_log_login
-- ----------------------------
DROP TABLE IF EXISTS `xi_sa_log_login`;
CREATE TABLE `xi_sa_log_login`  (
  `id_log` smallint NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `login_time` int NOT NULL,
  `ip_address` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_agent` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_log`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of xi_sa_log_login
-- ----------------------------

-- ----------------------------
-- Table structure for xi_sa_log_session
-- ----------------------------
DROP TABLE IF EXISTS `xi_sa_log_session`;
CREATE TABLE `xi_sa_log_session`  (
  `id_log_session` smallint NOT NULL AUTO_INCREMENT,
  `id_users` int NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `login_time` int NOT NULL,
  `ip_address` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_agent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_status` smallint NOT NULL,
  `session_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_log_session`) USING BTREE,
  INDEX `logSessionToUsers`(`id_users` ASC) USING BTREE,
  CONSTRAINT `logSessionToUsers` FOREIGN KEY (`id_users`) REFERENCES `xi_sa_users` (`id_users`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 82 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of xi_sa_log_session
-- ----------------------------
INSERT INTO `xi_sa_log_session` VALUES (78, 1, 'primaaulia', 1645774913, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 0, 'fe0c003fb4914a0fd7b45fcf81161d4108b3b0c6e67f21db925a286524bef21c2bf51586ec61bd861ec4630dbb4406a833d585af9f3c1bec22e4815212306ff8LJ8xKthM0PqspwG0JSIhbTIRetxKIQV1sE1w/7RcbNmYER9ayQwEl8KZApH48zNY');
INSERT INTO `xi_sa_log_session` VALUES (79, 1, 'primaaulia', 1645775658, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 1, '724ce6b2fa64db422d30f2578f99af3abc3d30d0703a0b2e5c5907ccd84dd829786ebee0c21c564cfbda65f05f62fc148ccd43ad899e4e4931cb617c56e411722hzycj6ReXx3Cqpni+7+NVQDCA8cF8UR5uMlRmxpvN57fITmD2FijQ2HIfJ2q5sV');
INSERT INTO `xi_sa_log_session` VALUES (80, 1, 'primaaulia', 1646101670, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 1, '22ec5f2eb2cd0ce8a75aee6d7165aac66d7526237a436032d64c721f9229e1a29d2549ae347e74a5479fb9805bdb08bcbd1564872570d47dffb301d4191bc105bMe2ci/cX8XmI9IJqfQcHbcHaEJexrpR+a7Uj4zJlCI6ElcGbsCj/2strm2Vo0kG');
INSERT INTO `xi_sa_log_session` VALUES (81, 1, 'primaaulia', 1668434738, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 1, '4a1e4d6f27a65374ab7929d64f8365fcf83c57943c8ed467a80bb0f0a1b94fc5fb8b7a0b9bc2542b9be63fa735163eed0239d933491a3e79de36115027028043svLC/I7zgTYzJ9GnsA8HsZ9Y6LtUf3mU2gmS6pHh4LEcG5yUcGMHqtzIjclEs5gv');

-- ----------------------------
-- Table structure for xi_sa_menu
-- ----------------------------
DROP TABLE IF EXISTS `xi_sa_menu`;
CREATE TABLE `xi_sa_menu`  (
  `id_menu` smallint NOT NULL AUTO_INCREMENT,
  `title_menu` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `url_menu` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `icon_menu` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `order_menu` smallint NOT NULL,
  `id_rules` smallint NOT NULL,
  `parent_id` smallint NOT NULL,
  `is_parent` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_by` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `create_ip` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mod_by` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mod_date` datetime NOT NULL,
  `mod_ip` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_status` tinyint NOT NULL,
  PRIMARY KEY (`id_menu`) USING BTREE,
  INDEX `menuToRules`(`id_rules` ASC) USING BTREE,
  INDEX `menuToStatus`(`id_status` ASC) USING BTREE,
  CONSTRAINT `menuToRules` FOREIGN KEY (`id_rules`) REFERENCES `xi_sa_rules` (`id_rules`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `menuToStatus` FOREIGN KEY (`id_status`) REFERENCES `xi_sa_status` (`id_status`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of xi_sa_menu
-- ----------------------------
INSERT INTO `xi_sa_menu` VALUES (1, 'Home', '', 'fas fa-home', 1, 1, 0, 'N', 'primaaulia', '2017-06-07 12:09:31', '::1', 'primaaulia', '2020-09-17 20:00:32', '::1', 1);
INSERT INTO `xi_sa_menu` VALUES (2, 'Manajemen', '#', 'fas fa-user-cog', 2, 0, 0, 'Y', 'primaaulia', '2017-06-07 12:09:47', '::1', 'primaaulia', '2019-04-23 14:32:10', '36.67.76.99', 1);
INSERT INTO `xi_sa_menu` VALUES (3, 'Fungsi', '', '', 1, 2, 2, 'N', 'primaaulia', '2017-06-07 12:10:03', '::1', 'primaaulia', '2019-04-23 14:32:04', '36.67.76.99', 1);
INSERT INTO `xi_sa_menu` VALUES (4, 'Kontrol', '', '', 2, 8, 2, 'N', 'primaaulia', '2017-06-07 12:10:26', '::1', 'primaaulia', '2019-04-23 14:32:20', '36.67.76.99', 1);
INSERT INTO `xi_sa_menu` VALUES (5, 'Module', '', '', 3, 14, 2, 'N', 'primaaulia', '2017-06-07 12:10:48', '::1', 'primaaulia', '2019-04-23 14:32:26', '36.67.76.99', 1);
INSERT INTO `xi_sa_menu` VALUES (6, 'Menu', '', '', 5, 21, 2, 'N', 'primaaulia', '2017-06-07 12:11:06', '::1', 'primaaulia', '2020-09-24 08:52:06', '::1', 1);
INSERT INTO `xi_sa_menu` VALUES (7, 'Group', '', '', 4, 27, 2, 'N', 'primaaulia', '2017-06-10 22:25:19', '::1', 'primaaulia', '2020-09-24 08:52:14', '::1', 1);
INSERT INTO `xi_sa_menu` VALUES (8, 'Users', '', '', 6, 34, 2, 'N', 'primaaulia', '2017-06-14 19:20:01', '::1', 'primaaulia', '2019-04-23 14:32:44', '36.67.76.99', 1);

-- ----------------------------
-- Table structure for xi_sa_module
-- ----------------------------
DROP TABLE IF EXISTS `xi_sa_module`;
CREATE TABLE `xi_sa_module`  (
  `id_module` smallint NOT NULL AUTO_INCREMENT,
  `nama_module` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `label_module` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `url_module` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_module` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_by` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `create_ip` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mod_by` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mod_date` datetime NOT NULL,
  `mod_ip` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_status` tinyint NOT NULL,
  PRIMARY KEY (`id_module`) USING BTREE,
  INDEX `moduleToStatus`(`id_status` ASC) USING BTREE,
  CONSTRAINT `moduleToStatus` FOREIGN KEY (`id_status`) REFERENCES `xi_sa_status` (`id_status`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of xi_sa_module
-- ----------------------------
INSERT INTO `xi_sa_module` VALUES (1, 'home', 'Home', 'home', 'Module home', 'primaaulia', '2017-06-04 19:39:22', '::1', 'primaaulia', '2020-05-19 11:06:41', '::1', 1);
INSERT INTO `xi_sa_module` VALUES (2, 'manajemen', 'Manajemen', 'manajemen', 'Module konfigurasi system khusus untuk superadmin', 'primaaulia', '2017-06-04 19:40:50', '::1', 'primaaulia', '2017-08-03 16:00:08', '::1', 1);
INSERT INTO `xi_sa_module` VALUES (3, 'master', 'Data Master', 'master', 'Module data master', 'primaaulia', '2017-11-05 13:58:28', '::1', 'primaaulia', '2020-08-28 23:30:26', '::1', 1);
INSERT INTO `xi_sa_module` VALUES (5, 'laporan', 'Laporan', 'laporan', 'laporan', 'primaaulia', '2022-02-24 16:54:53', '::1', 'primaaulia', '2022-02-24 16:54:53', '::1', 1);

-- ----------------------------
-- Table structure for xi_sa_rules
-- ----------------------------
DROP TABLE IF EXISTS `xi_sa_rules`;
CREATE TABLE `xi_sa_rules`  (
  `id_rules` smallint NOT NULL AUTO_INCREMENT,
  `id_module` smallint NOT NULL,
  `id_kontrol` smallint NOT NULL,
  `id_fungsi` smallint NOT NULL,
  `id_status` tinyint NOT NULL,
  PRIMARY KEY (`id_rules`) USING BTREE,
  INDEX `rulesToFungsi`(`id_fungsi` ASC) USING BTREE,
  INDEX `rulesToKontrol`(`id_kontrol` ASC) USING BTREE,
  INDEX `rulesToModule`(`id_module` ASC) USING BTREE,
  INDEX `rulesToStatus`(`id_status` ASC) USING BTREE,
  CONSTRAINT `rulesToFungsi` FOREIGN KEY (`id_fungsi`) REFERENCES `xi_sa_fungsi` (`id_fungsi`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `rulesToKontrol` FOREIGN KEY (`id_kontrol`) REFERENCES `xi_sa_kontrol` (`id_kontrol`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `rulesToModule` FOREIGN KEY (`id_module`) REFERENCES `xi_sa_module` (`id_module`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `rulesToStatus` FOREIGN KEY (`id_status`) REFERENCES `xi_sa_status` (`id_status`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1002 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of xi_sa_rules
-- ----------------------------
INSERT INTO `xi_sa_rules` VALUES (0, 1, 1, 1, 1);
INSERT INTO `xi_sa_rules` VALUES (1, 1, 1, 1, 1);
INSERT INTO `xi_sa_rules` VALUES (2, 2, 2, 1, 1);
INSERT INTO `xi_sa_rules` VALUES (3, 2, 2, 2, 1);
INSERT INTO `xi_sa_rules` VALUES (4, 2, 2, 3, 1);
INSERT INTO `xi_sa_rules` VALUES (5, 2, 2, 4, 1);
INSERT INTO `xi_sa_rules` VALUES (6, 2, 2, 5, 1);
INSERT INTO `xi_sa_rules` VALUES (7, 2, 2, 7, 1);
INSERT INTO `xi_sa_rules` VALUES (8, 2, 3, 1, 1);
INSERT INTO `xi_sa_rules` VALUES (9, 2, 3, 2, 1);
INSERT INTO `xi_sa_rules` VALUES (10, 2, 3, 3, 1);
INSERT INTO `xi_sa_rules` VALUES (11, 2, 3, 4, 1);
INSERT INTO `xi_sa_rules` VALUES (12, 2, 3, 5, 1);
INSERT INTO `xi_sa_rules` VALUES (13, 2, 3, 7, 1);
INSERT INTO `xi_sa_rules` VALUES (14, 2, 4, 1, 1);
INSERT INTO `xi_sa_rules` VALUES (15, 2, 4, 2, 1);
INSERT INTO `xi_sa_rules` VALUES (16, 2, 4, 3, 1);
INSERT INTO `xi_sa_rules` VALUES (17, 2, 4, 4, 1);
INSERT INTO `xi_sa_rules` VALUES (18, 2, 4, 5, 1);
INSERT INTO `xi_sa_rules` VALUES (19, 2, 4, 7, 1);
INSERT INTO `xi_sa_rules` VALUES (20, 2, 4, 9, 1);
INSERT INTO `xi_sa_rules` VALUES (21, 2, 5, 1, 1);
INSERT INTO `xi_sa_rules` VALUES (22, 2, 5, 2, 1);
INSERT INTO `xi_sa_rules` VALUES (23, 2, 5, 3, 1);
INSERT INTO `xi_sa_rules` VALUES (24, 2, 5, 4, 1);
INSERT INTO `xi_sa_rules` VALUES (25, 2, 5, 5, 1);
INSERT INTO `xi_sa_rules` VALUES (26, 2, 5, 7, 1);
INSERT INTO `xi_sa_rules` VALUES (27, 2, 6, 1, 1);
INSERT INTO `xi_sa_rules` VALUES (28, 2, 6, 2, 1);
INSERT INTO `xi_sa_rules` VALUES (29, 2, 6, 3, 1);
INSERT INTO `xi_sa_rules` VALUES (30, 2, 6, 4, 1);
INSERT INTO `xi_sa_rules` VALUES (31, 2, 6, 5, 1);
INSERT INTO `xi_sa_rules` VALUES (32, 2, 6, 7, 1);
INSERT INTO `xi_sa_rules` VALUES (33, 2, 6, 10, 1);
INSERT INTO `xi_sa_rules` VALUES (34, 2, 7, 1, 1);
INSERT INTO `xi_sa_rules` VALUES (35, 2, 7, 2, 1);
INSERT INTO `xi_sa_rules` VALUES (36, 2, 7, 3, 1);
INSERT INTO `xi_sa_rules` VALUES (37, 2, 7, 4, 1);
INSERT INTO `xi_sa_rules` VALUES (38, 2, 7, 5, 1);
INSERT INTO `xi_sa_rules` VALUES (39, 2, 7, 7, 1);
INSERT INTO `xi_sa_rules` VALUES (40, 2, 7, 8, 1);
INSERT INTO `xi_sa_rules` VALUES (94, 2, 7, 25, 1);
INSERT INTO `xi_sa_rules` VALUES (96, 1, 1, 1, 1);
INSERT INTO `xi_sa_rules` VALUES (97, 1, 1, 1, 1);

-- ----------------------------
-- Table structure for xi_sa_setting
-- ----------------------------
DROP TABLE IF EXISTS `xi_sa_setting`;
CREATE TABLE `xi_sa_setting`  (
  `id` tinyint NOT NULL AUTO_INCREMENT,
  `app_name` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `app_author` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `app_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `app_year` char(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `app_icon` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `app_favicon` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `app_keywords` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `app_versi` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of xi_sa_setting
-- ----------------------------
INSERT INTO `xi_sa_setting` VALUES (1, 'clear engine', 'Dinas Komunikasi dan Informatika Provinsi Sumatera Barat', 'clear engine', '2022', 'logo_sumbar.png', 'favicon.ico', 'Aplikasi Basic', '1.0.0');

-- ----------------------------
-- Table structure for xi_sa_status
-- ----------------------------
DROP TABLE IF EXISTS `xi_sa_status`;
CREATE TABLE `xi_sa_status`  (
  `id_status` tinyint NOT NULL,
  `nm_status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_status`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of xi_sa_status
-- ----------------------------
INSERT INTO `xi_sa_status` VALUES (0, 'Tidak Aktif');
INSERT INTO `xi_sa_status` VALUES (1, 'Aktif');

-- ----------------------------
-- Table structure for xi_sa_users
-- ----------------------------
DROP TABLE IF EXISTS `xi_sa_users`;
CREATE TABLE `xi_sa_users`  (
  `id_users` int NOT NULL,
  `token` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `unit_id` smallint NOT NULL,
  `unit_id_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fullname` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto_profile` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Foto Profile',
  `blokir` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '0=diblokir, 1=tidak diblokir',
  `id_status` tinyint NOT NULL COMMENT '0=Tidak Aktif, 1=Aktif',
  `validate_email_code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `validate_email_status` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `reset_password_code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `reset_password_status` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `reset_password_expired` smallint NOT NULL,
  `create_by` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `create_ip` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mod_by` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mod_date` datetime NOT NULL,
  `mod_ip` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_users`) USING BTREE,
  INDEX `username`(`username` ASC) USING BTREE,
  INDEX `iduser`(`id_users` ASC) USING BTREE,
  INDEX `userToStatus`(`id_status` ASC) USING BTREE,
  CONSTRAINT `userToStatus` FOREIGN KEY (`id_status`) REFERENCES `xi_sa_status` (`id_status`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of xi_sa_users
-- ----------------------------
INSERT INTO `xi_sa_users` VALUES (1, '4A3729CA5A1593D72E67FF0FE31185D1', 2496, 'Dinas Komunikasi, Informatika Dan Statistik', 'primaaulia', '$2a$12$fexNr6W.H7RPvO9rOTjojuHzoWwK1JO7N2nyuFiD/ufsrlO6tU4ju', '', 'Prima Aulia', 'default-user-icon.jpg', '0', 1, '', '0', '', '0', 0, 'primaaulia', '2020-12-23 09:18:01', '::1', 'primaaulia', '2022-02-25 09:52:02', '::1');

-- ----------------------------
-- Table structure for xi_sa_users_default_pass
-- ----------------------------
DROP TABLE IF EXISTS `xi_sa_users_default_pass`;
CREATE TABLE `xi_sa_users_default_pass`  (
  `id_default_pass` int NOT NULL,
  `id_users` int NOT NULL,
  `pass_plain` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `updated` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_default_pass`) USING BTREE,
  INDEX `defaultPasstoUsers`(`id_users` ASC) USING BTREE,
  CONSTRAINT `defaultPasstoUsers` FOREIGN KEY (`id_users`) REFERENCES `xi_sa_users` (`id_users`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of xi_sa_users_default_pass
-- ----------------------------

-- ----------------------------
-- Table structure for xi_sa_users_privileges
-- ----------------------------
DROP TABLE IF EXISTS `xi_sa_users_privileges`;
CREATE TABLE `xi_sa_users_privileges`  (
  `id_users_privileges` int NOT NULL AUTO_INCREMENT,
  `id_users` int NOT NULL,
  `id_group` smallint NOT NULL,
  `id_status` tinyint NOT NULL,
  PRIMARY KEY (`id_users_privileges`) USING BTREE,
  INDEX `whiteToGroup`(`id_group` ASC) USING BTREE,
  INDEX `whiteToUsers`(`id_users` ASC) USING BTREE,
  INDEX `usersPrevilegesToStatus`(`id_status` ASC) USING BTREE,
  CONSTRAINT `whiteToGroup` FOREIGN KEY (`id_group`) REFERENCES `xi_sa_group` (`id_group`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `whiteToUsers` FOREIGN KEY (`id_users`) REFERENCES `xi_sa_users` (`id_users`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `usersPrevilegesToStatus` FOREIGN KEY (`id_status`) REFERENCES `xi_sa_status` (`id_status`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of xi_sa_users_privileges
-- ----------------------------
INSERT INTO `xi_sa_users_privileges` VALUES (2, 1, 1, 1);
INSERT INTO `xi_sa_users_privileges` VALUES (3, 1, 3, 1);

-- ----------------------------
-- Table structure for xi_sa_white_list
-- ----------------------------
DROP TABLE IF EXISTS `xi_sa_white_list`;
CREATE TABLE `xi_sa_white_list`  (
  `id_white_list` int NOT NULL AUTO_INCREMENT,
  `module_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `class_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `method_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_status` tinyint NOT NULL,
  PRIMARY KEY (`id_white_list`) USING BTREE,
  INDEX `whiteToStatus`(`id_status` ASC) USING BTREE,
  CONSTRAINT `whiteToStatus` FOREIGN KEY (`id_status`) REFERENCES `xi_sa_status` (`id_status`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of xi_sa_white_list
-- ----------------------------
INSERT INTO `xi_sa_white_list` VALUES (1, 'auth', 'signin', 'login', 1);
INSERT INTO `xi_sa_white_list` VALUES (2, 'auth', 'signin', 'logout', 1);
INSERT INTO `xi_sa_white_list` VALUES (3, 'auth', 'signin', 'switch_group', 1);
INSERT INTO `xi_sa_white_list` VALUES (4, 'auth', 'signin', 'timeout', 1);
INSERT INTO `xi_sa_white_list` VALUES (5, 'auth', 'signin', 'account', 1);

SET FOREIGN_KEY_CHECKS = 1;
