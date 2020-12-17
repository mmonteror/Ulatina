<?php
  get_file('controllers/employe/NavbarController');
  $navbar = new NavbarController();
  $navbar->auth();
  $name = $navbar->getName();
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">Project</a>
  </div>
  <ul class="nav navbar-right top-nav">
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-user"></i> <?php echo $name ?> <b class="caret"></b>
      </a>
      <ul class="dropdown-menu">
        <li><a href="../."><i class="fa fa-fw fa-home"></i> Home page</a></li>
        <li><a href="profile.php"><i class="fa fa-fw fa-user"></i> Edit profile</a></li>
        <li class="divider"></li>
        <li><a href="../controllers/LogoutController.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a></li>
      </ul>
    </li>
  </ul>
  
  <?php include 'sidebar.php'; ?>
</nav>