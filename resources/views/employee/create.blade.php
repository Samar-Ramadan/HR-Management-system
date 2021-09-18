{{--   <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>jobApplecation</title>
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
      <div class="user-box">
                   <input type="text" name="achieve_title" >
                         <label>achieve_title</label>
                      </div>
   
      
   {{ isset($emp_edit)   ?"update":"Add new employee" }}
        
            <div class="login-box">
                <form  action=" {{isset($emp_edit) ?  route ('employee.update',$emp_edit->id): route ('employee.store')  }} " id="jobForm" method="POST" onsubmit="return validationJobForm()">
                    @csrf
                
                    <div class="user-box">
                       
                           
                            <input type="string" 
                            name="name"
          
                            class =" @error ('name') is-invalid @enderror" 
                            value=" {{ isset($emp_edit) ? "$emp_edit->name" : "" }}"
                            >
                                @error ('name')

                                  <div class=" alert alert-danger"> {{$message}}</div>
                               @enderror
                               <label for="name">name:</label>
                           
                        
                        
                    </div>
                   
                    <div class="user-box">
                        
                            <label for="gender" class="col-12">gender:</label>
                            <input type="string" name="gender"  
                            class =" @error ('gender') is-invalid @enderror"
                             style="width: 495px; "
                             
                             value=" {{ isset($emp_edit) ? "$emp_edit->gender" : "" }}">

                                @error ('gender')

                                  <div class=" alert alert-danger"> {{$message}}</div>
                               @enderror
                       
                   </div>
                    
                   
                    
                        <div class="user-box">
                            <label for="date_of_birth" class="col-12">date_of_birth:</label>
                            <input type="date" name="date_of_birth"  
                            class =" @error ('date_of_birth') is-invalid @enderror"
                             style="width: 495px; "
                             
                             value=" {{ isset($emp_edit) ? "$emp_edit->date_of_birth" : "" }}">

                                @error ('date_of_bith')

                                  <div class=" alert alert-danger"> {{$message}}</div>
                               @enderror
                        </div>
                   
                   
                    <div class="user-box">
                       
                            <label for="hire_date" class="col-12">hire_date:</label>
                            <input type="date" name="hire_date"  
                            class =" @error ('hire_date') is-invalid @enderror"
                             style="width: 495px; "
                             value=" {{ isset($emp_edit) ? "$emp_edit->hire_date" : "" }}">

                                @error ('hire_date')

                                  <div class=" alert alert-danger"> {{$message}}</div>
                               @enderror
                        
                   
                    </div>
                    <div class="user-box">
                        
                            <label for="education" class="col-12">education:</label>
                            <input type="string" name="education"  
                            class =" @error ('education') is-invalid @enderror"
                             style="width: 495px; "
                             value=" {{ isset($emp_edit) ? "$emp_edit->education" : "" }}">

                                @error ('education')

                                  <div class=" alert alert-danger"> {{$message}}</div>
                               @enderror
                      
                   
                    </div>
                    <div class="user-box">
                        
                            <label for="degree" class="col-12">degree:</label>
                            <input type="string" name="degree"  
                            class =" @error ('degree') is-invalid @enderror"
                             style="width: 495px; "
                             value=" {{ isset($emp_edit) ? "$emp_edit->degree" : "" }}">

                                @error ('degree')

                                  <div class=" alert alert-danger"> {{$message}}</div>
                               @enderror
                        
                   
                    </div>
                    <div class="user-box">
                        
                            <label for="address" class="col-12">address:</label>
                            <input type="string" name="address"  
                            class =" @error ('address') is-invalid @enderror"
                             style="width: 495px; "
                             value=" {{ isset($emp_edit) ? "$emp_edit->address" : "" }}">

                                @error ('address')

                                  <div class=" alert alert-danger"> {{$message}}</div>
                               @enderror
                       
                   
                    </div>
                    <div class="user-box">
                        
                            <label for="email" class="col-12">email:</label>
                            <input type="string" name="email"  
                            class =" @error ('email') is-invalid @enderror"
                             style="width: 495px; "
                             value=" {{ isset($emp_edit) ? "$emp_edit->email" : "" }}">

                                @error ('email')

                                  <div class=" alert alert-danger"> {{$message}}</div>
                               @enderror
                        
                   
                    </div>
                    <div class="user-box">
                        
                            <label for="phon_number" class="col-12">phon_number:</label>
                            <input type="integer" name="phon_number"  
                            class =" @error ('phon_number') is-invalid @enderror"
                             style="width: 495px; "
                             value=" {{ isset($emp_edit) ? "$emp_edit->phon_number" : "" }}">

                                @error ('phon_number')

                                  <div class=" alert alert-danger"> {{$message}}</div>
                               @enderror
                        
                   
                    </div>
                    <div class="user-box">
                      <label for ="jop_id">jop_id</label>
                      <select name="jop_id" class="form-control" id="jop_id">
                         
                          @foreach ($jop as $jop)
                              <option value="{{$jop->id}}">
                                  {{$jop->title_jop}}
                                  
                              </option>
                          @endforeach
                      </select>
                  </div>

                  <div class="user-box">
                    <label for ="section_id">section_id</label>
                    <select name="section_id" class="form-control" id="section_id">
                       
                        @foreach ($sections as $section)
                            <option value="{{$section->id}}">
                                {{$section->section_title}}
                                
                            </option>
                        @endforeach
                    </select>
                </div>
                    
               
               
              
                   
                   
                           <pre>    <button type="submit">{{isset($emp_edit) ? "update" :"add"}}</button></pre> 
                    
                </form>
          
   </div>
   
  </body>
</html>

 

 --}}







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
    <h2> Add new employee </h2>
    <form   action=" {{route('employee.store')}}  " method="POST">
      @csrf
    
      <div class="user-box">
        <input type="string" name="name"   class =" @error ('name') is-invalid @enderror"  >
        @error ('name')

        <div class=" alert alert-danger"> {{$message}}</div>
     @enderror
        <label> name:</label>
      </div>
    
   

      <div class="user-box">
        <input type="string" name="gender" class =" @error ('gender') is-invalid @enderror"   >
        @error ('gender')

        <div class=" alert alert-danger"> {{$message}}</div>
     @enderror
        <label>Gender:</label>
      </div>

      <div class="user-box">
        <input type="date" name="date_of_birth" class =" @error ('date_of_birth') is-invalid @enderror"
       >
        @error ('date_of_birth')

        <div class=" alert alert-danger"> {{$message}}</div>
     @enderror
        <label>date_of_birh:</label>
      </div>
   
      <div class="user-box">
        <input type="date" name="hire_date" class =" @error ('hire_date') is-invalid @enderror"
        
        >
        @error ('hire_date')

        <div class=" alert alert-danger"> {{$message}}</div>
     @enderror
        <label>hire_date:</label>
      </div>
   
      <div class="user-box">
        <input type="string" name="education" class =" @error ('education') is-invalid @enderror"
 >
        @error ('education')

        <div class=" alert alert-danger"> {{$message}}</div>
     @enderror
        <label>education</label>
      </div>
      <div class="user-box">
        <input type="string" name="degree" class =" @error ('degree') is-invalid @enderror"
       >
        @error ('degree')

        <div class=" alert alert-danger"> {{$message}}</div>
     @enderror
        <label>degree</label>
      </div>
   
      <div class="user-box">
        <input type="string" name="address" class =" @error ('address') is-invalid @enderror"
     >
        @error ('address')

        <div class=" alert alert-danger"> {{$message}}</div>
     @enderror
        <label>address</label>
      </div>
    
      <div class="user-box">
        <input type="string" name="email" class =" @error ('email') is-invalid @enderror"
        >
        @error ('email')

        <div class=" alert alert-danger"> {{$message}}</div>
     @enderror
        <label>email</label>
      </div>
      <div class="user-box">
        <input type="integer" name="phon_number" class =" @error ('phon_number') is-invalid @enderror"
      >
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

















