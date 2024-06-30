<?php
//isset() function returns true if the variable is set and not null
$username =  null;

// if(isset($username)){
//     echo "Username is set";
// }else{
//     echo "Username is not set";
// }
//empty() function returns true if the variable is empty
if(empty($username)){
    echo "Username is empty";
}else{
    echo "Username is not empty";
}