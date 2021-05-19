<?php require_once('inc/header.php');
$page_name = "contact-us"; ?>
    <title>Darq.Capital - Cryptocurrencies, Blockchain, AI, AR & Quantum Computing</title>
  </head>
  <body>
 <?php require_once('inc/nav.php'); ?>
    <section class="bg-color-0 form-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-sm-10">
                    <h1 class="txt-48 lh-56 color-white fw-300">Contact us</h1>
                    <p class="txt-18 lh-22 color-white fw-300">Please fill the form below and one of our representative(s) will be available to support you.</p>
                    <br>
                    <div class="row">
                        <div class="col-md-12 mx-auto">
                            <form class="contact-form" id="contact-form">
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="firstname" class="color-white txt-16 lh-22">First name *</label>
                                        <input type="text" class="form-control br-unset" id="firstname" name="firstname" placeholder="Enter your full name"  required="required" data-validation-required-message="Please enter your first name." />
                                        <p class="text-danger help-block"></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="lastname" class="color-white txt-16 lh-22">Last name *</label>
                                        <input type="text" class="form-control br-unset" id="lastname" name="lastname" placeholder="Enter your last name" required="required" data-validation-required-message="Please enter your last name." />
                                        <p class="text-danger help-block"></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="email" class="color-white txt-16 lh-22">Email Address *</label>
                                        <input type="email" class="form-control br-unset" id="email" name="email" placeholder="Enter your email address" required="required" data-validation-required-message="Please enter your email address.">
                                        <p class="text-danger help-block"></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="subject" class="color-white txt-16 lh-22">Subject *</label>
                                        <input type="text" class="form-control br-unset" id="subject" name="subject" placeholder="Enter the subject" required="required" data-validation-required-message="Please enter your subject.">
                                        <p class="text-danger help-block"></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="message" class="color-white txt-16 lh-22">Message *</label>
                                        <textarea class="form-control br-unset" id="message" name="message" placeholder="Enter your message" rows="5" required="required" data-validation-required-message="Please enter your message."></textarea>
                                        <p class="text-danger help-block"></p>
                                    </div>
                                </div>
                                <button type="submit" class="btn bg-color-1 color-black fw-500 txt-18 lh-22 float-left br-unset">Submit</button>
                                <div id="success"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="txt-24"><b>Press Enquiries</b></p>
                    <p>Members of the press can email us at: <a href="mailto:press@darq.capital" class="color-black fw-600"><u>press@darq.capital</u></a></p>
                    <br>
                    <p class="txt-24"><b>Data Providers</b></p>
                    <p>More data we have, the better decisions we make. If you have any interesting datasets, that we should consider, 
                        please send us an email at : <a href="mailto:data@darq.capital" class="color-black fw-600"><u>data@darq.capital</u></a></p>
                    <br>
                    <p class="txt-24"><b>Other Enquiries</b></p>
                    <p>For any other enquiries, send us an email at : <a href="mailto:enquiry@darq.capital" class="color-black fw-600"><u>enquiry@darq.capital</u></a></p>
                    
                </div>
            </div>
        </div>
    </section>
    <?php require_once('inc/footer.php'); ?>