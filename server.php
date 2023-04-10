<?php


function dump($arr){
echo "<pre>";
var_dump($arr);
echo "</pre>";



}
function encrypt($mess, $key){
    include('aes.php');
$cr = new AES;
$mess = base64_encode($mess);
$iv = [3, 4, 5, 1, 0, 2, 8, 2, 6, 6, 0, 2, 8, 7, 8, 7];
$i = 0;
$byteChars = [];
//while ($i < strlen($mess))
$chars = str_split($mess);
foreach($chars as $char){
    array_push($byteChars, ord($char));
}
$a = $cr->encrypt($byteChars, 0, $key, count(str_split($key)), $iv);
$a = $a['cipher'];
dump($a);

}
$a = '12345';
echo base64_encode($a);
echo "<br>";
encrypt($a, '12345');


    /*

[8, 149, 126, 221, 74, 226, 250, 37, 196, 49, 205, 197, 77, 79, 137, 202, 144, 4, 205, 26, 20, 1220, 1099, 1142, 1048, 1172, 1169, 1191, 213, 112, 231, 80, 210, 161, 252, 197]


 */
