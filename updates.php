<?php
include 'config_file.php';
?>

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
  <!-- 
  <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
  <link rel="stylesheet" type="text/css" href="DataTables/datatables.css" />


  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script> -->
  <style>
    body {

      background-color: #eee;
    }

    table th,
    table td {
      text-align: center;
    }

    table tr:nth-child(even) {
      background-color: #e4e3e3
    }

    th {
      background: #333;
      color: #fff;
    }

    .pagination {
      margin: 0;
    }

    .pagination li:hover {
      cursor: pointer;
    }

    .header_wrap {
      padding: 30px 0;
    }

    .num_rows {
      width: 20%;
      float: left;
    }

    .tb_search {
      width: 20%;
      float: right;
    }

    .pagination-container {
      width: 70%;
      float: left;
    }

    .rows_count {
      width: 20%;
      float: right;
      text-align: right;
      color: #999;
    }
  </style>

  <style>
    .morecontent span {
      display: none;
    }

    .morelink {
      display: block;
    }
  </style>



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
          <li class="nav-item active"><a href="updates.php" class="nav-link">Updates</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="contact_us.php" class="nav-link">Contact Us</a></li>
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
          <h1 class="mb-2 bread">Latest Update</h1>
          <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p> -->
          <p style="text-align: center" class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Latest Update <i class="ion-ios-arrow-forward"></i></span></p>

        </div>
      </div>
    </div>
  </section>


  <div class="container">
    <div class="header_wrap">
      <div class="num_rows">

        <div class="form-group">
          <!--		Show Numbers Of Rows 		-->
          <select class="form-control" name="state" id="maxRows">


            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
            <option value="50">50</option>
            <option value="70">70</option>
            <option value="100">100</option>
            <option value="5000">Show ALL Rows</option>
          </select>

        </div>
      </div>
      <div class="tb_search">
        <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
      </div>
    </div>
    <table class="table  table-class" id="table-id">


      <thead>
        <tr>
          <th width="7%">Sr No.</th>
          <th width="10%">Date</th>
          <th width="25%">Subject</th>
          <th width="58%">Latest Update</th>
        </tr>
      </thead>
      <?php
      $sql = "select *  from latest_update order by 1 desc";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) == 0) {
      ?>
        <tbody>
          <tr>
            <td colspan="4">No data available in table</td>
          </tr>
        </tbody>
          <?php
          // echo '<tr><td colspan="4">No data available in table</td></tr>';
        } else {
          while ($row1 = mysqli_fetch_array($result)) {
            $orgDate = $row1['date'];;
            $newDate = date("d-m-Y", strtotime($orgDate));
            //  echo "New date format is: ".$newDate. " (MM-DD-YYYY)";  
          ?>
        <tbody>
          <tr>
            <td><?php echo $row1['u_id']; ?></td>
            <td><?php echo $newDate ?></td>
            <td><?php echo $row1['subject']; ?></td>
            <td style="margin-top: 3px;" class="more"><?php echo $row1['latest_update']; ?></td>

          </tr>
      <?php
          }
        }
      ?>
        <tbody>
    </table>

    <!--		Start Pagination -->
    <div class='pagination-container'>
      <nav>
        <ul class="pagination">
          <!--	Here the JS Function Will Add the Rows -->
        </ul>
      </nav>
    </div>
    <div class="rows_count">Showing 11 to 20 of 91 entries</div>

  </div> <!-- 		End of Container -->



  <?php
  include 'footer.php';
  ?>

  <script>
    // <!-- loader -->
    getPagination('#table-id');
    $('#maxRows').trigger('change');

    function getPagination(table) {

      $('#maxRows').on('change', function() {
        $('.pagination').html(''); // reset pagination div
        var trnum = 0; // reset tr counter 
        var maxRows = parseInt($(this).val()); // get Max Rows from select option

        var totalRows = $(table + ' tbody tr').length; // numbers of rows 
        $(table + ' tr:gt(0)').each(function() { // each TR in  table and not the header
          trnum++; // Start Counter 
          if (trnum > maxRows) { // if tr number gt maxRows

            $(this).hide(); // fade it out 
          }
          if (trnum <= maxRows) {
            $(this).show();
          } // else fade in Important in case if it ..
        }); //  was fade out to fade it in 
        if (totalRows > maxRows) { // if tr total rows gt max rows option
          var pagenum = Math.ceil(totalRows / maxRows); // ceil total(rows/maxrows) to get ..  
          //	numbers of pages 
          for (var i = 1; i <= pagenum;) { // for each page append pagination li 
            $('.pagination').append('<li data-page="' + i + '">\
								      <span>' + i++ + '<span class="sr-only">(current)</span></span>\
								    </li>').show();
          } // end for i 


        } // end if row count > max rows
        $('.pagination li:first-child').addClass('active'); // add active class to the first li 


        //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT
        showig_rows_count(maxRows, 1, totalRows);
        //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT

        $('.pagination li').on('click', function(e) { // on click each page
          e.preventDefault();
          var pageNum = $(this).attr('data-page'); // get it's number
          var trIndex = 0; // reset tr counter
          $('.pagination li').removeClass('active'); // remove active class from all li 
          $(this).addClass('active'); // add active class to the clicked 


          //SHOWING ROWS NUMBER OUT OF TOTAL
          showig_rows_count(maxRows, pageNum, totalRows);
          //SHOWING ROWS NUMBER OUT OF TOTAL



          $(table + ' tr:gt(0)').each(function() { // each tr in table not the header
            trIndex++; // tr index counter 
            // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
            if (trIndex > (maxRows * pageNum) || trIndex <= ((maxRows * pageNum) - maxRows)) {
              $(this).hide();
            } else {
              $(this).show();
            } //else fade in 
          }); // end of for each tr in table
        }); // end of on click pagination list
      });
      // end of on select change 

      // END OF PAGINATION 

    }




    // SI SETTING
    $(function() {
      // Just to append id number for each row  
      default_index();

    });

    //ROWS SHOWING FUNCTION
    function showig_rows_count(maxRows, pageNum, totalRows) {
      //Default rows showing
      var end_index = maxRows * pageNum;
      var start_index = ((maxRows * pageNum) - maxRows) + parseFloat(1);
      var string = 'Showing ' + start_index + ' to ' + end_index + ' of ' + totalRows + ' entries';
      $('.rows_count').html(string);
    }

    // CREATING INDEX
    function default_index() {
      //   $('table tr:eq(0)').prepend('<th> ID </th>')

      var id = 0;

      //   $('table tr:gt(0)').each(function() {
      //     id++
      //     $(this).prepend('<td>' + id + '</td>');
      //   });
    }

    // All Table search script
    function FilterkeyWord_all_table() {

      // Count td if you want to search on all table instead of specific column

      var count = $('.table').children('tbody').children('tr:first-child').children('td').length;

      // Declare variables
      var input, filter, table, tr, td, i;
      input = document.getElementById("search_input_all");
      var input_value = document.getElementById("search_input_all").value;
      filter = input.value.toLowerCase();
      if (input_value != '') {
        table = document.getElementById("table-id");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 1; i < tr.length; i++) {

          var flag = 0;

          for (j = 0; j < count; j++) {
            td = tr[i].getElementsByTagName("td")[j];
            if (td) {

              var td_text = td.innerHTML;
              if (td.innerHTML.toLowerCase().indexOf(filter) > -1) {
                //var td_text = td.innerHTML;  
                //td.innerHTML = 'shaban';
                flag = 1;
              } else {
                //DO NOTHING
              }
            }
          }
          if (flag == 1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      } else {
        //RESET TABLE
        $('#maxRows').trigger('change');
      }
    }
  </script>

  <script>
    $(document).ready(function() {
      // Configure/customize these variables.
      var showChar = 150; // How many characters are shown by default
      var ellipsestext = "";
      var moretext = "Read More";
      var lesstext = "Read Less";


      $('.more').each(function() {
        var content = $(this).html();

        if (content.length > showChar) {

          var c = content.substr(0, showChar);
          var h = content.substr(showChar, content.length - showChar);

          var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

          $(this).html(html);
        }

      });

      $(".morelink").click(function() {
        if ($(this).hasClass("less")) {
          $(this).removeClass("less");
          $(this).html(moretext);
        } else {
          $(this).addClass("less");
          $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
      });
    });
  </script>




</body>

</html>