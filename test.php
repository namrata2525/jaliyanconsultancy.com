<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jaliyan Consultancy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

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

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: DodgerBlue;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
</style>

</head>

<body>
    <?php
    include 'header.php';
    ?>
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
                        <form action="#" class="appointment-form ftco-animate">
                            <div class="form-group">
                                <input type="text" name="txt_fname" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" name="txt_lname" class="form-control" placeholder="Last Name">
                            </div>
                            
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>

                                        <select name="" id="" name="select_professional"  class="form-control bg-light ">
                                            <option value="" disabled selected>Professional</option>

                                            <option value="1" style="background-color: #007bff">Student</option>
                                            <option value="2">Accountant</option>
                                            <option value="3">Chartered Accountant</option>
                                            <option value="4">Tax Consultant</option>
                                            <option value="5">Customer</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                           
                                                      <!--  <div class="container">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown link
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                            </div> -->

                            <div class="form-group">
                                <input type="text" name="txt_phone" class="form-control" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email_id" class="form-control" placeholder="Email ID">
                            </div>
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>

                                        <select name="select_guidance" id="" class="form-control bg-light">
                                            <option value="" disabled selected>Select Guidance</option>
                                            <option value="1">PAN Card & TAN No</option>
                                            <option value="2">Income Tax Return Filing</option>
                                            <option value="3">TDS Return Filing</option>
                                            <option value="4">GST Registration & Return Filing</option>
                                            <option value="5">Business Registration</option>
                                            <option value="6">Accounting of Business</option>
                                            <option value="7">Life Insurance & Retirement Planning</option>
                                            <option value="8">Loans & Advances Support</option>
                                        </select>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea name="txt_msg" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="req_a_quote" value="Request A Quote" class="btn btn-secondary py-3 px-4">
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
                                    <div class="icon mt-2 d-flex align-items-center"><span class="flaticon-collaboration"></span></div>
                                    <div class="text media-body">
                                        <h3>Accounting of Business</h3>
                                        <p>Proper Accounting of Business Transaction is one of the Effective Controlling measure on your money.</p>


                                    </div>
                                </div>
                                <div class="services">
                                    <div class="icon mt-2"><span class="flaticon-analysis"></span></div>
                                    <div class="text media-body">
                                        <h3>GST Registration & Return Filing</h3>
                                        <p>Today all the business have to deal with GST in routine work, it needs continues watch on it to minimize the legal consequences. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="services">
                                    <div class="icon mt-2"><span class="flaticon-search-engine"></span></div>
                                    <div class="text media-body">
                                        <h3>Business Registration</h3>
                                        <p>In Current Scenario People deal with that business only, which are registered with legal authority.</p>

                                    </div>
                                </div>
                                <div class="services">
                                    <div class="icon mt-2"><span class="flaticon-handshake"></span></div>
                                    <div class="text media-body">
                                        <h3>Life Insurance & Retirement Planning</h3>
                                        <p>Planning of Self Retirement & Family Security in terms of money is important to secure against unexpected Future events.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="services">
                                    <div class="icon mt-2"><span class="flaticon-search-engine"></span></div>
                                    <div class="text media-body">
                                        <h3>Income Tax & TDS Return</h3>
                                        <p>Filing of Income Tax Return and taking care of TDS Compliance is must in today’s scenario.</p>



                                    </div>
                                </div>
                                <div class="services">
                                    <div class="icon mt-2"><span class="flaticon-handshake"></span></div>
                                    <div class="text media-body">
                                        <h3>Loans & Advances Support</h3>
                                        <p>As We are associated with Loan Consulting agencies, we are able to help you in taking loans and also can guide you in paperwork.</p>

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
                    <div class="img" style="background-image: url(images/about.jpg);"></div>
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
                                <p>Our mission is to render professional services with highest standard to clients, upholding the code of conduct and ethics of the profession.</p>
                            </div>
                            <div class="tab-pane container p-0 fade" id="home2">
                                <p>Keeping our Vision in mind, Long term relationship with our satisfied clients is our motto.</p>
                            </div>
                            <!--                                <div class="tab-pane container p-0 fade" id="home3">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                </div>-->
                        </div>
                    </div>
                    <!--                        <div class="row mt-5">
                            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18">
                                    <div class="icon"><span class="flaticon-doctor"></span></div>
                                    <div class="text">
                                        <strong class="number" data-number="1387">0</strong>
                                        <span>Happy Clients</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18">
                                    <div class="icon"><span class="flaticon-doctor"></span></div>
                                    <div class="text">
                                        <strong class="number" data-number="310">0</strong>
                                        <span>Success Reports</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18">
                                    <div class="icon"><span class="flaticon-doctor"></span></div>
                                    <div class="text">
                                        <strong class="number" data-number="35">0</strong>
                                        <span>Experienced</span>
                                    </div>
                                </div>
                            </div>
                        </div>-->
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
                    <p> We are offering services in various areas as listed below. <br>Short description is given here, for more details you can contact me on details given here.</p>
                    <p></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="project">
                        <div class="img rounded mb-4" style="background-image: url(images/project-1.jpg);"></div>
                        <div class="text w-100 text-center">
                            <!--        				<span class="cat">Consulting</span>-->
                            <h3><a href="#">Business Registration</a></h3>
                            <p>Helping in Registering your business with various local, state & Central Government authorities to get legal existence.
                                Like. Udhyog Aadhaar, MSME, GST Registration, Import Export Code under DGFT.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project">
                        <div class="img rounded mb-4" style="background-image: url(images/project-2.jpg);"></div>
                        <div class="text w-100 text-center">
                            <!--        				<span class="cat">Marketing</span>-->
                            <h3><a href="#">Accounting </a></h3>
                            <p>Keeping Books of account in Electronic mode is necessary in nowadays, as it help in determining true and fair financial position of organisation.
                                We are familiar with Tally ERP 9 for the same.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project">
                        <div class="img rounded mb-4" style="background-image: url(images/project-3.jpg);"></div>
                        <div class="text w-100 text-center">
                            <!--<span class="cat">Financing</span>-->
                            <h3><a href="#">PAN Card & Income Tax Return Filing </a></h3>
                            <p>Advising for Applying for PAN Card & changes in it
                                Helping to file Income Tax return taking care of Laws & Rules applicable</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project">
                        <div class="img rounded mb-4" style="background-image: url(images/project-4.jpg);"></div>
                        <div class="text w-100 text-center">
                            <!--<span class="cat">Audit &amp; Taxes</span>-->
                            <h3><a href="#">TAN No & TDS Return Filing</a></h3>
                            <p>As per law some business organisation are required to Apply for Tan, Deduct Tax on payments and File its report on timely basis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project">
                        <div class="img rounded mb-4" style="background-image: url(images/project-5.jpg);"></div>
                        <div class="text w-100 text-center">
                            <!--<span class="cat">Financing</span>-->
                            <h3><a href="#">GST Registration & Return Filing</a></h3>
                            <p>GST being a most Important Indirect Tax tool to collect Tax on Goods & Services and applicable on all the Goods and Services traded in Indian territory, taking care of applicable provisions is necessary.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project">
                        <div class="img rounded mb-4" style="background-image: url(images/project-6.jpg);"></div>
                        <div class="text w-100 text-center">
                            <!--                                <span class="cat">Real Estate</span>-->
                            <h3><a href="#">Life Insurance & Retirement Benefit with tax Saving</a></h3>
                            <p>Planning for Retirement of self & dependents in terms of monetary terms is important.
                                Such saving with proper tax planning is adds value to your investment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--        <section class="ftco-section ftco-no-pt">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <span class="subheading">Services</span>
                        <h2 class="mb-4">Why Choose Us?</h2>
                        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                    </div>
                </div>
                <div class="row tabulation mt-4 ftco-animate">
                    <div class="col-md-4">
                        <ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
                            <li class="nav-item text-left">
                                <a class="nav-link active py-4" data-toggle="tab" href="#services-1"><span class="flaticon-analysis mr-2"></span> Business Analysis</a>
                            </li>
                            <li class="nav-item text-left">
                                <a class="nav-link py-4" data-toggle="tab" href="#services-2"><span class="flaticon-business mr-2"></span> Business Consulting</a>
                            </li>
                            <li class="nav-item text-left">
                                <a class="nav-link py-4" data-toggle="tab" href="#services-3"><span class="flaticon-insurance mr-2"></span> Business Insurance</a>
                            </li>
                            <li class="nav-item text-left">
                                <a class="nav-link py-4" data-toggle="tab" href="#services-4"><span class="flaticon-money mr-2"></span> Global Investigation</a>
                            </li>
                            <li class="nav-item text-left">
                                <a class="nav-link py-4" data-toggle="tab" href="#services-5"><span class="flaticon-rating mr-2"></span> Audit &amp; Evaluation</a>
                            </li>
                            <li class="nav-item text-left">
                                <a class="nav-link py-4" data-toggle="tab" href="#services-6"><span class="flaticon-search-engine mr-2"></span> Marketing Strategy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content">
                            <div class="tab-pane container p-0 active" id="services-1">
                                <div class="img" style="background-image: url(images/project-2.jpg);"></div>
                                <h3><a href="#">Business Analysis</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            </div>
                            <div class="tab-pane container p-0 fade" id="services-2">
                                <div class="img" style="background-image: url(images/project-3.jpg);"></div>
                                <h3><a href="#">Business Consulting</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            </div>
                            <div class="tab-pane container p-0 fade" id="services-3">
                                <div class="img" style="background-image: url(images/project-4.jpg);"></div>
                                <h3><a href="#">Business Insurance</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            </div>
                            <div class="tab-pane container p-0 fade" id="services-4">
                                <div class="img" style="background-image: url(images/project-5.jpg);"></div>
                                <h3><a href="#">Global Investigation</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            </div>
                            <div class="tab-pane container p-0 fade" id="services-5">
                                <div class="img" style="background-image: url(images/project-6.jpg);"></div>
                                <h3><a href="#">Audit &amp; Evaluation</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            </div>
                            <div class="tab-pane container p-0 fade" id="services-6">
                                <div class="img" style="background-image: url(images/project-1.jpg);"></div>
                                <h3><a href="#">Marketing Strategy</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

    <!--   <section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-3 mb-md-0">You Always Get the Best Guidance</h2>
                </div>
                <div class="col-lg-3 col-md-4 ftco-animate">
                    <p class="mb-0"><a href="#" class="btn btn-secondary py-3 px-4">Request Quote</a></p>
                </div>
            </div>
        </div>
    </section>
 -->
    <!--   <section class="ftco-section testimony-section">
        <div class="container-fluid px-md-5">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Testimonies</span>
                    <h2 class="mb-4">Our Clients Says</h2>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                </div>
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Racky Henderson</p>
                                    <span class="position">Father</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                </div>
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Henry Dee</p>
                                    <span class="position">Businesswoman</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url(images/person_3.jpg)">
                                </div>
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Mark Huff</p>
                                    <span class="position">Businesswoman</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url(images/person_4.jpg)">
                                </div>
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Rodel Golez</p>
                                    <span class="position">Businesswoman</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                </div>
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Ken Bosh</p>
                                    <span class="position">Businesswoman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <hr>

    <!--        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-2">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <span class="subheading">Blog Posts</span>
                        <h2 class="mb-4">Recent Blog</h2>
                        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 ftco-animate">
                        <div class="blog-entry">
                            <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_1.jpg');">
                                <div class="meta-date text-center p-2">
                                    <span class="day">15</span>
                                    <span class="mos">Oct.</span>
                                    <span class="yr">2019</span>
                                </div>
                            </a>
                            <div class="text border border-top-0 p-4">
                                <h3 class="heading"><a href="#">Finance And Legal Working Streams Occur Throughout</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                                    <p class="ml-auto mb-0">
                                        <a href="#" class="mr-2">Admin</a>
                                        <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 ftco-animate">
                        <div class="blog-entry">
                            <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_2.jpg');">
                                <div class="meta-date text-center p-2">
                                    <span class="day">15</span>
                                    <span class="mos">Oct.</span>
                                    <span class="yr">2019</span>
                                </div>
                            </a>
                            <div class="text border border-top-0 p-4">
                                <h3 class="heading"><a href="#">Finance And Legal Working Streams Occur Throughout</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                                    <p class="ml-auto mb-0">
                                        <a href="#" class="mr-2">Admin</a>
                                        <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 ftco-animate">
                        <div class="blog-entry">
                            <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_3.jpg');">
                                <div class="meta-date text-center p-2">
                                    <span class="day">15</span>
                                    <span class="mos">Oct.</span>
                                    <span class="yr">2019</span>
                                </div>
                            </a>
                            <div class="text border border-top-0 p-4">
                                <h3 class="heading"><a href="#">Finance And Legal Working Streams Occur Throughout</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                                    <p class="ml-auto mb-0">
                                        <a href="#" class="mr-2">Admin</a>
                                        <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->





    <!-- loader -->

    <?php
    include 'footer.php';
    ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
<script>
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>

</body>

</html>