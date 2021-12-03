<?php
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Ejercicio 5</title>
</head>
<html lang="en">

<body>
    <form enctype="multipart/form-data" method="POST" action="upload.php">
        <div class="form">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Name">

            <label for="surname">Surname:</label>
            <input type="text" name="surname" id="surname" placeholder="Surname">

            <label for="dob">Date of birth:</label>
            <input type="date" name="dob" id="dob">

            <label for="file1">First file:</label>
            <input type="file" name="file1" id="file1">

            <label for="file2">Second file:</label>
            <input type="file" name="file2" id="file2">

            <button type="submit" name="form-submit">Submit</button>
        </div>
    </form>

</body>

</html>