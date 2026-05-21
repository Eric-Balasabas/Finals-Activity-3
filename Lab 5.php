<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Full Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    <input type="submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

    if(empty($name)) {
        echo "Full name is required. <br>";
    } else {
        echo "Name: " . $name . "<br>";
    }

    if(empty($email)) {
        echo "Email is required. <br>";
    } else {
        echo "Email: " . $email . "<br>";
    }
}
?>

</body>
</html>
