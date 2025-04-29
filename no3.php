<?php
function isBalanced($input) {
    $stack = [];
    $pairs = [
        ')' => '(',
        '}' => '{',
        ']' => '['
    ];
    $input = str_replace(' ', '', $input);
    foreach (str_split($input) as $char) {
        if ($char == '(' || $char == '{' || $char == '[') {
            $stack[] = $char;
        }
        elseif ($char == ')' || $char == '}' || $char == ']') {
            if (empty($stack) || array_pop($stack) != $pairs[$char]) {
                return "NO";
            }
        }
    }
    return empty($stack) ? "YES" : "NO";
}
echo "Masukkan string untuk memeriksa apakah bracket seimbang: ";
$input = trim(fgets(STDIN)); 
echo isBalanced($input) . "\n";
?>
