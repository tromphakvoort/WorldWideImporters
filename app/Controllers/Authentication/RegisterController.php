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

    public function register() {
        // Error & success messages
        global $success_msg, $email_exist, $f_NameErr, $l_NameErr, $_emailErr, $_mobileErr, $_passwordErr;
        global $fNameEmptyErr, $lNameEmptyErr, $emailEmptyErr, $passwordEmptyErr, $email_verify_err, $email_verify_success;

        // Set empty form vars for validation mapping
        $_first_name = $_last_name = $_email = $_password = "";
        if (isset($_POST['submit'])) {
            $firstname     = $_POST['firstname'];
            $lastname      = $_POST["lastname"];
            $email         = $_POST["email"];
            $password      = $_POST["password"];

            $email_check_query = mysqli_query($this->connection, "SELECT * FROM users WHERE email = '{$email}' ");
            $rowCount = mysqli_num_rows($email_check_query);

            if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password)) {

                // Check if user email already exists
                if($rowCount > 0) {
                    $email_exists = '
                    <div class="alert alert-danger" role="alert">
                        User with email already exist!
                    </div>
                ';
                }
            }
        }
    }
}
