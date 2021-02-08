<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
   <!--css-->
  <link rel="stylesheet" href="{{ URL :: to('/') }}/public/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ URL :: to('/') }}/public/assets/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--js-->
  <script src="{{ URL :: to('/') }}/public/assets/js/jquery.min.js"></script>
  <script src="{{ URL :: to('/') }}/public/assets/js//bootstrap.min.js"></script>
</head>
<body>
    <div id="main-wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark   bg-col">
            <div class="container">
              <a class="login-logo" href="#"><img src="{{ URL :: to('/') }}/public/assets/img/winvest-footer.png" height="50" alt=""></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              
            </div>
        </nav>
        <section id="v-banner">
          <div class="v-innner">
            <div class="card2 form-box border-0 px-4 py-5">
                 <div class="login-logo">
                     <h3>Candidate Management System</h3>
                 </div>
                <div class="login-sec">
                  @if(Session::has('flash_message_error'))
                <div class="alert alert-error alert-block" style="color:#F00">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                    </button>
                <strong>{{ session('flash_message_error') }}</strong>
                </div>
                @endif
                @if(Session::has('flash_message_success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                    </button>
                <strong>{{ session('flash_message_success') }}</strong>
                </div>
                @endif
                    <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
                      @csrf
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email" autofocus placeholder="Email" onKeyUp="fetchrole(this.value)">
                             <span id="errormsg"></span>
                   
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                            </div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                    
                               @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                            </div>
                             <select class="form-control" id="role" name="roleid" >
                        
                             </select>
                        </div>
                        <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline"> 
                         <!--<input id="chk1" type="checkbox" name="chk" class="custom-control-input">
                         <label for="chk1" class="custom-control-label text-sm">Remember me</label>-->
                         
                         <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="custom-control-label text-sm" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                        </div> 
                         @if (Route::has('password.request'))
                            <a class="ml-auto mb-0 text-sm" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                     <div class="row mb-3 px-3"> 
                         <button type="submit" class="btn login_btn ml-auto text-center">
                            {{ __('Login') }}
                        </button>
                     </div>
                        
                    </form>
                </div>
            </div>
          </div> 
        </section>

        <footer class="page-footer font-small  bg-col ">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
               
                <a title="Winvest Technology Consultancy Services Pvt Ltd" href="https://winvest-global.com/"><img src="{{ URL :: to('/') }}/public/assets/img/winvest-footer.png" alt="Winvest Technology Consultancy Services Pvt Ltd"></a>
                Copyright @2020  All Rights Reserved.
              </div>
              <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                <ul class="list-inline mb-0">
                  <li class="list-inline-item mr-3">
                    <a href="https://twitter.com/WinvestGlobal" target="_blank">
                      <i class="fa fa-twitter-square fa-2x fa-fw"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://www.linkedin.com/company/13246828" target="_blank">
                      <i class="fa fa-linkedin fa-2x fa-fw"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
    </div>

</body>
  <script>
        function fetchrole(email){
    
          if(email != ''){
           var _token = $('input[name="_token"]').val();
             $.ajax({
              url:"{{ route('login.fetchrole') }}",
              method:"POST",
              data:{
                "_token":"{{csrf_token()}}",
                email:email,
                },
               success:function(data){
                $('#role').empty();
                     $.each(data,function(key,value){
                       $('#role')
                        .append($("<option></option>")
                              .attr("value", value.role_id)
                              .text(value.role_name));

                           });
               
                  }
             });
           }
         }  
  </script>
</html> 

