<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // Count vowels
    $vowelCount = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $vowelCount++;
        }
    }

    // Reverse string
    $reversedString = strrev($string);

    echo "String: $string, Vowels: $vowelCount, Reversed: $reversedString\n";
}

