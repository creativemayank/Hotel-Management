<?

	function authenticate() {                                                     
		Header("WWW-Authenticate: Basic realm=\"Hotel Corporate Zone(Login: lotus pass: lotus)\"");
		Header("HTTP/1.0 401 Unauthorized");                                       
		echo "Maybe next time...\n";                                               
		exit;                                                                      
	}                                                                            

	if(!isset($PHP_AUTH_USER) ) {                                                  
		authenticate();                                                             
	}                                                                               
	$res = mysql_query("SELECT * FROM Corporates WHERE username='$PHP_AUTH_USER'")
		or die("SELECT: ".mysql_error() );
	$row = mysql_fetch_array( $res );
	if( $PHP_AUTH_PW != $row['password'] || $PHP_AUTH_USER == '') {
		authenticate();
	}
	$corp_id = $row['corporate_id'];
	$corp_name = $row['name'];
	$corp_max_booking = $row['max_booking'];
	$corp_email = $row['email'];
?>