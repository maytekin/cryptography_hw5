<?php

function my_base64_encode($str)
{
    $base64 = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/');
    $bit_pattern = '';
    $padding = 0;
    $encoded = '';

    foreach (str_split($str) as $char) {
        $bit_pattern .= sprintf('%08s', decbin(ord($char)));
    }

    $bit_pattern = str_split($bit_pattern, 6);

    $offset = count($bit_pattern) - 1;
    if (strlen($bit_pattern[$offset]) < 6) {
        $padding = 6 - strlen($bit_pattern[$offset]);
        $bit_pattern[$offset] .= str_repeat('0', $padding);
        $padding /= 2;
    }

    foreach ($bit_pattern as $bit6) {
        $index = bindec($bit6);
        $encoded .= $base64[$index];
    }

    return $encoded.str_repeat('=', $padding);
}

function my_base64_decode($str)
{
    $base64 = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/');
    $bit_pattern = '';
    $padding = substr_count(substr(strrev($str), 0, 2), '=');
    $decoded = '';

    foreach (str_split($str) as $b64_encoded) {
        $bit_pattern .= sprintf('%06s', decbin(array_search($b64_encoded, $base64)));
    }

    $bit_pattern = str_split($bit_pattern, 8);
    if ($padding) {
        $bit_pattern = array_slice($bit_pattern, 0, -$padding);
    }

    foreach ($bit_pattern as $bin) {
        $decoded .= chr(bindec($bin));
    }

    return $decoded;
}





while(true){

    echo("\nThis program can encode/decode an input with by using base64 encoding/decoding algorithm");
    echo("\n\nEnter a number to select the operation:");
    echo("\n- Select 1 to encode");
    echo("\n- Select 2 to decode");
    echo("\n- Select 3 to exit\n");

    $select_operation = (int)readline("\nSelect the operation:");

    if ($select_operation == 1) {
    	$input = readline("\nEnter a string to encode: ");
    	$base64_encoded_output = my_base64_encode($input);

    	echo("\nUser given input to encode : ".$input);
    	echo("\n-------------------------------------------");
    	echo("\nBase64 encode : ".$base64_encoded_output);
    	echo ("\n\n------------------------------------------------------------\n\n");
    }elseif ($select_operation == 2) {
            $input = readline("\nEnter a string to decode: ");
            $base64_decoded_output = my_base64_decode($input);

    	echo("\nUser given input to decode : ".$input);
            echo("\n-------------------------------------------");
            echo("\nBase64 decode : ".$base64_decoded_output);
            echo ("\n\n------------------------------------------------------------\n\n");

    }elseif ($select_operation == 3) {
    	exit("Exitting.............\n.........\n.......\n.....\n...\n.\n");	
    }else {
    	var_dump('Wrong input!!!');
    }
}

