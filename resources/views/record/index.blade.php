<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style> 
      body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: rgb(147, 204, 204);
    }
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    
    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    
    tr:nth-child(even) {
        background-color: #dddddd;
    }
    
    body {
       
    }
        </style>
</head>
<body>
    
  
   



 <table>
    {{$employee}}
   
    
    <td>num_working_hours:</td>
    <td>num_absence_hours:</td>
    <td>date_of_attendance:</td>
    @foreach ($employee1 as $employee1)
   
    <tr>
        <th>{{$employee1->num_working_hours}}</th>
        <th>{{$employee1->num_absence_hours}}</th>
        <th>{{$employee1->date_of_attendance}}</th>
        
    </tr>
   
    @endforeach

   
   
  </table>
 
  
</li>  

   





      
           
  
</body>
</html>