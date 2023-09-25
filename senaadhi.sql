-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 01:40 PM
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
-- Database: `senaadhi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bed_details`
--

CREATE TABLE `bed_details` (
  `id` int(11) NOT NULL,
  `mainCat` varchar(255) DEFAULT NULL,
  `bedcategorey` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `Productname` varchar(255) DEFAULT NULL,
  `beddingsize` varchar(255) DEFAULT NULL,
  `colorfamily` varchar(255) DEFAULT NULL,
  `warrantytype` varchar(255) DEFAULT NULL,
  `warrantyperiod` varchar(255) DEFAULT NULL,
  `coreconstruction` varchar(255) DEFAULT NULL,
  `patterntype` varchar(255) DEFAULT NULL,
  `linenfabric` varchar(255) DEFAULT NULL,
  `featuretype` varchar(255) DEFAULT NULL,
  `materialtype` varchar(255) DEFAULT NULL,
  `productInfo` varchar(255) DEFAULT NULL,
  `productDes` varchar(255) DEFAULT NULL,
  `productImage1` varchar(255) DEFAULT NULL,
  `productImage2` varchar(255) DEFAULT NULL,
  `productImage3` varchar(255) DEFAULT NULL,
  `productPrice` varchar(255) DEFAULT NULL,
  `discountpercentage` varchar(255) DEFAULT NULL,
  `productQuantity` varchar(255) DEFAULT NULL,
  `trending` varchar(255) DEFAULT NULL,
  `stockStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bed_details`
--

INSERT INTO `bed_details` (`id`, `mainCat`, `bedcategorey`, `brand`, `Productname`, `beddingsize`, `colorfamily`, `warrantytype`, `warrantyperiod`, `coreconstruction`, `patterntype`, `linenfabric`, `featuretype`, `materialtype`, `productInfo`, `productDes`, `productImage1`, `productImage2`, `productImage3`, `productPrice`, `discountpercentage`, `productQuantity`, `trending`, `stockStatus`) VALUES
(2, 'Bed', 'Bedding Sets', 'Piyestra', 'ss', 'Double', 'Multicolor', 'No Warranty', 'Null', 'Foam', 'Print', 'Cotton', 'Custom', NULL, 'vvdvfd', 'vdfvdf', 'ss_1.jpeg', 'ss_2.jpeg', 'ss_3.jpeg', '32', '3', '23', 'T', 'In Stock   ');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `user_id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`user_id`, `item_id`, `Quantity`, `color`, `size`) VALUES
(16, 107, 1, 'Multi', 'Double'),
(16, 99, 0, 'Sky Blue', 'XL');

-- --------------------------------------------------------

--
-- Table structure for table `chair_details`
--

CREATE TABLE `chair_details` (
  `id` int(11) NOT NULL,
  `mainCat` varchar(255) DEFAULT NULL,
  `chaircategorey` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `Productname` varchar(255) DEFAULT NULL,
  `armtype` varchar(255) DEFAULT NULL,
  `colorfamily` varchar(255) DEFAULT NULL,
  `backheight` varchar(255) DEFAULT NULL,
  `deskchairtype` varchar(255) DEFAULT NULL,
  `upholsterytype` varchar(255) DEFAULT NULL,
  `adjustablehandle` varchar(255) DEFAULT NULL,
  `warrantytype` varchar(255) DEFAULT NULL,
  `warrantyperiod` varchar(255) DEFAULT NULL,
  `coreconstruction` varchar(255) DEFAULT NULL,
  `patterntype` varchar(255) DEFAULT NULL,
  `linenfabric` varchar(255) DEFAULT NULL,
  `featuretype` varchar(255) DEFAULT NULL,
  `materialtype` varchar(255) DEFAULT NULL,
  `productInfo` varchar(255) DEFAULT NULL,
  `productDes` varchar(255) DEFAULT NULL,
  `productImage1` varchar(255) DEFAULT NULL,
  `productImage2` varchar(255) DEFAULT NULL,
  `productImage3` varchar(255) DEFAULT NULL,
  `productPrice` varchar(255) DEFAULT NULL,
  `discountpercentage` varchar(255) DEFAULT NULL,
  `productQuantity` varchar(255) DEFAULT NULL,
  `trending` varchar(255) DEFAULT NULL,
  `stockStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chair_details`
--

INSERT INTO `chair_details` (`id`, `mainCat`, `chaircategorey`, `brand`, `Productname`, `armtype`, `colorfamily`, `backheight`, `deskchairtype`, `upholsterytype`, `adjustablehandle`, `warrantytype`, `warrantyperiod`, `coreconstruction`, `patterntype`, `linenfabric`, `featuretype`, `materialtype`, `productInfo`, `productDes`, `productImage1`, `productImage2`, `productImage3`, `productPrice`, `discountpercentage`, `productQuantity`, `trending`, `stockStatus`) VALUES
(2, 'Chair', 'Chairs', 'Piyestra', 'bbbbbbbbbbb', 'Arms Include', 'Multicolor', 'Mid Back', 'Ergonomic Chair', 'Leather', 'Yes', 'No Warranty', 'Null', 'Foam', 'Print', 'Cotton', 'Custom', NULL, 'vvvxcvxcvxcv', 'xvxcvcxv', 'bbbbbbbbbbb_1.jpeg', 'bbbbbbbbbbb_2.jpeg', 'bbbbbbbbbbb_3.jpeg', '12', '12', '21', 'NULL', 'In Stock    ');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_type`) VALUES
(1, 'Colombo'),
(2, 'Anuradhapura'),
(3, 'Jaffna'),
(4, 'Kandy'),
(5, 'Galle'),
(6, 'Anuradhapura'),
(7, 'Mannar'),
(8, 'Chavakachcheri'),
(9, 'Anuradhapura'),
(10, 'Vavuniya'),
(11, 'Sri Jayewardenepura Kotte'),
(12, 'Dehiwela-Mount Lavinia'),
(13, 'Nuwara Eliya'),
(14, 'Polonnaruwa'),
(15, 'Point Pedro'),
(16, 'Valvettithurai'),
(17, 'Kurunegala'),
(18, 'Ratnapura'),
(19, 'Badulla'),
(20, 'Bandarawela'),
(21, 'Happutalle'),
(22, 'Trincomalee'),
(23, 'Kinniya'),
(24, 'Anuradhapura'),
(25, 'Batticaloa'),
(26, 'Eravur'),
(27, 'Kegalle');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `country_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_type`) VALUES
(1, 'Sri lanka');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `district_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `district_type`) VALUES
(1, 'Colombo'),
(2, 'Gampaha'),
(3, 'Kalutara'),
(4, 'Kurunegala'),
(5, 'Puttalam'),
(6, 'Vavuniya'),
(7, 'Mullaitivu'),
(8, 'Mannar'),
(9, 'Kilinochchi'),
(10, 'Jaffna'),
(11, 'Kegalle'),
(12, 'Ratnapura'),
(13, 'Matale'),
(14, 'Kandy'),
(15, 'Nuwara Eliya'),
(16, 'Polonnaruwa'),
(17, 'Anuradhapura');

-- --------------------------------------------------------

--
-- Table structure for table `fashion_clothing`
--

CREATE TABLE `fashion_clothing` (
  `id` int(11) NOT NULL,
  `clothing_style` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fashion_clothing`
--

INSERT INTO `fashion_clothing` (`id`, `clothing_style`) VALUES
(1, 'Casual'),
(2, 'Fashion'),
(3, 'Formal'),
(5, 'Youthful'),
(6, 'Basic');

-- --------------------------------------------------------

--
-- Table structure for table `fashion_clothing_material`
--

