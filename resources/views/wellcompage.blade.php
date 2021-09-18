<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        
    </style>
    <title>wellcome Page</title>
  </head>
  <body>

    <nav class="nav">
      <button class="btn" id="btnmenu">
        <i>
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-list " viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg>
        </i>
      </button>
      <div class="nav-brand"><img src="images/logo11.png" height="50" ></div>
      <ul>
        <li>
          
          <a href="balance\create" class="" id="">balance</a>
    
        </li>
      
         <li> 
       <a href="record\create" class="" id="">attends</a>
       </li>

       <li> 
       
        </li>
        <li>
          @foreach ($login1 as $login1)
          
            <a href={{ isset($login1)   ?"report\create":"bb" }} class="" id="">Report</a>
          
          <a href="sam\sas\{{$login1->id}}">  achieves employee 
          </a>   
          @endforeach
          
        </li>
        <li>
          @foreach ($login as $login)
  <a href="employee\{{$login->id}}"> Personal Profile </a>
  <a href="achieve\create\{{$login->id}}">  achieve create </a>
  <a href="requestcreate\{{$login->id}}" class="" id=""> Request</a>
  
@endforeach
        </li>
      </ul>
     
      <div id="logAndSign">
      </div>
    </nav>

    <div id="topNavBar"></div>
    <div class="sidebar"></div>
    <div class="content">
      <div class="services">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/manger.jpg" class="d-block w-100" height="500">
            </div>
            <div class="carousel-item">
              <img src="images/paperWork.jpg" class="d-block w-100" height="500">
            </div>
            <div class="carousel-item">
              <img src="images/abilityImprovement.png" class="d-block w-100"height="500">
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
      </div>
      <div class="descrebtion">
        <h1>You are looking for HR manager !!!</h1>
        <p>stop do that because we found the Solution just startUp with us and watch😁😁</p>
      </div>
    </div>
    <div style="height: 50px;"></div>
    <div class="foot"></div>
    
    <script src="wellcome.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>





    <nav class="nav">
      <button class="btn" id="btnmenu">
        <i>
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-list " viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg>
        </i>
      </button>
      <div class="teamName">
        Do IT TEAM
        </div>
        <ul>
        <li>
          <a href="#">About</a>
        </li>
        <li>
        <a href="#">Privacy</a>
        </li>
        <li>
        <a href="#">FaceBook</a>
        </li>
        <li>
        <a href="#">Contact</a>
        </li>
        </ul>
  </body>
</html>