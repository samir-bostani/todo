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
      <a class="navbar-brand" href="#">Gallory Picture</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#"></a></li>

      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">fdssdfs</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
    <div  id="mycarousel" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">
        <li  data-target="#mycarousel" data-slide-to="0" class="active"></li>
        <li  data-target="#mycarousel" data-slide-to="1" ></li>
      </ol>

      <div class="carousel-inner">
        <div class="item active">
         <img  src="img/img_01.jpg" alt="no pic" >
         <div class="carousel-caption">
           <h3>pic 1</h3>
         </div>
        </div>

        <div class="item">
         <img  src="img/img_02.jpg" alt="no pic" >
         <div class="carousel-caption">
           <h3>pic 1</h3>
         </div>
        </div>
      </div>

        <a href="#mycarousel" class="left carousel-control" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a href="#mycarousel" class="right carousel-control" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>


  </div>
</div>
<br>
    <div class="container">
      <div class="input-group input-group-lg">
        <input type="text" class="form-control" name="" placeholder="search" value="">
        <div class="input-group-btn">
          <button type="button" class="btn btn-primary">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </div>
      </div>
      </div>


    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
