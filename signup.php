<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
 
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="./jquery/jquery.min.js"></script>
  <script src="./ajax/popper.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>

  <style>
body {
    background-image: url("register.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}
  #log{
      position:absolute;
      top:150px;
      left:650px;
  }
#fname{
     
      position:absolute;
      top:250px;
      left:650px;

}
#uname{
     
     position:absolute;
     top:290px;
     left:643px;

}


#email{
     
     position:absolute;
     top:330px;
     left:676px;

}

#phone{
     
     position:absolute;
     top:370px;
     left:670px;

}
#pass{
     
     position:absolute;
     top:410px;
     left:648px;

}

#repass{
     
     position:absolute;
     top:450px;
     left:587px;

}


#pic{
     
     position:absolute;
     top:490px;
     left:616px;

}

#sub{
     
     position:absolute;
     top:550px;
     left:623px;

}

#check1{
     
     position:absolute;
     top:553px;
     left:730px;

}




</style>
</head>
<body>
<div class="container">
      <div id="log"><h2>register:</h2></div><br/>
      <form class="form-inline" action="">

      <div id="fname" class="form-group">
         <label for="usr">Fullname: </label>


         <input type="text" class="form-control" id="usr">
</div>
      <div id="uname" class="form-group">
         <label for="usr">Username: </label>


         <input type="text" class="form-control" id="usr">    
</div>      


<div id="email" class="form-group">
         <label for="email">   Email: </label>


         <input type="email" class="form-control" id="usr">    
</div>  


<div id="phone" class="form-group">
         <label for="email">   Phone: </label>
         <input type="text" class="form-control" id="usr">  

         
</div>  

<div id="pass" class="form-group">
         <label for="pwd">password: </label>
         <input type="password" class="form-control" id="pwd">  

         
</div> 


<div id="repass" class="form-group">
        <label for="pwd">Confirm Password:</label>
         <input type="password" class="form-control" id="pwd">  

         
</div>  


<div id="pic" class="form-group">
         <label for="file">Profile Picture:</label>
         <input type="file" class="form-control" id="pwd">  

         
</div> 

<div class="container" >

  <div id="sub"><p>subscriptions:</p></div>
<div id="check1" class="form-group">
<div class="form-check">

      <label class="form-check-label">
      
        <input type="checkbox" class="form-check-input" value="">Option 1 
      </label>
    </div>


<div class="form-check">

      <label class="form-check-label">
      
        <input type="checkbox" class="form-check-input" value="">Option 2 
      </label>
    </div>

<div class="form-check">

<label class="form-check-label">

  <input type="checkbox" class="form-check-input" value="">Option 3 
</label>
</div>


<div class="form-check">

<label class="form-check-label">

  <input type="checkbox" class="form-check-input" value="">Others 
</label>
</div>
  
         
</div>  
</div>








     </form>

</div>
</body>
</html>

<?php

?>