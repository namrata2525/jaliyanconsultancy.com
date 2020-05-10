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
    <script src="js/jquery.min.js"></script>
    <script>
function ValidateEmailContact() {
        var email = document.getElementById("email_address").value;
        var lblError = document.getElementById("lblError2");
        lblError.innerHTML = "";
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (!expr.test(email)) {
            lblError.innerHTML = "Invalid Email Address.";
        }
    }



     function myFunction_contact() {

         var txt_name = document.getElementById("txt_name").value;
         var email_address = document.getElementById("email_address").value;
         var select_subject = document.getElementById("select_subject").value;
         var txt_msg = document.getElementById("txt_msg").value;

         // Returns successful data submission message when the entered information is stored in database.
         var dataString = 'txt_name1=' + txt_name + '&email_address1=' + email_address + '&select_subject1=' + select_subject + '&txt_msg1=' + txt_msg;
         if (txt_name == ''|| email_address == '' || select_subject == '' || txt_msg == '') {
             alert("All the Fields are Mandatory!");
         } else {
             console.log('The function is hooked up');
             var data = $("form").serialize();
             $.ajax({
                 type: "POST",
                 url: "get_in_touch_code.php",
                 data: data,
                 success: function(output) {
                     $('#myModal_contact').modal('show');
                 }
             });

         }
         return false;
     }
     function reloadPage(){
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
               <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
             </div> 
           </form> -->
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                        
                        <!-- <li class="nav-item"><a href="team.html" class="nav-link">Team</a></li> -->
                        <!-- <li class="nav-item"><a href="project.html" class="nav-link">Case Studies</a></li> -->
                        <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="updates.php" class="nav-link">Updates</a></li>
                        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                        <li class="nav-item active"><a href="contact_us.php" class="nav-link">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Contact</h1>
                    <p  style="text-align: center" class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info justify-content-center">
                <div class="col-md-10">
                    <div class="row mb-5">
                        <div class="col-md-4 text-center d-flex">
                            <div class="border w-100 p-4">
                                <div class="icon">
                                    <span class="icon-map-o"></span>
                                </div>
                                <p><span>Address:</span> 33/2, Gurukrupa Society, Part - 1,<br> New Ranip, Ahmedabad-382481,<br> Gujarat, India</p>
                            </div>
                        </div>
                        <div class="col-md-4 text-center d-flex">
                            <div class="border w-100 p-4">
                                <div class="icon">
                                    <span class="icon-tablet"></span>
                                </div>
                                <p><span>Phone:</span> <a href="tel://1234567920">Call us or WhatsApp: <br> +918460846579</a></p>
                            </div>
                        </div>
                        <div class="col-md-4 text-center d-flex">
                            <div class="border w-100 p-4">
                                <div class="icon">
                                    <span class="icon-envelope-o"></span>
                                </div>
                                <p><span>Email:</span> <a href="mailto:info@yoursite.com">jaliyanconsultancy@yahoo.com<br>

                                        shivangsomaiya11@gmail.com
                                    </a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row block-9 justify-content-center mb-5">
                <div class="col-md-10 mb-md-5">
                    <h2 class="text-center">Get In Touch</h2>
                    <form  class="border p-5 contact-form" >
                        <div class="form-group">
                            <input type="text" name="txt_name" id="txt_name" class="form-control" placeholder="Your Name" >
                        </div>
                        <div class="form-group">
                            <input type="email" name="email_address" id="email_address" class="form-control" placeholder="Your Email" onkeyup="ValidateEmailContact();">
                        </div>
                        <span id="lblError2" style="color: #dc3545"></span>
                        <div class="form-group">
                            <!-- <input type="text" class="form-control" placeholder="Subject"> -->

                            <select name="select_subject" id="select_subject" class="form-control">
                                <option value="" disabled selected>Subject:</option>
                                <option value="PAN Card & TAN No">PAN Card & TAN No</option>
                                <option value="Income Tax Return Filing">Income Tax Return Filing</option>
                                <option value="TDS Return Filing">TDS Return Filing</option>
                                <option value="GST Registration & Return Filing">GST Registration & Return Filing</option>
                                <option value="Business Registration">Business Registration</option>
                                <option value="Accounting of Business">Accounting of Business</option>
                                <option value="Life Insurance & Retirement Planning">Life Insurance & Retirement Planning</option>
                                <option value="Loans & Advances Support">Loans & Advances Support</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <textarea name="txt_msg" id="txt_msg" cols="30" rows="7" class="form-control" placeholder="Message" ></textarea>
                        </div>
                        <div class="form-group">
                            <input  id="contact_form" name="btn_submit" style="text-align: center"  onclick="myFunction_contact()" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container-fluid px-0">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="1336" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=jaliyan%20consultancy%2C33%2F2%20gurukrupa%20society&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net"></a>">to website</a></div>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 500px;
                                width: 1336px;
                            }

                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 500px;
                                width: 1336px;
                            }
                        </style>
                    </div>


                    <!--  <div id="map" class="bg-white">
                                <iframe src="https://www.google.com/maps/place/Jaliyan+Consultancy/@23.0860339,72.5531903,17z/data=!3m1!4b1!4m5!3m4!1s0x395e83016879f26d:0xfeb131cb7947eda3!8m2!3d23.086029!4d72.555379"></iframe>
                            </div>
 -->

                </div>
            </div>
        </div>
    </section>

    <div id="myModal_contact" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #3e64ff !important">
                        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                        <h4 class="modal-title" style="color: white">Contact Us</h4>
                    </div>
                    <div class="modal-body">
                        <p style="text-align: center;color :black">Thanks for Your interest with us.</p>
                        <p style="text-align: center;color :black">We will Contact You soon.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button"  onclick="reloadPage()" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
      

    <?php
    include 'footer.php';
    ?>



    <!-- loader -->
    

</body>

</html>