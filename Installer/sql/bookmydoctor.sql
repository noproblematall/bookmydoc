-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2017 at 12:33 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25
SET SQL_BIG_SELECTS=1
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raj_bookmydoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `user_type` int(100) DEFAULT '1',
  `status` varchar(100) DEFAULT NULL,
  `id` int(10) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `profile_picture` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_type`, `status`, `id`, `username`, `password`, `profile_picture`) VALUES
(1, '1', 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'assets/uploads/profile_pic/admin/1494497944_1489993572_av1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `affilliated_hospitals`
--

DROP TABLE IF EXISTS `affilliated_hospitals`;
CREATE TABLE `affilliated_hospitals` (
  `id` int(11) NOT NULL,
  `hospital_name` varchar(255) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `affilliated_hospitals`
--

INSERT INTO `affilliated_hospitals` (`id`, `hospital_name`, `image`) VALUES
(1, 'Burdenko General Military Clinical Hospital', ''),
(2, 'City Clinical Hospital No. 50', ''),
(3, 'European Medical Centre Group', ''),
(4, 'Russian Children\'s Clinical Hospital', ''),
(5, 'American Clinic', ''),
(6, 'Amrita Institute of Medical Sciences', ''),
(7, 'Aster Medcity', ''),
(8, 'Lakeshore Hospital', ''),
(9, 'Medical Trust Hospital', ''),
(10, 'Lisie Hospital', ''),
(11, 'Rajagiri Hospital', ''),
(12, 'Renai medicity', ''),
(13, 'Lourdes Hospital', ''),
(14, 'Sunrise Hospital', ''),
(15, 'Chettinad Health City', ''),
(16, 'Cloudnine Hospitals', ''),
(17, 'Dr. Mohan’s Diabetes Specialities Centre', ''),
(18, 'Fortis Malar Hospital', ''),
(19, 'Global Hospitals & Health City', ''),
(20, 'Government General Hospital', '');

-- --------------------------------------------------------

--
-- Table structure for table `amenities_categories`
--

DROP TABLE IF EXISTS `amenities_categories`;
CREATE TABLE `amenities_categories` (
  `id` int(11) NOT NULL,
  `facility_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amenities_categories`
--

INSERT INTO `amenities_categories` (`id`, `facility_name`) VALUES
(1, 'Cafeterias'),
(2, 'Chapel'),
(3, 'Gardens and Outdoor Spaces'),
(4, 'Gifts, Flowers & Salons'),
(5, 'Libraries & Learning Resources'),
(6, 'Media & Technology Services'),
(7, 'Museum'),
(8, 'ATM & Banking'),
(9, 'Cell Phones'),
(10, 'E-Mail'),
(11, 'Electrical Appliances'),
(12, 'Fire Safety'),
(13, 'Fitness & Wellness Center'),
(14, 'Housekeeping Services'),
(15, 'Public Restrooms'),
(16, 'Interpreter Service'),
(17, 'Mail and Flowers'),
(18, 'Television'),
(19, 'Wi-Fi Wireless Internet Service'),
(20, 'Notary Public');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE `appointment` (
  `status` varchar(255) DEFAULT '0',
  `doctor_id` varchar(255) DEFAULT NULL,
  `patient_id` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `appointment_date` varchar(255) DEFAULT NULL,
  `appointment_time` varchar(500) DEFAULT NULL,
  `end_time` varchar(255) DEFAULT NULL,
  `ill_reason` varchar(5000) DEFAULT NULL,
  `insurance` varchar(255) DEFAULT NULL,
  `final_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `center_packages`
--

