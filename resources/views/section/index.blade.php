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
          <a href="report" class="" id="">Reports</a>
            
          </li>
        <li>
      

  
          <a href="#" class="" id="">Our Services</a>
        </li>
      </ul>
      <div id="logAndSign">
      </div>
    </nav>
  
<a href="section\create"><button  class="btn btn-light m-3">Add New Section</button></a>
     <table>
        @foreach ($sections as $section)
        <tr>
          <td>
            
               {{$section->id}}
            <td> {{$section->manager}}</td>
              <td>{{$section->section_title}}</td>
             <td> <a href="section\{{$section->id}}"><button  class="btn btn-light m-3">show</button></a></td>
              
               
             <td> <a href="section\{{$section->id}}\edit"><button  class="btn btn-light m-3">update</button></a></td>
            
          </td>
          
        </tr>
       
        @endforeach
       
      </table>
</body>
</html>