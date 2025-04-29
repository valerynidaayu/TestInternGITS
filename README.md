Kompleksitas Waktu (Time Complexity):
➡O(n) Di mana (n) adalah panjang string input.
Fungsi melakukan satu kali iterasi terhadap setiap karakter input: foreach (str_split($input) as $char)
Operasi seperti str_replace, array_push, array_pop, dan pengecekan empty($stack) dilakukan dalam waktu konstan (O(1)) per karakter.

Kompleksitas Ruang (Space Complexity):
➡O(n) Dalam kasus terburuk, seluruh karakter input adalah opening bracket (misalnya "(((((((("), semuanya akan masuk ke dalam stack.
