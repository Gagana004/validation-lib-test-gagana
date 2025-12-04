<?php

require __DIR__ . '/../vendor/autoload.php';

use ValidationLib\PhoneValidator;
use ValidationLib\EmailValidator;
use ValidationLib\PostcodeValidator;

// Phone formatting and Validation
//AU
$phone = "+61412345678";
$number = PhoneValidator::formatPhoneNumber($phone, "Australia");
echo $number;
if (PhoneValidator::isValidPhoneNumber($number, "Australia")) {
    echo "Valid!";
} else {
    echo "Invalid!";
}

//NZ
$phone = "+64224390604";
$number = PhoneValidator::formatPhoneNumber($phone, "New Zealand");
echo $number;
if (PhoneValidator::isValidPhoneNumber($number, "New Zealand")) {
    echo "Valid!";
} else {
    echo "Invalid!";
}

//CA
$phone = "+12505031947";
$number = PhoneValidator::formatPhoneNumber($phone, "Canada");
echo $number;
if (PhoneValidator::isValidPhoneNumber($number, "Canada")) {
    echo "Valid!";
} else {
    echo "Invalid!";
}

//IDN
$phone = "+6288803304379";
$number = PhoneValidator::formatPhoneNumber($phone, "Indonesia");
echo $number;
if (PhoneValidator::isValidPhoneNumber($number, "Indonesia")) {
    echo "Valid!";
} else {
    echo "Invalid!";
}

//email validation
$email = 'gagana@wearecuriousminds.con';
$result = EmailValidator::isValid($email);
print_r($result);


// State Generator
$postcode = '4345'; //QLD
$result = PostcodeValidator::generateState($postcode,'Australia');
print_r($result);



