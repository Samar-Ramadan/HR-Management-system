<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
      <link rel="stylesheet" href="css/table.css">
    
     <link rel="stylesheet" href="css/styles.css">
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
          
         <a href="managerstart" class="" id="">wellcomepage</a>
    
        </li>
        <li>
          <a href="employee" class="" id="">Employee</a>
        </li>
        <li>
        <a href="section" class="" id="">Section</a>
          
        </li>

        <li>
          <a href="section" class="" id="">Reports</a>
            
          </li>
        <li>
      

  
          <a href="#" class="" id="">Our Services</a>
        </li>
      </ul>
      <div id="logAndSign">
      </div>
    </nav>
  

     <table>
        @foreach ($report as $report)
        <tr>
          <td>
            
               {{$report->id}}
            <td> {{$report->name}}</td>
              <td>{{$report->report}}</td>
            
              
               
                
          </td>
          
        </tr>
       
        @endforeach
       
      </table>
</body>
</html>