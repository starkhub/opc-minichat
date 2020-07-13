<?php

@session_start();

$username = htmlspecialchars($_POST['pseudo']);
$message = htmlspecialchars($_POST['message']);
$usernameLength = strlen($username);
$messageLength = strlen($message);
$errorMessage ;

function console_log($data){ //Debug dans la console du navigateur
    echo '<script>';
    echo 'console.log('. json_encode($data) . ')';
    echo '</script>';
}

function goToHome(){
    header('Location: index.php');
}

if($errorMessage != '')
{
    echo "<script>alert('" . $errorMessage .  "');/script>";
}

if(isset($username) && isset($message))
{

    if( $usernameLength == 0 || $usernameLength < 4)
    {
        $errorMessage = 'Please enter a valid username';
        goToHome();
    }
}
else{
    console_log('Les variables ne sont pas définies !');
}

?>