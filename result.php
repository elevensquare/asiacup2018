<?php
  include('config.php');
?>
<?php 
    $get_votes ="SELECT * FROM asiacup where id=2";
    $run_votes = mysqli_query($link, $get_votes);
    $row = mysqli_fetch_array ($run_votes);
    $ind =$row ['ind'];
    $pak =$row ['pak'];
    $count= $ind + $pak;
    $per_ind= round(($ind*100)/$count). "%";
    $per_pak= round(($pak*100)/$count). "%";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <title> ACIA CUP 2018</title>
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
        <center> <img  class="asiacup" src="https://timesofindia.indiatimes.com/thumb/msid-65667605,imgsize-22885,width-400,resizemode-4/65667605.jpg" > </center>
        <div class=" result">
            <center> <h3 >Total votes <?php echo $count; ?></h3></center>
            <center> INDIA  votes <?php echo $ind; ?> <br> <?php echo $per_ind ?></center>
            <div class="progress" style="width:auto; height:25px ; ">
                <div class="progress-bar progress-bar-success" role="progressbar" 
                  aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $per_ind ?>; height:25px ; background: linear-gradient(#ff9933, #FFFFFF ,#008000);" >
                </div>
            </div><br>
            <center> PAKISTAN votes <?php echo $pak; ?> <br> <?php echo $per_pak ?></center>
                <div class="progress" style="width:auto; height:25px ; ">
                    <div class="progress-bar progress-bar-success" role="progressbar" 
                      aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $per_pak ?>; height:25px ; background:green; " >
                    </div>
                </div><br>
        </div> 
        <div class="col-md-3 ">
            <center><h3 class="share" style="color:purple;" >SHARE</h3></center>
            <ul class= "socialmedia" style="list-style:none;" >
                <li style="float:left; padding:10px ;  position:relative;"><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//vote-your-favourite-team.000webhostapp.com/index.php"><i class="fa fa-facebook fa fa-2x" style="color:#0084ff;" aria-hidden="true"></i></a></li>
                <li style="float:left; padding:10px ;  position:relative;" ><a href="https://twitter.com/home?status=https%3A//vote-your-favourite-team.000webhostapp.com/index.php"><i class="fa fa-twitter fa fa-2x" style="color:#1DA1F2;" aria-hidden="true"></i></a></li>
                <li style="float:left; padding:10px ;  position:relative;"><a href="whatsapp://send?text=https://vote-your-favourite-team.000webhostapp.com/index.php" data-action="share/whatsapp/share"><i class="fa fa-whatsapp fa fa-2x" style="color:green;" aria-hidden="true"></i></a></li>
                <li style="float:left; padding:10px ; position:relative;"><a href="https://plus.google.com/share?url=https%3A//vote-your-favourite-team.000webhostapp.com/index.php"><i class="fa fa-google-plus fa fa-2x" style="color:#dd4b39;" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
    </body>
</html>
    