<?php
include_once "config/core.php";

$page_title = "Login";

$require_login = false;
include_once "./login_checker.php";
$access_denied = false;


if ($_POST) {

    include_once "./config/database.php";
    include_once "./objects/user.php";


    $database = new Database();
    $db = $database->getConnection();

    $user = new User($db);

    $user->email = $_POST['email'];

    $email_exists = $user->emailExists();

    if ($email_exists && password_verify($_POST['password'], $user->password) && $user->status == 1) {

        $_SESSION['logged_in'] = true;
        $_SESSION['user_id'] = $user->id;
        $_SESSION['access_level'] = $user->access_level;
        $_SESSION['firstname'] = htmlspecialchars($user->firstname, ENT_QUOTES, 'UTF-8');
        $_SESSION['lastname'] = $user->lastname;

        if ($user->access_level == 'Admin') {
            header("Location: {$home_url}/admin/index.php?action=login_success");
        } else {
            header("Location: {$home_url}/index.php?action=login_success");
        }
    } else {
        $access_denied = true;
    }
}

include_once "layout_head.php";

echo "<div class='col-sm-6 col-md-4 col-md-offset-4'>";

$action = isset($_GET['action']) ? $_GET['action'] : "";

if ($action == 'not_yet_logged_in') {
    echo "<div class='alert alert-danger margin-top-40' role='alert'>Please login.</div>";
} else if ($action == 'please_login') {
    echo "<div class='alert alert-info'>
        <strong>Please login to access that page.</strong>
    </div>";
} else if ($action == 'email_verified') {
    echo "<div class='alert alert-success'>
        <strong>Your email address have been validated.</strong>
    </div>";
}

if ($access_denied) {
    echo "<div class='alert alert-danger margin-top-40' role='alert'>
        Access Denied.<br /><br />
        Your username or password maybe incorrect
    </div>";
}


echo "<div class='account-wall'>";
echo "<div id='my-tab-content' class='tab-content'>";
echo "<div class='tab-pane active' id='login'>";
echo "<img class='profile-img' src='./images/login_icon.png'>";
echo "<form class='form-signin' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='post'>";
echo "<input type='text' name='email' class='form-control' placeholder='Email' required autofocus />";
echo "<input type='password' name='password' class='form-control' placeholder='Password' required />";
echo "<input type='submit' class='btn btn-lg btn-primary btn-block' value='Log In' />";
echo "</form>";
echo "</div>";
echo "</div>";
echo "</div>";

echo "</div>";

include_once "layout_foot.php";
