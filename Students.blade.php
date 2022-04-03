<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://parsleyjs.org/src/parsley.css" />

</head>
    <body>
    
    <div class="container">
     
    <h1 class="text-center">A. Student Details </h1>
    <form action="students" method="POST" id="form"> 
        @csrf
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Name(Legal/Official) :</label>
                <div class="col-sm-8"> 
                    <input type="text" class="form-control "name="StudentsName"  placeholder="Enter your name" required data-parlesy-pattern="[a-zA-Z]+$" data-parsley-trigger="keyup/> 
                    <span style="color : red">@error('StudentsName'){{$message}}@enderror</span><br>
                </div>
            
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Matric No  :</label>
                <div class="col-sm-8"> 
                     <input type="text" class="form-control" name="MatricNo" placeholder="Enter your matric number" required data-parsley-pattern="[0-9]+$" required data-parsley-length="[7,7]" data-parsley-trigger="keyup/"> 
                     <span style="color : red">@error('MatricNo'){{$message}}@enderror</span><br>
                 </div>
             
        </div>

         <div class="form-group row">   
            <label class="col-sm-2 col-form-label">Current Address  :</label>
                <div class="col-sm-8"> 
                    <textarea name="CurrentAdd" class="form-control" cols="10" rows="10" placeholder="Enter your current address"required data-parlesy-pattern="[a-zA-Z]+$" data-parsley-trigger="keyup/"></textarea>
                    <span style="color : red">@error('CurrentAdd'){{$message}}@enderror</span><br>
            
                </div>
        </div>
             
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Home Address  :</label>
                 <div class="col-sm-8"> 
                    <textarea name="HomeAdd" class="form-control" cols="10" rows="10" placeholder="Enter your home address" required data-parlesy-pattern="[a-zA-Z]+$" data-parsley-trigger="keyup/"></textarea>
                    <span style="color : red">@error('HomeAdd'){{$message}}@enderror</span><br>
            
                </div>
        </div> 
            
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email (Gmail Account)  :</label>
                 <div class="col-sm-8"> 
                     <input type="email" class="form-control" name="Email" placeholder="Enter your email address"required data-parlesy-type="email" data-parsley-trigger="keyup"/> 
                     <span style="color : red">@error('Email'){{$message}}@enderror</span><br> 
                    
            
                </div> 
        </div> 

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Mobile Phone No  :</label>
                <div class="col-sm-8"> 
                    <input type="text" class="form-control" name="PhoneNo" placeholder="Enter your Phone no" required data-parsley-pattern="[0-9]+$" required data-parsley-length="[10,11]" data-parsley-trigger="keyup"/> 
                    <span style="color : red">@error('PhoneNo'){{$message}}@enderror</span><br> 
            
                 </div> 
        </div>  
        
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Home Phone No (Emergency)  :</label>
                <div class="col-sm-8"> 
                    <input type="text" class="form-control" name="HomeNo" placeholder="Enter your Home Phone no" required data-parsley-pattern="[0-9]+$" required data-parsley-length="[10,11]" data-parsley-trigger="keyup"/> 
                    <span style="color : red">@error('HomeNo'){{$message}}@enderror</span><br> 
                </div>
        </div> 
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
<script>
    $('#form').parsley();
  </script>
    </body>
</html>