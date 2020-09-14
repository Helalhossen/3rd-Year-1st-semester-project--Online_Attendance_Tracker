<?php include 'defines.php'; ?>
<?php
/*********** VALIDATION ************/
foreach($_POST as $p) 
  if(empty($p) || !isset($p))
    respond("error","empty");
    
if($_POST['password'] != $_POST['password2']) 
  respond("error","mismatch");
if(strlen($_POST['password']) < 6) 
  respond("error","small");
  
$pass = hashPass($_POST['password']);
$email = strtolower(sqlReady($_POST['email']));
$name = sqlReady($_POST['name']);
$phone = sqlReady($_POST['phone']);
/************* REGEX ************/
if(verify(EMAIL,$email) === false) respond("error","email");

$t=array("zakirjucse@gmail.com","kamal.cou@gmail.com","mahfuzcseiu01@yahoo.com","aditisarker407@gmail.com","meskat.jahan@gmail.com","cse.nayan@gmail.com","nishucse03@gmail.com","mohib.cse.bd@gmail.com","anik.com@gmail.com","knahareva@gmail.com","kamrul.hassan39@yahoo.com","hasancse03@gmail.com","parthocseju@yahoo.com","faisal_245cse@yahoo.com","mhasanraju@gmail.com","basharcse@gmail.com");
$tt=count($t);
$ff=false;
for($i=0; $i<$tt; $i++)
{
   if($t[$i]==$email)
{
   $ff=true;
break;
}
}
if($ff!=true)
respond("error","email");




if(verify(PHONE,$phone) === false) respond("error","phone");
if(verify(NAME,$name) === false) respond("error","name");

/************ SEARCH ***********/
$con = connectTo();
$exists = $con->query("select * from `attendance`.`teacher` where email = '$email'");
if($exists && $con->affected_rows) {
  $con->close();
  respond("error","exists");
} 
/*********** INSERT ************/
$addTeacher = $con->query("insert into `attendance`.`teacher` (`name`, `email`, `phone`, `password`) values ('$name', '$email', '$phone', '$pass')");
if(!$addTeacher && $con->errno()) {
  $con->close();
  die(json_encode(array("error"=>"db_error","code"=>$con->errno(),"msg"=>$con->error())));
}
/*********** RESPOND ************/
$con->close();
respond("error","none");
?>