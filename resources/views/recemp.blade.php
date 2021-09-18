<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
   
       

    {{$employee}}
   
    <li> num_working_hours:: num_absence_hours::</li>
       
    
    @foreach ($employee1 as $employee1)
    <li>
    
     {{$employee1->num_working_hours}}
     {{$employee1->num_absence_hours}}
     @endforeach 
    
    
    
     
      
    </li>  


</body>
</html>