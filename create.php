<?php

include 'partials/header.php';


require 'Controllers/usersController.php';


$user = [
    'id' => '',
    'name' => '',
    'username' => '',
    'email' => '',
    'address' => '',
    'phone' => '',
    'company' => '',
];



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user = createUser ($_POST);

        header("Location: index.php");
}; 
?>

<a class="btn btn-success btn-lg " href="index.php">All Users</a>
    <div class="container">
   
        <div class="card">
            <div class="card-header">
                <h3>Add new User</h3>
        
            </div>
            <div class="card-body">

                <form method="POST" enctype="form-data"
                    action="">
                    <div class="form-group">
                        <label>Name</label>
                        <input name="name" value="<?php echo $user['name'] ?>"
                            class="form-control ">
                        
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input name="username" value="<?php echo $user['username'] ?>"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" value="<?php echo $user['email'] ?>"
                            class="form-control">
                    </div>
                    <div class="form-group">
                    <br>
                        <p class="fw-bold">Address: </p>
                        <label>Street | Suite | Zipcode | City </label>
                        <input name="address" value="<?php echo $user['address'] ?>"
                            class="form-control">  
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input name="phone" value="<?php echo $user['phone'] ?>"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Company name </label>
                        <input name="company" value="<?php echo $user['company'] ?>"
                            class="form-control">
                    </div>
                    
                    <div class = "text-center">
                    <button class=" btn btn-info btn-lg ">Add User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

 </body>
</html>
