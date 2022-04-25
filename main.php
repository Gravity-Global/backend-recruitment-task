<?php

// Please add your logic here

require 'Controllers/usersController.php';

$users = getUsers();
?>


<div class = "container"></div>
  
    <p class ="text-center ">
    <a class="btn btn-warning btn-lg " href="create.php">Add new User</a>
    </p>
  
    <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Company</th>
            
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['username'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php if (is_string($user['address'])) {
                               echo $user['address']; }
                               else {
                          echo  $user['address']['street']." ".
                                $user['address']['suite']." ".
                                $user['address']['zipcode']." ".  
                                $user['address']['city']; }?></td>

                    <td><?php echo $user['phone'] ?> </td>
                    <td><?php  if (is_string($user['company'])){
                                 echo $user['company']; }
                                 else {
                            echo $user['company']['name']; }?> 
                    </td>
                    <td>
                        <form method="POST" action="delete.php">
                            <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                            <button class="btn btn-sm btn-danger">Remove</button>
                        </form>
                    </td>   

             </tr>
         <?php endforeach; ?>
         </tbody>
</div>
