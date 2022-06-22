<?php
require $_SERVER["DOCUMENT_ROOT"] . "/VUSHAL ASSIGNEMENT" . "/config/init.php";
$userinfo = new User();
debug($_POST);
if (
    isset($_POST, $_POST["full_name"], $_POST["email"], $_POST["password"]) &&
    !empty($_POST["email"]) &&
    !empty($_POST["full_name"]) &&
    !empty($_POST["password"])
) {
    $fullname = $_POST["full_name"];
    $email = $_POST["email"];
    $password = sha1($email.$_POST['password']);
    $in_email = $userinfo->getUserByUserName(
        filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)
    );
    $eml = $userinfo->getUserByUserName($email);
    //debug($eml,true);
    if(!$eml){
        $data = [
            "name" => $fullname,
            "email" => $email,
            "password" => $password,
        ];
        $final = @$userinfo->addUser($data);
        if ($final) {
            redirect(
                "../index.php",
                "success",
                "User Created Successfully! "
            );
        } else {
            redirect(
                "../index.php",
                "error",
                "Error While Creating User <strong>Retry</strong>"
            );
        }
    }else{
    redirect("../index.php", "error", "Email Already in Used ! Try again with another email");
    }
} else {
    redirect("../index.php", "error", "These information is complusary");
}