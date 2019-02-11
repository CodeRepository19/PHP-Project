-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2019 at 12:51 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sampleproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajax`
--

CREATE TABLE `ajax` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ajax`
--

INSERT INTO `ajax` (`id`, `first_name`, `last_name`) VALUES
(8, 'Gupta', 'CH'),
(9, 'suribabu', 'babu'),
(11, 'Vijay', 'Kella');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `time`) VALUES
(1, 'Guptach', 'gupta.charugalla@gmail.com', 'Hii, I am Gupta. I have liked your facilities...', '2019-02-04 15:45:19'),
(5, 'Akhil', 'Akhil@gmail.com', 'Hiii', '2019-02-05 03:54:32'),
(6, 'suribabu', 'suribabu@gmail.vom', 'hihi', '2019-02-05 11:03:33');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `experience` varchar(10) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `experience`, `name`, `email`, `message`, `time`) VALUES
(11, 'Good', 'gupta', 'gupta.charugalla@gmail.com', 'Awesome', '2019-02-06 06:43:29'),
(12, 'Good', 'vijay', 'vijay@gmail.com', 'Awesome', '2019-02-06 10:19:53'),
(13, 'Good', 'sdfsd', 'sdfsdf@dsrfg.fghfgh', 'sdfsdf', '2019-02-06 10:22:26');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(8) NOT NULL,
  `member_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `member_password` varchar(64) NOT NULL,
  `member_email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `member_mobile` varchar(11) CHARACTER SET utf16 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `member_name`, `member_password`, `member_email`, `member_mobile`) VALUES
