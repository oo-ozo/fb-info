<?php
$red="\033[0;31m";
$blue="\033[0;34m";
$green="\033[0;32m";
$yellow="\033[0;33m";
$cyan="\033[0;36m";
$purple="\033[0;35m";
$token =file_get_contents("token.txt");
$url = file_get_contents("https://graph.facebook.com/me/friends/?fields=id,email,relationship_status,gender,birthday,name,mobile_phone&access_token=".$token);
  $decode = json_decode($url);
    $total  = $decode->summary->total_count;
    echo "\n";
    echo $green."Starting Retrieve  Your Friends' Phone Numbers";
sleep(5);
$total = 0;
    echo "\n";
    foreach ($decode->data as $get) {
        if (!empty($get->mobile_phone)) {
            echo $green."Name:" .$get->name."\n";
            echo $blue."Id:" .$get->id."\n";
            echo $yellow."Phone Number:" .$get->mobile_phone."\n";
            echo "\n";
$total++;
        }
    }
echo $green."Total Data:".$total."\n";
?>
