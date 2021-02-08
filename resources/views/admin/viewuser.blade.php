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
        <link href="{{ URL :: to('/') }}/public/assets/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
       
        <link href="{{ URL :: to('/') }}/public/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ URL :: to('/') }}/public/assets/css/bootstrapt.css">
        <link rel="stylesheet" href="{{ URL :: to('/') }}/public/assets/css/dataTables.bootstrap4.min.css">
       
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
                        <h1 class="mt-4">View User</h1>
                    

          <div class="panel-body">
							<div class="table-responsive">
                              <table id="userview_grid" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>Sl No</th>
                                       <th>First Name</th>
                                       <th>Last Name</th>
                                       <th>Email</th>
                                       <th>Role</th> 
                                     </tr>
                                 </thead>
                                 <tbody>
                                  <?php $i=1; ?>
                                   @foreach($users as $user)
                                    @php
                                     $roles=explode(',', $user->role_id);
                                    @endphp
                                   <tr>
                                     <td>{{ $i++ }}</td>
                                     <td>{{ $user->name }}</td>
                                     <td>{{ $user->lastname }}</td>
                                     <td>{{ $user->email }}</td>
                                     <td>
                                       @foreach($roles as $key=>$role)
                                       {{ $roleArr[$role]}} @if(sizeof($roles)!=($key+1)) , @endif
                                       @endforeach
                                      </td>
                                    
                                   </tr>
                               
                                   @endforeach
                                 
                                 </tbody>
                              </table>
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
            <script src="{{ URL :: to('/') }}/public/assets/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
            <script src="{{ URL :: to('/') }}/public/assets/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

            <script>
	            $(document).ready(function() {
	                    $('#userview_grid').DataTable( {searching: true, paging: true, 
	                        info: false, scrollX: true,
	                        lengthMenu: [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]]
	                    });
	            });


          </script>

 
</body>

</html> 
            