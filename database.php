<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php
# # mysql

$dbname = 'name';
$dbuser = 'user';
$dbpass = 'pass';
$dbhost = 'host';

$connect = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysql_select_db($dbname) or die("MySQL could not open the db '$dbname'");

$test_query = "SHOW TABLES FROM $dbname";
$result = mysql_query($test_query);

$tblCnt = 0;
while($tbl = mysql_fetch_array($result)) {
  $tblCnt++;
  #echo $tbl[0]."<br />\n";
}

if (!$tblCnt) {
  echo "There are no tables<br />\n";
} else {
  echo "There are $tblCnt tables<br />\n";
}

# mysqli

$link = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($link, $dbname) or die("MySQLi could not open the db '$dbname'");

$test2_query = "SHOW TABLES FROM $dbname";
$result2 = mysqli_query($link, $test2_query);

$tblCnt = 0;
while($tbl = mysqli_fetch_array($result2)) {
  $tblCnt++;
  #echo $tbl[0]."<br />\n";
}

if (!$tblCnt) {
  echo "There are no tables<br />\n";
} else {
  echo "There are $tblCnt tables<br />\n";
}

