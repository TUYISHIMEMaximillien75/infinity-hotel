-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2024 at 04:06 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infinity`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwords` varchar(250) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `post` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `passwords`, `user_id`, `picture`, `post`) VALUES
(1, 'Max Boss', 'tuyishimemaximillien@gmail.com', '123', '42920', 'MATY-Codes-665adf338f3c69.67182662Upscales.ai_1717149453037.jpeg', 'receptionist');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `introduction` text NOT NULL,
  `description` text NOT NULL,
  `timer` varchar(40) NOT NULL,
  `dater` varchar(40) NOT NULL,
  `categolies` varchar(255) NOT NULL,
  `likes` int(100) NOT NULL,
  `blog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `image1`, `image2`, `introduction`, `description`, `timer`, `dater`, `categolies`, `likes`, `blog_id`) VALUES
(7, 'Entertainment & Events', 'blog-MATY-Codes-5332civil_war_18.jpg', 'blog-MATY-Codes-2324call-of-duty-ghost-masked-warrior-wallpaper-for-1366x768-67-442.jpg', 'blog-MATY-Codes-4033civil_war_6.jpg', 'We specialize in arranging business events that allow you to dive into your work worry-free. Whether youâ€™re aiming for success in meetings or presentations, weâ€™ve got you covered.\r\n\r\nOur Conference Hall, boasting state-of-the-art technical facilities, is perfectly suited for top-level negotiations, board of directors meetings, and more. With a professional ambiance and impeccable amenities, we provide the ideal setting for your business endeavors. Entrust us with your event, and weâ€™ll ensure it surpasses your expectations.', '', '20:41-00', 'Jul 11, 2024', 'Entatainment', 0, 407412),
(9, 'Fitness & Gym Center', 'blog-MATY-Codes-321999688_original_2048x1365.jpg', 'default', 'default', 'Experience the epitome of tranquility and wellness at Infinity Hotelâ€™s Fitness & Gym Center.', 'Our well-equipped gym, group exercise classes, personal training, and relaxation amenities ensure a complete fitness experience. Enjoy state-of-the-art equipment, certified instructors, and facilities like saunas and Jacuzzis. Complimentary towels, water stations, and lockers are provided. Open to hotel guests, our center promotes wellness and offers a personalized approach to fitness.', '20:59-02', 'Jul 11, 2024', 'Entatainment', 0, 529684),
(10, 'Entertainment & Events', 'blog-MATY-Codes-9525Black-iron-man-background-picture-new-best-hd-wallpapers-of-iron-man-620x349.jpg', 'default', 'default', 'We specialize in arranging business events that allow you to dive into your work worry-free. Whether youâ€™re aiming for success in meetings or presentations, weâ€™ve got you covered.', 'Our Conference Hall, boasting state-of-the-art technical facilities, is perfectly suited for top-level negotiations, board of directors meetings, and more. With a professional ambiance and impeccable amenities, we provide the ideal setting for your business endeavors. Entrust us with your event, and weâ€™ll ensure it surpasses your expectations.', '21:01-17', 'Jul 11, 2024', 'Entatainment', 0, 690712),
(11, 'Best Breakfast Meals', 'blog-MATY-Codes-8713art-ball-ball-shaped-235615.jpg', 'default', 'blog-MATY-Codes-7402black (16).jpg', 'Infinity Hotel Restaurant offers an extensive menu of different cuisine. These vary from African, European, Indian, and American. Every guest at the restaurant is assured of great tasting and delicious food.', 'Infinity Hotel Restaurant offers an extensive menu of different cuisine. These vary from African, European, Indian, and American. Every guest at the restaurant is assured of great tasting and delicious food.', '21:03-55', 'Jul 11, 2024', 'Food', 0, 413983);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_id` int(50) NOT NULL,
  `blog_id` int(40) NOT NULL,
  `timer` varchar(40) NOT NULL,
  `dater` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `comment_id`, `blog_id`, `timer`, `dater`, `color`) VALUES
(1, 'TUYISHIME Maximillien', 'etskmushacatholiccommunity@gmail.com', 'cool', 14917, 0, '01:46-42', 'Jul 12, 2024', '#9e3019'),
(2, 'samuel', 'matycoodes9@gmail.com', 'fgnm,', 12884, 690712, '01:48-17', 'Jul 12, 2024', '#9aa2b7'),
(3, 'TUYISHIME Maximillien', 'etskmushacatholiccommunity@gmail.com', 'wcsdcj', 47128, 690712, '01:49-33', 'Jul 12, 2024', '#4c14af');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `message` varchar(255) NOT NULL,
  `message_id` varchar(20) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `message`, `message_id`, `date`) VALUES
