<?php
function no1($n) {
    $result = [];
    $current = 1;
    for ($i = 0; $i < $n; $i++) {
        $result[] = $current;
        $current += $i + 1;
    }
    return implode("-", $result);
}
if (php_sapi_name() === "cli") {
    echo "Masukkan angka: ";
    $input = trim(fgets(STDIN));
    if (is_numeric($input)) {
        echo no1((int)$input) . PHP_EOL;
    } else {
        echo "Input harus berupa angka bulat!" . PHP_EOL;
    }
} else {
    if (isset($_GET['n']) && is_numeric($_GET['n'])) {
        $n = (int)$_GET['n'];
        echo "<p>Output: " . no1($n) . "</p>";
    } else {
        echo '<form method="get">
                Masukkan angka: <input type="number" name="n">
                <input type="submit" value="Submit">
              </form>';
    }
}
?>
