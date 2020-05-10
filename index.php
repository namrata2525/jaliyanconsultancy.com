<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jaliyan Consultancy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/5cb0c45c29.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- <script src="js/subscribe_script.js"></script> -->
    <script>
        function check() {
           

            var pass1 = document.getElementById('txt_phone');


            var message = document.getElementById('message');

            var goodColor = "#0C6";
            var badColor = "#FF9B37";

            if (txt_phone.value.length != 10) {

                txt_phone.style.backgroundColor = badColor;
                message.style.color = badColor;
                message.innerHTML = "Invalid Mobile No."
            } else {
                $('#message').removeClass('message');
                message.innerHTML = "";
            }
        }

        function ValidateEmail() {
            var email = document.getElementById("user_email").value;
            var lblError = document.getElementById("lblError");
            lblError.innerHTML = "";
            var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
            if (!expr.test(email)) {
                lblError.innerHTML = "Invalid Email Address.";
            }
        }





        function myFunction_submit() {

            var txt_fname = document.getElementById("txt_fname").value;
            var txt_lname = document.getElementById("txt_lname").value;
            var select_prof = document.getElementById("select_prof").value;
            var txt_phone = document.getElementById("txt_phone").value;

            var user_email = document.getElementById("user_email").value;
            var select_guidance = document.getElementById("select_guidance").value;
            var txt_msg = document.getElementById("txt_msg").value;

            // Returns successful data submission message when the entered information is stored in database.
            var dataString = 'txt_fname1=' + txt_fname + '&txt_lname1=' + txt_lname + '&select_prof1=' + select_prof +
                '&txt_phone1=' + txt_phone + '&user_email1=' + user_email + '&select_guidance1=' + select_guidance + '&txt_msg1=' + txt_msg;
            if (txt_fname == '' || txt_lname == '' || select_prof == '' || txt_phone == '' || user_email == '' || select_guidance == '' || txt_msg == '') {

                alert("All the Fields are Mandatory!");
            } else {
                console.log('The function is hooked up');
                var data = $("form").serialize();
                $.ajax({
                    type: "POST",
                    url: "free_counseling_code.php",
                    data: data,
                    success: function(output) {
                        $('#myModal').modal('show');
                    }
                });

            }
            return false;
        }

        function reloadPage() {
            window.location.reload();
        }
    </script>


</head>

