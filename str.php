<?php 

phpinfo();
$str = "this is the string";
$length = strlen($str);
echo $length."</br>";

echo strpos($str, "the" , 12);   // 18
echo strpos($str , "r")."</br>";  //14     
echo strpos($str , "t")."</br>"; 

echo str_replace("the","this",$str)."</br>";

echo substr($str,1,6); //after 1 charachter how much the character will come. 
   // should be three parameters in the functions first one iss used from where we can start the string last parameter is used to find from last.
// o/p -- his is the str

$split =  str_split($str,4);
print_r($split);

// Associative array..
$asso_array = [
    "name"=>"anju",
    "emp" =>"46257396",
];
$indexx = ["anju","sanju"];
$index[] = "This is the ladorfff";
 array_push($index,"Hii")."</br>";
 $pop_data= array_pop($indexx)."</br>";
 echo $pop_data;  // it will return last value of the array element
 


 print_r($index);
 
// echo $asso_array['name']."</br>"; //  name is the key..
// echo array_key_exists(0,$index);
// echo array_key_exists("name",$asso_array);
?>