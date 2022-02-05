<?php
/**
 * A small and very basic JSON read / write library
 */


/**
 * Get a value from JSON file
 * 
 * @param string $key the key you want to read value
 * @param string $filename the name of the file you want to read
 * 
 * @return any The value of the specified key
 */
function getValue(string $key, string $filename): any {
    $obj = json_decode(file_get_contents($filename));
    return $obj[$key];
}

/**
 * Write a value in the JSON file
 * 
 * @param string $key the key you want to (over)write
 * @param any $value the (new) value of the selected key
 * @param string $filename the name of the file you want to write
 */
function writeValue(string $key, any $value, string $filename): void {
    $obj = json_decode(file_get_contents($filename));
    $obj[$key] = $value;
    file_put_contents($filename, json_encode($obj));
}

?>