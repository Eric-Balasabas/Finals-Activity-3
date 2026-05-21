<!DOCTYPE html>
<html>
<body>

<form method="get" action="">
    Full Name: <input type="text" name="name">
    <input type="submit">
</form>

<?php
if(isset($_GET['name'])) {
    echo "Hello, " . $_GET['name'];
}
?>

</body>
</html>
