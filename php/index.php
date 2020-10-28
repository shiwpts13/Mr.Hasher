<?php

 include 'File/includes.php';

 if ($emptycode == 'false') {
   echo $Div_one ;
   echo $Name_Hash[0] ;
   echo $Yor_Text ; 
   
 	for ($o=0; $o<$avc;$o++) { 
		echo '<br><br>'. $hash_name[$o] .'<br>'. htmlspecialchars($hash[$o]) ;
	}
   
   echo $Name_Hash[1] ;
   echo $End_Tag ;
   echo $Name_Hash[2] ;
 }else {
 	 	 include "File/footer.htm" ;
 }

?>
