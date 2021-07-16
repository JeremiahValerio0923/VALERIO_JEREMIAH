<?php
// Using strrev function to see if reversed string is palindrome ()
function Palindrome($string){ 
    if (strrev($string) == $string){ 
        return 1; 
    }
    else{
        return 0;
    }
} 
//see if inputted string is palindrome or not
$in_string = "Jeremiah";
if(Palindrome($in_string)){ 
    echo "$in_string is a Palindrome"; 
}
else { 
echo "$in_string is Not a Palindrome"; 
}
?> 