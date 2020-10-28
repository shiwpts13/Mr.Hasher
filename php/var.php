<?php

$submit = "" ;
$emptycode = "" ;
$ord = '' ;
$Div_one = '<div id="div">' ;
$End_Tag = "</div></body></html>" ;

$Name_Hash = array(

	'<p style="color:#FFF" >',
	'</p>',
	'<p id="end" ><a id="end" href="https://mr-msa.xyz/"> Coded By MR.MSA</a></p>'
);

$Error = array(

	'<p id="empty_error" >Yor Text Is Empty !</p>',
	'<center><br><b id="error_len" >The number of characters should not exceed 80 !</b><br><br></center>',
) ;

if(isset($_POST['Code'])){

      $text = $_POST['Code'] ;
      $Yor_Text = 'Yor Text : ' . htmlspecialchars($text)   ;

///Stratr Ascii
          function ssu($str, $l = 0) {
             if ($l > 0) {
              $ret = array();
              $len = mb_strlen($str, "UTF-8");
                for ($i = 0; $i < $len; $i += $l) {
                    $ret[] = mb_substr($str, $i, $l, "UTF-8");
                   }
                  return $ret;
               }
              return preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
            }
        $array_text = ssu($text) ;
        foreach($array_text as $v)
        {
            $ord .= ord($v) ;
        }
        $ascii = $ord ; 
///End Ascii


      $hash = array(
 		md5($text),
 		hash('md4',$text),
 		hash('md2',$text),
 		sha1($text),
 		hash('sha224',$text),
 		hash('sha256',$text),
 		hash('sha384',$text),
 		hash('sha512',$text),
 		hash('sha3-224',$text),
 		hash('sha3-256',$text),
 		hash('sha3-384',$text),
 		hash('sha3-512',$text),
 		hash('RIPEMD128',$text),
 		hash('RIPEMD160',$text),
 		hash('RIPEMD256',$text),
 		hash('RIPEMD320',$text),
 		hash('fnv132',$text),
		hash('fnv1a64',$text),
		hash('fnv164',$text),
		hash('fnv1a32',$text),
 		hash('haval128,3',$text),
		hash('haval160,3',$text),
		hash('haval192,3',$text),
		hash('haval224,3',$text),
		hash('haval256,3',$text),
		hash('haval128,4',$text),
		hash('haval160,4',$text),
		hash('haval192,4',$text),
		hash('haval224,4',$text),
		hash('haval256,4',$text),
		hash('haval128,5',$text),
		hash('haval160,5',$text),
		hash('haval192,5',$text),
		hash('haval224,5',$text),
		hash('haval256,5',$text),
		hash('tiger128,3',$text),
		hash('tiger160,3',$text),
		hash('tiger192,3',$text),
		hash('tiger128,4',$text),
		hash('tiger160,4',$text),
		hash('tiger192,4',$text),
 		hash('adler32',$text),
 		convert_uuencode($text),
 		hash('gost',$text),
 		hash('joaat',$text),
 		//hash('crc32c',$text),
 		hash('crc32b',$text),
 		crc32($text),
 		hash('Snefru',$text),
 		hash('whirlpool',$text),
 		$ascii ,
 		base64_encode($text),
 		bin2hex($text)
 	);
     $hash_name = array(

 		'MD5 : ',
 		'MD4 : ',
 		'MD2 : ',
 		'SHA1 :',
 		'SHA224 : ',
 		'SHA256 : ',
 		'SHA384 : ',
 		'SHA512 : ',
 		'SHA3-224',
 		'SHA3-256',
 		'SHA3-384',
 		'SHA3-512',
 		'RIPEMD-128 : ',
 		'RIPEMD-160 : ',
 		'RIPEMD-256 : ',
 		'RIPEMD-320 : ',
 		'FNV132 : ',
		'FNV1A64 : ',
		'FNV164 : ',
		'FNV1A32 : ',
 		'HAVAL-128,3 : ',
		'HAVAL-160,3 : ',
		'HAVAL-192,3 : ',
		'HAVAL-224,3 : ',
		'HAVAL-256,3 : ',
		'HAVAL-128,4 : ',
		'HAVAL-160,4 : ',
		'HAVAL-192,4 : ',
		'HAVAL-224,4 : ',
		'HAVAL-256,4 : ',
		'HAVAL-128,5 : ',
		'HAVAL-160,5 : ',
		'HAVAL-192,5 : ',
		'HAVAL-224,5 : ',
		'HAVAL-256,5 : ',
		'TIGER-128,3 : ',
		'TIGER-160,3 : ',
		'TIGER-192,3 : ',
		'TIGER-128,4 : ',
		'TIGER-160,4 : ',
		'TIGER-192,4 : ',
 		'ADLER-32 : ',
 		'CONVERT UUENCODE :',
 		'GOST : ',
 		'JOAAT : ',
 	//	'CRC32C : ',
 		'CRC32B : ',
 		'CRC32 :',
 		'SNEFRU : ',
 		'WHIRLPOOL : ',
 		'ASCII (This is not a hash) : ',
 		'BASE64 (This is not a hash) : ',
 		'HEX (This is not a hash) : '

 	);
$avc = (count($hash) + count($hash_name)) / 2 ;
// a = array | v = value | c = count
}


?>