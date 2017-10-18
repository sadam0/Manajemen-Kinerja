            <?php
include('koneksi.php');
                $btn = $_POST['wina'];
                $btn2 = $_POST['gina'];
                $btn3 = $_POST['budi'];
                $btn4 = $_POST['revi'];
                $btn5 = $_POST['fikri'];
                $btn6 = $_POST['review'];
                $btn7 = $_POST['done'];
                if(isset($btn)){
                    $judul_kartu = $_POST['judul_kartu'];
                    $pemilik_kartu= "wina";
                    $query_max = "SELECT max(entry_id) as last_entry from kartu_utama";
                    $result = mysql_query($query_max);
                    $last_id1 = mysql_fetch_array($result);
                    $next_id1 = $last_id1['last_entry'] + 1;
                   // $query_max_v = "SELECT max(rank_value) as last_value from kartu_utama";
//                    $last_id_v = mysql_query($query_max_v);
//                    $next_id_v = $last_id_v++;
                    var_dump($next_id_v , $next_id1 , $last_id1);
                    mysql_query("insert into kartu_utama (id,entry_id,judul_kartu,pemilik_kartu,rank_value) VALUES ('','$next_id1','$judul_kartu','$pemilik_kartu','$next_id_v')");
                } else 
                     if(isset($btn2)){
                    $judul_kartu = $_POST['judul_kartu'];
                    $pemilik_kartu= "gina";
                    $query_max = "SELECT max(entry_id) as last_entry from kartu_utama";
                    $result = mysql_query($query_max);
                    $last_id1 = mysql_fetch_array($result);
                    $next_id1 = $last_id1['last_entry'] + 1;
                   // $query_max_v = "SELECT max(rank_value) as last_value from kartu_utama";
//                    $last_id_v = mysql_query($query_max_v);
//                    $next_id_v = $last_id_v++;
                    var_dump($next_id_v , $next_id1 , $last_id1);
                    mysql_query("insert into kartu_utama (id,entry_id,judul_kartu,pemilik_kartu,rank_value) VALUES ('','$next_id1','$judul_kartu','$pemilik_kartu','$next_id_v')");
                     }
                    else 
                     if(isset($btn3)){
                    $judul_kartu = $_POST['judul_kartu'];
                    $pemilik_kartu= "budi";
                    $query_max = "SELECT max(entry_id) as last_entry from kartu_utama";
                    $result = mysql_query($query_max);
                    $last_id1 = mysql_fetch_array($result);
                    $next_id1 = $last_id1['last_entry'] + 1;
                   // $query_max_v = "SELECT max(rank_value) as last_value from kartu_utama";
//                    $last_id_v = mysql_query($query_max_v);
//                    $next_id_v = $last_id_v++;
                    var_dump($next_id_v , $next_id1 , $last_id1);
                    mysql_query("insert into kartu_utama (id,entry_id,judul_kartu,pemilik_kartu,rank_value) VALUES ('','$next_id1','$judul_kartu','$pemilik_kartu','$next_id_v')");}
else 
                     if(isset($btn4)){
                    $judul_kartu = $_POST['judul_kartu'];
                    $pemilik_kartu= "revi";
                    $query_max = "SELECT max(entry_id) as last_entry from kartu_utama";
                    $result = mysql_query($query_max);
                    $last_id1 = mysql_fetch_array($result);
                    $next_id1 = $last_id1['last_entry'] + 1;
                   // $query_max_v = "SELECT max(rank_value) as last_value from kartu_utama";
//                    $last_id_v = mysql_query($query_max_v);
//                    $next_id_v = $last_id_v++;
                    var_dump($next_id_v , $next_id1 , $last_id1);
                    mysql_query("insert into kartu_utama (id,entry_id,judul_kartu,pemilik_kartu,rank_value) VALUES ('','$next_id1','$judul_kartu','$pemilik_kartu','$next_id_v')");
                     }
            else 
                     if(isset($btn5)){
                    $judul_kartu = $_POST['judul_kartu'];
                    $pemilik_kartu= "fikri";
                    $query_max = "SELECT max(entry_id) as last_entry from kartu_utama";
                    $result = mysql_query($query_max);
                    $last_id1 = mysql_fetch_array($result);
                    $next_id1 = $last_id1['last_entry'] + 1;
                   // $query_max_v = "SELECT max(rank_value) as last_value from kartu_utama";
//                    $last_id_v = mysql_query($query_max_v);
//                    $next_id_v = $last_id_v++;
                    var_dump($next_id_v , $next_id1 , $last_id1);
                    mysql_query("insert into kartu_utama (id,entry_id,judul_kartu,pemilik_kartu,rank_value) VALUES ('','$next_id1','$judul_kartu','$pemilik_kartu','$next_id_v')");
            
                     } else 
                     if(isset($btn6)){
                    $judul_kartu = $_POST['judul_kartu'];
                    $pemilik_kartu= "review";
                    $query_max = "SELECT max(entry_id) as last_entry from kartu_utama";
                    $result = mysql_query($query_max);
                    $last_id1 = mysql_fetch_array($result);
                    $next_id1 = $last_id1['last_entry'] + 1;
                   // $query_max_v = "SELECT max(rank_value) as last_value from kartu_utama";
//                    $last_id_v = mysql_query($query_max_v);
//                    $next_id_v = $last_id_v++;
                    var_dump($next_id_v , $next_id1 , $last_id1);
                    mysql_query("insert into kartu_utama (id,entry_id,judul_kartu,pemilik_kartu,rank_value) VALUES ('','$next_id1','$judul_kartu','$pemilik_kartu','$next_id_v')");
                     }else 
                     if(isset($btn7)){
                    $judul_kartu = $_POST['judul_kartu'];
                    $pemilik_kartu= "done";
                    $query_max = "SELECT max(entry_id) as last_entry from kartu_utama";
                    $result = mysql_query($query_max);
                    $last_id1 = mysql_fetch_array($result);
                    $next_id1 = $last_id1['last_entry'] + 1;
                   // $query_max_v = "SELECT max(rank_value) as last_value from kartu_utama";
//                    $last_id_v = mysql_query($query_max_v);
//                    $next_id_v = $last_id_v++;
                    var_dump($next_id_v , $next_id1 , $last_id1);
                    mysql_query("insert into kartu_utama (id,entry_id,judul_kartu,pemilik_kartu,rank_value) VALUES ('','$next_id1','$judul_kartu','$pemilik_kartu','$next_id_v')");
                     }
                         header('location:dashboard.php');
            ?>