-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 11:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `book_id` int(11) NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`id`, `title`, `create_at`, `update_at`) VALUES
(1, 'Sách lập trình cơ bản với php 1', NULL, '2023-11-04 06:15:59'),
(4, 'Chuyên mục web', '2023-11-04 06:06:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `phone`, `status`, `content`, `create_at`, `update_at`) VALUES
(1, 'duy kiên', 'ndkdzvl@gmail.com', '0368031178', 0, 'Khóa học rất hay', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `title`, `cate_id`, `thumbnail`, `price`, `teacher_id`, `create_at`, `update_at`) VALUES
(6, 'Tin Học Cơ Sở', 14, '', 100000, 1, '2023-11-06 13:37:39', NULL),
(7, 'Tin Học', 14, '', 50000, 1, '2023-11-06 13:39:51', NULL),
(8, 'Nhập Môn Lập Trình', 14, '', 10000, 1, '2023-11-06 13:40:09', NULL),
(9, 'Cơ Sở Dữ Liệu', 15, '', 1000, 1, '2023-11-06 13:40:27', NULL),
(10, 'Lập Trình Java1', 15, '', 2000, 1, '2023-11-06 13:41:18', NULL),
(11, 'Xây Dựng Trang Web', 15, '', 20000, 1, '2023-11-06 13:41:38', NULL),
(12, 'HTML &#38; CSS Cơ Bản', 15, '', 500000, 1, '2023-11-06 13:42:04', NULL),
(13, 'HTML &#38; CSS assigment', 15, '', 250000, 1, '2023-11-06 13:42:25', NULL),
(14, 'Lập Trình Cơ Sở Với Javascript', 15, '', 220000, 1, '2023-11-06 13:43:04', NULL),
(15, 'Thiết Kế UI/UX (updating...)', 16, '', 50000, 1, '2023-11-06 13:43:31', NULL),
(16, 'Lập Trình PHP1', 16, '', 1000, 1, '2023-11-06 13:43:49', NULL),
(17, 'Thiết kế Web với HTML5&#38;CSS3', 16, '', 1500, 1, '2023-11-06 13:44:02', '2023-11-08 05:54:50'),
(21, 'Dự án 1 (TKTW)', 17, '', 1, 1, '2023-11-08 05:08:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_category`
--

CREATE TABLE `course_category` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_category`
--

INSERT INTO `course_category` (`id`, `title`, `user_id`, `create_at`, `update_at`) VALUES
(14, 'Học Kỳ 1', 0, '2023-11-08 05:59:03', '2023-11-08 05:59:03'),
(15, 'Học Kỳ 2', 0, '2023-11-06 13:35:58', '2023-11-06 13:35:58'),
(16, 'Học Kỳ 3', 0, '2023-11-06 13:36:01', '2023-11-06 13:36:01'),
(17, 'Học Kỳ 4', 0, '2023-11-06 13:36:04', '2023-11-06 13:36:04'),
(18, 'Học Kỳ 5', 0, '2023-11-06 13:36:07', '2023-11-06 13:36:07'),
(19, 'Học Kỳ 6', 0, '2023-11-06 13:36:10', '2023-11-06 13:36:10'),
(20, 'Học Kỳ 7', 0, '2023-11-06 13:36:13', '2023-11-06 13:36:13');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `create_at`, `update_at`) VALUES
(1, 'Super Admin', NULL, NULL),
(2, 'Admin', '2023-11-08 15:47:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `module_id` int(11) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`id`, `title`, `video_url`, `module_id`, `create_at`, `update_at`) VALUES
(10, 'Lab 2', '2', 7, '2023-11-06 13:49:08', NULL),
(11, 'Lab 3', '#', 7, '2023-11-06 13:49:12', NULL),
(12, 'Lab 4', '$', 7, '2023-11-06 13:49:17', NULL),
(13, 'Lab 5', '#', 7, '2023-11-06 13:49:22', NULL),
(14, 'Lab 6', '#', 7, '2023-11-06 13:49:29', NULL),
(15, 'Lab 7', '#', 7, '2023-11-06 13:49:35', NULL),
(16, 'Lab 8', '#', 7, '2023-11-06 13:49:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `title`, `course_id`, `create_at`, `update_at`) VALUES
(7, 'Giải Lab môn php 1', 16, '2023-11-06 13:48:26', '2023-11-08 06:04:58'),
(8, 'Assigment', 16, '2023-11-06 13:48:37', NULL),
(9, 'Cơ Bản', 16, '2023-11-06 13:48:50', NULL),
(10, 'Luyện đề thi', 16, '2023-11-06 14:23:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `thumbnail` varchar(100) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `thumbnail`, `create_at`, `update_at`) VALUES
(1, 'Ưu đãi 20% với các khóa học lập trình cơ bản', 'update...', 'update...', NULL, NULL),
(2, 'Chính sách cho sinh viên fpt polytechnic', 'update...', '', '2023-11-04 11:32:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`id`, `title`, `create_at`, `update_at`) VALUES
(1, 'Ưu đãi khi học tại website', NULL, NULL),
(2, 'Chi phí', '2023-11-04 11:05:00', NULL),
(3, 'Ưu đãi', '2023-11-04 11:05:00', NULL),
(4, 'Combo các khóa', '2023-11-04 11:05:00', NULL),
(5, 'Thủ khoa Fpoly', '2023-11-04 11:05:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `role` tinyint(4) DEFAULT 0,
  `forgot` varchar(100) DEFAULT NULL,
  `token` varchar(100) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fullname`, `email`, `phone`, `password`, `status`, `role`, `forgot`, `token`, `create_at`, `update_at`) VALUES
(7, 'Duy Kiên', 'kienndph39656@fpt.edu.vn', '0368031178', '$2y$10$q/a4C74sDSQ5e1eP.382VuDybidJfMneKp4.DmH1Qc3zPviI9sKf2', 1, 0, NULL, NULL, '2023-11-08 13:08:20', '2023-11-08 14:22:48');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `exp` int(11) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `fullname`, `email`, `phone`, `exp`, `password`, `group_id`, `create_at`, `update_at`) VALUES
(1, 'Duy Kiên', 'ndkdzvl@gmail.com', '0368031178', 1, NULL, NULL, NULL, NULL),
(4, 'Van a', 'vana@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Duy Khánh', 'khanhbeo9x@gmail.com', '0123456789', 10, NULL, NULL, '2023-11-05 16:20:16', NULL),
(6, 'Duy Kiên', 'kienndph39656@fpt.edu.vn', '0368031178', 2, '$2y$10$JkxNqfD./BfkzIuKMGeCHumEWbRfhf/pCRND4JZol0qu02YLJkGLy', NULL, '2023-11-08 15:08:38', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Indexes for table `course_category`
--
ALTER TABLE `course_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `course_category`
--
ALTER TABLE `course_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book_category` (`id`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`),
  ADD CONSTRAINT `course_ibfk_2` FOREIGN KEY (`cate_id`) REFERENCES `course_category` (`id`);

--
-- Constraints for table `lesson`
--
ALTER TABLE `lesson`
  ADD CONSTRAINT `lesson_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`);

--
-- Constraints for table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `module_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
