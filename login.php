<?php @session_start();

unset($_SESSION['username']);
if (ISSET($_SESSION['username']))
 {
  header ("location:index1.php");
 }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login | Perpustakaan Online</title>
<style type="text/css">
<!--
.style1 {
 font-family: Geneva, Arial, Helvetica, sans-serif;
 font-weight: bold;
 font-size: 36px;
margin: 0;
   position: absolute;
   top: 35%;
   left:40%;
   transform: translate(0, -50%);

}
.style2{
background-image: url('assets/img/Buku-2.jpg');
background-size: 100% ;
border:2px solid #226bbf;

}
.style4 {font-family: Geneva, Arial, Helvetica, sans-serif; font-weight: bold;
  font-size: 36px;
margin: 0;
   position: absolute;
   top: 50%;
   left:40%;
   transform: translate(0, -50%); }
-->
</style>
</head>
<body class="style2">
  <center>
  <div class="login-box">
  <br/>
<div class="login-box-body">
    <p class="login-box-msg" style="font-size:16px;"></p>
<form class="style4" id="form1" name="form1" method="post" action="proses_log.php">
  <div class="login-logo ">
    <a href="index.php" style="color: White;"><h3>Sistem Informasi <br/><b>Perpustakaan</b></h3></a>
  </div>
  <div id="tampilalert"></div>

  
  <div class="card mb-4">
   <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" id="USERNAME" name="username" required="required" autocomplete="off">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
   <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" id="PASSWORD" name="password" required="required" autocomplete="off">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        <!-- /.col
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" id="remember" value="R1"> Remember Me
            </label>
          </div>-->
          <!-- /.social-auth-links -->
        </div>

        <div class="col-xs-4">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat" value>Login</button>
        
        </div>
      </div>
    


</form>
</div>
</center>
</body>
</html>