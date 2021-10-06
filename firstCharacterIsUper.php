<?php
function isFirstLetterUpperCase($str)
{
    $regexp = '/^[A-Z]/';
    if (preg_match($regexp, $str)) {
        echo("String's first character is uppercase");
    } else {
        echo("String isn't first character is uppercase");
    }
}
isFirstLetterUpperCase('ruong dep trai');