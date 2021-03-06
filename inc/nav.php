<header class="clearHeader">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-transparent">
            <a class="navbar-brand" href="./">
                <img src="./assets/img/logo-white.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto mr-10">
                    <li class="nav-item <?php if($page_name == "about"){echo 'active';} ?>">
                        <a class="nav-link" href="<?php echo "./";  ?>">About</a>
                    </li>
                    <li class="nav-item <?php if($page_name == "darq-labs"){echo 'active';} ?>">
                        <a class="nav-link" href="<?php echo "./darq-labs.php";?> ">Darq.Labs</a>
                    </li>
                    <li class="nav-item <?php if($page_name == "contact-us"){echo 'active';} ?>">
                        <a class="nav-link" href="<?php echo "./contact-us.php";?> ">Contact us</a>
                    </li>
                </ul>
                <a class="btn btn-outline-white my-2 my-sm-0" href="<?php echo "./apply-for-funding.php"; ?>">Apply for funding</a>
                </form>
            </div>
        </nav>
    </header>