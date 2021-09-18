<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
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
    
    </style>
</head>
<body>

   
    <table>
        @foreach ($find as $find)
        <tr>
          <td>
            
            name employee:{{$find->name}}
            <th> education:{{$find->education}}
                <a href="\project_first\public\achieve\{{$find->id}}">achieve</a>
              </th>
             
                
          </td>
          
        </tr>
       
        @endforeach
       
      </table>
</body>
</html>