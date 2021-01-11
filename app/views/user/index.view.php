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

                <div class="options-menu">

                </div>

            </div>
            <div class="nine columns">
                <h1 class="dash-title">Registered Users</h1>
                <table class="u-full-width">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Dave Gamache</td>
                            <td>26</td>
                            <td>Male</td>
                            <td>San Francisco</td>
                        </tr>
                        <tr>
                            <td>Dwayne Johnson</td>
                            <td>42</td>
                            <td>Male</td>
                            <td>Hayward</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>



<?php include VIEW_PATH . "inc/footer.php"; ?>