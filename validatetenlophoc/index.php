<?php
function validateClass($str)
{
        $regexp = '/^([CAP])([0-9]{4})([GHIKLM])$/';
    if (preg_match($regexp, $str)) {
        echo("Class name correct!");
    } else {
        echo("wrong !!");
    }
}
validateClass('C0318G');
echo "<br/>";
validateClass('C1536I');
echo "<br/>";
validateClass('C1125K');
echo "<br/><hr>";
validateClass('M0318G');
echo "<br/>";
validateClass('P0323A');
echo "<br/>";
validateClass('Z25136H');