# cryptography_hw5
This is a repo to submit homework-5 for Cryptography class


This program is coded with PHP 8.0. Tested and works well with both PHP 7 and PHP 8. Even though not tested, should be working well also with PHP 5 as well.


One of the primary use case of base64 encoding is when we want to store or transfer data with a restricted set of characters. For example in Kubernetes, we store secrets as base64 encoded. Another use case can be that during the distribution of data with an API, the data can be stored as base64 encoded.


The example usage of the program is :

![alt text](https://github.com/maytekin/cryptography_hw5/blob/main/sc-1.png?raw=true)


To be check the results to see if it's encoding and decoding correctly: (Also built-in "base64_encode()" "base64_decode()" functions in PHP can be used, or can be checked from terminal right away as well - might be a little tricky to deal with some special chars on the terminal.)

Validation of encoding function:

![alt text](https://github.com/maytekin/cryptography_hw5/blob/main/proof_encode.png?raw=true)

Validation of decoding function:

![alt text](https://github.com/maytekin/cryptography_hw5/blob/main/proof_decode.png?raw=true)
