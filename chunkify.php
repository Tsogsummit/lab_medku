<?php
$word = $_POST['word'];
$number = $_POST['number'];

$chunks = ceil(strlen($word) / $number);

echo "The {$number} -letter chunks of {$word} are: <br />";

for( $i = 0; $i < $chunks; $i++ ) {
    $chuck = substr($word, $i * $number, $number);
    print("%d: %s <br />\n" , $i + 1. $chunk);
}
?>