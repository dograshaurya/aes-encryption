
# AES Encryption and Base64 Encoding in PHP

This repository provides a PHP implementation of AES encryption in CBC mode, similar to a Python script using the `pycryptodome` library. It demonstrates how to encrypt a string, pad the data to fit the AES block size, and then encode the result in Base64.

## Overview

This PHP script takes an input string, pads it to ensure it fits the AES block size, encrypts it using AES-128-CBC mode with a provided key and initialization vector (IV), and then outputs the result as a Base64-encoded string.

The script mimics the functionality of the original Python code using the `pycryptodome` library to perform AES encryption and Base64 encoding. It can be used in scenarios where AES encryption is required, especially when working with encrypted data that needs to be transferred over a network.

## Features

- AES-128-CBC encryption
- Base64 encoding of encrypted data
- Manual padding of input data to fit the AES block size
- Easy to modify for other AES key lengths (AES-256, etc.)

## Requirements

- PHP 7.4 or higher
- OpenSSL extension for PHP (usually installed by default)

## Installation

1. Clone the repository to your local machine:

    ```bash
    git clone https://github.com/dograshaurya/aes-encryption.git
    ```

2. Navigate to the project directory:

    ```bash
    cd aes-encryption-php
    ```

3. Make sure your PHP installation has the OpenSSL extension enabled. If not, you can enable it in your `php.ini` file:

    ```ini
    extension=openssl
    ```

## Usage

1. Set your `key` and `iv` as hexadecimal strings in the script (16 bytes each).
2. Set your input string (`text` variable) to the desired message you want to encrypt.
3. Run the script in a PHP-enabled server or using the PHP command line:

    ```bash
    php encrypt.php
    ```

4. The script will output the Base64-encoded encrypted text.

## Example

For the input string `"1733324800 lvcangetinfo"`, the script will output:

```bash
HPcortrzthSoSM8KJOpYg24kgIS6npZWBGNMJzlu1/Q=
```

## Code Explanation

- **Key & IV**: These are set as hexadecimal strings and then converted to binary using the `hex2bin` function.
- **Padding**: The input text is padded with ` ` to make it a multiple of the AES block size (16 bytes).
- **Encryption**: AES encryption is done using the `openssl_encrypt` function in CBC mode, with the key, IV, and padded text.
- **Base64 Encoding**: The encrypted binary data is then encoded in Base64 using PHP's `base64_encode` function.

## Contributions

Feel free to fork this repository, make changes, and create pull requests if you have improvements to suggest!
