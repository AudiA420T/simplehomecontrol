<?php

$ctl = $_POST['ctl'];
$commanda = "sudo python lights.py $ctl";
$result1 = shell_exec($commanda);
echo($result1);

$htr = $_POST['htr'];
$commandb = "sudo python heater.py $htr";
$result2 = shell_exec($commandb);
echo($result2);

?>

<html lang="en">
<head>
  <title>Clint's Visitor Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class=brcol>

<div class="jumbotron text-center">
  <h1>Hotel Masterson Gurnani</h1>
  <p>Enjoy your stay!</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <img src="http://i248.photobucket.com/albums/gg186/AudiA4_18T/dolo_zpsfor5rj9q.jpg" class="img-responsive center-block" alt="Dolores Party">
      <br>
    </div>
    <div class="col-sm-4"></div>
  </div>
  <div class="row padded">
    <div class="col-sm-4"></div>
    <div class="col-sm-2">
      <h5 class="vertical-center">Heat the Apartment before you arrive:</h5>
    </div>
    <div class="col-sm-2">
      <form action="" method="POST" name="form">
        <p class="form">
                <button type="submit" class="btn btn-danger center-block">Heat</b$
                <input type="hidden" name="htr" value="1">
        </form></p>
    </div>
    <div class="col-sm-4"></div>
  </div>
  <div class="row padded">
    <div class="col-sm-4"></div>
    <div class="col-sm-2">
      <h5>Buzz yourself in from outside:</h5>
    </div>
    <div class="col-sm-2">
	<form action="" method="POST" name="form">
        <p class="form">
                <button type="submit" class="btn btn-info center-block">BUZZ</button>
		<input type="hidden" name="ctl" value="1">
        </form></p>     
    </div>
    <div class="col-sm-4"></div>
  </div>
  <div class="row padded">
    <div class="col-sm-4"></div>
    <div class="col-sm-2">
      <h5>WiFi Credentials:</h5>
    </div>
    <div class="col-sm-2">
      <ul class="list-group lost">
        <li class="list-group-item">Name: NETGEAR75-5G</li>
        <li class="list-group-item">Password: kindbolt460</li>
      </ul>
    </div>
    <div class="col-sm-4"></div>
  </div>
 <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <h5 class="text-center underline"><u><strong>Recommended Walking Route</u></strong></h5>
      <ol>
        <li>Top of Nob Hill & Grace Cathedral</li>
        <li>Bottom of Lombard Street</li>
        <li>*Optional* Palace of Fine Arts (add 1 hour)</li>
        <li>Fort Mason</li>
        <li>Ghiardelli Square</li>
        <li>Fisherman's Wharf / Pier 39</li>
      </ol>
   </div>
    </div>
    <div class="col-sm-4"></div>
  </div>
</div>
</form>
