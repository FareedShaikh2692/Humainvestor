<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
     
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/login.css" />
    <link href="./bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet" />

    <title>Humainvestor</title>
  </head>
  <body>
    <div class="login">
      <div class="row">
        <div class="col-md-6 right-bg d-none d-md-block padd-zero login-desc-outer">
          <div class="login-desc">
            <h1 class="title">Humainvestor</h1>
            <p class="desc">with Humainvestor, reveal your potential </br>
              or money make money trough other.</p>
          </div>
        </div>
        <div class="col-md-6 padd-zero">
          <div class="signup-form">
            <div class="heading-title">
            <h1>Humainvestor</h1>
            <h2>Forget Password</h2>
          </div>
          <span class="text-success" style="font-size: 14px;">{{ $errors->first('approve')}}</span>
          <form method="POST" action="{{url('/postforgetpassword')}}">
          @csrf
            <div class="mb-3">
              <label for="Email" class="form-label">Email</label>
              <input type="email" onchange="myFunction()" value="{{ old('email') }}" name="email" class="form-control" id="Email" placeholder="Email">
              <p id="invalidemail"style="display:none;color:red;font-size: 14px;">Please enter a valid email address!</p>
              <span class="text-danger ">{{ $errors->first('email') }}</span>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>            
            <div class="rigister-div">
              <a href="signup">
                <p class="rigister">don't have a account? Sign in </p>
              </a>
            </div>  
          </form>
          </div>
        </div>
      </div>
      <div class="about">
        <div class="row">
          <div class="col-12">
            <p class="desc">Humainvestor, is the first ssocial network that allows all IT user
              to earn money, wheather you are acelebrity , a content creator, or a normal user
            </p>
            <button type="button" class="btn btn-primary">About Humainvestor</button>
          </div>
        </div>
      </div>
    </div>
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<script type="text/javascript">
function myFunction(val) {
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById('Email').value))
  {
    console.log(document.getElementById('Email').value)
    document.getElementById("invalidemail").style.display="none";
  }else{
    document.getElementById("invalidemail").style.display="block";
  }
}
 </script> 