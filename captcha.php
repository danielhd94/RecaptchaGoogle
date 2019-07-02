<?php
if( isset($_POST["g-recaptcha-response"]) && $_POST["g-recaptcha-response"] ) {
    $secret = "6LdagaAUAAAAALZo1qs3vEr2bEZO5xIUF4jckDCc";
    $ip = $_SERVER["REMOTE_ADDR"];
    $captcha = $_POST["g-recaptcha-response"]; /** response **/

    /* The function recive three parameters */
    $result = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");    
    $array = json_decode($result,true);

    $response = "false";
    echo "<br>";
    if($array["success"]){
       header("location: welcome.php");
    }else{
        header("location: error404.php");
    }
}

?>