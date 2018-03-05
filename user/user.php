<?php
@session_start();
?>
<html>
<head>
<title>chat</title>

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../assets/css/animate.css" rel="stylesheet">
    <link rel="icon" href="../assets/img/l1.png" type="image/jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
 <link href="../assets/css/home.css" rel="stylesheet">
 <style> </style>


</head>
<body><br>
<button onclick="openNav1()" data-toggle="collapse" class="navbar-toggle"><i class="fa fa-navicon"></i></button>
<script>
  function openNav1() {
       var x = document.getElementById("side1");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

</script>
<div class="nav-side-menu" id="side1" style="z-index: 3;">
    
    <div class="brand">hii <?php echo $_SESSION['societyuser']?></div>
    
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="event_add.php">
                  <i class="fa fa-pencil"></i>  Add Event
                  </a>
                </li>


                 <li>
                  <a href="ctc_add.php">
                  <i class="fa fa-plus"></i> Add CTC
                  </a>
                  </li>

                 <li>
                  <a href="volunteer_add.php">
                  <i class="fa fa-check-square-o"></i> Add Volunteers
                  </a>
                </li>
                 <li>
                  <a href="event_display.php">
                  <i class="fa fa-check-square-o"></i> show event
                  </a>
                </li>
                 <li>
                  <a href="userlogout.php">
                  <i class="fa fa-pencil"></i>  Logout
                  </a>
                </li>
            </ul>
     </div>
</div>

</body>
</html>
