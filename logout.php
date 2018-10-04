<?

	Header("WWW-Authenticate: Basic realm=\"Hotel Booking Area\"");
	Header("HTTP/1.0 401 Unauthorized");
	echo "You have succefully logged out from system...\n";
	exit;
?>