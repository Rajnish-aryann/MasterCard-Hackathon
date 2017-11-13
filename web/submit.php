 <?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("phpmyadmin", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$email = $_POST['email'];
$fname = $_POST['name'];
$cname = $_POST['cname'];
$cno = $_POST['cno'];
$ex1 = $_POST['ex1'];
$ex2 = $_POST['ex2'];
$cvv = $_POST['cvv'];
if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into payments(email, name, cname, cno,month_exp,Year_exp, cvv) values ('$email', '$fname', '$cname', '$cno','$ex1','$ex2','$cvv')");
echo "<br/><br/><span><h1 style="bold">Payment successfull...!!</h1></span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>