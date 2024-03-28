<?php
    include_once 'user.php';
    $username = "";
    $age= "";
    $sex= "";
    $Education= "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["username"])) {
            $username = strip_tags($_POST["username"]);
        }
        if (isset($_POST["age"])) {
            $age = $_POST["age"];
        }
        $sex = isset($_POST["sex"]) ? $_POST["sex"] : "male";
        
        if (isset($_POST["selectedEducation"])) {
            $Education = $_POST["selectedEducation"];
        }
        var_dump($_POST);
        $newUser = new User($username, $age, $sex, $Education);
        $newUser-> Info();
        echo "$Education";
    }
?>