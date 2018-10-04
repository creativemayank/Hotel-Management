<?


	if( 
		!preg_match( "/^\d{4}$/", $start_year )		||
		!preg_match( "/^\d{1,2}$/", $start_month )	||
		!preg_match( "/^\d{1,2}$/", $start_day )	||
		!preg_match( "/^\d{4}$/", $end_year )		||
		!preg_match( "/^\d{1,2}$/", $end_month )		||
		!preg_match( "/^\d{1,2}$/", $end_day )		||
		$start_year < 2001 							||
		$start_month < 1	|| $start_month > 12	||
		$start_day < 1		|| $start_day > 31		||
		$end_year < 2001 							||
		$end_month < 1		|| $end_month > 12		||
		$end_day < 1		|| $end_day > 31			
	) { 
//print		!preg_match( "/^\d{4}$/", $start_year );
//print		!preg_match( "/^\d{1,2}$/", $start_month );
//print		!preg_match( "/^\d{1,2}$/", $start_day );
//print		!preg_match( "/^\d{4}$/", $end_year );
//print		!preg_match( "/^\d{1,2}$/", $end_month );
//print		!preg_match( "/^\d{1,2}$/", $end_day );
//print		"<br>$start_year-$start_month-$start_day<br>";
//print		"$end_year-$end_month-$end_day";		

		header("Location: index.php?error=2");
		//echo "Invalid date<br>Please report this bug to author.\n";
		exit;
	}
?>