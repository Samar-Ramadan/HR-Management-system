


    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="log.css">
      <title>Document</title>
      <style>html {
        height: 100%;
    }
    
    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: rgb(147, 204, 204);
    }
    
    .login-box {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(0, 0, 0, .5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
        border-radius: 10px;
    }
    
    .login-box h2 {
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
    }
    
    .login-box .user-box {
        position: relative;
    }
    
    .login-box .user-box input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
    }
    
    .login-box .user-box label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: .5s;
    }
    
    .login-box .user-box input:focus~label,
    .login-box .user-box input:valid~label {
        top: -20px;
        left: 0;
        color: #03e9f4;
        font-size: 12px;
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
      <div class="login-box">
        <h2>task</h2>
        <form   action="{{route('work.store')}}" method="POST" 
        >
          @csrf
          <div class="user-box">
            <input type="text" name="task" placeholder="task..." >
            <label>task</label>
          </div>
          <div class="user-box">
            
                
                <select name="employee_id" class="form-control" id="employee_id">
                   
                    @foreach ($emp as $emp)
                        <option value="{{$emp->id}}">
                            {{$emp->name}}
                            
                        </option>
                    @endforeach
                </select>
            
          </div>
         
         <pre>

         </pre>
         
           <button type="submit" class="btn btn-light m-3">
            
            
          
            
            submit</button> 
         
        </form>
      </div>
      <table>
        @foreach ($find as $find)
       
        <tr>
            <th>{{$find->name}}</th>
            <th>{{$find->education}}</th>
            <th><a href="\project_first\public\achieve\{{$find->id}}"><button  class="btn btn-light m-3">achieve</button></a></th>
            <td><a href="\project_first\public\work\{{$find->id}}"><button  class="btn btn-light m-3">work</button></a></td>
        </tr>
       
        @endforeach

       
       
      </table>
     
    </body>
    </html>
   