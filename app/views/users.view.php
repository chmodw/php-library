<?php include VIEW_PATH . "inc/header.php"; ?>

<div class="container">
    <?php include VIEW_PATH . "inc/nav.php"; ?>
</div>
<div class="container">
    <main id="main">
        <div class="row">
            <div class="three columns">
                <div id="search-form">
                    <form id="search-form" method="POST" action="<?php echo SITE_HOME; ?>users/find">
                        <input class="full-width" type="text" placeholder="Username" id="username" required>
                        <input class="button-primary" type="submit" value="Search">
                    </form>
                </div>
            </div>
            <div class="nine columns">
                <h1 class="dash-title">Registered Users</h1>
            </div>
        </div>
    </main>
</div>



<?php include VIEW_PATH . "inc/footer.php"; ?>