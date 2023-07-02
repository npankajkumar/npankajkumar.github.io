<?php
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="school";

    $conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if (!$conn){
        echo "connection failed".mysqli_connect_error();
    }
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $fname=$_POST['fname'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        $addr=$_POST['addr'];
        $email=$_POST['email'];


        $result=$conn->query("select max(sno) from student");
        $row=$result->fetch_array();
        $uniq_id=$row[0]+1;
        $genfid=date('y')."MLRIT".$uniq_id;

    $sql_query="INSERT INTO student VALUES ('$uniq_id','$genfid','$name','$fname','$gender','$dob','$addr','$email')";
        
        if(mysqli_query($conn,$sql_query))
            {
                $NEW=strtoupper($name);
                echo '<i>CONGRATULATIONS YOUR REGISTRATION IS COMPLETED</i><br/>';
                echo "<b>$NEW</b> <br/> WE WILL SEND YOU THE EMAIL ASAP!";
                echo '<h1><br/><a href="signingup.html">signing up page</a></h1>';
                echo '<body align="center"><h1><br/><img src="tq.png"></h1></body>';
                
            }
        else
        {
            echo "Error: ".$sql."" .mysqli_error($conn);
        }
    }
        mysqli_close($conn);
?>

