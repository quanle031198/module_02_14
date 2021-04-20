<?php
function validateAccount($str)
{
        $regexp = '/^[_a-z0-9]{6,}$/';
    if (preg_match($regexp, $str)) {
        echo("Account correct!");
    } else {
        echo("wrong !!");
    }
}
validateAccount('123abc_');
echo "<br/>";
validateAccount('_abc123');
echo "<br/>";
validateAccount('______');
echo "<br/><hr>";
validateAccount('.@');
echo "<br/>";
validateAccount('12345');
echo "<br/>";
validateAccount('1234_');