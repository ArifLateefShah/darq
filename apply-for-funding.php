<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Darq.Capital - Cryptocurrencies, Blockchain, AI, AR & Quantum Computing</title>
        <meta name="description" content="">
        <link rel="canonical" href="/">
        <link rel="icon" href="./favicon.ico">
        <!-- Bootstrap core CSS -->
        <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./assets/css/intlTelInput.css">
        <link href="./assets/css/style.css" rel="stylesheet">
        <style>
            header {
            width: 100%;
            height: 70px;
            position: fixed;
            z-index: 5;
            background: rgba(0,0,0,.7);
            }
            
        </style>
    </head>
    <body>
        <?php require_once('inc/nav.php'); ?>
        <section class="bg-color-0 multistep-form-sec">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-10">
                        <div class="multi-step-form">
                            <form action="#" id="multi-step-form" method="post">
                                <fieldset aria-label="Step One" id="step-1">
                                    <legend class="text-center color-white txt-48 lh-56 fw-300">Apply for funding</legend>
                                    <p class="text-center color-h-white txt-16 lh-22 fw-400">Darq.capital is excited to fund promising startups and work with mission-driven
                                    entrepreneurs trying to make a difference. </p>
                                    <p class="text-center color-h-white txt-16 lh-22 fw-400">To apply for funding support, please fill out the short questionnaire below.</p>
                                    <p class="margin-auto text-center">
                                        <button class="btn bg-color-1 btn-next fw-600 txt-18 lh-22 br-none" type="button" aria-controls="step-2">Get started</button>
                                    </p>
                                    <p class="txt-12 lh-16 text-center color-h-white">Takes around 2 mins</p>
                                </fieldset>
                                <fieldset aria-label="Step Two - Your Email Address" id="step-2">
                                    <legend class="text-left color-white txt-36 lh-45 fw-300">1. Your Email Address <span class="txt-16 txt-al-ct mandatory">*</span></legend>
                                    <p>
                                        <input class="form-control" type="email" placeholder="Enter your email address" name="email-address" id="email-address" required>
                                    </p>
                                    <p>
                                        <!-- <button class="btn btn-default btn-prev" type="button" aria-controls="step-1">Previous</button> -->
                                        <button class="btn bg-color-1 btn-next fw-600 txt-18 lh-22 br-none" type="button" aria-controls="step-3">OK</button>
                                    </p>
                                    <div class="page-no">
                                        <p class="txt-14 lh-22 color-h-white">0 of 12 answered </p>
                                        <div class="next-prev-box">
                                            <button class="prev-link btn-prev" type="button"  aria-controls="step-1">
                                                <img src="./assets/img/prev.png" alt="Previous Link">
                                            </button><button class="next-link btn-next" type="button" aria-controls="step-3">
                                                <img src="./assets/img/next.png" alt="Previous Link">
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset role="radiogroup" aria-label="Step Three - Your Real Name *" id="step-3">
                                    <legend class="text-left color-white txt-36 lh-45 fw-300">2. Give us your name <span class="txt-16 txt-al-ct mandatory">*</span></legend>
                                    <p>
                                        <input class="form-control" type="text" placeholder="Enter your real name" name="real-name" id="real-name" required>
                                    </p>
                                    <p>
                                        <!-- <button class="btn btn-default btn-prev" type="button" aria-controls="step-1">Previous</button> -->
                                        <button class="btn bg-color-1 btn-next fw-600 txt-18 lh-22 br-none" type="button" aria-controls="step-4">OK</button>
                                    </p>
                                    <div class="page-no">
                                        <p class="txt-14 lh-22 color-h-white">1 of 12 answered </p>
                                        <div class="next-prev-box">
                                            <button class="prev-link btn-prev" type="button"  aria-controls="step-2">
                                                <img src="./assets/img/prev.png" alt="Previous Link">
                                            </button><button class="next-link btn-next" type="button" aria-controls="step-4">
                                                <img src="./assets/img/next.png" alt="Previous Link">
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset aria-label="Step Four - Company Name" id="step-4">
                                    <legend class="text-left color-white txt-36 lh-45 fw-300">3. Company Name <span class="txt-16 txt-al-ct mandatory">*</span></legend>
                                    <p>
                                        <input class="form-control" type="text" placeholder="Enter your company name" name="company-name" id="company-name" required>
                                    </p>
                                    <p>
                                        <!-- <button class="btn btn-default btn-prev" type="button" aria-controls="step-1">Previous</button> -->
                                        <button class="btn bg-color-1 btn-next fw-600 txt-18 lh-22 br-none" type="button" aria-controls="step-5">OK</button>
                                    </p>
                                    <div class="page-no">
                                        <p class="txt-14 lh-22 color-h-white">2 of 12 answered </p>
                                        <div class="next-prev-box">
                                            <button class="prev-link btn-prev" type="button"  aria-controls="step-3">
                                                <img src="./assets/img/prev.png" alt="Previous Link">
                                            </button><button class="next-link btn-next" type="button" aria-controls="step-5">
                                                <img src="./assets/img/next.png" alt="Previous Link">
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset role="radiogroup" aria-label="Step Five - Company URL" aria-describedby="co-borrower-error"
                                    id="step-5">
                                    <legend class="text-left color-white txt-36 lh-45 fw-300">4. Company URL <span class="txt-16 txt-al-ct mandatory">*</span></legend>
                                    <p>
                                        <input class="form-control" type="url" value="https://" placeholder="Enter your company URL (For e.g. https://www.example.com)" name="company-url" id="company-url" required onfocus="this.setSelectionRange(this.value.length, this.value.length);">
                                    </p>
                                    <p>
                                        <!-- <button class="btn btn-default btn-prev" type="button" aria-controls="step-1">Previous</button> -->
                                        <button class="btn bg-color-1 btn-next fw-600 txt-18 lh-22 br-none" type="button" aria-controls="step-6">OK</button>
                                    </p>
                                    <div class="page-no">
                                        <p class="txt-14 lh-22 color-h-white">3 of 12 answered </p>
                                        <div class="next-prev-box">
                                            <button class="prev-link btn-prev" type="button"  aria-controls="step-4">
                                                <img src="./assets/img/prev.png" alt="Previous Link">
                                            </button><button class="next-link btn-next" type="button" aria-controls="step-6">
                                                <img src="./assets/img/next.png" alt="Previous Link">
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset role="radiogroup" aria-label="Step Six - Contact Number" aria-describedby="co-borrower-error"
                                    id="step-6">
                                    <legend class="text-left color-white txt-36 lh-45 fw-300">5. Contact Number <span class="txt-16 txt-al-ct mandatory">*</span></legend>
                                    <p>
                                        <input class="form-control" type="text" placeholder="Enter your Contact Number" name="contact-number" id="contact-number" required data-inputmask="'alias': 'phonebe'">
                                    </p>
                                    <p>
                                        <!-- <button class="btn btn-default btn-prev" type="button" aria-controls="step-1">Previous</button> -->
                                        <button class="btn bg-color-1 btn-next fw-600 txt-18 lh-22 br-none" type="button" aria-controls="step-7">OK</button>
                                    </p>
                                    <div class="page-no">
                                        <p class="txt-14 lh-22 color-h-white">4 of 12 answered </p>
                                        <div class="next-prev-box">
                                            <button class="prev-link btn-prev" type="button"  aria-controls="step-5">
                                                <img src="./assets/img/prev.png" alt="Previous Link">
                                            </button><button class="next-link btn-next" type="button" aria-controls="step-7">
                                                <img src="./assets/img/next.png" alt="Previous Link">
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset role="radiogroup" aria-label="Step Seven - Linkedin Profile of Founders" aria-describedby="co-borrower-error"
                                    id="step-7">
                                    <legend class="text-left color-white txt-36 lh-45 fw-300">6. LinkedIn Profile of Founders <span class="txt-16 txt-al-ct mandatory">*</span></legend>
                                    <p>
                                        <input class="form-control" type="url" value="https://" placeholder="Enter your LinkedIn Profile of Founders (For e.g. https://www.example.com)" name="linedin-profile[0]" id="linedin-profile[0]" required onfocus="this.setSelectionRange(this.value.length, this.value.length);">
                                    </p>
                                    <p class="link-list"></p>
                                    <p>
                                        <button class="btn btn-default add-link" type="button" aria-controls="step-1">Add More</button>
                                        <button class="btn bg-color-1 btn-next fw-600 txt-18 lh-22 br-none" type="button" aria-controls="step-8">OK</button>
                                    </p>
                                    <div class="page-no">
                                        <p class="txt-14 lh-22 color-h-white">5 of 12 answered </p>
                                        <div class="next-prev-box">
                                            <button class="prev-link btn-prev" type="button"  aria-controls="step-6">
                                                <img src="./assets/img/prev.png" alt="Previous Link">
                                            </button><button class="next-link btn-next" type="button" aria-controls="step-8">
                                                <img src="./assets/img/next.png" alt="Previous Link">
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset role="radiogroup" aria-label="Step Eight - Link to your deck, materials, or supplemental info" aria-describedby="co-borrower-error"
                                    id="step-8">
                                    <legend class="text-left color-white txt-36 lh-45 fw-300">7. Link to your deck, materials, or supplemental info <span class="txt-16 txt-al-ct mandatory">*</span></legend>
                                    <p>
                                        <input class="form-control" type="url" value="https://" placeholder="Link to your deck, materials, or supplemental info (For e.g. https://www.example.com)" name="supplemental-info[0]" id="supplemental-info[0]" required onfocus="this.setSelectionRange(this.value.length, this.value.length);">
                                    </p>
                                    <p class="supplemental-info-list"></p>
                                    <p>
                                        <button class="btn btn-default add-supplemental-info" type="button">Add More</button>
                                        <!-- <button class="btn btn-default btn-prev" type="button" aria-controls="step-1">Previous</button> -->
                                        <button class="btn bg-color-1 btn-next fw-600 txt-18 lh-22 br-none" type="button" aria-controls="step-9">OK</button>
                                    </p>
                                    <div class="page-no">
                                        <p class="txt-14 lh-22 color-h-white">6 of 12 answered </p>
                                        <div class="next-prev-box">
                                            <button class="prev-link btn-prev" type="button"  aria-controls="step-7">
                                                <img src="./assets/img/prev.png" alt="Previous Link">
                                            </button><button class="next-link btn-next" type="button" aria-controls="step-9">
                                                <img src="./assets/img/next.png" alt="Previous Link">
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset role="radiogroup" aria-label="Step Nine - Short description of your product" aria-describedby="co-borrower-error"
                                    id="step-9">
                                    <legend class="text-left color-white txt-36 lh-45 fw-300">8. Short description of your product <br><span class="txt-16 txt-al-ct">(in less than 200 characters)</span></legend>
                                    <p>
                                        <textarea class="form-control" maxlength="200" placeholder="Short description of your product" rows="4" name="short-description" id="short-description"></textarea>
                                    </p>
                                    <p>
                                        <!-- <button class="btn btn-default btn-prev" type="button" aria-controls="step-1">Previous</button> -->
                                        <button class="btn bg-color-1 btn-next fw-600 txt-18 lh-22 br-none" type="button" aria-controls="step-10">OK</button>
                                    </p>
                                    <div class="page-no">
                                        <p class="txt-14 lh-22 color-h-white">7 of 12 answered </p>
                                        <div class="next-prev-box">
                                            <button class="prev-link btn-prev" type="button"  aria-controls="step-8">
                                                <img src="./assets/img/prev.png" alt="Previous Link">
                                            </button><button class="next-link btn-next" type="button" aria-controls="step-10">
                                                <img src="./assets/img/next.png" alt="Previous Link">
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset role="radiogroup" aria-label="Step Ten - Describe the status of your project from the following?" aria-describedby="co-borrower-error"
                                    id="step-10">
                                    <legend class="text-left color-white txt-36 lh-45 fw-300">9. Describe the status of your project from the following? <span class="txt-16 txt-al-ct mandatory">*</span></legend>
                                    <p>
                                        <select class="form-control" id="status-of-your-project" name="status-of-your-project">
                                            <option value="Idea">Idea</option>
                                            <option value="Alpha">Alpha</option>
                                            <option value="Beta">Beta</option>
                                            <option value="Launched">Launched</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </p>
                                    <p>
                                        <!-- <button class="btn btn-default btn-prev" type="button" aria-controls="step-1">Previous</button> -->
                                        <button class="btn bg-color-1 btn-next fw-600 txt-18 lh-22 br-none" type="button" aria-controls="step-11">OK</button>
                                    </p>
                                    <div class="page-no">
                                        <p class="txt-14 lh-22 color-h-white">8 of 12 answered </p>
                                        <div class="next-prev-box">
                                            <button class="prev-link btn-prev" type="button"  aria-controls="step-9">
                                                <img src="./assets/img/prev.png" alt="Previous Link">
                                            </button><button class="next-link btn-next" type="button" aria-controls="step-11">
                                                <img src="./assets/img/next.png" alt="Previous Link">
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset role="radiogroup" aria-label="Step Eleven - Current Funding Requirement?" aria-describedby="co-borrower-error"
                                    id="step-11">
                                    <legend class="text-left color-white txt-36 lh-45 fw-300">10. Current Funding Requirement? <span class="txt-16 txt-al-ct mandatory">*</span></legend>
                                    <small class="color-h-white">(Please mention in USD)</small>
                                    <p>
                                    <input class="form-control" type="number" min="0" placeholder="Current Funding Requirement" name="current-funding-requirement" id="current-funding-requirement" required>
                                    </p>
                                    <p>
                                        <!-- <button class="btn btn-default btn-prev" type="button" aria-controls="step-1">Previous</button> -->
                                        <button class="btn bg-color-1 btn-next fw-600 txt-18 lh-22 br-none" type="button" aria-controls="step-12">OK</button>
                                    </p>
                                    <div class="page-no">
                                        <p class="txt-14 lh-22 color-h-white">9 of 12 answered </p>
                                        <div class="next-prev-box">
                                            <button class="prev-link btn-prev" type="button"  aria-controls="step-10">
                                                <img src="./assets/img/prev.png" alt="Previous Link">
                                            </button><button class="next-link btn-next" type="button" aria-controls="step-12">
                                                <img src="./assets/img/next.png" alt="Previous Link">
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset role="radiogroup" aria-label="Step Twelve - Pls mention, if any funding commitments already received." aria-describedby="co-borrower-error"
                                    id="step-12">
                                    <legend class="text-left color-white txt-36 lh-45 fw-300">11. Please mention if you have received any funding commitments already. </legend>
                                    <p>
                                        <input class="form-control" type="text" placeholder="Pls mention, if any funding commitments already received." name="funding-commitments" id="funding-commitments">
                                    </p>
                                    <p>
                                        <!-- <button class="btn btn-default btn-prev" type="button" aria-controls="step-1">Previous</button> -->
                                        <button class="btn bg-color-1 btn-next fw-600 txt-18 lh-22 br-none" type="button" aria-controls="step-13">OK</button>
                                    </p>
                                    <div class="page-no">
                                        <p class="txt-14 lh-22 color-h-white">10 of 12 answered </p>
                                        <div class="next-prev-box">
                                            <button class="prev-link btn-prev" type="button"  aria-controls="step-11">
                                                <img src="./assets/img/prev.png" alt="Previous Link">
                                            </button><button class="next-link btn-next" type="button" aria-controls="step-13">
                                                <img src="./assets/img/next.png" alt="Previous Link">
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset role="radiogroup" aria-label="Step Twelve - Pls mention, if any funding commitments already received." aria-describedby="co-borrower-error"
                                    id="step-13">
                                    <legend class="text-left color-white txt-36 lh-45 fw-300">12. Any questions or specific needs?</legend>
                                    <p>
                                        <textarea class="form-control" placeholder="Any questions or specific needs?" rows="4" name="questions" id="questions"></textarea>
                                    </p>
                                    <p>
                                        <!-- <button class="btn btn-default btn-prev" type="button" aria-controls="step-1">Previous</button> -->
                                        <!-- <button class="btn bg-color-1 btn-next fw-500 txt-18 lh-22 br-none" type="button" aria-controls="step-14">Ok</button> -->
                                        <button class="btn btn-success" type="submit">SUBMIT</button> 
                                    </p>
                                    <div class="page-no">
                                        <p class="txt-14 lh-22 color-h-white">11 of 12 answered </p>
                                        <div class="next-prev-box">
                                            <button class="prev-link btn-prev" type="button"  aria-controls="step-12">
                                                <img src="./assets/img/prev.png" alt="Previous Link">
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>
                                <!-- <fieldset aria-label="Step Five" id="step-6">
                                    <legend>Step Four</legend>
                                    <p>
                                        <label for="message"></label>
                                        <textarea class="form-control" rows="3" name="message" id="message" required></textarea>
                                    </p>
                                    <p>
                                        <button class="btn btn-success" type="submit">Submit</button> 
                                        <button class="btn btn-default btn-edit" type="button">Edit</button> 
                                        <button class="btn btn-danger" type="reset">Start Over</button>
                                    </p>
                                </fieldset> -->
                            </form>
                            <div id="questions-success"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
        <script src="./assets/js/bootstrap.bundle.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
        <script type='text/javascript' src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script> 
        <script src="./assets/js/intlTelInput.js"></script>
        <script type="text/javascript">

            
        var contact_number = document.querySelector("#contact-number");
        var iti = window.intlTelInput(contact_number  , {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            preferredCountries: ['in'],
            separateDialCode: true,
            utilsScript: "./assets/js/utils.js",
            });
            /**
             * @name Multi-step form - WIP
             * @description Prototype for basic multi-step form
             * @deps jQuery, jQuery Validate
             */
            var base_url = window.location.origin;
            var app = {
            
            init: function(){
                this.cacheDOM();
                this.setupAria();
                this.nextButton();
                this.prevButton();
                this.validateForm();
                this.startOver();
                this.editForm();
                this.killEnterKey();
                this.handleStepClicks();
            },
            
            cacheDOM: function(){
                if($(".multi-step-form").length === 0){ return; }
                this.$formParent = $(".multi-step-form");
                this.$form = this.$formParent.find("form");
                this.$formStepParents = this.$form.find("fieldset"),
            
                this.$nextButton = this.$form.find(".btn-next");
                this.$input = this.$form.find("input");
                this.$prevButton = this.$form.find(".btn-prev");
                this.$editButton = this.$form.find(".btn-edit");
                this.$resetButton = this.$form.find("[type='reset']");
            
                this.$stepsParent = $(".steps");
                this.$steps = this.$stepsParent.find("button");
            },
            
            htmlClasses: {
                activeClass: "active",
                hiddenClass: "hidden",
                visibleClass: "visible",
                editFormClass: "edit-form",
                animatedVisibleClass: "animated fadeIn",
                animatedHiddenClass: "animated fadeOut",
                animatingClass: "animating"
            },
            
            setupAria: function(){
            
                // set first parent to visible
                this.$formStepParents.eq(0).attr("aria-hidden",false);
            
                // set all other parents to hidden
                this.$formStepParents.not(":first").attr("aria-hidden",true);
            
                // handle aria-expanded on next/prev buttons
                app.handleAriaExpanded();
            
            },
            
            nextButton: function(){
            
                this.$nextButton.on("click", function(e){
            
                    e.preventDefault();
            
                    // grab current step and next step parent
                    var $this = $(this),
                        currentParent = $this.closest("fieldset"),
                        nextParent = currentParent.next();
        
                        // if the form is valid hide current step
                        // trigger next step
                        if(app.checkForValidForm()){
                            currentParent.removeClass(app.htmlClasses.visibleClass);
                            app.showNextStep(currentParent, nextParent);
                        }
            
                });

                this.$input.on("keyup", function(e){
                    if (e.key === 'Enter' || e.keyCode === 13) {
                        e.preventDefault();
                
                        // grab current step and next step parent
                        var $this = $(this),
                            currentParent = $this.closest("fieldset"),
                            nextParent = currentParent.next();

                            // if the form is valid hide current step
                            // trigger next step
                            if(app.checkForValidForm()){
                                currentParent.removeClass(app.htmlClasses.visibleClass);
                                app.showNextStep(currentParent, nextParent);
                            }
                    }
            
                });
            },
            
            prevButton: function(){
            
                this.$prevButton.on("click", function(e){
            
                    e.preventDefault();
            
                    // grab current step parent and previous parent
                    var $this = $(this),
                        currentParent = $(this).closest("fieldset"),
                        prevParent = currentParent.prev();
        
                        // hide current step and show previous step
                        // no need to validate form here
                        currentParent.removeClass(app.htmlClasses.visibleClass);
                        app.showPrevStep(currentParent, prevParent);
            
                });
            },
            
            showNextStep: function(currentParent,nextParent){
            
                // hide previous parent
                currentParent
                    .addClass(app.htmlClasses.hiddenClass)
                    .attr("aria-hidden",true);
            
                // show next parent
                nextParent
                    .removeClass(app.htmlClasses.hiddenClass)
                    .addClass(app.htmlClasses.visibleClass)
                    .attr("aria-hidden",false);
            
                // focus first input on next parent
                // nextParent.focus();
                
                // browning: focus first input on next parent
                nextParent.find(":input").first().focus();
            
                // activate appropriate step
                app.handleState(nextParent.index());
            
                // handle aria-expanded on next/prev buttons
                app.handleAriaExpanded();
            
            },
            
            showPrevStep: function(currentParent,prevParent){
            
                // hide previous parent
                currentParent
                    .addClass(app.htmlClasses.hiddenClass)
                    .attr("aria-hidden",true);
            
                // show next parent
                prevParent
                    .removeClass(app.htmlClasses.hiddenClass)
                    .addClass(app.htmlClasses.visibleClass)
                    .attr("aria-hidden",false);
            
                // send focus to first input on next parent
                // prevParent.focus();
                
                // browning: send focus to first input on next parent
                prevParent.find(":input").first().focus();
            
                // activate appropriate step
                app.handleState(prevParent.index());
            
                // handle aria-expanded on next/prev buttons
                app.handleAriaExpanded();
            
            },
            
            handleAriaExpanded: function(){
            
                /*
                    Loop thru each next/prev button
                    Check to see if the parent it conrols is visible
                    Handle aria-expanded on buttons
                */
                $.each(this.$nextButton, function(idx,item){
                    var controls = $(item).attr("aria-controls");
                    if($("#"+controls).attr("aria-hidden") == "true"){
                        $(item).attr("aria-expanded",false);
                    }else{
                        $(item).attr("aria-expanded",true);
                    }
                });
            
                $.each(this.$prevButton, function(idx,item){
                    var controls = $(item).attr("aria-controls");
                    if($("#"+controls).attr("aria-hidden") == "true"){
                        $(item).attr("aria-expanded",false);
                    }else{
                        $(item).attr("aria-expanded",true);
                    }
                });
            
            },
            
            validateForm: function(){
                // jquery validate form validation
                this.$form.validate({
                    ignore: ":hidden", // any children of hidden desc are ignored
                    errorElement: "span", // wrap error elements in span not label
                    errorClass: "error-text", // Sarah added error class to span
                    errorPlacement: function(error, element) {  // Sarah added to insert before to work better with radio buttions
                        if(element.attr("type") == "radio") {
                            error.insertBefore(element);
                        }
                        else
                            {
                                error.insertAfter(element);
                            }
                    },
                    invalidHandler: function(event, validator){ // add aria-invalid to el with error
                        $.each(validator.errorList, function(idx,item){
                            if(idx === 0){
                                $(item.element).focus(); // send focus to first el with error
                            }
                            $(item.element).attr({"aria-invalid": true, "aria-required": true}); // add invalid aria sarah added & aria-required
                        })
                    },
                    submitHandler: function(form) {
                        // alert("form submitted!");
                        // console.log($("#multi-step-form").serialize());
                        var form_data = $("#multi-step-form").serialize();
                        $.ajax({
                            url:base_url+"/php/questions.php",
                            method:"POST",
                            data:form_data,
                            success:function(){
                                $('#questions-success').html("<div><img src='./assets/img/tick.png' class='tick-img'><strong class='d-block color-white txt-48 lh-56 fw-300 text-center margin-auto'>Thank you for applying to Darq.capital.</strong><br><br><p class='color-white txt-20 lh-22 text-center margin-auto'>Your application has been received. We will review your application and get back to you.</p></div>");
                                $('#multi-step-form').hide();
                            },
                            error:function(){
                                $('#questions-success').html("<div class='alert alert-danger'>Something went wrong</div>");
                                $('#questions-form').trigger('reset');
                            },
                            complete:function(){
                                // setTimeout(function(){
                                // $this.prop("disabled", false);
                                // $('#questions-success').html('');
                                // }, 100000);
                            }
                        });
                    // form.submit();
                  }
                });
            },
            
            checkForValidForm: function(){
                if(this.$form.valid()){
                    return true;
                }
            },
            
            startOver: function(){
            
                var $parents = this.$formStepParents,
                        $firstParent = this.$formStepParents.eq(0),
                        $formParent = this.$formParent,
                        $stepsParent = this.$stepsParent;
            
                        this.$resetButton.on("click", function(e){
            
                            // hide all parents - show first
                            $parents
                                .removeClass(app.htmlClasses.visibleClass)
                                .addClass(app.htmlClasses.hiddenClass)
                                .eq(0).removeClass(app.htmlClasses.hiddenClass)
                                .eq(0).addClass(app.htmlClasses.visibleClass);
            
                                // remove edit state if present
                                $formParent.removeClass(app.htmlClasses.editFormClass);
            
                                // manage state - set to first item
                                app.handleState(0);
            
                                // reset stage for initial aria state
                                app.setupAria();
            
                                // send focus to first item
                                setTimeout(function(){
                                    $firstParent.focus();
                                },200);
            
                        }); // click
            
            },
            
            handleState: function(step){
            
                this.$steps.eq(step).prevAll().removeAttr("disabled");
                this.$steps.eq(step).addClass(app.htmlClasses.activeClass);
            
                // restart scenario
                if(step === 0){
                    this.$steps
                        .removeClass(app.htmlClasses.activeClass)
                        .attr("disabled","disabled");
                    this.$steps.eq(0).addClass(app.htmlClasses.activeClass)
                }
            
            },
            
            editForm: function(){
                var $formParent = this.$formParent,
                    $formStepParents = this.$formStepParents,
                    $stepsParent = this.$stepsParent;
        
                    this.$editButton.on("click",function(){
                        $formParent.toggleClass(app.htmlClasses.editFormClass);
                        $formStepParents.attr("aria-hidden",false);
                        $formStepParents.eq(0).find("input").eq(0).focus();
                        app.handleAriaExpanded();
                    });
            },
            
            killEnterKey: function(){
                $(document).on("keypress", ":input:not(textarea,button)", function(event) {
                    return event.keyCode != 13;
                });
            },
            
            handleStepClicks: function(){
            
                var $stepTriggers = this.$steps,
                    $stepParents = this.$formStepParents;
        
                    $stepTriggers.on("click", function(e){
        
                        e.preventDefault();
        
                        var btnClickedIndex = $(this).index();
        
                            // kill active state for items after step trigger
                            $stepTriggers.nextAll()
                                .removeClass(app.htmlClasses.activeClass)
                                .attr("disabled",true);
        
                            // activate button clicked
                            $(this)
                                .addClass(app.htmlClasses.activeClass)
                                .attr("disabled",false)
        
                            // hide all step parents
                            $stepParents
                                .removeClass(app.htmlClasses.visibleClass)
                                .addClass(app.htmlClasses.hiddenClass)
                                .attr("aria-hidden",true);
        
                            // show step that matches index of button
                            $stepParents.eq(btnClickedIndex)
                                .removeClass(app.htmlClasses.hiddenClass)
                                .addClass(app.htmlClasses.visibleClass)
                                .attr("aria-hidden",false)
                                .focus();
        
                    });
            
            }
            
            };
            
            app.init();
            
            $(":input").inputmask();

            $("#contact-number").inputmask({"mask": "9999-999-999"});


            $(document.body).on('click', '.btn-remove-profile-link' ,function(){
				$(this).closest('.profile-input').remove();
			});
			

            $('.add-link').click(function(){

                var index = $('.profile-input').length + 1;

                $('.link-list').append(''+
                        '<div class="input-group profile-input">'+
                            '<span class="input-group-btn">'+
                                '<button class="btn btn-danger btn-remove-profile-link" type="button"><img src="./assets/img/delete.png" alt="Delete" class="delete-icon"></button>'+
                            '</span>'+
                            '<input class="form-control" type="url" value="https://" placeholder="Enter your Linkedin Profile of Founders (For e.g. https://www.example.com)" name="linedin-profile['+index+']" id="linedin-profile['+index+']" required onfocus="this.setSelectionRange(this.value.length, this.value.length);">'+
                        '</div>'
                );

            });

            $('.add-supplemental-info').click(function(){

                var index = $('.supplemental-input').length + 1;

                $('.supplemental-info-list').append(''+
                        '<div class="input-group supplemental-input">'+
                            '<span class="input-group-btn">'+
                                '<button class="btn btn-danger btn-remove-supplemental-info-link" type="button"><img src="./assets/img/delete.png" alt="Delete" class="delete-icon"></button>'+
                            '</span>'+
                            '<input class="form-control" type="url" value="https://" placeholder="Enter your Linkedin Profile of Founders (For e.g. https://www.example.com)" name="supplemental-info['+index+']" id="supplemental-info['+index+']" required onfocus="this.setSelectionRange(this.value.length, this.value.length);">'+
                        '</div>'
                );

            });
            $(document.body).on('click', '.btn-remove-supplemental-info-link' ,function(){
				$(this).closest('.supplemental-input').remove();
			});

            
            
        </script>
    </body>
</html>