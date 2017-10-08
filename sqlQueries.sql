            CREATE TABLE student_data(
                ID INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                FULLNAME VARCHAR(70),
                GENDER VARCHAR(8),
                BGROUP VARCHAR(10),
                ADDRESS VARCHAR(100),
                CITY VARCHAR(20),
                STATE VARCHAR(50),
                ZIP VARCHAR(10),
                PNUMBER VARCHAR(11),
                EMAIL VARCHAR(60),
                PASSWORD VARCHAR(100),
                register_date datetime,
                UNIQUE(EMAIL)
            )

            CREATE TABLE courses(
                ID INT(2) PRIMARY KEY AUTO_INCREMENT,
                coursename VARCHAR(20) UNIQUE
            )