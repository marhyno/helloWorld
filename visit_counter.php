<link href="css/index.css" rel="stylesheet" type="text/css" />
<?php

     $hostname = "nasakasa.sk";
     $dbuser = "nasakasa_sk"; 
     $dbpassword = "Kzza73YRtw6CTCAC"; 
     $dbname = "nasakasa_sk";

	$db_link=mysql_connect($hostname, $dbuser, $dbpassword) or die("Nepodarilo sa napojiť na server!");

   mysql_select_db($dbname) or die("Nepodarilo sa napojiť k SQL databáze");
 
 mysql_query("UPDATE visitors_count SET views=views+1 WHERE page='index'");
 $result = mysql_query("SELECT count FROM visitors_count WHERE page='index'");
 while($row = mysql_fetch_row($result))
 
 {
	 echo "<div style='text-align:right'; 'vertical-align: text-bottom;'> Počet kliknutí:" . $row['0']."</div>";
 }
   
?>