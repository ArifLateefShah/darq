<footer class="z-1">
        <div class="container-darq xs-txt-center">
            <div class="row">
                <div class="col-md-4 xs-mb-10">
                    <a class="navbar-brand footer-logo" href="./">
                        <img src="./assets/img/darq.png">
                    </a>
                    <br>
                    <p class="txt-14 lh-17 color-1 p-10-0">Whatever it takes to help you grow</p>
                    <p class="txt-14 lh-17 color-white p-10-0 text-uppercase">© 2021 Darq Capital. All Rights Reserved</p>
                </div>
                <div class="col-md-4 xs-mb-10">
                    <ul class="footer-links list-group d-flex flex-row flex-wrap">
                        <li class="list-group-item w-50 xs-w-100 list-group-item-action"><a href="<?php echo "./"; ?>">About</a></li>
                        <li class="list-group-item w-50 xs-w-100 list-group-item-action"><a href="<?php echo "./brand-assets.php"; ?>">Brand Assets</a></li>
                        <li class="list-group-item w-50 xs-w-100 list-group-item-action"><a href="<?php echo "./darq-labs.php"; ?>">Darq.Labs</a></li>
                        <li class="list-group-item w-50 xs-w-100 list-group-item-action"><a href="<?php echo "./contact-us.php"; ?>">Contact us</a></li>
                        <li class="list-group-item w-50 xs-w-100 list-group-item-action"><a href="<?php echo "./apply-for-funding.php"; ?>">Apply for funding</a></li>
                        <li class="list-group-item w-50 xs-w-100 list-group-item-action"><a href="<?php echo "./disclaimer.php"; ?>">Disclaimer</a></li>
                    </ul>
                </div>
                <div class="col-md-4 xs-mb-10">
                    <p class="txt-16 lh-22 color-white fw-400">Subscribe to our Newsletter</p>
                    <form class="contact-form" id="newsletter-form">
                        <div class="input-group mb-3 col-md-10 subscribe-form p-0">
                            <input type="email" name="newsletter-email" class="form-control" placeholder="Enter your email address" required="required" aria-label="Enter your email address" aria-describedby="button-addon2">
                            <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" id="newsletter-button"><span></span></button>
                            
                            </div>
                            
                        </div>
                        <div id="newsletter-success"></div>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <?php if($page_name == "about"){ ?>
    <script src="./assets/js/particles.js"></script>
    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/stats.js"></script>
    <?php } ?>
    <script>
//   var count_particles, stats, update;
//   stats = new Stats;
//   stats.setMode(0);
//   stats.domElement.style.position = 'absolute';
//   stats.domElement.style.left = '0px';
//   stats.domElement.style.top = '0px';
//   document.body.appendChild(stats.domElement);
//   count_particles = document.querySelector('.js-count-particles');
//   update = function() {
//     stats.begin();
//     stats.end();
//     if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
//       count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
//     }
//     requestAnimationFrame(update);
//   };
//   requestAnimationFrame(update);


</script>
    <script src="./assets/js/custom.js" ></script>
</body>
</html>
