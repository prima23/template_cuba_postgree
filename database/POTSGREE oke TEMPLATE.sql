/*
 Navicat Premium Data Transfer

 Source Server         : MylocalPG
 Source Server Type    : PostgreSQL
 Source Server Version : 150001 (150001)
 Source Host           : localhost:5432
 Source Catalog        : monitoring2
 Source Schema         : public

 Target Server Type    : PostgreSQL
 Target Server Version : 150001 (150001)
 File Encoding         : 65001

 Date: 20/12/2022 16:03:39
*/


-- ----------------------------
-- Sequence structure for ac_xi_sa_fungsi
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."ac_xi_sa_fungsi";
CREATE SEQUENCE "public"."ac_xi_sa_fungsi" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for ac_xi_sa_group
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."ac_xi_sa_group";
CREATE SEQUENCE "public"."ac_xi_sa_group" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for ac_xi_sa_group_privileges
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."ac_xi_sa_group_privileges";
CREATE SEQUENCE "public"."ac_xi_sa_group_privileges" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for ac_xi_sa_jenis_fungsi
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."ac_xi_sa_jenis_fungsi";
CREATE SEQUENCE "public"."ac_xi_sa_jenis_fungsi" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for ac_xi_sa_kontrol
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."ac_xi_sa_kontrol";
CREATE SEQUENCE "public"."ac_xi_sa_kontrol" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for ac_xi_sa_level_akses
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."ac_xi_sa_level_akses";
CREATE SEQUENCE "public"."ac_xi_sa_level_akses" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for ac_xi_sa_log_login
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."ac_xi_sa_log_login";
CREATE SEQUENCE "public"."ac_xi_sa_log_login" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for ac_xi_sa_log_session
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."ac_xi_sa_log_session";
CREATE SEQUENCE "public"."ac_xi_sa_log_session" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for ac_xi_sa_menu
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."ac_xi_sa_menu";
CREATE SEQUENCE "public"."ac_xi_sa_menu" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for ac_xi_sa_module
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."ac_xi_sa_module";
CREATE SEQUENCE "public"."ac_xi_sa_module" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for ac_xi_sa_rules
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."ac_xi_sa_rules";
CREATE SEQUENCE "public"."ac_xi_sa_rules" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for ac_xi_sa_users
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."ac_xi_sa_users";
CREATE SEQUENCE "public"."ac_xi_sa_users" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for ac_xi_sa_users_default_pass
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."ac_xi_sa_users_default_pass";
CREATE SEQUENCE "public"."ac_xi_sa_users_default_pass" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for ac_xi_sa_users_privileges
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."ac_xi_sa_users_privileges";
CREATE SEQUENCE "public"."ac_xi_sa_users_privileges" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for ac_xi_sa_white_list
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."ac_xi_sa_white_list";
CREATE SEQUENCE "public"."ac_xi_sa_white_list" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Table structure for xi_sa_ci_session
-- ----------------------------
DROP TABLE IF EXISTS "public"."xi_sa_ci_session";
CREATE TABLE "public"."xi_sa_ci_session" (
  "id" varchar(128) COLLATE "pg_catalog"."default" NOT NULL,
  "ip_address" varchar(45) COLLATE "pg_catalog"."default" NOT NULL,
  "timestamp" int4 NOT NULL,
  "data" text COLLATE "pg_catalog"."default" NOT NULL
)
;

