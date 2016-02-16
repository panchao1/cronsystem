<!DOCTYPE html>
<html class="login-bg">
<head>
    <title>Sina Video - CTS</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/resource/css/bootstrap.css" rel="stylesheet" />
    <link href="/resource/css/bootstrap-theme.css" rel="stylesheet"/>
    <link href="/resource/css/bootstrap-responsive.css" rel="stylesheet" />
    <link href="/resource/css/bootstrap-overrides.css" type="text/css" rel="stylesheet" />
    <link href="/resource/css/login.css" type="text/css" rel="stylesheet" media="screen" />
</head>
<body>
<br/><br/><br/><br/><br/>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-body center">
          <h3 align="center"><?php echo $message; ?></h3>
          <hr/>
          <div align="center">
            <a class="btn btn-danger btn-big"  href="<?php echo URL::site($redirect); ?>"> 返回>> </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">setTimeout('(function(uri) {location.href = uri;})("<?php echo URL::site($redirect); ?>")', <?php echo $timeout * 1000; ?>);</script>
</body>
</html>