<?php
$number=mt_rand(1,20);
if($number%2==0){
    echo "number {$number} is even";
}
else {
    echo "number {$number} is odd";
}