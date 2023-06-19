<?php
    include("connection.php");
    if(isset($_POST['submit']))
    {
    $email=$_POST['email'] ;
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo '<script>
        alert("Invalid email format")
    </script>';
 }
    $password=$_POST['password'];



    $sql="select * from login where email='$email' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

    if ($row["usertype"]=="admin")
    {
        echo '<script>
        alert("ADMIN Login Successful")
        window.location.href="adminpanel.php";
        </script>' ;
       
    }
    elseif($row["usertype"]=="user")
    {
        echo '<script>
        alert(" USER Login Successful")
        window.location.href="product.html";
        </script>' ;
    }
    else{
            echo '<script>
                window.location.href="signs.php";
                alert("Login Failed .Invalid Email or password")
                </script>' ;
        }
    }
   
?>