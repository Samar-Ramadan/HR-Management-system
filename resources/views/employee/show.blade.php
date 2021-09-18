

<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    
   
 </style>
    </head>
    <body>
      <div class="login-box">
        <h2>Profil</h2>
       
          <div class="user-box">
            <input type="string" name="name" value="{{$emp->name}}" >
            <label>Username:</label>
          </div>
          <div class="user-box">
            <input type="string" name="email" value="{{$emp->email}}">
            <label>email:</label>
          </div>
          <div class="user-box">
            <input type="string" name="education" value="{{$emp->education}}">
            <label>education:</label>
          </div>
          <div class="user-box">
            <input type="string" name="degree" value="{{$emp->degree}}" >
            <label>degree:</label>
          </div>
         
         
        
      </div>
     

      <a href="\project_first\public\achieve\{{$emp->id}}">
         <button type="submit" class="btn btn-light m-3" style="background-color: rgb(147, 204, 204)">Task</button></a>
   
        
      <a href="\project_first\public\balance\{{$emp->id}}">
         <button type="submit" class="btn btn-light m-3" style="background-color: rgb(147, 204, 204)">rate</button></a>
  
         <div class="login-box1">
           
       <div class="user-box">
      
      
      <form   action="recemp1" method="post">
        @csrf
        <label>User:</label>
      <input type="integer" name="employee_id" style="background-color: rgb(147, 204, 204);margin-top:4px" value="{{$emp->id}}" >
     
    </div>
    <div class="user-box">
      <label>date1:</label>
      <input type="date" name="date1" style="background-color: rgb(147, 204, 204);margin-top:6px">
    
    </div>
    <div class="user-box">
      <label>date2:</label>
      <input type="date" name="date2"  style="margin-top:6px ;background-color: rgb(147, 204, 204)">
      
    </div>
  
    <button type="submit" class="btn btn-light m-3" style="background-color: rgb(147, 204, 204)">
      submit</button> 
</div>
     
    

      {{-- <a href="/project_first/public/requests/{{$emp->id}}">dd</a> --}}
      
           
    

       



             
    </body>
    </html>
    

