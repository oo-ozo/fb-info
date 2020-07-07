<?
$red="\033[0;31m";
$blue="\033[0;34m";
$green="\033[0;32m";
$yellow="\033[0;33m";
$cyan="\033[0;36m";
$purple="\033[0;35m";
echo $red."Input Email Or Phone: "; 
$id= trim(fgets(STDIN));
echo $blue."Password: "; 
$pass= trim(fgets(STDIN));
$data=file_get_contents('https://b-api.facebook.com/method/auth.login?access_token=237759909591655%25257C0f140aabedfb65ac27a739ed1a2263b1&format=json&sdk_version=2&email=' . $id . '&locale=en_US&password=' . $pass . '&sdk=ios&generate_session_cookies=1&sig=3f555f99fb61fcd7aa0c44f58f522ef6');
$json = json_decode($data, true);
$token = $json['access_token'];
$file = fopen("token.txt", "w");
fwrite($file, $token);
fclose($file);
?>
