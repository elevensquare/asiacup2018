<?php
  include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <title> ACIA CUP 2018 </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="asiacup.css">
      <link rel="shortcut icon" href="https://timesofindia.indiatimes.com/thumb/msid-65667605,imgsize-22885,width-400,resizemode-4/65667605.jpg">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script  href="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>
   <body>
    <div class="container">
        <center> <h3 class="lead"> WHO WIN ACIA CUP 2018</h3></center>
        <center> <img  class="asiacup" src="https://timesofindia.indiatimes.com/thumb/msid-65667605,imgsize-22885,width-400,resizemode-4/65667605.jpg" > </center>
        <center> <h3 class="lead"> VOTE YOUR TEAM</h3></center>
        <form action="action.php" method="POST">
            <div class="form-group">
                <label for="name"></label>
                <ul class="team" >
                    <li> <img class="indlogo" src="https://logos-download.com/wp-content/uploads/2016/10/BCCI_logo.png" /> <input type="submit" class=" btn btn-success indbtn " name="ind"  value="vote"> </li><br>
                    <li> <img class="paklogo" src="https://cdn.bleacherreport.net/images/team_logos/328x328/pakistan_cricket.png" /> <input type="submit" class=" btn btn-success pakbtn " name="pak"  value="vote" ></li><br>
                </ul>
            </div>
        </form>
    </div>
    </body>
</html>
    