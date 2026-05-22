<!DOCTYPE html>
<html>
<body>

    <h2>Student Information Form</h2>

    <form method="post" action="process.php">

        Full Name:
        <input type="text" name="name" required>
        <br><br>

        Email:
        <input type="email" name="email" required>
        <br><br>

        Age:
        <input type="number" name="age" required>
        <br><br>

        Password:
        <input type="password" name="password" required>
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
        <input type="checkbox" name="hobbies[]" value="Singing"> Singing
        <input type="checkbox" name="hobbies[]" value="To Wander"> To Wander
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

        Message:<br>
        <textarea name="message" rows="5" cols="30" required></textarea>
        <br><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">

    </form>

</body>
</html>
