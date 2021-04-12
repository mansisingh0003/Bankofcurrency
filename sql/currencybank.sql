SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1001, 'Ankit Kumar', 'ankitkumar@gmail.com', 100000),
(1002, 'Shivani Singh', 'shivanisingh@gmail.com', 80000),
(1003, 'Ashok Kumar', 'ashokkumar@gmail.com', 60000),
(1004, 'Ridhi Singh ', 'ridhisingh@gmail.com', 55000),
(1005, 'Ritika Bhardwaj', 'riti@gmail.com', 72000),
(1006, 'Molly Singh', 'mollysin@gmail.com', 250000),
(1007, 'Devbrath Dhal', 'dhalbabu@gmail.com', 83000),
(1008, 'Harshita Singh', 'harshitasns@gmail.com', 90000),
(1009, 'Tushar Ravi', 'ravitush@gmail.com', 320000),
(1010, 'Mohit Sharma', 'mohitshar@gmail.com', 550000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;


