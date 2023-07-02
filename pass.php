
<?php
    $dbhost="127.0.0.1";
    $dbuser="root";
    $dbpass="";
    $dbname="school";

    $conn= new mysqli($dbhost,$dbuser,$dbpass,$dbname);
    if (!$conn){
        echo "connection failed".mysqli_connect_error();
    }
else{
    $user=$_POST['username'];
    $password=$_POST['passwor'];
   
    $sql= "select *from login where user_id='$user'and password='$password'";
    $res=$conn->query($sql);

    if ($res->num_rows>0){
       $sd=strtoupper($user) ;
        echo "<b>$user</b> <br/> GOOD 2 SEE U!</br>";
        echo "<h2>welcome back $sd</h2>";
        echo '<h1><br/><a href="index.html"><b>next page</b></a></h1>';
        echo '<h1>This page is under construction</h1>';
        echo '<body align="center"><h1><br/><img src="hie.png" style=width:520px;height:300px;></h1></body>';
      //  header("Location: index.html");
    }

    else{
        
         echo "<h1>Invalid username and password</h1><br/>";
        exit; 
    }
    mysqli_close($conn);    
}
?>