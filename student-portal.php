<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ustacky Student Portal Form</title>
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
      label{
      font-family:monospace;
      color:#34325E;
      }
      legend{
        color: white;
        background-color:#5e6474;
        padding:3px;
        font-weight:100;
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
          <ul class="nav navbar-nav" style="background-color:#34325E">
            <li class="active"><a href="student-portal.php" style="font-family:monospace">Portal</a></li>
            <li class=""><a href="dashboard.php" style="font-family:monospace">Dashboard</a></li>
          </ul>
        </div>
      </div>
    </nav>        
    <div class="container-fluid">
        <div class="col-md-12 col-sm-12" style="padding-bottom:50px">
            <?php
              if(isset($_SESSION['successful']) && !empty($_SESSION['successful'])){
                echo '<div class="col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 alert
                      alert-success alert-dismissable text-center" style="margin-top:20px">
                        <a href="" class="close" data-dismiss="alert" aria-label="close"> &times</a>
                        <strong>
                          Success
                        </strong>'
                        .$_SESSION['successful'].
                      '</div>';
              }else if(isset($_SESSION['Oops']) && !empty($_SESSION['Oops'])){
                echo '<div class="col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 alert
                      alert-danger alert-dismissable text-center" style="margin-top:20px">
                        <a href="" class="close" data-dismiss="alert" aria-label="close"> &times</a>
                        <strong>
                           Danger
                        </strong>'
                        .$_SESSION['Oops'].
                      '</div>';                    
              }
              
            unset($_SESSION["successful"]);
            unset($_SESSION["Oops"]);
            ?>          
                 
        <div class="col-md-10 col-md-offset-1" style="padding-bottom:80px">
         <form  method="POST" action="config/addStudent.php" class="bg-info"  enctype="multipart/form-data" style="padding:10px">
           <h2 class="text-center" style="color:#34325E;">Student Portal Form</h2>
          <i class="text-danger">Please fill in all required information</i>
          <fieldset>
           <legend>Personal Information</legend>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label for="file" >Upload Image:</label>
                    <input type="file" class="form-control"  name="image" style="margin-top:5px" required="required">
                </div>                
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="form-group">
                  <label for="firstname" class="control-label"> First Name</label>
                  <input type="text" name="firstname" id="firstname" class="form-control" required="required" placeholder="Enter First Name"> 
                </div>                          
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-group">
                  <label for="middlename" class="control-label"> Middle Name</label>
                  <input type="text" name="middlename" id="middlename" class="form-control" required="required" placeholder="Enter Middle Name"> 
                </div>                          
              </div>                 
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="form-group">
                  <label for="lastname" class="control-label"> Last Name</label>
                  <input type="text" name="lastname" id="lastname" class="form-control" required="required" placeholder="Enter Last Name"> 
                </div>                          
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-group">
                  <label for="email" class="control-label"> Email</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address" required="required"> 
                </div>                          
              </div>                 
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="form-group">
                  <label for="dob" class="control-label"> Date Of Birth</label>
                  <input type="date" name="dob" id="dob" class="form-control" required="required" placeholder="Enter LastName"> 
                </div>                          
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-group" style="margin-top:40px;">                    
                  <label for="gender" class="control-label">Male</label>
                  <input type="radio" name="gender" id="gendermale" name="gender" value="male" required="required">
                  <label for="gender" class=" control-label">Female</label>                                                                     
                  <input type="radio" name="gender"  id="genderfemale"   value="female" required="required">
                </div>
              </div>                
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="form-group">
                  <label for="phonenumber" class="control-label"> Phone Number</label>
                  <input type="text" name="phoneNumber" id="phoneNumber" class="form-control" required="required" placeholder="Enter PhoneNumber"> 
                </div>                          
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-group">
                  <label for="address" class="control-label"> Address</label>
                  <textarea type="address" name="address" id="address" class="form-control" placeholder="Enter Address" required="required"></textarea> 
                </div>                          
              </div>                 
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <label for="stateOrigin" class="control-label" > State Of Origin</label>
                    <select name="stateOrigin" class="form-control" id="stateOrigin" onchange="getLocalGovt();">
                        <option value="none">Select-State</option>
                    </select>
                  </div>                          
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <label for="originlocalG" class="control-label"> Local Government</label>
                    <select name="originLocalG" id="originLocalG" class="form-control" required="required">
                       <option value="none">Select-Local-Government</option>
                    </select> 
                  </div>                          
                </div>                 
            </div>                   
          </fieldset>
          <fieldset>
            <legend>Academics Related Information</legend>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="form-group">
                  <label for="nextofkin" class="control-label"> Next Of Kin</label>
                  <input type="text" name="nextOfKin" id="nextOfKin" class="form-control" required="required" placeholder="Enter The Name OF NextOfKin"> 
                </div>                          
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="form-group">
                  <label for="jambscore" class="control-label"> Jamb Score</label>
                  <input type="text" name="jambScore" id="jambScore" class="form-control" required="required" placeholder="Enter Jamb Score"> 
                </div>                          
              </div>                 
            </div>            
          </fieldset>
            <div class="row">
              <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                <div class="form-group">
                  <input type="submit" name="submit" id="submit"class="btn btn-md form-control"  style="background-color:#5e6474;color:white;font-weight:bold;" value="Submit">
                </div>                          
              </div>      
            </div>  
         </form>
        </div>
       
    <span class="footer">
    <p style="margin-top:15px;font-family:monospace">All right reserved @Ustacky <?php echo date('Y') ?></p>
    </span>
    <script src="Bootstrap/js/mainscript.js"></script>
  </body>
</html>
