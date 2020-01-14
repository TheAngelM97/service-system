<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Service system</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <?php
                if (isset($_SESSION['user'])) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="add-category.php">Add category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="my-services.php">My services</a>
                </li>
        <?php } ?>
            </ul>
            <ul class="navbar-nav my-2 my-lg-0">
            <?php
            if (isset($_SESSION['user'])) { ?>
                <li class="nav-item">
                    <a href="auth/logout.php">Logout</a>
                </li>
    <?php   }  else { ?>
                <li class="nav-item">
                    <a href="login-form.php">Login</a>
                </li>
     <?php  } ?>
            </ul>
        </div>
    </nav>
</header>