{{-- <body>
  <div class="login-box">
    <h2>  {{ isset($emp_edit)   ?"update":"Add new employee" }}</h2>
    <form   action="{{isset($emp_edit) ?  route ('employee.update',$emp_edit->id): route ('employee.store')  }} " method="POST"   
    >
      @csrf
      @method('PUT')
      <div class="user-box">
        <input type="string" name="name"   class =" @error ('name') is-invalid @enderror"  value=" {{ isset($emp_edit) ? "$emp_edit->name" : "" }}">
        @error ('name')

        <div class=" alert alert-danger"> {{$message}}</div>
     @enderror
        <label> name:</label>
      </div>
    
   

      <div class="user-box">
        <input type="string" name="gender" class =" @error ('gender') is-invalid @enderror"  value=" {{ isset($emp_edit) ? "$emp_edit->gender" : "" }}" >
        @error ('gender')

        <div class=" alert alert-danger"> {{$message}}</div>
     @enderror
        <label>Gender:</label>
      </div>

      <div class="user-box">
        <input type="date" name="date_of_birth" class =" @error ('date_of_birth') is-invalid @enderror"
        value=" {{ isset($emp_edit) ? "$emp_edit->date_of_birth" : "" }}">
        @error ('date_of_birth')

        <div class=" alert alert-danger"> {{$message}}</div>
     @enderror
        <label>date_of_birh:</label>
      </div>
   
      <div class="user-box">
        <input type="date" name="hire_date" class =" @error ('hire_date') is-invalid @enderror"
        value=" {{ isset($emp_edit) ? "$emp_edit->hire_date" : "" }}"
        >
        @error ('hire_date')

        <div class=" alert alert-danger"> {{$message}}</div>
     @enderror
        <label>hire_date:</label>
      </div>
   
      <div class="user-box">
        <input type="string" name="education" class =" @error ('education') is-invalid @enderror"
        value=" {{ isset($emp_edit) ? "$emp_edit->education" : "" }}">
        @error ('education')

        <div class=" alert alert-danger"> {{$message}}</div>
     @enderror
        <label>education</label>
      </div>
      <div class="user-box">
        <input type="string" name="degree" class =" @error ('degree') is-invalid @enderror"
        value=" {{ isset($emp_edit) ? "$emp_edit->degree" : "" }}">
        @error ('degree')

        <div class=" alert alert-danger"> {{$message}}</div>
     @enderror
        <label>degree</label>
      </div>
   
      <div class="user-box">
        <input type="string" name="address" class =" @error ('address') is-invalid @enderror"
        value=" {{ isset($emp_edit) ? "$emp_edit->address" : "" }}">
        @error ('address')

        <div class=" alert alert-danger"> {{$message}}</div>
     @enderror
        <label>address</label>
      </div>
    
      <div class="user-box">
        <input type="string" name="email" class =" @error ('email') is-invalid @enderror"
        value=" {{ isset($emp_edit) ? "$emp_edit->email" : "" }}">
        @error ('email')

        <div class=" alert alert-danger"> {{$message}}</div>
     @enderror
        <label>email</label>
      </div>
      <div class="user-box">
        <input type="integer" name="phon_number" class =" @error ('phon_number') is-invalid @enderror"
        value=" {{ isset($emp_edit) ? "$emp_edit->phon_number" : "" }}">
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
</body> --}}
