<?php

//$content = 'coucou';
//$content = 1289;
//$content = 12.89;
//$content = array(1, 2, 2, 56);
$content = array(
    "key1" => "value1",
    "key2" => "value2",
);



function my_vardump($content) {
    if(is_string($content)) {
        $nbr_string = strlen($content);
        echo 'string(' . $nbr_string . ') "' . $content . "\"";
    }
    if(is_int($content)) {
        echo 'int(' . $content . ")";
    }
    if(is_float($content)) {
        echo 'float(' . $content . ")";
    }
    if(is_array($content)) {
        $nbr_key = count($content);
        echo 'array(' . $nbr_key . ') {' . "\n";
            foreach($content as $key => $value) {
                if(is_string($value)) {
                    $nbr_value = strlen($value);
                    
                    echo '  ["' . $key . '"]=>' . "\n" .
                        '   string(' . $nbr_value . ') "' . $value . '"' . "\n";
                }

                if(is_int($value)){
                    echo '  [' . $key . ']=>' . "\n" .
                        '   int(' . $value . ')' . "\n";
                }
                
            }
            
            echo "}";
    }
    else {
        //echo 'error: format not supported';
    }

}

my_vardump($content);

echo "\n";

var_dump($content);