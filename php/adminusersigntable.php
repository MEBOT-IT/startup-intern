<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="adminusersign.css">
    
    
</head>

<body>
<header class="header">
<div class="flex">

   <a href="#" class="logo"><img src="./images/adminlogo.png" height="50px" width="50px" >ADMIN PANEL</a>

   <nav class="navbar">
      <a href="farm.html">HomePage</a>
      <a href="adminpanel.php">Addproducts</a>
      <a href="product.php">Viewproducts</a>
   </nav>

   <a href="adminusersigntable.php" class="user" >User Details </a>

   <div id="menu-btn" class="fas fa-bars"></div>

</div>

</header>
    <div class="container my-5">
        <h2><center>USER SIGNUP DETAILS</center></h2>
        <a class="btn" id="client" href="adminusersign.php" role="button">New User</a>
        <br>
        <table class="table">
            <thead>
                <tr id="heading">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $connection=new mysqli("localhost","root","","startup");
                //check connection
                if($connection->connect_error){
                    die("connect failed ".$connection->connect_error);
                }
                //reading rows from the table
                $sql="select * from signup";
                $result=$connection->query($sql);
                if(!$result){
                    die("Invalid query: ".$connection->error);
                }
                //read data of each row
                while($row=$result->fetch_assoc()){
                    echo"
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[created_at]</td>
                    <td> 
                        <a class='btn btn-primary btn-sm' href='adminusersignedit.php?id=$row[id]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='adminusersigndel.php?id=$row[id]'>Delete</a>
                    </td>
                </tr>
                    ";


                }
                ?>
                
            </tbody>

        </table>
</div>
 <script> 
 let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};

window.onscroll = () =>{
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');
};


document.querySelector('#close-edit').onclick = () =>{
   document.querySelector('.edit-form-container').style.display = 'none';
   window.location.href = 'adminpanel.php';
};
</script>    
</body>
</html>