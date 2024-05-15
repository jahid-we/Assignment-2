<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    preg_match_all('/[a,e,i,o,u,A,E,I,O,U]/i', $string, $matches);
    $vowelCount = count($matches[0]);
    printf("Original String: %s, Vowel Count: %d, Reversed String: %s\n", $string, $vowelCount, strrev($string));
}

