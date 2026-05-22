<!DOCTYPE html>
<html>
<body>

<h2>Student Information Form (GET)</h2>

<form method="get" action="">

    Full Name:
    <input type="text" name="name" required>
    <br><br>

    Email:
    <input type="email" name="email" required>
    <br><br>

    Age:
    <input type="number" name="age" required>
    <br><br>

    Gender:
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    Course:
    <select name="course" required>
        <option value="">Select Course</option>
        <option value="BSIT">BSIT</option>
        <option value="BSOA">BSOA</option>
        <option value="CSS">CSS</option>
        <option value="COA">COA</option>
        <option value="AHRT">AHRT</option>
    </select>
    <br><br>

    <input type="submit" value="Submit GET">

</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["name"])) {

    $name = htmlspecialchars($_GET["name"]);
    $email = htmlspecialchars($_GET["email"]);
    $age = htmlspecialchars($_GET["age"]);
    $gender = htmlspecialchars($_GET["gender"]);
    $course = htmlspecialchars($_GET["course"]);

    echo "<h3>Submitted Information</h3>";

    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Course: " . $course . "<br>";
}
?>

</body>
</html>
