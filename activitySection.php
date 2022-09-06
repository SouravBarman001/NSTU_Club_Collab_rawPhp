<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/side.css"> 
    <link rel="stylesheet" href="css/discover.css">
    <link rel="stylesheet" href="css/discover.css">
    <link rel="stylesheet" href="css/pr.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/activity.css">



    
    
    <title>user Structure</title>
</head>
<body> 
<div class="container-scroller">
<!-------------------------------- header and sidebar---------------------- -->
<div class="header"> 
<?php include 'nav.php';?>  
</div>
<!---------------------------------------------totall page-------------------------------------------- -->
 
<div class="maindiv"> 
    
    
<!-- ----------------------------------------sidebar area fix------------> 
<nav class="sidebar col-xl-3 "> 
<?php include 'side.php';?>

</nav> 
<!--------------------------------------- Discover page body---- -->
<div class="mainsection"> 
    
<div class="projcard-container">
    
    <div class="projcard projcard-blue">
      <div class="projcard-innerbox">
        <img class="projcard-img" src="./images/dhrupod.jpg" />
        <div class="projcard-textbox">
          <div class="projcard-title">Dhrupod</div>
          <div class="projcard-subtitle">Activity heading</div>
          <div class="projcard-bar"></div>
          <div class="projcard-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
          <div class="projcard-tagbox">
            <span class="projcard-tag">Time : 10pm</span>
            <span class="projcard-tag">Date : 10/08/2022</span>
          </div>
        </div>
      </div>
    </div>
    
    <div class="projcard projcard-red">
      <div class="projcard-innerbox">
        <img class="projcard-img" src="./images/adventureClub.jpg" />
        <div class="projcard-textbox">
          <div class="projcard-title">Advanture club</div>
          <div class="projcard-subtitle">Activity heading</div>
          <div class="projcard-bar"></div>
          <div class="projcard-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
          <div class="projcard-tagbox">
            <span class="projcard-tag">Time : 10pm</span>
            <span class="projcard-tag">Date : 10/08/2022</span>
            <a href="#"><span class="projcard-tag">Form link</span></a>
          </div>
        </div>
      </div>
    </div>

     


</div>

</div>
<script>

    // This adds some nice ellipsis to the description:
document.querySelectorAll(".projcard-description").forEach(function(box) {
  $clamp(box, {clamp: 6});
});
</script>

</div>  
</body>
</html>