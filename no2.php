<?php
function denseRanking($playerScores, $gitsScores) {
    $uniqueScores = array_values(array_unique($playerScores));
    $result = [];
    foreach ($gitsScores as $gitsScore) {
        $left = 0;
        $right = count($uniqueScores) - 1;
        $rank = count($uniqueScores) + 1;
        while ($left <= $right) {
            $mid = intdiv($left + $right, 2);
            if ($gitsScore >= $uniqueScores[$mid]) {
                $rank = $mid + 1;
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        }

        $result[] = $rank;
    }

    return $result;
}
echo "Masukkan jumlah pemain: ";
$n = (int)trim(fgets(STDIN));

echo "Masukkan skor pemain (pisahkan dengan spasi): ";
$playerScores = array_map('intval', explode(' ', trim(fgets(STDIN))));

echo "Masukkan jumlah skor GITS: ";
$m = (int)trim(fgets(STDIN));

echo "Masukkan skor GITS (pisahkan dengan spasi): ";
$gitsScores = array_map('intval', explode(' ', trim(fgets(STDIN))));

$result = denseRanking($playerScores, $gitsScores);
echo "Output: " . implode(" ", $result) . PHP_EOL;
?>
