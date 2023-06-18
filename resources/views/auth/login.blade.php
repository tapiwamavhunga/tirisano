<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login to Tirisano</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.bootstrapdash.com/demo/login-template-free-2/assets/css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="https://www.bootstrapdash.com/demo/login-template-free-2/assets/images/login.jpg" alt="login" class="login-card-img">
            
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
              </div>
              <p class="login-card-description">Sign into your account</p>
             @if (session('status'))
                <div class="alert alert-success mb-3 rounded-0" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf


                <x-jet-input class="{{ $errors->has('identifier_id') ? 'is-invalid' : '' }}" type="identifier_id"
                                 name="identifier_id" :value="old('identifier_id')" hidden />


                <div class="form-group">
                    <x-jet-label value="{{ __('Email') }}" />

                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email"
                                 name="email" :value="old('email')" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>

                <div class="form-group">
                    <x-jet-label value="{{ __('Password') }}" />

                    <x-jet-input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"
                                 name="password" required autocomplete="current-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <label class="custom-control-label" for="remember_me">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>


                <div class="d-grid gap-2">
                        <x-jet-button>
                            {{ __('Log in') }}
                        </x-jet-button>
                </div>


                <div class="mb-0">
                    <div class="d-flex justify-content-left align-items-baseline mt-3">
                        @if (Route::has('password.request'))
                            <a class="text-muted mr-3" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        
                    </div>
                </div>
            </form>
              <p class="mt-3 mb-0">
                Don't have an account?
                <a class="text-primary" href="/register">Sign up</a>
              </p>
               
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
