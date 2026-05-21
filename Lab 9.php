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

        Course:
        <select name="course">
            <option value="BSIT">BSIT</option>
            <option value="BSOA">BSOA</option>
            <option value="CSS">CSS</option>
            <option value="COA">COA</option>
            <option value="AHRT">AHRT</option>
        </select>
        <br><br>

         Message:<br>
        <textarea name="message" rows="5" cols="30"></textarea><br><br>

        <input type="submit">
    </form>

    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $course = $_POST["course"];
        $message = htmlspecialchars($_POST["message"]);

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
            echo "Gender: " . $gender . "<br>";
        }

        echo "Course: " . $course . "<br>";

        if(empty($message)) {
            echo "Message is required.";
        } else {
            echo "Message: " . $message;
        }
    }
    ?>
      
</body>
</html>
