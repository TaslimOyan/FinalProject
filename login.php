<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
 
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="jquery/jquery.min.js"></script>
  <script src="ajax/popper.min.js"></script>
  <script src="js.bootstrap.min.js"></script>

  <style>
body {
    background-image: url("login.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}
  #log{
      position:absolute;
      top:200px;
      left:750px;
  }
  #name{

       position:absolute;
      top:280px;
      left:750px;
  }

   #pass{

position:absolute;
top:330px;
left:750px;
}


  #back{

position:absolute;
top:20px;
left:1250px;
}


 #submit{
position:absolute;
top:390px;
left:980px;
}




</style>
</head>
<body>
<div class="container">
      <div id="log"><h2>login:</h2></div><br/>
      <form class="form-inline" action="">

      <div id="name" class="form-group">
         <label for="usr">Username:</label>
         
         <input type="text" class="form-control" id="usr">
         </div>
 <div id="pass" class="form-group">
  <label for="pwd">Password: </label>
  <pre><p> </p></pre>
  <input type="password" class="form-control" id="pwd">
</div>

<div id="back"><button type="submit" class="btn btn-secondary" formaction="Login.php"><-Back</button></div>
<div id="submit"><input type="submit" class="btn btn-primary" value="login"></div>
 
     </form>

</div>
</body>
</html>

<?php

?>