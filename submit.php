
<?php
    $dbhost="127.0.0.1";
    $dbuser="root";
    $dbpass="";
    $dbname="school";
    session_start();
    $conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if (!$conn){
        echo "connection failed".mysqli_connect_error();
    }
    $user=$_POST['username'];
    $password=$_POST['password'];
    $rpwd=$_POST['rpwd'];
    if($password==$rpwd)
    {
        
        $sql= "select *from login where user_id='$user'";
        $res=mysqli_query($conn,$sql);
        if (!$res){
            echo "Your choosen id is already exited";
            exit; 
        }

        else{
            $uid=$_SESSION['uid'];
            $sql1="insert into login values('$uid','$user','$password')";
            if(mysqli_query($conn,$sql1)){
                $sd=strtoupper($user) ;
                echo "<b>$user</b> <br/> GOOD 2 SEE U!</br>";
                echo "<h2>welcome back $uid</h2>";
                echo '<h1><br/><a href="index.html">visit outcome page</a></h1>';
                echo '<h1>This site is under construction</h1>';
                echo '<body align="center"><h1><br/><img src="hie.png" style=width:520px;height:300px;></h1></body>';
                header("Location: login.html");

                }
                else
                    echo "User id is not created";
        }
    }
    else
    {
        header("Location: signingup.html");
    }
    mysqli_close($conn);    
?>