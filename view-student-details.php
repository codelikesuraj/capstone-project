<?php
include('config/getSingleStudent.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ustacky Student's Information</title>
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
      .navbar-inverse .navbar-toggle {
        border-color: #34325E;
      }
      .navbar-inverse .navbar-toggle:focus, .navbar-inverse .navbar-toggle:hover {
        background-color: #34325E;
      }    
      .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
        color: #fff;
        background-color: #34325E;
        }
      .navbar-nav> li > a{
       padding:15px 10px;
       font-size: 16px
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
  
      table{
        border-top:8px solid  #34325E !important;
        border-bottom:12px solid  #34325E !important;
      }
      tr > td, th {
        color:#34325E
      }
      .container-profile{
        margin-top:0px;
      }
      legend{
        color:#34325E;
        margin-top:5px;
  
      }
      h4{
        color:#9d9d9d;
        font-weight:bold;
        padding:5px;
      }
      img{
        width:100%;
        height:200px;
        border-radius:3px;
        padding:0px;
        margin-top:5px;
      }
      @media only screen and (min-width : 320px) and (max-width : 480px) {
        .main-container{
           height:1200px;
        }
      .image-container{

           height:320px
        } 
      }
      @media only screen and (min-width : 480px) and (max-width : 595px) {
        .main-container{
           height:1050px;
        }
        .image-container{
           height:300px
        }        
      }
      @media only screen and (min-width : 595px) and (max-width : 690px) {
        .main-container{
           height:1100px;
        }
        .image-container{

           height:300px
        }
      }
      @media only screen and (min-width : 690px) and (max-width : 800px) {
        .main-container{
          min-height:1000px;
        }
        .image-container{
           width:220px;
           height:320px
        }        
       }
      @media only screen and (min-width : 800px) and (max-width : 1024px) {
        .main-container{
          height:800px;      
        }
        .image-container{
           width:220px;
           height:320px
        }
      }
      @media only screen and (min-width : 1024px) and (max-width : 1224px) {
        .image-container{
          width:220px;
          height:720px;
           
        }
      }
      @media only screen and (min-width : 1025px) {
        .main-container{
           height:650px;
        }
        .image-container{
           width:220px;
           height:320px
        }
        .info-container{
           margin-left:5px;
        }
      }         
    </style>
  </head>
  <body style="color:#DDF1FF">
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
            <li class=""><a href="student-portal.php" style="font-family:monospace">Portal</a></li>
            <li class=""><a href="dashboard.php" style="font-family:monospace">Dashboard</a></li>
            <li class="active"><a href="" style="font-family:monospace">Student Information</a></li>
          </ul>
        </div>
      </div>
    </nav>        
    <div class="container-fluid">
        <div class="col-md-12 main-container" style="background-color:white;box-shadow:1px  1px #fff;">
          <div class="text-center col-sm-5 image-container"  style="background-color: #CC8B5E;border-radius:3px;">

            <div class="col-sm-12" style="padding:3px">
              <h4 style="color:white;font-weight:bold"><?php echo ($student['name']); ?></h4>
              <span class="label label-info">Status: Undecided  </span>
            </div>
          </div>
          <div class="col-sm-7 info-container">
            <legend  class="bg-info">Personal Information</legend>
            <div class="card col-sm-12">
              <h4 >Email: <?php echo ($student['email']); ?></h4>
            </div>
            <div class="card col-sm-12">
             <h4>Gender: <?php echo ($student['gender']); ?></h4>
            </div>
            <div class="card col-sm-12">
             <h4>Phone Number: <?php echo ($student['phone_number']); ?></h4>
            </div>          
            <div class="card col-sm-12">
             <h4>Date Of Birth: <?php echo ($student['date_of_birth']); ?></h4>
            </div>
            <div class="card col-sm-12">
             <h4>Address: <?php echo ($student['address']); ?></h4>
            </div>      
          </div>
          <div class="col-md-12" style="float:left;clear:left; margin-top:10px">
            <legend  class="bg-info">Other Information</legend>
            <div class="col-sm-3">
              <div class="card col-sm-12">
               <h4>State Of Origin: <?php echo ($student['state_of_origin']); ?></h4>
              </div>                
            </div>
            <div class="col-sm-3">
              <div class="card col-sm-12">
               <h4> Local Govt: <?php echo ($student['local_govt']); ?></h4>
              </div>        
            </div>          
          </div>
          <div class="col-md-12" style="float:left;clear:left; margin-top:10px">
            <legend  class="bg-info">Academics Related Information</legend>
            <div class="col-sm-3">
              <div class="card col-sm-12">
               <h4>Next Of Kin: <?php echo ($student['next_of_kin']); ?></h4>
              </div>                
            </div>
            <div class="col-sm-3">
              <div class="card col-sm-12">
               <h4> Jamb Score: <?php echo ($student['jamb_score']); ?></h4>
              </div>        
            </div>
   
          </div>          
        </div>       
    </div>
    <span class="footer">
    <p style="margin-top:15px;font-family:monospace">All right reserved @Ustacky <?php echo date('Y') ?></p>
    </span>
    <script src="Bootstrap/js/dashboard-script.js"></script>
  </body>
</html>
