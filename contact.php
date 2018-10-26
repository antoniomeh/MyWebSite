<?php
	//Make a function to detect the navigator  
	function getUserLanguage() {  
		$idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 
		return $idioma;  
	} 
  
	//Set the language
	$user_language=getUserLanguage();

	include("header.php");
	print("<div class=\"container\">");
		if($user_language=='es') {
			include("es/contact.html");
		} else {
			include("en/contact.html");
		}
	print("</div>");
	include("footer.php");

?>
