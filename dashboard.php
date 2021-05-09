<?php
  include "config/getAllStudent.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ustacky Portal Dashboard</title>
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
      .navbar-nav> li > a{
        padding:15px 10px;
        font-size: 16px
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
      .container-bound{
        padding-bottom: 60px;
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
        color:#34325E;
        text-align:center
      }
      tr > th {
       font-size: 16px;
      }      
       tbody :hover {
        color:#9d9d9d;
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
          <a class="navbar-brand" id="logo" href="index.php" style="font-family:monospace">USTACKY</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav" style="background-color:#34325E">
            <li class=""><a href="student-portal.php" style="font-family:monospace">Portal</a></li>
            <li class="active"><a href="dashboard.php" style="font-family:monospace">Dashboard</a></li>
          </ul>
        </div>
      </div>
    </nav>        
    <div class="container-fluid container-bound">
      <div class="alert alert-info" role="alert"><strong>Info!</strong> All students records table</div>
        <div class="col-12">
          <span class="col-sm-3"  style="margin-bottom:8px">
              <input type="text" id="name" class="form-control" placeholder="Search Record By Name Only"  onkeyup="searchByName()" required="required">
          </span>
          <span class="col-sm-3">
            <select class="form-control" id="admissionStatus" onchange="searchByAdmissionStatus()" required="required">
              <option value="none">Select-Admission-Status</option>
              <option value="undecided">Undecided</option>
              <option value="admitted">Admitted</option>
            </select>                  
          </span>          
          <span class="col-sm-6"  style="margin-bottom:8px">
            <span class="col-sm-5">
              <select class="form-control" id="gender" required="required">
                <option value="none">Select-Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>                  
            </span>
            <span class="col-sm-4">
              <input type="text" id="score" class="form-control" placeholder="Enter Jamb Score" required="required">
            </span>
            <span class="col-sm-3">
              <input type="button" class="btn-primary form-control" value="search">
            </span>
          </span>
        </div>
        <div class="table-responsive col-md-12">
          <table id="studentTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>S/n</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Jamb Score</th>
                <th>Admission Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              for($i=0; $i<count($students); $i++){  
                echo '
                  <tr>
                    <td>'.($i+1).'</td>
                    <td>'.$students[$i]['name'].'</td>
                    <td>'.$students[$i]['gender'].'</td>
                    <td>'.$students[$i]['jamb_score'].'</td>
                    <td>'.$students[$i]['adm_status'].'</td>
                    <td>
                      <a href="view-student-details.php?id='.$students[$i]['id'].'">View</a>
                    </td>
                  </tr>
                ';
              }
              ?>          
            </tbody>
          </table>           
        </div>
      </div>
      <span class="footer">
        <p style="margin-top:15px;font-family:monospace">All right reserved @Ustacky <?php echo date('Y') ?></p>
      </span>
    <script src="Bootstrap/js/dashboardscript.js"></script>
  </body>
</html>
