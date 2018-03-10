<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>todo program</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" >
  </head>
  <body>
<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand font-lg" href="index.php">ToDo Zibo</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar">
      <button class="btn btn-danger navbar-btn navbar-left">New ToDo</button>
      <ul class="nav navbar-nav">
          <li><a href="login.php">login</a></li>
          <li><a href="about.php">about</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
            <div class="input-group input-group-lg">
              <input type="text" class="form-control" name="" placeholder="search" value="">
              <div class="input-group-btn">
                <button type="button" class="btn btn-primary">
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </div>
            </div>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
