<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
      <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 0.5px solid #330101;
          text-align: left;
          padding: 0.5px;
          color: aliceblue;
        }
        
        tr:nth-child(even) {
          background-color:  rgba(0,0,0,.5);
          color: rgb(243, 240, 240);
          
        }
        body{
            background-color: rgb(147, 204, 204);
        }


       
      .top-navbar-brand{
  margin-left: 500px;
}
.top-navbar{
  background-color:  rgb(147, 204, 204);
}
.top-navbar a:hover{
  cursor: pointer;
}

button{
  background-color: rgb(147, 204, 204);
  color: aliceblue;
  border: 0ch;
}

  
        </style>
</head>
<body>
  <table>
        @foreach ($sections as $section)
        <tr>
          <td>
            
               {{$section->id}}
            <td> {{$section->name}}</td>
              <td>{{$section->education}}</td>
             <td> </td>
              
               
                
          </td>
          
        </tr>
       
        @endforeach
       
      </table>
</body>
</html>