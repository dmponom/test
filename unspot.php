<?php
$string1 = $_POST["str1"];
function unspot($string){
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

echo unspot($string1);
?>