<?php
use App\Http\Controllers\productC;
$total=productC::cartItem();
?>
<nav class="navbar navbar-expand-lg" style="background-color: black">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Online Shopping</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item" style="margin: 10px;list-style: none">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item" style="margin: 10px;list-style: none">
                    <a class="nav-link" href="myOrders">Orders</a>
                </li>
            </ul>
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="search">
                </div>

            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/cartlist">cart({{$total}})</a></li>
                @if(Session::has('user'))
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')->name}}
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="logout">logout</a></li>
                    </ul>
                </li>
                @else
                    <li><a href="login">login</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
