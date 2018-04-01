-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 06:34 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `ingredients` text NOT NULL,
  `procedures` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `name`, `ingredients`, `procedures`) VALUES
(1, 'Chicken Sukka', 'Chicken (small pieces), Onion (thin slices), Cardamom, Salt, Oil, Coriander, Cumin, Mustard, Pepper, Cloves, Cinnamon, Bedki chillies, Kashmiri chilies, Turmeric, Onion, Garlic, Ginger, Salt', 'How to Make Chicken Sukka1.Roast both Chilies in a pan & keep aside.2.In the same pan roast, coriander, cumin, mustard, pepper, cloves, cinnamon, onion, ginger & garlic. Grind all the masala items together (fried stuff, salt, tamarind & turmeric) with little water to make a smooth coconut paste.3.Now heat oil in a vessel and fry onions till golden brown.4.Add Chicken, salt & Elachi to cook for 10 minutes.5.Add ground masala and bring one boil. Add scrapped coconut and boil again.6.Taste and check if you need to add more salt.7.Serve hot. You may temper the dish with some amount of ghee.'),
(2, 'Chicken Curry', 'Oil, Ghee, Onion paste, Garlic paste, Ginger paste, Turmeric powder, Salt, Tomato Puree, Coriander powder, Red chilli powder, Cumin powder, Garam Masala, Chicken leg pieces, Coriander leaves, Water', '1.In a large saucepan heat oil and ghee together over a medium flame.Spicy Chicken Curry2.Add onion paste and cook for a minute or two to get a golden pink color.Spicy Chicken Curry3.Then add ginger and garlic paste. Mix well.Spicy Chicken Curry4.Cover the pan and let it cook for few minutes to get a little thick paste. Make sure the paste doesn’t burn.Spicy Chicken Curry5.After it has cooked, open the pan and add turmeric powder along with salt. Stir well until it appears as a yellow thick paste.Spicy Chicken Curry6.Add tomato puree and cook for a minute.Spicy Chicken Curry7.Add coriander powder, red Chilli powder, cumin powder and Garam Masala.Spicy Chicken Curry8.Put the chicken leg pieces in the gravy and cook for 5 minutes.Spicy Chicken Curry9.Make sure that chicken is well coated and then add coriander leaves.Spicy Chicken Curry10.Add some water to it and bring it to the boil for about 2 minutes.Spicy Chicken Curry11.Transfer this curry to a pressure cooker.Spicy Chicken Curry12.Give it 4-5 whistles for the chicken to get soft.13.Cook more if it is not cooked properly.14.Put the curry in a serving bowl. Garnish with fresh coriander leaves and serve hot.Spicy Chicken Curry');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
