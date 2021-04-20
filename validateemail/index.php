<?php
function validateEmail($str)
{
        $regexp = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($regexp, $str)) {
        echo("Email correct!");
    } else {
        echo("wrong !!");
    }
}
validateEmail('a@gmail.com');
echo "<br/>";
validateEmail('ab@yahoo.com');
echo "<br/>";
validateEmail('abc@hotmail.com');
echo "<br/><hr>";
validateEmail('@gmail.com');
echo "<br/>";
validateEmail('ab@gmail.');
echo "<br/>";
validateEmail('@#abc@gmail.com');