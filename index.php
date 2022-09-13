<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DrivePlyr</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"/>
  <link rel="icon" href="https://raw.githubusercontent.com/Siddwap/SdDrivePlyr/main/drive-logo.png">
    <meta name="description" content="Google Drive Proxy Video Player with Many Powerful HTML5 Players Hidden ID and Many Features 🚀">


</head>
<body>
<div class="subscribe-box"> 
  <img src="https://raw.githubusercontent.com/Siddwap/SdDrivePlyr/main/drive-logo.png" alt="drive-logo.png">
  <h2>SdDrivePlyr</h2>
  <div class="subscribe">
    <input type="text" placeholder="Enter Your Drive Video Link*" autocomplete="on" id="videourl" required="required"/>
    <input type="text" placeholder="Poster URL (optional)" autocomplete="on" id="posterurl"/>
    <input type="text" placeholder="Video Title (optional)" autocomplete="on" id="videotitle"/>

    
    <button onclick="get()"> <span>GET</span></button>
  </div>
</div>
<div class="container">
    <a href="#" onclick="embedplyr()" class="card-link">Embed Code</a>
    <a href="#" onclick="openplyr()" class="card-link">Open</a>
</div>


  <footer>
    <h3><a href="#">Sd Drive Player</a></h3>
    <h5>Created by Shuaib Siddiqui...</h5>
  </footer>
  <style>
    footer{
      position: relative;
      bottom: 0;
      padding: 20px;
      background: black;
      text-align: center;
      display: block;
      color: white;
    }
  </style>
  <script src="script.js"></script>

  
</body>
</html>