(1, 'IGIRANEZA', '0784321588', 'noeligiraneza0@gmail.com', 'Hello my name is Jason Igiraneza I want you all died!! ', '469764', 'Sat 08/06/2024'),
(2, 'TUYISHIME Maximillien', '0798722215', 'tuyishimemaximillien@gmail.com', 'Hello class my name is Max our today lesson is:\r\n', '298428', 'Sat 08/06/2024'),
(3, 'Deborah', '078333333333', 'matycoodes9@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae labore aspernatur cumque inventore voluptatibus odit doloribus! Ducimus, animi perferendis repellat. Ducimus harum alias quas, quibusdam provident ea sed, sapiente quo.\r\n\r\nUllam cumque evenie', '981446', 'Sat 08/06/2024'),
(4, 'Deborah', '0736947422', 'maxboss42920035@gmail.com', 'wnf4u44 \r\nweciwinecowe\r\ncweciwnc\r\nwcuiwncewuecnuibwibybiubiycbwec\r\nwubicubwuiebcibwec\r\nweucbuiwebciuwec\r\nwcubiuwbec\r\n', '466858', 'Sat 08/06/2024'),
(5, 'TUYISHIME Maximillien', '0784321588', 'maxboss42920035@gmail.com', 'qwetryui', '826434', 'Fri 12/07/2024'),
(6, 'IGIRANEZA', '0784321588', 'tuyishimemaximillien@gmail.com', 'wfgh', '219523', 'Fri 12/07/2024'),
(7, 'TUYISHIME Maximillien', '0798722215', 'musyokaalvin2020@gmail.com', 'cgvhx', '895861', 'Fri 12/07/2024');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `header_text` varchar(255) NOT NULL,
  `header_img` varchar(255) NOT NULL,
  `header_p` text NOT NULL,
  `image_hero` varchar(255) NOT NULL,
  `video_hero` varchar(255) NOT NULL,
  `about_h` varchar(255) NOT NULL,
  `about_img` text NOT NULL,
  `about_p` text NOT NULL,
  `contact_h` varchar(255) NOT NULL,
  `contact_img` text NOT NULL,
  `contact_p` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `header_text`, `header_img`, `header_p`, `image_hero`, `video_hero`, `about_h`, `about_img`, `about_p`, `contact_h`, `contact_img`, `contact_p`) VALUES
(1, 'Stay and enjoy', 'MATY-Codes24810black (16).jpg', 'Lorem maxime ipsum dolor sit amet, consectetur adipisicing elit. Minus illo similique natus, a recusandae? Dolorum, unde a quibusdam est? Corporis deleniti obcaecati quibusdam inventore fuga eveniet! Qui delectus tempore amet!rem ipsum dolor sit amet, consectetur adipisicing elit. Minus illo similique natus, a recusandae? Dolorum, unde a quibusdam est? Corporis deleniti obcaecati quibusdam inventore fuga eveniet! Qui delectus tempore amet!', 'MATY-Codes13024art-ball-ball-shaped-235615.jpg', 'MATY-Codes1256ETSK Musha.mp4', 'Our Background', 'MATY-Codes-about180IMG-20240415-WA0009.jpg', 'contact_psdcsd', 'contact us', 'MATY-Codes-contacts180IMG-20240502-WA0027.jpg', 'et, consectetur adipisicing elit. Vitae labore aspernatur cumque inventore voluptatibus odit doloribus! Ducimus, animi perferendis repellat. D');

-- --------------------------------------------------------

--
-- Table structure for table `resevertion`
--

CREATE TABLE `resevertion` (
  `id` int(11) NOT NULL,
  `a_date` varchar(255) NOT NULL,
  `d_date` varchar(255) NOT NULL,
  `n_room` varchar(255) NOT NULL,
  `guests` varchar(255) NOT NULL,
  `t_room` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `b_names` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `u_id` varchar(255) NOT NULL,
  `dater` varchar(255) NOT NULL,
  `timer` varchar(255) NOT NULL,
  `confrimation` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resevertion`
--

INSERT INTO `resevertion` (`id`, `a_date`, `d_date`, `n_room`, `guests`, `t_room`, `email`, `b_names`, `phone`, `note`, `u_id`, `dater`, `timer`, `confrimation`) VALUES
(1, '06/03/2024', '06/05/2024', '2 Rooms', '4', 'Room 3', 'tuyishimemaximillien@gmail.com', 'TUYISHIME Maximillien', '784321588', '', '55847', 'Mon 03/06/2024', '12:55:12', 'received'),
(2, '06/07/2024', '06/09/2024', '1 Room', '2', 'Room 2', 'maxboss42920035@gmail.com', 'IGIRANEZA Noel', '784321588', '', '91923', 'Tue 04/06/2024', '09:52:56', 'accepted'),
(3, '06/11/2024', '06/11/2024', '4 Rooms', '3', 'Room 3', 'noeligiraneza0@gmail.com', 'IGIRANEZA Noelwessev', '784321588', 'svsdvsvd', '47904', 'Tue 04/06/2024', '10:18:56', 'received'),
(4, '8/06/2024', '10/06/2024', '2 Rooms', '10', 'Room 5', 'matycoodes9@gmail.com', 'Aron MANIRAKIZA', '0791847396', 'I am not alone', '47226', 'Sat 08/06/2024', '19:17:08', 'accepted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resevertion`
--
ALTER TABLE `resevertion`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resevertion`
--
ALTER TABLE `resevertion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
