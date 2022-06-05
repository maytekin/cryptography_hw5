# cryptography_hw5
This is a repo to submit homework-5 for Cryptography class
This repo includes two different implementations:
1.) Base64 encoding&decoding with PHP
2.) RC4 Stream Cipher with PHP - RC4A type



This program is coded with PHP 8.0. Tested and works well with both PHP 7 and PHP 8. Even though not tested, should be working well also with PHP 5 as well.


One of the primary use case of base64 encoding is when we want to store or transfer data with a restricted set of characters. For example in Kubernetes, we store secrets as base64 encoded. Another use case can be that during the distribution of data with an API, the data can be stored as base64 encoded.


The example usage of the Base64 encoder&decoder program is :

![alt text](https://github.com/maytekin/cryptography_hw5/blob/main/sc-1.png?raw=true)


To be check the results to see if it's encoding and decoding correctly: (Also built-in "base64_encode()" "base64_decode()" functions in PHP can be used, or can be checked from terminal right away as well - might be a little tricky to deal with some special chars on the terminal.)

Validation of encoding function:

![alt text](https://github.com/maytekin/cryptography_hw5/blob/main/proof_encode.png?raw=true)

Validation of decoding function:

![alt text](https://github.com/maytekin/cryptography_hw5/blob/main/proof_decode.png?raw=true)

########################################################################################################################################
########################################################################################################################################
########################################################################################################################################

RC4 is a stream cipher and variable-length key algorithm. This algorithm encrypts one byte at a time (or larger units at a time).
A key input is pseudorandom bit generator that produces a stream 8-bit number that is unpredictable without knowledge of input key, The output of the generator is called key-stream, is combined one byte at a time with the plaintext stream cipher using XOR operation.

Advantages of RC4:

- RC4 stream ciphers are simple to use.
- The speed of operation in RC4 is fast as compared to other ciphers.
- RC4 stream ciphers are implemented on large streams of data.

The example usage of the RC4 Stream Cipher program is :

![alt text](https://github.com/maytekin/cryptography_hw5/blob/main/RC4.png?raw=true)
