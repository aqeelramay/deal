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
  <link href="<?=base_url()?>frontend/assets/css/font-awesome.min.css" rel="stylesheet">
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
<div class="topbar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="visit-site">Visit Deal</div>
            </div>
            <div class="col-md-offset-8 col-md-2">
                <div class="admin-info text-center">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span class="glyphicon glyphicon-user"></span> <?=ucwords($this->session->userdata('admin_username'))?>
                            <span class="glyphicon glyphicon-menu-down"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="<?=base_url()?>ramay/dashboard/admin_setting">Admin Profile</a></li>
                            <li><a href="<?=base_url()?>ramay/dashboard/changePass">Change Password</a></li>
                            <li><a href="<?=base_url()?>ramay/dashboard/logout">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

