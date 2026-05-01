<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Security Que/Ans</title>
      <link rel="stylesheet" href="login.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="center">
         <div class="container">
            
            <div class="text">
              Security Que/Ans
            </div>
            <form action="/verify_security_answer" method="POST">
               @csrf
               <input type="hidden"  name="email" value="{{$user->email}}" placeholder="Enter Your Email">
               <div class="data">
                  <div class="label">Securityque Type</div>
               <input type="text" disabled name="securityque_type" value="{{$user->securityque_type}}">
                 
               </div>
               <div class="data">
                  <div class="label">Securityans Type</div>
                  <input type="text" name="securityans_type" placeholder="Enter Your Answer">
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit">Submit</button>
               </div>
              
            </form>
         </div>
      </div>
   </body>
</html>