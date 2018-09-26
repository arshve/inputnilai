--
-- Database: `db_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id` int(11) NOT NULL,
  `id_matkul` varchar(100) NOT NULL,
  `id_dosen` varchar(100) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id`, `id_matkul`, `id_dosen`, `nama_matkul`) VALUES
(1, 'TI001', 'DSN0001', 'How To Be A Carry Player'),
(2, 'TI002', 'DSN0001', 'How To Be A Support Player'),
(3, 'TI003', 'DSN0001', 'How To Be A Roamer'),
(5, 'TI004', 'DSN0001', 'How To Be A Mid Player');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `nama_nilai` varchar(100) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL,
  `formatif` int(100) NOT NULL,
  `uts` int(100) NOT NULL,
  `uas` int(100) NOT NULL,
  `formatif_perc` int(100) NOT NULL,
  `uts_perc` int(100) NOT NULL,
  `uas_perc` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `nama_nilai`, `nama_matkul`, `formatif`, `uts`, `uas`, `formatif_perc`, `uts_perc`, `uas_perc`) VALUES
(1, 'MHS0001', 'TI001', 80, 77, 78, 30, 20, 50),
(3, 'MHS0001', 'TI003', 75, 85, 80, 30, 40, 40),
(4, 'MHS0001', 'TI004', 55, 60, 85, 30, 20, 50),
(5, 'MHS0001', 'TI002', 100, 70, 80, 30, 20, 50);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `no` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` enum('admin','dosen','mahasiswa','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `no`, `username`, `password`, `nama`, `level`) VALUES
(1, 'ADM0001', 'admin', 'admin', 'Farid Evan R', 'admin'),
(3, 'MHS0001', 'mahasiswa', 'mahasiswa', 'Ismail', 'mahasiswa'),
(15, 'DSN0001', 'dosen', 'dosen', 'Bima Adi Sukma', 'dosen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
