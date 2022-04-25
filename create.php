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

$errors = [
    'name' => '',
    'username' => '',
    'email' => '',
    'address' => '',
    'phone' => '',
    'company' => '',
];

$isValid = true;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user = array_merge ($user, $_POST);

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];

    if (!$name ){
        $isValid = false;
        $errors['name'] = 'name is required';
    }
    if (!$username || strlen($username) > 20 || strlen($username) < 4 ){
        $isValid = false;
        $errors['username'] = 'username is required, number of characters from 4 up to  20 ';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $isValid = false;
        $errors['email'] = 'valid email address is required';
    }
    if (!preg_match("/([0-9]{9})/", $phone)){
        $isValid = false;
        $errors['phone'] = 'the phone number must contain 9 digits';
    }
    if (!preg_match("/[A-Z0-9]+(?:-[A-Z0-9]+)+/", $address)){
        $isValid = false;
        $errors['address'] = 'valid address is required (has to contain letters, numbers and dash)';
    }
    if (!preg_match("/^[a-zA-Z]+$/", $company)){
        $isValid = false;
        $errors['company'] = 'Company name can contain only letters';
    }
    

if ($isValid){  
    $user = createUser ($_POST);

        header("Location: index.php");
    }      
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
                            class="form-control <?php echo $errors['name'] ? 'is-invalid' : '' ?>">
                        <div class="invalid-feedback">
                            <?php echo  $errors['name'] ?>
                        </div>      
                        
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input name="username" value="<?php echo $user['username'] ?>"
                            class="form-control <?php echo $errors['username'] ? 'is-invalid' : '' ?>">
                        <div class="invalid-feedback">
                            <?php echo  $errors['username'] ?>
                        </div>    
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" value="<?php echo $user['email'] ?>"
                            class="form-control <?php echo $errors['email'] ? 'is-invalid' : '' ?>">
                        <div class="invalid-feedback">
                            <?php echo  $errors['email'] ?>
                        </div>    
                    </div>
                    <div class="form-group">
                    <br>
                        <p class="fw-bold">Address: </p>
                        <label>Street | Suite | Zipcode | City </label>
                        <input name="address" value="<?php echo $user['address'] ?>"
                            class="form-control <?php echo $errors['address'] ? 'is-invalid' : '' ?>">
                        <div class="invalid-feedback">
                            <?php echo  $errors['address'] ?>
                        </div>      
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input name="phone" value="<?php echo $user['phone'] ?>"
                            class="form-control <?php echo $errors['phone'] ? 'is-invalid' : '' ?>">
                        <div class="invalid-feedback">
                            <?php echo  $errors['phone'] ?>
                        </div>   
                    </div>
                    <div class="form-group">
                        <label>Company name </label>
                        <input name="company" value="<?php echo $user['company'] ?>"
                            class="form-control <?php echo $errors['company'] ? 'is-invalid' : '' ?>">
                        <div class="invalid-feedback">
                            <?php echo  $errors['company'] ?>
                        </div>
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
