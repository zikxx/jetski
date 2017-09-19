--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(10) UNSIGNED primary key auto_increment NOT NULL,
  `student_name` varchar(50) DEFAULT NULL,
  `student_email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `student_email`) VALUES
(1, 'agurchand', 'agurchand@agurchand.com');