CREATE TABLE `fashion_clothing_material` (
  `id` int(11) NOT NULL,
  `material_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fashion_clothing_material`
--

INSERT INTO `fashion_clothing_material` (`id`, `material_name`) VALUES
(1, 'Not Specify'),
(2, 'Cotton'),
(3, 'Linen'),
(4, 'Viscose'),
(5, 'Other Material'),
(6, 'Poly-Cotton'),
(7, 'Polyester');

-- --------------------------------------------------------

--
-- Table structure for table `fashion_collar_type`
--

CREATE TABLE `fashion_collar_type` (
  `id` int(11) NOT NULL,
  `collar_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fashion_collar_type`
--

INSERT INTO `fashion_collar_type` (`id`, `collar_type`) VALUES
(1, 'Can not Specify '),
(2, 'Shirt Collar'),
(3, 'O-Neck'),
(4, 'High-Neck'),
(5, 'Crew Neck'),
(6, 'Polo Collar'),
(7, 'Standard Collar');

-- --------------------------------------------------------

--
-- Table structure for table `fashion_color_familiy`
--

CREATE TABLE `fashion_color_familiy` (
  `id` int(11) NOT NULL,
  `color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fashion_color_familiy`
--

INSERT INTO `fashion_color_familiy` (`id`, `color`) VALUES
(1, 'Black'),
(2, 'White'),
(3, 'Red'),
(4, 'Blue'),
(5, 'Pink'),
(6, 'Yellow'),
(7, 'Green'),
(12, 'Gray'),
(13, 'Orange'),
(14, 'Sky Blue'),
(15, 'Purple');

-- --------------------------------------------------------

--
-- Table structure for table `fashion_dress_length`
--

CREATE TABLE `fashion_dress_length` (
  `id` int(11) NOT NULL,
  `length` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fashion_dress_length`
--

INSERT INTO `fashion_dress_length` (`id`, `length`) VALUES
(1, 'Full Length'),
(2, 'Ankle'),
(3, 'Cropped'),
(4, 'Knee Length'),
(5, 'Short'),
(6, 'Ankle Length'),
(7, 'Below Knee'),
(8, 'Midi'),
(9, 'Long'),
(10, 'Mini');

-- --------------------------------------------------------

--
-- Table structure for table `fashion_fit_type`
--

CREATE TABLE `fashion_fit_type` (
  `id` int(11) NOT NULL,
  `fit_size` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fashion_fit_type`
--

INSERT INTO `fashion_fit_type` (`id`, `fit_size`) VALUES
(1, 'Regular'),
(2, 'Slim'),
(3, 'Oversized'),
(4, 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `fashion_fly`
--

CREATE TABLE `fashion_fly` (
  `id` int(11) NOT NULL,
  `fly_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fashion_fly`
--

INSERT INTO `fashion_fly` (`id`, `fly_type`) VALUES
(1, 'Regular'),
(2, 'Loose'),
(3, 'Skinny'),
(4, 'Straight');

-- --------------------------------------------------------

--
-- Table structure for table `fashion_items`
--

CREATE TABLE `fashion_items` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `sub_category` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `product_details` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `information` varchar(255) DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `listed_price_per_item` double DEFAULT NULL,
  `discounted_price_per_item` double DEFAULT NULL,
  `stock_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fashion_items`
--

INSERT INTO `fashion_items` (`id`, `category`, `sub_category`, `product_name`, `image1`, `image2`, `image3`, `product_details`, `description`, `information`, `quantity`, `size`, `listed_price_per_item`, `discounted_price_per_item`, `stock_status`) VALUES
(4, 'Shirts', 'Men', 'Men Linen Shirt', '5.jpg', '6.jpg', '7.jpg', 'Product details of Men\'s Linen Short Sleeve White Shirts Casual RS\r\n', 'Product details of Men\'s Linen Short Sleeve White Shirts Casual RS\r\nShirts Type: Casual Shirts\r\nMaterial: Linen\r\nCollar: Turn-down Collar\r\nClosure Type: Single Breasted\r\nSizes: S,M,L and XL\r\nSleeve Length: Short\r\nColors : Off white', 'If you need more information Please char with us \r\nSpecifications of Men\'s Linen Short Sleeve White Shirts Casual RS\r\nBrandNo BrandSKU136584714_LK-1129844913Fit TypeRegularCollar TypeShirt CollarSleevesShort SleeveClothing MaterialLinen', 10, 'L', 5000, 3999, 'In Stock'),
(5, 'Shirts', 'Men', 'Men\'s Linen Short Sleeve', '6.jpg', '7.jpg', '8.jpg', 'Men\'s Linen Short Sleeve Summer Shirts Casual Blue\r\n', 'Product details of Men\'s Linen Short Sleeve Summer Shirts Casual Blue\r\nShirts Type: Casual Shirts\r\nMaterial: Linen\r\nCollar: Turn-down Collar\r\nClosure Type: Single Breasted, Curve Hem\r\nSizes: S,M,L and XL\r\nSleeve Length: Short\r\nColors : Blue, Grey and Ligh', 'Specifications of Men\'s Linen Short Sleeve Summer Shirts Casual Blue\r\nBrandNo BrandSKU124910196_LK-1083049180Fit TypeRegularCollar TypeShirt CollarSleevesShort SleeveClothing MaterialLinenClothing StyleCasualPatternPlainwashable_typeHand And Machine Washa', NULL, 'S', 2000, 1750, 'In Stock'),
(6, 'aaaaaa', 'Women', 'aaaaaaaaaaaaaaaaaaaaa', '8.jpg', '9.jpg', NULL, 'aaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 11111, 11111, 'aaaaaaaaaaaaaaaaaaaaaaaaaa'),
(7, 'Trousher', 'Men', 'mens black trousher large', '1.jpg', NULL, NULL, 'crocadile,black', 'sadakdsajdjasdjkasnda', 'iiiiiiiiiiiiiiiiiii', 5, 'L', 3000, 2000, 'Out of Stock'),
(8, 'Trousher', 'Men', 'mens black trousher large', '4.jpg', NULL, NULL, 'crocadile,black', 'sadakdsajdjasdjkasnda', 'iiiiiiiiiiiiiiiiiii', 5, 'L', 3000, 2000, 'Out of Stock'),
(9, 'Trousher', 'Men', 'mens black trousher large', '8.jpg', NULL, NULL, 'crocadile,black', 'sadakdsajdjasdjkasnda', 'iiiiiiiiiiiiiiiiiii', 5, 'L', 3000, 2000, 'Out of Stock'),
(10, 'Trousher', 'Men', 'mens black trousher large', '8.jpg', NULL, NULL, 'crocadile,black', 'sadakdsajdjasdjkasnda', 'iiiiiiiiiiiiiiiiiii', 5, 'L', 3000, 2000, 'Out of Stock'),
(11, 'Trousher', 'Men', 'mens black trousher large', '5.jpg', NULL, NULL, 'crocadile,black', 'sadakdsajdjasdjkasnda', 'iiiiiiiiiiiiiiiiiii', 5, 'L', 3000, 2000, 'Out of Stock');

-- --------------------------------------------------------

--
-- Table structure for table `fashion_mens_brands`
--

CREATE TABLE `fashion_mens_brands` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fashion_mens_brands`
--

INSERT INTO `fashion_mens_brands` (`id`, `brand_name`) VALUES
(1, 'No Brand '),
(2, 'Moose'),
(3, 'The Factory Outlet'),
(4, 'TRE'),
(5, 'Symposim'),
(6, 'YFashion'),
(7, 'BG'),
(8, 'Signature'),
(9, 'A-Detail'),
(10, 'JUMP'),
(11, 'Emerald'),
(12, 'Frenzy'),
(13, 'Polo'),
(14, 'TROPICA'),
(15, 'INCERUN');

-- --------------------------------------------------------

--
-- Table structure for table `fashion_pattern_type`
--

CREATE TABLE `fashion_pattern_type` (
  `id` int(11) NOT NULL,
  `pattern` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fashion_pattern_type`
--

INSERT INTO `fashion_pattern_type` (`id`, `pattern`) VALUES
(1, 'Not Specify'),
(2, 'Plain'),
(3, 'Stripe'),
(4, 'Floral'),
(5, 'Geometric'),
(6, 'Animal Print'),
(7, 'Check'),
(8, 'Cartoon');

-- --------------------------------------------------------

--
-- Table structure for table `fashion_shirt_category`
--

CREATE TABLE `fashion_shirt_category` (
  `id` int(11) NOT NULL,
  `category_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fashion_shirt_category`
--

INSERT INTO `fashion_shirt_category` (`id`, `category_type`) VALUES
(2, 'Formal Shirt'),
(3, 'Polo Shirt');

-- --------------------------------------------------------

--
-- Table structure for table `fashion_size`
--

CREATE TABLE `fashion_size` (
  `id` int(11) NOT NULL,
  `size` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fashion_size`
--

INSERT INTO `fashion_size` (`id`, `size`) VALUES
(1, 'XS'),
(2, 'S'),
(3, 'M'),
(4, 'L'),
(5, 'XL'),
(7, 'XXL');

-- --------------------------------------------------------

--
-- Table structure for table `fashion_sleevs`
--

CREATE TABLE `fashion_sleevs` (
  `id` int(11) NOT NULL,
  `sleevs_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fashion_sleevs`
--

INSERT INTO `fashion_sleevs` (`id`, `sleevs_type`) VALUES
(1, 'Short Sleeve'),
(2, 'Long Sleeve'),
(3, 'Sleeveless'),
(4, '3/4 Sleeve');

-- --------------------------------------------------------

--
-- Table structure for table `fashion_tee_neckline`
--

CREATE TABLE `fashion_tee_neckline` (
  `id` int(11) NOT NULL,
  `tee_neckline_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fashion_tee_neckline`
--

INSERT INTO `fashion_tee_neckline` (`id`, `tee_neckline_type`) VALUES
(1, 'Round'),
(2, 'Collar'),
(3, 'V-Neck'),
(4, 'Square'),
(5, 'Scoop'),
(6, 'Grandad'),
(7, 'Boat Neck');

-- --------------------------------------------------------

--
-- Table structure for table `fashion_tee_sleeve`
--

CREATE TABLE `fashion_tee_sleeve` (
  `id` int(11) NOT NULL,
  `tee_sleeve_length` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fashion_tee_sleeve`
--

INSERT INTO `fashion_tee_sleeve` (`id`, `tee_sleeve_length`) VALUES
(1, 'Short'),
(2, 'Long'),
(3, 'Sleeveless');

-- --------------------------------------------------------

--
-- Table structure for table `fashion_trends`
--

CREATE TABLE `fashion_trends` (
  `id` int(11) NOT NULL,
  `trend_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fashion_trends`
--

INSERT INTO `fashion_trends` (`id`, `trend_name`) VALUES
(1, 'No Trend'),
(2, 'Party'),
(3, 'Rock and Roll'),
(4, 'Office'),
(5, 'Tropical Island'),
(6, 'Street Style'),
(7, 'Minimalist'),
(10, 'Military'),
(11, 'Nautical'),
(12, 'Korean'),
(13, 'Sreet Style');

-- --------------------------------------------------------

--
-- Table structure for table `fashion_trouser_category`
--

CREATE TABLE `fashion_trouser_category` (
  `id` int(11) NOT NULL,
  `category_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fashion_trouser_category`
--

INSERT INTO `fashion_trouser_category` (`id`, `category_type`) VALUES
(3, 'Cargo'),
(7, 'Mens Chinos'),
(8, 'Mens Pants'),
(9, 'Womens Jeans'),
(10, 'Womens Pants & Leggings'),
(11, 'Jogger and Sweats '),
(12, 'Womens Jeans');

-- --------------------------------------------------------

--
-- Table structure for table `fashion_t_shirt_category`
--

CREATE TABLE `fashion_t_shirt_category` (
  `id` int(11) NOT NULL,
  `category_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fashion_t_shirt_category`
--

INSERT INTO `fashion_t_shirt_category` (`id`, `category_type`) VALUES
(2, 'Mens T-Shirts'),
(3, 'Womens T-Shirts'),
(4, 'Unisexs Couple T-Shirts'),
(5, 'Mens T-Shirts & Tops'),
(6, 'Women Fashion Rings'),
(7, 'Unisexs Hoodies & Sweatshirts');

-- --------------------------------------------------------

--
-- Table structure for table `fashion_waist`
--

CREATE TABLE `fashion_waist` (
  `id` int(11) NOT NULL,
  `waist_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fashion_waist`
--

INSERT INTO `fashion_waist` (`id`, `waist_type`) VALUES
(1, 'Elasticated Waist'),
(2, 'Regular'),
(3, 'High'),
(4, 'Low');

-- --------------------------------------------------------

--
-- Table structure for table `fashion_warranty_type`
--

CREATE TABLE `fashion_warranty_type` (
  `id` int(11) NOT NULL,
  `warranty_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fashion_warranty_type`
--

INSERT INTO `fashion_warranty_type` (`id`, `warranty_type`) VALUES
(1, 'No warranty'),
(2, 'Non-local warranty'),
(3, 'Local seller warranty'),
(4, 'International manufacturer warranty'),
(5, 'Seller warranty');

-- --------------------------------------------------------

--
-- Table structure for table `fashion_womens_brands`
--

CREATE TABLE `fashion_womens_brands` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fashion_womens_brands`
--

INSERT INTO `fashion_womens_brands` (`id`, `brand_name`) VALUES
(1, 'No Brand '),
(2, 'Linear'),
(3, 'Linea Blue'),
(4, 'Janakala'),
(5, 'Wolfrock'),
(6, 'De Charles'),
(7, 'AZM'),
(8, 'Luxurious'),
(9, 'Kemi'),
(10, 'Kids Joy'),
(11, 'Oreo Fashion'),
(12, 'Moose'),
(13, 'The Factory Outlet'),
(14, 'TRE'),
(15, 'Spring & Summer'),
(16, 'Slay'),
(17, 'Button SL'),
(18, 'Milka');

-- --------------------------------------------------------

--
-- Table structure for table `fashion_womens_dress_shape`
--

CREATE TABLE `fashion_womens_dress_shape` (
  `id` int(11) NOT NULL,
  `shape` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fashion_womens_dress_shape`
--

INSERT INTO `fashion_womens_dress_shape` (`id`, `shape`) VALUES
(1, 'Not Specify'),
(2, 'Swing Dresses'),
(3, 'A-Line Dresses'),
(4, 'Tulip Dresses'),
(5, 'Shift Dresses'),
(6, 'Bodycon Dresses');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_adjustable_handle`
--

CREATE TABLE `furniture_adjustable_handle` (
  `id` int(11) NOT NULL,
  `availability` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furniture_adjustable_handle`
--

INSERT INTO `furniture_adjustable_handle` (`id`, `availability`) VALUES
(1, 'Yes'),
(2, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_arms`
--

CREATE TABLE `furniture_arms` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furniture_arms`
--

INSERT INTO `furniture_arms` (`id`, `type`) VALUES
(1, 'Arms Include'),
(2, 'Fixed Arms'),
(3, 'Armless');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_back_height`
--

CREATE TABLE `furniture_back_height` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furniture_back_height`
--

INSERT INTO `furniture_back_height` (`id`, `type`) VALUES
(1, 'Mid Back'),
(2, 'High Back');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_bedding_size`
--

CREATE TABLE `furniture_bedding_size` (
  `id` int(11) NOT NULL,
  `bed_size` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furniture_bedding_size`
--

INSERT INTO `furniture_bedding_size` (`id`, `bed_size`) VALUES
(1, 'Single'),
(2, 'Double'),
(3, 'King'),
(4, 'Full'),
(5, '3 Person'),
(6, 'Queen');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_beds_category`
--

CREATE TABLE `furniture_beds_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furniture_beds_category`
--

INSERT INTO `furniture_beds_category` (`id`, `category_name`) VALUES
(2, 'Bedding Sets'),
(4, 'Akira Bed'),
(5, 'Orante Bed'),
(6, 'Carving Storage Bed'),
(7, 'Beverly Bed'),
(8, 'Bedding Sets');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_brands`
--

CREATE TABLE `furniture_brands` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furniture_brands`
--

INSERT INTO `furniture_brands` (`id`, `brand_name`) VALUES
(1, 'Piyestra'),
(2, 'Hayleys'),
(3, 'Arpico'),
(4, 'Innovex');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_chairs_sub_category`
--

CREATE TABLE `furniture_chairs_sub_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furniture_chairs_sub_category`
--

INSERT INTO `furniture_chairs_sub_category` (`id`, `category_name`) VALUES
(1, 'Chairs'),
(2, 'Home Office Chairs'),
(3, 'Home Chairs'),
(4, 'Office Chairs'),
(5, 'Gaming Chairs');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_color_family`
--

CREATE TABLE `furniture_color_family` (
  `id` int(11) NOT NULL,
  `color_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furniture_color_family`
--

INSERT INTO `furniture_color_family` (`id`, `color_type`) VALUES
(1, 'Multicolor'),
(3, 'Multi'),
(4, 'Brown'),
(5, 'Purple'),
(6, 'Blue'),
(7, 'Pink');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_core_construction`
--

CREATE TABLE `furniture_core_construction` (
  `id` int(11) NOT NULL,
  `core_construction_ype` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furniture_core_construction`
--

INSERT INTO `furniture_core_construction` (`id`, `core_construction_ype`) VALUES
(1, 'Foam'),
(2, 'Inner Spring or Coil'),
(3, 'Latex');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_desk_chair_type`
--

CREATE TABLE `furniture_desk_chair_type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furniture_desk_chair_type`
--

INSERT INTO `furniture_desk_chair_type` (`id`, `type`) VALUES
(1, 'Ergonomic Chair'),
(2, 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_features`
--

CREATE TABLE `furniture_features` (
  `id` int(11) NOT NULL,
  `feature_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furniture_features`
--

INSERT INTO `furniture_features` (`id`, `feature_type`) VALUES
(1, 'Custom');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_linen_fabric`
--

CREATE TABLE `furniture_linen_fabric` (
  `id` int(11) NOT NULL,
  `fabric_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furniture_linen_fabric`
--

INSERT INTO `furniture_linen_fabric` (`id`, `fabric_type`) VALUES
(1, 'Cotton'),
(2, 'Cotton Blend'),
(3, 'Linen'),
(4, 'Wool');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_material`
--

CREATE TABLE `furniture_material` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furniture_material`
--

INSERT INTO `furniture_material` (`id`, `type`) VALUES
(1, 'Leather'),
(2, 'Fabric'),
(3, 'Fabric and Plastic'),
(4, 'Melamine');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_pattern`
--

CREATE TABLE `furniture_pattern` (
  `id` int(11) NOT NULL,
  `pattern` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furniture_pattern`
--

INSERT INTO `furniture_pattern` (`id`, `pattern`) VALUES
(1, 'Print'),
(2, 'Plain'),
(3, 'Normal'),
(4, 'Animal Print');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_sofas_sub_category`
--

CREATE TABLE `furniture_sofas_sub_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furniture_sofas_sub_category`
--

INSERT INTO `furniture_sofas_sub_category` (`id`, `category_name`) VALUES
(1, 'Sofas'),
(2, 'Office Sofas'),
(3, 'Home Sofas');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_sofa_size`
--

CREATE TABLE `furniture_sofa_size` (
  `id` int(11) NOT NULL,
  `sofa_size` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furniture_sofa_size`
--

INSERT INTO `furniture_sofa_size` (`id`, `sofa_size`) VALUES
(1, 'Not'),
(2, '35'),
(3, '36'),
(4, '38'),
(5, '39'),
(6, '40'),
(7, '41');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_upholstery`
--

CREATE TABLE `furniture_upholstery` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furniture_upholstery`
--

INSERT INTO `furniture_upholstery` (`id`, `type`) VALUES
(1, 'Leather'),
(2, 'Velvet'),
(3, 'Polyester'),
(4, 'No Available'),
(5, 'Leather'),
(6, 'Velvet'),
(7, 'Polyester');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_warranty_period`
--

CREATE TABLE `furniture_warranty_period` (
  `id` int(11) NOT NULL,
  `period` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furniture_warranty_period`
--

INSERT INTO `furniture_warranty_period` (`id`, `period`) VALUES
(1, 'Null'),
(2, '5 Years'),
(3, '1 Years'),
(4, '6 Month'),
(5, '10 Month');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_warranty_type`
--

CREATE TABLE `furniture_warranty_type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furniture_warranty_type`
--

INSERT INTO `furniture_warranty_type` (`id`, `type`) VALUES
(1, 'No Warranty'),
(2, 'Local Seller Warranty'),
(3, 'International Manufacturer Warranty'),
(4, 'Seller Warranty'),
(5, 'Agent Warranty');

-- --------------------------------------------------------

--
-- Table structure for table `inqueries`
--

CREATE TABLE `inqueries` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'New Inquery'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_category`
--

CREATE TABLE `main_category` (
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `main_category`
--

INSERT INTO `main_category` (`name`) VALUES
('Fission Item'),
('Smart Device');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `buyer` varchar(255) DEFAULT NULL,
  `residence` varchar(255) DEFAULT NULL,
  `delivery` varchar(255) DEFAULT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `total_price` varchar(255) DEFAULT NULL,
  `order_details` varchar(255) DEFAULT NULL,
  `timeSTMP` varchar(255) DEFAULT NULL,
  `tracking_id` varchar(255) DEFAULT NULL,
  `order_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `buyer_fname` varchar(255) DEFAULT NULL,
  `buyer_lname` varchar(255) DEFAULT NULL,
  `buyer_email` varchar(255) DEFAULT NULL,
  `buyer_contact` varchar(255) DEFAULT NULL,
  `buyer_residence1` varchar(255) DEFAULT NULL,
  `buyer_residence2` varchar(255) DEFAULT NULL,
  `buyer_country` varchar(255) DEFAULT NULL,
  `buyer_city` varchar(255) DEFAULT NULL,
  `buyer_postalcode` varchar(255) DEFAULT NULL,
  `shipping_fname` varchar(255) DEFAULT NULL,
  `shipping_lname` varchar(255) DEFAULT NULL,
  `shipping_email` varchar(255) DEFAULT NULL,
  `shipping_contact` varchar(255) DEFAULT NULL,
  `shipping_residence1` varchar(255) DEFAULT NULL,
  `shipping_residence2` varchar(255) DEFAULT NULL,
  `shipping_country` varchar(255) DEFAULT NULL,
  `shipping_city` varchar(255) DEFAULT NULL,
  `shipping_postalcode` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `order_detail` varchar(255) DEFAULT NULL,
  `productImage1` varchar(255) DEFAULT NULL,
  `item_id` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `product_cost` varchar(255) NOT NULL,
  `deleveryfee` varchar(255) NOT NULL,
  `color_family` varchar(255) NOT NULL,
  `timeSTMP` varchar(255) DEFAULT current_timestamp(),
  `date_of_delivered` date DEFAULT NULL,
  `total_price` varchar(255) DEFAULT NULL,
  `tracking_id` varchar(255) DEFAULT NULL,
  `Payement_method` varchar(255) DEFAULT NULL,
  `order_status` varchar(255) DEFAULT 'New Order'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `buyer_fname`, `buyer_lname`, `buyer_email`, `buyer_contact`, `buyer_residence1`, `buyer_residence2`, `buyer_country`, `buyer_city`, `buyer_postalcode`, `shipping_fname`, `shipping_lname`, `shipping_email`, `shipping_contact`, `shipping_residence1`, `shipping_residence2`, `shipping_country`, `shipping_city`, `shipping_postalcode`, `product_name`, `order_detail`, `productImage1`, `item_id`, `size`, `product_cost`, `deleveryfee`, `color_family`, `timeSTMP`, `date_of_delivered`, `total_price`, `tracking_id`, `Payement_method`, `order_status`) VALUES
(301, 'Chandiman', 'Keerthi Bandara', 'nawoda@gmail.com', '761124028', 'B88', 'pussahena', 'Sri Lanka', 'Badulla', '71234', 'Same as the Delivery Details', '', '', 'Same as the Delivery Details', 'Same as the Delivery Details', '', '', '', 'Same as the Delivery Details', 'sample 3', NULL, NULL, 63, 'XS', '2 *  RS.270', '2 *2', 'Black', '2023-09-23 12:38:14', '0000-00-00', '544', '', 'Cash On Delivery', 'Out for Delevery'),
(302, 'Chandiman', 'Keerthi Bandara', 'nawoda@gmail.com', '761124028', 'B88', 'pussahena', 'Sri Lanka', 'Badulla', '71234', 'Same as the Delivery Details', '', '', 'Same as the Delivery Details', 'Same as the Delivery Details', '', '', '', 'Same as the Delivery Details', 'sample 3', NULL, NULL, 63, 'XS', '2 *  RS.270', '2 *2', 'Black', '2023-09-23 12:38:39', '0000-00-00', '544', '', 'Cash On Delivery', 'Delevered'),
(303, 'Chandiman', 'Keerthi Bandara', 'nawoda@gmail.com', '761124028', 'B88', 'pussahena', 'Sri Lanka', 'Badulla', '71234', 'Same as the Delivery Details', '', '', 'Same as the Delivery Details', 'Same as the Delivery Details', '', '', '', 'Same as the Delivery Details', 'sample 3', NULL, NULL, 63, 'XS', '2 *  RS.270', '2 *2', 'Black', '2023-09-23 12:38:42', '0000-00-00', '544', '', 'Cash On Delivery', 'Delevered'),
(304, 'Chandiman', 'Keerthi Bandara', 'nawoda@gmail.com', '761124028', 'B88', 'pussahena', 'Sri Lanka', 'Badulla', '71234', 'Same as the Delivery Details', '', '', 'Same as the Delivery Details', 'Same as the Delivery Details', '', '', '', 'Same as the Delivery Details', 'sample 3', NULL, NULL, 63, 'XS', '2 *  RS.270', '2 *2', 'Black', '2023-09-23 15:28:13', NULL, '544', NULL, 'Cash On Delivery', 'New Order'),
(305, 'kamla', 'kamal', 'kamal@gmail.com', '761124028', 'B88 / pussahena /wegalla', 'colombo', 'Sri Lanka', 'Chavakachcheri', '3212', 'Same as the Delivery Details', '', '', 'Same as the Delivery Details', 'Same as the Delivery Details', '', '', '', 'Same as the Delivery Details', '', NULL, NULL, 0, '', '', '', '', '2023-09-24 13:42:42', NULL, '0', NULL, 'Cash On Delivery', 'New Order'),
(306, 'kamla', 'kamal', 'kamal@gmail.com', '761124028', 'B88 / pussahena /wegalla', 'colombo', 'Sri Lanka', 'Chavakachcheri', '3212', 'Same as the Delivery Details', '', '', 'Same as the Delivery Details', 'Same as the Delivery Details', '', '', '', 'Same as the Delivery Details', 'sample 3', NULL, NULL, 96, 'XS', '1 *  RS.800', '1 *10', 'Black', '2023-09-24 20:13:50', NULL, '810', NULL, 'Cash On Delivery', 'New Order'),
(307, 'kamla', 'kamal', 'kamal@gmail.com', '761124028', 'B88 / pussahena /wegalla', 'colombo', 'Sri Lanka', 'Chavakachcheri', '3212', 'Chandiman', 'Keerthi Bandara', 'chandimankeerthi22@gmail.com', '0761124028', 'B88', 'pussahena', 'Sri Lanka', 'bulathkohupitiya', '71234', 'shirt multiple', NULL, NULL, 79, 'XS', '10 *  RS.900', '10 *12', 'Black', '2023-09-24 20:15:48', NULL, '9120', NULL, 'Cash On Delivery', 'New Order'),
(308, 'kamla', 'kamal', 'kamal@gmail.com', '761124028', 'B88 / pussahena /wegalla', 'colombo', 'Sri Lanka', 'Chavakachcheri', '3212', 'Same as the Delivery Details', '', '', 'Same as the Delivery Details', 'Same as the Delivery Details', '', '', '', 'Same as the Delivery Details', 'shirt multiple', NULL, NULL, 79, 'XS', '2 *  RS.900', '2 *12', 'Black', '2023-09-24 20:17:00', NULL, '1824', NULL, 'Cash On Delivery', 'New Order'),
(309, 'kamla', 'kamal', 'kamal@gmail.com', '761124028', 'B88 / pussahena /wegalla', 'colombo', 'Sri Lanka', 'Chavakachcheri', '3212', 'Same as the Delivery Details', '', '', 'Same as the Delivery Details', 'Same as the Delivery Details', '', '', '', 'Same as the Delivery Details', 't shirt color seen ', NULL, NULL, 80, 'XS', '12 *  RS.900', '12 *12', 'Black', '2023-09-24 20:25:52', NULL, '10944', NULL, 'Cash On Delivery', 'New Order'),
(310, 'kamla', 'kamal', 'kamal@gmail.com', '761124028', 'B88 / pussahena /wegalla', 'colombo', 'Sri Lanka', 'Chavakachcheri', '3212', 'Same as the Delivery Details', '', '', 'Same as the Delivery Details', 'Same as the Delivery Details', '', '', '', 'Same as the Delivery Details', 'sample 46', NULL, NULL, 100, 'Full', '12 *  RS.900', '12 *12', 'Purple', '2023-09-24 20:33:47', NULL, '10944', NULL, 'Cash On Delivery', 'New Order'),
(311, 'kamla', 'kamal', 'kamal@gmail.com', '761124028', 'B88 / pussahena /wegalla', 'colombo', 'Sri Lanka', 'Chavakachcheri', '3212', 'Same as the Delivery Details', '', '', 'Same as the Delivery Details', 'Same as the Delivery Details', '', '', '', 'Same as the Delivery Details', 'sample 46', NULL, NULL, 100, 'Full', '12 *  RS.900', '12 *12', 'Purple', '2023-09-24 20:49:05', NULL, '10944', NULL, 'Cash On Delivery', 'New Order'),
(312, 'kamla', 'kamal', 'kamal@gmail.com', '761124028', 'B88 / pussahena /wegalla', 'colombo', 'Sri Lanka', 'Chavakachcheri', '3212', 'Same as the Delivery Details', '', '', 'Same as the Delivery Details', 'Same as the Delivery Details', '', '', '', 'Same as the Delivery Details', 'sample 3', NULL, NULL, 96, 'XS', '8 *  RS.800', '8 *10', 'Black', '2023-09-24 20:50:34', NULL, '6480', NULL, 'Cash On Delivery', 'New Order'),
(313, 'kamla', 'kamal', 'kamal@gmail.com', '761124028', 'B88 / pussahena /wegalla', 'colombo', 'Sri Lanka', 'Chavakachcheri', '3212', 'Same as the Delivery Details', '', '', 'Same as the Delivery Details', 'Same as the Delivery Details', '', '', '', 'Same as the Delivery Details', 't shir 2', NULL, NULL, 97, 'L', '10 *  RS.900', '10 *12', 'Green', '2023-09-24 20:51:57', NULL, '9120', NULL, 'Cash On Delivery', 'New Order'),
(314, 'kamla', 'kamal', 'kamal@gmail.com', '761124028', 'B88 / pussahena /wegalla', 'colombo', 'Sri Lanka', 'Chavakachcheri', '3212', 'Same as the Delivery Details', '', '', 'Same as the Delivery Details', 'Same as the Delivery Details', '', '', '', 'Same as the Delivery Details', 'multiple beds', NULL, NULL, 92, 'Single', '12 *  RS.900', '12 *10', 'Multicolor', '2023-09-24 21:02:01', NULL, '10920', NULL, 'Cash On Delivery', 'New Order'),
(315, 'kamla', 'kamal', 'kamal@gmail.com', '761124028', 'B88 / pussahena /wegalla', 'colombo', 'Sri Lanka', 'Chavakachcheri', '3212', 'Same as the Delivery Details', '', '', 'Same as the Delivery Details', 'Same as the Delivery Details', '', '', '', 'Same as the Delivery Details', 'multiple beds', NULL, NULL, 92, 'Single', '12 *  RS.900', '12 *10', 'Multicolor', '2023-09-24 21:02:05', '0000-00-00', '10920', '', 'Cash On Delivery', 'Order Confirmed'),
(316, 'kamla', 'kamal', 'kamal@gmail.com', '761124028', 'B88 / pussahena /wegalla', 'colombo', 'Sri Lanka', 'Chavakachcheri', '3212', 'Same as the Delivery Details', '', '', 'Same as the Delivery Details', 'Same as the Delivery Details', '', '', '', 'Same as the Delivery Details', 'sample 45', NULL, NULL, 99, 'XL', '10 *  RS.900', '10 *14', 'Sky Blue', '2023-09-24 21:03:55', NULL, '9140', NULL, 'Cash On Delivery', 'New Order'),
(317, 'kamla', 'kamal', 'kamal@gmail.com', '761124028', 'B88 / pussahena /wegalla', 'colombo', 'Sri Lanka', 'Chavakachcheri', '3212', 'Same as the Delivery Details', '', '', 'Same as the Delivery Details', 'Same as the Delivery Details', '', '', '', 'Same as the Delivery Details', 'multiple beds', NULL, NULL, 86, 'Single', '12 *  RS.900', '12 *10', 'Multicolor', '2023-09-24 22:36:02', NULL, '10920', NULL, 'Cash On Delivery', 'New Order'),
(318, 'kamla', 'kamal', 'kamal@gmail.com', '761124028', 'B88 / pussahena /wegalla', 'colombo', 'Sri Lanka', 'Chavakachcheri', '3212', 'Same as the Delivery Details', '', '', 'Same as the Delivery Details', 'Same as the Delivery Details', '', '', '', 'Same as the Delivery Details', 'shirt multiple', NULL, NULL, 79, 'XS', '1 *  RS.900', '1 *12', 'Black', '2023-09-24 22:41:30', NULL, '912', NULL, 'Cash On Delivery', 'New Order'),
(319, 'kamla', 'kamal', 'kamal@gmail.com', '761124028', 'B88 / pussahena /wegalla', 'colombo', 'Sri Lanka', 'Chavakachcheri', '3212', 'Same as the Delivery Details', '', '', 'Same as the Delivery Details', 'Same as the Delivery Details', '', '', '', 'Same as the Delivery Details', 'multiple beds', NULL, NULL, 86, 'Single', '1 *  RS.900', '1 *10', 'Multicolor', '2023-09-25 13:53:42', NULL, '3647', NULL, 'Cash On Delivery', 'New Order'),
(320, 'kamla', 'kamal', 'kamal@gmail.com', '761124028', 'B88 / pussahena /wegalla', 'colombo', 'Sri Lanka', 'Chavakachcheri', '3212', 'Same as the Delivery Details', '', '', 'Same as the Delivery Details', 'Same as the Delivery Details', '', '', '', 'Same as the Delivery Details', 'trouse color seen eka', NULL, NULL, 81, 'XS', '1 *  RS.900', '1 *13', 'Black', '2023-09-25 14:01:12', NULL, '913', NULL, 'Cash On Delivery', 'New Order'),
(321, 'kamla', 'kamal', 'kamal@gmail.com', '761124028', 'B88 / pussahena /wegalla', 'colombo', 'Sri Lanka', 'Chavakachcheri', '3212', 'Same as the Delivery Details', '', '', 'Same as the Delivery Details', 'Same as the Delivery Details', '', '', '', 'Same as the Delivery Details', 'trouse color seen eka', NULL, NULL, 81, 'XS', '1 *  RS.900', '1 *13', 'Black', '2023-09-25 14:01:12', NULL, '913', NULL, 'Cash On Delivery', 'New Order');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `description`, `image`, `price`) VALUES
(2, 'iphone 11', '2.png', 160000),
(3, 'iphone xr', '3.png', 130000),
(4, 'iphone 7', '4.png', 70000),
(5, 'iphone x', '1.png', 140000),
(6, 'iphone x', '1.jpg', 140000);

-- --------------------------------------------------------

--
-- Table structure for table `products_new`
--

CREATE TABLE `products_new` (
  `id` int(11) NOT NULL,
  `main_category` varchar(255) DEFAULT NULL,
  `sub_category_1` varchar(255) DEFAULT NULL,
  `sub_category_2` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `product_description` varchar(255) DEFAULT NULL,
  `product_information` varchar(255) DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `listed_price_per_item` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `stock_status` varchar(255) DEFAULT NULL,
  `trending` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(11) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `mainCat` varchar(255) DEFAULT NULL,
  `sub_categorey` varchar(255) DEFAULT NULL,
  `gendertype` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `Productname` varchar(255) DEFAULT NULL,
  `productPrice` varchar(255) DEFAULT NULL,
  `shipping_cost` int(11) NOT NULL,
  `discountpercentage` varchar(255) DEFAULT NULL,
  `productQuantity` int(11) DEFAULT NULL,
  `sleevetype` varchar(255) DEFAULT NULL,
  `fitype` varchar(255) DEFAULT NULL,
  `patterntype` varchar(255) DEFAULT NULL,
  `collartype` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `colorfamily` varchar(255) DEFAULT NULL,
  `clothingmaterial` varchar(255) DEFAULT NULL,
  `warrantytype` varchar(255) DEFAULT NULL,
  `warrantyperiod` varchar(255) DEFAULT NULL,
  `trendtype` varchar(255) DEFAULT NULL,
  `clothingstyle` varchar(255) DEFAULT NULL,
  `productInfo` varchar(255) DEFAULT NULL,
  `productDes` varchar(255) DEFAULT NULL,
  `productImage1` varchar(255) DEFAULT NULL,
  `productImage2` varchar(255) DEFAULT NULL,
  `productImage3` varchar(255) DEFAULT NULL,
  `tee_neckline` varchar(255) DEFAULT NULL,
  `tee_sleeve` varchar(255) DEFAULT NULL,
  `length` varchar(255) DEFAULT NULL,
  `coreconstruction` varchar(255) DEFAULT NULL,
  `linenfabric` varchar(255) DEFAULT NULL,
  `featuretype` varchar(255) DEFAULT NULL,
  `materialtype` varchar(255) DEFAULT NULL,
  `beddingsize` varchar(255) DEFAULT NULL,
  `armtype` varchar(255) DEFAULT NULL,
  `backheight` varchar(255) DEFAULT NULL,
  `deskchairtype` varchar(255) DEFAULT NULL,
  `upholsterytype` varchar(255) DEFAULT NULL,
  `adjustablehandle` varchar(255) DEFAULT NULL,
  `trending` varchar(255) DEFAULT NULL,
  `stockStatus` varchar(255) DEFAULT 'In Stock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_type`, `mainCat`, `sub_categorey`, `gendertype`, `brand`, `Productname`, `productPrice`, `shipping_cost`, `discountpercentage`, `productQuantity`, `sleevetype`, `fitype`, `patterntype`, `collartype`, `size`, `colorfamily`, `clothingmaterial`, `warrantytype`, `warrantyperiod`, `trendtype`, `clothingstyle`, `productInfo`, `productDes`, `productImage1`, `productImage2`, `productImage3`, `tee_neckline`, `tee_sleeve`, `length`, `coreconstruction`, `linenfabric`, `featuretype`, `materialtype`, `beddingsize`, `armtype`, `backheight`, `deskchairtype`, `upholsterytype`, `adjustablehandle`, `trending`, `stockStatus`) VALUES
(81, 'fashion', 'Trouser', 'Cargo', 'Common', 'No Brand ', 'trouse color seen eka', '1000', 13, '10', 4, NULL, NULL, 'Not Specify', NULL, 'XS,S,M', 'Black,White,Red', 'Not Specify', 'Seller warranty', 'Null', 'No Trend', 'Casual', 'trouse color seen eka', 'trouse color seen eka', 'trouse color seen eka_1.png', 'trouse color seen eka_2.png', 'trouse color seen eka_3.png', NULL, NULL, 'Full Length', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NULL', ''),
(85, 'furniture', 'Chair', 'Chairs', NULL, 'Piyestra', 'multiple chair ', '1000', 12, '10', 0, NULL, NULL, 'Print', NULL, NULL, 'Multicolor,Purple', NULL, 'No Warranty', 'Null', NULL, NULL, 'multiple chair ', 'multiple chair ', 'multiple chair _1.jpeg', 'multiple chair _2.jpeg', 'multiple chair _3.jpeg', NULL, NULL, NULL, 'Foam', 'Cotton', 'Custom', 'Leather', NULL, 'Arms Include', 'Mid Back', 'Ergonomic Chair', 'Leather', 'Yes', 'NULL', ''),
(86, 'furniture', 'Bed', 'Bedding Sets', NULL, 'Piyestra', 'multiple beds', '1000', 10, '10', -2, NULL, NULL, 'Print', NULL, NULL, 'Multicolor,Multi,Brown', NULL, 'No Warranty', 'Null', NULL, NULL, 'multiple beds', 'multiple beds', 'multiple beds_1.jpeg', 'multiple beds_2.jpeg', 'multiple beds_3.jpeg', NULL, NULL, NULL, 'Foam', 'Cotton', 'Custom', 'Leather', 'Single,Double,King', NULL, NULL, NULL, NULL, NULL, 'T', ''),
(97, 'fashion', 'T-shirt', 'Mens T-Shirts', 'Common', 'No Brand ', 't shir 2', '1000', 12, '10', 2, 'Short Sleeve', 'Regular', 'Not Specify', 'Can not Specify ', 'L,XXL', 'Green,Gray', 'Not Specify', 'No warranty', 'Null', 'No Trend', 'Casual', 't shir 2', 't shir 2', 't shir 2_1.jpeg', 't shir 2_2.jpeg', 't shir 2_3.jpeg', 'Round', 'Short', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NULL', 'In Stock'),
(98, 'fashion', 'Shirt', 'Formal Shirt\r\n', 'Common', 'No Brand ', 'sample 44', '1000', 12, '10', 12, 'Short Sleeve', 'Regular', 'Not Specify', 'Can not Specify ', 'XXL', 'Orange', 'Not Specify', 'No warranty', 'Null', 'No Trend', 'Casual', 'sample 44', 'sample 44', 'sample 44_1.jpeg', 'sample 44_2.jpeg', 'sample 44_3.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NULL', 'Out Of Stock'),
(99, 'fashion', 'Trouser', 'Cargo', 'Common', 'No Brand ', 'sample 45', '1000', 14, '10', 0, NULL, NULL, 'Not Specify', NULL, 'XL,XXL', 'Sky Blue,Purple', 'Not Specify', 'No warranty', 'Null', 'No Trend', 'Casual', 'sample 45', 'sample 45', 'sample 45_1.png', 'sample 45_2.png', 'sample 45_3.png', NULL, NULL, 'Full Length', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'T', 'In Stock'),
(101, 'furniture', 'Chair', 'Chairs', NULL, 'Piyestra', 'sample 47', '1200', 12, '12', 21, NULL, NULL, 'Print', NULL, NULL, 'Brown,Pink', NULL, 'No Warranty', 'Null', NULL, NULL, 'sample 47', 'sample 47', 'sample 47_1.png', 'sample 47_2.png', 'sample 47_3.png', NULL, NULL, NULL, 'Foam', 'Cotton', 'Custom', 'Leather', NULL, 'Arms Include', 'Mid Back', 'Ergonomic Chair', 'Leather', 'Yes', 'NULL', 'In Stock'),
(102, 'fashion', 'Shirt', 'Polo Shirt', 'Women', 'YFashion', 'sasas', '12', 12, '21', 1, 'Short Sleeve', 'Regular', 'Not Specify', 'Can not Specify ', 'S,M,L', 'White,Red,Blue', 'Not Specify', 'No warranty', 'Null', 'No Trend', 'Casual', 'asd', 'dasds', 'sasas_1.jpeg', 'sasas_2.jpeg', 'sasas_3.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'T', 'In Stock'),
(103, 'fashion', 'T-shirt', 'Mens T-Shirts', 'Common', 'No Brand ', 'bbbbbbbbbbb', '123', 23, '3', 23, 'Short Sleeve', 'Regular', 'Not Specify', 'Can not Specify ', 'XS,S', 'Pink,Yellow', 'Not Specify', 'No warranty', 'Null', 'No Trend', 'Casual', 'fgewrf', 'fwfewef', 'bbbbbbbbbbb_1.jpeg', 'bbbbbbbbbbb_2.jpeg', 'bbbbbbbbbbb_3.jpeg', 'Round', 'Short', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NULL', 'In Stock'),
(104, 'fashion', 'T-shirt', 'Mens T-Shirts', 'Common', 'No Brand ', 'bbbbbbbbbbb', '123', 23, '3', 23, 'Short Sleeve', 'Regular', 'Not Specify', 'Can not Specify ', 'XS,S', 'Pink,Yellow', 'Not Specify', 'No warranty', 'Null', 'No Trend', 'Casual', 'fgewrf', 'fwfewef', 'bbbbbbbbbbb_1.jpeg', 'bbbbbbbbbbb_2.jpeg', 'bbbbbbbbbbb_3.jpeg', 'Round', 'Short', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'T', 'In Stock'),
(107, 'furniture', 'Bed', 'Bedding Sets', NULL, 'Piyestra', 'wdadw', '21', 23, '12', 32, NULL, NULL, 'Print', NULL, NULL, 'Multi', NULL, 'No Warranty', 'Null', NULL, NULL, 'wfdewf', 'ffdf', 'wdadw_1.jpeg', 'wdadw_2.jpeg', 'wdadw_3.jpeg', NULL, NULL, NULL, 'Foam', 'Cotton', 'Custom', 'Leather', 'Double', NULL, NULL, NULL, NULL, NULL, 'T', 'In Stock'),
(108, 'furniture', 'Bed', 'Bedding Sets', NULL, 'Piyestra', 'wdadw', '21', 23, '12', 32, NULL, NULL, 'Print', NULL, NULL, 'Multi', NULL, 'No Warranty', 'Null', NULL, NULL, 'wfdewf', 'ffdf', 'wdadw_1.jpeg', 'wdadw_2.jpeg', 'wdadw_3.jpeg', NULL, NULL, NULL, 'Foam', 'Cotton', 'Custom', 'Leather', 'Double', NULL, NULL, NULL, NULL, NULL, 'NULL', 'In Stock'),
(109, 'furniture', 'Chair', 'Chairs', NULL, 'Piyestra', 'bbbbbbbbbbb', '132', 21, '21', 21, NULL, NULL, 'Print', NULL, NULL, 'Multicolor,Multi', NULL, 'No Warranty', 'Null', NULL, NULL, 'fweef', 'fwef', 'bbbbbbbbbbb_1.jpeg', 'bbbbbbbbbbb_2.jpeg', 'bbbbbbbbbbb_3.jpeg', NULL, NULL, NULL, 'Foam', 'Cotton', 'Custom', 'Leather', NULL, 'Arms Include', 'Mid Back', 'Ergonomic Chair', 'Leather', 'Yes', 'T', 'In Stock'),
(111, 'furniture', 'Bed', 'Bedding Sets', NULL, 'Piyestra', 'bbbbbbbbbbb', '12', 31, '2', 21, NULL, NULL, 'Print', NULL, NULL, 'Multi', NULL, 'No Warranty', 'Null', NULL, NULL, 'dad', 'daw', 'bbbbbbbbbbb_1.jpeg', 'bbbbbbbbbbb_2.jpeg', 'bbbbbbbbbbb_3.jpeg', NULL, NULL, NULL, 'Foam', 'Cotton', 'Custom', 'Leather', 'Double', NULL, NULL, NULL, NULL, NULL, 'NULL', 'In Stock'),
(113, 'fashion', 'T-shirt', 'Mens T-Shirts', 'Common', 'No Brand ', 'bbbbbbbbbbb1', '222', 1, '2', 2, 'Short Sleeve', 'Regular', 'Not Specify', 'Can not Specify ', 'XS', 'Blue', 'Not Specify', 'No warranty', 'Null', 'No Trend', 'Casual', 'dad', 'dadw', 'bbbbbbbbbbb1_1.jpeg', 'bbbbbbbbbbb1_2.jpeg', 'bbbbbbbbbbb1_3.jpeg', 'Round', 'Short', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NULL', 'In Stock'),
(114, 'fashion', 'T-shirt', 'Mens T-Shirts', 'Common', 'No Brand ', 'bbbbbbbbbbb1', '222', 1, '2', 2, 'Short Sleeve', 'Regular', 'Not Specify', 'Can not Specify ', 'XS', 'Blue', 'Not Specify', 'No warranty', 'Null', 'No Trend', 'Casual', 'dad', 'dadw', 'bbbbbbbbbbb1_1.jpeg', 'bbbbbbbbbbb1_2.jpeg', 'bbbbbbbbbbb1_3.jpeg', 'Round', 'Short', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NULL', 'In Stock');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name_of_reviwer` varchar(255) DEFAULT NULL,
  `email_of_reviwer` varchar(255) DEFAULT NULL,
  `reviwes` varchar(255) DEFAULT NULL,
  `review_time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shirt_details`
--

CREATE TABLE `shirt_details` (
  `id` int(11) NOT NULL,
  `mainCat` varchar(255) DEFAULT NULL,
  `shirtecategorey` varchar(255) DEFAULT NULL,
  `gendertype` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `Productname` varchar(255) DEFAULT NULL,
  `sleevetype` varchar(255) DEFAULT NULL,
  `fitype` varchar(255) DEFAULT NULL,
  `patterntype` varchar(255) DEFAULT NULL,
  `collartype` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `colorfamily` varchar(255) DEFAULT NULL,
  `clothingmaterial` varchar(255) DEFAULT NULL,
  `warrantytype` varchar(255) DEFAULT NULL,
  `warrantyperiod` varchar(255) DEFAULT NULL,
  `clothingstyle` varchar(255) DEFAULT NULL,
  `productInfo` varchar(255) DEFAULT NULL,
  `productDes` varchar(255) DEFAULT NULL,
  `productImage1` varchar(255) DEFAULT NULL,
  `productImage2` varchar(255) DEFAULT NULL,
  `productImage3` varchar(255) DEFAULT NULL,
  `productPrice` varchar(255) DEFAULT NULL,
  `discountpercentage` varchar(255) DEFAULT NULL,
  `productQuantity` varchar(255) DEFAULT NULL,
  `trendtype` varchar(255) DEFAULT NULL,
  `trending` varchar(255) DEFAULT NULL,
  `stockStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shirt_details`
--

INSERT INTO `shirt_details` (`id`, `mainCat`, `shirtecategorey`, `gendertype`, `brand`, `Productname`, `sleevetype`, `fitype`, `patterntype`, `collartype`, `size`, `colorfamily`, `clothingmaterial`, `warrantytype`, `warrantyperiod`, `clothingstyle`, `productInfo`, `productDes`, `productImage1`, `productImage2`, `productImage3`, `productPrice`, `discountpercentage`, `productQuantity`, `trendtype`, `trending`, `stockStatus`) VALUES
(1, 'Shirt', 'Formal Shirt\r\n', 'Common', 'No Brand ', 'dsadas', 'Short Sleeve', 'Regular', 'Not Specify', 'Can not Specify ', 'XS', 'Black', 'Not Specify', 'No warranty', 'Null', 'Casual', 'vd vdfvfd', 'dvdfvfdv', 'dsadas_1.jpeg', 'dsadas_2.jpeg', 'dsadas_3.jpeg', '12321', '123', '32', 'No Trend', 'T', 'YES  '),
(2, 'Shirt', 'Formal Shirt\r\n', 'Common', 'No Brand ', 'hhhgfh', 'Long Sleeve', 'Regular', 'Not Specify', 'Can not Specify ', 'XS', 'Black', 'Not Specify', 'No warranty', 'Null', 'Casual', 'sdasdsad', 'dsdsd', 'hhhgfh_1.png', 'hhhgfh_2.png', 'hhhgfh_3.png', '121', '43', '43', 'No Trend', 'NULL', 'In Stock  ');

-- --------------------------------------------------------

--
-- Table structure for table `trouser_details`
--

CREATE TABLE `trouser_details` (
  `id` int(11) NOT NULL,
  `mainCat` varchar(255) DEFAULT NULL,
  `trousercategorey` varchar(255) DEFAULT NULL,
  `gendertype` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `Productname` varchar(255) DEFAULT NULL,
  `productPrice` varchar(255) DEFAULT NULL,
  `discountpercentage` varchar(255) DEFAULT NULL,
  `productQuantity` varchar(255) DEFAULT NULL,
  `patterntype` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `colorfamily` varchar(255) DEFAULT NULL,
  `clothingmaterial` varchar(255) DEFAULT NULL,
  `warrantytype` varchar(255) DEFAULT NULL,
  `warrantyperiod` varchar(255) DEFAULT NULL,
  `clothingstyle` varchar(255) DEFAULT NULL,
  `length` varchar(255) DEFAULT NULL,
  `productInfo` varchar(255) DEFAULT NULL,
  `productDes` varchar(255) DEFAULT NULL,
  `productImage1` varchar(255) DEFAULT NULL,
  `productImage2` varchar(255) DEFAULT NULL,
  `productImage3` varchar(255) DEFAULT NULL,
  `trending` varchar(255) DEFAULT NULL,
  `trendtype` varchar(255) DEFAULT NULL,
  `stockStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trouser_details`
--

INSERT INTO `trouser_details` (`id`, `mainCat`, `trousercategorey`, `gendertype`, `brand`, `Productname`, `productPrice`, `discountpercentage`, `productQuantity`, `patterntype`, `size`, `colorfamily`, `clothingmaterial`, `warrantytype`, `warrantyperiod`, `clothingstyle`, `length`, `productInfo`, `productDes`, `productImage1`, `productImage2`, `productImage3`, `trending`, `trendtype`, `stockStatus`) VALUES
(2, 'Trouser', 'Cargo', 'Common', 'No Brand', 'fdvdvdf', '322', '23122', '322', 'Not Specify', 'XS', 'Black', 'Not Specify', 'No warranty', 'Null', 'Casual', 'Full Length', 'ffdvdfvd', 'vdvvd', 'fdvdvdf_1.jpeg', 'fdvdvdf_2.jpeg', 'fdvdvdf_3.jpeg', 'NULL', 'No Trend', 'In Stock  ');

-- --------------------------------------------------------

--
-- Table structure for table `tshirt_details`
--

CREATE TABLE `tshirt_details` (
  `id` int(11) NOT NULL,
  `mainCat` varchar(255) DEFAULT NULL,
  `tshirtecategorey` varchar(255) DEFAULT NULL,
  `gendertype` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `Productname` varchar(255) DEFAULT NULL,
  `productPrice` varchar(255) DEFAULT NULL,
  `discountpercentage` varchar(255) DEFAULT NULL,
  `productQuantity` varchar(255) DEFAULT NULL,
  `sleevetype` varchar(255) DEFAULT NULL,
  `fitype` varchar(255) DEFAULT NULL,
  `patterntype` varchar(255) DEFAULT NULL,
  `collartype` varchar(255) DEFAULT NULL,
  `tee_neckline` varchar(255) DEFAULT NULL,
  `tee_sleeve` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `colorfamily` varchar(255) DEFAULT NULL,
  `clothingmaterial` varchar(255) DEFAULT NULL,
  `warrantytype` varchar(255) DEFAULT NULL,
  `warrantyperiod` varchar(255) DEFAULT NULL,
  `trendtype` varchar(255) DEFAULT NULL,
  `clothingstyle` varchar(255) DEFAULT NULL,
  `productInfo` varchar(255) DEFAULT NULL,
  `productDes` varchar(255) DEFAULT NULL,
  `productImage1` varchar(255) DEFAULT NULL,
  `productImage2` varchar(255) DEFAULT NULL,
  `productImage3` varchar(255) DEFAULT NULL,
  `trending` varchar(255) DEFAULT NULL,
  `stockStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tshirt_details`
--

INSERT INTO `tshirt_details` (`id`, `mainCat`, `tshirtecategorey`, `gendertype`, `brand`, `Productname`, `productPrice`, `discountpercentage`, `productQuantity`, `sleevetype`, `fitype`, `patterntype`, `collartype`, `tee_neckline`, `tee_sleeve`, `size`, `colorfamily`, `clothingmaterial`, `warrantytype`, `warrantyperiod`, `trendtype`, `clothingstyle`, `productInfo`, `productDes`, `productImage1`, `productImage2`, `productImage3`, `trending`, `stockStatus`) VALUES
(2, 'T-shirt', 'Mens T-Shirts', 'Men', 'No Brand', 'sample', '34', '34', '43', 'Short Sleeve', 'Regular', 'Not Specify', 'Can not Specify', 'Round', 'Short', 'XS', 'Black', 'Not Specify', 'No warranty', 'Null', 'No Trend', 'Casual', 'sample', 'sample', 'sample_1.jpeg', 'sample_2.jpeg', 'sample_3.jpeg', 'NULL', 'In Stock        '),
(3, 'T-shirt', 'Mens T-Shirts', 'Common', 'No Brand ', 'sdasdsdsd', '123', '323', '32', 'Long Sleeve', 'Regular', 'Not Specify', 'Can not Specify ', 'Round', 'Short', 'XS', 'Black', 'Not Specify', 'No warranty', 'Null', 'No Trend', 'Casual', 'fedffdfdf', 'dfgg', 'sdasdsdsd_1.jpeg', 'sdasdsdsd_2.jpeg', 'sdasdsdsd_3.jpeg', 'NULL', 'In Stock      '),
(4, 'T-shirt', 'Mens T-Shirts', 'Common', 'No Brand ', 'bfbfgbfg', '45', '4324324', '4544', 'Short Sleeve', 'Regular', 'Not Specify', 'Can not Specify ', 'Round', 'Short', 'XS', 'Black', 'Not Specify', 'No warranty', 'Null', 'No Trend', 'Casual', 'nhgmgmg', 'nghngngh', 'bfbfgbfg_1.jpeg', 'bfbfgbfg_2.jpeg', 'bfbfgbfg_3.jpeg', 'NULL', 'In Stock'),
(5, 'T-shirt', 'Mens T-Shirts', 'Common', 'No Brand ', 'bfbfgbfg', '45', '4324324', '4544', 'Short Sleeve', 'Regular', 'Not Specify', 'Can not Specify ', 'Round', 'Short', 'XS', 'Black', 'Not Specify', 'No warranty', 'Null', 'No Trend', 'Casual', 'nhgmgmg', 'nghngngh', 'bfbfgbfg_1.jpeg', 'bfbfgbfg_2.jpeg', 'bfbfgbfg_3.jpeg', NULL, 'In Stock'),
(6, 'T-shirt', 'Mens T-Shirts', 'Common', 'No Brand ', 'nghngngn', '545', '4324', '43', 'Short Sleeve', 'Regular', 'Not Specify', 'Can not Specify ', 'Round', 'Short', 'XS', 'Black', 'Not Specify', 'No warranty', 'Null', 'No Trend', 'Casual', 'ghngngngn', 'gngngng', 'nghngngn_1.png', 'nghngngn_2.png', 'nghngngn_3.png', NULL, 'In Stock'),
(7, 'T-shirt', 'Mens T-Shirts', 'Common', 'No Brand ', 'vsdvvfdv', '4545', '54545', '454', 'Short Sleeve', 'Regular', 'Not Specify', 'Can not Specify ', 'Round', 'Short', 'XS', 'Black', 'Not Specify', 'No warranty', 'Null', 'No Trend', 'Casual', 'fvdvdfvdfvdv', 'vdvdvd', 'vsdvvfdv_1.png', 'vsdvvfdv_2.png', 'vsdvvfdv_3.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `customer_fname` varchar(255) DEFAULT NULL,
  `customer_lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `residence1` varchar(255) DEFAULT NULL,
  `residence2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `district` varchar(255) NOT NULL,
  `userRole` varchar(255) NOT NULL DEFAULT 'non admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `customer_fname`, `customer_lname`, `email`, `contact_number`, `residence1`, `residence2`, `city`, `country`, `postal_code`, `user_password`, `district`, `userRole`) VALUES
(16, 'kamla', 'kamal', 'kamal@gmail.com', '0761124028', 'B88 / pussahena /wegalla', 'colombo', 'Chavakachcheri', 'Sri Lanka', '3212', '1234', 'Ratnapura', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bed_details`
--
ALTER TABLE `bed_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`user_id`,`item_id`);

--
-- Indexes for table `chair_details`
--
ALTER TABLE `chair_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion_clothing`
--
ALTER TABLE `fashion_clothing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion_clothing_material`
--
ALTER TABLE `fashion_clothing_material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion_collar_type`
--
ALTER TABLE `fashion_collar_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion_color_familiy`
--
ALTER TABLE `fashion_color_familiy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion_dress_length`
--
ALTER TABLE `fashion_dress_length`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion_fit_type`
--
ALTER TABLE `fashion_fit_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion_fly`
--
ALTER TABLE `fashion_fly`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion_items`
--
ALTER TABLE `fashion_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion_mens_brands`
--
ALTER TABLE `fashion_mens_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion_pattern_type`
--
ALTER TABLE `fashion_pattern_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion_shirt_category`
--
ALTER TABLE `fashion_shirt_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion_size`
--
ALTER TABLE `fashion_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion_sleevs`
--
ALTER TABLE `fashion_sleevs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion_tee_neckline`
--
ALTER TABLE `fashion_tee_neckline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion_tee_sleeve`
--
ALTER TABLE `fashion_tee_sleeve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion_trends`
--
ALTER TABLE `fashion_trends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion_trouser_category`
--
ALTER TABLE `fashion_trouser_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion_t_shirt_category`
--
ALTER TABLE `fashion_t_shirt_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion_waist`
--
ALTER TABLE `fashion_waist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion_warranty_type`
--
ALTER TABLE `fashion_warranty_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion_womens_brands`
--
ALTER TABLE `fashion_womens_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion_womens_dress_shape`
--
ALTER TABLE `fashion_womens_dress_shape`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_adjustable_handle`
--
ALTER TABLE `furniture_adjustable_handle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_arms`
--
ALTER TABLE `furniture_arms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_back_height`
--
ALTER TABLE `furniture_back_height`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_bedding_size`
--
ALTER TABLE `furniture_bedding_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_beds_category`
--
ALTER TABLE `furniture_beds_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_brands`
--
ALTER TABLE `furniture_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_chairs_sub_category`
--
ALTER TABLE `furniture_chairs_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_color_family`
--
ALTER TABLE `furniture_color_family`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_core_construction`
--
ALTER TABLE `furniture_core_construction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_desk_chair_type`
--
ALTER TABLE `furniture_desk_chair_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_features`
--
ALTER TABLE `furniture_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_linen_fabric`
--
ALTER TABLE `furniture_linen_fabric`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_material`
--
ALTER TABLE `furniture_material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_pattern`
--
ALTER TABLE `furniture_pattern`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_sofas_sub_category`
--
ALTER TABLE `furniture_sofas_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_sofa_size`
--
ALTER TABLE `furniture_sofa_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_upholstery`
--
ALTER TABLE `furniture_upholstery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_warranty_period`
--
ALTER TABLE `furniture_warranty_period`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_warranty_type`
--
ALTER TABLE `furniture_warranty_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inqueries`
--
ALTER TABLE `inqueries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_category`
--
ALTER TABLE `main_category`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_new`
--
ALTER TABLE `products_new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shirt_details`
--
ALTER TABLE `shirt_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trouser_details`
--
ALTER TABLE `trouser_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tshirt_details`
--
ALTER TABLE `tshirt_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bed_details`
--
ALTER TABLE `bed_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chair_details`
--
ALTER TABLE `chair_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `fashion_clothing`
--
ALTER TABLE `fashion_clothing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fashion_clothing_material`
--
ALTER TABLE `fashion_clothing_material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fashion_collar_type`
--
ALTER TABLE `fashion_collar_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fashion_color_familiy`
--
ALTER TABLE `fashion_color_familiy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `fashion_dress_length`
--
ALTER TABLE `fashion_dress_length`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fashion_fit_type`
--
ALTER TABLE `fashion_fit_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fashion_fly`
--
ALTER TABLE `fashion_fly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fashion_items`
--
ALTER TABLE `fashion_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `fashion_mens_brands`
--
ALTER TABLE `fashion_mens_brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `fashion_pattern_type`
--
ALTER TABLE `fashion_pattern_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fashion_shirt_category`
--
ALTER TABLE `fashion_shirt_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `fashion_size`
--
ALTER TABLE `fashion_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `fashion_sleevs`
--
ALTER TABLE `fashion_sleevs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fashion_tee_neckline`
--
ALTER TABLE `fashion_tee_neckline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fashion_tee_sleeve`
--
ALTER TABLE `fashion_tee_sleeve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fashion_trends`
--
ALTER TABLE `fashion_trends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `fashion_trouser_category`
--
ALTER TABLE `fashion_trouser_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `fashion_t_shirt_category`
--
ALTER TABLE `fashion_t_shirt_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `fashion_waist`
--
ALTER TABLE `fashion_waist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fashion_warranty_type`
--
ALTER TABLE `fashion_warranty_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fashion_womens_brands`
--
ALTER TABLE `fashion_womens_brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `fashion_womens_dress_shape`
--
ALTER TABLE `fashion_womens_dress_shape`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `furniture_adjustable_handle`
--
ALTER TABLE `furniture_adjustable_handle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `furniture_arms`
--
ALTER TABLE `furniture_arms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `furniture_back_height`
--
ALTER TABLE `furniture_back_height`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `furniture_bedding_size`
--
ALTER TABLE `furniture_bedding_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `furniture_beds_category`
--
ALTER TABLE `furniture_beds_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `furniture_brands`
--
ALTER TABLE `furniture_brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `furniture_chairs_sub_category`
--
ALTER TABLE `furniture_chairs_sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `furniture_color_family`
--
ALTER TABLE `furniture_color_family`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `furniture_core_construction`
--
ALTER TABLE `furniture_core_construction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `furniture_desk_chair_type`
--
ALTER TABLE `furniture_desk_chair_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `furniture_features`
--
ALTER TABLE `furniture_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `furniture_linen_fabric`
--
ALTER TABLE `furniture_linen_fabric`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `furniture_material`
--
ALTER TABLE `furniture_material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `furniture_pattern`
--
ALTER TABLE `furniture_pattern`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `furniture_sofas_sub_category`
--
ALTER TABLE `furniture_sofas_sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `furniture_sofa_size`
--
ALTER TABLE `furniture_sofa_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `furniture_upholstery`
--
ALTER TABLE `furniture_upholstery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `furniture_warranty_period`
--
ALTER TABLE `furniture_warranty_period`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `furniture_warranty_type`
--
ALTER TABLE `furniture_warranty_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inqueries`
--
ALTER TABLE `inqueries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products_new`
--
ALTER TABLE `products_new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `shirt_details`
--
ALTER TABLE `shirt_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trouser_details`
--
ALTER TABLE `trouser_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tshirt_details`
--
ALTER TABLE `tshirt_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
