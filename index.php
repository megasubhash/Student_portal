<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>
.styling{background-color:#424200;color:#CBFD02;font: bold 14px MS Sans Serif;
padding: 3px;}
</style>
<title>Students Registration Portal | Indian Institute of Technology Kharagpur</title>

<link rel="stylesheet" href="css/style.css" />
<script type='text/javascript'>
function refreshCaptcha(){
    var img = document.images['captchaimg'];
    img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
    
</head>

<body background="https://clevertechie.com/img/bnet-bg.jpg">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a class="navbar-brand" href="index.php"><font face="Georgia, Times New Roman, Times, serif">AUTONOMOUS GROUND VEHICLE</font></a>
    <div class="collapse navbar-collapse" id="myNavbar">
    </div>
  </div>
</nav>
<div class="container">
<center><h1>Students' Registration Portal</h1></center>


<div class="register" align="center">
<form class="form col-md-6 col-md-offset-3" name="form" id="form" method="post" action="submit.php">
  <input class="form-control" name="fname" placeholder="Full name*" required /> <br />
  <input class="form-control" placeholder="Email id*" required /> <br />
  <input class="form-control" placeholder="Contact no.*" required /> <br />
  <select name="hall" class="form-control" required>
        <option value="">Year</option>
        <option value="second">Second year UG</option><option value="Third">Third year UG</option>
        </select><br />
		
		<select name="hall" class="form-control" required>
        <option value="">Which team you want to apply for</option>
        <option value="second">Techno Management Team</option><option value="Third">Web Development Team</option>
        </select>
		<br />
		
<center><img src="myCaptcha/image.jpg.php?rand=618908787" id='captchaimg' class = "cap"><br><br />
   <a href='javascript: refreshCaptcha();' style="color:#000066"><img src="refresh.jpg" style="width:30px;height:30px;border:"></a> <br><br /> 
   
   
   <input class="form-control" name="fname" placeholder="Enter the above captcha*" required/> <br />
   <center><font color="#000000"><input type="submit" name = "submit" value="Submit" />
        <input type="reset" value="Reset"/></font></center>
  

</form>

</div>


<script>

function checkforblank() {
    var errormessage = "";

    if (document.getElementById('name').value == "") {
        errormessage += "Name required \n";
        document.getElementById('name').style.borderColor = "red";
        return false;
    }
    if (document.getElementById('email_id').value == "") {
        errormessage += "Email id. required \n";
        document.getElementById('email_id').style.borderColor = "red";
        return false;
    }
    if (document.getElementById('contact no').value == "") {
        errormessage += "Contact no required \n";
        document.getElementById('contact no').style.borderColor = "red";
        return false;
    }
    if (errormessage != ""){
        alert(errormessage);
        return false;
    }

    }
}
</script>

</body>
</html>
