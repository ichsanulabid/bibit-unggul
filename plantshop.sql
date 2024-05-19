-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 09:36 PM
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
-- Database: `plantshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `mobile`, `email`, `password`) VALUES
(1, 'Ichsanul Abid', 81997772333, 'ichsanulabid.08@gmail.com', '50de2320e7c2db0f5255e4857c86fb54');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `title` text NOT NULL,
  `content` text NOT NULL,
  `id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`title`, `content`, `id`, `image`) VALUES
('Plant More Trees, Make The Environment Pollution Free!', 'Global warming is constantly on our minds, we want to help fight climate change by reducing our carbon footprint and protect our environment. So in addition to reducing, reusing and recycling, we can actively make a difference by planting trees. Read on to discover how planting trees an make an enormous, positive contribution to the health of our environment!\r\n\r\nTrees are able to clean the air and absorb harmful airborne particles and gaseous pollutants. Toxins such as nitrogen oxides, ammonia and sulphur dioxide through their leaves, bark and roots. This improves the air quality in the microclimate around the trees and contributes to a healthier and cleaner environment overall. Trees also soak up the harmful carbon dioxide in our atmosphere. In one year, an acre of mature trees absorbs the same volume of carbon monoxide as produced from a 26,000 mile car journey! Aside from cleaning the air for us, trees supply us with fresh oxygen to breathe.\r\n\r\nDue to excess gases being produced from large-scale industrial processes, heat from the sun’s rays gets trapped in the Earth\'s atmosphere – this is known as ‘the greenhouse effect’ and it is contributing to the overall rise of Earth\'s temperature. It doesn’t sound like much, but an average global warming of even 1.5 degrees could cause accelerated icecap melting, severe drought and sea-level rise and the loss of many keystone species such as bees, whales and elephants. Trees planted in an urban environment can not only counteract the warming effects concrete and buildings have on the environment (known as the urban heat island effect), they have also been shown to clean the air of pollutants and particulates created by traffic that are harmful to us. Through the process of photosynthesis, trees are able to absorb carbon dioxide from our atmosphere and reduce the ‘greenhouse effect’, creating a less polluted, more sustainable world for our future generations.\r\n\r\nWoodlands have proven to be an invaluable asset when it comes to improving air quality and reducing harmful pollutant levels in the atmosphere. This is why we should try our best to ensure that our most valuable woodlands, like the rainforests, aren’t being lost to deforestation. Many areas of rainforest are being sold off to the highest bidder, their beautiful trees (and the important habitat they create for wildlife) being destroyed to make way for areas to graze cattle (reared for beef) or grow unsustainable palm (to create palm oil). When going about your daily life, try to support brands who choose not to work in association with deforestation. Instead, look for foods that use sustainably sourced palm oil and use the Roundtable on Sustainable Palm Oil (RSPO) logo. Buying products like bananas and coffee that have the Rainforest Alliance certification ensures that minimal impact is being done to produce these foods. Reducing our meat intake and supporting local butchers when we do fancy a Sunday roast is always a great way to reduce the impact our lifestyles have on deforestation. Together we share a responsibility to be good stewards of our planet, and it’s the small things that can make some of the biggest differences!\r\n\r\nThe message we want you to take away from this is clear – appreciate our trees! Plant trees, grow trees, gift them, and protect them. Let’s try to get as many out into the world as possible!', 15, 'article1.jpg'),
('Making Small Farms More Sustainable and Profitable!', 'More than 2 billion people currently live on about 550 million small farms, with 40% of them on incomes of less than U.S. $2 per day. Despite high rates of poverty and malnutrition, these smallholders produce food for more than 50% of the population in low-and middle-income countries, and they have to be part of any solution for achieving the 50% higher food production required to feed the world’s projected 2050 population of nearly 10 billion people.\r\n\r\nAt present, these smallholders are trapped in a negative cycle that damages both themselves and the planet. They are vulnerable to adverse weather incidents and water scarcity, have limited access and low bargaining power with purchasers of their output, and incur high crop losses, estimated at 28% of their production during on-farm growing and post-harvest storage. In order to increase their meager incomes, they cut down trees to access more land.\r\n\r\nBut this deforestation reduces the planet’s capacity for absorbing carbon gases from the atmosphere, releases carbon gases when the felled trees rot or burn and adds new greenhouse gas (GHG) emissions from the additional livestock and crops on the deforested land. Scientists have estimated that 10 to 15% of global carbon dioxide emissions can be traced to this deforestation. The global community and its businesses have every incentive to help small holders improve their productivity, escape poverty, and end destructive agricultural practices.\r\n\r\nCompanies can help break this cycle through profitable and inclusive strategies that enable smallholders to lift themselves out of poverty by improving farming and business practices. Bayer, a global life science company, has been working with the World Bank’s International Finance Corporation (IFC), Netafim, a global supplier of irrigation solutions, and more than 20 local partners at a country level to form the Better Life Farming (BLF) multi-stakeholder alliance. The alliance offers last-mile delivery solutions to help smallholder farmers become sustainable, commercially viable suppliers of agricultural products.', 16, 'article2.jpg'),
('Regenerative Agriculture: Next Trend In Food Retailing!', 'In 2019, General Mills, the manufacturer of Cheerios, Yoplait and Annie’s Mac and Cheese (among other products), announced it would begin sourcing a portion of its corn, wheat, dairy and sugar from farmers who were engaged in regenerative agriculture practices and committed to advancing the practice of regenerative agriculture on one million acres of land by 2030. In early 2020, Whole Foods announced regenerative agriculture would be the No. 1 food trend and, in spite of the pandemic and the rapid growth of online shopping overshadowing the trend, business interest in the field still spiked by 138%.\r\n\r\nMore recently, PepsiCo announced it was adopting regenerative agriculture practices among 7 million acres of its farmland. Cargill declared it intends to do the same on 10 million acres by 2030, and Walmart has committed to advancing the practice on 50 million acres. Other companies pursuing regenerative agriculture include Danone, Unilever, Hormel, Target and Land O’ Lakes.\r\n\r\nTo those who think these numbers are modest, understand that only 5 million acres of farmland are currently dedicated to organic farming practices. As a professional futurist who has been advising farmers and agri-businesses for the past few years, I have seen that regenerative agriculture is a BIG trend and encourage grocers to begin paying closer attention to how it will affect their business.\r\n\r\nGoing Beyond Organic\r\nAt its most basic level, regenerative agriculture is a more nature-friendly way of farming. It can be thought of as the next step beyond organic and sustainability. Although there is not yet an officially agreed-upon definition, regenerative agriculture employs farming and grazing practices that restore degraded soil, improve biodiversity among pollinators (especially bees and butterflies) and increase carbon capture in the soil to create long-lasting environmental benefits.\r\n\r\nIf “organic” food is better for people’s health, think of regenerative agriculture as being better for both people’s health and the health of the planet. More specifically, regenerative agriculture seeks to move away from synthetic fertilizers, monoculture crops and industrial production methods to techniques that minimize chemical use and enhance the health of both water and soil. The end result is that regenerative agriculture produces healthier food while also serving to increase yields and profits for the farmer.\r\n\r\nGrowing Consumer Demand\r\nAccording to Nielsen, 75% of millennials are altering their buying habits with the environment in mind. This sentiment, of course, does not always materialize into tangible actions on behalf of every consumer. However, it is clear from the actions of PepsiCo, General Mills, Walmart, Unilever and others that they believe consumers’ expectations of what is environmentally friendly are shifting and that they will soon be looking to purchase regeneratively-produced foods because of the many benefits they produce.\r\n\r\nIn the near future, due to technological advances in satellites, smart sensors and Blockchain (a complex technological platform that will significantly improve traceability), consumers will have the tools to track the performance of their food producers by monitoring everything from carbon dioxide emissions and carbon soil sequestration to water usage and biodiversity.\r\n\r\nIf you want a hint at this future, check out Chiplote’s “Real Foodprint,” which documents its performance in each of the aforementioned categories for its consumers. Not every consumer will care about these things, but it is clear that millennials and members of Generation Z are increasingly committed to purchasing the type of “earth-friendly” foods that regenerative agriculture is producing and will soon be seeking regenerative products in the aisles of your stores.\r\n\r\nBecoming Certified\r\nThe next step in the transition to regenerative agriculture is certification. The goal is to create labeling that will allow the consumer to connect to the full suite of their values. In 2020, the Savory Institute granted its first “Ecological OutCome Verification (EOV) seal to Epic’s latest high protein bars by certifying that its featured beef was raised with regenerative agriculture practices.\r\n\r\nMore recently, the Regenerative Organic Alliance unveiled its own “Regenerative Organic” label and created a three-tier certification for producers that include bronze, silver and gold certification. The three-tier certification allows organizations to sidestep the issue of a definitive definition while also giving producers the time and flexibility needed to upgrade their practices and processes in order to meet an ever-higher level of certification. Over time, grocers can expect that third-party certification will improve and labeling will become more influential in their shopping and purchasing habits.\r\n\r\nThe prudent grocer should, therefore, begin educating themselves about regenerative agriculture and understand how it differs from today’s organic products. Next, grocers can begin working with those companies and vendors involved in regenerative agriculture to improve certification and labeling. Third, I encourage grocers to begin taking tangible steps to create the necessary space and signature in their stores to display products sourced from farms and agribusinesses employing regenerative agricultural practices. Finally, the progressive grocer will want to begin touting their support for regenerative agriculture. I believe this is a wise long-term investment because it will help ensure that their food suppliers are engaged in truly sustainable practices and provide their customers access to healthy, affordable food that is also beneficial to the long-term health of the planet.\r\n\r\nConclusion\r\nRegenerative agriculture is poised to move into the mainstream faster than many people expect, in my opinion. It is a classic triple-win situation. Consumers can receive healthier foods, farmers can have a more secure and prosperous future and the planet will benefit because regenerative agriculture provides it a better chance to heal and restore itself. At the confluence of these forces will be the grocer who serves as a conduit among the three.', 17, 'article3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `user_id`, `qty`) VALUES
(17, 10034, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(100) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `order_amount` float NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `payment` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `product_qty`, `order_amount`, `order_date`, `payment`, `status`) VALUES
(214, 10034, 2, 1, 42000, '2023-06-16 02:26:36', 'animation2.jpg', 'Shipped');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `category` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `desc` longtext NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `title`, `price`, `qty`, `desc`, `image`) VALUES
(10033, 0, 'Selada Hijau', 32000, 43, 'Benefits : Menghambat penuaan dini', 'Selada.jpg'),
(10034, 0, 'Bayam Jepang', 32000, 48, '', 'BayamJepang.png'),
(10035, 0, 'Tomat', 32000, 45, '', 'Tomat.jpg'),
(10036, 0, 'Kale', 32000, 47, '', 'Kale.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `mobile`, `email`, `password`, `address`) VALUES
(1, 'Mei', 'Sukriana', 82340050936, 'meisukriani@gmail.com', '202cb962ac59075b964b07152d234b70', 'Seganteng'),
(2, 'Ichsanul', 'Abid', 81997772333, 'ichsanulabid.08@gmail.com', '50de2320e7c2db0f5255e4857c86fb54', 'Selong, Lombok Timur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10039;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
