<?php


$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';


$ok =true;
$messages = array();

if (!isset($username) || empty($username)){
    $ok = false;
    $messages[] = "username cannot be empty!";
}

if (!isset($password) || empty($password)){
    $ok = false;
    $messages[] = "Password cannot be empty!";
}

if($ok){
    if($username ==='decode' && $password ==='decode'){
        $ok =true;
        $messages[] ='Successful login';
    }
    else{
        $ok = false;
        $messages[] ='Incorrect username/password combination';
    }
}

echo json_encode(
    array(
        'ok' => $ok,
        'messages' => $messages
    )
    );

?>