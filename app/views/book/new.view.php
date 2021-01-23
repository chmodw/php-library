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
                <?php if (isset($data["categories"])) : ?>
                    <form method="POST" action="">
                        <div class="row">
                            <div class="twelve columns">
                                <label for="name">Book Title</label>
                                <input class="u-full-width" type="text" placeholder="Title" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="twelve columns">
                                <label for="authors">Author(s)</label>
                                <input class="u-full-width has-form-field-comment" type="text" name="authors" placeholder="Name Of the Author(s)" id="fullName" required minlength="6">
                                <p class="form-field-comment">If has more than one author please separate with a comma ","</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="six columns">
                                <label for="category">Category</label>
                                <select class="u-full-width" id="category" name="category">
                                    <?php foreach ($data["categories"] as $category) : ?>
                                        <option value="<?php $category["id"] ?>"><?php echo $category["name"]; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="six columns">
                                <label for="isbn"># ISBN</label>
                                <input class="u-full-width" type="number" placeholder="ISBN" name="isbn" id="isbn">
                            </div>
                        </div>
                        <input type="hidden" name="dateCreated" value="<?php echo date('Y-m-d H:i:s'); ?>">
                        <input class="button-primary" id="new-user-submit-button" type="submit" value="Save">
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </main>
</div>



<?php include VIEW_PATH . "inc/footer.php"; ?>