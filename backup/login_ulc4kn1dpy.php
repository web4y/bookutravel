
<html lang="en">
<head>
	<title>Login</title>
	
	</head>
	<body>
	<?php
session_start();
$conn=mysqli_connect("localhost","artrcfaw_bookutravel","artravel80!","artrcfaw_boo");


if($_SERVER['REQUEST_METHOD']=="POST")
{

    
  $username=$_POST['username'];
  $password=$_POST['password'];
  $sql="Select * from users Where Username='$username' and Password='$password'";
  $result=mysqli_query($conn,$sql);
    
  while($row=$result->fetch_assoc())
    {
        echo $row["Username"]."<br>".$row["Password"]."<br>";
    }
  $count=mysqli_num_rows($result);
  if($count==1)
  {
      $_SESSION['name']=$username;
      $_SESSION['pass']=$password;
     header("Location:members.php");
  }else
  {
      echo "Wrong username or password";
  }
  
    
}
?>
	
	
	</body>
	
</html>




<?php
echo "<mm:dwdrfml documentRoot=" . __FILE__ .">";$included_files = get_included_files();foreach ($included_files as $filename) { echo "<mm:IncludeFile path=" . $filename . " />"; } echo "</mm:dwdrfml>";
?>