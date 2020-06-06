-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 07:48 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samsung_tv`
--

-- --------------------------------------------------------

--
-- Table structure for table `tv`
--

CREATE TABLE `tv` (
  `tv_type` text NOT NULL,
  `tv_details` text NOT NULL,
  `tv_price` decimal(13,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tv`
--

INSERT INTO `tv` (`tv_type`, `tv_details`, `tv_price`) VALUES
('Samsung QN82Q90RAFXZA Flat 82-Inch QLED 4K Q90 Series Ultra HD Smart TV with HDR and Alexa Compatibility (2019 Model)', '100% COLOR VOLUME WITH QUANTUM DOTS: Powered by Quantum dots, Samsung’s 4K QLED TV offers over a billion shades of brilliant color and 100% color volume for exceptional depth of detail that will draw you in to the picture for the best 4K TV experience,Concentrated zones of precision-controlled LEDs auto-adjust contrast between pure whites and ultra-deep blacks, revealing hidden details in even the darkest scenes, Intelligently powered processor instantly upscales content to 4K for sharp detail and refined color, 4K depth of detail with high dynamic range powered by HDR10+ lets you discover a new frontier of spectacular color and incredible detail, just as the director intended, Engineered to reduce glare and enhance color even in bright rooms, the ultra-viewing angle provides for a vibrant picture no matter where you sit around this big screen TV', '4497.99'),
('Samsung Electronics 4K Smart LED TV (2018), 55\" (UN55NU6900FXZA)', 'enjoy millions of shades of color, fine-tuned to create an incredibly vibrant picture, view stunning high-dynamic-range content with a TV designed to support HDR10, access your streaming services all in one place using the Samsung remote control, Bezel Width IS VNB', '347.98'),
('Samsung Electronics UN32N5300AFXZA 32\" 1080p Smart LED TV (2018), Black', 'Full HD 1080p: enjoy a viewing experience that is 2x the clarity of standard HD TVs, Smart TV: access your streaming services all in one place using the Samsung remote control, Quad Core Processor: enjoy a Fluid browsing experience and faster control switching between apps, streaming content and other media effortlessly, Motion Rate 60: enjoy a clear moving picture Resolution at Motion Rate 60 with amazing refresh Rate, processing speed and backlight technology.', '227.50'),
('Samsung QN65Q60RAFXZA Flat 65-Inch QLED 4K Q60 Series Ultra HD Smart TV with HDR and Alexa Compatibility (2019 Model)', '100 Percentage COLOR VOLUME WITH QUANTUM DOTS; Powered by Quantum dots, Samsung’s 4K QLED TV offers over a billion shades of brilliant color and 100 Percentage color volume for exceptional depth of detail that will draw you in to the picture for the best 4K TV experience, OneRemote to control all compatible devices, Bixby voice command, on-screen universal guide, SmartThings to control compatible home appliances and devices, smart speaker expandability with Alexa and Google Assistant compatibility, and more', '897.99'),
('Samsung QN75Q70RAFXZA Flat 75-Inch QLED 4K Q70 Series Ultra HD Smart TV with HDR and Alexa Compatibility (2019 Model)', 'Powered by Quantum dots, Samsung’s 4K QLED TV offers over a billion shades of brilliant color and 100% color volume for exceptional depth of detail that will draw you in to the picture for the best 4K TV experience, Concentrated zones of precision-controlled LEDs auto-adjust contrast between pure whites and ultra-deep blacks, revealing hidden details in even the darkest scenes, 4K depth of detail with high dynamic range powered by HDR10+ delivers the lightest to darkest colors, scene by scene, for amazing picture realism on this 75 inch smart TV, OneRemote to control all compatible devices, Bixby voice command, on-screen universal guide, SmartThings to control compatible home appliances and devices, smart speaker expandability with Alexa and Google Assistant compatibility, and more.', '1997.99'),
('Samsung QN75Q80RAFXZA Flat 75-Inch QLED 4K Q80 Series Ultra HD Smart TV with HDR and Alexa Compatibility (2019 Model)', 'Powered by Quantum dots, Samsung’s 4K QLED TV offers over a billion shades of brilliant color and 100 percent color volume for exceptional depth of detail that will draw you in to the picture for the best 4K TV experience, Concentrated zones of precision controlled LEDs auto adjust contrast between pure whites and ultra deep blacks, revealing hidden details in even the darkest scenes, 4K depth of detail with high dynamic range powered by HDR10+ delivers the lightest to darkest colors, scene by scene, for amazing picture realism.', '2797.99'),
('Samsung UN75RU8000FXZA Flat 75-Inch 4K 8 Series Ultra HD Smart TV with HDR and Alexa Compatibility (2019 Model)', 'Powerful 4K UHD processor optimizes your TV’s performance by upscaling every show, season, and scene with 4K picture quality, 4K depth of detail with high dynamic range lets you see shades of color that reveal more detail than HDTV can deliver, Simple on-screen universal guide to find streaming content and live TV shows, OneRemote to control all compatible devices, smart speaker expandability with Alexa and Google Assistant compatibility, and more, Modern and polished, the sleek design naturally fills the contours of your space with refined design.', '1297.99'),
('s3', 'screen size 60 ', '310.00'),
('s2', 'screen size 40 ', '220.00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
