<?php

$mysqli= new mysqli('localhost', 'root', '', 'help');

if($mysqli->connect_errno)
{
	echo "connection failed:(" .$mysqli->connect_errno.")". $mysqli->connect_error;
}

//table for donors
$sql1= "CREATE TABLE IF NOT EXISTS `donors`(
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`donor_id` int(10) NOT NULL,
	`first_name` varchar(20) NOT NULL,
	`last_name` varchar(20) NOT NULL,
	`password` varchar(20) DEFAULT NULL,
	`address` varchar(40) NOT NULL,
	`donation_amount` int(10) NOT NULL,
	`clothes` varchar(50) NOT NULL,
	PRIMARY KEY (`id`)
	)ENGINE= MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;";

if(!$mysqli->query($sql1))
{
	echo "error creating table.".$mysqli->errno. ':'. $mysqli->error;
}else{
	echo "donors table created successfully";
}
//table for the admins of the web
$sql2="CREATE TABLE IF NOT EXISTS `admin`(
	`id` int(5) NOT NULL AUTO_INCREMENT,
	`name` varchar(20) NOT NULL,
	`username` varchar(20) NOT NULL,
	`password` varchar(10) NOT NULL,
	`e_mail` varchar(15) NOT NULL,
	PRIMARY KEY (`name`)
	)ENGINE= MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;";

if(!$mysqli->query($sql2))
{
	echo "error creating table.".$mysqli->errno.':'.$mysqli->error;
}else{
	echo "admin table created successfully";
}

//table for the target locations to distribute the collection
$sql3="CREATE TABLE IF NOT EXISTS `locations`(
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`location_name` varchar(20) NOT NULL,
	`distance` int(10) DEFAULT NULL,
	PRIMARY KEY(`id`)
	)ENGINE= MyISAM DEFAULT CHARSET=LATIN1 AUTO_INCREMENT=1;";

if(!$mysqli->query($sql3))
{
	echo "error creating table.".$mysqli->errno. ':'. $mysqli->error;
}else{
	echo "locations table created successfully";
}


//table for the volunteers 
$sql4="CREATE TABLE IF NOT EXISTS `volunteers`(
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`name` varchar(10) DEFAULT NULL,
	`first_name` varchar(20) NOT NULL,
	`last_name` varchar(20) NOT NULL,
	`reg_no` varchar(10) DEFAULT NULL,
	`password` varchar(10) NOT NULL,
	`event` varchar(10) DEFAULT NULL,
	`location` varchar(10) DEFAULT NULL,
	`date` varchar(10) DEFAULT NULL,

	PRIMARY KEY(`id`)
	)ENGINE= MyISAM DEFAULT CHARSET=LATIN1 AUTO_INCREMENT=1;";

if(!$mysqli->query($sql4))
{
	echo "error creating table.".$mysqli->errno. ':'. $mysqli->error;
}else{
	echo "volunteers table created successfully";
}



//table for the help requests 
$sql5="CREATE TABLE IF NOT EXISTS `requests`(
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`first_name` varchar(20) NOT NULL,
	`last_name` varchar(20) NOT NULL,
	`address` varchar(10) DEFAULT NULL,
	`Mdonation` varchar(10) NOT NULL,
	`Bdonation` varchar(10) DEFAULT NULL,
	`cause` varchar(50) NOT NULL,
	`deadline` varchar(10) NOT NULL,

	PRIMARY KEY(`id`)
	)ENGINE= MyISAM DEFAULT CHARSET=LATIN1 AUTO_INCREMENT=1;";

if(!$mysqli->query($sql5))
{
	echo "error creating table.".$mysqli->errno. ':'. $mysqli->error;
}else{
	echo "requests table created successfully";
}


//table for the donations 
$sql6="CREATE TABLE IF NOT EXISTS `donations`(
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`donor_id` int(20) NOT NULL,
	`clothes` varchar(20) DEFAULT NULL,
	`address` varchar(10) DEFAULT NULL,
	`taka` varchar(10) DEFAULT NULL,
	`collection_time` varchar(10) NOT NULL,
	`current_state` varchar(20) NOT NULL,
	`receivers_address` varchar(20) DEFAULT NULL,
	`receivers_contact` varchar(20) DEFAULT NULL,

	PRIMARY KEY(`id`)
	)ENGINE= MyISAM DEFAULT CHARSET=LATIN1 AUTO_INCREMENT=1;";

if(!$mysqli->query($sql6))
{
	echo "error creating table.".$mysqli->errno. ':'. $mysqli->error;
}else{
	echo "donations table created successfully";
}

$sql7="CREATE TABLE IF NOT EXISTS `event`(
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`name` varchar(20) NOT NULL,
	`location` varchar(20) NOT NULL,
	`date` varchar(10) NOT NULL,

	PRIMARY KEY(`id`)
	)ENGINE= MyISAM DEFAULT CHARSET=LATIN1 AUTO_INCREMENT=1;";

if(!$mysqli->query($sql7))
{
	echo "error creating table.".$mysqli->errno. ':'. $mysqli->error;
}else{
	echo "event table created successfully";
}

//close connection
$mysqli->close();