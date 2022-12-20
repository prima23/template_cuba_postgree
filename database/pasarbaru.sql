-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 08:24 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasarbaru`
--

-- --------------------------------------------------------

--
-- Table structure for table `xi_sa_ci_session`
--

CREATE TABLE `xi_sa_ci_session` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `data` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xi_sa_ci_session`
--

INSERT INTO `xi_sa_ci_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('03j0lupcr1uuvksuld4kbl8m7rbrhjr5', '::1', 1669479384, '__ci_last_regenerate|i:1669479384;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"224a34047e5d1caf02dd348d5ac32b597f3785da90d0cc3a3015c459d3db715212c514b23d20d050fad42241edfc51380392a4f546e830f870a3adfaba3681d9YMe2rCLwGQw9rsNIaQ/NKfaNIpoeB+OGaBjVC+Ezu/c8s1xqAfApiIDNf8qX2nbL\";expires_by|i:1669481187;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('04oj55m44s9ch28596tbuqkmc7ms023q', '::1', 1669217384, '__ci_last_regenerate|i:1669217356;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"ab8a02490fc9081d5d4fe924130c2898737c3b7fc2329e2a9baada6226c6d2fad4b22951b5e96a99e0f7b90116c59f3b00149781b633a2a4931d7f74c8a1d9a0RMJdifxpB1tqJCCbzYk/c8qOKMx9y8C0zCzNrQGCKro4fA4v6aWO6axg/lrtOkUU\";expires_by|i:1669220974;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('0b00mrth3dp4elhsahjr2ceuq8ddq802', '::1', 1668847380, '__ci_last_regenerate|i:1668847380;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"81ebc6961266009c1e2f8c2e486adb435e7cf49dc9e15e2f5a5d3624aa413fd0c6d364bb506daf1f2d6d2de6ec843bf7811eb44520160fa5b9c6993a86a326f1T8xzd9GldpZCrkeK2RKunxUQKiXD1SLkP0xOmDofuDdkU5OqS7Dgl3ZXwIdRKo+S\";expires_by|i:1668848040;fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|s:1:\"0\";unit_id_name|s:0:\"\";'),
('0r4jusoelpe3lfodbsm272di1q1m90qg', '::1', 1669217102, '__ci_last_regenerate|i:1669217102;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"3d5208549f49c31c23241018c7c65778909e603f0531b0153f30faa0f0ffd72927899b03bb74b61d5440b60a15c1a46d09b01154036c1f24b0482ce5fa8db2f930QGWYtGZYe518xbOdRfwwYKsroaYQ7i/s24ZL6l3DwKH5kfhP5J8KXQENV0kCKF\";expires_by|i:1669214933;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('151qoim9ndskfanobc6k0jam48mi37ln', '::1', 1668874523, '__ci_last_regenerate|i:1668874523;clear3ngine2022|s:192:\"4c042c00e349764b3e6651836b173b425820c8f303fa19d83e634188b2f0221c5cf8dc14fd62656a82808fcd3d53b15a66d49bf53fa5bb7ea3f03b79ae9dae46Sf3GlYTD13Mh4L5HN5sTKEt/CIPmyKM6aHWLaQIGUWbksoAso6N+pzV5NfBqYSGk\";foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";unit_id_name|N;account_name|s:10:\"primaaulia\";expires_by|i:1668868146;group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;'),
('1codkcnhbor6nat00s0gvh1o6eisi3c5', '::1', 1668870172, '__ci_last_regenerate|i:1668870172;clear3ngine2022|s:192:\"4c042c00e349764b3e6651836b173b425820c8f303fa19d83e634188b2f0221c5cf8dc14fd62656a82808fcd3d53b15a66d49bf53fa5bb7ea3f03b79ae9dae46Sf3GlYTD13Mh4L5HN5sTKEt/CIPmyKM6aHWLaQIGUWbksoAso6N+pzV5NfBqYSGk\";foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";unit_id_name|N;account_name|s:10:\"primaaulia\";expires_by|i:1668868146;group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;'),
('1lo2lfs0hhi5af68qphmk9pdb4ecngf3', '::1', 1669133195, '__ci_last_regenerate|i:1669133195;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"51b7f792af357930d2720835eb7af91a0566896f8d95ededf772031eab0fd4d604ad65d09480d484298fdba7dfed00f580a7aa3e82637a6666ff4aa24c3e6cccFN7/MiIc9aYZaomuU5aV1wfAKkkkwsRjaDnYdkvmL4oeinaf9Zi/yiSDfpg6UDrE\";expires_by|i:1669130987;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('1remhv67tc8nmpi3o0rnkng4j522cfcs', '::1', 1669478619, '__ci_last_regenerate|i:1669478619;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"224a34047e5d1caf02dd348d5ac32b597f3785da90d0cc3a3015c459d3db715212c514b23d20d050fad42241edfc51380392a4f546e830f870a3adfaba3681d9YMe2rCLwGQw9rsNIaQ/NKfaNIpoeB+OGaBjVC+Ezu/c8s1xqAfApiIDNf8qX2nbL\";expires_by|i:1669481187;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('2ccei0eto9f86eap8utm1vf77dpba1rd', '::1', 1668880719, '__ci_last_regenerate|i:1668880702;clear3ngine2022|s:192:\"4c042c00e349764b3e6651836b173b425820c8f303fa19d83e634188b2f0221c5cf8dc14fd62656a82808fcd3d53b15a66d49bf53fa5bb7ea3f03b79ae9dae46Sf3GlYTD13Mh4L5HN5sTKEt/CIPmyKM6aHWLaQIGUWbksoAso6N+pzV5NfBqYSGk\";foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";unit_id_name|N;account_name|s:10:\"primaaulia\";expires_by|i:1668868146;group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;'),
('2kt07j5ith4i1927ldi3c1s1b1mpra2b', '::1', 1668848470, '__ci_last_regenerate|i:1668848470;fullname|s:11:\"Prima Aulia\";unit_id_name|s:0:\"\";account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"b3c57ec106ecbd7498a1a6e1f285314f8a837cfa72f17b8ed04d1142d29c00b1e26213e52873d3929d5bea27726eaddaa0423f190c54bac1736ebf10bc55605c4O44CNem1dxkQdo2XVGYpl+68x5IKz2fKg+VIa47Z2ZpW2UAAFlsvY28ZgYeVQbO\";expires_by|i:1668851271;group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|s:1:\"0\";'),
('2l8ui52jo852gus671uifbrjuihaqded', '::1', 1668880702, '__ci_last_regenerate|i:1668880702;clear3ngine2022|s:192:\"4c042c00e349764b3e6651836b173b425820c8f303fa19d83e634188b2f0221c5cf8dc14fd62656a82808fcd3d53b15a66d49bf53fa5bb7ea3f03b79ae9dae46Sf3GlYTD13Mh4L5HN5sTKEt/CIPmyKM6aHWLaQIGUWbksoAso6N+pzV5NfBqYSGk\";foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";unit_id_name|N;account_name|s:10:\"primaaulia\";expires_by|i:1668868146;group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;'),
('2nb44umi0oj9o18eg97n7qa5o8thh02i', '::1', 1669478252, '__ci_last_regenerate|i:1669478252;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"224a34047e5d1caf02dd348d5ac32b597f3785da90d0cc3a3015c459d3db715212c514b23d20d050fad42241edfc51380392a4f546e830f870a3adfaba3681d9YMe2rCLwGQw9rsNIaQ/NKfaNIpoeB+OGaBjVC+Ezu/c8s1xqAfApiIDNf8qX2nbL\";expires_by|i:1669481187;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('35shi4fa68bpqhg0v1rm1n664495nokd', '::1', 1668865455, '__ci_last_regenerate|i:1668865455;clear3ngine2022|s:192:\"4c042c00e349764b3e6651836b173b425820c8f303fa19d83e634188b2f0221c5cf8dc14fd62656a82808fcd3d53b15a66d49bf53fa5bb7ea3f03b79ae9dae46Sf3GlYTD13Mh4L5HN5sTKEt/CIPmyKM6aHWLaQIGUWbksoAso6N+pzV5NfBqYSGk\";foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";unit_id_name|N;account_name|s:10:\"primaaulia\";expires_by|i:1668868146;group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;'),
('3qi3m8j72q8dhr4abjt3lcmll0segk8u', '::1', 1669463724, '__ci_last_regenerate|i:1669463724;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"302d1fe1317a124406f3a9a95f6a2955c7b13823b579ff7fe3ee9829adbc58bd72bd7102d1778ed114b42ae14c3a8fb7023da8eb8d27074673dd85938552131cuIJkIvDwYUgbIEzTEWGDoViM7KeIP6+O+fiyd6PtXVhsnKycL1egVviLeBYumGz9\";expires_by|i:1669461421;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('44c74i31ueb8v6uk1iipg676r8096uqa', '::1', 1668840998, '__ci_last_regenerate|i:1668840998;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"07331f7f14331cc3818be5b40e4303992a0d5647571939864a987da20e690900d29e446b6827aa2214dfa9b7bf10117ca4f1ddb1c1101f74df8834a29c5c727aMHW01O4XHIO3phEzwNzI0sXvHLNjJza8Eoj3S5bSoAWKxuBU689kkhce/ujSNOT1\";expires_by|i:1668843951;fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|s:1:\"0\";unit_id_name|s:0:\"\";'),
('4bto3vd9162l3ha1ejepj5jpakgb0f0m', '::1', 1669219074, '__ci_last_regenerate|i:1669219072;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"3d5208549f49c31c23241018c7c65778909e603f0531b0153f30faa0f0ffd72927899b03bb74b61d5440b60a15c1a46d09b01154036c1f24b0482ce5fa8db2f930QGWYtGZYe518xbOdRfwwYKsroaYQ7i/s24ZL6l3DwKH5kfhP5J8KXQENV0kCKF\";expires_by|i:1669214933;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('4dtpkavstv7k7qrvu4uj3p5td1u7np3b', '::1', 1668871713, '__ci_last_regenerate|i:1668871713;clear3ngine2022|s:192:\"4c042c00e349764b3e6651836b173b425820c8f303fa19d83e634188b2f0221c5cf8dc14fd62656a82808fcd3d53b15a66d49bf53fa5bb7ea3f03b79ae9dae46Sf3GlYTD13Mh4L5HN5sTKEt/CIPmyKM6aHWLaQIGUWbksoAso6N+pzV5NfBqYSGk\";foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";unit_id_name|N;account_name|s:10:\"primaaulia\";expires_by|i:1668868146;group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;'),
('4f0ranolr8klmv6gr0436nli6q7gmvba', '::1', 1669219072, '__ci_last_regenerate|i:1669219072;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"3d5208549f49c31c23241018c7c65778909e603f0531b0153f30faa0f0ffd72927899b03bb74b61d5440b60a15c1a46d09b01154036c1f24b0482ce5fa8db2f930QGWYtGZYe518xbOdRfwwYKsroaYQ7i/s24ZL6l3DwKH5kfhP5J8KXQENV0kCKF\";expires_by|i:1669214933;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('4fj0ptmlorqgd89as5351beqskd24hmv', '::1', 1669440019, '__ci_last_regenerate|i:1669440019;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"88081fe2e3ebbe0534b05278c9bc85db4475ddf5e789a6f50b0297f09014b56bc91ebc0dbf062fe789d4347e3b3109bb8dcdd09a6f7d615a32729f5757df7e2bKbw+lxvWC5u3WYz0YcVW1BPHmBxQYVfNGBIIXD6KpV4n2O7og1aZ55Aeua1JVY7P\";expires_by|i:1669442920;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('4g5vp5ee5p2i3e2813i7b6ampanpj2q9', '::1', 1668873620, '__ci_last_regenerate|i:1668873620;clear3ngine2022|s:192:\"4c042c00e349764b3e6651836b173b425820c8f303fa19d83e634188b2f0221c5cf8dc14fd62656a82808fcd3d53b15a66d49bf53fa5bb7ea3f03b79ae9dae46Sf3GlYTD13Mh4L5HN5sTKEt/CIPmyKM6aHWLaQIGUWbksoAso6N+pzV5NfBqYSGk\";foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";unit_id_name|N;account_name|s:10:\"primaaulia\";expires_by|i:1668868146;group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;'),
('4go23o7f24d5g97ehud2t27h51s9ki6h', '::1', 1669134374, '__ci_last_regenerate|i:1669134374;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"51b7f792af357930d2720835eb7af91a0566896f8d95ededf772031eab0fd4d604ad65d09480d484298fdba7dfed00f580a7aa3e82637a6666ff4aa24c3e6cccFN7/MiIc9aYZaomuU5aV1wfAKkkkwsRjaDnYdkvmL4oeinaf9Zi/yiSDfpg6UDrE\";expires_by|i:1669130987;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('4hrhp2b9c8djr9dtjgfs4jui46kvo1cd', '::1', 1669214278, '__ci_last_regenerate|i:1669214278;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"3d5208549f49c31c23241018c7c65778909e603f0531b0153f30faa0f0ffd72927899b03bb74b61d5440b60a15c1a46d09b01154036c1f24b0482ce5fa8db2f930QGWYtGZYe518xbOdRfwwYKsroaYQ7i/s24ZL6l3DwKH5kfhP5J8KXQENV0kCKF\";expires_by|i:1669214933;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('4lcnv5h6senq4laufkov8hujvtktil5q', '::1', 1669458370, '__ci_last_regenerate|i:1669458370;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"302d1fe1317a124406f3a9a95f6a2955c7b13823b579ff7fe3ee9829adbc58bd72bd7102d1778ed114b42ae14c3a8fb7023da8eb8d27074673dd85938552131cuIJkIvDwYUgbIEzTEWGDoViM7KeIP6+O+fiyd6PtXVhsnKycL1egVviLeBYumGz9\";expires_by|i:1669461421;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('5i25eovtuvirfm342kjecucaupgfeve5', '::1', 1669217521, '__ci_last_regenerate|i:1669217521;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"3d5208549f49c31c23241018c7c65778909e603f0531b0153f30faa0f0ffd72927899b03bb74b61d5440b60a15c1a46d09b01154036c1f24b0482ce5fa8db2f930QGWYtGZYe518xbOdRfwwYKsroaYQ7i/s24ZL6l3DwKH5kfhP5J8KXQENV0kCKF\";expires_by|i:1669214933;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('61dm6lb6r9envin3mpvakgern2ml4bot', '::1', 1668866696, '__ci_last_regenerate|i:1668866696;clear3ngine2022|s:192:\"4c042c00e349764b3e6651836b173b425820c8f303fa19d83e634188b2f0221c5cf8dc14fd62656a82808fcd3d53b15a66d49bf53fa5bb7ea3f03b79ae9dae46Sf3GlYTD13Mh4L5HN5sTKEt/CIPmyKM6aHWLaQIGUWbksoAso6N+pzV5NfBqYSGk\";foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";unit_id_name|N;account_name|s:10:\"primaaulia\";expires_by|i:1668868146;group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;'),
('66q71rsrjlk2i6if3savi65s48h50t9g', '::1', 1668864002, '__ci_last_regenerate|i:1668864002;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"a4dc056e2e50ad321dbe4cad2ab5e19157250bb9a7a48375035afbff3d8725ae0dd26dba26bbd3f6bd4aabc226ec544755040f44520e947ca9f589549a78250bRvVICHlDpJPEqElIWoSH2pH/+gr9eS8E6qsw8vbRDHOnolDju58Juq5bnVPPXwLZ\";expires_by|i:1668867262;foto|s:21:\"default-user-icon.jpg\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;'),
('67cjf9nteugfe4mbqvenfcso1309kp2k', '::1', 1668874837, '__ci_last_regenerate|i:1668874837;clear3ngine2022|s:192:\"4c042c00e349764b3e6651836b173b425820c8f303fa19d83e634188b2f0221c5cf8dc14fd62656a82808fcd3d53b15a66d49bf53fa5bb7ea3f03b79ae9dae46Sf3GlYTD13Mh4L5HN5sTKEt/CIPmyKM6aHWLaQIGUWbksoAso6N+pzV5NfBqYSGk\";foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";unit_id_name|N;account_name|s:10:\"primaaulia\";expires_by|i:1668868146;group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;'),
('6kktu08hhdqcf2btg8mjac03nmco11js', '::1', 1668699598, '__ci_last_regenerate|i:1668699598;fullname|s:11:\"Prima Aulia\";unit_id_name|s:0:\"\";'),
('79ooiicrpc4ni1r22ktfrcu9ssu9fc0s', '::1', 1668865831, '__ci_last_regenerate|i:1668865831;clear3ngine2022|s:192:\"4c042c00e349764b3e6651836b173b425820c8f303fa19d83e634188b2f0221c5cf8dc14fd62656a82808fcd3d53b15a66d49bf53fa5bb7ea3f03b79ae9dae46Sf3GlYTD13Mh4L5HN5sTKEt/CIPmyKM6aHWLaQIGUWbksoAso6N+pzV5NfBqYSGk\";foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";unit_id_name|N;account_name|s:10:\"primaaulia\";expires_by|i:1668868146;group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;'),
('7bhquihj57dc4vrp954osmpcopo3nfd1', '::1', 1669292750, '__ci_last_regenerate|i:1669292750;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"f72fcc458668b77c6be56db581107724826e35e7c02ae4d442d996cc586a4baa2d5b14bdd353e4ea2bec6bf0c00f5bcfc29ae02a49f8965276097c5cda97288bIm3BIbFnp+2zKOm3CNtS0WK7yU3k1m0pQO0NOEFp2Z1E086HmUAWa1i1yGHiQPy5\";expires_by|i:1669296031;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('7fr3uul6lrc0hq6ktoguquf1eb96anb0', '::1', 1668874068, '__ci_last_regenerate|i:1668874068;clear3ngine2022|s:192:\"4c042c00e349764b3e6651836b173b425820c8f303fa19d83e634188b2f0221c5cf8dc14fd62656a82808fcd3d53b15a66d49bf53fa5bb7ea3f03b79ae9dae46Sf3GlYTD13Mh4L5HN5sTKEt/CIPmyKM6aHWLaQIGUWbksoAso6N+pzV5NfBqYSGk\";foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";unit_id_name|N;account_name|s:10:\"primaaulia\";expires_by|i:1668868146;group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;'),
('7o90mj62hgqvk91jh50mv1ce9rc5som4', '::1', 1669134705, '__ci_last_regenerate|i:1669134705;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"51b7f792af357930d2720835eb7af91a0566896f8d95ededf772031eab0fd4d604ad65d09480d484298fdba7dfed00f580a7aa3e82637a6666ff4aa24c3e6cccFN7/MiIc9aYZaomuU5aV1wfAKkkkwsRjaDnYdkvmL4oeinaf9Zi/yiSDfpg6UDrE\";expires_by|i:1669130987;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('89a45pputuc4rjlclmhngga7t6op61l6', '::1', 1669216444, '__ci_last_regenerate|i:1669216403;error_session|i:2;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"1db1062ec8d37715cd358b4f030c91c6f6098fed52dd687570ce219f95e9135edbe0e9afc78f18164122c67e48dcea9b57afe7e4b4e76fc3dec8fa1dcc01c50duHXQ/hSBi5WpYpmRnjApNKjHg6yEvpKsdi7LAT/xJnFVUx5gZzTKUv7cdz3Uaq2U\";expires_by|i:1669220034;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('8gjaqv2esnfs5gojsu6vv6alg4rgpmng', '::1', 1668845685, '__ci_last_regenerate|i:1668845685;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"81ebc6961266009c1e2f8c2e486adb435e7cf49dc9e15e2f5a5d3624aa413fd0c6d364bb506daf1f2d6d2de6ec843bf7811eb44520160fa5b9c6993a86a326f1T8xzd9GldpZCrkeK2RKunxUQKiXD1SLkP0xOmDofuDdkU5OqS7Dgl3ZXwIdRKo+S\";expires_by|i:1668848040;fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|s:1:\"0\";unit_id_name|s:0:\"\";'),
('8lohosb507g91ol064nsc894d9oppidb', '::1', 1669468374, '__ci_last_regenerate|i:1669468374;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"302d1fe1317a124406f3a9a95f6a2955c7b13823b579ff7fe3ee9829adbc58bd72bd7102d1778ed114b42ae14c3a8fb7023da8eb8d27074673dd85938552131cuIJkIvDwYUgbIEzTEWGDoViM7KeIP6+O+fiyd6PtXVhsnKycL1egVviLeBYumGz9\";expires_by|i:1669461421;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('9g1h2nf468fft4n9g0b0iqk82fonjeq7', '::1', 1669467328, '__ci_last_regenerate|i:1669467328;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"302d1fe1317a124406f3a9a95f6a2955c7b13823b579ff7fe3ee9829adbc58bd72bd7102d1778ed114b42ae14c3a8fb7023da8eb8d27074673dd85938552131cuIJkIvDwYUgbIEzTEWGDoViM7KeIP6+O+fiyd6PtXVhsnKycL1egVviLeBYumGz9\";expires_by|i:1669461421;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('apvqndvd4du1f9ntuu0u5ug8a7a9m42i', '::1', 1668849213, '__ci_last_regenerate|i:1668849213;fullname|s:11:\"Prima Aulia\";unit_id_name|s:0:\"\";clear3ngine2022|s:192:\"00cdb97d5bdab8542fb6f06f95b467db1025458f1e2eb95a66bd36a7b02d0a541e7ffcd4c0b4f256816dae367e843c0539e7f35f91442e2f733b9b3dd1f27949dt9qu8FZkprVVtXFJo59nRY5q+J+SbHVFv/rODs8TkcNSDDPuyCQTjNXVJn6gH3J\";error_session|i:1;account_name|s:10:\"primaaulia\";expires_by|i:1668852689;'),
('asve4t6aibv6cq9bsqelj6nmfq1ng7jl', '::1', 1668841935, '__ci_last_regenerate|i:1668841935;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"294c739afb405b11ecb2b6995c3dd9daacb7ad1d6d7ec911d659afc8b384225a8d9d28d36e3719768db5a895d14ca60ca3a401ee919ea141addfc121ee0f1581xaTsCRvarLLTS0UMhl0cne+3ht6rfD565bkR4jYhVDRsA/F/dV3mRPjGS48Cvueh\";expires_by|i:1668844860;fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|s:1:\"0\";unit_id_name|s:0:\"\";'),
('au1h572luamlptiqc4l1t54cplquvfla', '::1', 1669468698, '__ci_last_regenerate|i:1669468698;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"302d1fe1317a124406f3a9a95f6a2955c7b13823b579ff7fe3ee9829adbc58bd72bd7102d1778ed114b42ae14c3a8fb7023da8eb8d27074673dd85938552131cuIJkIvDwYUgbIEzTEWGDoViM7KeIP6+O+fiyd6PtXVhsnKycL1egVviLeBYumGz9\";expires_by|i:1669461421;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('avssp0pr6jc19c1opic6mu8aa1ajk5vg', '::1', 1669216281, '__ci_last_regenerate|i:1669216281;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"3d5208549f49c31c23241018c7c65778909e603f0531b0153f30faa0f0ffd72927899b03bb74b61d5440b60a15c1a46d09b01154036c1f24b0482ce5fa8db2f930QGWYtGZYe518xbOdRfwwYKsroaYQ7i/s24ZL6l3DwKH5kfhP5J8KXQENV0kCKF\";expires_by|i:1669214933;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('b482dqg2crsrlt1p8grstsrvmr62sa90', '::1', 1669134038, '__ci_last_regenerate|i:1669134038;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"51b7f792af357930d2720835eb7af91a0566896f8d95ededf772031eab0fd4d604ad65d09480d484298fdba7dfed00f580a7aa3e82637a6666ff4aa24c3e6cccFN7/MiIc9aYZaomuU5aV1wfAKkkkwsRjaDnYdkvmL4oeinaf9Zi/yiSDfpg6UDrE\";expires_by|i:1669130987;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('b5d0q3cpjmnn38pmcgi4e11fkgeibbpf', '::1', 1669127689, '__ci_last_regenerate|i:1669127689;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"51b7f792af357930d2720835eb7af91a0566896f8d95ededf772031eab0fd4d604ad65d09480d484298fdba7dfed00f580a7aa3e82637a6666ff4aa24c3e6cccFN7/MiIc9aYZaomuU5aV1wfAKkkkwsRjaDnYdkvmL4oeinaf9Zi/yiSDfpg6UDrE\";expires_by|i:1669130987;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('buu76kdohc9u11f0irgmc21a35gnnnnr', '::1', 1669292811, '__ci_last_regenerate|i:1669292750;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"f72fcc458668b77c6be56db581107724826e35e7c02ae4d442d996cc586a4baa2d5b14bdd353e4ea2bec6bf0c00f5bcfc29ae02a49f8965276097c5cda97288bIm3BIbFnp+2zKOm3CNtS0WK7yU3k1m0pQO0NOEFp2Z1E086HmUAWa1i1yGHiQPy5\";expires_by|i:1669296031;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('c2fog86s2vr409sk5v9dekeo86louube', '::1', 1670003241, '__ci_last_regenerate|i:1670003241;'),
('cll5p6o437hd5ddig8f0e8dei1ksh5gj', '::1', 1669134908, '__ci_last_regenerate|i:1669134705;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"51b7f792af357930d2720835eb7af91a0566896f8d95ededf772031eab0fd4d604ad65d09480d484298fdba7dfed00f580a7aa3e82637a6666ff4aa24c3e6cccFN7/MiIc9aYZaomuU5aV1wfAKkkkwsRjaDnYdkvmL4oeinaf9Zi/yiSDfpg6UDrE\";expires_by|i:1669130987;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('cs60ni2g6snkajdr7dnevvl2o5bhkmt9', '::1', 1668699663, '__ci_last_regenerate|i:1668699598;fullname|s:11:\"Prima Aulia\";unit_id_name|s:0:\"\";'),
('e8nju7gsa608k787ap88c58vouhlub24', '::1', 1668878224, '__ci_last_regenerate|i:1668878224;clear3ngine2022|s:192:\"4c042c00e349764b3e6651836b173b425820c8f303fa19d83e634188b2f0221c5cf8dc14fd62656a82808fcd3d53b15a66d49bf53fa5bb7ea3f03b79ae9dae46Sf3GlYTD13Mh4L5HN5sTKEt/CIPmyKM6aHWLaQIGUWbksoAso6N+pzV5NfBqYSGk\";foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";unit_id_name|N;account_name|s:10:\"primaaulia\";expires_by|i:1668868146;group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;'),
('esi257clu5ilbegca4aamspf0vuia034', '::1', 1669216659, '__ci_last_regenerate|i:1669216659;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"3d5208549f49c31c23241018c7c65778909e603f0531b0153f30faa0f0ffd72927899b03bb74b61d5440b60a15c1a46d09b01154036c1f24b0482ce5fa8db2f930QGWYtGZYe518xbOdRfwwYKsroaYQ7i/s24ZL6l3DwKH5kfhP5J8KXQENV0kCKF\";expires_by|i:1669214933;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('f3ea1fpqlv9i70ohgk50mule4euslhc4', '::1', 1668844737, '__ci_last_regenerate|i:1668844737;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"81ebc6961266009c1e2f8c2e486adb435e7cf49dc9e15e2f5a5d3624aa413fd0c6d364bb506daf1f2d6d2de6ec843bf7811eb44520160fa5b9c6993a86a326f1T8xzd9GldpZCrkeK2RKunxUQKiXD1SLkP0xOmDofuDdkU5OqS7Dgl3ZXwIdRKo+S\";expires_by|i:1668848040;fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|s:1:\"0\";unit_id_name|s:0:\"\";'),
('f6of0cqb6q5e17vqdnaj1uk5lsd2l56j', '::1', 1669214947, '__ci_last_regenerate|i:1669214947;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"3d5208549f49c31c23241018c7c65778909e603f0531b0153f30faa0f0ffd72927899b03bb74b61d5440b60a15c1a46d09b01154036c1f24b0482ce5fa8db2f930QGWYtGZYe518xbOdRfwwYKsroaYQ7i/s24ZL6l3DwKH5kfhP5J8KXQENV0kCKF\";expires_by|i:1669214933;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('fsfd0rgqmqln5g9hnsetbchcmf8d932c', '::1', 1668872466, '__ci_last_regenerate|i:1668872466;clear3ngine2022|s:192:\"4c042c00e349764b3e6651836b173b425820c8f303fa19d83e634188b2f0221c5cf8dc14fd62656a82808fcd3d53b15a66d49bf53fa5bb7ea3f03b79ae9dae46Sf3GlYTD13Mh4L5HN5sTKEt/CIPmyKM6aHWLaQIGUWbksoAso6N+pzV5NfBqYSGk\";foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";unit_id_name|N;account_name|s:10:\"primaaulia\";expires_by|i:1668868146;group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;'),
('ge5rna3g31412r2p9rrcj62phb0dhotv', '::1', 1668865082, '__ci_last_regenerate|i:1668865082;clear3ngine2022|s:192:\"4c042c00e349764b3e6651836b173b425820c8f303fa19d83e634188b2f0221c5cf8dc14fd62656a82808fcd3d53b15a66d49bf53fa5bb7ea3f03b79ae9dae46Sf3GlYTD13Mh4L5HN5sTKEt/CIPmyKM6aHWLaQIGUWbksoAso6N+pzV5NfBqYSGk\";foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";unit_id_name|N;account_name|s:10:\"primaaulia\";expires_by|i:1668868146;group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;'),
('guc9td52pnt25p62n7seq7iatuj02353', '::1', 1669477914, '__ci_last_regenerate|i:1669477914;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"224a34047e5d1caf02dd348d5ac32b597f3785da90d0cc3a3015c459d3db715212c514b23d20d050fad42241edfc51380392a4f546e830f870a3adfaba3681d9YMe2rCLwGQw9rsNIaQ/NKfaNIpoeB+OGaBjVC+Ezu/c8s1xqAfApiIDNf8qX2nbL\";expires_by|i:1669481187;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('gva8398hci9v9jfv2acldcgpfug3rn9p', '::1', 1669554539, '__ci_last_regenerate|i:1669554341;clear3ngine2022|s:192:\"f9a7d16061484871f286e83f33ed0a41e3fe6695b2f9bd9a97cdff35c3577f16aa9578d101db8fd0701e3735bb677ecc1c7038c2e41c3c8e1277f2ade3cb4502VonUzujxevnuR5aL5e2QWWMskQgnKKayOIQkYNP0m9L28pEffzKs+BwqE1QmIru/\";foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";unit_id_name|N;account_name|s:10:\"primaaulia\";expires_by|i:1669558139;group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('hbl92a4uiuc3pm5cg5da6tcbjnbarbou', '::1', 1669479714, '__ci_last_regenerate|i:1669479711;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"224a34047e5d1caf02dd348d5ac32b597f3785da90d0cc3a3015c459d3db715212c514b23d20d050fad42241edfc51380392a4f546e830f870a3adfaba3681d9YMe2rCLwGQw9rsNIaQ/NKfaNIpoeB+OGaBjVC+Ezu/c8s1xqAfApiIDNf8qX2nbL\";expires_by|i:1669481187;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('hg8qslf41a8bfsfqrh09882brpeodo90', '::1', 1668848166, '__ci_last_regenerate|i:1668848166;fullname|s:11:\"Prima Aulia\";unit_id_name|s:0:\"\";account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"b3c57ec106ecbd7498a1a6e1f285314f8a837cfa72f17b8ed04d1142d29c00b1e26213e52873d3929d5bea27726eaddaa0423f190c54bac1736ebf10bc55605c4O44CNem1dxkQdo2XVGYpl+68x5IKz2fKg+VIa47Z2ZpW2UAAFlsvY28ZgYeVQbO\";expires_by|i:1668851271;group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|s:1:\"0\";'),
('i47se0oc0qb6m4tsb9176v01r569rspi', '::1', 1668872113, '__ci_last_regenerate|i:1668872113;clear3ngine2022|s:192:\"4c042c00e349764b3e6651836b173b425820c8f303fa19d83e634188b2f0221c5cf8dc14fd62656a82808fcd3d53b15a66d49bf53fa5bb7ea3f03b79ae9dae46Sf3GlYTD13Mh4L5HN5sTKEt/CIPmyKM6aHWLaQIGUWbksoAso6N+pzV5NfBqYSGk\";foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";unit_id_name|N;account_name|s:10:\"primaaulia\";expires_by|i:1668868146;group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;'),
('i77onpfhr584l38bjh07i28aj2647fko', '::1', 1669211893, '__ci_last_regenerate|i:1669211893;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"3d5208549f49c31c23241018c7c65778909e603f0531b0153f30faa0f0ffd72927899b03bb74b61d5440b60a15c1a46d09b01154036c1f24b0482ce5fa8db2f930QGWYtGZYe518xbOdRfwwYKsroaYQ7i/s24ZL6l3DwKH5kfhP5J8KXQENV0kCKF\";expires_by|i:1669214933;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('ihhk78frscs9qchhlmihnudn8beh5vsd', '::1', 1668845314, '__ci_last_regenerate|i:1668845314;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"81ebc6961266009c1e2f8c2e486adb435e7cf49dc9e15e2f5a5d3624aa413fd0c6d364bb506daf1f2d6d2de6ec843bf7811eb44520160fa5b9c6993a86a326f1T8xzd9GldpZCrkeK2RKunxUQKiXD1SLkP0xOmDofuDdkU5OqS7Dgl3ZXwIdRKo+S\";expires_by|i:1668848040;fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|s:1:\"0\";unit_id_name|s:0:\"\";'),
('iv37p91jtd2vk3r90b54sd54hd4d5lrg', '::1', 1669469243, '__ci_last_regenerate|i:1669469223;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"98fb63bb83d21e7029f61ce31406320380168717464bb3799494167663aa00de8293d00b879113c8a753ac5395789571707db9bb8c26d57a7881972857091539BfqHJGk4MlQOZX7zea4kSqh74R1OkA+309T8AMXrZ8SpDNCJbhC/a2MRHk5YiqJU\";expires_by|i:1669472838;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('jmrcbu1d10qve4669m5r6psg5c50oajq', '::1', 1669553506, '__ci_last_regenerate|i:1669553506;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"52b327b4df47bb4534a2d6c50ac9311ae11d7a095e0d26a7de547fc79540d91aae470dc33567d4a93b45b658a1c78bae0c6a44834315cdfe365bc4e16fcca284ZRYcZdt405GghRyJSNgXDmevpykYo2S4OWOJV243h8k38IQYVgCOh8Jw8uMzhecz\";expires_by|i:1669556490;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('jnomsovbnv8tcpaskgb1vpf1eecsh27k', '::1', 1669478949, '__ci_last_regenerate|i:1669478949;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"224a34047e5d1caf02dd348d5ac32b597f3785da90d0cc3a3015c459d3db715212c514b23d20d050fad42241edfc51380392a4f546e830f870a3adfaba3681d9YMe2rCLwGQw9rsNIaQ/NKfaNIpoeB+OGaBjVC+Ezu/c8s1xqAfApiIDNf8qX2nbL\";expires_by|i:1669481187;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('l035t046g2j6corcpt3lfbkv3ji6ncio', '::1', 1669448432, '__ci_last_regenerate|i:1669448432;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"88081fe2e3ebbe0534b05278c9bc85db4475ddf5e789a6f50b0297f09014b56bc91ebc0dbf062fe789d4347e3b3109bb8dcdd09a6f7d615a32729f5757df7e2bKbw+lxvWC5u3WYz0YcVW1BPHmBxQYVfNGBIIXD6KpV4n2O7og1aZ55Aeua1JVY7P\";expires_by|i:1669442920;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('l1gfpm93281531gcbnos0d7puno877eg', '::1', 1668843237, '__ci_last_regenerate|i:1668843237;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"294c739afb405b11ecb2b6995c3dd9daacb7ad1d6d7ec911d659afc8b384225a8d9d28d36e3719768db5a895d14ca60ca3a401ee919ea141addfc121ee0f1581xaTsCRvarLLTS0UMhl0cne+3ht6rfD565bkR4jYhVDRsA/F/dV3mRPjGS48Cvueh\";expires_by|i:1668844860;fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|s:1:\"0\";unit_id_name|s:0:\"\";'),
('ljfiudli3pbj3kblvmb9j7b4c06uh4sk', '::1', 1669448123, '__ci_last_regenerate|i:1669448123;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"88081fe2e3ebbe0534b05278c9bc85db4475ddf5e789a6f50b0297f09014b56bc91ebc0dbf062fe789d4347e3b3109bb8dcdd09a6f7d615a32729f5757df7e2bKbw+lxvWC5u3WYz0YcVW1BPHmBxQYVfNGBIIXD6KpV4n2O7og1aZ55Aeua1JVY7P\";expires_by|i:1669442920;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('m022sd8hjk9j7poqjeqj9ia0o6ml2o73', '::1', 1669566054, '__ci_last_regenerate|i:1669566037;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"7a257376e1206ae7f69782b637b872eff7ec8bd89d175ed9c6029b26aae25b01c058d705bcbca9a252ebbbe117c9981005daf5bc3f202f1cd75dfd4ad2a15eafPmAvzq71kpKpD6yuhxtb4VcciYiID/ARJasWgSsXugpnUDVq7LdIUu46ztwBDJRA\";expires_by|i:1669569654;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('nvud2rq2ujr0d66gcnslfrsrr19un21p', '::1', 1668872777, '__ci_last_regenerate|i:1668872777;clear3ngine2022|s:192:\"4c042c00e349764b3e6651836b173b425820c8f303fa19d83e634188b2f0221c5cf8dc14fd62656a82808fcd3d53b15a66d49bf53fa5bb7ea3f03b79ae9dae46Sf3GlYTD13Mh4L5HN5sTKEt/CIPmyKM6aHWLaQIGUWbksoAso6N+pzV5NfBqYSGk\";foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";unit_id_name|N;account_name|s:10:\"primaaulia\";expires_by|i:1668868146;group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;'),
('o1hcvqev886r36o2ao0v6ijh96ini2kt', '::1', 1668864407, '__ci_last_regenerate|i:1668864407;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"a4dc056e2e50ad321dbe4cad2ab5e19157250bb9a7a48375035afbff3d8725ae0dd26dba26bbd3f6bd4aabc226ec544755040f44520e947ca9f589549a78250bRvVICHlDpJPEqElIWoSH2pH/+gr9eS8E6qsw8vbRDHOnolDju58Juq5bnVPPXwLZ\";expires_by|i:1668867262;foto|s:21:\"default-user-icon.jpg\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;');
INSERT INTO `xi_sa_ci_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('oapc71qibn052qu7odcm8e63p42nqu94', '::1', 1669448577, '__ci_last_regenerate|i:1669448432;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"88081fe2e3ebbe0534b05278c9bc85db4475ddf5e789a6f50b0297f09014b56bc91ebc0dbf062fe789d4347e3b3109bb8dcdd09a6f7d615a32729f5757df7e2bKbw+lxvWC5u3WYz0YcVW1BPHmBxQYVfNGBIIXD6KpV4n2O7og1aZ55Aeua1JVY7P\";expires_by|i:1669442920;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('olk4i64tm163hrmjqeh8dtd6vpou2j14', '::1', 1669554341, '__ci_last_regenerate|i:1669554341;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"52b327b4df47bb4534a2d6c50ac9311ae11d7a095e0d26a7de547fc79540d91aae470dc33567d4a93b45b658a1c78bae0c6a44834315cdfe365bc4e16fcca284ZRYcZdt405GghRyJSNgXDmevpykYo2S4OWOJV243h8k38IQYVgCOh8Jw8uMzhecz\";expires_by|i:1669556490;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('p0r0rtkdpj4qs30nmm6i62vc73q61pt9', '::1', 1669133631, '__ci_last_regenerate|i:1669133631;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"51b7f792af357930d2720835eb7af91a0566896f8d95ededf772031eab0fd4d604ad65d09480d484298fdba7dfed00f580a7aa3e82637a6666ff4aa24c3e6cccFN7/MiIc9aYZaomuU5aV1wfAKkkkwsRjaDnYdkvmL4oeinaf9Zi/yiSDfpg6UDrE\";expires_by|i:1669130987;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('q77jph47ko377u77kdj0o7cs271ore8o', '::1', 1669468012, '__ci_last_regenerate|i:1669468012;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"302d1fe1317a124406f3a9a95f6a2955c7b13823b579ff7fe3ee9829adbc58bd72bd7102d1778ed114b42ae14c3a8fb7023da8eb8d27074673dd85938552131cuIJkIvDwYUgbIEzTEWGDoViM7KeIP6+O+fiyd6PtXVhsnKycL1egVviLeBYumGz9\";expires_by|i:1669461421;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('qai7nt7shcu1cp61fsc096veg2usj363', '::1', 1668873318, '__ci_last_regenerate|i:1668873318;clear3ngine2022|s:192:\"4c042c00e349764b3e6651836b173b425820c8f303fa19d83e634188b2f0221c5cf8dc14fd62656a82808fcd3d53b15a66d49bf53fa5bb7ea3f03b79ae9dae46Sf3GlYTD13Mh4L5HN5sTKEt/CIPmyKM6aHWLaQIGUWbksoAso6N+pzV5NfBqYSGk\";foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";unit_id_name|N;account_name|s:10:\"primaaulia\";expires_by|i:1668868146;group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;'),
('rjoc0h16a1cu5u2o88o4m434d9ct27lh', '::1', 1669442101, '__ci_last_regenerate|i:1669442101;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"88081fe2e3ebbe0534b05278c9bc85db4475ddf5e789a6f50b0297f09014b56bc91ebc0dbf062fe789d4347e3b3109bb8dcdd09a6f7d615a32729f5757df7e2bKbw+lxvWC5u3WYz0YcVW1BPHmBxQYVfNGBIIXD6KpV4n2O7og1aZ55Aeua1JVY7P\";expires_by|i:1669442920;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('rs1amuid2g1v6jlsiegp7pk0snaimr85', '::1', 1669464736, '__ci_last_regenerate|i:1669464736;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"302d1fe1317a124406f3a9a95f6a2955c7b13823b579ff7fe3ee9829adbc58bd72bd7102d1778ed114b42ae14c3a8fb7023da8eb8d27074673dd85938552131cuIJkIvDwYUgbIEzTEWGDoViM7KeIP6+O+fiyd6PtXVhsnKycL1egVviLeBYumGz9\";expires_by|i:1669461421;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('rujj2fvdtkuvcsf1n0q5risl440smkg2', '::1', 1668848788, '__ci_last_regenerate|i:1668848788;fullname|s:11:\"Prima Aulia\";unit_id_name|s:0:\"\";clear3ngine2022|s:192:\"e99bb09cef31a20d0f6fff6281cdb3307b1a118e0c7b23e327bbb8dff188040ba96393b98cfcacc763f7588ad63c30835592c9007b88a82ae036bb3ada016771UpzFhevZ6qb7cWGcFdfnwYttw2w2juX+F9z237jGQ/4w2eOmFfqgzLb8kLBwG1JK\";error_session|i:1;account_name|s:10:\"primaaulia\";expires_by|i:1668852352;'),
('s94j6o24bqcinrut3c41ojhaulmljjfl', '::1', 1669469007, '__ci_last_regenerate|i:1669469007;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"302d1fe1317a124406f3a9a95f6a2955c7b13823b579ff7fe3ee9829adbc58bd72bd7102d1778ed114b42ae14c3a8fb7023da8eb8d27074673dd85938552131cuIJkIvDwYUgbIEzTEWGDoViM7KeIP6+O+fiyd6PtXVhsnKycL1egVviLeBYumGz9\";expires_by|i:1669461421;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('scueft64p322ckuu6akkg3qpepr07gb8', '::1', 1668875151, '__ci_last_regenerate|i:1668875151;clear3ngine2022|s:192:\"4c042c00e349764b3e6651836b173b425820c8f303fa19d83e634188b2f0221c5cf8dc14fd62656a82808fcd3d53b15a66d49bf53fa5bb7ea3f03b79ae9dae46Sf3GlYTD13Mh4L5HN5sTKEt/CIPmyKM6aHWLaQIGUWbksoAso6N+pzV5NfBqYSGk\";foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";unit_id_name|N;account_name|s:10:\"primaaulia\";expires_by|i:1668868146;group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;'),
('sing1qdb78ebk7eojcs74c7ue75b5j36', '::1', 1668880398, '__ci_last_regenerate|i:1668880398;clear3ngine2022|s:192:\"4c042c00e349764b3e6651836b173b425820c8f303fa19d83e634188b2f0221c5cf8dc14fd62656a82808fcd3d53b15a66d49bf53fa5bb7ea3f03b79ae9dae46Sf3GlYTD13Mh4L5HN5sTKEt/CIPmyKM6aHWLaQIGUWbksoAso6N+pzV5NfBqYSGk\";foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";unit_id_name|N;account_name|s:10:\"primaaulia\";expires_by|i:1668868146;group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;'),
('skv80s4sravp9q5ogfuk6drmr4e3llp1', '::1', 1668870939, '__ci_last_regenerate|i:1668870939;clear3ngine2022|s:192:\"4c042c00e349764b3e6651836b173b425820c8f303fa19d83e634188b2f0221c5cf8dc14fd62656a82808fcd3d53b15a66d49bf53fa5bb7ea3f03b79ae9dae46Sf3GlYTD13Mh4L5HN5sTKEt/CIPmyKM6aHWLaQIGUWbksoAso6N+pzV5NfBqYSGk\";foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";unit_id_name|N;account_name|s:10:\"primaaulia\";expires_by|i:1668868146;group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;'),
('srrkputgr2crrn173tdhqkt1vns6jhu7', '::1', 1668841631, '__ci_last_regenerate|i:1668841631;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"294c739afb405b11ecb2b6995c3dd9daacb7ad1d6d7ec911d659afc8b384225a8d9d28d36e3719768db5a895d14ca60ca3a401ee919ea141addfc121ee0f1581xaTsCRvarLLTS0UMhl0cne+3ht6rfD565bkR4jYhVDRsA/F/dV3mRPjGS48Cvueh\";expires_by|i:1668844860;fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|s:1:\"0\";unit_id_name|s:0:\"\";'),
('u4kinao0urqvqe39v4bv0ed5a30lo289', '::1', 1668867966, '__ci_last_regenerate|i:1668867966;clear3ngine2022|s:192:\"4c042c00e349764b3e6651836b173b425820c8f303fa19d83e634188b2f0221c5cf8dc14fd62656a82808fcd3d53b15a66d49bf53fa5bb7ea3f03b79ae9dae46Sf3GlYTD13Mh4L5HN5sTKEt/CIPmyKM6aHWLaQIGUWbksoAso6N+pzV5NfBqYSGk\";foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";unit_id_name|N;account_name|s:10:\"primaaulia\";expires_by|i:1668868146;group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;'),
('ul5tlj2cqsoqbt32s3gmi9j40c1nosa0', '::1', 1669479711, '__ci_last_regenerate|i:1669479711;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"224a34047e5d1caf02dd348d5ac32b597f3785da90d0cc3a3015c459d3db715212c514b23d20d050fad42241edfc51380392a4f546e830f870a3adfaba3681d9YMe2rCLwGQw9rsNIaQ/NKfaNIpoeB+OGaBjVC+Ezu/c8s1xqAfApiIDNf8qX2nbL\";expires_by|i:1669481187;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}'),
('v2ad7msb5c3v1egr81na5b2lh1a64jj6', '::1', 1668849341, '__ci_last_regenerate|i:1668849213;fullname|s:11:\"Prima Aulia\";unit_id_name|N;clear3ngine2022|s:192:\"ae4f598bfbf6ebf1c97fbf3321c6c231411993a779c749a95db4febccb85695a41933120594fc9c2403c682286f13eb1e995e99c2b17fdf95b2f814f5545906fiDNWdStIZ1cABN3HMnrgUDF5G/O7ZgZiLPB9/auXjcu21uantZ1/rZbUfDMUnvrY\";error_session|i:1;account_name|s:10:\"primaaulia\";expires_by|i:1668852833;foto|s:21:\"default-user-icon.jpg\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;'),
('vhnecei4a3vqr25rb0h9vpv9njcib9d8', '::1', 1668842256, '__ci_last_regenerate|i:1668842188;account_name|s:11:\"rudipurnama\";clear3ngine2022|s:192:\"d36d3eef073c2e7f1619b45c7667b71472d0794d26b1f3e529dea31b01140bbf5328fca1e124235219f08d5fe7aad6a19dd06220a42ca3db46598c978c1acda54fRsFv+GChWMyatXqyyZ8RO4JD6Q0hFXQLHcPYOQ7hP0z4XpG4bqr/Ye30qpUwn7\";expires_by|i:1668845851;fullname|s:12:\"Rudi Purnama\";group_active|s:1:\"2\";group_name|s:5:\"Admin\";level_akses|s:5:\"ADMIN\";nick_level|s:3:\"ADM\";user_id|s:32:\"FC9AE20744B4485428B7EE11E4B5D6DF\";unit_id|s:1:\"0\";unit_id_name|N;'),
('volopk3gce44ubh8tui92ro66ca7m43o', '::1', 1669215830, '__ci_last_regenerate|i:1669215830;account_name|s:10:\"primaaulia\";clear3ngine2022|s:192:\"3d5208549f49c31c23241018c7c65778909e603f0531b0153f30faa0f0ffd72927899b03bb74b61d5440b60a15c1a46d09b01154036c1f24b0482ce5fa8db2f930QGWYtGZYe518xbOdRfwwYKsroaYQ7i/s24ZL6l3DwKH5kfhP5J8KXQENV0kCKF\";expires_by|i:1669214933;foto|s:21:\"default-user-icon.png\";fullname|s:11:\"Prima Aulia\";group_active|s:1:\"1\";group_name|s:11:\"Super Admin\";level_akses|s:11:\"SUPER ADMIN\";nick_level|s:3:\"SAD\";user_id|s:32:\"4A3729CA5A1593D72E67FF0FE31185D1\";unit_id|N;unit_id_name|N;group_switch|a:3:{i:0;a:2:{s:8:\"id_group\";s:1:\"1\";s:10:\"nama_group\";s:11:\"Super Admin\";}i:1;a:2:{s:8:\"id_group\";s:1:\"2\";s:10:\"nama_group\";s:5:\"Admin\";}i:2;a:2:{s:8:\"id_group\";s:1:\"6\";s:10:\"nama_group\";s:8:\"Operator\";}}');

-- --------------------------------------------------------

--
-- Table structure for table `xi_sa_fungsi`
--

CREATE TABLE `xi_sa_fungsi` (
  `id_fungsi` smallint(6) NOT NULL,
  `nama_fungsi` varchar(65) NOT NULL,
  `label_fungsi` varchar(65) NOT NULL,
  `url_fungsi` varchar(65) NOT NULL,
  `deskripsi_fungsi` varchar(155) NOT NULL,
  `id_jenis_fungsi` tinyint(4) NOT NULL,
  `create_by` varchar(155) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_ip` varchar(20) NOT NULL,
  `mod_by` varchar(155) NOT NULL,
  `mod_date` datetime NOT NULL,
  `mod_ip` varchar(20) NOT NULL,
  `id_status` tinyint(4) NOT NULL,
  `id_level_akses` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xi_sa_fungsi`
--

INSERT INTO `xi_sa_fungsi` (`id_fungsi`, `nama_fungsi`, `label_fungsi`, `url_fungsi`, `deskripsi_fungsi`, `id_jenis_fungsi`, `create_by`, `create_date`, `create_ip`, `mod_by`, `mod_date`, `mod_ip`, `id_status`, `id_level_akses`) VALUES
(1, 'index', 'Index', 'index', 'Fungsi untuk menampilkan data', 1, 'primaaulia', '2017-06-04 19:30:40', '::1', 'primaaulia', '2020-08-28 11:45:59', '::1', 1, NULL),
(2, 'create', 'Create Data', 'create', 'Fungsi untuk menambahkan data', 2, 'primaaulia', '2017-06-04 19:32:33', '::1', 'primaaulia', '2017-09-05 17:52:35', '::1', 1, NULL),
(3, 'update', 'Update Data', 'update', 'Fungsi untuk merubah data', 2, 'primaaulia', '2017-06-04 19:33:01', '::1', 'primaaulia', '2017-09-05 17:52:44', '::1', 1, NULL),
(4, 'delete', 'Delete Data', 'delete', 'Fungsi untuk menghapus data', 2, 'primaaulia', '2017-06-04 19:33:33', '::1', 'primaaulia', '2017-09-05 17:52:52', '::1', 1, NULL),
(5, 'listview', 'List View Data', 'listview', 'Fungsi untuk menampilkan list data', 2, 'primaaulia', '2017-11-06 13:59:43', '::1', 'primaaulia', '2017-11-06 13:59:43', '::1', 1, NULL),
(6, 'review', 'Review Data', 'review', 'Fungsi untuk mereview data kembali', 2, 'primaaulia', '2017-12-17 23:45:14', '::1', 'primaaulia', '2017-12-17 23:45:29', '::1', 1, NULL),
(7, 'details', 'Data Details', 'details', 'Fungsi untuk melihat rincian data', 2, 'primaaulia', '2017-12-27 08:28:13', '::1', 'primaaulia', '2017-12-27 08:28:13', '::1', 1, NULL),
(8, 'searching', 'Searching', 'searching', 'Fungsi untuk mencari data', 2, 'primaaulia', '2017-11-07 13:21:59', '::1', 'primaaulia', '2017-11-07 13:21:59', '::1', 1, NULL),
(9, 'rules', 'Rules Module', 'rules', 'Fungsi untuk setting rules module', 2, 'primaaulia', '2017-06-05 10:51:09', '::1', 'primaaulia', '2020-04-07 22:38:12', '::1', 1, NULL),
(10, 'privileges', 'Group Privilege', 'privileges', 'Fungsi untuk setting group privilege', 2, 'primaaulia', '2017-06-10 22:23:24', '::1', 'primaaulia', '2017-08-03 12:20:22', '::1', 1, NULL),
(11, 'regency', 'Data Regency', 'regency', 'Fungsi untuk mengambil data regency', 2, 'primaaulia', '2020-04-11 22:38:38', '::1', 'primaaulia', '2020-04-11 22:38:38', '::1', 1, NULL),
(12, 'district', 'Data District', 'district', 'Fungsi untuk mengambil data district', 2, 'primaaulia', '2020-04-11 22:39:48', '::1', 'primaaulia', '2020-04-11 22:39:48', '::1', 1, NULL),
(13, 'village', 'Data Village', 'village', 'Fungsi untuk mengambil data village', 2, 'primaaulia', '2020-04-11 22:40:11', '::1', 'primaaulia', '2020-04-11 22:40:11', '::1', 1, NULL),
(14, 'approve', 'Data Approve', 'approve', 'Fungsi untuk menyetujui data', 2, 'primaaulia', '2018-04-03 09:22:12', '36.67.167.61', 'primaaulia', '2018-04-03 09:22:12', '36.67.167.61', 1, NULL),
(15, 'reject', 'Data Reject', 'reject', 'Fungsi untuk menolak data', 2, 'primaaulia', '2018-04-03 09:22:12', '36.67.167.61', 'primaaulia', '2018-04-03 09:22:12', '36.67.167.61', 1, NULL),
(16, 'upload', 'Upload Data', 'upload', 'Fungsi untuk mengupload file', 2, 'primaaulia', '2018-07-24 22:20:18', '::1', 'primaaulia', '2018-08-03 15:09:33', '::1', 1, NULL),
(17, 'download', 'Download Data', 'download', 'Fungsi untuk mendownload file', 2, 'primaaulia', '2018-07-24 22:21:04', '::1', 'primaaulia', '2018-08-03 15:09:42', '::1', 1, NULL),
(18, 'export_to_word', 'Download Word', 'export-to-word', 'Fungsi download laporan format word', 2, 'primaaulia', '2020-05-02 07:16:39', '::1', 'primaaulia', '2020-05-22 08:03:33', '::1', 1, NULL),
(19, 'export_to_excel', 'Download Excel', 'export-to-excel', 'Fungsi download laporan format excel', 2, 'primaaulia', '2020-05-11 08:27:30', '::1', 'primaaulia', '2020-05-11 08:27:30', '::1', 1, NULL),
(20, 'export_to_pdf', 'Download PDF', 'export-to-pdf', 'Fungsi download laporan format pdf', 2, 'primaaulia', '2020-05-11 08:30:42', '::1', 'primaaulia', '2020-05-11 08:30:42', '::1', 1, NULL),
(25, 'getOptionOpd', 'Get Option OPD', 'getOptionOpd', 'untuk memanggil option data opd dari API Simpeg', 2, 'primaaulia', '2021-03-25 09:22:37', '127.0.0.1', 'primaaulia', '2021-03-25 09:22:37', '127.0.0.1', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `xi_sa_group`
--

CREATE TABLE `xi_sa_group` (
  `id_group` smallint(6) NOT NULL,
  `nama_group` varchar(65) NOT NULL,
  `id_level_akses` tinyint(4) NOT NULL,
  `create_by` varchar(155) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_ip` varchar(20) NOT NULL,
  `mod_by` varchar(155) NOT NULL,
  `mod_date` datetime NOT NULL,
  `mod_ip` varchar(20) NOT NULL,
  `id_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xi_sa_group`
--

INSERT INTO `xi_sa_group` (`id_group`, `nama_group`, `id_level_akses`, `create_by`, `create_date`, `create_ip`, `mod_by`, `mod_date`, `mod_ip`, `id_status`) VALUES
(1, 'Super Admin', 1, 'primaaulia', '2020-04-07 00:00:00', '::1', 'primaaulia', '2020-04-07 00:00:00', '::1', 1),
(2, 'Admin', 2, 'primaaulia', '2022-11-19 13:57:52', '::1', 'primaaulia', '2022-11-19 13:57:52', '::1', 1),
(6, 'Operator', 3, 'primaaulia', '2022-11-19 13:58:44', '::1', 'primaaulia', '2022-11-19 13:58:44', '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `xi_sa_group_privileges`
--

CREATE TABLE `xi_sa_group_privileges` (
  `id_group_privileges` smallint(6) NOT NULL,
  `id_group` smallint(6) NOT NULL,
  `id_rules` smallint(6) NOT NULL,
  `id_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xi_sa_group_privileges`
--

INSERT INTO `xi_sa_group_privileges` (`id_group_privileges`, `id_group`, `id_rules`, `id_status`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 1, 3, 1),
(4, 1, 4, 1),
(5, 1, 5, 1),
(6, 1, 6, 1),
(7, 1, 7, 1),
(8, 1, 8, 1),
(9, 1, 9, 1),
(10, 1, 10, 1),
(11, 1, 11, 1),
(12, 1, 12, 1),
(13, 1, 13, 1),
(14, 1, 14, 1),
(15, 1, 15, 1),
(16, 1, 16, 1),
(17, 1, 17, 1),
(18, 1, 18, 1),
(19, 1, 19, 1),
(20, 1, 20, 1),
(21, 1, 21, 1),
(22, 1, 22, 1),
(23, 1, 23, 1),
(24, 1, 24, 1),
(25, 1, 25, 1),
(26, 1, 26, 1),
(27, 1, 27, 1),
(28, 1, 28, 1),
(29, 1, 29, 1),
(30, 1, 30, 1),
(31, 1, 31, 1),
(32, 1, 32, 1),
(33, 1, 33, 1),
(34, 1, 34, 1),
(35, 1, 35, 1),
(36, 1, 36, 1),
(37, 1, 37, 1),
(38, 1, 38, 1),
(39, 1, 39, 1),
(40, 1, 40, 1),
(294, 2, 1, 1),
(295, 2, 34, 1),
(296, 2, 35, 1),
(297, 2, 36, 1),
(298, 2, 37, 1),
(299, 2, 38, 1),
(300, 2, 39, 1),
(301, 2, 40, 1),
(302, 1, 1003, 1),
(303, 1, 1004, 1),
(304, 1, 1005, 1),
(305, 1, 1006, 1),
(306, 1, 1007, 1),
(307, 1, 1008, 1);

-- --------------------------------------------------------

--
-- Table structure for table `xi_sa_jenis_fungsi`
--

CREATE TABLE `xi_sa_jenis_fungsi` (
  `id_jenis_fungsi` tinyint(4) NOT NULL,
  `jenis_fungsi` varchar(65) NOT NULL,
  `id_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xi_sa_jenis_fungsi`
--

INSERT INTO `xi_sa_jenis_fungsi` (`id_jenis_fungsi`, `jenis_fungsi`, `id_status`) VALUES
(1, 'Fungsi Public', 1),
(2, 'Fungsi Pendukung', 1),
(3, 'Fungsi Private', 1),
(4, 'Fungsi Belum Ada', 1);

-- --------------------------------------------------------

--
-- Table structure for table `xi_sa_kontrol`
--

CREATE TABLE `xi_sa_kontrol` (
  `id_kontrol` smallint(6) NOT NULL,
  `nama_kontrol` varchar(65) NOT NULL,
  `label_kontrol` varchar(65) NOT NULL,
  `url_kontrol` varchar(65) NOT NULL,
  `deskripsi_kontrol` varchar(155) NOT NULL,
  `create_by` varchar(155) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_ip` varchar(20) NOT NULL,
  `mod_by` varchar(155) NOT NULL,
  `mod_date` datetime NOT NULL,
  `mod_ip` varchar(20) NOT NULL,
  `id_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xi_sa_kontrol`
--

INSERT INTO `xi_sa_kontrol` (`id_kontrol`, `nama_kontrol`, `label_kontrol`, `url_kontrol`, `deskripsi_kontrol`, `create_by`, `create_date`, `create_ip`, `mod_by`, `mod_date`, `mod_ip`, `id_status`) VALUES
(1, 'home', 'Home', 'home', 'Halaman dashboard', 'primaaulia', '2017-06-04 19:36:44', '::1', 'primaaulia', '2020-05-19 11:01:39', '::1', 1),
(2, 'fungsi', 'Fungsi', 'fungsi', 'Halaman manajamen fungsi', 'primaaulia', '2017-06-04 19:37:18', '::1', 'primaaulia', '2017-06-07 11:42:03', '::1', 1),
(3, 'kontrol', 'Kontrol', 'kontrol', 'Halaman manajemen kontrol', 'primaaulia', '2017-06-04 19:37:38', '::1', 'primaaulia', '2017-06-07 11:41:55', '::1', 1),
(4, 'module', 'Module', 'module', 'Halaman manajemen module', 'primaaulia', '2017-06-04 19:37:58', '::1', 'primaaulia', '2017-06-07 11:41:47', '::1', 1),
(5, 'menu', 'Menu', 'menu', 'Halaman majamen menu', 'primaaulia', '2017-06-07 11:41:18', '::1', 'primaaulia', '2017-06-07 11:41:18', '::1', 1),
(6, 'group', 'Group', 'group', 'Halaman manajemen group', 'primaaulia', '2017-06-10 22:23:53', '::1', 'primaaulia', '2017-06-10 22:24:15', '::1', 1),
(7, 'users', 'Users', 'users', 'Halaman manajemen users', 'primaaulia', '2017-06-14 19:18:54', '::1', 'primaaulia', '2017-06-14 19:19:06', '::1', 1),
(8, 'Whitelist', 'White List', 'whitelist', 'Halaman Manajemen White List', 'primaaulia', '2022-11-19 20:18:44', '::1', 'primaaulia', '2022-11-19 20:18:44', '::1', 1),
(9, 'index', 'index', 'index', 'Halaman Awal', 'primaaulia', '2022-11-26 22:48:52', '::1', 'primaaulia', '2022-11-26 22:49:29', '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `xi_sa_level_akses`
--

CREATE TABLE `xi_sa_level_akses` (
  `id_level_akses` tinyint(4) NOT NULL,
  `level_akses` varchar(55) NOT NULL,
  `nick_level` char(3) NOT NULL,
  `id_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xi_sa_level_akses`
--

INSERT INTO `xi_sa_level_akses` (`id_level_akses`, `level_akses`, `nick_level`, `id_status`) VALUES
(1, 'SUPER ADMIN', 'SAD', 1),
(2, 'ADMIN', 'ADM', 1),
(3, 'OPERATOR', 'OPR', 1);

-- --------------------------------------------------------

--
-- Table structure for table `xi_sa_log_login`
--

CREATE TABLE `xi_sa_log_login` (
  `id_log` smallint(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `login_time` int(11) NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `user_agent` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `xi_sa_log_session`
--

CREATE TABLE `xi_sa_log_session` (
  `id_log_session` smallint(6) NOT NULL,
  `id_users` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `login_time` int(11) NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `id_status` smallint(6) NOT NULL,
  `session_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xi_sa_log_session`
--

INSERT INTO `xi_sa_log_session` (`id_log_session`, `id_users`, `username`, `login_time`, `ip_address`, `user_agent`, `id_status`, `session_id`) VALUES
(88, 1, 'primaaulia', 1668844440, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 0, '81ebc6961266009c1e2f8c2e486adb435e7cf49dc9e15e2f5a5d3624aa413fd0c6d364bb506daf1f2d6d2de6ec843bf7811eb44520160fa5b9c6993a86a326f1T8xzd9GldpZCrkeK2RKunxUQKiXD1SLkP0xOmDofuDdkU5OqS7Dgl3ZXwIdRKo+S'),
(89, 1, 'primaaulia', 1668847671, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 1, 'b3c57ec106ecbd7498a1a6e1f285314f8a837cfa72f17b8ed04d1142d29c00b1e26213e52873d3929d5bea27726eaddaa0423f190c54bac1736ebf10bc55605c4O44CNem1dxkQdo2XVGYpl+68x5IKz2fKg+VIa47Z2ZpW2UAAFlsvY28ZgYeVQbO'),
(90, 1, 'primaaulia', 1668848684, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 1, 'ed248112d6a93cd4db14093919e9c7150453f35b1eb5dc46029981b83bd23b26f569e69ad82cf96931cfca96631914f75820809db88df784b6d19b9cc1caf2a6vTEpOIKHQZOROKEWiCtD/XY13ix777elMYkdiSKGsFAg2l7H9AeZbhLOEi4BylBr'),
(91, 1, 'primaaulia', 1668848752, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 1, 'e99bb09cef31a20d0f6fff6281cdb3307b1a118e0c7b23e327bbb8dff188040ba96393b98cfcacc763f7588ad63c30835592c9007b88a82ae036bb3ada016771UpzFhevZ6qb7cWGcFdfnwYttw2w2juX+F9z237jGQ/4w2eOmFfqgzLb8kLBwG1JK'),
(92, 1, 'primaaulia', 1668848796, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 1, '46860fd6c719f1469f8e89c73ac048b764f9ab7cb977dc9eda0f669ff3a0b44924cc85991095fbfa463de7a61969bf8e4f4c480659a86a0542d9b09837d7fbdfw+je6B1LkmvrJh+rOrXtRrNvwXqToin11TdP2bfJJESeyYlQkyEnvTFLElvL+oxT'),
(93, 1, 'primaaulia', 1668849089, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 1, '00cdb97d5bdab8542fb6f06f95b467db1025458f1e2eb95a66bd36a7b02d0a541e7ffcd4c0b4f256816dae367e843c0539e7f35f91442e2f733b9b3dd1f27949dt9qu8FZkprVVtXFJo59nRY5q+J+SbHVFv/rODs8TkcNSDDPuyCQTjNXVJn6gH3J'),
(94, 1, 'primaaulia', 1668849233, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 1, 'ae4f598bfbf6ebf1c97fbf3321c6c231411993a779c749a95db4febccb85695a41933120594fc9c2403c682286f13eb1e995e99c2b17fdf95b2f814f5545906fiDNWdStIZ1cABN3HMnrgUDF5G/O7ZgZiLPB9/auXjcu21uantZ1/rZbUfDMUnvrY'),
(95, 1, 'primaaulia', 1668863662, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 1, 'a4dc056e2e50ad321dbe4cad2ab5e19157250bb9a7a48375035afbff3d8725ae0dd26dba26bbd3f6bd4aabc226ec544755040f44520e947ca9f589549a78250bRvVICHlDpJPEqElIWoSH2pH/+gr9eS8E6qsw8vbRDHOnolDju58Juq5bnVPPXwLZ'),
(96, 1, 'primaaulia', 1668864546, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 1, '4c042c00e349764b3e6651836b173b425820c8f303fa19d83e634188b2f0221c5cf8dc14fd62656a82808fcd3d53b15a66d49bf53fa5bb7ea3f03b79ae9dae46Sf3GlYTD13Mh4L5HN5sTKEt/CIPmyKM6aHWLaQIGUWbksoAso6N+pzV5NfBqYSGk'),
(97, 1, 'primaaulia', 1669127387, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 1, '51b7f792af357930d2720835eb7af91a0566896f8d95ededf772031eab0fd4d604ad65d09480d484298fdba7dfed00f580a7aa3e82637a6666ff4aa24c3e6cccFN7/MiIc9aYZaomuU5aV1wfAKkkkwsRjaDnYdkvmL4oeinaf9Zi/yiSDfpg6UDrE'),
(98, 1, 'primaaulia', 1669211333, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 1, '3d5208549f49c31c23241018c7c65778909e603f0531b0153f30faa0f0ffd72927899b03bb74b61d5440b60a15c1a46d09b01154036c1f24b0482ce5fa8db2f930QGWYtGZYe518xbOdRfwwYKsroaYQ7i/s24ZL6l3DwKH5kfhP5J8KXQENV0kCKF'),
(99, 1, 'primaaulia', 1669216434, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36 Edg/106.0.1370.47', 1, '1db1062ec8d37715cd358b4f030c91c6f6098fed52dd687570ce219f95e9135edbe0e9afc78f18164122c67e48dcea9b57afe7e4b4e76fc3dec8fa1dcc01c50duHXQ/hSBi5WpYpmRnjApNKjHg6yEvpKsdi7LAT/xJnFVUx5gZzTKUv7cdz3Uaq2U'),
(100, 1, 'primaaulia', 1669217374, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36 OPR/92.0.0.0', 1, 'ab8a02490fc9081d5d4fe924130c2898737c3b7fc2329e2a9baada6226c6d2fad4b22951b5e96a99e0f7b90116c59f3b00149781b633a2a4931d7f74c8a1d9a0RMJdifxpB1tqJCCbzYk/c8qOKMx9y8C0zCzNrQGCKro4fA4v6aWO6axg/lrtOkUU'),
(101, 1, 'primaaulia', 1669292431, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 1, 'f72fcc458668b77c6be56db581107724826e35e7c02ae4d442d996cc586a4baa2d5b14bdd353e4ea2bec6bf0c00f5bcfc29ae02a49f8965276097c5cda97288bIm3BIbFnp+2zKOm3CNtS0WK7yU3k1m0pQO0NOEFp2Z1E086HmUAWa1i1yGHiQPy5'),
(102, 1, 'primaaulia', 1669439320, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 1, '88081fe2e3ebbe0534b05278c9bc85db4475ddf5e789a6f50b0297f09014b56bc91ebc0dbf062fe789d4347e3b3109bb8dcdd09a6f7d615a32729f5757df7e2bKbw+lxvWC5u3WYz0YcVW1BPHmBxQYVfNGBIIXD6KpV4n2O7og1aZ55Aeua1JVY7P'),
(103, 1, 'primaaulia', 1669457821, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 1, '302d1fe1317a124406f3a9a95f6a2955c7b13823b579ff7fe3ee9829adbc58bd72bd7102d1778ed114b42ae14c3a8fb7023da8eb8d27074673dd85938552131cuIJkIvDwYUgbIEzTEWGDoViM7KeIP6+O+fiyd6PtXVhsnKycL1egVviLeBYumGz9'),
(104, 1, 'primaaulia', 1669469238, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 1, '98fb63bb83d21e7029f61ce31406320380168717464bb3799494167663aa00de8293d00b879113c8a753ac5395789571707db9bb8c26d57a7881972857091539BfqHJGk4MlQOZX7zea4kSqh74R1OkA+309T8AMXrZ8SpDNCJbhC/a2MRHk5YiqJU'),
(105, 1, 'primaaulia', 1669477587, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 1, '224a34047e5d1caf02dd348d5ac32b597f3785da90d0cc3a3015c459d3db715212c514b23d20d050fad42241edfc51380392a4f546e830f870a3adfaba3681d9YMe2rCLwGQw9rsNIaQ/NKfaNIpoeB+OGaBjVC+Ezu/c8s1xqAfApiIDNf8qX2nbL'),
(106, 1, 'primaaulia', 1669552890, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 1, '52b327b4df47bb4534a2d6c50ac9311ae11d7a095e0d26a7de547fc79540d91aae470dc33567d4a93b45b658a1c78bae0c6a44834315cdfe365bc4e16fcca284ZRYcZdt405GghRyJSNgXDmevpykYo2S4OWOJV243h8k38IQYVgCOh8Jw8uMzhecz'),
(107, 1, 'primaaulia', 1669554539, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 1, 'f9a7d16061484871f286e83f33ed0a41e3fe6695b2f9bd9a97cdff35c3577f16aa9578d101db8fd0701e3735bb677ecc1c7038c2e41c3c8e1277f2ade3cb4502VonUzujxevnuR5aL5e2QWWMskQgnKKayOIQkYNP0m9L28pEffzKs+BwqE1QmIru/'),
(108, 1, 'primaaulia', 1669566054, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 1, '7a257376e1206ae7f69782b637b872eff7ec8bd89d175ed9c6029b26aae25b01c058d705bcbca9a252ebbbe117c9981005daf5bc3f202f1cd75dfd4ad2a15eafPmAvzq71kpKpD6yuhxtb4VcciYiID/ARJasWgSsXugpnUDVq7LdIUu46ztwBDJRA');

-- --------------------------------------------------------

--
-- Table structure for table `xi_sa_menu`
--

CREATE TABLE `xi_sa_menu` (
  `id_menu` smallint(6) NOT NULL,
  `title_menu` varchar(55) NOT NULL,
  `url_menu` varchar(55) NOT NULL,
  `icon_menu` varchar(55) NOT NULL,
  `order_menu` smallint(6) NOT NULL,
  `id_rules` smallint(6) NOT NULL,
  `parent_id` smallint(6) NOT NULL,
  `is_parent` char(1) NOT NULL,
  `create_by` varchar(55) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_ip` varchar(20) NOT NULL,
  `mod_by` varchar(55) NOT NULL,
  `mod_date` datetime NOT NULL,
  `mod_ip` varchar(20) NOT NULL,
  `id_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xi_sa_menu`
--

INSERT INTO `xi_sa_menu` (`id_menu`, `title_menu`, `url_menu`, `icon_menu`, `order_menu`, `id_rules`, `parent_id`, `is_parent`, `create_by`, `create_date`, `create_ip`, `mod_by`, `mod_date`, `mod_ip`, `id_status`) VALUES
(1, 'Home', '', 'home', 1, 1, 0, 'N', 'primaaulia', '2017-06-07 12:09:31', '::1', 'primaaulia', '2020-09-17 20:00:32', '::1', 1),
(2, 'Manajemen', '#', 'settings', 2, 0, 0, 'Y', 'primaaulia', '2017-06-07 12:09:47', '::1', 'primaaulia', '2019-04-23 14:32:10', '36.67.76.99', 1),
(3, 'Fungsi', '', '', 1, 2, 2, 'N', 'primaaulia', '2017-06-07 12:10:03', '::1', 'primaaulia', '2019-04-23 14:32:04', '36.67.76.99', 1),
(4, 'Kontrol', '', '', 2, 8, 2, 'N', 'primaaulia', '2017-06-07 12:10:26', '::1', 'primaaulia', '2019-04-23 14:32:20', '36.67.76.99', 1),
(5, 'Module', '', '', 3, 14, 2, 'N', 'primaaulia', '2017-06-07 12:10:48', '::1', 'primaaulia', '2019-04-23 14:32:26', '36.67.76.99', 1),
(6, 'Menu', '', '', 5, 21, 2, 'N', 'primaaulia', '2017-06-07 12:11:06', '::1', 'primaaulia', '2020-09-24 08:52:06', '::1', 1),
(7, 'Group', '', '', 4, 27, 2, 'N', 'primaaulia', '2017-06-10 22:25:19', '::1', 'primaaulia', '2020-09-24 08:52:14', '::1', 1),
(8, 'Users', '', '', 6, 34, 2, 'N', 'primaaulia', '2017-06-14 19:20:01', '::1', 'primaaulia', '2019-04-23 14:32:44', '36.67.76.99', 1),
(10, 'White List', '', 'home', 7, 1003, 2, 'N', 'primaaulia', '2022-11-19 21:06:12', '::1', 'primaaulia', '2022-11-19 21:06:12', '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `xi_sa_module`
--

CREATE TABLE `xi_sa_module` (
  `id_module` smallint(6) NOT NULL,
  `nama_module` varchar(65) NOT NULL,
  `label_module` varchar(65) NOT NULL,
  `url_module` varchar(65) NOT NULL,
  `deskripsi_module` varchar(155) NOT NULL,
  `create_by` varchar(155) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_ip` varchar(20) NOT NULL,
  `mod_by` varchar(155) NOT NULL,
  `mod_date` datetime NOT NULL,
  `mod_ip` varchar(20) NOT NULL,
  `id_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xi_sa_module`
--

INSERT INTO `xi_sa_module` (`id_module`, `nama_module`, `label_module`, `url_module`, `deskripsi_module`, `create_by`, `create_date`, `create_ip`, `mod_by`, `mod_date`, `mod_ip`, `id_status`) VALUES
(1, 'home', 'Home', 'home', 'Module home', 'primaaulia', '2017-06-04 19:39:22', '::1', 'primaaulia', '2020-05-19 11:06:41', '::1', 1),
(2, 'manajemen', 'Manajemen', 'manajemen', 'Module konfigurasi system khusus untuk superadmin', 'primaaulia', '2017-06-04 19:40:50', '::1', 'primaaulia', '2017-08-03 16:00:08', '::1', 1),
(6, 'index', 'Index', 'index', 'Halaman Awal', 'primaaulia', '2022-11-26 22:47:42', '::1', 'primaaulia', '2022-11-26 22:47:42', '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `xi_sa_rules`
--

CREATE TABLE `xi_sa_rules` (
  `id_rules` smallint(6) NOT NULL,
  `id_module` smallint(6) NOT NULL,
  `id_kontrol` smallint(6) NOT NULL,
  `id_fungsi` smallint(6) NOT NULL,
  `id_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xi_sa_rules`
--

INSERT INTO `xi_sa_rules` (`id_rules`, `id_module`, `id_kontrol`, `id_fungsi`, `id_status`) VALUES
(1, 1, 1, 1, 1),
(2, 2, 2, 1, 1),
(3, 2, 2, 2, 1),
(4, 2, 2, 3, 1),
(5, 2, 2, 4, 1),
(6, 2, 2, 5, 1),
(7, 2, 2, 7, 1),
(8, 2, 3, 1, 1),
(9, 2, 3, 2, 1),
(10, 2, 3, 3, 1),
(11, 2, 3, 4, 1),
(12, 2, 3, 5, 1),
(13, 2, 3, 7, 1),
(14, 2, 4, 1, 1),
(15, 2, 4, 2, 1),
(16, 2, 4, 3, 1),
(17, 2, 4, 4, 1),
(18, 2, 4, 5, 1),
(19, 2, 4, 7, 1),
(20, 2, 4, 9, 1),
(21, 2, 5, 1, 1),
(22, 2, 5, 2, 1),
(23, 2, 5, 3, 1),
(24, 2, 5, 4, 1),
(25, 2, 5, 5, 1),
(26, 2, 5, 7, 1),
(27, 2, 6, 1, 1),
(28, 2, 6, 2, 1),
(29, 2, 6, 3, 1),
(30, 2, 6, 4, 1),
(31, 2, 6, 5, 1),
(32, 2, 6, 7, 1),
(33, 2, 6, 10, 1),
(34, 2, 7, 1, 1),
(35, 2, 7, 2, 1),
(36, 2, 7, 3, 1),
(37, 2, 7, 4, 1),
(38, 2, 7, 5, 1),
(39, 2, 7, 7, 1),
(40, 2, 7, 8, 1),
(1003, 2, 8, 1, 1),
(1004, 2, 8, 2, 1),
(1005, 2, 8, 3, 1),
(1006, 2, 8, 4, 1),
(1007, 2, 8, 5, 1),
(1008, 2, 8, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `xi_sa_setting`
--

CREATE TABLE `xi_sa_setting` (
  `id` tinyint(4) NOT NULL,
  `app_name` varchar(155) NOT NULL,
  `app_author` varchar(155) NOT NULL,
  `app_description` longtext NOT NULL,
  `app_year` char(4) NOT NULL,
  `app_icon` varchar(200) NOT NULL,
  `app_favicon` varchar(200) NOT NULL,
  `app_keywords` longtext NOT NULL,
  `app_versi` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xi_sa_setting`
--

INSERT INTO `xi_sa_setting` (`id`, `app_name`, `app_author`, `app_description`, `app_year`, `app_icon`, `app_favicon`, `app_keywords`, `app_versi`) VALUES
(1, 'Pemuda Pasar Baru', 'Pemuda Pasar Baru', 'Website Pemuda Pasar Baru', '2022', 'logo.png', 'favicon.ico', 'Pemuda Pasar Baru', '1.0.0');

-- --------------------------------------------------------

--
-- Table structure for table `xi_sa_status`
--

CREATE TABLE `xi_sa_status` (
  `id_status` tinyint(4) NOT NULL,
  `nm_status` varchar(100) NOT NULL,
  `group` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xi_sa_status`
--

INSERT INTO `xi_sa_status` (`id_status`, `nm_status`, `group`) VALUES
(0, 'Tidak Aktif', '1'),
(1, 'Aktif', '1'),
(2, 'test', '1');

-- --------------------------------------------------------

--
-- Table structure for table `xi_sa_users`
--

CREATE TABLE `xi_sa_users` (
  `id_users` int(11) NOT NULL,
  `token` varchar(32) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fullname` varchar(65) NOT NULL,
  `foto_profile` varchar(155) NOT NULL COMMENT 'Foto Profile',
  `blokir` char(1) NOT NULL COMMENT '0=diblokir, 1=tidak diblokir',
  `id_status` tinyint(4) NOT NULL COMMENT '0=Tidak Aktif, 1=Aktif',
  `validate_email_code` varchar(100) NOT NULL,
  `validate_email_status` char(1) NOT NULL,
  `reset_password_code` varchar(100) NOT NULL,
  `reset_password_status` char(1) NOT NULL,
  `reset_password_expired` smallint(6) NOT NULL,
  `create_by` varchar(155) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_ip` varchar(20) NOT NULL,
  `mod_by` varchar(155) NOT NULL,
  `mod_date` datetime NOT NULL,
  `mod_ip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xi_sa_users`
--

INSERT INTO `xi_sa_users` (`id_users`, `token`, `username`, `password`, `email`, `fullname`, `foto_profile`, `blokir`, `id_status`, `validate_email_code`, `validate_email_status`, `reset_password_code`, `reset_password_status`, `reset_password_expired`, `create_by`, `create_date`, `create_ip`, `mod_by`, `mod_date`, `mod_ip`) VALUES
(1, '4A3729CA5A1593D72E67FF0FE31185D1', 'primaaulia', '$2a$12$fexNr6W.H7RPvO9rOTjojuHzoWwK1JO7N2nyuFiD/ufsrlO6tU4ju', '', 'Prima Aulia', 'default-user-icon.png', '0', 1, '', '0', '', '0', 0, 'primaaulia', '2020-12-23 09:18:01', '::1', 'primaaulia', '2022-11-19 22:30:15', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `xi_sa_users_default_pass`
--

CREATE TABLE `xi_sa_users_default_pass` (
  `id_default_pass` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `pass_plain` char(100) NOT NULL,
  `updated` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `xi_sa_users_privileges`
--

CREATE TABLE `xi_sa_users_privileges` (
  `id_users_privileges` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_group` smallint(6) NOT NULL,
  `id_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xi_sa_users_privileges`
--

INSERT INTO `xi_sa_users_privileges` (`id_users_privileges`, `id_users`, `id_group`, `id_status`) VALUES
(2, 1, 1, 1),
(5, 1, 2, 1),
(6, 1, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `xi_sa_white_list`
--

CREATE TABLE `xi_sa_white_list` (
  `id_white_list` int(11) NOT NULL,
  `keterangan` varchar(55) DEFAULT NULL,
  `module_name` varchar(100) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  `method_name` varchar(100) NOT NULL,
  `id_status` tinyint(4) NOT NULL,
  `id_module` smallint(6) NOT NULL,
  `id_kontrol` smallint(6) NOT NULL,
  `id_fungsi` smallint(6) NOT NULL,
  `create_by` varchar(155) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `create_ip` varchar(20) DEFAULT NULL,
  `mod_by` varchar(155) DEFAULT NULL,
  `mod_date` datetime DEFAULT NULL,
  `mod_ip` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xi_sa_white_list`
--

INSERT INTO `xi_sa_white_list` (`id_white_list`, `keterangan`, `module_name`, `class_name`, `method_name`, `id_status`, `id_module`, `id_kontrol`, `id_fungsi`, `create_by`, `create_date`, `create_ip`, `mod_by`, `mod_date`, `mod_ip`) VALUES
(1, 'Proses Login', 'auth', 'signin', 'login', 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Proses Logout', 'auth', 'signin', 'logout', 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Mengganti Group', 'auth', 'signin', 'switch_group', 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Session Berakhir', 'auth', 'signin', 'timeout', 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Melihat Akun', 'auth', 'signin', 'account', 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Halaman Awal', 'index', 'index', 'index', 1, 6, 9, 1, 'primaaulia', '2022-11-27 19:53:31', '::1', 'primaaulia', '2022-11-27 19:53:31', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `xi_sa_ci_session`
--
ALTER TABLE `xi_sa_ci_session`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `xi_sa_fungsi`
--
ALTER TABLE `xi_sa_fungsi`
  ADD PRIMARY KEY (`id_fungsi`) USING BTREE,
  ADD KEY `fungsiToJenisFungsi` (`id_jenis_fungsi`) USING BTREE,
  ADD KEY `fungsiToStatus` (`id_status`) USING BTREE,
  ADD KEY `fungsiToLevelAkses` (`id_level_akses`) USING BTREE;

--
-- Indexes for table `xi_sa_group`
--
ALTER TABLE `xi_sa_group`
  ADD PRIMARY KEY (`id_group`) USING BTREE,
  ADD KEY `groupToLevelAkses` (`id_level_akses`) USING BTREE,
  ADD KEY `groupToStatus` (`id_status`) USING BTREE;

--
-- Indexes for table `xi_sa_group_privileges`
--
ALTER TABLE `xi_sa_group_privileges`
  ADD PRIMARY KEY (`id_group_privileges`) USING BTREE,
  ADD KEY `groupPrevilegesToGroup` (`id_group`) USING BTREE,
  ADD KEY `groupPrevilegesToRules` (`id_rules`) USING BTREE,
  ADD KEY `groupPrevilegesToStatus` (`id_status`) USING BTREE;

--
-- Indexes for table `xi_sa_jenis_fungsi`
--
ALTER TABLE `xi_sa_jenis_fungsi`
  ADD PRIMARY KEY (`id_jenis_fungsi`) USING BTREE,
  ADD KEY `jenisFungsiToStatus` (`id_status`) USING BTREE;

--
-- Indexes for table `xi_sa_kontrol`
--
ALTER TABLE `xi_sa_kontrol`
  ADD PRIMARY KEY (`id_kontrol`) USING BTREE,
  ADD KEY `kontrolToStatus` (`id_status`) USING BTREE;

--
-- Indexes for table `xi_sa_level_akses`
--
ALTER TABLE `xi_sa_level_akses`
  ADD PRIMARY KEY (`id_level_akses`) USING BTREE,
  ADD KEY `levelAksesToStatus` (`id_status`) USING BTREE;

--
-- Indexes for table `xi_sa_log_login`
--
ALTER TABLE `xi_sa_log_login`
  ADD PRIMARY KEY (`id_log`) USING BTREE;

--
-- Indexes for table `xi_sa_log_session`
--
ALTER TABLE `xi_sa_log_session`
  ADD PRIMARY KEY (`id_log_session`) USING BTREE,
  ADD KEY `logSessionToUsers` (`id_users`) USING BTREE;

--
-- Indexes for table `xi_sa_menu`
--
ALTER TABLE `xi_sa_menu`
  ADD PRIMARY KEY (`id_menu`) USING BTREE,
  ADD KEY `menuToRules` (`id_rules`) USING BTREE,
  ADD KEY `menuToStatus` (`id_status`) USING BTREE;

--
-- Indexes for table `xi_sa_module`
--
ALTER TABLE `xi_sa_module`
  ADD PRIMARY KEY (`id_module`) USING BTREE,
  ADD KEY `moduleToStatus` (`id_status`) USING BTREE;

--
-- Indexes for table `xi_sa_rules`
--
ALTER TABLE `xi_sa_rules`
  ADD PRIMARY KEY (`id_rules`) USING BTREE,
  ADD KEY `rulesToFungsi` (`id_fungsi`) USING BTREE,
  ADD KEY `rulesToKontrol` (`id_kontrol`) USING BTREE,
  ADD KEY `rulesToModule` (`id_module`) USING BTREE,
  ADD KEY `rulesToStatus` (`id_status`) USING BTREE;

--
-- Indexes for table `xi_sa_setting`
--
ALTER TABLE `xi_sa_setting`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `xi_sa_status`
--
ALTER TABLE `xi_sa_status`
  ADD PRIMARY KEY (`id_status`) USING BTREE;

--
-- Indexes for table `xi_sa_users`
--
ALTER TABLE `xi_sa_users`
  ADD PRIMARY KEY (`id_users`) USING BTREE,
  ADD KEY `username` (`username`) USING BTREE,
  ADD KEY `iduser` (`id_users`) USING BTREE,
  ADD KEY `userToStatus` (`id_status`) USING BTREE;

--
-- Indexes for table `xi_sa_users_default_pass`
--
ALTER TABLE `xi_sa_users_default_pass`
  ADD PRIMARY KEY (`id_default_pass`) USING BTREE,
  ADD KEY `defaultPasstoUsers` (`id_users`);

--
-- Indexes for table `xi_sa_users_privileges`
--
ALTER TABLE `xi_sa_users_privileges`
  ADD PRIMARY KEY (`id_users_privileges`) USING BTREE,
  ADD KEY `whiteToGroup` (`id_group`) USING BTREE,
  ADD KEY `whiteToUsers` (`id_users`) USING BTREE,
  ADD KEY `usersPrevilegesToStatus` (`id_status`) USING BTREE;

--
-- Indexes for table `xi_sa_white_list`
--
ALTER TABLE `xi_sa_white_list`
  ADD PRIMARY KEY (`id_white_list`) USING BTREE,
  ADD KEY `whiteToStatus` (`id_status`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `xi_sa_fungsi`
--
ALTER TABLE `xi_sa_fungsi`
  MODIFY `id_fungsi` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `xi_sa_group`
--
ALTER TABLE `xi_sa_group`
  MODIFY `id_group` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `xi_sa_group_privileges`
--
ALTER TABLE `xi_sa_group_privileges`
  MODIFY `id_group_privileges` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=308;

--
-- AUTO_INCREMENT for table `xi_sa_jenis_fungsi`
--
ALTER TABLE `xi_sa_jenis_fungsi`
  MODIFY `id_jenis_fungsi` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `xi_sa_kontrol`
--
ALTER TABLE `xi_sa_kontrol`
  MODIFY `id_kontrol` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `xi_sa_level_akses`
--
ALTER TABLE `xi_sa_level_akses`
  MODIFY `id_level_akses` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `xi_sa_log_login`
--
ALTER TABLE `xi_sa_log_login`
  MODIFY `id_log` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `xi_sa_log_session`
--
ALTER TABLE `xi_sa_log_session`
  MODIFY `id_log_session` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `xi_sa_menu`
--
ALTER TABLE `xi_sa_menu`
  MODIFY `id_menu` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `xi_sa_module`
--
ALTER TABLE `xi_sa_module`
  MODIFY `id_module` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `xi_sa_rules`
--
ALTER TABLE `xi_sa_rules`
  MODIFY `id_rules` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1009;

--
-- AUTO_INCREMENT for table `xi_sa_setting`
--
ALTER TABLE `xi_sa_setting`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `xi_sa_users`
--
ALTER TABLE `xi_sa_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `xi_sa_users_default_pass`
--
ALTER TABLE `xi_sa_users_default_pass`
  MODIFY `id_default_pass` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `xi_sa_users_privileges`
--
ALTER TABLE `xi_sa_users_privileges`
  MODIFY `id_users_privileges` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `xi_sa_white_list`
--
ALTER TABLE `xi_sa_white_list`
  MODIFY `id_white_list` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `xi_sa_fungsi`
--
ALTER TABLE `xi_sa_fungsi`
  ADD CONSTRAINT `fungsiToJenisFungsi` FOREIGN KEY (`id_jenis_fungsi`) REFERENCES `xi_sa_jenis_fungsi` (`id_jenis_fungsi`),
  ADD CONSTRAINT `fungsiToLevelAkses` FOREIGN KEY (`id_level_akses`) REFERENCES `xi_sa_level_akses` (`id_level_akses`),
  ADD CONSTRAINT `fungsiToStatus` FOREIGN KEY (`id_status`) REFERENCES `xi_sa_status` (`id_status`) ON UPDATE CASCADE;

--
-- Constraints for table `xi_sa_group`
--
ALTER TABLE `xi_sa_group`
  ADD CONSTRAINT `groupToLevelAkses` FOREIGN KEY (`id_level_akses`) REFERENCES `xi_sa_level_akses` (`id_level_akses`),
  ADD CONSTRAINT `groupToStatus` FOREIGN KEY (`id_status`) REFERENCES `xi_sa_status` (`id_status`);

--
-- Constraints for table `xi_sa_group_privileges`
--
ALTER TABLE `xi_sa_group_privileges`
  ADD CONSTRAINT `groupPrevilegesToGroup` FOREIGN KEY (`id_group`) REFERENCES `xi_sa_group` (`id_group`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `groupPrevilegesToRules` FOREIGN KEY (`id_rules`) REFERENCES `xi_sa_rules` (`id_rules`),
  ADD CONSTRAINT `groupPrevilegesToStatus` FOREIGN KEY (`id_status`) REFERENCES `xi_sa_status` (`id_status`);

--
-- Constraints for table `xi_sa_jenis_fungsi`
--
ALTER TABLE `xi_sa_jenis_fungsi`
  ADD CONSTRAINT `jenisFungsiToStatus` FOREIGN KEY (`id_status`) REFERENCES `xi_sa_status` (`id_status`);

--
-- Constraints for table `xi_sa_kontrol`
--
ALTER TABLE `xi_sa_kontrol`
  ADD CONSTRAINT `kontrolToStatus` FOREIGN KEY (`id_status`) REFERENCES `xi_sa_status` (`id_status`) ON UPDATE CASCADE;

--
-- Constraints for table `xi_sa_level_akses`
--
ALTER TABLE `xi_sa_level_akses`
  ADD CONSTRAINT `levelAksesToStatus` FOREIGN KEY (`id_status`) REFERENCES `xi_sa_status` (`id_status`);

--
-- Constraints for table `xi_sa_log_session`
--
ALTER TABLE `xi_sa_log_session`
  ADD CONSTRAINT `logSessionToUsers` FOREIGN KEY (`id_users`) REFERENCES `xi_sa_users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `xi_sa_menu`
--
ALTER TABLE `xi_sa_menu`
  ADD CONSTRAINT `menuToRules` FOREIGN KEY (`id_rules`) REFERENCES `xi_sa_rules` (`id_rules`),
  ADD CONSTRAINT `menuToStatus` FOREIGN KEY (`id_status`) REFERENCES `xi_sa_status` (`id_status`);

--
-- Constraints for table `xi_sa_module`
--
ALTER TABLE `xi_sa_module`
  ADD CONSTRAINT `moduleToStatus` FOREIGN KEY (`id_status`) REFERENCES `xi_sa_status` (`id_status`);

--
-- Constraints for table `xi_sa_rules`
--
ALTER TABLE `xi_sa_rules`
  ADD CONSTRAINT `rulesToFungsi` FOREIGN KEY (`id_fungsi`) REFERENCES `xi_sa_fungsi` (`id_fungsi`),
  ADD CONSTRAINT `rulesToKontrol` FOREIGN KEY (`id_kontrol`) REFERENCES `xi_sa_kontrol` (`id_kontrol`),
  ADD CONSTRAINT `rulesToModule` FOREIGN KEY (`id_module`) REFERENCES `xi_sa_module` (`id_module`),
  ADD CONSTRAINT `rulesToStatus` FOREIGN KEY (`id_status`) REFERENCES `xi_sa_status` (`id_status`);

--
-- Constraints for table `xi_sa_users`
--
ALTER TABLE `xi_sa_users`
  ADD CONSTRAINT `userToStatus` FOREIGN KEY (`id_status`) REFERENCES `xi_sa_status` (`id_status`);

--
-- Constraints for table `xi_sa_users_default_pass`
--
ALTER TABLE `xi_sa_users_default_pass`
  ADD CONSTRAINT `defaultPasstoUsers` FOREIGN KEY (`id_users`) REFERENCES `xi_sa_users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `xi_sa_users_privileges`
--
ALTER TABLE `xi_sa_users_privileges`
  ADD CONSTRAINT `usersPrevilegesToStatus` FOREIGN KEY (`id_status`) REFERENCES `xi_sa_status` (`id_status`),
  ADD CONSTRAINT `whiteToGroup` FOREIGN KEY (`id_group`) REFERENCES `xi_sa_group` (`id_group`),
  ADD CONSTRAINT `whiteToUsers` FOREIGN KEY (`id_users`) REFERENCES `xi_sa_users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `xi_sa_white_list`
--
ALTER TABLE `xi_sa_white_list`
  ADD CONSTRAINT `whiteToStatus` FOREIGN KEY (`id_status`) REFERENCES `xi_sa_status` (`id_status`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
