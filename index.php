<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Gate Code Logs">
    <meta name="author" content="Kris Occhipinti">

    <title>Gate Codes</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script src="libs/jquery.js"></script>
    <script src="libs/bootstrap.js"></script>
    <script src="js/main.js"></script>
    <!-- Custom styles for this template -->
    <style>
      .well{
        padding: 5px;
        margin-bottom: 5px;
      }

      hr{
        margin: 1px;
      }
      h3 {
          margin-top: 1px;
          margin-bottom: 1px;
      }
    </style>

    <?php include('fav.php');?>
  </head>

  <body>

    <div class="container">
        <h2>Gate Codes</h2>
        <form role="form" id="mainForm">
          <div class="form-group">
            <div class="row">
              <div class="col-lg-12">
                <label for="filter">Filter List:</label>
                <input type="text" class="form-control" name="filter" id="filter" placeholder="Filter">
              </div>
            </div>
          </div>
        </form>

        <div id="main"></div>
    </div> <!-- /container -->


  </body>
</html>