DROP TABLE IF EXISTS `center_packages`;
CREATE TABLE `center_packages` (
  `id` int(11) NOT NULL,
  `package_name` varchar(255) DEFAULT NULL,
  `package_price` varchar(255) DEFAULT NULL,
  `package_period` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `center_packages`
--

INSERT INTO `center_packages` (`id`, `package_name`, `package_price`, `package_period`) VALUES
(1, 'silver', '50', '45 days'),
(2, 'gold', '100', '4 months'),
(3, 'diamond', '1000', '1 year');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `short_lat` varchar(255) DEFAULT NULL,
  `short_lon` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city`, `state`, `country`, `zip`, `latitude`, `longitude`, `short_lat`, `short_lon`) VALUES
(1, 'Chennai', 'Tamil Nadu', 'India', '', '13.0826802', '80.27071840000008', '13', '80'),
(2, 'Bengaluru', 'Karnataka', 'India', '', '12.9715987', '77.59456269999998', '12', '77'),
(3, 'Kolkata', 'West Bengal', 'India', '', '22.572646', '88.36389499999996', '22', '88'),
(4, 'Mumbai', 'Maharashtra', 'India', '', '19.0759837', '72.87765590000004', '19', '72'),
(5, 'Hyderabad', 'Telangana', 'India', '', '17.385044', '78.486671', '17', '78'),
(7, 'Pune', 'Maharashtra', 'India', '', '18.5204303', '73.85674369999992', '18', '73');

-- --------------------------------------------------------

--
-- Table structure for table `city_categories`
--

DROP TABLE IF EXISTS `city_categories`;
CREATE TABLE `city_categories` (
  `country_id` varchar(255) DEFAULT NULL,
  `state_id` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `city_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_categories`
--

INSERT INTO `city_categories` (`country_id`, `state_id`, `id`, `city_name`) VALUES
('1', '1', 1, 'guwahati'),
('1', '2', 2, 'Gurugram'),
('1', '3', 3, 'kolkata'),
('1', '4', 4, 'new delhi'),
('1', '5', 5, 'kochi'),
('1', '5', 6, 'thiruvananthapuram'),
('1', '5', 7, 'palakad'),
('1', '6', 8, 'chennai'),
('1', '6', 9, 'madurai'),
('1', '6', 10, 'coimbatore'),
('1', '6', 11, 'thirunalveli'),
('1', '7', 12, 'jaipur'),
('1', '8', 13, 'mumbai'),
('1', '9', 14, 'kanpur'),
('1', '10', 15, 'gandhi nagar'),
('1', '11', 16, 'srinagar'),
('1', '12', 17, 'puri'),
('1', '13', 18, 'patiala'),
('1', '14', 19, 'vishakapatnam'),
('1', '15', 20, 'hyderabad'),
('2', '16', 21, 'colombo'),
('3', '17', 22, 'zhejiang'),
('4', '18', 23, 'islamabad'),
('5', '19', 24, 'chittagong'),
('6', '20', 25, 'simei'),
('7', '21', 26, 'hanoi'),
('8', '22', 27, 'kuala lampur'),
('9', '23', 28, 'moscow'),
('10', '24', 29, 'ulsan'),
('11', '25', 30, 'rason'),
('12', '26', 31, 'glasgow'),
('13', '27', 32, 'kabul'),
('14', '28', 33, 'pyay'),
('15', '29', 34, 'pattaya'),
('15', '30', 35, 'bangkok'),
('16', '31', 36, 'austin'),
('17', '32', 37, 'london'),
('18', '33', 38, 'central'),
('19', '34', 39, 'zurich'),
('16', '35', 40, 'baltimore'),
('20', '36', 41, 'johannesburg'),
('21', '37', 42, 'solna'),
('1', '5', 53, 'Thrissur'),
('21', '43', 54, 'Ponta Grossa'),
('4', '18', 55, 'sefdsgfdg'),
('5', '19', 56, 'sdfdfssg'),
('5', '19', 57, 'sdvfdf'),
('40', '48', 58, 'sdvcfdfv'),
('41', '49', 59, 'sin');

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

DROP TABLE IF EXISTS `clinic`;
CREATE TABLE `clinic` (
  `end_date` varchar(255) DEFAULT NULL,
  `type_selection` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT '0',
  `terms` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `cities_id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `clinic_name` varchar(255) DEFAULT NULL,
  `display_image` varchar(255) DEFAULT NULL,
  `clinic_established_date` varchar(255) DEFAULT NULL,
  `specialty` varchar(255) DEFAULT NULL,
  `insurance` varchar(255) DEFAULT NULL,
  `visitation` varchar(255) DEFAULT NULL,
  `clinic_languages` varchar(255) DEFAULT NULL,
  `clinic_memberships` varchar(255) DEFAULT NULL,
  `clinic_affilliations` varchar(500) DEFAULT NULL,
  `amenities` varchar(500) DEFAULT NULL,
  `clinic_awards` varchar(255) DEFAULT NULL,
  `clinic_website` varchar(255) DEFAULT NULL,
  `about_clinic` varchar(5000) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `clinic_address` varchar(255) DEFAULT NULL,
  `clinic_country` varchar(255) DEFAULT NULL,
  `clinic_state` varchar(255) DEFAULT NULL,
  `clinic_city` varchar(255) DEFAULT NULL,
  `clinic_zip` varchar(255) DEFAULT NULL,
  `trial_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinic`
--

INSERT INTO `clinic` (`end_date`, `type_selection`, `status`, `terms`, `parent_id`, `id`, `cities_id`, `username`, `email`, `password`, `clinic_name`, `display_image`, `clinic_established_date`, `specialty`, `insurance`, `visitation`, `clinic_languages`, `clinic_memberships`, `clinic_affilliations`, `amenities`, `clinic_awards`, `clinic_website`, `about_clinic`, `latitude`, `longitude`, `phone`, `clinic_address`, `clinic_country`, `clinic_state`, `clinic_city`, `clinic_zip`, `trial_date`) VALUES
('2018-01-24', 'clinic', '1', 'agreed', 2, 1, 1, '', 'kumaran.dental@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Kumaran Dental Clinic', '', '2016-11-12', '7', '9', '6', '1,8', 'International Society of Clinic Association ', '4', '2', 'Hispanics awards in 2013', 'www.kayalab.com', 'NIZ', '9.928', '78.119', '123456789', 'No.92, Pensioner Street, Dindigul. Landmark: Opposite Gomath Towers, Dindigul, Dindigul, Tamil N?du', '1', '6', '9', '625020', '2017-01-08'),
('2018-01-24', 'clinic', '1', 'agreed', 1, 2, 2, '', 'appollo.clinic@live.com', 'e10adc3949ba59abbe56e057f20f883e', 'appollo sugar clinics', '', '', '16', '1,3,4', '21,22', '1,2,8', 'international clinical association', '3', '4', 'maya awards for healthcare service', '', 'k', '13.062', '80.269', '', ' 50, Second Ave, B Block, Annanagar East, Chennai, Tamil Nadu 600102', '1', '6', '8', '600001', '2017-01-24'),
('2018-01-24', '', '1', 'agreed', 1, 3, 1, '', 'kaya@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'kaya clinics', '', '', '5,6', '3', '11', '13', 'tamilnadu clinic association', '6', '9', 'taminadu best clinic award', '', 'n', '12.757', '80.222', '', '49/24, A1, 1st Floor, Sunny Side, 1st Main Road, Above Nuts & Spices, Gandhi Nagar, Adyar, Chennai, Tamil Nadu 600020', '1', '6', '8', '600001', '2017-01-24'),
('2018-01-24', 'clinic', '1', 'agreed', 2, 4, 1, '', 'medlilly@gmail.com', '63286e2b6695149359a0bd46f501fc77', 'medlilly clinics', '', '', '3,4,5', '1,2,3', '3,5,8,9,10,11,12,13', '1,6,8', 'srilanka clinic association', '2', '2', 'srilanka best clinic award', '', 'aa', '10.329', '76.158', '', ' NH17, Kaipamangalam, Kerala 680681', '1', '5', '53', '680307', '2017-01-24'),
('2018-01-24', 'clinic', '1', 'agreed', 3, 5, 1, '', 'enhance@gmail.com', '03265faca14f06be8156135b57d4ccf9', 'enhance clinics', 'uploads/hospital/1493878876_clinic1.jpg', '', '1,2,3,4,5,6,7,8,9,10', '1,2,3,4,5,6', '1,2,3,5,6,8,9,10,11,12,13,16,17,18,19', '2', 'singapore clinic association', '2', '3', 'singapore best clinic award', '', 'At Enhance, we feel everyone aspires to be beautiful! Our Mission is to provide unparalleled aesthetic results to all our customers keeping in mind the safety and efficacy of all our treatments. We strive hard to give meaning & value to our business and to the working lives of our employees. We are proud of our work.', '28.612', '77.218', '', 'E-84, Ground Floor, Greater Kailash Part I, Near Spectra Eye Clinic, New Delhi, Delhi 110048', '1', '4', '4', '110001', '2017-01-24'),
(NULL, 'individual', '1', 'agreed', NULL, 8, 4, NULL, 'miami@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'miami clinic center', 'assets/uploads/batra.jpg', '17/16/1993', '6,7', '2,13', '11', '9,25', 'sdfds', '6,7', '8,1', 'sdfds', 'www.miami@gmail.com', 'sdfsdf', '9.640', '77.825', '9578656943', '#15 Blvd, Dane street', NULL, NULL, NULL, '624619', '2017-06-22'),
(NULL, 'subclinic', '1', 'agreed', 8, 9, 3, NULL, 'miamimini@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'miami mini', 'assets/uploads/1.png', '17/16/1993', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.miamimini@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '10.040', '77.748', '9578656943', '#15 Blvd, shane borne street', NULL, NULL, NULL, '555', '2017-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `clinic_gallery`
--

DROP TABLE IF EXISTS `clinic_gallery`;
CREATE TABLE `clinic_gallery` (
  `clinic_id` varchar(100) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `image` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinic_gallery`
--

INSERT INTO `clinic_gallery` (`clinic_id`, `user_id`, `id`, `image`) VALUES
('1', 1, 1, 'uploads/hospital/1493880066_1-clinic1.jpg'),
('2', 1, 2, 'uploads/hospital/1493880073_1-clinic2.jpg'),
('3', 1, 3, 'uploads/hospital/1493880080_1-clinic3.jpg'),
('4', 1, 4, 'uploads/hospital/1493880086_1-clinic4.jpg'),
('5', 1, 5, 'uploads/hospital/1493880094_1-clinic5.jpg'),
('1', 1, 6, 'uploads/hospital/1493880105_1-clinic6.jpg'),
('2', 1, 7, 'uploads/hospital/1493880113_1-clinic7.jpg'),
('3', 1, 8, 'uploads/hospital/1493880119_1-clinic8.jpg'),
('4', 1, 9, 'uploads/hospital/1493880131_1-clinic8.jpg'),
('5', 1, 10, 'uploads/hospital/1493880138_1-clinic9.jpg'),
('1', 1, 11, 'uploads/hospital/1493880147_1-clinic10.jpg'),
('2', 1, 12, 'uploads/hospital/1493880153_1-clinic11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE `countries` (
  `id_countries` int(3) UNSIGNED NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `iso_alpha2` varchar(2) DEFAULT NULL,
  `iso_alpha3` varchar(3) DEFAULT NULL,
  `iso_numeric` int(11) DEFAULT NULL,
  `currency_code` char(3) DEFAULT NULL,
  `currency_name` varchar(32) DEFAULT NULL,
  `currrency_symbol` varchar(3) DEFAULT NULL,
  `flag` varchar(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id_countries`, `name`, `iso_alpha2`, `iso_alpha3`, `iso_numeric`, `currency_code`, `currency_name`, `currrency_symbol`, `flag`) VALUES
(1, 'Afghanistan', 'AF', 'AFG', 4, 'AFN', 'Afghani', '؋', 'AF.png'),
(2, 'Albania', 'AL', 'ALB', 8, 'ALL', 'Lek', 'Lek', 'AL.png'),
(3, 'Algeria', 'DZ', 'DZA', 12, 'DZD', 'Dinar', NULL, 'DZ.png'),
(4, 'American Samoa', 'AS', 'ASM', 16, 'USD', 'Dollar', '$', 'AS.png'),
(5, 'Andorra', 'AD', 'AND', 20, 'EUR', 'Euro', '€', 'AD.png'),
(6, 'Angola', 'AO', 'AGO', 24, 'AOA', 'Kwanza', 'Kz', 'AO.png'),
(7, 'Anguilla', 'AI', 'AIA', 660, 'XCD', 'Dollar', '$', 'AI.png'),
(8, 'Antarctica', 'AQ', 'ATA', 10, '', '', NULL, 'AQ.png'),
(9, 'Antigua and Barbuda', 'AG', 'ATG', 28, 'XCD', 'Dollar', '$', 'AG.png'),
(10, 'Argentina', 'AR', 'ARG', 32, 'ARS', 'Peso', '$', 'AR.png'),
(11, 'Armenia', 'AM', 'ARM', 51, 'AMD', 'Dram', NULL, 'AM.png'),
(12, 'Aruba', 'AW', 'ABW', 533, 'AWG', 'Guilder', 'ƒ', 'AW.png'),
(13, 'Australia', 'AU', 'AUS', 36, 'AUD', 'Dollar', '$', 'AU.png'),
(14, 'Austria', 'AT', 'AUT', 40, 'EUR', 'Euro', '€', 'AT.png'),
(15, 'Azerbaijan', 'AZ', 'AZE', 31, 'AZN', 'Manat', 'ман', 'AZ.png'),
(16, 'Bahamas', 'BS', 'BHS', 44, 'BSD', 'Dollar', '$', 'BS.png'),
(17, 'Bahrain', 'BH', 'BHR', 48, 'BHD', 'Dinar', NULL, 'BH.png'),
(18, 'Bangladesh', 'BD', 'BGD', 50, 'BDT', 'Taka', NULL, 'BD.png'),
(19, 'Barbados', 'BB', 'BRB', 52, 'BBD', 'Dollar', '$', 'BB.png'),
(20, 'Belarus', 'BY', 'BLR', 112, 'BYR', 'Ruble', 'p.', 'BY.png'),
(21, 'Belgium', 'BE', 'BEL', 56, 'EUR', 'Euro', '€', 'BE.png'),
(22, 'Belize', 'BZ', 'BLZ', 84, 'BZD', 'Dollar', 'BZ$', 'BZ.png'),
(23, 'Benin', 'BJ', 'BEN', 204, 'XOF', 'Franc', NULL, 'BJ.png'),
(24, 'Bermuda', 'BM', 'BMU', 60, 'BMD', 'Dollar', '$', 'BM.png'),
(25, 'Bhutan', 'BT', 'BTN', 64, 'BTN', 'Ngultrum', NULL, 'BT.png'),
(26, 'Bolivia', 'BO', 'BOL', 68, 'BOB', 'Boliviano', '$b', 'BO.png'),
(27, 'Bosnia and Herzegovina', 'BA', 'BIH', 70, 'BAM', 'Marka', 'KM', 'BA.png'),
(28, 'Botswana', 'BW', 'BWA', 72, 'BWP', 'Pula', 'P', 'BW.png'),
(29, 'Bouvet Island', 'BV', 'BVT', 74, 'NOK', 'Krone', 'kr', 'BV.png'),
(30, 'Brazil', 'BR', 'BRA', 76, 'BRL', 'Real', 'R$', 'BR.png'),
(31, 'British Indian Ocean Territory', 'IO', 'IOT', 86, 'USD', 'Dollar', '$', 'IO.png'),
(32, 'British Virgin Islands', 'VG', 'VGB', 92, 'USD', 'Dollar', '$', 'VG.png'),
(33, 'Brunei', 'BN', 'BRN', 96, 'BND', 'Dollar', '$', 'BN.png'),
(34, 'Bulgaria', 'BG', 'BGR', 100, 'BGN', 'Lev', 'лв', 'BG.png'),
(35, 'Burkina Faso', 'BF', 'BFA', 854, 'XOF', 'Franc', NULL, 'BF.png'),
(36, 'Burundi', 'BI', 'BDI', 108, 'BIF', 'Franc', NULL, 'BI.png'),
(37, 'Cambodia', 'KH', 'KHM', 116, 'KHR', 'Riels', '៛', 'KH.png'),
(38, 'Cameroon', 'CM', 'CMR', 120, 'XAF', 'Franc', 'FCF', 'CM.png'),
(39, 'Canada', 'CA', 'CAN', 124, 'CAD', 'Dollar', '$', 'CA.png'),
(40, 'Cape Verde', 'CV', 'CPV', 132, 'CVE', 'Escudo', NULL, 'CV.png'),
(41, 'Cayman Islands', 'KY', 'CYM', 136, 'KYD', 'Dollar', '$', 'KY.png'),
(42, 'Central African Republic', 'CF', 'CAF', 140, 'XAF', 'Franc', 'FCF', 'CF.png'),
(43, 'Chad', 'TD', 'TCD', 148, 'XAF', 'Franc', NULL, 'TD.png'),
(44, 'Chile', 'CL', 'CHL', 152, 'CLP', 'Peso', NULL, 'CL.png'),
(45, 'China', 'CN', 'CHN', 156, 'CNY', 'Yuan Renminbi', '¥', 'CN.png'),
(46, 'Christmas Island', 'CX', 'CXR', 162, 'AUD', 'Dollar', '$', 'CX.png'),
(47, 'Cocos Islands', 'CC', 'CCK', 166, 'AUD', 'Dollar', '$', 'CC.png'),
(48, 'Colombia', 'CO', 'COL', 170, 'COP', 'Peso', '$', 'CO.png'),
(49, 'Comoros', 'KM', 'COM', 174, 'KMF', 'Franc', NULL, 'KM.png'),
(50, 'Cook Islands', 'CK', 'COK', 184, 'NZD', 'Dollar', '$', 'CK.png'),
(51, 'Costa Rica', 'CR', 'CRI', 188, 'CRC', 'Colon', '₡', 'CR.png'),
(52, 'Croatia', 'HR', 'HRV', 191, 'HRK', 'Kuna', 'kn', 'HR.png'),
(53, 'Cuba', 'CU', 'CUB', 192, 'CUP', 'Peso', '₱', 'CU.png'),
(54, 'Cyprus', 'CY', 'CYP', 196, 'CYP', 'Pound', NULL, 'CY.png'),
(55, 'Czech Republic', 'CZ', 'CZE', 203, 'CZK', 'Koruna', 'KĿ', 'CZ.png'),
(56, 'Democratic Republic of the Congo', 'CD', 'COD', 180, 'CDF', 'Franc', NULL, 'CD.png'),
(57, 'Denmark', 'DK', 'DNK', 208, 'DKK', 'Krone', 'kr', 'DK.png'),
(58, 'Djibouti', 'DJ', 'DJI', 262, 'DJF', 'Franc', NULL, 'DJ.png'),
(59, 'Dominica', 'DM', 'DMA', 212, 'XCD', 'Dollar', '$', 'DM.png'),
(60, 'Dominican Republic', 'DO', 'DOM', 214, 'DOP', 'Peso', 'RD$', 'DO.png'),
(61, 'East Timor', 'TL', 'TLS', 626, 'USD', 'Dollar', '$', 'TL.png'),
(62, 'Ecuador', 'EC', 'ECU', 218, 'USD', 'Dollar', '$', 'EC.png'),
(63, 'Egypt', 'EG', 'EGY', 818, 'EGP', 'Pound', '£', 'EG.png'),
(64, 'El Salvador', 'SV', 'SLV', 222, 'SVC', 'Colone', '$', 'SV.png'),
(65, 'Equatorial Guinea', 'GQ', 'GNQ', 226, 'XAF', 'Franc', 'FCF', 'GQ.png'),
(66, 'Eritrea', 'ER', 'ERI', 232, 'ERN', 'Nakfa', 'Nfk', 'ER.png'),
(67, 'Estonia', 'EE', 'EST', 233, 'EEK', 'Kroon', 'kr', 'EE.png'),
(68, 'Ethiopia', 'ET', 'ETH', 231, 'ETB', 'Birr', NULL, 'ET.png'),
(69, 'Falkland Islands', 'FK', 'FLK', 238, 'FKP', 'Pound', '£', 'FK.png'),
(70, 'Faroe Islands', 'FO', 'FRO', 234, 'DKK', 'Krone', 'kr', 'FO.png'),
(71, 'Fiji', 'FJ', 'FJI', 242, 'FJD', 'Dollar', '$', 'FJ.png'),
(72, 'Finland', 'FI', 'FIN', 246, 'EUR', 'Euro', '€', 'FI.png'),
(73, 'France', 'FR', 'FRA', 250, 'EUR', 'Euro', '€', 'FR.png'),
(74, 'French Guiana', 'GF', 'GUF', 254, 'EUR', 'Euro', '€', 'GF.png'),
(75, 'French Polynesia', 'PF', 'PYF', 258, 'XPF', 'Franc', NULL, 'PF.png'),
(76, 'French Southern Territories', 'TF', 'ATF', 260, 'EUR', 'Euro  ', '€', 'TF.png'),
(77, 'Gabon', 'GA', 'GAB', 266, 'XAF', 'Franc', 'FCF', 'GA.png'),
(78, 'Gambia', 'GM', 'GMB', 270, 'GMD', 'Dalasi', 'D', 'GM.png'),
(79, 'Georgia', 'GE', 'GEO', 268, 'GEL', 'Lari', NULL, 'GE.png'),
(80, 'Germany', 'DE', 'DEU', 276, 'EUR', 'Euro', '€', 'DE.png'),
(81, 'Ghana', 'GH', 'GHA', 288, 'GHC', 'Cedi', '¢', 'GH.png'),
(82, 'Gibraltar', 'GI', 'GIB', 292, 'GIP', 'Pound', '£', 'GI.png'),
(83, 'Greece', 'GR', 'GRC', 300, 'EUR', 'Euro', '€', 'GR.png'),
(84, 'Greenland', 'GL', 'GRL', 304, 'DKK', 'Krone', 'kr', 'GL.png'),
(85, 'Grenada', 'GD', 'GRD', 308, 'XCD', 'Dollar', '$', 'GD.png'),
(86, 'Guadeloupe', 'GP', 'GLP', 312, 'EUR', 'Euro', '€', 'GP.png'),
(87, 'Guam', 'GU', 'GUM', 316, 'USD', 'Dollar', '$', 'GU.png'),
(88, 'Guatemala', 'GT', 'GTM', 320, 'GTQ', 'Quetzal', 'Q', 'GT.png'),
(89, 'Guinea', 'GN', 'GIN', 324, 'GNF', 'Franc', NULL, 'GN.png'),
(90, 'Guinea-Bissau', 'GW', 'GNB', 624, 'XOF', 'Franc', NULL, 'GW.png'),
(91, 'Guyana', 'GY', 'GUY', 328, 'GYD', 'Dollar', '$', 'GY.png'),
(92, 'Haiti', 'HT', 'HTI', 332, 'HTG', 'Gourde', 'G', 'HT.png'),
(93, 'Heard Island and McDonald Islands', 'HM', 'HMD', 334, 'AUD', 'Dollar', '$', 'HM.png'),
(94, 'Honduras', 'HN', 'HND', 340, 'HNL', 'Lempira', 'L', 'HN.png'),
(95, 'Hong Kong', 'HK', 'HKG', 344, 'HKD', 'Dollar', '$', 'HK.png'),
(96, 'Hungary', 'HU', 'HUN', 348, 'HUF', 'Forint', 'Ft', 'HU.png'),
(97, 'Iceland', 'IS', 'ISL', 352, 'ISK', 'Krona', 'kr', 'IS.png'),
(98, 'India', 'IN', 'IND', 356, 'INR', 'Rupee', '₹', 'IN.png'),
(99, 'Indonesia', 'ID', 'IDN', 360, 'IDR', 'Rupiah', 'Rp', 'ID.png'),
(100, 'Iran', 'IR', 'IRN', 364, 'IRR', 'Rial', '﷼', 'IR.png'),
(101, 'Iraq', 'IQ', 'IRQ', 368, 'IQD', 'Dinar', NULL, 'IQ.png'),
(102, 'Ireland', 'IE', 'IRL', 372, 'EUR', 'Euro', '€', 'IE.png'),
(103, 'Israel', 'IL', 'ISR', 376, 'ILS', 'Shekel', '₪', 'IL.png'),
(104, 'Italy', 'IT', 'ITA', 380, 'EUR', 'Euro', '€', 'IT.png'),
(105, 'Ivory Coast', 'CI', 'CIV', 384, 'XOF', 'Franc', NULL, 'CI.png'),
(106, 'Jamaica', 'JM', 'JAM', 388, 'JMD', 'Dollar', '$', 'JM.png'),
(107, 'Japan', 'JP', 'JPN', 392, 'JPY', 'Yen', '¥', 'JP.png'),
(108, 'Jordan', 'JO', 'JOR', 400, 'JOD', 'Dinar', NULL, 'JO.png'),
(109, 'Kazakhstan', 'KZ', 'KAZ', 398, 'KZT', 'Tenge', 'лв', 'KZ.png'),
(110, 'Kenya', 'KE', 'KEN', 404, 'KES', 'Shilling', NULL, 'KE.png'),
(111, 'Kiribati', 'KI', 'KIR', 296, 'AUD', 'Dollar', '$', 'KI.png'),
(112, 'Kuwait', 'KW', 'KWT', 414, 'KWD', 'Dinar', NULL, 'KW.png'),
(113, 'Kyrgyzstan', 'KG', 'KGZ', 417, 'KGS', 'Som', 'лв', 'KG.png'),
(114, 'Laos', 'LA', 'LAO', 418, 'LAK', 'Kip', '₭', 'LA.png'),
(115, 'Latvia', 'LV', 'LVA', 428, 'LVL', 'Lat', 'Ls', 'LV.png'),
(116, 'Lebanon', 'LB', 'LBN', 422, 'LBP', 'Pound', '£', 'LB.png'),
(117, 'Lesotho', 'LS', 'LSO', 426, 'LSL', 'Loti', 'L', 'LS.png'),
(118, 'Liberia', 'LR', 'LBR', 430, 'LRD', 'Dollar', '$', 'LR.png'),
(119, 'Libya', 'LY', 'LBY', 434, 'LYD', 'Dinar', NULL, 'LY.png'),
(120, 'Liechtenstein', 'LI', 'LIE', 438, 'CHF', 'Franc', 'CHF', 'LI.png'),
(121, 'Lithuania', 'LT', 'LTU', 440, 'LTL', 'Litas', 'Lt', 'LT.png'),
(122, 'Luxembourg', 'LU', 'LUX', 442, 'EUR', 'Euro', '€', 'LU.png'),
(123, 'Macao', 'MO', 'MAC', 446, 'MOP', 'Pataca', 'MOP', 'MO.png'),
(124, 'Macedonia', 'MK', 'MKD', 807, 'MKD', 'Denar', 'ден', 'MK.png'),
(125, 'Madagascar', 'MG', 'MDG', 450, 'MGA', 'Ariary', NULL, 'MG.png'),
(126, 'Malawi', 'MW', 'MWI', 454, 'MWK', 'Kwacha', 'MK', 'MW.png'),
(127, 'Malaysia', 'MY', 'MYS', 458, 'MYR', 'Ringgit', 'RM', 'MY.png'),
(128, 'Maldives', 'MV', 'MDV', 462, 'MVR', 'Rufiyaa', 'Rf', 'MV.png'),
(129, 'Mali', 'ML', 'MLI', 466, 'XOF', 'Franc', NULL, 'ML.png'),
(130, 'Malta', 'MT', 'MLT', 470, 'MTL', 'Lira', NULL, 'MT.png'),
(131, 'Marshall Islands', 'MH', 'MHL', 584, 'USD', 'Dollar', '$', 'MH.png'),
(132, 'Martinique', 'MQ', 'MTQ', 474, 'EUR', 'Euro', '€', 'MQ.png'),
(133, 'Mauritania', 'MR', 'MRT', 478, 'MRO', 'Ouguiya', 'UM', 'MR.png'),
(134, 'Mauritius', 'MU', 'MUS', 480, 'MUR', 'Rupee', '₨', 'MU.png'),
(135, 'Mayotte', 'YT', 'MYT', 175, 'EUR', 'Euro', '€', 'YT.png'),
(136, 'Mexico', 'MX', 'MEX', 484, 'MXN', 'Peso', '$', 'MX.png'),
(137, 'Micronesia', 'FM', 'FSM', 583, 'USD', 'Dollar', '$', 'FM.png'),
(138, 'Moldova', 'MD', 'MDA', 498, 'MDL', 'Leu', NULL, 'MD.png'),
(139, 'Monaco', 'MC', 'MCO', 492, 'EUR', 'Euro', '€', 'MC.png'),
(140, 'Mongolia', 'MN', 'MNG', 496, 'MNT', 'Tugrik', '₮', 'MN.png'),
(141, 'Montserrat', 'MS', 'MSR', 500, 'XCD', 'Dollar', '$', 'MS.png'),
(142, 'Morocco', 'MA', 'MAR', 504, 'MAD', 'Dirham', NULL, 'MA.png'),
(143, 'Mozambique', 'MZ', 'MOZ', 508, 'MZN', 'Meticail', 'MT', 'MZ.png'),
(144, 'Myanmar', 'MM', 'MMR', 104, 'MMK', 'Kyat', 'K', 'MM.png'),
(145, 'Namibia', 'NA', 'NAM', 516, 'NAD', 'Dollar', '$', 'NA.png'),
(146, 'Nauru', 'NR', 'NRU', 520, 'AUD', 'Dollar', '$', 'NR.png'),
(147, 'Nepal', 'NP', 'NPL', 524, 'NPR', 'Rupee', '₨', 'NP.png'),
(148, 'Netherlands', 'NL', 'NLD', 528, 'EUR', 'Euro', '€', 'NL.png'),
(149, 'Netherlands Antilles', 'AN', 'ANT', 530, 'ANG', 'Guilder', 'ƒ', 'AN.png'),
(150, 'New Caledonia', 'NC', 'NCL', 540, 'XPF', 'Franc', NULL, 'NC.png'),
(151, 'New Zealand', 'NZ', 'NZL', 554, 'NZD', 'Dollar', '$', 'NZ.png'),
(152, 'Nicaragua', 'NI', 'NIC', 558, 'NIO', 'Cordoba', 'C$', 'NI.png'),
(153, 'Niger', 'NE', 'NER', 562, 'XOF', 'Franc', NULL, 'NE.png'),
(154, 'Nigeria', 'NG', 'NGA', 566, 'NGN', 'Naira', '₦', 'NG.png'),
(155, 'Niue', 'NU', 'NIU', 570, 'NZD', 'Dollar', '$', 'NU.png'),
(156, 'Norfolk Island', 'NF', 'NFK', 574, 'AUD', 'Dollar', '$', 'NF.png'),
(157, 'North Korea', 'KP', 'PRK', 408, 'KPW', 'Won', '₩', 'KP.png'),
(158, 'Northern Mariana Islands', 'MP', 'MNP', 580, 'USD', 'Dollar', '$', 'MP.png'),
(159, 'Norway', 'NO', 'NOR', 578, 'NOK', 'Krone', 'kr', 'NO.png'),
(160, 'Oman', 'OM', 'OMN', 512, 'OMR', 'Rial', '﷼', 'OM.png'),
(161, 'Pakistan', 'PK', 'PAK', 586, 'PKR', 'Rupee', '₨', 'PK.png'),
(162, 'Palau', 'PW', 'PLW', 585, 'USD', 'Dollar', '$', 'PW.png'),
(163, 'Palestinian Territory', 'PS', 'PSE', 275, 'ILS', 'Shekel', '₪', 'PS.png'),
(164, 'Panama', 'PA', 'PAN', 591, 'PAB', 'Balboa', 'B/.', 'PA.png'),
(165, 'Papua New Guinea', 'PG', 'PNG', 598, 'PGK', 'Kina', NULL, 'PG.png'),
(166, 'Paraguay', 'PY', 'PRY', 600, 'PYG', 'Guarani', 'Gs', 'PY.png'),
(167, 'Peru', 'PE', 'PER', 604, 'PEN', 'Sol', 'S/.', 'PE.png'),
(168, 'Philippines', 'PH', 'PHL', 608, 'PHP', 'Peso', 'Php', 'PH.png'),
(169, 'Pitcairn', 'PN', 'PCN', 612, 'NZD', 'Dollar', '$', 'PN.png'),
(170, 'Poland', 'PL', 'POL', 616, 'PLN', 'Zloty', 'zł', 'PL.png'),
(171, 'Portugal', 'PT', 'PRT', 620, 'EUR', 'Euro', '€', 'PT.png'),
(172, 'Puerto Rico', 'PR', 'PRI', 630, 'USD', 'Dollar', '$', 'PR.png'),
(173, 'Qatar', 'QA', 'QAT', 634, 'QAR', 'Rial', '﷼', 'QA.png'),
(174, 'Republic of the Congo', 'CG', 'COG', 178, 'XAF', 'Franc', 'FCF', 'CG.png'),
(175, 'Reunion', 'RE', 'REU', 638, 'EUR', 'Euro', '€', 'RE.png'),
(176, 'Romania', 'RO', 'ROU', 642, 'RON', 'Leu', 'lei', 'RO.png'),
(177, 'Russia', 'RU', 'RUS', 643, 'RUB', 'Ruble', 'руб', 'RU.png'),
(178, 'Rwanda', 'RW', 'RWA', 646, 'RWF', 'Franc', NULL, 'RW.png'),
(179, 'Saint Helena', 'SH', 'SHN', 654, 'SHP', 'Pound', '£', 'SH.png'),
(180, 'Saint Kitts and Nevis', 'KN', 'KNA', 659, 'XCD', 'Dollar', '$', 'KN.png'),
(181, 'Saint Lucia', 'LC', 'LCA', 662, 'XCD', 'Dollar', '$', 'LC.png'),
(182, 'Saint Pierre and Miquelon', 'PM', 'SPM', 666, 'EUR', 'Euro', '€', 'PM.png'),
(183, 'Saint Vincent and the Grenadines', 'VC', 'VCT', 670, 'XCD', 'Dollar', '$', 'VC.png'),
(184, 'Samoa', 'WS', 'WSM', 882, 'WST', 'Tala', 'WS$', 'WS.png'),
(185, 'San Marino', 'SM', 'SMR', 674, 'EUR', 'Euro', '€', 'SM.png'),
(186, 'Sao Tome and Principe', 'ST', 'STP', 678, 'STD', 'Dobra', 'Db', 'ST.png'),
(187, 'Saudi Arabia', 'SA', 'SAU', 682, 'SAR', 'Rial', '﷼', 'SA.png'),
(188, 'Senegal', 'SN', 'SEN', 686, 'XOF', 'Franc', NULL, 'SN.png'),
(189, 'Serbia and Montenegro', 'CS', 'SCG', 891, 'RSD', 'Dinar', 'Дин', 'CS.png'),
(190, 'Seychelles', 'SC', 'SYC', 690, 'SCR', 'Rupee', '₨', 'SC.png'),
(191, 'Sierra Leone', 'SL', 'SLE', 694, 'SLL', 'Leone', 'Le', 'SL.png'),
(192, 'Singapore', 'SG', 'SGP', 702, 'SGD', 'Dollar', '$', 'SG.png'),
(193, 'Slovakia', 'SK', 'SVK', 703, 'SKK', 'Koruna', 'Sk', 'SK.png'),
(194, 'Slovenia', 'SI', 'SVN', 705, 'EUR', 'Euro', '€', 'SI.png'),
(195, 'Solomon Islands', 'SB', 'SLB', 90, 'SBD', 'Dollar', '$', 'SB.png'),
(196, 'Somalia', 'SO', 'SOM', 706, 'SOS', 'Shilling', 'S', 'SO.png'),
(197, 'South Africa', 'ZA', 'ZAF', 710, 'ZAR', 'Rand', 'R', 'ZA.png'),
(198, 'South Georgia and the South Sandwich Islands', 'GS', 'SGS', 239, 'GBP', 'Pound', '£', 'GS.png'),
(199, 'South Korea', 'KR', 'KOR', 410, 'KRW', 'Won', '₩', 'KR.png'),
(200, 'Spain', 'ES', 'ESP', 724, 'EUR', 'Euro', '€', 'ES.png'),
(201, 'Sri Lanka', 'LK', 'LKA', 144, 'LKR', 'Rupee', '₨', 'LK.png'),
(202, 'Sudan', 'SD', 'SDN', 736, 'SDD', 'Dinar', NULL, 'SD.png'),
(203, 'Suriname', 'SR', 'SUR', 740, 'SRD', 'Dollar', '$', 'SR.png'),
(204, 'Svalbard and Jan Mayen', 'SJ', 'SJM', 744, 'NOK', 'Krone', 'kr', 'SJ.png'),
(205, 'Swaziland', 'SZ', 'SWZ', 748, 'SZL', 'Lilangeni', NULL, 'SZ.png'),
(206, 'Sweden', 'SE', 'SWE', 752, 'SEK', 'Krona', 'kr', 'SE.png'),
(207, 'Switzerland', 'CH', 'CHE', 756, 'CHF', 'Franc', 'CHF', 'CH.png'),
(208, 'Syria', 'SY', 'SYR', 760, 'SYP', 'Pound', '£', 'SY.png'),
(209, 'Taiwan', 'TW', 'TWN', 158, 'TWD', 'Dollar', 'NT$', 'TW.png'),
(210, 'Tajikistan', 'TJ', 'TJK', 762, 'TJS', 'Somoni', NULL, 'TJ.png'),
(211, 'Tanzania', 'TZ', 'TZA', 834, 'TZS', 'Shilling', NULL, 'TZ.png'),
(212, 'Thailand', 'TH', 'THA', 764, 'THB', 'Baht', '฿', 'TH.png'),
(213, 'Togo', 'TG', 'TGO', 768, 'XOF', 'Franc', NULL, 'TG.png'),
(214, 'Tokelau', 'TK', 'TKL', 772, 'NZD', 'Dollar', '$', 'TK.png'),
(215, 'Tonga', 'TO', 'TON', 776, 'TOP', 'Pa\'anga', 'T$', 'TO.png'),
(216, 'Trinidad and Tobago', 'TT', 'TTO', 780, 'TTD', 'Dollar', 'TT$', 'TT.png'),
(217, 'Tunisia', 'TN', 'TUN', 788, 'TND', 'Dinar', NULL, 'TN.png'),
(218, 'Turkey', 'TR', 'TUR', 792, 'TRY', 'Lira', 'YTL', 'TR.png'),
(219, 'Turkmenistan', 'TM', 'TKM', 795, 'TMM', 'Manat', 'm', 'TM.png'),
(220, 'Turks and Caicos Islands', 'TC', 'TCA', 796, 'USD', 'Dollar', '$', 'TC.png'),
(221, 'Tuvalu', 'TV', 'TUV', 798, 'AUD', 'Dollar', '$', 'TV.png'),
(222, 'U.S. Virgin Islands', 'VI', 'VIR', 850, 'USD', 'Dollar', '$', 'VI.png'),
(223, 'Uganda', 'UG', 'UGA', 800, 'UGX', 'Shilling', NULL, 'UG.png'),
(224, 'Ukraine', 'UA', 'UKR', 804, 'UAH', 'Hryvnia', '₴', 'UA.png'),
(225, 'United Arab Emirates', 'AE', 'ARE', 784, 'AED', 'Dirham', NULL, 'AE.png'),
(226, 'United Kingdom', 'GB', 'GBR', 826, 'GBP', 'Pound', '£', 'GB.png'),
(227, 'United States', 'US', 'USA', 840, 'USD', 'Dollar', '$', 'US.png'),
(228, 'United States Minor Outlying Islands', 'UM', 'UMI', 581, 'USD', 'Dollar ', '$', 'UM.png'),
(229, 'Uruguay', 'UY', 'URY', 858, 'UYU', 'Peso', '$U', 'UY.png'),
(230, 'Uzbekistan', 'UZ', 'UZB', 860, 'UZS', 'Som', 'лв', 'UZ.png'),
(231, 'Vanuatu', 'VU', 'VUT', 548, 'VUV', 'Vatu', 'Vt', 'VU.png'),
(232, 'Vatican', 'VA', 'VAT', 336, 'EUR', 'Euro', '€', 'VA.png'),
(233, 'Venezuela', 'VE', 'VEN', 862, 'VEF', 'Bolivar', 'Bs', 'VE.png'),
(234, 'Vietnam', 'VN', 'VNM', 704, 'VND', 'Dong', '₫', 'VN.png'),
(235, 'Wallis and Futuna', 'WF', 'WLF', 876, 'XPF', 'Franc', NULL, 'WF.png'),
(236, 'Western Sahara', 'EH', 'ESH', 732, 'MAD', 'Dirham', NULL, 'EH.png'),
(237, 'Yemen', 'YE', 'YEM', 887, 'YER', 'Rial', '﷼', 'YE.png'),
(238, 'Zambia', 'ZM', 'ZMB', 894, 'ZMK', 'Kwacha', 'ZK', 'ZM.png'),
(239, 'Zimbabwe', 'ZW', 'ZWE', 716, 'ZWD', 'Dollar', 'Z$', 'ZW.png');

-- --------------------------------------------------------

--
-- Table structure for table `country_categories`
--

DROP TABLE IF EXISTS `country_categories`;
CREATE TABLE `country_categories` (
  `id` int(11) NOT NULL,
  `country_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_categories`
--

INSERT INTO `country_categories` (`id`, `country_name`) VALUES
(1, 'india'),
(2, 'srilanka'),
(3, 'china'),
(4, 'pakistan'),
(5, 'bangladesh'),
(6, 'singapore'),
(7, 'vietnam'),
(8, 'malaysia'),
(9, 'russia'),
(10, 'south korea'),
(11, 'north korea'),
(12, 'england'),
(13, 'afghanistan '),
(14, 'burma'),
(15, 'thailand'),
(16, 'United States'),
(17, 'United Kingdom'),
(18, 'hong kong'),
(19, 'switzerland'),
(20, 'south africa'),
(21, 'Brasil'),
(33, 'Georgia'),
(34, 'France'),
(35, 'toto'),
(36, 'Italia'),
(37, 'sdsads'),
(38, 'sefdsf'),
(39, 'dvfdf'),
(40, 'ranji'),
(41, 'poland');

-- --------------------------------------------------------

--
-- Table structure for table `degree_categories`
--

DROP TABLE IF EXISTS `degree_categories`;
CREATE TABLE `degree_categories` (
  `id` int(11) NOT NULL,
  `degree_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `degree_categories`
--

INSERT INTO `degree_categories` (`id`, `degree_name`, `description`) VALUES
(1, 'MBBS', ''),
(2, 'BMBS', ''),
(3, 'MBChB', ''),
(4, 'MBBCh', ''),
(5, 'DO', ''),
(6, 'MD', ''),
(7, 'Dr.MuD', ''),
(8, 'Dr.Med', ''),
(9, 'MCM', ''),
(10, 'MMSc', ''),
(11, 'MMedSc', ''),
(12, 'MM', ''),
(13, 'MMed', ''),
(14, 'MPhil', ''),
(15, 'MS', ''),
(16, 'MSurg', ''),
(17, 'MChir', ''),
(18, 'MCh', ''),
(19, 'ChM', ''),
(20, 'CM', ''),
(21, 'MSc', ''),
(22, 'DCM', ''),
(23, 'DClinSurg', ''),
(24, 'DMSc', ''),
(25, 'DMedSc', ''),
(26, 'PhD', ''),
(27, 'DPhil', ''),
(28, 'DPhil', ''),
(29, 'DS', ''),
(30, 'DSurg', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE `doctor` (
  `end_date` varchar(255) DEFAULT NULL,
  `trial_date` varchar(255) DEFAULT NULL,
  `type_selection` varchar(255) DEFAULT NULL,
  `cities_id` int(11) DEFAULT NULL,
  `clinic_id` varchar(255) DEFAULT NULL,
  `hospital_id` varchar(255) DEFAULT NULL,
  `medical_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT '0',
  `terms` varchar(200) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `doctor_firstname` varchar(255) DEFAULT NULL,
  `doctor_lastname` varchar(255) DEFAULT NULL,
  `doctor_age` int(11) DEFAULT NULL,
  `display_image` varchar(255) DEFAULT NULL,
  `specialty` varchar(255) DEFAULT NULL,
  `doctor_sex` varchar(255) DEFAULT NULL,
  `doctor_degree` varchar(255) DEFAULT NULL,
  `doctor_affiliations` varchar(255) DEFAULT NULL,
  `doctor_languages` varchar(255) DEFAULT NULL,
  `doctor_experience` varchar(255) DEFAULT NULL,
  `doctor_awards` varchar(255) DEFAULT NULL,
  `doctor_memberships` varchar(255) DEFAULT NULL,
  `visitation` varchar(255) DEFAULT NULL,
  `insurance` varchar(255) DEFAULT NULL,
  `about_doctor` varchar(1000) DEFAULT NULL,
  `working_time` varchar(1000) DEFAULT NULL,
  `break_time` varchar(1000) DEFAULT NULL,
  `vacation_time` varchar(1000) DEFAULT NULL,
  `cost_duration` varchar(255) DEFAULT NULL,
  `time_duration` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `doctor_office_country` varchar(255) DEFAULT NULL,
  `doctor_office_address` varchar(255) DEFAULT NULL,
  `doctor_office_state` varchar(255) DEFAULT NULL,
  `doctor_office_city` varchar(255) DEFAULT NULL,
  `doctor_office_zip` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`end_date`, `trial_date`, `type_selection`, `cities_id`, `clinic_id`, `hospital_id`, `medical_id`, `status`, `terms`, `id`, `email`, `password`, `doctor_firstname`, `doctor_lastname`, `doctor_age`, `display_image`, `specialty`, `doctor_sex`, `doctor_degree`, `doctor_affiliations`, `doctor_languages`, `doctor_experience`, `doctor_awards`, `doctor_memberships`, `visitation`, `insurance`, `about_doctor`, `working_time`, `break_time`, `vacation_time`, `cost_duration`, `time_duration`, `latitude`, `longitude`, `phone`, `doctor_office_country`, `doctor_office_address`, `doctor_office_state`, `doctor_office_city`, `doctor_office_zip`, `username`) VALUES
('2018-01-09', '2017-01-27', 'hospital', 1, '0', '2', '0', '1', 'agreed', 1, 'mark@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Mark ', 'Spitz', 30, 'assets/uploads/img/1493870131_doctor2.jpg', '2', 'Male', '5', '1', '8,13', '5years', 'state best dotor', 'international doctor\'s association', '2', '13', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '{"mon":{"start":"1:30am","end":"12:30am"},"tue":{"start":"1:00am","end":"8:00pm"},"wed":{"start":"12:30am","end":"1:00am"},"thu":{"start":"9:00am","end":"10:00am"},"fri":{"start":"1:00am","end":"1:30am"},"sat":{"start":"1:00am","end":"2:00am"},"sun":{"start":"","end":""}}', '{"mon":[{"start":"12:00am","end":"1:00am"},{"start":"12:30am","end":"2:00am"},{"start":"12:30am","end":"2:00am"},{"start":"12:30am","end":"2:00am"}],"tue":[{"start":"1:00am","end":"12:00am"}],"wed":[{"start":"1:00am","end":"1:30am"},{"start":"1:00am","end":"1:30am"},{"start":"1:00am","end":"1:30am"},{"start":"1:00am","end":"1:30am"},{"start":"1:00am","end":"1:30am"}],"thu":[{"start":"1:00am","end":"12:00am"}],"fri":[{"start":"2:00am","end":"1:30am"}],"sat":[{"start":"12:00am","end":"1:00am"}],"sun":[{"start":"2:00am","end":"1:30am"}]}', '[{"startdate":"2017-01-12","enddate":"2017-01-31"}]', '1000', '60', '13.671', '80.230', '9578656943', '1', '9/111,shun street', '14', '19', '624619', ''),
('2018-01-09', '2017-01-24', 'medical', 2, '5', '0', '0', '1', 'agreed', 2, 'robert@gmail.com', '45becd6c5dd83e2179cd81df8640cd5a', 'Robert', ' Menzies ', 28, 'assets/uploads/img/1493870131_doctor2.jpg', '1,2,3', 'Male', '2', '2', '8,11', '5 year', 'state best dotor', 'international doctor association', '3', '2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '{"mon":{"start":"11:00am","end":"10:00am"},"tue":{"start":"9:00am","end":"10:00am"},"wed":{"start":"9:00am","end":"10:00pm"},"thu":{"start":"9:00am","end":"10:00am"},"fri":{"start":"9:00am","end":"1:00pm"},"sat":{"start":"9:00am","end":"10:00pm"},"sun":{"start":"10:00am","end":"12:00pm"}}', '{"mon":[{"start":"12:30 AM","end":"01:00 AM"},{"start":"12:30 AM","end":"01:00 AM"}],"tue":[{"start":"12:30 AM","end":"01:00 AM"}],"wed":[{"start":"12:30 AM","end":"01:00 AM"}],"thu":[{"start":"12:30 AM","end":"01:00 AM"}],"fri":[{"start":"12:30 AM","end":"01:00 AM"}],"sat":[{"start":"12:30 AM","end":"01:00 AM"},{"start":"12:30 AM","end":"01:30 AM"}],"sun":[{"start":"12:30 AM","end":"01:00 AM"},{"start":"12:30 AM","end":"01:00 AM"},{"start":"12:30 AM","end":"01:00 AM"}]}', '[{"startdate":"2016-10-15","enddate":"2016-10-10"},{"startdate":"2016-10-15","enddate":"2016-10-10"},{"startdate":"2016-12-09","enddate":"2016-12-09"}]', '', '', '13.358', '80.500', '', '6', '7/25,colonel street,devikulam', '20', '25', '635001', ''),
('2018-01-09', '2017-01-24', 'medical', 1, '0', '0', '1', '1', 'agreed', 3, 'lasse@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Lasse ', 'Viren', 26, 'assets/uploads/img/1493870268_doctor10.jpg', '1,2,3', 'Female', '2', '5', '1,6', '5 year', 'state best dotor', 'international doctor association', '4', '3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '{"mon":{"start":"11:00am","end":"10:00am"},"tue":{"start":"9:00am","end":"10:00am"},"wed":{"start":"9:00am","end":"10:00pm"},"thu":{"start":"9:00am","end":"10:00am"},"fri":{"start":"9:00am","end":"1:00pm"},"sat":{"start":"9:00am","end":"10:00pm"},"sun":{"start":"10:00am","end":"12:00pm"}}', '{"mon":[{"start":"12:30 AM","end":"01:00 AM"},{"start":"12:30 AM","end":"01:00 AM"}],"tue":[{"start":"12:30 AM","end":"01:00 AM"}],"wed":[{"start":"12:30 AM","end":"01:00 AM"}],"thu":[{"start":"12:30 AM","end":"01:00 AM"}],"fri":[{"start":"12:30 AM","end":"01:00 AM"}],"sat":[{"start":"12:30 AM","end":"01:00 AM"},{"start":"12:30 AM","end":"01:30 AM"}],"sun":[{"start":"12:30 AM","end":"01:00 AM"},{"start":"12:30 AM","end":"01:00 AM"},{"start":"12:30 AM","end":"01:00 AM"}]}', '[{"startdate":"2016-10-15","enddate":"2016-10-10"},{"startdate":"2016-10-15","enddate":"2016-10-10"},{"startdate":"2022-02-22","enddate":"2022-02-22"}]', '', '', '13.260', '80.033', '', '2', 'Flat 3 KSZSU', '16', '21', '01300', ''),
('2018-01-09', '2017-01-24', 'hospital', 1, '0', '1', '0', '1', 'agreed', 4, 'david@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'David', ' Beckham', 25, 'assets/uploads/img/1493870386_doctor4.jpg', '1,2,3', 'Male', '2', '3', '7,8', '5 year', 'state best dotor', 'international doctor association', '1', '1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '{"mon":{"start":"11:00am","end":"10:00am"},"tue":{"start":"9:00am","end":"10:00am"},"wed":{"start":"9:00am","end":"10:00pm"},"thu":{"start":"9:00am","end":"10:00am"},"fri":{"start":"9:00am","end":"1:00pm"},"sat":{"start":"9:00am","end":"10:00pm"},"sun":{"start":"10:00am","end":"12:00pm"}}', '{"mon":[{"start":"12:30 AM","end":"01:00 AM"},{"start":"12:30 AM","end":"01:00 AM"}],"tue":[{"start":"12:30 AM","end":"01:00 AM"}],"wed":[{"start":"12:30 AM","end":"01:00 AM"}],"thu":[{"start":"12:30 AM","end":"01:00 AM"}],"fri":[{"start":"12:30 AM","end":"01:00 AM"}],"sat":[{"start":"12:30 AM","end":"01:00 AM"},{"start":"12:30 AM","end":"01:30 AM"}],"sun":[{"start":"12:30 AM","end":"01:00 AM"},{"start":"12:30 AM","end":"01:00 AM"},{"start":"12:30 AM","end":"01:00 AM"}]}', '[{"startdate":"2016-10-15","enddate":"2016-10-10"},{"startdate":"2016-10-15","enddate":"2016-10-10"},{"startdate":"2022-02-22","enddate":"2022-02-22"}]', '', '', '13.385', '80.862', '9578656943', '6', '5/22 Bldg 3 lexile street', '20', '25', '487405', ''),
('2018-01-09', '2017-01-24', 'hospital', 1, '0', '1', '0', '1', 'agreed', 5, 'lain@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Liam ', 'Payne ', 23, 'assets/uploads/img/1493870551_doctor6.jpg', '3,1', 'Female', '2', '2,3', '8,1', '5 year', 'state best dotor', 'international doctor association', '4,1', '1,8', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '{"mon":{"start":"9:30am","end":"3:15pm"},"tue":{"start":"8:00am","end":"3:15pm"},"wed":{"start":"8:00am","end":"3:15pm"},"thu":{"start":"8:00am","end":"3:15pm"},"fri":{"start":"8:00am","end":"3:15pm"},"sat":{"start":"8:00am","end":"3:15pm"},"sun":{"start":"9:30am","end":"3:15pm"}}', '{"mon":[{"start":"9:15pm","end":"10:15pm"}],"tue":[{"start":"9:15pm","end":"10:15pm"}],"wed":[{"start":"9:15pm","end":"10:15pm"}],"thu":[{"start":"9:15pm","end":"10:15pm"}],"fri":[{"start":"9:15pm","end":"10:15pm"}],"sat":[{"start":"9:15pm","end":"10:15pm"}],"sun":[{"start":"9:15pm","end":"12:00am"}]}', '[{"startdate":"2032-03-23","enddate":"2032-03-23"},{"startdate":"2032-03-25","enddate":"2032-03-25"}]', '', '', '13.023', '80.946', '', '3', '22KsJ,paneer street', '17', '22', '641001', ''),
('2018-01-09', '2017-01-24', 'individual', 1, '0', '0', '0', '1', 'agreed', 6, 'kelly@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'Kelly ', 'Holmes', 23, NULL, '1,3', 'Female', '1,2', '4,6', '2,8', '5 year', 'state best dotor', 'international doctor association', '2,4', '1,3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '{"mon":{"start":"5:30am","end":"7:30am"},"tue":{"start":"5:30am","end":"7:30am"},"wed":{"start":"5:30am","end":"7:30am"},"thu":{"start":"5:30am","end":"7:30am"},"fri":{"start":"5:30am","end":"7:30am"},"sat":{"start":"5:30am","end":"7:30am"},"sun":{"start":"5:30am","end":"7:30pm"}}', '{"mon":[{"start":"12:30 PM","end":"01:00 PM"}],"tue":[{"start":"12:30 PM","end":"01:00 PM"},{"start":"02:00 PM","end":"03:00 PM"}],"wed":[{"start":"12:30 PM","end":"01:00 PM"}],"thu":[{"start":"12:30 PM","end":"01:00 PM"}],"fri":[{"start":"12:30 AM","end":"01:00 AM"}],"sat":[{"start":"12:30 AM","end":"01:00 AM"}],"sun":[{"start":"12:30 AM","end":"01:00 AM"}]}', '[{"startdate":"2016-10-15","enddate":"2016-10-17"}]', '', '', '13.835', '80.467', '', '8', '7/11,vinayagar street', '22', '27', '682001', ''),
(NULL, '2017-06-22', 'individual', 3, NULL, NULL, NULL, '1', 'agreed', 7, 'doc@bookmydoc.com', 'e10adc3949ba59abbe56e057f20f883e', 'vimal', 'pandey', 23, 'assets/uploads/doctor/1.png', '5,6', 'Male', '2,19', '1,2', '28,13', '5 years', 'Academy awards', 'hermand doctors assciation', '8,10,12', '2,13', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '{"mon":{"start":"12:30am","end":"1:00am"},"tue":{"start":"","end":""},"wed":{"start":"","end":""},"thu":{"start":"","end":""},"fri":{"start":"","end":""},"sat":{"start":"","end":""},"sun":{"start":"","end":""}}', '{"mon":[{"start":"12:30am","end":"1:00am"}],"tue":[{"start":"","end":""}],"wed":[{"start":"","end":""}],"thu":[{"start":"","end":""}],"fri":[{"start":"","end":""}],"sat":[{"start":"","end":""}],"sun":[{"start":"","end":""}]}', '[{"startdate":"2017-06-08","enddate":"2017-06-22"}]', NULL, NULL, '10.008', '77.616', NULL, NULL, '#12 Blvd, chinzhou street', NULL, NULL, NULL, NULL),
(NULL, '2017-06-22', NULL, 4, '8', NULL, NULL, '1', 'agreed', 8, 'tane@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'tane', 'tiouzhu', NULL, 'assets/uploads/1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, NULL, NULL, NULL, NULL, '10.451', '78.132', '9578656943', NULL, '#14 Miami Flat, Miami street', NULL, NULL, '624563', NULL),
(NULL, '2017-06-23', NULL, 5, NULL, '7', NULL, '1', 'agreed', 9, 'kapoormanise@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'kapoor', 'raj', NULL, 'assets/uploads/1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sadfds', NULL, NULL, NULL, NULL, NULL, '10.829', '77.012', '9578656943', NULL, 'sdfdsf', NULL, NULL, NULL, NULL),
(NULL, '2017-06-23', 'hospital', 3, NULL, '8', NULL, '1', 'agreed', 10, 'tomer@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'tingsa', 'tomer', NULL, 'assets/uploads/1.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'edfewwr', NULL, NULL, NULL, NULL, NULL, '10.332', '77.451', '9578656943', NULL, 'sdfdfs', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_gallery`
--

DROP TABLE IF EXISTS `doctor_gallery`;
CREATE TABLE `doctor_gallery` (
  `id` int(11) NOT NULL,
  `doctor_id` varchar(100) DEFAULT NULL,
  `image` longtext,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_gallery`
--

INSERT INTO `doctor_gallery` (`id`, `doctor_id`, `image`, `user_id`) VALUES
(9, '2', 'uploads/doctor/1493879826_1-doctor2.jpg', 1),
(11, '8', 'uploads/doctor/1493879853_1-doctor3.jpg', 1),
(12, '9', 'uploads/doctor/1493879870_1-doctor8.jpg', 1),
(13, '10', 'uploads/doctor/1493879883_1-doctor10.jpg', 1),
(16, '2', 'uploads/doctor/1493879969_1-doctor8.jpg', 1),
(17, '10', 'uploads/doctor/1493879991_1-doctor9.jpg', 1),
(20, '7', 'assets/uploads/doctor/1.jpg', NULL),
(21, '7', 'assets/uploads/doctor/1.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_package`
--

DROP TABLE IF EXISTS `doctor_package`;
CREATE TABLE `doctor_package` (
  `end_date` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `payment_date` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `payment_gross` varchar(255) DEFAULT NULL,
  `currency_code` varchar(255) DEFAULT NULL,
  `txn_id` varchar(255) DEFAULT NULL,
  `client_email` varchar(255) DEFAULT NULL,
  `confirmed_date` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_package`
--

INSERT INTO `doctor_package` (`end_date`, `payment_status`, `payment_date`, `status`, `package_id`, `doctor_id`, `id`, `payment_gross`, `currency_code`, `txn_id`, `client_email`, `confirmed_date`, `created_date`) VALUES
(NULL, NULL, NULL, '0', 2, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL),
('', 'Completed', '2017-01-06 12:07:24', '1', 2, 1, 4, '100.00', 'USD', '36063593K2155684U', 'oliviajohn11@gmail.com', '2017-01-06', '2017-01-06 16:45:02'),
('', 'Completed', '2017-01-06 12:23:23', '1', 9, 1, 6, '300.00', 'USD', '0DC26081PV566445P', 'oliviajohn11@gmail.com', '2017-01-06', '2017-01-06 17:11:04'),
('2017-04-09', 'Completed', '2017-01-09 07:54:00', '1', 2, 1, 9, '100.00', 'USD', '3WB7500482147673A', 'oliviajohn11@gmail.com', '2017-01-09', '2017-01-09 12:41:43'),
('2018-01-09', 'Completed', '2017-01-09 07:56:11', '1', 9, 1, 10, '300.00', 'USD', '5L9230238A886592C', 'oliviajohn11@gmail.com', '2017-01-09', '2017-01-09 12:43:45'),
('2018-01-09', 'Completed', '2017-01-09 08:16:06', '1', 9, 1, 11, '300.00', 'USD', '59V73434TR666131L', 'oliviajohn11@gmail.com', '2017-01-09', '2017-01-09 13:03:48'),
('2017-02-08', 'Completed', '2017-01-09 12:15:26', '1', 1, 1, 12, '50.00', 'USD', '79K214554E4903701', 'oliviajohn11@gmail.com', '2017-01-09', '2017-01-09 17:03:09'),
('', '', '', '0', 9, 1, 13, '', '', '', '', '', '2017-01-10 15:40:34'),
('2017-04-24', 'Completed', '2017-01-24 05:52:09', '1', 2, 1, 14, '100.00', 'USD', '3MB073834X070751S', 'oliviajohn11@gmail.com', '2017-01-24', '2017-01-24 10:40:18'),
('2017-04-24', 'Completed', '2017-01-24 10:01:34', '1', 2, 1, 15, '100.00', 'USD', '4PL00011K69139058', 'oliviajohn11@gmail.com', '2017-01-24', '2017-01-24 14:49:07'),
(NULL, NULL, NULL, '0', 2, 1, 16, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, '0', 9, 1, 17, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, '0', 2, 1, 18, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, '0', 9, 1, 19, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, '0', 2, 1, 20, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, '0', 9, 1, 21, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, '0', 2, 1, 22, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, '0', 1, 1, 23, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, '0', 2, 1, 24, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, '0', 1, 9, 25, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, '0', 1, 9, 26, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, '0', 1, 9, 27, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, '0', 1, 9, 28, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `status` tinyint(1) DEFAULT '1' COMMENT '1=Active, 0=Block',
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`status`, `id`, `title`, `date`, `created`, `modified`) VALUES
(1, 1, 'Internet of Things World Forum', '2016-11-01', '2015-11-09 06:15:17', '2015-11-09 06:15:17'),
(1, 2, 'The Future of Money and Technology Summit', '2016-11-01', '2015-11-09 06:15:17', '2015-11-09 06:15:17'),
(1, 3, 'Chrome Dev Summit', '2015-11-26', '2015-11-09 06:15:17', '2015-11-09 06:15:17'),
(1, 4, 'The Lean Startup Conference', '2015-11-17', '2015-11-09 06:15:17', '2015-11-09 06:15:17'),
(1, 5, 'Web Submit for Developers', '2015-11-17', '2015-11-09 06:15:17', '2015-11-09 06:15:17');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

DROP TABLE IF EXISTS `hospital`;
CREATE TABLE `hospital` (
  `end_date` varchar(255) DEFAULT NULL,
  `type_selection` varchar(255) DEFAULT NULL,
  `terms` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT '0',
  `parent_id` int(10) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `cities_id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `hospital_name` varchar(255) DEFAULT NULL,
  `display_image` varchar(255) DEFAULT NULL,
  `hospital_established_date` varchar(255) DEFAULT NULL,
  `specialty` varchar(255) DEFAULT NULL,
  `visitation` varchar(255) DEFAULT NULL,
  `insurance` varchar(255) DEFAULT NULL,
  `hospital_memberships` varchar(255) DEFAULT NULL,
  `hospital_languages` varchar(255) DEFAULT NULL,
  `hospital_affilliations` varchar(500) DEFAULT NULL,
  `hospital_awards` varchar(255) DEFAULT NULL,
  `amenities` varchar(500) DEFAULT NULL,
  `about_hospital` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `hospital_website` varchar(255) DEFAULT NULL,
  `hospital_address` varchar(255) DEFAULT NULL,
  `hospital_country` varchar(255) DEFAULT NULL,
  `hospital_state` varchar(255) DEFAULT NULL,
  `hospital_city` varchar(255) DEFAULT NULL,
  `hospital_zip` varchar(255) DEFAULT NULL,
  `trial_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`end_date`, `type_selection`, `terms`, `status`, `parent_id`, `id`, `cities_id`, `username`, `email`, `password`, `hospital_name`, `display_image`, `hospital_established_date`, `specialty`, `visitation`, `insurance`, `hospital_memberships`, `hospital_languages`, `hospital_affilliations`, `hospital_awards`, `amenities`, `about_hospital`, `latitude`, `longitude`, `phone`, `hospital_website`, `hospital_address`, `hospital_country`, `hospital_state`, `hospital_city`, `hospital_zip`, `trial_date`) VALUES
('2018-01-24', 'hospital', 'agreed', '1', 1, 2, 2, '', 'chris@gmail.com', 'c33367701511b4f6020ec61ded352059', 'chris hani baragwanath', 'http://192.168.138.31/TRAINEES/reshma/Bookmydoc/uploads/1.jpg', 'dff', '1,2,3,4,5,6,7,8,9,10', '1,2,3,5,6,8,9,10,11,12,13,16,17,18,19', '1,2,3,4,5,6', 'international hospital association', '8,28,29,30,31', '2', 'State best hospital award', '3', 'aa', '-26.258', '27.951', '9578656943', 'fdgfg.com', '26 Chris Hani Rd, Johannesburg, 1860, South Africa', '20', '36', '41', '1860', '2017-01-24'),
('2018-01-24', 'individual', 'agreed', '1', 2, 3, 1, '', 'ormond@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'great ormond street hospital', 'http://192.168.138.31/TRAINEES/reshma/Bookmydoc/uploads/5.png', 'dff', '1,2,3,4,5,6,7,8,9,10', '1,2,3,5,6,8,9,10,11,12,13,16,17,18,19', '1,2,3,4,5,6', 'international hospital association', '8', '2', 'State best hospital award', '1', 'aa', '51.403', '-0.101', '9578656943', 'fdgfg.com', 'Great Ormond St, London WC1N 3JH, UK', '17', '32', '37', '18605', '2017-01-24'),
('2018-01-24', 'individual', 'agreed', '1', 2, 4, 1, '', 'karolinska@gmail.com', 'b64efb80aea1a96478309adcc003a26f', 'karolinska hospital', 'http://192.168.138.31/TRAINEES/reshma/Bookmydoc/uploads/9.png', 'dff', '1,2,3,4,5,6,7,8,9,10', '1,2,3,5,6,8,9,10,11,12,13,16,17,18,19', '1,2,3,4,5,6', 'international hospital association', '8,27', '2', 'State best hospital award', '2', 'aa', '59.369', '18.018', '9578656943', 'fdgfg.com', 'Karolinska Universitetssjukhuset, Karolinska vägen, 171 76 Solna, Sweden', '21', '37', '42', '17176', '2017-01-24'),
('2018-01-24', 'individual', 'agreed', '1', 2, 5, 1, '', 'fortis@gmail.com', '205afb9453ee1a66449ea6564410f6d6', 'fortis memorial research institute and hospital', 'http://192.168.138.31/TRAINEES/reshma/Bookmydoc/uploads/3.png', 'dff', '1,2,3,4,5,6,7,8,9,10', '1,2,3,5,6,8,9,10,11,12,13,16,17,18,19', '1,2,3,4,5,6', 'international hospital association', '4,8', '3', 'State best hospital award', '4', 'aa', '28.479', '77.034', '9578656943', 'fdgfg.com', 'Sector - 44, Opposite HUDA City Centre, Gurugram, Haryana 122002', '1', '2', '2', '122002', '2017-01-24'),
(NULL, 'subhospital', 'agreed', '1', 2, 6, 1, NULL, 'admisssssssssn@ex.com', 'e10adc3949ba59abbe56e057f20f883e', 'wesref', 'http://192.168.138.31/TRAINEES/reshma/Bookmydoc/uploads/2.png', 'dff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dfdsg', '9.683', '77.308', '9578656943', 'fdgfg.com', 'sdfdsfdfdsgdfg', '-1', '-1', '-1', 'dgdfg', '2017-06-22'),
(NULL, 'individual', 'agreed', '1', NULL, 7, 2, NULL, 'manise@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'manise', 'assets/uploads/batra.jpg', 'dff', '6,16', '10', '2,13', 'miami association membership', '9,25', '6,7', 'miami association awards', '9,10', 'zdfdsf', '9.640', '77.682', '9578656943', 'fdgfg.com', 'asddssd', NULL, NULL, NULL, '624619', '2017-06-23'),
(NULL, 'subhospital', 'agreed', '1', 7, 8, 3, NULL, 'manisemini@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'manisemini', 'assets/uploads/batra.jpg', 'dff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdds', '10.084', '77.682', '9578656943', 'fdgfg.com', 'asddssd', NULL, NULL, NULL, 'dgdfg', '2017-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_gallery`
--

DROP TABLE IF EXISTS `hospital_gallery`;
CREATE TABLE `hospital_gallery` (
  `user_id` int(11) DEFAULT NULL,
  `hospital_id` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `image` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital_gallery`
--

INSERT INTO `hospital_gallery` (`user_id`, `hospital_id`, `id`, `image`) VALUES
(1, '3', 9, 'assets/uploads/img/1493814854_1-hospital10.jpg'),
(NULL, '7', 10, 'assets/uploads/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_package`
--

DROP TABLE IF EXISTS `hospital_package`;
CREATE TABLE `hospital_package` (
  `hospital_type` varchar(255) DEFAULT NULL,
  `payment_date` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `hospital_id` int(11) DEFAULT NULL COMMENT 'hospital/medical/clinic',
  `id` int(11) NOT NULL,
  `payment_gross` varchar(255) DEFAULT NULL,
  `currency_code` varchar(255) DEFAULT NULL,
  `txn_id` varchar(255) DEFAULT NULL,
  `client_email` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `confirmed_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital_package`
--

INSERT INTO `hospital_package` (`hospital_type`, `payment_date`, `payment_status`, `end_date`, `status`, `package_id`, `hospital_id`, `id`, `payment_gross`, `currency_code`, `txn_id`, `client_email`, `created_date`, `confirmed_date`) VALUES
('hospital', '2017-01-09 06:38:30', 'Completed', '', '1', 2, 31, 2, '500.00', 'USD', '70N54925D04418050', 'oliviajohn11@gmail.com', '2017-01-09 11:26:06', '2017-01-09'),
('clinic', '2017-01-09 07:00:28', 'Completed', '', '1', 3, 2, 4, '1000.00', 'USD', '21V21856V96610505', 'oliviajohn11@gmail.com', '2017-01-09 11:47:50', '2017-01-09'),
('hospital', '2017-01-09 12:17:28', 'Completed', '2018-01-09', '1', 3, 31, 9, '1000.00', 'USD', '86L94422RH5043142', 'oliviajohn11@gmail.com', '2017-01-09 17:04:32', '2017-01-09'),
('hospital', '2017-01-21 13:59:36', 'Completed', '2018-01-21', '1', 3, 1, 10, '1000.00', 'USD', '199463348U681001D', 'oliviajohn11@gmail.com', '2017-01-21 18:47:45', '2017-01-21'),
('hospital', '2017-01-24 10:21:53', 'Completed', '2018-01-24', '1', 3, 1, 11, '1000.00', 'USD', '5VV70540SN613573U', 'oliviajohn11@gmail.com', '2017-01-24 15:10:02', '2017-01-24'),
('medical', '', '', '', '0', 3, 1, 12, '', '', '', '', '2017-01-24 18:02:52', ''),
('hospital', '', '', '', '0', 2, 2, 13, '', '', '', '', '2017-01-24 18:03:41', ''),
('hospital', NULL, NULL, NULL, '0', 1, 2, 14, NULL, NULL, NULL, NULL, NULL, NULL),
('hospital', NULL, NULL, NULL, '0', 2, 2, 15, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `insurance_categories`
--

DROP TABLE IF EXISTS `insurance_categories`;
CREATE TABLE `insurance_categories` (
  `id` int(255) NOT NULL,
  `insurance_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance_categories`
--

INSERT INTO `insurance_categories` (`id`, `insurance_name`) VALUES
(1, 'Aetna'),
(2, 'Aflac'),
(3, 'Berkshire Hathaway'),
(4, 'CareSource'),
(5, 'Combined Insurance'),
(6, 'Esurance'),
(7, 'Hanover Insurance'),
(8, 'Ironshore'),
(9, 'MetLife'),
(10, 'Mutual of Omaha'),
(11, 'Omega'),
(12, 'Pacific Life'),
(13, 'Apollo Munich Health Insurance'),
(14, 'Cholamandalam MS General Insurance'),
(15, 'Religare'),
(18, 'dth'),
(19, 'Religare'),
(21, 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `languages` varchar(255) DEFAULT NULL,
  `created_date` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_date` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `languages`, `created_date`, `created_by`, `updated_date`, `updated_by`) VALUES
(1, 'english', '2017-06-02  12:22:53', '1', '2017-06-08  14:16:37', '1');

-- --------------------------------------------------------

--
-- Table structure for table `language_categories`
--

DROP TABLE IF EXISTS `language_categories`;
CREATE TABLE `language_categories` (
  `id` int(11) NOT NULL,
  `language_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language_categories`
--

INSERT INTO `language_categories` (`id`, `language_name`) VALUES
(1, 'tamil'),
(2, 'malayalam'),
(3, 'telugu'),
(4, 'hindi'),
(5, 'kannada'),
(6, 'sinhala'),
(7, 'malay'),
(8, 'english'),
(9, 'bengali'),
(10, 'vietnamese'),
(11, 'russian'),
(12, 'korean'),
(13, 'burmese'),
(14, 'thai'),
(15, 'malaysian'),
(16, 'urdu'),
(17, 'marathi'),
(18, 'sindhi'),
(19, 'sanskrit'),
(20, 'nepali'),
(21, 'german'),
(22, 'french'),
(23, 'italian'),
(24, 'romansh'),
(25, 'cantonesse chinese'),
(26, 'mandarin chinese'),
(27, 'swedish'),
(28, 'afrikaans'),
(29, 'xhosa'),
(30, 'zulu'),
(31, 'venda'),
(32, 'abc'),
(38, 'malayalam');

-- --------------------------------------------------------

--
-- Table structure for table `language_set`
--

DROP TABLE IF EXISTS `language_set`;
CREATE TABLE `language_set` (
  `id` int(11) NOT NULL,
  `languages` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_date` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language_set`
--

INSERT INTO `language_set` (`id`, `languages`, `code`, `created_date`, `created_by`, `updated_date`, `updated_by`) VALUES
(1, 'default', NULL, NULL, 0, NULL, NULL),
(2, 'english', NULL, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medical_center`
--

DROP TABLE IF EXISTS `medical_center`;
CREATE TABLE `medical_center` (
  `end_date` varchar(255) DEFAULT NULL,
  `type_selection` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT '0',
  `terms` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `cities_id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `medical_name` varchar(255) DEFAULT NULL,
  `display_image` varchar(255) DEFAULT NULL,
  `specialty` varchar(255) DEFAULT NULL,
  `visitation` varchar(255) DEFAULT NULL,
  `medical_languages` varchar(255) DEFAULT NULL,
  `medical_established_date` varchar(255) DEFAULT NULL,
  `medical_awards` varchar(255) DEFAULT NULL,
  `medical_memberships` varchar(255) DEFAULT NULL,
  `medical_affilliations` varchar(255) DEFAULT NULL,
  `amenities` varchar(255) DEFAULT NULL,
  `insurance` varchar(255) DEFAULT NULL,
  `about_medical` varchar(255) DEFAULT NULL,
  `medical_website` varchar(255) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `medical_address` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `medical_country` varchar(255) DEFAULT NULL,
  `medical_state` varchar(255) DEFAULT NULL,
  `medical_city` varchar(255) DEFAULT NULL,
  `medical_zip` varchar(255) DEFAULT NULL,
  `trial_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_center`
--

INSERT INTO `medical_center` (`end_date`, `type_selection`, `status`, `terms`, `parent_id`, `id`, `cities_id`, `username`, `email`, `password`, `medical_name`, `display_image`, `specialty`, `visitation`, `medical_languages`, `medical_established_date`, `medical_awards`, `medical_memberships`, `medical_affilliations`, `amenities`, `insurance`, `about_medical`, `medical_website`, `phone`, `medical_address`, `latitude`, `longitude`, `medical_country`, `medical_state`, `medical_city`, `medical_zip`, `trial_date`) VALUES
('2018-01-24', 'individual', '1', 'agreed', 2, 1, 1, '', 'kmch@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'kovai medical center', '', '5', '12', '13', '', 'State best healthcare center award', 'tamilnadu healthcenter ', '6', '9', '13', 'niz', '', '', 'indira nagar,civil aerodrome', '11.047', '77.043', '1', '6', '10', '641001', '2017-01-24'),
('2018-01-24', 'individual', '1', 'agreed', 3, 2, 2, '', 'texamed@gmail.com', 'ffb6c58fc852939c463fe99cc80a06e8', 'texas medical center', '', '1,2,3,4,5,6,7,8,9,10', '1,2,3,5,6,8,9,10,11,12,13,16,17,18,19', '8', '', 'State best healthcare center award', 'US healthcenter association', '3', '13', '1,2,3,4,5,6', 'saa', '', '', '145 W UNIV PKWY', '29.751', '-95.309', '16', '31', '36', '73301 ', '2017-01-24'),
('2018-01-24', 'individual', '1', 'agreed', 1, 3, 1, '', 'bum@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Bumrungrad International medical center', '', '1,2,3,4,5,6,7,8,9,10', '1,2,3,5,6,8,9,10,11,12,13,16,17,18,19', '8,14', '', 'State best healthcare center award', 'Thailand healthcenter association', '5', '5', '1,2,3,4,5,6', 'goood', '', '', '33 soi sukhumuit 3,khlong toei nuea,watthana', '13.752', '100.560', '15', '30', '35', '10160', '2017-01-24'),
('2018-01-24', 'individual', '1', 'agreed', 2, 4, 1, '', 'klinik@gmail.com', 'b9e6bea049953ede220418fef3ae1baa', 'Klinik Hirslanden ', '', '1,2,3,4,5,6,7,8,9,10', '1,2,3,5,6,8,9,10,11,12,13,16,17,18,19', '8,21,22,23,24', '', 'State best healthcare center award', 'Switzerland health center association', '3', '2', '1,2,3,4,5,6', 'aa', '', '', 'Witellikerstrasse 40, 8032 Zürich, Switzerland', '47.378', '8.546', '19', '34', '39', '8000', '2017-01-24'),
('2018-01-24', 'individual', '0', 'agreed', 3, 5, 1, '', 'matilda@gmail.com', '91f2b7dfd8fc3d900133c356f92c4e20', 'Matilda medical center(central)', '', '1,2,3,4,5,6,7,8,9,10', '1,2,3,5,6,8,9,10,11,12,13,16,17,18,19', '8,25,26', '', 'State best healthcare center award', 'hongkong health center association', '4', '5', '1,2,3,4,5,6', 'gud', '', '', '502, Prosperity Tower, 39 Queen\'s Road Central, Central, Hong Kong', '22.361', '114.157', '18', '33', '38', '852', '2017-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `medical_gallery`
--

DROP TABLE IF EXISTS `medical_gallery`;
CREATE TABLE `medical_gallery` (
  `id` int(11) NOT NULL,
  `medical_id` varchar(100) DEFAULT NULL,
  `image` longtext,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_gallery`
--

INSERT INTO `medical_gallery` (`id`, `medical_id`, `image`, `user_id`) VALUES
(1, '1', 'uploads/hospital/1493880718_1-1476966831_1-praveen.png', 1),
(2, '2', 'uploads/hospital/1493880729_1-medical2.jpg', 1),
(3, '3', 'uploads/hospital/1493880736_1-medical3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `package_name` varchar(255) DEFAULT NULL,
  `package_price` varchar(255) DEFAULT NULL,
  `package_period` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_name`, `package_price`, `package_period`) VALUES
(1, 'silver', '50', '25 days'),
(2, 'gold', '100', '3 months'),
(9, 'diamond', '300', '1 year');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE `patient` (
  `status` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `patient_firstname` varchar(255) DEFAULT NULL,
  `patient_lastname` varchar(255) DEFAULT NULL,
  `terms` varchar(11) DEFAULT NULL,
  `patient_sex` varchar(255) DEFAULT NULL,
  `patient_display_image` varchar(255) DEFAULT NULL,
  `insurance` varchar(255) DEFAULT NULL,
  `visitation` varchar(500) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `languages` varchar(255) DEFAULT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `trial_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`status`, `id`, `email`, `password`, `patient_firstname`, `patient_lastname`, `terms`, `patient_sex`, `patient_display_image`, `insurance`, `visitation`, `dob`, `age`, `languages`, `marital_status`, `phone`, `address`, `country`, `state`, `city`, `zip`, `username`, `trial_date`, `end_date`) VALUES
(1, 1, 'patient@bookmydoc.com', 'e10adc3949ba59abbe56e057f20f883e', 'daniel', 'vettori', 'agreed', 'male', 'uploads/patient/1.png', '14', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rating_clinic`
--

DROP TABLE IF EXISTS `rating_clinic`;
CREATE TABLE `rating_clinic` (
  `clinic_id` varchar(255) DEFAULT NULL,
  `patient_id` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `review` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating_clinic`
--

INSERT INTO `rating_clinic` (`clinic_id`, `patient_id`, `id`, `rating`, `review`, `date`) VALUES
('1', '1', 1, '4', 'good', '26-09-2016');

-- --------------------------------------------------------

--
-- Table structure for table `rating_doctor`
--

DROP TABLE IF EXISTS `rating_doctor`;
CREATE TABLE `rating_doctor` (
  `doctor_id` varchar(255) DEFAULT NULL,
  `patient_id` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `review` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating_doctor`
--

INSERT INTO `rating_doctor` (`doctor_id`, `patient_id`, `id`, `review`, `rating`, `date`) VALUES
('1', '1', 1, 'good', '4', '26-09-2016'),
('1', '1', 2, 'ok', '3', '26-09-2016'),
('1', '1', 3, 'ok', '3', '26-09-2016'),
('1', '1', 4, 'really good', '3', '26-09-2016'),
('1', '1', 5, 'very good', '5', '26-09-2016'),
('1', '1', 6, 'good', '5', '26-09-2016'),
('2', '2', 8, 'good', '5', '03-12-2016'),
('2', '1', 9, 'good', '3', '17-01-02'),
('65', '1', 10, 'gfgfg', '3', '17-01-03'),
('9', '1', 11, 'worst', '1', '17-01-03'),
('9', '1', 12, 'super', '4', '17-01-03'),
('9', '1', 13, 'sds', '5', '17-01-03'),
('76', '66', 14, 'asadd', '3', '17-01-12'),
('10', '71', 15, 'qqq\r\n', '', '17-01-13'),
('10', '71', 16, 'qqq\r\n', '', '17-01-13'),
('64', '56', 17, 'ok', '5', '17-01-14'),
('69', '56', 18, 'test', '4', '17-01-14'),
('9', '83', 19, 'good', '3', '17-05-18'),
('9', '83', 20, 'good', '3', '17-05-18'),
('9', '84', 21, 'wefrref', '4', '17-06-03'),
('9', '84', 22, 'fghyghj', '4', '17-06-06'),
('9', '84', 23, 'ddfgfgh', '4', '17-06-06');

-- --------------------------------------------------------

--
-- Table structure for table `rating_hospital`
--

DROP TABLE IF EXISTS `rating_hospital`;
CREATE TABLE `rating_hospital` (
  `hospital_id` varchar(255) DEFAULT NULL,
  `patient_id` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `review` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating_hospital`
--

INSERT INTO `rating_hospital` (`hospital_id`, `patient_id`, `id`, `review`, `rating`, `date`) VALUES
('1', '1', 1, 'good', '5', '26-09-2016'),
('2', '40', 2, 'worst', '4', '26-09-2016');

-- --------------------------------------------------------

--
-- Table structure for table `rating_medical`
--

DROP TABLE IF EXISTS `rating_medical`;
CREATE TABLE `rating_medical` (
  `medical_id` varchar(255) DEFAULT NULL,
  `patient_id` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `review` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating_medical`
--

INSERT INTO `rating_medical` (`medical_id`, `patient_id`, `id`, `review`, `rating`, `date`) VALUES
('2', '1', 4, 'bad', '5', '2016-12-3'),
('4', '1', 8, 'worst', '5', '2016-12-3');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `favicon` varchar(250) DEFAULT NULL,
  `smtp_username` varchar(250) DEFAULT NULL,
  `smtp_host` varchar(250) DEFAULT NULL,
  `smtp_password` varchar(250) DEFAULT NULL,
  `sender_id` varchar(250) DEFAULT NULL,
  `sms_username` varchar(250) DEFAULT NULL,
  `sms_password` varchar(250) DEFAULT NULL,
  `paypal` varchar(250) DEFAULT NULL,
  `paypalid` varchar(251) DEFAULT NULL,
  `admin_email` varchar(255) DEFAULT NULL,
  `languages` varchar(255) DEFAULT NULL,
  `currency` int(11) DEFAULT NULL,
  `api_key` varchar(255) DEFAULT NULL,
  `app_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `logo`, `favicon`, `smtp_username`, `smtp_host`, `smtp_password`, `sender_id`, `sms_username`, `sms_password`, `paypal`, `paypalid`, `admin_email`, `languages`, `currency`, `api_key`, `app_key`) VALUES
(1, 'Bookmydoc', 'uploads/common/1493899510_logo.png', 'uploads/common/1493899510_fav__icon.png', 'raju@bookmydoc.in', 'localhost', '123456', '101', 'manu', '676', 'https://www.sandbox.paypal.com/cgi-bin/webscr', 'shajeermohammed@gmail.com', 'no-reply@techware.com', '1', 227, 'AIzaSyAPkwBOzGBH1V1sRBzmCWQS-7XoTgPghT0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `specialty_categories`
--

DROP TABLE IF EXISTS `specialty_categories`;
CREATE TABLE `specialty_categories` (
  `id` int(11) NOT NULL,
  `specialty_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialty_categories`
--

INSERT INTO `specialty_categories` (`id`, `specialty_name`) VALUES
(1, 'Pediatrics'),
(2, 'Audiology'),
(3, 'General Medicine'),
(4, 'Family Medicine'),
(5, 'Cardiology'),
(6, 'Chemical Pathology'),
(7, 'Dentistry'),
(8, 'Diagnostic Radiology'),
(9, 'Electrodiagnostic Medicine'),
(10, 'Gastroenterology'),
(11, 'Hematology'),
(12, 'Massage Therapy'),
(13, 'Maternal-Fetal Medicine'),
(14, 'Nephrology'),
(15, 'Neurology'),
(16, 'Diabetology'),
(23, 'manu manu'),
(24, 'rajkumar'),
(33, 'Diabetologyy'),
(35, 'sdf'),
(36, 'zsdds');

-- --------------------------------------------------------

--
-- Table structure for table `state_categories`
--

DROP TABLE IF EXISTS `state_categories`;
CREATE TABLE `state_categories` (
  `country_id` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `state_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_categories`
--

INSERT INTO `state_categories` (`country_id`, `id`, `state_name`) VALUES
('1', 1, 'assam'),
('1', 2, 'haryana'),
('1', 3, 'west bengal'),
('1', 4, 'delhi'),
('1', 5, 'kerala'),
('1', 6, 'tamilnadu'),
('1', 7, 'rajasthan'),
('1', 8, 'maharastra'),
('1', 9, 'utter pradesh'),
('1', 10, 'gujarat'),
('1', 11, 'jammu and kashmir'),
('1', 12, 'odisha'),
('1', 13, 'punjab'),
('1', 14, 'andhra pradesh'),
('1', 15, 'telangana'),
('2', 16, 'colombo'),
('3', 17, 'zhejiang'),
('4', 18, 'Islamabad'),
('5', 19, 'chittagong'),
('6', 20, 'simei'),
('7', 21, 'hanoi'),
('8', 22, 'kuala lampur'),
('9', 23, 'moscow'),
('10', 24, 'ulsan'),
('11', 25, 'rason'),
('12', 26, 'glasgow'),
('13', 27, 'kabul'),
('14', 28, 'pyay'),
('15', 29, 'pattaya'),
('15', 30, 'bangkok'),
('16', 31, 'texas'),
('17', 32, 'london'),
('18', 33, 'central'),
('19', 34, 'zurich'),
('16', 35, 'missouri'),
('20', 36, 'johannesburg'),
('21', 37, 'solna'),
('1', 40, 'kashmir'),
('1', 42, 'keralaa'),
('21', 43, 'Parana'),
('37', 44, 'jkljkl'),
('21', 45, 'srfdf'),
('37', 46, 'sadfsd'),
('38', 47, 'sdfds'),
('40', 48, 'lanj'),
('41', 49, 'symi');

-- --------------------------------------------------------

--
-- Table structure for table `visit_categories`
--

DROP TABLE IF EXISTS `visit_categories`;
CREATE TABLE `visit_categories` (
  `specialty_id` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `reason` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visit_categories`
--

INSERT INTO `visit_categories` (`specialty_id`, `id`, `reason`) VALUES
('1', 1, 'Pregnency Problems'),
('2', 2, 'Hearing Problems'),
('5', 3, 'Heart Problems'),
('15', 4, 'Brain damages'),
('4', 5, 'Aches, Pain, Fever'),
('7', 6, 'Tooth Problems '),
('13', 7, 'High Risk Pregnencies'),
('4', 8, 'Acne'),
('3', 9, 'Tuberclosis(TB)'),
('4', 10, 'Adolescents (Teenagers)'),
('3', 11, 'AIDS (Acquired Immunodeficiency Syndrome (AIDS))'),
('4', 12, 'Alcohol Abuse and Alcoholism'),
('3', 13, 'Alcohol Poisoning in Teens (Alcohol and Teens)'),
('11', 14, 'Blood disorder'),
('12', 15, 'Pain Relief'),
('10', 16, 'Diarrhea'),
('10', 17, 'Abdominal pain or bloating'),
('8', 18, 'X-Ray'),
('6', 19, 'cardiovascular risk'),
('14', 20, 'Kidney Problems'),
('16', 21, 'High blood pressure'),
('16', 22, 'Blood suagr and kidney pain '),
('2', 24, 'errrer'),
('2', 25, 'errrer'),
('2', 26, 'sseerr'),
('2', 27, 'sseerr'),
('2', 28, 'sseerr'),
('2', 29, 'sseerr'),
('2', 30, 'sseerr'),
('2', 31, 'sseerr'),
('2', 32, 'sseerr'),
('2', 33, 'sseerr'),
('2', 34, 'sseerr'),
('2', 35, 'sseerr'),
('2', 36, 'sseerr'),
('2', 37, 'errrer'),
('2', 38, 'errrer'),
('2', 39, 'errrer'),
('2', 40, 'errrer'),
('2', 41, 'errrer'),
('2', 42, 'errrer'),
('2', 43, 'errrer'),
('2', 44, 'errrer'),
('2', 45, 'errrerde'),
('1', 46, 'sdcd'),
('1', 47, 'sdsammm');

-- --------------------------------------------------------

--
-- Table structure for table `web_tokens`
--

DROP TABLE IF EXISTS `web_tokens`;
CREATE TABLE `web_tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `token_patient` varchar(255) DEFAULT NULL,
  `token_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_tokens`
--

INSERT INTO `web_tokens` (`id`, `token`, `token_patient`, `token_status`) VALUES
(1, '24b639a6ef92e76ad8ca983f1d58281e', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `affilliated_hospitals`
--
ALTER TABLE `affilliated_hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amenities_categories`
--
ALTER TABLE `amenities_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `center_packages`
--
ALTER TABLE `center_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_categories`
--
ALTER TABLE `city_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic_gallery`
--
ALTER TABLE `clinic_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id_countries`);

--
-- Indexes for table `country_categories`
--
ALTER TABLE `country_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `degree_categories`
--
ALTER TABLE `degree_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_gallery`
--
ALTER TABLE `doctor_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_package`
--
ALTER TABLE `doctor_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_gallery`
--
ALTER TABLE `hospital_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_package`
--
ALTER TABLE `hospital_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance_categories`
--
ALTER TABLE `insurance_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language_categories`
--
ALTER TABLE `language_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language_set`
--
ALTER TABLE `language_set`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_center`
--
ALTER TABLE `medical_center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_gallery`
--
ALTER TABLE `medical_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating_clinic`
--
ALTER TABLE `rating_clinic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating_doctor`
--
ALTER TABLE `rating_doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating_hospital`
--
ALTER TABLE `rating_hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating_medical`
--
ALTER TABLE `rating_medical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialty_categories`
--
ALTER TABLE `specialty_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_categories`
--
ALTER TABLE `state_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visit_categories`
--
ALTER TABLE `visit_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_tokens`
--
ALTER TABLE `web_tokens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `affilliated_hospitals`
--
ALTER TABLE `affilliated_hospitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `amenities_categories`
--
ALTER TABLE `amenities_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `center_packages`
--
ALTER TABLE `center_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `city_categories`
--
ALTER TABLE `city_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `clinic`
--
ALTER TABLE `clinic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `clinic_gallery`
--
ALTER TABLE `clinic_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id_countries` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;
--
-- AUTO_INCREMENT for table `country_categories`
--
ALTER TABLE `country_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `degree_categories`
--
ALTER TABLE `degree_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `doctor_gallery`
--
ALTER TABLE `doctor_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `doctor_package`
--
ALTER TABLE `doctor_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `hospital_gallery`
--
ALTER TABLE `hospital_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `hospital_package`
--
ALTER TABLE `hospital_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `insurance_categories`
--
ALTER TABLE `insurance_categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `language_categories`
--
ALTER TABLE `language_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `language_set`
--
ALTER TABLE `language_set`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `medical_center`
--
ALTER TABLE `medical_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `medical_gallery`
--
ALTER TABLE `medical_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rating_clinic`
--
ALTER TABLE `rating_clinic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rating_doctor`
--
ALTER TABLE `rating_doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `rating_hospital`
--
ALTER TABLE `rating_hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rating_medical`
--
ALTER TABLE `rating_medical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `specialty_categories`
--
ALTER TABLE `specialty_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `state_categories`
--
ALTER TABLE `state_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `visit_categories`
--
ALTER TABLE `visit_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `web_tokens`
--
ALTER TABLE `web_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
