<html>
<head>
    <title>USeP Dormitel</title>
</head>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/datepicker.min.css"/>
<link rel="stylesheet" href="/css/datepicker3.min.css"/>

<style type="text/css">
    
    body {
        margin: 0;
        padding: 0;
        font-family: 'Lato', sans-serif;
    }

    .hero {
        height: 100vh;
        background-color: maroon;
        position: relative;
        overflow: hidden;
        margin-top: 70px;
    }

    .filler {
        height: 100px;
        background-color: maroon;
    }

    .logo {
        background: url('images/logo.png');
        background-size: auto 300px;
        background-repeat: no-repeat;
        background-position: top center;
        position: absolute;
        height: 300px;
        width: 100%;
        bottom: 50%;
        margin-top: -150px;
    }

    .description {
        font-weight: bold;
        text-transform: uppercase;
        font-size: 80px;
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -475px;
        margin-top: 50px;
        width: 950px;
        border: 5px solid rgba(255, 255, 255, 0.8);
        color: rgba(255, 255, 255, 0.8);
        padding: 10px 50px;
    }

    .hero {
        height: 100vh;
        background-color: maroon;
        position: relative;
        overflow: hidden;
    }

    .content {
        padding: 20px 230px;
        text-align: center;
        position: relative;
    }

    .filler {
        height: 100px;
        background-color: maroon;
    }

    .logo {
        background: url('/images/logo.png');
        background-size: auto 300px;
        background-repeat: no-repeat;
        background-position: top center;
        position: absolute;
        height: 300px;
        width: 100%;
        bottom: 50%;
        margin-top: -150px;
    }

    .description {
        font-weight: bold;
        text-transform: uppercase;
        font-size: 80px;
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -475px;
        margin-top: 50px;
        width: 950px;
        border: 5px solid rgba(255, 255, 255, 0.8);
        color: rgba(255, 255, 255, 0.8);
        padding: 10px 50px;
    }

    .footer-content {
        color: #cccccc;
        text-align: center;
        padding: 40px;
    }

</style>

<body>
@include('nav')

<script src="/jquery/jquery-2.1.3.js"></script>
<script src="/js/bootstrap335.min.js"></script>
<script src="/js/formValidation.min.js"></script>
<script src="/js/FormValidationFramework.js"></script>
<script src="/js/bootstrap-datepicker.min.js"></script>

@yield('tummy')
        <!--footer start here-->
<div class="filler footer-content">
    Copyright © 2016, Institute of Computing, All Rights
    Reserved. Privacy | Terms
    and
    Conditions
</div>


<script type="text/javascript">
    //Script for Parallax
    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        $('.logo').css({
            'transform': 'translate(0px, ' + scroll / 2 + '%)'
        });

        $('.description').css({
            'transform': 'translate(0px, ' + scroll / 8 + '%)'
        })//end for Parallax
    });
</script>
</body>
</html>
