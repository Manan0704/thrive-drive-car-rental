<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Forget Password</title>
      <link rel="stylesheet" href="login.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="center">
         <div class="container">
            <div class="text">
              Forget Password
            </div>
            <form action="/verify_email" method="POST">
               @csrf
               <div class="data">
                  <label>Email</label>
                  <input type="text" name="email" value="{{old('email')}}">
               </div>
               <span>
                  @error('email')
                      {{$message}}
                  @enderror
               </span>
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit">Submit</button>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>