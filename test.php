<!DOCTYPE html>
<html>
<body>
<?php
$word = "";
$count = $maxCount = 0;
$words = array();

//Opens file in read mode
$file = fopen("mobydick.txt", "r");

//Reads each line
while (($line = fgets($file)) !== false) {
    $line = strtolower($line);
    $line = str_replace(',' ,'', $line);
    $line = str_replace('.', '', $line);
    $string = explode(' ', $line);

    //Adding all words generated in previous step into words
    for($i = 0; $i < count($string); $i++){
        array_push($words, $string[$i]);
    }
}

//Determine the most repeated word in a file
for($i = 0; $i < count($words); $i++){
    $count = 1;
    //Count each word in the file and store it in variable count
    for($j = $i+1; $j < count($words); $j++){
        if($words[$i] == $words[$j]){
            $count++;
        }
    }
    //If maxCount is less than count then store value of count in maxCount
    //and corresponding word to variable word
    if($count > $maxCount){
        $maxCount = $count;
        $word = $words[$i];
    }
}

print("Most repeated word: " . $word);
fclose($file);
?>
</body>
</html>
