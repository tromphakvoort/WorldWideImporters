<?php

namespace App\Controllers\Authentication;

use App\Database;
use Symfony\Component\Routing\RouteCollection;
use const APP_ROOT;

class LoginController
{

    private $connection;

    function __construct()
    {
        $this->connection = Database::getConnection();
    }

    public function index(RouteCollection $routes)
    {
        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true) {
            // TODO: Route to logged in page!
            header("location: /cart");
            exit();
        }

        require_once APP_ROOT . '/views/authentication/login.php';
    }

    public function authenticate(RouteCollection $routes)
    {
        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true) {
            // TODO: Route to logged in page!
            header("location: /cart");
            exit();
        }

        $email = $password = "";
        $email_err = $password_err = $login_err = "";

        // Process data when form is submitted ✔
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Check if values are set
            if (empty(trim($_POST["email"]))) {
                $email_err = "Please enter email";
            } else {
                $email = trim($_POST["email"]);
            }

            if (empty(trim($_POST["password"]))) {
                $password_err = "Please enter password";
            } else {
                $password = trim($_POST["password"]);
            }

            // Validate credentials
            if (empty($email_err) && empty($password_err)) {
                // Prepare a select statement
                $sql = "SELECT id, email, password FROM webshop_wwi.users WHERE email = ?";

                if ($stmt = mysqli_prepare($this->connection, $sql)) {
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "s", $param_email);

                    // Set parameters
                    $param_email = $email;

                    // Attempt to execute the prepared statement
                    if (mysqli_stmt_execute($stmt)) {
                        // Store result
                        mysqli_stmt_store_result($stmt);

                        // Check if email exists, if yes then verify password
                        if (mysqli_stmt_num_rows($stmt) == 1) {
                            // Bind result variables
                            mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);

                            if (mysqli_stmt_fetch($stmt)) {
                                if (password_verify($password, $hashed_password)) {
                                    // Password is correct, so start a new session
                                    // Check if there is a session already started
                                    if (session_status() == PHP_SESSION_NONE) {
                                        session_start();
                                    }

                                    // Check if there is a loggedIn bool in the session
                                    if (!isset($_SESSION['loggedIn'])) {
                                        $_SESSION['loggedIn'] = false;
                                    }
                                    // Check if there is an id int in the session
                                    if (!isset($_SESSION['id'])) {
                                        $_SESSION['id'] = -1;
                                    }
                                    // Check if there is an email string in the session
                                    if (!isset($_SESSION['email'])) {
                                        $_SESSION['email'] = "";
                                    }

                                    // Store data in session variables
                                    $_SESSION["loggedIn"] = true;
                                    $_SESSION["id"] = $id;
                                    $_SESSION["email"] = $email;

                                    // Redirect user to welcome page
                                    // TODO: Add welcome page
                                    header("location: /");
                                } else {
                                    // Password is not valid, display a generic error message
                                    $login_err = "Email of wachtwoord zijn niet juist";
                                }
                            }
                        } else {
                            // Email doens't exists, display a generic error message
                            $login_err = "Email of wachtwoord zijn niet juist";
                        }
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                    }

                    // Close statement
                    mysqli_stmt_close($stmt);
                }
            }
        }
    }

    public function logout(RouteCollection $routes)
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
            header("location: /login");
            exit();
        }

        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true) {
            $_SESSION["loggedIn"] = false;
            $_SESSION["id"] = null;
            $_SESSION["email"] = null;
            header("location: /login");
            exit();
        }
        header("location: /login");
        exit();
    }
}
