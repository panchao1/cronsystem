<!DOCTYPE html>
<html class="login-bg">
<head>
    <title>Cron Task System - CTS</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/resource/css/bootstrap.css" rel="stylesheet" />
    <link href="/resource/css/bootstrap-theme.css" rel="stylesheet"/>
    <link href="/resource/css/bootstrap-responsive.css" rel="stylesheet" />
    <link href="/resource/css/bootstrap-overrides.css" type="text/css" rel="stylesheet" />
    <link href="/resource/css/login.css" type="text/css" rel="stylesheet" media="screen" />
</head>
<body>
    <div class="row-fluid login-wrapper">
        <h2 style="color:white">欢迎登录CTS</h2>
        <div class="span4 box">
            <div class="content-wrap">
                <h6></h6>
                <form role="form" action="<?php echo URL::site('author/login');?>" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" name="username" id="username" placeholder="请输入账号">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" id="password" placeholder="请输入密码">
                </div>
                <div class="remember">
                    <input id="remember-me" type="checkbox" name="remember" value="1" />
                    <label for="remember-me">记住我</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
                </form>
            </div>
        </div>
        <div class="span4 no-account">
            <p>Copyright © 2016  Pan.Chao</p>
        </div>
    </div>
</body>
</html>
