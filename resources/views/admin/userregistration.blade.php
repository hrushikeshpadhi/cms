<!DOCTYPE html>
<html lang="en">
    <head>

        <title>CMS</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="{{ URL :: to('/') }}/public/assets/css/style.css" rel="stylesheet" />
        <link href="{{ URL :: to('/') }}/public/assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
        
        <link href="{{ URL :: to('/') }}/public/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ URL :: to('/') }}/public/assets/css/bootstrap-select.css" />
       
    </head>

<body>

            @include('admin.layout.header')
            @include('admin.layout.sidebar')



<div id="layoutSidenav_content">
          @if(Session::has('flash_message_error'))
                <div class="alert alert-error alert-block">
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
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Register User/Personnel</h1>
                        
                        <div class="container-fluid agent-page">
                        	<div class="card border-0">
                        		<article class="card-body r-card">
                        			<form  enctype="multipart/form-data" action="{{url('user-registration')}}" method="post">
                                    {{csrf_field()}}
                                    	<div class="agent-details">
                                            <div class="registration writable">

                                               <div class="row ">
                                                  <div class="col-md-6">
                                                    <div class="f-flex">
                                                      <div class="f-label">
                                                        <label>First Name<span class="mandatory">*</span></label>
                                                      </div>
                                                      <div class="f-input">
                                                        <input id="fname" type="text" class="form-control" name="name" value="{{ old('name') }}"  autocomplete="name">
                                                        <p style="color:#F00">{{$errors->first('name')}}</p>
                                                       </div>
                                                    </div>
                                                   </div>
                                                 </div>
                                                 <div class="row ">
                                                	<div class="col-md-6">
                                                      <div class="f-flex">
                                                        <div class="f-label">
                                                          <label>Last Name<span class="mandatory">*</span></label>
                                                        </div>
                                                        <div class="f-input">
                                                           <input id="lname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}"  autocomplete="lastname">
                                                           <p style="color:#F00">{{$errors->first('lastname')}}</p>
                                                        </div>
                                                      </div>
                                                  </div> 
                                                </div>
                                                <div class="row ">
                                                  <div class="col-md-6">
                                                    <div class="f-flex">
                                                      <div class="f-label">
                                                        <label>Email<span class="mandatory">*</span></label>
                                                      </div>
                                                      <div class="f-input">
                                                         <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  autocomplete="email">
                                 
                                                       <p style="color:#F00">{{$errors->first('email')}}</p>
                                                       </div>
                                                    </div>
                                                   </div>
                                                 </div>
                                                 <div class="row">
                                                 	<div class="col-md-6">
                                                    <div class="f-flex">
                                                      <div class="f-label">
                                                        <label>Role<span class="mandatory">*</span></label>
                                                      </div>
                                                      <div class="f-input">
                                                        <select name="role_id[]"  id="role"  class="selectpicker" multiple >
                                                                @foreach($roles as $role)
                                                                <option value="{{$role->role_id}}" {{ (is_array(old('role_id')) and in_array($role->role_id, old('role_id'))) ? ' selected' : '' }}>{{$role->role_name}}</option>
                                                                @endforeach    
                                                             </select>
                                                            <p style="color:#F00">{{$errors->first('role_id')}}</p>
                                                       </div>
                                                    </div>
                                                   </div>
                                                 </div>
                                                 <div class="row ">
                                                  <div class="col-md-6">
                                                    <div class="f-flex">
                                                      <div class="f-label">
                                                        <label>Password<span class="mandatory">*</span></label>
                                                      </div>
                                                      <div class="f-input">
                                                        <input id="password" type="password" class="form-control" name="password"  autocomplete="new-password">
                                                       <p style="color:#F00">{{$errors->first('password')}}</p>
                                                       </div>
                                                    </div>
                                                   </div>
                                                 </div>
 
                                            </div>
                                    	</div>
                                    	<div style="overflow:auto;">
                                                <div style="float:right; margin-top: 5px;">
                                                  <button type="submit" class="btn btn-primary ">
                                                        {{ __('Register') }}
                                                    </button>
                                                </div>
                                         </div>
                                    </form>
                        		</article>
                        	</div>
                        </div>
                                   
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Paymetryx 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            
  
       
            <script src="{{ URL :: to('/') }}/public/assets/js/popper.min.js"></script>
            <script src="{{ URL :: to('/') }}/public/assets/js/jquery.min.js"></script>
            <script src="{{ URL :: to('/') }}/public/assets/js/bootstrap.min.js"></script> 
            <script src="{{ URL :: to('/') }}/public/assets/js/jquery.validate.min.js"></script>
            <script src="{{ URL :: to('/') }}/public/assets/js/scripts.js"></script>
            <script src="{{ URL :: to('/') }}/public/assets/js/all.min.js" crossorigin="anonymous"></script>
           
          <script src="{{ URL :: to('/') }}/public/assets/js/bootstrap-selectt.min.js"></script>
    
       <script>
          function setreportid(value){
                    
						var mgr_id= $( "#report_id option:selected" ).attr("mgrid"); 
						 $("#mangr_id").val(mgr_id);
						}
            
      </script>
            

</body>

</html>
 
