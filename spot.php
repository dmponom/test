<?php
$string1 = $_POST["str"];
function spot($string){
$alphabet = "aąbcćdeęfghijklłmnńoóprsśtuwyzżź";
$letters = preg_split('//u',$alphabet,-1,PREG_SPLIT_NO_EMPTY); 
$str = preg_split('//u',$string,-1,PREG_SPLIT_NO_EMPTY);
for ($i = 0; $i < count($str); $i++){
$key = array_search ($str[$i], $letters);
if ($key < 16){
$list[] = $letters[$key+16];
}
elseif ($key > 15){
	$list[] = $letters[$key-16];
}
}
$s = implode ($list);
return $s;
}
echo spot($string1);
//test git!
//new chenge git!1
// new change git 2
?>