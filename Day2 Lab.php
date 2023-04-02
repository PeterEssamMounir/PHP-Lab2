<?php

// Task 1 

function createMessage() {
    $message = "Hello,\r\nThis is a new line.\r\n";
    $message = str_replace("\r\n", "\n", $message);
    return $message;
}

echo nl2br(createMessage());



// Task 2 strtolower() - trim() - str_repeat()
// Task 3
foreach ($_SERVER as $key => $value) {
    echo "$key: $value <br>";
}


//Task 4
$array = [12, 45, 10, 25];

$sum = array_sum($array);
echo "Sum of the array: ".$sum. "<br>";

$avg = $sum / count($array);
echo "Average of the array" .$avg. "<br>";

rsort($array);
echo "Sorted array: " . implode(", ", $array) . "<br>";

// Task 5
$ages = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
// ascending order sort by value
asort($ages);
echo "Ascending order sort by value:<br>";
print_r($ages);
echo "<br>";

// Sort in ascending order by key
ksort($ages);
echo "Ascending order sort by key:<br>";
print_r($ages);
echo "<br>";

// Sort in descending order by value
arsort($ages);
echo "Descending order sort by value:<br>";
print_r($ages);
echo "<br>";

// Sort in descending order by key
krsort($ages);
echo "Descending order sort by key:<br>";
print_r($ages);
echo "<br>";

?>
