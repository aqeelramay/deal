<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Deal</title>

  <!-- Bootstrap -->
  <link href="<?=base_url()?>frontend/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>backend/assets/css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="login_wraper">
        <div class="login_container">
            <div class="login_box">
            <h3 class="text-center">Login</h3>
          <form>
            <div class="form-group">
              <label for="admin_username">Username<span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="admin_username" placeholder="">
            </div>
            <div class="form-group">
              <label for="admin_password">Password<span class="text-danger">*</span></label>
              <input type="password" class="form-control" id="admin_password" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </form>
            </div>
        </div>
    </div>
</body>
<!-- <div class="admin_login_cont">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-md-offset-3">
        <div class="login_cont">
          <h3 class="text-center">Login</h3>
          <form>
            <div class="form-group">
              <label for="admin_username">Username<span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="admin_username" placeholder="">
            </div>
            <div class="form-group">
              <label for="admin_password">Password<span class="text-danger">*</span></label>
              <input type="password" class="form-control" id="admin_password" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?=base_url()?>frontend/assets/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?=base_url()?>frontend/assets/js/bootstrap.min.js"></script>
</body>
</html>