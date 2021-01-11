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
                <h1 class="dash-title">Create New Category</h1>
                <form method="POST" action="">
                    <div class="row">
                        <div class="twelve columns">
                            <label for="name">Category Name</label>
                            <input class="u-full-width" type="text" placeholder="Name" id="name" required>
                        </div>
                    </div>
                    <input type="hidden" name="dateCreated" value="<?php echo date('Y-m-d H:i:s'); ?>">
                    <input class="button-primary" id="new-user-submit-button" type="submit" value="Save">
                </form>
            </div>
        </div>
    </main>
</div>



<?php include VIEW_PATH . "inc/footer.php"; ?>