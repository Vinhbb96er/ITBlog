<!DOCTYPE html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
   <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
   <!-- bootstrap-css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
   <!-- //bootstrap-css -->
   <!-- Custom CSS -->
   <link href="{{ asset('admin/css/style.css') }}" rel='stylesheet' type='text/css' />
   <link href="{{ asset('admin/css/style-responsive.css') }}" rel="stylesheet"/>
   <!-- font CSS -->
   <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
   <!-- font-awesome icons -->
   <link rel="stylesheet" href="{{ asset('admin/css/font.css') }}" type="text/css"/>
   <link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet">
   <!-- //font-awesome icons -->
</head>
<body>
   <div class="log-w3">
      
        <div class="w3layouts-main">
            <div>
                <h2>Register In Now</h2>

                <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @csrf

                    <div>
                        <input id="name" type="text" class="ggg{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="NAME">

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div>
                        <input id="email" type="email" class="ggg{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="E-MAIL">

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div>
                        <input id="password" type="password" class="ggg{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="PASSWORD">

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div>
                        <input id="password-confirm" type="password" class="ggg" name="password_confirmation" required placeholder="PASSWORD-CONFIRM">
                    </div>

                    <div>
                        <input type="submit" value="Register" name="Register"><p>Have an Account ? Login<a href="{{ route('login') }}">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
   </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="{{ asset('admin/js/jquery.dcjqaccordion.2.7.js') }}"></script>
   <script src="{{ asset('admin/js/scripts.js') }}"></script>
   <script src="{{ asset('admin/js/jquery.slimscroll.js') }}"></script>
   <script src="{{ asset('admin/js/jquery.nicescroll.js') }}"></script>
   <script src="{{ asset('admin/js/jquery.scrollTo.js') }}"></script>
</body>
</html>
