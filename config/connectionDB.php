<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "capstone_project";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn){
	die("Connection failed: ".mysqli_connect_error());
}*/

// start session
session_start();

// instantiate database variables
$environment = $_SERVER['HTTP_HOST'];
$servername = NULL;
$username = NULL;
$password = NULL;
$dbname = NULL;

$local_env = array('localhost', 'LOCALHOST', '127.0.0.1');

//  environment is localhost or 127.0.0.1
if(in_array($environment, $local_env)):
    $servername = $environment;
    $username = 'root';
    $password = '';
    $dbname = 'capstone_project';

//  environment is not localhost or 127.0.0.1
else:
    $url = parse_url('mysql://bf669104db9850:be16b333@us-cdbr-east-03.cleardb.co
	m/heroku_d3bc72f83cb3167?reconnect=true');
    $servername = $url['host'];
    $username = $url['user'];
    $password = $url['pass'];
    $dbname = substr($url["path"],1);
endif;

echo $servername;
echo '<br/>';
echo $username;
echo '<br/>';
echo $password;
echo '<br/>';
echo $dbname;
echo '<br/>';
echo '<br/>';

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn){
	die("Connection failed: ".mysqli_connect_error());
}

?>