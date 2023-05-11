-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 10:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `details`, `price`, `image`) VALUES
(13, 'Classic Red Rose Bouquet', 'This beautifully crafted bouquet of classic red roses features handcrafted roses with recycled book page stems. Wrapped in brown paper with a matching ribbon and gift tag, it is an excellent gift that will last forever and can be displayed elegantly in a vase.', 20, '73f056_5715b3efefdc43cc965f83c2743d8028~mv2.jpg'),
(15, 'Paper Dahlias', 'Our stunning paper dahlias are made from hand-dyed recycled book pages and sheet music, meticulously crafted to replicate the dramatic two-tone colors of real dahlias. These wrapped bouquets make a unique and thoughtful gift for birthdays or anniversaries, or an elegant display for your own home that will never wilt.', 40, '983342_f091be9cc9ab43dca95e9510c3c65d23~mv2.jpg'),
(16, 'Floribunda Rose Arthur Bell', 'Rosa \'Arthur Bell\' produces an abundant and non-stop show of pretty bright golden-yellow flowers with a strong fragrance, arranged in clusters on healthy dark green foliage. The long-lasting large blossoms make an excellent choice for bouquets and floral arrangements.', 30, '530553.jpg'),
(17, 'Sweet Pea - Bright Pink', 'The floral composition comprises delicate Asiatic Lilies in pale pink, complemented by vibrant hot pink Carnations, two-toned Spray Carnations in pink and white, and elegant white Freesias. The overall presentation exudes a feminine aesthetic.', 28, 'Square-Sweet-Peas-Bright-Pink-1.jpg'),
(18, 'Damson Delight', 'This exquisite collection of Colombian Carnations features striking hues of purple, white, and pink-and-white tones that are both bold and enduring. The arrangement is beautifully accentuated by accompanying purple Ruscus leaves, making it an ideal gift to convey a heartfelt sentiment to a cherished recipient.', 25, 'Damson Delight.jpg'),
(19, 'pink bouquet', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque error earum quasi facere optio tenetur.', 15, 'pink bouquet.jpg'),
(20, 'pink queen rose', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque error earum quasi facere optio tenetur.', 24, 'pink queen rose.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
