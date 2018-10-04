<?




	if( 
		!preg_match( "/^\d{8}$/", $start_date )		||
		!preg_match( "/^\d{8}$/", $end_date )		||
		($start_date[0].$start_date[1].$start_date[2].$start_date[3]) < 2001 ||
		($start_date[4].$start_date[5]) < 1	|| ($start_date[4].$start_date[5]) > 12	||
		($start_date[6].$start_date[7]) < 1	|| ($start_date[6].$start_date[7]) > 31	||
		($end_date[0].$end_date[1].$end_date[2].$end_date[3]) < 2001 ||
		($end_date[4].$end_date[5]) < 1	|| ($end_date[4].$end_date[5]) > 12	||
		($end_date[6].$end_date[7]) < 1	|| ($end_date[6].$end_date[7]) > 31	
	) { 
//print		!preg_match( "/^\d{8}$/", $start_date )."=";
//print		!preg_match( "/^\d{8}$/", $end_date )."="		;
//print		(($start_date[0].$start_date[1].$start_date[2].$start_date[3]) < 2001) ."=";
//print		(($start_date[4].$start_date[5]) < 1)."="	. (($start_date[4].$start_date[5]) > 12)."="	;
//print		(($start_date[6].$start_date[7]) < 1)."="	. (($start_date[6].$start_date[7]) > 31)."="	;
//print		(($end_date[0].$end_date[1].$end_date[2].$end_date[3]) < 2001)."=" ;
//print		(($end_date[4].$end_date[5]) < 1)."="	. (($end_date[4].$end_date[5]) > 12)."="	;
//print		(($end_date[6].$end_date[7]) < 1)."="	. (($end_date[6].$end_date[7]) > 31)."+"	;
//print "<br>$start_date-$end_date";

		header("Location: $HTTP_REFERER");
		exit;
	}
?>
