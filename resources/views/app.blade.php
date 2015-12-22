<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel App</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
    <div class="container" >
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Laravel5</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">主页</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li>
                        <!-- Large button group -->
                        <div class="btn-group">
                            <div  class="" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <h3> {{ Auth::user()->name }} <span class="caret"></span></h3>
                            </div>
                            <ul class="dropdown-menu">
                                <li><a role="menuitem" href="/user/avatar"><i class="fa fa-user"></i>更换头像</a></li>
                                <li><a role="menuitem" href="#"><i class="fa fa-cog"></i>更换密码</a></li>
                                <li><a role="menuitem" href="#"><i class="fa fa-heart"></i>特别感谢</a></li>
                                <li><a role="menuitem" href="/logout"><i class="fa fa-sign-out"></i>退出登录</a></li>
                            </ul>
                        </div>

                    </li>
                    <li><img src="{{ Auth::user()->avatar }}" class="img-circle"  alt="45"></li>
                @else
                    <li><a href="/users/login">登录</a></li>
                    <li><a href="/users/register">注册</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
@yield('content');
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.js"></script>
<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.css" rel="stylesheet">
<link href="http://apps.bdimg.com/libs/bootstrap-glyphicons/1.0/css/bootstrap-glyphicons.css" rel="stylesheet">


</body>
</html>