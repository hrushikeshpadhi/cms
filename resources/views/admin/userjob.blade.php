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
                        <h1 class="mt-4">Assign Job</h1>
                       
                          <div class="panel-body">

                          <div class="table-responsive">
                              <table id="application_grid" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>Sl No</th>
                                       <th>Company Name</th>
                                       <th>Assign Date</th>
                                       <th>Experience</th>
                                       <th>CTC</th>
                                       <th>Notice Period</th>
                                       <th>Location</th>
                                       <th>Assign User</th>
                                       <th>Job Description</th>
                                       <th>Traker</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                  <?php $i=1; ?>
                                   @foreach($jobs as $job)
                                    @if(($job->user_name == Auth::user()->name))
                                   <tr>
                                     <td>{{ $i++ }}</td>
                                     <td>{{ $job->compname }}</td>
                                     <td>{{ $job->assndate }}</td>
                                     <td>{{ $job->exprenc }}</td>
                                     <td>{{ $job->ctc }}</td>
                                     <td>{{ $job->noticperiod }}</td>
                                     <td>{{ $job->locn }}</td>
                                     <td>{{ $job->user_name }}</td>
                                     <td>{{ $job->description }}</td>
                                     <td><a href="{{ url('public/upload/'.$job->file) }}" download="{{ $job->file }}">{{ $job->file }}</a></td>
                                   </tr>
                                   @endif
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
                    $('#application_grid').DataTable( {searching: false, paging: true, 
                        info: false, scrollX: true,
                        lengthMenu: [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]]
                    });
            });
        </script>

 
</body>

</html> 
            