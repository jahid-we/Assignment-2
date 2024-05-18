<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string){
    $vowel = vowel($string);
    printf("Original String: %s, Vowel Count: %d, Reversed String: %s\n", $string, $vowel, strrev($string));
}

function vowel($chr) {
    $vowelArray = ["a", "e", "i", "o", "u"];
    $chrLower = strtolower($chr);
    $count = 0;
    foreach (str_split($chrLower) as $chrSame) {
        if (in_array($chrSame, $vowelArray)) {
            $count++;
        }
    }
    return $count;
}
