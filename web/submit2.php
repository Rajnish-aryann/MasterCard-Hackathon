<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("phpmyadmin", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$cname = $_POST['Name'];
$cno = $_POST['Card'];
$ex1 = $_POST['ex3'];
$ex2 = $_POST['ex4'];
$cvv = $_POST['cvv2'];
if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into paymentdebit(cname, cno,month_exp,Year_exp, cvv) values ('$cname', '$cno','$ex1','$ex2','$cvv')");
echo "<br/><br/><span><h1 style="bold">Payment successfull...!!</h1></span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>