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
                            <th>Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data["categories"] as $row) : ?>
                            <tr>
                                <td><?php echo $row["categoryName"]; ?></td>
                                <td>
                                    <a href="<?php echo SITE_HOME . "categories/edit/" . $row["id"]; ?>" class="button button-secondary">
                                        Edit
                                    </a>
                                    <form action="<?php echo SITE_HOME . "categories/delete"; ?>" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $row["id"] ?>" />
                                        <input type="submit" class="button button-secondary" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </main>
</div>



<?php include VIEW_PATH . "inc/footer.php"; ?>