 <script>
     function ValidateEmailSubscribe() {
         var email = document.getElementById("email").value;
         var lblError = document.getElementById("lblError1");
         lblError.innerHTML = "";
         var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
         if (!expr.test(email)) {
             lblError.innerHTML = "Invalid Email Address.";
         }
     }



     function myFunction() {

         var email = document.getElementById("email").value;

         // Returns successful data submission message when the entered information is stored in database.
         var dataString = 'email1=' + email;
         if (email == '') {
             alert("Please Enter Valid Email Address");
         } else {
             console.log('The function is hooked up');
             var data = $("form").serialize();
             $.ajax({
                 type: "POST",
                 url: "subscribe_code.php",
                 data: data,
                 success: function(output) {
                     $('#myModal_subscribe').modal('show');
                 }
             });

         }
         return false;
     }

     function reloadPage() {
         window.location.reload();
     }
 </script>




 <footer class="ftco-footer ftco-bg-dark ftco-section">
     <div class="container">
         <div class="row mb-5">
             <div class="col-md-6 col-lg-4">
                 <div class="ftco-footer-widget mb-5">
                     <h2 class="ftco-heading-2">Have a Questions?</h2>
                     <div class="block-23 mb-3">
                         <ul>
                             <li><span class="icon icon-map-marker"></span><span class="text" style=" color: #fff !important;">33/2, Gurukrupa Society, Part - 1,<br> New Ranip, Ahmedabad-382481,<br> Gujarat, India</span></li>
                             <li><a href="#"><span class="icon icon-phone"></span><span class="text">+918460846579</span></a></li>
                             <li><a href="#"><span class="icon icon-envelope"></span><span class="text">jaliyanconsultancy@yahoo.com<br>
                                         shivangsomaiya11@gmail.com
                                     </span></a></li>
                         </ul>
                     </div>
                     <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">

                         <li class="ftco-animate"><a target="_" href="https://m.facebook.com/Jaliyan-Consultancy-Ahmedabad-380072899432834/?ref=bookmarks"><span class="icon-facebook"></span></a></li>
                         <li class="ftco-animate"><a target="_" href="https://twitter.com/shivang_somaiya"><span class="icon-twitter"></span></a></li>
                         <li class="ftco-animate"><a target="_" href="https://www.linkedin.com/in/shivang-somaiya-6729238b"><span class="icon-linkedin"></span></a></li>
                         <!-- <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li> -->
                     </ul>
                 </div>
             </div>
             <div class="col-md-6 col-lg-3">
                 <div class="ftco-footer-widget mb-5 ml-md-4">
                     <h2 class="ftco-heading-2">Links</h2>
                     <ul class="list-unstyled">
                         <li><a href="index.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                         <li><a href="services.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                         <li><a href="updates.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Updates</a></li>
                         <li><a href="about.php"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                         <li><a href="contact_us.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact Us</a></li>
                     </ul>
                 </div>
             </div>

             <div class="col-md-6 col-lg-4">
                 <div class="ftco-footer-widget mb-5">
                     <h2 class="ftco-heading-2">Subscribe Us!</h2>
                     <form class="subscribe-form" id="form">
                         <div class="form-group">
                             <input type="email" id="email" name="email_id" class="form-control mb-2 text-center" placeholder="Enter email address" onkeyup="ValidateEmailSubscribe();">
                             <span id="lblError1" style="color: #dc3545"></span>
                             <input id="subscribe" style="text-align: center" name="btn_submit" onclick="myFunction()" value="Subscribe" class="form-control submit px-3">

                         </div>
                     </form>
                     <br>
                     <br>
                     <ul>
                         <!-- <span class="text" style=" color: #fff !important;">Developed By:</span><br>
                         <span class="text" style=" color: #fff !important;">Namrata Thakkar</span><br> -->
                         <!-- <span class="text" style=" color: #fff !important;">Email Id: namrata25594@gmail.com</span> -->
                     </ul>
                     <!-- <h6 style="color: #fff">Developed By:</h6>
                     <h6 style="color: #fff">Namrata Thakkar</h6>
                     <h6 style="color: #fff">Email Id: namrata25594@gmail.com</h6> -->
                 </div>
             </div>
         </div>

         <div id="myModal_subscribe" class="modal fade" role="dialog">
             <div class="modal-dialog">

                 <!-- Modal content-->
                 <div class="modal-content">
                     <div class="modal-header" style="background-color: #3e64ff !important">
                         <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                         <h4 class="modal-title" style="color: white">Subscribe</h4>
                     </div>
                     <div class="modal-body" style="color: black">
                         <p style="text-align: center;color :black">Thank You</p>
                         <p style="text-align: center;color :black">You had been subscribed for our latest news and updates.</p>
                     </div>
                     <div class="modal-footer">
                         <button type="button" onclick="reloadPage()" data-dismiss="modal">Close</button>
                     </div>
                 </div>

             </div>
         </div>
         <div class="row">
             <div class="col-md-12 text-center">

                 <!-- <p>Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
                 <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.</p> -->
             </div>
         </div>
     </div>

 </footer>

 <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


 <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
         <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
         <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


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
     //Get the button
     var mybutton = document.getElementById("myBtn");

     // When the user scrolls down 20px from the top of the document, show the button
     window.onscroll = function() {
         scrollFunction()
     };

     function scrollFunction() {
         if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
             mybutton.style.display = "block";
         } else {
             mybutton.style.display = "none";
         }
     }

     // When the user clicks on the button, scroll to the top of the document
     function topFunction() {
         document.body.scrollTop = 0;
         document.documentElement.scrollTop = 0;
     }
 </script>