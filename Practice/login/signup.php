<?php
require "header.php";
?>

    <main>
        <div class="main-wrapper">
            <h1>Signup</h1>
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == 'emptyfields') {
                    echo '<p>Fill in all fields!</p>';
                } else if ($_GET['error'] == 'invaliduidmail') {
                    echo '<p>SQL error</p>';
                } else if ($_GET['error'] == 'invalidmail') {
                    echo '<p>The email is incorrect</p>';
                } else if ($_GET['error'] == 'invalidusername') {
                    echo '<p>The username is incorrect</p>';
                } else if ($_GET['error'] == 'passwordcheck') {
                    echo '<p>The passwords do not match</p>';
                } else if ($_GET['error'] == 'usertaken') {
                    echo '<p>Username is taken</p>';
                }
            }elseif ($_GET['signup'] == 'success'){
                echo '<p>Signup successful!</p>';
            }
            ?>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="text" name="email" placeholder="E-mail">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwd-repeat" placeholder="Repeat password">
                <button type="submit " name="signup-submit">Signup</button>
            </form>

        </div>

    </main>

<?php
require "footer.php";
?>