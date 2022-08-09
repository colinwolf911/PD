<?php

// Create simple string
$name='PD';
$string ='HELLO'.$name;
$string0="hello".$name;
$string0="hello welcome $name";
echo $string.'<br>';
echo $string0.'<br>';
// String concatenation
echo 'hello'.'WELCOME'.'PD';
// String functions
$string='HELLO WELCOME PD';

ECHO "1-".strlen($string).'<br>';
ECHO "2-".trim($string).'<br>';
ECHO "3-".ltrim($string).'<br>';
ECHO "4-".rtrim($string).'<br>';
ECHO "5-".str_word_count($string).'<br>';
ECHO "6-".strrev($string).'<br>';
ECHO "7-".strtoupper($string).'<br>';
ECHO "8-".strtolower($string).'<br>';
ECHO "9-".ucfirst('PD').'<br>';
ECHO "10-".lcfirst('pd').'<br>';
ECHO "11-".ucwords('HELLO WELCOME PD').'<br>';
ECHO "12-".stripos($string,'PD').'<br>';
ECHO "13-".strpos($string,'pd').'<br>';
ECHO "14-".substr($string,8,6).'<br>';
ECHO "15-".str_replace('pd','PD',$string).'<br>';
ECHO "16-".str_ireplace('PD','pd',$string).'<br>';


// Multiline text and line breaks nl2br
$longTEXT="WELCOME<b> PD</b> ONLINE SHOPING, 
SANDBOX DATAWAREHOUSE STORES,
PROVIDED <b> CLOUD SERVERS</b>";

ECHO"1-".$longTEXT.'<br>';
echo"2-". nl2br($longTEXT);
echo"3-" .htmlentities($longTEXT);
echo"4-" .nl2br(htmlentities($longTEXT));
echo html_entity_decode('&lt;');
// Multiline text and reserve html tags


// https://www.php.net/manual/en/ref.strings.php