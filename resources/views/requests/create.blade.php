
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
    
  </style>
     
    </head>
    <body>
      <div class="login-box">
        <h2>Report</h2>
        <form   action="{{route('requests.store')}}" method="POST"   
        >
          @csrf

          
          <div class="user-box">
            <input type="integer" name="employee_id" class =" @error ('employee_id') is-invalid @enderror"  value="{{$emp->id}}">
            @error ('employee_id')

            <div class=" alert alert-danger"> {{$message}}</div>
         @enderror
            <label>employee_id:</label>
          </div>
          <div class="user-box">
            <input type="string" name="request_title"   class =" @error ('request_title') is-invalid @enderror" >
            @error ('request_title')

            <div class=" alert alert-danger"> {{$message}}</div>
         @enderror
            <label> request_title:</label>
          </div>
        



        
          <div class="user-box">
            <input type="date" name="date_request" class =" @error ('date_request') is-invalid @enderror" >
            @error ('date_request')

            <div class=" alert alert-danger"> {{$message}}</div>
         @enderror
            <label>date_request:</label>
          </div>

        
       
         
           <button type="submit" class="btn btn-light m-3">
            
            
          
            
            submit</button> 
         
        </form>
      </div>
    </body>
    </html>
    