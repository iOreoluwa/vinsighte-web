<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Vinsighte | Contact</title>

    <!-- Favicon  -->
    <!-- <link rel="icon" href="img/core-img/favicon.ico"> -->

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

    <!--JavaScript Ajax library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<style type="text/css">

/**************************
ALERT BOX
***************************/
/* The alert message box*/

.alert {
  max-width: 100%;
  padding: 20px;
  margin-left: 15%;
  margin-right: 15%;
  text-align: center;
  font-weight: bold;
  color: white;
  background-color: #8D1313;
  margin-bottom: 5%;
  opacity: 1;
  transition: opacity 0.6s;
}

.alert-successful{
  max-width: 100%;
  padding: 20px;
  margin-left: 15%;
  margin-right: 15%;
  text-align: center;
  font-weight: bold;
  color: white;
  background-color: #121B39;
  margin-bottom: 5%;
  opacity: 1;
  transition: opacity 0.6s;
}
/* the close button*/
    

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

/* Moving the house on the close button*/

.closebtn:hover {
  color: black;
}

.input-error {
    box-shadow: 0px 0px 5px #8D1313;
}

</style>

<script type="text/javascript">
    $(document).ready(function() {
        $("form").submit(function(event) {
            event.preventDefault();
            var name = $("#mail-name").val();
            var email = $("#mail-email").val();
            var subject = $("#mail-subject").val();
            var message = $("#mail-message").val();
            var submit = $("#mail-submit").val();
            $(".form-message").load("contactform.php", {
                name: name,
                email: email,
                subject: subject,
                message: message,
                submit: submit
            }); 
        });
    });
</script>


</head>

<body>

    <!-- ***** Header Area Start ***** -->
    <?php
    $page = "contact";
    require("includes/header.php");
    ?>
    <!-- ***** Header Area End ***** -->

    <section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url(img/bg-img/tech.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <!-- Title -->
                        <h3 class="breadcumb-title">Contact</h3>
                        <!-- Breadcumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="medica-contact-area section_padding_100">
        <div class="container">
            <div class="row">
                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                        <h5 class="mb-50" style="font-weight: 700;">Let's Change The World Together, Get Involved!!!</h5>

                        <form action="contactform.php" method="POST">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <input id="mail-name" type="text" class="form-control" name="name" id="name" placeholder="Name">
                                </div>
                                <div class="col-12 col-md-6">
                                    <input id="mail-email" type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="col-12">
                                    <input id="mail-subject" type="text" class="form-control" name="subject" id="subject" placeholder="subject">
                                </div>
                                <div class="col-12">
                                    <textarea id="mail-message" name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button id="mail-submit" type="submit" name="submit" class="btn medica-btn btn-3 mt-3">Send Message</button>
                                </div>
                                <div class="col-12 form-message" style="margin-top: 5%;">
                                    <!--<div class="alert">
                                     <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                         Your Media File was not uploaded.
                                    </div> 
                                    <div class="alert-successful">
                                      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                        Your Media File was uploaded Successfully.
                                    </div>-->
                                </div>    
                            </div>
                        </form>
                    </div>
                </div>

               

                <div class="col-12 col-lg-4">
                    <div class="content-sidebar">
                        <!-- Medica Appointment Card -->
                        <div class="medica-contact-card">
                            <h5>Contact Us</h5>
                            <div class="mt-50"></div>
                            <!--<div class="single-contact-info d-flex align-items-center">
                                <div class="contact-icon mr-30">
                                    <img src="img/icons/alarm-clock.png" alt="">
                                </div>
                               <div class="contact-meta">
                                    <p>Monday - Friday 08:00 - 21:00 <br> Saturday and Sunday - CLOSED</p>
                                </div>
                            </div>-->
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="contact-icon mr-30">
                                    <img src="img/icons/envelope.png" alt="">
                                </div>
                                <div class="contact-meta">
                                    <p>+2347068687230 <br> +447400259461  <br> info@vinsighte.com.ng </p>
                                </div>
                            </div>
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="contact-icon mr-30">
                                    <img src="img/icons/map-pin.png" alt="">
                                </div>
                                <div class="contact-meta">
                                    <p>Linux Professional Institute,<br> Tech Road University Of Ibadan,<br> Ibadan, Nigeria</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps -->
   <!-- <div class="map-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="googleMap" class="googleMap"></div>
                </div>
            </div>
        </div>
    </div>-->


    <!-- ***** Footer Area Start ***** -->
    <?php
    require("includes/footer.php");
    ?>
    <!-- ***** Footer Area End ***** -->


    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <!-- <script src="js/jquery/jquery-2.2.4.min.js"></script> -->
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <!-- <script src="js/plugins.js"></script> -->
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/map-active.js"></script>

</body>

</html>