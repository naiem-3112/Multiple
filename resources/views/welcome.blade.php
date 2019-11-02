<!DOCTYPE html>
<html lang="en">
<head>
    <title>TMS Admin Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="adminlogin/image/png" href="adminlogin/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminlogin/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminlogin/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminlogin/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminlogin/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminlogin/css/util.css">
    <link rel="stylesheet" type="text/css" href="adminlogin/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="adminlogin/images/img-01.png" alt="IMG">
            </div>

            <form class="login100-form validate-form" action="{{ route('student.login') }}" method="post">
                @csrf
                <span class="login100-form-title">
						Admin Login
					</span>
                @if(Session::has('error'))
                    <strong style="color: red">{{ Session::get('error') }}</strong>
                @endif


                <div class="wrap-input100 ">
                    <input class="input100" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                    @if($errors->has('email'))
                        <strong style="color: red">{{ $errors->first('email') }}</strong>
                    @endif

                </div>

                <div class="wrap-input100">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    @if($errors->has('password'))
                        <strong style="color: red">{{ $errors->first('password') }}</strong>
                    @endif
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        <a href="">Login</a>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<!--===============================================================================================-->
<script src="adminlogin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="adminlogin/vendor/bootstrap/js/popper.js"></script>
<script src="adminlogin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="adminlogin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="adminlogin/vendor/tilt/tilt.jquery.min.js"></script>
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="adminlogin/js/main.js"></script>

</body>
</html>
