<style type="text/css">
  /*
Bootstrap Image Carousel Slider with Animate.css
Code snippet by Hashif (http://hashif.com) for Bootsnipp.com
Image credits: unsplash.com
*/
@import url(https://fonts.googleapis.com/css?family=Quicksand:400,700);

body {
    font-family: 'Quicksand', sans-serif;
    font-weight:700;
}





/********************************/
/*          Main CSS     */
/********************************/


#first-slider .main-container {
  padding: 0;
}


#first-slider .slide1 h3, #first-slider .slide2 h3, #first-slider .slide3 h3, #first-slider .slide4 h3{
    color: #fff;
    font-size: 30px;
      text-transform: uppercase;
      font-weight:700;
}

#first-slider .slide1 h4,#first-slider .slide2 h4,#first-slider .slide3 h4,#first-slider .slide4 h4{
    color: #fff;
    font-size: 30px;
      text-transform: uppercase;
      font-weight:700;
}
#first-slider .slide1 .text-left ,#first-slider .slide3 .text-left{
    padding-left: 40px;
}


#first-slider .carousel-indicators {
  bottom: 0;
}
#first-slider .carousel-control.right,
#first-slider .carousel-control.left {
  background-image: none;
}
#first-slider .carousel .item {
  min-height: 425px; 
  height: 100%;
  width:100%;
}

.carousel-inner .item .container {
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
}


#first-slider h3{
  animation-delay: 1s;
}
#first-slider h4 {
  animation-delay: 2s;
}
#first-slider h2 {
  animation-delay: 3s;
}


#first-slider .carousel-control {
    width: 6%;
        text-shadow: none;
}


#first-slider h1 {
  text-align: center;  
  margin-bottom: 30px;
  font-size: 30px;
  font-weight: bold;
}

#first-slider .p {
  padding-top: 125px;
  text-align: center;
}

#first-slider .p a {
  text-decoration: underline;
}
#first-slider .carousel-indicators li {
    width: 14px;
    height: 14px;
    background-color: rgba(255,255,255,.4);
  border:none;
}
#first-slider .carousel-indicators .active{
    width: 16px;
    height: 16px;
    background-color: #fff;
  border:none;
}


.carousel-fade .carousel-inner .item {
  -webkit-transition-property: opacity;
  transition-property: opacity;
}
.carousel-fade .carousel-inner .item,
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  opacity: 0;
}
.carousel-fade .carousel-inner .active,
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}
.carousel-fade .carousel-inner .next,
.carousel-fade .carousel-inner .prev,
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.carousel-fade .carousel-control {
  z-index: 2;
}

.carousel-control .fa-angle-right, .carousel-control .fa-angle-left {
    position: absolute;
    top: 50%;
    z-index: 5;
    display: inline-block;
}
.carousel-control .fa-angle-left{
    left: 50%;
    width: 38px;
    height: 38px;
    margin-top: -15px;
    font-size: 30px;
    color: #fff;
    border: 3px solid #ffffff;
    -webkit-border-radius: 23px;
    -moz-border-radius: 23px;
    border-radius: 53px;
}
.carousel-control .fa-angle-right{
    right: 50%;
    width: 38px;
    height: 38px;
    margin-top: -15px;
    font-size: 30px;
    color: #fff;
    border: 3px solid #ffffff;
    -webkit-border-radius: 23px;
    -moz-border-radius: 23px;
    border-radius: 53px;
}
.carousel-control {
    opacity: 1;
    filter: alpha(opacity=100);
}


/********************************/
/*       Slides backgrounds     */
/********************************/
#first-slider .slide1 {
    background-image: url(img/bg-img/eye5.jpeg.jpg);
      background-size: cover;
    background-repeat: no-repeat;
}
#first-slider .slide2 {
  background-image: url(img/bg-img/eye5.jpeg.jpg);
      background-size: cover;
    background-repeat: no-repeat;
}
#first-slider .slide3 {
  background-image: url(img/bg-img/eye5.jpeg.jpg);
      background-size: cover;
    background-repeat: no-repeat;
}
#first-slider .slide4 {
  background-image: url(img/bg-img/eye5.jpeg.jpg);
      background-size: cover;
    background-repeat: no-repeat;
}




/********************************/
/*          Media Queries       */
/********************************/
@media screen and (min-width: 980px){
      
}
@media screen and (max-width: 640px){
      
}







</style>





<div id="first-slider" class="">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Item 1 -->
            <div class="item slide1">
                <div class="row">
                    <div class="container">
                        <div class="col-md-3 text-right">
                            <img style="max-width: 200px;" data-animation="animated zoomInLeft" src="img/bg-img/eye5.jpeg"
                            class="">
                        </div>
                        <div class="col-md-9 text-left">
                             <h3 data-animation="animated bounceInDown" class="">Add images, or even your logo!</h3>

                             <h4 data-animation="animated bounceInUp" class="">Easily use stunning effects</h4> 
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="item slide2 active">
                <div class="row">
                    <div class="container">
                        <div class="col-md-7 text-left">
                             <h3 data-animation="animated bounceInDown" class=""> 50 animation options A beautiful</h3>

                             <h4 data-animation="animated bounceInUp" class="">Create beautiful slideshows </h4>

                        </div>
                        <div class="col-md-5 text-right">
                            <img style="max-width: 200px;" data-animation="animated zoomInLeft" src="img/bg-img/eye5.jpegg"
                            class="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="item slide3">
                <div class="row">
                    <div class="container">
                        <div class="col-md-7 text-left">
                             <h3 data-animation="animated bounceInDown" class="">Simple Bootstrap Carousel</h3>

                             <h4 data-animation="animated bounceInUp" class="">Bootstrap Image Carousel Slider with Animate.css</h4>

                        </div>
                        <div class="col-md-5 text-right">
                            <img style="max-width: 200px;" data-animation="animated zoomInLeft" src="img/bg-img/eye5.jpeg"
                            class="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="item slide4">
                <div class="row">
                    <div class="container">
                        <div class="col-md-7 text-left">
                             <h3 data-animation="animated bounceInDown" class="">We are creative</h3>

                             <h4 data-animation="animated bounceInUp" class="">Get start your next awesome project</h4>

                        </div>
                        <div class="col-md-5 text-right">
                            <img style="max-width: 200px;" data-animation="animated zoomInLeft" src="https://s20.postimg.org/9vf8xngel/internet_speed.png"
                            class="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Item 4 -->
        </div>
        <!-- End Wrapper for slides--> <a class="left carousel-control" href="#carousel-example-generic" role="button"
        data-slide="prev">
            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
        </a>
 <a class="right carousel-control" href="#carousel-example-generic"
        role="button" data-slide="next">
            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
        </a>

    </div>
</div>
