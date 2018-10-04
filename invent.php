<?

	include "auth.php";  
	include "functions.php";       		
//	include "themes/header.php"; 
?>

<html>
<head>
    <link rel="stylesheet" title="compact" type="text/css" href="themes/main.css">
</head>

<?
	 print '<FONT FACE="Goudy Old Style, Conneticut Gothic, Times New Roman" size="6" color="#cc9900">';
   	 print TEXT_ROOM_INVENTORY;	
		
   	 print "</FONT><P>";	
	 $res = mysql_query("SELECT * FROM Roomtypes where id='$room'");
	 print '<FONT FACE="Goudy Old Style, Conneticut Gothic, Times New Roman" size="4" color="#cc9900">';
	 while( $row = mysql_fetch_array( $res ) ) {
         print type($room);	
	 $invent=$row['inventory'];	
	 print "</FONT><P>";		
	 print '<FONT FACE="Goudy Old Style, Conneticut Gothic, Times New Roman" size=3>';
	 echo $invent;							
         print '</FONT>';	
	} 


?>
</body>
</html>