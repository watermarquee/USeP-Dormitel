<style type="text/css" media="screen">

    .nav {
        padding: 25px 220px;
        background-color: black;
        position: fixed;
        top: 0;
        z-index: 100;
        width: 100%;
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
    </ul>
</nav>
