<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   
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
 @yield('title')
 <nav class="top-navbar navbar-expand-md ">
  <div class="container-fluid">
    <a><span class="navbar-toggler-icon text-light">Menu</span></a>
    <a class="top-navbar-brand" href=""><img src="{{asset('images/Logo.jpg')}}"></a>
  </div>
</nav>
</body>
</html>