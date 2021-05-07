
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ustacky Student Portal Application</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <script src="Bootstrap/js/jquery.js"></script>     
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <style>
      .navbar{
        background-color:#34325E;
        border-color:#34325E;
        border-radius:0px;
       }
      .dropdown-menu>li>a {
          color:#34325E;
      }
      .navbar-inverse .navbar-toggle {
        border-color: #34325E;
      }
      .navbar-nav> li > a{
        padding:15px 10px;
        font-size: 16px
      }  
      .navbar-inverse .navbar-toggle:focus, .navbar-inverse .navbar-toggle:hover {
        background-color: #34325E;
      }  
      .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
        color: #fff;
        background-color: #34325E;
      }
      .navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:focus, .navbar-inverse .navbar-nav>.open>a:hover {
        color: #fff;
        background-color: #34325E;
      }
      #logo{
        font-size:25px;
        font-weight:bold;
        letter-spacing: 2px;
      }  
      h3{
        color:#34325E; 
      }
      .container-bound{
       padding:150px  20px  20px 50px;
      }
      .container-bound > h1{
        font-family:fantasy;
        color:#34325E;
        color:#34325E;
        font-family:monospace;
      }
    .container-bound > p{
      color:#34325E;
      font-family:monospace;
    }
    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      margin-top: 200px;
      width: 100%;
      background-color:#34325E;
      color: #9d9d9d;
      text-align: center;
    }
    footer > p{
      margin-top:50px;
    }
      @media only screen and (max-width : 320px){
        img{
          width:100%;
        }
      .container-bound{
        width:80%;
        margin-bottom:100px;
        margin-left:30px
      }
      }      
      @media only screen and (min-width : 480px) and (max-width : 595px) {
        img{
          width:100%;
        }
      .container-bound{
        width:80%;
        margin-bottom:100px;
        margin-left:30px
      }
    }
      @media only screen and (min-width : 595px) and (max-width : 690px) {
        img{
          width:100%;
        }
      .container-bound{
        width:80%;
        margin-bottom:100px;
        margin-left:30px;
      }
      }    
      @media only screen and (min-width : 690px) and (max-width : 800px) {
        img{
          width:100%;
        }
      .container-bound{
        width:80%;
        margin-bottom:100px;
        margin-left:30px;
      }
      }    
    @media only screen and (min-width : 800px) and (max-width : 1024px) {
      img{
        width:70%;
        margin-top: 60px;
        margin-left:30px
      }
      .container-bound{
        width:70%;
        margin-bottom:50px;        
      }
    }
    @media only screen and (min-width : 1025px) {
      img{
       width:50%;
       margin-top:60px;
       margin-left:50px;
      }
      .container-bound{
        margin-top:40px;
        width:40%;
        margin-bottom:100px;
        
      }
    }     
    </style>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="index.php" id="logo" style="font-family:monospace">USTACKY</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php" style="font-family:monospace">Home</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="student-portal.php"  style="font-family:monospace">Get Started</a></li>
          </ul>
        </div>
      </div>
    </nav>      
    <div class="container-fluid">
      <div class="container-bound col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1">
        <div class="row "><label  style="color:#34325E; font-size:50px">Student Main Portal</label></div>
        <div class="row"><p style="color:#ED7D2B; font-weight: bold; font-size:20px">Ustacky Student Portal registration, join us today for your online courses</p></div>
        <div class="row"><a class="btn btn-primary btn-lg" href="student-portal.php" style="background-color:#34325E;color:#ED7D2B;font-weight:bold;">Get Started</a></div>
      </div>
       <img src="img/profile.svg" class="col-md-6 col-sm-5" style="width:450px;height:400px;margin-bottom:50px;">
    </div>
  <span class="footer">
    <p style="margin-top:15px;font-family:monospace">All right reserved @Ustacky <?php echo date('Y') ?></p>
  </span>
  </body>
</html>
