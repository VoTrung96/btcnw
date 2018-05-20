<?php require_once $_SERVER['DOCUMENT_ROOT'].'/profile/function/dbconnect.php' ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/profile/function/checklogin.php' ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="/profile/templates/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/profile/templates/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="/profile/templates/admin/css/sb-admin.css" rel="stylesheet">
    <style type="text/css">
      .hidden{display: none}
    </style>

  </head>

  <body class="fixed-nav" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="#">Admin</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav">
          <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="/profile/admin/home.php">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">
                Dashboard</span>
            </a>
          </li>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profile">
            <a class="nav-link" href="/profile/admin/users/profile.php">
              <i class="fa fa-fw fa-user"></i>
              <span class="nav-link-text">
                My Profile</span>
            </a>
          </li>
          
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#skills">
              <i class="fa fa-fw fa-star"></i>
              <span class="nav-link-text">
                Skills</span>
            </a>
            <ul class="sidenav-second-level collapse" id="skills">
              <li>
                <a href="/profile/admin/skills/index.php"><i class="fa fa-bars"></i>My Skills</a>
              </li>
              <li>
                <a href="/profile/admin/skills/add.php"><i class="fa fa-plus"></i>Add</a>
              </li>
            </ul>
          </li>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#experience">
              <i class="fa fa-fw fa-bars"></i>
              <span class="nav-link-text">
                Experiences</span>
            </a>
            <ul class="sidenav-second-level collapse" id="experience">
              <li>
                <a href="/profile/admin/experiences/index.php"><i class="fa fa-bars"></i>My Experiences</a>
              </li>
              <li>
                <a href="/profile/admin/experiences/add.php"><i class="fa fa-plus"></i>Add</a>
              </li>
            </ul>
          </li>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Contact">
            <a class="nav-link" href="/profile/admin/contact/index.php">
              <i class="fa fa-fw fa-envelope"></i>
              <span class="nav-link-text">
                Contact</span>
            </a>
          </li>


        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>
              Logout</a>
          </li>
        </ul>
      </div>
    </nav>