<body>

    <div class="bg-top navbar-light d-flex flex-column-reverse">
        <div class="container py-3">
            <div class="row no-gutters d-flex align-items-center align-items-stretch">
                <div class="col-md-4 d-flex align-items-center py-4">
                    <a class="navbar-brand" href="index.php" style="text-transform: none !important;">Jaliyan <span style="text-transform: none !important; ">Consultancy</span></a>
                </div>
                <div class="col-lg-8 d-block">
                    <div class="row d-flex">
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <div class="icon d-flex justify-content-center align-items-center"><span class="ion-ios-paper-plane"></span></div>
                            <div class="text">
                                <span>Email</span>
                                <span>jaliyanconsultancy@yahoo.com</span>
                            </div>
                        </div>
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <div class="icon d-flex justify-content-center align-items-center"><span class="ion-ios-call"></span></div>
                            <div class="text">
                                <span>Call</span>
                                <span>+918460846579</span>
                            </div>
                        </div>
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <div class="icon d-flex justify-content-center align-items-center"><span class="ion-ios-time"></span></div>
                            <div class="text">
                                <span>Working Hours</span>
                                <span>Mon - Sat 10am - 8pm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-social-menu py-2 bg-light">
            <div class="container">
                <div class="row">
                    <!--<div class="col"> 
                            <p class="social mb-0">
                                    <a href="#"><i class="ion-logo-facebook"></i><span class="sr-only">Facebook</span></a>
                                    <a href="#"><i class="ion-logo-twitter"></i><span class="sr-only">Twitter</span></a>
                                    <a href="#"><i class="ion-logo-googleplus"></i><span class="sr-only">Googleplus</span></a>
                            </p>
                        </div> -->
                    <!--  <div class="col text-right">
                                <a href="#" class="btn-link">Request A Quote</a>
                        </div> -->
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <!--  <form action="#" class="searchform order-lg-last">
              <div class="form-group d-flex">
               <input type="text" class="form-control pl-3" placeholder="Search">
               <button type="submit" id="submit" class="form-control search"><span class="ion-ios-search"></span></button>
             </div> 
           </form> -->
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>

                    <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="updates.php" class="nav-link">Updates</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="contact_us.php" class="nav-link">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url(images/Balance_Sheet.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
                    <div class="col-md-7 ftco-animate mb-md-5">
                        <span class="subheading">Research Says,</span>
                        <h1 class="mb-4">Give Your Accounts in the Right Hands...</h1>
                        <!-- <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image:url(images/calculator.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
                    <div class="col-md-7 ftco-animate mb-md-5">
                        <span class="subheading">As the Tax Pinch everyone's pocket</span>
                        <h1 class="mb-4">We are Fighting To Reduce Your Tax...</h1>
                        <!-- <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image:url(images/tex.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
                    <div class="col-md-7 ftco-animate mb-md-5">
                        <span class="subheading">Don't Worry</span>
                        <h1 class="mb-4">Is the Tax Problem for You, Contact Us... </h1>
                        <!-- <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-consult">
        <div class="container">
            <div class="row d-flex no-gutters align-items-stretch	consult-wrap">
                <div class="col-md-5 wrap-about align-items-stretch d-flex">
                    <div class="ftco-animate bg-primary align-self-stretch px-4 py-5 w-100">
                        <h2 class="heading-white mb-4">Feel Free to Ask</h2>

                        <form class="appointment-form ftco-animate">
                            <div class="form-group">
                                <input type="text" name="txt_fname" id="txt_fname" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" name="txt_lname" id="txt_lname" class="form-control" placeholder="Last Name">
                            </div>

                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>

                                        <select name="select_prof" id="select_prof" class="form-control bg-light">
                                            <option value="" style="background-color: #3e64ff " disabled selected>Select Your Profession:</option>

                                            <option value="Student" style="background-color: #3e64ff ">Student</option>
                                            <option value="Accountant" style="background-color: #3e64ff ">Accountant</option>
                                            <option value="Chartered Accountant" style="background-color: #3e64ff ">Chartered Accountant</option>
                                            <option value="Tax Consultant" style="background-color: #3e64ff ">Tax Consultant</option>
                                            <option value="Customer" style="background-color: #3e64ff ">Customer</option>
                                            <option value="Other" style="background-color: #3e64ff ">Other</option>
                                        </select>

                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <input type="text" name="txt_phone" id="txt_phone" class="form-control" placeholder="Phone" onkeyup="check(); return false;">
                            </div>
                            <span id="message"></span>
                            <div class="form-group">
                                <input type="email" name="user_email" id="user_email" class="form-control" placeholder="Email ID" onkeyup="ValidateEmail();">
                            </div>
                            <span id="lblError" style="color: #FF9B37"></span>
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>

                                        <select required name="select_guidance" id="select_guidance" class="form-control bg-light">
                                            <option value="" style="background-color: #3e64ff " disabled selected>Select Guidance:</option>
                                            <option value="PAN Card & TAN No" style="background-color: #3e64ff ">PAN Card & TAN No</option>
                                            <option value="Income Tax Return Filing" style="background-color: #3e64ff ">Income Tax Return Filing</option>
                                            <option value="TDS Return Filing" style="background-color: #3e64ff ">TDS Return Filing</option>
                                            <option value="GST Registration & Return Filing" style="background-color: #3e64ff ">GST Registration & Return Filing</option>
                                            <option value="Business Registration" style="background-color: #3e64ff ">Business Registration</option>
                                            <option value="Accounting of Business" style="background-color: #3e64ff ">Accounting of Business</option>
                                            <option value="Life Insurance & Retirement Planning" style="background-color: #3e64ff ">Life Insurance & Retirement Planning</option>
                                            <option value="Loans & Advances Support" style="background-color: #3e64ff ">Loans & Advances Support</option>
                                        </select>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea name="txt_msg" id="txt_msg" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                            </div>

                            <div class="form-group">
                                <input name="btn_submit" id="submit" style="text-align: center" onclick="myFunction_submit()" value="Request A Quote" class="btn btn-secondary py-3 px-4">
                            </div>
                        </form>


                    </div>
                </div>
                <div class="col-md-7 wrap-about ftco-animate align-items-stretch d-flex">
                    <div class="bg-white p-5">
                        <h2 class="mb-4">Make it Easy With Us.</h2>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="services">
                                    <div class="icon mt-2 d-flex align-items-center"></div>
                                    <div class="text media-body">
                                        <h3>Business Registration</h3>
                                        <p>In Current Scenario People deal with that business only, which are registered with legal authority.</p>


                                    </div>
                                </div>
                                <div class="services">
                                    <div class="icon mt-2"></div>
                                    <div class="text media-body">
                                        <h3>GST Registration & Return Filing</h3>
                                        <p>Today all the business have to deal with GST in routine work, hence it requires continues watch on it to minimize the legal consequences. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="services">
                                    <div class="icon mt-2"></div>
                                    <div class="text media-body">
                                        <h3>Accounting of Business</h3>
                                        <p>Proper Accounting of Business Transaction is one of the Effective Controlling measure on your money.</p>

                                    </div>
                                </div>
                                <div class="services">
                                    <div class="icon mt-2"></div>
                                    <div class="text media-body">
                                        <h3>Life Insurance & Retirement Planning</h3>
                                        <p>Planning of Self Retirement & Family Security in terms of money is important to secure, in case of death of single earning person.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="services">
                                    <div class="icon mt-2"></div>
                                    <div class="text media-body">
                                        <h3>Income Tax & TDS Return</h3>
                                        <p>Filing of Income Tax Return and taking care of TDS Compliance is must in today’s scenario.</p>



                                    </div>
                                </div>
                                <div class="services">
                                    <div class="icon mt-2"></div>
                                    <div class="text media-body">
                                        <h3>Loans & Advances Support</h3>
                                        <p>As We are associated with Loan Consulting agencies, we are able to help you in getting loans at lowest cost with accurate paperwork in short time.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-0">We Ensure You Best guidance</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about ftco-no-pt ftco-no-pb ftco-counter" id="section-counter">
        <div class="container consult-wrap">
            <div class="row d-flex align-items-stretch">
                <div class="col-md-6 wrap-about align-items-stretch d-flex">
                    <div class="img" style="background-image: url(images/vision_mission.jpg);"></div>
                </div>
                <div class="col-md-6 wrap-about ftco-animate py-md-5 pl-md-5">
                    <div class="heading-section mb-4">
                        <!--                             <span class="subheading">Welcome to jaliyan Consultancy</span>
 -->
                        <h2>Our Vision & Mission</h2>
                    </div>
                    <!--                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
                    <div class="tabulation-2 mt-6">
                        <ul class="nav nav-pills nav-fill d-md-flex d-block">


                            <li class="nav-item">
                                <a class="nav-link active py-2" data-toggle="tab" href="#home1"><span class="ion-ios-home mr-2"></span> Our Mission</a>
                            </li>
                            <li class="nav-item px-lg-2">
                                <a class="nav-link py-2" data-toggle="tab" href="#home2"><span class="ion-ios-person mr-2"></span> Our Vision</a>
                            </li>
                            <!--                                <li class="nav-item">
                                    <a class="nav-link py-2" data-toggle="tab" href="#home3"><span class="ion-ios-mail mr-2"></span> Our Value</a>
                                </li>-->
                        </ul>
                        <div class="tab-content bg-light rounded mt-2">
                            <div class="tab-pane container p-0 active" id="home1">
                                <p>Our mission is to render professional services with the highest standard to clients, upholding the code of conduct and ethics of the profession.</p>
                            </div>

                            <div class="tab-pane container p-0 fade" id="home2">
                                <p>Keeping our mission in mind, Long term relationships with our satisfied clients is our motto.</p>
                            </div>


                            <!--                                <div class="tab-pane container p-0 fade" id="home3">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                </div>-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row no-gutters justify-content-center mb-5">
                <div class="col-md-6 text-center heading-section ftco-animate">
                    <!--                        <span class="subheading">Projects Done</span>-->
                    <h2 class="mb-4">Our Services </h2>
                    <p> We are offering services in various areas as listed below. Short description is given here, for more details you can contact me on details given here.</p>
                    <p></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="project">
                        <div class="img rounded mb-4" style="background-image: url(images/home_page/Final_registration);"></div>
                        <div class="text w-100 text-center">
                            <!--        				<span class="cat">Consulting</span>-->
                            <h3><a href="#">Business Registration</a></h3>
                            <p>Helping in Registering your business with various Local, State & Central Government Authorities to get legal existence.
                                Like. Udhyog Aadhaar, MSME, GST Registration, Import Export Code under DGFT.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project">
                        <div class="img rounded mb-4" style="background-image: url(images/home_page/Final_Accounting);"></div>
                        <div class="text w-100 text-center">
                            <!--        				<span class="cat">Marketing</span>-->
                            <h3><a href="#">Accounting </a></h3>
                            <p>Keeping Books of account in Electronic mode is necessary in nowadays, as it help in determining true and fair financial position of your organisation.
                                We are familiar with Tally ERP 9 for the same.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project">
                        <div class="img rounded mb-4" style="background-image: url(images/home_page/Final_ITR);"></div>
                        <div class="text w-100 text-center">
                            <!--<span class="cat">Financing</span>-->
                            <h3><a href="#">Income Tax & TDS Return Filing</a></h3>
                            <p>Income Tax Return filing is important for all Business as well as Non Business assesse. Same way Assesses having TAN No are required to file their TDS Return on time along with Payment of TDS deducted on Payments.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project">
                        <div class="img rounded mb-4" style="background-image: url(images/home_page/Final_GST);"></div>
                        <div class="text w-100 text-center">
                            <!--<span class="cat">Audit &amp; Taxes</span>-->
                            <h3><a href="#">GST Registration & Return Filing</a></h3>
                            <p>GST is the most Important Indirect Tax tool to Collect Tax on Goods & Services traded in Indian Territory. GST is charged under Various heads like CGST, SGST, IGST & UTGST in India. Hence taking care of provisions applicable under GST is necessary.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project">
                        <div class="img rounded mb-4" style="background-image: url(images/home_page/Final_Insurance2);"></div>
                        <div class="text w-100 text-center">
                            <!--<span class="cat">Financing</span>-->
                            <h3><a href="#">Life Insurance & Retirement </a></h3>
                            <p>Planning for Retirement of Self & Setting up Financial support for dependents in case of unexpected death of single earning person in family is needed. Life Insurance Products of ICICI Prudential Life Ins. Co. Ltd. with Tax Saving benefits will add value to your Investments.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project">
                        <div class="img rounded mb-4" style="background-image: url(images/home_page/Loans);"></div>
                        <div class="text w-100 text-center">
                            <!--                                <span class="cat">Real Estate</span>-->
                            <h3><a href="#">Loan Consulting Service</a></h3>
                            <p>Finance is the important mode of getting money for running business. Apart from them Housing Loan & Personal Loan is natural for non-commercial persons to satisfy their needs. Hence we guide them on getting easiest loans at cheapest rate.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: #3e64ff !important">
                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                    <h4 class="modal-title" style="color: white">Feel Free To Ask</h4>
                </div>
                <div class="modal-body">
                    <p style="text-align: center;color :black">your Request has Sumitted Successfully. </p>
                    <p style="text-align: center;color :black">Thank You</p>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="reloadPage()" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <?php
    include 'testimony.php';
    ?>
    <!-- loader -->

    <?php
    include 'footer.php';
    ?>

</body>

</html>