-- ----------------------------
-- Records of xi_sa_ci_session
-- ----------------------------
INSERT INTO "public"."xi_sa_ci_session" VALUES ('25b9udgphqs9k59m554abhfirebro1v9', '::1', 1671510003, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTEwMDAzO2Z1bGxuYW1lfHM6MTE6IlByaW1hIEF1bGlhIjt1bml0X2lkX25hbWV8czo0MzoiRGluYXMgS29tdW5pa2FzaSwgSW5mb3JtYXRpa2EgRGFuIFN0YXRpc3RpayI7aWRfZ3JvdXB8czoxOiIzIjtuYW1hX2dyb3VwfHM6NToiQWRtaW4iO25ncm91cHxpOjI7YWNjb3VudF9uYW1lfHM6MTA6InByaW1hYXVsaWEiO2NsZWFyM25naW5lMjAyMnxzOjE5MjoiMTU2YjMyNGRkOTQ3OTlkMWU5MDlhYTVmNmI5Y2U3NTFlNGYzNDExN2UzYWY3NDJkNzYyNmZkZDBmYzY0OWJlNjFmYWE0MDJkNmRjNTEwZjRhNmRkMzllY2UwOTUxMmMwYWM3YTI0YzUxNDA2ZTZlNjY5YjQ1ZGMxMTA1YWJiMmJ0RjM1d2xISGJ2N25JWCt3TFdubTBuUS8wWDU1cTZDaFpyNmVzOFh4T1BLNld0TFdEMWcyU01WV3luS3RVTjU2IjtleHBpcmVzX2J5fGk6MTY3MTUxMjkzNTtncm91cF9hY3RpdmV8czoxOiIxIjtncm91cF9uYW1lfHM6MTE6IlN1cGVyIEFkbWluIjtsZXZlbF9ha3Nlc3xzOjExOiJTVVBFUiBBRE1JTiI7bmlja19sZXZlbHxzOjM6IlNBRCI7dXNlcl9pZHxzOjMyOiI0QTM3MjlDQTVBMTU5M0Q3MkU2N0ZGMEZFMzExODVEMSI7dW5pdF9pZHxzOjQ6IjI0OTYiO2dyb3VwX3N3aXRjaHxhOjI6e2k6MDthOjI6e3M6ODoiaWRfZ3JvdXAiO3M6MToiMSI7czoxMDoibmFtYV9ncm91cCI7czoxMToiU3VwZXIgQWRtaW4iO31pOjE7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjMiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6NToiQWRtaW4iO319');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('nnn6sf3nvkm0ovr3llbgruk0i0tb0mgq', '::1', 1671526184, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTI2MTg0Ow==');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('35eff86h106m4f0abku8fdc56rme9307', '::1', 1671510338, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTEwMzM4O2Z1bGxuYW1lfHM6MTE6IlByaW1hIEF1bGlhIjt1bml0X2lkX25hbWV8czo0MzoiRGluYXMgS29tdW5pa2FzaSwgSW5mb3JtYXRpa2EgRGFuIFN0YXRpc3RpayI7aWRfZ3JvdXB8czoxOiIzIjtuYW1hX2dyb3VwfHM6NToiQWRtaW4iO25ncm91cHxpOjI7YWNjb3VudF9uYW1lfHM6MTA6InByaW1hYXVsaWEiO2NsZWFyM25naW5lMjAyMnxzOjE5MjoiMTU2YjMyNGRkOTQ3OTlkMWU5MDlhYTVmNmI5Y2U3NTFlNGYzNDExN2UzYWY3NDJkNzYyNmZkZDBmYzY0OWJlNjFmYWE0MDJkNmRjNTEwZjRhNmRkMzllY2UwOTUxMmMwYWM3YTI0YzUxNDA2ZTZlNjY5YjQ1ZGMxMTA1YWJiMmJ0RjM1d2xISGJ2N25JWCt3TFdubTBuUS8wWDU1cTZDaFpyNmVzOFh4T1BLNld0TFdEMWcyU01WV3luS3RVTjU2IjtleHBpcmVzX2J5fGk6MTY3MTUxMjkzNTtncm91cF9hY3RpdmV8czoxOiIxIjtncm91cF9uYW1lfHM6MTE6IlN1cGVyIEFkbWluIjtsZXZlbF9ha3Nlc3xzOjExOiJTVVBFUiBBRE1JTiI7bmlja19sZXZlbHxzOjM6IlNBRCI7dXNlcl9pZHxzOjMyOiI0QTM3MjlDQTVBMTU5M0Q3MkU2N0ZGMEZFMzExODVEMSI7dW5pdF9pZHxzOjQ6IjI0OTYiO2dyb3VwX3N3aXRjaHxhOjI6e2k6MDthOjI6e3M6ODoiaWRfZ3JvdXAiO3M6MToiMSI7czoxMDoibmFtYV9ncm91cCI7czoxMToiU3VwZXIgQWRtaW4iO31pOjE7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjMiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6NToiQWRtaW4iO319');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('sq7etvm3e65q4q0mmf4taiksurmrsnta', '::1', 1671510661, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTEwNjYxO2Z1bGxuYW1lfHM6MTE6IlByaW1hIEF1bGlhIjt1bml0X2lkX25hbWV8czo0MzoiRGluYXMgS29tdW5pa2FzaSwgSW5mb3JtYXRpa2EgRGFuIFN0YXRpc3RpayI7aWRfZ3JvdXB8czoxOiIzIjtuYW1hX2dyb3VwfHM6NToiQWRtaW4iO25ncm91cHxpOjI7YWNjb3VudF9uYW1lfHM6MTA6InByaW1hYXVsaWEiO2NsZWFyM25naW5lMjAyMnxzOjE5MjoiOTQ1ZWYxZTA4MTIyNzY5N2VhNjVmYTJkYjQzM2Y3ZmM3MGJjOWIwZjdhMmU1Njg3YTg2M2RkOTQ3MmJkN2IyYWM3NGNhZmIxYTg3NTQ2MDliOGJkNzVkYjI3NmM2YTAwZWJkYjBiOGUxZjJkYzAwYTExMzU4ODU0MTJlNzk2OTArOGg2NDdtWnEvTGJEQ2dIYnloVHR3aWdoU0lMVGhyb3N5KzZSb3F6YkViWXRhd3BvZldJeDdUN2x1M3hDT0R1IjtleHBpcmVzX2J5fGk6MTY3MTUxMzk2Nztncm91cF9hY3RpdmV8czoxOiIxIjtncm91cF9uYW1lfHM6MTE6IlN1cGVyIEFkbWluIjtsZXZlbF9ha3Nlc3xzOjExOiJTVVBFUiBBRE1JTiI7bmlja19sZXZlbHxzOjM6IlNBRCI7dXNlcl9pZHxzOjMyOiI0QTM3MjlDQTVBMTU5M0Q3MkU2N0ZGMEZFMzExODVEMSI7dW5pdF9pZHxzOjQ6IjI0OTYiO2dyb3VwX3N3aXRjaHxhOjI6e2k6MDthOjI6e3M6ODoiaWRfZ3JvdXAiO3M6MToiMSI7czoxMDoibmFtYV9ncm91cCI7czoxMToiU3VwZXIgQWRtaW4iO31pOjE7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjMiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6NToiQWRtaW4iO319ZXJyb3Jfc2Vzc2lvbnxpOjE7');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('o60sk5rs3qlnpsuuqjl6l0dpko3q09kh', '::1', 1671526344, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTI2MTg0O2FjY291bnRfbmFtZXxzOjEwOiJwcmltYWF1bGlhIjtjbGVhcjNuZ2luZTIwMjJ8czoxOTI6ImYwNWYyNjI0ZjAxMTk2ZDdkMzQxMGFjZjhjZmQ1NTBmMDVkZjYxNmJmYmE3Y2JlMjBhNTU0M2E1NmZlZmE5YzM4NTk5OGZmNDU5YjE3MDI2ZjRkNmVkOTVjODE3YzQwZjkzYjlkM2UyMzUyYzFlMmY2OWQ1ZmU3YTdmMjE1Y2Y4M0hFU2ZqMU5XeWo0QTZnU3hLalMyNjFGRmVNeW9wbHJUdmpwTlFERmlEVGxWNmg0cm1HekxEVUV1YThyNU5XaSI7ZXhwaXJlc19ieXxpOjE2NzE1Mjk5MzQ7ZnVsbG5hbWV8czoxMToiUHJpbWEgQXVsaWEiO2dyb3VwX2FjdGl2ZXxzOjE6IjEiO2dyb3VwX25hbWV8czoxMToiU3VwZXIgQWRtaW4iO2xldmVsX2Frc2VzfHM6MTE6IlNVUEVSIEFETUlOIjtuaWNrX2xldmVsfHM6MzoiU0FEIjt1c2VyX2lkfHM6MzI6IjRBMzcyOUNBNUExNTkzRDcyRTY3RkYwRkUzMTE4NUQxIjt1bml0X2lkfHM6NDoiMjQ5NiI7dW5pdF9pZF9uYW1lfHM6NDM6IkRpbmFzIEtvbXVuaWthc2ksIEluZm9ybWF0aWthIERhbiBTdGF0aXN0aWsiO2ZvdG9fcHJvZmlsZXxzOjIxOiJkZWZhdWx0LXVzZXItaWNvbi5wbmciO2dyb3VwX3N3aXRjaHxhOjI6e2k6MDthOjI6e3M6ODoiaWRfZ3JvdXAiO3M6MToiMSI7czoxMDoibmFtYV9ncm91cCI7czoxMToiU3VwZXIgQWRtaW4iO31pOjE7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjMiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6NToiQWRtaW4iO319bmdyb3VwfGk6Mjs=');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('1sr4ov55f4elq1pmfg9880enllbe9jbu', '::1', 1671511055, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTExMDU1O2Z1bGxuYW1lfHM6MTE6IlByaW1hIEF1bGlhIjt1bml0X2lkX25hbWV8czo0MzoiRGluYXMgS29tdW5pa2FzaSwgSW5mb3JtYXRpa2EgRGFuIFN0YXRpc3RpayI7aWRfZ3JvdXB8czoxOiIzIjtuYW1hX2dyb3VwfHM6NToiQWRtaW4iO25ncm91cHxpOjI7Zm90b19wcm9maWxlfHM6MjE6ImRlZmF1bHQtdXNlci1pY29uLnBuZyI7YWNjb3VudF9uYW1lfHM6MTA6InByaW1hYXVsaWEiO2NsZWFyM25naW5lMjAyMnxzOjE5MjoiNmZhMWNmOTRjYzllNTIzNjJhODIxMjg2MjhmMjNmMGUzZDNlM2E4OTc3NmM5MTQ5ZDVlNzhhZThhMjVhMTFlZDRlYjQ3NjQwNmE2ZDYwMmE0NDM5NjdmODZjMmIxYWZmYjM0MjhiZTM1NGEzMDgxZGMzMDYxNTZkOTI5MTg5MmZDMTFyakxhdFBFK0ZFSnhvaFdLenBDelZlTklUVEJRdTVseTdDZWc1R3dxWkl3eng3cUVxRVpTVnRYb0pQbmw3IjtleHBpcmVzX2J5fGk6MTY3MTUxNDUzMTtncm91cF9hY3RpdmV8czoxOiIxIjtncm91cF9uYW1lfHM6MTE6IlN1cGVyIEFkbWluIjtsZXZlbF9ha3Nlc3xzOjExOiJTVVBFUiBBRE1JTiI7bmlja19sZXZlbHxzOjM6IlNBRCI7dXNlcl9pZHxzOjMyOiI0QTM3MjlDQTVBMTU5M0Q3MkU2N0ZGMEZFMzExODVEMSI7dW5pdF9pZHxzOjQ6IjI0OTYiO2dyb3VwX3N3aXRjaHxhOjI6e2k6MDthOjI6e3M6ODoiaWRfZ3JvdXAiO3M6MToiMSI7czoxMDoibmFtYV9ncm91cCI7czoxMToiU3VwZXIgQWRtaW4iO31pOjE7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjMiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6NToiQWRtaW4iO319');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('odrioem4eldnhfli066jli96e246tco3', '::1', 1671511381, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTExMzgxO2Z1bGxuYW1lfHM6MTE6IlByaW1hIEF1bGlhIjt1bml0X2lkX25hbWV8czo0MzoiRGluYXMgS29tdW5pa2FzaSwgSW5mb3JtYXRpa2EgRGFuIFN0YXRpc3RpayI7aWRfZ3JvdXB8czoxOiIzIjtuYW1hX2dyb3VwfHM6NToiQWRtaW4iO25ncm91cHxpOjI7Zm90b19wcm9maWxlfHM6MjE6ImRlZmF1bHQtdXNlci1pY29uLnBuZyI7YWNjb3VudF9uYW1lfHM6MTA6InByaW1hYXVsaWEiO2NsZWFyM25naW5lMjAyMnxzOjE5MjoiNmZhMWNmOTRjYzllNTIzNjJhODIxMjg2MjhmMjNmMGUzZDNlM2E4OTc3NmM5MTQ5ZDVlNzhhZThhMjVhMTFlZDRlYjQ3NjQwNmE2ZDYwMmE0NDM5NjdmODZjMmIxYWZmYjM0MjhiZTM1NGEzMDgxZGMzMDYxNTZkOTI5MTg5MmZDMTFyakxhdFBFK0ZFSnhvaFdLenBDelZlTklUVEJRdTVseTdDZWc1R3dxWkl3eng3cUVxRVpTVnRYb0pQbmw3IjtleHBpcmVzX2J5fGk6MTY3MTUxNDUzMTtncm91cF9hY3RpdmV8czoxOiIxIjtncm91cF9uYW1lfHM6MTE6IlN1cGVyIEFkbWluIjtsZXZlbF9ha3Nlc3xzOjExOiJTVVBFUiBBRE1JTiI7bmlja19sZXZlbHxzOjM6IlNBRCI7dXNlcl9pZHxzOjMyOiI0QTM3MjlDQTVBMTU5M0Q3MkU2N0ZGMEZFMzExODVEMSI7dW5pdF9pZHxzOjQ6IjI0OTYiO2dyb3VwX3N3aXRjaHxhOjI6e2k6MDthOjI6e3M6ODoiaWRfZ3JvdXAiO3M6MToiMSI7czoxMDoibmFtYV9ncm91cCI7czoxMToiU3VwZXIgQWRtaW4iO31pOjE7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjMiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6NToiQWRtaW4iO319');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('sa147ajj71gq0grfjt4t8odjr6djesru', '::1', 1671511484, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTExMzgxO2Z1bGxuYW1lfHM6MTE6IlByaW1hIEF1bGlhIjt1bml0X2lkX25hbWV8czo0MzoiRGluYXMgS29tdW5pa2FzaSwgSW5mb3JtYXRpa2EgRGFuIFN0YXRpc3RpayI7aWRfZ3JvdXB8czoxOiIzIjtuYW1hX2dyb3VwfHM6NToiQWRtaW4iO25ncm91cHxpOjI7Zm90b19wcm9maWxlfHM6MjE6ImRlZmF1bHQtdXNlci1pY29uLnBuZyI7YWNjb3VudF9uYW1lfHM6MTA6InByaW1hYXVsaWEiO2NsZWFyM25naW5lMjAyMnxzOjE5MjoiNmZhMWNmOTRjYzllNTIzNjJhODIxMjg2MjhmMjNmMGUzZDNlM2E4OTc3NmM5MTQ5ZDVlNzhhZThhMjVhMTFlZDRlYjQ3NjQwNmE2ZDYwMmE0NDM5NjdmODZjMmIxYWZmYjM0MjhiZTM1NGEzMDgxZGMzMDYxNTZkOTI5MTg5MmZDMTFyakxhdFBFK0ZFSnhvaFdLenBDelZlTklUVEJRdTVseTdDZWc1R3dxWkl3eng3cUVxRVpTVnRYb0pQbmw3IjtleHBpcmVzX2J5fGk6MTY3MTUxNDUzMTtncm91cF9hY3RpdmV8czoxOiIxIjtncm91cF9uYW1lfHM6MTE6IlN1cGVyIEFkbWluIjtsZXZlbF9ha3Nlc3xzOjExOiJTVVBFUiBBRE1JTiI7bmlja19sZXZlbHxzOjM6IlNBRCI7dXNlcl9pZHxzOjMyOiI0QTM3MjlDQTVBMTU5M0Q3MkU2N0ZGMEZFMzExODVEMSI7dW5pdF9pZHxzOjQ6IjI0OTYiO2dyb3VwX3N3aXRjaHxhOjI6e2k6MDthOjI6e3M6ODoiaWRfZ3JvdXAiO3M6MToiMSI7czoxMDoibmFtYV9ncm91cCI7czoxMToiU3VwZXIgQWRtaW4iO31pOjE7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjMiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6NToiQWRtaW4iO319');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('qil1gf5q2duhk5o719a43uoiccj5t4bi', '::1', 1671522492, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTIyNDkyO2FjY291bnRfbmFtZXxzOjEwOiJwcmltYWF1bGlhIjtjbGVhcjNuZ2luZTIwMjJ8czoxOTI6ImZlYjI1NjEzODIxNmI2NDA3ZjMxOWFiNzllODEyYmE4YWMyMGY2ZWZiMzZlMTU2Njg3ZGU2NGFhYzczNjdlYmFkMzAxY2MxNTQ5ZjhlOGI5ZGMwYzNiY2YyOTQ0MmE2YmI3MjBjMDk0OWQ2M2VkNzhjOWQ0N2NjZDE3NDBjOTM2MjhaUGtrbmJ5UXczeWk3dUNNeG5LdzFjMGhZc3FJRXc5MHovblhvcUtOM1M5YmhCUkpYc282dEUrd0lXS3pnZiI7ZXhwaXJlc19ieXxpOjE2NzE1MjU3NDk7ZnVsbG5hbWV8czoxMToiUHJpbWEgQXVsaWEiO2dyb3VwX2FjdGl2ZXxzOjE6IjEiO2dyb3VwX25hbWV8czoxMToiU3VwZXIgQWRtaW4iO2xldmVsX2Frc2VzfHM6MTE6IlNVUEVSIEFETUlOIjtuaWNrX2xldmVsfHM6MzoiU0FEIjt1c2VyX2lkfHM6MzI6IjRBMzcyOUNBNUExNTkzRDcyRTY3RkYwRkUzMTE4NUQxIjt1bml0X2lkfHM6NDoiMjQ5NiI7dW5pdF9pZF9uYW1lfHM6NDM6IkRpbmFzIEtvbXVuaWthc2ksIEluZm9ybWF0aWthIERhbiBTdGF0aXN0aWsiO2ZvdG9fcHJvZmlsZXxzOjIxOiJkZWZhdWx0LXVzZXItaWNvbi5wbmciO2dyb3VwX3N3aXRjaHxhOjI6e2k6MDthOjI6e3M6ODoiaWRfZ3JvdXAiO3M6MToiMSI7czoxMDoibmFtYV9ncm91cCI7czoxMToiU3VwZXIgQWRtaW4iO31pOjE7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjMiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6NToiQWRtaW4iO319bmdyb3VwfGk6Mjs=');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('u1e01ebt2t3n85fqm8mrh7qsg57ftlbh', '::1', 1671522848, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTIyODQ4O2FjY291bnRfbmFtZXxzOjEwOiJwcmltYWF1bGlhIjtjbGVhcjNuZ2luZTIwMjJ8czoxOTI6Ijk0NWI2MjA1NWNkOTQ3NmE2OWRmNWI3YTVlYTZlNGY3ZWEzYmY0NjIzZWY4NGFlMDk2NzJjYjFhMTUyMjFmZTQ4ZjdjNDExZWY0YTExN2UzMTllODVlMDc0NzkxNDEyMWU2ZWU0YmFmNzhiOTRmZjMwMzZjZGI5MjVjN2I4MDhmd1JXLzluQlJldmVHNis0ZmY5VjNlRkIxWEVybUU4UWRuVGY0SERzR2gzZGo4dlRpTU1SOWlCbm5ycWRmTlFRRyI7ZXhwaXJlc19ieXxpOjE2NzE1MjYxODA7ZnVsbG5hbWV8czoxMToiUHJpbWEgQXVsaWEiO2dyb3VwX2FjdGl2ZXxzOjE6IjMiO2dyb3VwX25hbWV8czo1OiJBZG1pbiI7bGV2ZWxfYWtzZXN8czo1OiJBRE1JTiI7bmlja19sZXZlbHxzOjM6IkFETSI7dXNlcl9pZHxzOjMyOiI0QTM3MjlDQTVBMTU5M0Q3MkU2N0ZGMEZFMzExODVEMSI7dW5pdF9pZHxzOjQ6IjI0OTYiO3VuaXRfaWRfbmFtZXxzOjQzOiJEaW5hcyBLb211bmlrYXNpLCBJbmZvcm1hdGlrYSBEYW4gU3RhdGlzdGlrIjtmb3RvX3Byb2ZpbGV8czoyMToiZGVmYXVsdC11c2VyLWljb24ucG5nIjtncm91cF9zd2l0Y2h8YToyOntpOjA7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjEiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6MTE6IlN1cGVyIEFkbWluIjt9aToxO2E6Mjp7czo4OiJpZF9ncm91cCI7czoxOiIzIjtzOjEwOiJuYW1hX2dyb3VwIjtzOjU6IkFkbWluIjt9fW5ncm91cHxpOjI7');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('gb89e9vnr7f3s5tj8mit4a1cv9g0us5p', '::1', 1671523351, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTIzMzUxO2FjY291bnRfbmFtZXxzOjEwOiJwcmltYWF1bGlhIjtjbGVhcjNuZ2luZTIwMjJ8czoxOTI6Ijk0NWI2MjA1NWNkOTQ3NmE2OWRmNWI3YTVlYTZlNGY3ZWEzYmY0NjIzZWY4NGFlMDk2NzJjYjFhMTUyMjFmZTQ4ZjdjNDExZWY0YTExN2UzMTllODVlMDc0NzkxNDEyMWU2ZWU0YmFmNzhiOTRmZjMwMzZjZGI5MjVjN2I4MDhmd1JXLzluQlJldmVHNis0ZmY5VjNlRkIxWEVybUU4UWRuVGY0SERzR2gzZGo4dlRpTU1SOWlCbm5ycWRmTlFRRyI7ZXhwaXJlc19ieXxpOjE2NzE1MjY0Njg7ZnVsbG5hbWV8czoxMToiUHJpbWEgQXVsaWEiO2dyb3VwX2FjdGl2ZXxzOjE6IjEiO2dyb3VwX25hbWV8czoxMToiU3VwZXIgQWRtaW4iO2xldmVsX2Frc2VzfHM6MTE6IlNVUEVSIEFETUlOIjtuaWNrX2xldmVsfHM6MzoiU0FEIjt1c2VyX2lkfHM6MzI6IjRBMzcyOUNBNUExNTkzRDcyRTY3RkYwRkUzMTE4NUQxIjt1bml0X2lkfHM6NDoiMjQ5NiI7dW5pdF9pZF9uYW1lfHM6NDM6IkRpbmFzIEtvbXVuaWthc2ksIEluZm9ybWF0aWthIERhbiBTdGF0aXN0aWsiO2ZvdG9fcHJvZmlsZXxzOjIxOiJkZWZhdWx0LXVzZXItaWNvbi5wbmciO2dyb3VwX3N3aXRjaHxhOjI6e2k6MDthOjI6e3M6ODoiaWRfZ3JvdXAiO3M6MToiMSI7czoxMDoibmFtYV9ncm91cCI7czoxMToiU3VwZXIgQWRtaW4iO31pOjE7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjMiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6NToiQWRtaW4iO319bmdyb3VwfGk6Mjs=');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('t5s2u0pis9v1g84279brob5v2tqjfap6', '::1', 1671523729, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTIzNzI5O2FjY291bnRfbmFtZXxzOjEwOiJwcmltYWF1bGlhIjtjbGVhcjNuZ2luZTIwMjJ8czoxOTI6Ijk0NWI2MjA1NWNkOTQ3NmE2OWRmNWI3YTVlYTZlNGY3ZWEzYmY0NjIzZWY4NGFlMDk2NzJjYjFhMTUyMjFmZTQ4ZjdjNDExZWY0YTExN2UzMTllODVlMDc0NzkxNDEyMWU2ZWU0YmFmNzhiOTRmZjMwMzZjZGI5MjVjN2I4MDhmd1JXLzluQlJldmVHNis0ZmY5VjNlRkIxWEVybUU4UWRuVGY0SERzR2gzZGo4dlRpTU1SOWlCbm5ycWRmTlFRRyI7ZXhwaXJlc19ieXxpOjE2NzE1MjY0Njg7ZnVsbG5hbWV8czoxMToiUHJpbWEgQXVsaWEiO2dyb3VwX2FjdGl2ZXxzOjE6IjEiO2dyb3VwX25hbWV8czoxMToiU3VwZXIgQWRtaW4iO2xldmVsX2Frc2VzfHM6MTE6IlNVUEVSIEFETUlOIjtuaWNrX2xldmVsfHM6MzoiU0FEIjt1c2VyX2lkfHM6MzI6IjRBMzcyOUNBNUExNTkzRDcyRTY3RkYwRkUzMTE4NUQxIjt1bml0X2lkfHM6NDoiMjQ5NiI7dW5pdF9pZF9uYW1lfHM6NDM6IkRpbmFzIEtvbXVuaWthc2ksIEluZm9ybWF0aWthIERhbiBTdGF0aXN0aWsiO2ZvdG9fcHJvZmlsZXxzOjIxOiJkZWZhdWx0LXVzZXItaWNvbi5wbmciO2dyb3VwX3N3aXRjaHxhOjI6e2k6MDthOjI6e3M6ODoiaWRfZ3JvdXAiO3M6MToiMSI7czoxMDoibmFtYV9ncm91cCI7czoxMToiU3VwZXIgQWRtaW4iO31pOjE7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjMiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6NToiQWRtaW4iO319bmdyb3VwfGk6Mjs=');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('eklrftaoa7f7d8it9ut7nqp158t86tjh', '::1', 1671440195, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNDM5ODk4O2FjY291bnRfbmFtZXxzOjEwOiJwcmltYWF1bGlhIjtjbGVhcjNuZ2luZTIwMjJ8czoxOTI6IjJiOTY3YTRkYTMyNDhiNTgyOWRjY2U4ODBmOTY1ZGZkMmZjZmRiZTg4YmM5Yjk0MmMwODEyY2YwNDA5ZDA1ODI3MDU4NGI5YzIzOGQxMGMyNzQxOGIwMzZiZGE2NTBlY2YwMGRmMzU1NjlkMWRkMGYwYzVjY2Q3MjdjNTk2MWU1TS9vbHllQjk1YW0razJlMmhVRjg3eFl4blQ4TDdyOWN5TUtGK1ZLcmJHbWl1dVFkNG91SWNTYzg4MFlsOVZPUiI7ZXhwaXJlc19ieXxpOjE2NzE0NDM1MDY7ZnVsbG5hbWV8czoxMToiUHJpbWEgQXVsaWEiO2dyb3VwX2FjdGl2ZXxzOjE6IjEiO2dyb3VwX25hbWV8czoxMToiU3VwZXIgQWRtaW4iO2xldmVsX2Frc2VzfHM6MTE6IlNVUEVSIEFETUlOIjtuaWNrX2xldmVsfHM6MzoiU0FEIjt1c2VyX2lkfHM6MzI6IjRBMzcyOUNBNUExNTkzRDcyRTY3RkYwRkUzMTE4NUQxIjt1bml0X2lkfHM6NDoiMjQ5NiI7dW5pdF9pZF9uYW1lfHM6NDM6IkRpbmFzIEtvbXVuaWthc2ksIEluZm9ybWF0aWthIERhbiBTdGF0aXN0aWsiO2dyb3VwX3N3aXRjaHxhOjI6e2k6MDthOjI6e3M6ODoiaWRfZ3JvdXAiO3M6MToiMSI7czoxMDoibmFtYV9ncm91cCI7czoxMToiU3VwZXIgQWRtaW4iO31pOjE7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjMiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6OToiQWRtaW4gT1BEIjt9fQ==');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('ck5uvamf1cnb906fj6ojmg57tm2ijjpd', '::1', 1671524173, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTI0MTczO2FjY291bnRfbmFtZXxzOjEwOiJwcmltYWF1bGlhIjtjbGVhcjNuZ2luZTIwMjJ8czoxOTI6Ijk0NWI2MjA1NWNkOTQ3NmE2OWRmNWI3YTVlYTZlNGY3ZWEzYmY0NjIzZWY4NGFlMDk2NzJjYjFhMTUyMjFmZTQ4ZjdjNDExZWY0YTExN2UzMTllODVlMDc0NzkxNDEyMWU2ZWU0YmFmNzhiOTRmZjMwMzZjZGI5MjVjN2I4MDhmd1JXLzluQlJldmVHNis0ZmY5VjNlRkIxWEVybUU4UWRuVGY0SERzR2gzZGo4dlRpTU1SOWlCbm5ycWRmTlFRRyI7ZXhwaXJlc19ieXxpOjE2NzE1MjY0Njg7ZnVsbG5hbWV8czoxMToiUHJpbWEgQXVsaWEiO2dyb3VwX2FjdGl2ZXxzOjE6IjEiO2dyb3VwX25hbWV8czoxMToiU3VwZXIgQWRtaW4iO2xldmVsX2Frc2VzfHM6MTE6IlNVUEVSIEFETUlOIjtuaWNrX2xldmVsfHM6MzoiU0FEIjt1c2VyX2lkfHM6MzI6IjRBMzcyOUNBNUExNTkzRDcyRTY3RkYwRkUzMTE4NUQxIjt1bml0X2lkfHM6NDoiMjQ5NiI7dW5pdF9pZF9uYW1lfHM6NDM6IkRpbmFzIEtvbXVuaWthc2ksIEluZm9ybWF0aWthIERhbiBTdGF0aXN0aWsiO2ZvdG9fcHJvZmlsZXxzOjIxOiJkZWZhdWx0LXVzZXItaWNvbi5wbmciO2dyb3VwX3N3aXRjaHxhOjI6e2k6MDthOjI6e3M6ODoiaWRfZ3JvdXAiO3M6MToiMSI7czoxMDoibmFtYV9ncm91cCI7czoxMToiU3VwZXIgQWRtaW4iO31pOjE7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjMiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6NToiQWRtaW4iO319bmdyb3VwfGk6Mjs=');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('ciop09t8sgg330d9qavsinv22n987l98', '::1', 1671507230, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTA3MjMwOw==');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('jul1otvkn3afc4l91pdqbgd2ks0jm2fp', '::1', 1671524489, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTI0NDg5O2FjY291bnRfbmFtZXxzOjEwOiJwcmltYWF1bGlhIjtjbGVhcjNuZ2luZTIwMjJ8czoxOTI6Ijk0NWI2MjA1NWNkOTQ3NmE2OWRmNWI3YTVlYTZlNGY3ZWEzYmY0NjIzZWY4NGFlMDk2NzJjYjFhMTUyMjFmZTQ4ZjdjNDExZWY0YTExN2UzMTllODVlMDc0NzkxNDEyMWU2ZWU0YmFmNzhiOTRmZjMwMzZjZGI5MjVjN2I4MDhmd1JXLzluQlJldmVHNis0ZmY5VjNlRkIxWEVybUU4UWRuVGY0SERzR2gzZGo4dlRpTU1SOWlCbm5ycWRmTlFRRyI7ZXhwaXJlc19ieXxpOjE2NzE1MjY0Njg7ZnVsbG5hbWV8czoxMToiUHJpbWEgQXVsaWEiO2dyb3VwX2FjdGl2ZXxzOjE6IjEiO2dyb3VwX25hbWV8czoxMToiU3VwZXIgQWRtaW4iO2xldmVsX2Frc2VzfHM6MTE6IlNVUEVSIEFETUlOIjtuaWNrX2xldmVsfHM6MzoiU0FEIjt1c2VyX2lkfHM6MzI6IjRBMzcyOUNBNUExNTkzRDcyRTY3RkYwRkUzMTE4NUQxIjt1bml0X2lkfHM6NDoiMjQ5NiI7dW5pdF9pZF9uYW1lfHM6NDM6IkRpbmFzIEtvbXVuaWthc2ksIEluZm9ybWF0aWthIERhbiBTdGF0aXN0aWsiO2ZvdG9fcHJvZmlsZXxzOjIxOiJkZWZhdWx0LXVzZXItaWNvbi5wbmciO2dyb3VwX3N3aXRjaHxhOjI6e2k6MDthOjI6e3M6ODoiaWRfZ3JvdXAiO3M6MToiMSI7czoxMDoibmFtYV9ncm91cCI7czoxMToiU3VwZXIgQWRtaW4iO31pOjE7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjMiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6NToiQWRtaW4iO319bmdyb3VwfGk6Mjs=');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('v6f9h5e51s6m67ehi8nfnhps7lujsvsm', '::1', 1671507575, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTA3NTc1Ow==');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('9fl6i74os5e58m4tvc7g659c2o3475je', '::1', 1671524832, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTI0ODMyO2FjY291bnRfbmFtZXxzOjEwOiJwcmltYWF1bGlhIjtjbGVhcjNuZ2luZTIwMjJ8czoxOTI6Ijk0NWI2MjA1NWNkOTQ3NmE2OWRmNWI3YTVlYTZlNGY3ZWEzYmY0NjIzZWY4NGFlMDk2NzJjYjFhMTUyMjFmZTQ4ZjdjNDExZWY0YTExN2UzMTllODVlMDc0NzkxNDEyMWU2ZWU0YmFmNzhiOTRmZjMwMzZjZGI5MjVjN2I4MDhmd1JXLzluQlJldmVHNis0ZmY5VjNlRkIxWEVybUU4UWRuVGY0SERzR2gzZGo4dlRpTU1SOWlCbm5ycWRmTlFRRyI7ZXhwaXJlc19ieXxpOjE2NzE1MjY0Njg7ZnVsbG5hbWV8czoxMToiUHJpbWEgQXVsaWEiO2dyb3VwX2FjdGl2ZXxzOjE6IjEiO2dyb3VwX25hbWV8czoxMToiU3VwZXIgQWRtaW4iO2xldmVsX2Frc2VzfHM6MTE6IlNVUEVSIEFETUlOIjtuaWNrX2xldmVsfHM6MzoiU0FEIjt1c2VyX2lkfHM6MzI6IjRBMzcyOUNBNUExNTkzRDcyRTY3RkYwRkUzMTE4NUQxIjt1bml0X2lkfHM6NDoiMjQ5NiI7dW5pdF9pZF9uYW1lfHM6NDM6IkRpbmFzIEtvbXVuaWthc2ksIEluZm9ybWF0aWthIERhbiBTdGF0aXN0aWsiO2ZvdG9fcHJvZmlsZXxzOjIxOiJkZWZhdWx0LXVzZXItaWNvbi5wbmciO2dyb3VwX3N3aXRjaHxhOjI6e2k6MDthOjI6e3M6ODoiaWRfZ3JvdXAiO3M6MToiMSI7czoxMDoibmFtYV9ncm91cCI7czoxMToiU3VwZXIgQWRtaW4iO31pOjE7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjMiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6NToiQWRtaW4iO319bmdyb3VwfGk6Mjs=');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('35ml8iosassg77odufsbpt5846n83h3m', '::1', 1671525149, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTI1MTQ5O2FjY291bnRfbmFtZXxzOjEwOiJwcmltYWF1bGlhIjtjbGVhcjNuZ2luZTIwMjJ8czoxOTI6Ijk0NWI2MjA1NWNkOTQ3NmE2OWRmNWI3YTVlYTZlNGY3ZWEzYmY0NjIzZWY4NGFlMDk2NzJjYjFhMTUyMjFmZTQ4ZjdjNDExZWY0YTExN2UzMTllODVlMDc0NzkxNDEyMWU2ZWU0YmFmNzhiOTRmZjMwMzZjZGI5MjVjN2I4MDhmd1JXLzluQlJldmVHNis0ZmY5VjNlRkIxWEVybUU4UWRuVGY0SERzR2gzZGo4dlRpTU1SOWlCbm5ycWRmTlFRRyI7ZXhwaXJlc19ieXxpOjE2NzE1MjY0Njg7ZnVsbG5hbWV8czoxMToiUHJpbWEgQXVsaWEiO2dyb3VwX2FjdGl2ZXxzOjE6IjEiO2dyb3VwX25hbWV8czoxMToiU3VwZXIgQWRtaW4iO2xldmVsX2Frc2VzfHM6MTE6IlNVUEVSIEFETUlOIjtuaWNrX2xldmVsfHM6MzoiU0FEIjt1c2VyX2lkfHM6MzI6IjRBMzcyOUNBNUExNTkzRDcyRTY3RkYwRkUzMTE4NUQxIjt1bml0X2lkfHM6NDoiMjQ5NiI7dW5pdF9pZF9uYW1lfHM6NDM6IkRpbmFzIEtvbXVuaWthc2ksIEluZm9ybWF0aWthIERhbiBTdGF0aXN0aWsiO2ZvdG9fcHJvZmlsZXxzOjIxOiJkZWZhdWx0LXVzZXItaWNvbi5wbmciO2dyb3VwX3N3aXRjaHxhOjI6e2k6MDthOjI6e3M6ODoiaWRfZ3JvdXAiO3M6MToiMSI7czoxMDoibmFtYV9ncm91cCI7czoxMToiU3VwZXIgQWRtaW4iO31pOjE7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjMiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6NToiQWRtaW4iO319bmdyb3VwfGk6Mjs=');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('008o3k8c03vphi3qrmsmildt74vnlk38', '::1', 1671507883, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTA3ODgzOw==');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('l06v6pb2mui63tvipuo2mnjipq1stbd2', '::1', 1671508232, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTA4MjMyO2Z1bGxuYW1lfHM6MTE6IlByaW1hIEF1bGlhIjt1bml0X2lkX25hbWV8czo0MzoiRGluYXMgS29tdW5pa2FzaSwgSW5mb3JtYXRpa2EgRGFuIFN0YXRpc3RpayI7YWNjb3VudF9uYW1lfHM6MTA6InByaW1hYXVsaWEiO2NsZWFyM25naW5lMjAyMnxzOjE5MjoiYzc1ZjRmMGNlNjczNWVkNjQ1NTM2MmYzZjFlOWJmZDEzNDNhODA5NmZlMGYzYTM2MDVmNzc0ZTMyZGQwOTQ2NWNmOGFlOGVhYTM4NWU1MWYzNDVhZWJkYWQxZTBjOWJkMGU2YzlmZjg5ZWMzODk5MDhkNTRlMjM1ZWYxMTY1OGJqQjNxS0ZVWkl5SUxNMG1tcWt5UWg5emNHb3Arek0wYlNob0dESEJsbGtGbXdxeFljcUF4NFN6SDNyZnBhTTJNIjtleHBpcmVzX2J5fGk6MTY3MTUxMTY2MTtncm91cF9hY3RpdmV8czoxOiIxIjtncm91cF9uYW1lfHM6MTE6IlN1cGVyIEFkbWluIjtsZXZlbF9ha3Nlc3xzOjExOiJTVVBFUiBBRE1JTiI7bmlja19sZXZlbHxzOjM6IlNBRCI7dXNlcl9pZHxzOjMyOiI0QTM3MjlDQTVBMTU5M0Q3MkU2N0ZGMEZFMzExODVEMSI7dW5pdF9pZHxzOjQ6IjI0OTYiOw==');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('mlvpofvm61ugatctarpuj8pv6fvp151o', '::1', 1671525474, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTI1NDc0O2FjY291bnRfbmFtZXxzOjEwOiJwcmltYWF1bGlhIjtjbGVhcjNuZ2luZTIwMjJ8czoxOTI6Ijk0NWI2MjA1NWNkOTQ3NmE2OWRmNWI3YTVlYTZlNGY3ZWEzYmY0NjIzZWY4NGFlMDk2NzJjYjFhMTUyMjFmZTQ4ZjdjNDExZWY0YTExN2UzMTllODVlMDc0NzkxNDEyMWU2ZWU0YmFmNzhiOTRmZjMwMzZjZGI5MjVjN2I4MDhmd1JXLzluQlJldmVHNis0ZmY5VjNlRkIxWEVybUU4UWRuVGY0SERzR2gzZGo4dlRpTU1SOWlCbm5ycWRmTlFRRyI7ZXhwaXJlc19ieXxpOjE2NzE1Mjg5MzE7ZnVsbG5hbWV8czoxMToiUHJpbWEgQXVsaWEiO2dyb3VwX2FjdGl2ZXxzOjE6IjEiO2dyb3VwX25hbWV8czoxMToiU3VwZXIgQWRtaW4iO2xldmVsX2Frc2VzfHM6MTE6IlNVUEVSIEFETUlOIjtuaWNrX2xldmVsfHM6MzoiU0FEIjt1c2VyX2lkfHM6MzI6IjRBMzcyOUNBNUExNTkzRDcyRTY3RkYwRkUzMTE4NUQxIjt1bml0X2lkfHM6NDoiMjQ5NiI7dW5pdF9pZF9uYW1lfHM6NDM6IkRpbmFzIEtvbXVuaWthc2ksIEluZm9ybWF0aWthIERhbiBTdGF0aXN0aWsiO2ZvdG9fcHJvZmlsZXxzOjIxOiJkZWZhdWx0LXVzZXItaWNvbi5wbmciO2dyb3VwX3N3aXRjaHxhOjI6e2k6MDthOjI6e3M6ODoiaWRfZ3JvdXAiO3M6MToiMSI7czoxMDoibmFtYV9ncm91cCI7czoxMToiU3VwZXIgQWRtaW4iO31pOjE7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjMiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6NToiQWRtaW4iO319bmdyb3VwfGk6Mjs=');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('mv6h5v2g9r4dujapq9d4gsm42sbdilfa', '::1', 1671508548, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTA4NTQ4O2Z1bGxuYW1lfHM6MTE6IlByaW1hIEF1bGlhIjt1bml0X2lkX25hbWV8czo0MzoiRGluYXMgS29tdW5pa2FzaSwgSW5mb3JtYXRpa2EgRGFuIFN0YXRpc3RpayI7YWNjb3VudF9uYW1lfHM6MTA6InByaW1hYXVsaWEiO2NsZWFyM25naW5lMjAyMnxzOjE5MjoiYzc1ZjRmMGNlNjczNWVkNjQ1NTM2MmYzZjFlOWJmZDEzNDNhODA5NmZlMGYzYTM2MDVmNzc0ZTMyZGQwOTQ2NWNmOGFlOGVhYTM4NWU1MWYzNDVhZWJkYWQxZTBjOWJkMGU2YzlmZjg5ZWMzODk5MDhkNTRlMjM1ZWYxMTY1OGJqQjNxS0ZVWkl5SUxNMG1tcWt5UWg5emNHb3Arek0wYlNob0dESEJsbGtGbXdxeFljcUF4NFN6SDNyZnBhTTJNIjtleHBpcmVzX2J5fGk6MTY3MTUxMTY2MTtncm91cF9hY3RpdmV8czoxOiIxIjtncm91cF9uYW1lfHM6MTE6IlN1cGVyIEFkbWluIjtsZXZlbF9ha3Nlc3xzOjExOiJTVVBFUiBBRE1JTiI7bmlja19sZXZlbHxzOjM6IlNBRCI7dXNlcl9pZHxzOjMyOiI0QTM3MjlDQTVBMTU5M0Q3MkU2N0ZGMEZFMzExODVEMSI7dW5pdF9pZHxzOjQ6IjI0OTYiOw==');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('m96bnvd28an0m8na1pmbge1mn3sotjev', '::1', 1671525857, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTI1ODU3Ow==');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('e9tfspfi25cs51j2f3b0nbunuui7gip3', '::1', 1671508970, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTA4OTcwO2Z1bGxuYW1lfHM6MTE6IlByaW1hIEF1bGlhIjt1bml0X2lkX25hbWV8czo0MzoiRGluYXMgS29tdW5pa2FzaSwgSW5mb3JtYXRpa2EgRGFuIFN0YXRpc3RpayI7YWNjb3VudF9uYW1lfHM6MTA6InByaW1hYXVsaWEiO2NsZWFyM25naW5lMjAyMnxzOjE5MjoiYzc1ZjRmMGNlNjczNWVkNjQ1NTM2MmYzZjFlOWJmZDEzNDNhODA5NmZlMGYzYTM2MDVmNzc0ZTMyZGQwOTQ2NWNmOGFlOGVhYTM4NWU1MWYzNDVhZWJkYWQxZTBjOWJkMGU2YzlmZjg5ZWMzODk5MDhkNTRlMjM1ZWYxMTY1OGJqQjNxS0ZVWkl5SUxNMG1tcWt5UWg5emNHb3Arek0wYlNob0dESEJsbGtGbXdxeFljcUF4NFN6SDNyZnBhTTJNIjtleHBpcmVzX2J5fGk6MTY3MTUxMTY2MTtncm91cF9hY3RpdmV8czoxOiIxIjtncm91cF9uYW1lfHM6MTE6IlN1cGVyIEFkbWluIjtsZXZlbF9ha3Nlc3xzOjExOiJTVVBFUiBBRE1JTiI7bmlja19sZXZlbHxzOjM6IlNBRCI7dXNlcl9pZHxzOjMyOiI0QTM3MjlDQTVBMTU5M0Q3MkU2N0ZGMEZFMzExODVEMSI7dW5pdF9pZHxzOjQ6IjI0OTYiOw==');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('cit8l54f6rgntm1nrvko0sutpgsta145', '::1', 1671509275, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTA5Mjc1O2Z1bGxuYW1lfHM6MTE6IlByaW1hIEF1bGlhIjt1bml0X2lkX25hbWV8czo0MzoiRGluYXMgS29tdW5pa2FzaSwgSW5mb3JtYXRpa2EgRGFuIFN0YXRpc3RpayI7YWNjb3VudF9uYW1lfHM6MTA6InByaW1hYXVsaWEiO2NsZWFyM25naW5lMjAyMnxzOjE5MjoiOTk4N2NlOWI3OGI5YWU1NzJlMzVmNjA2ZmMwZmU1YzkxNDNhYWQ3ZjY2ZjI5NDE5YzZlZThmYzJjYjI0Zjg5YzgwM2I4MDZiN2EzNDU0YmM1M2JkMjI5NjVjOWI5M2E3NDc0NGFmZDRhODUwYTAyN2RhZDZjMGU4ZTMzMGI1YWI2Q211NUs5NG5HZEZlLzJzZVVhOGtLT1huajZZRW1UbjVrVXMySGd0UG5LNGdUcXVyaE1uK3RQbTNuOTRxZ01DIjtleHBpcmVzX2J5fGk6MTY3MTUxMjg3NTtncm91cF9hY3RpdmV8czoxOiIxIjtncm91cF9uYW1lfHM6MTE6IlN1cGVyIEFkbWluIjtsZXZlbF9ha3Nlc3xzOjExOiJTVVBFUiBBRE1JTiI7bmlja19sZXZlbHxzOjM6IlNBRCI7dXNlcl9pZHxzOjMyOiI0QTM3MjlDQTVBMTU5M0Q3MkU2N0ZGMEZFMzExODVEMSI7dW5pdF9pZHxzOjQ6IjI0OTYiO2dyb3VwX3N3aXRjaHxhOjI6e2k6MDthOjI6e3M6ODoiaWRfZ3JvdXAiO3M6MToiMSI7czoxMDoibmFtYV9ncm91cCI7czoxMToiU3VwZXIgQWRtaW4iO31pOjE7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjMiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6NToiQWRtaW4iO319aWRfZ3JvdXB8czoxOiIzIjtuYW1hX2dyb3VwfHM6NToiQWRtaW4iO25ncm91cHxpOjI7');
INSERT INTO "public"."xi_sa_ci_session" VALUES ('1sn8prnu0fnskn9p32ltseekku1q4qmv', '::1', 1671509616, 'X19jaV9sYXN0X3JlZ2VuZXJhdGV8aToxNjcxNTA5NjE2O2Z1bGxuYW1lfHM6MTE6IlByaW1hIEF1bGlhIjt1bml0X2lkX25hbWV8czo0MzoiRGluYXMgS29tdW5pa2FzaSwgSW5mb3JtYXRpa2EgRGFuIFN0YXRpc3RpayI7aWRfZ3JvdXB8czoxOiIzIjtuYW1hX2dyb3VwfHM6NToiQWRtaW4iO25ncm91cHxpOjI7YWNjb3VudF9uYW1lfHM6MTA6InByaW1hYXVsaWEiO2NsZWFyM25naW5lMjAyMnxzOjE5MjoiMTU2YjMyNGRkOTQ3OTlkMWU5MDlhYTVmNmI5Y2U3NTFlNGYzNDExN2UzYWY3NDJkNzYyNmZkZDBmYzY0OWJlNjFmYWE0MDJkNmRjNTEwZjRhNmRkMzllY2UwOTUxMmMwYWM3YTI0YzUxNDA2ZTZlNjY5YjQ1ZGMxMTA1YWJiMmJ0RjM1d2xISGJ2N25JWCt3TFdubTBuUS8wWDU1cTZDaFpyNmVzOFh4T1BLNld0TFdEMWcyU01WV3luS3RVTjU2IjtleHBpcmVzX2J5fGk6MTY3MTUxMjkzNTtncm91cF9hY3RpdmV8czoxOiIxIjtncm91cF9uYW1lfHM6MTE6IlN1cGVyIEFkbWluIjtsZXZlbF9ha3Nlc3xzOjExOiJTVVBFUiBBRE1JTiI7bmlja19sZXZlbHxzOjM6IlNBRCI7dXNlcl9pZHxzOjMyOiI0QTM3MjlDQTVBMTU5M0Q3MkU2N0ZGMEZFMzExODVEMSI7dW5pdF9pZHxzOjQ6IjI0OTYiO2dyb3VwX3N3aXRjaHxhOjI6e2k6MDthOjI6e3M6ODoiaWRfZ3JvdXAiO3M6MToiMSI7czoxMDoibmFtYV9ncm91cCI7czoxMToiU3VwZXIgQWRtaW4iO31pOjE7YToyOntzOjg6ImlkX2dyb3VwIjtzOjE6IjMiO3M6MTA6Im5hbWFfZ3JvdXAiO3M6NToiQWRtaW4iO319');

