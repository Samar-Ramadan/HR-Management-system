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
        top: 70%;
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
      <h2>  update</h2>
      <form   action="  {{route ('employee.update',$emp_edit->id)}} " method="POST"   
      >
        @csrf
        @method('PUT')
        <div class="user-box">
          <input type="string" name="name"   class =" @error ('name') is-invalid @enderror"  value="{{$emp_edit->name}}">
          @error ('name')
  
          <div class=" alert alert-danger"> {{$message}}</div>
       @enderror
          <label> name:</label>
        </div>
      
     
  
        <div class="user-box">
          <input type="string" name="gender" class =" @error ('gender') is-invalid @enderror"  value=" {{ $emp_edit->gender }}" >
          @error ('gender')
  
          <div class=" alert alert-danger"> {{$message}}</div>
       @enderror
          <label>Gender:</label>
        </div>
  
        <div class="user-box">
          <input type="date" name="date_of_birth" class =" @error ('date_of_birth') is-invalid @enderror"
          value=" {{ $emp_edit->date_of_birth }}">
          @error ('date_of_birth')
  
          <div class=" alert alert-danger"> {{$message}}</div>
       @enderror
          <label>date_of_birh:</label>
        </div>
     
        <div class="user-box">
          <input type="date" name="hire_date" class =" @error ('hire_date') is-invalid @enderror"
          value=" {{ $emp_edit->hire_date}}"
          >
          @error ('hire_date')
  
          <div class=" alert alert-danger"> {{$message}}</div>
       @enderror
          <label>hire_date:</label>
        </div>
     
        <div class="user-box">
          <input type="string" name="education" class =" @error ('education') is-invalid @enderror"
          value=" {{ $emp_edit->education}}">
          @error ('education')
  
          <div class=" alert alert-danger"> {{$message}}</div>
       @enderror
          <label>education</label>
        </div>
        <div class="user-box">
          <input type="string" name="degree" class =" @error ('degree') is-invalid @enderror"
          value=" {{ $emp_edit->degree}}">
          @error ('degree')
  
          <div class=" alert alert-danger"> {{$message}}</div>
       @enderror
          <label>degree</label>
        </div>
     
        <div class="user-box">
          <input type="string" name="address" class =" @error ('address') is-invalid @enderror"
          value=" {{ $emp_edit->address }}">
          @error ('address')
  
          <div class=" alert alert-danger"> {{$message}}</div>
       @enderror
          <label>address</label>
        </div>
      
        <div class="user-box">
          <input type="string" name="email" class =" @error ('email') is-invalid @enderror"
          value=" {{ $emp_edit->email}}">
          @error ('email')
  
          <div class=" alert alert-danger"> {{$message}}</div>
       @enderror
          <label>email</label>
        </div>
        <div class="user-box">
          <input type="integer" name="phon_number" class =" @error ('phon_number') is-invalid @enderror"
          value=" {{ $emp_edit->phon_number }}">
          @error ('phon_number')
  
          <div class=" alert alert-danger"> {{$message}}</div>
       @enderror
          <label>phon_number</label>
        </div>
  
        <div class="user-box">
          <select name="section_id" class="form-control" id="section_id">
                   
            @foreach ($sections as $section)
                            <option value="{{$section->id}}">
                                {{$section->manager}}
                                
                            </option>
                        @endforeach
        </select>
             </div>
        <div class="user-box">
              
                  
          <select name="jop_id" class="form-control" id="jop_id">
             
              @foreach ($jop as $jop)
                                <option value="{{$jop->id}}">
                                    {{$jop->title_jop}}
                                    
                                </option>
                            @endforeach
          </select>
         
      
    </div>
   
    
         <button type="submit" class="btn btn-light m-3">
          
          
        
          
          submit</button> 
       
      </form>
    </div>
  </body> 
</html>