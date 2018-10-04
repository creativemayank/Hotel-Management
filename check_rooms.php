<?

if( 
		preg_match( "/\D/", $singles )		||
		preg_match( "/\D/", $doubles )		||
		preg_match( "/\D/", $twins )		||
		preg_match( "/\D/", $triples )		||
		preg_match( "/\D/", $executives )	||
		preg_match( "/\D/", $RType6 )		||
		preg_match( "/\D/", $RType7 )		||	
		preg_match( "/\D/", $RType8 )		||
		preg_match( "/\D/", $RType9 )		||
		preg_match( "/\D/", $RType10 )		
	) { 
	
		header("Location: $HTTP_REFERER");
		exit;
	}
if ($singles+$doubles+$twins+$triples+$executives+$RType6+$RType8+$RType7+$RType9+$RType10<=0)
	{ 
	
		header("Location: index.php?error=4");
		exit;
	}
	
                      
?>
