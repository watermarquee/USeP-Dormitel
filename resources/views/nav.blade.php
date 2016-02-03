<style type="text/css" media="screen">

    .nav {
        padding: 25px 220px;
        background-color: black;
        position: relative;
    }

    .menu {
        margin: 0;
        display: inline-block;
        float: right;
    }

    .item {
        margin-left: 50px;
        display: inline-block;
    }

    li.item a {
        font-size: 14px;
        cursor: pointer;
        text-decoration: none;
        color: #cccccc;
    }

    li.item a:hover {
        color: #cccccc;
        padding-bottom: 3px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.5);
    }

    a:after {
        content: "";
        display: table;
        clear: both;
    }

</style>

<nav class="nav">
    <ul class="menu">
        <li class="item"><a href="/home">Home</a></li>
        <li class="item"><a href="/rooms">Dormitel Rooms</a></li>
        @if(Auth::check())
            <li class="item"><a href="/auth/logout">Logout</a></li>
        @else
            <li class="item"><a href="/auth/login">Login</a></li>
        @endif
    </ul>
</nav>
@yield('content')
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script type="text/javascript">
    $(function () {

        var $sidebar = $("#nav"),
                $window = $(window),
                offset = $sidebar.offset(),
                topPadding = 15;

        $window.scroll(function () {
            if ($window.scrollTop() > offset.top) {
                $sidebar.stop().animate({
                    marginTop: $window.scrollTop() - offset.top + topPadding
                });
            } else {
                $sidebar.stop().animate({
                    marginTop: 0
                });
            }
        });

    });