(1, 'admin', '$2a$10$0FHEQ5/cplO3eEKillHvh.y009Wsf4WCKvQHsZntLamTUToIBe.fG', 'user@gmail.com', '9989469240'),
(2, 'admin', 'spsoft', 'admin@gmail.com', '6354851254'),
(3, 'Gupta', '$2y$10$Oq56o0TrGZM8EwIAcZyYz.QzwhdO1ypQiohg4snwIY1P567umqOJW', 'gupta@gmail.com', '7845126354'),
(8, 'Suribabu563', '$2y$10$Je5BgboOTJ96Khc.jslAlOYAeYbtHhmrwvhVbFfa5T81Muol66a36', 'suribabu563@gmail.com', '8574562156'),
(25, 'suribabu', '$2y$10$gJJk.3BjKQ6pNzrSe0ZLpus5z2ark7cWrbX85/vtaraPBgHGPjqCO', 'suri@gmail.com', '8501003673'),
(26, 'KellaVijay', '$2y$10$l3b65CvUp2kFEmMdW0sDjO.Etil5W1BNRvqcCi396jyrXABPE9Fta', 'Kellavijaykumar@gmail.com', '9989769040'),
(27, 'Akhil', '$2y$10$xzF6wXVtZ5Bnd7Ue9.h3GulaLaJbveU9r0j/f97dPvLN/.JBDHfMW', 'akhil@gmail.com', '9989769040');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_token_auth`
--

CREATE TABLE `tbl_token_auth` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `selector_hash` varchar(255) NOT NULL,
  `is_expired` int(11) NOT NULL DEFAULT '0',
  `expiry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_token_auth`
--

INSERT INTO `tbl_token_auth` (`id`, `username`, `password_hash`, `selector_hash`, `is_expired`, `expiry_date`) VALUES
(17, 'admin', '$2y$10$qBHw7RhQBwP0HH0OQvLx9OS3os2lr82ZL.LS4AdhioHvOlujRpzBa', '$2y$10$/A.c6vnZ0SklJ5hCCpzgF.mgdQk2klNcyThTE6q.xa6SaaHFUp4s2', 1, '2018-12-27 09:12:00'),
(18, 'admin', '$2y$10$FdhrYCr6c4y8cUVcGfdb7.tCRIZmihOxUfv7C8/L13IPuaf3/qWLi', '$2y$10$.WdUcISozhgyUJQUVhgGgeQIBmdQ/wdnooOVY.jvf5L61f1df09Ii', 1, '2018-12-27 09:21:39'),
(19, 'admin', '$2y$10$CJXBm4UkiFLNwGMGkaTe5.6LBLKd84aaSbzSHwMa2Xm3bF3ni1F0q', '$2y$10$sJ1Iuz7LqMUdLhim1WFJReMDB6FNh03k6/ENflxzTaXZG5b3hGgTW', 1, '2018-12-27 09:23:24'),
(20, 'admin', '$2y$10$z9ETN0evUPMqbPsRlmeK/ukW92PTWdGlH2QtgkhoOskhvNc6o2A6m', '$2y$10$aX3M1D73LAWv17cvklVQ8uyaGarL3UcTDL6LXyTPrwKmg0ywS32X6', 1, '2018-12-27 09:40:43'),
(21, 'admin', '$2y$10$a3pBDgtZY008.c.y84vnJ.sJTkB4oQlUfDJZ4e4WP9OLzjLd6DwLm', '$2y$10$uVlmUmroCzP.DeUbt7Xl..AMa2yxz1skIskNZe5h4dw0GHKdKKBT2', 0, '2019-01-26 05:10:43'),
(22, 'gupta', '$2y$10$Sbl61QpfsLV9uUy9FAakEecImLMAhNvQJQxCEdYMCjUUcIwial8F.', '$2y$10$g4qQr4vJelf1LT0/QmZ.w.SqWMkWaLiQQwjcnF4fixPSnSsc5nQTO', 1, '2018-12-27 12:02:39'),
(23, 'gupta', '$2y$10$TqJkfhVwAo3WxhPkHjm5BuJqBVG/grqvVA6IHJLeAbzbYwN3PjtpS', '$2y$10$KrKrurDhpDrvzRwDe114ee9skMvyqGX5aQri3drjmKq.y5DDVtHhK', 1, '2018-12-28 03:36:00'),
(24, 'gupta', '$2y$10$nPF8XCg9UkBJTkwICJQ.IOn.uWIGoZGh5bKqd0XVhMwc6J5uY3tle', '$2y$10$fH8GeUmhDAOuY8.KD0dRBe56bXxEaEqD7famcZSeMpvuIxNxty/3K', 1, '2018-12-28 06:42:41'),
(25, 'gupta', '$2y$10$xbTkhUlhkuhU8vsvAHX8COeZYxiJX4DN.ja6rWyTq4fCdGFO1FVzy', '$2y$10$HHLtIEW4IR4l1iPgCVFi..rn70O0KyCWjf5tCzBx3a4r729uoz4BS', 1, '2018-12-28 06:44:02'),
(26, 'gupta', '$2y$10$BSmX5drwaOHNGzn5KVezaeDdmXrITl5Jk6RHhpJYVLfgKgffsNsBG', '$2y$10$HzgSJqBhjf9Ofuz.hxcPG.hb1hs17.OYbVNY1k3KUsZYFnb8znoHu', 1, '2018-12-28 06:48:01'),
(27, 'gupta', '$2y$10$Jxd04.OJtDAUdB24/0yCOOMBSih1SWHE74Gvd4oGLkqPm.bqbNKay', '$2y$10$JNNvH.jUEx3KcI5bZDA5IuGs2eAJZ3tWEjh9.TQ5TcQj3T6qkMsRu', 1, '2018-12-28 06:58:33'),
(28, 'gupta', '$2y$10$mO4TEW/SOra3JeKzyRTnBeQV75yYQ9.eCgfQe6VgN9vqyuoBkN8Ca', '$2y$10$Vjk3dh.a2KsN8MxQA/wtweeypR.AIqcaicEJ7npSiXm0kA/LoF76e', 1, '2018-12-28 06:59:22'),
(29, 'gupta', '$2y$10$iFwksVDEISfziyyuwM421OFxpHEdD7dZZGajVYSXLfnFy4KFHxbua', '$2y$10$1CaU/qa8d/835ctSBT5GMedVjSZVpKJWfg57vcDFgWQgY5deG5aeK', 1, '2018-12-28 07:01:07'),
(30, 'gupta', '$2y$10$o6mDoATuwpApmBFotGeP5.YdCNysx3dRRF5fUd1y.YVxmrKNWyFLS', '$2y$10$vyevhRl8z/G3AIwJ.7l4POxtP8.DPnI3COIPTt1BAGBvhW7b7wzYC', 1, '2018-12-28 07:03:34'),
(31, 'gupta', '$2y$10$e8ZBlhIlNwoDSi5kvO54a.hh.FExLZoYd1eLEn2I6WA9/LYa.9au.', '$2y$10$oXshLjBkyptirMaaXa1Do.XQVEFPryALs3k2yp6UEt.u0PI8/CHT2', 1, '2018-12-28 07:09:27'),
(32, 'gupta', '$2y$10$pt7.mHKHpL7QVrg5rJ2wnOxTOJ39clW1FvtwfmQmiNtx8XH5dIJPS', '$2y$10$86WpHnc/SnACLNOUV5GyZeZBkGkLglOhZxetX8BguxH8rC2jO7Vwu', 1, '2018-12-28 08:20:16'),
(33, 'gupta', '$2y$10$lD.qnxcxKk3cN.fEe7.rVufkh20H4kErMwpDsJZo1aQjXqsKMm9vS', '$2y$10$s3HzUe4bORKyVCI/zYWjd.oi.pv9tec0AYXkBK2Qt7e9MkErLdXiW', 1, '2018-12-28 08:39:57'),
(34, 'gupta', '$2y$10$fv0HqsvuQ5m33ZrGAzDbVuZafbJfuSuxIstGaa9WbJUIgjAZNpA62', '$2y$10$lZsQ18.y.pLF1FmYqvgunOnrL2OocaCjJhltBCLa.h8U0D174kuty', 1, '2019-02-04 08:16:12'),
(35, 'suribabu563', '$2y$10$g8hLaBE.lzf8ACNDluTynOm/pd6n1lf7C1kYqyzaElLLhgqK53lAq', '$2y$10$4jyfRFk8kMn9bW2FMxU4cuM912W4rox2wuuj6WFnyxzVhXH2RGxLC', 1, '2019-02-01 06:26:35'),
(36, 'suribabu563', '$2y$10$GG4y6ISn1MoJLJ.UGUypXesFwB6SCscz.ONBfoc4u/xcU2/mYHy7e', '$2y$10$ZUouv05h/ffRr9Ah2Oe/suL/ZpQqivuoMTGl1H4VwNiXc6JgGAQtq', 1, '2019-02-01 06:28:16'),
(37, 'suribabu563', '$2y$10$86gBgk59Sm8yolVOD55DluD8HisaC.HlmlQfgzUXlgVFacWY5L0dW', '$2y$10$1mIkZNiHJSzwNSGC7S/8X.Xj.qjsB9D2naQHDJm1yXGVyGERkLiIC', 1, '2019-02-01 06:28:25'),
(38, 'suribabu563', '$2y$10$v5u2oiR69w/eJy2TSZqIo.BRAc2YBH/RidLqKmGnPLSIdNJXZ4AjK', '$2y$10$gStJv/Lpi84/6UX9euv4Uepthcn75H.mE1ea3OIv9N7vIXn4FbSmu', 0, '2019-03-03 01:58:24'),
(39, 'gupta', '$2y$10$vKWr8gVKpAd6xL5SuVfY5OWEO9bg5wufRMvc5xzDDIaZUoPbb9GY6', '$2y$10$nj9wr3xrt34pbzPWja76luQmotf.X/6M7.mltGmAY/SfzNIVmvx6e', 1, '2019-02-04 11:01:28'),
(40, 'gupta', '$2y$10$yw3cLd6Ad7A/GngsCnbJ0eN2L9.HWyK.UGp1Hg.Re6PIw83Icc.he', '$2y$10$SQLu.8J2q8y2Xbru6JJaNuaHLZC8Jehm740mDa.8TRUzmmCqPCcT6', 1, '2019-02-04 11:08:34'),
(41, 'gupta', '$2y$10$HYbvUGcXsuw9uKXns7ebOu6cWqY5DFhaNcF4Y/bRqjmTpqGlkbC4S', '$2y$10$jAciWOIbDxJS1YZnA1KGYuIQm1RHPkgFbcjNTv4oNkTmLHaa8uvTi', 1, '2019-02-04 11:12:01'),
(42, 'gupta', '$2y$10$wnmalhTuTc3rLrwIIZLRA.2jy8mBxJGmTbxNe0leu.nmYZVIMDtcC', '$2y$10$x97yZwMG.JeeaWssNtzgC.w/Hl9bLL1mmyTrb74HO3Qh1U.BG0k/G', 1, '2019-02-04 11:14:01'),
(43, 'gupta', '$2y$10$VlZz3vXJNZ34x7ytSFMUs.bQcS.lQW7yeZ/PEfoKyyg1kAz7EEu4i', '$2y$10$kjmREmtxo9j8bLG9Y3NTa.q6c77eO/KPY6ofll5b8WXMVEw7kHlim', 1, '2019-02-04 11:41:49'),
(44, 'gupta', '$2y$10$bRoJgEOF18JRDAM/kHXlVeHEqJdghrzjytY1TWfM2LVKe0ePm1/GK', '$2y$10$RnKrfMoW3HvfSxtIbQ5yxu99IXtEBtO9kET.MaRdIzfvcUT9S7Gja', 1, '2019-02-04 12:28:02'),
(45, 'gupta', '$2y$10$23AHGg8MxDP.4x3ZSNI4Iury2tp2HE3wexT4UrmdgZtSbfFaK3prK', '$2y$10$MhALGOiZiIUFOG18rtExL.jzjtr717EYtRduCkNDoX/ERJSZUHBC6', 1, '2019-02-05 03:42:16'),
(46, 'gupta', '$2y$10$ccA6tXbvnlk05RkNAMC5m.oqdrjuSqc6JAiZraNIfib/RMAdk896G', '$2y$10$kXKiIjU2h8Ho0wmtlNnWWO8Kt5W0bXqNU6.h1c9HTbvd5aLJb7CSO', 1, '2019-02-05 11:15:55'),
(47, 'gupta', '$2y$10$qZ.lh/pjZ0yCVPoiuBtlLuvS40tRa4Le.KfdNpPNT/LcTyR6/Kjim', '$2y$10$Tv3mBpzvnKtyzzhBbLaT3.mJ5fYScUkgFw72x1rsJoYENhEMw8YSO', 1, '2019-02-05 11:20:16'),
(48, 'gupta', '$2y$10$fSC4Wun0C3FdH603qzQ4POlv7DqXbNwZ4jeAnab5.3SPJKIg9iAiq', '$2y$10$2kq3XCHe4tgMTm9xbeIkWOPDXylUEojn0cPUxQfOtLnnx.1B1SuTC', 1, '2019-02-06 03:31:41'),
(49, 'gupta', '$2y$10$uKUjLau7/sAvnU7aM3UCyOr.ydNFkFonA7ulLzSoa2JZzrrK2xTHW', '$2y$10$pt3SStKI8dELnjFkmtqxyetHr5cK.ue9ZGT4CR6cnRWsuQdlUlXLe', 1, '2019-02-06 04:15:53'),
(50, 'gupta', '$2y$10$UWdQfOP2/iqwtJDUoV/nw.uH471.WDoqL3BzQNzxYfBWwn2O7ozN2', '$2y$10$KcH2VKT.KuCxWGvpyj10SecIbEp2wk/dHFVgiNC3GCahbSPeq2OOa', 1, '2019-02-07 03:40:04'),
(51, 'gupta', '$2y$10$9EBlaIUynrQ7C/wK5o0hg.wqfF1jiSuAKX5ZTu1xGpqhOWf2R0tYC', '$2y$10$PnhH92/NQlH5x26MgRGF/uSbph7CAPHH/fx.51lNKu1CDKcBDjfTq', 1, '2019-02-08 03:34:29'),
(52, 'gupta', '$2y$10$vkcp2aJqeAJhI0D74uVkmeDH69XI8YPLGu6k6/u4xYjsfTqersmyW', '$2y$10$qeNSoiCUVH02aDx3EW3sIe4VSaHBUZ4828O2ahzJJgamlGvc/OM6a', 1, '2019-02-11 03:42:12'),
(53, 'gupta', '$2y$10$Nl66Ykmwq.GbINMNU8cvOubYiTVs89QWlkFZZU0zWCca6.YjTGcMa', '$2y$10$j/9a/iHBnGhxwV/ki75Uu.Uu/dwDnM7MLlTYeJ0QzuTCwtLi/QMke', 0, '2019-03-12 23:12:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `UserName` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Email` varchar(75) CHARACTER SET latin1 NOT NULL,
  `mobileNumber` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `UserName`, `Password`, `Email`, `mobileNumber`) VALUES
(1, 'Andrew', 'spsoft', 'andrew@gmail.com', '9989769045'),
(8, 'Gupta', 'Spsoft', 'gupta@gmail.com', '8545845845');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajax`
--
ALTER TABLE `ajax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbl_token_auth`
--
ALTER TABLE `tbl_token_auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajax`
--
ALTER TABLE `ajax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_token_auth`
--
ALTER TABLE `tbl_token_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
