<?php
$servername="localhost";
$username="root";
$password="";
$database="startup";
$connection=new mysqli($servername,$username,$password,$database);
$id="";
$name="";
$email="";
$errorMessage="";
$successMessage="";

if( $_SERVER['REQUEST_METHOD'] =='GET'){
    //shows the data of the client
    if(!isset($_GET["id"])){
        header("location:adminusersigntable.php");
        exit;
    }
    $id=$_GET["id"];
    //reading the data of the selected client
    $sql="select * from signup where id=$id";
    $result=$connection->query($sql);
    $row=$result->fetch_assoc();
    if(!$row){
        header("location:adminusersigntable.php");
        exit;
    }
 //   $name=$row["name"];
 //   $email=$row["email"];
   // $phone=$row["phone"];
    //$address=$row["address"];

   $id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    
}

    if( $_SERVER['REQUEST_METHOD'] =='POST'){
    do{
   $id=$_POST["id"];
   $name=$_POST["name"];
   $email=$_POST["email"];
   

 echo $id;
 echo $name;
        if(empty($id) ||empty($name) || empty($email)  ){
            $errorMessage="All the fields are required";
            
            break;
        }
        $sql="update signup ".
        "set name='$name ', email='$email' ".
        "where id=$id ";
        echo $sql;
        $result=$connection->query($sql);
        if(!$result){
            $errorMessage="Invalid query: ".$connection->error;
            break;
        }
        $successMessage="User added successfully";
        header("location: adminusersigntable.php");
        exit;

    }while(false);

}
else{
    //updates the data of the client

   //$id=$_POST["id"];
   //$name=$_POST["name"];
   //$email=$_POST["email"];
   //$phone=$_POST["phone"];
   //$address=$_POST["address"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signupdate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        
        <?php 
       if (!empty($errorMessage)) {
        echo "<script>alert('$errorMessage');</script>";
    }
        
        ?>
        
        <div class="container">
        <img src="images/update.jpeg" height="100%" width="100%" alt="">
        <div class="error-container">
            <div class="error-message"></div> <!-- Container for the error message -->
        </div>
        <div class="row">
            <div class="subcontainer">
                <form method="post">                <input type="hidden" name="id" value="<?php echo $id; ?>">
                  <div class="newclientform"></br>
                    <h1 class='newclient'>Update User</h1>
                    <div class="logo1"><i class="fa-solid fa-users"></i></div>
                    </br>
                    <label for="userName">Name</label>&nbsp;&nbsp;&nbsp;
                    <input type="text" id="userName" name="name" class="fields" >
                    </br></br>
                    <label for="email">Email</label>&nbsp;&nbsp;&nbsp;
                    <input type="email" id="email" name="email"class="fields" >
                    </br></br>
                    <div class="buttons">
                        <button class="submit">Submit</button>
                        <button class="cancel">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        </br></br></br>
    </div>
 

</div>
</form>

        

            <?php 
            if(!empty($successMessage)){
                
                    echo "
                    <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-6'>
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>$successMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
                    <div>
                    <div>
                    <div>";
                    
                

            }

            ?>
        






</body>
</html>