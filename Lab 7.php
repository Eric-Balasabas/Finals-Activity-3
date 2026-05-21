<!DOCTYPE html>
<html>
<body>

    <form method="post" action="">
        Full Name: <input type="text" name="name"><br><br>

        Email: <input type="text" name="email"><br><br>

        Gender:
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <br><br>

        <input type="submit">
    </form>

    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);

        if(isset($_POST["gender"])) {
            $gender = $_POST["gender"];
        }
        if(empty($name)) {
            echo "Full name is required. <br>";
        } else {
            echo "Name: " . $name . "<br>";
        }
        if(empty($email)) {
            echo "Email is required. <br>";
        }
        else {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Email: " . $email . "<br>";
            }
            else {
                echo "Invalid email <br>";
            }
        }
        if(isset($_POST["gender"])) {
            echo "Gender: " . $gender;
        }
    }
    ?>
      
</body>
</html>
