<?php

// 1.1 Accessing Substrings
$email = "mrluisechegaray@gmail.com";
if (strpos($email, '@') === false) {
    print "There is no @ in the email address!";
}

//1.2 Extracting Substrings
//format $substring = substr($string,$start,$length);
$string = "lechegaray";
$username = substr($string, 0, 5);
echo $username;
echo "<br />";

//1.3 Replacing Substrings
$old_string = "I have a long list of things that need to be done by Tuesday.";
$new_substring = "Friday.";
$new_string = substr_replace($old_string, $new_substring, 53);
echo $old_string;
echo "<br />";
echo $new_string;

//1.4 Processing a String One Byte at a Time

