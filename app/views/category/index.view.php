<?php include VIEW_PATH . "inc/header.php"; ?>

<div class="container">
    <?php include VIEW_PATH . "inc/nav.php"; ?>
</div>
<div class="container">
    <main id="main">
        <div class="row">
            <div class="three columns">
                <?php include "category.sidebar.view.php"; ?>
            </div>
            <div class="nine columns">
                <h1 class="dash-title">Book Categories</h1>

                <table class="u-full-width">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Fiction</td>
                            <td>Edit Delete</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </main>
</div>



<?php include VIEW_PATH . "inc/footer.php"; ?>