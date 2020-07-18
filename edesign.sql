-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 18, 2020 at 05:49 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edesign`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `job_title`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'NguyenThienHung', '18520802@gm.uit.edu.vn', NULL, '$2y$10$artvumqu//M80qmj6pdI4u7MncClRBZYX7bRn8oaoF3.EIJjg8esi', 'Manager', NULL, '2020-06-25 11:09:05', '2020-06-25 11:09:05'),
(2, 'hungnt', 'hungnguyenthien97@gmail.com', NULL, '$2y$10$bilnCp.tc13YyowDKvMsGOp2XnICvX.UFBNYhalbta4UoI3AuywB2', 'Manager', NULL, '2020-06-25 11:14:16', '2020-06-25 11:14:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_25_162236_create_admins_table', 2),
(5, '2020_07_05_161703_create_tbl_category_product', 3),
(6, '2020_07_07_202649_create_tbl_product', 4),
(7, '2020_07_10_183733_tbl_shipping', 5),
(8, '2020_07_11_033114_tbl_payment', 6),
(9, '2020_07_11_050800_tbl_order_details', 7),
(10, '2020_07_13_203550_tbl_blog', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `blog_id` int(10) UNSIGNED NOT NULL,
  `blog_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_quote` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_content1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_content2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_content3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_status` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `blog_name`, `blog_image`, `blog_quote`, `blog_content1`, `blog_content2`, `blog_content3`, `blog_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, '10 Ý Tưởng Phối Đồ Với Túi Đeo Chéo Độc Đáo, Thời Thượng', 'phoi-do-tui-deo-cheo-788.jpg', 'Ở bài viết trước, chúng ta đã tìm hiểu về khái niệm và các shop bán túi đeo chéo nam nữ hot nhất. Bên cạnh 2 yếu tố nói trên, cách phối đồ với túi đeo chéo cho nam nữ cũng là chủ đề nhận được nhiều sự quan tâm.\r\n\r\nQua bài viết này,  Simples sẽ gợi ý một số công thức để các bạn có thể dễ dàng phối đồ cùng các mẫu túi đeo chéo nam nữ thật đẹp và phong cách. Hãy cùng theo dõi nhé!', 'I/ Cách phối đồ với túi đeo chéo nam sành điệu\r\n1. Áo thun + quần jeans – Hình thức mang tính ứng dụng cao\r\nphối đồ túi đeo chéo\r\nĐối với các cậu bạn còn ngồi trong ghế nhà trường, mix đồ với túi đeo chéo nam cùng áo thun và quần jeans sẽ là lựa chọn an toàn và hợp lý.\r\nDo bản chất tự do, dễ chịu và có điểm cộng vượt trội là không làm cho tổng thể bí bách khi kết hợp. \r\nNhờ thế mà công thức phối đồ túi đeo chéo nam này được minh chứng là rất phù hợp với các bạn còn trong độ tuổi teen.\r\nphối đồ túi đeo chéo\r\n2. Áo sơ mi + quần tây – Mix đồ lịch sự như một quý ông \r\nLàm thế nào để phối đồ với túi đeo chéo nam cho thật chỉnh chu và lịch thiệp mà không mất nhiều thời gian?\r\nphối đồ túi đeo chéo\r\nphối đồ túi đeo chéo\r\nNhững bạn nam có thể nâng tầm phong cách và diện mạo thêm tinh tế rất đơn giản chỉ bằng một chiếc túi đeo chéo cùng bộ đôi trang phục như trên.\r\n3. Set đồ thể thao – Sự kết hợp khỏe khoắn và cá tính \r\nphối đồ túi đeo chéo\r\nphối đồ với túi đeo chéo đẹp\r\nCác chàng trai cũng có thể sử dụng những mẫu túi đeo chéo nam từ các thương hiệu thể thao quen thuộc như : Adidas, Puma, Supreme, Nike,…để kết hợp cùng trang phục.\r\nphối đồ với túi đeo chéo đẹp\r\n\r\nHình thức này không chỉ khiến việc thống nhất chung về một tổng thể dễ dàng hơn mà còn tạo ra một set đồ dễ mặc và cực trendy.\r\n\r\nCác bạn có thể theo dõi thêm về túi chéo mini qua nội dung:\r\nTổng hợp Các Shop Túi Đeo Chéo Nam Chất Lượng Tại TPHCM\r\nTổng Hợp Các Shop Túi Đeo Chéo Nữ Cực Xinh Tại TPHCM\r\n4. Áo khoác + quần kaki – Phong cách đường phố phóng khoáng\r\nphối đồ với túi đeo chéo đẹp', '5. Áo thun + quần short – Sáng kiến cho những ngày nóng nực\r\nmix đồ cùng túi đeo chéo \r\n\r\nBạn đang mong đợi vào một bí kíp phối quần áo cùng túi đeo chéo nam sao cho thật mát mẻ khi thời tiết đang nóng bức khó chịu.\r\n\r\nThế thì đừng ngại ngần mà bỏ qua “đôi bạn” áo thun kèm quần short đậm chất thoáng mát của mùa hè nhé.\r\n\r\nViệc bạn cần làm lúc này chỉ là kiếm cho mình một mẫu túi chéo nam thật thời trang, vì thật không khó để vào tủ đồ tìm áo thun với quần short đúng không nào?\r\n\r\nmix đồ cùng túi đeo chéo', 'II/ Cách phối đồ với túi đeo chéo nữ thời thượng\r\n1. Quần jogger + áo croptop – Cách phối đồ sexy, cá tính\r\nmix đồ cùng túi đeo chéo \r\n\r\nCá tính – gợi cảm là cụm từ để mô tả về sự pha trộn giữa quần jogger kèm áo croptop.\r\n\r\nXu hướng phối đồ chung với túi đeo chéo này rất được lòng các cô gái yêu thích bởi chúng vừa mang lại style phá cách và pha lẫn một chút sexy.\r\n\r\nmix đồ cùng túi đeo chéo \r\n\r\n2. Quần thể thao + Áo hoodie – Phong cách thể thao cực cool\r\nCũng tương tự như cách kết hợp trên, bộ đôi quần thể thao cùng áo hoodie tạo cho người mặc một phong cách thật cool khi sử dụng chung với túi đeo chéo.\r\n\r\nmix đồ cùng túi đeo chéo \r\n\r\nMặc dù không thể sexy bằng, bù lại công thức trên có thể mang đến một hiệu ứng ấn tượng và thu hút đến không ngờ.\r\n\r\nLời kết : Với nội dung “10 Ý Tưởng Phối Đồ Độc Đáo, Thời Thượng Với Túi Đeo Chéo”.\r\nSimples tin rằng bài viết này sẽ là cứu cánh giải nguy cho các bạn trẻ vào những lúc cạn kiệt hay bí ý tưởng khi phối quần áo cùng túi đeo chéo thật tiện lợi.', 1, NULL, NULL, NULL),
(3, 'Unisex là gì? Cách phối đồ theo phong cách Unisex cực cá tính', 'unisex-la-gi-986.jpg', 'Để bắt kịp xu hướng trẻ trung và năng động thời hiện đại, ngày nay sự bình đẳng đã được nâng cao nên không còn tình trạng phân biệt giới tính. Đó cũng là lý do mà thời trang unisex được yêu thích rộng rãi đến thế.\r\n\r\nVậy, unisex là gì? Cách phối đồ theo phong cách Unisex cực cá tính ra sao? Hãy theo dõi bài viết sau từ Bum Shop để hiểu rõ tường tận hơn các bạn nhé.', '1. Unisex là gì? Phong cách unisex là gì?\r\n–  Unisex (phi giới tính) là từ để mô tả cách ăn mặc và những vật dụng mà cả nam và nữ đều có thể sử dụng được. Phong cách unisex (hay còn gọi là phong cách trung tính) là cách ăn mặc dành cho cả hai giới tính nam và nữ. \r\n\r\n– Trào lưu unisex đã lan rộng khắp nơi và thịnh hành đến cả Việt Nam. Trong đó, áo unisex là gì là cụm từ thường xuyên được tìm kiếm trên các trang mạng trực tuyến chứng tỏ được sức hút hấp dẫn đến từ phong cách unisex.', '2. Cách phối đồ theo phong cách Unisex cực cá tính\r\n2.1 Phối đồ phong cách unisex cho nữ\r\n1. Áo thun – Cách phối đồ unisex cơ bản nhất\r\nPhải công nhận rằng áo thun là item đầu tiên mà ai cũng nghĩ đến khi phối đồ theo phong cách unisex. Dù chỉ với một chiếc áo thun đơn giản hay bắt mắt thì bạn vẫn dễ dàng pha trộn cùng các loại trang phục khác.\r\n\r\nunisex là gì\r\n\r\nCác bạn nữ có thể hiểu phối đồ unisex là gì rất đơn giản bằng cách mix áo thun cùng quần jean, quần short, quần culottes, quần baggy hoặc dùng kèm theo các phụ kiện như đeo thắt lưng, túi đeo chéo, mũ lưỡi trai, nón bucket.\r\n\r\nunisex là gì\r\n\r\nCách phối đồ này mang đến cho chủ nhân vẻ ngoài cổ điển, phóng khoáng. Đây là một xu hướng của những thập niên trước nhưng đến nay vẫn được nhiều bạn trẻ yêu thích và không hề phai mờ qua năm tháng.\r\n\r\nunisex là gì\r\n\r\n2. Áo sweater – Phóng khoáng cùng kiểu áo dài tay\r\nMuốn nắm bắt mẹo cụ thể hơn về cách phối unisex là gì, các nữ tín đồ của unisex hãy thử dạo quanh một vòng các trang mạng xã hội để tìm cho mình câu trả lời.\r\n\r\nThật không khó để bắt gặp hình bóng của những chiếc áo sweater tay dài khi tìm về cách kết hợp đồ kiểu unisex đúng không nào?', 'Quả thật vậy, áo sweater là một trong những trang phục thường được sử dụng trong các bí quyết phối đồ kiểu unisex. Để có được hình thức phối đẹp nhất cùng áo sweater thì các loại quần kaki, quần jean, quầy tây sẽ làm tốt nhiệm vụ này.\r\n\r\nBởi lẽ chúng sẽ mang lại diện mạo gọn gàng và cũng rất cuốn hút, nhưng các bạn lưu ý nên hạn chế các loại áo sweater quá rộng kẻo lại trông như “bơi” trong set đồ nhé.\r\n\r\nunisex là gì\r\n\r\n3. Quần jogger – Khẳng định phong thái mạnh mẽ, sexy\r\nphong cách unisex là gì\r\n\r\nCác cô gái thời hiện đại đã không còn thích ăn mặc theo một mô-típ nữa, ngày nay họ thường sử dụng trang phục để nhấn mạnh vào sự phá cách, tạo nét thu hút không kém phái nam.\r\n\r\nVà quần jogger nữ ra đời như cách để phục vụ mục đích này, với xu hướng mang đậm dấu ấn hip hop đường phố. Quần jogger thun nữ đã thành công trong việc chinh phục các cô nàng có cá tính mạnh.', 1, NULL, NULL, NULL),
(4, 'Bật mí cách mix đồ với chân váy ĐƠN GIẢN nhưng “CHANH SẢ’ hết nấc', '20.jpg', 'Chắc hẳn trong tủ đồ của mọi chị em, ai cũng đều thủ sẵn cho mình ít nhất một mẫu chân váy. Đó có thể là váy ngắn hoặc váy dáng dài, váy midi, váy xếp ly,…\r\n\r\nNhưng nếu vẫn chưa biết nhiều cách phối đồ với váy thì ngay bây giờ – Simples sẽ bật mí những cách mix đồ với chân váy ĐƠN GIẢN nhưng SANH CHẢNH hết mức mà các nàng nhất định phải biết. Hãy cùng xem đó là những bí quyết gì nhé!', '1. Những lưu ý khi phối đồ với chân váy\r\nNhìn chung cách mix đồ với chân váy thực hiện khá đơn giản, nhưng để có một bộ cánh thật ưng ý, bạn nên chú ý đến những yếu tố sau:\r\n– Phối chân váy phù hợp: Bất kể khi đi đâu, bạn cũng nên cân nhắc đến trường hợp hoặc hoàn cảnh để chọn cách mix với váy sao cho thật tương xứng nhé.\r\n– Tỷ lệ cơ thể: Một yếu tố quan trọng nữa mà phái nữ cần lưu ý đó là trước khi tiến hành cách mix đồ với chân váy, bạn phải biết đâu là ưu điểm hay khuyết điểm trên cơ thể. Người ta bảo “đẹp khoe xấu che”, thì bạn hãy nhớ mà áp dụng thôi.', '2. Chân váy mặc với áo gì? 5 Loại áo để mix vs chân váy bạn nên có\r\n2.1 Phối với áo trễ vai\r\nHãy thử phối chân váy đi kèm áo trễ vai, nếu bạn đang muốn thay đổi sang phong cách vừa ngọt ngào vừa quyến rũ.\r\nĐây là công thức phối đồ khá điệu đà, rất xứng đáng để bạn đầu tư ngay vào trong tủ đồ. \r\nSong song đó, áo trễ vai cũng góp phần không nhỏ tạo nên một diện mạo tươi tắn khi mặc cùng một chiếc váy xinh xắn.\r\n2.2 Phối với áo croptop\r\nCroptop là mẫu áo rất ưu ái cho những bạn nữ có vòng eo đẹp, và chúng càng phát huy tối đa nếu chọn cách mix đồ với chân váy.', '3. Chân váy nên mặc với giày gì? Sandal hay cao gót?\r\nĐối với cách mix đồ với chân váy, các cô nàng nên đồng hành cùng những mẫu giày sao cho phù hợp với phong cách của chính mình.\r\nBạn có thể chọn đi cùng giày sandal nếu là một cô gái yêu thích sự đơn giản, năng động.\r\nNgược lại, giày cao gót sẽ là lựa chọn tuyệt vời dành cho những dịp đi chơi hay hẹn hò. Đặc biệt là trong môi trường coi trọng tính nghiêm túc như nơi làm việc, công ty, văn phòng,…\r\nĐây là loại chân váy sinh ra là để dành cho các cô nàng “chân ngắn” bởi khả năng hack chiều cao đáng kể. Ngoài ra việc phối chân váy jean ngắn cũng rất đơn giản, lại nhanh gọn.', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`id`, `category_name`, `category_desc`, `category_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'Nam', 'Quần áo dành cho nam', 1, NULL, NULL, NULL),
(12, 'Nữ', 'Quần áo dành cho nữ', 1, NULL, NULL, NULL),
(13, 'Unisex', 'Quần áo dành cho tất cả mọi ng', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(10) UNSIGNED NOT NULL,
  `payment_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `payment_id`, `product_id`, `product_name`, `product_price`, `order_qty`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 14, 7, 'áo thun nam ok1208976', 100000.00, 1, NULL, NULL, NULL),
(15, 15, 12, 'iphone 6édfsdfsd', 100000.00, 4, NULL, NULL, NULL),
(16, 16, 36, 'áo thun unisex form rộng', 70000.00, 4, NULL, NULL, NULL),
(17, 17, 59, 'Áo thun unisex form rộng', 70000.00, 1, NULL, NULL, NULL),
(18, 17, 57, 'Áo thun tay lửng unisex', 70000.00, 1, NULL, NULL, NULL),
(19, 17, 56, 'Áo thun nữ cho tín đồ trà sữa', 60000.00, 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_fee` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` int(11) NOT NULL,
  `payment_method` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `shipping_id`, `payment_fee`, `payment_status`, `payment_method`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 23, '121,000.00', 2, 1, NULL, NULL, NULL),
(15, 24, '484,000.00', 2, 1, NULL, NULL, NULL),
(16, 25, '338,800.00', 2, 1, NULL, NULL, NULL),
(17, 26, '387,200.00', 2, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_id`, `product_desc`, `product_content`, `product_price`, `product_image`, `product_size`, `product_color`, `product_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(60, 'Áo thun nam form rộng', 11, 'Áo thun cổ tròn', 'Áo thun đẹp, 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 60000, 'ao_thun_nam_form_rong_hinh_chu_love_den_60k.jpg', 'M', 'đen', 1, NULL, NULL, NULL),
(61, 'Áo thun nam form rộng hình con mèo', 11, 'Áo thun nam cổ tròn', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 140000, 'ao_thun_nam_form_rong_hinh_chu_meo_deo_king_140k.jpg', 'L', 'đen', 1, NULL, NULL, NULL),
(62, 'Áo thun nam form rộng', 11, 'Áo thun nam', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 60000, 'ao_thun_nam_form_rong_hinh_chu_love_trang_60k.jpg', 'M', 'trắng', 1, NULL, NULL, NULL),
(63, 'Áo thun nam form rộng hình MM19', 11, 'Áo thun nam oversize', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 60000, 'ao_thun_nam_form_rong_hinh_MM19_den_60k.jpg', 'L', 'đen', 1, NULL, NULL, NULL),
(64, 'Áo thun nam form rộng hình halloween', 11, 'Áo thun nam cá tính', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 60000, 'ao_thun_nam_form_rong_hinh_halloween_60k.jpg', 'M', 'đen', 1, NULL, NULL, NULL),
(65, 'Áo thun nam form rộng hình tai nghe', 11, 'Áo thun nam oversize', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 60000, 'ao_thun_nam_form_rong_hinh_tai_nghe_60k.jpg', 'XL', 'trắng', 1, NULL, NULL, NULL),
(66, 'Áo thun nam form rộng hình fire trenf', 11, 'Áo thun nam cute', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 60000, 'ao_thun_nam_free_fire_trenf_60k.jpg', 'M', 'trắng', 1, NULL, NULL, NULL),
(67, 'Áo thun nam form rộng hình con mèo', 11, 'Áo thun nam cute', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 60000, 'ao_thun_nam_hinh_meo_than_tai_60k.jpg', 'L', 'vàng', 1, NULL, NULL, NULL),
(68, 'Áo thun nam form rộng hình con mèo', 11, 'Áo thun nam cute', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 60000, 'ao_thun_nam_hinh_meo_than_tai_60k_1.jpg', 'M', 'trắng', 1, NULL, NULL, NULL),
(69, 'Áo thun nam form rộng hình con mèo', 11, 'Áo thun nam cute', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 60000, 'ao_thun_nam_hinh_meo_than_tai_60k_2.jpg', 'L', 'đen', 1, NULL, NULL, NULL),
(70, 'Áo thun nam form rộng hình pin yếu', 11, 'Áo thun cổ tròn', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 50000, 'ao_thun_nam_hinh_pin_yeu_50k(1).jpg', 'S', 'đen', 1, NULL, NULL, NULL),
(71, 'Áo thun nam thể thao', 11, 'Áo thun nam thể thao', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát, co giãn tốt. Giặt tay để giữ độ bền của áo', 70000, 'ao_thun_nam_the_thao_YODI_TOP_70k.jpg', 'L', 'vàng đen', 1, NULL, NULL, NULL),
(72, 'Áo thun nữ hình băng keo', 12, 'Áo thun nữ cute', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 60000, 'ao_thun_nu_form_rong_hinh_bang_keo_60k.jpg', 'M', 'tím', 1, NULL, NULL, NULL),
(73, 'Áo thun nữ hình con gấu', 12, 'Áo thun nữ dễ thương', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 60000, 'ao_thun_nu_form_rong_hinh_con_gau_1_60k.jpg', 'M', 'đen', 1, NULL, NULL, NULL),
(74, 'Áo thun nữ hình con gấu', 12, 'Áo thun nữ dễ thương', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 60000, 'ao_thun_nu_form_rong_hinh_con_gau_60k.jpg', 'L', 'vàng', 1, NULL, NULL, NULL),
(75, 'Áo thun nữ hình quả chanh', 12, 'Áo thun nữ dễ thương', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 60000, 'ao_thun_nu_form_rong_hinh_qua_chanh_60k.jpg', 'M', 'tím', 1, NULL, NULL, NULL),
(76, 'Áo thun nữ hình SE', 12, 'Áo thun nữ oversize', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 60000, 'ao_thun_nu_form_rong_hinhSE-60k.jpg', 'M', 'tím', 1, NULL, NULL, NULL),
(77, 'Áo thun nữ hình SE', 12, 'Áo thun nữ oversize', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 60000, '13.png', 'L', 'cam', 1, NULL, NULL, NULL),
(78, 'Áo thun nữ cho tín đồ trà sữa', 12, 'Áo thun nữ cổ tròn', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 70000, '31.png', 'M', 'xanh dương', 1, NULL, NULL, NULL),
(79, 'Áo thun nữ cho tín đồ trà sữa', 12, 'Áo thun nữ cổ tròn', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 60000, '34.png', 'M', 'đen', 1, NULL, NULL, NULL),
(80, 'Áo thun tay lửng unisex', 13, 'Áo thun unisex oversize', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 70000, 'ao_thun_tay_lung_unisex_1_70k.jpg', 'L', 'tím', 1, NULL, NULL, NULL),
(82, 'Áo thun unisex form rộng', 13, 'Áo thun unisex oversize', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 70000, '98.png', 'L', 'tím', 1, NULL, NULL, NULL),
(83, 'Áo thun unisex tay lỡ hình RAMEN', 13, 'Áo thun unisex oversize', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 70000, '28.png', 'L', 'đen', 1, NULL, NULL, NULL),
(84, 'Áo thun unisex form rộng hình BT21', 13, 'Áo thun unisex oversize', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 70000, '40.png', 'L', 'vàng,xanh dương', 1, NULL, NULL, NULL),
(86, 'Áo thun unisex tay lở hình SIMPLE', 13, 'Áo thun unisex oversize', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 80000, 'ao_thun_unisex_tay_lo_simple_80k_trang.png', 'L', 'trắng', 1, NULL, NULL, NULL),
(87, 'Áo thun unisex tay lở hình SIMPLE', 13, 'Áo thun unisex oversize', 'Chất liệu: 100% cotton, co giãn tốt, thấm hút mồ hôi tốt mang lại cảm giác thoáng mát. Giặt tay để giữ được độ bền của áo', 80000, 'ao_thun_unisex_tay_lo_SIMPLES_den_80k.png', 'L', 'đen', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_name`, `shipping_address`, `shipping_phone`, `shipping_email`, `shipping_notes`, `remember_token`, `created_at`, `updated_at`) VALUES
(22, 'Hưng', 'ấdasdasd', '123749124324', 'test@test', 'sấd', NULL, NULL, NULL),
(23, 'Hưng 5', 'ádasd', '123749124324', 'sadasdasd@test', 'ádasd', NULL, NULL, NULL),
(24, 'Hưng 5', 'ádasfasd', '123749124324', 'sasda@test', 'ấdas', NULL, NULL, NULL),
(25, 'Hưng 5', 'tp hcm', '123749124324', 'sadasdasd@test', 'ádasd', NULL, NULL, NULL),
(26, 'Hưng 5', '213asfasfsadf', '7248124214', 'sadasdasd@test', 'ấdsdad', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'thien hung', '18520802@gm.uit.edu.vn', NULL, '$2y$10$Dx9SQGSEJvdVFKcWOi6BAOP/IiC2Jb5wB/0bM9eFWEds1EomeUVyS', NULL, '2020-06-25 10:59:17', '2020-06-25 10:59:17'),
(2, 'nthungok', 'test@test', NULL, '$2y$10$uN7t1DKO3Y/nTGqJ2Znv/.6Beot7n7.0D7PRarjS2hwm9aHtbGx9S', NULL, '2020-07-08 21:27:53', '2020-07-08 21:27:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `blog_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
