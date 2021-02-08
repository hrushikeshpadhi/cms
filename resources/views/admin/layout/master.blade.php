
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
        <link rel="stylesheet" href="{{ URL :: to('/') }}/public/assets/css/daterangepicker.css" />
       
    </head>

<body>

            @include('admin.layout.header')
            @include('admin.layout.sidebar')
            @yield('content')
           

            <script src="{{ URL :: to('/') }}/public/assets/js/popper.min.js"></script>
            <script src="{{ URL :: to('/') }}/public/assets/js/jquery.min.js"></script>
            <script src="{{ URL :: to('/') }}/public/assets/js/bootstrap.min.js"></script> 
            <script src="{{ URL :: to('/') }}/public/assets/js/jquery.validate.min.js"></script>
            <script src="{{ URL :: to('/') }}/public/assets/js/scripts.js"></script>

            <script type="text/javascript" src="{{ URL :: to('/') }}/public/assets/js/moment.min.js"></script>
            <script type="text/javascript" src="{{ URL :: to('/') }}/public/assets/js/daterangepicker.min.js"></script>
            
</body>

</html>