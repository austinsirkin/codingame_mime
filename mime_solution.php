<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 * This code was created by Codingame.com.
 **/

fscanf(STDIN, "%d",
    $N // Number of elements which make up the association table.
);
fscanf(STDIN, "%d",
    $Q // Number Q of file names to be analyzed.
);
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%s %s",
        $EXT, // file extension
        $MT // MIME type.
    );
       
        $tempFileExt[] = $EXT;
        $mimeType[] = $MT;
}
for ($i = 0; $i < $Q; $i++)
{
    $FNAME = stream_get_line(STDIN, 500 + 1, "\n"); // One file name per line.
    $tempFileName[] = $FNAME;
}

// Code below here was created by Austin Sirkin.    

for ($i = 0; $i < $Q; $i++) {
$fileName[$i] = strtolower($tempFileName[$i]);   
}

for ($i = 0; $i < $N; $i++) {
$fileExt[$i] = strtolower($tempFileExt[$i]);   
}

for ($i = 0; $i < $Q; $i++) {
$explode[$i] = explode(".", $fileName[$i]);
}

$veri = [];

for ($i = 0; $i < $Q; $i++) {
    
    if (isset($explode[$i][1])) {
    
    for ($s = 0; $s < $N; $s++) {
        if (end($explode[$i]) == $fileExt[$s]) {
            echo ($mimeType[$s] . "\n");
            $veri[$i] = "KNOWN";
    } 
    }
    if (isset($veri[$i]) == FALSE) {
        echo "UNKNOWN\n";
        $veri[$i] = "UNKNOWN";
    }
    }  else {
        echo "UNKNOWN\n";
        $veri[$i] = "UNKNOWN";
    }
}
