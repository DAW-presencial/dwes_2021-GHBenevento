<?php
require "header.php";
?>

    <main>
        <?php
        if (isset($_SESSION['userID'])) {
            echo "<p>You are logged out!</p>";

        } else {
            echo "<p>You are logged in!</p>";
        }
        ?>


    </main>

<?php
require "footer.php";
?>