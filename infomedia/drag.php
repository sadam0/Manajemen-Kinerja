<?php
include ('koneksi.php');

if (!($_POST)) { echo '';}

else {
    
    $sort1 = '';
    $sort2 = '';
    $sort3 = '';
    $sort4 = '';
    $sort5 = '';
    $sort6 = '';
    $sort7 = '';
    
    
    parse_str($_POST['sort1'], $sort1);
    parse_str($_POST['sort2'], $sort2);
    parse_str($_POST['sort3'], $sort3);
    parse_str($_POST['sort4'], $sort4);
    parse_str($_POST['sort5'], $sort5);
    parse_str($_POST['sort6'], $sort6);
    parse_str($_POST['sort7'], $sort7);
    
    
//    var_dump( $sort1);
    $query = "SELECT id FROM kartu_utama";
	$result = mysql_query($query) or die('Error, query failed');
    
    if(mysql_num_rows($result) == 0) {
//        var_dump($sort1['id']);
        foreach($sort1['entry'] as $key=>$value) {
            $insertquery = "INSERT INTO `kartu_utama` (entry_id, rank_value, pemilik_kartu) VALUES ('$value','$key','wina')";
            mysql_query($insertquery) or die ('error, insert failed');
        }
        foreach($sort2['entry'] as $key=>$value) {
            $insertquery2 = "INSERT INTO `kartu_utama` (entry_id, rank_value, pemilik_kartu) VALUES ('$value','$key','gina')";
            mysql_query($insertquery2) or die ('error, insert failed');
        }
        foreach($sort3['entry'] as $key=>$value) {
            $insertquery3 = "INSERT INTO `kartu_utama` (entry_id, rank_value, pemilik_kartu) VALUES ('$value','$key','budi')";
            mysql_query($insertquery3) or die ('error, insert failed');
        }
        foreach($sort4['entry'] as $key=>$value) {
            $insertquery4 = "INSERT INTO `kartu_utama` (entry_id, rank_value, pemilik_kartu) VALUES ('$value','$key','revi')";
            mysql_query($insertquery4) or die ('error, insert failed');
        }
        foreach($sort5['entry'] as $key=>$value) {
            $insertquery5 = "INSERT INTO `kartu_utama` (entry_id, rank_value, pemilik_kartu) VALUES ('$value','$key','fikri')";
            mysql_query($insertquery5) or die ('error, insert failed');
        }
        foreach($sort6['entry'] as $key=>$value) {
            $insertquery6 = "INSERT INTO `kartu_utama` (entry_id, rank_value, pemilik_kartu) VALUES ('$value','$key','review')";
            mysql_query($insertquery6) or die ('error, insert failed');
        }
        foreach($sort7['entry'] as $key=>$value) {
            $insertquery7 = "INSERT INTO `kartu_utama` (entry_id, rank_value, pemilik_kartu) VALUES ('$value','$key','done')";
            mysql_query($insertquery7) or die ('error, insert failed');
        }
        echo 'ter - input';
    }
    
    else {
//        var_dump($sort1['entry']);
        foreach($sort1['entry'] as $key=>$value) {
			$updatequery = "UPDATE `kartu_utama` SET rank_value = '$key', pemilik_kartu = 'wina' WHERE entry_id = '$value'";	
			mysql_query($updatequery) or die('Error, UPDATE failed!');
        }
		foreach($sort2['entry'] as $key=>$value) {
			$updatequery2 = "UPDATE `kartu_utama` SET rank_value = '$key', pemilik_kartu = 'gina' WHERE entry_id = '$value'";	
			mysql_query($updatequery2) or die('Error, UPDATE failed!');
			}
        foreach($sort3['entry'] as $key=>$value) {
			$updatequery3 = "UPDATE `kartu_utama` SET rank_value = '$key', pemilik_kartu = 'budi' WHERE entry_id = '$value'";	
			mysql_query($updatequery3) or die('Error, UPDATE failed!');
			}
        foreach($sort4['entry'] as $key=>$value) {
			$updatequery4 = "UPDATE `kartu_utama` SET rank_value = '$key', pemilik_kartu = 'revi' WHERE entry_id = '$value'";	
			mysql_query($updatequery4) or die('Error, UPDATE failed!');
			}
        foreach($sort5['entry'] as $key=>$value) {
			$updatequery5 = "UPDATE `kartu_utama` SET rank_value = '$key', pemilik_kartu = 'fikri' WHERE entry_id = '$value'";	
			mysql_query($updatequery5) or die('Error, UPDATE failed!');
			}	
        foreach($sort6['entry'] as $key=>$value) {
			$updatequery6 = "UPDATE `kartu_utama` SET rank_value = '$key', pemilik_kartu = 'review' WHERE entry_id = '$value'";	
			mysql_query($updatequery6) or die('Error, UPDATE failed!');
			}	
        foreach($sort7['entry'] as $key=>$value) {
			$updatequery7 = "UPDATE `kartu_utama` SET rank_value = '$key', pemilik_kartu = 'done' WHERE entry_id = '$value'";	
			mysql_query($updatequery7) or die('Error, UPDATE failed!');
			}	
		echo 'an update';
		}
    }
?>