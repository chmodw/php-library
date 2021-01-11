<?php include VIEW_PATH . "inc/header.php"; ?>

<div class="container">
    <?php include VIEW_PATH . "inc/nav.php"; ?>
</div>
<div class="container">
    <main id="main">
        <div class="row">
            <div class="three columns">
                <?php include "book.sidebar.view.php"; ?>
            </div>
            <div class="nine columns">
                <h1 class="dash-title">Add New Book</h1>

                name
                categoryId
                ISBN
                authors

                <?php echo isset($data["categories"]) ? "Yes" : "No"; ?>

                <form method="POST" action="">
                    <div class="row">
                        <div class="twelve columns">
                            <label for="fullName">Full Name</label>
                            <input class="u-full-width" type="text" placeholder="User's Full Name" id="fullName" required minlength="6">
                        </div>
                    </div>
                    <div class="row">
                        <div class="six columns">
                            <label for="username">Username</label>
                            <input class="u-full-width" type="text" placeholder="Unique Username" id="username" required minlength="6">
                        </div>
                        <div class="six columns">
                            <label for="password">Password</label>
                            <input class="u-full-width" type="password" placeholder="Password" id="password" required minlength="8">
                        </div>
                    </div>
                    <div class="row">
                        <div class="six columns">
                            <label for="email">Email</label>
                            <input type="email" class="u-full-width" placeholder="Email Address" id="email" required minlength="8">
                        </div>
                        <div class="six columns">
                            <label for="phone">Phone</label>
                            <input class="u-full-width" type="number" placeholder="Phone Number" id="phone" minlength="9" maxlength="12">
                        </div>
                    </div>
                    <div class="row">
                        <div class="six columns">
                            <label for="role">Account Type</label>
                            <select class="u-full-width" id="role" name="role">
                                <option value="librarian">Student</option>
                                <option value="student">Librarian</option>
                                <option value="professor">Professor</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="authorized" value="true">
                    <input type="hidden" name="dateCreated" value="<?php echo date('Y-m-d H:i:s'); ?>">
                    <input class="button-primary" id="new-user-submit-button" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </main>
</div>



<?php include VIEW_PATH . "inc/footer.php"; ?>