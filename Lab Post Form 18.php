<!DOCTYPE html>
<html>
<body>

<h2>Student Information Form (POST)</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

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

    Hobbies:<br>

    <input type="checkbox" name="hobbies[]" value="Reading"> Reading
    <input type="checkbox" name="hobbies[]" value="Gaming"> Gaming
    <input type="checkbox" name="hobbies[]" value="Sports"> Sports
    <input type="checkbox" name="hobbies[]" value="Music"> Music
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

    <input type="submit" value="Submit POST">

</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $age = htmlspecialchars($_POST["age"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $course = htmlspecialchars($_POST["course"]);

    $hobbies = [];
    if(isset($_POST["hobbies"])) {
        $hobbies = $_POST["hobbies"];
    }

    echo "<h3>Submitted Information</h3>";

    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Age: " . $age . "<br>";
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
}
?>

</body>
</html>
