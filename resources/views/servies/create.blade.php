<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>jobApplecation</title>
    <style>
      .top-navbar-brand{
  margin-left: 500px;
}
.top-navbar{
  background-color: black;
}
.top-navbar a:hover{
  cursor: pointer;
}
    </style>
  </head>
  <body>
    
    <!--HTML CODE-->
<nav class="top-navbar navbar-expand-md ">
  <div class="container-fluid">
    <a><span class="navbar-toggler-icon text-light">Menu</span></a>
    <a class="top-navbar-brand" href=""><img src="{{asset('images/Logo.jpg')}}"></a>
  </div>
</nav>
<!--CSS CODE-->

      
   
        <div class="row m-3">
            <div class="col-8 m-3">
                <form class="bg-dark text-light" action="servies_store  " id="jobForm" method="POST" onsubmit="return validationJobForm()"
                enctype="multipart/form-data"
                >
                    @csrf
                  
               
                        
                   
                    <div class="row m-3">
                        <div class="col-12 m-3">
                            <label for="servie" class="col-12">servies:</label>
                            <input type="text" name="servie"  
                            class =" @error ('city') is-invalid @enderror"
                             style="width: 495px; ">

                                @error ('city')

                                  <div class=" alert alert-danger"> {{$message}}</div>
                               @enderror
                        </div>
                   
                    </div>

                    
                    <div class="row m-3">
                        <div class="col-12 m-3">
                            <label for="name" class="col-12">name:</label>
                            <input type="text" name="name"  
                            class =" @error ('city') is-invalid @enderror"
                             style="width: 495px; ">

                                @error ('city')

                                  <div class=" alert alert-danger"> {{$message}}</div>
                               @enderror
                        </div>
                   
                    </div>

                    <div class="row m-3">
                      <div class="col-12 m-3">
                          <label for="post imag" class="col-12">image:</label>
                          <input type="file" name="image"  
                          class =" @error ('city') is-invalid @enderror"
                           style="width: 495px; ">

                              @error ('city')

                                <div class=" alert alert-danger"> {{$message}}</div>
                             @enderror
                      </div>
                 
                  </div>
                   
                           <pre>    <button type="submit" class="btn btn-light m-3">update</button></pre> 
                    
                </form>
            </div>
        </div>
    </section>
    <script src="jscode.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>

