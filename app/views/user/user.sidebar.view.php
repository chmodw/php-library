<div class="sidebar">
    <div id="search-form">
        <form id="search-form" method="POST" action="<?php echo SITE_HOME; ?>users/find">
            <input class="full-width" type="text" placeholder="Username" id="username" required>
            <input class="button-primary" type="submit" value="Search">
        </form>
    </div>

    <div class="options-menu">
        <a class="button" href="<?php echo SITE_HOME . "users/new"; ?>">New User</a>
    </div>
</div>