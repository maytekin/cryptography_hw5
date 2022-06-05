<?php
 
function rc4a($str, $key)
{
    # Key-scheduling algorithm
    for ($s = array(), $i = 0; $i < 256; $i++){
	    $s[$i] = $i;
    }
 
    for ($j = 0, $i = 0; $i < 256; $i++){

        $j = ($j + $s[$i] + ord($key[$i % strlen($key)])) % 256;
        $x = $s[$i];
        $s[$i] = $s[$j];
        $s[$j] = $x;
    }
 
    # Very Simple method for s2
    $s2 = array_reverse($s);


    # Pseudo-random generation algorithm
    for ($i = 0, $j = 0, $j2 = 0, $res = '', $y = 0; $y < strlen($str); $y++){

        $i = ($i + 1) % 256;
        $j = ($j + $s[$i]) % 256;
        $x = $s[$i];
        $s[$i] = $s[$j];
        $s[$j] = $x;
        $v = $str[$y] ^ chr($s[($s[$i] + $s[$j]) % 256]);
        $j2 = ($j2 + $s2[$i]) % 256;
        $x = $s2[$i];
        $s2[$i] = $s2[$j2];
        $s2[$j2] = $x;
        $res .= $v ^ chr($s[($s2[$i] + $s2[$j2]) % 256]);
    }
    return $res;
}

while(true){ 
echo("\n#####################################\n");	
echo("#####################################\n");
echo("#####################################\n");
echo("This is PHP program that uses RC4 Stream Cipher to encrypt a message");
echo("\n#####################################");
echo("\n#####################################");
echo("\n#####################################\n");

$input_text = readline("Enter a string to encrypt: ");
$input_key_encrypt = readline("Enter an encrytion key to encrypt: ");
$input_key_decrypt = readline("Enter the encryption key to decrypt: ");
echo("\n-------------------------------------\n");
echo("-------------------------------------\n");
echo("Entered text to encrypt: ".$input_text."\n");
echo("Entered key to encrypt: ".$input_key_encrypt."\n");
echo("Entered key text to decrypt: ".$input_key_decrypt."\n");

if($input_key_encrypt !== $input_key_decrypt){
	echo("\nKeys do not match!!! ->> Unsuccesful decryption attempt!!!\n");
}

echo("Decrypted text: ");
echo(rc4a(rc4a($input_text,$input_key_encrypt),$input_key_decrypt));
echo("\n\n");
}

?>

