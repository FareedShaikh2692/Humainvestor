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
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/login.css" />
    <link href="http://127.0.0.1:8000/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet" />

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
                        <h2>Reset Password</h2>
                        <span class="text-danger" style="font-size: 13px;text-align: initial;">{{ $errors->first('error')}}</span>
                        <form method="POST" action="{{url('/reset_password')}}">
                            @csrf
                            <input id="invisible_id" name="reset_token" type="hidden" value="{{$token}}">

                            <div class="mb-3">
                                <label for="Motdepasse" class="form-label d-flex justify-content-start">Password</label>
                                <input type="password" onchange="passwordvalid()" name="password" class="form-control" id="Password" placeholder="Enter Password">
                                <p class="text-danger " id="passwordvalidate" style="display:none;text-align: initial;color:red;font-size: 14px;">
                                    password must be a minimum of 8 characters including number, Upper, Lower And one special character
                                </p>
                                <span class="text-danger d-flex justify-content-start">{{ $errors->first('password') }}</span>
                            </div>
                            <div class="mb-3">
                                <label for="Motdepasse" class="form-label d-flex justify-content-start">Confirm Password</label>
                                <input type="password" onchange="confirmPassword()" name="conpassword" class="form-control" id="conpassword" placeholder="Enter Password">
                                <p class="text-danger" id="confirmpasswordvalidate" style="display:none;color:red;font-size: 14px;">Password does not match!</p>
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
        <script src="http://127.0.0.1:8000/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<script type="text/javascript">
    function passwordvalid() {
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