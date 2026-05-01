<!DOCTYPE html>
<!-- Coding by CodingLab || www.codinglabweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website with Login & Registration Form</title>
    <link rel="stylesheet" href="reg.css" />
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <div class="title">Registration</div>
      <div class="content">
        <form method="POST" action="/register_user" enctype="multipart/form-data">
          @csrf
          <div class="user-details">
            <div class="input-box">
              <span class="details">First Name</span>
              <input type="text" name="fname" placeholder="Enter your First name" style="border: 1px solid black" required>
            </div>
            <span>
              @error('fname')
                  {{$message}}
              @enderror
           </span>
           <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="lname" placeholder="Enter your Last name" style="border: 1px solid black" required>
            </div>
            <span>
              @error('fname')
                  {{$message}}
              @enderror
            </span>
            
            {{-- <div class="input-box">
              <span class="details">Role</span>
              <select name="role" id="role" class="form-control" style="border: 1px solid black">
                <option value="default">Select Role</option>
                <option value="Admin">Admin</option>
                <option value="User">User</option>
              </select>
            </div>
            <span>
              @error('role')
                  {{$message}}
              @enderror
           </span> --}}

           <div class="input-box">
            <span class="details">Profile Img</span>
            <input type="file" name="profileimg" id="profileimg" style="border: 1px solid black">
          </div>
          <span>
            @error('profileimg')
                {{$message}}
            @enderror
          </span>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" style="border: 1px solid black" required>
          </div>
          <span>
            @error('email')
                {{$message}}
            @enderror
         </span>
         <div class="input-box">
          <span class="details">Password</span>
          <input type="password" name="password" placeholder="Enter your password" style="border: 1px solid black" required>
          </div>
          <span>
          @error('password')
              {{$message}}
          @enderror
          </span>
            <div class="input-box">
              <span class="details">Security Que</span>
              <select name="securityque_type" id="role" class="form-control" style="border: 1px solid black">
                <option value="Select Security Question">Select Security Question</option>
                <option value="What is your Birth Date">What is your Birth Date</option>
                <option value="What is your future Dream">What is your future Dream</option>
                <option value="What is your Birth Place">What is your Birth Place</option>
              </select>
            </div>
            <span>
              @error('securityque_type')
                  {{$message}}
              @enderror
            </span>
            <div class="input-box">
              <span class="details">Security Ans</span>
              <input type="text" name="securityans_type" placeholder="Enter your username" style="border: 1px solid black" required>
            </div>
            <span>
              @error('securityans_type')
                  {{$message}}
              @enderror
            </span>
          </div>
          <div class="button">
            <input type="submit" value="Register">
            <p style="text-align: center;margin-top:15px">Already Have An Account? <a href="/login" class="my-3">Login Now..</a></p>
          </div>
        </form>
      </div>
    </div>

  </body>
</html>
