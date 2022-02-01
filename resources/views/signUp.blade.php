<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./css/sign-up.css" />
  <link href="./bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet" />
  <title>Humainvestor</title>
  <link rel="icon" type="image/x-icon" href="./favicon.ico">
</head>

<body>
  <div class="sign-up">
    <div class="row">
      <div class="col-md-6 right-bg d-none d-md-block padd-zero signup-desc-outer">
        <div class="signup-desc">
          <h1 class="title">Humainvestor</h1>
          <p class="desc">with Humainvestor, reveal your potential </br>
            or money make money trough other.</p>
        </div>
      </div>
      <div class="col-md-6 padd-zero">
        <div class="signup-form">
          <div class="heading-title">
            <h1>Humainvestor</h1>
            <h2>Create an account</h2>
            <form method="post" action="{{url('/postsignup')}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="d-flex justify-content-start m-0">First Name*</label>
                  <input type="text" value="{{ old('firstname')}}" class="form-control" name="firstname" id="firstname" placeholder="First Name">
                  <span class="text-danger d-flex justify-content-start">{{ $errors->first('firstname') }}</span>
                </div>
                <div class="col-md-6">
                  <label class="d-flex justify-content-start m-0">Last Name*</label>
                  <input type="text" value="{{ old('lastname')}}" class="form-control" name="lastname" id="lastname" placeholder="Last Name">
                  <span class="text-danger d-flex justify-content-start ">{{ $errors->first('lastname') }}</span>
                </div>
              </div>
              <div class="mb-3 row">
                <div class="col-12">
                  <label class="d-flex justify-content-start m-0">Nick Name</label>
                  <input type="text" class="form-control" name="nickname" id="nickname" placeholder="Nickname">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="d-flex justify-content-start m-0">Email*</label>
                  <input type="email" value="{{ old('email') }}" onchange="myFunction()" class="form-control" name="email" id="Email" placeholder="Email address">
                  <p class="text-danger" id="invalidemail" style="display:none;color:red;font-size: 14px;">Please enter a valid email address!</p>
                  <span class="text-danger d-flex justify-content-start">{{ $errors->first('email') }}</span>
                </div>
                <div class="col-md-6">
                  <label class="d-flex justify-content-start m-0">Confirm Email*</label>
                  <input type="email" value="{{ old('email') }}" onchange="confirmEmail()" class="form-control" name="conemail" id="conEmail" placeholder="Confirm Email address">
                  <p class="text-danger" id="notmatchemail" style="display:none;color:red;font-size: 14px;">Email does not match!</p>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="d-flex justify-content-start m-0">Phone*</label>
                  <input type="text" value="{{ old('phone')}}" name="phone" class="form-control" id="phone" placeholder="phone Number">

                  <span class="text-danger d-flex justify-content-start">{{ $errors->first('phone') }}</span>
                </div>
                <div class="col-md-6">
                  <label class="d-flex justify-content-start m-0">DOB</label>
                  <input type="date" class="form-control" id="dob" name="dob">
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="d-flex justify-content-start m-0">Password*</label>
                  <input type="password" onchange="passwordvalid()"   name="password" class="form-control" id="Password" placeholder="Password">
                  <p class="text-danger" id="passwordvalidate" style="display:none;text-align: initial;color:red;font-size: 14px;">
                    password must be a minimum of 8 characters including number, Upper, Lower And one special character
                  </p>

                  <span class="text-danger d-flex justify-content-start">{{ $errors->first('password') }}</span>
                </div>
                <div class="col-md-6">
                  <label class="d-flex justify-content-start m-0"> Confirm Password*</label>
                  <input type="password" onchange="confirmPassword()" class="form-control" id="conpassword" placeholder="Confirm Password">
                  <p class="text-danger" id="confirmpasswordvalidate" style="display:none;color:red;font-size: 14px;">Password does not match!</p>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Join Humainvestor</button>
            </form>
          </div>
          <div class="rigister-div d-flex justify-content-center mt-1">
            Already have an account?
            <a class="" href="/login">
              <p class="rigister">Login</p>
            </a>
          </div>
        </div>
      </div>
    </div>
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<script type="text/javascript">

  function myFunction(val) {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById('Email').value)) {
      document.getElementById("invalidemail").style.display = "none";
    } else {
      document.getElementById("invalidemail").style.display = "flex";
    }
  }

  function confirmEmail() {
    if (document.getElementById('Email').value != document.getElementById('conEmail').value) {
      document.getElementById("notmatchemail").style.display = "flex";
    } else {
      document.getElementById("notmatchemail").style.display = "none";
    }
  }

  function passwordvalid(){
    var regix = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    if (regix.test(document.getElementById('Password').value) == false) {
      document.getElementById("passwordvalidate").style.display = "flex";
    } else {
      document.getElementById("passwordvalidate").style.display = "none";
    }
  }
  
  function confirmPassword() {
    if (document.getElementById('Password').value != document.getElementById('conpassword').value) {
      document.getElementById("confirmpasswordvalidate").style.display = "flex";
    } else {
      document.getElementById("confirmpasswordvalidate").style.display = "none";
    }
  }
</script>