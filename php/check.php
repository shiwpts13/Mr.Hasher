<?php

if (isset($_POST['hash'])) {
	if ($_POST['hash'] == 'Hash') {
		$submit = 'true' ;
	}
}
if ($submit == 'true') {

	if ($_POST['Code'] == '') {

		echo $Error[0] ;

	}else if (strlen($text) > 80 ){

		echo $Error[1] ;
		
	}else{
		$emptycode = 'false' ;
	}
}

?>