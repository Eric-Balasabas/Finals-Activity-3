<!DOCTYPE html>
<html>
<body>

    <h2>Student Information Form</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        
        Full Name:
        <input type="text" name="name"
        value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">
        <br><br>

        Email:
        <input type="text" name="email"
        value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
        <br><br>

        Password:
        <input type="password" name="password">
        <br><br>

        Gender:
        <input type="radio" name="gender" value="Male"
        <?php if(isset($_POST['gender']) && $_POST['gender'] == "Male") echo "checked"; ?>>
        Male

        <input type="radio" name="gender" value="Female"
        <?php if(isset($_POST['gender']) && $_POST['gender'] == "Female") echo "checked"; ?>>
        Female
        <br><br>

        Hobbies:<br>

        <input type="checkbox" name="hobbies[]" value="Reading"
        <?php if(isset($_POST['hobbies']) && in_array("Reading", $_POST['hobbies'])) echo "checked"; ?>>
        Reading

        <input type="checkbox" name="hobbies[]" value="Gaming"
        <?php if(isset($_POST['hobbies']) && in_array("Gaming", $_POST['hobbies'])) echo "checked"; ?>>
        Gaming

        <input type="checkbox" name="hobbies[]" value="Sports"
        <?php if(isset($_POST['hobbies']) && in_array("Sports", $_POST['hobbies'])) echo "checked"; ?>>
        Sports

        <input type="checkbox" name="hobbies[]" value="Music"
        <?php if(isset($_POST['hobbies']) && in_array("Music", $_POST['hobbies'])) echo "checked"; ?>>
        Music

        <input type="checkbox" name="hobbies[]" value="Singing"
        <?php if(isset($_POST['hobbies']) && in_array("Singing", $_POST['hobbies'])) echo "checked"; ?>>
        Singing

        <input type="checkbox" name="hobbies[]" value="To Wander"
        <?php if(isset($_POST['hobbies']) && in_array("To Wander", $_POST['hobbies'])) echo "checked"; ?>>
        To Wander
        <br><br>

        Course:
        <select name="course">
            <option value="">Select Course</option>

            <option value="BSIT"
            <?php if(isset($_POST['course']) && $_POST['course'] == "BSIT") echo "selected"; ?>>
            BSIT
            </option>

            <option value="BSOA"
            <?php if(isset($_POST['course']) && $_POST['course'] == "BSOA") echo "selected"; ?>>
            BSOA
            </option>

            <option value="CSS"
            <?php if(isset($_POST['course']) && $_POST['course'] == "CSS") echo "selected"; ?>>
            CSS
            </option>

            <option value="COA"
            <?php if(isset($_POST['course']) && $_POST['course'] == "COA") echo "selected"; ?>>
            COA
            </option>

            <option value="AHRT"
            <?php if(isset($_POST['course']) && $_POST['course'] == "AHRT") echo "selected"; ?>>
            AHRT
            </option>
        </select>
        <br><br>

        Message:<br>
        <textarea name="message" rows="5" cols="30" placeholder="Message"><?php
        if(isset($_POST['message'])) echo htmlspecialchars($_POST['message']);
        ?></textarea>
        <br><br>

        <input type="submit" value="Submit">

    </form>

    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = htmlspecialchars(trim($_POST["name"]));
        $email = htmlspecialchars(trim($_POST["email"]));
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

            echo "<h3>Submitted Information</h3>";

            echo "Name: " . $name . "<br>";
            echo "Email: " . $email . "<br>";
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
