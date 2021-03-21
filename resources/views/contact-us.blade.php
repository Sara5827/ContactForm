<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Contact Us</title>
</head>
<body>
    <div class="container">
        @if(Session::has('message_sent'))
        <div class="alert alert-success" role="alert"> 
           {{Session::get('message_sent')}}
        </div>


        @endif
    <form class="d-flex flex-column row g-3 needs-validation" action="{{route('contact.send')}}" novalidate>
            <div class="col-md-4">
                <label for="validationCustom01" for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="validationCustom01" value="Mark" required>
            <div class="valid-feedback">

            <div class="col-md-4">
                <label for="validationCustomUsername" for="email" class="form-label">Email</label>
              <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" name="email" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
              </div>
            </div>
            
            <div class="col-md-4">
              <label for="validationCustom02" for="subject" class="form-label">Subject</label>
              <input type="text" class="form-control" name="subject" id="validationCustom02" value="Otto" required>
            </div>
            
            <div class="col-md-4">   
              <div class="mb-3">
                <label for="validationTextarea" for="msg" class="form-label">Description</label>
                <textarea class="form-control is-invalid" id="validationTextarea" name="msg" placeholder="Required example textarea" required></textarea>
                <div class="invalid-feedback">
                  Please enter a message in the textarea.
                </div>
              </div>
            </div>
           
        
         
       
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Submit</button>
            </div>
          </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>