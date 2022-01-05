<?php $title = "Login | World Wide Importers";
include APP_ROOT . "/templates/header.php"; ?>

<!-- Login form -->
<div class="container">
    <div class="vertical-center">
        <div class="inner-block">
            <form action="/login" method="post">
                <h3>Login</h3>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" id="email" />
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" id="password" />
                </div>

                <button type="submit" name="login" id="sign_in"
                        class="btn btn-outline-primary btn-lg btn-block">Sign
                    in</button>
            </form>
        </div>
    </div>
</div>

<?php include APP_ROOT . "/templates/footer.php"; ?>
