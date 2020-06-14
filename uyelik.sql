-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 11 May 2020, 13:39:47
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `uyelik`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `paylas`
--

CREATE TABLE `paylas` (
  `id` int(11) NOT NULL,
  `kisi` varchar(255) NOT NULL,
  `yazi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `paylas`
--

INSERT INTO `paylas` (`id`, `kisi`, `yazi`) VALUES
(1, 'baris', 'qweqweqweqweqwe'),
(2, 'baris', ''),
(3, 'baris', ''),
(4, 'baris', ''),
(5, 'baris', 'zxczxc'),
(6, 'baris', 'zxczxcssaffsfd'),
(7, 'baris', 'selam sana'),
(8, 'baris', 'hobaa'),
(9, 'baris', 'dfgdfgdfg'),
(10, 'baris', 'ddfdsfdsfsd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uye`
--

CREATE TABLE `uye` (
  `id` int(11) NOT NULL,
  `uye_adi` varchar(11) NOT NULL,
  `uye_mail` varchar(250) NOT NULL,
  `uye_tel` int(11) NOT NULL,
  `uye_adres` varchar(250) NOT NULL,
  `uye_pw` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `uye`
--

INSERT INTO `uye` (`id`, `uye_adi`, `uye_mail`, `uye_tel`, `uye_adres`, `uye_pw`) VALUES
(15, 'murat', 'qwee@dsffsfs', 2434, 'qwe', 324324),
(16, 'brylmaz', 'asdasd@sdfsdf', 4234233, 'sdfsdfsdsd', 525252),
(17, 'brylmaz', 'asdasd@sdfsdf', 4234233, 'sdfsdfsdsd', 2147483647),
(18, 'dgdfg', 'qwee@dsffsfs', 342, 'sdff', 32423),
(19, 'qweq', 'qwee@dsffsfs', 2342342, 'sdfsdf', 324234),
(20, 'dgdfg', 'qwee@dsffsfs', 234312, 'wewer', 0),
(21, 'dgdfg', 'qwee@dsffsfs', 23424, 'qwe', 34234),
(22, 'dgdfg', 'qwee@dsffsfs', 242324, 'sdff', 32423),
(23, 'ASDAS', 'qwee@dsffsfs', 34234, 'AWERWRE', 234234),
(24, 'baris', 'yilmaz@asdasd', 5464, '44adasd', 112233);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `paylas`
--
ALTER TABLE `paylas`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uye`
--
ALTER TABLE `uye`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `paylas`
--
ALTER TABLE `paylas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `uye`
--
ALTER TABLE `uye`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
