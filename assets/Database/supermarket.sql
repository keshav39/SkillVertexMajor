-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 05, 2022 at 02:32 PM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19551317_supermarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `order_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `product_id`, `user_id`, `amount`, `status`, `order_id`) VALUES
(1, 1, 2, 5, 'Added to cart', NULL),
(3, 30, 1, 3, 'Confirmed', '1/2022/10/05/12/35/46'),
(4, 3, 1, 2, 'Confirmed', '1/2022/10/05/12/35/46'),
(5, 29, 1, 3, 'Confirmed', '1/2022/10/05/12/35/46');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `message` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `category` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `img_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `category`, `brand`, `price`, `img_path`) VALUES
(1, 'Rice', 'The perceived characteristics of good-quality rice are uniformity of size and shape, whiteness, long and thin uncooked grains (i.e., long and slender), and round and fat cooked grains (i.e., bold cooked grains).', 'Staples', 'Uttam', 80, 'assets/img/products/rice.jpg'),
(2, 'Moong Dal', 'Moong Dal is also known as Green Gram Beans when whole, Split Green Gram when split with the skin on and as Split and Skinned Green Gram when de-skinned (yellow).', 'Staples', 'Tata', 55, 'assets/img/products/Moong Dal.jpg'),
(3, 'Pepsi', 'Pepsi is a carbonated soft drink manufactured by PepsiCo.', 'Beverages', 'Cola', 40, 'assets/img/products/pepsi.jpg'),
(4, 'Mango', 'A mango is an edible stone fruit produced by the tropical tree Mangifera indica. Mango is rich in vitamins, minerals, and antioxidants, and it has been associated with many health benefits, including potential anticancer effects, as well as improved immunity and digestive and eye health.', 'Fruits and Vegetables', 'Farm Fresh', 150, 'assets/img/products/Mango.jpg'),
(5, 'Coca Cola', 'Coca-Cola, or Coke, is a carbonated soft drink manufactured by the Coca-Cola Company. Originally marketed as a temperance drink and intended as a patent medicine, it was invented in the late 19th century by John Stith Pemberton in Atlanta, Georgia.', 'Beverages', 'Cola', 40, 'assets/img/products/coke.jpg'),
(6, 'Sting', 'Sting energy drink gives you an energy boost to charge up and keeps you going. It also invigorates your taste buds with its refreshingly delicious flavor. Sting has the kick of Caffeine, Ginseng and B Vitamins with amazingly refreshing flavors.', 'Beverages', 'Cola', 20, 'assets/img/products/sting.jpg'),
(7, 'Potatoes', 'The potato is a starchy tuber of the plant Solanum tuberosum and is a root vegetable and a fruit native to the Americas.', 'Fruits and Vegetables', 'Farm Fresh', 40, 'assets/img/products/potatoes.jpg'),
(8, 'Fanta', 'Fanta is an American-owned German brand of fruit-flavored carbonated soft drinks created by Coca-Cola Deutschland under the leadership of German businessman Max Keith. There are more than 200 flavors worldwide.', 'Beverages', 'Cola', 40, 'assets/img/products/fanta.jpg'),
(9, 'Limca', 'Limca is an Indian multinational brand of lemon- and lime-flavoured carbonated soft drink made primarily in India and certain parts of the U.S. It contains 60 calories per 150ml can. The formula does not include fruit, relying instead on artificial flavours.', 'Beverages', 'Cola', 40, 'assets/img/products/limca.jpg'),
(10, 'Lays Chips', 'American Best Seller chips brand LAYS. Variety of flavors available', 'Snacks', 'Lays', 30, 'assets/img/products/Lays.jpg'),
(11, 'Atta', 'Made of the best quality Wheat of selected regions. Manufactured in fully automatic hygienic plant. Hygienically packed in food safe packing. Recommended for tasty and nutritious rotis.', 'Staples', 'Uttam', 50, 'assets/img/products/atta.jpg'),
(12, 'Tomatoes', 'Fresh from Farm. Good quality tomatoes, ready to cook or to be used in salad', 'Fruits and Vegetables', 'Farm Fresh', 60, 'assets/img/products/tomatoes.jpg'),
(13, 'Juicer Mixer', 'Sujata juicer mixer is in-built with most powerful 900-Watts motor with double ball bearings for efficiency, low maintenance', 'Kitchen Essentials', 'Sujata', 2000, 'assets/img/products/juicer.jpg'),
(14, 'Mixer Grinder', 'A mixer grinder is used for mixing or grinding foods into a smooth paste with all the components in a tasteless way.', 'Kitchen Essentials', 'Philips', 2500, 'assets/img/products/grinder.jpg'),
(15, 'Ragi Bites', 'Tata Soulfull Ragi Bites is a tasty & nutritious snack for kids made with NO Maida, 41% Ragi, Protein from Dal and filled with yummy chocolate.', 'Snacks', 'Tata', 200, 'assets/img/products/ragi_bites.jpg'),
(16, 'Grapes', 'A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis. Grapes are a non-climacteric type of fruit, generally occurring in clusters.', 'Fruits and Vegetables', 'Farm Fresh', 150, 'assets/img/products/grapes.jpg'),
(17, 'Carrot', 'The carrot is a root vegetable, typically orange in color, though purple, black, red, white, and yellow cultivars exist, all of which are domesticated forms of the wild carrot, Daucus carota, native to Europe and Southwestern Asia.', 'Fruits and Vegetables', 'Farm Fresh', 90, 'assets/img/products/carrots.jpg'),
(18, 'Corn', 'Corn, also known as maize, is a starchy vegetable that comes as kernels on a cob, covered by a husk.', 'Staples', 'Farm Fresh', 140, 'assets/img/products/corn.jpg'),
(19, 'Casserole', 'A casserole is a kind of large, deep pan or bowl used for cooking a variety of dishes in the oven; it is also a category of foods cooked in such a vessel. To distinguish the two uses, the pan can be called a \"casserole dish\" or \"casserole pan\", whereas the food is simply \"a casserole\".', 'Kitchen Essentials', 'Uttam', 600, 'assets/img/products/casserole.jpg'),
(20, 'Aloo Tikki', 'McCain Foods India is the leading brand producing frozen foods and party snacks. Get your favorite frozen snacks and cook them just under 3 minutes and they are ready to serve. McCain Aloo Tikki is one of their products.', 'Snacks', 'McCain', 200, 'assets/img/products/aloo_tikki.jpg'),
(21, 'French Fries', 'McCain Foods India is the leading brand producing frozen foods and party snacks. Get your favorite frozen snacks and cook them just under 3 minutes and they are ready to serve. McCain French Fries is one of their most polular products.', 'Snacks', 'McCain', 170, 'assets/img/products/french_fries.jpg'),
(22, 'Honey', 'Honey is a sweet and viscous substance made by several bees, the best-known of which are honey bees. Honey is made and stored to nourish bee colonies. Bees produce honey by gathering and then refining the sugary secretions of plants or the secretions of other insects, like the honeydew of aphids.', 'Staples', 'Uttam', 400, 'assets/img/products/honey.jpg'),
(23, 'Salt', 'Salt is a mineral composed primarily of sodium chloride, a chemical compound belonging to the larger class of salts; salt in the form of a natural crystalline mineral is known as rock salt or halite. Salt is present in vast quantities in seawater.', 'Staples', 'Tata', 30, 'assets/img/products/salt.jpg'),
(24, 'Kitchen Knife', 'Available in a wide variety of different types and sizes, a knife is used for cutting, chopping, dicing, slicing, mincing, peeling, separating, and other kitchen tasks where the thin metal shaft of a blade is of value for food preparation.', 'Kitchen Essentials', 'Sujata', 300, 'assets/img/products/knife.jpg'),
(25, 'Bowls', 'A bowl is a round container with a wide uncovered top. Some kinds of bowl are used, for example, for serving or eating food from, or in cooking, while other larger kinds are used for washing or cleaning.', 'Kitchen Essentials', 'Milton', 400, 'assets/img/products/bowls.jpg'),
(26, 'Pressure Cooker', 'You can use a pressure cooker to brown, boil, steam, poach, steam roast, braise, stew, or roast food. Nowadays, you can even bake in your pressure cooker! Many people who are using electric pressure cookers like Instant Pot Pressure Cooker are even making cheesecakes and homemade yogurt.', 'Kitchen Essentials', 'Sujata', 1000, 'assets/img/products/cooker.jpg'),
(27, '7 UP', '7 Up is an American brand of lemon-lime-flavored non-caffeinated soft drink. The brand and formula is owned by Keurig Dr Pepper although the beverage is internationally distributed by PepsiCo. 7 Up competes primarily against The Coca-Cola Company Sprite.', 'Beverages', 'Cola', 40, 'assets/img/products/7up.jpg'),
(28, 'Banana', 'A banana is an elongated, edible fruit – botanically a berry – produced by several kinds of large herbaceous flowering plants in the genus Musa. In some countries, bananas used for cooking may be called \"plantains\", distinguishing them from dessert bananas.', 'Fruits and Vegetables', 'Farm Fresh', 70, 'assets/img/products/banana.jpg'),
(29, 'Doritos', 'Doritos is an American brand of flavored tortilla chips produced since 1964 by Frito-Lay, a wholly owned subsidiary of PepsiCo. The original Doritos were not flavored. The first flavor was Toasted Corn, released in 1966, followed by Taco in 1967 and Nacho Cheese in 1972.', 'Snacks', 'Lays', 50, 'assets/img/products/doritos.jpg'),
(30, 'Pringles', 'Pringles is an American brand of stackable potato-based crisps. Originally sold by Procter & Gamble (P&G) in 1968 and marketed as \"Pringles Newfangled Potato Chips\", the brand was sold in 2012 to the current owner, Kelloggs.', 'Snacks', 'Lays', 130, 'assets/img/products/pringles.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `contact` varchar(255) CHARACTER SET latin1 NOT NULL,
  `city` varchar(255) CHARACTER SET latin1 NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'DB Admin', 'supermarketadmin@admin.com', 'd94354ac9cf3024f57409bd74eec6b4c', '9174161621', 'Rohini', 'New Delhi'),
(2, 'Keshav Garg', 'kggargkg@gmail.com', 'c44a471bd78cc6c2fea32b9fe028d30a', '8986121196', 'Rohini', 'New Delhi'),
(3, 'Kartik Thakur', 'kartikthakur@gmail.com', '25d55ad283aa400af464c76d713c07ad', '8077879047', 'Village sahabnagar, Rishikesh, Dehradun', 'House number 7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
