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
   <!-- add menu bar -->
  <?php include "menu.php" ?>

  <div class="container">
    <h2>login todo zibo</h2>
    <form action="/login.php">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="UserName" placeholder="Enter UserName" name="user">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
      <div class="checkbox">
        <label><input type="checkbox" name="remember"> Remember me</label>
      </div>
      <button type="submit" class="btn btn-warning">Submit</button>
    </form>
  </div>

  <script src="js/jquery-3.3.1.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </body>
</html>
