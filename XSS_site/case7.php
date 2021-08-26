<!DOCTYPE html>
<html lang="en" ng-app>
  <head>
    <title>ChargeBee [Case 7]</title>
    <link rel="stylesheet" href="style/font-awesome.min.css">
    <link href="style/bootstrap.min.css" rel="stylesheet">
    <link href="style/front.css" rel="stylesheet">
    <script src="style/angular.min.js"></script>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="span4"><img class="center-block" src="http://d2jxbtsa1l6d79.cloudfront.net/static/app-static-assets/core/core-2.2.3/images/brand/cn-logotype-black.svg" alt="Marshmello" id="logo"></div>
        <div class="span4"></div>
      </div>

    <form role="search" action="" method="GET">
      <div class="row">
        <div class="col-xs-6">
          <div class="input-group">
            <input type="text" class="form-control" name="search" placeholder="Search">
            <span class="input-group-btn">
                    <button class="btn btn-primary" type="button"><i class="fa fa-microphone"></i></button>
                  </span>
          </div>
        </div>
      </div>
      <div class="btn-group-wrap">
        <div class="btn-group">
          <button type="submit" class="btn btn-primary"> Search</button>
        </div>
      </div>
      </form>

    <?php
      if (isset($_GET['search']) && !empty($_GET['search'])) {
        $search = htmlspecialchars($_GET['search']);
        echo "<h3>" . $search . " Not found</h3>";
      }
    ?>
  </body>
</html>