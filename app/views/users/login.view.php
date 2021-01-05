<?php require VIEW_PATH . "parts/header.php"; ?>
<div class="container">
    <div class="jumbotron vh-100">
        <h1 class="display-3">Hello Reader!</h1>
        <p class="lead">Welcome to the Library Management System</p>
        <hr class="my-4">
        <div class="alert alert-dismissible alert-warning">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4 class="alert-heading">Warning!</h4>
            <p class="mb-0">Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="card text-white bg-primary">
                    <div class="card-body">
                        <h4 class="card-title login-card-title">Please enter Login details.</h4>
                        <form action="<?php echo SITE_HOME . "users/login"; ?>" method="POST">
                            <div class="form-group">
                                <label for="inputEmailLogin">Email address:</label>
                                <input pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" type="email" class="form-control" id="inputEmailLogin" aria-describedby="emailHelp" name="email" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label for="inputPasswordLogin">Password</label>
                                <input type="password" class="form-control" id="inputPasswordLogin" placeholder="Password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-secondary float-right">Login</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body user-register-card">
                        <h4 class="card-title login-card-title">Register Here.</h4>
                        <form action="<?php echo SITE_HOME . "users/userRegister"; ?>" method="POST">
                            <div class="form-group">
                                <label for="inputUsername">Username:</label>
                                <input type="text" class="form-control" id="inputUsername" aria-describedby="usernameHelp" name="username" placeholder="Enter a username" required>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email address:</label>
                                <input type="email" pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" class="form-control" id="inputEmail" aria-describedby="emailHelp" name="email" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label for="inputPhone">Phone:</label>
                                <input type="number" class="form-control" id="inputPhone" aria-describedby="phoneHelp" name="phone" placeholder="Phone number" required>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Password</label>
                                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-secondary float-right">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require VIEW_PATH . "parts/footer.php"; ?>