-- ----------------------------
-- Table structure for xi_sa_fungsi
-- ----------------------------
DROP TABLE IF EXISTS "public"."xi_sa_fungsi";
CREATE TABLE "public"."xi_sa_fungsi" (
  "id_fungsi" int2 NOT NULL DEFAULT nextval('ac_xi_sa_fungsi'::regclass),
  "nama_fungsi" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "label_fungsi" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "url_fungsi" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "deskripsi_fungsi" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "id_jenis_fungsi" int2 NOT NULL,
  "id_level_akses" int2,
  "create_by" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "create_date" timestamp(6) NOT NULL,
  "create_ip" varchar(20) COLLATE "pg_catalog"."default" NOT NULL,
  "mod_by" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "mod_date" timestamp(6) NOT NULL,
  "mod_ip" varchar(20) COLLATE "pg_catalog"."default" NOT NULL,
  "id_status" int2 NOT NULL
)
;

-- ----------------------------
-- Records of xi_sa_fungsi
-- ----------------------------
INSERT INTO "public"."xi_sa_fungsi" VALUES (1, 'index', 'Index', 'index', 'Fungsi untuk menampilkan data', 1, NULL, 'primaaulia', '2017-06-04 19:30:40', '::1', 'primaaulia', '2020-08-28 11:45:59', '::1', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (2, 'create', 'Create Data', 'create', 'Fungsi untuk menambahkan data', 2, NULL, 'primaaulia', '2017-06-04 19:32:33', '::1', 'primaaulia', '2017-09-05 17:52:35', '::1', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (3, 'update', 'Update Data', 'update', 'Fungsi untuk merubah data', 2, NULL, 'primaaulia', '2017-06-04 19:33:01', '::1', 'primaaulia', '2017-09-05 17:52:44', '::1', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (4, 'delete', 'Delete Data', 'delete', 'Fungsi untuk menghapus data', 2, NULL, 'primaaulia', '2017-06-04 19:33:33', '::1', 'primaaulia', '2017-09-05 17:52:52', '::1', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (5, 'listview', 'List View Data', 'listview', 'Fungsi untuk menampilkan list data', 2, NULL, 'primaaulia', '2017-11-06 13:59:43', '::1', 'primaaulia', '2017-11-06 13:59:43', '::1', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (6, 'review', 'Review Data', 'review', 'Fungsi untuk mereview data kembali', 2, NULL, 'primaaulia', '2017-12-17 23:45:14', '::1', 'primaaulia', '2017-12-17 23:45:29', '::1', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (7, 'details', 'Data Details', 'details', 'Fungsi untuk melihat rincian data', 2, NULL, 'primaaulia', '2017-12-27 08:28:13', '::1', 'primaaulia', '2017-12-27 08:28:13', '::1', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (8, 'searching', 'Searching', 'searching', 'Fungsi untuk mencari data', 2, NULL, 'primaaulia', '2017-11-07 13:21:59', '::1', 'primaaulia', '2017-11-07 13:21:59', '::1', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (9, 'rules', 'Rules Module', 'rules', 'Fungsi untuk setting rules module', 2, NULL, 'primaaulia', '2017-06-05 10:51:09', '::1', 'primaaulia', '2020-04-07 22:38:12', '::1', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (10, 'privileges', 'Group Privilege', 'privileges', 'Fungsi untuk setting group privilege', 2, NULL, 'primaaulia', '2017-06-10 22:23:24', '::1', 'primaaulia', '2017-08-03 12:20:22', '::1', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (11, 'regency', 'Data Regency', 'regency', 'Fungsi untuk mengambil data regency', 2, NULL, 'primaaulia', '2020-04-11 22:38:38', '::1', 'primaaulia', '2020-04-11 22:38:38', '::1', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (12, 'district', 'Data District', 'district', 'Fungsi untuk mengambil data district', 2, NULL, 'primaaulia', '2020-04-11 22:39:48', '::1', 'primaaulia', '2020-04-11 22:39:48', '::1', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (13, 'village', 'Data Village', 'village', 'Fungsi untuk mengambil data village', 2, NULL, 'primaaulia', '2020-04-11 22:40:11', '::1', 'primaaulia', '2020-04-11 22:40:11', '::1', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (14, 'approve', 'Data Approve', 'approve', 'Fungsi untuk menyetujui data', 2, NULL, 'primaaulia', '2018-04-03 09:22:12', '36.67.167.61', 'primaaulia', '2018-04-03 09:22:12', '36.67.167.61', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (15, 'reject', 'Data Reject', 'reject', 'Fungsi untuk menolak data', 2, NULL, 'primaaulia', '2018-04-03 09:22:12', '36.67.167.61', 'primaaulia', '2018-04-03 09:22:12', '36.67.167.61', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (16, 'upload', 'Upload Data', 'upload', 'Fungsi untuk mengupload file', 2, NULL, 'primaaulia', '2018-07-24 22:20:18', '::1', 'primaaulia', '2018-08-03 15:09:33', '::1', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (17, 'download', 'Download Data', 'download', 'Fungsi untuk mendownload file', 2, NULL, 'primaaulia', '2018-07-24 22:21:04', '::1', 'primaaulia', '2018-08-03 15:09:42', '::1', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (18, 'export_to_word', 'Download Word', 'export-to-word', 'Fungsi download laporan format word', 2, NULL, 'primaaulia', '2020-05-02 07:16:39', '::1', 'primaaulia', '2020-05-22 08:03:33', '::1', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (19, 'export_to_excel', 'Download Excel', 'export-to-excel', 'Fungsi download laporan format excel', 2, NULL, 'primaaulia', '2020-05-11 08:27:30', '::1', 'primaaulia', '2020-05-11 08:27:30', '::1', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (20, 'export_to_pdf', 'Download PDF', 'export-to-pdf', 'Fungsi download laporan format pdf', 2, NULL, 'primaaulia', '2020-05-11 08:30:42', '::1', 'primaaulia', '2020-05-11 08:30:42', '::1', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (25, 'getOptionOpd', 'Get Option OPD', 'getOptionOpd', 'untuk memanggil option data opd dari API Simpeg', 2, NULL, 'primaaulia', '2021-03-25 09:22:37', '127.0.0.1', 'primaaulia', '2021-03-25 09:22:37', '127.0.0.1', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (29, 'option', 'Option', 'option', 'untuk get option select dari ajax', 2, NULL, 'primaaulia', '2022-05-18 14:05:42', '::1', 'primaaulia', '2022-05-18 14:05:42', '::1', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (35, 'switch_group', 'Ganti Level User', 'switch_group', 'Ganti Level User', 2, NULL, 'primaaulia', '2022-12-20 11:40:37', '::1', 'primaaulia', '2022-12-20 11:40:37', '::1', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (36, 'login', 'login', 'login', 'Form Login', 1, NULL, 'primaaulia', '2022-12-20 15:22:32', '::1', 'primaaulia', '2022-12-20 15:22:32', '::1', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (37, 'logout', 'logout', 'logout', 'Logout proses', 1, NULL, 'primaaulia', '2022-12-20 15:23:01', '::1', 'primaaulia', '2022-12-20 15:23:01', '::1', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (38, 'timeout', 'timeout', 'timeout', 'timeout fungsi', 1, NULL, 'primaaulia', '2022-12-20 15:23:18', '::1', 'primaaulia', '2022-12-20 15:23:18', '::1', 1);
INSERT INTO "public"."xi_sa_fungsi" VALUES (39, 'account', 'account', 'account', 'account public', 1, NULL, 'primaaulia', '2022-12-20 15:23:34', '::1', 'primaaulia', '2022-12-20 15:23:34', '::1', 1);

-- ----------------------------
-- Table structure for xi_sa_group
-- ----------------------------
DROP TABLE IF EXISTS "public"."xi_sa_group";
CREATE TABLE "public"."xi_sa_group" (
  "id_group" int2 NOT NULL DEFAULT nextval('ac_xi_sa_group'::regclass),
  "nama_group" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "id_level_akses" int2 NOT NULL,
  "id_upk" int2,
  "create_by" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "create_date" timestamp(6) NOT NULL,
  "create_ip" varchar(20) COLLATE "pg_catalog"."default" NOT NULL,
  "mod_by" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "mod_date" timestamp(6) NOT NULL,
  "mod_ip" varchar(20) COLLATE "pg_catalog"."default" NOT NULL,
  "id_status" int2 NOT NULL
)
;

-- ----------------------------
-- Records of xi_sa_group
-- ----------------------------
INSERT INTO "public"."xi_sa_group" VALUES (1, 'Super Admin', 1, NULL, 'primaaulia', '2020-04-07 00:00:00', '::1', 'primaaulia', '2020-04-07 00:00:00', '::1', 1);
INSERT INTO "public"."xi_sa_group" VALUES (3, 'Admin', 2, NULL, 'primaaulia', '2022-12-20 10:53:47', '::1', 'primaaulia', '2022-12-20 10:56:08', '::1', 1);

-- ----------------------------
-- Table structure for xi_sa_group_privileges
-- ----------------------------
DROP TABLE IF EXISTS "public"."xi_sa_group_privileges";
CREATE TABLE "public"."xi_sa_group_privileges" (
  "id_group_privileges" int2 NOT NULL DEFAULT nextval('ac_xi_sa_group_privileges'::regclass),
  "id_group" int2 NOT NULL,
  "id_rules" int2 NOT NULL,
  "id_status" int2 NOT NULL
)
;

-- ----------------------------
-- Records of xi_sa_group_privileges
-- ----------------------------
INSERT INTO "public"."xi_sa_group_privileges" VALUES (1, 1, 1, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (2, 1, 2, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (3, 1, 3, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (4, 1, 4, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (5, 1, 5, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (6, 1, 6, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (7, 1, 7, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (8, 1, 8, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (23, 1, 23, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (24, 1, 24, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (25, 1, 25, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (26, 1, 26, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (27, 1, 27, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (28, 1, 28, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (29, 1, 29, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (30, 1, 30, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (31, 1, 31, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (32, 1, 32, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (33, 1, 33, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (34, 1, 34, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (35, 1, 35, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (36, 1, 36, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (37, 1, 37, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (38, 1, 38, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (39, 1, 39, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (40, 1, 40, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (131, 1, 94, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (394, 1, 150, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (395, 1, 151, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (396, 1, 152, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (400, 3, 156, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (393, 3, 1, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (282, 1, 96, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (283, 1, 97, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (284, 1, 98, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (285, 1, 99, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (286, 1, 100, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (287, 1, 101, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (288, 1, 102, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (289, 1, 103, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (290, 1, 104, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (291, 1, 105, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (292, 1, 106, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (293, 1, 107, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (294, 1, 108, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (295, 1, 109, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (296, 1, 110, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (297, 1, 111, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (298, 1, 112, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (299, 1, 113, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (300, 1, 114, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (301, 1, 115, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (302, 1, 116, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (303, 1, 117, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (305, 1, 119, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (306, 1, 120, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (307, 1, 121, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (308, 1, 122, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (309, 1, 123, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (310, 1, 124, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (311, 1, 125, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (312, 1, 126, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (313, 1, 127, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (314, 1, 128, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (315, 1, 129, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (316, 1, 130, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (317, 1, 131, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (318, 1, 132, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (321, 1, 135, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (322, 1, 136, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (323, 1, 137, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (324, 1, 138, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (325, 1, 139, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (326, 1, 140, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (327, 1, 141, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (328, 1, 142, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (329, 1, 143, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (330, 1, 144, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (331, 1, 145, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (332, 1, 146, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (333, 1, 147, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (334, 1, 148, 0);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (9, 1, 9, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (10, 1, 10, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (11, 1, 11, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (12, 1, 12, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (13, 1, 13, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (14, 1, 14, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (15, 1, 15, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (16, 1, 16, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (17, 1, 17, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (18, 1, 18, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (19, 1, 19, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (20, 1, 20, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (21, 1, 21, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (22, 1, 22, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (397, 1, 153, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (398, 1, 154, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (399, 1, 155, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (401, 1, 156, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (402, 3, 34, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (403, 3, 35, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (404, 3, 36, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (405, 3, 37, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (406, 3, 38, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (407, 3, 39, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (408, 3, 40, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (409, 3, 94, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (410, 3, 150, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (411, 3, 151, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (412, 3, 152, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (413, 3, 153, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (414, 3, 154, 1);
INSERT INTO "public"."xi_sa_group_privileges" VALUES (415, 3, 155, 1);

-- ----------------------------
-- Table structure for xi_sa_jenis_fungsi
-- ----------------------------
DROP TABLE IF EXISTS "public"."xi_sa_jenis_fungsi";
CREATE TABLE "public"."xi_sa_jenis_fungsi" (
  "id_jenis_fungsi" int2 NOT NULL DEFAULT nextval('ac_xi_sa_jenis_fungsi'::regclass),
  "jenis_fungsi" varchar(100) COLLATE "pg_catalog"."default" NOT NULL,
  "id_status" int2 NOT NULL
)
;

-- ----------------------------
-- Records of xi_sa_jenis_fungsi
-- ----------------------------
INSERT INTO "public"."xi_sa_jenis_fungsi" VALUES (1, 'Fungsi Public', 1);
INSERT INTO "public"."xi_sa_jenis_fungsi" VALUES (2, 'Fungsi Pendukung', 1);
INSERT INTO "public"."xi_sa_jenis_fungsi" VALUES (3, 'Fungsi Private', 1);
INSERT INTO "public"."xi_sa_jenis_fungsi" VALUES (4, 'Fungsi Belum Ada', 1);

-- ----------------------------
-- Table structure for xi_sa_kontrol
-- ----------------------------
DROP TABLE IF EXISTS "public"."xi_sa_kontrol";
CREATE TABLE "public"."xi_sa_kontrol" (
  "id_kontrol" int2 NOT NULL DEFAULT nextval('ac_xi_sa_kontrol'::regclass),
  "nama_kontrol" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "label_kontrol" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "url_kontrol" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "deskripsi_kontrol" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "create_by" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "create_date" timestamp(6) NOT NULL,
  "create_ip" varchar(20) COLLATE "pg_catalog"."default" NOT NULL,
  "mod_by" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "mod_date" timestamp(6) NOT NULL,
  "mod_ip" varchar(20) COLLATE "pg_catalog"."default" NOT NULL,
  "id_status" int2 NOT NULL
)
;

-- ----------------------------
-- Records of xi_sa_kontrol
-- ----------------------------
INSERT INTO "public"."xi_sa_kontrol" VALUES (1, 'home', 'Home', 'home', 'Halaman dashboard', 'primaaulia', '2017-06-04 19:36:44', '::1', 'primaaulia', '2020-05-19 11:01:39', '::1', 1);
INSERT INTO "public"."xi_sa_kontrol" VALUES (2, 'fungsi', 'Fungsi', 'fungsi', 'Halaman manajamen fungsi', 'primaaulia', '2017-06-04 19:37:18', '::1', 'primaaulia', '2017-06-07 11:42:03', '::1', 1);
INSERT INTO "public"."xi_sa_kontrol" VALUES (3, 'kontrol', 'Kontrol', 'kontrol', 'Halaman manajemen kontrol', 'primaaulia', '2017-06-04 19:37:38', '::1', 'primaaulia', '2017-06-07 11:41:55', '::1', 1);
INSERT INTO "public"."xi_sa_kontrol" VALUES (4, 'module', 'Module', 'module', 'Halaman manajemen module', 'primaaulia', '2017-06-04 19:37:58', '::1', 'primaaulia', '2017-06-07 11:41:47', '::1', 1);
INSERT INTO "public"."xi_sa_kontrol" VALUES (5, 'menu', 'Menu', 'menu', 'Halaman majamen menu', 'primaaulia', '2017-06-07 11:41:18', '::1', 'primaaulia', '2017-06-07 11:41:18', '::1', 1);
INSERT INTO "public"."xi_sa_kontrol" VALUES (6, 'group', 'Group', 'group', 'Halaman manajemen group', 'primaaulia', '2017-06-10 22:23:53', '::1', 'primaaulia', '2017-06-10 22:24:15', '::1', 1);
INSERT INTO "public"."xi_sa_kontrol" VALUES (7, 'users', 'Users', 'users', 'Halaman manajemen users', 'primaaulia', '2017-06-14 19:18:54', '::1', 'primaaulia', '2017-06-14 19:19:06', '::1', 1);
INSERT INTO "public"."xi_sa_kontrol" VALUES (8, 'Whitelist', 'White List', 'whitelist', 'Halaman Manajemen White List', 'primaaulia', '2022-11-19 20:18:44', '::1', 'primaaulia', '2022-11-19 20:18:44', '::1', 1);
INSERT INTO "public"."xi_sa_kontrol" VALUES (9, 'index', 'index', 'index', 'Halaman Awal', 'primaaulia', '2022-11-26 22:48:52', '::1', 'primaaulia', '2022-11-26 22:49:29', '::1', 1);
INSERT INTO "public"."xi_sa_kontrol" VALUES (22, 'signin', 'Signin', 'signin', 'signin kontroller', 'primaaulia', '2022-12-20 15:19:00', '::1', 'primaaulia', '2022-12-20 15:19:00', '::1', 1);

-- ----------------------------
-- Table structure for xi_sa_level_akses
-- ----------------------------
DROP TABLE IF EXISTS "public"."xi_sa_level_akses";
CREATE TABLE "public"."xi_sa_level_akses" (
  "id_level_akses" int2 NOT NULL DEFAULT nextval('ac_xi_sa_level_akses'::regclass),
  "level_akses" varchar(100) COLLATE "pg_catalog"."default" NOT NULL,
  "nick_level" char(3) COLLATE "pg_catalog"."default" NOT NULL,
  "id_status" int2 NOT NULL
)
;

-- ----------------------------
-- Records of xi_sa_level_akses
-- ----------------------------
INSERT INTO "public"."xi_sa_level_akses" VALUES (1, 'SUPER ADMIN', 'SAD', 1);
INSERT INTO "public"."xi_sa_level_akses" VALUES (2, 'ADMIN', 'ADM', 1);
INSERT INTO "public"."xi_sa_level_akses" VALUES (3, 'OPERATOR', 'OPR', 1);

-- ----------------------------
-- Table structure for xi_sa_log_login
-- ----------------------------
DROP TABLE IF EXISTS "public"."xi_sa_log_login";
CREATE TABLE "public"."xi_sa_log_login" (
  "id_log" int2 NOT NULL DEFAULT nextval('ac_xi_sa_log_login'::regclass),
  "username" varchar(50) COLLATE "pg_catalog"."default" NOT NULL,
  "login_time" int4 NOT NULL,
  "ip_address" varchar(20) COLLATE "pg_catalog"."default" NOT NULL,
  "user_agent" varchar(200) COLLATE "pg_catalog"."default" NOT NULL
)
;

-- ----------------------------
-- Records of xi_sa_log_login
-- ----------------------------

-- ----------------------------
-- Table structure for xi_sa_log_session
-- ----------------------------
DROP TABLE IF EXISTS "public"."xi_sa_log_session";
CREATE TABLE "public"."xi_sa_log_session" (
  "id_log_session" int2 NOT NULL DEFAULT nextval('ac_xi_sa_log_session'::regclass),
  "id_users" int2 NOT NULL,
  "username" varchar(50) COLLATE "pg_catalog"."default" NOT NULL,
  "login_time" int4 NOT NULL,
  "ip_address" varchar(20) COLLATE "pg_catalog"."default" NOT NULL,
  "user_agent" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "id_status" int2 NOT NULL,
  "session_id" varchar(255) COLLATE "pg_catalog"."default" NOT NULL
)
;

-- ----------------------------
-- Records of xi_sa_log_session
-- ----------------------------

-- ----------------------------
-- Table structure for xi_sa_menu
-- ----------------------------
DROP TABLE IF EXISTS "public"."xi_sa_menu";
CREATE TABLE "public"."xi_sa_menu" (
  "id_menu" int2 NOT NULL DEFAULT nextval('ac_xi_sa_menu'::regclass),
  "title_menu" varchar(55) COLLATE "pg_catalog"."default" NOT NULL,
  "url_menu" varchar(55) COLLATE "pg_catalog"."default" NOT NULL,
  "icon_menu" varchar(55) COLLATE "pg_catalog"."default" NOT NULL,
  "order_menu" int2 NOT NULL,
  "id_rules" int2 NOT NULL,
  "parent_id" int2 NOT NULL,
  "is_parent" varchar(55) COLLATE "pg_catalog"."default" NOT NULL,
  "create_by" varchar(55) COLLATE "pg_catalog"."default" NOT NULL,
  "create_date" timestamp(6) NOT NULL,
  "create_ip" varchar(20) COLLATE "pg_catalog"."default" NOT NULL,
  "mod_by" varchar(55) COLLATE "pg_catalog"."default" NOT NULL,
  "mod_date" timestamp(6) NOT NULL,
  "mod_ip" varchar(20) COLLATE "pg_catalog"."default" NOT NULL,
  "id_status" int2 NOT NULL
)
;

-- ----------------------------
-- Records of xi_sa_menu
-- ----------------------------
INSERT INTO "public"."xi_sa_menu" VALUES (1, 'Home', 'home', 'home', 1, 1, 0, 'N', 'primaaulia', '2017-06-07 12:09:31', '::1', 'primaaulia', '2020-09-17 20:00:32', '::1', 1);
INSERT INTO "public"."xi_sa_menu" VALUES (2, 'Manajemen', '#', 'settings', 2, 0, 0, 'Y', 'primaaulia', '2017-06-07 12:09:47', '::1', 'primaaulia', '2019-04-23 14:32:10', '36.67.76.99', 1);
INSERT INTO "public"."xi_sa_menu" VALUES (3, 'Fungsi', 'fungsi', '', 1, 2, 2, 'N', 'primaaulia', '2017-06-07 12:10:03', '::1', 'primaaulia', '2019-04-23 14:32:04', '36.67.76.99', 1);
INSERT INTO "public"."xi_sa_menu" VALUES (4, 'Kontrol', 'kontrol', '', 2, 8, 2, 'N', 'primaaulia', '2017-06-07 12:10:26', '::1', 'primaaulia', '2019-04-23 14:32:20', '36.67.76.99', 1);
INSERT INTO "public"."xi_sa_menu" VALUES (5, 'Module', 'module', '', 3, 14, 2, 'N', 'primaaulia', '2017-06-07 12:10:48', '::1', 'primaaulia', '2019-04-23 14:32:26', '36.67.76.99', 1);
INSERT INTO "public"."xi_sa_menu" VALUES (6, 'Menu', 'menu', '', 5, 21, 2, 'N', 'primaaulia', '2017-06-07 12:11:06', '::1', 'primaaulia', '2020-09-24 08:52:06', '::1', 1);
INSERT INTO "public"."xi_sa_menu" VALUES (7, 'Group', 'group', '', 4, 27, 2, 'N', 'primaaulia', '2017-06-10 22:25:19', '::1', 'primaaulia', '2020-09-24 08:52:14', '::1', 1);
INSERT INTO "public"."xi_sa_menu" VALUES (8, 'Users', 'users', '', 6, 34, 2, 'N', 'primaaulia', '2017-06-14 19:20:01', '::1', 'primaaulia', '2019-04-23 14:32:44', '36.67.76.99', 1);
INSERT INTO "public"."xi_sa_menu" VALUES (10, 'White List', '', 'home', 7, 150, 2, 'N', 'primaaulia', '2022-11-19 21:06:12', '::1', 'primaaulia', '2022-12-20 15:11:29', '::1', 1);

-- ----------------------------
-- Table structure for xi_sa_module
-- ----------------------------
DROP TABLE IF EXISTS "public"."xi_sa_module";
CREATE TABLE "public"."xi_sa_module" (
  "id_module" int2 NOT NULL DEFAULT nextval('ac_xi_sa_module'::regclass),
  "nama_module" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "label_module" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "url_module" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "deskripsi_module" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "create_by" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "create_date" timestamp(6) NOT NULL,
  "create_ip" varchar(20) COLLATE "pg_catalog"."default" NOT NULL,
  "mod_by" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "mod_date" timestamp(6) NOT NULL,
  "mod_ip" varchar(20) COLLATE "pg_catalog"."default" NOT NULL,
  "id_status" int2 NOT NULL
)
;

-- ----------------------------
-- Records of xi_sa_module
-- ----------------------------
INSERT INTO "public"."xi_sa_module" VALUES (1, 'home', 'Home', 'home', 'Module home', 'primaaulia', '2017-06-04 19:39:22', '::1', 'primaaulia', '2020-05-19 11:06:41', '::1', 1);
INSERT INTO "public"."xi_sa_module" VALUES (2, 'manajemen', 'Manajemen', 'manajemen', 'Module konfigurasi system khusus untuk superadmin', 'primaaulia', '2017-06-04 19:40:50', '::1', 'primaaulia', '2017-08-03 16:00:08', '::1', 1);
INSERT INTO "public"."xi_sa_module" VALUES (16, 'auth', 'Auth', 'auth', 'Auth Module', 'primaaulia', '2022-12-20 15:18:04', '::1', 'primaaulia', '2022-12-20 15:18:04', '::1', 1);
INSERT INTO "public"."xi_sa_module" VALUES (17, 'index', 'index', 'index', 'Halaman Awal', 'primaaulia', '2022-12-20 15:33:24', '::1', 'primaaulia', '2022-12-20 15:33:24', '::1', 1);

-- ----------------------------
-- Table structure for xi_sa_rules
-- ----------------------------
DROP TABLE IF EXISTS "public"."xi_sa_rules";
CREATE TABLE "public"."xi_sa_rules" (
  "id_rules" int2 NOT NULL DEFAULT nextval('ac_xi_sa_rules'::regclass),
  "id_module" int2 NOT NULL,
  "id_kontrol" int2 NOT NULL,
  "id_fungsi" int2 NOT NULL,
  "id_status" int2 NOT NULL
)
;

-- ----------------------------
-- Records of xi_sa_rules
-- ----------------------------
INSERT INTO "public"."xi_sa_rules" VALUES (1, 1, 1, 1, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (2, 2, 2, 1, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (3, 2, 2, 2, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (4, 2, 2, 3, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (5, 2, 2, 4, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (6, 2, 2, 5, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (7, 2, 2, 7, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (8, 2, 3, 1, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (9, 2, 3, 2, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (10, 2, 3, 3, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (11, 2, 3, 4, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (12, 2, 3, 5, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (13, 2, 3, 7, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (14, 2, 4, 1, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (15, 2, 4, 2, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (16, 2, 4, 3, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (17, 2, 4, 4, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (18, 2, 4, 5, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (19, 2, 4, 7, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (20, 2, 4, 9, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (21, 2, 5, 1, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (22, 2, 5, 2, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (23, 2, 5, 3, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (24, 2, 5, 4, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (25, 2, 5, 5, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (26, 2, 5, 7, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (27, 2, 6, 1, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (28, 2, 6, 2, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (29, 2, 6, 3, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (30, 2, 6, 4, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (31, 2, 6, 5, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (32, 2, 6, 7, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (33, 2, 6, 10, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (34, 2, 7, 1, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (35, 2, 7, 2, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (36, 2, 7, 3, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (37, 2, 7, 4, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (38, 2, 7, 5, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (39, 2, 7, 7, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (40, 2, 7, 8, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (94, 2, 7, 25, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (150, 2, 8, 1, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (151, 2, 8, 2, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (152, 2, 8, 3, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (153, 2, 8, 4, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (154, 2, 8, 5, 1);
INSERT INTO "public"."xi_sa_rules" VALUES (155, 2, 8, 7, 1);

-- ----------------------------
-- Table structure for xi_sa_setting
-- ----------------------------
DROP TABLE IF EXISTS "public"."xi_sa_setting";
CREATE TABLE "public"."xi_sa_setting" (
  "id" int4 NOT NULL,
  "app_name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "app_author" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "app_description" text COLLATE "pg_catalog"."default" NOT NULL,
  "app_year" char(4) COLLATE "pg_catalog"."default" NOT NULL,
  "app_icon" varchar(200) COLLATE "pg_catalog"."default" NOT NULL,
  "app_favicon" varchar(200) COLLATE "pg_catalog"."default" NOT NULL,
  "app_keywords" text COLLATE "pg_catalog"."default" NOT NULL,
  "app_versi" char(5) COLLATE "pg_catalog"."default" NOT NULL
)
;

-- ----------------------------
-- Records of xi_sa_setting
-- ----------------------------
INSERT INTO "public"."xi_sa_setting" VALUES (1, 'Aplikasi Monitoring', 'Dinas Komunikasi dan Informatika Provinsi Sumatera Barat', 'Merupakan aplikasi Talent Pool Provinsi Sumatera Barat', '2022', 'logo_sumbar.png', 'favicon.ico', 'Monitoring Prov.Sumbar', '1.0.0');

-- ----------------------------
-- Table structure for xi_sa_status
-- ----------------------------
DROP TABLE IF EXISTS "public"."xi_sa_status";
CREATE TABLE "public"."xi_sa_status" (
  "id_status" int2 NOT NULL,
  "nm_status" varchar(100) COLLATE "pg_catalog"."default" NOT NULL,
  "kel_status" int2,
  "ket" varchar(55) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of xi_sa_status
-- ----------------------------
INSERT INTO "public"."xi_sa_status" VALUES (0, 'Tidak Aktif', 1, 'status');
INSERT INTO "public"."xi_sa_status" VALUES (1, 'Aktif', 1, 'status');
INSERT INTO "public"."xi_sa_status" VALUES (11, 'Proses', 2, 'Periode');
INSERT INTO "public"."xi_sa_status" VALUES (12, 'Difinalkan', 2, 'Periode');

-- ----------------------------
-- Table structure for xi_sa_users
-- ----------------------------
DROP TABLE IF EXISTS "public"."xi_sa_users";
CREATE TABLE "public"."xi_sa_users" (
  "id_users" int2 NOT NULL DEFAULT nextval('ac_xi_sa_users'::regclass),
  "token" varchar(32) COLLATE "pg_catalog"."default" NOT NULL,
  "unit_id" int2,
  "unit_id_name" varchar(255) COLLATE "pg_catalog"."default",
  "username" varchar(50) COLLATE "pg_catalog"."default" NOT NULL,
  "password" varchar(250) COLLATE "pg_catalog"."default" NOT NULL,
  "email" varchar(100) COLLATE "pg_catalog"."default",
  "fullname" varchar(255) COLLATE "pg_catalog"."default",
  "foto_profile" varchar(50) COLLATE "pg_catalog"."default",
  "blokir" int2,
  "id_status" int2 NOT NULL,
  "validate_email_code" varchar(100) COLLATE "pg_catalog"."default",
  "validate_email_status" int2,
  "reset_password_code" varchar(100) COLLATE "pg_catalog"."default",
  "reset_password_status" int2,
  "reset_password_expired" int2,
  "create_by" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "create_date" timestamp(6) NOT NULL,
  "create_ip" varchar(20) COLLATE "pg_catalog"."default" NOT NULL,
  "mod_by" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "mod_date" timestamp(6) NOT NULL,
  "mod_ip" varchar(20) COLLATE "pg_catalog"."default" NOT NULL
)
;
COMMENT ON COLUMN "public"."xi_sa_users"."foto_profile" IS 'Foto Profile';
COMMENT ON COLUMN "public"."xi_sa_users"."blokir" IS '0=diblokir, 1=tidak diblokir';
COMMENT ON COLUMN "public"."xi_sa_users"."id_status" IS '0=Tidak Aktif, 1=Aktif';

-- ----------------------------
-- Records of xi_sa_users
-- ----------------------------
INSERT INTO "public"."xi_sa_users" VALUES (1, '4A3729CA5A1593D72E67FF0FE31185D1', 2496, 'Dinas Komunikasi, Informatika Dan Statistik', 'primaaulia', '$2a$12$fexNr6W.H7RPvO9rOTjojuHzoWwK1JO7N2nyuFiD/ufsrlO6tU4ju', '', 'Prima Aulia', 'default-user-icon.png', 0, 1, '', 0, '', 0, 0, 'primaaulia', '2020-12-23 09:18:01', '::1', 'primaaulia', '2022-12-20 11:02:41', '::1');

-- ----------------------------
-- Table structure for xi_sa_users_default_pass
-- ----------------------------
DROP TABLE IF EXISTS "public"."xi_sa_users_default_pass";
CREATE TABLE "public"."xi_sa_users_default_pass" (
  "id_default_pass" int2 NOT NULL DEFAULT nextval('ac_xi_sa_users_default_pass'::regclass),
  "id_users" int2 NOT NULL,
  "pass_plain" char(100) COLLATE "pg_catalog"."default" NOT NULL,
  "updated" varchar(100) COLLATE "pg_catalog"."default" NOT NULL
)
;

-- ----------------------------
-- Records of xi_sa_users_default_pass
-- ----------------------------

-- ----------------------------
-- Table structure for xi_sa_users_privileges
-- ----------------------------
DROP TABLE IF EXISTS "public"."xi_sa_users_privileges";
CREATE TABLE "public"."xi_sa_users_privileges" (
  "id_users_privileges" int2 NOT NULL DEFAULT nextval('ac_xi_sa_users_privileges'::regclass),
  "id_users" int2 NOT NULL,
  "id_group" int2 NOT NULL,
  "id_status" int2 NOT NULL
)
;

-- ----------------------------
-- Records of xi_sa_users_privileges
-- ----------------------------
INSERT INTO "public"."xi_sa_users_privileges" VALUES (2, 1, 1, 1);
INSERT INTO "public"."xi_sa_users_privileges" VALUES (16, 1, 3, 1);

-- ----------------------------
-- Table structure for xi_sa_white_list
-- ----------------------------
DROP TABLE IF EXISTS "public"."xi_sa_white_list";
CREATE TABLE "public"."xi_sa_white_list" (
  "id_white_list" int2 NOT NULL DEFAULT nextval('ac_xi_sa_white_list'::regclass),
  "module_name" varchar(100) COLLATE "pg_catalog"."default" NOT NULL,
  "class_name" varchar(100) COLLATE "pg_catalog"."default" NOT NULL,
  "method_name" varchar(100) COLLATE "pg_catalog"."default" NOT NULL,
  "id_status" int2 NOT NULL,
  "id_module" int2,
  "id_kontrol" int2,
  "id_fungsi" int2,
  "create_by" varchar(155) COLLATE "pg_catalog"."default",
  "create_date" timestamp(0),
  "create_ip" varchar(20) COLLATE "pg_catalog"."default",
  "mod_by" varchar(155) COLLATE "pg_catalog"."default",
  "mod_date" timestamp(0) DEFAULT NULL::timestamp without time zone,
  "mod_ip" varchar(20) COLLATE "pg_catalog"."default",
  "keterangan" varchar(55) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of xi_sa_white_list
-- ----------------------------
INSERT INTO "public"."xi_sa_white_list" VALUES (1, 'auth', 'signin', 'login', 1, 16, 22, 36, 'primaaulia', '2022-12-20 15:23:56', '::1', 'primaaulia', '2022-12-20 15:23:56', '::1', 'Halaman login');
INSERT INTO "public"."xi_sa_white_list" VALUES (2, 'auth', 'signin', 'logout', 1, 16, 22, 37, NULL, NULL, NULL, 'primaaulia', '2022-12-20 15:25:00', '::1', 'Proses logout');
INSERT INTO "public"."xi_sa_white_list" VALUES (3, 'auth', 'signin', 'switch_group', 1, 16, 22, 35, NULL, NULL, NULL, 'primaaulia', '2022-12-20 15:25:22', '::1', 'ganti level user');
INSERT INTO "public"."xi_sa_white_list" VALUES (4, 'auth', 'signin', 'timeout', 1, 16, 22, 38, NULL, NULL, NULL, 'primaaulia', '2022-12-20 15:25:50', '::1', 'Otomatis logout');
INSERT INTO "public"."xi_sa_white_list" VALUES (5, 'auth', 'signin', 'account', 1, 16, 22, 39, NULL, NULL, NULL, 'primaaulia', '2022-12-20 15:26:40', '::1', 'Menampilkan account');
INSERT INTO "public"."xi_sa_white_list" VALUES (9, 'index', 'index', 'index', 1, 17, 9, 1, 'primaaulia', '2022-12-20 15:34:05', '::1', 'primaaulia', '2022-12-20 15:34:05', '::1', 'Halaman Awal');

-- ----------------------------
-- Function structure for TR_kelompok_min
-- ----------------------------
DROP FUNCTION IF EXISTS "public"."TR_kelompok_min"();
CREATE OR REPLACE FUNCTION "public"."TR_kelompok_min"()
  RETURNS "pg_catalog"."trigger" AS $BODY$
BEGIN

update ref_kelompok set banyak=banyak-1 where id=OLD.ref_kelompok_id;

return NEW;
end;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;

-- ----------------------------
-- Function structure for TR_kelompok_plus
-- ----------------------------
DROP FUNCTION IF EXISTS "public"."TR_kelompok_plus"();
CREATE OR REPLACE FUNCTION "public"."TR_kelompok_plus"()
  RETURNS "pg_catalog"."trigger" AS $BODY$
BEGIN

update ref_kelompok set banyak=banyak+1 where id=NEW.ref_kelompok_id;

return NEW;
end;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."ac_xi_sa_fungsi"', 39, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."ac_xi_sa_group"', 11, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."ac_xi_sa_group_privileges"', 415, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."ac_xi_sa_jenis_fungsi"', 5, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."ac_xi_sa_kontrol"', 22, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."ac_xi_sa_level_akses"', 7, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."ac_xi_sa_log_login"', 4, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."ac_xi_sa_log_session"', 53, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."ac_xi_sa_menu"', 19, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."ac_xi_sa_module"', 17, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."ac_xi_sa_rules"', 156, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."ac_xi_sa_users"', 12, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."ac_xi_sa_users_default_pass"', 11, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."ac_xi_sa_users_privileges"', 16, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
SELECT setval('"public"."ac_xi_sa_white_list"', 9, true);

-- ----------------------------
-- Primary Key structure for table xi_sa_ci_session
-- ----------------------------
ALTER TABLE "public"."xi_sa_ci_session" ADD CONSTRAINT "xi_sa_ci_session_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table xi_sa_fungsi
-- ----------------------------
ALTER TABLE "public"."xi_sa_fungsi" ADD CONSTRAINT "xi_sa_fungsi_pkey" PRIMARY KEY ("id_fungsi");

-- ----------------------------
-- Primary Key structure for table xi_sa_group
-- ----------------------------
ALTER TABLE "public"."xi_sa_group" ADD CONSTRAINT "xi_sa_group_pkey" PRIMARY KEY ("id_group");

-- ----------------------------
-- Primary Key structure for table xi_sa_group_privileges
-- ----------------------------
ALTER TABLE "public"."xi_sa_group_privileges" ADD CONSTRAINT "xi_sa_group_privileges_pkey" PRIMARY KEY ("id_group_privileges");

-- ----------------------------
-- Primary Key structure for table xi_sa_jenis_fungsi
-- ----------------------------
ALTER TABLE "public"."xi_sa_jenis_fungsi" ADD CONSTRAINT "xi_sa_jenis_fungsi_pkey" PRIMARY KEY ("id_jenis_fungsi");

-- ----------------------------
-- Primary Key structure for table xi_sa_kontrol
-- ----------------------------
ALTER TABLE "public"."xi_sa_kontrol" ADD CONSTRAINT "xi_sa_kontrol_pkey" PRIMARY KEY ("id_kontrol");

-- ----------------------------
-- Primary Key structure for table xi_sa_level_akses
-- ----------------------------
ALTER TABLE "public"."xi_sa_level_akses" ADD CONSTRAINT "xi_sa_level_akses_pkey" PRIMARY KEY ("id_level_akses");

-- ----------------------------
-- Primary Key structure for table xi_sa_log_login
-- ----------------------------
ALTER TABLE "public"."xi_sa_log_login" ADD CONSTRAINT "xi_sa_log_login_pkey" PRIMARY KEY ("id_log");

-- ----------------------------
-- Primary Key structure for table xi_sa_log_session
-- ----------------------------
ALTER TABLE "public"."xi_sa_log_session" ADD CONSTRAINT "xi_sa_log_session_pkey" PRIMARY KEY ("id_log_session");

-- ----------------------------
-- Primary Key structure for table xi_sa_menu
-- ----------------------------
ALTER TABLE "public"."xi_sa_menu" ADD CONSTRAINT "xi_sa_menu_pkey" PRIMARY KEY ("id_menu");

-- ----------------------------
-- Primary Key structure for table xi_sa_module
-- ----------------------------
ALTER TABLE "public"."xi_sa_module" ADD CONSTRAINT "xi_sa_module_pkey" PRIMARY KEY ("id_module");

-- ----------------------------
-- Primary Key structure for table xi_sa_rules
-- ----------------------------
ALTER TABLE "public"."xi_sa_rules" ADD CONSTRAINT "xi_sa_rules_pkey" PRIMARY KEY ("id_rules");

-- ----------------------------
-- Primary Key structure for table xi_sa_setting
-- ----------------------------
ALTER TABLE "public"."xi_sa_setting" ADD CONSTRAINT "xi_sa_setting_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table xi_sa_status
-- ----------------------------
ALTER TABLE "public"."xi_sa_status" ADD CONSTRAINT "xi_sa_status_pkey" PRIMARY KEY ("id_status");

-- ----------------------------
-- Primary Key structure for table xi_sa_users
-- ----------------------------
ALTER TABLE "public"."xi_sa_users" ADD CONSTRAINT "xi_sa_users_pkey" PRIMARY KEY ("id_users");

-- ----------------------------
-- Primary Key structure for table xi_sa_users_default_pass
-- ----------------------------
ALTER TABLE "public"."xi_sa_users_default_pass" ADD CONSTRAINT "xi_sa_users_default_pass_pkey" PRIMARY KEY ("id_default_pass");

-- ----------------------------
-- Primary Key structure for table xi_sa_users_privileges
-- ----------------------------
ALTER TABLE "public"."xi_sa_users_privileges" ADD CONSTRAINT "xi_sa_users_privileges_pkey" PRIMARY KEY ("id_users_privileges");

-- ----------------------------
-- Primary Key structure for table xi_sa_white_list
-- ----------------------------
ALTER TABLE "public"."xi_sa_white_list" ADD CONSTRAINT "xi_sa_white_list_pkey" PRIMARY KEY ("id_white_list");

-- ----------------------------
-- Foreign Keys structure for table xi_sa_fungsi
-- ----------------------------
ALTER TABLE "public"."xi_sa_fungsi" ADD CONSTRAINT "fungsiToJenisFungsi" FOREIGN KEY ("id_jenis_fungsi") REFERENCES "public"."xi_sa_jenis_fungsi" ("id_jenis_fungsi") ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE "public"."xi_sa_fungsi" ADD CONSTRAINT "fungsiToLevelAkses" FOREIGN KEY ("id_level_akses") REFERENCES "public"."xi_sa_level_akses" ("id_level_akses") ON DELETE RESTRICT ON UPDATE CASCADE;

-- ----------------------------
-- Foreign Keys structure for table xi_sa_group
-- ----------------------------
ALTER TABLE "public"."xi_sa_group" ADD CONSTRAINT "groupToLevelAkses" FOREIGN KEY ("id_level_akses") REFERENCES "public"."xi_sa_level_akses" ("id_level_akses") ON DELETE RESTRICT ON UPDATE CASCADE;

-- ----------------------------
-- Foreign Keys structure for table xi_sa_group_privileges
-- ----------------------------
ALTER TABLE "public"."xi_sa_group_privileges" ADD CONSTRAINT "gptog" FOREIGN KEY ("id_group") REFERENCES "public"."xi_sa_group" ("id_group") ON DELETE CASCADE ON UPDATE CASCADE;

-- ----------------------------
-- Foreign Keys structure for table xi_sa_log_session
-- ----------------------------
ALTER TABLE "public"."xi_sa_log_session" ADD CONSTRAINT "lsToU" FOREIGN KEY ("id_users") REFERENCES "public"."xi_sa_users" ("id_users") ON DELETE RESTRICT ON UPDATE CASCADE;

-- ----------------------------
-- Foreign Keys structure for table xi_sa_rules
-- ----------------------------
ALTER TABLE "public"."xi_sa_rules" ADD CONSTRAINT "rulesToFungsi" FOREIGN KEY ("id_fungsi") REFERENCES "public"."xi_sa_fungsi" ("id_fungsi") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "public"."xi_sa_rules" ADD CONSTRAINT "rulesToKontrol" FOREIGN KEY ("id_kontrol") REFERENCES "public"."xi_sa_kontrol" ("id_kontrol") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "public"."xi_sa_rules" ADD CONSTRAINT "rulesToModule" FOREIGN KEY ("id_module") REFERENCES "public"."xi_sa_module" ("id_module") ON DELETE CASCADE ON UPDATE CASCADE;

-- ----------------------------
-- Foreign Keys structure for table xi_sa_users_privileges
-- ----------------------------
ALTER TABLE "public"."xi_sa_users_privileges" ADD CONSTRAINT "upToGroup" FOREIGN KEY ("id_group") REFERENCES "public"."xi_sa_group" ("id_group") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "public"."xi_sa_users_privileges" ADD CONSTRAINT "upToUsers" FOREIGN KEY ("id_users") REFERENCES "public"."xi_sa_users" ("id_users") ON DELETE CASCADE ON UPDATE CASCADE;
