<?php
	
if (!($_POST)) { echo 'This has to be a post jackass!'; }
	
else {
	
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "sampaaa";
	
	$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
	mysql_select_db($dbname);
	
	// THESE COULD BE AUTO GENERATED, HARD CODED FOR DEMONSTRATION
	$sort1 = '';
	$sort2 = '';

	// PARSES THE POSTS FROM EACH COLUMN INTO AN ARRAY
	parse_str($_POST['sort1'], $sort1);
	parse_str($_POST['sort2'], $sort2);
	
	//FIGURE OUT IF THERE IS ALREADY A RANKING 
	$query = "SELECT ranking_id FROM ranking";
	$result = mysql_query($query) or die('Error, query failed');
	
	// IF NO ENTRIES, CREATE THEM FOR EACH COLUMN (ARRAY)
	if (mysql_num_rows($result) == 0) {
		foreach($sort1['entry'] as $key=>$value){
			$insertquery = "INSERT INTO `ranking` ( entry_id, ranking_value, ranking_column) VALUES ( '$value', '$key', '0')";
			mysql_query($insertquery) or die('Error, INSERT failed!');
			}
		foreach($sort2['entry'] as $key=>$value){
			$insertquery2 = "INSERT INTO `ranking` (entry_id, ranking_value, ranking_column) VALUES ( '$value', '$key', '1', )";
			mysql_query($insertquery2) or die('Error, INSERT failed!');
			}
		echo 'an insert';
		}
//	$query_max = "SELECT max(entry_id) as last_entry from kartu_utama";
//    $last_id = mysql_query($query_max);
//    $next_id = $last_id++;
    
//    $result = mysql_query($query_max);
//    $last_id1 = mysql_fetch_array($result);
//    $next_id1 = $last_id1['last_entry'] + 1;
    
	 IF ENTRIES, UPDATE THEM FOR EACH COLUMN (ARRAY)
	else {
		foreach($sort1['entry'] as $key=>$value) {
//            var_dump($value);echo"ini value <br><br>";
//            var_dump($key);echo"ini key <br>";
			$updatequery = "UPDATE `ranking` SET ranking_value = '$key', ranking_column = '0' WHERE entry_id = '$value'";	
			mysql_query($updatequery) or die('Error, UPDATE failed!');	
			}
		foreach($sort2['entry'] as $key=>$value) {
			$updatequery2 = "UPDATE `ranking` SET ranking_value = '$key', ranking_column = '1' WHERE entry_id = '$value'";	
			mysql_query($updatequery2) or die('Error, UPDATE failed!');
			}	
		echo 'an update';
		}
    }
    
?>