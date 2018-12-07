<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>EIMA | Sign in</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

  <link rel="stylesheet" href="login/css/style.css">

  <script src="vendor/sweetalert/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="vendor/sweetalert/sweetalert.css">
  <script type="text/javascript">
    function peringatan(tulis,tulis1,tulis2) {
      swal(tulis,tulis1,tulis2);
    }
  </script>
  
</head>

<?php
      if(isset($_GET["e"]))
        {
          if($_GET["e"]=="1")
          {
            $onload = "peringatan('Warning!','Username or password is wrong','warning')";
          }
          else if($_GET["e"]=="2")
          {
            $onload = "peringatan('Warning!','You must log in','warning')";
          }
          else if($_GET["e"]=="3")
          {
            $onload = "peringatan('Thankyou!','','success')";
          }
        }
      else
      {
        $onload = "";
      }       
    ?>

<body onload="<?php echo $onload ?>">  
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <a class="button-container" href="." >
    <img src="assets/images/logo.png" alt="homepage" class="light-logo" />
    <img src="assets/images/text.png">
  </a>
  <!-- <a class="button-container" href="." >EIMA</a> -->
</div>
<!-- <div class="rerun"><a href="">Rerun Pen</a></div> -->
<div class="container">
  <div class="card"></div>
  <div class="card">
    <!-- <h1 class="title">Login</h1> -->
    <form action="loginproses.php?m=i" method="post">
      <div class="input-container">
        <input name="user_username" type="text" aria-describedby="emailHelp" placeholder="Enter username"/>
        <label >Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input name="user_password" type="password" placeholder="Password"/>
        <label >Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Go</span></button>
      </div>
      <!-- <div class="footer"><a href="#">Forgot your password?</a></div> -->
    </form>
  </div>
  <!-- <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form>
      <div class="input-container">
        <input type="#{type}" id="#{label}" required="required"/>
        <label for="#{label}">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="#{type}" id="#{label}" required="required"/>
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="#{type}" id="#{label}" required="required"/>
        <label for="#{label}">Repeat Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Next</span></button>
      </div>
    </form>
  </div> -->
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="vendor/popper/popper.min.js"></script>
  <script  src="login/js/index.js"></script>
</body>

</html>
