<style>
  span{
    font-size: 12px;
  }
</style>
<html class="">
<title>signup</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|PT+Sans|Roboto|Roboto+Slab|Titillium+Web" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-6 order-2 order-lg-1">
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-2">Create An Account</p>
                <form class="mx-1 mx-md-6" method="post" action="{{url('/postsignup')}}" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="row">
                    <div class="d-flex col flex-row align-items-center mb-2">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" name="firstname" id="form3Example1c" class="form-control" data-required data-error-message="First Name is required" />
                        <label class="form-label" for="form3Example1c"> First Name</label><br>
                        <span class="text-danger ">{{ $errors->first('firstname') }}</span>
                      </div>
                    </div>
                    <div class="d-flex col flex-row align-items-center mb-2">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" name="lastname" id="form3Example1c" class="form-control" />
                        <label class="form-label" for="form3Example1c"> Last Name</label><br>
                        <span class="text-danger ">{{ $errors->first('lastname') }}</span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="d-flex col flex-row align-items-center mb-2">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" name="nickname" id="form3Example1c" class="form-control" />
                        <label class="form-label" for="form3Example1c"> Nick Name</label>
                      </div>
                    </div>
                    <div class="d-flex col flex-row align-items-center mb-2">
                    </div>
                  </div>

                  <div class="row">
                    <div class="d-flex col flex-row align-items-center mb-2">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="email" name="email" id="form3Example1c" class="form-control" />
                        <label class="form-label" for="form3Example1c"> Email</label><br>
                        <span class="text-danger ">{{ $errors->first('email') }}</span>
                      </div>
                    </div>
                    <div class="d-flex col flex-row align-items-center mb-2">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="email" name="conemail" id="form3Example1c" class="form-control" />
                        <label class="form-label" for="form3Example1c">Confirm Email</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="d-flex col flex-row align-items-center mb-2">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" name="phone" id="form3Example1c" class="form-control" />
                        <label class="form-label" for="form3Example1c"> Phone</label><br>
                        <span class="text-danger ">{{ $errors->first('phone') }}</span>
                      </div>
                    </div>
                    <div class="d-flex col flex-row align-items-center mb-2">

                    </div>
                  </div>

                  <div class="row">
                    <div class="d-flex col flex-row align-items-center mb-2">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" id="psw"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control" />
                        <label class="form-label" for="form3Example4c">Password</label><br>
                        <span class="text-danger ">{{ $errors->first('password') }}</span>
                      </div>
                    </div>

                    <div class="d-flex col flex-row align-items-center mb-2">
                      <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" id="conpsw"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  name="conpassword"   class="form-control" />
                        <label class="form-label" for="form3Example4cd">Repeat your password</label>
                      </div>
                    </div>
                  </div>

                  <!-- <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox"  value="" id="form2Example3c" />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div> -->
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">Join Humainvestor</button>
                  </div>
                </form>
              </div>
              <div class="col-md-10 col-lg-6 col-xl-6 d-flex align-items-center order-1 order-lg-2">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
