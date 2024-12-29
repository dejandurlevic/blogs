<?php require_once 'partials/top.php'; ?>

<nav class="navbar navbar-expand navbar-light bg-light">
    <a href="" class="navbar-brand">Blogger</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="index.php" class="nav-link">Back to Blog</a>
        </li>
    </ul>
</nav>
<div class="jumbotron text-center">
    <h4>Login/Register</h4>
</div>

<div class="container">
    <div class="row">
        <!-- Login Section -->
        <div class="col-md-6">
            <h5 class="text-center">Login</h5>
            <form method="POST" action="login_register.php">
                <div class="form-group">
                    <label for="loginEmail">Email</label>
                    <input type="email" name="loginEmail" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="loginPassword">Password</label>
                    <input type="password" name="loginPassword" class="form-control" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="loginBtn">Login</button>
            </form>
            <?php if($user->login_result === true): ?>
            <?php header("Location: index.php"); ?>
<?php elseif ($user->login_result === false): ?>
    <div class="alert alert-danger">Pogrešan email ili lozinka!</div>
<?php endif; ?>
        </div>

        <!-- Register Section -->
        <div class="col-md-6">
            <h5 class="text-center">Register</h5>
            <form method="POST" action="login_register.php">
                <div class="form-group">
                    <label for="registerName">Name</label>
                    <input type="text" name="name" class="form-control" id="registerName" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="registerEmail">Email</label>
                    <input type="email" name="email" class="form-control" id="registerEmail" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="registerPassword">Password</label>
                    <input type="password" name="password" class="form-control" id="registerPassword" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-success btn-block" name="registerBtn">Register</button>
            </form>
            <?php if($user->register_result):   ?>
                <div class="alert alert-success">Uspesna registracija. Ulogujte se!</div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php require_once 'partials/bottom.php'; ?>
