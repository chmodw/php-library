<?php include VIEW_PATH . "inc/header.php"; ?>

<div class="container">
    <div id="login-form-container">
        <div id="login-form-header">
            <h1>Library Management System</h1>
        </div>
        <form id="login-form">
            <div class="row">
                <div class="five columns">
                    <label for="Username">Username</label>
                    <input class="u-full-width" type="text" placeholder="Username" id="Username">
                </div>
                <div class="five columns">
                    <label for="Username">Password</label>
                    <input class="u-full-width" type="password" placeholder="Password" id="Password">
                </div>
                <div class="two columns">
                    <label for="submit">&nbsp;</label>
                    <input class="button-primary" type="submit" value="Login" name="submit" id="submit">
                </div>
            </div>
            <?php
            if (isset($data["loginError"])) : ?>
                <p class="warning"><?php echo $data["loginError"] ?? ""; ?></p>
            <?php endif; ?>
        </form>
    </div>
</div>

<?php include VIEW_PATH . "inc/footer.php"; ?>