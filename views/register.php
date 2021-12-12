<?php $title = "Homepage | World Wide Importers";
include("../templates/header.php"); ?>

<div class="App">
    <div class="vertical-center">
        <div class="inner-block">
            <form action="" method="post">
                <h3>Register</h3>
                <div class="form-group">
                    <label>First name</label>
                    <input type="text" class="form-control" name="firstname" id="firstName" />
                </div>

                <div class="form-group">
                    <label>Last name</label>
                    <input type="text" class="form-control" name="lastname" id="lastName" />
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" id="email" />
                </div>

                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" class="form-control" name="mobilenumber" id="mobilenumber" />
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" id="password" />
                </div>

                <button type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-lg btn-block">
                    Sign up
                </button>
            </form>
        </div>
    </div>
</div>

<?php include("../templates/footer.php"); ?>
