<?php

namespace App\Controllers\Authentication;

use App\Database;
use Symfony\Component\Routing\RouteCollection;

class RegisterController
{

    private $connection;

    function __construct() {
        $this->connection = Database::getConnection();
    }

    public function index(RouteCollection $routes) {
        require_once APP_ROOT . '/views/authentication/register.php';
    }

    public function register(RouteCollection $routes) {
        // Define variables and initialize with empty values
        $firstname = $lastname = $email = $phonenumber = $password = $confirm_password = "";
        $email_err = $password_err = $confirm_password_err = "";

        // Processing form data when form is submitted
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validate user information
            // TODO: Add better validation
            if(!empty($_POST["firstname"])) {
                $firstname = $_POST["firstname"];
            }

            if(!empty($_POST["lastname"])) {
                $lastname = $_POST["lastname"];
            }

            if(!empty($_POST["phonenumber"])) {
                $phonenumber = $_POST["phonenumber"];
            }

            // Validate email
            if(empty(trim($_POST["email"]))) {
                $email_err = "Voer een email in";
            } else {
                $sql = "SELECT id FROM webshop_wwi.users WHERE email = ?";

                if($stmt = mysqli_prepare($this->connection, $sql)) {
                    // Bind variables to the prepared staments as paramters
                    mysqli_stmt_bind_param($stmt, "s", $param_email);

                    // Set parameters
                    $param_email = trim($_POST["email"]);

                    // Attempt to execute the prepared statement
                    if(mysqli_stmt_execute($stmt)) {
                        // Store result
                        mysqli_stmt_store_result($stmt);

                        if(mysqli_stmt_num_rows($stmt) == 1) {
                            $email_err = "Dit emailadres is al in gebruik.";
                        } else {
                            $email = trim($_POST["email"]);
                        }
                    } else {
                        echo "Oeps! Something went wrong please try again later.";
                    }

                    // Close statement
                    mysqli_stmt_close($stmt);
                }
            }

            // Validate password
            if(empty(trim($_POST["password"]))) {
                $password_err = "Voer een wachtwoord in.";
            } elseif(strlen(trim($_POST["password"])) < 6) {
                $password_err = "Wachtwoord moet minimaal 6 karakters bevatten.";
            } else {
                $password = trim($_POST["password"]);
            }

            // Validate confirm password
            if(empty(trim($_POST["confirm_password"]))) {
                $confirm_password_err = "Bevestig wachtwoord";
            } else {
                $confirm_password = trim($_POST["confirm_password"]);
                if(empty($password_err) && ($password != $confirm_password)) {
                    $confirm_password_err = "Password did not match";
                }
            }

            // Check input errors before inserting in database
            if(empty($email_err) && empty($password_err) && empty($confirm_password_err)) {
                // Prepare insert statement
                $sql = "INSERT INTO webshop_wwi.users (firstname, lastname, email, phonenumber, password) VALUES (?, ?, ?, ?, ?)";

                if($stmt = mysqli_prepare($this->connection, $sql)) {
                    // Bind variables to the prepared statement as paramters
                    mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $param_email, $phonenumber, $param_password);

                    // Set parameters
                    $param_email = $email;
                    $param_password = password_hash($password, PASSWORD_DEFAULT); // Create a hashed password

                    // Attempt ot execute the prepared statement
                    if(mysqli_stmt_execute($stmt)) {
                        // Redirect to login page
                        // TODO: Redirect to login page use routing
                        header("location: login");
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                    }

                    // Close statement
                    mysqli_stmt_close($stmt);
                }
            }
        }
    }

}
