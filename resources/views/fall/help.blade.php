<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>help-page</title>
    <link rel="stylesheet" href="css\help.css">
  </head>
  <body>
    <!--HTMLCODE-->
<div style="background-color: black;">
    <div id="topNavBar"></div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
			
            <img src="images/noTimeToMeeting.jpg" class="d-block w-100" width="600" height="600">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="font-size: 200%;color: red;">Do you have a lot <p style="color: red;font-size: 200%;font-weight: bold;">of employees </p>in your company</h5>
              <p style="color: red; font-size: 150%; font-weight: bold;">and you have no time to meet all of them?? we will let u meet them while you are in a bed</p>
            </div>
          </div>
          <div class="carousel-item">
						
            <img src="images/hard paper work.jpg" class="d-block w-100" width="600" height="600">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="font-size: 200%; color: black;font-weight: bold;">Suffering from paperwork</h5>
              <p style="font-size: 150%;">Suffer from losing some information Working late to get things done for your employees</p>
            </div>
          </div>
          <div class="carousel-item">
				
            <img src="images/logIn.jpg" class="d-block w-100" width="600" height="600">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="font-size: 200%; font-weight:bold;">Just Rool Up And</h5>
              <p style="font-size: 150%;">SIgn in and engoy with US</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    <form class="logInForm text-light">
        <div class="row m-5">
            <label for="Email" class="col-12">Email:</label>
            <input type="email"  id="Email" class="col-12">
		</div>
        <div class="row m-5">
            <label for="password" class="col-12">password:</label>
            <input type="password" id="password" class="col-12">
        </div>
        <div class="row m-5">
            <input type="checkbox" class="form-check-input col-2" id="rememberMe">
            <label for="rememberMe" class=" col-5">Remember Me</label> 
        </div>
        <div class="row ">
            <button type="submit" class="btn logIn col-3 text-center text-light m-5" >LOGIN</button>
        </div>
    </form>
    <div style="background-color: black;" class="firstVisit">
      <p class="text-light">If you want to use our site and this first time for you just click the link and fill the form and u are wellcome in our family</p>
      <a class="text-light" href="hrInterFace" >CREATE NEW ACCOUNT</a>
    </div>
</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="help-Page.js"></script>
    <script>
      const navBar=`

<nav class="top-navbar navbar-expand-md ">
    <div class="container-fluid">
      <button class="btn btn-dark" id="menuBtn">Menu</button>
      <a class="top-navbar-brand" href="#"><img src="images/Logo.jpg" hieght="80" width="100"></a>
    </div>
</nav>
`
document.getElementById("topNavBar").innerHTML=navBar;
    </script>
  </body>
</html>