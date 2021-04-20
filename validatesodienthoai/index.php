<?php
function validatePhoneNum($str)
{
        $regexp = '/^\(([0-9]{2})\)-\(0([1-9]{9})\)$/';
    if (preg_match($regexp, $str)) {
        echo("Phone number correct!");
    } else {
        echo("wrong !!");
    }
}
validatePhoneNum('(84)-(0978489648)');

echo "<br/><hr>";
validatePhoneNum('(a8)-(22222222)');
echo "<br/>";
