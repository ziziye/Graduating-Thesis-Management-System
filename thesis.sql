
CREATE TABLE `student_info` (
                                `Id` varchar(50) NOT NULL,
                                `username` varchar(100) DEFAULT NULL,
                                `passwd` varchar(100) DEFAULT NULL,
                                PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `teacher_info` (
                                `Id` varchar(50) NOT NULL,
                                `username` varchar(100) DEFAULT NULL,
                                `passwd` varchar(100) DEFAULT NULL,
                                PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
CREATE TABLE `manager_info` (
                                `Id` varchar(50) NOT NULL,
                                `username` varchar(100) DEFAULT NULL,
                                `passwd` varchar(100) DEFAULT NULL,
                                PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `maintainer_info` (
                                   `Id` varchar(50) NOT NULL,
                                   `username` varchar(100) DEFAULT NULL,
                                   `passwd` varchar(100) DEFAULT NULL,
                                   PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;