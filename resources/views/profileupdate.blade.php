<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile Update Form</title>
    <link rel="stylesheet" href="registerassets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    @php
      $user=session()->get('user');
    @endphp
    <div class="container">
      <header>Profile Update Form</header>
      <div class="progress-bar">
        <div class="step">
          <p>Name</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Role</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Contact</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Submit</p>
          <div class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      <div class="form-outer">
        <form action="/profile" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="page slide-page">
            <div class="title">Basic Info:</div>
            <div class="field">
              <div class="label">First Name</div>
              <input type="text" name="fname" placeholder="Enter Your First Name" value="{{$user->fname}}">
            </div>
            <div class="field">
              <div class="label">Last Name</div>
              <input type="text" name="lname" placeholder="Enter Your Last Name" value="{{$user->lname}}">
            </div>
            <div class="field">
              <button class="firstNext next">Next</button>
            </div>
          </div>

          <div class="page">
            <div class="title">Role & Img:</div>
            <div class="field">
              <div class="label">Role</div>
              <input type="text" name="role" placeholder="Enter Your First Name" value="{{$user->role}}">
            </div>
            <div class="field">
              <div class="label">Profile Image</div>
              <input type="file" name="profileimg" value="{{$user->profileimg}}">
            </div>
            <div class="field btns">
              <button class="prev-1 prev">Previous</button>
              <button class="next-1 next">Next</button>
            </div>
          </div>

          <div class="page">
            <div class="title">Contact Info:</div>
            <div class="field">
              <div class="label">Email</div>
              <input type="email" name="email" placeholder="Enter Your Email" value="{{$user->email}}">
            </div>
            <div class="field">
              <div class="label">Password</div>
              <input type="password" name="password" placeholder="Enter Your Password">
            </div>
            <div class="field btns">
              <button class="prev-2 prev">Previous</button>
              <button class="next-2 next">Next</button>
            </div>
          </div>

          <div class="page">
            <div class="title">Que/Ans:</div>
            <div class="field">
              <div class="label">Securityque Type</div>
              <select name="securityque_type">
                <option value="default">Select Que Type</option>
                @if (strcmp($user->securityque_type,"What is Your Birth Date")==0)
                  <option value="What is Your Birth Date" selected>What is Your Birth Date</option>  
                @else
                  <option value="What is Your Birth Date">What is Your Birth Date</option>
                @endif

                @if (strcmp($user->securityque_type,"What is Your Birth Place")==0)
                  <option value="What is Your Birth Place" selected>What is Your Birth Place</option>
                @else
                  <option value="What is Your Birth Place" >What is Your Birth Place</option>   
                @endif

                @if (strcmp($user->securityque_type,"What is Your Future Dreams")==0)
                  <option value="What is Your Future Dreams" selected>What is Your Future Dreams</option>
                @else
                  <option value="What is Your Future Dreams" >What is Your Future Dreams</option>                    
                @endif
              </select>
            </div>
            <div class="field">
              <div class="label">Securityans Type</div>
              <input type="text" name="securityans_type" placeholder="Enter Your Answer" value="{{$user->securityans_type}}">
            </div>
            <div class="field btns">
              <button class="prev-3 prev">Previous</button>
              <button class="submit">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="registerassets/script.js"></script>

  </body>
</html>


{{-- <!DOCTYPE html>
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

    @php
        $user=session()->get('user');
    @endphp
    
    <div class="container">
      <div class="title">Profile</div>
      <div class="content">
        <form method="POST" action="/profileupdate">
          @csrf
          <div class="user-details">
            <div class="input-box">
              <span class="details">Full Name</span>
              <input type="text" name="fullname" placeholder="Enter your name" value="{{$user->fullname}}" required>
            </div>
            <span>
              @error('fullname')
                  {{$message}}
              @enderror
           </span>
            <div class="input-box">
              <span class="details">Username</span>
              <input type="text" name="username" placeholder="Enter your username" value="{{$user->username}}" required>
            </div>
            <span>
              @error('username')
                  {{$message}}
              @enderror
           </span>
            <div class="input-box">
              <span class="details">Email</span>
              <input type="text" name="email" placeholder="Enter your email" value="{{$user->email}}" required>
            </div>
            <span>
              @error('email')
                  {{$message}}
              @enderror
           </span>
            <div class="input-box">
              <span class="details">Phone Number</span>
              <input type="text" name="mobileno" placeholder="Enter your number" value="{{$user->mobileno}}" required>
            </div>
            <span>
              @error('mobileno')
                  {{$message}}
              @enderror
           </span>
            <div class="input-box">
              <span class="details">Password</span>
              <input type="password" name="password" placeholder="Enter your password" required>
            </div>
            <span>
              @error('password')
                  {{$message}}
              @enderror
           </span>
           
          </div>
         <span class="address-title">Address</span>
          <div class="textarea">
            <textarea name="address" cols="20" rows="4" class="form-control" placeholder="Address write Here !!">{{$user->address}}</textarea>
          </div>
          <span>
            @error('address')
                {{$message}}
            @enderror
         </span>
          <div class="button">
            <input type="submit" value="Update">
          </div>
        </form>
      </div>
    </div>

  </body>
</html> --}}
