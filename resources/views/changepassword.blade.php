<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Change Password</title>
      <link rel="stylesheet" href="login.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="center">
         <div class="container">
            
            <div class="text">
              Change Password
            </div>
            <form action="/changepass_user" method="POST" enctype="multipart/form-data">
               @csrf
               <div class="data">
                <label>Old Password</label>
                <input type="password" name="old_password">
              </div>
              <span>
                  @error('old_password')
                      {{$message}}
                  @enderror
              </span>
               <div class="data">
                  <label>New Password</label>
                  <input type="password" name="new_password">
               </div>
               <span>
                  @error('new_password')
                      {{$message}}
                  @enderror
               </span>
               <div class="data">
                <label>Retype Password</label>
                <input type="password" name="confirm_password">
             </div>
             <span>
                @error('confirm_password')
                    {{$message}}
                @enderror
             </span>
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit">Submit</button>
               </div>
               {{-- <div class="signup-link">
                  Not a member? <a href="/register">Register</a>
               </div> --}}
            </form>
         </div>
      </div>
   </body>
</html>
