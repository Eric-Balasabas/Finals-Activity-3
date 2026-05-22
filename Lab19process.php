<!DOCTYPE html>
<html>
<body>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $age = htmlspecialchars(trim($_POST["age"]));
    $password = htmlspecialchars(trim($_POST["password"]));
    $course = htmlspecialchars(trim($_POST["course"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $gender = "";
    if(isset($_POST["gender"])) {
        $gender = htmlspecialchars($_POST["gender"]);
    }

    $hobbies = [];
    if(isset($_POST["hobbies"])) {
        $hobbies = $_POST["hobbies"];
    }

    $valid = true;

    if(empty($name)) {
        echo "Full Name is required.<br>";
        $valid = false;
    }

    if(empty($email)) {
        echo "Email is required.<br>";
        $valid = false;
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid Email format.<br>";
        $valid = false;
    }

    if(empty($age)) {
        echo "Age is required.<br>";
        $valid = false;
    }
    elseif(!is_numeric($age)) {
        echo "Age must be a number.<br>";
        $valid = false;
    }
    elseif($age < 1 || $age > 120) {
        echo "Age must be between 1 and 120.<br>";
        $valid = false;
    }

    if(empty($password)) {
        echo "Password is required.<br>";
        $valid = false;
    }

    if(empty($gender)) {
        echo "Gender is required.<br>";
        $valid = false;
    }

    if(empty($course)) {
        echo "Course is required.<br>";
        $valid = false;
    }

    if(empty($message)) {
        echo "Message is required.<br>";
        $valid = false;
    }

    if($valid) {

        echo "<h2>Submitted Information</h2>";

        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Age: " . $age . "<br>";
        echo "Password: " . str_repeat("*", strlen($password)) . "<br>";
        echo "Gender: " . $gender . "<br>";

        echo "Hobbies: ";

        if(!empty($hobbies)) {
            echo implode(", ", $hobbies);
        }
        else {
            echo "No hobbies selected";
        }

        echo "<br>";
        echo "Course: " . $course . "<br>";
        echo "Message: " . $message . "<br>";
    }
}
?>

</body>
</html>
