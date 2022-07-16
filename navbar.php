<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsive navbar using CSS flexbox and JavaScript</title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <style>
        * {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
  }
  
  body {
    font-family: "Josefin Sans", sans-serif;
  }
  
  .navbar {
    font-size: 18px;
    background-image: linear-gradient(260deg, #2376ae 0%, #c16ecf 100%);
    border: 1px solid rgba(0, 0, 0, 0.2);
    padding-bottom: 10px;
  }
  
  #main-nav {
    list-style-type: none;
    display: none;
    flex-direction: column;
  }
  
  #main-nav li {
    text-align: center;
    margin: 15px auto;
  }
  
  .nav-links,
  #logo {
    text-decoration: none;
    color: rgba(255, 255, 255, 0.7);
  }
  
  #logo:hover,
  .nav-links:hover {
    color: rgba(255, 255, 255, 1);
  }
  
  #logo {
    display: inline-block;
    font-size: 22px;
    margin-top: 10px;
    margin-left: 20px;
  }
  
  #navbar-toggle {
    position: absolute;
    top: 10px;
    right: 20px;
    cursor: pointer;
    color: rgba(255, 255, 255, 0.8);
    font-size: 24px;
  }
  
  #navbar-toggle:hover {
    color: rgba(255, 255, 255, 1);
  }
  
  @media screen and (min-width: 768px) {
  
    .navbar {
      display: flex;
      justify-content: space-between;
      padding-bottom: 0;
      height: 70px;
      align-items: center;
    }
  
    #main-nav {
      display: flex !important;
      margin-right: 30px;
      flex-direction: row;
      justify-content: flex-end;
    }
  
    #main-nav li {
      margin: 0;
    }
  
    .nav-links {
      margin-left: 40px;
    }
  
    #logo {
      margin-top: 0;
    }
  
    #navbar-toggle {
      display: none;
    }
  
  } 
    </style>

</head>

<body>
    <div class="container-fluid">

    <nav class="navbar">
        <span id="navbar-toggle">
            <i class="fas fa-bars"></i>
        </span>
        <a href="#" id="logo">NSTU Club Collab</a>
        <ul id="main-nav">
            <li>
                <a href="#" class="nav-links">Home</a>
            </li>
            <li>
                <a href="#" class="nav-links">Gallery</a>
            </li>
            <li>
                <a href="#" class="nav-links">About Us</a>
            </li>
            <li>
                <a href="./pages/login.php" class="nav-links">Login</a>
            </li>
            <li>
                <a href="./pages/register.php" class="nav-links">Registration</a>
            </li>
        </ul>
    </nav>
    
    
    </div>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe"
        crossorigin="anonymous"></script>
   <script>
    let mainNav=document.getElementById('main-nav');
let navbarToggle=document.getElementById('navbar-toggle');



navbarToggle.addEventListener('click',function(){

    if(this.classList.contains('active')){
        mainNav.style.display="none";
        this.classList.remove('active');
    }
    else{
        mainNav.style.display="flex";
        this.classList.add('active');

    }
});
   </script>
</body>

</html>