<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Administrative Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen"
          href="/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link href="/css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="/">
                    <img src="/images/logo.png" alt="image" style='width:30px;height:30px'>
                    USeP Dormitel Admin
                </a>
            </li>
            <li>
                <a href="{{ action('AdminController@index') }}">Latest Reservations Entered</a>
            </li>
            <li>
                <a href="{{ action('AdminController@confirmed') }}">Confirmed Reservations</a>
            </li>
            <li>
                <a href="{{ action('AdminController@cancelled') }}">Cancelled</a>
            </li>
            <li>
                <a href="{{ action('AdminController@finished') }}">Finished Reservations</a>
            </li>
            <li>
                <a href="#">Last 3 Months Report</a>
            </li>
            <li>
                <a href="#">Annual Report</a>
            </li>
            <li>
                <a href="/auth/logout">Logout</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    @yield('content')
            <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="/jquery/jquery-2.1.3.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>
<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>
