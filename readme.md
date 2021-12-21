## Generate a create table script for an existing table in phpmyadmin:-

```
SHOW CREATE TABLE `tablename`;
Click on `+Options`. Select `Full texts`. Click on `Go`.
```

Then either run this /database_script_file.sql file or run the below code in SQL tab of phpMyAdmin.

```
CREATE TABLE `studentdetails` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `roll_no` varchar(20) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `mobile_no` int(20) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8mb4
```
