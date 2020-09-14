<html>
 
<head>
  
<link rel="stylesheet" href="css/style.css"/>
  
<title>ONLINE ATTENDANCE TRACKER</title>
  
<link rel="stylesheet" href="css/bootstrap.min.css">
  
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/c3.css">
  
<script src="js/jquery.min.js"></script>
  
<script src="js/bootstrap.min.js"></script>
  
<script src="js/highcharts.js"></script>
  
<script src="js/highcharts-exporting.js"></script>
  
<script src="js/jquery.knob.js"></script>
  
<script src="js/student.js"></script>
  
<!-- Custom styles for this template -->
    
<link href="navbar-fixed-top.css" rel="stylesheet">
 
</head>
 
<body>
   
<!-- Fixed navbar -->
    
<nav class="navbar navbar-inverse navbar-fixed-top">
      
<div class="container">
        
<div class="navbar-header">
          
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            
<span class="sr-only">Toggle navigation</span>
            
<span class="icon-bar"></span>
            
<span class="icon-bar"></span>
            
<span class="icon-bar"></span>
          
</button>
          
<a class="navbar-brand" href="index.php">ONLINE ATTENDANCE TRACKER</a>
        
</div>
        
<div id="navbar" class="navbar-collapse collapse">
          
<ul class="nav navbar-nav navbar-right">
            
<li class="active"><a href="#">Home</a></li>
            
<li><a href="#about">About</a></li>
            
<li><a href="contact.php">Contact</a></li>
          
          </ul>
        
</div><!--/.nav-collapse -->
      
</div>
    
</nav>
</br>
<div class="container">
</br>
<table class="table table-bordered table-striped">
      
<thead>
        <tr>
          <th><img src="lg.jpg.jpg" width="1150" height="230"</th>
</tr> 
</tbody> </table>
<html>
<head>
<style>
body {
  background-color: lightblue;
}
</style>
</head>

<div style="text-align:center"><h1  style="color:black;">Student Dashboard</h1></div>
<style>
body {
  text-align: justify;
}
</style>
<p style="color:blue;">Note: You can know your attendance summary of particular course from here. Using session, section,subject code(must be valid), id number you can know about your attendance summary.</p>

<div id="output"></div>
  
<form id="getAttendance">
    
<div class="form-group">
     
<label>Session</label>
     
<select name="year" class="form-control">
        
<?php 
foreach(range(date('Y',time()),2015) as $r){ 
$s=$r%2000;?>
<option value="<?php echo $r; ?>" > <?php echo $r;echo "-"; echo ($s+1);?></option>
<?php 
}?>     
</select>
    
</div>
    
<div class="form-group">
      
<label>Section</label>
      
<select name="section" class="form-control">
      <option>1</option>	
    
</select>
    
</div>
    
<div class="form-group">
      
<label>Subject Code of Course</label>
      
<input type="text" class="form-control" name="code" placeholder="Eg - CSE-1108">
      
<span class="help-block"></span>
    
</div>
    
<div class="form-group">
      
<label>ID Number</label>
      
<input type="text" class="form-control" name="roll" placeholder="Eg - 11708020">
      
<span class="help-block">
</span>
    
</div>
    
<button class="btn btn-primary">Get Results</button>
  
</form>

<html>
<head>
<style>
body {
  background-color: lightblue;
}
</style>
</head>
<p>
Developed By: Rakibul Islam, Helal Khan, Ashikur Rahman Sourob, Ahsan Habib, Syed Asraf Asif</p>
</div>
  
</div>      
<!-- /.container -->
   
<!-- FOOTER -->
      
<footer style="background:; height:;">
        
<p class="pull-right"><a href="#">Back to top</a></p>

</footer>

    
 
</body>

</html>
