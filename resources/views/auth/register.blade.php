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

  <style type="text/css">
      
      .login-card form {
  max-width: 626px !important;
}


  </style>
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
            <div class="card-body ">
           
                
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row">
                    
                       <div class="col-md-6">
                        <div class="form-group">
                    <x-jet-label value="{{ __('Name') }}" />

                    <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                                 :value="old('name')" required autofocus autocomplete="name" />
                    <x-jet-input-error for="name"></x-jet-input-error>
                </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                    <x-jet-label value="{{ __('Last Name') }}" />

                    <x-jet-input class="{{ $errors->has('lastname') ? 'is-invalid' : '' }}" type="text" name="lastname"
                                 :value="old('lastname')" required autofocus autocomplete="lastname" />
                    <x-jet-input-error for="lastname"></x-jet-input-error>
                </div>

                    </div>

                </div>


                 
                    
                
                <div class="form-group">
                    <x-jet-label value="{{ __('Email') }}" />

                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                                 :value="old('email')" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>


                 <div class="form-group">
                    <x-jet-label value="{{ __('Company') }}" />

                    <x-jet-input class="{{ $errors->has('company') ? 'is-invalid' : '' }}" text="company" name="company"
                                 :value="old('company')" required />
                    <x-jet-input-error for="company"></x-jet-input-error>
                </div>


                <div class="form-group">
                    <x-jet-label value="{{ __('Password') }}" />

                    <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                                 name="password" required autocomplete="new-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="form-group">
                    <x-jet-label value="{{ __('Confirm Password') }}" />

                    <x-jet-input class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <x-jet-checkbox id="terms" name="terms" />
                            <label class="custom-control-label" for="terms">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                            </label>
                        </div>
                    </div>
                @endif


                 <div class="d-grid gap-2">
                        <x-jet-button>
                            {{ __('Register') }}
                        </x-jet-button>
                </div>


                
            </form>

            
               
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
