<?



	function to_euro( $currency ) {
	    global $exchange_rate;
	    return  sprintf( "%.2f",$currency/$exchange_rate);
	}
	
	function make_date( $year, $month, $day ) {
		return sprintf( "%d%02d%02d", $year, $month, $day );
	}

	function local_date( $date ) {
		$date = ereg_replace( '-', '', $date);
		$year = $date[0].$date[1].$date[2].$date[3];
		$month = $date[4].$date[5];
		$day = $date[6].$date[7];
		return strftime("%d %b, %Y", mktime( 0,0,0, $month, $day, $year ) );
	}
		
	function inc_date( $date, $val ) {
		$date = ereg_replace( '-', '', $date);
		$year = $date[0].$date[1].$date[2].$date[3];
		$month = $date[4].$date[5];
		$day = $date[6].$date[7];
		$next_day = mktime( 0,0,0, $month, $day+$val, $year );
		return strftime("%Y%m%d", $next_day );
	}

	function check_client_max_booking( $corp_id=0 ) {
		global $max_client_booking, $corp_max_booking, $singles, $triples, $doubles, $twins, $executives, $REMOTE_ADDR;
		if( $corp_id ) 
			$max_book = $corp_max_booking;
		else
			$max_book = $max_client_booking;
		$query = "SELECT SUM(singles) AS singles, SUM(twins) AS twins, SUM(doubles) AS doubles, SUM(triples) AS triples, 
			  SUM(executives) AS executives, SUM(RType6) as RType6,  SUM(RType7) as RType7, SUM(RType8) as RType8, SUM(RType9) as RType9, SUM(RType10) as RType10
					 FROM Bookings ";
		$query .= ($corp_id?"WHERE ":",Clients WHERE Bookings.client_id=Clients.client_id AND"); 
		$query .=" DATE_ADD( booking_time, INTERVAL 1 DAY) > NOW() 
						AND ";
		$query .= ($corp_id?"corporate_id=$corp_id":"ip='$REMOTE_ADDR'");
		$res = mysql_query( $query ) or die( "$query<br>".mysql_error() );
		$row = mysql_fetch_array( $res );
		if( $max_book < $row['single'] + $row['twins'] + $row['doubles'] +$row['triples'] + $row['executives'] 
						+$singles + $twins + $doubles + $triples + $executives )
			return -1;
		else
			return 0;
	}

	function oplog( $action ) {
		global $operator_id;
		$action = addslashes($action);
		$query = "INSERT INTO Messages ( operator_id, time, action )
			values ( '$operator_id', NOW(), '$action' )";
		mysql_query( $query ) or die("$query<br>".mysql_error());
	}
	
	function mail_client( $to, $subject, $message, $from, $reply_to, $x_mailer ) {
		mail( "$to", "$subject", "$message", "From: $from\nReply-to: $reply_to\nX-Mailer: $x_mailer");
	}
	
	function type($n) {
	  if ($n==1)
		return 	TEXT_SINGLE;
 	  if ($n==2)
		return 	TEXT_TWIN;
	  if ($n==3)
		return 	TEXT_DOUBLE;
	  if ($n==4)
		return 	TEXT_TRIPLE;
	  if ($n==5)
		return 	TEXT_EXECUTIVE;
  	  if ($n==6)
		return 	RType6;
	  if ($n==7)
		return 	RType7;
	  if ($n==8)
		return 	RType8;
	  if ($n==9)
		return 	RType9;
	  if ($n==10)
		return 	RType10;




	
	
	}
?>