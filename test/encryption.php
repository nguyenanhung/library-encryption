<?php
/**
 * Project library-security
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 08/25/2021
 * Time: 11:58
 */
require_once __DIR__ . '/../vendor/autoload.php';

use nguyenanhung\BasicLibrary\Encryption\Encryption;


$test = new Encryption();

$key = $test->createKey(72);
echo "<pre>";
print_r($key);
echo "</pre>";
echo "\n";
echo "\n";

$bin2hex = bin2hex($key);
echo "<pre>";
print_r($bin2hex);
echo "</pre>";
echo "\n";
echo "\n";

$plaintext = 'It’s important for you to know that the encoded messages the encryption function generates will be approximately 2.6 times longer than the original message. For example, if you encrypt the string “my super secret data”, which is 21 characters in length, you’ll end up with an encoded string that is roughly 55 characters (we say “roughly” because the encoded string length increments in 64 bit clusters, so it’s not exactly linear). Keep this information in mind when selecting your data storage mechanism. Cookies, for example, can only hold 4K of information.';
echo "<pre>";
print_r($plaintext);
echo "</pre>";
echo "\n";
echo "\n";

$encrypt = $test->encrypt($plaintext);
echo "<pre>";
print_r($encrypt);
echo "</pre>";
echo "\n";
echo "\n";

$decrypt = $test->decrypt($encrypt);
echo "<pre>";
print_r($decrypt);
echo "</pre>";
echo "\n";